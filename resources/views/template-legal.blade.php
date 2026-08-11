{{--
  Template Name: Legal Page
--}}

@extends('layouts.app')

@section('content')
@php
  $heroImage = '/wp-content/uploads/2026/08/home-aves.webp';
  $title = get_the_title() ?: __('Legal & Policy Information', 'sage');
@endphp

{{-- Hero Header --}}
<section class="relative flex min-h-[35vh] items-end overflow-hidden bg-brand-primary text-brand-sand">
  <div class="relative z-10 mx-auto w-full max-w-4xl px-5 sm:px-8 pb-10 lg:pb-14" data-reveal>
    <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
      {{ __('Satori · Policy', 'sage') }}
    </p>
    <h1 class="mt-3 font-heading text-4xl font-light text-brand-sand sm:text-5xl lg:text-6xl">
      {!! $title !!}
    </h1>
    <p class="mt-3 text-xs uppercase tracking-[0.2em] text-brand-sand/60">
      {{ __('Last Updated', 'sage') }}: {{ get_the_modified_date('F Y') ?: 'August 2026' }}
    </p>
  </div>
</section>

{{-- Content Section --}}
<section class="bg-[#f7f3eb] py-14 lg:py-20">
  <div class="mx-auto w-full max-w-4xl px-5 sm:px-8" data-reveal>

    <main class="min-w-0">
      @if (get_the_content())
        <div class="prose prose-stone max-w-none 
          prose-p:mb-4 prose-p:text-brand-muted prose-p:text-base prose-p:leading-7
          prose-headings:font-heading prose-headings:font-light prose-headings:text-brand-ink
          prose-h1:text-4xl prose-h1:mt-8 prose-h1:mb-4
          prose-h2:text-3xl prose-h2:mt-8 prose-h2:mb-4
          prose-h3:text-2xl prose-h3:mt-6 prose-h3:mb-3
          prose-h4:text-xl prose-h4:mt-4 prose-h4:mb-2
          prose-a:text-brand-gold prose-a:underline hover:prose-a:text-brand-ink prose-a:transition-colors
          prose-ul:list-disc prose-ul:pl-6 prose-ul:mb-4 prose-ul:space-y-2
          prose-ol:list-decimal prose-ol:pl-6 prose-ol:mb-4 prose-ol:space-y-2
          prose-li:text-brand-muted prose-li:leading-7
          prose-strong:text-brand-ink prose-strong:font-medium
          prose-blockquote:border-l-2 prose-blockquote:border-brand-gold prose-blockquote:pl-4 prose-blockquote:italic prose-blockquote:text-brand-ink prose-blockquote:my-6">
          @php(the_content())
        </div>
      @else
        {{-- Default Single Page Policy Fallback --}}
        <div class="text-brand-ink">

          <article class="space-y-6">
            <h2 class="font-heading text-3xl sm:text-4xl font-light text-brand-ink mb-4">
              {{ __('Policy Overview', 'sage') }}
            </h2>
            
            <div class="h-px w-16 bg-brand-gold mb-6"></div>
            
            <div class="text-base leading-7 text-brand-muted">
              <p class="mb-4">
                {{ __('At Satori, we respect your privacy and are committed to protecting the personal information you share with us. This policy outlines how we collect, use, and safeguard your data when visiting our website or staying at the estate.', 'sage') }}
              </p>
              
              <p class="mb-4">
                {{ __('We collect information necessary to process your reservations, personalize your stay experience, and communicate essential estate updates. We do not sell, rent, or trade your personal information with third parties.', 'sage') }}
              </p>

              <h3 class="font-heading text-2xl font-light text-brand-ink mt-8 mb-4">
                {{ __('Reservations & Conduct', 'sage') }}
              </h3>

              <p class="mb-4">
                {{ __('Reservations at Satori are subject to confirmation upon receipt of deposit. Standard check-in time is 2:00 PM and check-out time is 11:00 AM. Early check-in or late check-out may be accommodated based on availability.', 'sage') }}
              </p>
              
              <p class="mb-4">
                {{ __('The estate is a private sanctuary designed for peace and quiet. Guests are expected to respect the natural surroundings, wildlife, and neighboring residents throughout their stay.', 'sage') }}
              </p>

              <h3 class="font-heading text-2xl font-light text-brand-ink mt-8 mb-4">
                {{ __('Important Guidelines', 'sage') }}
              </h3>

              <ul class="list-disc pl-6 mb-4 space-y-2 text-brand-muted">
                <li>{{ __('Smoking is strictly confined to designated outdoor zones.', 'sage') }}</li>
                <li>{{ __('Plastic single-use items are prohibited across the property.', 'sage') }}</li>
                <li>{{ __('For full estate buyouts, custom booking conditions apply as specified in your agreement.', 'sage') }}</li>
              </ul>

              <p class="mb-4">
                {{ __('If you have any questions regarding our terms, please feel free to ', 'sage') }}
                <a href="{{ home_url('/contact-us') }}" class="text-brand-gold underline hover:text-brand-ink transition-colors duration-200">
                  {{ __('contact our team directly', 'sage') }}
                </a>.
              </p>
            </div>
          </article>

        </div>
      @endif
    </main>

  </div>
</section>
@endsection