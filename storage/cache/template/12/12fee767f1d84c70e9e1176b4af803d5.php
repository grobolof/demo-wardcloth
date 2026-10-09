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

/* catalog/view/template/common/header.twig */
class __TwigTemplate_db1e4ae33b8077546a209da1ec1fe466 extends Template
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
        yield "<!DOCTYPE html>
<html dir=\"";
        // line 2
        yield ($context["direction"] ?? null);
        yield "\" lang=\"";
        yield ($context["lang"] ?? null);
        yield "\">
<head>
  <meta charset=\"UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>";
        // line 7
        yield ($context["title"] ?? null);
        yield "</title>
  <base href=\"";
        // line 8
        yield ($context["base"] ?? null);
        yield "\"/>
  ";
        // line 9
        if ((($tmp = ($context["description"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "    <meta name=\"description\" content=\"";
            yield ($context["description"] ?? null);
            yield "\"/>
  ";
        }
        // line 12
        yield "  ";
        if ((($tmp = ($context["keywords"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "    <meta name=\"keywords\" content=\"";
            yield ($context["keywords"] ?? null);
            yield "\"/>
  ";
        }
        // line 15
        yield "  <script src=\"";
        yield ($context["jquery"] ?? null);
        yield "\" type=\"text/javascript\"></script>
  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap\" rel=\"stylesheet\">
  <link href=\"";
        // line 19
        yield ($context["bootstrap"] ?? null);
        yield "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
  <link href=\"";
        // line 20
        yield ($context["icons"] ?? null);
        yield "\" rel=\"stylesheet\" type=\"text/css\"/>
  <link href=\"";
        // line 21
        yield ($context["stylesheet"] ?? null);
        yield "\" type=\"text/css\" rel=\"stylesheet\"/>
  <link href=\"catalog/view/stylesheet/mrrobot.css?v=21\" type=\"text/css\" rel=\"stylesheet\"/>
  <script src=\"catalog/view/javascript/common.js?v=2\" type=\"text/javascript\"></script>
  <link rel=\"icon\" href=\"image/catalog/mr/favicon.ico\" sizes=\"any\">
  <link rel=\"icon\" href=\"image/catalog/mr/favicon.svg\" type=\"image/svg+xml\">
  <link rel=\"apple-touch-icon\" href=\"image/catalog/mr/apple-touch-icon.png\">
  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 28
            yield "    <link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 28);
            yield "\" type=\"text/css\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 28);
            yield "\" media=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 28);
            yield "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['style'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 31
            yield "    <script src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 31);
            yield "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 34
            yield "    <link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 34);
            yield "\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 34);
            yield "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 37
            yield "    ";
            yield $context["analytic"];
            yield "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['analytic'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "</head>
<body class=\"mr-store";
        // line 40
        if ((($context["route"] ?? null) == "common/home")) {
            yield " is-home";
        }
        if ((($context["route"] ?? null) == "checkout/cart")) {
            yield " is-cart";
        }
        if ((($context["route"] ?? null) == "checkout/checkout")) {
            yield " is-checkout";
        }
        yield "\">
<div id=\"alert\"></div>
<header class=\"mr-header";
        // line 42
        if (((($context["route"] ?? null) == "checkout/cart") || (($context["route"] ?? null) == "checkout/checkout"))) {
            yield " mr-header--cart";
        }
        yield "\" id=\"mr-header\">
";
        // line 43
        if (((($context["route"] ?? null) == "checkout/cart") || (($context["route"] ?? null) == "checkout/checkout"))) {
            // line 44
            yield "  <div class=\"mr-wrap mr-carthead\">
    <a class=\"mr-logo\" href=\"";
            // line 45
            yield ($context["home"] ?? null);
            yield "\" aria-label=\"Мистер Робот\">
      <svg class=\"mr-logo__bot\" viewBox=\"0 0 64 58\" aria-hidden=\"true\">
        <rect x=\"30\" y=\"0\" width=\"4\" height=\"6\" fill=\"#3d78d6\"/>
        <rect x=\"12\" y=\"6\" width=\"40\" height=\"24\" fill=\"#f2c200\"/>
        <rect x=\"18\" y=\"12\" width=\"8\" height=\"8\" fill=\"#2f6fd6\"/>
        <rect x=\"38\" y=\"12\" width=\"8\" height=\"8\" fill=\"#2f6fd6\"/>
        <rect x=\"28\" y=\"22\" width=\"8\" height=\"4\" fill=\"#2f6fd6\"/>
        <rect x=\"16\" y=\"32\" width=\"32\" height=\"14\" fill=\"#3d78d6\"/>
        <rect x=\"28\" y=\"36\" width=\"8\" height=\"6\" fill=\"#f2c200\"/>
        <rect x=\"6\" y=\"34\" width=\"8\" height=\"6\" fill=\"#f2c200\"/>
        <rect x=\"50\" y=\"34\" width=\"8\" height=\"6\" fill=\"#f2c200\"/>
        <rect x=\"18\" y=\"48\" width=\"10\" height=\"8\" fill=\"#2f6fd6\"/>
        <rect x=\"36\" y=\"48\" width=\"10\" height=\"8\" fill=\"#2f6fd6\"/>
      </svg>
      <span class=\"mr-logo__text\">
        <span>МИСТЕР</span>
        <span>РОБОТ</span>
      </span>
    </a>
    ";
            // line 64
            if ((($tmp = ($context["telephone"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 65
                yield "      <a class=\"mr-carthead__phone\" href=\"tel:";
                yield Twig\Extension\CoreExtension::replace(($context["telephone"] ?? null), [" " => "", "(" => "", ")" => "", "-" => ""]);
                yield "\">";
                yield ($context["telephone"] ?? null);
                yield "</a>
    ";
            }
            // line 67
            yield "  </div>
";
        } else {
            // line 69
            yield "  <div class=\"mr-top\">
    <div class=\"mr-wrap mr-top__inner\">
      <nav class=\"mr-top__links\" aria-label=\"Разделы\">
        <a href=\"";
            // line 72
            yield ($context["special"] ?? null);
            yield "\">Акции</a>
        <a href=\"";
            // line 73
            yield ($context["about"] ?? null);
            yield "\">О магазине</a>
        <a href=\"";
            // line 74
            yield ($context["contact"] ?? null);
            yield "\">Контакты</a>
      </nav>
      <div class=\"mr-top__contacts\">
        ";
            // line 77
            if ((($tmp = ($context["telephone"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 78
                yield "          <a class=\"mr-top__phone\" href=\"tel:";
                yield Twig\Extension\CoreExtension::replace(($context["telephone"] ?? null), [" " => "", "(" => "", ")" => "", "-" => ""]);
                yield "\">";
                yield ($context["telephone"] ?? null);
                yield "</a>
        ";
            }
            // line 80
            yield "        <a class=\"mr-top__call\" href=\"";
            yield ($context["contact"] ?? null);
            yield "\">Заказать звонок</a>
      </div>
    </div>
  </div>
  <div class=\"mr-header__bar\">
    <a class=\"mr-logo\" href=\"";
            // line 85
            yield ($context["home"] ?? null);
            yield "\" aria-label=\"Мистер Робот\">
      <svg class=\"mr-logo__bot\" viewBox=\"0 0 64 58\" aria-hidden=\"true\">
        <rect x=\"30\" y=\"0\" width=\"4\" height=\"6\" fill=\"#3d78d6\"/>
        <rect x=\"12\" y=\"6\" width=\"40\" height=\"24\" fill=\"#f2c200\"/>
        <rect x=\"18\" y=\"12\" width=\"8\" height=\"8\" fill=\"#2f6fd6\"/>
        <rect x=\"38\" y=\"12\" width=\"8\" height=\"8\" fill=\"#2f6fd6\"/>
        <rect x=\"28\" y=\"22\" width=\"8\" height=\"4\" fill=\"#2f6fd6\"/>
        <rect x=\"16\" y=\"32\" width=\"32\" height=\"14\" fill=\"#3d78d6\"/>
        <rect x=\"28\" y=\"36\" width=\"8\" height=\"6\" fill=\"#f2c200\"/>
        <rect x=\"6\" y=\"34\" width=\"8\" height=\"6\" fill=\"#f2c200\"/>
        <rect x=\"50\" y=\"34\" width=\"8\" height=\"6\" fill=\"#f2c200\"/>
        <rect x=\"18\" y=\"48\" width=\"10\" height=\"8\" fill=\"#2f6fd6\"/>
        <rect x=\"36\" y=\"48\" width=\"10\" height=\"8\" fill=\"#2f6fd6\"/>
      </svg>
      <span class=\"mr-logo__text\">
        <span>МИСТЕР</span>
        <span>РОБОТ</span>
      </span>
    </a>
    <button type=\"button\" class=\"mr-catalog-btn\" id=\"mr-catalog-btn\" aria-expanded=\"false\" aria-controls=\"mr-catalog\">
      <svg viewBox=\"0 0 20 20\" aria-hidden=\"true\"><path d=\"M3 5h14M3 10h14M3 15h14\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\"/></svg>
      <span>Каталог</span>
    </button>
    ";
            // line 108
            yield ($context["search"] ?? null);
            yield "
    <nav class=\"mr-actions\" aria-label=\"Покупатель\">
      ";
            // line 110
            if ((($tmp =  !($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 111
                yield "        <button type=\"button\" class=\"mr-action\" data-mr-login>
          <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><circle cx=\"12\" cy=\"8\" r=\"3.2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\"/><path d=\"M5.5 19.5c1.4-3 3.6-4.5 6.5-4.5s5.1 1.5 6.5 4.5\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" stroke-linecap=\"round\"/></svg>
          <span>Войти</span>
        </button>
      ";
            } else {
                // line 116
                yield "        <div class=\"mr-action mr-action--menu\">
          <a class=\"mr-action\" href=\"";
                // line 117
                yield ($context["account"] ?? null);
                yield "\">
            <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><circle cx=\"12\" cy=\"8\" r=\"3.2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\"/><path d=\"M5.5 19.5c1.4-3 3.6-4.5 6.5-4.5s5.1 1.5 6.5 4.5\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" stroke-linecap=\"round\"/></svg>
            <span>Кабинет</span>
          </a>
          <div class=\"mr-action__drop\">
            <a href=\"";
                // line 122
                yield ($context["account"] ?? null);
                yield "\">Личный кабинет</a>
            <a href=\"";
                // line 123
                yield ($context["order"] ?? null);
                yield "\">Заказы</a>
            <a href=\"";
                // line 124
                yield ($context["logout"] ?? null);
                yield "\">Выйти</a>
          </div>
        </div>
      ";
            }
            // line 128
            yield "      <a class=\"mr-action\" href=\"";
            yield ($context["wishlist"] ?? null);
            yield "\" id=\"wishlist-total\">
        <svg viewBox=\"1.6 2.6 20.8 19.4\" aria-hidden=\"true\"><path d=\"M12 20.6 10.4 19.1C6.2 15.3 3.2 12.6 3.2 9.2 3.2 6.4 5.4 4.2 8.2 4.2c1.6 0 3.1.75 4 1.92a5.2 5.2 0 0 1 4-1.92c2.8 0 5 2.2 5 5 0 3.4-3 6.1-7.2 9.9L12 20.6z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" stroke-linejoin=\"round\"/></svg>
        <span>Избранное</span>
      </a>
      <a class=\"mr-action mr-action--cart\" href=\"";
            // line 132
            yield ($context["shopping_cart"] ?? null);
            yield "\">
        <span class=\"mr-action__icon\">
          <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M6 7h15l-1.6 9.2a1 1 0 0 1-1 .8H8.2a1 1 0 0 1-1-.8L5.2 4H3\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><circle cx=\"9\" cy=\"20\" r=\"1.3\" fill=\"currentColor\"/><circle cx=\"17\" cy=\"20\" r=\"1.3\" fill=\"currentColor\"/></svg>
          <span class=\"mr-cart-count";
            // line 135
            if ((($tmp =  !($context["cart_total"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " is-empty";
            }
            yield "\" data-mr-cart-count>";
            yield ($context["cart_total"] ?? null);
            yield "</span>
        </span>
        <span>Корзина</span>
      </a>
    </nav>
  </div>
  ";
            // line 141
            yield ($context["menu"] ?? null);
            yield "
";
        }
        // line 143
        yield "  <div id=\"cart\" class=\"mr-cart-sink\" hidden>";
        yield ($context["cart"] ?? null);
        yield "</div>
</header>
";
        // line 145
        if ((($tmp =  !($context["logged"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 146
            yield "  <div class=\"mr-auth\" id=\"mr-login\"";
            if ((($tmp = ($context["open_login"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " data-open=\"1\"";
            }
            yield " hidden>
    <div class=\"mr-auth__window\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"mr-login-title\">
      <button type=\"button\" class=\"mr-auth__close\" data-mr-login-close aria-label=\"Закрыть\">
        <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M6 6l12 12M18 6 6 18\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" stroke-linecap=\"round\"/></svg>
      </button>
      <div class=\"mr-auth__header\" id=\"mr-login-title\">Вход в личный кабинет</div>
      <form class=\"mr-auth__form\" id=\"form-login\" action=\"";
            // line 152
            yield ($context["login_action"] ?? null);
            yield "\" method=\"post\">
        <div class=\"mr-auth__error\"";
            // line 153
            if ((($tmp =  !($context["login_error"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " hidden";
            }
            yield ">";
            yield ($context["login_error"] ?? null);
            yield "</div>
        <label class=\"mr-auth__field\">
          <span>Эл. почта</span>
          <input type=\"email\" name=\"email\" autocomplete=\"username\" required>
        </label>
        <label class=\"mr-auth__field\">
          <span>Пароль</span>
          <input type=\"password\" name=\"password\" autocomplete=\"current-password\" required>
        </label>
        <a class=\"mr-auth__forgot\" href=\"";
            // line 162
            yield ($context["forgotten"] ?? null);
            yield "\">Забыли пароль?</a>
        ";
            // line 163
            if ((($tmp = ($context["login_redirect"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 164
                yield "          <input type=\"hidden\" name=\"redirect\" value=\"";
                yield ($context["login_redirect"] ?? null);
                yield "\">
        ";
            }
            // line 166
            yield "        <button type=\"submit\" class=\"mr-auth__submit\">Войти</button>
        <p class=\"mr-auth__register\">Нет аккаунта? <a href=\"";
            // line 167
            yield ($context["register"] ?? null);
            yield "\">Зарегистрироваться</a></p>
      </form>
    </div>
  </div>
";
        }
        // line 172
        yield "<main>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/header.twig";
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
        return array (  428 => 172,  420 => 167,  417 => 166,  411 => 164,  409 => 163,  405 => 162,  389 => 153,  385 => 152,  373 => 146,  371 => 145,  365 => 143,  360 => 141,  347 => 135,  341 => 132,  333 => 128,  326 => 124,  322 => 123,  318 => 122,  310 => 117,  307 => 116,  300 => 111,  298 => 110,  293 => 108,  267 => 85,  258 => 80,  250 => 78,  248 => 77,  242 => 74,  238 => 73,  234 => 72,  229 => 69,  225 => 67,  217 => 65,  215 => 64,  193 => 45,  190 => 44,  188 => 43,  182 => 42,  169 => 40,  166 => 39,  157 => 37,  152 => 36,  141 => 34,  136 => 33,  127 => 31,  122 => 30,  109 => 28,  105 => 27,  96 => 21,  92 => 20,  88 => 19,  80 => 15,  74 => 13,  71 => 12,  65 => 10,  63 => 9,  59 => 8,  55 => 7,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html dir=\"{{ direction }}\" lang=\"{{ lang }}\">
<head>
  <meta charset=\"UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>{{ title }}</title>
  <base href=\"{{ base }}\"/>
  {% if description %}
    <meta name=\"description\" content=\"{{ description }}\"/>
  {% endif %}
  {% if keywords %}
    <meta name=\"keywords\" content=\"{{ keywords }}\"/>
  {% endif %}
  <script src=\"{{ jquery }}\" type=\"text/javascript\"></script>
  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap\" rel=\"stylesheet\">
  <link href=\"{{ bootstrap }}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
  <link href=\"{{ icons }}\" rel=\"stylesheet\" type=\"text/css\"/>
  <link href=\"{{ stylesheet }}\" type=\"text/css\" rel=\"stylesheet\"/>
  <link href=\"catalog/view/stylesheet/mrrobot.css?v=21\" type=\"text/css\" rel=\"stylesheet\"/>
  <script src=\"catalog/view/javascript/common.js?v=2\" type=\"text/javascript\"></script>
  <link rel=\"icon\" href=\"image/catalog/mr/favicon.ico\" sizes=\"any\">
  <link rel=\"icon\" href=\"image/catalog/mr/favicon.svg\" type=\"image/svg+xml\">
  <link rel=\"apple-touch-icon\" href=\"image/catalog/mr/apple-touch-icon.png\">
  {% for style in styles %}
    <link href=\"{{ style.href }}\" type=\"text/css\" rel=\"{{ style.rel }}\" media=\"{{ style.media }}\"/>
  {% endfor %}
  {% for script in scripts %}
    <script src=\"{{ script.href }}\" type=\"text/javascript\"></script>
  {% endfor %}
  {% for link in links %}
    <link href=\"{{ link.href }}\" rel=\"{{ link.rel }}\"/>
  {% endfor %}
  {% for analytic in analytics %}
    {{ analytic }}
  {% endfor %}
</head>
<body class=\"mr-store{% if route == 'common/home' %} is-home{% endif %}{% if route == 'checkout/cart' %} is-cart{% endif %}{% if route == 'checkout/checkout' %} is-checkout{% endif %}\">
<div id=\"alert\"></div>
<header class=\"mr-header{% if route == 'checkout/cart' or route == 'checkout/checkout' %} mr-header--cart{% endif %}\" id=\"mr-header\">
{% if route == 'checkout/cart' or route == 'checkout/checkout' %}
  <div class=\"mr-wrap mr-carthead\">
    <a class=\"mr-logo\" href=\"{{ home }}\" aria-label=\"Мистер Робот\">
      <svg class=\"mr-logo__bot\" viewBox=\"0 0 64 58\" aria-hidden=\"true\">
        <rect x=\"30\" y=\"0\" width=\"4\" height=\"6\" fill=\"#3d78d6\"/>
        <rect x=\"12\" y=\"6\" width=\"40\" height=\"24\" fill=\"#f2c200\"/>
        <rect x=\"18\" y=\"12\" width=\"8\" height=\"8\" fill=\"#2f6fd6\"/>
        <rect x=\"38\" y=\"12\" width=\"8\" height=\"8\" fill=\"#2f6fd6\"/>
        <rect x=\"28\" y=\"22\" width=\"8\" height=\"4\" fill=\"#2f6fd6\"/>
        <rect x=\"16\" y=\"32\" width=\"32\" height=\"14\" fill=\"#3d78d6\"/>
        <rect x=\"28\" y=\"36\" width=\"8\" height=\"6\" fill=\"#f2c200\"/>
        <rect x=\"6\" y=\"34\" width=\"8\" height=\"6\" fill=\"#f2c200\"/>
        <rect x=\"50\" y=\"34\" width=\"8\" height=\"6\" fill=\"#f2c200\"/>
        <rect x=\"18\" y=\"48\" width=\"10\" height=\"8\" fill=\"#2f6fd6\"/>
        <rect x=\"36\" y=\"48\" width=\"10\" height=\"8\" fill=\"#2f6fd6\"/>
      </svg>
      <span class=\"mr-logo__text\">
        <span>МИСТЕР</span>
        <span>РОБОТ</span>
      </span>
    </a>
    {% if telephone %}
      <a class=\"mr-carthead__phone\" href=\"tel:{{ telephone|replace({' ': '', '(': '', ')': '', '-': ''}) }}\">{{ telephone }}</a>
    {% endif %}
  </div>
{% else %}
  <div class=\"mr-top\">
    <div class=\"mr-wrap mr-top__inner\">
      <nav class=\"mr-top__links\" aria-label=\"Разделы\">
        <a href=\"{{ special }}\">Акции</a>
        <a href=\"{{ about }}\">О магазине</a>
        <a href=\"{{ contact }}\">Контакты</a>
      </nav>
      <div class=\"mr-top__contacts\">
        {% if telephone %}
          <a class=\"mr-top__phone\" href=\"tel:{{ telephone|replace({' ': '', '(': '', ')': '', '-': ''}) }}\">{{ telephone }}</a>
        {% endif %}
        <a class=\"mr-top__call\" href=\"{{ contact }}\">Заказать звонок</a>
      </div>
    </div>
  </div>
  <div class=\"mr-header__bar\">
    <a class=\"mr-logo\" href=\"{{ home }}\" aria-label=\"Мистер Робот\">
      <svg class=\"mr-logo__bot\" viewBox=\"0 0 64 58\" aria-hidden=\"true\">
        <rect x=\"30\" y=\"0\" width=\"4\" height=\"6\" fill=\"#3d78d6\"/>
        <rect x=\"12\" y=\"6\" width=\"40\" height=\"24\" fill=\"#f2c200\"/>
        <rect x=\"18\" y=\"12\" width=\"8\" height=\"8\" fill=\"#2f6fd6\"/>
        <rect x=\"38\" y=\"12\" width=\"8\" height=\"8\" fill=\"#2f6fd6\"/>
        <rect x=\"28\" y=\"22\" width=\"8\" height=\"4\" fill=\"#2f6fd6\"/>
        <rect x=\"16\" y=\"32\" width=\"32\" height=\"14\" fill=\"#3d78d6\"/>
        <rect x=\"28\" y=\"36\" width=\"8\" height=\"6\" fill=\"#f2c200\"/>
        <rect x=\"6\" y=\"34\" width=\"8\" height=\"6\" fill=\"#f2c200\"/>
        <rect x=\"50\" y=\"34\" width=\"8\" height=\"6\" fill=\"#f2c200\"/>
        <rect x=\"18\" y=\"48\" width=\"10\" height=\"8\" fill=\"#2f6fd6\"/>
        <rect x=\"36\" y=\"48\" width=\"10\" height=\"8\" fill=\"#2f6fd6\"/>
      </svg>
      <span class=\"mr-logo__text\">
        <span>МИСТЕР</span>
        <span>РОБОТ</span>
      </span>
    </a>
    <button type=\"button\" class=\"mr-catalog-btn\" id=\"mr-catalog-btn\" aria-expanded=\"false\" aria-controls=\"mr-catalog\">
      <svg viewBox=\"0 0 20 20\" aria-hidden=\"true\"><path d=\"M3 5h14M3 10h14M3 15h14\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.8\" stroke-linecap=\"round\"/></svg>
      <span>Каталог</span>
    </button>
    {{ search }}
    <nav class=\"mr-actions\" aria-label=\"Покупатель\">
      {% if not logged %}
        <button type=\"button\" class=\"mr-action\" data-mr-login>
          <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><circle cx=\"12\" cy=\"8\" r=\"3.2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\"/><path d=\"M5.5 19.5c1.4-3 3.6-4.5 6.5-4.5s5.1 1.5 6.5 4.5\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" stroke-linecap=\"round\"/></svg>
          <span>Войти</span>
        </button>
      {% else %}
        <div class=\"mr-action mr-action--menu\">
          <a class=\"mr-action\" href=\"{{ account }}\">
            <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><circle cx=\"12\" cy=\"8\" r=\"3.2\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\"/><path d=\"M5.5 19.5c1.4-3 3.6-4.5 6.5-4.5s5.1 1.5 6.5 4.5\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" stroke-linecap=\"round\"/></svg>
            <span>Кабинет</span>
          </a>
          <div class=\"mr-action__drop\">
            <a href=\"{{ account }}\">Личный кабинет</a>
            <a href=\"{{ order }}\">Заказы</a>
            <a href=\"{{ logout }}\">Выйти</a>
          </div>
        </div>
      {% endif %}
      <a class=\"mr-action\" href=\"{{ wishlist }}\" id=\"wishlist-total\">
        <svg viewBox=\"1.6 2.6 20.8 19.4\" aria-hidden=\"true\"><path d=\"M12 20.6 10.4 19.1C6.2 15.3 3.2 12.6 3.2 9.2 3.2 6.4 5.4 4.2 8.2 4.2c1.6 0 3.1.75 4 1.92a5.2 5.2 0 0 1 4-1.92c2.8 0 5 2.2 5 5 0 3.4-3 6.1-7.2 9.9L12 20.6z\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" stroke-linejoin=\"round\"/></svg>
        <span>Избранное</span>
      </a>
      <a class=\"mr-action mr-action--cart\" href=\"{{ shopping_cart }}\">
        <span class=\"mr-action__icon\">
          <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M6 7h15l-1.6 9.2a1 1 0 0 1-1 .8H8.2a1 1 0 0 1-1-.8L5.2 4H3\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/><circle cx=\"9\" cy=\"20\" r=\"1.3\" fill=\"currentColor\"/><circle cx=\"17\" cy=\"20\" r=\"1.3\" fill=\"currentColor\"/></svg>
          <span class=\"mr-cart-count{% if not cart_total %} is-empty{% endif %}\" data-mr-cart-count>{{ cart_total }}</span>
        </span>
        <span>Корзина</span>
      </a>
    </nav>
  </div>
  {{ menu }}
{% endif %}
  <div id=\"cart\" class=\"mr-cart-sink\" hidden>{{ cart }}</div>
</header>
{% if not logged %}
  <div class=\"mr-auth\" id=\"mr-login\"{% if open_login %} data-open=\"1\"{% endif %} hidden>
    <div class=\"mr-auth__window\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"mr-login-title\">
      <button type=\"button\" class=\"mr-auth__close\" data-mr-login-close aria-label=\"Закрыть\">
        <svg viewBox=\"0 0 24 24\" aria-hidden=\"true\"><path d=\"M6 6l12 12M18 6 6 18\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"1.7\" stroke-linecap=\"round\"/></svg>
      </button>
      <div class=\"mr-auth__header\" id=\"mr-login-title\">Вход в личный кабинет</div>
      <form class=\"mr-auth__form\" id=\"form-login\" action=\"{{ login_action }}\" method=\"post\">
        <div class=\"mr-auth__error\"{% if not login_error %} hidden{% endif %}>{{ login_error }}</div>
        <label class=\"mr-auth__field\">
          <span>Эл. почта</span>
          <input type=\"email\" name=\"email\" autocomplete=\"username\" required>
        </label>
        <label class=\"mr-auth__field\">
          <span>Пароль</span>
          <input type=\"password\" name=\"password\" autocomplete=\"current-password\" required>
        </label>
        <a class=\"mr-auth__forgot\" href=\"{{ forgotten }}\">Забыли пароль?</a>
        {% if login_redirect %}
          <input type=\"hidden\" name=\"redirect\" value=\"{{ login_redirect }}\">
        {% endif %}
        <button type=\"submit\" class=\"mr-auth__submit\">Войти</button>
        <p class=\"mr-auth__register\">Нет аккаунта? <a href=\"{{ register }}\">Зарегистрироваться</a></p>
      </form>
    </div>
  </div>
{% endif %}
<main>
", "catalog/view/template/common/header.twig", "/pub/www/app/public/catalog/view/template/common/header.twig");
    }
}
