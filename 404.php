<?php
// ============================================================
// 404 Not Found — R.A.H. Solutions, LLC
// ============================================================
$pageTitle       = '404 — Page Not Found';
$pageDescription = 'The page you\'re looking for doesn\'t exist. Return to the R.A.H. Solutions homepage or browse our landscaping services.';
$canonicalUrl    = 'https://rahsolutionsllc.com/404';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/logo/1776963748052-3tu1va-RAH_logo.jpg';
$currentPage     = '404';
$noindex         = true;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<style>
/* ============================================================
   404 Page — R.A.H. Solutions
   Prefix: .nf-
   ============================================================ */

/* ── Full-Height Section ──────────────────────────────────── */
.nf-section {
  min-height: calc(100vh - var(--navbar-height));
  display: flex;
  align-items: center;
  justify-content: center;
  background: var(--color-bg);
  padding: var(--space-4xl) 0;
  position: relative;
  overflow: hidden;
}
.nf-section::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 700px;
  height: 700px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.04) 0%, transparent 70%);
  pointer-events: none;
}
.nf-section::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: linear-gradient(to right, var(--color-primary), var(--color-accent), var(--color-primary));
}

.nf-inner {
  position: relative;
  z-index: 1;
  text-align: center;
  max-width: 700px;
  margin: 0 auto;
}

/* ── 404 Number ───────────────────────────────────────────── */
.nf-number {
  font-family: var(--font-heading);
  font-size: clamp(5rem, 18vw, 12rem);
  font-weight: 700;
  line-height: 1;
  letter-spacing: -0.04em;
  color: transparent;
  -webkit-text-stroke: 3px var(--color-accent);
  text-shadow: none;
  margin-bottom: var(--space-lg);
  user-select: none;
  position: relative;
  display: inline-block;
}
.nf-number::after {
  content: '404';
  position: absolute;
  inset: 0;
  font-family: var(--font-heading);
  font-size: inherit;
  font-weight: inherit;
  letter-spacing: inherit;
  line-height: inherit;
  color: rgba(var(--color-accent-rgb), 0.06);
  -webkit-text-stroke: 0;
  transform: translate(6px, 6px);
  z-index: -1;
}

/* ── Headline ─────────────────────────────────────────────── */
.nf-headline {
  font-family: var(--font-heading);
  font-size: clamp(1.6rem, 3.5vw, 2.4rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-md);
}
.nf-subtext {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 52ch;
  margin: 0 auto var(--space-2xl);
  line-height: 1.65;
}

/* ── Quick Links ──────────────────────────────────────────── */
.nf-cards {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-md);
  margin-bottom: var(--space-2xl);
}
.nf-card {
  background: var(--color-bg-alt);
  border: 1px solid rgba(var(--color-primary-rgb), 0.08);
  border-radius: var(--radius-lg);
  padding: var(--space-xl) var(--space-lg);
  text-align: center;
  transition: border-color var(--transition-fast), transform var(--transition-fast), box-shadow var(--transition-fast), background var(--transition-fast);
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: var(--space-sm);
}
.nf-card:hover {
  border-color: var(--color-accent);
  transform: translateY(-4px);
  box-shadow: var(--shadow-card);
  background: var(--color-primary);
}
.nf-card:hover .nf-card-title,
.nf-card:hover .nf-card-desc {
  color: rgba(255,255,255,0.9);
}
.nf-card:hover .nf-card-icon {
  background: rgba(var(--color-accent-rgb), 0.2);
  color: var(--color-accent);
}
.nf-card-icon {
  width: 48px;
  height: 48px;
  border-radius: var(--radius-md);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
  margin-bottom: var(--space-xs);
  transition: background var(--transition-fast), color var(--transition-fast);
}
.nf-card-title {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 700;
  color: var(--color-primary);
  transition: color var(--transition-fast);
}
.nf-card-desc {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.5;
  transition: color var(--transition-fast);
}

/* ── CTA Buttons ──────────────────────────────────────────── */
.nf-actions {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: var(--space-md);
  flex-wrap: wrap;
  margin-bottom: var(--space-xl);
}
.nf-btn-home {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-primary);
  color: #ffffff;
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 700;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  padding: var(--space-md) var(--space-2xl);
  border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-primary-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden;
  position: relative;
}
.nf-btn-home:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-primary-dark);
}
.nf-btn-home:active {
  transform: translateY(2px);
  box-shadow: 0 2px 0 var(--color-primary-dark);
}
.nf-phone-link {
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  font-weight: 500;
}
.nf-phone-link a {
  color: var(--color-accent);
  font-weight: 700;
  transition: color var(--transition-fast);
}
.nf-phone-link a:hover { color: var(--color-primary); }

/* ── Responsive ───────────────────────────────────────────── */
@media (max-width: 767px) {
  .nf-cards   { grid-template-columns: 1fr; }
  .nf-actions { flex-direction: column; }
  .nf-btn-home { width: 100%; justify-content: center; }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

  <section class="nf-section" aria-label="404 Page not found">
    <div class="container">
      <div class="nf-inner">
        <div class="nf-number" aria-hidden="true">404</div>
        <h1 class="nf-headline">This Page Has Gone Dormant</h1>
        <p class="nf-subtext">The page you're looking for doesn't exist or has been moved. Explore R.A.H. Solutions' services below or head back to the homepage.</p>

        <!-- Quick-link cards -->
        <div class="nf-cards">
          <a href="/services" class="nf-card">
            <div class="nf-card-icon">
              <i data-lucide="scissors" aria-hidden="true" style="width:22px;height:22px;"></i>
            </div>
            <div class="nf-card-title">Services</div>
            <p class="nf-card-desc">Browse our full list of 17 landscaping services</p>
          </a>
          <a href="/contact" class="nf-card">
            <div class="nf-card-icon">
              <i data-lucide="phone" aria-hidden="true" style="width:22px;height:22px;"></i>
            </div>
            <div class="nf-card-title">Contact</div>
            <p class="nf-card-desc">Get a free estimate or reach us directly</p>
          </a>
          <a href="/" class="nf-card">
            <div class="nf-card-icon">
              <i data-lucide="home" aria-hidden="true" style="width:22px;height:22px;"></i>
            </div>
            <div class="nf-card-title">Home</div>
            <p class="nf-card-desc">Return to the R.A.H. Solutions homepage</p>
          </a>
        </div>

        <div class="nf-actions">
          <a href="/" class="nf-btn-home">
            <i data-lucide="arrow-left" aria-hidden="true" style="width:18px;height:18px;"></i>
            Back to Homepage
          </a>
        </div>

        <p class="nf-phone-link">Or call us directly: <a href="tel:6085015123">(608) 501-5123</a></p>
      </div>
    </div>
  </section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
