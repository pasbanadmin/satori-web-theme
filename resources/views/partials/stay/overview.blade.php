@php
  $stats = [
    ['label' => __('Bedrooms', 'sage'), 'value' => $stay['bedrooms']],
    ['label' => __('Sleeps', 'sage'), 'value' => $stay['sleeps']],
    ['label' => __('Setting', 'sage'), 'value' => $stay['setting']],
    [
      'label' => __('From', 'sage'),
      'value' => $stay['price'] ? '₹' . number_format($stay['price']) : __('On enquiry', 'sage'),
      'small' => true,
    ],
  ];
@endphp

<section class="bg-brand-sand py-24 lg:py-28">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">
    <div class="grid gap-12 lg:grid-cols-12 lg:gap-16">
      <div class="lg:col-span-5" data-reveal>
        <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
          {{ __('The Stay', 'sage') }}
        </p>

        <h2 class="mt-4 max-w-md font-heading text-4xl font-light leading-tight text-brand-ink">
          {{ $stay['tagline'] }}
        </h2>

        <p class="mt-6 max-w-lg text-base leading-8 text-brand-muted sm:text-[16px]">
          {{ $stay['overview'] }}
        </p>

        @if (!empty($stay['ideal_for']))
          <p class="mt-5 max-w-lg border-l-2 border-brand-gold pl-4 text-sm leading-7 text-brand-ink">
            {{ $stay['ideal_for'] }}
          </p>
        @endif
      </div>

      <div class="self-end lg:col-span-7" data-reveal>
        <div class="lg:grid lg:grid-cols-4 lg:border-y lg:border-brand-ink/10">
          @foreach ($stats as $stat)
            <div class="border-t border-brand-ink/10 py-6 lg:border-t-0 lg:px-6 lg:py-8 {{ $loop->first ? 'lg:pl-0' : 'lg:border-l' }}">
              <p class="text-[0.65rem] uppercase tracking-[0.2em] text-brand-muted">
                {{ $stat['label'] }}
              </p>

              <p class="mt-2 font-heading text-2xl font-light text-brand-ink {{ !empty($stat['small']) ? 'text-xl' : '' }}">
                {{ $stat['value'] }}
              </p>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
