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
        return 'Villas & Cottages at Satori, Mulshi — 21 Rooms';
    }

    return $title;
}, 99);

add_filter('wpseo_title', function ($title) {
    if (is_page('stays') || is_page_template('template-stays.blade.php')) {
        return 'Villas & Cottages at Satori, Mulshi — 21 Rooms';
    }

    return $title;
}, 99);

add_filter('rank_math/frontend/title', function ($title) {
    if (is_page('stays') || is_page_template('template-stays.blade.php')) {
        return 'Villas & Cottages at Satori, Mulshi — 21 Rooms';
    }

    return $title;
}, 99);

/**
 * Resolve custom meta descriptions for Locations 13, 14, and 15.
 */
function get_custom_meta_description()
{
    if (is_front_page() || is_home()) {
        return 'A 21-room luxury retreat above Mulshi Lake';
    }

    if (is_page('stays') || is_page_template('template-stays.blade.php')) {
        return 'Twenty-one rooms across seven categories, from garden cottages to a signature lakeside villa.';
    }

    if (is_page('gatherings') || is_page_template('template-gathering.blade.php')) {
        return 'Take all twenty-one rooms for up to forty guests';
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

add_action('wp_head', function () {
    if (!defined('WPSEO_VERSION') && !defined('RANK_MATH_VERSION')) {
        $desc = get_custom_meta_description();
        if ($desc) {
            echo '<meta name="description" content="' . esc_attr($desc) . '">' . "\n";
        }
    }
}, 1);
