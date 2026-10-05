<?php
/*
 * Edgerton, WI — home base town page.
 * Local facts and sources (checked 5 Oct 2026):
 *  - City in Rock County with a small part in Dane County; 2020 census population 5,945; elevation about 817 ft;
 *    "Tobacco City U.S.A.", once as many as 52 tobacco warehouses; Sterling North Home and Museum (author of "Rascal");
 *    Saunders Creek runs through the city; Lake Koshkonong is a few minutes away; US 51, WIS 59, I-39/90.
 *    https://en.wikipedia.org/wiki/Edgerton,_Wisconsin
 *  - USDA Plant Hardiness Zone Map (2023), ZIP 53534: zone 5b. https://planthardiness.ars.usda.gov/
 *  - Seeding window and mowing height: UW–Madison Extension lawn care guidance. https://hort.extension.wisc.edu/
 * No photo in the client library carries location data, so no photo on this page is described as Edgerton work.
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$area            = areaBySlug('edgerton-wi');
$currentPage     = 'service-area';
$pageType        = 'city';
$citySlug        = 'edgerton-wi';
$pageTitle       = 'Landscaper in Edgerton, WI | Lawn Care & Snow | RAH Solutions';
$pageDescription = 'RAH Solutions LLC is based in Edgerton, WI: lawn care, landscaping, concrete, excavating and snow removal from downtown to Lake Koshkonong. Free estimates.';
$canonicalUrl    = $siteUrl . '/areas/edgerton-wi/';
$pageCss         = ['area'];
$pageStyle       = <<<CSS
/* Edgerton: home base — leaf-green chip, teal ledger icons, mist town card */
.page-edgerton .parish-chip { background: var(--color-accent); color: var(--color-ink); border-color: var(--color-accent); }
.page-edgerton .parish-chip svg { color: var(--color-ink); }
.page-edgerton .town-card { border-top: 4px solid var(--color-accent); background: var(--color-mist); }
.page-edgerton .yard-ledger article:nth-child(odd) > span { background: var(--color-secondary); }
.page-edgerton .area-ground__photo img { object-position: 50% 60%; }
CSS;

$faqs = [
    ['Is there a landscaper near me in Edgerton, WI?',
     'Yes. RAH Solutions LLC is based in Edgerton and has worked here since 2023. Call (608) 501-5123, Monday to Friday, 8 AM to 5 PM, for a free on-site estimate at any Edgerton address, in town or out toward Lake Koshkonong.'],
    ['Does RAH Solutions plow snow in Edgerton?',
     'Yes. RAH Solutions provides <a href="/services/snow-removal/">snow removal</a> for Edgerton driveways and commercial lots with its own plow trucks. Winter accounts are arranged in the fall, before the first storm, so call early to get on the list.'],
    ['When should an Edgerton lawn be seeded?',
     'Mid-August through mid-September is the best window for the cool-season grasses that grow in Rock County, according to UW–Madison Extension. Soil is warm, nights are cooler and weeds are slowing down. See the <a href="/blog/when-to-aerate-and-overseed-southern-wisconsin/">aeration and overseeding guide</a> and <a href="/services/lawn-restoration/">lawn restoration</a>.'],
    ['Do you work on lake properties near Edgerton?',
     'Yes. RAH Solutions serves the Edgerton addresses around Lake Koshkonong and along the Rock River near Newville. Low, wet ground near the water is common there, so grading and drainage are looked at before any planting or concrete work.'],
];

