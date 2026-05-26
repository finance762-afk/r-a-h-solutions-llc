<?php
// ============================================================
// Spring Yard Cleanup — R.A.H. Solutions, LLC
// ============================================================
$pageTitle       = 'Spring Yard Cleanup | Edgerton, WI';
$pageDescription = 'Spring yard cleanup in Edgerton, WI — debris removal, bed prep & lawn restoration for a clean start. R.A.H. Solutions. Free estimates. Call (608) 501-5123.';
$canonicalUrl    = 'https://rahsolutionsllc.com/services/spring-yard-cleanup';
// SEO: {"@context":"https://schema.org"} — schema and <link rel="canonical"> rendered via head.php
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963883232-jst9wv-475547624_122211163226208320_5983283941194375535_n.jpg';
$currentPage     = 'service-spring-yard-cleanup';
$heroPreload     = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963883232-jst9wv-475547624_122211163226208320_5983283941194375535_n.jpg';

$faqs = [
  [
    '@type'          => 'Question',
    'name'           => 'When should spring cleanup happen in Wisconsin?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'In Edgerton and Rock County, spring cleanup works best once overnight lows consistently hold above 35°F and soil temps reach around 50°F — typically mid-April to early May. Starting too early risks compacting soft, saturated soil and disturbing perennial crowns that haven\'t fully broken dormancy. We schedule based on actual conditions, not a fixed date on the calendar.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'What does a spring yard cleanup include?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'Our spring cleanup includes removal of winter debris and dead branches, leaf cleanup from fall blowback and winter accumulation, light raking and thatch removal, bed edging, and pre-mulch bed preparation. Mulching, overseeding, and fertilization are available as add-ons but are not included in the base cleanup price.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'Do you remove the debris or leave it?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'All debris is hauled away the same day as the cleanup — we don\'t leave piles at the curb for you to deal with. Our crew loads and removes everything as part of the service. There\'s no separate hauling fee for standard residential cleanup jobs.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'How much does spring cleanup cost in Edgerton?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'Spring cleanup in Edgerton starts around $250 for small residential yards and increases based on lot size, the amount of debris accumulated over winter, and any add-ons like mulching or overseeding. Most residential properties fall in the $250–$600 range. We provide a firm quote after a free site walkthrough.',
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
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Spring Yard Cleanup', 'item' => 'https://rahsolutionsllc.com/services/spring-yard-cleanup'],
      ],
    ],
    [
      '@type'       => 'Service',
      '@id'         => 'https://rahsolutionsllc.com/services/spring-yard-cleanup/#service',
      'name'        => 'Spring Yard Cleanup',
      'description' => 'Post-winter debris removal, bed edging, thatch raking, and pre-mulch bed preparation for residential properties in Edgerton, Stoughton, Janesville, and Madison, WI.',
      'provider'    => ['@type' => 'LocalBusiness', '@id' => 'https://rahsolutionsllc.com/#business'],
      'areaServed'  => [
        ['@type' => 'City', 'name' => 'Edgerton'],
        ['@type' => 'City', 'name' => 'Stoughton'],
        ['@type' => 'City', 'name' => 'Janesville'],
        ['@type' => 'City', 'name' => 'Madison'],
      ],
      'serviceType' => 'Spring Yard Cleanup',
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
   Spring Yard Cleanup — Page-Specific Styles (.syc-)
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
.breadcrumb-list li a:hover {
  color: var(--color-accent);
}
.breadcrumb-list li.current {
  color: var(--color-accent);
  font-weight: 600;
}
.breadcrumb-sep {
  color: rgba(255,255,255,0.3);
  font-size: var(--font-size-xs);
}

/* ── Inner Hero ───────────────────────────────────────────── */
.syc-hero {
  position: relative;
  min-height: 60vh;
  display: flex;
  align-items: center;
  overflow: hidden;
  background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963883232-jst9wv-475547624_122211163226208320_5983283941194375535_n.jpg');
  background-size: cover;
  background-position: center;
  animation: syc-kenburns 20s ease-in-out infinite alternate;
}
@keyframes syc-kenburns {
  from { background-size: 110%; background-position: center 35%; }
  to   { background-size: 122%; background-position: center 60%; }
}
.syc-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    135deg,
    rgba(var(--color-primary-rgb), 0.90) 0%,
    rgba(var(--color-primary-rgb), 0.60) 55%,
    rgba(var(--color-accent-rgb), 0.18) 100%
  );
  z-index: 1;
}
.syc-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 2;
  pointer-events: none;
}
.syc-hero-inner {
  position: relative;
  z-index: 3;
  padding: var(--space-4xl) 0 var(--space-3xl);
}
.syc-eyebrow {
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
.syc-eyebrow::before {
  content: '';
  display: block;
  width: 28px;
  height: 2px;
  background: var(--color-accent);
  flex-shrink: 0;
}
.syc-hero h1 {
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
.syc-hero-sub {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.82);
  max-width: 52ch;
  line-height: 1.6;
  margin-bottom: var(--space-xl);
}
.syc-hero-ctas {
  display: flex;
  gap: var(--space-md);
  flex-wrap: wrap;
  align-items: center;
}
.syc-btn-primary {
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
.syc-btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-accent-dark);
}
.syc-btn-primary:active {
  transform: translateY(2px);
  box-shadow: 0 2px 0 var(--color-accent-dark);
}
.syc-btn-secondary {
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
.syc-btn-secondary:hover {
  background: rgba(255,255,255,0.12);
  border-color: rgba(255,255,255,0.8);
}
.syc-hero-trust {
  display: flex;
  align-items: center;
  gap: var(--space-lg);
  margin-top: var(--space-xl);
  flex-wrap: wrap;
}
.syc-trust-item {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.75);
  font-weight: 600;
}
.syc-trust-item i {
  color: var(--color-accent);
  width: 16px;
  height: 16px;
}

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
  animation: ticker-scroll 32s linear infinite;
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
.ticker-sep {
  color: var(--color-accent);
  font-size: 1.2rem;
  line-height: 1;
}

