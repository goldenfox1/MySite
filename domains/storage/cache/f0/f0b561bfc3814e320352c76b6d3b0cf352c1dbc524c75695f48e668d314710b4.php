<?php

/* common/footer.twig */
class __TwigTemplate_a63f962f78c5542dfb30d501a244fb415de24242319b872e892678326e51d446 extends Twig_Template
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
        echo "<footer id=\"footer\">";
        echo (isset($context["text_footer"]) ? $context["text_footer"] : null);
        echo "<br />";
        echo (isset($context["text_version"]) ? $context["text_version"] : null);
        echo "</footer></div>

<style>.buttons_fixed {position:fixed;right:0px;background:#fff;z-index:999;border: 1px solid #f2f2f2;padding:10px 20px;border-radius:3px;top:0px;}</style>
<script>
\$(function() {
 var header_height = \$('header').outerHeight(true),
      buttons = \$('.page-header .pull-right');
               
    \$(document).on(\"scroll\", function() {
        var scroll = \$(document).scrollTop();
        if (scroll > header_height)
            buttons.addClass('buttons_fixed');
            else
            buttons.removeClass('buttons_fixed');
    });
});
</script>
\t\t    
</body></html>
";
    }

    public function getTemplateName()
    {
        return "common/footer.twig";
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
/* <footer id="footer">{{ text_footer }}<br />{{ text_version }}</footer></div>*/
/* */
/* <style>.buttons_fixed {position:fixed;right:0px;background:#fff;z-index:999;border: 1px solid #f2f2f2;padding:10px 20px;border-radius:3px;top:0px;}</style>*/
/* <script>*/
/* $(function() {*/
/*  var header_height = $('header').outerHeight(true),*/
/*       buttons = $('.page-header .pull-right');*/
/*                */
/*     $(document).on("scroll", function() {*/
/*         var scroll = $(document).scrollTop();*/
/*         if (scroll > header_height)*/
/*             buttons.addClass('buttons_fixed');*/
/*             else*/
/*             buttons.removeClass('buttons_fixed');*/
/*     });*/
/* });*/
/* </script>*/
/* 		    */
/* </body></html>*/
/* */
