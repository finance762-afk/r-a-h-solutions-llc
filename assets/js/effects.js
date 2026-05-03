/* ================================================================
   R.A.H. Solutions, LLC — effects.js
   Ripple clicks + VanillaTilt + Magnetic CTA
   ================================================================ */
(function () {
  'use strict';

  /* ── 1. Inject ripple keyframe once ──────────────────────── */
  if (!document.querySelector('#rah-ripple-style')) {
    var style = document.createElement('style');
    style.id  = 'rah-ripple-style';
    style.textContent = [
      '@keyframes rah-ripple-expand {',
      '  to { transform: scale(1); opacity: 0; }',
      '}'
    ].join('');
    document.head.appendChild(style);
  }

  /* ── 2. Ripple Effect on btn-primary / btn-secondary ─────── */
  function createRipple(e) {
    var btn      = e.currentTarget;
    var existing = btn.querySelector('.rah-ripple');
    if (existing) existing.remove();

    var rect = btn.getBoundingClientRect();
    var size = Math.max(rect.width, rect.height) * 2;
    var x    = e.clientX - rect.left  - size / 2;
    var y    = e.clientY - rect.top   - size / 2;

    var ripple = document.createElement('span');
    ripple.className = 'rah-ripple';
    ripple.style.cssText = [
      'position:absolute',
      'width:'      + size + 'px',
      'height:'     + size + 'px',
      'left:'       + x    + 'px',
      'top:'        + y    + 'px',
      'background:rgba(255,255,255,0.22)',
      'border-radius:50%',
      'transform:scale(0)',
      'animation:rah-ripple-expand 0.55s ease-out forwards',
      'pointer-events:none'
    ].join(';');

    btn.appendChild(ripple);
    ripple.addEventListener('animationend', function () { ripple.remove(); });
  }

  document.querySelectorAll('.btn-primary, .btn-secondary, .btn-outline').forEach(function (btn) {
    btn.addEventListener('click', createRipple);
  });

  /* ── 3. VanillaTilt on [data-tilt] ───────────────────────── */
  if (typeof VanillaTilt !== 'undefined') {
    VanillaTilt.init(document.querySelectorAll('[data-tilt]'), {
      max:         8,
      speed:       400,
      glare:       true,
      'max-glare': 0.12
    });
  }

  /* ── 4. Magnetic CTA (desktop hover only) ────────────────── */
  var canHover      = window.matchMedia('(hover: hover)').matches;
  var magneticBtns  = document.querySelectorAll('.btn-magnetic');

  if (canHover && magneticBtns.length) {
    magneticBtns.forEach(function (btn) {
      btn.addEventListener('mousemove', function (e) {
        var rect = btn.getBoundingClientRect();
        var x    = (e.clientX - rect.left  - rect.width  / 2) * 0.28;
        var y    = (e.clientY - rect.top   - rect.height / 2) * 0.28;
        btn.style.transform = 'translateY(-2px) translate(' + x + 'px,' + y + 'px)';
      });
      btn.addEventListener('mouseleave', function () {
        btn.style.transform = '';
      });
    });
  }

})();
