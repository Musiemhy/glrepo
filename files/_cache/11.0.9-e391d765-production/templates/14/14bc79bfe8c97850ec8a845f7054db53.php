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

/* components/itilobject/service_levels.html.twig */
class __TwigTemplate_e386c09920895e358499cb549cc1f058 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 33)->unwrap();
        // line 34
        $macros["modals"] = $this->macros["modals"] = $this->load("components/form/modals_macros.html.twig", 34)->unwrap();
        // line 35
        yield "
";
        // line 36
        $context["la_fields"] = [];
        // line 37
        yield "
";
        // line 38
        $context["la_fields"] = Twig\Extension\CoreExtension::merge(($context["la_fields"] ?? null), [["la" =>         // line 40
($context["sla"] ?? null), "type_str" => "sla", "type" => Twig\Extension\CoreExtension::constant("SLM::TTO"), "datefieldname" => "time_to_own", "lafieldname" => "slas_id_tto", "label" => __("TTO"), "helper" => __("Time to own")], ["la" =>         // line 48
($context["sla"] ?? null), "type_str" => "sla", "type" => Twig\Extension\CoreExtension::constant("SLM::TTR"), "datefieldname" => "time_to_resolve", "lafieldname" => "slas_id_ttr", "label" => __("TTR"), "helper" => __("Time to resolve")]]);
        // line 57
        yield "
";
        // line 58
        $context["la_fields"] = Twig\Extension\CoreExtension::merge(($context["la_fields"] ?? null), [["la" =>         // line 60
($context["ola"] ?? null), "type_str" => "ola", "type" => Twig\Extension\CoreExtension::constant("SLM::TTO"), "datefieldname" => "internal_time_to_own", "lafieldname" => "olas_id_tto", "label" => __("Internal TTO"), "helper" => __("Internal Time to own")], ["la" =>         // line 68
($context["ola"] ?? null), "type_str" => "ola", "type" => Twig\Extension\CoreExtension::constant("SLM::TTR"), "datefieldname" => "internal_time_to_resolve", "lafieldname" => "olas_id_ttr", "label" => __("Internal TTR"), "helper" => __("Internal Time to resolve")]]);
        // line 77
        yield "
