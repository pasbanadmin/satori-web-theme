@php
  $orchardTreesCol1 = [
    ['tree' => 'Banana', 'count' => 50],
    ['tree' => 'Papaya', 'count' => 50],
    ['tree' => 'Mango', 'count' => 49],
    ['tree' => 'Avocado', 'count' => 35],
    ['tree' => 'Guava', 'count' => 20],
    ['tree' => 'Karonda', 'count' => 20],
    ['tree' => 'Lemon', 'count' => 19],
    ['tree' => 'Wood apple (kawath)', 'count' => 17],
    ['tree' => 'Litchi', 'count' => 16],
    ['tree' => 'Amla', 'count' => 15],
    ['tree' => 'Cashew', 'count' => 14],
    ['tree' => 'Custard apple (sitaphal)', 'count' => 14],
    ['tree' => 'Sweet lime (mosambi)', 'count' => 12],
  ];

  $orchardTreesCol2 = [
    ['tree' => 'Chikoo', 'count' => 12],
    ['tree' => 'Jamun', 'count' => 12],
    ['tree' => 'Ramphal', 'count' => 12],
    ['tree' => 'Water apple (pink jamb)', 'count' => 10],
    ['tree' => 'Wax apple (white jamb)', 'count' => 10],
    ['tree' => 'Barbados cherry', 'count' => 10],
    ['tree' => 'Indian jujube (bor)', 'count' => 8],
    ['tree' => 'Jackfruit', 'count' => 8],
    ['tree' => 'Nagpur orange', 'count' => 8],
    ['tree' => 'Dwarf coconut', 'count' => 7],
    ['tree' => 'Pomelo', 'count' => 6],
    ['tree' => 'Spanish cherry', 'count' => 5],
    ['tree' => 'Carambola (kamrakh)', 'count' => 4],
  ];
@endphp

<section id="orchard" class="bg-[#f7f3eb] py-10 lg:py-14 border-t border-brand-ink/10" aria-labelledby="orchard-heading">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">

    <div class="max-w-3xl mb-6 lg:mb-8" data-reveal>
      <h2 id="orchard-heading" class="font-heading text-3xl font-light leading-tight text-brand-primary sm:text-4xl lg:text-5xl">
        {{ __('The orchard.', 'sage') }}<br>
        <span class="italic font-normal">{{ __('In season, you pick your own.', 'sage') }}</span>
      </h2>
      <p class="mt-3 text-base leading-7 text-brand-primary/80 sm:text-[16px]">
        {{ __('Every fruit tree on the old land, as counted in October 2025. The breakfast comes off these.', 'sage') }}
      </p>
    </div>

    {{-- Two columns on desktop (13 rows each), one on phone --}}
    <div class="grid sm:grid-cols-2 gap-x-12 lg:gap-x-16" data-reveal>
      <div>
        @foreach ($orchardTreesCol1 as $item)
          <div class="flex items-baseline justify-between border-b border-brand-ink/10 py-2 sm:py-2.5">
            <span class="font-heading text-base sm:text-lg font-light text-brand-primary">
              {{ $item['tree'] }}
            </span>
            <span class="font-mono text-sm text-brand-primary/80">
              {{ $item['count'] }}
            </span>
          </div>
        @endforeach
      </div>

      <div>
        @foreach ($orchardTreesCol2 as $item)
          <div class="flex items-baseline justify-between border-b border-brand-ink/10 py-2 sm:py-2.5">
            <span class="font-heading text-base sm:text-lg font-light text-brand-primary">
              {{ $item['tree'] }}
            </span>
            <span class="font-mono text-sm text-brand-primary/80">
              {{ $item['count'] }}
            </span>
          </div>
        @endforeach
      </div>
    </div>

    {{-- Totalling line beneath --}}
    <div class="mt-6 pt-3 border-t border-brand-ink/20 flex items-baseline justify-between max-w-md ml-auto" data-reveal>
      <span class="text-xs uppercase tracking-[0.2em] text-brand-primary/70 font-medium">
        {{ __('Fruit trees on the old land', 'sage') }}
      </span>
      <span class="font-mono text-sm font-semibold text-brand-primary">
        443
      </span>
    </div>

  </div>
</section>
