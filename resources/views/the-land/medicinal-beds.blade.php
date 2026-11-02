@php
  $medicinalCol1 = [
    ['common' => 'Wekhand', 'botanical' => 'Acorus calamus'],
    ['common' => 'Insulin plant', 'botanical' => 'Costus pictus'],
    ['common' => 'Ashwagandha', 'botanical' => 'Withania somnifera'],
    ['common' => 'Shatavari', 'botanical' => 'Asparagus racemosus'],
    ['common' => 'Gokarna, butterfly pea', 'botanical' => 'Clitoria ternatea'],
    ['common' => 'Moringa', 'botanical' => 'Moringa oleifera'],
    ['common' => 'Krishna tulsi', 'botanical' => 'Ocimum tenuiflorum'],
    ['common' => 'Kapoor tulsi', 'botanical' => 'Ocimum kilimandscharicum'],
    ['common' => 'Hadjod', 'botanical' => 'Cissus quadrangularis'],
    ['common' => 'Davana', 'botanical' => 'Artemisia pallens'],
    ['common' => 'Brahmi', 'botanical' => 'Bacopa monnieri'],
    ['common' => 'Karvi', 'botanical' => 'Strobilanthes callosa'],
    ['common' => 'Peppermint', 'botanical' => 'Mentha piperita'],
    ['common' => 'Sadafuli', 'botanical' => 'Catharanthus roseus'],
    ['common' => 'Haldikunku', 'botanical' => 'Lantana camara'],
  ];

  $medicinalCol2 = [
    ['common' => 'Marigold', 'botanical' => 'Tagetes erecta'],
    ['common' => 'Sonchafa', 'botanical' => 'Michelia champaca'],
    ['common' => 'Citronella', 'botanical' => 'Pelargonium citrosum'],
    ['common' => 'Multivitamin plant', 'botanical' => 'Sauropus androgynus'],
    ['common' => 'Sarpagandha', 'botanical' => 'Rauvolfia serpentina'],
    ['common' => 'Lakshmi taru', 'botanical' => 'Simarouba glauca'],
    ['common' => 'Gulvel', 'botanical' => 'Tinospora sinensis'],
    ['common' => 'Gurmar (bedki cha pala)', 'botanical' => 'Gymnema sylvestre'],
    ['common' => 'Chichardi', 'botanical' => 'Solanum indicum'],
    ['common' => 'Murudsheng', 'botanical' => 'Helicteres isora'],
    ['common' => 'Kuda', 'botanical' => 'Holarrhena pubescens'],
    ['common' => 'Satwin', 'botanical' => 'Alstonia scholaris'],
    ['common' => 'Anantmul', 'botanical' => 'Hemidesmus indicus'],
    ['common' => 'Wawding', 'botanical' => 'Embelia tsjeriam-cottam'],
  ];
@endphp

<section id="medicinal-beds" class="bg-[#f7f3eb] py-10 lg:py-14 border-t border-brand-ink/10" aria-labelledby="medicinal-heading">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">

    <div class="max-w-3xl mb-6 lg:mb-8" data-reveal>
      <h2 id="medicinal-heading" class="font-heading text-3xl font-light leading-tight text-brand-primary sm:text-4xl lg:text-5xl">
        {{ __('The medicinal beds.', 'sage') }}
      </h2>
      <p class="mt-3 text-base leading-7 text-brand-primary/80 sm:text-[16px]">
        {{ __('What the spa and the kitchen draw on, by name. Ask the gardeners which is which.', 'sage') }}
      </p>
    </div>

    {{-- Two columns on desktop --}}
    <div class="grid sm:grid-cols-2 gap-x-12 lg:gap-x-16" data-reveal>
      <div>
        @foreach ($medicinalCol1 as $item)
          <div class="flex items-baseline justify-between border-b border-brand-ink/10 py-2 sm:py-2.5 gap-4">
            <span class="font-heading text-base sm:text-lg font-light text-brand-primary">
              {{ $item['common'] }}
            </span>
            <span class="italic text-xs sm:text-sm text-brand-primary/70 text-right">
              {{ $item['botanical'] }}
            </span>
          </div>
        @endforeach
      </div>

      <div>
        @foreach ($medicinalCol2 as $item)
          <div class="flex items-baseline justify-between border-b border-brand-ink/10 py-2 sm:py-2.5 gap-4">
            <span class="font-heading text-base sm:text-lg font-light text-brand-primary">
              {{ $item['common'] }}
            </span>
            <span class="italic text-xs sm:text-sm text-brand-primary/70 text-right">
              {{ $item['botanical'] }}
            </span>
          </div>
        @endforeach
      </div>
    </div>

  </div>
</section>
