@php
  $pieces = [
    [
      'date' => 'Oct 2026',
      'datetime' => '2026-10-18',
      'is_print' => false,
      'publication' => 'Manifest Life',
      'logo_url' => content_url('/uploads/2026/10/manifest-life.webp'),
      'logo_class' => 'h-6 md:h-7 w-auto object-contain',
      'headline' => 'Mahabaleshwar to Mussoorie: Where To Book Your Boutique Destination Wedding',
      'quote' => 'Fresh produce from the in-house Nakshatra garden offers farm-to-table dining of the highest order.',
      'quote_footer' => null,
      'writer' => 'Rhea Mulani',
      'format' => 'Roundup',
      'url' => 'https://www.manifestmagazine.in/trends-culture/travel/mahabaleshwar-to-mussoorie-where-to-book-your-boutique-destination-wedding',
    ],
    [
      'date' => 'May 2026',
      'datetime' => '2026-05-18',
      'is_print' => false,
      'publication' => 'The Gourmet Edit',
      'logo_url' => content_url('/uploads/2026/10/the-gourmet-edit.webp'),
      'logo_class' => 'h-7 md:h-8 w-auto object-contain',
      'headline' => 'This boutique stay near Pune celebrates slow living with its mindful offerings',
      'quote' => 'A wonderful eco-retreat that’s built and run with love, care and passion.',
      'quote_footer' => null,
      'writer' => 'Kriti Saraswat Satpathy',
      'format' => 'Review',
      'url' => 'https://thegourmetedit.com/review-satori-mulshi-sustainable-lakeside-retreat-near-mumbai/',
    ],
    [
      'date' => 'Mar 2026',
      'datetime' => '2026-03-13',
      'is_print' => false,
      'publication' => 'Femina',
      'logo_url' => content_url('/uploads/2026/10/femina.svg'),
      'logo_class' => 'h-5 md:h-6 w-auto object-contain',
      'headline' => 'Looking For A Luxury Retreat Near Mumbai? This One Is Worth The Drive',
      'quote' => 'In an age of everything, everywhere, all at once, Satori Mulshi proposes something radical: less, here, now.',
      'quote_footer' => null,
      'writer' => 'Femina Travel',
      'format' => 'Feature',
      'url' => 'https://www.femina.in/wellness/de-stress/looking-for-a-luxury-retreat-near-mumbai-this-one-is-worth-the-drive-289517.html',
    ],
    [
      'date' => 'In print',
      'datetime' => null,
      'is_print' => true,
      'publication' => 'Mumbai Mirror',
      'logo_url' => content_url('/uploads/2026/10/mumbai-mirror.svg'),
      'logo_class' => 'h-4 md:h-5 w-auto object-contain',
      'headline' => 'Hide and chic',
      'quote' => 'I knew we could still capture that feeling without making anyone climb a mountain for it.',
      'quote_footer' => '— Sadhana Baijal, co-founder, as quoted in the piece',
      'writer' => 'Anjana Vaswani',
      'format' => 'Column',
      'url' => null,
    ],
    [
      'date' => 'Jun 2025',
      'datetime' => '2025-06-07',
      'is_print' => false,
      'publication' => 'Condé Nast Traveller India',
      'logo_url' => content_url('/uploads/2026/10/conde-nast-traveller.svg'),
      'logo_class' => 'h-6 md:h-7 w-auto object-contain',
      'headline' => '7 beautiful new hotels in the mountains to book this season',
      'quote' => 'The estate features extensive gardens and farms with herbs, vegetables, fruits, and flowers, which supply the kitchen with fresh ingredients.',
      'quote_footer' => null,
      'writer' => 'Zara Flavia Dmello',
      'format' => 'Roundup, one of seven',
      'url' => 'https://www.cntraveller.in/story/7-beautiful-new-hotels-in-the-mountains/',
    ],
  ];
@endphp

