<section aria-labelledby="press-heading" class="px-6 pb-16 pt-36 md:pb-20 md:pt-44 lg:px-12 bg-[#f7f3eb]">
  <div class="mx-auto max-w-[1400px]">
    <div class="max-w-4xl">
      <h1 id="press-heading" data-hero="true" class="text-balance font-display leading-[1.05] text-foreground"
        style="font-size:clamp(2.4rem, 6vw, 5rem);font-weight:300">
        {{ __('Satori Mulshi in the press.', 'sage') }}<br />
        <em class="italic">{{ __('What they wrote about us.', 'sage') }}</em>
      </h1>
      <p data-hero="true" class="mt-6 max-w-xl text-pretty text-sm leading-[1.85] text-foreground/70 font-body">
        {{ __('Satori is a private retreat of fourteen homes above Mulshi Lake, ninety minutes from Pune. Manifest Life, The Gourmet Edit, Femina, Mumbai Mirror and Condé Nast Traveller India have all written about it. Below is one line from each piece, word for word, and a link to the full story where it is online.', 'sage') }}
      </p>
    </div>

    <div class="mt-14 border-y border-border py-8 text-foreground md:mt-16 md:py-10">
      <ul role="list" aria-label="{{ __('Publications that have written about Satori', 'sage') }}"
        class="flex flex-wrap items-center gap-x-8 gap-y-6 md:gap-x-12 lg:gap-x-16">
        <li class="flex items-center" title="Manifest Life">
          <img src="{{ content_url('/uploads/2026/10/manifest-life.webp') }}" alt="Manifest Life"
            class="h-6 md:h-7 lg:h-8 w-auto object-contain shrink-0 opacity-80 hover:opacity-100 transition-opacity"
            loading="lazy" />
        </li>
        <li class="flex items-center" title="The Gourmet Edit">
          <img src="{{ content_url('/uploads/2026/10/the-gourmet-edit.webp') }}" alt="The Gourmet Edit"
            class="h-7 md:h-8 lg:h-9 w-auto object-contain shrink-0 opacity-80 hover:opacity-100 transition-opacity"
            loading="lazy" />
        </li>
        <li class="flex items-center" title="Femina">
          <img src="{{ content_url('/uploads/2026/10/femina.svg') }}" alt="Femina"
            class="h-5 md:h-6 lg:h-6 w-auto object-contain shrink-0 opacity-80 hover:opacity-100 transition-opacity"
            loading="lazy" />
        </li>
        <li class="flex items-center" title="Mumbai Mirror">
          <img src="{{ content_url('/uploads/2026/10/mumbai-mirror.svg') }}" alt="Mumbai Mirror"
            class="h-4 md:h-5 lg:h-5 w-auto object-contain shrink-0 opacity-80 hover:opacity-100 transition-opacity"
            loading="lazy" />
        </li>
        <li class="flex items-center" title="Condé Nast Traveller India">
          <img src="{{ content_url('/uploads/2026/10/conde-nast-traveller.svg') }}" alt="Condé Nast Traveller India"
            class="h-6 md:h-7 lg:h-8 w-auto object-contain shrink-0 opacity-80 hover:opacity-100 transition-opacity"
            loading="lazy" />
        </li>
      </ul>
    </div>
  </div>
</section>