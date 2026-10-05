<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$svc             = serviceBySlug('mulching-services');
$currentPage     = 'services';
$pageType        = 'service';
$serviceSlug     = 'mulching-services';
$pageTitle       = 'Mulching Services in Edgerton, WI | RAH Solutions LLC';
$pageDescription = 'Mulch installation in Edgerton, WI: beds weeded and edged, then mulch spread 2 to 4 inches deep and kept off trunks. RAH Solutions LLC gives free estimates.';
$canonicalUrl    = $siteUrl . '/services/mulching-services/';
$heroPreload     = heroPreload('mulched-bed-edging-lawn-border', '100vw');
$ogImage         = 'mulched-bed-edging-lawn-border.jpg';
$pageCss         = ['service'];
$pageStyle       = <<<CSS
/* mulching-services: warm paper cards with a deep-green side rule, calculator-style callout */
.page-mulching-services .svc-hero .hero-bg img { object-position: 50% 60%; }
.page-mulching-services .type-card { background: var(--color-paper-2); border-left: 4px solid var(--color-secondary); }
.page-mulching-services .type-card__icon { background: var(--color-secondary); color: var(--color-white); }
.page-mulching-services .svc-callout { background: color-mix(in srgb, var(--color-secondary) 8%, var(--color-surface)); border-radius: var(--radius-lg); box-shadow: var(--shadow); }
.page-mulching-services .svc-callout > span { color: var(--color-secondary); }
.page-mulching-services .svc-callout strong { color: var(--color-ink); font-family: var(--font-accent); }
CSS;

$faqs = [
    ['How deep should mulch be?',
     'Two to four inches. Less than two inches lets light through and weeds come up. More than four inches can keep water and air from reaching roots. Beds that already hold some mulch only need enough to bring them back into that range.'],
    ['How often does mulch need to be replaced?',
     'Wood mulch breaks down and fades, so most beds get a top-up every year or two. You rarely need to remove the old layer. If it has matted into a crust, it is loosened first so water can get through.'],
    ['When is the best time to mulch in southern Wisconsin?',
     'Mid to late spring is the usual time, after beds are cleaned up and the soil has started to warm. Mulch can go down any time the ground is not frozen. A fall layer protects the roots of new plantings from freezing and thawing.'],
    ['Does mulch stop weeds?',
     'It stops most of them. A layer two to four inches deep blocks the light weed seeds need. Weeds that are already growing must be pulled first, and a few will still seed into the top of the mulch. <a href="/services/garden-maintenance/">Garden maintenance</a> visits keep those from spreading.'],
    ['How much mulch does my yard need?',
     'Measure each bed in square feet. One cubic yard covers about 108 square feet at three inches deep. The <a href="/blog/how-much-mulch-do-i-need/">mulch guide</a> shows the math, and RAH Solutions measures the beds during the estimate so you do not have to.'],
    ['Is it bad to pile mulch against a tree?',
     'Yes. Mulch heaped against a trunk, often called a mulch volcano, holds moisture on the bark and invites rot and rodents. Mulch around a tree should be a flat ring pulled back a few inches so the base of the trunk stays visible.'],
];

$steps = [
    ['Look at the property', 'Robert walks the beds, measures them, checks how much old mulch is there and looks at the edges.'],
    ['Written estimate', 'You receive a written estimate that lists the bed prep, any edging and the amount and type of mulch.'],
    ['Prepare and spread', 'Beds are weeded, debris is cleared, edges are cut or edging is set, and mulch is spread to an even depth.'],
    ['Clean up and walk the job', 'Mulch is pulled back from trunks, stems and siding, walks and drives are blown off, and Robert walks the beds with you.'],
];

