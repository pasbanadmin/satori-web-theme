{{--
  Template Name: Stays
--}}

@extends('layouts.app')

@section('content')
  @php
    $heroImage = '/wp-content/uploads/2026/08/36_202309051441007901-bcf6382f-142f-4570-85ee-9cdb14a05cc3-scaled.webp';
      $heroAlt = __('Private homes above Mulshi Lake at Satori', 'sage');
      $estateImage = '/wp-content/uploads/2026/08/SATORI-round-2-04-scaled.webp';

      $stays = [
        [
          'name' => __('Orchard Cottages', 'sage'),
          'description' => __('Low among the fruit trees, a short walk from the gardens and the kitchen.', 'sage'),
          'bedrooms' => 1,
          'sleeps' => 2,
          'setting' => __('The Orchard', 'sage'),
          'price' => 42000,
          'image' => '/wp-content/uploads/2026/08/36_202309051441007901-bcf6382f-142f-4570-85ee-9cdb14a05cc3-scaled.webp',
          'position' => 'object-center',
          'span' => 'lg:col-span-7',
          'offset' => '',
          'ratio' => 'aspect-[4/5] lg:aspect-[7/8]',
        ],
        [
          'name' => __('Canopy Suites', 'sage'),
          'description' => __('Elevated suites above the orchard, facing the lake across the treetops.', 'sage'),
          'bedrooms' => 1,
          'sleeps' => 2,
          'setting' => __('The Canopy', 'sage'),
          'price' => 38000,
          'image' => '/wp-content/uploads/2026/08/SATORI-round-2-04-scaled.webp',
          'position' => 'object-top',
          'span' => 'lg:col-span-5',
          'offset' => 'lg:mt-24',
          'ratio' => 'aspect-[4/5]',
        ],
        [
          'name' => __('Aves', 'sage'),
          'description' => __('Three secluded cottages named for birds, tucked into the quiet of the woods.', 'sage'),
          'bedrooms' => 1,
          'sleeps' => 2,
          'setting' => __('The Woods', 'sage'),
          'price' => 35000,
          'image' => '/wp-content/uploads/2026/08/36_202309051441007901-bcf6382f-142f-4570-85ee-9cdb14a05cc3-scaled.webp',
          'position' => 'object-bottom',
          'span' => 'lg:col-span-5',
          'offset' => '',
          'ratio' => 'aspect-[4/5]',
        ],
        [
          'name' => __('Woodhouse', 'sage'),
          'description' => __('A timber home wrapped in the estate’s sal trees, made for long slow afternoons.', 'sage'),
          'bedrooms' => 2,
          'sleeps' => 4,
          'setting' => __('The Woods', 'sage'),
          'price' => 46000,
          'image' => '/wp-content/uploads/2026/08/SATORI-round-2-04-scaled.webp',
          'position' => 'object-center',
          'span' => 'lg:col-span-7',
          'offset' => 'lg:mt-24',
          'ratio' => 'aspect-[4/5] lg:aspect-[7/8]',
        ],
        [
          'name' => __('Perch I', 'sage'),
          'description' => __('The smaller of the two lake-edge perches, hovering above the water.', 'sage'),
          'bedrooms' => 1,
          'sleeps' => 2,
          'setting' => __('Above the Water', 'sage'),
          'price' => 40000,
          'image' => '/wp-content/uploads/2026/08/36_202309051441007901-bcf6382f-142f-4570-85ee-9cdb14a05cc3-scaled.webp',
          'position' => 'object-top',
          'span' => 'lg:col-span-5',
          'offset' => '',
          'ratio' => 'aspect-[4/5]',
        ],
        [
          'name' => __('Perch II', 'sage'),
          'description' => __('The larger lakeside perch, with a long verandah strung above the water.', 'sage'),
          'bedrooms' => 2,
          'sleeps' => 4,
          'setting' => __('Above the Water', 'sage'),
          'price' => 45000,
          'image' => '/wp-content/uploads/2026/08/SATORI-round-2-04-scaled.webp',
          'position' => 'object-bottom',
          'span' => 'lg:col-span-7',
          'offset' => 'lg:mt-24',
          'ratio' => 'aspect-[4/5] lg:aspect-[7/8]',
        ],
        [
          'name' => __('Hornbill', 'sage'),
          'description' => __('The signature lakeside villa, standing apart with the widest view of the lake.', 'sage'),
          'bedrooms' => 2,
          'sleeps' => 4,
          'setting' => __('The Lakeside', 'sage'),
          'price' => 52000,
          'image' => '/wp-content/uploads/2026/08/36_202309051441007901-bcf6382f-142f-4570-85ee-9cdb14a05cc3-scaled.webp',
          'position' => 'object-center',
          'span' => 'lg:col-span-12',
          'offset' => '',
          'ratio' => 'aspect-[4/3] lg:aspect-[21/10]',
        ],
      ];

      $estate = [
        'name' => __('The Satori Estate', 'sage'),
        'eyebrow' => __('Whole Property', 'sage'),
        'heading' => __('The whole estate, to yourselves.', 'sage'),
        'description' => __('All fourteen homes, twenty bedrooms and every view, with no other names in the register. For weddings, milestone celebrations and gatherings that deserve the entire place.', 'sage'),
        'homes' => 14,
        'bedrooms' => 20,
        'sleeps' => 40,
        'setting' => __('The Entire Estate', 'sage'),
        'image' => $estateImage,
      ];
  @endphp

  @while(have_posts())
    @php
      the_post();
    @endphp

    <section class="relative flex min-h-screen items-center overflow-hidden bg-brand-primary text-brand-sand" data-stays-hero>
      <img class="absolute inset-0 h-full w-full object-cover" src="{{ $heroImage }}" alt="{{ $heroAlt }}" data-stays-hero-image>

      <div class="absolute inset-0 bg-gradient-to-t from-brand-primary/85 via-brand-primary/35 to-brand-primary/15"></div>

      <div class="relative z-10 mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16" data-stays-hero-item>
        <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
          {{ __('Satori · The Stays', 'sage') }}
        </p>

        <h1 class="mt-4 font-heading text-5xl font-light leading-none text-brand-sand sm:text-6xl">
          {{ __('STAY', 'sage') }}
        </h1>

        <div class="mt-7 flex items-center gap-8">
          <span class="hidden h-px w-16 bg-brand-gold lg:block" aria-hidden="true"></span>

          <p class="max-w-2xl text-base leading-8 text-brand-sand sm:text-[16px]">
            {{ __('Fourteen private homes across a lakeside estate.', 'sage') }}
          </p>
        </div>
      </div>

      <div class="absolute bottom-0 right-0 z-10 hidden items-center gap-3 pr-8 pb-10 lg:flex" data-stays-hero-item aria-hidden="true">
        <span class="block h-12 w-px bg-gradient-to-b from-brand-gold to-transparent"></span>
        <span class="text-[0.65rem] uppercase tracking-[0.3em] text-brand-sand/60">
          {{ __('Scroll', 'sage') }}
        </span>
      </div>
    </section>

    <section class="bg-[#f7f3eb] py-24">
      <div class="mx-auto w-full max-w-5xl px-5 sm:px-8 lg:px-16">
        <p class="text-center text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold" data-reveal>
          {{ __('The Stays', 'sage') }}
        </p>

        <h2 class="mt-6 text-center font-heading text-4xl font-light leading-tight text-brand-ink" data-reveal>
          {{ __('Fourteen homes. No two alike.', 'sage') }}
        </h2>

        <div class="mx-auto my-10 h-px w-full max-w-[16rem] bg-brand-gold" data-reveal></div>

        <p class="mx-auto max-w-2xl text-center text-base leading-8 text-brand-muted sm:text-[16px]" data-reveal>
          {{ __('Satori is not a single building with corridors. It is a collection of fourteen private homes set across the estate — some low among the fruit trees, some raised into the canopy, some standing alone above the water. Each has its own verandah, its own outlook, and its own way of slowing you down.', 'sage') }}
        </p>

        <p class="mx-auto mt-6 max-w-2xl text-center text-base leading-8 text-brand-muted sm:text-[16px]" data-reveal>
          {{ __('Choose a garden cottage among the fruit trees, a suite lifted into the canopy, a home wrapped in the woods, or a villa standing alone above the water.', 'sage') }}
        </p>
      </div>
    </section>

    <section id="stay" class="bg-[#f7f3eb] pb-24">
      <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
        <div class="mb-20 text-left lg:mb-24" data-reveal>
          <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
            {{ __('Choose Your Home', 'sage') }}
          </p>

          <h2 class="mt-4 max-w-3xl font-heading text-4xl font-light leading-tight text-brand-ink">
            {{ __('Seven ways to stay.', 'sage') }}
          </h2>
        </div>

        @php
          $chapters = [
            __('Orchard Cottages', 'sage') => [
              'category' => __('Garden Cottage', 'sage'),
              'headline' => __('Where the garden sets the pace of the day.', 'sage'),
              'idealFor' => __('Ideal for couples who wake early and walk the garden.', 'sage'),
              'features' => [
                __('Private verandah among the fruit trees', 'sage'),
                __('Morning produce from the estate', 'sage'),
                __('A short walk to the kitchen garden', 'sage'),
              ],
            ],
            __('Canopy Suites', 'sage') => [
              'category' => __('Canopy Suite', 'sage'),
              'headline' => __('Treetop mornings, lake-facing light.', 'sage'),
              'idealFor' => __('Ideal for first-time guests who want the lake from bed.', 'sage'),
              'features' => [
                __('Elevated deck above the orchard', 'sage'),
                __('Lake-facing outlook from every room', 'sage'),
                __('Quiet privacy among the treetops', 'sage'),
              ],
            ],
            __('Aves', 'sage') => [
              'category' => __('Woodland Cottage', 'sage'),
              'headline' => __('Silence, named for the birds.', 'sage'),
              'idealFor' => __('Ideal for writers, readers and long unhurried mornings.', 'sage'),
              'features' => [
                __('Secluded setting in the woods', 'sage'),
                __('Morning light through the canopy', 'sage'),
                __('Named for the birds that share the estate', 'sage'),
              ],
            ],
            __('Woodhouse', 'sage') => [
              'category' => __('Woodland Home', 'sage'),
              'headline' => __('The estate in timber and warm light.', 'sage'),
              'idealFor' => __('Ideal for families who want space without noise.', 'sage'),
              'features' => [
                __('Warm timber interiors', 'sage'),
                __('Deep verandah opening to the sal trees', 'sage'),
                __('Generous space for families', 'sage'),
              ],
            ],
            __('Perch I', 'sage') => [
              'category' => __('Lake Perch', 'sage'),
              'headline' => __('Close to the water. Made for two.', 'sage'),
              'idealFor' => __('Ideal for anniversaries and slow weekends.', 'sage'),
              'features' => [
                __('Private perch above the water', 'sage'),
                __('Sunset from the bed', 'sage'),
                __('Intimate for two', 'sage'),
              ],
            ],
            __('Perch II', 'sage') => [
              'category' => __('Lake Perch', 'sage'),
              'headline' => __('The long verandah above the lake.', 'sage'),
              'idealFor' => __('Ideal for friends and small family stays.', 'sage'),
              'features' => [
                __('Verandah strung over the lake', 'sage'),
                __('Two bedrooms, two outlooks', 'sage'),
                __('Room for the whole family', 'sage'),
              ],
            ],
            __('Hornbill', 'sage') => [
              'category' => __('Signature Villa', 'sage'),
              'headline' => __('The villa that owns the view.', 'sage'),
              'idealFor' => __('Ideal for those who want the water to themselves.', 'sage'),
              'features' => [
                __('Signature lakeside position', 'sage'),
                __('The widest view of the water', 'sage'),
                __('Stand-alone privacy', 'sage'),
              ],
            ],
          ];
        @endphp

        <div class="space-y-20 lg:space-y-28">
          @foreach ($stays as $stay)
            @php
              $chapter = $chapters[$stay['name']];
              $isFlipped = $loop->index % 2 === 1;
            @endphp

            <article class="group grid items-center gap-10 lg:grid-cols-12 lg:gap-16">
              <div class="relative aspect-[4/3] overflow-hidden bg-brand-primary lg:col-span-7 {{ $isFlipped ? 'lg:order-last' : '' }}" data-reveal>
                <img class="absolute inset-0 h-full w-full object-cover transition-transform duration-[1200ms] ease-out group-hover:scale-105" src="{{ $stay['image'] }}" alt="{{ $stay['name'] }}">
              </div>

              <div class="lg:col-span-5 {{ $isFlipped ? 'lg:order-first' : '' }}" data-reveal>
                <p class="font-heading text-lg font-light text-brand-gold/70">
                  {{ sprintf('%02d', $loop->iteration) }}
                </p>

                <p class="mt-4 text-[0.7rem] uppercase tracking-[0.25em] text-brand-gold">
                  {{ $chapter['category'] }}
                </p>

                <h3 class="mt-3 font-heading text-3xl font-light leading-tight text-brand-ink sm:text-4xl">
                  {{ $stay['name'] }}
                </h3>

                <p class="mt-3 text-[0.7rem] uppercase tracking-[0.25em] text-brand-muted">
                  {{ sprintf(_n('%d Bedroom', '%d Bedrooms', $stay['bedrooms'], 'sage'), $stay['bedrooms']) }}
                  <span aria-hidden="true"> · </span>
                  {{ sprintf(__('Sleeps %d', 'sage'), $stay['sleeps']) }}
                  <span aria-hidden="true"> · </span>
                  {{ $stay['setting'] }}
                </p>

                <p class="mt-6 font-heading text-xl font-light leading-snug text-brand-ink sm:text-2xl">
                  {{ $chapter['headline'] }}
                </p>

                <div class="mt-6 h-px w-16 bg-brand-gold" aria-hidden="true"></div>

                <p class="mt-6 text-base leading-8 text-brand-muted sm:text-[16px]">
                  {{ $stay['description'] }}
                </p>

                <p class="mt-5 text-sm leading-6 text-brand-muted">
                  {{ $chapter['idealFor'] }}
                </p>

                <ul class="mt-7 space-y-3 border-t border-brand-ink/10 pt-7">
                  @foreach ($chapter['features'] as $feature)
                    <li class="flex items-start gap-3 text-sm leading-6 text-brand-ink">
                      <span class="mt-2 inline-block h-1 w-1 shrink-0 rounded-full bg-brand-gold" aria-hidden="true"></span>
                      <span>{{ $feature }}</span>
                    </li>
                  @endforeach
                </ul>

                <a class="mt-9 inline-flex items-center gap-2 text-[0.75rem] uppercase tracking-[0.25em] text-brand-gold transition-colors duration-300 hover:text-brand-ink" href="#comparison">
                  {{ sprintf(__('View %s', 'sage'), $stay['name']) }}
                  <span class="inline-block transition-transform duration-300 group-hover:translate-x-1.5" aria-hidden="true">→</span>
                </a>
              </div>
            </article>
          @endforeach
        </div>
      </div>
    </section>

    <section id="estate" class="bg-brand-primary text-brand-sand">
      <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
        <div class="grid overflow-hidden lg:grid-cols-2">
          <div class="group relative aspect-[4/3] overflow-hidden lg:aspect-auto lg:min-h-[34rem]" data-reveal>
            <img class="absolute inset-0 h-full w-full object-cover transition-transform duration-[1200ms] ease-out group-hover:scale-105" src="{{ $estate['image'] }}" alt="{{ $estate['name'] }}">

            <div class="absolute inset-0 bg-brand-primary/30"></div>
          </div>

          <div class="flex flex-col justify-center py-24" data-reveal>
            <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
              {{ $estate['eyebrow'] }}
            </p>

            <h2 class="mt-4 max-w-xl font-heading text-4xl font-light leading-tight text-brand-sand">
              {{ $estate['heading'] }}
            </h2>

            <p class="mt-6 max-w-lg text-base leading-8 text-brand-sand/85 sm:text-[16px]">
              {{ $estate['description'] }}
            </p>

            <div class="mt-10 flex flex-wrap items-center gap-x-6 gap-y-3 border-t border-brand-sand/15 pt-8 text-[0.7rem] uppercase tracking-[0.25em] text-brand-sand/85">
              <span>{{ sprintf(__('%d Homes', 'sage'), $estate['homes']) }}</span>
              <span aria-hidden="true">·</span>
              <span>{{ sprintf(__('%d Bedrooms', 'sage'), $estate['bedrooms']) }}</span>
              <span aria-hidden="true">·</span>
              <span>{{ sprintf(__('Sleeps %d', 'sage'), $estate['sleeps']) }}</span>
            </div>

            <div class="mt-9 flex flex-wrap items-center gap-6">
              <a class="inline-flex items-center gap-2 rounded-full border border-brand-gold px-6 py-3 text-[0.8125rem] uppercase tracking-[0.2em] text-brand-gold transition-colors duration-300 hover:bg-brand-gold hover:text-brand-primary" href="#book">
                {{ __('Enquire', 'sage') }}
                <span aria-hidden="true">→</span>
              </a>

              <p class="text-[0.75rem] uppercase tracking-[0.2em] text-brand-sand/70">
                {{ __('On enquiry', 'sage') }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="comparison" class="bg-[#f7f3eb] py-24">
      <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
        <div class="mb-20 lg:mb-24" data-reveal>
          <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
            {{ __('Compare', 'sage') }}
          </p>

          <h2 class="mt-4 max-w-3xl font-heading text-4xl font-light leading-tight text-brand-ink">
            {{ __('Find the home that matches your rhythm.', 'sage') }}
          </h2>
        </div>

        <div class="hidden lg:block" data-reveal>
          <div class="grid grid-cols-12 gap-4 border-b border-brand-ink/15 pb-5 text-[0.7rem] uppercase tracking-[0.25em] text-brand-muted">
            <p class="col-span-4">{{ __('Home', 'sage') }}</p>
            <p class="col-span-2">{{ __('Bedrooms', 'sage') }}</p>
            <p class="col-span-2">{{ __('Sleeps', 'sage') }}</p>
            <p class="col-span-2">{{ __('Setting', 'sage') }}</p>
            <p class="col-span-2 text-right">{{ __('From', 'sage') }}</p>
          </div>

          @foreach ($stays as $stay)
            <div class="grid grid-cols-12 items-center gap-4 border-b border-brand-ink/15 py-7 transition-colors duration-300 hover:bg-brand-sand/50">
              <h3 class="col-span-4 font-heading text-2xl font-light text-brand-ink">
                {{ $stay['name'] }}
              </h3>

              <p class="col-span-2 text-sm text-brand-muted">{{ $stay['bedrooms'] }}</p>
              <p class="col-span-2 text-sm text-brand-muted">{{ $stay['sleeps'] }}</p>
              <p class="col-span-2 text-sm text-brand-muted">{{ $stay['setting'] }}</p>

              <p class="col-span-2 text-right text-sm text-brand-ink">
                <span class="text-[0.65rem] uppercase tracking-[0.2em] text-brand-muted">{{ __('From', 'sage') }} </span>
                ₹{{ number_format($stay['price']) }}
              </p>
            </div>
          @endforeach

          <div class="relative grid grid-cols-12 items-center gap-4 border border-brand-gold bg-brand-sand px-6 py-8 shadow-lg shadow-brand-ink/5">
            <p class="absolute -top-3 left-6 bg-[#f7f3eb] px-3 text-[0.65rem] uppercase tracking-[0.25em] text-brand-gold">
              {{ __('Whole Property', 'sage') }}
            </p>

            <h3 class="col-span-4 font-heading text-2xl font-light text-brand-ink">
              {{ $estate['name'] }}
            </h3>

            <p class="col-span-2 text-sm text-brand-muted">{{ $estate['bedrooms'] }}</p>
            <p class="col-span-2 text-sm text-brand-muted">{{ $estate['sleeps'] }}</p>
            <p class="col-span-2 text-sm text-brand-muted">{{ $estate['setting'] }}</p>

            <p class="col-span-2 text-right text-[0.75rem] uppercase tracking-[0.2em] text-brand-gold">
              {{ __('On enquiry', 'sage') }}
            </p>
          </div>
        </div>

        <div class="space-y-6 lg:hidden">
          @foreach ($stays as $stay)
            <article class="border border-brand-ink/15 p-6 sm:p-8" data-reveal>
              <div class="flex items-start justify-between gap-6">
                <div>
                  <p class="text-[0.7rem] uppercase tracking-[0.25em] text-brand-gold">
                    {{ $stay['setting'] }}
                  </p>

                  <h3 class="mt-2 font-heading text-2xl font-light text-brand-ink">
                    {{ $stay['name'] }}
                  </h3>
                </div>

                <a class="inline-flex items-center gap-2 text-[0.7rem] uppercase tracking-[0.25em] text-brand-gold transition-colors duration-300 hover:text-brand-ink" href="#book">
                  {{ __('Discover', 'sage') }}
                  <span aria-hidden="true">→</span>
                </a>
              </div>

              <div class="mt-6 grid grid-cols-2 gap-x-6 gap-y-5 border-t border-brand-ink/15 pt-6">
                <div>
                  <p class="text-[0.65rem] uppercase tracking-[0.2em] text-brand-muted">{{ __('Bedrooms', 'sage') }}</p>
                  <p class="mt-1.5 text-sm text-brand-ink">{{ $stay['bedrooms'] }}</p>
                </div>

                <div>
                  <p class="text-[0.65rem] uppercase tracking-[0.2em] text-brand-muted">{{ __('Sleeps', 'sage') }}</p>
                  <p class="mt-1.5 text-sm text-brand-ink">{{ $stay['sleeps'] }}</p>
                </div>

                <div>
                  <p class="text-[0.65rem] uppercase tracking-[0.2em] text-brand-muted">{{ __('Setting', 'sage') }}</p>
                  <p class="mt-1.5 text-sm text-brand-ink">{{ $stay['setting'] }}</p>
                </div>

                <div>
                  <p class="text-[0.65rem] uppercase tracking-[0.2em] text-brand-muted">{{ __('From', 'sage') }}</p>
                  <p class="mt-1.5 text-sm text-brand-ink">₹{{ number_format($stay['price']) }}</p>
                </div>
              </div>
            </article>
          @endforeach

          <article class="relative border border-brand-gold bg-brand-primary p-6 text-brand-sand sm:p-8" data-reveal>
            <p class="text-[0.65rem] uppercase tracking-[0.25em] text-brand-gold">
              {{ __('Whole Property', 'sage') }}
            </p>

            <h3 class="mt-2 font-heading text-2xl font-light text-brand-sand">
              {{ $estate['name'] }}
            </h3>

            <div class="mt-6 grid grid-cols-2 gap-x-6 gap-y-5 border-t border-brand-sand/15 pt-6">
              <div>
                <p class="text-[0.65rem] uppercase tracking-[0.2em] text-brand-sand/60">{{ __('Bedrooms', 'sage') }}</p>
                <p class="mt-1.5 text-sm text-brand-sand">{{ $estate['bedrooms'] }}</p>
              </div>

              <div>
                <p class="text-[0.65rem] uppercase tracking-[0.2em] text-brand-sand/60">{{ __('Sleeps', 'sage') }}</p>
                <p class="mt-1.5 text-sm text-brand-sand">{{ $estate['sleeps'] }}</p>
              </div>

              <div>
                <p class="text-[0.65rem] uppercase tracking-[0.2em] text-brand-sand/60">{{ __('Setting', 'sage') }}</p>
                <p class="mt-1.5 text-sm text-brand-sand">{{ $estate['setting'] }}</p>
              </div>

              <div>
                <p class="text-[0.65rem] uppercase tracking-[0.2em] text-brand-sand/60">{{ __('From', 'sage') }}</p>
                <p class="mt-1.5 text-[0.75rem] uppercase tracking-[0.2em] text-brand-gold">{{ __('On enquiry', 'sage') }}</p>
              </div>
            </div>

            <a class="mt-8 inline-flex items-center gap-2 rounded-full border border-brand-gold px-6 py-3 text-[0.8125rem] uppercase tracking-[0.2em] text-brand-gold transition-colors duration-300 hover:bg-brand-gold hover:text-brand-primary" href="#book">
              {{ __('Enquire', 'sage') }}
              <span aria-hidden="true">→</span>
            </a>
          </article>
        </div>

        <p class="mt-10 text-center text-[0.7rem] uppercase tracking-[0.2em] text-brand-muted" data-reveal>
          {{ __('Rates are per night for two guests, inclusive of breakfast. The Satori Estate is offered on enquiry.', 'sage') }}
        </p>
      </div>
    </section>

    <section id="book" class="bg-brand-primary text-brand-sand">
      <div class="mx-auto w-full max-w-4xl px-5 py-28 text-center sm:px-8">
        <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold" data-reveal>
          {{ __('Reservations', 'sage') }}
        </p>

        <h2 class="mt-5 font-heading text-4xl font-light leading-tight text-brand-sand" data-reveal>
          {{ __('The right home is waiting.', 'sage') }}
        </h2>

        <p class="mx-auto mt-6 max-w-xl text-base leading-8 text-brand-sand/85" data-reveal>
          {{ __('Tell us who is coming and when, and we will help you choose the home that fits your stay.', 'sage') }}
        </p>

        <a class="mt-10 inline-flex items-center justify-center rounded-full bg-brand-sand px-6 py-3 text-[0.8125rem] uppercase tracking-[0.2em] text-brand-primary transition-colors duration-300 hover:bg-brand-gold hover:text-brand-primary" href="#book" data-reveal>
          {{ __('Book Your Stay', 'sage') }}
        </a>
      </div>
    </section>

  @endwhile
@endsection
