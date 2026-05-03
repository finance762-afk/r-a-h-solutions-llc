/* ================================================================
   R.A.H. Solutions, LLC — main.js
   Page-level initializations loaded after deferred scripts
   ================================================================ */
(function () {
  'use strict';

  /* ── Re-init Lucide icons if needed after dynamic inserts ── */
  /* Initial init is in footer.php inline script on DOMContentLoaded */

  /* ── FAQ accordion (progressive enhancement) ─────────────── */
  document.querySelectorAll('.faq-item').forEach(function (item) {
    var question = item.querySelector('.faq-question');
    var answer   = item.querySelector('.faq-answer');
    if (!question || !answer) return;

    question.addEventListener('click', function () {
      var isOpen = item.classList.contains('faq-open');
      // Close all
      document.querySelectorAll('.faq-item.faq-open').forEach(function (openItem) {
        openItem.classList.remove('faq-open');
        var a = openItem.querySelector('.faq-answer');
        if (a) a.style.maxHeight = '';
      });
      // Open clicked if it was closed
      if (!isOpen) {
        item.classList.add('faq-open');
        answer.style.maxHeight = answer.scrollHeight + 'px';
      }
    });
  });

})();
