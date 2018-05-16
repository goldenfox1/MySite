<?php

/* basecart/template/checkout/simplecheckout.twig */
class __TwigTemplate_ec875f719b2910359a5749fdf672b06ed00e111fd7206243070706abaa8d321b extends Twig_Template
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
        if ((( !(isset($context["ajax"]) ? $context["ajax"] : null) &&  !(isset($context["popup"]) ? $context["popup"] : null)) &&  !(isset($context["as_module"]) ? $context["as_module"] : null))) {
            // line 2
            $context["simple_page"] = "simpleedit";
            // line 3
            $context["heading_title"] = ((isset($context["heading_title"]) ? $context["heading_title"] : null) . (((isset($context["display_weight"]) ? $context["display_weight"] : null)) ? ((("&nbsp;(<span id=\"weight\">" . (isset($context["weight"]) ? $context["weight"] : null)) . "</span>)")) : ("")));
            // line 4
            $this->loadTemplate((isset($context["simple_header"]) ? $context["simple_header"] : null), "basecart/template/checkout/simplecheckout.twig", 4)->display($context);
            // line 5
            echo "<style>
    ";
            // line 6
            if ((isset($context["left_column_width"]) ? $context["left_column_width"] : null)) {
                // line 7
                echo "        .simplecheckout-left-column {
            width: ";
                // line 8
                echo (isset($context["left_column_width"]) ? $context["left_column_width"] : null);
                echo "%;
        }
        @media only screen and (max-width:1024px) {
            .simplecheckout-left-column {
                width: 100%;
            }
        }
    ";
            }
            // line 16
            echo "    ";
            if ((isset($context["right_column_width"]) ? $context["right_column_width"] : null)) {
                // line 17
                echo "        .simplecheckout-right-column {
            width: ";
                // line 18
                echo (isset($context["right_column_width"]) ? $context["right_column_width"] : null);
                echo "%;
        }
        @media only screen and (max-width:1024px) {
            .simplecheckout-right-column {
                width: 100%;
            }
        }
    ";
            }
            // line 26
            echo "    ";
            if ((isset($context["customer_with_payment_address"]) ? $context["customer_with_payment_address"] : null)) {
                // line 27
                echo "        #simplecheckout_customer {
            margin-bottom: 0;
        }
        #simplecheckout_customer .simplecheckout-block-content {
            border-bottom-width: 0;
            padding-bottom: 0;
        }
        #simplecheckout_payment_address div.checkout-heading {
            display: none;
        }
        #simplecheckout_payment_address .simplecheckout-block-content {
            border-top-width: 0;
            padding-top: 0;
        }
    ";
            }
            // line 42
            echo "    ";
            if ((isset($context["customer_with_shipping_address"]) ? $context["customer_with_shipping_address"] : null)) {
                // line 43
                echo "        #simplecheckout_customer {
            margin-bottom: 0;
        }
        #simplecheckout_customer .simplecheckout-block-content {
            border-bottom-width: 0;
            padding-bottom: 0;
        }
        #simplecheckout_shipping_address div.checkout-heading {
            display: none;
        }
        #simplecheckout_shipping_address .simplecheckout-block-content {
            border-top-width: 0;
            padding-top: 0;
        }
    ";
            }
            // line 58
            echo "</style>
