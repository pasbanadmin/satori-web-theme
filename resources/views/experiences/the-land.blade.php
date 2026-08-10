@php
  $landImage = '/wp-content/uploads/2026/08/36_202309051441007901-bcf6382f-142f-4570-85ee-9cdb14a05cc3-scaled.webp';
  $landAlt = __('The landscape around the lake at Satori', 'sage');
@endphp

<section class="bg-[#f7f3eb] pb-24">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
    <div class="mx-auto max-w-3xl text-center" data-reveal>
      <p class="text-[0.75rem] uppercase tracking-[0.3em]">
        <span class="text-brand-gold">02</span>
        <span class="mx-2 text-brand-ink/30" aria-hidden="true">—</span>
        <span class="text-brand-muted">{{ __('The Land', 'sage') }}</span>
      </p>

      <h2 class="mt-5 font-heading text-3xl font-light leading-tight text-brand-ink sm:text-4xl">
        {{ __('Move through the landscape', 'sage') }}
      </h2>

      <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-brand-muted sm:text-[16px]">
        {{ __('Walk the Nakshatra garden, the herb and medicinal plots, the orchards and the flower-lined paths. Cycle the grounds. In season, join a plucking — fruit from the trees, vegetables from the beds — and then eat what you picked a few hours later. Explore trails and viewpoints around Mulshi with a guide who knows which ones are worth the climb.', 'sage') }}
      </p>
    </div>

    <div class="group relative mt-14 overflow-hidden" data-reveal>
      <img class="aspect-[3/2] w-full object-cover transition-transform duration-[1200ms] ease-out group-hover:scale-105" src="{{ $landImage }}" alt="{{ $landAlt }}">
    </div>
  </div>
</section>
