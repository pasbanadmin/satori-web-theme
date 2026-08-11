@php
  $heroImage = '/wp-content/uploads/2026/08/36_202309051441007901-bcf6382f-142f-4570-85ee-9cdb14a05cc3-scaled.webp';
@endphp

<section class="relative flex min-h-[50vh] items-end overflow-hidden bg-brand-primary text-brand-sand"
  data-contact-hero>
  <img class="absolute inset-0 h-full w-full object-cover" src="{{ $heroImage }}"
    alt="{{ __('Satori estate, Mulshi — contact us', 'sage') }}">

  <div class="absolute inset-0 bg-gradient-to-t from-brand-primary/85 via-brand-primary/50 to-transparent"></div>

  <div class="relative z-10 mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16 pb-14 lg:pb-20" data-reveal>
    <h1 class="mt-4 font-heading text-4xl font-light leading-none text-brand-sand sm:text-5xl lg:text-6xl">
      {{ __('GET IN TOUCH', 'sage') }}
    </h1>
  </div>
</section>