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

/* components/itilobject/fields_panel.html.twig */
class __TwigTemplate_dd73e7494301412b81fb6620c19654e6 extends Template
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
        $context["field_options"] = ["full_width" => true, "fields_template" =>         // line 36
($context["itiltemplate"] ?? null), "disabled" => (!(($tmp =         // line 37
($context["canupdate"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)), "add_field_class" => (((($tmp =         // line 38
($context["is_expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("col-sm-6") : ("")), "rand" =>         // line 39
($context["rand"] ?? null)];
        // line 41
        yield "
";
        // line 42
        $context["itil_layout"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("itil_layout", true);
        // line 43
        $context["headers_states"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["itil_layout"] ?? null), "items", [], "array", true, true, false, 43)) ? (Twig\Extension\CoreExtension::default((($_v0 = ($context["itil_layout"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["items"] ?? null) : null), [])) : ([]));
        // line 44
        yield "
<div class=\"accordion open accordion-flush itil-object-fields\" id=\"itil-data\">
   ";
        // line 46
        $context["main_show"] = ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "item-main", [], "array", true, true, false, 46) || ((($_v1 = ($context["headers_states"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["item-main"] ?? null) : null) == "true"))) ? (true) : (false));
        // line 47
        yield "   ";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::PRE_ITIL_INFO_SECTION"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        yield "
   <section class=\"accordion-item\" aria-label=\"";
        // line 48
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getTypeName", [1], "method", false, false, false, 48), "html", null, true);
        yield "\">
      <div class=\"accordion-header\" id=\"heading-main-item\">
         <button class=\"accordion-button ";
        // line 50
        yield (string) (((($tmp = ($context["main_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
        yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#item-main\" aria-expanded=\"true\" aria-controls=\"ticket-main\">
            <i class=\"ti ti-alert-circle item-icon\"></i>
            <span class=\x27status-recall\x27>
                ";
        // line 53
        yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getStatusIcon", [(($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 53)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["status"] ?? null) : null)], "method", false, false, false, 53);
        yield "
            </span>
            <span class=\"item-title\">
                ";
        // line 56
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getTypeName", [1], "method", false, false, false, 56), "html", null, true);
        yield "
            </span>
         </button>
      </div>
      <section id=\"item-main\" class=\"accordion-collapse collapse ";
        // line 60
        yield (string) (((($tmp = ($context["main_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
        yield "\" aria-labelledby=\"heading-main-item\">
         <div class=\"accordion-body row m-0 mt-n2\">

            ";
        // line 63
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        yield "

            ";
        // line 65
        if ((($tmp = Session::isMultiEntitiesMode()) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "               ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 67
                yield "                  ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 67, $this->getSourceContext())->macro_dropdownField(...["Entity", "entities_id", (($_v3 = CoreExtension::getAttribute($this->env, $this->source,                 // line 70
($context["item"] ?? null), "fields", [], "any", false, false, false, 70)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["entities_id"] ?? null) : null), _n("Entity", "Entities", 1), Twig\Extension\CoreExtension::merge(                // line 72
($context["field_options"] ?? null), ["entity" => ((                // line 73
array_key_exists("userentities", $context)) ? (Twig\Extension\CoreExtension::default(($context["userentities"] ?? null),  -1)) : ( -1)), "on_change" => "this.form.submit()"])]);
                // line 76
                yield "
               ";
            } else {
                // line 78
                yield "                  ";
                $context["entity_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 79
                    yield "                      ";
                    if ((($tmp = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->hasItemtypeRight("Entity", Twig\Extension\CoreExtension::constant("READ"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 80
                        yield "                          ";
                        yield (string) $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Entity::badgeCompletenameLinkById", [(($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 80)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["entities_id"] ?? null) : null)]);
                        yield "
                      ";
                    } else {
                        // line 82
                        yield "                          ";
                        yield (string) $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Entity::badgeCompletenameById", [(($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 82)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["entities_id"] ?? null) : null)]);
                        yield "
                      ";
                    }
                    // line 84
                    yield "                  ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 85
                yield "
                  ";
                // line 86
                yield (string) $macros["fields"]->getTemplateForMacro("macro_field", $context, 86, $this->getSourceContext())->macro_field(...["",                 // line 88
($context["entity_html"] ?? null), _n("Entity", "Entities", 1), Twig\Extension\CoreExtension::merge(                // line 90
($context["field_options"] ?? null), ["add_field_class" => "d-flex align-items-center"])]);
                // line 93
                yield "
               ";
            }
            // line 95
            yield "
               ";
            // line 96
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["is_recursive"], "method", false, false, false, 96)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 97
                yield "                  ";
                yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownYesNo", $context, 97, $this->getSourceContext())->macro_dropdownYesNo(...["is_recursive", (($_v6 = CoreExtension::getAttribute($this->env, $this->source,                 // line 99
($context["item"] ?? null), "fields", [], "any", false, false, false, 99)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["is_recursive"] ?? null) : null), __("Child entities"),                 // line 101
($context["field_options"] ?? null)]);
                // line 102
                yield "
               ";
            }
            // line 104
            yield "            ";
        }
        // line 105
        yield "
            ";
        // line 106
        yield (string) $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 106, $this->getSourceContext())->macro_datetimeField(...["date", (($_v7 = CoreExtension::getAttribute($this->env, $this->source,         // line 108
($context["item"] ?? null), "fields", [], "any", false, false, false, 108)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["date"] ?? null) : null), __("Opening date"),         // line 110
($context["field_options"] ?? null)]);
        // line 111
        yield "

            ";
        // line 113
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 113) != "Ticket")) {
            // line 114
            yield "               ";
            yield (string) $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 114, $this->getSourceContext())->macro_datetimeField(...["time_to_resolve", (($_v8 = CoreExtension::getAttribute($this->env, $this->source,             // line 116
($context["item"] ?? null), "fields", [], "any", false, false, false, 116)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["time_to_resolve"] ?? null) : null), __("Time to resolve"),             // line 118
($context["field_options"] ?? null)]);
            // line 119
            yield "
            ";
        }
        // line 121
        yield "
            ";
        // line 122
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isSolved", [true], "method", false, false, false, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 123
            yield "               ";
            yield (string) $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 123, $this->getSourceContext())->macro_datetimeField(...["solvedate", (($_v9 = CoreExtension::getAttribute($this->env, $this->source,             // line 125
($context["item"] ?? null), "fields", [], "any", false, false, false, 125)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["solvedate"] ?? null) : null), __("Resolution date"),             // line 127
($context["field_options"] ?? null)]);
            // line 128
            yield "
            ";
        }
        // line 130
        yield "
            ";
        // line 131
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isClosed", [], "method", false, false, false, 131)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 132
            yield "               ";
            yield (string) $macros["fields"]->getTemplateForMacro("macro_datetimeField", $context, 132, $this->getSourceContext())->macro_datetimeField(...["closedate", (($_v10 = CoreExtension::getAttribute($this->env, $this->source,             // line 134
($context["item"] ?? null), "fields", [], "any", false, false, false, 134)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["closedate"] ?? null) : null), __("Close date"),             // line 136
($context["field_options"] ?? null)]);
            // line 137
            yield "
            ";
        }
        // line 139
        yield "
            ";
        // line 140
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 140) == "Ticket")) {
            // line 141
            yield "               ";
            $context["type_params"] = Twig\Extension\CoreExtension::merge(["value" => (($_v11 = CoreExtension::getAttribute($this->env, $this->source,             // line 142
($context["item"] ?? null), "fields", [], "any", false, false, false, 142)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["type"] ?? null) : null), "width" => "100%", "display" => false, "rand" =>             // line 145
($context["rand"] ?? null), "readonly" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 146
($context["field_options"] ?? null), "fields_template", [], "any", false, false, false, 146), "isReadonlyField", ["type"], "method", false, false, false, 146)],             // line 147
($context["field_options"] ?? null));
            // line 148
            yield "               ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 148)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 149
                yield "                  ";
                $context["type_params"] = Twig\Extension\CoreExtension::merge(($context["type_params"] ?? null), ["on_change" => "this.form.submit()"]);
                // line 150
                yield "               ";
            } else {
                // line 151
                yield "                  ";
                $context["type_params"] = Twig\Extension\CoreExtension::merge(($context["type_params"] ?? null), ["on_change" => "reloadCategory()"]);
                // line 152
                yield "               ";
            }
            // line 153
            yield "               ";
            // line 154
            yield "               ";
            yield (string) $macros["fields"]->getTemplateForMacro("macro_field", $context, 154, $this->getSourceContext())->macro_field(...["type", CoreExtension::getAttribute($this->env, $this->source,             // line 156
($context["item"] ?? null), "dropdownType", ["type", ($context["type_params"] ?? null)], "method", false, false, false, 156), _n("Type", "Types", 1), Twig\Extension\CoreExtension::merge(            // line 158
($context["field_options"] ?? null), ["id" => ("dropdown_type" .             // line 159
($context["rand"] ?? null))])]);
            // line 161
            yield "
            ";
        }
        // line 163
        yield "
            ";
        // line 164
        $context["cat_params"] = Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ["entity" => (($_v12 = CoreExtension::getAttribute($this->env, $this->source,         // line 165
($context["item"] ?? null), "fields", [], "any", false, false, false, 165)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["entities_id"] ?? null) : null), "disabled" => (!((($tmp =         // line 166
($context["canupdate"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["can_requester"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))), "container_id" => ("category_field_container" .         // line 167
($context["rand"] ?? null))]);
        // line 169
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 169)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 170
            yield "               ";
            $context["cat_params"] = Twig\Extension\CoreExtension::merge(($context["cat_params"] ?? null), ["on_change" => "this.form.submit()"]);
            // line 173
            yield "            ";
        }
        // line 174
        yield "            ";
        if ((( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 174)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", ["itilcategories_id"], "method", false, false, false, 174)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && ((($_v13 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 174)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["itilcategories_id"] ?? null) : null) > 0))) {
            // line 175
            yield "               ";
            $context["cat_params"] = Twig\Extension\CoreExtension::merge(($context["cat_params"] ?? null), ["display_emptychoice" => false]);
            // line 178
            yield "            ";
        }
        // line 179
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 179) == "Ticket")) {
            // line 180
            yield "               ";
            if (((($_v14 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 180)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["type"] ?? null) : null) == Twig\Extension\CoreExtension::constant("Ticket::INCIDENT_TYPE"))) {
                // line 181
                yield "                  ";
                $context["cat_params"] = Twig\Extension\CoreExtension::merge(($context["cat_params"] ?? null), ["condition" => ["is_incident" => 1]]);
                // line 182
                yield "               ";
            } elseif (((($_v15 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 182)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["type"] ?? null) : null) == Twig\Extension\CoreExtension::constant("Ticket::DEMAND_TYPE"))) {
                // line 183
                yield "                  ";
                $context["cat_params"] = Twig\Extension\CoreExtension::merge(($context["cat_params"] ?? null), ["condition" => ["is_request" => 1]]);
                // line 184
                yield "               ";
            }
            // line 185
            yield "            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 185) == "Problem")) {
            // line 186
            yield "               ";
            $context["cat_params"] = Twig\Extension\CoreExtension::merge(($context["cat_params"] ?? null), ["condition" => ["is_problem" => 1]]);
            // line 187
            yield "            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 187) == "Change")) {
            // line 188
            yield "               ";
            $context["cat_params"] = Twig\Extension\CoreExtension::merge(($context["cat_params"] ?? null), ["condition" => ["is_change" => 1]]);
            // line 189
            yield "            ";
        }
        // line 190
        yield "            <span id=\"category_block_";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\">
            ";
        // line 191
        yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 191, $this->getSourceContext())->macro_dropdownField(...["ITILCategory", "itilcategories_id", (($_v16 = CoreExtension::getAttribute($this->env, $this->source,         // line 194
($context["item"] ?? null), "fields", [], "any", false, false, false, 194)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["itilcategories_id"] ?? null) : null), _n("Category", "Categories", 1),         // line 196
($context["cat_params"] ?? null)]);
        // line 197
        yield "
            </span>

            ";
        // line 201
        yield "            ";
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/fields/status.html.twig");
        yield "

            ";
        // line 204
        yield "            ";
        if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 204), "global_validation", [], "array", true, true, false, 204)) ? (Twig\Extension\CoreExtension::default((($_v17 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 204)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["global_validation"] ?? null) : null), 1)) : (1)) != 1)) {
            // line 205
            yield "               ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/fields/global_validation.html.twig");
            yield "
            ";
        }
        // line 207
        yield "
            ";
        // line 208
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["requesttypes_id"], "method", false, false, false, 208)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 209
            yield "               ";
            yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 209, $this->getSourceContext())->macro_dropdownField(...["RequestType", "requesttypes_id", (($_v18 = CoreExtension::getAttribute($this->env, $this->source,             // line 212
($context["item"] ?? null), "fields", [], "any", false, false, false, 212)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["requesttypes_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("RequestType"), Twig\Extension\CoreExtension::merge(            // line 214
($context["field_options"] ?? null), ["condition" => ["is_active" => 1, "is_ticketheader" => 1]])]);
            // line 220
            yield "
            ";
        }
        // line 222
        yield "
            ";
        // line 223
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/fields/priority_matrix.html.twig");
        yield "

            ";
        // line 225
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["locations_id"], "method", false, false, false, 225)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 226
            yield "               ";
            yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 226, $this->getSourceContext())->macro_dropdownField(...["Location", "locations_id", (($_v19 = CoreExtension::getAttribute($this->env, $this->source,             // line 229
($context["item"] ?? null), "fields", [], "any", false, false, false, 229)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), Twig\Extension\CoreExtension::merge(            // line 231
($context["field_options"] ?? null), ["hide_if_no_elements" => true, "entity" => (($_v20 = CoreExtension::getAttribute($this->env, $this->source,             // line 233
($context["item"] ?? null), "fields", [], "any", false, false, false, 233)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["entities_id"] ?? null) : null), "entity_sons" => true])]);
            // line 236
            yield "
            ";
        }
        // line 238
        yield "
            ";
        // line 239
        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 239)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 239) == "Ticket"))) {
            // line 240
            yield "               ";
            yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 240, $this->getSourceContext())->macro_dropdownField(...["Contract", "_contracts_id", ((CoreExtension::getAttribute($this->env, $this->source,             // line 243
($context["params"] ?? null), "_contracts_id", [], "array", true, true, false, 243)) ? (Twig\Extension\CoreExtension::default((($_v21 = ($context["params"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["_contracts_id"] ?? null) : null), 0)) : (0)), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Contract"), Twig\Extension\CoreExtension::merge(            // line 245
($context["field_options"] ?? null), ["entity" => (($_v22 = CoreExtension::getAttribute($this->env, $this->source,             // line 246
($context["item"] ?? null), "fields", [], "any", false, false, false, 246)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["entities_id"] ?? null) : null), "width" => "100%", "hide_if_no_elements" => true, "nochecklimit" => true])]);
            // line 251
            yield "
            ";
        }
        // line 253
        yield "
            ";
        // line 254
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 254) == "Ticket") && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 254)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ||  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 254)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 255
            yield "               ";
            yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownTimestampField", $context, 255, $this->getSourceContext())->macro_dropdownTimestampField(...["actiontime", (($_v23 = CoreExtension::getAttribute($this->env, $this->source,             // line 257
