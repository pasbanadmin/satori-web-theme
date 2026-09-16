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
          '/wp-content/uploads/2026/09/01-hero-dusk-on-stilts.webp',
          '/wp-content/uploads/2026/09/02-verandah-lake-ranges.webp',
          '/wp-content/uploads/2026/09/03-exterior-from-lawns.webp',
          '/wp-content/uploads/2026/09/04-living-heart.webp',
          '/wp-content/uploads/2026/09/05-principal-bedroom.webp',
          '/wp-content/uploads/2026/09/06-verandah-swing-sahyadris.webp',
          '/wp-content/uploads/2026/09/07-second-bedroom-1.webp',
          '/wp-content/uploads/2026/09/08-bathroom-timber-stone.webp',
          '/wp-content/uploads/2026/09/09-machan-undercroft.webp',
          '/wp-content/uploads/2026/09/10-verandah-dining-lake.webp',
          '/wp-content/uploads/2026/09/11-living-second.webp',
          '/wp-content/uploads/2026/09/12-exterior-blue-hour.webp'
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
          '/wp-content/uploads/2026/09/01-hero-terrace-lake.webp',
          '/wp-content/uploads/2026/09/02.webp',
          '/wp-content/uploads/2026/09/04-living-doors-to-terrace.webp',
          '/wp-content/uploads/2026/09/05-principal-bedroom-lake.webp',
          '/wp-content/uploads/2026/09/06-terrace-panorama.webp',
          '/wp-content/uploads/2026/09/07-dining-table-set.webp',
          '/wp-content/uploads/2026/09/08-second-bedroom.webp',
          '/wp-content/uploads/2026/09/09-terrace-seating.webp',
          '/wp-content/uploads/2026/09/10-third-bedroom.webp'
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
          '/wp-content/uploads/2026/09/01-hero-terrace-lake-1.webp',
          '/wp-content/uploads/2026/09/02-principal-bedroom-lake.webp',
          '/wp-content/uploads/2026/09/04-living-doors-to-terrace-1.webp',
          '/wp-content/uploads/2026/09/05-terrace-dining.webp',
          '/wp-content/uploads/2026/09/06-bathroom-freestanding-tub.webp',
          '/wp-content/uploads/2026/09/07-second-bedroom.webp',
          '/wp-content/uploads/2026/09/08-dining-laid.webp',
          '/wp-content/uploads/2026/09/09-third-bedroom.webp',
          '/wp-content/uploads/2026/09/10-bathroom-two.webp',
          '/wp-content/uploads/2026/09/11-bathroom-three.webp',
          '/wp-content/uploads/2026/09/12-exterior-dusk.webp'
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
          '/wp-content/uploads/2026/09/01-hero-verandah-lake.webp',
          '/wp-content/uploads/2026/09/02-exterior-dusk-lit.webp',
          '/wp-content/uploads/2026/09/03-first-light-lake.webp',
          '/wp-content/uploads/2026/09/04-outdoor-bar-night.webp',
          '/wp-content/uploads/2026/09/05-verandah-dining-lake.webp',
          '/wp-content/uploads/2026/09/06-principal-bedroom.webp',
          '/wp-content/uploads/2026/09/07-bathroom-mediterranean.webp',
          '/wp-content/uploads/2026/09/08-exterior-roof.webp',
          '/wp-content/uploads/2026/09/09-verandah-daylight.webp',
          '/wp-content/uploads/2026/09/10-second-bedroom.webp',
          '/wp-content/uploads/2026/09/11-shower-second-bath.webp',
          '/wp-content/uploads/2026/09/12-arrival-steps-dusk.webp'
        ],
      ],
    ];

    $estate = [
      'name' => __('The Satori Estate', 'sage'),
      'ota_name' => __('Full buyout', 'sage'),
      'category' => '—',
      'eyebrow' => __('Full Buyout', 'sage'),
      'heading' => __('The whole place. No other names in the register.', 'sage'),
      'description' => __('Satori can be taken in its entirety - all twenty-one rooms and every shared space, for up to forty guests. The Nest becomes your dining room, the lawns become your venue, the kitchen cooks to your menu, and the gates close behind your group.', 'sage'),
      'units' => __('7 (categories)', 'sage'),
      'stays' => 21,
      'bedrooms' => '21',
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
            {{ __('Twenty-one rooms across a lakeside estate.', 'sage') }}
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

    <section class="bg-[#f7f3eb] lg:py-10 py-5">
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
        $defaultIncluded = [
          __('Estate breakfast every morning', 'sage'),
          __('Welcome drink on arrival', 'sage'),
          __('Access to pool, lawns, games and estate walks', 'sage'),
          __('Tea and coffee in the room', 'sage'),
        ];

        $chapters = [
          __('Garden View Cottages', 'sage') => [
            'eyebrow' => __('GARDEN COTTAGES · ONE BEDROOM · SLEEPS 2 + 2 CHILDREN', 'sage'),
            'hook' => __('The gardens at your door, the pool a short walk away.', 'sage'),
            'paragraphs' => [
              __('The Garden View Cottages sit at ground level among the planted beds, each one a single bedroom with its own verandah opening straight onto lawn and flower borders. They are the simplest way to stay at Satori: a comfortable room, a garden to step into, and the whole estate within a few minutes\' walk.', 'sage'),
              __('They are built for guests who will spend their days out on the estate and want somewhere calm and uncomplicated to come back to, and for families who need a second bed for children without taking a full villa.', 'sage'),
            ],
            'specs' => [
              'size' => __('[___ sq ft]', 'sage'),
              'bedrooms' => '1',
              'bathrooms' => '1',
              'sleeps' => __('2 adults + 2 children', 'sage'),
              'view' => __('Gardens', 'sage'),
            ],
            'layout' => [
              __('One en-suite bedroom', 'sage'),
              __('Private verandah opening onto the gardens', 'sage'),
              __('Extra bedding for two children on request', 'sage'),
              __('Ground level, no steps', 'sage'),
            ],
            'view' => __('Flower borders, the herb and medicinal beds, and the estate\'s trees; the most planted outlook on the property.', 'sage'),
            'idealFor' => __('Young families, couples on a shorter stay, and guests who want the estate rather than the room to be the point.', 'sage'),
            'included' => $defaultIncluded,
            'booking_url' => 'https://www.secure-booking-engine.com/accounts/HXm66tqenYOx-VZR46IBBQ/properties/P9JyVOBiPOXdUDFklZVpVA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/cart/MdEkwhqgGd7N5zhKcIJ7Qw/#!/rooms',
          ],
          __('Junior Suites (Lake View)', 'sage') => [
            'eyebrow' => __('LAKE-VIEW SUITES · ONE BEDROOM · SLEEPS 2 + 2 CHILDREN', 'sage'),
            'hook' => __('The lake in the window, without taking a whole villa.', 'sage'),
            'paragraphs' => [
              __('The Junior Suites are Satori\'s newest rooms: a generous bedroom with a sitting area and a private balcony, positioned so the view runs straight out over Mulshi Lake to the hills beyond. They carry the same finish as the estate\'s villas, red-oxide floors, natural textures, Mediterranean-inspired bathrooms, in a room-sized stay.', 'sage'),
              __('They suit couples who want the lake view that Hornbill is known for, at a gentler scale and price, and small families who want to be close to the water.', 'sage'),
            ],
            'specs' => [
              'size' => __('[___ sq ft]', 'sage'),
              'bedrooms' => '1',
              'bathrooms' => '1',
              'sleeps' => __('2 adults + 2 children', 'sage'),
              'view' => __('Lake', 'sage'),
            ],
            'layout' => [
              __('One en-suite bedroom with sitting area', 'sage'),
              __('Private balcony facing the lake', 'sage'),
              __('Extra bedding for two children on request', 'sage'),
              __('Tea and coffee station in the room', 'sage'),
            ],
            'view' => __('Mulshi Lake and the Sahyadri ridgeline, from the bed and the balcony.', 'sage'),
            'idealFor' => __('Couples who want the water in view, and small families who want the lake without a villa\'s footprint.', 'sage'),
            'included' => $defaultIncluded,
            'booking_url' => 'https://www.secure-booking-engine.com/accounts/HXm66tqenYOx-VZR46IBBQ/properties/P9JyVOBiPOXdUDFklZVpVA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/cart/MdEkwhqgGd7N5zhKcIJ7Qw/#!/rooms',
          ],
          __('Aves', 'sage') => [
            'eyebrow' => __('GARDEN COTTAGES · ONE BEDROOM EACH · SLEEPS 2 EACH', 'sage'),
            'hook' => __('Three cottages, named for birds, hidden in plain sight.', 'sage'),
            'paragraphs' => [
              __('Aves brings together Falcon, Macaw and Toucan: three single-bedroom cottages tucked into their own pockets of the estate. Each has a wraparound verandah and its own angle on the gardens and farms, positioned so you can spend a whole day without seeing another guest, then walk five minutes to dinner and be among everyone.', 'sage'),
              __('They are the quietest stays on the property. Guests who book Aves tend to rebook Aves.', 'sage'),
            ],
            'specs' => [
              'size' => __('[___ sq ft] per cottage', 'sage'),
              'bedrooms' => __('1 per cottage (3 cottages)', 'sage'),
              'bathrooms' => '1',
              'sleeps' => __('2 each', 'sage'),
              'view' => __('Gardens and farm', 'sage'),
            ],
            'layout' => [
              __('One en-suite bedroom', 'sage'),
              __('Wraparound private verandah', 'sage'),
              __('Garden-edged, secluded setting', 'sage'),
              __('Three cottages: Falcon, Macaw, Toucan', 'sage'),
            ],
            'view' => __('Gardens, orchards and the working farm; the greenest outlook on the estate.', 'sage'),
            'idealFor' => __('Couples, writers and readers, solo retreats, and anyone who values being left alone.', 'sage'),
            'included' => $defaultIncluded,
            'booking_url' => 'https://www.secure-booking-engine.com/accounts/HXm66tqenYOx-VZR46IBBQ/properties/P9JyVOBiPOXdUDFklZVpVA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/cart/MdEkwhqgGd7N5zhKcIJ7Qw/#!/rooms',
          ],
          __('Woodhouse', 'sage') => [
            'eyebrow' => __('MACHAN STAY · TWO BEDROOMS · SLEEPS 4', 'sage'),
            'hook' => __('Timber-warm, raised, and the most atmospheric address on the estate.', 'sage'),
            'paragraphs' => [
              __('Woodhouse is built in the spirit of a machan: raised, timber-framed, and open to the air on the side that faces the lawns and the lake. Two bedrooms sit either side of a shared living space, and a long verandah runs the length of the building.', 'sage'),
              __('It is the single best place on the estate to sit through a monsoon afternoon and do absolutely nothing.', 'sage'),
            ],
            'specs' => [
              'size' => __('[___ sq ft]', 'sage'),
              'bedrooms' => '2',
              'bathrooms' => '2',
              'sleeps' => '4',
              'view' => __('Lawns and lake', 'sage'),
            ],
            'layout' => [
              __('Two en-suite bedrooms', 'sage'),
              __('Shared living space between the bedrooms', 'sage'),
              __('Long covered verandah facing the lawns and lake', 'sage'),
              __('Raised, timber-led architecture', 'sage'),
            ],
            'view' => __('Across the lawns to the lake, framed by timber and trees.', 'sage'),
            'idealFor' => __('Two couples, small families, and guests who want warmth and texture over polish. Especially good in the monsoon.', 'sage'),
            'included' => $defaultIncluded,
            'booking_url' => 'https://www.secure-booking-engine.com/accounts/HXm66tqenYOx-VZR46IBBQ/properties/P9JyVOBiPOXdUDFklZVpVA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/cart/MdEkwhqgGd7N5zhKcIJ7Qw/#!/rooms',
          ],
          __('Perch I', 'sage') => [
            'eyebrow' => __('LAKE RESIDENCE · FOUR BEDROOMS · SLEEPS 8', 'sage'),
            'hook' => __('The estate\'s largest stay, and its longest views.', 'sage'),
            'paragraphs' => [
              __('Perch I is Satori\'s four-bedroom residence, set high on the estate with an expansive, uninterrupted view over Mulshi Lake and the ranges beyond. A full living room, a kitchenette and wide outdoor terraces sit between the bedrooms, so a group can stay together as one household rather than scatter across the estate.', 'sage'),
              __('It is the natural choice for families and groups of friends who want to cook a little, sit together a lot, and wake up to the lake.', 'sage'),
            ],
            'specs' => [
              'size' => __('[___ sq ft]', 'sage'),
              'bedrooms' => '4',
              'bathrooms' => '4',
              'sleeps' => '8',
              'view' => __('Elevated, panoramic lake', 'sage'),
            ],
            'layout' => [
              __('Four en-suite bedrooms', 'sage'),
              __('Large shared living room', 'sage'),
              __('Kitchenette with fridge, kettle and basics', 'sage'),
              __('Dining area for eight', 'sage'),
              __('Wide terraces facing the lake and hills', 'sage'),
            ],
            'view' => __('Elevated and expansive: the whole of Mulshi Lake and the Sahyadri ridgeline from the terrace and the living room.', 'sage'),
            'idealFor' => __('Families, groups of friends, milestone celebrations and small offsites. Book with Perch II for larger parties.', 'sage'),
            'included' => $defaultIncluded,
            'booking_url' => 'https://www.secure-booking-engine.com/accounts/HXm66tqenYOx-VZR46IBBQ/properties/P9JyVOBiPOXdUDFklZVpVA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/cart/MdEkwhqgGd7N5zhKcIJ7Qw/#!/rooms',
          ],
          __('Perch II', 'sage') => [
            'eyebrow' => __('LAKE RESIDENCE · THREE BEDROOMS · SLEEPS 6', 'sage'),
            'hook' => __('The same long views, one bedroom fewer.', 'sage'),
            'paragraphs' => [
              __('Perch II is Satori\'s three-bedroom residence, set high on the estate beside Perch I with the same expansive view over Mulshi Lake. It has its own living room, a kitchenette and wide outdoor terraces, and works as one comfortable household for a family or a group of six.', 'sage'),
              __('Perch II can be booked alongside Perch I when a larger group wants the same long views and shared sense of place.', 'sage'),
            ],
            'specs' => [
              'size' => __('[___ sq ft]', 'sage'),
              'bedrooms' => '3',
              'bathrooms' => '3',
              'sleeps' => '6',
              'view' => __('Elevated, panoramic lake', 'sage'),
            ],
            'layout' => [
              __('Three en-suite bedrooms', 'sage'),
              __('Shared living room', 'sage'),
              __('Kitchenette with fridge, kettle and basics', 'sage'),
              __('Dining area', 'sage'),
              __('Wide terraces facing the lake and hills', 'sage'),
            ],
            'view' => __('Elevated and expansive: Mulshi Lake and the ranges beyond, from the terrace and the living room.', 'sage'),
            'idealFor' => __('Families, friends travelling together, and groups who want to be near each other without being on top of each other.', 'sage'),
            'included' => $defaultIncluded,
            'booking_url' => 'https://www.secure-booking-engine.com/accounts/HXm66tqenYOx-VZR46IBBQ/properties/P9JyVOBiPOXdUDFklZVpVA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/cart/MdEkwhqgGd7N5zhKcIJ7Qw/#!/rooms',
          ],
          __('Hornbill', 'sage') => [
            'eyebrow' => __('THE SIGNATURE VILLA · TWO BEDROOMS · SLEEPS 4', 'sage'),
            'hook' => __('The best seat on the estate.', 'sage'),
            'paragraphs' => [
              __('Hornbill is Satori at its most complete: two bedrooms, a private lounge, a pantry, indoor and outdoor living, its own outdoor bar, and a position that gives it the lake in full and near-total privacy. It is the only stay where the water is present from the moment you wake to the moment the light goes.', 'sage'),
              __('Guests take Hornbill when the stay itself is the occasion: an anniversary, a first trip after a long year, or simply the decision to do the thing properly.', 'sage'),
            ],
            'specs' => [
              'size' => __('[___ sq ft]', 'sage'),
              'bedrooms' => '2',
              'bathrooms' => '2',
              'sleeps' => '4',
              'view' => __('Direct lake frontage', 'sage'),
            ],
            'layout' => [
              __('Two en-suite bedrooms', 'sage'),
              __('Attached private lounge', 'sage'),
              __('Pantry with tea, coffee and fridge', 'sage'),
              __('Private outdoor bar and deck', 'sage'),
              __('Wraparound verandah facing the lake', 'sage'),
            ],
            'view' => __('The estate\'s most direct and uninterrupted lake frontage, from every room.', 'sage'),
            'idealFor' => __('Couples marking something, two couples travelling well, and guests for whom the view is the point.', 'sage'),
            'included' => $defaultIncluded,
            'booking_url' => 'https://www.secure-booking-engine.com/accounts/HXm66tqenYOx-VZR46IBBQ/properties/P9JyVOBiPOXdUDFklZVpVA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/cart/MdEkwhqgGd7N5zhKcIJ7Qw/#!/rooms',
          ],
        ];
      @endphp

      <div class="mx-auto w-full max-w-7xl space-y-14 px-5 sm:px-8">
        @foreach ($stays as $stay)
          @php
            $chapter = $chapters[$stay['name']];
            $isFlipped = $loop->index % 2 === 1;

            $galleryList = [];
            if (!empty($stay['gallery'])) {
              $galleryList = is_array($stay['gallery']) ? $stay['gallery'] : [$stay['gallery']];
            } elseif (!empty($stay['image'])) {
              $galleryList = is_array($stay['image']) ? $stay['image'] : [$stay['image']];
            }
          @endphp

          <article
            data-stay-card
            class="group/card grid snap-start scroll-mt-16 items-stretch border-t border-brand-ink/10 lg:grid-cols-[repeat(20,minmax(0,1fr))] lg:h-[600px] lg:max-h-[600px] {{ $loop->last ? 'border-b' : '' }}">
            <div
              class="relative w-full aspect-[3/4] max-h-[600px] overflow-hidden bg-brand-primary lg:col-span-9 lg:aspect-auto lg:h-full lg:max-h-[600px] {{ $isFlipped ? 'lg:order-last' : '' }}"
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
              data-stay-scrollable
              class="flex flex-col justify-center group-[.is-open]/card:justify-start bg-brand-sand px-6 py-8 sm:px-8 lg:col-span-11 lg:px-10 lg:py-8 lg:h-full lg:max-h-[600px] lg:overflow-y-auto stay-scrollable {{ $isFlipped ? 'lg:order-first lg:border-r' : 'lg:border-l' }} lg:border-brand-ink/10"
              data-reveal>
              {{-- 1. Eyebrow: category · bedrooms · sleeps --}}
              <p class="text-[0.68rem] uppercase leading-5 tracking-[0.22em] text-brand-muted font-medium">
                {{ $chapter['eyebrow'] }}
              </p>

              {{-- 2. Name + Hook --}}
              <h3 class="mt-2 font-heading text-3xl sm:text-4xl lg:text-[2.6rem] font-light leading-tight text-brand-ink">
                {{ $stay['name'] }}
              </h3>

              <p class="mt-1.5 font-heading text-base sm:text-lg font-light leading-snug text-brand-gold italic">
                {{ $chapter['hook'] }}
              </p>

              {{-- 3. Two Paragraphs with Read More --}}
              <div class="mt-3.5 space-y-2 text-sm leading-relaxed text-brand-muted sm:text-[15px]" data-read-more>
                <div class="line-clamp-3 transition-all duration-300" data-read-more-clamp>
                  @foreach ($chapter['paragraphs'] as $paragraph)
                    <p class="{{ $loop->first ? '' : 'mt-2' }}">{{ $paragraph }}</p>
                  @endforeach
                </div>

                @if (count($chapter['paragraphs']) > 1 || strlen($chapter['paragraphs'][0] ?? '') > 180)
                  <button
                    class="mt-1 inline-flex cursor-pointer items-center gap-1 text-xs font-medium uppercase tracking-wider text-brand-gold underline underline-offset-4 transition-colors duration-300 hover:text-brand-ink"
                    type="button" data-read-more-toggle data-open-label="{{ __('Read more', 'sage') }}"
                    data-close-label="{{ __('Read less', 'sage') }}" aria-expanded="false">
                    <span data-read-more-label>{{ __('Read more', 'sage') }}</span>
                  </button>
                @endif
              </div>

              {{-- 4. Spec Strip: Bedrooms · Bathrooms · Sleeps · View (Size hidden for now) --}}
              <div class="mt-5 border-y border-brand-ink/10 py-3">
                <div class="grid grid-cols-4 divide-x divide-brand-ink/10 text-center">
                  <div class="px-1 sm:px-2">
                    <p class="text-[0.6rem] uppercase tracking-[0.16em] text-brand-muted sm:text-[0.65rem]">{{ __('Bedrooms', 'sage') }}</p>
                    <p class="mt-1 font-heading text-xs font-medium text-brand-ink sm:text-sm">{{ $chapter['specs']['bedrooms'] }}</p>
                  </div>

                  <div class="px-1 sm:px-2">
                    <p class="text-[0.6rem] uppercase tracking-[0.16em] text-brand-muted sm:text-[0.65rem]">{{ __('Bathrooms', 'sage') }}</p>
                    <p class="mt-1 font-heading text-xs font-medium text-brand-ink sm:text-sm">{{ $chapter['specs']['bathrooms'] }}</p>
                  </div>

                  <div class="px-1 sm:px-2">
                    <p class="text-[0.6rem] uppercase tracking-[0.16em] text-brand-muted sm:text-[0.65rem]">{{ __('Sleeps', 'sage') }}</p>
                    <p class="mt-1 font-heading text-xs font-medium text-brand-ink sm:text-sm">{{ $chapter['specs']['sleeps'] }}</p>
                  </div>

                  <div class="px-1 sm:px-2">
                    <p class="text-[0.6rem] uppercase tracking-[0.16em] text-brand-muted sm:text-[0.65rem]">{{ __('View', 'sage') }}</p>
                    <p class="mt-1 text-[11px] leading-snug font-light text-brand-ink sm:text-sm">{{ $chapter['specs']['view'] }}</p>
                  </div>
                </div>
              </div>

              {{-- Action Bar: Check Availability & Discover Details --}}
              <div class="mt-6 flex flex-wrap items-center gap-3 sm:gap-4">
                <a class="group inline-flex items-center justify-center gap-2 rounded-full border border-brand-ink/25 bg-transparent px-6 py-2.5 text-[0.75rem] uppercase tracking-[0.18em] text-brand-ink transition-all duration-300 hover:border-brand-gold hover:bg-brand-gold hover:text-brand-primary font-medium shadow-sm"
                  href="{{ $chapter['booking_url'] ?? 'https://www.secure-booking-engine.com/accounts/HXm66tqenYOx-VZR46IBBQ/properties/P9JyVOBiPOXdUDFklZVpVA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/cart/MdEkwhqgGd7N5zhKcIJ7Qw/#!/rooms' }}"
                  target="_blank" rel="noopener noreferrer">
                  <span>{{ __('Check Availability', 'sage') }}</span>
                  <span class="inline-block transition-transform duration-300 group-hover:translate-x-1" aria-hidden="true">&rarr;</span>
                </a>

                <button
                  class="inline-flex cursor-pointer items-center gap-2 rounded-full border border-brand-ink/20 bg-brand-ink/[0.03] px-5 py-2.5 text-[0.75rem] uppercase tracking-[0.18em] text-brand-ink transition-all duration-300 hover:border-brand-gold hover:bg-brand-sand hover:text-brand-gold font-medium"
                  type="button"
                  data-stay-drawer-toggle
                  data-open-label="{{ __('Discover Details', 'sage') }}"
                  data-close-label="{{ __('Hide Details', 'sage') }}"
                  aria-expanded="false">
                  <span data-stay-drawer-label>{{ __('Discover Details', 'sage') }}</span>
                  <svg data-stay-drawer-chevron class="h-3.5 w-3.5 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"></polyline>
                  </svg>
                </button>
              </div>

              {{-- Expandable Drawer with Layout, Included, The View, and Ideal For --}}
              <div class="grid" data-stay-drawer>
                <div class="min-h-0">
                  <div class="mt-6 rounded-lg border border-brand-ink/10 bg-brand-primary/[0.025] p-5 sm:p-6 mb-4">
                    <div class="grid gap-6 sm:grid-cols-2">
                      {{-- The Layout --}}
                      <div>
                        <div class="flex items-center gap-2">
                          <span class="h-1.5 w-1.5 rounded-full bg-brand-gold"></span>
                          <p class="text-[0.68rem] uppercase tracking-[0.2em] text-brand-gold font-medium">
                            {{ __('The Layout', 'sage') }}
                          </p>
                        </div>
                        <ul class="mt-3 space-y-2 text-xs sm:text-[13px] text-brand-ink/90">
                          @foreach ($chapter['layout'] as $bullet)
                            <li class="flex items-start gap-2.5">
                              <span class="mt-1.5 inline-block h-1 w-1 shrink-0 rounded-full bg-brand-gold/80" aria-hidden="true"></span>
                              <span class="leading-relaxed">{{ $bullet }}</span>
                            </li>
                          @endforeach
                        </ul>
                      </div>

                      {{-- Included --}}
                      <div>
                        <div class="flex items-center gap-2">
                          <span class="h-1.5 w-1.5 rounded-full bg-brand-gold"></span>
                          <p class="text-[0.68rem] uppercase tracking-[0.2em] text-brand-gold font-medium">
                            {{ __('Included With Stay', 'sage') }}
                          </p>
                        </div>
                        <ul class="mt-3 space-y-2 text-xs sm:text-[13px] text-brand-ink/90">
                          @foreach ($chapter['included'] as $inc)
                            <li class="flex items-start gap-2.5">
                              <span class="mt-1.5 inline-block h-1 w-1 shrink-0 rounded-full bg-brand-gold/80" aria-hidden="true"></span>
                              <span class="leading-relaxed">{{ $inc }}</span>
                            </li>
                          @endforeach
                        </ul>
                      </div>
                    </div>

                    {{-- View & Ideal For --}}
                    <div class="mt-5 grid sm:grid-cols-2 gap-4 border-t border-brand-ink/10 pt-4 text-xs sm:text-[13px]">
                      <div>
                        <p class="text-[0.65rem] uppercase tracking-[0.18em] text-brand-gold font-medium">{{ __('The View', 'sage') }}</p>
                        <p class="mt-1 font-light leading-relaxed text-brand-ink">{{ $chapter['view'] }}</p>
                      </div>
                      <div>
                        <p class="text-[0.65rem] uppercase tracking-[0.18em] text-brand-gold font-medium">{{ __('Ideal For', 'sage') }}</p>
                        <p class="mt-1 font-light leading-relaxed text-brand-ink">{{ $chapter['idealFor'] }}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

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
            @if(array_key_exists('homes', $estate))
              <span>{{ sprintf(__('%d Homes', 'sage'), $estate['homes']) }}</span>
              <span aria-hidden="true">·</span>
            @endif
            <span>{{ sprintf(__('%d Rooms', 'sage'), $estate['bedrooms']) }}</span>
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
          {{ __('The Satori Estate is offered on enquiry.', 'sage') }}
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