@php
  $movementImage = '/wp-content/uploads/2026/08/Sunrise-yoga-—-wellness-meditation.webp';

  $activities = [
    [
      'index' => '01',
      'title' => __('Yoga', 'sage'),
      'description' => __('On the lawn at sunrise, when the lake is still holding mist.', 'sage'),
    ],
    [
      'index' => '02',
      'title' => __('Walking', 'sage'),
      'description' => __('The Nakshatra garden, herb plots, orchards and flower-lined farm paths.', 'sage'),
    ],
    [
      'index' => '03',
      'title' => __('Cycling', 'sage'),
      'description' => __('Through the grounds at your own pace.', 'sage'),
    ],
    [
      'index' => '04',
      'title' => __('Swimming', 'sage'),
      'description' => __('Under open sky, facing the estate and the hills beyond.', 'sage'),
    ],
    [
      'index' => '05',
      'title' => __('Trails', 'sage'),
      'description' => __('Viewpoints around Mulshi for guests who want distance.', 'sage'),
    ],
  ];
@endphp

<section class="bg-[#f7f3eb] py-14 lg:py-20">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">

    <div class="mb-7 lg:mb-10" data-reveal>
      <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
        {{ __('Movement', 'sage') }}
      </p>
      <h2 class="mt-2 font-heading text-4xl font-light leading-tight text-brand-ink sm:text-5xl">
        {{ __('Yoga, walking, water', 'sage') }}
      </h2>
      <p class="mt-4 font-heading text-brand-ink leading-tight text-base lg:text-lg">
        {{ __('Movement here is not about intensity. It is about re-entering the body through beauty, air and rhythm.', 'sage') }}
      </p>
    </div>

    {{-- Large landscape image --}}
    <div class="group relative overflow-hidden aspect-[16/7]" data-reveal>
      <img class="h-full w-full object-cover transition-transform duration-[1200ms] ease-out group-hover:scale-105"
        src="{{ $movementImage }}" alt="{{ __('Morning yoga on the lawn at Satori, lake in the distance', 'sage') }}">
    </div>

    {{-- Activity list below the image — horizontal rule style --}}
    <div class="mt-0 border-t border-brand-ink/10" data-reveal>
      <div class="grid sm:grid-cols-2 lg:grid-cols-5">
        @foreach ($activities as $activity)
          <div
            class="group border-b border-brand-ink/10 py-7 px-2 transition-all duration-300 hover:bg-brand-sand/60 sm:border-r sm:border-b-0 sm:last:border-r-0">
            <p
              class="font-heading text-[1.75rem] font-light text-brand-ink/15 leading-none mb-4 transition-colors duration-300 group-hover:text-brand-gold/30">
              {{ $activity['index'] }}
            </p>
            <p class="text-sm font-medium text-brand-ink mb-1.5">{{ $activity['title'] }}</p>
            <p class="text-xs leading-5 text-brand-muted">{{ $activity['description'] }}</p>
          </div>
        @endforeach
      </div>
    </div>

  </div>
</section>