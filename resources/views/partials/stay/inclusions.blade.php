<section class="bg-brand-sand py-24 lg:py-28">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
    <div class="grid gap-14 lg:grid-cols-12 lg:gap-16">
      <div class="lg:col-span-4" data-reveal>
        <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
          {{ __('Inclusions', 'sage') }}
        </p>

        <h2 class="mt-4 max-w-sm font-heading text-4xl font-light leading-tight text-brand-ink">
          {{ __('What your stay includes.', 'sage') }}
        </h2>

        <p class="mt-6 max-w-sm text-base leading-8 text-brand-muted sm:text-[16px]">
          {{ __('The same care, everywhere on the estate.', 'sage') }}
        </p>
      </div>

      <ul class="lg:col-span-8" data-reveal>
        @foreach ($stay['inclusions'] as $inclusion)
          <li class="flex items-baseline gap-5 border-b border-brand-ink/10 py-5 last:border-b-0">
            <span class="inline-block h-px w-8 shrink-0 bg-brand-gold" aria-hidden="true"></span>
            <span class="text-base leading-7 text-brand-ink sm:text-[16px]">
              {{ $inclusion }}
            </span>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</section>
