/* ==========================================================================
   YADUKUL REAL ESTATE & CONSTRUCTION — main.js
   Vanilla JS only. Shared behaviour for every page:
   1. Navbar scroll state + active link
   2. Scroll reveal animations
   3. Statistic counters
   4. Language toggle (UI only)
   5. Back-to-top button
   6. Form validation
   7. Homepage property search -> the Properties page
   8. Auto-close mobile menu
   ========================================================================== */
(function () {
  'use strict';

  /* ---- 1. Navbar --------------------------------------------------------- */
  var nav = document.getElementById('mainNav');

  function onScroll() {
    if (nav) nav.classList.toggle('scrolled', window.scrollY > 40);
    var top = document.getElementById('backToTop');
    if (top) top.classList.toggle('show', window.scrollY > 600);
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  /* Mark the current page in the menu (keeps the markup identical on
     every page — no server-side templating needed). */
  var current = location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.navbar-main .nav-link').forEach(function (link) {
    var href = link.getAttribute('href');
    if (href === current) {
      link.classList.add('active');
      link.setAttribute('aria-current', 'page');
    }
  });

  /* Close the collapsed mobile menu after choosing a link */
  var menu = document.getElementById('mainMenu');
  if (menu) {
    menu.querySelectorAll('.nav-link').forEach(function (link) {
      link.addEventListener('click', function () {
        if (menu.classList.contains('show') && window.bootstrap) {
          bootstrap.Collapse.getOrCreateInstance(menu).hide();
        }
      });
    });
  }

  /* ---- 2. Scroll reveal --------------------------------------------------- */
  var revealItems = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window && revealItems.length) {
    var revealObserver = new IntersectionObserver(function (entries, obs) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -60px 0px' });
    revealItems.forEach(function (el) { revealObserver.observe(el); });
  } else {
    revealItems.forEach(function (el) { el.classList.add('is-visible'); });
  }

  /* ---- 3. Counters -------------------------------------------------------- */
  function runCounter(el) {
    var target = parseInt(el.getAttribute('data-count'), 10) || 0;
    var suffix = el.getAttribute('data-suffix') || '';
    var start = null;
    var duration = 1400;

    function step(now) {
      if (!start) start = now;
      var progress = Math.min((now - start) / duration, 1);
      var eased = 1 - Math.pow(1 - progress, 3);
      el.textContent = Math.round(target * eased) + suffix;
      if (progress < 1) requestAnimationFrame(step);
    }
    requestAnimationFrame(step);
  }

  var counters = document.querySelectorAll('[data-count]');
  if ('IntersectionObserver' in window && counters.length) {
    var countObserver = new IntersectionObserver(function (entries, obs) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          runCounter(entry.target);
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });
    counters.forEach(function (el) { countObserver.observe(el); });
  }

  /* ---- 4. Language toggle (UI only) --------------------------------------- */
  /* Any element carrying data-np gets its label swapped. The English text
     is cached in data-en the first time the toggle runs. */
  function setLanguage(lang) {
    document.querySelectorAll('[data-np]').forEach(function (el) {
      if (!el.hasAttribute('data-en')) el.setAttribute('data-en', el.textContent.trim());
      el.textContent = lang === 'np' ? el.getAttribute('data-np') : el.getAttribute('data-en');
    });
    document.querySelectorAll('.lang-btn').forEach(function (btn) {
      btn.classList.toggle('active', btn.getAttribute('data-lang') === lang);
      btn.setAttribute('aria-pressed', btn.getAttribute('data-lang') === lang);
    });
    document.documentElement.setAttribute('data-site-lang', lang);
    try { localStorage.setItem('yk-lang', lang); } catch (e) { /* private mode */ }
  }

  document.querySelectorAll('.lang-btn').forEach(function (btn) {
    btn.addEventListener('click', function () { setLanguage(btn.getAttribute('data-lang')); });
  });

  try {
    var saved = localStorage.getItem('yk-lang');
    if (saved === 'np') setLanguage('np');
  } catch (e) { /* ignore */ }

  /* ---- 5. Back to top ----------------------------------------------------- */
  var backToTop = document.getElementById('backToTop');
  if (backToTop) {
    backToTop.addEventListener('click', function (e) {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  /* ---- 6. Form validation ------------------------------------------------- */
  document.querySelectorAll('.js-validate').forEach(function (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      form.classList.add('was-validated');
      if (!form.checkValidity()) {
        var firstInvalid = form.querySelector(':invalid');
        if (firstInvalid) firstInvalid.focus();
        return;
      }
      /* the confirmation sits just above the form, inside the same card */
      var note = form.querySelector('.form-message') ||
                 (form.parentElement && form.parentElement.querySelector('.form-message'));
      if (note) {
        note.classList.add('show');
        note.setAttribute('role', 'status');
        note.scrollIntoView({ behavior: 'smooth', block: 'center' });
      }
      form.reset();
      form.classList.remove('was-validated');
    });
  });

  /* ---- 7. Homepage search ------------------------------------------------- */
  /* Collects the search selections and hands them to the Properties page,
     where properties.js applies them as filters. The destination comes from
     the form's own action, so the page slug lives in one place (the template).
     Without JS the form still submits normally to that same action. */
  var searchForm = document.getElementById('propertySearch');
  if (searchForm) {
    searchForm.addEventListener('submit', function (e) {
      var target = searchForm.getAttribute('action');
      if (!target) return;                 // let the browser handle it
      e.preventDefault();
      var params = new URLSearchParams();
      ['purpose', 'type', 'location', 'price'].forEach(function (key) {
        var field = searchForm.elements[key];
        if (field && field.value) params.set(key, field.value);
      });
      var query = params.toString();
      window.location.href = target + (query ? '?' + query : '');
    });
  }

  /* ---- 8. Image fallback -------------------------------------------------- */
  /* If a remote photo fails to load, keep the layout intact with a
     neutral brand-coloured placeholder instead of a broken icon. */
  document.addEventListener('error', function (e) {
    var el = e.target;
    if (el.tagName === 'IMG' && !el.dataset.fallbackApplied) {
      el.dataset.fallbackApplied = '1';
      el.style.background = 'linear-gradient(135deg, #F0EDE7 0%, #E4DFD4 100%)';
      el.style.objectFit = 'contain';
      el.style.padding = '18%';
      el.src = 'assets/images/logo.svg';
    }
  }, true);
})();
