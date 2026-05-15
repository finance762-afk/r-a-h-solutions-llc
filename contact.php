<?php
// ============================================================
// Contact — R.A.H. Solutions, LLC
// ============================================================
$pageTitle       = 'Contact R.A.H. Solutions | Edgerton, WI';
$pageDescription = 'Get a free landscaping estimate from R.A.H. Solutions in Edgerton, WI. Call (608) 501-5123 or fill out our form. Serving Southern Wisconsin since 2023.';
$canonicalUrl    = 'https://rahsolutionsllc.com/contact';
// SEO: {"@context":"https://schema.org"} — schema and <link rel="canonical"> rendered via head.php
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963874866-f077by-471177305_122202492170208320_1592970065814584229_n.jpg';
$currentPage     = 'contact';

$schemaMarkup = json_encode([
  '@context' => 'https://schema.org',
  '@graph'   => [
    [
      '@type'           => 'BreadcrumbList',
      'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',    'item' => 'https://rahsolutionsllc.com'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Contact', 'item' => 'https://rahsolutionsllc.com/contact'],
      ],
    ],
    [
      '@type'       => 'ContactPage',
      '@id'         => 'https://rahsolutionsllc.com/contact/#page',
      'name'        => 'Contact R.A.H. Solutions',
      'description' => 'Contact R.A.H. Solutions, LLC in Edgerton, WI for a free landscaping estimate. Call (608) 501-5123 or submit our online form.',
      'url'         => 'https://rahsolutionsllc.com/contact',
      'mainEntity'  => ['@id' => 'https://rahsolutionsllc.com/#business'],
    ],
    [
      '@type'      => 'FAQPage',
      'mainEntity' => [
        [
          '@type'          => 'Question',
          'name'           => 'How quickly do you respond to estimate requests?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'R.A.H. Solutions responds to all estimate requests the same business day during Mon–Fri 7am–5pm hours. Requests submitted on Saturday are typically returned Monday morning. We aim to schedule your free on-site estimate within 2–3 business days of your initial contact.',
          ],
        ],
        [
          '@type'          => 'Question',
          'name'           => 'Do you charge for estimates?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'No. All estimates from R.A.H. Solutions are completely free. We\'ll visit your property, assess the scope of your project, and provide a written estimate with no obligation to proceed.',
          ],
        ],
        [
          '@type'          => 'Question',
          'name'           => 'What information should I have ready when I call?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'Having your property address, a general idea of the service you need, and your preferred timing helps us prepare faster. For landscape or hardscape projects, photos of the area you want worked are helpful but not required — we\'ll assess everything during the free site visit.',
          ],
        ],
      ],
    ],
  ],
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

$heroPreload     = $ogImage;
include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<style>
/* ============================================================
   Contact Page — R.A.H. Solutions
   Prefix: .ct-
   ============================================================ */

/* ── Breadcrumb ───────────────────────────────────────────── */
.ct-breadcrumb {
  background: var(--color-bg-dark);
  padding: var(--space-sm) 0;
  position: relative;
  z-index: 10;
}
.ct-breadcrumb-list {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  list-style: none;
  flex-wrap: wrap;
}
.ct-breadcrumb-list li {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.55);
}
.ct-breadcrumb-list li a {
  color: rgba(255,255,255,0.7);
  transition: color var(--transition-fast);
}
.ct-breadcrumb-list li a:hover { color: var(--color-accent); }
.ct-breadcrumb-list li.current {
  color: var(--color-accent);
  font-weight: 600;
}
.ct-breadcrumb-sep { color: rgba(255,255,255,0.3); }

