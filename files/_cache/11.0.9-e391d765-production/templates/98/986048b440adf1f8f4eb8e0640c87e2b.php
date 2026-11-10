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

/* components/search/query_builder/sort/main.html.twig */
class __TwigTemplate_fd3a338311301e681ffca0ce4c285f7d extends Template
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
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 34
        yield "
";
        // line 35
        $context["idor_display_criteria"] = Session::getNewIDORToken(($context["itemtype"] ?? null));
        // line 36
        yield "
<div class=\"card card-sm sort-container\">
    <input type=\"hidden\" name=\"_idor_token\" value=\"";
        // line 38
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["idor_display_criteria"] ?? null), "html", null, true);
        yield "\" />
    <div class=\"list-group list-group-flush list-group-hoverable\" id=\"sort-criteria-list-";
        // line 39
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\">
        ";
        // line 40
        if ( !is_array((($_v0 = ($context["p"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["sort"] ?? null) : null))) {
            // line 41
            yield "            ";
            $context["p"] = Twig\Extension\CoreExtension::merge(($context["p"] ?? null), ["sort" => [(($_v1 =             // line 42
($context["p"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["sort"] ?? null) : null)]]);
            // line 44
            yield "        ";
        }
        // line 45
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys((($_v2 = ($context["p"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["sort"] ?? null) : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 46
            yield "            ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Search\\Input\\QueryBuilder::displaySortCriteria", [["itemtype" =>             // line 47
($context["itemtype"] ?? null), "num" =>             // line 48
$context["i"], "p" =>             // line 49
($context["p"] ?? null)]]), "html", null, true);
            // line 50
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 52
        yield "        <a id=\"more-criteria";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" role=\"button\" class=\"normalcriteria list-group-item p-2 b-0 d-none\"></a>
    </div>

    <div class=\"card-footer d-flex sort_actions\">
        <button id=\"addsort";
        // line 56
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" class=\"btn btn-sm btn-ghost-secondary me-1 add_sort\" type=\"button\">
            <i class=\"ti ti-square-plus\"></i>
            <span class=\"d-none d-sm-block\">";
        // line 58
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Add another sort"), "html", null, true);
        yield "</span>
        </button>

        <div class=\"btn-group ms-auto me-1\">
            <button class=\"btn btn-sm btn-primary trigger-sort\" type=\"button\" name=\"sort\">
                <i class=\"ti ti-arrows-sort\"></i>
                <span class=\"d-none d-sm-block\">";
        // line 64
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Sort"), "html", null, true);
        yield "</span>
            </button>

            <button class=\"btn btn-sm btn-icon px-2 sort-reset\" type=\"button\"
                data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\"
                title=\"";
        // line 69
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Reset sort"), "html", null, true);
        yield "\">
                <i class=\"ti ti-square-x\"></i>
            </a>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/search/query_builder/sort/main.html.twig";
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
        return array (  123 => 69,  115 => 64,  106 => 58,  101 => 56,  93 => 52,  85 => 50,  83 => 49,  82 => 48,  81 => 47,  79 => 46,  74 => 45,  71 => 44,  69 => 42,  67 => 41,  65 => 40,  61 => 39,  57 => 38,  53 => 36,  51 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/search/query_builder/sort/main.html.twig", "/var/www/glpi/templates/components/search/query_builder/sort/main.html.twig");
    }
}
