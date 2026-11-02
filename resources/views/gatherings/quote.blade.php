<section class="py-14 sm:py-16 lg:py-20" style="background-color: #16100C; color: #efe4d0;" aria-label="{{ __('Guest Review', 'sage') }}">
  <div class="mx-auto w-full max-w-4xl px-5 sm:px-8 text-center" data-reveal>
    
    {{-- Gold Stars --}}
    <div class="flex items-center justify-center gap-1.5 text-brand-gold mb-6" aria-hidden="true">
      @for ($i = 0; $i < 5; $i++)
        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
        </svg>
      @endfor
    </div>

    {{-- Pull Quote --}}
    <blockquote class="font-heading text-2xl sm:text-3xl lg:text-4xl font-light leading-relaxed italic text-[#efe4d0]">
      &ldquo;{{ __('Little expensive but worth the extra cost for sure!', 'sage') }}&rdquo;
    </blockquote>

    {{-- Attribution --}}
    <div class="mt-6 flex flex-col sm:flex-row items-center justify-center gap-2 text-xs sm:text-sm tracking-wide text-brand-sand/75">
      <span class="font-medium text-brand-gold">{{ __('A group of nine couples who stayed at Satori', 'sage') }}</span>
      <span class="hidden sm:inline" aria-hidden="true">&middot;</span>
      <span class="uppercase tracking-[0.16em] text-brand-sand/60">{{ __('Google Review', 'sage') }}</span>
    </div>

  </div>
</section>

