/* RAH Solutions LLC — effects.js
   Desktop dropdowns: click/keyboard toggle with aria-expanded (hover + :focus-within
   are handled in CSS). Esc closes. */
document.addEventListener('DOMContentLoaded', function () {
  var items = document.querySelectorAll('.has-dropdown');
  var closeAll = function (except) {
    items.forEach(function (li) {
      if (li === except) return;
      var b = li.querySelector('.dropdown-toggle'), m = li.querySelector('.dropdown');
      if (b) b.setAttribute('aria-expanded', 'false');
      if (m) m.style.display = 'none';
    });
  };
  items.forEach(function (li) {
    var btn = li.querySelector('.dropdown-toggle'), menu = li.querySelector('.dropdown');
    if (!btn || !menu) return;
    btn.addEventListener('click', function (e) {
      e.stopPropagation();
      var open = btn.getAttribute('aria-expanded') !== 'true';
      closeAll(li);
      btn.setAttribute('aria-expanded', open ? 'true' : 'false');
      menu.style.display = open ? (/dropdown--(mega|areas)/.test(menu.className) ? 'grid' : 'block') : 'none';
    });
  });
  document.addEventListener('click', function () { closeAll(null); });
  document.addEventListener('keydown', function (e) { if (e.key === 'Escape') closeAll(null); });
});

/* Before/after slider: the range input sets --ba on its figure (static 50/50 split without JS). */
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.ba__range').forEach(function (r) {
    var fig = r.closest('.ba');
    var set = function () { fig.style.setProperty('--ba', r.value + '%'); };
    r.addEventListener('input', set);
    set();
  });
});