/* ── Mini Hero ────────────────────────────────────────────── */
.ct-hero {
  position: relative;
  min-height: 40vh;
  display: flex;
  align-items: center;
  overflow: hidden;
  background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963874866-f077by-471177305_122202492170208320_1592970065814584229_n.jpg');
  background-size: cover;
  background-position: center;
}
.ct-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    135deg,
    rgba(var(--color-primary-rgb), 0.78) 0%,
    rgba(var(--color-primary-dark-rgb, 15,30,45), 0.72) 100%
  );
  z-index: 1;
}
.ct-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.06'/%3E%3C/svg%3E");
  z-index: 2;
  pointer-events: none;
}
.ct-hero-geo {
  position: absolute;
  top: 50%;
  right: 5%;
  transform: translateY(-50%);
  width: 300px;
  height: 300px;
  border-radius: 50%;
  border: 1px solid rgba(var(--color-accent-rgb), 0.12);
  z-index: 1;
  pointer-events: none;
}
.ct-hero-geo::before {
  content: '';
  position: absolute;
  inset: 20px;
  border-radius: 50%;
  border: 1px solid rgba(var(--color-accent-rgb), 0.08);
}
.ct-hero-inner {
  position: relative;
  z-index: 3;
  padding: var(--space-3xl) 0;
}
.ct-hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-md);
}
.ct-hero-eyebrow::before {
  content: '';
  display: block;
  width: 28px;
  height: 2px;
  background: var(--color-accent);
}
.ct-hero h1 {
  font-family: var(--font-heading);
  font-size: clamp(2.2rem, 5vw, 3.5rem);
  font-weight: 700;
  line-height: 1.1;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: #ffffff;
  margin-bottom: var(--space-sm);
}
.ct-hero-sub {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.75);
  max-width: 52ch;
  line-height: 1.55;
}

/* ── Divider ──────────────────────────────────────────────── */
.ct-divider {
  display: block;
  line-height: 0;
  overflow: hidden;
}
.ct-divider svg {
  display: block;
  width: 100%;
}

/* ── Contact Split Section ────────────────────────────────── */
.ct-split {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.ct-split-grid {
  display: grid;
  grid-template-columns: 1.1fr 0.9fr;
  gap: var(--space-3xl);
  align-items: start;
}

/* ── Form Side ────────────────────────────────────────────── */
.ct-form-container {
  background: var(--color-bg);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-xl);
  border-top: 4px solid var(--color-accent);
  overflow: hidden;
}
.ct-form-header {
  padding: var(--space-2xl) var(--space-2xl) var(--space-lg);
  border-bottom: 1px solid rgba(var(--color-primary-rgb), 0.08);
}
.ct-form-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.ct-form-eyebrow::after {
  content: '';
  display: block;
  width: 24px;
  height: 2px;
  background: var(--color-accent);
}
.ct-form-header h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.6rem, 3vw, 2.2rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-xs);
}
.ct-form-header p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.5;
}
.ct-form-body {
  padding: var(--space-xl) var(--space-2xl) var(--space-2xl);
}
.ct-form {
  display: flex;
  flex-direction: column;
  gap: var(--space-xl);
}
.ct-form-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-lg);
}

/* ── Floating Label Field ─────────────────────────────────── */
.ct-field {
  position: relative;
}
.ct-field label {
  position: absolute;
  top: 50%;
  left: var(--space-md);
  transform: translateY(-50%);
  font-family: var(--font-body);
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  pointer-events: none;
  transition:
    top 0.2s ease,
    transform 0.2s ease,
    font-size 0.2s ease,
    color 0.2s ease;
  background: var(--color-bg);
  padding: 0 var(--space-xs);
  line-height: 1;
  z-index: 1;
}
.ct-field.ct-field-textarea label {
  top: var(--space-lg);
  transform: none;
}
.ct-field input,
.ct-field select,
.ct-field textarea {
  width: 100%;
  padding: var(--space-md) var(--space-md);
  padding-top: calc(var(--space-md) + 6px);
  border: 2px solid rgba(var(--color-primary-rgb), 0.15);
  border-radius: var(--radius-md);
  font-family: var(--font-body);
  font-size: var(--font-size-base);
  color: var(--color-primary);
  background: var(--color-bg);
  outline: none;
  transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
  -webkit-appearance: none;
  appearance: none;
}
.ct-field select {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%231a2b3c' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right var(--space-md) center;
  padding-right: var(--space-2xl);
  cursor: pointer;
}
.ct-field textarea {
  resize: vertical;
  min-height: 120px;
  padding-top: var(--space-xl);
  line-height: 1.6;
}
.ct-field input:focus,
.ct-field select:focus,
.ct-field textarea:focus {
  border-color: var(--color-accent);
  box-shadow: 0 0 0 3px rgba(var(--color-accent-rgb), 0.12);
}
.ct-field input:focus + label,
.ct-field input:not(:placeholder-shown) + label,
.ct-field select:focus + label,
.ct-field select:not([value=""]) + label,
.ct-field textarea:focus + label,
.ct-field textarea:not(:placeholder-shown) + label {
  top: 0;
  transform: translateY(-50%);
  font-size: var(--font-size-xs);
  color: var(--color-accent);
  font-weight: 700;
  letter-spacing: 0.06em;
  text-transform: uppercase;
}
.ct-field.ct-field-textarea input:focus + label,
.ct-field.ct-field-textarea textarea:focus + label,
.ct-field.ct-field-textarea textarea:not(:placeholder-shown) + label {
  top: 0;
  transform: translateY(-50%);
  font-size: var(--font-size-xs);
  color: var(--color-accent);
}

