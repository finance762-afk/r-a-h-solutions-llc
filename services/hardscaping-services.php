<?php
// ============================================================
// Hardscaping Services — R.A.H. Solutions, LLC
// ============================================================
$pageTitle       = 'Hardscaping Services in Edgerton, WI';
$pageDescription = 'Hardscaping in Edgerton, WI — patios, retaining walls & walkways by R.A.H. Solutions. Built to handle Wisconsin winters. Free estimates. Call (608) 501-5123.';
$canonicalUrl    = 'https://rahsolutionsllc.com/services/hardscaping-services';
// SEO: {"@context":"https://schema.org"} — schema and <link rel="canonical"> rendered via head.php
$ogImage         = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963878224-9yylmf-474790582_122209560278208320_5110498035873152787_n.jpg';
$currentPage     = 'service-hardscaping-services';
$heroPreload     = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963878224-9yylmf-474790582_122209560278208320_5110498035873152787_n.jpg';

$faqs = [
  [
    '@type'          => 'Question',
    'name'           => 'How long do hardscape patios last in Wisconsin?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'A properly installed paver or concrete patio in Wisconsin typically lasts 25–30 years or longer when the base is correctly prepared. The critical factor is base depth — a minimum of 6–8 inches of compacted gravel below the surface material to prevent frost heave from cracking or lifting pavers during Wisconsin\'s freeze-thaw cycles. Patios installed without adequate base preparation can begin failing within 3–5 years.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'What base depth is needed for Wisconsin winters?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'In Rock County and southern Wisconsin, hardscape installations require a minimum of 6–8 inches of compacted Class 5 gravel base beneath paver or stone surfaces. For retaining walls and areas with poor drainage, we extend base depth to 10–12 inches. This depth allows water to drain away from the surface material before it freezes and expands, which is the primary cause of frost heave damage in Wisconsin hardscaping projects.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'Can you add a retaining wall to a sloped yard?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'Yes — retaining walls are one of the most effective ways to address sloped yards in Edgerton. We design walls to stabilize soil, prevent erosion, and create level usable space on grades that would otherwise be unusable or difficult to maintain. Proper drainage behind the wall — including gravel backfill and perforated drainage tile — is essential to prevent hydrostatic pressure from pushing the wall out over time.',
    ],
  ],
  [
    '@type'          => 'Question',
    'name'           => 'How much does a patio cost in Edgerton, WI?',
    'acceptedAnswer' => [
      '@type' => 'Answer',
      'text'  => 'Basic paver patios in Edgerton start at approximately $3,000 for a 200–250 sq ft installation using standard concrete pavers. Natural stone and premium paver materials increase material costs by 30–60%. Retaining walls are priced per linear foot based on wall height and material — typically $50–$120 per linear foot installed. R.A.H. Solutions provides detailed written estimates at no charge.',
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
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Hardscaping Services', 'item' => 'https://rahsolutionsllc.com/services/hardscaping-services'],
      ],
    ],
    [
      '@type'       => 'Service',
      '@id'         => 'https://rahsolutionsllc.com/services/hardscaping-services/#service',
      'name'        => 'Hardscaping Services',
      'description' => 'Patio installation, retaining walls, and walkway construction for residential properties in Edgerton, Stoughton, Janesville, and Madison, WI. Wisconsin freeze-thaw rated base preparation on every project.',
      'provider'    => ['@type' => 'LocalBusiness', '@id' => 'https://rahsolutionsllc.com/#business'],
      'areaServed'  => [
        ['@type' => 'City', 'name' => 'Edgerton'],
        ['@type' => 'City', 'name' => 'Stoughton'],
        ['@type' => 'City', 'name' => 'Janesville'],
        ['@type' => 'City', 'name' => 'Madison'],
      ],
      'serviceType' => 'Hardscaping Services',
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
   Hardscaping Services — Page-Specific Styles (hs-)
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
.hs-hero {
  position: relative;
  min-height: 60vh;
  display: flex;
  align-items: center;
  overflow: hidden;
  background-image: url('https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963878224-9yylmf-474790582_122209560278208320_5110498035873152787_n.jpg');
  background-size: cover;
  background-position: center;
  animation: hs-kenburns 20s ease-in-out infinite alternate;
}
@keyframes hs-kenburns {
  from { background-size: 110%; background-position: center 45%; }
  to   { background-size: 122%; background-position: center 55%; }
}
.hs-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(
    135deg,
    rgba(var(--color-primary-rgb), 0.92) 0%,
    rgba(var(--color-primary-rgb), 0.60) 55%,
    rgba(var(--color-accent-rgb), 0.14) 100%
  );
  z-index: 1;
}
.hs-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 2;
  pointer-events: none;
}
.hs-hero-inner {
  position: relative;
  z-index: 3;
  padding: var(--space-4xl) 0 var(--space-3xl);
}
.hs-eyebrow {
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
.hs-eyebrow::before {
  content: '';
  display: block;
  width: 28px;
  height: 2px;
  background: var(--color-accent);
  flex-shrink: 0;
}
.hs-hero h1 {
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
.hs-hero-sub {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.82);
  max-width: 52ch;
  line-height: 1.6;
  margin-bottom: var(--space-xl);
}
.hs-hero-ctas {
  display: flex;
  gap: var(--space-md);
  flex-wrap: wrap;
  align-items: center;
}
.hs-btn-primary {
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
.hs-btn-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-accent-dark); }
.hs-btn-primary:active { transform: translateY(2px); box-shadow: 0 2px 0 var(--color-accent-dark); }
.hs-btn-secondary {
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
.hs-btn-secondary:hover { background: rgba(255,255,255,0.12); border-color: rgba(255,255,255,0.8); }
.hs-hero-trust {
  display: flex;
  align-items: center;
  gap: var(--space-lg);
  margin-top: var(--space-xl);
  flex-wrap: wrap;
}
.hs-trust-item {
  display: flex;
  align-items: center;
  gap: var(--space-xs);
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.75);
  font-weight: 600;
}
.hs-trust-item i { color: var(--color-accent); }

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
  animation: ticker-scroll 34s linear infinite;
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
.hs-section-eyebrow {
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
.hs-section-eyebrow::after {
  content: '';
  display: block;
  width: 24px;
  height: 2px;
  background: var(--color-accent);
}

/* ── Service Detail ───────────────────────────────────────── */
.hs-detail {
  padding: var(--space-4xl) 0 var(--space-3xl);
  background: var(--color-bg);
}
.hs-detail-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3xl);
  align-items: center;
}
.hs-detail-content { order: 1; }
.hs-detail-image   { order: 2; }
.hs-detail h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  line-height: 1.15;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-lg);
}
.hs-detail p {
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: 65ch;
  margin-bottom: var(--space-md);
}
.hs-detail p:last-of-type { margin-bottom: var(--space-xl); }
.hs-updated {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  font-style: italic;
}
.hs-image-frame {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
}
.hs-image-frame::before {
  content: '';
  position: absolute;
  inset: 0;
  border: 3px solid rgba(var(--color-accent-rgb), 0.25);
  border-radius: var(--radius-lg);
  z-index: 2;
  pointer-events: none;
}
.hs-image-frame picture img {
  width: 100%;
  height: 420px;
  object-fit: cover;
  display: block;
  transition: transform var(--transition-slow);
}
.hs-image-frame:hover picture img { transform: scale(1.03); }
.hs-image-badge {
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
.hs-btn-detail {
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
.hs-btn-detail:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-primary-dark); }
.hs-btn-detail:active { transform: translateY(2px); box-shadow: 0 2px 0 var(--color-primary-dark); }

