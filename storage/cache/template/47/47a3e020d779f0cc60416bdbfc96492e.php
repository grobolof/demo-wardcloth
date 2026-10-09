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

/* catalog/view/template/common/menu.twig */
class __TwigTemplate_149f2f50a53de6a594bf0d2495993ca5 extends Template
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
        if ((($tmp = ($context["categories"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "  <nav class=\"mr-nav\" aria-label=\"Каталог\">
    <div class=\"mr-wrap mr-nav__row\">
      ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 5
                yield "        <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 5);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 5);
                yield "</a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            yield "    </div>
  </nav>
  <div class=\"mr-catalog\" id=\"mr-catalog\">
    <div class=\"mr-catalog__inner\">
      ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 12
                yield "        ";
                $context["label"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 12));
                // line 13
                yield "        <a class=\"mr-catalog__item\" href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 13);
                yield "\">
          <span class=\"mr-catalog__glyph\" aria-hidden=\"true\">
            ";
                // line 15
                if (CoreExtension::inFilter("ноут", ($context["label"] ?? null))) {
                    // line 16
                    yield "              <svg viewBox=\"0 0 48 48\"><rect x=\"8\" y=\"10\" width=\"32\" height=\"20\" rx=\"2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/><path d=\"M6 34h36l-3-4H9l-3 4z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linejoin=\"round\"/></svg>
            ";
                } elseif (CoreExtension::inFilter("теле",                 // line 17
($context["label"] ?? null))) {
                    // line 18
                    yield "              <svg viewBox=\"0 0 48 48\"><rect x=\"6\" y=\"10\" width=\"36\" height=\"22\" rx=\"2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/><path d=\"M18 38h12M24 32v6\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/></svg>
            ";
                } elseif (CoreExtension::inFilter("смарт",                 // line 19
($context["label"] ?? null))) {
                    // line 20
                    yield "              <svg viewBox=\"0 0 48 48\"><rect x=\"15\" y=\"6\" width=\"18\" height=\"36\" rx=\"3\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/><circle cx=\"24\" cy=\"36\" r=\"1.4\" fill=\"currentColor\"/></svg>
            ";
                } else {
                    // line 22
                    yield "              <svg viewBox=\"0 0 48 48\"><path d=\"M16 18h16v16a6 6 0 0 1-6 6h-4a6 6 0 0 1-6-6V18z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/><path d=\"M18 18V14a6 6 0 0 1 12 0v4\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/></svg>
            ";
                }
                // line 24
                yield "          </span>
          <span>";
                // line 25
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 25);
                yield "</span>
        </a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "    </div>
  </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/menu.twig";
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
        return array (  114 => 28,  105 => 25,  102 => 24,  98 => 22,  94 => 20,  92 => 19,  89 => 18,  87 => 17,  84 => 16,  82 => 15,  76 => 13,  73 => 12,  69 => 11,  63 => 7,  52 => 5,  48 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if categories %}
  <nav class=\"mr-nav\" aria-label=\"Каталог\">
    <div class=\"mr-wrap mr-nav__row\">
      {% for category in categories %}
        <a href=\"{{ category.href }}\">{{ category.name }}</a>
      {% endfor %}
    </div>
  </nav>
  <div class=\"mr-catalog\" id=\"mr-catalog\">
    <div class=\"mr-catalog__inner\">
      {% for category in categories %}
        {% set label = category.name|lower %}
        <a class=\"mr-catalog__item\" href=\"{{ category.href }}\">
          <span class=\"mr-catalog__glyph\" aria-hidden=\"true\">
            {% if 'ноут' in label %}
              <svg viewBox=\"0 0 48 48\"><rect x=\"8\" y=\"10\" width=\"32\" height=\"20\" rx=\"2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/><path d=\"M6 34h36l-3-4H9l-3 4z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linejoin=\"round\"/></svg>
            {% elseif 'теле' in label %}
              <svg viewBox=\"0 0 48 48\"><rect x=\"6\" y=\"10\" width=\"36\" height=\"22\" rx=\"2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/><path d=\"M18 38h12M24 32v6\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/></svg>
            {% elseif 'смарт' in label %}
              <svg viewBox=\"0 0 48 48\"><rect x=\"15\" y=\"6\" width=\"18\" height=\"36\" rx=\"3\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/><circle cx=\"24\" cy=\"36\" r=\"1.4\" fill=\"currentColor\"/></svg>
            {% else %}
              <svg viewBox=\"0 0 48 48\"><path d=\"M16 18h16v16a6 6 0 0 1-6 6h-4a6 6 0 0 1-6-6V18z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/><path d=\"M18 18V14a6 6 0 0 1 12 0v4\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/></svg>
            {% endif %}
          </span>
          <span>{{ category.name }}</span>
        </a>
      {% endfor %}
    </div>
  </div>
{% endif %}
", "catalog/view/template/common/menu.twig", "/pub/www/app/public/catalog/view/template/common/menu.twig");
    }
}
