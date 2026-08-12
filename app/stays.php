<?php

/**
 * Stay content resolvers and helpers.
 *
 * Every stay on the estate is a `stay` custom post type. These helpers merge
 * CMS fields (Core custom fields today, ACF tomorrow) with the hardcoded
 * defaults in `app/stays-data.php`.
 *
 * CMS field names are stable so templates do not change when ACF arrives:
 *   satori_name, satori_category, satori_tagline, satori_overview,
 *   satori_ideal_for, satori_bedrooms, satori_sleeps, satori_setting,
 *   satori_price, satori_hero_image, satori_hero_video, satori_hero_position,
 *   satori_features, satori_gallery, satori_story, satori_experience,
 *   satori_experience_title, satori_experience_image, satori_inclusions
 */

namespace App;

require_once __DIR__ . '/stays-data.php';

use WP_Post;

/**
 * Resolve a stay's merged presentation data (CMS overrides + defaults).
 *
 * @param int|null $postId Stay post ID. Defaults to the current post.
 * @return array
 */
function stay_data($postId = null)
{
    $postId = $postId ?: get_the_ID();
    $slug = get_post_field('post_name', $postId) ?: '';

    $defaults = stays_defaults();
    $default = $defaults[$slug] ?? $defaults['_default'];

    $get = function ($key, $fallback = null) use ($postId) {
        $value = get_post_meta($postId, $key, true);

        return ($value === '' || $value === null || $value === false) ? $fallback : $value;
    };

    $list = function ($value, $fallback = null) {
        if (is_array($value)) {
            $value = array_values(array_filter(array_map('trim', $value)));

            return $value ?: $fallback;
        }

        $parts = preg_split('/[\r\n,]+/', (string) $value);
        $parts = array_values(array_filter(array_map('trim', $parts)));

        return $parts ?: $fallback;
    };

    $image = function ($value, $fallback = null) {
        if (is_numeric($value)) {
            $url = wp_get_attachment_image_url((int) $value, 'large');

            return $url ?: $fallback;
        }

        if (is_string($value) && filter_var($value, FILTER_VALIDATE_URL)) {
            return $value;
        }

        return $fallback;
    };

    $story = [];
    $storyMeta = $get('satori_story');

    if (is_array($storyMeta)) {
        foreach ($storyMeta as $index => $block) {
            $template = $default['story'][$index] ?? [];

            $story[] = [
                'heading' => $block['heading'] ?? $block['title'] ?? ($template['heading'] ?? ''),
                'image' => $image($block['image'] ?? '', $template['image'] ?? ''),
                'position' => $block['position'] ?? ($template['position'] ?? 'object-center'),
                'paragraphs' => $block['paragraphs'] ?? $block['text'] ?? ($template['paragraphs'] ?? []),
            ];
        }
    } else {
        $story = $default['story'];
    }

    $gallery = array_map(
        fn($item) => $image($item, ''),
        $list($get('satori_gallery'), [])
    );
    $gallery = array_values(array_filter($gallery));

    if (empty($gallery)) {
        $gallery = array_map(fn($item) => $item['src'], $default['gallery']);
    }

    $name = $default['name'] ?: get_the_title($postId);

    return [
        'slug' => $slug,
        'name' => $get('satori_name', $name),
        'category' => $get('satori_category', $default['category']),
        'tagline' => $get('satori_tagline', $default['tagline']),
        'overview' => $get('satori_overview', $default['overview']),
        'ideal_for' => $get('satori_ideal_for', $default['ideal_for']),
        'bedrooms' => (int) $get('satori_bedrooms', $default['bedrooms']),
        'sleeps' => (int) $get('satori_sleeps', $default['sleeps']),
        'setting' => $get('satori_setting', $default['setting']),
        'price' => (int) $get('satori_price', $default['price']),
        'hero_image' => $image($get('satori_hero_image'), $default['hero_image']),
        'hero_video' => $get('satori_hero_video', $default['hero_video']),
        'hero_position' => $get('satori_hero_position', $default['hero_position']),
        'story' => $story,
        'features' => $list($get('satori_features'), $default['features']),
        'gallery' => $gallery,
        'experience' => [
            'title' => $get('satori_experience_title', $default['experience']['title']),
            'paragraphs' => $list($get('satori_experience'), $default['experience']['paragraphs']),
            'image' => $image($get('satori_experience_image'), $default['experience']['image']),
        ],
        'inclusions' => $list($get('satori_inclusions'), $default['inclusions']),
    ];
}

