<?php
/*
 * Sources (checked 5 Oct 2026):
 *  - National Ready Mixed Concrete Association, CIP 2 "Scaling Concrete Surfaces": https://www.concreteanswers.org/CIPs/CIP2.htm
 *  - American Concrete Institute, FAQ "Resistance to cycles of freezing and thawing": https://www.concrete.org/frequentlyaskedquestions.aspx?faqid=658
 *  - Wisconsin Administrative Code SPS 321.04 (Uniform Dwelling Code, stairways): https://docs.legis.wisconsin.gov/code/admin_code/sps/safety_and_buildings_and_environment/320_325/321/ii/04
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';
?>
<?php
$post            = postBySlug('concrete-steps-repair-or-replace');
$currentPage     = 'blog';
$pageType        = 'blog';
$pageTitle       = 'Concrete Steps: Repair or Replace After Freeze–Thaw?';
$pageDescription = 'Flaking concrete steps can often be resurfaced. Steps that sank, tilted or pulled away from the house need replacing. An Edgerton, WI crew explains why.';
$canonicalUrl    = $siteUrl . '/blog/concrete-steps-repair-or-replace/';
$ogType          = 'article';
$ogImage         = $post['image'] . '.jpg';
$pageCss         = ['post'];
$pageStyle       = <<<CSS
/* concrete steps guide: inline job photos and the repair/replace verdict column */
.page-steps .post-body figure { margin: 1.4rem 0 1.8rem; border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--color-line); background: var(--color-surface); box-shadow: var(--shadow); }
.page-steps .post-body figure picture, .page-steps .post-body figure img { display: block; width: 100%; }
.page-steps .post-body figure img { aspect-ratio: 3 / 2; object-fit: cover; }
.page-steps .post-body figcaption { padding: .7rem 1rem; font-size: .88rem; color: var(--color-muted); border-top: 3px solid var(--color-primary); }
.page-steps .post-table td:last-child { font-weight: 700; color: var(--color-secondary); }
.page-steps .post-table tbody tr.is-replace td:last-child { color: var(--color-ink); background: color-mix(in srgb, var(--color-accent) 22%, var(--color-surface)); }
CSS;

$faqs = [
    ['Can you pour new concrete over old steps?',
     'Only as a thin bonded resurfacing on steps that are solid and have not moved. The National Ready Mixed Concrete Association says all weak material has to come off first. New concrete over steps that have sunk or tilted will crack and move the same way the old ones did.'],
    ['Why did my steps flake after only a few winters?',
     'The usual causes are concrete with too little entrained air, a surface that was finished while still wet, poor curing, or deicing salt used too soon. Any one of these leaves a weak top layer that peels when water freezes in it.'],
    ['Is it safe to use salt on concrete steps?',
     'Not during the first year. After that, plain rock salt used sparingly is generally tolerated by sound air-entrained concrete. Never use products containing ammonium sulfate or ammonium nitrate, which are fertilizer ingredients and attack concrete chemically. Sand is always safe for traction.'],
    ['Are uneven steps a safety problem?',
     'Yes. People expect every rise in a flight to match, and a short or tall one causes trips. For stairs attached to a house, Wisconsin’s Uniform Dwelling Code limits risers to 8 inches and allows no more than 3/8 inch of difference between the tallest and shortest.'],
    ['Does RAH Solutions replace concrete steps?',
     'Yes. RAH Solutions LLC installs and repairs concrete steps, walkways, patios and driveways around Edgerton through its <a href="/services/concrete-services/">concrete services</a>. Call (608) 501-5123 for a free on-site estimate.'],
];
$toc = [
    ['short-answer', 'The short answer'],
    ['damage', 'What freeze–thaw and salt do'],
    ['signs', 'Surface damage or movement'],
    ['repair', 'When a patch is enough'],
    ['replace', 'When to replace'],
    ['process', 'What replacement involves'],
    ['winter', 'First-winter care'],
    ['faq', 'Questions and answers'],
];

