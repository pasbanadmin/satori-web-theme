<section class="bg-[#f7f3eb] py-16 lg:py-24">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">

    {{-- ── 10.2 Two Paths Section ── --}}
    <div class="grid gap-8 lg:grid-cols-2 lg:gap-12">

      {{-- Card A: Book a home --}}
      <div
        class="flex flex-col justify-between border border-brand-ink/15 bg-white p-8 sm:p-10 transition-shadow duration-300 hover:shadow-lg">
        <div>
          <p class="text-[0.7rem] uppercase tracking-[0.25em] text-brand-gold font-medium">
            {{ __('Direct Booking', 'sage') }}
          </p>
          <h2 class="mt-3 font-heading text-3xl font-light leading-snug text-brand-ink">
            {{ __('Book a stay', 'sage') }}
          </h2>
          <p class="mt-4 text-base leading-7 text-brand-muted">
            {{ __('Choose your dates, pick your stay, confirm in a minute. Direct rates are the best available.', 'sage') }}
          </p>
        </div>

        <div class="mt-8 pt-6 border-t border-brand-ink/10">
          <a href="https://www.secure-booking-engine.com/accounts/HXm66tqenYOx-VZR46IBBQ/properties/P9JyVOBiPOXdUDFklZVpVA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/cart/MdEkwhqgGd7N5zhKcIJ7Qw/#!/rooms"
            target="_blank" rel="noopener noreferrer"
            class="inline-flex items-center justify-center gap-2 rounded-full bg-brand-gold px-7 py-3.5 text-xs uppercase tracking-[0.2em] font-medium text-brand-primary transition-colors duration-300 hover:bg-brand-primary hover:text-brand-sand">
            {{ __('Check Availability', 'sage') }}
            <span aria-hidden="true">→</span>
          </a>
        </div>
      </div>

      {{-- Card B: Enquire about the estate --}}
      <div
        class="flex flex-col justify-between border border-brand-gold/40 bg-brand-sand p-8 sm:p-10 transition-shadow duration-300 hover:shadow-lg">
        <div>
          <p class="text-[0.7rem] uppercase tracking-[0.25em] text-brand-gold font-medium">
            {{ __('Gatherings & Buyouts', 'sage') }}
          </p>
          <h2 class="mt-3 font-heading text-3xl font-light leading-snug text-brand-ink">
            {{ __('Enquire about the estate', 'sage') }}
          </h2>
          <p class="mt-4 text-base leading-7 text-brand-muted">
            {{ __('For buyouts, weddings, reunions, offsites and hosted group stays. We will call you back the same day.', 'sage') }}
          </p>
        </div>

        <div class="mt-8 pt-6 border-t border-brand-ink/10">
          <a href="#enquire-form"
            class="inline-flex items-center justify-center gap-2 rounded-full border border-brand-ink/30 px-7 py-3.5 text-xs uppercase tracking-[0.2em] font-medium text-brand-ink transition-colors duration-300 hover:border-brand-gold hover:bg-brand-gold hover:text-brand-primary">
            {{ __('Send an Enquiry', 'sage') }}
            <span aria-hidden="true">↓</span>
          </a>
        </div>
      </div>

    </div>

    {{-- ── 10.3 Why Book Direct Section ── --}}
    <div class="mt-16 lg:mt-24 border-t border-brand-ink/15 pt-14 lg:pt-20" data-reveal>
      <div class="text-center max-w-2xl mx-auto">
        <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
          {{ __('Direct Privileges', 'sage') }}
        </p>
        <h3 class="mt-3 font-heading text-3xl font-light text-brand-ink">
          {{ __('Why book direct with Satori', 'sage') }}
        </h3>
      </div>

      <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
        <div class="border border-brand-ink/10 bg-white/60 p-6 text-center">
          <div
            class="mx-auto flex h-10 w-10 items-center justify-center rounded-full bg-brand-gold/15 text-brand-gold mb-4">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <h4 class="font-heading text-lg font-light text-brand-ink">
            {{ __('Best available rate, guaranteed', 'sage') }}
          </h4>
        </div>

        <div class="border border-brand-ink/10 bg-white/60 p-6 text-center">
          <div
            class="mx-auto flex h-10 w-10 items-center justify-center rounded-full bg-brand-gold/15 text-brand-gold mb-4">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>
          </div>
          <h4 class="font-heading text-lg font-light text-brand-ink">
            {{ __('First choice of stays', 'sage') }}
          </h4>
        </div>

        <div class="border border-brand-ink/10 bg-white/60 p-6 text-center">
          <div
            class="mx-auto flex h-10 w-10 items-center justify-center rounded-full bg-brand-gold/15 text-brand-gold mb-4">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <h4 class="font-heading text-lg font-light text-brand-ink">
            {{ __('Flexible arrival and departure where calendar allows', 'sage') }}
          </h4>
        </div>

        <div class="border border-brand-ink/10 bg-white/60 p-6 text-center">
          <div
            class="mx-auto flex h-10 w-10 items-center justify-center rounded-full bg-brand-gold/15 text-brand-gold mb-4">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
            </svg>
          </div>
          <h4 class="font-heading text-lg font-light text-brand-ink">
            {{ __('One point of contact from booking to check-out', 'sage') }}
          </h4>
        </div>
      </div>
    </div>

  </div>
</section>