<?php
/*
 * Madison, WI — town page (south and east sides; the business is a small Edgerton company, no isthmus claims).
 * Local facts and sources (checked 5 Oct 2026):
 *  - City in Dane County; 2020 census population 269,840; elevation 873 ft; Lakes Mendota, Monona and Wingra;
 *    downtown on an isthmus between Mendota and Monona; Yahara River chain of lakes.
 *    https://en.wikipedia.org/wiki/Madison,_Wisconsin
 *  - Beltline carries US 12 with parts of US 14, US 18 and US 151 and runs east to the I-39/90 interchange.
 *    https://en.wikipedia.org/wiki/Beltline_Highway
 *  - Starkweather Creek drains most of the east side into Lake Monona near Olbrich Park; its east branch crosses
 *    Stoughton Road; former marshes were filled and the creek straightened and deepened for urban runoff.
 *    https://pbswisconsin.org/news-item/something-has-to-be-done-life-along-madisons-starkweather-creek-one-of-wisconsins-most-polluted-waterways/
 *    https://www.wisconsinrivertrips.com/segments/starkweather-creek
 *  - Lake Edge (Cottage Grove Road to Monona Golf Course, Monona Drive to Stoughton Road; 1940s–1960s Cape Cods, ranches,
 *    bungalows), Glendale (1940s–1960s) and Elvehjem (ranches and split-levels, 1950s–1970s).
 *    https://www.madcitydreamhomes.com/lake-edge.php  ·  https://www.homes.com/local-guide/madison-wi/elvehjem-neighborhood/
 *    https://www.homes.com/madison-wi/glendale-neighborhood/
 *  - Sidewalk snow rule (MGO 10.28): clear by noon the day after the snow stops, full width edge to edge, plus curb
 *    ramps bordering the property; sand for traction on ice.
 *    https://www.cityofmadison.com/live-work/winter/snow-removal/sidewalks
 *  - Terrace: Street Terrace Permit from City Engineering for driveway aprons, sidewalk replacement, pavers, walls and
 *    terrace walks (MGO 10.09(5)); plants kept under 30 inches where sight lines are needed.
 *    https://www.cityofmadison.com/engineering/permits/street-terrace-permit
 *  - Terrace trees: City Forester has authority (MGO 10.10); residents cannot plant their own tree in the terrace.
 *    https://www.cityofmadison.com/streets/urban-forestry/resources-for-new-trees/new-replacement-trees-faq
 *  - Seeding window, mowing height: UW–Madison Extension. https://hort.extension.wisc.edu/
 * Left out because not verified: 2023 USDA zone letter for Madison ZIPs, road distance or drive time from Edgerton,
 * Madison snow-fine amounts, salt-use rules, and any south-side neighborhood names.
 * No photo in the client library carries location data, so the photo on this page is not described as Madison work.
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$area            = areaBySlug('madison-wi');
$currentPage     = 'service-area';
$pageType        = 'city';
$citySlug        = 'madison-wi';
$pageTitle       = 'Landscaper in Madison, WI | RAH Solutions LLC';
$pageDescription = 'RAH Solutions LLC, an Edgerton landscaper, offers lawn care, landscaping and concrete on the south and east sides of Madison, WI. Free on-site estimates.';
$canonicalUrl    = $siteUrl . '/areas/madison-wi/';
$pageCss         = ['area'];
$pageStyle       = <<<CSS
/* Madison: lake city — teal chip, aqua-washed town card, alternating teal ledger icons */
.page-madison .parish-chip { background: var(--color-primary); color: var(--color-white); border-color: var(--color-primary); }
.page-madison .parish-chip svg { color: var(--color-aqua); }
.page-madison .town-card { border-top: 4px solid var(--color-aqua); background: color-mix(in srgb, var(--color-primary) 7%, var(--color-surface)); }
.page-madison .yard-ledger article:nth-child(3n+1) > span { background: var(--color-primary); }
.page-madison .ground-points li svg { color: var(--color-aqua); }
.page-madison .area-ground__photo img { object-position: 50% 65%; }
CSS;

