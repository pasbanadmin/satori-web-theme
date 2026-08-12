@php
  $monsoonImage = '/wp-content/uploads/2026/08/Monsoon-band-—-lake-shore.webp';
  $monsoonAlt = __('The Sahyadris in the monsoon, green and full of rain', 'sage');
@endphp

<section id="monsoon"
  class="relative flex min-h-screen items-center overflow-hidden bg-brand-primary bg-cover bg-center bg-scroll text-brand-sand md:bg-fixed"
  style="background-image: url('{{ $monsoonImage }}');" aria-label="{{ $monsoonAlt }}">
  <div class="absolute inset-0 bg-brand-primary/65"></div>

  <div class="relative z-10 mx-auto w-full max-w-4xl px-5 py-28 text-center sm:px-8" data-reveal>
    <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
      {{ __('The Monsoon', 'sage') }}
    </p>

    <h2 class="mx-auto mt-6 max-w-3xl font-heading text-4xl font-light leading-tight text-brand-sand sm:text-5xl">
      {{ __('Come in the rain. Genuinely.', 'sage') }}
    </h2>

    <p class="mx-auto mt-8 max-w-2xl text-base leading-8 text-brand-sand/85 sm:text-lg">
      {{ __('Between June and September the Sahyadris do the thing they are famous for. The lake fills, the hills go green in a way photographs consistently fail at, waterfalls appear where there were none, and the whole estate smells of wet earth.', 'sage') }}
    </p>

    <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-brand-sand/85 sm:text-lg">
      {{ __('The verandahs were built for this. So was the monsoon rate.', 'sage') }}
    </p>

    <a class="mt-12 inline-flex items-center justify-center gap-2 rounded-full bg-brand-sand px-6 py-3 text-[0.8125rem] uppercase tracking-[0.2em] text-brand-primary transition-colors duration-300 hover:bg-brand-gold hover:text-brand-primary"
      href="{{ home_url('/stays') }}" data-reveal>
      {{ __('See Monsoon Stays', 'sage') }}
      <span aria-hidden="true">→</span>
    </a>
  </div>
</section>