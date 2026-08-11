@php
  $specs = [
    [
      'label' => __('Private Homes', 'sage'),
      'is_numeric' => true,
      'target' => 14,
      'prefix' => '',
      'suffix' => '',
      'detail' => __('Across orchard, canopy & lakeside', 'sage')
    ],
    [
      'label' => __('Bedrooms', 'sage'),
      'is_numeric' => true,
      'target' => 20,
      'prefix' => '',
      'suffix' => '',
      'detail' => __('Private verandahs & outdoor showers', 'sage')
    ],
    [
      'label' => __('Sleeping Capacity', 'sage'),
      'is_numeric' => true,
      'target' => 40,
      'prefix' => __('Up to ', 'sage'),
      'suffix' => '',
      'detail' => __('Full estate occupancy', 'sage')
    ],
    [
      'label' => __('Seated Dining', 'sage'),
      'is_numeric' => true,
      'target' => 40,
      'prefix' => '',
      'suffix' => __(' Guests', 'sage'),
      'detail' => __('Inside The Nest or on the lawns', 'sage')
    ],
    [
      'label' => __('Lawn & Event Space', 'sage'),
      'is_numeric' => true,
      'target' => 100,
      'prefix' => '',
      'suffix' => '+',
      'detail' => __('Al fresco gatherings & celebrations', 'sage')
    ],
    [
      'label' => __('Exclusive Use', 'sage'),
      'is_numeric' => false,
      'value' => __('Entire Estate', 'sage'),
      'detail' => __('Gates closed to non-guests', 'sage')
    ],
  ];
@endphp

<section class="bg-brand-primary text-brand-sand py-14 lg:py-20">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">

    <div class="mb-10 lg:mb-14 text-center" data-reveal>
      <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
        {{ __('What You Get', 'sage') }}
      </p>
      <h2 class="mt-4 font-heading text-4xl font-light leading-tight text-brand-sand sm:text-5xl">
        {{ __('Estate Capacity & Specifications', 'sage') }}
      </h2>
      <p class="mt-3 text-sm text-brand-sand/65">
        {{ __('Nearest Airport: Pune — 2 hours drive', 'sage') }}
      </p>
    </div>

    {{-- Capacity Grid --}}
    <div class="grid grid-cols-2 md:grid-cols-3 gap-0 border border-brand-sand/15" data-reveal>
      @foreach ($specs as $spec)
        <div
          class="border-b border-r border-brand-sand/15 p-6 sm:p-8 flex flex-col justify-between hover:bg-brand-sand/5 transition-colors duration-300 [&:nth-child(2n)]:border-r-0 md:[&:nth-child(2n)]:border-r md:[&:nth-child(3n)]:border-r-0 [&:nth-last-child(-n+2)]:border-b-0 md:[&:nth-last-child(-n+3)]:border-b-0">
          <p class="text-[0.7rem] uppercase tracking-[0.25em] text-brand-gold">
            {{ $spec['label'] }}
          </p>

          <div class="my-4">
            @if (!empty($spec['is_numeric']))
              <p class="font-heading text-2xl sm:text-5xl font-light text-brand-sand tabular-nums whitespace-nowrap"
                data-counter data-counter-target="{{ $spec['target'] }}">
                <span>{{ $spec['prefix'] }}</span><span
                  data-counter-value>{{ $spec['target'] }}</span><span>{{ $spec['suffix'] }}</span>
              </p>
            @else
              <p class="font-heading text-2xl sm:text-4xl font-light text-brand-sand">
                {{ $spec['value'] }}
              </p>
            @endif
          </div>

          <p class="text-xs text-brand-sand/50 leading-normal">
            {{ $spec['detail'] }}
          </p>
        </div>
      @endforeach
    </div>

  </div>
</section>