<?php

/* catalog/review_tab_list.twig */
class __TwigTemplate_a1ccf3affaf53fabe1bc30ea43cfe8ccc978449c610039cbec1016004ef06354 extends Twig_Template
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
        echo "<!-- GF Start -->\t
\t<div class=\"container-fluid\" style=\"padding-bottom:15px;padding-right:0\">
\t\t<div class=\"pull-right\">

\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 5
        echo (isset($context["button_refresh"]) ? $context["button_refresh"] : null);
        echo "\" class=\"btn btn-info\" style=\"margin: 0 20px\" onclick=\"";
        echo (isset($context["refresh"]) ? $context["refresh"] : null);
        echo "\"><i class=\"fa fa-refresh\"></i></button>
\t\t\t
\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\" onclick=\"";
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\"><i class=\"fa fa-plus\"></i></button>
\t\t\t
\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 9
        echo (isset($context["button_copy"]) ? $context["button_copy"] : null);
        echo "\" class=\"btn btn-default\" onclick=\"";
        echo (isset($context["copy"]) ? $context["copy"] : null);
        echo "\"><i class=\"fa fa-copy\"></i></button>
\t\t\t
\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 11
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? ";
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo " : false;\"><i class=\"fa fa-trash-o\"></i></button>
\t\t</div>
\t</div>
\t";
        // line 14
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 15
            echo "\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t";
        }
        // line 19
        echo "\t";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 20
            echo "\t\t<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t";
        }
        // line 24
        echo "
\t<div class=\"row\">
\t\t<div id=\"filter-review\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 29
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</h3>
\t\t\t\t</div>
\t\t\t\t<div  class=\"panel-body\" style=\"padding-left:25px;padding-right:25px;padding-top:0;padding-bottom:0\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-author\">";
        // line 33
        echo (isset($context["entry_author"]) ? $context["entry_author"] : null);
        echo "</label>
