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

(function () {
  var form = document.getElementById('form-register');

  if (!form) {
    return;
  }

  var email = document.getElementById('input-email');
  var phone = document.getElementById('input-telephone');
  var password = document.getElementById('input-password');
  var confirmInput = document.getElementById('input-confirm');
  var fullname = document.getElementById('input-fullname');
  var agree = document.getElementById('input-agree');
  var emailPattern = /^[A-Za-z0-9._%+\-]+@[A-Za-z0-9](?:[A-Za-z0-9\-]{0,61}[A-Za-z0-9])?(?:\.[A-Za-z0-9](?:[A-Za-z0-9\-]{0,61}[A-Za-z0-9])?)+$/;
  var passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[^A-Za-z0-9])[\x21-\x7E]{6,20}$/;

  function setError(input, message) {
    if (!input) {
      return;
    }

    var field = input.closest('.mr-register__field, .mr-register__agree');
    var box = field ? field.querySelector('.invalid-feedback') : null;

    input.classList.toggle('is-invalid', Boolean(message));

    if (box) {
      box.textContent = message || '';
      box.classList.toggle('d-block', Boolean(message));
    }
  }

  function formatPhone(value) {
    var digits = String(value || '').replace(/\D/g, '');

    if (!digits) {
      return '';
    }

    if (digits.charAt(0) === '8') {
      digits = '7' + digits.slice(1);
    }

    if (digits.charAt(0) !== '7') {
      digits = '7' + digits;
    }

    digits = digits.slice(0, 11);

    var rest = digits.slice(1);
    var formatted = '+7';

    if (!rest.length) {
      return '+7 ';
    }

    formatted += ' (' + rest.slice(0, 3);

    if (rest.length >= 3) {
      formatted += ')';
    }

    if (rest.length > 3) {
      formatted += ' ' + rest.slice(3, 6);
    }

    if (rest.length > 6) {
      formatted += '-' + rest.slice(6, 8);
    }

    if (rest.length > 8) {
      formatted += '-' + rest.slice(8, 10);
    }

    return formatted;
  }

  if (phone) {
    phone.addEventListener('focus', function () {
      if (!phone.value) {
        phone.value = '+7 ';
      }

      var end = phone.value.length;
      phone.setSelectionRange(end, end);
    });

    phone.addEventListener('input', function () {
      phone.value = formatPhone(phone.value) || '+7 ';
    });

    phone.addEventListener('blur', function () {
      var digits = phone.value.replace(/\D/g, '');

      if (digits.length <= 1) {
        phone.value = '';
        setError(phone, '');
        return;
      }

      setError(phone, digits.length === 11 ? '' : 'Укажите телефон в формате +7 (999) 999-99-99');
    });

    phone.addEventListener('keydown', function (event) {
      if (event.key === 'Backspace' && phone.value.replace(/\D/g, '').length <= 1) {
        event.preventDefault();
        phone.value = '+7 ';
      }
    });
  }

  if (email) {
    email.addEventListener('blur', function () {
      var value = email.value.trim();

      if (!value) {
        setError(email, '');
        return;
      }

      setError(email, emailPattern.test(value) ? '' : 'Укажите корректный e-mail');
    });
  }

  form.addEventListener('submit', function (event) {
    var valid = true;
    var emailValue = email ? email.value.trim() : '';
    var passwordValue = password ? password.value : '';
    var phoneDigits = phone ? phone.value.replace(/\D/g, '') : '';

    if (fullname && !fullname.value.trim()) {
      setError(fullname, 'Укажите фамилию и имя');
      valid = false;
    } else {
      setError(fullname, '');
    }

    if (!emailPattern.test(emailValue)) {
      setError(email, 'Укажите корректный e-mail');
      valid = false;
    } else {
      setError(email, '');
    }

    if (phone && phoneDigits.length <= 1) {
      phone.value = '';
      setError(phone, '');
    } else if (phoneDigits.length !== 11) {
      setError(phone, 'Укажите телефон в формате +7 (999) 999-99-99');
      valid = false;
    } else {
      setError(phone, '');
    }

    if (!passwordPattern.test(passwordValue)) {
      setError(password, 'Пароль должен быть от 6 до 20 символов и содержать латиницу, цифры и спецсимволы');
      valid = false;
    } else {
      setError(password, '');
    }

    if (!confirmInput || confirmInput.value !== passwordValue) {
      setError(confirmInput, 'Пароли не совпадают');
      valid = false;
    } else {
      setError(confirmInput, '');
    }

    if (agree && !agree.checked) {
      setError(agree, 'Подтвердите согласие на обработку персональных данных');
      valid = false;
    } else {
      setError(agree, '');
    }

    if (!valid) {
      event.preventDefault();
      event.stopPropagation();
    }
  });
})();

