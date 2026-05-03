<?php
// ============================================================
// Service Area — R.A.H. Solutions, LLC
// ============================================================
$pageTitle       = 'Landscaping Service Area Southern WI';
$pageDescription = 'R.A.H. Solutions serves Edgerton, Stoughton, Janesville & Madison, WI — landscaping, lawn care, hardscaping & snow removal. Free estimates. Call (608) 501-5123.';
$canonicalUrl    = 'https://rahsolutionsllc.com/service-area';
// SEO: {"@context":"https://schema.org"} — schema and <link rel="canonical"> rendered via head.php
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963874866-f077by-471177305_122202492170208320_1592970065814584229_n.jpg';
$currentPage     = 'service-area';
$heroPreload     = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963876972-9uvcid-474456407_122209245674208320_3275147450913393227_n.jpg';

$schemaMarkup = json_encode([
  '@context' => 'https://schema.org',
  '@graph'   => [
    [
      '@type'           => 'BreadcrumbList',
      'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',         'item' => 'https://rahsolutionsllc.com'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Service Area', 'item' => 'https://rahsolutionsllc.com/service-area'],
      ],
    ],
    [
      '@type'       => 'LocalBusiness',
      '@id'         => 'https://rahsolutionsllc.com/#service-area',
      'name'        => 'R.A.H. Solutions, LLC',
      'url'         => 'https://rahsolutionsllc.com',
      'telephone'   => '(608) 501-5123',
      'address'     => [
        '@type'           => 'PostalAddress',
        'streetAddress'   => '262 County Road W',
        'addressLocality' => 'Edgerton',
        'addressRegion'   => 'WI',
        'postalCode'      => '53534',
        'addressCountry'  => 'US',
      ],
      'areaServed'  => [
        [
          '@type'    => 'City',
          'name'     => 'Edgerton',
          'sameAs'   => 'https://en.wikipedia.org/wiki/Edgerton,_Wisconsin',
          'containedInPlace' => ['@type' => 'AdministrativeArea', 'name' => 'Rock County, Wisconsin'],
        ],
        [
          '@type'    => 'City',
          'name'     => 'Stoughton',
          'sameAs'   => 'https://en.wikipedia.org/wiki/Stoughton,_Wisconsin',
          'containedInPlace' => ['@type' => 'AdministrativeArea', 'name' => 'Dane County, Wisconsin'],
        ],
        [
          '@type'    => 'City',
          'name'     => 'Janesville',
          'sameAs'   => 'https://en.wikipedia.org/wiki/Janesville,_Wisconsin',
          'containedInPlace' => ['@type' => 'AdministrativeArea', 'name' => 'Rock County, Wisconsin'],
        ],
        [
          '@type'    => 'City',
          'name'     => 'Madison',
          'sameAs'   => 'https://en.wikipedia.org/wiki/Madison,_Wisconsin',
          'containedInPlace' => ['@type' => 'AdministrativeArea', 'name' => 'Dane County, Wisconsin'],
        ],
      ],
    ],
    [
      '@type'      => 'FAQPage',
      'mainEntity' => [
        [
          '@type'          => 'Question',
          'name'           => 'Do you serve areas outside Edgerton, WI?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'Yes. R.A.H. Solutions serves Edgerton, Stoughton, Janesville, and Madison, WI — covering most of Rock County and southern Dane County within a 50-mile radius of our Edgerton base. Contact us to confirm service availability at your specific address.',
          ],
        ],
        [
          '@type'          => 'Question',
          'name'           => 'Does R.A.H. Solutions serve Janesville and Madison?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'Yes. We provide lawn care, landscaping, hardscaping, and other services in Janesville and Madison, WI. Janesville is approximately 15 miles from our Edgerton base; Madison is roughly 30 miles north. Both cities fall within our standard service radius.',
          ],
        ],
        [
          '@type'          => 'Question',
          'name'           => 'How do I get a landscaping estimate near me in Southern Wisconsin?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'Call (608) 501-5123 or use the contact form on our website. R.A.H. Solutions offers free on-site estimates with no obligation. We respond the same business day and typically schedule site visits within 2–3 business days.',
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
   Service Area Page — R.A.H. Solutions
   Prefix: .sa-
   ============================================================ */

/* ── Breadcrumb ───────────────────────────────────────────── */
.sa-breadcrumb {
  background: var(--color-bg-dark);
  padding: var(--space-sm) 0;
  position: relative;
  z-index: 10;
}
.sa-breadcrumb-list {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  list-style: none;
  flex-wrap: wrap;
}
.sa-breadcrumb-list li {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.55);
}
.sa-breadcrumb-list li a {
  color: rgba(255,255,255,0.7);
  transition: color var(--transition-fast);
}
.sa-breadcrumb-list li a:hover { color: var(--color-accent); }
.sa-breadcrumb-list li.current {
  color: var(--color-accent);
  font-weight: 600;
}
.sa-breadcrumb-sep { color: rgba(255,255,255,0.3); }

/* ── Inner Hero ───────────────────────────────────────────── */
.sa-hero {
  position: relative;
  min-height: 62vh;
  display: flex;
  align-items: center;
  overflow: hidden;
  background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963876972-9uvcid-474456407_122209245674208320_3275147450913393227_n.jpg');
  background-size: cover;
  background-position: center;
  animation: sa-kenburns 24s ease-in-out infinite alternate;
}
@keyframes sa-kenburns {
  from { background-size: 110%; background-position: center 30%; }
  to   { background-size: 120%; background-position: center 55%; }
}
.sa-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    135deg,
    rgba(var(--color-primary-rgb), 0.9) 0%,
    rgba(var(--color-primary-rgb), 0.6) 60%,
    rgba(var(--color-accent-rgb), 0.15) 100%
  );
  z-index: 1;
}
.sa-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 2;
  pointer-events: none;
}
.sa-hero-inner {
  position: relative;
  z-index: 3;
  padding: var(--space-4xl) 0 var(--space-3xl);
}
.sa-eyebrow {
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
.sa-eyebrow::before {
  content: '';
  display: block;
  width: 28px;
  height: 2px;
  background: var(--color-accent);
}
.sa-hero h1 {
  font-family: var(--font-heading);
  font-size: clamp(2.3rem, 5.5vw, 4rem);
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
.sa-hero-sub {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.82);
  max-width: 55ch;
  line-height: 1.6;
  margin-bottom: var(--space-xl);
}
.sa-hero-cities {
  display: flex;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.sa-city-badge {
  display: inline-flex;
  align-items: center;
  gap: var(--space-xs);
  font-size: var(--font-size-sm);
  font-weight: 700;
  color: rgba(255,255,255,0.85);
  background: rgba(255,255,255,0.1);
  border: 1px solid rgba(255,255,255,0.2);
  border-radius: var(--radius-sm);
  padding: var(--space-xs) var(--space-md);
  backdrop-filter: blur(4px);
}
.sa-city-badge i { color: var(--color-accent); }

/* ── Ticker ───────────────────────────────────────────────── */
.sa-ticker {
  background: var(--color-primary);
  padding: var(--space-sm) 0;
  overflow: hidden;
  position: relative;
}
.sa-ticker::before,
.sa-ticker::after {
  content: '';
  position: absolute;
  top: 0;
  bottom: 0;
  width: 80px;
  z-index: 2;
  pointer-events: none;
}
.sa-ticker::before {
  left: 0;
  background: linear-gradient(to right, var(--color-primary), transparent);
}
.sa-ticker::after {
  right: 0;
  background: linear-gradient(to left, var(--color-primary), transparent);
}
.sa-ticker-track {
  display: flex;
  width: max-content;
  animation: sa-ticker-scroll 30s linear infinite;
}
.sa-ticker-track:hover { animation-play-state: paused; }
@keyframes sa-ticker-scroll {
  from { transform: translateX(0); }
  to   { transform: translateX(-50%); }
}
.sa-ticker-item {
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
.sa-ticker-sep { color: var(--color-accent); font-size: 1.1rem; }

/* ── Divider ──────────────────────────────────────────────── */
.sa-divider {
  display: block;
  line-height: 0;
  overflow: hidden;
}
.sa-divider svg { display: block; width: 100%; }

/* ── Section Eyebrow ──────────────────────────────────────── */
.sa-section-eyebrow {
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
.sa-section-eyebrow::after {
  content: '';
  display: block;
  width: 24px;
  height: 2px;
  background: var(--color-accent);
}

/* ── Intro Section ────────────────────────────────────────── */
.sa-intro {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
}
.sa-intro-inner {
  max-width: 75ch;
  margin: 0 auto;
  text-align: center;
}
.sa-intro h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-lg);
}
.sa-intro p {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  line-height: 1.7;
  margin-bottom: var(--space-md);
  max-width: 65ch;
  margin-inline: auto;
}

/* ── City Area Sections ───────────────────────────────────── */
.sa-area {
  padding: var(--space-4xl) 0;
}
.sa-area-even { background: var(--color-bg); }
.sa-area-odd  { background: var(--color-bg-alt); }

.sa-area-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3xl);
  align-items: center;
}
.sa-area-grid.sa-flip { }
.sa-area-grid.sa-flip .sa-area-content { order: 2; }
.sa-area-grid.sa-flip .sa-area-image   { order: 1; }

