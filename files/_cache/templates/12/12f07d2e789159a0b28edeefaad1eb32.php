<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @onetimesecret/config.html.twig */
class __TwigTemplate_1ec23ea5847a7e6df355399ab17b86d6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "
";
        // line 31
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@onetimesecret/config.html.twig", 31)->unwrap();
        // line 32
        $macros["buttons"] = $this->macros["buttons"] = $this->loadTemplate("components/form/buttons.html.twig", "@onetimesecret/config.html.twig", 32)->unwrap();
        // line 33
        echo "
";
        // line 34
        $context["no_header"] = ((array_key_exists("no_header", $context)) ? (_twig_default_filter(($context["no_header"] ?? null), ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 34) &&  !((twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 34)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", false, false, false, 34), false)) : (false))))) : (( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 34) &&  !((twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 34)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", false, false, false, 34), false)) : (false)))));
        // line 35
        $context["bg"] = "";
        // line 36
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 36)) {
            // line 37
            $context["bg"] = "asset-deleted";
        }
        // line 39
        echo "
<div class=\"asset ";
        // line 40
        echo twig_escape_filter($this->env, ($context["bg"] ?? null), "html", null, true);
        echo "\">

    ";
        // line 42
        echo twig_include($this->env, $context, "components/form/header.html.twig", ["in_twig" => true, "no_header" => true]);
        echo "
    ";
        // line 43
        $context["params"] = (($context["params"]) ?? ([]));
        // line 44
        echo "    ";
        $context["field_options"] = [];
        // line 45
        echo "
    <div class=\"card-body d-flex flex-wrap\">
        <div class=\"col-12 col-xxl-12 flex-column\">
            <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
                <div class=\"row flex-row align-items-start flex-grow-1\">
                    <div class=\"row flex-row\">
                        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\" />
                        <input type=\"hidden\" name=\"id\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 52)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null), "html", null, true);
        echo "\" />

                        ";
        // line 54
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isfield", ["server"], "method", false, false, false, 54)) {
            // line 55
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["server", (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,             // line 57
($context["item"] ?? null), "fields", [], "any", false, false, false, 57)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["server"] ?? null) : null), __("Server"),             // line 59
($context["field_options"] ?? null)], 55, $context, $this->getSourceContext());
            // line 60
            echo "
                        ";
        }
        // line 62
        echo "
                        ";
        // line 63
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isfield", ["email"], "method", false, false, false, 63)) {
            // line 64
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_textField", ["email", (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,             // line 66
($context["item"] ?? null), "fields", [], "any", false, false, false, 66)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["email"] ?? null) : null), __("Email"),             // line 68
($context["field_options"] ?? null)], 64, $context, $this->getSourceContext());
            // line 69
            echo "
                        ";
        }
        // line 71
        echo "
                        ";
        // line 72
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["apikey"], "method", false, false, false, 72)) {
            // line 73
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_passwordField", ["apikey", (($__internal_compile_3 = twig_get_attribute($this->env, $this->source,             // line 75
($context["item"] ?? null), "fields", [], "any", false, false, false, 75)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["apikey"] ?? null) : null), __("API key", "onetimesecret"),             // line 77
($context["field_options"] ?? null)], 73, $context, $this->getSourceContext());
            // line 78
            echo "
                        ";
        }
        // line 80
        echo "
                        <div class=\"hr-text\">
                            <i class=\"fa fa-stopwatch\"></i>
                            <span>";
        // line 83
        echo twig_escape_filter($this->env, __("Lifetime", "onetimesecret"), "html", null, true);
        echo "</span>
                        </div>

                        ";
        // line 86
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["lifetime"], "method", false, false, false, 86)) {
            // line 87
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["lifetime", (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,             // line 89
($context["item"] ?? null), "fields", [], "any", false, false, false, 89)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["lifetime"] ?? null) : null),             // line 90
($context["lifetimes"] ?? null), __("Secret lifetime", "onetimesecret"),             // line 92
($context["field_options"] ?? null)], 87, $context, $this->getSourceContext());
            // line 93
            echo "
                        ";
        }
        // line 95
        echo "
                    </div> ";
        // line 97
        echo "                </div> ";
        // line 98
        echo "            </div> ";
        // line 99
        echo "        </div> ";
        // line 100
        echo "    </div> ";
        // line 101
        echo "
    ";
        // line 102
        echo twig_include($this->env, $context, "components/form/buttons.html.twig");
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "@onetimesecret/config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 102,  163 => 101,  161 => 100,  159 => 99,  157 => 98,  155 => 97,  152 => 95,  148 => 93,  146 => 92,  145 => 90,  144 => 89,  142 => 87,  140 => 86,  134 => 83,  129 => 80,  125 => 78,  123 => 77,  122 => 75,  120 => 73,  118 => 72,  115 => 71,  111 => 69,  109 => 68,  108 => 66,  106 => 64,  104 => 63,  101 => 62,  97 => 60,  95 => 59,  94 => 57,  92 => 55,  90 => 54,  85 => 52,  81 => 51,  73 => 45,  70 => 44,  68 => 43,  64 => 42,  59 => 40,  56 => 39,  53 => 37,  51 => 36,  49 => 35,  47 => 34,  44 => 33,  42 => 32,  40 => 31,  37 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "@onetimesecret/config.html.twig", "/var/www/html/glpi/marketplace/onetimesecret/templates/config.html.twig");
    }
}