(function () {
  var profile = document.getElementById('form-customer');
  var passwordForm = document.getElementById('form-password');

  if (!profile && !passwordForm) {
    return;
  }

  var emailPattern = /^[A-Za-z0-9._%+\-]+@[A-Za-z0-9](?:[A-Za-z0-9\-]{0,61}[A-Za-z0-9])?(?:\.[A-Za-z0-9](?:[A-Za-z0-9\-]{0,61}[A-Za-z0-9])?)+$/;

  function setError(input, message) {
    if (!input) {
      return;
    }

    var field = input.closest('.mr-private__field, .mr-private__agree');
    var box = field ? field.querySelector('.invalid-feedback') : document.getElementById('error-' + String(input.id || '').replace(/^input-/, ''));

    input.classList.toggle('is-invalid', Boolean(message));

    if (box) {
      box.textContent = message || '';
      box.classList.toggle('d-block', Boolean(message));
    }
  }

  function formatPhone(value) {
    var digits = String(value || '').replace(/\D/g, '');

    if (!digits) {
      return '';
    }

    if (digits.charAt(0) === '8') {
      digits = '7' + digits.slice(1);
    }

    if (digits.charAt(0) !== '7') {
      digits = '7' + digits;
    }

    digits = digits.slice(0, 11);

    var rest = digits.slice(1);
    var formatted = '+7';

    if (!rest.length) {
      return '+7 ';
    }

    formatted += ' (' + rest.slice(0, 3);

    if (rest.length >= 3) {
      formatted += ')';
    }

    if (rest.length > 3) {
      formatted += ' ' + rest.slice(3, 6);
    }

    if (rest.length > 6) {
      formatted += '-' + rest.slice(6, 8);
    }

    if (rest.length > 8) {
      formatted += '-' + rest.slice(8, 10);
    }

    return formatted;
  }

  if (profile) {
    var email = document.getElementById('input-email');
    var phone = document.getElementById('input-telephone');
    var fullname = document.getElementById('input-fullname');
    var agree = document.getElementById('input-agree');
    var saveButton = profile.querySelector('[type="submit"]');

    function toggleSave() {
      if (saveButton) {
        saveButton.disabled = !(agree && agree.checked);
      }
    }

    if (agree) {
      agree.addEventListener('change', toggleSave);
    }

    if (phone) {
      phone.addEventListener('focus', function () {
        if (!phone.value) {
          phone.value = '+7 ';
        }

        var end = phone.value.length;
        phone.setSelectionRange(end, end);
      });

      phone.addEventListener('input', function () {
        phone.value = formatPhone(phone.value) || '+7 ';
      });

      phone.addEventListener('blur', function () {
        var digits = phone.value.replace(/\D/g, '');

        if (digits.length <= 1) {
          phone.value = '';
          setError(phone, '');
          return;
        }

        setError(phone, digits.length === 11 ? '' : 'Укажите телефон в формате +7 (999) 999-99-99');
      });

      phone.addEventListener('keydown', function (event) {
        if (event.key === 'Backspace' && phone.value.replace(/\D/g, '').length <= 1) {
          event.preventDefault();
          phone.value = '+7 ';
        }
      });
    }

    if (email) {
      email.addEventListener('blur', function () {
        var value = email.value.trim();
        setError(email, !value || emailPattern.test(value) ? '' : 'Укажите корректный e-mail');
      });
    }

    profile.addEventListener('submit', function (event) {
      var valid = true;
      var emailValue = email ? email.value.trim() : '';
      var phoneDigits = phone ? phone.value.replace(/\D/g, '') : '';

      if (fullname && !fullname.value.trim()) {
        setError(fullname, 'Укажите фамилию и имя');
        valid = false;
      } else {
        setError(fullname, '');
      }

      if (!emailPattern.test(emailValue)) {
        setError(email, 'Укажите корректный e-mail');
        valid = false;
      } else {
        setError(email, '');
      }

      if (phoneDigits.length > 1 && phoneDigits.length !== 11) {
        setError(phone, 'Укажите телефон в формате +7 (999) 999-99-99');
        valid = false;
      } else {
        setError(phone, '');
      }

      if (agree && !agree.checked) {
        setError(agree, 'Подтвердите согласие на обработку персональных данных');
        valid = false;
      } else {
        setError(agree, '');
      }

      if (!valid) {
        event.preventDefault();
        event.stopPropagation();
      }
    });
  }

  if (passwordForm) {
    var password = document.getElementById('input-password');
    var confirmInput = document.getElementById('input-confirm');
    var passwordButton = passwordForm.querySelector('[type="submit"]');

    function togglePasswordSave() {
      if (passwordButton) {
        passwordButton.disabled = !password.value || !confirmInput.value;
      }
    }

    password.addEventListener('input', togglePasswordSave);
    confirmInput.addEventListener('input', togglePasswordSave);

    passwordForm.addEventListener('submit', function (event) {
      var valid = true;

      if (password.value.length < 6) {
        setError(password, 'Длина пароля не менее 6 символов');
        valid = false;
      } else {
        setError(password, '');
      }

      if (confirmInput.value !== password.value) {
        setError(confirmInput, 'Пароли не совпадают');
        valid = false;
      } else {
        setError(confirmInput, '');
      }

      if (!valid) {
        event.preventDefault();
        event.stopPropagation();
      }
    });

    if (window.jQuery) {
      window.jQuery(document).on('ajaxComplete', function (event, xhr, settings) {
        if (!settings.url || settings.url.indexOf('password.save') === -1) {
          return;
        }

        var json = xhr.responseJSON;

        if (json && json.success) {
          passwordForm.reset();
          passwordButton.disabled = true;
        }
      });
    }
  }
})();

