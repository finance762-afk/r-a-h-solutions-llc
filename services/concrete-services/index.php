<?php
// ============================================================
// R.A.H. Solutions, LLC — services/concrete-services.php
// Service: Concrete Services  |  Standard Tier
// ============================================================

$pageTitle       = 'Concrete Services in Edgerton, WI';
$pageDescription = 'Concrete driveways, patios & walkways in Edgerton, WI — proper base prep, air-entrained mix for WI winters, all finishes. Free estimates. Call (608) 501-5123.';
$canonicalUrl    = 'https://rahsolutionsllc.com/services/concrete-services';
// SEO: {"@context":"https://schema.org"} — schema and <link rel="canonical"> rendered via head.php
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1778785039114-o.jpg';
$currentPage     = 'service-concrete-services';
$heroPreload     = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1778785039114-o.jpg';

$pageFaqs = [
  [
    'q' => 'How thick should a concrete driveway be in Wisconsin?',
    'a' => 'In Wisconsin, residential driveways should be a minimum of 4 inches thick, with 5–6 inches recommended for areas that see heavy vehicle traffic or large trucks. We always install on a properly compacted 6-inch aggregate base to prevent settling and cracking through freeze-thaw cycles.',
  ],
  [
    'q' => 'What causes concrete to crack?',
    'a' => 'The most common causes are inadequate base preparation, missing or improperly spaced control joints, too much water added to the mix on-site (which weakens the slab), and using a non-air-entrained mix in climates like Wisconsin that experience repeated freeze-thaw cycles. We address all four on every pour.',
  ],
  [
    'q' => 'How long does concrete take to cure?',
    'a' => 'Concrete reaches approximately 70% of its design strength in 7 days and full strength at 28 days. Light foot traffic is safe after 24–48 hours. We recommend keeping vehicles off a new driveway for at least 7 days, and avoiding de-icing salts for the first winter season.',
  ],
  [
    'q' => 'Can you stamp or stain concrete in Edgerton?',
    'a' => 'Yes. We offer stamped concrete patterns (cobblestone, slate, wood plank) and integral color options for driveways, patios, and walkways. Decorative concrete adds curb appeal while maintaining the same durability as standard concrete — it just requires periodic sealing to preserve the finish.',
  ],
];

$faqItems = [];
foreach ($pageFaqs as $faq) {
  $faqItems[] = [
    '@type'          => 'Question',
    'name'           => $faq['q'],
    'acceptedAnswer' => ['@type' => 'Answer', 'text' => $faq['a']],
  ];
}

