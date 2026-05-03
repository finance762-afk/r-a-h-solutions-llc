<?php
// ============================================================
// Landscape Design — R.A.H. Solutions, LLC
// ============================================================
$pageTitle       = 'Landscape Design in Edgerton, WI';
$pageDescription = 'Custom landscape design in Edgerton, WI — Zone 5b plant selection, site analysis & phased plans. Free consultation. R.A.H. Solutions. Call (608) 501-5123.';
$canonicalUrl    = 'https://rahsolutionsllc.com/services/landscape-design';
// SEO: {"@context":"https://schema.org"} — schema and <link rel="canonical"> rendered via head.php
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963880884-qw46fr-474382241_122209560170208320_4796638395126825561_n.jpg';
$currentPage     = 'service-landscape-design';
$heroPreload     = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963880884-qw46fr-474382241_122209560170208320_4796638395126825561_n.jpg';

$faqs = [
  [
    '@type'          => 'Question',
    'name'           => 'How long does the landscape design process take?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'For a typical residential property in Edgerton, the design process takes 1–3 weeks from initial site consultation to a completed plan. Larger or more complex projects — like full property redesigns or phased multi-year plans — may take 3–6 weeks. The site visit and measurement process usually takes 1–2 hours.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'Do you provide 3D design renderings?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'Yes, for complex projects we can provide 3D visualization options that show how your finished landscape will look from multiple angles. This is especially helpful when making decisions about plant placement, hardscaping layout, or before committing to a full installation. Ask about rendering options during your consultation.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'What is included in a landscape design plan?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'A full landscape design plan from R.A.H. Solutions includes a scaled site drawing, plant selection with species names and placement, hardscape layout recommendations, lighting suggestions, and a plant care guide specific to your selections. For installation clients, design fees are typically rolled into the project cost.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'Can you redesign around existing trees and landscape features?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'Absolutely. We commonly design around mature trees, existing beds, hardscaping, and utility lines. Preserving existing features that are in good shape is almost always more cost-effective than removing them, and good design works with the natural character of your property rather than against it.',
    ],
  ],
];

