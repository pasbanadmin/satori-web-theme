<?php

/**
 * Legal pages (Cancellation Policy, Terms of Stay).
 *
 * The footer links to these pages, so the theme creates them once if they
 * don't exist yet, using the Legal Page template. After that they are
 * ordinary WordPress pages: edit them in wp-admin, not here. Pages that
 * already exist (in any status) are never touched.
 *
 * Terms of Stay is created as a draft because the check-in and check-out
 * times are still to be confirmed. The footer only links to a page once it
 * is published (see published_page_url()).
 */

namespace App;

/**
 * @return array<string, array{title: string, status: string, content: string}>
 */
function legal_page_definitions(): array
{
    $email = 'satori.reservations@pasban.co';

    $cancellation = <<<HTML
<!-- wp:heading -->
<h2 class="wp-block-heading">Payment</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>100% payment is required to confirm your booking.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Cancellation</h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Free cancellation up to 14 days before arrival</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Within 14 days of arrival, or a no-show: 100% of the booking amount is charged</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Early departure: unused nights are charged in full</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Blackout dates: non-refundable</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Bookings for stays that include any of these dates are non-refundable once confirmed:</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>25 to 27 December 2026</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>31 December 2026 to 3 January 2027</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>23 to 26 January 2027</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>5 to 7 March 2027</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>20 to 22 March 2027</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>26 to 28 March 2027</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph -->
<p>Cancellations must be made in writing to <a href="mailto:{$email}">{$email}</a> and are confirmed once we acknowledge them.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Refunds</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Eligible refunds are paid within 7 working days to the original payment method, with no administration fee. Card and UPI reversals can take a further 5 to 10 working days to show.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Groups and events</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Group bookings (5 rooms or more), estate buyouts and events have their own terms, which we share with your proposal.</p>
<!-- /wp:paragraph -->
HTML;

    $terms = <<<HTML
<!-- wp:heading -->
<h2 class="wp-block-heading">Check-in and check-out</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Check-in from ___. Check-out by ___. Check-in closes at 6 PM. Early check-in and late check-out can be requested, are chargeable, and depend on availability.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Payment</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>100% payment is required to confirm your booking. You can pay by payment link, bank transfer (NEFT/IMPS) or UPI. We do not accept cash at the estate. See our <a href="https://www.satorimulshi.com/cancellation-policy/">Cancellation Policy</a> for cancellations and refunds.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Identification</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>A government photo ID with address (Aadhaar, driving licence or passport) is required for every guest above 4 years.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Security deposit</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>A refundable deposit of ₹7,500 is paid 2 days before check-in. We refund it at check-out, or by NEFT within 5 business days.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">On the estate</h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>No day visitors</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>No stag or bachelor groups</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>No film or photo shoots without prior approval</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Music only until 10 PM</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Smoking only in designated outdoor areas (₹5,000 fine for smoking indoors)</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>No outside food. Meals are served at The Nest. Infant food is an exception.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Swimwear and a swim cap are required in the pool. There is no lifeguard on duty.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Lake access only with a member of our team</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Events</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Weddings, celebrations and other events need approval from management and carry extra venue, deposit and setup charges.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Extra guests and staff</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Extra mattress ₹4,000. Driver accommodation ₹2,000. Maid accommodation ₹2,000.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Pets</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Pet-friendly arrangements can be made in select cottages with prior confirmation. Please speak to our reservations team before you book.</p>
<!-- /wp:paragraph -->
HTML;

    return [
        'cancellation-policy' => [
            'title' => 'Cancellation Policy',
            'status' => 'publish',
            'content' => $cancellation,
        ],
        'terms' => [
            'title' => 'Terms of Stay',
            'status' => 'draft',
            'content' => $terms,
        ],
    ];
}

/**
 * Create any missing legal page once per seed version.
 */
add_action('init', function () {
    $version = '1';
    $flag = 'satori_legal_pages_seeded';

    if (get_option($flag) === $version) {
        return;
    }

    // Claim the run before inserting so concurrent requests don't duplicate pages.
    if (get_option($flag) === false) {
        if (! add_option($flag, $version, '', false)) {
            return;
        }
    } else {
        update_option($flag, $version, false);
    }

    // Page content is trusted theme markup; don't let kses strip block comments.
    $kses = has_filter('content_save_pre', 'wp_filter_post_kses');
    if ($kses) {
        kses_remove_filters();
    }

    $created = false;

    foreach (legal_page_definitions() as $slug => $page) {
        if (get_page_by_path($slug, OBJECT, 'page')) {
            continue;
        }

        $id = wp_insert_post([
            'post_type' => 'page',
            'post_name' => $slug,
            'post_title' => $page['title'],
            'post_content' => $page['content'],
            'post_status' => $page['status'],
            'comment_status' => 'closed',
            'ping_status' => 'closed',
            'page_template' => 'template-legal.blade.php',
        ], true);

        if (! is_wp_error($id) && $page['status'] === 'publish') {
            $created = true;
        }
    }

    if ($kses) {
        kses_init_filters();
    }

    // Cached pages still carry the old footer; clear LiteSpeed once.
    if ($created) {
        do_action('litespeed_purge_all');
    }
}, 20);
