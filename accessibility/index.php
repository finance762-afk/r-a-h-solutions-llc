<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$currentPage     = 'accessibility';
$pageType        = 'other';
$pageTitle       = 'Accessibility Statement | RAH Solutions LLC';
$pageDescription = 'RAH Solutions LLC of Edgerton, WI aims for WCAG 2.1 AA on rahsolutionsllc.com. See the accessibility features, known limits and how to report a barrier.';
$canonicalUrl    = $siteUrl . '/accessibility/';
$pageCss         = ['inner'];
$pageStyle       = <<<CSS
/* accessibility: feature checklist with check icons, help panel */
.page-accessibility .a11y-list { list-style: none; padding: 0; display: grid; gap: .55rem; }
.page-accessibility .a11y-list li { display: grid; grid-template-columns: 22px 1fr; gap: .6rem; align-items: start; }
.page-accessibility .a11y-list svg { margin-top: .2rem; color: var(--color-primary); }
.page-accessibility .help-panel { padding: 1.1rem 1.3rem; border-radius: var(--radius-lg); background: var(--color-card-tint-1); border: 1px solid var(--color-line); }
.page-accessibility .legal-contact { list-style: none; padding: 0; display: grid; gap: .35rem; }
CSS;

$schemaNodes = [webPageNode(), breadcrumbNode([['Home', '/'], ['Accessibility Statement', '/accessibility/']])];

$a11yFeatures = [
    'A “Skip to main content” link at the top of every page',
    'Full keyboard navigation, including the menus, the estimate form dialog and the mobile menu',
    'A visible focus outline on links, buttons and form fields',
    'Text alternatives (alt text) on meaningful images; decorative images are hidden from screen readers',
    'Text and button colors chosen to meet WCAG AA contrast ratios',
    'Animations turned off when your device is set to reduce motion',
    'Form fields with visible, programmatically associated labels and required fields marked',
    'Semantic headings and landmarks (header, navigation, main content, footer) for screen reader navigation',
    'Layouts that reflow on phones and when text is zoomed to 200%',
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-accessibility">

<section class="hero hero--interior inner-hero" aria-label="Accessibility Statement">
  <div class="container">
    <?php echo breadcrumbs([['Home', '/'], ['Accessibility Statement', '/accessibility/']]); ?>
    <span class="eyebrow">Legal</span>
    <h1>Accessibility Statement</h1>
    <p class="legal-meta">Effective date: <?php echo date('F j, Y'); ?></p>
  </div>
</section>

<section class="section legal-wrap">
  <div class="container legal-layout">
    <article class="legal-prose">

      <h2 id="commitment">1. Our Commitment</h2>
      <p><?php echo e($siteName); ?> wants everyone to be able to learn about our lawn care, landscaping, concrete and snow removal services and request an estimate, including people with disabilities. We work to make <a href="<?php echo e($siteUrl); ?>/"><?php echo e($domain); ?></a> (the “Site”) usable with assistive technologies such as screen readers, screen magnifiers, voice control and keyboard-only navigation.</p>

      <h2 id="conformance">2. Conformance Status</h2>
      <p>The Web Content Accessibility Guidelines (WCAG) define how to make web content more accessible to people with disabilities. The Site is designed to conform with <strong>WCAG 2.1 Level AA</strong>. We consider it partially conformant, meaning some content may not yet fully meet the standard. We review the Site as it changes and fix issues we find.</p>

      <h2 id="features">3. Accessibility Features on This Site</h2>
      <ul class="a11y-list" data-p1-dynamic>
        <?php foreach ($a11yFeatures as $feature): ?>
        <li><?php echo icon('check-circle', 18); ?><span><?php echo e($feature); ?></span></li>
        <?php endforeach; ?>
      </ul>
      <p>The Site does not currently host video or audio content, so captions and transcripts do not apply. If we add media, we will provide captions.</p>

      <h2 id="limitations">4. Known Limitations</h2>
      <ul>
        <li><strong>Third-party websites.</strong> Links to our Google Business Profile and Facebook page open sites we do not control, and their accessibility may differ from ours.</li>
        <li><strong>Third-party badge.</strong> The partner badge image in the footer is supplied by another company; it has a text alternative, but its visual content is outside our control.</li>
        <li><strong>Photographs.</strong> Job photos are described in alt text, but fine visual details such as turf color or concrete finish may not come through fully.</li>
      </ul>
      <p>If any of these gets in your way, contact us and we will give you the information another way.</p>

      <h2 id="feedback">5. Feedback and Reporting a Barrier</h2>
      <p>If you have trouble using any part of the Site, please tell us. Include the page address and a short description of the problem, and let us know the assistive technology or browser you use if you can.</p>
      <ul class="legal-contact">
        <li>Phone: <a href="<?php echo telHref(); ?>"><?php echo e($phone); ?></a> (<?php echo e($hoursLong); ?>)</li>
        <li>Email: <a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a></li>
      </ul>
      <p>We aim to respond to accessibility feedback within 5 business days.</p>

      <h2 id="alternatives">6. Other Ways to Request an Estimate</h2>
      <div class="help-panel">
        <p>You never need to use the online form. Call RAH Solutions at <a href="<?php echo telHref(); ?>"><?php echo e($phone); ?></a> during business hours to request a free on-site estimate by phone, or email <a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a> with your name, phone number and the town where the work is. We can also share service information in another format on request.</p>
      </div>

      <h2 id="changes">7. Changes to This Statement</h2>
      <p>We will update this statement as the Site changes and as we fix known issues. The “Last updated” date below shows the latest revision.</p>

      <h2 id="contact">8. Contact Us</h2>
      <ul class="legal-contact">
        <li><strong><?php echo e($siteName); ?></strong>, Edgerton, Wisconsin 53534</li>
        <li>Phone: <a href="<?php echo telHref(); ?>"><?php echo e($phone); ?></a></li>
        <li>Email: <a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a></li>
      </ul>

      <p class="legal-meta">Last updated: <?php echo date('F j, Y'); ?></p>
    </article>

    <aside class="legal-toc" aria-label="On this page">
      <ol>
        <li><a href="#commitment">Our commitment</a></li>
        <li><a href="#conformance">Conformance status</a></li>
        <li><a href="#features">Accessibility features</a></li>
        <li><a href="#limitations">Known limitations</a></li>
        <li><a href="#feedback">Report a barrier</a></li>
        <li><a href="#alternatives">Other ways to reach us</a></li>
        <li><a href="#changes">Changes</a></li>
        <li><a href="#contact">Contact</a></li>
      </ol>
    </aside>
  </div>
</section>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
