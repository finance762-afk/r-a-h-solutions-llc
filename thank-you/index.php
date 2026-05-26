<?php
// ============================================================
// Thank You — R.A.H. Solutions, LLC
// ============================================================
$pageTitle       = 'Thank You — Message Received';
$pageDescription = 'Thank you for contacting R.A.H. Solutions. We\'ll be in touch within 24 hours to discuss your project.';
$canonicalUrl    = 'https://rahsolutionsllc.com/thank-you';
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/logo/1776963748052-3tu1va-RAH_logo.jpg';
$currentPage     = 'thank-you';
$noindex         = true;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<style>
/* ============================================================
   Thank You Page — R.A.H. Solutions
   Prefix: .ty-
   ============================================================ */

/* ── Full-Height Section ──────────────────────────────────── */
.ty-section {
  min-height: calc(100vh - var(--navbar-height));
  display: flex;
  align-items: center;
  justify-content: center;
  background: var(--color-bg);
  padding: var(--space-4xl) 0;
  position: relative;
  overflow: hidden;
}
.ty-section::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: linear-gradient(to right, var(--color-primary), var(--color-accent), var(--color-primary));
}
.ty-section::after {
  content: '';
  position: absolute;
  top: -60px;
  right: -60px;
  width: 400px;
  height: 400px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.05) 0%, transparent 70%);
  pointer-events: none;
}

.ty-inner {
  position: relative;
  z-index: 1;
  text-align: center;
  max-width: 640px;
  margin: 0 auto;
}

/* ── Check Icon ───────────────────────────────────────────── */
.ty-check-wrap {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: var(--space-xl);
}
.ty-check-circle {
  width: 96px;
  height: 96px;
  border-radius: 50%;
  background: linear-gradient(135deg, rgba(var(--color-accent-rgb), 0.12) 0%, rgba(var(--color-accent-rgb), 0.06) 100%);
  border: 2px solid rgba(var(--color-accent-rgb), 0.3);
  display: flex;
  align-items: center;
  justify-content: center;
  animation: ty-pop-in 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275) both;
}
@keyframes ty-pop-in {
  from { transform: scale(0.5); opacity: 0; }
  to   { transform: scale(1); opacity: 1; }
}
.ty-check-circle i {
  color: var(--color-accent);
  width: 44px;
  height: 44px;
}

/* ── Headline ─────────────────────────────────────────────── */
.ty-headline {
  font-family: var(--font-heading);
  font-size: clamp(2rem, 4vw, 3rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
  animation: ty-fade-up 0.5s 0.15s ease both;
}
.ty-subtext {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 50ch;
  margin: 0 auto var(--space-2xl);
  line-height: 1.65;
  animation: ty-fade-up 0.5s 0.25s ease both;
}
@keyframes ty-fade-up {
  from { opacity: 0; transform: translateY(12px); }
  to   { opacity: 1; transform: translateY(0); }
}

/* ── What Happens Next ────────────────────────────────────── */
.ty-next-block {
  background: var(--color-bg-alt);
  border-radius: var(--radius-lg);
  border: 1px solid rgba(var(--color-primary-rgb), 0.08);
  padding: var(--space-2xl);
  margin-bottom: var(--space-2xl);
  text-align: left;
  animation: ty-fade-up 0.5s 0.35s ease both;
}
.ty-next-title {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  font-weight: 700;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-xl);
  display: flex;
  align-items: center;
  gap: var(--space-sm);
}
.ty-next-title i { color: var(--color-accent); }
.ty-steps {
  display: flex;
  flex-direction: column;
  gap: var(--space-lg);
  list-style: none;
}
.ty-step {
  display: flex;
  gap: var(--space-md);
  align-items: flex-start;
}
.ty-step-num {
  width: 36px;
  height: 36px;
  border-radius: 50%;
  background: var(--color-primary);
  color: #ffffff;
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  font-weight: 700;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  border: 2px solid rgba(var(--color-accent-rgb), 0.25);
}
.ty-step-content {}
.ty-step-label {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  font-weight: 700;
  color: var(--color-primary);
  margin-bottom: var(--space-xs);
}
.ty-step-desc {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
}

/* ── Phone CTA ────────────────────────────────────────────── */
.ty-phone-cta {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: var(--space-sm);
  background: var(--color-primary);
  color: #ffffff;
  font-family: var(--font-heading);
  font-size: clamp(1.1rem, 2.5vw, 1.4rem);
  font-weight: 700;
  padding: var(--space-md) var(--space-2xl);
  border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-primary-dark);
  margin-bottom: var(--space-xl);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden;
  position: relative;
  animation: ty-fade-up 0.5s 0.45s ease both;
}
.ty-phone-cta:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-primary-dark);
}
.ty-phone-cta:active {
  transform: translateY(2px);
  box-shadow: 0 2px 0 var(--color-primary-dark);
}

