<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$svc             = serviceBySlug('concrete-services');
$currentPage     = 'services';
$pageType        = 'service';
$serviceSlug     = 'concrete-services';
$pageTitle       = 'Concrete Services in Edgerton, WI | RAH Solutions LLC';
$pageDescription = 'Concrete driveways, patios, walkways and steps in Edgerton, WI. RAH Solutions LLC builds the base, forms, pours and finishes. Free on-site estimates.';
$canonicalUrl    = $siteUrl . '/services/concrete-services/';
$heroPreload     = heroPreload('concrete-patio-steps-stone-ranch', '100vw');
$ogImage         = 'concrete-patio-steps-stone-ranch.jpg';
$pageCss         = ['service'];
$pageStyle       = <<<CSS
/* concrete-services: cool slate type cards, before/after beside the repair-or-replace callout */
.page-concrete-services .svc-hero .hero-bg img { object-position: 50% 62%; }
.page-concrete-services .type-card h3 { padding-left: .7rem; border-left: 3px solid var(--color-primary); }
.page-concrete-services .type-card--photo { min-height: 340px; }
.page-concrete-services .svc-compare { display: grid; grid-template-columns: minmax(0, 380px) minmax(0, 1fr); gap: clamp(1.5rem, 5vw, 3.5rem); align-items: center; }
.page-concrete-services .svc-compare .svc-callout { max-width: none; }
@media (max-width: 800px) { .page-concrete-services .svc-compare { grid-template-columns: 1fr; } .page-concrete-services .ba { max-width: 420px; } }
CSS;

$faqs = [
    ['How long before I can use new concrete?',
     'Plan on staying off a new slab for at least a day, and keep cars off a new driveway for about a week. Concrete keeps gaining strength for roughly a month, so heavy loads such as a loaded trailer or a dumpster should wait longer. RAH Solutions tells you the exact timing for your pour, because temperature changes it.'],
    ['Can concrete be poured in cold weather in Wisconsin?',
     'It can, within limits. Concrete must not freeze while it is fresh, so late-fall pours need warmer days, a mix suited to the temperature, and insulating blankets overnight. Most outdoor flatwork around Edgerton is poured from spring through fall. If the ground is frozen, the job waits.'],
    ['Why did my old concrete crack, and will new concrete crack too?',
     'All concrete shrinks slightly as it cures, and southern Wisconsin ground moves as it freezes and thaws. Control joints are cut or tooled into a slab so that movement happens in a straight line at the joint instead of across the middle. A compacted gravel base and water draining away from the slab do the rest.'],
    ['Should I repair or replace cracked concrete steps?',
     'Surface flaking can sometimes be patched. Steps that have sunk, tilted or pulled away from the house usually need to be removed and re-poured on a proper base. The <a href="/blog/concrete-steps-repair-or-replace/">repair or replace guide</a> walks through the checks.'],
    ['Do I need a permit for a driveway or sidewalk?',
     'It depends on the municipality and on where the concrete goes. Work in the public right-of-way, such as a city sidewalk or the apron where a driveway meets the street, commonly needs a permit. Check with your city or village hall before work is scheduled; RAH Solutions will tell you what it sees during the estimate.'],
    ['Can I use salt on new concrete the first winter?',
     'Avoid it. Deicing salt is hard on young concrete, and industry guidance is to keep deicers off a slab through its first winter. Use sand for traction instead. RAH Solutions also offers <a href="/services/snow-removal/">snow removal</a>, so the same company that poured the driveway can plow it.'],
];

$steps = [
    ['Look at the site', 'Robert measures the area, checks slope and drainage, and asks how the slab will be used: foot traffic, cars or equipment.'],
    ['Remove and prepare', 'Old concrete and soft soil come out. A gravel base is placed and compacted, then forms are set to the right slope.'],
    ['Reinforce and pour', 'Reinforcement is tied in where the job calls for it, the concrete is placed, leveled and finished, and joints are cut.'],
    ['Cure and clean up', 'The slab is left to cure, forms come off, edges are backfilled and the yard around the pour is cleaned up.'],
];

