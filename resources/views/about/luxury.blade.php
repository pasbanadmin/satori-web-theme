@php
  $luxuryImage = '/wp-content/uploads/2026/08/Canopy-Suites-—-estate-verandah.webp';
  $luxuryAlt = __('Interior details at Satori, warm and quietly appointed', 'sage');
@endphp

<section class="bg-[#f7f3eb] pb-16 lg:pb-24">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
    <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-16">
      <div class="group relative overflow-hidden" data-reveal>
        <img
          class="aspect-[4/3] w-full object-cover transition-transform duration-[1200ms] ease-out group-hover:scale-105"
          src="{{ $luxuryImage }}" alt="{{ $luxuryAlt }}">
        <div class="absolute inset-0 bg-gradient-to-t from-brand-primary/35 via-transparent to-transparent"></div>
      </div>

      <div class="lg:py-4" data-reveal>
        <div class="flex items-baseline gap-4">
          <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
            {{ __('Luxury that Softens', 'sage') }}
          </p>
        </div>

        <h3 class="mt-4 font-heading text-3xl font-light leading-tight text-brand-ink sm:text-4xl">
          {{ __('Luxury at Satori is not loud.', 'sage') }}
        </h3>

        <p class="mt-5 max-w-lg text-base leading-8 text-brand-muted sm:text-[16px]">
          {{ __('It does not rely on excess or display.', 'sage') }}
        </p>

        <p class="mt-5 max-w-lg text-base leading-8 text-brand-muted sm:text-[16px]">
          {{ __('It is found in proportion, privacy, material warmth, attentive hospitality, and the ease with which the estate allows you to settle in. In lake-facing verandahs, beautifully appointed interiors, quiet corners for reading, generous rooms, and the sense that everything has been designed to support the exhale rather than the spectacle.', 'sage') }}
        </p>

        <p class="mt-5 max-w-lg text-base leading-8 text-brand-muted sm:text-[16px]">
          {{ __('Red-oxide flooring, curated artefacts, natural textures and Mediterranean-inspired bathrooms give the estate a visual language that feels timeless, worldly and grounded all at once.', 'sage') }}
        </p>
      </div>
    </div>
  </div>
</section>