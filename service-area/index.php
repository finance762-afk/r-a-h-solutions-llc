<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ============================================================
// R.A.H. Solutions, LLC — Service Area Page
// Landscaping Services in Edgerton & Surrounding Communities
// ============================================================

$pageTitle       = 'Landscaping Services in Edgerton, WI & Surrounding Communities';
$pageDescription = 'R.A.H. Solutions serves Edgerton, Stoughton, Janesville & Madison, WI with professional landscaping, lawn care, hardscaping & snow removal. Call (608) 501-5123.';
$canonicalUrl    = $canonicalBase . '/service-area';
$ogImage         = $clientImages[0]['url'];
$heroPreload     = $clientImages[4]['url'];
$currentPage     = 'service-area';
$cssVersion      = '2';

// ─── BreadcrumbList Schema ──────────────────────────────────────
$schemaMarkup = generateBreadcrumbSchema([
    ['name' => 'Home',         'url' => $canonicalBase],
    ['name' => 'Service Area', 'url' => $canonicalBase . '/service-area'],
]);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<!-- ═══════════════════════════════════════════════════════════════
     SERVICE AREA PAGE — Phase 6
     ═══════════════════════════════════════════════════════════════ -->

<style>
/* ─── Service Area Hero ──────────────────────────────────────── */
.sa-hero {
  position: relative;
  min-height: 55vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: var(--color-bg-dark);
  overflow: hidden;
  padding: var(--space-4xl) var(--space-lg);
}
.sa-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(var(--color-primary-rgb), 0.92) 0%, rgba(15,30,45,0.85) 100%);
  z-index: 1;
}
.sa-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url('data:image/svg+xml,<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><filter id="n"><feTurbulence type="fractalNoise" baseFrequency="0.65" numOctaves="3" stitchTiles="stitch"/></filter><rect width="100%" height="100%" filter="url(%23n)" opacity="0.04"/></svg>');
  z-index: 2;
  pointer-events: none;
}
.sa-hero__bg {
  position: absolute;
  inset: 0;
  z-index: 0;
}
.sa-hero__bg img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.sa-hero__content {
  position: relative;
  z-index: 3;
  text-align: center;
  max-width: 800px;
}
.sa-hero__breadcrumb {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: var(--space-sm);
  margin-bottom: var(--space-lg);
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.7);
}
.sa-hero__breadcrumb a {
  color: var(--color-accent);
  transition: color var(--transition-fast);
}
.sa-hero__breadcrumb a:hover { color: #fff; }
.sa-hero__breadcrumb .breadcrumb-sep { opacity: 0.5; }
.sa-hero h1 {
  color: #fff;
  margin-bottom: var(--space-md);
  font-size: clamp(2rem, 5vw, 3.2rem);
}
.sa-hero h1 .text-accent {
  font-family: var(--font-accent);
  color: var(--color-accent);
  font-weight: 400;
}
.sa-hero__subtitle {
  color: rgba(255,255,255,0.85);
  font-size: var(--font-size-lg);
  line-height: 1.6;
  max-width: 600px;
  margin-inline: auto;
}
.sa-hero__badges {
  display: flex;
  gap: var(--space-md);
  justify-content: center;
  flex-wrap: wrap;
  margin-top: var(--space-xl);
}
.sa-hero__badge {
  display: inline-flex;
  align-items: center;
  gap: var(--space-xs);
  background: rgba(255,255,255,0.1);
  backdrop-filter: blur(6px);
  border: 1px solid rgba(255,255,255,0.15);
  padding: var(--space-sm) var(--space-md);
  border-radius: var(--radius-lg);
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.9);
  font-weight: 600;
}
.sa-hero__badge i,
.sa-hero__badge svg { color: var(--color-accent); }

/* ─── Section Divider — Wave ─────────────────────────────────── */
.sa-divider--wave {
  display: block;
  width: 100%;
  height: auto;
  margin-top: -2px;
  line-height: 0;
}
.sa-divider--wave svg {
  display: block;
  width: 100%;
  height: auto;
}

