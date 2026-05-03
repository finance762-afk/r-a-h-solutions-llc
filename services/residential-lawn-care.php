<?php
// ============================================================
// R.A.H. Solutions, LLC — Residential Lawn Care
// ============================================================

$pageTitle       = 'Residential Lawn Care | Edgerton, WI';
$pageDescription = 'Residential lawn care in Edgerton, WI — mowing, edging, trimming & seasonal care. Same crew every visit. Customizable programs. Call (608) 501-5123.';
$canonicalUrl    = 'https://rahsolutionsllc.com/services/residential-lawn-care';
// SEO: {"@context":"https://schema.org"} — schema and <link rel="canonical"> rendered via head.php
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963892391-3enmm5-486843500_122226629396208320_6857620022192748149_n.jpg';
$currentPage     = 'services';
$heroPreload     = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963892391-3enmm5-486843500_122226629396208320_6857620022192748149_n.jpg';

$pageServiceName = 'Residential Lawn Care';
$pageServiceSlug = 'residential-lawn-care';

// ── Page-Specific Schema ───────────────────────────────────────
$faqs = [
  ['q' => 'How much does residential lawn care cost per visit in Edgerton?', 'a' => 'Residential lawn care visits in Edgerton typically run $40–$80 per visit depending on lot size, terrain complexity, and services included. Most standard residential lots fall in the $50–$65 range. We provide exact per-visit pricing after a free yard walkthrough — no obligation.'],
  ['q' => 'Do you mow in the rain?', 'a' => 'We avoid mowing wet grass whenever possible because it leads to clumping, uneven cuts, and compaction. If rain falls during a scheduled visit, we reschedule within 1–2 business days at no additional charge. We communicate changes proactively rather than leaving you guessing.'],
  ['q' => 'Can I skip service for a week?', 'a' => 'Yes. We understand family schedules change. With reasonable advance notice (48 hours), you can pause or skip a visit without penalty. Customers on monthly billing are adjusted accordingly. We don\'t lock you into rigid schedules that don\'t work for your life.'],
  ['q' => 'Do you service backyards with fences or gates?', 'a' => 'Absolutely. We handle fenced yards routinely. You\'ll need to ensure gate access on service days, and we\'ll note your property\'s specifics during the initial walkthrough. For yards with narrow gate access, we use walk-behind equipment that fits standard gate widths.'],
];

$faqItems = [];
foreach ($faqs as $faq) {
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
      '@type'       => 'Service',
      'name'        => 'Residential Lawn Care',
      'serviceType' => 'Residential Lawn Care and Maintenance',
      'provider'    => ['@type' => 'LocalBusiness', 'name' => 'R.A.H. Solutions, LLC', '@id' => 'https://rahsolutionsllc.com/#business'],
      'areaServed'  => ['@type' => 'City', 'name' => 'Edgerton', 'containedInPlace' => ['@type' => 'State', 'name' => 'Wisconsin']],
      'description' => 'Residential lawn care programs in Edgerton, WI including mowing, edging, trimming, and seasonal adjustments for homeowners in Rock and Dane Counties.',
      'url'         => 'https://rahsolutionsllc.com/services/residential-lawn-care',
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
    [
      '@type'           => 'BreadcrumbList',
      'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => 'https://rahsolutionsllc.com'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => 'https://rahsolutionsllc.com/services'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Residential Lawn Care', 'item' => 'https://rahsolutionsllc.com/services/residential-lawn-care'],
      ],
    ],
    [
      '@type' => 'HowTo',
      'name'  => 'How R.A.H. Solutions Sets Up Residential Lawn Care',
      'step'  => [
        ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Free Yard Walkthrough & Quote', 'text' => 'We walk your property, measure, assess terrain and turf conditions, and provide a written per-visit price. No obligation.'],
        ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Schedule Setup', 'text' => 'We set your preferred service day and frequency. You\'re assigned a consistent crew — not whoever\'s available that week.'],
        ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Regular Service Visits', 'text' => 'Your crew arrives on schedule, mows, edges, trims, and blows clean every visit. You\'ll receive communication if anything changes.'],
        ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Seasonal Check-Ins & Adjustments', 'text' => 'We review your program at the start and end of each season, adjust mowing height for Wisconsin\'s climate, and recommend add-on services as needed.'],
      ],
    ],
  ],
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<style>
/* ============================================================
   Residential Lawn Care — Page-Specific Styles
   Standard Tier: 200+ lines, 4+ techniques
   ============================================================ */

