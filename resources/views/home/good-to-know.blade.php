@php
  $notes = [
    [
      'tag' => __('Accessibility', 'sage'),
      'title' => __('Senior-friendly', 'sage'),
      'body' => __('Buggies run across the estate, and most stays are on the ground floor or a few steps up. Tell us who is travelling and we\'ll place you well.', 'sage'),
      'icon' => '<svg class="w-5 h-5 text-brand-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>',
    ],
    [
      'tag' => __('Companions', 'sage'),
      'title' => __('Pets', 'sage'),
      'body' => __('Pet-friendly arrangements can be accommodated across select cottages with prior confirmation. Speak with our reservations team when planning your stay.', 'sage'),
      'icon' => '<svg class="w-5 h-5 text-brand-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M10 5.172C10 3.782 8.423 2.679 6.5 3c-2.823.47-4.113 6.006-4 7 .08.703 1.725 1.722 2.756 1 1.816-1.27 2.744-4.828 4.744-5.828z"/><path d="M14 5.172c0-1.39 1.577-2.493 3.5-2.172 2.823.47 4.113 6.006 4 7-.08.703-1.725 1.722-2.756 1-1.816-1.27-2.744-4.828-4.744-5.828z"/><path d="M12 14c2.5 0 4-1.5 4-3.5 0-2.5-1.5-4.5-4-4.5s-4 2-4 4.5c0 2 1.5 3.5 4 3.5z"/><path d="M12 14v4"/><path d="M9 21h6"/></svg>',
    ],
    [
      'tag' => __('Seasonality', 'sage'),
      'title' => __('Monsoon', 'sage'),
      'body' => __('From June to September the clouds come down to the lake and the verandahs come into their own. Bring a book.', 'sage'),
      'icon' => '<svg class="w-5 h-5 text-brand-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242"/><path d="M16 14v6"/><path d="M8 14v6"/><path d="M12 16v6"/></svg>',
    ],
  ];
@endphp

<section id="good-to-know" class="bg-[#f7f3eb] py-14 lg:py-20 border-t border-brand-ink/10" aria-labelledby="good-to-know-heading">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">

    <div class="max-w-3xl mb-10 lg:mb-12" data-reveal>
      <p class="text-[0.75rem] uppercase tracking-[0.3em] text-gold-ink font-medium">
        {{ __('Estate Notes', 'sage') }}
      </p>
      <h2 id="good-to-know-heading" class="mt-2 font-heading text-3xl sm:text-4xl font-light text-brand-primary leading-tight">
        {{ __('Good to know', 'sage') }}
      </h2>
    </div>

    {{-- 3-Column Strip --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8" data-reveal>
      @foreach ($notes as $item)
        <article class="p-6 sm:p-7 rounded-sm border border-brand-ink/10 bg-brand-sand/35 flex flex-col justify-between hover:border-brand-gold/60 transition-all duration-300">
          <div>
            <div class="flex items-center justify-between mb-4">
              <span class="text-[0.65rem] uppercase tracking-[0.2em] text-brand-gold font-medium">
                {{ $item['tag'] }}
              </span>
              <div>
                {!! $item['icon'] !!}
              </div>
            </div>

            <h3 class="font-heading text-xl sm:text-2xl font-light text-brand-primary mb-3">
              {{ $item['title'] }}
            </h3>

            <p class="text-sm leading-6 text-brand-primary/80">
              {{ $item['body'] }}
            </p>
          </div>
        </article>
      @endforeach
    </div>

  </div>
</section>

