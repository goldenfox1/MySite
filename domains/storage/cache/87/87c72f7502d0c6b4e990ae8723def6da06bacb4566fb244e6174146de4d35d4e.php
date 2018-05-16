<?php

/* basecart/template/checkout/simplecheckout_shipping.twig */
class __TwigTemplate_87ece8e2590b608b0a8f737334dc5ae6183c7c1ee1e837836510ea638b688554 extends Twig_Template
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
        echo "<div class=\"simplecheckout-block\" id=\"simplecheckout_shipping\" ";
        echo (((isset($context["hide"]) ? $context["hide"] : null)) ? ("data-hide=\"true\"") : (""));
        echo " ";
        echo ((((isset($context["display_error"]) ? $context["display_error"] : null) && (isset($context["has_error"]) ? $context["has_error"] : null))) ? ("data-error=\"true\"") : (""));
        echo ">
    ";
        // line 2
        if ((isset($context["display_header"]) ? $context["display_header"] : null)) {
            // line 3
            echo "        <div class=\"checkout-heading panel-heading\">";
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "</div>
    ";
        }
        // line 5
        echo "    <div class=\"alert alert-danger simplecheckout-warning-block\" ";
        echo ((((isset($context["display_error"]) ? $context["display_error"] : null) && (isset($context["has_error_shipping"]) ? $context["has_error_shipping"] : null))) ? ("") : ("style=\"display:none\""));
        echo ">";
        echo (isset($context["error_shipping"]) ? $context["error_shipping"] : null);
        echo "</div>
    <div class=\"simplecheckout-block-content\">
        ";
        // line 7
        if ( !twig_test_empty((isset($context["shipping_methods"]) ? $context["shipping_methods"] : null))) {
            // line 8
            echo "            ";
            if (((isset($context["display_type"]) ? $context["display_type"] : null) == 2)) {
                // line 9
                echo "                ";
                $context["current_method"] = false;
                // line 10
                echo "                <select data-onchange=\"reloadAll\" name=\"shipping_method\">
                    ";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["shipping_methods"]) ? $context["shipping_methods"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
                    // line 12
                    echo "                        ";
                    if ( !twig_test_empty($this->getAttribute($context["shipping_method"], "title", array(), "array"))) {
                        // line 13
                        echo "                        <optgroup label=\"";
                        echo $this->getAttribute($context["shipping_method"], "title", array(), "array");
                        echo "\">
                        ";
                    }
                    // line 15
                    echo "                        ";
                    if (twig_test_empty($this->getAttribute($context["shipping_method"], "error", array(), "array"))) {
                        // line 16
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["shipping_method"], "quote", array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                            // line 17
                            echo "                                <option value=\"";
                            echo $this->getAttribute($context["quote"], "code", array(), "array");
                            echo "\" ";
                            echo (( !twig_test_empty($this->getAttribute($context["quote"], "dummy", array(), "array"))) ? ("disabled=\"disabled\"") : (""));
                            echo " ";
                            echo (( !twig_test_empty($this->getAttribute($context["quote"], "dummy", array(), "array"))) ? ("data-dummy=\"true\"") : (""));
                            echo " ";
                            if (($this->getAttribute($context["quote"], "code", array(), "array") == (isset($context["code"]) ? $context["code"] : null))) {
                                echo "selected=\"selected\"";
                            }
                            echo ">";
                            echo $this->getAttribute($context["quote"], "title", array(), "array");
                            echo ((( !twig_test_empty($this->getAttribute($context["quote"], "text", array(), "array")) && twig_test_empty((isset($context["hide_cost"]) ? $context["hide_cost"] : null)))) ? ((" - " . $this->getAttribute($context["quote"], "text", array(), "array"))) : (""));
                            echo "</option>
                                ";
                            // line 18
                            if (($this->getAttribute($context["quote"], "code", array(), "array") == (isset($context["code"]) ? $context["code"] : null))) {
                                // line 19
                                echo "                                    ";
                                $context["current_method"] = $context["quote"];
                                // line 20
                                echo "                                ";
                            }
                            // line 21
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 22
                        echo "                        ";
                    } else {
                        // line 23
                        echo "                            <option value=\"";
                        echo $this->getAttribute($context["shipping_method"], "code", array(), "array");
                        echo "\" disabled=\"disabled\">";
                        echo $this->getAttribute($context["shipping_method"], "error", array(), "array");
                        echo "</option>
                        ";
                    }
                    // line 25
                    echo "                        ";
                    if ( !twig_test_empty($this->getAttribute($context["shipping_method"], "title", array(), "array"))) {
                        // line 26
                        echo "                        </optgroup>
                        ";
                    }
                    // line 28
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "                </select>
                ";
                // line 30
                if ((isset($context["current_method"]) ? $context["current_method"] : null)) {
                    // line 31
                    echo "                    ";
                    if ( !twig_test_empty($this->getAttribute((isset($context["current_method"]) ? $context["current_method"] : null), "description", array(), "array"))) {
                        // line 32
                        echo "                        <div class=\"simplecheckout-methods-description\">";
                        echo $this->getAttribute((isset($context["current_method"]) ? $context["current_method"] : null), "description", array(), "array");
                        echo "</div>
                    ";
                    }
                    // line 34
                    echo "                    ";
                    if ( !twig_test_empty((isset($context["rows"]) ? $context["rows"] : null))) {
                        // line 35
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                            // line 36
                            echo "                          ";
                            echo $context["row"];
                            echo "
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 38
                        echo "                    ";
                    }
                    // line 39
                    echo "                ";
                }
                // line 40
                echo "            ";
            } else {
                // line 41
                echo "
                ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["shipping_methods"]) ? $context["shipping_methods"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
                    // line 43
                    echo "                    ";
                    if ( !twig_test_empty($this->getAttribute($context["shipping_method"], "title", array(), "array"))) {
                        // line 44
                        echo "                    <p><b>";
                        echo $this->getAttribute($context["shipping_method"], "title", array(), "array");
                        echo "</b></p>
                    ";
                    }
                    // line 46
                    echo "                    ";
                    if ( !twig_test_empty($this->getAttribute($context["shipping_method"], "warning", array(), "array"))) {
                        // line 47
                        echo "                        <div class=\"simplecheckout-error-text\">";
                        echo $this->getAttribute($context["shipping_method"], "warning", array(), "array");
                        echo "</div>
                    ";
                    }
                    // line 49
                    echo "                    ";
                    if (twig_test_empty($this->getAttribute($context["shipping_method"], "error", array(), "array"))) {
                        // line 50
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["shipping_method"], "quote", array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                            // line 51
                            echo "                            <div class=\"radio\">
                                <label for=\"";
                            // line 52
                            echo $this->getAttribute($context["quote"], "code", array(), "array");
                            echo "\">
                                    <input type=\"radio\" data-onchange=\"reloadAll\" name=\"shipping_method\" ";
                            // line 53
                            echo (( !twig_test_empty($this->getAttribute($context["quote"], "dummy", array(), "array"))) ? ("disabled=\"disabled\"") : (""));
                            echo " ";
                            echo (( !twig_test_empty($this->getAttribute($context["quote"], "dummy", array(), "array"))) ? ("data-dummy=\"true\"") : (""));
                            echo " value=\"";
                            echo $this->getAttribute($context["quote"], "code", array(), "array");
                            echo "\" id=\"";
                            echo $this->getAttribute($context["quote"], "code", array(), "array");
                            echo "\" ";
                            if (($this->getAttribute($context["quote"], "code", array(), "array") == (isset($context["code"]) ? $context["code"] : null))) {
                                echo "checked=\"checked\"";
                            }
                            echo " />
                                    ";
                            // line 54
                            if ( !twig_test_empty($this->getAttribute($context["quote"], "img", array(), "array"))) {
                                // line 55
                                echo "                                        <img src=\"";
                                echo $this->getAttribute($context["quote"], "img", array(), "array");
                                echo "\" width=\"60\" height=\"32\" border=\"0\" style=\"display:block;margin:3px;\">
                                    ";
                            }
                            // line 57
                            echo "                                    ";
                            echo (( !twig_test_empty($this->getAttribute($context["quote"], "title", array(), "array"))) ? ($this->getAttribute($context["quote"], "title", array(), "array")) : (""));
                            echo ((( !twig_test_empty($this->getAttribute($context["quote"], "text", array(), "array")) && twig_test_empty((isset($context["hide_cost"]) ? $context["hide_cost"] : null)))) ? ((" - " . $this->getAttribute($context["quote"], "text", array(), "array"))) : (""));
                            echo "
                                </label>
                            </div>
                            ";
                            // line 60
                            if (( !twig_test_empty($this->getAttribute($context["quote"], "description", array(), "array")) && (twig_test_empty((isset($context["display_for_selected"]) ? $context["display_for_selected"] : null)) || ( !twig_test_empty((isset($context["display_for_selected"]) ? $context["display_for_selected"] : null)) && ($this->getAttribute($context["quote"], "code", array(), "array") == (isset($context["code"]) ? $context["code"] : null)))))) {
                                // line 61
                                echo "                                <div class=\"form-group\">
                                    <label for=\"";
                                // line 62
                                echo $this->getAttribute($context["quote"], "code", array(), "array");
                                echo "\">";
                                echo $this->getAttribute($context["quote"], "description", array(), "array");
                                echo "</label>
                                </div>
                            ";
                            }
                            // line 65
                            echo "                            ";
                            if ((($this->getAttribute($context["quote"], "code", array(), "array") == (isset($context["code"]) ? $context["code"] : null)) &&  !twig_test_empty((isset($context["rows"]) ? $context["rows"] : null)))) {
                                // line 66
                                echo "                                ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
                                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                                    // line 67
                                    echo "                                  ";
                                    echo $context["row"];
                                    echo "
                                ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 69
                                echo "                            ";
                            }
                            // line 70
                            echo "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 71
                        echo "                    ";
                    } else {
                        // line 72
                        echo "                        <div class=\"simplecheckout-error-text\">";
                        echo $this->getAttribute($context["shipping_method"], "error", array(), "array");
                        echo "</div>
                    ";
                    }
                    // line 74
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "
            ";
            }
            // line 77
            echo "            <input type=\"hidden\" name=\"shipping_method_current\" value=\"";
            echo (isset($context["code"]) ? $context["code"] : null);
            echo "\" />
            <input type=\"hidden\" name=\"shipping_method_checked\" value=\"";
            // line 78
            echo (isset($context["checked_code"]) ? $context["checked_code"] : null);
            echo "\" />
        ";
        }
        // line 80
        echo "        ";
        if (((twig_test_empty((isset($context["shipping_methods"]) ? $context["shipping_methods"] : null)) && (isset($context["address_empty"]) ? $context["address_empty"] : null)) && (isset($context["display_address_empty"]) ? $context["display_address_empty"] : null))) {
            // line 81
            echo "            <div class=\"simplecheckout-warning-text\">";
            echo (isset($context["text_shipping_address"]) ? $context["text_shipping_address"] : null);
            echo "</div>
        ";
        }
        // line 83
        echo "        ";
        if ((twig_test_empty((isset($context["shipping_methods"]) ? $context["shipping_methods"] : null)) &&  !(isset($context["address_empty"]) ? $context["address_empty"] : null))) {
            // line 84
            echo "            <div class=\"simplecheckout-warning-text\">";
            echo (isset($context["error_no_shipping"]) ? $context["error_no_shipping"] : null);
            echo "</div>
        ";
        }
        // line 86
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "basecart/template/checkout/simplecheckout_shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 86,  318 => 84,  315 => 83,  309 => 81,  306 => 80,  301 => 78,  296 => 77,  292 => 75,  286 => 74,  280 => 72,  277 => 71,  271 => 70,  268 => 69,  259 => 67,  254 => 66,  251 => 65,  243 => 62,  240 => 61,  238 => 60,  230 => 57,  224 => 55,  222 => 54,  208 => 53,  204 => 52,  201 => 51,  196 => 50,  193 => 49,  187 => 47,  184 => 46,  178 => 44,  175 => 43,  171 => 42,  168 => 41,  165 => 40,  162 => 39,  159 => 38,  150 => 36,  145 => 35,  142 => 34,  136 => 32,  133 => 31,  131 => 30,  128 => 29,  122 => 28,  118 => 26,  115 => 25,  107 => 23,  104 => 22,  98 => 21,  95 => 20,  92 => 19,  90 => 18,  74 => 17,  69 => 16,  66 => 15,  60 => 13,  57 => 12,  53 => 11,  50 => 10,  47 => 9,  44 => 8,  42 => 7,  34 => 5,  28 => 3,  26 => 2,  19 => 1,);
    }
}
/* <div class="simplecheckout-block" id="simplecheckout_shipping" {{ hide ? 'data-hide="true"' : '' }} {{ display_error and has_error ? 'data-error="true"' : '' }}>*/
/*     {% if display_header %}*/
/*         <div class="checkout-heading panel-heading">{{ text_checkout_shipping_method }}</div>*/
/*     {% endif %}*/
/*     <div class="alert alert-danger simplecheckout-warning-block" {{ display_error and has_error_shipping ? '' : 'style="display:none"' }}>{{ error_shipping }}</div>*/
/*     <div class="simplecheckout-block-content">*/
/*         {% if shipping_methods is not empty %}*/
/*             {% if display_type == 2  %}*/
/*                 {% set current_method = false %}*/
/*                 <select data-onchange="reloadAll" name="shipping_method">*/
/*                     {% for shipping_method in shipping_methods %}*/
/*                         {% if shipping_method['title'] is not empty %}*/
/*                         <optgroup label="{{ shipping_method['title'] }}">*/
/*                         {% endif %}*/
/*                         {% if shipping_method['error'] is empty %}*/
/*                             {% for quote in shipping_method['quote'] %}*/
/*                                 <option value="{{ quote['code'] }}" {{ quote['dummy'] is not empty ? 'disabled="disabled"' : '' }} {{ quote['dummy'] is not empty ? 'data-dummy="true"' : '' }} {% if quote['code'] == code %}selected="selected"{% endif %}>{{ quote['title'] }}{{ quote['text'] is not empty and hide_cost is empty ? ' - ' ~ quote['text'] : '' }}</option>*/
/*                                 {% if quote['code'] == code %}*/
/*                                     {% set current_method = quote %}*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         {% else %}*/
/*                             <option value="{{ shipping_method['code'] }}" disabled="disabled">{{ shipping_method['error'] }}</option>*/
/*                         {% endif %}*/
/*                         {% if shipping_method['title'] is not empty %}*/
/*                         </optgroup>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </select>*/
/*                 {% if current_method %}*/
/*                     {% if current_method['description'] is not empty %}*/
/*                         <div class="simplecheckout-methods-description">{{ current_method['description'] }}</div>*/
/*                     {% endif %}*/
/*                     {% if rows is not empty %}*/
/*                         {% for row in rows %}*/
/*                           {{ row }}*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                 {% endif %}*/
/*             {% else %}*/
/* */
/*                 {% for shipping_method in shipping_methods %}*/
/*                     {% if shipping_method['title'] is not empty %}*/
/*                     <p><b>{{ shipping_method['title'] }}</b></p>*/
/*                     {% endif %}*/
/*                     {% if shipping_method['warning'] is not empty %}*/
/*                         <div class="simplecheckout-error-text">{{ shipping_method['warning'] }}</div>*/
/*                     {% endif %}*/
/*                     {% if shipping_method['error'] is empty %}*/
/*                         {% for quote in shipping_method['quote'] %}*/
/*                             <div class="radio">*/
/*                                 <label for="{{ quote['code'] }}">*/
/*                                     <input type="radio" data-onchange="reloadAll" name="shipping_method" {{ quote['dummy'] is not empty ? 'disabled="disabled"' : '' }} {{ quote['dummy'] is not empty ? 'data-dummy="true"' : '' }} value="{{ quote['code'] }}" id="{{ quote['code'] }}" {% if quote['code'] == code %}checked="checked"{% endif %} />*/
/*                                     {% if quote['img'] is not empty %}*/
/*                                         <img src="{{ quote['img'] }}" width="60" height="32" border="0" style="display:block;margin:3px;">*/
/*                                     {% endif %}*/
/*                                     {{ quote['title'] is not empty ? quote['title'] : '' }}{{ quote['text'] is not empty and hide_cost is empty ? ' - ' ~ quote['text'] : '' }}*/
/*                                 </label>*/
/*                             </div>*/
/*                             {% if quote['description'] is not empty and (display_for_selected is empty or (display_for_selected is not empty and quote['code'] == code)) %}*/
/*                                 <div class="form-group">*/
/*                                     <label for="{{ quote['code'] }}">{{ quote['description'] }}</label>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                             {% if quote['code'] == code and rows is not empty %}*/
/*                                 {% for row in rows %}*/
/*                                   {{ row }}*/
/*                                 {% endfor %}*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     {% else %}*/
/*                         <div class="simplecheckout-error-text">{{ shipping_method['error'] }}</div>*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/* */
/*             {% endif %}*/
/*             <input type="hidden" name="shipping_method_current" value="{{ code }}" />*/
/*             <input type="hidden" name="shipping_method_checked" value="{{ checked_code }}" />*/
/*         {% endif %}*/
/*         {% if shipping_methods is empty and address_empty and display_address_empty %}*/
/*             <div class="simplecheckout-warning-text">{{ text_shipping_address }}</div>*/
/*         {% endif %}*/
/*         {% if shipping_methods is empty and not address_empty %}*/
/*             <div class="simplecheckout-warning-text">{{ error_no_shipping }}</div>*/
/*         {% endif %}*/
/*     </div>*/
/* </div>*/
