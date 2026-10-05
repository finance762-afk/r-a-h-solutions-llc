<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$svc             = serviceBySlug('residential-lawn-care');
$currentPage     = 'services';
$pageType        = 'service';
$serviceSlug     = 'residential-lawn-care';
$pageTitle       = 'Residential Lawn Care in Edgerton, WI | RAH Solutions LLC';
$pageDescription = 'Residential lawn care in Edgerton, WI: front and back yards mowed, trimmed around beds and fences, gates closed behind us. Free estimates by RAH Solutions LLC.';
$canonicalUrl    = $siteUrl . '/services/residential-lawn-care/';
$heroPreload     = heroPreload('backyard-mowed-green-house', '100vw');
$ogImage         = 'backyard-mowed-green-house.jpg';
$pageCss         = ['service'];
$pageStyle       = <<<CSS
/* residential-lawn-care: deep-green card rule, yard photo beside the schedule callout */
.page-residential-lawn-care .svc-hero .hero-bg img { object-position: 50% 60%; }
.page-residential-lawn-care .type-card h3 { padding-left: .7rem; border-left: 3px solid var(--color-secondary); }
.page-residential-lawn-care .type-card--photo { min-height: 340px; }
.page-residential-lawn-care .svc-compare { display: grid; grid-template-columns: minmax(0, 1fr) minmax(0, 1fr); gap: clamp(1.5rem, 5vw, 3.5rem); align-items: center; }
.page-residential-lawn-care .svc-compare .svc-callout { max-width: none; }
.page-residential-lawn-care .svc-figure { margin: 0; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); }
.page-residential-lawn-care .svc-figure figcaption { padding: .6rem .9rem; background: var(--color-paper-2); color: var(--color-muted); font-family: var(--font-accent); }
@media (max-width: 800px) { .page-residential-lawn-care .svc-compare { grid-template-columns: 1fr; } }
CSS;

$faqs = [
    ['Do I need to be home when the lawn is mowed?',
     'No. Most residential customers are at work when the crew comes. RAH Solutions needs a way into the back yard, such as an unlocked gate, and a clear lawn. Visits happen on weekdays, Monday through Friday.'],
    ['What about dogs and gates?',
     'Tell Robert about pets during the estimate. Dogs should be inside while the crew is working, and waste should be picked up before mowing day. Gates are closed and latched when the crew leaves the yard.'],
    ['Do you bag the clippings?',
     'Normally clippings are left on the lawn. When grass is cut on schedule the clippings are short, fall between the blades and break down. Heavy clumps after a wet week are spread out or removed so they do not smother the turf.'],
    ['Can you take care of the flower beds too?',
     'Yes, as a separate service. <a href="/services/garden-maintenance/">Garden maintenance</a> covers weeding and seasonal upkeep, and <a href="/services/mulching-services/">mulching</a> covers fresh mulch. Both can be scheduled alongside mowing.'],
    ['Can you mow just while we are on vacation?',
     'Yes. RAH Solutions gives estimates for one-time and short-term mowing as well as a full season. Call (608) 501-5123 with your dates and the size of the yard.'],
    ['Part of my yard is bare or thin. Is that a mowing problem?',
     'Usually not. Shade, compacted soil, pet damage and summer drought are the common causes. The <a href="/blog/when-to-aerate-and-overseed-southern-wisconsin/">aeration and overseeding guide</a> covers how thin turf is repaired, and RAH Solutions does that work as <a href="/services/lawn-restoration/">lawn restoration</a>.'],
];

$steps = [
    ['Walk the yard', 'Robert looks at the front and back yard, the gate, slopes, beds and anything the mower has to work around.'],
    ['Written estimate', 'You get a written estimate that lists what each visit includes and whether it is weekly, every other week or one time.'],
    ['Mow, trim and edge', 'The crew mows front and back, trims along beds, fences and the foundation, and edges the walk and driveway.'],
    ['Clean up and close up', 'Clippings are blown off the walk, drive and patio, and the gate is latched before the crew leaves.'],
];

