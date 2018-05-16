<?php

/* basecart/template/checkout/simplecheckout_payment_address.twig */
class __TwigTemplate_2c0b79e40720f287ffa0e93809660c5524c36d76e35c04844eff1b76dd58f258 extends Twig_Template
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
        echo "<div class=\"simplecheckout-block\" id=\"simplecheckout_payment_address\" ";
        echo (((isset($context["hide"]) ? $context["hide"] : null)) ? ("data-hide=\"true\"") : (""));
        echo " ";
        echo ((((isset($context["display_error"]) ? $context["display_error"] : null) && (isset($context["has_error"]) ? $context["has_error"] : null))) ? ("data-error=\"true\"") : (""));
        echo ">
  ";
        // line 2
        if ((isset($context["display_header"]) ? $context["display_header"] : null)) {
            // line 3
            echo "  <div class=\"checkout-heading panel-heading\">";
            echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
            echo "</div>
  ";
        }
        // line 5
        echo "  <div class=\"simplecheckout-block-content\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 7
            echo "      ";
            echo $context["row"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hidden_rows"]) ? $context["hidden_rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 10
            echo "      ";
            echo $context["row"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "  </div>
  ";
        // line 13
        if ((isset($context["display_address_same"]) ? $context["display_address_same"] : null)) {
            // line 14
            echo "    <div class=\"simplecheckout-customer-same-address\">
      <label><input type=\"checkbox\" name=\"address_same\" value=\"1\" ";
            // line 15
            echo (((isset($context["address_same"]) ? $context["address_same"] : null)) ? ("checked=\"checked\"") : (""));
            echo " data-onchange=\"reloadAll\">";
            echo (isset($context["entry_address_same"]) ? $context["entry_address_same"] : null);
            echo "</label>
    </div>
  ";
        }
        // line 18
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "basecart/template/checkout/simplecheckout_payment_address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  72 => 15,  69 => 14,  67 => 13,  64 => 12,  55 => 10,  50 => 9,  41 => 7,  37 => 6,  34 => 5,  28 => 3,  26 => 2,  19 => 1,);
    }
}
/* <div class="simplecheckout-block" id="simplecheckout_payment_address" {{ hide ? 'data-hide="true"' : '' }} {{ display_error and has_error ? 'data-error="true"' : '' }}>*/
/*   {% if display_header %}*/
/*   <div class="checkout-heading panel-heading">{{ text_checkout_payment_address }}</div>*/
/*   {% endif %}*/
/*   <div class="simplecheckout-block-content">*/
/*     {% for row in rows %}*/
/*       {{ row }}*/
/*     {% endfor %}*/
/*     {% for row in hidden_rows %}*/
/*       {{ row }}*/
/*     {% endfor %}*/
/*   </div>*/
/*   {% if display_address_same %}*/
/*     <div class="simplecheckout-customer-same-address">*/
/*       <label><input type="checkbox" name="address_same" value="1" {{ address_same ? 'checked="checked"' : '' }} data-onchange="reloadAll">{{ entry_address_same }}</label>*/
/*     </div>*/
/*   {% endif %}*/
/* </div>*/
