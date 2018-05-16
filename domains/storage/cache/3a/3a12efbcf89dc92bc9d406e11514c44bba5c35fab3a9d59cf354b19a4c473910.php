<?php

/* basecart/template/product/category.twig */
class __TwigTemplate_6cefff4d90ae98aa5a53bbe2f9b96f5cf6214aa882d7c7ae56dfb4a1c187b7ab extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"product-category\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h2>";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h2>
      ";
        // line 18
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["description"]) ? $context["description"] : null))) {
            // line 19
            echo "      <div class=\"row\">
        ";
            // line 20
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 21
                echo "        <div class=\"col-sm-2\"><img src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" class=\"img-thumbnail\" /></div>
        ";
            }
            // line 23
            echo "        ";
            if ((isset($context["description"]) ? $context["description"] : null)) {
                // line 24
                echo "        <div class=\"col-sm-10\">";
                echo (isset($context["description"]) ? $context["description"] : null);
                echo "</div>
        ";
            }
            // line 26
            echo "      </div>
      <hr>
      ";
        }
        // line 29
        echo "      ";
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 30
            echo "      <h3>";
            echo (isset($context["text_refine"]) ? $context["text_refine"] : null);
            echo "</h3>
      ";
            // line 31
            if ((twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : null)) <= 5)) {
                // line 32
                echo "      <div class=\"row\">
        <div class=\"col-sm-3\">
          <div class=\"list-group\">
            ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 36
                    echo "            <a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\" class=\"list-group-item\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "          </div>
        </div>
      </div>
      ";
            } else {
                // line 42
                echo "      <div class=\"row\">
        ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["categories"]) ? $context["categories"] : null), twig_round((twig_length_filter($this->env, (isset($context["categories"]) ? $context["categories"] : null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 44
                    echo "        <div class=\"col-sm-3\">
          <div class=\"list-group\">
            ";
                    // line 46
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 47
                        echo "            <a href=\"";
                        echo $this->getAttribute($context["category"], "href", array());
                        echo "\" class=\"list-group-item\">";
                        echo $this->getAttribute($context["category"], "name", array());
                        echo "</a>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 49
                    echo "          </div>
        </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "      </div>
      ";
            }
            // line 54
            echo "      ";
        }
        // line 55
        echo "      ";
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 56
            echo "      <p><a href=\"";
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\" class=\"btn btn-primary\">";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a></p>
      <div class=\"row\">
        <div class=\"col-md-4\">
          <div class=\"btn-group hidden-xs\">
            <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 60
            echo (isset($context["button_list"]) ? $context["button_list"] : null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 61
            echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
            echo "\"><i class=\"fa fa-th\"></i></button>
          </div>
        </div>
        <div class=\"col-md-3 col-md-offset-3 text-right\">
          <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
            ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 67
                echo "            ";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 68
                    echo "            <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
            ";
                } else {
                    // line 70
                    echo "            <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
            ";
                }
                // line 72
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "          </select>
        </div>
        <div class=\"col-md-2 text-right\">
          <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
            ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 78
                echo "            ";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 79
                    echo "            <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
            ";
                } else {
                    // line 81
                    echo "            <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
            ";
                }
                // line 83
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "          </select>
        </div>
      </div>
      <br />
      <div class=\"row\">
        ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 90
                echo "        <div class=\"product-layout product-grid col-sm-6 col-md-3\">
          <div class=\"product-thumb\">

\t\t\t";
                // line 93
                if ($this->getAttribute($context["product"], "tag_per", array())) {
                    // line 94
                    echo "\t\t\t<p class=\"tag ";
                    echo twig_random($this->env, array(0 => "hot", 1 => "new", 2 => "sale"));
                    echo "\"><i>Save</i></br>";
                    echo $this->getAttribute($context["product"], "tag_per", array());
                    echo "%</p>
\t\t\t";
                }
                // line 96
                echo "\t\t\t
            <div class=\"image\"><a href=\"";
                // line 97
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" /></a></div>
            <div>
              <div class=\"caption\">
                <h4><a href=\"";
                // line 100
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
                <p>";
                // line 101
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
                ";
                // line 102
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 103
                    echo "                <div class=\"rating\">
                  ";
                    // line 104
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 105
                        echo "                  ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 106
                            echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                  ";
                        } else {
                            // line 108
                            echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                  ";
                        }
                        // line 110
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 111
                    echo "                </div>
                ";
                }
                // line 113
                echo "                ";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 114
                    echo "                <p class=\"price\">
                  ";
                    // line 115
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 116
                        echo "                  <strong>";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</strong>
                  ";
                    } else {
                        // line 118
                        echo "                  <p class=\"text-danger\"><strong>";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</strong></p>
                  ";
                    }
                    // line 120
                    echo "                </p>
                ";
                }
                // line 122
                echo "              </div>
              <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-default\" onclick=\"cart.add('";
                // line 124
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</button>
                <button type=\"button\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
                // line 125
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                <button type=\"button\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
                // line 126
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-bar-chart\"></i></button>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 134
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 135
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
      </div>
      ";
        }
        // line 138
        echo "      ";
        if (( !(isset($context["categories"]) ? $context["categories"] : null) &&  !(isset($context["products"]) ? $context["products"] : null))) {
            // line 139
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 141
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
      </div>
      ";
        }
        // line 144
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
    ";
        // line 146
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
  </div>
