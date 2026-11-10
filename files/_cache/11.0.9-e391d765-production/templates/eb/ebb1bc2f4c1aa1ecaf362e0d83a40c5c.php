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

/* @moreticket/waitingticket_form.html.twig */
class __TwigTemplate_dd3dec2208465ba35b61e7a23f5d10a4 extends Template
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
<div class=\"spaced\" id=\"";
        // line 28
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["block_id"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 29
        if ((($tmp = ($context["with_break"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<br>";
        }
        // line 30
        yield "    <table id=\"cl_menu\">
        <tr";
        // line 31
        if ((($tmp = ($context["row_class"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " class=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_class"] ?? null), "html", null, true);
            yield "\"";
        }
        yield ">
            <td>
                ";
        // line 33
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Reason", "moreticket"), "html", null, true);
        yield "
            </td>
            <td>
                ";
        // line 36
        if ((($tmp = ($context["canedit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "                    ";
            if ((($tmp = ($context["reason_mandatory"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "&nbsp;:&nbsp;<span class=\"text-danger\">*</span>&nbsp;";
            }
            // line 38
            yield "                    ";
            yield (string) ($context["reason_input"] ?? null);
            yield "
                ";
        } else {
            // line 40
            yield "                    ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["reason_value"] ?? null), "html", null, true);
            yield "
                ";
        }
        // line 42
        yield "            </td>
        </tr>
        <tr";
        // line 44
        if ((($tmp = ($context["row_class"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " class=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["row_class"] ?? null), "html", null, true);
            yield "\"";
        }
        yield ">
            <td>
                ";
        // line 46
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Postponement date", "moreticket"), "html", null, true);
        yield "
            </td>
            <td>
                ";
        // line 49
        if ((($tmp = ($context["canedit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "                    ";
            if ((($tmp = ($context["date_mandatory"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "&nbsp;:&nbsp;<span class=\"text-danger\">*</span>&nbsp;";
            }
            // line 51
            yield "                    ";
            yield (string) ($context["date_field"] ?? null);
            yield "
                ";
        } else {
            // line 53
            yield "                    ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["date_value"] ?? null), "html", null, true);
            yield "
                ";
        }
        // line 55
        yield "            </td>
        </tr>
    </table>
</div>
";
        // line 59
        yield (string) ($context["position_script"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@moreticket/waitingticket_form.html.twig";
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
        return array (  135 => 59,  129 => 55,  123 => 53,  117 => 51,  112 => 50,  110 => 49,  104 => 46,  95 => 44,  91 => 42,  85 => 40,  79 => 38,  74 => 37,  72 => 36,  66 => 33,  57 => 31,  54 => 30,  50 => 29,  46 => 28,  43 => 27,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@moreticket/waitingticket_form.html.twig", "/var/www/glpi/marketplace/moreticket/templates/waitingticket_form.html.twig");
    }
}
