@php
  $foodImage = '/wp-content/uploads/2026/08/36_202309051441007901-bcf6382f-142f-4570-85ee-9cdb14a05cc3-scaled.webp';

  $pillars = [
    [
      'title' => __('Estate-grown', 'sage'),
      'description' => __('Vegetables, herbs, greens and fruit from the farm and orchards', 'sage'),
    ],
    [
      'title' => __('Maharashtrian at its heart', 'sage'),
      'description' => __('Regional cooking made with care, not novelty', 'sage'),
    ],
    [
      'title' => __('Lighter global plates', 'sage'),
      'description' => __('For longer stays and gentler appetites', 'sage'),
    ],
    [
      'title' => __('Dietary needs handled quietly', 'sage'),
      'description' => __('Vegetarian, vegan, Jain, gluten-free and allergy requirements on notice', 'sage'),
    ],
  ];
@endphp

<section class="bg-[#f7f3eb] py-14 lg:py-20">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">

    {{-- Section header --}}
    <div class="mb-6 lg:mb-12" data-reveal>
      <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
        {{ __('What you will actually eat', 'sage') }}
      </p>

      <h2 class="my-4 font-heading text-4xl font-light leading-tight text-brand-ink">
        {{ __('The food', 'sage') }}
      </h2>
      <p class="text-base leading-7 text-primary text-[16px]">
        {{ __('Mornings begin with orchard fruit, eggs done properly, and coffee taken outdoors. Through the day the kitchen moves between soulful Maharashtrian cooking — the food this landscape has always made — and lighter global plates for guests who want them.', 'sage') }}
      </p>

      <p class="mt-3 text-base leading-7 text-primary text-[16px]">
        {{ __('Dinners are generous without heaviness. Vegetables are the centre of the plate rather than an afterthought, because at Satori they are also the thing we are best at.', 'sage') }}
      </p>
    </div>

    <div class="grid items-stretch gap-0 border border-brand-ink/10 lg:grid-cols-[repeat(20,minmax(0,1fr))]">

      {{-- Full-bleed image --}}
      <div class="group relative overflow-hidden lg:col-span-9 aspect-[4/3] lg:aspect-auto" data-reveal>
        <img
          class="absolute inset-0 h-full w-full object-cover transition-transform duration-[1200ms] ease-out group-hover:scale-105"
          src="{{ $foodImage }}" alt="{{ __('Fresh produce from the Satori estate', 'sage') }}">
      </div>

      {{-- Content panel --}}
      <div
        class="flex flex-col justify-center bg-brand-sand px-6 py-10 sm:px-8 sm:py-12 lg:col-span-11 lg:border-l lg:border-brand-ink/10 lg:px-10 lg:py-12"
        data-reveal>

        <ul class="pt-4 space-y-0" role="list">
          @foreach ($pillars as $pillar)
            <li
              class="flex gap-4 border-t border-brand-ink/10 py-5 first:border-0 first:pt-0 transition-all duration-300 hover:translate-x-1">
              <span class="shrink-0 mt-0.5 text-brand-gold font-heading text-lg font-light leading-none"
                aria-hidden="true">—</span>
              <div>
                <p class="text-sm font-medium text-brand-ink">{{ $pillar['title'] }}</p>
                <p class="mt-0.5 text-sm leading-6 text-brand-muted">{{ $pillar['description'] }}</p>
              </div>
            </li>
          @endforeach
        </ul>

      </div>

    </div>

  </div>
</section>