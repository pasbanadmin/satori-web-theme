@php
  $birds = [
    [
      'file' => '/wp-content/uploads/2026/11/bird-shrike-branch.webp',
      'caption' => __('Long-tailed shrike', 'sage'),
      'alt' => __('A long-tailed shrike perched on a branch, its black mask and rust flanks against green leaves', 'sage'),
    ],
    [
      'file' => '/wp-content/uploads/2026/11/bird-bulbul-twig.webp',
      'caption' => __('Red-whiskered bulbul', 'sage'),
      'alt' => __('A red-whiskered bulbul on a bare twig against morning mist', 'sage'),
    ],
    [
      'file' => '/wp-content/uploads/2026/11/bird-lapwing.webp',
      'caption' => __('Red-wattled lapwing', 'sage'),
      'alt' => __('A red-wattled lapwing standing in long grass', 'sage'),
    ],
    [
      'file' => '/wp-content/uploads/2026/11/bird-babbler-step.webp',
      'caption' => __('Jungle babbler', 'sage'),
      'alt' => __('A jungle babbler walking along a wooden step beside the lawn', 'sage'),
    ],
    [
      'file' => '/wp-content/uploads/2026/11/bird-shrike-young.webp',
      'caption' => __('Long-tailed shrike, juvenile', 'sage'),
      'alt' => __('A young long-tailed shrike facing the camera from a leafy perch', 'sage'),
    ],
    [
      'file' => '/wp-content/uploads/2026/11/bird-bulbul-rock.webp',
      'caption' => __('Red-vented bulbul', 'sage'),
      'alt' => __('A red-vented bulbul on a mossy rock among wet grass', 'sage'),
    ],
    [
      'file' => '/wp-content/uploads/2026/11/bird-babbler-branch.webp',
      'caption' => __('Jungle babbler', 'sage'),
      'alt' => __('A jungle babbler perched on a thin branch, pale eye catching the light', 'sage'),
    ],
    [
      'file' => '/wp-content/uploads/2026/11/bird-shrike-perch.webp',
      'caption' => __('Long-tailed shrike', 'sage'),
      'alt' => __('A long-tailed shrike side-on along a slender branch', 'sage'),
    ],
  ];
@endphp

<section id="birds" class="bg-[#f7f3eb] py-8 lg:py-10" aria-labelledby="birds-heading">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">

    {{-- Section Header & Credit --}}
    <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4 mb-6 lg:mb-8" data-reveal>
      <div>
        <h2 id="birds-heading" class="font-heading text-3xl font-light leading-tight text-brand-primary sm:text-4xl lg:text-5xl">
          {{ __('The birds of the estate.', 'sage') }}<br>
          <span class="italic font-normal">{{ __('Some homes are named for them.', 'sage') }}</span>
        </h2>
      </div>

      <p class="text-[0.65rem] sm:text-[0.58rem] uppercase tracking-[0.2em] text-brand-primary/60 shrink-0">
        {{ __('Photographs by Sachit Handa', 'sage') }}
      </p>
    </div>

    {{-- Birds Grid --}}
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-x-4 gap-y-7 sm:gap-x-6 sm:gap-y-9" role="list" data-reveal>
      @foreach ($birds as $bird)
        <article class="flex flex-col" role="listitem">
          <div class="overflow-hidden bg-brand-primary/10" style="aspect-ratio: 4/5;">
            <img
              src="{{ $bird['file'] }}"
              alt="{{ $bird['alt'] }}"
              class="w-full h-full object-cover transition-transform duration-700 hover:scale-105"
              loading="lazy"
            >
          </div>
          {{-- Added explicit top padding for label --}}
          <p class="text-[0.65rem] lg:text-[0.58rem] uppercase tracking-[0.2em] text-brand-primary/75" style="margin-top: 14px; padding-top: 2px;">
            {{ $bird['caption'] }}
          </p>
        </article>
      @endforeach
    </div>

  </div>
</section>
