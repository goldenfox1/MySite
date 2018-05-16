<?php

/* basecart/template/common/simple_row_field.twig */
class __TwigTemplate_e35112c02849c50a86c8ab22a9cbae08ee2112871f95d4773a06c3b8061257da extends Twig_Template
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
        echo "<div class=\"form-group ";
        if ((isset($context["required"]) ? $context["required"] : null)) {
            echo "required";
        }
        echo " row-";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\">
    <label class=\"control-label ";
        // line 2
        echo ((((isset($context["page"]) ? $context["page"] : null) == "checkout")) ? ("col-sm-4") : ("col-sm-2"));
        echo "\" for=\"";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\">";
        echo (isset($context["label"]) ? $context["label"] : null);
        echo "</label>
    <div class=\"";
        // line 3
        echo ((((isset($context["page"]) ? $context["page"] : null) == "checkout")) ? ("col-sm-8") : ("col-sm-10"));
        echo "\">
      ";
        // line 4
        if ((((isset($context["type"]) ? $context["type"] : null) == "select") || ((isset($context["type"]) ? $context["type"] : null) == "select2"))) {
            // line 5
            echo "        <select class=\"form-control\" name=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" id=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\" ";
            echo (((isset($context["bootstrap"]) ? $context["bootstrap"] : null)) ? ("data-theme=\"bootstrap\"") : (""));
            echo " ";
            echo ((((isset($context["type"]) ? $context["type"] : null) == "select2")) ? ("data-type=\"select2\"") : (""));
            echo " ";
            echo (((isset($context["reload"]) ? $context["reload"] : null)) ? ("data-onchange=\"reloadAll\"") : ("data-reload-payment-form=\"true\""));
            echo ">
          ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["values"]) ? $context["values"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                // line 7
                echo "            <option value=\"";
                echo $this->getAttribute($context["info"], "id", array(), "array");
                echo "\" ";
                echo ((((isset($context["value"]) ? $context["value"] : null) == $this->getAttribute($context["info"], "id", array(), "array"))) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo $this->getAttribute($context["info"], "text", array(), "array");
                echo "</option>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        </select>
      ";
        } elseif ((        // line 10
(isset($context["type"]) ? $context["type"] : null) == "radio")) {
            // line 11
            echo "        <div>
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["values"]) ? $context["values"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                // line 13
                echo "          <div class=\"radio\">
            <label><input type=\"radio\" name=\"";
                // line 14
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "\" id=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "\" value=\"";
                echo $this->getAttribute($context["info"], "id", array(), "array");
                echo "\" ";
                echo ((((isset($context["value"]) ? $context["value"] : null) == $this->getAttribute($context["info"], "id", array(), "array"))) ? ("checked=\"checked\"") : (""));
                echo " ";
                echo (((isset($context["reload"]) ? $context["reload"] : null)) ? ("data-onchange=\"reloadAll\"") : ("data-reload-payment-form=\"true\""));
                echo ">";
                echo $this->getAttribute($context["info"], "text", array(), "array");
                echo "</label>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        </div>
      ";
        } elseif ((        // line 18
(isset($context["type"]) ? $context["type"] : null) == "checkbox")) {
            // line 19
            echo "        <div>
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["values"]) ? $context["values"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                // line 21
                echo "          <div class=\"checkbox\">
            <input type=\"hidden\" name=\"";
                // line 22
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "[";
                echo $this->getAttribute($context["info"], "id", array(), "array");
                echo "]\" value=\"0\">
            <label><input type=\"checkbox\" name=\"";
                // line 23
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "[";
                echo $this->getAttribute($context["info"], "id", array(), "array");
                echo "]\" id=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "\" value=\"1\" ";
                echo (( !twig_test_empty($this->getAttribute((isset($context["value"]) ? $context["value"] : null), $this->getAttribute($context["info"], "id", array(), "array"), array(), "array"))) ? ("checked=\"checked\"") : (""));
                echo " ";
                echo (((isset($context["reload"]) ? $context["reload"] : null)) ? ("data-onchange=\"reloadAll\"") : ("data-reload-payment-form=\"true\""));
                echo ">";
                echo $this->getAttribute($context["info"], "text", array(), "array");
                echo "</label>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        </div>
      ";
        } elseif ((        // line 27
(isset($context["type"]) ? $context["type"] : null) == "textarea")) {
            // line 28
            echo "        <textarea class=\"form-control\" name=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" id=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\" placeholder=\"";
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "\" ";
            echo (((isset($context["reload"]) ? $context["reload"] : null)) ? ("data-onchange=\"reloadAll\"") : ("data-reload-payment-form=\"true\""));
            echo ">";
            echo (isset($context["value"]) ? $context["value"] : null);
            echo "</textarea>
      ";
        } elseif ((        // line 29
(isset($context["type"]) ? $context["type"] : null) == "captcha")) {
            // line 30
            echo "        ";
            if ((isset($context["site_key"]) ? $context["site_key"] : null)) {
                // line 31
                echo "          <script src=\"https://www.google.com/recaptcha/api.js?hl=";
                echo (isset($context["lang"]) ? $context["lang"] : null);
                echo "\" type=\"text/javascript\"></script>
          <input type=\"hidden\" name=\"";
                // line 32
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "\" id=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "\" value=\"";
                echo (isset($context["value"]) ? $context["value"] : null);
                echo "\">
          <script type=\"text/javascript\">function recaptchaCallback(value){\$('#";
                // line 33
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "').val(value).trigger('change')}</script>
          <div class=\"g-recaptcha\" data-sitekey=\"";
                // line 34
                echo (isset($context["site_key"]) ? $context["site_key"] : null);
                echo "\" data-callback=\"recaptchaCallback\"></div>
        ";
            } else {
                // line 36
                echo "          <input type=\"text\" class=\"form-control\" name=\"";
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "\" id=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "\" value=\"\" placeholder=\"";
                echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
                echo "\" ";
                echo (((isset($context["reload"]) ? $context["reload"] : null)) ? ("data-onchange=\"reloadAll\"") : ("data-reload-payment-form=\"true\""));
                echo ">
          <div class=\"simple-captcha-container\"><img src=\"index.php?";
                // line 37
                echo (isset($context["additional_path"]) ? $context["additional_path"] : null);
                echo "route=common/simple_connector/captcha&t=";
                echo (isset($context["time"]) ? $context["time"] : null);
                echo "\" alt=\"\" id=\"captcha\" /></div>
        ";
            }
            // line 39
            echo "      ";
        } elseif (((isset($context["type"]) ? $context["type"] : null) == "file")) {
            // line 40
            echo "        <input type=\"button\" value=\"";
            echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
            echo "\" data-file=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\" class=\"button form-control\">
        <div id=\"text_";
            // line 41
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\" style=\"margin-top:3px;max-width:200px;\">";
            echo (isset($context["filename"]) ? $context["filename"] : null);
            echo "</div>
        <input type=\"hidden\" name=\"";
            // line 42
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" id=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\" value=\"";
            echo (isset($context["value"]) ? $context["value"] : null);
            echo "\">
      ";
        } elseif ((        // line 43
(isset($context["type"]) ? $context["type"] : null) == "date")) {
            // line 44
            echo "        <div class=\"input-group date\">
          <input class=\"form-control\" type=\"text\" name=\"";
            // line 45
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" id=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\" value=\"";
            echo (isset($context["value"]) ? $context["value"] : null);
            echo "\" placeholder=\"";
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "\" ";
            echo (isset($context["attrs"]) ? $context["attrs"] : null);
            echo " ";
            echo (((isset($context["reload"]) ? $context["reload"] : null)) ? ("data-onchange=\"reloadAll\"") : ("data-reload-payment-form=\"true\""));
            echo ">
          <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span>
        </div>
      ";
        } elseif ((        // line 50
(isset($context["type"]) ? $context["type"] : null) == "time")) {
            // line 51
            echo "      <div class=\"input-group time\">
        <input class=\"form-control\" type=\"text\" name=\"";
            // line 52
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" id=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\" value=\"";
            echo (isset($context["value"]) ? $context["value"] : null);
            echo "\" placeholder=\"";
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "\" ";
            echo (isset($context["attrs"]) ? $context["attrs"] : null);
            echo " ";
            echo (((isset($context["reload"]) ? $context["reload"] : null)) ? ("data-onchange=\"reloadAll\"") : ("data-reload-payment-form=\"true\""));
            echo ">
        <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-clock-o\"></i></button>
        </span>
      </div>
      ";
        } else {
            // line 58
            echo "        <input  class=\"form-control\" type=\"";
            echo (isset($context["type"]) ? $context["type"] : null);
            echo "\" name=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" id=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\" value=\"";
            echo (isset($context["value"]) ? $context["value"] : null);
            echo "\" placeholder=\"";
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "\" ";
            echo (isset($context["attrs"]) ? $context["attrs"] : null);
            echo " ";
            echo (((isset($context["reload"]) ? $context["reload"] : null)) ? ("data-onchange=\"reloadAll\"") : ("data-reload-payment-form=\"true\""));
            echo ">
      ";
        }
        // line 60
        echo "      ";
        if ( !twig_test_empty((isset($context["rules"]) ? $context["rules"] : null))) {
            // line 61
            echo "        <div class=\"simplecheckout-rule-group\" data-for=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\">
          ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rules"]) ? $context["rules"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
                // line 63
                echo "            <div ";
                echo ((($this->getAttribute($context["rule"], "display", array(), "array") &&  !$this->getAttribute($context["rule"], "passed", array(), "array"))) ? ("") : ("style=\"display:none;\""));
                echo " data-for=\"";
                echo (isset($context["id"]) ? $context["id"] : null);
                echo "\" data-rule=\"";
                echo $this->getAttribute($context["rule"], "id", array(), "array");
                echo "\" class=\"simplecheckout-error-text simplecheckout-rule\" ";
                echo $this->getAttribute($context["rule"], "attrs", array(), "array");
                echo ">";
                echo $this->getAttribute($context["rule"], "text", array(), "array");
                echo "</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "        </div>
      ";
        }
        // line 67
        echo "      ";
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 68
            echo "        <div class=\"simplecheckout-tooltip\" data-for=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "\">";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "</div>
      ";
        }
        // line 70
        echo "    </div>
 </div>";
    }

    public function getTemplateName()
    {
        return "basecart/template/common/simple_row_field.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 70,  334 => 68,  331 => 67,  327 => 65,  310 => 63,  306 => 62,  301 => 61,  298 => 60,  280 => 58,  261 => 52,  258 => 51,  256 => 50,  238 => 45,  235 => 44,  233 => 43,  225 => 42,  219 => 41,  212 => 40,  209 => 39,  202 => 37,  191 => 36,  186 => 34,  182 => 33,  174 => 32,  169 => 31,  166 => 30,  164 => 29,  151 => 28,  149 => 27,  146 => 26,  127 => 23,  121 => 22,  118 => 21,  114 => 20,  111 => 19,  109 => 18,  106 => 17,  87 => 14,  84 => 13,  80 => 12,  77 => 11,  75 => 10,  72 => 9,  59 => 7,  55 => 6,  42 => 5,  40 => 4,  36 => 3,  28 => 2,  19 => 1,);
    }
}
/* <div class="form-group {% if required %}required{% endif %} row-{{id}}">*/
/*     <label class="control-label {{page == 'checkout' ? 'col-sm-4' : 'col-sm-2' }}" for="{{id}}">{{label}}</label>*/
/*     <div class="{{page == 'checkout' ? 'col-sm-8' : 'col-sm-10'}}">*/
/*       {% if type == 'select' or type == 'select2' %}*/
/*         <select class="form-control" name="{{ name }}" id="{{ id }}" {{ bootstrap ? 'data-theme="bootstrap"' : '' }} {{ type == 'select2' ? 'data-type="select2"' : '' }} {{ reload ? 'data-onchange="reloadAll"' : 'data-reload-payment-form="true"'}}>*/
/*           {% for info in values %}*/
/*             <option value="{{ info['id'] }}" {{ value == info['id'] ? 'selected="selected"' : '' }}>{{ info['text'] }}</option>*/
/*           {% endfor %}*/
/*         </select>*/
/*       {% elseif type == 'radio' %}*/
/*         <div>*/
/*         {% for info in values %}*/
/*           <div class="radio">*/
/*             <label><input type="radio" name="{{ name }}" id="{{ id }}" value="{{ info['id'] }}" {{ value == info['id'] ? 'checked="checked"' : '' }} {{ reload ? 'data-onchange="reloadAll"' : 'data-reload-payment-form="true"' }}>{{ info['text'] }}</label>*/
/*           </div>*/
/*         {% endfor %}*/
/*         </div>*/
/*       {% elseif type == 'checkbox' %}*/
/*         <div>*/
/*         {% for info in values %}*/
/*           <div class="checkbox">*/
/*             <input type="hidden" name="{{ name }}[{{ info['id'] }}]" value="0">*/
/*             <label><input type="checkbox" name="{{ name }}[{{ info['id'] }}]" id="{{ id }}" value="1" {{ value[info['id']] is not empty ? 'checked="checked"' : '' }} {{ reload ? 'data-onchange="reloadAll"' : 'data-reload-payment-form="true"'}}>{{ info['text'] }}</label>*/
/*           </div>*/
/*         {% endfor %}*/
/*         </div>*/
/*       {% elseif type == 'textarea' %}*/
/*         <textarea class="form-control" name="{{ name }}" id="{{ id }}" placeholder="{{ placeholder }}" {{ reload ? 'data-onchange="reloadAll"' : 'data-reload-payment-form="true"'}}>{{ value }}</textarea>*/
/*       {% elseif type == 'captcha' %}*/
/*         {% if site_key %}*/
/*           <script src="https://www.google.com/recaptcha/api.js?hl={{ lang }}" type="text/javascript"></script>*/
/*           <input type="hidden" name="{{ name }}" id="{{ id }}" value="{{ value }}">*/
/*           <script type="text/javascript">function recaptchaCallback(value){$('#{{ id }}').val(value).trigger('change')}</script>*/
/*           <div class="g-recaptcha" data-sitekey="{{ site_key }}" data-callback="recaptchaCallback"></div>*/
/*         {% else %}*/
/*           <input type="text" class="form-control" name="{{ name }}" id="{{ id }}" value="" placeholder="{{ placeholder }}" {{ reload ? 'data-onchange="reloadAll"' : 'data-reload-payment-form="true"'}}>*/
/*           <div class="simple-captcha-container"><img src="index.php?{{ additional_path }}route=common/simple_connector/captcha&t={{ time }}" alt="" id="captcha" /></div>*/
/*         {% endif %}*/
/*       {% elseif type == 'file' %}*/
/*         <input type="button" value="{{ button_upload }}" data-file="{{ id }}" class="button form-control">*/
/*         <div id="text_{{ id }}" style="margin-top:3px;max-width:200px;">{{ filename }}</div>*/
/*         <input type="hidden" name="{{ name }}" id="{{ id }}" value="{{ value }}">*/
/*       {% elseif type == 'date' %}*/
/*         <div class="input-group date">*/
/*           <input class="form-control" type="text" name="{{ name }}" id="{{ id }}" value="{{ value }}" placeholder="{{ placeholder }}" {{ attrs }} {{ reload ? 'data-onchange="reloadAll"' : 'data-reload-payment-form="true"'}}>*/
/*           <span class="input-group-btn">*/
/*             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*           </span>*/
/*         </div>*/
/*       {% elseif type == 'time' %}*/
/*       <div class="input-group time">*/
/*         <input class="form-control" type="text" name="{{ name }}" id="{{ id }}" value="{{ value }}" placeholder="{{ placeholder }}" {{ attrs }} {{ reload ? 'data-onchange="reloadAll"' : 'data-reload-payment-form="true"'}}>*/
/*         <span class="input-group-btn">*/
/*           <button type="button" class="btn btn-default"><i class="fa fa-clock-o"></i></button>*/
/*         </span>*/
/*       </div>*/
/*       {% else %}*/
/*         <input  class="form-control" type="{{ type }}" name="{{ name }}" id="{{ id }}" value="{{ value }}" placeholder="{{ placeholder }}" {{ attrs }} {{ reload ? 'data-onchange="reloadAll"' : 'data-reload-payment-form="true"'}}>*/
/*       {% endif %}*/
/*       {% if rules is not empty %}*/
/*         <div class="simplecheckout-rule-group" data-for="{{ id }}">*/
/*           {% for rule in rules %}*/
/*             <div {{ rule['display'] and not rule['passed'] ? '' : 'style="display:none;"' }} data-for="{{ id }}" data-rule="{{ rule['id'] }}" class="simplecheckout-error-text simplecheckout-rule" {{ rule['attrs'] }}>{{ rule['text'] }}</div>*/
/*           {% endfor %}*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if description %}*/
/*         <div class="simplecheckout-tooltip" data-for="{{ id }}">{{ description }}</div>*/
/*       {% endif %}*/
/*     </div>*/
/*  </div>*/
