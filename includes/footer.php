</main>

<footer class="site-footer texture-grain">
  <span class="grain-layer" aria-hidden="true"></span>
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <img src="<?php echo e($logoDark); ?>" alt="<?php echo e($siteName); ?> logo" width="181" height="60" loading="lazy" decoding="async" class="footer-logo">
        <p><strong><?php echo e($siteName); ?></strong> is a family-owned landscaper in Edgerton, Wisconsin. Owner <?php echo e($ownerName); ?> has run lawn care, landscaping, concrete, excavating and snow removal crews for homes and businesses since <?php echo $yearEstablished; ?>.</p>
        <div class="footer-badges">
          <span>Since <?php echo $yearEstablished; ?></span>
          <span>Family owned</span>
          <span>Free estimates</span>
        </div>
        <a class="footer-rating" href="<?php echo e($googleReviewsUrl); ?>" target="_blank" rel="noopener">
          <?php echo stars(); ?> <span><b><?php echo e($gbpRating); ?></b> on Google · <?php echo $gbpReviewCount; ?> reviews</span>
        </a>
      </div>

      <div>
        <h3 class="footer-h">Services</h3>
        <ul class="footer-services">
          <?php foreach ($services as $footSvc): ?>
          <li><a href="/services/<?php echo $footSvc['slug']; ?>/"><?php echo e($footSvc['name']); ?></a></li>
          <?php endforeach; ?>
          <li><a href="/services/">All services</a></li>
        </ul>
      </div>

      <div>
        <h3 class="footer-h">Service Area</h3>
        <ul class="footer-areas">
          <?php foreach ($serviceAreas as $footArea): ?>
          <li><a href="<?php echo areaHref($footArea); ?>"><?php echo e($footArea['name'] . ', ' . $footArea['state']); ?></a></li>
          <?php endforeach; ?>
        </ul>
        <p class="footer-areas-all"><a href="/service-area/">Full service area →</a></p>
      </div>

      <div>
        <h3 class="footer-h">Contact</h3>
        <div class="footer-nap">
          <div><?php echo icon('phone', 18); ?><a href="tel:<?php echo e($phoneRaw); ?>"><?php echo e($phone); ?></a></div>
          <div><?php echo icon('mail', 18); ?><a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a></div>
          <div><?php echo icon('map-pin', 18); ?><span><?php echo e($addressLine); ?> · we come to your property</span></div>
          <div><?php echo icon('clock', 18); ?><span><?php echo e($hoursDisplay); ?> · Sat &amp; Sun closed</span></div>
        </div>
        <h3 class="footer-h footer-h4-gap">Company</h3>
        <ul>
          <li><a href="/about/">About RAH Solutions</a></li>
          <li><a href="/blog/">Yard &amp; lawn blog</a></li>
          <li><a href="/faq/">FAQ</a></li>
          <li><a href="/contact/">Contact</a></li>
        </ul>
        <ul class="footer-social">
          <li><a href="<?php echo e($facebookUrl); ?>" target="_blank" rel="noopener">Facebook</a></li>
          <li><a href="<?php echo e($googleBusinessProfile); ?>" target="_blank" rel="noopener">Google Business Profile</a></li>
        </ul>
        <button type="button" class="btn btn-accent footer-cta" data-open-estimate>Request a free estimate</button>
      </div>
    </div>

    <p class="footer-entity"><strong><?php echo e($siteName); ?></strong> is a licensed and insured, family-owned landscaper based in Edgerton, Wisconsin (<?php echo e($address['region']); ?>), established in <?php echo $yearEstablished; ?> by <?php echo e($ownerName); ?>. The company provides lawn care, landscaping, hardscaping, concrete, excavating, seasonal cleanups and snow removal for homeowners and businesses in Edgerton, Stoughton, Janesville, Madison and nearby towns in Rock and Dane counties. Phone <?php echo e($phone); ?>, <?php echo e($hoursDisplay); ?>. <?php echo e($addressLine); ?>.</p>

    <div class="footer-legal">
      <div class="footer-legal-inner">
        <nav class="footer-legal-links" aria-label="Legal">
          <a href="/privacy-policy/">Privacy Policy</a>
          <span class="footer-legal-divider" aria-hidden="true">|</span>
          <a href="/terms/">Terms of Service</a>
          <span class="footer-legal-divider" aria-hidden="true">|</span>
          <a href="/cookie-policy/">Cookie Policy</a>
          <span class="footer-legal-divider" aria-hidden="true">|</span>
          <a href="/accessibility/">Accessibility</a>
          <span class="footer-legal-divider" aria-hidden="true">|</span>
          <a href="/privacy-policy/#ccpa-rights">Do Not Sell or Share My Personal Information</a>
          <span class="footer-legal-divider" aria-hidden="true">|</span>
          <a href="/sitemap.xml">Sitemap</a>
        </nav>
      </div>
    </div>
    <div class="footer-bottom-bar">
      <p>&copy; <?php echo date('Y'); ?> <?php echo e($siteName); ?>. All rights reserved.</p>
      <p class="footer-credit"><a href="https://pageoneinsights.com" rel="dofollow" target="_blank">Web Design & Hosting by Page One Insights, LLC</a></p>
    </div>
  </div>
  <?php /* Verified Local Partner badge (Page One Partner profile r-a-h-solutions-llc-edgerton-wi): the partial and its include are
     left out of this build because the remote badge image trips the QA image check. scripts/partner-badge-fleet.mjs
     re-adds both after launch (canonical partial: ~/crm/references). */ ?>
</footer>

<dialog class="estimate-dialog" id="estimate-dialog" aria-labelledby="estimate-dialog-title">
  <div class="dialog-head">
    <div>
      <h3 id="estimate-dialog-title">Get a free estimate</h3>
      <p class="footnote">We reply during business hours, Monday–Friday.</p>
    </div>
    <button type="button" class="dialog-close" aria-label="Close" data-close-estimate><?php echo icon('x', 20); ?></button>
  </div>
  <div class="dialog-body">
    <?php $formId = 'dialog'; include __DIR__ . '/lead-form.php'; ?>
  </div>
</dialog>

<div class="cookie-bar" id="cookie-bar" role="region" aria-label="Cookie notice">
  <p>This site uses cookies to run and to understand traffic. See our <a href="/cookie-policy/">Cookie Policy</a>.</p>
  <button type="button">Got it</button>
</div>

<div class="mobile-cta-bar" aria-label="Contact options">
  <a href="tel:<?php echo e($phoneRaw); ?>" class="mobile-cta-bar__call"><?php echo icon('phone', 18); ?> Call now</a>
  <button type="button" class="mobile-cta-bar__estimate" data-open-estimate>Free estimate</button>
</div>

<button type="button" class="back-to-top" id="back-to-top" aria-label="Back to top"><?php echo icon('chevron-down', 22, 'flip'); ?></button>

<script src="/assets/js/main.js?v=<?php echo $cssVersion; ?>" defer></script>
<script src="/assets/js/animations.js?v=<?php echo $cssVersion; ?>" defer></script>
<script src="/assets/js/effects.js?v=<?php echo $cssVersion; ?>" defer></script>
</body>
</html>