\t\t\t\t\t\t<input type=\"text\" name=\"filter_author\" value=\"";
        // line 34
        echo (isset($context["filter_author"]) ? $context["filter_author"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_author"]) ? $context["entry_author"] : null);
        echo "\" id=\"input-author\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-status\">";
        // line 37
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
\t\t\t\t\t\t<select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t";
        // line 40
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "1")) {
            echo " 
\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            // line 41
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t";
        } else {
            // line 43
            echo "\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t\t\t\t";
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "0")) {
            // line 46
            echo "\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t";
        } else {
            // line 48
            echo "\t\t\t\t\t\t\t\t<option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        // line 50
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-date-added\">";
        // line 53
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "</label>
\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 55
        echo (isset($context["filter_date_added"]) ? $context["filter_date_added"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group text-right\">
\t\t\t\t\t\t<button type=\"button\" id=\"button-filter\" class=\"btn btn-default\" onclick=\"";
        // line 62
        echo (isset($context["filter"]) ? $context["filter"] : null);
        echo "\"><i class=\"fa fa-filter\"></i> ";
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-9 col-md-pull-3 col-sm-12\">
\t\t\t<div class=\"panel-body\" style=\"padding:0\">
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t";
        // line 75
        if (((isset($context["sort"]) ? $context["sort"] : null) == "r.author")) {
            echo " 
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 76
            echo (isset($context["sort_author"]) ? $context["sort_author"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_author"]) ? $context["column_author"] : null);
            echo "</a> 
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 77
            echo " 
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 78
            echo (isset($context["sort_author"]) ? $context["sort_author"] : null);
            echo "\">";
            echo (isset($context["column_author"]) ? $context["column_author"] : null);
            echo "</a> 
\t\t\t\t\t\t\t\t\t";
        }
        // line 80
        echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 81
        if (((isset($context["sort"]) ? $context["sort"] : null) == "r.rating")) {
            echo " <a href=\"";
            echo (isset($context["sort_rating"]) ? $context["sort_rating"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_rating"]) ? $context["column_rating"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_rating"]) ? $context["sort_rating"] : null);
            echo "\">";
            echo (isset($context["column_rating"]) ? $context["column_rating"] : null);
            echo "</a> ";
        }
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 82
        if (((isset($context["sort"]) ? $context["sort"] : null) == "r.status")) {
            echo " <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a> ";
        }
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 83
        if (((isset($context["sort"]) ? $context["sort"] : null) == "r.date_added")) {
            echo " <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a> ";
        }
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 84
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>\t\t\t\t\t
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
        // line 88
        if ((isset($context["reviews"]) ? $context["reviews"] : null)) {
            // line 89
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 90
                echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 92
                if (twig_in_filter($this->getAttribute($context["review"], "review_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 93
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["review"], "review_id", array());
                    echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 95
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["review"], "review_id", array());
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 97
                echo "\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 98
                echo $this->getAttribute($context["review"], "author", array());
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
                // line 99
                echo $this->getAttribute($context["review"], "rating", array());
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 100
                echo $this->getAttribute($context["review"], "status", array());
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 101
                echo $this->getAttribute($context["review"], "date_added", array());
                echo "</td>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\"><button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 102
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\" onclick=\"";
                echo $this->getAttribute($context["review"], "edit", array());
                echo "\"><i class=\"fa fa-pencil\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "\t\t\t\t\t\t\t";
        } else {
            // line 107
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\" colspan=\"7\">";
            // line 108
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        // line 111
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
        // line 115
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
\t\t\t\t\t<div class=\"col-sm-6 text-right\">";
        // line 116
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
<!-- GF End -->\t";
    }

    public function getTemplateName()
    {
        return "catalog/review_tab_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 116,  340 => 115,  334 => 111,  328 => 108,  325 => 107,  322 => 106,  310 => 102,  306 => 101,  302 => 100,  298 => 99,  294 => 98,  291 => 97,  285 => 95,  279 => 93,  277 => 92,  273 => 90,  268 => 89,  266 => 88,  259 => 84,  241 => 83,  223 => 82,  205 => 81,  202 => 80,  195 => 78,  192 => 77,  183 => 76,  179 => 75,  161 => 62,  149 => 55,  144 => 53,  139 => 50,  133 => 48,  127 => 46,  124 => 45,  118 => 43,  113 => 41,  109 => 40,  103 => 37,  95 => 34,  91 => 33,  84 => 29,  77 => 24,  69 => 20,  66 => 19,  58 => 15,  56 => 14,  46 => 11,  39 => 9,  32 => 7,  25 => 5,  19 => 1,);
    }
}
/* <!-- GF Start -->	*/
/* 	<div class="container-fluid" style="padding-bottom:15px;padding-right:0">*/
/* 		<div class="pull-right">*/
/* */
/* 			<button type="button" data-toggle="tooltip" title="{{ button_refresh }}" class="btn btn-info" style="margin: 0 20px" onclick="{{ refresh }}"><i class="fa fa-refresh"></i></button>*/
/* 			*/
/* 			<button type="button" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary" onclick="{{ add }}"><i class="fa fa-plus"></i></button>*/
/* 			*/
/* 			<button type="button" data-toggle="tooltip" title="{{ button_copy }}" class="btn btn-default" onclick="{{ copy }}"><i class="fa fa-copy"></i></button>*/
/* 			*/
/* 			<button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? {{ delete }} : false;"><i class="fa fa-trash-o"></i></button>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% if error_warning %}*/
/* 		<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/* 			<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	{% if success %}*/
/* 		<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/* 			<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	<div class="row">*/
/* 		<div id="filter-review" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">*/
/* 			<div class="panel panel-default">*/
/* 				<div class="panel-heading">*/
/* 					<h3 class="panel-title"><i class="fa fa-filter"></i> {{ text_filter }}</h3>*/
/* 				</div>*/
/* 				<div  class="panel-body" style="padding-left:25px;padding-right:25px;padding-top:0;padding-bottom:0">*/
/* 					<div class="form-group">*/
/* 						<label class="control-label" for="input-author">{{ entry_author }}</label>*/
/* 						<input type="text" name="filter_author" value="{{ filter_author }}" placeholder="{{ entry_author }}" id="input-author" class="form-control" />*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label class="control-label" for="input-status">{{ entry_status }}</label>*/
/* 						<select name="filter_status" id="input-status" class="form-control">*/
/* 							<option value=""></option>*/
/* 							{% if filter_status == '1' %} */
/* 								<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 							{% else %}*/
/* 								<option value="1">{{ text_enabled }}</option>*/
/* 							{% endif %}*/
/* 							{% if filter_status == '0' %}*/
/* 								<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 							{% else %}*/
/* 								<option value="0">{{ text_disabled }}</option>*/
/* 							{% endif %}*/
/* 						</select>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label class="control-label" for="input-date-added">{{ entry_date_added }}</label>*/
/* 						<div class="input-group date">*/
/* 							<input type="text" name="filter_date_added" value="{{ filter_date_added }}" placeholder="{{ entry_date_added }}" data-date-format="YYYY-MM-DD" id="input-date-added" class="form-control" />*/
/* 							<span class="input-group-btn">*/
/* 								<button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/* 							</span>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="form-group text-right">*/
/* 						<button type="button" id="button-filter" class="btn btn-default" onclick="{{ filter }}"><i class="fa fa-filter"></i> {{ button_filter }}</button>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="col-md-9 col-md-pull-3 col-sm-12">*/
/* 			<div class="panel-body" style="padding:0">*/
/* 				<div class="table-responsive">*/
/* 					<table class="table table-bordered table-hover">*/
/* 						<thead>*/
/* 							<tr>*/
/* 								<td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/* 								<td class="text-left">*/
/* 									{% if sort == 'r.author' %} */
/* 										<a href="{{ sort_author }}" class="{{ order|lower }}">{{ column_author }}</a> */
/* 									{% else %} */
/* 										<a href="{{ sort_author }}">{{ column_author }}</a> */
/* 									{% endif %}*/
/* 								</td>*/
/* 								<td class="text-right">{% if sort == 'r.rating' %} <a href="{{ sort_rating }}" class="{{ order|lower }}">{{ column_rating }}</a> {% else %} <a href="{{ sort_rating }}">{{ column_rating }}</a> {% endif %}</td>*/
/* 								<td class="text-left">{% if sort == 'r.status' %} <a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a> {% else %} <a href="{{ sort_status }}">{{ column_status }}</a> {% endif %}</td>*/
/* 								<td class="text-left">{% if sort == 'r.date_added' %} <a href="{{ sort_date_added }}" class="{{ order|lower }}">{{ column_date_added }}</a> {% else %} <a href="{{ sort_date_added }}">{{ column_date_added }}</a> {% endif %}</td>*/
/* 								<td class="text-right">{{ column_action }}</td>*/
/* 							</tr>*/
/* 						</thead>					*/
/* 						<tbody>*/
/* 							{% if reviews %}*/
/* 								{% for review in reviews %}*/
/* 									<tr>*/
/* 										<td class="text-center">*/
/* 											{% if review.review_id in selected %}*/
/* 												<input type="checkbox" name="selected[]" value="{{ review.review_id }}" checked="checked" />*/
/* 											{% else %}*/
/* 												<input type="checkbox" name="selected[]" value="{{ review.review_id }}" />*/
/* 											{% endif %}*/
/* 										</td>*/
/* 										<td class="text-left">{{ review.author }}</td>*/
/* 										<td class="text-right">{{ review.rating }}</td>*/
/* 										<td class="text-left">{{ review.status }}</td>*/
/* 										<td class="text-left">{{ review.date_added }}</td>							*/
/* 										<td class="text-right"><button type="button" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary" onclick="{{ review.edit }}"><i class="fa fa-pencil"></i></button></td>*/
/* 										*/
/* 									</tr>*/
/* 								{% endfor %}*/
/* 							{% else %}*/
/* 								<tr>*/
/* 									<td class="text-center" colspan="7">{{ text_no_results }}</td>*/
/* 								</tr>*/
/* 							{% endif %}*/
/* 						</tbody>*/
/* 					</table>*/
/* 				</div>*/
/* 				<div class="row">*/
/* 					<div class="col-sm-6 text-left">{{ pagination }}</div>*/
/* 					<div class="col-sm-6 text-right">{{ results }}</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* <!-- GF End -->	*/