document.addEventListener('submit', function (event) {
  var form = event.target;

  if (!(form instanceof HTMLFormElement) || !form.hasAttribute('data-mr-wishlist')) {
    return;
  }

  event.preventDefault();
  event.stopPropagation();

  if (!window.jQuery || form.dataset.mrBusy === '1') {
    return;
  }

  var button = event.submitter || form.querySelector('button');
  var action = (button && button.getAttribute('formaction')) || form.getAttribute('action') || '';

  form.dataset.mrBusy = '1';

  window.jQuery.ajax({
    url: action.replaceAll('&amp;', '&'),
    type: 'post',
    data: window.jQuery(form).serialize(),
    dataType: 'json',
    complete: function () {
      delete form.dataset.mrBusy;
    },
    success: function (json) {
      if (!json || json.error || !button) {
        return;
      }

      var active = Boolean(json.active);
      var productId = String(json.product_id || '');

      document.querySelectorAll('form[data-mr-wishlist]').forEach(function (item) {
        var input = item.querySelector('input[name="product_id"]');
        var heart = item.querySelector('button');

        if (!input || !heart || input.value !== productId) {
          return;
        }

        heart.classList.toggle('is-active', active);
        heart.setAttribute('aria-pressed', active ? 'true' : 'false');
      });
    }
  });
}, true);