/* ── Hero ─────────────────────────────────────────────────── */
.res-lawn-hero {
  position: relative;
  min-height: 88vh;
  display: flex;
  align-items: center;
  background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963892391-3enmm5-486843500_122226629396208320_6857620022192748149_n.jpg');
  background-size: cover;
  background-position: center 55%;
  overflow: hidden;
}

.res-lawn-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    150deg,
    rgba(var(--color-primary-rgb), 0.92) 0%,
    rgba(var(--color-primary-rgb), 0.60) 50%,
    rgba(0,0,0,0.15) 100%
  );
  z-index: 1;
}

.res-lawn-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 2;
  pointer-events: none;
}

.res-lawn-hero__inner {
  position: relative;
  z-index: 3;
  width: 100%;
  max-width: var(--max-width);
  margin-inline: auto;
  padding: var(--space-4xl) var(--space-lg);
  padding-top: calc(var(--navbar-height) + var(--space-4xl));
}

.res-lawn-hero__eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: rgba(var(--color-accent-rgb), 0.18);
  border: 1px solid rgba(var(--color-accent-rgb), 0.35);
  color: var(--color-accent);
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  padding: var(--space-xs) var(--space-md);
  border-radius: var(--radius-xl);
  margin-bottom: var(--space-lg);
  animation: rlcFade 0.6s ease both;
}

.res-lawn-hero__title {
  font-family: var(--font-heading);
  font-size: clamp(2.4rem, 5.5vw, 4.2rem);
  font-weight: 700;
  line-height: 1.1;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: #fff;
  max-width: 800px;
  margin-bottom: var(--space-lg);
  animation: rlcFade 0.7s 0.1s ease both;
}

.res-lawn-hero__title em {
  font-style: normal;
  color: var(--color-accent);
}

.res-lawn-hero__sub {
  color: rgba(255,255,255,0.85);
  font-size: var(--font-size-lg);
  max-width: 52ch;
  line-height: 1.65;
  margin-bottom: var(--space-2xl);
  animation: rlcFade 0.7s 0.2s ease both;
}

.res-lawn-hero__ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-md);
  animation: rlcFade 0.7s 0.3s ease both;
}

.res-lawn-hero__phone {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  color: rgba(255,255,255,0.92);
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  font-weight: 600;
  letter-spacing: 0.02em;
  border: 2px solid rgba(255,255,255,0.30);
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-md);
  transition: all var(--transition-base);
}

.res-lawn-hero__phone:hover {
  background: rgba(255,255,255,0.12);
  border-color: rgba(255,255,255,0.55);
  transform: translateY(-2px);
}

.hero-badges {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-lg);
  margin-top: var(--space-2xl);
  padding-top: var(--space-xl);
  border-top: 1px solid rgba(255,255,255,0.15);
  animation: rlcFade 0.7s 0.4s ease both;
}

.hero-badge-item {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  color: rgba(255,255,255,0.82);
  font-size: var(--font-size-sm);
  font-weight: 600;
  letter-spacing: 0.04em;
}

@keyframes rlcFade {
  from { opacity: 0; transform: translateY(22px); }
  to   { opacity: 1; transform: translateY(0); }
}

/* ── Breadcrumb ───────────────────────────────────────────── */
.breadcrumb-strip {
  background: var(--color-bg-alt);
  border-bottom: 1px solid var(--color-light);
  padding: var(--space-sm) 0;
}

.breadcrumb-nav {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  flex-wrap: wrap;
}

.breadcrumb-nav a { color: var(--color-accent); transition: color var(--transition-fast); }
.breadcrumb-nav a:hover { color: var(--color-primary); }
.breadcrumb-nav .sep { opacity: 0.5; }

/* ── Shared Utilities ─────────────────────────────────────── */
.section-eyebrow {
  display: inline-block;
  font-family: var(--font-body);
  font-size: var(--font-size-xs);
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-md);
}

.section-title {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  letter-spacing: -0.02em;
  line-height: 1.2;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-lg);
}

.prose {
  max-width: 65ch;
  color: var(--color-text-light);
  font-size: var(--font-size-base);
  line-height: 1.7;
  margin-bottom: var(--space-lg);
}

/* ── Answer Block / Intro ─────────────────────────────────── */
.intro-section {
  padding: var(--space-4xl) var(--space-lg);
  background: var(--color-bg);
}

.intro-section .container {
  max-width: var(--max-width);
  margin-inline: auto;
}

.price-tag {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: rgba(var(--color-accent-rgb), 0.08);
  border-left: 4px solid var(--color-accent);
  padding: var(--space-md) var(--space-lg);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  margin: var(--space-md) 0;
}

.price-tag strong {
  color: var(--color-primary);
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
}

