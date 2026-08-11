<section class="bg-[#f7f3eb] pt-14 lg:pt-20">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
    <div class="grid gap-10 border border-brand-ink/10 bg-brand-sand lg:grid-cols-[repeat(20,minmax(0,1fr))]"
      data-reveal>

      {{-- Deli content --}}
      <div class="flex flex-col justify-center px-6 py-10 sm:px-8 sm:py-12 lg:col-span-11 lg:px-10 lg:py-12">
        <div class="flex items-center gap-3 mb-5">
          <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
            {{ __('Estate Deli', 'sage') }}
          </p>
          <span
            class="rounded-full border border-brand-gold/30 bg-brand-gold/10 px-3 py-0.5 text-[0.6rem] uppercase tracking-wider text-brand-gold">
            {{ __('Opening 1 October', 'sage') }}
          </span>
        </div>

        <h2 class="font-heading text-4xl font-light leading-tight text-brand-ink">
          {{ __('The Aviary', 'sage') }}
        </h2>

        <div class="mt-5 h-px w-16 bg-brand-gold" aria-hidden="true"></div>

        <p class="mt-6 max-w-md text-sm leading-6 text-secondary sm:text-[16px] lg:text-sm">
          {{ __('A small estate deli for the hours between meals — house baking, preserves from the orchard, coffee, and things worth carrying home.', 'sage') }}
        </p>
      </div>

      {{-- Decorative panel: pull-quote --}}
      <div
        class="flex flex-col items-center justify-center border-brand-ink/10 bg-brand-primary px-6 py-12 text-center sm:px-8 lg:col-span-9 lg:border-l lg:py-16">
        <p class="font-heading text-2xl font-light italic leading-relaxed text-brand-sand/80 sm:text-3xl">
          &ldquo;{{ __('Things worth carrying home.', 'sage') }}&rdquo;
        </p>
        <span class="mt-6 block h-px w-12 bg-brand-gold/60" aria-hidden="true"></span>
      </div>

    </div>
  </div>
</section>