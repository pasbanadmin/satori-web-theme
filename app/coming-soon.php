<?php

namespace App;

/**
 * COMING SOON / PRE-LAUNCH MODE
 *
 * Controlled entirely via wp-config.php:
 *   define('COMING_SOON_MODE', true);  // Enable Coming Soon page
 *   define('COMING_SOON_MODE', false); // Disable / Live Site
 *
 * If not defined in wp-config.php, it defaults to disabled (live site).
 */

/**
 * Handle Coming Soon page rendering.
 */
add_action('template_redirect', function () {
    $isActive = defined('COMING_SOON_MODE') && (bool) COMING_SOON_MODE;
    $isPreview = isset($_GET['preview_coming_soon']) && current_user_can('manage_options');

    if (!$isActive && !$isPreview) {
        return;
    }

    // Never intercept wp-login, admin dashboard, AJAX, Cron, or REST API calls
    global $pagenow;
    if (
        is_admin() ||
        wp_doing_ajax() ||
        wp_doing_cron() ||
        (defined('REST_REQUEST') && REST_REQUEST) ||
        in_array($pagenow ?? '', ['wp-login.php', 'wp-register.php'])
    ) {
        return;
    }

    // Allow logged-in administrators and editors to view and test the live site
    if ($isActive && !$isPreview && is_user_logged_in() && (current_user_can('edit_posts') || current_user_can('manage_options'))) {
        return;
    }

    // 200 OK for pre-launch coming soon
    status_header(200);

    echo view('coming-soon')->render();
    exit;
}, 1);

/**
 * Filter document title when Coming Soon is active for public visitors or preview.
 */
add_filter('pre_get_document_title', function ($title) {
    $isActive = defined('COMING_SOON_MODE') && (bool) COMING_SOON_MODE;
    $isPreview = isset($_GET['preview_coming_soon']) && current_user_can('manage_options');

    if ($isPreview || ($isActive && !is_user_logged_in())) {
        return 'Satori Mulshi — A Luxury Retreat';
    }

    return $title;
}, 999);

/**
 * Discreet floating status indicator for logged-in administrators on the live site.
 */
add_action('wp_footer', function () {
    if (defined('COMING_SOON_MODE') && (bool) COMING_SOON_MODE && is_user_logged_in() && current_user_can('manage_options')) {
        $previewUrl = esc_url(add_query_arg('preview_coming_soon', '1', home_url('/')));
        echo '
        <div style="position:fixed;bottom:20px;right:20px;z-index:999999;background:#16100c;border:1px solid rgba(188,161,105,0.4);color:#efe4d0;padding:10px 18px;border-radius:9999px;font-family:sans-serif;font-size:12px;box-shadow:0 12px 30px rgba(0,0,0,0.6);display:flex;align-items:center;gap:12px;letter-spacing:0.04em;">
            <span style="display:inline-block;width:8px;height:8px;border-radius:50%;background:#BCA169;box-shadow:0 0 10px #BCA169;"></span>
            <span>Coming Soon Mode: <strong style="color:#BCA169;">Active for Public</strong></span>
            <a href="' . $previewUrl . '" target="_blank" style="color:#BCA169;text-decoration:underline;font-weight:600;margin-left:4px;">Preview</a>
        </div>';
    }
});
