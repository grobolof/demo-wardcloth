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

/* catalog/view/template/information/contact.twig */
class __TwigTemplate_fcaeba7c4640d8115d2ef901cd2a986a extends Template
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
<div id=\"information-contact\" class=\"container\">
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
      <div class=\"mr-contacts\">
        <section class=\"mr-contacts__card\">
          <h2>";
        // line 13
        yield ($context["store"] ?? null);
        yield "</h2>
          <p class=\"mr-contacts__place\">";
        // line 14
        yield ($context["place"] ?? null);
        yield "</p>
          <dl class=\"mr-contacts__list\">
            <div>
              <dt>";
        // line 17
        yield ($context["text_address"] ?? null);
        yield "</dt>
              <dd>";
        // line 18
        yield ($context["address_line"] ?? null);
        yield "</dd>
            </div>
            <div>
              <dt>";
        // line 21
        yield ($context["text_open"] ?? null);
        yield "</dt>
              <dd>";
        // line 22
        yield ($context["hours"] ?? null);
        yield "</dd>
            </div>
            <div>
              <dt>";
        // line 25
        yield ($context["text_telephone"] ?? null);
        yield "</dt>
              <dd>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["phones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 28
            yield "                  <a href=\"tel:";
            yield Twig\Extension\CoreExtension::replace($context["phone"], [" " => "", "(" => "", ")" => "", "-" => ""]);
            yield "\">";
            yield $context["phone"];
            yield "</a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['phone'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "              </dd>
            </div>
            <div>
              <dt>E-mail</dt>
              <dd><a href=\"mailto:";
        // line 34
        yield ($context["contact_email"] ?? null);
        yield "\">";
        yield ($context["contact_email"] ?? null);
        yield "</a></dd>
            </div>
          </dl>
          <p class=\"mr-contacts__legal\">";
        // line 37
        yield ($context["legal"] ?? null);
        yield "</p>
          <p class=\"mr-contacts__legal\">";
        // line 38
        yield ($context["bank"] ?? null);
        yield "</p>
          <p class=\"mr-contacts__note\">";
        // line 39
        yield ($context["about_store"] ?? null);
        yield "</p>
        </section>
        <form id=\"form-contact\" class=\"mr-contacts__form\" action=\"";
        // line 41
        yield ($context["send"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <h2>";
        // line 42
        yield ($context["text_contact"] ?? null);
        yield "</h2>
          <label class=\"mr-contacts__field\" for=\"input-name\">
            <span>";
        // line 44
        yield ($context["entry_name"] ?? null);
        yield "</span>
            <input type=\"text\" name=\"name\" value=\"";
        // line 45
        yield ($context["name"] ?? null);
        yield "\" id=\"input-name\" autocomplete=\"name\"/>
            <div id=\"error-name\" class=\"invalid-feedback\"></div>
          </label>
          <label class=\"mr-contacts__field\" for=\"input-email\">
            <span>";
        // line 49
        yield ($context["entry_email"] ?? null);
        yield "</span>
            <input type=\"email\" name=\"email\" value=\"";
        // line 50
        yield ($context["email"] ?? null);
        yield "\" id=\"input-email\" autocomplete=\"email\"/>
            <div id=\"error-email\" class=\"invalid-feedback\"></div>
          </label>
          <label class=\"mr-contacts__field\" for=\"input-enquiry\">
            <span>";
        // line 54
        yield ($context["entry_enquiry"] ?? null);
        yield "</span>
            <textarea name=\"enquiry\" rows=\"6\" id=\"input-enquiry\"></textarea>
            <div id=\"error-enquiry\" class=\"invalid-feedback\"></div>
          </label>
          ";
        // line 58
        yield ($context["captcha"] ?? null);
        yield "
          <button type=\"submit\" class=\"mr-contacts__submit\">Отправить</button>
        </form>
      </div>
      ";
        // line 62
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 63
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 65
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
        return "catalog/view/template/information/contact.twig";
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
        return array (  211 => 65,  206 => 63,  202 => 62,  195 => 58,  188 => 54,  181 => 50,  177 => 49,  170 => 45,  166 => 44,  161 => 42,  157 => 41,  152 => 39,  148 => 38,  144 => 37,  136 => 34,  130 => 30,  119 => 28,  115 => 27,  110 => 25,  104 => 22,  100 => 21,  94 => 18,  90 => 17,  84 => 14,  80 => 13,  74 => 10,  70 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"information-contact\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  <div class=\"row\">{{ column_left }}
    <div id=\"content\" class=\"col\">{{ content_top }}
      <h1>{{ heading_title }}</h1>
      <div class=\"mr-contacts\">
        <section class=\"mr-contacts__card\">
          <h2>{{ store }}</h2>
          <p class=\"mr-contacts__place\">{{ place }}</p>
          <dl class=\"mr-contacts__list\">
            <div>
              <dt>{{ text_address }}</dt>
              <dd>{{ address_line }}</dd>
            </div>
            <div>
              <dt>{{ text_open }}</dt>
              <dd>{{ hours }}</dd>
            </div>
            <div>
              <dt>{{ text_telephone }}</dt>
              <dd>
                {% for phone in phones %}
                  <a href=\"tel:{{ phone|replace({' ': '', '(': '', ')': '', '-': ''}) }}\">{{ phone }}</a>
                {% endfor %}
              </dd>
            </div>
            <div>
              <dt>E-mail</dt>
              <dd><a href=\"mailto:{{ contact_email }}\">{{ contact_email }}</a></dd>
            </div>
          </dl>
          <p class=\"mr-contacts__legal\">{{ legal }}</p>
          <p class=\"mr-contacts__legal\">{{ bank }}</p>
          <p class=\"mr-contacts__note\">{{ about_store }}</p>
        </section>
        <form id=\"form-contact\" class=\"mr-contacts__form\" action=\"{{ send }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <h2>{{ text_contact }}</h2>
          <label class=\"mr-contacts__field\" for=\"input-name\">
            <span>{{ entry_name }}</span>
            <input type=\"text\" name=\"name\" value=\"{{ name }}\" id=\"input-name\" autocomplete=\"name\"/>
            <div id=\"error-name\" class=\"invalid-feedback\"></div>
          </label>
          <label class=\"mr-contacts__field\" for=\"input-email\">
            <span>{{ entry_email }}</span>
            <input type=\"email\" name=\"email\" value=\"{{ email }}\" id=\"input-email\" autocomplete=\"email\"/>
            <div id=\"error-email\" class=\"invalid-feedback\"></div>
          </label>
          <label class=\"mr-contacts__field\" for=\"input-enquiry\">
            <span>{{ entry_enquiry }}</span>
            <textarea name=\"enquiry\" rows=\"6\" id=\"input-enquiry\"></textarea>
            <div id=\"error-enquiry\" class=\"invalid-feedback\"></div>
          </label>
          {{ captcha }}
          <button type=\"submit\" class=\"mr-contacts__submit\">Отправить</button>
        </form>
      </div>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}
", "catalog/view/template/information/contact.twig", "/pub/www/app/public/catalog/view/template/information/contact.twig");
    }
}
