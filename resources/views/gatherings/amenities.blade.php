@php
  $amenities = [
    [
      'title' => __('Farm-fresh menus', 'sage'),
      'description' => __('Prepared daily by our resident chef using produce from our kitchen garden and local growers.', 'sage'),
      'icon' => '<svg class="w-6 h-6 text-brand-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2a9 9 0 0 1 9 9c0 4-3 7-9 11C6 18 3 15 3 11a9 9 0 0 1 9-9z"/><path d="M12 2v20"/></svg>',
    ],
    [
      'title' => __('Chef\'s table over open fire', 'sage'),
      'description' => __('Live wood-fired cooking outdoors on the lawn as the sun goes down behind the Mulshi hills.', 'sage'),
      'icon' => '<svg class="w-6 h-6 text-brand-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"/></svg>',
    ],
    [
      'title' => __('Bonfire & stargazing', 'sage'),
      'description' => __('A dedicated fire pit under unpolluted dark skies, with blankets and evening drinks.', 'sage'),
      'icon' => '<svg class="w-6 h-6 text-brand-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
    ],
    [
      'title' => __('Buggy rides across the estate', 'sage'),
      'description' => __('Effortless movement between cottages, The Nest, the orchards, and the lakefront.', 'sage'),
      'icon' => '<svg class="w-6 h-6 text-brand-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/><path d="M5 17H3v-6l2-4h9l3 4h4v6h-2"/><path d="M9 17h6"/></svg>',
    ],
    [
      'title' => __('The swimming pool', 'sage'),
      'description' => __('Private pool set against open greenery, exclusively reserved for your buyout party.', 'sage'),
      'icon' => '<svg class="w-6 h-6 text-brand-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 12c2 0 3-1 5-1s3 1 5 1 3-1 5-1 3 1 5 1"/><path d="M2 18c2 0 3-1 5-1s3 1 5 1 3-1 5-1 3 1 5 1"/></svg>',
    ],
    [
      'title' => __('Pickleball & lawns', 'sage'),
      'description' => __('Dedicated outdoor pickleball court, walking trails, and expansive lawns for games.', 'sage'),
      'icon' => '<svg class="w-6 h-6 text-brand-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>',
    ],
  ];
@endphp

<section id="amenities" class="bg-[#efe4d0] py-14 lg:py-20 border-t border-brand-ink/10" aria-labelledby="amenities-heading">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">

    <div class="max-w-3xl mb-10 lg:mb-14" data-reveal>
      <p class="text-[0.75rem] uppercase tracking-[0.3em] text-gold-ink font-medium">
        {{ __('What Is Included', 'sage') }}
      </p>
      <h2 id="amenities-heading" class="mt-2 font-heading text-3xl sm:text-4xl lg:text-5xl font-light text-brand-primary leading-tight">
        {{ __('Already taken care of', 'sage') }}
      </h2>
    </div>

    {{-- 6 Inclusions Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8" data-reveal>
      @foreach ($amenities as $item)
        <div class="p-6 sm:p-7 rounded-sm border border-brand-ink/10 bg-[#f7f3eb]/60 flex flex-col justify-between">
          <div>
            <div class="mb-4 inline-block">
              {!! $item['icon'] !!}
            </div>
            <h3 class="font-heading text-xl sm:text-2xl font-light text-brand-primary mb-2">
              {{ $item['title'] }}
            </h3>
            <p class="text-sm leading-6 text-brand-primary/80">
              {{ $item['description'] }}
            </p>
          </div>
        </div>
      @endforeach
    </div>

    {{-- Vendor / Decor / Music policy line --}}
    <div class="mt-10 sm:mt-12 pt-6 border-t border-brand-ink/15 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4" data-reveal>
      <p class="text-xs sm:text-sm text-brand-primary/75 italic">
        {{ __('Décor, music, and outside vendor coordination: policy and trusted partners to follow.', 'sage') }}
      </p>
      <a href="{{ home_url('/contact-us/?planning=Celebration+or+wedding#enquire-form') }}"
        class="inline-flex items-center text-xs uppercase tracking-[0.2em] text-brand-primary hover:text-brand-gold font-medium transition-colors shrink-0">
        {{ __('Ask Our Team About Vendors →', 'sage') }}
      </a>
    </div>

  </div>
</section>

