@php
  $heroImage = '/wp-content/uploads/2026/08/Page-hero-—-cycling.webp';
  $heroAlt = __('A quiet morning over the Satori estate', 'sage');
@endphp

<section class="relative flex min-h-screen items-center justify-center overflow-hidden bg-brand-primary text-brand-sand" data-experiences-hero>
  <img class="absolute inset-0 h-full w-full object-cover" src="{{ $heroImage }}" alt="{{ $heroAlt }}" data-experiences-image>

  <div class="absolute inset-0 bg-gradient-to-t from-brand-primary/90 via-brand-primary/35 to-brand-primary/20"></div>

  <div class="relative z-10 mx-auto w-full max-w-4xl px-5 py-32 text-center sm:px-8" data-experiences-item>
    <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
      {{ __('Experiences', 'sage') }}
    </p>

    <span class="mx-auto mt-6 block h-px w-12 bg-brand-gold" aria-hidden="true"></span>

    <h1 class="mt-10 font-heading text-5xl font-light leading-none text-brand-sand sm:text-6xl">
      {{ __('Gentle rituals, shared moments, and the luxury of unhurried time.', 'sage') }}
    </h1>

    <p class="mt-12 text-[0.6875rem] uppercase tracking-[0.25em] text-brand-sand/70">
      {{ __('A day at Satori', 'sage') }}
    </p>
  </div>
</section>
