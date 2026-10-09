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

/* catalog/view/template/product/special.twig */
class __TwigTemplate_762ed34ccd4f6decbf71c418322d81f3 extends Template
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
<div id=\"product-special\" class=\"container\">
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
      <div class=\"mr-prose\">
        <p>Акции на компьютеры и ноутбуки в «Мистер Робот» – выгодные предложения для каждого!</p>
        <p>В интернет-магазине «Мистер Робот» лучшие предложения на компьютеры и ноутбуки, которые станут вашими надежными помощниками в работе, учебе и развлечениях. Мы собрали для вас самые выгодные скидки, чтобы вы могли приобрести качественную технику по доступной цене.</p>
        <h3>Почему стоит выбрать «Мистер Робот»?</h3>
        <ol>
          <li><b>Широкий ассортимент:</b> У нас вы найдете игровые компьютеры, ноутбуки для бизнеса, ультрабуки для учебы и компактные устройства для повседневных задач. Каждое устройство уникально и представлено в единственном экземпляре.</li>
          <li><b>Качество и надежность:</b> Мы предлагаем только проверенные модели от ведущих производителей, чтобы вы могли быть уверены в своем выборе.</li>
          <li><b>Экспертная помощь:</b> Наши специалисты всегда готовы проконсультировать вас и помочь подобрать технику, которая идеально подойдет под ваши потребности.</li>
          <li><b>Скидки и акции:</b> Мы регулярно обновляем наши предложения, чтобы вы могли приобрести технику по самым выгодным ценам.</li>
        </ol>
        <h3>Что вы найдете на странице акций?</h3>
        <ul>
          <li>Игровые компьютеры со скидкой: Мощные системы для геймеров, которые обеспечат плавный геймплей и максимальную производительность.</li>
          <li>Ноутбуки для работы и учебы: Надежные устройства с длительным временем автономной работы и высокой производительностью.</li>
          <li>Компактные решения для дома: Легкие и удобные ноутбуки для серфинга в интернете, просмотра фильмов и общения.</li>
        </ul>
        <h3>Как воспользоваться акцией?</h3>
        <ol>
          <li>Выберите понравившийся товар из списка акционных предложений.</li>
          <li>Оформите заказ онлайн или посетите наш магазин по адресу: Ленинский пр-т, 17.</li>
          <li>Получите свою технику с гарантией качества и наслаждайтесь выгодной покупкой!</li>
        </ol>
        <h3>Почему выгодно покупать у нас?</h3>
        <p>«Мистер Робот» – это не просто магазин, это ваш надежный партнер в мире компьютерных технологий. Мы ценим ваше время и доверие, поэтому предлагаем только лучшие решения. А если вы хотите собрать компьютер самостоятельно, наши эксперты помогут подобрать комплектующие и настроить систему.</p>
        <p>Не упустите возможность приобрести технику по сниженной цене! Следите за нашими акциями и обновлениями, чтобы быть в курсе самых горячих предложений.</p>
        <p>«Мистер Робот» – технологии, которые работают на вас!</p>
      </div>
      ";
        // line 38
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 39
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 41
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
        return "catalog/view/template/product/special.twig";
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
        return array (  114 => 41,  109 => 39,  105 => 38,  74 => 10,  70 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"product-special\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  <div class=\"row\">{{ column_left }}
    <div id=\"content\" class=\"col\">{{ content_top }}
      <h1>{{ heading_title }}</h1>
      <div class=\"mr-prose\">
        <p>Акции на компьютеры и ноутбуки в «Мистер Робот» – выгодные предложения для каждого!</p>
        <p>В интернет-магазине «Мистер Робот» лучшие предложения на компьютеры и ноутбуки, которые станут вашими надежными помощниками в работе, учебе и развлечениях. Мы собрали для вас самые выгодные скидки, чтобы вы могли приобрести качественную технику по доступной цене.</p>
        <h3>Почему стоит выбрать «Мистер Робот»?</h3>
        <ol>
          <li><b>Широкий ассортимент:</b> У нас вы найдете игровые компьютеры, ноутбуки для бизнеса, ультрабуки для учебы и компактные устройства для повседневных задач. Каждое устройство уникально и представлено в единственном экземпляре.</li>
          <li><b>Качество и надежность:</b> Мы предлагаем только проверенные модели от ведущих производителей, чтобы вы могли быть уверены в своем выборе.</li>
          <li><b>Экспертная помощь:</b> Наши специалисты всегда готовы проконсультировать вас и помочь подобрать технику, которая идеально подойдет под ваши потребности.</li>
          <li><b>Скидки и акции:</b> Мы регулярно обновляем наши предложения, чтобы вы могли приобрести технику по самым выгодным ценам.</li>
        </ol>
        <h3>Что вы найдете на странице акций?</h3>
        <ul>
          <li>Игровые компьютеры со скидкой: Мощные системы для геймеров, которые обеспечат плавный геймплей и максимальную производительность.</li>
          <li>Ноутбуки для работы и учебы: Надежные устройства с длительным временем автономной работы и высокой производительностью.</li>
          <li>Компактные решения для дома: Легкие и удобные ноутбуки для серфинга в интернете, просмотра фильмов и общения.</li>
        </ul>
        <h3>Как воспользоваться акцией?</h3>
        <ol>
          <li>Выберите понравившийся товар из списка акционных предложений.</li>
          <li>Оформите заказ онлайн или посетите наш магазин по адресу: Ленинский пр-т, 17.</li>
          <li>Получите свою технику с гарантией качества и наслаждайтесь выгодной покупкой!</li>
        </ol>
        <h3>Почему выгодно покупать у нас?</h3>
        <p>«Мистер Робот» – это не просто магазин, это ваш надежный партнер в мире компьютерных технологий. Мы ценим ваше время и доверие, поэтому предлагаем только лучшие решения. А если вы хотите собрать компьютер самостоятельно, наши эксперты помогут подобрать комплектующие и настроить систему.</p>
        <p>Не упустите возможность приобрести технику по сниженной цене! Следите за нашими акциями и обновлениями, чтобы быть в курсе самых горячих предложений.</p>
        <p>«Мистер Робот» – технологии, которые работают на вас!</p>
      </div>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}
", "catalog/view/template/product/special.twig", "/pub/www/app/public/catalog/view/template/product/special.twig");
    }
}
