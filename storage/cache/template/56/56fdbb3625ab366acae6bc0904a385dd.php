<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* catalog/view/template/checkout/checkout.twig */
class __TwigTemplate_fd18c3c0968850a13eb67e55ccc628bf extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield ($context["header"] ?? null);
        yield "
<div id=\"checkout-checkout\" class=\"mr-order\">
  <div class=\"mr-wrap\">
    <a class=\"mr-order__back\" href=\"";
        // line 4
        yield ($context["cart"] ?? null);
        yield "\">В корзину</a>
    <h1>Оформление заказа</h1>
    ";
        // line 6
        if ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "      <div class=\"mr-order__note\">
        <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><circle cx=\"12\" cy=\"12\" r=\"9\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\"/><path d=\"M8 12.2 10.8 15 16 9.5\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
        <span>Вы заказывали в нашем интернет-магазине, поэтому мы заполнили все данные автоматически. Если все заполнено верно, нажмите кнопку «Оформить заказ».</span>
      </div>
    ";
        }
        // line 12
        yield "    <div class=\"mr-order__layout\">
      <div class=\"mr-order__main\">
        <section class=\"mr-order__card\">
          <h2>Покупатель</h2>
          ";
        // line 16
        if ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "            <div class=\"mr-order__person\">
              <div>
                <strong>";
            // line 19
            yield ($context["fullname"] ?? null);
            yield "</strong>
                <span>";
            // line 20
            yield ($context["email"] ?? null);
            yield "</span>
                ";
            // line 21
            if ((($tmp = ($context["telephone"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<span>";
                yield ($context["telephone"] ?? null);
                yield "</span>";
            }
            // line 22
            yield "              </div>
              <a href=\"";
            // line 23
            yield ($context["edit"] ?? null);
            yield "\">Изменить</a>
            </div>
          ";
        } else {
            // line 26
            yield "            <form id=\"mr-buyer\" class=\"mr-order__buyer\">
              <label class=\"mr-order__field\">
                <span>Фамилия Имя <i>*</i></span>
                <input type=\"text\" name=\"fullname\" id=\"input-fullname\" autocomplete=\"name\">
                <em id=\"error-fullname\"></em>
              </label>
              <label class=\"mr-order__field\">
                <span>E-mail <i>*</i></span>
                <input type=\"email\" name=\"email\" id=\"input-email\" autocomplete=\"email\">
                <em id=\"error-email\"></em>
              </label>
              <label class=\"mr-order__field\">
                <span>Телефон <i>*</i></span>
                <input type=\"tel\" name=\"telephone\" id=\"input-telephone\" autocomplete=\"tel\" inputmode=\"tel\" placeholder=\"+7 (___) ___-__-__\">
                <em id=\"error-telephone\"></em>
              </label>
            </form>
          ";
        }
        // line 44
        yield "        </section>
        <section class=\"mr-order__card\">
          <h2>Способ доставки</h2>
          <label class=\"mr-order__choice\">
            <input type=\"radio\" name=\"shipping_method\" value=\"pickup.pickup\" checked>
            <span>
              <b>Самовывоз</b>
              <small>";
        // line 51
        yield ($context["store_address"] ?? null);
        yield "</small>
              <small>Бесплатно</small>
            </span>
          </label>
          <label class=\"mr-order__comment\" for=\"input-comment\">Комментарии к заказу:</label>
          <textarea id=\"input-comment\" name=\"comment\" rows=\"4\">";
        // line 56
        yield ($context["comment"] ?? null);
        yield "</textarea>
        </section>
        <section class=\"mr-order__card\">
          <h2>Способ оплаты</h2>
          <label class=\"mr-order__choice\">
            <input type=\"radio\" name=\"payment_method\" value=\"cod.cod\" checked>
            <span>
              <b>Наличными</b>
              <small>Оплата наличными при получении заказа</small>
            </span>
          </label>
        </section>
      </div>
      <aside class=\"mr-order__side\">
        <div class=\"mr-order__summary\">
          <div class=\"mr-order__grand\"><span>Итого:</span><b>";
        // line 71
        yield ($context["total"] ?? null);
        yield "</b></div>
          <div class=\"mr-order__line\"><span>Товаров на:</span><b>";
        // line 72
        yield ($context["subtotal"] ?? null);
        yield "</b></div>
          <div class=\"mr-order__line\"><span>Доставка:</span><b>";
        // line 73
        yield ($context["shipping_cost"] ?? null);
        yield "</b></div>
          ";
        // line 74
        if ((($tmp = ($context["savings"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 75
            yield "            <div class=\"mr-order__line\"><span>Экономия:</span><b>";
            yield ($context["savings"] ?? null);
            yield "</b></div>
          ";
        }
        // line 77
        yield "          <div class=\"mr-order__picked\"><span>Доставка:</span><b>Самовывоз</b></div>
          <div class=\"mr-order__picked\"><span>Оплата:</span><b>Наличными</b></div>
          <p class=\"mr-order__error\" id=\"mr-order-error\" hidden></p>
          <button type=\"button\" class=\"mr-order__submit\" id=\"mr-place-order\" disabled>Оформить заказ</button>
        </div>
        <label class=\"mr-order__agree\">
          <input type=\"checkbox\" id=\"mr-agree-personal\">
          <span>Я даю согласие на обработку моих персональных данных и подтверждаю ознакомление с <a href=\"";
        // line 84
        yield ($context["privacy"] ?? null);
        yield "\">Политикой обработки персональных данных</a></span>
        </label>
        <label class=\"mr-order__agree\">
          <input type=\"checkbox\" id=\"mr-agree-offer\">
          <span>Продолжая, вы соглашаетесь с <a href=\"";
        // line 88
        yield ($context["offer"] ?? null);
        yield "\">публичной офертой</a></span>
        </label>
      </aside>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
(function() {
  var button = document.getElementById('mr-place-order');
  var personal = document.getElementById('mr-agree-personal');
  var offer = document.getElementById('mr-agree-offer');
  var error = document.getElementById('mr-order-error');
  var logged = ";
        // line 100
        yield (((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield ";

  function agreed() {
    return personal.checked && offer.checked;
  }

  function toggle() {
    button.disabled = !agreed();
  }

  personal.addEventListener('change', toggle);
  offer.addEventListener('change', toggle);

  function showError(message) {
    error.hidden = !message;
    error.textContent = message || '';
  }

  function fieldError(name, message) {
    var input = document.getElementById('input-' + name);
    var box = document.getElementById('error-' + name);

    if (input) {
      input.classList.toggle('is-invalid', Boolean(message));
    }

    if (box) {
      box.textContent = message || '';
    }
  }

  button.addEventListener('click', function() {
    if (!agreed()) {
      showError('Подтвердите согласие на обработку данных и оферту');
      return;
    }

    showError('');
    ['fullname', 'email', 'telephone'].forEach(function(name) { fieldError(name, ''); });
    button.disabled = true;

    var comment = document.getElementById('input-comment').value;
    var request;

    if (logged) {
      request = \$.ajax({
        url: 'index.php?route=checkout/payment_method.comment&language=";
        // line 146
        yield ($context["language"] ?? null);
        yield "',
        type: 'post',
        data: {comment: comment},
        dataType: 'json'
      });
    } else {
      var buyer = \$('#mr-buyer').serialize() + '&comment=' + encodeURIComponent(comment);
      request = \$.ajax({
        url: 'index.php?route=checkout/checkout.guest&language=";
        // line 154
        yield ($context["language"] ?? null);
        yield "',
        type: 'post',
        data: buyer,
        dataType: 'json'
      });
    }

    request.done(function(json) {
      if (json && json.redirect) {
        location = json.redirect;
        return;
      }

      if (json && json.error) {
        if (typeof json.error === 'string') {
          showError(json.error);
        } else {
          Object.keys(json.error).forEach(function(key) {
            fieldError(key, json.error[key]);
          });
        }

        button.disabled = false;
        return;
      }

      \$.ajax({
        url: 'index.php?route=extension/opencart/payment/cod.confirm&language=";
        // line 181
        yield ($context["language"] ?? null);
        yield "',
        dataType: 'json'
      }).done(function(result) {
        if (result && result.redirect) {
          location = result.redirect;
          return;
        }

        showError((result && result.error) || 'Не удалось оформить заказ');
        button.disabled = false;
      }).fail(function() {
        showError('Не удалось оформить заказ');
        button.disabled = false;
      });
    }).fail(function() {
      showError('Не удалось оформить заказ');
      button.disabled = false;
    });
  });
})();
//--></script>
";
        // line 202
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/checkout/checkout.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  317 => 202,  293 => 181,  263 => 154,  252 => 146,  203 => 100,  188 => 88,  181 => 84,  172 => 77,  166 => 75,  164 => 74,  160 => 73,  156 => 72,  152 => 71,  134 => 56,  126 => 51,  117 => 44,  97 => 26,  91 => 23,  88 => 22,  82 => 21,  78 => 20,  74 => 19,  70 => 17,  68 => 16,  62 => 12,  55 => 7,  53 => 6,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"checkout-checkout\" class=\"mr-order\">
  <div class=\"mr-wrap\">
    <a class=\"mr-order__back\" href=\"{{ cart }}\">В корзину</a>
    <h1>Оформление заказа</h1>
    {% if logged %}
      <div class=\"mr-order__note\">
        <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><circle cx=\"12\" cy=\"12\" r=\"9\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\"/><path d=\"M8 12.2 10.8 15 16 9.5\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
        <span>Вы заказывали в нашем интернет-магазине, поэтому мы заполнили все данные автоматически. Если все заполнено верно, нажмите кнопку «Оформить заказ».</span>
      </div>
    {% endif %}
    <div class=\"mr-order__layout\">
      <div class=\"mr-order__main\">
        <section class=\"mr-order__card\">
          <h2>Покупатель</h2>
          {% if logged %}
            <div class=\"mr-order__person\">
              <div>
                <strong>{{ fullname }}</strong>
                <span>{{ email }}</span>
                {% if telephone %}<span>{{ telephone }}</span>{% endif %}
              </div>
              <a href=\"{{ edit }}\">Изменить</a>
            </div>
          {% else %}
            <form id=\"mr-buyer\" class=\"mr-order__buyer\">
              <label class=\"mr-order__field\">
                <span>Фамилия Имя <i>*</i></span>
                <input type=\"text\" name=\"fullname\" id=\"input-fullname\" autocomplete=\"name\">
                <em id=\"error-fullname\"></em>
              </label>
              <label class=\"mr-order__field\">
                <span>E-mail <i>*</i></span>
                <input type=\"email\" name=\"email\" id=\"input-email\" autocomplete=\"email\">
                <em id=\"error-email\"></em>
              </label>
              <label class=\"mr-order__field\">
                <span>Телефон <i>*</i></span>
                <input type=\"tel\" name=\"telephone\" id=\"input-telephone\" autocomplete=\"tel\" inputmode=\"tel\" placeholder=\"+7 (___) ___-__-__\">
                <em id=\"error-telephone\"></em>
              </label>
            </form>
          {% endif %}
        </section>
        <section class=\"mr-order__card\">
          <h2>Способ доставки</h2>
          <label class=\"mr-order__choice\">
            <input type=\"radio\" name=\"shipping_method\" value=\"pickup.pickup\" checked>
            <span>
              <b>Самовывоз</b>
              <small>{{ store_address }}</small>
              <small>Бесплатно</small>
            </span>
          </label>
          <label class=\"mr-order__comment\" for=\"input-comment\">Комментарии к заказу:</label>
          <textarea id=\"input-comment\" name=\"comment\" rows=\"4\">{{ comment }}</textarea>
        </section>
        <section class=\"mr-order__card\">
          <h2>Способ оплаты</h2>
          <label class=\"mr-order__choice\">
            <input type=\"radio\" name=\"payment_method\" value=\"cod.cod\" checked>
            <span>
              <b>Наличными</b>
              <small>Оплата наличными при получении заказа</small>
            </span>
          </label>
        </section>
      </div>
      <aside class=\"mr-order__side\">
        <div class=\"mr-order__summary\">
          <div class=\"mr-order__grand\"><span>Итого:</span><b>{{ total }}</b></div>
          <div class=\"mr-order__line\"><span>Товаров на:</span><b>{{ subtotal }}</b></div>
          <div class=\"mr-order__line\"><span>Доставка:</span><b>{{ shipping_cost }}</b></div>
          {% if savings %}
            <div class=\"mr-order__line\"><span>Экономия:</span><b>{{ savings }}</b></div>
          {% endif %}
          <div class=\"mr-order__picked\"><span>Доставка:</span><b>Самовывоз</b></div>
          <div class=\"mr-order__picked\"><span>Оплата:</span><b>Наличными</b></div>
          <p class=\"mr-order__error\" id=\"mr-order-error\" hidden></p>
          <button type=\"button\" class=\"mr-order__submit\" id=\"mr-place-order\" disabled>Оформить заказ</button>
        </div>
        <label class=\"mr-order__agree\">
          <input type=\"checkbox\" id=\"mr-agree-personal\">
          <span>Я даю согласие на обработку моих персональных данных и подтверждаю ознакомление с <a href=\"{{ privacy }}\">Политикой обработки персональных данных</a></span>
        </label>
        <label class=\"mr-order__agree\">
          <input type=\"checkbox\" id=\"mr-agree-offer\">
          <span>Продолжая, вы соглашаетесь с <a href=\"{{ offer }}\">публичной офертой</a></span>
        </label>
      </aside>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
(function() {
  var button = document.getElementById('mr-place-order');
  var personal = document.getElementById('mr-agree-personal');
  var offer = document.getElementById('mr-agree-offer');
  var error = document.getElementById('mr-order-error');
  var logged = {{ logged ? 'true' : 'false' }};

  function agreed() {
    return personal.checked && offer.checked;
  }

  function toggle() {
    button.disabled = !agreed();
  }

  personal.addEventListener('change', toggle);
  offer.addEventListener('change', toggle);

  function showError(message) {
    error.hidden = !message;
    error.textContent = message || '';
  }

  function fieldError(name, message) {
    var input = document.getElementById('input-' + name);
    var box = document.getElementById('error-' + name);

    if (input) {
      input.classList.toggle('is-invalid', Boolean(message));
    }

    if (box) {
      box.textContent = message || '';
    }
  }

  button.addEventListener('click', function() {
    if (!agreed()) {
      showError('Подтвердите согласие на обработку данных и оферту');
      return;
    }

    showError('');
    ['fullname', 'email', 'telephone'].forEach(function(name) { fieldError(name, ''); });
    button.disabled = true;

    var comment = document.getElementById('input-comment').value;
    var request;

    if (logged) {
      request = \$.ajax({
        url: 'index.php?route=checkout/payment_method.comment&language={{ language }}',
        type: 'post',
        data: {comment: comment},
        dataType: 'json'
      });
    } else {
      var buyer = \$('#mr-buyer').serialize() + '&comment=' + encodeURIComponent(comment);
      request = \$.ajax({
        url: 'index.php?route=checkout/checkout.guest&language={{ language }}',
        type: 'post',
        data: buyer,
        dataType: 'json'
      });
    }

    request.done(function(json) {
      if (json && json.redirect) {
        location = json.redirect;
        return;
      }

      if (json && json.error) {
        if (typeof json.error === 'string') {
          showError(json.error);
        } else {
          Object.keys(json.error).forEach(function(key) {
            fieldError(key, json.error[key]);
          });
        }

        button.disabled = false;
        return;
      }

      \$.ajax({
        url: 'index.php?route=extension/opencart/payment/cod.confirm&language={{ language }}',
        dataType: 'json'
      }).done(function(result) {
        if (result && result.redirect) {
          location = result.redirect;
          return;
        }

        showError((result && result.error) || 'Не удалось оформить заказ');
        button.disabled = false;
      }).fail(function() {
        showError('Не удалось оформить заказ');
        button.disabled = false;
      });
    }).fail(function() {
      showError('Не удалось оформить заказ');
      button.disabled = false;
    });
  });
})();
//--></script>
{{ footer }}
", "catalog/view/template/checkout/checkout.twig", "/pub/www/app/public/catalog/view/template/checkout/checkout.twig");
    }
}
