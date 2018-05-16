<?php

/* basecart/template/common/cart.twig */
class __TwigTemplate_fa96eb2a1c91c550f4f51120a008f6b307dd168b6a6dc716862023aa7c941540 extends Twig_Template
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
        echo "<li id=\"cart\" class=\"dropdown\">
  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-shopping-cart\"></i><span id=\"cart-total\">";
        // line 2
        echo (isset($context["text_items"]) ? $context["text_items"] : null);
        echo "</span></a>
  <ul class=\"dropdown-menu\">
    ";
        // line 4
        if (((isset($context["products"]) ? $context["products"] : null) || (isset($context["vouchers"]) ? $context["vouchers"] : null))) {
            // line 5
            echo "    <li>
    <div>
      <table class=\"table table-condensed\">
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 9
                echo "        <tr>
          <td class=\"text-center\">
            ";
                // line 11
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    // line 12
                    echo "            <a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-thumbnail\" /></a>
            ";
                }
                // line 14
                echo "          </td>
          <td class=\"text-left\"><a href=\"";
                // line 15
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a>
            ";
                // line 16
                if ($this->getAttribute($context["product"], "option", array())) {
                    // line 17
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["product"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 18
                        echo "            <br />
            - <small>";
                        // line 19
                        echo $this->getAttribute($context["option"], "name", array());
                        echo " ";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "</small>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 21
                    echo "            ";
                }
                // line 22
                echo "            ";
                if ($this->getAttribute($context["product"], "recurring", array())) {
                    // line 23
                    echo "            <br />
            - <small>";
                    // line 24
                    echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "recurring", array());
                    echo "</small>
            ";
                }
                // line 26
                echo "          </td>
          <td class=\"text-right\">x ";
                // line 27
                echo $this->getAttribute($context["product"], "quantity", array());
                echo "</td>
          <td class=\"text-right\">";
                // line 28
                echo $this->getAttribute($context["product"], "total", array());
                echo "</td>
          <td class=\"text-center\"><button type=\"button\" onclick=\"cart.remove('";
                // line 29
                echo $this->getAttribute($context["product"], "cart_id", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-close\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 33
                echo "        <tr>
          <td class=\"text-center\"></td>
          <td class=\"text-left\">";
                // line 35
                echo $this->getAttribute($context["voucher"], "description", array());
                echo "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                // line 37
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
          <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 38
                echo $this->getAttribute($context["voucher"], "key", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "      </table>
    </div>
    </li>
    <li>
      <div>
        <table class=\"table table-condensed\">
          ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 48
                echo "          <tr>
            <td class=\"text-right\"><strong>";
                // line 49
                echo $this->getAttribute($context["total"], "title", array());
                echo "</strong></td>
            <td class=\"text-right\">";
                // line 50
                echo $this->getAttribute($context["total"], "text", array());
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "        </table>
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <div class=\"btn-group pull-right\">
              <a class=\"btn btn-default\" href=\"";
            // line 57
            echo (isset($context["cart"]) ? $context["cart"] : null);
            echo "\">";
            echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
            echo "</a>
              <a class=\"btn btn-primary\" href=\"";
            // line 58
            echo (isset($context["checkout"]) ? $context["checkout"] : null);
            echo "\">";
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "</a>
            </div>
          </div>
          <br />
          <br />
        </div>
      </div>
    </li>
    ";
        } else {
            // line 67
            echo "    <li>
      <p class=\"text-center\">";
            // line 68
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
    </li>
    ";
        }
        // line 71
        echo "  </ul>
</li>
";
    }

    public function getTemplateName()
    {
        return "basecart/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 71,  209 => 68,  206 => 67,  192 => 58,  186 => 57,  180 => 53,  171 => 50,  167 => 49,  164 => 48,  160 => 47,  152 => 41,  141 => 38,  137 => 37,  132 => 35,  128 => 33,  123 => 32,  112 => 29,  108 => 28,  104 => 27,  101 => 26,  94 => 24,  91 => 23,  88 => 22,  85 => 21,  75 => 19,  72 => 18,  67 => 17,  65 => 16,  59 => 15,  56 => 14,  44 => 12,  42 => 11,  38 => 9,  34 => 8,  29 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <li id="cart" class="dropdown">*/
/*   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-shopping-cart"></i><span id="cart-total">{{ text_items }}</span></a>*/
/*   <ul class="dropdown-menu">*/
/*     {% if products or vouchers %}*/
/*     <li>*/
/*     <div>*/
/*       <table class="table table-condensed">*/
/*         {% for product in products %}*/
/*         <tr>*/
/*           <td class="text-center">*/
/*             {% if product.thumb %}*/
/*             <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail" /></a>*/
/*             {% endif %}*/
/*           </td>*/
/*           <td class="text-left"><a href="{{ product.href }}">{{ product.name }}</a>*/
/*             {% if product.option %}*/
/*             {% for option in product %}*/
/*             <br />*/
/*             - <small>{{ option.name }} {{ option.value }}</small>*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*             {% if product.recurring %}*/
/*             <br />*/
/*             - <small>{{ text_recurring }} {{ product.recurring }}</small>*/
/*             {% endif %}*/
/*           </td>*/
/*           <td class="text-right">x {{ product.quantity }}</td>*/
/*           <td class="text-right">{{ product.total }}</td>*/
/*           <td class="text-center"><button type="button" onclick="cart.remove('{{ product.cart_id }}');" title="{{ button_remove }}" class="btn btn-danger btn-xs"><i class="fa fa-close"></i></button></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         {% for voucher in vouchers %}*/
/*         <tr>*/
/*           <td class="text-center"></td>*/
/*           <td class="text-left">{{ voucher.description }}</td>*/
/*           <td class="text-right">x&nbsp;1</td>*/
/*           <td class="text-right">{{ voucher.amount }}</td>*/
/*           <td class="text-center text-danger"><button type="button" onclick="voucher.remove('{{ voucher.key }}');" title="{{ button_remove }}" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*       </table>*/
/*     </div>*/
/*     </li>*/
/*     <li>*/
/*       <div>*/
/*         <table class="table table-condensed">*/
/*           {% for total in totals %}*/
/*           <tr>*/
/*             <td class="text-right"><strong>{{ total.title }}</strong></td>*/
/*             <td class="text-right">{{ total.text }}</td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*         </table>*/
/*         <div class="row">*/
/*           <div class="col-sm-12">*/
/*             <div class="btn-group pull-right">*/
/*               <a class="btn btn-default" href="{{ cart }}">{{ text_cart }}</a>*/
/*               <a class="btn btn-primary" href="{{ checkout }}">{{ text_checkout }}</a>*/
/*             </div>*/
/*           </div>*/
/*           <br />*/
/*           <br />*/
/*         </div>*/
/*       </div>*/
/*     </li>*/
/*     {% else %}*/
/*     <li>*/
/*       <p class="text-center">{{ text_empty }}</p>*/
/*     </li>*/
/*     {% endif %}*/
/*   </ul>*/
/* </li>*/
/* */
