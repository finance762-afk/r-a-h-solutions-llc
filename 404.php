<?php
http_response_code(404);
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$currentPage     = '404';
$pageType        = 'other';
$noindex         = true;
$pageTitle       = 'Page Not Found | RAH Solutions LLC';
$pageDescription = 'This page is not on the RAH Solutions LLC site. Find lawn care, landscaping, concrete and snow removal in Edgerton, WI, or call (608) 501-5123.';
$canonicalUrl    = $siteUrl . '/404';
$pageCss         = ['inner'];
$pageStyle       = <<<CSS
/* 404: service link list in tinted tiles */
.page-404 .lost-links { list-style: none; padding: 0; margin: 0; width: 100%; display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: .6rem; text-align: left; }
.page-404 .lost-links a { display: flex; align-items: center; gap: .6rem; padding: .85rem 1rem; border-radius: var(--radius-lg); background: var(--color-card-tint-1); border: 1px solid var(--color-line); color: var(--color-ink); font-weight: 600; text-decoration: none; transition: border-color .2s var(--ease), transform .2s var(--ease); }
.page-404 .lost-links li:nth-child(even) a { background: var(--color-card-tint-3); }
.page-404 .lost-links a:hover { border-color: var(--color-primary); transform: translateY(-2px); }
.page-404 .lost-links svg { color: var(--color-primary); flex-shrink: 0; }
CSS;

$schemaNodes = [webPageNode()];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-404">

<section class="hero hero--interior inner-hero" aria-label="Page not found">
  <div class="container">
    <span class="eyebrow">Error 404</span>
    <h1>That page isn’t here</h1>
    <p class="page-answer">The link may be old or mistyped. Everything RAH Solutions LLC offers is one click away below, or call <?php echo e($phone); ?> and ask directly.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="utility-card">
      <span class="big-icon"><?php echo icon('search', 34); ?></span>
      <h2>Where would you like to go?</h2>
      <ul class="lost-links" data-p1-dynamic>
        <?php foreach ($services as $lostSvc): ?>
        <li><a href="/services/<?php echo $lostSvc['slug']; ?>/"><?php echo icon($lostSvc['icon'], 20); ?> <?php echo e($lostSvc['name']); ?></a></li>
        <?php endforeach; ?>
        <li><a href="/services/"><?php echo icon('layers', 20); ?> All services</a></li>
        <li><a href="/service-area/"><?php echo icon('map-pin', 20); ?> Service area</a></li>
        <li><a href="/contact/"><?php echo icon('mail', 20); ?> Contact</a></li>
      </ul>
      <div class="utility-links">
        <a class="btn btn-secondary" href="/"><?php echo icon('home', 18); ?> Back to home</a>
        <a class="btn btn-accent" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> Call <?php echo e($phone); ?></a>
      </div>
    </div>
  </div>
</section>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
