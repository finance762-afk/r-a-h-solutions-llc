<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$svc             = serviceBySlug('excavating-services');
$currentPage     = 'services';
$pageType        = 'service';
$serviceSlug     = 'excavating-services';
$pageTitle       = 'Excavating Services in Edgerton, WI | RAH Solutions LLC';
$pageDescription = 'Grading, yard drainage, buried downspout lines and site prep in Edgerton, WI. RAH Solutions LLC runs its own excavator and loaders. Free on-site estimates.';
$canonicalUrl    = $siteUrl . '/services/excavating-services/';
$heroPreload     = heroPreload('excavator-skid-steer-culvert', '100vw');
$ogImage         = 'excavator-skid-steer-culvert.jpg';
$pageCss         = ['service'];
$pageStyle       = <<<CSS
/* excavating-services: tall hero photo held on the machines, earth-toned type cards, 811 callout */
.page-excavating-services .svc-hero .hero-bg img { object-position: 50% 58%; }
.page-excavating-services .type-card { border-top: 3px solid color-mix(in srgb, var(--color-secondary) 55%, var(--color-line)); }
.page-excavating-services .type-card__icon { color: var(--color-secondary); }
.page-excavating-services .type-card--photo { min-height: 340px; border-top: 0; }
.page-excavating-services .svc-callout { border-left: 4px solid var(--color-accent); background: color-mix(in srgb, var(--color-accent) 9%, var(--color-surface)); }
.page-excavating-services .svc-callout blockquote { margin: 1rem 0 0; padding-left: 1rem; border-left: 2px solid var(--color-line); font-family: var(--font-accent); color: var(--color-ink-2); }
CSS;

$faqs = [
    ['Do utilities have to be located before RAH Solutions digs?',
     'Yes. Wisconsin law requires a locate request to Diggers Hotline (call 811) before any digging, and Diggers Hotline asks for at least three working days of notice. The service is free. It marks utility-owned lines only, so tell RAH Solutions about private lines such as a sprinkler system.'],
    ['Why does water sit in my yard after it rains?',
     'Usually for one of three reasons: the ground is flat or tilts the wrong way, the soil drains slowly, or roof water is being dumped in one spot. RAH Solutions checks the slope first.'],
    ['Where does the water go when a downspout is buried?',
     'A buried downspout line is a solid pipe that carries roof water underground, on a steady downhill slope, to a place where it can come out and soak in or run off without causing trouble. It should be well away from the foundation and not aimed at a neighbor or a sidewalk.'],
    ['Do I need a permit for grading or a driveway culvert?',
     'It depends on where the work is. A culvert under a driveway usually sits in the road right-of-way, so the town, village, city or county highway department commonly has to approve it and may set the pipe size. Check with your municipality before work is scheduled.'],
    ['What time of year is best for excavating work?',
     'Spring through fall, whenever the ground is thawed and dry enough to carry equipment. Wet soil ruts and compacts, so a job may wait after heavy rain. Grading for a new lawn is best timed so seed or sod can follow soon after; the <a href="/blog/sod-vs-seed-new-lawn-wisconsin/">sod or seed guide</a> explains the timing.'],
    ['Will the equipment damage my lawn?',
     'Machines leave marks on turf, so the access route is planned with you before work starts and disturbed areas are graded when the digging is done. The same company can then bring the lawn back through <a href="/services/lawn-restoration/">lawn restoration</a> or <a href="/services/sod-installation/">sod installation</a>.'],
];

$steps = [
    ['Walk the site', 'Robert looks at where water comes from and where it goes, checks slope and access for equipment, and asks what the area will be used for.'],
    ['Locate utilities', 'A locate request goes to Diggers Hotline before any digging, and the owner points out private lines the locators will not mark.'],
    ['Dig and grade', 'Soil is cut, moved or brought in with the excavator and loader. Pipe is laid on a steady slope and base material is compacted in layers.'],
    ['Finish and clean up', 'Trenches are backfilled, the surface is graded smooth, extra soil is hauled away and the site is left ready for lawn, concrete or pavers.'],
];

