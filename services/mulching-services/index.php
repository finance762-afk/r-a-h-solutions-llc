<?php
// ============================================================
// Mulching Services — R.A.H. Solutions, LLC
// ============================================================
$pageTitle       = 'Mulching Services in Edgerton, WI';
$pageDescription = 'Mulch installation in Edgerton, WI — moisture retention, weed suppression & root protection through Wisconsin winters. Free estimates. Call (608) 501-5123.';
$canonicalUrl    = 'https://rahsolutionsllc.com/services/mulching-services';
// SEO: {"@context":"https://schema.org"} — schema and <link rel="canonical"> rendered via head.php
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963899295-b8v0w8-607091027_122304065120208320_4309334725424131443_n.jpg';
$currentPage     = 'service-mulching-services';
$heroPreload     = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963899295-b8v0w8-607091027_122304065120208320_4309334725424131443_n.jpg';

$faqs = [
  [
    '@type'          => 'Question',
    'name'           => 'How much mulch do I need for my beds?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'To apply mulch at the correct 2–3 inch depth, you need approximately 1 cubic yard of mulch per 100 square feet of bed area. A typical residential property with 400–600 sq ft of bed area requires 4–6 yards of mulch per application. R.A.H. Solutions measures your beds during the estimate visit and calculates the exact quantity — no guessing and no waste.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'What type of mulch is best for Wisconsin winters?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'Shredded hardwood mulch is the most widely used option in Rock County — it breaks down slowly, insulates well, and doesn\'t blow around during winter winds. Cedar mulch is a premium option that breaks down more slowly, resists moisture, and has natural pest-deterrent properties. Dyed mulches (black, red) look sharp but the colorant fades within one season and the wood base doesn\'t provide better performance than undyed material. For winter root protection in Edgerton\'s -20°F lows, any of these materials at 2–3 inch depth is effective.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'How often should mulch be refreshed?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'Most landscape beds in Edgerton benefit from a fresh mulch application once per year — spring is the optimal timing, after soil has warmed and before weed germination peaks. Annual refresh maintains the 2–3 inch protective depth as the previous year\'s mulch decomposes and compresses. If your existing mulch is still at adequate depth from last year, a lighter top-dress of 1–1.5 inches may be sufficient.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'Do you install weed barrier fabric under mulch?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'We offer weed barrier installation as an optional add-on, but we\'re honest about its limitations: landscape fabric works well in low-maintenance areas around trees and in hardscape borders, but breaks down over 3–5 years in active planting beds and eventually creates more problems than it solves as it tears and allows weed roots to grow through. For most ornamental beds, proper mulch depth (2–3 inches) refreshed annually provides better long-term weed suppression without the issues landscape fabric creates.',
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
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Mulching Services', 'item' => 'https://rahsolutionsllc.com/services/mulching-services'],
      ],
    ],
    [
      '@type'       => 'Service',
      '@id'         => 'https://rahsolutionsllc.com/services/mulching-services/#service',
      'name'        => 'Mulching Services',
      'description' => 'Professional mulch delivery and installation for residential landscape beds in Edgerton, Stoughton, Janesville, and Madison, WI. Correct depth application — 2–3 inches — for weed suppression, moisture retention, and winter root protection.',
      'provider'    => ['@type' => 'LocalBusiness', '@id' => 'https://rahsolutionsllc.com/#business'],
      'areaServed'  => [
        ['@type' => 'City', 'name' => 'Edgerton'],
        ['@type' => 'City', 'name' => 'Stoughton'],
        ['@type' => 'City', 'name' => 'Janesville'],
        ['@type' => 'City', 'name' => 'Madison'],
      ],
      'serviceType' => 'Mulching Services',
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
   Mulching Services — Page-Specific Styles (ms-)
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
.ms-hero {
  position: relative;
  min-height: 60vh;
  display: flex;
  align-items: center;
  overflow: hidden;
  background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963899295-b8v0w8-607091027_122304065120208320_4309334725424131443_n.jpg');
  background-size: cover;
  background-position: center;
  animation: ms-kenburns 20s ease-in-out infinite alternate;
}
@keyframes ms-kenburns {
  from { background-size: 110%; background-position: center 45%; }
  to   { background-size: 121%; background-position: center 55%; }
}
.ms-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    135deg,
    rgba(var(--color-primary-rgb), 0.91) 0%,
    rgba(var(--color-primary-rgb), 0.56) 60%,
    rgba(var(--color-accent-rgb), 0.16) 100%
  );
  z-index: 1;
}
.ms-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 2;
  pointer-events: none;
}
.ms-hero-inner {
  position: relative;
  z-index: 3;
  padding: var(--space-4xl) 0 var(--space-3xl);
}
.ms-eyebrow {
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
.ms-eyebrow::before {
  content: '';
  display: block;
  width: 28px;
  height: 2px;
  background: var(--color-accent);
  flex-shrink: 0;
}
.ms-hero h1 {
  font-family: var(--font-heading);
  font-size: clamp(2.2rem, 5vw, 3.8rem);
  font-weight: 700;
  line-height: 1.1;
  text-wrap: balance;
  letter-spacing: -0.02em;
  margin-bottom: var(--space-md);
  background: linear-gradient(135deg, #ffffff 0%, rgba(var(--color-accent-rgb), 0.9) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.ms-hero-sub {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.82);
  max-width: 52ch;
  line-height: 1.6;
  margin-bottom: var(--space-xl);
}
.ms-hero-ctas {
  display: flex;
  gap: var(--space-md);
  flex-wrap: wrap;
  align-items: center;
}
.ms-btn-primary {
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
.ms-btn-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-accent-dark); }
.ms-btn-primary:active { transform: translateY(2px); box-shadow: 0 2px 0 var(--color-accent-dark); }
.ms-btn-secondary {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: transparent;
  color: #ffffff;
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
.ms-btn-secondary:hover { background: rgba(255,255,255,0.12); border-color: rgba(255,255,255,0.8); }
.ms-hero-trust {
  display: flex;
  align-items: center;
  gap: var(--space-lg);
  margin-top: var(--space-xl);
  flex-wrap: wrap;
}
.ms-trust-item {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.75);
  font-weight: 600;
}
.ms-trust-item i { color: var(--color-accent); }

/* ── Ticker ───────────────────────────────────────────────── */
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
  top: 0; bottom: 0;
  width: 80px;
  z-index: 2;
  pointer-events: none;
}
.ticker-strip::before { left: 0; background: linear-gradient(to right, var(--color-primary), transparent); }
.ticker-strip::after  { right: 0; background: linear-gradient(to left,  var(--color-primary), transparent); }
.ticker-track {
  display: flex;
  width: max-content;
  animation: ticker-scroll 30s linear infinite;
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
  color: #ffffff;
  padding: 0 var(--space-xl);
}
.ticker-sep { color: var(--color-accent); font-size: 1.2rem; line-height: 1; }