<div class=\"simple-content\">
";
        }
        // line 61
        echo "    ";
        if (( !(isset($context["ajax"]) ? $context["ajax"] : null) || ((isset($context["ajax"]) ? $context["ajax"] : null) && (isset($context["popup"]) ? $context["popup"] : null)))) {
            // line 62
            echo "    <script type=\"text/javascript\">
        var startSimpleInterval_";
            // line 63
            echo (isset($context["group"]) ? $context["group"] : null);
            echo " = window.setInterval(function(){
            if (typeof jQuery !== 'undefined' && typeof Simplecheckout === \"function\" && jQuery.isReady) {
                window.clearInterval(startSimpleInterval_";
            // line 65
            echo (isset($context["group"]) ? $context["group"] : null);
            echo ");

                var simplecheckout_";
            // line 67
            echo (isset($context["group"]) ? $context["group"] : null);
            echo " = new Simplecheckout({
                    mainRoute: \"checkout/simplecheckout\",
                    additionalParams: \"";
            // line 69
            echo (isset($context["additional_params"]) ? $context["additional_params"] : null);
            echo "\",
                    additionalPath: \"";
            // line 70
            echo (isset($context["additional_path"]) ? $context["additional_path"] : null);
            echo "\",
                    mainUrl: \"";
            // line 71
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\",
                    mainContainer: \"#simplecheckout_form_";
            // line 72
            echo (isset($context["group"]) ? $context["group"] : null);
            echo "\",
                    currentTheme: \"";
            // line 73
            echo (isset($context["current_theme"]) ? $context["current_theme"] : null);
            echo "\",
                    loginBoxBefore: \"";
            // line 74
            echo ((((isset($context["login_type"]) ? $context["login_type"] : null) == "flat")) ? ("#simplecheckout_customer .simplecheckout-block-content:first") : (""));
            echo "\",
                    displayProceedText: ";
            // line 75
            echo (((isset($context["display_proceed_text"]) ? $context["display_proceed_text"] : null)) ? (1) : (0));
            echo ",
                    scrollToError: ";
            // line 76
            echo (((isset($context["scroll_to_error"]) ? $context["scroll_to_error"] : null)) ? (1) : (0));
            echo ",
                    scrollToPaymentForm: ";
            // line 77
            echo (((isset($context["scroll_to_payment_form"]) ? $context["scroll_to_payment_form"] : null)) ? (1) : (0));
            echo ",
                    notificationDefault: ";
            // line 78
            echo (((isset($context["notification_default"]) ? $context["notification_default"] : null)) ? (1) : (0));
            echo ",
                    notificationToasts: ";
            // line 79
            echo (((isset($context["notification_toasts"]) ? $context["notification_toasts"] : null)) ? (1) : (0));
            echo ",
                    notificationCheckForm: ";
            // line 80
            echo (((isset($context["notification_check_form"]) ? $context["notification_check_form"] : null)) ? (1) : (0));
            echo ",
                    notificationCheckFormText: \"";
            // line 81
            echo (isset($context["notification_check_form_text"]) ? $context["notification_check_form_text"] : null);
            echo "\",
                    useAutocomplete: ";
            // line 82
            echo (((isset($context["use_autocomplete"]) ? $context["use_autocomplete"] : null)) ? (1) : (0));
            echo ",
                    useGoogleApi: ";
            // line 83
            echo (((isset($context["use_google_api"]) ? $context["use_google_api"] : null)) ? (1) : (0));
            echo ",
                    useStorage: ";
            // line 84
            echo (((isset($context["use_storage"]) ? $context["use_storage"] : null)) ? (1) : (0));
            echo ",
                    popup: ";
            // line 85
            echo ((((isset($context["popup"]) ? $context["popup"] : null) || (isset($context["as_module"]) ? $context["as_module"] : null))) ? (1) : (0));
            echo ",
                    agreementCheckboxStep: ";
            // line 86
            echo (((isset($context["agreement_checkbox_step"]) ? $context["agreement_checkbox_step"] : null)) ? ((isset($context["agreement_checkbox_step"]) ? $context["agreement_checkbox_step"] : null)) : ("'0'"));
            echo ",
                    enableAutoReloaingOfPaymentFrom: ";
            // line 87
            echo (((isset($context["enable_reloading_of_payment_form"]) ? $context["enable_reloading_of_payment_form"] : null)) ? (1) : (0));
            echo ",
                    javascriptCallback: function() {try{ ";
            // line 88
            echo (isset($context["javascript_callback"]) ? $context["javascript_callback"] : null);
            echo " } catch (e) {console.log(e)}},
                    stepButtons: ";
            // line 89
            echo (isset($context["step_buttons"]) ? $context["step_buttons"] : null);
            echo ",
                    menuType: ";
            // line 90
            echo (((isset($context["menu_type"]) ? $context["menu_type"] : null)) ? ((isset($context["menu_type"]) ? $context["menu_type"] : null)) : ("1"));
            echo "
                });

                if (typeof toastr !== 'undefined') {
                    toastr.options.positionClass = \"";
            // line 94
            echo (((isset($context["notification_position"]) ? $context["notification_position"] : null)) ? ((isset($context["notification_position"]) ? $context["notification_position"] : null)) : ("toast-top-right"));
            echo "\";
                    toastr.options.timeOut = \"";
            // line 95
            echo (((isset($context["notification_timeout"]) ? $context["notification_timeout"] : null)) ? ((isset($context["notification_timeout"]) ? $context["notification_timeout"] : null)) : ("5000"));
            echo "\";
                    toastr.options.progressBar = true;
                }

                \$(document).ajaxComplete(function(e, xhr, settings) {
                    if (settings.url.indexOf(\"route=module/cart&remove\") > 0 || (settings.url.indexOf(\"route=module/cart\") > 0 && settings.type == \"POST\") || settings.url.indexOf(\"route=checkout/cart/add\") > 0 || settings.url.indexOf(\"route=checkout/cart/remove\") > 0) {
                        window.resetSimpleQuantity = true;
                        simplecheckout_";
            // line 102
            echo (isset($context["group"]) ? $context["group"] : null);
            echo ".reloadAll();
                    }
                });

                \$(document).ajaxSend(function(e, xhr, settings) {
                    if (settings.url.indexOf(\"checkout/simplecheckout&group\") > 0 && typeof window.resetSimpleQuantity !== \"undefined\" && window.resetSimpleQuantity) {
                        settings.data = settings.data.replace(/quantity.+?&/g,\"\");
                        window.resetSimpleQuantity = false;
                    }
                });

                simplecheckout_";
            // line 113
            echo (isset($context["group"]) ? $context["group"] : null);
            echo ".init();
                
            }
        },0);
    </script>
    ";
        }
        // line 119
        echo "    <div id=\"simplecheckout_form_";
        echo (isset($context["group"]) ? $context["group"] : null);
        echo "\" ";
        echo ((((isset($context["display_error"]) ? $context["display_error"] : null) && (isset($context["has_error"]) ? $context["has_error"] : null))) ? ("data-error=\"true\"") : (""));
        echo " ";
        echo (((isset($context["logged"]) ? $context["logged"] : null)) ? ("data-logged=\"true\"") : (""));
        echo ">
        <div class=\"simplecheckout\">
            ";
        // line 121
        if ( !(isset($context["cart_empty"]) ? $context["cart_empty"] : null)) {
            // line 122
            echo "                ";
            if (((isset($context["steps_count"]) ? $context["steps_count"] : null) > 1)) {
                // line 123
                echo "                    ";
                if (((isset($context["menu_type"]) ? $context["menu_type"] : null) == "2")) {
                    // line 124
                    echo "                        <div id=\"simplecheckout_step_menu\" class=\"simplecheckout-vertical-menu simplecheckout-top-menu\">
                            ";
                    // line 125
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["steps_count"]) ? $context["steps_count"] : null)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 126
                        echo "                                <div class=\"checkout-heading simple-step-vertical\" style=\"display:none\" data-onclick=\"gotoStep\" data-step=\"";
                        echo $context["i"];
                        echo "\"><h4 class=\"panel-title\">";
                        echo $this->getAttribute((isset($context["step_names"]) ? $context["step_names"] : null), ($context["i"] - 1), array(), "array");
                        echo "</h4></div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 128
                    echo "                        </div>
                    ";
                } else {
                    // line 130
                    echo "                        <div id=\"simplecheckout_step_menu\">
                            ";
                    // line 131
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["steps_count"]) ? $context["steps_count"] : null)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 132
                        echo "                                <span class=\"simple-step\" data-onclick=\"gotoStep\" data-step=\"";
                        echo $context["i"];
                        echo "\">";
                        echo $this->getAttribute((isset($context["step_names"]) ? $context["step_names"] : null), ($context["i"] - 1), array(), "array");
                        echo "</span>";
                        if (($context["i"] < (isset($context["steps_count"]) ? $context["steps_count"] : null))) {
                            echo "<span class=\"simple-step-delimiter\" data-step=\"";
                            echo ($context["i"] + 1);
                            echo "\"><img src=\"";
                            echo (isset($context["additional_path"]) ? $context["additional_path"] : null);
                            echo "catalog/view/image/next_gray.png\"></span>";
                        }
                        // line 133
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 134
                    echo "                        </div>
                    ";
                }
                // line 136
                echo "                ";
            }
            // line 137
            echo "
                ";
            // line 138
            if ((((isset($context["steps_count"]) ? $context["steps_count"] : null) > 1) && ((isset($context["menu_type"]) ? $context["menu_type"] : null) == "2"))) {
                // line 139
                echo "                    <div class=\"simplecheckout-steps-wrapper\">
                ";
            }
            // line 141
            echo "
                ";
            // line 143
            $context["replace"] = array("{three_column}" => "<div class=\"simplecheckout-three-column\">", "{/three_column}" => "</div>", "{left_column}" => "<div class=\"simplecheckout-left-column\">", "{/left_column}" => "</div>", "{right_column}" => "<div class=\"simplecheckout-right-column\">", "{/right_column}" => "</div>", "{step}" => "<div class=\"simplecheckout-step\">", "{/step}" => "</div>", "{clear_both}" => "<div style=\"width:100%;clear:both;height:1px\"></div>", "{customer}" => $this->getAttribute(            // line 153
(isset($context["simple_blocks"]) ? $context["simple_blocks"] : null), "customer", array(), "array"), "{payment_address}" => $this->getAttribute(            // line 154
(isset($context["simple_blocks"]) ? $context["simple_blocks"] : null), "payment_address", array(), "array"), "{shipping_address}" => $this->getAttribute(            // line 155
(isset($context["simple_blocks"]) ? $context["simple_blocks"] : null), "shipping_address", array(), "array"), "{cart}" => $this->getAttribute(            // line 156
(isset($context["simple_blocks"]) ? $context["simple_blocks"] : null), "cart", array(), "array"), "{shipping}" => $this->getAttribute(            // line 157
(isset($context["simple_blocks"]) ? $context["simple_blocks"] : null), "shipping", array(), "array"), "{payment}" => $this->getAttribute(            // line 158
(isset($context["simple_blocks"]) ? $context["simple_blocks"] : null), "payment", array(), "array"), "{agreement}" => $this->getAttribute(            // line 159
(isset($context["simple_blocks"]) ? $context["simple_blocks"] : null), "agreement", array(), "array"), "{help}" => $this->getAttribute(            // line 160
(isset($context["simple_blocks"]) ? $context["simple_blocks"] : null), "help", array(), "array"), "{summary}" => $this->getAttribute(            // line 161
(isset($context["simple_blocks"]) ? $context["simple_blocks"] : null), "summary", array(), "array"), "{comment}" => $this->getAttribute(            // line 162
(isset($context["simple_blocks"]) ? $context["simple_blocks"] : null), "comment", array(), "array"), "{payment_form}" => (("<div class=\"simplecheckout-block\" id=\"simplecheckout_payment_form\">" . $this->getAttribute(            // line 163
(isset($context["simple_blocks"]) ? $context["simple_blocks"] : null), "payment_form", array(), "array")) . "</div>"));
            // line 166
            echo "
                ";
            // line 167
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["simple_blocks"]) ? $context["simple_blocks"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 168
                echo "                    ";
                $context["key_clear"] = $context["key"];
                // line 169
                echo "                    ";
                $context["key"] = (("{" . $context["key"]) . "}");
                // line 170
                echo "                    ";
                if ( !$this->getAttribute((isset($context["replace"]) ? $context["replace"] : null), $context["key"], array(), "array", true, true)) {
                    // line 171
                    echo "                        ";
                    $context["replace"] = twig_array_merge((isset($context["replace"]) ? $context["replace"] : null), array($context["key"] => (((("<div class=\"simplecheckout-block\" id=\"" . (isset($context["key_clear"]) ? $context["key_clear"] : null)) . "\">") . $context["value"]) . "</div>")));
                    // line 172
                    echo "                    ";
                }
                // line 173
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "
                ";
            // line 175
            echo twig_replace_filter((isset($context["simple_template"]) ? $context["simple_template"] : null), (isset($context["replace"]) ? $context["replace"] : null));
            echo "
                
                <div id=\"simplecheckout_bottom\" style=\"width:100%;height:1px;clear:both;\"></div>
                <div class=\"simplecheckout-proceed-payment\" id=\"simplecheckout_proceed_payment\" style=\"display:none;\">";
            // line 178
            echo (isset($context["text_proceed_payment"]) ? $context["text_proceed_payment"] : null);
            echo "</div>
                
                ";
            // line 180
            if ((isset($context["display_agreement_checkbox"]) ? $context["display_agreement_checkbox"] : null)) {
                // line 181
                echo "                    <div class=\"alert alert-danger simplecheckout-warning-block\" id=\"agreement_warning\" ";
                if (((isset($context["display_error"]) ? $context["display_error"] : null) && (isset($context["has_error"]) ? $context["has_error"] : null))) {
                    echo "data-error=\"true\"";
                } else {
                    echo "style=\"display:none;\"";
                }
                echo ">
                        <div class=\"agreement_all\">
                            ";
                // line 183
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["error_warning_agreement"]) ? $context["error_warning_agreement"] : null));
                foreach ($context['_seq'] as $context["agreement_id"] => $context["warning_agreement"]) {
                    // line 184
                    echo "                                <div class=\"agreement_";
                    echo $context["agreement_id"];
                    echo "\">";
                    echo $context["warning_agreement"];
                    echo "</div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['agreement_id'], $context['warning_agreement'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 186
                echo "                        </div>                    
                    </div>
                ";
            }
            // line 188
            echo "  

                <div class=\"simplecheckout-button-block buttons\" id=\"buttons\">
                    <div class=\"simplecheckout-button-right\">
                        ";
            // line 192
            if ((isset($context["display_agreement_checkbox"]) ? $context["display_agreement_checkbox"] : null)) {
                // line 193
                echo "                            <span id=\"agreement_checkbox\">
                                ";
                // line 194
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["text_agreements"]) ? $context["text_agreements"] : null));
                foreach ($context['_seq'] as $context["agreement_id"] => $context["text_agreement"]) {
                    // line 195
                    echo "                                    <div class=\"checkbox\"><label><input type=\"checkbox\" name=\"agreements[]\" value=\"";
                    echo $context["agreement_id"];
                    echo "\" ";
                    echo ((twig_in_filter($context["agreement_id"], (isset($context["agreements"]) ? $context["agreements"] : null))) ? ("checked=\"checked\"") : (""));
                    echo " />";
                    echo $context["text_agreement"];
                    echo "</label></div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['agreement_id'], $context['text_agreement'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 197
                echo "                            </span>
                        ";
            }
            // line 198
            echo "                
                        ";
            // line 199
            if (((isset($context["steps_count"]) ? $context["steps_count"] : null) > 1)) {
                // line 200
                echo "                        <a class=\"button btn-primary button_oc btn\" data-onclick=\"nextStep\" id=\"simplecheckout_button_next\"><span>";
                echo (isset($context["button_next"]) ? $context["button_next"] : null);
                echo "</span></a>
                        ";
            }
            // line 202
            echo "                        <a class=\"button btn-primary button_oc btn\" ";
            echo (((isset($context["block_order"]) ? $context["block_order"] : null)) ? ("disabled") : (""));
            echo " data-onclick=\"createOrder\" id=\"simplecheckout_button_confirm\"><span>";
            echo (isset($context["button_order"]) ? $context["button_order"] : null);
            echo "</span></a>
                    </div>
                    <div class=\"simplecheckout-button-left\">
                        ";
            // line 205
            if ((isset($context["display_back_button"]) ? $context["display_back_button"] : null)) {
                // line 206
                echo "                        <a class=\"button btn-primary button_oc btn\" data-onclick=\"backHistory\" id=\"simplecheckout_button_back\"><span>";
                echo (isset($context["button_back"]) ? $context["button_back"] : null);
                echo "</span></a>
                        ";
            }
            // line 208
            echo "                        ";
            if (((isset($context["steps_count"]) ? $context["steps_count"] : null) > 1)) {
                // line 209
                echo "                        <a class=\"button btn-primary button_oc btn\" data-onclick=\"previousStep\" id=\"simplecheckout_button_prev\"><span>";
                echo (isset($context["button_prev"]) ? $context["button_prev"] : null);
                echo "</span></a>
                        ";
            }
            // line 211
            echo "                    </div>
                </div>    

                ";
            // line 214
            if ((((isset($context["steps_count"]) ? $context["steps_count"] : null) > 1) && ((isset($context["menu_type"]) ? $context["menu_type"] : null) == "2"))) {
                // line 215
                echo "                    </div>
                ";
            }
            // line 217
            echo "                
                ";
            // line 218
            if ((((isset($context["steps_count"]) ? $context["steps_count"] : null) > 1) && ((isset($context["menu_type"]) ? $context["menu_type"] : null) == "2"))) {
                // line 219
                echo "                    <div id=\"simplecheckout_step_menu\" class=\"simplecheckout-vertical-menu simplecheckout-bottom-menu\">
                        ";
                // line 220
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["steps_count"]) ? $context["steps_count"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 221
                    echo "                            <div class=\"checkout-heading simple-step-vertical\" style=\"display:none\" data-onclick=\"gotoStep\" data-step=\"";
                    echo $context["i"];
                    echo "\"><h4 class=\"panel-title\">";
                    echo $this->getAttribute((isset($context["step_names"]) ? $context["step_names"] : null), ($context["i"] - 1), array(), "array");
                    echo "</h4></div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 223
                echo "                    </div>
                ";
            }
            // line 224
            echo "           
            
            ";
        } else {
            // line 227
            echo "                <div class=\"content\">";
            echo (isset($context["text_error"]) ? $context["text_error"] : null);
            echo "</div>
                <div style=\"display:none;\" id=\"simplecheckout_cart_total\">";
            // line 228
            echo (isset($context["cart_total"]) ? $context["cart_total"] : null);
            echo "</div>
                ";
            // line 229
            if ((isset($context["display_weight"]) ? $context["display_weight"] : null)) {
                // line 230
                echo "                    <div style=\"display:none;\" id=\"simplecheckout_cart_weight\">";
                echo (isset($context["weight"]) ? $context["weight"] : null);
                echo "</div>
                ";
            }
            // line 232
            echo "                <div class=\"simplecheckout-button-block buttons\">
                    <div class=\"simplecheckout-button-right right\"><a href=\"";
            // line 233
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"button btn-primary button_oc btn\"><span>";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</span></a></div>
                </div>
            ";
        }
        // line 236
        echo "        </div>
    </div>
