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

/* @formcreator/field/glpiselectfield.html.twig */
class __TwigTemplate_0c5559da123ffce5dc98285098753a68 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'questionFields' => [$this, 'block_questionFields'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 30
        return "@formcreator/pages/question.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@formcreator/field/glpiselectfield.html.twig", 31)->unwrap();
        // line 32
        $macros["formcreatorFields"] = $this->macros["formcreatorFields"] = $this->loadTemplate("@formcreator/components/form/fields_macros.html.twig", "@formcreator/field/glpiselectfield.html.twig", 32)->unwrap();
        // line 30
        $this->parent = $this->loadTemplate("@formcreator/pages/question.html.twig", "@formcreator/field/glpiselectfield.html.twig", 30);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 34
    public function block_questionFields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "    ";
        echo twig_call_macro($macros["formcreatorFields"], "macro_dropdownObjectSubType", ["itemtype", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,         // line 37
($context["item"] ?? null), "fields", [], "any", false, false, false, 37)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["itemtype"] ?? null) : null), _n("GLPI object", "GLPI objects", 1, "formcreator"), ["on_change" => "plugin_formcreator.changeQuestionType(this)", "label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 35, $context, $this->getSourceContext());
        // line 44
        echo "

    ";
        // line 46
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["required", (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,         // line 48
($context["item"] ?? null), "fields", [], "any", false, false, false, 48)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["required"] ?? null) : null), __("Required", "formcreator"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 46, $context, $this->getSourceContext());
        // line 53
        echo "

    ";
        // line 55
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["show_empty", (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,         // line 57
($context["item"] ?? null), "fields", [], "any", false, false, false, 57)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["show_empty"] ?? null) : null), __("Show empty", "formcreator"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 55, $context, $this->getSourceContext());
        // line 62
        echo "

    ";
        // line 64
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 64), "itemtype", [], "array", true, true, false, 64) && ((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 64)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["itemtype"] ?? null) : null) != "0"))) {
            // line 65
            echo "        ";
            $context["to_add"] = [];
            // line 66
            echo "        ";
            if (((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 66)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["itemtype"] ?? null) : null) == "Entity")) {
                // line 67
                echo "            ";
                $context["default_values"] = ((((($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 67)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["default_values"] ?? null) : null) == "")) ? ( -1) : ((($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 67)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["default_values"] ?? null) : null)));
                // line 68
                echo "            ";
                $context["to_add"] = ["-1" => twig_constant("Dropdown::EMPTY_VALUE")];
                // line 71
                echo "        ";
            }
            // line 72
            echo "        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [(($__internal_compile_7 = twig_get_attribute($this->env, $this->source,             // line 73
($context["item"] ?? null), "fields", [], "any", false, false, false, 73)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["itemtype"] ?? null) : null), "default_values", (($__internal_compile_8 = twig_get_attribute($this->env, $this->source,             // line 75
($context["item"] ?? null), "fields", [], "any", false, false, false, 75)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["_default_values"] ?? null) : null), __("Default values"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8", "toadd" =>             // line 79
($context["to_add"] ?? null)]], 72, $context, $this->getSourceContext());
            // line 81
            echo "
    ";
        } else {
            // line 83
            echo "        ";
            echo twig_call_macro($macros["fields"], "macro_nullField", [["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 83, $context, $this->getSourceContext());
            // line 86
            echo "
    ";
        }
        // line 88
        echo "
     ";
        // line 89
        echo twig_call_macro($macros["fields"], "macro_nullField", [["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 89, $context, $this->getSourceContext());
        // line 92
        echo "

    ";
        // line 95
        echo "    ";
        if (((($__internal_compile_9 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 95)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["_is_tree"] ?? null) : null) == "1")) {
            // line 96
            echo "        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", [(($__internal_compile_10 = twig_get_attribute($this->env, $this->source,             // line 97
($context["item"] ?? null), "fields", [], "any", false, false, false, 97)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["itemtype"] ?? null) : null), "show_tree_root", (($__internal_compile_11 = twig_get_attribute($this->env, $this->source,             // line 99
($context["item"] ?? null), "fields", [], "any", false, false, false, 99)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["_tree_root"] ?? null) : null), __("Subtree root", "formcreator"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 96, $context, $this->getSourceContext());
            // line 104
            echo "

        ";
            // line 106
            echo twig_call_macro($macros["fields"], "macro_numberField", ["show_tree_depth", (($__internal_compile_12 = twig_get_attribute($this->env, $this->source,             // line 108
($context["item"] ?? null), "fields", [], "any", false, false, false, 108)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["_tree_max_depth"] ?? null) : null), __("Limit subtree depth", "formcreator"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 106, $context, $this->getSourceContext());
            // line 113
            echo "

        ";
            // line 115
            echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["selectable_tree_root", (($__internal_compile_13 = twig_get_attribute($this->env, $this->source,             // line 117
($context["item"] ?? null), "fields", [], "any", false, false, false, 117)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["_tree_root_selectable"] ?? null) : null), __("Selectable root", "formcreator"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 115, $context, $this->getSourceContext());
            // line 122
            echo "

        ";
            // line 124
            echo twig_call_macro($macros["fields"], "macro_nullField", [["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 124, $context, $this->getSourceContext());
            // line 127
            echo "
    ";
        }
        // line 129
        echo "
    ";
        // line 130
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 130), "itemtype", [], "array", true, true, false, 130) && ((($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 130)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["_is_entity_restrict"] ?? null) : null) == "1"))) {
            // line 131
            echo "        ";
            echo twig_call_macro($macros["formcreatorFields"], "macro_dropdownEntityRestrict", ["entity_restrict", (($__internal_compile_15 = twig_get_attribute($this->env, $this->source,             // line 133
($context["item"] ?? null), "fields", [], "any", false, false, false, 133)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["_entity_restrict"] ?? null) : null), __("Entity restriction", "formcreator"), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 131, $context, $this->getSourceContext());
            // line 138
            echo "

        ";
            // line 140
            echo twig_call_macro($macros["fields"], "macro_nullField", [["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]], 140, $context, $this->getSourceContext());
            // line 143
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "@formcreator/field/glpiselectfield.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 143,  165 => 140,  161 => 138,  159 => 133,  157 => 131,  155 => 130,  152 => 129,  148 => 127,  146 => 124,  142 => 122,  140 => 117,  139 => 115,  135 => 113,  133 => 108,  132 => 106,  128 => 104,  126 => 99,  125 => 97,  123 => 96,  120 => 95,  116 => 92,  114 => 89,  111 => 88,  107 => 86,  104 => 83,  100 => 81,  98 => 79,  97 => 75,  96 => 73,  94 => 72,  91 => 71,  88 => 68,  85 => 67,  82 => 66,  79 => 65,  77 => 64,  73 => 62,  71 => 57,  70 => 55,  66 => 53,  64 => 48,  63 => 46,  59 => 44,  57 => 37,  55 => 35,  51 => 34,  46 => 30,  44 => 32,  42 => 31,  35 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "@formcreator/field/glpiselectfield.html.twig", "/var/www/html/glpi/marketplace/formcreator/templates/field/glpiselectfield.html.twig");
    }
}
