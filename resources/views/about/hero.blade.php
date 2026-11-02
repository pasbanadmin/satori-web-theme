@php
  $heroImage = '/wp-content/uploads/2026/08/Monsoon-band-—-lake-shore.webp';
  $heroAlt = __('The Satori estate above Mulshi Lake', 'sage');
@endphp

<section class="relative flex min-h-[calc(100vh-7rem)] items-end overflow-hidden bg-brand-primary text-brand-sand"
  data-satoriway-hero>
  <img class="absolute inset-0 h-full w-full object-cover" src="{{ $heroImage }}" alt="{{ $heroAlt }}"
    data-satoriway-image>

  {{-- Lightened bottom-only gradient overlay --}}
  <div class="absolute inset-0"
    style="background: linear-gradient(to top, rgba(16, 12, 9, 0.88) 0%, rgba(16, 12, 9, 0.65) 25%, rgba(16, 12, 9, 0.35) 45%, rgba(16, 12, 9, 0) 65%); pointer-events: none;">
  </div>

  <div class="relative z-10 mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16 pb-14 lg:pb-20" data-satoriway-item>
    <h1 class="mt-4 font-heading text-5xl font-light leading-none text-brand-sand sm:text-6xl lg:text-7xl"
      style="text-shadow: 0 2px 20px rgba(0, 0, 0, 0.9);">
      {{ __('THE SATORI WAY', 'sage') }}
    </h1>

    <div class="mt-4 flex items-center gap-8">
      <p class="max-w-2xl md:text-2xl text-lg leading-8 text-brand-sand font-heading"
        style="text-shadow: 0 1px 12px rgba(0, 0, 0, 0.85);">
        {{ __('A place that values quiet over display.', 'sage') }}
      </p>
    </div>
  </div>

  <div class="absolute bottom-0 right-20 z-10 hidden items-center gap-3 pb-10 lg:flex" data-satoriway-item
    aria-hidden="true">
    <span class="block h-12 w-px bg-gradient-to-b from-brand-gold to-transparent"></span>
    <span class="text-[0.65rem] uppercase tracking-[0.3em] text-brand-sand/75"
      style="text-shadow: 0 1px 8px rgba(0, 0, 0, 0.85);">
      {{ __('Scroll', 'sage') }}
    </span>
  </div>
</section>
