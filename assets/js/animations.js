/* RAH Solutions LLC — animations.js
   Reveal observer + safety net live in main.js (fail-open: content is visible until
   main.js adds html.js-anim). This file only drives the ticker pause-on-hover. */
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.ticker-strip').forEach(function (t) {
    var track = t.querySelector('.ticker-track');
    if (!track) return;
    t.addEventListener('mouseenter', function () { track.style.animationPlayState = 'paused'; });
    t.addEventListener('mouseleave', function () { track.style.animationPlayState = ''; });
  });
});
