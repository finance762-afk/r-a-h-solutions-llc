<?php
/**
 * includes/cta-band.php — mid-page estimate band (about, FAQ, blog posts, area pages).
 * Compact form, same endpoint + attribution + required consent. Set $ctaBandId first.
 */
$cb = $ctaBandId ?? 'cta-band';
?>
<section class="cta-band texture-grain" id="estimate" aria-label="Request a free estimate">
  <span class="grain-layer" aria-hidden="true"></span>
  <div class="container">
    <div class="cta-band__grid">
      <div class="cta-band__copy">
        <span class="eyebrow-label">Free estimates</span>
        <h2><?php echo e($ctaBandHeading ?? 'Get a written price after an on-site look'); ?></h2>
        <p><?php echo e($ctaBandCopy ?? 'Tell RAH Solutions what the yard, lot or driveway needs. Robert looks at the property in person and sends a written estimate, with no pressure and no obligation.'); ?></p>
        <a class="link-call" href="tel:<?php echo e($phoneRaw); ?>"><?php echo icon('phone', 18); ?> or call <?php echo e($phone); ?></a>
      </div>
      <div class="cta-band__card">
        <form action="<?php echo e($formAction); ?>" method="POST" class="cta-band__form hero-form">
          <input type="hidden" name="_next" value="<?php echo e($siteUrl); ?>/thank-you/">
          <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
          <?php echo p1_attribution_fields($cb); ?>
          <input type="hidden" name="form_location" value="<?php echo e($cb); ?>">
          <input type="hidden" name="consent_version" value="v2.1">
          <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'] ?? '/'); ?>">
          <div class="form-row"><label class="sr-only" for="<?php echo $cb; ?>-name">Name</label><input id="<?php echo $cb; ?>-name" type="text" name="name" placeholder="Name" autocomplete="name" required></div>
          <div class="form-row"><label class="sr-only" for="<?php echo $cb; ?>-phone">Phone</label><input id="<?php echo $cb; ?>-phone" type="tel" name="phone" placeholder="Phone" autocomplete="tel" required></div>
          <div class="form-row"><label class="sr-only" for="<?php echo $cb; ?>-email">Email</label><input id="<?php echo $cb; ?>-email" type="email" name="email" placeholder="Email" autocomplete="email" required></div>
          <div class="form-row"><label class="sr-only" for="<?php echo $cb; ?>-service">Service needed</label>
            <select id="<?php echo $cb; ?>-service" name="service">
              <option value="">What do you need?</option>
              <?php foreach ($services as $cbSvc): ?>
              <option value="<?php echo e($cbSvc['name']); ?>"><?php echo e($cbSvc['name']); ?></option>
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
          <button type="submit" class="btn btn-accent btn-block">Get my free estimate</button>
        </form>
      </div>
    </div>
  </div>
</section>