/* required star */
.ct-field .ct-required {
  color: var(--color-accent);
  font-size: var(--font-size-xs);
}

/* ── Consent Fieldset ─────────────────────────────────────── */
.ct-consent-fieldset {
  border: 1px solid rgba(var(--color-primary-rgb), 0.12);
  border-radius: var(--radius-md);
  padding: var(--space-md) var(--space-lg);
  background: rgba(var(--color-primary-rgb), 0.02);
}
.ct-consent-legend {
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  color: var(--color-text-light);
  padding: 0 var(--space-xs);
}
.ct-consent-item {
  display: flex;
  align-items: flex-start;
  gap: var(--space-sm);
  padding: var(--space-md) 0;
  cursor: pointer;
  border-bottom: 1px solid rgba(var(--color-primary-rgb), 0.06);
}
.ct-consent-item:last-child { border-bottom: none; padding-bottom: 0; }
.ct-consent-item:first-of-type { padding-top: var(--space-sm); }
.ct-consent-checkbox {
  flex-shrink: 0;
  margin-top: 3px;
  width: 18px;
  height: 18px;
  cursor: pointer;
  accent-color: var(--color-accent);
}
.ct-consent-label {
  font-size: var(--font-size-sm);
  line-height: 1.55;
  color: var(--color-text-light);
}
.ct-consent-label strong { color: var(--color-primary); font-weight: 600; }
.ct-consent-label a { color: var(--color-accent); text-decoration: underline; }
.ct-consent-required .ct-consent-label { font-weight: 500; }
@media (max-width: 600px) {
  .ct-consent-fieldset { padding: var(--space-sm) var(--space-md); }
  .ct-consent-label { font-size: 0.8rem; }
}

