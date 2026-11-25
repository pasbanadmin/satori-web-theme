<?php

/**
 * "Know before you go": the honest, practical notes guests should read
 * before they arrive. Used on the homepage (Good to know) and on the
 * Know Before You Go page.
 *
 * An item whose 'answer' is null is waiting on a confirmed fact from the
 * estate and is not shown anywhere until it is filled in.
 */

namespace App;

/**
 * @return array<int, array{id: string, question: string, answer: ?string}>
 */
function know_before_you_go_items(): array
{
    $items = [
        [
            'id' => 'meal-plans',
            'question' => __('What do the meal plans include?', 'sage'),
            'answer' => __('Every room is booked on one of four plans. EP is the room alone. CP adds breakfast. MAP adds breakfast and one other meal, lunch or dinner. AP covers all three meals. Anything ordered outside your plan is charged separately.', 'sage'),
        ],
        [
            'id' => 'food',
            'question' => __('What is the food like?', 'sage'),
            'answer' => __('Home-style and local, built around what the farm is giving that week. Meals are a set buffet, with an à la carte menu also available. Dishes are cooked to order, so some take a little longer to reach the table.', 'sage'),
        ],
        [
            'id' => 'bar',
            'question' => __('Is there a bar?', 'sage'),
            'answer' => __('No. Satori has no bar and does not sell alcohol, but you are welcome to bring your own. For any corkage charge, please check with our front office before you arrive.', 'sage'),
        ],
        [
            'id' => 'included',
            'question' => __('What is included, and what costs extra?', 'sage'),
            'answer' => __('Included with every stay: the gardens and lawns, the pool, bicycles, the farm walk and the walk down to the lake. Pickleball and billiards are chargeable; ask us for the current rates.', 'sage'),
        ],
        [
            'id' => 'lake',
            'question' => __('How far is the lake?', 'sage'),
            'answer' => __('The lake lies below the estate, a downhill walk away, and the walk back is uphill. The shore is rocky, with no seating, and the water level changes with the season. Go for the walk and the light rather than a beach.', 'sage'),
        ],
        [
            'id' => 'farm-walk',
            'question' => __('What is the farm walk?', 'sage'),
            // Pending: what it covers, the time, whether it is guided, how to book.
            'answer' => null,
        ],
        [
            'id' => 'kids',
            'question' => __('Is Satori good for children?', 'sage'),
            'answer' => __('Children have an open garden to run around in, a trampoline and a few kids’ bicycles. There is no dedicated play area yet, so Satori suits families who are happy with an unprogrammed day outdoors.', 'sage'),
        ],
        [
            'id' => 'wifi',
            'question' => __('How is the Wi-Fi?', 'sage'),
            'answer' => __('Limited. We are in the hills, and the signal comes and goes. The TVs stream over the internet, so they depend on the same connection. Most guests come here to switch off; if you need to work or stream, tell us before you book and we will be straight with you about what to expect.', 'sage'),
        ],
        [
            'id' => 'power',
            'question' => __('What about power?', 'sage'),
            'answer' => __('The estate runs on solar power with a backup supply. When it switches between the two, you may notice a brief flicker or a short pause.', 'sage'),
        ],
        [
            'id' => 'rooms',
            'question' => __('Is there a wardrobe in the room?', 'sage'),
            // Pending: confirm open shelving applies to every room type.
            // Draft: "The rooms have open shelving rather than closed wardrobes. It is a design choice, in keeping with the rest of the estate."
            'answer' => null,
        ],
        [
            'id' => 'bicycles',
            'question' => __('Are there bicycles?', 'sage'),
            'answer' => __('Yes, simple ones, free to use around the estate. Only a few come in children’s sizes.', 'sage'),
        ],
        [
            'id' => 'check-in',
            'question' => __('What are the check-in and check-out times?', 'sage'),
            'answer' => __('Check-in is from 2 PM and check-out is by 11 AM. An earlier arrival or a later departure can sometimes be arranged, depending on who is arriving after you, so ask us before you travel.', 'sage'),
        ],
        [
            'id' => 'drivers',
            'question' => __('Can my driver or maid stay?', 'sage'),
            // Pending: driver and maid room policy and charges.
            'answer' => null,
        ],
    ];

    return array_values(array_filter($items, fn ($item) => !empty($item['answer'])));
}

/**
 * URL of the Know Before You Go page, optionally pointing at one item.
 *
 * Returns null until a published page with the slug "know-before-you-go"
 * exists, so no link on the site ever points at a 404.
 */
function know_before_you_go_url(string $anchor = ''): ?string
{
    $base = published_page_url('know-before-you-go');

    if (!$base) {
        return null;
    }

    return $base . ($anchor ? '#' . $anchor : '');
}
