<?php
// ============================================================
// R.A.H. Solutions, LLC — header.php
// Outputs: skip link, <header>, <nav>, </header>, <main>
// ============================================================
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<body>

  <!-- Skip to main content (accessibility) -->
  <a href="#main-content" class="skip-link">Skip to main content</a>

  <header class="site-header" data-header>
    <nav class="navbar" aria-label="Main navigation" role="navigation">
      <div class="navbar-inner container">

        <!-- ── Logo ─────────────────────────────────────── -->
        <a href="/" class="navbar-logo" aria-label="<?php echo htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?> — Home">
          <img
            src="<?php echo htmlspecialchars($logoUrl, ENT_QUOTES, 'UTF-8'); ?>"
            alt="<?php echo htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?> logo"
            class="navbar-logo-img"
            width="160"
            height="60"
            loading="eager"
          >
        </a>

        <!-- ── Desktop Nav Links ─────────────────────────── -->
        <ul class="navbar-links" role="list">

          <li>
            <a href="/"
               class="nav-link<?php echo isActivePage('home') ? ' nav-link--active' : ''; ?>"
               <?php echo isActivePage('home') ? 'aria-current="page"' : ''; ?>>
              Home
            </a>
          </li>

          <!-- Services with dropdown -->
          <li class="has-dropdown">
            <a href="/services"
               class="nav-link<?php echo (isActivePage('services') || str_starts_with($currentPage ?? '', 'service-')) ? ' nav-link--active' : ''; ?>"
               <?php echo isActivePage('services') ? 'aria-current="page"' : ''; ?>
               aria-haspopup="true"
               aria-expanded="false">
              Services <span class="nav-chevron" aria-hidden="true">&#8964;</span>
            </a>
            <ul class="nav-dropdown" role="list" aria-label="Services submenu">
              <?php foreach ($navServices as $svc): ?>
              <li>
                <a href="/services/<?php echo htmlspecialchars($svc['slug'], ENT_QUOTES, 'UTF-8'); ?>"
                   class="dropdown-link<?php echo isActivePage('service-' . $svc['slug']) ? ' dropdown-link--active' : ''; ?>">
                  <?php echo htmlspecialchars($svc['name'], ENT_QUOTES, 'UTF-8'); ?>
                </a>
              </li>
              <?php endforeach; ?>
              <li class="dropdown-divider" role="separator"></li>
              <li>
                <a href="/services" class="dropdown-link dropdown-link--all">
                  View All Services &rarr;
                </a>
              </li>
            </ul>
          </li>

          <li>
            <a href="/service-area"
               class="nav-link<?php echo isActivePage('service-area') ? ' nav-link--active' : ''; ?>"
               <?php echo isActivePage('service-area') ? 'aria-current="page"' : ''; ?>>
              Service Area
            </a>
          </li>

          <li>
            <a href="/about"
               class="nav-link<?php echo isActivePage('about') ? ' nav-link--active' : ''; ?>"
               <?php echo isActivePage('about') ? 'aria-current="page"' : ''; ?>>
              About
            </a>
          </li>

          <li>
            <a href="/contact"
               class="nav-link<?php echo isActivePage('contact') ? ' nav-link--active' : ''; ?>"
               <?php echo isActivePage('contact') ? 'aria-current="page"' : ''; ?>>
              Contact
            </a>
          </li>

        </ul><!-- /.navbar-links -->

        <!-- ── Desktop CTA ───────────────────────────────── -->
        <div class="navbar-cta">
          <a href="tel:<?php echo $phone; ?>" class="navbar-phone" aria-label="Call R.A.H. Solutions">
            <span class="navbar-phone-icon" aria-hidden="true">
              <i data-lucide="phone" style="width:16px;height:16px;vertical-align:middle;"></i>
            </span>
            <?php echo htmlspecialchars($phoneFormatted, ENT_QUOTES, 'UTF-8'); ?>
          </a>
          <a href="/contact" class="btn-primary navbar-estimate-btn">
            Free Estimate
          </a>
        </div>

        <!-- ── Mobile Hamburger ──────────────────────────── -->
        <button
          class="hamburger"
          id="hamburger-btn"
          aria-label="Open navigation menu"
          aria-expanded="false"
          aria-controls="mobile-menu"
        >
          <span class="hamburger-line" aria-hidden="true"></span>
          <span class="hamburger-line" aria-hidden="true"></span>
          <span class="hamburger-line" aria-hidden="true"></span>
        </button>

      </div><!-- /.navbar-inner -->
    </nav><!-- /.navbar -->

    <!-- ── Mobile Full-Screen Menu ───────────────────────── -->
    <div class="mobile-menu" id="mobile-menu" role="dialog" aria-label="Navigation menu" aria-modal="true" hidden>
      <div class="mobile-menu-inner">

        <button
          class="mobile-menu-close"
          id="mobile-menu-close"
          aria-label="Close navigation menu"
        >
          <i data-lucide="x" style="width:28px;height:28px;" aria-hidden="true"></i>
        </button>

        <nav aria-label="Mobile navigation">
          <ul class="mobile-nav-links" role="list">

            <li>
              <a href="/"
                 class="mobile-nav-link<?php echo isActivePage('home') ? ' mobile-nav-link--active' : ''; ?>"
                 <?php echo isActivePage('home') ? 'aria-current="page"' : ''; ?>>
                Home
              </a>
            </li>

            <!-- Services with sub-links -->
            <li class="mobile-has-sub">
              <a href="/services"
                 class="mobile-nav-link<?php echo (isActivePage('services') || str_starts_with($currentPage ?? '', 'service-')) ? ' mobile-nav-link--active' : ''; ?>"
                 <?php echo isActivePage('services') ? 'aria-current="page"' : ''; ?>>
                Services
              </a>
              <ul class="mobile-sub-links" role="list">
                <?php foreach ($services as $svc): ?>
                <li>
                  <a href="/services/<?php echo htmlspecialchars($svc['slug'], ENT_QUOTES, 'UTF-8'); ?>"
                     class="mobile-sub-link">
                    <?php echo htmlspecialchars($svc['name'], ENT_QUOTES, 'UTF-8'); ?>
                  </a>
                </li>
                <?php endforeach; ?>
              </ul>
            </li>

            <li>
              <a href="/service-area"
                 class="mobile-nav-link<?php echo isActivePage('service-area') ? ' mobile-nav-link--active' : ''; ?>"
                 <?php echo isActivePage('service-area') ? 'aria-current="page"' : ''; ?>>
                Service Area
              </a>
            </li>

            <li>
              <a href="/about"
                 class="mobile-nav-link<?php echo isActivePage('about') ? ' mobile-nav-link--active' : ''; ?>"
                 <?php echo isActivePage('about') ? 'aria-current="page"' : ''; ?>>
                About
              </a>
            </li>

            <li>
              <a href="/contact"
                 class="mobile-nav-link<?php echo isActivePage('contact') ? ' mobile-nav-link--active' : ''; ?>"
                 <?php echo isActivePage('contact') ? 'aria-current="page"' : ''; ?>>
                Contact
              </a>
            </li>

          </ul>
        </nav>

        <!-- Mobile CTA block -->
        <div class="mobile-menu-cta">
          <a href="tel:<?php echo $phone; ?>" class="mobile-phone-link">
            <i data-lucide="phone" style="width:20px;height:20px;vertical-align:middle;margin-right:8px;" aria-hidden="true"></i>
            <?php echo htmlspecialchars($phoneFormatted, ENT_QUOTES, 'UTF-8'); ?>
          </a>
          <a href="/contact" class="btn-primary mobile-estimate-btn">
            Get a Free Estimate
          </a>
        </div>

      </div><!-- /.mobile-menu-inner -->
    </div><!-- /.mobile-menu -->

    <!-- Mobile menu overlay/backdrop -->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay" aria-hidden="true"></div>

  </header><!-- /.site-header -->

  <main id="main-content">
