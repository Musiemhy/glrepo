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

/* components/search/displaypreference_modal.html.twig */
class __TwigTemplate_a3b79789ef2c135b1af7d401cdce0172 extends Template
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
        $context["rand"] = ((array_key_exists("rand", $context)) ? (Twig\Extension\CoreExtension::default(($context["rand"] ?? null), Twig\Extension\CoreExtension::random($this->env->getCharset()))) : (Twig\Extension\CoreExtension::random($this->env->getCharset())));
        // line 34
        yield "
<div id=\"displaypreference_modal";
        // line 35
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" class=\"modal fade\" role=\"dialog\">
   <div class=\"modal-dialog modal-lg\">
      <div class=\"modal-content\">
         <div class=\"modal-header\">
            ";
        // line 39
        $context["header"] = __("Select default items to show");
        // line 40
        yield "            ";
        if ((($context["itemtype"] ?? null) != "__VALUE__")) {
            // line 41
            yield "               ";
            $context["header"] = ((($context["header"] ?? null) . " - ") . $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName(($context["itemtype"] ?? null)));
            // line 42
            yield "            ";
        }
        // line 43
        yield "            <h4 class=\"modal-title\">";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["header"] ?? null), "html", null, true);
        yield "</h4>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 44
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close"), "html", null, true);
        yield "\"></button>
         </div>
         <div class=\"modal-body\">
            <div class=\"ratio ratio-1x1\">
               <iframe data-testid=\"display-preference-iframe\" src=\"";
        // line 48
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(("/front/displaypreference.form.php?itemtype=" . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemtype"] ?? null), "url"))), "html", null, true);
        yield "\"></iframe>
            </div>
         </div>
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
        return "components/search/displaypreference_modal.html.twig";
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
        return array (  81 => 48,  74 => 44,  69 => 43,  66 => 42,  63 => 41,  60 => 40,  58 => 39,  51 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/search/displaypreference_modal.html.twig", "/var/www/glpi/templates/components/search/displaypreference_modal.html.twig");
    }
}
