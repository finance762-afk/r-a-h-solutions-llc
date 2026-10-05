<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$svc             = serviceBySlug('lawn-maintenance');
$currentPage     = 'services';
$pageType        = 'service';
$serviceSlug     = 'lawn-maintenance';
$pageTitle       = 'Lawn Maintenance in Edgerton, WI | RAH Solutions LLC';
$pageDescription = 'Scheduled lawn mowing, trimming and edging in Edgerton, WI. RAH Solutions LLC mows homes, acreages and business lots on a set schedule. Free estimates.';
$canonicalUrl    = $siteUrl . '/services/lawn-maintenance/';
$heroPreload     = heroPreload('lawn-mowed-stripes-corner-lot', '100vw');
$ogImage         = 'lawn-mowed-stripes-corner-lot.jpg';
$pageCss         = ['service'];
$pageStyle       = <<<CSS
/* lawn-maintenance: leaf-green card rule, striped accent under the section heads */
.page-lawn-maintenance .svc-hero .hero-bg img { object-position: 50% 70%; }
.page-lawn-maintenance .type-card h3 { padding-left: .7rem; border-left: 3px solid var(--color-accent); }
.page-lawn-maintenance .type-card__icon { background: color-mix(in srgb, var(--color-accent) 18%, var(--color-surface)); color: var(--color-secondary); }
.page-lawn-maintenance .svc-callout { border-top: 3px solid var(--color-accent); background: color-mix(in srgb, var(--color-accent) 7%, var(--color-paper)); }
.page-lawn-maintenance .step-track li h3 { color: var(--color-secondary); }
.page-lawn-maintenance .sp-gallery-item { border-radius: var(--radius-lg); box-shadow: var(--shadow); }
CSS;

$faqs = [
    ['How often should a lawn be mowed in southern Wisconsin?',
     'Often enough that no more than one third of the grass blade comes off in a single cut. For most Edgerton lawns that means weekly mowing during spring growth and again in early fall, and a longer gap when summer heat slows the grass down.'],
    ['What height does RAH Solutions mow at?',
     'About 3 to 3.5 inches, the height UW–Madison Extension recommends for Wisconsin lawns. Taller grass shades the soil, holds moisture and leaves less room for weeds than a lawn cut short.'],
    ['Do you mow when the lawn is brown and dormant?',
     'No. A cool-season lawn that gets less than about an inch of water a week in summer goes dormant, and mowing dormant turf only stresses it. RAH Solutions skips or spaces out visits until the grass is growing again.'],
    ['Can I get a single mow instead of a full season?',
     'Yes. RAH Solutions gives estimates for one-time cuts, for example before a house is listed or after a yard has grown tall, as well as for season-long schedules. Call (608) 501-5123 to describe the property.'],
    ['Is mowing different for a home than for a business?',
     'The cut is the same and the planning is different. See <a href="/services/residential-lawn-care/">residential lawn care</a> for gates, pets and beds on a home lot, and <a href="/services/commercial-lawn-care/">commercial lawn care</a> for set days and entrances at a business.'],
    ['My lawn is thin even though it gets mowed. Will mowing fix it?',
     'Mowing at the right height helps, but it does not add grass. Thin or bare turf needs seed and often soil work, which is <a href="/services/lawn-restoration/">lawn restoration</a>. The <a href="/blog/when-to-aerate-and-overseed-southern-wisconsin/">aeration and overseeding guide</a> explains the timing.'],
];

$steps = [
    ['Look at the property', 'Robert walks the lawn, notes slopes, gates, beds and obstacles, and asks how you want the yard kept.'],
    ['Written estimate', 'You get a written estimate that says what each visit includes and how often the crew will come.'],
    ['Mow, trim and edge', 'On each visit the crew mows, trims where the mower cannot reach and edges along walks and drives.'],
    ['Clean up and check', 'Clippings are blown off hard surfaces, gates are closed and the lawn is checked before the crew leaves.'],
];

