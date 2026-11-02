@php
  $kitchenPlantsCol1 = [
    'Cinnamon',
    'Nutmeg',
    'Clove',
    'Bay leaf',
    'Allspice',
    'Black pepper',
  ];

  $kitchenPlantsCol2 = [
    'Kokum',
    'Tamarind',
    'Curry leaf',
    'Drumstick',
    'Lemongrass',
    'Sweet basil',
  ];
@endphp

<section id="kitchen-garden" class="bg-[#f7f3eb] py-10 lg:py-14 border-t border-brand-ink/10"
  aria-labelledby="kitchen-garden-heading">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">

    <div class="grid lg:grid-cols-12 gap-6 lg:gap-14 items-start" data-reveal>
      {{-- Left: Heading, Intro, Link --}}
      <div class="lg:col-span-5">
        <h2 id="kitchen-garden-heading"
          class="font-heading text-3xl font-light leading-tight text-brand-primary sm:text-4xl lg:text-5xl">
          {{ __('The kitchen garden.', 'sage') }}<br>
          <span class="italic font-normal">{{ __('A few steps from the pass.', 'sage') }}</span>
        </h2>
        <p class="mt-3 text-base leading-7 text-brand-primary/80 sm:text-[16px] max-w-md">
          {{ __('The spices are picked the day they are used, and the seasonal vegetables in the beds between them decide the menu.', 'sage') }}
        </p>
        <!-- <div class="mt-5">
          <a
            href="{{ home_url('/dining') }}"
            class="inline-flex items-center text-xs uppercase tracking-[0.2em] text-brand-primary hover:text-brand-gold font-medium transition-colors"
          >
            {{ __('See how we cook →', 'sage') }}
          </a>
        </div> -->
      </div>

      {{-- Right: Two-column ruled list --}}
      <div class="lg:col-span-7 grid grid-cols-2 gap-x-8 lg:gap-x-12">
        <div>
          @foreach ($kitchenPlantsCol1 as $plant)
            <div class="border-b border-brand-ink/10 py-2 sm:py-2.5">
              <span class="font-heading text-base sm:text-lg font-light text-brand-primary">
                {{ $plant }}
              </span>
            </div>
          @endforeach
        </div>

        <div>
          @foreach ($kitchenPlantsCol2 as $plant)
            <div class="border-b border-brand-ink/10 py-2 sm:py-2.5">
              <span class="font-heading text-base sm:text-lg font-light text-brand-primary">
                {{ $plant }}
              </span>
            </div>
          @endforeach
        </div>
      </div>
    </div>

  </div>
</section>