($context["item"] ?? null), "fields", [], "any", false, false, false, 257)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["actiontime"] ?? null) : null), __("Total duration"),             // line 259
($context["field_options"] ?? null)]);
            // line 260
            yield "
            ";
        }
        // line 262
        yield "
            ";
        // line 263
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["externalid"], "method", false, false, false, 263)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 264
            yield "               ";
            yield (string) $macros["fields"]->getTemplateForMacro("macro_textField", $context, 264, $this->getSourceContext())->macro_textField(...["externalid", (($_v24 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 264)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["externalid"] ?? null) : null), __("External ID"), ($context["field_options"] ?? null)]);
            yield "
            ";
        }
        // line 266
        yield "
            ";
        // line 267
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        yield "
         </div>
      </section>
   </section>

   ";
        // line 272
        $context["actors_show"] = ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "actors", [], "array", true, true, false, 272) || ((($_v25 = ($context["headers_states"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["actors"] ?? null) : null) == "true"))) ? (true) : (false));
        // line 273
        yield "   <section class=\"accordion-item\" aria-label=\"";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Actors"), "html", null, true);
        yield "\">
      <div class=\"accordion-header\" id=\"heading-actor\" title=\"";
        // line 274
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Actors"), "html", null, true);
        yield "\" data-bs-toggle=\"tooltip\">
         <button class=\"accordion-button ";
        // line 275
        yield (string) (((($tmp = ($context["actors_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
        yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#actors\" aria-expanded=\"true\" aria-controls=\"actors\">
            <i class=\"ti ti-users\"></i>
            <span class=\"item-title\">
                ";
        // line 278
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Actors"), "html", null, true);
        yield "
            </span>
            <span class=\"badge bg-secondary text-secondary-fg ms-2\">
               ";
        // line 281
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "countActors", [], "method", false, false, false, 281), "html", null, true);
        yield "
            </span>
            ";
        // line 283
        if ((( !(($tmp = (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "template_preview", [], "array", true, true, false, 283) &&  !(null === (($_v26 = ($context["params"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["template_preview"] ?? null) : null)))) ? ((($_v27 = ($context["params"] ?? null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27["template_preview"] ?? null) : null)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ((array_key_exists("cancreateuser", $context)) ? (Twig\Extension\CoreExtension::default(($context["cancreateuser"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (($tmp = ($context["canupdate"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 284
            yield "               ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/user/create_user.html.twig");
            yield "
            ";
        }
        // line 286
        yield "         </button>
      </div>
      <div id=\"actors\" class=\"accordion-collapse collapse ";
        // line 288
        yield (string) (((($tmp = ($context["actors_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
        yield "\" aria-labelledby=\"heading-actor\">
         <div class=\"accordion-body accordion-actors row m-0 mt-n2\">
            ";
        // line 290
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/actors/main.html.twig");
        yield "
         </div>
      </div>
   </section>

   ";
        // line 295
        if ((($tmp = ((array_key_exists("canreadnote", $context)) ? (Twig\Extension\CoreExtension::default(($context["canreadnote"] ?? null), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 296
            yield "      ";
            $context["notes"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Notepad::getAllForItem", [$this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("Entity", (($_v28 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 296)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["entities_id"] ?? null) : null)), "Ticket"]);
            // line 297
            yield "      ";
            $context["notes_show"] = ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "notes", [], "array", true, true, false, 297) || ((($_v29 = ($context["headers_states"] ?? null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["notes"] ?? null) : null) == "true"))) ? (true) : ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["notes"] ?? null)) > 0)));
            // line 298
            yield "       ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["notes"] ?? null)) != 0)) {
                // line 299
                yield "          <section class=\"accordion-item\" aria-label=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Notes"), "html", null, true);
                yield "\">
             <div class=\"accordion-header\" id=\"notes-heading\" title=\"";
                // line 300
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Notes"), "html", null, true);
                yield "\" data-bs-toggle=\"tooltip\">
                <button class=\"accordion-button ";
                // line 301
                yield (string) (((($tmp = ($context["notes_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
                yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#notes\" aria-expanded=\"true\" aria-controls=\"notes\">
                   <i class=\"ti ti-notes\"></i>
                   <span class=\"item-title\">
                      ";
                // line 304
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Entity notes"), "html", null, true);
                yield "
                   </span>
                   <span class=\"badge bg-secondary text-secondary-fg ms-2\">";
                // line 306
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["notes"] ?? null)), "html", null, true);
                yield "</span>
                </button>
             </div>
             <div id=\"notes\" class=\"accordion-collapse collapse ";
                // line 309
                yield (string) (((($tmp = ($context["notes_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
                yield "\" aria-labelledby=\"notes-heading\">
                <div class=\"accordion-body row m-0 mt-n2\">
                  ";
                // line 311
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["notes"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
                    // line 312
                    yield "                     <div class=\"alert alert-info entitynote rich_text_container\" role=\"alert\">
                        ";
                    // line 313
                    yield (string) $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml((($_v30 = $context["note"]) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["content"] ?? null) : null));
                    yield "

                        ";
                    // line 315
                    yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/sub_documents.html.twig", ["item" => $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem((($_v31 =                     // line 316
$context["note"]) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31["itemtype"] ?? null) : null), (($_v32 = $context["note"]) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32["items_id"] ?? null) : null)), "entry" =>                     // line 317
$context["note"]]);
                    // line 318
                    yield "
                     </div>
                  ";
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
                unset($context['_seq'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 321
                yield "                </div>
             </div>
          </section>
       ";
            }
            // line 325
            yield "   ";
        }
        // line 326
        yield "
   ";
        // line 327
        if ((array_key_exists("item_commonitilobject", $context) &&  !(null === ($context["item_commonitilobject"] ?? null)))) {
            // line 328
            yield "      ";
            $context["items_show"] = ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "items", [], "array", true, true, false, 328) || ((($_v33 = ($context["headers_states"] ?? null)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33["items"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 329
            yield "      <section class=\"accordion-item\" aria-label=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Item", "Items", Session::getPluralNumber()), "html", null, true);
            yield "\">
         <div class=\"accordion-header\" id=\"items-heading\" title=\"";
            // line 330
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Item", "Items", Session::getPluralNumber()), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 331
            yield (string) (((($tmp = ($context["items_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
            yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#items\" aria-expanded=\"true\" aria-controls=\"items\">
               <i class=\"ti ti-package\"></i>
               <span class=\"item-title\">
                    ";
            // line 334
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Item", "Items", Session::getPluralNumber()), "html", null, true);
            yield "
                </span>
               <span class=\"item-counter badge bg-secondary text-secondary-fg ms-2\"></span>
               ";
            // line 337
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", ["items_id"], "method", false, false, false, 337)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 338
                yield "                  <span class=\"required\">*</span>
               ";
            }
            // line 340
            yield "            </button>
         </div>
         <div id=\"items\" class=\"accordion-collapse collapse ";
            // line 342
            yield (string) (((($tmp = ($context["items_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
            yield "\" aria-labelledby=\"items-heading\">
            <div class=\"accordion-body accordion-items row m-0 mt-n2\">
               ";
            // line 344
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item_commonitilobject"] ?? null), "itemAddForm", [($context["item"] ?? null), Twig\Extension\CoreExtension::merge(((array_key_exists("params", $context)) ? (Twig\Extension\CoreExtension::default(($context["params"] ?? null), [])) : ([])), ["entities_id" => ($context["entities_id"] ?? null)])], "method", false, false, false, 344), "html", null, true);
            yield "
            </div>
         </div>
      </section>
   ";
        }
        // line 349
        yield "
   ";
        // line 350
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 350) == "Ticket")) {
            // line 351
            yield "      ";
            $context["la_content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 352
                yield "         ";
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/service_levels.html.twig");
                yield "
      ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 354
            yield "
      ";
            // line 355
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim(($context["la_content"] ?? null))) > 0)) {
                // line 356
                yield "         ";
                $context["nb_la"] = (((((((($_v34 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 356)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34["slas_id_tto"] ?? null) : null) > 0)) ? (1) : (0)) + ((((($_v35 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 356)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35["slas_id_ttr"] ?? null) : null) > 0)) ? (1) : (0))) + ((((($_v36 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 356)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36["olas_id_tto"] ?? null) : null) > 0)) ? (1) : (0))) + ((((($_v37 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 356)) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37["olas_id_ttr"] ?? null) : null) > 0)) ? (1) : (0)));
                // line 357
                yield "         ";
                $context["servicelevels_show"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "service-levels", [], "array", true, true, false, 357) && ((($_v38 = ($context["headers_states"] ?? null)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38["service-levels"] ?? null) : null) == "true"))) ? (true) : (false));
                // line 358
                yield "         <section class=\"accordion-item\" aria-label=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Service level", "Service levels", Session::getPluralNumber()), "html", null, true);
                yield "\">
            <div class=\"accordion-header\" id=\"service-levels-heading\" title=\"";
                // line 359
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Service level", "Service levels", Session::getPluralNumber()), "html", null, true);
                yield "\" data-bs-toggle=\"tooltip\">
               <button class=\"accordion-button ";
                // line 360
                yield (string) (((($tmp = ($context["servicelevels_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
                yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#service-levels\" aria-expanded=\"true\" aria-controls=\"service-levels\">
                  <i class=\"ti ti-alarm\"></i>
                  <span class=\"item-title\">
                     ";
                // line 363
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Service level", "Service levels", Session::getPluralNumber()), "html", null, true);
                yield "
                  </span>
                  ";
                // line 365
                if ((($context["nb_la"] ?? null) > 0)) {
                    // line 366
                    yield "                     <span class=\"badge bg-secondary text-secondary-fg ms-2\">";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nb_la"] ?? null), "html", null, true);
                    yield "</span>
                  ";
                }
                // line 368
                yield "               </button>
            </div>
            <div id=\"service-levels\" class=\"accordion-collapse collapse ";
                // line 370
                yield (string) (((($tmp = ($context["servicelevels_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
                yield "\" aria-labelledby=\"service-levels-heading\">
               <div class=\"accordion-body row m-0 mt-n2\">
                  ";
                // line 372
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["la_content"] ?? null), "html", null, true);
                yield "
               </div>
            </div>
         </section>
      ";
            }
            // line 377
            yield "   ";
        }
        // line 378
        yield "
   ";
        // line 379
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 379), ["Problem", "Change"])) {
            // line 380
            yield "      ";
            $context["analysis_fields"] = ["impactcontent" => __("Impacts"), "causecontent" => __("Causes"), "symptomcontent" => __("Symptoms"), "controlistcontent" => __("Control list")];
            // line 386
            yield "
      ";
            // line 387
            $context["nb_analysis"] = 0;
            // line 388
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["analysis_fields"] ?? null));
            foreach ($context['_seq'] as $context["analysis_field"] => $context["label"]) {
                // line 389
                yield "         ";
                if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", [$context["analysis_field"]], "method", false, false, false, 389)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim((($_v39 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 389)) && is_array($_v39) || $_v39 instanceof ArrayAccess ? ($_v39[(($_v40 = $context["analysis_field"]) instanceof \Stringable ? (string) $_v40 : $_v40)] ?? null) : null))) > 0))) {
                    // line 390
                    yield "            ";
                    $context["nb_analysis"] = (($context["nb_analysis"] ?? null) + 1);
                    // line 391
                    yield "         ";
                }
                // line 392
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['analysis_field'], $context['label'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 393
            yield "      ";
            $context["analysis_show"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "analysis", [], "array", true, true, false, 393) && ((($_v41 = ($context["headers_states"] ?? null)) && is_array($_v41) || $_v41 instanceof ArrayAccess ? ($_v41["analysis"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 394
            yield "      <section class=\"accordion-item\" aria-label=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Analysis"), "html", null, true);
            yield "\">
         <div class=\"accordion-header\" id=\"analysis-heading\" title=\"";
            // line 395
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Analysis"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 396
            yield (string) (((($tmp = ($context["analysis_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
            yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#analysis\" aria-expanded=\"true\" aria-controls=\"analysis\">
               <i class=\"ti ti-eyeglass\"></i>
               <span class=\"item-title\">
                    ";
            // line 399
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Analysis"), "html", null, true);
            yield "
               </span>
               ";
            // line 401
            if ((($context["nb_analysis"] ?? null) > 0)) {
                // line 402
                yield "                  <span class=\"badge bg-secondary text-secondary-fg ms-2\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nb_analysis"] ?? null), "html", null, true);
                yield "</span>
               ";
            }
            // line 404
            yield "            </button>
         </div>
         <div id=\"analysis\" class=\"accordion-collapse collapse ";
            // line 406
            yield (string) (((($tmp = ($context["analysis_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
            yield "\" aria-labelledby=\"analysis-heading\">
            <div class=\"accordion-body row m-0 mt-n2\">
               ";
            // line 408
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["analysis_fields"] ?? null));
            foreach ($context['_seq'] as $context["analysis_field"] => $context["label"]) {
                // line 409
                yield "                  ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", [$context["analysis_field"]], "method", false, false, false, 409)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 410
                    yield "                     ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 410, $this->getSourceContext())->macro_textareaField(...[                    // line 411
$context["analysis_field"], (($_v42 = CoreExtension::getAttribute($this->env, $this->source,                     // line 412
($context["item"] ?? null), "fields", [], "any", false, false, false, 412)) && is_array($_v42) || $_v42 instanceof ArrayAccess ? ($_v42[(($_v43 = $context["analysis_field"]) instanceof \Stringable ? (string) $_v43 : $_v43)] ?? null) : null),                     // line 413
$context["label"], Twig\Extension\CoreExtension::merge(                    // line 414
($context["field_options"] ?? null), ["enable_richtext" => true, "is_horizontal" => false])]);
                    // line 418
                    yield "
                  ";
                }
                // line 420
                yield "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['analysis_field'], $context['label'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 421
            yield "            </div>
         </div>
      </section>
   ";
        }
        // line 425
        yield "
   ";
        // line 426
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 426) == "Change")) {
            // line 427
            yield "      ";
            $context["plans_fields"] = ["rolloutplancontent" => __("Deployment plan"), "backoutplancontent" => __("Backup plan"), "checklistcontent" => __("Checklist")];
            // line 432
            yield "
      ";
            // line 433
            $context["nb_plans"] = 0;
            // line 434
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["plans_fields"] ?? null));
            foreach ($context['_seq'] as $context["plans_field"] => $context["label"]) {
                // line 435
                yield "         ";
                if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", [$context["plans_field"]], "method", false, false, false, 435)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::trim((($_v44 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 435)) && is_array($_v44) || $_v44 instanceof ArrayAccess ? ($_v44[(($_v45 = $context["plans_field"]) instanceof \Stringable ? (string) $_v45 : $_v45)] ?? null) : null))) > 0))) {
                    // line 436
                    yield "            ";
                    $context["nb_plans"] = (($context["nb_plans"] ?? null) + 1);
                    // line 437
                    yield "         ";
                }
                // line 438
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['plans_field'], $context['label'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 439
            yield "
      ";
            // line 440
            $context["plans_show"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "plans", [], "array", true, true, false, 440) && ((($_v46 = ($context["headers_states"] ?? null)) && is_array($_v46) || $_v46 instanceof ArrayAccess ? ($_v46["plans"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 441
            yield "      <section class=\"accordion-item\" aria-label=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Plans"), "html", null, true);
            yield "\">
         <div class=\"accordion-header\" id=\"plans-heading\" title=\"";
            // line 442
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Plans"), "html", null, true);
            yield "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 443
            yield (string) (((($tmp = ($context["plans_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
            yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#plans\" aria-expanded=\"true\" aria-controls=\"plans\">
               <i class=\"ti ti-checkup-list\"></i>
               <span class=\"item-title\">
                    ";
            // line 446
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Plans"), "html", null, true);
            yield "
               </span>
               ";
            // line 448
            if ((($context["nb_plans"] ?? null) > 0)) {
                // line 449
                yield "                  <span class=\"badge bg-secondary text-secondary-fg ms-2\">";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nb_plans"] ?? null), "html", null, true);
                yield "</span>
               ";
            }
            // line 451
            yield "            </button>
         </div>
         <div id=\"plans\" class=\"accordion-collapse collapse ";
            // line 453
            yield (string) (((($tmp = ($context["plans_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
            yield "\" aria-labelledby=\"plans-heading\">
            <div class=\"accordion-body row m-0 mt-n2\">
               ";
            // line 455
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["plans_fields"] ?? null));
            foreach ($context['_seq'] as $context["plans_field"] => $context["label"]) {
                // line 456
                yield "                  ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", [$context["plans_field"]], "method", false, false, false, 456)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 457
                    yield "                     ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 457, $this->getSourceContext())->macro_textareaField(...[                    // line 458
$context["plans_field"], (($_v47 = CoreExtension::getAttribute($this->env, $this->source,                     // line 459
($context["item"] ?? null), "fields", [], "any", false, false, false, 459)) && is_array($_v47) || $_v47 instanceof ArrayAccess ? ($_v47[(($_v48 = $context["plans_field"]) instanceof \Stringable ? (string) $_v48 : $_v48)] ?? null) : null),                     // line 460
$context["label"], Twig\Extension\CoreExtension::merge(                    // line 461
($context["field_options"] ?? null), ["enable_richtext" => true, "is_horizontal" => false])]);
                    // line 465
                    yield "
                  ";
                }
                // line 467
                yield "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['plans_field'], $context['label'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 468
            yield "            </div>
         </div>
      </section>
   ";
        }
        // line 472
        yield "
   ";
        // line 473
        $context["linked_itilobjects_show"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["headers_states"] ?? null), "linked_itilobjects", [], "array", true, true, false, 473) && ((($_v49 = ($context["headers_states"] ?? null)) && is_array($_v49) || $_v49 instanceof ArrayAccess ? ($_v49["linked_itilobjects"] ?? null) : null) == "true"))) ? (true) : (false));
        // line 474
        yield "   ";
        $context["nb_linked_itilobjects"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 474)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (0) : ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("CommonITILObject_CommonITILObject::countAllLinks", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 474), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getId", [], "method", false, false, false, 474)])));
        // line 475
        yield "   <section class=\"accordion-item\" aria-label=\"";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("CommonITILObject_CommonITILObject", ($context["nb_linked_itilobjects"] ?? null)), "html", null, true);
        yield "\">
      <div class=\"accordion-header\" id=\"linked_itilobjects-heading\" title=\"";
        // line 476
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("CommonITILObject_CommonITILObject", ($context["nb_linked_itilobjects"] ?? null)), "html", null, true);
        yield "\" data-bs-toggle=\"tooltip\">
         <button class=\"accordion-button ";
        // line 477
        yield (string) (((($tmp = ($context["linked_itilobjects_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("collapsed"));
        yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#linked_itilobjects\" aria-expanded=\"true\" aria-controls=\"linked_itilobjects\">
            <i class=\"ti ti-link\"></i>
            ";
        // line 479
        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 479)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "_link", [], "array", false, true, false, 479), "items_id_2", [], "array", true, true, false, 479) &&  !(null === (($_v50 = (($_v51 = ($context["params"] ?? null)) && is_array($_v51) || $_v51 instanceof ArrayAccess ? ($_v51["_link"] ?? null) : null)) && is_array($_v50) || $_v50 instanceof ArrayAccess ? ($_v50["items_id_2"] ?? null) : null)))) ? ((($_v52 = (($_v53 = ($context["params"] ?? null)) && is_array($_v53) || $_v53 instanceof ArrayAccess ? ($_v53["_link"] ?? null) : null)) && is_array($_v52) || $_v52 instanceof ArrayAccess ? ($_v52["items_id_2"] ?? null) : null)) : (0)) > 0))) {
            // line 480
            yield "               ";
            $context["nb_linked_itilobjects"] = 1;
            // line 481
            yield "            ";
        }
        // line 482
        yield "            <span class=\"item-title\">
                 ";
        // line 483
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("CommonITILObject_CommonITILObject", ($context["nb_linked_itilobjects"] ?? null)), "html", null, true);
        yield "
            </span>
            ";
        // line 485
        if ((($context["nb_linked_itilobjects"] ?? null) > 0)) {
            // line 486
            yield "               <span class=\"badge bg-secondary text-secondary-fg ms-2\">";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nb_linked_itilobjects"] ?? null), "html", null, true);
            yield "</span>
            ";
        }
        // line 488
        yield "         </button>
      </div>
      <div id=\"linked_itilobjects\" class=\"accordion-collapse collapse ";
        // line 490
        yield (string) (((($tmp = ($context["linked_itilobjects_show"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("show") : (""));
        yield "\" aria-labelledby=\"linked_itilobjects-heading\">
         <div class=\"accordion-body\">
            ";
        // line 492
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/linked_itilobjects.html.twig");
        yield "
         </div>
      </div>
   </section>

   ";
        // line 497
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_ITIL_INFO_SECTION"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        yield "

    <span class=\"d-none d-md-block\">
        <button type=\"button\" class=\"switch-panel-width btn btn-icon btn-ghost-secondary position-absolute bottom-0 start-0 mb-2\">
            <i class=\"ti ti-caret-left-filled\"></i>
        </button>
    </span>
</div>

<script type=\"text/javascript\">
\$(function() {
   if (\$(window).width() < 768) { // medium breakpoint (Todo check if it\x27s possible to get bootstrap breakpoints withint javascript)
      \$(\x27#itil-data .accordion-collapse\x27).each(function() {
         \$(this).removeClass(\x27show\x27);
      })
   }
});

\$(function() {
    // Prevent display of accordion header tooltips when right panel is expanded
    \$(\x27#itil-data .accordion-header\x27).on(\x27show.bs.tooltip\x27, function(e) {
        if (!\$(\x27#itil-object-container\x27).hasClass(\x27right-collapsed\x27) && \$(e.target).hasClass(\x27accordion-header\x27)) {
            e.preventDefault();
        }
    });
});

var reloadCategory = function() {
    var type = \$(\x27[name=type]\x27).val();
   // Target only the category field to avoid conflicts with other field-container elements in the KB
    \$(\x27#category_field_container";
        // line 527
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\x27).load(
        \x27";
        // line 528
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("ajax/dropdownTicketCategories.php"), "html", null, true);
        yield "\x27,
        {
            \x27type\x27: type,
            \x27entity_restrict\x27: ";
        // line 531
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v54 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 531)) && is_array($_v54) || $_v54 instanceof ArrayAccess ? ($_v54["entities_id"] ?? null) : null), "html", null, true);
        yield ",
            \x27value\x27: ";
        // line 532
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v55 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 532)) && is_array($_v55) || $_v55 instanceof ArrayAccess ? ($_v55["itilcategories_id"] ?? null) : null), "html", null, true);
        yield ",
        }
    );
};
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/fields_panel.html.twig";
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
        return array (  1032 => 532,  1028 => 531,  1022 => 528,  1018 => 527,  985 => 497,  977 => 492,  972 => 490,  968 => 488,  962 => 486,  960 => 485,  955 => 483,  952 => 482,  949 => 481,  946 => 480,  944 => 479,  939 => 477,  935 => 476,  930 => 475,  927 => 474,  925 => 473,  922 => 472,  916 => 468,  909 => 467,  905 => 465,  903 => 461,  902 => 460,  901 => 459,  900 => 458,  898 => 457,  895 => 456,  891 => 455,  886 => 453,  882 => 451,  876 => 449,  874 => 448,  869 => 446,  863 => 443,  859 => 442,  854 => 441,  852 => 440,  849 => 439,  842 => 438,  839 => 437,  836 => 436,  833 => 435,  828 => 434,  826 => 433,  823 => 432,  820 => 427,  818 => 426,  815 => 425,  809 => 421,  802 => 420,  798 => 418,  796 => 414,  795 => 413,  794 => 412,  793 => 411,  791 => 410,  788 => 409,  784 => 408,  779 => 406,  775 => 404,  769 => 402,  767 => 401,  762 => 399,  756 => 396,  752 => 395,  747 => 394,  744 => 393,  737 => 392,  734 => 391,  731 => 390,  728 => 389,  723 => 388,  721 => 387,  718 => 386,  715 => 380,  713 => 379,  710 => 378,  707 => 377,  699 => 372,  694 => 370,  690 => 368,  684 => 366,  682 => 365,  677 => 363,  671 => 360,  667 => 359,  662 => 358,  659 => 357,  656 => 356,  654 => 355,  651 => 354,  644 => 352,  641 => 351,  639 => 350,  636 => 349,  628 => 344,  623 => 342,  619 => 340,  615 => 338,  613 => 337,  607 => 334,  601 => 331,  597 => 330,  592 => 329,  589 => 328,  587 => 327,  584 => 326,  581 => 325,  575 => 321,  558 => 318,  556 => 317,  555 => 316,  554 => 315,  549 => 313,  546 => 312,  529 => 311,  524 => 309,  518 => 306,  513 => 304,  507 => 301,  503 => 300,  498 => 299,  495 => 298,  492 => 297,  489 => 296,  487 => 295,  479 => 290,  474 => 288,  470 => 286,  464 => 284,  462 => 283,  457 => 281,  451 => 278,  445 => 275,  441 => 274,  436 => 273,  434 => 272,  426 => 267,  423 => 266,  417 => 264,  415 => 263,  412 => 262,  408 => 260,  406 => 259,  405 => 257,  403 => 255,  401 => 254,  398 => 253,  394 => 251,  392 => 246,  391 => 245,  390 => 243,  388 => 240,  386 => 239,  383 => 238,  379 => 236,  377 => 233,  376 => 231,  375 => 229,  373 => 226,  371 => 225,  366 => 223,  363 => 222,  359 => 220,  357 => 214,  356 => 212,  354 => 209,  352 => 208,  349 => 207,  343 => 205,  340 => 204,  334 => 201,  329 => 197,  327 => 196,  326 => 194,  325 => 191,  320 => 190,  317 => 189,  314 => 188,  311 => 187,  308 => 186,  305 => 185,  302 => 184,  299 => 183,  296 => 182,  293 => 181,  290 => 180,  287 => 179,  284 => 178,  281 => 175,  278 => 174,  275 => 173,  272 => 170,  269 => 169,  267 => 167,  266 => 166,  265 => 165,  264 => 164,  261 => 163,  257 => 161,  255 => 159,  254 => 158,  253 => 156,  251 => 154,  249 => 153,  246 => 152,  243 => 151,  240 => 150,  237 => 149,  234 => 148,  232 => 147,  231 => 146,  230 => 145,  229 => 142,  227 => 141,  225 => 140,  222 => 139,  218 => 137,  216 => 136,  215 => 134,  213 => 132,  211 => 131,  208 => 130,  204 => 128,  202 => 127,  201 => 125,  199 => 123,  197 => 122,  194 => 121,  190 => 119,  188 => 118,  187 => 116,  185 => 114,  183 => 113,  179 => 111,  177 => 110,  176 => 108,  175 => 106,  172 => 105,  169 => 104,  165 => 102,  163 => 101,  162 => 99,  160 => 97,  158 => 96,  155 => 95,  151 => 93,  149 => 90,  148 => 88,  147 => 86,  144 => 85,  140 => 84,  134 => 82,  128 => 80,  125 => 79,  122 => 78,  118 => 76,  116 => 73,  115 => 72,  114 => 70,  112 => 67,  109 => 66,  107 => 65,  102 => 63,  96 => 60,  89 => 56,  83 => 53,  77 => 50,  72 => 48,  67 => 47,  65 => 46,  61 => 44,  59 => 43,  57 => 42,  54 => 41,  52 => 39,  51 => 38,  50 => 37,  49 => 36,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/fields_panel.html.twig", "/var/www/glpi/templates/components/itilobject/fields_panel.html.twig");
    }
}
