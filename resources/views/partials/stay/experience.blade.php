<section class="bg-brand-primary pb-24 text-brand-sand lg:pb-28">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
    <div class="grid gap-12 lg:grid-cols-12 lg:gap-16">
      <div class="flex flex-col justify-center lg:col-span-5" data-reveal>
        <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
          {{ __('The Experience', 'sage') }}
        </p>

        <h2 class="mt-4 max-w-md font-heading text-4xl font-light leading-tight text-brand-sand">
          {{ $stay['experience']['title'] }}
        </h2>

        <div class="mt-7 h-px w-16 bg-brand-gold" aria-hidden="true"></div>

        @foreach ($stay['experience']['paragraphs'] as $paragraph)
          <p class="{{ $loop->first ? 'mt-7' : 'mt-4' }} max-w-lg text-base leading-8 text-brand-sand/85 sm:text-[16px]">
            {{ $paragraph }}
          </p>
        @endforeach
      </div>

      <div class="group relative overflow-hidden lg:col-span-7" data-reveal>
        <img
          class="aspect-[4/3] w-full object-cover transition-transform duration-[1200ms] ease-out group-hover:scale-105 lg:aspect-[16/11]"
          src="{{ $stay['experience']['image'] }}"
          alt="{{ $stay['experience']['title'] . ' — ' . $stay['name'] }}"
          loading="lazy"
        >
      </div>
    </div>
  </div>
</section>
