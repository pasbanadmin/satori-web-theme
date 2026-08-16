<section class="bg-[#f7f3eb] py-16">
  <div class="mx-auto w-full max-w-4xl px-5 text-center sm:px-8">
    <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold" data-reveal>
      {{ __('The Satori Way', 'sage') }}
    </p>

    <span class="mx-auto mt-5 block h-px w-12 bg-brand-gold" data-reveal aria-hidden="true"></span>

    <blockquote class="mt-10 font-heading text-2xl font-light leading-tight text-brand-ink sm:text-3xl" data-reveal>
      {{ __('Satori is a place to feel rested without being rushed, looked after without being managed, and ready to go back without having to explain why you left.', 'sage') }}
    </blockquote>

    <div class="mx-auto my-12 flex items-center justify-center gap-4" data-reveal aria-hidden="true">
      <span class="h-px w-16 bg-brand-ink/15"></span>
      <span class="text-brand-gold">✦</span>
      <span class="h-px w-16 bg-brand-ink/15"></span>
    </div>

    <a class="inline-flex items-center justify-center gap-2 rounded-full border border-brand-ink/30 px-7 py-3.5 text-[0.8125rem] uppercase tracking-[0.2em] text-brand-ink transition-colors duration-300 hover:border-brand-ink hover:bg-brand-ink hover:text-brand-sand"
      href="{{ home_url('/contact-us') }}" data-reveal>
      {{ __('Book Your Stay', 'sage') }}
      <span aria-hidden="true">→</span>
    </a>
  </div>
</section>