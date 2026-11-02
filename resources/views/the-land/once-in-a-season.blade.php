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

<section id="once-in-a-season" class="py-8 lg:py-12" style="background-color: #16100C; color: #efe4d0;" aria-labelledby="blooms-heading">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">

    <div class="max-w-3xl mb-8 lg:mb-10" data-reveal>
      <h2 id="blooms-heading" class="font-heading text-3xl font-light leading-tight sm:text-4xl lg:text-5xl" style="color: #efe4d0;">
        {{ __('Once in a season.', 'sage') }}<br>
        <span class="italic font-normal">{{ __('Some of it you have to be here for.', 'sage') }}</span>
      </h2>
    </div>

    {{-- Clean, robust 2-column card grid across all viewport sizes --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12 items-start" data-reveal>
      @foreach ($blooms as $bloom)
        <article class="flex flex-col group">
          {{-- Image container with fixed aspect ratio --}}
          <div class="w-full overflow-hidden" style="aspect-ratio: 4/3; background-color: rgba(239, 228, 208, 0.08);">
            <img
              src="{{ $bloom['file'] }}"
              alt="{{ $bloom['alt'] }}"
              class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
              style="width: 100%; height: 100%; object-fit: cover;"
              loading="lazy"
            >
          </div>

          {{-- Description container with full width below image --}}
          <div class="mt-5 sm:mt-6">
            <h3 class="font-heading text-2xl lg:text-3xl font-light leading-snug" style="color: #efe4d0;">
              {{ $bloom['name'] }}
            </h3>
            <p class="mt-2 text-sm sm:text-base leading-relaxed" style="color: rgba(239, 228, 208, 0.82);">
              {{ $bloom['description'] }}
            </p>
          </div>
        </article>
      @endforeach
    </div>

  </div>
</section>
