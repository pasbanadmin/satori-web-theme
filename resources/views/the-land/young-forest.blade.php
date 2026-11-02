@php
  $forestTrees = [
    ['tree' => 'Kadamba', 'count' => 20],
    ['tree' => 'Karanj', 'count' => 20],
    ['tree' => 'Gulmohar', 'count' => 20],
    ['tree' => 'Bakul (Mimusops elengi)', 'count' => 20],
    ['tree' => 'Pride of India (Lagerstroemia)', 'count' => 20],
    ['tree' => 'Copper pod (Peltophorum)', 'count' => 20],
    ['tree' => 'Tabebuia rosea', 'count' => 20],
    ['tree' => 'Spathodea', 'count' => 20],
    ['tree' => 'Sonchafa (Michelia champaca)', 'count' => 10],
    ['tree' => 'Portia tree', 'count' => 10],
    ['tree' => 'Areca palm', 'count' => 10],
  ];
@endphp

<section id="young-forest" class="bg-[#f7f3eb] py-7 lg:py-9 border-t border-brand-ink/10" aria-labelledby="forest-heading">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">

    <div class="grid lg:grid-cols-12 gap-6 lg:gap-14 items-start" data-reveal>
      {{-- Left: Heading & Intro --}}
      <div class="lg:col-span-5">
        <h2 id="forest-heading" class="font-heading text-3xl font-light leading-tight text-brand-primary sm:text-4xl lg:text-5xl">
          {{ __('The young forest.', 'sage') }}
        </h2>
        <p class="mt-3 text-base leading-7 text-brand-primary/80 sm:text-[16px] max-w-md">
          {{ __('On the new land, a Miyawaki planting: native trees set close together so they race each other upward. It will not look like much for a few years. Then it will.', 'sage') }}
        </p>
      </div>

      {{-- Right: One Column Counted List --}}
      <div class="lg:col-span-7">
        <div class="space-y-0">
          @foreach ($forestTrees as $item)
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

        <div class="mt-5 pt-3 border-t border-brand-ink/20 flex items-baseline justify-between">
          <span class="text-xs uppercase tracking-[0.2em] text-brand-primary/70 font-medium">
            {{ __('Trees planted, phase one', 'sage') }}
          </span>
          <span class="font-mono text-sm font-semibold text-brand-primary">
            190
          </span>
        </div>
      </div>
    </div>

  </div>
</section>