";
        // line 238
        if ((( !(isset($context["ajax"]) ? $context["ajax"] : null) &&  !(isset($context["popup"]) ? $context["popup"] : null)) &&  !(isset($context["as_module"]) ? $context["as_module"] : null))) {
            // line 239
            echo "</div>
";
            // line 240
            $this->loadTemplate((isset($context["simple_footer"]) ? $context["simple_footer"] : null), "basecart/template/checkout/simplecheckout.twig", 240)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "basecart/template/checkout/simplecheckout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  578 => 240,  575 => 239,  573 => 238,  569 => 236,  561 => 233,  558 => 232,  552 => 230,  550 => 229,  546 => 228,  541 => 227,  536 => 224,  532 => 223,  521 => 221,  517 => 220,  514 => 219,  512 => 218,  509 => 217,  505 => 215,  503 => 214,  498 => 211,  492 => 209,  489 => 208,  483 => 206,  481 => 205,  472 => 202,  466 => 200,  464 => 199,  461 => 198,  457 => 197,  444 => 195,  440 => 194,  437 => 193,  435 => 192,  429 => 188,  424 => 186,  413 => 184,  409 => 183,  399 => 181,  397 => 180,  392 => 178,  386 => 175,  383 => 174,  377 => 173,  374 => 172,  371 => 171,  368 => 170,  365 => 169,  362 => 168,  358 => 167,  355 => 166,  353 => 163,  352 => 162,  351 => 161,  350 => 160,  349 => 159,  348 => 158,  347 => 157,  346 => 156,  345 => 155,  344 => 154,  343 => 153,  342 => 143,  339 => 141,  335 => 139,  333 => 138,  330 => 137,  327 => 136,  323 => 134,  317 => 133,  304 => 132,  300 => 131,  297 => 130,  293 => 128,  282 => 126,  278 => 125,  275 => 124,  272 => 123,  269 => 122,  267 => 121,  257 => 119,  248 => 113,  234 => 102,  224 => 95,  220 => 94,  213 => 90,  209 => 89,  205 => 88,  201 => 87,  197 => 86,  193 => 85,  189 => 84,  185 => 83,  181 => 82,  177 => 81,  173 => 80,  169 => 79,  165 => 78,  161 => 77,  157 => 76,  153 => 75,  149 => 74,  145 => 73,  141 => 72,  137 => 71,  133 => 70,  129 => 69,  124 => 67,  119 => 65,  114 => 63,  111 => 62,  108 => 61,  103 => 58,  86 => 43,  83 => 42,  66 => 27,  63 => 26,  52 => 18,  49 => 17,  46 => 16,  35 => 8,  32 => 7,  30 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if not ajax and not popup and not as_module %}*/
/* {% set simple_page = 'simpleedit' %}*/
/* {% set heading_title = heading_title  ~ (display_weight ? '&nbsp;(<span id="weight">' ~ weight  ~ '</span>)' : '') %}*/
/* {% include simple_header %}*/
/* <style>*/
/*     {% if left_column_width %}*/
/*         .simplecheckout-left-column {*/
/*             width: {{ left_column_width }}%;*/
/*         }*/
/*         @media only screen and (max-width:1024px) {*/
/*             .simplecheckout-left-column {*/
/*                 width: 100%;*/
/*             }*/
/*         }*/
/*     {% endif %}*/
/*     {% if right_column_width %}*/
/*         .simplecheckout-right-column {*/
/*             width: {{ right_column_width }}%;*/
/*         }*/
/*         @media only screen and (max-width:1024px) {*/
/*             .simplecheckout-right-column {*/
/*                 width: 100%;*/
/*             }*/
/*         }*/
/*     {% endif %}*/
/*     {% if customer_with_payment_address %}*/
/*         #simplecheckout_customer {*/
/*             margin-bottom: 0;*/
/*         }*/
/*         #simplecheckout_customer .simplecheckout-block-content {*/
/*             border-bottom-width: 0;*/
/*             padding-bottom: 0;*/
/*         }*/
/*         #simplecheckout_payment_address div.checkout-heading {*/
/*             display: none;*/
/*         }*/
/*         #simplecheckout_payment_address .simplecheckout-block-content {*/
/*             border-top-width: 0;*/
/*             padding-top: 0;*/
/*         }*/
/*     {% endif %}*/
/*     {% if customer_with_shipping_address %}*/
/*         #simplecheckout_customer {*/
/*             margin-bottom: 0;*/
/*         }*/
/*         #simplecheckout_customer .simplecheckout-block-content {*/
/*             border-bottom-width: 0;*/
/*             padding-bottom: 0;*/
/*         }*/
/*         #simplecheckout_shipping_address div.checkout-heading {*/
/*             display: none;*/
/*         }*/
/*         #simplecheckout_shipping_address .simplecheckout-block-content {*/
/*             border-top-width: 0;*/
/*             padding-top: 0;*/
/*         }*/
/*     {% endif %}*/
/* </style>*/
/* <div class="simple-content">*/
/* {% endif %}*/
/*     {% if not ajax or (ajax and popup) %}*/
/*     <script type="text/javascript">*/
/*         var startSimpleInterval_{{ group }} = window.setInterval(function(){*/
/*             if (typeof jQuery !== 'undefined' && typeof Simplecheckout === "function" && jQuery.isReady) {*/
/*                 window.clearInterval(startSimpleInterval_{{ group }});*/
/* */
/*                 var simplecheckout_{{ group }} = new Simplecheckout({*/
/*                     mainRoute: "checkout/simplecheckout",*/
/*                     additionalParams: "{{ additional_params }}",*/
/*                     additionalPath: "{{ additional_path }}",*/
/*                     mainUrl: "{{ action }}",*/
/*                     mainContainer: "#simplecheckout_form_{{ group }}",*/
/*                     currentTheme: "{{ current_theme }}",*/
/*                     loginBoxBefore: "{{ login_type == 'flat' ? '#simplecheckout_customer .simplecheckout-block-content:first' : '' }}",*/
/*                     displayProceedText: {{ display_proceed_text ? 1 : 0 }},*/
/*                     scrollToError: {{ scroll_to_error ? 1 : 0 }},*/
/*                     scrollToPaymentForm: {{ scroll_to_payment_form ? 1 : 0 }},*/
/*                     notificationDefault: {{ notification_default ? 1 : 0 }},*/
/*                     notificationToasts: {{ notification_toasts ? 1 : 0 }},*/
/*                     notificationCheckForm: {{ notification_check_form ? 1 : 0 }},*/
/*                     notificationCheckFormText: "{{ notification_check_form_text }}",*/
/*                     useAutocomplete: {{ use_autocomplete ? 1 : 0 }},*/
/*                     useGoogleApi: {{ use_google_api ? 1 : 0 }},*/
/*                     useStorage: {{ use_storage ? 1 : 0 }},*/
/*                     popup: {{ popup or as_module ? 1 : 0 }},*/
/*                     agreementCheckboxStep: {{ agreement_checkbox_step ? agreement_checkbox_step : '\'0\'' }},*/
/*                     enableAutoReloaingOfPaymentFrom: {{ enable_reloading_of_payment_form ? 1 : 0 }},*/
/*                     javascriptCallback: function() {try{ {{ javascript_callback }} } catch (e) {console.log(e)}},*/
/*                     stepButtons: {{ step_buttons }},*/
/*                     menuType: {{ menu_type ? menu_type : '1' }}*/
/*                 });*/
/* */
/*                 if (typeof toastr !== 'undefined') {*/
/*                     toastr.options.positionClass = "{{ notification_position ? notification_position : 'toast-top-right' }}";*/
/*                     toastr.options.timeOut = "{{ notification_timeout ? notification_timeout : '5000' }}";*/
/*                     toastr.options.progressBar = true;*/
/*                 }*/
/* */
/*                 $(document).ajaxComplete(function(e, xhr, settings) {*/
/*                     if (settings.url.indexOf("route=module/cart&remove") > 0 || (settings.url.indexOf("route=module/cart") > 0 && settings.type == "POST") || settings.url.indexOf("route=checkout/cart/add") > 0 || settings.url.indexOf("route=checkout/cart/remove") > 0) {*/
/*                         window.resetSimpleQuantity = true;*/
/*                         simplecheckout_{{ group }}.reloadAll();*/
/*                     }*/
/*                 });*/
/* */
/*                 $(document).ajaxSend(function(e, xhr, settings) {*/
/*                     if (settings.url.indexOf("checkout/simplecheckout&group") > 0 && typeof window.resetSimpleQuantity !== "undefined" && window.resetSimpleQuantity) {*/
/*                         settings.data = settings.data.replace(/quantity.+?&/g,"");*/
/*                         window.resetSimpleQuantity = false;*/
/*                     }*/
/*                 });*/
/* */
/*                 simplecheckout_{{ group }}.init();*/
/*                 */
/*             }*/
/*         },0);*/
/*     </script>*/
/*     {% endif %}*/
/*     <div id="simplecheckout_form_{{ group }}" {{ display_error and has_error ? 'data-error="true"' : '' }} {{ logged ? 'data-logged="true"' : '' }}>*/
/*         <div class="simplecheckout">*/
/*             {% if not cart_empty %}*/
/*                 {% if steps_count > 1 %}*/
/*                     {% if menu_type == '2' %}*/
/*                         <div id="simplecheckout_step_menu" class="simplecheckout-vertical-menu simplecheckout-top-menu">*/
/*                             {% for i in 1..steps_count %}*/
/*                                 <div class="checkout-heading simple-step-vertical" style="display:none" data-onclick="gotoStep" data-step="{{ i }}"><h4 class="panel-title">{{ step_names[i-1] }}</h4></div>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     {% else %}*/
/*                         <div id="simplecheckout_step_menu">*/
/*                             {% for i in 1..steps_count %}*/
/*                                 <span class="simple-step" data-onclick="gotoStep" data-step="{{ i }}">{{ step_names[i-1] }}</span>{% if i < steps_count %}<span class="simple-step-delimiter" data-step="{{ i+1 }}"><img src="{{ additional_path }}catalog/view/image/next_gray.png"></span>{% endif %}*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 {% endif %}*/
/* */
/*                 {% if steps_count > 1 and menu_type == '2' %}*/
/*                     <div class="simplecheckout-steps-wrapper">*/
/*                 {% endif %}*/
/* */
/*                 {%*/
/*                     set replace = {*/
/*                         '{three_column}'     : '<div class="simplecheckout-three-column">',*/
/*                         '{/three_column}'    : '</div>',*/
/*                         '{left_column}'      : '<div class="simplecheckout-left-column">',*/
/*                         '{/left_column}'     : '</div>',*/
/*                         '{right_column}'     : '<div class="simplecheckout-right-column">',*/
/*                         '{/right_column}'    : '</div>',*/
/*                         '{step}'             : '<div class="simplecheckout-step">',*/
/*                         '{/step}'            : '</div>',*/
/*                         '{clear_both}'       : '<div style="width:100%;clear:both;height:1px"></div>',*/
/*                         '{customer}'         : simple_blocks['customer'],*/
/*                         '{payment_address}'  : simple_blocks['payment_address'],*/
/*                         '{shipping_address}' : simple_blocks['shipping_address'],*/
/*                         '{cart}'             : simple_blocks['cart'],*/
/*                         '{shipping}'         : simple_blocks['shipping'],*/
/*                         '{payment}'          : simple_blocks['payment'],*/
/*                         '{agreement}'        : simple_blocks['agreement'],*/
/*                         '{help}'             : simple_blocks['help'],*/
/*                         '{summary}'          : simple_blocks['summary'],*/
/*                         '{comment}'          : simple_blocks['comment'],*/
/*                         '{payment_form}'     : '<div class="simplecheckout-block" id="simplecheckout_payment_form">' ~ simple_blocks['payment_form'] ~ '</div>'*/
/*                     }*/
/*                 %}*/
/* */
/*                 {% for key, value in simple_blocks %}*/
/*                     {% set key_clear = key %}*/
/*                     {% set key = '{' ~ key ~ '}' %}*/
/*                     {% if replace[key] is not defined %}*/
/*                         {% set replace = replace|merge({(key): '<div class="simplecheckout-block" id="' ~ key_clear ~ '">' ~ value ~ '</div>'}) %}*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/* */
/*                 {{ simple_template|replace(replace) }}*/
/*                 */
/*                 <div id="simplecheckout_bottom" style="width:100%;height:1px;clear:both;"></div>*/
/*                 <div class="simplecheckout-proceed-payment" id="simplecheckout_proceed_payment" style="display:none;">{{ text_proceed_payment }}</div>*/
/*                 */
/*                 {% if display_agreement_checkbox %}*/
/*                     <div class="alert alert-danger simplecheckout-warning-block" id="agreement_warning" {% if display_error and has_error %}data-error="true"{% else %}style="display:none;"{% endif %}>*/
/*                         <div class="agreement_all">*/
/*                             {% for agreement_id, warning_agreement in error_warning_agreement %}*/
/*                                 <div class="agreement_{{ agreement_id }}">{{ warning_agreement }}</div>*/
/*                             {% endfor %}*/
/*                         </div>                    */
/*                     </div>*/
/*                 {% endif %}  */
/* */
/*                 <div class="simplecheckout-button-block buttons" id="buttons">*/
/*                     <div class="simplecheckout-button-right">*/
/*                         {% if display_agreement_checkbox %}*/
/*                             <span id="agreement_checkbox">*/
/*                                 {% for agreement_id, text_agreement in text_agreements %}*/
/*                                     <div class="checkbox"><label><input type="checkbox" name="agreements[]" value="{{ agreement_id }}" {{ agreement_id in agreements ? 'checked="checked"' : '' }} />{{ text_agreement }}</label></div>*/
/*                                 {% endfor %}*/
/*                             </span>*/
/*                         {% endif %}                */
/*                         {% if steps_count > 1 %}*/
/*                         <a class="button btn-primary button_oc btn" data-onclick="nextStep" id="simplecheckout_button_next"><span>{{ button_next }}</span></a>*/
/*                         {% endif %}*/
/*                         <a class="button btn-primary button_oc btn" {{ block_order ? 'disabled' : ''}} data-onclick="createOrder" id="simplecheckout_button_confirm"><span>{{ button_order }}</span></a>*/
/*                     </div>*/
/*                     <div class="simplecheckout-button-left">*/
/*                         {% if display_back_button %}*/
/*                         <a class="button btn-primary button_oc btn" data-onclick="backHistory" id="simplecheckout_button_back"><span>{{ button_back }}</span></a>*/
/*                         {% endif %}*/
/*                         {% if steps_count > 1 %}*/
/*                         <a class="button btn-primary button_oc btn" data-onclick="previousStep" id="simplecheckout_button_prev"><span>{{ button_prev }}</span></a>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>    */
/* */
/*                 {% if steps_count > 1 and menu_type == '2' %}*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 */
/*                 {% if steps_count > 1 and menu_type == '2' %}*/
/*                     <div id="simplecheckout_step_menu" class="simplecheckout-vertical-menu simplecheckout-bottom-menu">*/
/*                         {% for i in 1..steps_count %}*/
/*                             <div class="checkout-heading simple-step-vertical" style="display:none" data-onclick="gotoStep" data-step="{{ i }}"><h4 class="panel-title">{{ step_names[i-1] }}</h4></div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 {% endif %}           */
/*             */
/*             {% else %}*/
/*                 <div class="content">{{ text_error }}</div>*/
/*                 <div style="display:none;" id="simplecheckout_cart_total">{{ cart_total }}</div>*/
/*                 {% if display_weight %}*/
/*                     <div style="display:none;" id="simplecheckout_cart_weight">{{ weight }}</div>*/
/*                 {% endif %}*/
/*                 <div class="simplecheckout-button-block buttons">*/
/*                     <div class="simplecheckout-button-right right"><a href="{{ continue }}" class="button btn-primary button_oc btn"><span>{{ button_continue }}</span></a></div>*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% if not ajax and not popup and not as_module %}*/
/* </div>*/
/* {% include simple_footer %}*/
/* {% endif %}*/