$schemaMarkup = json_encode([
  '@context' => 'https://schema.org',
  '@graph'   => [
    [
      '@type'           => 'BreadcrumbList',
      'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => 'https://rahsolutionsllc.com'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => 'https://rahsolutionsllc.com/services'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Landscape Design', 'item' => 'https://rahsolutionsllc.com/services/landscape-design'],
      ],
    ],
    [
      '@type'       => 'Service',
      '@id'         => 'https://rahsolutionsllc.com/services/landscape-design/#service',
      'name'        => 'Landscape Design',
      'description' => 'Custom landscape design services for residential and commercial properties in Edgerton, WI — site analysis, Zone 5b plant selection, phased design plans, and 3D visualization options.',
      'provider'    => ['@type' => 'LocalBusiness', '@id' => 'https://rahsolutionsllc.com/#business'],
      'areaServed'  => [
        ['@type' => 'City', 'name' => 'Edgerton'],
        ['@type' => 'City', 'name' => 'Stoughton'],
        ['@type' => 'City', 'name' => 'Janesville'],
        ['@type' => 'City', 'name' => 'Madison'],
      ],
      'serviceType' => 'Landscape Design',
    ],
    [
      '@type'      => 'FAQPage',
      'mainEntity' => $faqs,
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
   Landscape Design — Page-Specific Styles
   ============================================================ */

/* ── Breadcrumb ───────────────────────────────────────────── */
.svc-breadcrumb {
  background: var(--color-bg-dark);
  padding: var(--space-sm) 0;
  position: relative;
  z-index: 10;
}
.svc-breadcrumb .container {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
}
.breadcrumb-list {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  list-style: none;
  flex-wrap: wrap;
}
.breadcrumb-list li {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.55);
}
.breadcrumb-list li a {
  color: rgba(255,255,255,0.7);
  transition: color var(--transition-fast);
}
.breadcrumb-list li a:hover { color: var(--color-accent); }
.breadcrumb-list li.current {
  color: var(--color-accent);
  font-weight: 600;
}
.breadcrumb-sep {
  color: rgba(255,255,255,0.3);
  font-size: var(--font-size-xs);
}

/* ── Inner Hero ───────────────────────────────────────────── */
.design-hero {
  position: relative;
  min-height: 60vh;
  display: flex;
  align-items: center;
  overflow: hidden;
  background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963880884-qw46fr-474382241_122209560170208320_4796638395126825561_n.jpg');
  background-size: cover;
  background-position: center 30%;
  animation: design-kenburns 22s ease-in-out infinite alternate;
}
@keyframes design-kenburns {
  from { background-size: 110%; background-position: center 25%; }
  to   { background-size: 122%; background-position: center 45%; }
}
.design-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    120deg,
    rgba(var(--color-primary-rgb), 0.92) 0%,
    rgba(var(--color-primary-rgb), 0.6) 50%,
    rgba(var(--color-primary-rgb), 0.3) 100%
  );
  z-index: 1;
}
.design-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 2;
  pointer-events: none;
}
.design-hero-inner {
  position: relative;
  z-index: 3;
  padding: var(--space-4xl) 0 var(--space-3xl);
  max-width: 700px;
}
.svc-eyebrow {
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
.svc-eyebrow::before {
  content: '';
  display: block;
  width: 28px;
  height: 2px;
  background: var(--color-accent);
  flex-shrink: 0;
}
.design-hero h1 {
  font-family: var(--font-heading);
  font-size: clamp(2.2rem, 5vw, 3.8rem);
  font-weight: 700;
  line-height: 1.1;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-bg);
  margin-bottom: var(--space-md);
  background: linear-gradient(135deg, #ffffff 0%, rgba(var(--color-accent-rgb), 0.85) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.design-hero-sub {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.82);
  max-width: 52ch;
  line-height: 1.6;
  margin-bottom: var(--space-xl);
}
.design-hero-ctas {
  display: flex;
  gap: var(--space-md);
  flex-wrap: wrap;
  align-items: center;
}
.btn-hero-primary {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-accent);
  color: var(--color-bg-dark);
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  font-weight: 700;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-accent-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden;
  position: relative;
}
.btn-hero-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-accent-dark); }
.btn-hero-primary:active { transform: translateY(2px); box-shadow: 0 2px 0 var(--color-accent-dark); }
.btn-hero-secondary {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: transparent;
  color: var(--color-bg);
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  font-weight: 600;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-md);
  border: 2px solid rgba(255,255,255,0.5);
  transition: background var(--transition-base), border-color var(--transition-base);
}
.btn-hero-secondary:hover {
  background: rgba(255,255,255,0.12);
  border-color: rgba(255,255,255,0.8);
}
.design-hero-trust {
  display: flex;
  align-items: center;
  gap: var(--space-lg);
  margin-top: var(--space-xl);
  flex-wrap: wrap;
}
.hero-trust-item {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.75);
  font-weight: 600;
}
.hero-trust-item i {
  color: var(--color-accent);
  width: 16px;
  height: 16px;
}

/* ── Ticker Strip ─────────────────────────────────────────── */
.ticker-strip {
  background: var(--color-primary);
  padding: var(--space-sm) 0;
  overflow: hidden;
  position: relative;
}
.ticker-strip::before,
.ticker-strip::after {
  content: '';
  position: absolute;
  top: 0;
  bottom: 0;
  width: 80px;
  z-index: 2;
  pointer-events: none;
}
.ticker-strip::before { left: 0; background: linear-gradient(to right, var(--color-primary), transparent); }
.ticker-strip::after  { right: 0; background: linear-gradient(to left, var(--color-primary), transparent); }
.ticker-track {
  display: flex;
  width: max-content;
  animation: ticker-scroll 32s linear infinite;
}
.ticker-track:hover { animation-play-state: paused; }
@keyframes ticker-scroll {
  from { transform: translateX(0); }
  to   { transform: translateX(-50%); }
}
.ticker-item {
  display: inline-flex;
  align-items: center;
  gap: var(--space-md);
  white-space: nowrap;
  font-family: var(--font-body);
  font-size: 0.8rem;
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--color-bg);
  padding: 0 var(--space-xl);
}
.ticker-sep { color: var(--color-accent); font-size: 1.2rem; line-height: 1; }

