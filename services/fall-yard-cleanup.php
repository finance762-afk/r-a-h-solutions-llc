<?php
// ============================================================
// Fall Yard Cleanup — R.A.H. Solutions, LLC
// ============================================================
$pageTitle       = 'Fall Yard Cleanup | Edgerton, WI';
$pageDescription = 'Fall yard cleanup in Edgerton, WI — leaf removal, bed prep & winterization by R.A.H. Solutions. Protect your landscape before first freeze. Call (608) 501-5123.';
$canonicalUrl    = 'https://rahsolutionsllc.com/services/fall-yard-cleanup';
// SEO: {"@context":"https://schema.org"} — schema and <link rel="canonical"> rendered via head.php
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963895295-85rqf1-495734161_122236025852208320_5435639759042997660_n.jpg';
$currentPage     = 'service-fall-yard-cleanup';
$heroPreload     = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963895295-85rqf1-495734161_122236025852208320_5435639759042997660_n.jpg';

$faqs = [
  [
    '@type'          => 'Question',
    'name'           => 'When should fall cleanup happen in Wisconsin?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'October is the ideal window for fall cleanup in Edgerton and Rock County — after peak leaf drop from maples and oaks but before the ground freezes hard. A hard frost typically arrives in late October or early November in Zone 5b. Getting cleanup done in October means beds are prepped for winter mulch before freeze, perennials are cut back at the right time, and you\'re not racing the weather in November.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'Do I need to cut back all my perennials in fall?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'No — it depends on the plant. Species like hostas, daylilies, and coneflowers benefit from fall cutback in Zone 5. Others, like ornamental grasses, Russian sage, and coneflower seed heads, are better left standing through winter for wildlife and structural interest, then cut in early spring. We assess each bed and cut or leave based on what the plants actually need, not a blanket policy.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'How many leaf removal visits will I need?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'Properties with heavy oak or maple cover often need two visits — one after initial peak drop in mid-October and a second in late October or early November once stragglers come down. Single visits work fine for lighter-leaf properties. We discuss visit frequency upfront and give you options based on your specific tree canopy.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'What\'s the difference between fall cleanup and winter prep?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'Fall cleanup focuses on removing organic debris — leaves, dead annuals, cut perennials — and preparing beds for winter. Winter prep (or winterization) involves applying protective mulch to insulate crowns, wrapping tender evergreens from salt spray or wind, and doing a final mow at reduced height. We offer both as part of a complete fall program or individually.',
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
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Fall Yard Cleanup', 'item' => 'https://rahsolutionsllc.com/services/fall-yard-cleanup'],
      ],
    ],
    [
      '@type'       => 'Service',
      '@id'         => 'https://rahsolutionsllc.com/services/fall-yard-cleanup/#service',
      'name'        => 'Fall Yard Cleanup',
      'description' => 'Leaf removal, perennial cutback, bed winterization, and final mowing for residential and commercial properties in Edgerton, Stoughton, Janesville, and Madison, WI.',
      'provider'    => ['@type' => 'LocalBusiness', '@id' => 'https://rahsolutionsllc.com/#business'],
      'areaServed'  => [
        ['@type' => 'City', 'name' => 'Edgerton'],
        ['@type' => 'City', 'name' => 'Stoughton'],
        ['@type' => 'City', 'name' => 'Janesville'],
        ['@type' => 'City', 'name' => 'Madison'],
      ],
      'serviceType' => 'Fall Yard Cleanup',
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
   Fall Yard Cleanup — Page-Specific Styles (.fyc-)
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
.fyc-hero {
  position: relative;
  min-height: 60vh;
  display: flex;
  align-items: center;
  overflow: hidden;
  background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963895295-85rqf1-495734161_122236025852208320_5435639759042997660_n.jpg');
  background-size: cover;
  background-position: center;
  animation: fyc-kenburns 22s ease-in-out infinite alternate;
}
@keyframes fyc-kenburns {
  from { background-size: 110%; background-position: center 45%; }
  to   { background-size: 124%; background-position: center 60%; }
}
.fyc-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    150deg,
    rgba(var(--color-primary-rgb), 0.92) 0%,
    rgba(var(--color-primary-rgb), 0.58) 60%,
    rgba(var(--color-accent-rgb), 0.14) 100%
  );
  z-index: 1;
}
.fyc-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 2;
  pointer-events: none;
}
.fyc-hero-inner {
  position: relative;
  z-index: 3;
  padding: var(--space-4xl) 0 var(--space-3xl);
}
.fyc-eyebrow {
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
.fyc-eyebrow::before {
  content: '';
  display: block;
  width: 28px;
  height: 2px;
  background: var(--color-accent);
  flex-shrink: 0;
}
.fyc-hero h1 {
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
.fyc-hero-sub {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.82);
  max-width: 52ch;
  line-height: 1.6;
  margin-bottom: var(--space-xl);
}
.fyc-hero-ctas {
  display: flex;
  gap: var(--space-md);
  flex-wrap: wrap;
  align-items: center;
}
.fyc-btn-primary {
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
.fyc-btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-accent-dark);
}
.fyc-btn-primary:active {
  transform: translateY(2px);
  box-shadow: 0 2px 0 var(--color-accent-dark);
}
.fyc-btn-secondary {
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
.fyc-btn-secondary:hover {
  background: rgba(255,255,255,0.12);
  border-color: rgba(255,255,255,0.8);
}
.fyc-hero-trust {
  display: flex;
  align-items: center;
  gap: var(--space-lg);
  margin-top: var(--space-xl);
  flex-wrap: wrap;
}
.fyc-trust-item {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.75);
  font-weight: 600;
}
.fyc-trust-item i { color: var(--color-accent); width: 16px; height: 16px; }

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
.ticker-strip::before {
  left: 0;
  background: linear-gradient(to right, var(--color-primary), transparent);
}
.ticker-strip::after {
  right: 0;
  background: linear-gradient(to left, var(--color-primary), transparent);
}
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

