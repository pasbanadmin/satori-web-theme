@php
  $homes = [
    [
      'name' => __('Orchard Cottages', 'sage'),
      'description' => __('Garden-set cottages among the fruit trees. ', 'sage'),
      'sleeps' => 2,
      'price' => 42000,
      'image' => '/wp-content/uploads/2026/08/Orchard-Cottages-—-estate-path.webp',
      'position' => 'object-center',
    ],
    [
      'name' => __('Canopy Suites', 'sage'),
      'description' => __('Elevated suites above the orchard, facing the lake. ', 'sage'),
      'sleeps' => 2,
      'price' => 38000,
      'image' => '/wp-content/uploads/2026/08/Canopy-Suites-—-estate-verandah.webp',
      'position' => 'object-center',
    ],
    [
      'name' => __('Aves', 'sage'),
      'description' => __('Three secluded cottages named for birds.', 'sage'),
      'sleeps' => 2,
      'price' => 35000,
      'image' => '/wp-content/uploads/2026/08/Aves-—-home-aves.webp',
      'position' => 'object-bottom',
    ],
    [
      'name' => __('Hornbill ', 'sage'),
      'description' => __('The signature lakeside villa', 'sage'),
      'sleeps' => 4,
      'price' => 52000,
      'image' => '/wp-content/uploads/2026/08/Hornbill-—-home-hornbill.webp',
      'position' => 'object-top',
    ],
  ];
@endphp

<section id="stay" class="bg-[#f7f3eb] pb-14 lg:pb-20" data-the-homes>
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
    <div class="mb-12 text-left lg:mb-14">
      <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
        {{ __('The Homes', 'sage') }}
      </p>

      <h2 class="mt-4 font-heading text-4xl font-light leading-tight text-brand-ink sm:text-4xl">
        {{ __('Fourteen homes. No two alike.', 'sage') }}
      </h2>

      <p class="mt-5 max-w-3xl text-base leading-7 text-brand-muted sm:text-[16px]">
        {{ __('Satori is not a single building with corridors. It is a collection of fourteen private homes set across the estate — some low among the fruit trees, some raised into the canopy, some standing alone above the water. Each has its own verandah, its own outlook, and its own way of slowing you down.', 'sage') }}
      </p>
    </div>

    <div class="grid gap-8 md:grid-cols-2 lg:gap-10">
      @foreach ($homes as $home)
        <article
          class="group relative flex aspect-[5/7] flex-col overflow-hidden bg-brand-primary transition-transform duration-500 ease-out hover:-translate-y-1.5 hover:shadow-2xl md:aspect-[6/5]"
          data-reveal>
          <img
            class="absolute inset-0 h-full w-full object-cover {{ $home['position'] }} transition-transform duration-[1200ms] ease-out group-hover:scale-105"
            src="{{ $home['image'] }}" alt="{{ $home['name'] }}">

          <div class="absolute inset-0 bg-gradient-to-t from-brand-primary/75 via-brand-primary/25 to-transparent"></div>

          <div class="relative z-10 flex h-full flex-col justify-end p-7 sm:p-8 lg:p-10">
            <div class="flex items-end justify-between gap-6">
              <div class="max-w-xs sm:max-w-sm">
                <h3 class="font-heading text-3xl font-light text-brand-sand sm:text-4xl">
                  {{ $home['name'] }}
                </h3>

                <p class="mt-2 text-sm leading-6 text-brand-sand/90">
                  {{ $home['description'] }}
                </p>
              </div>

              <div class="flex shrink-0 flex-col items-end gap-2 text-right">
                <p class="text-[0.7rem] uppercase tracking-[0.25em] text-brand-sand/80">
                  {{ sprintf(__('Sleeps %d', 'sage'), $home['sleeps']) }}
                </p>

                <a class="inline-flex items-center gap-1.5 text-[0.75rem] uppercase tracking-[0.25em] text-brand-gold transition-colors duration-300 hover:text-brand-sand"
                  href="{{ home_url('/stays') }}">
                  {{ __('Discover', 'sage') }}
                  <span class="inline-block transition-transform duration-300 group-hover:translate-x-1.5"
                    aria-hidden="true">→</span>
                </a>
              </div>
            </div>
          </div>
        </article>
      @endforeach
    </div>

    <div class="mt-10 text-center lg:mt-14">
      <a class="inline-flex items-center justify-center gap-2 rounded-full border border-brand-ink/30 px-6 py-3 text-[0.8125rem] uppercase tracking-[0.2em] text-brand-ink transition-colors duration-300 hover:border-brand-ink hover:bg-brand-ink hover:text-brand-sand"
        href="{{ home_url('/stays') }}">
        {{ __('See All Homes', 'sage') }}
        <span aria-hidden="true">→</span>
      </a>
    </div>
  </div>
</section>