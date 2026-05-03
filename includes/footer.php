<?php
// ============================================================
// R.A.H. Solutions, LLC — footer.php
// Outputs: </main>, <footer>, entity block, scripts, </body>
// NAP: R.A.H. Solutions, LLC | 262 County Road W, Edgerton, WI 53534 | (608) 501-5123
// ============================================================
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

// Split services into two columns for footer display
$servicesCol1 = array_slice($services, 0, 9);
$servicesCol2 = array_slice($services, 9);
?>

  </main><!-- /#main-content -->

  <!-- ── Back to Top Button ─────────────────────────────────── -->
  <button
    class="back-to-top"
    id="back-to-top"
    aria-label="Back to top of page"
    hidden
  >
    <i data-lucide="chevron-up" style="width:22px;height:22px;" aria-hidden="true"></i>
  </button>

  <!-- ── Mobile Floating CTA Bar (< 768px only) ──────────────── -->
  <div class="mobile-cta-bar" role="complementary" aria-label="Quick contact">
    <a href="tel:<?php echo $phone; ?>" class="mobile-cta-bar__call" aria-label="Call R.A.H. Solutions">
      <i data-lucide="phone" style="width:18px;height:18px;" aria-hidden="true"></i>
      <span>Call Now</span>
    </a>
    <a href="/contact" class="mobile-cta-bar__estimate">
      <i data-lucide="clipboard-list" style="width:18px;height:18px;" aria-hidden="true"></i>
      <span>Free Estimate</span>
    </a>
  </div><!-- /.mobile-cta-bar -->

  <!-- ================================================================
       FOOTER
  ================================================================ -->
  <footer class="site-footer" role="contentinfo">

    <div class="footer-top">
      <div class="container">
        <div class="footer-grid">

          <!-- ── Col 1: Brand + Trust ──────────────────────── -->
          <div class="footer-col footer-col--brand">
            <a href="/" class="footer-logo-link" aria-label="R.A.H. Solutions — Home">
              <img
                src="<?php echo htmlspecialchars($logoUrl, ENT_QUOTES, 'UTF-8'); ?>"
                alt="<?php echo htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?> logo"
                class="footer-logo"
                width="160"
                height="60"
                loading="lazy"
              >
            </a>
            <p class="footer-tagline"><?php echo htmlspecialchars($tagline, ENT_QUOTES, 'UTF-8'); ?></p>
            <p class="footer-desc">
              Serving Edgerton, Stoughton, Madison, and Janesville with professional landscaping, lawn care, hardscaping, and snow removal since <?php echo $yearEstablished; ?>.
            </p>
            <!-- Trust badges -->
            <ul class="footer-trust-badges" role="list" aria-label="Trust signals">
              <li class="trust-badge">
                <i data-lucide="shield-check" style="width:16px;height:16px;" aria-hidden="true"></i>
                Licensed &amp; Insured
              </li>
              <li class="trust-badge">
                <i data-lucide="calendar" style="width:16px;height:16px;" aria-hidden="true"></i>
                <?php echo $yearsInBusiness; ?> Years in Business
              </li>
              <li class="trust-badge">
                <i data-lucide="tag" style="width:16px;height:16px;" aria-hidden="true"></i>
                Free Estimates
              </li>
            </ul>
            <!-- Social links -->
            <?php if (!empty($socialLinks['facebook'])): ?>
            <div class="footer-social" aria-label="Social media">
              <a href="<?php echo htmlspecialchars($socialLinks['facebook'], ENT_QUOTES, 'UTF-8'); ?>"
                 class="social-link"
                 target="_blank"
                 rel="noopener noreferrer"
                 aria-label="R.A.H. Solutions on Facebook">
                <i data-lucide="facebook" style="width:20px;height:20px;" aria-hidden="true"></i>
              </a>
            </div>
            <?php endif; ?>
          </div><!-- /.footer-col--brand -->

          <!-- ── Col 2: Services (1–9) ──────────────────────── -->
          <div class="footer-col footer-col--services">
            <h3 class="footer-heading">Our Services</h3>
            <ul class="footer-links" role="list">
              <?php foreach ($servicesCol1 as $svc): ?>
              <li>
                <a href="/services/<?php echo htmlspecialchars($svc['slug'], ENT_QUOTES, 'UTF-8'); ?>" class="footer-link">
                  <?php echo htmlspecialchars($svc['name'], ENT_QUOTES, 'UTF-8'); ?>
                </a>
              </li>
              <?php endforeach; ?>
            </ul>
          </div><!-- /.footer-col--services -->

          <!-- ── Col 3: More Services + Areas ──────────────── -->
          <div class="footer-col footer-col--more">
            <h3 class="footer-heading">More Services</h3>
            <ul class="footer-links" role="list">
              <?php foreach ($servicesCol2 as $svc): ?>
              <li>
                <a href="/services/<?php echo htmlspecialchars($svc['slug'], ENT_QUOTES, 'UTF-8'); ?>" class="footer-link">
                  <?php echo htmlspecialchars($svc['name'], ENT_QUOTES, 'UTF-8'); ?>
                </a>
              </li>
              <?php endforeach; ?>
              <li>
                <a href="/services" class="footer-link footer-link--all">View All Services &rarr;</a>
              </li>
            </ul>

            <h3 class="footer-heading footer-heading--mt">Service Areas</h3>
            <ul class="footer-links" role="list">
              <?php foreach ($serviceAreas as $area): ?>
              <li>
                <a href="/service-area#<?php echo htmlspecialchars(strtolower($area['city']), ENT_QUOTES, 'UTF-8'); ?>" class="footer-link">
                  <?php echo htmlspecialchars($area['city'], ENT_QUOTES, 'UTF-8'); ?>, <?php echo htmlspecialchars($area['state'], ENT_QUOTES, 'UTF-8'); ?>
                  <?php if ($area['primary']): ?><span class="footer-badge-primary"> (Primary)</span><?php endif; ?>
                </a>
              </li>
              <?php endforeach; ?>
              <li>
                <a href="/service-area" class="footer-link footer-link--all">View All Areas &rarr;</a>
              </li>
            </ul>
          </div><!-- /.footer-col--more -->

          <!-- ── Col 4: Contact Info ───────────────────────── -->
          <div class="footer-col footer-col--contact">
            <h3 class="footer-heading">Contact Us</h3>

            <address class="footer-address" itemscope itemtype="https://schema.org/LocalBusiness">
              <meta itemprop="name" content="<?php echo htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?>">
              <meta itemprop="url"  content="<?php echo htmlspecialchars($canonicalBase, ENT_QUOTES, 'UTF-8'); ?>">

              <div class="footer-contact-item">
                <i data-lucide="phone" style="width:16px;height:16px;flex-shrink:0;" aria-hidden="true"></i>
                <a href="tel:<?php echo $phone; ?>" class="footer-phone" itemprop="telephone">
                  <?php echo htmlspecialchars($phoneFormatted, ENT_QUOTES, 'UTF-8'); ?>
                </a>
              </div>

              <div class="footer-contact-item">
                <i data-lucide="mail" style="width:16px;height:16px;flex-shrink:0;" aria-hidden="true"></i>
                <a href="mailto:<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>" class="footer-email" itemprop="email">
                  <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>
                </a>
              </div>

              <div class="footer-contact-item" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                <i data-lucide="map-pin" style="width:16px;height:16px;flex-shrink:0;" aria-hidden="true"></i>
                <span>
                  <span itemprop="streetAddress"><?php echo htmlspecialchars($address['street'], ENT_QUOTES, 'UTF-8'); ?></span>,
                  <span itemprop="addressLocality"><?php echo htmlspecialchars($address['city'], ENT_QUOTES, 'UTF-8'); ?></span>,
                  <span itemprop="addressRegion"><?php echo htmlspecialchars($address['state'], ENT_QUOTES, 'UTF-8'); ?></span>
                  <span itemprop="postalCode"><?php echo htmlspecialchars($address['zip'], ENT_QUOTES, 'UTF-8'); ?></span>
                </span>
              </div>

              <div class="footer-contact-item">
                <i data-lucide="clock" style="width:16px;height:16px;flex-shrink:0;" aria-hidden="true"></i>
                <div class="footer-hours">
                  <div><?php echo htmlspecialchars($hours['weekdays'], ENT_QUOTES, 'UTF-8'); ?></div>
                  <div><?php echo htmlspecialchars($hours['saturday'], ENT_QUOTES, 'UTF-8'); ?></div>
                  <div><?php echo htmlspecialchars($hours['sunday'],   ENT_QUOTES, 'UTF-8'); ?></div>
                </div>
              </div>

            </address>

            <a href="/contact" class="btn-primary footer-cta-btn">
              Get a Free Estimate
            </a>

          </div><!-- /.footer-col--contact -->

        </div><!-- /.footer-grid -->
      </div><!-- /.container -->
    </div><!-- /.footer-top -->

    <!-- ── AEO Entity Block ────────────────────────────────── -->
    <div class="footer-entity" itemscope itemtype="https://schema.org/LocalBusiness" aria-label="About R.A.H. Solutions, LLC">
      <div class="container">
        <p class="entity-block">
          <span itemprop="name"><strong><?php echo htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?></strong></span>
          is a landscaping company based in
          <span itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
            <span itemprop="addressLocality"><?php echo htmlspecialchars($address['city'], ENT_QUOTES, 'UTF-8'); ?></span>,
            <span itemprop="addressRegion"><?php echo htmlspecialchars($address['state'], ENT_QUOTES, 'UTF-8'); ?></span>
          </span>,
          serving Edgerton, Stoughton, Madison, and Janesville, WI.
          With <?php echo $yearsInBusiness; ?> years of experience,
          <?php echo htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8'); ?> specializes in
          landscape design, lawn care, hardscaping, concrete services, and snow removal.
          Contact: <a href="tel:<?php echo $phone; ?>" itemprop="telephone"><?php echo htmlspecialchars($phoneFormatted, ENT_QUOTES, 'UTF-8'); ?></a>
          | <a href="mailto:<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>" itemprop="email"><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></a>
          | <a href="<?php echo htmlspecialchars($canonicalBase, ENT_QUOTES, 'UTF-8'); ?>" itemprop="url"><?php echo htmlspecialchars($domain, ENT_QUOTES, 'UTF-8'); ?></a>.
          Licensed and insured.
        </p>
        <meta itemprop="name"      content="<?php echo htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?>">
        <meta itemprop="url"       content="<?php echo htmlspecialchars($canonicalBase, ENT_QUOTES, 'UTF-8'); ?>">
        <meta itemprop="telephone" content="<?php echo htmlspecialchars($phoneFormatted, ENT_QUOTES, 'UTF-8'); ?>">
      </div>
    </div><!-- /.footer-entity -->

    <!-- ── Footer Legal Row ──────────────────────────────── -->
    <div class="footer-legal-row">
      <div class="container">
        <nav class="footer-legal-nav" aria-label="Legal pages">
          <a href="/privacy-policy/">Privacy Policy</a>
          <span class="footer-legal-sep" aria-hidden="true">|</span>
          <a href="/terms/">Terms of Service</a>
          <span class="footer-legal-sep" aria-hidden="true">|</span>
          <a href="/cookie-policy/">Cookie Policy</a>
          <span class="footer-legal-sep" aria-hidden="true">|</span>
          <a href="/accessibility/">Accessibility</a>
          <span class="footer-legal-sep" aria-hidden="true">|</span>
          <a href="/privacy-policy/#ccpa-rights">Do Not Sell or Share My Personal Information</a>
          <span class="footer-legal-sep" aria-hidden="true">|</span>
          <a href="/sitemap.xml">Sitemap</a>
        </nav>
      </div>
    </div><!-- /.footer-legal-row -->

    <!-- ── Footer Bottom Bar ──────────────────────────────── -->
    <div class="footer-bottom-bar">
      <div class="container footer-bottom-inner">
        <p class="footer-copyright">
          &copy; <?php echo date('Y'); ?>
          <?php echo htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?>.
          All rights reserved.
        </p>
        <div class="footer-bottom-links">
          <!-- Required dofollow credit link — do not remove or alter -->
          <a href="https://pageoneinsights.com" rel="dofollow" target="_blank" class="footer-credit-link">
            Web Design &amp; Hosting by Page One Insights, LLC
          </a>
        </div>
      </div>
    </div><!-- /.footer-bottom-bar -->

  </footer><!-- /.site-footer -->

  <!-- ================================================================
       SCRIPTS
  ================================================================ -->

  <!-- Lucide Icons CDN -->
  <script src="https://unpkg.com/lucide@latest" defer></script>

  <!-- VanillaTilt (loaded when .card elements with tilt exist) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js" defer></script>

