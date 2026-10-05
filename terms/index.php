<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$currentPage     = 'terms';
$pageType        = 'other';
$pageTitle       = 'Terms of Service | RAH Solutions LLC';
$pageDescription = 'Terms for using rahsolutionsllc.com and hiring RAH Solutions LLC in Edgerton, WI: free estimates, scheduling, weather delays, payment and Wisconsin law.';
$canonicalUrl    = $siteUrl . '/terms/';
$pageCss         = ['inner'];
$pageStyle       = <<<CSS
/* terms: numbered headings with an accent rule, highlighted 811 note */
.page-terms .legal-prose h2 { padding-top: .6rem; border-top: 1px solid var(--color-line); }
.page-terms .legal-prose h2:first-of-type { border-top: 0; padding-top: 0; }
.page-terms .legal-note { padding: 1rem 1.2rem; border-radius: var(--radius-lg); background: var(--color-card-tint-3); border-left: 4px solid var(--color-accent); }
.page-terms .legal-contact { list-style: none; padding: 0; display: grid; gap: .35rem; }
CSS;

$schemaNodes = [webPageNode(), breadcrumbNode([['Home', '/'], ['Terms of Service', '/terms/']])];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-terms">

<section class="hero hero--interior inner-hero" aria-label="Terms of Service">
  <div class="container">
    <?php echo breadcrumbs([['Home', '/'], ['Terms of Service', '/terms/']]); ?>
    <span class="eyebrow">Legal</span>
    <h1>Terms of Service</h1>
    <p class="legal-meta">Effective date: <?php echo date('F j, Y'); ?></p>
  </div>
</section>

