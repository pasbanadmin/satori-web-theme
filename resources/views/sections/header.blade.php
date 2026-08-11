@php
  $headerNavItems = [
    ['label' => __('Stay', 'sage'), 'url' => '/stay'],
    ['label' => __('Dining', 'sage'), 'url' => '/dining'],
    ['label' => __('Wellness', 'sage'), 'url' => '/wellness'],
    ['label' => __('Experiences', 'sage'), 'url' => '/experiences'],
    ['label' => __('Gatherings', 'sage'), 'url' => '/gatherings'],
    ['label' => __('The Satori Way', 'sage'), 'url' => '/the-satori-way'],
    ['label' => __('Contact', 'sage'), 'url' => '/contact-us'],
  ];
@endphp

<header
  class="group sticky top-0 z-50 w-full bg-brand-sand transition-all duration-300 [.is-scrolled&]:border-b [.is-scrolled&]:border-brand-gold/30"
  data-header>
  <div class="relative z-50 mx-auto flex h-16 w-full max-w-7xl items-center justify-between gap-8 px-5 sm:px-8 ">
    <a class="font-heading text-2xl font-light uppercase tracking-[0.28em] text-brand-ink transition-colors duration-300 hover:text-brand-gold"
      href="{{ home_url('/') }}" aria-label="{{ $siteName }}">
      <img class="h-8 w-auto" src="/wp-content/uploads/2026/08/Satori_Logo.webp" alt="{{ $siteName }}">
    </a>

    <nav class="hidden lg:block" aria-label="{{ __('Primary navigation', 'sage') }}">
      <ul class="flex items-center gap-6">
        @foreach ($headerNavItems as $item)
          <li>
            <a class="text-[0.75rem] uppercase tracking-[0.2em] text-brand-ink transition-colors duration-300 hover:text-brand-gold"
              href="{{ $item['url'] }}">
              {{ $item['label'] }}
            </a>
          </li>
        @endforeach
      </ul>
    </nav>

    <div class="flex items-center gap-3">
      <a class="hidden items-center justify-center rounded-full border border-brand-gold px-5 py-2 text-sm uppercase text-brand-gold transition-colors tracking-[0.02em] duration-300 hover:bg-brand-gold hover:text-white sm:inline-flex"
        href="#book">
        {{ __('Book Your Stay', 'sage') }}
      </a>

      <button
        class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-brand-ink/30 text-brand-ink transition-colors duration-300 hover:border-brand-gold hover:text-brand-gold lg:hidden"
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
    class="fixed inset-0 z-40 flex translate-y-4 flex-col justify-center bg-brand-primary px-8 opacity-0 transition-all duration-300 lg:hidden group-[.is-menu-open]:translate-y-0 group-[.is-menu-open]:opacity-100"
    aria-label="{{ __('Mobile navigation', 'sage') }}" data-header-nav>
    <ul class="w-full">
      @foreach ($headerNavItems as $item)
        <li>
          <a class="block border-b border-brand-sand/10 py-5 font-heading text-3xl font-light text-brand-sand transition-colors duration-300 hover:text-brand-gold"
            href="{{ $item['url'] }}">
            {{ $item['label'] }}
          </a>
        </li>
      @endforeach
    </ul>

    <a class="mt-12 inline-flex items-center justify-center rounded-full bg-brand-gold px-6 py-3 text-sm uppercase tracking-[0.02em] text-brand-primary transition-colors duration-300 hover:bg-brand-sand hover:text-white"
      href="#book">
      {{ __('Book Your Stay', 'sage') }}
    </a>
  </nav>
</header>