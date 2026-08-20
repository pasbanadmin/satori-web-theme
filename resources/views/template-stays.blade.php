{{--
Template Name: Stays
--}}

@extends('layouts.app')

@section('content')
  @php
    $heroImage = '/wp-content/uploads/2026/08/28-Movie-Night-and-Bonfire-on-the-Lawn-1.webp';
    $heroAlt = __('Private homes above Mulshi Lake at Satori', 'sage');
    $estateImage = '/wp-content/uploads/2026/08/SATORI-round-2-04-scaled.webp';

    $gallerySlide = function ($src, $position = 'object-center') {
      return ['src' => $src, 'position' => $position];
    };

    $stays = [
      // [
      //   'name' => __('Garden View Cottages', 'sage'),
      //   'ota_name' => __('Garden View Cottage', 'sage'),
      //   'category' => '1',
      //   'slug' => 'orchard-cottages',
      //   'description' => __('Low among the fruit trees, a short walk from the gardens and the kitchen.', 'sage'),
      //   'units' => 3,
      //   'bedrooms' => '3',
      //   'sleeps' => '2 each',
      //   'setting' => __('Fruit garden & farmland', 'sage'),
      //   'price' => 42000,
      //   'image' => '/wp-content/uploads/2026/08/36_202309051441007901-bcf6382f-142f-4570-85ee-9cdb14a05cc3-scaled.webp',
      //   'position' => 'object-center',
      //   'span' => 'lg:col-span-7',
      //   'offset' => '',
      //   'ratio' => 'aspect-[4/5] lg:aspect-[7/8]',
      //   'gallery' => [
      //     '/wp-content/uploads/2026/08/Orchard-Cottages-—-estate-path.webp',
      //   ],
      // ],
      // [
      //   'name' => __('Junior Suites (Lake View)', 'sage'),
      //   'ota_name' => __('Junior Suite (Lake View)', 'sage'),
      //   'category' => '2',
      //   'slug' => 'canopy-suites',
      //   'description' => __('An elevated hideaway above the fruit garden, with the lake beyond.', 'sage'),
      //   'units' => 4,
      //   'bedrooms' => '4',
      //   'sleeps' => '2 each',
      //   'setting' => __('Elevated above orchard, lake view', 'sage'),
      //   'price' => 38000,
      //   'image' => '/wp-content/uploads/2026/08/SATORI-round-2-04-scaled.webp',
      //   'position' => 'object-top',
      //   'span' => 'lg:col-span-5',
      //   'offset' => 'lg:mt-24',
      //   'ratio' => 'aspect-[4/5]',
      //   'gallery' => [
      //     '/wp-content/uploads/2026/08/Canopy-Suites-—-estate-verandah.webp',
      //   ],
      // ],
      [
        'name' => __('Aves', 'sage'),
        'ota_name' => __('Aves Cottage', 'sage'),
        'category' => '2',
        'slug' => 'aves',
        'description' => __('Three cottages, named for birds, hidden in plain sight.', 'sage'),
        'units' => 3,
        'bedrooms' => '3',
        'sleeps' => '2 each',
        'setting' => __('Secluded, garden-edged', 'sage'),
        'price' => 35000,
        'image' => '/wp-content/uploads/2026/08/21_202309051441007901-954db27c-675a-4c2e-801e-a217839b712f.webp',
        'position' => 'object-bottom',
        'span' => 'lg:col-span-5',
        'offset' => '',
        'ratio' => 'aspect-[4/5]',
        'gallery' => [
          '/wp-content/uploads/2026/08/Cottages-and-the-Sahyadri-hills.webp',
          '/wp-content/uploads/2026/08/21_202309051441007901-954db27c-675a-4c2e-801e-a217839b712f.webp',
          '/wp-content/uploads/2026/08/Bedroom-12-—-bed-and-garden-doors.webp',
          '/wp-content/uploads/2026/08/Bedroom-10-—-bed-under-the-beamed-ceiling.webp',
          '/wp-content/uploads/2026/08/Aves-—-cottage-lit-at-dusk.webp',
          '/wp-content/uploads/2026/08/26_202309051441007901-8b93e724-cb2d-4bf1-9e19-12024a69006c.webp'
        ],
      ],
      [
        'name' => __('Woodhouse', 'sage'),
        'ota_name' => __('Woodhouse', 'sage'),
        'category' => '3',
        'slug' => 'woodhouse',
        'description' => __('Machan-inspired, timber-warm, and the most atmospheric address on the estate.', 'sage'),
        'units' => 1,
        'bedrooms' => '2',
        'sleeps' => '4',
        'setting' => __('Machan, above lawns and lake', 'sage'),
        'price' => 46000,
        'image' => '/wp-content/uploads/2026/08/SATORI-round-2-04-scaled.webp',
        'position' => 'object-center',
        'span' => 'lg:col-span-7',
        'offset' => 'lg:mt-24',
        'ratio' => 'aspect-[4/5] lg:aspect-[7/8]',
        'gallery' => [
          '/wp-content/uploads/2026/08/Woodhouse-%E2%80%94-timber-house-on-stilts-daylight.webp',
          '/wp-content/uploads/2026/08/Bedroom-01-—-timber-walls-hill-view.webp',
          '/wp-content/uploads/2026/08/Bedroom-02-—-bed-facing-the-windows.webp',
          '/wp-content/uploads/2026/08/Bedroom-03-—-bedroom-opening-to-the-deck.webp',
          '/wp-content/uploads/2026/08/Bedroom-04-—-corner-bedroom.webp',
          '/wp-content/uploads/2026/08/Bedroom-05-—-bedroom-and-writing-desk.webp',
          '/wp-content/uploads/2026/08/Suite-01-—-living-area-and-bed.webp',
          '/wp-content/uploads/2026/08/Suite-02-—-sitting-room.webp',
          '/wp-content/uploads/2026/08/Suite-03-—-blue-sofa-and-hill-view.webp',
          '/wp-content/uploads/2026/08/Suite-04-—-lounge-seating.webp',
          '/wp-content/uploads/2026/08/Suite-05-—-lounge-corner.webp',
          '/wp-content/uploads/2026/08/Suite-06-—-long-blue-sofa.webp'
        ],
      ],
      [
        'name' => __('Perch I', 'sage'),
        'ota_name' => __('Perch 1', 'sage'),
        'category' => '3',
        'slug' => 'perch-i',
        'description' => __('One of the estate\'s largest stays, with long views over Mulshi Lake.', 'sage'),
        'units' => 1,
        'bedrooms' => '4',
        'sleeps' => '8',
        'setting' => __('Elevated, commanding lake views', 'sage'),
        'price' => 40000,
        'position' => 'object-top',
        'span' => 'lg:col-span-5',
        'offset' => '',
        'ratio' => 'aspect-[4/5]',
        'gallery' => [
          '/wp-content/uploads/2026/08/Perch-—-three-storey-elevation-daylight.webp',
          '/wp-content/uploads/2026/08/Bedroom-01-—-four-poster-glass-walls-lake-view.webp',
          '/wp-content/uploads/2026/08/Bedroom-02-—-four-poster-opening-to-the-terrace.webp',
          '/wp-content/uploads/2026/08/Bedroom-03-—-canopy-bed-and-hills.webp',
          '/wp-content/uploads/2026/08/Bedroom-04-—-bed-facing-the-valley.webp',
          '/wp-content/uploads/2026/08/Bedroom-05-—-bedroom-seen-from-the-terrace.webp',
          '/wp-content/uploads/2026/08/Perch-—-home-perch.webp',
        ],
      ],
      [
        'name' => __('Perch II', 'sage'),
        'ota_name' => __('Perch 2', 'sage'),
        'category' => '3',
        'slug' => 'perch-ii',
        'description' => __('One of the estate\'s largest stays, with long views over Mulshi Lake.', 'sage'),
        'units' => 1,
        'bedrooms' => '3',
        'sleeps' => '6',
        'setting' => __('Elevated, commanding lake views', 'sage'),
        'price' => 45000,
        'position' => 'object-bottom',
        'span' => 'lg:col-span-7',
        'offset' => 'lg:mt-24',
        'ratio' => 'aspect-[4/5] lg:aspect-[7/8]',
        'gallery' => [
          '/wp-content/uploads/2026/08/Perch-—-three-storey-elevation-daylight.webp',
          '/wp-content/uploads/2026/08/Bedroom-06-—-corner-windows.webp',
          '/wp-content/uploads/2026/08/Bedroom-07-—-bed-and-picture-window.webp',
          '/wp-content/uploads/2026/08/Bedroom-08-—-bedroom-in-morning-light.webp',
          '/wp-content/uploads/2026/08/Living-02-—-lounge-and-hill-view.webp'
        ],
      ],


      [
        'name' => __('Hornbill', 'sage'),
        'ota_name' => __('Hornbill', 'sage'),
        'category' => '4',
        'slug' => 'hornbill',
        'description' => __('The signature villa. The best seat on the estate.', 'sage'),
        'units' => 1,
        'bedrooms' => '2',
        'sleeps' => '4',
        'setting' => __('Lakeside, signature villa', 'sage'),
        'price' => 52000,
        'image' => '/wp-content/uploads/2026/08/36_202309051441007901-bcf6382f-142f-4570-85ee-9cdb14a05cc3-scaled.webp',
        'position' => 'object-center',
        'span' => 'lg:col-span-12',
        'offset' => '',
        'ratio' => 'aspect-[4/3] lg:aspect-[21/10]',
        'gallery' => [
          '/wp-content/uploads/2026/08/Hornbill-—-timber-house-lit-at-dusk.webp',
          '/wp-content/uploads/2026/08/Living-01-—-double-height-sitting-room.webp',
          '/wp-content/uploads/2026/08/Bedroom-02-—-four-poster-white-linen.webp',
          '/wp-content/uploads/2026/08/Living-03-—-sitting-room-and-mezzanine.webp',
          '/wp-content/uploads/2026/08/Bedroom-03-—-twin-four-posters.webp',
          '/wp-content/uploads/2026/08/Bedroom-04-—-twin-beds-timber-ceiling.webp',
          '/wp-content/uploads/2026/08/Bedroom-06-—-twin-beds-corner-room.webp',
          '/wp-content/uploads/2026/08/Bedroom-08-—-four-poster-and-kilim.webp'
        ],
      ],
    ];

    $estate = [
      'name' => __('The Satori Estate', 'sage'),
      'ota_name' => __('Full buyout', 'sage'),
      'category' => '—',
      'eyebrow' => __('Full Buyout', 'sage'),
      'heading' => __('The whole place. No other names in the register.', 'sage'),
      'description' => __('Satori can be taken in its entirety - all fourteen stays, twenty bedrooms and every shared space, for up to forty guests. The Nest becomes your dining room, the lawns become your venue, the kitchen cooks to your menu, and the gates close behind your group.', 'sage'),
      'units' => 14,
      'stays' => 14,
      'bedrooms' => '20',
      'sleeps' => '40',
      'setting' => __('Entire property', 'sage'),
      'image' => '$estateImage',
      'cta' => __('Enquire About the Estate', 'sage'),
    ];

    $stayUrls = [];

    foreach ($stays as $stay) {
      $stayUrls[$stay['name']] = \App\stay_url($stay['slug']);
    }
  @endphp

  @while(have_posts())
    @php
      the_post();
    @endphp

    <section class="relative flex min-h-[calc(100vh-7rem)] items-end overflow-hidden bg-brand-primary text-brand-sand"
      data-stays-hero>
      <img class="absolute inset-0 h-full w-full object-cover object-bottom" src="{{ $heroImage }}" alt="{{ $heroAlt }}"
        data-stays-hero-image>

      <div class="absolute inset-0 bg-gradient-to-t from-brand-primary/85 via-brand-primary/50 to-transparent"></div>

      <div class="relative z-10 mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16 pb-14 lg:pb-20" data-stays-hero-item>
        <h1 class="mt-4 font-heading text-5xl font-light leading-none text-brand-sand sm:text-6xl lg:text-7xl">
          {{ __('STAYS', 'sage') }}
        </h1>

        <div class="mt-4 flex items-center gap-8">
          <p class="max-w-2xl md:text-2xl text-lg leading-8 text-brand-sand font-heading">
            {{ __('Fourteen private stays across a lakeside estate.', 'sage') }}
          </p>
        </div>
      </div>

      <div class="absolute bottom-0 right-20 z-10 hidden items-center gap-3 pb-10 lg:flex" aria-hidden="true">
        <span class="block h-12 w-px bg-gradient-to-b from-brand-gold to-transparent"></span>
        <span class="text-[0.65rem] uppercase tracking-[0.3em] text-brand-sand/60">
          {{ __('Scroll', 'sage') }}
        </span>
      </div>
    </section>

    <section class="bg-[#f7f3eb] py-10">
      <div class="mx-auto w-full max-w-5xl px-5 sm:px-8 lg:px-16">
        <div class="mx-auto my-10 h-px w-full max-w-[16rem] bg-brand-gold"></div>

        <p class="mx-auto max-w-xl text-center text-base leading-8 text-brand-muted sm:text-[16px]" data-reveal>
          {{ __('Satori brings together a collection of villas and cottages across a beautifully layered estate in Mulshi. What unites them all is a sense of quiet luxury, thoughtful design, and a relationship with nature that feels immediate and immersive. Across the collection, Satori can be experienced through live bookable options, including a fuller estate-scale stay for larger private gatherings.', 'sage') }}
        </p>
      </div>
    </section>

    <section id="stay" class="bg-[#f7f3eb] snap-y scroll-mt-16">
      <div class="mx-auto w-full max-w-7xl px-5 sm:px-8">
        <div class="flex py-12 snap-start scroll-mt-16 flex-col justify-center text-left" data-reveal>
          <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
            {{ __('Choose Your Stay', 'sage') }}
          </p>

          <h2 class="mt-4 max-w-3xl font-heading text-4xl font-light leading-tight text-brand-ink">
            {{ __('Seven ways to stay.', 'sage') }}
          </h2>
        </div>
      </div>

      @php
        $chapters = [
          __('Garden View Cottages', 'sage') => [
            'category' => __('Cat 1', 'sage'),
            'meta' => __('Three cottages · One bedroom each · Sleeps 2', 'sage'),
            'headline' => __('Wake up inside the garden that feeds the estate.', 'sage'),
            'description' => [
              __('The Orchard Cottages sit low among Satori’s fruit trees and vegetable beds, on the farmland side of the estate where the mornings smell of wet earth and citrus leaf. Three private cottages, each with its own verandah opening directly onto the growing beds — close enough that the herbs on your breakfast plate were cut a few steps from where you slept.', 'sage'),
              __('They are the most intimate stays at Satori, and deliberately so. What they trade in scale they return in immediacy: birdsong at close range, the gardeners moving through the rows at first light, fruit ripening within reach of the verandah rail. For couples and solo travellers who want the estate at its quietest, this is where to start.', 'sage'),
            ],
            'idealFor' => __('Ideal for couples, solo travellers, and guests arriving at Satori for the first time.', 'sage'),
            'features' => [
              __('One bedroom, sleeps two', 'sage'),
              __('Private garden verandah', 'sage'),
              __('Opens onto the working orchard and vegetable beds', 'sage'),
              __('Full access to the pool, The Nest, spa and all estate experiences', 'sage'),
            ],
          ],
          __('Junior Suites (Lake View)', 'sage') => [
            'category' => __('Cat 2', 'sage'),
            'meta' => __('Four suites - One bedroom each - Sleeps 2', 'sage'),
            'headline' => __('An elevated hideaway above the fruit garden, with the lake beyond.', 'sage'),
            'description' => [
              __('The Canopy Suites are raised above the same orchard the cottages sit within - high enough that you look out across the tops of the fruit trees to Mulshi Lake and the hills behind it. The garden is still directly below you; the view is simply longer.', 'sage'),
              __('Inside, the suites are more generous and more finished: a larger bed, a deeper verandah, a bathroom you won\'t want to rush out of. They are made for guests who want seclusion with a lake view - morning light coming in over the canopy, evenings spent watching the water change colour from your own verandah.', 'sage'),
            ],
            'idealFor' => __('Ideal for couples, honeymooners, and longer stays where the room itself sets the tone.', 'sage'),
            'features' => [
              __('One bedroom, sleeps two', 'sage'),
              __('Elevated position with lake and hill views', 'sage'),
              __('Deep private verandah above the orchard', 'sage'),
              __('Enhanced bathroom and in-room comforts', 'sage'),
            ],
            'cta' => __('View Junior Suites (Lake View)', 'sage'),
          ],
          __('Aves', 'sage') => [
            'category' => __('Cat 2', 'sage'),
            'meta' => __('Three cottages - Falcon, Macaw, Toucan - One bedroom each - Sleeps 2', 'sage'),
            'headline' => __('Three cottages, named for birds, hidden in plain sight.', 'sage'),
            'description' => [
              __('Aves brings together Falcon, Macaw and Toucan - three single-bedroom cottages tucked into their own pockets of the estate. Each has a wraparound verandah and its own angle on the gardens and farms, positioned so that you can spend a whole day without seeing another guest, and then walk five minutes to dinner and be among everyone.', 'sage'),
              __('They are the quietest stays on the property. Guests who book Aves tend to rebook Aves.', 'sage'),
            ],
            'idealFor' => __('Ideal for couples, writers and readers, solo retreats, and anyone who values being left alone.', 'sage'),
            'features' => [
              __('One bedroom, sleeps two', 'sage'),
              __('Wraparound verandah', 'sage'),
              __('Maximum seclusion, minimum distance to The Nest', 'sage'),
              __('Garden and farm outlooks', 'sage'),
            ],
            'cta' => __('View Aves', 'sage'),
          ],
          __('Woodhouse', 'sage') => [
            'category' => __('Cat 3', 'sage'),
            'meta' => __('One stay - Two bedrooms - Sleeps 4', 'sage'),
            'headline' => __('Machan-inspired, timber-warm, and the most atmospheric address on the estate.', 'sage'),
            'description' => [
              __('Woodhouse is built in the spirit of a machan - raised, timber-framed, and open to the air on the side that faces the lawns and the lake. The shared verandah runs the length of it, and it is the single best place on the estate to sit through a monsoon afternoon and do absolutely nothing.', 'sage'),
              __('Two bedrooms sit either side of a shared living heart, which makes it work equally for two couples travelling together or a family of four who want to be near each other without being on top of each other.', 'sage'),
            ],
            'idealFor' => __('Ideal for two couples, small families, and guests who want warmth and texture over polish.', 'sage'),
            'features' => [
              __('Two bedrooms, sleeps four', 'sage'),
              __('Long shared verandah facing the lawns and lake', 'sage'),
              __('Timber-led, machan-inspired architecture', 'sage'),
              __('Especially good in the monsoon', 'sage'),
            ],
            'cta' => __('View Woodhouse', 'sage'),
          ],
          __('Perch I', 'sage') => [
            'category' => __('Cat 3', 'sage'),
            'meta' => __('Two residences - Four bedrooms each - Sleeps 8', 'sage'),
            'headline' => __('The estate\'s largest stays, and its longest views.', 'sage'),
            'description' => [
              __('Perch I is one of Satori\'s four-bedroom residences, set high with commanding views over Mulshi Lake and the ranges beyond. Generous shared living areas, wide outdoor terraces and four private bedrooms make it the natural choice when a group wants to stay together as one household rather than scatter across the estate.', 'sage'),
            ],
            'idealFor' => __('Ideal for families, groups of friends, milestone celebrations, and small offsites.', 'sage'),
            'features' => [
              __('Four bedrooms, sleeps up to eight', 'sage'),
              __('Wide terraces with uninterrupted lake and hill views', 'sage'),
              __('Generous shared living and dining areas', 'sage'),
              __('Can be booked with Perch II for larger parties', 'sage'),
            ],
            'cta' => __('View Perch', 'sage'),
          ],
          __('Perch II', 'sage') => [
            'category' => __('Cat 3', 'sage'),
            'meta' => __('Two residences - Three bedrooms each - Sleeps 6-7', 'sage'),
            'headline' => __('The estate\'s largest stays, and its longest views.', 'sage'),
            'description' => [
              __('Perch II is one of Satori\'s three-bedroom residences, set high with commanding views over Mulshi Lake and the ranges beyond. Generous shared living areas, wide outdoor terraces and three private bedrooms make it the natural choice when a group wants to stay together as one household rather than scatter across the estate.', 'sage'),
              __('Perch II sleeps six guests and can be booked alongside Perch I when a larger group wants the same long views and shared sense of place.', 'sage'),
            ],
            'idealFor' => __('Ideal for families, groups of friends, milestone celebrations, and small offsites.', 'sage'),
            'features' => [
              __('Three bedrooms, sleeps six', 'sage'),
              __('Wide terraces with uninterrupted lake and hill views', 'sage'),
              __('Generous shared living and dining areas', 'sage'),
              __('Can be booked with Perch I for larger parties', 'sage'),
            ],
            'cta' => __('View Perch', 'sage'),
          ],
          __('Hornbill', 'sage') => [
            'category' => __('Cat 4', 'sage'),
            'meta' => __('One villa - Two bedrooms - Sleeps 4', 'sage'),
            'headline' => __('The signature villa. The best seat on the estate.', 'sage'),
            'description' => [
              __('Hornbill is Satori at its most complete. Two bedrooms, indoor and outdoor living, its own outdoor bar, and a position on the estate that gives it the lake in full and near-total privacy. It is the only place here where the water is present from the moment you wake to the moment the light goes.', 'sage'),
              __('It is priced as the estate\'s premier address because that is what it is. Guests take Hornbill when the stay itself is the occasion - an anniversary, a first trip after a long year, or simply the decision to do the thing properly.', 'sage'),
            ],
            'idealFor' => __('Ideal for couples marking something, two couples travelling well, and guests for whom the view is the point.', 'sage'),
            'features' => [
              __('Two bedrooms, sleeps four', 'sage'),
              __('Private outdoor bar and generous outdoor living', 'sage'),
              __('The estate\'s most direct and uninterrupted lake frontage', 'sage'),
              __('Highest specification on the property', 'sage'),
            ],
            'cta' => __('View Hornbill', 'sage'),
          ],
        ];
      @endphp

      <div class="mx-auto w-full max-w-7xl space-y-14 px-5 sm:px-8">
        @foreach ($stays as $stay)
          @php
            $chapter = $chapters[$stay['name']];
            $isFlipped = $loop->index % 2 === 1;
            $idealFor = $chapter['idealFor'] ?? '';
            $idealNeedle = __('Ideal for', 'sage');
            $idealForBody = str_starts_with($idealFor, $idealNeedle)
              ? trim(substr($idealFor, strlen($idealNeedle)))
              : '';

            $galleryList = [];
            if (!empty($stay['gallery'])) {
              $galleryList = is_array($stay['gallery']) ? $stay['gallery'] : [$stay['gallery']];
            } elseif (!empty($stay['image'])) {
              $galleryList = is_array($stay['image']) ? $stay['image'] : [$stay['image']];
            }
          @endphp

          <article
            class="group grid snap-start scroll-mt-16 items-stretch border-t border-brand-ink/10 lg:min-h-[calc(100svh-7.5rem)] lg:grid-cols-[repeat(20,minmax(0,1fr))] {{ $loop->last ? 'border-b' : '' }}">
            <div
              class="relative w-full aspect-[4/3] sm:aspect-[16/10] overflow-hidden bg-brand-primary lg:col-span-9 lg:aspect-auto {{ $isFlipped ? 'lg:order-last' : '' }}"
              data-reveal>
              @if (count($galleryList) > 1)
                <div class="swiper h-full w-full" data-stay-gallery-swiper>
                  <div class="swiper-wrapper">
                    @foreach ($galleryList as $slide)
                      @php $slide = is_string($slide) ? ['src' => $slide, 'position' => $stay['position']] : $slide; @endphp
                      <div class="swiper-slide h-full w-full">
                        <img class="h-full w-full object-cover {{ $slide['position'] ?? $stay['position'] }}"
                          src="{{ $slide['src'] ?? $slide }}" alt="{{ $stay['name'] }}">
                      </div>
                    @endforeach
                  </div>

                  <div class="swiper-pagination !bottom-4" data-stay-gallery-pagination></div>

                  <div class="absolute bottom-4 right-4 z-10 flex items-center gap-2">
                    <button
                      class="flex h-9 w-9 cursor-pointer items-center justify-center rounded-full border border-brand-sand/60 text-brand-sand transition-colors duration-300 hover:border-brand-sand hover:bg-brand-sand hover:text-brand-primary"
                      type="button" data-stay-gallery-prev aria-label="{{ __('Previous image', 'sage') }}">
                      <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M15 18l-6-6 6-6"></path>
                      </svg>
                    </button>

                    <button
                      class="flex h-9 w-9 cursor-pointer items-center justify-center rounded-full border border-brand-sand/60 text-brand-sand transition-colors duration-300 hover:border-brand-sand hover:bg-brand-sand hover:text-brand-primary"
                      type="button" data-stay-gallery-next aria-label="{{ __('Next image', 'sage') }}">
                      <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M9 6l6 6-6 6"></path>
                      </svg>
                    </button>
                  </div>
                </div>
              @else
                @php
                  $single = $galleryList[0] ?? $stay['image'];
                  $src = is_array($single) ? ($single['src'] ?? '') : $single;
                  $pos = is_array($single) ? ($single['position'] ?? $stay['position']) : $stay['position'];
                @endphp
                <img class="absolute inset-0 h-full w-full object-cover {{ $pos }}" src="{{ $src }}" alt="{{ $stay['name'] }}">
              @endif
            </div>

            <div
              class="flex flex-col justify-center bg-brand-sand px-6 py-6 sm:px-8 lg:col-span-11 lg:px-12 lg:py-4 {{ $isFlipped ? 'lg:order-first lg:border-r' : 'lg:border-l' }} lg:border-brand-ink/10"
              data-reveal>
              <p class="text-[0.65rem] uppercase leading-5 tracking-[0.18em] text-brand-muted">
                {{ $chapter['meta'] ?? (sprintf(_n('%d Bedroom', '%d Bedrooms', $stay['bedrooms'], 'sage'), $stay['bedrooms']) . ' · ' . sprintf(__('Sleeps %d', 'sage'), $stay['sleeps'])) }}
              </p>

              <h3 class="mt-2 font-heading text-2xl font-light leading-tight text-brand-ink lg:text-3xl">
                {{ $stay['name'] }}
              </h3>

              <p class="mt-1 font-heading text-lg font-light leading-snug text-brand-ink lg:text-xl">
                {{ $chapter['headline'] }}
              </p>



              @if (!empty($chapter['description']))
                <div data-read-more>
                  <div class="line-clamp-3" data-read-more-clamp>
                    @foreach ($chapter['description'] as $paragraph)
                      <p
                        class="{{ $loop->first ? 'mt-3' : 'mt-2' }} text-sm leading-6 text-brand-muted sm:text-[16px] lg:text-sm lg:leading-5">
                        {{ $paragraph }}
                      </p>
                    @endforeach
                  </div>

                  <button
                    class="mt-2 cursor-pointer text-sm text-brand-muted underline underline-offset-4 transition-colors duration-300 hover:text-brand-ink"
                    type="button" data-read-more-toggle data-open-label="{{ __('Read more', 'sage') }}"
                    data-close-label="{{ __('Read less', 'sage') }}" aria-expanded="false">
                    <span data-read-more-label>{{ __('Read more', 'sage') }}</span>
                  </button>
                </div>
              @else
                <p class="mt-3 text-sm leading-6 text-brand-muted sm:text-[16px] lg:text-sm lg:leading-5">
                  {{ $stay['description'] }}
                </p>
              @endif

              <div class="mt-3 grid grid-cols-3 divide-x divide-brand-ink/10 border-y border-brand-ink/10 py-2.5 text-center">
                <div class="px-3">
                  <p class="text-[0.65rem] uppercase tracking-[0.18em] text-brand-muted">{{ __('Bedrooms', 'sage') }}</p>
                  <p class="mt-1 font-heading text-xl font-light text-brand-ink lg:text-2xl">{{ $stay['bedrooms'] }}</p>
                </div>

                <div class="px-3">
                  <p class="text-[0.65rem] uppercase tracking-[0.18em] text-brand-muted">{{ __('Sleeps', 'sage') }}</p>
                  <p class="mt-1 font-heading text-xl font-light text-brand-ink lg:text-2xl">{{ $stay['sleeps'] }}</p>
                </div>

                <div class="px-3">
                  <p class="text-[0.65rem] uppercase tracking-[0.18em] text-brand-muted">{{ __('Setting', 'sage') }}</p>
                  <p class="mt-1 text-sm leading-5 text-brand-ink">{{ $stay['setting'] }}</p>
                </div>
              </div>

              <p class="mt-2.5 text-sm leading-5 text-brand-muted">
                <span class="text-[0.65rem] uppercase tracking-[0.2em] text-brand-gold">{{ __('Ideal for', 'sage') }}</span>
                <span>{{ $idealForBody ? ' ' . $idealForBody : ' ' . $idealFor }}</span>
              </p>

              <ul
                class="mt-3 grid gap-x-6 gap-y-1.5 border-t border-brand-ink/10 pt-3 sm:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2">
                @foreach ($chapter['features'] as $feature)
                  <li class="flex items-start gap-3 text-sm leading-5 text-brand-ink">
                    <span class="mt-2 inline-block h-1.5 w-1.5 shrink-0 rounded-[1px] bg-brand-gold" aria-hidden="true"></span>
                    <span>{{ $feature }}</span>
                  </li>
                @endforeach
              </ul>

              <a class="mt-8 inline-flex items-center justify-center gap-2 self-start rounded-full border border-brand-ink/25 px-4 py-1.5 text-[0.75rem] uppercase text-brand-ink transition-colors duration-300 hover:border-brand-gold hover:text-brand-gold"
                href="https://www.secure-booking-engine.com/accounts/HXm66tqenYOx-VZR46IBBQ/properties/P9JyVOBiPOXdUDFklZVpVA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/cart/MdEkwhqgGd7N5zhKcIJ7Qw/#!/rooms"
                target="_blank" rel="noopener noreferrer">
                {{ __('Check Availability', 'sage') }}
                <span class="inline-block transition-transform duration-300 group-hover:translate-x-1.5"
                  aria-hidden="true">&rarr;</span>
              </a>
            </div>
          </article>
        @endforeach
      </div>
    </section>

    <section id="estate" class="mt-14 bg-brand-primary text-brand-sand">
      <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
        <div class="flex flex-col items-center py-24 text-center" data-reveal>
          <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
            {{ $estate['eyebrow'] }}
          </p>

          <h2 class="mt-4 max-w-2xl font-heading text-4xl font-light leading-tight text-brand-sand">
            {{ $estate['heading'] }}
          </h2>

          <p class="mt-6 max-w-2xl text-base leading-8 text-brand-sand/85 sm:text-[16px]">
            {{ $estate['description'] }}
          </p>

          <div
            class="mt-10 flex flex-wrap items-center justify-center gap-x-6 gap-y-3 border-t border-brand-sand/15 pt-8 text-[0.7rem] uppercase tracking-[0.25em] text-brand-sand/85">
            <span>{{ sprintf(__('%d Homes', 'sage'), $estate['homes']) }}</span>
            <span aria-hidden="true">·</span>
            <span>{{ sprintf(__('%d Bedrooms', 'sage'), $estate['bedrooms']) }}</span>
            <span aria-hidden="true">·</span>
            <span>{{ sprintf(__('Sleeps %d', 'sage'), $estate['sleeps']) }}</span>
          </div>

          <div class="mt-9 flex flex-wrap items-center justify-center gap-6">
            <a class="inline-flex items-center gap-2 rounded-full border border-brand-gold px-6 py-3 text-[0.8125rem] uppercase tracking-[0.2em] text-brand-gold transition-colors duration-300 hover:bg-brand-gold hover:text-brand-primary"
              href="{{ home_url('/contact-us/#enquire-form') }}">
              {{ $estate['cta'] }}
              <span aria-hidden="true">→</span>
            </a>

            <p class="text-[0.75rem] uppercase tracking-[0.2em] text-brand-sand/70">
              {{ __('On enquiry', 'sage') }}
            </p>
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
            {{ __('Find the stay that fits.', 'sage') }}
          </h2>
        </div>

        <div class="hidden lg:block" data-reveal>
          <div
            class="grid grid-cols-12 gap-4 border-b border-brand-ink/15 pb-5 text-[0.7rem] uppercase tracking-[0.25em] text-brand-muted">
            <p class="col-span-1">{{ __('Cat', 'sage') }}</p>
            <p class="col-span-3">{{ __('Display name', 'sage') }}</p>
            <p class="col-span-3">{{ __('Internal / OTA name', 'sage') }}</p>
            <p class="col-span-1 text-center">{{ __('Units', 'sage') }}</p>
            <p class="col-span-1 text-center">{{ __('Bedrooms', 'sage') }}</p>
            <p class="col-span-1 text-center">{{ __('Sleeps', 'sage') }}</p>
            <p class="col-span-2">{{ __('Setting', 'sage') }}</p>
          </div>

          @foreach ($stays as $stay)
            <div
              class="grid grid-cols-12 items-center gap-4 border-b border-brand-ink/15 py-5 transition-colors duration-300 hover:bg-brand-sand/50">
              <p class="col-span-1 font-heading text-lg font-light text-brand-gold">{{ $stay['category'] }}</p>

              <h3 class="col-span-3 font-heading text-xl font-light text-brand-ink">
                {{ $stay['name'] }}
              </h3>

              <p class="col-span-3 text-sm text-brand-muted">{{ $stay['ota_name'] }}</p>
              <p class="col-span-1 text-center text-sm text-brand-muted">{{ $stay['units'] }}</p>
              <p class="col-span-1 text-center text-sm text-brand-muted">{{ $stay['bedrooms'] }}</p>
              <p class="col-span-1 text-center text-sm text-brand-muted">{{ $stay['sleeps'] }}</p>
              <p class="col-span-2 text-sm text-brand-muted">{{ $stay['setting'] }}</p>
            </div>
          @endforeach

          <div class="grid grid-cols-12 items-center gap-4 border-b border-brand-gold bg-brand-sand/40 py-5">
            <p class="col-span-1 font-heading text-lg font-light text-brand-gold">{{ $estate['category'] }}</p>

            <h3 class="col-span-3 font-heading text-xl font-light text-brand-ink">
              {{ $estate['name'] }}
            </h3>

            <p class="col-span-3 text-sm text-brand-muted">{{ $estate['ota_name'] }}</p>
            <p class="col-span-1 text-center text-sm text-brand-muted">{{ $estate['units'] }}</p>
            <p class="col-span-1 text-center text-sm text-brand-muted">{{ $estate['bedrooms'] }}</p>
            <p class="col-span-1 text-center text-sm text-brand-muted">{{ $estate['sleeps'] }}</p>
            <p class="col-span-2 text-sm text-brand-muted">{{ $estate['setting'] }}</p>
          </div>
        </div>

        <div class="space-y-6 lg:hidden">
          @foreach ($stays as $stay)
            <article class="border border-brand-ink/15 p-6 sm:p-8" data-reveal>
              <div class="flex items-start justify-between gap-6">
                <div>
                  <p class="text-[0.7rem] uppercase tracking-[0.25em] text-brand-gold">
                    {{ __('Category', 'sage') }} {{ $stay['category'] }} · {{ $stay['setting'] }}
                  </p>

                  <h3 class="mt-2 font-heading text-2xl font-light text-brand-ink">
                    {{ $stay['name'] }}
                  </h3>

                  <p class="mt-1 text-xs uppercase tracking-wider text-brand-muted">
                    {{ __('OTA Name:', 'sage') }} {{ $stay['ota_name'] }}
                  </p>
                </div>

                <a class="inline-flex items-center gap-2 text-[0.7rem] uppercase tracking-[0.25em] text-brand-gold transition-colors duration-300 hover:text-brand-ink"
                  href="#book">
                  {{ __('Discover', 'sage') }}
                  <span aria-hidden="true">→</span>
                </a>
              </div>

              <div class="mt-6 grid grid-cols-3 gap-x-4 gap-y-4 border-t border-brand-ink/15 pt-6">
                <div>
                  <p class="text-[0.65rem] uppercase tracking-[0.2em] text-brand-muted">{{ __('Units', 'sage') }}</p>
                  <p class="mt-1.5 text-sm text-brand-ink">{{ $stay['units'] }}</p>
                </div>

                <div>
                  <p class="text-[0.65rem] uppercase tracking-[0.2em] text-brand-muted">{{ __('Bedrooms', 'sage') }}</p>
                  <p class="mt-1.5 text-sm text-brand-ink">{{ $stay['bedrooms'] }}</p>
                </div>

                <div>
                  <p class="text-[0.65rem] uppercase tracking-[0.2em] text-brand-muted">{{ __('Sleeps', 'sage') }}</p>
                  <p class="mt-1.5 text-sm text-brand-ink">{{ $stay['sleeps'] }}</p>
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

            <p class="mt-1 text-xs uppercase tracking-wider text-brand-sand/70">
              {{ __('OTA Name:', 'sage') }} {{ $estate['ota_name'] }}
            </p>

            <div class="mt-6 grid grid-cols-3 gap-x-4 gap-y-4 border-t border-brand-sand/15 pt-6">
              <div>
                <p class="text-[0.65rem] uppercase tracking-[0.2em] text-brand-sand/60">{{ __('Units', 'sage') }}</p>
                <p class="mt-1.5 text-sm text-brand-sand">{{ $estate['units'] }}</p>
              </div>

              <div>
                <p class="text-[0.65rem] uppercase tracking-[0.2em] text-brand-sand/60">{{ __('Bedrooms', 'sage') }}</p>
                <p class="mt-1.5 text-sm text-brand-sand">{{ $estate['bedrooms'] }}</p>
              </div>

              <div>
                <p class="text-[0.65rem] uppercase tracking-[0.2em] text-brand-sand/60">{{ __('Sleeps', 'sage') }}</p>
                <p class="mt-1.5 text-sm text-brand-sand">{{ $estate['sleeps'] }}</p>
              </div>
            </div>

            <a class="mt-8 inline-flex items-center gap-2 rounded-full border border-brand-gold px-6 py-3 text-[0.8125rem] uppercase tracking-[0.2em] text-brand-gold transition-colors duration-300 hover:bg-brand-gold hover:text-brand-primary"
              href="#book">
              {{ $estate['cta'] }}
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
          {{ __('The right stay is here.', 'sage') }}
        </h2>

        <p class="mx-auto mt-6 max-w-xl text-base leading-8 text-brand-sand/85" data-reveal>
          {{ __('Tell us who is coming and when, and we will help you find the right fit.', 'sage') }}
        </p>

        <a class="mt-10 inline-flex items-center justify-center rounded-full bg-brand-sand px-6 py-3 text-[0.8125rem] uppercase tracking-[0.2em] text-brand-primary transition-colors duration-300 hover:bg-brand-gold hover:text-brand-primary"
          href="https://www.secure-booking-engine.com/accounts/HXm66tqenYOx-VZR46IBBQ/properties/P9JyVOBiPOXdUDFklZVpVA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/cart/MdEkwhqgGd7N5zhKcIJ7Qw/#!/rooms"
          target="_blank" rel="noopener noreferrer" data-reveal>
          {{ __('Book Your Stay', 'sage') }}
        </a>
      </div>
    </section>

  @endwhile
@endsection