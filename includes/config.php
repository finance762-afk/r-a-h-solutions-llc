<?php
/**
 * includes/config.php — RAH Solutions LLC site configuration (single source of truth).
 *
 * Every page requires this file FIRST. Facts here come from two sources only:
 *   - inventory/gbp-listing.json (the verified Google Business Profile row, Oct 5 2026):
 *     name, phone, hours, categories, service area, place_id, rating and review count
 *   - the pre-rebuild site (owner, family owned, established 2023, licensed and insured
 *     as stated by the client, the 15 services, email, Facebook)
 * Never add a number, award, warranty, price or review here that neither source states.
 * Do not emit HTML from this file. It ends by requiring attribution.php, which sets
 * the first-touch lead-attribution cookie before any output.
 */

require_once __DIR__ . '/icons.php';
// Per-site values written by the Page One post-deploy / ga4-fleet tooling (includes/site-config.json).
require_once __DIR__ . '/site-config.php';   // sets $gscVerification and $ga4MeasurementId ('' when absent)

/* ── Identity ─────────────────────────────────────────────────────────────── */
$slug        = 'r-a-h-solutions-llc';
$clientSlug  = $slug;
$siteName    = 'RAH Solutions LLC';      // exactly as the Google profile spells it (NAP, schema, footer, legal)
$siteShort   = 'RAH Solutions';          // running copy after first mention
$companyName = $siteName;
$tagline     = 'Landscaping, Lawn Care & Snow Removal · Edgerton, WI';
$industry    = 'Landscaper';
$ownerName   = 'Robert Harried';
$yearEstablished = 2023;                 // say "since 2023"; no year counters

/* ── Contact (NAP identical to the Google Business Profile) ───────────────── */
$phone    = '(608) 501-5123';
$phoneRaw = '+16085015123';
$email    = 'rahsolutionsllc2@gmail.com';

