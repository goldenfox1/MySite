<?php

/* basecart/template/common/simple_row_hidden.twig */
class __TwigTemplate_bc8051ed16a77063b4a439bda5ae38e573a892273693d2d6aad26bdabee924e6 extends Twig_Template
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
        echo "<input type=\"hidden\" name=\"";
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" id=\"";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\" value=\"";
        echo (isset($context["value"]) ? $context["value"] : null);
        echo "\">";
    }

    public function getTemplateName()
    {
        return "basecart/template/common/simple_row_hidden.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <input type="hidden" name="{{ name }}" id="{{ id }}" value="{{ value }}">*/
