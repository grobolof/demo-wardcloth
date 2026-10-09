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

/* catalog/view/template/common/search.twig */
class __TwigTemplate_ffd0bbe5f7fd10cbaa60e39938debb8d extends Template
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
        yield "<form action=\"";
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" class=\"mr-search\">
  <input type=\"text\" name=\"search\" value=\"";
        // line 2
        yield ($context["search"] ?? null);
        yield "\" placeholder=\"Найти\" aria-label=\"Найти\"/>
  <button type=\"submit\" aria-label=\"Найти\">
    <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><circle cx=\"11\" cy=\"11\" r=\"6.2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\"/><path d=\"M16 16.5 20 20.5\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\"/></svg>
  </button>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/search.twig";
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
        return array (  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form action=\"{{ action }}\" method=\"post\" class=\"mr-search\">
  <input type=\"text\" name=\"search\" value=\"{{ search }}\" placeholder=\"Найти\" aria-label=\"Найти\"/>
  <button type=\"submit\" aria-label=\"Найти\">
    <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><circle cx=\"11\" cy=\"11\" r=\"6.2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\"/><path d=\"M16 16.5 20 20.5\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\"/></svg>
  </button>
</form>
", "catalog/view/template/common/search.twig", "/pub/www/app/public/catalog/view/template/common/search.twig");
    }
}
