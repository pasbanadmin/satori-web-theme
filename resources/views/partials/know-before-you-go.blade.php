{{--
  Know before you go: question-and-answer list.
  Expects $items from App\know_before_you_go_items().
--}}
<div class="grid gap-x-12 lg:grid-cols-2 border-t border-brand-ink/10 lg:border-t-0">
  @foreach (array_chunk($items, (int) ceil(count($items) / 2)) as $column)
    <div class="lg:border-t lg:border-brand-ink/10">
      @foreach ($column as $item)
        <details id="{{ $item['id'] }}" class="group scroll-mt-28 border-b border-brand-ink/10">
          <summary
            class="flex cursor-pointer list-none items-start justify-between gap-6 py-5 text-left [&::-webkit-details-marker]:hidden">
            <span class="font-heading text-xl font-light leading-snug text-brand-primary sm:text-[1.35rem]">
              {{ $item['question'] }}
            </span>
            <span
              class="mt-1.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-full border border-brand-gold/60 text-brand-gold transition-transform duration-300 group-open:rotate-45"
              aria-hidden="true">
              <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round">
                <path d="M12 5v14M5 12h14" />
              </svg>
            </span>
          </summary>

          <p class="max-w-xl pb-6 pr-10 text-sm leading-7 text-brand-primary/80 sm:text-[15px]">
            {{ $item['answer'] }}
          </p>
        </details>
      @endforeach
    </div>
  @endforeach
</div>