<?php if (!empty($useSwiper)): ?>
  <!-- Swiper JS (loaded when carousel exists on page) -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
<?php endif; ?>

  <!-- Site JS -->
  <script src="/assets/js/animations.js" defer></script>
  <script src="/assets/js/effects.js"    defer></script>
  <script src="/assets/js/main.js"       defer></script>

  <!-- Inline init: Lucide, back-to-top, mobile menu, nav scroll -->
  <script>
    // Wait for DOM + deferred scripts
    document.addEventListener('DOMContentLoaded', function () {

      // ── Lucide icons ────────────────────────────────────
      if (typeof lucide !== 'undefined') {
        lucide.createIcons();
      }

      // ── Back to top ──────────────────────────────────────
      const btt = document.getElementById('back-to-top');
      if (btt) {
        const toggleBtt = () => {
          if (window.scrollY > 300) {
            btt.hidden = false;
          } else {
            btt.hidden = true;
          }
        };
        window.addEventListener('scroll', toggleBtt, { passive: true });
        btt.addEventListener('click', () => {
          window.scrollTo({ top: 0, behavior: 'smooth' });
        });
      }

      // ── Navbar scroll behaviour (glassmorphism) ──────────
      const header = document.querySelector('[data-header]');
      if (header) {
        const onScroll = () => {
          if (window.scrollY > 80) {
            header.classList.add('scrolled');
          } else {
            header.classList.remove('scrolled');
          }
        };
        window.addEventListener('scroll', onScroll, { passive: true });
      }

      // ── Mobile menu ──────────────────────────────────────
      const hamburger  = document.getElementById('hamburger-btn');
      const mobileMenu = document.getElementById('mobile-menu');
      const closeBtn   = document.getElementById('mobile-menu-close');
      const overlay    = document.getElementById('mobile-menu-overlay');

      function openMenu() {
        if (!mobileMenu || !hamburger) return;
        mobileMenu.hidden = false;
        hamburger.setAttribute('aria-expanded', 'true');
        document.body.style.overflow = 'hidden';
        hamburger.classList.add('is-active');
        // Small delay allows display:block before opacity transition
        requestAnimationFrame(() => {
          mobileMenu.classList.add('is-open');
          if (overlay) overlay.classList.add('is-visible');
        });
      }

      function closeMenu() {
        if (!mobileMenu || !hamburger) return;
        mobileMenu.classList.remove('is-open');
        if (overlay) overlay.classList.remove('is-visible');
        hamburger.setAttribute('aria-expanded', 'false');
        hamburger.classList.remove('is-active');
        document.body.style.overflow = '';
        // Hide after transition completes
        setTimeout(() => { mobileMenu.hidden = true; }, 350);
      }

      if (hamburger)  hamburger.addEventListener('click', openMenu);
      if (closeBtn)   closeBtn.addEventListener('click', closeMenu);
      if (overlay)    overlay.addEventListener('click', closeMenu);

      // Close on mobile nav link tap
      if (mobileMenu) {
        mobileMenu.querySelectorAll('.mobile-nav-link, .mobile-sub-link, .mobile-estimate-btn').forEach(function (link) {
          link.addEventListener('click', closeMenu);
        });
      }

      // Keyboard: Escape closes menu
      document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && mobileMenu && !mobileMenu.hidden) {
          closeMenu();
          if (hamburger) hamburger.focus();
        }
      });

      // ── Desktop: Services dropdown hover + keyboard ───────
      const hasDropdowns = document.querySelectorAll('.has-dropdown');
      hasDropdowns.forEach(function (item) {
        const trigger  = item.querySelector('.nav-link');
        const dropdown = item.querySelector('.nav-dropdown');
        if (!trigger || !dropdown) return;

        item.addEventListener('mouseenter', () => {
          dropdown.setAttribute('aria-hidden', 'false');
          trigger.setAttribute('aria-expanded', 'true');
        });
        item.addEventListener('mouseleave', () => {
          dropdown.setAttribute('aria-hidden', 'true');
          trigger.setAttribute('aria-expanded', 'false');
        });

        // Keyboard open/close
        trigger.addEventListener('keydown', function (e) {
          if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            const expanded = trigger.getAttribute('aria-expanded') === 'true';
            trigger.setAttribute('aria-expanded', String(!expanded));
            dropdown.setAttribute('aria-hidden', String(expanded));
            if (!expanded) {
              const first = dropdown.querySelector('.dropdown-link');
              if (first) first.focus();
            }
          }
        });
      });

    }); // DOMContentLoaded
  </script>

</body>
</html>
