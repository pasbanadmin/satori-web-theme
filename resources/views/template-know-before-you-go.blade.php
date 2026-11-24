{{--
  Template Name: Know Before You Go
--}}

@extends('layouts.app')

@section('content')
  @php
    $items = \App\know_before_you_go_items();
  @endphp

  {{-- Hero Header --}}
  <section class="relative flex min-h-[35vh] items-end overflow-hidden bg-brand-primary text-brand-sand">
    <div class="relative z-10 mx-auto w-full max-w-5xl px-5 sm:px-8 pb-10 lg:pb-14" data-reveal>
      <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
        {{ __('Satori · Estate Notes', 'sage') }}
      </p>
      <h1 class="mt-3 font-heading text-4xl font-light text-brand-sand sm:text-5xl lg:text-6xl">
        {{ __('Know before you go', 'sage') }}
      </h1>
    </div>
  </section>

  {{-- Intro --}}
  <section class="bg-[#f7f3eb] pt-14 lg:pt-20">
    <div class="mx-auto w-full max-w-5xl px-5 sm:px-8" data-reveal>
      <p class="max-w-2xl font-heading text-2xl font-light leading-snug text-brand-ink sm:text-3xl">
        {{ __('Satori is a working estate in the hills, not a city hotel.', 'sage') }}
      </p>
      <p class="mt-5 max-w-2xl text-base leading-8 text-brand-muted sm:text-[16px]">
        {{ __('Most of what makes it good comes from that: the quiet, the farm, the distance from everything. Some of it asks a little patience. These are the plain facts, so you arrive knowing exactly what to expect.', 'sage') }}
      </p>
    </div>
  </section>

  {{-- Questions --}}
  <section class="bg-[#f7f3eb] py-12 lg:py-16">
    <div class="mx-auto w-full max-w-5xl px-5 sm:px-8" data-reveal>
      @include('partials.know-before-you-go', ['items' => $items])
    </div>
  </section>

  {{-- Closing --}}
  <section class="bg-brand-primary text-brand-sand">
    <div class="mx-auto w-full max-w-3xl px-5 py-20 text-center sm:px-8">
      <h2 class="font-heading text-3xl font-light leading-tight text-brand-sand sm:text-4xl" data-reveal>
        {{ __('Something we have not covered?', 'sage') }}
      </h2>
      <p class="mx-auto mt-5 max-w-xl text-base leading-8 text-brand-sand/85" data-reveal>
        {{ __('Ask us before you book. We would rather answer a question now than have a stay fall short later.', 'sage') }}
      </p>
      <a class="mt-9 inline-flex items-center justify-center gap-2 rounded-full border border-brand-gold px-6 py-3 text-[0.8125rem] uppercase tracking-[0.2em] text-brand-gold transition-colors duration-300 hover:bg-brand-gold hover:text-brand-primary"
        href="{{ home_url('/contact-us/#enquire-form') }}" data-reveal>
        {{ __('Ask Us', 'sage') }}
        <span aria-hidden="true">→</span>
      </a>
    </div>
  </section>
@endsection
