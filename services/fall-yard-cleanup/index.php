<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$svc             = serviceBySlug('fall-yard-cleanup');
$currentPage     = 'services';
$pageType        = 'service';
$serviceSlug     = 'fall-yard-cleanup';
$pageTitle       = 'Fall Yard Cleanup in Edgerton, WI | RAH Solutions LLC';
$pageDescription = 'Fall yard cleanup in Edgerton, WI: leaf removal, perennial cutback, bed cleanup, final mow and overgrowth clearing. Free estimates from RAH Solutions LLC.';
$canonicalUrl    = $siteUrl . '/services/fall-yard-cleanup/';
$heroPreload     = heroPreload('barnyard-cleared-after-cleanup', '100vw');
$ogImage         = 'barnyard-cleared-after-cleanup.jpg';
$pageCss         = ['service'];
$pageStyle       = <<<CSS
/* fall-yard-cleanup: hero held on the cleared yard, warm paper type cards, before/after gallery pair */
.page-fall-yard-cleanup .svc-hero .hero-bg img { object-position: 50% 55%; }
.page-fall-yard-cleanup .type-card { background: var(--color-paper-2); border-radius: var(--radius-lg); }
.page-fall-yard-cleanup .type-card__icon { color: var(--color-primary); background: color-mix(in srgb, var(--color-primary) 10%, var(--color-white)); }
.page-fall-yard-cleanup .type-card--photo { min-height: 340px; }
.page-fall-yard-cleanup .svc-callout { border-top: 3px solid var(--color-secondary); }
.page-fall-yard-cleanup .sp-gallery-item figcaption b { font-family: var(--font-accent); letter-spacing: .08em; text-transform: uppercase; color: var(--color-accent); margin-right: .4rem; }
CSS;

$faqs = [
    ['When should fall cleanup be done around Edgerton?',
     'After most of the leaves are down and before snow covers them. In southern Wisconsin snow is possible from November on, so the work has to fit between leaf drop and the first lasting snow. Late-dropping trees such as oaks can mean a second visit.'],
    ['Do all the leaves have to come off the lawn?',
     'A thick layer does. A mat of wet leaves left on turf over winter smothers the grass and encourages snow mold. A light scatter is different: it can be chopped up with a mower and left to break down.'],
    ['Should perennials be cut back in fall or left until spring?',
     'Either can work. Cutting back in fall leaves beds clean and removes diseased foliage. Leaving sturdy stems and ornamental grasses standing gives winter interest, and they are cut in a <a href="/services/spring-yard-cleanup/">spring yard cleanup</a> instead. Shrubs are not pruned hard in fall.'],
    ['Is fall a good time to fix thin or bare lawn areas?',
     'It depends on the date. UW–Madison Extension puts the best seeding window at mid-August to mid-September. By leaf season that window has usually closed, and the second option is dormant seeding in late fall, when seed is spread to sprout in spring. See <a href="/services/lawn-restoration/">lawn restoration</a> for how RAH Solutions handles it.'],
    ['Can RAH Solutions clear a badly overgrown yard or lot?',
     'Yes. The photos on this page show that kind of job: a farmyard between barns that had grown up in weeds and was cleared back to open ground. Overgrowth clearing is priced after an on-site look.'],
    ['What should be done before the first snow?',
     'Get leaves off the lawn, move hoses, furniture and anything else lying in the grass, and mark driveway and bed edges so they can be seen under snow. If you want the driveway or lot plowed, set up <a href="/services/snow-removal/">snow removal</a> at the same time; winter accounts are arranged before the season starts.'],
];

$steps = [
    ['Walk the property', 'Robert looks at the trees, lawn and beds, and at any overgrown areas, and asks what you want kept standing over winter.'],
    ['Agree scope and timing', 'You decide together what is cleared and cut back, where debris goes, and whether the yard needs one visit or two as the leaves come down.'],
    ['Clear, cut back and mow', 'Leaves and debris come off the lawn and out of the beds, perennials are cut back, overgrowth is cleared and the lawn is mowed.'],
    ['Haul away and check', 'Debris is hauled off, walks and drives are blown clean, and the yard is checked over so it is ready for snow.'],
];

