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

/* catalog/view/template/product/category.twig */
class __TwigTemplate_10a72d8ef079e31d61c922c445785617 extends Template
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
<div id=\"product-category\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            yield "      <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "  </ul>
  <div class=\"row\">";
        // line 8
        yield ($context["column_left"] ?? null);
        yield "
    <div id=\"content\" class=\"col\">";
        // line 9
        yield ($context["content_top"] ?? null);
        yield "
      <h1>";
        // line 10
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      ";
        // line 11
        if ((($tmp = ($context["brands"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "        <div class=\"mr-brand-filter\" aria-label=\"Бренды\">
          ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["brands"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
                // line 14
                yield "            <a class=\"mr-brand-filter__item";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["brand"], "active", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " is-active";
                }
                yield "\" href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["brand"], "href", [], "any", false, false, false, 14);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["brand"], "name", [], "any", false, false, false, 14);
                yield "</a>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['brand'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            yield "        </div>
      ";
        }
        // line 18
        yield "      ";
        if ((($context["image"] ?? null) || (($context["description"] ?? null) &&  !($context["brands"] ?? null)))) {
            // line 19
            yield "        <div class=\"row\">
          ";
            // line 20
            if ((($tmp = ($context["image"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 21
                yield "            <div class=\"col-3\"><img src=\"";
                yield ($context["image"] ?? null);
                yield "\" alt=\"";
                yield ($context["heading_title"] ?? null);
                yield "\" title=\"";
                yield ($context["heading_title"] ?? null);
                yield "\" class=\"img-thumbnail\"/></div>
          ";
            }
            // line 23
            yield "          ";
            if ((($context["description"] ?? null) &&  !($context["brands"] ?? null))) {
                // line 24
                yield "            <div class=\"col-9\">";
                yield ($context["description"] ?? null);
                yield "</div>
          ";
            }
            // line 26
            yield "        </div>
        <hr/>
      ";
        }
        // line 29
        yield "
      ";
        // line 30
        if ((($tmp = ($context["categories"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "        <h3>";
            yield ($context["text_refine"] ?? null);
            yield "</h3>
        ";
            // line 32
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["categories"] ?? null)) <= 5)) {
                // line 33
                yield "          <div class=\"row\">
            <div class=\"col-sm-3\">
              <ul>
                ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 37
                    yield "                  <li><a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 37);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 37);
                    yield "</a></li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                yield "              </ul>
            </div>
          </div>
        ";
            } else {
                // line 43
                yield "          <div class=\"row row-cols-sm-2 row-cols-lg-4\">
            ";
                // line 44
                $context["total"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "children", [], "any", false, false, false, 44));
                // line 45
                yield "            ";
                if ((($context["total"] ?? null) > 20)) {
                    // line 46
                    yield "              ";
                    $context["batch"] = Twig\Extension\CoreExtension::round((($context["total"] ?? null) / 4), 0, "ceil");
                    // line 47
                    yield "            ";
                } else {
                    // line 48
                    yield "              ";
                    $context["batch"] = 5;
                    // line 49
                    yield "            ";
                }
                // line 50
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::batch(($context["categories"] ?? null), ($context["batch"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 51
                    yield "              <div class=\"col\">
                <ul>
                  ";
                    // line 53
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 54
                        yield "                    <li><a href=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 54);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 54);
                        yield "</a></li>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 56
                    yield "                </ul>
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                yield "          </div>
          <br/>
        ";
            }
            // line 62
            yield "      ";
        }
        // line 63
        yield "
      ";
        // line 64
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 65
            yield "        <div class=\"row\">
          <div class=\"col-lg-1 d-none d-lg-block\">
            <div class=\"btn-group\">
              <button type=\"button\" id=\"button-list\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"";
            // line 68
            yield ($context["button_list"] ?? null);
            yield "\"><i class=\"fa-solid fa-table-list\"></i></button>
              <button type=\"button\" id=\"button-grid\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"";
            // line 69
            yield ($context["button_grid"] ?? null);
            yield "\"><i class=\"fa-solid fa-table-cells\"></i></button>
            </div>
          </div>
          <div class=\"col-lg-4 offset-lg-4 col-6\">
            <div class=\"input-group mb-3\">
              <label for=\"input-sort\" class=\"input-group-text\">";
            // line 74
            yield ($context["text_sort"] ?? null);
            yield "</label>
              <select id=\"input-sort\" class=\"form-select\" onchange=\"location = this.value;\">
                ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 77
                yield "                  <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 77);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 77) == Twig\Extension\CoreExtension::sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 77);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['sorts'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            yield "              </select>
            </div>
          </div>
          <div class=\"col-lg-3 col-6\">
            <div class=\"input-group mb-3\">
              <label for=\"input-limit\" class=\"input-group-text\">";
            // line 84
            yield ($context["text_limit"] ?? null);
            yield "</label>
              <select id=\"input-limit\" class=\"form-select\" onchange=\"location = this.value;\">
                ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 87
                yield "                  <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 87);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 87) == ($context["limit"] ?? null))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 87);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['limits'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            yield "              </select>
            </div>
          </div>
        </div>

        <div id=\"product-list\" class=\"row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4\">
          ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 96
                yield "            <div class=\"col mb-3\">";
                yield $context["product"];
                yield "</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            yield "        </div>

        <div class=\"row\">
          <div class=\"col-sm-6 text-start\">";
            // line 101
            yield ($context["pagination"] ?? null);
            yield "</div>
          <div class=\"col-sm-6 text-end\">";
            // line 102
            yield ($context["results"] ?? null);
            yield "</div>
        </div>
      ";
        }
        // line 105
        yield "      ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 106
            yield "        <p>";
            yield ($context["text_no_results"] ?? null);
            yield "</p>
        <div class=\"text-end\"><a href=\"";
            // line 107
            yield ($context["continue"] ?? null);
            yield "\" class=\"btn btn-primary\">";
            yield ($context["button_continue"] ?? null);
            yield "</a></div>
      ";
        }
        // line 109
        yield "      ";
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 110
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 112
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
        return "catalog/view/template/product/category.twig";
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
        return array (  374 => 112,  369 => 110,  364 => 109,  357 => 107,  352 => 106,  349 => 105,  343 => 102,  339 => 101,  334 => 98,  325 => 96,  321 => 95,  313 => 89,  298 => 87,  294 => 86,  289 => 84,  282 => 79,  267 => 77,  263 => 76,  258 => 74,  250 => 69,  246 => 68,  241 => 65,  239 => 64,  236 => 63,  233 => 62,  228 => 59,  220 => 56,  209 => 54,  205 => 53,  201 => 51,  196 => 50,  193 => 49,  190 => 48,  187 => 47,  184 => 46,  181 => 45,  179 => 44,  176 => 43,  170 => 39,  159 => 37,  155 => 36,  150 => 33,  148 => 32,  143 => 31,  141 => 30,  138 => 29,  133 => 26,  127 => 24,  124 => 23,  114 => 21,  112 => 20,  109 => 19,  106 => 18,  102 => 16,  87 => 14,  83 => 13,  80 => 12,  78 => 11,  74 => 10,  70 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"product-category\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  <div class=\"row\">{{ column_left }}
    <div id=\"content\" class=\"col\">{{ content_top }}
      <h1>{{ heading_title }}</h1>
      {% if brands %}
        <div class=\"mr-brand-filter\" aria-label=\"Бренды\">
          {% for brand in brands %}
            <a class=\"mr-brand-filter__item{% if brand.active %} is-active{% endif %}\" href=\"{{ brand.href }}\">{{ brand.name }}</a>
          {% endfor %}
        </div>
      {% endif %}
      {% if image or (description and not brands) %}
        <div class=\"row\">
          {% if image %}
            <div class=\"col-3\"><img src=\"{{ image }}\" alt=\"{{ heading_title }}\" title=\"{{ heading_title }}\" class=\"img-thumbnail\"/></div>
          {% endif %}
          {% if description and not brands %}
            <div class=\"col-9\">{{ description }}</div>
          {% endif %}
        </div>
        <hr/>
      {% endif %}

      {% if categories %}
        <h3>{{ text_refine }}</h3>
        {% if categories|length <= 5 %}
          <div class=\"row\">
            <div class=\"col-sm-3\">
              <ul>
                {% for category in categories %}
                  <li><a href=\"{{ category.href }}\">{{ category.name }}</a></li>
                {% endfor %}
              </ul>
            </div>
          </div>
        {% else %}
          <div class=\"row row-cols-sm-2 row-cols-lg-4\">
            {% set total = category.children|length %}
            {% if total > 20 %}
              {% set batch = (total / 4)|round(0, 'ceil') %}
            {% else %}
              {% set batch = 5 %}
            {% endif %}
            {% for category in categories|batch(batch) %}
              <div class=\"col\">
                <ul>
                  {% for child in category %}
                    <li><a href=\"{{ child.href }}\">{{ child.name }}</a></li>
                  {% endfor %}
                </ul>
              </div>
            {% endfor %}
          </div>
          <br/>
        {% endif %}
      {% endif %}

      {% if products %}
        <div class=\"row\">
          <div class=\"col-lg-1 d-none d-lg-block\">
            <div class=\"btn-group\">
              <button type=\"button\" id=\"button-list\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"{{ button_list }}\"><i class=\"fa-solid fa-table-list\"></i></button>
              <button type=\"button\" id=\"button-grid\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\" title=\"{{ button_grid }}\"><i class=\"fa-solid fa-table-cells\"></i></button>
            </div>
          </div>
          <div class=\"col-lg-4 offset-lg-4 col-6\">
            <div class=\"input-group mb-3\">
              <label for=\"input-sort\" class=\"input-group-text\">{{ text_sort }}</label>
              <select id=\"input-sort\" class=\"form-select\" onchange=\"location = this.value;\">
                {% for sorts in sorts %}
                  <option value=\"{{ sorts.href }}\"{% if sorts.value == '%s-%s'|format(sort, order) %} selected{% endif %}>{{ sorts.text }}</option>
                {% endfor %}
              </select>
            </div>
          </div>
          <div class=\"col-lg-3 col-6\">
            <div class=\"input-group mb-3\">
              <label for=\"input-limit\" class=\"input-group-text\">{{ text_limit }}</label>
              <select id=\"input-limit\" class=\"form-select\" onchange=\"location = this.value;\">
                {% for limits in limits %}
                  <option value=\"{{ limits.href }}\"{% if limits.value == limit %} selected{% endif %}>{{ limits.text }}</option>
                {% endfor %}
              </select>
            </div>
          </div>
        </div>

        <div id=\"product-list\" class=\"row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4\">
          {% for product in products %}
            <div class=\"col mb-3\">{{ product }}</div>
          {% endfor %}
        </div>

        <div class=\"row\">
          <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
          <div class=\"col-sm-6 text-end\">{{ results }}</div>
        </div>
      {% endif %}
      {% if not categories and not products %}
        <p>{{ text_no_results }}</p>
        <div class=\"text-end\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
      {% endif %}
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}
", "catalog/view/template/product/category.twig", "/pub/www/app/public/catalog/view/template/product/category.twig");
    }
}
