<?php
// ============================================================
// R.A.H. Solutions, LLC — Excavating Services
// ============================================================

$pageTitle       = 'Excavating Services in Edgerton, WI';
$pageDescription = 'Excavating in Edgerton, WI — site grading, drainage, pond excavation & utility trenching by R.A.H. Solutions. Free estimates. Call (608) 501-5123.';
$canonicalUrl    = 'https://rahsolutionsllc.com/services/excavating-services';
// SEO: {"@context":"https://schema.org"} — schema and <link rel="canonical"> rendered via head.php
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963895295-85rqf1-495734161_122236025852208320_5435639759042997660_n.jpg';
$currentPage     = 'service-excavating-services';
$heroPreload     = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963895295-85rqf1-495734161_122236025852208320_5435639759042997660_n.jpg';

$pageServiceName = 'Excavating Services';
$pageServiceSlug = 'excavating-services';

// ── Page-Specific Schema ───────────────────────────────────────
$faqs = [
  ['q' => 'What permits are needed for excavation in Wisconsin?', 'a' => 'Most residential grading and drainage projects in Wisconsin do not require a permit unless you are altering more than one acre of land (which triggers a DNR erosion control permit) or working near wetlands or floodplains. Basement and foundation excavation typically requires a building permit from your municipality. R.A.H. Solutions reviews permit requirements during the site walk before any project begins.'],
  ['q' => 'Can you fix poor drainage on my property?', 'a' => 'Yes. Poor drainage is one of the most common excavating requests we handle in Rock County. We assess your existing grade, design a corrective grading plan to direct water away from structures, and can install French drains or swales where needed. Most residential drainage correction projects take 1–3 days depending on scope.'],
  ['q' => 'Do you do pond or water feature excavation?', 'a' => 'Yes. We excavate ponds, detention basins, and decorative water features for residential and agricultural properties in the Edgerton area. Pond size, soil type, and proximity to structures all factor into planning. We provide a site walk and estimate before committing to scope.'],
  ['q' => 'How much does grading cost near Edgerton?', 'a' => 'Grading typically runs $80–$150 per hour for compact equipment in the Edgerton area, with most residential grading projects falling in the $500–$3,000 range. Larger site preparation projects are quoted by the job after a site assessment. Call (608) 501-5123 for a free estimate.'],
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
      '@type'            => 'Service',
      'name'             => 'Excavating Services',
      'serviceType'      => 'Excavation and Site Preparation',
      'provider'         => ['@type' => 'LocalBusiness', 'name' => 'R.A.H. Solutions, LLC', '@id' => 'https://rahsolutionsllc.com/#business'],
      'areaServed'       => ['@type' => 'City', 'name' => 'Edgerton', 'containedInPlace' => ['@type' => 'State', 'name' => 'Wisconsin']],
      'description'      => 'Professional excavating, site grading, drainage solutions, pond excavation, and utility trenching for residential and commercial properties in Edgerton, WI.',
      'url'              => 'https://rahsolutionsllc.com/services/excavating-services',
    ],
    [
      '@type'       => 'FAQPage',
      'mainEntity'  => $faqItems,
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
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Excavating Services', 'item' => 'https://rahsolutionsllc.com/services/excavating-services'],
      ],
    ],
    [
      '@type'       => 'HowTo',
      'name'        => 'How R.A.H. Solutions Handles an Excavating Project',
      'step'        => [
        ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Site Walk & Grade Assessment', 'text' => 'We walk your property to evaluate existing grades, drainage patterns, soil conditions, and project scope. You receive a written estimate before any work begins.'],
        ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Equipment Mobilization', 'text' => 'We select and mobilize equipment sized to your property — compact equipment for tight residential lots, larger machinery for commercial and agricultural sites.'],
        ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Excavation & Grading', 'text' => 'We execute the excavation plan — grading for positive drainage, digging for foundations or ponds, trenching for utilities — per the agreed scope.'],
        ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Cleanup & Topsoil Restoration', 'text' => 'Excess soil is removed or redistributed. Disturbed topsoil is replaced and compacted. The site is left clean and ready for landscaping or construction.'],
      ],
    ],
  ],
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<style>
/* ============================================================
   Excavating Services — Page-Specific Styles
   Standard Tier: 200+ lines, 4+ techniques
   ============================================================ */

