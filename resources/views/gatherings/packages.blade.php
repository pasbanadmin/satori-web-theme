@php
  // Toggle to true once owner finalizes itineraries and package pricing
  $showPackages = false;

  $packages = [
    [
      'name' => __('The Estate Weekend', 'sage'),
      'suits' => __('Large family celebrations, milestone reunions, and multi-generational groups', 'sage'),
      'duration' => __('2 Nights · 3 Days', 'sage'),
      'inclusions' => [
        __('Full estate buyout: all 21 rooms for up to 60 guests', 'sage'),
        __('All daily meals prepared by our executive chef in The Nest', 'sage'),
        __('Sundowner cocktail setup & chef\'s table by the lawn', 'sage'),
        __('Buggy service, swimming pool & pickleball access', 'sage'),
      ],
    ],
    [
      'name' => __('The Executive Offsite', 'sage'),
      'suits' => __('Leadership teams, company offsites, and strategic retreats (20–50+ guests)', 'sage'),
      'duration' => __('2 Nights · 3 Days', 'sage'),
      'inclusions' => [
        __('Flexible breakout and session spaces with AV support', 'sage'),
        __('Curated all-day coffee, snacks, and working farm-to-table lunch', 'sage'),
        __('Private lakefront bonfire circle & evening barbecue', 'sage'),
        __('Dedicated estate manager and discreet on-site hospitality staff', 'sage'),
      ],
    ],
    [
      'name' => __('The Sacred Celebration', 'sage'),
      'suits' => __('Intimate weddings, anniversary milestones, and bespoke gatherings', 'sage'),
      'duration' => __('3 Nights · 4 Days', 'sage'),
      'inclusions' => [
        __('Exclusive estate gates closed for the entire celebration party', 'sage'),
        __('Lawn ceremony setup with panoramic Mulshi lake backdrop', 'sage'),
        __('Bespoke multi-course dinner under festive lighting', 'sage'),
        __('Coordination with trusted florist, acoustics, and styling vendors', 'sage'),
      ],
    ],
  ];

  $itinerary = [
    [
      'day' => __('Day 01', 'sage'),
      'title' => __('Arrival & Sundowner Fire', 'sage'),
      'description' => __('Check-in from 1:00 PM. Welcome herbal infusion, estate orientation, and late afternoon stroll by the lake. Sunset chef\'s table outdoors, followed by drinks around the central fire pit.', 'sage'),
    ],
    [
      'day' => __('Day 02', 'sage'),
      'title' => __('Estate Life & Main Celebration', 'sage'),
      'description' => __('Dawn bird-watching walk or sunrise yoga. Communal brunch in The Nest. Afternoon pickleball, pool lounge, or quiet reading on the verandahs. The main gathering dinner with live music under the open Sahyadri skies.', 'sage'),
    ],
    [
      'day' => __('Day 03', 'sage'),
      'title' => __('Farm Harvest & Farewell', 'sage'),
      'description' => __('Slow morning with lakeside breakfast. Guided visit to the Nakshatra tree walk and organic kitchen garden. Check-out by 11:00 AM at your own unhurried pace.', 'sage'),
    ],
  ];
@endphp

@if ($showPackages)
  <section id="packages" class="bg-[#f7f3eb] py-14 lg:py-20 border-t border-brand-ink/10" aria-labelledby="packages-heading">
    <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">

      <div class="max-w-3xl mb-10 lg:mb-14" data-reveal>
        <p class="text-[0.75rem] uppercase tracking-[0.3em] text-gold-ink font-medium">
          {{ __('Tailored Experiences', 'sage') }}
        </p>
        <h2 id="packages-heading" class="mt-2 font-heading text-3xl sm:text-4xl lg:text-5xl font-light text-brand-primary leading-tight">
          {{ __('Sample itineraries & packages', 'sage') }}
        </h2>
        <p class="mt-3 text-sm sm:text-base text-brand-primary/80">
          {{ __('Every gathering at Satori is custom-shaped. Below is a framework of how groups typically inhabit the estate.', 'sage') }}
        </p>
      </div>

      {{-- 3-Column Packages Grid --}}
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 mb-16" data-reveal>
        @foreach ($packages as $pkg)
          <div class="bg-brand-sand border border-brand-ink/10 p-6 sm:p-8 flex flex-col justify-between hover:border-brand-gold/60 transition-all duration-300">
            <div>
              <p class="text-[0.68rem] uppercase tracking-[0.2em] text-brand-gold font-medium mb-1">
                {{ $pkg['duration'] }}
              </p>
              <h3 class="font-heading text-2xl font-light text-brand-primary mb-3">
                {{ $pkg['name'] }}
              </h3>
              <p class="text-xs sm:text-sm text-brand-primary/75 leading-relaxed mb-6">
                {{ $pkg['suits'] }}
              </p>

              <div class="h-px w-full bg-brand-ink/10 mb-6"></div>

              <ul class="space-y-3 text-xs sm:text-sm text-brand-primary/85 leading-relaxed mb-8">
                @foreach ($pkg['inclusions'] as $item)
                  <li class="flex items-start gap-2.5">
                    <span class="mt-1.5 inline-block h-1.5 w-1.5 shrink-0 rounded-full bg-brand-gold"></span>
                    <span>{{ $item }}</span>
                  </li>
                @endforeach
              </ul>
            </div>

            <a href="{{ home_url('/contact-us/?planning=Celebration+or+wedding#enquire-form') }}"
              class="inline-flex w-full items-center justify-center rounded-full bg-brand-primary text-brand-sand py-3 text-[0.75rem] uppercase tracking-[0.2em] font-medium transition-all duration-300 hover:bg-brand-gold hover:text-brand-primary">
              {{ __('Plan a Gathering', 'sage') }}
            </a>
          </div>
        @endforeach
      </div>

      {{-- Sample Timeline (Day 1 / Day 2 / Day 3) --}}
      <div class="pt-10 border-t border-brand-ink/10" data-reveal>
        <h3 class="font-heading text-2xl sm:text-3xl font-light text-brand-primary mb-8 text-center sm:text-left">
          {{ __('A rhythm of your stay', 'sage') }}
        </h3>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          @foreach ($itinerary as $day)
            <div class="border-l-2 border-brand-gold pl-5 py-1">
              <span class="text-[0.68rem] uppercase tracking-[0.25em] text-brand-gold font-medium block mb-1">
                {{ $day['day'] }}
              </span>
              <h4 class="font-heading text-xl font-light text-brand-primary mb-2">
                {{ $day['title'] }}
              </h4>
              <p class="text-sm leading-6 text-brand-primary/80">
                {{ $day['description'] }}
              </p>
            </div>
          @endforeach
        </div>
      </div>

    </div>
  </section>
@endif

