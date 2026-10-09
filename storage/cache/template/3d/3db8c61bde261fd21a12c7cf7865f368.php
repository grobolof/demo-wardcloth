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

/* catalog/view/template/product/compare.twig */
class __TwigTemplate_11cb8bfcad8b2c17dee6e7f09acf558d extends Template
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
<div id=\"product-compare\" class=\"container\">
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
  ";
        // line 8
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ";
            yield ($context["success"] ?? null);
            yield "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
  ";
        }
        // line 13
        yield "  <div class=\"row\">";
        yield ($context["column_left"] ?? null);
        yield "
    <div id=\"content\" class=\"col\">";
        // line 14
        yield ($context["content_top"] ?? null);
        yield "
      <h1>";
        // line 15
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      ";
        // line 16
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td colspan=\"";
            // line 20
            yield (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null)) + 1);
            yield "\"><strong>";
            yield ($context["text_product"] ?? null);
            yield "</strong></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>";
            // line 25
            yield ($context["text_name"] ?? null);
            yield "</td>
              ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 27
                yield "                <td><a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 27);
                yield "\"><strong>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 27);
                yield "</strong></a></td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "            </tr>
            <tr>
              <td>";
            // line 31
            yield ($context["text_image"] ?? null);
            yield "</td>
              ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 33
                yield "                <td class=\"text-center\">";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " <img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 33);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 33);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 33);
                    yield "\" class=\"img-thumbnail\"/> ";
                }
                yield "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "            </tr>
            <tr>
              <td>";
            // line 37
            yield ($context["text_price"] ?? null);
            yield "</td>
              ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 39
                yield "                <td>";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 40
                    yield "                    ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 40);
                    yield "
                  ";
                } else {
                    // line 42
                    yield "                    <span class=\"price-new\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 42);
                    yield "</span> <span class=\"price-old\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 42);
                    yield "</span>
                  ";
                }
                // line 43
                yield "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield "            </tr>
            <tr>
              <td>";
            // line 47
            yield ($context["text_model"] ?? null);
            yield "</td>
              ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 49
                yield "                <td>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 49);
                yield "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "            </tr>
            <tr>
              <td>";
            // line 53
            yield ($context["text_manufacturer"] ?? null);
            yield "</td>
              ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 55
                yield "                <td>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 55);
                yield "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            yield "            </tr>
            <tr>
              <td>";
            // line 59
            yield ($context["text_availability"] ?? null);
            yield "</td>
              ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 61
                yield "                <td>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "availability", [], "any", false, false, false, 61);
                yield "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            yield "            </tr>
            ";
            // line 64
            if ((($tmp = ($context["review_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 65
                yield "              <tr>
                <td>";
                // line 66
                yield ($context["text_rating"] ?? null);
                yield "</td>
                ";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 68
                    yield "                  <td class=\"rating\">
                    ";
                    // line 69
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 70
                        yield "                      ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 70) < $context["i"])) {
                            // line 71
                            yield "                        <span class=\"fa-stack\"><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                      ";
                        } else {
                            // line 73
                            yield "                        <span class=\"fa-stack\"><i class=\"fa-solid fa-star fa-stack-1x\"></i><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                      ";
                        }
                        // line 75
                        yield "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 76
                    yield "                    <br/>
                    ";
                    // line 77
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 77);
                    yield "
                  </td>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                yield "              </tr>
            ";
            }
            // line 82
            yield "            <tr>
              <td>";
            // line 83
            yield ($context["text_summary"] ?? null);
            yield "</td>
              ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 85
                yield "                <td class=\"description\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 85);
                yield "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            yield "            </tr>
            <tr>
              <td>";
            // line 89
            yield ($context["text_weight"] ?? null);
            yield "</td>
              ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 91
                yield "                <td>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "weight", [], "any", false, false, false, 91);
                yield "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            yield "            </tr>
            <tr>
              <td>";
            // line 95
            yield ($context["text_dimension"] ?? null);
            yield "</td>
              ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 97
                yield "                <td>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "length", [], "any", false, false, false, 97);
                yield " x ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 97);
                yield " x ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 97);
                yield "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            yield " </tr>
          </tbody>
          ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 101
                yield "            <thead>
              <tr>
                <td colspan=\"";
                // line 103
                yield (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null)) + 1);
                yield "\"><strong>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 103);
                yield "</strong></td>
              </tr>
            </thead>
            ";
                // line 106
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 106));
                foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                    // line 107
                    yield "              <tbody>
                <tr>
                  <td>";
                    // line 109
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 109);
                    yield "</td>
                  ";
                    // line 110
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 111
                        yield "                    <td>";
                        if ((($tmp = (($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 111)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[$context["key"]] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield (($_v1 = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 111)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[$context["key"]] ?? null) : null);
                        }
                        yield "</td>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 113
                    yield "                </tr>
              </tbody>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['attribute'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 116
                yield "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['attribute_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            yield "          <tr>
            <td></td>
            ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 120
                yield "              <td class=\"text-center\">
                <form action=\"";
                // line 121
                yield ($context["cart_add"] ?? null);
                yield "\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                yield ($context["cart"] ?? null);
                yield "\" data-oc-target=\"#cart\">
                  <button type=\"submit\" id=\"button-confirm\" class=\"btn btn-primary btn-block\">";
                // line 122
                yield ($context["button_cart"] ?? null);
                yield "</button>
                  <input type=\"hidden\" name=\"product_id\" value=\"";
                // line 123
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 123);
                yield "\"/> <input type=\"hidden\" name=\"quantity\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 123);
                yield "\"/>
                  <a href=\"";
                // line 124
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 124);
                yield "\" class=\"btn btn-danger btn-block\">";
                yield ($context["button_remove"] ?? null);
                yield "</a>
                </form>
              </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            yield "          </tr>
        </table>
      ";
        } else {
            // line 131
            yield "        <p>";
            yield ($context["text_no_results"] ?? null);
            yield "</p>
        <div class=\"text-end\"><a href=\"";
            // line 132
            yield ($context["continue"] ?? null);
            yield "\" class=\"btn btn-primary\">Продолжить</a></div>
      ";
        }
        // line 134
        yield "      ";
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 135
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 137
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
        return "catalog/view/template/product/compare.twig";
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
        return array (  500 => 137,  495 => 135,  490 => 134,  485 => 132,  480 => 131,  475 => 128,  463 => 124,  457 => 123,  453 => 122,  447 => 121,  444 => 120,  440 => 119,  436 => 117,  430 => 116,  422 => 113,  411 => 111,  407 => 110,  403 => 109,  399 => 107,  395 => 106,  387 => 103,  383 => 101,  379 => 100,  375 => 98,  362 => 97,  358 => 96,  354 => 95,  350 => 93,  341 => 91,  337 => 90,  333 => 89,  329 => 87,  320 => 85,  316 => 84,  312 => 83,  309 => 82,  305 => 80,  296 => 77,  293 => 76,  287 => 75,  283 => 73,  279 => 71,  276 => 70,  272 => 69,  269 => 68,  265 => 67,  261 => 66,  258 => 65,  256 => 64,  253 => 63,  244 => 61,  240 => 60,  236 => 59,  232 => 57,  223 => 55,  219 => 54,  215 => 53,  211 => 51,  202 => 49,  198 => 48,  194 => 47,  190 => 45,  183 => 43,  175 => 42,  169 => 40,  166 => 39,  162 => 38,  158 => 37,  154 => 35,  137 => 33,  133 => 32,  129 => 31,  125 => 29,  114 => 27,  110 => 26,  106 => 25,  96 => 20,  91 => 17,  89 => 16,  85 => 15,  81 => 14,  76 => 13,  68 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"product-compare\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  {% if success %}
    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> {{ success }}
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
  {% endif %}
  <div class=\"row\">{{ column_left }}
    <div id=\"content\" class=\"col\">{{ content_top }}
      <h1>{{ heading_title }}</h1>
      {% if products %}
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td colspan=\"{{ products|length + 1 }}\"><strong>{{ text_product }}</strong></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{ text_name }}</td>
              {% for product in products %}
                <td><a href=\"{{ product.href }}\"><strong>{{ product.name }}</strong></a></td>
              {% endfor %}
            </tr>
            <tr>
              <td>{{ text_image }}</td>
              {% for product in products %}
                <td class=\"text-center\">{% if product.thumb %} <img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" title=\"{{ product.name }}\" class=\"img-thumbnail\"/> {% endif %}</td>
              {% endfor %}
            </tr>
            <tr>
              <td>{{ text_price }}</td>
              {% for product in products %}
                <td>{% if not product.special %}
                    {{ product.price }}
                  {% else %}
                    <span class=\"price-new\">{{ product.special }}</span> <span class=\"price-old\">{{ product.price }}</span>
                  {% endif %}</td>
              {% endfor %}
            </tr>
            <tr>
              <td>{{ text_model }}</td>
              {% for product in products %}
                <td>{{ product.model }}</td>
              {% endfor %}
            </tr>
            <tr>
              <td>{{ text_manufacturer }}</td>
              {% for product in products %}
                <td>{{ product.manufacturer }}</td>
              {% endfor %}
            </tr>
            <tr>
              <td>{{ text_availability }}</td>
              {% for product in products %}
                <td>{{ product.availability }}</td>
              {% endfor %}
            </tr>
            {% if review_status %}
              <tr>
                <td>{{ text_rating }}</td>
                {% for product in products %}
                  <td class=\"rating\">
                    {% for i in 1..5 %}
                      {% if product.rating < i %}
                        <span class=\"fa-stack\"><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                      {% else %}
                        <span class=\"fa-stack\"><i class=\"fa-solid fa-star fa-stack-1x\"></i><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                      {% endif %}
                    {% endfor %}
                    <br/>
                    {{ product.reviews }}
                  </td>
                {% endfor %}
              </tr>
            {% endif %}
            <tr>
              <td>{{ text_summary }}</td>
              {% for product in products %}
                <td class=\"description\">{{ product.description }}</td>
              {% endfor %}
            </tr>
            <tr>
              <td>{{ text_weight }}</td>
              {% for product in products %}
                <td>{{ product.weight }}</td>
              {% endfor %}
            </tr>
            <tr>
              <td>{{ text_dimension }}</td>
              {% for product in products %}
                <td>{{ product.length }} x {{ product.width }} x {{ product.height }}</td>
              {% endfor %} </tr>
          </tbody>
          {% for attribute_group in attribute_groups %}
            <thead>
              <tr>
                <td colspan=\"{{ products|length + 1 }}\"><strong>{{ attribute_group.name }}</strong></td>
              </tr>
            </thead>
            {% for key, attribute in attribute_group.attribute %}
              <tbody>
                <tr>
                  <td>{{ attribute.name }}</td>
                  {% for product in products %}
                    <td>{% if product.attribute[key] %}{{ product.attribute[key] }}{% endif %}</td>
                  {% endfor %}
                </tr>
              </tbody>
            {% endfor %}
          {% endfor %}
          <tr>
            <td></td>
            {% for product in products %}
              <td class=\"text-center\">
                <form action=\"{{ cart_add }}\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ cart }}\" data-oc-target=\"#cart\">
                  <button type=\"submit\" id=\"button-confirm\" class=\"btn btn-primary btn-block\">{{ button_cart }}</button>
                  <input type=\"hidden\" name=\"product_id\" value=\"{{ product.product_id }}\"/> <input type=\"hidden\" name=\"quantity\" value=\"{{ product.minimum }}\"/>
                  <a href=\"{{ product.remove }}\" class=\"btn btn-danger btn-block\">{{ button_remove }}</a>
                </form>
              </td>
            {% endfor %}
          </tr>
        </table>
      {% else %}
        <p>{{ text_no_results }}</p>
        <div class=\"text-end\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">Продолжить</a></div>
      {% endif %}
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }} 
", "catalog/view/template/product/compare.twig", "/pub/www/app/public/catalog/view/template/product/compare.twig");
    }
}