/* ── Section Dividers ─────────────────────────────────────── */
.divider-wrap {
  display: block;
  line-height: 0;
  overflow: hidden;
}
.divider-wrap svg { display: block; width: 100%; }

/* ── Service Detail — Image LEFT layout ───────────────────── */
.design-detail {
  padding: var(--space-4xl) 0 var(--space-3xl);
  background: var(--color-bg);
}
.design-detail-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3xl);
  align-items: center;
}
.design-detail-image { order: 1; }
.design-detail-content { order: 2; }

.section-eyebrow {
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
.section-eyebrow::after {
  content: '';
  display: block;
  width: 24px;
  height: 2px;
  background: var(--color-accent);
}
.design-detail h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-lg);
}
.design-detail p {
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: 65ch;
  margin-bottom: var(--space-md);
}
.design-detail p:last-of-type { margin-bottom: var(--space-xl); }
.svc-updated {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  font-style: italic;
}

/* Image frame with overlapping accent element */
.design-image-wrap {
  position: relative;
}
.design-image-frame {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
}
.design-image-frame picture img {
  width: 100%;
  height: 440px;
  object-fit: cover;
  display: block;
  transition: transform var(--transition-slow);
}
.design-image-frame:hover picture img { transform: scale(1.04); }
.design-image-accent {
  position: absolute;
  bottom: -20px;
  right: -20px;
  width: 120px;
  height: 120px;
  border-radius: var(--radius-lg);
  background: var(--color-accent);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  box-shadow: var(--shadow-lg);
  z-index: 2;
}
.design-image-accent-num {
  font-family: var(--font-heading);
  font-size: 2rem;
  font-weight: 700;
  color: var(--color-bg-dark);
  line-height: 1;
}
.design-image-accent-label {
  font-size: 0.65rem;
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: var(--color-bg-dark);
  text-align: center;
  line-height: 1.3;
  padding: 0 var(--space-xs);
}

.btn-detail {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-primary);
  color: var(--color-bg);
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  font-weight: 600;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-primary-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden;
  position: relative;
}
.btn-detail:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-primary-dark); }
.btn-detail:active { transform: translateY(2px); box-shadow: 0 2px 0 var(--color-primary-dark); }

/* ── SIGNATURE: Editorial Pullquote Block ─────────────────── */
.pullquote-section {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
  position: relative;
  overflow: hidden;
}
.pullquote-section::before {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  width: 6px;
  background: linear-gradient(to bottom, var(--color-accent), var(--color-primary));
}
.pullquote-inner {
  max-width: 780px;
  margin: 0 auto;
  text-align: center;
  position: relative;
}
.pullquote-mark {
  font-family: Georgia, 'Times New Roman', serif;
  font-size: 8rem;
  line-height: 0.6;
  color: rgba(var(--color-accent-rgb), 0.2);
  display: block;
  margin-bottom: var(--space-md);
  user-select: none;
}
.pullquote-text {
  font-family: var(--font-heading);
  font-size: clamp(1.5rem, 3vw, 2.2rem);
  font-weight: 600;
  line-height: 1.3;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-xl);
  letter-spacing: -0.01em;
}
.pullquote-accent-line {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: var(--space-md);
  margin-bottom: var(--space-xl);
}
.pullquote-accent-line::before,
.pullquote-accent-line::after {
  content: '';
  flex: 1;
  max-width: 120px;
  height: 2px;
  background: rgba(var(--color-accent-rgb), 0.4);
}
.pullquote-accent-dot {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: var(--color-accent);
}
.pullquote-attribution {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  letter-spacing: 0.06em;
  text-transform: uppercase;
  font-weight: 600;
}

