<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';
?>
<?php
$currentPage     = 'home';
$pageType        = 'home';
$pageTitle       = 'Landscaping & Lawn Care in Edgerton, WI | RAH Solutions LLC';
$pageDescription = 'RAH Solutions LLC is a family-owned landscaper in Edgerton, WI: lawn care, landscaping, concrete, excavating and snow removal. Free estimates. (608) 501-5123.';
$canonicalUrl    = $siteUrl . '/';
$heroPreload     = heroPreload($heroImage, '(max-width: 900px) 100vw, 55vw');
$pageCss         = ['home'];
$pageStyle       = <<<CSS
/* homepage-only: balanced hero headline, pretty-wrapped answer, compact proof strip on mobile */
.home-hero .hero-title { text-wrap: balance; }
.home-hero .hero-answer { text-wrap: pretty; }
@media (max-width: 800px) { .proof--home .proof-item b { font-size: 1.3rem; } }
CSS;

$homeFaqs = [
    ['What does RAH Solutions LLC do?',
     'RAH Solutions LLC is a landscaper in Edgerton, Wisconsin that handles lawn care, landscape installation, mulching, shrub trimming, hardscaping, concrete flatwork and steps, excavating and grading, spring and fall cleanups, and snow removal. One local crew covers all 15 services, so the same people can mow in July and plow in January. See the full list on the <a href="/services/">services page</a>.'],
    ['Which towns does RAH Solutions serve?',
     'RAH Solutions works from Edgerton and serves Stoughton, Janesville, Madison, Milton, Beloit, Evansville, Fort Atkinson, Whitewater, McFarland, Oregon, Brodhead and Watertown, plus the rural addresses between them. The <a href="/service-area/">service area page</a> lists every town and county.'],
    ['Are estimates free?',
     'Yes. RAH Solutions gives free on-site estimates. Owner Robert Harried looks at the property in person, talks through what you want, and follows up with a written price. There is no charge and no obligation.'],
    ['Is RAH Solutions LLC licensed and insured?',
     'Yes. RAH Solutions LLC is a licensed and insured Wisconsin limited liability company. Ask for proof of insurance before any project starts and it will be provided.'],
    ['Does RAH Solutions plow commercial lots as well as driveways?',
     'Yes. RAH Solutions provides <a href="/services/snow-removal/">snow removal</a> for residential driveways and commercial lots with its own plow trucks and equipment. Winter accounts are set up in the fall, so call before the first storm.'],
    ['When is the best time to seed a lawn in southern Wisconsin?',
     'Mid-August through mid-September. Soil is still warm, nights are cooler and weeds are slowing down, which is what Kentucky bluegrass and fescue seedlings need. The <a href="/blog/when-to-aerate-and-overseed-southern-wisconsin/">aeration and overseeding guide</a> explains the timing, and <a href="/services/lawn-restoration/">lawn restoration</a> covers what the crew does.'],
];

$schemaNodes = [webPageNode(), faqSchemaNode($homeFaqs)];

