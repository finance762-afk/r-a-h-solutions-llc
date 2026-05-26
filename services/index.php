<?php
// ============================================================
// R.A.H. Solutions, LLC — Services Index Page
// All Landscaping Services in Edgerton, WI
// ============================================================

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$pageTitle       = 'Landscaping Services in Edgerton, WI';
$pageDescription = 'R.A.H. Solutions offers 17 landscaping services in Edgerton, WI — lawn care, hardscaping, concrete, design & snow removal. Free estimates. (608) 501-5123.';
$canonicalUrl    = 'https://rahsolutionsllc.com/services';
// SEO: {"@context":"https://schema.org"} — schema and <link rel="canonical"> rendered via head.php
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963874866-f077by-471177305_122202492170208320_1592970065814584229_n.jpg';
$heroPreload     = $ogImage;
$currentPage     = 'services';

// ─── Page-specific FAQs ────────────────────────────────────────
$pageFaqs = [
    [
        '@type'          => 'Question',
        'name'           => 'What landscaping services does R.A.H. Solutions offer in Edgerton, WI?',
        'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'R.A.H. Solutions provides 15 professional services in Edgerton, WI: lawn maintenance, landscape installation, hardscaping, concrete services, shrub trimming, garden maintenance, mulching, sod installation, lawn restoration, spring yard cleanup, fall yard cleanup, snow removal, excavating, residential lawn care, and commercial lawn care.',
        ],
    ],
    [
        '@type'          => 'Question',
        'name'           => 'Does R.A.H. Solutions serve areas outside of Edgerton?',
        'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'Yes. R.A.H. Solutions serves Edgerton and surrounding Rock County communities including Janesville, Stoughton, and Madison, WI — within approximately 50 miles of our base in Edgerton.',
        ],
    ],
    [
        '@type'          => 'Question',
        'name'           => 'How do I get a free estimate from R.A.H. Solutions?',
        'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'Call (608) 501-5123 or submit the contact form on our website. We offer free on-site estimates for all services. Most estimates are scheduled within 2–3 business days.',
        ],
    ],
    [
        '@type'          => 'Question',
        'name'           => 'Are R.A.H. Solutions services available for commercial properties?',
        'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'Yes. We provide commercial lawn care, snow removal, and grounds management for businesses, retail properties, and office parks throughout Rock County. Contracted seasonal programs with monthly invoicing are available.',
        ],
    ],
];

// ─── Schema Markup ─────────────────────────────────────────────
$schemaMarkup = json_encode([
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'           => 'BreadcrumbList',
            'itemListElement' => [
                [
                    '@type'    => 'ListItem',
                    'position' => 1,
                    'name'     => 'Home',
                    'item'     => 'https://rahsolutionsllc.com',
                ],
                [
                    '@type'    => 'ListItem',
                    'position' => 2,
                    'name'     => 'Services',
                    'item'     => 'https://rahsolutionsllc.com/services',
                ],
            ],
        ],
        [
            '@type'           => 'ItemList',
            '@id'             => 'https://rahsolutionsllc.com/services#list',
            'name'            => 'Landscaping Services — R.A.H. Solutions',
            'description'     => 'Complete list of landscaping, lawn care, hardscaping, and seasonal services offered by R.A.H. Solutions, LLC in Edgerton, WI.',
            'numberOfItems'   => count($services),
            'itemListElement' => array_map(function($svc, $i) {
                return [
                    '@type'    => 'ListItem',
                    'position' => $i + 1,
                    'name'     => $svc['name'],
                    'url'      => 'https://rahsolutionsllc.com/services/' . $svc['slug'],
                ];
            }, $services, array_keys($services)),
        ],
        [
            '@type'      => 'FAQPage',
            'mainEntity' => $pageFaqs,
        ],
        [
            '@type'           => 'LocalBusiness',
            '@id'             => 'https://rahsolutionsllc.com#aggregate',
            'name'            => 'R.A.H. Solutions, LLC',
            'aggregateRating' => [
                '@type'       => 'AggregateRating',
                'ratingValue' => '4.9',
                'reviewCount' => '38',
                'bestRating'  => '5',
                'worstRating' => '1',
            ],
        ],
    ],
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<style>
/* ── Services Index Page Styles (.si- prefix) ───────────────── */

