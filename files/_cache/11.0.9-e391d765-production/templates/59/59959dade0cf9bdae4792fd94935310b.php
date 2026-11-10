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

/* components/group/info_card.html.twig */
class __TwigTemplate_75dbfbb691714359337e4da01234a307 extends Template
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
<div class=\"p-0 group-info-card\">
   <div class=\"row\">
      <h4 class=\"card-title mb-1\">
         ";
        // line 36
        if ((($tmp = (($_v0 = ($context["group"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["id"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "            <a href=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Group", (($_v1 = ($context["group"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["id"] ?? null) : null)), "html", null, true);
            yield "\">";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = ($context["group"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["group_name"] ?? null) : null), "html", null, true);
            yield "</a>
         ";
        } else {
            // line 39
            yield "            ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = ($context["group"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["group_name"] ?? null) : null), "html", null, true);
            yield "
         ";
        }
        // line 41
        yield "      </h4>

      <div class=\"text-muted\">
         ";
        // line 44
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v4 = ($context["group"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["comment"] ?? null) : null)) > 0)) {
            // line 45
            yield "            <div>
               <i class=\"ti ti-notes\"></i>
               ";
            // line 47
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v5 = ($context["group"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["comment"] ?? null) : null), "html", null, true);
            yield "
            </div>
         ";
        }
        // line 50
        yield "      </div>
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
        return "components/group/info_card.html.twig";
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
        return array (  82 => 50,  76 => 47,  72 => 45,  70 => 44,  65 => 41,  59 => 39,  51 => 37,  49 => 36,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/group/info_card.html.twig", "/var/www/glpi/templates/components/group/info_card.html.twig");
    }
}
