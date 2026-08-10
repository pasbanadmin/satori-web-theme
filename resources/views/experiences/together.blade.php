@php
  $togetherActivities = [
    __('Pickleball', 'sage'),
    __('Table Tennis', 'sage'),
    __('Pool Volleyball', 'sage'),
    __('Billiards', 'sage'),
    __('Board Games', 'sage'),
    __('Films Under the Sky', 'sage'),
    __('Long Lunches', 'sage'),
  ];

  $togetherImage = '/wp-content/uploads/2026/08/36_202309051441007901-bcf6382f-142f-4570-85ee-9cdb14a05cc3-scaled.webp';
@endphp

<section class="bg-[#f7f3eb] pb-24">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
    <div class="mx-auto max-w-3xl text-center" data-reveal>
      <p class="text-[0.75rem] uppercase tracking-[0.3em]">
        <span class="text-brand-gold">04</span>
        <span class="mx-2 text-brand-ink/30" aria-hidden="true">—</span>
        <span class="text-brand-muted">{{ __('Together', 'sage') }}</span>
      </p>

      <h2 class="mt-5 font-heading text-3xl font-light leading-tight text-brand-ink sm:text-4xl">
        {{ __('Space to enjoy, space to bond', 'sage') }}
      </h2>

      <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-brand-muted sm:text-[16px]">
        {{ __('Pickleball, table tennis, pool volleyball. Billiards and board games in The Nest. Films under the open sky. Long lunches that quietly become long afternoons.', 'sage') }}
      </p>

      <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-brand-muted sm:text-[16px]">
        {{ __('For couples, families and friends, these shared hours are usually the part they talk about afterwards.', 'sage') }}
      </p>
    </div>

    <div class="mt-14 swiper" data-together-swiper data-reveal>
      <div class="swiper-wrapper items-stretch">
        @foreach ($togetherActivities as $activity)
          <div class="group relative swiper-slide overflow-hidden">
            <img class="aspect-[4/5] w-full object-cover transition-transform duration-[1200ms] ease-out group-hover:scale-105" src="{{ $togetherImage }}" alt="{{ $activity }}">

            <div class="absolute inset-0 bg-gradient-to-t from-brand-primary/70 via-transparent to-transparent"></div>

            <h4 class="absolute inset-x-0 bottom-0 p-6 font-heading text-2xl font-light leading-snug text-brand-sand">
              {{ $activity }}
            </h4>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
