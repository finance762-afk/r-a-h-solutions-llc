<?php
/**
 * includes/hero-form.php — compact 3-field estimate card (desktop hero; mobile opens the
 * dialog instead). Same endpoint, attribution and required terms consent as every form.
 * Set $heroFormId (unique per page) and optionally $heroFormHeading before including.
 */
$hf = $heroFormId ?? 'hero';
?>
<aside class="hero-form-card" id="estimate-form">
  <h2><?php echo e($heroFormHeading ?? 'Get a free estimate'); ?></h2>
  <p class="hero-form-tagline">No obligation. Robert looks at the property, then sends a written price.</p>
  <form action="<?php echo e($formAction); ?>" method="POST" class="hero-form">
    <input type="hidden" name="_next" value="<?php echo e($siteUrl); ?>/thank-you/">
    <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
    <?php echo p1_attribution_fields($hf); ?>
    <input type="hidden" name="form_location" value="<?php echo e($hf); ?>">
    <input type="hidden" name="consent_version" value="v2.1">
    <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'] ?? '/'); ?>">
    <div class="form-row"><label class="sr-only" for="<?php echo $hf; ?>-name">Name</label><input id="<?php echo $hf; ?>-name" type="text" name="name" placeholder="Name" autocomplete="name" required></div>
    <div class="form-row"><label class="sr-only" for="<?php echo $hf; ?>-phone">Phone</label><input id="<?php echo $hf; ?>-phone" type="tel" name="phone" placeholder="Phone" autocomplete="tel" required></div>
    <div class="form-row"><label class="sr-only" for="<?php echo $hf; ?>-email">Email</label><input id="<?php echo $hf; ?>-email" type="email" name="email" placeholder="Email" autocomplete="email" required></div>
    <div class="form-row"><label class="sr-only" for="<?php echo $hf; ?>-service">Service</label>
      <select id="<?php echo $hf; ?>-service" name="service">
        <option value="">What do you need?</option>
        <?php foreach ($services as $hfSvc): ?>
        <option value="<?php echo e($hfSvc['name']); ?>"<?php echo (isset($heroFormService) && $heroFormService === $hfSvc['slug']) ? ' selected' : ''; ?>><?php echo e($hfSvc['name']); ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <label class="consent"><input type="checkbox" name="terms_accepted" value="yes" required><span>I agree to the <a href="/terms/" target="_blank" rel="noopener">Terms</a> and <a href="/privacy-policy/" target="_blank" rel="noopener">Privacy Policy</a> and consent to be contacted about my request. *</span></label>
    <!-- spam shield: signed render timestamp + JS interaction signal -->
    <?php $__ft_ts = (string) time(); ?>
    <input type="hidden" name="_ft" value="<?php echo $__ft_ts . '.' . hash_hmac('sha256', $__ft_ts, $leadsFormSecret); ?>">
    <input type="hidden" name="_js" value="" class="js-shield-field">
    <?php if (empty($GLOBALS['__js_shield'])) { $GLOBALS['__js_shield'] = 1; ?>
    <script>(function(){var d=document,f=function(){var i,e=d.querySelectorAll('.js-shield-field');for(i=0;i<e.length;i++)e[i].value='1';d.removeEventListener('pointerdown',f);d.removeEventListener('keydown',f);};d.addEventListener('pointerdown',f);d.addEventListener('keydown',f);})();</script>
    <?php } ?>
    <button type="submit" class="btn btn-primary btn-block">Get my free estimate</button>
  </form>
</aside>
