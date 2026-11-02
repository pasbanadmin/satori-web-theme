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
      'link' => [
        'label' => __('See who has held theirs here →', 'sage'),
        'url' => '#offsites',
      ],
    ],
    [
      'number' => '05',
      'title' => __('Hosted retreats', 'sage'),
      'body' => __('For wellness practitioners and facilitators bringing their own groups to a setting that does half the work.', 'sage'),
    ],
  ];
@endphp

<section class="bg-[#f7f3eb] py-14 lg:py-20" aria-labelledby="formats-heading">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">

    <div class="mb-6 lg:mb-10" data-reveal>
      <p class="text-[0.75rem] uppercase tracking-[0.3em] text-gold-ink font-medium">
        {{ __('The Formats', 'sage') }}
      </p>
      <h2 id="formats-heading" class="mt-2 font-heading text-4xl font-light leading-tight text-brand-primary sm:text-5xl">
        {{ __('Occasions that belong here', 'sage') }}
      </h2>
    </div>

    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3" role="list" data-reveal>
      @foreach ($formats as $format)
        <article
          role="listitem"
          aria-labelledby="format-title-{{ $loop->index }}"
          class="bg-brand-sand border border-brand-ink/10 p-6 sm:p-8 flex flex-col justify-between hover:border-brand-gold/60 transition-all duration-300">
          <div>
            <span class="font-heading text-2xl font-light text-gold-ink block mb-3" aria-hidden="true">
              {{ $format['number'] }}
            </span>
            <h3 id="format-title-{{ $loop->index }}" class="font-heading text-xl sm:text-2xl font-light text-brand-primary mb-3">
              {{ $format['title'] }}
            </h3>
            <p class="text-sm leading-6 text-[#16100C]/80" style="color: rgba(22, 16, 12, 0.8);">
              {{ $format['body'] }}
            </p>
            @if (!empty($format['link']))
              <a href="{{ $format['link']['url'] }}" class="mt-4 inline-flex items-center text-xs uppercase tracking-[0.2em] text-brand-primary hover:text-brand-gold font-medium transition-colors">
                {{ $format['link']['label'] }}
              </a>
            @endif
          </div>
        </article>
      @endforeach
    </div>

  </div>
</section>