// Service-area business: Google hides the street address (CUSTOMER_LOCATION_ONLY).
// Only "Edgerton, WI 53534" is ever shown. No street, no geo pin.
$address = [
    'street' => '',
    'city'   => 'Edgerton',
    'state'  => 'WI',
    'zip'    => '53534',
    'region' => 'Rock County',
];
$addressPublic = false;
$addressLine   = 'Edgerton, WI 53534';
$hoursDisplay  = 'Mon–Fri 8 AM–5 PM';
$hoursLong     = 'Monday–Friday, 8:00 AM–5:00 PM · Saturday & Sunday closed';
$hoursSpec     = ['days' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'], 'opens' => '08:00', 'closes' => '17:00'];

/* ── Domain / URLs (launch domain — never the preview host) ───────────────── */
$domain  = 'rahsolutionsllc.com';
$siteUrl = 'https://' . $domain;

/* ── Google Business Profile (text only — never aggregateRating schema) ──── */
$placeId        = 'ChIJL745uaVvI6gRauPk_YNHUzI';
$gbpRating      = '5.0';
$gbpReviewCount = 3;
$gbpAsOf        = 'October 2026';
$googleBusinessProfile = 'https://www.google.com/maps/place/?q=place_id:' . $placeId;
$googleReviewsUrl      = 'https://search.google.com/local/reviews?placeid=' . $placeId;
$googleWriteReviewUrl  = 'https://search.google.com/local/writereview?placeid=' . $placeId;
$facebookUrl   = 'https://www.facebook.com/profile.php?id=61556249615787';
$socialLinks   = ['Facebook' => $facebookUrl, 'Google' => $googleBusinessProfile];
$acceptsSms    = false;          // not confirmed in intake → two-button sticky bar

/* ── Analytics + Search Console ───────────────────────────────────────────── */
$googleAnalyticsId = $ga4MeasurementId !== '' ? $ga4MeasurementId : 'G-F5F5TZ0F8J';
// URL-prefix property verification (META). Removing this tag un-verifies the site.
if ($gscVerification === '') $gscVerification = 'yj34ANvKZYQ57N1XIaa0Nj0fqvaUpWwLQLiUiCGypyo';

/* ── Brand (from the logo: aqua + green on ink) ───────────────────────────── */
$colors = ['primary' => '#136F83', 'secondary' => '#3F9440', 'accent' => '#72C267', 'ink' => '#0F1D24', 'dark' => '#0C171C'];
$logoLight = '/assets/images/rah-logo-on-light-v2.svg';   // for light surfaces
$logoDark  = '/assets/images/rah-logo-on-dark-v2.svg';    // for dark surfaces
$logoPng   = '/assets/images/rah-logo-on-light-v2.png';   // schema logo
$heroImage = 'lawn-striped-yard-mature-trees';

/* ── CSS / JS cache-bust — the ONLY place this is set ─────────────────────── */
$cssVersion = '20261005a';

/* ── Lead form ────────────────────────────────────────────────────────────── */
$formAction = 'https://db.pageone.cloud/functions/v1/leads/r-a-h-solutions-llc';

/* ── Legal page variables ─────────────────────────────────────────────────── */
$entityType       = 'Wisconsin limited liability company';
$stateOfFormation = 'Wisconsin';
$contactEmail     = $email;
$contactPhone     = $phone;

/* ── Service groups (drive the nav mega menu and /services/) ──────────────── */
$serviceGroups = [
    'lawn'      => ['name' => 'Lawn care',               'blurb' => 'Mowing, repair and new turf for cool-season lawns.'],
    'landscape' => ['name' => 'Landscaping & hardscape', 'blurb' => 'Beds, plantings, mulch, patios and walls.'],
    'concrete'  => ['name' => 'Concrete & excavating',   'blurb' => 'Flatwork, steps, grading and drainage.'],
    'seasonal'  => ['name' => 'Seasonal & snow',         'blurb' => 'Spring and fall cleanups and winter plowing.'],
];

/* ── Services (the 15 services on the pre-rebuild site, same slugs) ───────────
 * image = /assets/images/{image}.jpg basename, or '' when the client has not yet
 * supplied a matching photo (the card and page then use the photo-free layout). */
$services = [
    [
        'slug' => 'lawn-maintenance', 'group' => 'lawn', 'name' => 'Lawn Maintenance',
        'short' => 'Scheduled mowing, trimming and edging through the growing season.',
        'bullets' => ['Mowing, trimming and edging', 'Clippings blown off hard surfaces', 'Seasonal care on one schedule'],
        'icon' => 'leaf', 'image' => 'lawn-mowed-stripes-corner-lot',
        'alt' => 'Freshly mowed corner-lot lawn with mowing stripes in front of a single-story home',
    ],
    [
        'slug' => 'residential-lawn-care', 'group' => 'lawn', 'name' => 'Residential Lawn Care',
        'short' => 'Mowing and yard care plans sized for a home lot.',
        'bullets' => ['Front and back yards', 'Trimming around beds and fences', 'Weekly or one-time visits'],
        'icon' => 'home', 'image' => 'backyard-mowed-green-house',
        'alt' => 'Freshly mowed backyard behind a green house with a patio and shrubs',
    ],
    [
        'slug' => 'commercial-lawn-care', 'group' => 'lawn', 'name' => 'Commercial Lawn Care',
        'short' => 'Scheduled grounds mowing for businesses and commercial lots.',
        'bullets' => ['Set mowing days', 'Entrances and signs kept trimmed', 'One contact for the property'],
        'icon' => 'building-2', 'image' => '', 'alt' => '',
    ],
    [
        'slug' => 'lawn-restoration', 'group' => 'lawn', 'name' => 'Lawn Restoration',
        'short' => 'Overseeding, soil work and regrading for thin or damaged turf.',
        'bullets' => ['Overseeding thin lawns', 'Soil improvement and regrading', 'Bare areas brought back'],
        'icon' => 'sprout', 'image' => 'hillside-yard-dead-turf-before',
        'alt' => 'Sloped backyard with dead and damaged turf before lawn restoration work',
    ],
    [
        'slug' => 'sod-installation', 'group' => 'lawn', 'name' => 'Sod Installation',
        'short' => 'Graded, prepared soil and new sod for a lawn you can see right away.',
        'bullets' => ['Old turf and debris removed', 'Soil graded and prepared', 'Sod laid tight and rolled'],
        'icon' => 'layers', 'image' => 'hillside-yard-topsoil-graded',
        'alt' => 'Hillside backyard graded with fresh topsoil, ready for a new lawn',
    ],
    [
        'slug' => 'landscape-installation', 'group' => 'landscape', 'name' => 'Landscape Installation',
        'short' => 'New beds, plants, trees and edging installed as one project.',
        'bullets' => ['Beds cut and edged', 'Plants and trees set', 'Mulch or stone to finish'],
        'icon' => 'trees', 'image' => 'mulched-bed-steel-edging-driveway',
        'alt' => 'New mulched planting bed with metal edging beside a mowed lawn and driveway',
    ],
    [
        'slug' => 'hardscaping-services', 'group' => 'landscape', 'name' => 'Hardscaping Services',
        'short' => 'Patios, retaining walls, walkways and outdoor living areas.',
        'bullets' => ['Patios and walkways', 'Retaining walls', 'Base built for freeze and thaw'],
        'icon' => 'mountain', 'image' => '', 'alt' => '',
    ],
    [
        'slug' => 'mulching-services', 'group' => 'landscape', 'name' => 'Mulching Services',
        'short' => 'Beds edged, weeded and covered with fresh mulch.',
        'bullets' => ['Beds weeded and edged first', 'Mulch spread to even depth', 'Kept off trunks and siding'],
        'icon' => 'paint-bucket', 'image' => 'mulched-bed-edging-lawn-border',
        'alt' => 'Long mulched garden bed with new edging along a mowed lawn',
    ],
    [
        'slug' => 'garden-maintenance', 'group' => 'landscape', 'name' => 'Garden Maintenance',
        'short' => 'Weeding, pruning and seasonal upkeep for planting beds.',
        'bullets' => ['Beds weeded on a schedule', 'Perennials cut back in season', 'Edges kept clean'],
        'icon' => 'sun', 'image' => 'perennial-bed-edging-layout',
        'alt' => 'Perennial bed with daylilies and shrubs along a lawn, edging laid out for install',
    ],
    [
        'slug' => 'shrub-trimming', 'group' => 'landscape', 'name' => 'Shrub Trimming',
        'short' => 'Shrubs and hedges trimmed and shaped, clippings hauled away.',
        'bullets' => ['Shaped to the plant', 'Timed around bloom', 'Clippings cleaned up'],
        'icon' => 'scissors', 'image' => '', 'alt' => '',
    ],
    [
        'slug' => 'concrete-services', 'group' => 'concrete', 'name' => 'Concrete Services',
        'short' => 'Driveways, walkways, patios and steps poured or replaced.',
        'bullets' => ['Patios, walks and driveways', 'Steps and landings replaced', 'Base and joints done right'],
        'icon' => 'hammer', 'image' => 'concrete-patio-steps-stone-ranch',
        'alt' => 'New concrete patio with rounded corner and steps behind a stone ranch house',
    ],
    [
        'slug' => 'excavating-services', 'group' => 'concrete', 'name' => 'Excavating Services',
        'short' => 'Grading, drainage and site preparation with our own equipment.',
        'bullets' => ['Grading and leveling', 'Drainage and downspout lines', 'Site prep for lawns and slabs'],
        'icon' => 'tractor', 'image' => 'excavator-skid-steer-culvert',
        'alt' => 'Skid steer and excavator grading dark soil beside a drainage culvert pipe',
    ],
    [
        'slug' => 'spring-yard-cleanup', 'group' => 'seasonal', 'name' => 'Spring Yard Cleanup',
        'short' => 'Winter debris cleared and beds prepared for the growing season.',
        'bullets' => ['Sticks, leaves and debris out', 'Beds cleaned and edged', 'Lawn ready for first mow'],
        'icon' => 'wind', 'image' => 'zero-turn-spring-lawn-redbud',
        'alt' => 'Zero-turn mower on a bright green spring lawn with a redbud tree in bloom',
    ],
    [
        'slug' => 'fall-yard-cleanup', 'group' => 'seasonal', 'name' => 'Fall Yard Cleanup',
        'short' => 'Leaf removal, bed cutback and winter preparation.',
        'bullets' => ['Leaves removed from lawn', 'Beds cut back for winter', 'Overgrowth cleared out'],
        'icon' => 'umbrella', 'image' => 'barnyard-cleared-after-cleanup',
        'alt' => 'Farmyard between red barns after overgrowth and debris were cleared',
    ],
    [
        'slug' => 'snow-removal', 'group' => 'seasonal', 'name' => 'Snow Removal',
        'short' => 'Plowing for driveways and commercial lots through winter.',
        'bullets' => ['Residential driveways', 'Commercial lots', 'Our own plow trucks'],
        'icon' => 'snowflake', 'image' => 'plow-trucks-ready-snow',
        'alt' => 'Two RAH Solutions pickup trucks with snow plows mounted on a snowy lot',
    ],
];
// The eight cards on the homepage grid (every one has a real client photo).
$homeServiceSlugs = ['lawn-maintenance', 'landscape-installation', 'concrete-services', 'snow-removal',
                     'mulching-services', 'excavating-services', 'lawn-restoration', 'residential-lawn-care'];

/* ── Service areas — every town on the Google profile's service-area list ─── */
$serviceAreas = [
    ['slug' => 'edgerton-wi',      'name' => 'Edgerton',      'state' => 'WI', 'county' => 'Rock County'],
    ['slug' => 'stoughton-wi',     'name' => 'Stoughton',     'state' => 'WI', 'county' => 'Dane County'],
    ['slug' => 'janesville-wi',    'name' => 'Janesville',    'state' => 'WI', 'county' => 'Rock County'],
    ['slug' => 'madison-wi',       'name' => 'Madison',       'state' => 'WI', 'county' => 'Dane County'],
    ['slug' => 'milton-wi',        'name' => 'Milton',        'state' => 'WI', 'county' => 'Rock County'],
    ['slug' => 'beloit-wi',        'name' => 'Beloit',        'state' => 'WI', 'county' => 'Rock County'],
    ['slug' => 'evansville-wi',    'name' => 'Evansville',    'state' => 'WI', 'county' => 'Rock County'],
    ['slug' => 'fort-atkinson-wi', 'name' => 'Fort Atkinson', 'state' => 'WI', 'county' => 'Jefferson County'],
    ['slug' => 'whitewater-wi',    'name' => 'Whitewater',    'state' => 'WI', 'county' => 'Walworth County'],
    ['slug' => 'mcfarland-wi',     'name' => 'McFarland',     'state' => 'WI', 'county' => 'Dane County'],
    ['slug' => 'oregon-wi',        'name' => 'Oregon',        'state' => 'WI', 'county' => 'Dane County'],
    ['slug' => 'brodhead-wi',      'name' => 'Brodhead',      'state' => 'WI', 'county' => 'Green County'],
    ['slug' => 'watertown-wi',     'name' => 'Watertown',     'state' => 'WI', 'county' => 'Jefferson County'],
];
// Counties named on the Google profile (named on /service-area/ only).
$serviceCounties = ['Rock', 'Dane', 'Green', 'Jefferson', 'Iowa'];

/* ── Lead attribution (v6.3) — sets the first-touch cookie before any output ── */
require_once __DIR__ . '/attribution.php';
$leadsFormSecret = 'bac7714a8f41505ab12d75311ccbb11a6374e38b1a010d69111c84a652cfa0f3'; // spam-shield HMAC (matches leads fn LEADS_FORM_SECRET)
