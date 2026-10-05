<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$currentPage     = 'services';
$pageType        = 'other';
$pageTitle       = 'Landscaping & Lawn Services in Edgerton, WI | RAH Solutions';
$pageDescription = 'All 15 services from RAH Solutions LLC in Edgerton, WI: lawn care, sod, landscaping, mulch, hardscaping, concrete, excavating, cleanups and snow removal.';
$canonicalUrl    = $siteUrl . '/services/';
$pageCss         = ['inner'];
$pageStyle       = <<<CSS
/* services hub: four grouped grids, jump chips, season wheel */
.page-services .svc-hub { background: linear-gradient(180deg, var(--color-paper) 0%, var(--color-paper-2) 100%); }
.page-services .group-jump { display: flex; flex-wrap: wrap; gap: .5rem; list-style: none; padding: 0; margin: 1.25rem 0 0; }
.page-services .group-jump a { display: inline-flex; align-items: center; gap: .4rem; min-height: 44px; padding: .5rem 1rem; border-radius: var(--radius-full); background: var(--color-surface); border: 1px solid var(--color-line); color: var(--color-ink); font-weight: 600; font-size: .92rem; text-decoration: none; }
.page-services .group-jump a:hover { border-color: var(--color-primary); color: var(--color-primary); }
.page-services .svc-group { scroll-margin-top: calc(var(--nav-height) + 1rem); margin-top: clamp(2.25rem, 5vw, 3.5rem); }
.page-services .svc-group__head { display: flex; flex-wrap: wrap; align-items: baseline; gap: .4rem 1rem; margin-bottom: 1.1rem; padding-bottom: .7rem; border-bottom: 2px solid color-mix(in srgb, var(--color-primary) 30%, var(--color-line)); }
.page-services .svc-group__head h3 { font-size: 1.35rem; }
.page-services .svc-group__head p { margin: 0; color: var(--color-ink-2); }
.page-services .season-grid { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 1rem; }
.page-services .season-card { padding: 1.3rem; border-radius: var(--radius-lg); background: var(--color-surface); border: 1px solid var(--color-line); border-top: 4px solid var(--color-accent); display: grid; gap: .5rem; align-content: start; }
.page-services .season-card:nth-child(even) { border-top-color: var(--color-primary); }
.page-services .season-card p { margin: 0; font-size: .95rem; color: var(--color-ink-2); }
.page-services .season-card a { color: var(--color-primary); font-weight: 600; }
@media (max-width: 980px) { .page-services .season-grid { grid-template-columns: 1fr 1fr; } }
@media (max-width: 560px) { .page-services .season-grid { grid-template-columns: 1fr; } }
CSS;

$faqs = [
    ['Does every service start with a free estimate?',
     'Yes. RAH Solutions LLC gives free on-site estimates for all 15 services. Owner Robert Harried looks at the property, talks through what you want, and follows up with a written price.'],
    ['Can one company really handle lawn care, concrete and snow?',
     'Yes. RAH Solutions runs its own mowers, plow trucks, skid steer and excavator, so the same Edgerton crew can mow a property in summer, pour a patio in fall and plow the driveway in winter.'],
    ['Does RAH Solutions work for businesses as well as homeowners?',
     'Yes. RAH Solutions serves homes and businesses. <a href="/services/commercial-lawn-care/">Commercial lawn care</a> and <a href="/services/snow-removal/">snow removal</a> are the two services businesses ask about most often.'],
    ['Which service do I need for a yard that holds water?',
     'Start with <a href="/services/excavating-services/">excavating</a>, which covers regrading, drainage and buried downspout lines. Once the water has somewhere to go, <a href="/services/lawn-restoration/">lawn restoration</a> or <a href="/services/sod-installation/">sod</a> brings the grass back.'],
];
$schemaNodes = [
    webPageNode('CollectionPage'),
    breadcrumbNode([['Home', '/'], ['Services', '/services/']]),
    ['@type' => 'ItemList', 'name' => 'RAH Solutions LLC services', 'itemListElement' => array_map(fn($s, $i) => ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $s['name'], 'url' => $siteUrl . '/services/' . $s['slug'] . '/'], $services, array_keys($services))],
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-services">