/* ── Signature: Before / After Split ─────────────────────── */
.before-after {
  padding: var(--space-4xl) var(--space-lg);
  background: var(--color-bg-alt);
}

.before-after .container {
  max-width: var(--max-width);
  margin-inline: auto;
}

.ba-split {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-xl);
  margin-top: var(--space-2xl);
}

.ba-panel {
  border-radius: var(--radius-lg);
  overflow: hidden;
  position: relative;
  box-shadow: var(--shadow-lg);
}

.ba-panel__label {
  position: absolute;
  top: var(--space-md);
  left: var(--space-md);
  z-index: 2;
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  padding: var(--space-xs) var(--space-md);
  border-radius: var(--radius-sm);
}

.ba-panel--before .ba-panel__label {
  background: rgba(0,0,0,0.65);
  color: rgba(255,255,255,0.85);
}

.ba-panel--after .ba-panel__label {
  background: var(--color-accent);
  color: #fff;
}

.ba-panel__img {
  width: 100%;
  height: 320px;
  object-fit: cover;
  display: block;
}

.ba-panel__content {
  background: var(--color-bg);
  padding: var(--space-xl);
}

.ba-panel__title {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  font-weight: 600;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
  text-wrap: balance;
}

.ba-panel__desc {
  color: var(--color-text-light);
  font-size: var(--font-size-base);
  line-height: 1.65;
  max-width: 40ch;
}

/* ── Program Details ──────────────────────────────────────── */
.program-section {
  padding: var(--space-4xl) var(--space-lg);
  background: var(--color-bg);
}

.program-section .container {
  max-width: var(--max-width);
  margin-inline: auto;
}

.program-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3xl);
  align-items: center;
  margin-top: var(--space-2xl);
}

.program-img-wrap {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
}

.program-img-wrap::after {
  content: '';
  position: absolute;
  inset: -1px;
  border-radius: inherit;
  border: 2px solid var(--color-accent);
  opacity: 0.25;
  pointer-events: none;
}

.program-img-wrap img {
  width: 100%;
  height: 400px;
  object-fit: cover;
  display: block;
  transition: transform var(--transition-slow);
}

.program-img-wrap:hover img { transform: scale(1.03); }

.program-list {
  list-style: none;
  padding: 0;
  margin: var(--space-lg) 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-sm);
}

.program-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-md);
  color: var(--color-text);
  font-size: var(--font-size-base);
  line-height: 1.5;
  padding: var(--space-sm) 0;
  border-bottom: 1px solid var(--color-light);
}

.program-list li:last-child { border-bottom: none; }

.program-list li .li-icon {
  flex-shrink: 0;
  width: 20px;
  height: 20px;
  color: var(--color-accent);
  margin-top: 2px;
}

/* ── Why Choose — 4 Differentiators ──────────────────────── */
.why-section {
  padding: var(--space-4xl) var(--space-lg);
  background: var(--color-bg-dark);
  position: relative;
  overflow: hidden;
}

.why-section::before {
  content: '';
  position: absolute;
  bottom: -30%;
  left: -10%;
  width: 500px;
  height: 500px;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.07) 0%, transparent 70%);
  pointer-events: none;
}

.why-section::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
}

.why-section .container {
  max-width: var(--max-width);
  margin-inline: auto;
  position: relative;
  z-index: 1;
}

.why-section .section-eyebrow { color: var(--color-accent); }
.why-section .section-title   { color: #fff; }

.why-cards {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-xl);
  margin-top: var(--space-2xl);
}

.why-card {
  background: rgba(255,255,255,0.06);
  border: 1px solid rgba(255,255,255,0.09);
  border-radius: var(--radius-lg);
  padding: var(--space-xl);
  transition: all var(--transition-base);
}

.why-card:hover {
  background: rgba(255,255,255,0.10);
  transform: translateY(-4px);
  box-shadow: var(--shadow-lg);
}

.why-card__icon {
  width: 48px;
  height: 48px;
  background: rgba(var(--color-accent-rgb), 0.15);
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
  margin-bottom: var(--space-md);
}

.why-card__title {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 600;
  color: #fff;
  margin-bottom: var(--space-sm);
  text-wrap: balance;
}

.why-card__desc {
  color: rgba(255,255,255,0.65);
  font-size: var(--font-size-sm);
  line-height: 1.65;
  max-width: 38ch;
}

/* ── Process Steps ────────────────────────────────────────── */
.process-section {
  padding: var(--space-4xl) var(--space-lg);
  background: var(--color-bg);
}

.process-section .container {
  max-width: var(--max-width);
  margin-inline: auto;
}

.process-steps {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-xl);
  margin-top: var(--space-2xl);
  position: relative;
}

