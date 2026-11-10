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

/* @escalade/escalade_form.html.twig */
class __TwigTemplate_45536b79a1fcae9d2743bfe8b2289a61 extends Template
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

        $this->blocks = [
            'timeline_card' => [$this, 'block_timeline_card'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 29
        return "components/itilobject/timeline/form_timeline_item.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 30
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 30)->unwrap();
        // line 29
        $this->parent = $this->load("components/itilobject/timeline/form_timeline_item.html.twig", 29);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_timeline_card(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 33
        yield "    <div class=\"escalation card mt-4 \">
        <form name=\"asset_form\" id=\"asset_form\" class=\"d-flex flex-column escalation-form bg-white\" method=\"post\"
              action=\"";
        // line 35
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["action"] ?? null), "html", null, true);
        yield "\"
              enctype=\"multipart/form-data\"
              data-track-changes=\"true\" data-submit-once>

            <input type=\"hidden\" name=\"tickets_id\" value=\"";
        // line 39
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["ticket"] ?? null), "getID", [], "method", false, false, false, 39), "html", null, true);
        yield "\" />
            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 40
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\" />

            <div class=\"escalation card-header\">
                <h3 class=\"card-title\"> ";
        // line 43
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Escalate ticket", "escalade"), "html", null, true);
        yield "</h3>
            </div>
            <div class=\"escalation card-body\">
                ";
        // line 46
        yield (string) $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 46, $this->getSourceContext())->macro_textareaField(...["comment", "", __("Comment", "escalade"), ["full_width" => true, "required" => true, "label" => true, "is_horizontal" => false, "enable_richtext" => true, "enable_fileupload" => false, "enable_mentions" => true, "rand" =>         // line 58
($context["rand"] ?? null)]]);
        // line 60
        yield "
                <div class=\"form-field col-12 mt-2\">
                    ";
        // line 62
        yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 62, $this->getSourceContext())->macro_dropdownField(...["Group", "groups_id", "", $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Group"), ["label_class" => "col-auto", "input_class" => "col-12", "field_class" => "col-12 mr-0 ", "full_width" => true, "required" => true, "icon_label" => true, "entity" => (($_v0 = CoreExtension::getAttribute($this->env, $this->source,         // line 74
($context["ticket"] ?? null), "fields", [], "any", false, false, false, 74)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["entities_id"] ?? null) : null), "condition" =>         // line 75
($context["condition"] ?? null), "value" => 0, "used" =>         // line 77
($context["assigned_groups"] ?? null), "rand" =>         // line 78
($context["rand"] ?? null)]]);
        // line 80
        yield "
                </div>
                ";
        // line 82
        yield (string) $macros["fields"]->getTemplateForMacro("macro_checkboxField", $context, 82, $this->getSourceContext())->macro_checkboxField(...["is_observer_checkbox",         // line 84
($context["assign_me_as_observer"] ?? null), __("Assign me as an observer", "escalade"), ["field_class" => "col-12", "label_class" => "col-auto", "input_class" => "col-auto"]]);
        // line 91
        yield "
            </div>
            <div class=\"escalation d-flex card-footer justify-content-center\">
                <div class=\"input-group justify-content-center\">
                    <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"escalate\">
                        <i class=\"fas fa-plus\"></i>
                        <span>";
        // line 97
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
        yield "</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <script>
        \$(document).ready(function () {
            var form = \$(\x27#itil-form\x27);
            var inputs = form.serializeArray();
            var asset_form = \$(\x27#asset_form\x27);

            if (asset_form.length > 0) {
                \$.each(inputs, function(i, input) {
                    if (input.name != \x27_actors\x27) {
                        asset_form.append(\x27<input type=\"hidden\" name=\"ticket_details[\x27 + input.name + \x27]\" value=\"\x27 + input.value + \x27\">\x27);
                    }
                });
            }
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
        return "@escalade/escalade_form.html.twig";
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
        return array (  117 => 97,  109 => 91,  107 => 84,  106 => 82,  102 => 80,  100 => 78,  99 => 77,  98 => 75,  97 => 74,  96 => 62,  92 => 60,  90 => 58,  89 => 46,  83 => 43,  77 => 40,  73 => 39,  66 => 35,  62 => 33,  55 => 32,  50 => 29,  48 => 30,  41 => 29,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@escalade/escalade_form.html.twig", "/var/www/glpi/marketplace/escalade/templates/escalade_form.html.twig");
    }
}