$schemaNodes = [
    webPageNode(),
    breadcrumbNode([['Home', '/'], ['Service Area', '/service-area/'], ['Edgerton, WI', '/areas/edgerton-wi/']]),
    serviceSchemaNode('Landscaping, lawn care and snow removal in Edgerton, WI', 'Lawn care, landscaping, concrete, excavating, seasonal cleanups and snow removal for homes and businesses in Edgerton, Wisconsin.', $canonicalUrl, ['@type' => 'City', 'name' => 'Edgerton, WI']),
    ['@type' => 'Place', 'name' => 'Edgerton, Wisconsin', 'address' => ['@type' => 'PostalAddress', 'addressLocality' => 'Edgerton', 'addressRegion' => 'WI', 'postalCode' => '53534', 'addressCountry' => 'US'], 'containedInPlace' => ['@type' => 'AdministrativeArea', 'name' => 'Rock County, WI']],
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-edgerton">

<section class="hero area-hero area-hero--plain" aria-label="Landscaper in Edgerton, WI">
  <svg class="floating-facet" viewBox="0 0 120 110" fill="none" stroke="currentColor" stroke-width="1" stroke-linejoin="round" aria-hidden="true"><path d="M34 6H86L112 32 60 104 8 32ZM8 32H112M34 6 44 32 60 6 76 32 86 6M44 32 60 104 76 32"/></svg>
  <span class="grain" aria-hidden="true"></span>
  <div class="container hero-grid hero-grid--form">
    <div class="hero-text">
      <?php echo breadcrumbs([['Home', '/'], ['Service Area', '/service-area/'], ['Edgerton, WI', '/areas/edgerton-wi/']]); ?>
      <span class="parish-chip"><?php echo icon('map-pin', 14); ?> Rock County · Home base</span>
      <h1 class="hero-title">Landscaper in Edgerton, WI</h1>
      <p class="page-answer">RAH Solutions LLC is based in Edgerton and has handled lawn care, landscaping, concrete, excavating and snow removal here since 2023, from the older streets near the tobacco warehouse district to lake homes on Koshkonong. Estimates are free and on site.</p>
      <div class="hero-actions">
        <button type="button" class="btn btn-accent btn-lg hero-form-open" data-open-estimate>Get a free estimate</button>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> or call <?php echo e($phone); ?></a>
      </div>
    </div>
    <?php $heroFormId = 'hero-edgerton'; $heroFormHeading = 'Free estimate in Edgerton'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
  </div>
</section>

<section class="section area-intro" aria-labelledby="intro-h2">
  <div class="container area-intro__grid">
    <div class="area-copy">
      <p><strong>RAH Solutions LLC</strong> is a licensed and insured, family-owned landscaper based in Edgerton, Wisconsin. Robert Harried started the company in 2023, and it serves homes and businesses across Rock and Dane counties.</p>
      <h2 id="intro-h2">Does RAH Solutions do landscaping and lawn care in Edgerton?</h2>
      <div class="answer-block">
        <p>Yes. Edgerton is RAH Solutions LLC’s home base. The crew mows and maintains lawns, installs landscaping and mulch, pours concrete, grades and drains yards, handles spring and fall cleanups, and plows snow for Edgerton homes and businesses, with free on-site estimates from owner Robert Harried.</p>
      </div>
      <p>If you are searching for a landscaper near me in Edgerton, you are in the town RAH Solutions knows best. Edgerton is a city of about 5,900 people in northern Rock County, with a small corner in Dane County, and its yards change a lot in a short drive.</p>
      <p>Near downtown, the streets around the old brick tobacco warehouses have older homes on modest lots with mature maples, tight side yards and, often, original concrete steps and walks that have been through a century of winters. Edgerton once had as many as 52 tobacco warehouses, and the neighborhoods that grew up around them are where sunken steps and cracked walks are most likely to need <a href="/services/concrete-services/">concrete replacement</a>.</p>
      <p>Saunders Creek runs through the city, and the lots along it sit low. Farther out, toward the I-39/90 interchanges and along US 51 and Highway 59, newer homes sit on larger lots, where lawns seeded onto compacted construction fill are often thin. Northeast of town, Lake Koshkonong and the Rock River at Newville bring lake homes, seasonal properties and long gravel drives.</p>
      <p>Each of those needs different work, which is why RAH Solutions looks at the property before quoting anything.</p>
    </div>
    <aside class="town-card" aria-labelledby="town-card-h2">
      <h2 id="town-card-h2">Edgerton at a glance</h2>
      <dl>
        <div><dt>County</dt><dd>Rock (a small part in Dane)</dd></div>
        <div><dt>Hardiness zone</dt><dd>USDA 5b (2023 map, ZIP 53534)</dd></div>
        <div><dt>Watch for</dt><dd>Low ground along Saunders Creek, compacted fill on newer lots, old concrete near downtown</dd></div>
        <div><dt>Distance from our base</dt><dd>Home base: Edgerton, WI</dd></div>
      </dl>
      <a class="btn btn-primary" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> <?php echo e($phone); ?></a>
    </aside>
  </div>
</section>

<section class="section area-work" aria-labelledby="work-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Edgerton yards</span>
      <h2 id="work-h2">What yard work is most common in Edgerton?</h2>
      <p>RAH Solutions LLC offers every service in Edgerton. These four fit the town’s layout best.</p>
    </div>
    <div class="yard-ledger" data-p1-dynamic>
      <article class="reveal-up reveal-delay-1"><span><?php echo icon('leaf', 24); ?></span><h3>Mowing routes in town</h3><p>Weekly mowing, trimming and edging for homes on Edgerton’s older streets and newer subdivisions, and for businesses along US 51. See <a href="/services/lawn-maintenance/">lawn maintenance</a>.</p></article>
      <article class="reveal-up reveal-delay-2"><span><?php echo icon('hammer', 24); ?></span><h3>Steps, walks and patios</h3><p>Older homes near downtown often have steps that have sunk or tilted. They are torn out and re-poured on a compacted base. See <a href="/services/concrete-services/">concrete services</a>.</p></article>
      <article class="reveal-up reveal-delay-3"><span><?php echo icon('droplets', 24); ?></span><h3>Grading and drainage</h3><p>Low lots near Saunders Creek and the lake hold water in spring. Regrading, swales and buried downspout lines move it away from the house. See <a href="/services/excavating-services/">excavating</a>.</p></article>
      <article class="reveal-up reveal-delay-4"><span><?php echo icon('snowflake', 24); ?></span><h3>Winter plowing</h3><p>Driveways in town, long rural drives and commercial lots are cleared by the same crew that mows them in summer. See <a href="/services/snow-removal/">snow removal</a>.</p></article>
    </div>
  </div>
</section>

<section class="section area-ground texture-grain slant-top" aria-labelledby="ground-h2">
  <span class="grain-layer" aria-hidden="true"></span>
  <div class="container">
    <div class="area-ground__copy reveal-left">
      <span class="eyebrow-label">Soil, water and winter</span>
      <h2 id="ground-h2">What should Edgerton property owners know before starting yard work?</h2>
      <p>Three local conditions decide how an Edgerton project goes, and RAH Solutions checks all three at the free estimate.</p>
      <ul class="ground-points">
        <li><?php echo icon('check-circle', 18); ?><span><b>Slow-draining soil.</b> Much of the Edgerton area is silt loam over a heavier subsoil. Water sits after snowmelt, so beds, lawns and slabs are graded to shed it.</span></li>
        <li><?php echo icon('check-circle', 18); ?><span><b>Zone 5b winters.</b> Edgerton’s ZIP code is in USDA hardiness zone 5b. Plants are chosen for it, and concrete and patio bases are built for ground that freezes deep and thaws many times.</span></li>
        <li><?php echo icon('check-circle', 18); ?><span><b>A short seeding window.</b> Lawn repair is timed for mid-August to mid-September, when Kentucky bluegrass and fescue establish best. Sod can go down across more of the season.</span></li>
      </ul>
    </div>
    <figure class="area-ground__photo reveal-right"><?php echo picture('red-barn-mowed-lawn', 'Mowed lawn in front of a long red barn in late-day light', '(max-width: 860px) 100vw, 50vw'); ?><figcaption>A rural property mowed by the RAH Solutions crew</figcaption></figure>
  </div>
</section>

<section class="section area-services" aria-labelledby="svc-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Services in Edgerton</span>
      <h2 id="svc-h2">Which RAH Solutions services are available in Edgerton?</h2>
      <p>All 15. RAH Solutions LLC lists three of the most useful for Edgerton here, and the <a href="/services/">services page</a> lists the rest.</p>
    </div>
    <div class="services-grid" data-p1-dynamic>
      <?php echo serviceCards(relatedServices(['lawn-maintenance', 'concrete-services', 'snow-removal']), '(max-width: 560px) 100vw, 33vw'); ?>
    </div>
    <div class="nearby">
      <h3>Nearby towns RAH Solutions serves</h3>
      <ul>
        <?php foreach (['milton-wi', 'stoughton-wi', 'janesville-wi', 'evansville-wi', 'fort-atkinson-wi'] as $nb): $na = areaBySlug($nb); ?>
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
      <span class="eyebrow-label">Edgerton FAQ</span>
      <h2 id="faq-h2">What do Edgerton property owners ask RAH Solutions?</h2>
    </div>
    <div><?php echo faqList($faqs, 1); ?></div>
  </div>
</section>

<section class="area-close texture-grain" aria-labelledby="close-h2">
  <span class="grain-layer" aria-hidden="true"></span>
  <div class="container">
    <div>
      <h2 id="close-h2">Get a free Edgerton estimate</h2>
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
