<div>
  {{-- Closing CTA — full dark, centred, let the quote breathe --}}
  <section id="book" class="bg-brand-primary text-brand-sand">
    <div class="mx-auto w-full max-w-4xl px-5 py-16 lg:py-20 text-center sm:px-8">
      <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold" data-reveal>
        {{ __('Wellness & Spa', 'sage') }}
      </p>

      <h2 class="mt-6 font-heading text-4xl font-light leading-tight text-brand-sand sm:text-5xl lg:text-6xl"
        data-reveal>
        {{ __('The goal here is not optimisation.', 'sage') }}
        <span class="">{{ __('It is rest.', 'sage') }}</span>
      </h2>

      <div class="mx-auto mt-10 h-px w-16 bg-brand-gold/50" aria-hidden="true" data-reveal></div>

      <p class="mx-auto mt-8 max-w-md text-base leading-8 text-brand-sand/60" data-reveal>
        {{ __('With the land, with the pace, and with whatever you actually came here to step away from.', 'sage') }}
      </p>

      <a href="{{ home_url('/contact-us') }}"
        class="mt-10 inline-flex items-center justify-center rounded-full bg-brand-sand px-8 py-3.5 text-[0.8125rem] uppercase tracking-[0.2em] text-brand-primary transition-colors duration-300 hover:bg-brand-gold"
        data-reveal>
        {{ __('Book Your Stay', 'sage') }}
      </a>
    </div>
  </section>
</div>