<?php

/* extension/extension/module.twig */
class __TwigTemplate_7fbb09c94cd78be72607f84e3b252350ef207e54510de46ca8a58c9a21db40b6 extends Twig_Template
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
        echo "<fieldset id=\"listFilter\">
  <legend>";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</legend>

<div class=\"input-group\">
    <input id=\"typefilter\" class=\"search form-control\" placeholder=\"";
        // line 5
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "\" title=\"";
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "\" autofocus />
    <span class=\"input-group-btn\"><button class=\"btn btn-default\" type=\"button\" data-state=\"1\" id=\"toglechild\" title=\"";
        // line 6
        echo (isset($context["text_togglechild"]) ? $context["text_togglechild"] : null);
        echo "\"><i class=\"fa fa-arrow-up\"></i></button></span>
    <span class=\"input-group-btn\"><button class=\"btn btn-default sort\" type=\"button\" data-sort=\"name\" title=\"";
        // line 7
        echo (isset($context["text_sortname"]) ? $context["text_sortname"] : null);
        echo "\"><i class=\"fa fa-sort-alpha-asc\"></i></button></span>
    <span class=\"input-group-btn\"><button class=\"btn btn-default sort\" type=\"button\" data-sort=\"status\" title=\"";
        // line 8
        echo (isset($context["text_sortstatus"]) ? $context["text_sortstatus"] : null);
        echo "\"><i class=\"fa fa-toggle-on \"></i></button></span>
    <span class=\"input-group-btn\"><button class=\"btn btn-default\" type=\"button\" id=\"refreshlist\" title=\"";
        // line 9
        echo (isset($context["text_refresh"]) ? $context["text_refresh"] : null);
        echo "\"><i class=\"fa fa-refresh\"></i></button></span>
</div>
<script type=\"text/javascript\"><!--
    var objList = new List('listFilter', {
        valueNames: ['name', 'status']
    });
    \$('#typefilter').focus();
    \$('#toglechild').click(function() {
        \$('#typefilter').val('');
        objList.search(''); // Remove filters
        if (\$(this).data('state') == 0) {
            \$('.child').parent().show();
            \$(this).data('state', '1');
            \$(this).html('<i class=\"fa fa-arrow-up\"></i>');
        } else {
            \$('.child').parent().hide();
            \$(this).data('state', '0');
            \$(this).html('<i class=\"fa fa-arrow-down\"></i>');
        }
    });
    \$('#refreshlist').click(function() {
        objList.clear(); // clear list
        \$('select[name=\"type\"]').trigger('change');
    });
