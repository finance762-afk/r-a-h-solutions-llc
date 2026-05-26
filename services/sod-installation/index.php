<?php
// ============================================================
// R.A.H. Solutions, LLC — services/sod-installation.php
// Service Page | Standard Tier
// ============================================================

$pageTitle       = 'Sod Installation in Edgerton, WI';
$pageDescription = 'Sod installation in Edgerton, WI — Kentucky bluegrass & fescue varieties, proper site prep & grading. 30-day watering plan included. Call (608) 501-5123.';
$canonicalUrl    = 'https://rahsolutionsllc.com/services/sod-installation';
// SEO: {"@context":"https://schema.org"} — schema and <link rel="canonical"> rendered via head.php
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963887692-btgk52-490023562_122226629156208320_4857034073232372127_n.jpg';
$currentPage     = 'service-sod-installation';
$heroPreload     = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963887692-btgk52-490023562_122226629156208320_4857034073232372127_n.jpg';

$pageFaqs = [
  [
    'q' => 'How long until I can use my new sod lawn?',
    'a' => 'New sod typically takes 2–3 weeks to root firmly enough for light foot traffic in Wisconsin summers. Full establishment — where you can mow, play, and use the lawn normally — takes about 4–6 weeks. We provide a care schedule so you know exactly when each activity is safe.',
  ],
  [
    'q' => 'What is the best time to install sod in Wisconsin?',
    'a' => 'Late spring (May–June) and early fall (August–September) are ideal for sod installation in the Edgerton area. Fall installs benefit from cooler temperatures and natural rainfall, reducing irrigation demands. Summer installs are possible but require more frequent watering during establishment.',
  ],
  [
    'q' => 'How often do I need to water new sod?',
    'a' => 'For the first two weeks, water new sod twice daily — morning and late afternoon — keeping the top 1–2 inches of soil consistently moist. In week three, reduce to once daily. By week four, transition to deep, infrequent watering (every 2–3 days). We provide a printed 30-day schedule with every installation.',
  ],
  [
    'q' => 'Is sod or seeding better for my lawn?',
    'a' => 'Sod gives you an instant lawn with immediate erosion control and usable turf in 4–6 weeks. Seeding costs less but takes 8–16 weeks to establish and requires very consistent care. For high-visibility areas, slopes, or properties where you need results fast, sod is the clear choice. We offer free consultations to help you decide.',
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
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Sod Installation', 'item' => 'https://rahsolutionsllc.com/services/sod-installation'],
      ],
    ],
    [
      '@type'       => 'Service',
      '@id'         => 'https://rahsolutionsllc.com/services/sod-installation/#service',
      'name'        => 'Sod Installation',
      'description' => 'Professional sod installation in Edgerton, WI including site preparation, soil amendment, sod delivery and installation, rolling, and a 30-day establishment watering plan. Kentucky bluegrass, fescue blends, and turf-type tall fescue available.',
      'provider'    => ['@type' => 'LocalBusiness', '@id' => 'https://rahsolutionsllc.com/#business'],
      'areaServed'  => [
        ['@type' => 'City', 'name' => 'Edgerton'],
        ['@type' => 'City', 'name' => 'Stoughton'],
        ['@type' => 'City', 'name' => 'Janesville'],
        ['@type' => 'City', 'name' => 'Madison'],
      ],
      'serviceType' => 'Sod Installation',
      'offers'      => [
        '@type'       => 'Offer',
        'description' => 'Sod installation starting at $1.50–$2.50 per sq ft installed',
      ],
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
   SOD INSTALLATION — Page-Specific Styles
   Standard Tier | 200+ lines
   ============================================================ */

/* ── Hero ─────────────────────────────────────────────────── */
.sod-hero {
  position: relative;
  min-height: 88vh;
  display: flex;
  align-items: center;
  background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963887692-btgk52-490023562_122226629156208320_4857034073232372127_n.jpg');
  background-size: cover;
  background-position: center 30%;
  animation: kenburns-sod 22s ease-in-out infinite alternate;
}
@keyframes kenburns-sod {
  from { background-size: 110%; background-position: center 30%; }
  to   { background-size: 122%; background-position: center 55%; }
}
.sod-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    135deg,
    rgba(var(--color-primary-rgb), 0.82) 0%,
    rgba(var(--color-primary-rgb), 0.55) 55%,
    rgba(var(--color-primary-rgb), 0.25) 100%
  );
  z-index: 1;
}
.sod-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 2;
  pointer-events: none;
}
.sod-hero__inner {
  position: relative;
  z-index: 3;
  width: 100%;
  max-width: var(--max-width, 1200px);
  margin-inline: auto;
  padding: var(--space-4xl, 96px) var(--space-lg, 24px) var(--space-3xl, 64px);
}
.sod-hero__breadcrumb {
  display: flex;
  align-items: center;
  gap: var(--space-sm, 8px);
  margin-bottom: var(--space-xl, 32px);
  font-family: var(--font-body);
  font-size: var(--font-size-sm, 0.875rem);
  color: rgba(255,255,255,0.75);
}
.sod-hero__breadcrumb a {
  color: rgba(255,255,255,0.75);
  transition: color var(--transition-fast, 0.15s ease);
}
.sod-hero__breadcrumb a:hover { color: var(--color-accent); }
.sod-hero__breadcrumb-sep { color: rgba(255,255,255,0.4); }
.sod-hero__eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm, 8px);
  background: rgba(var(--color-accent-rgb, 6,182,212), 0.18);
  border: 1px solid rgba(var(--color-accent-rgb, 6,182,212), 0.4);
  color: var(--color-accent);
  font-family: var(--font-body);
  font-size: var(--font-size-xs, 0.75rem);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  padding: var(--space-xs, 4px) var(--space-md, 16px);
  border-radius: var(--radius-xl, 24px);
  margin-bottom: var(--space-lg, 24px);
}
.sod-hero__title {
  font-family: var(--font-heading);
  font-size: clamp(2.4rem, 5.5vw, 4.2rem);
  font-weight: 700;
  line-height: 1.1;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: #fff;
  max-width: 18ch;
  margin-bottom: var(--space-lg, 24px);
  background: linear-gradient(135deg, #fff 0%, var(--color-accent) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.sod-hero__sub {
  font-family: var(--font-body);
  font-size: clamp(1rem, 2vw, 1.25rem);
  color: rgba(255,255,255,0.88);
  max-width: 52ch;
  line-height: 1.65;
  margin-bottom: var(--space-2xl, 48px);
}
.sod-hero__actions {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  gap: var(--space-md, 16px);
}
.sod-hero__badges {
  display: flex;
  gap: var(--space-lg, 24px);
  margin-top: var(--space-3xl, 64px);
  flex-wrap: wrap;
}
.sod-hero__badge {
  display: flex;
  align-items: center;
  gap: var(--space-sm, 8px);
  color: rgba(255,255,255,0.85);
  font-family: var(--font-body);
  font-size: var(--font-size-sm, 0.875rem);
}
.sod-hero__badge i { color: var(--color-accent); }

/* ── Ticker ──────────────────────────────────────────────── */
.sod-ticker {
  background: var(--color-primary);
  overflow: hidden;
  padding: var(--space-md, 16px) 0;
  border-top: 2px solid var(--color-accent);
  border-bottom: 2px solid rgba(var(--color-accent-rgb, 6,182,212), 0.3);
}
.sod-ticker__track {
  display: flex;
  width: max-content;
  animation: ticker-scroll 28s linear infinite;
}
.sod-ticker__track:hover { animation-play-state: paused; }
@keyframes ticker-scroll {
  from { transform: translateX(0); }
  to   { transform: translateX(-50%); }
}
.sod-ticker__item {
  display: inline-flex;
  align-items: center;
  gap: var(--space-md, 16px);
  padding-inline: var(--space-2xl, 48px);
  color: #fff;
  font-family: var(--font-body);
  font-size: var(--font-size-xs, 0.75rem);
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  white-space: nowrap;
}
.sod-ticker__sep {
  color: var(--color-accent);
  font-size: 1.2em;
}

/* ── Detail Section ──────────────────────────────────────── */
.sod-detail {
  background: var(--color-bg);
  padding: var(--space-4xl, 96px) var(--space-lg, 24px);
}
.sod-detail__grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3xl, 64px);
  align-items: center;
  max-width: var(--max-width, 1200px);
  margin-inline: auto;
}
.sod-detail__content {}
.sod-detail__eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm, 8px);
  color: var(--color-accent);
  font-family: var(--font-body);
  font-size: var(--font-size-xs, 0.75rem);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  margin-bottom: var(--space-md, 16px);
}
.sod-detail__heading {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-lg, 24px);
}
.sod-detail__text {
  font-family: var(--font-body);
  font-size: var(--font-size-base, 1rem);
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: 65ch;
  margin-bottom: var(--space-lg, 24px);
}
.sod-detail__list {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-sm, 8px);
  margin-bottom: var(--space-xl, 32px);
}
.sod-detail__list li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-sm, 8px);
  font-family: var(--font-body);
  font-size: var(--font-size-base, 1rem);
  color: var(--color-text-light);
  line-height: 1.5;
}
.sod-detail__list li i { color: var(--color-accent); flex-shrink: 0; margin-top: 2px; }

