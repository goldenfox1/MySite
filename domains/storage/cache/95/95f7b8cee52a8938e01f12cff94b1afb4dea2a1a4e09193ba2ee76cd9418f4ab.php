<?php

/* catalog/product_form.twig */
class __TwigTemplate_d0b7319ba2aa75ae1f0e4c59acbfa0d31660a8a3d692382a894ad8c50f1c80ba extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">

<!-- quicksave -->
\t  ";
        // line 8
        if ((isset($context["pidqs"]) ? $context["pidqs"] : null)) {
            // line 9
            echo "\t  <button id=\"qsave\" style=\"margin: 0 10px;\" data-toggle=\"tooltip\" title=\"Quick Save\" class=\"btn btn-warning\"><i class=\"fa fa-save\"></i></button>
\t  ";
        }
        // line 11
        echo "<!-- quicksave end -->
\t\t\t
        <button type=\"submit\" form=\"form-product\" data-toggle=\"tooltip\" title=\"";
        // line 13
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 14
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 15
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 18
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 23
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 24
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 28
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        
\t\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i>
\t\t\t\t\t";
        // line 32
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo " -&nbsp;
\t\t\t\t\t\t";
        // line 33
        $context["break"] = false;
        // line 34
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            if ( !(isset($context["break"]) ? $context["break"] : null)) {
                // line 35
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array") == true)) {
                    // line 36
                    echo "\t\t\t\t\t\t\t\t";
                    echo $this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "name", array());
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 37
                    $context["break"] = true;
                    // line 38
                    echo "\t\t\t\t\t\t\t";
                }
                // line 39
                echo "\t\t\t\t\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t\t\t\t\t( ";
        echo (isset($context["model"]) ? $context["model"] : null);
        echo " )