/* Submit button */
.ct-submit {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: var(--space-sm);
  width: 100%;
  background: var(--color-accent);
  color: var(--color-bg-dark);
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 700;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  padding: var(--space-md) var(--space-xl);
  border: none;
  border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-accent-dark);
  cursor: pointer;
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden;
  position: relative;
}
.ct-submit:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-accent-dark);
}
.ct-submit:active {
  transform: translateY(2px);
  box-shadow: 0 2px 0 var(--color-accent-dark);
}
.ct-form-note {
  font-size: var(--font-size-xs);
  color: var(--color-gray, #888);
  text-align: center;
  margin-top: calc(var(--space-sm) * -1);
}

/* ── Info Side ────────────────────────────────────────────── */
.ct-info-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.ct-info-eyebrow::after {
  content: '';
  display: block;
  width: 24px;
  height: 2px;
  background: var(--color-accent);
}
.ct-info h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.6rem, 3vw, 2.2rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-2xl);
}
.ct-phone-block {
  margin-bottom: var(--space-xl);
  padding: var(--space-xl);
  background: var(--color-primary);
  border-radius: var(--radius-lg);
  display: flex;
  align-items: center;
  gap: var(--space-md);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
}
.ct-phone-block:hover {
  transform: translateY(-2px);
  box-shadow: var(--shadow-xl);
}
.ct-phone-icon {
  width: 48px;
  height: 48px;
  border-radius: var(--radius-md);
  background: rgba(var(--color-accent-rgb), 0.15);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
  flex-shrink: 0;
}
.ct-phone-label {
  font-size: var(--font-size-xs);
  text-transform: uppercase;
  letter-spacing: 0.1em;
  color: rgba(255,255,255,0.6);
  font-weight: 700;
  margin-bottom: var(--space-xs);
}
.ct-phone-number {
  font-family: var(--font-heading);
  font-size: clamp(1.3rem, 2.5vw, 1.7rem);
  font-weight: 700;
  color: #ffffff;
  line-height: 1;
}
.ct-info-details {
  display: flex;
  flex-direction: column;
  gap: var(--space-lg);
  margin-bottom: var(--space-xl);
}
.ct-detail-item {
  display: flex;
  gap: var(--space-md);
  align-items: flex-start;
}
.ct-detail-icon {
  width: 36px;
  height: 36px;
  border-radius: var(--radius-sm);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: 2px;
}
.ct-detail-label {
  font-size: var(--font-size-xs);
  text-transform: uppercase;
  letter-spacing: 0.1em;
  font-weight: 700;
  color: var(--color-text-light);
  margin-bottom: var(--space-xs);
}
.ct-detail-value {
  font-size: var(--font-size-base);
  color: var(--color-primary);
  font-weight: 500;
  line-height: 1.5;
}
.ct-detail-value a {
  color: var(--color-primary);
  transition: color var(--transition-fast);
}
.ct-detail-value a:hover { color: var(--color-accent); }

/* Hours table */
.ct-hours-table {
  width: 100%;
  border-collapse: collapse;
  font-size: var(--font-size-sm);
}
.ct-hours-table tr td {
  padding: var(--space-xs) 0;
  color: var(--color-text-light);
  line-height: 1.5;
}
.ct-hours-table tr td:first-child {
  font-weight: 600;
  color: var(--color-primary);
  min-width: 80px;
}
.ct-hours-table tr.ct-closed td {
  color: rgba(var(--color-primary-rgb), 0.35);
}

/* Trust badges strip */
.ct-info-trust {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-sm);
  margin-top: var(--space-xl);
  padding-top: var(--space-xl);
  border-top: 1px solid rgba(var(--color-primary-rgb), 0.08);
}
.ct-trust-pill {
  display: inline-flex;
  align-items: center;
  gap: var(--space-xs);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  color: var(--color-primary);
  background: rgba(var(--color-accent-rgb), 0.08);
  border: 1px solid rgba(var(--color-accent-rgb), 0.2);
  border-radius: 100px;
  padding: var(--space-xs) var(--space-md);
}
.ct-trust-pill i { color: var(--color-accent); }

/* ── Map Placeholder ──────────────────────────────────────── */
.ct-map-section {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
}
.ct-map-section h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.6rem, 3vw, 2.2rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  text-align: center;
  margin-bottom: var(--space-2xl);
}
.ct-map-placeholder {
  width: 100%;
  min-height: 320px;
  background: var(--color-bg-dark);
  border-radius: var(--radius-lg);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: var(--space-lg);
  padding: var(--space-3xl);
  position: relative;
  overflow: hidden;
}
.ct-map-placeholder::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at center, rgba(var(--color-accent-rgb), 0.06) 0%, transparent 70%);
  pointer-events: none;
}
.ct-map-icon {
  color: var(--color-accent);
  opacity: 0.8;
}
.ct-map-title {
  font-family: var(--font-heading);
  font-size: clamp(1.2rem, 2.5vw, 1.6rem);
  font-weight: 700;
  text-wrap: balance;
  color: #ffffff;
  text-align: center;
}
.ct-map-sub {
  font-size: var(--font-size-base);
  color: rgba(255,255,255,0.6);
  text-align: center;
  max-width: 50ch;
  line-height: 1.5;
}
.ct-map-areas {
  display: flex;
  gap: var(--space-md);
  flex-wrap: wrap;
  justify-content: center;
}
.ct-map-area-tag {
  display: inline-flex;
  align-items: center;
  gap: var(--space-xs);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: var(--color-accent);
  background: rgba(var(--color-accent-rgb), 0.1);
  border: 1px solid rgba(var(--color-accent-rgb), 0.2);
  border-radius: 100px;
  padding: var(--space-xs) var(--space-md);
}

