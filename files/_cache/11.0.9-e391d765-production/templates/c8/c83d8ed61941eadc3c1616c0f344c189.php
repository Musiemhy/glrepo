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

/* components/form/basic_inputs_macros.html.twig */
class __TwigTemplate_93173a1777cbd7829980e1215e2596bb extends Template
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
        // line 123
        yield "

";
        // line 138
        yield "

";
        // line 167
        yield "

";
        // line 197
        yield "

";
        // line 202
        yield "

";
        // line 207
        yield "

";
        // line 224
        yield "

";
        // line 229
        yield "

";
        // line 343
        yield "

";
        // line 350
        yield "

";
        // line 453
        yield "

";
        // line 477
        yield "

";
        // line 500
        yield "

";
        // line 505
        yield "
";
        yield from [];
    }

    // line 33
    public function macro_input($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 34
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => null, "type" => "text", "input_addclass" => "", "additional_attributes" => [], "readonly" => false, "disabled" => false, "multiple" => false, "required" => false, "maxlength" => null, "is_disclosable" => false, "is_copyable" => false, "clearable" => false, "with_class" => true],             // line 48
($context["options"] ?? null));
            // line 49
            yield "
    ";
            // line 50
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 50), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 50), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 50), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 51
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["required" => true]);
                // line 52
                yield "    ";
            }
            // line 53
            yield "
    ";
            // line 54
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 54), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 54), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 54), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 55
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 56
                yield "    ";
            }
            // line 57
            yield "
    ";
            // line 58
            $context["has_addons"] = ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_copyable", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp));
            // line 59
            yield "
    ";
            // line 60
            if (((($tmp = ($context["has_addons"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 60)))) {
                // line 61
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => ((Html::sanitizeDomId(                // line 62
($context["name"] ?? null)) . "_") . Twig\Extension\CoreExtension::random($this->env->getCharset()))]);
                // line 64
                yield "    ";
            }
            // line 65
            yield "
    ";
            // line 66
            $context["input"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 67
                yield "        <input type=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "type", [], "any", false, false, false, 67), "html", null, true);
                yield "\" ";
                yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 67) != null)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("id=" . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 67)), "html", null, true)) : (""));
                yield "
        ";
                // line 68
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "with_class", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 69
                    yield "               class=\"form-control ";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 69), "html", null, true);
                    yield " ";
                    yield (string) (((($tmp = ($context["has_addons"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("rounded-end-0") : (""));
                    yield "\"
        ";
                }
                // line 71
                yield "               name=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" value=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                yield "\"
            ";
                // line 72
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 72));
                foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                    // line 73
                    yield "               ";
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
                // line 75
                yield "               ";
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "maxlength", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("maxlength=" . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "maxlength", [], "any", false, false, false, 75)), "html", null, true)) : (""));
                yield "
               ";
                // line 76
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("readonly") : (""));
                yield "
               ";
                // line 77
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                yield "
               ";
                // line 78
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("multiple") : (""));
                yield " ";
                // line 79
                yield "               ";
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("required") : (""));
                yield "
               ";
                // line 80
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "pattern", [], "any", true, true, false, 80)) {
                    yield "pattern=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "pattern", [], "any", false, false, false, 80), "html", null, true);
                    yield "\"";
                }
                // line 81
                yield "               ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", true, true, false, 81)) {
                    yield "min=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", false, false, false, 81), "html", null, true);
                    yield "\"";
                }
                // line 82
                yield "               ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "max", [], "any", true, true, false, 82)) {
                    yield "max=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "max", [], "any", false, false, false, 82), "html", null, true);
                    yield "\"";
                }
                // line 83
                yield "               ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", true, true, false, 83)) {
                    yield "step=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 83), "html", null, true);
                    yield "\"";
                }
                yield " />
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 85
            yield "
    ";
            // line 86
            $context["more_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 87
                yield "        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 87)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 88
                    yield "            <button type=\"button\" class=\"btn btn-outline-secondary\"
                 onmousedown=\"showDisclosablePasswordField(\x27";
                    // line 89
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 89), "js"), "html", null, true);
                    yield "\x27)\"
                 onmouseup=\"hideDisclosablePasswordField(\x27";
                    // line 90
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 90), "js"), "html", null, true);
                    yield "\x27)\"
                 onmouseout=\"hideDisclosablePasswordField(\x27";
                    // line 91
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 91), "js"), "html", null, true);
                    yield "\x27)\">
                <i class=\"ti ti-eye disclose\"></i>
            </button>
        ";
                }
                // line 95
                yield "
        ";
                // line 96
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_copyable", [], "any", false, false, false, 96)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 97
                    yield "            <button type=\"button\" class=\"btn btn-outline-secondary\" onclick=\"copyDisclosablePasswordFieldToClipboard(\x27";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 97), "js"), "html", null, true);
                    yield "\x27)\">
                <i class=\"ti ti-clipboard-copy disclose\"></i>
            </button>
        ";
                }
                // line 101
                yield "    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 102
            yield "
    ";
            // line 103
            if ((($tmp = ($context["has_addons"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 104
                yield "        ";
                $context["input"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 105
                    yield "            <div class=\"btn-group btn-group-sm d-flex\">
                ";
                    // line 106
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input"] ?? null), "html", null, true);
                    yield "
                ";
                    // line 107
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["more_html"] ?? null), "html", null, true);
                    yield "
            </div>
        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 110
                yield "    ";
            }
            // line 111
            yield "
    ";
            // line 112
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["input"] ?? null), "html", null, true);
            yield "

    ";
            // line 114
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "clearable", [], "any", false, false, false, 114)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 115
                yield "        <div class=\"d-flex align-items-center gap-1 mt-1\">
            <input type=\"checkbox\" name=\"_blank_";
                // line 116
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" id=\"_blank_";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" class=\"form-check-input\">
            <label for=\"_blank_";
                // line 117
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" class=\"form-check-label\">
                ";
                // line 118
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Clear"), "html", null, true);
                yield "
            </label>
        </div>
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 125
    public function macro_text($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 126
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["copyable" => false],             // line 128
($context["options"] ?? null));
            // line 129
            yield "
    ";
            // line 130
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "copyable", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 131
                yield "        <div class=\"copy_to_clipboard_wrapper\">
    ";
            }
            // line 133
            yield "    ";
            yield (string) $this->getTemplateForMacro("macro_input", $context, 133, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "text"])]);
            yield "
    ";
            // line 134
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "copyable", [], "any", false, false, false, 134)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 135
                yield "        </div>
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 140
    public function macro_number($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 141
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["step" => 1],             // line 143
($context["options"] ?? null));
            // line 144
            yield "
    ";
            // line 145
            if ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "decimals", [], "any", true, true, false, 145) &&  !(($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", true, true, false, 145)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 145), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !(($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", true, true, false, 145)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 145), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 146
                yield "        ";
                // line 147
                yield "        ";
                $context["decimals_part"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 147), ".");
                // line 148
                yield "        ";
                $context["decimals"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["decimals_part"] ?? null), 1, [], "array", true, true, false, 148)) ? (Twig\Extension\CoreExtension::length($this->env->getCharset(), (($_v0 = ($context["decimals_part"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[1] ?? null) : null))) : (0));
                // line 149
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["decimals" => ($context["decimals"] ?? null)]);
                // line 150
                yield "    ";
            }
            // line 151
            yield "
    ";
            // line 152
            if ((($context["value"] ?? null) == "")) {
                // line 153
                yield "        ";
                $context["value"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", true, true, false, 153)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", false, false, false, 153)) : (0));
                // line 154
                yield "    ";
            }
            // line 155
            yield "
    ";
            // line 156
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 156) != "any") && (Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 156), 0, "floor") != CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 156)))) {
                // line 157
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "decimals", [], "any", true, true, false, 157)) {
                    // line 158
                    yield "            ";
                    $context["value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::formatNumber", [($context["value"] ?? null), true, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "decimals", [], "any", false, false, false, 158)]);
                    // line 159
                    yield "        ";
                } else {
                    // line 160
                    yield "            ";
                    // line 161
                    yield "            ";
                    $context["value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::formatNumber", [($context["value"] ?? null), true]);
                    // line 162
                    yield "        ";
                }
                // line 163
                yield "    ";
            }
            // line 164
            yield "
    ";
            // line 165
            yield (string) $this->getTemplateForMacro("macro_input", $context, 165, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "number"])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 169
    public function macro_color($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 170
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => ((            // line 171
($context["name"] ?? null) . "_") . (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", true, true, false, 171) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 171)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 171)) : (Twig\Extension\CoreExtension::random($this->env->getCharset()))))],             // line 172
($context["options"] ?? null));
            // line 173
            yield "
    ";
            // line 174
            yield (string) $this->getTemplateForMacro("macro_input", $context, 174, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "text", "input_addclass" => "rounded-0"])]);
            // line 177
            yield "
    <script>
        \$(function () {
            \$(\"#";
            // line 180
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 180), "css"), "js"), "html", null, true);
            yield "\").spectrum({
                showInput: true,
                preferredFormat: \"hex\",
                type: \"text\",
                cancelText: \"";
            // line 184
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cancel"), "js"), "html", null, true);
            yield "\",
                chooseText: \"";
            // line 185
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Validate"), "js"), "html", null, true);
            yield "\",
                change: function (color) {
                    if (color !== null && color.getAlpha() !== 1) {
                        let hex = color.toHexString();
                        hex += (\"0\" + Math.round(parseFloat(color.getAlpha()) * 255).toString(16)).slice(-2);
                        this.value = hex;
                    }
                }
            });
        });
    </script>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 199
    public function macro_password($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 200
            yield "    ";
            yield (string) $this->getTemplateForMacro("macro_input", $context, 200, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "password"])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 204
    public function macro_email($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 205
            yield "    ";
            yield (string) $this->getTemplateForMacro("macro_input", $context, 205, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "email"])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 209
    public function macro_file($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 210
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["simple" => false],             // line 212
($context["options"] ?? null));
            // line 213
            yield "
    ";
            // line 214
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "simple", [], "any", false, false, false, 214)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 215
                yield "        ";
                yield (string) $this->getTemplateForMacro("macro_input", $context, 215, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "file"])]);
                yield "
    ";
            } else {
                // line 217
                yield "        ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [Twig\Extension\CoreExtension::merge(                // line 218
($context["options"] ?? null), ["name" =>                 // line 219
($context["name"] ?? null)])]);
                // line 222
                yield "    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 226
    public function macro_hidden($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 227
            yield "    ";
            yield (string) $this->getTemplateForMacro("macro_input", $context, 227, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "hidden", "with_class" => false])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 231
    public function macro_date($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 232
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "enableTime" => false, "noCalendar" => false, "checkIsExpired" => false, "clearable" => false, "container_addclass" => "", "input_addclass" => "", "readonly" => false, "disabled" => false, "maybeempty" => false],             // line 243
($context["options"] ?? null));
            // line 244
            yield "
    ";
            // line 245
            $context["editable"] = ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 245)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 245)) && $tmp instanceof Markup ? (string) $tmp : $tmp));
            // line 246
            yield "
    ";
            // line 247
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => ((Html::sanitizeDomId(            // line 248
($context["name"] ?? null)) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 248))],             // line 249
($context["options"] ?? null));
            // line 250
            yield "
    ";
            // line 251
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 251), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 251)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 251), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 251), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 252
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 253
                yield "    ";
            }
            // line 254
            yield "
    ";
            // line 255
            if ((($context["value"] ?? null) == "NULL")) {
                // line 256
                yield "      ";
                $context["value"] = null;
                // line 257
                yield "   ";
            }
            // line 258
            yield "
    ";
            // line 259
            $context["final_expiration_class"] = "";
            // line 260
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "checkIsExpired", [], "any", false, false, false, 260)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 261
                yield "        ";
                if (($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["value"] ?? null), "Y-m-d H:i:s") < $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d H:i:s"))) {
                    // line 262
                    yield "            ";
                    $context["final_expiration_class"] = " warn";
                    // line 263
                    yield "        ";
                }
                // line 264
                yield "    ";
            } else {
                // line 265
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "expiration_class", [], "any", true, true, false, 265)) {
                    // line 266
                    yield "            ";
                    $context["final_expiration_class"] = (" " . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "expiration_class", [], "any", false, false, false, 266));
                    // line 267
                    yield "        ";
                } else {
                    // line 268
                    yield "            ";
                    $context["final_expiration_class"] = "";
                    // line 269
                    yield "        ";
                }
                // line 270
                yield "    ";
            }
            // line 271
            yield "
    <div
        class=\"btn-group flex-grow-1 flatpickr d-flex ";
            // line 273
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "container_addclass", [], "any", false, false, false, 273), "html", null, true);
            yield "\"
        id=\"";
            // line 274
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 274), "html", null, true);
            yield "\"
        data-bs-toggle=\"tooltip\"
        data-bs-placement=\"bottom\"
        title=\"";
            // line 277
            yield (string) (((($tmp = ($context["editable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Enter or select a date"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Date", "Dates", 1), "html", null, true)));
            yield "\"
    >
        ";
            // line 279
            yield (string) $this->getTemplateForMacro("macro_input", $context, 279, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "text", "id" => (CoreExtension::getAttribute($this->env, $this->source,             // line 281
($context["options"] ?? null), "id", [], "any", false, false, false, 281) . "_input"), "additional_attributes" => Twig\Extension\CoreExtension::merge((((CoreExtension::getAttribute($this->env, $this->source,             // line 282
($context["options"] ?? null), "additional_attributes", [], "any", true, true, false, 282) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 282)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 282)) : ([])), ["data-input" => ""]), "input_addclass" => (CoreExtension::getAttribute($this->env, $this->source,             // line 283
($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 283) . ($context["final_expiration_class"] ?? null)), "clearable" => false])]);
            // line 285
            yield "

        ";
            // line 287
            if ((($tmp = ($context["editable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 288
                yield "            ";
                $context["calendar_icon"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 288)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ti ti-calendar-time") : ("ti ti-calendar"));
                // line 289
                yield "            <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" data-toggle>
                <i class=\"";
                // line 290
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["calendar_icon"] ?? null), "html", null, true);
                yield "\"></i>
                <span class=\"sr-only\">";
                // line 291
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Enter or select a date"), "html", null, true);
                yield "</span>
            </button>
            ";
                // line 294
                yield "            ";
                if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "clearable", [], "any", false, false, false, 294)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "maybeempty", [], "any", false, false, false, 294)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                    // line 295
                    yield "                <button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-clear title=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Clear"), "html", null, true);
                    yield "\">
                    <i class=\"ti ti-circle-x\"></i>
                </button>
            ";
                }
                // line 299
                yield "        ";
            }
            // line 300
            yield "    </div>

    ";
            // line 302
            if ((($tmp = ($context["editable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 303
                yield "        ";
                $context["locale"] = $this->extensions['Glpi\Application\View\Extension\I18nExtension']->getCurrentLocale();
                // line 304
                yield "        ";
                if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 304)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "noCalendar", [], "any", false, false, false, 304)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                    // line 305
                    yield "            ";
                    $context["date_format"] = "Y-m-d H:i:S";
                    // line 306
                    yield "            ";
                    $context["alt_format"] = ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getDateFormat", ["js"]) . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 306)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" H:i:S") : ("")));
                    // line 307
                    yield "        ";
                } elseif (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 307)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "noCalendar", [], "any", false, false, false, 307)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                    // line 308
                    yield "            ";
                    $context["date_format"] = "H:i:S";
                    // line 309
                    yield "            ";
                    $context["alt_format"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 309)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" H:i:S") : (""));
                    // line 310
                    yield "        ";
                } elseif (( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 310)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "noCalendar", [], "any", false, false, false, 310)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                    // line 311
                    yield "            ";
                    $context["date_format"] = "Y-m-d";
                    // line 312
                    yield "            ";
                    $context["alt_format"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getDateFormat", ["js"]);
                    // line 313
                    yield "        ";
                } else {
                    // line 314
                    yield "            ";
                    // line 315
                    yield "            ";
                    $context["date_format"] = "Y-m-d H:i:S";
                    // line 316
                    yield "        ";
                }
                // line 317
                yield "        <script>
            \$(function() {
                \$(\"#";
                // line 319
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 319), "css"), "js"), "html", null, true);
                yield "\").flatpickr({
                    wrap: true,
                    altInput: true,
                    dateFormat: \x27";
                // line 322
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["date_format"] ?? null), "js"), "html", null, true);
                yield "\x27,
                    altFormat: \x27";
                // line 323
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["alt_format"] ?? null), "js"), "html", null, true);
                yield "\x27,
                    enableTime: ";
                // line 324
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 324)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                yield ",
                    enableSeconds: ";
                // line 325
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enableTime", [], "any", false, false, false, 325)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                yield ",
                    noCalendar: ";
                // line 326
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "noCalendar", [], "any", false, false, false, 326)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
                yield ",
                    weekNumbers: true,
                    time_24hr: true,
                    allowInput: ";
                // line 329
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 329)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
                yield ",
                    clickOpens: ";
                // line 330
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 330)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("false") : ("true"));
                yield ",
                    locale: getFlatPickerLocale(\"";
                // line 331
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = ($context["locale"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["language"] ?? null) : null), "js"), "html", null, true);
                yield "\", \"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = ($context["locale"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["region"] ?? null) : null), "js"), "html", null, true);
                yield "\"),
                    onClose(dates, currentdatestring, picker) {
                        picker.setDate(picker.altInput.value, true, picker.config.altFormat)
                    },
                    plugins: [
                        CustomFlatpickrButtons()
                    ]
                });
            });
        </script>
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 345
    public function macro_datetime($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 346
            yield "    ";
            yield (string) $this->getTemplateForMacro("macro_date", $context, 346, $this->getSourceContext())->macro_date(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["enableTime" => true])]);
            // line 348
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 352
    public function macro_textarea($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 353
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => null, "rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "rows" => 3, "enable_richtext" => false, "enable_images" => true, "mention_options" => ["enabled" => (CoreExtension::getAttribute($this->env, $this->source,             // line 360
($context["options"] ?? null), "enable_mentions", [], "any", true, true, false, 360) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_mentions", [], "any", false, false, false, 360)) && $tmp instanceof Markup ? (string) $tmp : $tmp)), "full" => true, "users" => []], "entities_id" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"), "readonly" => false, "disabled" => false, "required" => false, "add_body_classes" => [], "toolbar" => true, "toolbar_location" => "top", "init" => true, "init_on_demand" => false, "placeholder" => "", "enable_form_tags" => false, "form_tags_form_id" => null, "aria_label" => "", "statusbar" => true, "content_style" => "", "input_addclass" => "", "additional_attributes" => [], "plugins_to_remove" => []],             // line 382
($context["options"] ?? null));
            // line 383
            yield "
    ";
            // line 384
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 384), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 384)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 384), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 384), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 385
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 386
                yield "    ";
            }
            // line 387
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 388
($context["options"] ?? null), "id", [], "any", false, false, false, 388)) > 0)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 388)) : (((($context["name"] ?? null) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 388))))]);
            // line 390
            yield "
    ";
            // line 392
            yield "    <textarea class=\"form-control ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 392), "html", null, true);
            yield "\"
            id=\"";
            // line 393
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 393), "html", null, true);
            yield "\" name=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" rows=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rows", [], "any", false, false, false, 393), "html", null, true);
            yield "\"
            style=\"width: 100%;\"
            ";
            // line 395
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 395));
            foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                // line 396
                yield "               ";
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
            // line 398
            yield "            ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "aria_label", [], "any", false, false, false, 398))) {
                // line 399
                yield "                aria-label=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "aria_label", [], "any", false, false, false, 399), "html", null, true);
                yield "\"
            ";
            }
            // line 401
            yield "            ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "placeholder", [], "any", false, false, false, 401))) {
                // line 402
                yield "                placeholder=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "placeholder", [], "any", false, false, false, 402), "html", null, true);
                yield "\"
            ";
            }
            // line 404
            yield "            ";
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 404)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
            yield "
            ";
            // line 405
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 405)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("readonly") : (""));
            yield "
            ";
            // line 406
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 406)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("required") : (""));
            yield ">";
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 406)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(($context["value"] ?? null)))) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true)));
            yield "</textarea>

    ";
            // line 408
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 408)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 409
                yield "        ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::initEditorSystem", [CoreExtension::getAttribute($this->env, $this->source,                 // line 410
($context["options"] ?? null), "id", [], "any", false, false, false, 410), CoreExtension::getAttribute($this->env, $this->source,                 // line 411
($context["options"] ?? null), "rand", [], "any", false, false, false, 411), true, ((CoreExtension::getAttribute($this->env, $this->source,                 // line 413
($context["options"] ?? null), "disabled", [], "any", true, true, false, 413)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 413), false)) : (false)), CoreExtension::getAttribute($this->env, $this->source,                 // line 414
($context["options"] ?? null), "enable_images", [], "any", false, false, false, 414), ((CoreExtension::getAttribute($this->env, $this->source,                 // line 415
($context["options"] ?? null), "editor_height", [], "any", true, true, false, 415)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "editor_height", [], "any", false, false, false, 415), 150)) : (150)), CoreExtension::getAttribute($this->env, $this->source,                 // line 416
($context["options"] ?? null), "add_body_classes", [], "any", false, false, false, 416), CoreExtension::getAttribute($this->env, $this->source,                 // line 417
($context["options"] ?? null), "toolbar_location", [], "any", false, false, false, 417), CoreExtension::getAttribute($this->env, $this->source,                 // line 418
($context["options"] ?? null), "init", [], "any", false, false, false, 418), CoreExtension::getAttribute($this->env, $this->source,                 // line 419
($context["options"] ?? null), "placeholder", [], "any", false, false, false, 419), CoreExtension::getAttribute($this->env, $this->source,                 // line 420
($context["options"] ?? null), "toolbar", [], "any", false, false, false, 420), CoreExtension::getAttribute($this->env, $this->source,                 // line 421
($context["options"] ?? null), "statusbar", [], "any", false, false, false, 421), CoreExtension::getAttribute($this->env, $this->source,                 // line 422
($context["options"] ?? null), "content_style", [], "any", false, false, false, 422), CoreExtension::getAttribute($this->env, $this->source,                 // line 423
($context["options"] ?? null), "init_on_demand", [], "any", false, false, false, 423), CoreExtension::getAttribute($this->env, $this->source,                 // line 424
($context["options"] ?? null), "plugins_to_remove", [], "any", false, false, false, 424)]);
                // line 426
                yield "   ";
            }
            // line 427
            yield "   ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_form_tags", [], "any", false, false, false, 427)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 428
                yield "        <script>
            \$(function() {
                const form_tags = new GLPI.RichText.FormTags(
                    tinymce.get(\x27";
                // line 431
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 431), "js"), "html", null, true);
                yield "\x27),
                    ";
                // line 432
                yield (string) json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "form_tags_form_id", [], "any", false, false, false, 432));
                yield ",
                );
                form_tags.register();
            });
        </script>
    ";
            }
            // line 438
            yield "
    ";
            // line 439
            if (((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mention_options", [], "any", false, true, false, 439), "enabled", [], "any", true, true, false, 439)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mention_options", [], "any", false, false, false, 439), "enabled", [], "any", false, false, false, 439), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_notifications")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 440
                yield "        <script>
            \$(function() {
                const user_mention = new GLPI.RichText.UserMention(
                    tinymce.get(\x27";
                // line 443
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 443), "js"), "html", null, true);
                yield "\x27),
                    ";
                // line 444
                yield (string) json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "entities_id", [], "any", false, false, false, 444));
                yield ",
                    \x27";
                // line 445
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewIDORToken("User", ["right" => "all", "entity_restrict" => json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "entities_id", [], "any", false, false, false, 445))]), "html", null, true);
                yield "\x27,
                    ";
                // line 446
                yield (string) json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mention_options", [], "any", false, false, false, 446));
                yield "
                );
                user_mention.register();
            });
        </script>
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 455
    public function macro_checkbox($name = null, $value = null, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 456
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => null, "input_addclass" => "", "readonly" => false, "disabled" => false, "required" => false, "additional_attributes" => []],             // line 463
($context["options"] ?? null));
            // line 464
            yield "
    <input type=\"hidden\"   name=\"";
            // line 465
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"0\" />
    <input type=\"checkbox\" name=\"";
            // line 466
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"1\"
           class=\"form-check-input ";
            // line 467
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 467), "html", null, true);
            yield "\"
           ";
            // line 468
            yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 468) != null)) ? ((("id=\"" . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 468))) . "\"")) : (""));
            yield "
           ";
            // line 469
            yield (string) (((($context["value"] ?? null) == 1)) ? ("checked") : (""));
            yield "
           ";
            // line 470
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 470)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("readonly") : (""));
            yield "
           ";
            // line 471
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 471)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("required") : (""));
            yield "
           ";
            // line 472
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 472)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
            yield "
            ";
            // line 473
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 473));
            foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                // line 474
                yield "                ";
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
            // line 475
            yield "/>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 479
    public function macro_button($name = null, $label = "", $type = "button", $value = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "label" => $label,
            "type" => $type,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 480
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["type" => "submit", "class" => "btn btn-primary", "icon" => "", "icon_title" => "", "additional_attributes" => []],             // line 486
($context["options"] ?? null));
            // line 487
            yield "
    <button class=\"";
            // line 488
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "class", [], "any", false, false, false, 488), "html", null, true);
            yield "\" type=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
            yield "\" name=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" value=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "\"
        ";
            // line 489
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 489));
            foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                // line 490
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
            // line 491
            yield ">
        ";
            // line 492
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "icon", [], "any", false, false, false, 492))) {
                // line 493
                yield "            <i class=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "icon", [], "any", false, false, false, 493), "html", null, true);
                yield "\" title=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "icon_title", [], "any", false, false, false, 493), "html", null, true);
                yield "\"></i>
        ";
            }
            // line 495
            yield "        ";
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["label"] ?? null))) {
                // line 496
                yield "            <span>";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
                yield "</span>
        ";
            }
            // line 498
            yield "    </button>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 502
    public function macro_submit($name = null, $label = "", $value = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "label" => $label,
            "value" => $value,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 503
            yield "    ";
            yield (string) $this->getTemplateForMacro("macro_button", $context, 503, $this->getSourceContext())->macro_button(...[($context["name"] ?? null), ($context["label"] ?? null), "submit", ($context["value"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 506
    public function macro_label($label = null, $id = null, $options = [], $class = "form-label", ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "id" => $id,
            "options" => $options,
            "class" => $class,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 507
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["locked" => false, "locked_value" => null, "tpl_mark" => null, "helper" => false],             // line 512
($context["options"] ?? null));
            // line 513
            yield "
    ";
            // line 514
            $context["required_mark"] = "";
            // line 515
            yield "    ";
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", true, true, false, 515) && (($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 515), "isMandatoryField", [CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", false, false, false, 515)], "method", true, true, false, 515)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 515), "isMandatoryField", [CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", false, false, false, 515)], "method", false, false, false, 515), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", true, true, false, 515) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 515)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 515)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 516
                yield "        ";
                $context["required_mark"] = "<span class=\"required\">*</span>";
                // line 517
                yield "    ";
            }
            // line 518
            yield "
    ";
            // line 519
            $context["helper"] = "";
            // line 520
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 520)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 521
                yield "        ";
                // line 522
                yield "        ";
                // line 523
                yield "        ";
                $context["helper_safe_text"] = Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 523)));
                // line 524
                yield "        ";
                $context["helper"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 525
                    yield "        <span class=\"form-help\"
              data-bs-toggle=\"tooltip\"
              data-bs-placement=\"top\"
              data-bs-html=\"true\"
              data-bs-title=\"";
                    // line 529
                    yield (string) ($context["helper_safe_text"] ?? null);
                    yield "\">
            ?
        </span>
        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 533
                yield "    ";
            }
            // line 534
            yield "
    ";
            // line 535
            $context["locked_mark"] = "";
            // line 536
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked", [], "any", false, false, false, 536)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 537
                yield "        ";
                $context["locked_mark"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 538
                    yield "        ";
                    $context["locked_title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Field will not be updated from inventory"), "html", null, true);
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 539
                    yield "        ";
                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked_value", [], "any", false, false, false, 539))) {
                        // line 540
                        yield "            ";
                        $context["locked_title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["locked_title"] ?? null), "html", null, true);
                            yield "
            -
            ";
                            // line 542
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((__("Last inventory value was:") . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked_value", [], "any", false, false, false, 542)), "html", null, true);
                            yield from [];
                        })())) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 543
                        yield "        ";
                    }
                    // line 544
                    yield "        <i class=\"ti ti-lock\" title=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["locked_title"] ?? null), "html", null, true);
                    yield "\" data-bs-toggle=\"tooltip\"></i>
        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 546
                yield "    ";
            }
            // line 547
            yield "
    <label class=\"";
            // line 548
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield "\" for=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "\">
        ";
            // line 549
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield "
        ";
            // line 550
            yield (string) ($context["locked_mark"] ?? null);
            yield "
        ";
            // line 551
            yield (string) ($context["required_mark"] ?? null);
            yield "
        ";
            // line 552
            yield (string) ($context["helper"] ?? null);
            yield "
        ";
            // line 553
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "tpl_mark", [], "any", false, false, false, 553))) {
                // line 554
                yield "            ";
                yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "tpl_mark", [], "any", false, false, false, 554);
                yield "
        ";
            }
            // line 556
            yield "    </label>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/form/basic_inputs_macros.html.twig";
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
        return array (  1436 => 556,  1430 => 554,  1428 => 553,  1424 => 552,  1420 => 551,  1416 => 550,  1412 => 549,  1406 => 548,  1403 => 547,  1400 => 546,  1393 => 544,  1390 => 543,  1386 => 542,  1379 => 540,  1376 => 539,  1370 => 538,  1367 => 537,  1364 => 536,  1362 => 535,  1359 => 534,  1356 => 533,  1348 => 529,  1342 => 525,  1339 => 524,  1336 => 523,  1334 => 522,  1332 => 521,  1329 => 520,  1327 => 519,  1324 => 518,  1321 => 517,  1318 => 516,  1315 => 515,  1313 => 514,  1310 => 513,  1308 => 512,  1306 => 507,  1291 => 506,  1282 => 503,  1267 => 502,  1260 => 498,  1254 => 496,  1251 => 495,  1243 => 493,  1241 => 492,  1238 => 491,  1226 => 490,  1222 => 489,  1212 => 488,  1209 => 487,  1207 => 486,  1205 => 480,  1189 => 479,  1182 => 475,  1170 => 474,  1166 => 473,  1162 => 472,  1158 => 471,  1154 => 470,  1150 => 469,  1146 => 468,  1142 => 467,  1138 => 466,  1134 => 465,  1131 => 464,  1129 => 463,  1127 => 456,  1113 => 455,  1100 => 446,  1096 => 445,  1092 => 444,  1088 => 443,  1083 => 440,  1081 => 439,  1078 => 438,  1069 => 432,  1065 => 431,  1060 => 428,  1057 => 427,  1054 => 426,  1052 => 424,  1051 => 423,  1050 => 422,  1049 => 421,  1048 => 420,  1047 => 419,  1046 => 418,  1045 => 417,  1044 => 416,  1043 => 415,  1042 => 414,  1041 => 413,  1040 => 411,  1039 => 410,  1037 => 409,  1035 => 408,  1028 => 406,  1024 => 405,  1019 => 404,  1013 => 402,  1010 => 401,  1004 => 399,  1001 => 398,  989 => 396,  985 => 395,  976 => 393,  971 => 392,  968 => 390,  966 => 388,  964 => 387,  961 => 386,  958 => 385,  956 => 384,  953 => 383,  951 => 382,  950 => 360,  948 => 353,  934 => 352,  927 => 348,  924 => 346,  910 => 345,  890 => 331,  886 => 330,  882 => 329,  876 => 326,  872 => 325,  868 => 324,  864 => 323,  860 => 322,  854 => 319,  850 => 317,  847 => 316,  844 => 315,  842 => 314,  839 => 313,  836 => 312,  833 => 311,  830 => 310,  827 => 309,  824 => 308,  821 => 307,  818 => 306,  815 => 305,  812 => 304,  809 => 303,  807 => 302,  803 => 300,  800 => 299,  792 => 295,  789 => 294,  784 => 291,  780 => 290,  777 => 289,  774 => 288,  772 => 287,  768 => 285,  766 => 283,  765 => 282,  764 => 281,  763 => 279,  758 => 277,  752 => 274,  748 => 273,  744 => 271,  741 => 270,  738 => 269,  735 => 268,  732 => 267,  729 => 266,  726 => 265,  723 => 264,  720 => 263,  717 => 262,  714 => 261,  711 => 260,  709 => 259,  706 => 258,  703 => 257,  700 => 256,  698 => 255,  695 => 254,  692 => 253,  689 => 252,  687 => 251,  684 => 250,  682 => 249,  681 => 248,  680 => 247,  677 => 246,  675 => 245,  672 => 244,  670 => 243,  668 => 232,  654 => 231,  645 => 227,  631 => 226,  624 => 222,  622 => 219,  621 => 218,  619 => 217,  613 => 215,  611 => 214,  608 => 213,  606 => 212,  604 => 210,  590 => 209,  581 => 205,  567 => 204,  558 => 200,  544 => 199,  526 => 185,  522 => 184,  515 => 180,  510 => 177,  508 => 174,  505 => 173,  503 => 172,  502 => 171,  500 => 170,  486 => 169,  478 => 165,  475 => 164,  472 => 163,  469 => 162,  466 => 161,  464 => 160,  461 => 159,  458 => 158,  455 => 157,  453 => 156,  450 => 155,  447 => 154,  444 => 153,  442 => 152,  439 => 151,  436 => 150,  433 => 149,  430 => 148,  427 => 147,  425 => 146,  423 => 145,  420 => 144,  418 => 143,  416 => 141,  402 => 140,  394 => 135,  392 => 134,  387 => 133,  383 => 131,  381 => 130,  378 => 129,  376 => 128,  374 => 126,  360 => 125,  349 => 118,  345 => 117,  339 => 116,  336 => 115,  334 => 114,  329 => 112,  326 => 111,  323 => 110,  316 => 107,  312 => 106,  309 => 105,  306 => 104,  304 => 103,  301 => 102,  297 => 101,  289 => 97,  287 => 96,  284 => 95,  277 => 91,  273 => 90,  269 => 89,  266 => 88,  263 => 87,  261 => 86,  258 => 85,  247 => 83,  240 => 82,  233 => 81,  227 => 80,  222 => 79,  219 => 78,  215 => 77,  211 => 76,  206 => 75,  194 => 73,  190 => 72,  183 => 71,  175 => 69,  173 => 68,  166 => 67,  164 => 66,  161 => 65,  158 => 64,  156 => 62,  154 => 61,  152 => 60,  149 => 59,  147 => 58,  144 => 57,  141 => 56,  138 => 55,  136 => 54,  133 => 53,  130 => 52,  127 => 51,  125 => 50,  122 => 49,  120 => 48,  118 => 34,  104 => 33,  98 => 505,  94 => 500,  90 => 477,  86 => 453,  82 => 350,  78 => 343,  74 => 229,  70 => 224,  66 => 207,  62 => 202,  58 => 197,  54 => 167,  50 => 138,  46 => 123,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/basic_inputs_macros.html.twig", "/var/www/glpi/templates/components/form/basic_inputs_macros.html.twig");
    }
}