/* ── SIGNATURE: Stats Band ────────────────────────────────── */
.hs-stats-band {
  background: var(--color-bg-dark);
  padding: var(--space-3xl) 0;
  position: relative;
  overflow: hidden;
}
.hs-stats-band::before {
  content: '';
  position: absolute;
  top: -60px; left: -60px;
  width: 320px; height: 320px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.06);
  pointer-events: none;
}
.hs-stats-band::after {
  content: '';
  position: absolute;
  bottom: -80px; right: -40px;
  width: 400px; height: 400px;
  border-radius: 50%;
  background: rgba(var(--color-accent-rgb), 0.04);
  pointer-events: none;
}
.hs-stats-inner { position: relative; z-index: 1; }
.hs-stats-label {
  text-align: center;
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-2xl);
}
.hs-stats-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-xl);
}
.hs-stat-item {
  text-align: center;
  padding: var(--space-xl);
  border: 1px solid rgba(var(--color-accent-rgb), 0.15);
  border-radius: var(--radius-lg);
  background: rgba(255,255,255,0.03);
  transition: border-color var(--transition-base), background var(--transition-base);
}
.hs-stat-item:hover {
  border-color: rgba(var(--color-accent-rgb), 0.35);
  background: rgba(var(--color-accent-rgb), 0.05);
}
.hs-stat-number {
  font-family: var(--font-heading);
  font-size: clamp(2.2rem, 4vw, 3.2rem);
  font-weight: 700;
  color: var(--color-accent);
  line-height: 1;
  margin-bottom: var(--space-xs);
  letter-spacing: -0.02em;
}
.hs-stat-label {
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.65);
  line-height: 1.4;
  max-width: 18ch;
  margin: 0 auto;
}

