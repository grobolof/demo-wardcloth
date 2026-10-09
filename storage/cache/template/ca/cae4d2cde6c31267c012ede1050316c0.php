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

/* catalog/view/template/account/wishlist_list.twig */
class __TwigTemplate_29ff235075687ea7bc95aa0d562122c2 extends Template
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
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "  <div class=\"mr-grid mr-fav\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 4
                yield "      <div class=\"mr-cell\">
        <article class=\"mr-card\">
          <div class=\"mr-card__media\">
            <a class=\"mr-card__image\" href=\"";
                // line 7
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 7);
                yield "\">
              ";
                // line 8
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 9
                    yield "                <img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 9);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9);
                    yield "\"/>
              ";
                }
                // line 11
                yield "            </a>
            <a class=\"mr-fav__remove\" href=\"";
                // line 12
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 12);
                yield "\" aria-label=\"Удалить из избранного\">
              <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M12 19s-7-4.4-7-9a4 4 0 0 1 7-2 4 4 0 0 1 7 2c0 4.6-7 9-7 9z\" fill=\"currentColor\" stroke=\"currentColor\" stroke-width=\"1.7\" stroke-linejoin=\"round\"/></svg>
            </a>
          </div>
          ";
                // line 16
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 17
                    yield "            <div class=\"mr-card__price\">
              ";
                    // line 18
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 19
                        yield "                <span>";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 19);
                        yield "</span>
              ";
                    } else {
                        // line 21
                        yield "                <span>";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 21);
                        yield "</span>
                <s>";
                        // line 22
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 22);
                        yield "</s>
              ";
                    }
                    // line 24
                    yield "            </div>
          ";
                }
                // line 26
                yield "          <h3 class=\"mr-card__name\"><a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 26);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
                yield "</a></h3>
          <p class=\"mr-card__stock";
                // line 27
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 27) <= 0)) {
                    yield " is-out";
                }
                yield "\">";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 27) > 0)) ? ("Есть в наличии") : ("Нет в наличии"));
                yield "</p>
          <form method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                // line 28
                yield ($context["cart"] ?? null);
                yield "\" data-oc-target=\"#cart\">
            <button class=\"mr-card__buy\" type=\"submit\" formaction=\"";
                // line 29
                yield ($context["cart_add"] ?? null);
                yield "\">В корзину</button>
            <input type=\"hidden\" name=\"product_id\" value=\"";
                // line 30
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 30);
                yield "\"/>
            <input type=\"hidden\" name=\"quantity\" value=\"";
                // line 31
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 31);
                yield "\"/>
          </form>
        </article>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            yield "  </div>
";
        } else {
            // line 38
            yield "  <p class=\"mr-fav__empty\">Список избранных элементов пуст</p>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/account/wishlist_list.twig";
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
        return array (  151 => 38,  147 => 36,  136 => 31,  132 => 30,  128 => 29,  124 => 28,  116 => 27,  109 => 26,  105 => 24,  100 => 22,  95 => 21,  89 => 19,  87 => 18,  84 => 17,  82 => 16,  75 => 12,  72 => 11,  62 => 9,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if products %}
  <div class=\"mr-grid mr-fav\">
    {% for product in products %}
      <div class=\"mr-cell\">
        <article class=\"mr-card\">
          <div class=\"mr-card__media\">
            <a class=\"mr-card__image\" href=\"{{ product.href }}\">
              {% if product.thumb %}
                <img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" title=\"{{ product.name }}\"/>
              {% endif %}
            </a>
            <a class=\"mr-fav__remove\" href=\"{{ product.remove }}\" aria-label=\"Удалить из избранного\">
              <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M12 19s-7-4.4-7-9a4 4 0 0 1 7-2 4 4 0 0 1 7 2c0 4.6-7 9-7 9z\" fill=\"currentColor\" stroke=\"currentColor\" stroke-width=\"1.7\" stroke-linejoin=\"round\"/></svg>
            </a>
          </div>
          {% if product.price %}
            <div class=\"mr-card__price\">
              {% if not product.special %}
                <span>{{ product.price }}</span>
              {% else %}
                <span>{{ product.special }}</span>
                <s>{{ product.price }}</s>
              {% endif %}
            </div>
          {% endif %}
          <h3 class=\"mr-card__name\"><a href=\"{{ product.href }}\">{{ product.name }}</a></h3>
          <p class=\"mr-card__stock{% if product.quantity <= 0 %} is-out{% endif %}\">{{ product.quantity > 0 ? 'Есть в наличии' : 'Нет в наличии' }}</p>
          <form method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ cart }}\" data-oc-target=\"#cart\">
            <button class=\"mr-card__buy\" type=\"submit\" formaction=\"{{ cart_add }}\">В корзину</button>
            <input type=\"hidden\" name=\"product_id\" value=\"{{ product.product_id }}\"/>
            <input type=\"hidden\" name=\"quantity\" value=\"{{ product.minimum }}\"/>
          </form>
        </article>
      </div>
    {% endfor %}
  </div>
{% else %}
  <p class=\"mr-fav__empty\">Список избранных элементов пуст</p>
{% endif %}
", "catalog/view/template/account/wishlist_list.twig", "/pub/www/app/public/catalog/view/template/account/wishlist_list.twig");
    }
}
