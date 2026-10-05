<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$svc             = serviceBySlug('sod-installation');
$currentPage     = 'services';
$pageType        = 'service';
$serviceSlug     = 'sod-installation';
$pageTitle       = 'Sod Installation in Edgerton, WI | RAH Solutions LLC';
$pageDescription = 'Sod installation in Edgerton, WI: old turf removed, soil graded and prepared, sod laid tight and rolled. Free on-site estimates from RAH Solutions LLC.';
$canonicalUrl    = $siteUrl . '/services/sod-installation/';
$heroPreload     = heroPreload('hillside-yard-topsoil-graded', '100vw');
$ogImage         = 'hillside-yard-topsoil-graded.jpg';
$pageCss         = ['service'];
$pageStyle       = <<<CSS
/* sod-installation: layered-soil accent, watering callout in aqua */
.page-sod-installation .svc-hero .hero-bg img { object-position: 50% 55%; }
.page-sod-installation .type-card h3 { padding-left: .7rem; border-left: 3px solid var(--color-accent); }
.page-sod-installation .type-card--photo { min-height: 340px; }
.page-sod-installation .type-card__icon { background: color-mix(in srgb, var(--color-secondary) 12%, var(--color-surface)); color: var(--color-secondary); }
.page-sod-installation .svc-callout { border-left: 4px solid var(--color-aqua); background: color-mix(in srgb, var(--color-aqua) 8%, var(--color-paper)); border-radius: var(--radius-lg); box-shadow: var(--shadow); }
.page-sod-installation .step-track li h3 { color: var(--color-secondary); }
CSS;

$faqs = [
    ['When can sod be laid in Wisconsin?',
     'Sod can be laid through most of the growing season, as long as the ground is not frozen and the sod can be watered. Spring and early fall are the easiest on new sod. Midsummer installs work too, but they need more water.'],
    ['How often does new sod need water?',
     'Daily for the first couple of weeks, enough to keep the sod and the soil under it moist. Once the roots have taken hold, watering is cut back to deeper, less frequent soakings. Edges and seams dry out first, so check them.'],
    ['When can I walk on or mow new sod?',
     'Keep foot traffic light until the sod has rooted. A simple test is to tug gently on a corner: if it resists, roots have started to hold. The first mow comes after that, at about 3 inches or higher and never removing more than a third of the blade.'],
    ['Is sod better than seed?',
     'Sod gives a finished lawn the day it goes down and holds soil on slopes right away. Seed costs less but takes longer and is best sown from mid-August to mid-September. The <a href="/blog/sod-vs-seed-new-lawn-wisconsin/">sod vs. seed guide</a> compares them, and <a href="/services/lawn-restoration/">lawn restoration</a> covers the seeding route.'],
    ['Can sod go straight over my old lawn?',
     'No. Sod laid over old grass or weeds cannot root into the soil and fails. The old turf is removed and the soil is loosened and graded first, so the new sod sits directly on prepared soil.'],
    ['Can you fix grading or drainage before the sod goes down?',
     'Yes. Low spots, slopes toward the house and rough fill are corrected first. RAH Solutions does that work itself as <a href="/services/excavating-services/">excavating and grading</a>, so the lawn is not laid over a drainage problem.'],
];

$steps = [
    ['Look at the yard', 'Robert measures the area, checks slope, drainage and soil, and asks how soon you need a lawn.'],
    ['Written estimate', 'You get a written estimate that covers removal, grading, soil preparation and the sod itself.'],
    ['Prepare and lay', 'Old turf comes out, the soil is graded and prepared, and the sod is laid tight, trimmed to fit and rolled.'],
    ['Walk the finished lawn', 'The site is cleaned up and Robert goes over the watering plan for the first weeks before leaving.'],
];

