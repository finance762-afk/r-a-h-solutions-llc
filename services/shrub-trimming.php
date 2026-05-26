<?php
// ============================================================
// Shrub Trimming — R.A.H. Solutions, LLC
// ============================================================
$pageTitle       = 'Shrub Trimming in Edgerton, WI';
$pageDescription = 'Shrub trimming & shaping in Edgerton, WI by R.A.H. Solutions. Promotes healthy growth and clean lines year-round. Free estimates. Call (608) 501-5123.';
$canonicalUrl    = 'https://rahsolutionsllc.com/services/shrub-trimming';
// SEO: {"@context":"https://schema.org"} — schema and <link rel="canonical"> rendered via head.php
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963896244-0unq77-495336544_122236025864208320_4129821399527851126_n.jpg';
$currentPage     = 'service-shrub-trimming';
$heroPreload     = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963896244-0unq77-495336544_122236025864208320_4129821399527851126_n.jpg';

$faqs = [
  [
    '@type'          => 'Question',
    'name'           => 'When should shrubs be trimmed in Wisconsin?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'Timing varies by shrub species. Spring-blooming shrubs like lilac and forsythia should be trimmed immediately after they flower — typically late May to early June in Edgerton — to preserve next year\'s bloom. Summer-blooming shrubs like spirea and potentilla can be shaped in early spring before growth begins. Evergreens such as arborvitae and boxwood are best trimmed in late spring or early summer once new growth has extended and hardened off. Avoid heavy trimming in late summer or fall, which can stimulate new growth that doesn\'t have time to harden before Wisconsin\'s first frost.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'Can overgrown shrubs be saved with rejuvenation pruning?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'Yes — most common Wisconsin landscape shrubs respond well to rejuvenation pruning. This technique removes one-third of the oldest wood each year over three seasons, gradually replacing the entire shrub with younger, more vigorous growth. Shrubs that have been severely neglected may need a harder cut, which works well on forsythia, lilac, and most deciduous shrubs but should be avoided with evergreens like arborvitae that do not regenerate from old wood.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'How often do shrubs need trimming?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'Most residential landscape shrubs in Edgerton need trimming 1–2 times per year. Fast-growing shrubs like burning bush, ninebark, and forsythia may need attention twice — once after spring blooming and again in midsummer if they\'ve filled in significantly. Slower-growing evergreens like arborvitae typically need trimming once per year in late spring or early summer. Formal hedges maintained at specific heights may require 2–3 trimmings per season.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'Do you trim arborvitae and evergreen hedges?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'Yes — arborvitae and evergreen hedge trimming is one of our most common requests in Edgerton and Rock County. Arborvitae are trimmed in late spring after new growth has emerged, removing no more than one-third of the new growth per session to avoid exposing brown interior wood that will not regenerate. We take care to maintain the natural form while controlling height and width, and we remove all clippings from your property on the same day.',
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
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Shrub Trimming', 'item' => 'https://rahsolutionsllc.com/services/shrub-trimming'],
      ],
    ],
    [
      '@type'       => 'Service',
      '@id'         => 'https://rahsolutionsllc.com/services/shrub-trimming/#service',
      'name'        => 'Shrub Trimming',
      'description' => 'Professional shrub trimming, shaping, and rejuvenation pruning for residential properties in Edgerton, Stoughton, Janesville, and Madison, WI. Species-specific timing and technique for all Wisconsin landscape shrubs.',
      'provider'    => ['@type' => 'LocalBusiness', '@id' => 'https://rahsolutionsllc.com/#business'],
      'areaServed'  => [
        ['@type' => 'City', 'name' => 'Edgerton'],
        ['@type' => 'City', 'name' => 'Stoughton'],
        ['@type' => 'City', 'name' => 'Janesville'],
        ['@type' => 'City', 'name' => 'Madison'],
      ],
      'serviceType' => 'Shrub Trimming',
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
   Shrub Trimming — Page-Specific Styles (st-)
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
.st-hero {
  position: relative;
  min-height: 60vh;
  display: flex;
  align-items: center;
  overflow: hidden;
  background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963896244-0unq77-495336544_122236025864208320_4129821399527851126_n.jpg');
  background-size: cover;
  background-position: center;
  animation: st-kenburns 20s ease-in-out infinite alternate;
}
@keyframes st-kenburns {
  from { background-size: 110%; background-position: center 35%; }
  to   { background-size: 120%; background-position: center 50%; }
}
.st-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    135deg,
    rgba(var(--color-primary-rgb), 0.88) 0%,
    rgba(var(--color-primary-rgb), 0.55) 60%,
    rgba(var(--color-accent-rgb), 0.16) 100%
  );
  z-index: 1;
}
.st-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 2;
  pointer-events: none;
}
.st-hero-inner {
  position: relative;
  z-index: 3;
  padding: var(--space-4xl) 0 var(--space-3xl);
}
.st-eyebrow {
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
.st-eyebrow::before {
  content: '';
  display: block;
  width: 28px;
  height: 2px;
  background: var(--color-accent);
  flex-shrink: 0;
}
.st-hero h1 {
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
.st-hero-sub {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.82);
  max-width: 52ch;
  line-height: 1.6;
  margin-bottom: var(--space-xl);
}
.st-hero-ctas {
  display: flex;
  gap: var(--space-md);
  flex-wrap: wrap;
  align-items: center;
}
.st-btn-primary {
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
.st-btn-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-accent-dark); }
.st-btn-primary:active { transform: translateY(2px); box-shadow: 0 2px 0 var(--color-accent-dark); }
.st-btn-secondary {
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
.st-btn-secondary:hover { background: rgba(255,255,255,0.12); border-color: rgba(255,255,255,0.8); }
.st-hero-trust {
  display: flex;
  align-items: center;
  gap: var(--space-lg);
  margin-top: var(--space-xl);
  flex-wrap: wrap;
}
.st-trust-item {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.75);
  font-weight: 600;
}
.st-trust-item i { color: var(--color-accent); }

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
.ticker-strip::after  { right: 0; background: linear-gradient(to left,  var(--color-primary), transparent); }
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
.st-section-eyebrow {
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
.st-section-eyebrow::after {
  content: '';
  display: block;
  width: 24px;
  height: 2px;
  background: var(--color-accent);
}

/* ── Service Detail ───────────────────────────────────────── */
.st-detail {
  padding: var(--space-4xl) 0 var(--space-3xl);
  background: var(--color-bg);
}
.st-detail-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3xl);
  align-items: center;
}
.st-detail-content { order: 1; }
.st-detail-image   { order: 2; }
.st-detail h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-lg);
}
.st-detail p {
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: 65ch;
  margin-bottom: var(--space-md);
}
.st-detail p:last-of-type { margin-bottom: var(--space-xl); }
.st-updated {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  font-style: italic;
}
.st-image-frame {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
}
.st-image-frame::before {
  content: '';
  position: absolute;
  inset: 0;
  border: 3px solid rgba(var(--color-accent-rgb), 0.25);
  border-radius: var(--radius-lg);
  z-index: 2;
  pointer-events: none;
}
.st-image-frame picture img {
  width: 100%;
  height: 420px;
  object-fit: cover;
  display: block;
  transition: transform var(--transition-slow);
}
.st-image-frame:hover picture img { transform: scale(1.03); }
.st-image-badge {
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
.st-btn-detail {
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
.st-btn-detail:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-primary-dark); }
.st-btn-detail:active { transform: translateY(2px); box-shadow: 0 2px 0 var(--color-primary-dark); }

