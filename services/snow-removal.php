<?php
// ============================================================
// Snow Removal — R.A.H. Solutions, LLC
// ============================================================
$pageTitle       = 'Snow Removal Services Edgerton, WI';
$pageDescription = 'Snow removal in Edgerton, WI — residential & commercial plowing, shoveling & salting after every storm. Same-day service. Call (608) 501-5123.';
$canonicalUrl    = 'https://rahsolutionsllc.com/services/snow-removal';
// SEO: {"@context":"https://schema.org"} — schema and <link rel="canonical"> rendered via head.php
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963893874-ak4j6n-489926707_122226629426208320_2862562131488466064_n.jpg';
$currentPage     = 'service-snow-removal';
$heroPreload     = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963893874-ak4j6n-489926707_122226629426208320_2862562131488466064_n.jpg';

$faqs = [
  [
    '@type'          => 'Question',
    'name'           => 'Do you offer seasonal snow removal contracts in Edgerton?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'Yes. R.A.H. Solutions offers both seasonal contracts and per-event pricing for snow removal in Edgerton and Rock County. Seasonal contracts provide a fixed monthly rate for the winter season regardless of how many storms hit — predictable budgeting for both homeowners and commercial properties. Per-event pricing works well for clients who want flexibility without a full-season commitment.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'How quickly do you respond after a snowfall?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'We monitor weather forecasts throughout the winter and dispatch crews as storms develop. Most properties are serviced within a few hours of snowfall stopping for standard accumulation events. Heavy storm events of 6+ inches may extend response time, but contracted clients are prioritized and receive service before one-off requests.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'Do you service commercial parking lots in Edgerton?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'Yes. R.A.H. Solutions handles commercial parking lots, loading docks, storefront walkways, and commercial driveways throughout Edgerton and the surrounding Rock County area. Commercial clients receive priority scheduling under seasonal contracts and monthly invoicing for easy budget management.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'Is de-icing included with snow removal?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'Yes — de-icing and salting is included as part of our standard snow removal service after each plow pass. We apply ice melt to driveways, walkways, and entry points to reduce slip hazards. Salt and ice melt material costs are factored into your service quote upfront, not added as a surprise line item.',
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
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Snow Removal', 'item' => 'https://rahsolutionsllc.com/services/snow-removal'],
      ],
    ],
    [
      '@type'       => 'Service',
      '@id'         => 'https://rahsolutionsllc.com/services/snow-removal/#service',
      'name'        => 'Snow Removal',
      'description' => 'Residential and commercial snow plowing, shoveling, and de-icing in Edgerton, Stoughton, Janesville, and Madison, WI. Seasonal contracts and per-event service available.',
      'provider'    => ['@type' => 'LocalBusiness', '@id' => 'https://rahsolutionsllc.com/#business'],
      'areaServed'  => [
        ['@type' => 'City', 'name' => 'Edgerton'],
        ['@type' => 'City', 'name' => 'Stoughton'],
        ['@type' => 'City', 'name' => 'Janesville'],
        ['@type' => 'City', 'name' => 'Madison'],
      ],
      'serviceType' => 'Snow Removal',
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
   Snow Removal — Page-Specific Styles (.sr-)
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
.breadcrumb-list li {
  display: flex; align-items: center; gap: var(--space-xs);
  font-size: var(--font-size-sm); color: rgba(255,255,255,0.55);
}
.breadcrumb-list li a { color: rgba(255,255,255,0.7); transition: color var(--transition-fast); }
.breadcrumb-list li a:hover { color: var(--color-accent); }
.breadcrumb-list li.current { color: var(--color-accent); font-weight: 600; }
.breadcrumb-sep { color: rgba(255,255,255,0.3); font-size: var(--font-size-xs); }

/* ── Inner Hero ───────────────────────────────────────────── */
.sr-hero {
  position: relative;
  min-height: 60vh;
  display: flex;
  align-items: center;
  overflow: hidden;
  background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963893874-ak4j6n-489926707_122226629426208320_2862562131488466064_n.jpg');
  background-size: cover;
  background-position: center;
  animation: sr-kenburns 22s ease-in-out infinite alternate;
}
@keyframes sr-kenburns {
  from { background-size: 112%; background-position: center 50%; }
  to   { background-size: 126%; background-position: center 40%; }
}
.sr-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    120deg,
    rgba(var(--color-primary-rgb), 0.93) 0%,
    rgba(var(--color-primary-rgb), 0.62) 55%,
    rgba(var(--color-accent-rgb), 0.16) 100%
  );
  z-index: 1;
}
.sr-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 2;
  pointer-events: none;
}
.sr-hero-inner { position: relative; z-index: 3; padding: var(--space-4xl) 0 var(--space-3xl); }
.sr-eyebrow {
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
.sr-eyebrow::before {
  content: '';
  display: block;
  width: 28px; height: 2px;
  background: var(--color-accent);
  flex-shrink: 0;
}
.sr-hero h1 {
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
.sr-hero-sub {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.82);
  max-width: 52ch;
  line-height: 1.6;
  margin-bottom: var(--space-xl);
}
.sr-hero-ctas { display: flex; gap: var(--space-md); flex-wrap: wrap; align-items: center; }
.sr-btn-primary {
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
.sr-btn-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-accent-dark); }
.sr-btn-primary:active { transform: translateY(2px); box-shadow: 0 2px 0 var(--color-accent-dark); }
.sr-btn-secondary {
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
.sr-btn-secondary:hover { background: rgba(255,255,255,0.12); border-color: rgba(255,255,255,0.8); }
.sr-hero-trust { display: flex; align-items: center; gap: var(--space-lg); margin-top: var(--space-xl); flex-wrap: wrap; }
.sr-trust-item {
  display: flex; align-items: center; gap: var(--space-xs);
  font-size: var(--font-size-sm); color: rgba(255,255,255,0.75); font-weight: 600;
}
.sr-trust-item i { color: var(--color-accent); width: 16px; height: 16px; }

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
.ticker-strip::before { left: 0; background: linear-gradient(to right, var(--color-primary), transparent); }
.ticker-strip::after  { right: 0; background: linear-gradient(to left, var(--color-primary), transparent); }
.ticker-track { display: flex; width: max-content; animation: ticker-scroll 30s linear infinite; }
.ticker-track:hover { animation-play-state: paused; }
@keyframes ticker-scroll {
  from { transform: translateX(0); }
  to   { transform: translateX(-50%); }
}
.ticker-item {
  display: inline-flex; align-items: center; gap: var(--space-md);
  white-space: nowrap; font-family: var(--font-body);
  font-size: 0.8rem; font-weight: 700; letter-spacing: 0.1em;
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
.sr-detail { padding: var(--space-4xl) 0 var(--space-3xl); background: var(--color-bg); }
.sr-detail-grid { display: grid; grid-template-columns: 1fr 1fr; gap: var(--space-3xl); align-items: center; }
.sr-detail-content { order: 1; }
.sr-detail-image   { order: 2; }
.sr-detail h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700; line-height: 1.15; text-wrap: balance;
  letter-spacing: -0.02em; color: var(--color-primary); margin-bottom: var(--space-lg);
}
.sr-detail p { font-size: var(--font-size-base); color: var(--color-text-light); line-height: 1.7; max-width: 65ch; margin-bottom: var(--space-md); }
.sr-detail p:last-of-type { margin-bottom: var(--space-xl); }
.sr-updated { font-size: var(--font-size-sm); color: var(--color-gray); font-style: italic; }
.sr-image-frame { position: relative; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-xl); }
.sr-image-frame::before {
  content: '';
  position: absolute; inset: 0;
  border: 3px solid rgba(var(--color-accent-rgb), 0.25);
  border-radius: var(--radius-lg); z-index: 2; pointer-events: none;
}
.sr-image-frame picture img {
  width: 100%; height: 420px; object-fit: cover; display: block;
  transition: transform var(--transition-slow);
}
.sr-image-frame:hover picture img { transform: scale(1.03); }
.sr-image-badge {
  position: absolute; bottom: var(--space-lg); left: var(--space-lg);
  background: var(--color-accent); color: var(--color-bg-dark);
  font-family: var(--font-heading); font-size: var(--font-size-sm);
  font-weight: 700; letter-spacing: 0.06em; text-transform: uppercase;
  padding: var(--space-xs) var(--space-md); border-radius: var(--radius-sm);
  z-index: 3; box-shadow: var(--shadow-md);
}
.sr-btn-detail {
  display: inline-flex; align-items: center; gap: var(--space-sm);
  background: var(--color-primary); color: #ffffff;
  font-family: var(--font-heading); font-size: var(--font-size-base);
  font-weight: 600; letter-spacing: 0.04em; text-transform: uppercase;
  padding: var(--space-md) var(--space-xl); border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-primary-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden; position: relative;
}
.sr-btn-detail:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-primary-dark); }
.sr-btn-detail:active { transform: translateY(2px); box-shadow: 0 2px 0 var(--color-primary-dark); }