<section class="section legal-wrap">
  <div class="container legal-layout">
    <article class="legal-prose">

      <h2 id="agreement">1. Agreement to These Terms</h2>
      <p>These Terms of Service (“Terms”) apply to your use of <a href="<?php echo e($siteUrl); ?>/"><?php echo e($domain); ?></a> (the “Site”) and to requests you make to <?php echo e($siteName); ?> (“RAH Solutions,” “we,” “us,” or “our”), a fence and gate contractor based in Edgerton, Wisconsin 53534. By using the Site or submitting a form, you agree to these Terms. If you do not agree, please do not use the Site.</p>

      <h2 id="use-of-site">2. Use of This Site</h2>
      <p>You may use the Site to learn about our services and to contact us. You agree not to:</p>
      <ul>
        <li>Submit false or misleading information, or information about another person without their permission</li>
        <li>Send automated, bulk or spam submissions</li>
        <li>Try to gain unauthorized access to the Site or the systems behind it, or interfere with its operation or security</li>
        <li>Copy or scrape Site content for commercial use without our written permission</li>
      </ul>
      <p>Submitting a form does not create a contract or guarantee that we will perform work for you.</p>

      <h2 id="estimates">3. Estimates and Quotes</h2>
      <p>Estimates from RAH Solutions are free. An estimate is based on the information you give us and the conditions visible at the site visit. It is not binding on either party until you accept a written proposal or agreement from us.</p>
      <p>Any general information about materials, timelines or costs on the Site is for education only and is not an offer. A price can change before acceptance if the scope changes, if hidden conditions are found (such as buried debris, roots, rock or old concrete footings), or if permit or code requirements differ from what was expected. Your written proposal or agreement controls if it conflicts with these Terms.</p>

      <h2 id="project-work">4. Project Work</h2>
      <ul>
        <li>Each job is governed by its written proposal or agreement, which describes the scope, materials, location and price.</li>
        <li>Work is performed or supervised by RAH Solutions LLC. If a specialty trade is needed for part of a project, we will tell you before work begins.</li>
        <li>Permit responsibilities are stated in your written proposal or agreement. Work follows applicable local codes.</li>
        <li>Changes you request after acceptance, or changes required by conditions found during the work, may change the price and schedule. We will discuss them with you before proceeding.</li>
      </ul>

      <h2 id="scheduling">5. Scheduling and Delays</h2>
      <p>Start and completion dates are estimates. Rain, saturated or frozen ground, snow and ice, temperatures too low for concrete or planting, material availability, permit timing, utility locates and site access can delay work. RAH Solutions will keep you informed and reschedule as soon as conditions allow. We are not responsible for delays caused by weather or other events outside our reasonable control.</p>

      <h2 id="customer-responsibilities">6. Your Responsibilities</h2>
      <ul>
        <li><strong>Property lines.</strong> You are responsible for identifying your property lines and the location of the work. If a line is uncertain, we recommend a survey before work begins.</li>
        <li><strong>HOA and neighbor approvals.</strong> You are responsible for obtaining any homeowners association, architectural committee or neighbor approvals your property requires.</li>
        <li><strong>Private utilities.</strong> Public underground utilities are located through Diggers Hotline (811), Wisconsin’s utility locating service, before digging. Those services do not mark private lines, so you are responsible for telling us about, or having marked, private lines such as irrigation, septic lines, private electric, gas or water lines, pet fencing and landscape lighting.</li>
        <li><strong>Access and site preparation.</strong> Please provide clear access to the work area, secure pets during work, and tell us about any known hazards. For snow removal, driveways and lots should be free of vehicles and obstacles that are not marked.</li>
      </ul>
      <p class="legal-note">RAH Solutions is not responsible for damage to unmarked private underground lines or for work placed according to property lines or locations you provided.</p>

      <h2 id="payment">7. Payment Terms</h2>
      <p>The accepted payment methods, the amount and timing of any deposit, and the final payment terms are stated in your written proposal, agreement or invoice. Recurring services such as mowing and snow removal are billed as described in your service agreement.</p>

      <h2 id="insurance">8. Seasonal and Recurring Services</h2>
      <p>Mowing, garden maintenance and snow removal are scheduled around weather and growing conditions, so visit days can shift. Snow removal is performed under the terms of your seasonal agreement, which sets out what is cleared and when service is triggered. Plowing and shoveling reduce but cannot eliminate snow and ice; you remain responsible for monitoring conditions on your property between visits.</p>

      <h2 id="warranty">9. Warranties</h2>
      <p>Any warranty on workmanship is the warranty stated in your written proposal or agreement, and no other warranty is implied by the Site. Manufacturer warranties on materials, where they exist, come from the manufacturer. The Site itself is provided “as is” and “as available,” without warranties of any kind, to the fullest extent permitted by law.</p>

      <h2 id="liability">10. Limitation of Liability</h2>
      <p>To the fullest extent permitted by Wisconsin law, RAH Solutions is not liable for indirect, incidental, special, consequential or punitive damages arising from your use of the Site. For work we perform, our total liability for any claim will not exceed the amount you paid for the specific work that gave rise to the claim. Nothing in these Terms limits liability that cannot be limited under applicable law.</p>

      <h2 id="communications">11. Communications Consent</h2>
      <p>When you submit a form, you agree that RAH Solutions may contact you about your request using the contact details you provide. Marketing emails and text messages require your separate, optional opt-in and are never a condition of purchase. See our <a href="/privacy-policy/">Privacy Policy</a> for details.</p>

      <h2 id="ip">12. Intellectual Property</h2>
      <p>The text, photographs, graphics and logo on the Site are owned by RAH Solutions or its licensors and are protected by copyright and trademark law. You may not copy, republish or use them commercially without our written permission.</p>

      <h2 id="links">13. Third-Party Links</h2>
      <p>The Site links to third-party websites, such as our Google Business Profile and Facebook page. We do not control and are not responsible for their content or practices.</p>

      <h2 id="governing-law">14. Governing Law and Disputes</h2>
      <p>These Terms are governed by the laws of the State of Wisconsin, without regard to conflict-of-laws rules. Any dispute relating to the Site or these Terms will be brought in the state or federal courts located in or serving Rock County, Wisconsin, and you consent to their jurisdiction.</p>

      <h2 id="changes">15. Changes to These Terms</h2>
      <p>We may update these Terms at any time. Changes take effect when posted on this page, and the “Last updated” date below reflects the latest revision. Continued use of the Site after a change means you accept the revised Terms.</p>

      <h2 id="contact">16. Contact Us</h2>
      <ul class="legal-contact">
        <li><strong><?php echo e($siteName); ?></strong>, Edgerton, Wisconsin 53534</li>
        <li>Phone: <a href="<?php echo telHref(); ?>"><?php echo e($phone); ?></a> (<?php echo e($hoursDisplay); ?>)</li>
        <li>Email: <a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a></li>
        <li>Website: <a href="<?php echo e($siteUrl); ?>/"><?php echo e($siteUrl); ?></a></li>
      </ul>

      <p class="legal-meta">Last updated: <?php echo date('F j, Y'); ?></p>
    </article>

    <aside class="legal-toc" aria-label="On this page">
      <ol>
        <li><a href="#agreement">Agreement</a></li>
        <li><a href="#use-of-site">Use of this site</a></li>
        <li><a href="#estimates">Estimates</a></li>
        <li><a href="#project-work">Project work</a></li>
        <li><a href="#scheduling">Scheduling and delays</a></li>
        <li><a href="#customer-responsibilities">Your responsibilities</a></li>
        <li><a href="#payment">Payment</a></li>
        <li><a href="#insurance">Seasonal services</a></li>
        <li><a href="#warranty">Warranties</a></li>
        <li><a href="#liability">Limitation of liability</a></li>
        <li><a href="#communications">Communications</a></li>
        <li><a href="#ip">Intellectual property</a></li>
        <li><a href="#links">Third-party links</a></li>
        <li><a href="#governing-law">Governing law</a></li>
        <li><a href="#changes">Changes</a></li>
        <li><a href="#contact">Contact</a></li>
      </ol>
    </aside>
  </div>
</section>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
