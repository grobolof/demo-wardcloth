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

/* catalog/view/template/account/edit.twig */
class __TwigTemplate_bb4f9735d1d808425168fecea5876e34 extends Template
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
<div id=\"account-edit\" class=\"container\">
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
    <h1>Персональные данные</h1>
    <div class=\"mr-private\">
      <nav aria-label=\"Кабинет\">
        <ul class=\"mr-private__menu\">
          <li><a href=\"";
        // line 20
        yield ($context["account"] ?? null);
        yield "\">Мой кабинет</a></li>
          <li><a class=\"is-active\" href=\"";
        // line 21
        yield ($context["edit"] ?? null);
        yield "\" aria-current=\"page\">Личные данные</a></li>
          <li><a href=\"";
        // line 22
        yield ($context["order"] ?? null);
        yield "\">Заказы</a></li>
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
        <section class=\"mr-private__card\">
          <h2>Контактные данные</h2>
          <form id=\"form-customer\" action=\"";
        // line 30
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\" novalidate>
            <div class=\"mr-private__grid\">
              <div class=\"mr-private__field\">
                <label for=\"input-fullname\">Фамилия Имя Отчество <i>*</i></label>
                <input type=\"text\" name=\"fullname\" value=\"";
        // line 34
        yield ($context["fullname"] ?? null);
        yield "\" id=\"input-fullname\" autocomplete=\"name\" required>
                <div id=\"error-fullname\" class=\"invalid-feedback\"></div>
              </div>
              <div class=\"mr-private__field\">
                <label for=\"input-email\">E-mail <i>*</i></label>
                <input type=\"email\" name=\"email\" value=\"";
        // line 39
        yield ($context["email"] ?? null);
        yield "\" id=\"input-email\" autocomplete=\"email\" required>
                <p class=\"mr-private__hint\">Для отправки уведомлений о статусе заказа. Используйте как логин для входа в личный кабинет</p>
                <div id=\"error-email\" class=\"invalid-feedback\"></div>
              </div>
              <div class=\"mr-private__field\">
                <label for=\"input-telephone\">Телефон</label>
                <input type=\"tel\" name=\"telephone\" value=\"";
        // line 45
        yield ($context["telephone"] ?? null);
        yield "\" id=\"input-telephone\" autocomplete=\"tel\" inputmode=\"tel\" placeholder=\"+7 (___) ___-__-__\">
                <p class=\"mr-private__hint\">Необходим для уточнения деталей заказа</p>
                <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
              </div>
            </div>
            ";
        // line 50
        if ((($tmp = ($context["custom_fields"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "              <div class=\"mr-private__extra\">
                ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 53
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 53) == "select")) {
                    // line 54
                    yield "                    <div class=\"row mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield " custom-field\">
                      <label for=\"input-custom-field-";
                    // line 55
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 55);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 55);
                    yield "</label>
                      <div class=\"col-sm-10\">
                        <select name=\"custom_field[";
                    // line 57
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 57);
                    yield "]\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 57);
                    yield "\" class=\"form-select\">
                          <option value=\"\">";
                    // line 58
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                          ";
                    // line 59
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 59));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 60
                        yield "                            <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 60);
                        yield "\"";
                        if (((($_v0 = ($context["account_custom_field"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 60)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 60) == (($_v1 = ($context["account_custom_field"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 60)] ?? null) : null)))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 60);
                        yield "</option>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 62
                    yield "                        </select>
                        <div id=\"error-custom-field-";
                    // line 63
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 63);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                  ";
                }
                // line 67
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 67) == "radio")) {
                    // line 68
                    yield "                    <div class=\"row mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield " custom-field\">
                      <label class=\"col-sm-2 col-form-label\">";
                    // line 69
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 69);
                    yield "</label>
                      <div class=\"col-sm-10\">
                        <div id=\"input-custom-field-";
                    // line 71
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 71);
                    yield "\">
                          ";
                    // line 72
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 72));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 73
                        yield "                            <div class=\"form-check\">
                              <input type=\"radio\" name=\"custom_field[";
                        // line 74
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 74);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 74);
                        yield "\" id=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 74);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v2 = ($context["account_custom_field"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 74)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 74) == (($_v3 = ($context["account_custom_field"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 74)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/>
                              <label for=\"input-custom-value-";
                        // line 75
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 75);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 75);
                        yield "</label>
                            </div>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 78
                    yield "                        </div>
                        <div id=\"error-custom-field-";
                    // line 79
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 79);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                  ";
                }
                // line 83
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 83) == "checkbox")) {
                    // line 84
                    yield "                    <div class=\"row mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield " custom-field\">
                      <label class=\"col-sm-2 col-form-label\">";
                    // line 85
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 85);
                    yield "</label>
                      <div class=\"col-sm-10\">
                        <div id=\"input-custom-field-";
                    // line 87
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 87);
                    yield "\">
                          ";
                    // line 88
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 88));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 89
                        yield "                            <div class=\"form-check\">
                              <input type=\"checkbox\" name=\"custom_field[";
                        // line 90
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 90);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 90);
                        yield "\" id=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 90);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v4 = ($context["account_custom_field"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 90)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 90), (($_v5 = ($context["account_custom_field"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 90)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/>
                              <label for=\"input-custom-value-";
                        // line 91
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 91);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 91);
                        yield "</label>
                            </div>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 94
                    yield "                        </div>
                        <div id=\"error-custom-field-";
                    // line 95
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 95);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                  ";
                }
                // line 99
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 99) == "text")) {
                    // line 100
                    yield "                    <div class=\"row mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield " custom-field\">
                      <label for=\"input-custom-field-";
                    // line 101
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 101);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 101);
                    yield "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"custom_field[";
                    // line 103
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103);
                    yield "]\" value=\"";
                    if ((($tmp = (($_v6 = ($context["account_custom_field"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield (($_v7 = ($context["account_custom_field"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 103);
                    }
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103);
                    yield "\" class=\"form-control\"/>
                        <div id=\"error-custom-field-";
                    // line 104
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                  ";
                }
                // line 108
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 108) == "textarea")) {
                    // line 109
                    yield "                    <div class=\"row mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield " custom-field\">
                      <label for=\"input-custom-field-";
                    // line 110
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 110);
                    yield "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"custom_field[";
                    // line 112
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 112);
                    yield "]\" rows=\"5\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 112);
                    yield "\" class=\"form-control\">";
                    if ((($tmp = (($_v8 = ($context["account_custom_field"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 112)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield (($_v9 = ($context["account_custom_field"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 112)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 112);
                    }
                    yield "</textarea>
                        <div id=\"error-custom-field-";
                    // line 113
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                  ";
                }
                // line 117
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 117) == "file")) {
                    // line 118
                    yield "                    <div class=\"row mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield " custom-field\">
                      <label class=\"col-sm-2 col-form-label\">";
                    // line 119
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 119);
                    yield "</label>
                      <div class=\"col-sm-10\">
                        <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 121
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" data-oc-target=\"#input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121);
                    yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                        <input type=\"hidden\" name=\"custom_field[";
                    // line 122
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122);
                    yield "]\" value=\"";
                    if ((($tmp = (($_v10 = ($context["account_custom_field"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield (($_v11 = ($context["account_custom_field"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122)] ?? null) : null);
                    }
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122);
                    yield "\"/>
                        <div id=\"error-custom-field-";
                    // line 123
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                  ";
                }
                // line 127
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 127) == "date")) {
                    // line 128
                    yield "                    <div class=\"row mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 128)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield " custom-field\">
                      <label for=\"input-custom-field-";
                    // line 129
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 129);
                    yield "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"date\" name=\"custom_field[";
                    // line 131
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                    yield "]\" value=\"";
                    if ((($tmp = (($_v12 = ($context["account_custom_field"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield (($_v13 = ($context["account_custom_field"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 131);
                    }
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                    yield "\" class=\"form-control\"/>
                        <div id=\"error-custom-field-";
                    // line 132
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                  ";
                }
                // line 136
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 136) == "time")) {
                    // line 137
                    yield "                    <div class=\"row mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 137)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield " custom-field\">
                      <label for=\"input-custom-field-";
                    // line 138
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 138);
                    yield "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"time\" name=\"custom_field[";
                    // line 140
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140);
                    yield "]\" value=\"";
                    if ((($tmp = (($_v14 = ($context["account_custom_field"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield (($_v15 = ($context["account_custom_field"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 140);
                    }
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140);
                    yield "\" class=\"form-control\"/>
                        <div id=\"error-custom-field-";
                    // line 141
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                  ";
                }
                // line 145
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 145) == "datetime")) {
                    // line 146
                    yield "                    <div class=\"row mb-3";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 146)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required";
                    }
                    yield " custom-field\">
                      <label for=\"input-custom-field-";
                    // line 147
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 147);
                    yield "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"datetime-local\" name=\"custom_field[";
                    // line 149
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149);
                    yield "]\" value=\"";
                    if ((($tmp = (($_v16 = ($context["account_custom_field"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield (($_v17 = ($context["account_custom_field"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 149);
                    }
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149);
                    yield "\" class=\"form-control\"/>
                        <div id=\"error-custom-field-";
                    // line 150
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                    yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                  ";
                }
                // line 154
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            yield "              </div>
            ";
        }
        // line 157
        yield "            <div class=\"mr-private__agree\">
              <input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"input-agree\">
              <label for=\"input-agree\">
                <span class=\"mr-private__box\" aria-hidden=\"true\"></span>
                <span>Я даю согласие на обработку моих персональных данных (<a href=\"";
        // line 161
        yield ($context["privacy"] ?? null);
        yield "\" target=\"_blank\">при использовании формы сайта</a> \\ <a href=\"";
        yield ($context["offer"] ?? null);
        yield "\" target=\"_blank\">при оформлении заказа</a>) и подтверждаю ознакомление с <a href=\"";
        yield ($context["privacy"] ?? null);
        yield "\" target=\"_blank\">Политикой обработки персональных данных</a></span>
              </label>
              <div id=\"error-agree\" class=\"invalid-feedback\"></div>
            </div>
            <button type=\"submit\" class=\"mr-private__submit\" disabled>Сохранить изменения</button>
          </form>
        </section>
        <section class=\"mr-private__card\" id=\"change-password\">
          <h2>Изменить пароль</h2>
          <form id=\"form-password\" action=\"";
        // line 170
        yield ($context["password_save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\" novalidate>
            <div class=\"mr-private__grid\">
              <div class=\"mr-private__field\">
                <label for=\"input-password\">Новый пароль <i>*</i></label>
                <div class=\"mr-private__password\">
                  <input type=\"password\" name=\"password\" id=\"input-password\" autocomplete=\"new-password\" minlength=\"6\" maxlength=\"40\">
                  <button type=\"button\" class=\"mr-private__eye\" data-mr-password aria-label=\"Показать пароль\">
                    <svg class=\"mr-eye-off\" viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M2.2 12S5.6 6.5 12 6.5 21.8 12 21.8 12 18.4 17.5 12 17.5 2.2 12 2.2 12Z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\"/><circle cx=\"12\" cy=\"12\" r=\"2.4\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\"/></svg>
                    <svg class=\"mr-eye-on\" viewBox=\"0 0 24 24\" aria-hidden=\"true\" hidden><path d=\"M3 4.5 20 19.5M9.2 9.4A3 3 0 0 0 14.6 15M6.2 7.2C4.2 8.6 2.8 10.6 2.2 12c0 0 3.4 5.5 9.8 5.5 1.5 0 2.9-.3 4.1-.8M10.2 6.7c.6-.1 1.2-.2 1.8-.2 6.4 0 9.8 5.5 9.8 5.5a16 16 0 0 1-2.4 3\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linecap=\"round\"/></svg>
                  </button>
                </div>
                <p class=\"mr-private__hint\">Длина пароля не менее 6 символов</p>
                <div id=\"error-password\" class=\"invalid-feedback\"></div>
              </div>
              <div class=\"mr-private__field\" aria-hidden=\"true\"></div>
              <div class=\"mr-private__field\">
                <label for=\"input-confirm\">Новый пароль еще раз <i>*</i></label>
                <div class=\"mr-private__password\">
                  <input type=\"password\" name=\"confirm\" id=\"input-confirm\" autocomplete=\"new-password\" minlength=\"6\" maxlength=\"40\">
                  <button type=\"button\" class=\"mr-private__eye\" data-mr-password aria-label=\"Показать пароль\">
                    <svg class=\"mr-eye-off\" viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M2.2 12S5.6 6.5 12 6.5 21.8 12 21.8 12 18.4 17.5 12 17.5 2.2 12 2.2 12Z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\"/><circle cx=\"12\" cy=\"12\" r=\"2.4\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\"/></svg>
                    <svg class=\"mr-eye-on\" viewBox=\"0 0 24 24\" aria-hidden=\"true\" hidden><path d=\"M3 4.5 20 19.5M9.2 9.4A3 3 0 0 0 14.6 15M6.2 7.2C4.2 8.6 2.8 10.6 2.2 12c0 0 3.4 5.5 9.8 5.5 1.5 0 2.9-.3 4.1-.8M10.2 6.7c.6-.1 1.2-.2 1.8-.2 6.4 0 9.8 5.5 9.8 5.5a16 16 0 0 1-2.4 3\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linecap=\"round\"/></svg>
                  </button>
                </div>
                <div id=\"error-confirm\" class=\"invalid-feedback\"></div>
              </div>
            </div>
            <button type=\"submit\" class=\"mr-private__submit\" disabled>Сохранить изменения</button>
          </form>
        </section>
      </div>
    </div>
    ";
        // line 202
        yield ($context["content_bottom"] ?? null);
        yield "
  </div>
</div>
";
        // line 205
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
        return "catalog/view/template/account/edit.twig";
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
        return array (  648 => 205,  642 => 202,  607 => 170,  591 => 161,  585 => 157,  581 => 155,  575 => 154,  568 => 150,  556 => 149,  549 => 147,  542 => 146,  539 => 145,  532 => 141,  520 => 140,  513 => 138,  506 => 137,  503 => 136,  496 => 132,  484 => 131,  477 => 129,  470 => 128,  467 => 127,  460 => 123,  450 => 122,  438 => 121,  433 => 119,  426 => 118,  423 => 117,  416 => 113,  404 => 112,  397 => 110,  390 => 109,  387 => 108,  380 => 104,  368 => 103,  361 => 101,  354 => 100,  351 => 99,  344 => 95,  341 => 94,  330 => 91,  318 => 90,  315 => 89,  311 => 88,  307 => 87,  302 => 85,  295 => 84,  292 => 83,  285 => 79,  282 => 78,  271 => 75,  259 => 74,  256 => 73,  252 => 72,  248 => 71,  243 => 69,  236 => 68,  233 => 67,  226 => 63,  223 => 62,  208 => 60,  204 => 59,  200 => 58,  194 => 57,  187 => 55,  180 => 54,  177 => 53,  173 => 52,  170 => 51,  168 => 50,  160 => 45,  151 => 39,  143 => 34,  136 => 30,  127 => 24,  123 => 23,  119 => 22,  115 => 21,  111 => 20,  103 => 15,  99 => 13,  84 => 11,  76 => 9,  70 => 7,  68 => 6,  65 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-edit\" class=\"container\">
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
    <h1>Персональные данные</h1>
    <div class=\"mr-private\">
      <nav aria-label=\"Кабинет\">
        <ul class=\"mr-private__menu\">
          <li><a href=\"{{ account }}\">Мой кабинет</a></li>
          <li><a class=\"is-active\" href=\"{{ edit }}\" aria-current=\"page\">Личные данные</a></li>
          <li><a href=\"{{ order }}\">Заказы</a></li>
          <li><a href=\"{{ wishlist }}\">Избранные товары</a></li>
          <li><a href=\"{{ logout }}\">Выйти</a></li>
        </ul>
      </nav>
      <div class=\"mr-private__main\">
        <section class=\"mr-private__card\">
          <h2>Контактные данные</h2>
          <form id=\"form-customer\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\" novalidate>
            <div class=\"mr-private__grid\">
              <div class=\"mr-private__field\">
                <label for=\"input-fullname\">Фамилия Имя Отчество <i>*</i></label>
                <input type=\"text\" name=\"fullname\" value=\"{{ fullname }}\" id=\"input-fullname\" autocomplete=\"name\" required>
                <div id=\"error-fullname\" class=\"invalid-feedback\"></div>
              </div>
              <div class=\"mr-private__field\">
                <label for=\"input-email\">E-mail <i>*</i></label>
                <input type=\"email\" name=\"email\" value=\"{{ email }}\" id=\"input-email\" autocomplete=\"email\" required>
                <p class=\"mr-private__hint\">Для отправки уведомлений о статусе заказа. Используйте как логин для входа в личный кабинет</p>
                <div id=\"error-email\" class=\"invalid-feedback\"></div>
              </div>
              <div class=\"mr-private__field\">
                <label for=\"input-telephone\">Телефон</label>
                <input type=\"tel\" name=\"telephone\" value=\"{{ telephone }}\" id=\"input-telephone\" autocomplete=\"tel\" inputmode=\"tel\" placeholder=\"+7 (___) ___-__-__\">
                <p class=\"mr-private__hint\">Необходим для уточнения деталей заказа</p>
                <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
              </div>
            </div>
            {% if custom_fields %}
              <div class=\"mr-private__extra\">
                {% for custom_field in custom_fields %}
                  {% if custom_field.type == 'select' %}
                    <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                      <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                      <div class=\"col-sm-10\">
                        <select name=\"custom_field[{{ custom_field.custom_field_id }}]\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                          <option value=\"\">{{ text_select }}</option>
                          {% for custom_field_value in custom_field.custom_field_value %}
                            <option value=\"{{ custom_field_value.custom_field_value_id }}\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %} selected{% endif %}>{{ custom_field_value.name }}</option>
                          {% endfor %}
                        </select>
                        <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                  {% endif %}
                  {% if custom_field.type == 'radio' %}
                    <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                      <label class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                      <div class=\"col-sm-10\">
                        <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\">
                          {% for custom_field_value in custom_field.custom_field_value %}
                            <div class=\"form-check\">
                              <input type=\"radio\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %} checked{% endif %}/>
                              <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                            </div>
                          {% endfor %}
                        </div>
                        <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                  {% endif %}
                  {% if custom_field.type == 'checkbox' %}
                    <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                      <label class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                      <div class=\"col-sm-10\">
                        <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\">
                          {% for custom_field_value in custom_field.custom_field_value %}
                            <div class=\"form-check\">
                              <input type=\"checkbox\" name=\"custom_field[{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in account_custom_field[custom_field.custom_field_id] %} checked{% endif %}/>
                              <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                            </div>
                          {% endfor %}
                        </div>
                        <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                  {% endif %}
                  {% if custom_field.type == 'text' %}
                    <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                      <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                        <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                  {% endif %}
                  {% if custom_field.type == 'textarea' %}
                    <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                      <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"custom_field[{{ custom_field.custom_field_id }}]\" rows=\"5\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>
                        <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                  {% endif %}
                  {% if custom_field.type == 'file' %}
                    <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                      <label class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                      <div class=\"col-sm-10\">
                        <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                        <input type=\"hidden\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% endif %}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\"/>
                        <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                  {% endif %}
                  {% if custom_field.type == 'date' %}
                    <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                      <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                      <div class=\"col-sm-10\">
                        <input type=\"date\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                        <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                  {% endif %}
                  {% if custom_field.type == 'time' %}
                    <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                      <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                      <div class=\"col-sm-10\">
                        <input type=\"time\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                        <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                  {% endif %}
                  {% if custom_field.type == 'datetime' %}
                    <div class=\"row mb-3{% if custom_field.required %} required{% endif %} custom-field\">
                      <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-2 col-form-label\">{{ custom_field.name }}</label>
                      <div class=\"col-sm-10\">
                        <input type=\"datetime-local\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                        <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                  {% endif %}
                {% endfor %}
              </div>
            {% endif %}
            <div class=\"mr-private__agree\">
              <input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"input-agree\">
              <label for=\"input-agree\">
                <span class=\"mr-private__box\" aria-hidden=\"true\"></span>
                <span>Я даю согласие на обработку моих персональных данных (<a href=\"{{ privacy }}\" target=\"_blank\">при использовании формы сайта</a> \\ <a href=\"{{ offer }}\" target=\"_blank\">при оформлении заказа</a>) и подтверждаю ознакомление с <a href=\"{{ privacy }}\" target=\"_blank\">Политикой обработки персональных данных</a></span>
              </label>
              <div id=\"error-agree\" class=\"invalid-feedback\"></div>
            </div>
            <button type=\"submit\" class=\"mr-private__submit\" disabled>Сохранить изменения</button>
          </form>
        </section>
        <section class=\"mr-private__card\" id=\"change-password\">
          <h2>Изменить пароль</h2>
          <form id=\"form-password\" action=\"{{ password_save }}\" method=\"post\" data-oc-toggle=\"ajax\" novalidate>
            <div class=\"mr-private__grid\">
              <div class=\"mr-private__field\">
                <label for=\"input-password\">Новый пароль <i>*</i></label>
                <div class=\"mr-private__password\">
                  <input type=\"password\" name=\"password\" id=\"input-password\" autocomplete=\"new-password\" minlength=\"6\" maxlength=\"40\">
                  <button type=\"button\" class=\"mr-private__eye\" data-mr-password aria-label=\"Показать пароль\">
                    <svg class=\"mr-eye-off\" viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M2.2 12S5.6 6.5 12 6.5 21.8 12 21.8 12 18.4 17.5 12 17.5 2.2 12 2.2 12Z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\"/><circle cx=\"12\" cy=\"12\" r=\"2.4\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\"/></svg>
                    <svg class=\"mr-eye-on\" viewBox=\"0 0 24 24\" aria-hidden=\"true\" hidden><path d=\"M3 4.5 20 19.5M9.2 9.4A3 3 0 0 0 14.6 15M6.2 7.2C4.2 8.6 2.8 10.6 2.2 12c0 0 3.4 5.5 9.8 5.5 1.5 0 2.9-.3 4.1-.8M10.2 6.7c.6-.1 1.2-.2 1.8-.2 6.4 0 9.8 5.5 9.8 5.5a16 16 0 0 1-2.4 3\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linecap=\"round\"/></svg>
                  </button>
                </div>
                <p class=\"mr-private__hint\">Длина пароля не менее 6 символов</p>
                <div id=\"error-password\" class=\"invalid-feedback\"></div>
              </div>
              <div class=\"mr-private__field\" aria-hidden=\"true\"></div>
              <div class=\"mr-private__field\">
                <label for=\"input-confirm\">Новый пароль еще раз <i>*</i></label>
                <div class=\"mr-private__password\">
                  <input type=\"password\" name=\"confirm\" id=\"input-confirm\" autocomplete=\"new-password\" minlength=\"6\" maxlength=\"40\">
                  <button type=\"button\" class=\"mr-private__eye\" data-mr-password aria-label=\"Показать пароль\">
                    <svg class=\"mr-eye-off\" viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M2.2 12S5.6 6.5 12 6.5 21.8 12 21.8 12 18.4 17.5 12 17.5 2.2 12 2.2 12Z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\"/><circle cx=\"12\" cy=\"12\" r=\"2.4\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\"/></svg>
                    <svg class=\"mr-eye-on\" viewBox=\"0 0 24 24\" aria-hidden=\"true\" hidden><path d=\"M3 4.5 20 19.5M9.2 9.4A3 3 0 0 0 14.6 15M6.2 7.2C4.2 8.6 2.8 10.6 2.2 12c0 0 3.4 5.5 9.8 5.5 1.5 0 2.9-.3 4.1-.8M10.2 6.7c.6-.1 1.2-.2 1.8-.2 6.4 0 9.8 5.5 9.8 5.5a16 16 0 0 1-2.4 3\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linecap=\"round\"/></svg>
                  </button>
                </div>
                <div id=\"error-confirm\" class=\"invalid-feedback\"></div>
              </div>
            </div>
            <button type=\"submit\" class=\"mr-private__submit\" disabled>Сохранить изменения</button>
          </form>
        </section>
      </div>
    </div>
    {{ content_bottom }}
  </div>
</div>
{{ footer }}
", "catalog/view/template/account/edit.twig", "/pub/www/app/public/catalog/view/template/account/edit.twig");
    }
}
