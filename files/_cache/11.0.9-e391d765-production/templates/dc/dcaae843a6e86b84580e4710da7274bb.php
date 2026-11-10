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

/* __string_template__0bc8cc32591c9958681bfd8ee6d1cc15 */
class __TwigTemplate_15e775981811361e3c8043f7d7432c7d extends Template
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
        // line 1
        yield "            ";
        if ((($tmp = ($context["mini"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "                <div class=\x27card mb-4 d-none d-md-block dashboard-card\x27>
                    <div class=\x27card-body p-2\x27>
            ";
        }
        // line 5
        yield "            <div class=\"dashboard ";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["embed_class"] ?? null), "html", null, true);
        yield " ";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["mini_class"] ?? null), "html", null, true);
        yield "\" id=\"dashboard-";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\">
                <span class=\x27glpi_logo\x27></span>
                ";
        // line 7
        yield (string) ($context["toolbars"] ?? null);
        yield "
                ";
        // line 8
        yield (string) ($context["filters"] ?? null);
        yield "
                <div class=\"grid-stack grid-stack-";
        // line 9
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["grid_cols"] ?? null), "html", null, true);
        yield "\"
                id=\"grid-stack-";
        // line 10
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\"
                gs-column=\"";
        // line 11
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["grid_cols"] ?? null), "html", null, true);
        yield "\"
                gs-min-row=\"";
        // line 12
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["grid_rows"] ?? null), "html", null, true);
        yield "\"
                style=\"width: 100%; --gs-col-count: ";
        // line 13
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["grid_cols"] ?? null), "html", null, true);
        yield "; --gs-row-count: ";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["grid_rows"] ?? null), "html", null, true);
        yield "; --gs-cell-margin: ";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cell_margin"] ?? null), "html", null, true);
        yield "px;\">
                    ";
        // line 14
        yield (string) ($context["grid_guide"] ?? null);
        yield "
                    ";
        // line 15
        yield (string) ($context["gridstack_items"] ?? null);
        yield "
                </div>
            </div>
            ";
        // line 18
        if ((($tmp = ($context["mini"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "                    </div>
                </div>
            ";
        }
        // line 22
        yield "            <script type=\"module\">
                import(\x27/js/modules/Dashboard/Dashboard.js\x27).then((m) => {
                    new m.GLPIDashboard(";
        // line 24
        yield (string) json_encode(($context["js_params"] ?? null));
        yield ");
                });
            </script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__0bc8cc32591c9958681bfd8ee6d1cc15";
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
        return array (  114 => 24,  110 => 22,  105 => 19,  103 => 18,  97 => 15,  93 => 14,  85 => 13,  81 => 12,  77 => 11,  73 => 10,  69 => 9,  65 => 8,  61 => 7,  51 => 5,  46 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__0bc8cc32591c9958681bfd8ee6d1cc15", "");
    }
}
