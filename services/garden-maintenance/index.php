<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$svc             = serviceBySlug('garden-maintenance');
$currentPage     = 'services';
$pageType        = 'service';
$serviceSlug     = 'garden-maintenance';
$pageTitle       = 'Garden Maintenance in Edgerton, WI | RAH Solutions LLC';
$pageDescription = 'Garden bed maintenance in Edgerton, WI: weeding, deadheading, perennial cutback, dividing and edging on a seasonal schedule. RAH Solutions LLC, free estimates.';
$canonicalUrl    = $siteUrl . '/services/garden-maintenance/';
$heroPreload     = heroPreload('perennial-bed-edging-layout', '100vw');
$ogImage         = 'perennial-bed-edging-layout.jpg';
$pageCss         = ['service'];
$pageStyle       = <<<CSS
/* garden-maintenance: light mist cards with round leaf-green icons, calendar-style seasonal callout */
.page-garden-maintenance .svc-hero .hero-bg img { object-position: 40% 45%; }
.page-garden-maintenance .type-card { background: color-mix(in srgb, var(--color-mist) 60%, var(--color-surface)); border-radius: var(--radius-lg); }
.page-garden-maintenance .type-card__icon { background: var(--color-accent); color: var(--color-ink); border-radius: 50%; }
.page-garden-maintenance .svc-callout { border-top: 4px solid var(--color-accent); background: var(--color-surface); box-shadow: var(--shadow); }
.page-garden-maintenance .svc-callout > span { color: var(--color-secondary); }
.page-garden-maintenance .season-list { list-style: none; padding: 0; margin: 1rem 0 0; display: grid; gap: .6rem; }
.page-garden-maintenance .season-list li { padding-left: .9rem; border-left: 3px solid var(--color-accent); color: var(--color-ink-2); }
.page-garden-maintenance .season-list b { color: var(--color-secondary); font-family: var(--font-accent); }
CSS;

$faqs = [
    ['How often do garden beds need maintenance?',
     'It depends on the bed and on how tidy you want it. Beds with many perennials and thin mulch need attention every few weeks in the growing season. Shrub beds with a good mulch layer can go longer. RAH Solutions sets the schedule with you during the estimate.'],
    ['Should perennials be cut back in fall or in spring?',
     'Either works for most plants. Fall cutback leaves beds clean for winter and removes diseased foliage. Leaving sturdy stems and seed heads until spring gives winter interest and catches snow over the crowns. Many owners do some of each. See <a href="/services/fall-yard-cleanup/">fall yard cleanup</a> for the fall visit.'],
    ['When should perennials be divided?',
     'Spring and early fall, when the weather is cool. A common rule is to divide spring bloomers in early fall and late-summer or fall bloomers in spring. A clump with a dead center or fewer flowers than it used to have is ready.'],
    ['Do you pull weeds by hand or spray them?',
     'Weeds in planted beds are pulled or dug by hand so the roots come out and nearby plants are not harmed. If you want a specific approach for a problem area, tell Robert during the estimate.'],
    ['Will fresh mulch reduce the weeding?',
     'Yes. A layer 2 to 4 inches deep blocks light from weed seeds, so far fewer come up. It works best right after a thorough weeding. The <a href="/services/mulching-services/">mulching page</a> covers depth and materials.'],
    ['Can garden maintenance be combined with mowing?',
     'Yes. Beds and lawn can be handled by the same crew on one schedule, so the edges between them stay sharp. See <a href="/services/lawn-maintenance/">lawn maintenance</a> for mowing, trimming and edging.'],
];

$steps = [
    ['Look at the property', 'Robert walks the beds with you, notes what is planted and what is a weed, and asks how you want the beds to look.'],
    ['Written estimate', 'You receive a written estimate that lists the work for each visit and how often visits are planned.'],
    ['Do the bed work', 'The crew weeds, deadheads, cuts back, divides and edges according to the season and the plan.'],
    ['Clean up and review', 'Debris is hauled away, walks are blown off, and anything that needs your decision is pointed out before the crew leaves.'],
];