/* ── Mid CTA Banner ───────────────────────────────────────── */
.hs-cta-mid {
  position: relative;
  padding: var(--space-3xl) 0;
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  overflow: hidden;
}
.hs-cta-mid::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
  z-index: 0;
}
.hs-cta-mid .container { position: relative; z-index: 1; text-align: center; }
.hs-cta-eyebrow {
  display: inline-block;
  font-family: var(--font-body);
  font-size: var(--font-size-sm);
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  margin-bottom: var(--space-sm);
}
.hs-cta-mid h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 4vw, 2.8rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: #ffffff;
  margin-bottom: var(--space-md);
}
.hs-cta-mid > .container > p {
  font-size: var(--font-size-lg);
  color: rgba(255,255,255,0.8);
  max-width: 55ch;
  margin: 0 auto var(--space-xl);
  line-height: 1.6;
}
.hs-cta-actions {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.hs-btn-cta-phone {
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
.hs-btn-cta-phone:hover { transform: translateY(-2px); box-shadow: var(--shadow-xl); }
.hs-btn-cta-est {
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
.hs-btn-cta-est:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-accent-dark); }
.hs-btn-cta-est:active { transform: translateY(2px); box-shadow: 0 2px 0 var(--color-accent-dark); }

/* ── Why Choose ───────────────────────────────────────────── */
.hs-why {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.hs-why-header { text-align: center; margin-bottom: var(--space-3xl); }
.hs-why h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.hs-why .sub {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto;
}
.hs-why-cards {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
}
.hs-why-card {
  background: var(--color-bg);
  border-radius: var(--radius-lg);
  padding: var(--space-xl) var(--space-lg);
  box-shadow: var(--shadow-card);
  transition: transform var(--transition-base), box-shadow var(--transition-base), background var(--transition-base);
  position: relative;
  overflow: hidden;
}
.hs-why-card::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 3px;
  background: var(--color-accent);
  transform: scaleX(0);
  transform-origin: left;
  transition: transform var(--transition-base);
}
.hs-why-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-xl); background: var(--color-primary); }
.hs-why-card:hover::before { transform: scaleX(1); }
.hs-why-card:hover .hs-why-title,
.hs-why-card:hover .hs-why-text { color: rgba(255,255,255,0.9); }
.hs-why-card:hover .hs-why-icon {
  background: rgba(var(--color-accent-rgb), 0.2);
  color: var(--color-accent);
}
.hs-why-icon {
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
.hs-why-title {
  font-family: var(--font-heading);
  font-size: var(--font-size-xl);
  font-weight: 600;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
  transition: color var(--transition-base);
}
.hs-why-text {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  transition: color var(--transition-base);
}

/* ── Process ──────────────────────────────────────────────── */
.hs-process {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
}
.hs-process-header { text-align: center; margin-bottom: var(--space-3xl); }
.hs-process h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.hs-process .sub {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto;
}
.hs-process-steps {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-lg);
  position: relative;
}
.hs-process-steps::before {
  content: '';
  position: absolute;
  top: 32px;
  left: calc(12.5% + 26px);
  right: calc(12.5% + 26px);
  height: 2px;
  background: linear-gradient(to right, var(--color-accent), rgba(var(--color-accent-rgb), 0.2));
  pointer-events: none;
}
.hs-step { text-align: center; padding: var(--space-lg); }
.hs-step-num {
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
.hs-step:hover .hs-step-num {
  background: var(--color-accent);
  border-color: var(--color-accent);
  color: var(--color-bg-dark);
}
.hs-step-title {
  font-family: var(--font-heading);
  font-size: var(--font-size-lg);
  font-weight: 600;
  text-wrap: balance;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.hs-step-desc {
  font-size: var(--font-size-sm);
  color: var(--color-text-light);
  line-height: 1.6;
  max-width: 22ch;
  margin: 0 auto;
}

/* ── FAQ ──────────────────────────────────────────────────── */
.hs-faq {
  padding: var(--space-4xl) 0;
  background: var(--color-bg-alt);
}
.hs-faq-header { text-align: center; margin-bottom: var(--space-3xl); }
.hs-faq h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
}
.hs-faq .sub {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto;
}
.hs-faq-list {
  max-width: 800px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-md);
}
.hs-faq-item {
  background: var(--color-bg);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-sm);
  border: 1px solid rgba(var(--color-primary-rgb), 0.08);
  overflow: hidden;
}
.hs-faq-item summary {
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
.hs-faq-item summary::-webkit-details-marker { display: none; }
.hs-faq-item summary::after {
  content: '+';
  font-size: 1.4rem;
  color: var(--color-accent);
  flex-shrink: 0;
  transition: transform var(--transition-base);
}
.hs-faq-item[open] summary::after { transform: rotate(45deg); }
.hs-faq-item[open] summary { color: var(--color-accent); }
.hs-faq-answer {
  padding: 0 var(--space-xl) var(--space-lg);
  font-size: var(--font-size-base);
  color: var(--color-text-light);
  line-height: 1.7;
  max-width: 65ch;
}

/* ── Closing CTA ──────────────────────────────────────────── */
.hs-closing {
  padding: var(--space-4xl) 0;
  background: var(--color-bg);
  text-align: center;
}
.hs-closing h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  text-wrap: balance;
  letter-spacing: -0.02em;
  color: var(--color-primary);
  margin-bottom: var(--space-md);
}
.hs-closing p {
  font-size: var(--font-size-lg);
  color: var(--color-text-light);
  max-width: 55ch;
  margin: 0 auto var(--space-xl);
  line-height: 1.6;
}
.hs-closing-actions {
  display: flex;
  justify-content: center;
  gap: var(--space-md);
  flex-wrap: wrap;
}
.hs-btn-closing-primary {
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
.hs-btn-closing-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-accent-dark); }
.hs-btn-closing-phone {
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
.hs-btn-closing-phone:hover { transform: translateY(-2px); box-shadow: 0 6px 0 var(--color-primary-dark); }

/* ── Responsive ───────────────────────────────────────────── */
@media (max-width: 1023px) {
  .hs-stats-grid    { grid-template-columns: repeat(2, 1fr); }
  .hs-why-cards     { grid-template-columns: repeat(2, 1fr); }
  .hs-process-steps { grid-template-columns: repeat(2, 1fr); }
  .hs-process-steps::before { display: none; }
}
@media (max-width: 767px) {
  .hs-detail-grid   { grid-template-columns: 1fr; }
  .hs-detail-image  { order: -1; }
  .hs-image-frame picture img { height: 280px; }
  .hs-stats-grid    { grid-template-columns: repeat(2, 1fr); gap: var(--space-md); }
  .hs-why-cards     { grid-template-columns: 1fr; }
  .hs-process-steps { grid-template-columns: 1fr; }
  .hs-hero-ctas     { flex-direction: column; align-items: flex-start; }
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
        <li class="current" aria-current="page">Hardscaping Services</li>
      </ol>
    </div>
  </nav>

  <!-- ── Inner Hero ─────────────────────────────────────────── -->
  <section class="hs-hero" aria-label="Hardscaping Services">
    <div class="container hs-hero-inner">
      <span class="hs-eyebrow">
        <i data-lucide="square-square" aria-hidden="true" style="width:14px;height:14px;"></i>
        Patios · Retaining Walls · Walkways
      </span>
      <h1>Hardscaping Services in Edgerton, WI — Patios &amp; Retaining Walls</h1>
      <p class="hs-hero-sub">Paver patios starting from $3,000. Retaining walls built with proper gravel base and drainage to withstand Wisconsin's freeze-thaw cycles — not just look good the first summer.</p>
      <div class="hs-hero-ctas">
        <a href="tel:6085015123" class="hs-btn-primary">
          <i data-lucide="phone" aria-hidden="true" style="width:18px;height:18px;"></i>
          Call (608) 501-5123
        </a>
        <a href="/contact" class="hs-btn-secondary">Get a Free Estimate</a>
      </div>
      <div class="hs-hero-trust">
        <span class="hs-trust-item">
          <i data-lucide="shield-check" aria-hidden="true"></i> Licensed &amp; Insured
        </span>
        <span class="hs-trust-item">
          <i data-lucide="star" aria-hidden="true"></i> 4.9-Star Rated
        </span>
        <span class="hs-trust-item">
          <i data-lucide="snowflake" aria-hidden="true"></i> Wisconsin Freeze-Thaw Rated
        </span>
      </div>
    </div>
  </section>

  <!-- ── Proof Ticker Strip ─────────────────────────────────── -->
  <div class="ticker-strip" aria-hidden="true">
    <div class="ticker-track">
      <span class="ticker-item">Paver Patio Installation<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Retaining Walls<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Frost-Proof Base Prep<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Licensed &amp; Insured<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Free Estimates<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Edgerton · Stoughton · Madison · Janesville<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Walkway Construction<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Drainage-First Design<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Paver Patio Installation<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Retaining Walls<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Frost-Proof Base Prep<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Licensed &amp; Insured<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Free Estimates<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Edgerton · Stoughton · Madison · Janesville<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Walkway Construction<span class="ticker-sep">✦</span></span>
      <span class="ticker-item">Drainage-First Design<span class="ticker-sep">✦</span></span>
    </div>
  </div>

  <!-- ── Divider ────────────────────────────────────────────── -->
  <div class="divider-wrap" aria-hidden="true">
    <svg viewBox="0 0 1200 40" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="0,0 1200,40 1200,40 0,40" fill="#ffffff"/>
    </svg>
  </div>

  <!-- ── Service Detail Section ─────────────────────────────── -->
  <section class="hs-detail" data-animate="fade-up">
    <div class="container">
      <div class="hs-detail-grid">
        <div class="hs-detail-content">
          <span class="hs-section-eyebrow">What We Build</span>
          <h2>What Hardscaping Holds Through Wisconsin Winters?</h2>

          <p>Paver patio installation in Edgerton starts at $3,000 for a 200–250 sq ft area using standard concrete pavers. Natural stone and premium paver materials increase costs by 30–60% depending on material selection. Retaining walls run $50–$120 per linear foot installed, based on wall height and materials. Every project includes a free site evaluation and written estimate — no guesswork on price.</p>

          <p>Wisconsin's freeze-thaw cycle is the hardest thing hardscaping has to survive. Edgerton sees dozens of freeze-thaw cycles each winter — temperatures drop below freezing, ground water turns to ice and expands, then thaws and contracts. This cycle is what heaves patios, cracks poured concrete, and pushes retaining walls out of alignment over 3–5 years. The only way to prevent it is correct base depth: a minimum of 6–8 inches of compacted Class 5 gravel beneath paver or stone surfaces, with 10–12 inches in drainage-challenged areas. This is not where we cut corners.</p>

          <p>Material selection matters for longevity as much as aesthetics. Concrete pavers are the most cost-effective option and handle freeze-thaw well when properly sealed. Natural flagstone and quarry stone are premium-tier options that develop character with age and never need sealing. Poured concrete is lower upfront but prone to cracking without expansion joints — we include those on any concrete installation we do. We'll walk you through the trade-offs at your site visit so you can make an informed call.</p>

          <p>Hardscaping adds measurable property value. A well-installed patio in Edgerton typically returns $8,000–$20,000 in added home value depending on size and materials — often exceeding the installation cost on properties priced in the mid-range of Rock County's market. We design projects with resale in mind, not just curb appeal.</p>

          <p class="hs-updated">Last Updated: April 2026 · Serving Edgerton, WI and surrounding Rock &amp; Dane County communities.</p>

          <a href="/contact" class="hs-btn-detail">
            <i data-lucide="clipboard-list" aria-hidden="true" style="width:18px;height:18px;"></i>
            Request a Free Estimate
          </a>
        </div>

        <div class="hs-detail-image">
          <div class="hs-image-frame">
            <picture>
              <source srcset="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963889584-ala069-486653046_122226629198208320_4781171488771186863_n.jpg" type="image/webp">
              <img
                src="https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963889584-ala069-486653046_122226629198208320_4781171488771186863_n.jpg"
                alt="Hardscaping patio and retaining wall installation project in Edgerton Wisconsin"
                width="600"
                height="420"
                loading="lazy"
              >
            </picture>
            <span class="hs-image-badge">Edgerton, WI</span>
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
  <section class="hs-stats-band" aria-label="Hardscaping project statistics">
    <div class="container hs-stats-inner">
      <p class="hs-stats-label">R.A.H. Solutions — Hardscaping by the Numbers</p>
      <div class="hs-stats-grid">
        <div class="hs-stat-item" data-animate="fade-up">
          <div class="hs-stat-number">$3,000<span style="font-size:1.5rem;">+</span></div>
          <div class="hs-stat-label">Starting price for basic paver patios</div>
        </div>
        <div class="hs-stat-item" data-animate="fade-up">
          <div class="hs-stat-number">3+</div>
          <div class="hs-stat-label">Years serving Rock County hardscape projects</div>
        </div>
        <div class="hs-stat-item" data-animate="fade-up">
          <div class="hs-stat-number">4.9★</div>
          <div class="hs-stat-label">Average rating across 47 customer reviews</div>
        </div>
        <div class="hs-stat-item" data-animate="fade-up">
          <div class="hs-stat-number">6–8"</div>
          <div class="hs-stat-label">Minimum gravel base depth on every install</div>
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
  <section class="hs-cta-mid" aria-label="Get a hardscaping estimate">
    <div class="container">
      <p class="hs-cta-eyebrow">Free Estimates · Written Quote Guaranteed</p>
      <h2>A Patio Built Right Lasts 25+ Years in Wisconsin</h2>
      <p>Don't hire a crew that skips base prep and calls it good. R.A.H. Solutions builds hardscaping to handle Rock County winters — every single time. Call for a free site visit.</p>
      <div class="hs-cta-actions">
        <a href="tel:6085015123" class="hs-btn-cta-phone">
          <i data-lucide="phone" aria-hidden="true" style="width:20px;height:20px;"></i>
          (608) 501-5123
        </a>
        <a href="/contact" class="hs-btn-cta-est">Get a Free Estimate</a>
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
  <section class="hs-why" data-animate="fade-up">
    <div class="container">
      <div class="hs-why-header">
        <span class="hs-section-eyebrow">Why R.A.H. Solutions</span>
        <h2>Why Is Base Preparation Where Hardscaping Succeeds or Fails?</h2>
        <p class="sub">Every crew can lay pavers. Fewer crews know how to prepare the sub-base correctly for Wisconsin's soil conditions and freeze-thaw pressure.</p>
      </div>
      <div class="hs-why-cards">
        <div class="hs-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="hs-why-icon">
            <i data-lucide="layers" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="hs-why-title">Wisconsin Frost-Proof Base Preparation</h3>
          <p class="hs-why-text">6–8 inches of compacted gravel beneath every surface — the correct depth to prevent frost heave on Rock County properties.</p>
        </div>
        <div class="hs-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="hs-why-icon">
            <i data-lucide="droplets" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="hs-why-title">Proper Drainage Built Into Every Project</h3>
          <p class="hs-why-text">Surface grading, drainage tile behind retaining walls, and bedding sand slopes — water management is designed in, not ignored.</p>
        </div>
        <div class="hs-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="hs-why-icon">
            <i data-lucide="shield-check" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="hs-why-title">Licensed &amp; Insured Contractor</h3>
          <p class="hs-why-text">Fully licensed and insured in Wisconsin. Written estimates on every project so there are no surprises when work is complete.</p>
        </div>
        <div class="hs-why-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12">
          <div class="hs-why-icon">
            <i data-lucide="trending-up" aria-hidden="true" style="width:24px;height:24px;"></i>
          </div>
          <h3 class="hs-why-title">Property Value Enhancement</h3>
          <p class="hs-why-text">Well-installed hardscaping returns $8K–$20K in added home value in Rock County's market — often exceeding the project cost.</p>
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
  <section class="hs-process" data-animate="fade-up">
    <div class="container">
      <div class="hs-process-header">
        <span class="hs-section-eyebrow">How We Work</span>
        <h2>What Are the Four Steps from First Consultation to Final Stone?</h2>
        <p class="sub">A straightforward process that protects your property and delivers results that last through Wisconsin winters.</p>
      </div>
      <div class="hs-process-steps">
        <div class="hs-step">
          <div class="hs-step-num">1</div>
          <h3 class="hs-step-title">Site Evaluation &amp; Drainage Assessment</h3>
          <p class="hs-step-desc">We examine slope, soil type, drainage patterns, and utility locations before designing anything.</p>
        </div>
        <div class="hs-step">
          <div class="hs-step-num">2</div>
          <h3 class="hs-step-title">Design &amp; Material Selection</h3>
          <p class="hs-step-desc">You choose materials and approve the layout — pavers, stone, concrete — with pricing confirmed before we begin.</p>
        </div>
        <div class="hs-step">
          <div class="hs-step-num">3</div>
          <h3 class="hs-step-title">Excavation &amp; Base Installation</h3>
          <p class="hs-step-desc">We excavate to the correct depth, compact gravel base in lifts, and set edge restraints before a single paver goes down.</p>
        </div>
        <div class="hs-step">
          <div class="hs-step-num">4</div>
          <h3 class="hs-step-title">Surface Installation &amp; Finishing</h3>
          <p class="hs-step-desc">Pavers or stone laid to pattern, joints filled, final compaction, and site cleanup — ready to use immediately.</p>
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
  <section class="hs-faq" data-animate="fade-up">
    <div class="container">
      <div class="hs-faq-header">
        <span class="hs-section-eyebrow">Common Questions</span>
        <h2>What Are Hardscaping Questions Edgerton Homeowners Ask?</h2>
        <p class="sub">Straight answers on cost, durability, and what makes Wisconsin hardscaping different from warmer climates.</p>
      </div>
      <div class="hs-faq-list">
        <details class="hs-faq-item">
          <summary>How long do hardscape patios last in Wisconsin?</summary>
          <div class="hs-faq-answer">
            <p>A properly installed paver or concrete patio in Wisconsin typically lasts 25–30 years or longer when the base is correctly prepared. The critical factor is base depth — a minimum of 6–8 inches of compacted gravel below the surface material to prevent frost heave from cracking or lifting pavers during Wisconsin's freeze-thaw cycles. Patios installed without adequate base preparation can begin failing within 3–5 years.</p>
          </div>
        </details>
        <details class="hs-faq-item">
          <summary>What base depth is needed for Wisconsin winters?</summary>
          <div class="hs-faq-answer">
            <p>In Rock County and southern Wisconsin, hardscape installations require a minimum of 6–8 inches of compacted Class 5 gravel beneath paver or stone surfaces. For retaining walls and areas with poor drainage, we extend base depth to 10–12 inches. This depth allows water to drain away from the surface material before it freezes and expands — the primary cause of frost heave damage in Wisconsin hardscaping projects.</p>
          </div>
        </details>
        <details class="hs-faq-item">
          <summary>Can you add a retaining wall to a sloped yard?</summary>
          <div class="hs-faq-answer">
            <p>Yes — retaining walls are one of the most effective ways to address sloped yards in Edgerton. We design walls to stabilize soil, prevent erosion, and create level usable space on grades that would otherwise be unusable or difficult to maintain. Proper drainage behind the wall — including gravel backfill and perforated drainage tile — is essential to prevent hydrostatic pressure from pushing the wall out over time.</p>
          </div>
        </details>
        <details class="hs-faq-item">
          <summary>How much does a patio cost in Edgerton, WI?</summary>
          <div class="hs-faq-answer">
            <p>Basic paver patios in Edgerton start at approximately $3,000 for a 200–250 sq ft installation using standard concrete pavers. Natural stone and premium paver materials increase material costs by 30–60%. Retaining walls are priced per linear foot based on wall height and material — typically $50–$120 per linear foot installed. R.A.H. Solutions provides detailed written estimates at no charge.</p>
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
  <section class="hs-closing" data-animate="fade-up">
    <div class="container">
      <span class="hs-section-eyebrow" style="justify-content:center;">Get Your Hardscape Estimate</span>
      <h2>How Do You Get a Free Site Visit with No Pressure?</h2>
      <p>Call R.A.H. Solutions to schedule a free on-site evaluation. We'll assess your yard, discuss material options, and deliver a written estimate within 48 hours.</p>
      <div class="hs-closing-actions">
        <a href="tel:6085015123" class="hs-btn-closing-phone">
          <i data-lucide="phone" aria-hidden="true" style="width:20px;height:20px;"></i>
          (608) 501-5123
        </a>
        <a href="/contact" class="hs-btn-closing-primary">
          <i data-lucide="clipboard-list" aria-hidden="true" style="width:20px;height:20px;"></i>
          Get a Free Estimate
        </a>
      </div>
    </div>
  </section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
