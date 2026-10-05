<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$svc             = serviceBySlug('lawn-restoration');
$currentPage     = 'services';
$pageType        = 'service';
$serviceSlug     = 'lawn-restoration';
$pageTitle       = 'Lawn Restoration in Edgerton, WI | RAH Solutions LLC';
$pageDescription = 'Lawn restoration in Edgerton, WI: thin, damaged and bare turf repaired with soil work, regrading and overseeding. Free on-site estimates from RAH Solutions LLC.';
$canonicalUrl    = $siteUrl . '/services/lawn-restoration/';
$heroPreload     = heroPreload('hillside-yard-dead-turf-before', '100vw');
$ogImage         = 'hillside-yard-dead-turf-before.jpg';
$pageCss         = ['service'];
$pageStyle       = <<<CSS
/* lawn-restoration: soil-to-green accent, the seeding-window callout carries the page */
.page-lawn-restoration .svc-hero .hero-bg img { object-position: 50% 40%; }
.page-lawn-restoration .type-card h3 { padding-left: .7rem; border-left: 3px solid var(--color-secondary); }
.page-lawn-restoration .type-card__icon { background: color-mix(in srgb, var(--color-secondary) 14%, var(--color-surface)); color: var(--color-secondary); }
.page-lawn-restoration .svc-callout { border-top: 3px solid var(--color-secondary); background: linear-gradient(135deg, color-mix(in srgb, var(--color-accent) 10%, var(--color-paper)), var(--color-paper)); border-radius: var(--radius-lg); }
.page-lawn-restoration .sp-gallery-item { border-radius: var(--radius-lg); box-shadow: var(--shadow-lg); }
.page-lawn-restoration .sp-gallery-item figcaption { font-family: var(--font-accent); color: var(--color-ink-2); }
CSS;

$faqs = [
    ['When is the best time to overseed a lawn in southern Wisconsin?',
     'Mid-August to mid-September, according to UW–Madison Extension. The soil is warm, nights are cooler and weeds compete less. Dormant seeding in late fall is the second choice, and spring seeding is third. The <a href="/blog/when-to-aerate-and-overseed-southern-wisconsin/">aeration and overseeding guide</a> has the full calendar.'],
    ['Can a lawn be restored in spring or summer?',
     'Grading and soil work can be done whenever the ground is workable. Seeding in spring is possible but is the third-best window, and summer seeding needs steady watering. RAH Solutions will tell you whether to seed now or prepare now and seed in late summer.'],
    ['Should I restore my lawn or replace it with sod?',
     'If the grade is right and there is still a fair amount of grass, overseeding is usually enough. If the yard is mostly bare or needs to be green quickly, <a href="/services/sod-installation/">sod installation</a> may fit better. The <a href="/blog/sod-vs-seed-new-lawn-wisconsin/">sod vs. seed guide</a> compares the two.'],
    ['How long do I need to water new seed?',
     'Keep the seedbed moist until the grass is up and established, which means light, frequent watering at first and deeper, less frequent watering once it is growing. Seed that dries out after it sprouts dies, so plan for watering before the job is scheduled.'],
    ['Why is my lawn thin in the first place?',
     'Common causes around Edgerton are compacted soil, slow drainage over a clay subsoil, heavy shade, summer drought, leaves left on the turf over winter, and construction damage. RAH Solutions looks for the cause before recommending seed.'],
    ['Can you fix low spots and ruts as part of the job?',
     'Yes. Low spots, ruts and washed-out areas are filled and regraded before seeding. Larger grading and drainage work is handled as <a href="/services/excavating-services/">excavating</a>, by the same company with its own equipment.'],
];

$steps = [
    ['Look at the lawn', 'Robert walks the yard, checks slope, drainage, soil and shade, and works out why the turf failed.'],
    ['Written estimate', 'You get a written estimate that lists the soil work, grading and seeding planned, and the best time to do it.'],
    ['Prepare and seed', 'Dead turf and debris are cleared, the soil is loosened or regraded where needed, and seed is spread over the prepared ground.'],
    ['Walk the finished job', 'The site is cleaned up and Robert goes over watering and the first mow with you before leaving.'],
];