/* ── Hero ───────────────────────────────────────────────────── */
.si-hero {
  position: relative;
  min-height: 72vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  overflow: hidden;
  background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963874866-f077by-471177305_122202492170208320_1592970065814584229_n.jpg');
  background-size: 110%;
  background-position: center 40%;
  animation: si-kenburns 22s ease-in-out infinite alternate;
}
@keyframes si-kenburns {
  from { background-size: 110%; background-position: center 38%; }
  to   { background-size: 124%; background-position: center 56%; }
}
.si-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    155deg,
    rgba(var(--color-primary-rgb), 0.91) 0%,
    rgba(var(--color-primary-rgb), 0.75) 60%,
    rgba(var(--color-accent-rgb), 0.18) 100%
  );
  z-index: 1;
}
.si-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='300'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='300' height='300' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.04;
  z-index: 2;
}
.si-hero-inner {
  position: relative;
  z-index: 3;
  padding: var(--space-4xl) var(--space-lg);
  max-width: 820px;
  margin-inline: auto;
}
.si-hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: rgba(var(--color-accent-rgb), 0.18);
  border: 1px solid rgba(var(--color-accent-rgb), 0.38);
  color: var(--color-accent);
  font-family: var(--font-body);
  font-size: 0.72rem;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  padding: var(--space-xs) var(--space-md);
  border-radius: 100px;
  margin-bottom: var(--space-lg);
}
.si-hero h1 {
  font-family: var(--font-heading);
  font-size: clamp(2.4rem, 5.5vw, 4.2rem);
  font-weight: 800;
  line-height: 1.12;
  letter-spacing: -0.02em;
  text-wrap: balance;
  background: linear-gradient(135deg, #ffffff 0%, rgba(var(--color-accent-rgb), 0.88) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  margin-bottom: var(--space-lg);
}
.si-hero-sub {
  font-family: var(--font-body);
  font-size: clamp(1rem, 2vw, 1.2rem);
  color: rgba(255,255,255,0.82);
  line-height: 1.65;
  max-width: 62ch;
  margin-inline: auto;
  margin-bottom: var(--space-xl);
  text-wrap: balance;
}
.si-hero-ctas {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.si-hero-trust {
  margin-top: var(--space-2xl);
  display: flex;
  align-items: center;
  justify-content: center;
  gap: var(--space-xl);
  flex-wrap: wrap;
}
.si-trust-item {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  color: rgba(255,255,255,0.78);
  font-family: var(--font-body);
  font-size: 0.82rem;
  font-weight: 600;
  letter-spacing: 0.04em;
}
.si-trust-item i {
  color: var(--color-accent);
  font-size: 1rem;
}

/* ── Breadcrumb ─────────────────────────────────────────────── */
.si-breadcrumb {
  background: var(--color-bg-alt);
  border-bottom: 1px solid rgba(var(--color-primary-rgb), 0.08);
  padding: var(--space-sm) 0;
}
.si-breadcrumb nav {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  font-family: var(--font-body);
  font-size: 0.82rem;
  color: var(--color-text-light);
}
.si-breadcrumb a {
  color: var(--color-accent);
  transition: opacity var(--transition);
}
.si-breadcrumb a:hover { opacity: 0.75; }
.si-breadcrumb span[aria-hidden] { color: var(--color-text-light); opacity: 0.5; }
.si-breadcrumb span[aria-current] { color: var(--color-text); font-weight: 600; }

/* ── Ticker Strip ───────────────────────────────────────────── */
.si-ticker {
  background: var(--color-primary);
  overflow: hidden;
  padding: var(--space-md) 0;
  border-bottom: 2px solid var(--color-accent);
}
.si-ticker-track {
  display: flex;
  width: max-content;
  animation: si-ticker-scroll 38s linear infinite;
}
.si-ticker:hover .si-ticker-track { animation-play-state: paused; }
@keyframes si-ticker-scroll {
  from { transform: translateX(0); }
  to   { transform: translateX(-50%); }
}
.si-ticker-item {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  white-space: nowrap;
  padding: 0 var(--space-2xl);
  font-family: var(--font-body);
  font-size: 0.8rem;
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: #ffffff;
}
.si-ticker-dot {
  width: 6px;
  height: 6px;
  background: var(--color-accent);
  border-radius: 50%;
  flex-shrink: 0;
}

/* ── Section Dividers ───────────────────────────────────────── */
.si-divider { line-height: 0; overflow: hidden; }
.si-divider svg { display: block; width: 100%; }

/* ── Services Grid Section ──────────────────────────────────── */
.si-grid-section {
  background: var(--color-bg);
  padding: var(--section-pad);
}
.si-section-head {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.si-eyebrow {
  display: inline-block;
  font-family: var(--font-body);
  font-size: 0.72rem;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-md);
}
.si-section-head h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 2.8rem);
  font-weight: 800;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-md);
}
.si-section-head p {
  font-family: var(--font-body);
  font-size: 1.05rem;
  color: var(--color-text-light);
  line-height: 1.65;
  max-width: 60ch;
  margin-inline: auto;
  text-wrap: balance;
}
.si-services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-lg);
}
.si-service-card {
  background: var(--color-bg);
  border: 1px solid rgba(var(--color-primary-rgb), 0.1);
  border-radius: var(--radius-lg);
  padding: var(--space-xl) var(--space-xl) var(--space-lg);
  position: relative;
  overflow: hidden;
  transition: transform var(--transition), box-shadow var(--transition), border-color var(--transition);
  box-shadow: var(--elevation-2);
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}
.si-service-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 3px;
  background: linear-gradient(90deg, var(--color-accent), rgba(var(--color-accent-rgb), 0.4));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform var(--transition-slow);
}
.si-service-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--elevation-3);
  border-color: rgba(var(--color-accent-rgb), 0.3);
}
.si-service-card:hover::before { transform: scaleX(1); }
.si-card-icon {
  width: 52px;
  height: 52px;
  background: rgba(var(--color-accent-rgb), 0.1);
  border-radius: var(--radius);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
  transition: background var(--transition), transform var(--transition);
  flex-shrink: 0;
}
.si-service-card:hover .si-card-icon {
  background: var(--color-accent);
  color: #fff;
  transform: scale(1.1) rotate(-5deg);
}
.si-card-icon i { font-size: 1.4rem; }
.si-card-name {
  font-family: var(--font-heading);
  font-size: 1.15rem;
  font-weight: 700;
  letter-spacing: 0.01em;
  text-wrap: balance;
  color: var(--color-primary);
  transition: color var(--transition);
}
.si-service-card:hover .si-card-name { color: var(--color-accent); }
.si-card-desc {
  font-family: var(--font-body);
  font-size: 0.88rem;
  color: var(--color-text-light);
  line-height: 1.6;
  flex: 1;
}
.si-card-link {
  display: inline-flex;
  align-items: center;
  gap: var(--space-xs);
  font-family: var(--font-body);
  font-size: 0.82rem;
  font-weight: 700;
  color: var(--color-accent);
  letter-spacing: 0.04em;
  text-transform: uppercase;
  transition: gap var(--transition);
  margin-top: auto;
}
.si-service-card:hover .si-card-link { gap: var(--space-sm); }

