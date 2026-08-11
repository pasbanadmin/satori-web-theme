@php
  $therapies = [
    [
      'title' => __('Massage & bodywork', 'sage'),
      'description' => __('Ayurvedic and classical, without ceremony or upselling', 'sage'),
    ],
    [
      'title' => __('Travel fatigue, sleep & tension', 'sage'),
      'description' => __('Treatments calibrated to recovery', 'sage'),
    ],
    [
      'title' => __('Couples\' therapies', 'sage'),
      'description' => __('Side-by-side in the garden setting', 'sage'),
    ],
    [
      'title' => __('Stay sequences', 'sage'),
      'description' => __('Programmes built across two-, three- and four-night stays', 'sage'),
    ],
  ];
@endphp

<section class="bg-brand-primary text-brand-sand">

  {{-- Full-width tall image with anchored bottom content --}}
  <div class="group relative w-full overflow-hidden" style="min-height: 70vh;" data-reveal>
    {{-- Gradient heavier at bottom for legibility --}}
    <div class="absolute inset-0 bg-gradient-to-t from-brand-primary via-brand-primary/40 to-transparent"></div>

    {{-- Bottom-anchored content overlay --}}
    <div class="absolute bottom-0 inset-x-0 mx-auto w-full max-w-7xl px-5 pb-12 sm:px-8 lg:px-16 lg:pb-16 z-10">
      <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-end">
        {{-- Left: headline --}}
        <div>
          <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold mb-4">
            {{ __('The Spa', 'sage') }}
          </p>
          <h2 class="font-heading text-4xl font-light leading-tight text-brand-sand sm:text-5xl">
            {{ __('A spa block set inside the garden', 'sage') }}
          </h2>
          <div class="mt-5 h-px w-16 bg-brand-gold" aria-hidden="true"></div>
          <p class="mt-5 max-w-md text-sm leading-7 text-brand-sand/75 sm:text-[15px]">
            {{ __('Open to green on every side — the sound of the estate through the windows, not piped music. Therapies built on Ayurvedic and classical technique. Book one treatment or let us thread them across your stay.', 'sage') }}
          </p>
        </div>

        {{-- Right: therapy list + CTA --}}
        <div>
          <ul class="space-y-0" role="list">
            @foreach ($therapies as $therapy)
              <li class="flex gap-4 border-t border-brand-sand/10 py-4 first:border-0 first:pt-0">
                <span class="shrink-0 mt-0.5 text-brand-gold font-heading text-lg font-light" aria-hidden="true">—</span>
                <div>
                  <p class="text-sm font-medium text-brand-sand">{{ $therapy['title'] }}</p>
                  <p class="mt-0.5 text-xs leading-5 text-brand-sand/55">{{ $therapy['description'] }}</p>
                </div>
              </li>
            @endforeach
          </ul>

          <div class="mt-6 pt-6 border-t border-brand-sand/10">
            <a href="{{ home_url('/book') }}"
              class="inline-flex items-center gap-2 text-[0.75rem] uppercase tracking-[0.25em] text-brand-gold hover:text-brand-sand transition-colors duration-300 group">
              {{ __('View Treatments', 'sage') }}
              <span class="inline-block transition-transform duration-300 group-hover:translate-x-1.5"
                aria-hidden="true">→</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>