<?php
// ============================================================
// Landscape Installation — R.A.H. Solutions, LLC
// ============================================================
$pageTitle       = 'Landscape Installation Edgerton, WI';
$pageDescription = 'Landscape installation in Edgerton, WI — complete yard transformations with plants, trees & hardscaping. R.A.H. Solutions. Free estimates. Call (608) 501-5123.';
$canonicalUrl    = 'https://rahsolutionsllc.com/services/landscape-installation';
// SEO: {"@context":"https://schema.org"} — schema and <link rel="canonical"> rendered via head.php
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963876972-9uvcid-474456407_122209245674208320_3275147450913393227_n.jpg';
$currentPage     = 'service-landscape-installation';
$heroPreload     = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963876972-9uvcid-474456407_122209245674208320_3275147450913393227_n.jpg';

$faqs = [
  [
    '@type'          => 'Question',
    'name'           => 'When is the best time to install landscaping in Wisconsin?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'Spring (late April through May) and fall (September through October) are the two ideal installation windows in Edgerton, WI. Spring allows plants to establish through a full growing season before winter. Fall installations benefit from cooler temperatures that reduce transplant stress and allow root development before the ground freezes. Summer installations are possible but require more intensive watering during the first 4–6 weeks.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'What plants work best in Edgerton\'s climate?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'Edgerton sits in USDA hardiness zones 5a/5b, which supports a wide range of hardy perennials, shrubs, and trees. Reliable performers include coneflower (Echinacea), black-eyed Susan, Karl Foerster grass, hostas, spirea, burning bush, arborvitae, and ornamental grasses. We select plants that tolerate Wisconsin\'s freeze-thaw cycles and clay-heavy soils while minimizing your long-term maintenance needs.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'How long does a landscape installation take?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'Most residential landscape installations in Edgerton are completed in 1–3 days, depending on scope. A straightforward front bed refresh with shrubs and perennials typically takes 4–8 hours. Full-yard transformations including soil amendment, grading, planting, and mulching may span 2–3 days. We provide a written timeline with your estimate so you know exactly what to expect.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'Do you handle permit requirements for retaining walls?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'Retaining walls over 4 feet in height typically require a permit in Rock County municipalities. For walls under that threshold — which covers the majority of residential landscape projects — no permit is required. R.A.H. Solutions will advise you on permit requirements during your site assessment and can assist with the documentation process if needed for larger walls.',
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
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Landscape Installation', 'item' => 'https://rahsolutionsllc.com/services/landscape-installation'],
      ],
    ],
    [
      '@type'       => 'Service',
      '@id'         => 'https://rahsolutionsllc.com/services/landscape-installation/#service',
      'name'        => 'Landscape Installation',
      'description' => 'Full-scope landscape installation including plant selection, soil amendment, grading, drainage planning, and mulching for residential properties in Edgerton, Stoughton, Janesville, and Madison, WI.',
      'provider'    => ['@type' => 'LocalBusiness', '@id' => 'https://rahsolutionsllc.com/#business'],
      'areaServed'  => [
        ['@type' => 'City', 'name' => 'Edgerton'],
        ['@type' => 'City', 'name' => 'Stoughton'],
        ['@type' => 'City', 'name' => 'Janesville'],
        ['@type' => 'City', 'name' => 'Madison'],
      ],
      'serviceType' => 'Landscape Installation',
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
   Landscape Installation — Page-Specific Styles (li-)
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
.li-hero {
  position: relative;
  min-height: 60vh;
  display: flex;
  align-items: center;
  overflow: hidden;
  background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963876972-9uvcid-474456407_122209245674208320_3275147450913393227_n.jpg');
  background-size: cover;
  background-position: center;
  animation: li-kenburns 20s ease-in-out infinite alternate;
}
@keyframes li-kenburns {
  from { background-size: 110%; background-position: center 40%; }
  to   { background-size: 120%; background-position: center 55%; }
}
.li-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    135deg,
    rgba(var(--color-primary-rgb), 0.90) 0%,
    rgba(var(--color-primary-rgb), 0.58) 60%,
    rgba(var(--color-accent-rgb), 0.18) 100%
  );
  z-index: 1;
}
.li-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 2;
  pointer-events: none;
}
.li-hero-inner {
  position: relative;
  z-index: 3;
  padding: var(--space-4xl) 0 var(--space-3xl);
}
.li-eyebrow {
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
.li-eyebrow::before {
  content: '';
  display: block;
  width: 28px;
  height: 2px;
  background: var(--color-accent);
  flex-shrink: 0;
}
.li-hero h1 {
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
.li-hero-sub {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.82);
  max-width: 52ch;
  line-height: 1.6;
  margin-bottom: var(--space-xl);
}
.li-hero-ctas {
  display: flex;
  gap: var(--space-md);
  flex-wrap: wrap;
  align-items: center;
}
.li-btn-primary {
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
.li-btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-accent-dark);
}
.li-btn-primary:active {
  transform: translateY(2px);
  box-shadow: 0 2px 0 var(--color-accent-dark);
}
.li-btn-secondary {
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
.li-btn-secondary:hover {
  background: rgba(255,255,255,0.12);
  border-color: rgba(255,255,255,0.8);
}
.li-hero-trust {
  display: flex;
  align-items: center;
  gap: var(--space-lg);
  margin-top: var(--space-xl);
  flex-wrap: wrap;
}
.li-trust-item {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.75);
  font-weight: 600;
}
.li-trust-item i { color: var(--color-accent); }

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
.ticker-sep { color: var(--color-accent); font-size: 1.2rem; line-height: 1; }