/* ─── Answer Block / Intro ───────────────────────────────────── */
.sa-intro {
  padding: var(--section-pad);
  background: var(--color-bg);
}
.sa-intro__inner {
  max-width: 800px;
  margin-inline: auto;
  text-align: center;
}
.sa-intro .eyebrow-label {
  display: inline-block;
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.15em;
  color: var(--color-accent);
  margin-bottom: var(--space-md);
}
.sa-intro h2 {
  color: var(--color-primary);
  margin-bottom: var(--space-md);
}
.sa-intro .answer-block {
  background: var(--color-card-tint-3);
  border-left: 4px solid var(--color-accent);
  padding: var(--space-lg);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  margin-bottom: var(--space-xl);
  text-align: left;
}
.sa-intro .answer-block p {
  font-size: var(--font-size-lg);
  line-height: 1.7;
  color: var(--color-text);
}
.sa-intro .prose p {
  margin-bottom: var(--space-md);
}

/* ─── Area Cards Grid ────────────────────────────────────────── */
.sa-areas {
  padding: var(--section-pad);
  background: var(--color-bg-alt);
  position: relative;
}
.sa-areas .section-title {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.sa-areas .section-title h2 { color: var(--color-primary); }
.sa-areas .section-subtitle {
  font-family: var(--font-accent);
  font-size: clamp(1.1rem, 2vw, 1.4rem);
  color: var(--color-accent);
  margin-top: var(--space-sm);
}
.sa-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-xl);
}
@media (max-width: 767px) {
  .sa-grid { grid-template-columns: 1fr; }
}

.sa-card {
  background: #fff;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-md);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
  display: flex;
  flex-direction: column;
}
.sa-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-xl);
}
.sa-card--primary {
  border: 2px solid var(--color-accent);
}
.sa-card__image {
  position: relative;
  aspect-ratio: 16 / 9;
  overflow: hidden;
}
.sa-card__image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform var(--transition-slow);
}
.sa-card:hover .sa-card__image img {
  transform: scale(1.05);
}
.sa-card__label {
  position: absolute;
  top: var(--space-md);
  left: var(--space-md);
  background: var(--color-accent);
  color: var(--color-primary-dark);
  font-family: var(--font-heading);
  font-size: var(--font-size-xs);
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  padding: var(--space-xs) var(--space-md);
  border-radius: var(--radius-sm);
}
.sa-card__body {
  padding: var(--space-xl) var(--space-lg);
  flex: 1;
  display: flex;
  flex-direction: column;
}
.sa-card__body h3 {
  font-family: var(--font-heading);
  color: var(--color-primary);
  margin-bottom: var(--space-sm);
  font-size: clamp(1.3rem, 2.5vw, 1.6rem);
}
.sa-card__body h3 i,
.sa-card__body h3 svg {
  width: 20px;
  height: 20px;
  color: var(--color-accent);
  vertical-align: middle;
  margin-right: var(--space-xs);
}
.sa-card__desc {
  color: var(--color-text-light);
  line-height: 1.65;
  margin-bottom: var(--space-md);
  font-size: 0.95rem;
}
.sa-card__highlights {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-sm);
  margin-bottom: var(--space-lg);
  margin-top: auto;
}
.sa-card__tag {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: var(--font-size-xs);
  font-weight: 600;
  color: var(--color-secondary);
  background: var(--color-card-tint-1);
  padding: 4px 10px;
  border-radius: var(--radius-sm);
}
.sa-card__tag i,
.sa-card__tag svg {
  width: 12px;
  height: 12px;
  color: var(--color-accent);
}
.sa-card__cta {
  display: inline-flex;
  align-items: center;
  gap: var(--space-xs);
  color: var(--color-accent);
  font-family: var(--font-heading);
  font-weight: 600;
  font-size: 0.9rem;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  transition: color var(--transition-fast);
  border-top: 1px solid rgba(0,0,0,0.06);
  padding-top: var(--space-md);
}
.sa-card__cta::after {
  content: ' \2192';
  transition: transform var(--transition-fast);
}
.sa-card__cta:hover { color: var(--color-primary); }
.sa-card__cta:hover::after { transform: translateX(4px); }

