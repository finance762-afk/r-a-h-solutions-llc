<?php
/*
 * McFarland, WI — town page.
 * Local facts and sources (checked 5 Oct 2026):
 *  - Village in Dane County; 2020 census population 8,991; elevation 869 ft; established 1856 by William Hugh McFarland;
 *    on Lake Waubesa (west) with Mud Lake to the south; US 51 is the main road to Madison, US 12 is the Beltline;
 *    Edwards-Larson House, a restored Queen Anne home built in 1898; McDaniel Park; Indian Mound Park (Lewis Mound Group);
 *    Lower Yahara River Trail; ZIP 53558.
 *    https://en.wikipedia.org/wiki/McFarland,_Wisconsin
 *  - Sidewalks cleared of snow and ice within 24 hours from when snow stops accumulating; snow may not be moved onto any
 *    street, sidewalk or public land; hydrants cleared 3 feet in all directions; alternate side parking December 1 to
 *    March 31, 1 a.m. to 7 a.m. (Village Code of Ordinances, Chapter 53, Article VI).
 *    https://www.mcfarland.wi.us/403/Snow-Clearing-and-Winter-Parking
 *  - Juniper Ridge: east side, south of Siggelkow Road and east of Holscher Road, homes built 2019 to 2021.
 *    https://www.madcitydreamhomes.com/juniper-ridge.php
 *  - Babcock County Park boat launch (Lake Waubesa / Yahara River). https://www.lavikhometeam.com/mcfarland/
 *  - USDA hardiness zone 5b for ZIP 53558. https://phzmapi.org/53558.json (USDA map: https://planthardiness.ars.usda.gov/)
 *  - Road distance Edgerton to McFarland: 22.7 miles, about 31 minutes (OSRM routing on OpenStreetMap data).
 *    https://router.project-osrm.org/route/v1/driving/-89.0676,42.8353;-89.2898,43.0125?overview=false
 *  - Seeding window and mowing height: UW–Madison Extension lawn care guidance. https://hort.extension.wisc.edu/
 * No photo in the client library carries location data, so no photo on this page is described as McFarland work.
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$area            = areaBySlug('mcfarland-wi');
$currentPage     = 'service-area';
$pageType        = 'city';
$citySlug        = 'mcfarland-wi';
$pageTitle       = 'Landscaper in McFarland, WI | RAH Solutions LLC';
$pageDescription = 'RAH Solutions LLC offers lawn care, mulching, landscaping and snow removal in McFarland, WI, from Lake Waubesa lots to Juniper Ridge. Free on-site estimates.';
$canonicalUrl    = $siteUrl . '/areas/mcfarland-wi/';
$pageCss         = ['area'];
$pageStyle       = <<<CSS
/* McFarland: lake village — aqua chip, teal-topped town card, aqua ledger icons */
.page-mcfarland .parish-chip { background: var(--color-aqua); color: var(--color-ink); border-color: var(--color-aqua); }
.page-mcfarland .parish-chip svg { color: var(--color-ink); }
.page-mcfarland .town-card { border-top: 4px solid var(--color-primary); background: color-mix(in srgb, var(--color-aqua) 12%, var(--color-paper)); }
.page-mcfarland .yard-ledger article:nth-child(even) > span { background: var(--color-primary); }
.page-mcfarland .area-ground__photo img { object-position: 50% 55%; }
.page-mcfarland .nearby h3 { color: var(--color-primary); }
CSS;