$schemaNodes = [
    webPageNode(),
    breadcrumbNode([['Home', '/'], ['Services', '/services/'], ['Garden Maintenance', '/services/garden-maintenance/']]),
    serviceSchemaNode('Garden Maintenance', 'Recurring planting bed care in Edgerton, WI and nearby Rock and Dane County towns: weeding, deadheading, perennial cutback, dividing, edging and seasonal upkeep.', $canonicalUrl),
    ['@type' => 'HowTo', 'name' => 'How RAH Solutions LLC maintains garden beds', 'step' => array_map(fn($s, $i) => ['@type' => 'HowToStep', 'position' => $i + 1, 'name' => $s[0], 'text' => $s[1]], $steps, array_keys($steps))],
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-garden-maintenance">

<section class="hero hero--photo svc-hero" aria-label="Garden maintenance in Edgerton, WI">
  <div class="hero-bg"><?php echo picture('perennial-bed-edging-layout', 'Perennial bed with daylilies and shrubs on a slope, with edging laid out along the lawn', '100vw', ['eager' => true, 'class' => 'hero-img']); ?></div>
  <div class="hero-overlay"></div>
  <span class="grain" aria-hidden="true"></span>
  <div class="container hero-grid hero-grid--form">
    <div class="hero-text">
      <?php echo breadcrumbs([['Home', '/'], ['Services', '/services/'], ['Garden Maintenance', '/services/garden-maintenance/']]); ?>
      <span class="eyebrow">Weeding · Cutback · Dividing · Edging</span>
      <h1 class="hero-title">Garden Maintenance in Edgerton, WI</h1>
      <p class="page-answer">RAH Solutions LLC keeps planting beds in shape through the season in Edgerton and nearby towns: weeding, deadheading, cutting back and dividing perennials, and keeping edges clean. Estimates are free and given on site.</p>
      <div class="hero-actions">
        <button type="button" class="btn btn-accent btn-lg hero-form-open" data-open-estimate>Get a free garden care estimate</button>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> or call <?php echo e($phone); ?></a>
      </div>
      <p class="last-updated">Last updated: <?php echo date('F Y'); ?></p>
    </div>
    <?php $heroFormId = 'hero-garden-maintenance'; $heroFormService = 'garden-maintenance'; $heroFormHeading = 'Get a free garden care estimate'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
  </div>
</section>

<section class="section svc-intro" aria-labelledby="intro-h2">
  <div class="container svc-layout">
    <div class="svc-body">
      <p class="identity-line"><strong>RAH Solutions LLC</strong> is a licensed and insured, family-owned landscaper based in Edgerton, Wisconsin. Started by Robert Harried in 2023, it serves Rock and Dane County homes and businesses.</p>
      <h2 id="intro-h2">What does garden maintenance from RAH Solutions cover?</h2>
      <div class="answer-block">
        <h3>Short answer</h3>
        <p>RAH Solutions LLC looks after planting beds that are already in the ground. Visits cover weeding, deadheading spent flowers, cutting back and dividing perennials, light pruning, and re-cutting bed edges, with the work changing by season. It can be set up as recurring visits or a single catch-up. Estimates are free.</p>
      </div>
      <p>A planting bed is never finished. Perennials spread, weeds seed in, edges creep, and a bed that looked sharp in May can be hard to recognize by August. Most people who search for garden maintenance near me in Edgerton like their beds and do not have the hours, or the knees, to keep up with them.</p>
      <p>Timing is what makes bed care work. A weed pulled before it flowers is one weed. The same weed pulled after it drops seed is next year’s problem across the whole bed. Regular visits through the growing season take less total work than one large rescue in late summer.</p>
      <p>This page is about ongoing care. If a bed needs to be rebuilt or replanted, see <a href="/services/landscape-installation/">landscape installation</a>. If the shrubs in it have outgrown their space, <a href="/services/shrub-trimming/">shrub trimming</a> covers shaping and renewal pruning.</p>
    </div>
    <aside class="svc-rail" aria-label="On this page">
      <nav class="svc-toc" aria-label="Page sections">
        <h2>On this page</h2>
        <ol>
          <li><a href="#types-h2">What a visit covers</a></li>
          <li><a href="#cond-h2">Why beds get away</a></li>
          <li><a href="#season-h2">Seasonal schedule</a></li>
          <li><a href="#steps-h2">How it works</a></li>
          <li><a href="#faq-h2">Garden care FAQ</a></li>
        </ol>
      </nav>
      <div class="svc-callcard">
        <strong>Beds getting ahead of you?</strong>
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
      <h2 id="types-h2">Which garden tasks does RAH Solutions handle?</h2>
      <p>RAH Solutions LLC handles the recurring bed work around Edgerton that keeps a planting healthy and easy to look at.</p>
    </div>
    <div class="type-grid" data-p1-dynamic>
      <article class="type-card reveal-up reveal-delay-1">
        <span class="type-card__icon"><?php echo icon('leaf', 22); ?></span>
        <h3>Weeding</h3>
        <p>Weeds are pulled or dug with their roots, including the tree seedlings and creeping grass that hide among perennials.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-2">
        <span class="type-card__icon"><?php echo icon('sun', 22); ?></span>
        <h3>Deadheading</h3>
        <p>Spent flowers are removed so plants look tidy and put energy into roots and new buds. On many perennials it also extends the bloom.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-3">
        <span class="type-card__icon"><?php echo icon('scissors', 22); ?></span>
        <h3>Cutting back perennials</h3>
        <p>Daylilies, hostas, grasses and other perennials are cut back once the foliage has died down, or in early spring before new growth starts.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-1">
        <span class="type-card__icon"><?php echo icon('sprout', 22); ?></span>
        <h3>Dividing and moving</h3>
        <p>Crowded clumps are lifted, split and replanted. The extra divisions can fill gaps elsewhere in the yard without buying new plants.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-2">
        <span class="type-card__icon"><?php echo icon('ruler', 22); ?></span>
        <h3>Edging</h3>
        <p>Bed edges are re-cut so lawn grass does not creep in. The bed in the photo at the top of this page was about to get permanent edging.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-3">
        <span class="type-card__icon"><?php echo icon('wind', 22); ?></span>
        <h3>Seasonal cleanup</h3>
        <p>Leaves, fallen sticks and dead annuals are cleared from beds in spring and fall, and the debris is hauled away.</p>
      </article>
    </div>
  </div>
</section>

<section class="section svc-conditions texture-grain edge-facet-top" aria-labelledby="cond-h2">
  <span class="grain-layer" aria-hidden="true"></span>
  <div class="container">
    <div class="cond-head reveal-left">
      <span class="eyebrow-label">Rock and Dane County beds</span>
      <h2 id="cond-h2">Why do garden beds in southern Wisconsin get out of hand?</h2>
      <p>Beds get away from their owners because growth here comes in a rush and weeds use every gap. RAH Solutions LLC plans visits around four local pressures.</p>
    </div>
    <ul class="cond-list">
      <li class="reveal-up"><span><?php echo icon('clock', 22); ?></span><b>A short, fast season</b><p>In zone 5b most growth is packed into late spring and early summer. A bed can go from neat to overgrown between two visits if they are spaced too far apart.</p></li>
      <li class="reveal-up"><span><?php echo icon('trees', 22); ?></span><b>Lawn creeping in</b><p>Kentucky bluegrass, a common lawn grass here, spreads by underground stems. Without a maintained edge it moves into a bed every year.</p></li>
      <li class="reveal-up"><span><?php echo icon('droplets', 22); ?></span><b>Soil that stays wet</b><p>Silt loam over clay holds water. Crowded, damp beds have poor air movement, so thinning and dividing help keep foliage healthy.</p></li>
      <li class="reveal-up"><span><?php echo icon('snowflake', 22); ?></span><b>Freeze and thaw</b><p>Winter can push shallow-rooted perennials up out of the soil. A spring visit resets them and tops up thin mulch.</p></li>
    </ul>
  </div>
</section>

<section class="section section--tight" aria-labelledby="season-h2">
  <div class="container">
    <div class="svc-callout reveal-up">
      <span><?php echo icon('calendar-check', 26); ?></span>
      <div>
        <h2 id="season-h2">What does a seasonal garden maintenance schedule look like?</h2>
        <p>RAH Solutions plans bed care in four parts that follow the southern Wisconsin growing season. The exact weeks shift with the weather each year.</p>
        <ul class="season-list" data-p1-dynamic>
          <li><b>Spring:</b> clear winter debris, cut back what was left standing, edge, divide fall bloomers, and top up mulch. The <a href="/blog/spring-yard-cleanup-checklist-wisconsin/">spring cleanup checklist</a> lists the full order.</li>
          <li><b>Early summer:</b> weed before weeds set seed, deadhead spring flowers, and stake or thin plants that flop.</li>
          <li><b>Late summer:</b> keep weeding, deadhead, trim back tired foliage, and note which clumps need dividing.</li>
          <li><b>Fall:</b> divide spring bloomers, cut back perennials, remove leaves from beds, and tidy edges before the ground freezes.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="section svc-steps" aria-labelledby="steps-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">The process</span>
      <h2 id="steps-h2">How does garden maintenance with RAH Solutions work?</h2>
      <p>RAH Solutions LLC follows the same four steps for a one-time catch-up and for a season of visits.</p>
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
      <h2 id="faq-h2">What do people ask about garden maintenance in Edgerton?</h2>
      <p>Describe your beds on a call to <?php echo e($phone); ?> and Robert will tell you what to expect.</p>
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
      <?php echo serviceCards(relatedServices(['mulching-services', 'fall-yard-cleanup', 'shrub-trimming']), '(max-width: 560px) 100vw, 33vw'); ?>
    </div>
    <div class="town-links">
      <h3>Garden maintenance near you</h3>
      <ul>
        <?php foreach (['edgerton-wi', 'stoughton-wi', 'milton-wi', 'madison-wi', 'oregon-wi', 'janesville-wi'] as $tl): $ta = areaBySlug($tl); ?>
        <li><a href="<?php echo areaHref($ta); ?>"><?php echo icon('map-pin', 14); ?> Garden care in <?php echo e($ta['name']); ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<?php $ctaBandId = 'band-garden-maintenance'; $ctaBandHeading = 'Get a written price for garden bed care'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php'; ?>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
