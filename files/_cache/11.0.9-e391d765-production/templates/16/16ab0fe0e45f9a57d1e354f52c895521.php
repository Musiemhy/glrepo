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

/* components/form/fields_macros.html.twig */
class __TwigTemplate_bc758cf2685a406f9ad115d6939c999e extends Template
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
        // line 56
        yield "
";
        // line 78
        yield "
";
        // line 94
        yield "

";
        // line 120
        yield "
";
        // line 135
        yield "
";
        // line 149
        yield "

";
        // line 189
        yield "

";
        // line 203
        yield "

";
        // line 218
        yield "

";
        // line 279
        yield "

";
        // line 289
        yield "

";
        // line 299
        yield "

";
        // line 313
        yield "

";
        // line 340
        yield "

";
        // line 354
        yield "
";
        // line 367
        yield "
";
        // line 405
        yield "
";
        // line 441
        yield "
";
        // line 455
        yield "
";
        // line 459
        yield "
";
        // line 487
        yield "
";
        // line 516
        yield "
";
        // line 543
        yield "
";
        // line 568
        yield "
";
        // line 598
        yield "
";
        // line 613
        yield "
";
        // line 638
        yield "
";
        // line 657
        yield "
";
        // line 684
        yield "
";
        // line 711
        yield "
";
        // line 749
        yield "
";
        // line 787
        yield "
";
        // line 805
        yield "
";
        // line 851
        yield "
";
        // line 862
        yield "
";
        // line 872
        yield "

";
        // line 900
        yield "

";
        // line 965
        yield "

";
        // line 1003
        yield "
";
        // line 1008
        yield "
";
        // line 1047
        yield "
";
        yield from [];
    }

    // line 33
    public function macro_largeTitle($label = null, $icon = "", $first = false, $helper = "", ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "icon" => $icon,
            "first" => $first,
            "helper" => $helper,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 34
            yield "   ";
            $context["margins"] = "mt-3";
            // line 35
            yield "   ";
            if ((($tmp = ($context["first"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 36
                yield "      ";
                $context["margins"] = "mt-n2";
                // line 37
                yield "   ";
            }
            // line 38
            yield "
   <div class=\"card border-0 shadow-none p-0 m-0 ";
            // line 39
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["margins"] ?? null), "html", null, true);
            yield "\">
      <div class=\"card-header mb-3 pt-2 border-top rounded-0\">
         <h4 class=\"card-title ";
            // line 41
            yield (string) (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["icon"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ms-5") : (""));
            yield "\">
            ";
            // line 42
            if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["icon"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 43
                yield "               <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                  <i class=\"fs-2x ";
                // line 44
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
                yield "\"></i>
               </div>
            ";
            }
            // line 47
            yield "            ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield "
            ";
            // line 48
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["helper"] ?? null))) {
                // line 49
                yield "               <span class=\"form-help\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-html=\"true\"
                     data-bs-title=\"";
                // line 50
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helper"] ?? null), "html", null, true);
                yield "\">?</span>
            ";
            }
            // line 52
            yield "         </h4>
      </div>
   </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 57
    public function macro_smallTitle($label = null, $icon = "", $helper = "", $id = "", ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "icon" => $icon,
            "helper" => $helper,
            "id" => $id,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 58
            yield "   ";
            $context["margins"] = "mt-2 mb-2";
            // line 59
            yield "   ";
            $context["id"] = (((($context["id"] ?? null) != "")) ? (($context["id"] ?? null)) : (("formsection" . Twig\Extension\CoreExtension::random($this->env->getCharset()))));
            // line 60
            yield "
   <div class=\"card border-0 shadow-none p-0 m-0 ";
            // line 61
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["margins"] ?? null), "html", null, true);
            yield "\">
      <div id=\"";
            // line 62
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "\" class=\"card-header mb-1 p-0 ps-3 py-1\">
         <h4 class=\"card-subtitle ";
            // line 63
            yield (string) (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["icon"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ms-4") : (""));
            yield "\">
            ";
            // line 64
            if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["icon"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 65
                yield "               <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                  <i class=\"fs-2x ";
                // line 66
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["icon"] ?? null), "html", null, true);
                yield "\"></i>
               </div>
            ";
            }
            // line 69
            yield "             <span class=\"ms-2\">";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield "</span>
            ";
            // line 70
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["helper"] ?? null))) {
                // line 71
                yield "               <span class=\"form-help\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-html=\"true\"
                     data-bs-title=\"";
                // line 72
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["helper"] ?? null), "html", null, true);
                yield "\">?</span>
            ";
            }
            // line 74
            yield "         </h4>
      </div>
   </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 79
    public function macro_autoNameField($name = null, $item = null, $label = "", $withtemplate = 0, $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "item" => $item,
            "label" => $label,
            "withtemplate" => $withtemplate,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 80
            yield "   ";
            $context["tpl_value"] = (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "value", [], "any", true, true, false, 80) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "value", [], "any", false, false, false, 80)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "value", [], "any", false, false, false, 80)) : (""))) > 0)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "value", [], "any", false, false, false, 80)) : ((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 80)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(($_v1 = ($context["name"] ?? null)) instanceof \Stringable ? (string) $_v1 : $_v1)] ?? null) : null)));
            // line 81
            yield "   ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isTemplate", [], "method", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " ";
                // line 82
                yield "       ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["tpl_mark" => CoreExtension::getAttribute($this->env, $this->source,                 // line 83