/* ── SIGNATURE: Stats Band ────────────────────────────────── */
.st-stats-band {
  background: var(--color-bg-dark);
  padding: var(--space-3xl) 0;
  position: relative;
  overflow: hidden;
}
.st-stats-band::before {
  content: '';
  position: absolute;
  top: -60px; left: -60px;
  width: 320px; height: 320px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.06);
  pointer-events: none;
}
.st-stats-band::after {
  content: '';
  position: absolute;
  bottom: -80px; right: -40px;
  width: 400px; height: 400px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.04);
  pointer-events: none;
}
.st-stats-inner { position: relative; z-index: 1; }
.st-stats-label {
  text-align: center;
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-2xl);
}
.st-stats-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-xl);
}
.st-stat-item {
  text-align: center;
  padding: var(--space-xl);
  border: 1px solid rgba(var(--color-accent-rgb), 0.15);
  border-radius: var(--radius-lg);
  background: rgba(255,255,255,0.03);
  transition: border-color var(--transition-base), background var(--transition-base);
}
.st-stat-item:hover {
  border-color: rgba(var(--color-accent-rgb), 0.35);
  background: rgba(var(--color-accent-rgb), 0.05);
}
.st-stat-number {
  font-family: var(--font-heading);
  font-size: clamp(2.2rem, 4vw, 3.2rem);
  font-weight: 700;
  color: var(--color-accent);
  line-height: 1;
  margin-bottom: var(--space-xs);
  letter-spacing: -0.02em;
}
.st-stat-label {
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.65);
  line-height: 1.4;
  max-width: 18ch;
  margin: 0 auto;
}

