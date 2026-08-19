<section class="relative flex min-h-screen items-center overflow-hidden bg-brand-primary text-brand-sand" data-stays-hero>
  @if (!empty($stay['hero_video']))
    <video
      class="absolute inset-0 h-full w-full object-cover"
      src="{{ $stay['hero_video'] }}"
      poster="{{ $stay['hero_image'] }}"
      autoplay
      muted
      loop
      playsinline
      preload="metadata"
      aria-hidden="true"
      tabindex="-1"
    ></video>
  @else
    <img
      class="absolute inset-0 h-full w-full object-cover {{ $stay['hero_position'] }}"
      src="{{ $stay['hero_image'] }}"
      alt="{{ $stay['name'] }}"
      data-stays-hero-image
    >
  @endif

  <div class="absolute inset-0 bg-gradient-to-t from-brand-primary/85 via-brand-primary/35 to-brand-primary/15" aria-hidden="true"></div>

  <div class="relative z-10 mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16" data-stays-hero-item>
    <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
      {{ __('Satori · ', 'sage') }}{{ $stay['category'] }}
    </p>

    <h1 class="mt-4 max-w-4xl font-heading text-5xl font-light leading-none text-brand-sand sm:text-6xl lg:text-7xl">
      {{ $stay['name'] }}
    </h1>

    <p class="mt-6 max-w-2xl font-heading text-2xl font-light leading-snug text-brand-sand/90 sm:text-3xl">
      {{ $stay['tagline'] }}
    </p>

    <div class="mt-10 flex flex-wrap items-center gap-6">
      <a class="inline-flex items-center gap-2 rounded-full bg-brand-sand px-6 py-3 text-[0.8125rem] uppercase tracking-[0.2em] text-brand-primary transition-colors duration-300 hover:bg-brand-gold hover:text-brand-primary" href="#book">
        {{ __('Book This Stay', 'sage') }}
        <span aria-hidden="true">→</span>
      </a>

      <a class="inline-flex items-center gap-2 text-[0.75rem] uppercase tracking-[0.25em] text-brand-gold transition-colors duration-300 hover:text-brand-sand" href="{{ $allStaysUrl }}">
        {{ __('All Stays', 'sage') }}
        <span aria-hidden="true">→</span>
      </a>
    </div>
  </div>

  <div class="absolute bottom-0 right-20 z-10 hidden items-center gap-3 pb-10 lg:flex" data-stays-hero-item aria-hidden="true">
    <span class="block h-12 w-px bg-gradient-to-b from-brand-gold to-transparent"></span>
    <span class="text-[0.65rem] uppercase tracking-[0.3em] text-brand-sand/60">
      {{ __('Scroll', 'sage') }}
    </span>
  </div>
</section>