//--></script>
         
  ";
        // line 35
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 36
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 40
        echo "  ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 41
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 45
        echo "  <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        echo (isset($context["text_layout"]) ? $context["text_layout"] : null);
        echo "</div>
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-left\">";
        // line 50
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
          <td class=\"text-left\">";
        // line 51
        echo (isset($context["column_status"]) ? $context["column_status"] : null);
        echo "</td>
          <td class=\"text-right text-nowrap\">";
        // line 52
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
        </tr>
      </thead>
      <tbody class=\"list\">
      
      ";
        // line 57
        if ((isset($context["extensions"]) ? $context["extensions"] : null)) {
            // line 58
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 59
                echo "      <tr>
        <td class=\"name\"><b>";
                // line 60
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</b></td>
        <td class=\"text-left status\">";
                // line 61
                echo (($this->getAttribute($context["extension"], "module", array())) ? ("") : ($this->getAttribute($context["extension"], "status", array())));
                echo "</td>
        <td class=\"text-right text-nowrap\">";
                // line 62
                if ($this->getAttribute($context["extension"], "installed", array())) {
                    // line 63
                    echo "          ";
                    if ($this->getAttribute($context["extension"], "module", array())) {
                        echo " <a href=\"";
                        echo $this->getAttribute($context["extension"], "edit", array());
                        echo "\" data-toggle=\"tooltip\" title=\"";
                        echo (isset($context["button_add"]) ? $context["button_add"] : null);
                        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></a> ";
                    } else {
                        echo " <a href=\"";
                        echo $this->getAttribute($context["extension"], "edit", array());
                        echo "\" data-toggle=\"tooltip\" title=\"";
                        echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a> ";
                    }
                    // line 64
                    echo "          ";
                } else {
                    // line 65
                    echo "          <button type=\"button\" class=\"btn btn-primary\" disabled=\"disabled\"><i class=\"fa fa-pencil\"></i></button>
          ";
                }
                // line 67
                echo "          ";
                if ( !$this->getAttribute($context["extension"], "installed", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["extension"], "install", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_install"]) ? $context["button_install"] : null);
                    echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></a> ";
                } else {
                    echo " <a href=\"";
                    echo $this->getAttribute($context["extension"], "uninstall", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_uninstall"]) ? $context["button_uninstall"] : null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>";
                }
                echo "</td>
      </tr>
      ";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 70
                    echo "      <tr>
        <td class=\"text-left name child\">&nbsp;&nbsp;&nbsp;<i class=\"fa fa-folder-open\"></i>&nbsp;&nbsp;&nbsp;";
                    // line 71
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</td>
        <td class=\"text-left status\">";
                    // line 72
                    echo $this->getAttribute($context["module"], "status", array());
                    echo "</td>
        <td class=\"text-right text-nowrap\"><a href=\"";
                    // line 73
                    echo $this->getAttribute($context["module"], "edit", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                    echo "\" class=\"btn btn-info\"><i class=\"fa fa-pencil\"></i></a> <a href=\"";
                    echo $this->getAttribute($context["module"], "delete", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
                    echo "\" class=\"btn btn-warning\"><i class=\"fa fa-trash-o\"></i></a></td>
      </tr>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "      ";
        } else {
            // line 78
            echo "      <tr>
        <td class=\"text-center\" colspan=\"3\">";
            // line 79
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
      </tr>
      ";
        }
        // line 82
        echo "      </tbody>
      
    </table>
  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "extension/extension/module.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 82,  223 => 79,  220 => 78,  217 => 77,  211 => 76,  196 => 73,  192 => 72,  188 => 71,  185 => 70,  181 => 69,  163 => 67,  159 => 65,  156 => 64,  141 => 63,  139 => 62,  135 => 61,  131 => 60,  128 => 59,  123 => 58,  121 => 57,  113 => 52,  109 => 51,  105 => 50,  96 => 45,  88 => 41,  85 => 40,  77 => 36,  75 => 35,  46 => 9,  42 => 8,  38 => 7,  34 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }
}
/* <fieldset id="listFilter">*/
/*   <legend>{{ heading_title }}</legend>*/
/* */
/* <div class="input-group">*/
/*     <input id="typefilter" class="search form-control" placeholder="{{ text_filter }}" title="{{ text_filter }}" autofocus />*/
/*     <span class="input-group-btn"><button class="btn btn-default" type="button" data-state="1" id="toglechild" title="{{ text_togglechild }}"><i class="fa fa-arrow-up"></i></button></span>*/
/*     <span class="input-group-btn"><button class="btn btn-default sort" type="button" data-sort="name" title="{{ text_sortname }}"><i class="fa fa-sort-alpha-asc"></i></button></span>*/
/*     <span class="input-group-btn"><button class="btn btn-default sort" type="button" data-sort="status" title="{{ text_sortstatus }}"><i class="fa fa-toggle-on "></i></button></span>*/
/*     <span class="input-group-btn"><button class="btn btn-default" type="button" id="refreshlist" title="{{ text_refresh }}"><i class="fa fa-refresh"></i></button></span>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/*     var objList = new List('listFilter', {*/
/*         valueNames: ['name', 'status']*/
/*     });*/
/*     $('#typefilter').focus();*/
/*     $('#toglechild').click(function() {*/
/*         $('#typefilter').val('');*/
/*         objList.search(''); // Remove filters*/
/*         if ($(this).data('state') == 0) {*/
/*             $('.child').parent().show();*/
/*             $(this).data('state', '1');*/
/*             $(this).html('<i class="fa fa-arrow-up"></i>');*/
/*         } else {*/
/*             $('.child').parent().hide();*/
/*             $(this).data('state', '0');*/
/*             $(this).html('<i class="fa fa-arrow-down"></i>');*/
/*         }*/
/*     });*/
/*     $('#refreshlist').click(function() {*/
/*         objList.clear(); // clear list*/
/*         $('select[name="type"]').trigger('change');*/
/*     });*/
/* //--></script>*/
/*          */
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if success %}*/
/*   <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_layout }}</div>*/
/*   <div class="table-responsive">*/
/*     <table class="table table-bordered table-hover">*/
/*       <thead>*/
/*         <tr>*/
/*           <td class="text-left">{{ column_name }}</td>*/
/*           <td class="text-left">{{ column_status }}</td>*/
/*           <td class="text-right text-nowrap">{{ column_action }}</td>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody class="list">*/
/*       */
/*       {% if extensions %}*/
/*       {% for extension in extensions %}*/
/*       <tr>*/
/*         <td class="name"><b>{{ extension.name }}</b></td>*/
/*         <td class="text-left status">{{ extension.module ? '' : extension.status }}</td>*/
/*         <td class="text-right text-nowrap">{% if extension.installed %}*/
/*           {% if extension.module %} <a href="{{ extension.edit }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></a> {% else %} <a href="{{ extension.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a> {% endif %}*/
/*           {% else %}*/
/*           <button type="button" class="btn btn-primary" disabled="disabled"><i class="fa fa-pencil"></i></button>*/
/*           {% endif %}*/
/*           {% if not extension.installed %}<a href="{{ extension.install }}" data-toggle="tooltip" title="{{ button_install }}" class="btn btn-success"><i class="fa fa-plus-circle"></i></a> {% else %} <a href="{{ extension.uninstall }}" data-toggle="tooltip" title="{{ button_uninstall }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></a>{% endif %}</td>*/
/*       </tr>*/
/*       {% for module in extension.module %}*/
/*       <tr>*/
/*         <td class="text-left name child">&nbsp;&nbsp;&nbsp;<i class="fa fa-folder-open"></i>&nbsp;&nbsp;&nbsp;{{ module.name }}</td>*/
/*         <td class="text-left status">{{ module.status }}</td>*/
/*         <td class="text-right text-nowrap"><a href="{{ module.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-info"><i class="fa fa-pencil"></i></a> <a href="{{ module.delete }}" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-warning"><i class="fa fa-trash-o"></i></a></td>*/
/*       </tr>*/
/*       {% endfor %}*/
/*       {% endfor %}*/
/*       {% else %}*/
/*       <tr>*/
/*         <td class="text-center" colspan="3">{{ text_no_results }}</td>*/
/*       </tr>*/
/*       {% endif %}*/
/*       </tbody>*/
/*       */
/*     </table>*/
/*   </div>*/
/* </fieldset>*/
/* */
