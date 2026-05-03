/* ================================================================
   R.A.H. Solutions, LLC — animations.js
   IntersectionObserver scroll reveals + counter animations
   ================================================================ */
(function () {
  'use strict';

  /* ── 1. Scroll Reveal via data-animate ─────────────────── */
  var revealTargets = document.querySelectorAll('[data-animate]');

  if (revealTargets.length && 'IntersectionObserver' in window) {
    var revealObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            revealObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.15, rootMargin: '0px 0px -40px 0px' }
    );

    revealTargets.forEach(function (el) {
      revealObserver.observe(el);
    });
  } else {
    // Fallback — show all immediately if IO not supported
    revealTargets.forEach(function (el) {
      el.classList.add('is-visible');
    });
  }

  /* ── 2. Stagger Grid Children ──────────────────────────── */
  document.querySelectorAll('[data-stagger]').forEach(function (grid) {
    var children = grid.querySelectorAll('[data-animate]');
    children.forEach(function (child, i) {
      child.style.transitionDelay = Math.min(i * 100, 500) + 'ms';
    });
  });

  /* ── 3. Counter Animations ─────────────────────────────── */
  function animateCounter(el) {
    var target   = parseInt(el.getAttribute('data-counter'), 10);
    var suffix   = el.getAttribute('data-suffix') || '';
    var duration = 1800;
    var start    = performance.now();

    function update(now) {
      var elapsed  = now - start;
      var progress = Math.min(elapsed / duration, 1);
      // Ease-out cubic
      var eased = 1 - Math.pow(1 - progress, 3);
      var value = Math.round(eased * target);
      el.textContent = value + suffix;
      if (progress < 1) {
        requestAnimationFrame(update);
      } else {
        el.textContent = target + suffix;
      }
    }

    requestAnimationFrame(update);
  }

  var counterEls = document.querySelectorAll('[data-counter]');

  if (counterEls.length && 'IntersectionObserver' in window) {
    var counterObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            animateCounter(entry.target);
            counterObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.5 }
    );
    counterEls.forEach(function (el) {
      counterObserver.observe(el);
    });
  }

})();
