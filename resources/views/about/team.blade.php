@php
  $teamPhotos = [
    [
      'file' => '/wp-content/uploads/2026/11/09_team-interim_gardener-morning-harvest.webp',
      'alt' => __('Gardener harvesting fresh organic produce at dawn at Satori', 'sage'),
      'label' => __('The Farm & Gardens', 'sage'),
    ],
    [
      'file' => '/wp-content/uploads/2026/11/10_team-interim_chef-at-the-grill.webp',
      'alt' => __('Chef Pradeep at the open wood grill in the Satori farm kitchen', 'sage'),
      'label' => __('The Kitchen', 'sage'),
    ],
  ];
@endphp

<section id="team" class="bg-[#f7f3eb] py-14 lg:py-20 border-t border-brand-ink/10" aria-labelledby="team-heading">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">

    <div class="max-w-3xl mb-8 lg:mb-12" data-reveal>
      <p class="text-[0.75rem] uppercase tracking-[0.3em] text-gold-ink font-medium">
        {{ __('The People', 'sage') }}
      </p>
      <h2 id="team-heading" class="mt-2 font-heading text-3xl sm:text-4xl lg:text-5xl font-light text-brand-primary leading-tight">
        {{ __('Meet your team', 'sage') }}
      </h2>
    </div>

    {{-- Side-by-side team imagery --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8" data-reveal>
      @foreach ($teamPhotos as $photo)
        <article class="flex flex-col group">
          <div class="w-full overflow-hidden bg-brand-primary/10" style="aspect-ratio: 4/3;">
            <img
              src="{{ $photo['file'] }}"
              alt="{{ $photo['alt'] }}"
              class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
              style="width: 100%; height: 100%; object-fit: cover;"
              loading="lazy"
            >
          </div>
          <p class="text-[0.65rem] lg:text-[0.58rem] uppercase tracking-[0.2em] text-brand-primary/70" style="margin-top: 14px; padding-top: 2px;">
            {{ $photo['label'] }}
          </p>
        </article>
      @endforeach
    </div>

    {{-- Caption --}}
    <div class="mt-6 sm:mt-8 pt-4 border-t border-brand-ink/10 text-center sm:text-left" data-reveal>
      <p class="font-heading italic text-base sm:text-lg text-brand-primary/85">
        {{ __('Chef Pradeep\'s kitchen and the gardeners who grow for it.', 'sage') }}
      </p>
    </div>

  </div>
</section>

