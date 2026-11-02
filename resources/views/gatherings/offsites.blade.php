@php
  $logos = [
    ['name' => 'Amazon', 'file' => '/wp-content/uploads/2026/11/amazon.svg', 'ratio' => 3.3132, 'h' => 28],
    ['name' => 'Concentrix', 'file' => '/wp-content/uploads/2026/11/concentrix.svg', 'ratio' => 6.4641, 'h' => 20],
    ['name' => "Naina’s Apparel", 'file' => '/wp-content/uploads/2026/11/nainas-apparel.svg', 'ratio' => 7.2838, 'h' => 17],
    ['name' => 'Senses Akustik', 'file' => '/wp-content/uploads/2026/11/senses-akustik.svg', 'ratio' => 2.2827, 'h' => 40],
    ['name' => 'Kongsberg', 'file' => '/wp-content/uploads/2026/11/kongsberg.svg', 'ratio' => 7.4844, 'h' => 19],
    ['name' => 'NeoLiv', 'file' => '/wp-content/uploads/2026/11/neoliv.webp', 'ratio' => 6.1207, 'h' => 24],
    ['name' => 'McKinsey & Company', 'file' => '/wp-content/uploads/2026/11/mckinsey.svg', 'ratio' => 8.0, 'h' => 20],
    ['name' => 'Nexdigm', 'file' => '/wp-content/uploads/2026/11/nexdigm.svg', 'ratio' => 4.1667, 'h' => 34],
    ['name' => 'VidUnit', 'file' => '/wp-content/uploads/2026/11/vidunit.svg', 'ratio' => 1.3571, 'h' => 46],
    ['name' => 'Symbiosis International University', 'file' => '/wp-content/uploads/2026/11/symbiosis.webp', 'ratio' => 5.3061, 'h' => 26],
    ['name' => 'Google', 'file' => '/wp-content/uploads/2026/11/google.svg', 'ratio' => 2.9565, 'h' => 30],
    ['name' => 'Decathlon', 'file' => '/wp-content/uploads/2026/11/decathlon.svg', 'ratio' => 5.0334, 'h' => 22],
    ['name' => 'EY', 'file' => '/wp-content/uploads/2026/11/ey.svg', 'ratio' => 0.9845, 'h' => 40],
    ['name' => 'Accurate Constructions', 'file' => '/wp-content/uploads/2026/11/accurate-constructions.svg', 'ratio' => 4.5714, 'h' => 32],
    ['name' => 'DNV', 'file' => '/wp-content/uploads/2026/11/dnv.webp', 'ratio' => 1.8366, 'h' => 40],
    ['name' => 'Mindtickle', 'file' => '/wp-content/uploads/2026/11/mindtickle.webp', 'ratio' => 3.336, 'h' => 34],
    ['name' => 'Loop Health', 'file' => '/wp-content/uploads/2026/11/loop.svg', 'ratio' => 2.109, 'h' => 38],
    ['name' => 'SUD Life', 'file' => '/wp-content/uploads/2026/11/sud-life.svg', 'ratio' => 4.6017, 'h' => 24],
    ['name' => 'Fervent Communication', 'file' => '/wp-content/uploads/2026/11/imfervent.webp', 'ratio' => 1.308, 'h' => 46],
    ['name' => 'Navsoft', 'file' => '/wp-content/uploads/2026/11/navsoft.webp', 'ratio' => 1.0704, 'h' => 52],
    ['name' => 'Transworld International', 'file' => '/wp-content/uploads/2026/11/transworld.webp', 'ratio' => 1.9407, 'h' => 42],
    ['name' => 'East India Securities', 'file' => '/wp-content/uploads/2026/11/east-india-securities.webp', 'ratio' => 2.2472, 'h' => 40],
    ['name' => 'Tamarind Global', 'file' => '/wp-content/uploads/2026/11/tamarind-global.webp', 'ratio' => 4.5478, 'h' => 32],
    ['name' => 'Sellability', 'file' => '/wp-content/uploads/2026/11/sellability.webp', 'ratio' => 4.3555, 'h' => 28],
    ['name' => 'Clodura.AI', 'file' => '/wp-content/uploads/2026/11/clodura.svg', 'ratio' => 6.8182, 'h' => 21],
    ['name' => 'Kae Capital', 'file' => '/wp-content/uploads/2026/11/kae-capital.webp', 'ratio' => 3.2826, 'h' => 38],
    ['name' => 'Knight Frank', 'file' => '/wp-content/uploads/2026/11/knight-frank.svg', 'ratio' => 2.5407, 'h' => 34],
  ];

  $videoClips = [
    [
      'src' => '/wp-content/uploads/2026/11/knight-frank-clip-1-15s-540px.mp4',
      'poster' => '/wp-content/uploads/2026/11/knight-frank-clip-1-poster.webp',
      'alt' => __('Knight Frank Leadership Meet 15s clip', 'sage'),
    ],
    [
      'src' => '/wp-content/uploads/2026/11/knight-frank-clip-2-21s-540px.mp4',
      'poster' => '/wp-content/uploads/2026/11/knight-frank-clip-2-poster.webp',
      'alt' => __('Knight Frank Leadership Meet 21s clip', 'sage'),
    ],
  ];
