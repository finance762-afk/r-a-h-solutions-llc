<?php
/*
 * Sources (checked 5 Oct 2026):
 *  - UW–Madison Extension, "Wisconsin Lawn Care Calendar": https://hort.extension.wisc.edu/articles/wisconsin-lawn-care-calender/
 *  - UW–Madison Extension, "Summer Lawn Care Strategies": https://hort.extension.wisc.edu/summer-lawn-care-strategies/
 *  - UW–Madison Extension, "Timing Questions for Fall Lawn Care": https://hort.extension.wisc.edu/timing-questions-for-fall-lawn-care/
 *  - NRMCA Concrete in Practice CIP 2, "Scaling Concrete Surfaces" (sealer timing, first-winter deicer advice): https://www.concreteanswers.org/CIPs/CIP2.htm
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';
?>
<?php
$post            = postBySlug('lawn-care-calendar-southern-wisconsin');
$currentPage     = 'blog';
$pageType        = 'blog';
$pageTitle       = 'Month-by-Month Lawn Care Calendar for Southern Wisconsin';
$pageDescription = 'A March-to-November lawn care calendar for Rock and Dane counties: mowing, watering, seeding, aeration and cleanup, from a landscaper in Edgerton, WI.';
$canonicalUrl    = $siteUrl . '/blog/lawn-care-calendar-southern-wisconsin/';
$ogType          = 'article';
$ogImage         = $post['image'] . '.jpg';
$pageCss         = ['post'];
$pageStyle       = <<<CSS
/* lawn calendar pillar: month column and the key late-summer rows */
.page-calendar .post-table tbody th { white-space: nowrap; font-family: var(--font-accent); letter-spacing: .08em; text-transform: uppercase; color: var(--color-secondary); }
.page-calendar .post-table tbody tr.is-key th,
.page-calendar .post-table tbody tr.is-key td { background: color-mix(in srgb, var(--color-accent) 20%, var(--color-surface)); }
.page-calendar .post-table tbody tr.is-key th { border-left: 4px solid var(--color-accent); }
.page-calendar .post-table td { vertical-align: top; }
.page-calendar .table-note { font-size: .88rem; color: var(--color-muted); margin-top: -.4rem; }
@media (max-width: 640px) { .page-calendar .post-table tbody th { white-space: normal; } }
CSS;

$faqs = [
    ['When should I start mowing in southern Wisconsin?',
     'Start when the grass is actively growing and the ground is firm enough to carry a mower without leaving ruts. That depends on the spring, not on a date. UW–Madison Extension’s advice is not to cut the first mowing excessively short and to mow at about 3 inches all season.'],
    ['Do I need crabgrass preventer every spring?',
     'No. UW–Madison Extension says there is no need for a preemergence herbicide if crabgrass has not been a problem in the lawn before. Where it has, the product goes down as soil temperatures near 60 degrees for several days in a row, and it should not be used where you plan to seed that spring unless the label allows it.'],
    ['Should I water or let the lawn go dormant in summer?',
     'Either works, but pick one before dry weather sets in. A lawn kept green needs about one inch of water a week from rain and irrigation. A lawn allowed to go brown should be left dormant and kept free of heavy use, with a small amount of water every two weeks or so in a long drought.'],
    ['When is the last mow of the year?',
     'Keep mowing until the grass stops growing, which in Rock and Dane counties is usually well into fall. UW–Madison Extension warns against letting a lawn go into winter excessively tall, because long matted grass is ideal cover for voles.'],
    ['Does RAH Solutions handle lawn care through the whole season?',
     'Yes. RAH Solutions LLC of Edgerton offers <a href="/services/lawn-maintenance/">lawn maintenance</a>, spring and fall cleanups, lawn restoration and snow removal for homes and businesses. Call (608) 501-5123 for a free on-site estimate.'],
];
$toc = [
    ['short-answer', 'The short answer'],
    ['calendar', 'The calendar at a glance'],
    ['spring', 'March and April'],
    ['mowing', 'Mowing: May and June'],
    ['summer', 'Summer watering'],
    ['late-summer', 'Late August to mid-September'],
    ['fall', 'October and November'],
    ['winter', 'Winter'],
    ['faq', 'Questions and answers'],
];