/* ── FAQ Section ──────────────────────────────────────────── */
.ct-faq {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.ct-faq-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.ct-faq-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.ct-faq-eyebrow::after {
  content: '';
  display: block;
  width: 24px;
  height: 2px;
  background: var(--color-accent);
}
.ct-faq-header h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.ct-faq-sub {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 50ch;
  margin: 0 auto;
}
.ct-faq-list {
  max-width: 800px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}
.ct-faq-item {
  background: var(--color-bg);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-sm);
  border: 1px solid rgba(var(--color-primary-rgb), 0.08);
  overflow: hidden;
}
.ct-faq-item summary {
  padding: var(--space-lg) var(--space-xl);
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 600;
  text-wrap: balance;
  color: var(--color-primary);
  cursor: pointer;
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: var(--space-md);
  list-style: none;
  transition: color var(--transition-fast);
}
.ct-faq-item summary::-webkit-details-marker { display: none; }
.ct-faq-item summary::after {
  content: '+';
  font-size: 1.4rem;
  color: var(--color-accent);
  flex-shrink: 0;
  transition: transform var(--transition-base);
}
.ct-faq-item[open] summary::after { transform: rotate(45deg); }
.ct-faq-item[open] summary { color: var(--color-accent); }
.ct-faq-answer {
  padding: 0 var(--space-xl) var(--space-lg);
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: 65ch;
}

