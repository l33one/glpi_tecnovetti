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

/* @onetimesecret/link.html.twig */
class __TwigTemplate_a7e8e2c398556d1442611987c4626434 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@onetimesecret/link.html.twig", 31)->unwrap();
        // line 32
        $context["field_options"] = ["field_class" => "col-12"];
        // line 35
        echo "
<form name='documentitem_form";
        // line 36
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "' id='documentitem_form";
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "' method='post' action='";
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "'
    enctype=\"multipart/form-data\" class=\"d-flex flex-column\">
    <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\" />
    <input type='hidden' name='entities_id' value='";
        // line 39
        echo twig_escape_filter($this->env, ($context["entity"] ?? null), "html", null, true);
        echo "'>
    <input type='hidden' name='is_recursive' value='";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isRecursive", [], "any", false, false, false, 40), "html", null, true);
        echo "'>
    <input type='hidden' name='itemtype' value='";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "any", false, false, false, 41), "html", null, true);
        echo "'>
    <input type='hidden' name='items_id' value='";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "any", false, false, false, 42), "html", null, true);
        echo "'>
    <input type='hidden' name='tickets_id' value='";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "any", false, false, false, 43), "html", null, true);
        echo "'>

    <div class=\"mb-3\">
        <label class=\"col-form-label\">";
        // line 46
        echo twig_escape_filter($this->env, __("Create a secret", "onetimesecret"), "html", null, true);
        echo "</label>

        ";
        // line 48
        echo twig_call_macro($macros["fields"], "macro_passwordField", ["password", "", __("Secret", "onetimesecret"), twig_array_merge(        // line 52
($context["field_options"] ?? null), ["clearable" => false])], 48, $context, $this->getSourceContext());
        // line 53
        echo "

        ";
        // line 55
        echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["lifetime",         // line 57
($context["lifetime"] ?? null),         // line 58
($context["possible_values"] ?? null), __("Secret lifetime", "onetimesecret"),         // line 60
($context["field_options"] ?? null)], 55, $context, $this->getSourceContext());
        // line 61
        echo "

        <label class=\"col-form-label\">";
        // line 63
        echo twig_escape_filter($this->env, __("Optional parameter", "onetimesecret"), "html", null, true);
        echo "</label>

        ";
        // line 65
        echo twig_call_macro($macros["fields"], "macro_textField", ["passphrase", "", __("Passphrase", "onetimesecret"),         // line 69
($context["field_options"] ?? null)], 65, $context, $this->getSourceContext());
        // line 70
        echo "
    </div>

    <div class=\"d-flex justify-content-center card-footer mx-n3 mb-n3\">
        <div class=\"input-group\">
            <button type=\"submit\" name='add' class=\"btn\"
                style=\"background-color:#DD4A22;color:white;\">";
        // line 76
        echo twig_escape_filter($this->env, __("Send"), "html", null, true);
        echo "</button>
        </div>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "@onetimesecret/link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 76,  111 => 70,  109 => 69,  108 => 65,  103 => 63,  99 => 61,  97 => 60,  96 => 58,  95 => 57,  94 => 55,  90 => 53,  88 => 52,  87 => 48,  82 => 46,  76 => 43,  72 => 42,  68 => 41,  64 => 40,  60 => 39,  56 => 38,  47 => 36,  44 => 35,  42 => 32,  40 => 31,  37 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "@onetimesecret/link.html.twig", "/var/www/html/glpi/marketplace/onetimesecret/templates/link.html.twig");
    }
}
