<?php
// ============================================================
// Commercial Lawn Care — R.A.H. Solutions, LLC
// ============================================================
$pageTitle       = 'Commercial Lawn Care | Edgerton, WI';
$pageDescription = 'Commercial lawn care in Edgerton, WI — scheduled grounds maintenance for businesses & HOAs. R.A.H. Solutions. Free estimates. Call (608) 501-5123.';
$canonicalUrl    = 'https://rahsolutionsllc.com/services/commercial-lawn-care';
// SEO: {"@context":"https://schema.org"} — schema and <link rel="canonical"> rendered via head.php
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963887692-btgk52-490023562_122226629156208320_4857034073232372127_n.jpg';
$currentPage     = 'service-commercial-lawn-care';
$heroPreload     = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963887692-btgk52-490023562_122226629156208320_4857034073232372127_n.jpg';

$faqs = [
  [
    '@type'          => 'Question',
    'name'           => 'Do you service commercial properties in Edgerton?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'Yes. R.A.H. Solutions provides commercial lawn care and grounds maintenance for businesses throughout Edgerton and Rock County, including retail storefronts, office properties, apartment complexes, churches, and industrial facilities. We operate on scheduled programs under seasonal contracts with monthly invoicing.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'What types of commercial clients do you work with?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'We work with a range of commercial property types in the Edgerton area including small retail businesses, professional offices, apartment buildings and HOAs, churches, and industrial or light manufacturing facilities. We also partner with property managers who oversee multiple sites and need a reliable single vendor for grounds maintenance.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'Can you provide monthly invoicing for commercial accounts?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'Yes. Commercial clients under seasonal contracts are invoiced monthly, which makes budgeting straightforward and eliminates per-visit payment tracking. Monthly invoicing is available for both single-property clients and property managers handling multiple accounts.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'Do you handle both lawn care and snow removal for commercial properties?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'Yes. We offer year-round commercial property programs that cover lawn care from April through October and snow removal through the winter. Using a single vendor for both services simplifies scheduling, invoicing, and property access logistics — and means we already know your property layout when the first storm arrives.',
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
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Commercial Lawn Care', 'item' => 'https://rahsolutionsllc.com/services/commercial-lawn-care'],
      ],
    ],
    [
      '@type'       => 'Service',
      '@id'         => 'https://rahsolutionsllc.com/services/commercial-lawn-care/#service',
      'name'        => 'Commercial Lawn Care',
      'description' => 'Scheduled commercial grounds maintenance including mowing, edging, bed care, and seasonal cleanup for businesses in Edgerton, Stoughton, Janesville, and Madison, WI.',
      'provider'    => ['@type' => 'LocalBusiness', '@id' => 'https://rahsolutionsllc.com/#business'],
      'areaServed'  => [
        ['@type' => 'City', 'name' => 'Edgerton'],
        ['@type' => 'City', 'name' => 'Stoughton'],
        ['@type' => 'City', 'name' => 'Janesville'],
        ['@type' => 'City', 'name' => 'Madison'],
      ],
      'serviceType' => 'Commercial Lawn Care',
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
   Commercial Lawn Care — Page-Specific Styles (.clc-)
   ============================================================ */

/* ── Breadcrumb ───────────────────────────────────────────── */
.svc-breadcrumb {
  background: var(--color-bg-dark);
  padding: var(--space-sm) 0;
  position: relative;
  z-index: 10;
}
.svc-breadcrumb .container { display: flex; align-items: center; gap: var(--space-xs); }
.breadcrumb-list { display: flex; align-items: center; gap: var(--space-xs); list-style: none; flex-wrap: wrap; }
.breadcrumb-list li { display: flex; align-items: center; gap: var(--space-xs); font-size: var(--font-size-sm); color: rgba(255,255,255,0.55); }
.breadcrumb-list li a { color: rgba(255,255,255,0.7); transition: color var(--transition-fast); }
.breadcrumb-list li a:hover { color: var(--color-accent); }
.breadcrumb-list li.current { color: var(--color-accent); font-weight: 600; }
.breadcrumb-sep { color: rgba(255,255,255,0.3); font-size: var(--font-size-xs); }

/* ── Inner Hero ───────────────────────────────────────────── */
.clc-hero {
  position: relative;
  min-height: 60vh;
  display: flex;
  align-items: center;
  overflow: hidden;
  background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963887692-btgk52-490023562_122226629156208320_4857034073232372127_n.jpg');
  background-size: cover;
  background-position: center;
  animation: clc-kenburns 20s ease-in-out infinite alternate;
}
@keyframes clc-kenburns {
  from { background-size: 108%; background-position: center 45%; }
  to   { background-size: 120%; background-position: center 58%; }
}
.clc-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    140deg,
    rgba(var(--color-primary-rgb), 0.91) 0%,
    rgba(var(--color-primary-rgb), 0.58) 58%,
    rgba(var(--color-accent-rgb), 0.15) 100%
  );
  z-index: 1;
}
.clc-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 2;
  pointer-events: none;
}
.clc-hero-inner { position: relative; z-index: 3; padding: var(--space-4xl) 0 var(--space-3xl); }
.clc-eyebrow {
  display: inline-flex; align-items: center; gap: var(--space-sm);
  font-family: var(--font-body); font-size: var(--font-size-sm);
  font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase;
  color: var(--color-accent); margin-bottom: var(--space-md);
}
.clc-eyebrow::before {
  content: ''; display: block; width: 28px; height: 2px;
  background: var(--color-accent); flex-shrink: 0;
}
.clc-hero h1 {
  font-family: var(--font-heading);
  font-size: clamp(2.2rem, 5vw, 3.8rem);
  font-weight: 700; line-height: 1.1; text-wrap: balance;
  letter-spacing: -0.02em; margin-bottom: var(--space-md);
  background: linear-gradient(135deg, #ffffff 0%, rgba(var(--color-accent-rgb), 0.9) 100%);
  -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
}
.clc-hero-sub {
  font-size: var(--font-size-lg); color: rgba(255,255,255,0.82);
  max-width: 52ch; line-height: 1.6; margin-bottom: var(--space-xl);
}
.clc-hero-ctas { display: flex; gap: var(--space-md); flex-wrap: wrap; align-items: center; }
.clc-btn-primary {
  display: inline-flex; align-items: center; gap: var(--space-sm);
  background: var(--color-accent); color: var(--color-bg-dark);
  font-family: var(--font-heading); font-size: var(--font-size-base);
  font-weight: 700; letter-spacing: 0.04em; text-transform: uppercase;
  padding: var(--space-md) var(--space-xl); border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-accent-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden; position: relative;
}
.clc-btn-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-accent-dark); }
.clc-btn-primary:active { transform: translateY(2px); box-shadow: 0 2px 0 var(--color-accent-dark); }
.clc-btn-secondary {
  display: inline-flex; align-items: center; gap: var(--space-sm);
  background: transparent; color: #ffffff;
  font-family: var(--font-heading); font-size: var(--font-size-base);
  font-weight: 600; letter-spacing: 0.04em; text-transform: uppercase;
  padding: var(--space-md) var(--space-xl); border-radius: var(--radius-md);
  border: 2px solid rgba(255,255,255,0.5);
  transition: background var(--transition-base), border-color var(--transition-base);
}
.clc-btn-secondary:hover { background: rgba(255,255,255,0.12); border-color: rgba(255,255,255,0.8); }
.clc-hero-trust { display: flex; align-items: center; gap: var(--space-lg); margin-top: var(--space-xl); flex-wrap: wrap; }
.clc-trust-item { display: flex; align-items: center; gap: var(--space-xs); font-size: var(--font-size-sm); color: rgba(255,255,255,0.75); font-weight: 600; }
.clc-trust-item i { color: var(--color-accent); width: 16px; height: 16px; }

