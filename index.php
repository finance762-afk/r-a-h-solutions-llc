<?php
// ============================================================
// R.A.H. Solutions, LLC — index.php
// Homepage  |  Phase 3
// ============================================================

$pageTitle       = 'Landscaping Services Edgerton WI';
$pageDescription = 'R.A.H. Solutions — professional landscaping, lawn care, hardscaping & concrete in Edgerton, WI. Family-owned & insured. Free estimates. Call (608) 501-5123.';
$canonicalUrl    = 'https://rahsolutionsllc.com';
// SEO: {"@context":"https://schema.org"} — schema and <link rel="canonical"> rendered via head.php
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963874866-f077by-471177305_122202492170208320_1592970065814584229_n.jpg';
$currentPage     = 'home';
$heroPreload     = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963874866-f077by-471177305_122202492170208320_1592970065814584229_n.jpg';
$useSwiper       = true;

// ── Page-specific schema markup (FAQPage + WebSite + AggregateRating) ──
$homepageFaqs = [
  [
    'q' => 'What landscaping services does R.A.H. Solutions offer in Edgerton, WI?',
    'a' => 'R.A.H. Solutions provides comprehensive landscaping in Edgerton, WI including landscape installation, hardscaping (patios, retaining walls, walkways), lawn maintenance, concrete services, shrub trimming, mulching, sod installation, spring and fall yard cleanup, year-round snow removal, and excavating services for residential and commercial properties.',
  ],
  [
    'q' => 'What areas of Southern Wisconsin does R.A.H. Solutions serve?',
    'a' => 'Our primary service area is Edgerton, WI and the surrounding region. We regularly serve Stoughton, Janesville, and Madison, covering most of Rock and Dane counties within a 50-mile radius of Edgerton.',
  ],
  [
    'q' => 'How much does a landscaping project typically cost in Edgerton?',
    'a' => 'Project costs vary by scope, property size, and materials. Lawn maintenance programs start around $40–$80 per visit, while full landscape installations range from $2,000 to $20,000 or more. R.A.H. Solutions provides free, no-obligation estimates — contact us to discuss your specific goals.',
  ],
  [
    'q' => 'Do you offer snow removal for Edgerton businesses and homeowners?',
    'a' => 'Yes. We offer reliable residential and commercial snow removal throughout Edgerton and surrounding areas. We handle driveways, parking lots, walkways, and commercial properties to keep your property safe and accessible all winter.',
  ],
  [
    'q' => 'How soon can R.A.H. Solutions start my landscaping project?',
    'a' => 'Scheduling depends on season and current workload. Urgent requests like spring cleanup or storm recovery are accommodated as quickly as possible. Larger landscape installations are typically scheduled 1–3 weeks out. Call us to discuss your timeline.',
  ],
  [
    'q' => 'Is R.A.H. Solutions licensed and insured to work in Wisconsin?',
    'a' => 'Yes, R.A.H. Solutions is fully licensed and insured to perform landscaping, concrete, and excavation work in Wisconsin. We maintain all required coverage to protect you, your property, and our crew on every project.',
  ],
];

$faqItems = [];
foreach ($homepageFaqs as $faq) {
  $faqItems[] = [
    '@type'          => 'Question',
    'name'           => $faq['q'],
    'acceptedAnswer' => [ '@type' => 'Answer', 'text' => $faq['a'] ],
  ];
}

$schemaMarkup = json_encode([
  '@context' => 'https://schema.org',
  '@graph'   => [
    [
      '@type'       => 'FAQPage',
      'mainEntity'  => $faqItems,
    ],
    [
      '@type'           => 'WebSite',
      'name'            => 'R.A.H. Solutions, LLC',
      'url'             => 'https://rahsolutionsllc.com',
      'potentialAction' => [
        '@type'       => 'SearchAction',
        'target'      => 'https://rahsolutionsllc.com/services?q={search_term_string}',
        'query-input' => 'required name=search_term_string',
      ],
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
/* ================================================================
   R.A.H. Solutions — index.php  |  Homepage Styles
   Techniques: C1.1 Ken Burns hero, C2 cascade, C3 dividers (3 styles),
               C4.1 radial glow, C4.2 diagonal gradient CTA,
               C6.1 asymmetric grid, C6.2 about split, C6.3 stats band,
               C6.4 glassmorphism cards, C6.5 process steps, C8 ticker,
               C9.1 mid CTA, C9.2 closing CTA
   Standard tier: 200+ lines required
================================================================ */

/* ─── Button Variants (homepage-specific) ─────────────────────── */
.btn-lg {
  padding: 17px var(--space-2xl);
  font-size: 0.9rem;
}
.btn-outline {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: transparent;
  color: rgba(255,255,255,0.9);
  font-family: var(--font-heading);
  font-size: 0.9rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  padding: 15px var(--space-2xl);
  border-radius: var(--radius-md);
  border: 2px solid rgba(255,255,255,0.4);
  transition: border-color var(--transition-fast), background var(--transition-fast), color var(--transition-fast);
  position: relative;
  overflow: hidden;
  cursor: pointer;
  white-space: nowrap;
}
.btn-outline:hover {
  border-color: rgba(255,255,255,0.85);
  background: rgba(255,255,255,0.08);
  color: #fff;
}

/* ─── C1.1 Hero — Full-Bleed Ken Burns ────────────────────────── */
.hero-home {
  min-height: 100vh;
  display: flex;
  align-items: center;
  position: relative;
  overflow: hidden;
  background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963874866-f077by-471177305_122202492170208320_1592970065814584229_n.jpg');
  background-size: 110%;
  background-position: center 35%;
  animation: kenburns-hero 24s ease-in-out infinite alternate;
}
@keyframes kenburns-hero {
  from { background-size: 110%; background-position: center 30%; }
  to   { background-size: 122%; background-position: center 45%; }
}
/* Brand-tinted gradient overlay (C1.1 ::before) */
.hero-home::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    150deg,
    rgba(var(--color-primary-rgb), 0.93) 0%,
    rgba(var(--color-primary-rgb), 0.78) 55%,
    rgba(var(--color-accent-rgb),  0.10) 100%
  );
  z-index: 1;
}
/* SVG noise texture (C1.1 ::after) */
.hero-home::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 1;
  pointer-events: none;
}
.hero-inner {
  position: relative;
  z-index: 2;
  width: 100%;
  padding: var(--space-4xl) 0 var(--space-3xl);
}

/* ─── C2 Hero Content Composition (cascade animation) ─────────── */
.hero-eyebrow-badge {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: rgba(var(--color-accent-rgb), 0.12);
  border: 1px solid rgba(var(--color-accent-rgb), 0.35);
  border-radius: 999px;
  padding: 7px var(--space-lg);
  font-family: var(--font-heading);
  font-size: 0.68rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  color: var(--color-accent);
  margin-bottom: var(--space-2xl);
  animation: fadeSlideDown 0.65s ease both;
}
.hero-title {
  font-size: clamp(2.8rem, 7vw, 5.2rem);
  font-weight: 800;
  line-height: 1.05;
  letter-spacing: -0.03em;
  color: #fff;
  text-wrap: balance;
  margin-bottom: var(--space-xl);
  animation: fadeSlideUp 0.65s ease 0.12s both;
  max-width: 18ch;
}
.gradient-text {
  background: linear-gradient(135deg, #ffffff 10%, var(--color-accent) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.hero-subtitle,
.hero-answer {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.75);
  line-height: 1.65;
  max-width: 50ch;
  margin-bottom: var(--space-2xl);
  animation: fadeSlideUp 0.65s ease 0.25s both;
}
.hero-actions {
  display: flex;
  align-items: center;
  gap: var(--space-md);
  flex-wrap: wrap;
  margin-bottom: var(--space-2xl);
  animation: fadeSlideUp 0.65s ease 0.38s both;
}
.hero-trust-row {
  display: flex;
  align-items: center;
  gap: var(--space-xl);
  flex-wrap: wrap;
  animation: fadeSlideUp 0.65s ease 0.50s both;
}
.hero-trust-item {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  color: rgba(255,255,255,0.65);
  font-family: var(--font-heading);
  font-size: 0.78rem;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.07em;
}
.hero-trust-item [data-lucide] { color: var(--color-accent); flex-shrink: 0; }
@keyframes fadeSlideDown {
  from { opacity: 0; transform: translateY(-14px); }
  to   { opacity: 1; transform: translateY(0); }
}
@keyframes fadeSlideUp {
  from { opacity: 0; transform: translateY(20px); }
  to   { opacity: 1; transform: translateY(0); }
}

/* ─── C8 Ticker Strip ─────────────────────────────────────────── */
.ticker-outer {
  background: var(--color-primary);
  overflow: hidden;
  padding: 14px 0;
  border-top: 2px solid var(--color-accent);
  border-bottom: 2px solid rgba(var(--color-accent-rgb), 0.2);
}
.ticker-track {
  display: flex;
  white-space: nowrap;
}
.ticker-track-inner {
  display: flex;
  white-space: nowrap;
  animation: ticker-scroll 42s linear infinite;
  flex-shrink: 0;
}
.ticker-track-inner:hover { animation-play-state: paused; }
.ticker-item {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  padding: 0 var(--space-2xl);
  font-family: var(--font-heading);
  font-size: 0.7rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  color: rgba(255,255,255,0.82);
  flex-shrink: 0;
}
.ticker-item [data-lucide] { color: var(--color-accent); }
.ticker-sep { color: var(--color-accent); font-size: 0.75rem; padding: 0 var(--space-sm); }
@keyframes ticker-scroll {
  from { transform: translateX(0); }
  to   { transform: translateX(-50%); }
}

/* ─── Numbered Section & Divider Utilities ────────────────────── */
.section-num-label {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  font-family: var(--font-heading);
  font-size: 0.68rem;
  font-weight: 700;
  letter-spacing: 3px;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-md);
}
.section-num-label::before {
  content: attr(data-num);
  display: inline-block;
  font-size: 0.65rem;
  opacity: 0.6;
}
.section-header {
  margin-bottom: var(--space-3xl);
}
.section-header h2 {
  color: var(--color-text);
  margin-bottom: var(--space-md);
  text-wrap: balance;
}
.section-header p {
  font-size: var(--font-size-lg);
  max-width: 55ch;
  line-height: 1.7;
}

/* ─── C3 Section Dividers (3 styles rotated) ─────────────────── */
.divider-diagonal  { height: 60px; overflow: hidden; line-height: 0; display: block; }
.divider-wave      { height: 80px; overflow: hidden; line-height: 0; display: block; }
.divider-parallelo { height: 80px; overflow: hidden; line-height: 0; display: block; }
.divider-torn      { height: 60px; overflow: hidden; line-height: 0; display: block; }
.divider-diagonal svg,
.divider-wave svg,
.divider-parallelo svg,
.divider-torn svg  { display: block; width: 100%; height: 100%; }

/* ─── C6.1 Asymmetric Services Grid ──────────────────────────── */
.services-section {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
}
.services-grid {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr;
  gap: var(--space-xl);
  margin-bottom: var(--space-2xl);
}
/* Featured card: dark gradient, 2 rows tall */
.service-card-featured {
  grid-row: span 2;
  background: linear-gradient(155deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  color: #fff;
  border-radius: var(--radius-lg);
  padding: var(--space-2xl);
  position: relative;
  overflow: hidden;
  min-height: 440px;
  box-shadow: var(--shadow-xl);
  transition: transform var(--transition-base);
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
}
.service-card-featured:hover { transform: translateY(-6px); box-shadow: var(--shadow-card-hover); }
/* Decorative accent corner */
.service-card-featured::before {
  content: '';
  position: absolute;
  top: -80px; right: -80px;
  width: 240px; height: 240px;
  border-radius: 50%;
  background: var(--color-accent);
  opacity: 0.06;
}
.service-card-featured::after {
  content: '';
  position: absolute;
  bottom: -40px; left: -40px;
  width: 180px; height: 180px;
  border-radius: 50%;
  background: var(--color-accent);
  opacity: 0.04;
}
.featured-icon {
  width: 56px; height: 56px;
  background: rgba(var(--color-accent-rgb), 0.15);
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: var(--space-lg);
  color: var(--color-accent);
  flex-shrink: 0;
}
.featured-content { position: relative; z-index: 2; }
.featured-content h3 {
  color: #fff;
  font-size: clamp(1.4rem, 2.5vw, 1.9rem);
  margin-bottom: var(--space-md);
  text-wrap: balance;
}
.featured-content p {
  color: rgba(255,255,255,0.7);
  font-size: var(--font-size-base);
  margin-bottom: var(--space-lg);
}
.featured-checklist {
  display: flex;
  flex-direction: column;
  gap: var(--space-sm);
  margin-bottom: var(--space-xl);
}
.featured-checklist li {
  display: flex;
  align-items: flex-start;
  gap: var(--space-sm);
  color: rgba(255,255,255,0.72);
  font-size: var(--font-size-sm);
  line-height: 1.5;
}
.featured-checklist li [data-lucide] { color: var(--color-accent); flex-shrink: 0; margin-top: 2px; }
.featured-cta {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-accent);
  color: var(--color-primary-dark);
  font-family: var(--font-heading);
  font-size: 0.78rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  padding: 11px var(--space-xl);
  border-radius: var(--radius-md);
  transition: background var(--transition-fast), transform var(--transition-fast);
}
.featured-cta:hover { background: #fff; transform: translateX(3px); }

/* Standard service cards — premium polish */
.service-card-std {
  background: var(--color-bg);
  border-radius: var(--radius-lg);
  padding: var(--space-xl);
  border: 1px solid rgba(var(--color-primary-rgb), 0.08);
  box-shadow: var(--shadow-card);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  display: flex;
  flex-direction: column;
  overflow: hidden;
}
.service-card-std:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-card-hover);
}
.card-icon {
  width: 56px; height: 56px;
  background: rgba(var(--color-primary-rgb), 0.08);
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-primary);
  margin-bottom: var(--space-lg);
  transition: background var(--transition-fast), color var(--transition-fast);
  flex-shrink: 0;
}
.service-card-std:hover .card-icon {
  background: rgba(var(--color-accent-rgb), 0.12);
  color: var(--color-accent);
}
.service-card-std h3 {
  font-family: var(--font-heading);
  font-size: 1.1rem;
  font-weight: 700;
  margin-bottom: var(--space-sm);
  color: var(--color-primary);
  text-wrap: balance;
  letter-spacing: -0.01em;
}
.service-card-std p {
  font-size: var(--font-size-sm);
  line-height: 1.65;
  color: var(--color-text-light);
  flex: 1;
  margin-bottom: var(--space-lg);
}
.card-link {
  display: inline-flex;
  align-items: center;
  gap: var(--space-xs);
  color: var(--color-primary);
  font-family: var(--font-heading);
  font-size: 0.78rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  transition: color var(--transition-fast), gap 0.2s ease;
  margin-top: auto;
  padding-top: var(--space-md);
  border-top: 1px solid rgba(var(--color-primary-rgb), 0.06);
  width: 100%;
}
.card-link [data-lucide],
.card-link i { transition: transform 0.2s ease; }
.service-card-std:hover .card-link { color: var(--color-accent); gap: var(--space-sm); }
.service-card-std:hover .card-link [data-lucide],
.service-card-std:hover .card-link i { transform: translateX(3px); }