</div>
";
        // line 149
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "basecart/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 149,  447 => 146,  441 => 144,  433 => 141,  427 => 139,  424 => 138,  418 => 135,  414 => 134,  410 => 132,  396 => 126,  390 => 125,  384 => 124,  380 => 122,  376 => 120,  370 => 118,  364 => 116,  362 => 115,  359 => 114,  356 => 113,  352 => 111,  346 => 110,  342 => 108,  338 => 106,  335 => 105,  331 => 104,  328 => 103,  326 => 102,  322 => 101,  316 => 100,  304 => 97,  301 => 96,  293 => 94,  291 => 93,  286 => 90,  282 => 89,  275 => 84,  269 => 83,  261 => 81,  253 => 79,  250 => 78,  246 => 77,  240 => 73,  234 => 72,  226 => 70,  218 => 68,  215 => 67,  211 => 66,  203 => 61,  199 => 60,  189 => 56,  186 => 55,  183 => 54,  179 => 52,  171 => 49,  160 => 47,  156 => 46,  152 => 44,  148 => 43,  145 => 42,  139 => 38,  128 => 36,  124 => 35,  119 => 32,  117 => 31,  112 => 30,  109 => 29,  104 => 26,  98 => 24,  95 => 23,  85 => 21,  83 => 20,  80 => 19,  78 => 18,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-category" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h2>{{ heading_title }}</h2>*/
/*       {% if thumb or description %}*/
/*       <div class="row">*/
/*         {% if thumb %}*/
/*         <div class="col-sm-2"><img src="{{ thumb }}" alt="{{ heading_title }}" title="{{ heading_title }}" class="img-thumbnail" /></div>*/
/*         {% endif %}*/
/*         {% if description %}*/
/*         <div class="col-sm-10">{{ description }}</div>*/
/*         {% endif %}*/
/*       </div>*/
/*       <hr>*/
/*       {% endif %}*/
/*       {% if categories %}*/
/*       <h3>{{ text_refine }}</h3>*/
/*       {% if categories|length <= 5 %}*/
/*       <div class="row">*/
/*         <div class="col-sm-3">*/
/*           <div class="list-group">*/
/*             {% for category in categories %}*/
/*             <a href="{{ category.href}}" class="list-group-item">{{ category.name }}</a>*/
/*             {% endfor %}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {% else %}*/
/*       <div class="row">*/
/*         {% for category in categories|batch((categories|length / 4)|round(1, 'ceil')) %}*/
/*         <div class="col-sm-3">*/
/*           <div class="list-group">*/
/*             {% for category in categories %}*/
/*             <a href="{{ category.href }}" class="list-group-item">{{ category.name }}</a>*/
/*             {% endfor %}*/
/*           </div>*/
/*         </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*       {% endif %}*/
/*       {% endif %}*/
/*       {% if products %}*/
/*       <p><a href="{{ compare }}" id="compare-total" class="btn btn-primary">{{ text_compare }}</a></p>*/
/*       <div class="row">*/
/*         <div class="col-md-4">*/
/*           <div class="btn-group hidden-xs">*/
/*             <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="{{ button_list }}"><i class="fa fa-th-list"></i></button>*/
/*             <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="{{ button_grid }}"><i class="fa fa-th"></i></button>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-md-3 col-md-offset-3 text-right">*/
/*           <select id="input-sort" class="form-control" onchange="location = this.value;">*/
/*             {% for sorts in sorts %}*/
/*             {% if sorts.value == '%s-%s'|format(sort, order) %}*/
/*             <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*             {% else %}*/
/*             <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*           </select>*/
/*         </div>*/
/*         <div class="col-md-2 text-right">*/
/*           <select id="input-limit" class="form-control" onchange="location = this.value;">*/
/*             {% for limits in limits %}*/
/*             {% if limits.value == limit %}*/
/*             <option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/*             {% else %}*/
/*             <option value="{{ limits.href }}">{{ limits.text }}</option>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*           </select>*/
/*         </div>*/
/*       </div>*/
/*       <br />*/
/*       <div class="row">*/
/*         {% for product in products %}*/
/*         <div class="product-layout product-grid col-sm-6 col-md-3">*/
/*           <div class="product-thumb">*/
/* */
/* 			{% if product.tag_per  %}*/
/* 			<p class="tag {{ random(['hot','new','sale']) }}"><i>Save</i></br>{{ product.tag_per }}%</p>*/
/* 			{% endif %}*/
/* 			*/
/*             <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a></div>*/
/*             <div>*/
/*               <div class="caption">*/
/*                 <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*                 <p>{{ product.description }}</p>*/
/*                 {% if product.rating %}*/
/*                 <div class="rating">*/
/*                   {% for i in 1..5 %}*/
/*                   {% if product.rating < i %}*/
/*                   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                   {% else %}*/
/*                   <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                   {% endif %}*/
/*                   {% endfor %}*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 {% if product.price %}*/
/*                 <p class="price">*/
/*                   {% if not product.special %}*/
/*                   <strong>{{ product.price }}</strong>*/
/*                   {% else %}*/
/*                   <p class="text-danger"><strong>{{ product.special }}</strong></p>*/
/*                   {% endif %}*/
/*                 </p>*/
/*                 {% endif %}*/
/*               </div>*/
/*               <div class="btn-group">*/
/*                 <button type="button" class="btn btn-default" onclick="cart.add('{{ product.product_id }}');">{{ button_cart }}</button>*/
/*                 <button type="button" class="btn btn-default" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*                 <button type="button" class="btn btn-default" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-bar-chart"></i></button>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*       <div class="row">*/
/*         <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*         <div class="col-sm-6 text-right">{{ results }}</div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if not categories and not products %}*/
/*       <p>{{ text_empty }}</p>*/
/*       <div class="buttons">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {{ content_bottom }}*/
/*     </div>*/
/*     {{ column_right }}*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