/* ── Mid CTA Banner ───────────────────────────────────────── */
.cta-mid {
  position: relative;
  padding: var(--space-3xl) 0;
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  overflow: hidden;
}
.cta-mid::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
  z-index: 0;
}
.cta-mid .container {
  position: relative;
  z-index: 1;
  text-align: center;
}
.cta-eyebrow {
  display: inline-block;
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.cta-mid h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 2.8rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-bg);
  margin-bottom: var(--space-md);
}
.cta-mid > .container > p {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.8);
  max-width: 55ch;
  margin: 0 auto var(--space-xl);
  line-height: 1.6;
}
.cta-actions {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.btn-cta-phone {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-bg);
  color: var(--color-primary-dark);
  font-family: var(--font-heading);
  font-size: clamp(1.1rem, 2vw, 1.4rem);
  font-weight: 700;
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-lg);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden;
  position: relative;
}
.btn-cta-phone:hover { transform: translateY(-2px); box-shadow: var(--shadow-xl); }
.btn-cta-primary {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-accent);
  color: var(--color-bg-dark);
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  font-weight: 700;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-accent-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden;
  position: relative;
}
.btn-cta-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-accent-dark); }
.btn-cta-primary:active { transform: translateY(2px); box-shadow: 0 2px 0 var(--color-accent-dark); }

/* ── Why Choose — dark bg cards ──────────────────────────── */
.why-choose {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-dark);
}
.why-choose-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.why-choose h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-bg);
  margin-bottom: var(--space-sm);
}
.why-choose .sub {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.65);
  max-width: 55ch;
  margin: 0 auto;
}
.why-cards {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
}
.why-card {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(var(--color-accent-rgb), 0.15);
  border-radius: var(--radius-lg);
  padding: var(--space-xl) var(--space-lg);
  transition: transform var(--transition-base), border-color var(--transition-base), background var(--transition-base);
}
.why-card:hover {
  transform: translateY(-6px);
  border-color: rgba(var(--color-accent-rgb), 0.45);
  background: rgba(var(--color-accent-rgb), 0.06);
}
.why-icon {
  width: 52px;
  height: 52px;
  border-radius: var(--radius-md);
  background: rgba(var(--color-accent-rgb), 0.15);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
  margin-bottom: var(--space-md);
}
.why-card-title {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  font-weight: 600;
  text-wrap: balance;
  color: var(--color-bg);
  margin-bottom: var(--space-sm);
}
.why-card-text {
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.65);
  line-height: 1.6;
}

/* ── Process Steps ────────────────────────────────────────── */
.process-section {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
}
.process-section-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.process-section h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.process-section .sub {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto;
}
.process-alternating {
  display: flex;
  flex-direction: column;
  gap: var(--space-xl);
  max-width: 760px;
  margin: 0 auto;
}
.process-alt-step {
  display: grid;
  grid-template-columns: 72px 1fr;
  gap: var(--space-lg);
  align-items: start;
  padding: var(--space-xl);
  border-radius: var(--radius-lg);
  background: var(--color-bg-alt);
  border-left: 4px solid transparent;
  transition: border-color var(--transition-base), box-shadow var(--transition-base);
}
.process-alt-step:hover {
  border-color: var(--color-accent);
  box-shadow: var(--shadow-md);
}
.step-num-circle {
  width: 56px;
  height: 56px;
  border-radius: 50%;
  background: var(--color-primary);
  color: var(--color-bg);
  font-family: var(--font-heading);
  font-size: 1.4rem;
  font-weight: 700;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  border: 3px solid rgba(var(--color-accent-rgb), 0.3);
}
.step-body h3 {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  font-weight: 600;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-xs);
}
.step-body p {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  max-width: 55ch;
}

