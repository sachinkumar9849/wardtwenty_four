/* ==========================================================================
   YADUKUL REAL ESTATE & CONSTRUCTION — properties.js
   Front-end property filtering + the property-detail gallery.
   Cards are plain HTML (good for SEO) and carry data-attributes:
     data-purpose  sale | rent
     data-type     land | house | commercial | apartment
     data-location kathmandu | lalitpur | bhaktapur | chitwan | pokhara | other
     data-price    price in NPR
     data-area     area in sq. ft.
   ========================================================================== */
(function () {
  'use strict';

  /* ---- Property filtering ------------------------------------------------ */
  var grid = document.getElementById('propertyGrid');

  if (grid) {
    var form      = document.getElementById('filterForm');
    var cards     = Array.prototype.slice.call(grid.querySelectorAll('[data-purpose]'));
    var countEl   = document.getElementById('resultCount');
    var emptyEl   = document.getElementById('noResults');
    var resetBtn  = document.getElementById('resetFilters');
    var pagerNav  = document.getElementById('propertyPager');
    var pagerList = document.getElementById('propertyPagination');
    var perPage   = parseInt(grid.dataset.perPage, 10) || 9;
    var prevLabel = (pagerNav && pagerNav.dataset.prev) || 'Previous';
    var nextLabel = (pagerNav && pagerNav.dataset.next) || 'Next';
    var matched   = [];
    var page      = 1;
    var firstRender = true;

    function checkedValues(name) {
      return Array.prototype.slice
        .call(form.querySelectorAll('input[name="' + name + '"]:checked'))
        .map(function (input) { return input.value; });
    }

    function inRange(value, range) {
      if (!range) return true;
      var bounds = range.split('-');
      var min = parseInt(bounds[0], 10);
      var max = bounds[1] ? parseInt(bounds[1], 10) : Infinity;
      return value >= min && value <= max;
    }

    function applyFilters() {
      var purposes  = checkedValues('purpose');
      var types     = checkedValues('type');
      var location  = form.elements.location ? form.elements.location.value : '';
      var price     = form.elements.price ? form.elements.price.value : '';
      var area      = form.elements.area ? form.elements.area.value : '';

      matched = cards.filter(function (card) {
        return (!purposes.length || purposes.indexOf(card.dataset.purpose) > -1) &&
               (!types.length    || types.indexOf(card.dataset.type) > -1) &&
               (!location        || card.dataset.location === location) &&
               inRange(parseInt(card.dataset.price, 10), price) &&
               inRange(parseInt(card.dataset.area, 10), area);
      });

      if (countEl) countEl.textContent = matched.length;
      if (emptyEl) emptyEl.hidden = matched.length !== 0;

      page = 1;
      showPage();
    }

    /* ---- Pagination -------------------------------------------------------
       Every listing is in the HTML already (good for SEO, and the filters need
       the whole set), so paging happens here: show one slice, hide the rest. */

    function showPage() {
      var pages = Math.max(1, Math.ceil(matched.length / perPage));
      if (page > pages) { page = pages; }

      cards.forEach(function (card) { card.hidden = true; });
      matched.slice((page - 1) * perPage, page * perPage).forEach(function (card) {
        card.hidden = false;
        // Cards start at opacity 0 and are revealed by the scroll observer in
        // main.js. One that was hidden never intersected, so reveal it here or
        // it would page in blank. The first render keeps the entrance animation.
        if (!firstRender) { card.classList.add('is-visible'); }
      });

      firstRender = false;
      buildPager(pages);
    }

    function goToPage(n) {
      page = n;
      showPage();
      var top = grid.getBoundingClientRect().top + window.pageYOffset - 110;
      window.scrollTo({ top: top, behavior: 'smooth' });
    }

    function pagerItem(label, target, disabled, active) {
      var li = document.createElement('li');
      li.className = 'page-item' + (disabled ? ' disabled' : '') + (active ? ' active' : '');
      if (active) { li.setAttribute('aria-current', 'page'); }

      var a = document.createElement('a');
      a.className = 'page-link';
      a.href = '#';
      a.textContent = label;
      if (disabled) { a.setAttribute('tabindex', '-1'); a.setAttribute('aria-disabled', 'true'); }

      a.addEventListener('click', function (e) {
        e.preventDefault();
        if (!disabled && !active) { goToPage(target); }
      });

      li.appendChild(a);
      return li;
    }

    function pagerGap() {
      var li = document.createElement('li');
      li.className = 'page-item disabled';
      li.innerHTML = '<span class="page-link">&hellip;</span>';
      return li;
    }

    /* Page numbers: all of them while they fit, otherwise first/last plus a
       window around the current page. */
    function pageNumbers(pages) {
      if (pages <= 7) {
        var all = [];
        for (var i = 1; i <= pages; i++) { all.push(i); }
        return all;
      }
      var out = [1];
      var from = Math.max(2, page - 1);
      var to   = Math.min(pages - 1, page + 1);
      if (from > 2) { out.push('gap'); }
      for (var n = from; n <= to; n++) { out.push(n); }
      if (to < pages - 1) { out.push('gap'); }
      out.push(pages);
      return out;
    }

    function buildPager(pages) {
      if (!pagerList) { return; }
      pagerList.innerHTML = '';

      if (pages < 2) {
        if (pagerNav) { pagerNav.hidden = true; }
        return;
      }
      if (pagerNav) { pagerNav.hidden = false; }

      pagerList.appendChild(pagerItem(prevLabel, page - 1, page === 1, false));
      pageNumbers(pages).forEach(function (n) {
        pagerList.appendChild(n === 'gap' ? pagerGap() : pagerItem(String(n), n, false, n === page));
      });
      pagerList.appendChild(pagerItem(nextLabel, page + 1, page === pages, false));
    }

    /* Read the query string handed over by the homepage search box */
    function applyIncomingSearch() {
      var params = new URLSearchParams(window.location.search);
      if (!params.toString()) return;

      ['purpose', 'type'].forEach(function (name) {
        var value = params.get(name);
        if (!value) return;
        var input = form.querySelector('input[name="' + name + '"][value="' + value + '"]');
        if (input) input.checked = true;
      });

      ['location', 'price'].forEach(function (name) {
        var value = params.get(name);
        if (value && form.elements[name]) form.elements[name].value = value;
      });
    }

    /* Sorting — reorders the cards already in the grid */
    var sortBy = document.getElementById('sortBy');
    if (sortBy) {
      sortBy.addEventListener('change', function () {
        var order = sortBy.value;
        var sorted = cards.slice();

        if (order === 'Price: Low to High' || order === 'Price: High to Low') {
          sorted.sort(function (a, b) {
            var diff = parseInt(a.dataset.price, 10) - parseInt(b.dataset.price, 10);
            return order === 'Price: Low to High' ? diff : -diff;
          });
        }

        sorted.forEach(function (card) { grid.appendChild(card); });
        cards = sorted;          // keep the array in the order now on screen
        applyFilters();          // re-slice page 1 from the new order
      });
    }

    if (form) {
      applyIncomingSearch();
      form.addEventListener('submit', function (e) { e.preventDefault(); applyFilters(); });
      form.addEventListener('change', applyFilters);

      if (resetBtn) {
        resetBtn.addEventListener('click', function () {
          form.reset();
          applyFilters();
        });
      }
    }

    applyFilters();
  }

  /* ---- Property detail gallery ------------------------------------------- */
  var mainImage = document.getElementById('galleryMain');

  if (mainImage) {
    var modalImage = document.getElementById('galleryModalImage');

    document.querySelectorAll('.gallery-thumb').forEach(function (thumb) {
      thumb.addEventListener('click', function () {
        var full = thumb.getAttribute('data-full');
        var alt  = thumb.querySelector('img').getAttribute('alt');

        mainImage.src = full;
        mainImage.alt = alt;
        if (modalImage) { modalImage.src = full; modalImage.alt = alt; }

        document.querySelectorAll('.gallery-thumb').forEach(function (t) {
          t.classList.remove('active');
          t.setAttribute('aria-selected', 'false');
        });
        thumb.classList.add('active');
        thumb.setAttribute('aria-selected', 'true');
      });
    });

    /* Keep the modal in sync when the main image is opened directly */
    var mainWrap = document.getElementById('galleryMainWrap');
    if (mainWrap && modalImage) {
      mainWrap.addEventListener('click', function () {
        modalImage.src = mainImage.src;
        modalImage.alt = mainImage.alt;
      });
    }
  }
})();
