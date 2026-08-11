@php
  $experiences = [
    [
      'name' => __('Lake & Sunset', 'sage'),
      'line' => __("Golden hour from the water's edge.", 'sage'),
      'image' => '/wp-content/uploads/2026/08/36_202309051441007901-bcf6382f-142f-4570-85ee-9cdb14a05cc3-scaled.webp',
      'position' => 'object-center',
      'alt' => __('Sunset over the lake at Satori', 'sage'),
    ],
    [
      'name' => __('Farm Walks', 'sage'),
      'line' => __('Morning trails through the working estate.', 'sage'),
      'image' => '/wp-content/uploads/2026/08/SATORI-round-2-04-scaled.webp',
      'position' => 'object-top',
      'alt' => __('Farm walk across the Satori estate', 'sage'),
    ],
    [
      'name' => __('Bonfire & Stargazing', 'sage'),
      'line' => __('Fire, silence, and a sky full of light.', 'sage'),
      'image' => '/wp-content/uploads/2026/08/36_202309051441007901-bcf6382f-142f-4570-85ee-9cdb14a05cc3-scaled.webp',
      'position' => 'object-bottom',
      'alt' => __('Bonfire and stargazing night at Satori', 'sage'),
    ],
    [
      'name' => __('Pool & Games', 'sage'),
      'line' => __('Unhurried afternoons by the water.', 'sage'),
      'image' => '/wp-content/uploads/2026/08/SATORI-round-2-04-scaled.webp',
      'position' => 'object-center',
      'alt' => __('Pool and games at Satori', 'sage'),
    ],
    [
      'name' => __("Chef's Table", 'sage'),
      'line' => __('A long dinner cooked over open fire.', 'sage'),
      'image' => '/wp-content/uploads/2026/08/SATORI-round-2-04-scaled.webp',
      'position' => 'object-bottom',
      'alt' => __("Chef's table dinner at Satori", 'sage'),
    ],
  ];
@endphp

<section id="experiences" class="bg-[#f7f3eb] pb-24">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
    <div class="mb-14 text-center lg:mb-20" data-reveal>
      <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
        {{ __('Experiences', 'sage') }}
      </p>

      <h2 class="mx-auto mt-4 max-w-3xl font-heading text-4xl font-light leading-tight text-brand-ink">
        {{ __('Do everything. Or nothing at all.', 'sage') }}
      </h2>

      <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-brand-muted sm:text-[16px]">
        {{ __('Cycle the estate. Pluck fruit in season. Picnic by the water. Play pickleball or lose an afternoon to the pool. Gather at the bonfire as the hills fall silent and the sky opens.Nothing here is compulsory. That is rather the point.
', 'sage') }}
      </p>

      <a class="mt-10 inline-flex items-center justify-center gap-2 rounded-full border border-brand-ink/30 px-6 py-3 text-[0.8125rem] uppercase tracking-[0.2em] text-brand-ink transition-colors duration-300 hover:border-brand-ink hover:bg-brand-ink hover:text-brand-sand" href="#experiences">
        {{ __('Explore Experiences', 'sage') }}
        <span aria-hidden="true">→</span>
      </a>
    </div>
  </div>

  <div class="swiper px-5 py-10 sm:px-8 lg:px-16" data-experiences-swiper>
    <div class="swiper-wrapper items-stretch">
      @foreach ($experiences as $experience)
        <article class="group swiper-slide flex aspect-[4/3] h-auto overflow-hidden bg-brand-primary">
          <img class="absolute inset-0 h-full w-full object-cover {{ $experience['position'] }} transition-transform duration-[1200ms] ease-out group-hover:scale-105" src="{{ $experience['image'] }}" alt="{{ $experience['alt'] }}">

          <div class="absolute inset-0 bg-gradient-to-t from-brand-primary/75 via-brand-primary/15 to-transparent"></div>

          <div class="relative z-10 flex h-full w-full flex-col justify-end p-7 sm:p-8">
            <h3 class="font-heading text-2xl font-light text-brand-sand sm:text-3xl">
              {{ $experience['name'] }}
            </h3>

            <p class="mt-2 max-w-xs text-sm leading-6 text-brand-sand/90">
              {{ $experience['line'] }}
            </p>

            <a class="mt-6 inline-flex items-center gap-2 text-[0.75rem] uppercase tracking-[0.25em] text-brand-gold transition-colors duration-300 hover:text-brand-sand" href="#experiences">
              {{ __('Discover', 'sage') }}
              <span class="inline-block transition-transform duration-300 group-hover:translate-x-1.5" aria-hidden="true">→</span>
            </a>
          </div>
        </article>
      @endforeach
    </div>
  </div>
</section>
