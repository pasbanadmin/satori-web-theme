@php
  $closingImage = '/wp-content/uploads/2026/08/36_202309051441007901-bcf6382f-142f-4570-85ee-9cdb14a05cc3-scaled.webp';
  $closingAlt = __('The Satori estate at dusk', 'sage');
@endphp

<section
  id="book"
  class="relative flex min-h-screen items-center overflow-hidden bg-brand-primary bg-cover bg-center bg-fixed text-brand-sand"
  style="background-image: url('{{ $closingImage }}');"
  aria-label="{{ $closingAlt }}"
>
  <div class="absolute inset-0 bg-brand-primary/60"></div>

  <div class="relative z-10 mx-auto w-full max-w-4xl px-5 py-28 text-center sm:px-8">
    <h2 class="mx-auto max-w-3xl font-heading text-4xl font-light leading-tight text-brand-sand sm:text-5xl" data-reveal>
      {{ __('Come away lighter than you arrived.', 'sage') }}
    </h2>

    <a class="mt-10 inline-flex items-center justify-center rounded-full bg-brand-sand px-6 py-3 text-[0.8125rem] uppercase tracking-[0.2em] text-brand-primary transition-colors duration-300 hover:bg-brand-gold hover:text-brand-primary" href="#book" data-reveal>
      {{ __('Book Your Stay', 'sage') }}
    </a>
  </div>
</section>
