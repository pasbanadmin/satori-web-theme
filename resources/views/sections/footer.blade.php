@php
  $footerNavItems = [
    ['label' => __('Stay', 'sage'), 'url' => '#stay'],
    ['label' => __('Dining', 'sage'), 'url' => '#dining'],
    ['label' => __('Wellness', 'sage'), 'url' => '#wellness'],
    ['label' => __('Experiences', 'sage'), 'url' => '#experiences'],
    ['label' => __('Gatherings', 'sage'), 'url' => '#gatherings'],
    ['label' => __('The Satori Way', 'sage'), 'url' => '#satori-way'],
  ];

  $footerContactItems = [
    __('Set above Mulshi Lake, Maharashtra', 'sage'),
    __('Sahyadri Hills, India', 'sage'),
  ];
@endphp

<footer class="bg-brand-primary text-brand-sand">
  <div class="mx-auto max-w-7xl px-5 py-16 sm:px-8 lg:px-16 lg:py-24">
    <div class="grid gap-12 border-b border-brand-sand/10 pb-14 lg:grid-cols-[1.4fr_1fr_1fr]">
      <div>
        <a class="inline-block text-sm uppercase tracking-[0.28em] text-brand-sand" href="{{ home_url('/') }}" aria-label="{{ $siteName }}">
          {{ __('Satori', 'sage') }}
        </a>

        <p class="mt-6 max-w-xl text-3xl font-light leading-tight text-brand-sand sm:text-4xl">
          {{ __('Luxury, stillness, and space to return to yourself.', 'sage') }}
        </p>

        <a class="mt-8 inline-flex items-center justify-center border border-brand-gold px-8 py-4 text-[0.8125rem] uppercase tracking-[0.22em] text-brand-sand transition-colors duration-300 hover:bg-brand-gold hover:text-brand-primary" href="#book">
          {{ __('Book Your Stay', 'sage') }}
        </a>
      </div>

      <nav aria-label="{{ __('Footer navigation', 'sage') }}">
        <p class="mb-5 text-[0.75rem] uppercase tracking-[0.28em] text-brand-gold">
          {{ __('Explore', 'sage') }}
        </p>

        <ul class="space-y-3">
          @foreach ($footerNavItems as $item)
            <li>
              <a class="text-sm text-brand-sand/70 transition-colors duration-300 hover:text-brand-sand" href="{{ $item['url'] }}">
                {{ $item['label'] }}
              </a>
            </li>
          @endforeach
        </ul>
      </nav>

      <div>
        <p class="mb-5 text-[0.75rem] uppercase tracking-[0.28em] text-brand-gold">
          {{ __('Contact', 'sage') }}
        </p>

        <ul class="space-y-3 text-sm text-brand-sand/70">
          @foreach ($footerContactItems as $item)
            <li>{{ $item }}</li>
          @endforeach
          <li>
            <a class="transition-colors duration-300 hover:text-brand-sand" href="mailto:reservations@satori.com">
              reservations@satori.com
            </a>
          </li>
          <li>
            <a class="transition-colors duration-300 hover:text-brand-sand" href="tel:+910000000000">
              +91 00000 00000
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="flex flex-col gap-4 pt-8 text-xs text-brand-sand/50 sm:flex-row sm:items-center sm:justify-between">
      <p>
        &copy; {{ date('Y') }} {{ $siteName }}. {{ __('All rights reserved.', 'sage') }}
      </p>

      <div class="flex gap-6">
        <a class="uppercase tracking-[0.2em] transition-colors duration-300 hover:text-brand-gold" href="#">
          {{ __('Privacy', 'sage') }}
        </a>
        <a class="uppercase tracking-[0.2em] transition-colors duration-300 hover:text-brand-gold" href="#">
          {{ __('Terms', 'sage') }}
        </a>
      </div>
    </div>
  </div>
</footer>
