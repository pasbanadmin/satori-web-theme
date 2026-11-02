@php
  $closeImage = '/wp-content/uploads/2026/11/land-verandah-sunrise.webp';
@endphp

<section class="relative overflow-hidden bg-[#16100C] text-brand-sand py-36" aria-labelledby="land-close-heading">
  {{-- Background Image --}}
  <div class="absolute inset-0 z-0">
    <img src="{{ $closeImage }}" alt="{{ __('Verandah at sunrise at Satori', 'sage') }}"
      class="h-full w-full object-cover" style="width: 100%; height: 100%; object-fit: cover;" loading="lazy">
  </div>

  {{-- Multi-layer dark overlay + gradient with direct inline styles (guaranteed rendering regardless of CSS build) --}}
  <div class="absolute inset-0 z-1" style="background-color: rgba(22, 16, 12, 0.15); pointer-events: none;"></div>
  <div class="absolute inset-0 z-1"
    style="background: linear-gradient(to top, rgba(22, 16, 12, 0.90) 0%, rgba(22, 16, 12, 0.65) 50%, rgba(22, 16, 12, 0.80) 100%); pointer-events: none;">
  </div>

  <div class="relative z-10 mx-auto w-full max-w-3xl px-5 text-center sm:px-8" data-reveal>
    <h2 id="land-close-heading"
      class="font-heading text-4xl sm:text-5xl lg:text-6xl font-light leading-tight text-[#efe4d0]"
      style="color: #efe4d0; text-shadow: 0 2px 16px rgba(0, 0, 0, 0.7);">
      {{ __('Come and walk it.', 'sage') }}<br>
      <span class="italic font-normal">{{ __('The birds start before six.', 'sage') }}</span>
    </h2>

    <div class="mt-8">
      <a href="{{ home_url('/contact-us/#enquire-form') }}"
        class="inline-flex items-center justify-center rounded-full px-8 py-3.5 text-[0.8125rem] font-medium uppercase tracking-[0.2em] transition-all duration-300 hover:scale-105"
        style="background-color: #BCA169; color: #16100C; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);">
        {{ __('Enquire About Dates →', 'sage') }}
      </a>
    </div>
  </div>
</section>