/* ── Dividers ─────────────────────────────────────────────── */
.divider-wrap {
  display: block;
  line-height: 0;
  overflow: hidden;
}
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
.syc-detail {
  padding: var(--space-4xl) 0 var(--space-3xl);
  background: var(--color-bg);
}
.syc-detail-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3xl);
  align-items: center;
}
.syc-detail-content { order: 1; }
.syc-detail-image   { order: 2; }
.syc-detail h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-lg);
}
.syc-detail p {
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: 65ch;
  margin-bottom: var(--space-md);
}
.syc-detail p:last-of-type { margin-bottom: var(--space-xl); }
.syc-updated {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  font-style: italic;
}
.syc-image-frame {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
}
.syc-image-frame::before {
  content: '';
  position: absolute;
  inset: 0;
  border: 3px solid rgba(var(--color-accent-rgb), 0.25);
  border-radius: var(--radius-lg);
  z-index: 2;
  pointer-events: none;
}
.syc-image-frame picture img {
  width: 100%;
  height: 420px;
  object-fit: cover;
  display: block;
  transition: transform var(--transition-slow);
}
.syc-image-frame:hover picture img { transform: scale(1.03); }
.syc-image-badge {
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
.syc-btn-detail {
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
.syc-btn-detail:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-primary-dark);
}
.syc-btn-detail:active {
  transform: translateY(2px);
  box-shadow: 0 2px 0 var(--color-primary-dark);
}