/* ── Service Detail ───────────────────────────────────────── */
.fyc-detail {
  padding: var(--space-4xl) 0 var(--space-3xl);
  background: var(--color-bg);
}
.fyc-detail-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3xl);
  align-items: center;
}
.fyc-detail-content { order: 1; }
.fyc-detail-image   { order: 2; }
.fyc-detail h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-lg);
}
.fyc-detail p {
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: 65ch;
  margin-bottom: var(--space-md);
}
.fyc-detail p:last-of-type { margin-bottom: var(--space-xl); }
.fyc-updated {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  font-style: italic;
}
.fyc-image-frame {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
}
.fyc-image-frame::before {
  content: '';
  position: absolute;
  inset: 0;
  border: 3px solid rgba(var(--color-accent-rgb), 0.25);
  border-radius: var(--radius-lg);
  z-index: 2;
  pointer-events: none;
}
.fyc-image-frame picture img {
  width: 100%;
  height: 420px;
  object-fit: cover;
  display: block;
  transition: transform var(--transition-slow);
}
.fyc-image-frame:hover picture img { transform: scale(1.03); }
.fyc-image-badge {
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
.fyc-btn-detail {
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
.fyc-btn-detail:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-primary-dark);
}
.fyc-btn-detail:active {
  transform: translateY(2px);
  box-shadow: 0 2px 0 var(--color-primary-dark);
}

