<?php

/* basecart/template/checkout/simplecheckout_comment.twig */
class __TwigTemplate_932e47f84cf255814150d361b1a4d465b25e72c8c15e35aa5649a3265e614894 extends Twig_Template
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
        echo "<div class=\"simplecheckout-block\" id=\"simplecheckout_comment\">
    ";
        // line 2
        if ((isset($context["display_header"]) ? $context["display_header"] : null)) {
            // line 3
            echo "      <div class=\"checkout-heading panel-heading\">";
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "</div>
    ";
        }
        // line 5
        echo "    <div class=\"simplecheckout-block-content\">
      <textarea class=\"form-control\" name=\"comment\" id=\"comment\" placeholder=\"";
        // line 6
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" data-reload-payment-form=\"true\">";
        echo (isset($context["comment"]) ? $context["comment"] : null);
        echo "</textarea>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "basecart/template/checkout/simplecheckout_comment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="simplecheckout-block" id="simplecheckout_comment">*/
/*     {% if display_header %}*/
/*       <div class="checkout-heading panel-heading">{{ label }}</div>*/
/*     {% endif %}*/
/*     <div class="simplecheckout-block-content">*/
/*       <textarea class="form-control" name="comment" id="comment" placeholder="{{ placeholder }}" data-reload-payment-form="true">{{ comment }}</textarea>*/
/*     </div>*/
/* </div>*/
