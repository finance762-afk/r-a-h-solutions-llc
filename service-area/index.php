<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$currentPage     = 'service-area';
$pageType        = 'other';
$pageTitle       = 'Service Area: Edgerton, WI & 12 Nearby Towns | RAH Solutions';
$pageDescription = 'RAH Solutions LLC serves 13 towns from Edgerton, WI: Stoughton, Janesville, Madison, Milton, Beloit and more in Rock, Dane, Green and Jefferson counties.';
$canonicalUrl    = $siteUrl . '/service-area/';
$pageCss         = ['inner'];
$pageStyle       = <<<CSS
/* service-area hub: county headers with teal rule, map-pin anchors, county strip */
.page-areas .parish-block h3 { border-bottom: 2px solid var(--color-primary); padding-bottom: .5rem; }
.page-areas .town-list li { scroll-margin-top: calc(var(--nav-height) + 1rem); }
.page-areas .radius-note { display: grid; grid-template-columns: 56px 1fr; gap: 1rem; align-items: center; padding: 1.2rem 1.4rem; border-radius: var(--radius-lg); background: var(--color-mist); border: 1px solid var(--color-line); }
.page-areas .radius-note > span { width: 56px; height: 56px; border-radius: 50%; display: grid; place-items: center; background: var(--color-primary); color: var(--color-white); }
.page-areas .radius-note p { margin: 0; }
.page-areas .county-strip { display: flex; flex-wrap: wrap; gap: .5rem; list-style: none; padding: 0; margin: 1rem 0 0; }
.page-areas .county-strip li { font-family: var(--font-accent); font-size: .8rem; letter-spacing: .12em; text-transform: uppercase; padding: .4rem .8rem; border-radius: var(--radius-full); background: var(--color-surface); border: 1px solid var(--color-line); color: var(--color-secondary); }
CSS;

$groups = [
    'Rock County'      => 'RAH Solutions’ home county: Edgerton, the Rock River cities and the farm towns between them.',
    'Dane County'      => 'North on US 51 and US 14: Stoughton, the villages south of the lakes, and Madison’s south and east sides.',
    'Jefferson County' => 'East and northeast along the Rock River.',
    'Walworth County'  => 'East on Highway 59, at the edge of the Kettle Moraine.',
    'Green County'     => 'Southwest toward the Sugar River.',
];
$taglines = [
    'edgerton-wi' => 'Home base', 'janesville-wi' => 'Rock County seat on the Rock River', 'milton-wi' => 'East on Highway 59',
    'beloit-wi' => 'On the Illinois line', 'evansville-wi' => 'West on Highway 59', 'stoughton-wi' => 'North on US 51, on the Yahara',
    'madison-wi' => 'South and east sides', 'mcfarland-wi' => 'Village on Lake Waubesa', 'oregon-wi' => 'Village on US 14',
    'fort-atkinson-wi' => 'Rock River, above Lake Koshkonong', 'watertown-wi' => 'Farthest town we serve', 'whitewater-wi' => 'University town on Highway 59',
    'brodhead-wi' => 'On the Sugar River',
];
$faqs = [
    ['Does RAH Solutions charge for an estimate outside Edgerton?',
     'No. Estimates are free and on site in every town RAH Solutions LLC serves.'],
    ['My town is not on the list. Can I still call?',
     'Yes. The list shows the towns on RAH Solutions’ Google Business Profile, and the rural addresses between them are served too. Call (608) 501-5123 with your address and Robert will tell you whether it is in range.'],
    ['Are all 15 services available in every town?',
     'Most are. Recurring services such as weekly mowing and snow plowing depend on route and distance, so availability for the farthest towns is confirmed when you call. Project work such as concrete, grading and landscape installation is available across the service area.'],
];
$schemaNodes = [
    webPageNode('CollectionPage'),
    breadcrumbNode([['Home', '/'], ['Service Area', '/service-area/']]),
    ['@type' => 'ItemList', 'name' => 'Towns served by RAH Solutions LLC', 'itemListElement' => array_map(fn($a, $i) => ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $a['name'] . ', ' . $a['state'], 'url' => $siteUrl . '/areas/' . $a['slug'] . '/'], $serviceAreas, array_keys($serviceAreas))],
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-areas">

<section class="hero hero--interior inner-hero" aria-label="Service area">
  <div class="container">
    <?php echo breadcrumbs([['Home', '/'], ['Service Area', '/service-area/']]); ?>
    <span class="eyebrow">Based in Edgerton, WI · We come to you</span>
    <h1>RAH Solutions Service Area: Edgerton, WI and Nearby Towns</h1>
    <p class="page-answer">RAH Solutions LLC provides lawn care, landscaping, concrete, excavating and snow removal in <?php echo count($serviceAreas); ?> towns around its Edgerton base, from Beloit and Janesville north to Madison and east to Watertown. Pick your town for local soil, terrain and winter notes.</p>
  </div>
</section>

<section class="section" aria-labelledby="dir-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Towns we serve</span>
      <h2 id="dir-h2">Which towns does RAH Solutions cover?</h2>
      <p>RAH Solutions LLC serves the <?php echo count($serviceAreas); ?> towns below, grouped by county. Each town page covers the yards, ground and local rules that affect outdoor work there.</p>
    </div>
    <div class="parish-dir" data-p1-dynamic>
      <?php foreach ($groups as $county => $blurb): ?>
      <div class="parish-block reveal-up">
        <h3><?php echo icon('map', 20); ?> <?php echo e($county); ?></h3>
        <p><?php echo e($blurb); ?></p>
        <ul class="town-list">
          <?php foreach ($serviceAreas as $sa): if ($sa['county'] !== $county) continue; ?>
          <li id="<?php echo $sa['slug']; ?>"><a href="<?php echo areaHref($sa); ?>"><strong><?php echo e($sa['name'] . ', ' . $sa['state']); ?></strong><?php echo icon('arrow-right', 18); ?><span><?php echo e($taglines[$sa['slug']] ?? ''); ?></span></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section section--tight" aria-labelledby="county-h2">
  <div class="container">
    <div class="radius-note reveal-up">
      <span><?php echo icon('route', 26); ?></span>
      <div>
        <h2 id="county-h2">Which counties does RAH Solutions serve?</h2>
        <p>RAH Solutions LLC lists five Wisconsin counties on its Google Business Profile: Rock, Dane, Green, Jefferson and Iowa. Rural addresses between the towns above are part of the service area. If you are not sure you are in range, call <a href="<?php echo telHref(); ?>"><?php echo e($phone); ?></a> with your address.</p>
        <ul class="county-strip" data-p1-dynamic>
          <?php foreach ($serviceCounties as $cty): ?><li><?php echo e($cty); ?> County</li><?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="section" aria-labelledby="faq-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Service area FAQ</span>
      <h2 id="faq-h2">What do people ask about where RAH Solutions works?</h2>
    </div>
    <?php echo faqList($faqs, 1); ?>
  </div>
</section>

<?php $ctaBandId = 'band-areas'; $ctaBandHeading = 'In the service area? Get a free estimate'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php'; ?>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
