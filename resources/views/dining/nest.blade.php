@php
  $nestImage = '/wp-content/uploads/2026/08/The-Nest-—-feature-image-—-the-nest.webp';
@endphp

<section class="bg-brand-primary text-brand-sand py-14 lg:py-20">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
    <div class="grid overflow-hidden lg:grid-cols-2">

      {{-- Image Panel --}}
      <div class="group relative aspect-square overflow-hidden" data-reveal>
        <img class="absolute inset-0 h-full w-full object-cover transition-all duration-700 ease-in-out"
          src="{{ $nestImage }}" alt="{{ __('The Nest during the day — bright, open, communal', 'sage') }}">
      </div>

      {{-- Content Panel --}}
      <div class="flex flex-col justify-center px-6 py-16 sm:px-10 lg:px-16 lg:py-24" data-reveal>
        <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
          {{ __('The Social Heart', 'sage') }}
        </p>

        <h2 class="mt-4 font-heading text-4xl font-light leading-tight text-brand-sand sm:text-5xl">
          {{ __('The Nest', 'sage') }}
        </h2>

        <p class="mt-6 max-w-lg text-sm leading-7 text-secondary sm:text-[16px] lg:text-sm">
          {{ __('At the centre of Satori is The Nest, the communal house where the estate gathers. It shifts naturally with the day: quiet coffee and yoga in the morning, a long unhurried lunch, high tea on the verandah, and dinners that turn into billiards, board games, films and conversations nobody wants to end.', 'sage') }}
        </p>

        <p class="mt-4 max-w-lg text-sm leading-7 text-secondary sm:text-[16px] lg:text-sm">
          {{ __('It is the one place at Satori designed for people to run into each other. Everywhere else is designed so they don\'t have to.', 'sage') }}
        </p>
      </div>

    </div>
  </div>
</section>