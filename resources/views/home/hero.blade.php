@php
  $heroImage = '/wp-content/uploads/2026/08/36_202309051441007901-bcf6382f-142f-4570-85ee-9cdb14a05cc3-scaled.webp';
  $heroAlt = __('Satori retreat hero image', 'sage');
@endphp

<section class="relative min-h-screen overflow-hidden bg-brand-primary text-brand-sand">
  <img class="absolute inset-0 h-full w-full object-cover" src="{{ $heroImage }}" alt="{{ $heroAlt }}">

  <div class="absolute inset-0 bg-brand-primary/60"></div>

  <div class="absolute inset-0 z-10 flex items-center">
    <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
      <div class="max-w-4xl">
        <h1 class="max-w-3xl text-5xl font-light leading-none text-brand-sand sm:text-6xl lg:text-7xl">
          {{ __('Luxury, stillness, and space to return to yourself.', 'sage') }}
        </h1>

        <p class="mt-7 max-w-2xl text-base leading-8 text-brand-sand sm:text-lg">
          {{ __('Set above Mulshi Lake and held by the quiet rhythms of the Sahyadris, Satori is a private retreat of fourteen homes where nature, design and thoughtful hospitality come together in balance.', 'sage') }}
        </p>

        <div class="mt-10 flex flex-col gap-4 sm:flex-row">
          <a class="inline-flex items-center justify-center rounded-full bg-brand-sand px-8 py-4 text-[0.8125rem] uppercase tracking-[0.2em] text-brand-primary transition-colors duration-300 hover:bg-brand-gold hover:text-brand-primary" href="#book">
            {{ __('Book Your Stay', 'sage') }}
          </a>

          <a class="inline-flex items-center justify-center rounded-full border-2 border-brand-sand bg-brand-primary/30 px-8 py-4 text-[0.8125rem] uppercase tracking-[0.2em] text-brand-sand backdrop-blur-sm transition-colors duration-300 hover:border-brand-gold hover:bg-brand-gold hover:text-brand-primary" href="#stay">
            {{ __('Explore the Homes', 'sage') }}
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