$schemaNodes = [
    webPageNode(),
    blogPostingNode($post, ['lawn care calendar Wisconsin', 'southern Wisconsin lawn care schedule', 'when to mow lawn Edgerton WI', 'lawn maintenance Rock County']),
    breadcrumbNode([['Home', '/'], ['Blog', '/blog/'], [$post['title'], '/blog/' . $post['slug'] . '/']]),
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-calendar">

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
      <p class="post-lede" id="short-answer"><strong>A southern Wisconsin lawn needs cleanup in spring, steady mowing at about 3 inches from spring to fall, a watering decision in summer, and its seeding, feeding and aeration in late August and September.</strong> RAH Solutions LLC, a family-owned landscaper in Edgerton, plans its lawn work around that rhythm.</p>

      <p>Lawns in Rock and Dane counties are cool-season grass: Kentucky bluegrass, fine and tall fescue, and perennial ryegrass. They grow hard in spring, slow down in July heat and grow hard again when nights cool. This calendar follows UW–Madison Extension’s Wisconsin Lawn Care Calendar. As that guide says, weather shifts the dates from year to year, and not every lawn needs every step.</p>

      <h2 id="calendar">What does a full lawn care year look like in southern Wisconsin?</h2>
      <p>The year runs from raking in March to a last mow and leaf cleanup in November, with the heaviest lawn work in early fall. RAH Solutions uses the table below as a planning guide for lawns, beds and hard surfaces.</p>
      <div class="post-table-wrap">
        <table class="post-table">
          <thead>
            <tr><th scope="col">Month</th><th scope="col">Lawn</th><th scope="col">Beds and hardscape</th></tr>
          </thead>
          <tbody>
            <tr><th scope="row">March</th><td>Wait for snow to melt and the ground to dry. Rake up leaves and winter debris. Check for snow mold and vole trails.</td><td>Look over concrete steps and walks for winter damage. Pick up sticks and plow gravel.</td></tr>
            <tr><th scope="row">April</th><td>First mow once the grass is growing, not cut short. Crabgrass preventer only where crabgrass has been a problem. Repair seeding from late April.</td><td>Spring cleanup: cut back perennials, clear beds, re-cut bed edges.</td></tr>
            <tr><th scope="row">May</th><td>Mow regularly at about 3 inches. If you fertilize in spring, wait until at least the second mowing. Finish spring seeding in early May.</td><td>Mulch beds 2 to 4 inches deep. Plant. Start weeding.</td></tr>
            <tr><th scope="row">June</th><td>Raise the mower to its highest setting before the heat. Decide whether to water all summer or let the lawn go dormant.</td><td>Prune spring-flowering shrubs right after they bloom.</td></tr>
            <tr><th scope="row">July</th><td>Mow only as growth requires. Water about one inch a week, or leave a dormant lawn alone. No seeding or dethatching.</td><td>Keep beds weeded. Water new plantings.</td></tr>
            <tr class="is-key"><th scope="row">August</th><td>Scout brown patches for grubs. Late in the month, prepare thin areas and begin seeding or sodding.</td><td>Plan fall projects. Late summer suits sealing exterior concrete.</td></tr>
            <tr class="is-key"><th scope="row">September</th><td>Finish seeding by about September 10 to 15. Fertilize in the first half of the month. Core aerate.</td><td>Good planting weather for trees, shrubs and perennials.</td></tr>
            <tr><th scope="row">October</th><td>Keep mowing. Aerate if not done yet. Spot treat dandelions and other broadleaf weeds. Keep leaves from matting.</td><td>Fall cleanup: leaves out of beds, bed preparation.</td></tr>
            <tr><th scope="row">November</th><td>Last mow when growth stops. Leaves and debris off before snow. Winterize the mower.</td><td>Set up the snow account. Mark drive and walk edges.</td></tr>
          </tbody>
        </table>
      </div>
      <p class="table-note">Lawn timings follow UW–Madison Extension’s Wisconsin Lawn Care Calendar. The highlighted rows are the most important weeks of the year for a thin lawn.</p>

      <h2 id="spring">What should you do for the lawn in March and April?</h2>
      <p>Wait until the snow is gone and the ground has dried, then rake off leaves and winter debris and look for damage. RAH Solutions starts spring cleanups on that cue, because working soft, wet turf leaves ruts.</p>
      <p>Raking shows what winter did. Matted circular patches are usually snow mold, and narrow winding trails in the grass are from voles. UW–Madison Extension’s advice for both is to rake the areas out and reseed where needed. The <a href="/blog/spring-yard-cleanup-checklist-wisconsin/">spring yard cleanup checklist</a> puts the whole job in order, and <a href="/services/spring-yard-cleanup/">spring yard cleanup</a> is the service if you would rather hand it off.</p>
      <p>Crabgrass preventer is optional. The Extension calendar says to skip it if crabgrass has not been a problem before. Where it has, the product goes down as soil temperatures near 60 degrees for several days in a row, and blooming forsythia is the usual reminder. Do not use it on areas you intend to seed that spring unless the label allows it.</p>
      <p>Spring is also when frost damage to hard surfaces shows up. If the front steps scaled or sank over winter, the guide to <a href="/blog/concrete-steps-repair-or-replace/">repairing or replacing concrete steps</a> explains how to tell a patch from a tear-out.</p>

      <h2 id="mowing">When should you start mowing, and how high?</h2>
      <p>Start mowing when the grass is growing and the ground is firm, and hold the height at about 3 inches all season. RAH Solutions follows the one-third rule on every cut: never take off more than a third of the blade.</p>
      <p>UW–Madison Extension adds three points. Do not make the first mowing excessively short. Return the clippings all season. Raise the mower to its highest setting before summer heat arrives. In May growth is fast, so sticking to the one-third rule can mean mowing more than once a week. That is the main reason people hire out <a href="/services/residential-lawn-care/">residential lawn care</a>.</p>
      <p>If you fertilize in spring, the Extension calendar says to wait until at least the second mowing and to avoid heavy rates. May is also bed season. Once beds are edged and weeded, <a href="/blog/how-much-mulch-do-i-need/">work out how much mulch you need</a> before ordering, or have it installed through <a href="/services/mulching-services/">mulching services</a>.</p>

      <h2 id="summer">How should you water a Wisconsin lawn in summer?</h2>
      <p>Give the lawn about one inch of water a week, counting rain, or let it go dormant and leave it alone. RAH Solutions suggests choosing one approach before dry weather starts and staying with it.</p>
      <p>To keep a lawn green, UW–Madison Extension recommends watering early in the day, deeply enough to reach the roots, and measuring with a few containers set on the lawn. On heavy soil or slopes, split the water into two applications so it soaks in. Frequent light watering encourages shallow roots.</p>
      <p>Dormancy is a fair choice. Kentucky bluegrass can sit brown for several weeks and recover. The Extension’s summer guidance is that once a lawn has gone brown it is best not to water it, apart from a small amount every two weeks or so in a long drought. A dormant lawn does not tolerate traffic.</p>
      <div class="post-callout"><span><?php echo icon('info', 20); ?></span><p>Leave these for later: UW–Madison Extension advises against seeding, power raking and dethatching in summer. Cool-season grass damaged in the heat recovers slowly, and crabgrass moves in.</p></div>
      <p>Summer is a good time to plan hard-surface work for fall. If a patio is on the list, the comparison of a <a href="/blog/paver-patio-vs-poured-concrete/">paver patio and poured concrete</a> covers how each handles Wisconsin frost.</p>

      <h2 id="late-summer">Why is late August to mid-September the most important stretch?</h2>
      <p>Late August into early September is the best time of year to seed, sod, repair, fertilize and aerate a Wisconsin lawn. RAH Solutions schedules <a href="/services/lawn-restoration/">lawn restoration</a> for these weeks.</p>
      <ul>
        <li><strong>Seeding.</strong> UW–Madison Extension puts the window at late August to early September, stretching to about September 10 to 15 for most of the state. Seed has to touch soil to grow.</li>
        <li><strong>Fertilizing.</strong> The Extension calendar names September 1 to 15 as a key time for nitrogen on all lawns and advises against mid-fall applications.</li>
        <li><strong>Aeration.</strong> Fall is an excellent time to core aerate, when the soil is moist. The plugs stay on the lawn.</li>
        <li><strong>Grubs.</strong> Peel back the turf at the edge of a brown patch and look before treating anything. The Extension does not suggest preplanned insecticide applications.</li>
      </ul>
      <p>The details are in the guide on <a href="/blog/when-to-aerate-and-overseed-southern-wisconsin/">when to aerate and overseed in southern Wisconsin</a>. For a new lawn or a full redo, compare <a href="/blog/sod-vs-seed-new-lawn-wisconsin/">sod and seed for a Wisconsin lawn</a>. <a href="/services/sod-installation/">Sod installation</a> stays an option later into fall as long as the sod can be watered.</p>

      <h2 id="fall">What needs to happen in October and November?</h2>
      <p>Keep mowing until the grass stops growing, keep leaves from matting, and get everything off the lawn before snow. RAH Solutions handles this as <a href="/services/fall-yard-cleanup/">fall yard cleanup</a>.</p>
      <p>October still has work in it. UW–Madison Extension considers the whole month suitable for core aeration and calls fall the better season for spot treating dandelions and other perennial broadleaf weeds, while they are still growing. It warns against fertilizing in early to mid-October, which can push soft growth that is prone to winter damage and snow mold.</p>
      <p>A thick mat of leaves left over winter smothers turf and encourages snow mold, so clear leaves before the first lasting snow. Do not let the lawn go into winter excessively tall either, because that gives voles cover.</p>
      <p>Dormant seeding in very late fall is a fallback, not a plan. The Extension calendar says results are variable, that it depends on snow cover lasting all winter, and that it is not suggested in most instances. A bare area missed in September is usually better sodded or seeded the following spring.</p>

      <h2 id="winter">Winter: snow prep and what to leave alone</h2>
      <p>Winter lawn care is mostly preparation. RAH Solutions sets up <a href="/services/snow-removal/">snow removal</a> accounts before the season, so November is the time to settle who plows and where the snow goes.</p>
      <p>Before the ground freezes, mark the edges of the driveway and walks so a plow stays on the pavement and off the turf. Read <a href="/blog/snow-removal-contract-questions/">what to ask before signing a snow removal contract</a> before you agree to terms. If concrete was poured this year, the National Ready Mixed Concrete Association advises using no deicing salt on it during the first year. Use clean sand for traction instead. Then leave the lawn alone until the snow melts and the ground dries in March.</p>

      <section class="post-faq" aria-labelledby="faq">
        <h2 id="faq">Lawn care calendar questions</h2>
        <?php echo faqList($faqs, 1); ?>
      </section>
      <p class="post-sources">Sources: UW–Madison Extension, <a href="https://hort.extension.wisc.edu/articles/wisconsin-lawn-care-calender/" rel="noopener" target="_blank">Wisconsin Lawn Care Calendar</a>, <a href="https://hort.extension.wisc.edu/summer-lawn-care-strategies/" rel="noopener" target="_blank">Summer Lawn Care Strategies</a> and <a href="https://hort.extension.wisc.edu/timing-questions-for-fall-lawn-care/" rel="noopener" target="_blank">Timing Questions for Fall Lawn Care</a>; National Ready Mixed Concrete Association, <a href="https://www.concreteanswers.org/CIPs/CIP2.htm" rel="noopener" target="_blank">CIP 2: Scaling Concrete Surfaces</a>.</p>
    </article>

    <aside class="post-rail" aria-label="Article tools">
      <nav class="post-toc" aria-label="Table of contents">
        <h2>In this article</h2>
        <ol><?php foreach ($toc as $t): ?><li><a href="#<?php echo $t[0]; ?>"><?php echo e($t[1]); ?></a></li><?php endforeach; ?></ol>
      </nav>
      <div class="post-cta">
        <strong>Want the lawn handled all season?</strong>
        <a class="btn btn-accent" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> <?php echo e($phone); ?></a>
        <button type="button" class="btn btn-outline-white" data-open-estimate>Request an estimate</button>
      </div>
    </aside>
  </div>
</div>

<?php $ctaBandId = 'band-post-calendar'; $ctaBandHeading = 'Put your lawn on a season-long schedule'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php'; ?>

<section class="section post-related" aria-labelledby="related-h2">
  <div class="container">
    <h2 id="related-h2" class="sr-only">Related services and articles</h2>
    <h3>Related services</h3>
    <div class="related-svc">
      <a href="/services/lawn-maintenance/"><?php echo icon('leaf', 20); ?> Lawn maintenance</a>
      <a href="/services/lawn-restoration/"><?php echo icon('sprout', 20); ?> Lawn restoration</a>
      <a href="/services/fall-yard-cleanup/"><?php echo icon('wind', 20); ?> Fall yard cleanup</a>
      <a href="<?php echo areaHref(areaBySlug('janesville-wi')); ?>"><?php echo icon('map-pin', 20); ?> Janesville service area</a>
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