/* ── Dividers ─────────────────────────────────────────────── */
.divider-wrap { display: block; line-height: 0; overflow: hidden; }
.divider-wrap svg { display: block; width: 100%; }

/* ── Section Eyebrow ──────────────────────────────────────── */
.ms-section-eyebrow {
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
.ms-section-eyebrow::after {
  content: '';
  display: block;
  width: 24px;
  height: 2px;
  background: var(--color-accent);
}

/* ── Service Detail ───────────────────────────────────────── */
.ms-detail {
  padding: var(--space-4xl) 0 var(--space-3xl);
  background: var(--color-bg);
}
.ms-detail-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3xl);
  align-items: center;
}
.ms-detail-content { order: 1; }
.ms-detail-image   { order: 2; }
.ms-detail h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-lg);
}
.ms-detail p {
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: 65ch;
  margin-bottom: var(--space-md);
}
.ms-detail p:last-of-type { margin-bottom: var(--space-xl); }
.ms-updated {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  font-style: italic;
}
.ms-image-frame {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
}
.ms-image-frame::before {
  content: '';
  position: absolute;
  inset: 0;
  border: 3px solid rgba(var(--color-accent-rgb), 0.25);
  border-radius: var(--radius-lg);
  z-index: 2;
  pointer-events: none;
}
.ms-image-frame picture img {
  width: 100%;
  height: 420px;
  object-fit: cover;
  display: block;
  transition: transform var(--transition-slow);
}
.ms-image-frame:hover picture img { transform: scale(1.03); }
.ms-image-badge {
  position: absolute;
  bottom: var(--space-lg);
  left: var(--space-lg);
  background: var(--color-accent);
  color: var(--color-bg-dark);
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  padding: var(--space-xs) var(--space-md);
  border-radius: var(--radius-sm);
  z-index: 3;
  box-shadow: var(--shadow-md);
}
.ms-btn-detail {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-primary);
  color: #ffffff;
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
.ms-btn-detail:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-primary-dark); }
.ms-btn-detail:active { transform: translateY(2px); box-shadow: 0 2px 0 var(--color-primary-dark); }

