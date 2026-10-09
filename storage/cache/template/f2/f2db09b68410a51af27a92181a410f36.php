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

/* catalog/view/template/common/success.twig */
class __TwigTemplate_1d1912ab17cdf612e787eacd8a3dc706 extends Template
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
<div id=\"common-success\" class=\"mr-success\">
  <div class=\"mr-wrap\">
    <div class=\"mr-success__card\">
      <div class=\"mr-success__icon\" aria-hidden=\"true\">
        <svg viewBox=\"0 0 24 24\"><circle cx=\"12\" cy=\"12\" r=\"9\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\"/><path d=\"M8 12.2 10.8 15 16 9.5\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
      </div>
      <h1>Заказ оформлен</h1>
      <p>Спасибо за покупку. Мы приняли ваш заказ";
        // line 9
        if ((($tmp = ($context["order_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " №";
            yield ($context["order_id"] ?? null);
        }
        yield " и скоро свяжемся с вами для подтверждения.</p>
      ";
        // line 10
        if ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "        <p>Статус и состав заказа можно посмотреть в личном кабинете.</p>
      ";
        }
        // line 13
        yield "      <div class=\"mr-success__actions\">
        ";
        // line 14
        if ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "          <a class=\"mr-success__btn\" href=\"";
            yield ($context["orders"] ?? null);
            yield "\">Перейти к заказам</a>
        ";
        }
        // line 17
        yield "        <a class=\"mr-success__btn";
        if ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " mr-success__btn--ghost";
        }
        yield "\" href=\"";
        yield ($context["continue"] ?? null);
        yield "\">Продолжить покупки</a>
      </div>
    </div>
  </div>
</div>
";
        // line 22
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
        return "catalog/view/template/common/success.twig";
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
        return array (  90 => 22,  77 => 17,  71 => 15,  69 => 14,  66 => 13,  62 => 11,  60 => 10,  53 => 9,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"common-success\" class=\"mr-success\">
  <div class=\"mr-wrap\">
    <div class=\"mr-success__card\">
      <div class=\"mr-success__icon\" aria-hidden=\"true\">
        <svg viewBox=\"0 0 24 24\"><circle cx=\"12\" cy=\"12\" r=\"9\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\"/><path d=\"M8 12.2 10.8 15 16 9.5\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/></svg>
      </div>
      <h1>Заказ оформлен</h1>
      <p>Спасибо за покупку. Мы приняли ваш заказ{% if order_id %} №{{ order_id }}{% endif %} и скоро свяжемся с вами для подтверждения.</p>
      {% if logged %}
        <p>Статус и состав заказа можно посмотреть в личном кабинете.</p>
      {% endif %}
      <div class=\"mr-success__actions\">
        {% if logged %}
          <a class=\"mr-success__btn\" href=\"{{ orders }}\">Перейти к заказам</a>
        {% endif %}
        <a class=\"mr-success__btn{% if logged %} mr-success__btn--ghost{% endif %}\" href=\"{{ continue }}\">Продолжить покупки</a>
      </div>
    </div>
  </div>
</div>
{{ footer }}
", "catalog/view/template/common/success.twig", "/pub/www/app/public/catalog/view/template/common/success.twig");
    }
}
