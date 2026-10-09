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

/* catalog/view/template/product/product.twig */
class __TwigTemplate_2a916ca8d6b49287f9d79dc3967f85c2 extends Template
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
<div id=\"product-info\" class=\"container\">
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
  <div id=\"content\" class=\"mr-pdp\">
    ";
        // line 9
        yield ($context["content_top"] ?? null);
        yield "
    <div class=\"mr-pdp__top\">
      <div class=\"mr-pdp__gallery\" id=\"mr-gallery\">
        ";
        // line 12
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["gallery"] ?? null)) > 1)) {
            // line 13
            yield "          <div class=\"mr-pdp__thumbs\">
            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["gallery"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 15
                yield "              <button type=\"button\" class=\"mr-pdp__thumb";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " is-active";
                }
                yield "\" data-preview=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "preview", [], "any", false, false, false, 15);
                yield "\" data-popup=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 15);
                yield "\">
                <img src=\"";
                // line 16
                yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 16);
                yield "\" alt=\"";
                yield ($context["heading_title"] ?? null);
                yield "\"/>
              </button>
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
            unset($context['_seq'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "          </div>
        ";
        }
        // line 21
        yield "        ";
        if ((($tmp = ($context["thumb"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "          <a class=\"mr-pdp__photo\" id=\"mr-photo\" href=\"";
            yield ($context["popup"] ?? null);
            yield "\" title=\"";
            yield ($context["heading_title"] ?? null);
            yield "\">
            <img id=\"mr-photo-img\" src=\"";
            // line 23
            yield ($context["thumb"] ?? null);
            yield "\" alt=\"";
            yield ($context["heading_title"] ?? null);
            yield "\" title=\"";
            yield ($context["heading_title"] ?? null);
            yield "\"/>
          </a>
        ";
        }
        // line 26
        yield "      </div>
      <div class=\"mr-pdp__head\">
        ";
        // line 28
        if ((($tmp = ($context["is_new"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "          <span class=\"mr-pdp__badge\">Новинка</span>
        ";
        }
        // line 31
        yield "        <h1>";
        yield ($context["heading_title"] ?? null);
        yield "</h1>
        <div class=\"mr-pdp__meta\">
          <span class=\"mr-pdp__sku\">Арт. ";
        // line 33
        yield ($context["model"] ?? null);
        yield "</span>
          <form class=\"mr-pdp__icons\" method=\"post\" data-oc-toggle=\"ajax\">
            <button type=\"submit\" formaction=\"";
        // line 35
        yield ($context["wishlist_add"] ?? null);
        yield "\" aria-label=\"В избранное\">
              <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M12 19s-7-4.4-7-9a4 4 0 0 1 7-2 4 4 0 0 1 7 2c0 4.6-7 9-7 9z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" stroke-linejoin=\"round\"/></svg>
            </button>
            <button type=\"submit\" formaction=\"";
        // line 38
        yield ($context["compare_add"] ?? null);
        yield "\" aria-label=\"Сравнить\">
              <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M8 4v16M5 7l3-3 3 3M16 20V4M13 17l3 3 3-3\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
            </button>
            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 41
        yield ($context["product_id"] ?? null);
        yield "\"/>
          </form>
        </div>
      </div>
      <div class=\"mr-pdp__details\">
        ";
        // line 46
        if ((($tmp = ($context["preview_attributes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "          <div class=\"mr-pdp__specs\">
            <div class=\"mr-pdp__specs-title\">Характеристики</div>
            ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["preview_attributes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 50
                yield "              <div class=\"mr-pdp__spec\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 50);
                yield " — ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 50);
                yield "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['attribute'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            yield "            <a class=\"mr-pdp__more\" href=\"#tab-specification\">Все характеристики</a>
          </div>
        ";
        }
        // line 55
        yield "        ";
        if ((($tmp = ($context["short_description"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 56
            yield "          <p class=\"mr-pdp__lead\">";
            yield ($context["short_description"] ?? null);
            yield "</p>
        ";
        }
        // line 58
        yield "        ";
        if ((($context["manufacturer"] ?? null) || ($context["category_href"] ?? null))) {
            // line 59
            yield "          <div class=\"mr-pdp__brand\">
            ";
            // line 60
            if ((($tmp = ($context["manufacturer"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 61
                yield "              <div class=\"mr-pdp__brand-name\">";
                yield ($context["manufacturer"] ?? null);
                yield "</div>
            ";
            }
            // line 63
            yield "            <div class=\"mr-pdp__pills\">
              ";
            // line 64
            if ((($tmp = ($context["manufacturer"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 65
                yield "                <a class=\"mr-pdp__pill\" href=\"";
                yield ($context["manufacturers"] ?? null);
                yield "\">Все товары ";
                yield ($context["manufacturer"] ?? null);
                yield "</a>
              ";
            }
            // line 67
            yield "              ";
            if ((($tmp = ($context["category_href"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 68
                yield "                <a class=\"mr-pdp__pill\" href=\"";
                yield ($context["category_href"] ?? null);
                yield "\">Все товары категории</a>
              ";
            }
            // line 70
            yield "            </div>
          </div>
        ";
        }
        // line 73
        yield "      </div>
      <div class=\"mr-pdp__buy\">
        <div class=\"mr-pdp__card\">
          ";
        // line 76
        if ((($tmp = ($context["price"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 77
            yield "            <div class=\"mr-pdp__price\">
              ";
            // line 78
            if ((($tmp =  !($context["special"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 79
                yield "                <span>";
                yield ($context["price"] ?? null);
                yield "</span>
              ";
            } else {
                // line 81
                yield "                <span>";
                yield ($context["special"] ?? null);
                yield "</span>
                <s>";
                // line 82
                yield ($context["price"] ?? null);
                yield "</s>
              ";
            }
            // line 84
            yield "            </div>
          ";
        }
        // line 86
        yield "          <form id=\"form-product\">
            ";
        // line 87
        if ((($tmp = ($context["options"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 88
            yield "              <div class=\"mr-pdp__options\">
                ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 90
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 90) == "select")) {
                    // line 91
                    yield "                    <div class=\"mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield "\">
                      <label for=\"input-option-";
                    // line 92
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 92);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 92);
                    yield "</label>
                      <select name=\"option[";
                    // line 93
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 93);
                    yield "]\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 93);
                    yield "\" class=\"form-select\">
                        <option value=\"\">";
                    // line 94
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                        ";
                    // line 95
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 95));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 96
                        yield "                          <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 96);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 96);
                        yield "
                            ";
                        // line 97
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 97)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 98
                            yield "                              (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 98);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 98);
                            yield ")
                            ";
                        }
                        // line 99
                        yield "</option>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 101
                    yield "                      </select>
                      <div id=\"error-option-";
                    // line 102
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 102);
                    yield "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 105
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 105) == "radio")) {
                    // line 106
                    yield "                    <div class=\"mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 106)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield "\">
                      <label class=\"form-label\">";
                    // line 107
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 107);
                    yield "</label>
                      <div id=\"input-option-";
                    // line 108
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 108);
                    yield "\">
                        ";
                    // line 109
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 109));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 110
                        yield "                          <div class=\"form-check\">
                            <input type=\"radio\" name=\"option[";
                        // line 111
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 111);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 111);
                        yield "\" id=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 111);
                        yield "\" class=\"form-check-input\"/>
                            <label for=\"input-option-value-";
                        // line 112
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 112);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 112);
                        yield "
                              ";
                        // line 113
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 114
                            yield "                                (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 114);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 114);
                            yield ")
                              ";
                        }
                        // line 115
                        yield "</label>
                          </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 118
                    yield "                      </div>
                      <div id=\"error-option-";
                    // line 119
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 119);
                    yield "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 122
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 122) == "checkbox")) {
                    // line 123
                    yield "                    <div class=\"mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 123)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield "\">
                      <label class=\"form-label\">";
                    // line 124
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 124);
                    yield "</label>
                      <div id=\"input-option-";
                    // line 125
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 125);
                    yield "\">
                        ";
                    // line 126
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 126));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 127
                        yield "                          <div class=\"form-check\">
                            <input type=\"checkbox\" name=\"option[";
                        // line 128
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 128);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 128);
                        yield "\" id=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 128);
                        yield "\" class=\"form-check-input\"/>
                            <label for=\"input-option-value-";
                        // line 129
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 129);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 129);
                        yield "
                              ";
                        // line 130
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 131
                            yield "                                (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 131);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 131);
                            yield ")
                              ";
                        }
                        // line 132
                        yield "</label>
                          </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 135
                    yield "                      </div>
                      <div id=\"error-option-";
                    // line 136
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 136);
                    yield "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 139
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 139) == "text")) {
                    // line 140
                    yield "                    <div class=\"mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 140)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield "\">
                      <label for=\"input-option-";
                    // line 141
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 141);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 141);
                    yield "</label>
                      <input type=\"text\" name=\"option[";
                    // line 142
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 142);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 142);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 142);
                    yield "\" class=\"form-control\"/>
                      <div id=\"error-option-";
                    // line 143
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 143);
                    yield "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 146
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 146) == "textarea")) {
                    // line 147
                    yield "                    <div class=\"mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 147)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield "\">
                      <label for=\"input-option-";
                    // line 148
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 148);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 148);
                    yield "</label>
                      <textarea name=\"option[";
                    // line 149
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 149);
                    yield "]\" rows=\"3\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 149);
                    yield "\" class=\"form-control\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 149);
                    yield "</textarea>
                      <div id=\"error-option-";
                    // line 150
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 150);
                    yield "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 153
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            yield "              </div>
            ";
        }
        // line 156
        yield "            ";
        if ((($tmp = ($context["subscription_plans"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 157
            yield "              <div class=\"mb-3 required\">
                <label class=\"form-label\" for=\"input-subscription\">";
            // line 158
            yield ($context["text_subscription"] ?? null);
            yield "</label>
                <select name=\"subscription_plan_id\" id=\"input-subscription\" class=\"form-select\">
                  <option value=\"\">";
            // line 160
            yield ($context["text_select"] ?? null);
            yield "</option>
                  ";
            // line 161
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 162
                yield "                    <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 162);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 162);
                yield "</option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['subscription_plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            yield "                </select>
                <div id=\"error-subscription\" class=\"invalid-feedback\"></div>
              </div>
            ";
        }
        // line 168
        yield "            <input type=\"hidden\" name=\"quantity\" value=\"";
        yield ($context["minimum"] ?? null);
        yield "\" id=\"input-quantity\"/>
            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 169
        yield ($context["product_id"] ?? null);
        yield "\" id=\"input-product-id\"/>
            <div class=\"mr-pdp__actions\">
              <button type=\"submit\" id=\"button-cart\" class=\"mr-pdp__cart\">";
        // line 171
        yield ($context["button_cart"] ?? null);
        yield "</button>
            </div>
            <div id=\"error-quantity\" class=\"form-text\"></div>
            ";
        // line 174
        if ((($context["minimum"] ?? null) > 1)) {
            // line 175
            yield "              <div class=\"alert alert-warning\"><i class=\"fa-solid fa-circle-info\"></i> ";
            yield ($context["text_minimum"] ?? null);
            yield "</div>
            ";
        }
        // line 177
        yield "          </form>
        </div>
        <div class=\"mr-pdp__card mr-pdp__perks\">
          <p class=\"mr-pdp__perk";
        // line 180
        if ((($tmp =  !($context["in_stock"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " is-out";
        }
        yield "\">
            <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><circle cx=\"12\" cy=\"12\" r=\"9\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\"/><path d=\"M8 12.5l2.4 2.4L16.5 9\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
            ";
        // line 182
        yield (((($tmp = ($context["in_stock"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Есть в наличии") : ("Нет в наличии"));
        yield "
          </p>
          <a class=\"mr-pdp__perk\" href=\"";
        // line 184
        yield ($context["warranty"] ?? null);
        yield "\">
            <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\"/><path d=\"M12 11v5M12 8h.01\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" stroke-linecap=\"round\"/></svg>
            Гарантия качества
          </a>
        </div>
        <p class=\"mr-pdp__note\">Цена действительна только для интернет-магазина и может отличаться от цены в розничном магазине. Информация о ценах и ассортименте носит исключительно информационный характер и не является публичной офертой.</p>
      </div>
    </div>
    <ul class=\"nav nav-tabs mr-pdp__tabs\">
      <li class=\"nav-item\"><a href=\"#tab-specification\" data-bs-toggle=\"tab\" class=\"nav-link active\">Характеристики</a></li>
    </ul>
    <div class=\"tab-content mr-pdp__panes\">
      <div id=\"tab-specification\" class=\"tab-pane fade show active\">
        ";
        // line 197
        if ((($tmp = ($context["attribute_groups"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 198
            yield "          <div class=\"mr-specs\">
            ";
            // line 199
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 200
                yield "              ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 200));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 201
                    yield "                <div class=\"mr-specs__row\">
                  <span>";
                    // line 202
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 202);
                    yield "</span>
                  <span>";
                    // line 203
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 203);
                    yield "</span>
                </div>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['attribute'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 206
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['attribute_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            yield "          </div>
        ";
        } elseif ((($tmp =         // line 208
($context["description"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 209
            yield "          <div class=\"mr-pdp__lead\">";
            yield ($context["description"] ?? null);
            yield "</div>
        ";
        }
        // line 211
        yield "      </div>
    </div>
    ";
        // line 213
        if ((($tmp = ($context["category_href"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 214
            yield "      <a class=\"mr-pdp__back\" href=\"";
            yield ($context["category_href"] ?? null);
            yield "\">Назад к списку</a>
    ";
        }
        // line 216
        yield "    ";
        yield ($context["related"] ?? null);
        yield "
    ";
        // line 217
        yield ($context["content_bottom"] ?? null);
        yield "
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#form-product').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=checkout/cart.add&language=";
        // line 225
        yield ($context["language"] ?? null);
        yield "',
        type: 'post',
        data: \$('#form-product').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        cache: false,
        processData: false,
        beforeSend: function() {
            \$('#button-cart').button('loading');
        },
        complete: function() {
            \$('#button-cart').button('reset');
        },
        success: function(json) {
            \$('#form-product').find('.is-invalid').removeClass('is-invalid');
            \$('#form-product').find('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#cart').load('index.php?route=common/cart.info&language=";
        // line 250
        yield ($context["language"] ?? null);
        yield "');

                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#mr-gallery').on('click', '.mr-pdp__thumb', function() {
    var button = \$(this);

    \$('#mr-photo-img').attr('src', button.data('preview'));
    \$('#mr-photo').attr('href', button.data('popup'));
    button.addClass('is-active').siblings().removeClass('is-active');
});

\$('.mr-pdp__more').on('click', function(e) {
    e.preventDefault();
    var tab = document.querySelector('.mr-pdp__tabs a[href=\"#tab-specification\"]');

    if (tab) {
        bootstrap.Tab.getOrCreateInstance(tab).show();
        tab.scrollIntoView({behavior: 'smooth', block: 'start'});
    }
});

\$(document).ready(function() {
    \$('#mr-photo').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });
});
//--></script>
";
        // line 288
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
        return "catalog/view/template/product/product.twig";
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
        return array (  809 => 288,  768 => 250,  740 => 225,  729 => 217,  724 => 216,  718 => 214,  716 => 213,  712 => 211,  706 => 209,  704 => 208,  701 => 207,  695 => 206,  686 => 203,  682 => 202,  679 => 201,  674 => 200,  670 => 199,  667 => 198,  665 => 197,  649 => 184,  644 => 182,  637 => 180,  632 => 177,  626 => 175,  624 => 174,  618 => 171,  613 => 169,  608 => 168,  602 => 164,  591 => 162,  587 => 161,  583 => 160,  578 => 158,  575 => 157,  572 => 156,  568 => 154,  562 => 153,  556 => 150,  548 => 149,  542 => 148,  535 => 147,  532 => 146,  526 => 143,  518 => 142,  512 => 141,  505 => 140,  502 => 139,  496 => 136,  493 => 135,  485 => 132,  478 => 131,  476 => 130,  470 => 129,  462 => 128,  459 => 127,  455 => 126,  451 => 125,  447 => 124,  440 => 123,  437 => 122,  431 => 119,  428 => 118,  420 => 115,  413 => 114,  411 => 113,  405 => 112,  397 => 111,  394 => 110,  390 => 109,  386 => 108,  382 => 107,  375 => 106,  372 => 105,  366 => 102,  363 => 101,  356 => 99,  349 => 98,  347 => 97,  340 => 96,  336 => 95,  332 => 94,  326 => 93,  320 => 92,  313 => 91,  310 => 90,  306 => 89,  303 => 88,  301 => 87,  298 => 86,  294 => 84,  289 => 82,  284 => 81,  278 => 79,  276 => 78,  273 => 77,  271 => 76,  266 => 73,  261 => 70,  255 => 68,  252 => 67,  244 => 65,  242 => 64,  239 => 63,  233 => 61,  231 => 60,  228 => 59,  225 => 58,  219 => 56,  216 => 55,  211 => 52,  200 => 50,  196 => 49,  192 => 47,  190 => 46,  182 => 41,  176 => 38,  170 => 35,  165 => 33,  159 => 31,  155 => 29,  153 => 28,  149 => 26,  139 => 23,  132 => 22,  129 => 21,  125 => 19,  106 => 16,  95 => 15,  78 => 14,  75 => 13,  73 => 12,  67 => 9,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"product-info\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  <div id=\"content\" class=\"mr-pdp\">
    {{ content_top }}
    <div class=\"mr-pdp__top\">
      <div class=\"mr-pdp__gallery\" id=\"mr-gallery\">
        {% if gallery|length > 1 %}
          <div class=\"mr-pdp__thumbs\">
            {% for image in gallery %}
              <button type=\"button\" class=\"mr-pdp__thumb{% if loop.first %} is-active{% endif %}\" data-preview=\"{{ image.preview }}\" data-popup=\"{{ image.popup }}\">
                <img src=\"{{ image.thumb }}\" alt=\"{{ heading_title }}\"/>
              </button>
            {% endfor %}
          </div>
        {% endif %}
        {% if thumb %}
          <a class=\"mr-pdp__photo\" id=\"mr-photo\" href=\"{{ popup }}\" title=\"{{ heading_title }}\">
            <img id=\"mr-photo-img\" src=\"{{ thumb }}\" alt=\"{{ heading_title }}\" title=\"{{ heading_title }}\"/>
          </a>
        {% endif %}
      </div>
      <div class=\"mr-pdp__head\">
        {% if is_new %}
          <span class=\"mr-pdp__badge\">Новинка</span>
        {% endif %}
        <h1>{{ heading_title }}</h1>
        <div class=\"mr-pdp__meta\">
          <span class=\"mr-pdp__sku\">Арт. {{ model }}</span>
          <form class=\"mr-pdp__icons\" method=\"post\" data-oc-toggle=\"ajax\">
            <button type=\"submit\" formaction=\"{{ wishlist_add }}\" aria-label=\"В избранное\">
              <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M12 19s-7-4.4-7-9a4 4 0 0 1 7-2 4 4 0 0 1 7 2c0 4.6-7 9-7 9z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" stroke-linejoin=\"round\"/></svg>
            </button>
            <button type=\"submit\" formaction=\"{{ compare_add }}\" aria-label=\"Сравнить\">
              <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M8 4v16M5 7l3-3 3 3M16 20V4M13 17l3 3 3-3\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
            </button>
            <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\"/>
          </form>
        </div>
      </div>
      <div class=\"mr-pdp__details\">
        {% if preview_attributes %}
          <div class=\"mr-pdp__specs\">
            <div class=\"mr-pdp__specs-title\">Характеристики</div>
            {% for attribute in preview_attributes %}
              <div class=\"mr-pdp__spec\">{{ attribute.name }} — {{ attribute.text }}</div>
            {% endfor %}
            <a class=\"mr-pdp__more\" href=\"#tab-specification\">Все характеристики</a>
          </div>
        {% endif %}
        {% if short_description %}
          <p class=\"mr-pdp__lead\">{{ short_description }}</p>
        {% endif %}
        {% if manufacturer or category_href %}
          <div class=\"mr-pdp__brand\">
            {% if manufacturer %}
              <div class=\"mr-pdp__brand-name\">{{ manufacturer }}</div>
            {% endif %}
            <div class=\"mr-pdp__pills\">
              {% if manufacturer %}
                <a class=\"mr-pdp__pill\" href=\"{{ manufacturers }}\">Все товары {{ manufacturer }}</a>
              {% endif %}
              {% if category_href %}
                <a class=\"mr-pdp__pill\" href=\"{{ category_href }}\">Все товары категории</a>
              {% endif %}
            </div>
          </div>
        {% endif %}
      </div>
      <div class=\"mr-pdp__buy\">
        <div class=\"mr-pdp__card\">
          {% if price %}
            <div class=\"mr-pdp__price\">
              {% if not special %}
                <span>{{ price }}</span>
              {% else %}
                <span>{{ special }}</span>
                <s>{{ price }}</s>
              {% endif %}
            </div>
          {% endif %}
          <form id=\"form-product\">
            {% if options %}
              <div class=\"mr-pdp__options\">
                {% for option in options %}
                  {% if option.type == 'select' %}
                    <div class=\"mb-3{% if option.required %} required{% endif %}\">
                      <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label>
                      <select name=\"option[{{ option.product_option_id }}]\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-select\">
                        <option value=\"\">{{ text_select }}</option>
                        {% for option_value in option.product_option_value %}
                          <option value=\"{{ option_value.product_option_value_id }}\">{{ option_value.name }}
                            {% if option_value.price %}
                              ({{ option_value.price_prefix }}{{ option_value.price }})
                            {% endif %}</option>
                        {% endfor %}
                      </select>
                      <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                    </div>
                  {% endif %}
                  {% if option.type == 'radio' %}
                    <div class=\"mb-3{% if option.required %} required{% endif %}\">
                      <label class=\"form-label\">{{ option.name }}</label>
                      <div id=\"input-option-{{ option.product_option_id }}\">
                        {% for option_value in option.product_option_value %}
                          <div class=\"form-check\">
                            <input type=\"radio\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option_value.product_option_value_id }}\" id=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-input\"/>
                            <label for=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-label\">{{ option_value.name }}
                              {% if option_value.price %}
                                ({{ option_value.price_prefix }}{{ option_value.price }})
                              {% endif %}</label>
                          </div>
                        {% endfor %}
                      </div>
                      <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                    </div>
                  {% endif %}
                  {% if option.type == 'checkbox' %}
                    <div class=\"mb-3{% if option.required %} required{% endif %}\">
                      <label class=\"form-label\">{{ option.name }}</label>
                      <div id=\"input-option-{{ option.product_option_id }}\">
                        {% for option_value in option.product_option_value %}
                          <div class=\"form-check\">
                            <input type=\"checkbox\" name=\"option[{{ option.product_option_id }}][]\" value=\"{{ option_value.product_option_value_id }}\" id=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-input\"/>
                            <label for=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-label\">{{ option_value.name }}
                              {% if option_value.price %}
                                ({{ option_value.price_prefix }}{{ option_value.price }})
                              {% endif %}</label>
                          </div>
                        {% endfor %}
                      </div>
                      <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                    </div>
                  {% endif %}
                  {% if option.type == 'text' %}
                    <div class=\"mb-3{% if option.required %} required{% endif %}\">
                      <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label>
                      <input type=\"text\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                      <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                    </div>
                  {% endif %}
                  {% if option.type == 'textarea' %}
                    <div class=\"mb-3{% if option.required %} required{% endif %}\">
                      <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label>
                      <textarea name=\"option[{{ option.product_option_id }}]\" rows=\"3\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\">{{ option.value }}</textarea>
                      <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                    </div>
                  {% endif %}
                {% endfor %}
              </div>
            {% endif %}
            {% if subscription_plans %}
              <div class=\"mb-3 required\">
                <label class=\"form-label\" for=\"input-subscription\">{{ text_subscription }}</label>
                <select name=\"subscription_plan_id\" id=\"input-subscription\" class=\"form-select\">
                  <option value=\"\">{{ text_select }}</option>
                  {% for subscription_plan in subscription_plans %}
                    <option value=\"{{ subscription_plan.subscription_plan_id }}\">{{ subscription_plan.name }}</option>
                  {% endfor %}
                </select>
                <div id=\"error-subscription\" class=\"invalid-feedback\"></div>
              </div>
            {% endif %}
            <input type=\"hidden\" name=\"quantity\" value=\"{{ minimum }}\" id=\"input-quantity\"/>
            <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\" id=\"input-product-id\"/>
            <div class=\"mr-pdp__actions\">
              <button type=\"submit\" id=\"button-cart\" class=\"mr-pdp__cart\">{{ button_cart }}</button>
            </div>
            <div id=\"error-quantity\" class=\"form-text\"></div>
            {% if minimum > 1 %}
              <div class=\"alert alert-warning\"><i class=\"fa-solid fa-circle-info\"></i> {{ text_minimum }}</div>
            {% endif %}
          </form>
        </div>
        <div class=\"mr-pdp__card mr-pdp__perks\">
          <p class=\"mr-pdp__perk{% if not in_stock %} is-out{% endif %}\">
            <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><circle cx=\"12\" cy=\"12\" r=\"9\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\"/><path d=\"M8 12.5l2.4 2.4L16.5 9\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
            {{ in_stock ? 'Есть в наличии' : 'Нет в наличии' }}
          </p>
          <a class=\"mr-pdp__perk\" href=\"{{ warranty }}\">
            <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\"/><path d=\"M12 11v5M12 8h.01\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" stroke-linecap=\"round\"/></svg>
            Гарантия качества
          </a>
        </div>
        <p class=\"mr-pdp__note\">Цена действительна только для интернет-магазина и может отличаться от цены в розничном магазине. Информация о ценах и ассортименте носит исключительно информационный характер и не является публичной офертой.</p>
      </div>
    </div>
    <ul class=\"nav nav-tabs mr-pdp__tabs\">
      <li class=\"nav-item\"><a href=\"#tab-specification\" data-bs-toggle=\"tab\" class=\"nav-link active\">Характеристики</a></li>
    </ul>
    <div class=\"tab-content mr-pdp__panes\">
      <div id=\"tab-specification\" class=\"tab-pane fade show active\">
        {% if attribute_groups %}
          <div class=\"mr-specs\">
            {% for attribute_group in attribute_groups %}
              {% for attribute in attribute_group.attribute %}
                <div class=\"mr-specs__row\">
                  <span>{{ attribute.name }}</span>
                  <span>{{ attribute.text }}</span>
                </div>
              {% endfor %}
            {% endfor %}
          </div>
        {% elseif description %}
          <div class=\"mr-pdp__lead\">{{ description }}</div>
        {% endif %}
      </div>
    </div>
    {% if category_href %}
      <a class=\"mr-pdp__back\" href=\"{{ category_href }}\">Назад к списку</a>
    {% endif %}
    {{ related }}
    {{ content_bottom }}
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#form-product').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=checkout/cart.add&language={{ language }}',
        type: 'post',
        data: \$('#form-product').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        cache: false,
        processData: false,
        beforeSend: function() {
            \$('#button-cart').button('loading');
        },
        complete: function() {
            \$('#button-cart').button('reset');
        },
        success: function(json) {
            \$('#form-product').find('.is-invalid').removeClass('is-invalid');
            \$('#form-product').find('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#cart').load('index.php?route=common/cart.info&language={{ language }}');

                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#mr-gallery').on('click', '.mr-pdp__thumb', function() {
    var button = \$(this);

    \$('#mr-photo-img').attr('src', button.data('preview'));
    \$('#mr-photo').attr('href', button.data('popup'));
    button.addClass('is-active').siblings().removeClass('is-active');
});

\$('.mr-pdp__more').on('click', function(e) {
    e.preventDefault();
    var tab = document.querySelector('.mr-pdp__tabs a[href=\"#tab-specification\"]');

    if (tab) {
        bootstrap.Tab.getOrCreateInstance(tab).show();
        tab.scrollIntoView({behavior: 'smooth', block: 'start'});
    }
});

\$(document).ready(function() {
    \$('#mr-photo').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });
});
//--></script>
{{ footer }}
", "catalog/view/template/product/product.twig", "/pub/www/app/public/catalog/view/template/product/product.twig");
    }
}
