<?php
/*
 * Sources (checked 5 Oct 2026):
 *  - UW–Madison Extension, "Aerating & Overseeding Lawns": https://hort.extension.wisc.edu/aerating-overseeding-lawns/
 *  - UW–Madison Extension, "Timing Questions for Fall Lawn Care": https://hort.extension.wisc.edu/timing-questions-for-fall-lawn-care/
 *  - UW–Madison Extension, "Wisconsin Lawn Care Calendar": https://hort.extension.wisc.edu/articles/wisconsin-lawn-care-calender/
 *  - UW–Madison Extension A3710, "Lawn aeration and topdressing": https://hort.extension.wisc.edu/files/2023/12/A3710.pdf
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';
?>
<?php
$post            = postBySlug('when-to-aerate-and-overseed-southern-wisconsin');
$currentPage     = 'blog';
$pageType        = 'blog';
$pageTitle       = 'When to Aerate and Overseed in Southern Wisconsin';
$pageDescription = 'Aerate in September and overseed from late August to mid-September in southern Wisconsin. Why the window matters, how to prepare, and what to do if you miss it.';
$canonicalUrl    = $siteUrl . '/blog/when-to-aerate-and-overseed-southern-wisconsin/';
$ogType          = 'article';
$ogImage         = $post['image'] . '.jpg';
$pageCss         = ['post'];
$pageStyle       = <<<CSS
/* aeration guide: month strip for the seeding calendar */
.page-aerate .month-strip { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: .5rem; list-style: none; padding: 0; margin: 1.2rem 0 1.6rem; }
.page-aerate .month-strip li { padding: .8rem .9rem; border-radius: var(--radius); background: var(--color-mist); border: 1px solid var(--color-line); font-size: .9rem; margin: 0; }
.page-aerate .month-strip li.is-best { background: color-mix(in srgb, var(--color-accent) 24%, var(--color-surface)); border-color: var(--color-accent); }
.page-aerate .month-strip b { display: block; font-family: var(--font-accent); letter-spacing: .1em; text-transform: uppercase; color: var(--color-secondary); }
@media (max-width: 640px) { .page-aerate .month-strip { grid-template-columns: 1fr 1fr; } }
CSS;

$faqs = [
    ['Can I overseed in spring instead?',
     'You can, but it is the third-best choice in Wisconsin. Spring seedlings compete with crabgrass and other summer weeds and then face July heat with shallow roots. If a lawn is bare in spring, seed it, water it well, and plan a follow-up overseeding in late summer.'],
    ['Do I have to aerate before overseeding?',
     'No, but it helps on compacted soil. Core aeration opens the surface so seed, water and air reach the soil. On a thin lawn with decent soil, slit-seeding or raking seed into loosened bare spots also works. Seed scattered on top of thatch or hard ground mostly fails.'],
    ['How late is too late to seed in Edgerton?',
     'UW–Madison Extension suggests a cutoff of about September 10 to 15 for most of Wisconsin, so seedlings can establish before hard freezes. After that, sod is the dependable option. Dormant seeding in late fall is a fallback with variable results.'],
    ['How often should a lawn be aerated?',
     'It depends on the soil and the traffic. Lawns on compacted fill, heavy soil or with a lot of foot traffic benefit most, sometimes every year. A lawn on good soil that is not compacted may not need it at all. A screwdriver that will not push into moist soil is a sign of compaction.'],
    ['Does RAH Solutions aerate and overseed lawns?',
     'RAH Solutions LLC repairs thin and damaged lawns around Edgerton through its <a href="/services/lawn-restoration/">lawn restoration</a> service, which covers overseeding and soil improvement. Call (608) 501-5123 in midsummer to get on the late-August schedule.'],
];
$toc = [
    ['short-answer', 'The short answer'],
    ['why-fall', 'Why late summer wins'],
    ['calendar', 'Month-by-month calendar'],
    ['how', 'How to do it right'],
    ['missed', 'If you missed the window'],
    ['faq', 'Questions and answers'],
];

