@php
  $gardenImage = '/wp-content/uploads/2026/08/Nakshatra-garden-—-farm-walk.webp';
@endphp

<section class="bg-brand-primary text-brand-sand py-14 lg:py-20">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">

    {{-- Large pull-stat header --}}
    <div class="border-b border-brand-sand/10 pb-12 lg:pb-16" data-reveal>
      <div class="grid lg:grid-cols-[minmax(240px,auto)_1fr] gap-8 lg:gap-16 items-end">
        {{-- Giant species count with counter animation --}}
        <div data-counter data-counter-target="200" class="min-w-[220px] sm:min-w-[260px] lg:min-w-[320px]">
          <p class="font-heading font-light text-brand-gold leading-none tabular-nums whitespace-nowrap"
            style="font-size: clamp(5rem, 14vw, 11rem);">
            <span data-counter-value class="inline-block text-left">200</span><span class="text-brand-sand/20">+</span>
          </p>
        </div>
        {{-- Descriptor --}}
        <div class="lg:pb-4">
          <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold mb-3">
            {{ __('The Gardens', 'sage') }}
          </p>
          <h2 class="font-heading text-3xl font-light leading-snug text-brand-sand sm:text-4xl">
            {{ __('Species of flora on the estate. Most of them are working.', 'sage') }}
          </h2>
        </div>
      </div>
    </div>

    {{-- Image + 2×2 species grid --}}
    <div class="mt-12 grid lg:grid-cols-2 gap-8 items-start" data-reveal>

      {{-- Left: image --}}
      <div class="group relative overflow-hidden aspect-[4/3]">
        <img class="h-full w-full object-cover transition-transform duration-[1200ms] ease-out group-hover:scale-105"
          src="{{ $gardenImage }}"
          alt="{{ __('The Nakshatra garden at Satori — planted to the twenty-seven lunar constellations', 'sage') }}"
          loading="lazy">
      </div>

      {{-- Right: 2×2 descriptors --}}
      <div>
        <p class="max-w-xl text-sm leading-7 text-brand-sand/65 sm:text-[15px] lg:pt-6 pt-0 px-0 lg:px-6 p-6">
          {{ __('The estate carries medicinal plants, herbs, fruit trees, flowering borders and the Nakshatra garden, planted to the twenty-seven lunar constellations. Walk it with our horticulture team and the property stops reading as landscaping and starts reading as a living, useful system.', 'sage') }}
        </p>
        <div class="grid grid-cols-2 gap-0">
          @foreach ([
              ['label' => __('Medicinal herbs', 'sage'), 'desc' => __('Cultivated for use in the spa treatments and kitchen', 'sage')],
              ['label' => __('The Nakshatra garden', 'sage'), 'desc' => __('Planted to the twenty-seven lunar constellations', 'sage')],
              ['label' => __('Fruit trees & orchards', 'sage'), 'desc' => __('What grows here feeds the table', 'sage')],
              ['label' => __('Flowering borders', 'sage'), 'desc' => __('The paths you walk to get anywhere on the estate', 'sage')],
            ] as $item)
            <div
              class="border-b border-r border-brand-sand/10 p-6 last-of-type:border-r-0 [&:nth-child(2)]:border-r-0 [&:nth-child(3)]:border-b-0 [&:nth-child(4)]:border-b-0 hover:bg-brand-sand/5 transition-colors duration-300">
              <p class="text-sm font-medium text-brand-sand mb-2">{{ $item['label'] }}</p>
              <p class="text-xs leading-5 text-brand-sand/50">{{ $item['desc'] }}</p>
            </div>
          @endforeach
        </div>
      </div>

    </div>

  </div>
</section>