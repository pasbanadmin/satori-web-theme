<section id="book" class="relative overflow-hidden bg-[#1a291e] text-brand-sand">
  <div class="relative z-10 mx-auto w-full max-w-3xl px-5 py-16 text-center sm:px-8 sm:py-20">
    {{-- Brand Heading --}}
    <h2 class="font-heading text-2xl sm:text-3xl font-light uppercase tracking-[0.3em] text-brand-sand" data-reveal>
      {{ __('SATORI', 'sage') }}
    </h2>

    {{-- Line 2 in italics --}}
    <p class="mt-4 font-heading text-2xl sm:text-3xl italic font-light text-brand-gold" data-reveal>
      {{ __('A moment of seeing differently.', 'sage') }}
    </p>

    {{-- Body copy --}}
    <div class="mt-8 space-y-6 text-base leading-7 text-brand-sand/85 sm:text-lg sm:leading-8" data-reveal>
      <p>
        {{ __('Perhaps that is all a good retreat needs to offer.', 'sage') }}
      </p>

      <p class="space-y-1">
        <span class="block">{{ __('A little distance from the familiar.', 'sage') }}</span>
        <span class="block">{{ __('A little more time than usual.', 'sage') }}</span>
        <span class="block">{{ __('A little less noise.', 'sage') }}</span>
      </p>

      <p class="space-y-1">
        <span class="block">{{ __('And, somewhere between arriving and leaving,', 'sage') }}</span>
        <span class="block">{{ __('a little more space within you.', 'sage') }}</span>
      </p>
    </div>

    {{-- Gold Book Your Stay CTA --}}
    <div class="mt-10" data-reveal>
      <a class="inline-flex items-center justify-center rounded-full bg-brand-gold px-8 py-3.5 text-[0.8125rem] font-medium uppercase tracking-[0.2em] text-brand-primary transition-colors duration-300 hover:bg-brand-sand hover:text-brand-primary"
        href="https://www.secure-booking-engine.com/accounts/HXm66tqenYOx-VZR46IBBQ/properties/P9JyVOBiPOXdUDFklZVpVA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/cart/MdEkwhqgGd7N5zhKcIJ7Qw/#!/rooms"
        target="_blank" rel="noopener noreferrer">
        {{ __('Book Your Stay', 'sage') }}
      </a>
    </div>
  </div>
</section>