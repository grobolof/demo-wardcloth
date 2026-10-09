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

/* catalog/view/template/account/order_list.twig */
class __TwigTemplate_de2651ae838de0499e90e651401d0a0c extends Template
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
<div id=\"account-order\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            yield "      <li class=\"breadcrumb-item\">
        ";
            // line 6
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 7
                yield "          <span>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
                yield "</span>
        ";
            } else {
                // line 9
                yield "          <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
                yield "</a>
        ";
            }
            // line 11
            yield "      </li>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "  </ul>
  <div id=\"content\">
    ";
        // line 15
        yield ($context["content_top"] ?? null);
        yield "
    <h1>Заказы</h1>
    <div class=\"mr-private\">
      <nav aria-label=\"Кабинет\">
        <ul class=\"mr-private__menu\">
          <li><a href=\"";
        // line 20
        yield ($context["account"] ?? null);
        yield "\">Мой кабинет</a></li>
          <li><a href=\"";
        // line 21
        yield ($context["edit"] ?? null);
        yield "\">Личные данные</a></li>
          <li><a class=\"is-active\" href=\"";
        // line 22
        yield ($context["order"] ?? null);
        yield "\" aria-current=\"page\">Заказы</a></li>
          <li><a href=\"";
        // line 23
        yield ($context["wishlist"] ?? null);
        yield "\">Избранные товары</a></li>
          <li><a href=\"";
        // line 24
        yield ($context["logout"] ?? null);
        yield "\">Выйти</a></li>
        </ul>
      </nav>
      <div class=\"mr-private__main\">
        <form class=\"mr-orders__filters\" action=\"";
        // line 28
        yield ($context["action"] ?? null);
        yield "\" method=\"get\">
          <label>
            <select name=\"filter_status\" onchange=\"this.form.submit()\">
              <option value=\"\">Любой статус заказа</option>
              <option value=\"7\"";
        // line 32
        if ((($context["filter_status"] ?? null) == "7")) {
            yield " selected";
        }
        yield ">Отменен</option>
              <option value=\"5\"";
        // line 33
        if ((($context["filter_status"] ?? null) == "5")) {
            yield " selected";
        }
        yield ">Выполнен</option>
              <option value=\"1\"";
        // line 34
        if ((($context["filter_status"] ?? null) == "1")) {
            yield " selected";
        }
        yield ">Ожидает оплату</option>
            </select>
          </label>
          <label>
            <select name=\"filter_year\" onchange=\"this.form.submit()\">
              <option value=\"\">За все время</option>
              ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["years"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 41
            yield "                <option value=\"";
            yield $context["year"];
            yield "\"";
            if ((($context["filter_year"] ?? null) == $context["year"])) {
                yield " selected";
            }
            yield ">";
            yield $context["year"];
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['year'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "            </select>
          </label>
        </form>
        ";
        // line 46
        if ((($tmp = ($context["orders"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "          <div class=\"mr-orders\">
            ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 49
                yield "              <article class=\"mr-order-card";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status_done", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " is-done";
                }
                yield "\">
                <a class=\"mr-order-card__cover\" href=\"";
                // line 50
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 50);
                yield "\" aria-label=\"Заказ от ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "date", [], "any", false, false, false, 50);
                yield "\"></a>
                <div class=\"mr-order-card__info\">
                  <a class=\"mr-order-card__date\" href=\"";
                // line 52
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 52);
                yield "\">Заказ от ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "date", [], "any", false, false, false, 52);
                yield "</a>
                  <div class=\"mr-order-card__meta\">
                    <span>№";
                // line 54
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 54);
                yield "</span>
                    ";
                // line 55
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "pay_text", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 56
                    yield "                      <span class=\"mr-order-card__pay";
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["order"], "paid", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " is-wait";
                    }
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "pay_text", [], "any", false, false, false, 56);
                    yield "</span>
                    ";
                }
                // line 58
                yield "                  </div>
                  <div class=\"mr-order-card__status\">
                    <span class=\"mr-order-card__state";
                // line 60
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status_done", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " is-done";
                }
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status_label", [], "any", false, false, false, 60);
                yield "</span>
                    <span class=\"mr-order-card__steps\" aria-hidden=\"true\">
                      ";
                // line 62
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 4));
                foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
                    // line 63
                    yield "                        <i";
                    if (($context["step"] <= CoreExtension::getAttribute($this->env, $this->source, $context["order"], "step", [], "any", false, false, false, 63))) {
                        yield " class=\"is-on\"";
                    }
                    yield "></i>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['step'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                yield "                    </span>
                  </div>
                </div>
                <div class=\"mr-order-card__sum\">";
                // line 68
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 68);
                yield "</div>
                <div class=\"mr-order-card__photos\">
                  ";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "products", [], "any", false, false, false, 70));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 71
                    yield "                    <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 71);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 71);
                    yield "\">
                      ";
                    // line 72
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 73
                        yield "                        <img src=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 73);
                        yield "\" alt=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 73);
                        yield "\">
                      ";
                    }
                    // line 75
                    yield "                    </a>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                yield "                  ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "more", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 78
                    yield "                    <span>+";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "more", [], "any", false, false, false, 78);
                    yield "</span>
                  ";
                }
                // line 80
                yield "                </div>
                <div class=\"mr-order-card__actions\">
                  <a class=\"mr-order-card__repeat\" href=\"";
                // line 82
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "reorder", [], "any", false, false, false, 82);
                yield "\">Повторить заказ</a>
                  ";
                // line 83
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "can_cancel", [], "any", false, false, false, 83)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 84
                    yield "                    <a class=\"mr-order-card__cancel\" href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "cancel", [], "any", false, false, false, 84);
                    yield "\">Отменить заказ</a>
                  ";
                }
                // line 86
                yield "                </div>
              </article>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            yield "          </div>
          ";
            // line 90
            if ((($tmp = ($context["pagination"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 91
                yield "            <div class=\"mr-orders__pages\">";
                yield ($context["pagination"] ?? null);
                yield "</div>
          ";
            }
            // line 93
            yield "        ";
        } else {
            // line 94
            yield "          <div class=\"mr-orders__empty\">Заказов пока нет</div>
        ";
        }
        // line 96
        yield "      </div>
    </div>
    ";
        // line 98
        yield ($context["content_bottom"] ?? null);
        yield "
  </div>
</div>
";
        // line 101
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
        return "catalog/view/template/account/order_list.twig";
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
        return array (  361 => 101,  355 => 98,  351 => 96,  347 => 94,  344 => 93,  338 => 91,  336 => 90,  333 => 89,  325 => 86,  319 => 84,  317 => 83,  313 => 82,  309 => 80,  303 => 78,  300 => 77,  293 => 75,  285 => 73,  283 => 72,  276 => 71,  272 => 70,  267 => 68,  262 => 65,  251 => 63,  247 => 62,  238 => 60,  234 => 58,  224 => 56,  222 => 55,  218 => 54,  211 => 52,  204 => 50,  197 => 49,  193 => 48,  190 => 47,  188 => 46,  183 => 43,  168 => 41,  164 => 40,  153 => 34,  147 => 33,  141 => 32,  134 => 28,  127 => 24,  123 => 23,  119 => 22,  115 => 21,  111 => 20,  103 => 15,  99 => 13,  84 => 11,  76 => 9,  70 => 7,  68 => 6,  65 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-order\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\">
        {% if loop.last %}
          <span>{{ breadcrumb.text }}</span>
        {% else %}
          <a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a>
        {% endif %}
      </li>
    {% endfor %}
  </ul>
  <div id=\"content\">
    {{ content_top }}
    <h1>Заказы</h1>
    <div class=\"mr-private\">
      <nav aria-label=\"Кабинет\">
        <ul class=\"mr-private__menu\">
          <li><a href=\"{{ account }}\">Мой кабинет</a></li>
          <li><a href=\"{{ edit }}\">Личные данные</a></li>
          <li><a class=\"is-active\" href=\"{{ order }}\" aria-current=\"page\">Заказы</a></li>
          <li><a href=\"{{ wishlist }}\">Избранные товары</a></li>
          <li><a href=\"{{ logout }}\">Выйти</a></li>
        </ul>
      </nav>
      <div class=\"mr-private__main\">
        <form class=\"mr-orders__filters\" action=\"{{ action }}\" method=\"get\">
          <label>
            <select name=\"filter_status\" onchange=\"this.form.submit()\">
              <option value=\"\">Любой статус заказа</option>
              <option value=\"7\"{% if filter_status == '7' %} selected{% endif %}>Отменен</option>
              <option value=\"5\"{% if filter_status == '5' %} selected{% endif %}>Выполнен</option>
              <option value=\"1\"{% if filter_status == '1' %} selected{% endif %}>Ожидает оплату</option>
            </select>
          </label>
          <label>
            <select name=\"filter_year\" onchange=\"this.form.submit()\">
              <option value=\"\">За все время</option>
              {% for year in years %}
                <option value=\"{{ year }}\"{% if filter_year == year %} selected{% endif %}>{{ year }}</option>
              {% endfor %}
            </select>
          </label>
        </form>
        {% if orders %}
          <div class=\"mr-orders\">
            {% for order in orders %}
              <article class=\"mr-order-card{% if order.status_done %} is-done{% endif %}\">
                <a class=\"mr-order-card__cover\" href=\"{{ order.view }}\" aria-label=\"Заказ от {{ order.date }}\"></a>
                <div class=\"mr-order-card__info\">
                  <a class=\"mr-order-card__date\" href=\"{{ order.view }}\">Заказ от {{ order.date }}</a>
                  <div class=\"mr-order-card__meta\">
                    <span>№{{ order.order_id }}</span>
                    {% if order.pay_text %}
                      <span class=\"mr-order-card__pay{% if not order.paid %} is-wait{% endif %}\">{{ order.pay_text }}</span>
                    {% endif %}
                  </div>
                  <div class=\"mr-order-card__status\">
                    <span class=\"mr-order-card__state{% if order.status_done %} is-done{% endif %}\">{{ order.status_label }}</span>
                    <span class=\"mr-order-card__steps\" aria-hidden=\"true\">
                      {% for step in 1..4 %}
                        <i{% if step <= order.step %} class=\"is-on\"{% endif %}></i>
                      {% endfor %}
                    </span>
                  </div>
                </div>
                <div class=\"mr-order-card__sum\">{{ order.total }}</div>
                <div class=\"mr-order-card__photos\">
                  {% for product in order.products %}
                    <a href=\"{{ product.href }}\" title=\"{{ product.name }}\">
                      {% if product.thumb %}
                        <img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\">
                      {% endif %}
                    </a>
                  {% endfor %}
                  {% if order.more %}
                    <span>+{{ order.more }}</span>
                  {% endif %}
                </div>
                <div class=\"mr-order-card__actions\">
                  <a class=\"mr-order-card__repeat\" href=\"{{ order.reorder }}\">Повторить заказ</a>
                  {% if order.can_cancel %}
                    <a class=\"mr-order-card__cancel\" href=\"{{ order.cancel }}\">Отменить заказ</a>
                  {% endif %}
                </div>
              </article>
            {% endfor %}
          </div>
          {% if pagination %}
            <div class=\"mr-orders__pages\">{{ pagination }}</div>
          {% endif %}
        {% else %}
          <div class=\"mr-orders__empty\">Заказов пока нет</div>
        {% endif %}
      </div>
    </div>
    {{ content_bottom }}
  </div>
</div>
{{ footer }}
", "catalog/view/template/account/order_list.twig", "/pub/www/app/public/catalog/view/template/account/order_list.twig");
    }
}
