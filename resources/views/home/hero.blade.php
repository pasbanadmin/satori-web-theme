@php
  $heroSlides = [
    [
      'src' => '/wp-content/uploads/2026/08/01-Woodhouse-at-dusk-—-the-signature-shot.webp',
      'alt' => __('Satori retreat hero image 1', 'sage'),
    ],
    [
      'src' => '/wp-content/uploads/2026/08/Evening-—-bonfire-stars-and-the-return-to-quiet-—-bonfire-night.webp',
      'alt' => __('Satori retreat hero image 2', 'sage'),
    ],
    [
      'src' => '/wp-content/uploads/2026/08/05-Private-plunge-pool-and-villa.webp',
      'alt' => __('Satori retreat hero image 3', 'sage'),
    ],
    [
      'src' => '/wp-content/uploads/2026/08/07-Four-poster-bedroom-with-lake-view.webp',
      'alt' => __('Satori retreat hero image 4', 'sage'),
    ],
    [
      'src' => '/wp-content/uploads/2026/08/02-Perch-at-dusk-—-glass-and-timber.webp',
      'alt' => __('Satori retreat hero image 5', 'sage'),
    ],
    [
      'src' => '/wp-content/uploads/2026/08/04-Terrace-loungers-over-Mulshi-Lake.webp',
      'alt' => __('Satori retreat hero image 6', 'sage'),
    ]
  ];
  $posterImage = '/wp-content/uploads/2026/08/01-Woodhouse-at-dusk-—-the-signature-shot.webp';
@endphp

<section
  class="relative min-h-screen lg:h-screen overflow-hidden bg-brand-primary text-brand-sand flex flex-col justify-end">
  {{-- Hero Slider (Commented out for now)
  <div class="swiper absolute inset-0 h-full w-full" data-hero-swiper>
    <div class="swiper-wrapper h-full w-full">
      @foreach ($heroSlides as $slide)
      <div class="swiper-slide h-full w-full">
        <img class="h-full w-full object-cover" src="{{ $slide['src'] }}" alt="{{ $slide['alt'] }}">
      </div>
      @endforeach
    </div>

    <div class="swiper-pagination !bottom-8 z-30" data-hero-pagination></div>
  </div>
  --}}

  <!-- Background Video Container -->
  <div class="absolute inset-0 z-0 overflow-hidden bg-[#1a120b]">
    <!-- Fallback Poster Image for LCP & slow connections -->
    <img src="{{ $posterImage }}" alt="Satori retreat hero dusk view" fetchpriority="high" decoding="async"
      class="absolute inset-0 h-full w-full object-cover z-0">

    <!-- Vimeo Background Video Embed -->
    <iframe src="https://player.vimeo.com/video/1219155902?background=1&autoplay=1&loop=1&byline=0&title=0&muted=1"
      class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 min-w-full min-h-full w-[177.77777778vh] h-[56.25vw] min-w-[177.77777778vh] min-h-[56.25vw] object-cover pointer-events-none z-1"
      frameborder="0" allow="autoplay; fullscreen; picture-in-picture" title="Satori Hero Video"></iframe>

    <!-- Dark Overlay for Contrast & Readability -->
    <div class="absolute inset-0 bg-brand-primary/60 z-2"></div>
  </div>

  {{-- Content Container: Dynamic height fit for content on mobile with top/bottom padding, fullscreen flex-end on
  desktop --}}
  <div class="relative z-20 w-full pt-32 pb-16 lg:pt-0 lg:pb-20">
    <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
      <div class="max-w-4xl">
        <h1 class="max-w-3xl text-[40px] font-light leading-none text-brand-sand sm:text-6xl">
          {{ __('Luxury, stillness, and space to return to yourself.', 'sage') }}
        </h1>

        <p class="mt-7 max-w-2xl text-base lg:leading-8 leading-6 text-brand-sand sm:text-[16px]">
          {{ __('Set above Mulshi Lake and held by the quiet rhythms of the Sahyadris, Satori is a private retreat of fourteen stays where nature, design and thoughtful hospitality come together in balance.', 'sage') }}
        </p>

        <div class="mt-10 flex flex-col lg:gap-4 gap-2 flex-row">
          <a class="w-max inline-flex items-center justify-center rounded-full bg-brand-sand px-6 py-3 lg:text-[0.8125rem] text-[10px] uppercase tracking-[0.2em] text-brand-primary transition-colors duration-300 hover:bg-brand-gold hover:text-brand-primary"
            href="{{ home_url('/contact-us') }}">
            {{ __('Book Your Stay', 'sage') }}
          </a>

          <a class="w-max inline-flex items-center justify-center rounded-full border-2 border-brand-sand bg-brand-primary/30 px-6 py-3 lg:text-[0.8125rem] text-[10px] uppercase tracking-[0.2em] text-brand-sand backdrop-blur-sm transition-colors duration-300 hover:border-brand-gold hover:bg-brand-gold hover:text-brand-primary"
            href="#stay">
            {{ __('Explore Satori', 'sage') }}
          </a>
        </div>
      </div>
    </div>
  </div>

  {{-- Scroll Indicator --}}
  <div class="absolute bottom-0 right-0 z-30 hidden items-center gap-3 pr-8 pb-10 lg:flex" aria-hidden="true">
    <span class="block h-12 w-px bg-gradient-to-b from-brand-gold to-transparent"></span>
    <span class="text-[0.65rem] uppercase tracking-[0.3em] text-brand-sand/70 font-medium">
      {{ __('Scroll', 'sage') }}
    </span>
  </div>
</section>