<section class="hero hero--interior inner-hero inner-hero--split" aria-label="Landscaping and lawn services">
  <div class="container">
    <div class="inner-hero__copy">
      <?php echo breadcrumbs([['Home', '/'], ['Services', '/services/']]); ?>
      <span class="eyebrow">Lawn · Landscape · Concrete · Snow</span>
      <h1>Landscaping and Lawn Services in Edgerton, WI</h1>
      <p class="page-answer">RAH Solutions LLC offers 15 outdoor services from one family-owned crew in Edgerton, Wisconsin: lawn care, sod, landscaping, mulch, hardscaping, concrete, excavating, seasonal cleanups and snow removal for homes and businesses. Estimates are free and on site.</p>
      <div class="hero-actions">
        <button type="button" class="btn btn-accent btn-lg" data-open-estimate>Get a free estimate</button>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> <?php echo e($phone); ?></a>
      </div>
    </div>
    <div class="inner-hero__stats">
      <div><b>Since <?php echo $yearEstablished; ?></b><span>Family owned in Edgerton</span></div>
      <div><b><?php echo count($services); ?> services</b><span>One crew, all four seasons</span></div>
      <div><b><?php echo count($serviceAreas); ?> towns</b><span>Rock, Dane and nearby counties</span></div>
      <div><b><?php echo e($gbpRating); ?> ★</b><span><?php echo $gbpReviewCount; ?> Google reviews</span></div>
    </div>
  </div>
</section>

<section class="section svc-hub" aria-label="All services">
  <div class="container-wide">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">What We Do</span>
      <h2>Which <span class="text-accent">landscaping and lawn services</span> does RAH Solutions offer?</h2>
      <p class="hero-answer">RAH Solutions LLC offers 15 services in four groups: lawn care, landscaping and hardscape, concrete and excavating, and seasonal work including snow removal. Every service is handled by the company’s own crew and equipment out of Edgerton, and each starts with a free on-site estimate.</p>
      <span class="section-subtitle">Built for southern Wisconsin yards</span>
      <p class="prose">Pick a group to jump to it, or scroll through all fifteen.</p>
      <ul class="group-jump" data-p1-dynamic>
        <?php foreach ($serviceGroups as $gk => $g): ?>
        <li><a href="#group-<?php echo $gk; ?>"><?php echo e($g['name']); ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <?php foreach ($serviceGroups as $gk => $g): ?>
    <div class="svc-group" id="group-<?php echo $gk; ?>">
      <div class="svc-group__head reveal-up"><h3><?php echo e($g['name']); ?></h3><p><?php echo e($g['blurb']); ?></p></div>
      <div class="services-grid" data-p1-dynamic>
        <?php echo serviceCards(servicesInGroup($gk), '(max-width: 440px) 100vw, (max-width: 1000px) 45vw, 340px'); ?>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="section" aria-labelledby="season-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Through the year</span>
      <h2 id="season-h2">What yard work belongs in each season in southern Wisconsin?</h2>
      <p>RAH Solutions LLC plans work around the Wisconsin calendar, because the right job at the wrong time of year usually has to be done twice.</p>
    </div>
    <div class="season-grid">
      <div class="season-card reveal-up reveal-delay-1"><h3>Spring</h3><p>Cleanup once the ground is firm, bed edging and mulch after the soil warms, and the first mow when grass is growing. See <a href="/services/spring-yard-cleanup/">spring cleanup</a> and <a href="/services/mulching-services/">mulching</a>.</p></div>
      <div class="season-card reveal-up reveal-delay-2"><h3>Summer</h3><p>Mowing on a schedule, shrub trimming after spring bloom, and the dry-weather window for concrete, patios, grading and drainage. See <a href="/services/lawn-maintenance/">lawn maintenance</a> and <a href="/services/concrete-services/">concrete</a>.</p></div>
      <div class="season-card reveal-up reveal-delay-3"><h3>Late summer and fall</h3><p>The best time to repair and seed lawns, lay sod, plant, and clear leaves before snow. See <a href="/services/lawn-restoration/">lawn restoration</a> and <a href="/services/fall-yard-cleanup/">fall cleanup</a>.</p></div>
      <div class="season-card reveal-up reveal-delay-4"><h3>Winter</h3><p>Plowing for driveways and commercial lots with the company’s own trucks. Winter accounts are set up before the first storm. See <a href="/services/snow-removal/">snow removal</a>.</p></div>
    </div>
  </div>
</section>

<section class="section svc-hub" aria-labelledby="faq-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Questions</span>
      <h2 id="faq-h2">What do customers ask about RAH Solutions’ services?</h2>
    </div>
    <?php echo faqList($faqs, 1); ?>
    <p><a href="/faq/">More questions and answers →</a></p>
  </div>
</section>

<?php $ctaBandId = 'band-services'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php'; ?>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
