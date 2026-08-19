@php
  $heroImage = '/wp-content/uploads/2026/08/Page-hero-—-dining-chefs-table.webp';
  $heroAlt = __('Farm-to-table dining at Satori, Mulshi', 'sage');
@endphp

<section class="relative flex min-h-[calc(100vh-7rem)] items-end overflow-hidden bg-brand-primary text-brand-sand"
  data-dining-hero>
  <img class="absolute inset-0 h-full w-full object-cover" src="{{ $heroImage }}" alt="{{ $heroAlt }}" data-hero-image>

  <div class="absolute inset-0 bg-gradient-to-t from-brand-primary/85 via-brand-primary/50 to-transparent"></div>

  <div class="relative z-10 mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16 pb-14 lg:pb-20" data-hero-item>
    <h1 class="mt-4 font-heading text-5xl font-light leading-none text-brand-sand sm:text-6xl lg:text-7xl">
      {{ __('DINING', 'sage') }}
    </h1>

    <div class="mt-4 flex items-center gap-8">
      <p class="max-w-2xl md:text-2xl text-lg leading-8 text-brand-white font-heading">
        {{ __('Fifty steps from the bed to the kitchen. Fifty more to the field.', 'sage') }}
      </p>
    </div>
  </div>

  <div class="absolute bottom-0 right-20 z-10 hidden items-center gap-3 pb-10 lg:flex" data-hero-item aria-hidden="true">
    <span class="block h-12 w-px bg-gradient-to-b from-brand-gold to-transparent"></span>
    <span class="text-[0.65rem] uppercase tracking-[0.3em] text-brand-sand/60">
      {{ __('Scroll', 'sage') }}
    </span>
  </div>
</section>