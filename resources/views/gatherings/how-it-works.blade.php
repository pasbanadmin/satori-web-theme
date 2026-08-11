@php
  $steps = [
    [
      'step'  => '01',
      'title' => __('Tell us the shape of it', 'sage'),
      'body'  => __('Dates, headcount, and what the occasion actually is.', 'sage'),
    ],
    [
      'step'  => '02',
      'title' => __('We build it around you', 'sage'),
      'body'  => __('Room allocation, menus, timings, and any suppliers you want brought in.', 'sage'),
    ],
    [
      'step'  => '03',
      'title' => __('We hold the whole thing', 'sage'),
      'body'  => __('One team, one point of contact, from the first enquiry to the last car leaving.', 'sage'),
    ],
  ];
@endphp

<section class="bg-brand-primary text-brand-sand py-14 lg:py-20">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">

    <div class="mb-10 lg:mb-14 text-center" data-reveal>
      <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
        {{ __('Process', 'sage') }}
      </p>
      <h2 class="mt-4 font-heading text-4xl font-light leading-tight text-brand-sand sm:text-5xl">
        {{ __('How it works', 'sage') }}
      </h2>
    </div>

    <div class="grid gap-8 lg:grid-cols-3" data-reveal>
      @foreach ($steps as $item)
        <div class="border border-brand-sand/15 bg-brand-sand/5 p-8 relative flex flex-col justify-between hover:border-brand-gold/50 transition-colors duration-300">
          <div>
            <span class="font-heading text-5xl font-light text-brand-gold/40 block mb-6">
              {{ $item['step'] }}
            </span>
            <h3 class="font-heading text-2xl font-light text-brand-sand mb-3">
              {{ $item['title'] }}
            </h3>
            <p class="text-sm leading-6 text-brand-sand/70">
              {{ $item['body'] }}
            </p>
          </div>
        </div>
      @endforeach
    </div>

  </div>
</section>
