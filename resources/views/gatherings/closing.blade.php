<section id="book" class="bg-[#f7f3eb] py-16 lg:py-24 text-center border-t border-brand-ink/10" aria-labelledby="closing-heading">
  <div class="mx-auto w-full max-w-3xl px-5 sm:px-8">
    <p class="text-[0.75rem] uppercase tracking-[0.3em] text-gold-ink font-medium" data-reveal>
      {{ __('Buyouts & Gatherings', 'sage') }}
    </p>

    <h2 id="closing-heading" class="mt-4 font-heading text-4xl sm:text-5xl lg:text-6xl font-light leading-tight text-brand-primary" data-reveal>
      {{ __('Plan a Gathering', 'sage') }}
    </h2>

    <div class="mx-auto my-6 h-px w-16 bg-brand-gold" aria-hidden="true" data-reveal></div>

    <p class="mx-auto max-w-xl text-base sm:text-lg leading-relaxed text-brand-primary/80" data-reveal>
      {{ __('Tell us the occasion, the dates and the headcount, and we\'ll reply personally with bespoke buyout availability and dining options.', 'sage') }}
    </p>

    <div class="mt-8 sm:mt-10 flex flex-col sm:flex-row items-center justify-center gap-4" data-reveal>
      <a href="{{ home_url('/contact-us/?planning=Celebration+or+wedding#enquire-form') }}"
        class="inline-flex items-center justify-center rounded-full bg-brand-primary text-brand-sand px-8 py-3.5 text-[0.8125rem] font-medium uppercase tracking-[0.2em] transition-all duration-300 hover:bg-brand-gold hover:text-brand-primary shadow-sm">
        {{ __('Plan a Gathering', 'sage') }}
      </a>
    </div>
  </div>
</section>
