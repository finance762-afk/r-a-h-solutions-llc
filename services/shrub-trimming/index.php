<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$svc             = serviceBySlug('shrub-trimming');
$currentPage     = 'services';
$pageType        = 'service';
$serviceSlug     = 'shrub-trimming';
$pageTitle       = 'Shrub Trimming in Edgerton, WI | RAH Solutions LLC';
$pageDescription = 'Shrub and hedge trimming in Edgerton, WI. RAH Solutions LLC shapes shrubs, renews overgrown ones and times cuts around bloom. Clippings hauled. Free estimates.';
$canonicalUrl    = $siteUrl . '/services/shrub-trimming/';
$pageCss         = ['service'];
$pageStyle       = <<<CSS
/* shrub-trimming: clean white cards with a teal clipped corner rule, bloom-timing callout */
.page-shrub-trimming .type-card { background: var(--color-surface); border: 1px solid var(--color-line); border-top: 3px solid var(--color-primary); box-shadow: var(--shadow); }
.page-shrub-trimming .type-card__icon { background: color-mix(in srgb, var(--color-primary) 14%, var(--color-surface)); color: var(--color-primary); }
.page-shrub-trimming .svc-callout { border-left: 4px solid var(--color-primary); background: color-mix(in srgb, var(--color-aqua) 10%, var(--color-paper)); }
.page-shrub-trimming .svc-callout > span { color: var(--color-primary); }
.page-shrub-trimming .bloom-list { list-style: none; padding: 0; margin: 1rem 0 0; display: grid; gap: .6rem; }
.page-shrub-trimming .bloom-list li { padding-left: .9rem; border-left: 3px solid var(--color-aqua); color: var(--color-ink-2); }
.page-shrub-trimming .bloom-list b { color: var(--color-primary); font-family: var(--font-accent); }
CSS;

$faqs = [
    ['When is the best time to trim shrubs in southern Wisconsin?',
     'It depends on when the shrub blooms. Spring bloomers such as lilac and forsythia are pruned right after they flower. Summer bloomers are pruned in late winter or early spring. Evergreens and hedges are trimmed after their spring flush of growth. Heavy pruning in late summer and fall is avoided.'],
    ['Why did my lilac stop blooming after it was trimmed?',
     'It was probably pruned at the wrong time. Lilacs set next year’s flower buds soon after they finish blooming. Trimming in summer, fall or winter cuts those buds off. Prune a lilac within a few weeks after the flowers fade and it will bloom again the next spring.'],
    ['How often should shrubs be trimmed?',
     'Most flowering shrubs need pruning once a year. Formal hedges that are kept to a tight shape usually need one or two trims in the growing season. Slow-growing evergreens may only need a light touch-up.'],
    ['Can an overgrown shrub be saved, or should it be replaced?',
     'Many can be saved. Multi-stem shrubs such as lilac, dogwood and spirea respond well to renewal pruning over a few years. A shrub that is too large for its spot, or an evergreen that is bare inside, is often better replaced through <a href="/services/landscape-installation/">landscape installation</a>.'],
    ['Do you haul away the clippings?',
     'Yes. Branches and clippings are raked out of the shrubs and beds, loaded and hauled away, and walks and drives are blown off before the crew leaves.'],
    ['Can shrub trimming be done with other yard work?',
     'Yes. It pairs well with a <a href="/services/spring-yard-cleanup/">spring yard cleanup</a> or with <a href="/services/garden-maintenance/">garden maintenance</a> visits, so beds are weeded and edged while the shrubs are trimmed.'],
];

$steps = [
    ['Look at the property', 'Robert walks the yard with you, identifies each shrub and hedge, and asks what size and shape you want.'],
    ['Written estimate', 'You receive a written estimate that lists the shrubs, the type of pruning for each and when it should be done.'],
    ['Trim and prune', 'The crew shapes, thins or renewal-prunes each shrub, removing dead and damaged wood along the way.'],
    ['Clean up and walk the job', 'Clippings are raked out and hauled away, hard surfaces are blown off, and Robert walks the finished work with you.'],
];

