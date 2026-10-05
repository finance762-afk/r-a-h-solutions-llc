<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$svc             = serviceBySlug('hardscaping-services');
$currentPage     = 'services';
$pageType        = 'service';
$serviceSlug     = 'hardscaping-services';
$pageTitle       = 'Hardscaping Services in Edgerton, WI | RAH Solutions LLC';
$pageDescription = 'Paver and stone patios, walkways and retaining walls in Edgerton, WI. RAH Solutions LLC builds the base and drainage for freeze and thaw. Free estimates.';
$canonicalUrl    = $siteUrl . '/services/hardscaping-services/';
$pageCss         = ['service'];
$pageStyle       = <<<CSS
/* hardscaping-services: stone-toned cards with an aqua course line, squared callout */
.page-hardscaping-services .type-card { background: color-mix(in srgb, var(--color-mist) 55%, var(--color-surface)); border-bottom: 3px solid var(--color-aqua); }
.page-hardscaping-services .type-card__icon { background: var(--color-ink); color: var(--color-white); border-radius: var(--radius); }
.page-hardscaping-services .type-card h3 { font-family: var(--font-heading); color: var(--color-ink); }
.page-hardscaping-services .svc-callout { border: 1px solid var(--color-line); border-top: 4px solid var(--color-primary); background: var(--color-paper-2); }
.page-hardscaping-services .svc-callout > span { color: var(--color-primary); }
.page-hardscaping-services .cond-list b { color: var(--color-aqua); }
CSS;

$faqs = [
    ['Is a paver patio or a poured concrete patio better?',
     'Both work in southern Wisconsin when the base is right. Pavers flex with frost and a single sunken or stained unit can be lifted and reset. Poured concrete costs less to install on most simple shapes and has no joints for weeds. RAH Solutions builds both; see <a href="/services/concrete-services/">concrete services</a> for slabs.'],
    ['Do pavers heave in a Wisconsin winter?',
     'Pavers move when the base under them holds water and freezes. A base of compacted crushed stone that drains, a surface pitched away from the house and a firm edge restraint keep the surface flat. Pavers laid on soil or on a thin layer of sand are the ones that heave.'],
    ['Do I need a permit for a retaining wall?',
     'It depends on where you live and on the wall. Rules differ between cities, villages and towns, and they often turn on wall height, what the wall holds up and how close it is to a property line. Check with your municipality before work is scheduled.'],
    ['When can hardscape work be done?',
     'Patios, walks and walls are built from spring thaw until the ground freezes in late fall. The base has to be compacted on unfrozen ground, so winter is for planning and estimates.'],
    ['How do I look after a paver patio?',
     'Sweep it, rinse it, and top up the joint sand when joints look low. Pull weeds while they are small.'],
    ['Can RAH Solutions fix the drainage around a patio or wall?',
     'Yes. Regrading, buried downspout lines and yard drains are part of <a href="/services/excavating-services/">excavating services</a>, and they are often done in the same project so water is dealt with before the stone goes down.'],
];

$steps = [
    ['Look at the property', 'Robert measures the area, checks slope, soil and where water goes, and asks how the patio, walk or wall will be used.'],
    ['Written estimate', 'You receive a written estimate that lists the layout, the materials, the base work and any drainage work.'],
    ['Excavate and build', 'The area is dug out, the crushed stone base is placed and compacted in layers, and the pavers, stone or wall block are set.'],
    ['Finish and walk the job', 'Joints are filled, edges are backfilled, the yard is cleaned up, and Robert walks the finished work with you.'],
];