($context["item"] ?? null), "getAutofillMark", [($context["name"] ?? null), ["withtemplate" => ($context["withtemplate"] ?? null)], ($context["tpl_value"] ?? null)], "method", false, false, false, 83)]);
                // line 85
                yield "   ";
            }
            // line 86
            yield "   ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 86), ($context["name"] ?? null), [], "array", true, true, false, 86) &&  !(null === (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 86)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[(($_v3 = ($context["name"] ?? null)) instanceof \Stringable ? (string) $_v3 : $_v3)] ?? null) : null)))) {
                // line 87
                yield "      ";
                $context["value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("autoName", [(($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 87)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[(($_v5 = ($context["name"] ?? null)) instanceof \Stringable ? (string) $_v5 : $_v5)] ?? null) : null), ($context["name"] ?? null), (($context["withtemplate"] ?? null) == 2), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 87), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 87), "entities_id", [], "array", true, true, false, 87) &&  !(null === (($_v6 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 87)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["entities_id"] ?? null) : null)))) ? ((($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 87)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["entities_id"] ?? null) : null)) : (null))]);
                // line 88
                yield "   ";
            } else {
                // line 89
                yield "      ";
                $context["value"] = null;
                // line 90
                yield "   ";
            }
            // line 91
            yield "
   ";
            // line 92
            yield (string) $this->getTemplateForMacro("macro_textField", $context, 92, $this->getSourceContext())->macro_textField(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 96
    public function macro_textField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 97
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%"],             // line 99
($context["options"] ?? null));
            // line 100
            yield "
   ";
            // line 101
            if (CoreExtension::inFilter(($context["name"] ?? null), ["name"])) {
                // line 102
                yield "        ";
                $context["current_attrs"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", true, true, false, 102)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 102), [])) : ([]));
                // line 103
                yield "
         ";
                // line 104
                if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["current_attrs"] ?? null), "autocomplete", [], "any", true, true, false, 104)) {
                    // line 105
                    yield "            ";
                    $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["additional_attributes" => Twig\Extension\CoreExtension::merge(                    // line 106
($context["current_attrs"] ?? null), ["autocomplete" => "off"])]);
                    // line 110
                    yield "         ";
                }
                // line 111
                yield "   ";
            }
            // line 112
            yield "
   ";
            // line 113
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 114
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 114)->unwrap();
                // line 115
                yield "        ";
                yield (string) $macros["_inputs"]->getTemplateForMacro("macro_text", $context, 115, $this->getSourceContext())->macro_text(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
                yield "
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 117
            yield "
   ";
            // line 118
            yield (string) $this->getTemplateForMacro("macro_field", $context, 118, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 121
    public function macro_urlField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 122
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%"],             // line 124
($context["options"] ?? null));
            // line 125
            yield "
    ";
            // line 126
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 127
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 127)->unwrap();
                // line 128
                yield "        ";
                yield (string) $macros["_inputs"]->getTemplateForMacro("macro_input", $context, 128, $this->getSourceContext())->macro_input(...[($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["type" => "url"])]);
                // line 130
                yield "
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 132
            yield "
    ";
            // line 133
            yield (string) $this->getTemplateForMacro("macro_field", $context, 133, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 136
    public function macro_checkboxField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 137
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%", "center" => true],             // line 140
($context["options"] ?? null));
            // line 141
            yield "
    ";
            // line 142
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 143
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 143)->unwrap();
                // line 144
                yield "        ";
                yield (string) $macros["_inputs"]->getTemplateForMacro("macro_checkbox", $context, 144, $this->getSourceContext())->macro_checkbox(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
                yield "
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 146
            yield "
    ";
            // line 147
            yield (string) $this->getTemplateForMacro("macro_field", $context, 147, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 151
    public function macro_sliderField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 152
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 152), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 152)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 152), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 152), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 153
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true],                 // line 155
($context["options"] ?? null));
                // line 156
                yield "   ";
            }
            // line 157
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 157), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 157)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 157), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 157), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 158
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 159
                yield "   ";
            }
            // line 160
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["no_value" => 0, "yes_value" => 1, "readonly" => false, "required" => false, "disabled" => false, "additional_attributes" => [], "label2" => ""],             // line 168
($context["options"] ?? null));
            // line 169
            yield "
   ";
            // line 170
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 171
                yield "      <label class=\"form-check form-switch mt-2\">
         <input type=\"hidden\"   name=\"";
                // line 172
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" value=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "no_value", [], "any", false, false, false, 172), "html", null, true);
                yield "\" />
         <input type=\"checkbox\" name=\"";
                // line 173
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\" value=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "yes_value", [], "any", false, false, false, 173), "html", null, true);
                yield "\" class=\"form-check-input\" id=\"%id%\"
                ";
                // line 174
                yield (string) (((($context["value"] ?? null) == 1)) ? ("checked") : (""));
                yield "
                ";
                // line 175
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 175)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("readonly") : (""));
                yield "
                ";
                // line 176
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 176)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("required") : (""));
                yield "
                ";
                // line 177
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 177)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disabled") : (""));
                yield "
                ";
                // line 178
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "additional_attributes", [], "any", false, false, false, 178));
                foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
                    // line 179
                    yield "                    ";
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
                // line 180
                yield " />
         ";
                // line 181
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "label2", [], "any", false, false, false, 181)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 182
                    yield "            <span class=\"form-check-label\">";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "label2", [], "any", false, false, false, 182), "html", null, true);
                    yield "</span>
         ";
                }
                // line 184
                yield "      </label>
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 186
            yield "
   ";
            // line 187
            yield (string) $this->getTemplateForMacro("macro_field", $context, 187, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 191
    public function macro_numberField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 192
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%"],             // line 194
($context["options"] ?? null));
            // line 195
            yield "
    ";
            // line 196
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 197
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 197)->unwrap();
                // line 198
                yield "        ";
                yield (string) $macros["_inputs"]->getTemplateForMacro("macro_number", $context, 198, $this->getSourceContext())->macro_number(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
                yield "
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 200
            yield "
    ";
            // line 201
            yield (string) $this->getTemplateForMacro("macro_field", $context, 201, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 205
    public function macro_readOnlyField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 206
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
            // line 207
            yield "   ";
            $context["value"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 208
                yield "      <span class=\"form-control ";
                yield (string) (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", true, true, false, 208) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 208)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_addclass", [], "any", false, false, false, 208), "html", null, true)) : (""));
                yield "\" readonly>
         ";
                // line 209
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["value"] ?? null)) == 0)) {
                    // line 210
                    yield "            &nbsp;
         ";
                } else {
                    // line 212
                    yield "            ";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                    yield "
         ";
                }
                // line 214
                yield "      </span>
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 216
            yield "   ";
            yield (string) $this->getTemplateForMacro("macro_field", $context, 216, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 220
    public function macro_textareaField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 221
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "enable_richtext" => false, "enable_images" => true, "enable_fileupload" => false, "mention_options" => ["enabled" => (CoreExtension::getAttribute($this->env, $this->source,             // line 227
($context["options"] ?? null), "enable_mentions", [], "any", true, true, false, 227) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_mentions", [], "any", false, false, false, 227)) && $tmp instanceof Markup ? (string) $tmp : $tmp)), "full" => true, "users" => []], "entities_id" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"), "uploads" => [], "rows" => 3, "readonly" => false],             // line 235
($context["options"] ?? null));
            // line 236
            yield "
   ";
            // line 237
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", true, true, false, 237)) {
                // line 238
                yield "       ";
                // line 239
                yield "       ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["id" => ((Html::sanitizeDomId(($context["name"] ?? null)) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 239))], ($context["options"] ?? null));
                // line 240
                yield "   ";
            }
            // line 241
            yield "
   ";
            // line 242
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 243
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 243)->unwrap();
                // line 244
                yield "        ";
                yield (string) $macros["_inputs"]->getTemplateForMacro("macro_textarea", $context, 244, $this->getSourceContext())->macro_textarea(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
                yield "
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 246
            yield "
   ";
            // line 247
            $context["add_html"] = "";
            // line 248
            yield "   ";
            if (( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 248)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_fileupload", [], "any", false, false, false, 248)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 249
                yield "      ";
                $context["add_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 250
                    yield "         ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [["editor_id" => CoreExtension::getAttribute($this->env, $this->source,                     // line 251
($context["options"] ?? null), "id", [], "any", false, false, false, 251), "multiple" => true, "uploads" => CoreExtension::getAttribute($this->env, $this->source,                     // line 253
($context["options"] ?? null), "uploads", [], "any", false, false, false, 253), "required" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 254
($context["options"] ?? null), "fields_template", [], "any", false, true, false, 254), "isMandatoryField", ["_documents_id"], "method", true, true, false, 254)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 254), "isMandatoryField", ["_documents_id"], "method", false, false, false, 254), false)) : (false))]]);
                    // line 256
                    yield "      ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 257
                yield "   ";
            } elseif (((( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 257)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_fileupload", [], "any", false, false, false, 257)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 257)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "enable_images", [], "any", false, false, false, 257)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 258
                yield "      ";
                $context["add_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 259
                    yield "         ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [["editor_id" => CoreExtension::getAttribute($this->env, $this->source,                     // line 260
($context["options"] ?? null), "id", [], "any", false, false, false, 260), "name" =>                     // line 261
($context["name"] ?? null), "only_uploaded_files" => true, "uploads" => CoreExtension::getAttribute($this->env, $this->source,                     // line 263
($context["options"] ?? null), "uploads", [], "any", false, false, false, 263), "required" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 264
($context["options"] ?? null), "fields_template", [], "any", false, true, false, 264), "isMandatoryField", ["_documents_id"], "method", true, true, false, 264)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 264), "isMandatoryField", ["_documents_id"], "method", false, false, false, 264), false)) : (false)), "init" => (((CoreExtension::getAttribute($this->env, $this->source,                     // line 265
($context["options"] ?? null), "init_fileupload", [], "any", true, true, false, 265) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "init_fileupload", [], "any", false, false, false, 265)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "init_fileupload", [], "any", false, false, false, 265)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "init", [], "any", true, true, false, 265) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "init", [], "any", false, false, false, 265)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "init", [], "any", false, false, false, 265)) : (true))))]]);
                    // line 267
                    yield "      ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 268
                yield "   ";
            }
            // line 269
            yield "
   ";
            // line 270
            if ((($context["add_html"] ?? null) != "")) {
                // line 271
                yield "      ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", true, true, false, 271)) {
                    // line 272
                    yield "         ";
                    $context["add_html"] = (($context["add_html"] ?? null) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 272));
                    // line 273
                    yield "      ";
                }
                // line 274
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["add_field_html" => ($context["add_html"] ?? null)]);
                // line 275
                yield "   ";
            }
            // line 276
            yield "
   ";
            // line 277
            yield (string) $this->getTemplateForMacro("macro_field", $context, 277, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 281
    public function macro_dateField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 282
            yield "   ";
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 283
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 283)->unwrap();
                // line 284
                yield "        ";
                yield (string) $macros["_inputs"]->getTemplateForMacro("macro_date", $context, 284, $this->getSourceContext())->macro_date(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
                yield "
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 286
            yield "
   ";
            // line 287
            yield (string) $this->getTemplateForMacro("macro_field", $context, 287, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 291
    public function macro_datetimeField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 292
            yield "   ";
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 293
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 293)->unwrap();
                // line 294
                yield "        ";
                yield (string) $macros["_inputs"]->getTemplateForMacro("macro_datetime", $context, 294, $this->getSourceContext())->macro_datetime(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
                yield "
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 296
            yield "
   ";
            // line 297
            yield (string) $this->getTemplateForMacro("macro_field", $context, 297, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 301
    public function macro_colorField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 302
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%"],             // line 304
($context["options"] ?? null));
            // line 305
            yield "
    ";
            // line 306
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 307
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 307)->unwrap();
                // line 308
                yield "        ";
                yield (string) $macros["_inputs"]->getTemplateForMacro("macro_color", $context, 308, $this->getSourceContext())->macro_color(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
                yield "
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 310
            yield "
    ";
            // line 311
            yield (string) $this->getTemplateForMacro("macro_field", $context, 311, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 315
    public function macro_passwordField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 316
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%", "can_regenerate" => (((CoreExtension::getAttribute($this->env, $this->source,             // line 318
($context["options"] ?? null), "can_regenerate", [], "any", true, true, false, 318) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "can_regenerate", [], "any", false, false, false, 318)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "can_regenerate", [], "any", false, false, false, 318)) : (false)), "clearable" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 319
($context["options"] ?? null), "clearable", [], "any", true, true, false, 319)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "clearable", [], "any", false, false, false, 319)) : ( !(($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", true, true, false, 319) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 319)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 319)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp))), "is_copyable" => (((CoreExtension::getAttribute($this->env, $this->source,             // line 320
($context["options"] ?? null), "is_disclosable", [], "any", true, true, false, 320) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 320)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_disclosable", [], "any", false, false, false, 320)) : (false))],             // line 321
($context["options"] ?? null));
            // line 322
            yield "
    ";
            // line 323
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 324
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 324)->unwrap();
                // line 325
                yield "        ";
                yield (string) $macros["_inputs"]->getTemplateForMacro("macro_password", $context, 325, $this->getSourceContext())->macro_password(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
                yield "
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 327
            yield "
   ";
            // line 329
            yield "   ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "can_regenerate", [], "any", false, false, false, 329)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 330
                yield "      ";
                $context["regenerate_chk"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 331
                    yield "         <div class=\"d-flex align-items-center gap-1 mt-1\">
             <input class=\"form-check-input\" type=\"checkbox\" name=\"_regenerate_";
                    // line 332
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                    yield "\" id=\"_regenerate_";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                    yield "\"><label class=\"form-check-label\" for=\"_regenerate_";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                    yield "\">";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Regenerate"), "html", null, true);
                    yield "</label>
         </div>
      ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 335
                yield "      ";
                $context["field"] = (($context["field"] ?? null) . ($context["regenerate_chk"] ?? null));
                // line 336
                yield "   ";
            }
            // line 337
            yield "
   ";
            // line 338
            yield (string) $this->getTemplateForMacro("macro_field", $context, 338, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 342
    public function macro_emailField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 343
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%"],             // line 345
($context["options"] ?? null));
            // line 346
            yield "
    ";
            // line 347
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 348
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 348)->unwrap();
                // line 349
                yield "        ";
                yield (string) $macros["_inputs"]->getTemplateForMacro("macro_email", $context, 349, $this->getSourceContext())->macro_email(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
                yield "
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 351
            yield "
   ";
            // line 352
            yield (string) $this->getTemplateForMacro("macro_field", $context, 352, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 355
    public function macro_fileField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 356
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%", "rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "simple" => false],             // line 360
($context["options"] ?? null));
            // line 361
            yield "   ";
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 362
                yield "        ";
                $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 362)->unwrap();
                // line 363
                yield "        ";
                yield (string) $macros["_inputs"]->getTemplateForMacro("macro_file", $context, 363, $this->getSourceContext())->macro_file(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
                yield "
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 365
            yield "   ";
            yield (string) $this->getTemplateForMacro("macro_field", $context, 365, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 368
    public function macro_imageField($name = null, $value = null, $label = "", $options = [], $link_options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "link_options" => $link_options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 369
            yield "   ";
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 370
                yield "      <div class=\"img-overlay-wrapper position-relative\">
         ";
                // line 371
                $context["clearable"] = (($_v8 = ($context["options"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["clearable"] ?? null) : null);
                // line 372
                yield "         ";
                $context["url"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "url", [], "array", true, true, false, 372) &&  !(null === (($_v9 = ($context["options"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["url"] ?? null) : null)))) ? ((($_v10 = ($context["options"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["url"] ?? null) : null)) : (null));
                // line 373
                yield "         ";
                $context["options"] = Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), ($context["options"] ?? null), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return ((($context["k"] ?? null) != "url") && (($context["k"] ?? null) != "clearable")); });
                // line 374
                yield "         ";
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["url"] ?? null))) {
                    // line 375
                    yield "            <a href=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url"] ?? null), "html", null, true);
                    yield "\" ";
                    yield (string) $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", [($context["link_options"] ?? null)]);
                    yield ">
         ";
                }
                // line 377
                yield "               <img src=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                yield "\" ";
                yield (string) $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", [($context["options"] ?? null)]);
                yield " />
         ";
                // line 378
                if ( !Twig\Extension\CoreExtension::testEmpty(($context["url"] ?? null))) {
                    // line 379
                    yield "            </a>
         ";
                }
                // line 381
                yield "         ";
                if ((($tmp = ($context["clearable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 382
                    yield "            <input type=\"hidden\" name=\"_blank_";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                    yield "\" />";
                    // line 383
                    $context["clear_js"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 384
                        yield "const blank_input = \$(\x27input[name=\\\x27_blank_";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "css"), "js"), "html", null, true);
                        yield "\\\x27]\x27);
                 blank_input.val(blank_input.val() ? \x27\x27 : true);
                 if (\$(this).closest(\x27.picture_gallery_item\x27).length) {
                    \$(this).closest(\x27.picture_gallery_item\x27).hide();
                    \$(this).closest(\x27.picture_gallery\x27).siblings(\x27.deletion_pending\x27).removeClass(\x27d-none\x27);
                 } else {
                    \$(this).closest(\x27.img-overlay-wrapper\x27).hide();
                 }";
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 393
                    yield "<button type=\"button\" class=\"btn p-2 position-absolute top-0 start-0\" title=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete"), "html", null, true);
                    yield "\"
                    onclick=\"";
                    // line 394
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["clear_js"] ?? null), "html", null, true);
                    yield "\">
               <i class=\"ti ti-x\"></i>
            </button>
         ";
                }
                // line 398
                yield "      </div>
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 400
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 400), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 400)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 400), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 400), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 401
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 402
                yield "   ";
            }
            // line 403
            yield "   ";
            yield (string) $this->getTemplateForMacro("macro_field", $context, 403, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 406
    public function macro_imageGalleryField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 407
            yield "   ";
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 408
                yield "       <div class=\"text-warning deletion_pending d-none\">
           ";
                // line 409
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The deletion will only take effect after saving the form"), "html", null, true);
                yield "
       </div>
      <div class=\"picture_gallery d-flex flex-wrap overflow-auto p-3\">
         ";
                // line 412
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["value"] ?? null));
                foreach ($context['_seq'] as $context["i"] => $context["picture"]) {
                    // line 413
                    yield "            <div class=\"picture_gallery_item\" style=\"position: relative; width: fit-content\">
               ";
                    // line 414
                    yield (string) $this->getTemplateForMacro("macro_imageField", $context, 414, $this->getSourceContext())->macro_imageField(...[((($context["name"] ?? null) . "_") . $context["i"]), $context["picture"], "", ["style" => "max-width: 300px; max-height: 150px", "class" => "picture_square", "clearable" => (($_v11 =                     // line 417
($context["options"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["clearable"] ?? null) : null), "no_label" => true]]);
                    // line 419
                    yield "
            </div>
         ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['i'], $context['picture'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 422
                yield "      </div>
      ";
                // line 423
                yield (string) $this->getTemplateForMacro("macro_fileField", $context, 423, $this->getSourceContext())->macro_fileField(...[($context["name"] ?? null), null, "", ["onlyimages" => true, "multiple" => true]]);
                // line 426
                yield "
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 428
            yield "
   ";
            // line 429
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 429), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 429)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 429), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 429), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 430
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 431
                yield "   ";
            }
            // line 432
            yield "
   ";
            // line 433
            $context["id"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", true, true, false, 433) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 433)) > 0))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 433)) : (((Html::sanitizeDomId(($context["name"] ?? null)) . "_") . (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", true, true, false, 433) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 433)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 433)) : ("")))));
            // line 434
            yield "   ";
            $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 434)->unwrap();
            // line 435
            yield "   ";
            yield (string) $macros["_inputs"]->getTemplateForMacro("macro_label", $context, 435, $this->getSourceContext())->macro_label(...[($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null)]);
            yield "
   ";
            // line 436
            yield (string) $this->getTemplateForMacro("macro_field", $context, 436, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["full_width" => true, "no_label" => true])]);
            // line 439
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 442
    public function macro_hiddenField($name = null, $value = null, $options = [], ...$varargs): string|Markup
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
            // line 443
            yield "    ";
            if ( !is_iterable(($context["options"] ?? null))) {
                // line 444
                yield "        ";
                // line 450
                yield "        ";
                $context["options"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["varargs"] ?? null), 0, [], "array", true, true, false, 450)) ? (Twig\Extension\CoreExtension::default((($_v12 = ($context["varargs"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[0] ?? null) : null), [])) : ([]));
                // line 451
                yield "    ";
            }
            // line 452
            yield "    ";
            $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 452)->unwrap();
            // line 453
            yield "    ";
            yield (string) $macros["_inputs"]->getTemplateForMacro("macro_hidden", $context, 453, $this->getSourceContext())->macro_hidden(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 456
    public function macro_csrfField(...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 457
            yield "    ";
            yield (string) $this->getTemplateForMacro("macro_hiddenField", $context, 457, $this->getSourceContext())->macro_hiddenField(...["_glpi_csrf_token", Session::getNewCSRFToken()]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 460
    public function macro_dropdownNumberField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 461
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%", "disabled" => false],             // line 465
($context["options"] ?? null));
            // line 466
            yield "
   ";
            // line 467
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 467), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 467)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 467), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 467), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 468
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 469
                yield "   ";
            }
            // line 470
            yield "
   ";
            // line 471
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 471)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 472
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 473
                yield "   ";
            }
            // line 474
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 474), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 474)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 474), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 474), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 475
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 476
                yield "   ";
            }
            // line 477
            yield "
   ";
            // line 478
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 479
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showNumber", [($context["name"] ?? null), Twig\Extension\CoreExtension::merge(["value" =>                 // line 480
($context["value"] ?? null), "rand" => CoreExtension::getAttribute($this->env, $this->source,                 // line 481
($context["options"] ?? null), "rand", [], "any", false, false, false, 481)],                 // line 482
($context["options"] ?? null))]);
                // line 483
                yield "   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 484
            yield "
   ";
            // line 485
            yield (string) $this->getTemplateForMacro("macro_field", $context, 485, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 485))])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 488
    public function macro_dropdownArrayField($name = null, $value = null, $elements = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "elements" => $elements,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 489
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "disabled" => false, "width" => "100%"],             // line 493
($context["options"] ?? null));
            // line 494
            yield "
   ";
            // line 495
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 495), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 495)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 495), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 495), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 496
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 497
                yield "   ";
            }
            // line 498
            yield "
   ";
            // line 499
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 499)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 500
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 501
                yield "   ";
            }
            // line 502
            yield "
   ";
            // line 503
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 503), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 503)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 503), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 503), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 504
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 505
                yield "   ";
            }
            // line 506
            yield "
   ";
            // line 507
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 508
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showFromArray", [($context["name"] ?? null), ($context["elements"] ?? null), Twig\Extension\CoreExtension::merge(["value" =>                 // line 509
($context["value"] ?? null), "rand" => CoreExtension::getAttribute($this->env, $this->source,                 // line 510
($context["options"] ?? null), "rand", [], "any", false, false, false, 510)],                 // line 511
($context["options"] ?? null))]);
                // line 512
                yield "   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 513
            yield "
   ";
            // line 514
            yield (string) $this->getTemplateForMacro("macro_field", $context, 514, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 514))])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 517
    public function macro_dropdownTimestampField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 518
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%", "disabled" => false],             // line 522
($context["options"] ?? null));
            // line 523
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 523), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 523)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 523), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 523), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 524
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 525
                yield "   ";
            }
            // line 526
            yield "
   ";
            // line 527
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 527), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 527)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 527), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 527), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 528
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 529
                yield "   ";
            }
            // line 530
            yield "
   ";
            // line 531
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 531)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 532
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 533
                yield "   ";
            }
            // line 534
            yield "
   ";
            // line 535
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 536
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showTimestamp", [($context["name"] ?? null), Twig\Extension\CoreExtension::merge(["value" =>                 // line 537
($context["value"] ?? null)],                 // line 538
($context["options"] ?? null))]);
                // line 539
                yield "   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 540
            yield "
   ";
            // line 541
            yield (string) $this->getTemplateForMacro("macro_field", $context, 541, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 541))])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 544
    public function macro_dropdownYesNo($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 545
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%", "disabled" => false],             // line 549
($context["options"] ?? null));
            // line 550
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 550), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 550)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 550), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 550), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 551
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 552
                yield "   ";
            }
            // line 553
            yield "
   ";
            // line 554
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 554), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 554)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 554), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 554), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 555
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 556
                yield "   ";
            }
            // line 557
            yield "
   ";
            // line 558
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 558)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 559
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 560
                yield "   ";
            }
            // line 561
            yield "
   ";
            // line 562
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 563
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showYesNo", [($context["name"] ?? null), ($context["value"] ?? null),  -1, ($context["options"] ?? null)]);
                // line 564
                yield "   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 565
            yield "
   ";
            // line 566
            yield (string) $this->getTemplateForMacro("macro_field", $context, 566, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 566))])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 569
    public function macro_dropdownItemTypes($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 570
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%", "disabled" => false],             // line 574
($context["options"] ?? null));
            // line 575
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 575), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 575)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 575), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 575), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 576
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 577
                yield "   ";
            }
            // line 578
            yield "
   ";
            // line 579
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 579), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 579)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 579), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 579), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 580
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 581
                yield "   ";
            }
            // line 582
            yield "
   ";
            // line 583
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 583)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 584
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 585
                yield "   ";
            }
            // line 586
            yield "
   ";
            // line 587
            $context["types"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "types", [], "array", true, true, false, 587)) ? (Twig\Extension\CoreExtension::default((($_v13 = ($context["options"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["types"] ?? null) : null), [])) : ([]));
            // line 588
            yield "
   ";
            // line 589
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 590
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showItemTypes", [($context["name"] ?? null), ($context["types"] ?? null), Twig\Extension\CoreExtension::merge(["rand" => CoreExtension::getAttribute($this->env, $this->source,                 // line 591
($context["options"] ?? null), "rand", [], "any", false, false, false, 591), "value" =>                 // line 592
($context["value"] ?? null)],                 // line 593
($context["options"] ?? null))]);
                // line 594
                yield "   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 595
            yield "
   ";
            // line 596
            yield (string) $this->getTemplateForMacro("macro_field", $context, 596, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 596))])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 599
    public function macro_dropdownItemsFromItemtypes($name = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 600
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset())],             // line 602
($context["options"] ?? null));
            // line 603
            yield "
   ";
            // line 604
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 604), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 604)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 604), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 604), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 605
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 606
                yield "   ";
            }
            // line 607
            yield "
   ";
            // line 608
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 609
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showSelectItemFromItemtypes", [($context["options"] ?? null)]);
                // line 610
                yield "   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 611
            yield "   ";
            yield (string) $this->getTemplateForMacro("macro_field", $context, 611, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 611))])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 614
    public function macro_dropdownIcons($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 615
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%", "disabled" => false],             // line 619
($context["options"] ?? null));
            // line 620
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 620), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 620)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 620), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 620), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 621
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 622
                yield "   ";
            }
            // line 623
            yield "
   ";
            // line 624
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 624), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 624)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 624), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 624), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 625
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 626
                yield "   ";
            }
            // line 627
            yield "
   ";
            // line 628
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 628)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 629
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 630
                yield "   ";
            }
            // line 631
            yield "
   ";
            // line 632
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 633
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::dropdownIcons", [($context["name"] ?? null), ($context["value"] ?? null), "", ($context["options"] ?? null)]);
                // line 634
                yield "   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 635
            yield "
   ";
            // line 636
            yield (string) $this->getTemplateForMacro("macro_field", $context, 636, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 636))])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 639
    public function macro_dropdownWebIcons($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 640
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset())], Twig\Extension\CoreExtension::merge(            // line 642
($context["options"] ?? null), ["noselect2" => true]));
            // line 645
            yield "    ";
            // line 646
            yield "    ";
            $context["value"] = Twig\Extension\CoreExtension::replace(($context["value"] ?? null), ["ti " => ""]);
            // line 647
            yield "
    ";
            // line 648
            yield (string) $this->getTemplateForMacro("macro_dropdownArrayField", $context, 648, $this->getSourceContext())->macro_dropdownArrayField(...[($context["name"] ?? null), ($context["value"] ?? null), [ (string)($context["value"] ?? null) => ($context["value"] ?? null)], ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
    <script type=\"module\">
        import(\x27/js/modules/Form/WebIconSelector.js\x27).then((m) => {
            const dropdown_id = \x27";
            // line 651
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace((("dropdown_" . ($context["name"] ?? null)) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 651)), ["[" => "_", "]" => "_"]), "js"), "html", null, true);
            yield "\x27;
            const selector = new m.default(document.getElementById(dropdown_id));
            selector.init();
        });
    </script>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 658
    public function macro_dropdownHoursField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 659
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%", "disabled" => false],             // line 663
($context["options"] ?? null));
            // line 664
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 664), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 664)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 664), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 664), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 665
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 666
                yield "   ";
            }
            // line 667
            yield "
   ";
            // line 668
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 668), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 668)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 668), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 668), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 669
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 670
                yield "   ";
            }
            // line 671
            yield "
   ";
            // line 672
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 672)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 673
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 674
                yield "   ";
            }
            // line 675
            yield "
   ";
            // line 676
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 677
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showHours", [($context["name"] ?? null), Twig\Extension\CoreExtension::merge(["value" =>                 // line 678
($context["value"] ?? null)],                 // line 679
($context["options"] ?? null))]);
                // line 680
                yield "   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 681
            yield "
   ";
            // line 682
            yield (string) $this->getTemplateForMacro("macro_field", $context, 682, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 682))])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 685
    public function macro_dropdownFrequency($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 686
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "disabled" => false],             // line 689
($context["options"] ?? null));
            // line 690
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 690), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 690)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 690), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 690), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 691
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["required" => true], ($context["options"] ?? null));
                // line 692
                yield "   ";
            }
            // line 693
            yield "
   ";
            // line 694
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 694), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 694)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 694), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 694), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 695
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 696
                yield "   ";
            }
            // line 697
            yield "
   ";
            // line 698
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 698)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 699
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 700
                yield "   ";
            }
            // line 701
            yield "
   ";
            // line 702
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 703
                yield "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showFrequency", [($context["name"] ?? null), ($context["value"] ?? null), Twig\Extension\CoreExtension::merge(["width" => "100%", "value" =>                 // line 705
($context["value"] ?? null)],                 // line 706
($context["options"] ?? null))]);
                // line 707
                yield "   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 708
            yield "
   ";
            // line 709
            yield (string) $this->getTemplateForMacro("macro_field", $context, 709, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 709))])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 712
    public function macro_dropdownField($itemtype = null, $name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "itemtype" => $itemtype,
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 713
            yield "   ";
            if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", true, true, false, 713) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 713)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 713)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 714
                yield "      ";
                // line 715
                yield "      ";
                $context["defined_input_name"] = (("_" . ($context["name"] ?? null)) . "_defined");
                // line 716
                yield "      <input type=\"hidden\" name=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["defined_input_name"] ?? null), "html", null, true);
                yield "\" value=\"1\"></input>

      ";
                // line 719
                yield "      ";
                $context["name"] = (($context["name"] ?? null) . "[]");
                // line 720
                yield "   ";
            }
            // line 721
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%", "disabled" => false],             // line 725
($context["options"] ?? null));
            // line 726
            yield "   ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 726), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 726)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 726), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 726), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 727
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 728
                yield "   ";
            }
            // line 729
            yield "
   ";
            // line 730
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 730), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 730)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 730), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 730), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 731
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 732
                yield "   ";
            }
            // line 733
            yield "
   ";
            // line 734
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 734)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 735
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 736
                yield "   ";
            }
            // line 737
            yield "
   ";
            // line 738
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 739
                yield "      ";
                yield (string) $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeDropdown(($context["itemtype"] ?? null), Twig\Extension\CoreExtension::merge(["name" =>                 // line 740
($context["name"] ?? null), "value" =>                 // line 741
($context["value"] ?? null)],                 // line 742
($context["options"] ?? null)));
                yield "
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 744
            yield "
   ";
            // line 745
            if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(($context["field"] ?? null)))) {
                // line 746
                yield "      ";
                yield (string) $this->getTemplateForMacro("macro_field", $context, 746, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 746))])]);
                yield "
   ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 750
    public function macro_dropdownAjaxField($url = null, $name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "url" => $url,
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 751
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 751)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 752
                yield "        ";
                // line 753
                yield "        ";
                $context["defined_input_name"] = (("_" . ($context["name"] ?? null)) . "_defined");
                // line 754
                yield "        <input type=\"hidden\" name=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["defined_input_name"] ?? null), "html", null, true);
                yield "\" value=\"1\"></input>

        ";
                // line 757
                yield "        ";
                $context["name"] = (($context["name"] ?? null) . "[]");
                // line 758
                yield "    ";
            }
            // line 759
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "width" => "100%"],             // line 762
($context["options"] ?? null));
            // line 763
            yield "    ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 763), "isMandatoryField", [($context["name"] ?? null)], "method", true, true, false, 763)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 763), "isMandatoryField", [($context["name"] ?? null)], "method", false, false, false, 763), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 764
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 765
                yield "    ";
            }
            // line 766
            yield "
    ";
            // line 767
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 767), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 767)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 767), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 767), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 768
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 769
                yield "    ";
            }
            // line 770
            yield "
    ";
            // line 771
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 771)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 772
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 773
                yield "    ";
            }
            // line 774
            yield "
    ";
            // line 775
            $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => (("dropdown_" . Twig\Extension\CoreExtension::replace(            // line 776
($context["name"] ?? null), ["[" => "_", "]" => "_"])) . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 776))]);
            // line 778
            yield "    ";
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 779
                yield "        ";
                $context["ajax_opts"] = Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), ($context["options"] ?? null), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return CoreExtension::inFilter(($context["k"] ?? null), ["templateResult", "templateSelection", "rand"]); });
                // line 780
                yield "        ";
                yield (string) $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::jsAjaxDropdown", [($context["name"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 780), ($context["url"] ?? null), ($context["ajax_opts"] ?? null)]);
                yield "
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 782
            yield "
    ";
            // line 783
            if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim(($context["field"] ?? null)))) {
                // line 784
                yield "        ";
                yield (string) $this->getTemplateForMacro("macro_field", $context, 784, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
                yield "
    ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 788
    public function macro_htmlField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 789
            yield "   ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["value"] ?? null)) == 0)) {
                // line 790
                yield "      ";
                $context["value"] = "&nbsp;";
                // line 791
                yield "   ";
            }
            // line 792
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["wrapper_class" => "form-control-plaintext"],             // line 794
($context["options"] ?? null));
            // line 795
            yield "
   ";
            // line 796
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 796), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 796)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 796), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 796), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 797
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 798
                yield "   ";
            }
            // line 799
            yield "
   ";
            // line 800
            $context["value"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 801
                yield "      <span class=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "wrapper_class", [], "any", false, false, false, 801), "html", null, true);
                yield "\">";
                yield (string) ($context["value"] ?? null);
                yield "</span>
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 803
            yield "   ";
            yield (string) $this->getTemplateForMacro("macro_field", $context, 803, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 806
    public function macro_field($name = null, $field = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "field" => $field,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 807
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset()), "is_horizontal" => true, "include_field" => true, "add_field_html" => "", "locked" => false, "locked_fields" => [], "no_label" => false],             // line 815
($context["options"] ?? null));
            // line 816
            yield "
   ";
            // line 817
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, true, false, 817), ($context["name"] ?? null), [], "array", true, true, false, 817)) {
                // line 818
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["locked" => true, "locked_value" => (($_v14 = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, false, false, 818)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[(($_v15 = ($context["name"] ?? null)) instanceof \Stringable ? (string) $_v15 : $_v15)] ?? null) : null)]);
                // line 819
                yield "   ";
            } elseif (CoreExtension::inFilter(($context["name"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, false, false, 819))) {
                // line 820
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["locked" => true]);
                // line 821
                yield "   ";
            }
            // line 822
            yield "
   ";
            // line 823
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 823), "isReadonlyField", [($context["name"] ?? null)], "method", true, true, false, 823)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 823), "isReadonlyField", [($context["name"] ?? null)], "method", false, false, false, 823), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 824
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["readonly" => true]);
                // line 825
                yield "   ";
            }
            // line 826
            yield "
   ";
            // line 827
            if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "include_field", [], "any", false, false, false, 827)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 828
                yield "      ";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["field"] ?? null), "html", null, true);
                yield "
   ";
            } else {
                // line 830
                yield "      ";
                $context["id"] = Html::sanitizeDomId(((((Twig\Extension\CoreExtension::length($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", true, true, false, 830) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 830)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 830)) : (""))) > 0) && (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 830) != "%id%"))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 830)) : (((($context["name"] ?? null) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 830)))));
                // line 831
                yield "      ";
                // line 832
                yield "      ";
                $context["field"] = Twig\Extension\CoreExtension::replace(($context["field"] ?? null), [ (string)$this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape("%id%", "css"), "js") =>                 // line 833
($context["id"] ?? null),  (string)$this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape("%id%", "js") =>                 // line 834
($context["id"] ?? null),  (string)$this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape("%id%", "css") =>                 // line 835
($context["id"] ?? null), "%id%" =>                 // line 836
($context["id"] ?? null)]);
                // line 838
                yield "      ";
                $context["add_field_html"] = (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 838)) > 0)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 838)) : (""));
                // line 839
                yield "
      ";
                // line 840
                if ( !(($tmp = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, true, false, 840), "isHiddenField", [($context["name"] ?? null)], "method", true, true, false, 840)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 840), "isHiddenField", [($context["name"] ?? null)], "method", false, false, false, 840), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 841
                    yield "         ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "no_label", [], "any", false, false, false, 841)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 842
                        yield "            ";
                        yield (string) $this->getTemplateForMacro("macro_noLabelField", $context, 842, $this->getSourceContext())->macro_noLabelField(...[($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), ($context["options"] ?? null)]);
                        yield "
         ";
                    } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                     // line 843
