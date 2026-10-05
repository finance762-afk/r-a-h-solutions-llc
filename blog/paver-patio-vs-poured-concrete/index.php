<?php
/*
 * Sources (checked 5 Oct 2026):
 *  - Concrete Masonry & Hardscapes Association (CMHA, formerly ICPI), PAV-TEC-002 "Construction of Interlocking Concrete Pavements": https://www.cmha.org/resource/pav-tec-002/
 *  - CMHA, PAV-TEC-006 "Operation and Maintenance Guide for Interlocking Concrete Pavement": https://www.cmha.org/resource/pav-tec-006/
 *  - CMHA, PAV-TEC-010 "Application Guide for Interlocking Concrete Pavements": https://www.cmha.org/resource/pav-tec-010/
 *  - National Ready Mixed Concrete Association (NRMCA), CIP 2 "Scaling Concrete Surfaces": https://www.concreteanswers.org/CIPs/CIP2.htm
 *  - NRMCA, CIP 6 "Joints in Concrete Slabs on Grade": https://www.concreteanswers.org/CIPs/CIP6.htm
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';
?>
<?php
$post            = postBySlug('paver-patio-vs-poured-concrete');
$currentPage     = 'blog';
$pageType        = 'blog';
$pageTitle       = 'Paver Patio vs. Poured Concrete in a Freeze–Thaw Climate';
$pageDescription = 'Pavers flex and can be re-leveled; a concrete slab depends on its base, joints and mix. A plain comparison for Wisconsin patios from Edgerton, WI.';
$canonicalUrl    = $siteUrl . '/blog/paver-patio-vs-poured-concrete/';
$ogType          = 'article';
$ogImage         = $post['image'] . '.jpg';
$pageCss         = ['post'];
$pageStyle       = <<<CSS
/* patio comparison: inline photos and a two-material table */
.page-patio .post-body figure { margin: 1.5rem 0 1.8rem; border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--color-line); background: var(--color-surface); box-shadow: var(--shadow); }
.page-patio .post-body figure picture, .page-patio .post-body figure img { display: block; width: 100%; }
.page-patio .post-body figure img { aspect-ratio: 3 / 2; object-fit: cover; }
.page-patio .post-body figcaption { padding: .7rem 1rem; font-size: .88rem; color: var(--color-muted); border-top: 3px solid var(--color-secondary); }
.page-patio .post-table td { vertical-align: top; }
.page-patio .post-table thead th:nth-child(2) { border-bottom: 3px solid var(--color-accent); }
.page-patio .post-table thead th:nth-child(3) { border-bottom: 3px solid var(--color-primary); }
CSS;

$faqs = [
    ['Do pavers heave in a Wisconsin winter?',
     'They can move, and that is by design. A paver patio is a flexible surface, so it can rise and settle with the ground without cracking. Uneven heaving that stays after the thaw points to a thin base or trapped water, and those pavers can be lifted, the base corrected and the same units relaid.'],
    ['Will a concrete patio crack?',
     'Concrete shrinks as it cures, so some cracking is expected. Control joints are there to make the cracks form in straight, planned lines. The National Ready Mixed Concrete Association puts joint spacing at 24 to 36 times the slab thickness, which is about 10 feet for a 4-inch slab.'],
    ['Can I use salt on a new patio?',
     'Not on new poured concrete. The National Ready Mixed Concrete Association says not to use deicing salts in the first year after placement and to use clean sand for traction. For pavers, the Concrete Masonry & Hardscapes Association calls rock salt the least damaging deicer and advises against magnesium chloride.'],
    ['Which is better over clay soil that drains slowly?',
     'Either works if the base is built for it. Slow-draining soil holds the water that drives frost movement, so both need a thicker, well-compacted gravel base and a surface that sheds water. Pavers are more forgiving afterward because a settled area can be re-leveled.'],
    ['Does RAH Solutions install both pavers and concrete?',
     'Yes. RAH Solutions LLC of Edgerton offers poured patios through its <a href="/services/concrete-services/">concrete services</a> and paver patios and walkways through its <a href="/services/hardscaping-services/">hardscaping services</a>. Call (608) 501-5123 for a free on-site estimate.'],
];
$toc = [
    ['short-answer', 'The short answer'],
    ['frost', 'Frost movement'],
    ['base', 'Base and drainage'],
    ['compare', 'Side-by-side comparison'],
    ['repair', 'Repairs'],
    ['upkeep', 'Upkeep'],
    ['cost-look', 'Cost and looks'],
    ['which', 'Which suits your yard'],
    ['faq', 'Questions and answers'],
];

