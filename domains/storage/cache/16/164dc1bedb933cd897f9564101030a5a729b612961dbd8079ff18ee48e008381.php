<?php

/* basecart/template/checkout/simplecheckout_cart.twig */
class __TwigTemplate_4707a52a650eb8eabcb4876da7f661f3cab66e48fa88d30309ac3784bdf6b496 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"simplecheckout-block\" id=\"simplecheckout_cart\" ";
        echo (((isset($context["hide"]) ? $context["hide"] : null)) ? ("data-hide=\"true\"") : (""));
        echo " ";
        echo (((isset($context["has_error"]) ? $context["has_error"] : null)) ? ("data-error=\"true\"") : (""));
        echo ">
";
        // line 2
        if ((isset($context["display_header"]) ? $context["display_header"] : null)) {
            // line 3
            echo "    <div class=\"checkout-heading panel-heading\">";
            echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
            echo "</div>
";
        }
        // line 5
        if ((isset($context["attention"]) ? $context["attention"] : null)) {
            // line 6
            echo "    <div class=\"alert alert-danger simplecheckout-warning-block\">";
            echo (isset($context["attention"]) ? $context["attention"] : null);
            echo "</div>
";
        }
        // line 8
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 9
            echo "    <div class=\"alert alert-danger simplecheckout-warning-block\">";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