/* ── SIGNATURE: Stats Band ────────────────────────────────── */
.sr-stats { background: var(--color-bg-dark); padding: var(--space-3xl) 0; position: relative; overflow: hidden; }
.sr-stats::before {
  content: '';
  position: absolute; top: -60px; left: -60px;
  width: 320px; height: 320px; border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.06); pointer-events: none;
}
.sr-stats::after {
  content: '';
  position: absolute; bottom: -80px; right: -40px;
  width: 400px; height: 400px; border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.04); pointer-events: none;
}
.sr-stats-inner { position: relative; z-index: 1; }
.sr-stats-label {
  text-align: center; font-family: var(--font-body); font-size: var(--font-size-sm);
  font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase;
  color: var(--color-accent); margin-bottom: var(--space-2xl);
}
.sr-stats-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: var(--space-xl); }
.sr-stat-item {
  text-align: center; padding: var(--space-xl);
  border: 1px solid rgba(var(--color-accent-rgb), 0.15);
  border-radius: var(--radius-lg); background: rgba(255,255,255,0.03);
  transition: border-color var(--transition-base), background var(--transition-base);
}
.sr-stat-item:hover { border-color: rgba(var(--color-accent-rgb), 0.35); background: rgba(var(--color-accent-rgb), 0.05); }
.sr-stat-number {
  font-family: var(--font-heading); font-size: clamp(2.2rem, 4vw, 3.2rem);
  font-weight: 700; color: var(--color-accent); line-height: 1;
  margin-bottom: var(--space-xs); letter-spacing: -0.02em;
}
.sr-stat-label { font-size: var(--font-size-sm); color: rgba(255,255,255,0.65); line-height: 1.4; max-width: 18ch; margin: 0 auto; }