/* ── Ticker ───────────────────────────────────────────────── */
.ticker-strip { background: var(--color-primary); padding: var(--space-sm) 0; overflow: hidden; position: relative; }
.ticker-strip::before,
.ticker-strip::after { content: ''; position: absolute; top: 0; bottom: 0; width: 80px; z-index: 2; pointer-events: none; }
.ticker-strip::before { left: 0; background: linear-gradient(to right, var(--color-primary), transparent); }
.ticker-strip::after  { right: 0; background: linear-gradient(to left, var(--color-primary), transparent); }
.ticker-track { display: flex; width: max-content; animation: ticker-scroll 30s linear infinite; }
.ticker-track:hover { animation-play-state: paused; }
@keyframes ticker-scroll { from { transform: translateX(0); } to { transform: translateX(-50%); } }
.ticker-item {
  display: inline-flex; align-items: center; gap: var(--space-md); white-space: nowrap;
  font-family: var(--font-body); font-size: 0.8rem; font-weight: 700; letter-spacing: 0.1em;
  text-transform: uppercase; color: #ffffff; padding: 0 var(--space-xl);
}
.ticker-sep { color: var(--color-accent); font-size: 1.2rem; line-height: 1; }

/* ── Dividers ─────────────────────────────────────────────── */
.divider-wrap { display: block; line-height: 0; overflow: hidden; }
.divider-wrap svg { display: block; width: 100%; }

/* ── Section Eyebrow ──────────────────────────────────────── */
.section-eyebrow {
  display: inline-flex; align-items: center; gap: var(--space-sm);
  font-family: var(--font-body); font-size: var(--font-size-xs);
  font-weight: 700; letter-spacing: 0.14em; text-transform: uppercase;
  color: var(--color-accent); margin-bottom: var(--space-sm);
}
.section-eyebrow::after { content: ''; display: block; width: 24px; height: 2px; background: var(--color-accent); }

