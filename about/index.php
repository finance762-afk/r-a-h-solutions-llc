<?php
// ============================================================
// About — R.A.H. Solutions, LLC
// ============================================================
$pageTitle       = 'About R.A.H. Solutions | Landscaping Edgerton, WI';
$pageDescription = 'Meet R.A.H. Solutions, LLC — Robert Harried\'s family-owned landscaping company serving Edgerton, Stoughton, Madison & Janesville since 2023. Licensed & insured.';
$canonicalUrl    = 'https://rahsolutionsllc.com/about';
// SEO: {"@context":"https://schema.org"} — schema and <link rel="canonical"> rendered via head.php
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963874866-f077by-471177305_122202492170208320_1592970065814584229_n.jpg';
$currentPage     = 'about';
$heroPreload     = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963876972-9uvcid-474456407_122209245674208320_3275147450913393227_n.jpg';

$schemaMarkup = json_encode([
  '@context' => 'https://schema.org',
  '@graph'   => [
    [
      '@type'           => 'BreadcrumbList',
      'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',  'item' => 'https://rahsolutionsllc.com'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'About', 'item' => 'https://rahsolutionsllc.com/about'],
      ],
    ],
    [
      '@type'        => 'Organization',
      '@id'          => 'https://rahsolutionsllc.com/#organization',
      'name'         => 'R.A.H. Solutions, LLC',
      'url'          => 'https://rahsolutionsllc.com',
      'logo'         => 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/logo/1776963748052-3tu1va-RAH_logo.jpg',
      'foundingDate' => '2023',
      'description'  => 'Family-owned landscaping company based in Edgerton, WI serving Rock and Dane County since 2023. Specializing in landscaping, lawn care, hardscaping, and snow removal.',
      'address'      => [
        '@type'           => 'PostalAddress',
        'streetAddress'   => '262 County Road W',
        'addressLocality' => 'Edgerton',
        'addressRegion'   => 'WI',
        'postalCode'      => '53534',
        'addressCountry'  => 'US',
      ],
      'contactPoint' => [
        '@type'       => 'ContactPoint',
        'telephone'   => '(608) 501-5123',
        'contactType' => 'customer service',
        'areaServed'  => 'Southern Wisconsin',
      ],
      'sameAs' => [
        'https://www.facebook.com/profile.php?id=61556249615787',
      ],
      'member' => [
        '@type'    => 'Person',
        '@id'      => 'https://rahsolutionsllc.com/about/#robert-harried',
        'name'     => 'Robert Harried',
        'jobTitle' => 'Owner & Founder',
        'worksFor' => ['@id' => 'https://rahsolutionsllc.com/#organization'],
      ],
    ],
    [
      '@type'       => 'Person',
      '@id'         => 'https://rahsolutionsllc.com/about/#robert-harried',
      'name'        => 'Robert Harried',
      'jobTitle'    => 'Owner & Founder',
      'worksFor'    => ['@id' => 'https://rahsolutionsllc.com/#organization'],
      'description' => 'Robert Harried founded R.A.H. Solutions, LLC in 2023 to bring honest, professional landscaping services to Edgerton and Rock County communities.',
      'address'     => [
        '@type'           => 'PostalAddress',
        'addressLocality' => 'Edgerton',
        'addressRegion'   => 'WI',
        'addressCountry'  => 'US',
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
    [
      '@type'      => 'FAQPage',
      'mainEntity' => [
        [
          '@type'          => 'Question',
          'name'           => 'Is R.A.H. Solutions licensed and insured in Wisconsin?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'Yes. R.A.H. Solutions, LLC is fully licensed and insured to operate in Wisconsin. We carry liability insurance and maintain all required credentials for landscaping, hardscaping, and concrete work in Rock and Dane County.',
          ],
        ],
        [
          '@type'          => 'Question',
          'name'           => 'What areas do you serve around Edgerton?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'R.A.H. Solutions serves Edgerton, Stoughton, Janesville, and Madison, WI — covering most of Rock County and southern Dane County within approximately a 50-mile radius of our Edgerton base.',
          ],
        ],
        [
          '@type'          => 'Question',
          'name'           => 'How long has R.A.H. Solutions been in business?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'R.A.H. Solutions was founded in 2023 by Robert Harried and has been operating for 3 years. In that time we\'ve built a 4.9-star rating across 47 reviews and expanded from residential mowing to a full-service landscaping and outdoor company.',
          ],
        ],
        [
          '@type'          => 'Question',
          'name'           => 'Do you handle both residential and commercial properties?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'Yes. R.A.H. Solutions works with homeowners across Edgerton and surrounding communities as well as commercial clients including businesses, industrial sites, and multi-property accounts.',
          ],
        ],
      ],
    ],
  ],
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<style>
/* ============================================================
   About Page — R.A.H. Solutions
   Prefix: .ab-
   ============================================================ */