$faqs = [
    ['Is there a landscaper near me in McFarland, WI?',
     'Yes. RAH Solutions LLC is a licensed and insured landscaper based in Edgerton that serves McFarland homes and businesses. Call (608) 501-5123, Monday to Friday, 8 AM to 5 PM, to set up a free on-site estimate at any address in the village.'],
    ['How soon do McFarland sidewalks have to be shoveled?',
     'The Village of McFarland requires sidewalks to be cleared of snow and ice within 24 hours from when snow stops accumulating, and snow may not be pushed onto a street, sidewalk or public land. RAH Solutions offers <a href="/services/snow-removal/">snow removal</a> for McFarland driveways and lots, with winter accounts set up in the fall.'],
    ['When is the best time to seed a lawn in McFarland?',
     'Mid-August through mid-September, according to UW–Madison Extension. That window suits the Kentucky bluegrass and fescue lawns grown in Dane County. Thin lawns on newer lots usually need the soil loosened first. See <a href="/services/lawn-restoration/">lawn restoration</a> and the <a href="/blog/when-to-aerate-and-overseed-southern-wisconsin/">aeration and overseeding guide</a>.'],
    ['Does RAH Solutions work on Lake Waubesa properties?',
     'Yes. RAH Solutions gives free estimates at McFarland addresses near Lake Waubesa and Mud Lake. On those lots the plan starts with where water runs, so soil, mulch and leaves stay in the yard and out of the lake.'],
];

