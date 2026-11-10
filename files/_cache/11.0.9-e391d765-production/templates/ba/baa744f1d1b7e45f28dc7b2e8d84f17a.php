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

/* components/search/query_builder/search_option.html.twig */
class __TwigTemplate_0d223d21b8c0f465690ef00b1cca39d1 extends Template
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
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 36
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["actions"] ?? null)) > 0)) {
            // line 37
            yield "   ";
            $context["searchtype_name"] = ((((($context["fieldname"] ?? null) . ($context["prefix"] ?? null)) . "[") . ($context["num"] ?? null)) . "][searchtype]");
            // line 38
            yield "   <div class=\"col-auto\">
      ";
            // line 39
            yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 39, $this->getSourceContext())->macro_dropdownArrayField(...[($context["searchtype_name"] ?? null), ($context["searchtype"] ?? null), ($context["actions"] ?? null), "", ["rand" =>             // line 40
($context["rand"] ?? null), "full_width" => true, "input_class" => "col-12", "no_label" => true, "mb" => "mb-0"]]);
            // line 45
            yield "
   </div>
";
        }
        // line 48
        yield "
<div class=\"col-auto\" id=\"";
        // line 49
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["dropdownname"] ?? null), "html", null, true);
        yield "\" data-itemtype=\"";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemtype"] ?? null), "html", null, true);
        yield "\" data-fieldname=\"";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["fieldname"] ?? null), "html", null, true);
        yield "\" data-prefix=\"";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["prefix"] ?? null), "html", null, true);
        yield "\" data-num=\"";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["num"] ?? null), "html", null, true);
        yield "\">
   ";
        // line 50
        $context["params"] = ["value" =>         // line 51
($context["value"] ?? null), "searchopt" =>         // line 52
($context["searchopt"] ?? null), "searchtype" =>         // line 53
($context["searchtype"] ?? null), "num" =>         // line 54
($context["num"] ?? null), "itemtype" =>         // line 55
($context["itemtype"] ?? null), "_idor_token" => Session::getNewIDORToken(        // line 56
($context["itemtype"] ?? null)), "from_meta" => ((        // line 57
array_key_exists("from_meta", $context)) ? (($context["from_meta"] ?? null)) : (false)), "prefix" =>         // line 58
($context["prefix"] ?? null), "p" =>         // line 59
($context["p"] ?? null)];
        // line 61
        yield "   ";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Search\\Input\\QueryBuilder::displaySearchoptionValue", [($context["params"] ?? null)]), "html", null, true);
        yield "
</div>

";
        // line 64
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["actions"] ?? null)) > 0)) {
            // line 65
            yield "    ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::updateItemOnSelectEvent", [(("dropdown_" .             // line 66
($context["searchtype_name"] ?? null)) . ($context["rand"] ?? null)),             // line 67
($context["dropdownname"] ?? null), ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc") . "/ajax/search.php"), Twig\Extension\CoreExtension::merge(            // line 69
($context["params"] ?? null), ["action" => "display_searchoption_value", "searchtype" => "__VALUE__"])]);
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/search/query_builder/search_option.html.twig";
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
        return array (  108 => 69,  107 => 67,  106 => 66,  104 => 65,  102 => 64,  95 => 61,  93 => 59,  92 => 58,  91 => 57,  90 => 56,  89 => 55,  88 => 54,  87 => 53,  86 => 52,  85 => 51,  84 => 50,  72 => 49,  69 => 48,  64 => 45,  62 => 40,  61 => 39,  58 => 38,  55 => 37,  53 => 36,  51 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/search/query_builder/search_option.html.twig", "/var/www/glpi/templates/components/search/query_builder/search_option.html.twig");
    }
}
