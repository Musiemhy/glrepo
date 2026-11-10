<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* components/itilobject/fields/priority_matrix.html.twig */
class __TwigTemplate_13f2c54ff7c630afb1610726dd03b942 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "
";
        // line 33
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 33)->unwrap();
        // line 34
        yield "
";
        // line 35
        $context["urgency_options"] = Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["disabled" => (!((($tmp =         // line 36
($context["canupdate"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["can_requester"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)))]);
        // line 38
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 38), "isMandatoryField", ["urgency"], "method", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "   ";
            $context["urgency_options"] = Twig\Extension\CoreExtension::merge(($context["urgency_options"] ?? null), ["required" => true]);
        }
        // line 43
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 43), "isReadonlyField", ["urgency"], "method", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "   ";
            $context["urgency_options"] = Twig\Extension\CoreExtension::merge(($context["urgency_options"] ?? null), ["readonly" => true]);
        }
        // line 48
        yield "
";
        // line 49
        yield (string) $macros["fields"]->getTemplateForMacro("macro_field", $context, 49, $this->getSourceContext())->macro_field(...["urgency", CoreExtension::getAttribute($this->env, $this->source,         // line 51
($context["item"] ?? null), "dropdownUrgency", [Twig\Extension\CoreExtension::merge(["value" => (($_v0 = CoreExtension::getAttribute($this->env, $this->source,         // line 52
($context["item"] ?? null), "fields", [], "any", false, false, false, 52)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["urgency"] ?? null) : null), "width" => "100%", "display" => false, "rand" => CoreExtension::getAttribute($this->env, $this->source,         // line 55
($context["field_options"] ?? null), "rand", [], "any", false, false, false, 55)],         // line 56
($context["urgency_options"] ?? null))], "method", false, false, false, 51), __("Urgency"), Twig\Extension\CoreExtension::merge(        // line 58
($context["field_options"] ?? null), ["id" => ("dropdown_urgency" . CoreExtension::getAttribute($this->env, $this->source,         // line 59
($context["field_options"] ?? null), "rand", [], "any", false, false, false, 59))])]);
        // line 61
        yield "

";
        // line 63
        $context["impact_options"] = ($context["field_options"] ?? null);
        // line 64
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 64), "isMandatoryField", ["impact"], "method", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 65
            yield "   ";
            $context["impact_options"] = Twig\Extension\CoreExtension::merge(($context["impact_options"] ?? null), ["required" => true]);
        }
        // line 69
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 69), "isReadonlyField", ["impact"], "method", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 70
            yield "   ";
            $context["impact_options"] = Twig\Extension\CoreExtension::merge(($context["impact_options"] ?? null), ["readonly" => true]);
        }
        // line 74
        yield "
";
        // line 75
        yield (string) $macros["fields"]->getTemplateForMacro("macro_field", $context, 75, $this->getSourceContext())->macro_field(...["impact", CoreExtension::getAttribute($this->env, $this->source,         // line 77
($context["item"] ?? null), "dropdownImpact", [Twig\Extension\CoreExtension::merge(["value" => (($_v1 = CoreExtension::getAttribute($this->env, $this->source,         // line 78
($context["item"] ?? null), "fields", [], "any", false, false, false, 78)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["impact"] ?? null) : null), "width" => "100%", "display" => false, "rand" => CoreExtension::getAttribute($this->env, $this->source,         // line 81
($context["field_options"] ?? null), "rand", [], "any", false, false, false, 81)],         // line 82
($context["impact_options"] ?? null))], "method", false, false, false, 77), __("Impact"), Twig\Extension\CoreExtension::merge(        // line 84
($context["field_options"] ?? null), ["id" => ("dropdown_impact" . CoreExtension::getAttribute($this->env, $this->source,         // line 85
($context["field_options"] ?? null), "rand", [], "any", false, false, false, 85))])]);
        // line 87
        yield "

";
        // line 89
        $context["priority_options"] = Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["disabled" => (!(($tmp =         // line 90
($context["canpriority"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)), "withmajor" => true]);
        // line 93
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 93), "isMandatoryField", ["priority"], "method", false, false, false, 93)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 94
            yield "   ";
            $context["priority_options"] = Twig\Extension\CoreExtension::merge(($context["priority_options"] ?? null), ["required" => true]);
        }
        // line 98
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 98), "isReadonlyField", ["priority"], "method", false, false, false, 98)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 99
            yield "   ";
            $context["priority_options"] = Twig\Extension\CoreExtension::merge(($context["priority_options"] ?? null), ["readonly" => true]);
        }
        // line 103
        yield "
