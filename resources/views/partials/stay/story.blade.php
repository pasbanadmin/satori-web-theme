<section class="bg-brand-sand pb-24 lg:pb-28">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
    <div class="mb-16 space-y-20 lg:mb-20 lg:space-y-28">
      @foreach ($stay['story'] as $block)
        @php
          $isFlipped = $loop->index % 2 === 1;
        @endphp

        <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-16">
          <div class="group relative overflow-hidden {{ $isFlipped ? 'lg:order-last' : '' }}" data-reveal>
            <img
              class="aspect-[4/5] w-full object-cover {{ $block['position'] }} transition-transform duration-[1200ms] ease-out group-hover:scale-105"
              src="{{ $block['image'] }}"
              alt="{{ $block['heading'] ? $block['heading'] . ' — ' . $stay['name'] : $stay['name'] }}"
              loading="lazy"
            >
          </div>

          <div class="max-w-xl" data-reveal>
            <p class="flex items-center gap-4 text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
              {{ __('The Story', 'sage') }}
              <span class="font-heading text-base font-light normal-case tracking-normal text-brand-gold/70">{{ sprintf('%02d', $loop->iteration) }}</span>
            </p>

            <h3 class="mt-4 font-heading text-3xl font-light leading-tight text-brand-ink sm:text-4xl">
              {{ $block['heading'] }}
            </h3>

            <div class="mt-5 h-px w-16 bg-brand-gold" aria-hidden="true"></div>

            @foreach ($block['paragraphs'] as $paragraph)
              <p class="{{ $loop->first ? 'mt-6' : 'mt-4' }} text-base leading-8 text-brand-muted sm:text-[16px]">
                {{ $paragraph }}
              </p>
            @endforeach
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