@endphp

<section id="offsites" class="bg-[#f7f3eb] pb-14 lg:pb-20 scroll-mt-20" aria-labelledby="offsites-heading">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">

    {{-- Section Header --}}
    <div class="mb-10 lg:mb-14 max-w-3xl" data-reveal>
      <h2 id="offsites-heading" class="font-heading text-4xl font-light leading-tight text-brand-primary sm:text-5xl">
        {{ __('Teams that have held offsites at Satori.', 'sage') }}<br>
        <span class="italic font-normal">{{ __('Some come back every year.', 'sage') }}</span>
      </h2>
      <p class="mt-4 text-base leading-7 text-brand-primary/80 sm:text-[16px]">
        {{ __('Leadership meets, strategy days and team retreats, with every home, the kitchen and the lawns to one company at a time.', 'sage') }}
      </p>
    </div>

    {{-- Ruled Logo Grid --}}
    <div class="border-t border-l border-brand-ink/10 grid grid-cols-3 sm:grid-cols-4 lg:grid-cols-7 mb-14 lg:mb-16"
      data-reveal>
      @foreach ($logos as $logo)
        @php
          $hDesk = $logo['h'];
          $wDesk = round($hDesk * $logo['ratio']);
          $hTab = round($hDesk * 0.78);
          $wTab = round($hTab * $logo['ratio']);
          $hMob = round($hDesk * 0.62);
          $wMob = round($hMob * $logo['ratio']);
        @endphp
        <div class="h-20 sm:h-[88px] lg:h-24 border-r border-b border-brand-ink/10 flex items-center justify-center p-3">
          <div title="{{ $logo['name'] }}" class="transition-opacity duration-300 opacity-70 hover:opacity-100" style="
                width: {{ $wMob }}px;
                height: {{ $hMob }}px;
                background-color: #16100C;
                -webkit-mask-image: url('{{ $logo['file'] }}');
                mask-image: url('{{ $logo['file'] }}');
                -webkit-mask-size: contain;
                mask-size: contain;
                -webkit-mask-repeat: no-repeat;
                mask-repeat: no-repeat;
                -webkit-mask-position: center;
                mask-position: center;
              " data-logo-desktop-w="{{ $wDesk }}" data-logo-desktop-h="{{ $hDesk }}" data-logo-tab-w="{{ $wTab }}"
            data-logo-tab-h="{{ $hTab }}" data-logo-mob-w="{{ $wMob }}" data-logo-mob-h="{{ $hMob }}"></div>
        </div>
      @endforeach

      {{-- Blank cell to complete the rectangular grid (7 across on desktop, 4 on tablet; hidden on 3-col mobile where
      27 divides evenly) --}}
      <div
        class="h-20 sm:h-[88px] lg:h-24 border-r border-b border-brand-ink/10 hidden sm:flex items-center justify-center p-3"
        aria-hidden="true"></div>
    </div>

    {{-- Knight Frank Media Row --}}
    <div class="mt-8" data-reveal>
      <div class="flex flex-col lg:flex-row lg:h-[520px] gap-4">
        {{-- Landscape Dinner Photo --}}
        <div class="w-full lg:flex-1 h-[260px] sm:h-[380px] lg:h-[520px] overflow-hidden bg-brand-primary">
          <picture>
            <source media="(max-width: 640px)" srcset="/wp-content/uploads/2026/11/offsite-knight-frank-2000px.webp">
            <img src="/wp-content/uploads/2026/11/offsite-knight-frank-2000px.webp"
              alt="{{ __('Knight Frank Global Leadership Meet at Satori', 'sage') }}" class="w-full h-full object-cover"
              loading="lazy">
          </picture>
        </div>

        {{-- Two 9:16 Video Clips --}}
        <div class="grid grid-cols-2 gap-3 sm:gap-4 shrink-0 lg:w-[596px] lg:h-[520px]">
          @foreach ($videoClips as $clip)
            <div class="relative w-full lg:w-[292px] h-[260px] sm:h-[380px] lg:h-[520px] overflow-hidden bg-[#16100C]">
              <video autoplay muted loop playsinline preload="metadata" poster="{{ $clip['poster'] }}"
                class="w-full h-full object-cover" data-reduced-motion-video aria-label="{{ $clip['alt'] }}">
                <source src="{{ $clip['src'] }}" type="video/mp4">
              </video>
            </div>
          @endforeach
        </div>
      </div>

      {{-- Caption & Link --}}
      <div class="mt-4 flex flex-col sm:flex-row sm:items-baseline sm:justify-between gap-3">
        <p class="text-[0.65rem] sm:text-[0.7rem] uppercase tracking-[0.2em] text-brand-primary/75">
          {{ __('Knight Frank Global Leadership Meet at Satori. One photograph and two clips, 15 and 21 seconds.', 'sage') }}
        </p>

        <a href="{{ home_url('/contact-us/?planning=offsite#enquire-form') }}"
          class="inline-flex items-center text-xs uppercase tracking-[0.2em] text-brand-primary hover:text-brand-gold font-medium transition-colors shrink-0">
          {{ __('Plan an offsite →', 'sage') }}
        </a>
      </div>
    </div>

  </div>
