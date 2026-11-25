<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

/**
 * Custom page title for /stays (Location 12).
 */
add_filter('pre_get_document_title', function ($title) {
    if (is_page('stays') || is_page_template('template-stays.blade.php')) {
        return 'Villas & Cottages at Satori Mulshi — 21 Rooms';
    }

    if (is_page('press') || is_page_template('template-press.blade.php')) {
        return 'Press — Satori Mulshi';
    }

    return $title;
}, 99);

add_filter('wpseo_title', function ($title) {
    if (is_page('stays') || is_page_template('template-stays.blade.php')) {
        return 'Villas & Cottages at Satori Mulshi — 21 Rooms';
    }

    if (is_page('press') || is_page_template('template-press.blade.php')) {
        return 'Press — Satori Mulshi';
    }

    return $title;
}, 99);

add_filter('rank_math/frontend/title', function ($title) {
    if (is_page('stays') || is_page_template('template-stays.blade.php')) {
        return 'Villas & Cottages at Satori Mulshi — 21 Rooms';
    }

    if (is_page('press') || is_page_template('template-press.blade.php')) {
        return 'Press — Satori Mulshi';
    }

    return $title;
}, 99);

/**
 * Resolve custom meta descriptions for Locations 13, 14, and 15.
 */
function get_custom_meta_description()
{
    if (is_front_page() || is_home()) {
        return 'A private estate of twenty-one rooms above Mulshi Lake in the Sahyadris, about two hours from Pune.';
    }

    if (is_page('experiences') || is_page_template('template-experiences.blade.php')) {
        return 'Farm walks, the lake below the estate, bonfires, stargazing and long afternoons by the pool. Everything optional, nothing compulsory.';
    }

    if (is_page('stays') || is_page_template('template-stays.blade.php')) {
        return 'Twenty-one rooms across seven categories, from garden cottages to a signature lakeside villa.';
    }

    if (is_page('gatherings') || is_page_template('template-gathering.blade.php')) {
        return 'Take all twenty-one rooms for up to sixty guests';
    }

    if (is_page('know-before-you-go') || is_page_template('template-know-before-you-go.blade.php')) {
        return 'Meal plans, food, Wi-Fi, power, children, the lake walk and what costs extra: the plain facts about staying at Satori, so nothing comes as a surprise.';
    }

    if (is_page('press') || is_page_template('template-press.blade.php')) {
        return 'What Condé Nast Traveller, Femina, Mumbai Mirror, Manifest Life and The Gourmet Edit saw at Satori, a private estate of twenty-one rooms above Mulshi Lake, in the Sahyadris near Pune.';
    }

    if (is_page('the-land') || is_page_template('template-the-land.blade.php') || is_page_template('page-the-land.blade.php')) {
        return 'The birds, butterflies and gardens of Satori, a working estate above Mulshi Lake: the orchard counted tree by tree, a Nakshatra garden with a tree for every birth star, medicinal beds, a kitchen garden and a young forest.';
    }

    return null;
}

add_filter('wpseo_metadesc', function ($desc) {
    $custom = get_custom_meta_description();
    return $custom ?: $desc;
}, 99);

add_filter('rank_math/frontend/description', function ($desc) {
    $custom = get_custom_meta_description();
    return $custom ?: $desc;
}, 99);

/**
 * Keep link previews (Open Graph / Twitter cards) in step with the meta
 * descriptions above, so shared links never contradict the page.
 */
foreach ([
    'wpseo_opengraph_desc',
    'wpseo_twitter_description',
    'rank_math/opengraph/facebook/og_description',
    'rank_math/opengraph/twitter/twitter_description',
] as $hook) {
    add_filter($hook, function ($desc) {
        $custom = get_custom_meta_description();
        return $custom ?: $desc;
    }, 99);
}

add_action('wp_head', function () {
    if (!defined('WPSEO_VERSION') && !defined('RANK_MATH_VERSION')) {
        $desc = get_custom_meta_description();
        if ($desc) {
            echo '<meta name="description" content="' . esc_attr($desc) . '">' . "\n";
        }
    }
}, 1);

/**
 * Permalink of a published page, or null if no published page has that slug.
 *
 * Use this for links to pages that may not exist yet, so no link on the
 * site ever points at a 404. Results are cached per slug for the request.
 */
function published_page_url(string $slug): ?string
{
    static $cache = [];

    if (!array_key_exists($slug, $cache)) {
        $page = get_page_by_path($slug);
        $cache[$slug] = ($page && $page->post_status === 'publish') ? (get_permalink($page) ?: null) : null;
    }

    return $cache[$slug];
}

/**
 * /dining has no page of its own; send old links to the homepage.
 *
 * Only fires on a 404, so a real Dining page published later is never
 * hijacked.
 */
add_action('template_redirect', function () {
    if (!is_404()) {
        return;
    }

    $path = wp_parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);

    if (in_array($path, ['/dining', '/dining/'], true)) {
        wp_redirect(home_url('/'), 301);
        exit;
    }
});