/* ── Breadcrumb ───────────────────────────────────────────── */
.ab-breadcrumb {
  background: var(--color-bg-dark);
  padding: var(--space-sm) 0;
  position: relative;
  z-index: 10;
}
.ab-breadcrumb .container {
  display: flex;
  align-items: center;
}
.ab-breadcrumb-list {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  list-style: none;
  flex-wrap: wrap;
}
.ab-breadcrumb-list li {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.55);
}
.ab-breadcrumb-list li a {
  color: rgba(255,255,255,0.7);
  transition: color var(--transition-fast);
}
.ab-breadcrumb-list li a:hover {
  color: var(--color-accent);
}
.ab-breadcrumb-list li.current {
  color: var(--color-accent);
  font-weight: 600;
}
.ab-breadcrumb-sep {
  color: rgba(255,255,255,0.3);
}

/* ── Inner Hero ───────────────────────────────────────────── */
.ab-hero {
  position: relative;
  min-height: 60vh;
  display: flex;
  align-items: center;
  overflow: hidden;
  background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963876972-9uvcid-474456407_122209245674208320_3275147450913393227_n.jpg');
  background-size: cover;
  background-position: center;
  animation: ab-kenburns 22s ease-in-out infinite alternate;
}
@keyframes ab-kenburns {
  from { background-size: 110%; background-position: center 35%; }
  to   { background-size: 122%; background-position: center 55%; }
}
.ab-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    150deg,
    rgba(var(--color-primary-rgb), 0.92) 0%,
    rgba(var(--color-primary-rgb), 0.65) 55%,
    rgba(var(--color-accent-rgb), 0.18) 100%
  );
  z-index: 1;
}
.ab-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 2;
  pointer-events: none;
}
.ab-hero-inner {
  position: relative;
  z-index: 3;
  padding: var(--space-4xl) 0 var(--space-3xl);
}
.ab-eyebrow {
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
.ab-eyebrow::before {
  content: '';
  display: block;
  width: 28px;
  height: 2px;
  background: var(--color-accent);
  flex-shrink: 0;
}
.ab-hero h1 {
  font-family: var(--font-heading);
  font-size: clamp(2.4rem, 5.5vw, 4rem);
  font-weight: 700;
  line-height: 1.1;
  text-wrap: balance;
  letter-spacing: -0.02em;
  background: linear-gradient(135deg, #ffffff 0%, rgba(var(--color-accent-rgb), 0.9) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  margin-bottom: var(--space-md);
}
.ab-hero-sub {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.82);
  max-width: 52ch;
  line-height: 1.6;
  margin-bottom: var(--space-xl);
}
.ab-hero-badges {
  display: flex;
  gap: var(--space-lg);
  flex-wrap: wrap;
  align-items: center;
}
.ab-hero-badge {
  display: inline-flex;
  align-items: center;
  gap: var(--space-xs);
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.78);
  font-weight: 600;
}
.ab-hero-badge i {
  color: var(--color-accent);
}