</section>

<style>
  @media (min-width: 640px) and (max-width: 1023px) {
    #offsites [data-logo-tab-w] {
      width: attr(data-logo-tab-w px, auto);
    }
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Responsive dynamic logo sizing based on breakpoints
    function resizeLogos() {
      const isDesktop = window.innerWidth >= 1024;
      const isTablet = window.innerWidth >= 640 && window.innerWidth < 1024;
      const elements = document.querySelectorAll('#offsites [data-logo-desktop-w]');
      elements.forEach(function (el) {
        if (isDesktop) {
          el.style.width = el.dataset.logoDesktopW + 'px';
          el.style.height = el.dataset.logoDesktopH + 'px';
        } else if (isTablet) {
          el.style.width = el.dataset.logoTabW + 'px';
          el.style.height = el.dataset.logoTabH + 'px';
        } else {
          el.style.width = el.dataset.logoMobW + 'px';
          el.style.height = el.dataset.logoMobH + 'px';
        }
      });
    }

    resizeLogos();
    window.addEventListener('resize', resizeLogos);

    // Reduced motion respect for video clips
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      document.querySelectorAll('#offsites [data-reduced-motion-video]').forEach(function (v) {
        v.removeAttribute('autoplay');
        v.pause();
      });
    }
  });
</script>