/* ── Section Dividers ─────────────────────────────────────── */
.divider-wrap { display: block; line-height: 0; overflow: hidden; }
.divider-wrap svg { display: block; width: 100%; }

/* ── Section Eyebrow ──────────────────────────────────────── */
.li-section-eyebrow {
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
.li-section-eyebrow::after {
  content: '';
  display: block;
  width: 24px;
  height: 2px;
  background: var(--color-accent);
}

/* ── Service Detail ───────────────────────────────────────── */
.li-detail {
  padding: var(--space-4xl) 0 var(--space-3xl);
  background: var(--color-bg);
}
.li-detail-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3xl);
  align-items: center;
}
.li-detail-content { order: 1; }
.li-detail-image   { order: 2; }
.li-detail h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-lg);
}
.li-detail p {
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: 65ch;
  margin-bottom: var(--space-md);
}
.li-detail p:last-of-type { margin-bottom: var(--space-xl); }
.li-updated {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  font-style: italic;
}
.li-image-frame {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
}
.li-image-frame::before {
  content: '';
  position: absolute;
  inset: 0;
  border: 3px solid rgba(var(--color-accent-rgb), 0.25);
  border-radius: var(--radius-lg);
  z-index: 2;
  pointer-events: none;
}
.li-image-frame picture img {
  width: 100%;
  height: 420px;
  object-fit: cover;
  display: block;
  transition: transform var(--transition-slow);
}
.li-image-frame:hover picture img { transform: scale(1.03); }
.li-image-badge {
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
.li-btn-detail {
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
.li-btn-detail:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 var(--color-primary-dark);
}
.li-btn-detail:active {
  transform: translateY(2px);
  box-shadow: 0 2px 0 var(--color-primary-dark);
}

/* ── SIGNATURE: Stats Band ────────────────────────────────── */
.li-stats-band {
  background: var(--color-bg-dark);
  padding: var(--space-3xl) 0;
  position: relative;
  overflow: hidden;
}
.li-stats-band::before {
  content: '';
  position: absolute;
  top: -60px; left: -60px;
  width: 320px; height: 320px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.06);
  pointer-events: none;
}
.li-stats-band::after {
  content: '';
  position: absolute;
  bottom: -80px; right: -40px;
  width: 400px; height: 400px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.04);
  pointer-events: none;
}
.li-stats-inner { position: relative; z-index: 1; }
.li-stats-label {
  text-align: center;
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-2xl);
}
.li-stats-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-xl);
}
.li-stat-item {
  text-align: center;
  padding: var(--space-xl);
  border: 1px solid rgba(var(--color-accent-rgb), 0.15);
  border-radius: var(--radius-lg);
  background: rgba(255,255,255,0.03);
  transition: border-color var(--transition-base), background var(--transition-base);
}
.li-stat-item:hover {
  border-color: rgba(var(--color-accent-rgb), 0.35);
  background: rgba(var(--color-accent-rgb), 0.05);
}
.li-stat-number {
  font-family: var(--font-heading);
  font-size: clamp(2.2rem, 4vw, 3.2rem);
  font-weight: 700;
  color: var(--color-accent);
  line-height: 1;
  margin-bottom: var(--space-xs);
  letter-spacing: -0.02em;
}
.li-stat-label {
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.65);
  line-height: 1.4;
  max-width: 18ch;
  margin: 0 auto;
}