/* ─── Section Divider — Angled ───────────────────────────────── */
.sa-divider--angle {
  display: block;
  width: 100%;
  line-height: 0;
  margin-top: -1px;
}
.sa-divider--angle svg {
  display: block;
  width: 100%;
  height: auto;
}

/* ─── Map Placeholder ────────────────────────────────────────── */
.sa-map {
  padding: var(--section-pad);
  background: var(--color-bg);
}
.sa-map__inner {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-3xl);
  align-items: center;
}
@media (max-width: 899px) {
  .sa-map__inner {
    grid-template-columns: 1fr;
    gap: var(--space-xl);
  }
}
.sa-map__text h2 {
  color: var(--color-primary);
  margin-bottom: var(--space-md);
}
.sa-map__text .section-subtitle {
  font-family: var(--font-accent);
  color: var(--color-accent);
  font-size: 1.2rem;
  margin-bottom: var(--space-lg);
}
.sa-map__text p {
  margin-bottom: var(--space-md);
  line-height: 1.7;
}
.sa-map__list {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-sm) var(--space-lg);
  margin-top: var(--space-lg);
}
.sa-map__list-item {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  font-weight: 600;
  color: var(--color-text);
  font-size: 0.95rem;
}
.sa-map__list-item i,
.sa-map__list-item svg {
  width: 16px;
  height: 16px;
  color: var(--color-accent);
  flex-shrink: 0;
}
.sa-map__frame {
  background: var(--color-bg-alt);
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
  aspect-ratio: 4 / 3;
  position: relative;
  border: 2px solid var(--color-card-tint-1);
}
.sa-map__frame iframe {
  width: 100%;
  height: 100%;
  border: 0;
}
.sa-map__frame-placeholder {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  gap: var(--space-md);
  height: 100%;
  color: var(--color-gray);
  text-align: center;
  padding: var(--space-xl);
}
.sa-map__frame-placeholder i,
.sa-map__frame-placeholder svg {
  width: 48px;
  height: 48px;
  color: var(--color-accent);
  opacity: 0.6;
}

/* ─── Services Summary Strip ─────────────────────────────────── */
.sa-services {
  padding: var(--section-pad);
  background: var(--color-bg-dark);
  position: relative;
}
.sa-services::before {
  content: '';
  position: absolute;
  inset: 0;
  background: url('data:image/svg+xml,<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><filter id="n"><feTurbulence type="fractalNoise" baseFrequency="0.65" numOctaves="3" stitchTiles="stitch"/></filter><rect width="100%" height="100%" filter="url(%23n)" opacity="0.03"/></svg>');
  pointer-events: none;
}
.sa-services .container { position: relative; z-index: 1; }
.sa-services .section-title {
  text-align: center;
  margin-bottom: var(--space-3xl);
}
.sa-services .section-title h2 { color: #fff; }
.sa-services .section-title .section-subtitle {
  font-family: var(--font-accent);
  color: var(--color-accent);
  font-size: 1.2rem;
}
.sa-services-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-md);
}
@media (max-width: 1023px) {
  .sa-services-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 599px) {
  .sa-services-grid { grid-template-columns: 1fr; }
}
.sa-service-pill {
  display: flex;
  align-items: center;
  gap: var(--space-sm);
  background: rgba(255,255,255,0.06);
  border: 1px solid rgba(255,255,255,0.1);
  border-radius: var(--radius-md);
  padding: var(--space-md) var(--space-lg);
  color: rgba(255,255,255,0.9);
  font-weight: 600;
  font-size: 0.9rem;
  transition: background var(--transition-fast), transform var(--transition-fast);
  text-decoration: none;
}
.sa-service-pill:hover {
  background: rgba(var(--color-accent-rgb), 0.15);
  transform: translateY(-2px);
}
.sa-service-pill i,
.sa-service-pill svg {
  width: 18px;
  height: 18px;
  color: var(--color-accent);
  flex-shrink: 0;
}
.sa-services__view-all {
  text-align: center;
  margin-top: var(--space-xl);
}

