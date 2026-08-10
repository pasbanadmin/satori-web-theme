@php
  $hospitalityImage = '/wp-content/uploads/2026/08/36_202309051441007901-bcf6382f-142f-4570-85ee-9cdb14a05cc3-scaled.webp';
  $hospitalityAlt = __('Warm hospitality at Satori, guests and hosts together', 'sage');
@endphp

<section class="bg-[#f7f3eb] py-24 lg:py-32">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
    <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-20">
      <div class="group relative overflow-hidden" data-reveal>
        <img class="aspect-[4/3] w-full object-cover transition-transform duration-[1200ms] ease-out group-hover:scale-105" src="{{ $hospitalityImage }}" alt="{{ $hospitalityAlt }}">
        <div class="absolute inset-0 bg-gradient-to-t from-brand-primary/35 via-transparent to-transparent"></div>
      </div>

      <div class="lg:py-8" data-reveal>
        <div class="flex items-baseline gap-4">
          <span class="font-heading text-3xl font-light leading-none text-brand-gold/60">04</span>

          <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
            {{ __('Hospitality with Warmth', 'sage') }}
          </p>
        </div>

        <h3 class="mt-4 font-heading text-3xl font-light leading-tight text-brand-ink sm:text-4xl">
          {{ __('Considered, never distant', 'sage') }}
        </h3>

        <p class="mt-6 max-w-lg text-base leading-8 text-brand-muted sm:text-[16px]">
          {{ __('Satori is deeply considered, but never remote. The service is personal, intuitive and gracious. Guests return not only for the estate but for the warmth of the people who care for it — many of them from the villages this land sits in.', 'sage') }}
        </p>

        <p class="mt-6 max-w-lg text-base leading-8 text-brand-muted sm:text-[16px]">
          {{ __('This is hospitality that makes room for comfort, celebration, stillness and spontaneity in equal measure.', 'sage') }}
        </p>
      </div>
    </div>
  </div>
</section>