\t\t\t\t\t</h3>
\t\t\t\t
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 45
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 47
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 48
        echo (isset($context["tab_data"]) ? $context["tab_data"] : null);
        echo "</a></li>
            <li><a href=\"#tab-links\" data-toggle=\"tab\">";
        // line 49
        echo (isset($context["tab_links"]) ? $context["tab_links"] : null);
        echo "</a></li>
            <li><a href=\"#tab-attribute\" data-toggle=\"tab\">";
        // line 50
        echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 51
        echo (isset($context["tab_option"]) ? $context["tab_option"] : null);
        echo "</a></li>
            <li><a href=\"#tab-recurring\" data-toggle=\"tab\">";
        // line 52
        echo (isset($context["tab_recurring"]) ? $context["tab_recurring"] : null);
        echo "</a></li>
            <li><a href=\"#tab-discount\" data-toggle=\"tab\">";
        // line 53
        echo (isset($context["tab_discount"]) ? $context["tab_discount"] : null);
        echo "</a></li>
            <li><a href=\"#tab-special\" data-toggle=\"tab\">";
        // line 54
        echo (isset($context["tab_special"]) ? $context["tab_special"] : null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 55
        echo (isset($context["tab_image"]) ? $context["tab_image"] : null);
        echo "</a></li>
            <li><a href=\"#tab-reward\" data-toggle=\"tab\">";
        // line 56
        echo (isset($context["tab_reward"]) ? $context["tab_reward"] : null);
        echo "</a></li>
            <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 57
        echo (isset($context["tab_seo"]) ? $context["tab_seo"] : null);
        echo "</a></li>
            <li><a href=\"#tab-design\" data-toggle=\"tab\">";
        // line 58
        echo (isset($context["tab_design"]) ? $context["tab_design"] : null);
        echo "</a></li>

\t\t\t<!--xml-->
\t\t\t<li><a href=\"#tab-customtabmain\" data-toggle=\"tab\">";
        // line 61
        echo (isset($context["tab_customtab"]) ? $context["tab_customtab"] : null);
        echo "</a></li>
\t\t\t<!--xml-->
\t\t\t

\t\t\t<!-- GF-AdminProductCommentTab start -->
\t\t\t\t<li><a href=\"#tab-review\" data-toggle=\"tab\">";
        // line 66
        echo (isset($context["tab_review"]) ? $context["tab_review"] : null);
        echo "</a></li>
\t\t\t<!-- GF-AdminProductCommentTab end -->
\t\t\t
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 74
            echo "                <li><a href=\"#language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /> ";
            echo $this->getAttribute($context["language"], "name", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "              </ul>
              <div class=\"tab-content\">";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 78
            echo "                <div class=\"tab-pane\" id=\"language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name";
            // line 80
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"product_description[";
            // line 82
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][name]\" value=\"";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "name", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "\" id=\"input-name";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" />
                      ";
            // line 83
            if ($this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 84
                echo "                      <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>
                      ";
            }
            // line 85
            echo " </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 88
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"product_description[";
            // line 90
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][description]\" placeholder=\"";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\" id=\"input-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo (isset($context["summernote"]) ? $context["summernote"] : null);
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "description", array())) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 94
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"product_description[";
            // line 96
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_title]\" value=\"";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_title", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "\" id=\"input-meta-title";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" />
                      ";
            // line 97
            if ($this->getAttribute((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 98
                echo "                      <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>
                      ";
            }
            // line 99
            echo " </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 102
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"product_description[";
            // line 104
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "\" id=\"input-meta-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_description", array())) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 108
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"product_description[";
            // line 110
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "\" id=\"input-meta-keyword";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_keyword", array())) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-tag";
            // line 114
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo (isset($context["help_tag"]) ? $context["help_tag"] : null);
            echo "\">";
            echo (isset($context["entry_tag"]) ? $context["entry_tag"] : null);
            echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"product_description[";
            // line 116
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][tag]\" value=\"";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "tag", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_tag"]) ? $context["entry_tag"] : null);
            echo "\" id=\"input-tag";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" />
                    </div>
                  </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "</div>
            </div>
            <div class=\"tab-pane\" id=\"tab-data\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 124
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"model\" value=\"";
        // line 126
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "\" id=\"input-model\" class=\"form-control\" />
                  ";
        // line 127
        if ((isset($context["error_model"]) ? $context["error_model"] : null)) {
            // line 128
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_model"]) ? $context["error_model"] : null);
            echo "</div>
                  ";
        }
        // line 129
        echo "</div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sku\"><span data-toggle=\"tooltip\" title=\"";
        // line 132
        echo (isset($context["help_sku"]) ? $context["help_sku"] : null);
        echo "\">";
        echo (isset($context["entry_sku"]) ? $context["entry_sku"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sku\" value=\"";
        // line 134
        echo (isset($context["sku"]) ? $context["sku"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sku"]) ? $context["entry_sku"] : null);
        echo "\" id=\"input-sku\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-upc\"><span data-toggle=\"tooltip\" title=\"";
        // line 138
        echo (isset($context["help_upc"]) ? $context["help_upc"] : null);
        echo "\">";
        echo (isset($context["entry_upc"]) ? $context["entry_upc"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"upc\" value=\"";
        // line 140
        echo (isset($context["upc"]) ? $context["upc"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_upc"]) ? $context["entry_upc"] : null);
        echo "\" id=\"input-upc\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-ean\"><span data-toggle=\"tooltip\" title=\"";
        // line 144
        echo (isset($context["help_ean"]) ? $context["help_ean"] : null);
        echo "\">";
        echo (isset($context["entry_ean"]) ? $context["entry_ean"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"ean\" value=\"";
        // line 146
        echo (isset($context["ean"]) ? $context["ean"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_ean"]) ? $context["entry_ean"] : null);
        echo "\" id=\"input-ean\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-jan\"><span data-toggle=\"tooltip\" title=\"";
        // line 150
        echo (isset($context["help_jan"]) ? $context["help_jan"] : null);
        echo "\">";
        echo (isset($context["entry_jan"]) ? $context["entry_jan"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"jan\" value=\"";
        // line 152
        echo (isset($context["jan"]) ? $context["jan"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_jan"]) ? $context["entry_jan"] : null);
        echo "\" id=\"input-jan\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-isbn\"><span data-toggle=\"tooltip\" title=\"";
        // line 156
        echo (isset($context["help_isbn"]) ? $context["help_isbn"] : null);
        echo "\">";
        echo (isset($context["entry_isbn"]) ? $context["entry_isbn"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"isbn\" value=\"";
        // line 158
        echo (isset($context["isbn"]) ? $context["isbn"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_isbn"]) ? $context["entry_isbn"] : null);
        echo "\" id=\"input-isbn\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-mpn\"><span data-toggle=\"tooltip\" title=\"";
        // line 162
        echo (isset($context["help_mpn"]) ? $context["help_mpn"] : null);
        echo "\">";
        echo (isset($context["entry_mpn"]) ? $context["entry_mpn"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"mpn\" value=\"";
        // line 164
        echo (isset($context["mpn"]) ? $context["mpn"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mpn"]) ? $context["entry_mpn"] : null);
        echo "\" id=\"input-mpn\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-location\">";
        // line 168
        echo (isset($context["entry_location"]) ? $context["entry_location"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"location\" value=\"";
        // line 170
        echo (isset($context["location"]) ? $context["location"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_location"]) ? $context["entry_location"] : null);
        echo "\" id=\"input-location\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-price\">";
        // line 174
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"price\" value=\"";
        // line 176
        echo (isset($context["price"]) ? $context["price"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" id=\"input-price\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">";
        // line 180
        echo (isset($context["entry_tax_class"]) ? $context["entry_tax_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                    <option value=\"0\">";
        // line 183
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                    

                    ";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tax_classes"]) ? $context["tax_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 187
            echo "                    ";
            if (($this->getAttribute($context["tax_class"], "tax_class_id", array()) == (isset($context["tax_class_id"]) ? $context["tax_class_id"] : null))) {
                // line 188
                echo "
                    
                    <option value=\"";
                // line 190
                echo $this->getAttribute($context["tax_class"], "tax_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["tax_class"], "title", array());
                echo "</option>
                    

                    ";
            } else {
                // line 194
                echo "
                    
                    <option value=\"";
                // line 196
                echo $this->getAttribute($context["tax_class"], "tax_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["tax_class"], "title", array());
                echo "</option>
                    

                    ";
            }
            // line 200
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "
                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 207
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"quantity\" value=\"";
        // line 209
        echo (isset($context["quantity"]) ? $context["quantity"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "\" id=\"input-quantity\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-minimum\"><span data-toggle=\"tooltip\" title=\"";
        // line 213
        echo (isset($context["help_minimum"]) ? $context["help_minimum"] : null);
        echo "\">";
        echo (isset($context["entry_minimum"]) ? $context["entry_minimum"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"minimum\" value=\"";
        // line 215
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_minimum"]) ? $context["entry_minimum"] : null);
        echo "\" id=\"input-minimum\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-subtract\">";
        // line 219
        echo (isset($context["entry_subtract"]) ? $context["entry_subtract"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"subtract\" id=\"input-subtract\" class=\"form-control\">
                    

                    ";
        // line 224
        if ((isset($context["subtract"]) ? $context["subtract"] : null)) {
            // line 225
            echo "
                    
                    <option value=\"1\" selected=\"selected\">";
            // line 227
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 228
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                    

                    ";
        } else {
            // line 232
            echo "
                    
                    <option value=\"1\">";
            // line 234
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 235
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                    

                    ";
        }
        // line 239
        echo "
                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-stock-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 245
        echo (isset($context["help_stock_status"]) ? $context["help_stock_status"] : null);
        echo "\">";
        echo (isset($context["entry_stock_status"]) ? $context["entry_stock_status"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-control\">
                    

                    ";
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stock_statuses"]) ? $context["stock_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 251
            echo "                    ";
            if (($this->getAttribute($context["stock_status"], "stock_status_id", array()) == (isset($context["stock_status_id"]) ? $context["stock_status_id"] : null))) {
                // line 252
                echo "
                    
                    <option value=\"";
                // line 254
                echo $this->getAttribute($context["stock_status"], "stock_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["stock_status"], "name", array());
                echo "</option>
                    

                    ";
            } else {
                // line 258
                echo "
                    
                    <option value=\"";
                // line 260
                echo $this->getAttribute($context["stock_status"], "stock_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["stock_status"], "name", array());
                echo "</option>
                    

                    ";
            }
            // line 264
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 265
        echo "
                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 271
        echo (isset($context["entry_shipping"]) ? $context["entry_shipping"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 273
        if ((isset($context["shipping"]) ? $context["shipping"] : null)) {
            // line 274
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\" />
                    ";
            // line 275
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                    ";
        } else {
            // line 277
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"1\" />
                    ";
            // line 278
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                    ";
        }
        // line 279
        echo " </label>
                  <label class=\"radio-inline\"> ";
        // line 280
        if ( !(isset($context["shipping"]) ? $context["shipping"] : null)) {
            // line 281
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\" />
                    ";
            // line 282
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                    ";
        } else {
            // line 284
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"0\" />
                    ";
            // line 285
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                    ";
        }
        // line 286
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-available\">";
        // line 290
        echo (isset($context["entry_date_available"]) ? $context["entry_date_available"] : null);
        echo "</label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_available\" value=\"";
        // line 293
        echo (isset($context["date_available"]) ? $context["date_available"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_available"]) ? $context["entry_date_available"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-available\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length\">";
        // line 300
        echo (isset($context["entry_dimension"]) ? $context["entry_dimension"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"row\">
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"length\" value=\"";
        // line 304
        echo (isset($context["length"]) ? $context["length"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_length"]) ? $context["entry_length"] : null);
        echo "\" id=\"input-length\" class=\"form-control\" />
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"width\" value=\"";
        // line 307
        echo (isset($context["width"]) ? $context["width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-width\" class=\"form-control\" />
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"height\" value=\"";
        // line 310
        echo (isset($context["height"]) ? $context["height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" id=\"input-height\" class=\"form-control\" />
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 316
        echo (isset($context["entry_length_class"]) ? $context["entry_length_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-control\">
                    

                    ";
        // line 321
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["length_classes"]) ? $context["length_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 322
            echo "                    ";
            if (($this->getAttribute($context["length_class"], "length_class_id", array()) == (isset($context["length_class_id"]) ? $context["length_class_id"] : null))) {
                // line 323
                echo "
                    
                    <option value=\"";
                // line 325
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>
                    

                    ";
            } else {
                // line 329
                echo "
                    
                    <option value=\"";
                // line 331
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>
                    

                    ";
            }
            // line 335
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 336
        echo "
                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight\">";
        // line 342
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"weight\" value=\"";
        // line 344
        echo (isset($context["weight"]) ? $context["weight"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "\" id=\"input-weight\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 348
        echo (isset($context["entry_weight_class"]) ? $context["entry_weight_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                    

                    ";
        // line 353
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weight_classes"]) ? $context["weight_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 354
            echo "                    ";
            if (($this->getAttribute($context["weight_class"], "weight_class_id", array()) == (isset($context["weight_class_id"]) ? $context["weight_class_id"] : null))) {
                // line 355
                echo "
                    
                    <option value=\"";
                // line 357
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>
                    

                    ";
            } else {
                // line 361
                echo "
                    
                    <option value=\"";
                // line 363
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>
                    

                    ";
            }
            // line 367
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 368
        echo "
                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 374
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    

                    ";
        // line 379
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 380
            echo "
                    
                    <option value=\"1\" selected=\"selected\">";
            // line 382
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 383
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    

                    ";
        } else {
            // line 387
            echo "
                    
                    <option value=\"1\">";
            // line 389
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 390
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    

                    ";
        }
        // line 394
        echo "
                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 400
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"";
        // line 402
        echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-links\">

\t\t\t\t<div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-link\"><span data-toggle=\"tooltip\" title=\"";
        // line 409
        echo (isset($context["entry_link"]) ? $context["entry_link"] : null);
        echo "\">";
        echo (isset($context["entry_link"]) ? $context["entry_link"] : null);
        echo "</span></label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"product_link\" rows=\"5\" placeholder=\"";
        // line 411
        echo (isset($context["entry_link"]) ? $context["entry_link"] : null);
        echo "\" id=\"input-link\" class=\"form-control\">";
        echo (isset($context["product_link"]) ? $context["product_link"] : null);
        echo "</textarea>
                    </div>
                  </div>
\t\t\t
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-manufacturer\"><span data-toggle=\"tooltip\" title=\"";
        // line 416
        echo (isset($context["help_manufacturer"]) ? $context["help_manufacturer"] : null);
        echo "\">";
        echo (isset($context["entry_manufacturer"]) ? $context["entry_manufacturer"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 418
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_manufacturer"]) ? $context["entry_manufacturer"] : null);
        echo "\" id=\"input-manufacturer\" class=\"form-control\" />
                  <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
        // line 419
        echo (isset($context["manufacturer_id"]) ? $context["manufacturer_id"] : null);
        echo "\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 423
        echo (isset($context["help_category"]) ? $context["help_category"] : null);
        echo "\">";
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 425
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "\" id=\"input-category\" class=\"form-control\" />
                  <div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 426
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_categories"]) ? $context["product_categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 427
            echo "                    <div id=\"product-category";
            echo $this->getAttribute($context["product_category"], "category_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["product_category"], "name", array());
            echo "
                      <input type=\"hidden\" name=\"product_category[]\" value=\"";
            // line 428
            echo $this->getAttribute($context["product_category"], "category_id", array());
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 430
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\" title=\"";
        // line 434
        echo (isset($context["help_filter"]) ? $context["help_filter"] : null);
        echo "\">";
        echo (isset($context["entry_filter"]) ? $context["entry_filter"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 436
        echo (isset($context["entry_filter"]) ? $context["entry_filter"] : null);
        echo "\" id=\"input-filter\" class=\"form-control\" />
                  <div id=\"product-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 437
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_filters"]) ? $context["product_filters"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 438
            echo "                    <div id=\"product-filter";
            echo $this->getAttribute($context["product_filter"], "filter_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["product_filter"], "name", array());
            echo "
                      <input type=\"hidden\" name=\"product_filter[]\" value=\"";
            // line 439
            echo $this->getAttribute($context["product_filter"], "filter_id", array());
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 441
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 445
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 447
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 448
            echo "                    <div class=\"checkbox\">
                      <label> ";
            // line 449
            if (twig_in_filter($this->getAttribute($context["store"], "store_id", array()), (isset($context["product_store"]) ? $context["product_store"] : null))) {
                // line 450
                echo "                        <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" checked=\"checked\" />
                        ";
                // line 451
                echo $this->getAttribute($context["store"], "name", array());
                echo "
                        ";
            } else {
                // line 453
                echo "                        <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" />
                        ";
                // line 454
                echo $this->getAttribute($context["store"], "name", array());
                echo "
                        ";
            }
            // line 455
            echo " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 457
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\" title=\"";
        // line 461
        echo (isset($context["help_download"]) ? $context["help_download"] : null);
        echo "\">";
        echo (isset($context["entry_download"]) ? $context["entry_download"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 463
        echo (isset($context["entry_download"]) ? $context["entry_download"] : null);
        echo "\" id=\"input-download\" class=\"form-control\" />
                  <div id=\"product-download\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 464
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_downloads"]) ? $context["product_downloads"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 465
            echo "                    <div id=\"product-download";
            echo $this->getAttribute($context["product_download"], "download_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["product_download"], "name", array());
            echo "
                      <input type=\"hidden\" name=\"product_download[]\" value=\"";
            // line 466
            echo $this->getAttribute($context["product_download"], "download_id", array());
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 468
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\" title=\"";
        // line 472
        echo (isset($context["help_related"]) ? $context["help_related"] : null);
        echo "\">";
        echo (isset($context["entry_related"]) ? $context["entry_related"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 474
        echo (isset($context["entry_related"]) ? $context["entry_related"] : null);
        echo "\" id=\"input-related\" class=\"form-control\" />
                  <div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 475
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_relateds"]) ? $context["product_relateds"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 476
            echo "                    <div id=\"product-related";
            echo $this->getAttribute($context["product_related"], "product_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["product_related"], "name", array());
            echo "
                      <input type=\"hidden\" name=\"product_related[]\" value=\"";
            // line 477
            echo $this->getAttribute($context["product_related"], "product_id", array());
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 479
        echo "</div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-attribute\">
              <div class=\"table-responsive\">
                <table id=\"attribute\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 488
        echo (isset($context["entry_attribute"]) ? $context["entry_attribute"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 489
        echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 495
        $context["attribute_row"] = 0;
        // line 496
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_attributes"]) ? $context["product_attributes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 497
            echo "                  <tr id=\"attribute-row";
            echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
            echo "\">
                    <td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\" name=\"product_attribute[";
            // line 498
            echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
            echo "][name]\" value=\"";
            echo $this->getAttribute($context["product_attribute"], "name", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_attribute"]) ? $context["entry_attribute"] : null);
            echo "\" class=\"form-control\" />
                      <input type=\"hidden\" name=\"product_attribute[";
            // line 499
            echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
            echo "][attribute_id]\" value=\"";
            echo $this->getAttribute($context["product_attribute"], "attribute_id", array());
            echo "\" /></td>
                    <td class=\"text-left\">";
            // line 500
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 501
                echo "                      <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /></span>
                        <textarea name=\"product_attribute[";
                // line 502
                echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
                echo "][product_attribute_description][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][text]\" rows=\"5\" placeholder=\"";
                echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
                echo "\" class=\"form-control\">";
                echo (($this->getAttribute($this->getAttribute($context["product_attribute"], "product_attribute_description", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["product_attribute"], "product_attribute_description", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "text", array())) : (""));
                echo "</textarea>
                      </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 504
            echo "</td>
                    <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#attribute-row";
            // line 505
            echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            // line 507
            $context["attribute_row"] = ((isset($context["attribute_row"]) ? $context["attribute_row"] : null) + 1);
            // line 508
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 509
        echo "                    </tbody>
                  
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-right\"><button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\" title=\"";
        // line 514
        echo (isset($context["button_attribute_add"]) ? $context["button_attribute_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <div class=\"row\">
                <div class=\"col-sm-2\">
                  <ul class=\"nav nav-pills nav-stacked\" id=\"option\">
                    ";
        // line 524
        $context["option_row"] = 0;
        // line 525
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_options"]) ? $context["product_options"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 526
            echo "                    <li><a href=\"#tab-option";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-option";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\\']').parent().remove(); \$('#tab-option";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "').remove(); \$('#option a:first').tab('show');\"></i> ";
            echo $this->getAttribute($context["product_option"], "name", array());
            echo "</a></li>
                    ";
            // line 527
            $context["option_row"] = ((isset($context["option_row"]) ? $context["option_row"] : null) + 1);
            // line 528
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 529
        echo "                    <li>
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
        // line 530
        echo (isset($context["entry_option"]) ? $context["entry_option"] : null);
        echo "\" id=\"input-option\" class=\"form-control\" />
                    </li>
                  </ul>
                </div>
                <div class=\"col-sm-10\">
                  <div class=\"tab-content\"> ";
        // line 535
        $context["option_row"] = 0;
        // line 536
        echo "                    ";
        $context["option_value_row"] = 0;
        // line 537
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_options"]) ? $context["product_options"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 538
            echo "                    <div class=\"tab-pane\" id=\"tab-option";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\">
                      <input type=\"hidden\" name=\"product_option[";
            // line 539
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][product_option_id]\" value=\"";
            echo $this->getAttribute($context["product_option"], "product_option_id", array());
            echo "\" />
                      <input type=\"hidden\" name=\"product_option[";
            // line 540
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][name]\" value=\"";
            echo $this->getAttribute($context["product_option"], "name", array());
            echo "\" />
                      <input type=\"hidden\" name=\"product_option[";
            // line 541
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][option_id]\" value=\"";
            echo $this->getAttribute($context["product_option"], "option_id", array());
            echo "\" />
                      <input type=\"hidden\" name=\"product_option[";
            // line 542
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][type]\" value=\"";
            echo $this->getAttribute($context["product_option"], "type", array());
            echo "\" />
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-required";
            // line 544
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\">";
            echo (isset($context["entry_required"]) ? $context["entry_required"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"product_option[";
            // line 546
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][required]\" id=\"input-required";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\" class=\"form-control\">
                            

                            ";
            // line 549
            if ($this->getAttribute($context["product_option"], "required", array())) {
                // line 550
                echo "
                            
                            <option value=\"1\" selected=\"selected\">";
                // line 552
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "</option>
                            <option value=\"0\">";
                // line 553
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "</option>
                            

                            ";
            } else {
                // line 557
                echo "
                            
                            <option value=\"1\">";
                // line 559
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "</option>
                            <option value=\"0\" selected=\"selected\">";
                // line 560
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "</option>
                            

                            ";
            }
            // line 564
            echo "
                          
                          </select>
                        </div>
                      </div>
                      ";
            // line 569
            if (($this->getAttribute($context["product_option"], "type", array()) == "text")) {
                // line 570
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 571
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"product_option[";
                // line 573
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" value=\"";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\" />
                        </div>
                      </div>
                      ";
            }
            // line 577
            echo "                      ";
            if (($this->getAttribute($context["product_option"], "type", array()) == "textarea")) {
                // line 578
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 579
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"product_option[";
                // line 581
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" rows=\"5\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\">";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "</textarea>
                        </div>
                      </div>
                      ";
            }
            // line 585
            echo "                      ";
            if (($this->getAttribute($context["product_option"], "type", array()) == "file")) {
                // line 586
                echo "                      <div class=\"form-group\" style=\"display: none;\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 587
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"product_option[";
                // line 589
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" value=\"";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\" />
                        </div>
                      </div>
                      ";
            }
            // line 593
            echo "                      ";
            if (($this->getAttribute($context["product_option"], "type", array()) == "date")) {
                // line 594
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 595
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                        <div class=\"col-sm-3\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_option[";
                // line 598
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" value=\"";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                        </div>
                      </div>
                      ";
            }
            // line 605
            echo "                      ";
            if (($this->getAttribute($context["product_option"], "type", array()) == "time")) {
                // line 606
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 607
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group time\">
                            <input type=\"text\" name=\"product_option[";
                // line 610
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" value=\"";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" data-date-format=\"HH:mm\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                        </div>
                      </div>
                      ";
            }
            // line 617
            echo "                      ";
            if (($this->getAttribute($context["product_option"], "type", array()) == "datetime")) {
                // line 618
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 619
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group datetime\">
                            <input type=\"text\" name=\"product_option[";
                // line 622
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" value=\"";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                        </div>
                      </div>
                      ";
            }
            // line 629
            echo "                      ";
            if ((((($this->getAttribute($context["product_option"], "type", array()) == "select") || ($this->getAttribute($context["product_option"], "type", array()) == "radio")) || ($this->getAttribute($context["product_option"], "type", array()) == "checkbox")) || ($this->getAttribute($context["product_option"], "type", array()) == "image"))) {
                // line 630
                echo "                      <div class=\"table-responsive\">
                        <table id=\"option-value";
                // line 631
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"table table-striped table-bordered table-hover\">
                          <thead>
                            <tr>
                              <td class=\"text-left\">";
                // line 634
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</td>
                              <td class=\"text-right\">";
                // line 635
                echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
                echo "</td>
                              <td class=\"text-left\">";
                // line 636
                echo (isset($context["entry_subtract"]) ? $context["entry_subtract"] : null);
                echo "</td>
                              <td class=\"text-right\">";
                // line 637
                echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
                echo "</td>
                              <td class=\"text-right\">";
                // line 638
                echo (isset($context["entry_option_points"]) ? $context["entry_option_points"] : null);
                echo "</td>
                              <td class=\"text-right\">";
                // line 639
                echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
                echo "</td>
                              <td></td>
                            </tr>
                          </thead>
                          <tbody>
                          
                          ";
                // line 645
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product_option"], "product_option_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                    // line 646
                    echo "                          <tr id=\"option-value-row";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "\">
                            <td class=\"text-left\"><select name=\"product_option[";
                    // line 647
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][option_value_id]\" class=\"form-control\">
                                

                                  ";
                    // line 650
                    if ($this->getAttribute((isset($context["option_values"]) ? $context["option_values"] : null), $this->getAttribute($context["product_option"], "option_id", array()), array(), "array")) {
                        // line 651
                        echo "
                                  ";
                        // line 652
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["option_values"]) ? $context["option_values"] : null), $this->getAttribute($context["product_option"], "option_id", array()), array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 653
                            echo "
                                  ";
                            // line 654
                            if (($this->getAttribute($context["option_value"], "option_value_id", array()) == $this->getAttribute($context["product_option_value"], "option_value_id", array()))) {
                                // line 655
                                echo "
                                
                                <option value=\"";
                                // line 657
                                echo $this->getAttribute($context["option_value"], "option_value_id", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["option_value"], "name", array());
                                echo "</option>
                                

                                  ";
                            } else {
                                // line 661
                                echo "
                                
                                <option value=\"";
                                // line 663
                                echo $this->getAttribute($context["option_value"], "option_value_id", array());
                                echo "\">";
                                echo $this->getAttribute($context["option_value"], "name", array());
                                echo "</option>
                                

                                  ";
                            }
                            // line 667
                            echo "                                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 668
                        echo "                                  ";
                    }
                    // line 669
                    echo "
                              
                              </select>
                              <input type=\"hidden\" name=\"product_option[";
                    // line 672
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][product_option_value_id]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "product_option_value_id", array());
                    echo "\" /></td>
                            <td class=\"text-right\"><input type=\"text\" name=\"product_option[";
                    // line 673
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][quantity]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "quantity", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
                    echo "\" class=\"form-control\" /></td>
                            <td class=\"text-left\"><select name=\"product_option[";
                    // line 674
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][subtract]\" class=\"form-control\">
                                

                                  ";
                    // line 677
                    if ($this->getAttribute($context["product_option_value"], "subtract", array())) {
                        // line 678
                        echo "
                                
                                <option value=\"1\" selected=\"selected\">";
                        // line 680
                        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                        echo "</option>
                                <option value=\"0\">";
                        // line 681
                        echo (isset($context["text_no"]) ? $context["text_no"] : null);
                        echo "</option>
                                

                                  ";
                    } else {
                        // line 685
                        echo "
                                
                                <option value=\"1\">";
                        // line 687
                        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                        echo "</option>
                                <option value=\"0\" selected=\"selected\">";
                        // line 688
                        echo (isset($context["text_no"]) ? $context["text_no"] : null);
                        echo "</option>
                                

                                  ";
                    }
                    // line 692
                    echo "
                              
                              </select></td>
                            <td class=\"text-right\"><select name=\"product_option[";
                    // line 695
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][price_prefix]\" class=\"form-control\">
                                

                                  ";
                    // line 698
                    if (($this->getAttribute($context["product_option_value"], "price_prefix", array()) == "+")) {
                        // line 699
                        echo "
                                
                                <option value=\"+\" selected=\"selected\">+</option>
                                

                                  ";
                    } else {
                        // line 705
                        echo "
                                
                                <option value=\"+\">+</option>
                                

                                  ";
                    }
                    // line 711
                    echo "                                  ";
                    if (($this->getAttribute($context["product_option_value"], "price_prefix", array()) == "-")) {
                        // line 712
                        echo "
                                
                                <option value=\"-\" selected=\"selected\">-</option>
                                

                                  ";
                    } else {
                        // line 718
                        echo "
                                
                                <option value=\"-\">-</option>
                                

                                  ";
                    }
                    // line 724
                    echo "
                              
                              </select>
                              <input type=\"text\" name=\"product_option[";
                    // line 727
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][price]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "price", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
                    echo "\" class=\"form-control\" /></td>
                            <td class=\"text-right\"><select name=\"product_option[";
                    // line 728
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][points_prefix]\" class=\"form-control\">
                                

                                  ";
                    // line 731
                    if (($this->getAttribute($context["product_option_value"], "points_prefix", array()) == "+")) {
                        // line 732
                        echo "
                                
                                <option value=\"+\" selected=\"selected\">+</option>
                                

                                  ";
                    } else {
                        // line 738
                        echo "
                                
                                <option value=\"+\">+</option>
                                

                                  ";
                    }
                    // line 744
                    echo "                                  ";
                    if (($this->getAttribute($context["product_option_value"], "points_prefix", array()) == "-")) {
                        // line 745
                        echo "
                                
                                <option value=\"-\" selected=\"selected\">-</option>
                                

                                  ";
                    } else {
                        // line 751
                        echo "
                                
                                <option value=\"-\">-</option>
                                

                                  ";
                    }
                    // line 757
                    echo "
                              
                              </select>
                              <input type=\"text\" name=\"product_option[";
                    // line 760
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][points]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "points", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
                    echo "\" class=\"form-control\" /></td>
                            <td class=\"text-right\"><select name=\"product_option[";
                    // line 761
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][weight_prefix]\" class=\"form-control\">
                                

                                  ";
                    // line 764
                    if (($this->getAttribute($context["product_option_value"], "weight_prefix", array()) == "+")) {
                        // line 765
                        echo "
                                
                                <option value=\"+\" selected=\"selected\">+</option>
                                

                                  ";
                    } else {
                        // line 771
                        echo "
                                
                                <option value=\"+\">+</option>
                                

                                  ";
                    }
                    // line 777
                    echo "                                  ";
                    if (($this->getAttribute($context["product_option_value"], "weight_prefix", array()) == "-")) {
                        // line 778
                        echo "
                                
                                <option value=\"-\" selected=\"selected\">-</option>
                                

                                  ";
                    } else {
                        // line 784
                        echo "
                                
                                <option value=\"-\">-</option>
                                

                                  ";
                    }
                    // line 790
                    echo "
                              
                              </select>
                              <input type=\"text\" name=\"product_option[";
                    // line 793
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][weight]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "weight", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
                    echo "\" class=\"form-control\" /></td>
                            <td class=\"text-right\"><button type=\"button\" onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                    // line 794
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                          </tr>
                          ";
                    // line 796
                    $context["option_value_row"] = ((isset($context["option_value_row"]) ? $context["option_value_row"] : null) + 1);
                    // line 797
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 798
                echo "                            </tbody>
                          
                          <tfoot>
                            <tr>
                              <td colspan=\"6\"></td>
                              <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue('";
                // line 803
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_option_value_add"]) ? $context["button_option_value_add"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                      <select id=\"option-values";
                // line 808
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" style=\"display: none;\">
                        

                        ";
                // line 811
                if ($this->getAttribute((isset($context["option_values"]) ? $context["option_values"] : null), $this->getAttribute($context["product_option"], "option_id", array()), array(), "array")) {
                    // line 812
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["option_values"]) ? $context["option_values"] : null), $this->getAttribute($context["product_option"], "option_id", array()), array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 813
                        echo "
                        
                        <option value=\"";
                        // line 815
                        echo $this->getAttribute($context["option_value"], "option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "</option>
                        

                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 819
                    echo "                        ";
                }
                // line 820
                echo "
                      
                      </select>
                      ";
            }
            // line 823
            echo " </div>
                    ";
            // line 824
            $context["option_row"] = ((isset($context["option_row"]) ? $context["option_row"] : null) + 1);
            // line 825
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-recurring\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 834
        echo (isset($context["entry_recurring"]) ? $context["entry_recurring"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 835
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</td>
                      <td class=\"text-left\"></td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 841
        $context["recurring_row"] = 0;
        // line 842
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_recurrings"]) ? $context["product_recurrings"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_recurring"]) {
            // line 843
            echo "                  <tr id=\"recurring-row";
            echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
            echo "\">
                    <td class=\"text-left\"><select name=\"product_recurring[";
            // line 844
            echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
            echo "][recurring_id]\" class=\"form-control\">
                        

                          ";
            // line 847
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 848
                echo "                          ";
                if (($this->getAttribute($context["recurring"], "recurring_id", array()) == $this->getAttribute($context["product_recurring"], "recurring_id", array()))) {
                    // line 849
                    echo "
                        
                        <option value=\"";
                    // line 851
                    echo $this->getAttribute($context["recurring"], "recurring_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["recurring"], "name", array());
                    echo "</option>
                        

                          ";
                } else {
                    // line 855
                    echo "
                        
                        <option value=\"";
                    // line 857
                    echo $this->getAttribute($context["recurring"], "recurring_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["recurring"], "name", array());
                    echo "</option>
                        

                          ";
                }
                // line 861
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 862
            echo "
                      
                      </select></td>
                    <td class=\"text-left\"><select name=\"product_recurring[";
            // line 865
            echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
            echo "][customer_group_id]\" class=\"form-control\">
                        

                          ";
            // line 868
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 869
                echo "                          ";
                if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == $this->getAttribute($context["product_recurring"], "customer_group_id", array()))) {
                    // line 870
                    echo "
                        
                        <option value=\"";
                    // line 872
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>
                        

                          ";
                } else {
                    // line 876
                    echo "
                        
                        <option value=\"";
                    // line 878
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>
                        

                          ";
                }
                // line 882
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 883
            echo "
                      
                      </select></td>
                    <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#recurring-row";
            // line 886
            echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            // line 888
            $context["recurring_row"] = ((isset($context["recurring_row"]) ? $context["recurring_row"] : null) + 1);
            // line 889
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 890
        echo "                    </tbody>
                  
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addRecurring()\" data-toggle=\"tooltip\" title=\"";
        // line 895
        echo (isset($context["button_recurring_add"]) ? $context["button_recurring_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-discount\">
              <div class=\"table-responsive\">
                <table id=\"discount\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 906
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 907
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 908
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 909
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 910
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 911
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 917
        $context["discount_row"] = 0;
        // line 918
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_discounts"]) ? $context["product_discounts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 919
            echo "                  <tr id=\"discount-row";
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "\">
                    <td class=\"text-left\"><select name=\"product_discount[";
            // line 920
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][customer_group_id]\" class=\"form-control\">
                        ";
            // line 921
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 922
                echo "                        ";
                if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == $this->getAttribute($context["product_discount"], "customer_group_id", array()))) {
                    // line 923
                    echo "                        <option value=\"";
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>
                        ";
                } else {
                    // line 925
                    echo "                        <option value=\"";
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>
                        ";
                }
                // line 927
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 928
            echo "                      </select></td>
                    <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 929
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][quantity]\" value=\"";
            echo $this->getAttribute($context["product_discount"], "quantity", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
            echo "\" class=\"form-control\" /></td>
                    <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 930
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][priority]\" value=\"";
            echo $this->getAttribute($context["product_discount"], "priority", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
            echo "\" class=\"form-control\" /></td>
                    <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 931
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][price]\" value=\"";
            echo $this->getAttribute($context["product_discount"], "price", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
            echo "\" class=\"form-control\" /></td>
                    <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\">
                        <input type=\"text\" name=\"product_discount[";
            // line 933
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][date_start]\" value=\"";
            echo $this->getAttribute($context["product_discount"], "date_start", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" />
                        <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div></td>
                    <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\">
                        <input type=\"text\" name=\"product_discount[";
            // line 938
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][date_end]\" value=\"";
            echo $this->getAttribute($context["product_discount"], "date_end", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" />
                        <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div></td>
                    <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#discount-row";
            // line 942
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            // line 944
            $context["discount_row"] = ((isset($context["discount_row"]) ? $context["discount_row"] : null) + 1);
            // line 945
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 946
        echo "                    </tbody>
                  
                  <tfoot>
                    <tr>
                      <td colspan=\"6\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\" title=\"";
        // line 951
        echo (isset($context["button_discount_add"]) ? $context["button_discount_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-special\">
              <div class=\"table-responsive\">
                <table id=\"special\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 962
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 963
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 964
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 965
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 966
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 972
        $context["special_row"] = 0;
        // line 973
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_specials"]) ? $context["product_specials"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 974
            echo "                  <tr id=\"special-row";
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "\">
                    <td class=\"text-left\"><select name=\"product_special[";
            // line 975
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][customer_group_id]\" class=\"form-control\">
                        

                          ";
            // line 978
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 979
                echo "                          ";
                if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == $this->getAttribute($context["product_special"], "customer_group_id", array()))) {
                    // line 980
                    echo "
                        
                        <option value=\"";
                    // line 982
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>
                        

                          ";
                } else {
                    // line 986
                    echo "
                        
                        <option value=\"";
                    // line 988
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>
                        

                          ";
                }
                // line 992
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 993
            echo "
                      
                      </select></td>
                    <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 996
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][priority]\" value=\"";
            echo $this->getAttribute($context["product_special"], "priority", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
            echo "\" class=\"form-control\" /></td>
                    <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 997
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][price]\" value=\"";
            echo $this->getAttribute($context["product_special"], "price", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
            echo "\" class=\"form-control\" /></td>
                    <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\">
                        <input type=\"text\" name=\"product_special[";
            // line 999
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][date_start]\" value=\"";
            echo $this->getAttribute($context["product_special"], "date_start", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" />
                        <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div></td>
                    <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\">
                        <input type=\"text\" name=\"product_special[";
            // line 1004
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][date_end]\" value=\"";
            echo $this->getAttribute($context["product_special"], "date_end", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" />
                        <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div></td>
                    <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#special-row";
            // line 1008
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            // line 1010
            $context["special_row"] = ((isset($context["special_row"]) ? $context["special_row"] : null) + 1);
            // line 1011
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1012
        echo "                    </tbody>
                  
                  <tfoot>
                    <tr>
                      <td colspan=\"5\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\" title=\"";
        // line 1017
        echo (isset($context["button_special_add"]) ? $context["button_special_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1028
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class=\"text-left\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1033
        echo (isset($context["thumb"]) ? $context["thumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                        <input type=\"hidden\" name=\"image\" value=\"";
        // line 1034
        echo (isset($context["image"]) ? $context["image"] : null);
        echo "\" id=\"input-image\" /></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class=\"table-responsive\">

            <style>
                #frame {
                    position: absolute;
                    z-index: 1140;
                    background: blue;
                    opacity: 0.2;
                    border: 1px solid grey;
                }
                #modal-image {
                    user-select: none;
                }
            </style>
            <button type=\"button\" id=\"button-multiselect\" data-toggle=\"tooltip\" title=\"";
        // line 1053
        echo (isset($context["button_multiselect"]) ? $context["button_multiselect"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_multiselect"]) ? $context["button_multiselect"] : null);
        echo "</button>
            <br/>
        
                <table id=\"images\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1059
        echo (isset($context["entry_additional_image"]) ? $context["entry_additional_image"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1060
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 1066
        $context["image_row"] = 0;
        // line 1067
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_images"]) ? $context["product_images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1068
            echo "                  <tr id=\"image-row";
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "\">
                    <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 1069
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo $this->getAttribute($context["product_image"], "thumb", array());
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "\" /></a>
                      <input type=\"hidden\" name=\"product_image[";
            // line 1070
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "][image]\" value=\"";
            echo $this->getAttribute($context["product_image"], "image", array());
            echo "\" id=\"input-image";
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "\" /></td>
                    <td class=\"text-right\"><input type=\"text\" name=\"product_image[";
            // line 1071
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "][sort_order]\" value=\"";
            echo $this->getAttribute($context["product_image"], "sort_order", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
            echo "\" class=\"form-control\" /></td>
                    <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
            // line 1072
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            // line 1074
            $context["image_row"] = ((isset($context["image_row"]) ? $context["image_row"] : null) + 1);
            // line 1075
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1076
        echo "                    </tbody>
                  
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\" title=\"";
        // line 1081
        echo (isset($context["button_image_add"]) ? $context["button_image_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-reward\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-points\"><span data-toggle=\"tooltip\" title=\"";
        // line 1089
        echo (isset($context["help_points"]) ? $context["help_points"] : null);
        echo "\">";
        echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"points\" value=\"";
        // line 1091
        echo (isset($context["points"]) ? $context["points"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
        echo "\" id=\"input-points\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1098
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1099
        echo (isset($context["entry_reward"]) ? $context["entry_reward"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 1104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1105
            echo "                  <tr>
                    <td class=\"text-left\">";
            // line 1106
            echo $this->getAttribute($context["customer_group"], "name", array());
            echo "</td>
                    <td class=\"text-right\"><input type=\"text\" name=\"product_reward[";
            // line 1107
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "][points]\" value=\"";
            echo (($this->getAttribute((isset($context["product_reward"]) ? $context["product_reward"] : null), $this->getAttribute($context["customer_group"], "customer_group_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_reward"]) ? $context["product_reward"] : null), $this->getAttribute($context["customer_group"], "customer_group_id", array()), array(), "array"), "points", array())) : (""));
            echo "\" class=\"form-control\" /></td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1110
        echo "                    </tbody>
                  
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 1116
        echo (isset($context["text_keyword"]) ? $context["text_keyword"] : null);
        echo "</div>            
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1121
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
\t\t      <td class=\"text-left\">";
        // line 1122
        echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 1126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1127
            echo "                  <tr>
                    <td class=\"text-left\">";
            // line 1128
            echo $this->getAttribute($context["store"], "name", array());
            echo "</td>
                    <td class=\"text-left\">";
            // line 1129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1130
                echo "                      <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /></span>
                        <input type=\"text\" name=\"product_seo_url[";
                // line 1131
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute($this->getAttribute((isset($context["product_seo_url"]) ? $context["product_seo_url"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    echo $this->getAttribute($this->getAttribute((isset($context["product_seo_url"]) ? $context["product_seo_url"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                }
                echo "\" placeholder=\"";
                echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
                echo "\" class=\"form-control\" />
                      </div>
                      ";
                // line 1133
                if ($this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    // line 1134
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                    echo "</div>
                      ";
                }
                // line 1135
                echo " 
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1136
            echo "</td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1139
        echo "                    </tbody>
                  
                </table>
              </div>
            </div>

\t\t\t<!-- GF-AdminProductCommentTab start -->
<div class=\"tab-pane\" id=\"tab-review\">\t
\t";
        // line 1147
        echo (isset($context["review"]) ? $context["review"] : null);
        echo "\t
</div>
<script type=\"text/javascript\"><!--
\t\$('.date').datetimepicker({
\t\tlanguage: '";
        // line 1151
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\tpickTime: false
\t});
//--></script>
<script type=\"text/javascript\"><!--
\tfunction CreateUrl(proc) {
\t\tvar u = 'index.php?route=catalog/review_tab/'+proc+'&user_token=";
        // line 1157
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&product_id=";
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "';
\t\t
\t\tvar filter_author = \$('input[name=\\'filter_author\\']').val();
\t\tif (filter_author) {
\t\t\tu += '&filter_author=' + encodeURIComponent(filter_author);
\t\t}
\t\t
\t\tvar filter_status = \$('select[name=\\'filter_status\\']').val();
\t\tif (filter_status !== '') {
\t\t\tu += '&filter_status=' + encodeURIComponent(filter_status); 
\t\t}\t\t
\t\t\t\t
\t\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();
\t\tif (filter_date_added) {
\t\t\tu += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t\t}
\t\treturn u;
\t}

\tfunction ClickCopy(dop) {
\t\t\$.ajax({
\t\t\turl: CreateUrl('copy') + dop,
\t\t\ttype: \"POST\",
\t\t\tdataType: \"html\",
\t\t\tdata: \$(\"form\").serialize(),  
\t\t\tsuccess: function(response) { 
\t\t\t\tif (response == \"0\") {
\t\t\t\t\t\$('#tab-review').html('<tr><td class=\"text-center\" colspan=\"7\">Пустой ответ</td></tr>');
\t\t\t\t} else {
\t\t\t\t\t\$('#tab-review').html(response);
\t\t\t\t}
\t\t\t},
\t\t\terror: function(response) { 
\t\t\t\talert('Ощибка удаления');
\t\t\t}
\t\t});
\t}
\tfunction ClickDelete(dop) {
\t\t\$.ajax({
\t\t\turl: CreateUrl('delete') + dop,
\t\t\ttype: \"POST\",
\t\t\tdataType: \"html\",
\t\t\tdata: \$(\"form\").serialize(),  
\t\t\tsuccess: function(response) { 
\t\t\t\tif (response == \"0\") {
\t\t\t\t\t\$('#tab-review').html('<tr><td class=\"text-center\" colspan=\"7\">Пустой ответ</td></tr>');
\t\t\t\t} else {
\t\t\t\t\t\$('#tab-review').html(response);
\t\t\t\t}
\t\t\t},
\t\t\terror: function(response) { 
\t\t\t\talert('Ощибка удаления');
\t\t\t}
\t\t});
\t}
\tfunction ClickRefresh(dop) {
\t\t\$.ajax({
\t\t\turl: CreateUrl('tab') + dop,
\t\t\tdataType: \"html\",
\t\t\tsuccess: function(data) {  
\t\t\t\tif (data == \"0\") {
\t\t\t\t\t\$('#tab-review').html('<tr><td class=\"text-center\" colspan=\"7\">Пустой ответ</td></tr>');
\t\t\t\t} else {
\t\t\t\t\t\$('#tab-review').html(data);
\t\t\t\t}
\t\t\t}
\t\t});
\t}
\tfunction ClickClose(url) {
\t\tClickRefresh(url);
\t\t\$('button.close').click();
\t}
\tfunction ClickSort(url) {
\t\tClickRefresh(url);
\t}
\tfunction ClickFilter(dop) {
\t\tClickRefresh(dop);
\t}
\tfunction ClickSave(proc,dop) {
\t\t\$.ajax({
\t\t\turl: CreateUrl(proc) + dop,
\t\t\ttype: \"POST\",
\t\t\tdataType: \"html\",
\t\t\tdata: {
\t\t\t\t'product_id': ";
        // line 1241
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo ",
\t\t\t\t'author': \$('#input-author').val(),
\t\t\t\t'text': \$('#input-text').val(),
\t\t\t\t'date_added': \$('#input-date-added').val(),
\t\t\t\t'rating': \$('input[name=rewiev-rating]:checked').val(),
\t\t\t\t'status': \$('select#rewiev-status').val()
\t\t\t},  
\t\t\tsuccess: function(data) { 
\t\t\t\t\$('#modal-reviw').html(data);
\t\t\t},
\t\t\terror: function(response) { 
\t\t\t\talert('Ощибка сохранения');
\t\t\t}
\t\t});\t
\t\t\t
\t}
\tfunction ClickAdd(dop) {\t\t
\t\t\$.ajax({
\t\t\turl: CreateUrl('add') + dop,
\t\t\tdataType: 'html',
\t\t\tsuccess: function(html) {
\t\t\t\t\$('#modal-reviw').remove();
\t\t\t\t\$('body').prepend('<div id=\"modal-reviw\" class=\"modal\">' + html + '</div>');
\t\t\t\t\$('#modal-reviw').modal('show');
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t}
\tfunction ClickEdit(dop,rev_id) {
\t\t\$.ajax({
\t\t\turl: CreateUrl('edit') + dop + '&review_id=' + encodeURIComponent(rev_id),
\t\t\tdataType: 'html',
\t\t\tsuccess: function(html) {
\t\t\t\t\$('#modal-reviw').remove();
\t\t\t\t\$('body').prepend('<div id=\"modal-reviw\" class=\"modal\">' + html + '</div>');
\t\t\t\t\$('#modal-reviw').modal('show');
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t}
//--></script>\t\t\t\t\t\t
\t\t\t<!-- GF-AdminProductCommentTab end -->
\t\t\t

\t\t\t<!--xml-->
\t\t\t<div class=\"tab-pane\" id=\"tab-customtabmain\">
\t\t\t\t <div class=\"col-sm-2\">
\t\t\t\t  <ul class=\"nav nav-pills nav-stacked\" id=\"customtab\">
\t\t\t\t\t";
        // line 1293
        $context["customtab_row"] = 0;
        // line 1294
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_customtabs"]) ? $context["product_customtabs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_customtab"]) {
            // line 1295
            echo "\t\t\t\t\t<li><a href=\"#tab-customtab";
            echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-customtab";
            echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
            echo "\\']').parent().remove(); \$('#tab-customtab";
            echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
            echo "').remove(); \$('#customtab a:first').tab('show');\"></i> ";
            echo (isset($context["tab_customtab"]) ? $context["tab_customtab"] : null);
            echo " ";
            echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
            echo "</a></li>
\t\t\t\t\t";
            // line 1296
            $context["customtab_row"] = ((isset($context["customtab_row"]) ? $context["customtab_row"] : null) + 1);
            // line 1297
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_customtab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1298
        echo "\t\t\t\t\t<li id=\"customtab-add\"><a onclick=\"addCustomtab();\"><i class=\"fa fa-plus-circle\"></i> ";
        echo (isset($context["button_customtab_add"]) ? $context["button_customtab_add"] : null);
        echo "</a></li>
\t\t\t\t  </ul>
\t\t\t\t</div>
\t\t\t<div class=\"col-sm-10\">
              <div class=\"tab-content tab-content2\">
                ";
        // line 1303
        $context["customtab_row"] = 0;
        // line 1304
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_customtabs"]) ? $context["product_customtabs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_customtab"]) {
            // line 1305
            echo "                <div class=\"tab-pane\" id=\"tab-customtab";
            echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
            echo "\">
                  <ul class=\"nav nav-tabs\" id=\"clanguage";
            // line 1306
            echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
            echo "\">
                    ";
            // line 1307
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1308
                echo "                    <li><a href=\"#tab-customtab";
                echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
                echo "-language";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" />  ";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1310
            echo "                  </ul>
                  <div class=\"tab-content\">
                    ";
            // line 1312
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1313
                echo "                    <div class=\"tab-pane\" id=\"tab-customtab";
                echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
                echo "-language";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\">
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-heading";
                // line 1315
                echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
                echo "-language";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\">";
                echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
                echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"product_customtab[";
                // line 1317
                echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
                echo "][product_customtab_description][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][title]\" value=\"";
                echo (($this->getAttribute($this->getAttribute($context["product_customtab"], "product_customtab_description", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["product_customtab"], "product_customtab_description", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "title", array())) : (""));
                echo "\" class=\"form-control\"/>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-description";
                // line 1321
                echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
                echo "-language";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\">";
                echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
                echo "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"product_customtab[";
                // line 1323
                echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
                echo "][product_customtab_description][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][description]\" placeholder=\"";
                echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
                echo "\" id=\"input-description";
                echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
                echo "-language";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" class=\"form-control\">";
                echo (($this->getAttribute($this->getAttribute($context["product_customtab"], "product_customtab_description", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["product_customtab"], "product_customtab_description", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "description", array())) : (""));
                echo "</textarea>
                        </div>
                      </div>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1328
            echo "                  </div>
\t\t\t\t\t<div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-sort_order";
            // line 1330
            echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
            echo "\">";
            echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                         <input type=\"text\" name=\"product_customtab[";
            // line 1332
            echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
            echo "][sort_order]\" value=\"";
            echo $this->getAttribute($context["product_customtab"], "sort_order", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
            echo "\" class=\"form-control\" />
                        </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-status";
            // line 1336
            echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
            echo "\">";
            echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                        <select name=\"product_customtab[";
            // line 1338
            echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
            echo "][status]\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t";
            // line 1339
            if ($this->getAttribute($context["product_customtab"], "status", array())) {
                // line 1340
                echo "\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
\t\t\t\t\t\t<option value=\"0\">";
                // line 1341
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
\t\t\t\t\t\t";
            } else {
                // line 1343
                echo "\t\t\t\t\t\t<option value=\"1\">";
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 1344
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
\t\t\t\t\t\t";
            }
            // line 1346
            echo "\t\t\t\t\t  </select>
                        </div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t  
                </div>
\t\t\t\t";
            // line 1353
            $context["customtab_row"] = ((isset($context["customtab_row"]) ? $context["customtab_row"] : null) + 1);
            // line 1354
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_customtab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1355
        echo "              </div>
            </div>
\t\t\t</div>
\t\t\t<!--xml-->
\t\t\t
            <div class=\"tab-pane\" id=\"tab-design\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1365
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1366
        echo (isset($context["entry_layout"]) ? $context["entry_layout"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 1370
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1371
            echo "                  <tr>
                    <td class=\"text-left\">";
            // line 1372
            echo $this->getAttribute($context["store"], "name", array());
            echo "</td>
                    <td class=\"text-left\"><select name=\"product_layout[";
            // line 1373
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" class=\"form-control\">
                        <option value=\"\"></option>
                        

                          ";
            // line 1377
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["layouts"]) ? $context["layouts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1378
                echo "                          ";
                if (($this->getAttribute((isset($context["product_layout"]) ? $context["product_layout"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") && ($this->getAttribute((isset($context["product_layout"]) ? $context["product_layout"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == $this->getAttribute($context["layout"], "layout_id", array())))) {
                    // line 1379
                    echo "
                        
                        <option value=\"";
                    // line 1381
                    echo $this->getAttribute($context["layout"], "layout_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["layout"], "name", array());
                    echo "</option>
                        

                          ";
                } else {
                    // line 1385
                    echo "
                        
                        <option value=\"";
                    // line 1387
                    echo $this->getAttribute($context["layout"], "layout_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["layout"], "name", array());
                    echo "</option>
                        

                          ";
                }
                // line 1391
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1392
            echo "
                      
                      </select></td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1397
        echo "                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script> 
  <script type=\"text/javascript\"><!--
// Manufacturer
\$('input[name=\\'manufacturer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 1420
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({
\t\t\t\t\tmanufacturer_id: 0,
\t\t\t\t\tname: '";
        // line 1425
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "'
\t\t\t\t});

\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['manufacturer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'manufacturer\\']').val(item['label']);
\t\t\$('input[name=\\'manufacturer_id\\']').val(item['value']);
\t}
});

// Category
\$('input[name=\\'category\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 1447
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'category\\']').val('');

\t\t\$('#product-category' + item['value']).remove();

\t\t\$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#product-category').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

// Filter
\$('input[name=\\'filter\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/filter/autocomplete&user_token=";
        // line 1476
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['filter_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter\\']').val('');

\t\t\$('#product-filter' + item['value']).remove();

\t\t\$('#product-filter').append('<div id=\"product-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#product-filter').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

// Downloads
\$('input[name=\\'download\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/download/autocomplete&user_token=";
        // line 1505
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['download_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'download\\']').val('');

\t\t\$('#product-download' + item['value']).remove();

\t\t\$('#product-download').append('<div id=\"product-download' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#product-download').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

// Related
\$('input[name=\\'related\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 1534
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'related\\']').val('');

\t\t\$('#product-related' + item['value']).remove();

\t\t\$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#product-related').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});
//--></script> 
  <script type=\"text/javascript\"><!--
var attribute_row = ";
        // line 1560
        echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
        echo ";

function addAttribute() {
    html  = '<tr id=\"attribute-row' + attribute_row + '\">';
\thtml += '  <td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1564
        echo (isset($context["entry_attribute"]) ? $context["entry_attribute"] : null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
\thtml += '  <td class=\"text-left\">';
\t";
        // line 1566
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1567
            echo "\thtml += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
            echo "\" class=\"form-control\"></textarea></div>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1569
        echo "\thtml += '  </td>';
\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1570
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
    html += '</tr>';

\t\$('#attribute tbody').append(html);

\tattributeautocomplete(attribute_row);

\tattribute_row++;
}

function attributeautocomplete(attribute_row) {
\t\$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').autocomplete({
\t\t'source': function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=catalog/attribute/autocomplete&user_token=";
        // line 1584
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tcategory: item.attribute_group,
\t\t\t\t\t\t\tlabel: item.name,
\t\t\t\t\t\t\tvalue: item.attribute_id
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t\t'select': function(item) {
\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val(item['label']);
\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val(item['value']);
\t\t}
\t});
}

\$('#attribute tbody tr').each(function(index, element) {
\tattributeautocomplete(index);
});
//--></script> 
  <script type=\"text/javascript\"><!--
var option_row = ";
        // line 1609
        echo (isset($context["option_row"]) ? $context["option_row"] : null);
        echo ";

\$('input[name=\\'option\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 1614
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tcategory: item['category'],
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['option_id'],
\t\t\t\t\t\ttype: item['type'],
\t\t\t\t\t\toption_value: item['option_value']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\thtml  = '<div class=\"tab-pane\" id=\"tab-option' + option_row + '\">';
\t\thtml += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
\t\thtml += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
\t\thtml += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
\t\thtml += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

\t\thtml += '\t<div class=\"form-group\">';
\t\thtml += '\t  <label class=\"col-sm-2 control-label\" for=\"input-required' + option_row + '\">";
        // line 1637
        echo (isset($context["entry_required"]) ? $context["entry_required"] : null);
        echo "</label>';
\t\thtml += '\t  <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
\t\thtml += '\t      <option value=\"1\">";
        // line 1639
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>';
\t\thtml += '\t      <option value=\"0\">";
        // line 1640
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</option>';
\t\thtml += '\t  </select></div>';
\t\thtml += '\t</div>';

\t\tif (item['type'] == 'text') {
\t\t\thtml += '\t<div class=\"form-group\">';
\t\t\thtml += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1646
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1647
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'textarea') {
\t\t\thtml += '\t<div class=\"form-group\">';
\t\t\thtml += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1653
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 1654
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'file') {
\t\t\thtml += '\t<div class=\"form-group\" style=\"display: none;\">';
\t\t\thtml += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1660
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1661
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'date') {
\t\t\thtml += '\t<div class=\"form-group\">';
\t\t\thtml += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1667
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1668
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'time') {
\t\t\thtml += '\t<div class=\"form-group\">';
\t\t\thtml += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1674
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1675
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'datetime') {
\t\t\thtml += '\t<div class=\"form-group\">';
\t\t\thtml += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1681
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1682
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
\t\t\thtml += '<div class=\"table-responsive\">';
\t\t\thtml += '  <table id=\"option-value' + option_row + '\" class=\"table table-striped table-bordered table-hover\">';
\t\t\thtml += '  \t <thead>';
\t\t\thtml += '      <tr>';
\t\t\thtml += '        <td class=\"text-left\">";
        // line 1691
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</td>';
\t\t\thtml += '        <td class=\"text-right\">";
        // line 1692
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "</td>';
\t\t\thtml += '        <td class=\"text-left\">";
        // line 1693
        echo (isset($context["entry_subtract"]) ? $context["entry_subtract"] : null);
        echo "</td>';
\t\t\thtml += '        <td class=\"text-right\">";
        // line 1694
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</td>';
\t\t\thtml += '        <td class=\"text-right\">";
        // line 1695
        echo (isset($context["entry_option_points"]) ? $context["entry_option_points"] : null);
        echo "</td>';
\t\t\thtml += '        <td class=\"text-right\">";
        // line 1696
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "</td>';
\t\t\thtml += '        <td></td>';
\t\t\thtml += '      </tr>';
\t\t\thtml += '  \t </thead>';
\t\t\thtml += '  \t <tbody>';
\t\t\thtml += '    </tbody>';
\t\t\thtml += '    <tfoot>';
\t\t\thtml += '      <tr>';
\t\t\thtml += '        <td colspan=\"6\"></td>';
\t\t\thtml += '        <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue(' + option_row + ');\" data-toggle=\"tooltip\" title=\"";
        // line 1705
        echo (isset($context["button_option_value_add"]) ? $context["button_option_value_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>';
\t\t\thtml += '      </tr>';
\t\t\thtml += '    </tfoot>';
\t\t\thtml += '  </table>';
\t\t\thtml += '</div>';

            html += '  <select id=\"option-values' + option_row + '\" style=\"display: none;\">';

            for (i = 0; i < item['option_value'].length; i++) {
\t\t\t\thtml += '  <option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
            }

            html += '  </select>';
\t\t\thtml += '</div>';
\t\t}

\t\t\$('#tab-option .tab-content').append(html);

\t\t\$('#option > li:last-child').before('<li><a href=\"#tab-option' + option_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#option a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-option' + option_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-option' + option_row + '\\').remove();\"></i>' + item['label'] + '</li>');

\t\t\$('#option a[href=\\'#tab-option' + option_row + '\\']').tab('show');

\t\t\$('[data-toggle=\\'tooltip\\']').tooltip({
\t\t\tcontainer: 'body',
\t\t\thtml: true
\t\t});

\t\t\$('.date').datetimepicker({
\t\t\tlanguage: '";
        // line 1733
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\t\tpickTime: false
\t\t});

\t\t\$('.time').datetimepicker({
\t\t\tlanguage: '";
        // line 1738
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\t\tpickDate: false
\t\t});

\t\t\$('.datetime').datetimepicker({
\t\t\tlanguage: '";
        // line 1743
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\t\tpickDate: true,
\t\t\tpickTime: true
\t\t});

\t\toption_row++;
\t}
});
//--></script> 
  <script type=\"text/javascript\"><!--
var option_value_row = ";
        // line 1753
        echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
        echo ";

function addOptionValue(option_row) {
\thtml  = '<tr id=\"option-value-row' + option_value_row + '\">';
\thtml += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
\thtml += \$('#option-values' + option_row).html();
\thtml += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1760
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
\thtml += '    <option value=\"1\">";
        // line 1762
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>';
\thtml += '    <option value=\"0\">";
        // line 1763
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</option>';
\thtml += '  </select></td>';
\thtml += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
\thtml += '    <option value=\"+\">+</option>';
\thtml += '    <option value=\"-\">-</option>';
\thtml += '  </select>';
\thtml += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 1769
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
\thtml += '    <option value=\"+\">+</option>';
\thtml += '    <option value=\"-\">-</option>';
\thtml += '  </select>';
\thtml += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 1774
        echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
\thtml += '    <option value=\"+\">+</option>';
\thtml += '    <option value=\"-\">-</option>';
\thtml += '  </select>';
\thtml += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 1779
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        // line 1780
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#option-value' + option_row + ' tbody').append(html);
\t\$('[rel=tooltip]').tooltip();

\toption_value_row++;
}
//--></script> 
  <script type=\"text/javascript\"><!--
var discount_row = ";
        // line 1790
        echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
        echo ";

function addDiscount() {
\thtml  = '<tr id=\"discount-row' + discount_row + '\">';
    html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
    ";
        // line 1795
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1796
            echo "    html += '    <option value=\"";
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer_group"], "name", array()), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1798
        echo "    html += '  </select></td>';
    html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1799
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "\" class=\"form-control\" /></td>';
    html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1800
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 1801
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" class=\"form-control\" /></td>';
    html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1802
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\thtml += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1803
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1804
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#discount tbody').append(html);

\t\$('.date').datetimepicker({
\t\tpickTime: false
\t});

\tdiscount_row++;
}
//--></script> 
  <script type=\"text/javascript\"><!--
var special_row = ";
        // line 1817
        echo (isset($context["special_row"]) ? $context["special_row"] : null);
        echo ";

function addSpecial() {
\thtml  = '<tr id=\"special-row' + special_row + '\">';
    html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
    ";
        // line 1822
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1823
            echo "    html += '      <option value=\"";
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer_group"], "name", array()), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1825
        echo "    html += '  </select></td>';
    html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1826
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 1827
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" class=\"form-control\" /></td>';
    html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1828
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\thtml += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1829
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1830
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#special tbody').append(html);

\t\$('.date').datetimepicker({
\t\tlanguage: '";
        // line 1836
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\tpickTime: false
\t});

\tspecial_row++;
}
//--></script> 
  <script type=\"text/javascript\"><!--
var image_row = ";
        // line 1844
        echo (isset($context["image_row"]) ? $context["image_row"] : null);
        echo ";

function addImage() {
\thtml  = '<tr id=\"image-row' + image_row + '\">';
\thtml += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1848
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 1849
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row  + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1850
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#images tbody').append(html);

\timage_row++;
}
//--></script> 
  <script type=\"text/javascript\"><!--
var recurring_row = ";
        // line 1859
        echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
        echo ";

function addRecurring() {
\thtml  = '<tr id=\"recurring-row' + recurring_row + '\">';
\thtml += '  <td class=\"left\">';
\thtml += '    <select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';
\t";
        // line 1865
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 1866
            echo "\thtml += '      <option value=\"";
            echo $this->getAttribute($context["recurring"], "recurring_id", array());
            echo "\">";
            echo $this->getAttribute($context["recurring"], "name", array());
            echo "</option>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1868
        echo "\thtml += '    </select>';
\thtml += '  </td>';
\thtml += '  <td class=\"left\">';
\thtml += '    <select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';
\t";
        // line 1872
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1873
            echo "\thtml += '      <option value=\"";
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "\">";
            echo $this->getAttribute($context["customer_group"], "name", array());
            echo "</option>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1875
        echo "\thtml += '    <select>';
\thtml += '  </td>';
\thtml += '  <td class=\"left\">';
\thtml += '    <a onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 1878
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>';
\thtml += '  </td>';
\thtml += '</tr>';

\t\$('#tab-recurring table tbody').append(html);

\trecurring_row++;
}
//--></script> 
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 1889
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 1894
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 1899
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: true,
\tpickTime: true
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
\$('#option a:first').tab('show');
//--></script></div>

<script type=\"text/javascript\" src=\"view/javascript/como/como_tools.js\"></script> 
<script type=\"text/javascript\"><!--
\$(document).ready(function() {
    var boxes = ['";
        // line 1912
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "', '";
        echo (isset($context["entry_filter"]) ? $context["entry_filter"] : null);
        echo "', '";
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "', '";
        echo (isset($context["entry_download"]) ? $context["entry_download"] : null);
        echo "', '";
        echo (isset($context["entry_related"]) ? $context["entry_related"] : null);
        echo "'];
    \$('label').each(function() {
        if (boxes.indexOf(\$(this).text()) != -1) {
            \$(this).append('<br /><button class=\"btn btn-primary btn-xs\" type=\"button\" onclick=\"this.disabled=true;comoToggleBoxExpand(this, event);\" data-toggle=\"tooltip\" title=\"";
        // line 1915
        echo (isset($context["button_toggleexpand"]) ? $context["button_toggleexpand"] : null);
        echo "\"><i class=\"fa fa-caret-down\"></i></button>');
        }
    });
});
//--></script>
            

<script type=\"text/javascript\"><!--
//quicksave
\$(\"#qsave\").on(\"click\",function(){for(var e=\$(\".note-editor\").length,r=0;e>r;r++){var t=\$(\".note-editor\").eq(r).parent().children(\"textarea\").attr(\"id\");if(\"function\"==typeof \$().code)var a=\$(\"#\"+t).code();else a=\$(\"#\"+t).summernote(\"code\");\$(\"#\"+t).html(a)}\$.ajax({type:\"post\",data:\$(\"form\").serialize(),url:\"index.php?route=catalog/product/qsave&user_token=";
        // line 1924
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&product_id=";
        echo (isset($context["pidqs"]) ? $context["pidqs"] : null);
        echo "\",dataType:\"json\",beforeSend:function(){\$(\"#qsave\").prop(\"disabled\",!0)},complete:function(){\$(\"#qsave\").prop(\"disabled\",!1)},success:function(e){if(\$(\".alert\").remove(),\$(\".text-danger\").remove(),\$(\"div\").removeClass(\"has-error\"),e.error){if(html='<div class=\"alert alert-danger\">',html+=\" \"+e.error.warning+' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></br>',e.error.name){var t=\"\";for(r in e.error.name){var a=\$(\"#input-name\"+r);\$(a).after('<div class=\"text-danger\">'+e.error.name[r]+\"</div>\"),\$(a).parent().addClass(\"has-error\"),t='</br><i class=\"fa fa-exclamation-circle\"></i> '+e.error.name[r]}html+=t}if(e.error.meta_title){t=\"\";for(r in e.error.meta_title){a=\$(\"#input-meta-title\"+r);\$(a).after('<div class=\"text-danger\">'+e.error.meta_title[r]+\"</div>\"),\$(a).parent().addClass(\"has-error\"),t='</br><i class=\"fa fa-exclamation-circle\"></i> '+e.error.meta_title[r]}html+=t}if(e.error.model&&(\$(\"#input-model\").after('<div class=\"text-danger\">'+e.error.model+\"</div>\"),\$(\"#input-model\").parent().addClass(\"has-error\"),html+='</br><i class=\"fa fa-exclamation-circle\"></i> '+e.error.model),e.error.keyword){t=\"\";for(s in e.error.keyword)for(r in e.error.keyword[s]){a=\$('[name=\"product_seo_url['+s+\"][\"+r+']\"]');\$(a).parent().after('<div class=\"text-danger\">'+e.error.keyword[s][r]+\"</div>\"),\$(a).parent(\".input-group\").addClass(\"has-error\"),t='</br><i class=\"fa fa-exclamation-circle\"></i> '+e.error.keyword[s][r],html+=t}}html+=\" </div>\",\$(\"#content > .container-fluid\").prepend(html)}e.success&&\$(\"#content > .container-fluid\").prepend('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> '+e.success+'  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>')},error:function(e,r,t){alert(t+\"\\r\\n\"+e.statusText+\"\\r\\n\"+e.responseText)}})});
//quicksave end
//--></script>
\t\t\t

\t\t\t<!--xml-->
\t\t\t
\t\t\t<script type=\"text/javascript\"><!--
";
        // line 1932
        $context["customtab_row"] = 0;
        // line 1933
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_customtabs"]) ? $context["product_customtabs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_customtab"]) {
            // line 1934
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1935
                echo "\$('#input-description";
                echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
                echo "-language";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "').summernote({
\theight: 300
});
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1939
            $context["customtab_row"] = ((isset($context["customtab_row"]) ? $context["customtab_row"] : null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_customtab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1941
        echo "

//--></script> 

<script type=\"text/javascript\"><!--
var customtab_row = ";
        // line 1946
        echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
        echo ";

function addCustomtab() {\t
\thtml  = '<div id=\"tab-customtab' + customtab_row + '\" class=\"tab-pane\">';
\thtml += '  <ul class=\"nav nav-tabs\" id=\"clanguage' + customtab_row + '\">';
    ";
        // line 1951
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1952
            echo "     html += '    <li><a href=\"#tab-customtab' + customtab_row + '-language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /> ";
            echo $this->getAttribute($context["language"], "name", array());
            echo "</a></li>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1954
        echo "\thtml += '  </ul>';

\thtml += '  <div class=\"tab-content\">';
\t";
        // line 1957
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1958
            echo "\thtml += '    <div class=\"tab-pane\" id=\"tab-customtab' + customtab_row + '-language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">';
\thtml += '      <div class=\"form-group\">';
\thtml += '        <label class=\"col-sm-2 control-label\" for=\"input-title' + customtab_row + '-language";
            // line 1960
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
            echo "</label>';
\thtml += '        <div class=\"col-sm-10\"><input type=\"text\" name=\"product_customtab[' + customtab_row + '][product_customtab_description][";
            // line 1961
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][title]\" placeholder=\"";
            echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
            echo "\" id=\"input-title' + customtab_row + '-language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" value=\"\" class=\"form-control\"/></div>';
\thtml += '      </div>';
\thtml += '      <div class=\"form-group\">';
\thtml += '        <label class=\"col-sm-2 control-label\" for=\"input-description' + customtab_row + '-language";
            // line 1964
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>';
\thtml += '        <div class=\"col-sm-10\"><textarea name=\"product_customtab[' + customtab_row + '][product_customtab_description][";
            // line 1965
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][description]\" id=\"input-description' + customtab_row + '-language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"></textarea></div>';
\thtml += '      </div>';
\thtml += '    </div>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1969
        echo "\thtml += '  </div>';
\thtml += '      <div class=\"form-group\">';
\thtml += '        <label class=\"col-sm-2 control-label\" for=\"input-status' + customtab_row +'\">";
        // line 1971
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>';
\thtml += '        <div class=\"col-sm-10\"><select name=\"product_customtab[' + customtab_row + '][status]\" class=\"form-control\"><option value=\"1\">";
        // line 1972
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option><option value=\"0\">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option></select></div>';
\thtml += '      </div>';
\thtml += '  <div class=\"form-group\">';
\thtml += '<label class=\"col-sm-2 control-label\" for=\"input-sort_order' + customtab_row +'\">";
        // line 1975
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>';
\thtml += ' <div class=\"col-sm-10\"><input type=\"text\" name=\"product_customtab[' + customtab_row + '][sort_order]\" value=\"\" class=\"form-control\" /></div>';
\thtml += '</div>';
\thtml += '</div>';
\t
\t\$('#tab-customtabmain .tab-content2').append(html);
\t
\t";
        // line 1982
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1983
            echo "\t\$('#input-description' + customtab_row + '-language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "').summernote({
\t\theight: 300
\t});
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1987
        echo "\t
\t\$('#customtab a[href=\\'#tab-customtab' + customtab_row + '\\']').tab('show');
\t
\t\$('#clanguage' + customtab_row + ' li:first-child a').tab('show');
\t
\t\$('#customtab-add').before('<li><a href=\"#tab-customtab' + customtab_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$(\\'a[href=\\\\\\'#tab-customtab' + customtab_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-customtab' + customtab_row + '\\').remove(); \$(\\'#customtab li a:first\\').tab(\\'show\\');\"></i> ";
        // line 1992
        echo (isset($context["tab_customtab"]) ? $context["tab_customtab"] : null);
        echo " ' + customtab_row + '</a></li>');
\t
\t
\t\$('#customtab-' + customtab_row).trigger('click');
\t
\tcustomtab_row++;
}
//--></script> 

<script type=\"text/javascript\"><!--
\$('#customtab li:first-child a').tab('show');
";
        // line 2003
        $context["customtab_row"] = 0;
        // line 2004
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_customtabs"]) ? $context["product_customtabs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_customtab"]) {
            // line 2005
            echo "\$('#clanguage";
            echo (isset($context["customtab_row"]) ? $context["customtab_row"] : null);
            echo " li:first-child a').tab('show');
";
            // line 2006
            $context["customtab_row"] = ((isset($context["customtab_row"]) ? $context["customtab_row"] : null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_customtab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2007
        echo " 
//--></script> 
<!--xml-->
\t\t\t
";
        // line 2011
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "catalog/product_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4378 => 2011,  4372 => 2007,  4366 => 2006,  4361 => 2005,  4357 => 2004,  4355 => 2003,  4341 => 1992,  4334 => 1987,  4323 => 1983,  4319 => 1982,  4309 => 1975,  4301 => 1972,  4297 => 1971,  4293 => 1969,  4281 => 1965,  4275 => 1964,  4265 => 1961,  4259 => 1960,  4253 => 1958,  4249 => 1957,  4244 => 1954,  4227 => 1952,  4223 => 1951,  4215 => 1946,  4208 => 1941,  4202 => 1939,  4189 => 1935,  4185 => 1934,  4181 => 1933,  4179 => 1932,  4166 => 1924,  4154 => 1915,  4140 => 1912,  4124 => 1899,  4116 => 1894,  4108 => 1889,  4094 => 1878,  4089 => 1875,  4078 => 1873,  4074 => 1872,  4068 => 1868,  4057 => 1866,  4053 => 1865,  4044 => 1859,  4032 => 1850,  4028 => 1849,  4022 => 1848,  4015 => 1844,  4004 => 1836,  3995 => 1830,  3991 => 1829,  3987 => 1828,  3983 => 1827,  3979 => 1826,  3976 => 1825,  3965 => 1823,  3961 => 1822,  3953 => 1817,  3937 => 1804,  3933 => 1803,  3929 => 1802,  3925 => 1801,  3921 => 1800,  3917 => 1799,  3914 => 1798,  3903 => 1796,  3899 => 1795,  3891 => 1790,  3878 => 1780,  3874 => 1779,  3866 => 1774,  3858 => 1769,  3849 => 1763,  3845 => 1762,  3840 => 1760,  3830 => 1753,  3817 => 1743,  3809 => 1738,  3801 => 1733,  3770 => 1705,  3758 => 1696,  3754 => 1695,  3750 => 1694,  3746 => 1693,  3742 => 1692,  3738 => 1691,  3726 => 1682,  3722 => 1681,  3713 => 1675,  3709 => 1674,  3700 => 1668,  3696 => 1667,  3687 => 1661,  3683 => 1660,  3674 => 1654,  3670 => 1653,  3661 => 1647,  3657 => 1646,  3648 => 1640,  3644 => 1639,  3639 => 1637,  3613 => 1614,  3605 => 1609,  3577 => 1584,  3560 => 1570,  3557 => 1569,  3540 => 1567,  3536 => 1566,  3531 => 1564,  3524 => 1560,  3495 => 1534,  3463 => 1505,  3431 => 1476,  3399 => 1447,  3374 => 1425,  3366 => 1420,  3341 => 1397,  3331 => 1392,  3325 => 1391,  3316 => 1387,  3312 => 1385,  3303 => 1381,  3299 => 1379,  3296 => 1378,  3292 => 1377,  3285 => 1373,  3281 => 1372,  3278 => 1371,  3274 => 1370,  3267 => 1366,  3263 => 1365,  3251 => 1355,  3245 => 1354,  3243 => 1353,  3234 => 1346,  3229 => 1344,  3224 => 1343,  3219 => 1341,  3214 => 1340,  3212 => 1339,  3208 => 1338,  3201 => 1336,  3190 => 1332,  3183 => 1330,  3179 => 1328,  3158 => 1323,  3149 => 1321,  3138 => 1317,  3129 => 1315,  3121 => 1313,  3117 => 1312,  3113 => 1310,  3094 => 1308,  3090 => 1307,  3086 => 1306,  3081 => 1305,  3076 => 1304,  3074 => 1303,  3065 => 1298,  3059 => 1297,  3057 => 1296,  3044 => 1295,  3039 => 1294,  3037 => 1293,  2982 => 1241,  2893 => 1157,  2884 => 1151,  2877 => 1147,  2867 => 1139,  2859 => 1136,  2852 => 1135,  2846 => 1134,  2844 => 1133,  2831 => 1131,  2822 => 1130,  2818 => 1129,  2814 => 1128,  2811 => 1127,  2807 => 1126,  2800 => 1122,  2796 => 1121,  2788 => 1116,  2780 => 1110,  2769 => 1107,  2765 => 1106,  2762 => 1105,  2758 => 1104,  2750 => 1099,  2746 => 1098,  2734 => 1091,  2727 => 1089,  2716 => 1081,  2709 => 1076,  2703 => 1075,  2701 => 1074,  2694 => 1072,  2686 => 1071,  2678 => 1070,  2670 => 1069,  2665 => 1068,  2660 => 1067,  2658 => 1066,  2649 => 1060,  2645 => 1059,  2634 => 1053,  2612 => 1034,  2606 => 1033,  2598 => 1028,  2584 => 1017,  2577 => 1012,  2571 => 1011,  2569 => 1010,  2562 => 1008,  2551 => 1004,  2539 => 999,  2530 => 997,  2522 => 996,  2517 => 993,  2511 => 992,  2502 => 988,  2498 => 986,  2489 => 982,  2485 => 980,  2482 => 979,  2478 => 978,  2472 => 975,  2467 => 974,  2462 => 973,  2460 => 972,  2451 => 966,  2447 => 965,  2443 => 964,  2439 => 963,  2435 => 962,  2421 => 951,  2414 => 946,  2408 => 945,  2406 => 944,  2399 => 942,  2388 => 938,  2376 => 933,  2367 => 931,  2359 => 930,  2351 => 929,  2348 => 928,  2342 => 927,  2334 => 925,  2326 => 923,  2323 => 922,  2319 => 921,  2315 => 920,  2310 => 919,  2305 => 918,  2303 => 917,  2294 => 911,  2290 => 910,  2286 => 909,  2282 => 908,  2278 => 907,  2274 => 906,  2260 => 895,  2253 => 890,  2247 => 889,  2245 => 888,  2238 => 886,  2233 => 883,  2227 => 882,  2218 => 878,  2214 => 876,  2205 => 872,  2201 => 870,  2198 => 869,  2194 => 868,  2188 => 865,  2183 => 862,  2177 => 861,  2168 => 857,  2164 => 855,  2155 => 851,  2151 => 849,  2148 => 848,  2144 => 847,  2138 => 844,  2133 => 843,  2128 => 842,  2126 => 841,  2117 => 835,  2113 => 834,  2097 => 825,  2095 => 824,  2092 => 823,  2086 => 820,  2083 => 819,  2071 => 815,  2067 => 813,  2062 => 812,  2060 => 811,  2054 => 808,  2044 => 803,  2037 => 798,  2031 => 797,  2029 => 796,  2022 => 794,  2012 => 793,  2007 => 790,  1999 => 784,  1991 => 778,  1988 => 777,  1980 => 771,  1972 => 765,  1970 => 764,  1962 => 761,  1952 => 760,  1947 => 757,  1939 => 751,  1931 => 745,  1928 => 744,  1920 => 738,  1912 => 732,  1910 => 731,  1902 => 728,  1892 => 727,  1887 => 724,  1879 => 718,  1871 => 712,  1868 => 711,  1860 => 705,  1852 => 699,  1850 => 698,  1842 => 695,  1837 => 692,  1830 => 688,  1826 => 687,  1822 => 685,  1815 => 681,  1811 => 680,  1807 => 678,  1805 => 677,  1797 => 674,  1787 => 673,  1779 => 672,  1774 => 669,  1771 => 668,  1765 => 667,  1756 => 663,  1752 => 661,  1743 => 657,  1739 => 655,  1737 => 654,  1734 => 653,  1730 => 652,  1727 => 651,  1725 => 650,  1717 => 647,  1712 => 646,  1708 => 645,  1699 => 639,  1695 => 638,  1691 => 637,  1687 => 636,  1683 => 635,  1679 => 634,  1673 => 631,  1670 => 630,  1667 => 629,  1651 => 622,  1643 => 619,  1640 => 618,  1637 => 617,  1621 => 610,  1613 => 607,  1610 => 606,  1607 => 605,  1591 => 598,  1583 => 595,  1580 => 594,  1577 => 593,  1564 => 589,  1557 => 587,  1554 => 586,  1551 => 585,  1538 => 581,  1531 => 579,  1528 => 578,  1525 => 577,  1512 => 573,  1505 => 571,  1502 => 570,  1500 => 569,  1493 => 564,  1486 => 560,  1482 => 559,  1478 => 557,  1471 => 553,  1467 => 552,  1463 => 550,  1461 => 549,  1453 => 546,  1446 => 544,  1439 => 542,  1433 => 541,  1427 => 540,  1421 => 539,  1416 => 538,  1411 => 537,  1408 => 536,  1406 => 535,  1398 => 530,  1395 => 529,  1389 => 528,  1387 => 527,  1376 => 526,  1371 => 525,  1369 => 524,  1356 => 514,  1349 => 509,  1343 => 508,  1341 => 507,  1334 => 505,  1331 => 504,  1316 => 502,  1307 => 501,  1303 => 500,  1297 => 499,  1289 => 498,  1284 => 497,  1279 => 496,  1277 => 495,  1268 => 489,  1264 => 488,  1253 => 479,  1244 => 477,  1237 => 476,  1233 => 475,  1229 => 474,  1222 => 472,  1216 => 468,  1207 => 466,  1200 => 465,  1196 => 464,  1192 => 463,  1185 => 461,  1179 => 457,  1171 => 455,  1166 => 454,  1161 => 453,  1156 => 451,  1151 => 450,  1149 => 449,  1146 => 448,  1142 => 447,  1137 => 445,  1131 => 441,  1122 => 439,  1115 => 438,  1111 => 437,  1107 => 436,  1100 => 434,  1094 => 430,  1085 => 428,  1078 => 427,  1074 => 426,  1070 => 425,  1063 => 423,  1056 => 419,  1050 => 418,  1043 => 416,  1033 => 411,  1026 => 409,  1014 => 402,  1009 => 400,  1001 => 394,  994 => 390,  990 => 389,  986 => 387,  979 => 383,  975 => 382,  971 => 380,  969 => 379,  961 => 374,  953 => 368,  947 => 367,  938 => 363,  934 => 361,  925 => 357,  921 => 355,  918 => 354,  914 => 353,  906 => 348,  897 => 344,  892 => 342,  884 => 336,  878 => 335,  869 => 331,  865 => 329,  856 => 325,  852 => 323,  849 => 322,  845 => 321,  837 => 316,  826 => 310,  818 => 307,  810 => 304,  803 => 300,  791 => 293,  785 => 290,  779 => 286,  774 => 285,  771 => 284,  766 => 282,  763 => 281,  761 => 280,  758 => 279,  753 => 278,  750 => 277,  745 => 275,  742 => 274,  740 => 273,  735 => 271,  727 => 265,  721 => 264,  712 => 260,  708 => 258,  699 => 254,  695 => 252,  692 => 251,  688 => 250,  678 => 245,  670 => 239,  663 => 235,  659 => 234,  655 => 232,  648 => 228,  644 => 227,  640 => 225,  638 => 224,  630 => 219,  621 => 215,  614 => 213,  605 => 209,  600 => 207,  592 => 201,  586 => 200,  577 => 196,  573 => 194,  564 => 190,  560 => 188,  557 => 187,  553 => 186,  547 => 183,  541 => 180,  532 => 176,  527 => 174,  518 => 170,  513 => 168,  504 => 164,  497 => 162,  488 => 158,  481 => 156,  472 => 152,  465 => 150,  456 => 146,  449 => 144,  440 => 140,  433 => 138,  424 => 134,  417 => 132,  412 => 129,  406 => 128,  404 => 127,  398 => 126,  393 => 124,  387 => 120,  370 => 116,  361 => 114,  348 => 110,  341 => 108,  328 => 104,  321 => 102,  316 => 99,  310 => 98,  308 => 97,  298 => 96,  291 => 94,  276 => 90,  269 => 88,  264 => 85,  258 => 84,  256 => 83,  246 => 82,  239 => 80,  233 => 78,  229 => 77,  226 => 76,  209 => 74,  205 => 73,  195 => 66,  187 => 61,  181 => 58,  177 => 57,  173 => 56,  169 => 55,  165 => 54,  161 => 53,  157 => 52,  153 => 51,  149 => 50,  145 => 49,  141 => 48,  137 => 47,  132 => 45,  123 => 40,  116 => 39,  113 => 38,  111 => 37,  106 => 36,  103 => 35,  97 => 34,  95 => 33,  91 => 32,  85 => 28,  77 => 24,  75 => 23,  70 => 20,  59 => 18,  55 => 17,  50 => 15,  44 => 14,  40 => 13,  36 => 11,  32 => 9,  30 => 8,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/* */
/* <!-- quicksave -->*/
/* 	  {% if pidqs %}*/
/* 	  <button id="qsave" style="margin: 0 10px;" data-toggle="tooltip" title="Quick Save" class="btn btn-warning"><i class="fa fa-save"></i></button>*/
/* 	  {% endif %}*/
/* <!-- quicksave end -->*/
/* 			*/
/*         <button type="submit" form="form-product" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid"> {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         */
/* 					<h3 class="panel-title"><i class="fa fa-pencil"></i>*/
/* 					{{ text_form }} -&nbsp;*/
/* 						{% set break = false %}*/
/* 						{% for language in languages if not break %}*/
/* 							{% if product_description[language.language_id] == true %}*/
/* 								{{ product_description[language.language_id].name }}*/
/* 								{% set break = true %}*/
/* 							{% endif %}*/
/* 						{% endfor %}*/
/* 						( {{ model }} )*/
/* 					</h3>*/
/* 				*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-product" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*             <li><a href="#tab-data" data-toggle="tab">{{ tab_data }}</a></li>*/
/*             <li><a href="#tab-links" data-toggle="tab">{{ tab_links }}</a></li>*/
/*             <li><a href="#tab-attribute" data-toggle="tab">{{ tab_attribute }}</a></li>*/
/*             <li><a href="#tab-option" data-toggle="tab">{{ tab_option }}</a></li>*/
/*             <li><a href="#tab-recurring" data-toggle="tab">{{ tab_recurring }}</a></li>*/
/*             <li><a href="#tab-discount" data-toggle="tab">{{ tab_discount }}</a></li>*/
/*             <li><a href="#tab-special" data-toggle="tab">{{ tab_special }}</a></li>*/
/*             <li><a href="#tab-image" data-toggle="tab">{{ tab_image }}</a></li>*/
/*             <li><a href="#tab-reward" data-toggle="tab">{{ tab_reward }}</a></li>*/
/*             <li><a href="#tab-seo" data-toggle="tab">{{ tab_seo }}</a></li>*/
/*             <li><a href="#tab-design" data-toggle="tab">{{ tab_design }}</a></li>*/
/* */
/* 			<!--xml-->*/
/* 			<li><a href="#tab-customtabmain" data-toggle="tab">{{ tab_customtab }}</a></li>*/
/* 			<!--xml-->*/
/* 			*/
/* */
/* 			<!-- GF-AdminProductCommentTab start -->*/
/* 				<li><a href="#tab-review" data-toggle="tab">{{ tab_review }}</a></li>*/
/* 			<!-- GF-AdminProductCommentTab end -->*/
/* 			*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/*               <ul class="nav nav-tabs" id="language">*/
/*                 {% for language in languages %}*/
/*                 <li><a href="#language{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*               <div class="tab-content">{% for language in languages %}*/
/*                 <div class="tab-pane" id="language{{ language.language_id }}">*/
/*                   <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-name{{ language.language_id }}">{{ entry_name }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="product_description[{{ language.language_id }}][name]" value="{{ product_description[language.language_id] ? product_description[language.language_id].name }}" placeholder="{{ entry_name }}" id="input-name{{ language.language_id }}" class="form-control" />*/
/*                       {% if error_name[language.language_id] %}*/
/*                       <div class="text-danger">{{ error_name[language.language_id] }}</div>*/
/*                       {% endif %} </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-description{{ language.language_id }}">{{ entry_description }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea name="product_description[{{ language.language_id }}][description]" placeholder="{{ entry_description }}" id="input-description{{ language.language_id }}" data-toggle="summernote" data-lang="{{ summernote }}" class="form-control">{{ product_description[language.language_id] ? product_description[language.language_id].description }}</textarea>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-meta-title{{ language.language_id }}">{{ entry_meta_title }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="product_description[{{ language.language_id }}][meta_title]" value="{{ product_description[language.language_id] ? product_description[language.language_id].meta_title }}" placeholder="{{ entry_meta_title }}" id="input-meta-title{{ language.language_id }}" class="form-control" />*/
/*                       {% if error_meta_title[language.language_id] %}*/
/*                       <div class="text-danger">{{ error_meta_title[language.language_id] }}</div>*/
/*                       {% endif %} </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-meta-description{{ language.language_id }}">{{ entry_meta_description }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea name="product_description[{{ language.language_id }}][meta_description]" rows="5" placeholder="{{ entry_meta_description }}" id="input-meta-description{{ language.language_id }}" class="form-control">{{ product_description[language.language_id] ? product_description[language.language_id].meta_description }}</textarea>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-meta-keyword{{ language.language_id }}">{{ entry_meta_keyword }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea name="product_description[{{ language.language_id }}][meta_keyword]" rows="5" placeholder="{{ entry_meta_keyword }}" id="input-meta-keyword{{ language.language_id }}" class="form-control">{{ product_description[language.language_id] ? product_description[language.language_id].meta_keyword }}</textarea>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-tag{{ language.language_id }}"><span data-toggle="tooltip" title="{{ help_tag }}">{{ entry_tag }}</span></label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="product_description[{{ language.language_id }}][tag]" value="{{ product_description[language.language_id] ? product_description[language.language_id].tag }}" placeholder="{{ entry_tag }}" id="input-tag{{ language.language_id }}" class="form-control" />*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% endfor %}</div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-data">*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-model">{{ entry_model }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="model" value="{{ model }}" placeholder="{{ entry_model }}" id="input-model" class="form-control" />*/
/*                   {% if error_model %}*/
/*                   <div class="text-danger">{{ error_model }}</div>*/
/*                   {% endif %}</div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-sku"><span data-toggle="tooltip" title="{{ help_sku }}">{{ entry_sku }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="sku" value="{{ sku }}" placeholder="{{ entry_sku }}" id="input-sku" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-upc"><span data-toggle="tooltip" title="{{ help_upc }}">{{ entry_upc }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="upc" value="{{ upc }}" placeholder="{{ entry_upc }}" id="input-upc" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-ean"><span data-toggle="tooltip" title="{{ help_ean }}">{{ entry_ean }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="ean" value="{{ ean }}" placeholder="{{ entry_ean }}" id="input-ean" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-jan"><span data-toggle="tooltip" title="{{ help_jan }}">{{ entry_jan }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="jan" value="{{ jan }}" placeholder="{{ entry_jan }}" id="input-jan" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-isbn"><span data-toggle="tooltip" title="{{ help_isbn }}">{{ entry_isbn }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="isbn" value="{{ isbn }}" placeholder="{{ entry_isbn }}" id="input-isbn" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-mpn"><span data-toggle="tooltip" title="{{ help_mpn }}">{{ entry_mpn }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="mpn" value="{{ mpn }}" placeholder="{{ entry_mpn }}" id="input-mpn" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-location">{{ entry_location }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="location" value="{{ location }}" placeholder="{{ entry_location }}" id="input-location" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-price">{{ entry_price }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="price" value="{{ price }}" placeholder="{{ entry_price }}" id="input-price" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-tax-class">{{ entry_tax_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="tax_class_id" id="input-tax-class" class="form-control">*/
/*                     <option value="0">{{ text_none }}</option>*/
/*                     */
/* */
/*                     {% for tax_class in tax_classes %}*/
/*                     {% if tax_class.tax_class_id == tax_class_id %}*/
/* */
/*                     */
/*                     <option value="{{ tax_class.tax_class_id }}" selected="selected">{{ tax_class.title }}</option>*/
/*                     */
/* */
/*                     {% else %}*/
/* */
/*                     */
/*                     <option value="{{ tax_class.tax_class_id }}">{{ tax_class.title }}</option>*/
/*                     */
/* */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/* */
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-quantity">{{ entry_quantity }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="quantity" value="{{ quantity }}" placeholder="{{ entry_quantity }}" id="input-quantity" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-minimum"><span data-toggle="tooltip" title="{{ help_minimum }}">{{ entry_minimum }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="minimum" value="{{ minimum }}" placeholder="{{ entry_minimum }}" id="input-minimum" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-subtract">{{ entry_subtract }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="subtract" id="input-subtract" class="form-control">*/
/*                     */
/* */
/*                     {% if subtract %}*/
/* */
/*                     */
/*                     <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                     <option value="0">{{ text_no }}</option>*/
/*                     */
/* */
/*                     {% else %}*/
/* */
/*                     */
/*                     <option value="1">{{ text_yes }}</option>*/
/*                     <option value="0" selected="selected">{{ text_no }}</option>*/
/*                     */
/* */
/*                     {% endif %}*/
/* */
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-stock-status"><span data-toggle="tooltip" title="{{ help_stock_status }}">{{ entry_stock_status }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="stock_status_id" id="input-stock-status" class="form-control">*/
/*                     */
/* */
/*                     {% for stock_status in stock_statuses %}*/
/*                     {% if stock_status.stock_status_id == stock_status_id %}*/
/* */
/*                     */
/*                     <option value="{{ stock_status.stock_status_id }}" selected="selected">{{ stock_status.name }}</option>*/
/*                     */
/* */
/*                     {% else %}*/
/* */
/*                     */
/*                     <option value="{{ stock_status.stock_status_id }}">{{ stock_status.name }}</option>*/
/*                     */
/* */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/* */
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">{{ entry_shipping }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <label class="radio-inline"> {% if shipping %}*/
/*                     <input type="radio" name="shipping" value="1" checked="checked" />*/
/*                     {{ text_yes }}*/
/*                     {% else %}*/
/*                     <input type="radio" name="shipping" value="1" />*/
/*                     {{ text_yes }}*/
/*                     {% endif %} </label>*/
/*                   <label class="radio-inline"> {% if not shipping %}*/
/*                     <input type="radio" name="shipping" value="0" checked="checked" />*/
/*                     {{ text_no }}*/
/*                     {% else %}*/
/*                     <input type="radio" name="shipping" value="0" />*/
/*                     {{ text_no }}*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-date-available">{{ entry_date_available }}</label>*/
/*                 <div class="col-sm-3">*/
/*                   <div class="input-group date">*/
/*                     <input type="text" name="date_available" value="{{ date_available }}" placeholder="{{ entry_date_available }}" data-date-format="YYYY-MM-DD" id="input-date-available" class="form-control" />*/
/*                     <span class="input-group-btn">*/
/*                     <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                     </span></div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-length">{{ entry_dimension }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="row">*/
/*                     <div class="col-sm-4">*/
/*                       <input type="text" name="length" value="{{ length }}" placeholder="{{ entry_length }}" id="input-length" class="form-control" />*/
/*                     </div>*/
/*                     <div class="col-sm-4">*/
/*                       <input type="text" name="width" value="{{ width }}" placeholder="{{ entry_width }}" id="input-width" class="form-control" />*/
/*                     </div>*/
/*                     <div class="col-sm-4">*/
/*                       <input type="text" name="height" value="{{ height }}" placeholder="{{ entry_height }}" id="input-height" class="form-control" />*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-length-class">{{ entry_length_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="length_class_id" id="input-length-class" class="form-control">*/
/*                     */
/* */
/*                     {% for length_class in length_classes %}*/
/*                     {% if length_class.length_class_id == length_class_id %}*/
/* */
/*                     */
/*                     <option value="{{ length_class.length_class_id }}" selected="selected">{{ length_class.title }}</option>*/
/*                     */
/* */
/*                     {% else %}*/
/* */
/*                     */
/*                     <option value="{{ length_class.length_class_id }}">{{ length_class.title }}</option>*/
/*                     */
/* */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/* */
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-weight">{{ entry_weight }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="weight" value="{{ weight }}" placeholder="{{ entry_weight }}" id="input-weight" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-weight-class">{{ entry_weight_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="weight_class_id" id="input-weight-class" class="form-control">*/
/*                     */
/* */
/*                     {% for weight_class in weight_classes %}*/
/*                     {% if weight_class.weight_class_id == weight_class_id %}*/
/* */
/*                     */
/*                     <option value="{{ weight_class.weight_class_id }}" selected="selected">{{ weight_class.title }}</option>*/
/*                     */
/* */
/*                     {% else %}*/
/* */
/*                     */
/*                     <option value="{{ weight_class.weight_class_id }}">{{ weight_class.title }}</option>*/
/*                     */
/* */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/* */
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="status" id="input-status" class="form-control">*/
/*                     */
/* */
/*                     {% if status %}*/
/* */
/*                     */
/*                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                     <option value="0">{{ text_disabled }}</option>*/
/*                     */
/* */
/*                     {% else %}*/
/* */
/*                     */
/*                     <option value="1">{{ text_enabled }}</option>*/
/*                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                     */
/* */
/*                     {% endif %}*/
/* */
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="sort_order" value="{{ sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-links">*/
/* */
/* 				<div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-link"><span data-toggle="tooltip" title="{{ entry_link }}">{{ entry_link }}</span></label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea name="product_link" rows="5" placeholder="{{ entry_link }}" id="input-link" class="form-control">{{ product_link }}</textarea>*/
/*                     </div>*/
/*                   </div>*/
/* 			*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-manufacturer"><span data-toggle="tooltip" title="{{ help_manufacturer }}">{{ entry_manufacturer }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="manufacturer" value="{{ manufacturer }}" placeholder="{{ entry_manufacturer }}" id="input-manufacturer" class="form-control" />*/
/*                   <input type="hidden" name="manufacturer_id" value="{{ manufacturer_id }}" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-category"><span data-toggle="tooltip" title="{{ help_category }}">{{ entry_category }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="category" value="" placeholder="{{ entry_category }}" id="input-category" class="form-control" />*/
/*                   <div id="product-category" class="well well-sm" style="height: 150px; overflow: auto;"> {% for product_category in product_categories %}*/
/*                     <div id="product-category{{ product_category.category_id }}"><i class="fa fa-minus-circle"></i> {{ product_category.name }}*/
/*                       <input type="hidden" name="product_category[]" value="{{ product_category.category_id }}" />*/
/*                     </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-filter"><span data-toggle="tooltip" title="{{ help_filter }}">{{ entry_filter }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="filter" value="" placeholder="{{ entry_filter }}" id="input-filter" class="form-control" />*/
/*                   <div id="product-filter" class="well well-sm" style="height: 150px; overflow: auto;"> {% for product_filter in product_filters %}*/
/*                     <div id="product-filter{{ product_filter.filter_id }}"><i class="fa fa-minus-circle"></i> {{ product_filter.name }}*/
/*                       <input type="hidden" name="product_filter[]" value="{{ product_filter.filter_id }}" />*/
/*                     </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">{{ entry_store }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for store in stores %}*/
/*                     <div class="checkbox">*/
/*                       <label> {% if store.store_id in product_store %}*/
/*                         <input type="checkbox" name="product_store[]" value="{{ store.store_id }}" checked="checked" />*/
/*                         {{ store.name }}*/
/*                         {% else %}*/
/*                         <input type="checkbox" name="product_store[]" value="{{ store.store_id }}" />*/
/*                         {{ store.name }}*/
/*                         {% endif %} </label>*/
/*                     </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-download"><span data-toggle="tooltip" title="{{ help_download }}">{{ entry_download }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="download" value="" placeholder="{{ entry_download }}" id="input-download" class="form-control" />*/
/*                   <div id="product-download" class="well well-sm" style="height: 150px; overflow: auto;"> {% for product_download in product_downloads %}*/
/*                     <div id="product-download{{ product_download.download_id }}"><i class="fa fa-minus-circle"></i> {{ product_download.name }}*/
/*                       <input type="hidden" name="product_download[]" value="{{ product_download.download_id }}" />*/
/*                     </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-related"><span data-toggle="tooltip" title="{{ help_related }}">{{ entry_related }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="related" value="" placeholder="{{ entry_related }}" id="input-related" class="form-control" />*/
/*                   <div id="product-related" class="well well-sm" style="height: 150px; overflow: auto;"> {% for product_related in product_relateds %}*/
/*                     <div id="product-related{{ product_related.product_id }}"><i class="fa fa-minus-circle"></i> {{ product_related.name }}*/
/*                       <input type="hidden" name="product_related[]" value="{{ product_related.product_id }}" />*/
/*                     </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-attribute">*/
/*               <div class="table-responsive">*/
/*                 <table id="attribute" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_attribute }}</td>*/
/*                       <td class="text-left">{{ entry_text }}</td>*/
/*                       <td></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   */
/*                   {% set attribute_row = 0 %}*/
/*                   {% for product_attribute in product_attributes %}*/
/*                   <tr id="attribute-row{{ attribute_row }}">*/
/*                     <td class="text-left" style="width: 40%;"><input type="text" name="product_attribute[{{ attribute_row }}][name]" value="{{ product_attribute.name }}" placeholder="{{ entry_attribute }}" class="form-control" />*/
/*                       <input type="hidden" name="product_attribute[{{ attribute_row }}][attribute_id]" value="{{ product_attribute.attribute_id }}" /></td>*/
/*                     <td class="text-left">{% for language in languages %}*/
/*                       <div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/*                         <textarea name="product_attribute[{{ attribute_row }}][product_attribute_description][{{ language.language_id }}][text]" rows="5" placeholder="{{ entry_text }}" class="form-control">{{ product_attribute.product_attribute_description[language.language_id] ? product_attribute.product_attribute_description[language.language_id].text }}</textarea>*/
/*                       </div>*/
/*                       {% endfor %}</td>*/
/*                     <td class="text-right"><button type="button" onclick="$('#attribute-row{{ attribute_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                   </tr>*/
/*                   {% set attribute_row = attribute_row + 1 %}*/
/*                   {% endfor %}*/
/*                     </tbody>*/
/*                   */
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="2"></td>*/
/*                       <td class="text-right"><button type="button" onclick="addAttribute();" data-toggle="tooltip" title="{{ button_attribute_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-option">*/
/*               <div class="row">*/
/*                 <div class="col-sm-2">*/
/*                   <ul class="nav nav-pills nav-stacked" id="option">*/
/*                     {% set option_row = 0 %}*/
/*                     {% for product_option in product_options %}*/
/*                     <li><a href="#tab-option{{ option_row }}" data-toggle="tab"><i class="fa fa-minus-circle" onclick="$('a[href=\'#tab-option{{ option_row }}\']').parent().remove(); $('#tab-option{{ option_row }}').remove(); $('#option a:first').tab('show');"></i> {{ product_option.name }}</a></li>*/
/*                     {% set option_row = option_row + 1 %}*/
/*                     {% endfor %}*/
/*                     <li>*/
/*                       <input type="text" name="option" value="" placeholder="{{ entry_option }}" id="input-option" class="form-control" />*/
/*                     </li>*/
/*                   </ul>*/
/*                 </div>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="tab-content"> {% set option_row = 0 %}*/
/*                     {% set option_value_row = 0 %}*/
/*                     {% for product_option in product_options %}*/
/*                     <div class="tab-pane" id="tab-option{{ option_row }}">*/
/*                       <input type="hidden" name="product_option[{{ option_row }}][product_option_id]" value="{{ product_option.product_option_id }}" />*/
/*                       <input type="hidden" name="product_option[{{ option_row }}][name]" value="{{ product_option.name }}" />*/
/*                       <input type="hidden" name="product_option[{{ option_row }}][option_id]" value="{{ product_option.option_id }}" />*/
/*                       <input type="hidden" name="product_option[{{ option_row }}][type]" value="{{ product_option.type }}" />*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-required{{ option_row }}">{{ entry_required }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <select name="product_option[{{ option_row }}][required]" id="input-required{{ option_row }}" class="form-control">*/
/*                             */
/* */
/*                             {% if product_option.required %}*/
/* */
/*                             */
/*                             <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                             <option value="0">{{ text_no }}</option>*/
/*                             */
/* */
/*                             {% else %}*/
/* */
/*                             */
/*                             <option value="1">{{ text_yes }}</option>*/
/*                             <option value="0" selected="selected">{{ text_no }}</option>*/
/*                             */
/* */
/*                             {% endif %}*/
/* */
/*                           */
/*                           </select>*/
/*                         </div>*/
/*                       </div>*/
/*                       {% if product_option.type == 'text' %}*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" id="input-value{{ option_row }}" class="form-control" />*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if product_option.type == 'textarea' %}*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <textarea name="product_option[{{ option_row }}][value]" rows="5" placeholder="{{ entry_option_value }}" id="input-value{{ option_row }}" class="form-control">{{ product_option.value }}</textarea>*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if product_option.type == 'file' %}*/
/*                       <div class="form-group" style="display: none;">*/
/*                         <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" id="input-value{{ option_row }}" class="form-control" />*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if product_option.type == 'date' %}*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                         <div class="col-sm-3">*/
/*                           <div class="input-group date">*/
/*                             <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" data-date-format="YYYY-MM-DD" id="input-value{{ option_row }}" class="form-control" />*/
/*                             <span class="input-group-btn">*/
/*                             <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                             </span></div>*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if product_option.type == 'time' %}*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <div class="input-group time">*/
/*                             <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" data-date-format="HH:mm" id="input-value{{ option_row }}" class="form-control" />*/
/*                             <span class="input-group-btn">*/
/*                             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                             </span></div>*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if product_option.type == 'datetime' %}*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <div class="input-group datetime">*/
/*                             <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-value{{ option_row }}" class="form-control" />*/
/*                             <span class="input-group-btn">*/
/*                             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                             </span></div>*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if product_option.type == 'select' or product_option.type == 'radio' or product_option.type == 'checkbox' or product_option.type == 'image' %}*/
/*                       <div class="table-responsive">*/
/*                         <table id="option-value{{ option_row }}" class="table table-striped table-bordered table-hover">*/
/*                           <thead>*/
/*                             <tr>*/
/*                               <td class="text-left">{{ entry_option_value }}</td>*/
/*                               <td class="text-right">{{ entry_quantity }}</td>*/
/*                               <td class="text-left">{{ entry_subtract }}</td>*/
/*                               <td class="text-right">{{ entry_price }}</td>*/
/*                               <td class="text-right">{{ entry_option_points }}</td>*/
/*                               <td class="text-right">{{ entry_weight }}</td>*/
/*                               <td></td>*/
/*                             </tr>*/
/*                           </thead>*/
/*                           <tbody>*/
/*                           */
/*                           {% for product_option_value in product_option.product_option_value %}*/
/*                           <tr id="option-value-row{{ option_value_row }}">*/
/*                             <td class="text-left"><select name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][option_value_id]" class="form-control">*/
/*                                 */
/* */
/*                                   {% if option_values[product_option.option_id] %}*/
/* */
/*                                   {% for option_value in option_values[product_option.option_id] %}*/
/* */
/*                                   {% if option_value.option_value_id == product_option_value.option_value_id %}*/
/* */
/*                                 */
/*                                 <option value="{{ option_value.option_value_id }}" selected="selected">{{ option_value.name }}</option>*/
/*                                 */
/* */
/*                                   {% else %}*/
/* */
/*                                 */
/*                                 <option value="{{ option_value.option_value_id }}">{{ option_value.name }}</option>*/
/*                                 */
/* */
/*                                   {% endif %}*/
/*                                   {% endfor %}*/
/*                                   {% endif %}*/
/* */
/*                               */
/*                               </select>*/
/*                               <input type="hidden" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][product_option_value_id]" value="{{ product_option_value.product_option_value_id }}" /></td>*/
/*                             <td class="text-right"><input type="text" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][quantity]" value="{{ product_option_value.quantity }}" placeholder="{{ entry_quantity }}" class="form-control" /></td>*/
/*                             <td class="text-left"><select name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][subtract]" class="form-control">*/
/*                                 */
/* */
/*                                   {% if product_option_value.subtract %}*/
/* */
/*                                 */
/*                                 <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                                 <option value="0">{{ text_no }}</option>*/
/*                                 */
/* */
/*                                   {% else %}*/
/* */
/*                                 */
/*                                 <option value="1">{{ text_yes }}</option>*/
/*                                 <option value="0" selected="selected">{{ text_no }}</option>*/
/*                                 */
/* */
/*                                   {% endif %}*/
/* */
/*                               */
/*                               </select></td>*/
/*                             <td class="text-right"><select name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][price_prefix]" class="form-control">*/
/*                                 */
/* */
/*                                   {% if product_option_value.price_prefix == '+' %}*/
/* */
/*                                 */
/*                                 <option value="+" selected="selected">+</option>*/
/*                                 */
/* */
/*                                   {% else %}*/
/* */
/*                                 */
/*                                 <option value="+">+</option>*/
/*                                 */
/* */
/*                                   {% endif %}*/
/*                                   {% if product_option_value.price_prefix == '-' %}*/
/* */
/*                                 */
/*                                 <option value="-" selected="selected">-</option>*/
/*                                 */
/* */
/*                                   {% else %}*/
/* */
/*                                 */
/*                                 <option value="-">-</option>*/
/*                                 */
/* */
/*                                   {% endif %}*/
/* */
/*                               */
/*                               </select>*/
/*                               <input type="text" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][price]" value="{{ product_option_value.price }}" placeholder="{{ entry_price }}" class="form-control" /></td>*/
/*                             <td class="text-right"><select name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][points_prefix]" class="form-control">*/
/*                                 */
/* */
/*                                   {% if product_option_value.points_prefix == '+' %}*/
/* */
/*                                 */
/*                                 <option value="+" selected="selected">+</option>*/
/*                                 */
/* */
/*                                   {% else %}*/
/* */
/*                                 */
/*                                 <option value="+">+</option>*/
/*                                 */
/* */
/*                                   {% endif %}*/
/*                                   {% if product_option_value.points_prefix == '-' %}*/
/* */
/*                                 */
/*                                 <option value="-" selected="selected">-</option>*/
/*                                 */
/* */
/*                                   {% else %}*/
/* */
/*                                 */
/*                                 <option value="-">-</option>*/
/*                                 */
/* */
/*                                   {% endif %}*/
/* */
/*                               */
/*                               </select>*/
/*                               <input type="text" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][points]" value="{{ product_option_value.points }}" placeholder="{{ entry_points }}" class="form-control" /></td>*/
/*                             <td class="text-right"><select name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][weight_prefix]" class="form-control">*/
/*                                 */
/* */
/*                                   {% if product_option_value.weight_prefix == '+' %}*/
/* */
/*                                 */
/*                                 <option value="+" selected="selected">+</option>*/
/*                                 */
/* */
/*                                   {% else %}*/
/* */
/*                                 */
/*                                 <option value="+">+</option>*/
/*                                 */
/* */
/*                                   {% endif %}*/
/*                                   {% if product_option_value.weight_prefix == '-' %}*/
/* */
/*                                 */
/*                                 <option value="-" selected="selected">-</option>*/
/*                                 */
/* */
/*                                   {% else %}*/
/* */
/*                                 */
/*                                 <option value="-">-</option>*/
/*                                 */
/* */
/*                                   {% endif %}*/
/* */
/*                               */
/*                               </select>*/
/*                               <input type="text" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][weight]" value="{{ product_option_value.weight }}" placeholder="{{ entry_weight }}" class="form-control" /></td>*/
/*                             <td class="text-right"><button type="button" onclick="$(this).tooltip('destroy');$('#option-value-row{{ option_value_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                           </tr>*/
/*                           {% set option_value_row = option_value_row + 1 %}*/
/*                           {% endfor %}*/
/*                             </tbody>*/
/*                           */
/*                           <tfoot>*/
/*                             <tr>*/
/*                               <td colspan="6"></td>*/
/*                               <td class="text-left"><button type="button" onclick="addOptionValue('{{ option_row }}');" data-toggle="tooltip" title="{{ button_option_value_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                             </tr>*/
/*                           </tfoot>*/
/*                         </table>*/
/*                       </div>*/
/*                       <select id="option-values{{ option_row }}" style="display: none;">*/
/*                         */
/* */
/*                         {% if option_values[product_option.option_id] %}*/
/*                         {% for option_value in option_values[product_option.option_id] %}*/
/* */
/*                         */
/*                         <option value="{{ option_value.option_value_id }}">{{ option_value.name }}</option>*/
/*                         */
/* */
/*                         {% endfor %}*/
/*                         {% endif %}*/
/* */
/*                       */
/*                       </select>*/
/*                       {% endif %} </div>*/
/*                     {% set option_row = option_row + 1 %}*/
/*                     {% endfor %} </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-recurring">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_recurring }}</td>*/
/*                       <td class="text-left">{{ entry_customer_group }}</td>*/
/*                       <td class="text-left"></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   */
/*                   {% set recurring_row = 0 %}*/
/*                   {% for product_recurring in product_recurrings %}*/
/*                   <tr id="recurring-row{{ recurring_row }}">*/
/*                     <td class="text-left"><select name="product_recurring[{{ recurring_row }}][recurring_id]" class="form-control">*/
/*                         */
/* */
/*                           {% for recurring in recurrings %}*/
/*                           {% if recurring.recurring_id == product_recurring.recurring_id %}*/
/* */
/*                         */
/*                         <option value="{{ recurring.recurring_id }}" selected="selected">{{ recurring.name }}</option>*/
/*                         */
/* */
/*                           {% else %}*/
/* */
/*                         */
/*                         <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                         */
/* */
/*                           {% endif %}*/
/*                           {% endfor %}*/
/* */
/*                       */
/*                       </select></td>*/
/*                     <td class="text-left"><select name="product_recurring[{{ recurring_row }}][customer_group_id]" class="form-control">*/
/*                         */
/* */
/*                           {% for customer_group in customer_groups %}*/
/*                           {% if customer_group.customer_group_id == product_recurring.customer_group_id %}*/
/* */
/*                         */
/*                         <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                         */
/* */
/*                           {% else %}*/
/* */
/*                         */
/*                         <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                         */
/* */
/*                           {% endif %}*/
/*                           {% endfor %}*/
/* */
/*                       */
/*                       </select></td>*/
/*                     <td class="text-left"><button type="button" onclick="$('#recurring-row{{ recurring_row }}').remove()" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                   </tr>*/
/*                   {% set recurring_row = recurring_row + 1 %}*/
/*                   {% endfor %}*/
/*                     </tbody>*/
/*                   */
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="2"></td>*/
/*                       <td class="text-left"><button type="button" onclick="addRecurring()" data-toggle="tooltip" title="{{ button_recurring_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-discount">*/
/*               <div class="table-responsive">*/
/*                 <table id="discount" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_customer_group }}</td>*/
/*                       <td class="text-right">{{ entry_quantity }}</td>*/
/*                       <td class="text-right">{{ entry_priority }}</td>*/
/*                       <td class="text-right">{{ entry_price }}</td>*/
/*                       <td class="text-left">{{ entry_date_start }}</td>*/
/*                       <td class="text-left">{{ entry_date_end }}</td>*/
/*                       <td></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   */
/*                   {% set discount_row = 0 %}*/
/*                   {% for product_discount in product_discounts %}*/
/*                   <tr id="discount-row{{ discount_row }}">*/
/*                     <td class="text-left"><select name="product_discount[{{ discount_row }}][customer_group_id]" class="form-control">*/
/*                         {% for customer_group in customer_groups %}*/
/*                         {% if customer_group.customer_group_id == product_discount.customer_group_id %}*/
/*                         <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                         {% else %}*/
/*                         <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                         {% endif %}*/
/*                         {% endfor %}*/
/*                       </select></td>*/
/*                     <td class="text-right"><input type="text" name="product_discount[{{ discount_row }}][quantity]" value="{{ product_discount.quantity }}" placeholder="{{ entry_quantity }}" class="form-control" /></td>*/
/*                     <td class="text-right"><input type="text" name="product_discount[{{ discount_row }}][priority]" value="{{ product_discount.priority }}" placeholder="{{ entry_priority }}" class="form-control" /></td>*/
/*                     <td class="text-right"><input type="text" name="product_discount[{{ discount_row }}][price]" value="{{ product_discount.price }}" placeholder="{{ entry_price }}" class="form-control" /></td>*/
/*                     <td class="text-left" style="width: 20%;"><div class="input-group date">*/
/*                         <input type="text" name="product_discount[{{ discount_row }}][date_start]" value="{{ product_discount.date_start }}" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" class="form-control" />*/
/*                         <span class="input-group-btn">*/
/*                         <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                         </span></div></td>*/
/*                     <td class="text-left" style="width: 20%;"><div class="input-group date">*/
/*                         <input type="text" name="product_discount[{{ discount_row }}][date_end]" value="{{ product_discount.date_end }}" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" class="form-control" />*/
/*                         <span class="input-group-btn">*/
/*                         <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                         </span></div></td>*/
/*                     <td class="text-left"><button type="button" onclick="$('#discount-row{{ discount_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                   </tr>*/
/*                   {% set discount_row = discount_row + 1 %}*/
/*                   {% endfor %}*/
/*                     </tbody>*/
/*                   */
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="6"></td>*/
/*                       <td class="text-left"><button type="button" onclick="addDiscount();" data-toggle="tooltip" title="{{ button_discount_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-special">*/
/*               <div class="table-responsive">*/
/*                 <table id="special" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_customer_group }}</td>*/
/*                       <td class="text-right">{{ entry_priority }}</td>*/
/*                       <td class="text-right">{{ entry_price }}</td>*/
/*                       <td class="text-left">{{ entry_date_start }}</td>*/
/*                       <td class="text-left">{{ entry_date_end }}</td>*/
/*                       <td></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   */
/*                   {% set special_row = 0 %}*/
/*                   {% for product_special in product_specials %}*/
/*                   <tr id="special-row{{ special_row }}">*/
/*                     <td class="text-left"><select name="product_special[{{ special_row }}][customer_group_id]" class="form-control">*/
/*                         */
/* */
/*                           {% for customer_group in customer_groups %}*/
/*                           {% if customer_group.customer_group_id == product_special.customer_group_id %}*/
/* */
/*                         */
/*                         <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                         */
/* */
/*                           {% else %}*/
/* */
/*                         */
/*                         <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                         */
/* */
/*                           {% endif %}*/
/*                           {% endfor %}*/
/* */
/*                       */
/*                       </select></td>*/
/*                     <td class="text-right"><input type="text" name="product_special[{{ special_row }}][priority]" value="{{ product_special.priority }}" placeholder="{{ entry_priority }}" class="form-control" /></td>*/
/*                     <td class="text-right"><input type="text" name="product_special[{{ special_row }}][price]" value="{{ product_special.price }}" placeholder="{{ entry_price }}" class="form-control" /></td>*/
/*                     <td class="text-left" style="width: 20%;"><div class="input-group date">*/
/*                         <input type="text" name="product_special[{{ special_row }}][date_start]" value="{{ product_special.date_start }}" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" class="form-control" />*/
/*                         <span class="input-group-btn">*/
/*                         <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                         </span></div></td>*/
/*                     <td class="text-left" style="width: 20%;"><div class="input-group date">*/
/*                         <input type="text" name="product_special[{{ special_row }}][date_end]" value="{{ product_special.date_end }}" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" class="form-control" />*/
/*                         <span class="input-group-btn">*/
/*                         <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                         </span></div></td>*/
/*                     <td class="text-left"><button type="button" onclick="$('#special-row{{ special_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                   </tr>*/
/*                   {% set special_row = special_row + 1 %}*/
/*                   {% endfor %}*/
/*                     </tbody>*/
/*                   */
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="5"></td>*/
/*                       <td class="text-left"><button type="button" onclick="addSpecial();" data-toggle="tooltip" title="{{ button_special_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-image">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_image }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     <tr>*/
/*                       <td class="text-left"><a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ thumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                         <input type="hidden" name="image" value="{{ image }}" id="input-image" /></td>*/
/*                     </tr>*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*               <div class="table-responsive">*/
/* */
/*             <style>*/
/*                 #frame {*/
/*                     position: absolute;*/
/*                     z-index: 1140;*/
/*                     background: blue;*/
/*                     opacity: 0.2;*/
/*                     border: 1px solid grey;*/
/*                 }*/
/*                 #modal-image {*/
/*                     user-select: none;*/
/*                 }*/
/*             </style>*/
/*             <button type="button" id="button-multiselect" data-toggle="tooltip" title="{{ button_multiselect }}" class="btn btn-primary">{{ button_multiselect }}</button>*/
/*             <br/>*/
/*         */
/*                 <table id="images" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_additional_image }}</td>*/
/*                       <td class="text-right">{{ entry_sort_order }}</td>*/
/*                       <td></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   */
/*                   {% set image_row = 0 %}*/
/*                   {% for product_image in product_images %}*/
/*                   <tr id="image-row{{ image_row }}">*/
/*                     <td class="text-left"><a href="" id="thumb-image{{ image_row }}" data-toggle="image" class="img-thumbnail"><img src="{{ product_image.thumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                       <input type="hidden" name="product_image[{{ image_row }}][image]" value="{{ product_image.image }}" id="input-image{{ image_row }}" /></td>*/
/*                     <td class="text-right"><input type="text" name="product_image[{{ image_row }}][sort_order]" value="{{ product_image.sort_order }}" placeholder="{{ entry_sort_order }}" class="form-control" /></td>*/
/*                     <td class="text-left"><button type="button" onclick="$('#image-row{{ image_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                   </tr>*/
/*                   {% set image_row = image_row + 1 %}*/
/*                   {% endfor %}*/
/*                     </tbody>*/
/*                   */
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="2"></td>*/
/*                       <td class="text-left"><button type="button" onclick="addImage();" data-toggle="tooltip" title="{{ button_image_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-reward">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-points"><span data-toggle="tooltip" title="{{ help_points }}">{{ entry_points }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="points" value="{{ points }}" placeholder="{{ entry_points }}" id="input-points" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_customer_group }}</td>*/
/*                       <td class="text-right">{{ entry_reward }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   */
/*                   {% for customer_group in customer_groups %}*/
/*                   <tr>*/
/*                     <td class="text-left">{{ customer_group.name }}</td>*/
/*                     <td class="text-right"><input type="text" name="product_reward[{{ customer_group.customer_group_id }}][points]" value="{{ product_reward[customer_group.customer_group_id] ? product_reward[customer_group.customer_group_id].points }}" class="form-control" /></td>*/
/*                   </tr>*/
/*                   {% endfor %}*/
/*                     </tbody>*/
/*                   */
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-seo">*/
/*               <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_keyword }}</div>            */
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_store }}</td>*/
/* 		      <td class="text-left">{{ entry_keyword }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   {% for store in stores %}*/
/*                   <tr>*/
/*                     <td class="text-left">{{ store.name }}</td>*/
/*                     <td class="text-left">{% for language in languages %}*/
/*                       <div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/*                         <input type="text" name="product_seo_url[{{ store.store_id }}][{{ language.language_id }}]" value="{% if product_seo_url[store.store_id][language.language_id] %}{{ product_seo_url[store.store_id][language.language_id] }}{% endif %}" placeholder="{{ entry_keyword }}" class="form-control" />*/
/*                       </div>*/
/*                       {% if error_keyword[store.store_id][language.language_id] %}*/
/*                       <div class="text-danger">{{ error_keyword[store.store_id][language.language_id] }}</div>*/
/*                       {% endif %} */
/*                       {% endfor %}</td>*/
/*                   </tr>*/
/*                   {% endfor %}*/
/*                     </tbody>*/
/*                   */
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/* */
/* 			<!-- GF-AdminProductCommentTab start -->*/
/* <div class="tab-pane" id="tab-review">	*/
/* 	{{ review }}	*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* 	$('.date').datetimepicker({*/
/* 		language: '{{ datepicker }}',*/
/* 		pickTime: false*/
/* 	});*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* 	function CreateUrl(proc) {*/
/* 		var u = 'index.php?route=catalog/review_tab/'+proc+'&user_token={{ user_token }}&product_id={{ product_id }}';*/
/* 		*/
/* 		var filter_author = $('input[name=\'filter_author\']').val();*/
/* 		if (filter_author) {*/
/* 			u += '&filter_author=' + encodeURIComponent(filter_author);*/
/* 		}*/
/* 		*/
/* 		var filter_status = $('select[name=\'filter_status\']').val();*/
/* 		if (filter_status !== '') {*/
/* 			u += '&filter_status=' + encodeURIComponent(filter_status); */
/* 		}		*/
/* 				*/
/* 		var filter_date_added = $('input[name=\'filter_date_added\']').val();*/
/* 		if (filter_date_added) {*/
/* 			u += '&filter_date_added=' + encodeURIComponent(filter_date_added);*/
/* 		}*/
/* 		return u;*/
/* 	}*/
/* */
/* 	function ClickCopy(dop) {*/
/* 		$.ajax({*/
/* 			url: CreateUrl('copy') + dop,*/
/* 			type: "POST",*/
/* 			dataType: "html",*/
/* 			data: $("form").serialize(),  */
/* 			success: function(response) { */
/* 				if (response == "0") {*/
/* 					$('#tab-review').html('<tr><td class="text-center" colspan="7">Пустой ответ</td></tr>');*/
/* 				} else {*/
/* 					$('#tab-review').html(response);*/
/* 				}*/
/* 			},*/
/* 			error: function(response) { */
/* 				alert('Ощибка удаления');*/
/* 			}*/
/* 		});*/
/* 	}*/
/* 	function ClickDelete(dop) {*/
/* 		$.ajax({*/
/* 			url: CreateUrl('delete') + dop,*/
/* 			type: "POST",*/
/* 			dataType: "html",*/
/* 			data: $("form").serialize(),  */
/* 			success: function(response) { */
/* 				if (response == "0") {*/
/* 					$('#tab-review').html('<tr><td class="text-center" colspan="7">Пустой ответ</td></tr>');*/
/* 				} else {*/
/* 					$('#tab-review').html(response);*/
/* 				}*/
/* 			},*/
/* 			error: function(response) { */
/* 				alert('Ощибка удаления');*/
/* 			}*/
/* 		});*/
/* 	}*/
/* 	function ClickRefresh(dop) {*/
/* 		$.ajax({*/
/* 			url: CreateUrl('tab') + dop,*/
/* 			dataType: "html",*/
/* 			success: function(data) {  */
/* 				if (data == "0") {*/
/* 					$('#tab-review').html('<tr><td class="text-center" colspan="7">Пустой ответ</td></tr>');*/
/* 				} else {*/
/* 					$('#tab-review').html(data);*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 	}*/
/* 	function ClickClose(url) {*/
/* 		ClickRefresh(url);*/
/* 		$('button.close').click();*/
/* 	}*/
/* 	function ClickSort(url) {*/
/* 		ClickRefresh(url);*/
/* 	}*/
/* 	function ClickFilter(dop) {*/
/* 		ClickRefresh(dop);*/
/* 	}*/
/* 	function ClickSave(proc,dop) {*/
/* 		$.ajax({*/
/* 			url: CreateUrl(proc) + dop,*/
/* 			type: "POST",*/
/* 			dataType: "html",*/
/* 			data: {*/
/* 				'product_id': {{ product_id }},*/
/* 				'author': $('#input-author').val(),*/
/* 				'text': $('#input-text').val(),*/
/* 				'date_added': $('#input-date-added').val(),*/
/* 				'rating': $('input[name=rewiev-rating]:checked').val(),*/
/* 				'status': $('select#rewiev-status').val()*/
/* 			},  */
/* 			success: function(data) { */
/* 				$('#modal-reviw').html(data);*/
/* 			},*/
/* 			error: function(response) { */
/* 				alert('Ощибка сохранения');*/
/* 			}*/
/* 		});	*/
/* 			*/
/* 	}*/
/* 	function ClickAdd(dop) {		*/
/* 		$.ajax({*/
/* 			url: CreateUrl('add') + dop,*/
/* 			dataType: 'html',*/
/* 			success: function(html) {*/
/* 				$('#modal-reviw').remove();*/
/* 				$('body').prepend('<div id="modal-reviw" class="modal">' + html + '</div>');*/
/* 				$('#modal-reviw').modal('show');*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	}*/
/* 	function ClickEdit(dop,rev_id) {*/
/* 		$.ajax({*/
/* 			url: CreateUrl('edit') + dop + '&review_id=' + encodeURIComponent(rev_id),*/
/* 			dataType: 'html',*/
/* 			success: function(html) {*/
/* 				$('#modal-reviw').remove();*/
/* 				$('body').prepend('<div id="modal-reviw" class="modal">' + html + '</div>');*/
/* 				$('#modal-reviw').modal('show');*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	}*/
/* //--></script>						*/
/* 			<!-- GF-AdminProductCommentTab end -->*/
/* 			*/
/* */
/* 			<!--xml-->*/
/* 			<div class="tab-pane" id="tab-customtabmain">*/
/* 				 <div class="col-sm-2">*/
/* 				  <ul class="nav nav-pills nav-stacked" id="customtab">*/
/* 					{% set customtab_row = 0 %}*/
/* 					{% for product_customtab in product_customtabs %}*/
/* 					<li><a href="#tab-customtab{{ customtab_row }}" data-toggle="tab"><i class="fa fa-minus-circle" onclick="$('a[href=\'#tab-customtab{{ customtab_row }}\']').parent().remove(); $('#tab-customtab{{ customtab_row }}').remove(); $('#customtab a:first').tab('show');"></i> {{ tab_customtab }} {{ customtab_row }}</a></li>*/
/* 					{% set customtab_row = customtab_row + 1 %}*/
/* 					{% endfor %}*/
/* 					<li id="customtab-add"><a onclick="addCustomtab();"><i class="fa fa-plus-circle"></i> {{ button_customtab_add }}</a></li>*/
/* 				  </ul>*/
/* 				</div>*/
/* 			<div class="col-sm-10">*/
/*               <div class="tab-content tab-content2">*/
/*                 {% set customtab_row = 0 %}*/
/* 				{% for product_customtab in product_customtabs %}*/
/*                 <div class="tab-pane" id="tab-customtab{{ customtab_row }}">*/
/*                   <ul class="nav nav-tabs" id="clanguage{{ customtab_row }}">*/
/*                     {% for language in languages %}*/
/*                     <li><a href="#tab-customtab{{customtab_row }}-language{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" />  {{ language.name }}</a></li>*/
/*                     {% endfor %}*/
/*                   </ul>*/
/*                   <div class="tab-content">*/
/*                     {% for language in languages %}*/
/*                     <div class="tab-pane" id="tab-customtab{{customtab_row }}-language{{ language.language_id }}">*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-heading{{customtab_row }}-language{{ language.language_id }}">{{ entry_title }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="product_customtab[{{customtab_row }}][product_customtab_description][{{ language.language_id }}][title]" value="{{ product_customtab.product_customtab_description[language.language_id] ? product_customtab.product_customtab_description[language.language_id].title }}" class="form-control"/>*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-description{{customtab_row }}-language{{ language.language_id }}">{{ entry_description }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <textarea name="product_customtab[{{customtab_row }}][product_customtab_description][{{ language.language_id }}][description]" placeholder="{{ entry_description }}" id="input-description{{customtab_row }}-language{{ language.language_id }}" class="form-control">{{ product_customtab.product_customtab_description[language.language_id] ? product_customtab.product_customtab_description[language.language_id].description }}</textarea>*/
/*                         </div>*/
/*                       </div>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                   </div>*/
/* 					<div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-sort_order{{ customtab_row }}">{{ entry_sort_order }}</label>*/
/*                         <div class="col-sm-10">*/
/*                          <input type="text" name="product_customtab[{{ customtab_row }}][sort_order]" value="{{ product_customtab.sort_order }}" placeholder="{{ entry_sort_order }}" class="form-control" />*/
/*                         </div>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-status{{ customtab_row }}">{{ entry_status }}</label>*/
/*                         <div class="col-sm-10">*/
/*                         <select name="product_customtab[{{ customtab_row }}][status]" id="input-status" class="form-control">*/
/* 						{% if product_customtab.status %}*/
/* 						<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 						<option value="0">{{ text_disabled }}</option>*/
/* 						{% else %}*/
/* 						<option value="1">{{ text_enabled }}</option>*/
/* 						<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 						{% endif %}*/
/* 					  </select>*/
/*                         </div>*/
/* 					</div>*/
/* 					*/
/* 					*/
/* 				  */
/*                 </div>*/
/* 				{% set customtab_row = customtab_row + 1 %}*/
/*                 {% endfor %}*/
/*               </div>*/
/*             </div>*/
/* 			</div>*/
/* 			<!--xml-->*/
/* 			*/
/*             <div class="tab-pane" id="tab-design">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_store }}</td>*/
/*                       <td class="text-left">{{ entry_layout }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   {% for store in stores %}*/
/*                   <tr>*/
/*                     <td class="text-left">{{ store.name }}</td>*/
/*                     <td class="text-left"><select name="product_layout[{{ store.store_id }}]" class="form-control">*/
/*                         <option value=""></option>*/
/*                         */
/* */
/*                           {% for layout in layouts %}*/
/*                           {% if product_layout[store.store_id] and product_layout[store.store_id] == layout.layout_id %}*/
/* */
/*                         */
/*                         <option value="{{ layout.layout_id }}" selected="selected">{{ layout.name }}</option>*/
/*                         */
/* */
/*                           {% else %}*/
/* */
/*                         */
/*                         <option value="{{ layout.layout_id }}">{{ layout.name }}</option>*/
/*                         */
/* */
/*                           {% endif %}*/
/*                           {% endfor %}*/
/* */
/*                       */
/*                       </select></td>*/
/*                   </tr>*/
/*                   {% endfor %}*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <link href="view/javascript/codemirror/lib/codemirror.css" rel="stylesheet" />*/
/*   <link href="view/javascript/codemirror/theme/monokai.css" rel="stylesheet" />*/
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/codemirror.js"></script> */
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/xml.js"></script> */
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/formatting.js"></script> */
/*   <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/*   <link href="view/javascript/summernote/summernote.css" rel="stylesheet" />*/
/*   <script type="text/javascript" src="view/javascript/summernote/summernote-image-attributes.js"></script> */
/*   <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script> */
/*   <script type="text/javascript"><!--*/
/* // Manufacturer*/
/* $('input[name=\'manufacturer\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/manufacturer/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				json.unshift({*/
/* 					manufacturer_id: 0,*/
/* 					name: '{{ text_none }}'*/
/* 				});*/
/* */
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['manufacturer_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'manufacturer\']').val(item['label']);*/
/* 		$('input[name=\'manufacturer_id\']').val(item['value']);*/
/* 	}*/
/* });*/
/* */
/* // Category*/
/* $('input[name=\'category\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/category/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['category_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'category\']').val('');*/
/* */
/* 		$('#product-category' + item['value']).remove();*/
/* */
/* 		$('#product-category').append('<div id="product-category' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_category[]" value="' + item['value'] + '" /></div>');*/
/* 	}*/
/* });*/
/* */
/* $('#product-category').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* */
/* // Filter*/
/* $('input[name=\'filter\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/filter/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['filter_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'filter\']').val('');*/
/* */
/* 		$('#product-filter' + item['value']).remove();*/
/* */
/* 		$('#product-filter').append('<div id="product-filter' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_filter[]" value="' + item['value'] + '" /></div>');*/
/* 	}*/
/* });*/
/* */
/* $('#product-filter').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* */
/* // Downloads*/
/* $('input[name=\'download\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/download/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['download_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'download\']').val('');*/
/* */
/* 		$('#product-download' + item['value']).remove();*/
/* */
/* 		$('#product-download').append('<div id="product-download' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_download[]" value="' + item['value'] + '" /></div>');*/
/* 	}*/
/* });*/
/* */
/* $('#product-download').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* */
/* // Related*/
/* $('input[name=\'related\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['product_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'related\']').val('');*/
/* */
/* 		$('#product-related' + item['value']).remove();*/
/* */
/* 		$('#product-related').append('<div id="product-related' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_related[]" value="' + item['value'] + '" /></div>');*/
/* 	}*/
/* });*/
/* */
/* $('#product-related').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* var attribute_row = {{ attribute_row }};*/
/* */
/* function addAttribute() {*/
/*     html  = '<tr id="attribute-row' + attribute_row + '">';*/
/* 	html += '  <td class="text-left" style="width: 20%;"><input type="text" name="product_attribute[' + attribute_row + '][name]" value="" placeholder="{{ entry_attribute }}" class="form-control" /><input type="hidden" name="product_attribute[' + attribute_row + '][attribute_id]" value="" /></td>';*/
/* 	html += '  <td class="text-left">';*/
/* 	{% for language in languages %}*/
/* 	html += '<div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span><textarea name="product_attribute[' + attribute_row + '][product_attribute_description][{{ language.language_id }}][text]" rows="5" placeholder="{{ entry_text }}" class="form-control"></textarea></div>';*/
/*     {% endfor %}*/
/* 	html += '  </td>';*/
/* 	html += '  <td class="text-right"><button type="button" onclick="$(\'#attribute-row' + attribute_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/*     html += '</tr>';*/
/* */
/* 	$('#attribute tbody').append(html);*/
/* */
/* 	attributeautocomplete(attribute_row);*/
/* */
/* 	attribute_row++;*/
/* }*/
/* */
/* function attributeautocomplete(attribute_row) {*/
/* 	$('input[name=\'product_attribute[' + attribute_row + '][name]\']').autocomplete({*/
/* 		'source': function(request, response) {*/
/* 			$.ajax({*/
/* 				url: 'index.php?route=catalog/attribute/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 				dataType: 'json',*/
/* 				success: function(json) {*/
/* 					response($.map(json, function(item) {*/
/* 						return {*/
/* 							category: item.attribute_group,*/
/* 							label: item.name,*/
/* 							value: item.attribute_id*/
/* 						}*/
/* 					}));*/
/* 				}*/
/* 			});*/
/* 		},*/
/* 		'select': function(item) {*/
/* 			$('input[name=\'product_attribute[' + attribute_row + '][name]\']').val(item['label']);*/
/* 			$('input[name=\'product_attribute[' + attribute_row + '][attribute_id]\']').val(item['value']);*/
/* 		}*/
/* 	});*/
/* }*/
/* */
/* $('#attribute tbody tr').each(function(index, element) {*/
/* 	attributeautocomplete(index);*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* var option_row = {{ option_row }};*/
/* */
/* $('input[name=\'option\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/option/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						category: item['category'],*/
/* 						label: item['name'],*/
/* 						value: item['option_id'],*/
/* 						type: item['type'],*/
/* 						option_value: item['option_value']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		html  = '<div class="tab-pane" id="tab-option' + option_row + '">';*/
/* 		html += '	<input type="hidden" name="product_option[' + option_row + '][product_option_id]" value="" />';*/
/* 		html += '	<input type="hidden" name="product_option[' + option_row + '][name]" value="' + item['label'] + '" />';*/
/* 		html += '	<input type="hidden" name="product_option[' + option_row + '][option_id]" value="' + item['value'] + '" />';*/
/* 		html += '	<input type="hidden" name="product_option[' + option_row + '][type]" value="' + item['type'] + '" />';*/
/* */
/* 		html += '	<div class="form-group">';*/
/* 		html += '	  <label class="col-sm-2 control-label" for="input-required' + option_row + '">{{ entry_required }}</label>';*/
/* 		html += '	  <div class="col-sm-10"><select name="product_option[' + option_row + '][required]" id="input-required' + option_row + '" class="form-control">';*/
/* 		html += '	      <option value="1">{{ text_yes }}</option>';*/
/* 		html += '	      <option value="0">{{ text_no }}</option>';*/
/* 		html += '	  </select></div>';*/
/* 		html += '	</div>';*/
/* */
/* 		if (item['type'] == 'text') {*/
/* 			html += '	<div class="form-group">';*/
/* 			html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			html += '	  <div class="col-sm-10"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" id="input-value' + option_row + '" class="form-control" /></div>';*/
/* 			html += '	</div>';*/
/* 		}*/
/* */
/* 		if (item['type'] == 'textarea') {*/
/* 			html += '	<div class="form-group">';*/
/* 			html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			html += '	  <div class="col-sm-10"><textarea name="product_option[' + option_row + '][value]" rows="5" placeholder="{{ entry_option_value }}" id="input-value' + option_row + '" class="form-control"></textarea></div>';*/
/* 			html += '	</div>';*/
/* 		}*/
/* */
/* 		if (item['type'] == 'file') {*/
/* 			html += '	<div class="form-group" style="display: none;">';*/
/* 			html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			html += '	  <div class="col-sm-10"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" id="input-value' + option_row + '" class="form-control" /></div>';*/
/* 			html += '	</div>';*/
/* 		}*/
/* */
/* 		if (item['type'] == 'date') {*/
/* 			html += '	<div class="form-group">';*/
/* 			html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			html += '	  <div class="col-sm-3"><div class="input-group date"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" data-date-format="YYYY-MM-DD" id="input-value' + option_row + '" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></div>';*/
/* 			html += '	</div>';*/
/* 		}*/
/* */
/* 		if (item['type'] == 'time') {*/
/* 			html += '	<div class="form-group">';*/
/* 			html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			html += '	  <div class="col-sm-10"><div class="input-group time"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" data-date-format="HH:mm" id="input-value' + option_row + '" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></div>';*/
/* 			html += '	</div>';*/
/* 		}*/
/* */
/* 		if (item['type'] == 'datetime') {*/
/* 			html += '	<div class="form-group">';*/
/* 			html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			html += '	  <div class="col-sm-10"><div class="input-group datetime"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-value' + option_row + '" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></div>';*/
/* 			html += '	</div>';*/
/* 		}*/
/* */
/* 		if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {*/
/* 			html += '<div class="table-responsive">';*/
/* 			html += '  <table id="option-value' + option_row + '" class="table table-striped table-bordered table-hover">';*/
/* 			html += '  	 <thead>';*/
/* 			html += '      <tr>';*/
/* 			html += '        <td class="text-left">{{ entry_option_value }}</td>';*/
/* 			html += '        <td class="text-right">{{ entry_quantity }}</td>';*/
/* 			html += '        <td class="text-left">{{ entry_subtract }}</td>';*/
/* 			html += '        <td class="text-right">{{ entry_price }}</td>';*/
/* 			html += '        <td class="text-right">{{ entry_option_points }}</td>';*/
/* 			html += '        <td class="text-right">{{ entry_weight }}</td>';*/
/* 			html += '        <td></td>';*/
/* 			html += '      </tr>';*/
/* 			html += '  	 </thead>';*/
/* 			html += '  	 <tbody>';*/
/* 			html += '    </tbody>';*/
/* 			html += '    <tfoot>';*/
/* 			html += '      <tr>';*/
/* 			html += '        <td colspan="6"></td>';*/
/* 			html += '        <td class="text-left"><button type="button" onclick="addOptionValue(' + option_row + ');" data-toggle="tooltip" title="{{ button_option_value_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>';*/
/* 			html += '      </tr>';*/
/* 			html += '    </tfoot>';*/
/* 			html += '  </table>';*/
/* 			html += '</div>';*/
/* */
/*             html += '  <select id="option-values' + option_row + '" style="display: none;">';*/
/* */
/*             for (i = 0; i < item['option_value'].length; i++) {*/
/* 				html += '  <option value="' + item['option_value'][i]['option_value_id'] + '">' + item['option_value'][i]['name'] + '</option>';*/
/*             }*/
/* */
/*             html += '  </select>';*/
/* 			html += '</div>';*/
/* 		}*/
/* */
/* 		$('#tab-option .tab-content').append(html);*/
/* */
/* 		$('#option > li:last-child').before('<li><a href="#tab-option' + option_row + '" data-toggle="tab"><i class="fa fa-minus-circle" onclick=" $(\'#option a:first\').tab(\'show\');$(\'a[href=\\\'#tab-option' + option_row + '\\\']\').parent().remove(); $(\'#tab-option' + option_row + '\').remove();"></i>' + item['label'] + '</li>');*/
/* */
/* 		$('#option a[href=\'#tab-option' + option_row + '\']').tab('show');*/
/* */
/* 		$('[data-toggle=\'tooltip\']').tooltip({*/
/* 			container: 'body',*/
/* 			html: true*/
/* 		});*/
/* */
/* 		$('.date').datetimepicker({*/
/* 			language: '{{ datepicker }}',*/
/* 			pickTime: false*/
/* 		});*/
/* */
/* 		$('.time').datetimepicker({*/
/* 			language: '{{ datepicker }}',*/
/* 			pickDate: false*/
/* 		});*/
/* */
/* 		$('.datetime').datetimepicker({*/
/* 			language: '{{ datepicker }}',*/
/* 			pickDate: true,*/
/* 			pickTime: true*/
/* 		});*/
/* */
/* 		option_row++;*/
/* 	}*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* var option_value_row = {{ option_value_row }};*/
/* */
/* function addOptionValue(option_row) {*/
/* 	html  = '<tr id="option-value-row' + option_value_row + '">';*/
/* 	html += '  <td class="text-left"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]" class="form-control">';*/
/* 	html += $('#option-values' + option_row).html();*/
/* 	html += '  </select><input type="hidden" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]" value="" /></td>';*/
/* 	html += '  <td class="text-right"><input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]" value="" placeholder="{{ entry_quantity }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-left"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]" class="form-control">';*/
/* 	html += '    <option value="1">{{ text_yes }}</option>';*/
/* 	html += '    <option value="0">{{ text_no }}</option>';*/
/* 	html += '  </select></td>';*/
/* 	html += '  <td class="text-right"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]" class="form-control">';*/
/* 	html += '    <option value="+">+</option>';*/
/* 	html += '    <option value="-">-</option>';*/
/* 	html += '  </select>';*/
/* 	html += '  <input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]" value="" placeholder="{{ entry_price }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-right"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]" class="form-control">';*/
/* 	html += '    <option value="+">+</option>';*/
/* 	html += '    <option value="-">-</option>';*/
/* 	html += '  </select>';*/
/* 	html += '  <input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]" value="" placeholder="{{ entry_points }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-right"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]" class="form-control">';*/
/* 	html += '    <option value="+">+</option>';*/
/* 	html += '    <option value="-">-</option>';*/
/* 	html += '  </select>';*/
/* 	html += '  <input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]" value="" placeholder="{{ entry_weight }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-left"><button type="button" onclick="$(this).tooltip(\'destroy\');$(\'#option-value-row' + option_value_row + '\').remove();" data-toggle="tooltip" rel="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	html += '</tr>';*/
/* */
/* 	$('#option-value' + option_row + ' tbody').append(html);*/
/* 	$('[rel=tooltip]').tooltip();*/
/* */
/* 	option_value_row++;*/
/* }*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* var discount_row = {{ discount_row }};*/
/* */
/* function addDiscount() {*/
/* 	html  = '<tr id="discount-row' + discount_row + '">';*/
/*     html += '  <td class="text-left"><select name="product_discount[' + discount_row + '][customer_group_id]" class="form-control">';*/
/*     {% for customer_group in customer_groups %}*/
/*     html += '    <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name|escape('js') }}</option>';*/
/*     {% endfor %}*/
/*     html += '  </select></td>';*/
/*     html += '  <td class="text-right"><input type="text" name="product_discount[' + discount_row + '][quantity]" value="" placeholder="{{ entry_quantity }}" class="form-control" /></td>';*/
/*     html += '  <td class="text-right"><input type="text" name="product_discount[' + discount_row + '][priority]" value="" placeholder="{{ entry_priority }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-right"><input type="text" name="product_discount[' + discount_row + '][price]" value="" placeholder="{{ entry_price }}" class="form-control" /></td>';*/
/*     html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_discount[' + discount_row + '][date_start]" value="" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/* 	html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_discount[' + discount_row + '][date_end]" value="" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/* 	html += '  <td class="text-left"><button type="button" onclick="$(\'#discount-row' + discount_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	html += '</tr>';*/
/* */
/* 	$('#discount tbody').append(html);*/
/* */
/* 	$('.date').datetimepicker({*/
/* 		pickTime: false*/
/* 	});*/
/* */
/* 	discount_row++;*/
/* }*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* var special_row = {{ special_row }};*/
/* */
/* function addSpecial() {*/
/* 	html  = '<tr id="special-row' + special_row + '">';*/
/*     html += '  <td class="text-left"><select name="product_special[' + special_row + '][customer_group_id]" class="form-control">';*/
/*     {% for customer_group in customer_groups %}*/
/*     html += '      <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name|escape('js') }}</option>';*/
/*     {% endfor %}*/
/*     html += '  </select></td>';*/
/*     html += '  <td class="text-right"><input type="text" name="product_special[' + special_row + '][priority]" value="" placeholder="{{ entry_priority }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-right"><input type="text" name="product_special[' + special_row + '][price]" value="" placeholder="{{ entry_price }}" class="form-control" /></td>';*/
/*     html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_special[' + special_row + '][date_start]" value="" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/* 	html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_special[' + special_row + '][date_end]" value="" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/* 	html += '  <td class="text-left"><button type="button" onclick="$(\'#special-row' + special_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	html += '</tr>';*/
/* */
/* 	$('#special tbody').append(html);*/
/* */
/* 	$('.date').datetimepicker({*/
/* 		language: '{{ datepicker }}',*/
/* 		pickTime: false*/
/* 	});*/
/* */
/* 	special_row++;*/
/* }*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* var image_row = {{ image_row }};*/
/* */
/* function addImage() {*/
/* 	html  = '<tr id="image-row' + image_row + '">';*/
/* 	html += '  <td class="text-left"><a href="" id="thumb-image' + image_row + '"data-toggle="image" class="img-thumbnail"><img src="{{ placeholder }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a><input type="hidden" name="product_image[' + image_row + '][image]" value="" id="input-image' + image_row + '" /></td>';*/
/* 	html += '  <td class="text-right"><input type="text" name="product_image[' + image_row + '][sort_order]" value="" placeholder="{{ entry_sort_order }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-left"><button type="button" onclick="$(\'#image-row' + image_row  + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	html += '</tr>';*/
/* */
/* 	$('#images tbody').append(html);*/
/* */
/* 	image_row++;*/
/* }*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* var recurring_row = {{ recurring_row }};*/
/* */
/* function addRecurring() {*/
/* 	html  = '<tr id="recurring-row' + recurring_row + '">';*/
/* 	html += '  <td class="left">';*/
/* 	html += '    <select name="product_recurring[' + recurring_row + '][recurring_id]" class="form-control">>';*/
/* 	{% for recurring in recurrings %}*/
/* 	html += '      <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>';*/
/* 	{% endfor %}*/
/* 	html += '    </select>';*/
/* 	html += '  </td>';*/
/* 	html += '  <td class="left">';*/
/* 	html += '    <select name="product_recurring[' + recurring_row + '][customer_group_id]" class="form-control">>';*/
/* 	{% for customer_group in customer_groups %}*/
/* 	html += '      <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>';*/
/* 	{% endfor %}*/
/* 	html += '    <select>';*/
/* 	html += '  </td>';*/
/* 	html += '  <td class="left">';*/
/* 	html += '    <a onclick="$(\'#recurring-row' + recurring_row + '\').remove()" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></a>';*/
/* 	html += '  </td>';*/
/* 	html += '</tr>';*/
/* */
/* 	$('#tab-recurring table tbody').append(html);*/
/* */
/* 	recurring_row++;*/
/* }*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $('#language a:first').tab('show');*/
/* $('#option a:first').tab('show');*/
/* //--></script></div>*/
/* */
/* <script type="text/javascript" src="view/javascript/como/como_tools.js"></script> */
/* <script type="text/javascript"><!--*/
/* $(document).ready(function() {*/
/*     var boxes = ['{{ entry_category }}', '{{ entry_filter }}', '{{ entry_store }}', '{{ entry_download }}', '{{ entry_related }}'];*/
/*     $('label').each(function() {*/
/*         if (boxes.indexOf($(this).text()) != -1) {*/
/*             $(this).append('<br /><button class="btn btn-primary btn-xs" type="button" onclick="this.disabled=true;comoToggleBoxExpand(this, event);" data-toggle="tooltip" title="{{ button_toggleexpand }}"><i class="fa fa-caret-down"></i></button>');*/
/*         }*/
/*     });*/
/* });*/
/* //--></script>*/
/*             */
/* */
/* <script type="text/javascript"><!--*/
/* //quicksave*/
/* $("#qsave").on("click",function(){for(var e=$(".note-editor").length,r=0;e>r;r++){var t=$(".note-editor").eq(r).parent().children("textarea").attr("id");if("function"==typeof $().code)var a=$("#"+t).code();else a=$("#"+t).summernote("code");$("#"+t).html(a)}$.ajax({type:"post",data:$("form").serialize(),url:"index.php?route=catalog/product/qsave&user_token={{ user_token }}&product_id={{ pidqs }}",dataType:"json",beforeSend:function(){$("#qsave").prop("disabled",!0)},complete:function(){$("#qsave").prop("disabled",!1)},success:function(e){if($(".alert").remove(),$(".text-danger").remove(),$("div").removeClass("has-error"),e.error){if(html='<div class="alert alert-danger">',html+=" "+e.error.warning+' <button type="button" class="close" data-dismiss="alert">&times;</button></br>',e.error.name){var t="";for(r in e.error.name){var a=$("#input-name"+r);$(a).after('<div class="text-danger">'+e.error.name[r]+"</div>"),$(a).parent().addClass("has-error"),t='</br><i class="fa fa-exclamation-circle"></i> '+e.error.name[r]}html+=t}if(e.error.meta_title){t="";for(r in e.error.meta_title){a=$("#input-meta-title"+r);$(a).after('<div class="text-danger">'+e.error.meta_title[r]+"</div>"),$(a).parent().addClass("has-error"),t='</br><i class="fa fa-exclamation-circle"></i> '+e.error.meta_title[r]}html+=t}if(e.error.model&&($("#input-model").after('<div class="text-danger">'+e.error.model+"</div>"),$("#input-model").parent().addClass("has-error"),html+='</br><i class="fa fa-exclamation-circle"></i> '+e.error.model),e.error.keyword){t="";for(s in e.error.keyword)for(r in e.error.keyword[s]){a=$('[name="product_seo_url['+s+"]["+r+']"]');$(a).parent().after('<div class="text-danger">'+e.error.keyword[s][r]+"</div>"),$(a).parent(".input-group").addClass("has-error"),t='</br><i class="fa fa-exclamation-circle"></i> '+e.error.keyword[s][r],html+=t}}html+=" </div>",$("#content > .container-fluid").prepend(html)}e.success&&$("#content > .container-fluid").prepend('<div class="alert alert-success"><i class="fa fa-check-circle"></i> '+e.success+'  <button type="button" class="close" data-dismiss="alert">&times;</button></div>')},error:function(e,r,t){alert(t+"\r\n"+e.statusText+"\r\n"+e.responseText)}})});*/
/* //quicksave end*/
/* //--></script>*/
/* 			*/
/* */
/* 			<!--xml-->*/
/* 			*/
/* 			<script type="text/javascript"><!--*/
/* {% set customtab_row = 0 %}*/
/* {% for product_customtab in product_customtabs %}*/
/* {% for language in languages %}*/
/* $('#input-description{{ customtab_row }}-language{{ language.language_id }}').summernote({*/
/* 	height: 300*/
/* });*/
/* {% endfor %}*/
/* {% set customtab_row = customtab_row + 1 %}*/
/* {% endfor %}*/
/* */
/* */
/* //--></script> */
/* */
/* <script type="text/javascript"><!--*/
/* var customtab_row = {{ customtab_row }};*/
/* */
/* function addCustomtab() {	*/
/* 	html  = '<div id="tab-customtab' + customtab_row + '" class="tab-pane">';*/
/* 	html += '  <ul class="nav nav-tabs" id="clanguage' + customtab_row + '">';*/
/*     {% for language in languages %}*/
/*      html += '    <li><a href="#tab-customtab' + customtab_row + '-language{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>';*/
/*     {% endfor %}*/
/* 	html += '  </ul>';*/
/* */
/* 	html += '  <div class="tab-content">';*/
/* 	{% for language in languages %}*/
/* 	html += '    <div class="tab-pane" id="tab-customtab' + customtab_row + '-language{{ language.language_id }}">';*/
/* 	html += '      <div class="form-group">';*/
/* 	html += '        <label class="col-sm-2 control-label" for="input-title' + customtab_row + '-language{{ language.language_id }}">{{ entry_title }}</label>';*/
/* 	html += '        <div class="col-sm-10"><input type="text" name="product_customtab[' + customtab_row + '][product_customtab_description][{{ language.language_id }}][title]" placeholder="{{ entry_title }}" id="input-title' + customtab_row + '-language{{ language.language_id }}" value="" class="form-control"/></div>';*/
/* 	html += '      </div>';*/
/* 	html += '      <div class="form-group">';*/
/* 	html += '        <label class="col-sm-2 control-label" for="input-description' + customtab_row + '-language{{ language.language_id }}">{{ entry_description }}</label>';*/
/* 	html += '        <div class="col-sm-10"><textarea name="product_customtab[' + customtab_row + '][product_customtab_description][{{ language.language_id }}][description]" id="input-description' + customtab_row + '-language{{ language.language_id }}"></textarea></div>';*/
/* 	html += '      </div>';*/
/* 	html += '    </div>';*/
/* 	{% endfor %}*/
/* 	html += '  </div>';*/
/* 	html += '      <div class="form-group">';*/
/* 	html += '        <label class="col-sm-2 control-label" for="input-status' + customtab_row +'">{{ entry_status }}</label>';*/
/* 	html += '        <div class="col-sm-10"><select name="product_customtab[' + customtab_row + '][status]" class="form-control"><option value="1">{{ text_enabled }}</option><option value="0">{{ text_disabled }}</option></select></div>';*/
/* 	html += '      </div>';*/
/* 	html += '  <div class="form-group">';*/
/* 	html += '<label class="col-sm-2 control-label" for="input-sort_order' + customtab_row +'">{{ entry_sort_order }}</label>';*/
/* 	html += ' <div class="col-sm-10"><input type="text" name="product_customtab[' + customtab_row + '][sort_order]" value="" class="form-control" /></div>';*/
/* 	html += '</div>';*/
/* 	html += '</div>';*/
/* 	*/
/* 	$('#tab-customtabmain .tab-content2').append(html);*/
/* 	*/
/* 	{% for language in languages %}*/
/* 	$('#input-description' + customtab_row + '-language{{ language.language_id }}').summernote({*/
/* 		height: 300*/
/* 	});*/
/* 	{% endfor %}*/
/* 	*/
/* 	$('#customtab a[href=\'#tab-customtab' + customtab_row + '\']').tab('show');*/
/* 	*/
/* 	$('#clanguage' + customtab_row + ' li:first-child a').tab('show');*/
/* 	*/
/* 	$('#customtab-add').before('<li><a href="#tab-customtab' + customtab_row + '" data-toggle="tab"><i class="fa fa-minus-circle" onclick="$(\'a[href=\\\'#tab-customtab' + customtab_row + '\\\']\').parent().remove(); $(\'#tab-customtab' + customtab_row + '\').remove(); $(\'#customtab li a:first\').tab(\'show\');"></i> {{ tab_customtab }} ' + customtab_row + '</a></li>');*/
/* 	*/
/* 	*/
/* 	$('#customtab-' + customtab_row).trigger('click');*/
/* 	*/
/* 	customtab_row++;*/
/* }*/
/* //--></script> */
/* */
/* <script type="text/javascript"><!--*/
/* $('#customtab li:first-child a').tab('show');*/
/* {% set customtab_row = 0 %}*/
/* {% for product_customtab in product_customtabs %}*/
/* $('#clanguage{{ customtab_row }} li:first-child a').tab('show');*/
/* {% set customtab_row = customtab_row + 1 %}*/
/* {% endfor %} */
/* //--></script> */
/* <!--xml-->*/
/* 			*/
/* {{ footer }} */
/* */
