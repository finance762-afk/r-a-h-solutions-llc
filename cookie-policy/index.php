<?php
// ============================================================
// Cookie Policy — R.A.H. Solutions, LLC
// ============================================================
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$companyName       = $siteName;
$companyEntityType = $entityType;
$companyState      = $stateOfFormation;
$companyEmail      = $contactEmail;
$companyPhone      = $contactPhone;
$companyAddress    = $businessAddress;
$lastUpdated       = 'April 24, 2026';

$pageTitle       = 'Cookie Policy | ' . $siteName;
$pageDescription = 'Cookie Policy for R.A.H. Solutions, LLC — what cookies we use (Google Analytics, Fonts, CDNs) and how to control them.';
$canonicalUrl    = $siteUrl . '/cookie-policy/';
// SEO: {"@context":"https://schema.org"} — schema and <link rel="canonical"> rendered via head.php
$currentPage     = 'legal';

$schemaMarkup = json_encode([
  '@context' => 'https://schema.org',
  '@graph'   => [
    [
      '@type'       => 'WebPage',
      'name'        => 'Cookie Policy',
      'url'         => $siteUrl . '/cookie-policy/',
      'description' => $pageDescription,
      'publisher'   => ['@type' => 'Organization', 'name' => $companyName],
    ],
    [
      '@type'           => 'BreadcrumbList',
      'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',          'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Cookie Policy', 'item' => $siteUrl . '/cookie-policy/'],
      ],
    ],
  ],
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