/* ─── CTA Banner ─────────────────────────────────────────────── */
.sa-cta {
  padding: var(--section-pad);
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  text-align: center;
  position: relative;
  overflow: hidden;
}
.sa-cta::before {
  content: '';
  position: absolute;
  top: -50%;
  right: -20%;
  width: 500px;
  height: 500px;
  background: radial-gradient(circle, rgba(var(--color-accent-rgb), 0.08) 0%, transparent 70%);
  pointer-events: none;
}
.sa-cta__inner {
  position: relative;
  z-index: 1;
  max-width: 700px;
  margin-inline: auto;
}
.sa-cta h2 {
  color: #fff;
  margin-bottom: var(--space-md);
}
.sa-cta p {
  color: rgba(255,255,255,0.85);
  font-size: var(--font-size-lg);
  line-height: 1.65;
  margin-bottom: var(--space-xl);
}
.sa-cta__buttons {
  display: flex;
  gap: var(--space-md);
  justify-content: center;
  flex-wrap: wrap;
}
.sa-cta__phone {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: rgba(255,255,255,0.1);
  border: 1px solid rgba(255,255,255,0.25);
  color: #fff;
  font-family: var(--font-heading);
  font-weight: 700;
  font-size: 0.85rem;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  padding: 14px var(--space-xl);
  border-radius: var(--radius-md);
  transition: background var(--transition-fast);
}
.sa-cta__phone:hover {
  background: rgba(255,255,255,0.2);
}
.sa-cta__phone i,
.sa-cta__phone svg {
  width: 18px;
  height: 18px;
}

/* ─── Floating Accents ───────────────────────────────────────── */
.sa-float {
  position: absolute;
  border-radius: 50%;
  background: var(--color-accent);
  opacity: 0.05;
  pointer-events: none;
}
.sa-float--1 {
  width: 300px;
  height: 300px;
  top: 10%;
  right: -100px;
  animation: saFloat 8s ease-in-out infinite;
}
.sa-float--2 {
  width: 200px;
  height: 200px;
  bottom: 15%;
  left: -60px;
  animation: saFloat 10s ease-in-out infinite reverse;
}
@keyframes saFloat {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-20px); }
}
@media (prefers-reduced-motion: reduce) {
  .sa-float { animation: none !important; }
}

/* ─── Stat Watermarks ────────────────────────────────────────── */
.sa-areas__watermark {
  position: absolute;
  top: var(--space-xl);
  right: var(--space-xl);
  font-family: var(--font-heading);
  font-size: clamp(6rem, 12vw, 10rem);
  font-weight: 900;
  color: rgba(var(--color-primary-rgb), 0.03);
  line-height: 1;
  pointer-events: none;
  user-select: none;
}

/* ─── Mobile adjustments ─────────────────────────────────────── */
@media (max-width: 767px) {
  .sa-hero { min-height: 45vh; padding: var(--space-3xl) var(--space-md); }
  .sa-intro,
  .sa-areas,
  .sa-map,
  .sa-services,
  .sa-cta { padding: var(--section-pad-mobile); }
  .sa-map__list { grid-template-columns: 1fr; }
  .sa-areas__watermark { display: none; }
}
</style>