/* ── SIGNATURE: Stats Band ────────────────────────────────── */
.ms-stats-band {
  background: var(--color-bg-dark);
  padding: var(--space-3xl) 0;
  position: relative;
  overflow: hidden;
}
.ms-stats-band::before {
  content: '';
  position: absolute;
  top: -60px; left: -60px;
  width: 320px; height: 320px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.06);
  pointer-events: none;
}
.ms-stats-band::after {
  content: '';
  position: absolute;
  bottom: -80px; right: -40px;
  width: 400px; height: 400px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.04);
  pointer-events: none;
}
.ms-stats-inner { position: relative; z-index: 1; }
.ms-stats-label {
  text-align: center;
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-2xl);
}
.ms-stats-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-xl);
}
.ms-stat-item {
  text-align: center;
  padding: var(--space-xl);
  border: 1px solid rgba(var(--color-accent-rgb), 0.15);
  border-radius: var(--radius-lg);
  background: rgba(255,255,255,0.03);
  transition: border-color var(--transition-base), background var(--transition-base);
}
.ms-stat-item:hover {
  border-color: rgba(var(--color-accent-rgb), 0.35);
  background: rgba(var(--color-accent-rgb), 0.05);
}
.ms-stat-number {
  font-family: var(--font-heading);
  font-size: clamp(2.2rem, 4vw, 3.2rem);
  font-weight: 700;
  color: var(--color-accent);
  line-height: 1;
  margin-bottom: var(--space-xs);
  letter-spacing: -0.02em;
}
.ms-stat-label {
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.65);
  line-height: 1.4;
  max-width: 18ch;
  margin: 0 auto;
}

/* ── Mid CTA Banner ───────────────────────────────────────── */
.ms-cta-mid {
  position: relative;
  padding: var(--space-3xl) 0;
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  overflow: hidden;
}
.ms-cta-mid::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
  z-index: 0;
}
.ms-cta-mid .container { position: relative; z-index: 1; text-align: center; }
.ms-cta-eyebrow {
  display: inline-block;
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.ms-cta-mid h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 2.8rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: #ffffff;
  margin-bottom: var(--space-md);
}
.ms-cta-mid > .container > p {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.8);
  max-width: 55ch;
  margin: 0 auto var(--space-xl);
  line-height: 1.6;
}
.ms-cta-actions {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.ms-btn-cta-phone {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: #ffffff;
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
.ms-btn-cta-phone:hover { transform: translateY(-2px); box-shadow: var(--shadow-xl); }
.ms-btn-cta-est {
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
.ms-btn-cta-est:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-accent-dark); }
.ms-btn-cta-est:active { transform: translateY(2px); box-shadow: 0 2px 0 var(--color-accent-dark); }

/* ── Why Choose ───────────────────────────────────────────── */
.ms-why {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.ms-why-header { text-align: center; margin-bottom: var(--space-3xl); }
.ms-why h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.ms-why .sub {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto;
}
.ms-why-cards {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
}
.ms-why-card {
  background: var(--color-bg);
  border-radius: var(--radius-lg);
  padding: var(--space-xl) var(--space-lg);
  box-shadow: var(--shadow-card);
  transition: transform var(--transition-base), box-shadow var(--transition-base), background var(--transition-base);
  position: relative;
  overflow: hidden;
}
.ms-why-card::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 3px;
  background: var(--color-accent);
  transform: scaleX(0);
  transform-origin: left;
  transition: transform var(--transition-base);
}
.ms-why-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-xl); background: var(--color-primary); }
.ms-why-card:hover::before { transform: scaleX(1); }
.ms-why-card:hover .ms-why-title,
.ms-why-card:hover .ms-why-text { color: rgba(255,255,255,0.9); }
.ms-why-card:hover .ms-why-icon {
  background: rgba(var(--color-accent-rgb), 0.2);
  color: var(--color-accent);
}
.ms-why-icon {
  width: 52px; height: 52px;
  border-radius: var(--radius-md);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
  margin-bottom: var(--space-md);
  transition: background var(--transition-base), color var(--transition-base);
}
.ms-why-title {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  font-weight: 600;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
  transition: color var(--transition-base);
}
.ms-why-text {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  transition: color var(--transition-base);
}