";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["la_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["la_field"]) {
            // line 79
            yield "   ";
            $context["can_assign_sla_ola"] = (((($tmp = ($context["canupdate"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = Session::haveRight("slm", Twig\Extension\CoreExtension::constant("SLM::RIGHT_ASSIGN"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 79), "isReadonlyField", [CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "lafieldname", [], "any", false, false, false, 79)], "method", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp));
            // line 80
            yield "   ";
            $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 81
            yield "   ";
            $context["date_displayed"] = ( !CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", true, true, false, 81) ||  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 81), "isHiddenField", [CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "datefieldname", [], "any", false, false, false, 81)], "method", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp));
            // line 82
            yield "   ";
            $context["la_displayed"] = ( !CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", true, true, false, 82) ||  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 82), "isHiddenField", [CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "lafieldname", [], "any", false, false, false, 82)], "method", false, false, false, 82)) && $tmp instanceof Markup ? (string) $tmp : $tmp));
            // line 83
            yield "
   ";
            // line 84
            if (((($tmp = ($context["date_displayed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["la_displayed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 85
                yield "      ";
                $context["la_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 86
                    yield "         ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "la", [], "any", false, false, false, 86), "getDataForTicket", [(($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 86)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["id"] ?? null) : null), CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "type", [], "any", false, false, false, 86)], "method", false, false, false, 86)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 87
                        yield "            ";
                        if ((($tmp = ($context["date_displayed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 88
                            yield "               <span class=\"text-muted\">
                  ";
                            // line 89
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 89)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[(($_v2 = CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "datefieldname", [], "any", false, false, false, 89)) instanceof \Stringable ? (string) $_v2 : $_v2)] ?? null) : null)), "html", null, true);
                            yield "
               </span>
            ";
                        }
                        // line 92
                        yield "
            ";
                        // line 93
                        if ((($tmp = ($context["la_displayed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 94
                            yield "               <span class=\"level_name badge itil-badge bg-secondary text-secondary-fg ms-1 flex-column flex-sm-row\">
                  <span class=\"d-flex align-items-center\">
                     <i class=\"ti ti-stopwatch slt me-1\"></i>
                     <span class=\"text-truncate\"
                           title=\"";
                            // line 98
                            yield (string) $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemComment(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "la", [], "any", false, false, false, 98), "getType", [], "method", false, false, false, 98), (($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 98)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[(($_v4 = CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "lafieldname", [], "any", false, false, false, 98)) instanceof \Stringable ? (string) $_v4 : $_v4)] ?? null) : null));
                            yield "\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                        ";
                            // line 100
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "la", [], "any", false, false, false, 100), "getType", [], "method", false, false, false, 100), (($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 100)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[(($_v6 = CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "lafieldname", [], "any", false, false, false, 100)) instanceof \Stringable ? (string) $_v6 : $_v6)] ?? null) : null)), "html", null, true);
                            yield "
                     </span>

                     ";
                            // line 103
                            if ((($tmp = ($context["can_assign_sla_ola"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 104
                                yield "                        <i class=\"ti ti-x ms-1\" role=\"button\"
                           onclick=\"delete_date_";
                                // line 105
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                                yield "(event)\"
                           title=\"";
                                // line 106
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                                yield "\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                     ";
                            }
                            // line 109
                            yield "                  </span>

                  ";
                            // line 111
                            $context["nextaction"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "la", [], "any", false, false, false, 111), "getNextActionForTicket", [($context["item"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "type", [], "any", false, false, false, 111)], "method", false, false, false, 111);
                            // line 112
                            yield "                  ";
                            $context["level"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "la", [], "any", false, false, false, 112), "getLevelFromAction", [($context["nextaction"] ?? null)], "method", false, false, false, 112);
                            // line 113
                            yield "                  ";
                            if ((($context["level"] ?? null) != false)) {
                                // line 114
                                yield "                     <span class=\"badge bg-info ms-0 ms-sm-1\">
                        <i class=\"ti ti-clock me-1\"
                           title=\"";
                                // line 116
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Next escalation: %s"), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["nextaction"] ?? null), "fields", [], "any", false, false, false, 116)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["date"] ?? null) : null))), "html", null, true);
                                yield "\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                        <span title=\"";
                                // line 118
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("%1\$s: %2\$s"), _n("Escalation level", "Escalation levels", 1), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName(($context["level"] ?? null))), "html", null, true);
                                yield "\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                           ";
                                // line 120
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName(($context["level"] ?? null)), "html", null, true);
                                yield "
                        </span>
                     </span>
                  ";
                            }
                            // line 124
                            yield "               </span>
               <script type=\"text/javascript\">
                  function delete_date_";
                            // line 126
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                            yield "(e) {
                     e.preventDefault();

                     var delete_date = 0;
                     if (confirm(\x27";
                            // line 130
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Also delete date?"), "html", null, true);
                            yield "\x27)) {
                        delete_date = 1;
                     }

                     submitGetLink(\x27";
                            // line 134
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 134), "html", null, true);
                            yield "\x27, {
                        \x27";
                            // line 135
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "type_str", [], "any", false, false, false, 135), "html", null, true);
                            yield "_delete\x27: 1,
                        \x27id\x27: ";
                            // line 136
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v8 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 136)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["id"] ?? null) : null), "html", null, true);
                            yield ",
                        \x27type\x27: ";
                            // line 137
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "type", [], "any", false, false, false, 137), "html", null, true);
                            yield ",
                        \x27_glpi_csrf_token\x27: \x27";
                            // line 138
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                            yield "\x27,
                        \x27_glpi_simple_form\x27: 1,
                        \x27delete_date\x27: delete_date
                     });
                  }
               </script>
            ";
                        }
                        // line 145
                        yield "         ";
                    } else {
                        // line 146
                        yield "            <div class=\"d-flex align-items-center flex-wrap\">
               ";
                        // line 147
                        $context["assign_la_id"] = ("assign_la_" . ($context["rand"] ?? null));
                        // line 148
                        yield "
               ";
                        // line 149
                        if ((($tmp = ($context["date_displayed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 150
                            yield "                  <div class=\"la_datefield\">
                     ";
                            // line 151
                            yield (string) $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 151, $this->getSourceContext())->macro_datetimeField(...[CoreExtension::getAttribute($this->env, $this->source,                             // line 152
$context["la_field"], "datefieldname", [], "any", false, false, false, 152), (($_v9 = CoreExtension::getAttribute($this->env, $this->source,                             // line 153
($context["item"] ?? null), "fields", [], "any", false, false, false, 153)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[(($_v10 = CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "datefieldname", [], "any", false, false, false, 153)) instanceof \Stringable ? (string) $_v10 : $_v10)] ?? null) : null), "", ["include_field" => false, "id" => ("date_" .                             // line 157
($context["assign_la_id"] ?? null)), "disabled" => (!(($tmp =                             // line 158
($context["can_assign_sla_ola"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))]]);
                            // line 160
                            yield "
                  </div>
               ";
                        }
                        // line 163
                        yield "
               ";
                        // line 164
                        if ((($tmp = ($context["la_displayed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 165
                            yield "                  <div class=\"";
                            yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
                            yield " w-100 mt-1 d-none\" id=\"dropdown_";
                            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["assign_la_id"] ?? null), "html", null, true);
                            yield "\">
                     ";
                            // line 166
                            yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 166, $this->getSourceContext())->macro_dropdownField(...[CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                             // line 167
$context["la_field"], "la", [], "any", false, false, false, 167), "getType", [], "method", false, false, false, 167), CoreExtension::getAttribute($this->env, $this->source,                             // line 168
$context["la_field"], "lafieldname", [], "any", false, false, false, 168), (($_v11 = CoreExtension::getAttribute($this->env, $this->source,                             // line 169
($context["item"] ?? null), "fields", [], "any", false, false, false, 169)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[(($_v12 = CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "lafieldname", [], "any", false, false, false, 169)) instanceof \Stringable ? (string) $_v12 : $_v12)] ?? null) : null), "", ["include_field" => false, "entity" => (($_v13 = CoreExtension::getAttribute($this->env, $this->source,                             // line 173
($context["item"] ?? null), "fields", [], "any", false, false, false, 173)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["entities_id"] ?? null) : null), "condition" => ["type" => CoreExtension::getAttribute($this->env, $this->source,                             // line 174
$context["la_field"], "type", [], "any", false, false, false, 174)], "disabled" => (!(($tmp =                             // line 175
($context["can_assign_sla_ola"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)), "add_field_class" => (((($tmp =                             // line 176
($context["is_expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("col-sm-6") : (""))]]);
                            // line 178
                            yield "
                  </div>

                  ";
                            // line 181
                            if ((($tmp = ($context["can_assign_sla_ola"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 182
                                yield "                     <button class=\"btn btn-sm btn-ghost-secondary ms-1\" type=\"button\"
                           id=\"button_";
                                // line 183
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["assign_la_id"] ?? null), "html", null, true);
                                yield "\"
                           data-bs-toggle=\"modal\" data-bs-target=\"#";
                                // line 184
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["assign_la_id"] ?? null), "html", null, true);
                                yield "\"
                           aria-expanded=\"false\" aria-controls=\"";
                                // line 185
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["assign_la_id"] ?? null), "html", null, true);
                                yield "\">
                        <i class=\"ti ti-stopwatch slt pointer\"
                           title=\"";
                                // line 187
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Assign a SLA"), "html", null, true);
                                yield "\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                     </button>

                     ";
                                // line 191
                                yield (string) $macros["modals"]->getTemplateForMacro("macro_confirm", $context, 191, $this->getSourceContext())->macro_confirm(...[__("Warning"), Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                                 // line 193
$context["la_field"], "la", [], "any", false, false, false, 193), "getAddConfirmation", [], "method", false, false, false, 193), "<br />"), ["id" =>                                 // line 195
($context["assign_la_id"] ?? null), "confirm_label" => ("<i class=\"ti ti-stopwatch me-1\"></i>" . __("Assign")), "confirm_event" => (("toggleAssignLA_" .                                 // line 197
($context["rand"] ?? null)) . "()")]]);
                                // line 199
                                yield "

                     <script type=\"text/javascript\">
                        function toggleAssignLA_";
                                // line 202
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                                yield "() {
                           // hide button clicked
                           \$(\"#button_";
                                // line 204
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["assign_la_id"] ?? null), "html", null, true);
                                yield "\").hide();

                           // hide date field
                           \$(\"#date_";
                                // line 207
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["assign_la_id"] ?? null), "html", null, true);
                                yield "\").closest(\x27.la_datefield\x27).hide();

                           // show dropdown field
                           \$(\x27#dropdown_assign_la_";
                                // line 210
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                                yield "\x27).removeClass(\x27d-none\x27);

                           // show level agreement dropdown
                           var myCollapse = new bootstrap.Collapse(document.getElementById(\x27dropdown_";
                                // line 213
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["assign_la_id"] ?? null), "html", null, true);
                                yield "\x27));
                           myCollapse.show();
                        }
                     </script>

                     ";
                                // line 218
                                if (((($_v14 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 218)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[(($_v15 = CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "lafieldname", [], "any", false, false, false, 218)) instanceof \Stringable ? (string) $_v15 : $_v15)] ?? null) : null) != 0)) {
                                    // line 219
                                    yield "                        <script type=\"text/javascript\">
                           \$(document).ready(function() {
                              toggleAssignLA_";
                                    // line 221
                                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
                                    yield "();
                           });
                        </script>
                     ";
                                }
                                // line 225
                                yield "                  ";
                            }
                            // line 226
                            yield "               ";
                        }
                        // line 227
                        yield "            </div>
         ";
                    }
                    // line 229
                    yield "      ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 230
                yield "      ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_field", $context, 230, $this->getSourceContext())->macro_field(...[CoreExtension::getAttribute($this->env, $this->source,                 // line 231
$context["la_field"], "lafieldname", [], "any", false, false, false, 231),                 // line 232
($context["la_html"] ?? null), CoreExtension::getAttribute($this->env, $this->source,                 // line 233
$context["la_field"], "label", [], "any", false, false, false, 233), ["helper" => CoreExtension::getAttribute($this->env, $this->source,                 // line 235
$context["la_field"], "helper", [], "any", false, false, false, 235), "mb" => "mb-2", "label_class" => "col-auto", "full_width" => true, "is_horizontal" => false, "add_field_class" => (((($tmp =                 // line 240
($context["is_expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("col-sm-6") : ("")), "required" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 241
($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 241), "isMandatoryField", [CoreExtension::getAttribute($this->env, $this->source, $context["la_field"], "lafieldname", [], "any", false, false, false, 241)], "method", false, false, false, 241)]]);
                // line 243
                yield "
   ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['la_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/service_levels.html.twig";
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
        return array (  380 => 243,  378 => 241,  377 => 240,  376 => 235,  375 => 233,  374 => 232,  373 => 231,  371 => 230,  367 => 229,  363 => 227,  360 => 226,  357 => 225,  350 => 221,  346 => 219,  344 => 218,  336 => 213,  330 => 210,  324 => 207,  318 => 204,  313 => 202,  308 => 199,  306 => 197,  305 => 195,  304 => 193,  303 => 191,  296 => 187,  291 => 185,  287 => 184,  283 => 183,  280 => 182,  278 => 181,  273 => 178,  271 => 176,  270 => 175,  269 => 174,  268 => 173,  267 => 169,  266 => 168,  265 => 167,  264 => 166,  257 => 165,  255 => 164,  252 => 163,  247 => 160,  245 => 158,  244 => 157,  243 => 153,  242 => 152,  241 => 151,  238 => 150,  236 => 149,  233 => 148,  231 => 147,  228 => 146,  225 => 145,  215 => 138,  211 => 137,  207 => 136,  203 => 135,  199 => 134,  192 => 130,  185 => 126,  181 => 124,  174 => 120,  169 => 118,  164 => 116,  160 => 114,  157 => 113,  154 => 112,  152 => 111,  148 => 109,  142 => 106,  138 => 105,  135 => 104,  133 => 103,  127 => 100,  122 => 98,  116 => 94,  114 => 93,  111 => 92,  105 => 89,  102 => 88,  99 => 87,  96 => 86,  93 => 85,  91 => 84,  88 => 83,  85 => 82,  82 => 81,  79 => 80,  76 => 79,  72 => 78,  69 => 77,  67 => 68,  66 => 60,  65 => 58,  62 => 57,  60 => 48,  59 => 40,  58 => 38,  55 => 37,  53 => 36,  50 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/service_levels.html.twig", "/var/www/glpi/templates/components/itilobject/service_levels.html.twig");
    }
}