/* ── Service Detail ───────────────────────────────────────── */
.clc-detail { padding: var(--space-4xl) 0 var(--space-3xl); background: var(--color-bg); }
.clc-detail-grid { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-3xl); align-items: center; }
.clc-detail-content { order: 1; }
.clc-detail-image   { order: 2; }
.clc-detail h2 {
  font-family: var(--font-heading); font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700; line-height: 1.15; text-wrap: balance;
  letter-spacing: -0.02em; color: var(--color-primary); margin-bottom: var(--space-lg);
}
.clc-detail p { font-size: var(--font-size-base); color: var(--color-text-light); line-height: 1.7; max-width: 65ch; margin-bottom: var(--space-md); }
.clc-detail p:last-of-type { margin-bottom: var(--space-xl); }
.clc-updated { font-size: var(--font-size-sm); color: var(--color-gray); font-style: italic; }
.clc-image-frame { position: relative; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-xl); }
.clc-image-frame::before {
  content: ''; position: absolute; inset: 0;
  border: 3px solid rgba(var(--color-accent-rgb), 0.25);
  border-radius: var(--radius-lg); z-index: 2; pointer-events: none;
}
.clc-image-frame picture img { width: 100%; height: 420px; object-fit: cover; display: block; transition: transform var(--transition-slow); }
.clc-image-frame:hover picture img { transform: scale(1.03); }
.clc-image-badge {
  position: absolute; bottom: var(--space-lg); left: var(--space-lg);
  background: var(--color-accent); color: var(--color-bg-dark);
  font-family: var(--font-heading); font-size: var(--font-size-sm);
  font-weight: 700; letter-spacing: 0.06em; text-transform: uppercase;
  padding: var(--space-xs) var(--space-md); border-radius: var(--radius-sm);
  z-index: 3; box-shadow: var(--shadow-md);
}
.clc-btn-detail {
  display: inline-flex; align-items: center; gap: var(--space-sm);
  background: var(--color-primary); color: #ffffff;
  font-family: var(--font-heading); font-size: var(--font-size-base);
  font-weight: 600; letter-spacing: 0.04em; text-transform: uppercase;
  padding: var(--space-md) var(--space-xl); border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-primary-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden; position: relative;
}
.clc-btn-detail:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-primary-dark); }
.clc-btn-detail:active { transform: translateY(2px); box-shadow: 0 2px 0 var(--color-primary-dark); }

/* ── SIGNATURE: Stats Band ────────────────────────────────── */
.clc-stats { background: var(--color-bg-dark); padding: var(--space-3xl) 0; position: relative; overflow: hidden; }
.clc-stats::before {
  content: ''; position: absolute; top: -60px; left: -60px;
  width: 320px; height: 320px; border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.06); pointer-events: none;
}
.clc-stats::after {
  content: ''; position: absolute; bottom: -80px; right: -40px;
  width: 400px; height: 400px; border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.04); pointer-events: none;
}
.clc-stats-inner { position: relative; z-index: 1; }
.clc-stats-label {
  text-align: center; font-family: var(--font-body); font-size: var(--font-size-sm);
  font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase;
  color: var(--color-accent); margin-bottom: var(--space-2xl);
}
.clc-stats-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: var(--space-xl); }
.clc-stat-item {
  text-align: center; padding: var(--space-xl);
  border: 1px solid rgba(var(--color-accent-rgb), 0.15);
  border-radius: var(--radius-lg); background: rgba(255,255,255,0.03);
  transition: border-color var(--transition-base), background var(--transition-base);
}
.clc-stat-item:hover { border-color: rgba(var(--color-accent-rgb), 0.35); background: rgba(var(--color-accent-rgb), 0.05); }
.clc-stat-number {
  font-family: var(--font-heading); font-size: clamp(2.2rem, 4vw, 3.2rem);
  font-weight: 700; color: var(--color-accent); line-height: 1;
  margin-bottom: var(--space-xs); letter-spacing: -0.02em;
}
.clc-stat-label { font-size: var(--font-size-sm); color: rgba(255,255,255,0.65); line-height: 1.4; max-width: 18ch; margin: 0 auto; }

