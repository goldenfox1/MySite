<?php

/* basecart/template/checkout/simplecheckout_customer.twig */
class __TwigTemplate_d93a4e0ff7836bf38b127544a6c48372a23769e11291f8a0cfd04c07f7076fff extends Twig_Template
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
        echo "<div class=\"simplecheckout-block\" id=\"simplecheckout_customer\" ";
        echo (((isset($context["hide"]) ? $context["hide"] : null)) ? ("data-hide=\"true\"") : (""));
        echo " ";
        echo ((((isset($context["display_error"]) ? $context["display_error"] : null) && (isset($context["has_error"]) ? $context["has_error"] : null))) ? ("data-error=\"true\"") : (""));
        echo ">
  ";
        // line 2
        if (((isset($context["display_header"]) ? $context["display_header"] : null) || (isset($context["display_login"]) ? $context["display_login"] : null))) {
            // line 3
            echo "  <div class=\"checkout-heading panel-heading\"><span>";
            echo (isset($context["text_checkout_customer"]) ? $context["text_checkout_customer"] : null);
            echo "</span>";
            if ((isset($context["display_login"]) ? $context["display_login"] : null)) {
                echo "<span class=\"checkout-heading-button\"><a href=\"javascript:void(0)\" data-onclick=\"openLoginBox\">";
                echo (isset($context["text_checkout_customer_login"]) ? $context["text_checkout_customer_login"] : null);
                echo "</a></span>";
            }
            echo "</div>
  ";
        }
        // line 5
        echo "  <div class=\"simplecheckout-block-content\">
    ";
        // line 6
        if ((isset($context["display_registered"]) ? $context["display_registered"] : null)) {
            // line 7
            echo "      <div class=\"alert alert-success\">";
            echo (isset($context["text_account_created"]) ? $context["text_account_created"] : null);
            echo "</div>
    ";
        }
        // line 9
        echo "    ";
        if ((isset($context["display_you_will_registered"]) ? $context["display_you_will_registered"] : null)) {
            // line 10
            echo "      <div class=\"you-will-be-registered\">";
            echo (isset($context["text_you_will_be_registered"]) ? $context["text_you_will_be_registered"] : null);
            echo "</div>
    ";
        }
        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 13
            echo "      ";
            echo $context["row"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "basecart/template/checkout/simplecheckout_customer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 15,  65 => 13,  60 => 12,  54 => 10,  51 => 9,  45 => 7,  43 => 6,  40 => 5,  28 => 3,  26 => 2,  19 => 1,);
    }
}
/* <div class="simplecheckout-block" id="simplecheckout_customer" {{ hide ? 'data-hide="true"' : '' }} {{ display_error and has_error ? 'data-error="true"' : '' }}>*/
/*   {% if display_header or display_login %}*/
/*   <div class="checkout-heading panel-heading"><span>{{ text_checkout_customer }}</span>{% if display_login %}<span class="checkout-heading-button"><a href="javascript:void(0)" data-onclick="openLoginBox">{{ text_checkout_customer_login }}</a></span>{% endif %}</div>*/
/*   {% endif %}*/
/*   <div class="simplecheckout-block-content">*/
/*     {% if display_registered %}*/
/*       <div class="alert alert-success">{{ text_account_created }}</div>*/
/*     {% endif %}*/
/*     {% if display_you_will_registered %}*/
/*       <div class="you-will-be-registered">{{ text_you_will_be_registered }}</div>*/
/*     {% endif %}*/
/*     {% for row in rows %}*/
/*       {{ row }}*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
