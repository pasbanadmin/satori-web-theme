<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view.
     *
     * @return array
     */
    public function with(): array
    {
        $settings = \App\get_global_settings();

        return [
            'siteName' => $this->siteName(),
            'globalSettings' => $settings,
            'vimeoUrl' => $settings['vimeo_url'] ?? '',
            'contactEmail' => $settings['contact_email'] ?? '',
            'contactPhone' => $settings['contact_phone'] ?? '',
            'contactPhoneTel' => $settings['contact_phone_tel'] ?? '',
            'whatsappNumber' => $settings['whatsapp_number'] ?? '',
            'estateAddress' => $settings['address'] ?? '',
        ];
    }

    /**
     * Retrieve the site name.
     */
    public function siteName(): string
    {
        return get_bloginfo('name', 'display');
    }
}