$schemaNodes = [
    webPageNode(),
    breadcrumbNode([['Home', '/'], ['Services', '/services/'], ['Hardscaping Services', '/services/hardscaping-services/']]),
    serviceSchemaNode('Hardscaping Services', 'Paver and stone patios, walkways, garden paths and retaining walls in Edgerton, WI and nearby Rock and Dane County towns, built on a compacted, draining base for freeze and thaw.', $canonicalUrl),
    ['@type' => 'HowTo', 'name' => 'How RAH Solutions LLC builds a patio, walkway or retaining wall', 'step' => array_map(fn($s, $i) => ['@type' => 'HowToStep', 'position' => $i + 1, 'name' => $s[0], 'text' => $s[1]], $steps, array_keys($steps))],
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-hardscaping-services">

<section class="hero svc-hero svc-hero--plain" aria-label="Hardscaping services in Edgerton, WI">
  <svg class="floating-facet" viewBox="0 0 120 110" fill="none" stroke="currentColor" stroke-width="1" stroke-linejoin="round" aria-hidden="true"><path d="M34 6H86L112 32 60 104 8 32ZM8 32H112M34 6 44 32 60 6 76 32 86 6M44 32 60 104 76 32"/></svg>
  <span class="grain" aria-hidden="true"></span>
  <div class="container hero-grid hero-grid--form">
    <div class="hero-text">
      <?php echo breadcrumbs([['Home', '/'], ['Services', '/services/'], ['Hardscaping Services', '/services/hardscaping-services/']]); ?>
      <span class="eyebrow">Patios · Walkways · Retaining Walls</span>
      <h1 class="hero-title">Hardscaping Services in Edgerton, WI</h1>
      <p class="page-answer">RAH Solutions LLC builds paver and stone patios, walkways and retaining walls in Edgerton and nearby towns. Each one sits on a compacted, draining base made for freeze and thaw. Estimates are free and given on site.</p>
      <div class="hero-actions">
        <button type="button" class="btn btn-accent btn-lg hero-form-open" data-open-estimate>Get a free hardscape estimate</button>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> or call <?php echo e($phone); ?></a>
      </div>
      <p class="last-updated">Last updated: <?php echo date('F Y'); ?></p>
    </div>
    <?php $heroFormId = 'hero-hardscaping-services'; $heroFormService = 'hardscaping-services'; $heroFormHeading = 'Get a free hardscape estimate'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
  </div>
</section>

<section class="section svc-intro" aria-labelledby="intro-h2">
  <div class="container svc-layout">
    <div class="svc-body">
      <p class="identity-line"><strong>RAH Solutions LLC</strong> is a licensed and insured, family-owned landscaper based in Edgerton, Wisconsin. Started by Robert Harried in 2023, it serves Rock and Dane County homes and businesses.</p>
      <h2 id="intro-h2">What hardscaping does RAH Solutions build?</h2>
      <div class="answer-block">
        <h3>Short answer</h3>
        <p>RAH Solutions LLC builds patios, walkways, garden paths, retaining walls and outdoor living areas from pavers, natural stone, wall block and gravel. A typical job covers excavation, a compacted crushed stone base, the surface or wall itself, edge restraint, drainage and cleanup. Estimates are free and written after an on-site look.</p>
      </div>
      <p>Hardscape is the part of a yard that is built instead of grown. Homeowners looking for hardscaping near me in Edgerton usually want a place to sit behind the house, a dry path from the driveway to the door, or a wall that turns a slope into ground they can use.</p>
      <p>What you see on top is the smaller part of the job. A patio or wall lasts because of what is underneath and behind it: how deep the base goes, how well it was compacted, and where water ends up. RAH Solutions has its own excavator, skid steer and dump trailer, so the digging and base work are done by the same crew that sets the stone.</p>
      <p>Hardscape rarely stands alone. A new patio usually needs beds around it, covered on the <a href="/services/landscape-installation/">landscape installation page</a>. If you would prefer a poured slab to pavers, RAH Solutions also does <a href="/services/concrete-services/">concrete work</a>.</p>
    </div>
    <aside class="svc-rail" aria-label="On this page">
      <nav class="svc-toc" aria-label="Page sections">
        <h2>On this page</h2>
        <ol>
          <li><a href="#types-h2">What we build</a></li>
          <li><a href="#cond-h2">Base and drainage</a></li>
          <li><a href="#walls-h2">Walls and permits</a></li>
          <li><a href="#steps-h2">How a build works</a></li>
          <li><a href="#faq-h2">Hardscape FAQ</a></li>
        </ol>
      </nav>
      <div class="svc-callcard">
        <strong>Planning a patio or wall?</strong>
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
      <span class="eyebrow-label">What we build</span>
      <h2 id="types-h2">Which hardscape projects does RAH Solutions take on?</h2>
      <p>RAH Solutions LLC takes on residential and light commercial hardscape around Edgerton, from a short garden path to a patio with a wall.</p>
    </div>
    <div class="type-grid" data-p1-dynamic>
      <article class="type-card reveal-up reveal-delay-1">
        <span class="type-card__icon"><?php echo icon('sun', 22); ?></span>
        <h3>Paver patios</h3>
        <p>Concrete pavers laid over a compacted stone base and a thin bedding layer, held by an edge restraint and locked together with joint sand.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-2">
        <span class="type-card__icon"><?php echo icon('mountain', 22); ?></span>
        <h3>Natural stone patios</h3>
        <p>Flagstone or cut stone for a less uniform look. Stone varies in thickness, so each piece is bedded and leveled by hand.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-3">
        <span class="type-card__icon"><?php echo icon('footprints', 22); ?></span>
        <h3>Walkways and paths</h3>
        <p>Front walks, side-yard paths and stepping stone routes through a bed, built wide enough to use and pitched so water does not sit and freeze on them.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-1">
        <span class="type-card__icon"><?php echo icon('layers', 22); ?></span>
        <h3>Retaining walls</h3>
        <p>Segmental block or stone walls that hold a slope, level a planting area or edge a patio, with drainage stone and a drain line behind them.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-2">
        <span class="type-card__icon"><?php echo icon('flame', 22); ?></span>
        <h3>Outdoor living areas</h3>
        <p>A patio planned together with a seat wall, a fire pit area, steps or a path, so the pieces line up and share one base and one drainage plan.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-3">
        <span class="type-card__icon"><?php echo icon('route', 22); ?></span>
        <h3>Gravel and decorative stone</h3>
        <p>Gravel paths, stone borders along a foundation and decorative stone areas where a full paved surface is more than the spot needs.</p>
      </article>
    </div>
  </div>
</section>

<section class="section svc-conditions texture-grain edge-facet-top" aria-labelledby="cond-h2">
  <span class="grain-layer" aria-hidden="true"></span>
  <div class="container">
    <div class="cond-head reveal-left">
      <span class="eyebrow-label">Built for frost</span>
      <h2 id="cond-h2">How deep does the base need to be for freeze and thaw?</h2>
      <p>Deep enough that the surface sits on compacted crushed stone and not on soil that holds water. RAH Solutions LLC sets base depth by soil and by load, and gets four things right under every patio and walk.</p>
    </div>
    <ul class="cond-list">
      <li class="reveal-up"><span><?php echo icon('layers', 22); ?></span><b>Depth matched to soil and use</b><p>Silt loam over clay drains slowly and heaves when it freezes, so it needs more stone under a patio than sandy ground does. A surface that carries a vehicle needs more than a footpath.</p></li>
      <li class="reveal-up"><span><?php echo icon('hammer', 22); ?></span><b>Compaction in layers</b><p>Base stone is placed in thin lifts and each one is compacted before the next. Stone dumped in one thick layer settles later, and the pavers settle with it.</p></li>
      <li class="reveal-up"><span><?php echo icon('droplets', 22); ?></span><b>Pitch and drainage</b><p>The finished surface slopes gently away from the house. Downspouts are routed around or under the patio so roof water does not run across it.</p></li>
      <li class="reveal-up"><span><?php echo icon('ruler', 22); ?></span><b>Edge restraint</b><p>Pavers only stay tight if the outside row cannot creep outward. A restraint is fastened into the base around the full perimeter before the joints are filled.</p></li>
    </ul>
  </div>
</section>

<section class="section section--tight" aria-labelledby="walls-h2">
  <div class="container">
    <div class="svc-callout reveal-up">
      <span><?php echo icon('clipboard-list', 26); ?></span>
      <div>
        <h2 id="walls-h2">When does a retaining wall need drainage, engineering or a permit?</h2>
        <p>Every retaining wall needs drainage, and some need engineering or a permit. RAH Solutions builds walls on a compacted stone footing with the first course buried, clean drainage stone behind the block and a drain line that carries water out. Wet soil that freezes behind a wall is what pushes walls over in Wisconsin.</p>
        <p>Taller walls, walls stacked in tiers, and walls that hold up a driveway, a building or a steep slope carry much more load. They may need soil reinforcement and a design from an engineer. Permit rules vary by city, village and town, so check with your municipality. Robert will tell you during the estimate if a wall looks like it falls into that group.</p>
      </div>
    </div>
  </div>
</section>

<section class="section svc-steps" aria-labelledby="steps-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">The process</span>
      <h2 id="steps-h2">How does a hardscape project with RAH Solutions work?</h2>
      <p>RAH Solutions LLC follows the same four steps on a garden path and on a patio with a wall.</p>
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
      <h2 id="faq-h2">What do people ask about hardscaping in Edgerton?</h2>
      <p>Describe the project on a call to <?php echo e($phone); ?> and Robert will tell you what to expect. If the new patio will be framed by beds, the <a href="/blog/how-much-mulch-do-i-need/">mulch guide</a> helps you size that part.</p>
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
      <?php echo serviceCards(relatedServices(['concrete-services', 'excavating-services', 'landscape-installation']), '(max-width: 560px) 100vw, 33vw'); ?>
    </div>
    <div class="town-links">
      <h3>Hardscaping services near you</h3>
      <ul>
        <?php foreach (['edgerton-wi', 'janesville-wi', 'madison-wi', 'fort-atkinson-wi', 'evansville-wi', 'whitewater-wi'] as $tl): $ta = areaBySlug($tl); ?>
        <li><a href="<?php echo areaHref($ta); ?>"><?php echo icon('map-pin', 14); ?> Hardscaping in <?php echo e($ta['name']); ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<?php $ctaBandId = 'band-hardscaping-services'; $ctaBandHeading = 'Get a written price for your patio, walk or wall'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php'; ?>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