/* ── Mid CTA ──────────────────────────────────────────────── */
.sr-cta-mid {
  position: relative; padding: var(--space-3xl) 0;
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  overflow: hidden;
}
.sr-cta-mid::after {
  content: ''; position: absolute; inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none; z-index: 0;
}
.sr-cta-mid .container { position: relative; z-index: 1; text-align: center; }
.sr-cta-eyebrow {
  display: inline-block; font-family: var(--font-body); font-size: var(--font-size-sm);
  font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase;
  color: var(--color-accent); margin-bottom: var(--space-sm);
}
.sr-cta-mid h2 {
  font-family: var(--font-heading); font-size: clamp(1.8rem, 4vw, 2.8rem);
  font-weight: 700; text-wrap: balance; letter-spacing: -0.02em;
  color: #ffffff; margin-bottom: var(--space-md);
}
.sr-cta-mid > .container > p {
  font-size: var(--font-size-lg); color: rgba(255,255,255,0.8);
  max-width: 55ch; margin: 0 auto var(--space-xl); line-height: 1.6;
}
.sr-cta-actions { display: flex; justify-content: center; align-items: center; gap: var(--space-md); flex-wrap: wrap; }
.sr-btn-phone {
  display: inline-flex; align-items: center; gap: var(--space-sm);
  background: #ffffff; color: var(--color-primary-dark);
  font-family: var(--font-heading); font-size: clamp(1.1rem, 2vw, 1.4rem);
  font-weight: 700; padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-md); box-shadow: var(--shadow-lg);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden; position: relative;
}
.sr-btn-phone:hover { transform: translateY(-2px); box-shadow: var(--shadow-xl); }
.sr-btn-cta {
  display: inline-flex; align-items: center; gap: var(--space-sm);
  background: var(--color-accent); color: var(--color-bg-dark);
  font-family: var(--font-heading); font-size: var(--font-size-base);
  font-weight: 700; letter-spacing: 0.04em; text-transform: uppercase;
  padding: var(--space-md) var(--space-xl); border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-accent-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden; position: relative;
}
.sr-btn-cta:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-accent-dark); }
.sr-btn-cta:active { transform: translateY(2px); box-shadow: 0 2px 0 var(--color-accent-dark); }