/* ── Signature: Overlapping Image Card ───────────────────── */
.sod-img-wrap {
  position: relative;
}
.sod-img-main {
  position: relative;
  border-radius: var(--radius-lg, 16px);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
  aspect-ratio: 4/5;
}
.sod-img-main img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.sod-img-card {
  position: absolute;
  bottom: -var(--space-2xl, 48px);
  bottom: calc(-1 * var(--space-2xl, 48px));
  left: calc(-1 * var(--space-2xl, 48px));
  background: var(--color-primary);
  border: 3px solid var(--color-accent);
  border-radius: var(--radius-lg, 16px);
  padding: var(--space-lg, 24px) var(--space-xl, 32px);
  box-shadow: var(--shadow-xl);
  min-width: 200px;
}
.sod-img-card__number {
  font-family: var(--font-heading);
  font-size: clamp(2.5rem, 4vw, 3.5rem);
  font-weight: 700;
  color: var(--color-accent);
  line-height: 1;
  margin-bottom: var(--space-xs, 4px);
}
.sod-img-card__label {
  font-family: var(--font-body);
  font-size: var(--font-size-sm, 0.875rem);
  color: rgba(255,255,255,0.85);
  line-height: 1.3;
}

/* ── CTA Banner (Mid-page) ───────────────────────────────── */
.sod-cta-mid {
  position: relative;
  overflow: hidden;
  padding: var(--space-4xl, 96px) var(--space-lg, 24px);
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
}
.sod-cta-mid::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
}
.sod-cta-mid__inner {
  position: relative;
  z-index: 1;
  max-width: var(--max-width, 1200px);
  margin-inline: auto;
  text-align: center;
}
.sod-cta-mid__eyebrow {
  font-family: var(--font-body);
  font-size: var(--font-size-xs, 0.75rem);
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-md, 16px);
}
.sod-cta-mid__heading {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 2.8rem);
  font-weight: 700;
  color: #fff;
  text-wrap: balance;
  margin-bottom: var(--space-md, 16px);
  line-height: 1.15;
  letter-spacing: -0.02em;
}
.sod-cta-mid__sub {
  font-family: var(--font-body);
  color: rgba(255,255,255,0.8);
  font-size: var(--font-size-lg, 1.125rem);
  max-width: 52ch;
  margin-inline: auto;
  line-height: 1.6;
  margin-bottom: var(--space-2xl, 48px);
}
.sod-cta-mid__phone {
  display: block;
  font-family: var(--font-heading);
  font-size: clamp(2rem, 4vw, 3rem);
  font-weight: 700;
  color: var(--color-accent);
  letter-spacing: 0.02em;
  margin-bottom: var(--space-xl, 32px);
  text-decoration: none;
  transition: opacity var(--transition-fast, 0.15s ease);
}
.sod-cta-mid__phone:hover { opacity: 0.85; }
.sod-cta-mid__actions {
  display: flex;
  justify-content: center;
  gap: var(--space-md, 16px);
  flex-wrap: wrap;
}

