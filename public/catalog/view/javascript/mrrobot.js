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

(function () {
  var modal = document.getElementById('mr-login');

  if (!modal || !window.jQuery) {
    return;
  }

  var form = modal.querySelector('form');
  var errorBox = modal.querySelector('.mr-auth__error');
  var lastFocus = null;

  function openLogin() {
    lastFocus = document.activeElement;
    modal.hidden = false;
    document.body.classList.add('mr-auth-open');

    var input = modal.querySelector('input[name="email"]');

    if (input) {
      input.focus();
    }
  }

  function closeLogin() {
    modal.hidden = true;
    document.body.classList.remove('mr-auth-open');

    if (lastFocus && lastFocus.focus) {
      lastFocus.focus();
    }
  }

  document.addEventListener('click', function (event) {
    if (event.target.closest('[data-mr-login]')) {
      event.preventDefault();
      openLogin();
      return;
    }

    if (event.target.closest('[data-mr-login-close]') || event.target === modal) {
      closeLogin();
    }
  });

  document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape' && !modal.hidden) {
      closeLogin();
    }
  });

  if (modal.getAttribute('data-open') === '1') {
    openLogin();
  }

  if (!form) {
    return;
  }

  form.addEventListener('submit', function (event) {
    event.preventDefault();

    var button = form.querySelector('[type="submit"]');

    if (button) {
      button.disabled = true;
    }

    window.jQuery.ajax({
      url: form.action.replaceAll('&amp;', '&'),
      type: 'post',
      data: window.jQuery(form).serialize(),
      dataType: 'json'
    }).done(function (json) {
      if (json && json.redirect) {
        window.location = json.redirect;
        return;
      }

      var message = '';

      if (json && typeof json.error === 'string') {
        message = json.error;
      } else if (json && json.error && json.error.warning) {
        message = json.error.warning;
      }

      if (errorBox) {
        errorBox.hidden = !message;
        errorBox.textContent = message;
      }
    }).always(function () {
      if (button) {
        button.disabled = false;
      }
    });
  });
})();

document.addEventListener('click', function (event) {
  var button = event.target.closest('[data-mr-password]');

  if (!button) {
    return;
  }

  var input = button.parentElement.querySelector('input');

  if (!input) {
    return;
  }

  var show = input.type === 'password';

  input.type = show ? 'text' : 'password';
  button.classList.toggle('is-open', show);
  button.setAttribute('aria-label', show ? 'Скрыть пароль' : 'Показать пароль');
  button.querySelector('.mr-eye-off').hidden = show;
  button.querySelector('.mr-eye-on').hidden = !show;
});
