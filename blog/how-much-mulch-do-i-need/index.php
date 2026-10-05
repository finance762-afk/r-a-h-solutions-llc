<?php
/*
 * Sources (checked 5 Oct 2026):
 *  - UW–Madison Extension, "Wood Mulch and Tree Health": https://hort.extension.wisc.edu/articles/wood-mulch-and-tree-health/
 *  - UW–Madison Extension, "Mulches for Home Gardens and Plantings": https://hort.extension.wisc.edu/articles/mulches-home-gardens-and-plantings/
 *  - Iowa State University Extension, "How to Determine the Amount of Mulch Needed for a Garden Bed": https://yardandgarden.extension.iastate.edu/how-to/how-determine-amount-mulch-needed-garden-bed
 *  - Iowa State University Extension, "Using Mulch in the Garden": https://yardandgarden.extension.iastate.edu/how-to/using-mulch-garden
 *  - University of Minnesota Extension, "Mulching for soil and garden health": https://extension.umn.edu/managing-soil-and-nutrients/mulching-soil-and-garden-health
 * Coverage figures are arithmetic: 1 cubic yard = 27 cubic feet; 27 x 12 = 324 sq ft at 1 inch deep.
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';
?>
<?php
$post            = postBySlug('how-much-mulch-do-i-need');
$currentPage     = 'blog';
$pageType        = 'blog';
$pageTitle       = 'How Much Mulch Do You Need, and When to Lay It?';
$pageDescription = 'Mulch math made simple: square feet × depth in inches ÷ 324 = cubic yards. Plus depth, timing and bag vs. bulk advice from RAH Solutions LLC, Edgerton, WI.';
$canonicalUrl    = $siteUrl . '/blog/how-much-mulch-do-i-need/';
$ogType          = 'article';
$ogImage         = $post['image'] . '.jpg';
$pageCss         = ['post'];
$pageStyle       = <<<CSS
/* mulch guide: formula card for the cubic-yard math */
.page-mulch .formula-card { margin: 1.2rem 0 1.6rem; padding: 1.1rem 1.25rem; border-radius: var(--radius-lg); background: color-mix(in srgb, var(--color-accent) 16%, var(--color-surface)); border: 1px solid var(--color-accent); border-left: 6px solid var(--color-secondary); }
.page-mulch .formula-card b { display: block; font-family: var(--font-accent); letter-spacing: .1em; text-transform: uppercase; font-size: .8rem; color: var(--color-secondary); }
.page-mulch .formula-card span { display: block; margin-top: .3rem; font-family: var(--font-heading); font-size: 1.25rem; line-height: 1.3; color: var(--color-ink); text-wrap: balance; }
.page-mulch .post-table td:last-child { color: var(--color-muted); }
@media (max-width: 640px) { .page-mulch .formula-card span { font-size: 1.08rem; } }
CSS;

$faqs = [
    ['How many bags of mulch are in a cubic yard?',
     'A cubic yard is 27 cubic feet, so it takes 13.5 bags of the common 2 cubic foot size, or 9 bags of the 3 cubic foot size, to equal one cubic yard of bulk mulch.'],
    ['How deep should mulch be?',
     'Two to four inches. UW–Madison Extension recommends about 2 inches over heavy clay soil and up to 4 inches over light, well-drained soil. Most beds in Rock and Dane counties do well at 2 to 3 inches.'],
    ['Do I need to remove old mulch first?',
     'Usually not. Old wood mulch breaks down into the soil. Rake it loose, measure what is left and add only enough new mulch to bring the total back to 2 to 3 inches. Remove some if the layer is already deeper than 4 inches.'],
    ['Should landscape fabric go under mulch?',
     'It is not needed under wood mulch in planting beds. Iowa State University Extension notes that fabric can restrict water and air movement into the soil, and that mulch on top of it is more likely to wash or blow away.'],
    ['Does RAH Solutions deliver and install mulch?',
     'Yes. RAH Solutions LLC of Edgerton installs mulch for homes and businesses through its <a href="/services/mulching-services/">mulching service</a> and also offers garden edging. Call (608) 501-5123 for a free on-site estimate.'],
];
$toc = [
    ['short-answer', 'The short answer'],
    ['math', 'The cubic-yard math'],
    ['depth', 'How deep to go'],
    ['bags', 'Bags or bulk'],
    ['types', 'Which mulch to use'],
    ['when', 'When to mulch'],
    ['prep', 'Prep and placement'],
    ['faq', 'Questions and answers'],
];