$schemaMarkup = json_encode([
  '@context' => 'https://schema.org',
  '@graph'   => [
    [
      '@type'           => 'BreadcrumbList',
      'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => 'https://rahsolutionsllc.com'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => 'https://rahsolutionsllc.com/services'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Concrete Services', 'item' => 'https://rahsolutionsllc.com/services/concrete-services'],
      ],
    ],
    [
      '@type'       => 'Service',
      '@id'         => 'https://rahsolutionsllc.com/services/concrete-services/#service',
      'name'        => 'Concrete Services',
      'description' => 'Professional concrete installation for driveways, walkways, patios, steps, and poured walls in Edgerton, WI. Air-entrained mixes, proper base prep, broom and decorative finishes available.',
      'provider'    => ['@type' => 'LocalBusiness', '@id' => 'https://rahsolutionsllc.com/#business'],
      'areaServed'  => [
        ['@type' => 'City', 'name' => 'Edgerton'],
        ['@type' => 'City', 'name' => 'Stoughton'],
        ['@type' => 'City', 'name' => 'Janesville'],
        ['@type' => 'City', 'name' => 'Madison'],
      ],
      'serviceType' => 'Concrete Installation',
    ],
    [
      '@type'      => 'FAQPage',
      'mainEntity' => $faqItems,
    ],
    [
      '@type'           => 'LocalBusiness',
      '@id'             => 'https://rahsolutionsllc.com/#aggregate',
      'name'            => 'R.A.H. Solutions, LLC',
      'aggregateRating' => [
        '@type'       => 'AggregateRating',
        'ratingValue' => '4.9',
        'reviewCount' => '47',
        'bestRating'  => '5',
        'worstRating' => '1',
      ],
    ],
  ],
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<style>
/* ============================================================
   Concrete Services — Page-Specific Styles
   Standard Tier: 200+ lines, all var() tokens
   ============================================================ */

/* ── Breadcrumb ─────────────────────────────────────────────── */
.breadcrumb-nav {
  background: var(--color-bg-alt);
  padding: var(--space-sm) 0;
  border-bottom: 1px solid var(--color-light);
  position: relative;
  z-index: 10;
}
.breadcrumb-nav .container {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  flex-wrap: wrap;
}
.breadcrumb-nav a {
  color: var(--color-accent);
  font-size: var(--font-size-sm);
  font-family: var(--font-body);
  transition: color var(--transition-fast);
}
.breadcrumb-nav a:hover { color: var(--color-primary); }
.breadcrumb-nav span {
  color: var(--color-text-light);
  font-size: var(--font-size-sm);
}
.breadcrumb-nav .current {
  color: var(--color-text);
  font-weight: 600;
}

/* ── Hero ────────────────────────────────────────────────────── */
.concrete-hero {
  min-height: 60vh;
  position: relative;
  display: flex;
  align-items: center;
  background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1778785039114-o.jpg');
  background-size: cover;
  background-position: center;
  overflow: hidden;
}
.concrete-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    135deg,
    rgba(var(--color-primary-rgb), 0.88) 0%,
    rgba(var(--color-primary-rgb), 0.65) 60%,
    rgba(var(--color-accent-rgb), 0.25) 100%
  );
  z-index: 1;
}
.concrete-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 2;
}
.concrete-hero .hero-inner {
  position: relative;
  z-index: 3;
  width: 100%;
  padding: var(--space-4xl) 0;
}
.concrete-hero .eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: rgba(var(--color-accent-rgb), 0.18);
  border: 1px solid rgba(var(--color-accent-rgb), 0.4);
  color: var(--color-accent);
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  padding: var(--space-xs) var(--space-md);
  border-radius: var(--radius-xl);
  margin-bottom: var(--space-lg);
}
.concrete-hero h1 {
  font-family: var(--font-heading);
  font-size: clamp(2.4rem, 5.5vw, 4rem);
  font-weight: 800;
  line-height: 1.1;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: #fff;
  margin-bottom: var(--space-lg);
  max-width: 720px;
}
.concrete-hero h1 span {
  background: linear-gradient(90deg, var(--color-accent), rgba(var(--color-accent-rgb), 0.6));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.concrete-hero .hero-sub {
  font-family: var(--font-body);
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.85);
  max-width: 55ch;
  line-height: 1.6;
  margin-bottom: var(--space-xl);
}
.concrete-hero .hero-ctas {
  display: flex;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.btn-hero-primary {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-accent);
  color: var(--color-primary-dark);
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 700;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-accent-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden;
}
.btn-hero-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-accent-dark);
  color: var(--color-primary-dark);
}
.btn-hero-primary:active {
  transform: translateY(2px);
  box-shadow: 0 2px 0 var(--color-accent-dark);
}
.btn-hero-secondary {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: transparent;
  color: #fff;
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 700;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-md);
  border: 2px solid rgba(255,255,255,0.55);
  transition: background var(--transition-fast), border-color var(--transition-fast);
  overflow: hidden;
}
.btn-hero-secondary:hover {
  background: rgba(255,255,255,0.1);
  border-color: #fff;
  color: #fff;
}

/* ── Proof Ticker ─────────────────────────────────────────────── */
.ticker-strip {
  background: var(--color-primary);
  overflow: hidden;
  padding: var(--space-sm) 0;
  border-top: 3px solid var(--color-accent);
}
.ticker-track {
  display: flex;
  width: max-content;
  animation: ticker-scroll 28s linear infinite;
}
.ticker-track:hover { animation-play-state: paused; }
.ticker-item {
  display: flex;
  align-items: center;
  gap: var(--space-lg);
  padding: 0 var(--space-2xl);
  white-space: nowrap;
  color: #fff;
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
}
.ticker-sep {
  color: var(--color-accent);
  font-size: var(--font-size-lg);
  line-height: 1;
}
@keyframes ticker-scroll {
  from { transform: translateX(0); }
  to   { transform: translateX(-50%); }
}

/* ── Service Detail Section ──────────────────────────────────── */
.concrete-detail {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
}
.concrete-detail .split-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3xl);
  align-items: center;
}
.concrete-detail .split-content {}
.concrete-detail .split-content .section-eyebrow {
  display: inline-block;
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-md);
}
.concrete-detail h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-lg);
}
.concrete-detail .prose p {
  font-family: var(--font-body);
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: var(--color-text);
  max-width: 65ch;
  margin-bottom: var(--space-md);
}
.concrete-detail .prose p:last-child { margin-bottom: 0; }
.detail-price-tag {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-bg-alt);
  border-left: 4px solid var(--color-accent);
  padding: var(--space-sm) var(--space-md);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  margin-bottom: var(--space-xl);
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 700;
  color: var(--color-primary);
}
.split-img-frame {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
}
.split-img-frame picture img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  aspect-ratio: 4/3;
  display: block;
}
.split-img-badge {
  position: absolute;
  bottom: var(--space-lg);
  left: var(--space-lg);
  background: var(--color-accent);
  color: var(--color-primary-dark);
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  padding: var(--space-xs) var(--space-md);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-md);
}

