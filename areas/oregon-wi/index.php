<?php
/*
 * Oregon, WI — town page.
 * Local facts and sources (checked 5 Oct 2026):
 *  - Village in Dane County, mostly within the Town of Oregon; 2020 census population 11,179; elevation 1,053 ft;
 *    4.49 square miles, all land; US 14 and WIS 138 meet at the village's southeastern corner; the former US 14 route is
 *    County Trunk MM; bypass built 1976 to 1978 along the north and east sides; Rome Corners, just south of the village,
 *    settled 1841; railroad arrived 1864; downtown buildings include the Netherwood Block and the original water tower
 *    and pump house on Janesville Street; Red Brick School built 1922; ZIP 53575.
 *    https://en.wikipedia.org/wiki/Oregon,_Wisconsin
 *  - Sidewalks and handicap ramps cleared across their entire width within 24 hours following the end of the snowfall;
 *    adjacent fire hydrants cleared; $25 per day forfeiture; snow emergency (3 inches or more) bans street parking.
 *    https://www.oregonwi.gov/425/Snow-and-Ice-Removal
 *  - Oregon is the largest community in the Badfish Creek watershed; Oregon Branch of Badfish Creek (Wisconsin DNR).
 *    https://apps.dnr.wi.gov/water/watershedDetail.aspx?code=LR07&Name=Badfish+Creek
 *  - Oregon Parks neighborhood on the northwest side off Alpine Parkway, beside Keller Alpine Meadows Park and Lerner
 *    Conservation Park. https://www.madcitydreamhomes.com/oregon-parks.php
 *    Bergamont Park, 450 Bergamont Blvd (village facilities list). https://www.oregonwi.gov/facilities
 *  - Road distance Edgerton to Oregon: 22.3 miles, about 37 minutes (OSRM routing on OpenStreetMap data).
 *    https://router.project-osrm.org/route/v1/driving/-89.0676,42.8353;-89.3846,42.9261?overview=false
 *  - Hardiness: the 2023 half-zone for ZIP 53575 was not confirmed on the USDA map, so the page says "zone 5" only.
 *    https://planthardiness.ars.usda.gov/
 *  - Seeding window and sod care: UW–Madison Extension lawn care guidance. https://hort.extension.wisc.edu/
 * No photo in the client library carries location data, so no photo on this page is described as Oregon work.
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$area            = areaBySlug('oregon-wi');
$currentPage     = 'service-area';
$pageType        = 'city';
$citySlug        = 'oregon-wi';
$pageTitle       = 'Landscaper in Oregon, WI | RAH Solutions LLC';
$pageDescription = 'RAH Solutions LLC offers sod, lawn repair, landscape installation and grading in the village of Oregon, WI, from downtown to Bergamont. Free on-site estimates.';
$canonicalUrl    = $siteUrl . '/areas/oregon-wi/';
$pageCss         = ['area'];
$pageStyle       = <<<CSS
/* Oregon: growing village — deep-green chip, leaf-green town card rule, alternating ledger icons */
.page-oregon .parish-chip { background: var(--color-secondary); color: var(--color-white); border-color: var(--color-secondary); }
.page-oregon .parish-chip svg { color: var(--color-accent); }
.page-oregon .town-card { border-left: 4px solid var(--color-secondary); background: color-mix(in srgb, var(--color-accent) 10%, var(--color-paper)); }
.page-oregon .yard-ledger article:nth-child(3n+1) > span { background: var(--color-dark-green); }
.page-oregon .area-ground__photo img { object-position: 50% 45%; }
.page-oregon .nearby h3 { color: var(--color-secondary); }
CSS;

$faqs = [
    ['Is there a landscaper near me in Oregon, WI?',
     'Yes. RAH Solutions LLC is a licensed and insured landscaper based in Edgerton that serves the village of Oregon. Call (608) 501-5123, Monday to Friday, 8 AM to 5 PM, for a free on-site estimate anywhere in the village or the surrounding Town of Oregon.'],
    ['Should a new Oregon lawn be sod or seed?',
     'Sod gives a finished lawn right away and can go down through most of the growing season if it is watered daily for the first couple of weeks. Seed costs less but is best sown from mid-August to mid-September. Compare both in the <a href="/blog/sod-vs-seed-new-lawn-wisconsin/">sod versus seed guide</a>, or see <a href="/services/sod-installation/">sod installation</a>.'],
    ['What are the Village of Oregon’s sidewalk snow rules?',
     'The Village of Oregon requires owners or occupants to clear the entire width of the sidewalk and any handicap ramps within 24 hours following the end of a snowfall, and to clear fire hydrants next to the property. RAH Solutions offers <a href="/services/snow-removal/">snow removal</a> in Oregon, with winter accounts set up before the season.'],
    ['Can RAH Solutions regrade a sloped yard in Oregon?',
     'Yes. RAH Solutions has its own skid steer and excavator for grading, leveling and drainage work. A slope is shaped so water moves away from the house, then it is seeded or sodded quickly so the soil stays put. See <a href="/services/excavating-services/">excavating services</a>.'],
];

