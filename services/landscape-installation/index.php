<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$svc             = serviceBySlug('landscape-installation');
$currentPage     = 'services';
$pageType        = 'service';
$serviceSlug     = 'landscape-installation';
$pageTitle       = 'Landscape Installation in Edgerton, WI | RAH Solutions LLC';
$pageDescription = 'New planting beds, shrubs, trees, edging and mulch or stone in Edgerton, WI. RAH Solutions LLC grades first, then plants for zone 5b. Free on-site estimates.';
$canonicalUrl    = $siteUrl . '/services/landscape-installation/';
$heroPreload     = heroPreload('mulched-bed-steel-edging-driveway', '100vw');
$ogImage         = 'mulched-bed-steel-edging-driveway.jpg';
$pageCss         = ['service'];
$pageStyle       = <<<CSS
/* landscape-installation: leaf-green card rules, planted-bed accent on the plant-choice callout */
.page-landscape-installation .svc-hero .hero-bg img { object-position: 50% 70%; }
.page-landscape-installation .type-card { border-top: 3px solid var(--color-accent); }
.page-landscape-installation .type-card__icon { background: color-mix(in srgb, var(--color-accent) 18%, var(--color-surface)); color: var(--color-secondary); }
.page-landscape-installation .svc-callout { border-left: 4px solid var(--color-secondary); background: color-mix(in srgb, var(--color-accent) 9%, var(--color-paper)); }
.page-landscape-installation .svc-callout > span { color: var(--color-secondary); }
.page-landscape-installation .sp-gallery-item figcaption { font-family: var(--font-accent); }
CSS;

$faqs = [
    ['When is the best time to plant in southern Wisconsin?',
     'Spring and early fall are the easiest seasons for new shrubs, trees and perennials, because the soil is workable and the weather is cool. Container plants can go in through summer if they are watered. Planting stops when the ground freezes.'],
    ['Do I need a design before RAH Solutions gives an estimate?',
     'No. Most projects start with a walk around the yard. Robert looks at sun, slope and drainage, asks how you use the space, and writes an estimate that lists the beds, plants and finish. If you already have a plan or a plant list, bring it.'],
    ['How much watering do new plants need?',
     'Plan on watering through the whole first growing season. New shrubs and trees have a small root ball and dry out faster than the soil around them. Water slowly at the base, check the soil with a finger first, and keep going into fall until the ground freezes.'],
    ['Should a new bed be finished with mulch or stone?',
     'Wood mulch suits most planting beds because it holds moisture and breaks down into the soil. Decorative stone lasts longer and fits beds along foundations or in spots where mulch washes out. The <a href="/services/mulching-services/">mulching page</a> explains depth and materials.'],
    ['Can RAH Solutions fix drainage before planting?',
     'Yes. Low spots, downspouts that empty into a bed and soil that slopes toward the house are handled first, because few plants survive standing water. Larger regrading and buried downspout lines are covered under <a href="/services/excavating-services/">excavating services</a>.'],
];

$steps = [
    ['Look at the property', 'Robert walks the yard with you, checks sun, slope, drainage and soil, and measures the areas to be planted.'],
    ['Written estimate', 'You receive a written estimate that lists the beds, the plants, the edging and the mulch or stone finish.'],
    ['Prepare and plant', 'Old plants and sod are removed, the bed is graded and edged, and shrubs, trees and perennials are set and watered in.'],
    ['Finish and walk the job', 'Mulch or stone goes down, the lawn and hard surfaces are cleaned up, and Robert walks the finished beds with you.'],
];

