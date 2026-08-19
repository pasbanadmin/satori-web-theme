<section id="book" class="bg-brand-primary text-brand-sand">
  <div class="h-px w-full bg-gradient-to-r from-transparent via-brand-gold/60 to-transparent" aria-hidden="true"></div>

  <div class="mx-auto w-full max-w-4xl px-5 py-28 text-center sm:px-8 lg:py-36">
    <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold" data-reveal>
      {{ __('Reservations', 'sage') }}
    </p>

    <h2 class="mt-5 font-heading text-4xl font-light leading-tight text-brand-sand sm:text-5xl" data-reveal>
      {{ $stay['name'] . ' — ' . __('the right home is waiting.', 'sage') }}
    </h2>

    <p class="mx-auto mt-6 max-w-xl text-base leading-8 text-brand-sand/85" data-reveal>
      {{ __('Tell us who is coming and when, and we will help you choose the home that fits your stay.', 'sage') }}
    </p>

    <div class="mt-10 flex flex-wrap items-center justify-center gap-6" data-reveal>
      <a class="inline-flex items-center justify-center rounded-full bg-brand-sand px-6 py-3 text-[0.8125rem] uppercase tracking-[0.2em] text-brand-primary transition-colors duration-300 hover:bg-brand-gold hover:text-brand-primary"
        href="https://www.secure-booking-engine.com/accounts/HXm66tqenYOx-VZR46IBBQ/properties/P9JyVOBiPOXdUDFklZVpVA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/cart/MdEkwhqgGd7N5zhKcIJ7Qw/#!/rooms"
        target="_blank" rel="noopener noreferrer">
        {{ __('Book Your Stay', 'sage') }}
      </a>

      <a class="inline-flex items-center gap-2 text-[0.75rem] uppercase tracking-[0.25em] text-brand-gold transition-colors duration-300 hover:text-brand-sand"
        href="{{ \App\stay_all_stays_url() }}">
        {{ __('Browse All Stays', 'sage') }}
        <span aria-hidden="true">→</span>
      </a>
    </div>
  </div>
</section>