.sa-area h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-lg);
}
.sa-area p {
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  line-height: 1.75;
  max-width: 65ch;
  margin-bottom: var(--space-md);
}
.sa-area-services {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-sm);
  margin: var(--space-lg) 0 var(--space-xl);
}
.sa-service-tag {
  display: inline-flex;
  align-items: center;
  gap: var(--space-xs);
  font-size: var(--font-size-xs);
  font-weight: 600;
  color: var(--color-accent);
  background: rgba(var(--color-accent-rgb), 0.08);
  border: 1px solid rgba(var(--color-accent-rgb), 0.2);
  border-radius: 100px;
  padding: 3px var(--space-md);
  letter-spacing: 0.04em;
}
.sa-area-cta {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-primary);
  color: #ffffff;
  font-family: var(--font-heading);
  font-size: var(--font-size-base);
  font-weight: 700;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-primary-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden;
  position: relative;
}
.sa-area-cta:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-primary-dark);
}
.sa-area-cta:active {
  transform: translateY(2px);
  box-shadow: 0 2px 0 var(--color-primary-dark);
}
.sa-area-image {
  position: relative;
}
.sa-area-frame {
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
  position: relative;
}
.sa-area-frame::before {
  content: '';
  position: absolute;
  inset: 0;
  border: 3px solid rgba(var(--color-accent-rgb), 0.2);
  border-radius: var(--radius-lg);
  z-index: 2;
  pointer-events: none;
}
.sa-area-frame picture img {
  width: 100%;
  height: 420px;
  object-fit: cover;
  display: block;
  transition: transform var(--transition-slow);
}
.sa-area-frame:hover picture img { transform: scale(1.04); }
.sa-area-badge {
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

/* ── SIGNATURE: Coverage Section ─────────────────────────── */
.sa-coverage {
  position: relative;
  padding: var(--space-4xl) 0;
  background: var(--color-bg-dark);
  overflow: hidden;
}
.sa-coverage::before {
  content: '';
  position: absolute;
  top: -100px;
  left: -100px;
  width: 500px;
  height: 500px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.05) 0%, transparent 70%);
  pointer-events: none;
}
.sa-coverage::after {
  content: '';
  position: absolute;
  bottom: -100px;
  right: -100px;
  width: 600px;
  height: 600px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.04) 0%, transparent 70%);
  pointer-events: none;
}
.sa-coverage-inner {
  position: relative;
  z-index: 1;
}
.sa-coverage-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.sa-coverage h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: #ffffff;
  margin-bottom: var(--space-sm);
}
.sa-coverage-sub {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.65);
  max-width: 50ch;
  margin: 0 auto;
  line-height: 1.6;
}
.sa-coverage-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-xl);
  margin-bottom: var(--space-3xl);
}
.sa-coverage-city {
  background: rgba(255,255,255,0.03);
  border: 1px solid rgba(var(--color-accent-rgb), 0.12);
  border-radius: var(--radius-lg);
  padding: var(--space-xl) var(--space-lg);
  transition: border-color var(--transition-base), background var(--transition-base);
}
.sa-coverage-city:hover {
  border-color: rgba(var(--color-accent-rgb), 0.35);
  background: rgba(var(--color-accent-rgb), 0.06);
}
.sa-city-name {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  font-weight: 700;
  color: var(--color-accent);
  margin-bottom: var(--space-md);
  display: flex;
  align-items: center;
  gap: var(--space-sm);
}
.sa-city-hood-list {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-xs);
}
.sa-city-hood-list li {
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.6);
  display: flex;
  align-items: center;
  gap: var(--space-xs);
}
.sa-city-hood-list li::before {
  content: '›';
  color: var(--color-accent);
  font-weight: 700;
}
.sa-coverage-stats {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-xl);
  padding-top: var(--space-3xl);
  border-top: 1px solid rgba(var(--color-accent-rgb), 0.1);
}
.sa-stat {
  text-align: center;
}
.sa-stat-num {
  font-family: var(--font-heading);
  font-size: clamp(2.2rem, 4vw, 3.2rem);
  font-weight: 700;
  color: var(--color-accent);
  line-height: 1;
  margin-bottom: var(--space-xs);
  letter-spacing: -0.02em;
}
.sa-stat-lbl {
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.6);
  line-height: 1.4;
}