// Recent work strip — captions describe what is in the photo, nothing the client did not state.
$galleryItems = [
    ['concrete-patio-steps-stone-ranch', 'New concrete patio with a rounded corner and steps behind a stone ranch house', 'Concrete', 'Patio and back steps, poured with a rounded corner.', true],
    ['mulched-bed-steel-edging-driveway', 'Mulched planting bed with metal edging beside a lawn and a rural driveway', 'Landscaping', 'New edging and fresh mulch along a driveway bed.', false],
    ['plow-truck-driveway-dusk', 'Pickup truck with a snow plow clearing a residential driveway at dusk', 'Snow removal', 'Driveway plowing in a new subdivision.', false],
    ['lawn-mowed-stripes-corner-lot', 'Freshly mowed corner-lot lawn with visible mowing stripes', 'Lawn care', 'Corner lot, mowed and striped.', true],
    ['track-loader-grading-pad-base', 'Compact track loader beside graded soil and a compacted gravel pad', 'Excavating', 'Yard regraded and a pad base compacted.', false],
    ['concrete-patio-aerial-view', 'Aerial view of a new concrete patio with steps next to a landscaped bed', 'Concrete', 'The same style of patio from above, with control joints cut.', false],
    ['barnyard-cleared-after-cleanup', 'Farmyard between red barns after overgrowth and debris were cleared', 'Cleanup', 'Barnyard cleared of brush and debris.', true],
    ['mulched-bed-edging-lawn-border', 'Long mulched bed with new edging along a mowed lawn', 'Mulching', 'Bed re-edged and mulched along a tree line.', false],
    ['excavator-skid-steer-culvert', 'Skid steer and excavator working dark soil next to a drainage culvert', 'Excavating', 'Drainage work with a new culvert pipe.', false],
    ['porch-steps-new-after', 'New concrete steps, stoop and walkway at a front porch', 'Concrete', 'New front steps and walk.', false],
];
$areasByCounty = [];
foreach ($serviceAreas as $homeArea) { $areasByCounty[$homeArea['county']][] = $homeArea; }
$homeServices = array_map('serviceBySlug', $homeServiceSlugs);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="hero hero--light home-hero" aria-label="RAH Solutions LLC, landscaping and lawn care in Edgerton, WI">
  <svg class="floating-facet home-hero__facet" viewBox="0 0 120 110" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linejoin="round" aria-hidden="true"><path d="M34 6H86L112 32 60 104 8 32ZM8 32H112M34 6 44 32 60 6 76 32 86 6M44 32 60 104 76 32"/></svg>
  <div class="container hero-grid hero-grid--visual">
    <div class="hero-text">
      <span class="eyebrow">Edgerton, WI · Rock &amp; Dane counties · Since <?php echo $yearEstablished; ?></span>
      <h1 class="hero-title">Landscaping and Lawn Care in <span class="text-accent">Edgerton, WI</span></h1>
      <p class="hero-answer">RAH Solutions LLC is a family-owned landscaper in Edgerton, Wisconsin. Since 2023, owner Robert Harried’s crew has handled lawn care, landscaping, concrete, excavating and snow removal for homes and businesses across Rock and Dane counties, with free on-site estimates.</p>
      <div class="hero-actions">
        <button type="button" class="btn btn-primary btn-lg hero-form-open" data-open-estimate>Get a free estimate</button>
        <a class="link-call" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> or call <?php echo e($phone); ?></a>
      </div>
      <ul class="hero-chips">
        <li><?php echo icon('users', 16); ?> Family owned</li>
        <li><?php echo icon('shield-check', 16); ?> Licensed &amp; insured</li>
        <li><?php echo icon('clipboard-list', 16); ?> Free on-site estimates</li>
      </ul>
    </div>
    <div class="hero-visual">
      <div class="hero-visual__img"><?php echo picture($heroImage, 'Large residential lawn mowed in even stripes under mature shade trees, with a ranch home in the background', '(max-width: 900px) 100vw, 55vw', ['eager' => true, 'class' => 'hero-img']); ?></div>
      <a class="photo-stack__tag" href="<?php echo e($googleReviewsUrl); ?>" target="_blank" rel="noopener"><b><?php echo e($gbpRating); ?> ★</b><span><?php echo $gbpReviewCount; ?> Google reviews</span></a>
      <?php $heroFormId = 'hero'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/hero-form.php'; ?>
    </div>
  </div>
</section>

<section class="proof proof--home" aria-label="RAH Solutions LLC at a glance">
  <div class="container">
    <div class="proof-row">
      <div class="proof-item"><b>Est. <em><?php echo $yearEstablished; ?></em></b><span>Started in Edgerton by Robert Harried</span></div>
      <div class="proof-item"><b>Family <em>owned</em></b><span>You deal with the owner, not a call center</span></div>
      <div class="proof-item"><b><em><?php echo e($gbpRating); ?></em> ★ Google</b><span><?php echo $gbpReviewCount; ?> reviews as of <?php echo e($gbpAsOf); ?></span></div>
      <div class="proof-item"><b><em><?php echo count($serviceAreas); ?></em> towns</b><span>Edgerton, Stoughton, Janesville, Madison and nearby</span></div>
    </div>
  </div>
</section>

<section class="section home-services" aria-label="Landscaping services">
  <div class="container-wide">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">What We Do</span>
      <h2>What <span class="text-accent">landscaping and lawn care</span> services does RAH Solutions offer in Edgerton?</h2>
      <p class="hero-answer">RAH Solutions LLC offers 15 outdoor services from one Edgerton crew: lawn mowing and restoration, sod, landscape installation, mulching, shrub trimming and garden care, patios and retaining walls, concrete flatwork and steps, excavating and drainage, spring and fall cleanups, and snow removal for driveways and commercial lots.</p>
      <span class="section-subtitle">One crew, all four seasons</span>
      <p class="prose">The eight below are the most requested. Every service has its own page with what is included and how the work is done.</p>
    </div>
    <div class="services-grid" data-p1-dynamic>
      <?php echo serviceCards($homeServices, '(max-width: 440px) 100vw, (max-width: 1000px) 45vw, 340px'); ?>
    </div>
    <p class="services-all"><a href="/services/" class="btn btn-secondary">View All <?php echo count($services); ?> Services →</a></p>
  </div>