$schemaNodes = [
    webPageNode(),
    breadcrumbNode([['Home', '/'], ['Services', '/services/'], ['Concrete Services', '/services/concrete-services/']]),
    serviceSchemaNode('Concrete Services', 'Concrete driveways, patios, walkways, steps and pads in Edgerton, WI and nearby Rock and Dane County towns: removal, base preparation, forming, pouring and finishing.', $canonicalUrl),
    ['@type' => 'HowTo', 'name' => 'How RAH Solutions LLC pours a concrete slab', 'step' => array_map(fn($s, $i) => ['@type' => 'HowToStep', 'position' => $i + 1, 'name' => $s[0], 'text' => $s[1]], $steps, array_keys($steps))],
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-concrete-services">

<section class="hero hero--photo svc-hero" aria-label="Concrete services in Edgerton, WI">
  <div class="hero-bg"><?php echo picture('concrete-patio-steps-stone-ranch', 'New concrete patio with a rounded corner and steps behind a stone ranch house', '100vw', ['eager' => true, 'class' => 'hero-img']); ?></div>
  <div class="hero-overlay"></div>
  <span class="grain" aria-hidden="true"></span>
  <div class="container hero-grid hero-grid--form">
    <div class="hero-text">
      <?php echo breadcrumbs([['Home', '/'], ['Services', '/services/'], ['Concrete Services', '/services/concrete-services/']]); ?>
      <span class="eyebrow">Driveways · Patios · Walkways · Steps</span>
      <h1 class="hero-title">Concrete Services in Edgerton, WI</h1>
      <p class="page-answer">RAH Solutions LLC pours and replaces concrete driveways, patios, walkways and steps in Edgerton and nearby towns. The crew removes the old slab, builds a compacted base, forms, pours and finishes, with free on-site estimates.</p>
      <div class="hero-actions">
        <button type="button" class="btn btn-accent btn-lg hero-form-open" data-open-estimate>Get a free concrete estimate</button>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> or call <?php echo e($phone); ?></a>
      </div>
      <p class="last-updated">Last updated: <?php echo date('F Y'); ?></p>
    </div>
    <?php $heroFormId = 'hero-concrete-services'; $heroFormService = 'concrete-services'; $heroFormHeading = 'Get a free concrete estimate'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
  </div>
</section>

<section class="section svc-intro" aria-labelledby="intro-h2">
  <div class="container svc-layout">
    <div class="svc-body">
      <p class="identity-line"><strong>RAH Solutions LLC</strong> is a licensed and insured, family-owned landscaper based in Edgerton, Wisconsin. Started by Robert Harried in 2023, it serves Rock and Dane County homes and businesses.</p>
      <h2 id="intro-h2">What concrete work does RAH Solutions do?</h2>
      <div class="answer-block">
        <h3>Short answer</h3>
        <p>RAH Solutions LLC installs and replaces exterior concrete flatwork: driveways, patios, walkways, steps, landings and equipment pads. A typical job covers tear-out of the old concrete, a compacted gravel base, forms, the pour, finishing, control joints and cleanup. Estimates are free and given after an on-site look.</p>
      </div>
      <p>Concrete near me in Edgerton usually means one of two calls. Either an old slab has cracked, sunk or tilted and needs to come out, or a homeowner wants a new patio, a wider driveway or a proper walk where there is only grass. RAH Solutions handles both, and because the same company also does <a href="/services/excavating-services/">excavating and grading</a>, the dirt work under the slab is not handed to someone else.</p>
      <p>That matters more than the pour itself. Most concrete problems in southern Wisconsin start below the surface: soil that holds water, a thin or uncompacted base, or a slab that sends water toward the house instead of away from it. RAH Solutions looks at slope and drainage first, then builds the base, then pours.</p>
      <p>If you are planning a patio and are not sure between poured concrete and pavers, the <a href="/services/hardscaping-services/">hardscaping page</a> covers paver patios, walkways and retaining walls. Many yards end up with both.</p>
    </div>
    <aside class="svc-rail" aria-label="On this page">
      <nav class="svc-toc" aria-label="Page sections">
        <h2>On this page</h2>
        <ol>
          <li><a href="#types-h2">What we pour</a></li>
          <li><a href="#cond-h2">Freeze and thaw</a></li>
          <li><a href="#compare-h2">Repair or replace?</a></li>
          <li><a href="#steps-h2">How a pour works</a></li>
          <li><a href="#faq-h2">Concrete FAQ</a></li>
        </ol>
      </nav>
      <div class="svc-callcard">
        <strong>Planning a pour this season?</strong>
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
      <span class="eyebrow-label">What we pour</span>
      <h2 id="types-h2">Which concrete projects does RAH Solutions take on?</h2>
      <p>RAH Solutions LLC pours residential and light commercial flatwork around Edgerton, from a single replaced step to a full driveway.</p>
    </div>
    <div class="type-grid" data-p1-dynamic>
      <article class="type-card reveal-up reveal-delay-1">
        <span class="type-card__icon"><?php echo icon('car', 22); ?></span>
        <h3>Driveways</h3>
        <p>New driveways, widened parking pads and replacement of broken sections. The base and slab are built for vehicle weight, with joints laid out so cracks follow the lines.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-2">
        <span class="type-card__icon"><?php echo icon('sun', 22); ?></span>
        <h3>Patios</h3>
        <p>Backyard patios shaped to the house and the yard, including rounded corners and steps down from the door, sloped so rain runs off and away from the foundation.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-3">
        <span class="type-card__icon"><?php echo icon('footprints', 22); ?></span>
        <h3>Walkways and sidewalks</h3>
        <p>Front walks, side-yard paths and replaced sidewalk sections. Walks are formed over a gravel base and reinforced where the job calls for it.</p>
      </article>
      <div class="type-card type-card--photo reveal-scale reveal-delay-1">
        <?php echo picture('concrete-walk-rebar-grid', 'Sidewalk formed with a gravel base and a rebar grid before the concrete pour', '(max-width: 560px) 100vw, 33vw'); ?>
      </div>
      <article class="type-card reveal-up reveal-delay-2">
        <span class="type-card__icon"><?php echo icon('layers', 22); ?></span>
        <h3>Steps and landings</h3>
        <p>Cracked, sunken or tilted entry steps are removed and re-poured as a solid landing and steps with even rises, so the door opens onto something level again.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-3">
        <span class="type-card__icon"><?php echo icon('building-2', 22); ?></span>
        <h3>Slabs and pads</h3>
        <p>Shed and garage aprons, entry pads at shop buildings, and pads for trash enclosures or equipment at small commercial properties.</p>
      </article>
    </div>
  </div>
</section>

<section class="section svc-conditions texture-grain edge-facet-top" aria-labelledby="cond-h2">
  <span class="grain-layer" aria-hidden="true"></span>
  <div class="container">
    <div class="cond-head reveal-left">
      <span class="eyebrow-label">Built for Wisconsin winters</span>
      <h2 id="cond-h2">How does freeze and thaw affect concrete in southern Wisconsin?</h2>
      <p>Water in and under a slab expands when it freezes, and Rock County sees that cycle many times each winter. RAH Solutions LLC plans four things on every pour so the slab handles it.</p>
    </div>
    <ul class="cond-list">
      <li class="reveal-up"><span><?php echo icon('layers', 22); ?></span><b>A compacted gravel base</b><p>Gravel drains and does not heave the way wet soil does. Soft soil is dug out, gravel is placed in layers and compacted before any forms go up.</p></li>
      <li class="reveal-up"><span><?php echo icon('droplets', 22); ?></span><b>Slope and drainage</b><p>The slab is pitched so water runs off and away from the house. Downspouts that dump onto a walk or patio are a common cause of winter damage and get dealt with first.</p></li>
      <li class="reveal-up"><span><?php echo icon('ruler', 22); ?></span><b>Control joints</b><p>Joints are spaced and cut so the slab can shrink and move along planned lines. You can see them in the patio photos on this page.</p></li>
      <li class="reveal-up"><span><?php echo icon('snowflake', 22); ?></span><b>The right mix and first-winter care</b><p>Exterior concrete in a freeze and thaw climate should be an air-entrained mix, which gives freezing water room to expand. Keep deicing salt off it the first winter.</p></li>
    </ul>
  </div>
</section>

<section class="section section--tight" aria-labelledby="compare-h2">
  <div class="container svc-compare">
    <figure class="ba reveal-scale">
      <?php echo picture('concrete-steps-cracked-before', 'Cracked, settled concrete steps along the side of a house before replacement', '(max-width: 800px) 100vw, 380px'); ?>
      <div class="ba__after"><?php echo picture('concrete-landing-formed-poured', 'The same side entry with a new concrete landing poured inside wood forms', '(max-width: 800px) 100vw, 380px'); ?></div>
      <span class="ba__tag ba__tag--before">Before</span><span class="ba__tag ba__tag--after">After</span>
      <input class="ba__range" type="range" min="0" max="100" value="50" aria-label="Drag to compare before and after">
      <span class="ba__divider" aria-hidden="true"></span>
      <figcaption>Side entry: old steps out, new landing poured.</figcaption>
    </figure>
    <div class="svc-callout reveal-up">
      <span><?php echo icon('hammer', 26); ?></span>
      <div>
        <h2 id="compare-h2">When should concrete be replaced instead of patched?</h2>
        <p>Replace it when the slab has moved. Concrete that has sunk, tilted, heaved or pulled away from the house has a base problem, and a patch on top will not fix what is underneath. The steps in this photo had cracked and dropped away from the door, so RAH Solutions removed them and poured a new landing.</p>
        <p>Patching is reasonable when the slab is still level and solid and the damage is on the surface: light flaking, a chipped edge or a hairline crack that has not opened or shifted.</p>
      </div>
    </div>
  </div>
</section>

<section class="section svc-steps" aria-labelledby="steps-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">The process</span>
      <h2 id="steps-h2">How does a concrete project with RAH Solutions work?</h2>
      <p>RAH Solutions LLC follows the same four steps on a single step replacement and on a full driveway.</p>
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
      <span class="eyebrow-label">Recent concrete work</span>
      <h2 id="gallery-h2">What does finished RAH Solutions concrete look like?</h2>
      <p>These are RAH Solutions job photos: a patio seen from above, a slab just after finishing, and new front steps.</p>
    </div>
    <div class="sp-gallery-grid" data-p1-dynamic>
      <figure class="sp-gallery-item reveal-scale"><?php echo picture('concrete-patio-aerial-view', 'Aerial view of a new concrete patio with steps next to a landscaped bed', '(max-width: 700px) 100vw, 55vw'); ?><figcaption>Patio with a stepped landing, joints cut, seen from above</figcaption></figure>
      <figure class="sp-gallery-item reveal-scale reveal-delay-1"><?php echo picture('concrete-slab-fresh-pour', 'Freshly finished concrete slab still in its forms', '(max-width: 700px) 100vw, 40vw'); ?><figcaption>Slab finished and still in its forms</figcaption></figure>
      <figure class="sp-gallery-item reveal-scale reveal-delay-2"><?php echo picture('porch-steps-new-after', 'New concrete steps, stoop and walkway at a front porch', '(max-width: 700px) 100vw, 40vw'); ?><figcaption>New front steps, stoop and walk</figcaption></figure>
    </div>
  </div>
</section>

<section class="section svc-faq" aria-labelledby="faq-h2">
  <div class="container faq-wrap">
    <div class="section-head reveal-left">
      <span class="eyebrow-label">FAQ</span>
      <h2 id="faq-h2">What do people ask about concrete work in Edgerton?</h2>
      <p>Describe the project on a call to <?php echo e($phone); ?> and Robert will tell you what to expect.</p>
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
      <?php echo serviceCards(relatedServices(['excavating-services', 'landscape-installation', 'snow-removal']), '(max-width: 560px) 100vw, 33vw'); ?>
    </div>
    <div class="town-links">
      <h3>Concrete services near you</h3>
      <ul>
        <?php foreach (['edgerton-wi', 'janesville-wi', 'stoughton-wi', 'milton-wi', 'madison-wi', 'evansville-wi'] as $tl): $ta = areaBySlug($tl); ?>
        <li><a href="<?php echo areaHref($ta); ?>"><?php echo icon('map-pin', 14); ?> Concrete in <?php echo e($ta['name']); ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<?php $ctaBandId = 'band-concrete-services'; $ctaBandHeading = 'Get a written price for your concrete project'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php'; ?>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