$faqs = [
    ['Is there a landscaper near me in Madison who covers the south and east sides?',
     'RAH Solutions LLC is a licensed and insured landscaper based in Edgerton, southeast of Madison along I-39/90. Its Madison service is centered on the south and east sides, the part of the city closest to its base. Call (608) 501-5123, Monday to Friday, 8 AM to 5 PM, to ask about your address.'],
    ['Does RAH Solutions work downtown or on the isthmus?',
     'RAH Solutions is a small Edgerton company and keeps its Madison service to the south and east sides and the communities nearby, such as McFarland and Stoughton. For an address downtown, on the isthmus or on the far west side, call first and Robert will tell you plainly whether the job fits.'],
    ['When do Madison sidewalks have to be shoveled?',
     'By noon the day after the snow stops, under Madison General Ordinance 10.28. The City asks for the full width of the walk, edge to edge, plus any curb ramps that border the property, with sand on ice for traction. RAH Solutions sets up <a href="/services/snow-removal/">snow removal</a> accounts in the fall, so ask early whether your address fits a route.'],
    ['Can I plant a tree or pour concrete in the terrace in front of my Madison home?',
     'Not without the City. Madison’s Forestry section decides what trees go in the terrace, and residents cannot plant their own there. A new driveway apron, a sidewalk replacement, or pavers and walls between the sidewalk and the curb need a Street Terrace Permit from City Engineering. <a href="/services/concrete-services/">Concrete work</a> on your own side of the sidewalk does not involve the terrace.'],
];