$schemaNodes = [
    webPageNode(),
    breadcrumbNode([['Home', '/'], ['Services', '/services/'], ['Mulching Services', '/services/mulching-services/']]),
    serviceSchemaNode('Mulching Services', 'Mulch installation for planting beds and tree rings in Edgerton, WI and nearby Rock and Dane County towns: weeding, bed edging and mulch spread 2 to 4 inches deep.', $canonicalUrl),
    ['@type' => 'HowTo', 'name' => 'How RAH Solutions LLC mulches a planting bed', 'step' => array_map(fn($s, $i) => ['@type' => 'HowToStep', 'position' => $i + 1, 'name' => $s[0], 'text' => $s[1]], $steps, array_keys($steps))],
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-mulching-services">

<section class="hero hero--photo svc-hero" aria-label="Mulching services in Edgerton, WI">
  <div class="hero-bg"><?php echo picture('mulched-bed-edging-lawn-border', 'Long mulched garden bed with new edging running along a mowed lawn and a line of trees', '100vw', ['eager' => true, 'class' => 'hero-img']); ?></div>
  <div class="hero-overlay"></div>
  <span class="grain" aria-hidden="true"></span>
  <div class="container hero-grid hero-grid--form">
    <div class="hero-text">
      <?php echo breadcrumbs([['Home', '/'], ['Services', '/services/'], ['Mulching Services', '/services/mulching-services/']]); ?>
      <span class="eyebrow">Bed Prep · Edging · Fresh Mulch</span>
      <h1 class="hero-title">Mulching Services in Edgerton, WI</h1>
      <p class="page-answer">RAH Solutions LLC weeds and edges planting beds, then spreads fresh mulch 2 to 4 inches deep and keeps it off trunks, stems and siding. The crew serves Edgerton and nearby towns, with free on-site estimates.</p>
      <div class="hero-actions">
        <button type="button" class="btn btn-accent btn-lg hero-form-open" data-open-estimate>Get a free mulch estimate</button>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> or call <?php echo e($phone); ?></a>
      </div>
      <p class="last-updated">Last updated: <?php echo date('F Y'); ?></p>
    </div>
    <?php $heroFormId = 'hero-mulching-services'; $heroFormService = 'mulching-services'; $heroFormHeading = 'Get a free mulch estimate'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
  </div>
</section>

<section class="section svc-intro" aria-labelledby="intro-h2">
  <div class="container svc-layout">
    <div class="svc-body">
      <p class="identity-line"><strong>RAH Solutions LLC</strong> is a licensed and insured, family-owned landscaper based in Edgerton, Wisconsin. Started by Robert Harried in 2023, it serves Rock and Dane County homes and businesses.</p>
      <h2 id="intro-h2">What does a mulching visit from RAH Solutions include?</h2>
      <div class="answer-block">
        <h3>Short answer</h3>
        <p>RAH Solutions LLC prepares the bed before any mulch goes down: weeds pulled, leaves and sticks cleared, and the edge cut or set. Mulch is then spread to an even 2 to 4 inches, pulled back from trunks and stems, and the lawn and hard surfaces are cleaned up. Estimates are free.</p>
      </div>
      <p>Mulch does three jobs. It shades the soil so fewer weed seeds sprout. It slows evaporation, so beds need less watering in July. And it evens out soil temperature, which matters in a climate where the ground freezes and thaws many times each winter.</p>
      <p>Most calls for mulching near me in Edgerton come in spring, when last year’s layer has faded and thinned and weeds are starting. Fresh mulch on top of weeds does not fix that. The weeds grow through within weeks. That is why the visit starts with bed preparation and why the estimate lists it separately from the mulch itself.</p>
      <p>Mulching is often the last step of a larger job. It follows a <a href="/services/spring-yard-cleanup/">spring yard cleanup</a>, or it finishes a new bed built under <a href="/services/landscape-installation/">landscape installation</a>. It can also be booked on its own.</p>
    </div>
    <aside class="svc-rail" aria-label="On this page">
      <nav class="svc-toc" aria-label="Page sections">
        <h2>On this page</h2>
        <ol>
          <li><a href="#types-h2">What we mulch</a></li>
          <li><a href="#cond-h2">Depth and timing</a></li>
          <li><a href="#amount-h2">How much mulch?</a></li>
          <li><a href="#steps-h2">How a visit works</a></li>
          <li><a href="#gallery-h2">Job photos</a></li>
          <li><a href="#faq-h2">Mulch FAQ</a></li>
        </ol>
      </nav>
      <div class="svc-callcard">
        <strong>Beds ready for fresh mulch?</strong>
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
      <span class="eyebrow-label">What we mulch</span>
      <h2 id="types-h2">Which mulching work does RAH Solutions do?</h2>
      <p>RAH Solutions LLC mulches home and commercial planting beds around Edgerton, and does the preparation that makes the mulch work.</p>
    </div>
    <div class="type-grid" data-p1-dynamic>
      <article class="type-card reveal-up reveal-delay-1">
        <span class="type-card__icon"><?php echo icon('leaf', 22); ?></span>
        <h3>Bed preparation</h3>
        <p>Weeds are pulled with their roots, and leaves, sticks and dead stems are cleared. Old mulch that has matted into a crust is broken up.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-2">
        <span class="type-card__icon"><?php echo icon('ruler', 22); ?></span>
        <h3>Edging</h3>
        <p>A fresh spade-cut edge or installed edging gives the mulch something to stop against, so it stays in the bed and the grass stays out.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-3">
        <span class="type-card__icon"><?php echo icon('paint-bucket', 22); ?></span>
        <h3>Shredded wood mulch</h3>
        <p>The usual choice for planted beds. Shredded hardwood and bark knit together and stay put on a slope, in natural or dyed colors.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-1">
        <span class="type-card__icon"><?php echo icon('trees', 22); ?></span>
        <h3>Tree rings</h3>
        <p>A flat ring of mulch around a tree keeps mowers and string trimmers away from the bark. It is spread wide and kept off the trunk.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-2">
        <span class="type-card__icon"><?php echo icon('mountain', 22); ?></span>
        <h3>Decorative stone</h3>
        <p>Stone does not break down or need a yearly top-up. It suits foundation strips, drip lines and beds beside a driveway more than beds full of perennials.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-3">
        <span class="type-card__icon"><?php echo icon('building-2', 22); ?></span>
        <h3>Commercial beds</h3>
        <p>Entrance beds, sign plantings and parking lot islands at businesses, refreshed so the front of the property looks cared for.</p>
      </article>
    </div>
  </div>
</section>

<section class="section svc-conditions texture-grain edge-facet-top" aria-labelledby="cond-h2">
  <span class="grain-layer" aria-hidden="true"></span>
  <div class="container">
    <div class="cond-head reveal-left">
      <span class="eyebrow-label">Getting it right</span>
      <h2 id="cond-h2">How deep should mulch go, and when should it be spread?</h2>
      <p>Mulch belongs 2 to 4 inches deep, and it can be spread whenever the ground is not frozen. RAH Solutions LLC checks four things on every bed.</p>
    </div>
    <ul class="cond-list">
      <li class="reveal-up"><span><?php echo icon('layers', 22); ?></span><b>Total depth, old and new</b><p>The 2 to 4 inches includes what is already in the bed. A bed that still has an inch or two only needs a thin layer on top.</p></li>
      <li class="reveal-up"><span><?php echo icon('trees', 22); ?></span><b>Clear of trunks and stems</b><p>Mulch is pulled back from tree trunks, shrub stems and perennial crowns. Piled against bark, it holds moisture where the plant needs to stay dry.</p></li>
      <li class="reveal-up"><span><?php echo icon('droplets', 22); ?></span><b>Wet soil underneath</b><p>Many local yards have silt loam over clay that drains slowly. In beds that stay wet, mulch goes on thinner so the soil can dry between rains.</p></li>
      <li class="reveal-up"><span><?php echo icon('calendar', 22); ?></span><b>Season</b><p>Spring mulch works best after cleanup and once the soil has begun to warm. Fall mulch protects new plantings through winter freezing and thawing.</p></li>
    </ul>
  </div>
</section>

<section class="section section--tight" aria-labelledby="amount-h2">
  <div class="container">
    <div class="svc-callout reveal-up">
      <span><?php echo icon('pencil-ruler', 26); ?></span>
      <div>
        <h2 id="amount-h2">How much mulch does a bed need?</h2>
        <p>RAH Solutions measures every bed during the estimate, but the rule is simple. <strong>One cubic yard of mulch covers about 108 square feet at 3 inches deep.</strong> Multiply the length of a bed by its width to get square feet, then divide by 108.</p>
        <p>A bed 30 feet long and 6 feet wide is 180 square feet, which takes a little under two cubic yards for a full new layer. A top-up over existing mulch takes less. The <a href="/blog/how-much-mulch-do-i-need/">how much mulch do I need guide</a> covers curved beds, tree rings and bags versus bulk.</p>
      </div>
    </div>
  </div>
</section>

<section class="section svc-steps" aria-labelledby="steps-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">The process</span>
      <h2 id="steps-h2">How does a mulching job with RAH Solutions work?</h2>
      <p>RAH Solutions LLC follows the same four steps on one front bed and on a whole property.</p>
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
      <span class="eyebrow-label">Recent mulch work</span>
      <h2 id="gallery-h2">What does a bed mulched by RAH Solutions look like?</h2>
      <p>These are RAH Solutions job photos: a long bed with mulch down and the edge set, and a perennial bed with edging laid out before the mulch goes on.</p>
    </div>
    <div class="sp-gallery-grid sp-gallery-grid--two" data-p1-dynamic>
      <figure class="sp-gallery-item reveal-scale"><?php echo picture('mulched-bed-edging-lawn-border', 'Freshly mulched bed with daylilies and a clean edging line beside a mowed lawn', '(max-width: 700px) 100vw, 55vw'); ?><figcaption>Mulch spread evenly up to a new edge</figcaption></figure>
      <figure class="sp-gallery-item reveal-scale reveal-delay-1"><?php echo picture('perennial-bed-edging-layout', 'Perennial bed with daylilies and shrubs, a string line and edging laid along the lawn before mulching', '(max-width: 700px) 100vw, 40vw'); ?><figcaption>Before mulch: string line set, edging laid out</figcaption></figure>
    </div>
  </div>
</section>

<section class="section svc-faq" aria-labelledby="faq-h2">
  <div class="container faq-wrap">
    <div class="section-head reveal-left">
      <span class="eyebrow-label">FAQ</span>
      <h2 id="faq-h2">What do people ask about mulching in Edgerton?</h2>
      <p>Describe the beds on a call to <?php echo e($phone); ?> and Robert will tell you what to expect.</p>
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
      <?php echo serviceCards(relatedServices(['spring-yard-cleanup', 'garden-maintenance', 'landscape-installation']), '(max-width: 560px) 100vw, 33vw'); ?>
    </div>
    <div class="town-links">
      <h3>Mulching services near you</h3>
      <ul>
        <?php foreach (['edgerton-wi', 'milton-wi', 'janesville-wi', 'stoughton-wi', 'beloit-wi', 'fort-atkinson-wi'] as $tl): $ta = areaBySlug($tl); ?>
        <li><a href="<?php echo areaHref($ta); ?>"><?php echo icon('map-pin', 14); ?> Mulching in <?php echo e($ta['name']); ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<?php $ctaBandId = 'band-mulching-services'; $ctaBandHeading = 'Get a written price for fresh mulch'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php'; ?>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
