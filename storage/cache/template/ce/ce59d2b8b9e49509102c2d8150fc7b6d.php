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
              <option value=\"accepted\"";
        // line 32
        if ((($context["filter_status"] ?? null) == "accepted")) {
            yield " selected";
        }
        yield ">Принят</option>
              <option value=\"processing\"";
        // line 33
        if ((($context["filter_status"] ?? null) == "processing")) {
            yield " selected";
        }
        yield ">Выполняется</option>
              <option value=\"ready\"";
        // line 34
        if ((($context["filter_status"] ?? null) == "ready")) {
            yield " selected";
        }
        yield ">Готов к выдаче</option>
              <option value=\"complete\"";
        // line 35
        if ((($context["filter_status"] ?? null) == "complete")) {
            yield " selected";
        }
        yield ">Выполнен</option>
              <option value=\"canceled\"";
        // line 36
        if ((($context["filter_status"] ?? null) == "canceled")) {
            yield " selected";
        }
        yield ">Отменен</option>
            </select>
          </label>
          <label>
            <select name=\"filter_payed\" onchange=\"this.form.submit()\">
              <option value=\"\">Любой статус оплаты</option>
              <option value=\"N\"";
        // line 42
        if ((($context["filter_payed"] ?? null) == "N")) {
            yield " selected";
        }
        yield ">Не оплачен</option>
              <option value=\"Y\"";
        // line 43
        if ((($context["filter_payed"] ?? null) == "Y")) {
            yield " selected";
        }
        yield ">Оплачен</option>
            </select>
          </label>
          <label>
            <select name=\"filter_year\" onchange=\"this.form.submit()\">
              <option value=\"\">За все время</option>
              ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["years"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 50
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
        // line 52
        yield "            </select>
          </label>
        </form>
        ";
        // line 55
        if ((($tmp = ($context["orders"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 56
            yield "          <div class=\"mr-orders\">
            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 58
                yield "              <article class=\"mr-order-card";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status_done", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " is-done";
                }
                yield "\">
                <a class=\"mr-order-card__cover\" href=\"";
                // line 59
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 59);
                yield "\" aria-label=\"Заказ от ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "date", [], "any", false, false, false, 59);
                yield "\"></a>
                <div class=\"mr-order-card__info\">
                  <a class=\"mr-order-card__date\" href=\"";
                // line 61
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 61);
                yield "\">Заказ от ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "date", [], "any", false, false, false, 61);
                yield "</a>
                  <div class=\"mr-order-card__meta\">
                    <span>№";
                // line 63
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 63);
                yield "</span>
                    ";
                // line 64
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "pay_text", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 65
                    yield "                      <span class=\"mr-order-card__pay";
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["order"], "paid", [], "any", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " is-wait";
                    }
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "pay_text", [], "any", false, false, false, 65);
                    yield "</span>
                    ";
                }
                // line 67
                yield "                  </div>
                  <div class=\"mr-order-card__status\">
                    <span class=\"mr-order-card__state";
                // line 69
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status_done", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " is-done";
                }
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status_label", [], "any", false, false, false, 69);
                yield "</span>
                    <span class=\"mr-order-card__steps\" aria-hidden=\"true\">
                      ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 4));
                foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
                    // line 72
                    yield "                        <i";
                    if (($context["step"] <= CoreExtension::getAttribute($this->env, $this->source, $context["order"], "step", [], "any", false, false, false, 72))) {
                        yield " class=\"is-on\"";
                    }
                    yield "></i>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['step'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                yield "                    </span>
                  </div>
                </div>
                <div class=\"mr-order-card__sum\">";
                // line 77
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 77);
                yield "</div>
                <div class=\"mr-order-card__photos\">
                  ";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "products", [], "any", false, false, false, 79));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 80
                    yield "                    <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 80);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 80);
                    yield "\">
                      ";
                    // line 81
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 82
                        yield "                        <img src=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 82);
                        yield "\" alt=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 82);
                        yield "\">
                      ";
                    }
                    // line 84
                    yield "                    </a>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                yield "                  ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "more", [], "any", false, false, false, 86)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 87
                    yield "                    <span>+";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "more", [], "any", false, false, false, 87);
                    yield "</span>
                  ";
                }
                // line 89
                yield "                </div>
                <div class=\"mr-order-card__actions\">
                  <a class=\"mr-order-card__repeat\" href=\"";
                // line 91
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "reorder", [], "any", false, false, false, 91);
                yield "\">Повторить заказ</a>
                  ";
                // line 92
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "can_cancel", [], "any", false, false, false, 92)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 93
                    yield "                    <a class=\"mr-order-card__cancel\" href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "cancel", [], "any", false, false, false, 93);
                    yield "\">Отменить заказ</a>
                  ";
                }
                // line 95
                yield "                </div>
              </article>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            yield "          </div>
          ";
            // line 99
            if ((($tmp = ($context["pagination"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 100
                yield "            <div class=\"mr-orders__pages\">";
                yield ($context["pagination"] ?? null);
                yield "</div>
          ";
            }
            // line 102
            yield "        ";
        } else {
            // line 103
            yield "          <div class=\"mr-orders__empty\">Заказов пока нет</div>
        ";
        }
        // line 105
        yield "      </div>
    </div>
    ";
        // line 107
        yield ($context["content_bottom"] ?? null);
        yield "
  </div>
</div>
";
        // line 110
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
        return array (  390 => 110,  384 => 107,  380 => 105,  376 => 103,  373 => 102,  367 => 100,  365 => 99,  362 => 98,  354 => 95,  348 => 93,  346 => 92,  342 => 91,  338 => 89,  332 => 87,  329 => 86,  322 => 84,  314 => 82,  312 => 81,  305 => 80,  301 => 79,  296 => 77,  291 => 74,  280 => 72,  276 => 71,  267 => 69,  263 => 67,  253 => 65,  251 => 64,  247 => 63,  240 => 61,  233 => 59,  226 => 58,  222 => 57,  219 => 56,  217 => 55,  212 => 52,  197 => 50,  193 => 49,  182 => 43,  176 => 42,  165 => 36,  159 => 35,  153 => 34,  147 => 33,  141 => 32,  134 => 28,  127 => 24,  123 => 23,  119 => 22,  115 => 21,  111 => 20,  103 => 15,  99 => 13,  84 => 11,  76 => 9,  70 => 7,  68 => 6,  65 => 5,  48 => 4,  42 => 1,);
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
              <option value=\"accepted\"{% if filter_status == 'accepted' %} selected{% endif %}>Принят</option>
              <option value=\"processing\"{% if filter_status == 'processing' %} selected{% endif %}>Выполняется</option>
              <option value=\"ready\"{% if filter_status == 'ready' %} selected{% endif %}>Готов к выдаче</option>
              <option value=\"complete\"{% if filter_status == 'complete' %} selected{% endif %}>Выполнен</option>
              <option value=\"canceled\"{% if filter_status == 'canceled' %} selected{% endif %}>Отменен</option>
            </select>
          </label>
          <label>
            <select name=\"filter_payed\" onchange=\"this.form.submit()\">
              <option value=\"\">Любой статус оплаты</option>
              <option value=\"N\"{% if filter_payed == 'N' %} selected{% endif %}>Не оплачен</option>
              <option value=\"Y\"{% if filter_payed == 'Y' %} selected{% endif %}>Оплачен</option>
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