/* ── Process ──────────────────────────────────────────────── */
.ms-process {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
}
.ms-process-header { text-align: center; margin-bottom: var(--space-3xl); }
.ms-process h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.ms-process .sub {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto;
}
.ms-process-steps {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
  position: relative;
}
.ms-process-steps::before {
  content: '';
  position: absolute;
  top: 32px;
  left: calc(12.5% + 26px);
  right: calc(12.5% + 26px);
  height: 2px;
  background: linear-gradient(to right, var(--color-accent), rgba(var(--color-accent-rgb), 0.2));
  pointer-events: none;
}
.ms-step { text-align: center; padding: var(--space-lg); }
.ms-step-num {
  width: 64px; height: 64px;
  border-radius: 50%;
  background: var(--color-primary);
  color: #ffffff;
  font-family: var(--font-heading);
  font-size: 1.5rem;
  font-weight: 700;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto var(--space-md);
  position: relative;
  z-index: 1;
  border: 3px solid rgba(var(--color-accent-rgb), 0.3);
  transition: background var(--transition-base), border-color var(--transition-base);
}
.ms-step:hover .ms-step-num {
  background: var(--color-accent);
  border-color: var(--color-accent);
  color: var(--color-bg-dark);
}
.ms-step-title {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 600;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.ms-step-desc {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  max-width: 22ch;
  margin: 0 auto;
}

/* ── FAQ ──────────────────────────────────────────────────── */
.ms-faq {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.ms-faq-header { text-align: center; margin-bottom: var(--space-3xl); }
.ms-faq h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.ms-faq .sub {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto;
}
.ms-faq-list {
  max-width: 800px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}
.ms-faq-item {
  background: var(--color-bg);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-sm);
  border: 1px solid rgba(var(--color-primary-rgb), 0.08);
  overflow: hidden;
}
.ms-faq-item summary {
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
.ms-faq-item summary::-webkit-details-marker { display: none; }
.ms-faq-item summary::after {
  content: '+';
  font-size: 1.4rem;
  color: var(--color-accent);
  flex-shrink: 0;
  transition: transform var(--transition-base);
}
.ms-faq-item[open] summary::after { transform: rotate(45deg); }
.ms-faq-item[open] summary { color: var(--color-accent); }
.ms-faq-answer {
  padding: 0 var(--space-xl) var(--space-lg);
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: 65ch;
}

/* ── Closing CTA ──────────────────────────────────────────── */
.ms-closing {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
  text-align: center;
}
.ms-closing h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-md);
}
.ms-closing p {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto var(--space-xl);
  line-height: 1.6;
}
.ms-closing-actions {
  display: flex;
  justify-content: center;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.ms-btn-closing-primary {
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
.ms-btn-closing-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-accent-dark); }
.ms-btn-closing-phone {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-primary);
  color: #ffffff;
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
.ms-btn-closing-phone:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-primary-dark); }