/* ── Responsive ───────────────────────────────────────────── */
@media (max-width: 1023px) {
  .ct-split-grid    { grid-template-columns: 1fr; }
  .ct-form-row      { grid-template-columns: 1fr; }
}
@media (max-width: 767px) {
  .ct-form-body     { padding: var(--space-lg); }
  .ct-form-header   { padding: var(--space-lg); }
  .ct-map-placeholder { min-height: 260px; padding: var(--space-xl); }
  .ct-hero-geo      { display: none; }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

  <!-- ── Breadcrumb ─────────────────────────────────────────── -->
  <nav class="ct-breadcrumb" aria-label="Breadcrumb">
    <div class="container">
      <ol class="ct-breadcrumb-list">
        <li><a href="/">Home</a></li>
        <li aria-hidden="true"><span class="ct-breadcrumb-sep">›</span></li>
        <li class="current" aria-current="page">Contact</li>
      </ol>
    </div>
  </nav>

  <!-- ── Mini Hero ──────────────────────────────────────────── -->
  <section class="ct-hero" aria-label="Contact R.A.H. Solutions">
    <div class="ct-hero-geo" aria-hidden="true"></div>
    <div class="container ct-hero-inner">
      <span class="ct-hero-eyebrow">
        <i data-lucide="phone" aria-hidden="true" style="width:13px;height:13px;"></i>
        Free Estimates — No Obligation
      </span>
      <h1>Get Your Free Estimate</h1>
      <p class="ct-hero-sub">Call Robert directly at <a href="tel:6085015123" style="color:var(--color-accent);font-weight:700;">(608) 501-5123</a> or fill out the form below. We respond the same business day.</p>
    </div>
  </section>

  <!-- ── Divider ────────────────────────────────────────────── -->
  <div class="ct-divider" aria-hidden="true">
    <svg viewBox="0 0 1200 50" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,50 1200,50 0,50" fill="#f4f7f9"/>
    </svg>
  </div>

  <!-- ── SIGNATURE: Contact Split Section ──────────────────── -->
  <section class="ct-split" aria-label="Contact form and information">
    <div class="container">
      <div class="ct-split-grid">

        <!-- LEFT: Form -->
        <div>
          <div class="ct-form-container">
            <div class="ct-form-header">
              <span class="ct-form-eyebrow">Free Estimate Request</span>
              <h2>What Can We Help You With?</h2>
              <p>We'll review your request and follow up within a few hours during business hours to discuss your project and schedule a free site visit.</p>
            </div>
            <div class="ct-form-body">
              <form
                class="ct-form"
                action="https://db.pageone.cloud/functions/v1/leads/r-a-h-solutions-llc"
                method="POST"
                novalidate
              >
                <!-- Honeypot -->
                <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
                <!-- Thank-you redirect -->
                <input type="hidden" name="_next" value="/thank-you">
                <!-- Consent tracking (TCPA 2025/2026) -->
                <input type="hidden" name="_consent_version" value="v2.1">
                <input type="hidden" name="_consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8'); ?>">

                <!-- Row 1: Name + Phone -->
                <div class="ct-form-row">
                  <div class="ct-field">
                    <input
                      type="text"
                      id="ct-name"
                      name="name"
                      placeholder=" "
                      required
                      autocomplete="name"
                    >
                    <label for="ct-name">Your Name <span class="ct-required">*</span></label>
                  </div>
                  <div class="ct-field">
                    <input
                      type="tel"
                      id="ct-phone"
                      name="phone"
                      placeholder=" "
                      required
                      autocomplete="tel"
                    >
                    <label for="ct-phone">Phone Number <span class="ct-required">*</span></label>
                  </div>
                </div>

                <!-- Email -->
                <div class="ct-field">
                  <input
                    type="email"
                    id="ct-email"
                    name="email"
                    placeholder=" "
                    required
                    autocomplete="email"
                  >
                  <label for="ct-email">Email Address <span class="ct-required">*</span></label>
                </div>

                <!-- Service Dropdown -->
                <div class="ct-field">
                  <select id="ct-service" name="service" aria-label="Service Needed">
                    <option value="" disabled selected> </option>
                    <option value="lawn-maintenance">Lawn Maintenance</option>
                    <option value="landscape-design">Landscape Design</option>
                    <option value="landscape-installation">Landscape Installation</option>
                    <option value="hardscaping-services">Hardscaping Services</option>
                    <option value="concrete-services">Concrete Services</option>
                    <option value="tree-pruning">Tree Pruning</option>
                    <option value="shrub-trimming">Shrub Trimming</option>
                    <option value="garden-maintenance">Garden Maintenance</option>
                    <option value="mulching-services">Mulching Services</option>
                    <option value="sod-installation">Sod Installation</option>
                    <option value="lawn-restoration">Lawn Restoration</option>
                    <option value="spring-yard-cleanup">Spring Yard Cleanup</option>
                    <option value="fall-yard-cleanup">Fall Yard Cleanup</option>
                    <option value="snow-removal">Snow Removal</option>
                    <option value="excavating-services">Excavating Services</option>
                    <option value="residential-lawn-care">Residential Lawn Care</option>
                    <option value="commercial-lawn-care">Commercial Lawn Care</option>
                  </select>
                  <label for="ct-service">Service Needed</label>
                </div>

                <!-- Message -->
                <div class="ct-field ct-field-textarea">
                  <textarea
                    id="ct-message"
                    name="message"
                    placeholder=" "
                    rows="4"
                    aria-label="Project details"
                  ></textarea>
                  <label for="ct-message">Tell Us About Your Project (optional)</label>
                </div>

                <!-- ═══ CONSENT CHECKBOXES (TCPA 2025/2026 + Texas TCPA) ═══ -->
                <fieldset class="ct-consent-fieldset">
                  <legend class="ct-consent-legend">Communication Consent</legend>

                  <label class="ct-consent-item">
                    <input type="checkbox" name="email_opt_in" value="yes" class="ct-consent-checkbox">
                    <span class="ct-consent-label">
                      <strong>Email updates (optional):</strong> I agree to receive emails from R.A.H. Solutions about my inquiry, services, promotions, and news. I understand I can unsubscribe anytime via the link in any email or by emailing <a href="mailto:rahsolutionsllc2@gmail.com">rahsolutionsllc2@gmail.com</a>. Message frequency varies.
                    </span>
                  </label>

                  <label class="ct-consent-item">
                    <input type="checkbox" name="sms_opt_in" value="yes" class="ct-consent-checkbox">
                    <span class="ct-consent-label">
                      <strong>SMS/Text messages (optional):</strong> I agree to receive text messages from R.A.H. Solutions at the phone number I provided. Message types may include appointment reminders, service updates, and promotional offers. Message frequency varies. Message and data rates may apply. Reply STOP to unsubscribe, HELP for help. <strong>Consent is not a condition of purchase.</strong>
                    </span>
                  </label>

                  <label class="ct-consent-item ct-consent-required">
                    <input type="checkbox" name="terms_accepted" value="yes" class="ct-consent-checkbox" required>
                    <span class="ct-consent-label">
                      I have read and agree to the <a href="/privacy-policy/">Privacy Policy</a> and <a href="/terms/">Terms of Service</a>. <span class="ct-required">*</span>
                    </span>
                  </label>
                </fieldset>

                <button type="submit" class="ct-submit">
                  <i data-lucide="send" aria-hidden="true" style="width:18px;height:18px;"></i>
                  Send My Request
                </button>
                <p class="ct-form-note">No spam. No obligation. We'll contact you to discuss your project.</p>
              </form>
            </div>
          </div>
        </div>

        <!-- RIGHT: Contact Info -->
        <div class="ct-info">
          <span class="ct-info-eyebrow">Direct Contact</span>
          <h2>How Can You Reach Us Directly?</h2>

          <a href="tel:6085015123" class="ct-phone-block" aria-label="Call R.A.H. Solutions at (608) 501-5123">
            <div class="ct-phone-icon">
              <i data-lucide="phone" aria-hidden="true" style="width:22px;height:22px;"></i>
            </div>
            <div>
              <div class="ct-phone-label">Call or Text</div>
              <div class="ct-phone-number">(608) 501-5123</div>
            </div>
          </a>

          <div class="ct-info-details">
            <div class="ct-detail-item">
              <div class="ct-detail-icon">
                <i data-lucide="mail" aria-hidden="true" style="width:18px;height:18px;"></i>
              </div>
              <div>
                <div class="ct-detail-label">Email</div>
                <div class="ct-detail-value">
                  <a href="mailto:rahsolutionsllc2@gmail.com">rahsolutionsllc2@gmail.com</a>
                </div>
              </div>
            </div>
            <div class="ct-detail-item">
              <div class="ct-detail-icon">
                <i data-lucide="map-pin" aria-hidden="true" style="width:18px;height:18px;"></i>
              </div>
              <div>
                <div class="ct-detail-label">Address</div>
                <div class="ct-detail-value">262 County Road W<br>Edgerton, WI 53534</div>
              </div>
            </div>
            <div class="ct-detail-item">
              <div class="ct-detail-icon">
                <i data-lucide="clock" aria-hidden="true" style="width:18px;height:18px;"></i>
              </div>
              <div>
                <div class="ct-detail-label">Business Hours</div>
                <div class="ct-detail-value">
                  <table class="ct-hours-table">
                    <tbody>
                      <tr><td>Mon – Fri</td><td>7:00am – 5:00pm</td></tr>
                      <tr><td>Saturday</td><td>7:00am – 12:00pm</td></tr>
                      <tr class="ct-closed"><td>Sunday</td><td>Closed</td></tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="ct-detail-item">
              <div class="ct-detail-icon">
                <i data-lucide="map" aria-hidden="true" style="width:18px;height:18px;"></i>
              </div>
              <div>
                <div class="ct-detail-label">Service Areas</div>
                <div class="ct-detail-value"><a href="/service-area" style="color:var(--color-accent);">Edgerton · Stoughton · Janesville · Madison, WI</a><br><span style="font-size:var(--font-size-sm);color:var(--color-text-light);">~50-mile radius from Edgerton</span></div>
              </div>
            </div>
          </div>

          <p style="font-size:var(--font-size-sm);color:var(--color-text-light);margin-bottom:var(--space-md);">
            Browse our full list of <a href="/services" style="color:var(--color-accent);font-weight:600;">landscaping services</a> to see everything we offer across our service area.
          </p>

          <div class="ct-info-trust">
            <span class="ct-trust-pill">
              <i data-lucide="shield-check" aria-hidden="true" style="width:13px;height:13px;"></i>
              Licensed &amp; Insured
            </span>
            <span class="ct-trust-pill">
              <i data-lucide="file-text" aria-hidden="true" style="width:13px;height:13px;"></i>
              Free Estimates
            </span>
            <span class="ct-trust-pill">
              <i data-lucide="home" aria-hidden="true" style="width:13px;height:13px;"></i>
              Family-Owned
            </span>
            <span class="ct-trust-pill">
              <i data-lucide="star" aria-hidden="true" style="width:13px;height:13px;"></i>
              4.9★ Rated
            </span>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ── Divider ────────────────────────────────────────────── -->
  <div class="ct-divider" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,60 1200,0 1200,60" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ── Map Placeholder ────────────────────────────────────── -->
  <section class="ct-map-section">
    <div class="container">
      <h2>Where Do We Serve in Southern Wisconsin?</h2>
      <div class="ct-map-placeholder" role="img" aria-label="Service area coverage map for R.A.H. Solutions">
        <svg class="ct-map-icon" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
          <circle cx="12" cy="10" r="3"></circle>
        </svg>
        <p class="ct-map-title">Serving Edgerton &amp; Surrounding Rock County Communities</p>
        <p class="ct-map-sub">R.A.H. Solutions operates within a 50-mile radius of our Edgerton base on County Road W. Contact us to confirm availability at your address.</p>
        <div class="ct-map-areas">
          <span class="ct-map-area-tag">
            <i data-lucide="map-pin" aria-hidden="true" style="width:11px;height:11px;"></i>
            Edgerton, WI
          </span>
          <span class="ct-map-area-tag">
            <i data-lucide="map-pin" aria-hidden="true" style="width:11px;height:11px;"></i>
            Stoughton, WI
          </span>
          <span class="ct-map-area-tag">
            <i data-lucide="map-pin" aria-hidden="true" style="width:11px;height:11px;"></i>
            Janesville, WI
          </span>
          <span class="ct-map-area-tag">
            <i data-lucide="map-pin" aria-hidden="true" style="width:11px;height:11px;"></i>
            Madison, WI
          </span>
        </div>
      </div>
    </div>
  </section>

  <!-- ── Divider ────────────────────────────────────────────── -->
  <div class="ct-divider" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,60 1200,60 0,60" fill="#f4f7f9"/>
    </svg>
  </div>

  <!-- ── FAQ Section ────────────────────────────────────────── -->
  <section class="ct-faq" data-animate="fade-up">
    <div class="container">
      <div class="ct-faq-header">
        <span class="ct-faq-eyebrow" style="justify-content:center; margin-bottom: var(--space-sm);">Before You Reach Out</span>
        <h2>What Are Common Questions About Contacting Us?</h2>
        <p class="ct-faq-sub">Quick answers so you know what to expect.</p>
      </div>
      <div class="ct-faq-list">
        <details class="ct-faq-item">
          <summary>How quickly do you respond to estimate requests?</summary>
          <div class="ct-faq-answer">
            <p>R.A.H. Solutions responds to all estimate requests the same business day during Mon–Fri 7am–5pm hours. Requests submitted on Saturday are typically returned Monday morning. We aim to schedule your free on-site estimate within 2–3 business days of your initial contact.</p>
          </div>
        </details>
        <details class="ct-faq-item">
          <summary>Do you charge for estimates?</summary>
          <div class="ct-faq-answer">
            <p>No. All estimates from R.A.H. Solutions are completely free. We'll visit your property, assess the scope of your project, and provide a written estimate with no obligation to proceed. There's no pressure and no fees at any point in the estimation process.</p>
          </div>
        </details>
        <details class="ct-faq-item">
          <summary>What information should I have ready when I call?</summary>
          <div class="ct-faq-answer">
            <p>Having your property address, a general idea of the service you need, and your preferred timing helps us prepare faster. For landscape or hardscape projects, photos of the area you want worked are helpful but not required — we'll assess everything during the free on-site visit.</p>
          </div>
        </details>
      </div>
    </div>
  </section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
