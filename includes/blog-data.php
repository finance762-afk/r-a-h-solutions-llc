<?php
/**
 * includes/blog-data.php — $blogPosts registry: the ONLY source of blog metadata.
 * Newest first. The blog index, homepage "From the blog", related-article blocks and
 * sitemap.php all loop this array. Adding a post = one entry here + /blog/{slug}/index.php.
 * 'image' is an /assets/images/ basename rendered through picture() (480/960 variants).
 */
$blogPosts = [
    [
        'slug'     => 'when-to-aerate-and-overseed-southern-wisconsin',
        'title'    => 'When to Aerate and Overseed in Southern Wisconsin',
        'excerpt'  => 'Late August through mid-September is the window for cool-season lawns in Rock and Dane counties. Here is why, how to prepare, and what to do if you miss it.',
        'image'    => 'lawn-mowed-stripes-corner-lot',
        'alt'      => 'Freshly mowed corner-lot lawn with mowing stripes in front of a single-story home',
        'date'     => 'October 5, 2026',
        'dateISO'  => '2026-10-05',
        'category' => 'Lawn Care',
        'readtime' => '7 min read',
    ],
    [
        'slug'     => 'sod-vs-seed-new-lawn-wisconsin',
        'title'    => 'Sod vs. Seed for a New Lawn in Wisconsin',
        'excerpt'  => 'Sod gives you a lawn in a day and can go down most of the season. Seed costs less and offers more grass choices, but the calendar matters. How to choose.',
        'image'    => 'hillside-yard-finish-graded',
        'alt'      => 'Sloped backyard graded smooth and ready for a new lawn behind a two-story home',
        'date'     => 'October 5, 2026',
        'dateISO'  => '2026-10-05',
        'category' => 'Lawn Care',
        'readtime' => '7 min read',
    ],
    [
        'slug'     => 'spring-yard-cleanup-checklist-wisconsin',
        'title'    => 'Spring Yard Cleanup Checklist for Wisconsin Yards',
        'excerpt'  => 'What to do, and in what order, once the snow is gone: wait for the ground to firm up, clear debris, cut back beds, edge, and hold off on the first mow.',
        'image'    => 'bed-edging-install-shade-garden',
        'alt'      => 'Shade garden bed with fresh soil and new edging being installed along a lawn',
        'date'     => 'October 5, 2026',
        'dateISO'  => '2026-10-05',
        'category' => 'Seasonal',
        'readtime' => '6 min read',
    ],
    [
        'slug'     => 'how-much-mulch-do-i-need',
        'title'    => 'How Much Mulch Do You Need, and When to Lay It?',
        'excerpt'  => 'The math for cubic yards, the 2 to 4 inch depth rule, why mulch stays off trunks, and the best time of year to mulch beds in southern Wisconsin.',
        'image'    => 'mulched-bed-edging-lawn-border',
        'alt'      => 'Long mulched garden bed with new edging along a mowed lawn',
        'date'     => 'October 5, 2026',
        'dateISO'  => '2026-10-05',
        'category' => 'Landscaping',
        'readtime' => '6 min read',
    ],
    [
        'slug'     => 'concrete-steps-repair-or-replace',
        'title'    => 'Concrete Steps: Repair or Replace After Freeze–Thaw?',
        'excerpt'  => 'Surface scaling can be patched. Steps that have sunk, tilted or pulled away from the house usually need to come out. How to tell which you have.',
        'image'    => 'concrete-steps-cracked-before',
        'alt'      => 'Cracked and settled concrete steps along the side of a house before replacement',
        'date'     => 'October 5, 2026',
        'dateISO'  => '2026-10-05',
        'category' => 'Concrete',
        'readtime' => '7 min read',
    ],
    [
        'slug'     => 'snow-removal-contract-questions',
        'title'    => 'What to Ask Before Signing a Snow Removal Contract',
        'excerpt'  => 'Trigger depth, timing, per-push or seasonal pricing, salt, where the snow goes and proof of insurance: the questions that prevent a mid-January surprise.',
        'image'    => 'snow-plow-fleet-trucks',
        'alt'      => 'Plow trucks, a utility vehicle and a skid steer with snow blades lined up on a snowy lot',
        'date'     => 'October 5, 2026',
        'dateISO'  => '2026-10-05',
        'category' => 'Snow Removal',
        'readtime' => '6 min read',
    ],
];
