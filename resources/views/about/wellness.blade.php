@php
  $wellnessImage = '/wp-content/uploads/2026/08/SATORI-round-2-04-scaled.webp';
  $wellnessAlt = __('The quiet atmosphere of the Satori estate', 'sage');
@endphp

<section class="relative flex min-h-[32rem] items-center overflow-hidden bg-brand-primary text-brand-sand lg:min-h-[40rem]" data-satoriway-wellness>
  <div class="absolute inset-0">
    <img class="h-full w-full object-cover" src="{{ $wellnessImage }}" alt="{{ $wellnessAlt }}" data-satoriway-image>
  </div>

  <div class="absolute inset-0 bg-brand-primary/70"></div>

  <div class="relative z-10 mx-auto w-full max-w-3xl px-5 py-24 text-center sm:px-8">
    <div class="flex items-center justify-center gap-4" data-satoriway-item>
      <span class="font-heading text-2xl font-light leading-none text-brand-gold/70">03</span>
      <span class="h-px w-10 bg-brand-gold" aria-hidden="true"></span>

      <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
        {{ __('Wellness as a Way of Being', 'sage') }}
      </p>
    </div>

    <h2 class="mt-7 font-heading text-4xl font-light leading-tight text-brand-sand sm:text-5xl" data-satoriway-item>
      {{ __('Atmosphere, not instruction', 'sage') }}
    </h2>

    <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-brand-sand/85 sm:text-lg" data-satoriway-item>
      {{ __('We believe wellness does not always need instruction. Sometimes it needs atmosphere.', 'sage') }}
    </p>

    <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-brand-sand/85 sm:text-lg" data-satoriway-item>
      {{ __('At Satori it is held in the quality of the silence, the beauty of the surroundings, the nourishment of the food, the possibility of movement, and the freedom to choose your own pace. Your retreat might look like yoga and long walks. Or a poolside afternoon and an early night. Or uninterrupted time with the people who matter most.', 'sage') }}
    </p>

    <div class="mx-auto mt-10 h-px w-12 bg-brand-gold" data-satoriway-item aria-hidden="true"></div>

    <p class="mx-auto mt-10 max-w-2xl font-heading text-3xl font-light leading-tight text-brand-gold sm:text-4xl" data-satoriway-item>
      {{ __('The goal is not optimisation. It is alignment.', 'sage') }}
    </p>
  </div>
</section>
