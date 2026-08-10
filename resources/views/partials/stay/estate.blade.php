<section class="bg-brand-primary py-24 text-brand-sand lg:py-28">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
    <div class="mb-14 lg:mb-20" data-reveal>
      <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
        {{ __('The Estate', 'sage') }}
      </p>

      <h2 class="mt-4 max-w-2xl font-heading text-4xl font-light leading-tight text-brand-sand">
        {{ __('Everything else, at your doorstep.', 'sage') }}
      </h2>
    </div>

    <ul class="grid border-t border-brand-sand/15 lg:grid-cols-4" data-reveal>
      @foreach ($experiences as $experience)
        <li>
          <a class="group block border-b border-brand-sand/15 px-1 py-10 transition-colors duration-300 hover:bg-brand-sand/[0.03] lg:border-b-0 lg:border-r lg:px-8 lg:py-4 lg:last:border-r-0" href="{{ $experience['url'] }}">
            <p class="font-heading text-base font-light text-brand-gold">
              {{ sprintf('%02d', $loop->iteration) }}
            </p>

            <p class="mt-10 font-heading text-2xl font-light text-brand-sand">
              {{ $experience['name'] }}
            </p>

            <p class="mt-4 max-w-[16rem] text-sm leading-7 text-brand-sand/70">
              {{ $experience['description'] }}
            </p>

            <p class="mt-6 inline-flex items-center gap-2 text-[0.75rem] uppercase tracking-[0.25em] text-brand-gold transition-colors duration-300 group-hover:text-brand-sand">
              {{ __('Explore', 'sage') }}
              <span class="inline-block transition-transform duration-300 group-hover:translate-x-1.5" aria-hidden="true">→</span>
            </p>
          </a>
        </li>
      @endforeach
    </ul>
  </div>
</section>
