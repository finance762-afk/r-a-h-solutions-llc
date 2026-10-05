<?php
/*
 * Sources (checked 5 Oct 2026):
 *  - City of Madison, "Sidewalks" (snow removal rules, MGO 10.28): https://www.cityofmadison.com/live-work/winter/snow-removal/sidewalks
 *  - UW–Madison Extension, "Winter Salt Injury and Salt-tolerant Landscape Plants": https://hort.extension.wisc.edu/articles/winter-salt-injury-and-salt-tolerant-landscape-plants/
 *  - University of Minnesota Extension, "The effects of deicing salts on landscapes": https://extension.umn.edu/lawns-and-landscapes/effects-deicing-salts-landscapes
 *  - National Ready Mixed Concrete Association, CIP 2 "Scaling Concrete Surfaces": https://www.concreteanswers.org/CIPs/CIP2.htm
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';
?>
<?php
$post            = postBySlug('snow-removal-contract-questions');
$currentPage     = 'blog';
$pageType        = 'blog';
$pageTitle       = 'What to Ask Before Signing a Snow Removal Contract';
$pageDescription = 'Trigger depth, timing, pricing, salt, snow piles, damage and insurance: what to ask any snow removal contractor, from RAH Solutions LLC in Edgerton, WI.';
$canonicalUrl    = $siteUrl . '/blog/snow-removal-contract-questions/';
$ogType          = 'article';
$ogImage         = $post['image'] . '.jpg';
$pageCss         = ['post'];
$pageStyle       = <<<CSS
/* snow contract guide: the question list as a boxed, two-column card */
.page-snow .post-checklist { display: grid; grid-template-columns: 1fr 1fr; gap: .2rem 1.6rem; margin: 1.2rem 0 1.6rem; padding: 1.2rem 1.3rem; border-radius: var(--radius-lg); background: var(--color-mist); border: 1px solid var(--color-line); border-top: 4px solid var(--color-aqua); }
.page-snow .post-checklist li { margin: 0; padding-top: .35rem; padding-bottom: .35rem; font-size: .95rem; color: var(--color-ink-2); }
.page-snow .post-checklist li::before { border-color: var(--color-secondary); background: color-mix(in srgb, var(--color-aqua) 30%, var(--color-surface)); }
.page-snow .post-checklist b { color: var(--color-secondary); }
@media (max-width: 640px) { .page-snow .post-checklist { grid-template-columns: 1fr; } }
CSS;

$faqs = [
    ['When should I sign up for snow removal in southern Wisconsin?',
     'In the fall, before the ground freezes. Snow is possible here from November into April, and a fall start leaves time to walk the property, stake the driveway edges and settle the questions above. RAH Solutions LLC sets up its winter accounts in the fall.'],
    ['Is a seasonal contract better than paying per push?',
     'Neither is better for everyone. A seasonal price is the same in a light winter and a heavy one, so it is easy to budget. Per-push billing follows the weather: you pay less in a quiet winter and more in a snowy one.'],
    ['Does a snow contract cover the public sidewalk?',
     'Only if it says so. The city holds the property owner responsible for the public sidewalk, whoever does the shoveling. If you want it cleared, have the sidewalk and any curb ramps written into the agreement.'],
    ['Will a plow damage my lawn or driveway?',
     'It can, mostly along edges hidden under snow. Stakes set in the fall show the operator where pavement ends. Ask how turf, edging and mailbox damage is reported and who repairs it in spring, and get the answer in writing.'],
    ['Does RAH Solutions plow commercial lots as well as driveways?',
     'Yes. RAH Solutions LLC plows residential driveways and commercial lots from its base in Edgerton. See <a href="/services/snow-removal/">snow removal</a> for details, or call (608) 501-5123 to ask about a winter account.'],
];
$toc = [
    ['short-answer', 'The short answer'],
    ['questions', 'The questions at a glance'],
    ['trigger', 'Trigger depth and timing'],
    ['pricing', 'How the price is set'],
    ['included', 'What gets cleared'],
    ['salt', 'Salt and sand'],
    ['damage', 'Snow piles and damage'],
    ['insurance', 'Insurance and term'],
    ['sidewalks', 'Your own sidewalk duty'],
    ['faq', 'Questions and answers'],
];

