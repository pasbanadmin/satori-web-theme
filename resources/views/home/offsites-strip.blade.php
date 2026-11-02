@php
  $stripLogos = [
    ['name' => 'Amazon', 'file' => '/wp-content/uploads/2026/11/amazon.svg', 'w' => 56, 'h' => 17],
    ['name' => 'Google', 'file' => '/wp-content/uploads/2026/11/google.svg', 'w' => 53, 'h' => 18],
    ['name' => 'McKinsey & Company', 'file' => '/wp-content/uploads/2026/11/mckinsey.svg', 'w' => 96, 'h' => 12],
    ['name' => 'EY', 'file' => '/wp-content/uploads/2026/11/ey.svg', 'w' => 24, 'h' => 24],
    ['name' => 'Decathlon', 'file' => '/wp-content/uploads/2026/11/decathlon.svg', 'w' => 65, 'h' => 13],
    ['name' => 'Concentrix', 'file' => '/wp-content/uploads/2026/11/concentrix.svg', 'w' => 78, 'h' => 12],
    ['name' => 'Knight Frank', 'file' => '/wp-content/uploads/2026/11/knight-frank.svg', 'w' => 51, 'h' => 20],
  ];
@endphp

<section aria-labelledby="offsites-band-heading" class="px-6 py-10 md:py-14 lg:px-12 bg-[#f7f3eb]">
  <div
    class="mx-auto grid max-w-[1400px] gap-x-12 gap-y-8 border-y border-border py-10 md:py-12 xl:grid-cols-[auto_1fr_auto] xl:items-center">

    {{-- Left: Heading --}}
    <div data-animate="true" class="max-w-sm xl:max-w-[19rem]">
      <h2 id="offsites-band-heading"
        class="text-balance font-display italic leading-[1.2] text-foreground text-2xl md:text-[1.4rem] font-light">
        {{ __('Offsites at Satori Mulshi.', 'sage') }}
      </h2>
    </div>

    {{-- Middle: 7 Logos --}}
    <div data-animate="true" class="text-foreground/70">
      <ul role="list" aria-label="{{ __('Teams that have held offsites at Satori', 'sage') }}"
        class="flex flex-wrap items-center gap-x-8 gap-y-6 md:gap-x-10 lg:gap-x-12">
        @foreach ($stripLogos as $logo)
          <li class="flex items-center" title="{{ $logo['name'] }}">
            <div class="transition-opacity duration-300 opacity-70 hover:opacity-100" style="
                  width: {{ $logo['w'] }}px;
                  height: {{ $logo['h'] }}px;
                  background-color: #16100C;
                  -webkit-mask-image: url('{{ $logo['file'] }}');
                  mask-image: url('{{ $logo['file'] }}');
                  -webkit-mask-size: contain;
                  mask-size: contain;
                  -webkit-mask-repeat: no-repeat;
                  mask-repeat: no-repeat;
                  -webkit-mask-position: center;
                  mask-position: center;
                "></div>
          </li>
        @endforeach
      </ul>
    </div>

    {{-- Right: Link to Gatherings #offsites --}}
    <div data-animate="true">
      <a class="group inline-flex min-h-11 items-center border-b border-foreground/30 pb-1 font-label text-[0.65rem] tracking-[0.2em] text-foreground transition-colors duration-300 hover:border-gold hover:text-earth"
        href="{{ home_url('/gatherings#offsites') }}">
        {{ __('See who has held theirs here', 'sage') }}<span aria-hidden="true"
          class="ml-3 transition-transform duration-300 group-hover:translate-x-1">→</span>
      </a>
    </div>

  </div>
</section>