/* ── Mid CTA Banner ───────────────────────────────────────── */
.sa-cta-mid {
  position: relative;
  padding: var(--space-3xl) 0;
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  overflow: hidden;
}
.sa-cta-mid::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
  z-index: 0;
}
.sa-cta-mid .container {
  position: relative;
  z-index: 1;
  text-align: center;
}
.sa-cta-eyebrow {
  display: inline-block;
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.sa-cta-mid h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 2.8rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: #ffffff;
  margin-bottom: var(--space-md);
}
.sa-cta-mid > .container > p {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.8);
  max-width: 52ch;
  margin: 0 auto var(--space-xl);
  line-height: 1.6;
}
.sa-cta-actions {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.sa-btn-phone {
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
.sa-btn-phone:hover {
  transform: translateY(-2px);
  box-shadow: var(--shadow-xl);
}
.sa-btn-estimate {
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
.sa-btn-estimate:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-accent-dark);
}

/* ── FAQ Section ──────────────────────────────────────────── */
.sa-faq {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.sa-faq-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.sa-faq-header h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.sa-faq-sub {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 50ch;
  margin: 0 auto;
}
.sa-faq-list {
  max-width: 800px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}
.sa-faq-item {
  background: var(--color-bg);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-sm);
  border: 1px solid rgba(var(--color-primary-rgb), 0.08);
  overflow: hidden;
}
.sa-faq-item summary {
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
.sa-faq-item summary::-webkit-details-marker { display: none; }
.sa-faq-item summary::after {
  content: '+';
  font-size: 1.4rem;
  color: var(--color-accent);
  flex-shrink: 0;
  transition: transform var(--transition-base);
}
.sa-faq-item[open] summary::after { transform: rotate(45deg); }
.sa-faq-item[open] summary { color: var(--color-accent); }
.sa-faq-answer {
  padding: 0 var(--space-xl) var(--space-lg);
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: 65ch;
}

/* ── Closing CTA ──────────────────────────────────────────── */
.sa-closing {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
  text-align: center;
}
.sa-closing h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.8rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-md);
}
.sa-closing p {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 52ch;
  margin: 0 auto var(--space-xl);
  line-height: 1.6;
}
.sa-closing-actions {
  display: flex;
  justify-content: center;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.sa-btn-closing-primary {
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
.sa-btn-closing-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-accent-dark);
}
.sa-btn-closing-phone {
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
.sa-btn-closing-phone:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-primary-dark);
}

