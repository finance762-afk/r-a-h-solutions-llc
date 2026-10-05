<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$currentPage     = 'privacy-policy';
$pageType        = 'other';
$pageTitle       = 'Privacy Policy | RAH Solutions LLC';
$pageDescription = 'How RAH Solutions LLC in Edgerton, WI collects, uses and protects information sent through rahsolutionsllc.com, including text consent and privacy rights.';
$canonicalUrl    = $siteUrl . '/privacy-policy/';
$pageCss         = ['inner'];
$pageStyle       = <<<CSS
/* privacy-policy: callout for the no-sale statement, compact data table */
.page-privacy-policy .legal-callout { padding: 1rem 1.2rem; border-radius: var(--radius-lg); background: var(--color-card-tint-1); border-left: 4px solid var(--color-primary); }
.page-privacy-policy .legal-prose h3 { font-size: 1.08rem; color: var(--color-secondary); }
.page-privacy-policy .legal-contact { list-style: none; padding: 0; display: grid; gap: .35rem; }
.page-privacy-policy #ccpa-rights { scroll-margin-top: calc(var(--nav-height) + 1rem); }
CSS;

$schemaNodes = [webPageNode(), breadcrumbNode([['Home', '/'], ['Privacy Policy', '/privacy-policy/']])];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>
<div class="page-privacy-policy">

<section class="hero hero--interior inner-hero" aria-label="Privacy Policy">
  <div class="container">
    <?php echo breadcrumbs([['Home', '/'], ['Privacy Policy', '/privacy-policy/']]); ?>
    <span class="eyebrow">Legal</span>
    <h1>Privacy Policy</h1>
    <p class="legal-meta">Effective date: <?php echo date('F j, Y'); ?></p>
  </div>
</section>

