(function () {
  var header = document.getElementById('mr-header');
  var catalogButton = document.getElementById('mr-catalog-btn');

  if (header && catalogButton) {
    catalogButton.addEventListener('click', function () {
      var open = header.classList.toggle('is-catalog-open');
      catalogButton.setAttribute('aria-expanded', open ? 'true' : 'false');
    });

    document.addEventListener('click', function (event) {
      if (!header.contains(event.target)) {
        header.classList.remove('is-catalog-open');
        catalogButton.setAttribute('aria-expanded', 'false');
      }
    });
  }

  var slider = document.querySelector('[data-mr-slider]');

  if (!slider) {
    return;
  }

  var slides = Array.prototype.slice.call(slider.querySelectorAll('.mr-slide'));
  var dots = Array.prototype.slice.call(slider.querySelectorAll('.mr-dot'));
  var index = 0;
  var timer = 0;

  function show(next) {
    index = (next + slides.length) % slides.length;
    slides.forEach(function (slide, slideIndex) {
      slide.classList.toggle('is-active', slideIndex === index);
    });
    dots.forEach(function (dot, dotIndex) {
      dot.classList.toggle('is-active', dotIndex === index);
    });
  }

  function restart() {
    window.clearInterval(timer);
    timer = window.setInterval(function () {
      show(index + 1);
    }, 5500);
  }

  dots.forEach(function (dot, dotIndex) {
    dot.addEventListener('click', function (event) {
      event.preventDefault();
      event.stopPropagation();
      show(dotIndex);
      restart();
    });
  });

  slider.querySelectorAll('[data-mr-prev]').forEach(function (button) {
    button.addEventListener('click', function () {
      show(index - 1);
      restart();
    });
  });

  slider.querySelectorAll('[data-mr-next]').forEach(function (button) {
    button.addEventListener('click', function () {
      show(index + 1);
      restart();
    });
  });

  if (slides.length > 1) {
    restart();
  }
})();

(function () {
  var sink = document.getElementById('cart');
  var badges = document.querySelectorAll('[data-mr-cart-count]');

  if (!sink || !badges.length || !window.MutationObserver) {
    return;
  }

  var sync = function () {
    var match = (sink.innerText || '').match(/(\d+)\s+item/);
    var count = match ? parseInt(match[1], 10) : 0;

    badges.forEach(function (badge) {
      badge.textContent = count ? String(count) : '';
      badge.classList.toggle('is-empty', !count);
    });
  };

  new MutationObserver(sync).observe(sink, {childList: true, subtree: true, characterData: true});
})();