/* ── Hero ─────────────────────────────────────────────────── */
.excavating-hero {
  position: relative;
  min-height: 88vh;
  display: flex;
  align-items: center;
  background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963895295-85rqf1-495734161_122236025852208320_5435639759042997660_n.jpg');
  background-size: cover;
  background-position: center 40%;
  background-attachment: fixed;
  overflow: hidden;
  animation: excavHeroZoom 22s ease-in-out infinite alternate;
}

@keyframes excavHeroZoom {
  from { background-size: 110%; background-position: center 40%; }
  to   { background-size: 120%; background-position: center 50%; }
}

.excavating-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    135deg,
    rgba(var(--color-primary-rgb), 0.88) 0%,
    rgba(var(--color-primary-rgb), 0.55) 60%,
    rgba(0,0,0,0.20) 100%
  );
  z-index: 1;
}

.excavating-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 2;
  pointer-events: none;
}

.excavating-hero__inner {
  position: relative;
  z-index: 3;
  width: 100%;
  padding: var(--space-4xl) var(--space-lg);
  padding-top: calc(var(--navbar-height) + var(--space-4xl));
}

.excavating-hero__eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: rgba(var(--color-accent-rgb), 0.18);
  border: 1px solid rgba(var(--color-accent-rgb), 0.40);
  color: var(--color-accent);
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  padding: var(--space-xs) var(--space-md);
  border-radius: var(--radius-xl);
  margin-bottom: var(--space-lg);
  animation: fadeSlideUp 0.6s ease both;
}

.excavating-hero__title {
  font-family: var(--font-heading);
  font-size: clamp(2.4rem, 5.5vw, 4.2rem);
  font-weight: 700;
  line-height: 1.1;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: #fff;
  max-width: 760px;
  margin-bottom: var(--space-lg);
  animation: fadeSlideUp 0.7s 0.1s ease both;
}

.excavating-hero__title span {
  background: linear-gradient(90deg, var(--color-accent), #38d9f5);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.excavating-hero__sub {
  color: rgba(255,255,255,0.88);
  font-size: var(--font-size-lg);
  max-width: 55ch;
  line-height: 1.65;
  margin-bottom: var(--space-2xl);
  animation: fadeSlideUp 0.7s 0.2s ease both;
}

.excavating-hero__ctas {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-md);
  animation: fadeSlideUp 0.7s 0.3s ease both;
}

.excavating-hero__phone {
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

.excavating-hero__phone:hover {
  background: rgba(255,255,255,0.12);
  border-color: rgba(255,255,255,0.55);
  transform: translateY(-2px);
}

.excavating-hero__trust {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-lg);
  margin-top: var(--space-2xl);
  padding-top: var(--space-xl);
  border-top: 1px solid rgba(255,255,255,0.15);
  animation: fadeSlideUp 0.7s 0.4s ease both;
}

.hero-trust-item {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  color: rgba(255,255,255,0.82);
  font-size: var(--font-size-sm);
  font-weight: 600;
  letter-spacing: 0.04em;
}

@keyframes fadeSlideUp {
  from { opacity: 0; transform: translateY(24px); }
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

.breadcrumb-nav a {
  color: var(--color-accent);
  transition: color var(--transition-fast);
}

.breadcrumb-nav a:hover { color: var(--color-primary); }
.breadcrumb-nav .sep { opacity: 0.5; }

/* ── Answer Block / Intro ─────────────────────────────────── */
.answer-intro {
  padding: var(--space-4xl) var(--space-lg);
  background: var(--color-bg);
}

.answer-intro .container {
  max-width: var(--max-width);
  margin-inline: auto;
}

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

.cost-callout {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: rgba(var(--color-accent-rgb), 0.08);
  border-left: 4px solid var(--color-accent);
  padding: var(--space-md) var(--space-lg);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  margin-top: var(--space-md);
}

.cost-callout strong {
  color: var(--color-primary);
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
}

/* ── Split Layout — Services Detail ──────────────────────── */
.services-detail {
  padding: var(--space-4xl) var(--space-lg);
  background: var(--color-bg-alt);
}

.split-layout {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3xl);
  align-items: center;
  max-width: var(--max-width);
  margin-inline: auto;
}