$schemaNodes = [
    webPageNode(),
    blogPostingNode($post, ['concrete steps repair or replace', 'freeze-thaw concrete damage Wisconsin', 'concrete step replacement Edgerton WI', 'spalling concrete steps Rock County']),
    breadcrumbNode([['Home', '/'], ['Blog', '/blog/'], [$post['title'], '/blog/' . $post['slug'] . '/']]),
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-steps">

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
      <p class="post-lede" id="short-answer"><strong>Repair concrete steps when the damage is only on the surface, and replace them when the steps themselves have moved.</strong> Flaking and shallow pitting can be resurfaced. Sinking, tilting, a gap at the house or uneven rises mean the base has failed. RAH Solutions LLC of Edgerton installs and repairs concrete steps.</p>

      <p>Steps take more abuse than any other concrete around a house. They hold snow, catch roof runoff and get salted more heavily than the driveway. In Rock and Dane counties they also go through freeze and thaw again and again each winter. The first job is to work out which kind of damage you are looking at.</p>

      <h2 id="damage">What do freeze–thaw cycles and deicing salt do to concrete steps?</h2>
      <p>Water soaks into the surface, freezes, expands and breaks the top layer loose. RAH Solutions sorts the result into two kinds: scaling, a thin flaking of the surface, and spalling, where deeper pieces break off edges and corners.</p>
      <p>The American Concrete Institute notes that water expands by about 9% when it freezes. Exterior concrete is protected by entrained air, which is a network of tiny bubbles that gives freezing water room to expand. The National Ready Mixed Concrete Association (NRMCA) lists the usual causes of scaling as too little entrained air, finishing while water is still on the surface, poor curing and deicing salt. Salt keeps the surface wetter and puts it through more freeze–thaw cycles.</p>

      <h2 id="signs">How do you tell surface damage from structural movement?</h2>
      <p>Surface damage changes how the concrete looks. Structural movement changes where the steps sit. RAH Solutions checks whether the steps are still level, still tight to the house and still even from one rise to the next.</p>
      <p>Lay a level on each tread and look at the joint where the top step meets the foundation or door sill. Then measure each rise. A stoop that has dropped makes the top step taller and the bottom one shorter.</p>
      <div class="post-table-wrap">
        <table class="post-table">
          <thead><tr><th scope="col">What you see</th><th scope="col">Likely cause</th><th scope="col">Repair or replace</th></tr></thead>
          <tbody>
            <tr><th scope="row">Thin flaking, sand and fine stone showing</th><td>Scaling from freeze–thaw and deicers</td><td>Repair</td></tr>
            <tr><th scope="row">Chipped nosing or one broken corner</th><td>Spalling or impact on an edge</td><td>Repair</td></tr>
            <tr><th scope="row">Hairline crack that has not changed</th><td>Shrinkage as the concrete cured</td><td>Seal and watch</td></tr>
            <tr class="is-replace"><th scope="row">Crack that widens each year</th><td>Base settling or frost heave</td><td>Replace</td></tr>
            <tr class="is-replace"><th scope="row">Steps tilted or sunk at one end</th><td>Soft fill or washed-out base</td><td>Replace</td></tr>
            <tr class="is-replace"><th scope="row">Gap opening at the house</th><td>Stoop settling away from the foundation</td><td>Replace</td></tr>
            <tr class="is-replace"><th scope="row">Rises of different heights</th><td>Settlement, or built that way</td><td>Replace</td></tr>
            <tr class="is-replace"><th scope="row">Deep crumbling across most treads</th><td>Weak concrete through the full depth</td><td>Replace</td></tr>
          </tbody>
        </table>
      </div>
      <figure><?php echo picture('porch-steps-tilted-before', 'Concrete entry stoop that has sunk and tilted away from the house before replacement', '(max-width: 760px) 100vw, 700px'); ?><figcaption>An entry stoop that has sunk and tilted away from the house. A RAH Solutions job photo, taken before tear-out.</figcaption></figure>

      <h2 id="repair">When is a patch or resurfacing enough?</h2>
      <p>A patch or resurfacing is reasonable when the steps are solid, level and tight to the house and only the top surface has failed. RAH Solutions treats scaling and small chipped edges as repair work.</p>
      <p>Preparation decides whether a repair lasts. NRMCA guidance is to remove all the weak material first, down to sound concrete, and then apply a bonded resurfacing of concrete or a latex- or polymer-modified repair mortar. A skim coat spread over loose, dusty concrete peels off within a winter or two.</p>
      <p>Be honest about appearance too. A patch rarely matches the color of the old concrete, so a repaired step looks repaired. If that matters at a front entry, replacement may be worth it.</p>

      <h2 id="replace">When should concrete steps be replaced?</h2>
      <p>Replace steps that have sunk, tilted, pulled away from the house, cracked through or ended up with uneven rises. RAH Solutions recommends replacement in those cases because the problem is under the concrete, where a patch cannot reach.</p>
      <p>Uneven steps are also a trip hazard. For stairs attached to a house, Wisconsin’s Uniform Dwelling Code caps each riser at 8 inches and allows no more than 3/8 inch between the tallest and shortest rise in a flight. Settled steps often miss that mark.</p>
      <p>Look for the cause before anyone pours. A downspout that empties beside the stoop washes out the base and feeds frost heave. Moving that water with <a href="/services/excavating-services/">drainage and grading work</a> protects the new steps.</p>

      <h2 id="process">What does a proper replacement involve?</h2>
      <p>A proper replacement is a tear-out and rebuild from the base up. RAH Solutions breaks the job on a set of entry steps into five stages.</p>
      <ol>
        <li><strong>Tear out</strong> the old concrete and haul it away.</li>
        <li><strong>Dig out soft soil</strong> and build a compacted gravel base that drains.</li>
        <li><strong>Set forms</strong> so every rise matches and each tread sheds water away from the house.</li>
        <li><strong>Pour air-entrained concrete.</strong> For concrete exposed to freezing and deicers, NRMCA recommends about 6 to 7% entrained air and a 4,000 psi mix.</li>
        <li><strong>Finish and cure.</strong> Finishing waits until surface water is gone, and the concrete is kept from drying too fast.</li>
      </ol>
      <figure><?php echo picture('concrete-walk-rebar-grid', 'Walkway formed with a gravel base and a rebar grid before the concrete pour', '(max-width: 760px) 100vw, 700px'); ?><figcaption>A walk formed over a gravel base with a rebar grid, ready for concrete. A RAH Solutions job photo.</figcaption></figure>
      <figure><?php echo picture('concrete-landing-formed-poured', 'New concrete landing poured inside wood forms at a house entry', '(max-width: 760px) 100vw, 700px'); ?><figcaption>A new landing poured inside wood forms. A RAH Solutions job photo.</figcaption></figure>
      <p>Steps are often replaced along with the walk that leads to them. Matching <a href="/services/concrete-services/">concrete walkways and patios</a> or a paver landing from <a href="/services/hardscaping-services/">hardscaping</a> can be planned in the same visit.</p>

      <h2 id="winter">How should new concrete steps be treated the first winter?</h2>
      <p>Use no deicing salt on new concrete for its first year, and spread clean sand for traction instead. RAH Solutions passes on that advice because it comes straight from NRMCA guidance.</p>
      <div class="post-callout"><span><?php echo icon('info', 20); ?></span><p>Check the bag. NRMCA warns never to use deicers containing ammonium sulfate or ammonium nitrate. Both are fertilizer ingredients, and both attack concrete chemically.</p></div>
      <p>Shovel early so snow does not pack into ice. Remember that cars carry road salt onto steps and aprons. If a contractor handles your snow, tell them which concrete is new. Our list of <a href="/blog/snow-removal-contract-questions/">questions to ask before signing a snow removal contract</a> covers salt and sand, and <a href="/services/snow-removal/">snow removal</a> accounts are set up in the fall. In spring, sweep up leftover sand as part of the <a href="/blog/spring-yard-cleanup-checklist-wisconsin/">spring yard cleanup checklist</a>.</p>

      <section class="post-faq" aria-labelledby="faq">
        <h2 id="faq">Concrete step questions</h2>
        <?php echo faqList($faqs, 1); ?>
      </section>
      <p class="post-sources">Sources: National Ready Mixed Concrete Association, <a href="https://www.concreteanswers.org/CIPs/CIP2.htm" rel="noopener" target="_blank">CIP 2: Scaling Concrete Surfaces</a>; American Concrete Institute, <a href="https://www.concrete.org/frequentlyaskedquestions.aspx?faqid=658" rel="noopener" target="_blank">Resistance to cycles of freezing and thawing</a>; Wisconsin Administrative Code <a href="https://docs.legis.wisconsin.gov/code/admin_code/sps/safety_and_buildings_and_environment/320_325/321/ii/04" rel="noopener" target="_blank">SPS 321.04, stairways</a>.</p>
    </article>

    <aside class="post-rail" aria-label="Article tools">
      <nav class="post-toc" aria-label="Table of contents">
        <h2>In this article</h2>
        <ol><?php foreach ($toc as $t): ?><li><a href="#<?php echo $t[0]; ?>"><?php echo e($t[1]); ?></a></li><?php endforeach; ?></ol>
      </nav>
      <div class="post-cta">
        <strong>Steps sinking or crumbling?</strong>
        <a class="btn btn-accent" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> <?php echo e($phone); ?></a>
        <button type="button" class="btn btn-outline-white" data-open-estimate>Request an estimate</button>
      </div>
    </aside>
  </div>
</div>

<?php $ctaBandId = 'band-post-steps'; $ctaBandHeading = 'Have your steps looked at before winter'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php'; ?>

<section class="section post-related" aria-labelledby="related-h2">
  <div class="container">
    <h2 id="related-h2" class="sr-only">Related services and articles</h2>
    <h3>Related services</h3>
    <div class="related-svc">
      <a href="/services/concrete-services/"><?php echo icon('hammer', 20); ?> Concrete services</a>
      <a href="/services/hardscaping-services/"><?php echo icon('layers', 20); ?> Hardscaping</a>
      <a href="/services/excavating-services/"><?php echo icon('tractor', 20); ?> Excavating and drainage</a>
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