<!-- ── Hero ──────────────────────────────────────────────────────── -->
<section class="sa-hero" aria-label="Service area overview">
  <div class="sa-hero__bg">
    <img
      src="<?php echo htmlspecialchars($clientImages[4]['url'], ENT_QUOTES, 'UTF-8'); ?>"
      alt="Landscape design and outdoor spaces in Edgerton, WI by R.A.H. Solutions"
      width="1920"
      height="1080"
      fetchpriority="high"
    >
  </div>
  <div class="sa-hero__content">
    <nav class="sa-hero__breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep" aria-hidden="true">/</span>
      <span aria-current="page">Service Area</span>
    </nav>
    <h1>Landscaping Services in <span class="text-accent">Edgerton</span> &amp; Surrounding Communities</h1>
    <p class="sa-hero__subtitle">
      Serving Southern Wisconsin with professional landscaping, hardscaping, lawn care, and snow removal within a 50-mile radius of Edgerton.
    </p>
    <div class="sa-hero__badges">
      <span class="sa-hero__badge">
        <i data-lucide="map-pin" style="width:16px;height:16px;" aria-hidden="true"></i>
        50-Mile Radius
      </span>
      <span class="sa-hero__badge">
        <i data-lucide="shield-check" style="width:16px;height:16px;" aria-hidden="true"></i>
        Licensed &amp; Insured
      </span>
      <span class="sa-hero__badge">
        <i data-lucide="calendar" style="width:16px;height:16px;" aria-hidden="true"></i>
        Est. <?php echo $yearEstablished; ?>
      </span>
    </div>
  </div>
</section>

<!-- Section Divider: Wave -->
<div class="sa-divider--wave" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="var(--color-bg)" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,40 C360,80 720,0 1080,40 C1260,60 1380,20 1440,30 L1440,60 L0,60 Z"/>
  </svg>
</div>

<!-- ── Intro / Answer Block ─────────────────────────────────────── -->
<section class="sa-intro" aria-label="Service area introduction">
  <div class="container">
    <div class="sa-intro__inner reveal-up">
      <span class="eyebrow-label">Where We Work</span>
      <h2>Where Does R.A.H. Solutions Provide Landscaping Services?</h2>

      <div class="answer-block">
        <p>
          R.A.H. Solutions, LLC is a licensed landscaping company based at 262 County Road W in Edgerton, Wisconsin, serving homeowners and businesses across Southern Wisconsin. Our primary service area covers Edgerton, Stoughton, Janesville, and Madison — roughly a 50-mile radius spanning Rock and Dane counties.
        </p>
      </div>

      <div class="prose-centered">
        <p>
          Whether you need weekly lawn maintenance in Edgerton, a patio installation in Stoughton, snow removal for your Janesville business, or landscape design at your Madison property — our crew travels to you. We know the clay-heavy soils along the Yahara River, the freeze-thaw cycles that crack concrete by February, and the microclimates that make plant selection tricky in this part of Wisconsin. That local knowledge drives every project we take on.
        </p>
        <p>Last Updated: <?php echo date('F Y'); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- ── Service Area Cards ───────────────────────────────────────── -->
