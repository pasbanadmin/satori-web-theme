{{--
  Template Name: Stays
--}}

@extends('layouts.app')

@section('content')
  @php
    $heroImage = '/wp-content/uploads/2026/08/36_202309051441007901-bcf6382f-142f-4570-85ee-9cdb14a05cc3-scaled.webp';
      $heroAlt = __('Private homes above Mulshi Lake at Satori', 'sage');
      $estateImage = '/wp-content/uploads/2026/08/SATORI-round-2-04-scaled.webp';

      $stayImageA = '/wp-content/uploads/2026/08/36_202309051441007901-bcf6382f-142f-4570-85ee-9cdb14a05cc3-scaled.webp';
      $stayImageB = '/wp-content/uploads/2026/08/SATORI-round-2-04-scaled.webp';

      $gallerySlide = function ($src, $position = 'object-center') {
          return ['src' => $src, 'position' => $position];
      };

      $stays = [
        [
          'name' => __('Orchard Cottages', 'sage'),
          'slug' => 'orchard-cottages',
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
          'gallery' => [
            $gallerySlide($stayImageA, 'object-center'),
            $gallerySlide($stayImageB, 'object-top'),
            $gallerySlide($stayImageA, 'object-bottom'),
            $gallerySlide($stayImageB, 'object-center'),
            $gallerySlide($stayImageA, 'object-top'),
          ],
        ],
        [
          'name' => __('Canopy Suites', 'sage'),
          'slug' => 'canopy-suites',
          'description' => __('An elevated hideaway above the fruit garden, with the lake beyond.', 'sage'),
          'bedrooms' => 1,
          'sleeps' => 2,
          'setting' => __('Above the Orchard', 'sage'),
          'price' => 38000,
          'image' => '/wp-content/uploads/2026/08/SATORI-round-2-04-scaled.webp',
          'position' => 'object-top',
          'span' => 'lg:col-span-5',
          'offset' => 'lg:mt-24',
          'ratio' => 'aspect-[4/5]',
          'gallery' => [
            $gallerySlide($stayImageB, 'object-top'),
            $gallerySlide($stayImageA, 'object-center'),
            $gallerySlide($stayImageB, 'object-bottom'),
            $gallerySlide($stayImageA, 'object-top'),
            $gallerySlide($stayImageB, 'object-center'),
          ],
        ],
        [
          'name' => __('Aves', 'sage'),
          'slug' => 'aves',
          'description' => __('Three cottages, named for birds, hidden in plain sight.', 'sage'),
          'bedrooms' => 1,
          'sleeps' => 2,
          'setting' => __('Garden and Farm Outlooks', 'sage'),
          'price' => 35000,
          'image' => '/wp-content/uploads/2026/08/36_202309051441007901-bcf6382f-142f-4570-85ee-9cdb14a05cc3-scaled.webp',
          'position' => 'object-bottom',
          'span' => 'lg:col-span-5',
          'offset' => '',
          'ratio' => 'aspect-[4/5]',
          'gallery' => [
            $gallerySlide($stayImageA, 'object-bottom'),
            $gallerySlide($stayImageB, 'object-center'),
            $gallerySlide($stayImageA, 'object-top'),
            $gallerySlide($stayImageB, 'object-top'),
            $gallerySlide($stayImageA, 'object-center'),
          ],
        ],
        [
          'name' => __('Woodhouse', 'sage'),
          'slug' => 'woodhouse',
          'description' => __('Machan-inspired, timber-warm, and the most atmospheric address on the estate.', 'sage'),
          'bedrooms' => 2,
          'sleeps' => 4,
          'setting' => __('The Woods', 'sage'),
          'price' => 46000,
          'image' => '/wp-content/uploads/2026/08/SATORI-round-2-04-scaled.webp',
          'position' => 'object-center',
          'span' => 'lg:col-span-7',
          'offset' => 'lg:mt-24',
          'ratio' => 'aspect-[4/5] lg:aspect-[7/8]',
          'gallery' => [
            $gallerySlide($stayImageB, 'object-center'),
            $gallerySlide($stayImageA, 'object-center'),
            $gallerySlide($stayImageB, 'object-top'),
            $gallerySlide($stayImageA, 'object-bottom'),
            $gallerySlide($stayImageB, 'object-center'),
          ],
        ],
        [
          'name' => __('Perch I', 'sage'),
          'slug' => 'perch-i',
          'description' => __('One of the estate\'s largest homes, with long views over Mulshi Lake.', 'sage'),
          'bedrooms' => 3,
          'sleeps' => 7,
          'setting' => __('Lake and Hill Views', 'sage'),
          'price' => 40000,
          'image' => '/wp-content/uploads/2026/08/36_202309051441007901-bcf6382f-142f-4570-85ee-9cdb14a05cc3-scaled.webp',
          'position' => 'object-top',
          'span' => 'lg:col-span-5',
          'offset' => '',
          'ratio' => 'aspect-[4/5]',
          'gallery' => [
            $gallerySlide($stayImageA, 'object-top'),
            $gallerySlide($stayImageB, 'object-center'),
            $gallerySlide($stayImageA, 'object-center'),
            $gallerySlide($stayImageB, 'object-top'),
            $gallerySlide($stayImageA, 'object-bottom'),
          ],
        ],
        [
          'name' => __('Perch II', 'sage'),
          'slug' => 'perch-ii',
          'description' => __('One of the estate\'s largest homes, with long views over Mulshi Lake.', 'sage'),
          'bedrooms' => 3,
          'sleeps' => 6,
          'setting' => __('Lake and Hill Views', 'sage'),
          'price' => 45000,
          'image' => '/wp-content/uploads/2026/08/SATORI-round-2-04-scaled.webp',
          'position' => 'object-bottom',
          'span' => 'lg:col-span-7',
          'offset' => 'lg:mt-24',
          'ratio' => 'aspect-[4/5] lg:aspect-[7/8]',
          'gallery' => [
            $gallerySlide($stayImageB, 'object-bottom'),
            $gallerySlide($stayImageA, 'object-center'),
            $gallerySlide($stayImageB, 'object-center'),
            $gallerySlide($stayImageA, 'object-bottom'),
            $gallerySlide($stayImageB, 'object-top'),
          ],
        ],
        [
          'name' => __('Hornbill', 'sage'),
          'slug' => 'hornbill',
          'description' => __('The signature villa. The best seat on the estate.', 'sage'),
          'bedrooms' => 2,
          'sleeps' => 4,
          'setting' => __('The Lakeside', 'sage'),
          'price' => 52000,
          'image' => '/wp-content/uploads/2026/08/36_202309051441007901-bcf6382f-142f-4570-85ee-9cdb14a05cc3-scaled.webp',
          'position' => 'object-center',
          'span' => 'lg:col-span-12',
          'offset' => '',
          'ratio' => 'aspect-[4/3] lg:aspect-[21/10]',
          'gallery' => [
            $gallerySlide($stayImageA, 'object-center'),
            $gallerySlide($stayImageB, 'object-top'),
            $gallerySlide($stayImageA, 'object-bottom'),
            $gallerySlide($stayImageB, 'object-center'),
            $gallerySlide($stayImageA, 'object-top'),
          ],
        ],
      ];

      $estate = [
        'name' => __('The Satori Estate', 'sage'),
        'eyebrow' => __('Full Buyout', 'sage'),
        'heading' => __('The whole place. No other names in the register.', 'sage'),
        'description' => __('Satori can be taken in its entirety - all fourteen homes, twenty bedrooms and every shared space, for up to forty guests. The Nest becomes your dining room, the lawns become your venue, the kitchen cooks to your menu, and the gates close behind your group.', 'sage'),
        'homes' => 14,
        'bedrooms' => 20,
        'sleeps' => 40,
        'setting' => __('Fourteen Homes', 'sage'),
        'image' => $estateImage,
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

    <section class="bg-[#f7f3eb] py-14">
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

    <section id="stay" class="bg-[#f7f3eb] snap-y scroll-mt-16">
      <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
        <div class="flex min-h-[45vh] snap-start scroll-mt-16 flex-col justify-center text-left" data-reveal>
          <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
            {{ __('Choose Your Home', 'sage') }}
          </p>

          <h2 class="mt-4 max-w-3xl font-heading text-4xl font-light leading-tight text-brand-ink">
            {{ __('Seven ways to stay.', 'sage') }}
          </h2>
        </div>
      </div>

      @php
          $chapters = [
            __('Orchard Cottages', 'sage') => [
              'category' => __('Cat 1', 'sage'),
              'meta' => __('Three cottages · One bedroom each · Sleeps 2', 'sage'),
              'headline' => __('Wake up inside the garden that feeds the estate.', 'sage'),
              'description' => [
                __('The Orchard Cottages sit low among Satori’s fruit trees and vegetable beds, on the farmland side of the estate where the mornings smell of wet earth and citrus leaf. Three private cottages, each with its own verandah opening directly onto the growing beds — close enough that the herbs on your breakfast plate were cut a few steps from where you slept.', 'sage'),
                __('They are the most intimate homes at Satori, and deliberately so. What they trade in scale they return in immediacy: birdsong at close range, the gardeners moving through the rows at first light, fruit ripening within reach of the verandah rail. For couples and solo travellers who want the estate at its most unguarded, this is the truest way in.', 'sage'),
              ],
              'idealFor' => __('Ideal for couples, solo travellers, and guests arriving at Satori for the first time.', 'sage'),
              'features' => [
                __('One bedroom, sleeps two', 'sage'),
                __('Private garden verandah', 'sage'),
                __('Opens onto the working orchard and vegetable beds', 'sage'),
                __('Full access to the pool, The Nest, spa and all estate experiences', 'sage'),
              ],
            ],
            __('Canopy Suites', 'sage') => [
              'category' => __('Cat 2', 'sage'),
              'meta' => __('Four suites - One bedroom each - Sleeps 2', 'sage'),
              'headline' => __('An elevated hideaway above the fruit garden, with the lake beyond.', 'sage'),
              'description' => [
                __('The Canopy Suites are raised above the same orchard the cottages sit within - high enough that you look out across the tops of the fruit trees to Mulshi Lake and the hills behind it. The garden is still directly below you; the view is simply longer.', 'sage'),
                __('Inside, the suites are more generous and more finished: a larger bed, a deeper verandah, a bathroom that invites you to linger. They are made for guests who want the seclusion of a private home with the outlook of a lakeside one - morning light coming in over the canopy, evenings spent watching the water change colour without leaving your own verandah.', 'sage'),
              ],
              'idealFor' => __('Ideal for couples, honeymooners, and longer stays where the room itself becomes part of the retreat.', 'sage'),
              'features' => [
                __('One bedroom, sleeps two', 'sage'),
                __('Elevated position with lake and hill views', 'sage'),
                __('Deep private verandah above the orchard', 'sage'),
                __('Enhanced bathroom and in-room comforts', 'sage'),
              ],
              'cta' => __('View Canopy Suites', 'sage'),
            ],
            __('Aves', 'sage') => [
              'category' => __('Cat 2', 'sage'),
              'meta' => __('Three cottages - Falcon, Macaw, Toucan - One bedroom each - Sleeps 2', 'sage'),
              'headline' => __('Three cottages, named for birds, hidden in plain sight.', 'sage'),
              'description' => [
                __('Aves brings together Falcon, Macaw and Toucan - three single-bedroom cottages tucked into their own pockets of the estate. Each has a wraparound verandah and its own angle on the gardens and farms, positioned so that you can spend a whole day without seeing another guest, and then walk five minutes to dinner and be among everyone.', 'sage'),
                __('They are the quietest homes on the property. Guests who book Aves tend to rebook Aves.', 'sage'),
              ],
              'idealFor' => __('Ideal for couples, writers and readers, solo retreats, and anyone whose idea of luxury is being left alone.', 'sage'),
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
              'meta' => __('One home - Two bedrooms - Sleeps 4', 'sage'),
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
              'meta' => __('Two residences - Three bedrooms each - Sleeps 6-7', 'sage'),
              'headline' => __('The estate\'s largest homes, and its longest views.', 'sage'),
              'description' => [
                __('Perch I is one of Satori\'s three-bedroom residences, set high with commanding views over Mulshi Lake and the ranges beyond. Generous shared living areas, wide outdoor terraces and three private bedrooms make it the natural choice when a group wants to stay together as one household rather than scatter across the estate.', 'sage'),
                __('Perch I carries an additional bed, taking it to seven guests - useful for families travelling with children or a group that refuses to split.', 'sage'),
              ],
              'idealFor' => __('Ideal for families, groups of friends, milestone celebrations, and small offsites.', 'sage'),
              'features' => [
                __('Three bedrooms, sleeps up to seven', 'sage'),
                __('Wide terraces with uninterrupted lake and hill views', 'sage'),
                __('Generous shared living and dining areas', 'sage'),
                __('Can be booked with Perch II for larger parties', 'sage'),
              ],
              'cta' => __('View Perch', 'sage'),
            ],
            __('Perch II', 'sage') => [
              'category' => __('Cat 3', 'sage'),
              'meta' => __('Two residences - Three bedrooms each - Sleeps 6-7', 'sage'),
              'headline' => __('The estate\'s largest homes, and its longest views.', 'sage'),
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
                __('Hornbill is Satori at its most complete. Two bedrooms, indoor and outdoor living, its own outdoor bar, and a position on the estate that gives it the lake in full and near-total privacy. It is the only home here where the water is present from the moment you wake to the moment the light goes.', 'sage'),
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

        <div class="mx-auto max-w-[1152px] space-y-14 px-5 sm:px-8 lg:px-16">
          @foreach ($stays as $stay)
            @php
              $chapter = $chapters[$stay['name']];
              $isFlipped = $loop->index % 2 === 1;
              $idealFor = $chapter['idealFor'] ?? '';
              $idealNeedle = __('Ideal for', 'sage');
              $idealForBody = str_starts_with($idealFor, $idealNeedle)
                  ? trim(substr($idealFor, strlen($idealNeedle)))
                  : '';
            @endphp

            <article class="group grid min-h-[calc(100svh-7.5rem)] snap-start scroll-mt-16 items-stretch border-t border-brand-ink/10 lg:grid-cols-[repeat(20,minmax(0,1fr))] {{ $loop->last ? 'border-b' : '' }}">
              <div class="relative aspect-[4/3] overflow-hidden bg-brand-primary lg:col-span-9 lg:aspect-auto {{ $isFlipped ? 'lg:order-last' : '' }}" data-reveal>
                <div class="swiper h-full w-full" data-stay-gallery-swiper>
                  <div class="swiper-wrapper">
                    @foreach ($stay['gallery'] as $slide)
                      <div class="swiper-slide">
                        <img class="h-full w-full object-cover {{ $slide['position'] }}" src="{{ $slide['src'] }}" alt="{{ $stay['name'] }}">
                      </div>
                    @endforeach
                  </div>

                  <div class="swiper-pagination" data-stay-gallery-pagination></div>

                  <div class="absolute bottom-4 right-4 z-10 flex items-center gap-2">
                    <button class="flex h-9 w-9 items-center justify-center rounded-full border border-brand-sand/60 text-brand-sand transition-colors duration-300 hover:border-brand-sand hover:bg-brand-sand hover:text-brand-primary" type="button" data-stay-gallery-prev aria-label="{{ __('Previous image', 'sage') }}">
                      <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M15 18l-6-6 6-6"></path></svg>
                    </button>

                    <button class="flex h-9 w-9 items-center justify-center rounded-full border border-brand-sand/60 text-brand-sand transition-colors duration-300 hover:border-brand-sand hover:bg-brand-sand hover:text-brand-primary" type="button" data-stay-gallery-next aria-label="{{ __('Next image', 'sage') }}">
                      <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 6l6 6-6 6"></path></svg>
                    </button>
                  </div>
                </div>
              </div>

              <div class="flex flex-col justify-center bg-brand-sand px-6 py-6 sm:px-8 lg:col-span-11 lg:px-12 lg:py-4 {{ $isFlipped ? 'lg:order-first lg:border-r' : 'lg:border-l' }} lg:border-brand-ink/10" data-reveal>
                <div class="flex items-start justify-between gap-6">
                  <div class="flex items-baseline gap-3">
                    <span class="font-heading text-xl font-light leading-none text-brand-gold/80">
                      {{ sprintf('%02d', $loop->iteration) }}
                    </span>

                    <span class="hidden h-px w-8 bg-brand-gold/50 sm:block" aria-hidden="true"></span>

                    <p class="text-[0.7rem] uppercase tracking-[0.25em] text-brand-gold">
                      {{ $chapter['category'] }}
                    </p>
                  </div>

                  <p class="text-right text-[0.65rem] uppercase leading-5 tracking-[0.18em] text-brand-muted">
                    {{ $chapter['meta'] ?? (sprintf(_n('%d Bedroom', '%d Bedrooms', $stay['bedrooms'], 'sage'), $stay['bedrooms']) . ' - ' . sprintf(__('Sleeps %d', 'sage'), $stay['sleeps'])) }}
                  </p>
                </div>

                <h3 class="mt-2 font-heading text-2xl font-light leading-tight text-brand-ink lg:text-3xl">
                  {{ $stay['name'] }}
                </h3>

                <p class="mt-1 font-heading text-lg font-light leading-snug text-brand-ink lg:text-xl">
                  {{ $chapter['headline'] }}
                </p>

                <div class="mt-3 h-px w-16 bg-brand-gold" aria-hidden="true"></div>

                @if (!empty($chapter['description']))
                  <div data-read-more>
                    <div class="line-clamp-3" data-read-more-clamp>
                      @foreach ($chapter['description'] as $paragraph)
                        <p class="{{ $loop->first ? 'mt-3' : 'mt-2' }} text-sm leading-6 text-brand-muted sm:text-[16px] lg:text-sm lg:leading-5">
                          {{ $paragraph }}
                        </p>
                      @endforeach
                    </div>

                    <button
                      class="mt-2 inline-flex items-center gap-1.5 text-[0.75rem] uppercase tracking-[0.25em] text-brand-gold transition-colors duration-300 hover:text-brand-ink"
                      type="button" data-read-more-toggle data-open-label="{{ __('Read More', 'sage') }}"
                      data-close-label="{{ __('Read Less', 'sage') }}" aria-expanded="false">
                      <span data-read-more-label>{{ __('Read More', 'sage') }}</span>
                      <span aria-hidden="true" data-read-more-caret>&darr;</span>
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

                <ul class="mt-3 grid gap-x-6 gap-y-1.5 border-t border-brand-ink/10 pt-3 sm:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2">
                  @foreach ($chapter['features'] as $feature)
                    <li class="flex items-start gap-3 text-sm leading-5 text-brand-ink">
                      <span class="mt-2 inline-block h-1.5 w-1.5 shrink-0 rounded-[1px] bg-brand-gold" aria-hidden="true"></span>
                      <span>{{ $feature }}</span>
                    </li>
                  @endforeach
                </ul>

                <a class="mt-3 inline-flex items-center justify-center gap-2 self-start rounded-full border border-brand-ink/25 px-4 py-1.5 text-[0.75rem] uppercase tracking-[0.25em] text-brand-ink transition-colors duration-300 hover:border-brand-gold hover:text-brand-gold" href="{{ $stayUrls[$stay['name']] }}">
                  {{ $chapter['cta'] ?? __('Enquire', 'sage') }}
                  <span class="inline-block transition-transform duration-300 group-hover:translate-x-1.5" aria-hidden="true">&rarr;</span>
                </a>
              </div>
            </article>
          @endforeach
      </div>
    </section>

    <section id="estate" class="mt-14 bg-brand-primary text-brand-sand">
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
                {{ $estate['cta'] }}
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
