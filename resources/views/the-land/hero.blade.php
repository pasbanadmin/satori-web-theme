@php
  $heroImage = '/wp-content/uploads/2026/11/land-hills-mist.webp';
  $heroAlt = __('Hills and mist above Mulshi Lake at Satori', 'sage');
@endphp

<section class="relative flex min-h-[calc(100vh-7rem)] items-end overflow-hidden bg-brand-primary text-brand-sand"
  data-land-hero>
  <img class="absolute inset-0 h-full w-full object-cover" src="{{ $heroImage }}" alt="{{ $heroAlt }}"
    data-land-image priority>

  <div class="absolute inset-0 bg-gradient-to-t from-brand-primary/90 via-brand-primary/45 to-transparent"></div>

  <div class="relative z-10 mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16 pb-14 lg:pb-20" data-land-item>
    <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold mb-3">
      {{ __('Flora & Fauna', 'sage') }}
    </p>

    <h1 class="font-heading text-5xl font-light leading-none text-brand-sand sm:text-6xl lg:text-7xl">
      {{ __('The Land', 'sage') }}
    </h1>

    <div class="mt-5 flex items-center">
      <p class="max-w-2xl font-heading italic text-xl sm:text-2xl leading-relaxed text-brand-sand/90">
        {{ __('The land came first. Two hundred species of plant, and the birds that came with them.', 'sage') }}
      </p>
    </div>
  </div>

  <div class="absolute bottom-0 right-20 z-10 hidden items-center gap-3 pb-10 lg:flex" aria-hidden="true">
    <span class="block h-12 w-px bg-gradient-to-b from-brand-gold to-transparent"></span>
    <span class="text-[0.65rem] uppercase tracking-[0.3em] text-brand-sand/60">
      {{ __('Scroll', 'sage') }}
    </span>
  </div>
</section>

