@php
  $footerColumns = [
    [
      'heading' => __('Stay', 'sage'),
      'items' => [
        ['label' => __('All Homes', 'sage'), 'url' => '#stay'],
        ['label' => __('Orchard Cottages', 'sage'), 'url' => '#stay'],
        ['label' => __('Canopy Suites', 'sage'), 'url' => '#stay'],
        ['label' => __('Aves', 'sage'), 'url' => '#stay'],
        ['label' => __('Woodhouse', 'sage'), 'url' => '#stay'],
        ['label' => __('Perch', 'sage'), 'url' => '#stay'],
        ['label' => __('Hornbill', 'sage'), 'url' => '#stay'],
        ['label' => __('The Estate', 'sage'), 'url' => '#stay'],
      ],
    ],
    [
      'heading' => __('The Estate', 'sage'),
      'items' => [
        ['label' => __('Dining', 'sage'), 'url' => '#dining'],
        ['label' => __('Wellness & Spa', 'sage'), 'url' => '#wellness'],
        ['label' => __('Experiences', 'sage'), 'url' => '#experiences'],
        ['label' => __('Gatherings', 'sage'), 'url' => '#gatherings'],
        ['label' => __('The Satori Way', 'sage'), 'url' => '#satori-way'],
      ],
    ],
    [
      'heading' => __('Plan', 'sage'),
      'items' => [
        ['label' => __('Book Your Stay', 'sage'), 'url' => '#book'],
        ['label' => __('Enquire', 'sage'), 'url' => '#book'],
        ['label' => __('Getting Here', 'sage'), 'url' => '#location'],
        ['label' => __('FAQ', 'sage'), 'url' => '#'],
        ['label' => __('+91 00000 00000', 'sage'), 'url' => 'tel:+910000000000'],
        ['label' => __('reservations@satori.com', 'sage'), 'url' => 'mailto:reservations@satori.com'],
      ],
    ],
  ];

  $footerLegalItems = [
    ['label' => __('Privacy Policy', 'sage'), 'url' => '#'],
    ['label' => __('Terms', 'sage'), 'url' => '#'],
    ['label' => __('Cancellation Policy', 'sage'), 'url' => '#'],
  ];
@endphp

<footer class="bg-brand-primary text-brand-sand">
  <div class="h-px w-full bg-gradient-to-r from-transparent via-brand-gold/60 to-transparent" aria-hidden="true"></div>

  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
    <div class="py-20 lg:py-28">
      <div class="mt-0 grid gap-12 md:grid-cols-2 lg:grid-cols-[1.2fr_1fr_1fr_1.4fr] lg:gap-12 xl:gap-16">
        @foreach ($footerColumns as $column)
          <nav aria-label="{{ $column['heading'] }}">
            <p class="mb-6 text-[0.75rem] uppercase tracking-[0.28em] text-brand-gold">
              {{ $column['heading'] }}
            </p>

            <ul class="space-y-3.5">
              @foreach ($column['items'] as $item)
                <li>
                  <a class="relative inline-block text-sm text-brand-sand/70 transition-colors duration-300 hover:text-brand-gold after:absolute after:-bottom-1 after:left-0 after:h-px after:w-0 after:bg-brand-gold after:transition-all after:duration-300 hover:after:w-full" href="{{ $item['url'] }}">
                    {{ $item['label'] }}
                  </a>
                </li>
              @endforeach
            </ul>
          </nav>
        @endforeach

        <div class="mt-1">
          <p class="text-[0.75rem] uppercase tracking-[0.28em] text-brand-gold">
            {{ __('Newsletter', 'sage') }}
          </p>

          <p class="mt-6 max-w-xs text-sm leading-6 text-brand-sand/70">
            {{ __('Notes from the estate — what’s growing, what’s changing, and when to come. A few times a year, never more.', 'sage') }}
          </p>

          <form class="mt-8" action="#" method="post">
            <label class="sr-only" for="footer-email">{{ __('Email address', 'sage') }}</label>

            <input
              class="w-full border-b border-brand-sand/30 bg-transparent py-3 text-sm text-brand-sand placeholder:text-brand-sand/40 focus:border-brand-gold focus:outline-none focus:ring-1 focus:ring-brand-gold/50"
              type="email"
              name="email"
              id="footer-email"
              autocomplete="email"
              placeholder="{{ __('Your email address', 'sage') }}"
              required
            >

            <button class="group mt-6 inline-flex items-center gap-2 text-[0.75rem] uppercase tracking-[0.2em] text-brand-gold transition-colors duration-300 hover:text-brand-sand" type="submit">
              {{ __('Subscribe', 'sage') }}
              <span class="inline-block transition-transform duration-300 group-hover:translate-x-1" aria-hidden="true">→</span>
            </button>
          </form>
        </div>
      </div>
    </div>

    <div class="pointer-events-none select-none" aria-hidden="true">
      <p class="whitespace-nowrap text-center font-heading text-[18vw] font-light leading-[0.7] tracking-tight text-brand-sand/[0.08] lg:text-[10rem]">
        SATORI
      </p>
    </div>

    <div class="flex flex-col gap-3 border-t border-brand-sand/5 py-7 text-[0.6875rem] uppercase tracking-[0.18em] text-brand-sand/40 sm:flex-row sm:items-center sm:justify-between">
      <p>
        &copy; {{ date('Y') }} {{ __('Satori Living Pvt Ltd', 'sage') }}
      </p>

      <div class="flex flex-wrap items-center gap-x-5 gap-y-2">
        @foreach ($footerLegalItems as $item)
          <a class="transition-colors duration-300 hover:text-brand-gold" href="{{ $item['url'] }}">
            {{ $item['label'] }}
          </a>
        @endforeach

        <span aria-hidden="true">·</span>

        <p>
          {{ __('Managed by Pasban — The Gatekeeper', 'sage') }}
        </p>
      </div>
    </div>
  </div>
</footer>