<section class="sa-areas" aria-label="Communities we serve">
  <div class="sa-areas__watermark" aria-hidden="true">4</div>
  <div class="sa-float sa-float--1" aria-hidden="true"></div>
  <div class="sa-float sa-float--2" aria-hidden="true"></div>

  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label">Our Communities</span>
      <h2>Communities Across Southern Wisconsin</h2>
      <span class="section-subtitle">Locally rooted, regionally trusted</span>
    </div>

    <div class="sa-grid">

      <!-- ── Edgerton (Primary) ────────────────────────────────── -->
      <article class="sa-card sa-card--primary reveal-up reveal-delay-1" id="edgerton">
        <div class="sa-card__image">
          <img
            src="<?php echo htmlspecialchars($clientImages[3]['url'], ENT_QUOTES, 'UTF-8'); ?>"
            alt="Lawn maintenance services in Edgerton, Wisconsin"
            width="600"
            height="338"
            loading="lazy"
          >
          <span class="sa-card__label">Primary Service Area</span>
        </div>
        <div class="sa-card__body">
          <h3><i data-lucide="map-pin" style="width:20px;height:20px;" aria-hidden="true"></i> Edgerton, WI 53534</h3>
          <p class="sa-card__desc">
            Our home base. R.A.H. Solutions was founded right here in Edgerton, and we know every neighborhood — from the historic homes along West Fulton Street to the newer developments near Hemphill Park. The sandy-loam soils around Edgerton drain fast, which means irrigation timing and mulch depth matter for plant survival. We handle everything from spring bed prep at residences along Highway 51 to snow clearing for businesses on West Street. Same-day response for most Edgerton requests.
          </p>
          <div class="sa-card__highlights">
            <span class="sa-card__tag"><i data-lucide="check" aria-hidden="true"></i> Same-Day Service</span>
            <span class="sa-card__tag"><i data-lucide="check" aria-hidden="true"></i> Residential &amp; Commercial</span>
            <span class="sa-card__tag"><i data-lucide="check" aria-hidden="true"></i> 17 Services Available</span>
          </div>
          <a href="/services" class="sa-card__cta">View All Services in Edgerton</a>
        </div>
      </article>

      <!-- ── Stoughton ─────────────────────────────────────────── -->
      <article class="sa-card card-tint-2 reveal-up reveal-delay-2" id="stoughton">
        <div class="sa-card__image">
          <img
            src="<?php echo htmlspecialchars($clientImages[1]['url'], ENT_QUOTES, 'UTF-8'); ?>"
            alt="Landscape installation project in Stoughton, Wisconsin"
            width="600"
            height="338"
            loading="lazy"
          >
        </div>
        <div class="sa-card__body">
          <h3><i data-lucide="map-pin" style="width:20px;height:20px;" aria-hidden="true"></i> Stoughton, WI 53589</h3>
          <p class="sa-card__desc">
            Just 20 minutes north of our Edgerton base, Stoughton sits along the Yahara River where the soil shifts from sandy loam to heavier clay. That transition affects drainage, retaining wall engineering, and which turf varieties establish fastest. We serve residential properties in the Viking Village neighborhood, commercial lots along Highway 51, and rural acreages east of town toward Albion. Norwegian Heritage Park and the neighborhoods surrounding Stoughton High School are regular stops for our mowing crews.
          </p>
          <div class="sa-card__highlights">
            <span class="sa-card__tag"><i data-lucide="check" aria-hidden="true"></i> 20 Min from Base</span>
            <span class="sa-card__tag"><i data-lucide="check" aria-hidden="true"></i> Clay Soil Expertise</span>
            <span class="sa-card__tag"><i data-lucide="check" aria-hidden="true"></i> Full Service</span>
          </div>
          <a href="/contact" class="sa-card__cta">Get an Estimate in Stoughton</a>
        </div>
      </article>

      <!-- ── Janesville ────────────────────────────────────────── -->
      <article class="sa-card card-tint-1 reveal-left reveal-delay-1" id="janesville">
        <div class="sa-card__image">
          <img
            src="<?php echo htmlspecialchars($clientImages[2]['url'], ENT_QUOTES, 'UTF-8'); ?>"
            alt="Hardscaping and patio installation in Janesville, WI"
            width="600"
            height="338"
            loading="lazy"
          >
        </div>
        <div class="sa-card__body">
          <h3><i data-lucide="map-pin" style="width:20px;height:20px;" aria-hidden="true"></i> Janesville, WI 53545</h3>
          <p class="sa-card__desc">
            Janesville is Rock County's largest city — about 15 miles south on I-90 from Edgerton. We work across the west side near Mercy Hospital, the downtown corridor along Milwaukee Street, and the growing subdivisions east of the Rock River. Commercial properties along Milton Avenue and Deerfield Drive are regular clients for lawn maintenance and seasonal cleanup. The river-bottom soils in Janesville's flood-adjacent neighborhoods need specific grading and drainage approaches we've handled dozens of times.
          </p>
          <div class="sa-card__highlights">
            <span class="sa-card__tag"><i data-lucide="check" aria-hidden="true"></i> 15 Min from Base</span>
            <span class="sa-card__tag"><i data-lucide="check" aria-hidden="true"></i> Commercial Grounds</span>
            <span class="sa-card__tag"><i data-lucide="check" aria-hidden="true"></i> Snow Removal</span>
          </div>
          <a href="/contact" class="sa-card__cta">Get an Estimate in Janesville</a>
        </div>
      </article>

      <!-- ── Madison ───────────────────────────────────────────── -->
      <article class="sa-card card-tint-3 reveal-right reveal-delay-2" id="madison">
        <div class="sa-card__image">
          <img
            src="<?php echo htmlspecialchars($clientImages[20]['url'], ENT_QUOTES, 'UTF-8'); ?>"
            alt="Landscape installation and yard transformation in Madison, WI"
            width="600"
            height="338"
            loading="lazy"
          >
        </div>
        <div class="sa-card__body">
          <h3><i data-lucide="map-pin" style="width:20px;height:20px;" aria-hidden="true"></i> Madison, WI 53701</h3>
          <p class="sa-card__desc">
            Wisconsin's capital city and the largest metro in our service area, about 35 miles north. We focus primarily on the south side and suburban corridors — Fitchburg, Oregon, McFarland, and the neighborhoods around the Beltline Highway. Madison properties often have mature tree canopies that create shade-lawn challenges, plus strict city ordinances on stormwater runoff that affect hardscaping design. Our excavation and drainage work meets Dane County requirements for impervious surface management.
          </p>
          <div class="sa-card__highlights">
            <span class="sa-card__tag"><i data-lucide="check" aria-hidden="true"></i> South Madison Focus</span>
            <span class="sa-card__tag"><i data-lucide="check" aria-hidden="true"></i> Dane County Compliant</span>
            <span class="sa-card__tag"><i data-lucide="check" aria-hidden="true"></i> Excavation &amp; Drainage</span>
          </div>
          <a href="/contact" class="sa-card__cta">Get an Estimate in Madison</a>
        </div>
      </article>

    </div><!-- /.sa-grid -->
  </div>
