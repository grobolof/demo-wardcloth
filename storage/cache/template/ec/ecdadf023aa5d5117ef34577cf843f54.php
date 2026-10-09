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
          <form class=\"mr-pdp__icons\" method=\"post\" data-mr-wishlist>
            <button type=\"submit\" formaction=\"";
        // line 35
        yield ($context["wishlist_add"] ?? null);
        yield "\" aria-label=\"В избранное\" aria-pressed=\"";
        yield (((($tmp = ($context["in_wishlist"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield "\"";
        if ((($tmp = ($context["in_wishlist"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " class=\"is-active\"";
        }
        yield ">
              <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M12 20.2 10.5 18.8C6.4 15.1 3.5 12.5 3.5 9.2 3.5 6.5 5.6 4.4 8.3 4.4c1.5 0 3 .7 3.7 1.8a4.9 4.9 0 0 1 3.7-1.8c2.7 0 4.8 2.1 4.8 4.8 0 3.3-2.9 5.9-7 9.6L12 20.2z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linejoin=\"round\"/></svg>
            </button>
            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 38
        yield ($context["product_id"] ?? null);
        yield "\"/>
          </form>
        </div>
      </div>
      <div class=\"mr-pdp__details\">
        ";
        // line 43
        if ((($tmp = ($context["preview_attributes"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "          <div class=\"mr-pdp__specs\">
            <div class=\"mr-pdp__specs-title\">Характеристики</div>
            ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["preview_attributes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 47
                yield "              <div class=\"mr-pdp__spec\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 47);
                yield " — ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 47);
                yield "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['attribute'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            yield "            <a class=\"mr-pdp__more\" href=\"#tab-specification\">Все характеристики</a>
          </div>
        ";
        }
        // line 52
        yield "        ";
        if ((($tmp = ($context["short_description"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "          <p class=\"mr-pdp__lead\">";
            yield ($context["short_description"] ?? null);
            yield "</p>
        ";
        }
        // line 55
        yield "        ";
        if ((($context["manufacturer"] ?? null) || ($context["category_href"] ?? null))) {
            // line 56
            yield "          <div class=\"mr-pdp__brand\">
            ";
            // line 57
            if ((($tmp = ($context["manufacturer"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 58
                yield "              <div class=\"mr-pdp__brand-name\">";
                yield ($context["manufacturer"] ?? null);
                yield "</div>
            ";
            }
            // line 60
            yield "            <div class=\"mr-pdp__pills\">
              ";
            // line 61
            if ((($tmp = ($context["manufacturer"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 62
                yield "                <a class=\"mr-pdp__pill\" href=\"";
                yield ($context["manufacturers"] ?? null);
                yield "\">Все товары ";
                yield ($context["manufacturer"] ?? null);
                yield "</a>
              ";
            }
            // line 64
            yield "              ";
            if ((($tmp = ($context["category_href"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 65
                yield "                <a class=\"mr-pdp__pill\" href=\"";
                yield ($context["category_href"] ?? null);
                yield "\">Все товары категории</a>
              ";
            }
            // line 67
            yield "            </div>
          </div>
        ";
        }
        // line 70
        yield "      </div>
      <div class=\"mr-pdp__buy\">
        <div class=\"mr-pdp__card\">
          ";
        // line 73
        if ((($tmp = ($context["price"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 74
            yield "            <div class=\"mr-pdp__price\">
              ";
            // line 75
            if ((($tmp =  !($context["special"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 76
                yield "                <span>";
                yield ($context["price"] ?? null);
                yield "</span>
              ";
            } else {
                // line 78
                yield "                <span>";
                yield ($context["special"] ?? null);
                yield "</span>
                <s>";
                // line 79
                yield ($context["price"] ?? null);
                yield "</s>
              ";
            }
            // line 81
            yield "            </div>
          ";
        }
        // line 83
        yield "          <form id=\"form-product\">
            ";
        // line 84
        if ((($tmp = ($context["options"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 85
            yield "              <div class=\"mr-pdp__options\">
                ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 87
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 87) == "select")) {
                    // line 88
                    yield "                    <div class=\"mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield "\">
                      <label for=\"input-option-";
                    // line 89
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 89);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 89);
                    yield "</label>
                      <select name=\"option[";
                    // line 90
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 90);
                    yield "]\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 90);
                    yield "\" class=\"form-select\">
                        <option value=\"\">";
                    // line 91
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                        ";
                    // line 92
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 92));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 93
                        yield "                          <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 93);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 93);
                        yield "
                            ";
                        // line 94
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 95
                            yield "                              (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 95);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 95);
                            yield ")
                            ";
                        }
                        // line 96
                        yield "</option>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 98
                    yield "                      </select>
                      <div id=\"error-option-";
                    // line 99
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 99);
                    yield "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 102
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 102) == "radio")) {
                    // line 103
                    yield "                    <div class=\"mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield "\">
                      <label class=\"form-label\">";
                    // line 104
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 104);
                    yield "</label>
                      <div id=\"input-option-";
                    // line 105
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 105);
                    yield "\">
                        ";
                    // line 106
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 106));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 107
                        yield "                          <div class=\"form-check\">
                            <input type=\"radio\" name=\"option[";
                        // line 108
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 108);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 108);
                        yield "\" id=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 108);
                        yield "\" class=\"form-check-input\"/>
                            <label for=\"input-option-value-";
                        // line 109
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 109);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 109);
                        yield "
                              ";
                        // line 110
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 110)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 111
                            yield "                                (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 111);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 111);
                            yield ")
                              ";
                        }
                        // line 112
                        yield "</label>
                          </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 115
                    yield "                      </div>
                      <div id=\"error-option-";
                    // line 116
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 116);
                    yield "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 119
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 119) == "checkbox")) {
                    // line 120
                    yield "                    <div class=\"mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield "\">
                      <label class=\"form-label\">";
                    // line 121
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 121);
                    yield "</label>
                      <div id=\"input-option-";
                    // line 122
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 122);
                    yield "\">
                        ";
                    // line 123
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 123));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 124
                        yield "                          <div class=\"form-check\">
                            <input type=\"checkbox\" name=\"option[";
                        // line 125
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 125);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 125);
                        yield "\" id=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 125);
                        yield "\" class=\"form-check-input\"/>
                            <label for=\"input-option-value-";
                        // line 126
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 126);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 126);
                        yield "
                              ";
                        // line 127
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 127)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 128
                            yield "                                (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 128);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 128);
                            yield ")
                              ";
                        }
                        // line 129
                        yield "</label>
                          </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 132
                    yield "                      </div>
                      <div id=\"error-option-";
                    // line 133
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 133);
                    yield "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 136
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 136) == "text")) {
                    // line 137
                    yield "                    <div class=\"mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 137)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield "\">
                      <label for=\"input-option-";
                    // line 138
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 138);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 138);
                    yield "</label>
                      <input type=\"text\" name=\"option[";
                    // line 139
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 139);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 139);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 139);
                    yield "\" class=\"form-control\"/>
                      <div id=\"error-option-";
                    // line 140
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 140);
                    yield "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 143
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 143) == "textarea")) {
                    // line 144
                    yield "                    <div class=\"mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 144)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield "\">
                      <label for=\"input-option-";
                    // line 145
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 145);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 145);
                    yield "</label>
                      <textarea name=\"option[";
                    // line 146
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 146);
                    yield "]\" rows=\"3\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 146);
                    yield "\" class=\"form-control\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 146);
                    yield "</textarea>
                      <div id=\"error-option-";
                    // line 147
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 147);
                    yield "\" class=\"invalid-feedback\"></div>
                    </div>
                  ";
                }
                // line 150
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            yield "              </div>
            ";
        }
        // line 153
        yield "            ";
        if ((($tmp = ($context["subscription_plans"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 154
            yield "              <div class=\"mb-3 required\">
                <label class=\"form-label\" for=\"input-subscription\">";
            // line 155
            yield ($context["text_subscription"] ?? null);
            yield "</label>
                <select name=\"subscription_plan_id\" id=\"input-subscription\" class=\"form-select\">
                  <option value=\"\">";
            // line 157
            yield ($context["text_select"] ?? null);
            yield "</option>
                  ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 159
                yield "                    <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 159);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 159);
                yield "</option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['subscription_plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            yield "                </select>
                <div id=\"error-subscription\" class=\"invalid-feedback\"></div>
              </div>
            ";
        }
        // line 165
        yield "            <input type=\"hidden\" name=\"quantity\" value=\"";
        yield ($context["minimum"] ?? null);
        yield "\" id=\"input-quantity\"/>
            <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 166
        yield ($context["product_id"] ?? null);
        yield "\" id=\"input-product-id\"/>
            <div class=\"mr-pdp__actions\">
              <button type=\"submit\" id=\"button-cart\" class=\"mr-pdp__cart\">";
        // line 168
        yield ($context["button_cart"] ?? null);
        yield "</button>
            </div>
            <div id=\"error-quantity\" class=\"form-text\"></div>
            ";
        // line 171
        if ((($context["minimum"] ?? null) > 1)) {
            // line 172
            yield "              <div class=\"alert alert-warning\"><i class=\"fa-solid fa-circle-info\"></i> ";
            yield ($context["text_minimum"] ?? null);
            yield "</div>
            ";
        }
        // line 174
        yield "          </form>
        </div>
        <div class=\"mr-pdp__card mr-pdp__perks\">
          <p class=\"mr-pdp__perk";
        // line 177
        if ((($tmp =  !($context["in_stock"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " is-out";
        }
        yield "\">
            <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><circle cx=\"12\" cy=\"12\" r=\"9\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\"/><path d=\"M8 12.5l2.4 2.4L16.5 9\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
            ";
        // line 179
        yield (((($tmp = ($context["in_stock"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Есть в наличии") : ("Нет в наличии"));
        yield "
          </p>
          <a class=\"mr-pdp__perk\" href=\"";
        // line 181
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
        // line 194
        if ((($tmp = ($context["attribute_groups"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 195
            yield "          <div class=\"mr-specs\">
            ";
            // line 196
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 197
                yield "              ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 197));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 198
                    yield "                <div class=\"mr-specs__row\">
                  <span>";
                    // line 199
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 199);
                    yield "</span>
                  <span>";
                    // line 200
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 200);
                    yield "</span>
                </div>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['attribute'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 203
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['attribute_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            yield "          </div>
        ";
        } elseif ((($tmp =         // line 205
($context["description"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 206
            yield "          <div class=\"mr-pdp__lead\">";
            yield ($context["description"] ?? null);
            yield "</div>
        ";
        }
        // line 208
        yield "      </div>
    </div>
    ";
        // line 210
        if ((($tmp = ($context["category_href"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 211
            yield "      <a class=\"mr-pdp__back\" href=\"";
            yield ($context["category_href"] ?? null);
            yield "\">Назад к списку</a>
    ";
        }
        // line 213
        yield "    ";
        yield ($context["related"] ?? null);
        yield "
    ";
        // line 214
        yield ($context["content_bottom"] ?? null);
        yield "
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#form-product').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=checkout/cart.add&language=";
        // line 222
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
        // line 247
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
        // line 285
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
        return array (  809 => 285,  768 => 247,  740 => 222,  729 => 214,  724 => 213,  718 => 211,  716 => 210,  712 => 208,  706 => 206,  704 => 205,  701 => 204,  695 => 203,  686 => 200,  682 => 199,  679 => 198,  674 => 197,  670 => 196,  667 => 195,  665 => 194,  649 => 181,  644 => 179,  637 => 177,  632 => 174,  626 => 172,  624 => 171,  618 => 168,  613 => 166,  608 => 165,  602 => 161,  591 => 159,  587 => 158,  583 => 157,  578 => 155,  575 => 154,  572 => 153,  568 => 151,  562 => 150,  556 => 147,  548 => 146,  542 => 145,  535 => 144,  532 => 143,  526 => 140,  518 => 139,  512 => 138,  505 => 137,  502 => 136,  496 => 133,  493 => 132,  485 => 129,  478 => 128,  476 => 127,  470 => 126,  462 => 125,  459 => 124,  455 => 123,  451 => 122,  447 => 121,  440 => 120,  437 => 119,  431 => 116,  428 => 115,  420 => 112,  413 => 111,  411 => 110,  405 => 109,  397 => 108,  394 => 107,  390 => 106,  386 => 105,  382 => 104,  375 => 103,  372 => 102,  366 => 99,  363 => 98,  356 => 96,  349 => 95,  347 => 94,  340 => 93,  336 => 92,  332 => 91,  326 => 90,  320 => 89,  313 => 88,  310 => 87,  306 => 86,  303 => 85,  301 => 84,  298 => 83,  294 => 81,  289 => 79,  284 => 78,  278 => 76,  276 => 75,  273 => 74,  271 => 73,  266 => 70,  261 => 67,  255 => 65,  252 => 64,  244 => 62,  242 => 61,  239 => 60,  233 => 58,  231 => 57,  228 => 56,  225 => 55,  219 => 53,  216 => 52,  211 => 49,  200 => 47,  196 => 46,  192 => 44,  190 => 43,  182 => 38,  170 => 35,  165 => 33,  159 => 31,  155 => 29,  153 => 28,  149 => 26,  139 => 23,  132 => 22,  129 => 21,  125 => 19,  106 => 16,  95 => 15,  78 => 14,  75 => 13,  73 => 12,  67 => 9,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
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
          <form class=\"mr-pdp__icons\" method=\"post\" data-mr-wishlist>
            <button type=\"submit\" formaction=\"{{ wishlist_add }}\" aria-label=\"В избранное\" aria-pressed=\"{{ in_wishlist ? 'true' : 'false' }}\"{% if in_wishlist %} class=\"is-active\"{% endif %}>
              <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M12 20.2 10.5 18.8C6.4 15.1 3.5 12.5 3.5 9.2 3.5 6.5 5.6 4.4 8.3 4.4c1.5 0 3 .7 3.7 1.8a4.9 4.9 0 0 1 3.7-1.8c2.7 0 4.8 2.1 4.8 4.8 0 3.3-2.9 5.9-7 9.6L12 20.2z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linejoin=\"round\"/></svg>
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
