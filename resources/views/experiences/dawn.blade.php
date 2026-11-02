@php
  $dawnImage = '/wp-content/uploads/2026/11/bird-bulbul-twig.webp';
  $dawnAlt = __('Red-whiskered bulbul at dawn at Satori', 'sage');
@endphp

<section class="bg-[#f7f3eb] pb-14 lg:pb-20">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
    <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-16">
      {{-- Photo Left --}}
      <div class="group relative overflow-hidden" data-reveal>
        <img
          class="aspect-[4/3] w-full object-cover transition-transform duration-[1200ms] ease-out group-hover:scale-105"
          style="aspect-ratio: 4/3; width: 100%; object-fit: cover;"
          src="{{ $dawnImage }}" alt="{{ $dawnAlt }}">
      </div>

      {{-- Text Right --}}
      <div data-reveal>
        <p class="text-[0.75rem] uppercase tracking-[0.3em]">
          <span class="text-brand-gold">01</span>
          <span class="mx-2 text-brand-ink/30" aria-hidden="true">—</span>
          <span class="text-brand-muted">{{ __('Dawn', 'sage') }}</span>
        </p>

        <h2 class="mt-5 font-heading text-3xl font-light leading-tight text-brand-ink sm:text-4xl">
          {{ __('The estate wakes up before you do', 'sage') }}
        </h2>

        <p class="mt-6 max-w-2xl text-base leading-8 text-brand-muted sm:text-[16px]">
          {{ __('Early mornings belong to the birds. Shrikes, babblers, bulbuls and lapwings are regulars on the lawns and in the orchard. Take a cup of tea out and stand still for ten minutes.', 'sage') }}
        </p>

        <div class="mt-8">
          <a
            href="{{ home_url('/the-land') }}"
            class="inline-flex items-center text-xs uppercase tracking-[0.2em] text-brand-primary hover:text-brand-gold font-medium transition-colors"
          >
            {{ __('Walk the land →', 'sage') }}
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

