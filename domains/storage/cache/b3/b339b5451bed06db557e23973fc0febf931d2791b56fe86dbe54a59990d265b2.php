<?php

/* basecart/template/common/header.twig */
class __TwigTemplate_521576ca16511ef38cce130a8e653ee83a17688770a48b89fb7c137ae5889a72 extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 13
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
";
        // line 14
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
";
        }
        // line 17
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 18
            echo "<meta name=\"keywords\" content= \"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 20
        echo "<link href=\"catalog/view/theme/basecart/css/font-awesome.min.css\" rel=\"stylesheet\">

<!-- START basecart module -->
";
        // line 23
        if ( !(isset($context["theme"]) ? $context["theme"] : null)) {
            // line 24
            echo "  ";
            $context["theme"] = "default";
        }
        // line 26
        echo "<link href=\"catalog/view/theme/basecart/css/";
        echo (isset($context["theme"]) ? $context["theme"] : null);
        echo ".css\" rel=\"stylesheet\">
<!-- END basecart module -->

<link href=\"catalog/view/theme/basecart/css/main.css\" rel=\"stylesheet\">
<script src=\"catalog/view/theme/basecart/js/jquery.min.js\"></script>
<script src=\"catalog/view/theme/basecart/js/bootstrap.min.js\"></script>
<script src=\"catalog/view/theme/basecart/js/common.js\"></script>
";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 34
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\">
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 37
            echo "<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\">
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 40
            echo "<script src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 43
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
         ";
        // line 46
        if ((isset($context["fbpixel_status"]) ? $context["fbpixel_status"] : null)) {
            // line 47
            echo "            <!-- Facebook Pixel Code -->
            <script>
            !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
            document,'script','//connect.facebook.net/en_US/fbevents.js');

            fbq('init', '";
            // line 55
            echo (isset($context["fbpixel_id"]) ? $context["fbpixel_id"] : null);
            echo "');
            fbq('track', \"PageView\");
            ";
            // line 57
            echo (isset($context["pixel"]) ? $context["pixel"] : null);
            echo "

            </script>
            <noscript><img height=\"1\" width=\"1\" style=\"display:none\"
            src=\"https://www.facebook.com/tr?id=";
            // line 61
            echo (isset($context["fbpixel_id"]) ? $context["fbpixel_id"] : null);
            echo "&ev=PageView&noscript=1\"
            /></noscript>
          <!-- End Facebook Pixel Code -->
        ";
        }
        // line 64
        echo " 
      

\t\t\t\t<style>
\t\t\t\t.tag {
    position: absolute;
    margin:5px 20px 0px 0px;
    right:0px;
    font-size: 15px;
    font-weight: 700;
    line-height: 25px;
    width: 55px;
    height: 55px;
    font-variant: small-caps;
    z-index: 100;
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px;
    color: #fff;
    text-align: center;
    transition :.6s;
}
.tag:hover{
\ttransform:rotate(360deg);
}
.tag.hot {
    background: #ff1353;
}
.tag.new {
        background: #18de0d;
        color: #000;
}
.tag.sale {
    background: #fdd922;
    color: #333;
}
</style>
            
</head>
<body>
<header>
";
        // line 105
        if ( !(isset($context["nav"]) ? $context["nav"] : null)) {
            // line 106
            echo "  ";
            $context["nav"] = "navbar-default";
        }
        // line 108
        echo "<nav class=\"navbar ";
        echo (isset($context["nav"]) ? $context["nav"] : null);
        echo "\">
  <div class=\"container\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      ";
        // line 117
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 118
            echo "      <a class=\"navbar-brand\" href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\"><img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-responsive\" /></a>
      ";
        } else {
            // line 120
            echo "      <a class=\"navbar-brand\" href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a>
      ";
        }
        // line 122
        echo "    </div>
    <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
      ";
        // line 124
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
      <ul class=\"nav navbar-nav navbar-right\">
        <li id=\"hiddenM\"><a class=\"btn btn-link\" role=\"button\" data-toggle=\"collapse\" href=\"#hiddenMenu\" aria-expanded=\"false\" aria-controls=\"hiddenMenu\"><i class=\"fa fa-ellipsis-h\"></i></a></li>
        ";
        // line 127
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "
        <li class=\"dropdown\"><a href=\"";
        // line 128
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" title=\"";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i><span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu dropdown-menu-right\">
            ";
        // line 130
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 131
            echo "            <li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 132
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 133
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\">";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 134
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 135
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
            ";
        } else {
            // line 137
            echo "            <li><a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 138
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
            ";
        }
        // line 140
        echo "          </ul>
        </li>
      </ul>
    </div>
    <div class=\"collapse\" id=\"hiddenMenu\">
      <div class=\"row\">
        <div class=\"col-sm-4\">
          ";
        // line 147
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "
        </div>
        <div class=\"col-sm-4\">
          ";
        // line 150
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "
        </div>
          <div class=\"col-sm-4\">
          ";
        // line 153
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "
        </div>
      </div>
    </div>
  </div>
