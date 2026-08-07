@php
  $blocks = [
    [
      'label' => __('Dining', 'sage'),
      'heading' => __('The Table at Satori', 'sage'),
      'copy' => __('Meals are gathered from the estate kitchen garden, cooked over fire and set on long tables with the lake resting below. Everything is seasonal, unhurried, and made to be shared.', 'sage'),
      'cta' => __('Explore Dining', 'sage'),
      'anchor' => '#dining',
      'image' => '/wp-content/uploads/2026/08/36_202309051441007901-bcf6382f-142f-4570-85ee-9cdb14a05cc3-scaled.webp',
      'alt' => __('Dining at Satori, warm meal beside the lake', 'sage'),
      'reverse' => false,
    ],
    [
      'label' => __('Wellness & Spa', 'sage'),
      'heading' => __('Slow Down, Restore', 'sage'),
      'copy' => __('A pavilion for massages, a quiet plunge pool, guided breathwork and slow forest walks — simple rituals designed to bring you back to stillness.', 'sage'),
      'cta' => __('Discover Wellness', 'sage'),
      'anchor' => '#wellness',
      'image' => '/wp-content/uploads/2026/08/SATORI-round-2-04-scaled.webp',
      'alt' => __('Wellness at Satori, calm and quiet retreat space', 'sage'),
      'reverse' => true,
    ],
  ];
@endphp

<section id="dining-wellness" class="bg-[#f7f3eb] pb-24 lg:pb-36">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
    <div class="mb-20 text-left lg:mb-28" data-reveal>
      <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
        {{ __('Dining & Wellness', 'sage') }}
      </p>

      <h2 class="mt-4 max-w-4xl font-heading text-4xl font-light leading-tight text-brand-ink sm:text-5xl">
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

          <p class="mt-6 max-w-lg text-base leading-8 text-brand-muted sm:text-lg">
            {{ $block['copy'] }}
          </p>

          <a class="mt-9 inline-flex items-center justify-center gap-2 rounded-full border border-brand-ink/30 px-8 py-4 text-[0.8125rem] uppercase tracking-[0.2em] text-brand-ink transition-colors duration-300 hover:border-brand-ink hover:bg-brand-ink hover:text-brand-sand" href="{{ $block['anchor'] }}">
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