/* ── Categories Section ─────────────────────────────────────── */
.si-categories-section {
  background: var(--color-bg-alt);
  padding: var(--section-pad);
}
.si-categories-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-2xl);
}
.si-category-block {
  background: var(--color-bg);
  border-radius: var(--radius-lg);
  padding: var(--space-2xl);
  box-shadow: var(--elevation-1);
  border: 1px solid rgba(var(--color-primary-rgb), 0.07);
  position: relative;
  overflow: hidden;
}
.si-category-block::after {
  content: '';
  position: absolute;
  top: -30px;
  right: -30px;
  width: 120px;
  height: 120px;
  background: rgba(var(--color-accent-rgb), 0.05);
  border-radius: 50%;
  pointer-events: none;
}
.si-cat-header {
  display: flex;
  align-items: center;
  gap: var(--space-md);
  margin-bottom: var(--space-lg);
  padding-bottom: var(--space-md);
  border-bottom: 2px solid rgba(var(--color-accent-rgb), 0.18);
}
.si-cat-icon {
  width: 44px;
  height: 44px;
  background: rgba(var(--color-primary-rgb), 0.06);
  border-radius: var(--radius);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-primary);
  flex-shrink: 0;
}
.si-cat-icon i { font-size: 1.2rem; }
.si-cat-title {
  font-family: var(--font-heading);
  font-size: 1.2rem;
  font-weight: 700;
  letter-spacing: 0.01em;
  text-wrap: balance;
  color: var(--color-primary);
}
.si-cat-list {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: var(--space-sm);
}
.si-cat-list li a {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  font-family: var(--font-body);
  font-size: 0.92rem;
  color: var(--color-text);
  padding: var(--space-xs) 0;
  transition: color var(--transition), gap var(--transition);
  border-bottom: 1px solid rgba(var(--color-primary-rgb), 0.05);
}
.si-cat-list li a:hover { color: var(--color-accent); gap: var(--space-md); }
.si-cat-list li a i { color: var(--color-accent); font-size: 0.85rem; flex-shrink: 0; }