.process-steps::before {
  content: '';
  position: absolute;
  top: 30px;
  left: 12%;
  right: 12%;
  height: 2px;
  background: linear-gradient(90deg, var(--color-accent), rgba(var(--color-accent-rgb), 0.15));
  z-index: 0;
}

.process-step {
  position: relative;
  z-index: 1;
  text-align: center;
}

.process-step__num {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background: var(--color-primary);
  color: #fff;
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  font-weight: 700;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto var(--space-md);
  border: 3px solid var(--color-bg);
  box-shadow: var(--shadow-md);
  transition: all var(--transition-base);
}

.process-step:hover .process-step__num { background: var(--color-accent); transform: scale(1.1); }

.process-step__title {
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  font-weight: 600;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
  text-wrap: balance;
}

.process-step__desc {
  color: var(--color-text-light);
  font-size: var(--font-size-sm);
  line-height: 1.65;
  max-width: 26ch;
  margin-inline: auto;
}

/* ── CTA Banner ───────────────────────────────────────────── */
.cta-banner {
  padding: var(--space-3xl) var(--space-lg);
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  position: relative;
  overflow: hidden;
}

.cta-banner::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
}

.cta-banner .container {
  max-width: var(--max-width);
  margin-inline: auto;
  position: relative;
  z-index: 1;
  text-align: center;
}

.cta-banner__title {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.8rem);
  font-weight: 700;
  color: #fff;
  margin-bottom: var(--space-md);
  text-wrap: balance;
}

.cta-banner__sub {
  color: rgba(255,255,255,0.80);
  max-width: 55ch;
  margin-inline: auto;
  margin-bottom: var(--space-xl);
  line-height: 1.65;
}

.cta-banner__phone {
  display: block;
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 2.8rem);
  font-weight: 700;
  color: var(--color-accent);
  letter-spacing: 0.02em;
  margin-bottom: var(--space-xl);
  transition: color var(--transition-fast);
}

.cta-banner__phone:hover { color: #fff; }

.cta-banner__btns {
  display: flex;
  gap: var(--space-md);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── FAQ ──────────────────────────────────────────────────── */
.faq-section {
  padding: var(--space-4xl) var(--space-lg);
  background: var(--color-bg-alt);
}

.faq-section .container {
  max-width: var(--max-width);
  margin-inline: auto;
}

.faq-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-xl);
  margin-top: var(--space-2xl);
}

.faq-item {
  background: var(--color-bg);
  border-radius: var(--radius-lg);
  border: 1px solid var(--color-light);
  padding: var(--space-xl);
  box-shadow: var(--shadow-sm);
  transition: box-shadow var(--transition-base);
}

.faq-item:hover { box-shadow: var(--shadow-md); }

.faq-item__q {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 600;
  color: var(--color-primary);
  margin-bottom: var(--space-md);
  text-wrap: balance;
}

.faq-item__a {
  color: var(--color-text-light);
  font-size: var(--font-size-base);
  line-height: 1.7;
  max-width: 60ch;
}

/* ── Closing CTA ──────────────────────────────────────────── */
.closing-cta {
  padding: var(--space-4xl) var(--space-lg);
  background: var(--color-bg);
  text-align: center;
}

.closing-cta .container {
  max-width: var(--max-width);
  margin-inline: auto;
}

.closing-cta__title {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  color: var(--color-primary);
  margin-bottom: var(--space-md);
  text-wrap: balance;
}

.closing-cta__sub {
  color: var(--color-text-light);
  max-width: 55ch;
  margin-inline: auto;
  margin-bottom: var(--space-2xl);
  line-height: 1.65;
}

.closing-cta__btns {
  display: flex;
  gap: var(--space-md);
  justify-content: center;
  flex-wrap: wrap;
}

/* ── Buttons ──────────────────────────────────────────────── */
.btn-primary {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-accent);
  color: #fff;
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  font-weight: 600;
  letter-spacing: 0.04em;
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-md);
  border: none;
  cursor: pointer;
  box-shadow: 0 4px 0 var(--color-accent-dark);
  transition: all var(--transition-base);
  overflow: hidden;
  position: relative;
}

.btn-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-accent-dark); }
.btn-primary:active { transform: translateY(2px); box-shadow: 0 2px 0 var(--color-accent-dark); }

.btn-secondary {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: transparent;
  color: var(--color-accent);
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  font-weight: 600;
  letter-spacing: 0.04em;
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-md);
  border: 2px solid var(--color-accent);
  cursor: pointer;
  transition: all var(--transition-base);
}