/* ── Dividers ────────────────────────────────────────────────── */
.divider-wrap {
  display: block;
  overflow: hidden;
  line-height: 0;
}
.divider-wrap svg {
  display: block;
  width: 100%;
}

/* ── Mid-Page CTA Banner ──────────────────────────────────────── */
.cta-banner-mid {
  position: relative;
  padding: var(--space-3xl) 0;
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  overflow: hidden;
}
.cta-banner-mid::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
}
.cta-banner-mid .container {
  position: relative;
  z-index: 1;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: var(--space-xl);
  flex-wrap: wrap;
}
.cta-banner-mid .cta-text h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.5rem, 3vw, 2.2rem);
  font-weight: 700;
  letter-spacing: -0.01em;
  text-wrap: balance;
  color: #fff;
  margin-bottom: var(--space-sm);
}
.cta-banner-mid .cta-text p {
  font-family: var(--font-body);
  font-size: var(--font-size-base);
  color: rgba(255,255,255,0.8);
  max-width: 50ch;
}
.cta-banner-mid .cta-actions {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  gap: var(--space-md);
}
.cta-phone-large {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  color: var(--color-accent);
  font-family: var(--font-heading);
  font-size: clamp(1.4rem, 2.5vw, 1.9rem);
  font-weight: 700;
  letter-spacing: 0.02em;
  transition: color var(--transition-fast);
}
.cta-phone-large:hover { color: #fff; }
.btn-cta-accent {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-accent);
  color: var(--color-primary-dark);
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  font-weight: 700;
  letter-spacing: 0.05em;
  text-transform: uppercase;
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-accent-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden;
}
.btn-cta-accent:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-accent-dark);
  color: var(--color-primary-dark);
}

/* ── Why Choose — dark strip ─────────────────────────────────── */
.why-choose-concrete {
  background: var(--color-bg-dark);
  padding: var(--space-4xl) 0;
}
.why-choose-concrete .section-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.why-choose-concrete .section-header .eyebrow {
  display: inline-block;
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.why-choose-concrete .section-header h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: #fff;
}
.benefit-cards-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
}
.benefit-card {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: var(--radius-lg);
  padding: var(--space-xl);
  text-align: center;
  transition: background var(--transition-base), transform var(--transition-base), box-shadow var(--transition-base);
}
.benefit-card:hover {
  background: rgba(var(--color-accent-rgb), 0.1);
  transform: translateY(-4px);
  box-shadow: var(--shadow-lg);
}
.benefit-icon {
  width: 56px;
  height: 56px;
  background: rgba(var(--color-accent-rgb), 0.15);
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto var(--space-md);
  color: var(--color-accent);
}
.benefit-icon svg { width: 28px; height: 28px; }
.benefit-card h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 700;
  text-wrap: balance;
  color: #fff;
  margin-bottom: var(--space-sm);
}
.benefit-card p {
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  line-height: 1.6;
  color: rgba(255,255,255,0.7);
}

/* ── Signature Section: Before/After Detail Strip ────────────── */
/* Two-column dark comparison strip — signature layout for this page */
.concrete-signature {
  background: var(--color-primary);
  padding: var(--space-4xl) 0;
  position: relative;
  overflow: hidden;
}
.concrete-signature::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 4px;
  background: linear-gradient(90deg, transparent, var(--color-accent), transparent);
}
.concrete-sig-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 0;
}
.concrete-sig-panel {
  padding: var(--space-3xl) var(--space-2xl);
  position: relative;
}
.concrete-sig-panel:first-child {
  border-right: 1px solid rgba(255,255,255,0.1);
}
.concrete-sig-panel .panel-label {
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-md);
}
.concrete-sig-panel h3 {
  font-family: var(--font-heading);
  font-size: clamp(1.4rem, 2.5vw, 2rem);
  font-weight: 700;
  letter-spacing: -0.01em;
  text-wrap: balance;
  color: #fff;
  margin-bottom: var(--space-lg);
}
.concrete-sig-panel .sig-img {
  border-radius: var(--radius-md);
  overflow: hidden;
  margin-bottom: var(--space-lg);
  box-shadow: var(--shadow-xl);
}
.concrete-sig-panel .sig-img img {
  width: 100%;
  height: 260px;
  object-fit: cover;
  display: block;
}
.concrete-sig-panel p {
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  line-height: 1.7;
  color: rgba(255,255,255,0.75);
  max-width: 45ch;
}
.sig-spec-list {
  list-style: none;
  padding: 0;
  margin: var(--space-lg) 0 0;
}
.sig-spec-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-sm);
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.8);
  padding: var(--space-xs) 0;
  border-bottom: 1px solid rgba(255,255,255,0.06);
}
.sig-spec-list li:last-child { border-bottom: none; }
.sig-spec-list li::before {
  content: '✓';
  color: var(--color-accent);
  font-weight: 700;
  flex-shrink: 0;
  margin-top: 1px;
}