</section>

<!-- Section Divider: Angle -->
<div class="sa-divider--angle" aria-hidden="true">
  <svg viewBox="0 0 1440 50" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <polygon fill="var(--color-bg-alt)" points="0,0 1440,50 0,50"/>
    <polygon fill="var(--color-bg)" points="0,50 1440,0 1440,50"/>
  </svg>
</div>

<!-- ── Map Section ──────────────────────────────────────────────── -->
<section class="sa-map" aria-label="Service area map">
  <div class="container">
    <div class="sa-map__inner">

      <div class="sa-map__text reveal-left">
        <span class="eyebrow-label">Coverage Area</span>
        <h2>50-Mile Service Radius From Edgerton</h2>
        <span class="section-subtitle">Rock County &amp; Dane County</span>
        <p>
          Our crews are on the road daily across Southern Wisconsin. Based on County Road W in Edgerton, we reach most of Rock County and southern Dane County within 30 minutes — which means less travel overhead and faster response when weather or timing matters.
        </p>
        <p>
          Need landscaping services near you in a community not listed? If you're within 50 miles of Edgerton, chances are we can help. Call us to confirm coverage for your property.
        </p>

        <div class="sa-map__list">
          <?php foreach ($serviceAreas as $area): ?>
          <div class="sa-map__list-item">
            <i data-lucide="check-circle" style="width:16px;height:16px;" aria-hidden="true"></i>
            <?php echo htmlspecialchars($area['city'], ENT_QUOTES, 'UTF-8'); ?>, <?php echo htmlspecialchars($area['state'], ENT_QUOTES, 'UTF-8'); ?>
          </div>
          <?php endforeach; ?>
          <div class="sa-map__list-item">
            <i data-lucide="check-circle" style="width:16px;height:16px;" aria-hidden="true"></i>
            Fitchburg, WI
          </div>
          <div class="sa-map__list-item">
            <i data-lucide="check-circle" style="width:16px;height:16px;" aria-hidden="true"></i>
            Milton, WI
          </div>
          <div class="sa-map__list-item">
            <i data-lucide="check-circle" style="width:16px;height:16px;" aria-hidden="true"></i>
            Oregon, WI
          </div>
          <div class="sa-map__list-item">
            <i data-lucide="check-circle" style="width:16px;height:16px;" aria-hidden="true"></i>
            McFarland, WI
          </div>
        </div>
      </div>

      <div class="sa-map__frame reveal-right">
        <div class="sa-map__frame-placeholder">
          <i data-lucide="map" aria-hidden="true"></i>
          <p><strong>Interactive Map</strong></p>
          <p>Google Maps embed will be added post-launch with the client's verified business listing.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ── Services Available in All Areas ──────────────────────────── -->