/* ── Ticker ───────────────────────────────────────────────── */
.ab-ticker {
  background: var(--color-primary);
  padding: var(--space-sm) 0;
  overflow: hidden;
  position: relative;
}
.ab-ticker::before,
.ab-ticker::after {
  content: '';
  position: absolute;
  top: 0;
  bottom: 0;
  width: 80px;
  z-index: 2;
  pointer-events: none;
}
.ab-ticker::before {
  left: 0;
  background: linear-gradient(to right, var(--color-primary), transparent);
}
.ab-ticker::after {
  right: 0;
  background: linear-gradient(to left, var(--color-primary), transparent);
}
.ab-ticker-track {
  display: flex;
  width: max-content;
  animation: ab-ticker-scroll 28s linear infinite;
}
.ab-ticker-track:hover {
  animation-play-state: paused;
}
@keyframes ab-ticker-scroll {
  from { transform: translateX(0); }
  to   { transform: translateX(-50%); }
}
.ab-ticker-item {
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
.ab-ticker-sep {
  color: var(--color-accent);
  font-size: 1.1rem;
}

/* ── Section Dividers ─────────────────────────────────────── */
.ab-divider {
  display: block;
  line-height: 0;
  overflow: hidden;
}
.ab-divider svg {
  display: block;
  width: 100%;
}

/* ── Section Eyebrow ──────────────────────────────────────── */
.ab-section-eyebrow {
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
.ab-section-eyebrow::after {
  content: '';
  display: block;
  width: 24px;
  height: 2px;
  background: var(--color-accent);
}

/* ── Company Story Section ────────────────────────────────── */
.ab-story {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
}
.ab-story-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3xl);
  align-items: center;
}
.ab-story h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-lg);
}
.ab-story p {
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  line-height: 1.75;
  max-width: 65ch;
  margin-bottom: var(--space-md);
}
.ab-story-image {
  position: relative;
}
.ab-story-frame {
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
  position: relative;
}
.ab-story-frame::before {
  content: '';
  position: absolute;
  inset: 0;
  border: 3px solid rgba(var(--color-accent-rgb), 0.22);
  border-radius: var(--radius-lg);
  z-index: 2;
  pointer-events: none;
}
.ab-story-frame picture img {
  width: 100%;
  height: 460px;
  object-fit: cover;
  display: block;
  transition: transform var(--transition-slow);
}
.ab-story-frame:hover picture img {
  transform: scale(1.04);
}
.ab-story-badge {
  position: absolute;
  bottom: var(--space-lg);
  right: var(--space-lg);
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
.ab-story-corner {
  position: absolute;
  top: calc(var(--space-lg) * -1);
  left: calc(var(--space-lg) * -1);
  width: 80px;
  height: 80px;
  border-top: 4px solid var(--color-accent);
  border-left: 4px solid var(--color-accent);
  border-radius: var(--radius-sm) 0 0 0;
  pointer-events: none;
  z-index: 1;
}

/* ── Values Section ───────────────────────────────────────── */
.ab-values {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.ab-values-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.ab-values h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.ab-values-sub {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 52ch;
  margin: 0 auto;
  line-height: 1.6;
}
.ab-values-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-xl);
}
.ab-value-card {
  background: var(--color-bg);
  border-radius: var(--radius-lg);
  padding: var(--space-2xl) var(--space-xl);
  box-shadow: var(--shadow-card);
  border-left: 4px solid var(--color-accent);
  transition: transform var(--transition-base), box-shadow var(--transition-base), background var(--transition-base);
  position: relative;
  overflow: hidden;
}
.ab-value-card::after {
  content: '';
  position: absolute;
  bottom: 0;
  right: 0;
  width: 100px;
  height: 100px;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.06) 0%, transparent 70%);
  pointer-events: none;
}
.ab-value-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-xl);
  background: var(--color-primary);
}
.ab-value-card:hover .ab-value-title,
.ab-value-card:hover .ab-value-text {
  color: rgba(255,255,255,0.9);
}
.ab-value-icon {
  width: 54px;
  height: 54px;
  border-radius: var(--radius-md);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
  margin-bottom: var(--space-lg);
  transition: background var(--transition-base);
}
.ab-value-card:hover .ab-value-icon {
  background: rgba(var(--color-accent-rgb), 0.2);
}
.ab-value-title {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  font-weight: 700;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
  transition: color var(--transition-base);
}
.ab-value-text {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.7;
  transition: color var(--transition-base);
}

