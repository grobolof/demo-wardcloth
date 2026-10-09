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

/* catalog/view/template/product/thumb.twig */
class __TwigTemplate_2304fc8cfbcfaa6f7802a2dfb9cba2eb extends Template
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
        yield "<div class=\"mr-cell\">
<article class=\"mr-card\">
  <div class=\"mr-card__media\">
    ";
        // line 4
        if (((array_key_exists("sort_order", $context) && (($context["sort_order"] ?? null) > 0)) && (($context["sort_order"] ?? null) <= 8))) {
            // line 5
            yield "      <span class=\"mr-card__hit\">Хит</span>
    ";
        }
        // line 7
        yield "    <a class=\"mr-card__image\" href=\"";
        yield ($context["href"] ?? null);
        yield "\">
      <img src=\"";
        // line 8
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"";
        yield ($context["name"] ?? null);
        yield "\" title=\"";
        yield ($context["name"] ?? null);
        yield "\"/>
    </a>
    <form class=\"mr-card__tools\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        // line 10
        yield ($context["cart"] ?? null);
        yield "\" data-oc-target=\"#cart\">
      <button type=\"submit\" formaction=\"";
        // line 11
        yield ($context["wishlist_add"] ?? null);
        yield "\" aria-label=\"В избранное\">
        <svg viewBox=\"0 0 24 24\"><path d=\"M12 19s-7-4.4-7-9a4 4 0 0 1 7-2 4 4 0 0 1 7 2c0 4.6-7 9-7 9z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" stroke-linejoin=\"round\"/></svg>
      </button>
      <button type=\"submit\" formaction=\"";
        // line 14
        yield ($context["compare_add"] ?? null);
        yield "\" aria-label=\"Сравнить\">
        <svg viewBox=\"0 0 24 24\"><path d=\"M8 4v16M5 7l3-3 3 3M16 20V4M13 17l3 3 3-3\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
      </button>
      <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 17
        yield ($context["product_id"] ?? null);
        yield "\"/>
      <input type=\"hidden\" name=\"quantity\" value=\"";
        // line 18
        yield ($context["minimum"] ?? null);
        yield "\"/>
    </form>
  </div>
  ";
        // line 21
        if ((($tmp = ($context["price"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "    <div class=\"mr-card__price\">
      ";
            // line 23
            if ((($tmp =  !($context["special"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 24
                yield "        <span>";
                yield ($context["price"] ?? null);
                yield "</span>
      ";
            } else {
                // line 26
                yield "        <span>";
                yield ($context["special"] ?? null);
                yield "</span>
        <s>";
                // line 27
                yield ($context["price"] ?? null);
                yield "</s>
      ";
            }
            // line 29
            yield "    </div>
  ";
        }
        // line 31
        yield "  <h3 class=\"mr-card__name\"><a href=\"";
        yield ($context["href"] ?? null);
        yield "\">";
        yield ($context["name"] ?? null);
        yield "</a></h3>
  <p class=\"mr-card__stock";
        // line 32
        if ((($tmp =  !($context["stock"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " is-out";
        }
        yield "\">";
        yield (((($tmp = ($context["stock"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Есть в наличии") : ("Нет в наличии"));
        yield "</p>
  <form method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        // line 33
        yield ($context["cart"] ?? null);
        yield "\" data-oc-target=\"#cart\">
    <button class=\"mr-card__buy\" type=\"submit\" formaction=\"";
        // line 34
        yield ($context["cart_add"] ?? null);
        yield "\">В корзину</button>
    <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 35
        yield ($context["product_id"] ?? null);
        yield "\"/>
    <input type=\"hidden\" name=\"quantity\" value=\"";
        // line 36
        yield ($context["minimum"] ?? null);
        yield "\"/>
  </form>
</article>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/product/thumb.twig";
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
        return array (  147 => 36,  143 => 35,  139 => 34,  135 => 33,  127 => 32,  120 => 31,  116 => 29,  111 => 27,  106 => 26,  100 => 24,  98 => 23,  95 => 22,  93 => 21,  87 => 18,  83 => 17,  77 => 14,  71 => 11,  67 => 10,  58 => 8,  53 => 7,  49 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"mr-cell\">
<article class=\"mr-card\">
  <div class=\"mr-card__media\">
    {% if sort_order is defined and sort_order > 0 and sort_order <= 8 %}
      <span class=\"mr-card__hit\">Хит</span>
    {% endif %}
    <a class=\"mr-card__image\" href=\"{{ href }}\">
      <img src=\"{{ thumb }}\" alt=\"{{ name }}\" title=\"{{ name }}\"/>
    </a>
    <form class=\"mr-card__tools\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ cart }}\" data-oc-target=\"#cart\">
      <button type=\"submit\" formaction=\"{{ wishlist_add }}\" aria-label=\"В избранное\">
        <svg viewBox=\"0 0 24 24\"><path d=\"M12 19s-7-4.4-7-9a4 4 0 0 1 7-2 4 4 0 0 1 7 2c0 4.6-7 9-7 9z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" stroke-linejoin=\"round\"/></svg>
      </button>
      <button type=\"submit\" formaction=\"{{ compare_add }}\" aria-label=\"Сравнить\">
        <svg viewBox=\"0 0 24 24\"><path d=\"M8 4v16M5 7l3-3 3 3M16 20V4M13 17l3 3 3-3\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
      </button>
      <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\"/>
      <input type=\"hidden\" name=\"quantity\" value=\"{{ minimum }}\"/>
    </form>
  </div>
  {% if price %}
    <div class=\"mr-card__price\">
      {% if not special %}
        <span>{{ price }}</span>
      {% else %}
        <span>{{ special }}</span>
        <s>{{ price }}</s>
      {% endif %}
    </div>
  {% endif %}
  <h3 class=\"mr-card__name\"><a href=\"{{ href }}\">{{ name }}</a></h3>
  <p class=\"mr-card__stock{% if not stock %} is-out{% endif %}\">{{ stock ? 'Есть в наличии' : 'Нет в наличии' }}</p>
  <form method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ cart }}\" data-oc-target=\"#cart\">
    <button class=\"mr-card__buy\" type=\"submit\" formaction=\"{{ cart_add }}\">В корзину</button>
    <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\"/>
    <input type=\"hidden\" name=\"quantity\" value=\"{{ minimum }}\"/>
  </form>
</article>
</div>
", "catalog/view/template/product/thumb.twig", "/pub/www/app/public/catalog/view/template/product/thumb.twig");
    }
}
