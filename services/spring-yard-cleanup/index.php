<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$svc             = serviceBySlug('spring-yard-cleanup');
$currentPage     = 'services';
$pageType        = 'service';
$serviceSlug     = 'spring-yard-cleanup';
$pageTitle       = 'Spring Yard Cleanup in Edgerton, WI | RAH Solutions LLC';
$pageDescription = 'Spring yard cleanup in Edgerton, WI: sticks and debris out, matted turf raked, beds cut back and edged, first mow. Free estimates from RAH Solutions LLC.';
$canonicalUrl    = $siteUrl . '/services/spring-yard-cleanup/';
$pageCss         = ['service'];
$pageStyle       = <<<CSS
/* spring-yard-cleanup: photo-free hero, leaf-green type cards, soft green timing callout */
.page-spring-yard-cleanup .type-card { background: color-mix(in srgb, var(--color-accent) 7%, var(--color-surface)); }
.page-spring-yard-cleanup .type-card h3 { padding-bottom: .4rem; border-bottom: 2px solid color-mix(in srgb, var(--color-accent) 60%, transparent); }
.page-spring-yard-cleanup .type-card__icon { color: var(--color-secondary); }
.page-spring-yard-cleanup .type-card--photo { min-height: 320px; border-radius: var(--radius-lg); }
.page-spring-yard-cleanup .svc-callout { background: color-mix(in srgb, var(--color-aqua) 10%, var(--color-surface)); border-radius: var(--radius-lg); }
.page-spring-yard-cleanup .svc-callout > span { color: var(--color-secondary); }
CSS;

$faqs = [
    ['When should a spring yard cleanup be done in southern Wisconsin?',
     'After the snow is gone, the frost is out and the lawn is firm enough to walk on without leaving footprints. Go by the ground, not the calendar.'],
    ['What are the gray, matted patches in my lawn after the snow melts?',
     'Most likely snow mold, a turf disease that shows up as matted, straw-colored circles when snow has sat on unfrozen ground. UW–Madison Extension says it rarely kills the grass and recommends raking the patches in spring so air reaches the crowns. Areas that stay thin can be overseeded; see the <a href="/blog/when-to-aerate-and-overseed-southern-wisconsin/">aeration and overseeding guide</a>.'],
    ['Should perennials and ornamental grasses be cut back in spring?',
     'Yes, if they were left standing over winter. Dead stems and old grass blades are cut down before new growth gets tall enough to be damaged by the cut. Spring-flowering shrubs such as lilac and forsythia are different: they are pruned right after they bloom, so RAH Solutions leaves them alone during a spring cleanup.'],
    ['Can you fix the lawn along my driveway where the plow tore it up?',
     'Yes. Sod and gravel pushed onto the lawn by a plow are raked back or removed, gouges are leveled, and bare strips are prepared so they can be seeded. Larger areas are handled as <a href="/services/lawn-restoration/">lawn restoration</a>.'],
    ['Is mulch part of a spring cleanup?',
     'It is a separate service that is often done on the same visit. A cleanup leaves beds cleared, cut back and edged, which is the preparation mulch needs. Fresh mulch belongs 2 to 4 inches deep and off trunks and stems. The <a href="/services/mulching-services/">mulching page</a> covers what is included.'],
    ['Do I need to be home during the cleanup?',
     'Not usually. The scope is agreed during the free estimate. After that the crew only needs access to the yard. If you want a call before anything outside that scope is done, say so at the estimate.'],
];

$steps = [
    ['Walk the yard', 'Robert looks at the lawn, beds and driveway edges after the snow is gone and notes what winter left behind.'],
    ['Agree the scope', 'You decide together what is cleared, what is cut back, which beds are edged and whether mulch or lawn repair is added.'],
    ['Clear, rake and cut back', 'Once the ground is firm, the crew picks up sticks and debris, rakes matted turf, cuts back dead growth and edges the beds.'],
    ['Haul away and mow', 'Debris is hauled off, hard surfaces are blown clean, and the lawn gets its first mow when it has grown enough to need one.'],
];