<section class="sa-services" aria-label="Services available across our coverage area">
  <div class="container">
    <div class="section-title reveal-up">
      <span class="eyebrow-label" style="color:var(--color-accent);">Full-Service Coverage</span>
      <h2>Every Service, Every Community</h2>
      <span class="section-subtitle">All 17 services available across our entire coverage area</span>
    </div>

    <div class="sa-services-grid">
      <?php
      $serviceIcons = [
        'lawn-maintenance'     => 'scissors',
        'landscape-installation' => 'sprout',
        'hardscaping-services' => 'layers',
        'concrete-services'    => 'square',
        'shrub-trimming'       => 'leaf',
        'garden-maintenance'   => 'flower-2',
        'mulching-services'    => 'layers',
        'sod-installation'     => 'grid-2x2',
        'lawn-restoration'     => 'refresh-ccw',
        'spring-yard-cleanup'  => 'sun',
        'fall-yard-cleanup'    => 'cloud',
        'snow-removal'         => 'snowflake',
        'excavating-services'  => 'shovel',
        'residential-lawn-care'=> 'home',
        'commercial-lawn-care' => 'building-2',
      ];
      foreach ($services as $svc):
        $icon = $serviceIcons[$svc['slug']] ?? 'check-circle';
      ?>
      <a href="/services/<?php echo htmlspecialchars($svc['slug'], ENT_QUOTES, 'UTF-8'); ?>" class="sa-service-pill reveal-scale">
        <i data-lucide="<?php echo $icon; ?>" aria-hidden="true"></i>
        <?php echo htmlspecialchars($svc['name'], ENT_QUOTES, 'UTF-8'); ?>
      </a>
      <?php endforeach; ?>
    </div>

    <div class="sa-services__view-all reveal-up">
      <a href="/services" class="btn-primary" style="margin-top:var(--space-xl);">View All Services</a>
    </div>
  </div>
</section>

<!-- ── CTA Banner ───────────────────────────────────────────────── -->
<section class="sa-cta" aria-label="Request a free estimate">
  <div class="container">
    <div class="sa-cta__inner reveal-up">
      <h2>Ready to Transform Your Property?</h2>
      <p>
        Whether you're in Edgerton, Stoughton, Janesville, or Madison — R.A.H. Solutions delivers the same dedicated crew, the same attention to detail, and the same commitment to your property. Free estimates, no obligation.
      </p>
      <div class="sa-cta__buttons">
        <a href="/contact" class="btn-primary">Get Your Free Estimate</a>
        <a href="tel:<?php echo $phone; ?>" class="sa-cta__phone">
          <i data-lucide="phone" style="width:18px;height:18px;" aria-hidden="true"></i>
          <?php echo htmlspecialchars($phoneFormatted, ENT_QUOTES, 'UTF-8'); ?>
        </a>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