$schemaNodes = [
    webPageNode(),
    breadcrumbNode([['Home', '/'], ['Services', '/services/'], ['Fall Yard Cleanup', '/services/fall-yard-cleanup/']]),
    serviceSchemaNode('Fall Yard Cleanup', 'Fall yard cleanup in Edgerton, WI and nearby Rock and Dane County towns: leaf removal, cutting back perennials, bed cleanup, final mowing, overgrowth clearing and preparing the property for winter.', $canonicalUrl),
    ['@type' => 'HowTo', 'name' => 'How RAH Solutions LLC handles a fall yard cleanup', 'step' => array_map(fn($s, $i) => ['@type' => 'HowToStep', 'position' => $i + 1, 'name' => $s[0], 'text' => $s[1]], $steps, array_keys($steps))],
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-fall-yard-cleanup">

<section class="hero hero--photo svc-hero" aria-label="Fall yard cleanup in Edgerton, WI">
  <div class="hero-bg"><?php echo picture('barnyard-cleared-after-cleanup', 'Farmyard between red barns after brush, weeds and debris were cleared', '100vw', ['eager' => true, 'class' => 'hero-img']); ?></div>
  <div class="hero-overlay"></div>
  <span class="grain" aria-hidden="true"></span>
  <div class="container hero-grid hero-grid--form">
    <div class="hero-text">
      <?php echo breadcrumbs([['Home', '/'], ['Services', '/services/'], ['Fall Yard Cleanup', '/services/fall-yard-cleanup/']]); ?>
      <span class="eyebrow">Leaves · Bed cutback · Final mow · Overgrowth</span>
      <h1 class="hero-title">Fall Yard Cleanup in Edgerton, WI</h1>
      <p class="page-answer">RAH Solutions LLC gets yards in Edgerton and nearby towns ready for winter: leaves removed from the lawn and beds, perennials cut back, a final mow, and overgrown areas cleared. Estimates are free and given after an on-site look.</p>
      <div class="hero-actions">
        <button type="button" class="btn btn-accent btn-lg hero-form-open" data-open-estimate>Get a free cleanup estimate</button>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> or call <?php echo e($phone); ?></a>
      </div>
      <p class="last-updated">Last updated: <?php echo date('F Y'); ?></p>
    </div>
    <?php $heroFormId = 'hero-fall-yard-cleanup'; $heroFormService = 'fall-yard-cleanup'; $heroFormHeading = 'Get a free fall cleanup estimate'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
  </div>
</section>

<section class="section svc-intro" aria-labelledby="intro-h2">
  <div class="container svc-layout">
    <div class="svc-body">
      <p class="identity-line"><strong>RAH Solutions LLC</strong> is a licensed and insured, family-owned landscaper based in Edgerton, Wisconsin. Started by Robert Harried in 2023, it serves Rock and Dane County homes and businesses.</p>
      <h2 id="intro-h2">What does a fall yard cleanup from RAH Solutions include?</h2>
      <div class="answer-block">
        <h3>Short answer</h3>
        <p>RAH Solutions LLC removes leaves from the lawn and beds, cuts back perennials, cleans out planting beds, gives the lawn its final mow and clears overgrown areas. The aim is a property that goes under snow clean. Estimates are free.</p>
      </div>
      <p>Fall cleanup is the one yard job with a hard deadline. Whatever is still lying on the lawn when the snow comes stays there until spring, and the grass underneath pays for it. Homeowners looking for fall yard cleanup near me in Edgerton usually face the same thing: more leaves than a weekend can handle and a short stretch of dry days to deal with them.</p>
      <p>RAH Solutions brings its own crew and equipment, and the leaves leave the property with the crew instead of sitting in bags at the curb. For yards with large maples or oaks, the work can be split into two visits.</p>
      <p>Cleanup is also a good point to look at what the yard needs next year. Thin turf under trees can be scheduled for <a href="/services/lawn-restoration/">lawn restoration</a>, tired beds can be noted for <a href="/services/garden-maintenance/">garden maintenance</a>.</p>
    </div>
    <aside class="svc-rail" aria-label="On this page">
      <nav class="svc-toc" aria-label="Page sections">
        <h2>On this page</h2>
        <ol>
          <li><a href="#types-h2">What gets done</a></li>
          <li><a href="#cond-h2">Why leaves matter</a></li>
          <li><a href="#overgrowth-h2">Overgrown property</a></li>
          <li><a href="#steps-h2">How a cleanup works</a></li>
          <li><a href="#gallery-h2">Before and after</a></li>
          <li><a href="#faq-h2">Fall cleanup FAQ</a></li>
        </ol>
      </nav>
      <div class="svc-callcard">
        <strong>Leaves coming down?</strong>
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
      <h2 id="types-h2">Which fall cleanup tasks does RAH Solutions handle?</h2>
      <p>RAH Solutions LLC handles leaves, beds, the last mow and overgrowth for homes and commercial properties around Edgerton.</p>
    </div>
    <div class="type-grid" data-p1-dynamic>
      <article class="type-card reveal-up reveal-delay-1">
        <span class="type-card__icon"><?php echo icon('leaf', 22); ?></span>
        <h3>Leaf removal</h3>
        <p>Leaves are blown and gathered off the lawn, out of beds, and away from fence lines, window wells and corners where they drift, then hauled off the property.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-2">
        <span class="type-card__icon"><?php echo icon('scissors', 22); ?></span>
        <h3>Perennial cutback</h3>
        <p>Spent perennials are cut down once they have died back. Anything you want standing for winter, such as ornamental grasses or seed heads, is left alone.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-3">
        <span class="type-card__icon"><?php echo icon('sun', 22); ?></span>
        <h3>Bed cleanup</h3>
        <p>Dead annuals, weeds and fallen debris are pulled from planting beds, and the edges are tidied so the beds are ready for spring planting and mulch.</p>
      </article>
      <div class="type-card type-card--photo reveal-scale reveal-delay-1">
        <?php echo picture('red-barn-mowed-lawn', 'Freshly mowed lawn in front of a red barn', '(max-width: 560px) 100vw, 33vw'); ?>
      </div>
      <article class="type-card reveal-up reveal-delay-2">
        <span class="type-card__icon"><?php echo icon('tractor', 22); ?></span>
        <h3>Final mow</h3>
        <p>The lawn is mowed one last time once growth has slowed, so the grass does not go into winter long enough to fold over and mat under the snow.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-3">
        <span class="type-card__icon"><?php echo icon('trees', 22); ?></span>
        <h3>Overgrowth clearing</h3>
        <p>Weeds, brush and volunteer growth along buildings, fences and unused corners are cut down and removed, along with the debris that turns up underneath.</p>
      </article>
    </div>
  </div>
</section>

<section class="section svc-conditions texture-grain edge-facet-top" aria-labelledby="cond-h2">
  <span class="grain-layer" aria-hidden="true"></span>
  <div class="container">
    <div class="cond-head reveal-left">
      <span class="eyebrow-label">Before the snow</span>
      <h2 id="cond-h2">Why does a layer of leaves hurt a lawn over winter?</h2>
      <p>A thick, wet mat of leaves blocks light and air and holds moisture against the grass for months. RAH Solutions LLC clears lawns in fall for four practical reasons.</p>
    </div>
    <ul class="cond-list">
      <li class="reveal-up"><span><?php echo icon('layers', 22); ?></span><b>Smothered turf</b><p>Cool-season grasses such as Kentucky bluegrass keep growing late into fall. Grass buried under matted leaves cannot, and it comes out of winter thin or dead in patches.</p></li>
      <li class="reveal-up"><span><?php echo icon('cloud-snow', 22); ?></span><b>Snow mold</b><p>Leaves trapped under snow keep the turf wet, which encourages snow mold. The gray matted circles that show up in spring often trace back to leaves left in fall.</p></li>
      <li class="reveal-up"><span><?php echo icon('droplets', 22); ?></span><b>Wet corners and drains</b><p>Leaves collect in low spots, window wells and along foundations, where they hold water and block drainage.</p></li>
      <li class="reveal-up"><span><?php echo icon('calendar', 22); ?></span><b>A short window</b><p>Snow is possible in southern Wisconsin from November on. Once leaves are snowed under, they stay until spring.</p></li>
    </ul>
  </div>
</section>

<section class="section section--tight" aria-labelledby="overgrowth-h2">
  <div class="container">
    <div class="svc-callout reveal-up">
      <span><?php echo icon('tractor', 26); ?></span>
      <div>
        <h2 id="overgrowth-h2">Can RAH Solutions clean up a property that has been let go?</h2>
        <p>Yes. RAH Solutions clears overgrown yards, lots and farmyards as well as doing routine leaf cleanup. The photos on this page show one of those jobs, and they should be read for what they are: a property cleanup, not leaf removal. A yard between two barns had grown up in weeds and goldenrod and was cleared back to open ground.</p>
        <p>Fall is a practical time for this work. Growth has stopped, foliage is dying back, and the ground is cleared before snow hides it. If the cleared area needs to be leveled or reshaped afterward, that is handled as <a href="/services/excavating-services/">excavating and grading</a>.</p>
      </div>
    </div>
  </div>
</section>

<section class="section svc-steps" aria-labelledby="steps-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">The process</span>
      <h2 id="steps-h2">How does a fall cleanup with RAH Solutions work?</h2>
      <p>RAH Solutions LLC follows the same four steps for a leaf cleanup on a town lot and for clearing a larger property.</p>
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
      <span class="eyebrow-label">Before and after</span>
      <h2 id="gallery-h2">What does a RAH Solutions property cleanup look like?</h2>
      <p>These two RAH Solutions job photos show the same farmyard before and after clearing. They were taken from different spots, and they show an overgrowth cleanup, not leaf removal.</p>
    </div>
    <div class="sp-gallery-grid sp-gallery-grid--two" data-p1-dynamic>
      <figure class="sp-gallery-item reveal-scale"><?php echo picture('barnyard-overgrown-before-cleanup', 'Farmyard overgrown with tall weeds and goldenrod, with an old tarp on the ground, before cleanup', '(max-width: 700px) 100vw, 55vw'); ?><figcaption><b>Before</b> Weeds, goldenrod and old debris between the barns</figcaption></figure>
      <figure class="sp-gallery-item reveal-scale reveal-delay-1"><?php echo picture('barnyard-cleared-after-cleanup', 'The farmyard between red barns after brush, weeds and debris were cleared', '(max-width: 700px) 100vw, 40vw'); ?><figcaption><b>After</b> The same yard cleared to open ground</figcaption></figure>
    </div>
  </div>
</section>

<section class="section svc-faq" aria-labelledby="faq-h2">
  <div class="container faq-wrap">
    <div class="section-head reveal-left">
      <span class="eyebrow-label">FAQ</span>
      <h2 id="faq-h2">What do people ask about fall cleanup in Edgerton?</h2>
      <p>Call <?php echo e($phone); ?> before the leaves are down and RAH Solutions will set up a time to see the yard.</p>
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
      <?php echo serviceCards(relatedServices(['snow-removal', 'garden-maintenance', 'spring-yard-cleanup']), '(max-width: 560px) 100vw, 33vw'); ?>
    </div>
    <div class="town-links">
      <h3>Fall yard cleanup near you</h3>
      <ul>
        <?php foreach (['edgerton-wi', 'janesville-wi', 'evansville-wi', 'whitewater-wi', 'stoughton-wi', 'beloit-wi'] as $tl): $ta = areaBySlug($tl); ?>
        <li><a href="<?php echo areaHref($ta); ?>"><?php echo icon('map-pin', 14); ?> Fall cleanup in <?php echo e($ta['name']); ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<?php $ctaBandId = 'band-fall-yard-cleanup'; $ctaBandHeading = 'Get your yard cleaned up before the snow'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php'; ?>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