$heroPreload = $heroImageUrl;
include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
.legal-hero {
  min-height: 40vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background:
    linear-gradient(135deg, rgba(var(--color-primary-rgb), 0.85) 0%, rgba(15,30,45,0.80) 100%),
    url('https://db.pageone.cloud/storage/v1/object/public/client-assets/r-a-h-solutions-llc/photos/1776963874866-f077by-471177305_122202492170208320_1592970065814584229_n.jpg') center/cover no-repeat;
  color: #fff;
  text-align: center;
  padding: var(--space-3xl) var(--space-lg);
  position: relative;
  overflow: hidden;
}
.legal-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
}
.legal-hero h1 {
  font-family: var(--font-heading);
  font-size: clamp(2rem, 5vw, 3rem);
  font-weight: 800;
  letter-spacing: -0.02em;
  text-wrap: balance;
  position: relative;
  z-index: 1;
}
.legal-content { background: var(--color-bg); padding: var(--space-3xl) 0 var(--space-4xl); }
.content-narrow {
  max-width: 720px;
  margin: 0 auto;
  padding: 0 var(--space-xl);
  line-height: 1.7;
  color: var(--color-text);
}
.content-narrow h2 {
  font-family: var(--font-heading);
  font-size: clamp(1.2rem, 2.5vw, 1.5rem);
  font-weight: 700;
  color: var(--color-primary);
  margin-top: var(--space-3xl);
  padding-bottom: var(--space-sm);
  border-bottom: 1px solid rgba(var(--color-primary-rgb), 0.1);
}
.content-narrow h3 { font-family: var(--font-heading); font-size: 1.1rem; font-weight: 700; color: var(--color-primary); margin-top: var(--space-xl); }
.content-narrow p { margin-bottom: var(--space-md); }
.content-narrow ul { padding-left: var(--space-xl); margin-bottom: var(--space-md); }
.content-narrow li { margin-bottom: var(--space-xs); }
.content-narrow a { color: var(--color-accent); text-decoration: underline; }
.legal-updated { font-size: 0.9rem; color: var(--color-text-light); margin-bottom: var(--space-2xl); padding-bottom: var(--space-md); border-bottom: 1px solid rgba(var(--color-primary-rgb), 0.08); }
.cookie-table {
  width: 100%;
  border-collapse: collapse;
  margin: var(--space-md) 0 var(--space-xl);
  font-size: 0.9rem;
}
.cookie-table th, .cookie-table td {
  padding: var(--space-sm) var(--space-md);
  border: 1px solid rgba(var(--color-primary-rgb), 0.1);
  text-align: left;
  vertical-align: top;
}
.cookie-table th {
  background: rgba(var(--color-primary-rgb), 0.04);
  font-weight: 700;
  color: var(--color-primary);
}
@media (max-width: 600px) {
  .cookie-table { font-size: 0.8rem; }
  .cookie-table th, .cookie-table td { padding: var(--space-xs) var(--space-sm); }
}
</style>

  <nav aria-label="Breadcrumb" style="background:var(--color-bg-dark);padding:var(--space-sm) 0;">
    <div class="container">
      <ol style="display:flex;align-items:center;gap:var(--space-xs);list-style:none;flex-wrap:wrap;font-size:var(--font-size-sm);color:rgba(255,255,255,0.55);">
        <li><a href="/" style="color:rgba(255,255,255,0.7);">Home</a></li>
        <li aria-hidden="true" style="color:rgba(255,255,255,0.3);">›</li>
        <li style="color:var(--color-accent);font-weight:600;" aria-current="page">Cookie Policy</li>
      </ol>
    </div>
  </nav>

  <section class="legal-hero" aria-label="Cookie Policy">
    <h1>Cookie Policy</h1>
  </section>

  <section class="legal-content">
    <div class="content-narrow">
      <p class="legal-updated"><strong>Last Updated:</strong> <?php echo $lastUpdated; ?></p>

      <p><?php echo htmlspecialchars($companyName); ?> ("we," "us," or "our") uses cookies and similar technologies on our website. This Cookie Policy explains what cookies are, what cookies we use, and how you can control them.</p>

      <h2>What Are Cookies</h2>
      <p>Cookies are small text files stored on your device when you visit a website. They help websites remember your preferences and understand how you interact with the site.</p>

      <h2>Strictly Necessary Cookies</h2>
      <p>These cookies are essential for the website to function and cannot be disabled.</p>
      <table class="cookie-table">
        <thead>
          <tr><th>Cookie</th><th>Provider</th><th>Purpose</th><th>Duration</th></tr>
        </thead>
        <tbody>
          <tr><td>PHPSESSID</td><td>This website</td><td>PHP session management</td><td>Session</td></tr>
        </tbody>
      </table>

      <h2>Analytics Cookies</h2>
      <p>These cookies help us understand how visitors interact with our website by collecting anonymous usage data.</p>
      <table class="cookie-table">
        <thead>
          <tr><th>Cookie</th><th>Provider</th><th>Purpose</th><th>Duration</th></tr>
        </thead>
        <tbody>
          <tr><td>_ga</td><td>Google Analytics 4</td><td>Distinguishes unique users</td><td>2 years</td></tr>
          <tr><td>_ga_&lt;container-id&gt;</td><td>Google Analytics 4</td><td>Maintains session state</td><td>2 years</td></tr>
        </tbody>
      </table>
      <p>You can opt out of Google Analytics by installing the <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Opt-out Browser Add-on</a>.</p>

      <h2>Functional Cookies &amp; Third-Party Resources</h2>
      <p>The following third-party resources may set cookies or collect data to provide functionality on our website:</p>
      <table class="cookie-table">
        <thead>
          <tr><th>Resource</th><th>Provider</th><th>Purpose</th></tr>
        </thead>
        <tbody>
          <tr><td>Google Fonts (fonts.googleapis.com, fonts.gstatic.com)</td><td>Google LLC</td><td>Typography — loads web fonts for consistent display</td></tr>
          <tr><td>Google Maps (maps.googleapis.com)</td><td>Google LLC</td><td>Embedded map for location display (if applicable)</td></tr>
          <tr><td>Lucide Icons CDN (unpkg.com/lucide)</td><td>Unpkg / Lucide</td><td>Iconography — loads SVG icons</td></tr>
          <tr><td>Swiper CDN (cdn.jsdelivr.net/npm/swiper)</td><td>jsDelivr / Swiper</td><td>UI functionality — carousel/slider component</td></tr>
          <tr><td>VanillaTilt (cdnjs.cloudflare.com)</td><td>Cloudflare / VanillaTilt</td><td>UI functionality — card tilt effect</td></tr>
        </tbody>
      </table>

      <h2>How to Control Cookies</h2>
      <p>You can control and delete cookies through your browser settings. Most browsers allow you to:</p>
      <ul>
        <li>View what cookies are stored and delete them individually</li>
        <li>Block third-party cookies</li>
        <li>Block cookies from specific sites</li>
        <li>Block all cookies</li>
        <li>Delete all cookies when you close your browser</li>
      </ul>
      <p>Please note that blocking certain cookies may affect the functionality of our website.</p>

      <h2>Do Not Track / Global Privacy Control</h2>
      <p>We honor the Global Privacy Control (GPC) signal. When we detect a GPC signal from your browser, we treat it as a valid opt-out request for the sale or sharing of your personal information.</p>

      <h3 id="ccpa-cookie-rights">California Residents</h3>
      <p>For more information about your privacy rights under the CCPA/CPRA, including your right to opt out of the sale or sharing of personal information, please see our <a href="/privacy-policy/#ccpa-rights">Privacy Policy — California Residents section</a>.</p>

      <h2>Changes to This Cookie Policy</h2>
      <p>We may update this Cookie Policy from time to time. Changes will be posted on this page with an updated "Last Updated" date.</p>

      <h2>Contact Us</h2>
      <p>If you have questions about our use of cookies, contact us:</p>
      <ul>
        <li><strong><?php echo htmlspecialchars($companyName); ?></strong></li>
        <li>Email: <a href="mailto:<?php echo htmlspecialchars($companyEmail); ?>"><?php echo htmlspecialchars($companyEmail); ?></a></li>
        <li>Phone: <a href="tel:<?php echo htmlspecialchars($phone); ?>"><?php echo htmlspecialchars($companyPhone); ?></a></li>
        <li>Address: <?php echo htmlspecialchars($companyAddress); ?></li>
      </ul>
    </div>
  </section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
