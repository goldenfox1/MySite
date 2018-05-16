<?php

/* basecart/template/common/menu.twig */
class __TwigTemplate_8af7856d27c0bbabf1c8f67f6ff7f7850c2448646aaf36bf6e703e122c4da73c extends Twig_Template
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
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 2
            echo "<ul class=\"nav navbar-nav\">
  ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 4
                echo "  ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 5
                    echo "  <li class=\"dropdown\">
    <a href=\"";
                    // line 6
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo " <span class=\"caret\"></span></a>
    <ul class=\"dropdown-menu\">
        ";
                    // line 8
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($context["category"], "children", array()), (twig_length_filter($this->env, $this->getAttribute($context["category"], "children", array())) / twig_round($this->getAttribute($context["category"], "column", array()), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 9
                        echo "        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 10
                            echo "        <li><a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a></li>
        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 12
                        echo "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 13
                    echo "      <li role=\"separator\" class=\"divider\"></li>
      <li><a href=\"";
                    // line 14
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo (isset($context["text_all"]) ? $context["text_all"] : null);
                    echo " ";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
    </ul>
  </li>
  ";
                } else {
                    // line 18
                    echo "  <li><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
  ";
                }
                // line 20
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "basecart/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 21,  89 => 20,  81 => 18,  70 => 14,  67 => 13,  61 => 12,  50 => 10,  45 => 9,  41 => 8,  34 => 6,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if categories %}*/
/* <ul class="nav navbar-nav">*/
/*   {% for category in categories %}*/
/*   {% if category.children %}*/
/*   <li class="dropdown">*/
/*     <a href="{{ category.href }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ category.name }} <span class="caret"></span></a>*/
/*     <ul class="dropdown-menu">*/
/*         {% for children in category.children|batch(category.children|length / category.column|round(1, 'ceil')) %}*/
/*         {% for child in children %}*/
/*         <li><a href="{{ child.href }}">{{ child.name }}</a></li>*/
/*         {% endfor %}*/
/*         {% endfor %}*/
/*       <li role="separator" class="divider"></li>*/
/*       <li><a href="{{ category.href }}">{{ text_all }} {{ category.name }}</a></li>*/
/*     </ul>*/
/*   </li>*/
/*   {% else %}*/
/*   <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*   {% endif %}*/
/*   {% endfor %}*/
/* </ul>*/
/* {% endif %}*/
/* */