/* ── Why Choose Section ──────────────────────────────────── */
.sod-why {
  background: var(--color-bg-alt);
  padding: var(--space-4xl, 96px) var(--space-lg, 24px);
}
.sod-why__inner {
  max-width: var(--max-width, 1200px);
  margin-inline: auto;
}
.sod-why__header {
  text-align: center;
  margin-bottom: var(--space-3xl, 64px);
}
.sod-why__heading {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-md, 16px);
}
.sod-why__sub {
  font-family: var(--font-body);
  color: var(--color-text-light);
  font-size: var(--font-size-lg, 1.125rem);
  max-width: 55ch;
  margin-inline: auto;
  line-height: 1.65;
}
.sod-why__grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-lg, 24px);
}
.sod-why__card {
  background: var(--color-bg);
  border-radius: var(--radius-lg, 16px);
  padding: var(--space-2xl, 48px) var(--space-xl, 32px);
  box-shadow: var(--shadow-md);
  border-top: 3px solid var(--color-accent);
  transition: transform var(--transition-base, 0.25s ease), box-shadow var(--transition-base, 0.25s ease);
}
.sod-why__card:hover {
  transform: translateY(-5px);
  box-shadow: var(--shadow-xl);
}
.sod-why__icon {
  width: 48px;
  height: 48px;
  background: rgba(var(--color-accent-rgb, 6,182,212), 0.1);
  border-radius: var(--radius-md, 8px);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: var(--space-lg, 24px);
  color: var(--color-accent);
  transition: transform var(--transition-base, 0.25s ease);
}
.sod-why__card:hover .sod-why__icon { transform: scale(1.15) rotate(-5deg); }
.sod-why__card-title {
  font-family: var(--font-heading);
  font-size: clamp(1.1rem, 2vw, 1.4rem);
  font-weight: 700;
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-sm, 8px);
  letter-spacing: -0.01em;
}
.sod-why__card-text {
  font-family: var(--font-body);
  font-size: var(--font-size-base, 1rem);
  color: var(--color-text-light);
  line-height: 1.65;
  max-width: 45ch;
}

