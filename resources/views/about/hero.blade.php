@php
  $heroImage = '/wp-content/uploads/2026/08/Page-hero-—-home-woodhouse.webp';
  $heroAlt = __('The Satori estate above Mulshi Lake', 'sage');
@endphp

<section class="relative flex min-h-screen items-center overflow-hidden bg-brand-primary text-brand-sand" data-satoriway-hero>
  <img class="absolute inset-0 h-full w-full object-cover" src="{{ $heroImage }}" alt="{{ $heroAlt }}" data-satoriway-image>

  <div class="absolute inset-0 bg-gradient-to-t from-brand-primary via-brand-primary/60 to-brand-primary/35"></div>

  <div class="relative z-10 mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16" data-satoriway-item>
    <div class="flex items-center gap-4">
      <span class="h-px w-12 bg-brand-gold" aria-hidden="true"></span>

      <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
        {{ __('The Satori Way', 'sage') }}
      </p>
    </div>

    <h1 class="mt-8 max-w-3xl font-heading text-5xl font-light leading-none text-brand-sand sm:text-6xl">
      {{ __('A place for quiet luxury and inner connection.', 'sage') }}
    </h1>

    <div class="mt-12 flex items-center gap-4">
      <span class="h-px w-16 bg-brand-sand/40" aria-hidden="true"></span>

      <p class="text-[0.6875rem] uppercase tracking-[0.25em] text-brand-sand/70">
        {{ __('Mulshi, Maharashtra', 'sage') }}
      </p>
    </div>
  </div>
</section>
