<?php

/* basecart/template/common/currency.twig */
class __TwigTemplate_78c1848793311a1737ce4b75b9476a0e0ed3b14f13a4ce1f17c0956287555cc3 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["currencies"]) ? $context["currencies"] : null)) > 1)) {
            // line 2
            echo "<form action=\"";
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
  <div class=\"btn-group\">
      ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 5
                echo "      ";
                if ($this->getAttribute($context["currency"], "symbol_left", array())) {
                    // line 6
                    echo "      <button type=\"button\" class=\"btn btn-default currency-select\" name=\"";
                    echo $this->getAttribute($context["currency"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["currency"], "code", array());
                    echo "</button>
      ";
                } else {
                    // line 8
                    echo "      <button type=\"button\" class=\"btn btn-default currency-select\" name=\"";
                    echo $this->getAttribute($context["currency"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["currency"], "code", array());
                    echo "</button>
      ";
                }
                // line 10
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "  </div>
  <input type=\"hidden\" name=\"code\" value=\"\" />
  <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 13
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
</form>
";
        }
    }

    public function getTemplateName()
    {
        return "basecart/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  56 => 11,  50 => 10,  42 => 8,  34 => 6,  31 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if currencies|length > 1 %}*/
/* <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-currency">*/
/*   <div class="btn-group">*/
/*       {% for currency in currencies %}*/
/*       {% if currency.symbol_left %}*/
/*       <button type="button" class="btn btn-default currency-select" name="{{ currency.code }}">{{ currency.code }}</button>*/
/*       {% else %}*/
/*       <button type="button" class="btn btn-default currency-select" name="{{ currency.code }}">{{ currency.code }}</button>*/
/*       {% endif %}*/
/*       {% endfor %}*/
/*   </div>*/
/*   <input type="hidden" name="code" value="" />*/
/*   <input type="hidden" name="redirect" value="{{ redirect }}" />*/
/* </form>*/
/* {% endif %}*/
/* */
