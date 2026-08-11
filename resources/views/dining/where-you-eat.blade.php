@php
  $locations = [
    [
      'title' => __('In The Nest', 'sage'),
      'description' => __('The communal table, indoors or on the verandah. Where the estate naturally gathers.', 'sage'),
      'tag' => __('Communal Dining', 'sage'),
      'image' => '/wp-content/uploads/2026/08/Where-you-eat-—-In-The-Nest-—-the-nest.webp',
    ],
    [
      'title' => __('Chef\'s Table in the Fields', 'sage'),
      'description' => __('A long table laid out among the growing beds, for one seating, weather permitting.', 'sage'),
      'tag' => __('Farm Dining', 'sage'),
      'image' => '/wp-content/uploads/2026/08/Where-you-eat-—-The-Chefs-Table-in-the-fields-—-farm-harvest.webp',
    ],
    [
      'title' => __('On Your Verandah', 'sage'),
      'description' => __('Every home can be served privately, at any meal, without stepping off your own property.', 'sage'),
      'tag' => __('Private Dining', 'sage'),
      'image' => '/wp-content/uploads/2026/08/Where-you-eat-—-On-your-verandah-—-estate-verandah.webp',
    ],
    [
      'title' => __('By the Water', 'sage'),
      'description' => __('Picnic hampers, sunset setups and al fresco barbecues arranged on request.', 'sage'),
      'tag' => __('Lakeside', 'sage'),
      'image' => '/wp-content/uploads/2026/08/Where-you-eat-—-By-the-water-—-lake-picnic.webp',
    ],
  ];
@endphp

<section class="bg-brand-primary text-brand-sand">
  <div class="mx-auto w-full max-w-7xl px-5 py-16 lg:py-20 sm:px-8 lg:px-16">

    {{-- Section Header --}}
    <div class="mb-10" data-reveal>
      <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
        {{ __('Four Settings', 'sage') }}
      </p>
      <h2 class="mt-4 font-heading text-4xl font-light leading-tight text-brand-sand">
        {{ __('Where you eat', 'sage') }}
      </h2>
    </div>

    {{-- 2×2 Grid --}}
    <div class="grid gap-6 sm:grid-cols-2" data-reveal>
      @foreach ($locations as $location)
        <article
          class="group relative overflow-hidden border border-brand-sand/10 bg-brand-sand/5 transition-all duration-500 hover:border-brand-gold/50">
          {{-- Image --}}
          <div class="relative aspect-[4/3] overflow-hidden">
            <img class="h-full w-full object-cover transition-transform duration-[1200ms] ease-out group-hover:scale-105"
              src="{{ $location['image'] }}" alt="{{ $location['title'] }}" loading="lazy">
            <div class="absolute inset-0 bg-gradient-to-t from-brand-primary/80 via-brand-primary/20 to-transparent">
            </div>

            {{-- Tag Badge --}}
            <span
              class="absolute top-4 left-4 rounded-full bg-brand-primary/70 px-3 py-1 text-[0.6rem] uppercase tracking-[0.2em] text-brand-sand/80 backdrop-blur-sm border border-brand-sand/15">
              {{ $location['tag'] }}
            </span>
          </div>

          {{-- Content --}}
          <div class="p-6 sm:p-7">
            <h3
              class="font-heading text-xl font-light text-brand-sand group-hover:text-brand-gold transition-colors duration-300 sm:text-2xl">
              {{ $location['title'] }}
            </h3>
            <p class="mt-2 text-sm leading-7 text-brand-sand/65">
              {{ $location['description'] }}
            </p>
          </div>
        </article>
      @endforeach
    </div>

  </div>
</section>