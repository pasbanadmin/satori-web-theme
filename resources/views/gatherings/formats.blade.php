@php
  $formats = [
    [
      'number' => '01',
      'title' => __('Intimate weddings', 'sage'),
      'body' => __('Ceremony on the lawns, dinner under the sky, and the whole party sleeping on site. No convoy back to a hotel at midnight.', 'sage'),
    ],
    [
      'number' => '02',
      'title' => __('Milestone celebrations', 'sage'),
      'body' => __('Significant birthdays and anniversaries, where the setting carries the occasion instead of the decor having to.', 'sage'),
    ],
    [
      'number' => '03',
      'title' => __('Family reunions', 'sage'),
      'body' => __('Because the stays differ in scale, three generations can be housed properly rather than issued identical rooms.', 'sage'),
    ],
    [
      'number' => '04',
      'title' => __('Offsites & leadership retreats', 'sage'),
      'body' => __('For teams that need to think rather than present. Meeting space, full board, and evenings that actually build something.', 'sage'),
    ],
    [
      'number' => '05',
      'title' => __('Hosted retreats', 'sage'),
      'body' => __('For wellness practitioners and facilitators bringing their own groups to a setting that does half the work.', 'sage'),
    ],
  ];
@endphp

<section class="bg-[#f7f3eb] py-14 lg:py-20">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">

    <div class="mb-6 lg:mb-10" data-reveal>
      <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
        {{ __('The Formats', 'sage') }}
      </p>
      <h2 class="mt-2 font-heading text-4xl font-light leading-tight text-primary sm:text-5xl">
        {{ __('Occasions that belong here', 'sage') }}
      </h2>
    </div>

    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3" data-reveal>
      @foreach ($formats as $format)
        <article
          class="bg-brand-sand border border-brand-ink/10 p-6 sm:p-8 flex flex-col justify-between hover:border-brand-gold/60 transition-all duration-300">
          <div>
            <span class="font-heading text-2xl font-light text-brand-gold block mb-3">
              {{ $format['number'] }}
            </span>
            <h3 class="font-heading text-xl sm:text-2xl font-light text-primary mb-3">
              {{ $format['title'] }}
            </h3>
            <p class="text-sm text-secondary leading-6">
              {{ $format['body'] }}
            </p>
          </div>
        </article>
      @endforeach
    </div>

  </div>
</section>