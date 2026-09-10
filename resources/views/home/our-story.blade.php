@php
  $storyImage = '/wp-content/uploads/2026/09/01-hero-verandah-lake.webp';
  $storyAlt = __('Verandah overlooking Mulshi Lake and the Sahyadris at Satori', 'sage');
@endphp

<section class="bg-[#f7f3eb] pb-20 lg:pb-28" data-our-story>
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
    <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-16">

      {{-- Left Column: Copy --}}
      <div data-reveal>
        <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold font-medium">
          {{ __('OUR STORY', 'sage') }}
        </p>

        <h2 class="mt-4 font-heading text-2xl font-light leading-snug text-brand-ink sm:text-3xl lg:text-[2rem]">
          {{ __('A place that grew, rather than arrived.', 'sage') }}
        </h2>

        <div class="mt-5 space-y-3.5 text-sm leading-6 text-brand-muted sm:text-[15px] sm:leading-7">
          <p>
            {{ __('Satori was not conceived as a resort and placed upon a landscape.', 'sage') }}
          </p>

          <p>
            {{ __('It grew slowly from the land around it — from a home overlooking Mulshi Lake, from gardens planted and tended, from trees allowed to mature and spaces created over time.', 'sage') }}
          </p>

          <p>
            {{ __('One stay became another. Paths appeared between them. A garden began feeding the kitchen. Birds found their way into the names of rooms. Places to eat, gather, walk and simply sit emerged where they seemed to belong.', 'sage') }}
          </p>

          <p>
            {{ __('What exists today is less a hotel in the conventional sense than an estate that has gradually learnt how to welcome people.', 'sage') }}
          </p>

          <p class=" text-brand-ink">
            {{ __('That is Satori.', 'sage') }}
          </p>
        </div>

        <div class="mt-6">
          <a class="group inline-flex items-center gap-2 text-[0.75rem] uppercase tracking-[0.25em] text-brand-gold transition-colors duration-300 hover:text-brand-ink"
            href="{{ home_url('/the-satori-way') }}">
            {{ __('The Satori Way', 'sage') }}
            <span class="inline-block transition-transform duration-300 group-hover:translate-x-1.5"
              aria-hidden="true">→</span>
          </a>
        </div>
      </div>

      {{-- Right Column: Estate Image --}}
      <div
        class="group relative aspect-[4/3] sm:aspect-[16/11] lg:aspect-[4/3] max-h-[460px] w-full overflow-hidden bg-brand-primary"
        data-reveal>
        <img class="h-full w-full object-cover transition-transform duration-[1200ms] ease-out group-hover:scale-105"
          src="{{ $storyImage }}" alt="{{ $storyAlt }}">
        <div class="absolute inset-0 bg-gradient-to-t from-brand-primary/20 via-transparent to-transparent"></div>
      </div>

    </div>
  </div>
</section>