/* ── SIGNATURE: Stats Band ────────────────────────────────── */
.syc-stats {
  background: var(--color-bg-dark);
  padding: var(--space-3xl) 0;
  position: relative;
  overflow: hidden;
}
.syc-stats::before {
  content: '';
  position: absolute;
  top: -60px; left: -60px;
  width: 320px; height: 320px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.06);
  pointer-events: none;
}
.syc-stats::after {
  content: '';
  position: absolute;
  bottom: -80px; right: -40px;
  width: 400px; height: 400px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.04);
  pointer-events: none;
}
.syc-stats-inner {
  position: relative;
  z-index: 1;
}
.syc-stats-label {
  text-align: center;
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-2xl);
}
.syc-stats-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-xl);
}
.syc-stat-item {
  text-align: center;
  padding: var(--space-xl);
  border: 1px solid rgba(var(--color-accent-rgb), 0.15);
  border-radius: var(--radius-lg);
  background: rgba(255,255,255,0.03);
  transition: border-color var(--transition-base), background var(--transition-base);
}
.syc-stat-item:hover {
  border-color: rgba(var(--color-accent-rgb), 0.35);
  background: rgba(var(--color-accent-rgb), 0.05);
}
.syc-stat-number {
  font-family: var(--font-heading);
  font-size: clamp(2.2rem, 4vw, 3.2rem);
  font-weight: 700;
  color: var(--color-accent);
  line-height: 1;
  margin-bottom: var(--space-xs);
  letter-spacing: -0.02em;
}
.syc-stat-label {
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.65);
  line-height: 1.4;
  max-width: 18ch;
  margin: 0 auto;
}

/* ── Mid CTA ──────────────────────────────────────────────── */
.syc-cta-mid {
  position: relative;
  padding: var(--space-3xl) 0;
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  overflow: hidden;
}
.syc-cta-mid::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
  z-index: 0;
}
.syc-cta-mid .container {
  position: relative;
  z-index: 1;
  text-align: center;
}
.syc-cta-eyebrow {
  display: inline-block;
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.syc-cta-mid h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 2.8rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: #ffffff;
  margin-bottom: var(--space-md);
}
.syc-cta-mid > .container > p {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.8);
  max-width: 55ch;
  margin: 0 auto var(--space-xl);
  line-height: 1.6;
}
.syc-cta-actions {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.syc-btn-phone {
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
.syc-btn-phone:hover {
  transform: translateY(-2px);
  box-shadow: var(--shadow-xl);
}
.syc-btn-cta {
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
.syc-btn-cta:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-accent-dark);
}
.syc-btn-cta:active {
  transform: translateY(2px);
  box-shadow: 0 2px 0 var(--color-accent-dark);
}

/* ── Why Choose Section ───────────────────────────────────── */
.syc-why {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.syc-why-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.syc-why h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.syc-why .sub {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto;
}
.syc-why-cards {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
}
.syc-why-card {
  background: var(--color-bg);
  border-radius: var(--radius-lg);
  padding: var(--space-xl) var(--space-lg);
  box-shadow: var(--shadow-card);
  transition: transform var(--transition-base), box-shadow var(--transition-base), background var(--transition-base);
  position: relative;
  overflow: hidden;
}
.syc-why-card::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 3px;
  background: var(--color-accent);
  transform: scaleX(0);
  transform-origin: left;
  transition: transform var(--transition-base);
}
.syc-why-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-xl);
  background: var(--color-primary);
}
.syc-why-card:hover::before { transform: scaleX(1); }
.syc-why-card:hover .syc-why-title,
.syc-why-card:hover .syc-why-text { color: rgba(255,255,255,0.9); }
.syc-why-card:hover .syc-why-icon {
  background: rgba(var(--color-accent-rgb), 0.2);
  color: var(--color-accent);
}
.syc-why-icon {
  width: 52px;
  height: 52px;
  border-radius: var(--radius-md);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
  margin-bottom: var(--space-md);
  transition: background var(--transition-base), color var(--transition-base);
}
.syc-why-title {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  font-weight: 600;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
  transition: color var(--transition-base);
}
.syc-why-text {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  transition: color var(--transition-base);
}

