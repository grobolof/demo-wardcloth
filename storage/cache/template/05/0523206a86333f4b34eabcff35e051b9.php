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

/* catalog/view/template/account/register.twig */
class __TwigTemplate_683b4cba2f1c1bda146f8b183a60c5d9 extends Template
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
<div id=\"account-register\" class=\"container\">
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
            } elseif ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source,             // line 8
$context["breadcrumb"], "login", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "login", [], "any", false, false, false, 8), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 9
                yield "          <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
                yield "\" data-mr-login>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
                yield "</a>
        ";
            } else {
                // line 11
                yield "          <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
                yield "</a>
        ";
            }
            // line 13
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
        // line 15
        yield "  </ul>
  <div id=\"content\">
      ";
        // line 17
        yield ($context["content_top"] ?? null);
        yield "
      <h1>";
        // line 18
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <form id=\"form-register\" class=\"mr-register\" action=\"";
        // line 19
        yield ($context["register"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\" novalidate>
        ";
        // line 20
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["customer_groups"] ?? null)) > 1)) {
            // line 21
            yield "          <div class=\"mr-register__field\">
            <label for=\"input-customer-group\">";
            // line 22
            yield ($context["entry_customer_group"] ?? null);
            yield "</label>
            <select name=\"customer_group_id\" id=\"input-customer-group\">
              ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 25
                yield "                <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 25);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 25) == ($context["customer_group_id"] ?? null))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 25);
                yield "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "            </select>
          </div>
        ";
        }
        // line 30
        yield "        <div class=\"mr-register__field\">
          <label for=\"input-fullname\">Фамилия Имя Отчество <i>*</i></label>
          <input type=\"text\" name=\"fullname\" id=\"input-fullname\" autocomplete=\"name\" required>
          <div id=\"error-fullname\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"mr-register__field\">
          <label for=\"input-email\">E-mail <i>*</i></label>
          <input type=\"email\" name=\"email\" id=\"input-email\" autocomplete=\"email\" required>
          <p class=\"mr-register__hint\">Является также логином для входа на сайт</p>
          <div id=\"error-email\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"mr-register__field\">
          <label for=\"input-telephone\">Телефон</label>
          <input type=\"tel\" name=\"telephone\" id=\"input-telephone\" autocomplete=\"tel\" inputmode=\"tel\" placeholder=\"+7 (___) ___-__-__\">
          <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"mr-register__field\">
          <label for=\"input-password\">Пароль <i>*</i></label>
          <div class=\"mr-register__password\">
            <input type=\"password\" name=\"password\" id=\"input-password\" autocomplete=\"new-password\" minlength=\"6\" maxlength=\"20\" required>
            <button type=\"button\" class=\"mr-register__eye\" data-mr-password aria-label=\"Показать пароль\">
              <svg class=\"mr-eye-off\" viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M2.2 12S5.6 6.5 12 6.5 21.8 12 21.8 12 18.4 17.5 12 17.5 2.2 12 2.2 12Z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\"/><circle cx=\"12\" cy=\"12\" r=\"2.4\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\"/></svg>
              <svg class=\"mr-eye-on\" viewBox=\"0 0 24 24\" aria-hidden=\"true\" hidden><path d=\"M3 4.5 20 19.5M9.2 9.4A3 3 0 0 0 14.6 15M6.2 7.2C4.2 8.6 2.8 10.6 2.2 12c0 0 3.4 5.5 9.8 5.5 1.5 0 2.9-.3 4.1-.8M10.2 6.7c.6-.1 1.2-.2 1.8-.2 6.4 0 9.8 5.5 9.8 5.5a16 16 0 0 1-2.4 3\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linecap=\"round\"/></svg>
            </button>
          </div>
          <p class=\"mr-register__hint\">От 6 до 20 символов: латиница, цифры и спецсимволы</p>
          <div id=\"error-password\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"mr-register__field\">
          <label for=\"input-confirm\">Подтверждение пароля <i>*</i></label>
          <div class=\"mr-register__password\">
            <input type=\"password\" name=\"confirm\" id=\"input-confirm\" autocomplete=\"new-password\" minlength=\"6\" maxlength=\"20\" required>
            <button type=\"button\" class=\"mr-register__eye\" data-mr-password aria-label=\"Показать пароль\">
              <svg class=\"mr-eye-off\" viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M2.2 12S5.6 6.5 12 6.5 21.8 12 21.8 12 18.4 17.5 12 17.5 2.2 12 2.2 12Z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\"/><circle cx=\"12\" cy=\"12\" r=\"2.4\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\"/></svg>
              <svg class=\"mr-eye-on\" viewBox=\"0 0 24 24\" aria-hidden=\"true\" hidden><path d=\"M3 4.5 20 19.5M9.2 9.4A3 3 0 0 0 14.6 15M6.2 7.2C4.2 8.6 2.8 10.6 2.2 12c0 0 3.4 5.5 9.8 5.5 1.5 0 2.9-.3 4.1-.8M10.2 6.7c.6-.1 1.2-.2 1.8-.2 6.4 0 9.8 5.5 9.8 5.5a16 16 0 0 1-2.4 3\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linecap=\"round\"/></svg>
            </button>
          </div>
          <div id=\"error-confirm\" class=\"invalid-feedback\"></div>
        </div>
        ";
        // line 69
        yield ($context["captcha"] ?? null);
        yield "
        <div class=\"mr-register__agree\">
          <input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"input-agree\">
          <label for=\"input-agree\">
            <span class=\"mr-register__box\" aria-hidden=\"true\"></span>
            <span>Я даю согласие на обработку моих персональных данных (<a href=\"";
        // line 74
        yield ($context["privacy"] ?? null);
        yield "\" target=\"_blank\">при использовании формы сайта</a> \\ <a href=\"";
        yield ($context["offer"] ?? null);
        yield "\" target=\"_blank\">при оформлении заказа</a>) и подтверждаю ознакомление с <a href=\"";
        yield ($context["privacy"] ?? null);
        yield "\" target=\"_blank\">Политикой обработки персональных данных</a></span>
          </label>
          <div id=\"error-agree\" class=\"invalid-feedback\"></div>
        </div>
        <input type=\"hidden\" name=\"newsletter\" value=\"0\">
        <button type=\"submit\" class=\"mr-register__submit\">Зарегистрироваться</button>
      </form>
      ";
        // line 81
        yield ($context["content_bottom"] ?? null);
        yield "
  </div>
</div>
";
        // line 84
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
        return "catalog/view/template/account/register.twig";
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
        return array (  227 => 84,  221 => 81,  207 => 74,  199 => 69,  158 => 30,  153 => 27,  138 => 25,  134 => 24,  129 => 22,  126 => 21,  124 => 20,  120 => 19,  116 => 18,  112 => 17,  108 => 15,  93 => 13,  85 => 11,  77 => 9,  75 => 8,  70 => 7,  68 => 6,  65 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-register\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\">
        {% if loop.last %}
          <span>{{ breadcrumb.text }}</span>
        {% elseif breadcrumb.login|default(false) %}
          <a href=\"{{ breadcrumb.href }}\" data-mr-login>{{ breadcrumb.text }}</a>
        {% else %}
          <a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a>
        {% endif %}
      </li>
    {% endfor %}
  </ul>
  <div id=\"content\">
      {{ content_top }}
      <h1>{{ heading_title }}</h1>
      <form id=\"form-register\" class=\"mr-register\" action=\"{{ register }}\" method=\"post\" data-oc-toggle=\"ajax\" novalidate>
        {% if customer_groups|length > 1 %}
          <div class=\"mr-register__field\">
            <label for=\"input-customer-group\">{{ entry_customer_group }}</label>
            <select name=\"customer_group_id\" id=\"input-customer-group\">
              {% for customer_group in customer_groups %}
                <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == customer_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
              {% endfor %}
            </select>
          </div>
        {% endif %}
        <div class=\"mr-register__field\">
          <label for=\"input-fullname\">Фамилия Имя Отчество <i>*</i></label>
          <input type=\"text\" name=\"fullname\" id=\"input-fullname\" autocomplete=\"name\" required>
          <div id=\"error-fullname\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"mr-register__field\">
          <label for=\"input-email\">E-mail <i>*</i></label>
          <input type=\"email\" name=\"email\" id=\"input-email\" autocomplete=\"email\" required>
          <p class=\"mr-register__hint\">Является также логином для входа на сайт</p>
          <div id=\"error-email\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"mr-register__field\">
          <label for=\"input-telephone\">Телефон</label>
          <input type=\"tel\" name=\"telephone\" id=\"input-telephone\" autocomplete=\"tel\" inputmode=\"tel\" placeholder=\"+7 (___) ___-__-__\">
          <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"mr-register__field\">
          <label for=\"input-password\">Пароль <i>*</i></label>
          <div class=\"mr-register__password\">
            <input type=\"password\" name=\"password\" id=\"input-password\" autocomplete=\"new-password\" minlength=\"6\" maxlength=\"20\" required>
            <button type=\"button\" class=\"mr-register__eye\" data-mr-password aria-label=\"Показать пароль\">
              <svg class=\"mr-eye-off\" viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M2.2 12S5.6 6.5 12 6.5 21.8 12 21.8 12 18.4 17.5 12 17.5 2.2 12 2.2 12Z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\"/><circle cx=\"12\" cy=\"12\" r=\"2.4\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\"/></svg>
              <svg class=\"mr-eye-on\" viewBox=\"0 0 24 24\" aria-hidden=\"true\" hidden><path d=\"M3 4.5 20 19.5M9.2 9.4A3 3 0 0 0 14.6 15M6.2 7.2C4.2 8.6 2.8 10.6 2.2 12c0 0 3.4 5.5 9.8 5.5 1.5 0 2.9-.3 4.1-.8M10.2 6.7c.6-.1 1.2-.2 1.8-.2 6.4 0 9.8 5.5 9.8 5.5a16 16 0 0 1-2.4 3\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linecap=\"round\"/></svg>
            </button>
          </div>
          <p class=\"mr-register__hint\">От 6 до 20 символов: латиница, цифры и спецсимволы</p>
          <div id=\"error-password\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"mr-register__field\">
          <label for=\"input-confirm\">Подтверждение пароля <i>*</i></label>
          <div class=\"mr-register__password\">
            <input type=\"password\" name=\"confirm\" id=\"input-confirm\" autocomplete=\"new-password\" minlength=\"6\" maxlength=\"20\" required>
            <button type=\"button\" class=\"mr-register__eye\" data-mr-password aria-label=\"Показать пароль\">
              <svg class=\"mr-eye-off\" viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M2.2 12S5.6 6.5 12 6.5 21.8 12 21.8 12 18.4 17.5 12 17.5 2.2 12 2.2 12Z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\"/><circle cx=\"12\" cy=\"12\" r=\"2.4\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\"/></svg>
              <svg class=\"mr-eye-on\" viewBox=\"0 0 24 24\" aria-hidden=\"true\" hidden><path d=\"M3 4.5 20 19.5M9.2 9.4A3 3 0 0 0 14.6 15M6.2 7.2C4.2 8.6 2.8 10.6 2.2 12c0 0 3.4 5.5 9.8 5.5 1.5 0 2.9-.3 4.1-.8M10.2 6.7c.6-.1 1.2-.2 1.8-.2 6.4 0 9.8 5.5 9.8 5.5a16 16 0 0 1-2.4 3\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linecap=\"round\"/></svg>
            </button>
          </div>
          <div id=\"error-confirm\" class=\"invalid-feedback\"></div>
        </div>
        {{ captcha }}
        <div class=\"mr-register__agree\">
          <input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"input-agree\">
          <label for=\"input-agree\">
            <span class=\"mr-register__box\" aria-hidden=\"true\"></span>
            <span>Я даю согласие на обработку моих персональных данных (<a href=\"{{ privacy }}\" target=\"_blank\">при использовании формы сайта</a> \\ <a href=\"{{ offer }}\" target=\"_blank\">при оформлении заказа</a>) и подтверждаю ознакомление с <a href=\"{{ privacy }}\" target=\"_blank\">Политикой обработки персональных данных</a></span>
          </label>
          <div id=\"error-agree\" class=\"invalid-feedback\"></div>
        </div>
        <input type=\"hidden\" name=\"newsletter\" value=\"0\">
        <button type=\"submit\" class=\"mr-register__submit\">Зарегистрироваться</button>
      </form>
      {{ content_bottom }}
  </div>
</div>
{{ footer }}
", "catalog/view/template/account/register.twig", "/pub/www/app/public/catalog/view/template/account/register.twig");
    }
}