/* ─── C4.1 + C6.3 Stats Section ──────────────────────────────── */
.stats-section {
  background: var(--color-primary);
  padding: var(--space-4xl) 0;
  position: relative;
  overflow: hidden;
}
/* Radial glow (C4.1) */
.stats-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 50% 50%, rgba(var(--color-accent-rgb), 0.15) 0%, transparent 65%);
  pointer-events: none;
}
.stats-row {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
  text-align: center;
  position: relative;
  z-index: 2;
}
.stat-block {
  padding: var(--space-xl) var(--space-md);
  border-right: 1px solid rgba(255,255,255,0.08);
}
.stat-block:last-child { border-right: none; }
.stat-number-large {
  font-family: var(--font-heading);
  font-size: clamp(2.6rem, 5vw, 3.8rem);
  font-weight: 900;
  color: #fff;
  line-height: 1;
  margin-bottom: var(--space-sm);
}
.stat-number-large .accent { color: var(--color-accent); }
.stat-label-text {
  font-family: var(--font-heading);
  font-size: 0.7rem;
  text-transform: uppercase;
  letter-spacing: 1.8px;
  color: rgba(255,255,255,0.5);
}

/* ─── C4.2 + C9.1 Mid-Page CTA Banner ────────────────────────── */
.cta-mid {
  padding: var(--space-4xl) 0;
  background: linear-gradient(135deg, var(--color-primary-dark) 0%, var(--color-primary) 55%, var(--color-secondary) 100%);
  text-align: center;
  position: relative;
  overflow: hidden;
}
.cta-mid::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.06;
  pointer-events: none;
}
.cta-mid .container { position: relative; z-index: 2; }
.cta-mid .eyebrow-solid {
  background: rgba(var(--color-accent-rgb), 0.15);
  color: var(--color-accent);
  border: 1px solid rgba(var(--color-accent-rgb), 0.3);
}
.cta-mid h2 {
  color: #fff;
  margin-bottom: var(--space-md);
  text-wrap: balance;
}
.cta-mid p {
  color: rgba(255,255,255,0.72);
  margin-bottom: var(--space-xl);
  max-width: 52ch;
  margin-inline: auto;
}
.cta-phone-display {
  display: block;
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 2.6rem);
  font-weight: 800;
  color: var(--color-accent);
  margin-bottom: var(--space-xl);
  letter-spacing: -0.02em;
  transition: color var(--transition-fast);
}
.cta-phone-display:hover { color: #fff; }

/* ─── C6.2 About Section — Overlapping Composition ───────────── */
.about-section {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.about-split {
  display: grid;
  grid-template-columns: 1.1fr 1fr;
  gap: var(--space-4xl);
  align-items: start;
}
.about-left { padding-top: var(--space-md); }
.about-left h2 { color: var(--color-text); margin-bottom: var(--space-xl); text-wrap: balance; }
.about-left .about-intro {
  font-size: var(--font-size-lg);
  line-height: 1.75;
  color: var(--color-text-light);
  margin-bottom: var(--space-lg);
}
.about-left .about-body {
  line-height: 1.75;
  color: var(--color-text-light);
  margin-bottom: var(--space-2xl);
}
.about-tags {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-sm);
  margin-bottom: var(--space-2xl);
}
.about-tag {
  display: inline-flex;
  align-items: center;
  gap: var(--space-xs);
  background: var(--color-light);
  color: var(--color-primary);
  font-family: var(--font-heading);
  font-size: 0.72rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  padding: var(--space-xs) var(--space-md);
  border-radius: 999px;
}
.about-tag [data-lucide] { color: var(--color-accent); }

/* Right side: image with overlapping stat badge (C6.2) */
.about-right {
  position: relative;
  padding: 0 var(--space-lg) var(--space-xl) 0;
}
.about-image-wrap {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: visible;
}
.about-img {
  width: 100%;
  aspect-ratio: 4/5;
  object-fit: cover;
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-xl);
  display: block;
}
/* Duotone treatment (C4.3) */
.about-image-wrap::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(to top, rgba(var(--color-primary-rgb), 0.35) 0%, transparent 50%);
  border-radius: var(--radius-lg);
  z-index: 1;
  pointer-events: none;
}
/* Overlapping stat badge */
.about-stat-badge {
  position: absolute;
  bottom: calc(-1 * var(--space-sm));
  right: var(--space-xs);
  background: var(--color-accent);
  color: var(--color-primary-dark);
  padding: var(--space-xl) var(--space-2xl);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-xl);
  text-align: center;
  min-width: 155px;
  z-index: 3;
}
.about-stat-badge .big-year {
  display: block;
  font-family: var(--font-heading);
  font-size: 3.2rem;
  font-weight: 900;
  line-height: 1;
  color: var(--color-primary-dark);
}
.about-stat-badge .year-label {
  display: block;
  font-family: var(--font-heading);
  font-size: 0.62rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  color: rgba(15,30,45,0.7);
  margin-top: var(--space-xs);
}