/* ── Mid CTA ──────────────────────────────────────────────── */
.clc-cta-mid {
  position: relative; padding: var(--space-3xl) 0;
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  overflow: hidden;
}
.clc-cta-mid::after {
  content: ''; position: absolute; inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none; z-index: 0;
}
.clc-cta-mid .container { position: relative; z-index: 1; text-align: center; }
.clc-cta-eyebrow {
  display: inline-block; font-family: var(--font-body); font-size: var(--font-size-sm);
  font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase;
  color: var(--color-accent); margin-bottom: var(--space-sm);
}
.clc-cta-mid h2 {
  font-family: var(--font-heading); font-size: clamp(1.8rem, 4vw, 2.8rem);
  font-weight: 700; text-wrap: balance; letter-spacing: -0.02em;
  color: #ffffff; margin-bottom: var(--space-md);
}
.clc-cta-mid > .container > p {
  font-size: var(--font-size-lg); color: rgba(255,255,255,0.8);
  max-width: 55ch; margin: 0 auto var(--space-xl); line-height: 1.6;
}
.clc-cta-actions { display: flex; justify-content: center; align-items: center; gap: var(--space-md); flex-wrap: wrap; }
.clc-btn-phone {
  display: inline-flex; align-items: center; gap: var(--space-sm);
  background: #ffffff; color: var(--color-primary-dark);
  font-family: var(--font-heading); font-size: clamp(1.1rem, 2vw, 1.4rem);
  font-weight: 700; padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-md); box-shadow: var(--shadow-lg);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden; position: relative;
}
.clc-btn-phone:hover { transform: translateY(-2px); box-shadow: var(--shadow-xl); }
.clc-btn-cta {
  display: inline-flex; align-items: center; gap: var(--space-sm);
  background: var(--color-accent); color: var(--color-bg-dark);
  font-family: var(--font-heading); font-size: var(--font-size-base);
  font-weight: 700; letter-spacing: 0.04em; text-transform: uppercase;
  padding: var(--space-md) var(--space-xl); border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-accent-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden; position: relative;
}
.clc-btn-cta:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-accent-dark); }
.clc-btn-cta:active { transform: translateY(2px); box-shadow: 0 2px 0 var(--color-accent-dark); }

/* ── Why Choose ───────────────────────────────────────────── */
.clc-why { padding: var(--space-4xl) 0; background: var(--color-bg-alt); }
.clc-why-header { text-align: center; margin-bottom: var(--space-3xl); }
.clc-why h2 {
  font-family: var(--font-heading); font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700; text-wrap: balance; letter-spacing: -0.02em;
  color: var(--color-primary); margin-bottom: var(--space-sm);
}
.clc-why .sub { font-size: var(--font-size-lg); color: var(--color-text-light); max-width: 55ch; margin: 0 auto; }
.clc-why-cards { display: grid; grid-template-columns: repeat(4, 1fr); gap: var(--space-lg); }
.clc-why-card {
  background: var(--color-bg); border-radius: var(--radius-lg);
  padding: var(--space-xl) var(--space-lg); box-shadow: var(--shadow-card);
  transition: transform var(--transition-base), box-shadow var(--transition-base), background var(--transition-base);
  position: relative; overflow: hidden;
}
.clc-why-card::before {
  content: ''; position: absolute; top: 0; left: 0; right: 0;
  height: 3px; background: var(--color-accent);
  transform: scaleX(0); transform-origin: left; transition: transform var(--transition-base);
}
.clc-why-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-xl); background: var(--color-primary); }
.clc-why-card:hover::before { transform: scaleX(1); }
.clc-why-card:hover .clc-why-title,
.clc-why-card:hover .clc-why-text { color: rgba(255,255,255,0.9); }
.clc-why-card:hover .clc-why-icon { background: rgba(var(--color-accent-rgb), 0.2); color: var(--color-accent); }
.clc-why-icon {
  width: 52px; height: 52px; border-radius: var(--radius-md);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-accent); margin-bottom: var(--space-md);
  transition: background var(--transition-base), color var(--transition-base);
}
.clc-why-title {
  font-family: var(--font-heading); font-size: var(--font-size-xl);
  font-weight: 600; text-wrap: balance; color: var(--color-primary);
  margin-bottom: var(--space-sm); transition: color var(--transition-base);
}
.clc-why-text { font-size: var(--font-size-sm); color: var(--color-text-light); line-height: 1.6; transition: color var(--transition-base); }

