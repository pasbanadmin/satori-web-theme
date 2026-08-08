@php
  $locationStats = [
    ['value' => '1.5', 'unit' => __('hrs', 'sage'), 'label' => __('Pune', 'sage')],
    ['value' => '3', 'unit' => __('hrs', 'sage'), 'label' => __('Mumbai', 'sage')],
    ['value' => '45', 'unit' => __('min', 'sage'), 'label' => __('Pune Airport', 'sage')],
  ];
@endphp

<section id="location" class="bg-[#f7f3eb] py-24">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
    <div class="grid items-center gap-14 lg:grid-cols-2 lg:gap-20">
      <div class="relative overflow-hidden rounded-md border border-brand-ink/10 bg-brand-sand" data-reveal>
        <svg class="block h-auto w-full" viewBox="0 0 600 480" role="img" aria-label="{{ __('Stylised map of the Satori estate above Mulshi Lake', 'sage') }}">
          <path d="M 60 90 C 160 40, 300 60, 380 130 C 460 200, 520 300, 540 420" fill="none" stroke="#16100c" stroke-opacity="0.06" stroke-width="1.5" />
          <path d="M 40 160 C 150 110, 320 130, 420 220 C 500 290, 560 380, 570 440" fill="none" stroke="#16100c" stroke-opacity="0.06" stroke-width="1.5" />

          <path d="M 400 250 C 470 220, 560 250, 575 310 C 590 375, 540 430, 470 440 C 400 450, 355 395, 375 330 C 385 290, 360 270, 400 250 Z" fill="#16100c" fill-opacity="0.08" />

          <path d="M 10 470 C 120 450, 220 390, 330 350 C 400 325, 470 330, 555 360" fill="none" stroke="#16100c" stroke-opacity="0.3" stroke-width="2.5" stroke-linecap="round" stroke-dasharray="7 9" />

          <circle cx="330" cy="350" r="26" fill="#efe4d0" stroke="#16100c" stroke-opacity="0.15" stroke-width="1" />
          <circle cx="330" cy="350" r="10" fill="#BCA169" />
        </svg>

        <p class="absolute bottom-4 right-5 text-[0.65rem] uppercase tracking-[0.3em] text-brand-muted">
          {{ __('Mulshi, Maharashtra', 'sage') }}
        </p>
      </div>

      <div data-reveal>
        <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
          {{ __('Location', 'sage') }}
        </p>

        <h2 class="mt-4 font-heading text-4xl font-light leading-tight text-brand-ink sm:text-5xl">
          {{ __('Close enough to reach. Far enough to matter.', 'sage') }}
        </h2>

        <p class="mt-6 max-w-lg text-base leading-8 text-brand-muted sm:text-lg">
          {{ __('Set above Mulshi Lake in the Sahyadri foothills, Satori sits within easy reach of the city and a world away from it — held by forest, water, and a slower sense of time.', 'sage') }}
        </p>

        <div class="mt-12 grid grid-cols-3 divide-x divide-brand-ink/10 border-y border-brand-ink/10">
          @foreach ($locationStats as $stat)
            <div class="px-4 py-8 text-center">
              <p class="font-heading text-3xl font-light text-brand-ink sm:text-4xl">
                {{ $stat['value'] }}
                <span class="text-lg text-brand-muted">{{ $stat['unit'] }}</span>
              </p>
              <p class="mt-2 text-[0.65rem] uppercase tracking-[0.25em] text-brand-muted sm:text-[0.7rem]">
                {{ $stat['label'] }}
              </p>
            </div>
          @endforeach
        </div>

        <a class="mt-12 inline-flex items-center justify-center gap-2 rounded-full border border-brand-ink/30 px-6 py-3 text-[0.8125rem] uppercase tracking-[0.2em] text-brand-ink transition-colors duration-300 hover:border-brand-ink hover:bg-brand-ink hover:text-brand-sand" href="#location">
          {{ __('Getting Here', 'sage') }}
          <span aria-hidden="true">→</span>
        </a>
      </div>
    </div>
  </div>
</section>