/* ── Mid CTA Banner ─────────────────────────────────────────── */
.si-cta-mid {
  position: relative;
  overflow: hidden;
  padding: var(--space-4xl) var(--space-lg);
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-bg-dark) 100%);
  text-align: center;
}
.si-cta-mid::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='300'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='300' height='300' filter='url(%23n)' opacity='1'/%3E%3C/svg%3E");
  opacity: 0.04;
  pointer-events: none;
}
.si-cta-mid::after {
  content: '';
  position: absolute;
  bottom: -60px;
  right: -60px;
  width: 300px;
  height: 300px;
  background: rgba(var(--color-accent-rgb), 0.06);
  border-radius: 50%;
  pointer-events: none;
}
.si-cta-mid-inner {
  position: relative;
  z-index: 2;
  max-width: 680px;
  margin-inline: auto;
}
.si-cta-mid h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 2.8rem);
  font-weight: 800;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: #ffffff;
  margin-bottom: var(--space-md);
}
.si-cta-mid p {
  font-family: var(--font-body);
  font-size: 1.05rem;
  color: rgba(255,255,255,0.78);
  line-height: 1.6;
  margin-bottom: var(--space-xl);
  text-wrap: balance;
}
.si-cta-mid-phone {
  display: block;
  font-family: var(--font-heading);
  font-size: clamp(2rem, 5vw, 3rem);
  font-weight: 800;
  color: var(--color-accent);
  letter-spacing: 0.02em;
  margin-bottom: var(--space-lg);
  text-decoration: none;
  transition: opacity var(--transition);
}
.si-cta-mid-phone:hover { opacity: 0.85; }
.si-cta-mid-actions {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: var(--space-md);
  flex-wrap: wrap;
}

/* ── FAQ Section ────────────────────────────────────────────── */
.si-faq-section {
  background: var(--color-bg);
  padding: var(--section-pad);
}
.si-faq-layout {
  display: grid;
  grid-template-columns: 1fr 1.6fr;
  gap: var(--space-4xl);
  align-items: start;
}
.si-faq-lead h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 2.6rem);
  font-weight: 800;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-md);
}
.si-faq-lead p {
  font-family: var(--font-body);
  font-size: 1rem;
  color: var(--color-text-light);
  line-height: 1.65;
  margin-bottom: var(--space-xl);
  max-width: 45ch;
  text-wrap: balance;
}
.si-faq-cta-inline {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  font-family: var(--font-body);
  font-size: 0.9rem;
  font-weight: 700;
  color: var(--color-accent);
  text-transform: uppercase;
  letter-spacing: 0.06em;
  border: 2px solid var(--color-accent);
  padding: var(--space-sm) var(--space-lg);
  border-radius: var(--radius);
  transition: background var(--transition), color var(--transition);
}
.si-faq-cta-inline:hover {
  background: var(--color-accent);
  color: #fff;
}
.si-faq-list {
  display: flex;
  flex-direction: column;
  gap: var(--space-sm);
}
.si-faq-item {
  border: 1px solid rgba(var(--color-primary-rgb), 0.1);
  border-radius: var(--radius);
  overflow: hidden;
  background: var(--color-bg);
  box-shadow: var(--elevation-1);
}
.si-faq-item summary {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: var(--space-md);
  padding: var(--space-lg) var(--space-xl);
  cursor: pointer;
  font-family: var(--font-heading);
  font-size: 1.05rem;
  font-weight: 700;
  letter-spacing: 0.01em;
  color: var(--color-primary);
  list-style: none;
  transition: background var(--transition), color var(--transition);
  text-wrap: balance;
}
.si-faq-item summary::-webkit-details-marker { display: none; }
.si-faq-item summary::after {
  content: '+';
  font-size: 1.4rem;
  font-weight: 300;
  color: var(--color-accent);
  flex-shrink: 0;
  transition: transform var(--transition);
}
.si-faq-item[open] summary {
  background: rgba(var(--color-primary-rgb), 0.04);
  color: var(--color-accent);
}
.si-faq-item[open] summary::after { transform: rotate(45deg); }
.si-faq-answer {
  padding: 0 var(--space-xl) var(--space-lg);
  font-family: var(--font-body);
  font-size: 0.95rem;
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: 65ch;
}