/* ── SIGNATURE: Full-Bleed Photo Stats ─────────────────────── */
.ab-photo-stats {
  position: relative;
  min-height: 480px;
  display: flex;
  align-items: center;
  overflow: hidden;
  background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963874866-f077by-471177305_122202492170208320_1592970065814584229_n.jpg');
  background-size: cover;
  background-position: center 40%;
}
.ab-photo-stats::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    to right,
    rgba(var(--color-primary-rgb), 0.94) 0%,
    rgba(var(--color-primary-rgb), 0.78) 50%,
    rgba(var(--color-primary-rgb), 0.55) 100%
  );
  z-index: 1;
}
.ab-photo-stats::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 2;
  pointer-events: none;
}
.ab-photo-stats-inner {
  position: relative;
  z-index: 3;
  padding: var(--space-4xl) 0;
  width: 100%;
}
.ab-stats-label {
  text-align: center;
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-2xl);
}
.ab-stats-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-xl);
}
.ab-stat-item {
  text-align: center;
  padding: var(--space-xl) var(--space-lg);
  border: 1px solid rgba(var(--color-accent-rgb), 0.2);
  border-radius: var(--radius-lg);
  background: rgba(255,255,255,0.04);
  backdrop-filter: blur(4px);
  -webkit-backdrop-filter: blur(4px);
  transition: border-color var(--transition-base), background var(--transition-base);
}
.ab-stat-item:hover {
  border-color: rgba(var(--color-accent-rgb), 0.45);
  background: rgba(var(--color-accent-rgb), 0.08);
}
.ab-stat-number {
  font-family: var(--font-heading);
  font-size: clamp(2.4rem, 5vw, 3.6rem);
  font-weight: 700;
  color: var(--color-accent);
  line-height: 1;
  margin-bottom: var(--space-xs);
  letter-spacing: -0.02em;
}
.ab-stat-label {
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.7);
  line-height: 1.4;
  max-width: 18ch;
  margin: 0 auto;
}

/* ── Trust / Certifications Strip ─────────────────────────── */
.ab-trust {
  padding: var(--space-3xl) 0;
  background: var(--color-bg);
}
.ab-trust-header {
  text-align: center;
  margin-bottom: var(--space-2xl);
}
.ab-trust h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.6rem, 3vw, 2.2rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
}
.ab-trust-strip {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-md);
  justify-content: center;
}
.ab-trust-badge {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-bg-alt);
  border: 1px solid rgba(var(--color-primary-rgb), 0.1);
  border-radius: var(--radius-md);
  padding: var(--space-md) var(--space-xl);
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  font-weight: 600;
  color: var(--color-primary);
  transition: border-color var(--transition-fast), box-shadow var(--transition-fast), transform var(--transition-fast);
}
.ab-trust-badge:hover {
  border-color: var(--color-accent);
  box-shadow: var(--shadow-card);
  transform: translateY(-2px);
}
.ab-trust-badge i {
  color: var(--color-accent);
  flex-shrink: 0;
}

/* ── Mid CTA Banner ───────────────────────────────────────── */
.ab-cta-mid {
  position: relative;
  padding: var(--space-3xl) 0;
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  overflow: hidden;
}
.ab-cta-mid::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
  z-index: 0;
}
.ab-cta-mid .container {
  position: relative;
  z-index: 1;
  text-align: center;
}
.ab-cta-eyebrow {
  display: inline-block;
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.ab-cta-mid h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 2.8rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: #ffffff;
  margin-bottom: var(--space-md);
}
.ab-cta-mid > .container > p {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.8);
  max-width: 52ch;
  margin: 0 auto var(--space-xl);
  line-height: 1.6;
}
.ab-cta-actions {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.ab-btn-phone {
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
.ab-btn-phone:hover {
  transform: translateY(-2px);
  box-shadow: var(--shadow-xl);
}
.ab-btn-estimate {
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
.ab-btn-estimate:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-accent-dark);
}
.ab-btn-estimate:active {
  transform: translateY(2px);
  box-shadow: 0 2px 0 var(--color-accent-dark);
}

/* ── FAQ Section ──────────────────────────────────────────── */
.ab-faq {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.ab-faq-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.ab-faq h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.ab-faq-sub {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 52ch;
  margin: 0 auto;
}
.ab-faq-list {
  max-width: 800px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}
.ab-faq-item {
  background: var(--color-bg);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-sm);
  border: 1px solid rgba(var(--color-primary-rgb), 0.08);
  overflow: hidden;
}
.ab-faq-item summary {
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
.ab-faq-item summary::-webkit-details-marker { display: none; }
.ab-faq-item summary::after {
  content: '+';
  font-size: 1.4rem;
  color: var(--color-accent);
  flex-shrink: 0;
  transition: transform var(--transition-base);
}
.ab-faq-item[open] summary::after { transform: rotate(45deg); }
.ab-faq-item[open] summary { color: var(--color-accent); }
.ab-faq-answer {
  padding: 0 var(--space-xl) var(--space-lg);
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: 65ch;
}

/* ── Closing CTA ──────────────────────────────────────────── */
.ab-closing {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
  text-align: center;
}
.ab-closing h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.8rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-md);
}
.ab-closing p {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 52ch;
  margin: 0 auto var(--space-xl);
  line-height: 1.6;
}
.ab-closing-actions {
  display: flex;
  justify-content: center;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.ab-btn-closing-primary {
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
.ab-btn-closing-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-accent-dark);
}
.ab-btn-closing-phone {
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
.ab-btn-closing-phone:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-primary-dark);
}