$schemaNodes = [
    webPageNode(),
    breadcrumbNode([['Home', '/'], ['Services', '/services/'], ['Sod Installation', '/services/sod-installation/']]),
    serviceSchemaNode('Sod Installation', 'New lawns by sod in Edgerton, WI and nearby Rock and Dane County towns: old turf removal, grading, soil preparation, laying and rolling sod.', $canonicalUrl),
    ['@type' => 'HowTo', 'name' => 'How RAH Solutions LLC installs a sod lawn', 'step' => array_map(fn($s, $i) => ['@type' => 'HowToStep', 'position' => $i + 1, 'name' => $s[0], 'text' => $s[1]], $steps, array_keys($steps))],
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-sod-installation">

<section class="hero hero--photo svc-hero" aria-label="Sod installation in Edgerton, WI">
  <div class="hero-bg"><?php echo picture('hillside-yard-topsoil-graded', 'Hillside backyard graded smooth with fresh topsoil below a two-story house, ready for a new lawn', '100vw', ['eager' => true, 'class' => 'hero-img']); ?></div>
  <div class="hero-overlay"></div>
  <span class="grain" aria-hidden="true"></span>
  <div class="container hero-grid hero-grid--form">
    <div class="hero-text">
      <?php echo breadcrumbs([['Home', '/'], ['Services', '/services/'], ['Sod Installation', '/services/sod-installation/']]); ?>
      <span class="eyebrow">Removal · Grading · Soil prep · Sod laid and rolled</span>
      <h1 class="hero-title">Sod Installation in Edgerton, WI</h1>
      <p class="page-answer">RAH Solutions LLC installs sod lawns in Edgerton and nearby towns. The crew removes the old turf, grades and prepares the soil, lays the sod tight and rolls it. Estimates are free. The photo shows a yard graded with topsoil, the stage before a new lawn goes in.</p>
      <div class="hero-actions">
        <button type="button" class="btn btn-accent btn-lg hero-form-open" data-open-estimate>Get a free sod estimate</button>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> or call <?php echo e($phone); ?></a>
      </div>
      <p class="last-updated">Last updated: <?php echo date('F Y'); ?></p>
    </div>
    <?php $heroFormId = 'hero-sod-installation'; $heroFormService = 'sod-installation'; $heroFormHeading = 'Get a free sod estimate'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
  </div>
</section>

<section class="section svc-intro" aria-labelledby="intro-h2">
  <div class="container svc-layout">
    <div class="svc-body">
      <p class="identity-line"><strong>RAH Solutions LLC</strong> is a licensed and insured, family-owned landscaper based in Edgerton, Wisconsin. Started by Robert Harried in 2023, it serves Rock and Dane County homes and businesses.</p>
      <h2 id="intro-h2">What does sod installation from RAH Solutions include?</h2>
      <div class="answer-block">
        <h3>Short answer</h3>
        <p>RAH Solutions LLC sod installation covers the whole job: removing old turf and debris, grading the yard so water drains away from the house, preparing the soil, laying sod with tight staggered seams, trimming it to fit and rolling it for soil contact. You water daily for the first couple of weeks.</p>
      </div>
      <p>Sod is the fast way to a lawn. Where seed takes a season to fill in, sod is green the day it is laid and covers bare soil before rain can move it. That is why people look for sod installation near me in Edgerton after a new build, an addition, a septic or utility dig, or when a slope keeps washing out.</p>
      <p>The sod itself is the easy part. What decides whether it lives is the ground under it. Sod laid on hard, unprepared soil dries out and never knits in. RAH Solutions has its own skid steer and grading equipment, so the same crew that shapes the yard also lays the lawn, and the <a href="/services/excavating-services/">excavating and grading</a> is not handed to another contractor.</p>
      <p>Sod is not the only option. If the existing lawn is thin but mostly alive, overseeding through <a href="/services/lawn-restoration/">lawn restoration</a> does the job for less material. Robert will tell you at the estimate which one fits your yard.</p>
    </div>
    <aside class="svc-rail" aria-label="On this page">
      <nav class="svc-toc" aria-label="Page sections">
        <h2>On this page</h2>
        <ol>
          <li><a href="#types-h2">Stages of the job</a></li>
          <li><a href="#cond-h2">Soil and grade</a></li>
          <li><a href="#water-h2">Watering new sod</a></li>
          <li><a href="#steps-h2">How it works</a></li>
          <li><a href="#faq-h2">Sod FAQ</a></li>
        </ol>
      </nav>
      <div class="svc-callcard">
        <strong>Need a lawn this season?</strong>
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
      <span class="eyebrow-label">Stages of the job</span>
      <h2 id="types-h2">What are the stages of a sod installation?</h2>
      <p>RAH Solutions LLC installs sod in five stages, and most of the labor happens before the first roll of sod is unloaded.</p>
    </div>
    <div class="type-grid" data-p1-dynamic>
      <article class="type-card reveal-up reveal-delay-1">
        <span class="type-card__icon"><?php echo icon('x', 22); ?></span>
        <h3>Removal</h3>
        <p>Old grass, weeds, rocks and construction debris are stripped off and hauled away, so the new sod sits on soil and nothing else.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-2">
        <span class="type-card__icon"><?php echo icon('tractor', 22); ?></span>
        <h3>Grading</h3>
        <p>The yard is shaped so water runs away from the foundation and does not pond. Fill is brought in where the ground is low.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-3">
        <span class="type-card__icon"><?php echo icon('layers', 22); ?></span>
        <h3>Soil preparation</h3>
        <p>Compacted soil is loosened, topsoil is added where it is thin, and the surface is raked smooth and firm for the sod to root into.</p>
      </article>
      <div class="type-card type-card--photo reveal-scale reveal-delay-1">
        <?php echo picture('hillside-fill-dirt-rough-grade', 'Fill dirt spread and rough graded on a hillside yard, with equipment tracks in the soil', '(max-width: 560px) 100vw, 33vw'); ?>
      </div>
      <article class="type-card reveal-up reveal-delay-2">
        <span class="type-card__icon"><?php echo icon('ruler', 22); ?></span>
        <h3>Laying</h3>
        <p>Sod is laid in staggered rows like brickwork, with seams pushed tight and pieces cut to fit along beds, walks and curves.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-3">
        <span class="type-card__icon"><?php echo icon('check-circle', 22); ?></span>
        <h3>Rolling</h3>
        <p>The finished lawn is rolled to press the sod against the soil and remove air pockets, then it is ready for its first watering.</p>
      </article>
    </div>
  </div>
</section>

<section class="section svc-conditions texture-grain edge-facet-top" aria-labelledby="cond-h2">
  <span class="grain-layer" aria-hidden="true"></span>
  <div class="container">
    <div class="cond-head reveal-left">
      <span class="eyebrow-label">Under the sod</span>
      <h2 id="cond-h2">Why does soil preparation matter so much for sod?</h2>
      <p>Sod only lives if its roots grow into the soil below. RAH Solutions LLC prepares the ground for four local conditions before any sod is ordered.</p>
    </div>
    <ul class="cond-list">
      <li class="reveal-up"><span><?php echo icon('hard-hat', 22); ?></span><b>Compacted lots</b><p>Compaction is common on newer subdivision lots after construction traffic. Roots cannot enter packed soil, so it is loosened first.</p></li>
      <li class="reveal-up"><span><?php echo icon('droplets', 22); ?></span><b>Slow-draining subsoil</b><p>Silt loam over a clay-rich subsoil drains slowly. The grade is set so water moves off the lawn instead of sitting under the new sod.</p></li>
      <li class="reveal-up"><span><?php echo icon('mountain', 22); ?></span><b>Slopes</b><p>On a hillside like the one in these photos, sod is laid across the slope so the seams do not become channels for runoff.</p></li>
      <li class="reveal-up"><span><?php echo icon('layers', 22); ?></span><b>Soil contact</b><p>Every piece has to touch soil along its whole underside. A smooth, firm seedbed and a pass with the roller are what make that happen.</p></li>
    </ul>
  </div>
</section>

<section class="section section--tight" aria-labelledby="water-h2">
  <div class="container">
    <div class="svc-callout reveal-up">
      <span><?php echo icon('droplets', 26); ?></span>
      <div>
        <h2 id="water-h2">How should new sod be watered in the first weeks?</h2>
        <p>Water new sod daily for the first couple of weeks. RAH Solutions goes over the plan with you when the job is finished, because watering is the part of a sod lawn that the owner controls.</p>
        <p>Start the day the sod is laid and soak it through to the soil underneath. Lift a corner to check: the soil below should be damp, not dusty. Pay attention to edges, seams and strips along pavement, which dry first. Once the sod resists a gentle tug, the roots are holding and watering can shift to deeper, less frequent soakings. After it is established, a lawn here needs about an inch of water a week in summer to stay green.</p>
      </div>
    </div>
  </div>
</section>

<section class="section svc-steps" aria-labelledby="steps-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">The process</span>
      <h2 id="steps-h2">How does a sod project with RAH Solutions work?</h2>
      <p>RAH Solutions LLC follows four steps on every sod job, from a side yard to a full lot.</p>
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
      <h2 id="faq-h2">What do people ask about sod installation in Edgerton?</h2>
      <p>Describe the yard on a call to <?php echo e($phone); ?> and Robert will set a time to measure it.</p>
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
      <?php echo serviceCards(relatedServices(['excavating-services', 'lawn-restoration', 'landscape-installation']), '(max-width: 560px) 100vw, 33vw'); ?>
    </div>
    <div class="town-links">
      <h3>Sod installation near you</h3>
      <ul>
        <?php foreach (['edgerton-wi', 'stoughton-wi', 'madison-wi', 'janesville-wi', 'mcfarland-wi', 'watertown-wi'] as $tl): $ta = areaBySlug($tl); ?>
        <li><a href="<?php echo areaHref($ta); ?>"><?php echo icon('map-pin', 14); ?> Sod installation in <?php echo e($ta['name']); ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<?php $ctaBandId = 'band-sod-installation'; $ctaBandHeading = 'Want a written price for a new sod lawn?'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php'; ?>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
