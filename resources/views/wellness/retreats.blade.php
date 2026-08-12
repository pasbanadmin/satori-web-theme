<section class="bg-[#f7f3eb] py-14 lg:py-20 border-t border-brand-ink/10">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">

    <div class="grid lg:grid-cols-[1fr_auto] gap-10 lg:gap-20 items-center" data-reveal>

      {{-- Left: text block --}}
      <div>
        <div class="flex items-center gap-3 mb-5">
          <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
            {{ __('Hosted Retreats', 'sage') }}
          </p>
          <span
            class="rounded-full border border-brand-gold/30 bg-brand-gold/10 px-3 py-0.5 text-[0.6rem] uppercase tracking-wider text-brand-gold">
            {{ __('By arrangement', 'sage') }}
          </span>
        </div>

        <h2 class="font-heading text-4xl font-light leading-tight text-brand-ink sm:text-5xl max-w-2xl">
          {{ __('Retreats hosted at Satori', 'sage') }}
        </h2>

        <div class="mt-5 h-px w-16 bg-brand-gold" aria-hidden="true"></div>

        <p class="mt-6 max-w-xl text-base leading-8 text-brand-muted">
          {{ __('The estate hosts visiting wellness practitioners and retreat groups through the year, taking the whole property or part of it. If you run retreats and are looking for a setting that does half the work for you, we should talk.', 'sage') }}
        </p>
      </div>

      {{-- Right: CTA --}}
      <div class="shrink-0">
        <a href="{{ home_url('/contact-us/#enquire-form') }}"
          class="inline-flex items-center gap-2 rounded-full border border-brand-ink/25 px-6 py-3 text-[0.8125rem] uppercase tracking-[0.2em] text-brand-ink transition-colors duration-300 hover:border-brand-gold hover:text-brand-gold group whitespace-nowrap">
          {{ __('Enquire About Hosting', 'sage') }}
          <span class="inline-block transition-transform duration-300 group-hover:translate-x-1.5"
            aria-hidden="true">→</span>
        </a>
      </div>

    </div>

  </div>
</section>