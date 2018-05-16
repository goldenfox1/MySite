<?php

/* basecart/template/checkout/simplecheckout_payment.twig */
class __TwigTemplate_33bd4bc3f2c219c43fdf94e384594fa9ba85745e5dd4cea19c88b77f3a752eff extends Twig_Template
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
        echo "<div class=\"simplecheckout-block\" id=\"simplecheckout_payment\" ";
        echo (((isset($context["hide"]) ? $context["hide"] : null)) ? ("data-hide=\"true\"") : (""));
        echo " ";
        echo ((((isset($context["display_error"]) ? $context["display_error"] : null) && (isset($context["has_error"]) ? $context["has_error"] : null))) ? ("data-error=\"true\"") : (""));
        echo ">
    ";
        // line 2
        if ((isset($context["display_header"]) ? $context["display_header"] : null)) {
            // line 3
            echo "        <div class=\"checkout-heading panel-heading\">";
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "</div>
    ";
        }
        // line 5
        echo "    <div class=\"alert alert-danger simplecheckout-warning-block\" ";
        echo ((((isset($context["display_error"]) ? $context["display_error"] : null) && (isset($context["has_error_payment"]) ? $context["has_error_payment"] : null))) ? ("") : ("style=\"display:none\""));
        echo ">";
        echo (isset($context["error_payment"]) ? $context["error_payment"] : null);
        echo "</div>
    <div class=\"simplecheckout-block-content\">
        ";
        // line 7
        if ( !twig_test_empty((isset($context["payment_methods"]) ? $context["payment_methods"] : null))) {
            // line 8
            echo "            ";
            if (((isset($context["display_type"]) ? $context["display_type"] : null) == 2)) {
                // line 9
                echo "                ";
                $context["current_method"] = false;
                // line 10
                echo "                <select data-onchange=\"reloadAll\" name=\"payment_method\">
                    ";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["payment_methods"]) ? $context["payment_methods"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                    // line 12
                    echo "                        <option value=\"";
                    echo $this->getAttribute($context["payment_method"], "code", array(), "array");
                    echo "\" ";
                    echo (( !twig_test_empty($this->getAttribute($context["payment_method"], "dummy", array(), "array"))) ? ("disabled=\"disabled\"") : (""));
                    echo " ";
                    echo (( !twig_test_empty($this->getAttribute($context["payment_method"], "dummy", array(), "array"))) ? ("data-dummy=\"true\"") : (""));
                    echo " ";
                    if (($this->getAttribute($context["payment_method"], "code", array(), "array") == (isset($context["code"]) ? $context["code"] : null))) {
                        echo "selected=\"selected\"";
                    }
                    echo ">";
                    echo $this->getAttribute($context["payment_method"], "title", array(), "array");
                    echo "</option>
                        ";
                    // line 13
                    if (($this->getAttribute($context["payment_method"], "code", array(), "array") == (isset($context["code"]) ? $context["code"] : null))) {
                        // line 14
                        echo "                            ";
                        $context["current_method"] = $context["payment_method"];
                        // line 15
                        echo "                        ";
                    }
                    // line 16
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "                </select>
                ";
                // line 18
                if ((isset($context["current_method"]) ? $context["current_method"] : null)) {
                    // line 19
                    echo "                    ";
                    if ( !twig_test_empty($this->getAttribute((isset($context["current_method"]) ? $context["current_method"] : null), "description", array(), "array"))) {
                        // line 20
                        echo "                        <div class=\"simplecheckout-methods-description\">";
                        echo $this->getAttribute((isset($context["current_method"]) ? $context["current_method"] : null), "description", array(), "array");
                        echo "</div>
                    ";
                    }
                    // line 22
                    echo "                    ";
                    if ( !twig_test_empty((isset($context["rows"]) ? $context["rows"] : null))) {
                        // line 23
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                            // line 24
                            echo "                          ";
                            echo $context["row"];
                            echo "
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 26
                        echo "                    ";
                    }
                    // line 27
                    echo "                ";
                }
                // line 28
                echo "            ";
            } else {
                // line 29
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["payment_methods"]) ? $context["payment_methods"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                    // line 30
                    echo "                    <div class=\"radio\">
                        <label for=\"";
                    // line 31
                    echo $this->getAttribute($context["payment_method"], "code", array(), "array");
                    echo "\">
                            <input type=\"radio\" data-onchange=\"reloadAll\" name=\"payment_method\" value=\"";
                    // line 32
                    echo $this->getAttribute($context["payment_method"], "code", array(), "array");
                    echo "\" ";
                    echo (( !twig_test_empty($this->getAttribute($context["payment_method"], "dummy", array(), "array"))) ? ("disabled=\"disabled\"") : (""));
                    echo " ";
                    echo (( !twig_test_empty($this->getAttribute($context["payment_method"], "dummy", array(), "array"))) ? ("data-dummy=\"true\"") : (""));
                    echo " id=\"";
                    echo $this->getAttribute($context["payment_method"], "code", array(), "array");
                    echo "\" ";
                    if (($this->getAttribute($context["payment_method"], "code", array(), "array") == (isset($context["code"]) ? $context["code"] : null))) {
                        echo "checked=\"checked\"";
                    }
                    echo " />
                            ";
                    // line 33
                    echo $this->getAttribute($context["payment_method"], "title", array(), "array");
                    echo "
                            ";
                    // line 34
                    if ( !twig_test_empty($this->getAttribute($context["payment_method"], "terms", array(), "array"))) {
                        // line 35
                        echo "                                ";
                        echo $this->getAttribute($context["payment_method"], "terms", array(), "array");
                        echo "
                            ";
                    }
                    // line 37
                    echo "                        </label>
                    </div>
                    ";
                    // line 39
                    if (( !twig_test_empty($this->getAttribute($context["payment_method"], "description", array(), "array")) && (twig_test_empty((isset($context["display_for_selected"]) ? $context["display_for_selected"] : null)) || ( !twig_test_empty((isset($context["display_for_selected"]) ? $context["display_for_selected"] : null)) && ($this->getAttribute($context["payment_method"], "code", array(), "array") == (isset($context["code"]) ? $context["code"] : null)))))) {
                        // line 40
                        echo "                        <div class=\"form-group\">
                            <label for=\"";
                        // line 41
                        echo $this->getAttribute($context["payment_method"], "code", array(), "array");
                        echo "\">";
                        echo $this->getAttribute($context["payment_method"], "description", array(), "array");
                        echo "</label>
                        </div>
                    ";
                    }
                    // line 44
                    echo "                    ";
                    if ((($this->getAttribute($context["payment_method"], "code", array(), "array") == (isset($context["code"]) ? $context["code"] : null)) &&  !twig_test_empty((isset($context["rows"]) ? $context["rows"] : null)))) {
                        // line 45
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                            // line 46
                            echo "                          ";
                            echo $context["row"];
                            echo "
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 48
                        echo "                    ";
                    }
                    // line 49
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "            ";
            }
            // line 51
            echo "            <input type=\"hidden\" name=\"payment_method_current\" value=\"";
            echo (isset($context["code"]) ? $context["code"] : null);
            echo "\" />
            <input type=\"hidden\" name=\"payment_method_checked\" value=\"";
            // line 52
            echo (isset($context["checked_code"]) ? $context["checked_code"] : null);
            echo "\" />
        ";
        }
        // line 54
        echo "        ";
        if (((twig_test_empty((isset($context["payment_methods"]) ? $context["payment_methods"] : null)) && (isset($context["address_empty"]) ? $context["address_empty"] : null)) && (isset($context["display_address_empty"]) ? $context["display_address_empty"] : null))) {
            // line 55
            echo "            <div class=\"simplecheckout-warning-text\">";
            echo (isset($context["text_payment_address"]) ? $context["text_payment_address"] : null);
            echo "</div>
        ";
        }
        // line 57
        echo "        ";
        if ((twig_test_empty((isset($context["payment_methods"]) ? $context["payment_methods"] : null)) &&  !(isset($context["address_empty"]) ? $context["address_empty"] : null))) {
            // line 58
            echo "            <div class=\"simplecheckout-warning-text\">";
            echo (isset($context["error_no_payment"]) ? $context["error_no_payment"] : null);
            echo "</div>
        ";
        }
        // line 60
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "basecart/template/checkout/simplecheckout_payment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 60,  232 => 58,  229 => 57,  223 => 55,  220 => 54,  215 => 52,  210 => 51,  207 => 50,  201 => 49,  198 => 48,  189 => 46,  184 => 45,  181 => 44,  173 => 41,  170 => 40,  168 => 39,  164 => 37,  158 => 35,  156 => 34,  152 => 33,  138 => 32,  134 => 31,  131 => 30,  126 => 29,  123 => 28,  120 => 27,  117 => 26,  108 => 24,  103 => 23,  100 => 22,  94 => 20,  91 => 19,  89 => 18,  86 => 17,  80 => 16,  77 => 15,  74 => 14,  72 => 13,  57 => 12,  53 => 11,  50 => 10,  47 => 9,  44 => 8,  42 => 7,  34 => 5,  28 => 3,  26 => 2,  19 => 1,);
    }
}
/* <div class="simplecheckout-block" id="simplecheckout_payment" {{ hide ? 'data-hide="true"' : '' }} {{ display_error and has_error ? 'data-error="true"' : '' }}>*/
/*     {% if display_header %}*/
/*         <div class="checkout-heading panel-heading">{{ text_checkout_payment_method }}</div>*/
/*     {% endif %}*/
/*     <div class="alert alert-danger simplecheckout-warning-block" {{ display_error and has_error_payment ? '' : 'style="display:none"' }}>{{ error_payment }}</div>*/
/*     <div class="simplecheckout-block-content">*/
/*         {% if payment_methods is not empty %}*/
/*             {% if display_type == 2  %}*/
/*                 {% set current_method = false %}*/
/*                 <select data-onchange="reloadAll" name="payment_method">*/
/*                     {% for payment_method in payment_methods %}*/
/*                         <option value="{{ payment_method['code'] }}" {{ payment_method['dummy'] is not empty ? 'disabled="disabled"' : '' }} {{ payment_method['dummy'] is not empty ? 'data-dummy="true"' : '' }} {% if payment_method['code'] == code %}selected="selected"{% endif %}>{{ payment_method['title'] }}</option>*/
/*                         {% if payment_method['code'] == code %}*/
/*                             {% set current_method = payment_method %}*/
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
/*                 {% for payment_method in payment_methods %}*/
/*                     <div class="radio">*/
/*                         <label for="{{ payment_method['code'] }}">*/
/*                             <input type="radio" data-onchange="reloadAll" name="payment_method" value="{{ payment_method['code'] }}" {{ payment_method['dummy'] is not empty ? 'disabled="disabled"' : '' }} {{ payment_method['dummy'] is not empty ? 'data-dummy="true"' : '' }} id="{{ payment_method['code'] }}" {% if payment_method['code'] == code %}checked="checked"{% endif %} />*/
/*                             {{ payment_method['title'] }}*/
/*                             {% if payment_method['terms'] is not empty %}*/
/*                                 {{ payment_method['terms'] }}*/
/*                             {% endif %}*/
/*                         </label>*/
/*                     </div>*/
/*                     {% if payment_method['description'] is not empty and (display_for_selected is empty or (display_for_selected is not empty and payment_method['code'] == code)) %}*/
/*                         <div class="form-group">*/
/*                             <label for="{{ payment_method['code'] }}">{{ payment_method['description'] }}</label>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     {% if payment_method['code'] == code and rows is not empty %}*/
/*                         {% for row in rows %}*/
/*                           {{ row }}*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <input type="hidden" name="payment_method_current" value="{{ code }}" />*/
/*             <input type="hidden" name="payment_method_checked" value="{{ checked_code }}" />*/
/*         {% endif %}*/
/*         {% if payment_methods is empty and address_empty and display_address_empty %}*/
/*             <div class="simplecheckout-warning-text">{{ text_payment_address }}</div>*/
/*         {% endif %}*/
/*         {% if payment_methods is empty and not address_empty %}*/
/*             <div class="simplecheckout-warning-text">{{ error_no_payment }}</div>*/
/*         {% endif %}*/
/*     </div>*/
/* </div>*/
