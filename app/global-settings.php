<?php

namespace App;

/**
 * Register Global Settings Custom Post Type.
 */
add_action('init', function () {
    $labels = [
        'name'                  => _x('Global Settings', 'Post type general name', 'sage'),
        'singular_name'         => _x('Global Setting', 'Post type singular name', 'sage'),
        'menu_name'             => _x('Global Settings', 'Admin Menu text', 'sage'),
        'name_admin_bar'        => _x('Global Setting', 'Add New on Toolbar', 'sage'),
        'add_new'               => __('Add Setting', 'sage'),
        'add_new_item'          => __('Add New Global Setting', 'sage'),
        'new_item'              => __('New Global Setting', 'sage'),
        'edit_item'             => __('Edit Global Setting', 'sage'),
        'view_item'             => __('View Global Setting', 'sage'),
        'all_items'             => __('All Settings', 'sage'),
        'search_items'          => __('Search Settings', 'sage'),
        'not_found'             => __('No settings found.', 'sage'),
        'not_found_in_trash'    => __('No settings found in Trash.', 'sage'),
    ];

    $args = [
        'labels'             => $labels,
        'public'             => false,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => false,
        'rewrite'            => false,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 80,
        'menu_icon'          => 'dashicons-admin-generic',
        'supports'           => ['title'],
        'show_in_rest'       => false,
    ];

    register_post_type('global_setting', $args);
});

/**
 * Register Meta Boxes for Global Settings.
 */
add_action('add_meta_boxes', function () {
    add_meta_box(
        'global_settings_meta_box',
        __('Site Configuration & Contact Info', 'sage'),
        __NAMESPACE__ . '\\render_global_settings_meta_box',
        'global_setting',
        'normal',
        'high'
    );
});

/**
 * Render Meta Box HTML.
 */