$schemaNodes = [
    webPageNode(),
    blogPostingNode($post, ['aerate lawn Wisconsin', 'overseeding southern Wisconsin', 'when to seed lawn Edgerton WI', 'lawn restoration Rock County']),
    breadcrumbNode([['Home', '/'], ['Blog', '/blog/'], [$post['title'], '/blog/' . $post['slug'] . '/']]),
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-aerate">

<section class="hero hero--interior post-hero texture-grain" aria-label="Article header">
  <span class="grain-layer" aria-hidden="true"></span>
  <div class="container">
    <?php echo breadcrumbs([['Home', '/'], ['Blog', '/blog/'], [$post['title'], '/blog/' . $post['slug'] . '/']]); ?>
    <a class="post-cat" href="/blog/"><?php echo e($post['category']); ?></a>
    <h1><?php echo e($post['title']); ?></h1>
    <div class="post-meta">
      <span><?php echo icon('calendar', 16); ?> <?php echo e($post['date']); ?></span>
      <span><?php echo icon('clock', 16); ?> <?php echo e($post['readtime']); ?></span>
      <span><?php echo icon('users', 16); ?> By the RAH Solutions LLC team</span>
    </div>
  </div>
</section>

<div class="container post-feature">
  <figure><?php echo picture($post['image'], $post['alt'], '(max-width: 1200px) 100vw, 1180px'); ?></figure>
</div>

<div class="post-wrap">
  <div class="container post-layout">
    <article class="post-body">
      <p class="post-lede" id="short-answer"><strong>In southern Wisconsin, aerate in September and overseed from late August through about mid-September.</strong> That is when Kentucky bluegrass, fescue and ryegrass grow roots fastest, weeds are fading and the soil is still warm. RAH Solutions LLC, a family-owned landscaper in Edgerton, schedules lawn repair around this window every year.</p>

      <p>Most lawns in Rock and Dane counties are cool-season grass. They surge in spring, stall in July heat, and surge again when nights cool off. Aeration and overseeding both work by asking the grass to grow, so they belong in one of those growth periods. Of the two, late summer into early fall is the better one, and UW–Madison Extension’s lawn calendar says the same.</p>

      <h2 id="why-fall">Why is late summer better than spring for seeding a Wisconsin lawn?</h2>
      <p>Late summer gives new grass warm soil, cooler air and less weed competition, which spring cannot. RAH Solutions plans overseeding for late August for three practical reasons.</p>
      <ul>
        <li><strong>Warm soil, cool nights.</strong> Seed sprouts faster in soil that has been warmed all summer, and seedlings are not stressed by cooler September air.</li>
        <li><strong>Weeds are winding down.</strong> Crabgrass and most annual weeds germinate in spring and die with frost. Fall seedlings have the ground to themselves.</li>
        <li><strong>Two growing periods before summer.</strong> Grass seeded in late August grows that fall and again the next spring before it ever sees a hot, dry July.</li>
      </ul>
      <p>Spring seeding flips all three. The soil is cold, crabgrass is about to sprout, and the young lawn meets summer with shallow roots.</p>

      <h2 id="calendar">What is the month-by-month calendar for aeration and overseeding?</h2>
      <p>For Edgerton and the rest of southern Wisconsin, prepare in mid-August, seed by mid-September and aerate any time in September. UW–Madison Extension gives September 10 to 15 as the usual seeding cutoff for most of the state.</p>
      <ul class="month-strip">
        <li><b>Mid-August</b>Mow, deal with weeds, plan soil work and book help.</li>
        <li class="is-best"><b>Late Aug – mid-Sept</b>Best window to overseed or seed bare areas.</li>
        <li class="is-best"><b>September</b>Best month to core aerate. October also works.</li>
        <li><b>Late fall</b>Dormant seeding of bare spots only; results vary.</li>
      </ul>
      <p>A lawn that needs both gets them in order: aerate first, topdress if the soil needs it, then seed, so the seed falls into loosened soil instead of sitting on top.</p>

      <h2 id="how">How do you aerate and overseed so the seed actually takes?</h2>
      <p>Seed only grows where it touches soil and stays moist, so every step is about soil contact and water. This is the sequence RAH Solutions recommends for a thin lawn.</p>
      <ol>
        <li><strong>Mow a little lower than usual</strong> and bag the clippings so seed can reach the ground.</li>
        <li><strong>Core aerate when the soil is moist,</strong> not bone dry and not muddy. Pull plugs and leave them to break down.</li>
        <li><strong>Spread seed that matches the lawn.</strong> A bluegrass and fescue blend suits most sunny Wisconsin lawns. Shady areas need a fine fescue mix.</li>
        <li><strong>Water lightly and often</strong> until the seed is up, then less often and deeper. Letting the surface dry out in the first weeks is the most common reason overseeding fails.</li>
        <li><strong>Keep mowing.</strong> Mow at about 3 inches once the new grass is tall enough, and never take off more than a third of the blade.</li>
      </ol>
      <div class="post-callout"><span><?php echo icon('info', 20); ?></span><p>Tip: on newer lots where the lawn was seeded over compacted fill, aeration alone may not be enough. Low or bare areas that hold water usually need <a href="/services/excavating-services/">regrading</a> or added topsoil before any seed goes down.</p></div>

      <h2 id="missed">What should you do if you missed the September window?</h2>
      <p>If mid-September has passed, stop seeding and switch plans: aerate in October if the lawn needs it, then lay sod or wait for next year’s window, with dormant seeding as a fallback. RAH Solutions gives the same advice to customers who call in October.</p>
      <p>Dormant seeding means spreading seed after the soil is too cold for it to sprout, so it sits through winter and comes up in spring. UW–Madison Extension’s lawn calendar calls the results variable and does not suggest it for most lawns, so treat it as a way to touch up bare spots, not as a substitute for late-summer seeding.</p>
      <p>Sod is the other route. It can be laid well into fall as long as it can be watered, and it gives a finished lawn right away. The comparison of <a href="/blog/sod-vs-seed-new-lawn-wisconsin/">sod and seed for a new Wisconsin lawn</a> covers when each makes sense, and <a href="/services/sod-installation/">sod installation</a> explains how the crew prepares the ground.</p>
      <p>Fall is also when leaves start to matter. A matted layer of leaves left on new grass over winter can smother it, so pair a fall seeding with a <a href="/services/fall-yard-cleanup/">fall yard cleanup</a>. Come spring, the <a href="/blog/spring-yard-cleanup-checklist-wisconsin/">spring yard cleanup checklist</a> picks up where this leaves off.</p>

      <section class="post-faq" aria-labelledby="faq">
        <h2 id="faq">Aeration and overseeding questions</h2>
        <?php echo faqList($faqs, 1); ?>
      </section>
      <p class="post-sources">Sources: UW–Madison Extension, <a href="https://hort.extension.wisc.edu/aerating-overseeding-lawns/" rel="noopener" target="_blank">Aerating &amp; Overseeding Lawns</a>, <a href="https://hort.extension.wisc.edu/timing-questions-for-fall-lawn-care/" rel="noopener" target="_blank">Timing Questions for Fall Lawn Care</a> and the <a href="https://hort.extension.wisc.edu/articles/wisconsin-lawn-care-calender/" rel="noopener" target="_blank">Wisconsin Lawn Care Calendar</a>.</p>
    </article>

    <aside class="post-rail" aria-label="Article tools">
      <nav class="post-toc" aria-label="Table of contents">
        <h2>In this article</h2>
        <ol><?php foreach ($toc as $t): ?><li><a href="#<?php echo $t[0]; ?>"><?php echo e($t[1]); ?></a></li><?php endforeach; ?></ol>
      </nav>
      <div class="post-cta">
        <strong>Thin or patchy lawn?</strong>
        <a class="btn btn-accent" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> <?php echo e($phone); ?></a>
        <button type="button" class="btn btn-outline-white" data-open-estimate>Request an estimate</button>
      </div>
    </aside>
  </div>
</div>

<?php $ctaBandId = 'band-post-aerate'; $ctaBandHeading = 'Get your lawn on the late-summer schedule'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php'; ?>

<section class="section post-related" aria-labelledby="related-h2">
  <div class="container">
    <h2 id="related-h2" class="sr-only">Related services and articles</h2>
    <h3>Related services</h3>
    <div class="related-svc">
      <a href="/services/lawn-restoration/"><?php echo icon('sprout', 20); ?> Lawn restoration</a>
      <a href="/services/sod-installation/"><?php echo icon('layers', 20); ?> Sod installation</a>
      <a href="/services/lawn-maintenance/"><?php echo icon('leaf', 20); ?> Lawn maintenance</a>
      <a href="<?php echo areaHref(areaBySlug('edgerton-wi')); ?>"><?php echo icon('map-pin', 20); ?> Edgerton service area</a>
      <a href="/contact/"><?php echo icon('mail', 20); ?> Contact RAH Solutions</a>
    </div>
    <h3>Related articles</h3>
    <div class="blog-grid" data-p1-dynamic>
      <?php foreach (relatedPosts($post['slug'], 3) as $i => $rp) echo blogCard($rp, $i); ?>
    </div>
  </div>
</section>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
