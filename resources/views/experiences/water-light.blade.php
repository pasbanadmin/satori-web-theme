@php
  $waterLightImage = '/wp-content/uploads/2026/08/36_202309051441007901-bcf6382f-142f-4570-85ee-9cdb14a05cc3-scaled.webp';
  $waterLightAlt = __('The lake and changing light at Satori', 'sage');
@endphp

<section class="bg-[#f7f3eb] pb-24">
  <div class="mx-auto w-full max-w-3xl px-5 text-center sm:px-8" data-reveal>
    <p class="text-[0.75rem] uppercase tracking-[0.3em]">
      <span class="text-brand-gold">03</span>
      <span class="mx-2 text-brand-ink/30" aria-hidden="true">—</span>
      <span class="text-brand-muted">{{ __('Water & Light', 'sage') }}</span>
    </p>

    <h2 class="mt-5 font-heading text-3xl font-light leading-tight text-brand-ink sm:text-4xl">
      {{ __('The pull of the lake', 'sage') }}
    </h2>

    <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-brand-muted sm:text-[16px]">
      {{ __('Picnics by the water. Sunset viewpoints. Long afternoons by the pool. The lake is not simply scenic — it changes the atmosphere of a day. It opens space, softens thought, and gives every gathering a more reflective quality.', 'sage') }}
    </p>
  </div>

  <div class="relative mt-14 overflow-hidden" data-experiences-parallax>
    <img class="aspect-[16/9] w-full object-cover sm:aspect-[21/10]" src="{{ $waterLightImage }}" alt="{{ $waterLightAlt }}" data-experiences-image>
  </div>
</section>
