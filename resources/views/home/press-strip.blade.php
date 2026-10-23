<section aria-labelledby="press-band-heading" class="px-6 pb-20 md:pb-28 lg:px-12 bg-[#f7f3eb]">
  <div
    class="mx-auto grid max-w-[1400px] gap-x-14 gap-y-8 border-y border-border py-10 md:py-12 xl:grid-cols-[auto_1fr_auto] xl:items-center">
    <div data-animate="true" class="max-w-sm xl:max-w-[19rem]">
      <h2 id="press-band-heading"
        class="text-balance font-display italic leading-[1.2] text-foreground text-2xl md:text-[1.4rem] font-light">
        {{ __('Satori Mulshi in the press.', 'sage') }}
      </h2>
    </div>

    <div data-animate="true" class="text-foreground/70">
      <ul role="list" aria-label="{{ __('Publications that have written about Satori', 'sage') }}"
        class="flex flex-wrap items-center gap-x-8 gap-y-6 md:gap-x-10 lg:gap-x-12">
        <li class="flex items-center" title="Manifest Life">
          <img src="{{ content_url('/uploads/2026/10/manifest-life.webp') }}" alt="Manifest Life"
            class="h-6 md:h-7 lg:h-8 w-auto object-contain shrink-0 opacity-75 hover:opacity-100 transition-opacity"
            loading="lazy" />
        </li>
        <li class="flex items-center" title="The Gourmet Edit">
          <img src="{{ content_url('/uploads/2026/10/the-gourmet-edit.webp') }}" alt="The Gourmet Edit"
            class="h-7 md:h-8 lg:h-9 w-auto object-contain shrink-0 opacity-75 hover:opacity-100 transition-opacity"
            loading="lazy" />
        </li>
        <li class="flex items-center" title="Femina">
          <img src="{{ content_url('/uploads/2026/10/femina.svg') }}" alt="Femina"
            class="h-5 md:h-6 lg:h-6 w-auto object-contain shrink-0 opacity-75 hover:opacity-100 transition-opacity"
            loading="lazy" />
        </li>
        <li class="flex items-center" title="Mumbai Mirror">
          <img src="{{ content_url('/uploads/2026/10/mumbai-mirror.svg') }}" alt="Mumbai Mirror"
            class="h-4 md:h-5 lg:h-5 w-auto object-contain shrink-0 opacity-75 hover:opacity-100 transition-opacity"
            loading="lazy" />
        </li>
        <li class="flex items-center" title="Condé Nast Traveller India">
          <img src="{{ content_url('/uploads/2026/10/conde-nast-traveller.svg') }}" alt="Condé Nast Traveller India"
            class="h-6 md:h-7 lg:h-8 w-auto object-contain shrink-0 opacity-75 hover:opacity-100 transition-opacity"
            loading="lazy" />
        </li>
      </ul>
    </div>

    <div data-animate="true">
      <a class="group inline-flex min-h-11 items-center border-b border-foreground/30 pb-1 font-label text-[0.65rem] tracking-[0.2em] text-foreground transition-colors duration-300 hover:border-gold hover:text-earth"
        href="{{ home_url('/press') }}">
        {{ __('Read what they wrote', 'sage') }}<span aria-hidden="true"
          class="ml-3 transition-transform duration-300 group-hover:translate-x-1">→</span>
      </a>
    </div>
  </div>
</section>