$schemaNodes = [
    webPageNode(),
    blogPostingNode($post, ['paver patio vs concrete Wisconsin', 'freeze-thaw patio', 'concrete patio Edgerton WI', 'paver patio Rock County']),
    breadcrumbNode([['Home', '/'], ['Blog', '/blog/'], [$post['title'], '/blog/' . $post['slug'] . '/']]),
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-patio">

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
      <p class="post-lede" id="short-answer"><strong>Both hold up in Wisconsin if the base is built right. Pavers flex with frost and can be lifted and re-leveled. A poured slab is one rigid piece that depends on its base, its joints and an air-entrained mix.</strong> RAH Solutions LLC, a family-owned contractor in Edgerton, installs both and has no reason to steer you to either.</p>

      <p>Southern Wisconsin is hard on anything flat and outdoors. The ground freezes deep, thaws and refreezes many times each winter, and much of Rock and Dane counties sits on silt loam over heavier, slow-draining subsoil. A patio does not rest on frost footings. It rides on the ground, so the real question is how each surface copes when that ground moves.</p>

      <h2 id="frost">How does each patio handle frost movement?</h2>
      <p>Pavers move with the ground in small pieces, and a slab resists movement as one piece. RAH Solutions explains the difference this way: pavers are a flexible pavement, and poured concrete is a rigid one.</p>
      <p>A paver patio is hundreds of separate units held together by sand-filled joints and an edge restraint. The Concrete Masonry & Hardscapes Association (CMHA) notes that those joints help reduce the cracking seen in conventional pavement, and that a small amount of settling is typical of all flexible pavements. When the soil lifts and drops, the surface can follow it and come back close to where it started.</p>
      <p>A slab cannot bend, so it is built to manage stress instead. Control joints give shrinkage cracks a planned place to form. The National Ready Mixed Concrete Association (NRMCA) recommends spacing them 24 to 36 times the slab thickness, about 10 feet apart for a 4-inch slab, and cutting them at least a quarter of the slab’s depth. Isolation joints separate the patio from the house so the two can move independently.</p>
      <p>The mix matters as much as the joints. Exterior concrete in a freeze–thaw climate should be air-entrained. NRMCA calls for 6 to 7 percent air in severe exposures, and lists too little entrained air, finishing while bleed water is on the surface and poor curing as the main causes of surface scaling.</p>
      <figure><?php echo picture('concrete-patio-aerial-view', 'Aerial view of a new concrete patio with control joints and steps', '(max-width: 760px) 100vw, 700px'); ?><figcaption>A new concrete patio seen from above. The straight lines are control joints, which divide the slab into panels so any cracking follows the joints.</figcaption></figure>

      <h2 id="base">What base does a paver patio or a concrete slab need?</h2>
      <p>Both need the same start: topsoil removed, a firm subgrade, and a compacted gravel base that drains. RAH Solutions treats the base as the part of a patio that decides how it looks ten winters later.</p>
      <p>For pavers, CMHA’s construction guide sets a minimum compacted base of 4 inches for patios and walks over well-drained soil, and says colder climates and wet or weak soils need more. It recommends a geotextile under the base where there is freeze and thaw or where the subgrade is clay or moist silt, which describes many yards here. On top of the base goes about 1 inch of bedding sand, then the pavers, an edge restraint, joint sand and a plate compactor.</p>
      <p>For a slab, the gravel has to be uniform as well as compacted. Concrete poured over a base that is firm in one spot and soft in another settles unevenly and cracks away from the joints.</p>
      <p>Drainage is the other half. Frost only heaves soil that holds water, so both surfaces are pitched to shed runoff away from the house. CMHA gives 1.5 percent as the minimum slope for pavers. Yards that stay wet may need grading or a drain line first, which falls under <a href="/services/excavating-services/">excavating services</a>.</p>
      <figure><?php echo picture('track-loader-grading-pad-base', 'Compact track loader beside a compacted gravel pad', '(max-width: 760px) 100vw, 700px'); ?><figcaption>A compacted gravel pad with a compact track loader beside it. Pavers and poured concrete both start with a base like this.</figcaption></figure>

      <h2 id="compare">How do pavers and poured concrete compare side by side?</h2>
      <p>Pavers win on repairability and layout options, and poured concrete wins on up-front cost and a smooth, simple surface. RAH Solutions offers both, and the table sums up the trade-offs.</p>
      <div class="post-table-wrap">
        <table class="post-table">
          <thead>
            <tr><th scope="col">Factor</th><th scope="col">Paver patio</th><th scope="col">Poured concrete</th></tr>
          </thead>
          <tbody>
            <tr><th scope="row">Frost movement</th><td>Flexes at the joints; rarely cracks</td><td>Rigid; relies on base, joints and air-entrained mix</td></tr>
            <tr><th scope="row">Base</th><td>Compacted gravel, bedding sand, edge restraint</td><td>Compacted, uniform gravel</td></tr>
            <tr><th scope="row">Repairs</th><td>Lift, fix the base, relay the same units</td><td>Patch shows; a sunk or broken panel is replaced</td></tr>
            <tr><th scope="row">Upkeep</th><td>Top up joint sand, pull weeds, optional sealer</td><td>Seal, go easy on deicers, keep joints clean</td></tr>
            <tr><th scope="row">Use after install</th><td>Ready right away</td><td>Needs curing time</td></tr>
            <tr><th scope="row">Look</th><td>Many colors, shapes and patterns</td><td>Smooth broom finish; curves formed easily</td></tr>
            <tr><th scope="row">Relative cost</th><td>Usually higher up front</td><td>Usually lower up front</td></tr>
          </tbody>
        </table>
      </div>

      <h2 id="repair">Which is easier to repair?</h2>
      <p>Pavers are easier to repair, because the same units can be taken up and put back. RAH Solutions considers that the strongest argument for pavers on ground that is likely to move.</p>
      <p>CMHA calls the process reinstatement: remove the pavers in the low area, correct and recompact the base, screed new bedding sand and relay the original pavers. A cracked unit is swapped for a new one. The repair blends in because nothing was cut or patched.</p>
      <p>Concrete repairs are more visible. Light surface scaling can be resurfaced, but a new patch rarely matches the old color. A panel that has sunk or broken usually comes out to the nearest joint and is poured again. The same logic applies to entry steps, covered in the guide to <a href="/blog/concrete-steps-repair-or-replace/">repairing or replacing concrete steps</a>.</p>

      <h2 id="upkeep">What upkeep does each one need?</h2>
      <p>Pavers need their joints looked after, and concrete needs its surface protected. RAH Solutions tells customers to expect a little of each every year or two, not none.</p>
      <ul>
        <li><strong>Pavers: joint sand.</strong> Wind, runoff and washing remove sand over time. CMHA says to top up joints once the sand has dropped more than half an inch.</li>
        <li><strong>Pavers: weeds.</strong> According to CMHA, weeds do not come up from the base. They sprout from windblown seed caught in the joints, so full joints and occasional pulling keep them down.</li>
        <li><strong>Concrete: sealing.</strong> NRMCA recommends a breathable silane or siloxane sealer and names late summer as the ideal time to apply it.</li>
        <li><strong>Concrete: deicers.</strong> NRMCA says to use no deicing salt in the first year and never products containing ammonium sulfate or ammonium nitrate. Sand gives traction without the damage.</li>
      </ul>
      <div class="post-callout"><span><?php echo icon('info', 20); ?></span><p>Tip: decide how the patio will be cleared in winter before you choose. CMHA notes that pavers are easier to shovel or plow on a diagonal to the joints, and rock salt is the deicer it considers least damaging. See <a href="/services/snow-removal/">snow removal</a> for how winter accounts are set up.</p></div>

      <h2 id="cost-look">How do cost and looks compare?</h2>
      <p>Poured concrete usually costs less to install than pavers over the same area, and pavers offer more choice in color and pattern. RAH Solutions prices each job from a free on-site estimate, because size, access and soil change the number.</p>
      <p>Pavers take more labor. Every unit is set by hand, edges are cut to fit and the surface is compacted twice. A slab is formed, poured and finished with far less hand work. Over the long run the gap can narrow, since paver repairs reuse the material and a failed slab is replaced.</p>
      <p>On looks, pavers come in many colors, shapes and laying patterns, and borders or bands are simple to add. Concrete gives a clean, continuous surface, and forms bend easily into curves and rounded corners.</p>

      <h2 id="which">Which patio suits which yard, and can you combine them?</h2>
      <p>Choose pavers where the ground is likely to move or the design matters most, and concrete where a simple, lower-cost surface on a sound base is the goal. RAH Solutions can also build the two together.</p>
      <ul>
        <li><strong>Pavers suit</strong> wet or clay-heavy yards, newer lots on fill that is still settling, areas over buried lines that may need access, and patios meant to be a design feature.</li>
        <li><strong>Concrete suits</strong> larger plain patios, tight budgets, well-drained sites and owners who want a smooth surface for furniture and easy sweeping.</li>
        <li><strong>Combined</strong> layouts are common: a poured patio with a paver walkway, or a concrete slab framed by a paver border. Keep a joint between the two so each can move on its own.</li>
      </ul>
      <p>Whichever you pick, finish the edges. Regrading and seeding or sodding the disturbed strip keeps water from pooling against the new surface, and the <a href="/blog/sod-vs-seed-new-lawn-wisconsin/">sod versus seed comparison</a> helps with that choice. For timing the lawn repair around the build, see the <a href="/blog/lawn-care-calendar-southern-wisconsin/">month-by-month lawn care calendar</a>. Plantings and beds around a new patio are part of <a href="/services/landscape-installation/">landscape installation</a>.</p>

      <section class="post-faq" aria-labelledby="faq">
        <h2 id="faq">Paver and concrete patio questions</h2>
        <?php echo faqList($faqs, 1); ?>
      </section>
      <p class="post-sources">Sources: Concrete Masonry &amp; Hardscapes Association, <a href="https://www.cmha.org/resource/pav-tec-002/" rel="noopener" target="_blank">Construction of Interlocking Concrete Pavements</a>, <a href="https://www.cmha.org/resource/pav-tec-006/" rel="noopener" target="_blank">Operation and Maintenance Guide for Interlocking Concrete Pavement</a> and <a href="https://www.cmha.org/resource/pav-tec-010/" rel="noopener" target="_blank">Application Guide for Interlocking Concrete Pavements</a>; National Ready Mixed Concrete Association, <a href="https://www.concreteanswers.org/CIPs/CIP2.htm" rel="noopener" target="_blank">CIP 2: Scaling Concrete Surfaces</a> and <a href="https://www.concreteanswers.org/CIPs/CIP6.htm" rel="noopener" target="_blank">CIP 6: Joints in Concrete Slabs on Grade</a>.</p>
    </article>

    <aside class="post-rail" aria-label="Article tools">
      <nav class="post-toc" aria-label="Table of contents">
        <h2>In this article</h2>
        <ol><?php foreach ($toc as $t): ?><li><a href="#<?php echo $t[0]; ?>"><?php echo e($t[1]); ?></a></li><?php endforeach; ?></ol>
      </nav>
      <div class="post-cta">
        <strong>Planning a patio?</strong>
        <a class="btn btn-accent" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> <?php echo e($phone); ?></a>
        <button type="button" class="btn btn-outline-white" data-open-estimate>Request an estimate</button>
      </div>
    </aside>
  </div>
</div>

<?php $ctaBandId = 'band-post-patio'; $ctaBandHeading = 'Get a patio estimate for pavers, concrete or both'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php'; ?>

<section class="section post-related" aria-labelledby="related-h2">
  <div class="container">
    <h2 id="related-h2" class="sr-only">Related services and articles</h2>
    <h3>Related services</h3>
    <div class="related-svc">
      <a href="/services/concrete-services/"><?php echo icon('hammer', 20); ?> Concrete services</a>
      <a href="/services/hardscaping-services/"><?php echo icon('layers', 20); ?> Hardscaping services</a>
      <a href="/services/excavating-services/"><?php echo icon('tractor', 20); ?> Excavating services</a>
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
