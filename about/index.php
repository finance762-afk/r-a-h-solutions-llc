<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$currentPage     = 'about';
$pageType        = 'about';
$pageTitle       = 'About RAH Solutions LLC | Edgerton, WI Landscaper';
$pageDescription = 'RAH Solutions LLC is a family-owned landscaper in Edgerton, WI, started by Robert Harried in 2023. Lawn care, landscaping, concrete and snow removal.';
$canonicalUrl    = $siteUrl . '/about/';
$pageCss         = ['inner'];
$pageStyle       = <<<CSS
/* about: story photo with facet cut, equipment list, review quote */
.page-about .story-photo figure { clip-path: polygon(0 0, 100% 0, 100% 92%, 90% 100%, 0 100%); }
.page-about .gear-list { list-style: none; padding: 0; margin: 1rem 0 0; display: grid; grid-template-columns: 1fr 1fr; gap: .5rem 1.25rem; }
.page-about .gear-list li { display: flex; gap: .55rem; align-items: flex-start; color: var(--color-ink-2); }
.page-about .gear-list svg { color: var(--color-primary); flex: 0 0 auto; margin-top: 3px; }
.page-about .review-quote { margin: 1.4rem 0; padding: 1.2rem 1.4rem; border-left: 4px solid var(--color-accent); background: var(--color-mist); border-radius: 0 var(--radius-lg) var(--radius-lg) 0; }
.page-about .review-quote p { margin: 0 0 .5rem; font-size: 1.05rem; color: var(--color-ink); }
.page-about .review-quote cite { font-style: normal; font-size: .88rem; color: var(--color-muted); }
.page-about .review-quote a { color: var(--color-primary); }
@media (max-width: 560px) { .page-about .gear-list { grid-template-columns: 1fr; } }
CSS;

