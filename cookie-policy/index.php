<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$currentPage     = 'cookie-policy';
$pageType        = 'other';
$pageTitle       = 'Cookie Policy | RAH Solutions LLC';
$pageDescription = 'The cookies and browser storage rahsolutionsllc.com uses, why RAH Solutions LLC of Edgerton, WI uses them, and how to block, delete or opt out of analytics.';
$canonicalUrl    = $siteUrl . '/cookie-policy/';
$pageCss         = ['inner'];
$pageStyle       = <<<CSS
/* cookie-policy: cookie inventory table */
.page-cookie-policy .cookie-table { width: 100%; border-collapse: collapse; margin: 1rem 0 1.5rem; font-size: .92rem; }
.page-cookie-policy .cookie-table th, .page-cookie-policy .cookie-table td { padding: .65rem .75rem; border-bottom: 1px solid var(--color-line); text-align: left; vertical-align: top; }
.page-cookie-policy .cookie-table th { background: var(--color-paper-2); font-family: var(--font-heading); color: var(--color-secondary); }
.page-cookie-policy .cookie-table code { font-size: .88em; color: var(--color-primary); }
.page-cookie-policy .table-scroll { overflow-x: auto; }
.page-cookie-policy .legal-contact { list-style: none; padding: 0; display: grid; gap: .35rem; }
CSS;

$schemaNodes = [webPageNode(), breadcrumbNode([['Home', '/'], ['Cookie Policy', '/cookie-policy/']])];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-cookie-policy">

<section class="hero hero--interior inner-hero" aria-label="Cookie Policy">
  <div class="container">
    <?php echo breadcrumbs([['Home', '/'], ['Cookie Policy', '/cookie-policy/']]); ?>
    <span class="eyebrow">Legal</span>
    <h1>Cookie Policy</h1>
    <p class="legal-meta">Effective date: <?php echo date('F j, Y'); ?></p>
  </div>
</section>

<section class="section legal-wrap">
  <div class="container legal-layout">
    <article class="legal-prose">

      <p>This Cookie Policy explains how <?php echo e($siteName); ?> (“RAH Solutions,” “we,” “us,” or “our”) uses cookies and similar technologies on <a href="<?php echo e($siteUrl); ?>/"><?php echo e($domain); ?></a> (the “Site”). It should be read together with our <a href="/privacy-policy/">Privacy Policy</a>.</p>

      <h2 id="what-are-cookies">1. What Are Cookies?</h2>
      <p>Cookies are small text files a website stores on your device. Similar technologies, such as your browser’s local storage, keep small pieces of information on your device in the same way. Sites use them to work properly, remember settings and understand how visitors use them.</p>

      <h2 id="cookies-we-use">2. Cookies and Storage We Use</h2>
      <p>The Site keeps its use of cookies small. This table lists what the Site uses today:</p>
      <div class="table-scroll">
        <table class="cookie-table">
          <thead>
            <tr><th scope="col">Name</th><th scope="col">Type</th><th scope="col">Purpose</th><th scope="col">Duration</th></tr>
          </thead>
          <tbody>
            <tr>
              <td><code>p1_ft</code></td>
              <td>First-party cookie (HttpOnly)</td>
              <td>Remembers how your visit began: the first page you landed on, the referring site, campaign tags (UTM parameters), a Google Ads click ID if present, a random session ID and your device type. If you send a request, this is included so we know which page or search led to it.</td>
              <td>30 days</td>
            </tr>
            <tr>
              <td><code>cookieBannerDismissed_v1</code></td>
              <td>Browser local storage</td>
              <td>Remembers that you dismissed the cookie notice so it does not appear on every page.</td>
              <td>Until you clear your browser’s site data</td>
            </tr>
          </tbody>
        </table>
      </div>

      <h3>Strictly necessary and functional</h3>
      <p>The cookie notice setting above is functional. Our forms work without cookies; they send your request directly to our lead system over an encrypted connection.</p>

      <h3>Attribution</h3>
      <p>The <code>p1_ft</code> cookie is set by the Site itself, not by an advertising network. It cannot be read by JavaScript or by other websites, and it is not used to track you across other sites. RAH Solutions uses it only to attribute inquiries to the pages and campaigns that produced them.</p>

      <h3 id="analytics">Analytics (Google Analytics)</h3>
      <p>The Site may use Google Analytics 4 to understand how visitors use it, such as which pages are viewed and how people arrive. When active, Google Analytics sets first-party cookies whose names begin with <code>_ga</code> (for example <code>_ga</code> and <code>_ga_&lt;ID&gt;</code>), which typically last up to two years and distinguish one visitor from another. Google processes this data under its own privacy terms.</p>

      <h3>Fonts and other third-party content</h3>
      <p>The Site’s fonts are hosted on our own server, so loading them sends no requests to Google Fonts. The Site does not embed maps or videos. The footer may show a “Verified Local Partner” badge image loaded from pageonepartner.com; loading it shares your IP address and browser details with that host, as any image request does, and the Site sets no cookies for it. Links to our Google Business Profile, Facebook page and Better Business Bureau profile take you to those sites, which set their own cookies under their own policies.</p>

      <h2 id="control">3. How to Control Cookies</h2>
      <p>Most browsers let you view, block and delete cookies and site data in their settings. You can block all cookies or only third-party cookies. The Site will still work if you block cookies, although we will not be able to tell which page first brought you to us. Instructions are available in the help pages for Chrome, Firefox, Safari and Edge.</p>

      <h2 id="ga-opt-out">4. Opt Out of Google Analytics</h2>
      <p>You can stop Google Analytics from collecting data about your visits on every website by installing the Google Analytics Opt-out Browser Add-on at <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">tools.google.com/dlpage/gaoptout</a>.</p>

      <h2 id="notice">5. Our Cookie Notice</h2>
      <p>The Site shows a short notice about cookies with a “Got it” button. Once you dismiss it, the setting described above keeps it hidden on later visits. To see the notice again, clear the Site’s data in your browser.</p>

      <h2 id="changes">6. Changes to This Policy</h2>
      <p>We may update this Cookie Policy when the Site’s technology changes. The “Last updated” date below shows the latest revision.</p>

      <h2 id="contact">7. Contact Us</h2>
      <ul class="legal-contact">
        <li><strong><?php echo e($siteName); ?></strong>, Edgerton, Wisconsin 53534</li>
        <li>Phone: <a href="<?php echo telHref(); ?>"><?php echo e($phone); ?></a> (<?php echo e($hoursDisplay); ?>)</li>
        <li>Email: <a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a></li>
      </ul>

      <p class="legal-meta">Last updated: <?php echo date('F j, Y'); ?></p>
    </article>

    <aside class="legal-toc" aria-label="On this page">
      <ol>
        <li><a href="#what-are-cookies">What are cookies?</a></li>
        <li><a href="#cookies-we-use">Cookies we use</a></li>
        <li><a href="#control">Controlling cookies</a></li>
        <li><a href="#ga-opt-out">Analytics opt-out</a></li>
        <li><a href="#notice">Cookie notice</a></li>
        <li><a href="#changes">Changes</a></li>
        <li><a href="#contact">Contact</a></li>
      </ol>
    </aside>
  </div>
</section>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