.btn-secondary:hover { background: var(--color-accent); color: #fff; transform: translateY(-2px); }

.last-updated {
  font-size: var(--font-size-xs);
  color: var(--color-text-light);
  margin-top: var(--space-lg);
  opacity: 0.75;
}

/* ── Responsive ───────────────────────────────────────────── */
@media (max-width: 1023px) {
  .ba-split        { grid-template-columns: 1fr; }
  .program-grid    { grid-template-columns: 1fr; gap: var(--space-2xl); }
  .why-cards       { grid-template-columns: 1fr; }
  .process-steps   { grid-template-columns: repeat(2, 1fr); }
  .process-steps::before { display: none; }
  .faq-grid        { grid-template-columns: 1fr; }
}

@media (max-width: 767px) {
  .res-lawn-hero     { min-height: 70vh; }
  .res-lawn-hero__inner { padding-top: calc(var(--navbar-height) + var(--space-2xl)); }
  .res-lawn-hero__ctas { flex-direction: column; }
  .hero-badges       { gap: var(--space-md); }
  .process-steps     { grid-template-columns: 1fr; }
  .cta-banner__btns  { flex-direction: column; align-items: center; }
  .closing-cta__btns { flex-direction: column; align-items: center; }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ── Breadcrumb ──────────────────────────────────────────── -->
<nav class="breadcrumb-strip" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb-nav" itemscope itemtype="https://schema.org/BreadcrumbList">
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="/" itemprop="item"><span itemprop="name">Home</span></a>
        <meta itemprop="position" content="1">
      </li>
      <li class="sep" aria-hidden="true">/</li>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="/services" itemprop="item"><span itemprop="name">Services</span></a>
        <meta itemprop="position" content="2">
      </li>
      <li class="sep" aria-hidden="true">/</li>
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <span itemprop="name">Residential Lawn Care</span>
        <meta itemprop="position" content="3">
      </li>
    </ol>
  </div>
</nav>

<!-- ── Hero (CTA #1) ───────────────────────────────────────── -->
<section class="res-lawn-hero" aria-label="Residential Lawn Care hero">
  <div class="res-lawn-hero__inner">
    <p class="res-lawn-hero__eyebrow">
      <i data-lucide="home" style="width:14px;height:14px;" aria-hidden="true"></i>
      Residential Lawn Care — Edgerton, WI
    </p>
    <h1 class="res-lawn-hero__title">
      Residential Lawn Care in Edgerton, WI —<br>
      <em>Programs Built for Homeowners</em>
    </h1>
    <p class="res-lawn-hero__sub">
      Consistent mowing, clean edges, properly timed seasonal care — built around your yard and your schedule. Same crew every visit. No guessing who's showing up. Programs from $40–$80/visit based on lot size.
    </p>
    <div class="res-lawn-hero__ctas">
      <a href="/contact" class="btn-primary">
        <i data-lucide="clipboard-list" style="width:18px;height:18px;" aria-hidden="true"></i>
        Get Your Free Yard Quote
      </a>
      <a href="tel:6085015123" class="res-lawn-hero__phone">
        <i data-lucide="phone" style="width:20px;height:20px;" aria-hidden="true"></i>
        (608) 501-5123
      </a>
    </div>
    <div class="hero-badges">
      <span class="hero-badge-item">
        <i data-lucide="users" style="width:16px;height:16px;" aria-hidden="true"></i>
        Same Crew Every Visit
      </span>
      <span class="hero-badge-item">
        <i data-lucide="settings" style="width:16px;height:16px;" aria-hidden="true"></i>
        Customizable Programs
      </span>
      <span class="hero-badge-item">
        <i data-lucide="shield-check" style="width:16px;height:16px;" aria-hidden="true"></i>
        Licensed &amp; Insured
      </span>
    </div>
  </div>
</section>

<!-- Divider: diagonal down to white -->
<div aria-hidden="true" style="background:var(--color-primary);line-height:0;overflow:hidden;height:60px;">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" width="100%" height="60"><polygon points="0,0 1200,60 1200,60 0,60" fill="#ffffff"/></svg>
</div>

<!-- ── Intro / Answer Section ─────────────────────────────── -->
<section class="intro-section" data-animate="fade-up">
  <div class="container">
    <p class="section-eyebrow">What's Included</p>
    <h2 class="section-title">What Does Residential Lawn Care Cover?</h2>
    <p class="prose">
      A standard residential lawn care visit from R.A.H. Solutions includes mowing at the right height for the season, edging along driveways and sidewalks, string trimming around beds and fences, and blowing clippings off hard surfaces. Weekly or bi-weekly programs are available, with seasonal adjustments in spring and fall when mowing frequency shifts. Most residential lots in the Edgerton area run $40–$80 per visit depending on size and complexity.
    </p>
    <p class="prose">
      The difference between residential and commercial service isn't just scale — it's attention to detail. Homeowners have ornamental beds, garden areas, and established landscaping that requires awareness during mowing. Edgerton's residential yards often mix mature trees, shade-tolerant turf under canopy, and sunny open sections that need different cut heights to stay healthy. We account for your specific conditions.
    </p>
    <div class="price-tag">
      <i data-lucide="dollar-sign" style="width:20px;height:20px;color:var(--color-accent);" aria-hidden="true"></i>
      <strong>Typical visit: $40–$80</strong>&nbsp; depending on lot size. Standard lots average $50–$65/visit. Free yard walkthrough before you commit.
    </div>
    <p class="last-updated">Last Updated: April 2026</p>
  </div>
</section>

<!-- Divider: wave to bg-alt -->
<div aria-hidden="true" style="background:var(--color-bg);line-height:0;overflow:hidden;height:80px;">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none" width="100%" height="80"><path d="M0,40 C300,80 900,0 1200,40 L1200,80 L0,80 Z" fill="#f4f7f9"/></svg>
</div>

<!-- ── Signature: Before / After Split (Descriptive) ─────── -->
<section class="before-after" data-animate="fade-up" aria-label="Residential lawn care before and after">
  <div class="container">
    <p class="section-eyebrow">The Difference It Makes</p>
    <h2 class="section-title">Consistent Lawn Care vs. Letting It Go</h2>
    <div class="ba-split">
      <div class="ba-panel ba-panel--before">
        <div class="ba-panel__label" aria-label="Without regular lawn care">Without Regular Service</div>
        <picture>
          <source srcset="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963897215-2h4a0d-512659884_122253684104208320_1892119159010734985_n.jpg" type="image/webp">
          <img
            class="ba-panel__img"
            src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963897215-2h4a0d-512659884_122253684104208320_1892119159010734985_n.jpg"
            alt="Lawn before regular residential lawn care service Edgerton WI"
            width="600"
            height="320"
            loading="lazy"
          >
        </picture>
        <div class="ba-panel__content">
          <h3 class="ba-panel__title">Missed cuts, uneven growth, overgrown edges</h3>
          <p class="ba-panel__desc">When mowing is inconsistent, turf thickens unevenly, edges overgrow beds and driveways, and your home's curb appeal drops fast — especially visible in Edgerton's summer growing season.</p>
        </div>
      </div>
      <div class="ba-panel ba-panel--after">
        <div class="ba-panel__label" aria-label="With R.A.H. Solutions residential lawn care">With R.A.H. Solutions</div>
        <picture>
          <source srcset="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963892391-3enmm5-486843500_122226629396208320_6857620022192748149_n.jpg" type="image/webp">
          <img
            class="ba-panel__img"
            src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963892391-3enmm5-486843500_122226629396208320_6857620022192748149_n.jpg"
            alt="Residential lawn care result healthy maintained yard Edgerton Wisconsin"
            width="600"
            height="320"
            loading="lazy"
          >
        </picture>
        <div class="ba-panel__content">
          <h3 class="ba-panel__title">Clean cuts, defined edges, healthy growth patterns</h3>
          <p class="ba-panel__desc">Consistent mowing at the right height for the season encourages denser, healthier turf. Sharp edges define your beds and hardscape. Your property looks maintained every single week.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Divider: diagonal up from bg-alt to white -->
<div aria-hidden="true" style="background:var(--color-bg-alt);line-height:0;overflow:hidden;height:60px;">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" width="100%" height="60"><polygon points="0,0 1200,0 1200,60 0,60" fill="#ffffff"/></svg>
</div>

<!-- ── Program Details with Image ─────────────────────────── -->
<section class="program-section" data-animate="fade-up">
  <div class="container">
    <div class="program-grid">
      <div class="program-img-wrap" data-animate="wipe-right">
        <picture>
          <source srcset="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963905145-cbpw70-470661025_122202491588208320_8070705476773582033_n.jpg" type="image/webp">
          <img
            src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963905145-cbpw70-470661025_122202491588208320_8070705476773582033_n.jpg"
            alt="Residential landscape services Edgerton WI outdoor spaces R.A.H. Solutions"
            width="700"
            height="400"
            loading="lazy"
          >
        </picture>
      </div>
      <div>
        <p class="section-eyebrow">Flexible Scheduling</p>
        <h2 class="section-title">Programs That Fit Your Life, Not Just Your Lot</h2>
        <p class="prose">
          Your lawn care program is yours to customize. Add mulching in spring, skip a week when you're on vacation, or switch from weekly to bi-weekly mid-season. We adjust without drama.
        </p>
        <ul class="program-list">
          <li>
            <i data-lucide="check" class="li-icon" aria-hidden="true"></i>
            <span>Mowing at seasonally appropriate height for Wisconsin turf</span>
          </li>
          <li>
            <i data-lucide="check" class="li-icon" aria-hidden="true"></i>
            <span>Edging along driveways, sidewalks, and bed borders</span>
          </li>
          <li>
            <i data-lucide="check" class="li-icon" aria-hidden="true"></i>
            <span>String trimming around obstacles, trees, and fences</span>
          </li>
          <li>
            <i data-lucide="check" class="li-icon" aria-hidden="true"></i>
            <span>Blowing clippings from hard surfaces after every visit</span>
          </li>
          <li>
            <i data-lucide="check" class="li-icon" aria-hidden="true"></i>
            <span>Weekly or bi-weekly scheduling — skip weeks available</span>
          </li>
          <li>
            <i data-lucide="check" class="li-icon" aria-hidden="true"></i>
            <span>Per-visit billing or monthly options — your choice</span>
          </li>
          <li>
            <i data-lucide="check" class="li-icon" aria-hidden="true"></i>
            <span>Add-ons: mulching, seasonal cleanup, shrub trimming</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Divider: diagonal down to dark -->
<div aria-hidden="true" style="background:var(--color-bg);line-height:0;overflow:hidden;height:60px;">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" width="100%" height="60"><polygon points="0,0 1200,60 1200,60 0,60" fill="#0f1e2d"/></svg>
</div>

<!-- ── Why Choose (Dark) ───────────────────────────────────── -->
<section class="why-section" data-animate="fade-up">
  <div class="container">
    <p class="section-eyebrow">Why Homeowners Choose R.A.H.</p>
    <h2 class="section-title">The Difference Between Reliable and Just Whoever Shows Up</h2>
    <div class="why-cards">
      <div class="why-card" data-animate="fade-up">
        <div class="why-card__icon">
          <i data-lucide="users" style="width:24px;height:24px;" aria-hidden="true"></i>
        </div>
        <h3 class="why-card__title">Same Crew Every Visit</h3>
        <p class="why-card__desc">Your crew learns your yard. They know the tricky corners, the gate latch, the ornamental bed that needs extra clearance. No random rotations.</p>
      </div>
      <div class="why-card" data-animate="fade-up">
        <div class="why-card__icon">
          <i data-lucide="message-circle" style="width:24px;height:24px;" aria-hidden="true"></i>
        </div>
        <h3 class="why-card__title">Direct Communication</h3>
        <p class="why-card__desc">You can reach your service team directly. No call center, no ticket queue. Rain reschedule? You'll hear from us before you wonder what happened.</p>
      </div>
      <div class="why-card" data-animate="fade-up">
        <div class="why-card__icon">
          <i data-lucide="sliders" style="width:24px;height:24px;" aria-hidden="true"></i>
        </div>
        <h3 class="why-card__title">Customizable Programs</h3>
        <p class="why-card__desc">Add or remove services anytime. Spring mulching, fall cleanup, bi-weekly instead of weekly — your program adapts as your needs change.</p>
      </div>
      <div class="why-card" data-animate="fade-up">
        <div class="why-card__icon">
          <i data-lucide="receipt" style="width:24px;height:24px;" aria-hidden="true"></i>
        </div>
        <h3 class="why-card__title">Simple, Transparent Billing</h3>
        <p class="why-card__desc">Per-visit or monthly billing — no surprise fees, no automatic renewals. Your invoice matches what was agreed. No games.</p>
      </div>
    </div>
  </div>
</section>

<!-- Divider: diagonal up from dark to white -->
<div aria-hidden="true" style="background:var(--color-bg-dark);line-height:0;overflow:hidden;height:60px;">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" width="100%" height="60"><polygon points="0,60 1200,0 1200,60" fill="#ffffff"/></svg>
</div>

<!-- ── Process Section ─────────────────────────────────────── -->
<section class="process-section" data-animate="fade-up">
  <div class="container">
    <p class="section-eyebrow" style="text-align:center;">Getting Started</p>
    <h2 class="section-title" style="text-align:center;">How We Set Up Your Lawn Care Program</h2>
    <div class="process-steps">
      <div class="process-step" data-animate="fade-up">
        <div class="process-step__num">1</div>
        <h3 class="process-step__title">Free Yard Walkthrough &amp; Quote</h3>
        <p class="process-step__desc">We walk the property, note specifics, and give you a written per-visit price before any commitment.</p>
      </div>
      <div class="process-step" data-animate="fade-up">
        <div class="process-step__num">2</div>
        <h3 class="process-step__title">Schedule Setup</h3>
        <p class="process-step__desc">Pick your service day and frequency. We assign you a consistent crew — not whoever's available that week.</p>
      </div>
      <div class="process-step" data-animate="fade-up">
        <div class="process-step__num">3</div>
        <h3 class="process-step__title">Regular Service Visits</h3>
        <p class="process-step__desc">Your crew arrives on schedule — mow, edge, trim, blow clean. You'll hear from us if anything changes.</p>
      </div>
      <div class="process-step" data-animate="fade-up">
        <div class="process-step__num">4</div>
        <h3 class="process-step__title">Seasonal Check-Ins</h3>
        <p class="process-step__desc">We review your program at season start/end, adjust for Wisconsin's climate shifts, and recommend add-ons if they make sense for your yard.</p>
      </div>
    </div>
  </div>
</section>

<!-- ── Mid-Page CTA Banner (CTA #2) ───────────────────────── -->
<div aria-hidden="true" style="background:var(--color-bg);line-height:0;overflow:hidden;height:60px;">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" width="100%" height="60"><polygon points="0,0 1200,60 1200,60 0,60" fill="#1a2b3c"/></svg>
</div>

<section class="cta-banner" aria-label="Get a residential lawn care estimate">
  <div class="container">
    <p class="section-eyebrow" style="color:var(--color-accent);">No-Commitment Estimate</p>
    <h2 class="cta-banner__title">Stop Thinking About It — Schedule Your Free Yard Walkthrough</h2>
    <p class="cta-banner__sub">
      Most Edgerton homeowners get their first quote within 2 business days of calling. Programs start as early as the following week.
    </p>
    <a href="tel:6085015123" class="cta-banner__phone" aria-label="Call R.A.H. Solutions">(608) 501-5123</a>
    <div class="cta-banner__btns">
      <a href="/contact" class="btn-primary">Request Your Free Quote</a>
      <a href="/services" class="btn-secondary" style="color:#fff;border-color:rgba(255,255,255,0.40);">Browse All Services</a>
    </div>
  </div>
</section>

<div aria-hidden="true" style="background:var(--color-primary);line-height:0;overflow:hidden;height:60px;">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" width="100%" height="60"><polygon points="0,0 1200,60 1200,60 0,60" fill="#f4f7f9"/></svg>
</div>

<!-- ── FAQ Section ─────────────────────────────────────────── -->
<section class="faq-section" data-animate="fade-up">
  <div class="container">
    <p class="section-eyebrow">Common Questions</p>
    <h2 class="section-title">Residential Lawn Care — Frequently Asked</h2>
    <div class="faq-grid">
      <?php foreach ($faqs as $faq): ?>
      <div class="faq-item" data-animate="fade-up">
        <h3 class="faq-item__q"><?php echo htmlspecialchars($faq['q'], ENT_QUOTES, 'UTF-8'); ?></h3>
        <p class="faq-item__a"><?php echo htmlspecialchars($faq['a'], ENT_QUOTES, 'UTF-8'); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div aria-hidden="true" style="background:var(--color-bg-alt);line-height:0;overflow:hidden;height:60px;">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" width="100%" height="60"><polygon points="0,0 1200,60 1200,60 0,60" fill="#ffffff"/></svg>
</div>

<!-- ── Closing CTA (CTA #3) ───────────────────────────────── -->
<section class="closing-cta" data-animate="fade-up">
  <div class="container">
    <p class="section-eyebrow">Your Yard, Our Program</p>
    <h2 class="closing-cta__title">Start Your Residential Lawn Care Program This Season</h2>
    <p class="closing-cta__sub">
      R.A.H. Solutions serves homeowners throughout Edgerton, Stoughton, Janesville, and Madison. Licensed, insured, and built around consistent, reliable service.
    </p>
    <div class="closing-cta__btns">
      <a href="/contact" class="btn-primary">
        <i data-lucide="calendar" style="width:18px;height:18px;" aria-hidden="true"></i>
        Get Your Free Walkthrough
      </a>
      <a href="/services" class="btn-secondary">View All Services</a>
    </div>
    <p style="margin-top:var(--space-xl);color:var(--color-text-light);font-size:var(--font-size-sm);">
      Related: <a href="/services/lawn-maintenance" style="color:var(--color-accent);">Lawn Maintenance Programs</a> · <a href="/services/spring-yard-cleanup" style="color:var(--color-accent);">Spring Cleanup</a> · <a href="/services/lawn-restoration" style="color:var(--color-accent);">Lawn Restoration</a>
    </p>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