/* ── Closing CTA ────────────────────────────────────────────── */
.si-cta-close {
  background: var(--color-bg-alt);
  padding: var(--section-pad);
  text-align: center;
}
.si-cta-close-inner {
  max-width: 680px;
  margin-inline: auto;
}
.si-cta-close h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 2.8rem);
  font-weight: 800;
  line-height: 1.15;
  letter-spacing: -0.02em;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-md);
}
.si-cta-close p {
  font-family: var(--font-body);
  font-size: 1.05rem;
  color: var(--color-text-light);
  line-height: 1.65;
  margin-bottom: var(--space-xl);
  text-wrap: balance;
}
.si-cta-close-phone {
  display: block;
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 2.6rem);
  font-weight: 800;
  color: var(--color-primary);
  letter-spacing: 0.02em;
  margin-bottom: var(--space-lg);
  transition: color var(--transition);
}
.si-cta-close-phone:hover { color: var(--color-accent); }
.si-cta-close-actions {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.si-cta-note {
  margin-top: var(--space-md);
  font-family: var(--font-body);
  font-size: 0.82rem;
  color: var(--color-text-light);
}

/* ── Responsive ─────────────────────────────────────────────── */
@media (max-width: 1023px) {
  .si-services-grid { grid-template-columns: repeat(2, 1fr); }
  .si-categories-grid { grid-template-columns: 1fr; }
  .si-faq-layout { grid-template-columns: 1fr; gap: var(--space-2xl); }
  .si-faq-lead p { max-width: 100%; }
}
@media (max-width: 767px) {
  .si-hero { min-height: 70vh; }
  .si-services-grid { grid-template-columns: 1fr; }
  .si-hero-ctas { flex-direction: column; align-items: stretch; }
  .si-hero-trust { gap: var(--space-lg); }
  .si-cta-mid-actions { flex-direction: column; align-items: stretch; }
  .si-cta-close-actions { flex-direction: column; align-items: stretch; }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>

  <!-- ── Hero ─────────────────────────────────────────────── -->
  <section class="si-hero" aria-label="Services page hero">
    <div class="si-hero-inner" data-animate="fade-up">
      <span class="si-hero-eyebrow">
        <i data-lucide="layers"></i>
        15 Professional Services
      </span>
      <h1>All Landscaping Services in Edgerton, WI</h1>
      <p class="si-hero-sub">
        From first mow to the final snowplow of winter — R.A.H. Solutions covers every aspect of your property's outdoor maintenance. Family-owned, Rock County based, free estimates on all work.
      </p>
      <div class="si-hero-ctas">
        <a href="/contact" class="btn-primary" data-magnetic>
          <i data-lucide="phone-call"></i>
          Get a Free Estimate
        </a>
        <a href="tel:6085015123" class="btn-secondary">
          <i data-lucide="phone"></i>
          (608) 501-5123
        </a>
      </div>
      <div class="si-hero-trust">
        <span class="si-trust-item"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
        <span class="si-trust-item"><i data-lucide="star"></i> 4.9★ Google Rating</span>
        <span class="si-trust-item"><i data-lucide="map-pin"></i> Rock County, WI</span>
        <span class="si-trust-item"><i data-lucide="calendar-check"></i> Free Estimates</span>
      </div>
    </div>
  </section>

  <!-- ── Breadcrumb ─────────────────────────────────────── -->
  <div class="si-breadcrumb">
    <div class="container">
      <nav aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span aria-hidden="true">›</span>
        <span aria-current="page">Services</span>
      </nav>
    </div>
  </div>

  <!-- ── Ticker Strip ───────────────────────────────────── -->
  <div class="si-ticker" aria-hidden="true">
    <div class="si-ticker-track">
      <?php
      $tickerItems = [
        'Lawn Maintenance', 'Landscape Installation', 'Hardscaping', 'Concrete Services',
        'Shrub Trimming', 'Snow Removal', 'Sod Installation', 'Spring Cleanup',
        'Fall Cleanup', 'Commercial Lawn Care', 'Mulching', 'Excavating',
        'Free Estimates', 'Licensed & Insured', 'Rock County WI',
      ];
      $repeated = array_merge($tickerItems, $tickerItems);
      foreach ($repeated as $item):
      ?>
        <span class="si-ticker-item">
          <span class="si-ticker-dot"></span>
          <?= htmlspecialchars($item) ?>
        </span>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- ── Divider ────────────────────────────────────────── -->
  <div class="si-divider">
    <svg viewBox="0 0 1200 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,40 1200,0" fill="var(--color-bg)"/>
    </svg>
  </div>

  <!-- ── Services Grid ──────────────────────────────────── -->
  <section class="si-grid-section" id="all-services">
    <div class="container">
      <div class="si-section-head" data-animate="fade-up">
        <span class="si-eyebrow">Everything We Do</span>
        <h2>What Are All the <span class="text-accent">Services</span> We Offer?</h2>
        <p>Whether you need a one-time cleanup or a full seasonal contract, R.A.H. Solutions handles it. Select any service below for full details, pricing guidance, and FAQs.</p>
      </div>

      <?php
      // Icon mapping per service slug
      $serviceIcons = [
        'lawn-maintenance'       => 'scissors',
        'landscape-installation' => 'sprout',
        'hardscaping-services'   => 'hammer',
        'concrete-services'      => 'layers',
        'shrub-trimming'         => 'scissors',
        'garden-maintenance'     => 'flower-2',
        'mulching-services'      => 'leaf',
        'sod-installation'       => 'align-justify',
        'lawn-restoration'       => 'refresh-cw',
        'spring-yard-cleanup'    => 'sun',
        'fall-yard-cleanup'      => 'wind',
        'snow-removal'           => 'snowflake',
        'excavating-services'    => 'shovel',
        'residential-lawn-care'  => 'home',
        'commercial-lawn-care'   => 'building-2',
      ];
      ?>

      <div class="si-services-grid">
        <?php foreach ($services as $i => $svc):
          $icon = $serviceIcons[$svc['slug']] ?? 'leaf';
          $delay = min(($i % 3) * 100, 300);
        ?>
        <article class="si-service-card"
                 data-animate="fade-up"
                 data-delay="<?= $delay ?>"
                 data-tilt
                 data-tilt-max="5"
                 data-tilt-speed="400"
                 data-tilt-glare
                 data-tilt-max-glare="0.1">
          <div class="si-card-icon">
            <i data-lucide="<?= htmlspecialchars($icon) ?>"></i>
          </div>
          <div class="si-card-name"><?= htmlspecialchars($svc['name']) ?></div>
          <p class="si-card-desc"><?= htmlspecialchars($svc['description']) ?></p>
          <a href="/services/<?= htmlspecialchars($svc['slug']) ?>" class="si-card-link">
            Learn More <i data-lucide="arrow-right"></i>
          </a>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ── Divider ────────────────────────────────────────── -->
  <div class="si-divider">
    <svg viewBox="0 0 1200 50" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,0 C300,50 900,0 1200,50 L1200,50 L0,50 Z" fill="var(--color-bg-alt)"/>
    </svg>
  </div>

  <!-- ── Service Categories ─────────────────────────────── -->
  <section class="si-categories-section" aria-labelledby="si-cat-heading">
    <div class="container">
      <div class="si-section-head" data-animate="fade-up">
        <span class="si-eyebrow">Browse by Category</span>
        <h2 id="si-cat-heading">How Do You Find the Right Service for Your Property?</h2>
        <p>Not sure where to start? Explore by category to match your current need — from ongoing lawn maintenance to one-time seasonal projects.</p>
      </div>

      <div class="si-categories-grid" data-animate="fade-up">

        <!-- Lawn Care -->
        <div class="si-category-block">
          <div class="si-cat-header">
            <div class="si-cat-icon"><i data-lucide="scissors"></i></div>
            <div class="si-cat-title">Lawn Care &amp; Maintenance</div>
          </div>
          <ul class="si-cat-list">
            <li><a href="/services/lawn-maintenance"><i data-lucide="chevron-right"></i> Lawn Maintenance</a></li>
            <li><a href="/services/residential-lawn-care"><i data-lucide="chevron-right"></i> Residential Lawn Care</a></li>
            <li><a href="/services/commercial-lawn-care"><i data-lucide="chevron-right"></i> Commercial Lawn Care</a></li>
            <li><a href="/services/lawn-restoration"><i data-lucide="chevron-right"></i> Lawn Restoration</a></li>
            <li><a href="/services/sod-installation"><i data-lucide="chevron-right"></i> Sod Installation</a></li>
          </ul>
        </div>

        <!-- Landscape Work -->
        <div class="si-category-block">
          <div class="si-cat-header">
            <div class="si-cat-icon"><i data-lucide="sprout"></i></div>
            <div class="si-cat-title">Landscape Installation &amp; Plants</div>
          </div>
          <ul class="si-cat-list">
            <li><a href="/services/landscape-installation"><i data-lucide="chevron-right"></i> Landscape Installation</a></li>
            <li><a href="/services/shrub-trimming"><i data-lucide="chevron-right"></i> Shrub Trimming</a></li>
            <li><a href="/services/garden-maintenance"><i data-lucide="chevron-right"></i> Garden Maintenance</a></li>
            <li><a href="/services/mulching-services"><i data-lucide="chevron-right"></i> Mulching Services</a></li>
          </ul>
        </div>

        <!-- Hardscaping & Concrete -->
        <div class="si-category-block">
          <div class="si-cat-header">
            <div class="si-cat-icon"><i data-lucide="layers"></i></div>
            <div class="si-cat-title">Hardscaping &amp; Concrete</div>
          </div>
          <ul class="si-cat-list">
            <li><a href="/services/hardscaping-services"><i data-lucide="chevron-right"></i> Hardscaping Services</a></li>
            <li><a href="/services/concrete-services"><i data-lucide="chevron-right"></i> Concrete Services</a></li>
            <li><a href="/services/excavating-services"><i data-lucide="chevron-right"></i> Excavating Services</a></li>
          </ul>
        </div>

        <!-- Seasonal Services -->
        <div class="si-category-block">
          <div class="si-cat-header">
            <div class="si-cat-icon"><i data-lucide="calendar"></i></div>
            <div class="si-cat-title">Seasonal Services</div>
          </div>
          <ul class="si-cat-list">
            <li><a href="/services/spring-yard-cleanup"><i data-lucide="chevron-right"></i> Spring Yard Cleanup</a></li>
            <li><a href="/services/fall-yard-cleanup"><i data-lucide="chevron-right"></i> Fall Yard Cleanup &amp; Leaf Removal</a></li>
            <li><a href="/services/snow-removal"><i data-lucide="chevron-right"></i> Snow Removal</a></li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- ── Divider ────────────────────────────────────────── -->
  <div class="si-divider">
    <svg viewBox="0 0 1200 50" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,50 1200,0 1200,50" fill="var(--color-primary)"/>
    </svg>
  </div>

  <!-- ── Mid CTA Banner ─────────────────────────────────── -->
  <section class="si-cta-mid" aria-label="Get a free estimate">
    <div class="si-cta-mid-inner" data-animate="fade-up">
      <span class="si-eyebrow" style="color: var(--color-accent); display: block; margin-bottom: var(--space-md);">Free Estimates — No Obligation</span>
      <h2>Not Sure Which Service You Need?</h2>
      <p>Call us and describe the project. We'll walk the property, identify what needs doing, and give you a straight quote — no sales pitch, no upsell pressure.</p>
      <a href="tel:6085015123" class="si-cta-mid-phone">(608) 501-5123</a>
      <div class="si-cta-mid-actions">
        <a href="/contact" class="btn-primary" data-magnetic>
          <i data-lucide="send"></i>
          Request an Estimate Online
        </a>
        <a href="/about" class="btn-secondary" style="border-color: rgba(255,255,255,0.35); color: rgba(255,255,255,0.85);">
          <i data-lucide="users"></i>
          About Our Crew
        </a>
      </div>
    </div>
  </section>

  <!-- ── Divider ────────────────────────────────────────── -->
  <div class="si-divider">
    <svg viewBox="0 0 1200 50" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,50 C400,0 800,50 1200,0 L1200,0 L0,0 Z" fill="var(--color-bg)"/>
    </svg>
  </div>

  <!-- ── FAQ Section ────────────────────────────────────── -->
  <section class="si-faq-section" aria-labelledby="si-faq-heading">
    <div class="container">
      <div class="si-faq-layout">

        <div class="si-faq-lead" data-animate="fade-up">
          <span class="si-eyebrow">Common Questions</span>
          <h2 id="si-faq-heading">What Are You Probably Wondering?</h2>
          <p>Quick answers to the questions we hear most from Edgerton homeowners and business owners before they call.</p>
          <a href="/contact" class="si-faq-cta-inline">
            <i data-lucide="message-square"></i>
            Ask Your Own Question
          </a>
        </div>

        <div class="si-faq-list" data-animate="fade-up" data-delay="150">
          <?php foreach ($pageFaqs as $faq): ?>
          <details class="si-faq-item">
            <summary><?= htmlspecialchars($faq['name']) ?></summary>
            <div class="si-faq-answer">
              <p><?= htmlspecialchars($faq['acceptedAnswer']['text']) ?></p>
            </div>
          </details>
          <?php endforeach; ?>
        </div>

      </div>
    </div>
  </section>

  <!-- ── Divider ────────────────────────────────────────── -->
  <div class="si-divider">
    <svg viewBox="0 0 1200 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,40 0,40" fill="var(--color-bg-alt)"/>
    </svg>
  </div>

  <!-- ── Closing CTA ────────────────────────────────────── -->
  <section class="si-cta-close" aria-label="Final call to action">
    <div class="container">
      <div class="si-cta-close-inner" data-animate="fade-up">
        <span class="si-eyebrow">Edgerton, WI &amp; Rock County</span>
        <h2>How Is Your Property Handled from <span class="text-accent">Start to Finish</span>?</h2>
        <p>R.A.H. Solutions handles lawn care, hardscaping, seasonal cleanup, and snow removal across Rock County. One call gets you a free on-site estimate from Robert and his crew — typically scheduled within 2–3 business days.</p>
        <a href="tel:6085015123" class="si-cta-close-phone">(608) 501-5123</a>
        <div class="si-cta-close-actions">
          <a href="/contact" class="btn-primary" data-magnetic>
            <i data-lucide="calendar"></i>
            Schedule Your Free Estimate
          </a>
          <a href="/service-area" class="btn-secondary">
            <i data-lucide="map-pin"></i>
            Check Our Service Area
          </a>
        </div>
        <p class="si-cta-note">Licensed &amp; Insured &nbsp;·&nbsp; Serving Edgerton, Janesville, Stoughton, Madison &amp; Surrounding Areas</p>
      </div>
    </div>
  </section>

  <!-- Last Updated -->
  <div style="text-align:center;padding:var(--space-sm) 0 var(--space-lg);font-size:0.8rem;color:var(--color-text-muted,#888);">
    Last Updated: <?php echo date('F Y'); ?> &nbsp;·&nbsp; Serving Edgerton, WI and Southern Wisconsin
  </div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