/* ── SIGNATURE: Stats Band ────────────────────────────────── */
.fyc-stats {
  background: var(--color-bg-dark);
  padding: var(--space-3xl) 0;
  position: relative;
  overflow: hidden;
}
.fyc-stats::before {
  content: '';
  position: absolute;
  top: -60px; left: -60px;
  width: 320px; height: 320px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.06);
  pointer-events: none;
}
.fyc-stats::after {
  content: '';
  position: absolute;
  bottom: -80px; right: -40px;
  width: 400px; height: 400px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.04);
  pointer-events: none;
}
.fyc-stats-inner { position: relative; z-index: 1; }
.fyc-stats-label {
  text-align: center;
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-2xl);
}
.fyc-stats-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-xl);
}
.fyc-stat-item {
  text-align: center;
  padding: var(--space-xl);
  border: 1px solid rgba(var(--color-accent-rgb), 0.15);
  border-radius: var(--radius-lg);
  background: rgba(255,255,255,0.03);
  transition: border-color var(--transition-base), background var(--transition-base);
}
.fyc-stat-item:hover {
  border-color: rgba(var(--color-accent-rgb), 0.35);
  background: rgba(var(--color-accent-rgb), 0.05);
}
.fyc-stat-number {
  font-family: var(--font-heading);
  font-size: clamp(2.2rem, 4vw, 3.2rem);
  font-weight: 700;
  color: var(--color-accent);
  line-height: 1;
  margin-bottom: var(--space-xs);
  letter-spacing: -0.02em;
}
.fyc-stat-label {
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.65);
  line-height: 1.4;
  max-width: 18ch;
  margin: 0 auto;
}