</nav>
</header>
";
    }

    public function getTemplateName()
    {
        return "basecart/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 153,  352 => 150,  346 => 147,  337 => 140,  330 => 138,  323 => 137,  316 => 135,  310 => 134,  304 => 133,  298 => 132,  291 => 131,  289 => 130,  282 => 128,  278 => 127,  272 => 124,  268 => 122,  260 => 120,  248 => 118,  246 => 117,  233 => 108,  229 => 106,  227 => 105,  184 => 64,  177 => 61,  170 => 57,  165 => 55,  155 => 47,  153 => 46,  150 => 45,  142 => 43,  138 => 42,  129 => 40,  125 => 39,  112 => 37,  108 => 36,  97 => 34,  93 => 33,  82 => 26,  78 => 24,  76 => 23,  71 => 20,  65 => 18,  63 => 17,  57 => 15,  55 => 14,  51 => 13,  47 => 12,  36 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content= "{{ keywords }}" />*/
/* {% endif %}*/
/* <link href="catalog/view/theme/basecart/css/font-awesome.min.css" rel="stylesheet">*/
/* */
/* <!-- START basecart module -->*/
/* {% if not theme %}*/
/*   {% set theme = 'default' %}*/
/* {% endif %}*/
/* <link href="catalog/view/theme/basecart/css/{{ theme }}.css" rel="stylesheet">*/
/* <!-- END basecart module -->*/
/* */
/* <link href="catalog/view/theme/basecart/css/main.css" rel="stylesheet">*/
/* <script src="catalog/view/theme/basecart/js/jquery.min.js"></script>*/
/* <script src="catalog/view/theme/basecart/js/bootstrap.min.js"></script>*/
/* <script src="catalog/view/theme/basecart/js/common.js"></script>*/
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}">*/
/* {% endfor %}*/
/* {% for style in styles %}*/
/* <link href="{{ style.href }}" rel="{{ style.rel }}" media="{{ style.media }}">*/
/* {% endfor %}*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}"></script>*/
/* {% endfor %}*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* */
/*          {% if fbpixel_status %}*/
/*             <!-- Facebook Pixel Code -->*/
/*             <script>*/
/*             !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?*/
/*             n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;*/
/*             n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;*/
/*             t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,*/
/*             document,'script','//connect.facebook.net/en_US/fbevents.js');*/
/* */
/*             fbq('init', '{{ fbpixel_id }}');*/
/*             fbq('track', "PageView");*/
/*             {{ pixel }}*/
/* */
/*             </script>*/
/*             <noscript><img height="1" width="1" style="display:none"*/
/*             src="https://www.facebook.com/tr?id={{ fbpixel_id }}&ev=PageView&noscript=1"*/
/*             /></noscript>*/
/*           <!-- End Facebook Pixel Code -->*/
/*         {% endif %} */
/*       */
/* */
/* 				<style>*/
/* 				.tag {*/
/*     position: absolute;*/
/*     margin:5px 20px 0px 0px;*/
/*     right:0px;*/
/*     font-size: 15px;*/
/*     font-weight: 700;*/
/*     line-height: 25px;*/
/*     width: 55px;*/
/*     height: 55px;*/
/*     font-variant: small-caps;*/
/*     z-index: 100;*/
/*     -webkit-border-radius: 50px;*/
/*     -moz-border-radius: 50px;*/
/*     border-radius: 50px;*/
/*     color: #fff;*/
/*     text-align: center;*/
/*     transition :.6s;*/
/* }*/
/* .tag:hover{*/
/* 	transform:rotate(360deg);*/
/* }*/
/* .tag.hot {*/
/*     background: #ff1353;*/
/* }*/
/* .tag.new {*/
/*         background: #18de0d;*/
/*         color: #000;*/
/* }*/
/* .tag.sale {*/
/*     background: #fdd922;*/
/*     color: #333;*/
/* }*/
/* </style>*/
/*             */
/* </head>*/
/* <body>*/
/* <header>*/
/* {% if not nav %}*/
/*   {% set nav = 'navbar-default' %}*/
/* {% endif %}*/
/* <nav class="navbar {{ nav }}">*/
/*   <div class="container">*/
/*     <div class="navbar-header">*/
/*       <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>*/
/*       {% if logo %}*/
/*       <a class="navbar-brand" href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>*/
/*       {% else %}*/
/*       <a class="navbar-brand" href="{{ home }}">{{ name }}</a>*/
/*       {% endif %}*/
/*     </div>*/
/*     <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*       {{ menu }}*/
/*       <ul class="nav navbar-nav navbar-right">*/
/*         <li id="hiddenM"><a class="btn btn-link" role="button" data-toggle="collapse" href="#hiddenMenu" aria-expanded="false" aria-controls="hiddenMenu"><i class="fa fa-ellipsis-h"></i></a></li>*/
/*         {{ cart }}*/
/*         <li class="dropdown"><a href="{{ account }}" title="{{ text_account }}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><span class="caret"></span></a>*/
/*           <ul class="dropdown-menu dropdown-menu-right">*/
/*             {% if logged %}*/
/*             <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*             <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*             <li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/*             <li><a href="{{ download }}">{{ text_download }}</a></li>*/
/*             <li><a href="{{ logout }}">{{ text_logout }}</a></li>*/
/*             {% else %}*/
/*             <li><a href="{{ register }}">{{ text_register }}</a></li>*/
/*             <li><a href="{{ login }}">{{ text_login }}</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*         </li>*/
/*       </ul>*/
/*     </div>*/
/*     <div class="collapse" id="hiddenMenu">*/
/*       <div class="row">*/
/*         <div class="col-sm-4">*/
/*           {{ currency }}*/
/*         </div>*/
/*         <div class="col-sm-4">*/
/*           {{ language }}*/
/*         </div>*/
/*           <div class="col-sm-4">*/
/*           {{ search }}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </nav>*/
/* </header>*/
/* */
