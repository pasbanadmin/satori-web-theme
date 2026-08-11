<?php

/**
 * Contact Form AJAX Handler
 * Form submission is processed server-side via wp_ajax and wp_mail.
 */

namespace App;

/**
 * Handle the contact form submission via AJAX (both logged-in and non-logged-in users).
 */
add_action('wp_ajax_satori_contact', __NAMESPACE__ . '\\handle_contact_form');
add_action('wp_ajax_nopriv_satori_contact', __NAMESPACE__ . '\\handle_contact_form');

function handle_contact_form(): void
{
    // Verify nonce
    if (! isset($_POST['nonce']) || ! wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['nonce'])), 'satori_contact_nonce')) {
        wp_send_json_error(['message' => __('Security check failed. Please refresh the page and try again.', 'sage')], 403);
    }

    // Sanitize fields
    $name    = sanitize_text_field(wp_unslash($_POST['name'] ?? ''));
    $email   = sanitize_email(wp_unslash($_POST['email'] ?? ''));
    $phone   = sanitize_text_field(wp_unslash($_POST['phone'] ?? ''));
    $subject = sanitize_text_field(wp_unslash($_POST['subject'] ?? ''));
    $message = sanitize_textarea_field(wp_unslash($_POST['message'] ?? ''));
    $guests  = sanitize_text_field(wp_unslash($_POST['guests'] ?? ''));
    $dates   = sanitize_text_field(wp_unslash($_POST['dates'] ?? ''));

    // Server-side validation
    $errors = [];

    if (empty($name)) {
        $errors['name'] = __('Your name is required.', 'sage');
    }

    if (empty($email) || ! is_email($email)) {
        $errors['email'] = __('A valid email address is required.', 'sage');
    }

    if (empty($message)) {
        $errors['message'] = __('Please tell us a little about your enquiry.', 'sage');
    }

    if (! empty($errors)) {
        wp_send_json_error(['fields' => $errors], 422);
    }

    // Build email body
    $to      = get_option('admin_email');
    $subject_line = sprintf('[Satori Enquiry] %s — from %s', $subject ?: 'General Enquiry', $name);

    $body  = "New enquiry received from the Satori website.\n\n";
    $body .= "---\n";
    $body .= "Name:    {$name}\n";
    $body .= "Email:   {$email}\n";
    if ($phone)   $body .= "Phone:   {$phone}\n";
    if ($guests)  $body .= "Guests:  {$guests}\n";
    if ($dates)   $body .= "Dates:   {$dates}\n";
    if ($subject) $body .= "Subject: {$subject}\n";
    $body .= "---\n\n";
    $body .= "Message:\n{$message}\n";

    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        sprintf('Reply-To: %s <%s>', $name, $email),
    ];

    $sent = wp_mail($to, $subject_line, $body, $headers);

    if ($sent) {
        wp_send_json_success(['message' => __('Thank you — we will be in touch shortly.', 'sage')]);
    } else {
        wp_send_json_error(['message' => __('Your message could not be sent. Please try calling or emailing us directly.', 'sage')], 500);
    }
}