/* ── Mid CTA Banner ───────────────────────────────────────── */
.li-cta-mid {
  position: relative;
  padding: var(--space-3xl) 0;
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  overflow: hidden;
}
.li-cta-mid::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
  z-index: 0;
}
.li-cta-mid .container { position: relative; z-index: 1; text-align: center; }
.li-cta-eyebrow {
  display: inline-block;
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.li-cta-mid h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 2.8rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: #ffffff;
  margin-bottom: var(--space-md);
}
.li-cta-mid > .container > p {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.8);
  max-width: 55ch;
  margin: 0 auto var(--space-xl);
  line-height: 1.6;
}
.li-cta-actions {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.li-btn-cta-phone {
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
.li-btn-cta-phone:hover { transform: translateY(-2px); box-shadow: var(--shadow-xl); }
.li-btn-cta-est {
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
.li-btn-cta-est:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-accent-dark); }
.li-btn-cta-est:active { transform: translateY(2px); box-shadow: 0 2px 0 var(--color-accent-dark); }

/* ── Why Choose ───────────────────────────────────────────── */
.li-why {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.li-why-header { text-align: center; margin-bottom: var(--space-3xl); }
.li-why h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.li-why .sub {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto;
}
.li-why-cards {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
}
.li-why-card {
  background: var(--color-bg);
  border-radius: var(--radius-lg);
  padding: var(--space-xl) var(--space-lg);
  box-shadow: var(--shadow-card);
  transition: transform var(--transition-base), box-shadow var(--transition-base), background var(--transition-base);
  position: relative;
  overflow: hidden;
}
.li-why-card::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 3px;
  background: var(--color-accent);
  transform: scaleX(0);
  transform-origin: left;
  transition: transform var(--transition-base);
}
.li-why-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-xl); background: var(--color-primary); }
.li-why-card:hover::before { transform: scaleX(1); }
.li-why-card:hover .li-why-title,
.li-why-card:hover .li-why-text { color: rgba(255,255,255,0.9); }
.li-why-card:hover .li-why-icon {
  background: rgba(var(--color-accent-rgb), 0.2);
  color: var(--color-accent);
}
.li-why-icon {
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
.li-why-title {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  font-weight: 600;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
  transition: color var(--transition-base);
}
.li-why-text {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  transition: color var(--transition-base);
}

/* ── Process ──────────────────────────────────────────────── */
.li-process {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
}
.li-process-header { text-align: center; margin-bottom: var(--space-3xl); }
.li-process h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.li-process .sub {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto;
}
.li-process-steps {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
  position: relative;
}
.li-process-steps::before {
  content: '';
  position: absolute;
  top: 32px;
  left: calc(12.5% + 26px);
  right: calc(12.5% + 26px);
  height: 2px;
  background: linear-gradient(to right, var(--color-accent), rgba(var(--color-accent-rgb), 0.2));
  pointer-events: none;
}
.li-step { text-align: center; padding: var(--space-lg); }
.li-step-num {
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
.li-step:hover .li-step-num {
  background: var(--color-accent);
  border-color: var(--color-accent);
  color: var(--color-bg-dark);
}
.li-step-title {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 600;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.li-step-desc {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  max-width: 22ch;
  margin: 0 auto;
}

/* ── FAQ ──────────────────────────────────────────────────── */
.li-faq {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.li-faq-header { text-align: center; margin-bottom: var(--space-3xl); }
.li-faq h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.li-faq .sub {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto;
}
.li-faq-list {
  max-width: 800px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}
.li-faq-item {
  background: var(--color-bg);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-sm);
  border: 1px solid rgba(var(--color-primary-rgb), 0.08);
  overflow: hidden;
}
.li-faq-item summary {
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
.li-faq-item summary::-webkit-details-marker { display: none; }
.li-faq-item summary::after {
  content: '+';
  font-size: 1.4rem;
  color: var(--color-accent);
  flex-shrink: 0;
  transition: transform var(--transition-base);
}
.li-faq-item[open] summary::after { transform: rotate(45deg); }
.li-faq-item[open] summary { color: var(--color-accent); }
.li-faq-answer {
  padding: 0 var(--space-xl) var(--space-lg);
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: 65ch;
}

/* ── Closing CTA ──────────────────────────────────────────── */
.li-closing {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
  text-align: center;
}
.li-closing h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-md);
}
.li-closing p {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto var(--space-xl);
  line-height: 1.6;
}
.li-closing-actions {
  display: flex;
  justify-content: center;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.li-btn-closing-primary {
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
.li-btn-closing-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-accent-dark); }
.li-btn-closing-phone {
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
.li-btn-closing-phone:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-primary-dark); }

/* ── Responsive ───────────────────────────────────────────── */
@media (max-width: 1023px) {
  .li-stats-grid    { grid-template-columns: repeat(2, 1fr); }
  .li-why-cards     { grid-template-columns: repeat(2, 1fr); }
  .li-process-steps { grid-template-columns: repeat(2, 1fr); }
  .li-process-steps::before { display: none; }
}
@media (max-width: 767px) {
  .li-detail-grid   { grid-template-columns: 1fr; }
  .li-detail-image  { order: -1; }
  .li-image-frame picture img { height: 280px; }
  .li-stats-grid    { grid-template-columns: repeat(2, 1fr); gap: var(--space-md); }
  .li-why-cards     { grid-template-columns: 1fr; }
  .li-process-steps { grid-template-columns: 1fr; }
  .li-hero-ctas     { flex-direction: column; align-items: flex-start; }
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
        <li class="current" aria-current="page">Landscape Installation</li>
      </ol>
    </div>
  </nav>

  <!-- ── Inner Hero ─────────────────────────────────────────── -->
  <section class="li-hero" aria-label="Landscape Installation Services">
    <div class="container li-hero-inner">
      <span class="li-eyebrow">
        <i data-lucide="tree-pine" aria-hidden="true" style="width:14px;height:14px;"></i>
        Complete Landscape Transformations
      </span>
      <h1>Landscape Installation Services in Edgerton, WI</h1>
      <p class="li-hero-sub">Full-scope landscape installs starting from $2,500 — proper soil prep, zone 5 plant selection, drainage-first planning, and mulch finish — all handled in one project by R.A.H. Solutions.</p>
      <div class="li-hero-ctas">
        <a href="tel:6085015123" class="li-btn-primary">
          <i data-lucide="phone" aria-hidden="true" style="width:18px;height:18px;"></i>
          Call (608) 501-5123
        </a>
        <a href="/contact" class="li-btn-secondary">Get a Free Estimate</a>
      </div>
      <div class="li-hero-trust">
        <span class="li-trust-item">
          <i data-lucide="shield-check" aria-hidden="true"></i> Licensed &amp; Insured
        </span>
        <span class="li-trust-item">
          <i data-lucide="star" aria-hidden="true"></i> 4.9-Star Rated
        </span>
        <span class="li-trust-item">
          <i data-lucide="sprout" aria-hidden="true"></i> Zone 5 Specialists
        </span>
      </div>
    </div>
  </section>

  <!-- ── Proof Ticker Strip ─────────────────────────────────── -->
  <div class="ticker-strip" aria-hidden="true">
    <div class="ticker-track">
      <span class="ticker-item">Full-Yard Transformations<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Zone 5 Plant Selection<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Drainage-First Installs<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Licensed &amp; Insured<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Free Estimates<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Edgerton · Stoughton · Madison · Janesville<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Soil Amendment Included<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Blueprint to Mulch<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Full-Yard Transformations<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Zone 5 Plant Selection<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Drainage-First Installs<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Licensed &amp; Insured<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Free Estimates<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Edgerton · Stoughton · Madison · Janesville<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Soil Amendment Included<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Blueprint to Mulch<span class="ticker-sep">✦</span></span>
    </div>
  </div>

  <!-- ── Divider ────────────────────────────────────────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,40 1200,40 0,40" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ── Service Detail Section ─────────────────────────────── -->
  <section class="li-detail" data-animate="fade-up">
    <div class="container">
      <div class="li-detail-grid">
        <div class="li-detail-content">
          <span class="li-section-eyebrow">What's Included</span>
          <h2>What Is the Full Scope from Grading to <span class="text-accent">Planted Beds</span>?</h2>

          <p>Landscape installation in Edgerton starts at $2,500 for smaller bed installations and scales based on yard size, plant count, and grading complexity. Every project includes soil assessment and amendment, proper grading and drainage planning before a single plant goes in the ground, and a full mulch finish to lock in moisture and suppress weeds. You get a transformed yard — not just a plant delivery.</p>

          <p>Edgerton's soils trend heavily toward clay — particularly in Rock County neighborhoods built on former agricultural land. Clay compacts under foot traffic and equipment and stays waterlogged after heavy spring rains. Before we plant anything, we address drainage: identifying low spots, amending soil with compost and grit to improve drainage rates, and establishing proper slope away from foundations. Planting into unamended clay is one of the most common reasons landscape installations fail within two years.</p>

          <p>We select plants specifically suited to USDA zones 5a and 5b — the hardiness zones that cover Edgerton and the surrounding Rock &amp; Dane County area. Wisconsin winters push to -20°F in cold years. The plants we specify — coneflower, black-eyed Susan, Karl Foerster grass, hostas, arborvitae, spirea, and ornamental grasses — are proven performers in this climate, not southern nursery stock sold north of its comfort zone.</p>

          <p>Installation sequence matters as much as plant selection. We follow a defined order: hardscape placement first (if applicable), then soil prep and amendment, then plant layout and spacing review before digging, then installation, then mulch. This sequence prevents the common mistake of planting first and discovering drainage problems too late. We provide a written care guide covering the critical establishment period — the first two growing seasons when new plants are most vulnerable.</p>

          <div class="answer-block">
            <h3>How long does a landscape installation take in Edgerton?</h3>
            <p>Most residential landscape installations in Edgerton are completed in 1 to 5 days depending on project scope, with smaller bed refreshes finishing in a single day and full-yard transformations spanning 3–5 days. Projects start at $2,500 for basic installations and scale based on plant count, grading complexity, and soil amendment needs. Every project includes soil prep, drainage planning, planting, and a full mulch finish.</p>
          </div>

          <p class="li-updated">Last Updated: May 2026 · Serving Edgerton, WI and surrounding Rock &amp; Dane County communities.</p>

          <a href="/contact" class="li-btn-detail">
            <i data-lucide="clipboard-list" aria-hidden="true" style="width:18px;height:18px;"></i>
            Request a Project Estimate
          </a>
        </div>

        <div class="li-detail-image">
          <div class="li-image-frame">
            <picture>
              <source srcset="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963901265-nudusv-612484153_122306872124208320_6814002630237134691_n.jpg" type="image/webp">
              <img
                src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963901265-nudusv-612484153_122306872124208320_6814002630237134691_n.jpg"
                alt="Professional landscape installation project in Edgerton Wisconsin with planted beds and shrubs"
                width="600"
                height="420"
                loading="lazy"
              >
            </picture>
            <span class="li-image-badge">Edgerton, WI</span>
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
  <section class="li-stats-band" aria-label="Landscape installation project statistics">
    <div class="container li-stats-inner">
      <p class="li-stats-label">R.A.H. Solutions — Landscape Installation by the Numbers</p>
      <div class="li-stats-grid">
        <div class="li-stat-item" data-animate="fade-up">
          <div class="li-stat-number">$2,500<span style="font-size:1.5rem;">+</span></div>
          <div class="li-stat-label">Starting price for small landscape installs</div>
        </div>
        <div class="li-stat-item" data-animate="fade-up">
          <div class="li-stat-number">3+</div>
          <div class="li-stat-label">Years serving Rock &amp; Dane County</div>
        </div>
        <div class="li-stat-item" data-animate="fade-up">
          <div class="li-stat-number">4.9★</div>
          <div class="li-stat-label">Average rating across 47 customer reviews</div>
        </div>
        <div class="li-stat-item" data-animate="fade-up">
          <div class="li-stat-number">4</div>
          <div class="li-stat-label">Cities served across Southern Wisconsin</div>
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
  <section class="li-cta-mid" aria-label="Get a landscape installation estimate">
    <div class="container">
      <p class="li-cta-eyebrow">Free Estimates · Spring &amp; Fall Booking Available</p>
      <h2>Are This Season's Install Spots Filling Fast?</h2>
      <p>Spring and fall are our busiest install windows. Lock in your project date before the schedule fills — call R.A.H. Solutions for a free site assessment and written estimate.</p>
      <div class="li-cta-actions">
        <a href="tel:6085015123" class="li-btn-cta-phone">
          <i data-lucide="phone" aria-hidden="true" style="width:20px;height:20px;"></i>
          (608) 501-5123
        </a>
        <a href="/contact" class="li-btn-cta-est">Get a Free Estimate</a>
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
  <section class="li-why" data-animate="fade-up">
    <div class="container">
      <div class="li-why-header">
        <span class="li-section-eyebrow">Why R.A.H. Solutions</span>
        <h2>What <span class="text-accent">Installs</span> Are Built to Survive Wisconsin?</h2>
        <p class="sub">The difference between a landscape that thrives for 10 years and one that declines in two is almost always in what happens before the plants go in the ground.</p>
      </div>
      <div class="li-why-cards">
        <div class="li-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="li-why-icon">
            <i data-lucide="thermometer" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="li-why-title">Plant Selection for Zone 5 Wisconsin</h3>
          <p class="li-why-text">Every plant we specify is rated to handle Edgerton winters. No marginal zone 6 material that survives one season and fails the next.</p>
        </div>
        <div class="li-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="li-why-icon">
            <i data-lucide="layers" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="li-why-title">Proper Soil Prep Before Planting</h3>
          <p class="li-why-text">Rock County clay soils need amendment before installation. We test, amend, and structure the soil so roots actually have somewhere to grow.</p>
        </div>
        <div class="li-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="li-why-icon">
            <i data-lucide="droplets" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="li-why-title">Drainage-First Installation Approach</h3>
          <p class="li-why-text">We resolve drainage problems before the first plant goes in — not after beds flood and roots rot through their first Wisconsin winter.</p>
        </div>
        <div class="li-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="li-why-icon">
            <i data-lucide="clipboard-check" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="li-why-title">Full-Scope Install from Blueprint to Mulch</h3>
          <p class="li-why-text">One crew, one project, no subcontractor gaps. From the initial site plan through the final mulch layer — we own the entire installation.</p>
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
  <section class="li-process" data-animate="fade-up">
    <div class="container">
      <div class="li-process-header">
        <span class="li-section-eyebrow">How We Work</span>
        <h2>What Are the Four Steps from Site Visit to <span class="text-accent">Finished Landscape</span>?</h2>
        <p class="sub">A clear, predictable process that keeps your project on schedule and your property protected throughout installation.</p>
      </div>
      <div class="li-process-steps">
        <div class="li-step">
          <div class="li-step-num">1</div>
          <h3 class="li-step-title">Site Assessment &amp; Grading Review</h3>
          <p class="li-step-desc">We evaluate drainage, soil condition, sun exposure, and existing plants before designing anything.</p>
        </div>
        <div class="li-step">
          <div class="li-step-num">2</div>
          <h3 class="li-step-title">Material Selection &amp; Sourcing</h3>
          <p class="li-step-desc">You review and approve plant selections, hardscape materials, and mulch type before we order a thing.</p>
        </div>
        <div class="li-step">
          <div class="li-step-num">3</div>
          <h3 class="li-step-title">Installation Day(s)</h3>
          <p class="li-step-desc">Soil prep and amendment first, then hardscape if applicable, then planting, then mulch — sequence done right.</p>
        </div>
        <div class="li-step">
          <div class="li-step-num">4</div>
          <h3 class="li-step-title">Final Inspection &amp; Care Instructions</h3>
          <p class="li-step-desc">Walk-through of the completed project plus a written care guide covering watering, first-year maintenance, and what to expect.</p>
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
  <section class="li-faq" data-animate="fade-up">
    <div class="container">
      <div class="li-faq-header">
        <span class="li-section-eyebrow">Common Questions</span>
        <h2>What Are Your Landscape Installation Questions?</h2>
        <p class="sub">What Edgerton homeowners ask before booking a landscape install project.</p>
      </div>
      <div class="li-faq-list">
        <details class="li-faq-item">
          <summary>When is the best time to install landscaping in Wisconsin?</summary>
          <div class="li-faq-answer">
            <p>Spring (late April through May) and fall (September through October) are the two ideal installation windows in Edgerton. Spring allows plants to establish through a full growing season before winter. Fall installations benefit from cooler temperatures that reduce transplant stress and allow root development before the ground freezes. Summer installs are possible but require more intensive watering during the first 4–6 weeks.</p>
          </div>
        </details>
        <details class="li-faq-item">
          <summary>What plants work best in Edgerton's climate?</summary>
          <div class="li-faq-answer">
            <p>Edgerton sits in USDA hardiness zones 5a/5b, which supports a wide range of hardy perennials, shrubs, and trees. Reliable performers include coneflower (Echinacea), black-eyed Susan, Karl Foerster grass, hostas, spirea, burning bush, arborvitae, and ornamental grasses. We select plants that tolerate Wisconsin's freeze-thaw cycles and clay-heavy soils while minimizing your long-term maintenance load.</p>
          </div>
        </details>
        <details class="li-faq-item">
          <summary>How long does a landscape installation take?</summary>
          <div class="li-faq-answer">
            <p>Most residential landscape installations in Edgerton are completed in 1–3 days, depending on scope. A straightforward front bed refresh with shrubs and perennials typically takes 4–8 hours. Full-yard transformations including soil amendment, grading, planting, and mulching may span 2–3 days. We provide a written timeline with your estimate so you know exactly what to expect.</p>
          </div>
        </details>
        <details class="li-faq-item">
          <summary>Do you handle permit requirements for retaining walls?</summary>
          <div class="li-faq-answer">
            <p>Retaining walls over 4 feet in height typically require a permit in Rock County municipalities. For walls under that threshold — which covers the majority of residential projects — no permit is required. R.A.H. Solutions will advise you on permit requirements during your site assessment and can assist with the documentation process if needed for larger walls.</p>
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
  <section class="li-closing" data-animate="fade-up">
    <div class="container">
      <span class="li-section-eyebrow" style="justify-content:center;">Book Your Install This Season</span>
      <h2>How Do You Get a Free Estimate for Your Landscape Project?</h2>
      <p>Spring and fall slots book up fast. Call R.A.H. Solutions for a free site visit — we'll assess your yard, walk through options, and deliver a written estimate with no pressure.</p>
      <div class="li-closing-actions">
        <a href="tel:6085015123" class="li-btn-closing-phone">
          <i data-lucide="phone" aria-hidden="true" style="width:20px;height:20px;"></i>
          (608) 501-5123
        </a>
        <a href="/contact" class="li-btn-closing-primary">
          <i data-lucide="clipboard-list" aria-hidden="true" style="width:20px;height:20px;"></i>
          Get a Free Estimate
        </a>
      </div>
    </div>
  </section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
