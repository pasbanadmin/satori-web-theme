@php
  $morningImage = '/wp-content/uploads/2026/08/36_202309051441007901-bcf6382f-142f-4570-85ee-9cdb14a05cc3-scaled.webp';
  $morningAlt = __('Sunrise over the lake at Satori', 'sage');
@endphp

<section class="bg-[#f7f3eb] pb-24">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
    <div class="mx-auto max-w-3xl text-center" data-reveal>
      <p class="text-[0.75rem] uppercase tracking-[0.3em]">
        <span class="text-brand-gold">01</span>
        <span class="mx-2 text-brand-ink/30" aria-hidden="true">—</span>
        <span class="text-brand-muted">{{ __('Morning', 'sage') }}</span>
      </p>

      <h2 class="mt-5 font-heading text-3xl font-light leading-tight text-brand-ink sm:text-4xl">
        {{ __('Begin softly', 'sage') }}
      </h2>

      <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-brand-muted sm:text-[16px]">
        {{ __('Wake to lake light and birdsong. Stretch into a sunrise yoga session on the lawn. Take tea on your verandah while the mist is still on the water. Walk the estate before the day fully opens. Mornings at Satori are built to restore clarity before conversation begins.', 'sage') }}
      </p>
    </div>

    <div class="group relative mt-14 overflow-hidden" data-reveal>
      <img class="aspect-[4/3] w-full object-cover transition-transform duration-[1200ms] ease-out group-hover:scale-105" src="{{ $morningImage }}" alt="{{ $morningAlt }}">
    </div>
  </div>
</section>
