@php
  $heroImage = '/wp-content/uploads/2026/08/home-aves.webp';
@endphp

<section class="relative flex min-h-[75vh] items-end overflow-hidden bg-brand-primary text-brand-sand"
  data-contact-hero>
  <img class="absolute inset-0 h-full w-full object-cover" src="{{ $heroImage }}"
    alt="{{ __('Satori estate, Mulshi — contact us', 'sage') }}">

  <div class="absolute inset-0 bg-gradient-to-t from-brand-primary/85 via-brand-primary/50 to-transparent"></div>

  <div class="relative z-10 mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16 pb-12 lg:pb-16" data-reveal>
    <h1 class="mt-4 font-heading text-4xl font-light leading-none text-brand-sand sm:text-5xl lg:text-6xl">
      {{ __('Contact Us', 'sage') }}
    </h1>
    <p class=" mt-4 max-w-2xl md:text-2xl text-lg leading-8 text-brand-white font-heading">
      {{ __('Get in touch with us for any queries or bookings. We will be happy to help you with your stay at Satori.', 'sage') }}
    </p>
  </div>
</section>