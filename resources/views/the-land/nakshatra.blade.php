@php
  $nakshatraTrees = [
    ['star' => 'Bharani', 'tree' => 'Amla'],
    ['star' => 'Rohini', 'tree' => 'Jamun'],
    ['star' => 'Pushya', 'tree' => 'Peepal'],
    ['star' => 'Purva Phalguni', 'tree' => 'Palash'],
    ['star' => 'Hasta', 'tree' => 'Neem'],
    ['star' => 'Vishakha', 'tree' => 'Wood apple'],
    ['star' => 'Moola', 'tree' => 'Mango'],
    ['star' => 'Uttarashadha', 'tree' => 'Jackfruit'],
    ['star' => 'Shatataraka', 'tree' => 'Kadamba'],
  ];
@endphp

<section id="nakshatra-garden" class="bg-[#f7f3eb] py-7 lg:py-9 border-t border-brand-ink/10" aria-labelledby="nakshatra-heading">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">

    <div class="max-w-3xl mb-6 lg:mb-8" data-reveal>
      <h2 id="nakshatra-heading" class="font-heading text-3xl font-light leading-tight text-brand-primary sm:text-4xl lg:text-5xl">
        {{ __('The Nakshatra garden.', 'sage') }}<br>
        <span class="italic font-normal">{{ __('Find the tree of your birth star.', 'sage') }}</span>
      </h2>
      <p class="mt-3 text-base leading-7 text-brand-primary/80 sm:text-[16px]">
        {{ __('Twenty-seven lunar constellations, and one tree planted for each. Nine of them are below. The horticulture team will walk you to the other eighteen.', 'sage') }}
      </p>
    </div>

    {{-- Two-column ruled list on desktop --}}
    <div class="grid sm:grid-cols-2 gap-x-12 lg:gap-x-16" data-reveal>
      @foreach ($nakshatraTrees as $item)
        <div class="flex items-baseline justify-between border-b border-brand-ink/10 py-2.5 sm:py-3">
          <span class="text-[0.7rem] uppercase tracking-[0.2em] text-brand-primary/70">
            {{ $item['star'] }}
          </span>
          <span class="font-heading text-base sm:text-lg font-light text-brand-primary">
            {{ $item['tree'] }}
          </span>
        </div>
      @endforeach
    </div>

  </div>
</section>
