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

/* catalog/view/template/checkout/cart_list.twig */
class __TwigTemplate_205ada005e5d6f6acaa455704d661b4e extends Template
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
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "  ";
            if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 3
                yield "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
                yield ($context["error_warning"] ?? null);
                yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
            }
            // line 5
            yield "  ";
            if ((($tmp = ($context["error_stock"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 6
                yield "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
                yield ($context["error_stock"] ?? null);
                yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
            }
            // line 8
            yield "  ";
            if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 9
                yield "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ";
                yield ($context["success"] ?? null);
                yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
            }
            // line 11
            yield "  ";
            if ((($tmp = ($context["attention"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 12
                yield "    <div class=\"alert alert-info\"><i class=\"fa-solid fa-circle-info\"></i> ";
                yield ($context["attention"] ?? null);
                yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  ";
            }
            // line 14
            yield "  <div id=\"output-cart\" class=\"mr-basket\">
    <div class=\"mr-basket__list\">
      ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 17
                yield "        <article class=\"mr-basket__item\">
          <a class=\"mr-basket__photo\" href=\"";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 18);
                yield "\">
            ";
                // line 19
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 20
                    yield "              <img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 20);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 20);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 20);
                    yield "\"/>
            ";
                }
                // line 22
                yield "          </a>
          <div class=\"mr-basket__info\">
            ";
                // line 24
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "sort_order", [], "any", false, false, false, 24) > 0) && (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "sort_order", [], "any", false, false, false, 24) <= 8))) {
                    // line 25
                    yield "              <span class=\"mr-basket__badge\">Хит</span>
            ";
                }
                // line 27
                yield "            <h2 class=\"mr-basket__name\"><a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 27);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 27);
                yield "</a>";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " <span class=\"text-danger\">***</span>";
                }
                yield "</h2>
            <p>Модель: ";
                // line 28
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 28);
                yield "</p>
            ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 29));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 30
                    yield "              <p>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 30);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 30);
                    yield "</p>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 33
                    yield "              <p>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 33);
                    yield "</p>
            ";
                }
                // line 35
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 36
                    yield "              <p class=\"mr-basket__warn\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 36);
                    yield "</p>
            ";
                }
                // line 38
                yield "          </div>
          <form class=\"mr-basket__qty\" method=\"post\">
            <div class=\"mr-qty\">
              <button type=\"submit\" formaction=\"";
                // line 41
                yield ($context["edit"] ?? null);
                yield "\" data-mr-qty=\"-1\" aria-label=\"Уменьшить\">−</button>
              <input type=\"text\" name=\"quantity\" value=\"";
                // line 42
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 42);
                yield "\" inputmode=\"numeric\" aria-label=\"Количество\"/>
              <button type=\"submit\" formaction=\"";
                // line 43
                yield ($context["edit"] ?? null);
                yield "\" data-mr-qty=\"1\" aria-label=\"Увеличить\">+</button>
            </div>
            <input type=\"hidden\" name=\"key\" value=\"";
                // line 45
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 45);
                yield "\"/>
          </form>
          <div class=\"mr-basket__price\">
            <div class=\"mr-basket__sum\">";
                // line 48
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 48);
                yield "</div>
            ";
                // line 49
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 50
                    yield "              <div class=\"mr-basket__each\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 50);
                    yield "/шт</div>
            ";
                }
                // line 52
                yield "          </div>
          <div class=\"mr-basket__actions\">
            <form method=\"post\">
              <input type=\"hidden\" name=\"product_id\" value=\"";
                // line 55
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 55);
                yield "\"/>
              <button type=\"submit\" formaction=\"";
                // line 56
                yield ($context["wishlist_add"] ?? null);
                yield "\" class=\"mr-basket__icon\" aria-label=\"В избранное\">
                <svg viewBox=\"0 0 24 24\"><path d=\"M12 19s-7-4.4-7-9a4 4 0 0 1 7-2 4 4 0 0 1 7 2c0 4.6-7 9-7 9z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" stroke-linejoin=\"round\"/></svg>
              </button>
            </form>
            <a href=\"";
                // line 60
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 60);
                yield "\" class=\"mr-basket__icon btn-danger\" aria-label=\"Удалить\">
              <svg viewBox=\"0 0 24 24\"><path d=\"M5 7h14M9 7V5h6v2M8 7l1 13h6l1-13\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
            </a>
          </div>
        </article>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            yield "    </div>
    <aside class=\"mr-basket__summary\">
      <div class=\"mr-basket__total\">
        <span>Итого</span>
        <strong class=\"mr-basket__grand\">";
            // line 70
            if ((($tmp = ($context["totals"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::last($this->env->getCharset(), ($context["totals"] ?? null)), "text", [], "any", false, false, false, 70);
            }
            yield "</strong>
      </div>
      <a class=\"mr-basket__checkout\" href=\"";
            // line 72
            yield ($context["checkout"] ?? null);
            yield "\">Перейти к оформлению</a>
      <a class=\"mr-basket__clear\" href=\"";
            // line 73
            yield ($context["clear"] ?? null);
            yield "\" data-mr-clear>Очистить корзину</a>
    </aside>
  </div>
";
        } else {
            // line 77
            yield "  <div class=\"mr-basket is-empty\">
    <div class=\"mr-basket-empty\">
      <div class=\"mr-basket-empty__art\" aria-hidden=\"true\">
        <svg viewBox=\"0 0 94 80\"><path fill=\"#DADADA\" d=\"M4.5 0a4.4 4.4 0 0 0 0 8.9h14.7l3.4 10.2 10.7 32c2.3 6.7 9.4 10.5 16.3 8.6l34.4-9.3A12 12 0 0 0 94 38.7V26.7c0-7.4-6-13.4-13.4-13.4H30.1L27.6 6.1A12 12 0 0 0 19.2 0H4.5Zm37.4 48.4-8.8-26.2h47.5c2.5 0 4.5 2 4.5 4.5v11c0 2-1.4 3.8-3.3 4.3L46.4 51.3c-2.3.6-4.7-.7-5.4-2.9Z\"/><circle cx=\"26.9\" cy=\"71.1\" r=\"8.9\" fill=\"#DADADA\"/><circle cx=\"76.1\" cy=\"71.1\" r=\"8.9\" fill=\"#DADADA\"/></svg>
      </div>
      <p class=\"mr-basket-empty__title\">Ваша корзина пуста</p>
      <p class=\"mr-basket-empty__text\">Найдите то, что вам нужно в каталоге, на<br> главной странице или при помощи поиска</p>
      <div class=\"mr-basket-empty__actions\">
        <a class=\"mr-basket-empty__catalog\" href=\"";
            // line 85
            yield ($context["catalog"] ?? null);
            yield "\">В каталог</a>
        <a class=\"mr-basket-empty__home\" href=\"";
            // line 86
            yield ($context["home"] ?? null);
            yield "\">На главную</a>
      </div>
    </div>
  </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/checkout/cart_list.twig";
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
        return array (  267 => 86,  263 => 85,  253 => 77,  246 => 73,  242 => 72,  235 => 70,  229 => 66,  217 => 60,  210 => 56,  206 => 55,  201 => 52,  195 => 50,  193 => 49,  189 => 48,  183 => 45,  178 => 43,  174 => 42,  170 => 41,  165 => 38,  159 => 36,  156 => 35,  150 => 33,  147 => 32,  136 => 30,  132 => 29,  128 => 28,  117 => 27,  113 => 25,  111 => 24,  107 => 22,  97 => 20,  95 => 19,  91 => 18,  88 => 17,  84 => 16,  80 => 14,  74 => 12,  71 => 11,  65 => 9,  62 => 8,  56 => 6,  53 => 5,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if products %}
  {% if error_warning %}
    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> {{ error_warning }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  {% endif %}
  {% if error_stock %}
    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> {{ error_stock }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  {% endif %}
  {% if success %}
    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> {{ success }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  {% endif %}
  {% if attention %}
    <div class=\"alert alert-info\"><i class=\"fa-solid fa-circle-info\"></i> {{ attention }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
  {% endif %}
  <div id=\"output-cart\" class=\"mr-basket\">
    <div class=\"mr-basket__list\">
      {% for product in products %}
        <article class=\"mr-basket__item\">
          <a class=\"mr-basket__photo\" href=\"{{ product.href }}\">
            {% if product.thumb %}
              <img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" title=\"{{ product.name }}\"/>
            {% endif %}
          </a>
          <div class=\"mr-basket__info\">
            {% if product.sort_order > 0 and product.sort_order <= 8 %}
              <span class=\"mr-basket__badge\">Хит</span>
            {% endif %}
            <h2 class=\"mr-basket__name\"><a href=\"{{ product.href }}\">{{ product.name }}</a>{% if not product.stock %} <span class=\"text-danger\">***</span>{% endif %}</h2>
            <p>Модель: {{ product.model }}</p>
            {% for option in product.option %}
              <p>{{ option.name }}: {{ option.value }}</p>
            {% endfor %}
            {% if product.subscription %}
              <p>{{ product.subscription }}</p>
            {% endif %}
            {% if product.minimum %}
              <p class=\"mr-basket__warn\">{{ product.minimum }}</p>
            {% endif %}
          </div>
          <form class=\"mr-basket__qty\" method=\"post\">
            <div class=\"mr-qty\">
              <button type=\"submit\" formaction=\"{{ edit }}\" data-mr-qty=\"-1\" aria-label=\"Уменьшить\">−</button>
              <input type=\"text\" name=\"quantity\" value=\"{{ product.quantity }}\" inputmode=\"numeric\" aria-label=\"Количество\"/>
              <button type=\"submit\" formaction=\"{{ edit }}\" data-mr-qty=\"1\" aria-label=\"Увеличить\">+</button>
            </div>
            <input type=\"hidden\" name=\"key\" value=\"{{ product.cart_id }}\"/>
          </form>
          <div class=\"mr-basket__price\">
            <div class=\"mr-basket__sum\">{{ product.total }}</div>
            {% if product.price %}
              <div class=\"mr-basket__each\">{{ product.price }}/шт</div>
            {% endif %}
          </div>
          <div class=\"mr-basket__actions\">
            <form method=\"post\">
              <input type=\"hidden\" name=\"product_id\" value=\"{{ product.product_id }}\"/>
              <button type=\"submit\" formaction=\"{{ wishlist_add }}\" class=\"mr-basket__icon\" aria-label=\"В избранное\">
                <svg viewBox=\"0 0 24 24\"><path d=\"M12 19s-7-4.4-7-9a4 4 0 0 1 7-2 4 4 0 0 1 7 2c0 4.6-7 9-7 9z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" stroke-linejoin=\"round\"/></svg>
              </button>
            </form>
            <a href=\"{{ product.remove }}\" class=\"mr-basket__icon btn-danger\" aria-label=\"Удалить\">
              <svg viewBox=\"0 0 24 24\"><path d=\"M5 7h14M9 7V5h6v2M8 7l1 13h6l1-13\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
            </a>
          </div>
        </article>
      {% endfor %}
    </div>
    <aside class=\"mr-basket__summary\">
      <div class=\"mr-basket__total\">
        <span>Итого</span>
        <strong class=\"mr-basket__grand\">{% if totals %}{{ totals|last.text }}{% endif %}</strong>
      </div>
      <a class=\"mr-basket__checkout\" href=\"{{ checkout }}\">Перейти к оформлению</a>
      <a class=\"mr-basket__clear\" href=\"{{ clear }}\" data-mr-clear>Очистить корзину</a>
    </aside>
  </div>
{% else %}
  <div class=\"mr-basket is-empty\">
    <div class=\"mr-basket-empty\">
      <div class=\"mr-basket-empty__art\" aria-hidden=\"true\">
        <svg viewBox=\"0 0 94 80\"><path fill=\"#DADADA\" d=\"M4.5 0a4.4 4.4 0 0 0 0 8.9h14.7l3.4 10.2 10.7 32c2.3 6.7 9.4 10.5 16.3 8.6l34.4-9.3A12 12 0 0 0 94 38.7V26.7c0-7.4-6-13.4-13.4-13.4H30.1L27.6 6.1A12 12 0 0 0 19.2 0H4.5Zm37.4 48.4-8.8-26.2h47.5c2.5 0 4.5 2 4.5 4.5v11c0 2-1.4 3.8-3.3 4.3L46.4 51.3c-2.3.6-4.7-.7-5.4-2.9Z\"/><circle cx=\"26.9\" cy=\"71.1\" r=\"8.9\" fill=\"#DADADA\"/><circle cx=\"76.1\" cy=\"71.1\" r=\"8.9\" fill=\"#DADADA\"/></svg>
      </div>
      <p class=\"mr-basket-empty__title\">Ваша корзина пуста</p>
      <p class=\"mr-basket-empty__text\">Найдите то, что вам нужно в каталоге, на<br> главной странице или при помощи поиска</p>
      <div class=\"mr-basket-empty__actions\">
        <a class=\"mr-basket-empty__catalog\" href=\"{{ catalog }}\">В каталог</a>
        <a class=\"mr-basket-empty__home\" href=\"{{ home }}\">На главную</a>
      </div>
    </div>
  </div>
{% endif %}
", "catalog/view/template/checkout/cart_list.twig", "/pub/www/app/public/catalog/view/template/checkout/cart_list.twig");
    }
}
