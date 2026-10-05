<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$currentPage     = 'contact';
$pageType        = 'contact';
$pageTitle       = 'Contact RAH Solutions LLC | Free Estimates in Edgerton, WI';
$pageDescription = 'Call RAH Solutions LLC at (608) 501-5123 or send the form for a free on-site estimate in Edgerton, WI. Open Monday to Friday, 8 AM to 5 PM.';
$canonicalUrl    = $siteUrl . '/contact/';
$pageCss         = ['inner'];
$pageStyle       = <<<CSS
/* contact: form card with green top rule, mist tiles, area map panel */
.page-contact .contact-form-card { border-top: 4px solid var(--color-accent); }
.page-contact .contact-tile { background: var(--color-mist); }
.page-contact .map-panel { margin-top: clamp(2rem, 4vw, 3rem); display: grid; grid-template-columns: minmax(0, 1.4fr) minmax(0, 1fr); gap: clamp(1.25rem, 4vw, 3rem); align-items: center; }
.page-contact .map-panel .map-embed { box-shadow: var(--shadow); border: 1px solid var(--color-line); }
.page-contact .map-panel__copy { display: grid; gap: .8rem; }
.page-contact .map-panel__copy p { margin: 0; color: var(--color-ink-2); }
.page-contact .map-panel__copy .btn { justify-self: start; }
@media (max-width: 860px) { .page-contact .map-panel { grid-template-columns: 1fr; } }
CSS;

$schemaNodes = [webPageNode('ContactPage'), breadcrumbNode([['Home', '/'], ['Contact', '/contact/']])];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-contact">

<section class="hero hero--interior inner-hero" aria-label="Contact RAH Solutions LLC">
  <div class="container">
    <?php echo breadcrumbs([['Home', '/'], ['Contact', '/contact/']]); ?>
    <span class="eyebrow">Free estimates · Edgerton, WI</span>
    <h1>Contact RAH Solutions LLC for a Free Estimate</h1>
    <p class="page-answer">Call RAH Solutions LLC at <?php echo e($phone); ?>, Monday to Friday from 8 AM to 5 PM, or send the form below. Every estimate is free and done at your property, with no pressure and no obligation.</p>
    <div class="hero-actions">
      <a class="btn btn-accent btn-lg" href="<?php echo telHref(); ?>"><?php echo icon('phone', 18); ?> Call <?php echo e($phone); ?></a>
    </div>
  </div>
</section>

<section class="section contact-wrap" aria-labelledby="form-h2">
  <div class="container contact-grid">
    <div class="card contact-form-card">
      <span class="eyebrow-label">Request an estimate</span>
      <h2 id="form-h2">How do you request an estimate online?</h2>
      <p>Fill in the form and RAH Solutions will get back to you during business hours to set up a visit. The more you say about the yard, lot or driveway, the better the first call goes.</p>
      <?php $formId = 'contact'; $formSubmitLabel = 'Send my estimate request'; include $_SERVER['DOCUMENT_ROOT'] . '/includes/lead-form.php'; ?>
    </div>
    <div class="contact-side">
      <div class="contact-tile"><span><?php echo icon('phone', 22); ?></span><b>Phone</b><a href="<?php echo telHref(); ?>"><?php echo e($phone); ?></a></div>
      <div class="contact-tile"><span><?php echo icon('mail', 22); ?></span><b>Email</b><a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a></div>
      <div class="contact-tile"><span><?php echo icon('map-pin', 22); ?></span><b>Based in</b><p><?php echo e($addressLine); ?>. RAH Solutions works at your property; there is no storefront. <a href="/service-area/">See all towns served</a></p></div>
      <div class="contact-tile"><span><?php echo icon('clock', 22); ?></span><b>Business hours</b>
        <table class="hours-table"><tbody>
          <tr><td>Monday – Friday</td><td>8:00 AM – 5:00 PM</td></tr>
          <tr><td>Saturday</td><td>Closed</td></tr>
          <tr><td>Sunday</td><td>Closed</td></tr>
        </tbody></table>
      </div>
      <div class="contact-tile"><span><?php echo icon('share-2', 22); ?></span><b>Find us online</b><p><a href="<?php echo e($googleBusinessProfile); ?>" target="_blank" rel="noopener">Google (<?php echo e($gbpRating); ?> ★, <?php echo $gbpReviewCount; ?> reviews)</a> · <a href="<?php echo e($facebookUrl); ?>" target="_blank" rel="noopener">Facebook</a></p></div>
      <div class="card">
        <h3>What happens after you contact us?</h3>
        <ol class="next-steps">
          <li><strong>We get back to you</strong>During business hours, to learn about the job and set a visit.</li>
          <li><strong>A free on-site look</strong>Robert walks the property with you and checks soil, slope and access.</li>
          <li><strong>A written estimate</strong>A clear price for the work discussed.</li>
        </ol>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="map-panel">
      <div class="map-embed reveal-left">
        <iframe src="https://www.google.com/maps?q=Edgerton,+WI+53534&amp;z=10&amp;output=embed" title="Map of the Edgerton, Wisconsin area served by RAH Solutions LLC" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="map-panel__copy reveal-right">
        <span class="eyebrow-label">Service area</span>
        <h2>Where does RAH Solutions work?</h2>
        <p>RAH Solutions LLC is a service-area business based in Edgerton. The crew travels to homes and businesses in Edgerton, Stoughton, Janesville, Madison, Milton, Beloit and seven more towns nearby.</p>
        <a class="btn btn-secondary" href="<?php echo e($googleBusinessProfile); ?>" target="_blank" rel="noopener"><?php echo icon('external-link', 18); ?> View the Google profile</a>
      </div>
    </div>
  </div>
</section>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