/* ── Responsive ───────────────────────────────────────────── */
@media (max-width: 1023px) {
  .ms-stats-grid    { grid-template-columns: repeat(2, 1fr); }
  .ms-why-cards     { grid-template-columns: repeat(2, 1fr); }
  .ms-process-steps { grid-template-columns: repeat(2, 1fr); }
  .ms-process-steps::before { display: none; }
}
@media (max-width: 767px) {
  .ms-detail-grid   { grid-template-columns: 1fr; }
  .ms-detail-image  { order: -1; }
  .ms-image-frame picture img { height: 280px; }
  .ms-stats-grid    { grid-template-columns: repeat(2, 1fr); gap: var(--space-md); }
  .ms-why-cards     { grid-template-columns: 1fr; }
  .ms-process-steps { grid-template-columns: 1fr; }
  .ms-hero-ctas     { flex-direction: column; align-items: flex-start; }
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
        <li class="current" aria-current="page">Mulching Services</li>
      </ol>
    </div>
  </nav>

  <!-- ── Inner Hero ─────────────────────────────────────────── -->
  <section class="ms-hero" aria-label="Mulching Services">
    <div class="container ms-hero-inner">
      <span class="ms-eyebrow">
        <i data-lucide="layers" aria-hidden="true" style="width:14px;height:14px;"></i>
        Mulch Installation &amp; Bed Refresh
      </span>
      <h1>Mulching Services in Edgerton, WI — Professional Mulch Installation</h1>
      <p class="ms-hero-sub">Mulch installed at the correct 2–3 inch depth from $65/yard — delivery and spreading in one visit, no volcano mulching, debris removed same day. Serving Edgerton and Rock County since 2021.</p>
      <div class="ms-hero-ctas">
        <a href="tel:6085015123" class="ms-btn-primary">
          <i data-lucide="phone" aria-hidden="true" style="width:18px;height:18px;"></i>
          Call (608) 501-5123
        </a>
        <a href="/contact" class="ms-btn-secondary">Get a Free Estimate</a>
      </div>
      <div class="ms-hero-trust">
        <span class="ms-trust-item">
          <i data-lucide="shield-check" aria-hidden="true"></i> Licensed &amp; Insured
        </span>
        <span class="ms-trust-item">
          <i data-lucide="star" aria-hidden="true"></i> 4.9-Star Rated
        </span>
        <span class="ms-trust-item">
          <i data-lucide="truck" aria-hidden="true"></i> Delivery + Install Same Visit
        </span>
      </div>
    </div>
  </section>

  <!-- ── Proof Ticker Strip ─────────────────────────────────── -->
  <div class="ticker-strip" aria-hidden="true">
    <div class="ticker-track">
      <span class="ticker-item">Hardwood &amp; Cedar Mulch<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">2–3" Correct Depth Every Time<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Delivery + Install Same Day<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Licensed &amp; Insured<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Free Estimates<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Edgerton · Stoughton · Madison · Janesville<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">60–75% Weed Reduction<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">No Volcano Mulching<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Hardwood &amp; Cedar Mulch<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">2–3" Correct Depth Every Time<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Delivery + Install Same Day<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Licensed &amp; Insured<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Free Estimates<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Edgerton · Stoughton · Madison · Janesville<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">60–75% Weed Reduction<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">No Volcano Mulching<span class="ticker-sep">✦</span></span>
    </div>
  </div>

  <!-- ── Divider ────────────────────────────────────────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,40 1200,40 0,40" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ── Service Detail Section ─────────────────────────────── -->
  <section class="ms-detail" data-animate="fade-up">
    <div class="container">
      <div class="ms-detail-grid">
        <div class="ms-detail-content">
          <span class="ms-section-eyebrow">What We Do</span>
          <h2>What Is Mulch Applied at the <span class="text-accent">Right Depth</span> to Protect Your Beds?</h2>

          <p>Mulch installation in Edgerton starts at $65 per yard installed, which includes delivery and spreading — no separate delivery charge, no drop-and-go bags left for you to spread. A typical residential property with 400–600 sq ft of bed area needs 4–6 yards, totaling $260–$390 for the full install. We measure your beds during the estimate visit and calculate the exact quantity needed.</p>

          <p>The 2–3 inch depth is not arbitrary — it's where mulch performs its three main functions simultaneously. Below 2 inches, weed seeds germinate through and light suppression fails. Above 3 inches, mulch holds moisture against plant crowns and can cause crown rot, particularly on perennials and shrubs. Proper mulch cuts weed emergence by 60–75% compared to unmulched beds and reduces supplemental watering needs by 25–30% during dry summer stretches — measurable results that protect both your plants and your time.</p>

          <p>Mulch type matters for Wisconsin properties. Shredded hardwood is the standard choice — it knits together over the season, locks in place during wind events, and decomposes into soil amendment over 12–18 months. Cedar mulch is the premium option: slower decomposition, natural moisture resistance, and natural pest-deterrent properties that are worth the cost increase in areas with higher slug or grub pressure. Dyed black and red mulch look sharp on installation day but fade within one season; we're upfront about that so you can make an informed decision on aesthetics vs. longevity.</p>

          <p>One of the most common and damaging mistakes we see in Edgerton yards is volcano mulching — piling mulch up against tree trunks in a mound shape. This practice traps moisture against bark tissue that evolved to be exposed to air, causes slow decay of the cambium layer, invites fungal disease, and kills trees over 5–10 years. We always maintain a 2–3 inch gap around all tree bases and explain why to every client.</p>

          <p>Spring is the optimal refresh window — after soil has warmed and before weed germination peaks in May. Annual refresh is all most beds need, topping up the previous year's decomposed layer back to the 2–3 inch ideal. We include edge cleanup before spreading so your beds look sharp and finished, not just covered in fresh mulch over ragged edges.</p>

          <div class="answer-block">
            <h3>How much does mulching cost in Edgerton, WI?</h3>
            <p>Mulch installation in Edgerton starts at $65 per cubic yard installed, including delivery and spreading. Most residential properties need 4–6 yards applied at the correct 2–3 inch depth for effective moisture retention and weed suppression. Annual replenishment each spring maintains that protective layer as last year's mulch decomposes.</p>
          </div>

          <p class="ms-updated">Last Updated: May 2026 · Serving Edgerton, WI and surrounding Rock &amp; Dane County communities.</p>

          <a href="/contact" class="ms-btn-detail">
            <i data-lucide="clipboard-list" aria-hidden="true" style="width:18px;height:18px;"></i>
            Request a Mulch Estimate
          </a>
        </div>

        <div class="ms-detail-image">
          <div class="ms-image-frame">
            <picture>
              <source srcset="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963882024-ohn2g8-474446326_122209560260208320_53140490767559634_n.jpg" type="image/webp">
              <img
                src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963882024-ohn2g8-474446326_122209560260208320_53140490767559634_n.jpg"
                alt="Professional mulch installation in landscape beds Edgerton Wisconsin Rock County"
                width="600"
                height="420"
                loading="lazy"
              >
            </picture>
            <span class="ms-image-badge">Edgerton, WI</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ── Divider: bg → bg-dark (wave) ──────────────────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,40 C300,80 900,0 1200,40 L1200,80 L0,80 Z" fill="#0f1e2d"/>
    </svg>
  </div>

  <!-- ── SIGNATURE: Stats Band ──────────────────────────────── -->
  <section class="ms-stats-band" aria-label="Mulching service statistics">
    <div class="container ms-stats-inner">
      <p class="ms-stats-label">R.A.H. Solutions — Mulching by the Numbers</p>
      <div class="ms-stats-grid">
        <div class="ms-stat-item" data-animate="fade-up">
          <div class="ms-stat-number">$65<span style="font-size:1.5rem;">/yd</span></div>
          <div class="ms-stat-label">Installed price per yard, delivery included</div>
        </div>
        <div class="ms-stat-item" data-animate="fade-up">
          <div class="ms-stat-number">2–3"</div>
          <div class="ms-stat-label">Ideal depth on every installation</div>
        </div>
        <div class="ms-stat-item" data-animate="fade-up">
          <div class="ms-stat-number">3+</div>
          <div class="ms-stat-label">Years serving Edgerton and Rock County</div>
        </div>
        <div class="ms-stat-item" data-animate="fade-up">
          <div class="ms-stat-number">4.9★</div>
          <div class="ms-stat-label">Average rating across 47 customer reviews</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ── Divider: bg-dark → bg-alt (diagonal up) ───────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,60 1200,0 1200,60" fill="#f4f7f9"/>
    </svg>
  </div>

  <!-- ── Mid-Page CTA Banner ────────────────────────────────── -->
  <section class="ms-cta-mid" aria-label="Schedule mulch installation">
    <div class="container">
      <p class="ms-cta-eyebrow">Spring Installs · Delivery + Spreading Same Day</p>
      <h2>Why Does Spring Mulch Season Fill Up Quickly Around Edgerton?</h2>
      <p>Don't wait until late May when spring schedules are maxed out. Book your mulch installation now — R.A.H. Solutions handles delivery and spreading in a single visit so your beds are done right and ready for the season.</p>
      <div class="ms-cta-actions">
        <a href="tel:6085015123" class="ms-btn-cta-phone">
          <i data-lucide="phone" aria-hidden="true" style="width:20px;height:20px;"></i>
          (608) 501-5123
        </a>
        <a href="/contact" class="ms-btn-cta-est">Get a Free Estimate</a>
      </div>
    </div>
  </section>

  <!-- ── Divider: primary → bg-alt ─────────────────────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,60 1200,60 0,60" fill="#f4f7f9"/>
    </svg>
  </div>

  <!-- ── Why Choose Section ─────────────────────────────────── -->
  <section class="ms-why" data-animate="fade-up">
    <div class="container">
      <div class="ms-why-header">
        <span class="ms-section-eyebrow">Why R.A.H. Solutions</span>
        <h2>How Are Depth, Material, and <span class="text-accent">Method</span> All Done Correctly?</h2>
        <p class="sub">Most mulch jobs fail on depth or technique. We bring all three factors to every install so your beds get the full protection mulch is supposed to provide.</p>
      </div>
      <div class="ms-why-cards">
        <div class="ms-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="ms-why-icon">
            <i data-lucide="ruler" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="ms-why-title">Correct Depth Every Time</h3>
          <p class="ms-why-text">2–3 inches, not approximate. Too thin and weeds push through. Too thick and plant crowns rot. We measure, not guess.</p>
        </div>
        <div class="ms-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="ms-why-icon">
            <i data-lucide="tree-pine" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="ms-why-title">Proper Volcano-Free Installation</h3>
          <p class="ms-why-text">We never pile mulch against tree trunks. Every tree on your property gets a proper 2–3 inch gap to protect bark health and prevent slow crown decay.</p>
        </div>
        <div class="ms-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="ms-why-icon">
            <i data-lucide="shield" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="ms-why-title">Weed Barrier Prep Available</h3>
          <p class="ms-why-text">We offer landscape fabric as an option where it makes sense — around trees, hardscape borders — with honest guidance on where it doesn't.</p>
        </div>
        <div class="ms-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="ms-why-icon">
            <i data-lucide="truck" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="ms-why-title">Delivery + Installation Same Visit</h3>
          <p class="ms-why-text">No separate delivery fee and no bags piled at your curb. We arrive with the right material, spread it to the right depth, and leave your yard clean.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ── Divider: bg-alt → bg ───────────────────────────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,60 1200,0" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ── Process Steps ──────────────────────────────────────── -->
  <section class="ms-process" data-animate="fade-up">
    <div class="container">
      <div class="ms-process-header">
        <span class="ms-section-eyebrow">How It Works</span>
        <h2>What Are the Four Steps: Measured, Delivered, <span class="text-accent">Spread</span>, and Done?</h2>
        <p class="sub">A fast, clean process that gets your beds mulched correctly and your property looking sharp — typically completed in a single visit.</p>
      </div>
      <div class="ms-process-steps">
        <div class="ms-step">
          <div class="ms-step-num">1</div>
          <h3 class="ms-step-title">Bed Measurement &amp; Mulch Type Selection</h3>
          <p class="ms-step-desc">We measure your beds, calculate exact yardage needed, and walk through material options — hardwood, cedar, or dyed.</p>
        </div>
        <div class="ms-step">
          <div class="ms-step-num">2</div>
          <h3 class="ms-step-title">Edge Cleanup Before Installation</h3>
          <p class="ms-step-desc">We re-cut bed edges before mulching so the finished look is clean and sharp, not just covered over ragged borders.</p>
        </div>
        <div class="ms-step">
          <div class="ms-step-num">3</div>
          <h3 class="ms-step-title">Mulch Delivery &amp; Spreading</h3>
          <p class="ms-step-desc">Material delivered and spread to 2–3 inch depth with proper technique — no volcano piling, no gaps along edges, even coverage throughout.</p>
        </div>
        <div class="ms-step">
          <div class="ms-step-num">4</div>
          <h3 class="ms-step-title">Final Raking &amp; Edging</h3>
          <p class="ms-step-desc">Final rake pass for uniform depth, tuck-in along all bed borders, and cleanup of any mulch on lawn or hardscape surfaces.</p>
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

  <!-- ── FAQ Section ────────────────────────────────────────── -->
  <section class="ms-faq" data-animate="fade-up">
    <div class="container">
      <div class="ms-faq-header">
        <span class="ms-section-eyebrow">Common Questions</span>
        <h2>What Are Mulching Questions Edgerton Homeowners Ask?</h2>
        <p class="sub">Straight answers on quantity, material selection, timing, and what actually works in Wisconsin landscape beds.</p>
      </div>
      <div class="ms-faq-list">
        <details class="ms-faq-item">
          <summary>How much mulch do I need for my beds?</summary>
          <div class="ms-faq-answer">
            <p>To apply mulch at the correct 2–3 inch depth, you need approximately 1 cubic yard of mulch per 100 square feet of bed area. A typical residential property with 400–600 sq ft of bed area requires 4–6 yards of mulch per application. R.A.H. Solutions measures your beds during the estimate visit and calculates the exact quantity — no guessing and no waste.</p>
          </div>
        </details>
        <details class="ms-faq-item">
          <summary>What type of mulch is best for Wisconsin winters?</summary>
          <div class="ms-faq-answer">
            <p>Shredded hardwood mulch is the most widely used option in Rock County — it breaks down slowly, insulates well, and doesn't blow around during winter winds. Cedar mulch is a premium option that breaks down more slowly, resists moisture, and has natural pest-deterrent properties. Dyed mulches (black, red) look sharp but the colorant fades within one season. For winter root protection through Edgerton's -20°F lows, any of these materials at 2–3 inch depth is effective.</p>
          </div>
        </details>
        <details class="ms-faq-item">
          <summary>How often should mulch be refreshed?</summary>
          <div class="ms-faq-answer">
            <p>Most landscape beds in Edgerton benefit from a fresh mulch application once per year — spring is the optimal timing, after soil has warmed and before weed germination peaks. Annual refresh maintains the 2–3 inch protective depth as the previous year's mulch decomposes and compresses. If your existing mulch is still at adequate depth from last year, a lighter top-dress of 1–1.5 inches may be sufficient.</p>
          </div>
        </details>
        <details class="ms-faq-item">
          <summary>Do you install weed barrier fabric under mulch?</summary>
          <div class="ms-faq-answer">
            <p>We offer weed barrier installation as an optional add-on, but we're honest about its limitations: landscape fabric works well in low-maintenance areas around trees and in hardscape borders, but breaks down over 3–5 years in active planting beds and eventually creates more problems than it solves. For most ornamental beds, proper mulch depth (2–3 inches) refreshed annually provides better long-term weed suppression without the issues landscape fabric creates.</p>
          </div>
        </details>
      </div>
    </div>
  </section>

  <!-- ── Divider: bg-alt → bg (diagonal up) ────────────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,60 1200,0 1200,60" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ── Closing CTA ────────────────────────────────────────── -->
  <section class="ms-closing" data-animate="fade-up">
    <div class="container">
      <span class="ms-section-eyebrow" style="justify-content:center;">Book Your Spring Mulch Install</span>
      <h2>How Do You Get Fresh Mulch at Correct Depth Done Right?</h2>
      <p>Spring mulch slots fill up fast in Edgerton and Rock County. Call R.A.H. Solutions now — we'll measure your beds, give you a written estimate, and get you on the schedule before peak spring books out.</p>
      <div class="ms-closing-actions">
        <a href="tel:6085015123" class="ms-btn-closing-phone">
          <i data-lucide="phone" aria-hidden="true" style="width:20px;height:20px;"></i>
          (608) 501-5123
        </a>
        <a href="/contact" class="ms-btn-closing-primary">
          <i data-lucide="clipboard-list" aria-hidden="true" style="width:20px;height:20px;"></i>
          Get a Free Estimate
        </a>
      </div>
    </div>
  </section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
