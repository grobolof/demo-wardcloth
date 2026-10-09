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
    <form class=\"mr-card__tools\" method=\"post\" data-mr-wishlist>
      <button type=\"submit\" formaction=\"";
        // line 11
        yield ($context["wishlist_add"] ?? null);
        yield "\" aria-label=\"В избранное\" aria-pressed=\"";
        yield (((($tmp = ($context["in_wishlist"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
        yield "\"";
        if ((($tmp = ($context["in_wishlist"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " class=\"is-active\"";
        }
        yield ">
        <svg viewBox=\"0 0 24 24\"><path d=\"M12 20.2 10.5 18.8C6.4 15.1 3.5 12.5 3.5 9.2 3.5 6.5 5.6 4.4 8.3 4.4c1.5 0 3 .7 3.7 1.8a4.9 4.9 0 0 1 3.7-1.8c2.7 0 4.8 2.1 4.8 4.8 0 3.3-2.9 5.9-7 9.6L12 20.2z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linejoin=\"round\"/></svg>
      </button>
      <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 14
        yield ($context["product_id"] ?? null);
        yield "\"/>
      <input type=\"hidden\" name=\"quantity\" value=\"";
        // line 15
        yield ($context["minimum"] ?? null);
        yield "\"/>
    </form>
  </div>
  ";
        // line 18
        if ((($tmp = ($context["price"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "    <div class=\"mr-card__price\">
      ";
            // line 20
            if ((($tmp =  !($context["special"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 21
                yield "        <span>";
                yield ($context["price"] ?? null);
                yield "</span>
      ";
            } else {
                // line 23
                yield "        <span>";
                yield ($context["special"] ?? null);
                yield "</span>
        <s>";
                // line 24
                yield ($context["price"] ?? null);
                yield "</s>
      ";
            }
            // line 26
            yield "    </div>
  ";
        }
        // line 28
        yield "  <h3 class=\"mr-card__name\"><a href=\"";
        yield ($context["href"] ?? null);
        yield "\">";
        yield ($context["name"] ?? null);
        yield "</a></h3>
  <p class=\"mr-card__stock";
        // line 29
        if ((($tmp =  !($context["stock"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " is-out";
        }
        yield "\">";
        yield (((($tmp = ($context["stock"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Есть в наличии") : ("Нет в наличии"));
        yield "</p>
  <form method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        // line 30
        yield ($context["cart"] ?? null);
        yield "\" data-oc-target=\"#cart\">
    <button class=\"mr-card__buy\" type=\"submit\" formaction=\"";
        // line 31
        yield ($context["cart_add"] ?? null);
        yield "\">В корзину</button>
    <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 32
        yield ($context["product_id"] ?? null);
        yield "\"/>
    <input type=\"hidden\" name=\"quantity\" value=\"";
        // line 33
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
        return array (  144 => 33,  140 => 32,  136 => 31,  132 => 30,  124 => 29,  117 => 28,  113 => 26,  108 => 24,  103 => 23,  97 => 21,  95 => 20,  92 => 19,  90 => 18,  84 => 15,  80 => 14,  68 => 11,  58 => 8,  53 => 7,  49 => 5,  47 => 4,  42 => 1,);
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
    <form class=\"mr-card__tools\" method=\"post\" data-mr-wishlist>
      <button type=\"submit\" formaction=\"{{ wishlist_add }}\" aria-label=\"В избранное\" aria-pressed=\"{{ in_wishlist ? 'true' : 'false' }}\"{% if in_wishlist %} class=\"is-active\"{% endif %}>
        <svg viewBox=\"0 0 24 24\"><path d=\"M12 20.2 10.5 18.8C6.4 15.1 3.5 12.5 3.5 9.2 3.5 6.5 5.6 4.4 8.3 4.4c1.5 0 3 .7 3.7 1.8a4.9 4.9 0 0 1 3.7-1.8c2.7 0 4.8 2.1 4.8 4.8 0 3.3-2.9 5.9-7 9.6L12 20.2z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linejoin=\"round\"/></svg>
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