function render_global_settings_meta_box($post)
{
    wp_nonce_field('global_settings_nonce_action', 'global_settings_nonce');

    $vimeoUrl = get_post_meta($post->ID, '_global_vimeo_url', true);
    $contactEmail = get_post_meta($post->ID, '_global_contact_email', true);
    $contactPhone = get_post_meta($post->ID, '_global_contact_phone', true);
    $whatsappNumber = get_post_meta($post->ID, '_global_whatsapp_number', true);
    $instagramUrl = get_post_meta($post->ID, '_global_instagram_url', true);
    $facebookUrl = get_post_meta($post->ID, '_global_facebook_url', true);
    $address = get_post_meta($post->ID, '_global_address', true);
    ?>
    <style>
        .gs-field-group { margin-bottom: 20px; }
        .gs-field-group label { display: block; font-weight: 600; margin-bottom: 6px; font-size: 14px; color: #1d2327; }
        .gs-field-group input[type="text"],
        .gs-field-group input[type="email"],
        .gs-field-group input[type="url"],
        .gs-field-group textarea { width: 100%; max-width: 600px; padding: 8px 12px; border: 1px solid #8c8f94; border-radius: 4px; }
        .gs-field-group .description { color: #646970; font-size: 12px; margin-top: 5px; }
        .gs-section-title { font-size: 15px; font-weight: 700; padding-bottom: 8px; border-bottom: 1px solid #dcdcde; margin: 25px 0 15px; color: #135e96; }
        .gs-section-title:first-child { margin-top: 5px; }
    </style>

    <div class="gs-container">
        <div class="gs-section-title"><?php esc_html_e('Video & Media Settings', 'sage'); ?></div>
        
        <div class="gs-field-group">
            <label for="global_vimeo_url"><?php esc_html_e('Hero Vimeo URL or Video ID', 'sage'); ?></label>
            <input type="text" id="global_vimeo_url" name="global_vimeo_url" value="<?php echo esc_attr($vimeoUrl); ?>" placeholder="https://player.vimeo.com/video/1219155902 or 1219155902" />
            <p class="description"><?php esc_html_e('Paste the Vimeo player URL, standard Vimeo link (e.g. https://vimeo.com/1219155902), or just the numeric Video ID.', 'sage'); ?></p>
        </div>

        <div class="gs-section-title"><?php esc_html_e('Contact Information', 'sage'); ?></div>

        <div class="gs-field-group">
            <label for="global_contact_email"><?php esc_html_e('Contact / Reservations Email', 'sage'); ?></label>
            <input type="email" id="global_contact_email" name="global_contact_email" value="<?php echo esc_attr($contactEmail); ?>" placeholder="satori.reservations@pasban.co" />
            <p class="description"><?php esc_html_e('Primary enquiry & reservations email shown in header, footer, contact form, and schema.', 'sage'); ?></p>
        </div>

        <div class="gs-field-group">
            <label for="global_contact_phone"><?php esc_html_e('Contact Mobile / Phone Number', 'sage'); ?></label>
            <input type="text" id="global_contact_phone" name="global_contact_phone" value="<?php echo esc_attr($contactPhone); ?>" placeholder="+91 92181 77261" />
            <p class="description"><?php esc_html_e('Direct phone number displayed on the site (e.g. +91 92181 77261).', 'sage'); ?></p>
        </div>

        <div class="gs-field-group">
            <label for="global_whatsapp_number"><?php esc_html_e('WhatsApp Number', 'sage'); ?></label>
            <input type="text" id="global_whatsapp_number" name="global_whatsapp_number" value="<?php echo esc_attr($whatsappNumber); ?>" placeholder="918076510462" />
            <p class="description"><?php esc_html_e('WhatsApp number with country code (e.g. 918076510462 or +91 80765 10462).', 'sage'); ?></p>
        </div>

        <div class="gs-section-title"><?php esc_html_e('Social & Location Settings (Optional)', 'sage'); ?></div>

        <div class="gs-field-group">
            <label for="global_instagram_url"><?php esc_html_e('Instagram Profile URL', 'sage'); ?></label>
            <input type="url" id="global_instagram_url" name="global_instagram_url" value="<?php echo esc_attr($instagramUrl); ?>" placeholder="https://www.instagram.com/satorimulshi/" />
        </div>

        <div class="gs-field-group">
            <label for="global_facebook_url"><?php esc_html_e('Facebook Profile URL', 'sage'); ?></label>
            <input type="url" id="global_facebook_url" name="global_facebook_url" value="<?php echo esc_attr($facebookUrl); ?>" placeholder="https://www.facebook.com/people/SatoriMulshi/61575644977898/" />
        </div>

        <div class="gs-field-group">
            <label for="global_address"><?php esc_html_e('Estate Address', 'sage'); ?></label>
            <input type="text" id="global_address" name="global_address" value="<?php echo esc_attr($address); ?>" placeholder="Satori Estate, Mulshi, Pune District" />
        </div>
    </div>
    <?php
}

/**
 * Save Global Settings Meta Data.
 */
add_action('save_post_global_setting', function ($postId) {
    if (! isset($_POST['global_settings_nonce']) || ! wp_verify_nonce($_POST['global_settings_nonce'], 'global_settings_nonce_action')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (! current_user_can('edit_post', $postId)) {
        return;
    }

    $fields = [
        'global_vimeo_url'      => '_global_vimeo_url',
        'global_contact_email'  => '_global_contact_email',
        'global_contact_phone'  => '_global_contact_phone',
        'global_whatsapp_number'=> '_global_whatsapp_number',
        'global_instagram_url'  => '_global_instagram_url',
        'global_facebook_url'   => '_global_facebook_url',
        'global_address'        => '_global_address',
    ];

    foreach ($fields as $postKey => $metaKey) {
        if (isset($_POST[$postKey])) {
            $value = sanitize_text_field(wp_unslash($_POST[$postKey]));
            update_post_meta($postId, $metaKey, $value);
        }
    }
});

/**
 * Helper: Format Vimeo URL/ID to background autoplay embed URL.
 */
function format_vimeo_embed_url(?string $vimeoInput): string
{
    $default = 'https://player.vimeo.com/video/1219155902?background=1&autoplay=1&loop=1&byline=0&title=0&muted=1';

    if (empty($vimeoInput)) {
        return $default;
    }

    $trimmed = trim($vimeoInput);

    // If it's already a full player URL with params
    if (str_contains($trimmed, 'player.vimeo.com/video/') && str_contains($trimmed, '?')) {
        return $trimmed;
    }

    // Extract video ID from URL or digits
    $videoId = null;
    if (preg_match('/(?:vimeo\.com\/(?:video\/)?|player\.vimeo\.com\/video\/)?(\d+)/', $trimmed, $matches)) {
        $videoId = $matches[1];
    }

    if ($videoId) {
        return "https://player.vimeo.com/video/{$videoId}?background=1&autoplay=1&loop=1&byline=0&title=0&muted=1";
    }

    return $trimmed;
}

/**
 * Helper: Get All Global Settings.
 */
function get_global_settings(): array
{
    static $settingsCache = null;

    if ($settingsCache !== null) {
        return $settingsCache;
    }

    $defaults = [
        'vimeo_url'         => 'https://player.vimeo.com/video/1219155902?background=1&autoplay=1&loop=1&byline=0&title=0&muted=1',
        'vimeo_embed_url'   => 'https://player.vimeo.com/video/1219155902?background=1&autoplay=1&loop=1&byline=0&title=0&muted=1',
        'contact_email'     => 'satori.reservations@pasban.co',
        'contact_phone'     => '+91 92181 77261',
        'contact_phone_tel' => '+919218177261',
        'whatsapp_number'   => '918076510462',
        'instagram_url'     => 'https://www.instagram.com/satorimulshi/',
        'facebook_url'      => 'https://www.facebook.com/people/SatoriMulshi/61575644977898/',
        'address'           => 'Satori Estate, Mulshi, Pune District',
    ];

    // Find the latest published global_setting post
    $posts = get_posts([
        'post_type'      => 'global_setting',
        'post_status'    => ['publish', 'draft', 'private'],
        'posts_per_page' => 1,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'suppress_filters' => true,
    ]);

    if (empty($posts)) {
        $settingsCache = $defaults;
        return $settingsCache;
    }

    $post = $posts[0];
    $vimeoRaw = get_post_meta($post->ID, '_global_vimeo_url', true);
    $email = get_post_meta($post->ID, '_global_contact_email', true);
    $phone = get_post_meta($post->ID, '_global_contact_phone', true);
    $whatsapp = get_post_meta($post->ID, '_global_whatsapp_number', true);
    $instagram = get_post_meta($post->ID, '_global_instagram_url', true);
    $facebook = get_post_meta($post->ID, '_global_facebook_url', true);
    $address = get_post_meta($post->ID, '_global_address', true);

    $phoneDisplay = !empty($phone) ? $phone : $defaults['contact_phone'];
    $phoneClean = preg_replace('/[^\d+]/', '', $phoneDisplay);
    if (!str_starts_with($phoneClean, '+')) {
        $phoneClean = '+' . $phoneClean;
    }

    $whatsappClean = !empty($whatsapp) ? preg_replace('/[^\d]/', '', $whatsapp) : $defaults['whatsapp_number'];

    $settingsCache = [
        'vimeo_url'         => !empty($vimeoRaw) ? format_vimeo_embed_url($vimeoRaw) : $defaults['vimeo_url'],
        'vimeo_embed_url'   => !empty($vimeoRaw) ? format_vimeo_embed_url($vimeoRaw) : $defaults['vimeo_embed_url'],
        'contact_email'     => !empty($email) ? $email : $defaults['contact_email'],
        'contact_phone'     => $phoneDisplay,
        'contact_phone_tel' => $phoneClean,
        'whatsapp_number'   => $whatsappClean,
        'instagram_url'     => !empty($instagram) ? $instagram : $defaults['instagram_url'],
        'facebook_url'      => !empty($facebook) ? $facebook : $defaults['facebook_url'],
        'address'           => !empty($address) ? $address : $defaults['address'],
    ];

    return $settingsCache;
}

/**
 * Helper: Get a specific global setting.
 */
function get_global_setting(string $key, $default = null)
{
    $settings = get_global_settings();
    return $settings[$key] ?? $default;
}