$schemaNodes = [
    webPageNode(),
    blogPostingNode($post, ['snow removal contract questions', 'snow plowing contract Wisconsin', 'snow removal Edgerton WI', 'seasonal vs per push snow plowing']),
    breadcrumbNode([['Home', '/'], ['Blog', '/blog/'], [$post['title'], '/blog/' . $post['slug'] . '/']]),
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-snow">

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
      <p class="post-lede" id="short-answer"><strong>Before you sign a snow removal contract, ask what snowfall triggers a visit, when the crew arrives, how the price is set, exactly what gets cleared, whether salt is used, where snow is piled, who pays for damage and whether the contractor is insured.</strong> RAH Solutions LLC of Edgerton answers each of these at the estimate.</p>

      <p>Most winter arguments between property owners and plow contractors come from things nobody wrote down in October. These questions work for any contractor in Rock or Dane County, for a home driveway or a commercial lot. A contractor who answers them plainly, in writing, is one you can plan a winter around.</p>

      <h2 id="questions">The questions at a glance</h2>
      <p>RAH Solutions suggests taking this list to every estimate and writing each answer next to the question.</p>
      <ul class="post-checklist">
        <li><b>Trigger:</b> how much snow starts a visit?</li>
        <li><b>Timing:</b> when do you arrive, and where am I on the route?</li>
        <li><b>Price:</b> per push, per event or seasonal?</li>
        <li><b>Scope:</b> which surfaces are cleared?</li>
        <li><b>Salt and sand:</b> used, optional or extra?</li>
        <li><b>Piles:</b> where does the snow go?</li>
        <li><b>Damage:</b> who repairs turf and edging?</li>
        <li><b>Stakes:</b> who marks the drive in fall?</li>
        <li><b>Insurance:</b> can I see proof?</li>
        <li><b>Term:</b> what dates does it cover?</li>
      </ul>

      <h2 id="trigger">What trigger depth starts a visit, and when will the crew arrive?</h2>
      <p>The trigger is the snowfall that sends a crew out, and it should be a written number. RAH Solutions advises asking every contractor for that number and for how it is measured.</p>
      <p>Then ask about timing. Will the drive be open before you leave for work, or after the storm ends? In a long storm, do they come once or return? Are commercial lots cleared before homes? Ask what happens with a dusting under the trigger, with drifting, and with freezing rain. Be wary of exact arrival times. Every storm is different, so an honest answer describes route order and priorities.</p>

      <h2 id="pricing">How is the price set: per push, per event or seasonal?</h2>
      <p>There are three common ways to price snow removal, and each one puts the risk of a heavy winter on a different side. RAH Solutions recommends asking which one a quote uses before comparing it with another.</p>
      <ul>
        <li><strong>Per push.</strong> You pay each time the plow clears the property. A long storm can mean more than one push. The bill is small in a light winter and large in a heavy one.</li>
        <li><strong>Per event.</strong> You pay once per storm, however many passes it takes. Ask how one event is told apart from the next.</li>
        <li><strong>Seasonal.</strong> You pay one price for the whole winter. It is easy to budget, and you pay the same whether it snows a little or a lot. Ask whether there is a limit on visits or total snowfall.</li>
      </ul>
      <p>Quotes are only comparable when the trigger, the scope and the billing method match.</p>

      <h2 id="included">What exactly gets cleared?</h2>
      <p>Never assume the walks and steps are included. RAH Solutions suggests naming every surface in writing: the driveway, the private walk, the steps, the area around the mailbox and the apron at the street.</p>
      <p>Ask about the windrow, the ridge the city plow leaves across the end of the drive after you have been cleared. Some contracts include a return trip for it and some do not. Ask how parked cars are handled. On a commercial lot, ask about fire lanes, loading areas, accessible parking stalls and entrances.</p>

      <h2 id="salt">Will salt or sand be used, and what does it do to concrete and lawns?</h2>
      <p>Ask whether deicer is included, optional or billed separately, and what product it is. RAH Solutions raises the question because salt affects concrete and plants as well as ice.</p>
      <p>The National Ready Mixed Concrete Association advises using no deicing salt on concrete during its first year, with clean sand for traction instead. Tell the contractor about any new driveway, walk or steps. Our guide to <a href="/blog/concrete-steps-repair-or-replace/">repairing or replacing concrete steps</a> shows what salt and freeze–thaw do over time, and <a href="/services/concrete-services/">concrete services</a> covers the fix.</p>
      <p>Salt also reaches the yard. UW–Madison Extension notes that salt building up in soil can kill turfgrass and perennials, and it advises against piling salt-laden snow over the roots of sensitive plants. Sand gives traction without melting anything, but University of Minnesota Extension points out that it can block drains, so it has to be swept up in spring.</p>

      <h2 id="damage">Where does the snow go, and who pays for damage?</h2>
      <p>Agree on pile locations and damage repair before the first storm. RAH Solutions recommends walking the property with the contractor in the fall and marking both on a simple sketch.</p>
      <p>Piles should stay off shrubs and beds, away from drains, and clear of the sight line where the drive meets the road. Ask where the meltwater will run, because it refreezes overnight. On a small lot, ask what happens when the piles get too big.</p>
      <div class="post-callout"><span><?php echo icon('info', 20); ?></span><p>Stake the driveway before the ground freezes. Markers along the edges, at the culvert and around landscape beds show the operator where pavement ends once everything is white. Ask who sets them and who pulls them in spring.</p></div>
      <p>Scraped turf and bent edging are the usual damage. Ask how it gets reported and who fixes it. Small repairs fit into a <a href="/blog/spring-yard-cleanup-checklist-wisconsin/">spring yard cleanup</a>, and staking pairs well with a <a href="/services/fall-yard-cleanup/">fall yard cleanup</a> visit.</p>

      <h2 id="insurance">Is the contractor insured, and how long does the agreement run?</h2>
      <p>Ask for proof of liability insurance and for the start and end dates of the agreement. RAH Solutions is licensed and insured, and a property owner should expect any plow contractor to show a current certificate.</p>
      <p>Snow can fall here from November into April, so check that the dates cover late storms. Ask how either side can cancel, when payments are due, and what changes in a very light or very heavy winter.</p>

      <h2 id="sidewalks">What stays your job under the city sidewalk ordinance?</h2>
      <p>The public sidewalk along your property is your legal responsibility unless the contract says the contractor clears it. RAH Solutions recommends reading your city’s rule before deciding what to include.</p>
      <p>Madison is a clear example. The City of Madison requires sidewalks to be shoveled by noon the day after the snow stops, across the full width and including curb ramps that border the property. The city says salt can be used when it is above 15°F, sand should go on ice that cannot be removed, and fines are possible for uncleared walks and for excessive salt. Other cities and villages set their own deadlines, so check with your clerk or public works department.</p>
      <p>RAH Solutions sets up winter accounts for driveways and commercial lots in the fall. See <a href="/services/snow-removal/">snow removal</a> for what the service covers.</p>

      <section class="post-faq" aria-labelledby="faq">
        <h2 id="faq">Snow removal contract questions</h2>
        <?php echo faqList($faqs, 1); ?>
      </section>
      <p class="post-sources">Sources: City of Madison, <a href="https://www.cityofmadison.com/live-work/winter/snow-removal/sidewalks" rel="noopener" target="_blank">Sidewalk snow removal rules</a>; UW–Madison Extension, <a href="https://hort.extension.wisc.edu/articles/winter-salt-injury-and-salt-tolerant-landscape-plants/" rel="noopener" target="_blank">Winter Salt Injury and Salt-tolerant Landscape Plants</a>; University of Minnesota Extension, <a href="https://extension.umn.edu/lawns-and-landscapes/effects-deicing-salts-landscapes" rel="noopener" target="_blank">The effects of deicing salts on landscapes</a>; National Ready Mixed Concrete Association, <a href="https://www.concreteanswers.org/CIPs/CIP2.htm" rel="noopener" target="_blank">CIP 2: Scaling Concrete Surfaces</a>.</p>
    </article>

    <aside class="post-rail" aria-label="Article tools">
      <nav class="post-toc" aria-label="Table of contents">
        <h2>In this article</h2>
        <ol><?php foreach ($toc as $t): ?><li><a href="#<?php echo $t[0]; ?>"><?php echo e($t[1]); ?></a></li><?php endforeach; ?></ol>
      </nav>
      <div class="post-cta">
        <strong>Need a winter account?</strong>
        <a class="btn btn-accent" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> <?php echo e($phone); ?></a>
        <button type="button" class="btn btn-outline-white" data-open-estimate>Request an estimate</button>
      </div>
    </aside>
  </div>
</div>

<?php $ctaBandId = 'band-post-snow'; $ctaBandHeading = 'Set up your winter account before the first snow'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php'; ?>

<section class="section post-related" aria-labelledby="related-h2">
  <div class="container">
    <h2 id="related-h2" class="sr-only">Related services and articles</h2>
    <h3>Related services</h3>
    <div class="related-svc">
      <a href="/services/snow-removal/"><?php echo icon('snowflake', 20); ?> Snow removal</a>
      <a href="/services/fall-yard-cleanup/"><?php echo icon('leaf', 20); ?> Fall yard cleanup</a>
      <a href="/services/commercial-lawn-care/"><?php echo icon('building-2', 20); ?> Commercial lawn care</a>
      <a href="<?php echo areaHref(areaBySlug('madison-wi')); ?>"><?php echo icon('map-pin', 20); ?> Madison service area</a>
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
