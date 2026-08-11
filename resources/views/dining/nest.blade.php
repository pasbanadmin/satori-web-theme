@php
  $nestImages = [
    'lunch' => '/wp-content/uploads/2026/08/36_202309051441007901-bcf6382f-142f-4570-85ee-9cdb14a05cc3-scaled.webp',
    'dinner' => '/wp-content/uploads/2026/08/SATORI-round-2-04-scaled.webp',
  ];
@endphp

<section class="bg-brand-primary text-brand-sand py-14 lg:py-20" x-data="{ mode: 'lunch' }">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
    <div class="grid overflow-hidden lg:grid-cols-2">

      {{-- Image Panel --}}
      <div class="group relative aspect-[4/3] overflow-hidden lg:aspect-auto lg:min-h-[38rem]" data-reveal>

        {{-- Lunch Image --}}
        <img class="absolute inset-0 h-full w-full object-cover transition-all duration-700 ease-in-out"
          :class="mode === 'lunch' ? 'opacity-100 scale-100' : 'opacity-0 scale-105'" src="{{ $nestImages['lunch'] }}"
          alt="{{ __('The Nest during the day — bright, open, communal', 'sage') }}">

        {{-- Dinner Image --}}
        <img class="absolute inset-0 h-full w-full object-cover transition-all duration-700 ease-in-out"
          :class="mode === 'dinner' ? 'opacity-100 scale-100' : 'opacity-0 scale-105'" src="{{ $nestImages['dinner'] }}"
          alt="{{ __('The Nest in the evening — warm, low-lit, intimate', 'sage') }}">

        <div class="absolute inset-0 bg-brand-primary/20"></div>

        {{-- Day/Night Toggle --}}
        <div class="absolute bottom-6 left-6 right-6 flex items-center justify-between z-10">
          <span class="text-[0.6rem] uppercase tracking-[0.2em] text-brand-sand/70">
            <span x-show="mode === 'lunch'">{{ __('Daytime', 'sage') }}</span>
            <span x-show="mode === 'dinner'" x-cloak>{{ __('Evening', 'sage') }}</span>
          </span>
          <div
            class="inline-flex items-center gap-0.5 rounded-full bg-brand-primary/70 p-1 backdrop-blur-sm border border-brand-sand/15">
            <button type="button" @click="mode = 'lunch'"
              :class="mode === 'lunch' ? 'bg-brand-gold text-brand-primary' : 'text-brand-sand/70 hover:text-brand-sand'"
              class="rounded-full px-3 py-1 text-[0.6rem] uppercase tracking-widest font-medium transition-all duration-300">
              {{ __('Lunch', 'sage') }}
            </button>
            <button type="button" @click="mode = 'dinner'"
              :class="mode === 'dinner' ? 'bg-brand-gold text-brand-primary' : 'text-brand-sand/70 hover:text-brand-sand'"
              class="rounded-full px-3 py-1 text-[0.6rem] uppercase tracking-widest font-medium transition-all duration-300">
              {{ __('Dinner', 'sage') }}
            </button>
          </div>
        </div>
      </div>

      {{-- Content Panel --}}
      <div class="flex flex-col justify-center px-6 py-16 sm:px-10 lg:px-16 lg:py-24" data-reveal>
        <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
          {{ __('The Social Heart', 'sage') }}
        </p>

        <h2 class="mt-4 font-heading text-4xl font-light leading-tight text-brand-sand sm:text-5xl">
          {{ __('The Nest', 'sage') }}
        </h2>

        <div class="mt-5 h-px w-16 bg-brand-gold" aria-hidden="true"></div>

        <p class="mt-6 text-base leading-8 text-brand-sand/80">
          {{ __('At the centre of Satori is The Nest, the communal house where the estate gathers. It shifts naturally with the day: quiet coffee and yoga in the morning, a long unhurried lunch, high tea on the verandah, and dinners that turn into billiards, board games, films and conversations nobody wants to end.', 'sage') }}
        </p>

        <p class="mt-4 text-base leading-8 text-brand-sand/80">
          {{ __('It is the one place at Satori designed for people to run into each other. Everywhere else is designed so they don\'t have to.', 'sage') }}
        </p>
      </div>

    </div>
  </div>
</section>