/* ── Why Choose ───────────────────────────────────────────── */
.sr-why { padding: var(--space-4xl) 0; background: var(--color-bg-alt); }
.sr-why-header { text-align: center; margin-bottom: var(--space-3xl); }
.sr-why h2 {
  font-family: var(--font-heading); font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700; text-wrap: balance; letter-spacing: -0.02em;
  color: var(--color-primary); margin-bottom: var(--space-sm);
}
.sr-why .sub { font-size: var(--font-size-lg); color: var(--color-text-light); max-width: 55ch; margin: 0 auto; }
.sr-why-cards { display: grid; grid-template-columns: repeat(4, 1fr); gap: var(--space-lg); }
.sr-why-card {
  background: var(--color-bg); border-radius: var(--radius-lg);
  padding: var(--space-xl) var(--space-lg); box-shadow: var(--shadow-card);
  transition: transform var(--transition-base), box-shadow var(--transition-base), background var(--transition-base);
  position: relative; overflow: hidden;
}
.sr-why-card::before {
  content: ''; position: absolute; top: 0; left: 0; right: 0;
  height: 3px; background: var(--color-accent);
  transform: scaleX(0); transform-origin: left; transition: transform var(--transition-base);
}
.sr-why-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-xl); background: var(--color-primary); }
.sr-why-card:hover::before { transform: scaleX(1); }
.sr-why-card:hover .sr-why-title,
.sr-why-card:hover .sr-why-text { color: rgba(255,255,255,0.9); }
.sr-why-card:hover .sr-why-icon { background: rgba(var(--color-accent-rgb), 0.2); color: var(--color-accent); }
.sr-why-icon {
  width: 52px; height: 52px; border-radius: var(--radius-md);
  background: rgba(var(--color-accent-rgb), 0.1);
  display: flex; align-items: center; justify-content: center;
  color: var(--color-accent); margin-bottom: var(--space-md);
  transition: background var(--transition-base), color var(--transition-base);
}
.sr-why-title {
  font-family: var(--font-heading); font-size: var(--font-size-xl);
  font-weight: 600; text-wrap: balance; color: var(--color-primary);
  margin-bottom: var(--space-sm); transition: color var(--transition-base);
}
.sr-why-text { font-size: var(--font-size-sm); color: var(--color-text-light); line-height: 1.6; transition: color var(--transition-base); }

/* ── Process Section ──────────────────────────────────────── */
.sr-process { padding: var(--space-4xl) 0; background: var(--color-bg); }
.sr-process-header { text-align: center; margin-bottom: var(--space-3xl); }
.sr-process h2 {
  font-family: var(--font-heading); font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700; text-wrap: balance; letter-spacing: -0.02em;
  color: var(--color-primary); margin-bottom: var(--space-sm);
}
.sr-process .sub { font-size: var(--font-size-lg); color: var(--color-text-light); max-width: 55ch; margin: 0 auto; }
.sr-steps { display: grid; grid-template-columns: repeat(4, 1fr); gap: var(--space-lg); position: relative; }
.sr-steps::before {
  content: ''; position: absolute; top: 32px;
  left: calc(12.5% + 26px); right: calc(12.5% + 26px);
  height: 2px;
  background: linear-gradient(to right, var(--color-accent), rgba(var(--color-accent-rgb), 0.2));
  pointer-events: none;
}
.sr-step { text-align: center; padding: var(--space-lg); }
.sr-step-num {
  width: 64px; height: 64px; border-radius: 50%;
  background: var(--color-primary); color: #ffffff;
  font-family: var(--font-heading); font-size: 1.5rem; font-weight: 700;
  display: flex; align-items: center; justify-content: center;
  margin: 0 auto var(--space-md); position: relative; z-index: 1;
  border: 3px solid rgba(var(--color-accent-rgb), 0.3);
  transition: background var(--transition-base), border-color var(--transition-base);
}
.sr-step:hover .sr-step-num { background: var(--color-accent); border-color: var(--color-accent); color: var(--color-bg-dark); }
.sr-step-title { font-family: var(--font-heading); font-size: var(--font-size-lg); font-weight: 600; text-wrap: balance; color: var(--color-primary); margin-bottom: var(--space-sm); }
.sr-step-desc { font-size: var(--font-size-sm); color: var(--color-text-light); line-height: 1.6; max-width: 22ch; margin: 0 auto; }