/* ── Link Row ─────────────────────────────────────────────── */
.ty-link-row {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: var(--space-xl);
  flex-wrap: wrap;
  margin-bottom: var(--space-xl);
  animation: ty-fade-up 0.5s 0.55s ease both;
}
.ty-link {
  display: inline-flex;
  align-items: center;
  gap: var(--space-xs);
  font-size: var(--font-size-base);
  font-weight: 600;
  color: var(--color-primary);
  text-decoration: underline;
  text-underline-offset: 3px;
  text-decoration-color: rgba(var(--color-accent-rgb), 0.4);
  transition: color var(--transition-fast), text-decoration-color var(--transition-fast);
}
.ty-link:hover {
  color: var(--color-accent);
  text-decoration-color: var(--color-accent);
}
.ty-link i { flex-shrink: 0; }

/* ── Hours Note ───────────────────────────────────────────── */
.ty-hours-note {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  padding: var(--space-md) var(--space-xl);
  background: rgba(var(--color-accent-rgb), 0.05);
  border: 1px solid rgba(var(--color-accent-rgb), 0.15);
  border-radius: var(--radius-md);
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  animation: ty-fade-up 0.5s 0.65s ease both;
}
.ty-hours-note i { color: var(--color-accent); flex-shrink: 0; }

/* ── Responsive ───────────────────────────────────────────── */
@media (max-width: 767px) {
  .ty-phone-cta { width: 100%; justify-content: center; }
  .ty-link-row  { flex-direction: column; gap: var(--space-md); }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

  <section class="ty-section" aria-label="Message received confirmation">
    <div class="container">
      <div class="ty-inner">

        <!-- Check Icon -->
        <div class="ty-check-wrap" aria-hidden="true">
          <div class="ty-check-circle">
            <i data-lucide="check-circle" style="width:44px;height:44px;"></i>
          </div>
        </div>

        <!-- Headline -->
        <h1 class="ty-headline">We Got Your Message</h1>
        <p class="ty-subtext">Your request has been submitted to R.A.H. Solutions. Robert or a crew member will follow up with you directly.</p>

        <!-- What Happens Next -->
        <div class="ty-next-block">
          <div class="ty-next-title">
            <i data-lucide="list-checks" aria-hidden="true" style="width:20px;height:20px;"></i>
            What Happens Next
          </div>
          <ol class="ty-steps">
            <li class="ty-step">
              <div class="ty-step-num" aria-hidden="true">1</div>
              <div class="ty-step-content">
                <div class="ty-step-label">Same-day review during business hours</div>
                <p class="ty-step-desc">Robert or a crew member will review your request within a few hours during business hours (Mon–Fri 7am–5pm, Sat 7am–12pm). After-hours submissions are reviewed first thing the next business day.</p>
              </div>
            </li>
            <li class="ty-step">
              <div class="ty-step-num" aria-hidden="true">2</div>
              <div class="ty-step-content">
                <div class="ty-step-label">We'll call to discuss your project</div>
                <p class="ty-step-desc">We'll call you at the number you provided to discuss your project, timeline, and pricing. This is a quick conversation — no pressure, no sales pitch, just making sure we understand what you need before we visit.</p>
              </div>
            </li>
            <li class="ty-step">
              <div class="ty-step-num" aria-hidden="true">3</div>
              <div class="ty-step-content">
                <div class="ty-step-label">Free on-site estimate visit</div>
                <p class="ty-step-desc">If we're a fit, we'll schedule a free on-site visit to assess your property and prepare your written estimate. Most estimates are ready within 1–2 business days of the site visit.</p>
              </div>
            </li>
          </ol>
        </div>

        <!-- Phone CTA -->
        <a href="tel:6085015123" class="ty-phone-cta">
          <i data-lucide="phone" aria-hidden="true" style="width:20px;height:20px;"></i>
          Need to reach us sooner? Call (608) 501-5123
        </a>

        <!-- Nav links -->
        <div class="ty-link-row">
          <a href="/" class="ty-link">
            <i data-lucide="arrow-left" aria-hidden="true" style="width:15px;height:15px;"></i>
            Back to Homepage
          </a>
          <a href="/services" class="ty-link">
            <i data-lucide="scissors" aria-hidden="true" style="width:15px;height:15px;"></i>
            Browse Our Services
          </a>
        </div>

        <!-- Hours note -->
        <div class="ty-hours-note">
          <i data-lucide="clock" aria-hidden="true" style="width:15px;height:15px;"></i>
          Mon–Fri 7:00am–5:00pm · Sat 7:00am–12:00pm · Edgerton, WI
        </div>

      </div>
    </div>
  </section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
