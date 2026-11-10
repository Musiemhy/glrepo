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

/* components/dropdown/limit.html.twig */
class __TwigTemplate_298a83579ab0f2a8ecb7f3b34681a96d extends Template
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
        $context["additional_attributes"] = ((array_key_exists("additional_attributes", $context)) ? (Twig\Extension\CoreExtension::default(($context["additional_attributes"] ?? null), [])) : ([]));
        // line 34
        $context["no_onchange"] = ((array_key_exists("no_onchange", $context)) ? (Twig\Extension\CoreExtension::default(($context["no_onchange"] ?? null), false)) : (false));
        // line 35
        yield "
";
        // line 36
        if ( !array_key_exists("additional_params", $context)) {
            // line 37
            yield "   ";
            $context["additional_params"] = "";
        } else {
            // line 39
            yield "   ";
            if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["additional_params"] ?? null)) > 0) &&  !(is_string($_v0 = ($context["additional_params"] ?? null)) && is_string($_v1 = "&") && str_starts_with($_v0, $_v1)))) {
                // line 40
                yield "      ";
                $context["additional_params"] = ("&" . ($context["additional_params"] ?? null));
                // line 41
                yield "   ";
            }
        }
        // line 43
        yield "
";
        // line 44
        if (( !array_key_exists("no_onchange", $context) ||  !(($tmp = ($context["no_onchange"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 45
            yield "   ";
            if ((array_key_exists("is_tab", $context) && (($context["is_tab"] ?? null) == true))) {
                // line 46
                yield "      ";
                $context["href"] = (("javascript:reloadTab(\x27glpilist_limit=\x27+this.value+\x27" . ($context["additional_params"] ?? null)) . "\x27);");
                // line 47
                yield "   ";
            } elseif (array_key_exists("href", $context)) {
                // line 48
                yield "      ";
                $context["href_separator"] = ((CoreExtension::inFilter("?", ($context["href"] ?? null))) ? ("&") : ("?"));
                // line 49
                yield "      ";
                $context["href"] = ((((("location.href=\x27" . ($context["href"] ?? null)) . ($context["href_separator"] ?? null)) . "glpilist_limit=\x27+this.value+\x27") . ($context["additional_params"] ?? null)) . "\x27");
                // line 50
                yield "   ";
            }
        }
        // line 52
        yield "
";
        // line 53
        $context["options"] = [];
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(5, 19, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 55
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), [$context["i"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(20, 49, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 58
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), [$context["i"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(50, 249, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 61
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), [$context["i"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(250, 999, 250));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 64
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), [$context["i"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1000, 4999, 1000));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 67
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), [$context["i"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(5000, 10000, 5000));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 70
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), [$context["i"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 72
        $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), [9999999]);
        // line 73
        $context["max"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->phpConfig("max_input_vars");
        // line 74
        if ((($context["max"] ?? null) > 10)) {
            // line 75
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), [(($context["max"] ?? null) - 10)]);
        }
        // line 77
        if (!CoreExtension::inFilter($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("list_limit"), ($context["options"] ?? null))) {
            // line 78
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), [$this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("list_limit")]);
        }
        // line 80
        $context["select_name"] = ((array_key_exists("select_name", $context)) ? (Twig\Extension\CoreExtension::default(($context["select_name"] ?? null), "list_limit")) : ("list_limit"));
        // line 81
        yield "<select id=\"";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Html::sanitizeDomId(($context["select_name"] ?? null)), "html", null, true);
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("rand", $context)) ? (Twig\Extension\CoreExtension::default(($context["rand"] ?? null), Twig\Extension\CoreExtension::random($this->env->getCharset()))) : (Twig\Extension\CoreExtension::random($this->env->getCharset()))), "html", null, true);
        yield "\" class=\"form-select form-select-sm mx-1 d-inline-block w-auto ";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("select_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["select_class"] ?? null), "")) : ("")), "html", null, true);
        yield "\"
        ";
        // line 82
        if ( !(($tmp = ($context["no_onchange"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "onChange=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["href"] ?? null), "html", null, true);
            yield "\"";
        }
        yield " name=\"";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["select_name"] ?? null), "html", null, true);
        yield "\"
        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["additional_attributes"] ?? null));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            // line 84
            yield "            ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attr"], "html", null, true);
            yield "=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\"
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attr'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 85
        yield ">
   ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), ($context["options"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 87
            yield "      <option value=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\" ";
            yield (string) ((($context["value"] == $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("list_limit"))) ? ("selected") : (""));
            yield ">
         ";
            // line 88
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "
      </option>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 91
        yield "</select>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/dropdown/limit.html.twig";
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
        return array (  246 => 91,  236 => 88,  229 => 87,  225 => 86,  222 => 85,  210 => 84,  206 => 83,  196 => 82,  188 => 81,  186 => 80,  182 => 78,  180 => 77,  176 => 75,  174 => 74,  172 => 73,  170 => 72,  162 => 70,  158 => 69,  150 => 67,  146 => 66,  138 => 64,  134 => 63,  126 => 61,  122 => 60,  114 => 58,  110 => 57,  102 => 55,  98 => 54,  96 => 53,  93 => 52,  89 => 50,  86 => 49,  83 => 48,  80 => 47,  77 => 46,  74 => 45,  72 => 44,  69 => 43,  65 => 41,  62 => 40,  59 => 39,  55 => 37,  53 => 36,  50 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/dropdown/limit.html.twig", "/var/www/glpi/templates/components/dropdown/limit.html.twig");
    }
}