$schemaNodes = [
    webPageNode(),
    breadcrumbNode([['Home', '/'], ['Services', '/services/'], ['Shrub Trimming', '/services/shrub-trimming/']]),
    serviceSchemaNode('Shrub Trimming', 'Shrub and hedge trimming, shaping and renewal pruning in Edgerton, WI and nearby Rock and Dane County towns, timed around bloom, with clippings hauled away.', $canonicalUrl),
    ['@type' => 'HowTo', 'name' => 'How RAH Solutions LLC trims shrubs and hedges', 'step' => array_map(fn($s, $i) => ['@type' => 'HowToStep', 'position' => $i + 1, 'name' => $s[0], 'text' => $s[1]], $steps, array_keys($steps))],
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-shrub-trimming">

<section class="hero svc-hero svc-hero--plain" aria-label="Shrub trimming in Edgerton, WI">
  <svg class="floating-facet" viewBox="0 0 120 110" fill="none" stroke="currentColor" stroke-width="1" stroke-linejoin="round" aria-hidden="true"><path d="M34 6H86L112 32 60 104 8 32ZM8 32H112M34 6 44 32 60 6 76 32 86 6M44 32 60 104 76 32"/></svg>
  <span class="grain" aria-hidden="true"></span>
  <div class="container hero-grid hero-grid--form">
    <div class="hero-text">
      <?php echo breadcrumbs([['Home', '/'], ['Services', '/services/'], ['Shrub Trimming', '/services/shrub-trimming/']]); ?>
      <span class="eyebrow">Shaping · Renewal Pruning · Hedges</span>
      <h1 class="hero-title">Shrub Trimming in Edgerton, WI</h1>
      <p class="page-answer">RAH Solutions LLC trims, shapes and prunes shrubs and hedges in Edgerton and nearby towns. Cuts are timed around bloom, overgrown shrubs are brought back in stages, and clippings are hauled away. Estimates are free and given on site.</p>
      <div class="hero-actions">
        <button type="button" class="btn btn-accent btn-lg hero-form-open" data-open-estimate>Get a free trimming estimate</button>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> or call <?php echo e($phone); ?></a>
      </div>
      <p class="last-updated">Last updated: <?php echo date('F Y'); ?></p>
    </div>
    <?php $heroFormId = 'hero-shrub-trimming'; $heroFormService = 'shrub-trimming'; $heroFormHeading = 'Get a free trimming estimate'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
  </div>
</section>

<section class="section svc-intro" aria-labelledby="intro-h2">
  <div class="container svc-layout">
    <div class="svc-body">
      <p class="identity-line"><strong>RAH Solutions LLC</strong> is a licensed and insured, family-owned landscaper based in Edgerton, Wisconsin. Started by Robert Harried in 2023, it serves Rock and Dane County homes and businesses.</p>
      <h2 id="intro-h2">What does shrub trimming from RAH Solutions include?</h2>
      <div class="answer-block">
        <h3>Short answer</h3>
        <p>RAH Solutions LLC trims and prunes deciduous shrubs, evergreen shrubs and hedges. A visit covers shaping to the plant’s natural form or to a formal line, removing dead and crossing branches, renewal pruning of overgrown shrubs, and full cleanup of clippings. Estimates are free and written after an on-site look.</p>
      </div>
      <p>Trimming and pruning are not the same cut. Trimming, or shearing, clips the outside of a shrub to hold a shape. Pruning reaches inside and removes whole branches to control size, let in light and bring on new growth. Most yards need some of each, and the right choice depends on the plant.</p>
      <p>The usual call for shrub trimming near me in Edgerton is about foundation shrubs that now cover the windows, a hedge that has grown wide and thin at the bottom, or a lilac that has become all trunk with flowers out of reach. Each has a fix, and each fix has a right time of year.</p>
      <p>Shrub work fits with other bed care. Many owners pair it with <a href="/services/garden-maintenance/">garden maintenance</a> so beds are weeded while shrubs are trimmed, and finish with fresh mulch from <a href="/services/mulching-services/">mulching services</a>.</p>
    </div>
    <aside class="svc-rail" aria-label="On this page">
      <nav class="svc-toc" aria-label="Page sections">
        <h2>On this page</h2>
        <ol>
          <li><a href="#types-h2">What we trim</a></li>
          <li><a href="#cond-h2">Getting the cut right</a></li>
          <li><a href="#timing-h2">Timing by bloom</a></li>
          <li><a href="#steps-h2">How a visit works</a></li>
          <li><a href="#faq-h2">Trimming FAQ</a></li>
        </ol>
      </nav>
      <div class="svc-callcard">
        <strong>Shrubs covering the windows?</strong>
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
      <span class="eyebrow-label">What we trim</span>
      <h2 id="types-h2">Which shrub and hedge work does RAH Solutions do?</h2>
      <p>RAH Solutions LLC trims and prunes shrubs at homes and businesses around Edgerton, from one hedge to every bed on the property.</p>
    </div>
    <div class="type-grid" data-p1-dynamic>
      <article class="type-card reveal-up reveal-delay-1">
        <span class="type-card__icon"><?php echo icon('scissors', 22); ?></span>
        <h3>Shaping</h3>
        <p>Light trimming that keeps a shrub the size and outline you want without changing its natural form or removing its flower buds.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-2">
        <span class="type-card__icon"><?php echo icon('sprout', 22); ?></span>
        <h3>Renewal pruning</h3>
        <p>About a third of the oldest, thickest stems are cut at the ground each year for three years. The shrub is rebuilt from young wood and stays in bloom.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-3">
        <span class="type-card__icon"><?php echo icon('fence', 22); ?></span>
        <h3>Hedges</h3>
        <p>Hedges are sheared slightly wider at the base than at the top, so sunlight reaches the lower branches and they stay full.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-1">
        <span class="type-card__icon"><?php echo icon('home', 22); ?></span>
        <h3>Overgrown foundation shrubs</h3>
        <p>Shrubs that block windows, crowd walks or rub on siding are reduced in stages and cleared back so air can move along the house.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-2">
        <span class="type-card__icon"><?php echo icon('trees', 22); ?></span>
        <h3>Evergreen shrubs</h3>
        <p>Yews, arborvitae, junipers and boxwood are trimmed within their green growth and tidied after the spring flush.</p>
      </article>
      <article class="type-card reveal-up reveal-delay-3">
        <span class="type-card__icon"><?php echo icon('truck', 22); ?></span>
        <h3>Cleanup and haul-away</h3>
        <p>Clippings are raked out of the shrubs and the beds beneath them, loaded on the trailer and hauled away.</p>
      </article>
    </div>
  </div>
</section>

<section class="section svc-conditions texture-grain edge-facet-top" aria-labelledby="cond-h2">
  <span class="grain-layer" aria-hidden="true"></span>
  <div class="container">
    <div class="cond-head reveal-left">
      <span class="eyebrow-label">Cut for the plant</span>
      <h2 id="cond-h2">What makes the difference between a good trim and a damaging one?</h2>
      <p>The plant, the season and how much comes off decide whether a shrub recovers. RAH Solutions LLC checks four things before cutting.</p>
    </div>
    <ul class="cond-list">
      <li class="reveal-up"><span><?php echo icon('search', 22); ?></span><b>What the shrub is</b><p>Each kind regrows differently. Yews sprout again from old wood. Arborvitae and junipers do not, so a cut into their bare interior leaves a hole that stays.</p></li>
      <li class="reveal-up"><span><?php echo icon('calendar', 22); ?></span><b>When it blooms</b><p>Shrubs that flower in spring carry their buds through winter. Trimming them before bloom removes the flowers for that year.</p></li>
      <li class="reveal-up"><span><?php echo icon('minus', 22); ?></span><b>How much comes off</b><p>Taking a moderate amount in one season and repeating it the next keeps a shrub healthy. Stripping most of the leaves at once sets it back.</p></li>
      <li class="reveal-up"><span><?php echo icon('snowflake', 22); ?></span><b>Winter ahead</b><p>Heavy pruning in late summer or fall pushes soft new growth that does not harden before a zone 5b winter, so major cuts wait for late winter or spring.</p></li>
    </ul>
  </div>
</section>

<section class="section section--tight" aria-labelledby="timing-h2">
  <div class="container">
    <div class="svc-callout reveal-up">
      <span><?php echo icon('calendar-check', 26); ?></span>
      <div>
        <h2 id="timing-h2">When should each kind of shrub be trimmed?</h2>
        <p>RAH Solutions times pruning by when a shrub blooms. Spring bloomers are cut right after they flower, and summer bloomers are cut before growth starts.</p>
        <ul class="bloom-list" data-p1-dynamic>
          <li><b>Spring bloomers:</b> lilac, forsythia and similar shrubs are pruned in the weeks right after the flowers fade.</li>
          <li><b>Summer bloomers:</b> panicle and smooth hydrangeas, summer spirea and other shrubs that flower on new growth are pruned in late winter or early spring.</li>
          <li><b>Evergreens and hedges:</b> trimmed in late spring or early summer once the new growth has extended.</li>
          <li><b>Dead or broken branches:</b> removed whenever they are found.</li>
        </ul>
        <p>Early-season pruning fits with the bed work on the <a href="/blog/spring-yard-cleanup-checklist-wisconsin/">spring yard cleanup checklist</a>.</p>
      </div>
    </div>
  </div>
</section>

<section class="section svc-steps" aria-labelledby="steps-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">The process</span>
      <h2 id="steps-h2">How does a shrub trimming visit with RAH Solutions work?</h2>
      <p>RAH Solutions LLC follows the same four steps for a single hedge and for a full property.</p>
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
      <h2 id="faq-h2">What do people ask about shrub trimming in Edgerton?</h2>
      <p>Describe the shrubs on a call to <?php echo e($phone); ?> and Robert will tell you what to expect.</p>
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
      <?php echo serviceCards(relatedServices(['garden-maintenance', 'mulching-services', 'spring-yard-cleanup']), '(max-width: 560px) 100vw, 33vw'); ?>
    </div>
    <div class="town-links">
      <h3>Shrub trimming near you</h3>
      <ul>
        <?php foreach (['edgerton-wi', 'janesville-wi', 'stoughton-wi', 'mcfarland-wi', 'evansville-wi', 'brodhead-wi'] as $tl): $ta = areaBySlug($tl); ?>
        <li><a href="<?php echo areaHref($ta); ?>"><?php echo icon('map-pin', 14); ?> Shrub trimming in <?php echo e($ta['name']); ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<?php $ctaBandId = 'band-shrub-trimming'; $ctaBandHeading = 'Get a written price for shrub and hedge trimming'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php'; ?>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
