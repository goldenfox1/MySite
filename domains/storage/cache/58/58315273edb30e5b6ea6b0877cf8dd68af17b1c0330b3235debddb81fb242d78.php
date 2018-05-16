<?php

/* default/template/extension/module/featuredcategory.twig */
class __TwigTemplate_f83626c587aee8c5b06e289320473d3ed99266dcbc1cb966964e71c8c9c7c739 extends Twig_Template
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
        echo "<style>
    .product-thumb .caption{
        min-height: auto;
    }
</style>
<h3>";
        // line 6
        echo (isset($context["box_title"]) ? $context["box_title"] : null);
        echo "</h3>
<div class=\"row\">
  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 9
            echo "    <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
      <div class=\"product-thumb transition\">
        <div class=\"image\"><a href=\"";
            // line 11
            echo $this->getAttribute($context["category"], "href", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($context["category"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["category"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["category"], "name", array());
            echo "\" class=\"img-responsive\"/></a></div>
        <div class=\"caption categoryname\">
          <h4><a href=\"";
            // line 13
            echo $this->getAttribute($context["category"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["category"], "name", array());
            echo "</a></h4>
        </div>
      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/featuredcategory.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 18,  50 => 13,  39 => 11,  35 => 9,  31 => 8,  26 => 6,  19 => 1,);
    }
}
/* <style>*/
/*     .product-thumb .caption{*/
/*         min-height: auto;*/
/*     }*/
/* </style>*/
/* <h3>{{ box_title }}</h3>*/
/* <div class="row">*/
/*   {% for category in categories %}*/
/*     <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">*/
/*       <div class="product-thumb transition">*/
/*         <div class="image"><a href="{{ category.href }}"><img src="{{ category.thumb }}" alt="{{ category.name }}" title="{{ category.name }}" class="img-responsive"/></a></div>*/
/*         <div class="caption categoryname">*/
/*           <h4><a href="{{ category.href }}">{{ category.name }}</a></h4>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endfor %}*/
/* </div>*/
/* */
