@php
  $statementLines = [
    __('Some places impress you for a moment.', 'sage'),
    __('Some places stay with you long after you leave.', 'sage'),
    __('Satori belongs to the second kind.', 'sage'),
  ];

  $statementParagraph = __('Spread across a working estate overlooking Mulshi Lake, Satori is built for people seeking more than a weekend away. For couples in search of quiet intimacy. For families wanting unhurried time together. For friends gathering with meaning. And for anyone ready to step away from noise and back into presence.', 'sage');
@endphp

<section class="bg-[#f7f3eb] py-24 lg:py-36" data-opening-statement>
  <div class="mx-auto w-full max-w-4xl px-5 text-center sm:px-8 lg:px-16">
    <h2 class="font-heading text-3xl font-light leading-tight text-brand-ink sm:text-4xl lg:text-5xl">
      @foreach ($statementLines as $line)
        <span class="block" data-line>{{ $line }}</span>
      @endforeach
    </h2>

    <div class="mx-auto my-10 h-px w-full max-w-[16rem] bg-brand-gold" data-divider></div>

    <p class="mx-auto max-w-2xl text-base leading-8 text-brand-muted sm:text-lg" data-paragraph>
      {{ $statementParagraph }}
    </p>
  </div>
</section>