$schemaNodes = [
    webPageNode(),
    breadcrumbNode([['Home', '/'], ['Service Area', '/service-area/'], ['Oregon, WI', '/areas/oregon-wi/']]),
    serviceSchemaNode('Landscaping, sod and lawn care in Oregon, WI', 'Sod installation, lawn restoration, landscape installation, grading, seasonal cleanups and snow removal for homes and businesses in the village of Oregon, Wisconsin.', $canonicalUrl, ['@type' => 'City', 'name' => 'Oregon, WI']),
    ['@type' => 'Place', 'name' => 'Oregon, Wisconsin', 'address' => ['@type' => 'PostalAddress', 'addressLocality' => 'Oregon', 'addressRegion' => 'WI', 'postalCode' => '53575', 'addressCountry' => 'US'], 'containedInPlace' => ['@type' => 'AdministrativeArea', 'name' => 'Dane County, WI']],
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-oregon">

<section class="hero area-hero area-hero--plain" aria-label="Landscaper in Oregon, WI">
  <svg class="floating-facet" viewBox="0 0 120 110" fill="none" stroke="currentColor" stroke-width="1" stroke-linejoin="round" aria-hidden="true"><path d="M34 6H86L112 32 60 104 8 32ZM8 32H112M34 6 44 32 60 6 76 32 86 6M44 32 60 104 76 32"/></svg>
  <span class="grain" aria-hidden="true"></span>
  <div class="container hero-grid hero-grid--form">
    <div class="hero-text">
      <?php echo breadcrumbs([['Home', '/'], ['Service Area', '/service-area/'], ['Oregon, WI', '/areas/oregon-wi/']]); ?>
      <span class="parish-chip"><?php echo icon('sprout', 14); ?> Dane County · Village on US 14</span>
      <h1 class="hero-title">Landscaper in Oregon, WI</h1>
      <p class="page-answer">RAH Solutions LLC, a licensed and insured landscaper based in Edgerton, offers sod, lawn repair, landscape installation, grading, cleanups and snow removal in the village of Oregon, from the downtown blocks on Janesville Street to the newer neighborhoods off Alpine Parkway. Estimates are free and on site.</p>
      <div class="hero-actions">
        <button type="button" class="btn btn-accent btn-lg hero-form-open" data-open-estimate>Get a free estimate</button>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> or call <?php echo e($phone); ?></a>
      </div>
    </div>
    <?php $heroFormId = 'hero-oregon'; $heroFormHeading = 'Free estimate in Oregon'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
  </div>
</section>

<section class="section area-intro" aria-labelledby="intro-h2">
  <div class="container area-intro__grid">
    <div class="area-copy">
      <p><strong>RAH Solutions LLC</strong> is a licensed and insured, family-owned landscaper based in Edgerton, Wisconsin. Robert Harried started the company in 2023, and it serves homes and businesses across Rock and Dane counties, including the village of Oregon.</p>
      <h2 id="intro-h2">Does RAH Solutions do landscaping and lawn care in Oregon, WI?</h2>
      <div class="answer-block">
        <p>Yes. RAH Solutions LLC serves the village of Oregon with sod installation, lawn restoration, landscape installation, grading and drainage, mowing, seasonal cleanups and snow removal, for homes and businesses. Owner Robert Harried gives free on-site estimates, Monday to Friday.</p>
      </div>
      <p>If you are looking for a landscaper near me in Oregon, the first thing to sort out is which Oregon your yard belongs to. The village had 11,179 residents at the 2020 census and covers about four and a half square miles, most of it inside the Town of Oregon in southern Dane County.</p>
      <p>The oldest part grew up after the railroad came through in 1864. Downtown still has the Netherwood Block and the original water tower and pump house on Janesville Street, and the Red Brick School nearby dates from 1922. Lots there are established, with settled beds, old shade trees and lawns that have been mowed for generations.</p>
      <p>The rest of the village is much newer. A bypass built from 1976 to 1978 carries US 14 around the north and east sides, where it meets Highway 138 at the southeastern corner, and the old highway through town is now County MM. Neighborhoods such as Oregon Parks, off Alpine Parkway beside Keller Alpine Meadows Park and Lerner Conservation Park, and the Bergamont area around its golf course have lawns that started on graded construction soil.</p>
      <p>That split decides the work. An older downtown yard usually needs renovation: overseeding, bed cleanup and pruning. A newer lot more often needs the basics finished: final grading, <a href="/services/sod-installation/">sod</a> or seed, and a first round of <a href="/services/landscape-installation/">trees, shrubs and beds</a>.</p>
    </div>
    <aside class="town-card" aria-labelledby="town-card-h2">
      <h2 id="town-card-h2">Oregon at a glance</h2>
      <dl>
        <div><dt>County</dt><dd>Dane (village, mostly within the Town of Oregon)</dd></div>
        <div><dt>Elevation</dt><dd>About 1,053 ft, in USDA zone 5</dd></div>
        <div><dt>Watch for</dt><dd>Unfinished grades on newer lots, runoff toward Badfish Creek, the 24-hour sidewalk and hydrant snow rule</dd></div>
        <div><dt>Distance from our base</dt><dd>About 22 miles northwest of Edgerton, 35 to 40 minutes by road</dd></div>
      </dl>
      <a class="btn btn-primary" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> <?php echo e($phone); ?></a>
    </aside>
  </div>
</section>

<section class="section area-work" aria-labelledby="work-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Oregon yards</span>
      <h2 id="work-h2">Which yard services fit Oregon properties best?</h2>
      <p>RAH Solutions LLC offers all 15 of its services in Oregon. These four match a village that is part 1800s downtown and part new subdivision.</p>
    </div>
    <div class="yard-ledger" data-p1-dynamic>
      <article class="reveal-up reveal-delay-1"><span><?php echo icon('layers', 24); ?></span><h3>Sod on new lots</h3><p>Soil is loosened, graded and raked smooth before the sod goes down, so the roots knit into it instead of sitting on hardpan. See <a href="/services/sod-installation/">sod installation</a>.</p></article>
      <article class="reveal-up reveal-delay-2"><span><?php echo icon('mountain', 24); ?></span><h3>Grading and drainage</h3><p>Slopes are shaped to carry water away from foundations, and downspout lines can be buried to daylight. See <a href="/services/excavating-services/">excavating services</a>.</p></article>
      <article class="reveal-up reveal-delay-3"><span><?php echo icon('trees', 24); ?></span><h3>First landscaping</h3><p>Trees, shrubs, planting beds and edging chosen for zone 5 winters and laid out for a yard that has none yet. See <a href="/services/landscape-installation/">landscape installation</a>.</p></article>
      <article class="reveal-up reveal-delay-4"><span><?php echo icon('sprout', 24); ?></span><h3>Renovating older lawns</h3><p>Shaded, thinning lawns near downtown are core aerated and overseeded in late summer. See <a href="/services/lawn-restoration/">lawn restoration</a>.</p></article>
    </div>
  </div>
</section>

<section class="section area-ground texture-grain slant-top" aria-labelledby="ground-h2">
  <span class="grain-layer" aria-hidden="true"></span>
  <div class="container">
    <div class="area-ground__copy reveal-left">
      <span class="eyebrow-label">Grade, runoff and village rules</span>
      <h2 id="ground-h2">What should Oregon property owners know before starting yard work?</h2>
      <p>Three local points shape an Oregon project, and RAH Solutions goes over each one at the free estimate.</p>
      <ul class="ground-points">
        <li><?php echo icon('check-circle', 18); ?><span><b>Higher ground, same winters.</b> Oregon sits at about 1,053 feet, more than 200 feet above Edgerton, in USDA zone 5. Frost still goes deep, so bases under walks and patios are built for it.</span></li>
        <li><?php echo icon('check-circle', 18); ?><span><b>Water heads for Badfish Creek.</b> The Wisconsin DNR lists Oregon as the largest community in the Badfish Creek watershed. Bare graded soil should be covered with sod, seed and straw, or mulch before the next hard rain.</span></li>
        <li><?php echo icon('check-circle', 18); ?><span><b>A strict sidewalk rule.</b> The village requires the full width of sidewalks and ramps, plus adjacent hydrants, cleared within 24 hours after snowfall ends. The forfeiture is $25 a day.</span></li>
      </ul>
    </div>
    <figure class="area-ground__photo reveal-right"><?php echo picture('hillside-yard-finish-graded', 'Sloped backyard with freshly graded bare soil raked smooth', '(max-width: 860px) 100vw, 50vw'); ?><figcaption>Sloped backyard graded smooth and ready for a new lawn</figcaption></figure>
  </div>
</section>

<section class="section area-services" aria-labelledby="svc-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Services in Oregon</span>
      <h2 id="svc-h2">Which RAH Solutions services are available in Oregon?</h2>
      <p>All 15. RAH Solutions LLC lists three that suit Oregon here, and the <a href="/services/">services page</a> lists the rest.</p>
    </div>
    <div class="services-grid" data-p1-dynamic>
      <?php echo serviceCards(relatedServices(['sod-installation', 'lawn-restoration', 'landscape-installation']), '(max-width: 560px) 100vw, 33vw'); ?>
    </div>
    <div class="nearby">
      <h3>Nearby towns RAH Solutions serves</h3>
      <ul>
        <?php foreach (['madison-wi', 'mcfarland-wi', 'stoughton-wi', 'evansville-wi', 'edgerton-wi'] as $nb): $na = areaBySlug($nb); ?>
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
      <span class="eyebrow-label">Oregon FAQ</span>
      <h2 id="faq-h2">What do Oregon property owners ask RAH Solutions?</h2>
    </div>
    <div><?php echo faqList($faqs, 1); ?></div>
  </div>
</section>

<section class="area-close texture-grain" aria-labelledby="close-h2">
  <span class="grain-layer" aria-hidden="true"></span>
  <div class="container">
    <div>
      <h2 id="close-h2">Get a free Oregon estimate</h2>
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