";
        }
        // line 11
        echo "    <div class=\"table-responsive\">
        <table class=\"simplecheckout-cart\">
            <colgroup>
                <col class=\"image\">
                <col class=\"name\">
                <col class=\"model\">
                <col class=\"quantity\">
                <col class=\"price\">
                <col class=\"total\">
                <col class=\"remove\">
            </colgroup>
            <thead>
                <tr>
                    <th class=\"image\">";
        // line 24
        echo (isset($context["column_image"]) ? $context["column_image"] : null);
        echo "</th>
                    <th class=\"name\">";
        // line 25
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</th>
                    <th class=\"model\">";
        // line 26
        echo (isset($context["column_model"]) ? $context["column_model"] : null);
        echo "</th>
                    <th class=\"quantity\">";
        // line 27
        echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
        echo "</th>
                    <th class=\"price\">";
        // line 28
        echo (isset($context["column_price"]) ? $context["column_price"] : null);
        echo "</th>
                    <th class=\"total\">";
        // line 29
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</th>
                    <th class=\"remove\"></th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 35
            echo "                    ";
            if ( !twig_test_empty($this->getAttribute($context["product"], "recurring", array(), "array"))) {
                // line 36
                echo "                        <tr>
                            <td class=\"simplecheckout-recurring-product\" style=\"border:none;\"><img src=\"";
                // line 37
                echo (isset($context["additional_path"]) ? $context["additional_path"] : null);
                echo "catalog/view/theme/default/image/reorder.png\" alt=\"\" title=\"\" style=\"float:left;\" />
                                <span style=\"float:left;line-height:18px; margin-left:10px;\">
                                <strong>";
                // line 39
                echo (isset($context["text_recurring_item"]) ? $context["text_recurring_item"] : null);
                echo "</strong>
                                ";
                // line 40
                echo $this->getAttribute($context["product"], "profile_description", array(), "array");
                echo "
                                </span>
                            </td>
                        </tr>
                    ";
            }
            // line 45
            echo "                    <tr>
                        <td class=\"image\">
                            ";
            // line 47
            if ($this->getAttribute($context["product"], "thumb", array(), "array")) {
                // line 48
                echo "                                <a href=\"";
                echo $this->getAttribute($context["product"], "href", array(), "array");
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array(), "array");
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array(), "array");
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array(), "array");
                echo "\" /></a>
                            ";
            }
            // line 50
            echo "                        </td>
                        <td class=\"name\">
                            ";
            // line 52
            if ($this->getAttribute($context["product"], "thumb", array(), "array")) {
                // line 53
                echo "                                <div class=\"image\">
                                    <a href=\"";
                // line 54
                echo $this->getAttribute($context["product"], "href", array(), "array");
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array(), "array");
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array(), "array");
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array(), "array");
                echo "\" /></a>
                                </div>
                            ";
            }
            // line 57
            echo "                            <a href=\"";
            echo $this->getAttribute($context["product"], "href", array(), "array");
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array(), "array");
            echo "</a>
                            ";
            // line 58
            if (( !$this->getAttribute($context["product"], "stock", array(), "array") && ((isset($context["config_stock_warning"]) ? $context["config_stock_warning"] : null) ||  !(isset($context["config_stock_checkout"]) ? $context["config_stock_checkout"] : null)))) {
                // line 59
                echo "                                <span class=\"product-warning\">***</span>
                            ";
            }
            // line 61
            echo "                            <div class=\"options\">
                            ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 63
                echo "                            &nbsp;<small> - ";
                echo $this->getAttribute($context["option"], "name", array(), "array");
                echo ": ";
                echo $this->getAttribute($context["option"], "value", array(), "array");
                echo "</small><br />
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                            ";
            if ( !twig_test_empty($this->getAttribute($context["product"], "recurring", array(), "array"))) {
                // line 66
                echo "                            - <small>";
                echo (isset($context["text_payment_profile"]) ? $context["text_payment_profile"] : null);
                echo ": ";
                echo $this->getAttribute($context["product"], "profile_name", array(), "array");
                echo "</small>
                            ";
            }
            // line 68
            echo "                            </div>
                            ";
            // line 69
            if ($this->getAttribute($context["product"], "reward", array(), "array")) {
                // line 70
                echo "                            <small>";
                echo $this->getAttribute($context["product"], "reward", array(), "array");
                echo "</small>
                            ";
            }
            // line 72
            echo "                        </td>
                        <td class=\"model\">";
            // line 73
            echo $this->getAttribute($context["product"], "model", array(), "array");
            echo "</td>
                        <td class=\"quantity\">
                            <div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                                <span class=\"input-group-btn\">
                                    <button class=\"btn btn-primary\" data-onclick=\"decreaseProductQuantity\" data-toggle=\"tooltip\" type=\"submit\">
                                        <i class=\"fa fa-minus\"></i>
                                    </button>
                                </span>
                                <input class=\"form-control\" type=\"text\" data-onchange=\"changeProductQuantity\" ";
            // line 81
            echo (((isset($context["quantity_step_as_minimum"]) ? $context["quantity_step_as_minimum"] : null)) ? ((("onfocus=\"\$(this).blur()\" data-minimum=\"" . $this->getAttribute($context["product"], "minimum", array(), "array")) . "\"")) : (""));
            echo " name=\"quantity[";
            echo (( !twig_test_empty($this->getAttribute($context["product"], "cart_id", array(), "array"))) ? ($this->getAttribute($context["product"], "cart_id", array(), "array")) : ($this->getAttribute($context["product"], "key", array(), "array")));
            echo "]\" value=\"";
            echo $this->getAttribute($context["product"], "quantity", array(), "array");
            echo "\" size=\"1\" />
                                <span class=\"input-group-btn\">
                                    <button class=\"btn btn-primary\" data-onclick=\"increaseProductQuantity\" data-toggle=\"tooltip\" type=\"submit\">
                                        <i class=\"fa fa-plus\"></i>
                                    </button>
                                    <button class=\"btn btn-danger\" data-onclick=\"removeProduct\" data-product-key=\"";
            // line 86
            echo (( !twig_test_empty($this->getAttribute($context["product"], "cart_id", array(), "array"))) ? ($this->getAttribute($context["product"], "cart_id", array(), "array")) : ($this->getAttribute($context["product"], "key", array(), "array")));
            echo "\" data-toggle=\"tooltip\" type=\"button\">
                                        <i class=\"fa fa-times-circle\"></i>
                                    </button>
                                </span>
                            </div>
                        </td>
                        <td class=\"price\">";
            // line 92
            echo $this->getAttribute($context["product"], "price", array(), "array");
            echo "</td>
                        <td class=\"total\">";
            // line 93
            echo $this->getAttribute($context["product"], "total", array(), "array");
            echo "</td>
                        <td class=\"remove\">
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_info"]) {
            // line 99
            echo "                    <tr>
                        <td class=\"image\"></td>
                        <td class=\"name\">";
            // line 101
            echo $this->getAttribute($context["voucher_info"], "description", array(), "array");
            echo "</td>
                        <td class=\"model\"></td>
                        <td class=\"quantity\">
                            <div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                                <input class=\"form-control\" type=\"text\" disabled value=\"1\" size=\"1\" />
                                <span class=\"input-group-btn\">
                                    <button class=\"btn btn-danger\" data-onclick=\"removeGift\" data-gift-key=\"";
            // line 107
            echo $this->getAttribute($context["voucher_info"], "key", array(), "array");
            echo "\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" type=\"button\">
                                        <i class=\"fa fa-times-circle\"></i>
                                    </button>
                                </span>
                            </div>
                        </td>
                        <td class=\"price\">";
            // line 113
            echo $this->getAttribute($context["voucher_info"], "amount", array(), "array");
            echo "</td>
                        <td class=\"total\">";
            // line 114
            echo $this->getAttribute($context["voucher_info"], "amount", array(), "array");
            echo "</td>
                        <td class=\"remove\">
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "            </tbody>
        </table>
    </div>

