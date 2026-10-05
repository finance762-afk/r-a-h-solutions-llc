<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/blog-data.php';
?>
<?php
$currentPage     = 'blog';
$pageType        = 'blog';
$pageTitle       = 'Yard & Lawn Blog for Southern Wisconsin | RAH Solutions LLC';
$pageDescription = 'Practical yard advice for Edgerton, WI and southern Wisconsin from RAH Solutions LLC: seeding and aeration timing, sod, mulch, concrete steps and snow contracts.';
$canonicalUrl    = $siteUrl . '/blog/';
$pageCss         = ['inner'];
$pageStyle       = <<<CSS
/* blog index: lead story + three-up grid on tinted ground */
.page-blog .blog-wrap { background: var(--color-paper-2); }
.page-blog .blog-lead:hover { box-shadow: var(--shadow-lg); }
.page-blog .blog-lead h2 { font-size: var(--fs-h2); }
.page-blog .blog-lead .blog-card__cta { color: var(--color-primary); font-weight: 700; }
CSS;

$cats = array_values(array_unique(array_map(fn($p) => $p['category'], $blogPosts)));
$schemaNodes = [
    webPageNode('CollectionPage'),
    breadcrumbNode([['Home', '/'], ['Blog', '/blog/']]),
    ['@type' => 'Blog', '@id' => $siteUrl . '/blog/#blog', 'name' => 'RAH Solutions LLC Blog', 'publisher' => ['@id' => $siteUrl . '/#organization'],
     'blogPost' => array_map(fn($p) => ['@type' => 'BlogPosting', 'headline' => $p['title'], 'url' => $siteUrl . '/blog/' . $p['slug'] . '/', 'datePublished' => $p['dateISO']], $blogPosts)],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-blog">

<section class="hero hero--interior inner-hero" aria-label="Yard and lawn blog">
  <div class="container">
    <?php echo breadcrumbs([['Home', '/'], ['Blog', '/blog/']]); ?>
    <span class="eyebrow">Yard advice for southern Wisconsin</span>
    <h1>The RAH Solutions Yard &amp; Lawn Blog</h1>
    <p class="page-answer">Straight answers about yards in southern Wisconsin from RAH Solutions LLC in Edgerton: when to aerate and seed, sod or seed for a new lawn, how much mulch to order, when concrete steps need replacing, and what to ask before signing a snow contract.</p>
  </div>
</section>

<section class="section blog-wrap" aria-labelledby="posts-h2">
  <div class="container">
    <h2 id="posts-h2" class="sr-only">Latest articles</h2>
    <ul class="blog-cats" aria-label="Topics">
      <?php foreach ($cats as $c): ?><li><?php echo e($c); ?></li><?php endforeach; ?>
    </ul>
    <?php $lead = $blogPosts[0]; ?>
    <a class="blog-lead reveal-up" href="<?php echo postHref($lead); ?>">
      <div class="blog-lead__img"><?php echo picture($lead['image'], $lead['alt'], '(max-width: 860px) 100vw, 60vw'); ?></div>
      <div class="blog-lead__body">
        <span class="blog-card__category"><?php echo e($lead['category']); ?></span>
        <h2><?php echo e($lead['title']); ?></h2>
        <p><?php echo e($lead['excerpt']); ?></p>
        <span class="blog-card__meta"><?php echo e($lead['date']); ?> · <?php echo e($lead['readtime']); ?></span>
        <span class="blog-card__cta">Read the guide →</span>
      </div>
    </a>
    <div class="blog-grid" data-p1-dynamic>
      <?php foreach (array_slice($blogPosts, 1) as $i => $bp) echo blogCard($bp, $i); ?>
    </div>
  </div>
</section>

<?php $ctaBandId = 'band-blog'; $ctaBandHeading = 'Have a yard question we have not answered?'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/cta-band.php'; ?>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