/* ── Mid CTA Banner ───────────────────────────────────────── */
.st-cta-mid {
  position: relative;
  padding: var(--space-3xl) 0;
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  overflow: hidden;
}
.st-cta-mid::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
  z-index: 0;
}
.st-cta-mid .container { position: relative; z-index: 1; text-align: center; }
.st-cta-eyebrow {
  display: inline-block;
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.st-cta-mid h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 2.8rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: #ffffff;
  margin-bottom: var(--space-md);
}
.st-cta-mid > .container > p {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.8);
  max-width: 55ch;
  margin: 0 auto var(--space-xl);
  line-height: 1.6;
}
.st-cta-actions {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.st-btn-cta-phone {
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
.st-btn-cta-phone:hover { transform: translateY(-2px); box-shadow: var(--shadow-xl); }
.st-btn-cta-est {
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
.st-btn-cta-est:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-accent-dark); }
.st-btn-cta-est:active { transform: translateY(2px); box-shadow: 0 2px 0 var(--color-accent-dark); }

/* ── Why Choose ───────────────────────────────────────────── */
.st-why {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.st-why-header { text-align: center; margin-bottom: var(--space-3xl); }
.st-why h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.st-why .sub {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto;
}
.st-why-cards {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
}
.st-why-card {
  background: var(--color-bg);
  border-radius: var(--radius-lg);
  padding: var(--space-xl) var(--space-lg);
  box-shadow: var(--shadow-card);
  transition: transform var(--transition-base), box-shadow var(--transition-base), background var(--transition-base);
  position: relative;
  overflow: hidden;
}
.st-why-card::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 3px;
  background: var(--color-accent);
  transform: scaleX(0);
  transform-origin: left;
  transition: transform var(--transition-base);
}
.st-why-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-xl); background: var(--color-primary); }
.st-why-card:hover::before { transform: scaleX(1); }
.st-why-card:hover .st-why-title,
.st-why-card:hover .st-why-text { color: rgba(255,255,255,0.9); }
.st-why-card:hover .st-why-icon {
  background: rgba(var(--color-accent-rgb), 0.2);
  color: var(--color-accent);
}
.st-why-icon {
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
.st-why-title {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  font-weight: 600;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
  transition: color var(--transition-base);
}
.st-why-text {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  transition: color var(--transition-base);
}

/* ── Process ──────────────────────────────────────────────── */
.st-process {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
}
.st-process-header { text-align: center; margin-bottom: var(--space-3xl); }
.st-process h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.st-process .sub {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto;
}
.st-process-steps {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
  position: relative;
}
.st-process-steps::before {
  content: '';
  position: absolute;
  top: 32px;
  left: calc(12.5% + 26px);
  right: calc(12.5% + 26px);
  height: 2px;
  background: linear-gradient(to right, var(--color-accent), rgba(var(--color-accent-rgb), 0.2));
  pointer-events: none;
}
.st-step { text-align: center; padding: var(--space-lg); }
.st-step-num {
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
.st-step:hover .st-step-num {
  background: var(--color-accent);
  border-color: var(--color-accent);
  color: var(--color-bg-dark);
}
.st-step-title {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 600;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.st-step-desc {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  max-width: 22ch;
  margin: 0 auto;
}

/* ── FAQ ──────────────────────────────────────────────────── */
.st-faq {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.st-faq-header { text-align: center; margin-bottom: var(--space-3xl); }
.st-faq h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.st-faq .sub {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto;
}
.st-faq-list {
  max-width: 800px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}
.st-faq-item {
  background: var(--color-bg);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-sm);
  border: 1px solid rgba(var(--color-primary-rgb), 0.08);
  overflow: hidden;
}
.st-faq-item summary {
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
.st-faq-item summary::-webkit-details-marker { display: none; }
.st-faq-item summary::after {
  content: '+';
  font-size: 1.4rem;
  color: var(--color-accent);
  flex-shrink: 0;
  transition: transform var(--transition-base);
}
.st-faq-item[open] summary::after { transform: rotate(45deg); }
.st-faq-item[open] summary { color: var(--color-accent); }
.st-faq-answer {
  padding: 0 var(--space-xl) var(--space-lg);
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: 65ch;
}

/* ── Closing CTA ──────────────────────────────────────────── */
.st-closing {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
  text-align: center;
}
.st-closing h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-md);
}
.st-closing p {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto var(--space-xl);
  line-height: 1.6;
}
.st-closing-actions {
  display: flex;
  justify-content: center;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.st-btn-closing-primary {
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
.st-btn-closing-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-accent-dark); }
.st-btn-closing-phone {
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
.st-btn-closing-phone:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-primary-dark); }

/* ── Responsive ───────────────────────────────────────────── */
@media (max-width: 1023px) {
  .st-stats-grid    { grid-template-columns: repeat(2, 1fr); }
  .st-why-cards     { grid-template-columns: repeat(2, 1fr); }
  .st-process-steps { grid-template-columns: repeat(2, 1fr); }
  .st-process-steps::before { display: none; }
}
@media (max-width: 767px) {
  .st-detail-grid   { grid-template-columns: 1fr; }
  .st-detail-image  { order: -1; }
  .st-image-frame picture img { height: 280px; }
  .st-stats-grid    { grid-template-columns: repeat(2, 1fr); gap: var(--space-md); }
  .st-why-cards     { grid-template-columns: 1fr; }
  .st-process-steps { grid-template-columns: 1fr; }
  .st-hero-ctas     { flex-direction: column; align-items: flex-start; }
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
        <li class="current" aria-current="page">Shrub Trimming</li>
      </ol>
    </div>
  </nav>

  <!-- ── Inner Hero ─────────────────────────────────────────── -->
  <section class="st-hero" aria-label="Shrub Trimming Services">
    <div class="container st-hero-inner">
      <span class="st-eyebrow">
        <i data-lucide="scissors" aria-hidden="true" style="width:14px;height:14px;"></i>
        Shrub &amp; Hedge Care
      </span>
      <h1>Shrub Trimming Services in Edgerton, WI</h1>
      <p class="st-hero-sub">Species-specific pruning from $75/hour — the right technique at the right time for arborvitae, boxwood, burning bush, lilac, and the other shrubs that define Rock County landscapes.</p>
      <div class="st-hero-ctas">
        <a href="tel:6085015123" class="st-btn-primary">
          <i data-lucide="phone" aria-hidden="true" style="width:18px;height:18px;"></i>
          Call (608) 501-5123
        </a>
        <a href="/contact" class="st-btn-secondary">Get a Free Estimate</a>
      </div>
      <div class="st-hero-trust">
        <span class="st-trust-item">
          <i data-lucide="shield-check" aria-hidden="true"></i> Licensed &amp; Insured
        </span>
        <span class="st-trust-item">
          <i data-lucide="star" aria-hidden="true"></i> 4.9-Star Rated
        </span>
        <span class="st-trust-item">
          <i data-lucide="leaf" aria-hidden="true"></i> All Debris Removed Same Day
        </span>
      </div>
    </div>
  </section>

  <!-- ── Proof Ticker Strip ─────────────────────────────────── -->
  <div class="ticker-strip" aria-hidden="true">
    <div class="ticker-track">
      <span class="ticker-item">Shrub Shaping &amp; Trimming<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Arborvitae &amp; Evergreen Hedges<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Rejuvenation Pruning<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Licensed &amp; Insured<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Free Estimates<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Edgerton · Stoughton · Madison · Janesville<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">All Debris Removed<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Spring &amp; Fall Optimal Timing<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Shrub Shaping &amp; Trimming<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Arborvitae &amp; Evergreen Hedges<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Rejuvenation Pruning<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Licensed &amp; Insured<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Free Estimates<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Edgerton · Stoughton · Madison · Janesville<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">All Debris Removed<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Spring &amp; Fall Optimal Timing<span class="ticker-sep">✦</span></span>
    </div>
  </div>

  <!-- ── Divider ────────────────────────────────────────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,40 1200,40 0,40" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ── Service Detail Section ─────────────────────────────── -->
  <section class="st-detail" data-animate="fade-up">
    <div class="container">
      <div class="st-detail-grid">
        <div class="st-detail-content">
          <span class="st-section-eyebrow">How We Work</span>
          <h2>How Does <span class="text-accent">Shrub Pruning</span> Actually Work in Wisconsin?</h2>

          <p>Shrub trimming in Edgerton starts at $75/hour, with most residential properties completed in 2–4 hours depending on shrub count, size, and access. We remove all clippings from your property the same day. No debris left to break down on your lawn or wash into your beds.</p>

          <p>Timing is the most misunderstood part of shrub care. Cut a lilac at the wrong time and you lose next spring's bloom entirely — the buds set on old wood in summer. Cut an arborvitae in late fall and you expose interior brown wood that won't regenerate before Wisconsin's first hard frost. Every species in your landscape has a different optimal pruning window, and we work within those windows rather than just scheduling visits on a fixed calendar.</p>

          <p>Common Edgerton landscape shrubs we see regularly include arborvitae (trim late spring after new growth hardens), boxwood (early summer, light shaping only), burning bush (early spring before growth begins), forsythia (immediately after bloom in May), lilac (same — right after bloom), spirea (early spring, then shape after summer bloom), and ninebark (early spring). We assess what's in your beds before we touch anything.</p>

          <p>Rejuvenation pruning is often the right call for shrubs that have been neglected for 3–5 or more years. Instead of trying to cut them back hard all at once — which shocks the plant and leaves a stick-like form — we remove the oldest one-third of wood each season, gradually renewing the shrub over three years. This technique works well on most deciduous shrubs and keeps the plant looking presentable throughout the process. Evergreens like arborvitae don't respond to this approach and need a different strategy if they've outgrown their space.</p>

          <p>Untrimmed shrubs cause more problems than just aesthetics. Overgrown shrubs reduce light penetration to adjacent plantings, can damage siding and gutters when branches reach structures, and develop interior dead wood that harbors pests and fungal disease. Staying current with trimming is far cheaper than removing and replacing shrubs that have been let go for too long.</p>

          <div class="answer-block">
            <h3>How often should shrubs be trimmed in Wisconsin?</h3>
            <p>Most landscape shrubs in Wisconsin need trimming 1–3 times per growing season, depending on species and growth rate. Slow-growing evergreens like arborvitae typically need one annual trim, while fast-growing deciduous shrubs and formal hedges may require 2–3 sessions to maintain clean form and healthy growth.</p>
          </div>

          <p class="st-updated">Last Updated: May 2026 · Serving Edgerton, WI and surrounding Rock &amp; Dane County communities.</p>

          <a href="/contact" class="st-btn-detail">
            <i data-lucide="calendar" aria-hidden="true" style="width:18px;height:18px;"></i>
            Schedule a Trim Visit
          </a>
        </div>

        <div class="st-detail-image">
          <div class="st-image-frame">
            <picture>
              <source srcset="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963896244-0unq77-495336544_122236025864208320_4129821399527851126_n.jpg" type="image/webp">
              <img
                src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963896244-0unq77-495336544_122236025864208320_4129821399527851126_n.jpg"
                alt="Professional shrub trimming and hedge shaping Edgerton Wisconsin landscape"
                width="600"
                height="420"
                loading="lazy"
              >
            </picture>
            <span class="st-image-badge">Edgerton, WI</span>
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
  <section class="st-stats-band" aria-label="Shrub trimming service statistics">
    <div class="container st-stats-inner">
      <p class="st-stats-label">R.A.H. Solutions — Shrub Trimming by the Numbers</p>
      <div class="st-stats-grid">
        <div class="st-stat-item" data-animate="fade-up">
          <div class="st-stat-number">$75<span style="font-size:1.5rem;">/hr</span></div>
          <div class="st-stat-label">Starting hourly rate for shrub trimming</div>
        </div>
        <div class="st-stat-item" data-animate="fade-up">
          <div class="st-stat-number">2x</div>
          <div class="st-stat-label">Spring &amp; fall optimal trimming windows</div>
        </div>
        <div class="st-stat-item" data-animate="fade-up">
          <div class="st-stat-number">3+</div>
          <div class="st-stat-label">Years of local expertise in Rock County</div>
        </div>
        <div class="st-stat-item" data-animate="fade-up">
          <div class="st-stat-number">4.9★</div>
          <div class="st-stat-label">Average rating across 47 customer reviews</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ── Divider: bg-dark → bg-alt (diagonal up) ───────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,60 1200,0 1200,60" fill="#f4f7f9"/>
    </svg>
  </div>

  <!-- ── Mid-Page CTA Banner ────────────────────────────────── -->
  <section class="st-cta-mid" aria-label="Schedule a shrub trimming visit">
    <div class="container">
      <p class="st-cta-eyebrow">Free Estimates · Same-Day Debris Removal</p>
      <h2>Why Don't Overgrown Shrubs Fix Themselves?</h2>
      <p>Don't let another season pass on overgrown beds. R.A.H. Solutions handles the timing, technique, and cleanup — leaving your property looking finished, not just cut.</p>
      <div class="st-cta-actions">
        <a href="tel:6085015123" class="st-btn-cta-phone">
          <i data-lucide="phone" aria-hidden="true" style="width:20px;height:20px;"></i>
          (608) 501-5123
        </a>
        <a href="/contact" class="st-btn-cta-est">Get a Free Estimate</a>
      </div>
    </div>
  </section>

  <!-- ── Divider: primary → bg-alt ─────────────────────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,60 1200,60 0,60" fill="#f4f7f9"/>
    </svg>
  </div>

  <!-- ── Why Choose Section ─────────────────────────────────── -->
  <section class="st-why" data-animate="fade-up">
    <div class="container">
      <div class="st-why-header">
        <span class="st-section-eyebrow">Why R.A.H. Solutions</span>
        <h2>What <span class="text-accent">Shrub Care</span> Matches How Each Species Actually Grows?</h2>
        <p class="sub">Generic trimming crews cut everything the same way on the same schedule. We adapt technique and timing to what each shrub needs to stay healthy in Wisconsin's climate.</p>
      </div>
      <div class="st-why-cards">
        <div class="st-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="st-why-icon">
            <i data-lucide="clock" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="st-why-title">Species-Specific Pruning Timing</h3>
          <p class="st-why-text">We trim each shrub in its optimal window — not on a fixed calendar. Lilac right after bloom. Arborvitae after new growth hardens. Burning bush before spring push begins.</p>
        </div>
        <div class="st-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="st-why-icon">
            <i data-lucide="refresh-cw" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="st-why-title">Rejuvenation for Overgrown Shrubs</h3>
          <p class="st-why-text">We don't just hack overgrown shrubs back hard. The one-third renewal method restores them gradually while keeping your beds presentable throughout the process.</p>
        </div>
        <div class="st-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="st-why-icon">
            <i data-lucide="maximize-2" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="st-why-title">Clean Lines That Last All Season</h3>
          <p class="st-why-text">Proper cuts at the right angles minimize regrowth that blurs form. Your shrubs look sharp weeks after the visit, not just the day of the trim.</p>
        </div>
        <div class="st-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="st-why-icon">
            <i data-lucide="trash-2" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="st-why-title">All Debris Removed Same Day</h3>
          <p class="st-why-text">Every clipping leaves your property the day we trim. We don't pile it on your lawn or haul it to your curb — it's loaded and gone before we leave.</p>
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
  <section class="st-process" data-animate="fade-up">
    <div class="container">
      <div class="st-process-header">
        <span class="st-section-eyebrow">How It Works</span>
        <h2>What Are the Four Steps from <span class="text-accent">Scheduling</span> to Clean Property?</h2>
        <p class="sub">Simple, fast, and thorough — shrub trimming that gets done right and leaves your property ready to enjoy.</p>
      </div>
      <div class="st-process-steps">
        <div class="st-step">
          <div class="st-step-num">1</div>
          <h3 class="st-step-title">Shrub Assessment</h3>
          <p class="st-step-desc">We identify species, evaluate overall health, and spot any problem areas before selecting a pruning approach.</p>
        </div>
        <div class="st-step">
          <div class="st-step-num">2</div>
          <h3 class="st-step-title">Timing &amp; Technique Selection</h3>
          <p class="st-step-desc">We confirm we're in the right pruning window for each species and select the correct tool and cut angle.</p>
        </div>
        <div class="st-step">
          <div class="st-step-num">3</div>
          <h3 class="st-step-title">Trimming &amp; Shaping</h3>
          <p class="st-step-desc">Clean cuts at proper angles, maintaining the natural form of each shrub while achieving the shape you want.</p>
        </div>
        <div class="st-step">
          <div class="st-step-num">4</div>
          <h3 class="st-step-title">Debris Cleanup &amp; Disposal</h3>
          <p class="st-step-desc">All clippings collected and hauled away before we leave — your property is clean and ready the same day.</p>
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
  <section class="st-faq" data-animate="fade-up">
    <div class="container">
      <div class="st-faq-header">
        <span class="st-section-eyebrow">Common Questions</span>
        <h2>What Are Shrub Trimming Questions Edgerton Homeowners Ask?</h2>
        <p class="sub">Straight answers on timing, technique, and what to expect from a professional shrub trim service.</p>
      </div>
      <div class="st-faq-list">
        <details class="st-faq-item">
          <summary>When should shrubs be trimmed in Wisconsin?</summary>
          <div class="st-faq-answer">
            <p>Timing varies by shrub species. Spring-blooming shrubs like lilac and forsythia should be trimmed immediately after they flower — typically late May to early June in Edgerton — to preserve next year's bloom. Evergreens such as arborvitae and boxwood are best trimmed in late spring once new growth has extended and hardened off. Avoid heavy trimming in late summer or fall, which stimulates new growth that won't harden before Wisconsin's first frost.</p>
          </div>
        </details>
        <details class="st-faq-item">
          <summary>Can overgrown shrubs be saved with rejuvenation pruning?</summary>
          <div class="st-faq-answer">
            <p>Yes — most common Wisconsin landscape shrubs respond well to rejuvenation pruning. This technique removes one-third of the oldest wood each year over three seasons, gradually replacing the entire shrub with younger, more vigorous growth. Shrubs that have been severely neglected may need a harder cut, which works well on forsythia, lilac, and most deciduous shrubs but should be avoided with evergreens like arborvitae that do not regenerate from old wood.</p>
          </div>
        </details>
        <details class="st-faq-item">
          <summary>How often do shrubs need trimming?</summary>
          <div class="st-faq-answer">
            <p>Most residential landscape shrubs in Edgerton need trimming 1–2 times per year. Fast-growing shrubs like burning bush, ninebark, and forsythia may need attention twice — once after spring blooming and again in midsummer if they've filled in significantly. Slower-growing evergreens like arborvitae typically need trimming once per year. Formal hedges maintained at specific heights may require 2–3 trimmings per season.</p>
          </div>
        </details>
        <details class="st-faq-item">
          <summary>Do you trim arborvitae and evergreen hedges?</summary>
          <div class="st-faq-answer">
            <p>Yes — arborvitae and evergreen hedge trimming is one of our most common requests in Edgerton and Rock County. Arborvitae are trimmed in late spring after new growth has emerged, removing no more than one-third of new growth per session to avoid exposing brown interior wood that won't regenerate. We maintain the natural form while controlling height and width, and we remove all clippings from your property the same day.</p>
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
  <section class="st-closing" data-animate="fade-up">
    <div class="container">
      <span class="st-section-eyebrow" style="justify-content:center;">Book Your Shrub Trim</span>
      <h2>How Do Sharp Beds Start with a Phone Call?</h2>
      <p>Spring and fall trimming slots book quickly around Edgerton. Call R.A.H. Solutions to schedule your visit — same-day debris removal, no mess left behind.</p>
      <div class="st-closing-actions">
        <a href="tel:6085015123" class="st-btn-closing-phone">
          <i data-lucide="phone" aria-hidden="true" style="width:20px;height:20px;"></i>
          (608) 501-5123
        </a>
        <a href="/contact" class="st-btn-closing-primary">
          <i data-lucide="calendar" aria-hidden="true" style="width:20px;height:20px;"></i>
          Get a Free Estimate
        </a>
      </div>
    </div>
  </section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