$schemaNodes = [
    webPageNode(),
    breadcrumbNode([['Home', '/'], ['Services', '/services/'], ['Residential Lawn Care', '/services/residential-lawn-care/']]),
    serviceSchemaNode('Residential Lawn Care', 'Lawn mowing, trimming and edging for home lots in Edgerton, WI and nearby Rock and Dane County towns, on a weekly schedule or as a one-time visit.', $canonicalUrl),
    ['@type' => 'HowTo', 'name' => 'How RAH Solutions LLC sets up residential lawn care', 'step' => array_map(fn($s, $i) => ['@type' => 'HowToStep', 'position' => $i + 1, 'name' => $s[0], 'text' => $s[1]], $steps, array_keys($steps))],
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-residential-lawn-care">

<section class="hero hero--photo svc-hero" aria-label="Residential lawn care in Edgerton, WI">
  <div class="hero-bg"><?php echo picture('backyard-mowed-green-house', 'Freshly mowed backyard behind a green house with a patio and shrubs', '100vw', ['eager' => true, 'class' => 'hero-img']); ?></div>
  <div class="hero-overlay"></div>
  <span class="grain" aria-hidden="true"></span>
  <div class="container hero-grid hero-grid--form">
    <div class="hero-text">
      <?php echo breadcrumbs([['Home', '/'], ['Services', '/services/'], ['Residential Lawn Care', '/services/residential-lawn-care/']]); ?>
      <span class="eyebrow">Front yards · Back yards · Weekly or one-time</span>
      <h1 class="hero-title">Residential Lawn Care in Edgerton, WI</h1>
      <p class="page-answer">RAH Solutions LLC mows, trims and edges home lawns in Edgerton and nearby towns. A visit covers the front and back yard, the edges along beds and fences, and a blow-off of the walk and driveway. Estimates are free.</p>
      <div class="hero-actions">
        <button type="button" class="btn btn-accent btn-lg hero-form-open" data-open-estimate>Get a free lawn care estimate</button>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> or call <?php echo e($phone); ?></a>
      </div>
      <p class="last-updated">Last updated: <?php echo date('F Y'); ?></p>
    </div>
    <?php $heroFormId = 'hero-residential-lawn-care'; $heroFormService = 'residential-lawn-care'; $heroFormHeading = 'Get a free lawn care estimate'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
  </div>
</section>

<section class="section svc-intro" aria-labelledby="intro-h2">
  <div class="container svc-layout">
    <div class="svc-body">
      <p class="identity-line"><strong>RAH Solutions LLC</strong> is a licensed and insured, family-owned landscaper based in Edgerton, Wisconsin. Started by Robert Harried in 2023, it serves Rock and Dane County homes and businesses.</p>
      <h2 id="intro-h2">What does residential lawn care from RAH Solutions cover?</h2>
      <div class="answer-block">
        <h3>Short answer</h3>
        <p>RAH Solutions LLC residential lawn care is mowing sized for a home lot. Each visit covers the front and back yard, string trimming along beds, fences, trees and the foundation, edging at the walk and driveway, and blowing clippings off hard surfaces. Visits are weekly, every other week or one time.</p>
      </div>
      <p>Homeowners looking for residential lawn care near me in Edgerton tend to have the same short list. They want the crew to show up when it said it would, cut the grass at a sensible height, stay out of the flower beds and shut the gate. RAH Solutions builds each home account around those points, and Robert Harried is the person you talk to about it.</p>
      <p>A home lot is tighter than an open field. There are gates a mower has to fit through, window wells, swing sets, garden beds, a dog run, a neighbor’s fence a foot from the property line. The first visit is where the crew learns the yard, and after that the routine stays the same from week to week.</p>
      <p>This page is about home yards. For the mowing program in general, including acreages, see <a href="/services/lawn-maintenance/">lawn maintenance</a>. Yard work that happens once a season is on the <a href="/services/spring-yard-cleanup/">spring yard cleanup</a> page.</p>
    </div>
    <aside class="svc-rail" aria-label="On this page">
      <nav class="svc-toc" aria-label="Page sections">
        <h2>On this page</h2>
        <ol>
          <li><a href="#types-h2">What a visit includes</a></li>
          <li><a href="#cond-h2">Home lot details</a></li>
          <li><a href="#schedule-h2">Weekly or one-time?</a></li>
          <li><a href="#steps-h2">How it works</a></li>
          <li><a href="#faq-h2">Lawn care FAQ</a></li>
        </ol>
      </nav>
      <div class="svc-callcard">
        <strong>Want the yard handled this season?</strong>
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
      <span class="eyebrow-label">What a visit includes</span>
      <h2 id="types-h2">What happens during a residential lawn care visit?</h2>
      <p>RAH Solutions LLC does the same five things on every home visit, in the same order, so the yard looks the same each time.</p>
    </div>
    <div class="type-grid" data-p1-dynamic>
      <article class="type-card reveal-up reveal-delay-1">
        <span class="type-card__icon"><?php echo icon('home', 22); ?></span>
        <h3>Front yard</h3>
        <p>The part the street sees: lawn mowed in straight passes, the terrace strip by the curb included, and the edge at the sidewalk kept clean.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-2">
        <span class="type-card__icon"><?php echo icon('fence', 22); ?></span>
        <h3>Back yard</h3>
        <p>Mowed through the gate, around patios, sheds and play sets. Tight corners a zero-turn cannot reach are finished with a smaller mower or a trimmer.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-3">
        <span class="type-card__icon"><?php echo icon('scissors', 22); ?></span>
        <h3>Trimming</h3>
        <p>String trimming along fences, trees, bed edges, window wells and the foundation, done carefully so siding, bark and plants are not nicked.</p>
      </article>
      <div class="type-card type-card--photo reveal-scale reveal-delay-1">
        <?php echo picture('zero-turn-mower-sunroom-yard', 'Zero-turn mower on a lawn beside arborvitae and a sunroom', '(max-width: 560px) 100vw, 33vw'); ?>
      </div>
      <article class="type-card reveal-up reveal-delay-2">
        <span class="type-card__icon"><?php echo icon('ruler', 22); ?></span>
        <h3>Edging</h3>
        <p>The line where grass meets the front walk and the driveway is edged, which is what makes a mowed yard look finished.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-3">
        <span class="type-card__icon"><?php echo icon('wind', 22); ?></span>
        <h3>Blow-off</h3>
        <p>Clippings are blown off the walk, driveway, patio and steps and kept out of mulch beds and the street gutter.</p>
      </article>
    </div>
  </div>
</section>

<section class="section svc-conditions texture-grain edge-facet-top" aria-labelledby="cond-h2">
  <span class="grain-layer" aria-hidden="true"></span>
  <div class="container">
    <div class="cond-head reveal-left">
      <span class="eyebrow-label">Details of a home lot</span>
      <h2 id="cond-h2">How does RAH Solutions work around gates, pets and garden beds?</h2>
      <p>RAH Solutions LLC asks about four things at the estimate, because they decide how a home visit goes and they differ at every house.</p>
    </div>
    <ul class="cond-list">
      <li class="reveal-up"><span><?php echo icon('fence', 22); ?></span><b>Gates and access</b><p>Gate width decides which mower reaches the back yard. Leave the gate unlocked on mowing day. It is closed and latched when the crew is done.</p></li>
      <li class="reveal-up"><span><?php echo icon('shield-check', 22); ?></span><b>Pets</b><p>Dogs stay indoors during the visit. Pet waste, toys, hoses and furniture should be off the lawn so the whole yard can be cut.</p></li>
      <li class="reveal-up"><span><?php echo icon('leaf', 22); ?></span><b>Beds and plantings</b><p>Mower discharge is pointed away from mulch and flower beds, and trimming stops short of stems. Point out new plantings and anything that should not be cut.</p></li>
      <li class="reveal-up"><span><?php echo icon('droplets', 22); ?></span><b>Shade and wet spots</b><p>Many local yards sit on silt loam over clay and drain slowly. Low, shaded areas are mowed last or skipped while soft, so the mower does not leave ruts.</p></li>
    </ul>
  </div>
</section>

<section class="section section--tight" aria-labelledby="schedule-h2">
  <div class="container svc-compare">
    <figure class="svc-figure reveal-scale">
      <?php echo picture('rural-yard-mowed-white-house', 'Wide mowed yard with a zero-turn mower parked near a white house', '(max-width: 800px) 100vw, 50vw'); ?>
      <figcaption>A larger home yard after a scheduled mow</figcaption>
    </figure>
    <div class="svc-callout reveal-up">
      <span><?php echo icon('calendar-check', 26); ?></span>
      <div>
        <h2 id="schedule-h2">Should a home lawn be mowed weekly or every other week?</h2>
        <p>RAH Solutions recommends weekly mowing while the grass is growing fast, which around Edgerton means spring and early fall. Weekly cuts keep each mow within the one-third rule: never take off more than a third of the blade at once.</p>
        <p>Every other week can work in the heat of summer, when cool-season grass slows down, and on lawns that are not watered. A lawn getting less than about an inch of water a week goes dormant, and a dormant lawn is left alone until it greens up. The lawn is kept at about 3 to 3.5 inches all season.</p>
      </div>
    </div>
  </div>
</section>

<section class="section svc-steps" aria-labelledby="steps-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">The process</span>
      <h2 id="steps-h2">How does residential lawn care with RAH Solutions get started?</h2>
      <p>RAH Solutions LLC starts every home account with a look at the yard, then follows the same four steps.</p>
    </div>
    <ol class="step-track">
      <?php foreach ($steps as $i => $s): ?>
      <li class="reveal-up reveal-delay-<?php echo $i + 1; ?>"><h3><?php echo e($s[0]); ?></h3><p><?php echo e($s[1]); ?></p></li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>

<section class="section svc-faq" aria-labelledby="faq-h2">
  <div class="container faq-wrap">
    <div class="section-head reveal-left">
      <span class="eyebrow-label">FAQ</span>
      <h2 id="faq-h2">What do homeowners ask about lawn care in Edgerton?</h2>
      <p>Describe your yard on a call to <?php echo e($phone); ?> and Robert will tell you what a visit would include.</p>
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
      <?php echo serviceCards(relatedServices(['garden-maintenance', 'mulching-services', 'fall-yard-cleanup']), '(max-width: 560px) 100vw, 33vw'); ?>
    </div>
    <div class="town-links">
      <h3>Residential lawn care near you</h3>
      <ul>
        <?php foreach (['edgerton-wi', 'stoughton-wi', 'milton-wi', 'janesville-wi', 'mcfarland-wi', 'oregon-wi'] as $tl): $ta = areaBySlug($tl); ?>
        <li><a href="<?php echo areaHref($ta); ?>"><?php echo icon('map-pin', 14); ?> Lawn care in <?php echo e($ta['name']); ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<?php $ctaBandId = 'band-residential-lawn-care'; $ctaBandHeading = 'Want a written price for mowing your yard?'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php'; ?>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
