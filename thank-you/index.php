<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$currentPage     = 'thank-you';
$pageType        = 'other';
$noindex         = true;
$pageTitle       = 'Thank You | RAH Solutions LLC';
$pageDescription = 'Thanks for requesting a free estimate from RAH Solutions LLC in Edgerton, WI. Here is what happens next and how to reach Robert during business hours.';
$canonicalUrl    = $siteUrl . '/thank-you/';
$pageCss         = ['inner'];
$pageStyle       = <<<CSS
/* thank-you: numbered next steps, review prompt */
.page-thank-you .next-steps { list-style: none; padding: 0; margin: 0; display: grid; gap: .7rem; text-align: left; width: 100%; counter-reset: step; }
.page-thank-you .next-steps li { counter-increment: step; display: grid; grid-template-columns: 36px 1fr; gap: .8rem; align-items: start; padding: .9rem 1rem; border-radius: var(--radius-lg); background: var(--color-card-tint-1); border: 1px solid var(--color-line); }
.page-thank-you .next-steps li::before { content: counter(step); width: 36px; height: 36px; border-radius: 50%; display: grid; place-items: center; background: var(--color-primary); color: var(--color-white); font-family: var(--font-accent); font-size: 1.1rem; }
.page-thank-you .review-prompt { margin-top: .5rem; padding: 1.2rem 1.3rem; border-radius: var(--radius-lg); background: var(--color-card-tint-3); display: grid; gap: .7rem; justify-items: center; width: 100%; }
.page-thank-you .review-prompt p { margin: 0; color: var(--color-ink-2); }
CSS;

$schemaNodes = [webPageNode(), breadcrumbNode([['Home', '/'], ['Thank You', '/thank-you/']])];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-thank-you">

<section class="hero hero--interior inner-hero" aria-label="Request received">
  <div class="container">
    <?php echo breadcrumbs([['Home', '/'], ['Thank You', '/thank-you/']]); ?>
    <span class="eyebrow">Request received</span>
    <h1>Thanks, your request is in</h1>
    <p class="page-answer">RAH Solutions LLC has your estimate request. You will hear back during business hours, <?php echo e($hoursLong); ?>.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="utility-card">
      <span class="big-icon"><?php echo icon('check-circle', 34); ?></span>
      <h2>What happens next?</h2>
      <ol class="next-steps">
        <li><span>RAH Solutions reviews your request and contacts you at the number you provided during business hours (<?php echo e($hoursDisplay); ?>).</span></li>
        <li><span>You set a time for a free on-site estimate. Robert walks the yard, lot or driveway with you and talks through options.</span></li>
        <li><span>You get a written estimate with no pressure to decide on the spot.</span></li>
      </ol>

      <p>Need it sooner?</p>
      <div class="utility-links">
        <a class="btn btn-accent btn-lg" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> Call <?php echo e($phone); ?></a>
        <a class="btn btn-secondary" href="/">Back to home</a>
      </div>

      <p>While you wait, read about our <a href="/services/">services</a> or browse the <a href="/blog/">yard and lawn blog</a> for answers on seeding, mulch, concrete steps and snow contracts.</p>

      <div class="review-prompt">
        <p>Already worked with RAH Solutions? A short Google review helps neighbors find a local landscaper.</p>
        <a class="btn btn-primary" href="<?php echo e($googleWriteReviewUrl); ?>" target="_blank" rel="noopener"><?php echo icon('star', 18); ?> Happy with our work? Leave us a Google review</a>
      </div>
    </div>
  </div>
</section>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