$schemaNodes = [
    webPageNode(),
    breadcrumbNode([['Home', '/'], ['Services', '/services/'], ['Lawn Maintenance', '/services/lawn-maintenance/']]),
    serviceSchemaNode('Lawn Maintenance', 'Scheduled lawn mowing, trimming, edging and seasonal lawn care for homes, acreages and businesses in Edgerton, WI and nearby Rock and Dane County towns.', $canonicalUrl),
    ['@type' => 'HowTo', 'name' => 'How RAH Solutions LLC sets up a lawn maintenance schedule', 'step' => array_map(fn($s, $i) => ['@type' => 'HowToStep', 'position' => $i + 1, 'name' => $s[0], 'text' => $s[1]], $steps, array_keys($steps))],
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-lawn-maintenance">

<section class="hero hero--photo svc-hero" aria-label="Lawn maintenance in Edgerton, WI">
  <div class="hero-bg"><?php echo picture('lawn-mowed-stripes-corner-lot', 'Freshly mowed corner-lot lawn with mowing stripes in front of a single-story home', '100vw', ['eager' => true, 'class' => 'hero-img']); ?></div>
  <div class="hero-overlay"></div>
  <span class="grain" aria-hidden="true"></span>
  <div class="container hero-grid hero-grid--form">
    <div class="hero-text">
      <?php echo breadcrumbs([['Home', '/'], ['Services', '/services/'], ['Lawn Maintenance', '/services/lawn-maintenance/']]); ?>
      <span class="eyebrow">Mowing · Trimming · Edging · Seasonal care</span>
      <h1 class="hero-title">Lawn Maintenance in Edgerton, WI</h1>
      <p class="page-answer">RAH Solutions LLC mows, trims and edges lawns in Edgerton and nearby towns on a set schedule through the growing season. The same crew comes with its own zero-turn mowers, and estimates are free after an on-site look.</p>
      <div class="hero-actions">
        <button type="button" class="btn btn-accent btn-lg hero-form-open" data-open-estimate>Get a free mowing estimate</button>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> or call <?php echo e($phone); ?></a>
      </div>
      <p class="last-updated">Last updated: <?php echo date('F Y'); ?></p>
    </div>
    <?php $heroFormId = 'hero-lawn-maintenance'; $heroFormService = 'lawn-maintenance'; $heroFormHeading = 'Get a free mowing estimate'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
  </div>
</section>

<section class="section svc-intro" aria-labelledby="intro-h2">
  <div class="container svc-layout">
    <div class="svc-body">
      <p class="identity-line"><strong>RAH Solutions LLC</strong> is a licensed and insured, family-owned landscaper based in Edgerton, Wisconsin. Started by Robert Harried in 2023, it serves Rock and Dane County homes and businesses.</p>
      <h2 id="intro-h2">What does lawn maintenance from RAH Solutions include?</h2>
      <div class="answer-block">
        <h3>Short answer</h3>
        <p>RAH Solutions LLC lawn maintenance is a mowing program: the lawn is mowed at about 3 to 3.5 inches, trimmed around trees, fences and buildings, edged along walks and drives, and clippings are blown off hard surfaces. Visits follow a set schedule from spring green-up until growth stops in fall.</p>
      </div>
      <p>People who search for lawn maintenance near me in Edgerton usually want one thing: the grass cut properly, on the same day each week, without having to call and ask. That is how RAH Solutions sets up a mowing account. Robert looks at the property once, writes down what a visit covers, and the crew follows that plan for the season.</p>
      <p>The program fits any property with turf. A city lot, a corner lot with a long street side, a rural acreage with outbuildings and a business frontage all get the same cut. What changes is the equipment route, the trimming time and how often the crew comes.</p>
      <p>Mowing is also the base that other work is added to. Many customers start the year with a <a href="/services/spring-yard-cleanup/">spring yard cleanup</a>, keep a weekly mow through summer and finish with a <a href="/services/fall-yard-cleanup/">fall cleanup</a> so leaves do not sit on the lawn all winter.</p>
    </div>
    <aside class="svc-rail" aria-label="On this page">
      <nav class="svc-toc" aria-label="Page sections">
        <h2>On this page</h2>
        <ol>
          <li><a href="#types-h2">What a visit covers</a></li>
          <li><a href="#cond-h2">Mowing by season</a></li>
          <li><a href="#callout-h2">Mowing height</a></li>
          <li><a href="#steps-h2">How it works</a></li>
          <li><a href="#gallery-h2">Mowed lawns</a></li>
          <li><a href="#faq-h2">Mowing FAQ</a></li>
        </ol>
      </nav>
      <div class="svc-callcard">
        <strong>Need the lawn on a schedule?</strong>
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
      <span class="eyebrow-label">What a visit covers</span>
      <h2 id="types-h2">Which lawn maintenance tasks does RAH Solutions handle?</h2>
      <p>RAH Solutions LLC handles the recurring work that keeps turf even and edges clean, plus the seasonal jobs at each end of the mowing year.</p>
    </div>
    <div class="type-grid" data-p1-dynamic>
      <article class="type-card reveal-up reveal-delay-1">
        <span class="type-card__icon"><?php echo icon('leaf', 22); ?></span>
        <h3>Mowing</h3>
        <p>Zero-turn mowers cut open lawn quickly and evenly. The mowing direction is changed from visit to visit so the grass does not lean and ruts do not form.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-2">
        <span class="type-card__icon"><?php echo icon('scissors', 22); ?></span>
        <h3>Trimming</h3>
        <p>String trimming finishes what a mower deck cannot reach: around trees, mailbox posts, fence lines, foundations, light poles and play sets.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-3">
        <span class="type-card__icon"><?php echo icon('ruler', 22); ?></span>
        <h3>Edging</h3>
        <p>A clean line is kept where turf meets sidewalks, driveways and curbs, so grass does not creep over the concrete.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-1">
        <span class="type-card__icon"><?php echo icon('wind', 22); ?></span>
        <h3>Blow-off</h3>
        <p>Clippings are blown off walks, drives, patios and steps before the crew leaves, and kept out of the street.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-2">
        <span class="type-card__icon"><?php echo icon('calendar-check', 22); ?></span>
        <h3>Seasonal care</h3>
        <p>Spring and fall cleanups, leaf removal and bed work can be added to the mowing schedule, so one company covers the yard all season.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-3">
        <span class="type-card__icon"><?php echo icon('tractor', 22); ?></span>
        <h3>Large and rural lawns</h3>
        <p>Acreages, farmyards and long road frontages are mowed with the same equipment, with trimming around barns, sheds and fence posts.</p>
      </article>
    </div>
  </div>
</section>

<section class="section svc-conditions texture-grain edge-facet-top" aria-labelledby="cond-h2">
  <span class="grain-layer" aria-hidden="true"></span>
  <div class="container">
    <div class="cond-head reveal-left">
      <span class="eyebrow-label">Cool-season turf</span>
      <h2 id="cond-h2">How does the mowing schedule change through a Wisconsin season?</h2>
      <p>RAH Solutions LLC adjusts mowing to how fast the grass is growing. Kentucky bluegrass, fescues and ryegrass grow hard in spring and fall and slow down in summer heat.</p>
    </div>
    <ul class="cond-list">
      <li class="reveal-up"><span><?php echo icon('sprout', 22); ?></span><b>Spring flush</b><p>Growth is fastest in spring. Weekly visits keep the cut inside the one-third rule, which says never to remove more than a third of the blade at once.</p></li>
      <li class="reveal-up"><span><?php echo icon('sun', 22); ?></span><b>Summer heat</b><p>Lawns need about an inch of water a week in summer. Without it they go dormant and brown, and visits are spaced out until rain brings them back.</p></li>
      <li class="reveal-up"><span><?php echo icon('droplets', 22); ?></span><b>Wet ground</b><p>Silt loam over clay drains slowly in many local yards. Mowing soft ground leaves ruts, so a visit may shift within the week after heavy rain.</p></li>
      <li class="reveal-up"><span><?php echo icon('wind', 22); ?></span><b>Fall growth and leaves</b><p>Grass picks up again in early fall and mowing continues until it stops. A thick mat of leaves left over winter smothers turf and encourages snow mold.</p></li>
    </ul>
  </div>
</section>

<section class="section section--tight" aria-labelledby="callout-h2">
  <div class="container">
    <div class="svc-callout reveal-up">
      <span><?php echo icon('ruler', 26); ?></span>
      <div>
        <h2 id="callout-h2">Why does RAH Solutions mow at 3 to 3.5 inches?</h2>
        <p>RAH Solutions mows at about 3 to 3.5 inches because that is the height UW–Madison Extension recommends for Wisconsin lawns. Grass cut that tall shades its own soil, keeps more moisture through July and August and crowds out weed seedlings.</p>
        <p>Cutting short to stretch the time between mows works against the lawn. It removes too much of the blade at once, exposes the soil and leaves the turf brown at the tips. If a lawn has grown tall, it is brought back down over two cuts instead of one.</p>
      </div>
    </div>
  </div>
</section>

<section class="section svc-steps" aria-labelledby="steps-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">The process</span>
      <h2 id="steps-h2">How does a mowing account with RAH Solutions work?</h2>
      <p>RAH Solutions LLC sets up every mowing account the same way, whether it is a single visit or a full season.</p>
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
      <span class="eyebrow-label">Recent mowing</span>
      <h2 id="gallery-h2">What does a lawn mowed by RAH Solutions look like?</h2>
      <p>These are RAH Solutions job photos: a zero-turn mower finishing a yard beside a sunroom, and a mowed lawn in front of a red barn.</p>
    </div>
    <div class="sp-gallery-grid sp-gallery-grid--two" data-p1-dynamic>
      <figure class="sp-gallery-item reveal-scale"><?php echo picture('zero-turn-mower-sunroom-yard', 'Red zero-turn mower parked on a freshly mowed lawn beside a house with a sunroom', '(max-width: 700px) 100vw, 50vw'); ?><figcaption>Zero-turn mower on a finished home lawn</figcaption></figure>
      <figure class="sp-gallery-item reveal-scale reveal-delay-1"><?php echo picture('red-barn-mowed-lawn', 'Evenly mowed lawn in front of a long red barn under a blue sky', '(max-width: 700px) 100vw, 50vw'); ?><figcaption>Rural lawn mowed up to the barn</figcaption></figure>
    </div>
  </div>
</section>

<section class="section svc-faq" aria-labelledby="faq-h2">
  <div class="container faq-wrap">
    <div class="section-head reveal-left">
      <span class="eyebrow-label">FAQ</span>
      <h2 id="faq-h2">What do people ask about lawn maintenance in Edgerton?</h2>
      <p>Describe the property on a call to <?php echo e($phone); ?> and Robert will tell you what a schedule would look like.</p>
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
      <?php echo serviceCards(relatedServices(['spring-yard-cleanup', 'lawn-restoration', 'mulching-services']), '(max-width: 560px) 100vw, 33vw'); ?>
    </div>
    <div class="town-links">
      <h3>Lawn maintenance near you</h3>
      <ul>
        <?php foreach (['edgerton-wi', 'milton-wi', 'janesville-wi', 'stoughton-wi', 'evansville-wi', 'fort-atkinson-wi'] as $tl): $ta = areaBySlug($tl); ?>
        <li><a href="<?php echo areaHref($ta); ?>"><?php echo icon('map-pin', 14); ?> Lawn maintenance in <?php echo e($ta['name']); ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<?php $ctaBandId = 'band-lawn-maintenance'; $ctaBandHeading = 'Get a written price for mowing your property'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php'; ?>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
