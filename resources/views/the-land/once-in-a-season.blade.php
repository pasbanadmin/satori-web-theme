@php
  $blooms = [
    [
      'file' => '/wp-content/uploads/2026/11/bloom-brahmakamal.webp',
      'name' => __('Brahmakamal', 'sage'),
      'description' => __('It blooms once a year at Satori, at night, and is closed again by morning.', 'sage'),
      'alt' => __('Brahmakamal blooming at night at Satori', 'sage'),
    ],
    [
      'file' => '/wp-content/uploads/2026/11/bloom-purple.webp',
      'name' => __('The monsoon bloom', 'sage'),
      'description' => __('A purple flower that arrives with the rains and goes with them.', 'sage'),
      'alt' => __('Monsoon purple flower blooming at Satori', 'sage'),
    ],
  ];
@endphp

<section id="once-in-a-season" class="py-10 lg:py-16" style="background-color: #16100C; color: #efe4d0;" aria-labelledby="blooms-heading">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">

    <div class="max-w-3xl mb-8 lg:mb-10" data-reveal>
      <h2 id="blooms-heading" class="font-heading text-3xl font-light leading-tight sm:text-4xl lg:text-5xl" style="color: #efe4d0;">
        {{ __('Once in a season.', 'sage') }}<br>
        <span class="italic font-normal">{{ __('Some of it you have to be here for.', 'sage') }}</span>
      </h2>
    </div>

    {{-- Two entries side by side on desktop, stacked on mobile --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-14 items-start" data-reveal>
      @foreach ($blooms as $bloom)
        <article class="bloom-item">
          {{-- Fixed 3:4 portrait photo container --}}
          <div class="bloom-image-box">
            <img
              src="{{ $bloom['file'] }}"
              alt="{{ $bloom['alt'] }}"
              class="bloom-img"
              loading="lazy"
            >
          </div>

          {{-- Description container --}}
          <div class="bloom-content">
            <h3 class="font-heading text-2xl font-light leading-snug" style="color: #efe4d0;">
              {{ $bloom['name'] }}
            </h3>
            <p class="mt-2 text-sm leading-6" style="color: rgba(239, 228, 208, 0.8);">
              {{ $bloom['description'] }}
            </p>
          </div>
        </article>
      @endforeach
    </div>

  </div>
</section>

<style>
  #once-in-a-season .bloom-item {
    display: flex;
    flex-direction: column;
    gap: 1.25rem;
    align-items: flex-start;
  }
  @media (min-width: 640px) {
    #once-in-a-season .bloom-item {
      flex-direction: row;
      gap: 1.5rem;
    }
  }
  #once-in-a-season .bloom-image-box {
    width: 220px;
    height: 293px;
    max-width: 100%;
    flex-shrink: 0;
    overflow: hidden;
    background-color: rgba(239, 228, 208, 0.08);
  }
  @media (min-width: 640px) and (max-width: 1023px) {
    #once-in-a-season .bloom-image-box {
      width: 180px;
      height: 240px;
      flex-shrink: 0;
    }
  }
  @media (min-width: 1024px) {
    #once-in-a-season .bloom-image-box {
      width: 224px;
      height: 298px;
      flex-shrink: 0;
    }
  }
  #once-in-a-season .bloom-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.7s ease;
  }
  #once-in-a-season .bloom-item:hover .bloom-img {
    transform: scale(1.05);
  }
  #once-in-a-season .bloom-content {
    flex: 1 1 0%;
    min-width: 0;
    padding-top: 0.25rem;
  }
</style>
