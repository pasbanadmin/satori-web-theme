@php
  $layouts = [
    ['span' => 'lg:col-span-12', 'ratio' => 'aspect-[4/3] lg:aspect-[21/10]', 'offset' => ''],
    ['span' => 'lg:col-span-7', 'ratio' => 'aspect-[4/5]', 'offset' => ''],
    ['span' => 'lg:col-span-5', 'ratio' => 'aspect-[4/5]', 'offset' => 'lg:mt-28'],
    ['span' => 'lg:col-span-5', 'ratio' => 'aspect-[4/5]', 'offset' => ''],
    ['span' => 'lg:col-span-7', 'ratio' => 'aspect-[4/5]', 'offset' => 'lg:mt-28'],
  ];

  $positions = ['object-center', 'object-top', 'object-bottom'];
@endphp

<section class="bg-brand-sand py-24 lg:py-28">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
    <div class="mb-14 lg:mb-20" data-reveal>
      <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
        {{ __('The Gallery', 'sage') }}
      </p>

      <h2 class="mt-4 max-w-2xl font-heading text-4xl font-light leading-tight text-brand-ink">
        {{ __('A home you have to see slowly.', 'sage') }}
      </h2>
    </div>

    <div class="grid grid-cols-12 gap-5 lg:gap-8">
      @foreach ($stay['gallery'] as $image)
        @php
          $layout = $layouts[$loop->index % count($layouts)];
          $position = $positions[$loop->index % count($positions)];
        @endphp

        <div class="group col-span-12 overflow-hidden {{ $layout['span'] }} {{ $layout['offset'] }}" data-reveal>
          <img
            class="h-full w-full object-cover {{ $position }} transition-transform duration-[1200ms] ease-out group-hover:scale-105 {{ $layout['ratio'] }}"
            src="{{ $image }}"
            alt="{{ $stay['name'] . ' — ' . sprintf(__('View %d', 'sage'), $loop->iteration) }}"
            loading="lazy"
          >
        </div>
      @endforeach
    </div>
  </div>
</section>
