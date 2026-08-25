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
      var visible   = 0;

      cards.forEach(function (card) {
        var wrapper = card.closest('.property-col') || card;
        var ok =
          (!purposes.length || purposes.indexOf(card.dataset.purpose) > -1) &&
          (!types.length    || types.indexOf(card.dataset.type) > -1) &&
          (!location        || card.dataset.location === location) &&
          inRange(parseInt(card.dataset.price, 10), price) &&
          inRange(parseInt(card.dataset.area, 10), area);

        wrapper.hidden = !ok;
        if (ok) visible++;
      });

      if (countEl) countEl.textContent = visible;
      if (emptyEl) emptyEl.hidden = visible !== 0;
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
