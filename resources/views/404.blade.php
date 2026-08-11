@extends('layouts.404')

@section('content')
  @php
    $heroImage = '/wp-content/uploads/2026/08/home-aves.webp';
  @endphp

  <section
    class="relative flex min-h-screen items-center justify-center overflow-hidden bg-brand-primary text-brand-sand xl:py-0 py-10">
    {{-- Background image with dark gradient overlay --}}
    <img class="absolute inset-0 h-full w-full object-cover object-center opacity-40 filter blur-[1px]"
      src="{{ $heroImage }}" alt="{{ __('Satori Estate landscape', 'sage') }}">
    <div class="absolute inset-0 bg-gradient-to-t from-brand-primary via-brand-primary/80 to-brand-primary/60"></div>

    <div class="relative z-10 mx-auto w-full max-w-4xl px-5 text-center sm:px-8" data-reveal>
      {{-- Giant 404 Heading --}}
      <h1 class="mt-4 font-heading text-8xl font-light text-brand-gold sm:text-9xl tracking-wider leading-none">
        404
      </h1>

      {{-- Subtitle --}}
      <h2 class="mt-4 font-heading text-3xl font-light leading-tight text-brand-sand sm:text-4xl">
        {{ __('You have wandered off the path.', 'sage') }}
      </h2>

      <div class="mx-auto mt-6 h-px w-20 bg-brand-gold/60" aria-hidden="true"></div>

      <p class="mx-auto mt-6 max-w-lg text-base leading-7 text-brand-sand/75 sm:text-[16px]">
        {{ __('The page you are looking for doesn\'t exist or may have moved. Let us help you find your way back to the estate.', 'sage') }}
      </p>

      {{-- CTA Buttons --}}
      <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
        <a href="{{ home_url('/') }}"
          class="inline-flex items-center justify-center rounded-full bg-brand-gold px-8 py-3.5 text-[0.8125rem] uppercase tracking-[0.2em] font-medium text-brand-primary transition-colors duration-300 hover:bg-brand-sand">
          {{ __('Return Home', 'sage') }}
        </a>

        <a href="{{ home_url('/contact-us') }}"
          class="inline-flex items-center justify-center rounded-full border border-brand-sand/30 px-8 py-3.5 text-[0.8125rem] uppercase tracking-[0.2em] text-brand-sand transition-colors duration-300 hover:border-brand-gold hover:text-brand-gold">
          {{ __('Contact Us', 'sage') }}
        </a>
      </div>

      {{-- Quick Links Bar --}}
      <div class="mt-16 border-t border-brand-sand/15 pt-8">
        <p class="text-[0.65rem] uppercase tracking-[0.25em] text-brand-sand/40 mb-4">
          {{ __('Or explore another area', 'sage') }}
        </p>
        <div class="flex flex-wrap items-center justify-center gap-x-8 gap-y-3 text-xs uppercase tracking-[0.2em]">
          <a href="{{ home_url('/stays') }}"
            class="text-brand-sand/70 hover:text-brand-gold transition-colors duration-300">
            {{ __('Stays', 'sage') }}
          </a>
          <span class="text-brand-sand/20" aria-hidden="true">•</span>
          <a href="{{ home_url('/dining') }}"
            class="text-brand-sand/70 hover:text-brand-gold transition-colors duration-300">
            {{ __('Dining', 'sage') }}
          </a>
          <span class="text-brand-sand/20" aria-hidden="true">•</span>
          <a href="{{ home_url('/wellness') }}"
            class="text-brand-sand/70 hover:text-brand-gold transition-colors duration-300">
            {{ __('Wellness', 'sage') }}
          </a>
          <span class="text-brand-sand/20" aria-hidden="true">•</span>
          <a href="{{ home_url('/gatherings') }}"
            class="text-brand-sand/70 hover:text-brand-gold transition-colors duration-300">
            {{ __('Gatherings', 'sage') }}
          </a>
          <span class="text-brand-sand/20" aria-hidden="true">•</span>
          <a href="{{ home_url('/the-satori-way') }}"
            class="text-brand-sand/70 hover:text-brand-gold transition-colors duration-300">
            {{ __('The Satori Way', 'sage') }}
          </a>
        </div>
      </div>

    </div>
  </section>
@endsection