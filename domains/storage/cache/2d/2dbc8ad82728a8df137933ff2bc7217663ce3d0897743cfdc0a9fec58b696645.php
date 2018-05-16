<?php

/* basecart/template/common/footer.twig */
class __TwigTemplate_55b9fbc337c9b0831017f70300ce735605eafede24f3beff19be26042285dce5 extends Twig_Template
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
        echo "<div class=\"container\">
  <footer>
      <div class=\"row\">
        ";
        // line 4
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            // line 5
            echo "        <div class=\"col-sm-3\">
          <h4>";
            // line 6
            echo (isset($context["text_information"]) ? $context["text_information"] : null);
            echo "</h4>
          <ul class=\"list-group\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 9
                echo "            <li class=\"list-group-item\"><a href=\"";
                echo $this->getAttribute($context["information"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "          </ul>
        </div>
        ";
        }
        // line 14
        echo "        <div class=\"col-sm-3\">
          <h4>";
        // line 15
        echo (isset($context["text_service"]) ? $context["text_service"] : null);
        echo "</h4>
          <ul class=\"list-group\">
            <li class=\"list-group-item\"><a href=\"";
        // line 17
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
            <li class=\"list-group-item\"><a href=\"";
        // line 18
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
            <li class=\"list-group-item\"><a href=\"";
        // line 19
        echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
        echo "\">";
        echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
        echo "</a></li>
          </ul>
        </div>
        <div class=\"col-sm-3\">
          <h4>";
        // line 23
        echo (isset($context["text_extra"]) ? $context["text_extra"] : null);
        echo "</h4>
          <ul class=\"list-group\">
            <li class=\"list-group-item\"><a href=\"";
        // line 25
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\">";
        echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
        echo "</a></li>
            <li class=\"list-group-item\"><a href=\"";
        // line 26
        echo (isset($context["voucher"]) ? $context["voucher"] : null);
        echo "\">";
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</a></li>
            <li class=\"list-group-item\"><a href=\"";
        // line 27
        echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
        echo "\">";
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</a></li>
            <li class=\"list-group-item\"><a href=\"";
        // line 28
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\">";
        echo (isset($context["text_special"]) ? $context["text_special"] : null);
        echo "</a></li>
          </ul>
        </div>
        <div class=\"col-sm-3\">
          <h4>";
        // line 32
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</h4>
          <ul class=\"list-group\">
            <li class=\"list-group-item\"><a href=\"";
        // line 34
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a></li>
            <li class=\"list-group-item\"><a href=\"";
        // line 35
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
            <li class=\"list-group-item\"><a href=\"";
        // line 36
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
            <li class=\"list-group-item\"><a href=\"";
        // line 37
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a></li>
          </ul>
        </div>
      </div>
      <p class=\"text-center text-uppercase text-muted powered\">Design by <a href=\"//themefiber.com/\">themefiber</a>. Powered by <a href=\"https://www.opencart.com/\">OpenCart</a></p>
  </footer>
</div>

            <style>
            #cookie-space {
                display:none;
                height: 51px;
            }    
            #cookie-consent {
                width: 100%;
                position: fixed;
                left: 0px;
                z-index: 999;
                background: none repeat scroll 0% 0% rgba(240, 204, 204, 0.82);
                border-bottom: 1px solid rgba(195, 195, 195, 0.73);
                display: none;
                padding: 10px 0px;
                top: 0px;
            }
            #cookie-consent #accept {
                float: right;
                margin-top: 1px;
                margin-left: 10px;
                background: none repeat scroll 0% 0% rgba(97, 97, 97, 0.65);
                padding: 5px 10px;
                border: medium none;
                color: #FFF;
                cursor: pointer;
            }
            #cookie-inner {
                display: block;
                max-width: 1280px;
                margin-left: auto;
                margin-right: auto;
                padding: 0px 0px;
                min-width: 300px;
            }      
            </style>
            <script type=\"text/javascript\">
                \$(document).ready(function() {
                var myCookie = document.cookie.replace(/(?:(?:^|.*;\\s*)accepted\\s*\\=\\s*([^;]*).*\$)|^.*\$/, \"\$1\");
                    if (myCookie != \"yes\") {
                        \$('#cookie-consent').show();
                        \$('#cookie-space').show();
                        \$('#accept').click(function() {
                            document.cookie = \"accepted=yes; expires=Thu, 18 Dec 2025 12:00:00 GMT; path=/\";
                            \$('#cookie-space').hide();
                            \$('#cookie-consent').hide();
                        });
                    }
                });        
            </script>
            <div id=\"cookie-space\"></div>                
            <div id=\"cookie-consent\">
                <div id=\"cookie-inner\">
                    <div id=\"cookie-text\"><button id=\"accept\">";
        // line 97
        echo (isset($context["text_cookie_close"]) ? $context["text_cookie_close"] : null);
        echo " </button>";
        echo (isset($context["text_cookie"]) ? $context["text_cookie"] : null);
        echo "</div>   
                </div>
             </div>
            
</body>

\t\t\t\t\t\t <style type=\"text/css\">
\t\t\t\t\t\t\t#ToTopHover {
\t\t\t\t\t\t\tcursor: pointer;
\t\t\t\t\t\t\tbackground: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAABmCAYAAABm4qluAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OThENzgzMjVCNzRCMTFFM0EzRDU5MjlENjBGMTBDRUEiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OThENzgzMjZCNzRCMTFFM0EzRDU5MjlENjBGMTBDRUEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5OEQ3ODMyM0I3NEIxMUUzQTNENTkyOUQ2MEYxMENFQSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5OEQ3ODMyNEI3NEIxMUUzQTNENTkyOUQ2MEYxMENFQSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pl4ggucAAAtuSURBVHjazFwLcBbV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) no-repeat left -51px;width: 51px;height: 51px;display: block;overflow: hidden;float: left;opacity: 0;-moz-opacity: 0;filter: alpha(opacity=0);}
\t\t\t\t\t\t\t#ToTop {display: none;text-decoration: none;position: fixed;bottom: 20px;right: 20px;overflow: hidden;width: 51px;height: 51px;border: none;text-indent: -999px;background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAABmCAYAAABm4qluAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OThENzgzMjVCNzRCMTFFM0EzRDU5MjlENjBGMTBDRUEiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OThENzgzMjZCNzRCMTFFM0EzRDU5MjlENjBGMTBDRUEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5OEQ3ODMyM0I3NEIxMUUzQTNENTkyOUQ2MEYxMENFQSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5OEQ3ODMyNEI3NEIxMUUzQTNENTkyOUQ2MEYxMENFQSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pl4ggucAAAtuSURBVHjazFwLcBbV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) no-repeat left top;}
\t\t\t\t\t\t</style>
\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t/* UItoTop jQuery */
\t\t\t\t\t\tjQuery(document).ready(function(){\$().UItoTop({easingType:'easeOutQuint'});});
\t\t\t\t\t\t(function(\$){
\t\t\t\t\t\t\t\$.fn.UItoTop = function(options) {
\t\t\t\t\t\t\t\tvar defaults = {
\t\t\t\t\t\t\t\t\ttext: 'To Top',
\t\t\t\t\t\t\t\t\tmin: 200,
\t\t\t\t\t\t\t\t\tinDelay:600,
\t\t\t\t\t\t\t\t\toutDelay:400,
\t\t\t\t\t\t\t\t\tcontainerID: 'ToTop',
\t\t\t\t\t\t\t\t\tcontainerHoverID: 'ToTopHover',
\t\t\t\t\t\t\t\t\tscrollSpeed: 400,
\t\t\t\t\t\t\t\t\teasingType: 'linear'
\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t\tvar settings = \$.extend(defaults, options);
\t\t\t\t\t\t\t\tvar containerIDhash = '#' + settings.containerID;
\t\t\t\t\t\t\t\tvar containerHoverIDHash = '#'+settings.containerHoverID;
\t\t\t\t\t\t\t\t\$('body').append('<span id=\"'+settings.containerID+'\">'+settings.text+'</span>');
\t\t\t\t\t\t\t\t\$(containerIDhash).hide().click(function(event){
\t\t\t\t\t\t\t\t\t\$('html, body').animate({scrollTop: 0}, settings.scrollSpeed);
\t\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t.prepend('<span id=\"'+settings.containerHoverID+'\"></span>')
\t\t\t\t\t\t\t\t.hover(function() {
\t\t\t\t\t\t\t\t\t\t\$(containerHoverIDHash, this).stop().animate({
\t\t\t\t\t\t\t\t\t\t\t'opacity': 1
\t\t\t\t\t\t\t\t\t\t}, 600, 'linear');
\t\t\t\t\t\t\t\t\t}, function() { 
\t\t\t\t\t\t\t\t\t\t\$(containerHoverIDHash, this).stop().animate({
\t\t\t\t\t\t\t\t\t\t\t'opacity': 0
\t\t\t\t\t\t\t\t\t\t}, 700, 'linear');
\t\t\t\t\t\t\t\t\t});\t\t\t
\t\t\t\t\t\t\t\t\$(window).scroll(function() {
\t\t\t\t\t\t\t\t\tvar sd = \$(window).scrollTop();
\t\t\t\t\t\t\t\t\tif(typeof document.body.style.maxHeight === \"undefined\") {
\t\t\t\t\t\t\t\t\t\t\$(containerIDhash).css({
\t\t\t\t\t\t\t\t\t\t\t'position': 'absolute',
\t\t\t\t\t\t\t\t\t\t\t'top': \$(window).scrollTop() + \$(window).height() - 50
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tif ( sd > settings.min ) 
\t\t\t\t\t\t\t\t\t\t\$(containerIDhash).fadeIn(settings.inDelay);
\t\t\t\t\t\t\t\t\telse 
\t\t\t\t\t\t\t\t\t\t\$(containerIDhash).fadeOut(settings.Outdelay);
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t};
\t\t\t\t\t\t})(jQuery);
\t\t\t\t\t\t</script>
                        
</html>
";
    }

    public function getTemplateName()
    {
        return "basecart/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 97,  138 => 37,  132 => 36,  126 => 35,  120 => 34,  115 => 32,  106 => 28,  100 => 27,  94 => 26,  88 => 25,  83 => 23,  74 => 19,  68 => 18,  62 => 17,  57 => 15,  54 => 14,  49 => 11,  38 => 9,  34 => 8,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="container">*/
/*   <footer>*/
/*       <div class="row">*/
/*         {% if informations %}*/
/*         <div class="col-sm-3">*/
/*           <h4>{{ text_information }}</h4>*/
/*           <ul class="list-group">*/
/*             {% for information in informations %}*/
/*             <li class="list-group-item"><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*         {% endif %}*/
/*         <div class="col-sm-3">*/
/*           <h4>{{ text_service }}</h4>*/
/*           <ul class="list-group">*/
/*             <li class="list-group-item"><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*             <li class="list-group-item"><a href="{{ return }}">{{ text_return }}</a></li>*/
/*             <li class="list-group-item"><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/*           </ul>*/
/*         </div>*/
/*         <div class="col-sm-3">*/
/*           <h4>{{ text_extra }}</h4>*/
/*           <ul class="list-group">*/
/*             <li class="list-group-item"><a href="{{ manufacturer }}">{{ text_manufacturer }}</a></li>*/
/*             <li class="list-group-item"><a href="{{ voucher }}">{{ text_voucher }}</a></li>*/
/*             <li class="list-group-item"><a href="{{ affiliate }}">{{ text_affiliate }}</a></li>*/
/*             <li class="list-group-item"><a href="{{ special }}">{{ text_special }}</a></li>*/
/*           </ul>*/
/*         </div>*/
/*         <div class="col-sm-3">*/
/*           <h4>{{ text_account }}</h4>*/
/*           <ul class="list-group">*/
/*             <li class="list-group-item"><a href="{{ account }}">{{ text_account }}</a></li>*/
/*             <li class="list-group-item"><a href="{{ order }}">{{ text_order }}</a></li>*/
/*             <li class="list-group-item"><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/*             <li class="list-group-item"><a href="{{ newsletter }}">{{ text_newsletter }}</a></li>*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*       <p class="text-center text-uppercase text-muted powered">Design by <a href="//themefiber.com/">themefiber</a>. Powered by <a href="https://www.opencart.com/">OpenCart</a></p>*/
/*   </footer>*/
/* </div>*/
/* */
/*             <style>*/
/*             #cookie-space {*/
/*                 display:none;*/
/*                 height: 51px;*/
/*             }    */
/*             #cookie-consent {*/
/*                 width: 100%;*/
/*                 position: fixed;*/
/*                 left: 0px;*/
/*                 z-index: 999;*/
/*                 background: none repeat scroll 0% 0% rgba(240, 204, 204, 0.82);*/
/*                 border-bottom: 1px solid rgba(195, 195, 195, 0.73);*/
/*                 display: none;*/
/*                 padding: 10px 0px;*/
/*                 top: 0px;*/
/*             }*/
/*             #cookie-consent #accept {*/
/*                 float: right;*/
/*                 margin-top: 1px;*/
/*                 margin-left: 10px;*/
/*                 background: none repeat scroll 0% 0% rgba(97, 97, 97, 0.65);*/
/*                 padding: 5px 10px;*/
/*                 border: medium none;*/
/*                 color: #FFF;*/
/*                 cursor: pointer;*/
/*             }*/
/*             #cookie-inner {*/
/*                 display: block;*/
/*                 max-width: 1280px;*/
/*                 margin-left: auto;*/
/*                 margin-right: auto;*/
/*                 padding: 0px 0px;*/
/*                 min-width: 300px;*/
/*             }      */
/*             </style>*/
/*             <script type="text/javascript">*/
/*                 $(document).ready(function() {*/
/*                 var myCookie = document.cookie.replace(/(?:(?:^|.*;\s*)accepted\s*\=\s*([^;]*).*$)|^.*$/, "$1");*/
/*                     if (myCookie != "yes") {*/
/*                         $('#cookie-consent').show();*/
/*                         $('#cookie-space').show();*/
/*                         $('#accept').click(function() {*/
/*                             document.cookie = "accepted=yes; expires=Thu, 18 Dec 2025 12:00:00 GMT; path=/";*/
/*                             $('#cookie-space').hide();*/
/*                             $('#cookie-consent').hide();*/
/*                         });*/
/*                     }*/
/*                 });        */
/*             </script>*/
/*             <div id="cookie-space"></div>                */
/*             <div id="cookie-consent">*/
/*                 <div id="cookie-inner">*/
/*                     <div id="cookie-text"><button id="accept">{{ text_cookie_close }} </button>{{ text_cookie }}</div>   */
/*                 </div>*/
/*              </div>*/
/*             */
/* </body>*/
/* */
/* 						 <style type="text/css">*/
/* 							#ToTopHover {*/
/* 							cursor: pointer;*/
/* 							background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAABmCAYAAABm4qluAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OThENzgzMjVCNzRCMTFFM0EzRDU5MjlENjBGMTBDRUEiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OThENzgzMjZCNzRCMTFFM0EzRDU5MjlENjBGMTBDRUEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5OEQ3ODMyM0I3NEIxMUUzQTNENTkyOUQ2MEYxMENFQSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5OEQ3ODMyNEI3NEIxMUUzQTNENTkyOUQ2MEYxMENFQSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pl4ggucAAAtuSURBVHjazFwLcBbV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) no-repeat left -51px;width: 51px;height: 51px;display: block;overflow: hidden;float: left;opacity: 0;-moz-opacity: 0;filter: alpha(opacity=0);}*/
/* 							#ToTop {display: none;text-decoration: none;position: fixed;bottom: 20px;right: 20px;overflow: hidden;width: 51px;height: 51px;border: none;text-indent: -999px;background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAABmCAYAAABm4qluAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OThENzgzMjVCNzRCMTFFM0EzRDU5MjlENjBGMTBDRUEiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OThENzgzMjZCNzRCMTFFM0EzRDU5MjlENjBGMTBDRUEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5OEQ3ODMyM0I3NEIxMUUzQTNENTkyOUQ2MEYxMENFQSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5OEQ3ODMyNEI3NEIxMUUzQTNENTkyOUQ2MEYxMENFQSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pl4ggucAAAtuSURBVHjazFwLcBbV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) no-repeat left top;}*/
/* 						</style>*/
/* 						<script type="text/javascript">*/
/* 						/* UItoTop jQuery *//* */
/* 						jQuery(document).ready(function(){$().UItoTop({easingType:'easeOutQuint'});});*/
/* 						(function($){*/
/* 							$.fn.UItoTop = function(options) {*/
/* 								var defaults = {*/
/* 									text: 'To Top',*/
/* 									min: 200,*/
/* 									inDelay:600,*/
/* 									outDelay:400,*/
/* 									containerID: 'ToTop',*/
/* 									containerHoverID: 'ToTopHover',*/
/* 									scrollSpeed: 400,*/
/* 									easingType: 'linear'*/
/* 								};*/
/* 								var settings = $.extend(defaults, options);*/
/* 								var containerIDhash = '#' + settings.containerID;*/
/* 								var containerHoverIDHash = '#'+settings.containerHoverID;*/
/* 								$('body').append('<span id="'+settings.containerID+'">'+settings.text+'</span>');*/
/* 								$(containerIDhash).hide().click(function(event){*/
/* 									$('html, body').animate({scrollTop: 0}, settings.scrollSpeed);*/
/* 									event.preventDefault();*/
/* 								})*/
/* 								.prepend('<span id="'+settings.containerHoverID+'"></span>')*/
/* 								.hover(function() {*/
/* 										$(containerHoverIDHash, this).stop().animate({*/
/* 											'opacity': 1*/
/* 										}, 600, 'linear');*/
/* 									}, function() { */
/* 										$(containerHoverIDHash, this).stop().animate({*/
/* 											'opacity': 0*/
/* 										}, 700, 'linear');*/
/* 									});			*/
/* 								$(window).scroll(function() {*/
/* 									var sd = $(window).scrollTop();*/
/* 									if(typeof document.body.style.maxHeight === "undefined") {*/
/* 										$(containerIDhash).css({*/
/* 											'position': 'absolute',*/
/* 											'top': $(window).scrollTop() + $(window).height() - 50*/
/* 										});*/
/* 									}*/
/* 									if ( sd > settings.min ) */
/* 										$(containerIDhash).fadeIn(settings.inDelay);*/
/* 									else */
/* 										$(containerIDhash).fadeOut(settings.Outdelay);*/
/* 								});*/
/* 						};*/
/* 						})(jQuery);*/
/* 						</script>*/
/*                         */
/* </html>*/
/* */
