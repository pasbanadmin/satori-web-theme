@php
  $heroImage = '/wp-content/uploads/2026/08/home-aves.webp';
@endphp

<section class="relative flex min-h-[65vh] items-end overflow-hidden bg-brand-primary text-brand-sand"
  data-contact-hero>
  <img class="absolute inset-0 h-full w-full object-cover" src="{{ $heroImage }}"
    alt="{{ __('Satori estate, Mulshi — book your retreat', 'sage') }}" data-hero-image>

  <div class="absolute inset-0 bg-gradient-to-t from-brand-primary/85 via-brand-primary/50 to-transparent"></div>

  <div class="relative z-10 mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16 pb-12 lg:pb-16" data-hero-item>
    <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
      {{ __('Book Your Retreat', 'sage') }}
    </p>
    <h1 class="mt-4 font-heading text-4xl font-light leading-tight text-brand-sand sm:text-5xl lg:text-6xl">
      {{ __('Begin planning your time at Satori.', 'sage') }}
    </h1>
  </div>
</section>