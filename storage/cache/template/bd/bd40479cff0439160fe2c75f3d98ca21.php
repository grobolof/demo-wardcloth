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

/* admin/view/template/sale/order_info.twig */
class __TwigTemplate_e62ec53d559d274424374173a02e9bb6 extends Template
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
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\"><a href=\"";
        // line 5
        yield ($context["invoice"] ?? null);
        yield "\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_invoice_print"] ?? null);
        yield "\" class=\"btn btn-info";
        if ((($tmp =  !($context["order_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " disabled";
        }
        yield "\"><i class=\"fa-solid fa-print\"></i></a> <a href=\"";
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 6
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fa-solid fa-info-circle\"></i> ";
        // line 16
        yield ($context["text_form"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <div class=\"row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-xl-3\">
          <div class=\"col mb-3\">
            <div class=\"input-group\">
              <section class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                <div class=\"lead\"><strong>";
        // line 22
        yield ($context["text_invoice"] ?? null);
        yield "</strong>
                  <br/>
                  ";
        // line 24
        if ((($tmp =  !($context["invoice_no"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "                    <span id=\"output-invoice\">";
            yield ($context["text_tbc"] ?? null);
            yield "</span>
                  ";
        } else {
            // line 27
            yield "                    <span id=\"output-invoice\">";
            yield ($context["invoice_prefix"] ?? null);
            yield ($context["invoice_no"] ?? null);
            yield "</span>
                  ";
        }
        // line 29
        yield "                </div>
              </section>
              ";
        // line 31
        if ((($tmp =  !($context["invoice_no"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "                <button type=\"button\" id=\"button-invoice\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_generate"] ?? null);
            yield "\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
              ";
        } else {
            // line 34
            yield "                <button type=\"button\" disabled=\"disabled\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
              ";
        }
        // line 36
        yield "            </div>
          </div>
          <div class=\"col mb-3\">
            <div class=\"input-group\">
              <section id=\"section-customer\" class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                <div class=\"lead\"><strong>";
        // line 41
        yield ($context["text_customer"] ?? null);
        yield "</strong>
                  <br/>
                  ";
        // line 43
        if ((($tmp = ($context["customer_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "                    <div id=\"output-customer\"><a href=\"";
            yield ($context["customer_edit"] ?? null);
            yield "\" target=\"_blank\">";
            yield ($context["firstname"] ?? null);
            yield " ";
            yield ($context["lastname"] ?? null);
            yield "</a></div>
                  ";
        } else {
            // line 46
            yield "                    <div id=\"output-customer\">";
            yield ($context["firstname"] ?? null);
            yield " ";
            yield ($context["lastname"] ?? null);
            yield "</div>
                  ";
        }
        // line 48
        yield "                </div>
              </section>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-customer\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
          <div class=\"col mb-3\">
            <div class=\"form-control p-0 rounded\">
              <div class=\"lead p-2\"><strong>";
        // line 55
        yield ($context["text_date_added"] ?? null);
        yield "</strong>
                <br/>
                ";
        // line 57
        yield ($context["date_added"] ?? null);
        yield "
              </div>
            </div>
          </div>
        </div>
        <div class=\"row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-xl-3\">
          <div class=\"col mb-3\">
            <div class=\"form-floating\">
              <select id=\"input-store\" class=\"form-select\">
                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 67
            yield "                  <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 67);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 67) == ($context["store_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 67);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "              </select> <label for=\"input-store\">";
        yield ($context["entry_store"] ?? null);
        yield "</label>
            </div>
          </div>
          <div class=\"col mb-3\">
            <div class=\"form-floating\">
              <select id=\"input-language\" class=\"form-select\">
                ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 76
            yield "                  <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 76);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 76) == ($context["language_code"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 76);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        yield "              </select>
              <label for=\"input-language\">";
        // line 79
        yield ($context["entry_language"] ?? null);
        yield "</label>
            </div>
          </div>
          <div class=\"col\">
            <div class=\"form-floating\">
              <select id=\"input-currency\" class=\"form-select\">
                ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 86
            yield "                  <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 86);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 86) == ($context["currency_code"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 86);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['currency'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "              </select> <label for=\"input-currency\">";
        yield ($context["entry_currency"] ?? null);
        yield "</label>
            </div>
          </div>
        </div>
        <form id=\"form-cart\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <th>";
        // line 96
        yield ($context["column_product"] ?? null);
        yield "</th>
                <th class=\"text-end\">";
        // line 97
        yield ($context["column_quantity"] ?? null);
        yield "</th>
                <th class=\"text-end\">";
        // line 98
        yield ($context["column_price"] ?? null);
        yield "</th>
                <th class=\"text-end\">";
        // line 99
        yield ($context["column_total"] ?? null);
        yield "</th>
                <th class=\"text-end\" style=\"width: 1px;\">";
        // line 100
        yield ($context["column_action"] ?? null);
        yield "</th>
              </tr>
            </thead>
            <tbody id=\"order-product\">
              ";
        // line 104
        $context["order_product_row"] = 0;
        // line 105
        yield "              ";
        if ((($tmp = ($context["order_products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 106
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["order_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order_product"]) {
                // line 107
                yield "                  <tr>
                    <td>
                      <a href=\"";
                // line 109
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "product_edit", [], "any", false, false, false, 109);
                yield "\" target=\"_blank\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "name", [], "any", false, false, false, 109);
                yield "</a>
                      <div id=\"error-product-";
                // line 110
                yield ($context["order_product_row"] ?? null);
                yield "-product\" class=\"invalid-feedback mt-0\"></div>
                      <ul class=\"list-unstyled mb-0\">
                        <li>
                          <small> - ";
                // line 113
                yield ($context["text_model"] ?? null);
                yield ": ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "model", [], "any", false, false, false, 113);
                yield "</small>
                        </li>
                        ";
                // line 115
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "option", [], "any", false, false, false, 115));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 116
                    yield "                          ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 116) != "file")) {
                        // line 117
                        yield "                            <li>
                              <small> - ";
                        // line 118
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 118);
                        yield ": ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 118);
                        yield "</small>
                              <div id=\"error-product-";
                        // line 119
                        yield ($context["order_product_row"] ?? null);
                        yield "-option-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 119);
                        yield "\" class=\"invalid-feedback mt-0\"></div>
                            </li>
                          ";
                    } else {
                        // line 122
                        yield "                            <li>
                              <small> - ";
                        // line 123
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 123);
                        yield ": <a href=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "href", [], "any", false, false, false, 123);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "filename", [], "any", false, false, false, 123);
                        yield "</a></small>
                              <div id=\"error-product-";
                        // line 124
                        yield ($context["order_product_row"] ?? null);
                        yield "-option-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 124);
                        yield "\" class=\"invalid-feedback mt-0\"></div>
                            </li>
                          ";
                    }
                    // line 127
                    yield "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                yield "                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "subscription_plan_id", [], "any", false, false, false, 128)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 129
                    yield "                          <li>
                            <small> - ";
                    // line 130
                    yield ($context["text_subscription"] ?? null);
                    yield ": ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "subscription_edit", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "<a href=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "subscription_edit", [], "any", false, false, false, 130);
                        yield "\" target=\"_blank\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "subscription_plan", [], "any", false, false, false, 130);
                        yield "</a>";
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "subscription_plan", [], "any", false, false, false, 130);
                    }
                    yield "</small>
                            <div id=\"error-product-";
                    // line 131
                    yield ($context["order_product_row"] ?? null);
                    yield "-subscription\" class=\"invalid-feedback mt-0\"></div>
                          </li>
                        ";
                }
                // line 134
                yield "                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "reward", [], "any", false, false, false, 134)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 135
                    yield "                          <li>
                            <small> - ";
                    // line 136
                    yield ($context["text_points"] ?? null);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "reward", [], "any", false, false, false, 136);
                    yield "</small>
                          </li>
                        ";
                }
                // line 139
                yield "                      </ul>
                      <input type=\"hidden\" name=\"product[";
                // line 140
                yield ($context["order_product_row"] ?? null);
                yield "][product_id]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "product_id", [], "any", false, false, false, 140);
                yield "\"/> <input type=\"hidden\" name=\"product[";
                yield ($context["order_product_row"] ?? null);
                yield "][quantity]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "quantity", [], "any", false, false, false, 140);
                yield "\"/>
                      ";
                // line 141
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "option", [], "any", false, false, false, 141));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 142
                    yield "                        ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 142) == "select") || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 142) == "radio"))) {
                        // line 143
                        yield "                          <input type=\"hidden\" name=\"product[";
                        yield ($context["order_product_row"] ?? null);
                        yield "][option][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 143);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value_id", [], "any", false, false, false, 143);
                        yield "\"/>
                        ";
                    }
                    // line 145
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 145) == "checkbox")) {
                        // line 146
                        yield "                          <input type=\"hidden\" name=\"product[";
                        yield ($context["order_product_row"] ?? null);
                        yield "][option][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 146);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value_id", [], "any", false, false, false, 146);
                        yield "\"/>
                        ";
                    }
                    // line 148
                    yield "                        ";
                    if (((((((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 148) == "text") || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 148) == "textarea")) || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 148) == "file")) || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 148) == "date")) || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 148) == "datetime")) || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 148) == "time"))) {
                        // line 149
                        yield "                          <input type=\"hidden\" name=\"product[";
                        yield ($context["order_product_row"] ?? null);
                        yield "][option][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 149);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 149);
                        yield "\"/>
                        ";
                    }
                    // line 151
                    yield "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 152
                yield "                      <input type=\"hidden\" name=\"product[";
                yield ($context["order_product_row"] ?? null);
                yield "][subscription_plan_id]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "subscription_plan_id", [], "any", false, false, false, 152);
                yield "\"/>
                    </td>
                    <td class=\"text-end\">";
                // line 154
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "quantity", [], "any", false, false, false, 154);
                yield "</td>
                    <td class=\"text-end\">";
                // line 155
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "price", [], "any", false, false, false, 155);
                yield "</td>
                    <td class=\"text-end\">";
                // line 156
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_product"], "total", [], "any", false, false, false, 156);
                yield "</td>
                    <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                // line 157
                yield ($context["button_remove"] ?? null);
                yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
                // line 159
                $context["order_product_row"] = (($context["order_product_row"] ?? null) + 1);
                // line 160
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order_product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            yield "              ";
        } else {
            // line 162
            yield "                <tr>
                  <td colspan=\"5\" class=\"text-center\">";
            // line 163
            yield ($context["text_no_results"] ?? null);
            yield "</td>
                </tr>
              ";
        }
        // line 166
        yield "            </tbody>
            <tfoot>
              <tr>
                <td colspan=\"4\"></td>
                <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-product\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
              </tr>
            </tfoot>
          </table>
        </form>
        <div class=\"row\">
          <div class=\"col-md mb-3\">
            <div class=\"input-group\">
              <section id=\"section-payment-address\" class=\"form-control rounded-start\" style=\"min-height: 128px;\">
                <div class=\"lead\"><strong>";
        // line 179
        yield ($context["text_payment_address"] ?? null);
        yield "</strong>
                  <br/>
                  <div id=\"output-payment-address\">
                    ";
        // line 182
        yield ($context["payment_firstname"] ?? null);
        yield " ";
        yield ($context["payment_lastname"] ?? null);
        yield "
                    <br/>
                    ";
        // line 184
        if ((($tmp = ($context["payment_company"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 185
            yield "                      ";
            yield ($context["payment_company"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 188
        yield "                    ";
        if ((($tmp = ($context["payment_address_1"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 189
            yield "                      ";
            yield ($context["payment_address_1"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 192
        yield "                    ";
        if ((($tmp = ($context["payment_address_2"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 193
            yield "                      ";
            yield ($context["payment_address_2"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 196
        yield "                    ";
        if ((($tmp = ($context["payment_city"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 197
            yield "                      ";
            yield ($context["payment_city"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 200
        yield "                    ";
        if ((($tmp = ($context["payment_postcode"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 201
            yield "                      ";
            yield ($context["payment_postcode"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 204
        yield "                    ";
        if ((($tmp = ($context["payment_zone"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 205
            yield "                      ";
            yield ($context["payment_zone"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 208
        yield "                    ";
        if ((($tmp = ($context["payment_country"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 209
            yield "                      ";
            yield ($context["payment_country"] ?? null);
            yield "
                    ";
        }
        // line 211
        yield "                  </div>
                </div>
              </section>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-payment-address\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
          <div id=\"shipping-address\" class=\"col mb-3";
        // line 217
        if ((($tmp =  !($context["shipping_method_code"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " d-none";
        }
        yield "\">
            <div class=\"input-group\">
              <section id=\"section-shipping-address\" class=\"form-control rounded-start\" style=\"min-height: 128px;\">
                <div class=\"lead\"><strong>";
        // line 220
        yield ($context["text_shipping_address"] ?? null);
        yield "</strong>
                  <br/>
                  <div id=\"output-shipping-address\">
                    ";
        // line 223
        yield ($context["shipping_firstname"] ?? null);
        yield " ";
        yield ($context["shipping_lastname"] ?? null);
        yield "
                    <br/>
                    ";
        // line 225
        if ((($tmp = ($context["shipping_company"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 226
            yield "                      ";
            yield ($context["shipping_company"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 229
        yield "                    ";
        if ((($tmp = ($context["shipping_address_1"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 230
            yield "                      ";
            yield ($context["shipping_address_1"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 233
        yield "                    ";
        if ((($tmp = ($context["shipping_address_2"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 234
            yield "                      ";
            yield ($context["shipping_address_2"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 237
        yield "                    ";
        if ((($tmp = ($context["shipping_city"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 238
            yield "                      ";
            yield ($context["shipping_city"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 241
        yield "                    ";
        if ((($tmp = ($context["shipping_postcode"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 242
            yield "                      ";
            yield ($context["shipping_postcode"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 245
        yield "                    ";
        if ((($tmp = ($context["shipping_zone"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 246
            yield "                      ";
            yield ($context["shipping_zone"] ?? null);
            yield "
                      <br/>
                    ";
        }
        // line 249
        yield "                    ";
        if ((($tmp = ($context["shipping_country"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 250
            yield "                      ";
            yield ($context["shipping_country"] ?? null);
            yield "
                    ";
        }
        // line 252
        yield "                  </div>
                </div>
              </section>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-shipping-address\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div id=\"shipping-method\" class=\"col-md mb-3";
        // line 260
        if ((($tmp =  !($context["shipping_method_code"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " d-none";
        }
        yield "\" style=\"min-height: 64px;\">
            <div class=\"input-group\">
              <div id=\"input-shipping-method-info\" class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                <div class=\"lead\"><strong>";
        // line 263
        yield ($context["text_shipping_method"] ?? null);
        yield "</strong>
                  <br/>
                  <div id=\"output-shipping-method\">";
        // line 265
        yield ($context["shipping_method_name"] ?? null);
        yield "</div>
                </div>
              </div>
              <button type=\"button\" id=\"button-shipping-methods\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
          <div id=\"payment-method\" class=\"col-md mb-3\">
            <div class=\"input-group\">
              <div id=\"input-payment-method-info\" class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                <div class=\"lead\"><strong>";
        // line 274
        yield ($context["text_payment_method"] ?? null);
        yield "</strong>
                  <br/>
                  <div id=\"output-payment-method\">";
        // line 276
        yield ($context["payment_method_name"] ?? null);
        yield "</div>
                </div>
              </div>
              <button type=\"button\" id=\"button-payment-methods\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
        </div>
        <div id=\"collapse-order\" class=\"collapse\">
          <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3\">
            ";
        // line 285
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 286
            yield "              <div class=\"col mb-3\">";
            yield $context["extension"];
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 288
        yield "            <div class=\"col mb-3\">
              <div class=\"input-group\">
                <div class=\"form-control rounded-start\">
                  <div class=\"lead p-0\"><strong>";
        // line 291
        yield ($context["text_reward"] ?? null);
        yield "</strong>
                    <br/>
                    <div id=\"output-point\">";
        // line 293
        yield ($context["points"] ?? null);
        yield "</div>
                  </div>
                </div>
                ";
        // line 296
        if ((($tmp =  !($context["reward_total"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 297
            yield "                  <button type=\"button\" id=\"button-reward-add\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_reward_add"] ?? null);
            yield "\" class=\"btn btn-success\"";
            if (( !($context["customer_id"] ?? null) ||  !($context["points"] ?? null))) {
                yield " disabled";
            }
            yield "><i class=\"fa-solid fa-plus-circle\"></i></button>
                ";
        } else {
            // line 299
            yield "                  <button type=\"button\" id=\"button-reward-remove\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_reward_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                ";
        }
        // line 301
        yield "              </div>
            </div>
            <div class=\"col mb-3\">
              <div class=\"input-group\">
                <div id=\"input-affiliate-info\" class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                  <div class=\"lead\"><strong>";
        // line 306
        yield ($context["text_affiliate"] ?? null);
        yield "</strong>
                    <br/>
                    <div id=\"output-affiliate\">";
        // line 308
        if ((($tmp = ($context["affiliate_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<a href=\"index.php?route=marketing/affiliate.form&user_token=";
            yield ($context["user_token"] ?? null);
            yield "&customer_id=";
            yield ($context["affiliate_id"] ?? null);
            yield "\" target=\"_blank\">";
            yield ($context["affiliate"] ?? null);
            yield "</a>";
        }
        yield "</div>
                  </div>
                </div>
                <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-affiliate\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
              </div>
            </div>
            <div class=\"col mb-3\">
              <div class=\"input-group\">
                <div class=\"form-control rounded-start\">
                  <div class=\"lead\"><strong>";
        // line 317
        yield ($context["text_commission"] ?? null);
        yield "</strong>
                    <br/>
                    <div id=\"output-commission\">";
        // line 319
        yield ($context["commission"] ?? null);
        yield "</div>
                  </div>
                </div>
                ";
        // line 322
        if ((($tmp =  !($context["commission_total"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 323
            yield "                  <button type=\"button\" id=\"button-commission-add\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_commission_add"] ?? null);
            yield "\" class=\"btn btn-success\"";
            if ((($tmp =  !($context["affiliate_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " disabled";
            }
            yield "><i class=\"fa-solid fa-plus-circle\"></i></button>
                ";
        } else {
            // line 325
            yield "                  <button type=\"button\" id=\"button-commission-remove\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_commission_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                ";
        }
        // line 327
        yield "              </div>
            </div>
          </div>
        </div>
        <button type=\"button\" id=\"button-collapse\" class=\"btn btn-light btn-lg w-100 mb-3\">";
        // line 331
        yield ($context["text_more"] ?? null);
        yield " <i class=\"fa-solid fa-angle-down\"></i></button>
        <div class=\"row mb-3\">
          <div class=\"col\">
            <div class=\"input-group\">
              <div class=\"form-control rounded-start\" style=\"min-height: 100px;\">
                <div class=\"lead\"><strong>";
        // line 336
        yield ($context["text_comment"] ?? null);
        yield "</strong>
                  <br/>
                  <div id=\"output-comment\">";
        // line 338
        yield ($context["comment"] ?? null);
        yield "</div>
                </div>
              </div>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-comment\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
        </div>
        <table class=\"table table-bordered\">
          <tbody id=\"order-total\">
            ";
        // line 347
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_total"]) {
            // line 348
            yield "              <tr>
                <td class=\"text-end\"><strong>";
            // line 349
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_total"], "title", [], "any", false, false, false, 349);
            yield "</strong></td>
                <td class=\"text-end\" style=\"width: 1px;\">";
            // line 350
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_total"], "text", [], "any", false, false, false, 350);
            yield "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_total'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 353
        yield "          </tbody>
        </table>
        <div class=\"text-end\">
          <button type=\"button\" id=\"button-refresh\" data-bs-toggle=\"tooltip\" title=\"";
        // line 356
        yield ($context["button_refresh"] ?? null);
        yield "\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-rotate\"></i></button>
          <button type=\"button\" id=\"button-confirm\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 357
        yield ($context["button_confirm"] ?? null);
        yield "</button>
        </div>
      </div>
    </div>
    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fa-solid fa-comment\"></i> ";
        // line 362
        yield ($context["text_history"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-history\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 365
        yield ($context["tab_history"] ?? null);
        yield "</a></li>
          <li class=\"nav-item\"><a href=\"#tab-additional\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 366
        yield ($context["tab_additional"] ?? null);
        yield "</a></li>
          ";
        // line 367
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 368
            yield "            <li class=\"nav-item\"><a href=\"#tab-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "code", [], "any", false, false, false, 368);
            yield "\" data-bs-toggle=\"tab\" class=\"nav-link\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 368);
            yield "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 370
        yield "        </ul>
        <div class=\"tab-content\">
          <div id=\"tab-history\" class=\"tab-pane active\">
            <fieldset>
              <legend>";
        // line 374
        yield ($context["text_history"] ?? null);
        yield "</legend>
              <div id=\"history\">";
        // line 375
        yield ($context["history"] ?? null);
        yield "</div>
            </fieldset>
            <form id=\"form-history\">
              <fieldset>
                <legend>";
        // line 379
        yield ($context["text_history_add"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">";
        // line 381
        yield ($context["entry_order_status"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"order_status_id\" id=\"input-order-status\" class=\"form-select\">
                      ";
        // line 384
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 385
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 385);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 385) == ($context["order_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 385);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 387
        yield "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-history\" class=\"col-sm-2 col-form-label\">";
        // line 391
        yield ($context["entry_comment"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"8\" placeholder=\"";
        // line 393
        yield ($context["entry_comment"] ?? null);
        yield "\" id=\"input-history\" class=\"form-control\"></textarea>
                  </div>
                </div>
                <div class=\"text-end\">
                  <button type=\"submit\" id=\"button-history\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> ";
        // line 397
        yield ($context["button_history_add"] ?? null);
        yield "</button>
                </div>
              </fieldset>
              <input type=\"hidden\" name=\"order_id\" value=\"";
        // line 400
        yield ($context["order_id"] ?? null);
        yield "\" id=\"input-order-id\"/>
            </form>
          </div>
          <div id=\"tab-additional\" class=\"tab-pane\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <th colspan=\"2\">";
        // line 408
        yield ($context["text_browser"] ?? null);
        yield "</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>";
        // line 413
        yield ($context["text_ip"] ?? null);
        yield "</td>
                    <td>";
        // line 414
        yield ($context["ip"] ?? null);
        yield "</td>
                  </tr>
                  ";
        // line 416
        if ((($tmp = ($context["forwarded_ip"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 417
            yield "                    <tr>
                      <td>";
            // line 418
            yield ($context["text_forwarded_ip"] ?? null);
            yield "</td>
                      <td>";
            // line 419
            yield ($context["forwarded_ip"] ?? null);
            yield "</td>
                    </tr>
                  ";
        }
        // line 422
        yield "                  <tr>
                    <td>";
        // line 423
        yield ($context["text_user_agent"] ?? null);
        yield "</td>
                    <td>";
        // line 424
        yield ($context["user_agent"] ?? null);
        yield "</td>
                  </tr>
                  <tr>
                    <td>";
        // line 427
        yield ($context["text_accept_language"] ?? null);
        yield "</td>
                    <td>";
        // line 428
        yield ($context["accept_language"] ?? null);
        yield "</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          ";
        // line 434
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 435
            yield "            <div id=\"tab-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "code", [], "any", false, false, false, 435);
            yield "\" class=\"tab-pane\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "content", [], "any", false, false, false, 435);
            yield "</div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 437
        yield "        </div>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-customer\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 447
        yield ($context["text_customer"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-customer\" data-oc-target=\"#section-customer\">
          <div class=\"mb-3\">
            <label for=\"input-customer\" class=\"form-label\">";
        // line 453
        yield ($context["entry_customer"] ?? null);
        yield "</label>
            <div class=\"input-group\">
              <input type=\"text\" value=\"";
        // line 455
        yield ($context["firstname"] ?? null);
        yield " ";
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_customer"] ?? null);
        yield "\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/> <a href=\"";
        yield ($context["customer_add"] ?? null);
        yield "\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_customer_add"] ?? null);
        yield "\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-user-plus\"></i></a>
            </div>
            <input type=\"hidden\" name=\"customer_id\" value=\"";
        // line 457
        yield ($context["customer_id"] ?? null);
        yield "\" id=\"input-customer-id\"/>
            <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-customer-group\" class=\"form-label\">";
        // line 461
        yield ($context["entry_customer_group"] ?? null);
        yield "</label> <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
              ";
        // line 462
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 463
            yield "                <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 463);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 463) == ($context["customer_group_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 463);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 465
        yield "            </select>
            <div id=\"error-customer-group\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-firstname\" class=\"form-label\">";
        // line 469
        yield ($context["entry_firstname"] ?? null);
        yield "</label> <input type=\"text\" name=\"firstname\" value=\"";
        yield ($context["firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-firstname\" class=\"form-control\"/>
            <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-lastname\" class=\"form-label\">";
        // line 473
        yield ($context["entry_lastname"] ?? null);
        yield "</label> <input type=\"text\" name=\"lastname\" value=\"";
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-lastname\" class=\"form-control\"/>
            <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-email\" class=\"form-label\">";
        // line 477
        yield ($context["entry_email"] ?? null);
        yield "</label>
            <div class=\"input-group\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 479
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\"/><a href=\"mailto:";
        yield ($context["email"] ?? null);
        yield "\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-envelope\"></i></a>
            </div>
            <div id=\"error-email\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3";
        // line 483
        if ((($tmp = ($context["config_telephone_required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " required";
        }
        yield "\">
            <label for=\"input-telephone\" class=\"form-label\">";
        // line 484
        yield ($context["entry_telephone"] ?? null);
        yield "</label> <input type=\"text\" name=\"telephone\" value=\"";
        yield ($context["telephone"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_telephone"] ?? null);
        yield "\" id=\"input-telephone\" class=\"form-control\"/>
            <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
          </div>

          ";
        // line 488
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 489
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 489) == "account")) {
                // line 490
                yield "              ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 490) == "select")) {
                    // line 491
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 491);
                    yield "\">
                  <label for=\"input-custom-field-";
                    // line 492
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 492);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 492);
                    yield "</label> <select name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 492);
                    yield "]\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 492);
                    yield "\" class=\"form-select\">
                    <option value=\"\">";
                    // line 493
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                    ";
                    // line 494
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 494));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 495
                        yield "                      <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 495);
                        yield "\"";
                        if (((($_v0 = ($context["account_custom_field"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 495)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 495) == (($_v1 = ($context["account_custom_field"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 495)] ?? null) : null)))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 495);
                        yield "</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 497
                    yield "                  </select>
                  <div id=\"error-custom-field-";
                    // line 498
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 498);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 501
                yield "
              ";
                // line 502
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 502) == "radio")) {
                    // line 503
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 503);
                    yield "\">
                  <label class=\"form-label\">";
                    // line 504
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 504);
                    yield "</label>
                  <div id=\"input-custom-field-";
                    // line 505
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 505);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 506
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 506));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 507
                        yield "                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[";
                        // line 508
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 508);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 508);
                        yield "\" id=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 508);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v2 = ($context["account_custom_field"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 508)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 508) == (($_v3 = ($context["account_custom_field"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 508)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 508);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 508);
                        yield "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 511
                    yield "                  </div>
                  <div id=\"error-custom-field-";
                    // line 512
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 512);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 515
                yield "
              ";
                // line 516
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 516) == "checkbox")) {
                    // line 517
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 517);
                    yield "\">
                  <label class=\"form-label\">";
                    // line 518
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 518);
                    yield "</label>
                  <div id=\"input-custom-field-";
                    // line 519
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 519);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 520
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 520));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 521
                        yield "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[";
                        // line 522
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 522);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 522);
                        yield "\" id=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 522);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v4 = ($context["account_custom_field"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 522)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 522), (($_v5 = ($context["account_custom_field"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 522)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 522);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 522);
                        yield "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 525
                    yield "                  </div>
                  <div id=\"error-custom-field-";
                    // line 526
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 526);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 529
                yield "
              ";
                // line 530
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 530) == "text")) {
                    // line 531
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 531);
                    yield "\">
                  <label for=\"input-custom-field-";
                    // line 532
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 532);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 532);
                    yield "</label> <input type=\"text\" name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 532);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v6 = ($context["account_custom_field"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 532)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v7 = ($context["account_custom_field"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 532)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 532)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 532);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 532);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                    // line 533
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 533);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 536
                yield "
              ";
                // line 537
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 537) == "textarea")) {
                    // line 538
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 538);
                    yield "\">
                  <label for=\"input-custom-field-";
                    // line 539
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 539);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 539);
                    yield "</label> <textarea name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 539);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 539);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 539);
                    yield "\" class=\"form-control\">";
                    yield (((($tmp = (($_v8 = ($context["account_custom_field"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 539)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v9 = ($context["account_custom_field"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 539)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 539)));
                    yield "</textarea>
                  <div id=\"error-custom-field-";
                    // line 540
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 540);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 543
                yield "
              ";
                // line 544
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 544) == "file")) {
                    // line 545
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 545);
                    yield "\">
                  <label class=\"form-label\">";
                    // line 546
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 546);
                    yield "</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 548
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-target=\"#input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 548);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                    <input type=\"text\" name=\"custom_field[";
                    // line 549
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 549);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v10 = ($context["account_custom_field"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 549)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v11 = ($context["account_custom_field"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 549)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 549)));
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 549);
                    yield "\" class=\"form-control\"/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-custom-field-";
                    // line 550
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 550);
                    yield "\"";
                    if ((($tmp =  !(($_v12 = ($context["account_custom_field"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 550)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    yield ($context["button_download"] ?? null);
                    yield "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 551
                    yield ($context["button_clear"] ?? null);
                    yield "\" data-oc-target=\"#input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 551);
                    yield "\"";
                    if ((($tmp =  !(($_v13 = ($context["account_custom_field"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 551)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-custom-field-";
                    // line 553
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 553);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 556
                yield "
              ";
                // line 557
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 557) == "date")) {
                    // line 558
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 558);
                    yield "\">
                  <label for=\"input-custom-field-";
                    // line 559
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 559);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 559);
                    yield "</label> <input type=\"date\" name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 559);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v14 = ($context["account_custom_field"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 559)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v15 = ($context["account_custom_field"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 559)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 559)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 559);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 559);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                    // line 560
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 560);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 563
                yield "
              ";
                // line 564
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 564) == "time")) {
                    // line 565
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 565);
                    yield "\">
                  <label for=\"input-custom-field-";
                    // line 566
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 566);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 566);
                    yield "</label> <input type=\"time\" name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 566);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v16 = ($context["account_custom_field"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 566)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v17 = ($context["account_custom_field"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 566)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 566)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 566);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 566);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                    // line 567
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 567);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 570
                yield "
              ";
                // line 571
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 571) == "datetime")) {
                    // line 572
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 572);
                    yield "\">
                  <label for=\"input-custom-field-";
                    // line 573
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 573);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 573);
                    yield "</label> <input type=\"datetime-local\" name=\"custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 573);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v18 = ($context["account_custom_field"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 573)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v19 = ($context["account_custom_field"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 573)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 573)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 573);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 573);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                    // line 574
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 574);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 577
                yield "
            ";
            }
            // line 579
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 580
        yield "
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-customer\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 582
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-product\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 594
        yield ($context["text_product_add"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-product-add\">
          <div class=\"mb-3\">
            <label for=\"input-product\" class=\"form-label\">";
        // line 600
        yield ($context["entry_product"] ?? null);
        yield "</label> <input type=\"text\" value=\"\" placeholder=\"";
        yield ($context["entry_product"] ?? null);
        yield "\" id=\"input-product\" data-oc-target=\"autocomplete-product\" class=\"form-control\"/>
            <ul id=\"autocomplete-product\" class=\"dropdown-menu\"></ul>
            <input type=\"hidden\" name=\"product_id\" value=\"\" id=\"input-product-id\"/>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-quantity\" class=\"form-label\">";
        // line 605
        yield ($context["entry_quantity"] ?? null);
        yield "</label> <input type=\"text\" name=\"quantity\" placeholder=\"";
        yield ($context["entry_quantity"] ?? null);
        yield "\" value=\"1\" id=\"input-quantity\" class=\"form-control\"/>
          </div>
          <div id=\"option\"></div>
          <div id=\"subscription\"></div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-product-add\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 610
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-payment-address\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 622
        yield ($context["text_payment_address"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-payment-address\" data-oc-target=\"#section-payment-address\">
          <div class=\"mb-3\">
            <label for=\"input-payment-address\" class=\"form-label\">";
        // line 628
        yield ($context["entry_address"] ?? null);
        yield "</label> <select name=\"payment_address_id\" id=\"input-payment-address\" class=\"form-select\">
              <option value=\"0\" selected>";
        // line 629
        yield ($context["text_none"] ?? null);
        yield "</option>
              ";
        // line 630
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 631
            yield "                <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 631);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 631) == ($context["payment_address_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 631);
            yield " ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 631);
            yield ",";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 631)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 631);
                yield ",";
            }
            yield " ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 631);
            yield ", ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 631);
            yield ", ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "postcode", [], "any", false, false, false, 631);
            yield ", ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 631);
            yield ", ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 631);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['address'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 633
        yield "            </select>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-firstname\" class=\"form-label\">";
        // line 636
        yield ($context["entry_firstname"] ?? null);
        yield "</label> <input type=\"text\" name=\"payment_firstname\" value=\"";
        yield ($context["payment_firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-payment-firstname\" class=\"form-control\"/>
            <div id=\"error-payment-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-lastname\" class=\"form-label\">";
        // line 640
        yield ($context["entry_lastname"] ?? null);
        yield "</label> <input type=\"text\" name=\"payment_lastname\" value=\"";
        yield ($context["payment_lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-payment-lastname\" class=\"form-control\"/>
            <div id=\"error-payment-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-company\" class=\"form-label\">";
        // line 644
        yield ($context["entry_company"] ?? null);
        yield "</label> <input type=\"text\" name=\"payment_company\" value=\"";
        yield ($context["payment_company"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_company"] ?? null);
        yield "\" id=\"input-payment-company\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-address-1\" class=\"form-label\">";
        // line 647
        yield ($context["entry_address_1"] ?? null);
        yield "</label> <input type=\"text\" name=\"payment_address_1\" value=\"";
        yield ($context["payment_address_1"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_address_1"] ?? null);
        yield "\" id=\"input-payment-address-1\" class=\"form-control\"/>
            <div id=\"error-payment-address-1\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-address-2\" class=\"form-label\">";
        // line 651
        yield ($context["entry_address_2"] ?? null);
        yield "</label> <input type=\"text\" name=\"payment_address_2\" value=\"";
        yield ($context["payment_address_2"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_address_2"] ?? null);
        yield "\" id=\"input-payment-address-2\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-city\" class=\"form-label\">";
        // line 654
        yield ($context["entry_city"] ?? null);
        yield "</label> <input type=\"text\" name=\"payment_city\" value=\"";
        yield ($context["payment_city"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_city"] ?? null);
        yield "\" id=\"input-payment-city\" class=\"form-control\"/>
            <div id=\"error-payment-city\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-postcode\" class=\"form-label\">";
        // line 658
        yield ($context["entry_postcode"] ?? null);
        yield "</label> <input type=\"text\" name=\"payment_postcode\" value=\"";
        yield ($context["payment_postcode"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_postcode"] ?? null);
        yield "\" id=\"input-payment-postcode\" class=\"form-control\"/>
            <div id=\"error-payment-postcode\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-country\" class=\"form-label\">";
        // line 662
        yield ($context["entry_country"] ?? null);
        yield "</label> <select name=\"payment_country_id\" id=\"input-payment-country\" class=\"form-select\">
              <option value=\"0\">";
        // line 663
        yield ($context["text_select"] ?? null);
        yield "</option>
              ";
        // line 664
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 665
            yield "                <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 665);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 665) == ($context["payment_country_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 665);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['country'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 667
        yield "            </select>
            <div id=\"error-payment-country\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-zone\" class=\"form-label\">";
        // line 671
        yield ($context["entry_zone"] ?? null);
        yield "</label> <select name=\"payment_zone_id\" id=\"input-payment-zone\" class=\"form-select\">
              <option value=\"\">";
        // line 672
        yield ($context["text_select"] ?? null);
        yield "</option>
              ";
        // line 673
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["payment_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["zone"]) {
            // line 674
            yield "                <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "zone_id", [], "any", false, false, false, 674);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "zone_id", [], "any", false, false, false, 674) == ($context["payment_zone_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "name", [], "any", false, false, false, 674);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['zone'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 676
        yield "            </select>
            <div id=\"error-payment-zone\" class=\"invalid-feedback\"></div>
          </div>
          ";
        // line 679
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 680
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 680) == "address")) {
                // line 681
                yield "
              ";
                // line 682
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 682) == "select")) {
                    // line 683
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 683);
                    yield "\">
                  <label for=\"input-payment-custom-field-";
                    // line 684
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 684);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 684);
                    yield "</label> <select name=\"payment_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 684);
                    yield "]\" id=\"input-payment-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 684);
                    yield "\" class=\"form-select\">
                    <option value=\"\">";
                    // line 685
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                    ";
                    // line 686
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 686));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 687
                        yield "                      <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 687);
                        yield "\"";
                        if (((($_v20 = ($context["payment_custom_field"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 687)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 687) == (($_v21 = ($context["payment_custom_field"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 687)] ?? null) : null)))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 687);
                        yield "</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 689
                    yield "                  </select>
                  <div id=\"error-payment-custom-field-";
                    // line 690
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 690);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 693
                yield "
              ";
                // line 694
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 694) == "radio")) {
                    // line 695
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 695);
                    yield "\">
                  <label class=\"form-label\">";
                    // line 696
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 696);
                    yield "</label>
                  <div id=\"input-payment-custom-field-";
                    // line 697
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 697);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 698
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 698));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 699
                        yield "                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"payment_custom_field[";
                        // line 700
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 700);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 700);
                        yield "\" id=\"input-payment-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 700);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v22 = ($context["payment_custom_field"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 700)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 700) == (($_v23 = ($context["payment_custom_field"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 700)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-payment-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 700);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 700);
                        yield "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 703
                    yield "                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 704
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 704);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 707
                yield "
              ";
                // line 708
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 708) == "checkbox")) {
                    // line 709
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 709);
                    yield "\">
                  <label class=\"form-label\">";
                    // line 710
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 710);
                    yield "</label>
                  <div id=\"input-payment-custom-field-";
                    // line 711
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 711);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 712
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 712));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 713
                        yield "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"payment_custom_field[";
                        // line 714
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 714);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 714);
                        yield "\" id=\"input-payment-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 714);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v24 = ($context["payment_custom_field"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 714)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 714), (($_v25 = ($context["payment_custom_field"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 714)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-payment-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 714);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 714);
                        yield "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 717
                    yield "                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 718
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 718);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 721
                yield "
              ";
                // line 722
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 722) == "text")) {
                    // line 723
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 723);
                    yield "\">
                  <label for=\"input-payment-custom-field-";
                    // line 724
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 724);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 724);
                    yield "</label> <input type=\"text\" name=\"payment_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 724);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v26 = ($context["payment_custom_field"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 724)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v27 = ($context["payment_custom_field"] ?? null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 724)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 724)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 724);
                    yield "\" id=\"input-payment-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 724);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-payment-custom-field-";
                    // line 725
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 725);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 728
                yield "
              ";
                // line 729
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 729) == "textarea")) {
                    // line 730
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 730);
                    yield "\">
                  <label for=\"input-payment-custom-field-";
                    // line 731
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 731);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 731);
                    yield "</label> <textarea name=\"payment_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 731);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 731);
                    yield "\" id=\"input-payment-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 731);
                    yield "\" class=\"form-control\">";
                    yield (((($tmp = (($_v28 = ($context["payment_custom_field"] ?? null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 731)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v29 = ($context["payment_custom_field"] ?? null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 731)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 731)));
                    yield "</textarea>
                  <div id=\"error-payment-custom-field-";
                    // line 732
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 732);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 735
                yield "
              ";
                // line 736
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 736) == "file")) {
                    // line 737
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 737);
                    yield "\">
                  <label class=\"form-label\">";
                    // line 738
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 738);
                    yield "</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 740
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-target=\"#input-payment-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 740);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                    <input type=\"text\" name=\"payment_custom_field[";
                    // line 741
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 741);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v30 = ($context["payment_custom_field"] ?? null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 741)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v31 = ($context["payment_custom_field"] ?? null)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 741)] ?? null) : null)) : (""));
                    yield "\" id=\"input-payment-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 741);
                    yield "\" class=\"form-control\" readonly/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-payment-custom-field-";
                    // line 742
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 742);
                    yield "\"";
                    if ((($tmp =  !(($_v32 = ($context["payment_custom_field"] ?? null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 742)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    yield ($context["button_download"] ?? null);
                    yield "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 743
                    yield ($context["button_clear"] ?? null);
                    yield "\" data-oc-target=\"#input-payment-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 743);
                    yield "\"";
                    if ((($tmp =  !(($_v33 = ($context["payment_custom_field"] ?? null)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 743)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-payment-custom-field-";
                    // line 745
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 745);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 748
                yield "
              ";
                // line 749
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 749) == "date")) {
                    // line 750
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 750);
                    yield "\">
                  <label for=\"input-payment-custom-field-";
                    // line 751
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 751);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 751);
                    yield "</label> <input type=\"date\" name=\"payment_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 751);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v34 = ($context["payment_custom_field"] ?? null)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 751)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v35 = ($context["payment_custom_field"] ?? null)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 751)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 751)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 751);
                    yield "\" id=\"input-payment-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 751);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-payment-custom-field-";
                    // line 752
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 752);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 755
                yield "
              ";
                // line 756
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 756) == "time")) {
                    // line 757
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 757);
                    yield "\">
                  <label for=\"input-payment-custom-field-";
                    // line 758
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 758);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 758);
                    yield "</label> <input type=\"time\" name=\"payment_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 758);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v36 = ($context["payment_custom_field"] ?? null)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 758)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v37 = ($context["payment_custom_field"] ?? null)) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 758)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 758)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 758);
                    yield "\" id=\"input-payment-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 758);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-payment-custom-field-";
                    // line 759
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 759);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 762
                yield "
              ";
                // line 763
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 763) == "datetime")) {
                    // line 764
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 764);
                    yield "\">
                  <label for=\"input-payment-custom-field-";
                    // line 765
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 765);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 765);
                    yield "</label> <input type=\"datetime-local\" name=\"payment_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 765);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v38 = ($context["payment_custom_field"] ?? null)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 765)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v39 = ($context["payment_custom_field"] ?? null)) && is_array($_v39) || $_v39 instanceof ArrayAccess ? ($_v39[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 765)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 765)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 765);
                    yield "\" id=\"input-payment-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 765);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-payment-custom-field-";
                    // line 766
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 766);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 769
                yield "
            ";
            }
            // line 771
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 772
        yield "          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-payment-address\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 773
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-shipping-address\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 785
        yield ($context["text_shipping_address"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-shipping-address\" data-oc-target=\"section-shipping-address\">
          <div class=\"mb-3\">
            <label for=\"input-shipping-address\" class=\"form-label\">";
        // line 791
        yield ($context["entry_address"] ?? null);
        yield "</label> <select name=\"shipping_address_id\" id=\"input-shipping-address\" class=\"form-select\">
              <option value=\"0\">";
        // line 792
        yield ($context["text_none"] ?? null);
        yield "</option>
              ";
        // line 793
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 794
            yield "                <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 794);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 794) == ($context["shipping_address_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 794);
            yield " ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 794);
            yield ",";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 794)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 794);
                yield ",";
            }
            yield " ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 794);
            yield ", ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 794);
            yield ", ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "postcode", [], "any", false, false, false, 794);
            yield ", ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 794);
            yield ", ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 794);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['address'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 796
        yield "            </select>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-firstname\" class=\"form-label\">";
        // line 799
        yield ($context["entry_firstname"] ?? null);
        yield "</label> <input type=\"text\" name=\"shipping_firstname\" value=\"";
        yield ($context["shipping_firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-shipping-firstname\" class=\"form-control\"/>
            <div id=\"error-shipping-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-lastname\" class=\"form-label\">";
        // line 803
        yield ($context["entry_lastname"] ?? null);
        yield "</label> <input type=\"text\" name=\"shipping_lastname\" value=\"";
        yield ($context["shipping_lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-shipping-lastname\" class=\"form-control\"/>
            <div id=\"error-shipping-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-shipping-company\" class=\"form-label\">";
        // line 807
        yield ($context["entry_company"] ?? null);
        yield "</label> <input type=\"text\" name=\"shipping_company\" value=\"";
        yield ($context["shipping_company"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_company"] ?? null);
        yield "\" id=\"input-shipping-company\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-address-1\" class=\"form-label\">";
        // line 810
        yield ($context["entry_address_1"] ?? null);
        yield "</label> <input type=\"text\" name=\"shipping_address_1\" value=\"";
        yield ($context["shipping_address_1"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_address_1"] ?? null);
        yield "\" id=\"input-shipping-address-1\" class=\"form-control\"/>
            <div id=\"error-shipping-address-1\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-shipping-address-2\" class=\"form-label\">";
        // line 814
        yield ($context["entry_address_2"] ?? null);
        yield "</label> <input type=\"text\" name=\"shipping_address_2\" value=\"";
        yield ($context["shipping_address_2"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_address_2"] ?? null);
        yield "\" id=\"input-shipping-address-2\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-city\" class=\"form-label\">";
        // line 817
        yield ($context["entry_city"] ?? null);
        yield "</label> <input type=\"text\" name=\"shipping_city\" value=\"";
        yield ($context["shipping_city"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_city"] ?? null);
        yield "\" id=\"input-shipping-city\" class=\"form-control\"/>
            <div id=\"error-shipping-city\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-postcode\" class=\"form-label\">";
        // line 821
        yield ($context["entry_postcode"] ?? null);
        yield "</label> <input type=\"text\" name=\"shipping_postcode\" value=\"";
        yield ($context["shipping_postcode"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_postcode"] ?? null);
        yield "\" id=\"input-shipping-postcode\" class=\"form-control\"/>
            <div id=\"error-shipping-postcode\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-country\" class=\"form-label\">";
        // line 825
        yield ($context["entry_country"] ?? null);
        yield "</label> <select name=\"shipping_country_id\" id=\"input-shipping-country\" class=\"form-select\">
              <option value=\"0\">";
        // line 826
        yield ($context["text_select"] ?? null);
        yield "</option>
              ";
        // line 827
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 828
            yield "                <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 828);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 828) == ($context["shipping_country_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 828);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['country'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 830
        yield "            </select>
            <div id=\"error-shipping-country\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-zone\" class=\"form-label\">";
        // line 834
        yield ($context["entry_zone"] ?? null);
        yield "</label> <select name=\"shipping_zone_id\" id=\"input-shipping-zone\" class=\"form-select\">
              <option value=\"\">";
        // line 835
        yield ($context["text_select"] ?? null);
        yield "</option>
              ";
        // line 836
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["shipping_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["zone"]) {
            // line 837
            yield "                <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "zone_id", [], "any", false, false, false, 837);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "zone_id", [], "any", false, false, false, 837) == ($context["shipping_zone_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "name", [], "any", false, false, false, 837);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['zone'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 839
        yield "            </select>
            <div id=\"error-shipping-zone\" class=\"invalid-feedback\"></div>
          </div>
          ";
        // line 842
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 843
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 843) == "address")) {
                // line 844
                yield "
              ";
                // line 845
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 845) == "select")) {
                    // line 846
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 846);
                    yield "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 847
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 847);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 847);
                    yield "</label> <select name=\"shipping_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 847);
                    yield "]\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 847);
                    yield "\" class=\"form-select\">
                    <option value=\"\">";
                    // line 848
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                    ";
                    // line 849
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 849));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 850
                        yield "                      <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 850);
                        yield "\"";
                        if (((($_v40 = ($context["shipping_custom_field"] ?? null)) && is_array($_v40) || $_v40 instanceof ArrayAccess ? ($_v40[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 850)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 850) == (($_v41 = ($context["shipping_custom_field"] ?? null)) && is_array($_v41) || $_v41 instanceof ArrayAccess ? ($_v41[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 850)] ?? null) : null)))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 850);
                        yield "</option>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 852
                    yield "                  </select>
                  <div id=\"error-shipping-custom-field-";
                    // line 853
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 853);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 856
                yield "
              ";
                // line 857
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 857) == "radio")) {
                    // line 858
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 858);
                    yield "\">
                  <label class=\"form-label\">";
                    // line 859
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 859);
                    yield "</label>
                  <div id=\"input-shipping-custom-field-";
                    // line 860
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 860);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 861
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 861));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 862
                        yield "                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"shipping_custom_field[";
                        // line 863
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 863);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 863);
                        yield "\" id=\"input-shipping-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 863);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v42 = ($context["shipping_custom_field"] ?? null)) && is_array($_v42) || $_v42 instanceof ArrayAccess ? ($_v42[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 863)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 863) == (($_v43 = ($context["shipping_custom_field"] ?? null)) && is_array($_v43) || $_v43 instanceof ArrayAccess ? ($_v43[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 863)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-shipping-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 863);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 863);
                        yield "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 866
                    yield "                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 867
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 867);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 870
                yield "
              ";
                // line 871
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 871) == "checkbox")) {
                    // line 872
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 872);
                    yield "\">
                  <label class=\"form-label\">";
                    // line 873
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 873);
                    yield "</label>
                  <div id=\"input-shipping-custom-field-";
                    // line 874
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 874);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    ";
                    // line 875
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 875));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 876
                        yield "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"shipping_custom_field[";
                        // line 877
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 877);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 877);
                        yield "\" id=\"input-shipping-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 877);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v44 = ($context["shipping_custom_field"] ?? null)) && is_array($_v44) || $_v44 instanceof ArrayAccess ? ($_v44[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 877)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 877), (($_v45 = ($context["shipping_custom_field"] ?? null)) && is_array($_v45) || $_v45 instanceof ArrayAccess ? ($_v45[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 877)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> <label for=\"input-shipping-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 877);
                        yield "\" class=\"form-check-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 877);
                        yield "</label>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 880
                    yield "                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 881
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 881);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 884
                yield "
              ";
                // line 885
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 885) == "text")) {
                    // line 886
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 886);
                    yield "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 887
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 887);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 887);
                    yield "</label> <input type=\"text\" name=\"shipping_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 887);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v46 = ($context["shipping_custom_field"] ?? null)) && is_array($_v46) || $_v46 instanceof ArrayAccess ? ($_v46[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 887)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v47 = ($context["shipping_custom_field"] ?? null)) && is_array($_v47) || $_v47 instanceof ArrayAccess ? ($_v47[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 887)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 887)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 887);
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 887);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-shipping-custom-field-";
                    // line 888
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 888);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 891
                yield "
              ";
                // line 892
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 892) == "textarea")) {
                    // line 893
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 893);
                    yield "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 894
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 894);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 894);
                    yield "</label> <textarea name=\"shipping_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 894);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 894);
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 894);
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 894);
                    yield "\" class=\"form-control\">";
                    yield (((($tmp = (($_v48 = ($context["shipping_custom_field"] ?? null)) && is_array($_v48) || $_v48 instanceof ArrayAccess ? ($_v48[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 894)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v49 = ($context["shipping_custom_field"] ?? null)) && is_array($_v49) || $_v49 instanceof ArrayAccess ? ($_v49[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 894)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 894)));
                    yield "</textarea>
                  <div id=\"error-shipping-custom-field-";
                    // line 895
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 895);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 898
                yield "
              ";
                // line 899
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 899) == "file")) {
                    // line 900
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 900);
                    yield "\">
                  <label class=\"form-label\">";
                    // line 901
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 901);
                    yield "</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 903
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-target=\"#input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 903);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                    <input type=\"text\" name=\"shipping_custom_field[";
                    // line 904
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 904);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v50 = ($context["shipping_custom_field"] ?? null)) && is_array($_v50) || $_v50 instanceof ArrayAccess ? ($_v50[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 904)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v51 = ($context["shipping_custom_field"] ?? null)) && is_array($_v51) || $_v51 instanceof ArrayAccess ? ($_v51[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 904)] ?? null) : null)) : (""));
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 904);
                    yield "\" class=\"form-control\" readonly/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-shipping-custom-field-";
                    // line 905
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 905);
                    yield "\"";
                    if ((($tmp =  !(($_v52 = ($context["shipping_custom_field"] ?? null)) && is_array($_v52) || $_v52 instanceof ArrayAccess ? ($_v52[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 905)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    yield ($context["button_download"] ?? null);
                    yield "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 906
                    yield ($context["button_clear"] ?? null);
                    yield "\" data-oc-target=\"#input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 906);
                    yield "\"";
                    if ((($tmp =  !(($_v53 = ($context["shipping_custom_field"] ?? null)) && is_array($_v53) || $_v53 instanceof ArrayAccess ? ($_v53[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 906)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-shipping-custom-field-";
                    // line 908
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 908);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 911
                yield "
              ";
                // line 912
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 912) == "date")) {
                    // line 913
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 913);
                    yield "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 914
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 914);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 914);
                    yield "</label> <input type=\"date\" name=\"shipping_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 914);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v54 = ($context["shipping_custom_field"] ?? null)) && is_array($_v54) || $_v54 instanceof ArrayAccess ? ($_v54[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 914)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v55 = ($context["shipping_custom_field"] ?? null)) && is_array($_v55) || $_v55 instanceof ArrayAccess ? ($_v55[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 914)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 914)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 914);
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 914);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-shipping-custom-field-";
                    // line 915
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 915);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 918
                yield "
              ";
                // line 919
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 919) == "time")) {
                    // line 920
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 920);
                    yield "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 921
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 921);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 921);
                    yield "</label> <input type=\"time\" name=\"shipping_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 921);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v56 = ($context["shipping_custom_field"] ?? null)) && is_array($_v56) || $_v56 instanceof ArrayAccess ? ($_v56[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 921)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v57 = ($context["shipping_custom_field"] ?? null)) && is_array($_v57) || $_v57 instanceof ArrayAccess ? ($_v57[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 921)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 921)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 921);
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 921);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-shipping-custom-field-";
                    // line 922
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 922);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 925
                yield "
              ";
                // line 926
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 926) == "datetime")) {
                    // line 927
                    yield "                <div class=\"mb-3 custom-field custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 927);
                    yield "\">
                  <label for=\"input-shipping-custom-field-";
                    // line 928
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 928);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 928);
                    yield "</label> <input type=\"datetime-local\" name=\"shipping_custom_field[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 928);
                    yield "]\" value=\"";
                    yield (((($tmp = (($_v58 = ($context["shipping_custom_field"] ?? null)) && is_array($_v58) || $_v58 instanceof ArrayAccess ? ($_v58[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 928)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v59 = ($context["shipping_custom_field"] ?? null)) && is_array($_v59) || $_v59 instanceof ArrayAccess ? ($_v59[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 928)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 928)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 928);
                    yield "\" id=\"input-shipping-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 928);
                    yield "\" class=\"form-control\"/>
                  <div id=\"error-shipping-custom-field-";
                    // line 929
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 929);
                    yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
                }
                // line 932
                yield "
            ";
            }
            // line 934
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 935
        yield "          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-shipping-address\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 936
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-shipping-method\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"><i class=\"fa fa-truck\"></i> ";
        // line 948
        yield ($context["text_shipping_method"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <p>";
        // line 952
        yield ($context["text_shipping"] ?? null);
        yield "</p>
        <div id=\"shipping-methods\"></div>
        <form id=\"form-shipping-method\" data-oc-target=\"#section-shipping-method\">
          <input type=\"hidden\" name=\"shipping_method[name]\" value=\"";
        // line 955
        yield ($context["shipping_method_name"] ?? null);
        yield "\" id=\"input-shipping-method-name\"/> <input type=\"hidden\" name=\"shipping_method[code]\" value=\"";
        yield ($context["shipping_method_code"] ?? null);
        yield "\" id=\"input-shipping-method-code\"/> <input type=\"hidden\" name=\"shipping_method[cost]\" value=\"";
        yield ($context["shipping_method_cost"] ?? null);
        yield "\" id=\"input-shipping-method-cost\"/> <input type=\"hidden\" name=\"shipping_method[tax_class_id]\" value=\"";
        yield ($context["shipping_method_tax_class_id"] ?? null);
        yield "\" id=\"input-shipping-method-tax-class\"/>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-shipping-method\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 957
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-payment-method\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"><i class=\"fa fa-credit-card\"></i> ";
        // line 969
        yield ($context["text_payment_method"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <p>";
        // line 973
        yield ($context["text_payment"] ?? null);
        yield "</p>
        <div id=\"payment-methods\"></div>
        <form id=\"form-payment-method\" data-oc-target=\"#section-payment-method\">
          <input type=\"hidden\" name=\"payment_method[name]\" value=\"";
        // line 976
        yield ($context["payment_method_name"] ?? null);
        yield "\" id=\"input-payment-method-name\"/> <input type=\"hidden\" name=\"payment_method[code]\" value=\"";
        yield ($context["payment_method_code"] ?? null);
        yield "\" id=\"input-payment-method-code\"/>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-payment-method\" class=\"btn btn-primary\">";
        // line 978
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-affiliate\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 990
        yield ($context["text_affiliate"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-affiliate\" data-oc-target=\"#section-affiliate\">
          <div class=\"mb-3\">
            <label for=\"input-affiliate\" class=\"form-label\">";
        // line 996
        yield ($context["entry_affiliate"] ?? null);
        yield "</label> <input type=\"hidden\" name=\"affiliate_id\" value=\"";
        yield ($context["affiliate_id"] ?? null);
        yield "\" id=\"input-affiliate-id\"/> <input type=\"text\" name=\"affiliate\" value=\"";
        yield ($context["affiliate"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_affiliate"] ?? null);
        yield "\" id=\"input-affiliate\" data-oc-target=\"autocomplete-affiliate\" class=\"form-control\" autocomplete=\"off\"/>
            <ul id=\"autocomplete-affiliate\" class=\"dropdown-menu\"></ul>
          </div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-affiliate\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 1000
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-comment\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 1012
        yield ($context["text_comment"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-comment\" data-oc-target=\"#section-comment\">
          <div class=\"mb-3\">
            <textarea name=\"comment\" rows=\"5\" placeholder=\"";
        // line 1018
        yield ($context["entry_comment"] ?? null);
        yield "\" id=\"input-comment\" class=\"form-control\">";
        yield ($context["comment"] ?? null);
        yield "</textarea>
          </div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-comment\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> ";
        // line 1021
        yield ($context["button_continue"] ?? null);
        yield "</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script type=\"text/javascript\"><!--
\$('#button-collapse').on('click', function() {
    var element = this;

    var target = \$('#collapse-order');

    if (!target.is(':hidden')) {
        target.slideUp('400', function() {
            \$(element).html('";
        // line 1037
        yield ($context["text_more"] ?? null);
        yield " <i class=\"fa-solid fa-angle-down\"></i>');
        });
    } else {
        target.slideDown('400', function() {
            \$(element).html('";
        // line 1041
        yield ($context["text_less"] ?? null);
        yield " <i class=\"fa-solid fa-angle-up\"></i>');
        });
    }
});

\$(document).on('click', '#button-invoice', function() {
    \$.ajax({
        url: 'index.php?route=sale/order.createInvoiceNo&user_token=";
        // line 1048
        yield ($context["user_token"] ?? null);
        yield "&order_id=' + \$('#input-order-id').val(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-invoice').button('loading');
        },
        complete: function() {
            \$('#button-invoice').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#output-invoice').html(json['invoice_no']);

                \$('#button-invoice').replaceWith('<button disabled=\"disabled\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Customer
\$('#input-customer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token=";
        // line 1081
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    customer_id: 0,
                    customer_group_id: ";
        // line 1086
        yield ($context["customer_group_id"] ?? null);
        yield ",
                    name: '";
        // line 1087
        yield ($context["text_none"] ?? null);
        yield "',
                    customer_group: '',
                    firstname: '',
                    lastname: '',
                    email: '',
                    telephone: '',
                    custom_field: [],
                    address: []
                });

                response(\$.map(json, function(item) {
                    return {
                        category: item['customer_group'],
                        label: item['name'],
                        value: item['customer_id'],
                        customer_group_id: item['customer_group_id'],
                        firstname: item['firstname'],
                        lastname: item['lastname'],
                        email: item['email'],
                        telephone: item['telephone'],
                        custom_field: item['custom_field'],
                        address: item['address']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        // Reset all custom fields
        \$('#form-customer input[type=\\'text\\'], #form-customer textarea').not('#input-customer, #input-customer-id').val('');
        \$('#form-customer select option').removeAttr('selected');
        \$('#form-customer input[type=\\'checkbox\\'], #form-customer input[type=\\'radio\\']').removeAttr('checked');

        \$('#input-customer-id').val(item['value']);
        \$('#input-customer-group').val(item['customer_group_id']);
        \$('#input-firstname').val(decodeHTMLEntities(item['firstname']));
        \$('#input-lastname').val(decodeHTMLEntities(item['lastname']));
        \$('#input-email').val(decodeHTMLEntities(item['email']));
        \$('#input-telephone').val(item['telephone']);

        for (i in item.custom_field) {
            \$('#input-custom-field-' + i).val(item.custom_field[i]);

            if (item.custom_field[i] instanceof Array) {
                for (j = 0; j < item.custom_field[i].length; j++) {
                    \$('#input-custom-field-value-' + item.custom_field[i][j]).prop('checked', true);
                }
            }
        }

        \$('#input-customer-group').trigger('change');

        html = '<option value=\"0\">";
        // line 1139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_none"] ?? null), "js");
        yield "</option>';

        for (i in item['address']) {
            html += '<option value=\"' + item['address'][i]['address_id'] + '\">' + decodeHTMLEntities(item['address'][i]['firstname']) + ' ' + decodeHTMLEntities(item['address'][i]['lastname']) + ', ' + (item['address'][i]['company'] ? decodeHTMLEntities(item['address'][i]['company']) + ', ' : '') + decodeHTMLEntities(item['address'][i]['address_1']) + ', ' + decodeHTMLEntities(item['address'][i]['city']) + ', ' + decodeHTMLEntities(item['address'][i]['country']) + '</option>';
        }

        \$('#input-payment-address').html(html);
        \$('#input-shipping-address').html(html);
    }
});

// Custom Fields
\$('#input-customer-group').on('change', function() {
    \$.ajax({
        url: 'index.php?route=customer/customer.customfield&user_token=";
        // line 1153
        yield ($context["user_token"] ?? null);
        yield "&customer_group_id=' + this.value,
        dataType: 'json',
        success: function(json) {
            \$('.custom-field').hide();
            \$('.custom-field').removeClass('required');

            for (i = 0; i < json.length; i++) {
                custom_field = json[i];

                \$('.custom-field-' + custom_field['custom_field_id']).show();

                if (custom_field['required']) {
                    \$('.custom-field-' + custom_field['custom_field_id']).addClass('required');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-customer').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1179
        yield ($context["user_token"] ?? null);
        yield "&call=customer&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-customer').button('loading');
        },
        complete: function() {
            \$('#button-customer').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#form-customer').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#form-customer').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-customer').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#output-customer').html('<a href=\"index.php?route=customer/customer.form&user_token=";
        // line 1212
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-customer-id').val() + '\" target=\"_blank\">' + \$('#input-firstname').val() + ' ' + \$('#input-lastname').val() + '</a>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').trigger('change');

\$('#input-store, #input-language, #input-currency').on('change', function(e) {
    \$('#button-refresh').trigger('click');
});

// Product
\$('#input-product').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token=";
        // line 1231
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id'],
                        option: item['option'],
                        subscription: item['subscription'],
                        price: item['price']
                    }
                }));
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    },
    'select': function(item) {
        \$('#input-product-id').val(item['value']);
        \$('#input-product').val(decodeHTMLEntities(item['label']));

        if (item['option'] != '') {
            html = '<fieldset class=\"mb-0\">';
            html += '  <legend>";
        // line 1255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option"] ?? null), "js");
        yield "</legend>';

            for (i = 0; i < item['option'].length; i++) {
                option = item['option'][i];

                if (option['type'] == 'select') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <select ' + (option['disabled'] ? 'disabled' : '') + ' name=\"option[' + option['product_option_id'] + ']\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-select\">';
                    html += '    <option value=\"\">";
        // line 1264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_select"] ?? null), "js");
        yield "</option>';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<option ' + (option['value'] == option_value['product_option_value_id'] ? 'selected=\"selected\"' : '') + ' value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                        }

                        html += '</option>';
                    }

                    html += '  </select>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'radio') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <select ' + (option['disabled'] ? 'disabled' : '') + ' name=\"option[' + option['product_option_id'] + ']\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-select\">';
                    html += '    <option value=\"\">";
        // line 1287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_select"] ?? null), "js");
        yield "</option>';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<option ' + (option['value'] == option_value['product_option_value_id'] ? 'selected=\"selected\"' : '') + ' value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                        }

                        html += '</option>';
                    }

                    html += '  </select>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'checkbox') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <div id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\">';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];
                        checked = Array.isArray(option['value']) ? option['value'].includes(option_value['product_option_value_id']) : false;

                        html += '<div class=\"form-check\">';
                        html += '  <input ' + (option['disabled'] ? 'disabled ' : '') + (checked ? 'checked' : '') + ' type=\"checkbox\" name=\"option[' + option['product_option_id'] + '][]\" value=\"' + option_value['product_option_value_id'] + '\" id=\"input-option-value-' + option_value['product_option_value_id'] + '\" class=\"form-check-input\"/>';
                        html += '  <label for=\"input-option-value-' + option_value['product_option_value_id'] + '\" class=\"form-check-label\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                        }

                        html += '  </label>';
                        html += '</div>';
                    }

                    html += '  </div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'text') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <input ' + (option['disabled'] ? 'disabled' : '') + ' type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\"/>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'textarea') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <textarea ' + (option['disabled'] ? 'disabled' : '') + ' name=\"option[' + option['product_option_id'] + ']\" rows=\"5\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\">' + option['value'] + '</textarea>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'file') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <div>';
                    html += '    <button ' + (option['disabled'] ? 'disabled' : '') + ' type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
        // line 1352
        yield ($context["upload"] ?? null);
        yield "\" data-oc-target=\"#input-option-' + option['product_option_id'] + '\" data-oc-size-max=\"";
        yield ($context["config_file_max_size"] ?? null);
        yield "\" data-oc-size-error=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["error_upload_size"] ?? null), "js");
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_upload"] ?? null), "js");
        yield "</button>';
                    html += '    <a href=\"\" class=\"btn btn-light\"><i class=\"fa-solid fa-download\"></i></a>';
                    html += '    <input type=\"hidden\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" id=\"input-option-' + option['product_option_id'] + '\"/>';
                    html += '  </div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'date') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <input ' + (option['disabled'] ? 'disabled' : '') + ' type=\"date\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\"/>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'time') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <input ' + (option['disabled'] ? 'disabled' : '') + ' type=\"time\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\"/>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'datetime') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <input ' + (option['disabled'] ? 'disabled' : '') + ' type=\"datetime-local\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\"/>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }
            }

            html += '</fieldset>';

            \$('#option').html(html);
        } else {
            \$('#option').html('');
        }

        if (item['subscription'] != '') {
            html = '<fieldset class=\"mb-0\">';
            html += '  <legend>";
        // line 1394
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_subscription"] ?? null), "js");
        yield "</legend>';
            html += '  <div class=\"mb-3 required\">';
            html += '    <select name=\"subscription_plan_id\" id=\"input-subscription-plan\" class=\"form-select\">';
            html += '      <option value=\"\">";
        // line 1397
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_select"] ?? null), "js");
        yield "</option>';

            for (i = 0; i < item['subscription'].length; i++) {
                if (item['subscription'][i]['customer_group_id'] == \$('#input-customer-group').val()) {
                    html += '<option value=\"' + item['subscription'][i]['subscription_plan_id'] + '\">' + item['subscription'][i]['name'] + '</option>';
                }
            }

            html += '  </select>';

            for (i = 0; i < item['subscription'].length; i++) {
                html += '<div id=\"subscription-description-' + item['subscription'][i]['subscription_plan_id'] + '-' + item['subscription'][i]['customer_group_id'] + '\" class=\"form-text subscription-description d-none\">' + item['subscription'][i]['description'] + '</div>';
            }

            html += '<div id=\"error-subscription\" class=\"invalid-feedback\"></div>';

            elements = \$('#input-customer-group option');

            for (i = 0; i < elements.length; i++) {
                html += '<datalist id=\"subscription-plan-' + \$(elements[i]).val() + '\">';
                html += '  <option value=\"\">";
        // line 1417
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_select"] ?? null), "js");
        yield "</option>';

                for (j = 0; j < item['subscription'].length; j++) {
                    if (item['subscription'][j]['customer_group_id'] == \$(elements[i]).val()) {
                        html += '<option value=\"' + item['subscription'][i]['subscription_plan_id'] + '\">' + item['subscription'][i]['name'] + '</option>';
                    }
                }

                html += '</datalist>';
            }

            html += '  </div>';
            html += '</fieldset>';

            \$('#subscription').html(html);
        } else {
            \$('#subscription').html('');
        }
    }
});

\$('#form-product-add').on('change', '#input-subscription-plan', function(e) {
    var element = this;

    \$('.subscription-description').addClass('d-none');

    \$('#subscription-description-' + \$(element).val() + '-' + \$('#input-customer-group').val()).removeClass('d-none');
});

\$('#input-customer-group').on('change', function(e) {
    \$('#input-subscription-plan').html(\$('#subscription-plan-' + this.value).html());

    // Change subscription description
    \$('#input-subscription-plan').trigger('click');
});

\$('#form-product-add').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1457
        yield ($context["user_token"] ?? null);
        yield "&call=product_add&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-product-add, #form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form, #input-order-id').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-product-add').button('loading');
        },
        complete: function() {
            \$('#button-product-add').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#form-product-add').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#form-product-add').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-product-add').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).on('hidden.bs.modal', '#modal-product', function () {
    // Restores form and clears dynamic injections whenever modal closes
    \$('#form-product-add')[0].reset();
    \$('#form-product-add > .alert').remove();
    \$('#autocomplete-product').empty();
    \$('#option').empty();
    \$('#subscription').empty();
});

// Remove product
\$('#order-product').on('click', 'button', function(e) {
    \$(this).parent().parent().remove();

    // Refresh products and totals
    \$('#button-refresh').trigger('click');
});

// Payment Address
\$('#input-payment-address').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/address.address&user_token=";
        // line 1522
        yield ($context["user_token"] ?? null);
        yield "&address_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-payment-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            // Reset all fields
            \$('#form-payment-address input[type=\\'text\\'], #form-payment-address textarea').val('');
            \$('#form-payment-address select option').not('#input-payment-address').removeAttr('selected');
            \$('#form-payment-address input[type=\\'checkbox\\'], #form-payment-address input[type=\\'radio\\']').removeAttr('checked');

            \$('#input-payment-firstname').val(json['firstname']);
            \$('#input-payment-lastname').val(json['lastname']);
            \$('#input-payment-company').val(json['company']);
            \$('#input-payment-address-1').val(json['address_1']);
            \$('#input-payment-address-2').val(json['address_2']);
            \$('#input-payment-city').val(json['city']);
            \$('#input-payment-postcode').val(json['postcode']);
            \$('#input-payment-country').val(json['country_id']);

            payment_zone_id = json['zone_id'];

            \$('#input-payment-country').trigger('change');

            for (i in json['custom_field']) {
                \$('#input-payment-custom-field-' + i).val(json['custom_field'][i]);

                if (json['custom_field'][i] instanceof Array) {
                    for (j = 0; j < json['custom_field'][i].length; j++) {
                        \$('#input-payment-custom-field-value-' + item.custom_field[i][j]).prop('checked', true);
                    }
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-payment-address').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1575
        yield ($context["user_token"] ?? null);
        yield "&call=payment_address&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-payment-address').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-payment-address').button('loading');
        },
        complete: function() {
            \$('#button-payment-address').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#form-payment-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#form-payment-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-payment-address').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                var address = \$('#input-payment-firstname').val() + ' ' + \$('#input-payment-lastname').val() + '<br/>';

                var company = \$('#input-payment-company').val();

                if (company) {
                    address += \$('#input-payment-company').val() + '<br/>';
                }

                address += \$('#input-payment-address-1').val() + '<br/>';

                var address_2 = \$('#input-payment-address-2').val();

                if (address_2) {
                    address += \$('#input-payment-address-2').val() + '<br/>';
                }

                address += \$('#input-payment-city').val() + '<br/>';

                var postcode = \$('#input-payment-postcode').val();

                if (postcode) {
                    address += postcode + '<br/>';
                }

                address += \$('#input-payment-zone option:selected').text() + '<br/>';
                address += \$('#input-payment-country option:selected').text();

                \$('#output-payment-address').html(address);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

var payment_zone_id = ";
        // line 1644
        yield ($context["payment_zone_id"] ?? null);
        yield ";

\$('#input-payment-country').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country.country&user_token=";
        // line 1650
        yield ($context["user_token"] ?? null);
        yield "&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
            \$('#button-payment-address').prop('disabled', true);
            \$('#button-confirm').prop('disabled', true);
            \$('#button-refresh').prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
            \$('#button-payment-address').prop('disabled', false);
            \$('#button-confirm').prop('disabled', false);
            \$('#button-refresh').prop('disabled', false);
        },
        success: function(json) {
            if (json['postcode_required'] == '1') {
                \$('#input-payment-postcode').parent().addClass('required');
            } else {
                \$('#input-payment-postcode').parent().removeClass('required');
            }

            html = '<option value=\"\">";
        // line 1671
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_select"] ?? null), "js");
        yield "</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == payment_zone_id) {
                        html += ' selected';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected>";
        // line 1684
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_none"] ?? null), "js");
        yield "</option>';
            }

            \$('#input-payment-zone').html(html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Shipping Address
\$('#input-shipping-address').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/address.address&user_token=";
        // line 1700
        yield ($context["user_token"] ?? null);
        yield "&address_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-shipping-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            // Reset all fields
            \$('#form-shipping-address input[type=\\'text\\'], #form-shipping-address input[type=\\'text\\'], #form-shipping-address textarea').val('');
            \$('#form-shipping-address select option').not('#input-shipping-address').removeAttr('selected');
            \$('#form-shipping-address input[type=\\'checkbox\\'], #form-shipping-address input[type=\\'radio\\']').removeAttr('checked');

            \$('#input-shipping-firstname').val(json['firstname']);
            \$('#input-shipping-lastname').val(json['lastname']);
            \$('#input-shipping-company').val(json['company']);
            \$('#input-shipping-address-1').val(json['address_1']);
            \$('#input-shipping-address-2').val(json['address_2']);
            \$('#input-shipping-city').val(json['city']);
            \$('#input-shipping-postcode').val(json['postcode']);
            \$('#input-shipping-country').val(json['country_id']);

            shipping_zone_id = json['zone_id'];

            \$('#input-shipping-country').trigger('change');

            for (i in json['custom_field']) {
                \$('#input-shipping-custom-field-' + i).val(json['custom_field'][i]);

                if (json['custom_field'][i] instanceof Array) {
                    for (j = 0; j < json['custom_field'][i].length; j++) {
                        \$('#input-shipping-custom-field-value-' + json['custom_field'][i][j]).prop('checked', true);
                    }
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-shipping-address').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1753
        yield ($context["user_token"] ?? null);
        yield "&call=shipping_address&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-cart, #form-shipping-address').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-shipping-address').button('loading');
        },
        complete: function() {
            \$('#button-shipping-address').button('reset');
        },
        success: function(json) {
            \$('#form-shipping-address .alert-dismissible').remove();
            \$('#form-shipping-address .is-invalid').removeClass('is-invalid');
            \$('#form-shipping-address .invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#form-shipping-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#form-shipping-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-shipping-address').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                var address = \$('#input-shipping-firstname').val() + ' ' + \$('#input-shipping-lastname').val() + '<br/>';

                var company = \$('#input-shipping-company').val();

                if (company) {
                    address += \$('#input-shipping-company').val() + '<br/>';
                }

                address += \$('#input-shipping-address-1').val() + '<br/>';

                var address_2 = \$('#input-shipping-address-2').val();

                if (address_2) {
                    address += \$('#input-shipping-address-2').val() + '<br/>';
                }

                address += \$('#input-shipping-city').val() + '<br/>';

                var postcode = \$('#input-shipping-postcode').val();

                if (postcode) {
                    address += postcode + '<br/>';
                }

                address += \$('#input-shipping-zone option:selected').text() + '<br/>';
                address += \$('#input-shipping-country option:selected').text();

                \$('#output-shipping-address').html(address);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

var shipping_zone_id = ";
        // line 1823
        yield ($context["shipping_zone_id"] ?? null);
        yield ";

\$('#input-shipping-country').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country.country&user_token=";
        // line 1829
        yield ($context["user_token"] ?? null);
        yield "&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
            \$('#button-shipping-address').prop('disabled', true);
            \$('#button-confirm').prop('disabled', true);
            \$('#button-refresh').prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
            \$('#button-shipping-address').prop('disabled', false);
            \$('#button-confirm').prop('disabled', false);
            \$('#button-refresh').prop('disabled', false);
        },
        success: function(json) {
            if (json['postcode_required'] == '1') {
                \$('#input-shipping-postcode').parent().addClass('required');
            } else {
                \$('#input-shipping-postcode').parent().removeClass('required');
            }

            html = '<option value=\"\">";
        // line 1850
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_select"] ?? null), "js");
        yield "</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == shipping_zone_id) {
                        html += ' selected';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected>";
        // line 1863
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_none"] ?? null), "js");
        yield "</option>';
            }

            \$('#input-shipping-zone').html(html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Shipping Method
var shipping_method = [];

\$('#button-shipping-methods').on('click', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1881
        yield ($context["user_token"] ?? null);
        yield "&call=shipping_methods&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            html = '';

            if (json['shipping_methods']) {
                var k = 0;

                for (i in json['shipping_methods']) {
                    html += '<p><strong>' + json['shipping_methods'][i]['name'] + '</strong></p>';

                    if (!json['shipping_methods'][i]['error']) {
                        for (j in json['shipping_methods'][i]['quote']) {
                            shipping_method[json['shipping_methods'][i]['quote'][j]['code']] = json['shipping_methods'][i]['quote'][j];

                            html += '<div class=\"form-check\">';
                            html += '  <input type=\"radio\" name=\"choose_shipping\" value=\"' + json['shipping_methods'][i]['quote'][j]['code'] + '\" id=\"input-shipping-method-' + k + '\"';

                            if (json['shipping_methods'][i]['quote'][j]['code'] == \$('#input-shipping-method-code').val()) {
                                html += ' checked';
                            }

                            html += '/>';

                            html += '  <label for=\"input-shipping-method-' + k + '\">' + json['shipping_methods'][i]['quote'][j]['name'] + ' - ' + json['shipping_methods'][i]['quote'][j]['text'] + '</label>';
                            html += '</div>';

                            k++;
                        }
                    } else {
                        html += '<div class=\"alert alert-danger\">' + json['shipping_methods'][i]['error'] + '</div>';
                    }
                }

                \$('#shipping-methods').html(html);

                \$('#modal-shipping-method').modal('show');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#modal-shipping-method').on('change', 'input[name=\\'choose_shipping\\']', function() {
    var code = \$(this).val();

    if (shipping_method[code]) {
        \$('#input-shipping-method-name').val(shipping_method[code]['name']);
        \$('#input-shipping-method-code').val(shipping_method[code]['code']);
        \$('#input-shipping-method-cost').val(shipping_method[code]['cost']);
        \$('#input-shipping-method-tax-class').val(shipping_method[code]['tax_class_id']);
    }
});

\$('#form-shipping-method').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 1971
        yield ($context["user_token"] ?? null);
        yield "&call=shipping_method&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-shipping-method').button('loading');
        },
        complete: function() {
            \$('#button-shipping-method').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#modal-shipping-method .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#modal-shipping-method .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#modal-shipping-method .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#output-shipping-method').html(\$('#input-shipping-method-name').val());

                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Payment Method
var payment_method = [];

\$('#button-payment-methods').on('click', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2023
        yield ($context["user_token"] ?? null);
        yield "&call=payment_methods&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (typeof json['error'] == 'string') {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            var html = '';

            if (json['payment_methods']) {
                var k = 0;

                for (i in json['payment_methods']) {
                    html += '<p><strong>' + json['payment_methods'][i]['name'] + '</strong></p>';

                    if (!json['payment_methods'][i]['error']) {
                        for (j in json['payment_methods'][i]['option']) {
                            payment_method[json['payment_methods'][i]['option'][j]['code']] = json['payment_methods'][i]['option'][j];

                            html += '<div class=\"form-check\">';
                            html += '  <input type=\"radio\" name=\"choose_payment\" value=\"' + json['payment_methods'][i]['option'][j]['code'] + '\" id=\"input-payment-method-' + k + '\"';

                            if (json['payment_methods'][i]['option'][j]['code'] == \$('#input-payment-method-code').val()) {
                                html += ' checked';
                            }

                            html += '/>';
                            html += '  <label for=\"input-payment-method-' + k + '\">' + json['payment_methods'][i]['option'][j]['name'] + '</label>';
                            html += '</div>';

                            k++;
                        }
                    } else {
                        html += '<div class=\"alert alert-danger\">' + json['payment_methods'][i]['error'] + '</div>';
                    }
                }

                \$('#payment-methods').html(html);

                \$('#modal-payment-method').modal('show');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#modal-payment-method').on('change', 'input[name=\\'choose_payment\\']', function() {
    var code = \$(this).val();

    if (payment_method[code]) {
        \$('#input-payment-method-name').val(payment_method[code]['name']);
        \$('#input-payment-method-code').val(payment_method[code]['code']);
    }
});

\$('#form-payment-method').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2108
        yield ($context["user_token"] ?? null);
        yield "&call=payment_method&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-payment-method').button('loading');
        },
        complete: function() {
            \$('#button-payment-method').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (typeof json['error'] == 'string') {
                \$('#modal-payment-method .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#modal-payment-method .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#modal-payment-method .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#output-payment-method').html(\$('#input-payment-method-name').val());

                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-comment').on('submit', function(e) {
    e.preventDefault();

    \$('#output-comment').html(\$('#input-comment').val().replace(/<[^>]*>?/gm, '').replace(/(?:\\r\\n|\\r|\\n)/g, '<br/>'));
});

\$('#button-refresh').on('click', function() {
    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2159
        yield ($context["user_token"] ?? null);
        yield "&call=cart&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form, #input-order-id').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-refresh').button('loading');
        },
        complete: function() {
            \$('#button-refresh').button('reset');
        },
        success: function(json) {
            if (json['error']) {
                if (typeof json['error'] == 'string') {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#button-confirm').on('click', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2196
        yield ($context["user_token"] ?? null);
        yield "&call=confirm&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form, #form-comment, #input-order-id').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            // Check for errors
            if (typeof json['error'] == 'string') {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['shipping_method']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['shipping_method'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#input-shipping-method-info').addClass('is-invalid');

                    delete json['error']['shipping_method'];
                }

                if (json['error']['payment_method']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['payment_method'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#input-payment-method-info').addClass('is-invalid');

                    delete json['error']['payment_method'];
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }

                // Highlight any invalid fields
                \$('.is-invalid').parents('form').each(function(index, element) {
                    \$(\$(element).attr('data-oc-target')).addClass('is-invalid');
                });
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (json['order_id']) {
                    \$('#input-order-id').val(json['order_id']);
                }

                if (json['points']) {
                    \$('#output-point').html(json['points']);
                    \$('#button-reward-add').prop('disabled', false);
                    \$('#button-reward-remove').prop('disabled', false);
                } else {
                    \$('#output-point').html(0);
                    \$('#button-reward-add').prop('disabled', true);
                    \$('#button-reward-remove').prop('disabled', true);
                }

                if (json['commission']) {
                    \$('#output-commission').html(json['commission']);
                    \$('#button-commission-add').prop('disabled', false);
                    \$('#button-commission-remove').prop('disabled', false);
                } else {
                    \$('#output-commission').html('&nbsp;');
                    \$('#button-commission-add').prop('disabled', true);
                    \$('#button-commission-remove').prop('disabled', true);
                }

                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Refresh all products and totals
var order_product_row = ";
        // line 2282
        yield ($context["order_product_row"] ?? null);
        yield ";

function cart_render(products, totals, shipping_required) {
    html = '';

    if (products) {
        for (i in products) {
            product = products[i];

            html += '<tr>';
            html += '  <td><a href=\"index.php?route=catalog/product.form&user_token=";
        // line 2292
        yield ($context["user_token"] ?? null);
        yield "&product_id=' + product['product_id'] + '\" target=\"_blank\">' + product['name'] + '</a>' + (!product['stock'] ? ' <span class=\"text-danger\">***</span>' : '');
            html += '    <div id=\"error-product-' + order_product_row + '-product\" class=\"invalid-feedback mt-0\"></div>';

            html += '<ul class=\"list-unstyled mb-0\">';

            html += '<li>';
            html += '  <small> - ";
        // line 2298
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_model"] ?? null), "js");
        yield ": ' + product['model'] + '</small>';
            html += '</li>';

            for (j = 0; j < product['option'].length; j++) {
                option = product['option'][j];

                html += '<li>';
                html += '  <small> - ' + option['name'] + ': ' + option['value'] + '</small>';
                html += '  <div id=\"error-product-' + order_product_row + '-option-' + option['product_option_id'] + '\" class=\"invalid-feedback mt-0\"></div>';
                html += '</li>';
            }

            if (product['subscription']) {
                html += '<li>';
                html += '  <small> - ";
        // line 2312
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_subscription"] ?? null), "js");
        yield ": ' + product['subscription'] + '</small>';
                html += '  <div id=\"error-product-' + order_product_row + '-subscription\" class=\"invalid-feedback mt-0\"></div>';
                html += '</li>';
            }

            if (product['reward']) {
                html += '<li>';
                html += '  <small> - ";
        // line 2319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_points"] ?? null), "js");
        yield ": ' + product['reward'] + '</small>';
                html += '</li>';
            }

            html += '</ul>';

            html += '<input type=\"hidden\" name=\"product[' + order_product_row + '][product_id]\" value=\"' + product['product_id'] + '\"/>';
            html += '<input type=\"hidden\" name=\"product[' + order_product_row + '][quantity]\" value=\"' + product['quantity'] + '\"/>';

            for (j = 0; j < product['option'].length; j++) {
                option = product['option'][j];

                if (option['type'] == 'select' || option['type'] == 'radio') {
                    html += '<input type=\"hidden\" name=\"product[' + order_product_row + '][option][' + option['product_option_id'] + ']\" value=\"' + option['product_option_value_id'] + '\"/>';
                }

                if (option['type'] == 'checkbox') {
                    html += '<input type=\"hidden\" name=\"product[' + order_product_row + '][option][' + option['product_option_id'] + '][]\" value=\"' + option['product_option_value_id'] + '\"/>';
                }

                if (option['type'] == 'text' || option['type'] == 'textarea' || option['type'] == 'file' || option['type'] == 'date' || option['type'] == 'datetime' || option['type'] == 'time') {
                    html += '<input type=\"hidden\" name=\"product[' + order_product_row + '][option][' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\"/>';
                }
            }

            html += '    <input type=\"hidden\" name=\"product[' + order_product_row + '][subscription_plan_id]\" value=\"' + product['subscription_plan_id'] + '\"/>';
            html += '  </td>';
            html += '  <td class=\"text-end\">' + product['quantity'] + '</td>';
            html += '  <td class=\"text-end\">' + product['price_text'] + '</td>';
            html += '  <td class=\"text-end\">' + product['total_text'] + '</td>';
            html += '  <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2349
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
            html += '</tr>';

            order_product_row++;
        }
    } else {
        html += '<tr>';
        html += '  <td colspan=\"6\" class=\"text-center\">";
        // line 2356
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_no_results"] ?? null), "js");
        yield "</td>';
        html += '</tr>';
    }

    \$('#order-product').html(html);

    // Totals
    html = '';

    for (i in totals) {
        total = totals[i];

        html += '<tr>';
        html += '  <td class=\"text-end\"><strong>' + total['title'] + '</strong></td>';
        html += '  <td class=\"text-end\" style=\"width: 1px;\">' + total['text'] + '</td>';
        html += '</tr>';
    }

    \$('#order-total').html(html);

    if (shipping_required) {
        \$('#shipping-address').removeClass('d-none');
        \$('#shipping-method').removeClass('d-none');
        \$('#button-shipping-method').prop('disabled', false);
    } else {
        \$('#shipping-address').addClass('d-none');
        \$('#shipping-method').addClass('d-none');
        \$('#button-shipping-method').prop('disabled', true);
    }
}

// Reward
\$(document).on('click', '#button-reward-add, #button-reward-remove', function(e) {
    var element = this;

    if (\$(element).hasClass('btn-success')) {
        var action = 'add';
    } else {
        var action = 'remove';
    }

    \$.ajax({
        url: 'index.php?route=sale/order.' + action + 'Reward&user_token=";
        // line 2398
        yield ($context["user_token"] ?? null);
        yield "&order_id=' + \$('#input-order-id').val(),
        type: 'post',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (action == 'add') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-reward-remove\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2418
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_reward_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>');
                }

                if (action == 'remove') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-reward-add\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2422
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_reward_add"] ?? null), "js");
        yield "\" class=\"btn btn-success\"><i class=\"fa-solid fa-plus-circle\"></i></button>');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Affiliate
\$('#input-affiliate').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=marketing/affiliate.autocomplete&user_token=";
        // line 2436
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    customer_id: 0,
                    name: '";
        // line 2441
        yield ($context["text_none"] ?? null);
        yield "'
                });

                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-affiliate-id').val(item['value']);
        \$('#input-affiliate').val(decodeHTMLEntities(item['label']));
    }
});

\$('#form-affiliate').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2463
        yield ($context["user_token"] ?? null);
        yield "&call=affiliate&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-affiliate').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-affiliate').button('loading');
        },
        complete: function() {
            \$('#button-affiliate').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-affiliate').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#form-affiliate').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (\$('#input-affiliate-id').val()) {
                    \$('#output-affiliate').html('<a href=\"index.php?route=marketing/affiliate.form&user_token=";
        // line 2484
        yield ($context["user_token"] ?? null);
        yield "&customer_id=' + \$('#input-affiliate-id').val() + '\" target=\"_blank\">' + \$('#input-affiliate').val() + '</a>');
                } else {
                    \$('#output-affiliate').html('');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Commission
\$(document).on('click', '#button-commission-add, #button-commission-remove', function(e) {
    var element = this;

    if (\$(element).hasClass('btn-success')) {
        var action = 'add';
    } else {
        var action = 'remove';
    }

    \$.ajax({
        url: 'index.php?route=sale/order.' + action + 'Commission&user_token=";
        // line 2507
        yield ($context["user_token"] ?? null);
        yield "&order_id=' + \$('#input-order-id').val(),
        type: 'post',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (action == 'add') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-commission-remove\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2527
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_commission_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>');
                }

                if (action == 'remove') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-commission-add\" data-bs-toggle=\"tooltip\" title=\"";
        // line 2531
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_commission_add"] ?? null), "js");
        yield "\" class=\"btn btn-success\"><i class=\"fa-solid fa-plus-circle\"></i></button>');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#history').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
});

\$('#form-history').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token=";
        // line 2551
        yield ($context["user_token"] ?? null);
        yield "&call=history_add&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val() + '&order_id=' + \$('#input-order-id').val(),
        type: 'post',
        dataType: 'json',
        data: \$('#form-history').serialize(),
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-history').button('loading');
        },
        complete: function() {
            \$('#button-history').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#history').load('index.php?route=sale/order.history&user_token=";
        // line 2572
        yield ($context["user_token"] ?? null);
        yield "&order_id=' + \$('#input-order-id').val());

                \$('#input-history').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 2583
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
        return "admin/view/template/sale/order_info.twig";
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
        return array (  4809 => 2583,  4795 => 2572,  4771 => 2551,  4748 => 2531,  4741 => 2527,  4718 => 2507,  4692 => 2484,  4668 => 2463,  4643 => 2441,  4635 => 2436,  4618 => 2422,  4611 => 2418,  4588 => 2398,  4543 => 2356,  4533 => 2349,  4500 => 2319,  4490 => 2312,  4473 => 2298,  4464 => 2292,  4451 => 2282,  4362 => 2196,  4322 => 2159,  4268 => 2108,  4180 => 2023,  4125 => 1971,  4032 => 1881,  4011 => 1863,  3995 => 1850,  3971 => 1829,  3962 => 1823,  3889 => 1753,  3833 => 1700,  3814 => 1684,  3798 => 1671,  3774 => 1650,  3765 => 1644,  3693 => 1575,  3637 => 1522,  3569 => 1457,  3526 => 1417,  3503 => 1397,  3497 => 1394,  3446 => 1352,  3378 => 1287,  3352 => 1264,  3340 => 1255,  3313 => 1231,  3291 => 1212,  3255 => 1179,  3226 => 1153,  3209 => 1139,  3154 => 1087,  3150 => 1086,  3142 => 1081,  3106 => 1048,  3096 => 1041,  3089 => 1037,  3070 => 1021,  3062 => 1018,  3053 => 1012,  3038 => 1000,  3025 => 996,  3016 => 990,  3001 => 978,  2994 => 976,  2988 => 973,  2981 => 969,  2966 => 957,  2955 => 955,  2949 => 952,  2942 => 948,  2927 => 936,  2924 => 935,  2918 => 934,  2914 => 932,  2908 => 929,  2894 => 928,  2889 => 927,  2887 => 926,  2884 => 925,  2878 => 922,  2864 => 921,  2859 => 920,  2857 => 919,  2854 => 918,  2848 => 915,  2834 => 914,  2829 => 913,  2827 => 912,  2824 => 911,  2818 => 908,  2807 => 906,  2797 => 905,  2789 => 904,  2777 => 903,  2772 => 901,  2767 => 900,  2765 => 899,  2762 => 898,  2756 => 895,  2740 => 894,  2735 => 893,  2733 => 892,  2730 => 891,  2724 => 888,  2710 => 887,  2705 => 886,  2703 => 885,  2700 => 884,  2694 => 881,  2691 => 880,  2670 => 877,  2667 => 876,  2663 => 875,  2659 => 874,  2655 => 873,  2650 => 872,  2648 => 871,  2645 => 870,  2639 => 867,  2636 => 866,  2615 => 863,  2612 => 862,  2608 => 861,  2604 => 860,  2600 => 859,  2595 => 858,  2593 => 857,  2590 => 856,  2584 => 853,  2581 => 852,  2566 => 850,  2562 => 849,  2558 => 848,  2548 => 847,  2543 => 846,  2541 => 845,  2538 => 844,  2535 => 843,  2531 => 842,  2526 => 839,  2511 => 837,  2507 => 836,  2503 => 835,  2499 => 834,  2493 => 830,  2478 => 828,  2474 => 827,  2470 => 826,  2466 => 825,  2455 => 821,  2444 => 817,  2434 => 814,  2423 => 810,  2413 => 807,  2402 => 803,  2391 => 799,  2386 => 796,  2353 => 794,  2349 => 793,  2345 => 792,  2341 => 791,  2332 => 785,  2317 => 773,  2314 => 772,  2308 => 771,  2304 => 769,  2298 => 766,  2284 => 765,  2279 => 764,  2277 => 763,  2274 => 762,  2268 => 759,  2254 => 758,  2249 => 757,  2247 => 756,  2244 => 755,  2238 => 752,  2224 => 751,  2219 => 750,  2217 => 749,  2214 => 748,  2208 => 745,  2197 => 743,  2187 => 742,  2179 => 741,  2167 => 740,  2162 => 738,  2157 => 737,  2155 => 736,  2152 => 735,  2146 => 732,  2132 => 731,  2127 => 730,  2125 => 729,  2122 => 728,  2116 => 725,  2102 => 724,  2097 => 723,  2095 => 722,  2092 => 721,  2086 => 718,  2083 => 717,  2062 => 714,  2059 => 713,  2055 => 712,  2051 => 711,  2047 => 710,  2042 => 709,  2040 => 708,  2037 => 707,  2031 => 704,  2028 => 703,  2007 => 700,  2004 => 699,  2000 => 698,  1996 => 697,  1992 => 696,  1987 => 695,  1985 => 694,  1982 => 693,  1976 => 690,  1973 => 689,  1958 => 687,  1954 => 686,  1950 => 685,  1940 => 684,  1935 => 683,  1933 => 682,  1930 => 681,  1927 => 680,  1923 => 679,  1918 => 676,  1903 => 674,  1899 => 673,  1895 => 672,  1891 => 671,  1885 => 667,  1870 => 665,  1866 => 664,  1862 => 663,  1858 => 662,  1847 => 658,  1836 => 654,  1826 => 651,  1815 => 647,  1805 => 644,  1794 => 640,  1783 => 636,  1778 => 633,  1745 => 631,  1741 => 630,  1737 => 629,  1733 => 628,  1724 => 622,  1709 => 610,  1699 => 605,  1689 => 600,  1680 => 594,  1665 => 582,  1661 => 580,  1655 => 579,  1651 => 577,  1645 => 574,  1631 => 573,  1626 => 572,  1624 => 571,  1621 => 570,  1615 => 567,  1601 => 566,  1596 => 565,  1594 => 564,  1591 => 563,  1585 => 560,  1571 => 559,  1566 => 558,  1564 => 557,  1561 => 556,  1555 => 553,  1544 => 551,  1534 => 550,  1526 => 549,  1514 => 548,  1509 => 546,  1504 => 545,  1502 => 544,  1499 => 543,  1493 => 540,  1479 => 539,  1474 => 538,  1472 => 537,  1469 => 536,  1463 => 533,  1449 => 532,  1444 => 531,  1442 => 530,  1439 => 529,  1433 => 526,  1430 => 525,  1409 => 522,  1406 => 521,  1402 => 520,  1398 => 519,  1394 => 518,  1389 => 517,  1387 => 516,  1384 => 515,  1378 => 512,  1375 => 511,  1354 => 508,  1351 => 507,  1347 => 506,  1343 => 505,  1339 => 504,  1334 => 503,  1332 => 502,  1329 => 501,  1323 => 498,  1320 => 497,  1305 => 495,  1301 => 494,  1297 => 493,  1287 => 492,  1282 => 491,  1279 => 490,  1276 => 489,  1272 => 488,  1261 => 484,  1255 => 483,  1244 => 479,  1239 => 477,  1228 => 473,  1217 => 469,  1211 => 465,  1196 => 463,  1192 => 462,  1188 => 461,  1181 => 457,  1168 => 455,  1163 => 453,  1154 => 447,  1142 => 437,  1131 => 435,  1127 => 434,  1118 => 428,  1114 => 427,  1108 => 424,  1104 => 423,  1101 => 422,  1095 => 419,  1091 => 418,  1088 => 417,  1086 => 416,  1081 => 414,  1077 => 413,  1069 => 408,  1058 => 400,  1052 => 397,  1045 => 393,  1040 => 391,  1034 => 387,  1019 => 385,  1015 => 384,  1009 => 381,  1004 => 379,  997 => 375,  993 => 374,  987 => 370,  976 => 368,  972 => 367,  968 => 366,  964 => 365,  958 => 362,  950 => 357,  946 => 356,  941 => 353,  932 => 350,  928 => 349,  925 => 348,  921 => 347,  909 => 338,  904 => 336,  896 => 331,  890 => 327,  884 => 325,  874 => 323,  872 => 322,  866 => 319,  861 => 317,  841 => 308,  836 => 306,  829 => 301,  823 => 299,  813 => 297,  811 => 296,  805 => 293,  800 => 291,  795 => 288,  786 => 286,  782 => 285,  770 => 276,  765 => 274,  753 => 265,  748 => 263,  740 => 260,  730 => 252,  724 => 250,  721 => 249,  714 => 246,  711 => 245,  704 => 242,  701 => 241,  694 => 238,  691 => 237,  684 => 234,  681 => 233,  674 => 230,  671 => 229,  664 => 226,  662 => 225,  655 => 223,  649 => 220,  641 => 217,  633 => 211,  627 => 209,  624 => 208,  617 => 205,  614 => 204,  607 => 201,  604 => 200,  597 => 197,  594 => 196,  587 => 193,  584 => 192,  577 => 189,  574 => 188,  567 => 185,  565 => 184,  558 => 182,  552 => 179,  537 => 166,  531 => 163,  528 => 162,  525 => 161,  519 => 160,  517 => 159,  512 => 157,  508 => 156,  504 => 155,  500 => 154,  492 => 152,  486 => 151,  476 => 149,  473 => 148,  463 => 146,  460 => 145,  450 => 143,  447 => 142,  443 => 141,  433 => 140,  430 => 139,  422 => 136,  419 => 135,  416 => 134,  410 => 131,  396 => 130,  393 => 129,  390 => 128,  384 => 127,  376 => 124,  368 => 123,  365 => 122,  357 => 119,  351 => 118,  348 => 117,  345 => 116,  341 => 115,  334 => 113,  328 => 110,  322 => 109,  318 => 107,  313 => 106,  310 => 105,  308 => 104,  301 => 100,  297 => 99,  293 => 98,  289 => 97,  285 => 96,  273 => 88,  258 => 86,  254 => 85,  245 => 79,  242 => 78,  227 => 76,  223 => 75,  213 => 69,  198 => 67,  194 => 66,  182 => 57,  177 => 55,  168 => 48,  160 => 46,  150 => 44,  148 => 43,  143 => 41,  136 => 36,  132 => 34,  126 => 32,  124 => 31,  120 => 29,  113 => 27,  107 => 25,  105 => 24,  100 => 22,  91 => 16,  84 => 11,  73 => 9,  69 => 8,  64 => 6,  50 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\"><a href=\"{{ invoice }}\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"{{ button_invoice_print }}\" class=\"btn btn-info{% if not order_id %} disabled{% endif %}\"><i class=\"fa-solid fa-print\"></i></a> <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fa-solid fa-info-circle\"></i> {{ text_form }}</div>
      <div class=\"card-body\">
        <div class=\"row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-xl-3\">
          <div class=\"col mb-3\">
            <div class=\"input-group\">
              <section class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                <div class=\"lead\"><strong>{{ text_invoice }}</strong>
                  <br/>
                  {% if not invoice_no %}
                    <span id=\"output-invoice\">{{ text_tbc }}</span>
                  {% else %}
                    <span id=\"output-invoice\">{{ invoice_prefix }}{{ invoice_no }}</span>
                  {% endif %}
                </div>
              </section>
              {% if not invoice_no %}
                <button type=\"button\" id=\"button-invoice\" data-bs-toggle=\"tooltip\" title=\"{{ button_generate }}\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
              {% else %}
                <button type=\"button\" disabled=\"disabled\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
              {% endif %}
            </div>
          </div>
          <div class=\"col mb-3\">
            <div class=\"input-group\">
              <section id=\"section-customer\" class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                <div class=\"lead\"><strong>{{ text_customer }}</strong>
                  <br/>
                  {% if customer_id %}
                    <div id=\"output-customer\"><a href=\"{{ customer_edit }}\" target=\"_blank\">{{ firstname }} {{ lastname }}</a></div>
                  {% else %}
                    <div id=\"output-customer\">{{ firstname }} {{ lastname }}</div>
                  {% endif %}
                </div>
              </section>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-customer\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
          <div class=\"col mb-3\">
            <div class=\"form-control p-0 rounded\">
              <div class=\"lead p-2\"><strong>{{ text_date_added }}</strong>
                <br/>
                {{ date_added }}
              </div>
            </div>
          </div>
        </div>
        <div class=\"row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-xl-3\">
          <div class=\"col mb-3\">
            <div class=\"form-floating\">
              <select id=\"input-store\" class=\"form-select\">
                {% for store in stores %}
                  <option value=\"{{ store.store_id }}\"{% if store.store_id == store_id %} selected{% endif %}>{{ store.name }}</option>
                {% endfor %}
              </select> <label for=\"input-store\">{{ entry_store }}</label>
            </div>
          </div>
          <div class=\"col mb-3\">
            <div class=\"form-floating\">
              <select id=\"input-language\" class=\"form-select\">
                {% for language in languages %}
                  <option value=\"{{ language.code }}\"{% if language.code == language_code %} selected{% endif %}>{{ language.name }}</option>
                {% endfor %}
              </select>
              <label for=\"input-language\">{{ entry_language }}</label>
            </div>
          </div>
          <div class=\"col\">
            <div class=\"form-floating\">
              <select id=\"input-currency\" class=\"form-select\">
                {% for currency in currencies %}
                  <option value=\"{{ currency.code }}\"{% if currency.code == currency_code %} selected{% endif %}>{{ currency.title }}</option>
                {% endfor %}
              </select> <label for=\"input-currency\">{{ entry_currency }}</label>
            </div>
          </div>
        </div>
        <form id=\"form-cart\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <th>{{ column_product }}</th>
                <th class=\"text-end\">{{ column_quantity }}</th>
                <th class=\"text-end\">{{ column_price }}</th>
                <th class=\"text-end\">{{ column_total }}</th>
                <th class=\"text-end\" style=\"width: 1px;\">{{ column_action }}</th>
              </tr>
            </thead>
            <tbody id=\"order-product\">
              {% set order_product_row = 0 %}
              {% if order_products %}
                {% for order_product in order_products %}
                  <tr>
                    <td>
                      <a href=\"{{ order_product.product_edit }}\" target=\"_blank\">{{ order_product.name }}</a>
                      <div id=\"error-product-{{ order_product_row }}-product\" class=\"invalid-feedback mt-0\"></div>
                      <ul class=\"list-unstyled mb-0\">
                        <li>
                          <small> - {{ text_model }}: {{ order_product.model }}</small>
                        </li>
                        {% for option in order_product.option %}
                          {% if option.type != 'file' %}
                            <li>
                              <small> - {{ option.name }}: {{ option.value }}</small>
                              <div id=\"error-product-{{ order_product_row }}-option-{{ option.product_option_id }}\" class=\"invalid-feedback mt-0\"></div>
                            </li>
                          {% else %}
                            <li>
                              <small> - {{ option.name }}: <a href=\"{{ option.href }}\">{{ option.filename }}</a></small>
                              <div id=\"error-product-{{ order_product_row }}-option-{{ option.product_option_id }}\" class=\"invalid-feedback mt-0\"></div>
                            </li>
                          {% endif %}
                        {% endfor %}
                        {% if order_product.subscription_plan_id %}
                          <li>
                            <small> - {{ text_subscription }}: {% if order_product.subscription_edit %}<a href=\"{{ order_product.subscription_edit }}\" target=\"_blank\">{{ order_product.subscription_plan }}</a>{% else %}{{ order_product.subscription_plan }}{% endif %}</small>
                            <div id=\"error-product-{{ order_product_row }}-subscription\" class=\"invalid-feedback mt-0\"></div>
                          </li>
                        {% endif %}
                        {% if order_product.reward %}
                          <li>
                            <small> - {{ text_points }}: {{ order_product.reward }}</small>
                          </li>
                        {% endif %}
                      </ul>
                      <input type=\"hidden\" name=\"product[{{ order_product_row }}][product_id]\" value=\"{{ order_product.product_id }}\"/> <input type=\"hidden\" name=\"product[{{ order_product_row }}][quantity]\" value=\"{{ order_product.quantity }}\"/>
                      {% for option in order_product.option %}
                        {% if option.type == 'select' or option.type == 'radio' %}
                          <input type=\"hidden\" name=\"product[{{ order_product_row }}][option][{{ option.product_option_id }}]\" value=\"{{ option.product_option_value_id }}\"/>
                        {% endif %}
                        {% if option.type == 'checkbox' %}
                          <input type=\"hidden\" name=\"product[{{ order_product_row }}][option][{{ option.product_option_id }}][]\" value=\"{{ option.product_option_value_id }}\"/>
                        {% endif %}
                        {% if option.type == 'text' or option.type == 'textarea' or option.type == 'file' or option.type == 'date' or option.type == 'datetime' or option.type == 'time' %}
                          <input type=\"hidden\" name=\"product[{{ order_product_row }}][option][{{ option.product_option_id }}]\" value=\"{{ option.value }}\"/>
                        {% endif %}
                      {% endfor %}
                      <input type=\"hidden\" name=\"product[{{ order_product_row }}][subscription_plan_id]\" value=\"{{ order_product.subscription_plan_id }}\"/>
                    </td>
                    <td class=\"text-end\">{{ order_product.quantity }}</td>
                    <td class=\"text-end\">{{ order_product.price }}</td>
                    <td class=\"text-end\">{{ order_product.total }}</td>
                    <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                  </tr>
                  {% set order_product_row = order_product_row + 1 %}
                {% endfor %}
              {% else %}
                <tr>
                  <td colspan=\"5\" class=\"text-center\">{{ text_no_results }}</td>
                </tr>
              {% endif %}
            </tbody>
            <tfoot>
              <tr>
                <td colspan=\"4\"></td>
                <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-product\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
              </tr>
            </tfoot>
          </table>
        </form>
        <div class=\"row\">
          <div class=\"col-md mb-3\">
            <div class=\"input-group\">
              <section id=\"section-payment-address\" class=\"form-control rounded-start\" style=\"min-height: 128px;\">
                <div class=\"lead\"><strong>{{ text_payment_address }}</strong>
                  <br/>
                  <div id=\"output-payment-address\">
                    {{ payment_firstname }} {{ payment_lastname }}
                    <br/>
                    {% if payment_company %}
                      {{ payment_company }}
                      <br/>
                    {% endif %}
                    {% if payment_address_1 %}
                      {{ payment_address_1 }}
                      <br/>
                    {% endif %}
                    {% if payment_address_2 %}
                      {{ payment_address_2 }}
                      <br/>
                    {% endif %}
                    {% if payment_city %}
                      {{ payment_city }}
                      <br/>
                    {% endif %}
                    {% if payment_postcode %}
                      {{ payment_postcode }}
                      <br/>
                    {% endif %}
                    {% if payment_zone %}
                      {{ payment_zone }}
                      <br/>
                    {% endif %}
                    {% if payment_country %}
                      {{ payment_country }}
                    {% endif %}
                  </div>
                </div>
              </section>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-payment-address\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
          <div id=\"shipping-address\" class=\"col mb-3{% if not shipping_method_code %} d-none{% endif %}\">
            <div class=\"input-group\">
              <section id=\"section-shipping-address\" class=\"form-control rounded-start\" style=\"min-height: 128px;\">
                <div class=\"lead\"><strong>{{ text_shipping_address }}</strong>
                  <br/>
                  <div id=\"output-shipping-address\">
                    {{ shipping_firstname }} {{ shipping_lastname }}
                    <br/>
                    {% if shipping_company %}
                      {{ shipping_company }}
                      <br/>
                    {% endif %}
                    {% if shipping_address_1 %}
                      {{ shipping_address_1 }}
                      <br/>
                    {% endif %}
                    {% if shipping_address_2 %}
                      {{ shipping_address_2 }}
                      <br/>
                    {% endif %}
                    {% if shipping_city %}
                      {{ shipping_city }}
                      <br/>
                    {% endif %}
                    {% if shipping_postcode %}
                      {{ shipping_postcode }}
                      <br/>
                    {% endif %}
                    {% if shipping_zone %}
                      {{ shipping_zone }}
                      <br/>
                    {% endif %}
                    {% if shipping_country %}
                      {{ shipping_country }}
                    {% endif %}
                  </div>
                </div>
              </section>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-shipping-address\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div id=\"shipping-method\" class=\"col-md mb-3{% if not shipping_method_code %} d-none{% endif %}\" style=\"min-height: 64px;\">
            <div class=\"input-group\">
              <div id=\"input-shipping-method-info\" class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                <div class=\"lead\"><strong>{{ text_shipping_method }}</strong>
                  <br/>
                  <div id=\"output-shipping-method\">{{ shipping_method_name }}</div>
                </div>
              </div>
              <button type=\"button\" id=\"button-shipping-methods\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
          <div id=\"payment-method\" class=\"col-md mb-3\">
            <div class=\"input-group\">
              <div id=\"input-payment-method-info\" class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                <div class=\"lead\"><strong>{{ text_payment_method }}</strong>
                  <br/>
                  <div id=\"output-payment-method\">{{ payment_method_name }}</div>
                </div>
              </div>
              <button type=\"button\" id=\"button-payment-methods\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
        </div>
        <div id=\"collapse-order\" class=\"collapse\">
          <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3\">
            {% for extension in extensions %}
              <div class=\"col mb-3\">{{ extension }}</div>
            {% endfor %}
            <div class=\"col mb-3\">
              <div class=\"input-group\">
                <div class=\"form-control rounded-start\">
                  <div class=\"lead p-0\"><strong>{{ text_reward }}</strong>
                    <br/>
                    <div id=\"output-point\">{{ points }}</div>
                  </div>
                </div>
                {% if not reward_total %}
                  <button type=\"button\" id=\"button-reward-add\" data-bs-toggle=\"tooltip\" title=\"{{ button_reward_add }}\" class=\"btn btn-success\"{% if not customer_id or not points %} disabled{% endif %}><i class=\"fa-solid fa-plus-circle\"></i></button>
                {% else %}
                  <button type=\"button\" id=\"button-reward-remove\" data-bs-toggle=\"tooltip\" title=\"{{ button_reward_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                {% endif %}
              </div>
            </div>
            <div class=\"col mb-3\">
              <div class=\"input-group\">
                <div id=\"input-affiliate-info\" class=\"form-control rounded-start\" style=\"min-height: 64px;\">
                  <div class=\"lead\"><strong>{{ text_affiliate }}</strong>
                    <br/>
                    <div id=\"output-affiliate\">{% if affiliate_id %}<a href=\"index.php?route=marketing/affiliate.form&user_token={{ user_token }}&customer_id={{ affiliate_id }}\" target=\"_blank\">{{ affiliate }}</a>{% endif %}</div>
                  </div>
                </div>
                <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-affiliate\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
              </div>
            </div>
            <div class=\"col mb-3\">
              <div class=\"input-group\">
                <div class=\"form-control rounded-start\">
                  <div class=\"lead\"><strong>{{ text_commission }}</strong>
                    <br/>
                    <div id=\"output-commission\">{{ commission }}</div>
                  </div>
                </div>
                {% if not commission_total %}
                  <button type=\"button\" id=\"button-commission-add\" data-bs-toggle=\"tooltip\" title=\"{{ button_commission_add }}\" class=\"btn btn-success\"{% if not affiliate_id %} disabled{% endif %}><i class=\"fa-solid fa-plus-circle\"></i></button>
                {% else %}
                  <button type=\"button\" id=\"button-commission-remove\" data-bs-toggle=\"tooltip\" title=\"{{ button_commission_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                {% endif %}
              </div>
            </div>
          </div>
        </div>
        <button type=\"button\" id=\"button-collapse\" class=\"btn btn-light btn-lg w-100 mb-3\">{{ text_more }} <i class=\"fa-solid fa-angle-down\"></i></button>
        <div class=\"row mb-3\">
          <div class=\"col\">
            <div class=\"input-group\">
              <div class=\"form-control rounded-start\" style=\"min-height: 100px;\">
                <div class=\"lead\"><strong>{{ text_comment }}</strong>
                  <br/>
                  <div id=\"output-comment\">{{ comment }}</div>
                </div>
              </div>
              <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-comment\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>
            </div>
          </div>
        </div>
        <table class=\"table table-bordered\">
          <tbody id=\"order-total\">
            {% for order_total in order_totals %}
              <tr>
                <td class=\"text-end\"><strong>{{ order_total.title }}</strong></td>
                <td class=\"text-end\" style=\"width: 1px;\">{{ order_total.text }}</td>
              </tr>
            {% endfor %}
          </tbody>
        </table>
        <div class=\"text-end\">
          <button type=\"button\" id=\"button-refresh\" data-bs-toggle=\"tooltip\" title=\"{{ button_refresh }}\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-rotate\"></i></button>
          <button type=\"button\" id=\"button-confirm\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> {{ button_confirm }}</button>
        </div>
      </div>
    </div>
    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fa-solid fa-comment\"></i> {{ text_history }}</div>
      <div class=\"card-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"nav-item\"><a href=\"#tab-history\" data-bs-toggle=\"tab\" class=\"nav-link active\">{{ tab_history }}</a></li>
          <li class=\"nav-item\"><a href=\"#tab-additional\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_additional }}</a></li>
          {% for tab in tabs %}
            <li class=\"nav-item\"><a href=\"#tab-{{ tab.code }}\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab.title }}</a></li>
          {% endfor %}
        </ul>
        <div class=\"tab-content\">
          <div id=\"tab-history\" class=\"tab-pane active\">
            <fieldset>
              <legend>{{ text_history }}</legend>
              <div id=\"history\">{{ history }}</div>
            </fieldset>
            <form id=\"form-history\">
              <fieldset>
                <legend>{{ text_history_add }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">{{ entry_order_status }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"order_status_id\" id=\"input-order-status\" class=\"form-select\">
                      {% for order_status in order_statuses %}
                        <option value=\"{{ order_status.order_status_id }}\"{% if order_status.order_status_id == order_status_id %} selected{% endif %}>{{ order_status.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-history\" class=\"col-sm-2 col-form-label\">{{ entry_comment }}</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"8\" placeholder=\"{{ entry_comment }}\" id=\"input-history\" class=\"form-control\"></textarea>
                  </div>
                </div>
                <div class=\"text-end\">
                  <button type=\"submit\" id=\"button-history\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i> {{ button_history_add }}</button>
                </div>
              </fieldset>
              <input type=\"hidden\" name=\"order_id\" value=\"{{ order_id }}\" id=\"input-order-id\"/>
            </form>
          </div>
          <div id=\"tab-additional\" class=\"tab-pane\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <th colspan=\"2\">{{ text_browser }}</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{ text_ip }}</td>
                    <td>{{ ip }}</td>
                  </tr>
                  {% if forwarded_ip %}
                    <tr>
                      <td>{{ text_forwarded_ip }}</td>
                      <td>{{ forwarded_ip }}</td>
                    </tr>
                  {% endif %}
                  <tr>
                    <td>{{ text_user_agent }}</td>
                    <td>{{ user_agent }}</td>
                  </tr>
                  <tr>
                    <td>{{ text_accept_language }}</td>
                    <td>{{ accept_language }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          {% for tab in tabs %}
            <div id=\"tab-{{ tab.code }}\" class=\"tab-pane\">{{ tab.content }}</div>
          {% endfor %}
        </div>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-customer\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">{{ text_customer }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-customer\" data-oc-target=\"#section-customer\">
          <div class=\"mb-3\">
            <label for=\"input-customer\" class=\"form-label\">{{ entry_customer }}</label>
            <div class=\"input-group\">
              <input type=\"text\" value=\"{{ firstname }} {{ lastname }}\" placeholder=\"{{ entry_customer }}\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/> <a href=\"{{ customer_add }}\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"{{ button_customer_add }}\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-user-plus\"></i></a>
            </div>
            <input type=\"hidden\" name=\"customer_id\" value=\"{{ customer_id }}\" id=\"input-customer-id\"/>
            <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-customer-group\" class=\"form-label\">{{ entry_customer_group }}</label> <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
              {% for customer_group in customer_groups %}
                <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == customer_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
              {% endfor %}
            </select>
            <div id=\"error-customer-group\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-firstname\" class=\"form-label\">{{ entry_firstname }}</label> <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\" class=\"form-control\"/>
            <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-lastname\" class=\"form-label\">{{ entry_lastname }}</label> <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-lastname\" class=\"form-control\"/>
            <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-email\" class=\"form-label\">{{ entry_email }}</label>
            <div class=\"input-group\">
              <input type=\"text\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\"/><a href=\"mailto:{{ email }}\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-envelope\"></i></a>
            </div>
            <div id=\"error-email\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3{% if config_telephone_required %} required{% endif %}\">
            <label for=\"input-telephone\" class=\"form-label\">{{ entry_telephone }}</label> <input type=\"text\" name=\"telephone\" value=\"{{ telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\"/>
            <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
          </div>

          {% for custom_field in custom_fields %}
            {% if custom_field.location == 'account' %}
              {% if custom_field.type == 'select' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <select name=\"custom_field[{{ custom_field.custom_field_id }}]\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                    <option value=\"\">{{ text_select }}</option>
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <option value=\"{{ custom_field_value.custom_field_value_id }}\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %} selected{% endif %}>{{ custom_field_value.name }}</option>
                    {% endfor %}
                  </select>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'radio' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label class=\"form-label\">{{ custom_field.name }}</label>
                  <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                      </div>
                    {% endfor %}
                  </div>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'checkbox' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label class=\"form-label\">{{ custom_field.name }}</label>
                  <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in account_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                      </div>
                    {% endfor %}
                  </div>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'text' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'textarea' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <textarea name=\"custom_field[{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'file' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label class=\"form-label\">{{ custom_field.name }}</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                    <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\"{% if not account_custom_field[custom_field.custom_field_id] %} disabled{% endif %} class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> {{ button_download }}</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"{{ button_clear }}\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\"{% if not account_custom_field[custom_field.custom_field_id] %} disabled{% endif %} class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'date' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"date\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'time' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"time\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'datetime' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"datetime-local\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ account_custom_field[custom_field.custom_field_id] ? account_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

            {% endif %}
          {% endfor %}

          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-customer\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> {{ button_continue }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-product\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">{{ text_product_add }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-product-add\">
          <div class=\"mb-3\">
            <label for=\"input-product\" class=\"form-label\">{{ entry_product }}</label> <input type=\"text\" value=\"\" placeholder=\"{{ entry_product }}\" id=\"input-product\" data-oc-target=\"autocomplete-product\" class=\"form-control\"/>
            <ul id=\"autocomplete-product\" class=\"dropdown-menu\"></ul>
            <input type=\"hidden\" name=\"product_id\" value=\"\" id=\"input-product-id\"/>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-quantity\" class=\"form-label\">{{ entry_quantity }}</label> <input type=\"text\" name=\"quantity\" placeholder=\"{{ entry_quantity }}\" value=\"1\" id=\"input-quantity\" class=\"form-control\"/>
          </div>
          <div id=\"option\"></div>
          <div id=\"subscription\"></div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-product-add\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> {{ button_continue }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-payment-address\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">{{ text_payment_address }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-payment-address\" data-oc-target=\"#section-payment-address\">
          <div class=\"mb-3\">
            <label for=\"input-payment-address\" class=\"form-label\">{{ entry_address }}</label> <select name=\"payment_address_id\" id=\"input-payment-address\" class=\"form-select\">
              <option value=\"0\" selected>{{ text_none }}</option>
              {% for address in addresses %}
                <option value=\"{{ address.address_id }}\"{% if address.address_id == payment_address_id %} selected{% endif %}>{{ address.firstname }} {{ address.lastname }},{% if address.company %} {{ address.company }},{% endif %} {{ address.address_1 }}, {{ address.city }}, {{ address.postcode }}, {{ address.zone }}, {{ address.country }}</option>
              {% endfor %}
            </select>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-firstname\" class=\"form-label\">{{ entry_firstname }}</label> <input type=\"text\" name=\"payment_firstname\" value=\"{{ payment_firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-payment-firstname\" class=\"form-control\"/>
            <div id=\"error-payment-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-lastname\" class=\"form-label\">{{ entry_lastname }}</label> <input type=\"text\" name=\"payment_lastname\" value=\"{{ payment_lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-payment-lastname\" class=\"form-control\"/>
            <div id=\"error-payment-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-company\" class=\"form-label\">{{ entry_company }}</label> <input type=\"text\" name=\"payment_company\" value=\"{{ payment_company }}\" placeholder=\"{{ entry_company }}\" id=\"input-payment-company\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-address-1\" class=\"form-label\">{{ entry_address_1 }}</label> <input type=\"text\" name=\"payment_address_1\" value=\"{{ payment_address_1 }}\" placeholder=\"{{ entry_address_1 }}\" id=\"input-payment-address-1\" class=\"form-control\"/>
            <div id=\"error-payment-address-1\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-payment-address-2\" class=\"form-label\">{{ entry_address_2 }}</label> <input type=\"text\" name=\"payment_address_2\" value=\"{{ payment_address_2 }}\" placeholder=\"{{ entry_address_2 }}\" id=\"input-payment-address-2\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-city\" class=\"form-label\">{{ entry_city }}</label> <input type=\"text\" name=\"payment_city\" value=\"{{ payment_city }}\" placeholder=\"{{ entry_city }}\" id=\"input-payment-city\" class=\"form-control\"/>
            <div id=\"error-payment-city\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-postcode\" class=\"form-label\">{{ entry_postcode }}</label> <input type=\"text\" name=\"payment_postcode\" value=\"{{ payment_postcode }}\" placeholder=\"{{ entry_postcode }}\" id=\"input-payment-postcode\" class=\"form-control\"/>
            <div id=\"error-payment-postcode\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-country\" class=\"form-label\">{{ entry_country }}</label> <select name=\"payment_country_id\" id=\"input-payment-country\" class=\"form-select\">
              <option value=\"0\">{{ text_select }}</option>
              {% for country in countries %}
                <option value=\"{{ country.country_id }}\"{% if country.country_id == payment_country_id %} selected{% endif %}>{{ country.name }}</option>
              {% endfor %}
            </select>
            <div id=\"error-payment-country\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-payment-zone\" class=\"form-label\">{{ entry_zone }}</label> <select name=\"payment_zone_id\" id=\"input-payment-zone\" class=\"form-select\">
              <option value=\"\">{{ text_select }}</option>
              {% for zone in payment_zones %}
                <option value=\"{{ zone.zone_id }}\"{% if zone.zone_id == payment_zone_id %} selected{% endif %}>{{ zone.name }}</option>
              {% endfor %}
            </select>
            <div id=\"error-payment-zone\" class=\"invalid-feedback\"></div>
          </div>
          {% for custom_field in custom_fields %}
            {% if custom_field.location == 'address' %}

              {% if custom_field.type == 'select' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <select name=\"payment_custom_field[{{ custom_field.custom_field_id }}]\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                    <option value=\"\">{{ text_select }}</option>
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <option value=\"{{ custom_field_value.custom_field_value_id }}\"{% if payment_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == payment_custom_field[custom_field.custom_field_id] %} selected{% endif %}>{{ custom_field_value.name }}</option>
                    {% endfor %}
                  </select>
                  <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'radio' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label class=\"form-label\">{{ custom_field.name }}</label>
                  <div id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"payment_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if payment_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == payment_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                      </div>
                    {% endfor %}
                  </div>
                  <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'checkbox' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label class=\"form-label\">{{ custom_field.name }}</label>
                  <div id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"payment_custom_field[{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if payment_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in payment_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                      </div>
                    {% endfor %}
                  </div>
                  <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'text' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"text\" name=\"payment_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'textarea' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <textarea name=\"payment_custom_field[{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>
                  <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'file' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label class=\"form-label\">{{ custom_field.name }}</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-target=\"#input-payment-custom-field-{{ custom_field.custom_field_id }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                    <input type=\"text\" name=\"payment_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" readonly/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-payment-custom-field-{{ custom_field.custom_field_id }}\"{% if not payment_custom_field[custom_field.custom_field_id] %} disabled{% endif %} class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> {{ button_download }}</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"{{ button_clear }}\" data-oc-target=\"#input-payment-custom-field-{{ custom_field.custom_field_id }}\"{% if not payment_custom_field[custom_field.custom_field_id] %} disabled{% endif %} class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'date' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"date\" name=\"payment_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'time' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"time\" name=\"payment_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'datetime' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"datetime-local\" name=\"payment_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ payment_custom_field[custom_field.custom_field_id] ? payment_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

            {% endif %}
          {% endfor %}
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-payment-address\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> {{ button_continue }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-shipping-address\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">{{ text_shipping_address }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-shipping-address\" data-oc-target=\"section-shipping-address\">
          <div class=\"mb-3\">
            <label for=\"input-shipping-address\" class=\"form-label\">{{ entry_address }}</label> <select name=\"shipping_address_id\" id=\"input-shipping-address\" class=\"form-select\">
              <option value=\"0\">{{ text_none }}</option>
              {% for address in addresses %}
                <option value=\"{{ address.address_id }}\"{% if address.address_id == shipping_address_id %} selected{% endif %}>{{ address.firstname }} {{ address.lastname }},{% if address.company %} {{ address.company }},{% endif %} {{ address.address_1 }}, {{ address.city }}, {{ address.postcode }}, {{ address.zone }}, {{ address.country }}</option>
              {% endfor %}
            </select>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-firstname\" class=\"form-label\">{{ entry_firstname }}</label> <input type=\"text\" name=\"shipping_firstname\" value=\"{{ shipping_firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-shipping-firstname\" class=\"form-control\"/>
            <div id=\"error-shipping-firstname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-lastname\" class=\"form-label\">{{ entry_lastname }}</label> <input type=\"text\" name=\"shipping_lastname\" value=\"{{ shipping_lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-shipping-lastname\" class=\"form-control\"/>
            <div id=\"error-shipping-lastname\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-shipping-company\" class=\"form-label\">{{ entry_company }}</label> <input type=\"text\" name=\"shipping_company\" value=\"{{ shipping_company }}\" placeholder=\"{{ entry_company }}\" id=\"input-shipping-company\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-address-1\" class=\"form-label\">{{ entry_address_1 }}</label> <input type=\"text\" name=\"shipping_address_1\" value=\"{{ shipping_address_1 }}\" placeholder=\"{{ entry_address_1 }}\" id=\"input-shipping-address-1\" class=\"form-control\"/>
            <div id=\"error-shipping-address-1\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3\">
            <label for=\"input-shipping-address-2\" class=\"form-label\">{{ entry_address_2 }}</label> <input type=\"text\" name=\"shipping_address_2\" value=\"{{ shipping_address_2 }}\" placeholder=\"{{ entry_address_2 }}\" id=\"input-shipping-address-2\" class=\"form-control\"/>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-city\" class=\"form-label\">{{ entry_city }}</label> <input type=\"text\" name=\"shipping_city\" value=\"{{ shipping_city }}\" placeholder=\"{{ entry_city }}\" id=\"input-shipping-city\" class=\"form-control\"/>
            <div id=\"error-shipping-city\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-postcode\" class=\"form-label\">{{ entry_postcode }}</label> <input type=\"text\" name=\"shipping_postcode\" value=\"{{ shipping_postcode }}\" placeholder=\"{{ entry_postcode }}\" id=\"input-shipping-postcode\" class=\"form-control\"/>
            <div id=\"error-shipping-postcode\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-country\" class=\"form-label\">{{ entry_country }}</label> <select name=\"shipping_country_id\" id=\"input-shipping-country\" class=\"form-select\">
              <option value=\"0\">{{ text_select }}</option>
              {% for country in countries %}
                <option value=\"{{ country.country_id }}\"{% if country.country_id == shipping_country_id %} selected{% endif %}>{{ country.name }}</option>
              {% endfor %}
            </select>
            <div id=\"error-shipping-country\" class=\"invalid-feedback\"></div>
          </div>
          <div class=\"mb-3 required\">
            <label for=\"input-shipping-zone\" class=\"form-label\">{{ entry_zone }}</label> <select name=\"shipping_zone_id\" id=\"input-shipping-zone\" class=\"form-select\">
              <option value=\"\">{{ text_select }}</option>
              {% for zone in shipping_zones %}
                <option value=\"{{ zone.zone_id }}\"{% if zone.zone_id == shipping_zone_id %} selected{% endif %}>{{ zone.name }}</option>
              {% endfor %}
            </select>
            <div id=\"error-shipping-zone\" class=\"invalid-feedback\"></div>
          </div>
          {% for custom_field in custom_fields %}
            {% if custom_field.location == 'address' %}

              {% if custom_field.type == 'select' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <select name=\"shipping_custom_field[{{ custom_field.custom_field_id }}]\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                    <option value=\"\">{{ text_select }}</option>
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <option value=\"{{ custom_field_value.custom_field_value_id }}\"{% if shipping_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == shipping_custom_field[custom_field.custom_field_id] %} selected{% endif %}>{{ custom_field_value.name }}</option>
                    {% endfor %}
                  </select>
                  <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'radio' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label class=\"form-label\">{{ custom_field.name }}</label>
                  <div id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"shipping_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-shipping-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if shipping_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == shipping_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-shipping-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                      </div>
                    {% endfor %}
                  </div>
                  <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'checkbox' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label class=\"form-label\">{{ custom_field.name }}</label>
                  <div id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                    {% for custom_field_value in custom_field.custom_field_value %}
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"shipping_custom_field[{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-shipping-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if shipping_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in shipping_custom_field[custom_field.custom_field_id] %} checked{% endif %}/> <label for=\"input-shipping-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                      </div>
                    {% endfor %}
                  </div>
                  <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'text' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"text\" name=\"shipping_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ shipping_custom_field[custom_field.custom_field_id] ? shipping_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'textarea' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <textarea name=\"shipping_custom_field[{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" placeholder=\"{{ custom_field.name }}\" class=\"form-control\">{{ shipping_custom_field[custom_field.custom_field_id] ? shipping_custom_field[custom_field.custom_field_id] : custom_field.value }}</textarea>
                  <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'file' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label class=\"form-label\">{{ custom_field.name }}</label>
                  <div class=\"input-group\">
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-target=\"#input-shipping-custom-field-{{ custom_field.custom_field_id }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                    <input type=\"text\" name=\"shipping_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ shipping_custom_field[custom_field.custom_field_id] ? shipping_custom_field[custom_field.custom_field_id] }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\" readonly/>
                    <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-shipping-custom-field-{{ custom_field.custom_field_id }}\"{% if not shipping_custom_field[custom_field.custom_field_id] %} disabled{% endif %} class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> {{ button_download }}</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"{{ button_clear }}\" data-oc-target=\"#input-shipping-custom-field-{{ custom_field.custom_field_id }}\"{% if not shipping_custom_field[custom_field.custom_field_id] %} disabled{% endif %} class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                  </div>
                  <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'date' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"date\" name=\"shipping_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ shipping_custom_field[custom_field.custom_field_id] ? shipping_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'time' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"time\" name=\"shipping_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ shipping_custom_field[custom_field.custom_field_id] ? shipping_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

              {% if custom_field.type == 'datetime' %}
                <div class=\"mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                  <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label> <input type=\"datetime-local\" name=\"shipping_custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ shipping_custom_field[custom_field.custom_field_id] ? shipping_custom_field[custom_field.custom_field_id] : custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                  <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endif %}

            {% endif %}
          {% endfor %}
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-shipping-address\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> {{ button_continue }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-shipping-method\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"><i class=\"fa fa-truck\"></i> {{ text_shipping_method }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <p>{{ text_shipping }}</p>
        <div id=\"shipping-methods\"></div>
        <form id=\"form-shipping-method\" data-oc-target=\"#section-shipping-method\">
          <input type=\"hidden\" name=\"shipping_method[name]\" value=\"{{ shipping_method_name }}\" id=\"input-shipping-method-name\"/> <input type=\"hidden\" name=\"shipping_method[code]\" value=\"{{ shipping_method_code }}\" id=\"input-shipping-method-code\"/> <input type=\"hidden\" name=\"shipping_method[cost]\" value=\"{{ shipping_method_cost }}\" id=\"input-shipping-method-cost\"/> <input type=\"hidden\" name=\"shipping_method[tax_class_id]\" value=\"{{ shipping_method_tax_class_id }}\" id=\"input-shipping-method-tax-class\"/>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-shipping-method\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> {{ button_continue }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-payment-method\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\"><i class=\"fa fa-credit-card\"></i> {{ text_payment_method }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <p>{{ text_payment }}</p>
        <div id=\"payment-methods\"></div>
        <form id=\"form-payment-method\" data-oc-target=\"#section-payment-method\">
          <input type=\"hidden\" name=\"payment_method[name]\" value=\"{{ payment_method_name }}\" id=\"input-payment-method-name\"/> <input type=\"hidden\" name=\"payment_method[code]\" value=\"{{ payment_method_code }}\" id=\"input-payment-method-code\"/>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-payment-method\" class=\"btn btn-primary\">{{ button_continue }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-affiliate\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">{{ text_affiliate }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-affiliate\" data-oc-target=\"#section-affiliate\">
          <div class=\"mb-3\">
            <label for=\"input-affiliate\" class=\"form-label\">{{ entry_affiliate }}</label> <input type=\"hidden\" name=\"affiliate_id\" value=\"{{ affiliate_id }}\" id=\"input-affiliate-id\"/> <input type=\"text\" name=\"affiliate\" value=\"{{ affiliate }}\" placeholder=\"{{ entry_affiliate }}\" id=\"input-affiliate\" data-oc-target=\"autocomplete-affiliate\" class=\"form-control\" autocomplete=\"off\"/>
            <ul id=\"autocomplete-affiliate\" class=\"dropdown-menu\"></ul>
          </div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-affiliate\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> {{ button_continue }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id=\"modal-comment\" class=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">{{ text_comment }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\">
        <form id=\"form-comment\" data-oc-target=\"#section-comment\">
          <div class=\"mb-3\">
            <textarea name=\"comment\" rows=\"5\" placeholder=\"{{ entry_comment }}\" id=\"input-comment\" class=\"form-control\">{{ comment }}</textarea>
          </div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-comment\" class=\"btn btn-primary\"><i class=\"fa-solid fa-check\"></i> {{ button_continue }}</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script type=\"text/javascript\"><!--
\$('#button-collapse').on('click', function() {
    var element = this;

    var target = \$('#collapse-order');

    if (!target.is(':hidden')) {
        target.slideUp('400', function() {
            \$(element).html('{{ text_more }} <i class=\"fa-solid fa-angle-down\"></i>');
        });
    } else {
        target.slideDown('400', function() {
            \$(element).html('{{ text_less }} <i class=\"fa-solid fa-angle-up\"></i>');
        });
    }
});

\$(document).on('click', '#button-invoice', function() {
    \$.ajax({
        url: 'index.php?route=sale/order.createInvoiceNo&user_token={{ user_token }}&order_id=' + \$('#input-order-id').val(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-invoice').button('loading');
        },
        complete: function() {
            \$('#button-invoice').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#output-invoice').html(json['invoice_no']);

                \$('#button-invoice').replaceWith('<button disabled=\"disabled\" class=\"btn btn-outline-primary\"><i class=\"fa-solid fa-cog\"></i></button>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Customer
\$('#input-customer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    customer_id: 0,
                    customer_group_id: {{ customer_group_id }},
                    name: '{{ text_none }}',
                    customer_group: '',
                    firstname: '',
                    lastname: '',
                    email: '',
                    telephone: '',
                    custom_field: [],
                    address: []
                });

                response(\$.map(json, function(item) {
                    return {
                        category: item['customer_group'],
                        label: item['name'],
                        value: item['customer_id'],
                        customer_group_id: item['customer_group_id'],
                        firstname: item['firstname'],
                        lastname: item['lastname'],
                        email: item['email'],
                        telephone: item['telephone'],
                        custom_field: item['custom_field'],
                        address: item['address']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        // Reset all custom fields
        \$('#form-customer input[type=\\'text\\'], #form-customer textarea').not('#input-customer, #input-customer-id').val('');
        \$('#form-customer select option').removeAttr('selected');
        \$('#form-customer input[type=\\'checkbox\\'], #form-customer input[type=\\'radio\\']').removeAttr('checked');

        \$('#input-customer-id').val(item['value']);
        \$('#input-customer-group').val(item['customer_group_id']);
        \$('#input-firstname').val(decodeHTMLEntities(item['firstname']));
        \$('#input-lastname').val(decodeHTMLEntities(item['lastname']));
        \$('#input-email').val(decodeHTMLEntities(item['email']));
        \$('#input-telephone').val(item['telephone']);

        for (i in item.custom_field) {
            \$('#input-custom-field-' + i).val(item.custom_field[i]);

            if (item.custom_field[i] instanceof Array) {
                for (j = 0; j < item.custom_field[i].length; j++) {
                    \$('#input-custom-field-value-' + item.custom_field[i][j]).prop('checked', true);
                }
            }
        }

        \$('#input-customer-group').trigger('change');

        html = '<option value=\"0\">{{ text_none|escape('js') }}</option>';

        for (i in item['address']) {
            html += '<option value=\"' + item['address'][i]['address_id'] + '\">' + decodeHTMLEntities(item['address'][i]['firstname']) + ' ' + decodeHTMLEntities(item['address'][i]['lastname']) + ', ' + (item['address'][i]['company'] ? decodeHTMLEntities(item['address'][i]['company']) + ', ' : '') + decodeHTMLEntities(item['address'][i]['address_1']) + ', ' + decodeHTMLEntities(item['address'][i]['city']) + ', ' + decodeHTMLEntities(item['address'][i]['country']) + '</option>';
        }

        \$('#input-payment-address').html(html);
        \$('#input-shipping-address').html(html);
    }
});

// Custom Fields
\$('#input-customer-group').on('change', function() {
    \$.ajax({
        url: 'index.php?route=customer/customer.customfield&user_token={{ user_token }}&customer_group_id=' + this.value,
        dataType: 'json',
        success: function(json) {
            \$('.custom-field').hide();
            \$('.custom-field').removeClass('required');

            for (i = 0; i < json.length; i++) {
                custom_field = json[i];

                \$('.custom-field-' + custom_field['custom_field_id']).show();

                if (custom_field['required']) {
                    \$('.custom-field-' + custom_field['custom_field_id']).addClass('required');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-customer').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=customer&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-customer').button('loading');
        },
        complete: function() {
            \$('#button-customer').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#form-customer').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#form-customer').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-customer').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#output-customer').html('<a href=\"index.php?route=customer/customer.form&user_token={{ user_token }}&customer_id=' + \$('#input-customer-id').val() + '\" target=\"_blank\">' + \$('#input-firstname').val() + ' ' + \$('#input-lastname').val() + '</a>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').trigger('change');

\$('#input-store, #input-language, #input-currency').on('change', function(e) {
    \$('#button-refresh').trigger('click');
});

// Product
\$('#input-product').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id'],
                        option: item['option'],
                        subscription: item['subscription'],
                        price: item['price']
                    }
                }));
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    },
    'select': function(item) {
        \$('#input-product-id').val(item['value']);
        \$('#input-product').val(decodeHTMLEntities(item['label']));

        if (item['option'] != '') {
            html = '<fieldset class=\"mb-0\">';
            html += '  <legend>{{ entry_option|escape('js') }}</legend>';

            for (i = 0; i < item['option'].length; i++) {
                option = item['option'][i];

                if (option['type'] == 'select') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <select ' + (option['disabled'] ? 'disabled' : '') + ' name=\"option[' + option['product_option_id'] + ']\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-select\">';
                    html += '    <option value=\"\">{{ text_select|escape('js') }}</option>';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<option ' + (option['value'] == option_value['product_option_value_id'] ? 'selected=\"selected\"' : '') + ' value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                        }

                        html += '</option>';
                    }

                    html += '  </select>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'radio') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <select ' + (option['disabled'] ? 'disabled' : '') + ' name=\"option[' + option['product_option_id'] + ']\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-select\">';
                    html += '    <option value=\"\">{{ text_select|escape('js') }}</option>';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];

                        html += '<option ' + (option['value'] == option_value['product_option_value_id'] ? 'selected=\"selected\"' : '') + ' value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                        }

                        html += '</option>';
                    }

                    html += '  </select>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'checkbox') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <div id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\">';

                    for (j = 0; j < option['product_option_value'].length; j++) {
                        option_value = option['product_option_value'][j];
                        checked = Array.isArray(option['value']) ? option['value'].includes(option_value['product_option_value_id']) : false;

                        html += '<div class=\"form-check\">';
                        html += '  <input ' + (option['disabled'] ? 'disabled ' : '') + (checked ? 'checked' : '') + ' type=\"checkbox\" name=\"option[' + option['product_option_id'] + '][]\" value=\"' + option_value['product_option_value_id'] + '\" id=\"input-option-value-' + option_value['product_option_value_id'] + '\" class=\"form-check-input\"/>';
                        html += '  <label for=\"input-option-value-' + option_value['product_option_value_id'] + '\" class=\"form-check-label\">' + option_value['name'];

                        if (option_value['price']) {
                            html += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
                        }

                        html += '  </label>';
                        html += '</div>';
                    }

                    html += '  </div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'text') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <input ' + (option['disabled'] ? 'disabled' : '') + ' type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\"/>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'textarea') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <textarea ' + (option['disabled'] ? 'disabled' : '') + ' name=\"option[' + option['product_option_id'] + ']\" rows=\"5\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\">' + option['value'] + '</textarea>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'file') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <div>';
                    html += '    <button ' + (option['disabled'] ? 'disabled' : '') + ' type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-target=\"#input-option-' + option['product_option_id'] + '\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size|escape('js') }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload|escape('js') }}</button>';
                    html += '    <a href=\"\" class=\"btn btn-light\"><i class=\"fa-solid fa-download\"></i></a>';
                    html += '    <input type=\"hidden\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" id=\"input-option-' + option['product_option_id'] + '\"/>';
                    html += '  </div>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'date') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <input ' + (option['disabled'] ? 'disabled' : '') + ' type=\"date\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\"/>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'time') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <input ' + (option['disabled'] ? 'disabled' : '') + ' type=\"time\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\"/>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }

                if (option['type'] == 'datetime') {
                    html += '<div class=\"mb-3' + (option['required'] == 1 ? ' required' : '') + '\">';
                    html += '  <label for=\"input-option-' + option['product_option_id'] + '\" class=\"form-label\">' + option['name'] + '</label>';
                    html += '  <input ' + (option['disabled'] ? 'disabled' : '') + ' type=\"datetime-local\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" id=\"input-option-' + option['product_option_id'] + '\" class=\"form-control\"/>';
                    html += '  <div id=\"error-option-' + option['product_option_id'] + '\" class=\"invalid-feedback\"></div>';
                    html += '</div>';
                }
            }

            html += '</fieldset>';

            \$('#option').html(html);
        } else {
            \$('#option').html('');
        }

        if (item['subscription'] != '') {
            html = '<fieldset class=\"mb-0\">';
            html += '  <legend>{{ entry_subscription|escape('js') }}</legend>';
            html += '  <div class=\"mb-3 required\">';
            html += '    <select name=\"subscription_plan_id\" id=\"input-subscription-plan\" class=\"form-select\">';
            html += '      <option value=\"\">{{ text_select|escape('js') }}</option>';

            for (i = 0; i < item['subscription'].length; i++) {
                if (item['subscription'][i]['customer_group_id'] == \$('#input-customer-group').val()) {
                    html += '<option value=\"' + item['subscription'][i]['subscription_plan_id'] + '\">' + item['subscription'][i]['name'] + '</option>';
                }
            }

            html += '  </select>';

            for (i = 0; i < item['subscription'].length; i++) {
                html += '<div id=\"subscription-description-' + item['subscription'][i]['subscription_plan_id'] + '-' + item['subscription'][i]['customer_group_id'] + '\" class=\"form-text subscription-description d-none\">' + item['subscription'][i]['description'] + '</div>';
            }

            html += '<div id=\"error-subscription\" class=\"invalid-feedback\"></div>';

            elements = \$('#input-customer-group option');

            for (i = 0; i < elements.length; i++) {
                html += '<datalist id=\"subscription-plan-' + \$(elements[i]).val() + '\">';
                html += '  <option value=\"\">{{ text_select|escape('js') }}</option>';

                for (j = 0; j < item['subscription'].length; j++) {
                    if (item['subscription'][j]['customer_group_id'] == \$(elements[i]).val()) {
                        html += '<option value=\"' + item['subscription'][i]['subscription_plan_id'] + '\">' + item['subscription'][i]['name'] + '</option>';
                    }
                }

                html += '</datalist>';
            }

            html += '  </div>';
            html += '</fieldset>';

            \$('#subscription').html(html);
        } else {
            \$('#subscription').html('');
        }
    }
});

\$('#form-product-add').on('change', '#input-subscription-plan', function(e) {
    var element = this;

    \$('.subscription-description').addClass('d-none');

    \$('#subscription-description-' + \$(element).val() + '-' + \$('#input-customer-group').val()).removeClass('d-none');
});

\$('#input-customer-group').on('change', function(e) {
    \$('#input-subscription-plan').html(\$('#subscription-plan-' + this.value).html());

    // Change subscription description
    \$('#input-subscription-plan').trigger('click');
});

\$('#form-product-add').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=product_add&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-product-add, #form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form, #input-order-id').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-product-add').button('loading');
        },
        complete: function() {
            \$('#button-product-add').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#form-product-add').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#form-product-add').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-product-add').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).on('hidden.bs.modal', '#modal-product', function () {
    // Restores form and clears dynamic injections whenever modal closes
    \$('#form-product-add')[0].reset();
    \$('#form-product-add > .alert').remove();
    \$('#autocomplete-product').empty();
    \$('#option').empty();
    \$('#subscription').empty();
});

// Remove product
\$('#order-product').on('click', 'button', function(e) {
    \$(this).parent().parent().remove();

    // Refresh products and totals
    \$('#button-refresh').trigger('click');
});

// Payment Address
\$('#input-payment-address').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/address.address&user_token={{ user_token }}&address_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-payment-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            // Reset all fields
            \$('#form-payment-address input[type=\\'text\\'], #form-payment-address textarea').val('');
            \$('#form-payment-address select option').not('#input-payment-address').removeAttr('selected');
            \$('#form-payment-address input[type=\\'checkbox\\'], #form-payment-address input[type=\\'radio\\']').removeAttr('checked');

            \$('#input-payment-firstname').val(json['firstname']);
            \$('#input-payment-lastname').val(json['lastname']);
            \$('#input-payment-company').val(json['company']);
            \$('#input-payment-address-1').val(json['address_1']);
            \$('#input-payment-address-2').val(json['address_2']);
            \$('#input-payment-city').val(json['city']);
            \$('#input-payment-postcode').val(json['postcode']);
            \$('#input-payment-country').val(json['country_id']);

            payment_zone_id = json['zone_id'];

            \$('#input-payment-country').trigger('change');

            for (i in json['custom_field']) {
                \$('#input-payment-custom-field-' + i).val(json['custom_field'][i]);

                if (json['custom_field'][i] instanceof Array) {
                    for (j = 0; j < json['custom_field'][i].length; j++) {
                        \$('#input-payment-custom-field-value-' + item.custom_field[i][j]).prop('checked', true);
                    }
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-payment-address').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=payment_address&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-payment-address').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-payment-address').button('loading');
        },
        complete: function() {
            \$('#button-payment-address').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#form-payment-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#form-payment-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-payment-address').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                var address = \$('#input-payment-firstname').val() + ' ' + \$('#input-payment-lastname').val() + '<br/>';

                var company = \$('#input-payment-company').val();

                if (company) {
                    address += \$('#input-payment-company').val() + '<br/>';
                }

                address += \$('#input-payment-address-1').val() + '<br/>';

                var address_2 = \$('#input-payment-address-2').val();

                if (address_2) {
                    address += \$('#input-payment-address-2').val() + '<br/>';
                }

                address += \$('#input-payment-city').val() + '<br/>';

                var postcode = \$('#input-payment-postcode').val();

                if (postcode) {
                    address += postcode + '<br/>';
                }

                address += \$('#input-payment-zone option:selected').text() + '<br/>';
                address += \$('#input-payment-country option:selected').text();

                \$('#output-payment-address').html(address);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

var payment_zone_id = {{ payment_zone_id }};

\$('#input-payment-country').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country.country&user_token={{ user_token }}&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
            \$('#button-payment-address').prop('disabled', true);
            \$('#button-confirm').prop('disabled', true);
            \$('#button-refresh').prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
            \$('#button-payment-address').prop('disabled', false);
            \$('#button-confirm').prop('disabled', false);
            \$('#button-refresh').prop('disabled', false);
        },
        success: function(json) {
            if (json['postcode_required'] == '1') {
                \$('#input-payment-postcode').parent().addClass('required');
            } else {
                \$('#input-payment-postcode').parent().removeClass('required');
            }

            html = '<option value=\"\">{{ text_select|escape('js') }}</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == payment_zone_id) {
                        html += ' selected';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected>{{ text_none|escape('js') }}</option>';
            }

            \$('#input-payment-zone').html(html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Shipping Address
\$('#input-shipping-address').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=customer/address.address&user_token={{ user_token }}&address_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-shipping-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            // Reset all fields
            \$('#form-shipping-address input[type=\\'text\\'], #form-shipping-address input[type=\\'text\\'], #form-shipping-address textarea').val('');
            \$('#form-shipping-address select option').not('#input-shipping-address').removeAttr('selected');
            \$('#form-shipping-address input[type=\\'checkbox\\'], #form-shipping-address input[type=\\'radio\\']').removeAttr('checked');

            \$('#input-shipping-firstname').val(json['firstname']);
            \$('#input-shipping-lastname').val(json['lastname']);
            \$('#input-shipping-company').val(json['company']);
            \$('#input-shipping-address-1').val(json['address_1']);
            \$('#input-shipping-address-2').val(json['address_2']);
            \$('#input-shipping-city').val(json['city']);
            \$('#input-shipping-postcode').val(json['postcode']);
            \$('#input-shipping-country').val(json['country_id']);

            shipping_zone_id = json['zone_id'];

            \$('#input-shipping-country').trigger('change');

            for (i in json['custom_field']) {
                \$('#input-shipping-custom-field-' + i).val(json['custom_field'][i]);

                if (json['custom_field'][i] instanceof Array) {
                    for (j = 0; j < json['custom_field'][i].length; j++) {
                        \$('#input-shipping-custom-field-value-' + json['custom_field'][i][j]).prop('checked', true);
                    }
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-shipping-address').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=shipping_address&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-cart, #form-shipping-address').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-shipping-address').button('loading');
        },
        complete: function() {
            \$('#button-shipping-address').button('reset');
        },
        success: function(json) {
            \$('#form-shipping-address .alert-dismissible').remove();
            \$('#form-shipping-address .is-invalid').removeClass('is-invalid');
            \$('#form-shipping-address .invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#form-shipping-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#form-shipping-address').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#form-shipping-address').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                var address = \$('#input-shipping-firstname').val() + ' ' + \$('#input-shipping-lastname').val() + '<br/>';

                var company = \$('#input-shipping-company').val();

                if (company) {
                    address += \$('#input-shipping-company').val() + '<br/>';
                }

                address += \$('#input-shipping-address-1').val() + '<br/>';

                var address_2 = \$('#input-shipping-address-2').val();

                if (address_2) {
                    address += \$('#input-shipping-address-2').val() + '<br/>';
                }

                address += \$('#input-shipping-city').val() + '<br/>';

                var postcode = \$('#input-shipping-postcode').val();

                if (postcode) {
                    address += postcode + '<br/>';
                }

                address += \$('#input-shipping-zone option:selected').text() + '<br/>';
                address += \$('#input-shipping-country option:selected').text();

                \$('#output-shipping-address').html(address);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

var shipping_zone_id = {{ shipping_zone_id }};

\$('#input-shipping-country').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country.country&user_token={{ user_token }}&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
            \$('#button-shipping-address').prop('disabled', true);
            \$('#button-confirm').prop('disabled', true);
            \$('#button-refresh').prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
            \$('#button-shipping-address').prop('disabled', false);
            \$('#button-confirm').prop('disabled', false);
            \$('#button-refresh').prop('disabled', false);
        },
        success: function(json) {
            if (json['postcode_required'] == '1') {
                \$('#input-shipping-postcode').parent().addClass('required');
            } else {
                \$('#input-shipping-postcode').parent().removeClass('required');
            }

            html = '<option value=\"\">{{ text_select|escape('js') }}</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == shipping_zone_id) {
                        html += ' selected';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected>{{ text_none|escape('js') }}</option>';
            }

            \$('#input-shipping-zone').html(html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Shipping Method
var shipping_method = [];

\$('#button-shipping-methods').on('click', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=shipping_methods&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            html = '';

            if (json['shipping_methods']) {
                var k = 0;

                for (i in json['shipping_methods']) {
                    html += '<p><strong>' + json['shipping_methods'][i]['name'] + '</strong></p>';

                    if (!json['shipping_methods'][i]['error']) {
                        for (j in json['shipping_methods'][i]['quote']) {
                            shipping_method[json['shipping_methods'][i]['quote'][j]['code']] = json['shipping_methods'][i]['quote'][j];

                            html += '<div class=\"form-check\">';
                            html += '  <input type=\"radio\" name=\"choose_shipping\" value=\"' + json['shipping_methods'][i]['quote'][j]['code'] + '\" id=\"input-shipping-method-' + k + '\"';

                            if (json['shipping_methods'][i]['quote'][j]['code'] == \$('#input-shipping-method-code').val()) {
                                html += ' checked';
                            }

                            html += '/>';

                            html += '  <label for=\"input-shipping-method-' + k + '\">' + json['shipping_methods'][i]['quote'][j]['name'] + ' - ' + json['shipping_methods'][i]['quote'][j]['text'] + '</label>';
                            html += '</div>';

                            k++;
                        }
                    } else {
                        html += '<div class=\"alert alert-danger\">' + json['shipping_methods'][i]['error'] + '</div>';
                    }
                }

                \$('#shipping-methods').html(html);

                \$('#modal-shipping-method').modal('show');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#modal-shipping-method').on('change', 'input[name=\\'choose_shipping\\']', function() {
    var code = \$(this).val();

    if (shipping_method[code]) {
        \$('#input-shipping-method-name').val(shipping_method[code]['name']);
        \$('#input-shipping-method-code').val(shipping_method[code]['code']);
        \$('#input-shipping-method-cost').val(shipping_method[code]['cost']);
        \$('#input-shipping-method-tax-class').val(shipping_method[code]['tax_class_id']);
    }
});

\$('#form-shipping-method').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=shipping_method&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-shipping-method').button('loading');
        },
        complete: function() {
            \$('#button-shipping-method').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            if (typeof json['error'] == 'string') {
                \$('#modal-shipping-method .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#modal-shipping-method .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#modal-shipping-method .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#output-shipping-method').html(\$('#input-shipping-method-name').val());

                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Payment Method
var payment_method = [];

\$('#button-payment-methods').on('click', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=payment_methods&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (typeof json['error'] == 'string') {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            var html = '';

            if (json['payment_methods']) {
                var k = 0;

                for (i in json['payment_methods']) {
                    html += '<p><strong>' + json['payment_methods'][i]['name'] + '</strong></p>';

                    if (!json['payment_methods'][i]['error']) {
                        for (j in json['payment_methods'][i]['option']) {
                            payment_method[json['payment_methods'][i]['option'][j]['code']] = json['payment_methods'][i]['option'][j];

                            html += '<div class=\"form-check\">';
                            html += '  <input type=\"radio\" name=\"choose_payment\" value=\"' + json['payment_methods'][i]['option'][j]['code'] + '\" id=\"input-payment-method-' + k + '\"';

                            if (json['payment_methods'][i]['option'][j]['code'] == \$('#input-payment-method-code').val()) {
                                html += ' checked';
                            }

                            html += '/>';
                            html += '  <label for=\"input-payment-method-' + k + '\">' + json['payment_methods'][i]['option'][j]['name'] + '</label>';
                            html += '</div>';

                            k++;
                        }
                    } else {
                        html += '<div class=\"alert alert-danger\">' + json['payment_methods'][i]['error'] + '</div>';
                    }
                }

                \$('#payment-methods').html(html);

                \$('#modal-payment-method').modal('show');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#modal-payment-method').on('change', 'input[name=\\'choose_payment\\']', function() {
    var code = \$(this).val();

    if (payment_method[code]) {
        \$('#input-payment-method-name').val(payment_method[code]['name']);
        \$('#input-payment-method-code').val(payment_method[code]['code']);
    }
});

\$('#form-payment-method').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=payment_method&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-payment-method').button('loading');
        },
        complete: function() {
            \$('#button-payment-method').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (typeof json['error'] == 'string') {
                \$('#modal-payment-method .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['warning']) {
                    \$('#modal-payment-method .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#modal-payment-method .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#output-payment-method').html(\$('#input-payment-method-name').val());

                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#form-comment').on('submit', function(e) {
    e.preventDefault();

    \$('#output-comment').html(\$('#input-comment').val().replace(/<[^>]*>?/gm, '').replace(/(?:\\r\\n|\\r|\\n)/g, '<br/>'));
});

\$('#button-refresh').on('click', function() {
    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=cart&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form, #input-order-id').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-refresh').button('loading');
        },
        complete: function() {
            \$('#button-refresh').button('reset');
        },
        success: function(json) {
            if (json['error']) {
                if (typeof json['error'] == 'string') {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#button-confirm').on('click', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=confirm&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-customer, #form-cart, #form-shipping-address, #form-shipping-method, #form-payment-address, #form-payment-method, #collapse-order form, #form-comment, #input-order-id').serialize(),
        dataType: 'json',
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();
            \$('.is-invalid').removeClass('is-invalid');
            \$('.invalid-feedback').removeClass('d-block');

            // Check for errors
            if (typeof json['error'] == 'string') {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (typeof json['error'] == 'object') {
                if (json['error']['shipping_method']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['shipping_method'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#input-shipping-method-info').addClass('is-invalid');

                    delete json['error']['shipping_method'];
                }

                if (json['error']['payment_method']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['payment_method'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#input-payment-method-info').addClass('is-invalid');

                    delete json['error']['payment_method'];
                }

                for (key in json['error']) {
                    \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                    \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }

                // Highlight any invalid fields
                \$('.is-invalid').parents('form').each(function(index, element) {
                    \$(\$(element).attr('data-oc-target')).addClass('is-invalid');
                });
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (json['order_id']) {
                    \$('#input-order-id').val(json['order_id']);
                }

                if (json['points']) {
                    \$('#output-point').html(json['points']);
                    \$('#button-reward-add').prop('disabled', false);
                    \$('#button-reward-remove').prop('disabled', false);
                } else {
                    \$('#output-point').html(0);
                    \$('#button-reward-add').prop('disabled', true);
                    \$('#button-reward-remove').prop('disabled', true);
                }

                if (json['commission']) {
                    \$('#output-commission').html(json['commission']);
                    \$('#button-commission-add').prop('disabled', false);
                    \$('#button-commission-remove').prop('disabled', false);
                } else {
                    \$('#output-commission').html('&nbsp;');
                    \$('#button-commission-add').prop('disabled', true);
                    \$('#button-commission-remove').prop('disabled', true);
                }

                cart_render(json['products'], json['totals'], json['shipping_required']);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Refresh all products and totals
var order_product_row = {{ order_product_row }};

function cart_render(products, totals, shipping_required) {
    html = '';

    if (products) {
        for (i in products) {
            product = products[i];

            html += '<tr>';
            html += '  <td><a href=\"index.php?route=catalog/product.form&user_token={{ user_token }}&product_id=' + product['product_id'] + '\" target=\"_blank\">' + product['name'] + '</a>' + (!product['stock'] ? ' <span class=\"text-danger\">***</span>' : '');
            html += '    <div id=\"error-product-' + order_product_row + '-product\" class=\"invalid-feedback mt-0\"></div>';

            html += '<ul class=\"list-unstyled mb-0\">';

            html += '<li>';
            html += '  <small> - {{ text_model|escape('js') }}: ' + product['model'] + '</small>';
            html += '</li>';

            for (j = 0; j < product['option'].length; j++) {
                option = product['option'][j];

                html += '<li>';
                html += '  <small> - ' + option['name'] + ': ' + option['value'] + '</small>';
                html += '  <div id=\"error-product-' + order_product_row + '-option-' + option['product_option_id'] + '\" class=\"invalid-feedback mt-0\"></div>';
                html += '</li>';
            }

            if (product['subscription']) {
                html += '<li>';
                html += '  <small> - {{ text_subscription|escape('js') }}: ' + product['subscription'] + '</small>';
                html += '  <div id=\"error-product-' + order_product_row + '-subscription\" class=\"invalid-feedback mt-0\"></div>';
                html += '</li>';
            }

            if (product['reward']) {
                html += '<li>';
                html += '  <small> - {{ text_points|escape('js') }}: ' + product['reward'] + '</small>';
                html += '</li>';
            }

            html += '</ul>';

            html += '<input type=\"hidden\" name=\"product[' + order_product_row + '][product_id]\" value=\"' + product['product_id'] + '\"/>';
            html += '<input type=\"hidden\" name=\"product[' + order_product_row + '][quantity]\" value=\"' + product['quantity'] + '\"/>';

            for (j = 0; j < product['option'].length; j++) {
                option = product['option'][j];

                if (option['type'] == 'select' || option['type'] == 'radio') {
                    html += '<input type=\"hidden\" name=\"product[' + order_product_row + '][option][' + option['product_option_id'] + ']\" value=\"' + option['product_option_value_id'] + '\"/>';
                }

                if (option['type'] == 'checkbox') {
                    html += '<input type=\"hidden\" name=\"product[' + order_product_row + '][option][' + option['product_option_id'] + '][]\" value=\"' + option['product_option_value_id'] + '\"/>';
                }

                if (option['type'] == 'text' || option['type'] == 'textarea' || option['type'] == 'file' || option['type'] == 'date' || option['type'] == 'datetime' || option['type'] == 'time') {
                    html += '<input type=\"hidden\" name=\"product[' + order_product_row + '][option][' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\"/>';
                }
            }

            html += '    <input type=\"hidden\" name=\"product[' + order_product_row + '][subscription_plan_id]\" value=\"' + product['subscription_plan_id'] + '\"/>';
            html += '  </td>';
            html += '  <td class=\"text-end\">' + product['quantity'] + '</td>';
            html += '  <td class=\"text-end\">' + product['price_text'] + '</td>';
            html += '  <td class=\"text-end\">' + product['total_text'] + '</td>';
            html += '  <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
            html += '</tr>';

            order_product_row++;
        }
    } else {
        html += '<tr>';
        html += '  <td colspan=\"6\" class=\"text-center\">{{ text_no_results|escape('js') }}</td>';
        html += '</tr>';
    }

    \$('#order-product').html(html);

    // Totals
    html = '';

    for (i in totals) {
        total = totals[i];

        html += '<tr>';
        html += '  <td class=\"text-end\"><strong>' + total['title'] + '</strong></td>';
        html += '  <td class=\"text-end\" style=\"width: 1px;\">' + total['text'] + '</td>';
        html += '</tr>';
    }

    \$('#order-total').html(html);

    if (shipping_required) {
        \$('#shipping-address').removeClass('d-none');
        \$('#shipping-method').removeClass('d-none');
        \$('#button-shipping-method').prop('disabled', false);
    } else {
        \$('#shipping-address').addClass('d-none');
        \$('#shipping-method').addClass('d-none');
        \$('#button-shipping-method').prop('disabled', true);
    }
}

// Reward
\$(document).on('click', '#button-reward-add, #button-reward-remove', function(e) {
    var element = this;

    if (\$(element).hasClass('btn-success')) {
        var action = 'add';
    } else {
        var action = 'remove';
    }

    \$.ajax({
        url: 'index.php?route=sale/order.' + action + 'Reward&user_token={{ user_token }}&order_id=' + \$('#input-order-id').val(),
        type: 'post',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (action == 'add') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-reward-remove\" data-bs-toggle=\"tooltip\" title=\"{{ button_reward_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>');
                }

                if (action == 'remove') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-reward-add\" data-bs-toggle=\"tooltip\" title=\"{{ button_reward_add|escape('js') }}\" class=\"btn btn-success\"><i class=\"fa-solid fa-plus-circle\"></i></button>');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Affiliate
\$('#input-affiliate').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=marketing/affiliate.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    customer_id: 0,
                    name: '{{ text_none }}'
                });

                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-affiliate-id').val(item['value']);
        \$('#input-affiliate').val(decodeHTMLEntities(item['label']));
    }
});

\$('#form-affiliate').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=affiliate&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val(),
        type: 'post',
        data: \$('#form-affiliate').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-affiliate').button('loading');
        },
        complete: function() {
            \$('#button-affiliate').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#form-affiliate').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#form-affiliate').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (\$('#input-affiliate-id').val()) {
                    \$('#output-affiliate').html('<a href=\"index.php?route=marketing/affiliate.form&user_token={{ user_token }}&customer_id=' + \$('#input-affiliate-id').val() + '\" target=\"_blank\">' + \$('#input-affiliate').val() + '</a>');
                } else {
                    \$('#output-affiliate').html('');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Commission
\$(document).on('click', '#button-commission-add, #button-commission-remove', function(e) {
    var element = this;

    if (\$(element).hasClass('btn-success')) {
        var action = 'add';
    } else {
        var action = 'remove';
    }

    \$.ajax({
        url: 'index.php?route=sale/order.' + action + 'Commission&user_token={{ user_token }}&order_id=' + \$('#input-order-id').val(),
        type: 'post',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                if (action == 'add') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-commission-remove\" data-bs-toggle=\"tooltip\" title=\"{{ button_commission_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>');
                }

                if (action == 'remove') {
                    \$(element).replaceWith('<button type=\"button\" id=\"button-commission-add\" data-bs-toggle=\"tooltip\" title=\"{{ button_commission_add|escape('js') }}\" class=\"btn btn-success\"><i class=\"fa-solid fa-plus-circle\"></i></button>');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#history').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
});

\$('#form-history').on('submit', function(e) {
    e.preventDefault();

    \$.ajax({
        url: 'index.php?route=sale/order.call&user_token={{ user_token }}&call=history_add&store_id=' + \$('#input-store').val() + '&language=' + \$('#input-language').val() + '&currency=' + \$('#input-currency').val() + '&order_id=' + \$('#input-order-id').val(),
        type: 'post',
        dataType: 'json',
        data: \$('#form-history').serialize(),
        contentType: 'application/x-www-form-urlencoded',
        beforeSend: function() {
            \$('#button-history').button('loading');
        },
        complete: function() {
            \$('#button-history').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#history').load('index.php?route=sale/order.history&user_token={{ user_token }}&order_id=' + \$('#input-order-id').val());

                \$('#input-history').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
{{ footer }}
", "admin/view/template/sale/order_info.twig", "/pub/www/app/public/admin/view/template/sale/order_info.twig");
    }
}