$schemaNodes = [
    webPageNode(),
    breadcrumbNode([['Home', '/'], ['Services', '/services/'], ['Excavating Services', '/services/excavating-services/']]),
    serviceSchemaNode('Excavating Services', 'Landscape excavating in Edgerton, WI and nearby Rock and Dane County towns: grading and leveling, yard drainage, buried downspout lines, culverts and swales, clearing, and site preparation for lawns, slabs and patios.', $canonicalUrl),
    ['@type' => 'HowTo', 'name' => 'How RAH Solutions LLC handles an excavating job', 'step' => array_map(fn($s, $i) => ['@type' => 'HowToStep', 'position' => $i + 1, 'name' => $s[0], 'text' => $s[1]], $steps, array_keys($steps))],
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-excavating-services">

<section class="hero hero--photo svc-hero" aria-label="Excavating services in Edgerton, WI">
  <div class="hero-bg"><?php echo picture('excavator-skid-steer-culvert', 'Skid steer and excavator working dark soil with a corrugated culvert pipe in the foreground', '100vw', ['eager' => true, 'class' => 'hero-img']); ?></div>
  <div class="hero-overlay"></div>
  <span class="grain" aria-hidden="true"></span>
  <div class="container hero-grid hero-grid--form">
    <div class="hero-text">
      <?php echo breadcrumbs([['Home', '/'], ['Services', '/services/'], ['Excavating Services', '/services/excavating-services/']]); ?>
      <span class="eyebrow">Grading · Drainage · Downspout lines · Site prep</span>
      <h1 class="hero-title">Excavating Services in Edgerton, WI</h1>
      <p class="page-answer">RAH Solutions LLC grades and levels yards, fixes drainage, buries downspout lines and prepares sites for lawns, slabs and patios in Edgerton and nearby towns. The work is done with the company’s own excavator and loaders, and estimates are free.</p>
      <div class="hero-actions">
        <button type="button" class="btn btn-accent btn-lg hero-form-open" data-open-estimate>Get a free excavating estimate</button>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> or call <?php echo e($phone); ?></a>
      </div>
      <p class="last-updated">Last updated: <?php echo date('F Y'); ?></p>
    </div>
    <?php $heroFormId = 'hero-excavating-services'; $heroFormService = 'excavating-services'; $heroFormHeading = 'Get a free excavating estimate'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
  </div>
</section>

<section class="section svc-intro" aria-labelledby="intro-h2">
  <div class="container svc-layout">
    <div class="svc-body">
      <p class="identity-line"><strong>RAH Solutions LLC</strong> is a licensed and insured, family-owned landscaper based in Edgerton, Wisconsin. Started by Robert Harried in 2023, it serves Rock and Dane County homes and businesses.</p>
      <h2 id="intro-h2">What excavating work does RAH Solutions do?</h2>
      <div class="answer-block">
        <h3>Short answer</h3>
        <p>RAH Solutions LLC does landscape-scale excavating: grading and leveling, yard drainage, downspout lines put underground, culverts and swales, clearing, and site preparation for lawns, concrete slabs and patios. It is dirt work for yards, lots and small commercial sites, done with the company’s own equipment after a free on-site estimate.</p>
      </div>
      <p>People searching for excavating near me in Edgerton rarely want a hole dug for its own sake. They want water to stop running toward the basement, a lumpy yard made mowable, or a flat, firm spot for a shed, a patio or a new lawn. Each is a grading or drainage problem, solved by moving soil to the right place and giving water somewhere to go.</p>
      <p>RAH Solutions is a landscaper that runs its own excavator and loaders, so the digging and the finished surface come from one company. The same crew can pour the slab through <a href="/services/concrete-services/">concrete services</a> or put the lawn back with <a href="/services/sod-installation/">sod installation</a>.</p>
    </div>
    <aside class="svc-rail" aria-label="On this page">
      <nav class="svc-toc" aria-label="Page sections">
        <h2>On this page</h2>
        <ol>
          <li><a href="#types-h2">What we dig and grade</a></li>
          <li><a href="#cond-h2">Soil and water here</a></li>
          <li><a href="#locate-h2">Call 811 first</a></li>
          <li><a href="#steps-h2">How a job works</a></li>
          <li><a href="#gallery-h2">Job photos</a></li>
          <li><a href="#faq-h2">Excavating FAQ</a></li>
        </ol>
      </nav>
      <div class="svc-callcard">
        <strong>Water going where it should not?</strong>
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
      <span class="eyebrow-label">What we dig and grade</span>
      <h2 id="types-h2">Which excavating jobs does RAH Solutions take on?</h2>
      <p>RAH Solutions LLC takes on residential and light commercial dirt work around Edgerton, from one buried downspout to regrading a whole lot.</p>
    </div>
    <div class="type-grid" data-p1-dynamic>
      <article class="type-card reveal-up reveal-delay-1">
        <span class="type-card__icon"><?php echo icon('ruler', 22); ?></span>
        <h3>Grading and leveling</h3>
        <p>High spots are cut down, low spots filled, and the surface shaped so it falls away from buildings.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-2">
        <span class="type-card__icon"><?php echo icon('droplets', 22); ?></span>
        <h3>Yard drainage</h3>
        <p>Standing water and soggy strips are traced back to their cause. The fix may be regrading, a shallow swale or a drain line to a better outlet.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-3">
        <span class="type-card__icon"><?php echo icon('home', 22); ?></span>
        <h3>Buried downspout lines</h3>
        <p>Downspouts are connected to solid pipe laid in a trench and run downhill to an outlet away from the house.</p>
      </article>
      <div class="type-card type-card--photo reveal-scale reveal-delay-1">
        <?php echo picture('track-loader-grading-pad-base', 'Compact track loader beside graded soil and a compacted gravel pad with a plate compactor', '(max-width: 560px) 100vw, 33vw'); ?>
      </div>
      <article class="type-card reveal-up reveal-delay-2">
        <span class="type-card__icon"><?php echo icon('waves', 22); ?></span>
        <h3>Culverts and swales</h3>
        <p>Culvert pipe is bedded and backfilled where a driveway or path crosses a ditch, and swales are shaped to move runoff across a property without cutting gullies.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-3">
        <span class="type-card__icon"><?php echo icon('layers', 22); ?></span>
        <h3>Site prep and clearing</h3>
        <p>Brush, old turf and soft soil come out. The area is graded, and for a slab or patio a gravel base is placed and compacted, as in the pad shown in this photo.</p>
      </article>
    </div>
  </div>
</section>

<section class="section svc-conditions texture-grain edge-facet-top" aria-labelledby="cond-h2">
  <span class="grain-layer" aria-hidden="true"></span>
  <div class="container">
    <div class="cond-head reveal-left">
      <span class="eyebrow-label">Rock and Dane County ground</span>
      <h2 id="cond-h2">Why do so many southern Wisconsin yards hold water?</h2>
      <p>The soil drains slowly and the ground freezes deep. RAH Solutions LLC plans excavating work around four local conditions that decide whether a grading or drainage fix lasts.</p>
    </div>
    <ul class="cond-list">
      <li class="reveal-up"><span><?php echo icon('layers', 22); ?></span><b>Silt loam over clay</b><p>Most soils here are silt loams, often over a heavier clay-rich subsoil or glacial till. Water soaks in slowly, so surface slope has to do most of the work.</p></li>
      <li class="reveal-up"><span><?php echo icon('truck', 22); ?></span><b>Compacted subdivision lots</b><p>Newer lots are often packed hard by construction traffic, then covered with a thin layer of topsoil. Water sheds off instead of soaking in.</p></li>
      <li class="reveal-up"><span><?php echo icon('snowflake', 22); ?></span><b>Freeze and thaw</b><p>Wet soil heaves when it freezes. Pipe needs a steady slope so it drains empty, and slabs need a compacted gravel base.</p></li>
      <li class="reveal-up"><span><?php echo icon('home', 22); ?></span><b>Roof water</b><p>A roof collects a lot of rain and a downspout drops all of it in one spot. Moving it away from the foundation is often the simplest fix.</p></li>
    </ul>
  </div>
</section>

<section class="section section--tight" aria-labelledby="locate-h2">
  <div class="container">
    <div class="svc-callout reveal-up">
      <span><?php echo icon('phone', 26); ?></span>
      <div>
        <h2 id="locate-h2">Do you have to call 811 before digging in Wisconsin?</h2>
        <p>Yes, and RAH Solutions does not dig until public utilities are marked. Diggers Hotline is Wisconsin’s free utility-locate service, reached by dialing 811. According to diggershotline.com, state law (Wisconsin Statute 182.0175) requires contacting it at least three working days before digging, homeowners included.</p>
        <p>The marks cover lines owned by utilities. Diggers Hotline says privately owned lines are not marked, which includes sprinkler systems, ornamental lighting, propane lines and electric lines to a barn or garage. Point those out during the estimate.</p>
        <blockquote>One Google review of RAH Solutions describes this kind of job: an estimate “for putting our downspout underground,” after which Robert “got the job done nicely and cleaned up after he was done.”</blockquote>
      </div>
    </div>
  </div>
</section>

<section class="section svc-steps" aria-labelledby="steps-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">The process</span>
      <h2 id="steps-h2">How does an excavating job with RAH Solutions work?</h2>
      <p>RAH Solutions LLC follows the same four steps whether the job is one downspout line or a full regrade.</p>
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
      <span class="eyebrow-label">Recent dirt work</span>
      <h2 id="gallery-h2">What does RAH Solutions grading look like on site?</h2>
      <p>These are RAH Solutions job photos: a barn lot graded to bare soil after clearing, and fill dirt rough graded on a backyard slope.</p>
    </div>
    <div class="sp-gallery-grid sp-gallery-grid--two" data-p1-dynamic>
      <figure class="sp-gallery-item reveal-scale"><?php echo picture('barn-lot-graded-after-clearing', 'Barn lot graded to smooth bare soil after brush and debris were cleared', '(max-width: 700px) 100vw, 55vw'); ?><figcaption>Barn lot cleared and graded to bare soil</figcaption></figure>
      <figure class="sp-gallery-item reveal-scale reveal-delay-1"><?php echo picture('hillside-fill-dirt-rough-grade', 'Fill dirt rough graded across a sloped backyard', '(max-width: 700px) 100vw, 40vw'); ?><figcaption>Fill dirt rough graded on a backyard slope</figcaption></figure>
    </div>
  </div>
</section>

<section class="section svc-faq" aria-labelledby="faq-h2">
  <div class="container faq-wrap">
    <div class="section-head reveal-left">
      <span class="eyebrow-label">FAQ</span>
      <h2 id="faq-h2">What do people ask about excavating in Edgerton?</h2>
      <p>Describe the problem on a call to <?php echo e($phone); ?> and Robert will tell you what RAH Solutions would look at first.</p>
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
      <?php echo serviceCards(relatedServices(['concrete-services', 'sod-installation', 'lawn-restoration']), '(max-width: 560px) 100vw, 33vw'); ?>
    </div>
    <div class="town-links">
      <h3>Excavating services near you</h3>
      <ul>
        <?php foreach (['edgerton-wi', 'milton-wi', 'janesville-wi', 'stoughton-wi', 'fort-atkinson-wi', 'evansville-wi'] as $tl): $ta = areaBySlug($tl); ?>
        <li><a href="<?php echo areaHref($ta); ?>"><?php echo icon('map-pin', 14); ?> Excavating in <?php echo e($ta['name']); ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<?php $ctaBandId = 'band-excavating-services'; $ctaBandHeading = 'Get a written price for your grading or drainage job'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php'; ?>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