/* ── FAQ Section ──────────────────────────────────────────── */
.faq-section {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.faq-section-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.faq-section h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.faq-section .sub {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto;
}
.faq-list {
  max-width: 800px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}
.faq-item {
  background: var(--color-bg);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-sm);
  border: 1px solid rgba(var(--color-primary-rgb), 0.08);
  overflow: hidden;
}
.faq-item summary {
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
.faq-item summary::-webkit-details-marker { display: none; }
.faq-item summary::after {
  content: '+';
  font-size: 1.4rem;
  color: var(--color-accent);
  flex-shrink: 0;
  transition: transform var(--transition-base);
}
.faq-item[open] summary::after { transform: rotate(45deg); }
.faq-item[open] summary { color: var(--color-accent); }
.faq-answer {
  padding: 0 var(--space-xl) var(--space-lg);
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: 65ch;
}

/* ── Closing CTA ──────────────────────────────────────────── */
.closing-cta {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
  text-align: center;
}
.closing-cta h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-md);
}
.closing-cta p {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto var(--space-xl);
  line-height: 1.6;
}
.closing-cta-actions {
  display: flex;
  justify-content: center;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.btn-closing-primary {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-accent);
  color: var(--color-bg-dark);
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 700;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  padding: var(--space-md) var(--space-2xl);
  border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-accent-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden;
  position: relative;
}
.btn-closing-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-accent-dark); }
.btn-closing-phone {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-primary);
  color: var(--color-bg);
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 700;
  padding: var(--space-md) var(--space-2xl);
  border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-primary-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden;
  position: relative;
}
.btn-closing-phone:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-primary-dark); }

