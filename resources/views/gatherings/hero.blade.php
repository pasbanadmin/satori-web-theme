@php
  $heroImage = '/wp-content/uploads/2026/11/01_gatherings-hero_nest-long-table.webp';
  $heroAlt = __('The long table in The Nest at Satori, set for a full-estate gathering', 'sage');
@endphp

<section class="relative flex min-h-[calc(100vh-7rem)] items-end overflow-hidden bg-brand-primary text-brand-sand"
  aria-labelledby="gatherings-hero-heading"
  data-gatherings-hero>
  <img class="absolute inset-0 h-full w-full object-cover" src="{{ $heroImage }}" alt="{{ $heroAlt }}" style="object-position: center 60%; width: 100%; height: 100%; object-fit: cover;" fetchpriority="high" data-hero-image>

  {{-- Multi-stop bottom gradient + localized vignette to keep upper room bright while providing deep contrast for text --}}
  <div class="absolute inset-0"
    style="background: radial-gradient(circle at 20% 85%, rgba(16, 12, 9, 0.55) 0%, rgba(16, 12, 9, 0) 65%), linear-gradient(to top, rgba(16, 12, 9, 0.92) 0%, rgba(16, 12, 9, 0.78) 25%, rgba(16, 12, 9, 0.48) 48%, rgba(16, 12, 9, 0.15) 68%, rgba(16, 12, 9, 0) 85%); pointer-events: none;">
  </div>

  <div class="relative z-10 mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16 pb-14 lg:pb-20" data-hero-item>
    <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold mb-3 font-medium"
      style="text-shadow: 0 1px 10px rgba(0, 0, 0, 0.9), 0 2px 4px rgba(0, 0, 0, 0.7);">
      {{ __('Full estate buyout', 'sage') }}
    </p>

    <h1 id="gatherings-hero-heading"
      class="font-heading text-5xl font-light leading-none text-brand-sand sm:text-6xl lg:text-7xl"
      style="text-shadow: 0 2px 24px rgba(0, 0, 0, 0.95), 0 1px 6px rgba(0, 0, 0, 0.8);">
      {{ __('GATHERINGS', 'sage') }}
    </h1>

    <div class="mt-4 flex items-center gap-8">
      <p class="max-w-2xl md:text-2xl text-lg leading-8 text-brand-sand font-heading"
        style="text-shadow: 0 1px 16px rgba(0, 0, 0, 0.9), 0 1px 4px rgba(0, 0, 0, 0.7);">
        {{ __('Twenty-one rooms. Up to sixty guests. One estate.', 'sage') }}
      </p>
    </div>
  </div>

  <div class="absolute bottom-0 right-20 z-10 hidden items-center gap-3 pb-10 lg:flex" data-hero-item aria-hidden="true">
    <span class="block h-12 w-px bg-gradient-to-b from-brand-gold to-transparent"></span>
    <span class="text-[0.65rem] uppercase tracking-[0.3em] text-brand-sand/75"
      style="text-shadow: 0 1px 8px rgba(0, 0, 0, 0.85);">
      {{ __('Scroll', 'sage') }}
    </span>
  </div>
</section>