/* ── Process Steps ───────────────────────────────────────────── */
.concrete-process {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.concrete-process .section-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.concrete-process .section-header .eyebrow {
  display: inline-block;
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.concrete-process .section-header h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: var(--color-primary);
}
.process-steps {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
  position: relative;
}
.process-steps::before {
  content: '';
  position: absolute;
  top: 36px;
  left: calc(25% - 0px);
  right: calc(25% - 0px);
  height: 2px;
  background: linear-gradient(90deg, var(--color-accent), rgba(var(--color-accent-rgb), 0.2));
  z-index: 0;
}
.process-step {
  text-align: center;
  position: relative;
  z-index: 1;
}
.step-number {
  width: 72px;
  height: 72px;
  background: var(--color-accent);
  color: var(--color-primary-dark);
  font-family: var(--font-heading);
  font-size: 1.5rem;
  font-weight: 800;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto var(--space-lg);
  box-shadow: 0 0 0 4px var(--color-bg-alt), 0 0 0 6px rgba(var(--color-accent-rgb), 0.3);
  transition: transform var(--transition-base);
}
.process-step:hover .step-number { transform: scale(1.1); }
.process-step h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  font-weight: 700;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.process-step p {
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  line-height: 1.6;
  color: var(--color-text-light);
  max-width: 22ch;
  margin: 0 auto;
}

/* ── FAQ Section ──────────────────────────────────────────────── */
.concrete-faq {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
}
.concrete-faq .section-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.concrete-faq .section-header .eyebrow {
  display: inline-block;
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.concrete-faq .section-header h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: var(--color-primary);
}
.faq-list {
  max-width: 780px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}
.faq-item {
  background: var(--color-bg-alt);
  border-radius: var(--radius-md);
  border: 1px solid var(--color-light);
  overflow: hidden;
}
.faq-item summary {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: var(--space-lg) var(--space-xl);
  cursor: pointer;
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 700;
  color: var(--color-primary);
  text-wrap: balance;
  list-style: none;
  transition: color var(--transition-fast);
  gap: var(--space-md);
}
.faq-item summary::-webkit-details-marker { display: none; }
.faq-item summary::after {
  content: '+';
  font-size: 1.4rem;
  color: var(--color-accent);
  flex-shrink: 0;
  transition: transform var(--transition-fast);
  line-height: 1;
}
.faq-item[open] summary::after { transform: rotate(45deg); }
.faq-item[open] summary { color: var(--color-accent); }
.faq-answer {
  padding: 0 var(--space-xl) var(--space-lg);
  font-family: var(--font-body);
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: var(--color-text-light);
  max-width: 65ch;
}

/* ── Closing CTA ──────────────────────────────────────────────── */
.closing-cta {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
  text-align: center;
}
.closing-cta .eyebrow {
  display: inline-block;
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-md);
}
.closing-cta h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-md);
}
.closing-cta p {
  font-family: var(--font-body);
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto var(--space-xl);
  line-height: 1.6;
}
.closing-cta-actions {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: var(--space-lg);
  flex-wrap: wrap;
}
.btn-closing-primary {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-primary);
  color: #fff;
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
}
.btn-closing-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-primary-dark);
  color: #fff;
}
.closing-phone {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  color: var(--color-primary);
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  font-weight: 700;
}
.closing-phone:hover { color: var(--color-accent); }
.last-updated {
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  color: var(--color-text-light);
  margin-top: var(--space-xl);
}