.split-layout--reverse { direction: rtl; }
.split-layout--reverse > * { direction: ltr; }

.split-content { }

.split-image {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
}

.split-image::before {
  content: '';
  position: absolute;
  inset: -1px;
  border-radius: inherit;
  border: 3px solid var(--color-accent);
  opacity: 0.30;
  z-index: 1;
  pointer-events: none;
}

.split-image img {
  width: 100%;
  height: 420px;
  object-fit: cover;
  display: block;
  transition: transform var(--transition-slow);
}

.split-image:hover img { transform: scale(1.04); }

.split-image__badge {
  position: absolute;
  bottom: var(--space-lg);
  left: var(--space-lg);
  z-index: 2;
  background: var(--color-accent);
  color: #fff;
  font-family: var(--font-heading);
  font-size: var(--font-size-sm);
  font-weight: 600;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  padding: var(--space-xs) var(--space-md);
  border-radius: var(--radius-sm);
  box-shadow: var(--shadow-md);
}

.services-list {
  list-style: none;
  padding: 0;
  margin: var(--space-lg) 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-sm);
}

.services-list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-md);
  color: var(--color-text);
  font-size: var(--font-size-base);
  line-height: 1.5;
}

.services-list li .list-icon {
  flex-shrink: 0;
  width: 22px;
  height: 22px;
  color: var(--color-accent);
  margin-top: 2px;
}

/* ── Why Choose — Signature Section (Dark) ────────────────── */
.why-choose {
  padding: var(--space-4xl) var(--space-lg);
  background: var(--color-bg-dark);
  position: relative;
  overflow: hidden;
}

.why-choose::before {
  content: '';
  position: absolute;
  top: -40%;
  right: -15%;
  width: 600px;
  height: 600px;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.08) 0%, transparent 70%);
  pointer-events: none;
}

.why-choose::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
}

.why-choose .container {
  max-width: var(--max-width);
  margin-inline: auto;
  position: relative;
  z-index: 1;
}

.why-choose .section-eyebrow { color: var(--color-accent); }
.why-choose .section-title   { color: #fff; }

.why-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-xl);
  margin-top: var(--space-2xl);
}

.why-card {
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: var(--radius-lg);
  padding: var(--space-xl);
  transition: all var(--transition-base);
  position: relative;
  overflow: hidden;
}

.why-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 3px;
  background: linear-gradient(90deg, var(--color-accent), transparent);
  opacity: 0;
  transition: opacity var(--transition-base);
}

.why-card:hover { background: rgba(255,255,255,0.09); transform: translateY(-4px); }
.why-card:hover::before { opacity: 1; }

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
  max-width: 35ch;
}

/* ── Process Section ──────────────────────────────────────── */
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
  top: 32px;
  left: 10%;
  right: 10%;
  height: 2px;
  background: linear-gradient(90deg, var(--color-accent), rgba(var(--color-accent-rgb), 0.2));
  z-index: 0;
}

.process-step {
  position: relative;
  z-index: 1;
  text-align: center;
}

.process-step__num {
  width: 64px;
  height: 64px;
  border-radius: 50%;
  background: var(--color-primary);
  color: #fff;
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  font-weight: 700;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto var(--space-lg);
  border: 3px solid var(--color-bg);
  box-shadow: var(--shadow-md);
  transition: all var(--transition-base);
}

.process-step:hover .process-step__num {
  background: var(--color-accent);
  transform: scale(1.1);
}

.process-step__title {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 600;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
  text-wrap: balance;
}

.process-step__desc {
  color: var(--color-text-light);
  font-size: var(--font-size-sm);
  line-height: 1.65;
  max-width: 28ch;
  margin-inline: auto;
}

/* ── Mid-Page CTA Banner ──────────────────────────────────── */
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