$schemaNodes = [
    webPageNode(),
    breadcrumbNode([['Home', '/'], ['Services', '/services/'], ['Spring Yard Cleanup', '/services/spring-yard-cleanup/']]),
    serviceSchemaNode('Spring Yard Cleanup', 'Spring yard cleanup in Edgerton, WI and nearby Rock and Dane County towns: stick and debris removal, raking matted turf, cutting back perennials, bed edging and preparation, and the first mow of the season.', $canonicalUrl),
    ['@type' => 'HowTo', 'name' => 'How RAH Solutions LLC handles a spring yard cleanup', 'step' => array_map(fn($s, $i) => ['@type' => 'HowToStep', 'position' => $i + 1, 'name' => $s[0], 'text' => $s[1]], $steps, array_keys($steps))],
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-spring-yard-cleanup">

<section class="hero svc-hero svc-hero--plain" aria-label="Spring yard cleanup in Edgerton, WI">
  <svg class="floating-facet" viewBox="0 0 120 110" fill="none" stroke="currentColor" stroke-width="1" stroke-linejoin="round" aria-hidden="true"><path d="M34 6H86L112 32 60 104 8 32ZM8 32H112M34 6 44 32 60 6 76 32 86 6M44 32 60 104 76 32"/></svg>
  <span class="grain" aria-hidden="true"></span>
  <div class="container hero-grid hero-grid--form">
    <div class="hero-text">
      <?php echo breadcrumbs([['Home', '/'], ['Services', '/services/'], ['Spring Yard Cleanup', '/services/spring-yard-cleanup/']]); ?>
      <span class="eyebrow">Debris · Raking · Bed cutback · First mow</span>
      <h1 class="hero-title">Spring Yard Cleanup in Edgerton, WI</h1>
      <p class="page-answer">RAH Solutions LLC clears what winter left on your yard in Edgerton and nearby towns: sticks and debris picked up, matted turf raked, beds cut back and edged, and the lawn mowed for the first time. Estimates are free and given on site.</p>
      <div class="hero-actions">
        <button type="button" class="btn btn-accent btn-lg hero-form-open" data-open-estimate>Get a free cleanup estimate</button>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> or call <?php echo e($phone); ?></a>
      </div>
      <p class="last-updated">Last updated: <?php echo date('F Y'); ?></p>
    </div>
    <?php $heroFormId = 'hero-spring-yard-cleanup'; $heroFormService = 'spring-yard-cleanup'; $heroFormHeading = 'Get a free spring cleanup estimate'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
  </div>
</section>

<section class="section svc-intro" aria-labelledby="intro-h2">
  <div class="container svc-layout">
    <div class="svc-body">
      <p class="identity-line"><strong>RAH Solutions LLC</strong> is a licensed and insured, family-owned landscaper based in Edgerton, Wisconsin. Started by Robert Harried in 2023, it serves Rock and Dane County homes and businesses.</p>
      <h2 id="intro-h2">What does a spring yard cleanup from RAH Solutions include?</h2>
      <div class="answer-block">
        <h3>Short answer</h3>
        <p>RAH Solutions LLC removes winter debris and prepares the lawn and beds for the growing season. A typical visit covers stick and litter pickup, raking out matted grass and leftover leaves, cutting back perennials left standing, edging and cleaning beds, repairing plow damage along the driveway, and a first mow.</p>
      </div>
      <p>A Wisconsin yard comes out of winter looking worse than it went in. Branches are down, late leaves are packed into the beds, the grass is flattened and gray in patches, and there is a ridge of gravel and torn sod where the plow met the lawn. All of it is easier to deal with in one organized visit than in pieces through May.</p>
      <p>If you are looking for spring yard cleanup near me in Edgerton, the first thing RAH Solutions will ask is what the yard needs most. Some properties need a full reset of lawn and beds. Others only need the beds cut back, or the driveway edge repaired. The estimate is written around your yard, not a fixed package.</p>
      <p>The cleanup also sets up the rest of the season. Clean, edged beds are ready for <a href="/services/mulching-services/">fresh mulch</a>. If you want to walk your own yard first, the <a href="/blog/spring-yard-cleanup-checklist-wisconsin/">spring yard cleanup checklist</a> lists what to look for.</p>
    </div>
    <aside class="svc-rail" aria-label="On this page">
      <nav class="svc-toc" aria-label="Page sections">
        <h2>On this page</h2>
        <ol>
          <li><a href="#types-h2">What gets done</a></li>
          <li><a href="#cond-h2">What winter leaves</a></li>
          <li><a href="#timing-h2">When to start</a></li>
          <li><a href="#steps-h2">How a cleanup works</a></li>
          <li><a href="#faq-h2">Spring cleanup FAQ</a></li>
        </ol>
      </nav>
      <div class="svc-callcard">
        <strong>Want the yard ready early?</strong>
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
      <span class="eyebrow-label">What gets done</span>
      <h2 id="types-h2">Which spring cleanup tasks does RAH Solutions handle?</h2>
      <p>RAH Solutions LLC handles the lawn, the beds and the edges in one visit, for home lots and commercial properties around Edgerton.</p>
    </div>
    <div class="type-grid" data-p1-dynamic>
      <article class="type-card reveal-up reveal-delay-1">
        <span class="type-card__icon"><?php echo icon('wind', 22); ?></span>
        <h3>Debris and stick pickup</h3>
        <p>Fallen branches, twigs, blown-in litter and leftover leaves are gathered from the lawn, beds, fence lines and window wells, then hauled away.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-2">
        <span class="type-card__icon"><?php echo icon('sprout', 22); ?></span>
        <h3>Raking matted turf</h3>
        <p>Grass pressed flat by snow is raked lightly so it stands up and dries out. Matted patches of snow mold are opened up so new growth can come through.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-3">
        <span class="type-card__icon"><?php echo icon('scissors', 22); ?></span>
        <h3>Cutting back</h3>
        <p>Perennial stems and ornamental grasses left standing for winter are cut down before new shoots get tall.</p>
      </article>
      <div class="type-card type-card--photo type-card--facet reveal-scale reveal-delay-1">
        <?php echo facetPanel('wind'); ?>
      </div>
      <article class="type-card reveal-up reveal-delay-2">
        <span class="type-card__icon"><?php echo icon('pencil-ruler', 22); ?></span>
        <h3>Bed edging and prep</h3>
        <p>Bed edges that blurred into the lawn are recut to a clean line. Early weeds come out and the soil surface is tidied so the bed is ready for plants or mulch.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-3">
        <span class="type-card__icon"><?php echo icon('leaf', 22); ?></span>
        <h3>First mow</h3>
        <p>Once the grass is growing, the lawn gets its first cut at about 3 to 3.5 inches, taking no more than a third of the blade, with clippings blown off walks and drives.</p>
      </article>
    </div>
  </div>
</section>

<section class="section svc-conditions texture-grain edge-facet-top" aria-labelledby="cond-h2">
  <span class="grain-layer" aria-hidden="true"></span>
  <div class="container">
    <div class="cond-head reveal-left">
      <span class="eyebrow-label">After a Wisconsin winter</span>
      <h2 id="cond-h2">What does winter do to a yard in southern Wisconsin?</h2>
      <p>Months of snow cover, plowing and freeze and thaw leave four kinds of damage. RAH Solutions LLC checks for each one during a spring cleanup in Rock and Dane counties.</p>
    </div>
    <ul class="cond-list">
      <li class="reveal-up"><span><?php echo icon('cloud-snow', 22); ?></span><b>Matted grass and snow mold</b><p>Snow presses turf flat, and leaves left on the lawn make it worse. Gray or straw-colored matted circles are snow mold. Raking lets the grass dry and recover.</p></li>
      <li class="reveal-up"><span><?php echo icon('truck', 22); ?></span><b>Plow damage at the edges</b><p>Plows scrape sod and push gravel onto the lawn along driveways and roads. The debris is raked off, gouges are leveled and bare strips are made ready for seed.</p></li>
      <li class="reveal-up"><span><?php echo icon('trees', 22); ?></span><b>Broken branches</b><p>Wind, ice and wet snow bring down sticks and limbs all winter. They have to come off the lawn before the first mow, and broken wood is trimmed out of shrubs.</p></li>
      <li class="reveal-up"><span><?php echo icon('leaf', 22); ?></span><b>Leaves packed into beds</b><p>Leaves that fell late or blew in settle around shrubs and perennials. They are cleared so new shoots are not smothered.</p></li>
    </ul>
  </div>
</section>

<section class="section section--tight" aria-labelledby="timing-h2">
  <div class="container">
    <div class="svc-callout reveal-up">
      <span><?php echo icon('calendar-check', 26); ?></span>
      <div>
        <h2 id="timing-h2">Why wait until the ground is firm?</h2>
        <p>Because working a soft, saturated lawn does more harm than the debris does. RAH Solutions schedules spring cleanups for when the frost is out and the soil has drained enough to carry foot traffic and equipment. On the slow-draining silt loam around Edgerton, that can be later than the first warm weekend.</p>
        <p>A simple test: walk across the lawn. If your feet sink or water comes up around your shoes, it is too early to rake or mow. Spring is also the third-best time to seed a cool-season lawn, so large bare areas are often patched now and overseeded properly in late summer.</p>
      </div>
    </div>
  </div>
</section>

<section class="section svc-steps" aria-labelledby="steps-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">The process</span>
      <h2 id="steps-h2">How does a spring cleanup with RAH Solutions work?</h2>
      <p>RAH Solutions LLC follows the same four steps on a small town lot and on a large rural yard.</p>
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
      <h2 id="faq-h2">What do people ask about spring cleanup in Edgerton?</h2>
      <p>Call <?php echo e($phone); ?> and tell Robert what the yard looks like; RAH Solutions will set up a time to see it.</p>
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
      <?php echo serviceCards(relatedServices(['mulching-services', 'lawn-restoration', 'lawn-maintenance']), '(max-width: 560px) 100vw, 33vw'); ?>
    </div>
    <div class="town-links">
      <h3>Spring yard cleanup near you</h3>
      <ul>
        <?php foreach (['edgerton-wi', 'stoughton-wi', 'milton-wi', 'mcfarland-wi', 'oregon-wi', 'janesville-wi'] as $tl): $ta = areaBySlug($tl); ?>
        <li><a href="<?php echo areaHref($ta); ?>"><?php echo icon('map-pin', 14); ?> Spring cleanup in <?php echo e($ta['name']); ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<?php $ctaBandId = 'band-spring-yard-cleanup'; $ctaBandHeading = 'Get your yard on the spring cleanup schedule'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php'; ?>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
