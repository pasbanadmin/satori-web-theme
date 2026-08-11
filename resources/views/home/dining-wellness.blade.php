@php
  $blocks = [
    [
      'label' => __('Dining', 'sage'),
      'heading' => __('The garden is not a feature. It is the kitchen.', 'sage'),
      'copy' => __('Most retreats describe their food as farm-to-table. At Satori the farm is fifty steps from the pass. Vegetables, herbs and fruit are picked the morning they are served, and the menu follows what the beds are giving rather than what a printed card demands', 'sage'),
      'cta' => __('Explore Dining', 'sage'),
      'anchor' => '#dining',
      'image' => '/wp-content/uploads/2026/08/36_202309051441007901-bcf6382f-142f-4570-85ee-9cdb14a05cc3-scaled.webp',
      'alt' => __('Dining at Satori, warm meal beside the lake', 'sage'),
      'reverse' => false,
    ],
    [
      'label' => __('Wellness & Spa', 'sage'),
      'heading' => __('A spa in a garden, not a basement.', 'sage'),
      'copy' => __('Satori’s spa block sits within the estate’s planted grounds, open to green on every side. Therapies draw on Ayurvedic and classical techniques, delivered without ceremony or upsell. Beyond the treatment rooms, wellness here is simply the shape of the day — yoga at sunrise, a walk through the medicinal beds, a swim under open sky, and the relief of having nowhere urgent to be.
', 'sage'),
      'cta' => __('Discover Wellness', 'sage'),
      'anchor' => '#wellness',
      'image' => '/wp-content/uploads/2026/08/SATORI-round-2-04-scaled.webp',
      'alt' => __('Wellness at Satori, calm and quiet retreat space', 'sage'),
      'reverse' => true,
    ],
  ];
@endphp

<section id="dining-wellness" class="bg-[#f7f3eb] pb-24">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
    <div class="mb-20 text-left lg:mb-28" data-reveal>
      <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
        {{ __('Dining & Wellness', 'sage') }}
      </p>

      <h2 class="mt-4 max-w-4xl font-heading text-4xl font-light leading-tight text-brand-ink">
        {{ __('Sustained by the estate, restored by the land.', 'sage') }}
      </h2>
    </div>

    @foreach ($blocks as $index => $block)
      <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-20">
        <div class="group relative overflow-hidden {{ $block['reverse'] ? 'lg:order-2' : '' }}" data-reveal>
          <img class="aspect-[4/3] w-full object-cover transition-transform duration-[1200ms] ease-out group-hover:scale-105" src="{{ $block['image'] }}" alt="{{ $block['alt'] }}">
          <div class="absolute inset-0 bg-gradient-to-t from-brand-primary/35 via-transparent to-transparent"></div>
        </div>

        <div class="{{ $block['reverse'] ? 'lg:order-1' : '' }} lg:py-8" data-reveal>
          <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
            {{ $block['label'] }}
          </p>

          <h3 class="mt-4 font-heading text-3xl font-light leading-tight text-brand-ink sm:text-4xl">
            {{ $block['heading'] }}
          </h3>

          <p class="mt-6 max-w-lg text-base leading-8 text-brand-muted sm:text-[16px]">
            {{ $block['copy'] }}
          </p>

          <a class="mt-9 inline-flex items-center justify-center gap-2 rounded-full border border-brand-ink/30 px-6 py-3 text-[0.8125rem] uppercase tracking-[0.2em] text-brand-ink transition-colors duration-300 hover:border-brand-ink hover:bg-brand-ink hover:text-brand-sand" href="{{ $block['anchor'] }}">
            {{ $block['cta'] }}
            <span aria-hidden="true">→</span>
          </a>
        </div>
      </div>

      @if (! $loop->last)
        <div class="h-px w-full bg-brand-ink/10"></div>
      @endif
    @endforeach
  </div>
</section>