/* ── Responsive ───────────────────────────────────────────── */
@media (max-width: 1023px) {
  .sa-coverage-grid { grid-template-columns: repeat(2, 1fr); }
  .sa-coverage-stats { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 767px) {
  .sa-area-grid            { grid-template-columns: 1fr; }
  .sa-area-grid.sa-flip .sa-area-content { order: 1; }
  .sa-area-grid.sa-flip .sa-area-image   { order: 2; }
  .sa-area-frame picture img { height: 280px; }
  .sa-coverage-grid  { grid-template-columns: 1fr 1fr; }
  .sa-coverage-stats { grid-template-columns: repeat(2, 1fr); gap: var(--space-md); }
  .sa-hero-cities    { flex-direction: column; gap: var(--space-sm); }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

  <!-- ── Breadcrumb ─────────────────────────────────────────── -->
  <nav class="sa-breadcrumb" aria-label="Breadcrumb">
    <div class="container">
      <ol class="sa-breadcrumb-list">
        <li><a href="/">Home</a></li>
        <li aria-hidden="true"><span class="sa-breadcrumb-sep">›</span></li>
        <li class="current" aria-current="page">Service Area</li>
      </ol>
    </div>
  </nav>

  <!-- ── Inner Hero ─────────────────────────────────────────── -->
  <section class="sa-hero" aria-label="Service area coverage">
    <div class="container sa-hero-inner">
      <span class="sa-eyebrow">
        <i data-lucide="map" aria-hidden="true" style="width:14px;height:14px;"></i>
        Southern Wisconsin Coverage
      </span>
      <h1>Landscaping Services Across Southern Wisconsin</h1>
      <p class="sa-hero-sub">R.A.H. Solutions operates out of Edgerton and covers a 50-mile service radius across Rock and Dane County — professional landscaping wherever you need it.</p>
      <div class="sa-hero-cities">
        <span class="sa-city-badge">
          <i data-lucide="map-pin" aria-hidden="true" style="width:13px;height:13px;"></i>
          Edgerton, WI
        </span>
        <span class="sa-city-badge">
          <i data-lucide="map-pin" aria-hidden="true" style="width:13px;height:13px;"></i>
          Stoughton, WI
        </span>
        <span class="sa-city-badge">
          <i data-lucide="map-pin" aria-hidden="true" style="width:13px;height:13px;"></i>
          Janesville, WI
        </span>
        <span class="sa-city-badge">
          <i data-lucide="map-pin" aria-hidden="true" style="width:13px;height:13px;"></i>
          Madison, WI
        </span>
      </div>
    </div>
  </section>

  <!-- ── Ticker ─────────────────────────────────────────────── -->
  <div class="sa-ticker" aria-hidden="true">
    <div class="sa-ticker-track">
      <span class="sa-ticker-item">50-Mile Service Radius<span class="sa-ticker-sep">✦</span></span>
      <span class="sa-ticker-item">Edgerton · Stoughton · Janesville · Madison<span class="sa-ticker-sep">✦</span></span>
      <span class="sa-ticker-item">Rock County Specialists<span class="sa-ticker-sep">✦</span></span>
      <span class="sa-ticker-item">Free On-Site Estimates<span class="sa-ticker-sep">✦</span></span>
      <span class="sa-ticker-item">Licensed &amp; Insured<span class="sa-ticker-sep">✦</span></span>
      <span class="sa-ticker-item">Family-Owned · Est. 2023<span class="sa-ticker-sep">✦</span></span>
      <span class="sa-ticker-item">17 Services Available<span class="sa-ticker-sep">✦</span></span>
      <!-- Duplicate -->
      <span class="sa-ticker-item">50-Mile Service Radius<span class="sa-ticker-sep">✦</span></span>
      <span class="sa-ticker-item">Edgerton · Stoughton · Janesville · Madison<span class="sa-ticker-sep">✦</span></span>
      <span class="sa-ticker-item">Rock County Specialists<span class="sa-ticker-sep">✦</span></span>
      <span class="sa-ticker-item">Free On-Site Estimates<span class="sa-ticker-sep">✦</span></span>
      <span class="sa-ticker-item">Licensed &amp; Insured<span class="sa-ticker-sep">✦</span></span>
      <span class="sa-ticker-item">Family-Owned · Est. 2023<span class="sa-ticker-sep">✦</span></span>
      <span class="sa-ticker-item">17 Services Available<span class="sa-ticker-sep">✦</span></span>
    </div>
  </div>

  <!-- ── Divider ────────────────────────────────────────────── -->
  <div class="sa-divider" aria-hidden="true">
    <svg viewBox="0 0 1200 50" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,50 1200,50 0,50" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ── Intro Section ──────────────────────────────────────── -->
  <section class="sa-intro" data-animate="fade-up">
    <div class="container">
      <div class="sa-intro-inner">
        <span class="sa-section-eyebrow" style="justify-content:center; margin-bottom:var(--space-sm);">Our Coverage</span>
        <h2>Professional Landscaping Within 50 Miles of Edgerton</h2>
        <p>R.A.H. Solutions operates out of Edgerton, WI and provides professional landscaping services throughout a 50-mile radius covering Rock and Dane County. Whether you're in a neighborhood near Edgerton High School, managing a commercial property in Janesville's industrial corridor, maintaining a historic home in downtown Stoughton, or keeping up a property on Madison's west side — our crew reaches you with the same quality of work we deliver in our own backyard.</p>
        <p>Every city we serve gets the same crew, the same materials, and the same 4.9-star standard. Local proximity to Rock County means faster scheduling, more responsive service, and crews who understand your regional growing conditions firsthand.</p>
      </div>
    </div>
  </section>

  <!-- ── Divider ────────────────────────────────────────────── -->
  <div class="sa-divider" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,60 1200,60 0,60" fill="#f4f7f9"/>
    </svg>
  </div>

  <!-- ── Area 1: Edgerton ───────────────────────────────────── -->
  <section class="sa-area sa-area-odd" id="edgerton" data-animate="fade-up">
    <div class="container">
      <div class="sa-area-grid">
        <div class="sa-area-content">
          <span class="sa-section-eyebrow">Primary Service Area</span>
          <h2>Landscaping Services in Edgerton, WI</h2>
          <p>Edgerton is home base. Our crew knows every corner of the city — from the older residential neighborhoods along Church Street and Fulton Street where established trees create dense root systems that affect excavation and drainage decisions, to the newer developments on Edgerton's outskirts where lawns are often installed on disturbed, compacted soil that needs a restoration approach rather than a standard maintenance program.</p>
          <p>Rock County clay soil is the defining challenge in Edgerton landscaping. It drains poorly, compacts easily, and heaves significantly during Wisconsin's freeze-thaw cycles — which can shift retaining walls, crack concrete edges, and stress newly planted material. We factor this into every project: raised bed designs for drainage-prone areas, appropriate hardscape base depths, and plant selections that tolerate wet spring conditions and dry August stretches.</p>
          <p>Operating out of 262 County Road W means we can respond to Edgerton service calls faster than any regional franchise. For maintenance clients, that means we can adjust schedules quickly after heavy rains or early frosts without impacting your property's appearance.</p>
          <div class="sa-area-services">
            <a href="/services/lawn-maintenance" class="sa-service-tag">Lawn Maintenance</a>
            <a href="/services/landscape-design" class="sa-service-tag">Landscape Design</a>
            <a href="/services/hardscaping-services" class="sa-service-tag">Hardscaping</a>
            <a href="/services/concrete-services" class="sa-service-tag">Concrete Services</a>
            <a href="/services/snow-removal" class="sa-service-tag">Snow Removal</a>
            <a href="/services/spring-yard-cleanup" class="sa-service-tag">Spring &amp; Fall Cleanup</a>
          </div>
          <a href="/contact" class="sa-area-cta">
            <i data-lucide="clipboard-list" aria-hidden="true" style="width:16px;height:16px;"></i>
            Request a Free Estimate in Edgerton
          </a>
        </div>
        <div class="sa-area-image">
          <div class="sa-area-frame">
            <picture>
              <source srcset="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963879670-etljhr-474465615_122209560308208320_6377695377545475044_n.jpg" type="image/webp">
              <img
                src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963879670-etljhr-474465615_122209560308208320_6377695377545475044_n.jpg"
                alt="Landscaping services Edgerton Wisconsin R.A.H. Solutions Rock County"
                width="600"
                height="420"
                loading="lazy"
              >
            </picture>
            <span class="sa-area-badge">Edgerton, WI</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ── Divider ────────────────────────────────────────────── -->
  <div class="sa-divider" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,60 1200,0 1200,60" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ── Area 2: Stoughton ──────────────────────────────────── -->
  <section class="sa-area sa-area-even" id="stoughton" data-animate="fade-up">
    <div class="container">
      <div class="sa-area-grid sa-flip">
        <div class="sa-area-content">
          <span class="sa-section-eyebrow">~20 Miles North of Edgerton</span>
          <h2>Landscaping Services in Stoughton, WI</h2>
          <p>Stoughton's Norse heritage shows in its landscape character — mature hardwood canopy, established residential neighborhoods with legacy plantings, and properties that often require thoughtful tree work and shrub restoration rather than fresh installation. The city's older homes along the downtown core and Sugar Creek corridor have well-established landscapes that benefit from consistent maintenance programs and precise pruning more than ground-up renovation.</p>
          <p>Proximity to Madison means Stoughton clients have high expectations for curb appeal and professional-grade work — competitive with what Madison-area companies charge, but with the response times and community connection of a local operation. R.A.H. Solutions reaches Stoughton in under 30 minutes from Edgerton, allowing us to maintain consistent weekly and bi-weekly schedules without the scheduling gaps that remote crews create.</p>
          <p>For Stoughton commercial accounts — particularly properties along US-51 and the industrial areas on the city's edges — we provide reliable commercial lawn care programs that keep grounds looking professional year-round.</p>
          <div class="sa-area-services">
            <a href="/services/lawn-maintenance" class="sa-service-tag">Lawn Maintenance</a>
            <a href="/services/tree-pruning" class="sa-service-tag">Tree Pruning</a>
            <a href="/services/shrub-trimming" class="sa-service-tag">Shrub Trimming</a>
            <a href="/services/mulching-services" class="sa-service-tag">Mulching</a>
            <a href="/services/commercial-lawn-care" class="sa-service-tag">Commercial Lawn Care</a>
            <a href="/services/fall-yard-cleanup" class="sa-service-tag">Fall Cleanup</a>
          </div>
          <a href="/contact" class="sa-area-cta">
            <i data-lucide="clipboard-list" aria-hidden="true" style="width:16px;height:16px;"></i>
            Request a Free Estimate in Stoughton
          </a>
        </div>
        <div class="sa-area-image">
          <div class="sa-area-frame">
            <picture>
              <source srcset="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963883232-jst9wv-475547624_122211163226208320_5983283941194375535_n.jpg" type="image/webp">
              <img
                src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963883232-jst9wv-475547624_122211163226208320_5983283941194375535_n.jpg"
                alt="Tree pruning shrub trimming Stoughton Wisconsin landscaping near me"
                width="600"
                height="420"
                loading="lazy"
              >
            </picture>
            <span class="sa-area-badge">Stoughton, WI</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ── Divider ────────────────────────────────────────────── -->
  <div class="sa-divider" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,60 1200,60 0,60" fill="#f4f7f9"/>
    </svg>
  </div>

  <!-- ── Area 3: Janesville ─────────────────────────────────── -->
  <section class="sa-area sa-area-odd" id="janesville" data-animate="fade-up">
    <div class="container">
      <div class="sa-area-grid">
        <div class="sa-area-content">
          <span class="sa-section-eyebrow">~15 Miles from Edgerton</span>
          <h2>Landscaping Services in Janesville, WI</h2>
          <p>Janesville is Rock County's largest city and generates significant demand for professional commercial lawn care — particularly in the industrial corridor along the Rock River and the commercial districts along Milton Avenue and Court Street. R.A.H. Solutions handles both the precision required for high-traffic commercial accounts and the detail work needed on Janesville's established residential neighborhoods near Courthouse Hill and Rockport.</p>
          <p>The Rock River's influence on Janesville's landscape is real — properties in flood-adjacent zones require drainage-aware landscaping choices, and near-river soil conditions differ substantially from upland neighborhoods. Our crew factors this into plant selection, bed edging depth, and hardscape installation approaches on every Janesville project.</p>
          <p>Snow removal is a key service for Janesville commercial properties — consistent, early-morning clearing keeps parking lots and walkways accessible through Wisconsin's January–March window. R.A.H. Solutions maintains commercial removal routes in Janesville with reliable timing so your property is cleared before business hours.</p>
          <div class="sa-area-services">
            <a href="/services/commercial-lawn-care" class="sa-service-tag">Commercial Lawn Care</a>
            <a href="/services/snow-removal" class="sa-service-tag">Snow Removal</a>
            <a href="/services/hardscaping-services" class="sa-service-tag">Hardscaping</a>
            <a href="/services/landscape-installation" class="sa-service-tag">Landscape Installation</a>
            <a href="/services/sod-installation" class="sa-service-tag">Sod Installation</a>
            <a href="/services/excavating-services" class="sa-service-tag">Excavating</a>
          </div>
          <a href="/contact" class="sa-area-cta">
            <i data-lucide="clipboard-list" aria-hidden="true" style="width:16px;height:16px;"></i>
            Request a Free Estimate in Janesville
          </a>
        </div>
        <div class="sa-area-image">
          <div class="sa-area-frame">
            <picture>
              <source srcset="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963878224-9yylmf-474790582_122209560278208320_5110498035873152787_n.jpg" type="image/webp">
              <img
                src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963878224-9yylmf-474790582_122209560278208320_5110498035873152787_n.jpg"
                alt="Hardscaping patio installation Janesville Wisconsin landscaping near me"
                width="600"
                height="420"
                loading="lazy"
              >
            </picture>
            <span class="sa-area-badge">Janesville, WI</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ── Divider ────────────────────────────────────────────── -->
  <div class="sa-divider" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,60 1200,0 1200,60" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ── Area 4: Madison ────────────────────────────────────── -->
  <section class="sa-area sa-area-even" id="madison" data-animate="fade-up">
    <div class="container">
      <div class="sa-area-grid sa-flip">
        <div class="sa-area-content">
          <span class="sa-section-eyebrow">~30 Miles from Edgerton</span>
          <h2>Landscaping Services in Madison, WI</h2>
          <p>Madison's landscaping market is competitive, and property owners near the University of Wisconsin campus, the Isthmus, and Madison's growing west side neighborhoods have high standards — but the quality gap between larger commercial landscaping companies and smaller local operators is real. R.A.H. Solutions fills that gap: professional-grade work, correct materials and methods, and communication that larger crews can't always deliver.</p>
          <p>Madison's urban tree canopy creates specific challenges — dense root systems near the UW campus and older Isthmus neighborhoods require careful soil prep for any ground-level installation, and canopy shade drives grass selection and maintenance recommendations that differ from open Rock County properties. We account for these conditions when designing lawn care programs for Madison clients rather than applying a one-size approach.</p>
          <p>For the growing suburban west side — neighborhoods near Middleton, Verona Road, and Madison's expanding western edge — R.A.H. Solutions provides landscape installation, hardscaping, and maintenance programs tailored to newer construction where properties still need their long-term landscape character established.</p>
          <div class="sa-area-services">
            <a href="/services/landscape-design" class="sa-service-tag">Landscape Design</a>
            <a href="/services/landscape-installation" class="sa-service-tag">Landscape Installation</a>
            <a href="/services/lawn-restoration" class="sa-service-tag">Lawn Restoration</a>
            <a href="/services/residential-lawn-care" class="sa-service-tag">Residential Lawn Care</a>
            <a href="/services/garden-maintenance" class="sa-service-tag">Garden Maintenance</a>
            <a href="/services/mulching-services" class="sa-service-tag">Mulching Services</a>
          </div>
          <a href="/contact" class="sa-area-cta">
            <i data-lucide="clipboard-list" aria-hidden="true" style="width:16px;height:16px;"></i>
            Request a Free Estimate in Madison
          </a>
        </div>
        <div class="sa-area-image">
          <div class="sa-area-frame">
            <picture>
              <source srcset="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963880884-qw46fr-474382241_122209560170208320_4796638395126825561_n.jpg" type="image/webp">
              <img
                src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963880884-qw46fr-474382241_122209560170208320_4796638395126825561_n.jpg"
                alt="Landscape design installation Madison Wisconsin professional landscaping near me"
                width="600"
                height="420"
                loading="lazy"
              >
            </picture>
            <span class="sa-area-badge">Madison, WI</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ── Divider: bg → bg-dark ──────────────────────────────── -->
  <div class="sa-divider" aria-hidden="true">
    <svg viewBox="0 0 1200 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,40 C300,80 900,0 1200,40 L1200,80 L0,80 Z" fill="#0f1e2d"/>
    </svg>
  </div>

  <!-- ── SIGNATURE: Coverage Map Section ───────────────────── -->
  <section class="sa-coverage" aria-label="Full coverage map and service statistics">
    <div class="container sa-coverage-inner">
      <div class="sa-coverage-header">
        <span class="sa-section-eyebrow" style="justify-content:center; margin-bottom:var(--space-sm);">Where We Work</span>
        <h2>Full Coverage — Southern Wisconsin</h2>
        <p class="sa-coverage-sub">R.A.H. Solutions reaches these specific communities and neighborhoods within each city we serve.</p>
      </div>

      <div class="sa-coverage-grid">
        <div class="sa-coverage-city">
          <div class="sa-city-name">
            <i data-lucide="map-pin" aria-hidden="true" style="width:18px;height:18px;"></i>
            Edgerton
          </div>
          <ul class="sa-city-hood-list">
            <li>Downtown Edgerton</li>
            <li>County Road W Corridor</li>
            <li>Church St Neighborhoods</li>
            <li>Edgerton High School Area</li>
            <li>Fulton Street District</li>
            <li>Rural Rock County Properties</li>
          </ul>
        </div>
        <div class="sa-coverage-city">
          <div class="sa-city-name">
            <i data-lucide="map-pin" aria-hidden="true" style="width:18px;height:18px;"></i>
            Stoughton
          </div>
          <ul class="sa-city-hood-list">
            <li>Downtown Stoughton</li>
            <li>Sugar Creek Corridor</li>
            <li>US-51 Commercial District</li>
            <li>Veterans Memorial Park Area</li>
            <li>Norway Street Neighborhoods</li>
            <li>East-side Residential Areas</li>
          </ul>
        </div>
        <div class="sa-coverage-city">
          <div class="sa-city-name">
            <i data-lucide="map-pin" aria-hidden="true" style="width:18px;height:18px;"></i>
            Janesville
          </div>
          <ul class="sa-city-hood-list">
            <li>Courthouse Hill</li>
            <li>Rock River Corridor</li>
            <li>Milton Avenue Commercial</li>
            <li>Rockport Neighborhood</li>
            <li>South Janesville Industrial</li>
            <li>Highway 14 Commercial</li>
          </ul>
        </div>
        <div class="sa-coverage-city">
          <div class="sa-city-name">
            <i data-lucide="map-pin" aria-hidden="true" style="width:18px;height:18px;"></i>
            Madison
          </div>
          <ul class="sa-city-hood-list">
            <li>Isthmus / Near East Side</li>
            <li>UW-Madison Campus Area</li>
            <li>West Side / Middleton Edge</li>
            <li>Verona Road Corridor</li>
            <li>South Madison Neighborhoods</li>
            <li>Fitchburg Border Properties</li>
          </ul>
        </div>
      </div>

      <div class="sa-coverage-stats">
        <div class="sa-stat">
          <div class="sa-stat-num">50<span style="font-size:1.4rem;">mi</span></div>
          <div class="sa-stat-lbl">Service radius from Edgerton</div>
        </div>
        <div class="sa-stat">
          <div class="sa-stat-num">4</div>
          <div class="sa-stat-lbl">Cities covered in Southern Wisconsin</div>
        </div>
        <div class="sa-stat">
          <div class="sa-stat-num">17</div>
          <div class="sa-stat-lbl">Services available in all areas</div>
        </div>
        <div class="sa-stat">
          <div class="sa-stat-num">3+</div>
          <div class="sa-stat-lbl">Years of operations in the region</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ── Divider: primary-dark → primary ───────────────────── -->
  <div class="sa-divider" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,60 1200,60 0,60" fill="#1a2b3c"/>
    </svg>
  </div>

  <!-- ── Mid CTA Banner ─────────────────────────────────────── -->
  <section class="sa-cta-mid" aria-label="Request a free estimate">
    <div class="container">
      <p class="sa-cta-eyebrow">Free On-Site Estimates</p>
      <h2>Landscaping Near Me — R.A.H. Solutions Has You Covered</h2>
      <p>Call or submit a request online. We respond the same business day and schedule free on-site estimates within 2–3 business days across Rock and Dane County.</p>
      <div class="sa-cta-actions">
        <a href="tel:6085015123" class="sa-btn-phone">
          <i data-lucide="phone" aria-hidden="true" style="width:20px;height:20px;"></i>
          (608) 501-5123
        </a>
        <a href="/contact" class="sa-btn-estimate">Get a Free Estimate</a>
      </div>
    </div>
  </section>

  <!-- ── Divider: primary → bg-alt ─────────────────────────── -->
  <div class="sa-divider" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,60 1200,60 0,60" fill="#f4f7f9"/>
    </svg>
  </div>

  <!-- ── FAQ Section ────────────────────────────────────────── -->
  <section class="sa-faq" data-animate="fade-up">
    <div class="container">
      <div class="sa-faq-header">
        <span class="sa-section-eyebrow" style="justify-content:center; margin-bottom:var(--space-sm);">Service Area Questions</span>
        <h2>Landscaping Near Me — Common Questions</h2>
        <p class="sa-faq-sub">Answers about where we work and how to get service in your area.</p>
      </div>
      <div class="sa-faq-list">
        <details class="sa-faq-item">
          <summary>Do you serve areas outside Edgerton, WI?</summary>
          <div class="sa-faq-answer">
            <p>Yes. R.A.H. Solutions serves Edgerton, Stoughton, Janesville, and Madison, WI — covering most of Rock County and southern Dane County within a 50-mile radius of our Edgerton base. Contact us to confirm service availability at your specific address, particularly for rural or fringe-area properties.</p>
          </div>
        </details>
        <details class="sa-faq-item">
          <summary>Does R.A.H. Solutions serve Janesville and Madison?</summary>
          <div class="sa-faq-answer">
            <p>Yes. We provide lawn care, landscaping, hardscaping, and other services in Janesville and Madison, WI. Janesville is approximately 15 miles from our Edgerton base; Madison is roughly 30 miles north. Both cities fall within our standard service radius, and we maintain regular routes to both markets.</p>
          </div>
        </details>
        <details class="sa-faq-item">
          <summary>How do I get a landscaping estimate near me in Southern Wisconsin?</summary>
          <div class="sa-faq-answer">
            <p>Call (608) 501-5123 or use the contact form on our website. R.A.H. Solutions offers free on-site estimates with no obligation. We respond the same business day during Mon–Fri 7am–5pm hours and typically schedule site visits within 2–3 business days. Saturday requests are returned Monday morning.</p>
          </div>
        </details>
      </div>
    </div>
  </section>

  <!-- ── Divider ────────────────────────────────────────────── -->
  <div class="sa-divider" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,60 1200,0 1200,60" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ── Closing CTA ────────────────────────────────────────── -->
  <section class="sa-closing" data-animate="fade-up">
    <div class="container">
      <span class="sa-section-eyebrow" style="justify-content:center;">Get Started Today</span>
      <h2>Professional Landscaping — Wherever You Are in Southern Wisconsin</h2>
      <p>Whether you're in Edgerton, Stoughton, Janesville, or Madison — R.A.H. Solutions delivers the same consistent, professional service. Call today for your free estimate.</p>
      <div class="sa-closing-actions">
        <a href="tel:6085015123" class="sa-btn-closing-phone">
          <i data-lucide="phone" aria-hidden="true" style="width:20px;height:20px;"></i>
          (608) 501-5123
        </a>
        <a href="/contact" class="sa-btn-closing-primary">
          <i data-lucide="clipboard-list" aria-hidden="true" style="width:20px;height:20px;"></i>
          Request a Free Estimate
        </a>
      </div>
    </div>
  </section>

  <!-- Last Updated -->
  <div style="text-align:center;padding:var(--space-sm) 0 var(--space-lg);font-size:0.8rem;color:var(--color-text-muted,#888);">
    Last Updated: <?php echo date('F Y'); ?> &nbsp;·&nbsp; Serving Edgerton, Stoughton, Janesville &amp; Madison, WI
  </div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