/* ── Mid CTA ──────────────────────────────────────────────── */
.fyc-cta-mid {
  position: relative;
  padding: var(--space-3xl) 0;
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  overflow: hidden;
}
.fyc-cta-mid::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
  z-index: 0;
}
.fyc-cta-mid .container { position: relative; z-index: 1; text-align: center; }
.fyc-cta-eyebrow {
  display: inline-block;
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.fyc-cta-mid h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 2.8rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: #ffffff;
  margin-bottom: var(--space-md);
}
.fyc-cta-mid > .container > p {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.8);
  max-width: 55ch;
  margin: 0 auto var(--space-xl);
  line-height: 1.6;
}
.fyc-cta-actions {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.fyc-btn-phone {
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
.fyc-btn-phone:hover { transform: translateY(-2px); box-shadow: var(--shadow-xl); }
.fyc-btn-cta {
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
.fyc-btn-cta:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-accent-dark); }
.fyc-btn-cta:active { transform: translateY(2px); box-shadow: 0 2px 0 var(--color-accent-dark); }

/* ── Why Choose ───────────────────────────────────────────── */
.fyc-why {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.fyc-why-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.fyc-why h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.fyc-why .sub {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto;
}
.fyc-why-cards {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
}
.fyc-why-card {
  background: var(--color-bg);
  border-radius: var(--radius-lg);
  padding: var(--space-xl) var(--space-lg);
  box-shadow: var(--shadow-card);
  transition: transform var(--transition-base), box-shadow var(--transition-base), background var(--transition-base);
  position: relative;
  overflow: hidden;
}
.fyc-why-card::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 3px;
  background: var(--color-accent);
  transform: scaleX(0);
  transform-origin: left;
  transition: transform var(--transition-base);
}
.fyc-why-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-xl);
  background: var(--color-primary);
}
.fyc-why-card:hover::before { transform: scaleX(1); }
.fyc-why-card:hover .fyc-why-title,
.fyc-why-card:hover .fyc-why-text { color: rgba(255,255,255,0.9); }
.fyc-why-card:hover .fyc-why-icon {
  background: rgba(var(--color-accent-rgb), 0.2);
  color: var(--color-accent);
}
.fyc-why-icon {
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
.fyc-why-title {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  font-weight: 600;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
  transition: color var(--transition-base);
}
.fyc-why-text {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  transition: color var(--transition-base);
}

/* ── Process Section ──────────────────────────────────────── */
.fyc-process {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
}
.fyc-process-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.fyc-process h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.fyc-process .sub {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto;
}
.fyc-steps {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
  position: relative;
}
.fyc-steps::before {
  content: '';
  position: absolute;
  top: 32px;
  left: calc(12.5% + 26px);
  right: calc(12.5% + 26px);
  height: 2px;
  background: linear-gradient(to right, var(--color-accent), rgba(var(--color-accent-rgb), 0.2));
  pointer-events: none;
}
.fyc-step { text-align: center; padding: var(--space-lg); }
.fyc-step-num {
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
.fyc-step:hover .fyc-step-num {
  background: var(--color-accent);
  border-color: var(--color-accent);
  color: var(--color-bg-dark);
}
.fyc-step-title {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 600;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.fyc-step-desc {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  max-width: 22ch;
  margin: 0 auto;
}

/* ── FAQ Section ──────────────────────────────────────────── */
.fyc-faq {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.fyc-faq-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.fyc-faq h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.fyc-faq .sub {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto;
}
.fyc-faq-list {
  max-width: 800px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}
.fyc-faq-item {
  background: var(--color-bg);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-sm);
  border: 1px solid rgba(var(--color-primary-rgb), 0.08);
  overflow: hidden;
}
.fyc-faq-item summary {
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
.fyc-faq-item summary::-webkit-details-marker { display: none; }
.fyc-faq-item summary::after {
  content: '+';
  font-size: 1.4rem;
  color: var(--color-accent);
  flex-shrink: 0;
  transition: transform var(--transition-base);
}
.fyc-faq-item[open] summary::after { transform: rotate(45deg); }
.fyc-faq-item[open] summary { color: var(--color-accent); }
.fyc-faq-answer {
  padding: 0 var(--space-xl) var(--space-lg);
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: 65ch;
}

/* ── Closing CTA ──────────────────────────────────────────── */
.fyc-closing {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
  text-align: center;
}
.fyc-closing h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-md);
}
.fyc-closing p {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto var(--space-xl);
  line-height: 1.6;
}
.fyc-closing-actions {
  display: flex;
  justify-content: center;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.fyc-btn-closing-accent {
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
.fyc-btn-closing-accent:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-accent-dark); }
.fyc-btn-closing-primary {
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
.fyc-btn-closing-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-primary-dark); }

/* ── Responsive ───────────────────────────────────────────── */
@media (max-width: 1023px) {
  .fyc-stats-grid  { grid-template-columns: repeat(2, 1fr); }
  .fyc-why-cards   { grid-template-columns: repeat(2, 1fr); }
  .fyc-steps       { grid-template-columns: repeat(2, 1fr); }
  .fyc-steps::before { display: none; }
}
@media (max-width: 767px) {
  .fyc-detail-grid       { grid-template-columns: 1fr; }
  .fyc-detail-image      { order: -1; }
  .fyc-image-frame picture img { height: 280px; }
  .fyc-stats-grid        { grid-template-columns: repeat(2, 1fr); gap: var(--space-md); }
  .fyc-why-cards         { grid-template-columns: 1fr; }
  .fyc-steps             { grid-template-columns: 1fr; }
  .fyc-hero-ctas         { flex-direction: column; align-items: flex-start; }
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
        <li class="current" aria-current="page">Fall Yard Cleanup</li>
      </ol>
    </div>
  </nav>

  <!-- ── Inner Hero ─────────────────────────────────────────── -->
  <section class="fyc-hero" aria-label="Fall Yard Cleanup Services">
    <div class="container fyc-hero-inner">
      <span class="fyc-eyebrow">
        <i data-lucide="wind" aria-hidden="true" style="width:14px;height:14px;"></i>
        Leaf Removal &amp; Winter Prep
      </span>
      <h1>Fall Yard Cleanup &amp; Leaf Removal in Edgerton, WI</h1>
      <p class="fyc-hero-sub">Starting at $200 — leaf removal, perennial cutback, and bed winterization timed before first freeze so your landscape goes dormant healthy and comes up strong in spring.</p>
      <div class="fyc-hero-ctas">
        <a href="tel:6085015123" class="fyc-btn-primary">
          <i data-lucide="phone" aria-hidden="true" style="width:18px;height:18px;"></i>
          Call (608) 501-5123
        </a>
        <a href="/contact" class="fyc-btn-secondary">Get a Free Estimate</a>
      </div>
      <div class="fyc-hero-trust">
        <span class="fyc-trust-item">
          <i data-lucide="shield-check" aria-hidden="true"></i> Licensed &amp; Insured
        </span>
        <span class="fyc-trust-item">
          <i data-lucide="star" aria-hidden="true"></i> 4.9-Star Rated
        </span>
        <span class="fyc-trust-item">
          <i data-lucide="calendar-check" aria-hidden="true"></i> October–November Scheduling
        </span>
      </div>
    </div>
  </section>

  <!-- ── Proof Ticker Strip ─────────────────────────────────── -->
  <div class="ticker-strip" aria-hidden="true">
    <div class="ticker-track">
      <span class="ticker-item">Leaf Removal<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Perennial Cutback<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Bed Winterization<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">October Scheduling<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Prevents Snow Mold<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Edgerton · Stoughton · Janesville<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Free Estimates<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">4.9★ Rated<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Leaf Removal<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Perennial Cutback<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Bed Winterization<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">October Scheduling<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Prevents Snow Mold<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Edgerton · Stoughton · Janesville<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Free Estimates<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">4.9★ Rated<span class="ticker-sep">✦</span></span>
    </div>
  </div>

  <!-- ── Divider ────────────────────────────────────────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,40 1200,40 0,40" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ── Service Detail ─────────────────────────────────────── -->
  <section class="fyc-detail" data-animate="fade-up">
    <div class="container">
      <div class="fyc-detail-grid">

        <div class="fyc-detail-content">
          <span class="section-eyebrow">What's Covered</span>
          <h2>Why Wet Leaves Left on Wisconsin Grass Over Winter Can Cost You in Spring</h2>

          <p>Fall cleanup in Edgerton starts at $200 for small residential yards and covers full leaf removal, dead annual removal, perennial cutback (species-dependent), bed preparation for winter mulch, and a final mowing at reduced height. Properties with heavy oak or maple canopy often need two visits — one after peak drop in mid-October and a second in late October to catch stragglers before the ground freezes.</p>

          <p>In Zone 5b Wisconsin, wet leaves matting down on cool-season grasses through winter is the primary cause of snow mold — a fungal problem that kills turf in circular patches that don't recover until June. Rock County averages a first hard frost in late October to early November. Getting cleanup done in October keeps mold from establishing under the leaf layer before temperatures drop.</p>

          <p>Perennial cutback isn't one-size-fits-all. Hostas, daylilies, and coneflowers benefit from fall cutting. Ornamental grasses, Russian sage, and seed heads from coneflowers winter better left standing — they provide bird habitat and structural interest, and cut better in early March than in November. We assess each bed and cut or leave based on what the plants actually need.</p>

          <p>Fall cleanup also sets up spring. Properties that go into winter with beds cleared, soil tilled of debris, and a final mow done at 2.5–3 inches need significantly less spring prep — an earlier first mow, a shorter cleanup visit, and better overwintering success on perennials that weren't buried in mat. If you run a spring cleanup program with us, the fall visit connects directly into that schedule.</p>

          <p class="fyc-updated">Last Updated: April 2026 · Serving Edgerton, WI and surrounding Rock &amp; Dane County communities.</p>

          <a href="/contact" class="fyc-btn-detail">
            <i data-lucide="calendar-check" aria-hidden="true" style="width:18px;height:18px;"></i>
            Schedule Fall Cleanup
          </a>
        </div>

        <div class="fyc-detail-image">
          <div class="fyc-image-frame">
            <picture>
              <source srcset="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963895295-85rqf1-495734161_122236025852208320_5435639759042997660_n.jpg" type="image/webp">
              <img
                src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963895295-85rqf1-495734161_122236025852208320_5435639759042997660_n.jpg"
                alt="Fall yard cleanup leaf removal winterization Edgerton Wisconsin"
                width="600"
                height="420"
                loading="lazy"
              >
            </picture>
            <span class="fyc-image-badge">Edgerton, WI</span>
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
  <section class="fyc-stats" aria-label="Fall cleanup service statistics">
    <div class="container fyc-stats-inner">
      <p class="fyc-stats-label">Fall Cleanup — By the Numbers</p>
      <div class="fyc-stats-grid">
        <div class="fyc-stat-item" data-animate="fade-up">
          <div class="fyc-stat-number">$200<span style="font-size:1.5rem;">+</span></div>
          <div class="fyc-stat-label">Starting price for small residential yards</div>
        </div>
        <div class="fyc-stat-item" data-animate="fade-up">
          <div class="fyc-stat-number">Oct–Nov</div>
          <div class="fyc-stat-label">Ideal window before first hard frost</div>
        </div>
        <div class="fyc-stat-item" data-animate="fade-up">
          <div class="fyc-stat-number">2 visits</div>
          <div class="fyc-stat-label">Available for heavy-leaf properties with oaks or maples</div>
        </div>
        <div class="fyc-stat-item" data-animate="fade-up">
          <div class="fyc-stat-number">4.9★</div>
          <div class="fyc-stat-label">Average customer rating across 47 reviews</div>
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
  <section class="fyc-cta-mid" aria-label="Schedule fall cleanup">
    <div class="container">
      <p class="fyc-cta-eyebrow">October Fills Up Fast — Book Before Leaves Peak</p>
      <h2>How Do You Get Your Lawn Into Winter Without the Mold Risk?</h2>
      <p>Matted leaves on Wisconsin turf over winter means snow mold in spring. Schedule your fall cleanup before October slots close — R.A.H. Solutions serves Edgerton, Stoughton, Madison &amp; Janesville.</p>
      <div class="fyc-cta-actions">
        <a href="tel:6085015123" class="fyc-btn-phone">
          <i data-lucide="phone" aria-hidden="true" style="width:20px;height:20px;"></i>
          (608) 501-5123
        </a>
        <a href="/contact" class="fyc-btn-cta">Get a Free Estimate</a>
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
  <section class="fyc-why" data-animate="fade-up">
    <div class="container">
      <div class="fyc-why-header">
        <span class="section-eyebrow">Why R.A.H. Solutions</span>
        <h2>How Does Fall Cleanup Protect What You've Invested In?</h2>
        <p class="sub">Good fall prep isn't just cosmetic — it directly affects how your lawn and beds perform next spring. Here's how we do it differently.</p>
      </div>
      <div class="fyc-why-cards">
        <div class="fyc-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="fyc-why-icon">
            <i data-lucide="snowflake" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="fyc-why-title">Prevents Snow Mold Under Matted Leaves</h3>
          <p class="fyc-why-text">Wet leaves trapped under snow create the humid, dark conditions that snow mold needs to take hold. Removing them before freeze protects your turf through winter.</p>
        </div>
        <div class="fyc-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="fyc-why-icon">
            <i data-lucide="scissors" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="fyc-why-title">Perennial Cutback at the Right Time</h3>
          <p class="fyc-why-text">We cut what should be cut and leave what overwinters better standing. No blanket cutback policy that damages your plantings for the sake of a clean look.</p>
        </div>
        <div class="fyc-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="fyc-why-icon">
            <i data-lucide="repeat" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="fyc-why-title">Multiple Visits for Heavy-Leaf Properties</h3>
          <p class="fyc-why-text">Oaks drop late. One visit often isn't enough. We offer two-visit fall programs for properties with significant canopy cover so nothing gets missed before freeze.</p>
        </div>
        <div class="fyc-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="fyc-why-icon">
            <i data-lucide="link" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="fyc-why-title">Connects to Spring Cleanup Program</h3>
          <p class="fyc-why-text">Clients on our fall program get shorter spring cleanup visits and earlier scheduling priority — the seasons connect into a seamless property care plan.</p>
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
  <section class="fyc-process" data-animate="fade-up">
    <div class="container">
      <div class="fyc-process-header">
        <span class="section-eyebrow">How It Works</span>
        <h2>What Are the 4 Steps for Fall Cleanup Start to Finish?</h2>
        <p class="sub">From your first call to a fully winterized property, here's how R.A.H. Solutions handles fall cleanup in Rock County.</p>
      </div>
      <div class="fyc-steps">
        <div class="fyc-step">
          <div class="fyc-step-num">1</div>
          <h3 class="fyc-step-title">Fall Assessment &amp; Schedule</h3>
          <p class="fyc-step-desc">We review your property, tree canopy, and bed inventory to recommend one or two visits and confirm your October date.</p>
        </div>
        <div class="fyc-step">
          <div class="fyc-step-num">2</div>
          <h3 class="fyc-step-title">Leaf Removal Pass(es)</h3>
          <p class="fyc-step-desc">Full removal of all fallen leaves, blown from beds and turf, bagged and hauled away or mulch-mowed depending on volume.</p>
        </div>
        <div class="fyc-step">
          <div class="fyc-step-num">3</div>
          <h3 class="fyc-step-title">Bed Cutback &amp; Winterization</h3>
          <p class="fyc-step-desc">Species-appropriate perennial cutback, dead annual removal, and bed prep for optional winter mulch application.</p>
        </div>
        <div class="fyc-step">
          <div class="fyc-step-num">4</div>
          <h3 class="fyc-step-title">Final Cleanup &amp; Inspection</h3>
          <p class="fyc-step-desc">Final mow at reduced height, edges blown clean, and a walkthrough to confirm everything is ready for first freeze.</p>
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
  <section class="fyc-faq" data-animate="fade-up">
    <div class="container">
      <div class="fyc-faq-header">
        <span class="section-eyebrow">Common Questions</span>
        <h2>What Are Your Fall Cleanup Questions?</h2>
        <p class="sub">Timing, perennial cutback, and what the fall visit actually covers — direct answers for Edgerton homeowners.</p>
      </div>
      <div class="fyc-faq-list">
        <details class="fyc-faq-item">
          <summary>When should fall cleanup happen in Wisconsin?</summary>
          <div class="fyc-faq-answer">
            <p>October is the ideal window for fall cleanup in Edgerton and Rock County — after peak leaf drop from maples and oaks but before the ground freezes hard. Hard frost typically arrives in late October or early November in Zone 5b. Getting cleanup done in October means beds are prepped for winter mulch before freeze and perennials are cut at the right time.</p>
          </div>
        </details>
        <details class="fyc-faq-item">
          <summary>Do I need to cut back all my perennials in fall?</summary>
          <div class="fyc-faq-answer">
            <p>No — it depends on the plant. Hostas, daylilies, and coneflowers benefit from fall cutback. Ornamental grasses, Russian sage, and coneflower seed heads are better left standing through winter and cut in early spring. We assess each bed and cut or leave based on what each species actually needs, not a blanket policy.</p>
          </div>
        </details>
        <details class="fyc-faq-item">
          <summary>How many leaf removal visits will I need?</summary>
          <div class="fyc-faq-answer">
            <p>Properties with heavy oak or maple cover often need two visits — one after initial peak drop in mid-October and a second in late October or early November to catch stragglers. Single visits work fine for lighter-leaf properties. We discuss visit frequency upfront based on your specific tree canopy and give you options.</p>
          </div>
        </details>
        <details class="fyc-faq-item">
          <summary>What's the difference between fall cleanup and winter prep?</summary>
          <div class="fyc-faq-answer">
            <p>Fall cleanup focuses on removing organic debris — leaves, dead annuals, cut perennials — and preparing beds for winter. Winter prep involves applying protective mulch over crowns, wrapping tender evergreens from salt spray or wind, and a final mow at reduced height. We offer both individually or as a combined fall program.</p>
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
  <section class="fyc-closing" data-animate="fade-up">
    <div class="container">
      <span class="section-eyebrow" style="justify-content:center;">Before First Freeze</span>
      <h2>How Do You Protect Your Lawn Before Wisconsin Winter Sets In?</h2>
      <p>October spots fill quickly across Rock County. Call now or get a free estimate online — R.A.H. Solutions has been handling Edgerton fall cleanups since 2023.</p>
      <div class="fyc-closing-actions">
        <a href="tel:6085015123" class="fyc-btn-closing-primary">
          <i data-lucide="phone" aria-hidden="true" style="width:20px;height:20px;"></i>
          (608) 501-5123
        </a>
        <a href="/contact" class="fyc-btn-closing-accent">
          <i data-lucide="calendar-check" aria-hidden="true" style="width:20px;height:20px;"></i>
          Get a Free Estimate
        </a>
      </div>
    </div>
  </section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