/* ── Responsive ───────────────────────────────────────────────── */
@media (max-width: 1023px) {
  .benefit-cards-grid { grid-template-columns: repeat(2, 1fr); }
  .process-steps { grid-template-columns: repeat(2, 1fr); }
  .process-steps::before { display: none; }
  .concrete-sig-grid { grid-template-columns: 1fr; }
  .concrete-sig-panel:first-child { border-right: none; border-bottom: 1px solid rgba(255,255,255,0.1); }
}
@media (max-width: 767px) {
  .concrete-detail .split-grid { grid-template-columns: 1fr; }
  .benefit-cards-grid { grid-template-columns: 1fr; }
  .process-steps { grid-template-columns: 1fr; }
  .cta-banner-mid .container { flex-direction: column; }
  .cta-banner-mid .cta-actions { align-items: flex-start; }
  .concrete-hero .hero-ctas { flex-direction: column; }
  .closing-cta-actions { flex-direction: column; }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- Breadcrumb -->
<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <a href="/">Home</a>
    <span aria-hidden="true">›</span>
    <a href="/services">Services</a>
    <span aria-hidden="true">›</span>
    <span class="current" aria-current="page">Concrete Services</span>
  </div>
</nav>

<!-- Hero -->
<section class="concrete-hero" aria-label="Concrete Services Hero">
  <div class="hero-inner">
    <div class="container">
      <div class="eyebrow">
        <i data-lucide="layers" style="width:14px;height:14px;"></i>
        Edgerton, WI Concrete Contractor
      </div>
      <h1>Concrete Services in <span>Edgerton, WI</span> — Driveways, Patios &amp; Walkways</h1>
      <p class="hero-sub">Air-entrained concrete spec for Wisconsin's freeze-thaw cycles. Driveways, patios, walkways, steps &amp; poured walls — properly formed, reinforced, and sealed.</p>
      <div class="hero-ctas">
        <a href="/contact" class="btn-hero-primary">
          <i data-lucide="file-text" style="width:18px;height:18px;"></i>
          Get a Free Estimate
        </a>
        <a href="tel:6085015123" class="btn-hero-secondary">
          <i data-lucide="phone" style="width:18px;height:18px;"></i>
          (608) 501-5123
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Proof Ticker -->
<div class="ticker-strip" aria-hidden="true">
  <div class="ticker-track">
    <div class="ticker-item">Licensed &amp; Insured<span class="ticker-sep">✦</span></div>
    <div class="ticker-item">Air-Entrained Concrete<span class="ticker-sep">✦</span></div>
    <div class="ticker-item">6" Compacted Base Standard<span class="ticker-sep">✦</span></div>
    <div class="ticker-item">Serving Edgerton &amp; Southern WI<span class="ticker-sep">✦</span></div>
    <div class="ticker-item">Free Estimates<span class="ticker-sep">✦</span></div>
    <div class="ticker-item">4.9★ Rated — 47 Reviews<span class="ticker-sep">✦</span></div>
    <div class="ticker-item">Control Joints Cut to Spec<span class="ticker-sep">✦</span></div>
    <div class="ticker-item">Stamped &amp; Broom Finishes<span class="ticker-sep">✦</span></div>
    <!-- duplicate for seamless loop -->
    <div class="ticker-item">Licensed &amp; Insured<span class="ticker-sep">✦</span></div>
    <div class="ticker-item">Air-Entrained Concrete<span class="ticker-sep">✦</span></div>
    <div class="ticker-item">6" Compacted Base Standard<span class="ticker-sep">✦</span></div>
    <div class="ticker-item">Serving Edgerton &amp; Southern WI<span class="ticker-sep">✦</span></div>
    <div class="ticker-item">Free Estimates<span class="ticker-sep">✦</span></div>
    <div class="ticker-item">4.9★ Rated — 47 Reviews<span class="ticker-sep">✦</span></div>
    <div class="ticker-item">Control Joints Cut to Spec<span class="ticker-sep">✦</span></div>
    <div class="ticker-item">Stamped &amp; Broom Finishes<span class="ticker-sep">✦</span></div>
  </div>
</div>

<!-- Service Detail -->
<section class="concrete-detail" data-animate="fade-up">
  <div class="container">
    <div class="split-grid">
      <div class="split-content">
        <span class="section-eyebrow">What We Do</span>
        <h2>What <span class="text-accent">Concrete Work</span> Holds Up to Wisconsin Winters?</h2>
        <div class="detail-price-tag">
          <i data-lucide="tag" style="width:14px;height:14px;"></i>
          Driveways typically run $6–$12 per sq ft installed — final pricing at free estimate
        </div>
        <div class="prose">
          <p>Concrete work in Wisconsin demands more than just a pour. Southern Wisconsin's climate cycles through dozens of freeze-thaw events each year, and concrete that isn't engineered for those conditions develops surface scaling, spalling, and cracks within a few seasons. R.A.H. Solutions installs driveways, walkways, patios, steps, and poured walls using the concrete specs your project actually needs — not the cheapest mix on the truck.</p>
          <p>Every residential driveway we install starts with a 6-inch compacted aggregate base. No gravel shortcuts. The base prevents the slab from settling unevenly and creates drainage beneath the concrete that reduces frost heave. We use 4,000 PSI air-entrained concrete mixes — the air-entraining admixture creates microscopic bubbles that give the slab room to expand and contract without cracking the surface layer. That's standard practice in Minnesota, Wisconsin, and Michigan for a reason.</p>
          <p>Finishing options include standard broom finish (the most durable for driveways), exposed aggregate (textured grip plus visual interest), and stamped patterns (cobblestone, slate, or wood-grain impressions with integral color). We cut control joints at the appropriate intervals — typically every 8–10 feet on a residential driveway — to give the slab planned crack locations that stay hidden rather than random cracking that shows. All slabs are sealed before we leave the job.</p>

          <div class="answer-block">
            <h3>How much do concrete services cost in Edgerton?</h3>
            <p>Concrete driveways, patios, and walkways in Edgerton typically run $6–$12 per square foot installed, depending on slab thickness, finish type, and site prep requirements. R.A.H. Solutions uses air-entrained concrete mixes engineered for Wisconsin's freeze-thaw cycles, with a 6-inch compacted aggregate base standard on every driveway pour.</p>
          </div>
        </div>
      </div>
      <div class="split-img-frame" data-animate="wipe-right">
        <picture>
          <source srcset="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963899295-b8v0w8-607091027_122304065120208320_4309334725424131443_n.jpg" type="image/webp">
          <img
            src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963899295-b8v0w8-607091027_122304065120208320_4309334725424131443_n.jpg"
            alt="Concrete driveway installation Edgerton Wisconsin R.A.H. Solutions"
            width="800" height="600" loading="lazy">
        </picture>
        <div class="split-img-badge">Edgerton, WI</div>
      </div>
    </div>
  </div>
</section>

<!-- Divider: diagonal down -->
<div class="divider-wrap" aria-hidden="true" style="background:var(--color-bg);line-height:0;">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 1200,60 1200,60 0,60" fill="#1a2b3c"/></svg>
</div>

<!-- Mid-Page CTA Banner -->
<section class="cta-banner-mid" aria-label="Request a concrete estimate">
  <div class="container">
    <div class="cta-text">
      <h2>Ready to Replace That Crumbling Driveway?</h2>
      <p>Free, no-pressure estimates for all concrete work in Edgerton, Stoughton, Janesville &amp; Madison. Same-week scheduling available for most jobs.</p>
    </div>
    <div class="cta-actions">
      <a href="tel:6085015123" class="cta-phone-large">
        <i data-lucide="phone-call" style="width:22px;height:22px;"></i>
        (608) 501-5123
      </a>
      <a href="/contact" class="btn-cta-accent">
        <i data-lucide="clipboard-list" style="width:18px;height:18px;"></i>
        Request Free Estimate
      </a>
    </div>
  </div>
</section>

<!-- Divider: diagonal up -->
<div class="divider-wrap" aria-hidden="true" style="background:var(--color-primary-dark);line-height:0;">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,60 1200,0 1200,60" fill="#0f1e2d"/></svg>
</div>

<!-- Why Choose — dark strip -->
<section class="why-choose-concrete" data-animate="fade-up">
  <div class="container">
    <div class="section-header">
      <div class="eyebrow">Why R.A.H. Solutions</div>
      <h2>Why Do <span class="text-accent">Edgerton Homeowners</span> Choose Us for Concrete?</h2>
    </div>
    <div class="benefit-cards-grid">
      <div class="benefit-card" data-animate="fade-up">
        <div class="benefit-icon">
          <i data-lucide="thermometer-snowflake" style="width:28px;height:28px;"></i>
        </div>
        <h3>Wisconsin-Grade Air-Entrained Mix</h3>
        <p>We specify 4,000 PSI air-entrained concrete that handles Rock County's freeze-thaw cycles without surface scaling or spalling.</p>
      </div>
      <div class="benefit-card" data-animate="fade-up">
        <div class="benefit-icon">
          <i data-lucide="ruler" style="width:28px;height:28px;"></i>
        </div>
        <h3>4–6" Depth on Every Driveway</h3>
        <p>Minimum 4" thickness, 6" at edges and vehicle approach zones — no thin slabs that crack under normal car and truck loads.</p>
      </div>
      <div class="benefit-card" data-animate="fade-up">
        <div class="benefit-icon">
          <i data-lucide="scissors" style="width:28px;height:28px;"></i>
        </div>
        <h3>Control Joints Cut to Prevent Cracking</h3>
        <p>Properly spaced saw-cut or tooled control joints give the slab planned places to move — hidden beneath the surface, not across the face.</p>
      </div>
      <div class="benefit-card" data-animate="fade-up">
        <div class="benefit-icon">
          <i data-lucide="shield-check" style="width:28px;height:28px;"></i>
        </div>
        <h3>Fully Licensed &amp; Insured</h3>
        <p>All concrete work is properly permitted where required. We carry full liability and worker's comp coverage on every job in Edgerton and surrounding areas.</p>
      </div>
    </div>
  </div>
</section>

<!-- Signature Section: Before/After Detail Strip -->
<section class="concrete-signature" data-animate="fade-up" aria-label="Concrete spec comparison">
  <div class="container">
    <div class="concrete-sig-grid">
      <div class="concrete-sig-panel">
        <div class="panel-label">The Problem</div>
        <h3>What Fails Without Proper Concrete Installation</h3>
        <div class="sig-img">
          <picture>
            <source srcset="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1778785039114-o.jpg" type="image/webp">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1778785039114-o.jpg" alt="Concrete driveway installation Edgerton WI" width="600" height="260" loading="lazy">
          </picture>
        </div>
        <p>Most premature concrete failures in Wisconsin trace back to the same shortcuts: wrong mix, thin slabs, poor base prep, and missing control joints. You end up replacing the driveway in 6 years instead of 25.</p>
        <ul class="sig-spec-list">
          <li>Non-air-entrained mix scales and spalls after first hard freeze</li>
          <li>3" slabs crack under normal vehicle loads within 2–3 years</li>
          <li>Uncompacted base leads to settling, dips, and pooling water</li>
          <li>No control joints = random cracking across the visible surface</li>
        </ul>
      </div>
      <div class="concrete-sig-panel">
        <div class="panel-label">The R.A.H. Standard</div>
        <h3>How We Install Concrete That Lasts 25+ Years</h3>
        <div class="sig-img">
          <picture>
            <source srcset="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963899295-b8v0w8-607091027_122304065120208320_4309334725424131443_n.jpg" type="image/webp">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963899295-b8v0w8-607091027_122304065120208320_4309334725424131443_n.jpg" alt="Properly installed concrete driveway Edgerton Wisconsin" width="600" height="260" loading="lazy">
          </picture>
        </div>
        <p>We follow ACPA and Wisconsin DOT concrete standards on every residential pour. When you invest in concrete, you should get a surface that looks good and holds up for decades — not a patch job in three years.</p>
        <ul class="sig-spec-list">
          <li>4,000 PSI air-entrained concrete — engineered for Wisconsin climate</li>
          <li>6" compacted aggregate base on all driveway pours</li>
          <li>Rebar or wire mesh reinforcement on driveways and patios</li>
          <li>Control joints cut every 8–10 feet per slab dimension rules</li>
          <li>Penetrating sealant applied before we leave the job</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Divider: wave -->
<div class="divider-wrap" aria-hidden="true" style="background:var(--color-primary);line-height:0;">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><path d="M0,40 C300,80 900,0 1200,40 L1200,80 L0,80 Z" fill="#f4f7f9"/></svg>
</div>

<!-- ── Concrete Project Gallery ──────────────────────────────── -->
<section class="concrete-gallery" data-animate="fade-up" style="padding:var(--space-4xl) 0;background:var(--color-bg-alt);">
  <div class="container">
    <div class="section-header">
      <div class="eyebrow">Recent Work</div>
      <h2>What Do Finished <span class="text-accent">Concrete Projects</span> Look Like?</h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:var(--space-lg);">
      <div style="border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow-md);">
        <img src="https://i.imgur.com/FGyjGvY.jpeg" alt="Concrete project completed by R.A.H. Solutions in Edgerton, WI" width="600" height="400" loading="lazy" style="width:100%;height:280px;object-fit:cover;display:block;">
      </div>
      <div style="border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow-md);">
        <img src="https://i.imgur.com/Q6hRrqg.jpeg" alt="Concrete patio installation Edgerton Wisconsin" width="600" height="400" loading="lazy" style="width:100%;height:280px;object-fit:cover;display:block;">
      </div>
      <div style="border-radius:var(--radius-lg);overflow:hidden;box-shadow:var(--shadow-md);">
        <img src="https://i.imgur.com/34tWHmA.jpeg" alt="Concrete walkway and steps Edgerton WI" width="600" height="400" loading="lazy" style="width:100%;height:280px;object-fit:cover;display:block;">
      </div>
    </div>
  </div>
</section>

<!-- ── Before/After: Concrete Stairs ─────────────────────────── -->
<section class="concrete-ba" data-animate="fade-up" style="padding:var(--space-4xl) 0;background:var(--color-bg);">
  <div class="container">
    <div class="section-header">
      <div class="eyebrow">The Difference</div>
      <h2>What Do Concrete Stairs Look Like <span class="text-accent">Before &amp; After</span> Repair?</h2>
    </div>

    <!-- Pair 1 -->
    <div class="ba-split">
      <div class="ba-panel ba-panel--before">
        <div class="ba-panel__label" aria-label="Concrete stairs before repair">Before</div>
        <img class="ba-panel__img" src="https://i.imgur.com/3LRgoQn.jpeg" alt="Concrete stairs before repair, Edgerton WI" width="600" height="400" loading="lazy">
        <div class="ba-panel__content">
          <h3 class="ba-panel__title">Crumbling steps, uneven risers, safety hazard</h3>
          <p class="ba-panel__desc">Deteriorating concrete stairs with spalling surfaces, exposed aggregate, and uneven risers that create a trip-and-fall risk — common after years of Wisconsin freeze-thaw cycles.</p>
        </div>
      </div>
      <div class="ba-panel ba-panel--after">
        <div class="ba-panel__label" aria-label="Concrete stairs after repair by R.A.H. Solutions">After</div>
        <img class="ba-panel__img" src="https://i.imgur.com/LgQRgH4.jpeg" alt="Newly poured concrete stairs after repair, Edgerton WI" width="600" height="400" loading="lazy">
        <div class="ba-panel__content">
          <h3 class="ba-panel__title">Clean pour, level risers, sealed finish</h3>
          <p class="ba-panel__desc">Freshly poured concrete stairs with uniform risers, broom finish for grip, and proper drainage — built to handle another 25+ years of Southern Wisconsin winters.</p>
        </div>
      </div>
    </div>

    <!-- Pair 2 -->
    <div class="ba-split" style="margin-top:var(--space-3xl);">
      <div class="ba-panel ba-panel--before">
        <div class="ba-panel__label" aria-label="Concrete entry steps before replacement">Before</div>
        <img class="ba-panel__img" src="https://i.imgur.com/0cGO4MJ.jpeg" alt="Damaged concrete entry steps before replacement, Edgerton WI" width="600" height="400" loading="lazy">
        <div class="ba-panel__content">
          <h3 class="ba-panel__title">Settled slab, cracked edges, curb-appeal problem</h3>
          <p class="ba-panel__desc">Years of settling and frost heave left these entry steps cracked and tilting — making the front of the home look neglected and creating a liability for visitors.</p>
        </div>
      </div>
      <div class="ba-panel ba-panel--after">
        <div class="ba-panel__label" aria-label="Concrete entry steps after replacement by R.A.H. Solutions">After</div>
        <img class="ba-panel__img" src="https://i.imgur.com/zXGzh4b.jpeg" alt="New concrete entry steps after replacement, Edgerton WI" width="600" height="400" loading="lazy">
        <div class="ba-panel__content">
          <h3 class="ba-panel__title">New pour on compacted base, proper slope, sealed</h3>
          <p class="ba-panel__desc">Replaced on a 6-inch compacted aggregate base with air-entrained mix. Control joints cut, edges formed clean, and sealed before handoff. Built for Wisconsin.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Divider: diagonal into process -->
<div class="divider-wrap" aria-hidden="true" style="background:var(--color-bg);line-height:0;">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 1200,60 1200,60 0,60" fill="#f4f7f9"/></svg>
</div>

<!-- Process Steps -->
<section class="concrete-process" data-animate="fade-up">
  <div class="container">
    <div class="section-header">
      <div class="eyebrow">How It Works</div>
      <h2>What Is Our Concrete <span class="text-accent">Installation Process</span>?</h2>
    </div>
    <div class="process-steps">
      <div class="process-step">
        <div class="step-number">1</div>
        <h3>Grade &amp; Compact Base</h3>
        <p>We excavate, grade for drainage, and compact 6" of aggregate — the foundation everything else depends on.</p>
      </div>
      <div class="process-step">
        <div class="step-number">2</div>
        <h3>Form Setting &amp; Reinforcement</h3>
        <p>Lumber forms set to grade, rebar or wire mesh laid, expansion board at structure connections.</p>
      </div>
      <div class="process-step">
        <div class="step-number">3</div>
        <h3>Pour, Finish &amp; Joint Cut</h3>
        <p>Air-entrained concrete poured, screeded, finished to spec (broom, exposed aggregate, or stamped), joints cut.</p>
      </div>
      <div class="process-step">
        <div class="step-number">4</div>
        <h3>Cure &amp; Seal</h3>
        <p>Forms stripped at 24 hours, curing compound or wet cure applied, penetrating sealer rolled on before job close.</p>
      </div>
    </div>
  </div>
</section>

<!-- Divider: diagonal down -->
<div class="divider-wrap" aria-hidden="true" style="background:var(--color-bg-alt);line-height:0;">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"><polygon points="0,0 1200,60 1200,60 0,60" fill="#ffffff"/></svg>
</div>

<!-- FAQ Section -->
<section class="concrete-faq" data-animate="fade-up">
  <div class="container">
    <div class="section-header">
      <div class="eyebrow">Common Questions</div>
      <h2>What Are Frequently Asked Questions About Concrete Services?</h2>
    </div>
    <div class="faq-list">
      <?php foreach ($pageFaqs as $faq): ?>
      <details class="faq-item">
        <summary><?php echo htmlspecialchars($faq['q']); ?></summary>
        <div class="faq-answer"><?php echo htmlspecialchars($faq['a']); ?></div>
      </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Closing CTA -->
<section class="closing-cta" data-animate="fade-up">
  <div class="container">
    <div class="eyebrow">Get Started Today</div>
    <h2>Why Should You Stop Patching and Replace Your Driveway Right?</h2>
    <p>Free estimates for concrete driveways, patios, walkways, and steps anywhere in Edgerton, Stoughton, Janesville, or Madison. Same-week scheduling on most projects.</p>
    <div class="closing-cta-actions">
      <a href="tel:6085015123" class="closing-phone">
        <i data-lucide="phone" style="width:20px;height:20px;"></i>
        (608) 501-5123
      </a>
      <a href="/contact" class="btn-closing-primary">
        <i data-lucide="calendar-check" style="width:18px;height:18px;"></i>
        Schedule Free Estimate
      </a>
    </div>
    <p class="last-updated">Last Updated: May 2026</p>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
