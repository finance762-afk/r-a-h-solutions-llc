<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$currentPage     = 'faq';
$pageType        = 'faq';
$pageTitle       = 'Landscaping & Lawn Care FAQ | Edgerton, WI | RAH Solutions';
$pageDescription = 'Answers from RAH Solutions LLC in Edgerton, WI on estimates, lawn care timing, sod and seed, mulch, concrete, drainage, cleanups and snow removal.';
$canonicalUrl    = $siteUrl . '/faq/';
$pageCss         = ['inner'];
$pageStyle       = <<<CSS
/* faq: group headings with leaf-green bar, answers indented */
.page-faq .faq-group h2 { display: flex; align-items: center; gap: .6rem; }
.page-faq .faq-group h2::before { content: ""; width: 6px; height: 1.1em; border-radius: 3px; background: var(--color-accent); flex: 0 0 auto; }
.page-faq .faq-group .faq-answer { padding-left: .2rem; }
.page-faq .faq-group .faq-answer a { color: var(--color-primary); }
.page-faq .faq-page { background: var(--color-surface); }
CSS;

$faqGroups = [
    'company' => ['Who is RAH Solutions, and how do estimates work?', [
        ['What is RAH Solutions LLC?', 'RAH Solutions LLC is a family-owned landscaper based in Edgerton, Wisconsin, started by Robert Harried in 2023. It provides lawn care, landscaping, hardscaping, concrete, excavating, seasonal cleanups and snow removal for homes and businesses.'],
        ['Are estimates free?', 'Yes. Every estimate is free and done at your property. Robert looks at the yard, lot or driveway, talks through what you want, and follows up with a written price. There is no obligation.'],
        ['Is RAH Solutions licensed and insured?', 'Yes. RAH Solutions LLC is a licensed and insured Wisconsin limited liability company. Ask for proof of insurance before work starts and it will be provided.'],
        ['What are your hours, and how do I reach you?', 'Monday through Friday, 8:00 AM to 5:00 PM; closed Saturday and Sunday. Call (608) 501-5123, email rahsolutionsllc2@gmail.com, or use the <a href="/contact/">contact form</a>.'],
        ['Which towns do you serve?', 'Edgerton, Stoughton, Janesville, Madison, Milton, Beloit, Evansville, Fort Atkinson, Whitewater, McFarland, Oregon, Brodhead and Watertown, plus rural addresses between them. See the <a href="/service-area/">service area</a>.'],
    ]],
    'lawn' => ['When should lawn work be done in southern Wisconsin?', [
        ['When is the best time to seed or overseed?', 'Late August through about mid-September. Soil is warm, nights are cooler and weeds are fading, which suits Kentucky bluegrass and fescue. See the <a href="/blog/when-to-aerate-and-overseed-southern-wisconsin/">aeration and overseeding guide</a>.'],
        ['How high should a Wisconsin lawn be mowed?', 'About 3 to 3.5 inches, removing no more than one third of the blade at a time. That is UW–Madison Extension’s guidance for cool-season lawns, and it is how <a href="/services/lawn-maintenance/">lawn maintenance</a> visits are done.'],
        ['Should I choose sod or seed for a new lawn?', 'Sod gives a finished lawn right away and can go down through most of the growing season if it can be watered. Seed costs less but depends on the late-summer window. The <a href="/blog/sod-vs-seed-new-lawn-wisconsin/">sod vs. seed comparison</a> covers both, and <a href="/services/sod-installation/">sod installation</a> explains the prep.'],
        ['Can a thin or patchy lawn be saved?', 'Usually. <a href="/services/lawn-restoration/">Lawn restoration</a> starts with finding out why the grass is thin: compaction, shade, drainage or poor soil. Then the soil is corrected and the lawn is overseeded at the right time of year.'],
    ]],
    'beds' => ['What should you know about beds, mulch and shrubs?', [
        ['How deep should mulch be?', 'Two to four inches, kept off tree trunks and plant stems. Deeper is not better: thick mulch piled against a trunk holds moisture where it causes rot. See <a href="/services/mulching-services/">mulching services</a> and the <a href="/blog/how-much-mulch-do-i-need/">mulch calculator guide</a>.'],
        ['When should shrubs be trimmed?', 'It depends on when they bloom. Spring-flowering shrubs such as lilac and forsythia are trimmed right after they flower. Summer-flowering shrubs are trimmed in late winter or early spring. See <a href="/services/shrub-trimming/">shrub trimming</a>.'],
        ['Do you install new landscaping or only maintain it?', 'Both. <a href="/services/landscape-installation/">Landscape installation</a> covers new beds, plants, trees and edging, and <a href="/services/garden-maintenance/">garden maintenance</a> keeps beds weeded and cut back afterward.'],
    ]],
    'hard' => ['What about concrete, patios and drainage?', [
        ['Should cracked concrete steps be repaired or replaced?', 'Surface flaking can sometimes be patched. Steps that have sunk, tilted or pulled away from the house have a base problem and usually need to be replaced. The <a href="/blog/concrete-steps-repair-or-replace/">repair or replace guide</a> shows the difference; <a href="/services/concrete-services/">concrete services</a> covers the work.'],
        ['Why does my yard hold water?', 'Much of the soil in Rock and Dane counties drains slowly, and many lots were graded flat or toward the house. <a href="/services/excavating-services/">Excavating</a> covers regrading, swales and burying downspout lines so water has somewhere to go.'],
        ['Do you build patios and retaining walls?', 'Yes. <a href="/services/hardscaping-services/">Hardscaping</a> covers patios, walkways and retaining walls, built on a base meant for ground that freezes and thaws.'],
    ]],
    'seasonal' => ['How do seasonal cleanups and snow removal work?', [
        ['When should spring cleanup happen?', 'Once the snow is gone and the ground is firm enough to walk on without leaving footprints. Working a saturated lawn does more harm than good. See the <a href="/blog/spring-yard-cleanup-checklist-wisconsin/">spring cleanup checklist</a> and <a href="/services/spring-yard-cleanup/">spring yard cleanup</a>.'],
        ['Do leaves really need to come off the lawn in fall?', 'A thick, matted layer does. It smothers grass over winter and encourages snow mold. <a href="/services/fall-yard-cleanup/">Fall yard cleanup</a> removes leaves and cuts beds back before snow.'],
        ['Do you plow residential driveways and commercial lots?', 'Yes, both, with the company’s own plow trucks. See <a href="/services/snow-removal/">snow removal</a>.'],
        ['When should I set up snow removal?', 'In the fall, before the first storm. Winter accounts are arranged ahead of the season so the property can be looked at and the details agreed. The <a href="/blog/snow-removal-contract-questions/">snow contract guide</a> lists what to ask.'],
    ]],
];
$allFaqs = [];
foreach ($faqGroups as $g) { foreach ($g[1] as $f) { $allFaqs[] = $f; } }