";
        // line 104
        yield (string) $macros["fields"]->getTemplateForMacro("macro_field", $context, 104, $this->getSourceContext())->macro_field(...["priority", CoreExtension::getAttribute($this->env, $this->source,         // line 106
($context["item"] ?? null), "dropdownPriority", [Twig\Extension\CoreExtension::merge(["value" => (($_v2 = CoreExtension::getAttribute($this->env, $this->source,         // line 107
($context["item"] ?? null), "fields", [], "any", false, false, false, 107)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["priority"] ?? null) : null), "width" => "100%", "display" => false, "rand" => CoreExtension::getAttribute($this->env, $this->source,         // line 110
($context["field_options"] ?? null), "rand", [], "any", false, false, false, 110)], Twig\Extension\CoreExtension::merge(        // line 111
($context["field_options"] ?? null), ($context["priority_options"] ?? null)))], "method", false, false, false, 106), __("Priority"), Twig\Extension\CoreExtension::merge(        // line 113
($context["field_options"] ?? null), ["id" => ("dropdown_priority" . CoreExtension::getAttribute($this->env, $this->source,         // line 114
($context["field_options"] ?? null), "rand", [], "any", false, false, false, 114))])]);
        // line 116
        yield "

<script type=\"text/javascript\">
\$(function() {
   \$(\x27#dropdown_urgency";
        // line 120
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "rand", [], "any", false, false, false, 120), "html", null, true);
        yield ", #dropdown_impact";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "rand", [], "any", false, false, false, 120), "html", null, true);
        yield "\x27).on(\x27change.select2\x27, function (e) {
      \$.ajax({
         url: `\${CFG_GLPI.root_doc}/ajax/priority.php`,
         datatype: \x27json\x27,
         data: {
            \x27urgency\x27: \$(\x27#dropdown_urgency";
        // line 125
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "rand", [], "any", false, false, false, 125), "html", null, true);
        yield "\x27).select2(\x27data\x27) ? \$(\x27#dropdown_urgency";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "rand", [], "any", false, false, false, 125), "html", null, true);
        yield "\x27).select2(\x27data\x27)[0].id : 0,
            \x27impact\x27:  \$(\x27#dropdown_impact";
        // line 126
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "rand", [], "any", false, false, false, 126), "html", null, true);
        yield "\x27).select2(\x27data\x27) ? \$(\x27#dropdown_impact";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "rand", [], "any", false, false, false, 126), "html", null, true);
        yield "\x27).select2(\x27data\x27)[0].id : 0,
            \x27_predefined_fields\x27:  \$(\x27input[name=\"_predefined_fields\"]\x27).val(),
            \x27getJson\x27: true,
         }
      }).done(function(data) {
         \$(\x27#dropdown_priority";
        // line 131
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "rand", [], "any", false, false, false, 131), "html", null, true);
        yield "\x27).val(data.priority);
         \$(\x27#dropdown_priority";
        // line 132
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "rand", [], "any", false, false, false, 132), "html", null, true);
        yield "\x27).trigger(\x27change\x27);
      });
   })
});
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/fields/priority_matrix.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  172 => 132,  168 => 131,  158 => 126,  152 => 125,  142 => 120,  136 => 116,  134 => 114,  133 => 113,  132 => 111,  131 => 110,  130 => 107,  129 => 106,  128 => 104,  125 => 103,  121 => 99,  119 => 98,  115 => 94,  113 => 93,  111 => 90,  110 => 89,  106 => 87,  104 => 85,  103 => 84,  102 => 82,  101 => 81,  100 => 78,  99 => 77,  98 => 75,  95 => 74,  91 => 70,  89 => 69,  85 => 65,  83 => 64,  81 => 63,  77 => 61,  75 => 59,  74 => 58,  73 => 56,  72 => 55,  71 => 52,  70 => 51,  69 => 49,  66 => 48,  62 => 44,  60 => 43,  56 => 39,  54 => 38,  52 => 36,  51 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/fields/priority_matrix.html.twig", "/var/www/glpi/templates/components/itilobject/fields/priority_matrix.html.twig");
    }
}