$schemaNodes = [
    webPageNode(),
    breadcrumbNode([['Home', '/'], ['Service Area', '/service-area/'], ['McFarland, WI', '/areas/mcfarland-wi/']]),
    serviceSchemaNode('Landscaping, lawn care and snow removal in McFarland, WI', 'Lawn care, mulching, landscaping, seasonal cleanups and snow removal for homes and businesses in the village of McFarland, Wisconsin.', $canonicalUrl, ['@type' => 'City', 'name' => 'McFarland, WI']),
    ['@type' => 'Place', 'name' => 'McFarland, Wisconsin', 'address' => ['@type' => 'PostalAddress', 'addressLocality' => 'McFarland', 'addressRegion' => 'WI', 'postalCode' => '53558', 'addressCountry' => 'US'], 'containedInPlace' => ['@type' => 'AdministrativeArea', 'name' => 'Dane County, WI']],
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-mcfarland">

<section class="hero area-hero area-hero--plain" aria-label="Landscaper in McFarland, WI">
  <svg class="floating-facet" viewBox="0 0 120 110" fill="none" stroke="currentColor" stroke-width="1" stroke-linejoin="round" aria-hidden="true"><path d="M34 6H86L112 32 60 104 8 32ZM8 32H112M34 6 44 32 60 6 76 32 86 6M44 32 60 104 76 32"/></svg>
  <span class="grain" aria-hidden="true"></span>
  <div class="container hero-grid hero-grid--form">
    <div class="hero-text">
      <?php echo breadcrumbs([['Home', '/'], ['Service Area', '/service-area/'], ['McFarland, WI', '/areas/mcfarland-wi/']]); ?>
      <span class="parish-chip"><?php echo icon('waves', 14); ?> Dane County · Village on Lake Waubesa</span>
      <h1 class="hero-title">Landscaper in McFarland, WI</h1>
      <p class="page-answer">RAH Solutions LLC, a licensed and insured landscaper based in Edgerton, offers lawn care, mulching, landscape installation, seasonal cleanups and snow removal in the village of McFarland, from lots near Lake Waubesa to the newer east side. Estimates are free and on site.</p>
      <div class="hero-actions">
        <button type="button" class="btn btn-accent btn-lg hero-form-open" data-open-estimate>Get a free estimate</button>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> or call <?php echo e($phone); ?></a>
      </div>
    </div>
    <?php $heroFormId = 'hero-mcfarland'; $heroFormHeading = 'Free estimate in McFarland'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
  </div>
</section>

<section class="section area-intro" aria-labelledby="intro-h2">
  <div class="container area-intro__grid">
    <div class="area-copy">
      <p><strong>RAH Solutions LLC</strong> is a licensed and insured, family-owned landscaper based in Edgerton, Wisconsin. Robert Harried started the company in 2023, and it serves homes and businesses across Rock and Dane counties, including McFarland.</p>
      <h2 id="intro-h2">Does RAH Solutions do landscaping and lawn care in McFarland?</h2>
      <div class="answer-block">
        <p>Yes. RAH Solutions LLC serves the village of McFarland with lawn mowing and maintenance, mulching, landscape installation, lawn repair, spring and fall cleanups and snow removal, for homes and businesses. Owner Robert Harried gives free on-site estimates, Monday to Friday.</p>
      </div>
      <p>If you are searching for a landscaper near me in McFarland, it helps to know how the village is laid out. McFarland is a village of 8,991 people (2020 census) in Dane County, just south of Madison’s Beltline. It was established in 1856, and water shapes it on two sides: Lake Waubesa lies to the west and Mud Lake to the south.</p>
      <p>US 51 is the main road through the village and the route most residents take to Madison. Between the highway and the lake are the village’s older streets, where the 1898 Edwards-Larson House, a restored Queen Anne home, still stands. Yards in an established area like that tend to have mature shade trees, long-settled beds and lawns that thin out under the canopy.</p>
      <p>The east side is the opposite. Juniper Ridge, south of Siggelkow Road and east of Holscher Road, was built between 2019 and 2021. Lawns that young are usually growing on subsoil that was compacted by construction equipment, and they benefit from aeration, overseeding and time more than from extra fertilizer.</p>
      <p>Near the lake, around Babcock County Park and the Lower Yahara River Trail, anything that washes off a yard reaches the water quickly. That makes grading, bed edging and leaf cleanup matter more on those lots than they would a mile inland.</p>
    </div>
    <aside class="town-card" aria-labelledby="town-card-h2">
      <h2 id="town-card-h2">McFarland at a glance</h2>
      <dl>
        <div><dt>County</dt><dd>Dane (village, about 869 ft elevation)</dd></div>
        <div><dt>Hardiness zone</dt><dd>USDA 5b (ZIP 53558)</dd></div>
        <div><dt>Watch for</dt><dd>Runoff toward Lake Waubesa, compacted soil on new east-side lots, the 24-hour sidewalk snow rule</dd></div>
        <div><dt>Distance from our base</dt><dd>About 23 miles northwest of Edgerton, roughly half an hour by road</dd></div>
      </dl>
      <a class="btn btn-primary" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> <?php echo e($phone); ?></a>
    </aside>
  </div>
</section>

<section class="section area-work" aria-labelledby="work-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">McFarland yards</span>
      <h2 id="work-h2">Which yard services fit McFarland properties best?</h2>
      <p>RAH Solutions LLC offers all 15 of its services in McFarland. These four match the village’s lake setting and its mix of old and new lots.</p>
    </div>
    <div class="yard-ledger" data-p1-dynamic>
      <article class="reveal-up reveal-delay-1"><span><?php echo icon('snowflake', 24); ?></span><h3>Driveway and lot plowing</h3><p>The village gives owners 24 hours to clear walks, and overnight alternate side parking runs December 1 to March 31. Plowing is arranged before winter. See <a href="/services/snow-removal/">snow removal</a>.</p></article>
      <article class="reveal-up reveal-delay-2"><span><?php echo icon('leaf', 24); ?></span><h3>Weekly lawn care</h3><p>Mowing at 3 to 3.5 inches, trimming and edging for village homes on either side of US 51. See <a href="/services/residential-lawn-care/">residential lawn care</a>.</p></article>
      <article class="reveal-up reveal-delay-3"><span><?php echo icon('layers', 24); ?></span><h3>Mulch and bed edging</h3><p>Two to four inches of mulch in a cleanly edged bed holds soil in place and keeps it out of the storm drain and the lake. See <a href="/services/mulching-services/">mulching</a>.</p></article>
      <article class="reveal-up reveal-delay-4"><span><?php echo icon('sprout', 24); ?></span><h3>New-lot lawn repair</h3><p>Thin turf on recently built lots is aerated, top-dressed and overseeded in late summer. See <a href="/services/lawn-restoration/">lawn restoration</a>.</p></article>
    </div>
  </div>
</section>

<section class="section area-ground texture-grain slant-top" aria-labelledby="ground-h2">
  <span class="grain-layer" aria-hidden="true"></span>
  <div class="container">
    <div class="area-ground__copy reveal-left">
      <span class="eyebrow-label">Lake, soil and winter rules</span>
      <h2 id="ground-h2">What should McFarland property owners know before starting yard work?</h2>
      <p>Three things set McFarland apart, and RAH Solutions checks each one at the free estimate.</p>
      <ul class="ground-points">
        <li><?php echo icon('check-circle', 18); ?><span><b>Two lakes downhill.</b> With Lake Waubesa to the west and Mud Lake to the south, bare soil, loose mulch and leaf piles should not be left where rain can carry them to the street.</span></li>
        <li><?php echo icon('check-circle', 18); ?><span><b>Village snow rules.</b> McFarland requires sidewalks cleared within 24 hours after snow stops, bans moving snow onto streets or public land, and asks for 3 feet of clearance around hydrants.</span></li>
        <li><?php echo icon('check-circle', 18); ?><span><b>Zone 5b planting.</b> McFarland’s ZIP code is in USDA hardiness zone 5b. Shrubs and perennials are chosen for it, and lawn seeding is timed for mid-August to mid-September.</span></li>
      </ul>
    </div>
    <figure class="area-ground__photo reveal-right"><?php echo picture('plow-trucks-ready-snow', 'Two pickup trucks fitted with snow plows parked on a snow-covered lot', '(max-width: 860px) 100vw, 50vw'); ?><figcaption>Two company plow trucks on a snowy lot</figcaption></figure>
  </div>
</section>

<section class="section area-services" aria-labelledby="svc-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Services in McFarland</span>
      <h2 id="svc-h2">Which RAH Solutions services are available in McFarland?</h2>
      <p>All 15. RAH Solutions LLC lists three that suit McFarland here, and the <a href="/services/">services page</a> lists the rest.</p>
    </div>
    <div class="services-grid" data-p1-dynamic>
      <?php echo serviceCards(relatedServices(['snow-removal', 'residential-lawn-care', 'mulching-services']), '(max-width: 560px) 100vw, 33vw'); ?>
    </div>
    <div class="nearby">
      <h3>Nearby towns RAH Solutions serves</h3>
      <ul>
        <?php foreach (['madison-wi', 'stoughton-wi', 'oregon-wi', 'edgerton-wi', 'evansville-wi'] as $nb): $na = areaBySlug($nb); ?>
        <li><a href="<?php echo areaHref($na); ?>"><?php echo icon('map-pin', 14); ?> <?php echo e($na['name'] . ', ' . $na['state']); ?></a></li>
        <?php endforeach; ?>
        <li><a href="/service-area/"><?php echo icon('map', 14); ?> Full service area</a></li>
      </ul>
    </div>
  </div>
</section>

<section class="section area-faq" aria-labelledby="faq-h2">
  <div class="container faq-wrap">
    <div class="section-head reveal-left">
      <span class="eyebrow-label">McFarland FAQ</span>
      <h2 id="faq-h2">What do McFarland property owners ask RAH Solutions?</h2>
    </div>
    <div><?php echo faqList($faqs, 1); ?></div>
  </div>
</section>

<section class="area-close texture-grain" aria-labelledby="close-h2">
  <span class="grain-layer" aria-hidden="true"></span>
  <div class="container">
    <div>
      <h2 id="close-h2">Get a free McFarland estimate</h2>
      <p>Call RAH Solutions LLC at <?php echo e($phone); ?>, Monday–Friday 8 AM–5 PM, or send the form and Robert will set a time to see your property.</p>
    </div>
    <div class="actions">
      <a class="btn btn-accent" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> Call now</a>
      <button type="button" class="btn btn-outline-white" data-open-estimate>Request an estimate</button>
    </div>
  </div>
</section>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
