<?php

/* basecart/template/common/search.twig */
class __TwigTemplate_279eab2c380ef8ee4c0adf15fb1d9352655d38b4cffb0a987ad15b4501a58b8f extends Twig_Template
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
        echo "<div id=\"search\" class=\"input-group\">
  <input type=\"text\" name=\"search\" value=\"";
        // line 2
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" class=\"form-control\" />
  <span class=\"input-group-btn\">
    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-search\"></i></button>
  </span>
</div>
";
    }

    public function getTemplateName()
    {
        return "basecart/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <div id="search" class="input-group">*/
/*   <input type="text" name="search" value="{{ search }}" placeholder="{{ text_search }}" class="form-control" />*/
/*   <span class="input-group-btn">*/
/*     <button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>*/
/*   </span>*/
/* </div>*/
/* */