</section>

<section class="section ground-band texture-grain edge-facet-top" aria-labelledby="ground-h2">
  <span class="grain-layer" aria-hidden="true"></span>
  <svg class="floating-facet ground-band__facet float-animate-slow" viewBox="0 0 120 110" fill="none" stroke="currentColor" stroke-width="1" stroke-linejoin="round" aria-hidden="true"><path d="M34 6H86L112 32 60 104 8 32ZM8 32H112M34 6 44 32 60 6 76 32 86 6M44 32 60 104 76 32"/></svg>
  <div class="container">
    <div class="ground-head reveal-left">
      <span class="eyebrow-label">Built for southern Wisconsin</span>
      <h2 id="ground-h2">What does southern Wisconsin weather do to a yard, and how does RAH Solutions plan for it?</h2>
      <p>RAH Solutions LLC plans every job around four local conditions: soil that holds water, a deep winter frost, cool-season grass with a short ideal seeding window, and snow that can fall from November into April.</p>
    </div>
    <div class="ground-grid" data-p1-dynamic>
      <article class="ground-card reveal-up reveal-delay-1">
        <span class="ground-card__icon"><?php echo icon('droplets', 26); ?></span>
        <h3>Soil that holds water</h3>
        <p>Many Rock and Dane County yards sit on silt loam over a heavier, clay-rich subsoil. Water moves through it slowly, so grading, downspout lines and bed drainage are settled before anything is planted or poured.</p>
      </article>
      <article class="ground-card reveal-up reveal-delay-2">
        <span class="ground-card__icon"><?php echo icon('snowflake', 26); ?></span>
        <h3>Freeze and thaw</h3>
        <p>The ground here freezes deep and heaves as it thaws. Patios, walks and steps get a compacted gravel base and control joints so slabs move as planned instead of cracking at random.</p>
      </article>
      <article class="ground-card reveal-up reveal-delay-3">
        <span class="ground-card__icon"><?php echo icon('sprout', 26); ?></span>
        <h3>Cool-season turf</h3>
        <p>Wisconsin lawns are Kentucky bluegrass, fescue and ryegrass. They grow hardest in spring and fall, so seeding and lawn repair are timed for late summer, not the heat of July.</p>
      </article>
      <article class="ground-card reveal-up reveal-delay-4">
        <span class="ground-card__icon"><?php echo icon('cloud-snow', 26); ?></span>
        <h3>Long winters</h3>
        <p>The same crew that mows in summer runs plow trucks in winter. Driveways and commercial lots are cleared with equipment the company owns, and winter accounts are set up before the first storm.</p>
      </article>
    </div>
  </div>
</section>