$faqs = [
    ['Who owns RAH Solutions LLC?',
     'Robert Harried owns and runs RAH Solutions LLC. He started the company in Edgerton, Wisconsin in 2023, and it is family owned.'],
    ['Is RAH Solutions LLC licensed and insured?',
     'Yes. RAH Solutions LLC is a licensed and insured Wisconsin limited liability company. Ask for proof of insurance before your project starts and it will be provided.'],
    ['Where is RAH Solutions located?',
     'RAH Solutions is based in Edgerton, WI 53534 and works at customers’ properties. There is no storefront to visit; call (608) 501-5123 or send the form and Robert will come to you. The <a href="/service-area/">service area page</a> lists the towns covered.'],
    ['What are RAH Solutions’ hours?',
     'Monday through Friday, 8:00 AM to 5:00 PM. The office is closed Saturday and Sunday.'],
];
$schemaNodes = [
    webPageNode('AboutPage'),
    breadcrumbNode([['Home', '/'], ['About', '/about/']]),
    ['@type' => 'Person', '@id' => $siteUrl . '/about/#owner', 'name' => $ownerName, 'jobTitle' => 'Owner', 'worksFor' => ['@id' => $siteUrl . '/#organization']],
    faqSchemaNode($faqs),
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-about">

<section class="hero hero--interior inner-hero inner-hero--split" aria-label="About RAH Solutions LLC">
  <div class="container">
    <div class="inner-hero__copy">
      <?php echo breadcrumbs([['Home', '/'], ['About', '/about/']]); ?>
      <span class="eyebrow">Family owned in Edgerton since <?php echo $yearEstablished; ?></span>
      <h1>About RAH Solutions LLC in Edgerton, WI</h1>
      <p class="page-answer">RAH Solutions LLC is a family-owned landscaper in Edgerton, Wisconsin, started by Robert Harried in <?php echo $yearEstablished; ?>. One local crew handles lawn care, landscaping, concrete, excavating and snow removal for homes and businesses in Rock and Dane counties.</p>
    </div>
    <div class="inner-hero__stats">
      <div><b><?php echo $yearEstablished; ?></b><span>Started in Edgerton</span></div>
      <div><b>Family</b><span>Owned and operated</span></div>
      <div><b><?php echo count($services); ?></b><span>Services, one crew</span></div>
      <div><b><?php echo e($gbpRating); ?> ★</b><span><?php echo $gbpReviewCount; ?> Google reviews</span></div>
    </div>
  </div>
</section>

<section class="section" aria-labelledby="story-h2">
  <div class="container story-grid">
    <div class="story-copy reveal-left">
      <span class="eyebrow-label">Our story</span>
      <h2 id="story-h2">How did RAH Solutions get started?</h2>
      <p>RAH Solutions LLC began in <?php echo $yearEstablished; ?>, when Robert Harried started a landscaping company in his own town. It is a local, family-owned business, not a franchise or a regional chain, and the name on the truck is the owner’s initials.</p>
      <p>The idea behind it is simple: show up, do the work right, and treat every property the way you would treat your own. Robert is the person who walks your yard, gives the estimate and answers the phone afterward.</p>
      <blockquote class="review-quote">
        <p>“Robert got us an estimate for putting our downspout underground. He listen to our concerns, got the job done nicely and cleaned up after he was done. Strongly recommend RAH.”</p>
        <cite>May K., <a href="<?php echo e($googleReviewsUrl); ?>" target="_blank" rel="noopener">Google review</a></cite>
      </blockquote>
      <h2>What does RAH Solutions do, and who does it work for?</h2>
      <p>RAH Solutions provides 15 outdoor services for homeowners and businesses, from <a href="/services/lawn-maintenance/">lawn maintenance</a> and <a href="/services/landscape-installation/">landscape installation</a> to <a href="/services/concrete-services/">concrete</a>, <a href="/services/excavating-services/">excavating</a> and <a href="/services/snow-removal/">snow removal</a>. Covering all four seasons means one company gets to know a property and its problem spots.</p>
      <p>The company owns the equipment the work needs, which keeps scheduling in its own hands:</p>
      <ul class="gear-list">
        <li><?php echo icon('check', 18); ?> Zero-turn mowers</li>
        <li><?php echo icon('check', 18); ?> Pickup trucks with snow plows</li>
        <li><?php echo icon('check', 18); ?> Skid steer and compact track loader</li>
        <li><?php echo icon('check', 18); ?> Excavator</li>
        <li><?php echo icon('check', 18); ?> Dump trailer</li>
        <li><?php echo icon('check', 18); ?> Utility vehicle with a snow blade</li>
      </ul>
    </div>
    <div class="story-photo reveal-right">
      <figure><?php echo picture('rah-truck-dump-trailer', 'RAH Solutions pickup truck towing a red dump trailer on a paved lot', '(max-width: 860px) 100vw, 45vw'); ?><figcaption>A RAH Solutions truck and dump trailer</figcaption></figure>
    </div>
  </div>
</section>

<section class="section values-section" aria-labelledby="values-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">How we work</span>
      <h2 id="values-h2">What can you expect when you hire RAH Solutions?</h2>
      <p>RAH Solutions LLC works the same way on a single mowing visit and on a full backyard project.</p>
    </div>
    <div class="values-grid" data-p1-dynamic>
      <article class="value-card reveal-up reveal-delay-1"><span><?php echo icon('search', 22); ?></span><h3>The property is looked at first</h3><p>Soil, drainage, sun and access differ from yard to yard. Robert sees yours before proposing anything.</p></article>
      <article class="value-card reveal-up reveal-delay-2"><span><?php echo icon('clipboard-list', 22); ?></span><h3>A written estimate</h3><p>You get a clear written price for the work discussed. Estimates are free and there is no pressure to decide on the spot.</p></article>
      <article class="value-card reveal-up reveal-delay-3"><span><?php echo icon('map-pin', 22); ?></span><h3>Local knowledge</h3><p>Slow-draining soil, deep frost and a short seeding window shape every job in southern Wisconsin, and the plan accounts for them.</p></article>
      <article class="value-card reveal-up reveal-delay-4"><span><?php echo icon('thumbs-up', 22); ?></span><h3>A walk-through at the end</h3><p>You walk the finished work with the crew, and the site is cleaned up before the job is called done.</p></article>
    </div>
  </div>
</section>

<section class="trust-band texture-grain" aria-label="Credentials">
  <span class="grain-layer" aria-hidden="true"></span>
  <div class="container">
    <div class="trust-item"><?php echo icon('shield-check', 22); ?><b>Licensed &amp; insured</b><span>Wisconsin limited liability company</span></div>
    <div class="trust-item"><?php echo icon('users', 22); ?><b>Family owned</b><span>Owner Robert Harried</span></div>
    <div class="trust-item"><?php echo icon('star', 22); ?><b><?php echo e($gbpRating); ?> on Google</b><a href="<?php echo e($googleReviewsUrl); ?>" target="_blank" rel="noopener"><?php echo $gbpReviewCount; ?> reviews, read them</a></div>
    <div class="trust-item"><?php echo icon('clipboard-list', 22); ?><b>Free estimates</b><span>On site, in writing</span></div>
  </div>
</section>

<?php $ctaBandId = 'cta-band'; $ctaBandHeading = 'Have Robert take a look at your property'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php'; ?>

<section class="section" aria-labelledby="faq-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Company FAQ</span>
      <h2 id="faq-h2">What else should you know about RAH Solutions?</h2>
    </div>
    <?php echo faqList($faqs, 1); ?>
  </div>
</section>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
