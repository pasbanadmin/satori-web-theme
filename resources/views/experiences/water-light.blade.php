@php
  $waterLightImage = '/wp-content/uploads/2026/08/Water-and-light-—-the-pull-of-the-lake-—-lake-picnic.webp';
  $waterLightAlt = __('The lake and changing light at Satori', 'sage');
@endphp

<section class="bg-[#f7f3eb] pb-14 lg:pb-20">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
    <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-16">
      <div class="group relative overflow-hidden" data-experiences-parallax data-reveal>
        <img class="aspect-[4/3] w-full object-cover" src="{{ $waterLightImage }}" alt="{{ $waterLightAlt }}"
          data-experiences-image>
      </div>

      <div data-reveal>
        <p class="text-[0.75rem] uppercase tracking-[0.3em]">
          <span class="text-brand-gold">03</span>
          <span class="mx-2 text-brand-ink/30" aria-hidden="true">—</span>
          <span class="text-brand-muted">{{ __('Water & Light', 'sage') }}</span>
        </p>

        <h2 class="mt-5 font-heading text-3xl font-light leading-tight text-brand-ink sm:text-4xl">
          {{ __('The pull of the lake', 'sage') }}
        </h2>

        <p class="mt-6 max-w-2xl text-base leading-8 text-brand-muted sm:text-[16px]">
          {{ __('Picnics by the water. Sunset viewpoints. Long afternoons by the pool. The lake is not simply scenic — it changes the feel of a day. It opens up the view, quiets things down, and gives every gathering a different quality.', 'sage') }}
        </p>
      </div>
    </div>
  </div>
</section>