/* ── Process Section ──────────────────────────────────────── */
.clc-process { padding: var(--space-4xl) 0; background: var(--color-bg); }
.clc-process-header { text-align: center; margin-bottom: var(--space-3xl); }
.clc-process h2 {
  font-family: var(--font-heading); font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700; text-wrap: balance; letter-spacing: -0.02em;
  color: var(--color-primary); margin-bottom: var(--space-sm);
}
.clc-process .sub { font-size: var(--font-size-lg); color: var(--color-text-light); max-width: 55ch; margin: 0 auto; }
.clc-steps { display: grid; grid-template-columns: repeat(4, 1fr); gap: var(--space-lg); position: relative; }
.clc-steps::before {
  content: ''; position: absolute; top: 32px;
  left: calc(12.5% + 26px); right: calc(12.5% + 26px);
  height: 2px;
  background: linear-gradient(to right, var(--color-accent), rgba(var(--color-accent-rgb), 0.2));
  pointer-events: none;
}
.clc-step { text-align: center; padding: var(--space-lg); }
.clc-step-num {
  width: 64px; height: 64px; border-radius: 50%;
  background: var(--color-primary); color: #ffffff;
  font-family: var(--font-heading); font-size: 1.5rem; font-weight: 700;
  display: flex; align-items: center; justify-content: center;
  margin: 0 auto var(--space-md); position: relative; z-index: 1;
  border: 3px solid rgba(var(--color-accent-rgb), 0.3);
  transition: background var(--transition-base), border-color var(--transition-base);
}
.clc-step:hover .clc-step-num { background: var(--color-accent); border-color: var(--color-accent); color: var(--color-bg-dark); }
.clc-step-title { font-family: var(--font-heading); font-size: var(--font-size-lg); font-weight: 600; text-wrap: balance; color: var(--color-primary); margin-bottom: var(--space-sm); }
.clc-step-desc { font-size: var(--font-size-sm); color: var(--color-text-light); line-height: 1.6; max-width: 22ch; margin: 0 auto; }

/* ── FAQ Section ──────────────────────────────────────────── */
.clc-faq { padding: var(--space-4xl) 0; background: var(--color-bg-alt); }
.clc-faq-header { text-align: center; margin-bottom: var(--space-3xl); }
.clc-faq h2 {
  font-family: var(--font-heading); font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700; text-wrap: balance; letter-spacing: -0.02em;
  color: var(--color-primary); margin-bottom: var(--space-sm);
}
.clc-faq .sub { font-size: var(--font-size-lg); color: var(--color-text-light); max-width: 55ch; margin: 0 auto; }
.clc-faq-list { max-width: 800px; margin: 0 auto; display: flex; flex-direction: column; gap: var(--space-md); }
.clc-faq-item {
  background: var(--color-bg); border-radius: var(--radius-md);
  box-shadow: var(--shadow-sm); border: 1px solid rgba(var(--color-primary-rgb), 0.08); overflow: hidden;
}
.clc-faq-item summary {
  padding: var(--space-lg) var(--space-xl);
  font-family: var(--font-heading); font-size: var(--font-size-lg);
  font-weight: 600; text-wrap: balance; color: var(--color-primary);
  cursor: pointer; display: flex; justify-content: space-between;
  align-items: center; gap: var(--space-md); list-style: none;
  transition: color var(--transition-fast);
}
.clc-faq-item summary::-webkit-details-marker { display: none; }
.clc-faq-item summary::after { content: '+'; font-size: 1.4rem; color: var(--color-accent); flex-shrink: 0; transition: transform var(--transition-base); }
.clc-faq-item[open] summary::after { transform: rotate(45deg); }
.clc-faq-item[open] summary { color: var(--color-accent); }
.clc-faq-answer { padding: 0 var(--space-xl) var(--space-lg); font-size: var(--font-size-base); color: var(--color-text-light); line-height: 1.7; max-width: 65ch; }

/* ── Closing CTA ──────────────────────────────────────────── */
.clc-closing { padding: var(--space-4xl) 0; background: var(--color-bg); text-align: center; }
.clc-closing h2 {
  font-family: var(--font-heading); font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700; text-wrap: balance; letter-spacing: -0.02em;
  color: var(--color-primary); margin-bottom: var(--space-md);
}
.clc-closing p { font-size: var(--font-size-lg); color: var(--color-text-light); max-width: 55ch; margin: 0 auto var(--space-xl); line-height: 1.6; }
.clc-closing-actions { display: flex; justify-content: center; gap: var(--space-md); flex-wrap: wrap; }
.clc-btn-closing-accent {
  display: inline-flex; align-items: center; gap: var(--space-sm);
  background: var(--color-accent); color: var(--color-bg-dark);
  font-family: var(--font-heading); font-size: var(--font-size-lg);
  font-weight: 700; letter-spacing: 0.04em; text-transform: uppercase;
  padding: var(--space-md) var(--space-2xl); border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-accent-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden; position: relative;
}
.clc-btn-closing-accent:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-accent-dark); }
.clc-btn-closing-primary {
  display: inline-flex; align-items: center; gap: var(--space-sm);
  background: var(--color-primary); color: #ffffff;
  font-family: var(--font-heading); font-size: var(--font-size-lg);
  font-weight: 700; padding: var(--space-md) var(--space-2xl);
  border-radius: var(--radius-md); box-shadow: 0 4px 0 var(--color-primary-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden; position: relative;
}
.clc-btn-closing-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-primary-dark); }