<section id="pieces" aria-labelledby="pieces-heading" class="px-6 pb-24 md:pb-32 lg:px-12 bg-[#f7f3eb]">
  <div class="mx-auto max-w-[1400px]">
    <h2 id="pieces-heading" class="sr-only">{{ __('What they wrote', 'sage') }}</h2>

    <div aria-hidden="true" class="hidden border-b border-foreground/25 pb-3 font-label text-[0.58rem] tracking-[0.2em] text-foreground/70 md:grid md:grid-cols-[6.5rem_11rem_1fr_8.5rem] md:gap-x-6">
      <span>{{ __('When', 'sage') }}</span>
      <span>{{ __('Where', 'sage') }}</span>
      <span>{{ __('What they wrote', 'sage') }}</span>
      <span></span>
    </div>

    <ol role="list" class="border-b border-border">
      @foreach ($pieces as $piece)
        <li data-row="true" class="border-t border-border">
          @if ($piece['url'])
            <a href="{{ $piece['url'] }}" target="_blank" rel="noopener noreferrer"
              class="group grid grid-cols-1 gap-y-5 py-8 transition-colors duration-300 md:py-9 md:grid-cols-[6.5rem_11rem_1fr_8.5rem] md:gap-x-6 -mx-3 px-3 hover:bg-secondary/25 md:-mx-4 md:px-4">
              <div class="flex items-center gap-5 md:contents">
                <span class="shrink-0 whitespace-nowrap font-label text-[0.62rem] tracking-[0.16em] text-foreground/70 tabular-nums md:pt-2">
                  <time dateTime="{{ $piece['datetime'] }}">{{ $piece['date'] }}</time>
                </span>
                <span class="block opacity-75 group-hover:opacity-100 transition-opacity md:pt-1">
                  <img src="{{ $piece['logo_url'] }}" alt="{{ $piece['publication'] }}" class="{{ $piece['logo_class'] }}" loading="lazy" />
                </span>
              </div>

              <div class="min-w-0 max-w-3xl">
                <h3 class="text-balance font-display leading-[1.15] text-foreground transition-colors duration-300 group-hover:text-earth"
                  style="font-size:clamp(1.5rem, 2.2vw, 1.9rem);font-weight:300">
                  {{ $piece['headline'] }}
                </h3>
                <blockquote class="mt-4 max-w-2xl">
                  <p class="text-pretty font-display italic leading-[1.4] text-foreground/75" style="font-size:1.4rem;font-weight:300">
                    “{{ $piece['quote'] }}”
                  </p>
                </blockquote>
                <p class="mt-4 font-label text-[0.6rem] tracking-[0.18em] text-foreground/70">
                  {{ $piece['writer'] }}<span aria-hidden="true" class="mx-2.5 text-foreground/40">·</span>{{ $piece['format'] }}
                </p>
              </div>

              <span class="md:justify-self-end md:pt-2">
                <span class="inline-flex items-center border-b border-foreground/30 pb-1 font-label text-[0.62rem] tracking-[0.18em] text-foreground transition-colors duration-300 group-hover:border-gold group-hover:text-earth">
                  {{ __('Read the piece', 'sage') }}<span class="sr-only"> (opens in a new tab)</span>
                  <span aria-hidden="true" class="ml-3 transition-transform duration-300 group-hover:translate-x-1">→</span>
                </span>
              </span>
            </a>
          @else
            <div class="group grid grid-cols-1 gap-y-5 py-8 transition-colors duration-300 md:py-9 md:grid-cols-[6.5rem_11rem_1fr_8.5rem] md:gap-x-6">
              <div class="flex items-center gap-5 md:contents">
                <span class="shrink-0 whitespace-nowrap font-label text-[0.62rem] tracking-[0.16em] text-foreground/70 tabular-nums md:pt-2">
                  {{ $piece['date'] }}
                </span>
                <span class="block opacity-75 group-hover:opacity-100 transition-opacity md:pt-1">
                  <img src="{{ $piece['logo_url'] }}" alt="{{ $piece['publication'] }}" class="{{ $piece['logo_class'] }}" loading="lazy" />
                </span>
              </div>

              <div class="min-w-0 max-w-3xl">
                <h3 class="text-balance font-display leading-[1.15] text-foreground transition-colors duration-300 group-hover:text-earth"
                  style="font-size:clamp(1.5rem, 2.2vw, 1.9rem);font-weight:300">
                  {{ $piece['headline'] }}
                </h3>
                <blockquote class="mt-4 max-w-2xl">
                  <p class="text-pretty font-display italic leading-[1.4] text-foreground/75" style="font-size:1.4rem;font-weight:300">
                    “{{ $piece['quote'] }}”
                  </p>
                  @if ($piece['quote_footer'])
                    <footer class="mt-2 text-xs text-foreground/70 font-body">
                      {{ $piece['quote_footer'] }}
                    </footer>
                  @endif
                </blockquote>
                <p class="mt-4 font-label text-[0.6rem] tracking-[0.18em] text-foreground/70">
                  {{ $piece['writer'] }}<span aria-hidden="true" class="mx-2.5 text-foreground/40">·</span>{{ $piece['format'] }}
                </p>
              </div>

              <span class="md:justify-self-end md:pt-2"></span>
            </div>
          @endif
        </li>
      @endforeach
    </ol>
  </div>
</section>
