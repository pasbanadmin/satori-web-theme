@php
  $announcementItems = [
    ['label' => __('Book Your Stay', 'sage'), 'url' => '#book'],
    ['label' => __('Satori opens 1 October 2026', 'sage'), 'url' => null],
    ['label' => __('Reservations now open', 'sage'), 'url' => null],
  ];
@endphp

<section class="relative z-10 overflow-hidden bg-brand-gold py-2.5" aria-label="{{ __('Announcement', 'sage') }}">
  <div class="marquee-track flex w-max items-center">
    @for ($i = 0; $i < 2; $i++)
      <div class="flex shrink-0 items-center" @if ($i > 0) aria-hidden="true" @endif>
        @for ($j = 0; $j < 4; $j++)
          @foreach ($announcementItems as $index => $item)
            @if ($item['url'])
              <a class="text-[0.6875rem] font-medium uppercase tracking-[0.2em] text-white/90 transition-colors duration-300 hover:text-brand-ink mx-10 underline" href="{{ $item['url'] }}">
                {{ $item['label'] }}
              </a>
            @else
              <span class="text-[0.6875rem] font-medium uppercase tracking-[0.2em] text-white/90">
                {{ $item['label'] }}
              </span>
            @endif

            @if (! $loop->last)
              <span class="mx-10 text-brand-primary/50" aria-hidden="true">✦</span>
            @endif
          @endforeach
        @endfor
      </div>
    @endfor
  </div>
</section>