$schemaNodes = [
    webPageNode(),
    breadcrumbNode([['Home', '/'], ['Services', '/services/'], ['Landscape Installation', '/services/landscape-installation/']]),
    serviceSchemaNode('Landscape Installation', 'New planting beds, shrubs, trees, perennials, edging and mulch or stone finishes in Edgerton, WI and nearby Rock and Dane County towns, with grading done before planting.', $canonicalUrl),
    ['@type' => 'HowTo', 'name' => 'How RAH Solutions LLC installs a new landscape bed', 'step' => array_map(fn($s, $i) => ['@type' => 'HowToStep', 'position' => $i + 1, 'name' => $s[0], 'text' => $s[1]], $steps, array_keys($steps))],
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-landscape-installation">

<section class="hero hero--photo svc-hero" aria-label="Landscape installation in Edgerton, WI">
  <div class="hero-bg"><?php echo picture('mulched-bed-steel-edging-driveway', 'Mulched planting bed with metal edging, shrubs and daylilies beside a mowed lawn and a rural driveway', '100vw', ['eager' => true, 'class' => 'hero-img']); ?></div>
  <div class="hero-overlay"></div>
  <span class="grain" aria-hidden="true"></span>
  <div class="container hero-grid hero-grid--form">
    <div class="hero-text">
      <?php echo breadcrumbs([['Home', '/'], ['Services', '/services/'], ['Landscape Installation', '/services/landscape-installation/']]); ?>
      <span class="eyebrow">Beds · Plants · Trees · Edging</span>
      <h1 class="hero-title">Landscape Installation in Edgerton, WI</h1>
      <p class="page-answer">RAH Solutions LLC installs new landscapes in Edgerton and nearby towns: beds cut and graded, shrubs, trees and perennials planted, edging set, and mulch or stone to finish. Estimates are free and given on site.</p>
      <div class="hero-actions">
        <button type="button" class="btn btn-accent btn-lg hero-form-open" data-open-estimate>Get a free landscape estimate</button>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> or call <?php echo e($phone); ?></a>
      </div>
      <p class="last-updated">Last updated: <?php echo date('F Y'); ?></p>
    </div>
    <?php $heroFormId = 'hero-landscape-installation'; $heroFormService = 'landscape-installation'; $heroFormHeading = 'Get a free landscape estimate'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
  </div>
</section>

<section class="section svc-intro" aria-labelledby="intro-h2">
  <div class="container svc-layout">
    <div class="svc-body">
      <p class="identity-line"><strong>RAH Solutions LLC</strong> is a licensed and insured, family-owned landscaper based in Edgerton, Wisconsin. Started by Robert Harried in 2023, it serves Rock and Dane County homes and businesses.</p>
      <h2 id="intro-h2">What does landscape installation from RAH Solutions include?</h2>
      <div class="answer-block">
        <h3>Short answer</h3>
        <p>RAH Solutions LLC builds new planting areas from bare ground or from an overgrown bed. A typical installation covers removal of old plants and sod, grading, bed edging, shrubs, trees and perennials chosen for zone 5b, and a mulch or decorative stone finish. Estimates are free and written after an on-site look.</p>
      </div>
      <p>People searching for landscape installation near me in Edgerton usually have one of three yards. A newer house has a strip of builder shrubs and nothing else. An older house has foundation plants that outgrew the windows years ago. Or a rural lot has plenty of lawn and no beds to break it up. RAH Solutions handles all three with its own crew and equipment.</p>
      <p>The order of work matters. Soil is shaped before anything is planted, so water moves away from the house and does not sit in the new bed. Edging goes in next, which fixes the line between bed and lawn. Plants follow, and the finish layer goes down last. If the project also calls for a patio, a path or a low wall, the <a href="/services/hardscaping-services/">hardscaping page</a> covers that part.</p>
      <p>New beds often go in alongside new turf. If the lawn around the bed is thin or torn up from construction, <a href="/services/sod-installation/">sod installation</a> can be priced in the same estimate so the yard is finished in one visit.</p>
    </div>
    <aside class="svc-rail" aria-label="On this page">
      <nav class="svc-toc" aria-label="Page sections">
        <h2>On this page</h2>
        <ol>
          <li><a href="#types-h2">What we install</a></li>
          <li><a href="#cond-h2">Soil and climate</a></li>
          <li><a href="#plants-h2">Choosing plants</a></li>
          <li><a href="#steps-h2">How a project works</a></li>
          <li><a href="#gallery-h2">Job photos</a></li>
          <li><a href="#faq-h2">Landscape FAQ</a></li>
        </ol>
      </nav>
      <div class="svc-callcard">
        <strong>Planning new beds this season?</strong>
        <p><?php echo e($hoursLong); ?></p>
        <a class="btn btn-accent" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> <?php echo e($phone); ?></a>
        <button type="button" class="btn btn-outline-white" data-open-estimate>Request an estimate</button>
      </div>
    </aside>
  </div>
</section>

<section class="section svc-types" aria-labelledby="types-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">What we install</span>
      <h2 id="types-h2">Which landscape projects does RAH Solutions install?</h2>
      <p>RAH Solutions LLC installs the parts of a landscape that sit between the lawn and the house, from one new bed to a full front yard.</p>
    </div>
    <div class="type-grid" data-p1-dynamic>
      <article class="type-card reveal-up reveal-delay-1">
        <span class="type-card__icon"><?php echo icon('pencil-ruler', 22); ?></span>
        <h3>New planting beds</h3>
        <p>Bed lines are laid out on the ground first, then sod is stripped and the soil is loosened and shaped. Curves are kept wide enough for a mower to follow.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-2">
        <span class="type-card__icon"><?php echo icon('sprout', 22); ?></span>
        <h3>Shrubs and perennials</h3>
        <p>Foundation shrubs, flowering shrubs, ornamental grasses and perennials, spaced for their mature size so the bed fills in without crowding the siding.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-3">
        <span class="type-card__icon"><?php echo icon('trees', 22); ?></span>
        <h3>Trees</h3>
        <p>Shade, ornamental and evergreen trees set in a wide hole with the root flare at grade, then watered in and mulched in a flat ring that stays off the trunk.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-1">
        <span class="type-card__icon"><?php echo icon('ruler', 22); ?></span>
        <h3>Garden edging</h3>
        <p>A firm edge keeps mulch in the bed and grass out of it. The bed in the photo at the top of this page was finished with metal edging along the lawn.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-2">
        <span class="type-card__icon"><?php echo icon('mountain', 22); ?></span>
        <h3>Mulch and decorative stone</h3>
        <p>Shredded wood mulch for planted beds, or decorative stone and gravel where a longer-lasting cover makes more sense, such as along a foundation or a driveway.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-3">
        <span class="type-card__icon"><?php echo icon('layers', 22); ?></span>
        <h3>Renovating old beds</h3>
        <p>Overgrown shrubs, weeds and worn-out edging are removed, the soil is reshaped, and the bed is replanted. Plants worth keeping are worked around or moved.</p>
      </article>
    </div>
  </div>
</section>

<section class="section svc-conditions texture-grain edge-facet-top" aria-labelledby="cond-h2">
  <span class="grain-layer" aria-hidden="true"></span>
  <div class="container">
    <div class="cond-head reveal-left">
      <span class="eyebrow-label">Rock and Dane County yards</span>
      <h2 id="cond-h2">How do southern Wisconsin soil and winters affect a new landscape?</h2>
      <p>Soil that drains slowly and winters that freeze and thaw decide which plants live. RAH Solutions LLC plans every installation around four local conditions.</p>
    </div>
    <ul class="cond-list">
      <li class="reveal-up"><span><?php echo icon('droplets', 22); ?></span><b>Slow-draining soil</b><p>Much of the area is silt loam over a heavier clay subsoil. Water lingers, so beds are graded to shed it and plants that dislike wet roots are kept out of low spots.</p></li>
      <li class="reveal-up"><span><?php echo icon('snowflake', 22); ?></span><b>Zone 5b cold</b><p>Most of Rock and Dane counties sit in USDA hardiness zone 5b. Every shrub, tree and perennial on the plant list has to be rated for that winter.</p></li>
      <li class="reveal-up"><span><?php echo icon('waves', 22); ?></span><b>Freeze and thaw</b><p>Repeated freezing and thawing can lift shallow-rooted plants out of the ground. A mulch layer evens out soil temperature and holds new perennials in place.</p></li>
      <li class="reveal-up"><span><?php echo icon('home', 22); ?></span><b>Compacted subdivision lots</b><p>On newer lots the soil was often driven over during construction. It is loosened across the whole bed before planting, not only inside each planting hole.</p></li>
    </ul>
  </div>
</section>

<section class="section section--tight" aria-labelledby="plants-h2">
  <div class="container">
    <div class="svc-callout reveal-up">
      <span><?php echo icon('leaf', 26); ?></span>
      <div>
        <h2 id="plants-h2">Which plants should go in a zone 5b bed?</h2>
        <p>RAH Solutions matches each plant to three things: zone 5b hardiness, the hours of sun the bed gets, and how wet the soil stays. A plant that is right on all three needs far less care than one that is right on only one.</p>
        <p>Mature size comes next. A shrub that will grow six feet wide does not belong under a window or two feet from the siding. Choosing for full-grown size means less <a href="/services/shrub-trimming/">shrub trimming</a> later.</p>
      </div>
    </div>
  </div>
</section>

<section class="section svc-steps" aria-labelledby="steps-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">The process</span>
      <h2 id="steps-h2">How does a landscape installation with RAH Solutions work?</h2>
      <p>RAH Solutions LLC follows the same four steps on a single bed and on a full yard.</p>
    </div>
    <ol class="step-track">
      <?php foreach ($steps as $i => $s): ?>
      <li class="reveal-up reveal-delay-<?php echo $i + 1; ?>"><h3><?php echo e($s[0]); ?></h3><p><?php echo e($s[1]); ?></p></li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>

<section class="section svc-gallery" aria-labelledby="gallery-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Recent bed work</span>
      <h2 id="gallery-h2">What does RAH Solutions bed work look like?</h2>
      <p>These are RAH Solutions job photos: a bed finished with mulch and metal edging, and a shade bed with the edging laid out for install.</p>
    </div>
    <div class="sp-gallery-grid sp-gallery-grid--two" data-p1-dynamic>
      <figure class="sp-gallery-item reveal-scale"><?php echo picture('mulched-bed-steel-edging-driveway', 'Finished mulched bed with metal edging, shrubs and perennials next to a mowed lawn', '(max-width: 700px) 100vw, 55vw'); ?><figcaption>Finished bed: edging set, mulch down</figcaption></figure>
      <figure class="sp-gallery-item reveal-scale reveal-delay-1"><?php echo picture('bed-edging-install-shade-garden', 'Shade garden bed with fresh soil and a length of edging laid on the lawn before installation', '(max-width: 700px) 100vw, 40vw'); ?><figcaption>Shade bed in progress, edging laid out</figcaption></figure>
    </div>
  </div>
</section>

<section class="section svc-faq" aria-labelledby="faq-h2">
  <div class="container faq-wrap">
    <div class="section-head reveal-left">
      <span class="eyebrow-label">FAQ</span>
      <h2 id="faq-h2">What do people ask about landscape installation in Edgerton?</h2>
      <p>Describe the yard on a call to <?php echo e($phone); ?> and Robert will tell you what to expect. The <a href="/blog/spring-yard-cleanup-checklist-wisconsin/">spring cleanup checklist</a> is a good first read if the beds are overgrown.</p>
    </div>
    <div><?php echo faqList($faqs, 2); ?></div>
  </div>
</section>

<section class="section svc-related" aria-labelledby="related-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">More from RAH Solutions</span>
      <h2 id="related-h2">Other Services You May Need</h2>
    </div>
    <div class="services-grid" data-p1-dynamic>
      <?php echo serviceCards(relatedServices(['mulching-services', 'garden-maintenance', 'sod-installation']), '(max-width: 560px) 100vw, 33vw'); ?>
    </div>
    <div class="town-links">
      <h3>Landscape installation near you</h3>
      <ul>
        <?php foreach (['edgerton-wi', 'stoughton-wi', 'janesville-wi', 'milton-wi', 'mcfarland-wi', 'oregon-wi'] as $tl): $ta = areaBySlug($tl); ?>
        <li><a href="<?php echo areaHref($ta); ?>"><?php echo icon('map-pin', 14); ?> Landscaping in <?php echo e($ta['name']); ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<?php $ctaBandId = 'band-landscape-installation'; $ctaBandHeading = 'Get a written price for your landscape project'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php'; ?>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