<section class="section legal-wrap">
  <div class="container legal-layout">
    <article class="legal-prose">

      <p>This Privacy Policy explains how <?php echo e($siteName); ?> (“RAH Solutions,” “we,” “us,” or “our”), a Wisconsin limited liability company and landscaper based in Edgerton, Wisconsin, collects, uses, shares and protects information when you visit <a href="<?php echo e($siteUrl); ?>/"><?php echo e($domain); ?></a> (the “Site”) or send us a request through it. By using the Site or submitting a form, you agree to the practices described here.</p>

      <h2 id="information-we-collect">1. Information We Collect</h2>
      <h3>Information you give us</h3>
      <p>When you request an estimate or contact us through a form on the Site, we collect what you enter:</p>
      <ul>
        <li>Your name, phone number and email address</li>
        <li>The service you need and the town or city where the work is</li>
        <li>Any details you include in your message</li>
        <li>Your consent choices: optional email updates, optional text messages, and your acceptance of our Privacy Policy and Terms of Service</li>
      </ul>
      <p>You may also give us information by phone, by email or in person during an on-site estimate, such as your property address and project details.</p>

      <h3>Information sent automatically with a form</h3>
      <p>Each form submission also includes hidden technical fields that help us understand how you found us:</p>
      <ul>
        <li>The page you submitted the form from and the page where your visit began</li>
        <li>The referring website, if any</li>
        <li>Campaign tags in the link you followed (UTM parameters) and a Google Ads click ID (gclid), if present</li>
        <li>A random session identifier and your device type (desktop, tablet or mobile)</li>
        <li>The version of the consent language shown to you and the page it appeared on</li>
      </ul>
      <p>When a form is received, our lead system also records your IP address, browser user agent and the date and time of the submission. We use these to block spam and fraudulent submissions and to keep a record of the consent you gave.</p>

      <h3>Cookies and similar technologies</h3>
      <p>The Site sets one first-party cookie that remembers how your visit started, and stores a small setting in your browser when you dismiss the cookie notice. The Site may also use Google Analytics. See our <a href="/cookie-policy/">Cookie Policy</a> for details.</p>

      <h2 id="how-we-use">2. How We Use Your Information</h2>
      <ul>
        <li>To respond to your inquiry, schedule a free estimate and provide the lawn, landscaping, concrete, excavating or snow removal work you request</li>
        <li>To contact you about your project by phone, text or email, according to the consent you gave</li>
        <li>To prepare written estimates and service agreements</li>
        <li>To learn which pages, searches and campaigns bring in inquiries, so we can improve the Site and our advertising</li>
        <li>To keep records of our communications and of your consent choices</li>
        <li>To protect the Site against spam and abuse, and to meet legal, tax and recordkeeping obligations</li>
      </ul>
      <p>Our lead system uses an automated step to help size and prioritize incoming inquiries so the right requests get a prompt reply. This step does not make decisions that produce legal or similarly significant effects about you.</p>

      <h2 id="sms">3. Text Messages (SMS)</h2>
      <p>Text messages are optional. If you check the SMS box on one of our forms, you agree to receive text messages from RAH Solutions at the phone number you provided. Messages may include appointment reminders, service updates and occasional offers.</p>
      <ul>
        <li><strong>Consent is not a condition of purchase.</strong> You can hire RAH Solutions without agreeing to texts.</li>
        <li>Message frequency varies.</li>
        <li>Message and data rates may apply.</li>
        <li>Reply <strong>STOP</strong> at any time to unsubscribe, or <strong>HELP</strong> for help. You can also opt out by calling <?php echo e($phone); ?> or emailing <?php echo e($email); ?>.</li>
        <li>Carriers are not liable for delayed or undelivered messages.</li>
      </ul>
      <p>Mobile phone numbers and text message opt-in information are never shared with third parties for their own marketing purposes.</p>

      <h2 id="email">4. Email</h2>
      <p>If you check the email box, we may send you emails about your inquiry, our services and occasional news or offers. You can unsubscribe at any time with the link in any marketing email or by emailing <?php echo e($email); ?>. We will still send messages needed to answer your request.</p>

      <h2 id="sharing">5. How We Share Information</h2>
      <p class="legal-callout"><strong>We do not sell your personal information,</strong> and we do not share it for cross-context behavioral advertising.</p>
      <p>We share information only as needed to run our business:</p>
      <ul>
        <li><strong>Our web and marketing provider.</strong> Page One Insights, LLC hosts the Site and operates the lead system that receives, stores and processes form submissions on our behalf, then emails each request to RAH Solutions. It acts as our service provider (processor) and may use the information only to provide services to us.</li>
        <li><strong>Other service providers.</strong> Companies that provide hosting, email delivery and, if enabled, website analytics, each limited to providing those services.</li>
        <li><strong>Your insurance company or adjuster,</strong> when you ask us to prepare estimates or documentation for a claim.</li>
        <li><strong>Legal requirements.</strong> When required by law, subpoena or court order, or to protect our rights, safety or property.</li>
        <li><strong>Business transfers.</strong> If the business is sold or reorganized, information may transfer to the new owner under this policy.</li>
      </ul>
      <p>The Site footer may show a “Verified Local Partner” badge image loaded from pageonepartner.com. Loading that image sends your IP address and browser details to that host, as any image request does. The Site does not set cookies for it.</p>

      <h2 id="your-rights">6. Your Privacy Rights</h2>
      <h3 id="state-rights">Wisconsin residents</h3>
      <p>RAH Solutions works in southern Wisconsin. You may ask us at any time to tell you what personal information we hold about you, to correct it, or to delete it, and we will honor reasonable requests.</p>

      <h3 id="ccpa-rights">California residents (CCPA/CPRA) and Do Not Sell or Share</h3>
      <p>If you are a California resident, the California Consumer Privacy Act as amended by the California Privacy Rights Act gives you these rights, to the extent the law applies to us:</p>
      <ul>
        <li><strong>Right to know</strong> the categories and specific pieces of personal information we collect, use and disclose</li>
        <li><strong>Right to delete</strong> personal information we collected from you, subject to legal exceptions</li>
        <li><strong>Right to correct</strong> inaccurate personal information</li>
        <li><strong>Right to opt out of the sale or sharing</strong> of personal information. We do not sell or share personal information, but you may still send us an opt-out request and we will record it and confirm that it has been honored.</li>
        <li><strong>Right to limit</strong> the use of sensitive personal information. We do not ask for sensitive personal information through the Site.</li>
        <li><strong>Right to non-discrimination.</strong> We will not deny service or charge a different price because you exercised these rights.</li>
      </ul>

      <h3>Residents of other states</h3>
      <p>Residents of states with consumer privacy laws, including Colorado, Connecticut, Virginia, Utah, Texas, Oregon and others, may have similar rights to access, correct, delete or obtain a copy of their personal information and to opt out of targeted advertising or sale. Where those laws apply to us, we will honor these requests, and you may appeal a decision by replying to our response.</p>

      <h3>How to make a request</h3>
      <p>Email <a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a> or call <a href="<?php echo telHref(); ?>"><?php echo e($phone); ?></a>. We may need to confirm your identity before acting on a request, and we aim to respond within 45 days. You may use an authorized agent, who must show written permission to act for you.</p>

      <h2 id="retention">7. Data Retention</h2>
      <p>We keep inquiry, estimate and customer records for as long as needed to serve you and to meet legal, tax, insurance and recordkeeping obligations. Consent records are kept as long as needed to show the consent you gave. After that, we delete or de-identify the information.</p>

      <h2 id="security">8. Data Security</h2>
      <p>The Site uses HTTPS encryption, and form submissions travel over encrypted connections to our lead system. We use reasonable administrative and technical safeguards to protect the information we hold. No method of transmission or storage is completely secure, so we cannot guarantee absolute security.</p>

      <h2 id="children">9. Children’s Privacy</h2>
      <p>The Site is not directed to children under 13, and we do not knowingly collect personal information from them. If you believe a child has sent us information, contact us and we will delete it.</p>

      <h2 id="third-party-links">10. Third-Party Links</h2>
      <p>The Site links to outside websites such as our Google Business Profile and Facebook page. Those sites have their own privacy practices, and we are not responsible for them.</p>

      <h2 id="changes">11. Changes to This Policy</h2>
      <p>We may update this Privacy Policy from time to time. The “Last updated” date below shows the latest revision, and material changes will be posted on this page.</p>

      <h2 id="contact">12. Contact Us</h2>
      <p>Questions about this policy or your information:</p>
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
        <li><a href="#information-we-collect">Information we collect</a></li>
        <li><a href="#how-we-use">How we use it</a></li>
        <li><a href="#sms">Text messages</a></li>
        <li><a href="#email">Email</a></li>
        <li><a href="#sharing">Sharing</a></li>
        <li><a href="#your-rights">Your privacy rights</a></li>
        <li><a href="#retention">Retention</a></li>
        <li><a href="#security">Security</a></li>
        <li><a href="#children">Children’s privacy</a></li>
        <li><a href="#third-party-links">Third-party links</a></li>
        <li><a href="#changes">Changes</a></li>
        <li><a href="#contact">Contact</a></li>
      </ol>
    </aside>
  </div>
</section>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