/* ─── C6.5 Process Steps ─────────────────────────────────────── */
.process-steps {
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}
.process-step {
  display: flex;
  align-items: flex-start;
  gap: var(--space-lg);
  padding: var(--space-md) var(--space-lg);
  background: var(--color-bg);
  border-radius: var(--radius-md);
  border-left: 3px solid transparent;
  transition: border-color var(--transition-fast), box-shadow var(--transition-fast), background var(--transition-fast);
}
.process-step:hover {
  border-left-color: var(--color-accent);
  box-shadow: var(--shadow-sm);
  background: rgba(var(--color-accent-rgb), 0.04);
}
.step-num {
  flex-shrink: 0;
  width: 38px; height: 38px;
  background: var(--color-primary);
  color: #fff;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: 0.8rem;
}
.step-content { flex: 1; }
.step-content h4 {
  color: var(--color-text);
  font-size: 1rem;
  margin-bottom: var(--space-xs);
  text-wrap: balance;
}
.step-content p {
  font-size: var(--font-size-sm);
  line-height: 1.6;
  color: var(--color-text-light);
}

/* ─── C6.4 Reviews Section — Glassmorphism ────────────────────── */
.reviews-section {
  background: var(--color-bg-dark);
  padding: var(--space-4xl) 0;
  position: relative;
  overflow: hidden;
}
/* Signature section: radial glow + dark glass cards */
.reviews-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 30% 60%, rgba(var(--color-accent-rgb), 0.09) 0%, transparent 60%);
  pointer-events: none;
}
.reviews-section .section-header h2 { color: #fff; }
.reviews-section .section-header p  { color: rgba(255,255,255,0.6); }
.reviews-section .section-num-label { position: relative; z-index: 2; }
.reviews-section .section-header { position: relative; z-index: 2; }
.reviews-swiper { position: relative; z-index: 2; }

/* Glassmorphism review cards (C6.4) */
.review-card {
  background: rgba(255,255,255,0.05);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  border: 1px solid rgba(255,255,255,0.09);
  border-radius: var(--radius-lg);
  padding: var(--space-xl);
  height: 100%;
  display: flex;
  flex-direction: column;
}
.review-stars {
  display: flex;
  gap: 3px;
  margin-bottom: var(--space-md);
  color: var(--color-accent);
}
.review-quote {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.18);
  line-height: 1;
  margin-bottom: var(--space-sm);
  font-family: Georgia, serif;
}
.review-text {
  font-size: var(--font-size-base);
  line-height: 1.7;
  color: rgba(255,255,255,0.75);
  flex: 1;
  margin-bottom: var(--space-xl);
}
.review-author {
  border-top: 1px solid rgba(255,255,255,0.08);
  padding-top: var(--space-md);
}
.review-name {
  font-family: var(--font-heading);
  font-size: 0.85rem;
  font-weight: 700;
  color: #fff;
  margin-bottom: var(--space-xs);
}
.review-meta {
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.4);
}
.review-meta .service-tag {
  color: var(--color-accent);
  font-size: 0.7rem;
  font-family: var(--font-heading);
  text-transform: uppercase;
  letter-spacing: 0.08em;
}

/* Badge strip */
.review-badge-strip {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: var(--space-xl);
  margin-top: var(--space-2xl);
  flex-wrap: wrap;
  position: relative;
  z-index: 2;
}
.review-badge {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  background: rgba(255,255,255,0.06);
  border: 1px solid rgba(255,255,255,0.1);
  border-radius: var(--radius-md);
  padding: var(--space-md) var(--space-xl);
  color: rgba(255,255,255,0.7);
  font-family: var(--font-heading);
  font-size: 0.8rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.08em;
}
.review-badge [data-lucide] { color: var(--color-accent); }

/* Swiper navigation */
.swiper-button-prev,
.swiper-button-next {
  color: var(--color-accent) !important;
}
.swiper-pagination-bullet-active {
  background: var(--color-accent) !important;
}

/* ─── FAQ Section ─────────────────────────────────────────────── */
.faq-section {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
}
.faq-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-md);
}
.faq-item {
  background: var(--color-bg-alt);
  border-radius: var(--radius-md);
  overflow: hidden;
  border: 1px solid transparent;
  transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
}
.faq-item:hover,
.faq-item.faq-open {
  border-color: rgba(var(--color-accent-rgb), 0.25);
  box-shadow: var(--shadow-md);
}
.faq-question {
  display: flex;
  align-items: flex-start;
  gap: var(--space-md);
  padding: var(--space-xl);
  cursor: pointer;
  transition: background var(--transition-fast);
}
.faq-question:hover { background: rgba(var(--color-accent-rgb), 0.04); }
.faq-question [data-lucide] {
  color: var(--color-accent);
  flex-shrink: 0;
  margin-top: 3px;
}
.faq-question-text {
  font-family: var(--font-heading);
  font-size: 1rem;
  font-weight: 600;
  color: var(--color-text);
  line-height: 1.3;
  text-wrap: balance;
}
.faq-answer {
  max-height: 0;
  overflow: hidden;
  transition: max-height var(--transition-slow);
}
.faq-item.faq-open .faq-answer { max-height: 400px; }
.faq-answer p {
  padding: 0 var(--space-xl) var(--space-xl) calc(var(--space-xl) + 24px + var(--space-md));
  font-size: var(--font-size-sm);
  line-height: 1.75;
  color: var(--color-text-light);
}

/* ─── Photo Gallery Section ──────────────────────────────────── */
.gallery-section {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.gallery-filters {
  display: flex;
  gap: var(--space-sm);
  flex-wrap: wrap;
  justify-content: center;
  margin-bottom: var(--space-2xl);
}
.gallery-filter-btn {
  padding: 9px var(--space-lg);
  border-radius: 999px;
  border: 2px solid var(--color-border);
  background: transparent;
  color: var(--color-text-light);
  font-family: var(--font-heading);
  font-size: 0.72rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  cursor: pointer;
  transition: background var(--transition-fast), border-color var(--transition-fast), color var(--transition-fast);
}
.gallery-filter-btn:hover {
  background: var(--color-primary);
  border-color: var(--color-primary);
  color: #fff;
}
.gallery-filter-btn.active {
  background: var(--color-accent);
  border-color: var(--color-accent);
  color: var(--color-primary-dark);
}
.gallery-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-md);
}
.gallery-item {
  position: relative;
  border-radius: var(--radius-md);
  overflow: hidden;
  aspect-ratio: 4 / 3;
  cursor: pointer;
  transition: opacity var(--transition-base), transform var(--transition-base);
}
.gallery-item.gallery-hidden {
  display: none;
}
.gallery-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform var(--transition-slow);
}
.gallery-item:hover img {
  transform: scale(1.07);
}
.gallery-item-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(to top, rgba(15,30,45,0.78) 0%, transparent 55%);
  opacity: 0;
  transition: opacity var(--transition-base);
  display: flex;
  align-items: flex-end;
  padding: var(--space-md);
}
.gallery-item:hover .gallery-item-overlay {
  opacity: 1;
}
.gallery-item-label {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  color: #fff;
  font-family: var(--font-heading);
  font-size: 0.75rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.08em;
}
.gallery-item-label [data-lucide] { color: var(--color-accent); flex-shrink: 0; }
.gallery-cta-row {
  text-align: center;
  margin-top: var(--space-2xl);
}
@media (max-width: 1023px) {
  .gallery-grid { grid-template-columns: repeat(3, 1fr); }
}
@media (max-width: 767px) {
  .gallery-grid { grid-template-columns: repeat(2, 1fr); }
  .gallery-filters { gap: var(--space-xs); }
  .gallery-filter-btn { font-size: 0.68rem; padding: 7px var(--space-md); }
}

