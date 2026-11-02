@php
  $landPhotos = [
    [
      'file' => '/wp-content/uploads/2026/11/bird-shrike-perch.webp',
      'caption' => __('Long-tailed shrike', 'sage'),
      'alt' => __('Long-tailed shrike at Satori', 'sage'),
    ],
    [
      'file' => '/wp-content/uploads/2026/11/bloom-purple.webp',
      'caption' => __('Monsoon bloom', 'sage'),
      'alt' => __('Purple monsoon flower at Satori', 'sage'),
    ],
    [
      'file' => '/wp-content/uploads/2026/08/Experiences-rail-—-Farm-Walks-—-farm-walk.webp',
      'caption' => __('Orchard path', 'sage'),
      'alt' => __('Orchard path through the estate at Satori', 'sage'),
    ],
  ];
@endphp

<section id="the-land-strip" class="bg-[#f7f3eb] py-10 lg:py-14 border-t border-brand-ink/10" aria-label="{{ __('The Land glimpse', 'sage') }}">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">

    {{-- 3-photo strip with hairline gutters --}}
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 lg:gap-5" data-reveal>
      @foreach ($landPhotos as $photo)
        <article class="flex flex-col">
          <div class="overflow-hidden bg-brand-primary/10 aspect-[4/5] sm:aspect-[4/3]" style="width: 100%;">
            <img
              src="{{ $photo['file'] }}"
              alt="{{ $photo['alt'] }}"
              class="w-full h-full object-cover transition-transform duration-700 hover:scale-105"
              style="width: 100%; height: 100%; object-fit: cover;"
              loading="lazy"
            >
          </div>
          <p class="mt-3 pt-1 text-[0.65rem] lg:text-[0.58rem] uppercase tracking-[0.2em] text-brand-primary/75">
            {{ $photo['caption'] }}
          </p>
        </article>
      @endforeach
    </div>

    {{-- Walk the land link --}}
    <div class="mt-8 text-left" data-reveal>
      <a
        href="{{ home_url('/the-land') }}"
        class="inline-flex items-center text-xs uppercase tracking-[0.2em] text-brand-primary hover:text-brand-gold font-medium transition-colors"
      >
        {{ __('Walk the land →', 'sage') }}
      </a>
    </div>

  </div>
</section>