$schemaNodes = [
    webPageNode(),
    breadcrumbNode([['Home', '/'], ['Service Area', '/service-area/'], ['Madison, WI', '/areas/madison-wi/']]),
    serviceSchemaNode('Landscaping, lawn care and concrete on the south and east sides of Madison, WI', 'Lawn care, landscaping, concrete, grading, seasonal cleanups and snow removal for homes and businesses on the south and east sides of Madison, Wisconsin.', $canonicalUrl, ['@type' => 'City', 'name' => 'Madison, WI']),
    ['@type' => 'Place', 'name' => 'Madison, Wisconsin', 'address' => ['@type' => 'PostalAddress', 'addressLocality' => 'Madison', 'addressRegion' => 'WI', 'addressCountry' => 'US'], 'containedInPlace' => ['@type' => 'AdministrativeArea', 'name' => 'Dane County, WI']],
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-madison">

<section class="hero area-hero area-hero--plain" aria-label="Landscaper in Madison, WI">
  <svg class="floating-facet" viewBox="0 0 120 110" fill="none" stroke="currentColor" stroke-width="1" stroke-linejoin="round" aria-hidden="true"><path d="M34 6H86L112 32 60 104 8 32ZM8 32H112M34 6 44 32 60 6 76 32 86 6M44 32 60 104 76 32"/></svg>
  <span class="grain" aria-hidden="true"></span>
  <div class="container hero-grid hero-grid--form">
    <div class="hero-text">
      <?php echo breadcrumbs([['Home', '/'], ['Service Area', '/service-area/'], ['Madison, WI', '/areas/madison-wi/']]); ?>
      <span class="parish-chip"><?php echo icon('map-pin', 14); ?> Dane County · South and east sides</span>
      <h1 class="hero-title">Landscaper in Madison, WI</h1>
      <p class="page-answer">RAH Solutions LLC, a family-owned landscaper from Edgerton, offers lawn care, landscaping, concrete, grading and seasonal cleanups on the south and east sides of Madison, the neighborhoods nearest I-39/90 and the Beltline. Estimates are free and on site.</p>
      <div class="hero-actions">
        <button type="button" class="btn btn-accent btn-lg hero-form-open" data-open-estimate>Get a free estimate</button>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> or call <?php echo e($phone); ?></a>
      </div>
    </div>
    <?php $heroFormId = 'hero-madison'; $heroFormHeading = 'Free estimate in Madison'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
  </div>
</section>

<section class="section area-intro" aria-labelledby="intro-h2">
  <div class="container area-intro__grid">
    <div class="area-copy">
      <p><strong>RAH Solutions LLC</strong> is a licensed and insured, family-owned landscaper based in Edgerton, Wisconsin. Robert Harried started the company in 2023, and it serves homes and businesses across Rock and Dane counties, including the south and east sides of Madison.</p>
      <h2 id="intro-h2">Does RAH Solutions do landscaping in Madison?</h2>
      <div class="answer-block">
        <p>Yes, on the south and east sides. RAH Solutions LLC is a small Edgerton company, so its Madison service centers on the neighborhoods nearest I-39/90, the Beltline and Stoughton Road, where it offers lawn care, landscaping, concrete and grading with free on-site estimates.</p>
      </div>
      <p>Madison is a city of 269,840 people (2020 census) built around Lakes Mendota, Monona and Wingra, with its downtown squeezed onto an isthmus. A search for a landscaper near me in Madison turns up plenty of companies, and it is fair to ask why one from Edgerton belongs on the list. The honest answer is geography: the southeast corner of the city sits right where the Beltline meets I-39/90, the same Interstate that passes Edgerton. RAH Solutions does not claim to cover the isthmus or the far west side.</p>
      <p>The southeast side is largely mid-century. Lake Edge, between Cottage Grove Road and the Monona Golf Course and from Monona Drive to Stoughton Road, is mostly Cape Cods, ranches and bungalows from the 1940s through the 1960s. Glendale dates from the same decades, and Elvehjem, farther east, is ranches and split-levels from the 1950s to the 1970s. Yards from that era share a few traits: a concrete stoop and front walk that are now sixty or seventy years old, foundation shrubs that have outgrown their windows, and lawns shaded by trees planted when the house was new.</p>
      <p>Water is the other constant. Starkweather Creek drains most of the east side into Lake Monona near Olbrich Park, and its east branch crosses Stoughton Road. Much of that ground was marsh before it was filled and the creek was straightened, so low back yards on the east side can stay wet long after a rain.</p>
    </div>
    <aside class="town-card" aria-labelledby="town-card-h2">
      <h2 id="town-card-h2">Madison at a glance</h2>
      <dl>
        <div><dt>County</dt><dd>Dane</dd></div>
        <div><dt>Size and elevation</dt><dd>269,840 residents (2020 census), about 873 ft</dd></div>
        <div><dt>Where we focus</dt><dd>South and east sides, near the Beltline, Stoughton Road and I-39/90</dd></div>
        <div><dt>Watch for</dt><dd>City terrace permits, a noon sidewalk snow deadline, wet ground near Starkweather Creek</dd></div>
      </dl>
      <a class="btn btn-primary" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> <?php echo e($phone); ?></a>
    </aside>
  </div>
</section>

<section class="section area-work" aria-labelledby="work-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Madison yards</span>
      <h2 id="work-h2">What yard work suits Madison’s south and east sides?</h2>
      <p>RAH Solutions LLC offers its full service list on Madison’s south and east sides. These four fit mid-century lots best.</p>
    </div>
    <div class="yard-ledger" data-p1-dynamic>
      <article class="reveal-up reveal-delay-1"><span><?php echo icon('hammer', 24); ?></span><h3>Stoops, walks and patios</h3><p>Original concrete on a 1950s ranch has been through decades of freeze and thaw. Worn steps, private walks and patios are removed and re-poured on a compacted base. See <a href="/services/concrete-services/">concrete services</a>.</p></article>
      <article class="reveal-up reveal-delay-2"><span><?php echo icon('trees', 24); ?></span><h3>New beds and plantings</h3><p>Overgrown foundation plantings are cleared and replaced with shrubs and perennials sized for the house, with fresh edging and mulch. See <a href="/services/landscape-installation/">landscape installation</a>.</p></article>
      <article class="reveal-up reveal-delay-3"><span><?php echo icon('droplets', 24); ?></span><h3>Drainage and grading</h3><p>Low yards on former marsh ground are regraded, and downspout lines are run underground so roof water leaves the foundation. See <a href="/services/excavating-services/">excavating services</a>.</p></article>
      <article class="reveal-up reveal-delay-4"><span><?php echo icon('leaf', 24); ?></span><h3>Mowing and upkeep</h3><p>Regular mowing, trimming and edging for homes and small commercial sites near Stoughton Road and the Beltline. See <a href="/services/lawn-maintenance/">lawn maintenance</a>.</p></article>
    </div>
  </div>
</section>

<section class="section area-ground texture-grain slant-top" aria-labelledby="ground-h2">
  <span class="grain-layer" aria-hidden="true"></span>
  <div class="container">
    <div class="area-ground__copy reveal-left">
      <span class="eyebrow-label">Permits, terraces and winter</span>
      <h2 id="ground-h2">What should Madison property owners know before starting yard work?</h2>
      <p>Madison regulates the edge of a lot more closely than smaller towns do, and RAH Solutions plans around three city rules.</p>
      <ul class="ground-points">
        <li><?php echo icon('check-circle', 18); ?><span><b>The terrace belongs to the City.</b> The strip between sidewalk and curb is public. A driveway apron, sidewalk replacement, pavers or a wall there needs a Street Terrace Permit from City Engineering, and plantings must stay under 30 inches where drivers need a clear view.</span></li>
        <li><?php echo icon('check-circle', 18); ?><span><b>Terrace trees are Forestry’s call.</b> Under Madison ordinance 10.10 the City Forester has authority over terrace trees, and residents cannot plant their own. Bed and lawn work is planned around their roots.</span></li>
        <li><?php echo icon('check-circle', 18); ?><span><b>Sidewalks are due by noon.</b> Madison ordinance 10.28 requires the full width of the public walk, and the curb ramps beside it, to be cleared by noon the day after snow stops.</span></li>
      </ul>
    </div>
    <figure class="area-ground__photo reveal-right"><?php echo picture('concrete-patio-steps-stone-ranch', 'New concrete patio with a rounded corner and steps', '(max-width: 860px) 100vw, 50vw'); ?><figcaption>A new concrete patio with a rounded corner and steps, poured by the RAH Solutions crew</figcaption></figure>
  </div>
</section>

<section class="section area-services" aria-labelledby="svc-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Services in Madison</span>
      <h2 id="svc-h2">Which RAH Solutions services are available in Madison?</h2>
      <p>RAH Solutions LLC offers all 15 services on Madison’s south and east sides. Three that suit older city lots are below, and the <a href="/services/">services page</a> lists the rest.</p>
    </div>
    <div class="services-grid" data-p1-dynamic>
      <?php echo serviceCards(relatedServices(['concrete-services', 'landscape-installation', 'excavating-services']), '(max-width: 560px) 100vw, 33vw'); ?>
    </div>
    <div class="nearby">
      <h3>Nearby towns RAH Solutions serves</h3>
      <ul>
        <?php foreach (['mcfarland-wi', 'stoughton-wi', 'oregon-wi', 'edgerton-wi', 'evansville-wi'] as $nb): $na = areaBySlug($nb); ?>
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
      <span class="eyebrow-label">Madison FAQ</span>
      <h2 id="faq-h2">What do Madison property owners ask RAH Solutions?</h2>
    </div>
    <div><?php echo faqList($faqs, 1); ?></div>
  </div>
</section>

<section class="area-close texture-grain" aria-labelledby="close-h2">
  <span class="grain-layer" aria-hidden="true"></span>
  <div class="container">
    <div>
      <h2 id="close-h2">Get a free Madison estimate</h2>
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
