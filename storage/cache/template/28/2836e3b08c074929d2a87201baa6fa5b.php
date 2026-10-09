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

/* catalog/view/template/common/footer.twig */
class __TwigTemplate_617f8d04b70584a6f6c2a8c1608043a0 extends Template
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
        yield "</main>
<footer class=\"mr-footer\">
  <div class=\"mr-wrap mr-footer__main\">
    <div>
      <h3>Интернет-магазин</h3>
      <ul>
        <li><a href=\"";
        // line 7
        yield ($context["special"] ?? null);
        yield "\">Акции</a></li>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 9
            yield "          <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 9);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 9);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "      </ul>
    </div>
    <div>
      <h3>Компания</h3>
      <ul>
        <li><a href=\"";
        // line 16
        yield ($context["about"] ?? null);
        yield "\">О магазине</a></li>
        <li><a href=\"";
        // line 17
        yield ($context["contact"] ?? null);
        yield "\">Контакты</a></li>
      </ul>
    </div>
    <div>
      <h3>Информация</h3>
      <ul>
        <li><a href=\"";
        // line 23
        yield ($context["payment"] ?? null);
        yield "\">Условия оплаты</a></li>
        <li><a href=\"";
        // line 24
        yield ($context["delivery"] ?? null);
        yield "\">Условия доставки</a></li>
        <li><a href=\"";
        // line 25
        yield ($context["warranty"] ?? null);
        yield "\">Гарантия на товар</a></li>
        <li><a href=\"";
        // line 26
        yield ($context["offer"] ?? null);
        yield "\">Пользовательское соглашение</a></li>
        <li><a href=\"";
        // line 27
        yield ($context["privacy"] ?? null);
        yield "\">Политика обработки персональных данных</a></li>
      </ul>
    </div>
    <div class=\"mr-footer__contacts\">
      <h3>Контакты</h3>
      ";
        // line 32
        if ((($tmp = ($context["telephone"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "        <a class=\"mr-footer__phone\" href=\"tel:";
            yield Twig\Extension\CoreExtension::replace(($context["telephone"] ?? null), [" " => "", "(" => "", ")" => "", "-" => ""]);
            yield "\">";
            yield ($context["telephone"] ?? null);
            yield "</a>
      ";
        }
        // line 35
        yield "      <a class=\"mr-footer__call\" href=\"";
        yield ($context["contact"] ?? null);
        yield "\">Заказать звонок</a>
      <p class=\"mr-footer__address\">108811, г. Москва, вн.тер.г. муниципальный округ Солнцево, кв-л 32, д. 17А стр. 1</p>
      <p class=\"mr-footer__hours\">Ежедневно с 10:00 до 20:00</p>
      <div class=\"mr-footer__socials\">
        <a href=\"";
        // line 39
        yield ($context["contact"] ?? null);
        yield "\" aria-label=\"ВКонтакте\">
          <svg viewBox=\"0 0 24 24\"><path d=\"M4 7.5h2.3s.1 5.3 3.2 5.3c.5 0 .8-.1.8-.8V7.5h2.4v4.7c0 .7.3.8.8.8 2.1 0 3.3-5.5 3.3-5.5H19s.2 2.8-1.6 5.1c-1.1 1.4-2.4 1.6-2.4 1.6l2.7 3.3H15l-2.2-3.1s-.3-.4-.8-.4c-.6 0-.8.4-.8.4L8.8 17.5H6.4l2.8-3.4S4 11.2 4 7.5z\" fill=\"currentColor\"/></svg>
        </a>
        <a href=\"";
        // line 42
        yield ($context["contact"] ?? null);
        yield "\" aria-label=\"Telegram\">
          <svg viewBox=\"0 0 24 24\"><path d=\"M20 5 4.5 11.2c-.9.3-.9 1.6.1 1.9l4 1.2 1.5 4.6c.3.9 1.5 1.1 2.1.3l2.2-2.8 4.1 3c.8.6 1.9.1 2.1-.8L21.8 6c.2-1.1-.8-2-1.8-1z\" fill=\"currentColor\"/></svg>
        </a>
      </div>
    </div>
  </div>
  <div class=\"mr-wrap mr-footer__bottom\">
    <span>© ";
        // line 49
        yield $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y");
        if ((($tmp = ($context["simple_footer"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " Магазин компьютеров и ноутбуков в Калининграде";
        } else {
            yield " Мистер Робот";
        }
        yield "</span>
    <span class=\"mr-footer__legal\">
      <a href=\"";
        // line 51
        yield ($context["privacy"] ?? null);
        yield "\">Политика обработки персональных данных</a>
      <a href=\"";
        // line 52
        yield ($context["offer"] ?? null);
        yield "\">Пользовательское соглашение</a>
    </span>
  </div>
</footer>
<nav class=\"mr-tabbar\" aria-label=\"Мобильное меню\">
  <a href=\"";
        // line 57
        yield ($context["home"] ?? null);
        yield "\">Главная</a>
  <a href=\"";
        // line 58
        yield ((CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["categories"] ?? null)), "href", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["categories"] ?? null)), "href", [], "any", false, false, false, 58), ($context["home"] ?? null))) : (($context["home"] ?? null)));
        yield "\">Каталог</a>
  <a href=\"";
        // line 59
        yield ((array_key_exists("shopping_cart", $context)) ? (Twig\Extension\CoreExtension::default(($context["shopping_cart"] ?? null), ($context["contact"] ?? null))) : (($context["contact"] ?? null)));
        yield "\">Корзина<span class=\"mr-cart-count";
        if ((($tmp =  !($context["cart_total"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " is-empty";
        }
        yield "\" data-mr-cart-count>";
        yield ($context["cart_total"] ?? null);
        yield "</span></a>
  ";
        // line 60
        if ((($tmp = ($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 61
            yield "    <a href=\"";
            yield ($context["account"] ?? null);
            yield "\">Кабинет</a>
  ";
        } else {
            // line 63
            yield "    <button type=\"button\" data-mr-login>Кабинет</button>
  ";
        }
        // line 65
        yield "  <a href=\"";
        yield ($context["contact"] ?? null);
        yield "\">Контакты</a>
</nav>
";
        // line 67
        yield ($context["cookie"] ?? null);
        yield "
<script src=\"";
        // line 68
        yield ($context["bootstrap"] ?? null);
        yield "\" type=\"text/javascript\"></script>
";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 70
            yield "  <script src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 70);
            yield "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "<script src=\"catalog/view/javascript/mrrobot.js?v=10\" type=\"text/javascript\"></script>
</body></html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/footer.twig";
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
        return array (  226 => 72,  217 => 70,  213 => 69,  209 => 68,  205 => 67,  199 => 65,  195 => 63,  189 => 61,  187 => 60,  177 => 59,  173 => 58,  169 => 57,  161 => 52,  157 => 51,  147 => 49,  137 => 42,  131 => 39,  123 => 35,  115 => 33,  113 => 32,  105 => 27,  101 => 26,  97 => 25,  93 => 24,  89 => 23,  80 => 17,  76 => 16,  69 => 11,  58 => 9,  54 => 8,  50 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("</main>
<footer class=\"mr-footer\">
  <div class=\"mr-wrap mr-footer__main\">
    <div>
      <h3>Интернет-магазин</h3>
      <ul>
        <li><a href=\"{{ special }}\">Акции</a></li>
        {% for category in categories %}
          <li><a href=\"{{ category.href }}\">{{ category.name }}</a></li>
        {% endfor %}
      </ul>
    </div>
    <div>
      <h3>Компания</h3>
      <ul>
        <li><a href=\"{{ about }}\">О магазине</a></li>
        <li><a href=\"{{ contact }}\">Контакты</a></li>
      </ul>
    </div>
    <div>
      <h3>Информация</h3>
      <ul>
        <li><a href=\"{{ payment }}\">Условия оплаты</a></li>
        <li><a href=\"{{ delivery }}\">Условия доставки</a></li>
        <li><a href=\"{{ warranty }}\">Гарантия на товар</a></li>
        <li><a href=\"{{ offer }}\">Пользовательское соглашение</a></li>
        <li><a href=\"{{ privacy }}\">Политика обработки персональных данных</a></li>
      </ul>
    </div>
    <div class=\"mr-footer__contacts\">
      <h3>Контакты</h3>
      {% if telephone %}
        <a class=\"mr-footer__phone\" href=\"tel:{{ telephone|replace({' ': '', '(': '', ')': '', '-': ''}) }}\">{{ telephone }}</a>
      {% endif %}
      <a class=\"mr-footer__call\" href=\"{{ contact }}\">Заказать звонок</a>
      <p class=\"mr-footer__address\">108811, г. Москва, вн.тер.г. муниципальный округ Солнцево, кв-л 32, д. 17А стр. 1</p>
      <p class=\"mr-footer__hours\">Ежедневно с 10:00 до 20:00</p>
      <div class=\"mr-footer__socials\">
        <a href=\"{{ contact }}\" aria-label=\"ВКонтакте\">
          <svg viewBox=\"0 0 24 24\"><path d=\"M4 7.5h2.3s.1 5.3 3.2 5.3c.5 0 .8-.1.8-.8V7.5h2.4v4.7c0 .7.3.8.8.8 2.1 0 3.3-5.5 3.3-5.5H19s.2 2.8-1.6 5.1c-1.1 1.4-2.4 1.6-2.4 1.6l2.7 3.3H15l-2.2-3.1s-.3-.4-.8-.4c-.6 0-.8.4-.8.4L8.8 17.5H6.4l2.8-3.4S4 11.2 4 7.5z\" fill=\"currentColor\"/></svg>
        </a>
        <a href=\"{{ contact }}\" aria-label=\"Telegram\">
          <svg viewBox=\"0 0 24 24\"><path d=\"M20 5 4.5 11.2c-.9.3-.9 1.6.1 1.9l4 1.2 1.5 4.6c.3.9 1.5 1.1 2.1.3l2.2-2.8 4.1 3c.8.6 1.9.1 2.1-.8L21.8 6c.2-1.1-.8-2-1.8-1z\" fill=\"currentColor\"/></svg>
        </a>
      </div>
    </div>
  </div>
  <div class=\"mr-wrap mr-footer__bottom\">
    <span>© {{ \"now\"|date(\"Y\") }}{% if simple_footer %} Магазин компьютеров и ноутбуков в Калининграде{% else %} Мистер Робот{% endif %}</span>
    <span class=\"mr-footer__legal\">
      <a href=\"{{ privacy }}\">Политика обработки персональных данных</a>
      <a href=\"{{ offer }}\">Пользовательское соглашение</a>
    </span>
  </div>
</footer>
<nav class=\"mr-tabbar\" aria-label=\"Мобильное меню\">
  <a href=\"{{ home }}\">Главная</a>
  <a href=\"{{ categories|first.href|default(home) }}\">Каталог</a>
  <a href=\"{{ shopping_cart|default(contact) }}\">Корзина<span class=\"mr-cart-count{% if not cart_total %} is-empty{% endif %}\" data-mr-cart-count>{{ cart_total }}</span></a>
  {% if logged %}
    <a href=\"{{ account }}\">Кабинет</a>
  {% else %}
    <button type=\"button\" data-mr-login>Кабинет</button>
  {% endif %}
  <a href=\"{{ contact }}\">Контакты</a>
</nav>
{{ cookie }}
<script src=\"{{ bootstrap }}\" type=\"text/javascript\"></script>
{% for script in scripts %}
  <script src=\"{{ script.href }}\" type=\"text/javascript\"></script>
{% endfor %}
<script src=\"catalog/view/javascript/mrrobot.js?v=10\" type=\"text/javascript\"></script>
</body></html>
", "catalog/view/template/common/footer.twig", "/pub/www/app/public/catalog/view/template/common/footer.twig");
    }
}
