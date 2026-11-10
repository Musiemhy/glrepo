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

/* components/alerts_macros.html.twig */
class __TwigTemplate_96e9cf755f69bf47c1135eb2136fb2b5 extends Template
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
        // line 61
        yield "
";
        // line 71
        yield "
";
        // line 81
        yield "
";
        // line 91
        yield "
";
        yield from [];
    }

    // line 33
    public function macro_alert($alert_type = "", $title = "", $messages = [], $icon = "", $important = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "alert_type" => $alert_type,
            "title" => $title,
            "messages" => $messages,
            "icon" => $icon,
            "important" => $important,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 34
            yield "   <div class=\"alert alert-";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["alert_type"] ?? null), "html", null, true);
            yield " ";
            yield (string) (((($tmp = ($context["important"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("alert-important") : (""));
            yield "\" role=\"alert\">
      <div class=\"d-flex\">
         <div class=\"me-2\">
            <i class=\"";
            // line 37
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
            yield " fs-2x alert-icon\"></i>
         </div>
         <div>
            ";
            // line 40
            if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["title"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 41
                yield "               <h4 class=\"alert-title\">
                  ";
                // line 42
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
                yield "
               </h4>
            ";
            }
            // line 45
            yield "            ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["messages"] ?? null)) > 0)) {
                // line 46
                yield "               <div class=\"text-muted\">
                  ";
                // line 47
                if (is_iterable(($context["messages"] ?? null))) {
                    // line 48
                    yield "                     ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["messages"] ?? null));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 49
                        yield "                        ";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                        yield "
                        ";
                        // line 50
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "<br />";
                        }
                        // line 51
                        yield "                     ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 52
                    yield "                  ";
                } else {
                    // line 53
                    yield "                     ";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["messages"] ?? null), "html", null, true);
                    yield "
                  ";
                }
                // line 55
                yield "               </div>
            ";
            }
            // line 57
            yield "         </div>
      </div>
   </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 62
    public function macro_alert_success($title = "", $messages = [], $important = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "title" => $title,
            "messages" => $messages,
            "important" => $important,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 63
            yield "   ";
            yield (string) $this->getTemplateForMacro("macro_alert", $context, 63, $this->getSourceContext())->macro_alert(...["success",             // line 65
($context["title"] ?? null),             // line 66
($context["messages"] ?? null), "ti ti-check",             // line 68
($context["important"] ?? null)]);
            // line 69
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 72
    public function macro_alert_info($title = "", $messages = [], $important = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "title" => $title,
            "messages" => $messages,
            "important" => $important,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 73
            yield "   ";
            yield (string) $this->getTemplateForMacro("macro_alert", $context, 73, $this->getSourceContext())->macro_alert(...["info",             // line 75
($context["title"] ?? null),             // line 76
($context["messages"] ?? null), "ti ti-info-circle",             // line 78
($context["important"] ?? null)]);
            // line 79
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 82
    public function macro_alert_warning($title = "", $messages = [], $important = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "title" => $title,
            "messages" => $messages,
            "important" => $important,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 83
            yield "   ";
            yield (string) $this->getTemplateForMacro("macro_alert", $context, 83, $this->getSourceContext())->macro_alert(...["warning",             // line 85
($context["title"] ?? null),             // line 86
($context["messages"] ?? null), "ti ti-alert-triangle",             // line 88
($context["important"] ?? null)]);
            // line 89
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 92
    public function macro_alert_danger($title = "", $messages = [], $important = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "title" => $title,
            "messages" => $messages,
            "important" => $important,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 93
            yield "   ";
            yield (string) $this->getTemplateForMacro("macro_alert", $context, 93, $this->getSourceContext())->macro_alert(...["danger",             // line 95
($context["title"] ?? null),             // line 96
($context["messages"] ?? null), "ti ti-exclamation-circle",             // line 98
($context["important"] ?? null)]);
            // line 99
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/alerts_macros.html.twig";
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
        return array (  276 => 99,  274 => 98,  273 => 96,  272 => 95,  270 => 93,  256 => 92,  249 => 89,  247 => 88,  246 => 86,  245 => 85,  243 => 83,  229 => 82,  222 => 79,  220 => 78,  219 => 76,  218 => 75,  216 => 73,  202 => 72,  195 => 69,  193 => 68,  192 => 66,  191 => 65,  189 => 63,  175 => 62,  166 => 57,  162 => 55,  156 => 53,  153 => 52,  138 => 51,  134 => 50,  129 => 49,  111 => 48,  109 => 47,  106 => 46,  103 => 45,  97 => 42,  94 => 41,  92 => 40,  86 => 37,  77 => 34,  61 => 33,  55 => 91,  52 => 81,  49 => 71,  46 => 61,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/alerts_macros.html.twig", "/var/www/glpi/templates/components/alerts_macros.html.twig");
    }
}
