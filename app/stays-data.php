<?php

/**
 * Hardcoded presentation defaults for every stay, keyed by post slug.
 *
 * These act as fallbacks while the site is populated. CMS fields override them
 * via `App\stay_data()` in `app/stays.php` — the templates do not change when
 * ACF arrives.
 */

namespace App;

/**
 * Retrieve the default stay dataset.
 *
 * @return array
 */
function stays_defaults()
{
    $imgA = '/wp-content/uploads/2026/08/36_202309051441007901-bcf6382f-142f-4570-85ee-9cdb14a05cc3-scaled.webp';
    $imgB = '/wp-content/uploads/2026/08/SATORI-round-2-04-scaled.webp';

    $inclusions = [
        __('Full breakfast from the estate kitchen', 'sage'),
        __('Afternoon tea and evening coffee on the estate', 'sage'),
        __('Access to the pool, spa and wellness grounds', 'sage'),
        __('Daily housekeeping and evening turndown', 'sage'),
        __('Estate experiences and dinners at The Nest, at a supplement', 'sage'),
        __('Transfers from the nearest station and airport, on request', 'sage'),
    ];

    $story = function ($heading, $paragraphs, $image, $position = 'object-center') {
        return [
            'heading' => $heading,
            'image' => $image,
            'position' => $position,
            'paragraphs' => $paragraphs,
        ];
    };

    $base = function ($name, $category, $tagline, $overview, $idealFor, $bedrooms, $sleeps, $setting, $price, $heroImage, $heroPosition, $storyBlocks, $features, $gallery, $experienceTitle, $experienceParagraphs, $experienceImage) use ($inclusions) {
        return [
            'name' => $name,
            'category' => $category,
            'tagline' => $tagline,
            'overview' => $overview,
            'ideal_for' => $idealFor,
            'bedrooms' => $bedrooms,
            'sleeps' => $sleeps,
            'setting' => $setting,
            'price' => $price,
            'hero_image' => $heroImage,
            'hero_video' => null,
            'hero_position' => $heroPosition,
            'story' => $storyBlocks,
            'features' => $features,
            'gallery' => $gallery,
            'experience' => [
                'title' => $experienceTitle,
                'paragraphs' => $experienceParagraphs,
                'image' => $experienceImage,
            ],
            'inclusions' => $inclusions,
        ];
    };

    $gallery = function ($pairs) {
        return array_map(function ($pair) {
            return ['src' => $pair[0], 'position' => $pair[1]];
        }, $pairs);
    };

    return [
        'orchard-cottages' => array_merge($base(
            __('Garden View Cottages', 'sage'),
            __('Garden Homes', 'sage'),
            __('Wake up inside the garden that feeds the estate.', 'sage'),
            __('Three private cottages set low among Satori’s fruit trees and vegetable beds, each opening onto its own verandah.', 'sage'),
            __('Ideal for couples, solo travellers, and guests arriving at Satori for the first time.', 'sage'),
            1, 2, __('The Orchard', 'sage'), 42000, $imgA, 'object-center',
            [
                $story(
                    __('The garden, at close range', 'sage'),
                    [
                        __('The Orchard Cottages sit low among Satori’s fruit trees and vegetable beds, where the mornings smell of wet earth and citrus leaf. Each cottage opens directly onto the growing beds — close enough that the herbs on your breakfast plate were cut a few steps from where you slept.', 'sage'),
                        __('They are the most intimate homes at Satori, and deliberately so. What they trade in scale they return in immediacy: birdsong at close range, the gardeners moving through the rows at first light, fruit ripening within reach of the verandah rail.', 'sage'),
                    ],
                    $imgA, 'object-center'
                ),
                $story(
                    __('The truest way in', 'sage'),
                    [
                        __('The mornings are the loudest here — birds and the soft machinery of the garden — and the evenings fall early and quiet. For couples and solo travellers who want the estate at its most unguarded, this is the truest way in.', 'sage'),
                        __('By day the orchards become your common ground: long walks between the rows, lunch brought to your verandah, and the whole working estate moving around you at its own unhurried pace.', 'sage'),
                    ],
                    $imgB, 'object-top'
                ),
            ],
            [
                __('One bedroom, sleeps two', 'sage'),
                __('Private garden verandah', 'sage'),
                __('Opens onto the working orchard and vegetable beds', 'sage'),
                __('Full access to the pool, The Nest, spa and all estate experiences', 'sage'),
            ],
            $gallery([
                [$imgA, 'object-center'],
                [$imgB, 'object-top'],
                [$imgA, 'object-bottom'],
                [$imgB, 'object-center'],
            ]),
            __('Days begin in the garden', 'sage'),
            [
                __('Breakfast is the ceremony here — plated from the beds you can see from your verandah. By nine the gardeners are at work in the rows beside you, and you are free to join the estate at whatever pace the day suggests.', 'sage'),
                __('Evenings mean dinner at The Nest, a few minutes’ walk through the trees, or a simple supper brought to your own table.', 'sage'),
            ],
            $imgB
        ), ['slug' => 'orchard-cottages']),

        'canopy-suites' => array_merge($base(
            __('Junior Suites (Lake View)', 'sage'),
            __('Canopy Homes', 'sage'),
            __('An elevated hideaway above the fruit garden, with the lake beyond.', 'sage'),
            __('Four suites raised into the canopy, high enough to look out across the tops of the fruit trees to Mulshi Lake and the hills behind it.', 'sage'),
            __('Ideal for couples, honeymooners, and longer stays where the room itself becomes part of the retreat.', 'sage'),
            1, 2, __('Above the Orchard', 'sage'), 38000, $imgB, 'object-top',
            [
                $story(
                    __('Life above the orchard', 'sage'),
                    [
                        __('The Canopy Suites are raised above the same orchard the cottages sit within — high enough that you look out across the tops of the fruit trees to Mulshi Lake and the hills behind it. The garden is still directly below you; the view is simply longer.', 'sage'),
                        __('The suites are more generous and more finished: a larger bed, a deeper verandah, a bathroom that invites you to linger.', 'sage'),
                    ],
                    $imgA, 'object-center'
                ),
                $story(
                    __('A longer view', 'sage'),
                    [
                        __('Morning light comes in over the canopy, and the lake keeps its own schedule of change through the day — silver at noon, copper before dark. Your verandah is the best seat for all of it.', 'sage'),
                        __('They are made for guests who want the seclusion of a private home with the outlook of a lakeside one.', 'sage'),
                    ],
                    $imgB, 'object-top'
                ),
            ],
            [
                __('One bedroom, sleeps two', 'sage'),
                __('Elevated position with lake and hill views', 'sage'),
                __('Deep private verandah above the orchard', 'sage'),
                __('Enhanced bathroom and in-room comforts', 'sage'),
            ],
            $gallery([
                [$imgB, 'object-top'],
                [$imgA, 'object-center'],
                [$imgB, 'object-center'],
                [$imgA, 'object-top'],
            ]),
            __('Evenings spent watching the water', 'sage'),
            [
                __('Morning light comes in over the canopy, and the lake keeps its own schedule of change through the day. The suites are made for long stays — the room itself becomes part of the retreat.', 'sage'),
                __('Inside they are more generous and more finished: a larger bed, a deeper verandah, a bathroom that invites you to linger.', 'sage'),
            ],
            $imgA
        ), ['slug' => 'canopy-suites']),

        'aves' => array_merge($base(
            __('Aves', 'sage'),
            __('Hidden Cottages', 'sage'),
            __('Three cottages, named for birds, hidden in plain sight.', 'sage'),
            __('Falcon, Macaw and Toucan — three single-bedroom cottages tucked into their own pockets of the estate, each with a wraparound verandah.', 'sage'),
            __('Ideal for couples, writers and readers, solo retreats, and anyone whose idea of luxury is being left alone.', 'sage'),
            1, 2, __('Garden and Farm Outlooks', 'sage'), 35000, $imgA, 'object-bottom',
            [
                $story(
                    __('Hidden in plain sight', 'sage'),
                    [
                        __('Aves brings together Falcon, Macaw and Toucan — three single-bedroom cottages tucked into their own pockets of the estate. Each has a wraparound verandah and its own angle on the gardens and farms, positioned so that you can spend a whole day without seeing another guest, and then walk five minutes to dinner and be among everyone.', 'sage'),
                        __('They are the quietest homes on the property, positioned for seclusion and built for stillness.', 'sage'),
                    ],
                    $imgA, 'object-bottom'
                ),
                $story(
                    __('The quietest homes on the property', 'sage'),
                    [
                        __('Guests who book Aves tend to rebook Aves. The verandahs are where the hours go — a book, a long lunch, the farm working quietly beyond the hedge.', 'sage'),
                        __('Seclusion here is never isolation: dinner at The Nest is a five-minute walk, and the estate is always within reach.', 'sage'),
                    ],
                    $imgB, 'object-center'
                ),
            ],
            [
                __('One bedroom, sleeps two', 'sage'),
                __('Wraparound verandah', 'sage'),
                __('Maximum seclusion, minimum distance to The Nest', 'sage'),
                __('Garden and farm outlooks', 'sage'),
            ],
            $gallery([
                [$imgA, 'object-bottom'],
                [$imgB, 'object-center'],
                [$imgA, 'object-center'],
                [$imgB, 'object-bottom'],
            ]),
            __('A whole day without another guest', 'sage'),
            [
                __('You can spend a whole day here without seeing another guest, then walk five minutes to dinner and be among everyone. Guests who book Aves tend to rebook Aves.', 'sage'),
                __('Each cottage has a wraparound verandah and its own angle on the gardens and farms — the quietest address on the property, never far from the life of the estate.', 'sage'),
            ],
            $imgA
        ), ['slug' => 'aves']),

        'woodhouse' => array_merge($base(
            __('Woodhouse', 'sage'),
            __('Woodland Home', 'sage'),
            __('Machan-inspired, timber-warm, and the most atmospheric address on the estate.', 'sage'),
            __('A raised, timber-framed home in the spirit of a machan, open to the air on the side that faces the lawns and the lake.', 'sage'),
            __('Ideal for two couples, small families, and guests who want warmth and texture over polish.', 'sage'),
            2, 4, __('The Woods', 'sage'), 46000, $imgB, 'object-center',
            [
                $story(
                    __('Built like a machan', 'sage'),
                    [
                        __('Woodhouse is built in the spirit of a machan — raised, timber-framed, and open to the air on the side that faces the lawns and the lake. The shared verandah runs the length of it, and it is the single best place on the estate to sit through a monsoon afternoon and do absolutely nothing.', 'sage'),
                        __('Timber-led and atmospheric, it is the most textured home on the property — warmth and craft over polish.', 'sage'),
                    ],
                    $imgB, 'object-center'
                ),
                $story(
                    __('Two bedrooms around one living heart', 'sage'),
                    [
                        __('Two bedrooms sit either side of a shared living heart, which makes it work equally for two couples travelling together or a family of four who want to be near each other without being on top of each other.', 'sage'),
                        __('The verandah runs the length of the house and gathers the whole day — morning coffee, a long lunch, dinner under the first rain.', 'sage'),
                    ],
                    $imgA, 'object-bottom'
                ),
            ],
            [
                __('Two bedrooms, sleeps four', 'sage'),
                __('Long shared verandah facing the lawns and lake', 'sage'),
                __('Timber-led, machan-inspired architecture', 'sage'),
                __('Especially good in the monsoon', 'sage'),
            ],
            $gallery([
                [$imgB, 'object-center'],
                [$imgA, 'object-center'],
                [$imgB, 'object-top'],
                [$imgA, 'object-bottom'],
            ]),
            __('The monsoon’s best address', 'sage'),
            [
                __('The shared verandah runs the length of the house, and it is the single best place on the estate to sit through a monsoon afternoon and do absolutely nothing.', 'sage'),
                __('Two bedrooms sit either side of a shared living heart — close enough to feel together, far enough to keep your own quiet.', 'sage'),
            ],
            $imgB
        ), ['slug' => 'woodhouse']),

        'perch-i' => array_merge($base(
            __('Perch I', 'sage'),
            __('Lakeside Homes', 'sage'),
            __('The estate’s largest homes, and its longest views.', 'sage'),
            __('A three-bedroom residence set high with commanding views over Mulshi Lake and the ranges beyond, with wide outdoor terraces.', 'sage'),
            __('Ideal for families, groups of friends, milestone celebrations, and small offsites.', 'sage'),
            3, 7, __('Lake and Hill Views', 'sage'), 40000, $imgA, 'object-top',
            [
                $story(
                    __('A household over the lake', 'sage'),
                    [
                        __('Perch I is one of Satori’s three-bedroom residences, set high with commanding views over Mulshi Lake and the ranges beyond. Generous shared living areas, wide outdoor terraces and three private bedrooms make it the natural choice when a group wants to stay together as one household rather than scatter across the estate.', 'sage'),
                        __('Long dinners on the terrace, the lake holding the view through every hour of the day.', 'sage'),
                    ],
                    $imgA, 'object-top'
                ),
                $story(
                    __('Room for the whole group', 'sage'),
                    [
                        __('Perch I carries an additional bed, taking it to seven guests — useful for families travelling with children or a group that refuses to split.', 'sage'),
                        __('The wide terraces face the water uninterrupted, and the hills beyond keep the view changing through the day.', 'sage'),
                    ],
                    $imgB, 'object-center'
                ),
            ],
            [
                __('Three bedrooms, sleeps up to seven', 'sage'),
                __('Wide terraces with uninterrupted lake and hill views', 'sage'),
                __('Generous shared living and dining areas', 'sage'),
                __('Can be booked with Perch II for larger parties', 'sage'),
            ],
            $gallery([
                [$imgA, 'object-top'],
                [$imgB, 'object-center'],
                [$imgA, 'object-center'],
                [$imgB, 'object-top'],
            ]),
            __('Stay together as one household', 'sage'),
            [
                __('Perch is the natural choice when a group wants to stay together as one household rather than scatter across the estate — long dinners on the terrace, the lake holding the view through every hour of the day.', 'sage'),
                __('Perch I carries an additional bed, taking it to seven guests — useful for families travelling with children or a group that refuses to split.', 'sage'),
            ],
            $imgA
        ), ['slug' => 'perch-i']),

        'perch-ii' => array_merge($base(
            __('Perch II', 'sage'),
            __('Lakeside Homes', 'sage'),
            __('The estate’s largest homes, and its longest views.', 'sage'),
            __('A three-bedroom residence set high with commanding views over Mulshi Lake and the ranges beyond, with wide outdoor terraces.', 'sage'),
            __('Ideal for families, groups of friends, milestone celebrations, and small offsites.', 'sage'),
            3, 6, __('Lake and Hill Views', 'sage'), 45000, $imgB, 'object-bottom',
            [
                $story(
                    __('A household over the lake', 'sage'),
                    [
                        __('Perch II is one of Satori’s three-bedroom residences, set high with commanding views over Mulshi Lake and the ranges beyond. Generous shared living areas, wide outdoor terraces and three private bedrooms make it the natural choice when a group wants to stay together as one household rather than scatter across the estate.', 'sage'),
                        __('Long dinners on the terrace, the lake holding the view through every hour of the day.', 'sage'),
                    ],
                    $imgB, 'object-bottom'
                ),
                $story(
                    __('Room for the whole group', 'sage'),
                    [
                        __('Perch II sleeps six guests and can be booked alongside Perch I when a larger group wants the same long views and shared sense of place.', 'sage'),
                        __('The wide terraces face the water uninterrupted, and the hills beyond keep the view changing through the day.', 'sage'),
                    ],
                    $imgA, 'object-top'
                ),
            ],
            [
                __('Three bedrooms, sleeps six', 'sage'),
                __('Wide terraces with uninterrupted lake and hill views', 'sage'),
                __('Generous shared living and dining areas', 'sage'),
                __('Can be booked with Perch I for larger parties', 'sage'),
            ],
            $gallery([
                [$imgB, 'object-center'],
                [$imgA, 'object-top'],
                [$imgB, 'object-center'],
                [$imgA, 'object-bottom'],
            ]),
            __('Stay together as one household', 'sage'),
            [
                __('Perch II is the natural choice when a group wants to stay together as one household rather than scatter across the estate — long dinners on the terrace, the lake holding the view through every hour of the day.', 'sage'),
                __('Perch II sleeps six guests and can be booked alongside Perch I when a larger group wants the same long views and shared sense of place.', 'sage'),
            ],
            $imgB
        ), ['slug' => 'perch-ii']),

        'hornbill' => array_merge($base(
            __('Hornbill', 'sage'),
            __('Signature Villa', 'sage'),
            __('The signature villa. The best seat on the estate.', 'sage'),
            __('Two bedrooms, indoor and outdoor living, its own outdoor bar, and a position on the estate that gives it the lake in full and near-total privacy.', 'sage'),
            __('Ideal for couples marking something, two couples travelling well, and guests for whom the view is the point.', 'sage'),
            2, 4, __('The Lakeside', 'sage'), 52000, $imgB, 'object-center',
            [
                $story(
                    __('Satori at its most complete', 'sage'),
                    [
                        __('Hornbill is Satori at its most complete. Two bedrooms, indoor and outdoor living, its own outdoor bar, and a position on the estate that gives it the lake in full and near-total privacy. It is the only home here where the water is present from the moment you wake to the moment the light goes.', 'sage'),
                        __('It is priced as the estate’s premier address because that is what it is.', 'sage'),
                    ],
                    $imgB, 'object-center'
                ),
                $story(
                    __('Water from first light to last', 'sage'),
                    [
                        __('Breakfast faces the lake, evening drinks come from the outdoor bar, and the whole day is given to the view — the water present from the moment you wake to the moment the light goes.', 'sage'),
                        __('Guests take Hornbill when the stay itself is the occasion — an anniversary, a first trip after a long year, or simply the decision to do the thing properly.', 'sage'),
                    ],
                    $imgA, 'object-center'
                ),
            ],
            [
                __('Two bedrooms, sleeps four', 'sage'),
                __('Private outdoor bar and generous outdoor living', 'sage'),
                __('The estate’s most direct and uninterrupted lake frontage', 'sage'),
                __('Highest specification on the property', 'sage'),
            ],
            $gallery([
                [$imgB, 'object-center'],
                [$imgA, 'object-center'],
                [$imgB, 'object-center'],
                [$imgA, 'object-top'],
            ]),
            __('The stay itself is the occasion', 'sage'),
            [
                __('Hornbill is the only home here where the water is present from the moment you wake to the moment the light goes — breakfast facing the lake, evening drinks from the outdoor bar, the whole day given to the view.', 'sage'),
                __('It is priced as the estate’s premier address because that is what it is. Guests take Hornbill for an anniversary, a first trip after a long year, or simply the decision to do the thing properly.', 'sage'),
            ],
            $imgB
        ), ['slug' => 'hornbill']),

        '_default' => [
            'name' => '',
            'category' => __('Stay', 'sage'),
            'tagline' => '',
            'overview' => '',
            'ideal_for' => '',
            'bedrooms' => 1,
            'sleeps' => 2,
            'setting' => '',
            'price' => 0,
            'hero_image' => $imgA,
            'hero_video' => null,
            'hero_position' => 'object-center',
            'story' => [],
            'features' => [],
            'gallery' => [],
            'experience' => [
                'title' => '',
                'paragraphs' => [],
                'image' => $imgB,
            ],
            'inclusions' => $inclusions,
        ],
    ];
}