/* ── Process Section ──────────────────────────────────────── */
.syc-process {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
}
.syc-process-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.syc-process h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.syc-process .sub {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto;
}
.syc-steps {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
  position: relative;
}
.syc-steps::before {
  content: '';
  position: absolute;
  top: 32px;
  left: calc(12.5% + 26px);
  right: calc(12.5% + 26px);
  height: 2px;
  background: linear-gradient(to right, var(--color-accent), rgba(var(--color-accent-rgb), 0.2));
  pointer-events: none;
}
.syc-step {
  text-align: center;
  padding: var(--space-lg);
}
.syc-step-num {
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
.syc-step:hover .syc-step-num {
  background: var(--color-accent);
  border-color: var(--color-accent);
  color: var(--color-bg-dark);
}
.syc-step-title {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 600;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.syc-step-desc {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  max-width: 22ch;
  margin: 0 auto;
}

/* ── FAQ Section ──────────────────────────────────────────── */
.syc-faq {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.syc-faq-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.syc-faq h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.syc-faq .sub {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto;
}
.syc-faq-list {
  max-width: 800px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}
.syc-faq-item {
  background: var(--color-bg);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-sm);
  border: 1px solid rgba(var(--color-primary-rgb), 0.08);
  overflow: hidden;
}
.syc-faq-item summary {
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
.syc-faq-item summary::-webkit-details-marker { display: none; }
.syc-faq-item summary::after {
  content: '+';
  font-size: 1.4rem;
  color: var(--color-accent);
  flex-shrink: 0;
  transition: transform var(--transition-base);
}
.syc-faq-item[open] summary::after { transform: rotate(45deg); }
.syc-faq-item[open] summary { color: var(--color-accent); }
.syc-faq-answer {
  padding: 0 var(--space-xl) var(--space-lg);
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: 65ch;
}

/* ── Closing CTA ──────────────────────────────────────────── */
.syc-closing {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
  text-align: center;
}
.syc-closing h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-md);
}
.syc-closing p {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto var(--space-xl);
  line-height: 1.6;
}
.syc-closing-actions {
  display: flex;
  justify-content: center;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.syc-btn-closing-accent {
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
.syc-btn-closing-accent:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-accent-dark);
}
.syc-btn-closing-primary {
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
.syc-btn-closing-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-primary-dark);
}

