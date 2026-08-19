<div>
  {{-- Meal Plans --}}
  <section class="bg-[#f7f3eb] lg:py-20 py-14">
    <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
      <div class="grid items-center gap-10 border border-brand-ink/10 bg-brand-sand lg:grid-cols-2" data-reveal>

        <div class="px-6 py-10 sm:px-8 sm:py-12 lg:px-10 lg:py-12">
          <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
            {{ __('Meal Plans', 'sage') }}
          </p>

          <h2 class="mt-4 font-heading text-4xl font-light leading-tight text-brand-ink">
            {{ __('Every stay begins with breakfast.', 'sage') }}
          </h2>

          <div class="mt-5 h-px w-16 bg-brand-gold" aria-hidden="true"></div>

          <p class="mt-6 max-w-lg text-sm leading-7 text-secondary sm:text-[16px] lg:text-sm">
            {{ __('Full-board and half-board plans can be added at the time of booking, and are the easier choice for longer stays — there is nowhere else to eat for some distance, and frankly nowhere you would rather.', 'sage') }}
          </p>

          <a href="{{ home_url('/contact-us') }}"
            class="mt-8 inline-flex items-center gap-2 rounded-full border border-brand-gold px-6 py-3 text-[0.8125rem] uppercase tracking-[0.2em] text-brand-gold transition-colors duration-300 hover:bg-brand-gold hover:text-brand-primary group">
            {{ __('Ask About Meal Plans', 'sage') }}
            <span class="inline-block transition-transform duration-300 group-hover:translate-x-1.5"
              aria-hidden="true">→</span>
          </a>
        </div>

        {{-- Stat pills --}}
        <div
          class="flex flex-col items-start gap-5 border-brand-ink/10 px-6 pb-10 sm:px-8 lg:border-l lg:px-10 lg:py-12 lg:pb-0">
          <p class="text-[0.7rem] uppercase tracking-[0.25em] text-brand-muted">
            {{ __('What\'s included', 'sage') }}
          </p>

          @foreach ([
              __('Estate breakfast, every morning', 'sage'),
              __('Half-board — breakfast & dinner', 'sage'),
              __('Full-board — all meals on the estate', 'sage'),
              __('Children\'s meals and special requests on notice', 'sage'),
            ] as $item)
            <div class="flex items-center gap-4 border-t border-brand-ink/10 pt-5 first:border-0 first:pt-0 w-full">
              <span class="mt-0.5 inline-block h-1 w-1 shrink-0 rounded-full bg-brand-gold" aria-hidden="true"></span>
              <span class="text-sm leading-6 text-primary">{{ $item }}</span>
            </div>
          @endforeach
        </div>

      </div>
    </div>
  </section>

  {{-- Closing CTA --}}
  <section id="book" class="bg-brand-primary text-brand-sand">
    <div class="mx-auto w-full max-w-4xl px-5 py-28 text-center sm:px-8">
      <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold" data-reveal>
        {{ __('Reservations', 'sage') }}
      </p>

      <h2 class="mt-5 font-heading text-4xl font-light leading-tight text-brand-sand" data-reveal>
        {{ __('Come for the food. Stay for everything else.', 'sage') }}
      </h2>

      <p class="mx-auto mt-6 max-w-xl text-base leading-8 text-brand-sand/80" data-reveal>
        {{ __('Tell us when you are coming and we will take care of the rest.', 'sage') }}
      </p>

      <a href="https://www.secure-booking-engine.com/accounts/HXm66tqenYOx-VZR46IBBQ/properties/P9JyVOBiPOXdUDFklZVpVA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/cart/MdEkwhqgGd7N5zhKcIJ7Qw/#!/rooms"
        target="_blank" rel="noopener noreferrer"
        class="mt-10 inline-flex items-center justify-center rounded-full bg-brand-sand px-6 py-3 text-[0.8125rem] uppercase tracking-[0.2em] text-brand-primary transition-colors duration-300 hover:bg-brand-gold hover:text-brand-primary"
        data-reveal>
        {{ __('Book Your Stay', 'sage') }}
      </a>
    </div>
  </section>
</div>