/* ── FAQ Section ──────────────────────────────────────────── */
.sr-faq { padding: var(--space-4xl) 0; background: var(--color-bg-alt); }
.sr-faq-header { text-align: center; margin-bottom: var(--space-3xl); }
.sr-faq h2 {
  font-family: var(--font-heading); font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700; text-wrap: balance; letter-spacing: -0.02em;
  color: var(--color-primary); margin-bottom: var(--space-sm);
}
.sr-faq .sub { font-size: var(--font-size-lg); color: var(--color-text-light); max-width: 55ch; margin: 0 auto; }
.sr-faq-list { max-width: 800px; margin: 0 auto; display: flex; flex-direction: column; gap: var(--space-md); }
.sr-faq-item {
  background: var(--color-bg); border-radius: var(--radius-md);
  box-shadow: var(--shadow-sm); border: 1px solid rgba(var(--color-primary-rgb), 0.08); overflow: hidden;
}
.sr-faq-item summary {
  padding: var(--space-lg) var(--space-xl);
  font-family: var(--font-heading); font-size: var(--font-size-lg);
  font-weight: 600; text-wrap: balance; color: var(--color-primary);
  cursor: pointer; display: flex; justify-content: space-between;
  align-items: center; gap: var(--space-md); list-style: none;
  transition: color var(--transition-fast);
}
.sr-faq-item summary::-webkit-details-marker { display: none; }
.sr-faq-item summary::after { content: '+'; font-size: 1.4rem; color: var(--color-accent); flex-shrink: 0; transition: transform var(--transition-base); }
.sr-faq-item[open] summary::after { transform: rotate(45deg); }
.sr-faq-item[open] summary { color: var(--color-accent); }
.sr-faq-answer { padding: 0 var(--space-xl) var(--space-lg); font-size: var(--font-size-base); color: var(--color-text-light); line-height: 1.7; max-width: 65ch; }

/* ── Closing CTA ──────────────────────────────────────────── */
.sr-closing { padding: var(--space-4xl) 0; background: var(--color-bg); text-align: center; }
.sr-closing h2 {
  font-family: var(--font-heading); font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700; text-wrap: balance; letter-spacing: -0.02em;
  color: var(--color-primary); margin-bottom: var(--space-md);
}
.sr-closing p { font-size: var(--font-size-lg); color: var(--color-text-light); max-width: 55ch; margin: 0 auto var(--space-xl); line-height: 1.6; }
.sr-closing-actions { display: flex; justify-content: center; gap: var(--space-md); flex-wrap: wrap; }
.sr-btn-closing-accent {
  display: inline-flex; align-items: center; gap: var(--space-sm);
  background: var(--color-accent); color: var(--color-bg-dark);
  font-family: var(--font-heading); font-size: var(--font-size-lg);
  font-weight: 700; letter-spacing: 0.04em; text-transform: uppercase;
  padding: var(--space-md) var(--space-2xl); border-radius: var(--radius-md);
  box-shadow: 0 4px 0 var(--color-accent-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden; position: relative;
}
.sr-btn-closing-accent:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-accent-dark); }
.sr-btn-closing-primary {
  display: inline-flex; align-items: center; gap: var(--space-sm);
  background: var(--color-primary); color: #ffffff;
  font-family: var(--font-heading); font-size: var(--font-size-lg);
  font-weight: 700; padding: var(--space-md) var(--space-2xl);
  border-radius: var(--radius-md); box-shadow: 0 4px 0 var(--color-primary-dark);
  transition: transform var(--transition-fast), box-shadow var(--transition-fast);
  overflow: hidden; position: relative;
}
.sr-btn-closing-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-primary-dark); }