";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 124
            echo "    <div class=\"simplecheckout-cart-total\" id=\"total_";
            echo $this->getAttribute($context["total"], "code", array(), "array");
            echo "\">
        <span><b>";
            // line 125
            echo $this->getAttribute($context["total"], "title", array(), "array");
            echo ":</b></span>
        <span class=\"simplecheckout-cart-total-value\">";
            // line 126
            echo $this->getAttribute($context["total"], "text", array(), "array");
            echo "</span>
        <span class=\"simplecheckout-cart-total-remove\">
            ";
            // line 128
            if (($this->getAttribute($context["total"], "code", array(), "array") == "coupon")) {
                // line 129
                echo "                <i data-onclick=\"removeCoupon\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"fa fa-times-circle\"></i>
            ";
            }
            // line 131
            echo "            ";
            if (($this->getAttribute($context["total"], "code", array(), "array") == "voucher")) {
                // line 132
                echo "                <i data-onclick=\"removeVoucher\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"fa fa-times-circle\"></i>
            ";
            }
            // line 134
            echo "            ";
            if (($this->getAttribute($context["total"], "code", array(), "array") == "reward")) {
                // line 135
                echo "                <i data-onclick=\"removeReward\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"fa fa-times-circle\"></i>
            ";
            }
            // line 137
            echo "        </span>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        if ($this->getAttribute((isset($context["modules"]) ? $context["modules"] : null), "coupon", array(), "array", true, true)) {
            // line 141
            echo "    <div class=\"simplecheckout-cart-total\">
        <span class=\"inputs\">";
            // line 142
            echo (isset($context["entry_coupon"]) ? $context["entry_coupon"] : null);
            echo "&nbsp;<input class=\"form-control\" type=\"text\" data-onchange=\"reloadAll\" name=\"coupon\" value=\"";
            echo (isset($context["coupon"]) ? $context["coupon"] : null);
            echo "\" /></span>
    </div>
";
        }
        // line 145
        if (($this->getAttribute((isset($context["modules"]) ? $context["modules"] : null), "reward", array(), "array", true, true) && ((isset($context["points"]) ? $context["points"] : null) > 0))) {
            // line 146
            echo "    <div class=\"simplecheckout-cart-total\">
        <span class=\"inputs\">";
            // line 147
            echo (isset($context["entry_reward"]) ? $context["entry_reward"] : null);
            echo "&nbsp;<input class=\"form-control\" type=\"text\" name=\"reward\" data-onchange=\"reloadAll\" value=\"";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "\" /></span>
    </div>
";
        }
        // line 150
        if ($this->getAttribute((isset($context["modules"]) ? $context["modules"] : null), "voucher", array(), "array", true, true)) {
            // line 151
            echo "    <div class=\"simplecheckout-cart-total\">
        <span class=\"inputs\">";
            // line 152
            echo (isset($context["entry_voucher"]) ? $context["entry_voucher"] : null);
            echo "&nbsp;<input class=\"form-control\" type=\"text\" name=\"voucher\" data-onchange=\"reloadAll\" value=\"";
            echo (isset($context["voucher"]) ? $context["voucher"] : null);
            echo "\" /></span>
    </div>
";
        }
        // line 155
        if ((($this->getAttribute((isset($context["modules"]) ? $context["modules"] : null), "coupon", array(), "array", true, true) || ($this->getAttribute((isset($context["modules"]) ? $context["modules"] : null), "reward", array(), "array", true, true) && ((isset($context["points"]) ? $context["points"] : null) > 0))) || $this->getAttribute((isset($context["modules"]) ? $context["modules"] : null), "voucher", array(), "array", true, true))) {
            // line 156
            echo "    <div class=\"simplecheckout-cart-total simplecheckout-cart-buttons\">
        <span class=\"inputs buttons\"><a id=\"simplecheckout_button_cart\" data-onclick=\"reloadAll\" class=\"button btn-primary button_oc btn\"><span>";
            // line 157
            echo (isset($context["button_update"]) ? $context["button_update"] : null);
            echo "</span></a></span>
    </div>
";
        }
        // line 160
        echo "<input type=\"hidden\" name=\"remove\" value=\"\" id=\"simplecheckout_remove\">