/* ── Process Section ─────────────────────────────────────── */
.sod-process {
  background: var(--color-bg);
  padding: var(--space-4xl, 96px) var(--space-lg, 24px);
}
.sod-process__inner {
  max-width: var(--max-width, 1200px);
  margin-inline: auto;
}
.sod-process__header {
  text-align: center;
  margin-bottom: var(--space-3xl, 64px);
}
.sod-process__heading {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-md, 16px);
}
.sod-process__steps {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg, 24px);
  position: relative;
}
.sod-process__steps::before {
  content: '';
  position: absolute;
  top: 28px;
  left: calc(12.5% + var(--space-lg, 24px));
  right: calc(12.5% + var(--space-lg, 24px));
  height: 2px;
  background: linear-gradient(90deg, var(--color-accent) 0%, rgba(var(--color-accent-rgb, 6,182,212), 0.2) 100%);
  z-index: 0;
}
.sod-process__step {
  position: relative;
  z-index: 1;
  text-align: center;
  transition: transform var(--transition-base, 0.25s ease);
}
.sod-process__step:hover { transform: translateY(-4px); }
.sod-process__num {
  width: 56px;
  height: 56px;
  background: var(--color-primary);
  border: 3px solid var(--color-accent);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: var(--font-heading);
  font-size: 1.3rem;
  font-weight: 700;
  color: var(--color-accent);
  margin: 0 auto var(--space-lg, 24px);
}
.sod-process__step-title {
  font-family: var(--font-heading);
  font-size: clamp(1rem, 2vw, 1.2rem);
  font-weight: 700;
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-sm, 8px);
  letter-spacing: -0.01em;
}
.sod-process__step-text {
  font-family: var(--font-body);
  font-size: var(--font-size-sm, 0.875rem);
  color: var(--color-text-light);
  line-height: 1.6;
  max-width: 22ch;
  margin-inline: auto;
}

/* ── FAQ Section ─────────────────────────────────────────── */
.sod-faq {
  background: var(--color-bg-dark);
  padding: var(--space-4xl, 96px) var(--space-lg, 24px);
}
.sod-faq__inner {
  max-width: 800px;
  margin-inline: auto;
}
.sod-faq__eyebrow {
  color: var(--color-accent);
  font-family: var(--font-body);
  font-size: var(--font-size-xs, 0.75rem);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  margin-bottom: var(--space-md, 16px);
  text-align: center;
}
.sod-faq__heading {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.4rem);
  font-weight: 700;
  color: #fff;
  text-wrap: balance;
  text-align: center;
  margin-bottom: var(--space-3xl, 64px);
  line-height: 1.15;
  letter-spacing: -0.02em;
}
.sod-faq__item {
  border-bottom: 1px solid rgba(255,255,255,0.1);
  padding: var(--space-xl, 32px) 0;
}
.sod-faq__item:first-of-type { border-top: 1px solid rgba(255,255,255,0.1); }
.sod-faq__question {
  font-family: var(--font-heading);
  font-size: clamp(1rem, 2vw, 1.2rem);
  font-weight: 700;
  color: #fff;
  text-wrap: balance;
  margin-bottom: var(--space-md, 16px);
  line-height: 1.3;
}
.sod-faq__answer {
  font-family: var(--font-body);
  font-size: var(--font-size-base, 1rem);
  color: rgba(255,255,255,0.75);
  line-height: 1.7;
  max-width: 65ch;
}

/* ── Closing CTA ─────────────────────────────────────────── */
.sod-cta-close {
  background: var(--color-bg-alt);
  padding: var(--space-4xl, 96px) var(--space-lg, 24px);
}
.sod-cta-close__inner {
  max-width: 720px;
  margin-inline: auto;
  text-align: center;
}
.sod-cta-close__heading {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 2.6rem);
  font-weight: 700;
  color: var(--color-primary);
  text-wrap: balance;
  margin-bottom: var(--space-md, 16px);
  line-height: 1.15;
  letter-spacing: -0.02em;
}
.sod-cta-close__text {
  font-family: var(--font-body);
  color: var(--color-text-light);
  font-size: var(--font-size-lg, 1.125rem);
  line-height: 1.65;
  max-width: 52ch;
  margin-inline: auto;
  margin-bottom: var(--space-2xl, 48px);
}
.sod-cta-close__meta {
  font-family: var(--font-body);
  font-size: var(--font-size-sm, 0.875rem);
  color: var(--color-text-light);
  margin-top: var(--space-lg, 24px);
  display: flex;
  justify-content: center;
  align-items: center;
  gap: var(--space-lg, 24px);
  flex-wrap: wrap;
}
.sod-cta-close__meta span {
  display: flex;
  align-items: center;
  gap: var(--space-xs, 4px);
}
.sod-cta-close__meta i { color: var(--color-accent); }

