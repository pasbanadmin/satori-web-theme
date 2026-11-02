@php
  $statementLines = [
    __('A farm fifty steps from the kitchen.', 'sage'),
    __('Mulshi Lake below the verandahs.', 'sage'),
    __('A chef who cooks what was picked that morning.', 'sage'),
    __('Satori is a private estate of twenty-one rooms in the Sahyadris, built slowly, and run by people who remember your name.', 'sage'),
  ];

  $statementParagraph = __('Spread across a serene estate overlooking Mulshi Lake, Satori is designed for those seeking more than a weekend away. It is for couples in search of quiet intimacy, families wanting unhurried time together, friends gathering with meaning, and individuals ready to step away from noise and back into presence.', 'sage');
@endphp

<section class="bg-[#f7f3eb] py-20 lg:py-24" data-opening-statement>
  <div class="mx-auto w-full max-w-5xl px-5 text-center sm:px-8 lg:px-16">
    <h2 class="font-heading text-3xl font-light leading-tight text-brand-ink sm:text-4xl lg:text-[2.6rem]">
      @foreach ($statementLines as $line)
        <span class="block {{ $loop->last ? 'mt-4 sm:mt-5 text-xl sm:text-2xl lg:text-3xl font-light italic text-brand-primary/90' : '' }}" data-line>
          {{ $line }}
        </span>
      @endforeach
    </h2>

    <div class="mx-auto my-10 h-px w-full max-w-[16rem] bg-brand-gold" data-divider></div>

    <p class="mx-auto max-w-2xl text-base leading-8 text-brand-muted sm:text-[16px]" data-paragraph>
      {{ $statementParagraph }}
    </p>
  </div>
</section>