($context["options"] ?? null), "is_horizontal", [], "any", false, false, false, 843)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 844
                        yield "            ";
                        yield (string) $this->getTemplateForMacro("macro_horizontalField", $context, 844, $this->getSourceContext())->macro_horizontalField(...[($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["name" => ($context["name"] ?? null)])]);
                        yield "
         ";
                    } else {
                        // line 846
                        yield "            ";
                        yield (string) $this->getTemplateForMacro("macro_verticalField", $context, 846, $this->getSourceContext())->macro_verticalField(...[($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["name" => ($context["name"] ?? null)])]);
                        yield "
         ";
                    }
                    // line 848
                    yield "      ";
                }
                // line 849
                yield "   ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 852
    public function macro_ajaxField($id = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "id" => $id,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 853
            yield "   ";
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 854
                yield "      <div id=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
                yield "\" class=\"form-field-ajax\">
         ";
                // line 855
                if ( !(null === ($context["value"] ?? null))) {
                    // line 856
                    yield "            ";
                    yield (string) ($context["value"] ?? null);
                    yield "
         ";
                }
                // line 858
                yield "      </div>
   ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 860
            yield "   ";
            yield (string) $this->getTemplateForMacro("macro_field", $context, 860, $this->getSourceContext())->macro_field(...[($context["id"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["id" => ((($context["id"] ?? null) . "_") . (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", true, true, false, 860) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 860)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 860)) : (Twig\Extension\CoreExtension::random($this->env->getCharset()))))])]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 863
    public function macro_nullField($options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 864
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["is_horizontal" => true], ($context["options"] ?? null));
            // line 865
            yield "
   ";
            // line 866
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "is_horizontal", [], "any", false, false, false, 866)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 867
                yield "      ";
                yield (string) $this->getTemplateForMacro("macro_horizontalField", $context, 867, $this->getSourceContext())->macro_horizontalField(...[null, null, null, null, ($context["options"] ?? null)]);
                yield "
   ";
            } else {
                // line 869
                yield "      ";
                yield (string) $this->getTemplateForMacro("macro_verticalField", $context, 869, $this->getSourceContext())->macro_verticalField(...[null, null, null, null, ($context["options"] ?? null)]);
                yield "
   ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 874
    public function macro_noLabelField($field = null, $id = "", $add_field_html = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "id" => $id,
            "add_field_html" => $add_field_html,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 875
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["full_width" => false, "mb" => "mb-3", "add_field_class" => "", "add_field_attribs" => [], "inline_add_field_html" => false],             // line 881
($context["options"] ?? null));
            // line 882
            yield "
   ";
            // line 883
            $context["class"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", true, true, false, 883) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 883)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 883)) : ("col-12 col-sm-6"));
            // line 884
            yield "   ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 884)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 885
                yield "      ";
                $context["class"] = "col-12";
                // line 886
                yield "   ";
            }
            // line 887
            yield "   ";
            $context["class"] = ((($context["class"] ?? null) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_class", [], "any", false, false, false, 887));
            // line 888
            yield "
   ";
            // line 889
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 889))) {
                // line 890
                yield "      ";
                $context["extra_attribs"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", ["options" => CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 890)]);
                // line 891
                yield "   ";
            } else {
                // line 892
                yield "      ";
                $context["extra_attribs"] = "";
                // line 893
                yield "   ";
            }
            // line 894
            yield "
   <div class=\"";
            // line 895
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["class"] ?? null), "html", null, true);
            yield " ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 895), "html", null, true);
            yield " ";
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "inline_add_field_html", [], "any", false, false, false, 895)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-flex") : (""));
            yield "\" ";
            yield (string) ($context["extra_attribs"] ?? null);
            yield ">
      ";
            // line 896
            yield (string) ($context["field"] ?? null);
            yield "
      ";
            // line 897
            yield (string) ($context["add_field_html"] ?? null);
            yield "
   </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 902
    public function macro_horizontalField($label = null, $field = null, $id = null, $add_field_html = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "field" => $field,
            "id" => $id,
            "add_field_html" => $add_field_html,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 903
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["full_width" => false, "align_label_right" => true, "mb" => "mb-2", "field_class" => "col-12 col-sm-6", "container_id" => "", "add_field_class" => "", "add_label_class" => "", "add_field_attribs" => [], "center" => false, "label_align" => "end", "inline_add_field_html" => false, "icon_label" => false],             // line 916
($context["options"] ?? null));
            // line 917
            yield "
   ";
            // line 918
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "icon_label", [], "any", false, false, false, 918)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 919
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(["label_class" => "col-2", "input_class" => "col-10"],                 // line 922
($context["options"] ?? null));
                // line 923
                yield "   ";
            }
            // line 924
            yield "
   ";
            // line 925
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 925)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 926
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["field_class" => "col-12 glpi-full-width"]);
                // line 929
                yield "   ";
            }
            // line 930
            yield "
   ";
            // line 931
            $context["options"] = Twig\Extension\CoreExtension::merge(["label_class" => "col-xxl-5", "input_class" => "col-xxl-7"],             // line 934
($context["options"] ?? null));
            // line 935
            yield "
   ";
            // line 936
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "align_label_right", [], "any", false, false, false, 936)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 937
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["label_class" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 938
($context["options"] ?? null), "label_class", [], "any", false, false, false, 938) . " text-xxl-") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "label_align", [], "any", false, false, false, 938))]);
                // line 940
                yield "   ";
            }
            // line 941
            yield "
   ";
            // line 942
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 942))) {
                // line 943
                yield "      ";
                $context["extra_attribs"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", ["options" => CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 943)]);
                // line 944
                yield "   ";
            } else {
                // line 945
                yield "      ";
                $context["extra_attribs"] = "";
                // line 946
                yield "   ";
            }
            // line 947
            yield "
   ";
            // line 949
            yield "   ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "container_id", [], "any", false, false, false, 949))) {
                // line 950
                yield "      ";
                $context["container_id"] = ("id=" . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "container_id", [], "any", false, false, false, 950));
                // line 951
                yield "   ";
            } else {
                // line 952
                yield "      ";
                $context["container_id"] = "";
                // line 953
                yield "   ";
            }
            // line 954
            yield "
   <div class=\"form-field row align-items-center ";
            // line 955
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 955), "html", null, true);
            yield " ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_class", [], "any", false, false, false, 955), "html", null, true);
            yield " ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 955), "html", null, true);
            yield "\" ";
            yield (string) ($context["extra_attribs"] ?? null);
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", true, true, false, 955) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", false, false, false, 955)))) {
                yield "data-testid=\"form-field-";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", false, false, false, 955), "html", null, true);
                yield "\"";
            }
            yield ">
      ";
            // line 956
            $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 956)->unwrap();
            // line 957
            yield "      ";
            yield (string) $macros["_inputs"]->getTemplateForMacro("macro_label", $context, 957, $this->getSourceContext())->macro_label(...[($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null), ((("col-form-label " . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "label_class", [], "any", false, false, false, 957)) . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_label_class", [], "any", false, false, false, 957))]);
            yield "
      ";
            // line 958
            $context["flex_class"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "center", [], "any", false, false, false, 958)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-flex align-items-center") : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "inline_add_field_html", [], "any", false, false, false, 958)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-flex") : (""))));
            // line 959
            yield "      <div ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
            yield " class=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_class", [], "any", false, false, false, 959), "html", null, true);
            yield " ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["flex_class"] ?? null), "html", null, true);
            yield " field-container\">
         ";
            // line 960
            yield (string) ($context["field"] ?? null);
            yield "
         ";
            // line 961
            yield (string) ($context["add_field_html"] ?? null);
            yield "
      </div>
   </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 967
    public function macro_verticalField($label = null, $field = null, $id = null, $add_field_html = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "field" => $field,
            "id" => $id,
            "add_field_html" => $add_field_html,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 968
            yield "   ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["full_width" => false, "mb" => "mb-2", "field_class" => "col-12 col-sm-6", "add_field_class" => "", "add_field_attribs" => [], "insert_content_after_label" => "", "label_class" => "", "input_class" => ""],             // line 977
($context["options"] ?? null));
            // line 978
            yield "
   ";
            // line 979
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 979)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 980
                yield "      ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["field_class" => "col-12"]);
                // line 983
                yield "   ";
            }
            // line 984
            yield "
   ";
            // line 985
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 985))) {
                // line 986
                yield "      ";
                $context["extra_attribs"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", ["options" => CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 986)]);
                // line 987
                yield "   ";
            } else {
                // line 988
                yield "      ";
                $context["extra_attribs"] = "";
                // line 989
                yield "   ";
            }
            // line 990
            yield "
   <div class=\"form-field ";
            // line 991
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 991), "html", null, true);
            yield " ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "add_field_class", [], "any", false, false, false, 991), "html", null, true);
            yield " ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 991), "html", null, true);
            yield "\" ";
            yield (string) ($context["extra_attribs"] ?? null);
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", true, true, false, 991) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", false, false, false, 991)))) {
                yield "data-testid=\"form-field-";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", false, false, false, 991), "html", null, true);
                yield "\"";
            }
            yield ">
      ";
            // line 992
            $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 992)->unwrap();
            // line 993
            yield "      <div class=\"d-flex align-items-center\">
         ";
            // line 994
            yield (string) $macros["_inputs"]->getTemplateForMacro("macro_label", $context, 994, $this->getSourceContext())->macro_label(...[($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null), ("col-form-label " . CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "label_class", [], "any", false, false, false, 994))]);
            yield "
         ";
            // line 995
            yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "insert_content_after_label", [], "any", false, false, false, 995);
            yield "
      </div>
      <div class=\"";
            // line 997
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "input_class", [], "any", false, false, false, 997), "html", null, true);
            yield " field-container\">
         ";
            // line 998
            yield (string) ($context["field"] ?? null);
            yield "
      </div>
      ";
            // line 1000
            yield (string) ($context["add_field_html"] ?? null);
            yield "
   </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 1004
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
            // line 1005
            yield "    ";
            $macros["_inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 1005)->unwrap();
            // line 1006
            yield "    ";
            yield (string) $macros["_inputs"]->getTemplateForMacro("macro_label", $context, 1006, $this->getSourceContext())->macro_label(...[($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null), ($context["class"] ?? null)]);
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 1009
    public function macro_codeField($name = null, $value = null, $label = null, $options = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 1010
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["single_line" => false, "language" => "twig", "completions" => [], "helper" => Twig\Extension\CoreExtension::sprintf(__("This field accepts %s content. Press Ctrl+Space to trigger autocompletion."), "Twig")],             // line 1015
($context["options"] ?? null));
            // line 1016
            yield "
    ";
            // line 1017
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 1017))) {
                // line 1018
                yield "        ";
                $context["options"] = Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["helper" => Twig\Extension\CoreExtension::sprintf(CoreExtension::getAttribute($this->env, $this->source,                 // line 1019
($context["options"] ?? null), "helper", [], "any", false, false, false, 1019), CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "language", [], "any", false, false, false, 1019))]);
                // line 1021
                yield "    ";
            }
            // line 1022
            yield "
    ";
            // line 1023
            $context["code_container_id"] = ((($context["name"] ?? null) . "_") . Twig\Extension\CoreExtension::random($this->env->getCharset()));
            // line 1024
            yield "    ";
            $context["code_container"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 1025
                yield "        <div id=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["code_container_id"] ?? null), "html", null, true);
                yield "\" class=\"form-control overflow-hidden text-start\" style=\"height: ";
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "single_line", [], "any", false, false, false, 1025)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("36px") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "height", [], "any", true, true, false, 1025)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "height", [], "any", false, false, false, 1025), "auto")) : ("auto")), "html", null, true)));
                yield ";\"></div>
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1027
            yield "    ";
            yield (string) $this->getTemplateForMacro("macro_htmlField", $context, 1027, $this->getSourceContext())->macro_htmlField(...[($context["name"] ?? null), ($context["code_container"] ?? null), ($context["label"] ?? null), Twig\Extension\CoreExtension::merge(["wrapper_class" => "d-flex flex-grow-1"],             // line 1029
($context["options"] ?? null))]);
            yield "
    <script>
        \$(() => {
            const editor_options = ";
            // line 1032
            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "single_line", [], "any", false, false, false, 1032)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("true") : ("false"));
            yield " ? window.GLPI.Monaco.getSingleLineEditorOptions() : {};
            window.GLPI.Monaco.createEditor(\x27";
            // line 1033
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["code_container_id"] ?? null), "js"), "html", null, true);
            yield "\x27, \x27";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "language", [], "any", false, false, false, 1033), "js"), "html", null, true);
            yield "\x27, \"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "js"), "html", null, true);
            yield "\", ";
            yield (string) json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "completions", [], "any", false, false, false, 1033));
            yield ", editor_options).then(() => {
                \$(\x27#";
            // line 1034
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["code_container_id"] ?? null), "css"), "js"), "html", null, true);
            yield "\x27).closest(\x27form\x27).on(\x27formdata\x27, (e) => {
                    const editors = window.monaco.editor.getEditors().filter((editor) => {
                        return editor._domElement.id === \x27";
            // line 1036
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["code_container_id"] ?? null), "js"), "html", null, true);
            yield "\x27;
                    });
                    if (editors.length) {
                        e.originalEvent.formData.delete(\x27";
            // line 1039
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "js"), "html", null, true);
            yield "\x27);
                        e.originalEvent.formData.append(\x27";
            // line 1040
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "js"), "html", null, true);
            yield "\x27, editors[0].getValue());
                    }
                });
            });
        });
    </script>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 1048
    public function macro_illustrationField($name = null, $value = null, $label = "", $options = [], ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "value" => $value,
            "label" => $label,
            "options" => $options,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 1049
            yield "    ";
            $context["options"] = Twig\Extension\CoreExtension::merge(["extra_css_classes" => "", "backdrop" => true],             // line 1052
($context["options"] ?? null));
            // line 1053
            yield "    ";
            $context["custom_icon_prefix"] = Twig\Extension\CoreExtension::constant("Glpi\\UI\\IllustrationManager::CUSTOM_ILLUSTRATION_PREFIX");
            // line 1056
            yield "    ";
            $context["field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 1057
                yield "        ";
                $context["container_id"] = ("container-" . Twig\Extension\CoreExtension::random($this->env->getCharset()));
                // line 1058
                yield "
        <div id=\"";
                // line 1059
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "html", null, true);
                yield "\">
            <input
                name=\"";
                // line 1061
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
                yield "\"
                type=\"hidden\"
                value=\"";
                // line 1063
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
                yield "\"
                data-glpi-icon-picker-value
            >

            ";
                // line 1068
                yield "            ";
                $context["modal_id"] = ("illustration-modal-" . Twig\Extension\CoreExtension::random($this->env->getCharset()));
                // line 1069
                yield "            <div
                class=\"illustration-selector d-flex align-items-center card border-1 ";
                // line 1070
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "extra_css_classes", [], "any", false, false, false, 1070), "html", null, true);
                yield "\"
                role=\"button\"
                aria-label=\"";
                // line 1072
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Select an illustration"), "html", null, true);
                yield "\"
                data-bs-toggle=\"modal\"
                data-bs-target=\"#";
                // line 1074
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["modal_id"] ?? null), "html", null, true);
                yield "\"
                data-glpi-icon-picker-value-preview
            >
                <div class=\"card-body aspect-ratio-1\">
                    ";
                // line 1078
                $context["is_custom_file"] = (is_string($_v16 = ($context["value"] ?? null)) && is_string($_v17 = ($context["custom_icon_prefix"] ?? null)) && str_starts_with($_v16, $_v17));
                // line 1079
                yield "                    <div
                        ";
                // line 1080
                if ((($tmp = ($context["is_custom_file"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1081
                    yield "                            data-glpi-icon-picker-value-preview-custom
                            data-testid=\"illustration-custom-preview\"
                        ";
                } else {
                    // line 1084
                    yield "                            data-glpi-icon-picker-value-preview-native
                        ";
                }
                // line 1086
                yield "                    >
                        ";
                // line 1087
                yield (string) $this->extensions['Glpi\Application\View\Extension\IllustrationExtension']->renderIllustration(($context["value"] ?? null), 100);
                yield "
                    </div>

                    ";
                // line 1093
                yield "                    ";
                if ((($tmp = ($context["is_custom_file"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1094
                    yield "                        <div
                            class=\"d-none\"
                            data-glpi-icon-picker-value-preview-native
                        >
                           ";
                    // line 1098
                    yield (string) $this->extensions['Glpi\Application\View\Extension\IllustrationExtension']->renderIllustration("", 100);
                    yield "
                        </div>
                    ";
                } else {
                    // line 1101
                    yield "                        <div
                            class=\"d-none\"
                            data-glpi-icon-picker-value-preview-custom
                            data-testid=\"illustration-custom-preview\"
                        >
                           ";
                    // line 1106
                    yield (string) $this->extensions['Glpi\Application\View\Extension\IllustrationExtension']->renderIllustration(($context["custom_icon_prefix"] ?? null), 100);
                    yield "
                        </div>
                    ";
                }
                // line 1109
                yield "                </div>
            </div>

            ";
                // line 1113
                yield "            ";
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/illustration/icon_picker_modal.html.twig", ["id" =>                 // line 1114
($context["modal_id"] ?? null), "backdrop" => CoreExtension::getAttribute($this->env, $this->source,                 // line 1115
($context["options"] ?? null), "backdrop", [], "any", false, false, false, 1115)], false);
                // line 1116
                yield "

            ";
                // line 1119
                yield "            <script defer type=\"module\">
                (async () => {
                    const module = await import(
                        \"/js/modules/IllustrationPicker/Controller.js\"
                    );
                    new module.GlpiIllustrationPickerController(
                        document.getElementById(\x27";
                // line 1125
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["container_id"] ?? null), "js"), "html", null, true);
                yield "\x27),
                        document.getElementById(\x27";
                // line 1126
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["modal_id"] ?? null), "js"), "html", null, true);
                yield "\x27),
                        \"";
                // line 1127
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["custom_icon_prefix"] ?? null), "js"), "html", null, true);
                yield "\",
                    );
                })();
            </script>
        </div>
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1133
            yield "
    ";
            // line 1134
            $context["options"] = Twig\Extension\CoreExtension::merge(["id" => "%id%"],             // line 1136
($context["options"] ?? null));
            // line 1137
            yield "    ";
            yield (string) $this->getTemplateForMacro("macro_field", $context, 1137, $this->getSourceContext())->macro_field(...[($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)]);
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
        return "components/form/fields_macros.html.twig";
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
        return array (  3206 => 1137,  3204 => 1136,  3203 => 1134,  3200 => 1133,  3190 => 1127,  3186 => 1126,  3182 => 1125,  3174 => 1119,  3170 => 1116,  3168 => 1115,  3167 => 1114,  3165 => 1113,  3160 => 1109,  3154 => 1106,  3147 => 1101,  3141 => 1098,  3135 => 1094,  3132 => 1093,  3126 => 1087,  3123 => 1086,  3119 => 1084,  3114 => 1081,  3112 => 1080,  3109 => 1079,  3107 => 1078,  3100 => 1074,  3095 => 1072,  3090 => 1070,  3087 => 1069,  3084 => 1068,  3077 => 1063,  3072 => 1061,  3067 => 1059,  3064 => 1058,  3061 => 1057,  3058 => 1056,  3055 => 1053,  3053 => 1052,  3051 => 1049,  3036 => 1048,  3023 => 1040,  3019 => 1039,  3013 => 1036,  3008 => 1034,  2998 => 1033,  2994 => 1032,  2988 => 1029,  2986 => 1027,  2977 => 1025,  2974 => 1024,  2972 => 1023,  2969 => 1022,  2966 => 1021,  2964 => 1019,  2962 => 1018,  2960 => 1017,  2957 => 1016,  2955 => 1015,  2953 => 1010,  2938 => 1009,  2929 => 1006,  2926 => 1005,  2911 => 1004,  2902 => 1000,  2897 => 998,  2893 => 997,  2888 => 995,  2884 => 994,  2881 => 993,  2879 => 992,  2863 => 991,  2860 => 990,  2857 => 989,  2854 => 988,  2851 => 987,  2848 => 986,  2846 => 985,  2843 => 984,  2840 => 983,  2837 => 980,  2835 => 979,  2832 => 978,  2830 => 977,  2828 => 968,  2812 => 967,  2802 => 961,  2798 => 960,  2789 => 959,  2787 => 958,  2782 => 957,  2780 => 956,  2764 => 955,  2761 => 954,  2758 => 953,  2755 => 952,  2752 => 951,  2749 => 950,  2746 => 949,  2743 => 947,  2740 => 946,  2737 => 945,  2734 => 944,  2731 => 943,  2729 => 942,  2726 => 941,  2723 => 940,  2721 => 938,  2719 => 937,  2717 => 936,  2714 => 935,  2712 => 934,  2711 => 931,  2708 => 930,  2705 => 929,  2702 => 926,  2700 => 925,  2697 => 924,  2694 => 923,  2692 => 922,  2690 => 919,  2688 => 918,  2685 => 917,  2683 => 916,  2681 => 903,  2665 => 902,  2656 => 897,  2652 => 896,  2642 => 895,  2639 => 894,  2636 => 893,  2633 => 892,  2630 => 891,  2627 => 890,  2625 => 889,  2622 => 888,  2619 => 887,  2616 => 886,  2613 => 885,  2610 => 884,  2608 => 883,  2605 => 882,  2603 => 881,  2601 => 875,  2586 => 874,  2576 => 869,  2570 => 867,  2568 => 866,  2565 => 865,  2562 => 864,  2550 => 863,  2541 => 860,  2536 => 858,  2530 => 856,  2528 => 855,  2523 => 854,  2520 => 853,  2505 => 852,  2498 => 849,  2495 => 848,  2489 => 846,  2483 => 844,  2481 => 843,  2476 => 842,  2473 => 841,  2471 => 840,  2468 => 839,  2465 => 838,  2463 => 836,  2462 => 835,  2461 => 834,  2460 => 833,  2458 => 832,  2456 => 831,  2453 => 830,  2447 => 828,  2445 => 827,  2442 => 826,  2439 => 825,  2436 => 824,  2434 => 823,  2431 => 822,  2428 => 821,  2425 => 820,  2422 => 819,  2419 => 818,  2417 => 817,  2414 => 816,  2412 => 815,  2410 => 807,  2395 => 806,  2386 => 803,  2377 => 801,  2375 => 800,  2372 => 799,  2369 => 798,  2366 => 797,  2364 => 796,  2361 => 795,  2359 => 794,  2357 => 792,  2354 => 791,  2351 => 790,  2348 => 789,  2333 => 788,  2323 => 784,  2321 => 783,  2318 => 782,  2311 => 780,  2308 => 779,  2305 => 778,  2303 => 776,  2302 => 775,  2299 => 774,  2296 => 773,  2293 => 772,  2291 => 771,  2288 => 770,  2285 => 769,  2282 => 768,  2280 => 767,  2277 => 766,  2274 => 765,  2271 => 764,  2268 => 763,  2266 => 762,  2264 => 759,  2261 => 758,  2258 => 757,  2252 => 754,  2249 => 753,  2247 => 752,  2244 => 751,  2228 => 750,  2218 => 746,  2216 => 745,  2213 => 744,  2207 => 742,  2206 => 741,  2205 => 740,  2203 => 739,  2201 => 738,  2198 => 737,  2195 => 736,  2192 => 735,  2190 => 734,  2187 => 733,  2184 => 732,  2181 => 731,  2179 => 730,  2176 => 729,  2173 => 728,  2170 => 727,  2167 => 726,  2165 => 725,  2163 => 721,  2160 => 720,  2157 => 719,  2151 => 716,  2148 => 715,  2146 => 714,  2143 => 713,  2127 => 712,  2119 => 709,  2116 => 708,  2112 => 707,  2110 => 706,  2109 => 705,  2107 => 703,  2105 => 702,  2102 => 701,  2099 => 700,  2096 => 699,  2094 => 698,  2091 => 697,  2088 => 696,  2085 => 695,  2083 => 694,  2080 => 693,  2077 => 692,  2074 => 691,  2071 => 690,  2069 => 689,  2067 => 686,  2052 => 685,  2044 => 682,  2041 => 681,  2037 => 680,  2035 => 679,  2034 => 678,  2032 => 677,  2030 => 676,  2027 => 675,  2024 => 674,  2021 => 673,  2019 => 672,  2016 => 671,  2013 => 670,  2010 => 669,  2008 => 668,  2005 => 667,  2002 => 666,  1999 => 665,  1996 => 664,  1994 => 663,  1992 => 659,  1977 => 658,  1965 => 651,  1959 => 648,  1956 => 647,  1953 => 646,  1951 => 645,  1949 => 642,  1947 => 640,  1932 => 639,  1924 => 636,  1921 => 635,  1917 => 634,  1914 => 633,  1912 => 632,  1909 => 631,  1906 => 630,  1903 => 629,  1901 => 628,  1898 => 627,  1895 => 626,  1892 => 625,  1890 => 624,  1887 => 623,  1884 => 622,  1881 => 621,  1878 => 620,  1876 => 619,  1874 => 615,  1859 => 614,  1850 => 611,  1846 => 610,  1843 => 609,  1841 => 608,  1838 => 607,  1835 => 606,  1832 => 605,  1830 => 604,  1827 => 603,  1825 => 602,  1823 => 600,  1809 => 599,  1801 => 596,  1798 => 595,  1794 => 594,  1792 => 593,  1791 => 592,  1790 => 591,  1788 => 590,  1786 => 589,  1783 => 588,  1781 => 587,  1778 => 586,  1775 => 585,  1772 => 584,  1770 => 583,  1767 => 582,  1764 => 581,  1761 => 580,  1759 => 579,  1756 => 578,  1753 => 577,  1750 => 576,  1747 => 575,  1745 => 574,  1743 => 570,  1728 => 569,  1720 => 566,  1717 => 565,  1713 => 564,  1710 => 563,  1708 => 562,  1705 => 561,  1702 => 560,  1699 => 559,  1697 => 558,  1694 => 557,  1691 => 556,  1688 => 555,  1686 => 554,  1683 => 553,  1680 => 552,  1677 => 551,  1674 => 550,  1672 => 549,  1670 => 545,  1655 => 544,  1647 => 541,  1644 => 540,  1640 => 539,  1638 => 538,  1637 => 537,  1635 => 536,  1633 => 535,  1630 => 534,  1627 => 533,  1624 => 532,  1622 => 531,  1619 => 530,  1616 => 529,  1613 => 528,  1611 => 527,  1608 => 526,  1605 => 525,  1602 => 524,  1599 => 523,  1597 => 522,  1595 => 518,  1580 => 517,  1572 => 514,  1569 => 513,  1565 => 512,  1563 => 511,  1562 => 510,  1561 => 509,  1559 => 508,  1557 => 507,  1554 => 506,  1551 => 505,  1548 => 504,  1546 => 503,  1543 => 502,  1540 => 501,  1537 => 500,  1535 => 499,  1532 => 498,  1529 => 497,  1526 => 496,  1524 => 495,  1521 => 494,  1519 => 493,  1517 => 489,  1501 => 488,  1493 => 485,  1490 => 484,  1486 => 483,  1484 => 482,  1483 => 481,  1482 => 480,  1480 => 479,  1478 => 478,  1475 => 477,  1472 => 476,  1469 => 475,  1466 => 474,  1463 => 473,  1460 => 472,  1458 => 471,  1455 => 470,  1452 => 469,  1449 => 468,  1447 => 467,  1444 => 466,  1442 => 465,  1440 => 461,  1425 => 460,  1416 => 457,  1405 => 456,  1396 => 453,  1393 => 452,  1390 => 451,  1387 => 450,  1385 => 444,  1382 => 443,  1368 => 442,  1361 => 439,  1359 => 436,  1354 => 435,  1351 => 434,  1349 => 433,  1346 => 432,  1343 => 431,  1340 => 430,  1338 => 429,  1335 => 428,  1330 => 426,  1328 => 423,  1325 => 422,  1316 => 419,  1314 => 417,  1313 => 414,  1310 => 413,  1306 => 412,  1300 => 409,  1297 => 408,  1294 => 407,  1279 => 406,  1270 => 403,  1267 => 402,  1264 => 401,  1261 => 400,  1256 => 398,  1249 => 394,  1244 => 393,  1231 => 384,  1229 => 383,  1225 => 382,  1222 => 381,  1218 => 379,  1216 => 378,  1209 => 377,  1201 => 375,  1198 => 374,  1195 => 373,  1192 => 372,  1190 => 371,  1187 => 370,  1184 => 369,  1168 => 368,  1159 => 365,  1152 => 363,  1149 => 362,  1146 => 361,  1144 => 360,  1142 => 356,  1127 => 355,  1119 => 352,  1116 => 351,  1109 => 349,  1106 => 348,  1104 => 347,  1101 => 346,  1099 => 345,  1097 => 343,  1082 => 342,  1074 => 338,  1071 => 337,  1068 => 336,  1065 => 335,  1052 => 332,  1049 => 331,  1046 => 330,  1043 => 329,  1040 => 327,  1033 => 325,  1030 => 324,  1028 => 323,  1025 => 322,  1023 => 321,  1022 => 320,  1021 => 319,  1020 => 318,  1018 => 316,  1003 => 315,  995 => 311,  992 => 310,  985 => 308,  982 => 307,  980 => 306,  977 => 305,  975 => 304,  973 => 302,  958 => 301,  950 => 297,  947 => 296,  940 => 294,  937 => 293,  934 => 292,  919 => 291,  911 => 287,  908 => 286,  901 => 284,  898 => 283,  895 => 282,  880 => 281,  872 => 277,  869 => 276,  866 => 275,  863 => 274,  860 => 273,  857 => 272,  854 => 271,  852 => 270,  849 => 269,  846 => 268,  842 => 267,  840 => 265,  839 => 264,  838 => 263,  837 => 261,  836 => 260,  834 => 259,  831 => 258,  828 => 257,  824 => 256,  822 => 254,  821 => 253,  820 => 251,  818 => 250,  815 => 249,  812 => 248,  810 => 247,  807 => 246,  800 => 244,  797 => 243,  795 => 242,  792 => 241,  789 => 240,  786 => 239,  784 => 238,  782 => 237,  779 => 236,  777 => 235,  776 => 227,  774 => 221,  759 => 220,  750 => 216,  745 => 214,  739 => 212,  735 => 210,  733 => 209,  728 => 208,  725 => 207,  722 => 206,  707 => 205,  699 => 201,  696 => 200,  689 => 198,  686 => 197,  684 => 196,  681 => 195,  679 => 194,  677 => 192,  662 => 191,  654 => 187,  651 => 186,  646 => 184,  640 => 182,  638 => 181,  635 => 180,  623 => 179,  619 => 178,  615 => 177,  611 => 176,  607 => 175,  603 => 174,  597 => 173,  591 => 172,  588 => 171,  586 => 170,  583 => 169,  581 => 168,  579 => 160,  576 => 159,  573 => 158,  570 => 157,  567 => 156,  565 => 155,  563 => 153,  560 => 152,  545 => 151,  537 => 147,  534 => 146,  527 => 144,  524 => 143,  522 => 142,  519 => 141,  517 => 140,  515 => 137,  500 => 136,  492 => 133,  489 => 132,  484 => 130,  481 => 128,  478 => 127,  476 => 126,  473 => 125,  471 => 124,  469 => 122,  454 => 121,  446 => 118,  443 => 117,  436 => 115,  433 => 114,  431 => 113,  428 => 112,  425 => 111,  422 => 110,  420 => 106,  418 => 105,  416 => 104,  413 => 103,  410 => 102,  408 => 101,  405 => 100,  403 => 99,  401 => 97,  386 => 96,  378 => 92,  375 => 91,  372 => 90,  369 => 89,  366 => 88,  363 => 87,  360 => 86,  357 => 85,  355 => 83,  353 => 82,  349 => 81,  346 => 80,  330 => 79,  321 => 74,  316 => 72,  313 => 71,  311 => 70,  306 => 69,  300 => 66,  297 => 65,  295 => 64,  291 => 63,  287 => 62,  283 => 61,  280 => 60,  277 => 59,  274 => 58,  259 => 57,  250 => 52,  245 => 50,  242 => 49,  240 => 48,  235 => 47,  229 => 44,  226 => 43,  224 => 42,  220 => 41,  215 => 39,  212 => 38,  209 => 37,  206 => 36,  203 => 35,  200 => 34,  185 => 33,  179 => 1047,  176 => 1008,  173 => 1003,  169 => 965,  165 => 900,  161 => 872,  158 => 862,  155 => 851,  152 => 805,  149 => 787,  146 => 749,  143 => 711,  140 => 684,  137 => 657,  134 => 638,  131 => 613,  128 => 598,  125 => 568,  122 => 543,  119 => 516,  116 => 487,  113 => 459,  110 => 455,  107 => 441,  104 => 405,  101 => 367,  98 => 354,  94 => 340,  90 => 313,  86 => 299,  82 => 289,  78 => 279,  74 => 218,  70 => 203,  66 => 189,  62 => 149,  59 => 135,  56 => 120,  52 => 94,  49 => 78,  46 => 56,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/fields_macros.html.twig", "/var/www/glpi/templates/components/form/fields_macros.html.twig");
    }
}
