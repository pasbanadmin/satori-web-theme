@php
  $homes = [
    [
      'name' => __('The Lake House', 'sage'),
      'description' => __('A glass-walled hideaway poised above the water.', 'sage'),
      'sleeps' => 4,
      'price' => 42000,
      'image' => '/wp-content/uploads/2026/08/36_202309051441007901-bcf6382f-142f-4570-85ee-9cdb14a05cc3-scaled.webp',
      'position' => 'object-center',
    ],
    [
      'name' => __('The Forest Pavilion', 'sage'),
      'description' => __('Wrapped in old sal trees and quiet, filtered light.', 'sage'),
      'sleeps' => 6,
      'price' => 38000,
      'image' => '/wp-content/uploads/2026/08/SATORI-round-2-04-scaled.webp',
      'position' => 'object-center',
    ],
    [
      'name' => __('The Olive Court', 'sage'),
      'description' => __('Courtyard living framed by stone and slow afternoons.', 'sage'),
      'sleeps' => 5,
      'price' => 35000,
      'image' => '/wp-content/uploads/2026/08/36_202309051441007901-bcf6382f-142f-4570-85ee-9cdb14a05cc3-scaled.webp',
      'position' => 'object-bottom',
    ],
    [
      'name' => __('The Hilltop Haven', 'sage'),
      'description' => __('Uninterrupted views across the Sahyadris from every room.', 'sage'),
      'sleeps' => 8,
      'price' => 52000,
      'image' => '/wp-content/uploads/2026/08/SATORI-round-2-04-scaled.webp',
      'position' => 'object-top',
    ],
  ];
@endphp

<section id="stay" class="bg-[#f7f3eb] pb-24 lg:pb-36" data-the-homes>
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
    <div class="mb-20 text-left lg:mb-24">
      <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
        {{ __('The Homes', 'sage') }}
      </p>

      <h2 class="mt-4 font-heading text-4xl font-light leading-tight text-brand-ink sm:text-5xl">
       {{ __('Fourteen homes. No two alike.', 'sage') }}
      </h2>

      <p class="mt-5 max-w-3xl text-base leading-7 text-brand-muted sm:text-lg">
        {{ __('Satori is not a single building with corridors. It is a collection of fourteen private homes set across the estate — some low among the fruit trees, some raised into the canopy, some standing alone above the water. Each has its own verandah, its own outlook, and its own way of slowing you down.', 'sage') }}
      </p>
    </div>

    <div class="grid gap-8 md:grid-cols-2 lg:gap-10">
      @foreach ($homes as $home)
        <article class="group relative flex aspect-[5/7] flex-col overflow-hidden bg-brand-primary transition-transform duration-500 ease-out hover:-translate-y-1.5 hover:shadow-2xl md:aspect-[6/5]">
          <img class="absolute inset-0 h-full w-full object-cover {{ $home['position'] }} transition-transform duration-[1200ms] ease-out group-hover:scale-105" src="{{ $home['image'] }}" alt="{{ $home['name'] }}">

          <div class="absolute inset-0 bg-gradient-to-t from-brand-primary/75 via-brand-primary/25 to-transparent"></div>

          <div class="relative z-10 flex flex-1 flex-col justify-between gap-6 p-7 sm:p-8 lg:p-10">
            <div>
              <h3 class="font-heading text-3xl font-light text-brand-sand sm:text-4xl">
                {{ $home['name'] }}
              </h3>

              <p class="mt-3 max-w-sm text-sm leading-6 text-brand-sand">
                {{ $home['description'] }}
              </p>
            </div>

            <div>
              <div class="flex items-center justify-between gap-4 border-t border-brand-sand/20 pt-5">
                <p class="text-[0.7rem] uppercase tracking-[0.25em] text-brand-sand">
                  {{ sprintf(__('Sleeps %d', 'sage'), $home['sleeps']) }}
                </p>

                <p class="text-right text-[0.7rem] uppercase tracking-[0.25em] text-brand-sand/80">
                  {{ __('From', 'sage') }}
                  <span class="text-brand-gold">₹{{ number_format($home['price']) }}</span>
                </p>
              </div>

              <a class="mt-5 inline-flex items-center gap-2 text-[0.75rem] uppercase tracking-[0.25em] text-brand-gold transition-colors duration-300 hover:text-brand-sand" href="#stay">
                {{ __('Discover', 'sage') }}
                <span class="inline-block transition-transform duration-300 group-hover:translate-x-1.5" aria-hidden="true">→</span>
              </a>
            </div>
          </div>
        </article>
      @endforeach
    </div>

    <div class="mt-16 text-center lg:mt-20">
      <a class="inline-flex items-center justify-center gap-2 rounded-full border border-brand-ink/30 px-8 py-4 text-[0.8125rem] uppercase tracking-[0.2em] text-brand-ink transition-colors duration-300 hover:border-brand-ink hover:bg-brand-ink hover:text-brand-sand" href="#stay">
        {{ __('See All Homes', 'sage') }}
        <span aria-hidden="true">→</span>
      </a>
    </div>
  </div>
</section>