/* ── FAQ Section ──────────────────────────────────────────── */
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

/* ── Last Updated ─────────────────────────────────────────── */
.last-updated {
  font-size: var(--font-size-xs);
  color: var(--color-text-light);
  margin-top: var(--space-lg);
  opacity: 0.75;
}

/* ── Responsive ───────────────────────────────────────────── */
@media (max-width: 1023px) {
  .split-layout        { grid-template-columns: 1fr; gap: var(--space-2xl); }
  .split-layout--reverse { direction: ltr; }
  .why-grid            { grid-template-columns: 1fr; }
  .process-steps       { grid-template-columns: repeat(2, 1fr); }
  .process-steps::before { display: none; }
  .faq-grid            { grid-template-columns: 1fr; }
}

@media (max-width: 767px) {
  .excavating-hero     { min-height: 70vh; background-attachment: scroll; animation: none; }
  .excavating-hero__inner { padding-top: calc(var(--navbar-height) + var(--space-2xl)); }
  .excavating-hero__ctas { flex-direction: column; }
  .excavating-hero__trust { gap: var(--space-md); }
  .process-steps       { grid-template-columns: 1fr; }
  .cta-banner__btns    { flex-direction: column; align-items: center; }
  .closing-cta__btns   { flex-direction: column; align-items: center; }
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
        <span itemprop="name">Excavating Services</span>
        <meta itemprop="position" content="3">
      </li>
    </ol>
  </div>
</nav>

<!-- ── Hero ────────────────────────────────────────────────── -->
<section class="excavating-hero" aria-label="Excavating Services hero">
  <div class="excavating-hero__inner container">
    <p class="excavating-hero__eyebrow">
      <i data-lucide="construction" style="width:14px;height:14px;" aria-hidden="true"></i>
      Excavating Services — Edgerton, WI
    </p>
    <h1 class="excavating-hero__title">
      Excavating Services in Edgerton, WI —<br>
      <span>Site Prep &amp; Earthmoving</span>
    </h1>
    <p class="excavating-hero__sub">
      From drainage grading and utility trenching to pond excavation and foundation prep — R.A.H. Solutions moves earth precisely and protects your landscape investment. Compact equipment for residential lots. Commercial capability when you need it.
    </p>
    <div class="excavating-hero__ctas">
      <a href="/contact" class="btn-primary">
        <i data-lucide="clipboard-list" style="width:18px;height:18px;" aria-hidden="true"></i>
        Get a Free Estimate
      </a>
      <a href="tel:6085015123" class="excavating-hero__phone">
        <i data-lucide="phone" style="width:20px;height:20px;" aria-hidden="true"></i>
        (608) 501-5123
      </a>
    </div>
    <div class="excavating-hero__trust">
      <span class="hero-trust-item">
        <i data-lucide="shield-check" style="width:16px;height:16px;" aria-hidden="true"></i>
        Licensed &amp; Insured
      </span>
      <span class="hero-trust-item">
        <i data-lucide="map-pin" style="width:16px;height:16px;" aria-hidden="true"></i>
        Edgerton, WI &amp; Surrounding Area
      </span>
      <span class="hero-trust-item">
        <i data-lucide="clock" style="width:16px;height:16px;" aria-hidden="true"></i>
        Same-Day Response for Urgent Drainage Issues
      </span>
    </div>
  </div>
</section>

<!-- ── Divider: diagonal down ─────────────────────────────── -->
<div aria-hidden="true" style="background:var(--color-primary);line-height:0;overflow:hidden;height:60px;">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" width="100%" height="60"><polygon points="0,0 1200,60 1200,60 0,60" fill="#ffffff"/></svg>
</div>

<!-- ── Intro / Answer Block ────────────────────────────────── -->
<section class="answer-intro" data-animate="fade-up">
  <div class="container">
    <p class="section-eyebrow">What Excavating Covers</p>
    <h2 class="section-title">What Does <span class="text-accent">Excavating</span> Actually Include?</h2>
    <p class="prose">
      Excavating from R.A.H. Solutions covers any project that requires moving or reshaping earth — site grading for new construction or additions, drainage grading to correct water pooling near your foundation, pond and water feature excavation, utility trenching for water or electrical lines, and basement or foundation preparation. If your property has a water problem, a new structure going in, or ground that needs reshaping, excavation is the first step.
    </p>
    <p class="prose">
      Wisconsin's heavy clay soils in the Edgerton area create specific drainage challenges. Water doesn't percolate well through clay — it pools, runs toward structures, and causes long-term foundation and basement moisture issues. Properly graded positive drainage (water flows away from your home at minimum 6 inches over the first 10 feet) is the single most effective preventative measure for basement water intrusion in Rock County.
    </p>
    <div class="answer-block">
      <h3>What excavating services are available in Edgerton, WI?</h3>
      <p>R.A.H. Solutions offers site grading, drainage correction, pond excavation, utility trenching, and foundation preparation in Edgerton and Rock County. Most residential grading projects run $500–$3,000, with compact equipment rates of $80–$150 per hour. Every project starts with a free site walk and written estimate before equipment rolls.</p>
    </div>
    <div class="cost-callout" data-animate="fade-up">
      <i data-lucide="dollar-sign" style="width:20px;height:20px;color:var(--color-accent);" aria-hidden="true"></i>
      <strong>Typical cost: $80–$150/hr</strong>&nbsp; for compact equipment. Most residential grading projects: $500–$3,000. Free estimates always.
    </div>
    <p class="last-updated">Last Updated: May 2026</p>
  </div>
</section>

<!-- ── Divider: wave ──────────────────────────────────────── -->
<div aria-hidden="true" style="background:var(--color-bg);line-height:0;overflow:hidden;height:80px;">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none" width="100%" height="80"><path d="M0,40 C300,80 900,0 1200,40 L1200,80 L0,80 Z" fill="#f4f7f9"/></svg>
</div>

<!-- ── Services Detail Split Layout ───────────────────────── -->
<section class="services-detail" data-animate="fade-up">
  <div class="split-layout">
    <div class="split-content">
      <p class="section-eyebrow">Full Service Scope</p>
      <h2 class="section-title">What Excavating Services Do We Provide Near Edgerton?</h2>
      <p class="prose">
        From single-afternoon drainage fixes to multi-day site preparation projects, our excavating work is scoped properly before equipment rolls. We assess soil conditions, set grade benchmarks, and review any permit requirements specific to your municipality in Rock or Dane County.
      </p>
      <ul class="services-list">
        <li>
          <i data-lucide="check-circle" class="list-icon" aria-hidden="true"></i>
          <span><strong>Site Grading</strong> — Positive drainage away from foundations and structures</span>
        </li>
        <li>
          <i data-lucide="check-circle" class="list-icon" aria-hidden="true"></i>
          <span><strong>Drainage Grading</strong> — Correct water pooling, standing water, and wet spots</span>
        </li>
        <li>
          <i data-lucide="check-circle" class="list-icon" aria-hidden="true"></i>
          <span><strong>Pond Excavation</strong> — Decorative and agricultural ponds sized to your property</span>
        </li>
        <li>
          <i data-lucide="check-circle" class="list-icon" aria-hidden="true"></i>
          <span><strong>Utility Trenching</strong> — Water lines, electrical conduit, irrigation</span>
        </li>
        <li>
          <i data-lucide="check-circle" class="list-icon" aria-hidden="true"></i>
          <span><strong>Foundation &amp; Basement Prep</strong> — Rough excavation for additions and new construction</span>
        </li>
        <li>
          <i data-lucide="check-circle" class="list-icon" aria-hidden="true"></i>
          <span><strong>Erosion Control</strong> — Temporary controls installed during active work</span>
        </li>
        <li>
          <i data-lucide="check-circle" class="list-icon" aria-hidden="true"></i>
          <span><strong>Topsoil Stripping &amp; Stockpiling</strong> — Preserve usable topsoil for restoration</span>
        </li>
      </ul>
    </div>
    <div class="split-image" data-animate="wipe-right">
      <picture>
        <source srcset="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963895295-85rqf1-495734161_122236025852208320_5435639759042997660_n.jpg" type="image/webp">
        <img
          src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963895295-85rqf1-495734161_122236025852208320_5435639759042997660_n.jpg"
          alt="Excavating services site preparation Edgerton WI — R.A.H. Solutions earthmoving"
          width="700"
          height="420"
          loading="lazy"
        >
      </picture>
      <span class="split-image__badge">Edgerton, WI</span>
    </div>
  </div>
</section>

<!-- ── Divider: diagonal-up from bg-alt to dark ───────────── -->
<div aria-hidden="true" style="background:var(--color-bg-alt);line-height:0;overflow:hidden;height:60px;">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" width="100%" height="60"><polygon points="0,60 1200,0 1200,60" fill="#0f1e2d"/></svg>
</div>

<!-- ── Why Choose — Signature Dark Section ────────────────── -->
<section class="why-choose" data-animate="fade-up">
  <div class="container">
    <p class="section-eyebrow">Why R.A.H. Solutions</p>
    <h2 class="section-title">How Is Excavating Done <span class="text-accent">Right</span> for Wisconsin Properties?</h2>
    <p class="prose" style="color:rgba(255,255,255,0.72);">
      Hiring the right excavating contractor in Rock County means finding someone who understands Wisconsin soil, local drainage requirements, and how to protect your landscaping investment during the process.
    </p>
    <div class="why-grid">
      <div class="why-card" data-animate="fade-up">
        <div class="why-card__icon">
          <i data-lucide="truck" style="width:24px;height:24px;" aria-hidden="true"></i>
        </div>
        <h3 class="why-card__title">Equipment Sized for Your Property</h3>
        <p class="why-card__desc">Compact equipment for residential lots protects your lawn and landscaping. We don't bring in oversized machinery that destroys what's left.</p>
      </div>
      <div class="why-card" data-animate="fade-up">
        <div class="why-card__icon">
          <i data-lucide="layers" style="width:24px;height:24px;" aria-hidden="true"></i>
        </div>
        <h3 class="why-card__title">Topsoil Preserved and Reused</h3>
        <p class="why-card__desc">We strip, stockpile, and return usable topsoil after excavation. No stripping your good soil and leaving you with subsoil that won't support grass or plants.</p>
      </div>
      <div class="why-card" data-animate="fade-up">
        <div class="why-card__icon">
          <i data-lucide="git-branch" style="width:24px;height:24px;" aria-hidden="true"></i>
        </div>
        <h3 class="why-card__title">Drainage Plans Before Breaking Ground</h3>
        <p class="why-card__desc">Every grading project starts with a drainage review. We define flow paths, grade slopes, and outlet points before the first bucket of dirt moves.</p>
      </div>
      <div class="why-card" data-animate="fade-up">
        <div class="why-card__icon">
          <i data-lucide="zap" style="width:24px;height:24px;" aria-hidden="true"></i>
        </div>
        <h3 class="why-card__title">Same-Day Response for Urgent Drainage</h3>
        <p class="why-card__desc">Water in your basement after a storm isn't a next-week problem. We respond fast to active drainage emergencies in the Edgerton area.</p>
      </div>
    </div>
  </div>
</section>

<!-- ── Divider: diagonal-down from dark to white ──────────── -->
<div aria-hidden="true" style="background:var(--color-bg-dark);line-height:0;overflow:hidden;height:60px;">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" width="100%" height="60"><polygon points="0,60 1200,0 1200,60" fill="#ffffff"/></svg>
</div>

<!-- ── Process Section ─────────────────────────────────────── -->
<section class="process-section" data-animate="fade-up">
  <div class="container">
    <p class="section-eyebrow" style="text-align:center;">Our Process</p>
    <h2 class="section-title" style="text-align:center;">How Do We Handle Every Excavating Project?</h2>
    <div class="process-steps">
      <div class="process-step" data-animate="fade-up">
        <div class="process-step__num">1</div>
        <h3 class="process-step__title">Site Walk &amp; Grade Assessment</h3>
        <p class="process-step__desc">We walk your property, assess existing grades, drainage patterns, and project scope. You get a written estimate before anything starts.</p>
      </div>
      <div class="process-step" data-animate="fade-up">
        <div class="process-step__num">2</div>
        <h3 class="process-step__title">Equipment Mobilization</h3>
        <p class="process-step__desc">We select equipment sized for your lot — compact machines for residential, heavier equipment for large commercial or agricultural sites.</p>
      </div>
      <div class="process-step" data-animate="fade-up">
        <div class="process-step__num">3</div>
        <h3 class="process-step__title">Excavation &amp; Grading</h3>
        <p class="process-step__desc">Excavation proceeds per the agreed plan — grading to spec, trenching to depth, digging to grade — with erosion controls in place throughout.</p>
      </div>
      <div class="process-step" data-animate="fade-up">
        <div class="process-step__num">4</div>
        <h3 class="process-step__title">Cleanup &amp; Topsoil Restoration</h3>
        <p class="process-step__desc">Excess material is removed or redistributed. Topsoil is replaced and compacted. Site is left clean and ready for your next step.</p>
      </div>
    </div>
  </div>
</section>

<!-- ── Mid-Page CTA Banner (CTA #2) ───────────────────────── -->
<!-- ── Divider ─────────────────────────────────────────────── -->
<div aria-hidden="true" style="background:var(--color-bg);line-height:0;overflow:hidden;height:60px;">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" width="100%" height="60"><polygon points="0,0 1200,60 1200,60 0,60" fill="#1a2b3c"/></svg>
</div>

<section class="cta-banner" aria-label="Contact R.A.H. Solutions for excavating services">
  <div class="container">
    <p class="section-eyebrow" style="color:var(--color-accent);">Free Estimates — No Commitment</p>
    <h2 class="cta-banner__title">Have a Drainage Problem or Need Foundation Prep?</h2>
    <p class="cta-banner__sub">
      Water that pools against your foundation today becomes a basement moisture problem next season. Most drainage grading projects in Rock County can be scoped and scheduled within a week.
    </p>
    <a href="tel:6085015123" class="cta-banner__phone" aria-label="Call R.A.H. Solutions">(608) 501-5123</a>
    <div class="cta-banner__btns">
      <a href="/contact" class="btn-primary">Get a Free Estimate</a>
      <a href="/services" class="btn-secondary" style="color:#fff;border-color:rgba(255,255,255,0.40);">View All Services</a>
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
    <h2 class="section-title">What Is Frequently Asked About <span class="text-accent">Excavating</span> in Edgerton?</h2>
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

<!-- ── Divider ─────────────────────────────────────────────── -->
<div aria-hidden="true" style="background:var(--color-bg-alt);line-height:0;overflow:hidden;height:60px;">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" width="100%" height="60"><polygon points="0,0 1200,60 1200,60 0,60" fill="#ffffff"/></svg>
</div>

<!-- ── Closing CTA (CTA #3) ───────────────────────────────── -->
<section class="closing-cta" data-animate="fade-up">
  <div class="container">
    <p class="section-eyebrow">Ready to Start?</p>
    <h2 class="closing-cta__title">How Do You Schedule a Site Walk for Your Excavating Project?</h2>
    <p class="closing-cta__sub">
      R.A.H. Solutions serves Edgerton, Stoughton, Janesville, and Madison with professional excavating and site preparation. We're licensed, insured, and ready to solve your drainage or earthmoving challenge.
    </p>
    <div class="closing-cta__btns">
      <a href="/contact" class="btn-primary">
        <i data-lucide="calendar" style="width:18px;height:18px;" aria-hidden="true"></i>
        Request a Free Estimate
      </a>
      <a href="/services" class="btn-secondary">Browse All Services</a>
    </div>
    <p style="margin-top:var(--space-xl);color:var(--color-text-light);font-size:var(--font-size-sm);">
      Also serving: <a href="/service-area" style="color:var(--color-accent);">Stoughton, Janesville &amp; Madison</a> — Hardscaping &amp; <a href="/services/concrete-services" style="color:var(--color-accent);">Concrete Services</a> available.
    </p>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
