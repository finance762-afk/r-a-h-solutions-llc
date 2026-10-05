<?php
/**
 * includes/lead-form.php — the FULL contact form (contact-form-standard.md, TCPA 2025/2026:
 * three separate, unbundled, unchecked consent boxes). Used by the estimate dialog, the
 * contact page and the homepage estimate section. Set $formId (unique per page) first.
 */
$lf = $formId ?? 'form';
$lfSubmit = $formSubmitLabel ?? 'Send my request';
?>
<form action="<?php echo e($formAction); ?>" method="POST" class="lead-form">
  <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
  <input type="hidden" name="_next" value="<?php echo e($siteUrl); ?>/thank-you/">
  <?php echo p1_attribution_fields($lf); ?>
  <input type="hidden" name="form_location" value="<?php echo e($lf); ?>">
  <input type="hidden" name="consent_version" value="v2.1">
  <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'] ?? '/'); ?>">
  <div class="form-grid">
    <div class="field"><label for="<?php echo $lf; ?>-name">Your name</label><input id="<?php echo $lf; ?>-name" type="text" name="name" autocomplete="name" required></div>
    <div class="field"><label for="<?php echo $lf; ?>-phone">Phone</label><input id="<?php echo $lf; ?>-phone" type="tel" name="phone" autocomplete="tel" required></div>
    <div class="field full"><label for="<?php echo $lf; ?>-email">Email</label><input id="<?php echo $lf; ?>-email" type="email" name="email" autocomplete="email" required></div>
    <div class="field"><label for="<?php echo $lf; ?>-service">Service needed</label>
      <select id="<?php echo $lf; ?>-service" name="service">
        <option value="">Select a service</option>
        <?php foreach ($services as $lfSvc): ?>
        <option value="<?php echo e($lfSvc['name']); ?>"><?php echo e($lfSvc['name']); ?></option>
        <?php endforeach; ?>
        <option value="Other">Something else</option>
      </select>
    </div>
    <div class="field"><label for="<?php echo $lf; ?>-city">Town or city</label><input id="<?php echo $lf; ?>-city" type="text" name="address_city" autocomplete="address-level2"></div>
    <div class="field full"><label for="<?php echo $lf; ?>-message">About the job (yard size, what you want done, timing…)</label><textarea id="<?php echo $lf; ?>-message" name="message" rows="3"></textarea></div>
  </div>

  <fieldset class="form-consent-fieldset">
    <legend class="form-consent-legend">Communication consent</legend>
    <label class="form-consent-item">
      <input type="checkbox" name="email_opt_in" value="yes" class="consent-checkbox">
      <span class="consent-label"><strong>Email updates (optional):</strong> I agree to receive emails from <?php echo e($siteName); ?> about my inquiry, services, promotions, and news. I understand I can unsubscribe anytime via the link in any email or by emailing <?php echo e($email); ?>. Message frequency varies.</span>
    </label>
    <label class="form-consent-item">
      <input type="checkbox" name="sms_opt_in" value="yes" class="consent-checkbox">
      <span class="consent-label"><strong>SMS/Text messages (optional):</strong> I agree to receive text messages from <?php echo e($siteName); ?> at the phone number I provided. Message types may include appointment reminders, service updates, and promotional offers. Message frequency varies. Message and data rates may apply. Reply STOP to unsubscribe, HELP for help. <strong>Consent is not a condition of purchase.</strong></span>
    </label>
    <label class="form-consent-item form-consent-required">
      <input type="checkbox" name="terms_accepted" value="yes" class="consent-checkbox" required>
      <span class="consent-label">I have read and agree to the <a href="/privacy-policy/" target="_blank" rel="noopener">Privacy Policy</a> and <a href="/terms/" target="_blank" rel="noopener">Terms of Service</a>. <span class="required-star">*</span></span>
    </label>
  </fieldset>

  <!-- spam shield: signed render timestamp + JS interaction signal -->
  <?php $__ft_ts = (string) time(); ?>
  <input type="hidden" name="_ft" value="<?php echo $__ft_ts . '.' . hash_hmac('sha256', $__ft_ts, $leadsFormSecret); ?>">
  <input type="hidden" name="_js" value="" class="js-shield-field">
  <?php if (empty($GLOBALS['__js_shield'])) { $GLOBALS['__js_shield'] = 1; ?>
  <script>(function(){var d=document,f=function(){var i,e=d.querySelectorAll('.js-shield-field');for(i=0;i<e.length;i++)e[i].value='1';d.removeEventListener('pointerdown',f);d.removeEventListener('keydown',f);};d.addEventListener('pointerdown',f);d.addEventListener('keydown',f);})();</script>
  <?php } ?>
  <button type="submit" class="btn btn-primary btn-block"><?php echo e($lfSubmit); ?></button>
</form>
