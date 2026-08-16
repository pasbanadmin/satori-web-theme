@php
  $gatheringsImage = '/wp-content/uploads/2026/08/Gatherings-band-—-gatherings-lawn.webp';
  $gatheringsAlt = __('Gatherings at Satori, the whole estate to yourself', 'sage');
@endphp

<section id="gatherings"
  class="relative flex min-h-[32rem] items-center overflow-hidden bg-brand-primary text-brand-sand lg:min-h-[40rem]"
  data-gatherings>
  <div class="absolute inset-0">
    <img class="h-full w-full object-cover" src="{{ $gatheringsImage }}" alt="{{ $gatheringsAlt }}"
      data-gatherings-image>
  </div>

  <div class="absolute inset-0 bg-brand-primary/70"></div>

  <div class="relative z-10 mx-auto w-full max-w-4xl px-5 py-24 text-center sm:px-8">
    <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold" data-gatherings-item>
      {{ __('Gatherings', 'sage') }}
    </p>

    <h2 class="mt-5 font-heading text-4xl font-light leading-tight text-brand-sand" data-gatherings-item>
      {{ __('When you want the whole place to yourself.', 'sage') }}
    </h2>

    <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-brand-sand/85 sm:text-lg" data-gatherings-item>
      {{ __('Fourteen stays. Twenty bedrooms. Up to forty guests, one estate, no other names in the register. Satori takes buyouts for weddings, milestone celebrations, family reunions and offsites that deserve better than a ballroom.', 'sage') }}
    </p>

    <a class="mt-10 inline-flex items-center justify-center gap-2 rounded-full border border-brand-gold px-6 py-3 text-[0.8125rem] uppercase tracking-[0.2em] text-brand-gold transition-colors duration-300 hover:bg-brand-gold hover:text-brand-primary"
      href="{{ home_url('/gatherings') }}" data-gatherings-item>
      {{ __('Plan a Gathering', 'sage') }}
      <span aria-hidden="true">→</span>
    </a>
  </div>
</section>