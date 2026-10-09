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

/* catalog/view/template/common/home.twig */
class __TwigTemplate_184fcabc32497be06153ad230b61df50 extends Template
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
<section class=\"mr-banner\" data-mr-slider>
  <div class=\"mr-wrap mr-banner__frame\">
    <div class=\"mr-banner__viewport\">
      ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["slides"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 6
            yield "        <a class=\"mr-slide mr-slide--";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "theme", [], "any", false, false, false, 6);
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " is-active";
            }
            yield "\" href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "href", [], "any", false, false, false, 6);
            yield "\">
          <div class=\"mr-slide__copy\">
            <p class=\"mr-slide__kicker\">Мистер Робот</p>
            <h2>";
            // line 9
            yield CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "title", [], "any", false, false, false, 9);
            yield "</h2>
            <p>";
            // line 10
            yield CoreExtension::getAttribute($this->env, $this->source, $context["slide"], "text", [], "any", false, false, false, 10);
            yield "</p>
            <span class=\"mr-slide__more\">Подробнее</span>
          </div>
          <div class=\"mr-slide__art\" aria-hidden=\"true\"></div>
        </a>
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
        unset($context['_seq'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "    </div>
    ";
        // line 17
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["slides"] ?? null)) > 1)) {
            // line 18
            yield "      <button type=\"button\" class=\"mr-banner__arrow mr-banner__arrow--prev\" data-mr-prev aria-label=\"Предыдущий слайд\">
        <svg viewBox=\"0 0 24 24\"><path d=\"M14 6 8 12l6 6\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
      </button>
      <button type=\"button\" class=\"mr-banner__arrow mr-banner__arrow--next\" data-mr-next aria-label=\"Следующий слайд\">
        <svg viewBox=\"0 0 24 24\"><path d=\"m10 6 6 6-6 6\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
      </button>
      <div class=\"mr-banner__dots\">
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["slides"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
                // line 26
                yield "          <button type=\"button\" class=\"mr-dot";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " is-active";
                }
                yield "\" aria-label=\"Слайд ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 26);
                yield "\"></button>
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
            unset($context['_seq'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "      </div>
    ";
        }
        // line 30
        yield "  </div>
</section>
";
        // line 32
        if ((($tmp = ($context["categories"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "  <section class=\"mr-shortcuts\">
    <div class=\"mr-wrap mr-shortcuts__row\">
      ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 36
                yield "        ";
                $context["label"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 36));
                // line 37
                yield "        <a class=\"mr-shortcut\" href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 37);
                yield "\">
          <span class=\"mr-shortcut__icon\" aria-hidden=\"true\">
            ";
                // line 39
                if (CoreExtension::inFilter("ноут", ($context["label"] ?? null))) {
                    // line 40
                    yield "              <svg viewBox=\"0 0 48 48\"><rect x=\"8\" y=\"12\" width=\"32\" height=\"18\" rx=\"2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/><path d=\"M6 34h36l-3-4H9z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linejoin=\"round\"/></svg>
            ";
                } elseif (CoreExtension::inFilter("теле",                 // line 41
($context["label"] ?? null))) {
                    // line 42
                    yield "              <svg viewBox=\"0 0 48 48\"><rect x=\"6\" y=\"12\" width=\"36\" height=\"22\" rx=\"2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/><path d=\"M18 38h12M24 34v4\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/></svg>
            ";
                } elseif (CoreExtension::inFilter("смарт",                 // line 43
($context["label"] ?? null))) {
                    // line 44
                    yield "              <svg viewBox=\"0 0 48 48\"><rect x=\"16\" y=\"6\" width=\"16\" height=\"36\" rx=\"3\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/><circle cx=\"24\" cy=\"36\" r=\"1.3\" fill=\"currentColor\"/></svg>
            ";
                } else {
                    // line 46
                    yield "              <svg viewBox=\"0 0 48 48\"><path d=\"M16 18h16v14a6 6 0 0 1-6 6h-4a6 6 0 0 1-6-6V18z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/><path d=\"M19 18v-3a5 5 0 0 1 10 0v3\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/></svg>
            ";
                }
                // line 48
                yield "          </span>
          <span>";
                // line 49
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 49);
                yield "</span>
        </a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            yield "    </div>
  </section>
";
        }
        // line 55
        yield "<div class=\"mr-home\">
  ";
        // line 56
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "    <section class=\"mr-section\">
      <div class=\"mr-wrap\">
        <div class=\"mr-grid\">
          ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 61
                yield "            ";
                yield $context["product"];
                yield "
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            yield "        </div>
      </div>
    </section>
  ";
        }
        // line 67
        yield "  ";
        if ((($tmp = ($context["brands"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 68
            yield "    <section class=\"mr-section\">
      <div class=\"mr-wrap\">
        <div class=\"mr-brands\">
          ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["brands"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
                // line 72
                yield "            ";
                $context["slug"] = Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["brand"], "name", [], "any", false, false, false, 72)), ["'" => "", " " => "", "’" => ""]);
                // line 73
                yield "            <a class=\"mr-brand mr-brand--";
                yield ($context["slug"] ?? null);
                yield "\" href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["brand"], "href", [], "any", false, false, false, 73);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["brand"], "name", [], "any", false, false, false, 73);
                yield "</a>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['brand'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            yield "        </div>
      </div>
    </section>
  ";
        }
        // line 79
        yield "  <section class=\"mr-section\">
    <div class=\"mr-wrap mr-about\">
      <h2>Магазин техники</h2>
      <p>Мистер Робот — интернет-магазин, в котором можно выбрать ноутбук, телевизор, смартфон или кофемашину и забрать заказ без лишних шагов. В каталоге техника Apple, Samsung, Sony, LG, Xiaomi, ASUS, De'Longhi и Philips.</p>
      <p>Карточка товара показывает цену, наличие и кнопку «В корзину». Если нужна консультация по модели, оставьте заявку на обратный звонок — подскажем по характеристикам и комплектации.</p>
      <a class=\"mr-about__more\" href=\"";
        // line 84
        yield ($context["about"] ?? null);
        yield "\">О магазине</a>
    </div>
  </section>
  ";
        // line 87
        if ((($tmp = ($context["actual"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 88
            yield "    <section class=\"mr-section\">
      <div class=\"mr-wrap\">
        <div class=\"mr-section__head\">
          <h2>Актуально</h2>
        </div>
        <div class=\"mr-grid\">
          ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["actual"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 95
                yield "            ";
                yield $context["product"];
                yield "
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            yield "        </div>
      </div>
    </section>
  ";
        }
        // line 101
        yield "</div>
";
        // line 102
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
        return "catalog/view/template/common/home.twig";
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
        return array (  326 => 102,  323 => 101,  317 => 97,  308 => 95,  304 => 94,  296 => 88,  294 => 87,  288 => 84,  281 => 79,  275 => 75,  262 => 73,  259 => 72,  255 => 71,  250 => 68,  247 => 67,  241 => 63,  232 => 61,  228 => 60,  223 => 57,  221 => 56,  218 => 55,  213 => 52,  204 => 49,  201 => 48,  197 => 46,  193 => 44,  191 => 43,  188 => 42,  186 => 41,  183 => 40,  181 => 39,  175 => 37,  172 => 36,  168 => 35,  164 => 33,  162 => 32,  158 => 30,  154 => 28,  133 => 26,  116 => 25,  107 => 18,  105 => 17,  102 => 16,  82 => 10,  78 => 9,  66 => 6,  49 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<section class=\"mr-banner\" data-mr-slider>
  <div class=\"mr-wrap mr-banner__frame\">
    <div class=\"mr-banner__viewport\">
      {% for slide in slides %}
        <a class=\"mr-slide mr-slide--{{ slide.theme }}{% if loop.first %} is-active{% endif %}\" href=\"{{ slide.href }}\">
          <div class=\"mr-slide__copy\">
            <p class=\"mr-slide__kicker\">Мистер Робот</p>
            <h2>{{ slide.title }}</h2>
            <p>{{ slide.text }}</p>
            <span class=\"mr-slide__more\">Подробнее</span>
          </div>
          <div class=\"mr-slide__art\" aria-hidden=\"true\"></div>
        </a>
      {% endfor %}
    </div>
    {% if slides|length > 1 %}
      <button type=\"button\" class=\"mr-banner__arrow mr-banner__arrow--prev\" data-mr-prev aria-label=\"Предыдущий слайд\">
        <svg viewBox=\"0 0 24 24\"><path d=\"M14 6 8 12l6 6\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
      </button>
      <button type=\"button\" class=\"mr-banner__arrow mr-banner__arrow--next\" data-mr-next aria-label=\"Следующий слайд\">
        <svg viewBox=\"0 0 24 24\"><path d=\"m10 6 6 6-6 6\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
      </button>
      <div class=\"mr-banner__dots\">
        {% for slide in slides %}
          <button type=\"button\" class=\"mr-dot{% if loop.first %} is-active{% endif %}\" aria-label=\"Слайд {{ loop.index }}\"></button>
        {% endfor %}
      </div>
    {% endif %}
  </div>
</section>
{% if categories %}
  <section class=\"mr-shortcuts\">
    <div class=\"mr-wrap mr-shortcuts__row\">
      {% for category in categories %}
        {% set label = category.name|lower %}
        <a class=\"mr-shortcut\" href=\"{{ category.href }}\">
          <span class=\"mr-shortcut__icon\" aria-hidden=\"true\">
            {% if 'ноут' in label %}
              <svg viewBox=\"0 0 48 48\"><rect x=\"8\" y=\"12\" width=\"32\" height=\"18\" rx=\"2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/><path d=\"M6 34h36l-3-4H9z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linejoin=\"round\"/></svg>
            {% elseif 'теле' in label %}
              <svg viewBox=\"0 0 48 48\"><rect x=\"6\" y=\"12\" width=\"36\" height=\"22\" rx=\"2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/><path d=\"M18 38h12M24 34v4\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/></svg>
            {% elseif 'смарт' in label %}
              <svg viewBox=\"0 0 48 48\"><rect x=\"16\" y=\"6\" width=\"16\" height=\"36\" rx=\"3\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/><circle cx=\"24\" cy=\"36\" r=\"1.3\" fill=\"currentColor\"/></svg>
            {% else %}
              <svg viewBox=\"0 0 48 48\"><path d=\"M16 18h16v14a6 6 0 0 1-6 6h-4a6 6 0 0 1-6-6V18z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/><path d=\"M19 18v-3a5 5 0 0 1 10 0v3\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\"/></svg>
            {% endif %}
          </span>
          <span>{{ category.name }}</span>
        </a>
      {% endfor %}
    </div>
  </section>
{% endif %}
<div class=\"mr-home\">
  {% if products %}
    <section class=\"mr-section\">
      <div class=\"mr-wrap\">
        <div class=\"mr-grid\">
          {% for product in products %}
            {{ product }}
          {% endfor %}
        </div>
      </div>
    </section>
  {% endif %}
  {% if brands %}
    <section class=\"mr-section\">
      <div class=\"mr-wrap\">
        <div class=\"mr-brands\">
          {% for brand in brands %}
            {% set slug = brand.name|lower|replace({\"'\": '', ' ': '', '’': ''}) %}
            <a class=\"mr-brand mr-brand--{{ slug }}\" href=\"{{ brand.href }}\">{{ brand.name }}</a>
          {% endfor %}
        </div>
      </div>
    </section>
  {% endif %}
  <section class=\"mr-section\">
    <div class=\"mr-wrap mr-about\">
      <h2>Магазин техники</h2>
      <p>Мистер Робот — интернет-магазин, в котором можно выбрать ноутбук, телевизор, смартфон или кофемашину и забрать заказ без лишних шагов. В каталоге техника Apple, Samsung, Sony, LG, Xiaomi, ASUS, De'Longhi и Philips.</p>
      <p>Карточка товара показывает цену, наличие и кнопку «В корзину». Если нужна консультация по модели, оставьте заявку на обратный звонок — подскажем по характеристикам и комплектации.</p>
      <a class=\"mr-about__more\" href=\"{{ about }}\">О магазине</a>
    </div>
  </section>
  {% if actual %}
    <section class=\"mr-section\">
      <div class=\"mr-wrap\">
        <div class=\"mr-section__head\">
          <h2>Актуально</h2>
        </div>
        <div class=\"mr-grid\">
          {% for product in actual %}
            {{ product }}
          {% endfor %}
        </div>
      </div>
    </section>
  {% endif %}
</div>
{{ footer }}
", "catalog/view/template/common/home.twig", "/pub/www/app/public/catalog/view/template/common/home.twig");
    }
}
