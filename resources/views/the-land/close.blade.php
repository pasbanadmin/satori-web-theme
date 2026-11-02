@php
  $closeImage = '/wp-content/uploads/2026/11/land-verandah-sunrise.webp';
@endphp

<section class="relative overflow-hidden text-brand-sand py-24 sm:py-28 lg:py-32" style="background-color: #16100C;" aria-labelledby="land-close-heading">
  {{-- Background Image --}}
  <div style="position: absolute; inset: 0; z-index: 0;">
    <img src="{{ $closeImage }}" alt="{{ __('Verandah at sunrise at Satori', 'sage') }}"
      class="h-full w-full object-cover" style="width: 100%; height: 100%; object-fit: cover;" loading="lazy">
  </div>

  {{-- Explicit Multi-layer dark overlay + gradient --}}
  <div style="position: absolute; inset: 0; z-index: 1; background-color: rgba(16, 12, 9, 0.45); pointer-events: none;"></div>
  <div style="position: absolute; inset: 0; z-index: 2; background: linear-gradient(180deg, rgba(16, 12, 9, 0.85) 0%, rgba(16, 12, 9, 0.55) 40%, rgba(16, 12, 9, 0.88) 100%); pointer-events: none;"></div>

  <div class="relative mx-auto w-full max-w-3xl px-5 text-center sm:px-8" style="position: relative; z-index: 10;" data-reveal>
    <h2 id="land-close-heading"
      class="font-heading text-4xl sm:text-5xl lg:text-6xl font-light leading-tight text-[#efe4d0]"
      style="color: #efe4d0; text-shadow: 0 3px 24px rgba(0, 0, 0, 0.9), 0 1px 4px rgba(0, 0, 0, 0.8);">
      {{ __('Come and walk it.', 'sage') }}<br>
      <span class="italic font-normal">{{ __('The birds start before six.', 'sage') }}</span>
    </h2>

    <div class="mt-8">
      <a href="{{ home_url('/contact-us/#enquire-form') }}"
        class="inline-flex items-center justify-center rounded-full px-8 py-3.5 text-[0.8125rem] font-medium uppercase tracking-[0.2em] transition-all duration-300 hover:scale-105"
        style="background-color: #BCA169; color: #16100C; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);">
        {{ __('Enquire About Dates →', 'sage') }}
      </a>
    </div>
  </div>
</section>