$schemaNodes = [webPageNode('FAQPage'), breadcrumbNode([['Home', '/'], ['FAQ', '/faq/']]), faqSchemaNode($allFaqs)];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-faq">

<section class="hero hero--interior inner-hero" aria-label="Landscaping and lawn care FAQ">
  <div class="container">
    <?php echo breadcrumbs([['Home', '/'], ['FAQ', '/faq/']]); ?>
    <span class="eyebrow">Straight answers from RAH Solutions</span>
    <h1>Landscaping and Lawn Care Questions, Answered for Edgerton, WI</h1>
    <p class="page-answer">These are the questions RAH Solutions LLC answers most for property owners in Edgerton and across Rock and Dane counties: estimates, lawn timing, sod and seed, mulch, concrete, drainage, cleanups and snow. If yours is not here, call <?php echo e($phone); ?>.</p>
  </div>
</section>

<section class="section faq-page" aria-label="Frequently asked questions">
  <div class="container faq-index">
    <nav class="faq-nav" aria-label="FAQ topics">
      <?php foreach ($faqGroups as $id => $g): ?>
      <a href="#<?php echo $id; ?>"><?php echo e(rtrim($g[0], '?')); ?></a>
      <?php endforeach; ?>
    </nav>
    <div data-p1-dynamic>
      <?php $gi = 0; foreach ($faqGroups as $id => $g): ?>
      <div class="faq-group" id="<?php echo $id; ?>">
        <h2><?php echo e($g[0]); ?></h2>
        <?php echo faqList($g[1], $gi === 0 ? 1 : 0); ?>
      </div>
      <?php if ($gi === 0): ?>
    </div>
  </div>
</section>

<?php $ctaBandId = 'cta-band'; $ctaBandHeading = 'Rather ask in person? Get a free estimate'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php'; ?>

<section class="section faq-page" aria-label="More questions">
  <div class="container faq-index">
    <span aria-hidden="true"></span>
    <div data-p1-dynamic>
      <?php endif; ?>
      <?php $gi++; endforeach; ?>
    </div>
  </div>
</section>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