$schemaNodes = [
    webPageNode(),
    breadcrumbNode([['Home', '/'], ['Services', '/services/'], ['Lawn Restoration', '/services/lawn-restoration/']]),
    serviceSchemaNode('Lawn Restoration', 'Repair of thin, damaged and bare lawns in Edgerton, WI and nearby Rock and Dane County towns: assessment, soil improvement, regrading and overseeding.', $canonicalUrl),
    ['@type' => 'HowTo', 'name' => 'How RAH Solutions LLC restores a damaged lawn', 'step' => array_map(fn($s, $i) => ['@type' => 'HowToStep', 'position' => $i + 1, 'name' => $s[0], 'text' => $s[1]], $steps, array_keys($steps))],
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-lawn-restoration">

<section class="hero hero--photo svc-hero" aria-label="Lawn restoration in Edgerton, WI">
  <div class="hero-bg"><?php echo picture('hillside-yard-dead-turf-before', 'Sloped backyard with dead, matted and bare turf below a two-story house before restoration work', '100vw', ['eager' => true, 'class' => 'hero-img']); ?></div>
  <div class="hero-overlay"></div>
  <span class="grain" aria-hidden="true"></span>
  <div class="container hero-grid hero-grid--form">
    <div class="hero-text">
      <?php echo breadcrumbs([['Home', '/'], ['Services', '/services/'], ['Lawn Restoration', '/services/lawn-restoration/']]); ?>
      <span class="eyebrow">Overseeding · Soil work · Regrading · Bare spots</span>
      <h1 class="hero-title">Lawn Restoration in Edgerton, WI</h1>
      <p class="page-answer">RAH Solutions LLC repairs thin, damaged and bare lawns in Edgerton and nearby towns. The crew finds out why the turf failed, corrects the soil and grade, then overseeds. Estimates are free. The yard pictured is a “before”.</p>
      <div class="hero-actions">
        <button type="button" class="btn btn-accent btn-lg hero-form-open" data-open-estimate>Get a free lawn repair estimate</button>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> or call <?php echo e($phone); ?></a>
      </div>
      <p class="last-updated">Last updated: <?php echo date('F Y'); ?></p>
    </div>
    <?php $heroFormId = 'hero-lawn-restoration'; $heroFormService = 'lawn-restoration'; $heroFormHeading = 'Get a free lawn repair estimate'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
  </div>
</section>

<section class="section svc-intro" aria-labelledby="intro-h2">
  <div class="container svc-layout">
    <div class="svc-body">
      <p class="identity-line"><strong>RAH Solutions LLC</strong> is a licensed and insured, family-owned landscaper based in Edgerton, Wisconsin. Started by Robert Harried in 2023, it serves Rock and Dane County homes and businesses.</p>
      <h2 id="intro-h2">What is lawn restoration, and what does RAH Solutions do?</h2>
      <div class="answer-block">
        <h3>Short answer</h3>
        <p>Lawn restoration is the repair of an existing lawn that has gone thin, patchy or bare. RAH Solutions LLC assesses the yard, removes dead turf, improves or regrades the soil where needed and overseeds with cool-season grass. The best seeding window in southern Wisconsin is mid-August to mid-September.</p>
      </div>
      <p>Most calls for lawn restoration near me in Edgerton come after the owner has already tried a bag of seed and watched it fail. Seed thrown on hard, bare ground rarely takes. It needs loose soil to settle into, steady moisture and the right time of year. Restoration is the work that gives seed those conditions.</p>
      <p>It also means dealing with whatever killed the grass. A low area that holds water, a slope that washes out, soil packed hard by construction traffic: if that is left alone, new grass ends up the same way as the old. Because RAH Solutions also does <a href="/services/excavating-services/">excavating and grading</a>, the dirt work and the seeding are done by one crew.</p>
      <p>Restoration is not always the right choice. A yard with almost no living grass, or one that has to be green soon, is often better served by <a href="/services/sod-installation/">sod installation</a>. Robert will say so at the estimate if that is the case.</p>
    </div>
    <aside class="svc-rail" aria-label="On this page">
      <nav class="svc-toc" aria-label="Page sections">
        <h2>On this page</h2>
        <ol>
          <li><a href="#types-h2">What gets repaired</a></li>
          <li><a href="#cond-h2">Why lawns fail</a></li>
          <li><a href="#timing-h2">When to overseed</a></li>
          <li><a href="#steps-h2">How it works</a></li>
          <li><a href="#gallery-h2">Before and graded</a></li>
          <li><a href="#faq-h2">Restoration FAQ</a></li>
        </ol>
      </nav>
      <div class="svc-callcard">
        <strong>Lawn thin, patchy or bare?</strong>
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
      <span class="eyebrow-label">What gets repaired</span>
      <h2 id="types-h2">Which lawn problems does RAH Solutions repair?</h2>
      <p>RAH Solutions LLC repairs turf problems that mowing and watering alone will not fix, from a few bare patches to a whole yard.</p>
    </div>
    <div class="type-grid" data-p1-dynamic>
      <article class="type-card reveal-up reveal-delay-1">
        <span class="type-card__icon"><?php echo icon('sprout', 22); ?></span>
        <h3>Thin turf</h3>
        <p>Lawns where soil shows between the grass plants are overseeded so new grass fills the gaps and weeds have less room.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-2">
        <span class="type-card__icon"><?php echo icon('search', 22); ?></span>
        <h3>Bare patches</h3>
        <p>Dead spots from pets, spills, shade or heavy foot traffic are cleared to soil, loosened, topped up where needed and seeded.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-3">
        <span class="type-card__icon"><?php echo icon('layers', 22); ?></span>
        <h3>Poor soil</h3>
        <p>Hard, compacted or thin soil is loosened and improved with topsoil so roots have somewhere to go.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-1">
        <span class="type-card__icon"><?php echo icon('mountain', 22); ?></span>
        <h3>Uneven ground</h3>
        <p>Ruts, low spots, settled trenches and rough slopes are filled and regraded to a smooth surface that can be mowed.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-2">
        <span class="type-card__icon"><?php echo icon('hard-hat', 22); ?></span>
        <h3>Construction damage</h3>
        <p>Yards torn up by equipment, utility work or a building project are cleaned up, graded and brought back to lawn.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-3">
        <span class="type-card__icon"><?php echo icon('droplets', 22); ?></span>
        <h3>Washouts and wet areas</h3>
        <p>Where runoff strips the soil or water stands, the grade is corrected first so the seed and the soil stay put.</p>
      </article>
    </div>
  </div>
</section>

<section class="section svc-conditions texture-grain edge-facet-top" aria-labelledby="cond-h2">
  <span class="grain-layer" aria-hidden="true"></span>
  <div class="container">
    <div class="cond-head reveal-left">
      <span class="eyebrow-label">Finding the cause</span>
      <h2 id="cond-h2">Why do lawns in southern Wisconsin thin out or die?</h2>
      <p>The cause is usually in the soil or the site, not the grass. RAH Solutions LLC checks four things during the assessment before any seed is ordered.</p>
    </div>
    <ul class="cond-list">
      <li class="reveal-up"><span><?php echo icon('layers', 22); ?></span><b>Compaction</b><p>Compacted soil is common on newer subdivision lots. Roots stay shallow and water runs off instead of soaking in, so the soil is opened up before seeding.</p></li>
      <li class="reveal-up"><span><?php echo icon('droplets', 22); ?></span><b>Slow drainage</b><p>Local silt loams often sit over a heavier clay-rich subsoil. Water lingers in low areas and the turf thins, which calls for regrading.</p></li>
      <li class="reveal-up"><span><?php echo icon('sun', 22); ?></span><b>Drought and heat</b><p>A lawn needs about an inch of water a week in summer or it goes dormant. Most dormant lawns recover, but weak areas may not come back.</p></li>
      <li class="reveal-up"><span><?php echo icon('snowflake', 22); ?></span><b>Winter damage</b><p>A thick mat of leaves left over winter smothers turf and encourages snow mold. Those areas show up matted and dead in spring.</p></li>
    </ul>
  </div>
</section>

<section class="section section--tight" aria-labelledby="timing-h2">
  <div class="container">
    <div class="svc-callout reveal-up">
      <span><?php echo icon('calendar-check', 26); ?></span>
      <div>
        <h2 id="timing-h2">When should a lawn be overseeded in Wisconsin?</h2>
        <p>RAH Solutions schedules overseeding for mid-August to mid-September whenever it can, the window UW–Madison Extension names as best for Wisconsin. The soil is still warm, the air is cooling, and weed pressure is lower than in spring.</p>
        <p>Dormant seeding in late fall is the second option: seed goes down after growth has stopped and sprouts the following spring. Spring seeding is third best, because young grass then has to get through its first summer. If your lawn needs grading, that part can be done earlier in the year so the ground is ready when the window opens. Core aeration is also best in fall, or in spring, while the grass is actively growing.</p>
      </div>
    </div>
  </div>
</section>

<section class="section svc-steps" aria-labelledby="steps-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">The process</span>
      <h2 id="steps-h2">How does a lawn restoration with RAH Solutions work?</h2>
      <p>RAH Solutions LLC follows four steps on every restoration, from a patch repair to a full yard.</p>
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
      <span class="eyebrow-label">One yard, two stages</span>
      <h2 id="gallery-h2">What does a yard look like before and during restoration?</h2>
      <p>These RAH Solutions job photos show the same sloped backyard: first with dead turf, then graded smooth and ready for seed.</p>
    </div>
    <div class="sp-gallery-grid sp-gallery-grid--two" data-p1-dynamic>
      <figure class="sp-gallery-item reveal-scale"><?php echo picture('hillside-yard-dead-turf-before', 'Sloped backyard with dead, matted and bare turf before lawn restoration', '(max-width: 700px) 100vw, 50vw'); ?><figcaption>Before: dead and bare turf across the slope</figcaption></figure>
      <figure class="sp-gallery-item reveal-scale reveal-delay-1"><?php echo picture('hillside-yard-finish-graded', 'The same sloped backyard graded smooth with dark soil, ready for seed', '(max-width: 700px) 100vw, 50vw'); ?><figcaption>Graded smooth and ready for seed</figcaption></figure>
    </div>
  </div>
</section>

<section class="section svc-faq" aria-labelledby="faq-h2">
  <div class="container faq-wrap">
    <div class="section-head reveal-left">
      <span class="eyebrow-label">FAQ</span>
      <h2 id="faq-h2">What do people ask about lawn restoration in Edgerton?</h2>
      <p>Describe the lawn on a call to <?php echo e($phone); ?> and Robert will set a time to look at it.</p>
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
      <?php echo serviceCards(relatedServices(['sod-installation', 'excavating-services', 'lawn-maintenance']), '(max-width: 560px) 100vw, 33vw'); ?>
    </div>
    <div class="town-links">
      <h3>Lawn restoration near you</h3>
      <ul>
        <?php foreach (['edgerton-wi', 'janesville-wi', 'stoughton-wi', 'evansville-wi', 'oregon-wi', 'brodhead-wi'] as $tl): $ta = areaBySlug($tl); ?>
        <li><a href="<?php echo areaHref($ta); ?>"><?php echo icon('map-pin', 14); ?> Lawn restoration in <?php echo e($ta['name']); ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<?php $ctaBandId = 'band-lawn-restoration'; $ctaBandHeading = 'Get a written price for repairing your lawn'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php'; ?>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