/**
 * Resolve a stay's permalink from its slug, falling back to the rewrite path.
 *
 * @param string $slug Stay slug.
 * @return string
 */
function stay_url($slug)
{
    if (!$slug) {
        return home_url('/');
    }

    $post = get_page_by_path($slug, OBJECT, 'stay');

    if ($post instanceof WP_Post) {
        return get_permalink($post);
    }

    return home_url('/stays/' . $slug . '/');
}

/**
 * Resolve the URL of the Stays listing page (the page using the Stays template).
 *
 * @return string
 */
function stay_all_stays_url()
{
    $pages = get_pages([
        'meta_key' => '_wp_page_template',
        'meta_value' => 'template-stays.blade.php',
        'number' => 1,
    ]);

    if (!empty($pages)) {
        return get_permalink($pages[0]);
    }

    return home_url('/stays/');
}

/**
 * Dynamically generate the "Other Homes" recommendations.
 *
 * Prefers published stay posts; fills remaining slots with default stays.
 *
 * @param int    $postId      Current stay post ID.
 * @param string $excludeSlug Current stay slug to exclude.
 * @return array
 */
function stay_other_homes($postId, $excludeSlug = '')
{
    $posts = get_posts([
        'post_type' => 'stay',
        'post_status' => 'publish',
        'numberposts' => 3,
        'orderby' => 'menu_order date',
        'order' => 'ASC',
        'post__not_in' => $postId ? [$postId] : [],
    ]);

    $homes = [];

    foreach ($posts as $post) {
        $data = stay_data($post->ID);
        $image = has_post_thumbnail($post)
            ? get_the_post_thumbnail_url($post, 'large')
            : $data['hero_image'];

        $homes[] = [
            'name' => get_the_title($post),
            'url' => get_permalink($post),
            'image' => $image,
            'setting' => $data['setting'],
            'sleeps' => $data['sleeps'],
            'price' => $data['price'],
        ];

        if (count($homes) >= 3) {
            return $homes;
        }
    }

    $defaults = stays_defaults();

    foreach ($defaults as $key => $default) {
        if ($key === '_default' || $default['slug'] === $excludeSlug) {
            continue;
        }

        $homes[] = [
            'name' => $default['name'],
            'url' => stay_url($default['slug']),
            'image' => $default['hero_image'],
            'setting' => $default['setting'],
            'sleeps' => $default['sleeps'],
            'price' => $default['price'],
        ];

        if (count($homes) >= 3) {
            break;
        }
    }

    return $homes;
}

/**
 * Estate experiences shown in the "Explore the Estate" section.
 *
 * @return array
 */
function stay_estate_experiences()
{
    return [
        [
            'name' => __('Dining', 'sage'),
            'url' => home_url('/#dining'),
            'description' => __('Seasonal menus from the estate kitchen, served at The Nest.', 'sage'),
        ],
        [
            'name' => __('Wellness & Spa', 'sage'),
            'url' => home_url('/#wellness'),
            'description' => __('Treatments, the pool and quiet grounds built for rest.', 'sage'),
        ],
        [
            'name' => __('Experiences', 'sage'),
            'url' => home_url('/#experiences'),
            'description' => __('Walks, water and the working life of the farm and forest.', 'sage'),
        ],
        [
            'name' => __('Gatherings', 'sage'),
            'url' => home_url('/#gatherings'),
            'description' => __('Weddings, retreats and celebrations across the whole estate.', 'sage'),
        ],
    ];
}