<section class="section recent-work" aria-labelledby="work-h2">
  <span class="floating-ring float-animate-slow ring-a" aria-hidden="true"></span>
  <div class="container">
    <div class="section-head section-head--row reveal-up">
      <div>
        <span class="eyebrow-label">Recent work</span>
        <h2 id="work-h2">Recent work from the RAH Solutions crew</h2>
        <p>Every photo here is a RAH Solutions job site: no stock images.</p>
      </div>
      <a class="btn btn-secondary" href="/services/concrete-services/">See concrete work</a>
    </div>
  </div>
  <div class="gallery-track" tabindex="0" role="region" aria-label="Recent work photos, scroll sideways" data-p1-dynamic>
    <?php foreach ($galleryItems as $g): ?>
    <figure class="gallery-item<?php echo $g[4] ? ' gallery-item--wide' : ''; ?>" data-category="<?php echo e(strtolower($g[2])); ?>">
      <?php echo picture($g[0], $g[1], $g[4] ? '(max-width: 600px) 80vw, 480px' : '(max-width: 600px) 60vw, 320px'); ?>
      <figcaption><span class="gallery-item__tag"><?php echo e($g[2]); ?></span><span class="gallery-item__cap"><?php echo e($g[3]); ?></span></figcaption>
    </figure>
    <?php endforeach; ?>
  </div>
  <div class="container">
    <p class="gallery-hint"><?php echo icon('arrow-right', 16); ?> Scroll sideways for more</p>
    <div class="ba-row">
      <figure class="ba reveal-scale">
        <?php echo picture('concrete-steps-cracked-before', 'Cracked, settled concrete steps along the side of a house before replacement', '(max-width: 760px) 100vw, 420px'); ?>
        <div class="ba__after"><?php echo picture('concrete-landing-formed-poured', 'The same side entry with a new concrete landing poured inside wood forms', '(max-width: 760px) 100vw, 420px'); ?></div>
        <span class="ba__tag ba__tag--before">Before</span><span class="ba__tag ba__tag--after">After</span>
        <input class="ba__range" type="range" min="0" max="100" value="50" aria-label="Drag to compare before and after">
        <span class="ba__divider" aria-hidden="true"></span>
        <figcaption>Side entry steps: cracked and settled, then torn out and re-poured.</figcaption>
      </figure>
      <div class="ba-copy reveal-right">
        <span class="eyebrow-label">Before and after</span>
        <h3>Concrete steps that had cracked and settled, replaced with a new landing</h3>
        <p>The old steps at this side entry had cracked and dropped away from the door. RAH Solutions removed them, formed a new landing and steps, and poured it as one piece. Drag the handle to compare.</p>
        <p>If your own steps are flaking, tilting or pulling away from the house, the guide to <a href="/blog/concrete-steps-repair-or-replace/">repairing or replacing concrete steps</a> shows how to tell which fix applies.</p>
        <a class="btn btn-primary" href="/services/concrete-services/">Concrete services</a>
      </div>
    </div>
  </div>
</section>

<section class="section about-process" aria-labelledby="about-h2">
  <div class="container">
    <div class="about-split about-split--offset">
      <div class="about-left reveal-left">
        <span class="eyebrow-label">Family owned since <?php echo $yearEstablished; ?></span>
        <h2 id="about-h2">Who is behind RAH Solutions LLC?</h2>
        <p>RAH Solutions LLC was started in <?php echo $yearEstablished; ?> by Robert Harried in Edgerton, Wisconsin. It is a family-owned local business, not a franchise, and Robert is the person who walks your property and gives you the estimate.</p>
        <p>The company works for homeowners and for businesses, from a weekly mowing route to a full backyard regrade. One customer on Google put it this way: Robert listened to their concerns, got the job done nicely and cleaned up afterward.</p>
        <h3 class="process-title">The RAH 4-Step Property Plan</h3>
        <ol class="process-steps">
          <li><b>Walk the property</b><span>Robert visits, listens to what you want and looks at soil, drainage, sun and access.</span></li>
          <li><b>Written estimate</b><span>You get a clear written price for the work discussed, free and with no obligation.</span></li>
          <li><b>The crew does the work</b><span>RAH Solutions’ own crew and equipment handle the job from start to cleanup.</span></li>
          <li><b>Walk the finished job</b><span>You walk the completed work together before it is called done.</span></li>
        </ol>
        <a class="btn btn-primary" href="/about/">More about RAH Solutions</a>
      </div>
      <div class="about-right about-image reveal-right">
        <div class="about-image-primary img-clipped"><?php echo picture('rah-truck-dump-trailer', 'RAH Solutions pickup truck towing a red dump trailer on a paved lot', '(max-width: 900px) 100vw, 480px'); ?></div>
        <div class="about-stat-card"><span class="big-number">Since <?php echo $yearEstablished; ?></span><span>family owned in Edgerton, WI</span></div>
      </div>
    </div>
  </div>
</section>

<?php /* Google reviews (Page One reviews feed: real reviews, refreshed nightly). Light band, never inside a reveal. */
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/google-reviews.php';
$p1HomeReviews = p1_google_reviews($slug, ['heading' => 'What customers say about RAH Solutions on Google', 'limit' => 6]);
if ($p1HomeReviews !== ''): ?>
<section class="section home-reviews" aria-label="Google reviews">
  <div class="container">
    <?php echo $p1HomeReviews; ?>
  </div>
</section>
<?php endif; ?>