/* ── Responsive ───────────────────────────────────────────── */
@media (max-width: 1023px) {
  .syc-stats-grid  { grid-template-columns: repeat(2, 1fr); }
  .syc-why-cards   { grid-template-columns: repeat(2, 1fr); }
  .syc-steps       { grid-template-columns: repeat(2, 1fr); }
  .syc-steps::before { display: none; }
}
@media (max-width: 767px) {
  .syc-detail-grid       { grid-template-columns: 1fr; }
  .syc-detail-image      { order: -1; }
  .syc-image-frame picture img { height: 280px; }
  .syc-stats-grid        { grid-template-columns: repeat(2, 1fr); gap: var(--space-md); }
  .syc-why-cards         { grid-template-columns: 1fr; }
  .syc-steps             { grid-template-columns: 1fr; }
  .syc-hero-ctas         { flex-direction: column; align-items: flex-start; }
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
        <li class="current" aria-current="page">Spring Yard Cleanup</li>
      </ol>
    </div>
  </nav>

  <!-- ── Inner Hero ─────────────────────────────────────────── -->
  <section class="syc-hero" aria-label="Spring Yard Cleanup Services">
    <div class="container syc-hero-inner">
      <span class="syc-eyebrow">
        <i data-lucide="leaf" aria-hidden="true" style="width:14px;height:14px;"></i>
        Post-Winter Property Reset
      </span>
      <h1>Spring Yard Cleanup in Edgerton, WI</h1>
      <p class="syc-hero-sub">Debris removal, bed prep, and lawn restoration starting at $250 — timed to Wisconsin's actual soil conditions so your property comes out of winter clean, not rushed.</p>
      <div class="syc-hero-ctas">
        <a href="tel:6085015123" class="syc-btn-primary">
          <i data-lucide="phone" aria-hidden="true" style="width:18px;height:18px;"></i>
          Call (608) 501-5123
        </a>
        <a href="/contact" class="syc-btn-secondary">Get a Free Estimate</a>
      </div>
      <div class="syc-hero-trust">
        <span class="syc-trust-item">
          <i data-lucide="shield-check" aria-hidden="true"></i> Licensed &amp; Insured
        </span>
        <span class="syc-trust-item">
          <i data-lucide="star" aria-hidden="true"></i> 4.9-Star Rated
        </span>
        <span class="syc-trust-item">
          <i data-lucide="truck" aria-hidden="true"></i> Debris Hauled Away Same Day
        </span>
      </div>
    </div>
  </section>

  <!-- ── Proof Ticker Strip ─────────────────────────────────── -->
  <div class="ticker-strip" aria-hidden="true">
    <div class="ticker-track">
      <span class="ticker-item">Debris Removal<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Bed Edging &amp; Prep<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">April–May Scheduling<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Same-Day Haul Away<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Edgerton · Stoughton · Madison<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Free Estimates<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Licensed &amp; Insured<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">3+ Years in Rock County<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Debris Removal<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Bed Edging &amp; Prep<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">April–May Scheduling<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Same-Day Haul Away<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Edgerton · Stoughton · Madison<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Free Estimates<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Licensed &amp; Insured<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">3+ Years in Rock County<span class="ticker-sep">✦</span></span>
    </div>
  </div>

  <!-- ── Divider ────────────────────────────────────────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,40 1200,40 0,40" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ── Service Detail ─────────────────────────────────────── -->
  <section class="syc-detail" data-animate="fade-up">
    <div class="container">
      <div class="syc-detail-grid">

        <div class="syc-detail-content">
          <span class="section-eyebrow">What's Included</span>
          <h2>What Is a <span class="text-accent">Spring Reset</span> That Works With Wisconsin's Soil?</h2>

          <p>Spring cleanup in Edgerton, WI starts at $250 for small residential yards and covers winter debris removal, dead branch collection, leaf cleanup from fall blowback and winter accumulation, bed edging, light raking and thatch removal, and pre-mulch bed preparation. Most residential lots fall between $250–$600 depending on size and how much the winter left behind.</p>

          <p>Timing is the detail most cleanup services skip. In Rock County, disturbing soil before it's ready — before overnight lows consistently hold above 35°F and soil temps approach 50°F — compacts the saturated ground and tears perennial crowns that are just breaking dormancy. We schedule based on actual conditions, not a fixed calendar date. That usually puts Edgerton cleanups in the mid-April to early-May window, but we watch the forecast and adjust.</p>

          <p>Wisconsin winters leave specific damage that a standard rake job doesn't catch: heaved edging from repeated freeze-thaw cycles, crown damage on tender perennials, and salt or sand contamination along walks and driveways. We check for all of it during cleanup and flag any issues before the growing season gets underway.</p>

          <p>Mulch, overseeding, and fertilization are available as add-ons but are quoted separately. Cleanup takes a half-day to a full day depending on lot size — we arrive, complete the full job, and haul everything away before we leave. No piles waiting at the curb.</p>

          <div class="answer-block">
            <h3>When should I schedule spring yard cleanup in Edgerton?</h3>
            <p>The ideal window for spring cleanup in Edgerton is mid-April through early May, after the last hard frost and once soil temps reach around 50°F. Starting too early compacts saturated ground and damages perennial crowns. A typical spring cleanup includes debris removal, thatch raking, bed edging, and the season's first mow — most residential yards take a half-day to a full day to complete.</p>
          </div>

          <p class="syc-updated">Last Updated: May 2026 · Serving Edgerton, WI and surrounding Rock &amp; Dane County communities.</p>

          <a href="/contact" class="syc-btn-detail">
            <i data-lucide="calendar-check" aria-hidden="true" style="width:18px;height:18px;"></i>
            Schedule Your Spring Cleanup
          </a>
        </div>

        <div class="syc-detail-image">
          <div class="syc-image-frame">
            <picture>
              <source srcset="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963884244-pe5czp-475493043_122211163190208320_5361770049466921459_n.jpg" type="image/webp">
              <img
                src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963884244-pe5czp-475493043_122211163190208320_5361770049466921459_n.jpg"
                alt="Spring yard cleanup bed prep and debris removal Edgerton Wisconsin"
                width="600"
                height="420"
                loading="lazy"
              >
            </picture>
            <span class="syc-image-badge">Edgerton, WI</span>
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
  <section class="syc-stats" aria-label="Spring cleanup service statistics">
    <div class="container syc-stats-inner">
      <p class="syc-stats-label">Spring Cleanup — By the Numbers</p>
      <div class="syc-stats-grid">
        <div class="syc-stat-item" data-animate="fade-up">
          <div class="syc-stat-number">$250<span style="font-size:1.5rem;">+</span></div>
          <div class="syc-stat-label">Starting price for small residential yards</div>
        </div>
        <div class="syc-stat-item" data-animate="fade-up">
          <div class="syc-stat-number">Apr–May</div>
          <div class="syc-stat-label">Prime scheduling window in Rock County</div>
        </div>
        <div class="syc-stat-item" data-animate="fade-up">
          <div class="syc-stat-number">3+</div>
          <div class="syc-stat-label">Years serving Edgerton, WI properties</div>
        </div>
        <div class="syc-stat-item" data-animate="fade-up">
          <div class="syc-stat-number">4.9★</div>
          <div class="syc-stat-label">Average customer rating across 47 reviews</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ── Divider: bg-dark → primary (diagonal up) ───────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,60 1200,0 1200,60" fill="#1a2b3c"/>
    </svg>
  </div>

  <!-- ── Mid CTA ────────────────────────────────────────────── -->
  <section class="syc-cta-mid" aria-label="Schedule spring cleanup">
    <div class="container">
      <p class="syc-cta-eyebrow">Spring Booking Fills Fast — April Slots Are Limited</p>
      <h2>How Do You Prevent Winter Damage from Carrying Into Growing Season?</h2>
      <p>Early-season cleanup slots in Edgerton go fast. Call now to lock in your April or May date — same-day debris haul-away always included.</p>
      <div class="syc-cta-actions">
        <a href="tel:6085015123" class="syc-btn-phone">
          <i data-lucide="phone" aria-hidden="true" style="width:20px;height:20px;"></i>
          (608) 501-5123
        </a>
        <a href="/contact" class="syc-btn-cta">Get a Free Estimate</a>
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
  <section class="syc-why" data-animate="fade-up">
    <div class="container">
      <div class="syc-why-header">
        <span class="section-eyebrow">Why R.A.H. Solutions</span>
        <h2>How Is Spring Cleanup Built Around <span class="text-accent">Wisconsin Winters</span>?</h2>
        <p class="sub">We're not a national service running the same protocol in every state. Our cleanups are timed and scoped for Rock County's specific freeze-thaw conditions.</p>
      </div>
      <div class="syc-why-cards">
        <div class="syc-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="syc-why-icon">
            <i data-lucide="thermometer" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="syc-why-title">Timed for Wisconsin's Actual Soil Temps</h3>
          <p class="syc-why-text">We don't start cleanup before the ground is ready. Working saturated soil compacts it and damages perennial roots — we schedule around conditions, not the calendar.</p>
        </div>
        <div class="syc-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="syc-why-icon">
            <i data-lucide="shovel" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="syc-why-title">Bed Prep Included for Mulch or Plantings</h3>
          <p class="syc-why-text">Every cleanup includes bed edging and pre-mulch prep so your beds are ready for the season the moment cleanup wraps — no second mobilization needed.</p>
        </div>
        <div class="syc-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="syc-why-icon">
            <i data-lucide="truck" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="syc-why-title">Debris Hauled Away Same Day</h3>
          <p class="syc-why-text">No piles left at the curb. Our crew loads and removes all debris before leaving your property — no extra hauling fee for standard residential jobs.</p>
        </div>
        <div class="syc-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="syc-why-icon">
            <i data-lucide="calendar-range" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="syc-why-title">Early-Season Booking Fills Fast</h3>
          <p class="syc-why-text">Spring is the busiest two-month window of the year. Clients who book in March get their pick of April dates — waiting until May means waiting in line.</p>
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
  <section class="syc-process" data-animate="fade-up">
    <div class="container">
      <div class="syc-process-header">
        <span class="section-eyebrow">How It Works</span>
        <h2>What Are the 4 Steps from Call to <span class="text-accent">Clean Yard</span>?</h2>
        <p class="sub">Straightforward process with no guesswork. We handle the scheduling, the crew, and the haul-away.</p>
      </div>
      <div class="syc-steps">
        <div class="syc-step">
          <div class="syc-step-num">1</div>
          <h3 class="syc-step-title">Site Walkthrough</h3>
          <p class="syc-step-desc">We assess lot size, winter damage, debris volume, and bed condition to build an accurate quote.</p>
        </div>
        <div class="syc-step">
          <div class="syc-step-num">2</div>
          <h3 class="syc-step-title">Crew Assignment &amp; Scheduling</h3>
          <p class="syc-step-desc">Your crew and cleanup date are confirmed in writing. We monitor soil conditions to time it right.</p>
        </div>
        <div class="syc-step">
          <div class="syc-step-num">3</div>
          <h3 class="syc-step-title">Full Cleanup Day</h3>
          <p class="syc-step-desc">Debris removal, thatch raking, bed edging, and pre-mulch prep — all completed in one visit.</p>
        </div>
        <div class="syc-step">
          <div class="syc-step-num">4</div>
          <h3 class="syc-step-title">Final Inspection &amp; Add-On Options</h3>
          <p class="syc-step-desc">We walk through the finished property and discuss mulching, overseeding, or fertilization add-ons before leaving.</p>
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
  <section class="syc-faq" data-animate="fade-up">
    <div class="container">
      <div class="syc-faq-header">
        <span class="section-eyebrow">Common Questions</span>
        <h2>What Are Your Spring Cleanup Questions?</h2>
        <p class="sub">Direct answers about timing, pricing, and what our spring cleanup covers in Edgerton and Rock County.</p>
      </div>
      <div class="syc-faq-list">
        <details class="syc-faq-item">
          <summary>When should spring cleanup happen in Wisconsin?</summary>
          <div class="syc-faq-answer">
            <p>In Edgerton and Rock County, spring cleanup works best once overnight lows consistently hold above 35°F and soil temps reach around 50°F — typically mid-April to early May. Starting too early risks compacting soft, saturated soil and disturbing perennial crowns that haven't fully broken dormancy. We schedule based on actual conditions, not a fixed date.</p>
          </div>
        </details>
        <details class="syc-faq-item">
          <summary>What does a spring yard cleanup include?</summary>
          <div class="syc-faq-answer">
            <p>Our spring cleanup includes winter debris and dead branch removal, leaf cleanup from fall blowback and winter accumulation, light raking and thatch removal, bed edging, and pre-mulch bed prep. Mulching, overseeding, and fertilization are available add-ons, quoted separately from the base cleanup price.</p>
          </div>
        </details>
        <details class="syc-faq-item">
          <summary>Do you remove the debris or leave it?</summary>
          <div class="syc-faq-answer">
            <p>All debris is hauled away the same day. We don't leave piles at the curb — our crew loads and removes everything before we leave. There's no separate hauling fee for standard residential cleanup jobs in the Edgerton area.</p>
          </div>
        </details>
        <details class="syc-faq-item">
          <summary>How much does spring cleanup cost in Edgerton?</summary>
          <div class="syc-faq-answer">
            <p>Spring cleanup in Edgerton starts around $250 for small residential yards and increases based on lot size, debris volume, and any add-ons. Most residential properties fall between $250–$600. We provide a firm quote after a free site walkthrough — no surprise charges on the day of service.</p>
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
  <section class="syc-closing" data-animate="fade-up">
    <div class="container">
      <span class="section-eyebrow" style="justify-content:center;">April &amp; May Slots Are Limited</span>
      <h2>How Do You Get Your Property Ready for the Growing Season?</h2>
      <p>Spring cleanup appointments fill quickly in Rock County. Call now or request a free estimate online — R.A.H. Solutions has been handling Edgerton properties since 2023.</p>
      <div class="syc-closing-actions">
        <a href="tel:6085015123" class="syc-btn-closing-primary">
          <i data-lucide="phone" aria-hidden="true" style="width:20px;height:20px;"></i>
          (608) 501-5123
        </a>
        <a href="/contact" class="syc-btn-closing-accent">
          <i data-lucide="calendar-check" aria-hidden="true" style="width:20px;height:20px;"></i>
          Get a Free Estimate
        </a>
      </div>
    </div>
  </section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
