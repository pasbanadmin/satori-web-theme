@php
  $closingImage = '/wp-content/uploads/2026/08/01-Woodhouse-at-dusk-—-the-signature-shot.webp';
  $closingAlt = __('The Satori estate at dusk', 'sage');
@endphp

<section id="book"
  class="relative flex min-h-screen items-center overflow-hidden bg-brand-primary bg-cover bg-center bg-fixed text-brand-sand"
  style="background-image: url('{{ $closingImage }}');" aria-label="{{ $closingAlt }}">
  <div class="absolute inset-0 bg-brand-primary/60"></div>

  <div class="relative z-10 mx-auto w-full max-w-4xl px-5 py-28 text-center sm:px-8">
    <h2 class="mx-auto max-w-3xl font-heading text-4xl font-light leading-tight text-brand-sand sm:text-5xl"
      data-reveal>
      {{ __('Come away lighter than you arrived.', 'sage') }}
    </h2>

    <a class="mt-10 inline-flex items-center justify-center rounded-full bg-brand-sand px-6 py-3 text-[0.8125rem] uppercase tracking-[0.2em] text-brand-primary transition-colors duration-300 hover:bg-brand-gold hover:text-brand-primary"
      href="https://www.secure-booking-engine.com/accounts/HXm66tqenYOx-VZR46IBBQ/properties/P9JyVOBiPOXdUDFklZVpVA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/cart/MdEkwhqgGd7N5zhKcIJ7Qw/#!/rooms"
      target="_blank" rel="noopener noreferrer" data-reveal>
      {{ __('Book Your Stay', 'sage') }}
    </a>
  </div>
</section>