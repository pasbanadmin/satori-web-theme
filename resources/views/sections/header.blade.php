@php
  $headerNavItems = [
    ['label' => __('Stays', 'sage'), 'url' => '/stays'],
    ['label' => __('Dining', 'sage'), 'url' => '/dining'],
    ['label' => __('Wellness', 'sage'), 'url' => '/wellness'],
    ['label' => __('Experiences', 'sage'), 'url' => '/experiences'],
    ['label' => __('Gatherings', 'sage'), 'url' => '/gatherings'],
    ['label' => __('The Satori Way', 'sage'), 'url' => '/the-satori-way'],
    ['label' => __('Contact', 'sage'), 'url' => '/contact-us'],
  ];
@endphp

<header class="group fixed top-0 left-0 right-0 z-50 w-full text-brand-sand transition-all duration-300" data-header>

  {{-- Main Nav Bar --}}
  <div
    class="relative z-50 mx-auto flex h-16 w-full max-w-7xl items-center justify-between gap-8 px-5 sm:px-8 transition-all duration-300 [.is-scrolled&]:h-16">
    <a class="font-heading text-2xl font-light uppercase tracking-[0.28em] transition-colors duration-300 hover:text-brand-gold"
      href="{{ home_url('/') }}" aria-label="{{ $siteName }}">
      <img class="h-8 w-auto" src="/wp-content/uploads/2026/08/Satori_Logo.webp" alt="{{ $siteName }}" data-header-logo>
    </a>

    <nav class="hidden min-[1150px]:block" aria-label="{{ __('Primary navigation', 'sage') }}" data-desktop-nav>
      <ul class="flex items-center gap-6">
        @foreach ($headerNavItems as $item)
          <li>
            <a class="text-[0.75rem] uppercase tracking-[0.2em] transition-colors duration-300 hover:text-brand-gold"
              href="{{ $item['url'] }}">
              {{ $item['label'] }}
            </a>
          </li>
        @endforeach
      </ul>
    </nav>

    <div class="flex items-center gap-3">
      <a class="hidden items-center justify-center rounded-full border px-5 py-2 text-sm uppercase tracking-[0.02em] transition-all duration-300 sm:inline-flex"
        href="https://www.secure-booking-engine.com/accounts/HXm66tqenYOx-VZR46IBBQ/properties/P9JyVOBiPOXdUDFklZVpVA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/cart/MdEkwhqgGd7N5zhKcIJ7Qw/#!/rooms"
        target="_blank" rel="noopener noreferrer" data-header-book-cta>
        {{ __('Book Your Stay', 'sage') }}
      </a>

      <button
        class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-current transition-colors duration-300 hover:border-brand-gold hover:text-brand-gold min-[1150px]:hidden"
        type="button" aria-expanded="false" data-header-toggle data-open-label="{{ __('Open menu', 'sage') }}"
        data-close-label="{{ __('Close menu', 'sage') }}">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
          stroke-linecap="round" aria-hidden="true">
          <path d="M4 7h16M4 12h16M4 17h16"></path>
        </svg>
        <span class="sr-only">{{ __('Open menu', 'sage') }}</span>
      </button>
    </div>
  </div>

  <nav
    class="fixed inset-0 z-60 flex translate-y-4 flex-col justify-center bg-brand-primary px-8 opacity-0 invisible pointer-events-none transition-all duration-300 min-[1150px]:hidden group-[.is-menu-open]:translate-y-0 group-[.is-menu-open]:opacity-100 group-[.is-menu-open]:visible group-[.is-menu-open]:pointer-events-auto"
    aria-label="{{ __('Mobile navigation', 'sage') }}" data-header-nav>
    <!-- close button -->
    <button class="absolute top-5 right-5 text-brand-sand" type="button" data-header-toggle>
      <svg class="size-7 rounded-full p-1 bg-brand-sand/10 text-brand-sand" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" aria-hidden="true">
        <path d="M18 6L6 18M6 6l12 12"></path>
      </svg>
      <span class="sr-only">{{ __('Close menu', 'sage') }}</span>
    </button>
    <ul class="w-full">
      @foreach ($headerNavItems as $item)
        <li>
          <a class="block border-b border-brand-sand/10 py-4 font-heading text-2xl font-light text-brand-sand transition-colors duration-300 hover:text-brand-gold"
            href="{{ $item['url'] }}">
            {{ $item['label'] }}
          </a>
        </li>
      @endforeach
    </ul>

    <a class="mt-10 inline-flex items-center justify-center rounded-full bg-brand-gold px-6 py-3 text-sm uppercase tracking-[0.02em] text-brand-primary transition-colors duration-300 hover:bg-brand-sand hover:text-white"
      href="https://www.secure-booking-engine.com/accounts/HXm66tqenYOx-VZR46IBBQ/properties/P9JyVOBiPOXdUDFklZVpVA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/cart/MdEkwhqgGd7N5zhKcIJ7Qw/#!/rooms"
      target="_blank" rel="noopener noreferrer">
      {{ __('Book Your Stay', 'sage') }}
    </a>
  </nav>
</header>