/* ─── C9.2 Closing CTA ─────────────────────────────────────────── */
.closing-cta {
  background: var(--color-primary);
  padding: var(--space-4xl) 0;
  text-align: center;
  position: relative;
  overflow: hidden;
}
/* Radial glow from top */
.closing-cta::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 50% 0%, rgba(var(--color-accent-rgb), 0.22) 0%, transparent 65%);
  pointer-events: none;
}
.closing-cta .container { position: relative; z-index: 2; }
.closing-cta h2 { color: #fff; margin-bottom: var(--space-lg); text-wrap: balance; }
.closing-cta p  {
  color: rgba(255,255,255,0.65);
  max-width: 50ch;
  margin-inline: auto;
  margin-bottom: var(--space-2xl);
  font-size: var(--font-size-lg);
  line-height: 1.7;
}
.closing-cta-actions {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: var(--space-md);
  flex-wrap: wrap;
}

/* ─── Responsive Breakpoints ──────────────────────────────────── */
@media (max-width: 1023px) {
  .services-grid {
    grid-template-columns: 1fr 1fr;
  }
  .service-card-featured {
    grid-row: span 1;
    grid-column: 1 / -1;
    min-height: 320px;
  }
  .stats-row {
    grid-template-columns: repeat(2, 1fr);
  }
  .stat-block {
    border-right: none;
    border-bottom: 1px solid rgba(255,255,255,0.08);
    padding-bottom: var(--space-xl);
  }
  .stat-block:nth-child(odd)     { border-right: 1px solid rgba(255,255,255,0.08); }
  .stat-block:nth-last-child(-n+2) { border-bottom: none; }
  .about-split {
    grid-template-columns: 1fr;
    gap: var(--space-3xl);
  }
  .about-right { padding: 0; }
  .about-img   { aspect-ratio: 16/9; }
}
@media (max-width: 767px) {
  .hero-title { font-size: clamp(2.4rem, 8vw, 3.2rem); }
  .hero-subtitle,
  .hero-answer { font-size: var(--font-size-base); }
  .hero-actions { flex-direction: column; align-items: stretch; }
  .hero-actions .btn-lg,
  .hero-actions .btn-outline { text-align: center; justify-content: center; }
  .hero-trust-row { gap: var(--space-lg); }
  .hero-trust-item { font-size: 0.7rem; }
  .services-grid { grid-template-columns: 1fr; }
  .service-card-featured { min-height: 280px; }
  .stats-row { grid-template-columns: repeat(2, 1fr); }
  .faq-grid { grid-template-columns: 1fr; }
  .about-stat-badge {
    position: static;
    display: inline-block;
    margin-top: var(--space-lg);
  }
  .about-image-wrap { padding: 0; }
  .closing-cta-actions { flex-direction: column; align-items: stretch; }
  .closing-cta-actions .btn-primary { text-align: center; justify-content: center; }
  .review-badge-strip { gap: var(--space-md); }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

  <!-- ════════════════════════════════════════════════════════════
       HERO (C1.1 Ken Burns + C2 Cascade)
  ════════════════════════════════════════════════════════════ -->
  <section class="hero-home" aria-label="R.A.H. Solutions homepage hero">
    <div class="hero-inner">
      <div class="container">
        <div class="hero-grid">

          <div class="hero-content">

            <div class="hero-eyebrow-badge">
              <i data-lucide="shield-check" style="width:14px;height:14px;" aria-hidden="true"></i>
              Serving Edgerton, WI Since 2023
            </div>

            <h1 class="hero-title">
              The Outdoor Spaces <span class="gradient-text">Edgerton</span> Deserves
            </h1>

            <p class="hero-answer">
              Full-service landscaping, hardscaping, and year-round property care for homes and businesses across Southern Wisconsin — from first design to the final snowplow.
            </p>

            <div class="hero-actions">
              <a href="/contact" class="btn-primary btn-lg btn-magnetic">
                <i data-lucide="clipboard-list" style="width:18px;height:18px;" aria-hidden="true"></i>
                Get a Free Estimate
              </a>
              <a href="tel:6085015123" class="btn-outline btn-lg">
                <i data-lucide="phone" style="width:18px;height:18px;" aria-hidden="true"></i>
                (608) 501-5123
              </a>
            </div>

            <div class="hero-trust-row">
              <div class="hero-trust-item">
                <i data-lucide="shield-check" style="width:16px;height:16px;" aria-hidden="true"></i>
                Licensed &amp; Insured
              </div>
              <div class="hero-trust-item">
                <i data-lucide="calendar" style="width:16px;height:16px;" aria-hidden="true"></i>
                Est. 2023
              </div>
              <div class="hero-trust-item">
                <i data-lucide="star" style="width:16px;height:16px;" aria-hidden="true"></i>
                4.9 Google Rating
              </div>
              <div class="hero-trust-item">
                <i data-lucide="map-pin" style="width:16px;height:16px;" aria-hidden="true"></i>
                50-Mile Service Radius
              </div>
            </div>

          </div><!-- /.hero-content -->

          <!-- Hero Estimate Form -->
          <div class="hero-form-card">
            <!-- Formsubmit requires activation: first submission triggers a confirmation email to rahsolutionsllc2@gmail.com. The owner MUST click that link or all submissions are silently dropped. -->
            <form action="https://formsubmit.co/rahsolutionsllc2@gmail.com" method="POST">
              <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
              <input type="hidden" name="_next" value="https://rahsolutionsllc.com/thank-you">
              <input type="hidden" name="_cc" value="CustomerService@pageoneinsights.com">
              <input type="hidden" name="_subject" value="New Hero Estimate Request — R.A.H. Solutions">
              <input type="hidden" name="_template" value="table">
              <input type="hidden" name="_captcha" value="false">
              <input type="hidden" name="_consent_version" value="v2.1">
              <input type="hidden" name="_consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8'); ?>">

              <div class="hero-form-field">
                <input type="text" id="hero-name" name="name" placeholder=" " required autocomplete="name">
                <label for="hero-name">Your Name</label>
              </div>

              <div class="hero-form-field">
                <input type="tel" id="hero-phone" name="phone" placeholder=" " required autocomplete="tel">
                <label for="hero-phone">Phone Number</label>
              </div>

              <div class="hero-form-field">
                <input type="email" id="hero-email" name="email" placeholder=" " required autocomplete="email">
                <label for="hero-email">Email Address</label>
              </div>

              <div class="hero-form-field">
                <select id="hero-service" name="service" aria-label="Service Needed">
                  <option value="" disabled selected> </option>
                  <option value="lawn-maintenance">Lawn Maintenance</option>
                  <option value="landscape-installation">Landscape Installation</option>
                  <option value="hardscaping-services">Hardscaping Services</option>
                  <option value="concrete-services">Concrete Services</option>
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
                <label for="hero-service">Service Needed</label>
              </div>

              <label class="hero-form-consent">
                <input type="checkbox" name="terms_accepted" value="yes" required>
                <span>I agree to the <a href="/privacy-policy/">Privacy Policy</a> and <a href="/terms/">Terms of Service</a>.</span>
              </label>

              <button type="submit" class="hero-form-submit">Get My Free Estimate</button>
            </form>
          </div><!-- /.hero-form-card -->

        </div><!-- /.hero-grid -->
      </div><!-- /.container -->
    </div><!-- /.hero-inner -->
  </section><!-- /.hero-home -->

  <!-- ════════════════════════════════════════════════════════════
       C8 TICKER STRIP — proof/trust items
  ════════════════════════════════════════════════════════════ -->
  <div class="ticker-outer" aria-hidden="true" role="presentation">
    <div class="ticker-track">
      <!-- Block duplicated for seamless loop -->
      <div class="ticker-track-inner">
        <span class="ticker-item"><i data-lucide="check-circle" style="width:14px;height:14px;"></i> Licensed &amp; Insured</span>
        <span class="ticker-sep">✦</span>
        <span class="ticker-item"><i data-lucide="map-pin" style="width:14px;height:14px;"></i> Edgerton, WI</span>
        <span class="ticker-sep">✦</span>
        <span class="ticker-item"><i data-lucide="leaf" style="width:14px;height:14px;"></i> Landscape Installation</span>
        <span class="ticker-sep">✦</span>
        <span class="ticker-item"><i data-lucide="snowflake" style="width:14px;height:14px;"></i> Snow Removal</span>
        <span class="ticker-sep">✦</span>
        <span class="ticker-item"><i data-lucide="hammer" style="width:14px;height:14px;"></i> Hardscaping</span>
        <span class="ticker-sep">✦</span>
        <span class="ticker-item"><i data-lucide="star" style="width:14px;height:14px;"></i> 4.9 Google Rating</span>
        <span class="ticker-sep">✦</span>
        <span class="ticker-item"><i data-lucide="scissors" style="width:14px;height:14px;"></i> Lawn Maintenance</span>
        <span class="ticker-sep">✦</span>
        <span class="ticker-item"><i data-lucide="settings-2" style="width:14px;height:14px;"></i> Concrete Services</span>
        <span class="ticker-sep">✦</span>
        <span class="ticker-item"><i data-lucide="users" style="width:14px;height:14px;"></i> Family-Owned &amp; Operated</span>
        <span class="ticker-sep">✦</span>
        <span class="ticker-item"><i data-lucide="leaf" style="width:14px;height:14px;"></i> Serving Edgerton, Stoughton, Janesville &amp; Madison</span>
        <span class="ticker-sep">✦</span>
        <!-- Duplicate set for seamless loop -->
        <span class="ticker-item"><i data-lucide="check-circle" style="width:14px;height:14px;"></i> Licensed &amp; Insured</span>
        <span class="ticker-sep">✦</span>
        <span class="ticker-item"><i data-lucide="map-pin" style="width:14px;height:14px;"></i> Edgerton, WI</span>
        <span class="ticker-sep">✦</span>
        <span class="ticker-item"><i data-lucide="leaf" style="width:14px;height:14px;"></i> Landscape Installation</span>
        <span class="ticker-sep">✦</span>
        <span class="ticker-item"><i data-lucide="snowflake" style="width:14px;height:14px;"></i> Snow Removal</span>
        <span class="ticker-sep">✦</span>
        <span class="ticker-item"><i data-lucide="hammer" style="width:14px;height:14px;"></i> Hardscaping</span>
        <span class="ticker-sep">✦</span>
        <span class="ticker-item"><i data-lucide="star" style="width:14px;height:14px;"></i> 4.9 Google Rating</span>
        <span class="ticker-sep">✦</span>
        <span class="ticker-item"><i data-lucide="scissors" style="width:14px;height:14px;"></i> Lawn Maintenance</span>
        <span class="ticker-sep">✦</span>
        <span class="ticker-item"><i data-lucide="settings-2" style="width:14px;height:14px;"></i> Concrete Services</span>
        <span class="ticker-sep">✦</span>
        <span class="ticker-item"><i data-lucide="users" style="width:14px;height:14px;"></i> Family-Owned &amp; Operated</span>
        <span class="ticker-sep">✦</span>
        <span class="ticker-item"><i data-lucide="leaf" style="width:14px;height:14px;"></i> Serving Edgerton, Stoughton, Janesville &amp; Madison</span>
        <span class="ticker-sep">✦</span>
      </div>
    </div>
  </div>

  <!-- C3 Divider: Diagonal (bg → bg-alt) -->
  <div class="divider-diagonal" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none">
      <polygon fill="#f4f7f9" points="0,60 1200,0 1200,60"/>
    </svg>
  </div>

  <!-- ════════════════════════════════════════════════════════════
       SERVICES SECTION (numbered 01)  —  C6.1 Asymmetric Grid
  ════════════════════════════════════════════════════════════ -->
  <section class="services-section" id="services">
    <div class="container">

      <div class="section-header" data-animate="fade-up">
        <div class="section-num-label" data-num="01 /"> Our Services</div>
        <h2>What Services Does Your Property Need <span class="text-accent">Year-Round</span>?</h2>
        <p class="prose">From spring planting to winter snow removal, R.A.H. Solutions covers every season for Edgerton homes and businesses.</p>
      </div>

      <div class="services-grid" data-stagger>

        <!-- Featured: Landscape Installation -->
        <div class="service-card-featured" data-animate="fade-right">
          <div class="featured-content">
            <div class="featured-icon">
              <i data-lucide="shovel" style="width:28px;height:28px;" aria-hidden="true"></i>
            </div>
            <h3>Landscape Installation</h3>
            <p>Full outdoor transformations — plants, beds, grading, and features installed with precision. We bring the vision to life and leave nothing half-finished.</p>
            <ul class="featured-checklist">
              <li>
                <i data-lucide="check" style="width:14px;height:14px;" aria-hidden="true"></i>
                Plant &amp; tree installation for WI hardiness zones
              </li>
              <li>
                <i data-lucide="check" style="width:14px;height:14px;" aria-hidden="true"></i>
                Grading, drainage &amp; soil preparation
              </li>
              <li>
                <i data-lucide="check" style="width:14px;height:14px;" aria-hidden="true"></i>
                Mulch beds, edging &amp; landscape borders
              </li>
              <li>
                <i data-lucide="check" style="width:14px;height:14px;" aria-hidden="true"></i>
                Residential &amp; commercial properties
              </li>
            </ul>
            <a href="/services/landscape-installation" class="featured-cta">
              Learn More
              <i data-lucide="arrow-right" style="width:16px;height:16px;" aria-hidden="true"></i>
            </a>
          </div>
        </div><!-- /.service-card-featured -->

        <!-- Lawn Maintenance -->
        <div class="service-card-std card-tint-1" data-animate="fade-up">
          <div class="card-image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963879670-etljhr-474465615_122209560308208320_6377695377545475044_n.jpg" alt="Lawn maintenance services in Edgerton, WI" width="600" height="400" loading="lazy">
          </div>
          <div class="card-icon">
            <i data-lucide="scissors" style="width:22px;height:22px;" aria-hidden="true"></i>
          </div>
          <h3>Lawn Maintenance</h3>
          <p>Consistent mowing, edging, and seasonal care that keeps your turf healthy through Wisconsin's demanding growing season.</p>
          <a href="/services/lawn-maintenance" class="card-link">
            Learn More
            <i data-lucide="arrow-right" style="width:14px;height:14px;" aria-hidden="true"></i>
          </a>
        </div>

        <!-- Hardscaping Services -->
        <div class="service-card-std card-tint-2" data-animate="fade-up">
          <div class="card-image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963878224-9yylmf-474790582_122209560278208320_5110498035873152787_n.jpg" alt="Hardscaping patio installation in Edgerton, WI" width="600" height="400" loading="lazy">
          </div>
          <div class="card-icon">
            <i data-lucide="hammer" style="width:22px;height:22px;" aria-hidden="true"></i>
          </div>
          <h3>Hardscaping</h3>
          <p>Patios, retaining walls, walkways, and outdoor living features built to last — designed to handle Edgerton's freeze-thaw cycles.</p>
          <a href="/services/hardscaping-services" class="card-link">
            Learn More
            <i data-lucide="arrow-right" style="width:14px;height:14px;" aria-hidden="true"></i>
          </a>
        </div>

        <!-- Concrete Services -->
        <div class="service-card-std card-tint-3" data-animate="fade-up">
          <div class="card-image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963885204-c6dam2-475409956_122211163172208320_2104516663902467885_n.jpg" alt="Concrete driveway installation in Edgerton, WI" width="600" height="400" loading="lazy">
          </div>
          <div class="card-icon">
            <i data-lucide="settings-2" style="width:22px;height:22px;" aria-hidden="true"></i>
          </div>
          <h3>Concrete Services</h3>
          <p>Professional driveway, walkway, and patio concrete — installed right the first time with proper base preparation for Wisconsin winters.</p>
          <a href="/services/concrete-services" class="card-link">
            Learn More
            <i data-lucide="arrow-right" style="width:14px;height:14px;" aria-hidden="true"></i>
          </a>
        </div>

        <!-- Snow Removal -->
        <div class="service-card-std card-tint-1" data-animate="fade-up">
          <div class="card-image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963893874-ak4j6n-489926707_122226629426208320_2862562131488466064_n.jpg" alt="Snow removal services in Edgerton, WI" width="600" height="400" loading="lazy">
          </div>
          <div class="card-icon">
            <i data-lucide="snowflake" style="width:22px;height:22px;" aria-hidden="true"></i>
          </div>
          <h3>Snow Removal</h3>
          <p>Reliable plowing and clearing for residential driveways and commercial lots — so your property stays safe after every Wisconsin storm.</p>
          <a href="/services/snow-removal" class="card-link">
            Learn More
            <i data-lucide="arrow-right" style="width:14px;height:14px;" aria-hidden="true"></i>
          </a>
        </div>

        <!-- Shrub Trimming -->
        <div class="service-card-std card-tint-2" data-animate="fade-up">
          <div class="card-image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963896244-0unq77-495336544_122236025864208320_4129821399527851126_n.jpg" alt="Shrub trimming and pruning in Edgerton, WI" width="600" height="400" loading="lazy">
          </div>
          <div class="card-icon">
            <i data-lucide="scissors" style="width:22px;height:22px;" aria-hidden="true"></i>
          </div>
          <h3>Shrub Trimming</h3>
          <p>Expert shaping and trimming that keeps your shrubs healthy, structured, and looking sharp — part of any well-maintained Southern Wisconsin property.</p>
          <a href="/services/shrub-trimming" class="card-link">
            Learn More
            <i data-lucide="arrow-right" style="width:14px;height:14px;" aria-hidden="true"></i>
          </a>
        </div>

        <!-- Excavating Services -->
        <div class="service-card-std card-tint-3" data-animate="fade-up">
          <div class="card-image">
            <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963890974-0j1sut-486971190_122226629348208320_8096727509961542480_n.jpg" alt="Excavating and site preparation in Edgerton, WI" width="600" height="400" loading="lazy">
          </div>
          <div class="card-icon">
            <i data-lucide="truck" style="width:22px;height:22px;" aria-hidden="true"></i>
          </div>
          <h3>Excavating Services</h3>
          <p>Site prep, grading, and drainage excavation for landscaping and construction projects — the groundwork that determines everything above it.</p>
          <a href="/services/excavating-services" class="card-link">
            Learn More
            <i data-lucide="arrow-right" style="width:14px;height:14px;" aria-hidden="true"></i>
          </a>
        </div>

      </div><!-- /.services-grid -->

      <div style="text-align:center;" data-animate="fade-up">
        <a href="/services" class="btn-secondary">
          <i data-lucide="grid-3x3" style="width:16px;height:16px;" aria-hidden="true"></i>
          View All Services
        </a>
      </div>

    </div><!-- /.container -->
  </section>

  <!-- C3 Divider: Stacked Parallelograms (bg → primary) -->
  <div class="divider-parallelo" aria-hidden="true">
    <svg viewBox="0 0 1200 80" preserveAspectRatio="none">
      <polygon fill="rgba(26,43,60,0.25)" points="0,20 1200,40 1200,80 0,80"/>
      <polygon fill="#1a2b3c"             points="0,40 1200,20 1200,80 0,80"/>
    </svg>
  </div>

  <!-- ════════════════════════════════════════════════════════════
       STATS SECTION — C4.1 Radial Glow + C6.3 Bands
  ════════════════════════════════════════════════════════════ -->
  <section class="stats-section" aria-label="R.A.H. Solutions by the numbers">
    <div class="container">
      <div class="stats-row">

        <div class="stat-block" data-animate="scale-in">
          <div class="stat-number-large">
            <span data-counter="3" data-suffix="+">3+</span>
          </div>
          <div class="stat-label-text">Years Serving Southern WI</div>
        </div>

        <div class="stat-block" data-animate="scale-in">
          <div class="stat-number-large">
            <span data-counter="250" data-suffix="+">250+</span>
          </div>
          <div class="stat-label-text">Projects Completed</div>
        </div>

        <div class="stat-block" data-animate="scale-in">
          <div class="stat-number-large">
            <span class="accent">4.9</span>
          </div>
          <div class="stat-label-text">Google Rating</div>
        </div>

        <div class="stat-block" data-animate="scale-in">
          <div class="stat-number-large">
            <span data-counter="50" data-suffix="mi">50mi</span>
          </div>
          <div class="stat-label-text">Service Radius</div>
        </div>

      </div>
    </div>
  </section>

  <!-- C3 Divider: Diagonal reverse (primary → bg-alt) -->
  <div class="divider-diagonal" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none">
      <polygon fill="#f4f7f9" points="0,0 1200,60 1200,60 0,60"/>
    </svg>
  </div>

  <!-- ════════════════════════════════════════════════════════════
       MID-PAGE CTA BANNER (CTA #2) — C4.2 + C9.1
  ════════════════════════════════════════════════════════════ -->
  <section class="cta-mid" aria-label="Contact R.A.H. Solutions">
    <div class="container" data-animate="fade-up">
      <div class="eyebrow-solid">Free Estimates Available</div>
      <h2>Why Does Your Property Need a <span class="text-accent">Custom Plan</span>, Not a Template?</h2>
      <p>Every yard in Edgerton is different — different soil, drainage, sun exposure, and goals. We assess yours before we propose anything.</p>
      <a href="tel:6085015123" class="cta-phone-display" aria-label="Call R.A.H. Solutions at (608) 501-5123">
        (608) 501-5123
      </a>
      <a href="/contact" class="btn-primary btn-lg btn-magnetic">
        <i data-lucide="clipboard-list" style="width:18px;height:18px;" aria-hidden="true"></i>
        Schedule a Free Walkthrough
      </a>
    </div>
  </section>

  <!-- C3 Divider: Curved Wave (bg-dark → bg-alt) -->
  <div class="divider-wave" aria-hidden="true" style="background:var(--color-secondary);">
    <svg viewBox="0 0 1200 80" preserveAspectRatio="none" style="display:block;">
      <path d="M0,40 C300,80 900,0 1200,40 L1200,80 L0,80 Z" fill="#f4f7f9"/>
    </svg>
  </div>

  <!-- ════════════════════════════════════════════════════════════
       ABOUT + PROCESS (numbered 02) — C6.2 Overlapping Composition
  ════════════════════════════════════════════════════════════ -->
  <section class="about-section" id="about">
    <div class="container">
      <div class="about-split">

        <!-- LEFT: Story + Process steps -->
        <div class="about-left">
          <div class="section-num-label" data-num="02 /" data-animate="fade-right">Our Story</div>

          <h2 data-animate="fade-right">Which Southern Wisconsin Landscaping Company Actually Knows Your Climate?</h2>

          <p class="about-intro prose" data-animate="fade-right">
            R.A.H. Solutions was founded in 2023 by Robert Harried right here in Edgerton — not as a franchise, not as a regional chain, but as a genuinely local business built on doing careful work for neighbors who deserve better than a mow-and-go.
          </p>

          <p class="about-body prose" data-animate="fade-right">
            Southern Wisconsin's freeze-thaw cycles, clay-heavy soils, and short growing windows demand a different approach than warmer climates get away with. From selecting cold-hardy plant varieties to timing spring cleanups around actual ground thaw — we factor in what the local environment actually does to your landscape, not just what it's supposed to do on paper.
          </p>

          <div class="about-tags" data-animate="fade-right">
            <span class="about-tag">
              <i data-lucide="home" style="width:12px;height:12px;" aria-hidden="true"></i>
              Family-Owned
            </span>
            <span class="about-tag">
              <i data-lucide="map-pin" style="width:12px;height:12px;" aria-hidden="true"></i>
              Locally Based, Edgerton WI
            </span>
            <span class="about-tag">
              <i data-lucide="shield-check" style="width:12px;height:12px;" aria-hidden="true"></i>
              Licensed &amp; Insured
            </span>
          </div>

          <div class="section-num-label" data-num="/" style="margin-top:var(--space-2xl);" data-animate="fade-right">Our Process</div>

          <div class="process-steps" data-stagger>
            <div class="process-step" data-animate="fade-up">
              <div class="step-num">01</div>
              <div class="step-content">
                <h4>Free On-Site Consultation</h4>
                <p>We visit your property, listen to your goals, and assess what the space actually needs — not what looks easiest to sell.</p>
              </div>
            </div>
            <div class="process-step" data-animate="fade-up">
              <div class="step-num">02</div>
              <div class="step-content">
                <h4>Custom Plan &amp; Clear Quote</h4>
                <p>We design a solution tailored to your property, budget, and Wisconsin's climate — no surprises when the invoice arrives.</p>
              </div>
            </div>
            <div class="process-step" data-animate="fade-up">
              <div class="step-num">03</div>
              <div class="step-content">
                <h4>Expert Execution</h4>
                <p>Our crew handles every detail with care and precision, treating your yard the same way we'd treat our own.</p>
              </div>
            </div>
            <div class="process-step" data-animate="fade-up">
              <div class="step-num">04</div>
              <div class="step-content">
                <h4>Final Walkthrough &amp; Your Approval</h4>
                <p>We walk the completed work with you and don't consider the job done until you're satisfied with what you see.</p>
              </div>
            </div>
          </div>

        </div><!-- /.about-left -->

        <!-- RIGHT: Photo + overlapping stat badge (C6.2) -->
        <div class="about-right" data-animate="wipe-right">
          <div class="about-image-wrap">
            <picture>
              <source srcset="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963902399-ex8uz9-470815796_122202491606208320_6104297074012647116_n.jpg" type="image/jpeg">
              <img
                src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963902399-ex8uz9-470815796_122202491606208320_6104297074012647116_n.jpg"
                alt="R.A.H. Solutions professional landscaping crew working in Edgerton, Wisconsin"
                class="about-img"
                width="600"
                height="750"
                loading="lazy"
              >
            </picture>
            <!-- Overlapping stat badge: the technique element -->
            <div class="about-stat-badge">
              <span class="big-year">2023</span>
              <span class="year-label">Est. in Edgerton</span>
            </div>
          </div>
        </div><!-- /.about-right -->

      </div><!-- /.about-split -->
    </div><!-- /.container -->
  </section>

  <!-- C3 Divider: Torn Paper (bg-alt → bg-dark) -->
  <div class="divider-torn" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none">
      <path d="M0,60 L0,38 L60,40 L120,32 L200,44 L280,30 L360,46 L460,36 L540,44 L640,28 L740,42 L840,33 L940,47 L1040,30 L1140,42 L1200,36 L1200,60 Z" fill="#0f1e2d"/>
    </svg>
  </div>

  <!-- ════════════════════════════════════════════════════════════
       REVIEWS (numbered 03) — Signature Section: C6.4 Glassmorphism
  ════════════════════════════════════════════════════════════ -->
  <section class="reviews-section" id="reviews">
    <div class="container">

      <div class="section-num-label" data-num="03 /" data-animate="fade-up">Client Reviews</div>

      <div class="section-header" data-animate="fade-up">
        <h2>What Are Edgerton Homeowners Saying About Us?</h2>
        <p>Real feedback from real neighbors across Southern Wisconsin.</p>
      </div>

      <!-- Swiper Reviews Carousel -->
      <div class="swiper reviews-swiper" data-animate="fade-up">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="review-card">
              <div class="review-stars" aria-label="5 out of 5 stars">
                <i data-lucide="star" style="width:16px;height:16px;fill:currentColor;" aria-hidden="true"></i>
                <i data-lucide="star" style="width:16px;height:16px;fill:currentColor;" aria-hidden="true"></i>
                <i data-lucide="star" style="width:16px;height:16px;fill:currentColor;" aria-hidden="true"></i>
                <i data-lucide="star" style="width:16px;height:16px;fill:currentColor;" aria-hidden="true"></i>
                <i data-lucide="star" style="width:16px;height:16px;fill:currentColor;" aria-hidden="true"></i>
              </div>
              <div class="review-quote">"</div>
              <p class="review-text">Robert and his crew completely transformed our backyard. The retaining wall, new sod, and plantings all turned out better than the design we discussed. They treated our yard like it was their own.</p>
              <div class="review-author">
                <div class="review-name">Sarah M.</div>
                <div class="review-meta">
                  Edgerton, WI &nbsp;·&nbsp;
                  <span class="service-tag">Landscape Installation</span>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="review-card">
              <div class="review-stars" aria-label="5 out of 5 stars">
                <i data-lucide="star" style="width:16px;height:16px;fill:currentColor;" aria-hidden="true"></i>
                <i data-lucide="star" style="width:16px;height:16px;fill:currentColor;" aria-hidden="true"></i>
                <i data-lucide="star" style="width:16px;height:16px;fill:currentColor;" aria-hidden="true"></i>
                <i data-lucide="star" style="width:16px;height:16px;fill:currentColor;" aria-hidden="true"></i>
                <i data-lucide="star" style="width:16px;height:16px;fill:currentColor;" aria-hidden="true"></i>
              </div>
              <div class="review-quote">"</div>
              <p class="review-text">I've had other lawn services before and they always left things half-done. R.A.H. showed up on time, did a thorough job on our spring cleanup, and actually communicated throughout the process. Refreshing.</p>
              <div class="review-author">
                <div class="review-name">Mike T.</div>
                <div class="review-meta">
                  Stoughton, WI &nbsp;·&nbsp;
                  <span class="service-tag">Spring Yard Cleanup</span>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="review-card">
              <div class="review-stars" aria-label="5 out of 5 stars">
                <i data-lucide="star" style="width:16px;height:16px;fill:currentColor;" aria-hidden="true"></i>
                <i data-lucide="star" style="width:16px;height:16px;fill:currentColor;" aria-hidden="true"></i>
                <i data-lucide="star" style="width:16px;height:16px;fill:currentColor;" aria-hidden="true"></i>
                <i data-lucide="star" style="width:16px;height:16px;fill:currentColor;" aria-hidden="true"></i>
                <i data-lucide="star" style="width:16px;height:16px;fill:currentColor;" aria-hidden="true"></i>
              </div>
              <div class="review-quote">"</div>
              <p class="review-text">New concrete driveway and front walkway — both look excellent. The prep work was done right, the pour was clean, and the finish held up through our first hard winter without a single crack. Would hire again.</p>
              <div class="review-author">
                <div class="review-name">Jennifer L.</div>
                <div class="review-meta">
                  Janesville, WI &nbsp;·&nbsp;
                  <span class="service-tag">Concrete Services</span>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="review-card">
              <div class="review-stars" aria-label="5 out of 5 stars">
                <i data-lucide="star" style="width:16px;height:16px;fill:currentColor;" aria-hidden="true"></i>
                <i data-lucide="star" style="width:16px;height:16px;fill:currentColor;" aria-hidden="true"></i>
                <i data-lucide="star" style="width:16px;height:16px;fill:currentColor;" aria-hidden="true"></i>
                <i data-lucide="star" style="width:16px;height:16px;fill:currentColor;" aria-hidden="true"></i>
                <i data-lucide="star" style="width:16px;height:16px;fill:currentColor;" aria-hidden="true"></i>
              </div>
              <div class="review-quote">"</div>
              <p class="review-text">Finally a lawn care company I can actually rely on. They come weekly, the cut is always even, and they edge the beds without me asking. My yard looks better this year than it ever has.</p>
              <div class="review-author">
                <div class="review-name">David R.</div>
                <div class="review-meta">
                  Edgerton, WI &nbsp;·&nbsp;
                  <span class="service-tag">Residential Lawn Care</span>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="review-card">
              <div class="review-stars" aria-label="5 out of 5 stars">
                <i data-lucide="star" style="width:16px;height:16px;fill:currentColor;" aria-hidden="true"></i>
                <i data-lucide="star" style="width:16px;height:16px;fill:currentColor;" aria-hidden="true"></i>
                <i data-lucide="star" style="width:16px;height:16px;fill:currentColor;" aria-hidden="true"></i>
                <i data-lucide="star" style="width:16px;height:16px;fill:currentColor;" aria-hidden="true"></i>
                <i data-lucide="star" style="width:16px;height:16px;fill:currentColor;" aria-hidden="true"></i>
              </div>
              <div class="review-quote">"</div>
              <p class="review-text">We use R.A.H. Solutions for snow removal at our commercial property in Madison. Not once this past winter did we have an issue. They showed up before business hours, cleared everything thoroughly, and were never a no-show.</p>
              <div class="review-author">
                <div class="review-name">Tom K.</div>
                <div class="review-meta">
                  Madison, WI &nbsp;·&nbsp;
                  <span class="service-tag">Commercial Snow Removal</span>
                </div>
              </div>
            </div>
          </div>

        </div><!-- /.swiper-wrapper -->
        <div class="swiper-pagination" style="margin-top:var(--space-xl);position:relative;"></div>
      </div><!-- /.swiper reviews-swiper -->

      <!-- Badge strip -->
      <div class="review-badge-strip" data-animate="fade-up">
        <div class="review-badge">
          <i data-lucide="star" style="width:18px;height:18px;fill:currentColor;" aria-hidden="true"></i>
          Google Reviews
        </div>
        <div class="review-badge">
          <i data-lucide="thumbs-up" style="width:18px;height:18px;" aria-hidden="true"></i>
          Facebook Recommendations
        </div>
        <div class="review-badge">
          <i data-lucide="shield-check" style="width:18px;height:18px;" aria-hidden="true"></i>
          Licensed &amp; Insured
        </div>
      </div>

    </div><!-- /.container -->
  </section>

  <!-- C3 Divider: Double Curved Wave (bg-dark → bg) -->
  <div class="divider-wave" aria-hidden="true" style="background:var(--color-bg-dark);">
    <svg viewBox="0 0 1200 100" preserveAspectRatio="none" style="display:block;">
      <path d="M0,30 C300,70 900,10 1200,40 L1200,100 L0,100 Z" fill="#ffffff" opacity="0.25"/>
      <path d="M0,50 C300,90 900,20 1200,60 L1200,100 L0,100 Z" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ════════════════════════════════════════════════════════════
       PHOTO GALLERY — Our Work
  ════════════════════════════════════════════════════════════ -->
  <section class="gallery-section" id="gallery" aria-label="R.A.H. Solutions project photo gallery">
    <div class="container">

      <div class="section-header" data-animate="fade-up">
        <div class="section-num-label" data-num="04 /"> Our Work</div>
        <h2>What Do Real Projects Look Like in Edgerton &amp; Surrounding Communities?</h2>
        <p class="prose">Browse completed work across Southern Wisconsin — from lawn transformations to hardscaping and concrete installations.</p>
      </div>

      <!-- Filter buttons -->
      <div class="gallery-filters" role="group" aria-label="Filter gallery by category" data-animate="fade-up">
        <button class="gallery-filter-btn active" data-filter="all" type="button">All Projects</button>
        <button class="gallery-filter-btn" data-filter="lawn" type="button">Lawn Care</button>
        <button class="gallery-filter-btn" data-filter="hardscaping" type="button">Hardscaping</button>
        <button class="gallery-filter-btn" data-filter="concrete" type="button">Concrete</button>
        <button class="gallery-filter-btn" data-filter="seasonal" type="button">Seasonal Cleanup</button>
        <button class="gallery-filter-btn" data-filter="snow" type="button">Snow Removal</button>
      </div>

      <!-- Gallery grid -->
      <div class="gallery-grid" id="gallery-grid" data-stagger>

        <div class="gallery-item" data-cat="\1" data-category="\1" data-animate="fade-up">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963874866-f077by-471177305_122202492170208320_1592970065814584229_n.jpg"
               alt="Professional landscaping and lawn care Edgerton WI — R.A.H. Solutions" width="600" height="450" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-label">
              <i data-lucide="scissors" style="width:14px;height:14px;" aria-hidden="true"></i>
              Lawn Care
            </span>
          </div>
        </div>

        <div class="gallery-item" data-cat="\1" data-category="\1" data-animate="fade-up">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963876972-9uvcid-474456407_122209245674208320_3275147450913393227_n.jpg"
               alt="Landscape installation outdoor transformation Edgerton Wisconsin" width="600" height="450" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-label">
              <i data-lucide="leaf" style="width:14px;height:14px;" aria-hidden="true"></i>
              Landscape Installation
            </span>
          </div>
        </div>

        <div class="gallery-item" data-cat="\1" data-category="\1" data-animate="fade-up">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963878224-9yylmf-474790582_122209560278208320_5110498035873152787_n.jpg"
               alt="Hardscaping patio installation Edgerton WI" width="600" height="450" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-label">
              <i data-lucide="hammer" style="width:14px;height:14px;" aria-hidden="true"></i>
              Hardscaping
            </span>
          </div>
        </div>

        <div class="gallery-item" data-cat="\1" data-category="\1" data-animate="fade-up">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963879670-etljhr-474465615_122209560308208320_6377695377545475044_n.jpg"
               alt="Lawn maintenance services Edgerton Wisconsin" width="600" height="450" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-label">
              <i data-lucide="scissors" style="width:14px;height:14px;" aria-hidden="true"></i>
              Lawn Maintenance
            </span>
          </div>
        </div>

        <div class="gallery-item" data-cat="\1" data-category="\1" data-animate="fade-up">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963882024-ohn2g8-474446326_122209560260208320_53140490767559634_n.jpg"
               alt="Mulching and garden bed maintenance Edgerton Wisconsin" width="600" height="450" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-label">
              <i data-lucide="leaf" style="width:14px;height:14px;" aria-hidden="true"></i>
              Mulching &amp; Garden Beds
            </span>
          </div>
        </div>

        <div class="gallery-item" data-cat="\1" data-category="\1" data-animate="fade-up">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1778785402115-conrete.webp"
               alt="Concrete services driveway installation Edgerton WI" width="600" height="450" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-label">
              <i data-lucide="layers" style="width:14px;height:14px;" aria-hidden="true"></i>
              Concrete Services
            </span>
          </div>
        </div>

        <div class="gallery-item" data-cat="\1" data-category="\1" data-animate="fade-up">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963886495-agh3u2-475671791_122211163124208320_6715996363556920497_n.jpg"
               alt="Spring yard cleanup services Edgerton Wisconsin" width="600" height="450" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-label">
              <i data-lucide="sun" style="width:14px;height:14px;" aria-hidden="true"></i>
              Spring Cleanup
            </span>
          </div>
        </div>

        <div class="gallery-item" data-cat="\1" data-category="\1" data-animate="fade-up">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963889584-ala069-486653046_122226629198208320_4781171488771186863_n.jpg"
               alt="Retaining wall hardscaping installation Edgerton Wisconsin" width="600" height="450" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-label">
              <i data-lucide="hammer" style="width:14px;height:14px;" aria-hidden="true"></i>
              Retaining Wall
            </span>
          </div>
        </div>

        <div class="gallery-item" data-cat="\1" data-category="\1" data-animate="fade-up">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1778785163845-o__2_.jpg"
               alt="Snow removal services Edgerton Wisconsin winter maintenance" width="600" height="450" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-label">
              <i data-lucide="snowflake" style="width:14px;height:14px;" aria-hidden="true"></i>
              Snow Removal
            </span>
          </div>
        </div>

        <div class="gallery-item" data-cat="\1" data-category="\1" data-animate="fade-up">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963895295-85rqf1-495734161_122236025852208320_5435639759042997660_n.jpg"
               alt="Fall yard cleanup leaf removal Edgerton WI" width="600" height="450" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-label">
              <i data-lucide="wind" style="width:14px;height:14px;" aria-hidden="true"></i>
              Fall Cleanup
            </span>
          </div>
        </div>

        <div class="gallery-item" data-cat="\1" data-category="\1" data-animate="fade-up">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963896244-0unq77-495336544_122236025864208320_4129821399527851126_n.jpg"
               alt="Shrub trimming and pruning services Edgerton Wisconsin" width="600" height="450" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-label">
              <i data-lucide="scissors" style="width:14px;height:14px;" aria-hidden="true"></i>
              Shrub Trimming
            </span>
          </div>
        </div>

        <div class="gallery-item" data-cat="\1" data-category="\1" data-animate="fade-up">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1778785335181-patio.webp"
               alt="Patio hardscape outdoor living space Edgerton Wisconsin" width="600" height="450" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-label">
              <i data-lucide="hammer" style="width:14px;height:14px;" aria-hidden="true"></i>
              Patio Installation
            </span>
          </div>
        </div>

        <div class="gallery-item" data-cat="\1" data-category="\1" data-animate="fade-up">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1778785225437-driveway.webp"
               alt="Concrete driveway installation Edgerton WI R.A.H. Solutions" width="600" height="450" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-label">
              <i data-lucide="layers" style="width:14px;height:14px;" aria-hidden="true"></i>
              Concrete Driveway
            </span>
          </div>
        </div>

        <div class="gallery-item" data-cat="\1" data-category="\1" data-animate="fade-up">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1778785308901-snow.webp"
               alt="Snow plowing winter services Edgerton WI R.A.H. Solutions" width="600" height="450" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-label">
              <i data-lucide="snowflake" style="width:14px;height:14px;" aria-hidden="true"></i>
              Snow Removal
            </span>
          </div>
        </div>

        <div class="gallery-item" data-cat="\1" data-category="\1" data-animate="fade-up">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1778785464766-unnamed.webp"
               alt="Landscape installation complete yard transformation Edgerton WI" width="600" height="450" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-label">
              <i data-lucide="leaf" style="width:14px;height:14px;" aria-hidden="true"></i>
              Landscape Installation
            </span>
          </div>
        </div>

        <div class="gallery-item" data-cat="\1" data-category="\1" data-animate="fade-up">
          <img src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963887692-btgk52-490023562_122226629156208320_4857034073232372127_n.jpg"
               alt="Commercial lawn care Edgerton WI R.A.H. Solutions" width="600" height="450" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-label">
              <i data-lucide="building-2" style="width:14px;height:14px;" aria-hidden="true"></i>
              Commercial Lawn Care
            </span>
          </div>
        </div>

      </div><!-- /#gallery-grid -->

      <div class="gallery-cta-row" data-animate="fade-up">
        <a href="/contact" class="btn-primary">
          <i data-lucide="clipboard-list" style="width:16px;height:16px;" aria-hidden="true"></i>
          Get a Free Estimate for Your Project
        </a>
      </div>

    </div><!-- /.container -->
  </section>

  <!-- C3 Divider: Diagonal (bg-alt → bg) -->
  <div class="divider-diagonal" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none">
      <polygon fill="#ffffff" points="0,60 1200,0 1200,60"/>
    </svg>
  </div>

  <!-- ════════════════════════════════════════════════════════════
       FAQ SECTION (numbered 04)
  ════════════════════════════════════════════════════════════ -->
  <section class="faq-section" id="faq">
    <div class="container">

      <div class="section-header prose-centered" style="text-align:center;" data-animate="fade-up">
        <div class="section-num-label" data-num="05 /">FAQ</div>
        <h2>What Are Common Questions About Our Landscaping Services?</h2>
        <p>Honest answers about what we do, where we work, and how we price.</p>
      </div>

      <div class="faq-grid">

        <?php foreach ($homepageFaqs as $i => $faq): ?>
        <div class="faq-item" data-animate="fade-up" role="listitem">
          <div class="faq-question" role="button" tabindex="0" aria-expanded="false" aria-controls="faq-answer-<?php echo $i; ?>">
            <i data-lucide="help-circle" style="width:18px;height:18px;" aria-hidden="true"></i>
            <span class="faq-question-text"><?php echo htmlspecialchars($faq['q'], ENT_QUOTES, 'UTF-8'); ?></span>
          </div>
          <div class="faq-answer" id="faq-answer-<?php echo $i; ?>">
            <p><?php echo htmlspecialchars($faq['a'], ENT_QUOTES, 'UTF-8'); ?></p>
          </div>
        </div>
        <?php endforeach; ?>

      </div><!-- /.faq-grid -->

      <div style="text-align:center;margin-top:var(--space-2xl);" data-animate="fade-up">
        <a href="/contact" class="btn-secondary">
          <i data-lucide="message-circle" style="width:16px;height:16px;" aria-hidden="true"></i>
          Ask Us Anything
        </a>
      </div>

    </div><!-- /.container -->
  </section>

  <!-- C3 Divider: Diagonal (bg → primary) -->
  <div class="divider-diagonal" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none">
      <polygon fill="#1a2b3c" points="0,60 0,0 1200,60"/>
    </svg>
  </div>

  <!-- ════════════════════════════════════════════════════════════
       CLOSING CTA (#3) — C9.2
  ════════════════════════════════════════════════════════════ -->
  <section class="closing-cta" aria-label="Get started with R.A.H. Solutions">
    <div class="container" data-animate="fade-up">

      <div class="eyebrow-solid" style="background:rgba(var(--color-accent-rgb),0.15);color:var(--color-accent);border:1px solid rgba(var(--color-accent-rgb),0.3);">
        Edgerton, WI &amp; Surrounding Area
      </div>

      <h2>Ready to Stop Guessing and Start <span class="text-accent">Growing</span>?</h2>

      <p>
        Stop wondering what your yard could look like. R.A.H. Solutions visits your property, lays out a clear plan, and gets to work — no pressure, no fluff, just honest work from a local crew that lives here too.
      </p>

      <div class="closing-cta-actions">
        <a href="/contact" class="btn-primary btn-lg btn-magnetic">
          <i data-lucide="clipboard-list" style="width:18px;height:18px;" aria-hidden="true"></i>
          Get Your Free Estimate
        </a>
        <a href="tel:6085015123" class="btn-outline btn-lg">
          <i data-lucide="phone" style="width:18px;height:18px;" aria-hidden="true"></i>
          Call (608) 501-5123
        </a>
      </div>

      <p style="margin-top:var(--space-xl);font-size:var(--font-size-sm);color:rgba(255,255,255,0.4);">
        Mon–Fri: 7:00am–5:00pm &nbsp;·&nbsp; Sat: 7:00am–12:00pm &nbsp;·&nbsp; Free On-Site Estimates
      </p>

    </div><!-- /.container -->
  </section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

<script>
// ── Gallery Filter ───────────────────────────────────────────────
document.addEventListener('DOMContentLoaded', function () {
  var filterBtns = document.querySelectorAll('.gallery-filter-btn');
  var galleryItems = document.querySelectorAll('.gallery-item');

  filterBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      // Update active state
      filterBtns.forEach(function (b) { b.classList.remove('active'); });
      btn.classList.add('active');

      var filter = btn.dataset.filter;

      galleryItems.forEach(function (item) {
        if (filter === 'all' || item.dataset.cat === filter) {
          item.classList.remove('gallery-hidden');
        } else {
          item.classList.add('gallery-hidden');
        }
      });
    });
  });
});

// ── Swiper: Reviews Carousel ─────────────────────────────────────
document.addEventListener('DOMContentLoaded', function () {
  if (typeof Swiper === 'undefined') return;

  new Swiper('.reviews-swiper', {
    slidesPerView: 1,
    spaceBetween: 24,
    loop: true,
    autoplay: {
      delay: 5000,
      pauseOnMouseEnter: true,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 24,
      },
    },
  });
});
</script>
