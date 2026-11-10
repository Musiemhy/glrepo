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

/* @moreticket/closeticket_solution_form.html.twig */
class __TwigTemplate_f97b1e6402f6ffe38a829bd442255575 extends Template
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
        // line 27
        yield "
<div class=\"spaced\" id=\"moreticket_close_ticket\">
    <br>
    <table>
        <tr>
            <td>
                ";
        // line 33
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["solution_template_label"] ?? null), "html", null, true);
        yield "&nbsp;:&nbsp;&nbsp;
                ";
        // line 34
        yield (string) ($context["solution_template_dropdown"] ?? null);
        yield "
                ";
        // line 35
        yield (string) ($context["render_twig_hidden"] ?? null);
        yield "
                ";
        // line 36
        yield (string) ($context["script_block"] ?? null);
        yield "
            </td>
        </tr>

        <tr>
            <td>
                ";
        // line 42
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["solution_type_label"] ?? null), "html", null, true);
        yield "
                ";
        // line 43
        if ((($tmp = ($context["solution_type_mandatory"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "&nbsp;:&nbsp;<span class=\"text-danger\">*</span>&nbsp;";
        }
        // line 44
        yield "                ";
        yield (string) ($context["solution_type_dropdown"] ?? null);
        yield "
            </td>
        </tr>

        <tr>
            <td>
                ";
        // line 50
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["solution_desc_label"] ?? null), "html", null, true);
        yield "&nbsp;:&nbsp;<span class=\"text-danger\">*</span>&nbsp;
                ";
        // line 51
        yield (string) ($context["solution_editor"] ?? null);
        yield "
            </td>
        </tr>

        ";
        // line 55
        if ((($tmp = ($context["use_duration_solution"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 56
            yield "            <tr>
                <td>
                    ";
            // line 58
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Duration"), "html", null, true);
            yield "
                    ";
            // line 59
            if ((($tmp = ($context["duration_mandatory"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "&nbsp;<span class=\"text-danger\">*</span>&nbsp;";
            }
            // line 60
            yield "                    <span id=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["duration_span_id"] ?? null), "html", null, true);
            yield "\">";
            yield (string) ($context["duration_dropdown"] ?? null);
            yield "</span>
                </td>
            </tr>
        ";
        }
        // line 64
        yield "    </table>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@moreticket/closeticket_solution_form.html.twig";
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
        return array (  125 => 64,  115 => 60,  111 => 59,  107 => 58,  103 => 56,  101 => 55,  94 => 51,  90 => 50,  80 => 44,  76 => 43,  72 => 42,  63 => 36,  59 => 35,  55 => 34,  51 => 33,  43 => 27,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@moreticket/closeticket_solution_form.html.twig", "/var/www/glpi/marketplace/moreticket/templates/closeticket_solution_form.html.twig");
    }
}