/* ── Responsive ───────────────────────────────────────────── */
@media (max-width: 1023px) {
  .sr-stats-grid  { grid-template-columns: repeat(2, 1fr); }
  .sr-why-cards   { grid-template-columns: repeat(2, 1fr); }
  .sr-steps       { grid-template-columns: repeat(2, 1fr); }
  .sr-steps::before { display: none; }
}
@media (max-width: 767px) {
  .sr-detail-grid { grid-template-columns: 1fr; }
  .sr-detail-image { order: -1; }
  .sr-image-frame picture img { height: 280px; }
  .sr-stats-grid  { grid-template-columns: repeat(2, 1fr); gap: var(--space-md); }
  .sr-why-cards   { grid-template-columns: 1fr; }
  .sr-steps       { grid-template-columns: 1fr; }
  .sr-hero-ctas   { flex-direction: column; align-items: flex-start; }
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
        <li class="current" aria-current="page">Snow Removal</li>
      </ol>
    </div>
  </nav>

  <!-- ── Inner Hero ─────────────────────────────────────────── -->
  <section class="sr-hero" aria-label="Snow Removal Services">
    <div class="container sr-hero-inner">
      <span class="sr-eyebrow">
        <i data-lucide="snowflake" aria-hidden="true" style="width:14px;height:14px;"></i>
        Winter Property Safety
      </span>
      <h1>Snow Removal Services in Edgerton, WI</h1>
      <p class="sr-hero-sub">Residential and commercial snow plowing, shoveling, and de-icing — available 24/7 during storms, with seasonal contracts and per-event options throughout Rock County.</p>
      <div class="sr-hero-ctas">
        <a href="tel:6085015123" class="sr-btn-primary">
          <i data-lucide="phone" aria-hidden="true" style="width:18px;height:18px;"></i>
          Call (608) 501-5123
        </a>
        <a href="/contact" class="sr-btn-secondary">Get a Free Estimate</a>
      </div>
      <div class="sr-hero-trust">
        <span class="sr-trust-item">
          <i data-lucide="shield-check" aria-hidden="true"></i> Licensed &amp; Insured
        </span>
        <span class="sr-trust-item">
          <i data-lucide="clock" aria-hidden="true"></i> 24/7 During Storms
        </span>
        <span class="sr-trust-item">
          <i data-lucide="star" aria-hidden="true"></i> 4.9-Star Rated
        </span>
      </div>
    </div>
  </section>

  <!-- ── Proof Ticker Strip ─────────────────────────────────── -->
  <div class="ticker-strip" aria-hidden="true">
    <div class="ticker-track">
      <span class="ticker-item">Residential &amp; Commercial<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Plowing &amp; Shoveling<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">De-Icing After Every Plow<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Seasonal Contracts Available<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">24/7 Storm Response<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Edgerton · Janesville · Rock County<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Free Estimates<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Licensed &amp; Insured<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Residential &amp; Commercial<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Plowing &amp; Shoveling<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">De-Icing After Every Plow<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Seasonal Contracts Available<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">24/7 Storm Response<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Edgerton · Janesville · Rock County<span class="ticker-sep">✦</span></span>
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
  <section class="sr-detail" data-animate="fade-up">
    <div class="container">
      <div class="sr-detail-grid">

        <div class="sr-detail-content">
          <span class="section-eyebrow">What We Provide</span>
          <h2>What Snow Removal Is Built for Rock County's Winter Reality?</h2>

          <p>R.A.H. Solutions provides residential and commercial snow removal throughout Edgerton and Rock County — including driveway and parking lot plowing, sidewalk shoveling, de-icing and salting, and push-back service for heavy accumulation events. We monitor weather and dispatch during active storms so service happens when properties need it cleared, not the next morning.</p>

          <p>Rock County averages 40–50 inches of snowfall annually. January and February see the highest accumulation months, and lake-effect events off Lake Michigan occasionally drop 6–10 inches overnight. Under a seasonal contract, contracted properties dispatch first when crews are stretched across a large storm event — before per-event requests come in. If you operate a commercial property with slip-and-fall liability exposure, contract status matters most on your worst weather nights.</p>

          <p>Per-event pricing is available for homeowners who prefer paying only after storms rather than committing to a full-season rate. The tradeoff is straightforward: contracted properties get first dispatch priority. We're transparent about this so you can choose the structure that fits your actual risk tolerance and budget.</p>

          <p>De-icing is included with every plow pass — not separated as an optional add-on. Salt and ice melt are applied to driveways, walkways, and entry points after service. Costs are built into the service quote upfront. For commercial properties, consistent post-plow de-icing is a non-negotiable layer of liability protection in Wisconsin winters.</p>

          <p class="sr-updated">Last Updated: April 2026 · Serving Edgerton, WI and surrounding Rock County communities.</p>

          <a href="/contact" class="sr-btn-detail">
            <i data-lucide="clipboard-list" aria-hidden="true" style="width:18px;height:18px;"></i>
            Get a Winter Contract Quote
          </a>
        </div>

        <div class="sr-detail-image">
          <div class="sr-image-frame">
            <picture>
              <source srcset="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963980269-u3tom9-470875398_122202491888208320_4188323936145154732_n.jpg" type="image/webp">
              <img
                src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963980269-u3tom9-470875398_122202491888208320_4188323936145154732_n.jpg"
                alt="Snow removal plowing residential driveway Edgerton Wisconsin winter service"
                width="600"
                height="420"
                loading="lazy"
              >
            </picture>
            <span class="sr-image-badge">Edgerton, WI</span>
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
  <section class="sr-stats" aria-label="Snow removal service statistics">
    <div class="container sr-stats-inner">
      <p class="sr-stats-label">Snow Removal — By the Numbers</p>
      <div class="sr-stats-grid">
        <div class="sr-stat-item" data-animate="fade-up">
          <div class="sr-stat-number">24/7</div>
          <div class="sr-stat-label">Available during active storm events</div>
        </div>
        <div class="sr-stat-item" data-animate="fade-up">
          <div class="sr-stat-number">40–50"</div>
          <div class="sr-stat-label">Average annual snowfall in Rock County</div>
        </div>
        <div class="sr-stat-item" data-animate="fade-up">
          <div class="sr-stat-number">Both</div>
          <div class="sr-stat-label">Residential &amp; commercial service available</div>
        </div>
        <div class="sr-stat-item" data-animate="fade-up">
          <div class="sr-stat-number">4.9★</div>
          <div class="sr-stat-label">Average customer rating across 47 reviews</div>
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
  <section class="sr-cta-mid" aria-label="Schedule snow removal service">
    <div class="container">
      <p class="sr-cta-eyebrow">Seasonal Contracts — Lock In Before First Snowfall</p>
      <h2>Don't Wait Until the First Storm to Figure Out Plowing</h2>
      <p>Seasonal contracts in Rock County fill before November. Get a quote now and enter winter with your property already covered — R.A.H. Solutions serves Edgerton, Stoughton, Janesville &amp; Madison.</p>
      <div class="sr-cta-actions">
        <a href="tel:6085015123" class="sr-btn-phone">
          <i data-lucide="phone" aria-hidden="true" style="width:20px;height:20px;"></i>
          (608) 501-5123
        </a>
        <a href="/contact" class="sr-btn-cta">Get a Free Estimate</a>
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
  <section class="sr-why" data-animate="fade-up">
    <div class="container">
      <div class="sr-why-header">
        <span class="section-eyebrow">Why R.A.H. Solutions</span>
        <h2>What Snow Removal Actually Shows Up When It Matters?</h2>
        <p class="sub">Reliability during a Wisconsin winter storm is the only metric that counts. Here's how we deliver it for Edgerton and Rock County properties.</p>
      </div>
      <div class="sr-why-cards">
        <div class="sr-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="sr-why-icon">
            <i data-lucide="file-text" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="sr-why-title">Per-Event &amp; Seasonal Contract Options</h3>
          <p class="sr-why-text">Seasonal contracts offer priority dispatch and predictable billing. Per-event pricing offers flexibility. We explain the tradeoffs clearly so you choose what actually fits your property.</p>
        </div>
        <div class="sr-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="sr-why-icon">
            <i data-lucide="building-2" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="sr-why-title">Commercial &amp; Residential Service</h3>
          <p class="sr-why-text">We handle driveways, parking lots, loading areas, and storefront walkways — from single-family homes to small businesses throughout Edgerton and Rock County.</p>
        </div>
        <div class="sr-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="sr-why-icon">
            <i data-lucide="droplets" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="sr-why-title">De-Icing Included After Every Plow</h3>
          <p class="sr-why-text">Salt and ice melt application is part of every service call — not a line item added after the fact. Entry points, walks, and driveway aprons are treated after every plow pass.</p>
        </div>
        <div class="sr-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="sr-why-icon">
            <i data-lucide="map-pin" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="sr-why-title">Rock County Weather Familiarity</h3>
          <p class="sr-why-text">We operate in Edgerton's actual conditions — lake-effect events, freeze-thaw icing cycles, and January–February heavy accumulation — not a generic Midwest response plan.</p>
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
  <section class="sr-process" data-animate="fade-up">
    <div class="container">
      <div class="sr-process-header">
        <span class="section-eyebrow">How It Works</span>
        <h2>What Are the 4 Steps from Property Walkthrough to Storm-Ready?</h2>
        <p class="sub">Simple setup. Reliable execution when the storms hit. No scrambling last-minute to find a plow.</p>
      </div>
      <div class="sr-steps">
        <div class="sr-step">
          <div class="sr-step-num">1</div>
          <h3 class="sr-step-title">Property Walkthrough &amp; Contract Setup</h3>
          <p class="sr-step-desc">We assess driveway layout, access points, and obstacles before winter starts to plan equipment approach.</p>
        </div>
        <div class="sr-step">
          <div class="sr-step-num">2</div>
          <h3 class="sr-step-title">Storm Monitoring &amp; Dispatch</h3>
          <p class="sr-step-desc">We track weather throughout winter and dispatch crews as storms develop — no waiting for your call when there's 6 inches down.</p>
        </div>
        <div class="sr-step">
          <div class="sr-step-num">3</div>
          <h3 class="sr-step-title">Snow Event Service</h3>
          <p class="sr-step-desc">Plowing, shoveling, and de-icing as a single service call. Contracted clients dispatched before per-event requests during high-demand storms.</p>
        </div>
        <div class="sr-step">
          <div class="sr-step-num">4</div>
          <h3 class="sr-step-title">Follow-Up Salting &amp; Re-Inspection</h3>
          <p class="sr-step-desc">After heavy events or freeze-thaw cycles, high-traffic areas are re-checked and additional ice melt applied as needed.</p>
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
  <section class="sr-faq" data-animate="fade-up">
    <div class="container">
      <div class="sr-faq-header">
        <span class="section-eyebrow">Common Questions</span>
        <h2>What Are Your Snow Removal Questions?</h2>
        <p class="sub">Contracts, response times, commercial coverage, and what de-icing costs — direct answers for Edgerton property owners and business managers.</p>
      </div>
      <div class="sr-faq-list">
        <details class="sr-faq-item">
          <summary>Do you offer seasonal snow removal contracts in Edgerton?</summary>
          <div class="sr-faq-answer">
            <p>Yes. We offer both seasonal contracts and per-event pricing in Edgerton and Rock County. Seasonal contracts provide a fixed monthly rate for the winter regardless of storm count — predictable budgeting for homeowners and commercial properties. Per-event pricing offers flexibility without a season-long commitment.</p>
          </div>
        </details>
        <details class="sr-faq-item">
          <summary>How quickly do you respond after a snowfall?</summary>
          <div class="sr-faq-answer">
            <p>We monitor weather and dispatch as storms develop — most properties are serviced within a few hours of snowfall stopping for standard accumulation events. Heavy events of 6+ inches may extend response time. Contracted clients are dispatched first during high-demand storm periods before per-event requests are addressed.</p>
          </div>
        </details>
        <details class="sr-faq-item">
          <summary>Do you service commercial parking lots in Edgerton?</summary>
          <div class="sr-faq-answer">
            <p>Yes. R.A.H. Solutions handles commercial parking lots, loading docks, storefront walkways, and commercial driveways throughout Edgerton and surrounding Rock County. Commercial clients receive priority scheduling under seasonal contracts and monthly invoicing for easy budget management.</p>
          </div>
        </details>
        <details class="sr-faq-item">
          <summary>Is de-icing included with snow removal?</summary>
          <div class="sr-faq-answer">
            <p>Yes — de-icing and salting are included as part of our standard service after each plow pass. We apply ice melt to driveways, walkways, and entry points. Material costs are factored into your quote upfront — no surprise line items after the storm is over.</p>
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
  <section class="sr-closing" data-animate="fade-up">
    <div class="container">
      <span class="section-eyebrow" style="justify-content:center;">Lock In Before First Snow</span>
      <h2>Enter Winter With Your Plowing Already Handled</h2>
      <p>Seasonal contracts fill before the first storm hits. Call now or request a free estimate online — R.A.H. Solutions has been keeping Rock County properties safe through Wisconsin winters since 2023.</p>
      <div class="sr-closing-actions">
        <a href="tel:6085015123" class="sr-btn-closing-primary">
          <i data-lucide="phone" aria-hidden="true" style="width:20px;height:20px;"></i>
          (608) 501-5123
        </a>
        <a href="/contact" class="sr-btn-closing-accent">
          <i data-lucide="clipboard-list" aria-hidden="true" style="width:20px;height:20px;"></i>
          Get a Free Estimate
        </a>
      </div>
    </div>
  </section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