$schemaNodes = [
    webPageNode(),
    blogPostingNode($post, ['how much mulch do I need', 'mulch calculator cubic yards', 'when to mulch Wisconsin', 'mulching Edgerton WI']),
    breadcrumbNode([['Home', '/'], ['Blog', '/blog/'], [$post['title'], '/blog/' . $post['slug'] . '/']]),
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-mulch">

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
      <p class="post-lede" id="short-answer"><strong>Multiply the bed area in square feet by the depth in inches, then divide by 324. The result is cubic yards. One cubic yard covers about 108 square feet at 3 inches deep.</strong> Lay it in mid to late spring, once the soil has warmed. RAH Solutions LLC, a family-owned landscaper in Edgerton, uses the same math for mulch estimates.</p>

      <p>Mulch is sold by volume, and beds are measured by area, so the only trick is converting one to the other. Get the number right and you make one trip or take one delivery. Get it wrong and you either run short with half a bed bare or pile the extra on too thick, which causes its own problems.</p>

      <h2 id="math">How do you calculate how much mulch you need?</h2>
      <p>Measure the bed in square feet, multiply by the depth in inches and divide by 324 to get cubic yards. RAH Solutions recommends this formula for any bed.</p>
      <div class="formula-card"><b>The formula</b><span>Area (sq ft) × depth (inches) ÷ 324 = cubic yards</span></div>
      <p>The 324 comes from simple arithmetic. A cubic yard is 27 cubic feet, and spread 1 inch deep it covers 27 × 12 = 324 square feet. Iowa State University Extension teaches the same method: area times depth gives cubic feet, and dividing by 27 gives cubic yards.</p>
      <p><strong>Worked example.</strong> A foundation bed 40 feet long and 5 feet wide is 200 square feet. An island bed 10 by 12 feet adds 120, for 320 square feet in total. At 3 inches deep: 320 × 3 = 960, and 960 ÷ 324 = 2.96. Order 3 cubic yards.</p>
      <p>For curved beds, break the shape into rough rectangles and add them up. A little rounding up is fine. Guessing is not.</p>
      <div class="post-table-wrap">
        <table class="post-table">
          <thead>
            <tr><th scope="col">Mulch depth</th><th scope="col">Coverage per cubic yard</th><th scope="col">Typical use</th></tr>
          </thead>
          <tbody>
            <tr><th scope="row">2 inches</th><td>162 sq ft</td><td>Top-up over old mulch, heavy clay soil</td></tr>
            <tr><th scope="row">3 inches</th><td>108 sq ft</td><td>Most new or bare planting beds</td></tr>
            <tr><th scope="row">4 inches</th><td>81 sq ft</td><td>Coarse chips on light, well-drained soil</td></tr>
          </tbody>
        </table>
      </div>

      <h2 id="depth">How deep should mulch be in Wisconsin beds?</h2>
      <p>Mulch belongs 2 to 4 inches deep, and RAH Solutions aims for 2 to 3 inches on most southern Wisconsin soils. Thinner than that lets weeds through, and thicker keeps the soil too wet.</p>
      <p>UW–Madison Extension recommends about 2 inches of mulch over heavier clay soils and up to 4 inches over light, well-drained soils. It also warns that layers thicker than 4 inches can leave soil overly wet and favor root rot. Many yards in Rock and Dane counties have silt loam over a clay-rich subsoil that drains slowly, which is why the lower end of the range suits them.</p>
      <p>If you are topping up, measure what is already there. A bed with an inch of old mulch needs only 1 to 2 inches more, which cuts the order by half or more.</p>

      <h2 id="bags">Should you buy mulch in bags or in bulk?</h2>
      <p>Bags suit small beds and touch-ups, and bulk suits anything measured in cubic yards. RAH Solutions suggests bulk for whole-property jobs because it is the more economical way to cover a lot of ground.</p>
      <p>Mulch is commonly bagged in 2 or 3 cubic foot sizes. It takes 13.5 of the 2 cubic foot bags to equal one cubic yard, so the 3-yard example above would be about 40 bags to buy, load, haul, carry and open. Bags make sense when you need less than a yard, have no place for a pile, or want to carry mulch through a gate by hand. Bulk generally costs less per cubic yard and comes in one delivery, but it needs a spot on the driveway and a wheelbarrow.</p>

      <h2 id="types">Which type of mulch should you use?</h2>
      <p>For planting beds, RAH Solutions recommends an organic wood mulch, with stone kept for places where plants are few. The choice is mostly about looks, how long it lasts and where it sits.</p>
      <ul>
        <li><strong>Shredded hardwood.</strong> The standard choice for landscape beds. It has a natural brown color and breaks down over time, which feeds the soil and means it needs topping up.</li>
        <li><strong>Bark.</strong> Shredded or chunk bark is attractive and slow to decompose, so it lasts longer between top-ups.</li>
        <li><strong>Dyed mulch.</strong> Wood mulch colored brown, black or red. Iowa State University Extension cautions that bright colors can upstage the plants, so pick a shade that sets them off.</li>
        <li><strong>Stone.</strong> Decorative stone does not break down and does not need yearly topping up. Iowa State University Extension notes that it heats the soil in summer and does nothing to improve it, so it fits best around foundations, downspouts and other low-planting areas.</li>
      </ul>
      <figure><?php echo picture('mulched-bed-steel-edging-driveway', 'Freshly mulched planting bed held by steel edging beside a driveway', '(max-width: 760px) 100vw, 700px'); ?><figcaption>Edging installed before the mulch keeps a clean line along the driveway and holds the mulch in the bed.</figcaption></figure>

      <h2 id="when">When is the best time to lay mulch?</h2>
      <p>Mid to late spring, after the soil has warmed, is the best time to mulch in southern Wisconsin, and RAH Solutions recommends booking mulch work for that stretch. Fall is the time for a light top-up.</p>
      <p>Mulch insulates. Iowa State University Extension advises waiting until the ground warms and perennials emerge, because mulch laid too early holds the cold in and slows plants down. That places mulch near the end of the <a href="/blog/spring-yard-cleanup-checklist-wisconsin/">spring yard cleanup checklist</a>, after beds are cut back and weeded. A thin fall top-up, during <a href="/services/fall-yard-cleanup/">fall yard cleanup</a>, replaces what broke down over summer.</p>

      <h2 id="prep">Prep and placement: edge first, keep it off trunks</h2>
      <p>RAH Solutions recommends edging and weeding a bed before mulching, then keeping the mulch pulled back from trunks, stems and the house. Those two habits decide how the bed looks in August.</p>
      <p>A cut or installed edge gives mulch something to stop against and keeps lawn grass out. <a href="/services/garden-maintenance/">Garden maintenance</a> through the season keeps it that way. Around trees, UW–Madison Extension says to keep mulch at least 4 inches away from the trunk, because mulch piled against bark keeps it wet and can lead to decay. Spread it wide and flat instead. Along the house, Iowa State University Extension recommends keeping mulch several inches back from the foundation.</p>
      <div class="post-callout"><span><?php echo icon('info', 20); ?></span><p>Tip: skip the “mulch volcano.” A cone of mulch heaped against a tree trunk uses more material and harms the tree. A flat ring 2 to 4 inches deep that stops short of the bark does the job.</p></div>
      <p>New beds planned alongside a new lawn are covered in the comparison of <a href="/blog/sod-vs-seed-new-lawn-wisconsin/">sod and seed for a new Wisconsin lawn</a>.</p>

      <section class="post-faq" aria-labelledby="faq">
        <h2 id="faq">Mulch questions</h2>
        <?php echo faqList($faqs, 1); ?>
      </section>
      <p class="post-sources">Sources: UW–Madison Extension, <a href="https://hort.extension.wisc.edu/articles/wood-mulch-and-tree-health/" rel="noopener" target="_blank">Wood Mulch and Tree Health</a> and <a href="https://hort.extension.wisc.edu/articles/mulches-home-gardens-and-plantings/" rel="noopener" target="_blank">Mulches for Home Gardens and Plantings</a>; Iowa State University Extension, <a href="https://yardandgarden.extension.iastate.edu/how-to/how-determine-amount-mulch-needed-garden-bed" rel="noopener" target="_blank">How to Determine the Amount of Mulch Needed for a Garden Bed</a> and <a href="https://yardandgarden.extension.iastate.edu/how-to/using-mulch-garden" rel="noopener" target="_blank">Using Mulch in the Garden</a>; University of Minnesota Extension, <a href="https://extension.umn.edu/managing-soil-and-nutrients/mulching-soil-and-garden-health" rel="noopener" target="_blank">Mulching for soil and garden health</a>.</p>
    </article>

    <aside class="post-rail" aria-label="Article tools">
      <nav class="post-toc" aria-label="Table of contents">
        <h2>In this article</h2>
        <ol><?php foreach ($toc as $t): ?><li><a href="#<?php echo $t[0]; ?>"><?php echo e($t[1]); ?></a></li><?php endforeach; ?></ol>
      </nav>
      <div class="post-cta">
        <strong>Beds ready for mulch?</strong>
        <a class="btn btn-accent" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> <?php echo e($phone); ?></a>
        <button type="button" class="btn btn-outline-white" data-open-estimate>Request an estimate</button>
      </div>
    </aside>
  </div>
</div>

<?php $ctaBandId = 'band-post-mulch'; $ctaBandHeading = 'Have your beds measured, edged and mulched'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php'; ?>

<section class="section post-related" aria-labelledby="related-h2">
  <div class="container">
    <h2 id="related-h2" class="sr-only">Related services and articles</h2>
    <h3>Related services</h3>
    <div class="related-svc">
      <a href="/services/mulching-services/"><?php echo icon('layers', 20); ?> Mulching services</a>
      <a href="/services/garden-maintenance/"><?php echo icon('sprout', 20); ?> Garden maintenance</a>
      <a href="/services/landscape-installation/"><?php echo icon('trees', 20); ?> Landscape installation</a>
      <a href="<?php echo areaHref(areaBySlug('milton-wi')); ?>"><?php echo icon('map-pin', 20); ?> Milton service area</a>
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
