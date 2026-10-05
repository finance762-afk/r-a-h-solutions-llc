<a href="#main-content" class="skip-link">Skip to main content</a>

<!-- Fixed light glass header: main.js adds .scrolled on scroll (logo shrinks, bar turns solid) -->
<header class="site-header" data-header>
  <nav class="navbar" aria-label="Main navigation">
    <div class="navbar-inner container-wide">
      <a href="/" class="site-logo" aria-label="<?php echo e($siteName); ?> home">
        <img src="<?php echo e($logoLight); ?>" alt="<?php echo e($siteName); ?> logo" width="150" height="50" class="logo--lockup">
      </a>

      <ul class="navbar-links" role="list">
        <li class="has-dropdown">
          <button type="button" class="dropdown-toggle" aria-expanded="false" aria-haspopup="true">Services <?php echo icon('chevron-down', 16); ?></button>
          <ul class="dropdown dropdown--mega" role="menu" style="display:none">
            <?php foreach ($serviceGroups as $navGroupKey => $navGroup): ?>
            <li role="none" class="mega-col">
              <span class="mega-h"><?php echo e($navGroup['name']); ?></span>
              <ul role="none">
                <?php foreach (servicesInGroup($navGroupKey) as $navSvc): ?>
                <li role="none"><a role="menuitem" href="/services/<?php echo $navSvc['slug']; ?>/"><?php echo e($navSvc['name']); ?></a></li>
                <?php endforeach; ?>
              </ul>
            </li>
            <?php endforeach; ?>
            <li role="none" class="mega-all"><a role="menuitem" href="/services/" class="dropdown-all">See all 15 services <?php echo icon('arrow-right', 16); ?></a></li>
          </ul>
        </li>
        <li class="has-dropdown">
          <button type="button" class="dropdown-toggle" aria-expanded="false" aria-haspopup="true">Service Area <?php echo icon('chevron-down', 16); ?></button>
          <ul class="dropdown dropdown--areas" role="menu" style="display:none">
            <?php foreach ($serviceAreas as $navArea): ?>
            <li role="none"><a role="menuitem" href="<?php echo areaHref($navArea); ?>"><?php echo e($navArea['name'] . ', ' . $navArea['state']); ?></a></li>
            <?php endforeach; ?>
            <li role="none"><a role="menuitem" href="/service-area/" class="dropdown-all">Full service area</a></li>
          </ul>
        </li>
        <li><a href="/about/"<?php echo ariaCurrent('/about/'); ?>>About</a></li>
        <li><a href="/blog/"<?php echo ariaCurrent('/blog/'); ?>>Blog</a></li>
        <li><a href="/faq/"<?php echo ariaCurrent('/faq/'); ?>>FAQ</a></li>
        <li><a href="/contact/"<?php echo ariaCurrent('/contact/'); ?>>Contact</a></li>
      </ul>

      <div class="navbar-cta">
        <a href="tel:<?php echo e($phoneRaw); ?>" class="btn btn-secondary navbar-phone"><?php echo icon('phone', 18); ?> <?php echo e($phone); ?></a>
        <button type="button" class="btn btn-primary" data-open-estimate>Free Estimate</button>
      </div>

      <button type="button" class="hamburger" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-menu">
        <span class="hamburger-line"></span><span class="hamburger-line"></span><span class="hamburger-line"></span>
      </button>
    </div>
  </nav>
</header>

<div class="mobile-menu" id="mobile-menu" aria-hidden="true">
  <div class="mobile-menu-inner">
    <nav aria-label="Mobile navigation">
      <ul class="mobile-menu-links">
        <li><a href="/">Home</a></li>
        <li><a href="/services/">Services</a>
          <div class="mobile-groups">
            <?php foreach ($serviceGroups as $navGroupKey => $navGroup): ?>
            <details class="mobile-group">
              <summary><?php echo e($navGroup['name']); ?></summary>
              <ul class="mobile-submenu">
                <?php foreach (servicesInGroup($navGroupKey) as $navSvc): ?>
                <li><a href="/services/<?php echo $navSvc['slug']; ?>/"><?php echo e($navSvc['name']); ?></a></li>
                <?php endforeach; ?>
              </ul>
            </details>
            <?php endforeach; ?>
          </div>
        </li>
        <li><a href="/service-area/">Service Area</a></li>
        <li><a href="/about/">About</a></li>
        <li><a href="/blog/">Blog</a></li>
        <li><a href="/faq/">FAQ</a></li>
        <li><a href="/contact/">Contact</a></li>
      </ul>
    </nav>
    <div class="mobile-menu-cta">
      <a href="tel:<?php echo e($phoneRaw); ?>" class="btn btn-accent btn-block"><?php echo icon('phone', 18); ?> Call <?php echo e($phone); ?></a>
      <button type="button" class="btn btn-outline-white btn-block" data-open-estimate>Free Estimate</button>
    </div>
  </div>
</div>

<main id="main-content">
