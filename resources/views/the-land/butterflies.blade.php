@php
  $butterflies = [
    [
      'file' => '/wp-content/uploads/2026/11/butterfly-jezebel.webp',
      'caption' => __('Common Jezebel on jatropha', 'sage'),
      'alt' => __('A common Jezebel butterfly, yellow and orange with black edges, feeding on a red jatropha flower', 'sage'),
    ],
    [
      'file' => '/wp-content/uploads/2026/11/butterfly-swallowtail.webp',
      'caption' => __('Swallowtail on ixora', 'sage'),
      'alt' => __('A black swallowtail with pale blue spots feeding on a head of red ixora', 'sage'),
    ],
  ];
@endphp

<section id="butterflies" class="bg-[#f7f3eb] py-10 lg:py-14 border-t border-brand-ink/10" aria-labelledby="butterflies-heading">
  <div class="mx-auto w-full max-w-7xl px-5 sm:px-8 lg:px-16">

    <div class="grid lg:grid-cols-12 gap-6 lg:gap-14 items-start" data-reveal>
      {{-- Left: Heading & Description --}}
      <div class="lg:col-span-5">
        <h2 id="butterflies-heading" class="font-heading text-3xl font-light leading-tight text-brand-primary sm:text-4xl lg:text-5xl">
          {{ __('Butterflies, too.', 'sage') }}
        </h2>
        <p class="mt-3 text-base leading-7 text-brand-primary/80 sm:text-[16px] max-w-md">
          {{ __('The ixora and jatropha along the paths were planted for colour. The butterflies read them as a menu.', 'sage') }}
        </p>
      </div>

      {{-- Right: Two 5:4 frames side by side --}}
      <div class="lg:col-span-7 grid grid-cols-2 gap-3 sm:gap-4">
        @foreach ($butterflies as $butterfly)
          <article class="flex flex-col">
            <div class="aspect-[5/4] overflow-hidden bg-brand-primary/10" style="aspect-ratio: 5/4;">
              <img
                src="{{ $butterfly['file'] }}"
                alt="{{ $butterfly['alt'] }}"
                class="w-full h-full object-cover transition-transform duration-700 hover:scale-105"
                loading="lazy"
              >
            </div>
            {{-- Added top padding/spacing for label --}}
            <p class="mt-3 pt-1 text-[0.65rem] lg:text-[0.58rem] uppercase tracking-[0.2em] text-brand-primary/75">
              {{ $butterfly['caption'] }}
            </p>
          </article>
        @endforeach
      </div>
    </div>

  </div>
</section>