<section class="section area-band slant-top" aria-labelledby="areas-h2">
  <div class="container">
    <div class="area-band__grid">
      <div class="area-band__copy reveal-up">
        <span class="eyebrow-label">Service area</span>
        <h2 id="areas-h2">Which towns does RAH Solutions serve from Edgerton?</h2>
        <p>RAH Solutions LLC serves <?php echo count($serviceAreas); ?> towns around Edgerton: south to Janesville and Beloit, north to Stoughton, McFarland, Oregon and Madison, and east to Fort Atkinson, Whitewater and Watertown. Each town page covers the lots, soils and yard work that are common there.</p>
        <a class="btn btn-secondary" href="/service-area/">See the full service area</a>
      </div>
      <div class="area-band__lists" data-p1-dynamic>
        <?php foreach ($areasByCounty as $county => $list): ?>
        <div class="area-group reveal-up">
          <h3><?php echo e($county); ?></h3>
          <ul>
            <?php foreach ($list as $a): ?>
            <li><a href="<?php echo areaHref($a); ?>"><?php echo icon('map-pin', 14); ?> <?php echo e($a['name'] . ', ' . $a['state']); ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<section class="section home-faq" aria-labelledby="faq-h2">
  <div class="container">
    <div class="section-head reveal-up">
      <span class="eyebrow-label">Straight answers</span>
      <h2 id="faq-h2">What do Edgerton property owners ask before hiring a landscaper?</h2>
    </div>
    <div class="faq-grid">
      <div><?php echo faqList(array_slice($homeFaqs, 0, 3), 1); ?></div>
      <div><?php echo faqList(array_slice($homeFaqs, 3), 1); ?></div>
    </div>
    <p class="faq-more"><a href="/faq/">All questions and answers →</a></p>
  </div>
</section>

<section class="section home-blog edge-curve-top" aria-labelledby="blog-h2">
  <div class="container">
    <div class="section-head section-head--row reveal-up">
      <div>
        <span class="eyebrow-label">From the blog</span>
        <h2 id="blog-h2">From the blog: yard advice for southern Wisconsin</h2>
      </div>
      <a class="btn btn-secondary" href="/blog/">View all articles</a>
    </div>
    <?php $feat = $blogPosts[0]; ?>
    <div class="blog-feature" data-p1-dynamic>
      <a class="blog-feature__main reveal-left" href="<?php echo postHref($feat); ?>">
        <div class="blog-feature__img"><?php echo picture($feat['image'], $feat['alt'], '(max-width: 900px) 100vw, 55vw'); ?></div>
        <div class="blog-feature__body">
          <span class="blog-card__category"><?php echo e($feat['category']); ?></span>
          <h3><?php echo e($feat['title']); ?></h3>
          <p><?php echo e($feat['excerpt']); ?></p>
          <span class="blog-card__meta"><?php echo e($feat['date']); ?> · <?php echo e($feat['readtime']); ?></span>
          <span class="blog-card__cta">Read the guide →</span>
        </div>
      </a>
      <div class="blog-feature__side">
        <?php foreach (array_slice($blogPosts, 1, 3) as $bp): ?>
        <a class="blog-mini reveal-right" href="<?php echo postHref($bp); ?>">
          <span class="blog-card__category"><?php echo e($bp['category']); ?></span>
          <strong><?php echo e($bp['title']); ?></strong>
          <span class="blog-card__meta"><?php echo e($bp['readtime']); ?></span>
        </a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<section class="section home-estimate" id="estimate" aria-labelledby="estimate-h2">
  <div class="container estimate">
    <div class="card estimate-card reveal-up">
      <span class="eyebrow-label">Free estimate</span>
      <h2 id="estimate-h2">Tell us about your property</h2>
      <?php $formId = 'estimate-section'; $formSubmitLabel = 'Request my free estimate'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/lead-form.php'; ?>
    </div>
    <div class="estimate-aside reveal-right">
      <h3>What happens next</h3>
      <ol class="next-steps">
        <li><strong>We get back to you</strong>During business hours, Monday through Friday, to set a time to see the property.</li>
        <li><strong>On-site look</strong>Robert walks the yard or lot with you and talks through options.</li>
        <li><strong>Written estimate</strong>A clear price for the work discussed. Free, with no obligation.</li>
      </ol>
      <div class="nap">
        <div><?php echo icon('phone', 18); ?><a href="<?php echo telHref(); ?>"><?php echo e($phone); ?></a></div>
        <div><?php echo icon('mail', 18); ?><a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a></div>
        <div><?php echo icon('map-pin', 18); ?><span><?php echo e($addressLine); ?> · we come to you</span></div>
        <div><?php echo icon('clock', 18); ?><span><?php echo e($hoursLong); ?></span></div>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