/* ── Responsive ───────────────────────────────────────────── */
@media (max-width: 1023px) {
  .clc-stats-grid  { grid-template-columns: repeat(2, 1fr); }
  .clc-why-cards   { grid-template-columns: repeat(2, 1fr); }
  .clc-steps       { grid-template-columns: repeat(2, 1fr); }
  .clc-steps::before { display: none; }
}
@media (max-width: 767px) {
  .clc-detail-grid { grid-template-columns: 1fr; }
  .clc-detail-image { order: -1; }
  .clc-image-frame picture img { height: 280px; }
  .clc-stats-grid  { grid-template-columns: repeat(2, 1fr); gap: var(--space-md); }
  .clc-why-cards   { grid-template-columns: 1fr; }
  .clc-steps       { grid-template-columns: 1fr; }
  .clc-hero-ctas   { flex-direction: column; align-items: flex-start; }
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
        <li class="current" aria-current="page">Commercial Lawn Care</li>
      </ol>
    </div>
  </nav>

  <!-- ── Inner Hero ─────────────────────────────────────────── -->
  <section class="clc-hero" aria-label="Commercial Lawn Care Services">
    <div class="container clc-hero-inner">
      <span class="clc-eyebrow">
        <i data-lucide="building-2" aria-hidden="true" style="width:14px;height:14px;"></i>
        Business Grounds Management
      </span>
      <h1>Commercial Lawn Care in Edgerton, WI</h1>
      <p class="clc-hero-sub">Reliable, scheduled grounds maintenance for businesses throughout Rock County — flexible seasonal contracts, monthly invoicing, and crews on fixed schedules your operation can count on.</p>
      <div class="clc-hero-ctas">
        <a href="tel:6085015123" class="clc-btn-primary">
          <i data-lucide="phone" aria-hidden="true" style="width:18px;height:18px;"></i>
          Call (608) 501-5123
        </a>
        <a href="/contact" class="clc-btn-secondary">Get a Free Estimate</a>
      </div>
      <div class="clc-hero-trust">
        <span class="clc-trust-item">
          <i data-lucide="shield-check" aria-hidden="true"></i> Licensed &amp; Insured
        </span>
        <span class="clc-trust-item">
          <i data-lucide="calendar-check" aria-hidden="true"></i> Seasonal Contracts
        </span>
        <span class="clc-trust-item">
          <i data-lucide="star" aria-hidden="true"></i> 4.9-Star Rated
        </span>
      </div>
    </div>
  </section>

  <!-- ── Proof Ticker Strip ─────────────────────────────────── -->
  <div class="ticker-strip" aria-hidden="true">
    <div class="ticker-track">
      <span class="ticker-item">Retail &amp; Office Properties<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Seasonal Contracts<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Monthly Invoicing<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Fixed Crew Schedules<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Snow Removal Available<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Rock County Businesses<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Free Estimates<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Licensed &amp; Insured<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Retail &amp; Office Properties<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Seasonal Contracts<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Monthly Invoicing<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Fixed Crew Schedules<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Snow Removal Available<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Rock County Businesses<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Free Estimates<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Licensed &amp; Insured<span class="ticker-sep">✦</span></span>
    </div>
  </div>

  <!-- ── Divider ────────────────────────────────────────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,40 1200,40 0,40" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ── Service Detail ─────────────────────────────────────── -->
  <section class="clc-detail" data-animate="fade-up">
    <div class="container">
      <div class="clc-detail-grid">

        <div class="clc-detail-content">
          <span class="section-eyebrow">What Commercial Clients Get</span>
          <h2>Why Do Your Grounds Reflect Your Business Before Customers Walk In?</h2>

          <p>Commercial lawn care from R.A.H. Solutions means scheduled programs with reliable crews and monthly invoicing — not calling around for someone every spring. Our commercial programs cover mowing, edging, debris removal, seasonal bed maintenance, and optional snow removal add-ons, structured as per-season contracts billed monthly for predictable budget management.</p>

          <p>The difference between residential and commercial grounds maintenance isn't just scale — it's accountability. When a residential client's lawn is missed, a neighbor notices. When a commercial client's grounds are missed, customers and business contacts notice before they ever walk through the door. Research on commercial property aesthetics consistently shows that exterior condition shapes customer impressions within seconds of arrival. A neglected storefront communicates neglect inside as well. We operate on fixed schedules with zero tolerance for missed visits because that's what commercial clients require.</p>

          <p>Commercial pricing works on per-season contracts with monthly invoicing. Most commercial properties in the Edgerton area run between $400–$1,500/month depending on acreage, service scope, and visit frequency. Property managers handling multiple sites can consolidate billing and coordinate access under a single vendor agreement. We're already familiar with this structure and can adapt to existing work order systems.</p>

          <p>We serve retail storefronts, professional offices, apartment complexes and HOAs, churches, and light industrial facilities throughout Rock County. ADA walkway access and snow removal add-ons are available as part of a combined year-round program — one vendor, one invoice, consistent service from April through the last snowfall.</p>

          <p class="clc-updated">Last Updated: April 2026 · Serving commercial properties in Edgerton, WI and Rock County.</p>

          <a href="/contact" class="clc-btn-detail">
            <i data-lucide="clipboard-list" aria-hidden="true" style="width:18px;height:18px;"></i>
            Request a Commercial Quote
          </a>
        </div>

        <div class="clc-detail-image">
          <div class="clc-image-frame">
            <picture>
              <source srcset="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963904225-q0hpk2-470686200_122202491702208320_8107918479252601066_n.jpg" type="image/webp">
              <img
                src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963904225-q0hpk2-470686200_122202491702208320_8107918479252601066_n.jpg"
                alt="Commercial grounds maintenance lawn care Edgerton Wisconsin business property"
                width="600"
                height="420"
                loading="lazy"
              >
            </picture>
            <span class="clc-image-badge">Rock County, WI</span>
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
  <section class="clc-stats" aria-label="Commercial lawn care service statistics">
    <div class="container clc-stats-inner">
      <p class="clc-stats-label">Commercial Lawn Care — By the Numbers</p>
      <div class="clc-stats-grid">
        <div class="clc-stat-item" data-animate="fade-up">
          <div class="clc-stat-number">Seasonal</div>
          <div class="clc-stat-label">Contracts with flexible monthly invoicing</div>
        </div>
        <div class="clc-stat-item" data-animate="fade-up">
          <div class="clc-stat-number">Rock Co.</div>
          <div class="clc-stat-label">Businesses served throughout the county</div>
        </div>
        <div class="clc-stat-item" data-animate="fade-up">
          <div class="clc-stat-number">Same-Day</div>
          <div class="clc-stat-label">Issue response for contracted commercial clients</div>
        </div>
        <div class="clc-stat-item" data-animate="fade-up">
          <div class="clc-stat-number">4.9★</div>
          <div class="clc-stat-label">Average customer rating across 47 reviews</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ── Divider: bg-dark → primary ────────────────────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,60 1200,0 1200,60" fill="#1a2b3c"/>
    </svg>
  </div>

  <!-- ── Mid CTA ────────────────────────────────────────────── -->
  <section class="clc-cta-mid" aria-label="Request commercial lawn care quote">
    <div class="container">
      <p class="clc-cta-eyebrow">Free Commercial Estimates — No Obligation</p>
      <h2>Why Does Your Business Exterior Speak Before You Do?</h2>
      <p>A well-maintained property signals professionalism to everyone who arrives. Get a seasonal contract quote for your Edgerton or Rock County commercial property — R.A.H. Solutions serves storefronts, offices, apartments, and more.</p>
      <div class="clc-cta-actions">
        <a href="tel:6085015123" class="clc-btn-phone">
          <i data-lucide="phone" aria-hidden="true" style="width:20px;height:20px;"></i>
          (608) 501-5123
        </a>
        <a href="/contact" class="clc-btn-cta">Request a Commercial Quote</a>
      </div>
    </div>
  </section>

  <!-- ── Divider: primary → bg-alt ─────────────────────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,60 1200,60 0,60" fill="#f4f7f9"/>
    </svg>
  </div>

  <!-- ── Why Choose ─────────────────────────────────────────── -->
  <section class="clc-why" data-animate="fade-up">
    <div class="container">
      <div class="clc-why-header">
        <span class="section-eyebrow">Why R.A.H. Solutions</span>
        <h2>What Is Commercial Grounds Maintenance Done Right?</h2>
        <p class="sub">Businesses need reliability above everything. Here's how we structure commercial programs so your grounds are never a concern again.</p>
      </div>
      <div class="clc-why-cards">
        <div class="clc-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="clc-why-icon">
            <i data-lucide="file-text" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="clc-why-title">Contracted Seasonal Programs</h3>
          <p class="clc-why-text">Full-season contracts eliminate the need to book visits one at a time. One agreement covers mowing, edging, and seasonal care from April through October.</p>
        </div>
        <div class="clc-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="clc-why-icon">
            <i data-lucide="settings" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="clc-why-title">Professional-Grade Equipment</h3>
          <p class="clc-why-text">Commercial properties demand equipment that handles larger areas cleanly and efficiently. We use commercial-grade mowers and tools that leave a finished result, not a rushed job.</p>
        </div>
        <div class="clc-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="clc-why-icon">
            <i data-lucide="receipt" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="clc-why-title">Invoiced Monthly for Easy Budgeting</h3>
          <p class="clc-why-text">No per-visit payments. Commercial clients receive a single monthly invoice for grounds maintenance — cleaner books, fewer approvals, predictable line items.</p>
        </div>
        <div class="clc-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="clc-why-icon">
            <i data-lucide="calendar-check" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="clc-why-title">Reliable Crews on Fixed Schedules</h3>
          <p class="clc-why-text">You know which day we're there. The same crew services your property on schedule — no rotation of strangers, no guessing whether service happened this week.</p>
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
  <section class="clc-process" data-animate="fade-up">
    <div class="container">
      <div class="clc-process-header">
        <span class="section-eyebrow">How It Works</span>
        <h2>How Do You Go from First Call to Full-Season Contract?</h2>
        <p class="sub">Setting up commercial service with R.A.H. Solutions is straightforward — one walkthrough, one proposal, and your grounds are handled for the season.</p>
      </div>
      <div class="clc-steps">
        <div class="clc-step">
          <div class="clc-step-num">1</div>
          <h3 class="clc-step-title">Property Walkthrough &amp; Scope of Work</h3>
          <p class="clc-step-desc">We assess acreage, bed inventory, access points, and any special requirements before quoting.</p>
        </div>
        <div class="clc-step">
          <div class="clc-step-num">2</div>
          <h3 class="clc-step-title">Custom Contract Proposal</h3>
          <p class="clc-step-desc">A written proposal with visit schedule, scope of work, monthly rate, and optional add-ons for your review and approval.</p>
        </div>
        <div class="clc-step">
          <div class="clc-step-num">3</div>
          <h3 class="clc-step-title">Program Launch</h3>
          <p class="clc-step-desc">Crew assigned, schedule confirmed, and service begins on your agreed start date. Monthly invoices follow the first service month.</p>
        </div>
        <div class="clc-step">
          <div class="clc-step-num">4</div>
          <h3 class="clc-step-title">Monthly Reporting &amp; Seasonal Adjustments</h3>
          <p class="clc-step-desc">Seasonal adjustments to mowing height, frequency, and included tasks are made automatically — you don't need to manage the details.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ── Divider: bg → bg-alt ──────────────────────────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,60 1200,60 0,60" fill="#f4f7f9"/>
    </svg>
  </div>

  <!-- ── FAQ Section ────────────────────────────────────────── -->
  <section class="clc-faq" data-animate="fade-up">
    <div class="container">
      <div class="clc-faq-header">
        <span class="section-eyebrow">Common Questions</span>
        <h2>What Are Commercial Lawn Care Questions You Have?</h2>
        <p class="sub">Contracts, pricing, property types, and year-round programs — direct answers for Edgerton business owners and property managers.</p>
      </div>
      <div class="clc-faq-list">
        <details class="clc-faq-item">
          <summary>Do you service commercial properties in Edgerton?</summary>
          <div class="clc-faq-answer">
            <p>Yes. R.A.H. Solutions provides commercial lawn care and grounds maintenance for businesses throughout Edgerton and Rock County, including retail storefronts, offices, apartment complexes, churches, and industrial facilities. We operate on scheduled programs under seasonal contracts with monthly invoicing.</p>
          </div>
        </details>
        <details class="clc-faq-item">
          <summary>What types of commercial clients do you work with?</summary>
          <div class="clc-faq-answer">
            <p>We work with small retail businesses, professional offices, apartment buildings and HOAs, churches, and industrial or light manufacturing facilities in the Edgerton area. We also work with property managers overseeing multiple sites who need a reliable single vendor for grounds maintenance across their portfolio.</p>
          </div>
        </details>
        <details class="clc-faq-item">
          <summary>Can you provide monthly invoicing for commercial accounts?</summary>
          <div class="clc-faq-answer">
            <p>Yes. Commercial clients under seasonal contracts are invoiced monthly, which simplifies budgeting and eliminates per-visit payment tracking. Monthly invoicing is available for both single-property clients and property managers handling multiple accounts.</p>
          </div>
        </details>
        <details class="clc-faq-item">
          <summary>Do you handle both lawn care and snow removal for commercial properties?</summary>
          <div class="clc-faq-answer">
            <p>Yes. We offer year-round commercial programs covering lawn care from April through October and snow removal through winter. Using a single vendor for both services simplifies scheduling, invoicing, and property access logistics — and means we already know your property when the first storm arrives.</p>
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
  <section class="clc-closing" data-animate="fade-up">
    <div class="container">
      <span class="section-eyebrow" style="justify-content:center;">Ready to Talk About Your Property</span>
      <h2>How Do You Get a Commercial Grounds Maintenance Quote?</h2>
      <p>One walkthrough, one proposal, one vendor for the full season. Call now or request a free estimate — R.A.H. Solutions has been serving Rock County businesses since 2023.</p>
      <div class="clc-closing-actions">
        <a href="tel:6085015123" class="clc-btn-closing-primary">
          <i data-lucide="phone" aria-hidden="true" style="width:20px;height:20px;"></i>
          (608) 501-5123
        </a>
        <a href="/contact" class="clc-btn-closing-accent">
          <i data-lucide="clipboard-list" aria-hidden="true" style="width:20px;height:20px;"></i>
          Request a Commercial Quote
        </a>
      </div>
    </div>
  </section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
