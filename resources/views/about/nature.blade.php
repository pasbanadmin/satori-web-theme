@php
  $natureImage = '/wp-content/uploads/2026/08/Experiences-rail-—-Farm-Walks-—-farm-walk.webp';
  $natureAlt = __('The landscape of the Satori estate, gardens and open sky', 'sage');
@endphp

<section class="bg-[#f7f3eb] pb-16 lg:pb-24">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
    <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-16">
      <div class="lg:order-1 lg:py-4" data-reveal>
        <div class="flex items-baseline gap-4">

          <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
            {{ __('Rooted in Nature', 'sage') }}
          </p>
        </div>

        <h3 class="mt-4 font-heading text-3xl font-light leading-tight text-brand-ink sm:text-4xl">
          {{ __('The landscape is not a backdrop', 'sage') }}
        </h3>

        <p class="mt-5 max-w-lg text-base leading-8 text-brand-muted sm:text-[16px]">
          {{ __('The lake, the hills, the gardens, the farms, the changing light and the breeze moving through the estate shape the emotional texture of a stay here.', 'sage') }}
        </p>

        <p class="mt-5 max-w-lg text-base leading-8 text-brand-muted sm:text-[16px]">
          {{ __('Walk the grounds and you move through herbs, flowers, fruit trees, medicinal plants and open sky. With more than two hundred species of flora across the property, Satori reads less like a landscaped resort and more like a living sanctuary. Stay still long enough and the place begins to slow you down.', 'sage') }}
        </p>
      </div>

      <div class="group relative overflow-hidden lg:order-2" data-reveal>
        <img
          class="aspect-[4/3] w-full object-cover transition-transform duration-[1200ms] ease-out group-hover:scale-105"
          src="{{ $natureImage }}" alt="{{ $natureAlt }}">
        <div class="absolute inset-0 bg-gradient-to-t from-brand-primary/35 via-transparent to-transparent"></div>
      </div>
    </div>
  </div>
</section>