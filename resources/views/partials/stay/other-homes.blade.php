<section class="bg-brand-sand py-24 lg:py-28">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
    <div class="mb-14 flex flex-wrap items-end justify-between gap-6 lg:mb-20" data-reveal>
      <div>
        <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
          {{ __('Other Homes', 'sage') }}
        </p>

        <h2 class="mt-4 max-w-2xl font-heading text-4xl font-light leading-tight text-brand-ink">
          {{ __('Find your way to another stay.', 'sage') }}
        </h2>
      </div>

      <a class="inline-flex items-center gap-2 text-[0.75rem] uppercase tracking-[0.25em] text-brand-gold transition-colors duration-300 hover:text-brand-ink" href="{{ \App\stay_all_stays_url() }}">
        {{ __('All Stays', 'sage') }}
        <span aria-hidden="true">→</span>
      </a>
    </div>

    <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3 lg:gap-8">
      @foreach ($homes as $home)
        <article class="group" data-reveal>
          <a class="block overflow-hidden bg-brand-primary" href="{{ $home['url'] }}" aria-label="{{ $home['name'] }}">
            <img
              class="aspect-[4/5] w-full object-cover transition-transform duration-[1200ms] ease-out group-hover:scale-105"
              src="{{ $home['image'] }}"
              alt="{{ $home['name'] }}"
              loading="lazy"
            >
          </a>

          <div class="pt-7">
            <p class="text-[0.7rem] uppercase tracking-[0.25em] text-brand-gold">
              {{ $home['setting'] }}
            </p>

            <h3 class="mt-2 font-heading text-2xl font-light text-brand-ink">
              {{ $home['name'] }}
            </h3>

            <div class="mt-5 flex items-center justify-between gap-4 border-t border-brand-ink/10 pt-5">
              <p class="text-[0.7rem] uppercase tracking-[0.25em] text-brand-muted">
                {{ sprintf(__('Sleeps %d', 'sage'), $home['sleeps']) }}
              </p>

              <p class="text-right text-[0.7rem] uppercase tracking-[0.25em] text-brand-muted">
                {{ __('From', 'sage') }}
                <span class="text-brand-ink">
                  {{ $home['price'] ? '₹' . number_format($home['price']) : __('On enquiry', 'sage') }}
                </span>
              </p>
            </div>

            <a class="mt-6 inline-flex items-center gap-2 text-[0.75rem] uppercase tracking-[0.25em] text-brand-gold transition-colors duration-300 hover:text-brand-ink" href="{{ $home['url'] }}">
              {{ __('Discover', 'sage') }}
              <span class="inline-block transition-transform duration-300 group-hover:translate-x-1.5" aria-hidden="true">→</span>
            </a>
          </div>
        </article>
      @endforeach
    </div>
  </div>
</section>
