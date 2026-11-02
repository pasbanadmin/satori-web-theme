@php
  $formats = [
    [
      'image' => '/wp-content/uploads/2026/11/02_card-weddings-celebrations_sundowners.webp',
      'alt' => __('A toast at dusk at Satori', 'sage'),
      'title' => __('Weddings & celebrations', 'sage'),
      'body' => __('Ceremony on the lawns, dinner under the sky, and the whole party sleeping on site. No convoy back to a hotel at midnight. Intimate by design, with room for 60 guests.', 'sage'),
    ],
    [
      'image' => '/wp-content/uploads/2026/11/03_card-offsites-retreats_open-pavilion.webp',
      'alt' => __('The open pavilion at Satori', 'sage'),
      'title' => __('Offsites & retreats', 'sage'),
      'body' => __('Space for the work, and for the walk afterwards. Groups of 50+ have taken over the estate with us, and our team answers the late-night requests too.', 'sage'),
      'link' => [
        'label' => __('See who has held theirs here →', 'sage'),
        'url' => '#offsites',
      ],
    ],
    [
      'image' => '/wp-content/uploads/2026/11/04_card-milestones-reunions_lakeside-group.webp',
      'alt' => __('A family afternoon on the shore of Mulshi Lake', 'sage'),
      'title' => __('Milestones & reunions', 'sage'),
      'body' => __('Three generations, one estate. Because the stays differ in scale, everyone is housed properly rather than issued identical rooms. Cycle out to the farm, gather at the fire when the hills go quiet.', 'sage'),
    ],
    [
      'image' => '/wp-content/uploads/2026/11/05_card-friends-together_bonfire-after-dark.webp',
      'alt' => __('The bonfire circle on the lawn after dark', 'sage'),
      'title' => __('Friends, together', 'sage'),
      'body' => __('Nine couples, two nights, nowhere to be. Bring your own playlist, your own pace and your own people.', 'sage'),
    ],
    [
      'image' => '/wp-content/uploads/2026/11/06_card-hosted-retreats_sunrise-yoga.webp',
      'alt' => __('Sunrise yoga below the Woodhouse', 'sage'),
      'title' => __('Hosted retreats', 'sage'),
      'body' => __('For wellness practitioners and facilitators bringing their own groups to a setting that does half the work.', 'sage'),
    ],
  ];
@endphp

<section id="formats" class="bg-[#f7f3eb] py-14 lg:py-20" aria-labelledby="formats-heading">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">

    <div class="mb-8 lg:mb-12" data-reveal>
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
          class="bg-brand-sand border border-brand-ink/10 overflow-hidden flex flex-col justify-between hover:border-brand-gold/60 transition-all duration-300 group">
          
          {{-- 3:2 Photo at the top of the card --}}
          <div>
            <div class="w-full overflow-hidden bg-brand-primary/10" style="aspect-ratio: 3/2;">
              <img
                src="{{ $format['image'] }}"
                alt="{{ $format['alt'] }}"
                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                style="width: 100%; height: 100%; object-fit: cover;"
                loading="lazy"
              >
            </div>

            <div class="p-6 sm:p-7">
              <h3 id="format-title-{{ $loop->index }}" class="font-heading text-xl sm:text-2xl font-light text-brand-primary mb-3">
                {{ $format['title'] }}
              </h3>
              <p class="text-sm leading-6 text-[#16100C]/80" style="color: rgba(22, 16, 12, 0.82);">
                {{ $format['body'] }}
              </p>
              @if (!empty($format['link']))
                <a href="{{ $format['link']['url'] }}" class="mt-4 inline-flex items-center text-xs uppercase tracking-[0.2em] text-brand-primary hover:text-brand-gold font-medium transition-colors">
                  {{ $format['link']['label'] }}
                </a>
              @endif
            </div>
          </div>
        </article>
      @endforeach
    </div>

  </div>
</section>
