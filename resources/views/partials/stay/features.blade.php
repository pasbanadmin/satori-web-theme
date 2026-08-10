<section class="bg-brand-primary py-24 text-brand-sand lg:py-28">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
    <div class="grid gap-14 lg:grid-cols-12 lg:gap-16">
      <div class="lg:col-span-4" data-reveal>
        <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
          {{ __('Key Features', 'sage') }}
        </p>

        <h2 class="mt-4 max-w-sm font-heading text-4xl font-light leading-tight text-brand-sand">
          {{ __('Everything the home includes.', 'sage') }}
        </h2>

        <div class="mt-7 h-px w-16 bg-brand-gold" aria-hidden="true"></div>
      </div>

      <ul class="grid gap-x-14 gap-y-8 sm:grid-cols-2 lg:col-span-8 lg:gap-y-10" data-reveal>
        @foreach ($stay['features'] as $feature)
          <li class="flex items-baseline gap-5 border-t border-brand-sand/15 pt-5">
            <span class="font-heading text-base font-light text-brand-gold">
              {{ sprintf('%02d', $loop->iteration) }}
            </span>

            <span class="text-base leading-7 text-brand-sand/90 sm:text-[16px]">
              {{ $feature }}
            </span>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</section>