/* ── Responsive ───────────────────────────────────────────── */
@media (max-width: 1023px) {
  .ab-stats-grid  { grid-template-columns: repeat(2, 1fr); }
  .ab-values-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 767px) {
  .ab-story-grid              { grid-template-columns: 1fr; }
  .ab-story-frame picture img { height: 300px; }
  .ab-stats-grid              { grid-template-columns: repeat(2, 1fr); gap: var(--space-md); }
  .ab-values-grid             { grid-template-columns: 1fr; }
  .ab-trust-strip             { flex-direction: column; align-items: stretch; }
  .ab-trust-badge             { justify-content: center; }
  .ab-photo-stats             { min-height: 420px; }
  .ab-hero-badges             { flex-direction: column; gap: var(--space-sm); }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

  <!-- ── Breadcrumb ─────────────────────────────────────────── -->
  <nav class="ab-breadcrumb" aria-label="Breadcrumb">
    <div class="container">
      <ol class="ab-breadcrumb-list">
        <li><a href="/">Home</a></li>
        <li aria-hidden="true"><span class="ab-breadcrumb-sep">›</span></li>
        <li class="current" aria-current="page">About</li>
      </ol>
    </div>
  </nav>

  <!-- ── Inner Hero ─────────────────────────────────────────── -->
  <section class="ab-hero" aria-label="About R.A.H. Solutions">
    <div class="container ab-hero-inner">
      <span class="ab-eyebrow">
        <i data-lucide="leaf" aria-hidden="true" style="width:14px;height:14px;"></i>
        Edgerton, WI — Est. 2023
      </span>
      <h1>Edgerton's Landscape Partner Since 2023</h1>
      <p class="ab-hero-sub">Family-owned and operated by Robert Harried — bringing honest, professional landscaping to Rock County without corporate detachment.</p>
      <div class="ab-hero-badges">
        <span class="ab-hero-badge">
          <i data-lucide="shield-check" aria-hidden="true" style="width:16px;height:16px;"></i>
          Licensed &amp; Insured
        </span>
        <span class="ab-hero-badge">
          <i data-lucide="star" aria-hidden="true" style="width:16px;height:16px;"></i>
          4.9★ · 47 Reviews
        </span>
        <span class="ab-hero-badge">
          <i data-lucide="home" aria-hidden="true" style="width:16px;height:16px;"></i>
          Family-Owned
        </span>
        <span class="ab-hero-badge">
          <i data-lucide="map-pin" aria-hidden="true" style="width:16px;height:16px;"></i>
          Rock County Specialists
        </span>
      </div>
    </div>
  </section>

  <!-- ── Ticker ─────────────────────────────────────────────── -->
  <div class="ab-ticker" aria-hidden="true">
    <div class="ab-ticker-track">
      <span class="ab-ticker-item">Family-Owned<span class="ab-ticker-sep">✦</span></span>
      <span class="ab-ticker-item">Licensed &amp; Insured<span class="ab-ticker-sep">✦</span></span>
      <span class="ab-ticker-item">Edgerton · Stoughton · Madison · Janesville<span class="ab-ticker-sep">✦</span></span>
      <span class="ab-ticker-item">Free Estimates<span class="ab-ticker-sep">✦</span></span>
      <span class="ab-ticker-item">3 Years Strong<span class="ab-ticker-sep">✦</span></span>
      <span class="ab-ticker-item">Rock County Specialists<span class="ab-ticker-sep">✦</span></span>
      <span class="ab-ticker-item">4.9-Star Rated<span class="ab-ticker-sep">✦</span></span>
      <span class="ab-ticker-item">Same-Day Response<span class="ab-ticker-sep">✦</span></span>
      <!-- Duplicate for seamless loop -->
      <span class="ab-ticker-item">Family-Owned<span class="ab-ticker-sep">✦</span></span>
      <span class="ab-ticker-item">Licensed &amp; Insured<span class="ab-ticker-sep">✦</span></span>
      <span class="ab-ticker-item">Edgerton · Stoughton · Madison · Janesville<span class="ab-ticker-sep">✦</span></span>
      <span class="ab-ticker-item">Free Estimates<span class="ab-ticker-sep">✦</span></span>
      <span class="ab-ticker-item">3 Years Strong<span class="ab-ticker-sep">✦</span></span>
      <span class="ab-ticker-item">Rock County Specialists<span class="ab-ticker-sep">✦</span></span>
      <span class="ab-ticker-item">4.9-Star Rated<span class="ab-ticker-sep">✦</span></span>
      <span class="ab-ticker-item">Same-Day Response<span class="ab-ticker-sep">✦</span></span>
    </div>
  </div>

  <!-- ── Divider ────────────────────────────────────────────── -->
  <div class="ab-divider" aria-hidden="true">
    <svg viewBox="0 0 1200 50" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,50 1200,50 0,50" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ── Company Story ──────────────────────────────────────── -->
  <section class="ab-story" data-animate="fade-up">
    <div class="container">
      <div class="ab-story-grid">

        <!-- Content Left -->
        <div>
          <span class="ab-section-eyebrow">Our Story</span>
          <h2>Why Was R.A.H. Solutions Built from a Love of Outdoor Spaces?</h2>
          <p>Robert Harried founded R.A.H. Solutions in 2023 with a clear focus: bring honest, professional landscaping to Edgerton and the surrounding Rock County communities without the corporate detachment of larger franchise operations. What started as a residential mowing and cleanup operation has grown into a comprehensive outdoor services company handling everything from <a href="/services" style="color:var(--color-accent);font-weight:600;">landscape design and hardscaping</a> to concrete work and winter snow removal.</p>
          <p>The foundation of the business is straightforward — show up, do the work right, and treat every property with the same care you'd give your own. After 3 years of operations, that approach has built a 4.9-star reputation across 47 reviews and earned consistent repeat business from homeowners and commercial clients throughout <a href="/service-area" style="color:var(--color-accent);font-weight:600;">Edgerton, Stoughton, Madison, and Janesville</a>.</p>
          <p>Operating out of 262 County Road W in Edgerton, our crew understands the local landscape in a literal sense. Rock County clay soils, USDA Zone 5b winter conditions, and the region's distinct spring freeze-thaw cycles all shape how we approach every job — from grading decisions on hardscape projects to mowing height recommendations for Kentucky bluegrass lawns.</p>
        </div>

        <!-- Image Right -->
        <div class="ab-story-image">
          <div class="ab-story-corner" aria-hidden="true"></div>
          <div class="ab-story-frame">
            <picture>
              <source srcset="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963874866-f077by-471177305_122202492170208320_1592970065814584229_n.jpg" type="image/webp">
              <img
                src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963874866-f077by-471177305_122202492170208320_1592970065814584229_n.jpg"
                alt="R.A.H. Solutions professional landscaping crew Edgerton Wisconsin"
                width="600"
                height="460"
                loading="lazy"
              >
            </picture>
            <span class="ab-story-badge">Edgerton, WI</span>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ── Divider: bg → bg-alt ───────────────────────────────── -->
  <div class="ab-divider" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,60 1200,60 0,60" fill="#f4f7f9"/>
    </svg>
  </div>

  <!-- ── Values Section ─────────────────────────────────────── -->
  <section class="ab-values" data-animate="fade-up">
    <div class="container">
      <div class="ab-values-header">
        <span class="ab-section-eyebrow" style="justify-content:center; margin-bottom: var(--space-sm);">What Drives Us</span>
        <h2>What Are the Three Commitments That Don't Change?</h2>
        <p class="ab-values-sub">These aren't aspirational statements — they're the day-to-day operating principles Robert built the company on.</p>
      </div>
      <div class="ab-values-grid">
        <div class="ab-value-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="ab-value-icon">
            <i data-lucide="map" aria-hidden="true" style="width:26px;height:26px;"></i>
          </div>
          <h3 class="ab-value-title">Local Knowledge</h3>
          <p class="ab-value-text">Edgerton's clay soils, USDA Zone 5a/5b growing conditions, Rock County frost dates, and regional weather patterns directly shape how we approach every project. We don't apply a generic playbook — we read your specific site.</p>
        </div>
        <div class="ab-value-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="ab-value-icon">
            <i data-lucide="clipboard-check" aria-hidden="true" style="width:26px;height:26px;"></i>
          </div>
          <h3 class="ab-value-title">Honest Scoping</h3>
          <p class="ab-value-text">We'll tell you what a project actually requires before we quote it — including drainage issues, soil prep needs, or phasing recommendations that affect long-term success. No scope surprises after the contract is signed.</p>
        </div>
        <div class="ab-value-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="ab-value-icon">
            <i data-lucide="users" aria-hidden="true" style="width:26px;height:26px;"></i>
          </div>
          <h3 class="ab-value-title">Consistent Crews</h3>
          <p class="ab-value-text">The same people show up to your property each time. You'll recognize the crew members, and they'll recognize your property's specific needs — no re-explaining, no relearning your yard every visit.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ── Divider: bg-alt → primary-dark ────────────────────── -->
  <div class="ab-divider" aria-hidden="true">
    <svg viewBox="0 0 1200 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,40 C400,80 800,0 1200,40 L1200,80 L0,80 Z" fill="#0f1e2d"/>
    </svg>
  </div>

  <!-- ── SIGNATURE: Full-Bleed Photo + Stats Overlay ───────── -->
  <section class="ab-photo-stats" aria-label="R.A.H. Solutions by the numbers">
    <div class="container ab-photo-stats-inner">
      <p class="ab-stats-label">R.A.H. Solutions — By the Numbers</p>
      <div class="ab-stats-grid">
        <div class="ab-stat-item" data-animate="fade-up">
          <div class="ab-stat-number">3+</div>
          <div class="ab-stat-label">Years serving Edgerton &amp; Rock County</div>
        </div>
        <div class="ab-stat-item" data-animate="fade-up">
          <div class="ab-stat-number">17</div>
          <div class="ab-stat-label">Services offered — lawn to concrete</div>
        </div>
        <div class="ab-stat-item" data-animate="fade-up">
          <div class="ab-stat-number">4.9<span style="font-size:1.6rem;">★</span></div>
          <div class="ab-stat-label">Average rating across 47 reviews</div>
        </div>
        <div class="ab-stat-item" data-animate="fade-up">
          <div class="ab-stat-number">4</div>
          <div class="ab-stat-label">Cities served across Southern Wisconsin</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ── Divider: primary-dark → bg ────────────────────────── -->
  <div class="ab-divider" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,60 1200,0 1200,60" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ── Trust / Certifications Strip ──────────────────────── -->
  <section class="ab-trust" data-animate="fade-up">
    <div class="container">
      <div class="ab-trust-header">
        <span class="ab-section-eyebrow" style="justify-content:center; margin-bottom: var(--space-sm);">Why We're the Right Fit</span>
        <h2>What Do You Get When You Work With R.A.H. Solutions?</h2>
      </div>
      <div class="ab-trust-strip">
        <div class="ab-trust-badge">
          <i data-lucide="shield-check" aria-hidden="true" style="width:20px;height:20px;"></i>
          Licensed &amp; Insured in Wisconsin
        </div>
        <div class="ab-trust-badge">
          <i data-lucide="home" aria-hidden="true" style="width:20px;height:20px;"></i>
          Family-Owned &amp; Operated
        </div>
        <div class="ab-trust-badge">
          <i data-lucide="file-text" aria-hidden="true" style="width:20px;height:20px;"></i>
          Free Written Estimates
        </div>
        <div class="ab-trust-badge">
          <i data-lucide="clock" aria-hidden="true" style="width:20px;height:20px;"></i>
          Same-Day Response
        </div>
        <div class="ab-trust-badge">
          <i data-lucide="map-pin" aria-hidden="true" style="width:20px;height:20px;"></i>
          Community-Based in Edgerton
        </div>
      </div>
    </div>
  </section>

  <!-- ── Divider: bg → primary ──────────────────────────────── -->
  <div class="ab-divider" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,60 1200,60 0,60" fill="#1a2b3c"/>
    </svg>
  </div>

  <!-- ── Mid CTA Banner ─────────────────────────────────────── -->
  <section class="ab-cta-mid" aria-label="Get a free estimate">
    <div class="container">
      <p class="ab-cta-eyebrow">Free Estimates · No Obligation</p>
      <h2>Ready to Transform Your Property?</h2>
      <p>Call Robert directly or fill out our online form. R.A.H. Solutions responds same-day during business hours and schedules free on-site estimates across Rock and Dane County.</p>
      <div class="ab-cta-actions">
        <a href="tel:6085015123" class="ab-btn-phone">
          <i data-lucide="phone" aria-hidden="true" style="width:20px;height:20px;"></i>
          (608) 501-5123
        </a>
        <a href="/contact" class="ab-btn-estimate">Get a Free Estimate</a>
      </div>
    </div>
  </section>

  <!-- ── Divider: primary → bg-alt ─────────────────────────── -->
  <div class="ab-divider" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,60 1200,60 0,60" fill="#f4f7f9"/>
    </svg>
  </div>

  <!-- ── FAQ Section ────────────────────────────────────────── -->
  <section class="ab-faq" data-animate="fade-up">
    <div class="container">
      <div class="ab-faq-header">
        <span class="ab-section-eyebrow" style="justify-content:center; margin-bottom: var(--space-sm);">Common Questions</span>
        <h2>What Are Common Questions About R.A.H. Solutions?</h2>
        <p class="ab-faq-sub">Straightforward answers about who we are, where we work, and how we operate.</p>
      </div>
      <div class="ab-faq-list">
        <details class="ab-faq-item">
          <summary>Is R.A.H. Solutions licensed and insured in Wisconsin?</summary>
          <div class="ab-faq-answer">
            <p>Yes. R.A.H. Solutions, LLC is fully licensed and insured to operate in Wisconsin. We carry liability insurance and maintain all required credentials for landscaping, hardscaping, and concrete work in Rock and Dane County. We're happy to provide documentation before any project begins.</p>
          </div>
        </details>
        <details class="ab-faq-item">
          <summary>What areas do you serve around Edgerton?</summary>
          <div class="ab-faq-answer">
            <p>R.A.H. Solutions serves Edgerton, Stoughton, Janesville, and Madison, WI — covering most of Rock County and southern Dane County within approximately a 50-mile radius of our Edgerton base on County Road W. Contact us to confirm service availability at your specific address.</p>
          </div>
        </details>
        <details class="ab-faq-item">
          <summary>How long has R.A.H. Solutions been in business?</summary>
          <div class="ab-faq-answer">
            <p>R.A.H. Solutions was founded in 2023 by Robert Harried and has been operating for 3 years. In that time, we've built a 4.9-star rating across 47 reviews and expanded from residential mowing and cleanup to a full-service landscaping and outdoor company handling design, installation, hardscaping, concrete, and snow removal.</p>
          </div>
        </details>
        <details class="ab-faq-item">
          <summary>Do you handle both residential and commercial properties?</summary>
          <div class="ab-faq-answer">
            <p>Yes. R.A.H. Solutions works with homeowners across Edgerton and surrounding communities as well as commercial clients including businesses, industrial properties, and multi-unit accounts. We tailor our maintenance programs to the specific demands of each property type — a commercial account with high-visibility curb appeal requirements gets a different approach than a residential lot.</p>
          </div>
        </details>
      </div>
    </div>
  </section>

  <!-- ── Divider: bg-alt → bg ───────────────────────────────── -->
  <div class="ab-divider" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,60 1200,0 1200,60" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ── Closing CTA ────────────────────────────────────────── -->
  <section class="ab-closing" data-animate="fade-up">
    <div class="container">
      <span class="ab-section-eyebrow" style="justify-content:center;">Work With Us</span>
      <h2>How Do You Get a Free Estimate From R.A.H. Solutions?</h2>
      <p>Whether it's a first mow, a complete landscape overhaul, or snow removal for this winter — call Robert directly or request an estimate online. We respond the same business day.</p>
      <div class="ab-closing-actions">
        <a href="tel:6085015123" class="ab-btn-closing-phone">
          <i data-lucide="phone" aria-hidden="true" style="width:20px;height:20px;"></i>
          (608) 501-5123
        </a>
        <a href="/contact" class="ab-btn-closing-primary">
          <i data-lucide="clipboard-list" aria-hidden="true" style="width:20px;height:20px;"></i>
          Request a Free Estimate
        </a>
      </div>
    </div>
  </section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