<div style=\"display:none;\" id=\"simplecheckout_cart_total\">";
        // line 161
        echo (isset($context["cart_total"]) ? $context["cart_total"] : null);
        echo "</div>
";
        // line 162
        if ((isset($context["display_weight"]) ? $context["display_weight"] : null)) {
            // line 163
            echo "    <div style=\"display:none;\" id=\"simplecheckout_cart_weight\">";
            echo (isset($context["weight"]) ? $context["weight"] : null);
            echo "</div>
";
        }
        // line 165
        if ((isset($context["display_model"]) ? $context["display_model"] : null)) {
            // line 166
            echo "    <style>
    .simplecheckout-cart col.model,
    .simplecheckout-cart th.model,
    .simplecheckout-cart td.model {
        display: none;
    }
    </style>
";
        }
        // line 174
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "basecart/template/checkout/simplecheckout_cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  441 => 174,  431 => 166,  429 => 165,  423 => 163,  421 => 162,  417 => 161,  414 => 160,  408 => 157,  405 => 156,  403 => 155,  395 => 152,  392 => 151,  390 => 150,  382 => 147,  379 => 146,  377 => 145,  369 => 142,  366 => 141,  364 => 140,  356 => 137,  350 => 135,  347 => 134,  341 => 132,  338 => 131,  332 => 129,  330 => 128,  325 => 126,  321 => 125,  316 => 124,  312 => 123,  306 => 119,  295 => 114,  291 => 113,  280 => 107,  271 => 101,  267 => 99,  262 => 98,  251 => 93,  247 => 92,  238 => 86,  226 => 81,  215 => 73,  212 => 72,  206 => 70,  204 => 69,  201 => 68,  193 => 66,  190 => 65,  179 => 63,  175 => 62,  172 => 61,  168 => 59,  166 => 58,  159 => 57,  147 => 54,  144 => 53,  142 => 52,  138 => 50,  126 => 48,  124 => 47,  120 => 45,  112 => 40,  108 => 39,  103 => 37,  100 => 36,  97 => 35,  93 => 34,  85 => 29,  81 => 28,  77 => 27,  73 => 26,  69 => 25,  65 => 24,  50 => 11,  44 => 9,  42 => 8,  36 => 6,  34 => 5,  28 => 3,  26 => 2,  19 => 1,);
    }
}
/* <div class="simplecheckout-block" id="simplecheckout_cart" {{ hide ? 'data-hide="true"' : '' }} {{ has_error ? 'data-error="true"' : '' }}>*/
/* {% if display_header %}*/
/*     <div class="checkout-heading panel-heading">{{ text_cart }}</div>*/
/* {% endif %}*/
/* {% if attention %}*/
/*     <div class="alert alert-danger simplecheckout-warning-block">{{ attention }}</div>*/
/* {% endif %}*/
/* {% if error_warning %}*/
/*     <div class="alert alert-danger simplecheckout-warning-block">{{ error_warning }}</div>*/
/* {% endif %}*/
/*     <div class="table-responsive">*/
/*         <table class="simplecheckout-cart">*/
/*             <colgroup>*/
/*                 <col class="image">*/
/*                 <col class="name">*/
/*                 <col class="model">*/
/*                 <col class="quantity">*/
/*                 <col class="price">*/
/*                 <col class="total">*/
/*                 <col class="remove">*/
/*             </colgroup>*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th class="image">{{ column_image }}</th>*/
/*                     <th class="name">{{ column_name }}</th>*/
/*                     <th class="model">{{ column_model }}</th>*/
/*                     <th class="quantity">{{ column_quantity }}</th>*/
/*                     <th class="price">{{ column_price }}</th>*/
/*                     <th class="total">{{ column_total }}</th>*/
/*                     <th class="remove"></th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% for product in products %}*/
/*                     {% if product['recurring'] is not empty %}*/
/*                         <tr>*/
/*                             <td class="simplecheckout-recurring-product" style="border:none;"><img src="{{ additional_path }}catalog/view/theme/default/image/reorder.png" alt="" title="" style="float:left;" />*/
/*                                 <span style="float:left;line-height:18px; margin-left:10px;">*/
/*                                 <strong>{{ text_recurring_item }}</strong>*/
/*                                 {{ product['profile_description'] }}*/
/*                                 </span>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endif %}*/
/*                     <tr>*/
/*                         <td class="image">*/
/*                             {% if product['thumb'] %}*/
/*                                 <a href="{{ product['href'] }}"><img src="{{ product['thumb'] }}" alt="{{ product['name'] }}" title="{{ product['name'] }}" /></a>*/
/*                             {% endif %}*/
/*                         </td>*/
/*                         <td class="name">*/
/*                             {% if product['thumb'] %}*/
/*                                 <div class="image">*/
/*                                     <a href="{{ product['href'] }}"><img src="{{ product['thumb'] }}" alt="{{ product['name'] }}" title="{{ product['name'] }}" /></a>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                             <a href="{{ product['href'] }}">{{ product['name'] }}</a>*/
/*                             {% if not product['stock'] and (config_stock_warning or not config_stock_checkout) %}*/
/*                                 <span class="product-warning">***</span>*/
/*                             {% endif %}*/
/*                             <div class="options">*/
/*                             {% for option in product['option'] %}*/
/*                             &nbsp;<small> - {{ option['name'] }}: {{ option['value'] }}</small><br />*/
/*                             {% endfor %}*/
/*                             {% if product['recurring'] is not empty %}*/
/*                             - <small>{{ text_payment_profile }}: {{ product['profile_name'] }}</small>*/
/*                             {% endif %}*/
/*                             </div>*/
/*                             {% if product['reward'] %}*/
/*                             <small>{{ product['reward'] }}</small>*/
/*                             {% endif %}*/
/*                         </td>*/
/*                         <td class="model">{{ product['model'] }}</td>*/
/*                         <td class="quantity">*/
/*                             <div class="input-group btn-block" style="max-width: 200px;">*/
/*                                 <span class="input-group-btn">*/
/*                                     <button class="btn btn-primary" data-onclick="decreaseProductQuantity" data-toggle="tooltip" type="submit">*/
/*                                         <i class="fa fa-minus"></i>*/
/*                                     </button>*/
/*                                 </span>*/
/*                                 <input class="form-control" type="text" data-onchange="changeProductQuantity" {{ quantity_step_as_minimum ? 'onfocus="$(this).blur()" data-minimum="' ~ product['minimum'] ~ '"' : '' }} name="quantity[{{ product['cart_id'] is not empty ? product['cart_id'] : product['key'] }}]" value="{{ product['quantity'] }}" size="1" />*/
/*                                 <span class="input-group-btn">*/
/*                                     <button class="btn btn-primary" data-onclick="increaseProductQuantity" data-toggle="tooltip" type="submit">*/
/*                                         <i class="fa fa-plus"></i>*/
/*                                     </button>*/
/*                                     <button class="btn btn-danger" data-onclick="removeProduct" data-product-key="{{ product['cart_id'] is not empty ? product['cart_id'] : product['key'] }}" data-toggle="tooltip" type="button">*/
/*                                         <i class="fa fa-times-circle"></i>*/
/*                                     </button>*/
/*                                 </span>*/
/*                             </div>*/
/*                         </td>*/
/*                         <td class="price">{{ product['price'] }}</td>*/
/*                         <td class="total">{{ product['total'] }}</td>*/
/*                         <td class="remove">*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 {% for voucher_info in vouchers %}*/
/*                     <tr>*/
/*                         <td class="image"></td>*/
/*                         <td class="name">{{ voucher_info['description'] }}</td>*/
/*                         <td class="model"></td>*/
/*                         <td class="quantity">*/
/*                             <div class="input-group btn-block" style="max-width: 200px;">*/
/*                                 <input class="form-control" type="text" disabled value="1" size="1" />*/
/*                                 <span class="input-group-btn">*/
/*                                     <button class="btn btn-danger" data-onclick="removeGift" data-gift-key="{{ voucher_info['key'] }}" title="{{ button_remove }}" type="button">*/
/*                                         <i class="fa fa-times-circle"></i>*/
/*                                     </button>*/
/*                                 </span>*/
/*                             </div>*/
/*                         </td>*/
/*                         <td class="price">{{ voucher_info['amount'] }}</td>*/
/*                         <td class="total">{{ voucher_info['amount'] }}</td>*/
/*                         <td class="remove">*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* */
/* {% for total in totals %}*/
/*     <div class="simplecheckout-cart-total" id="total_{{ total['code'] }}">*/
/*         <span><b>{{ total['title'] }}:</b></span>*/
/*         <span class="simplecheckout-cart-total-value">{{ total['text'] }}</span>*/
/*         <span class="simplecheckout-cart-total-remove">*/
/*             {% if total['code'] == 'coupon' %}*/
/*                 <i data-onclick="removeCoupon" title="{{ button_remove }}" class="fa fa-times-circle"></i>*/
/*             {% endif %}*/
/*             {% if total['code'] == 'voucher' %}*/
/*                 <i data-onclick="removeVoucher" title="{{ button_remove }}" class="fa fa-times-circle"></i>*/
/*             {% endif %}*/
/*             {% if total['code'] == 'reward' %}*/
/*                 <i data-onclick="removeReward" title="{{ button_remove }}" class="fa fa-times-circle"></i>*/
/*             {% endif %}*/
/*         </span>*/
/*     </div>*/
/* {% endfor %}*/
/* {% if modules['coupon'] is defined %}*/
/*     <div class="simplecheckout-cart-total">*/
/*         <span class="inputs">{{ entry_coupon }}&nbsp;<input class="form-control" type="text" data-onchange="reloadAll" name="coupon" value="{{ coupon }}" /></span>*/
/*     </div>*/
/* {% endif %}*/
/* {% if modules['reward'] is defined and points > 0 %}*/
/*     <div class="simplecheckout-cart-total">*/
/*         <span class="inputs">{{ entry_reward }}&nbsp;<input class="form-control" type="text" name="reward" data-onchange="reloadAll" value="{{ reward }}" /></span>*/
/*     </div>*/
/* {% endif %}*/
/* {% if modules['voucher'] is defined %}*/
/*     <div class="simplecheckout-cart-total">*/
/*         <span class="inputs">{{ entry_voucher }}&nbsp;<input class="form-control" type="text" name="voucher" data-onchange="reloadAll" value="{{ voucher }}" /></span>*/
/*     </div>*/
/* {% endif %}*/
/* {% if modules['coupon'] is defined or (modules['reward'] is defined and points > 0) or modules['voucher'] is defined %}*/
/*     <div class="simplecheckout-cart-total simplecheckout-cart-buttons">*/
/*         <span class="inputs buttons"><a id="simplecheckout_button_cart" data-onclick="reloadAll" class="button btn-primary button_oc btn"><span>{{ button_update }}</span></a></span>*/
/*     </div>*/
/* {% endif %}*/
/* <input type="hidden" name="remove" value="" id="simplecheckout_remove">*/
/* <div style="display:none;" id="simplecheckout_cart_total">{{ cart_total }}</div>*/
/* {% if display_weight %}*/
/*     <div style="display:none;" id="simplecheckout_cart_weight">{{ weight }}</div>*/
/* {% endif %}*/
/* {% if display_model %}*/
/*     <style>*/
/*     .simplecheckout-cart col.model,*/
/*     .simplecheckout-cart th.model,*/
/*     .simplecheckout-cart td.model {*/
/*         display: none;*/
/*     }*/
/*     </style>*/
/* {% endif %}*/
/* </div>*/