/* ── Responsive ──────────────────────────────────────────── */
@media (max-width: 1023px) {
  .sod-detail__grid { grid-template-columns: 1fr; gap: var(--space-2xl, 48px); }
  .sod-img-wrap { max-width: 500px; margin-inline: auto; }
  .sod-why__grid { grid-template-columns: 1fr; }
  .sod-process__steps { grid-template-columns: repeat(2, 1fr); }
  .sod-process__steps::before { display: none; }
}
@media (max-width: 767px) {
  .sod-hero { min-height: 75vh; }
  .sod-hero__title { font-size: clamp(2rem, 8vw, 2.8rem); }
  .sod-process__steps { grid-template-columns: 1fr; }
  .sod-img-card {
    position: static;
    margin-top: var(--space-lg, 24px);
    width: fit-content;
  }
  .sod-cta-mid__actions { flex-direction: column; align-items: center; }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ── Breadcrumb (visible HTML) ──────────────────────────── -->
<nav class="sod-hero" aria-label="Sod installation hero and breadcrumb">
  <div class="sod-hero__inner">

    <nav aria-label="Breadcrumb">
      <ol class="sod-hero__breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/" itemprop="item"><span itemprop="name">Home</span></a>
          <meta itemprop="position" content="1">
        </li>
        <span class="sod-hero__breadcrumb-sep" aria-hidden="true">/</span>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/services" itemprop="item"><span itemprop="name">Services</span></a>
          <meta itemprop="position" content="2">
        </li>
        <span class="sod-hero__breadcrumb-sep" aria-hidden="true">/</span>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name">Sod Installation</span>
          <meta itemprop="position" content="3">
        </li>
      </ol>
    </nav>

    <div class="sod-hero__eyebrow">
      <i data-lucide="sprout" style="width:14px;height:14px;" aria-hidden="true"></i>
      Sod Installation — Edgerton, WI
    </div>

    <h1 class="sod-hero__title">Sod Installation in Edgerton, WI — Instant, Beautiful Lawns</h1>

    <p class="sod-hero__sub">From bare dirt to a lush, walkable lawn in a single day. We handle every step: site prep, soil grading, sod delivery, installation, rolling, and a 30-day watering plan — so your new lawn establishes strong the first time.</p>

    <div class="sod-hero__actions">
      <a href="/contact" class="btn-primary">Get a Free Estimate</a>
      <a href="tel:6085015123" class="btn-secondary" style="background:rgba(255,255,255,0.12);border:2px solid rgba(255,255,255,0.4);color:#fff;">
        <i data-lucide="phone" style="width:16px;height:16px;" aria-hidden="true"></i>
        (608) 501-5123
      </a>
    </div>

    <div class="sod-hero__badges">
      <div class="sod-hero__badge">
        <i data-lucide="shield-check" style="width:16px;height:16px;" aria-hidden="true"></i>
        Licensed &amp; Insured
      </div>
      <div class="sod-hero__badge">
        <i data-lucide="map-pin" style="width:16px;height:16px;" aria-hidden="true"></i>
        Edgerton-Based Crew
      </div>
      <div class="sod-hero__badge">
        <i data-lucide="star" style="width:16px;height:16px;" aria-hidden="true"></i>
        4.9-Star Rated
      </div>
    </div>

  </div>
</nav><!-- /sod-hero (doubles as breadcrumb container) -->

<!-- ── Proof Ticker ──────────────────────────────────────── -->
<div class="sod-ticker" aria-hidden="true">
  <div class="sod-ticker__track">
    <span class="sod-ticker__item">Locally sourced Wisconsin sod <span class="sod-ticker__sep">✦</span></span>
    <span class="sod-ticker__item">$1.50–$2.50 per sq ft installed <span class="sod-ticker__sep">✦</span></span>
    <span class="sod-ticker__item">Watering plan included <span class="sod-ticker__sep">✦</span></span>
    <span class="sod-ticker__item">Seed vs. sod consultation available <span class="sod-ticker__sep">✦</span></span>
    <span class="sod-ticker__item">Serving Edgerton · Stoughton · Janesville · Madison <span class="sod-ticker__sep">✦</span></span>
    <span class="sod-ticker__item">Free estimates — no obligation <span class="sod-ticker__sep">✦</span></span>
    <!-- Duplicate for seamless loop -->
    <span class="sod-ticker__item">Locally sourced Wisconsin sod <span class="sod-ticker__sep">✦</span></span>
    <span class="sod-ticker__item">$1.50–$2.50 per sq ft installed <span class="sod-ticker__sep">✦</span></span>
    <span class="sod-ticker__item">Watering plan included <span class="sod-ticker__sep">✦</span></span>
    <span class="sod-ticker__item">Seed vs. sod consultation available <span class="sod-ticker__sep">✦</span></span>
    <span class="sod-ticker__item">Serving Edgerton · Stoughton · Janesville · Madison <span class="sod-ticker__sep">✦</span></span>
    <span class="sod-ticker__item">Free estimates — no obligation <span class="sod-ticker__sep">✦</span></span>
  </div>
</div>

<!-- ── Divider: white → bg ───────────────────────────────── -->
<div class="divider-wrap" aria-hidden="true" style="background:var(--color-bg);line-height:0;overflow:hidden;height:60px;">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" width="100%" height="60"><polygon points="0,0 1200,60 1200,60 0,60" fill="#f4f7f9"/></svg>
</div>

<!-- ── Detail Section ────────────────────────────────────── -->
<section class="sod-detail" aria-labelledby="sod-detail-heading">
  <div class="sod-detail__grid">

    <div class="sod-detail__content" data-animate="fade-up">
      <div class="sod-detail__eyebrow">
        <i data-lucide="layers" style="width:14px;height:14px;" aria-hidden="true"></i>
        What's Included
      </div>
      <h2 id="sod-detail-heading" class="sod-detail__heading">What Is Everything Needed for a <span class="text-accent">Lawn That Lasts</span>?</h2>
      <p class="sod-detail__text">Southern Wisconsin clay soils are hard on new lawns. If the ground isn't properly graded and amended before installation, water pools, roots can't penetrate, and sod dies within a season. R.A.H. Solutions treats site preparation as the core of every sod installation — not an afterthought. Every project includes a soil assessment, minimum 4 inches of quality topsoil where needed, proper grade for positive drainage, and locally sourced sod acclimated to Wisconsin's climate.</p>
      <p class="sod-detail__text">Typical installed cost runs <strong>$1.50–$2.50 per square foot</strong>, depending on site complexity and sod variety. That includes delivery, installation, rolling, and your 30-day establishment watering schedule.</p>

      <div class="answer-block">
        <h3>How much does sod installation cost in Edgerton?</h3>
        <p>Sod installation in Edgerton typically runs $1.50–$2.50 per square foot fully installed. That price includes site preparation, soil grading, sod delivery, installation, rolling for root-to-soil contact, and a printed 30-day watering plan. A typical 2,000 sq ft lawn costs $3,000–$5,000 depending on site complexity and sod variety selected.</p>
      </div>

      <ul class="sod-detail__list" role="list">
        <li><i data-lucide="check-circle" style="width:18px;height:18px;" aria-hidden="true"></i>Site assessment and drainage review</li>
        <li><i data-lucide="check-circle" style="width:18px;height:18px;" aria-hidden="true"></i>Soil test and amendment recommendations</li>
        <li><i data-lucide="check-circle" style="width:18px;height:18px;" aria-hidden="true"></i>Grade correction — drains away from structures</li>
        <li><i data-lucide="check-circle" style="width:18px;height:18px;" aria-hidden="true"></i>Kentucky bluegrass, fescue blends, or turf-type tall fescue</li>
        <li><i data-lucide="check-circle" style="width:18px;height:18px;" aria-hidden="true"></i>Sod delivered and installed same day</li>
        <li><i data-lucide="check-circle" style="width:18px;height:18px;" aria-hidden="true"></i>Rolling for root-to-soil contact</li>
        <li><i data-lucide="check-circle" style="width:18px;height:18px;" aria-hidden="true"></i>Printed 30-day watering schedule provided</li>
      </ul>

      <a href="/contact" class="btn-primary">Schedule a Free Site Assessment</a>
    </div>

    <!-- SIGNATURE SECTION: Overlapping image card breaking section boundary -->
    <div class="sod-img-wrap" data-animate="wipe-right">
      <div class="sod-img-main">
        <picture>
          <source srcset="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963887692-btgk52-490023562_122226629156208320_4857034073232372127_n.jpg" type="image/webp">
          <img
            src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963887692-btgk52-490023562_122226629156208320_4857034073232372127_n.jpg"
            alt="Sod installation completed lawn Edgerton Wisconsin R.A.H. Solutions"
            width="640"
            height="800"
            loading="lazy"
          >
        </picture>
      </div>
      <!-- Overlapping stat card — breaks the image boundary -->
      <div class="sod-img-card" aria-label="4–6 weeks to full lawn establishment">
        <div class="sod-img-card__number">4–6</div>
        <div class="sod-img-card__label">Weeks to full<br>establishment</div>
      </div>
    </div>

  </div>
</section>

<!-- ── Divider: bg-alt → primary ─────────────────────────── -->
<div class="divider-wrap" aria-hidden="true" style="background:var(--color-bg-alt);line-height:0;overflow:hidden;height:80px;">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none" width="100%" height="80"><path d="M0,40 C300,80 900,0 1200,40 L1200,80 L0,80 Z" fill="#1a2b3c"/></svg>
</div>

<!-- ── Mid-page CTA Banner ───────────────────────────────── -->
<section class="sod-cta-mid" aria-labelledby="sod-cta-mid-heading">
  <div class="sod-cta-mid__inner">
    <div class="sod-cta-mid__eyebrow">Ready for an Instant Lawn?</div>
    <h2 id="sod-cta-mid-heading" class="sod-cta-mid__heading">Why Does Spring and Fall Booking Fill Fast?</h2>
    <p class="sod-cta-mid__sub">Edgerton's best sod installation windows book quickly. Call now for a free site assessment and same-week estimate.</p>
    <a href="tel:6085015123" class="sod-cta-mid__phone" aria-label="Call R.A.H. Solutions at (608) 501-5123">(608) 501-5123</a>
    <div class="sod-cta-mid__actions">
      <a href="/contact" class="btn-primary">Get Your Free Estimate</a>
    </div>
  </div>
</section>

<!-- ── Divider: primary → bg-alt ─────────────────────────── -->
<div class="divider-wrap" aria-hidden="true" style="background:var(--color-primary);line-height:0;overflow:hidden;height:60px;">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" width="100%" height="60"><polygon points="0,60 1200,0 1200,60" fill="#f4f7f9"/></svg>
</div>

<!-- ── Why Choose Section ─────────────────────────────────── -->
<section class="sod-why" aria-labelledby="sod-why-heading">
  <div class="sod-why__inner">
    <header class="sod-why__header" data-animate="fade-up">
      <div class="sod-detail__eyebrow" style="justify-content:center;">
        <i data-lucide="award" style="width:14px;height:14px;" aria-hidden="true"></i>
        Why R.A.H. Solutions
      </div>
      <h2 id="sod-why-heading" class="sod-why__heading">What <span class="text-accent">Sod Installation</span> Is Built for Southern Wisconsin Soil?</h2>
      <p class="sod-why__sub">The Edgerton area's heavy clay soil and freeze-thaw cycles demand a different approach than what works in other states. Here's what we do differently.</p>
    </header>
    <div class="sod-why__grid">
      <div class="sod-why__card" data-animate="fade-up">
        <div class="sod-why__icon"><i data-lucide="droplets" style="width:24px;height:24px;" aria-hidden="true"></i></div>
        <h3 class="sod-why__card-title">Grade Prevents Drainage Problems</h3>
        <p class="sod-why__card-text">Southern Wisconsin clay doesn't drain like sandy loam. Every installation is graded to direct water away from foundations and prevent the standing water that kills sod in its first winter.</p>
      </div>
      <div class="sod-why__card" data-animate="fade-up">
        <div class="sod-why__icon"><i data-lucide="map-pin" style="width:24px;height:24px;" aria-hidden="true"></i></div>
        <h3 class="sod-why__card-title">Wisconsin-Acclimated Sod Varieties</h3>
        <p class="sod-why__card-text">We source sod grown in the Upper Midwest — already adapted to Wisconsin winters. Kentucky bluegrass for sunny areas, fescue blends for shade, turf-type tall fescue for low-maintenance lawns.</p>
      </div>
      <div class="sod-why__card" data-animate="fade-up">
        <div class="sod-why__icon"><i data-lucide="calendar-check" style="width:24px;height:24px;" aria-hidden="true"></i></div>
        <h3 class="sod-why__card-title">30-Day Watering Plan Included</h3>
        <p class="sod-why__card-text">New sod fails most often from improper watering in weeks 2–4. Every installation includes a printed, day-by-day watering schedule so you know exactly what to do — and when to back off.</p>
      </div>
      <div class="sod-why__card" data-animate="fade-up">
        <div class="sod-why__icon"><i data-lucide="git-compare-arrows" style="width:24px;height:24px;" aria-hidden="true"></i></div>
        <h3 class="sod-why__card-title">Free Seed vs. Sod Consultation</h3>
        <p class="sod-why__card-text">Not every situation calls for sod. We'll tell you honestly — if seeding fits your timeline and budget better, we'll say so. Our goal is a lawn you're happy with, not just a project completed.</p>
      </div>
    </div>
  </div>
</section>

<!-- ── Divider: bg-alt → bg ──────────────────────────────── -->
<div class="divider-wrap" aria-hidden="true" style="background:var(--color-bg-alt);line-height:0;overflow:hidden;height:60px;">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" width="100%" height="60"><polygon points="0,0 1200,0 1200,60 0,60" fill="var(--color-bg)"/></svg>
</div>

<!-- ── Process Steps ──────────────────────────────────────── -->
<section class="sod-process" aria-labelledby="sod-process-heading">
  <div class="sod-process__inner">
    <header class="sod-process__header" data-animate="fade-up">
      <div class="sod-detail__eyebrow" style="justify-content:center;">
        <i data-lucide="list-ordered" style="width:14px;height:14px;" aria-hidden="true"></i>
        Our Process
      </div>
      <h2 id="sod-process-heading" class="sod-process__heading">What Are the 4 Steps from Bare Ground to Green Lawn?</h2>
    </header>
    <div class="sod-process__steps">
      <div class="sod-process__step" data-animate="fade-up">
        <div class="sod-process__num">1</div>
        <h3 class="sod-process__step-title">Site Assessment &amp; Soil Test</h3>
        <p class="sod-process__step-text">We walk the property, assess drainage patterns, test soil pH, and identify areas needing topsoil or amendment.</p>
      </div>
      <div class="sod-process__step" data-animate="fade-up">
        <div class="sod-process__num">2</div>
        <h3 class="sod-process__step-title">Grade &amp; Soil Preparation</h3>
        <p class="sod-process__step-text">Rough grade corrected, 4" topsoil added where needed, tilled and raked to a firm, level seed bed ready for sod.</p>
      </div>
      <div class="sod-process__step" data-animate="fade-up">
        <div class="sod-process__num">3</div>
        <h3 class="sod-process__step-title">Sod Delivery &amp; Installation</h3>
        <p class="sod-process__step-text">Fresh sod delivered same morning, laid in tight-seamed rows staggered like brick, edges trimmed clean to beds and borders.</p>
      </div>
      <div class="sod-process__step" data-animate="fade-up">
        <div class="sod-process__num">4</div>
        <h3 class="sod-process__step-title">Rolling &amp; Watering Setup</h3>
        <p class="sod-process__step-text">Lawn roller eliminates air pockets, ensures root-to-soil contact. Watering plan reviewed with you before we leave the site.</p>
      </div>
    </div>
  </div>
</section>

<!-- ── Divider: bg → dark ─────────────────────────────────── -->
<div class="divider-wrap" aria-hidden="true" style="background:var(--color-bg);line-height:0;overflow:hidden;height:80px;">
  <svg viewBox="0 0 1200 80" preserveAspectRatio="none" width="100%" height="80"><path d="M0,40 C300,80 900,0 1200,40 L1200,80 L0,80 Z" fill="#0f1e2d"/></svg>
</div>

<!-- ── FAQ Section ────────────────────────────────────────── -->
<section class="sod-faq" aria-labelledby="sod-faq-heading">
  <div class="sod-faq__inner">
    <div class="sod-faq__eyebrow">Common Questions</div>
    <h2 id="sod-faq-heading" class="sod-faq__heading">What Are Sod Installation FAQs in Edgerton, WI?</h2>

    <?php foreach ($pageFaqs as $idx => $faq): ?>
    <div class="sod-faq__item" data-animate="fade-up">
      <h3 class="sod-faq__question"><?php echo htmlspecialchars($faq['q']); ?></h3>
      <p class="sod-faq__answer"><?php echo htmlspecialchars($faq['a']); ?></p>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- ── Divider: dark → bg-alt ────────────────────────────── -->
<div class="divider-wrap" aria-hidden="true" style="background:var(--color-bg-dark);line-height:0;overflow:hidden;height:60px;">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" width="100%" height="60"><polygon points="0,60 1200,0 1200,60" fill="#f4f7f9"/></svg>
</div>

<!-- ── Closing CTA ────────────────────────────────────────── -->
<section class="sod-cta-close" aria-labelledby="sod-close-heading">
  <div class="sod-cta-close__inner" data-animate="fade-up">
    <h2 id="sod-close-heading" class="sod-cta-close__heading">How Is Your New Lawn Just One Call Away?</h2>
    <p class="sod-cta-close__text">R.A.H. Solutions installs sod across Edgerton, Stoughton, Janesville, and Madison. Free estimates, local crew, and a watering plan that protects your investment from day one.</p>
    <a href="/contact" class="btn-primary" style="font-size:1.1rem;padding:var(--space-lg) var(--space-2xl);">Request Your Free Estimate</a>
    <div class="sod-cta-close__meta">
      <span><i data-lucide="shield-check" style="width:15px;height:15px;" aria-hidden="true"></i> Licensed &amp; Insured</span>
      <span><i data-lucide="clock" style="width:15px;height:15px;" aria-hidden="true"></i> Free Estimates</span>
      <span><i data-lucide="map-pin" style="width:15px;height:15px;" aria-hidden="true"></i> Edgerton-Based</span>
    </div>
    <p style="text-align:center;font-family:var(--font-body);font-size:var(--font-size-xs);color:var(--color-text-light);margin-top:var(--space-lg);">Last Updated: May 2026</p>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