/* ── Responsive ───────────────────────────────────────────── */
@media (max-width: 1023px) {
  .why-cards { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 767px) {
  .design-detail-grid { grid-template-columns: 1fr; }
  .design-detail-image { order: -1; }
  .design-image-frame picture img { height: 280px; }
  .design-image-accent { display: none; }
  .why-cards { grid-template-columns: 1fr; }
  .process-alt-step { grid-template-columns: 1fr; }
  .design-hero-ctas { flex-direction: column; align-items: flex-start; }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

  <!-- ── Breadcrumb ─────────────────────────────────────────── -->
  <nav class="svc-breadcrumb" aria-label="Breadcrumb">
    <div class="container">
      <ol class="breadcrumb-list">
        <li><a href="/">Home</a></li>
        <li aria-hidden="true"><span class="breadcrumb-sep">›</span></li>
        <li><a href="/services">Services</a></li>
        <li aria-hidden="true"><span class="breadcrumb-sep">›</span></li>
        <li class="current" aria-current="page">Landscape Design</li>
      </ol>
    </div>
  </nav>

  <!-- ── Inner Hero ─────────────────────────────────────────── -->
  <section class="design-hero" aria-label="Landscape Design Services">
    <div class="container">
      <div class="design-hero-inner">
        <span class="svc-eyebrow">
          <i data-lucide="pencil-ruler" aria-hidden="true" style="width:14px;height:14px;"></i>
          Custom Outdoor Design
        </span>
        <h1>Custom Landscape Design in Edgerton, WI</h1>
        <p class="design-hero-sub">From site analysis through plant selection — Zone 5b-specific designs that survive Wisconsin winters and look exceptional through all four seasons.</p>
        <div class="design-hero-ctas">
          <a href="tel:6085015123" class="btn-hero-primary">
            <i data-lucide="phone" aria-hidden="true" style="width:18px;height:18px;"></i>
            Call (608) 501-5123
          </a>
          <a href="/contact" class="btn-hero-secondary">
            Schedule a Consultation
          </a>
        </div>
        <div class="design-hero-trust">
          <span class="hero-trust-item">
            <i data-lucide="shield-check" aria-hidden="true"></i> Licensed &amp; Insured
          </span>
          <span class="hero-trust-item">
            <i data-lucide="leaf" aria-hidden="true"></i> Zone 5b Specialists
          </span>
          <span class="hero-trust-item">
            <i data-lucide="file-text" aria-hidden="true"></i> Full Design Plans Provided
          </span>
        </div>
      </div>
    </div>
  </section>

  <!-- ── Proof Ticker Strip ─────────────────────────────────── -->
  <div class="ticker-strip" aria-hidden="true">
    <div class="ticker-track">
      <span class="ticker-item">Zone 5b Plant Selection<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Site Analysis Included<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Phased Design Plans<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Licensed &amp; Insured<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Free Estimates<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Edgerton · Stoughton · Madison · Janesville<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Plant Care Guide Included<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Consultations from $150<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Zone 5b Plant Selection<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Site Analysis Included<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Phased Design Plans<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Licensed &amp; Insured<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Free Estimates<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Edgerton · Stoughton · Madison · Janesville<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Plant Care Guide Included<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Consultations from $150<span class="ticker-sep">✦</span></span>
    </div>
  </div>

  <!-- ── Divider: bg-dark → bg ─────────────────────────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,60 1200,0 1200,60" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ── Service Detail — Image Left ────────────────────────── -->
  <section class="design-detail" data-animate="fade-up">
    <div class="container">
      <div class="design-detail-grid">

        <!-- Image (left) -->
        <div class="design-detail-image">
          <div class="design-image-wrap">
            <div class="design-image-frame">
              <picture>
                <source srcset="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963901265-nudusv-612484153_122306872124208320_6814002630237134691_n.jpg" type="image/webp">
                <img
                  src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963901265-nudusv-612484153_122306872124208320_6814002630237134691_n.jpg"
                  alt="Custom landscape design installation Edgerton Wisconsin complete yard transformation"
                  width="600"
                  height="440"
                  loading="lazy"
                >
              </picture>
            </div>
            <div class="design-image-accent" aria-hidden="true">
              <span class="design-image-accent-num">5b</span>
              <span class="design-image-accent-label">WI Hardiness Zone</span>
            </div>
          </div>
        </div>

        <!-- Content (right) -->
        <div class="design-detail-content">
          <span class="section-eyebrow">What We Do</span>
          <h2>Landscape Plans Built for Southern Wisconsin's Climate, Not Catalog Photos</h2>

          <p>Landscape design at R.A.H. Solutions begins with a site consultation and typically involves either a standalone design plan ($150–$400 for residential properties) or design work rolled into your installation project at no separate charge. Every plan comes with a scaled site drawing, plant species list, placement guide, and a plant care document written specifically for what we're installing — not generic care sheets.</p>

          <p>Edgerton sits firmly in USDA Hardiness Zone 5b, which means plants must survive winter lows reaching -15°F in hard years. We don't pick plants from a catalog — we select species with documented performance in Rock County's specific combination of cold winters, hot humid summers, and clay-heavy soils. Black-eyed Susans, native prairie grasses, arrowwood viburnum, serviceberry, and cold-hardy ornamental grasses all perform well here and come back reliably year after year without excessive intervention.</p>

          <p>Site analysis is the most overlooked part of landscape design. Before we select a single plant, we evaluate your property's drainage patterns (critical in Southern Wisconsin where spring rains can saturate heavy clay soils for weeks), sun exposure at different times of day, existing trees and their root zones, underground utilities, and any grading issues that could affect long-term plant health. This prevents the most common landscaping mistake: plants that look beautiful on day one and die within two seasons because the site conditions weren't right.</p>

          <p>For clients who want to stretch a project budget, we frequently propose phased approaches — planting priority anchor trees and structural shrubs in year one, then adding perennial beds and ground covers in subsequent seasons. This lets you achieve the full vision without requiring the entire investment upfront, and gives each planting phase time to establish before the next is added.</p>

          <p class="svc-updated">Last Updated: April 2026 · Serving Edgerton, WI and surrounding Southern Wisconsin communities.</p>

          <a href="/contact" class="btn-detail">
            <i data-lucide="calendar" aria-hidden="true" style="width:18px;height:18px;"></i>
            Book a Design Consultation
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- ── Divider: bg → bg-alt (diagonal down) ──────────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,60 1200,60 0,60" fill="#f4f7f9"/>
    </svg>
  </div>

  <!-- ── SIGNATURE: Editorial Pullquote Block ───────────────── -->
  <section class="pullquote-section" data-animate="fade-up">
    <div class="container">
      <div class="pullquote-inner">
        <span class="pullquote-mark" aria-hidden="true">&ldquo;</span>
        <p class="pullquote-text">Good landscape design isn't about making your yard look like a magazine spread. It's about understanding what grows here, in this soil, through this winter — and building something that gets better every year.</p>
        <div class="pullquote-accent-line" aria-hidden="true">
          <span class="pullquote-accent-dot"></span>
        </div>
        <p class="pullquote-attribution">R.A.H. Solutions, LLC &mdash; Edgerton, Wisconsin</p>
      </div>
    </div>
  </section>

  <!-- ── Divider: bg-alt → bg-dark (wave) ──────────────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,40 C300,80 900,0 1200,40 L1200,80 L0,80 Z" fill="#0f1e2d"/>
    </svg>
  </div>

  <!-- ── Mid-Page CTA Banner ────────────────────────────────── -->
  <section class="cta-mid" aria-label="Contact R.A.H. Solutions">
    <div class="container">
      <p class="cta-eyebrow">Free Estimates · Consultations from $150</p>
      <h2>Ready to See What Your Property Could Look Like?</h2>
      <p>R.A.H. Solutions serves Edgerton, Stoughton, Madison &amp; Janesville. Call to schedule a design consultation — no pressure, no obligation.</p>
      <div class="cta-actions">
        <a href="tel:6085015123" class="btn-cta-phone">
          <i data-lucide="phone" aria-hidden="true" style="width:20px;height:20px;"></i>
          (608) 501-5123
        </a>
        <a href="/contact" class="btn-cta-primary">Get a Free Estimate</a>
      </div>
    </div>
  </section>

  <!-- ── Divider: primary-dark → bg-dark ───────────────────── -->
  <div class="divider-wrap" aria-hidden="true" style="background:var(--color-bg-dark);">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,0 1200,60 0,60" fill="#0f1e2d"/>
    </svg>
  </div>

  <!-- ── Why Choose Section — dark bg ───────────────────────── -->
  <section class="why-choose" data-animate="fade-up">
    <div class="container">
      <div class="why-choose-header">
        <span class="section-eyebrow">Why R.A.H. Solutions</span>
        <h2>Landscape Design That Performs in Wisconsin Winters</h2>
        <p class="sub">Every design decision we make is filtered through Zone 5b reality — not what looks good in a catalog from a warmer climate.</p>
      </div>
      <div class="why-cards">
        <div class="why-card">
          <div class="why-icon">
            <i data-lucide="thermometer-snowflake" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="why-card-title">Designed for Edgerton's Zone 5b Climate</h3>
          <p class="why-card-text">Every plant we specify survives Southern Wisconsin's -15°F lows, heavy clay soils, and late-spring frosts — no replacements required each spring.</p>
        </div>
        <div class="why-card">
          <div class="why-icon">
            <i data-lucide="layout-grid" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="why-card-title">3D Visualization for Complex Projects</h3>
          <p class="why-card-text">Before installation begins, we can show you a visual rendering of the finished landscape so you can make informed decisions about placement and selection.</p>
        </div>
        <div class="why-card">
          <div class="why-icon">
            <i data-lucide="trees" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="why-card-title">Designed Around What You Already Have</h3>
          <p class="why-card-text">Mature trees, existing beds, and established hardscaping are assets — we design to complement and enhance them rather than remove and restart.</p>
        </div>
        <div class="why-card">
          <div class="why-icon">
            <i data-lucide="book-open" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="why-card-title">Every Design Includes a Plant Care Guide</h3>
          <p class="why-card-text">You receive written care instructions specific to what we planted — watering schedules, fertilization timing, pruning windows, and winter prep for each species.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ── Divider: bg-dark → bg (diagonal up) ───────────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,60 1200,0 1200,60" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ── Process Steps ──────────────────────────────────────── -->
  <section class="process-section" data-animate="fade-up">
    <div class="container">
      <div class="process-section-header">
        <span class="section-eyebrow">How It Works</span>
        <h2>From Initial Consultation to Installation-Ready Plan</h2>
        <p class="sub">A clear, collaborative process — you're involved at every stage so the finished design reflects your vision, not just ours.</p>
      </div>
      <div class="process-alternating">
        <div class="process-alt-step">
          <div class="step-num-circle">1</div>
          <div class="step-body">
            <h3>Site Consultation + Measurements</h3>
            <p>We visit your property to document existing conditions — drainage, sun exposure, soil type, utility locations, and what's worth preserving. This typically takes 1–2 hours and informs every design decision that follows.</p>
          </div>
        </div>
        <div class="process-alt-step">
          <div class="step-num-circle">2</div>
          <div class="step-body">
            <h3>Design Concept Development</h3>
            <p>We develop a scaled site drawing with plant placement, hardscape recommendations, and layout options. For complex projects, 3D visualization is available. You review and provide feedback before anything is finalized.</p>
          </div>
        </div>
        <div class="process-alt-step">
          <div class="step-num-circle">3</div>
          <div class="step-body">
            <h3>Material &amp; Plant Selection + Cost Estimate</h3>
            <p>You receive a detailed plant list with species names, sizes, and placement — plus a full cost estimate for installation. For standalone design clients, this is where the design deliverable is completed.</p>
          </div>
        </div>
        <div class="process-alt-step">
          <div class="step-num-circle">4</div>
          <div class="step-body">
            <h3>Installation Planning</h3>
            <p>If you're moving forward with installation, we schedule the work in phases if needed, confirm plant availability with regional nurseries, and coordinate the timeline to hit the right planting windows for Wisconsin's growing season.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ── Divider: bg → bg-alt ───────────────────────────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,60 1200,60 0,60" fill="#f4f7f9"/>
    </svg>
  </div>

  <!-- ── FAQ Section ────────────────────────────────────────── -->
  <section class="faq-section" data-animate="fade-up">
    <div class="container">
      <div class="faq-section-header">
        <span class="section-eyebrow">Common Questions</span>
        <h2>What Edgerton Homeowners Ask About Landscape Design</h2>
        <p class="sub">Direct answers about what the design process looks like and what you get at the end of it.</p>
      </div>
      <div class="faq-list">
        <details class="faq-item">
          <summary>How long does the landscape design process take?</summary>
          <div class="faq-answer">
            <p>For a typical residential property in Edgerton, the design process takes 1–3 weeks from site consultation to a completed plan. Larger or more complex projects — full property redesigns or phased multi-year plans — may take 3–6 weeks. The site visit and measurement process usually takes 1–2 hours on your property.</p>
          </div>
        </details>
        <details class="faq-item">
          <summary>Do you provide 3D design renderings?</summary>
          <div class="faq-answer">
            <p>Yes, for complex projects we can provide 3D visualization that shows how your finished landscape looks from multiple angles. This is especially helpful before committing to a full installation. Ask about rendering options when you schedule your consultation.</p>
          </div>
        </details>
        <details class="faq-item">
          <summary>What is included in a landscape design plan?</summary>
          <div class="faq-answer">
            <p>A full plan from R.A.H. Solutions includes a scaled site drawing, plant selection with species names and placement, hardscape layout recommendations, lighting suggestions, and a plant care guide specific to your selections. For installation clients, design fees are typically rolled into the project cost.</p>
          </div>
        </details>
        <details class="faq-item">
          <summary>Can you redesign around existing trees and landscape features?</summary>
          <div class="faq-answer">
            <p>Absolutely. We commonly design around mature trees, existing beds, hardscaping, and utility lines. Preserving established features is almost always more cost-effective than removing them. Good design works with the character of your property — not against it.</p>
          </div>
        </details>
      </div>
    </div>
  </section>

  <!-- ── Divider: bg-alt → bg ───────────────────────────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,60 1200,0 1200,60" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ── Closing CTA ────────────────────────────────────────── -->
  <section class="closing-cta" data-animate="fade-up">
    <div class="container">
      <span class="section-eyebrow" style="justify-content:center;">Your Outdoor Space, Transformed</span>
      <h2>Start With a Consultation — See What's Possible</h2>
      <p>Design consultations start at $150 for residential properties. Installation clients get design included. Call now or fill out our estimate form — R.A.H. Solutions has availability throughout Rock &amp; Dane County.</p>
      <div class="closing-cta-actions">
        <a href="tel:6085015123" class="btn-closing-phone">
          <i data-lucide="phone" aria-hidden="true" style="width:20px;height:20px;"></i>
          (608) 501-5123
        </a>
        <a href="/contact" class="btn-closing-primary">
          <i data-lucide="calendar" aria-hidden="true" style="width:20px;height:20px;"></i>
          Book a Consultation
        </a>
      </div>
    </div>
  </section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
