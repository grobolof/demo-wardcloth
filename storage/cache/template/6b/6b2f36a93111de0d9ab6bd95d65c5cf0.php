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

/* catalog/view/template/account/account.twig */
class __TwigTemplate_d1fc1fd983919480af65b50d2eab38ae extends Template
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
<div id=\"account-account\" class=\"container\">
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
  ";
        // line 14
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ";
            yield ($context["success"] ?? null);
            yield "</div>
  ";
        }
        // line 17
        yield "  <div id=\"content\">
    ";
        // line 18
        yield ($context["content_top"] ?? null);
        yield "
    <h1>";
        // line 19
        yield ($context["heading_title"] ?? null);
        yield "</h1>
    <section class=\"mr-cabinet\">
      <div class=\"mr-cabinet__hero\">
        <div class=\"mr-cabinet__private\">
          <a class=\"mr-cabinet__overlay\" href=\"";
        // line 23
        yield ($context["edit"] ?? null);
        yield "\" title=\"Личные данные\" aria-label=\"Личные данные\"></a>
          <div class=\"mr-cabinet__private-top\">
            <span class=\"mr-cabinet__arrow\" aria-hidden=\"true\">
              <svg viewBox=\"0 0 7 12\"><path d=\"M1 1l5 5-5 5\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.4\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
            </span>
            <span class=\"mr-cabinet__label\">Личные данные</span>
            <span class=\"mr-cabinet__name\">";
        // line 29
        yield ($context["fullname"] ?? null);
        yield "</span>
          </div>
          <div class=\"mr-cabinet__private-bottom\">
            <span class=\"mr-cabinet__contacts\">
              <span>";
        // line 33
        yield ($context["email"] ?? null);
        yield "</span>
              ";
        // line 34
        if ((($tmp = ($context["telephone"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "                <span>";
            yield ($context["telephone"] ?? null);
            yield "</span>
              ";
        }
        // line 37
        yield "            </span>
            <a class=\"mr-cabinet__password\" href=\"";
        // line 38
        yield ($context["edit"] ?? null);
        yield "#change-password\">Сменить пароль</a>
          </div>
        </div>
      </div>
      <div class=\"mr-cabinet__links\">
        <a class=\"mr-cabinet__link\" href=\"";
        // line 43
        yield ($context["wishlist"] ?? null);
        yield "\">
          <svg viewBox=\"0 0 32 32\" aria-hidden=\"true\"><path d=\"M16 26.2 14.2 24.6C8.7 19.6 5 16.2 5 12.1 5 8.7 7.6 6 11 6c1.9 0 3.7.9 4.9 2.3A6.3 6.3 0 0 1 21 6c3.4 0 6 2.7 6 6.1 0 4.1-3.7 7.5-9.2 12.5L16 26.2z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linejoin=\"round\"/></svg>
          <span>
            <span class=\"mr-cabinet__title\">Избранное</span>
            <span class=\"mr-cabinet__note\">";
        // line 47
        yield ($context["wishlist_note"] ?? null);
        yield "</span>
          </span>
        </a>
        <a class=\"mr-cabinet__link\" href=\"";
        // line 50
        yield ($context["order"] ?? null);
        yield "\">
          <svg viewBox=\"0 0 32 32\" aria-hidden=\"true\"><path d=\"M9 6.5h10.2L23 10.2V25a1.5 1.5 0 0 1-1.5 1.5h-12A1.5 1.5 0 0 1 8 25V8A1.5 1.5 0 0 1 9.5 6.5H9z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linejoin=\"round\"/><path d=\"M18.5 6.8V11H23M12 16h8M12 20h6\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
          <span>
            <span class=\"mr-cabinet__title\">Заказы</span>
            <span class=\"mr-cabinet__note\">";
        // line 54
        yield ($context["order_note"] ?? null);
        yield "</span>
          </span>
        </a>
      </div>
    </section>
    ";
        // line 59
        yield ($context["content_bottom"] ?? null);
        yield "
  </div>
</div>
";
        // line 62
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
        return "catalog/view/template/account/account.twig";
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
        return array (  197 => 62,  191 => 59,  183 => 54,  176 => 50,  170 => 47,  163 => 43,  155 => 38,  152 => 37,  146 => 35,  144 => 34,  140 => 33,  133 => 29,  124 => 23,  117 => 19,  113 => 18,  110 => 17,  104 => 15,  102 => 14,  99 => 13,  84 => 11,  76 => 9,  70 => 7,  68 => 6,  65 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-account\" class=\"container\">
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
  {% if success %}
    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> {{ success }}</div>
  {% endif %}
  <div id=\"content\">
    {{ content_top }}
    <h1>{{ heading_title }}</h1>
    <section class=\"mr-cabinet\">
      <div class=\"mr-cabinet__hero\">
        <div class=\"mr-cabinet__private\">
          <a class=\"mr-cabinet__overlay\" href=\"{{ edit }}\" title=\"Личные данные\" aria-label=\"Личные данные\"></a>
          <div class=\"mr-cabinet__private-top\">
            <span class=\"mr-cabinet__arrow\" aria-hidden=\"true\">
              <svg viewBox=\"0 0 7 12\"><path d=\"M1 1l5 5-5 5\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.4\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
            </span>
            <span class=\"mr-cabinet__label\">Личные данные</span>
            <span class=\"mr-cabinet__name\">{{ fullname }}</span>
          </div>
          <div class=\"mr-cabinet__private-bottom\">
            <span class=\"mr-cabinet__contacts\">
              <span>{{ email }}</span>
              {% if telephone %}
                <span>{{ telephone }}</span>
              {% endif %}
            </span>
            <a class=\"mr-cabinet__password\" href=\"{{ edit }}#change-password\">Сменить пароль</a>
          </div>
        </div>
      </div>
      <div class=\"mr-cabinet__links\">
        <a class=\"mr-cabinet__link\" href=\"{{ wishlist }}\">
          <svg viewBox=\"0 0 32 32\" aria-hidden=\"true\"><path d=\"M16 26.2 14.2 24.6C8.7 19.6 5 16.2 5 12.1 5 8.7 7.6 6 11 6c1.9 0 3.7.9 4.9 2.3A6.3 6.3 0 0 1 21 6c3.4 0 6 2.7 6 6.1 0 4.1-3.7 7.5-9.2 12.5L16 26.2z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linejoin=\"round\"/></svg>
          <span>
            <span class=\"mr-cabinet__title\">Избранное</span>
            <span class=\"mr-cabinet__note\">{{ wishlist_note }}</span>
          </span>
        </a>
        <a class=\"mr-cabinet__link\" href=\"{{ order }}\">
          <svg viewBox=\"0 0 32 32\" aria-hidden=\"true\"><path d=\"M9 6.5h10.2L23 10.2V25a1.5 1.5 0 0 1-1.5 1.5h-12A1.5 1.5 0 0 1 8 25V8A1.5 1.5 0 0 1 9.5 6.5H9z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linejoin=\"round\"/><path d=\"M18.5 6.8V11H23M12 16h8M12 20h6\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
          <span>
            <span class=\"mr-cabinet__title\">Заказы</span>
            <span class=\"mr-cabinet__note\">{{ order_note }}</span>
          </span>
        </a>
      </div>
    </section>
    {{ content_bottom }}
  </div>
</div>
{{ footer }}
", "catalog/view/template/account/account.twig", "/pub/www/app/public/catalog/view/template/account/account.twig");
    }
}
