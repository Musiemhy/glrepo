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

/* components/itilobject/timeline/timeline.html.twig */
class __TwigTemplate_b9717c414539dbf0dbfce1e38b4e074a extends Template
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
        $context["is_timeline_reversed"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("timeline_order") == Twig\Extension\CoreExtension::constant("CommonITILObject::TIMELINE_ORDER_REVERSE"));
        // line 34
        $context["is_helpdesk"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk");
        // line 35
        yield "
<div class=\"itil-timeline d-flex flex-column align-items-start mb-auto ";
        // line 36
        yield (string) (((($tmp = ($context["is_helpdesk"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("px-3 py-2") : (""));
        yield "\">
    ";
        // line 37
        if ( !(($tmp = ($context["is_timeline_reversed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "        ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/main_description.html.twig");
            yield "
    ";
        } else {
            // line 40
            yield "        ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/approbation_form.html.twig");
            yield "
        ";
            // line 41
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/answer.html.twig");
            yield "
    ";
        }
        // line 43
        yield "
    ";
        // line 44
        $context["status_closed"] = CoreExtension::inFilter((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 44)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["status"] ?? null) : null), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getClosedStatusArray", [], "method", false, false, false, 44));
        // line 45
        yield "
    ";
        // line 47
        yield "    ";
        $context["user_cache"] = [];
        // line 48
        yield "
    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["timeline"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 50
            yield "        ";
            $context["entry_i"] = (($_v1 = $context["entry"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["item"] ?? null) : null);
            // line 51
            yield "        ";
            $context["entry_object"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "object", [], "array", true, true, false, 51) &&  !(null === (($_v2 = $context["entry"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["object"] ?? null) : null)))) ? ((($_v3 = $context["entry"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["object"] ?? null) : null)) : ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem((($_v4 = $context["entry"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["type"] ?? null) : null), (($_v5 = ($context["entry_i"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["id"] ?? null) : null))));
            // line 52
            yield "        ";
            $context["entry_state"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["entry_i"] ?? null), "state", [], "array", true, true, false, 52) &&  !(null === (($_v6 = ($context["entry_i"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["state"] ?? null) : null)))) ? ((($_v7 = ($context["entry_i"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["state"] ?? null) : null)) : (null));
            // line 53
            yield "        ";
            $context["users_id"] = (($_v8 = ($context["entry_i"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["users_id"] ?? null) : null);
            // line 54
            yield "        ";
            $context["is_private"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["entry_i"] ?? null), "is_private", [], "array", true, true, false, 54) &&  !(null === (($_v9 = ($context["entry_i"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["is_private"] ?? null) : null)))) ? ((($_v10 = ($context["entry_i"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["is_private"] ?? null) : null)) : (false));
            // line 55
            yield "        ";
            $context["date_creation"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["entry_i"] ?? null), "date_creation", [], "array", true, true, false, 55) &&  !(null === (($_v11 = ($context["entry_i"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["date_creation"] ?? null) : null)))) ? ((($_v12 = ($context["entry_i"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["date_creation"] ?? null) : null)) : ((($_v13 = ($context["entry_i"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["date"] ?? null) : null)));
            // line 56
            yield "        ";
            $context["date_mod"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["entry_i"] ?? null), "date_mod", [], "array", true, true, false, 56) &&  !(null === (($_v14 = ($context["entry_i"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["date_mod"] ?? null) : null)))) ? ((($_v15 = ($context["entry_i"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["date_mod"] ?? null) : null)) : (($context["date_creation"] ?? null)));
            // line 57
            yield "        ";
            $context["entry_rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 58
            yield "        ";
            $context["is_current_user"] = (($context["users_id"] ?? null) == $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"));
            // line 59
            yield "        ";
            $context["anonym_user"] = ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk") &&  !(($tmp = ($context["is_current_user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")) != Twig\Extension\CoreExtension::constant("Entity::ANONYMIZE_DISABLED")));
            // line 60
            yield "
        ";
            // line 61
            $context["is_private_class"] = (((($tmp = ($context["is_private"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("private-item") : (""));
            // line 62
            yield "
        ";
            // line 63
            $context["can_edit_i"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["entry_i"] ?? null), "can_edit", [], "array", true, true, false, 63) &&  !(null === (($_v16 = ($context["entry_i"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["can_edit"] ?? null) : null)))) ? ((($_v17 = ($context["entry_i"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["can_edit"] ?? null) : null)) : (false));
            // line 64
            yield "
        ";
            // line 65
            $context["timeline_position"] = (($_v18 = ($context["entry_i"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["timeline_position"] ?? null) : null);
            // line 66
            yield "        ";
            $context["item_position"] = "t-left";
            // line 67
            yield "        ";
            if ((($context["timeline_position"] ?? null) == Twig\Extension\CoreExtension::constant("CommonITILObject::TIMELINE_LEFT"))) {
                // line 68
                yield "            ";
                $context["item_position"] = "t-left";
                // line 69
                yield "        ";
            } elseif ((($context["timeline_position"] ?? null) == Twig\Extension\CoreExtension::constant("CommonITILObject::TIMELINE_MIDLEFT"))) {
                // line 70
                yield "            ";
                $context["item_position"] = "t-left t-middle";
                // line 71
                yield "        ";
            } elseif ((($context["timeline_position"] ?? null) == Twig\Extension\CoreExtension::constant("CommonITILObject::TIMELINE_MIDRIGHT"))) {
                // line 72
                yield "            ";
                $context["item_position"] = "t-right t-middle";
                // line 73
                yield "        ";
            } elseif ((($context["timeline_position"] ?? null) == Twig\Extension\CoreExtension::constant("CommonITILObject::TIMELINE_RIGHT"))) {
                // line 74
                yield "            ";
                $context["item_position"] = "t-right";
                // line 75
                yield "        ";
            }
            // line 76
            yield "
        ";
            // line 77
            $context["itiltype"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "itiltype", [], "array", true, true, false, 77)) ? (("ITIL" . (($_v19 = $context["entry"]) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["itiltype"] ?? null) : null))) : ((($_v20 = $context["entry"]) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["type"] ?? null) : null)));
            // line 78
            yield "
        ";
            // line 79
            $context["state_class"] = "";
            // line 80
            yield "        ";
            if ((($context["entry_state"] ?? null) === constant("Planning::INFO"))) {
                // line 81
                yield "            ";
                $context["state_class"] = "info";
                // line 82
                yield "        ";
            }
            // line 83
            yield "        ";
            if ((($context["entry_state"] ?? null) === constant("Planning::TODO"))) {
                // line 84
                yield "            ";
                $context["state_class"] = "todo";
                // line 85
                yield "        ";
            }
            // line 86
            yield "        ";
            if ((($context["entry_state"] ?? null) === constant("Planning::DONE"))) {
                // line 87
                yield "            ";
                $context["state_class"] = "done";
                // line 88
                yield "        ";
            }
            // line 89
            yield "
        ";
            // line 90
            $context["solution_class"] = "";
            // line 91
            yield "        ";
            if ((((($context["itiltype"] ?? null) == "ITILSolution") || (($context["itiltype"] ?? null) == "ITILValidation")) && CoreExtension::getAttribute($this->env, $this->source, ($context["entry_i"] ?? null), "status", [], "array", true, true, false, 91))) {
                // line 92
                yield "            ";
                $context["status"] = (((($context["itiltype"] ?? null) == "ITILSolution")) ? ((($_v21 = ($context["entry_i"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["status"] ?? null) : null)) : (Twig\Extension\CoreExtension::replace((($_v22 = ($context["entry_i"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["status"] ?? null) : null), ["status_" => ""])));
                // line 93
                yield "            ";
                if ((($context["status"] ?? null) == Twig\Extension\CoreExtension::constant("CommonITILValidation::WAITING"))) {
                    // line 94
                    yield "                ";
                    $context["solution_class"] = "waiting";
                    // line 95
                    yield "            ";
                }
                // line 96
                yield "            ";
                if ((($context["status"] ?? null) == Twig\Extension\CoreExtension::constant("CommonITILValidation::ACCEPTED"))) {
                    // line 97
                    yield "                ";
                    $context["solution_class"] = "accepted";
                    // line 98
                    yield "            ";
                }
                // line 99
                yield "            ";
                if ((($context["status"] ?? null) == Twig\Extension\CoreExtension::constant("CommonITILValidation::REFUSED"))) {
                    // line 100
                    yield "                ";
                    $context["solution_class"] = "refused";
                    // line 101
                    yield "            ";
                }
                // line 102
                yield "        ";
            }
            // line 103
            yield "
        ";
            // line 105
            yield "        ";
            // line 106
            yield "        ";
            $context["entry_user"] = (((array_key_exists("users_id", $context) &&  !(null === ($context["users_id"] ?? null)))) ? ((((CoreExtension::getAttribute($this->env, $this->source, ($context["user_cache"] ?? null), ("_" . ($context["users_id"] ?? null)), [], "array", true, true, false, 106) &&  !(null === (($_v23 = ($context["user_cache"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23[(($_v24 = ("_" . ($context["users_id"] ?? null))) instanceof \Stringable ? (string) $_v24 : $_v24)] ?? null) : null)))) ? ((($_v25 = ($context["user_cache"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25[(($_v26 = ("_" . ($context["users_id"] ?? null))) instanceof \Stringable ? (string) $_v26 : $_v26)] ?? null) : null)) : ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("User", ($context["users_id"] ?? null))))) : (null));
            // line 107
            yield "        ";
            // line 108
            yield "        ";
            $context["user_cache"] = Twig\Extension\CoreExtension::merge(($context["user_cache"] ?? null), [ (string)("_" . ($context["users_id"] ?? null)) => ($context["entry_user"] ?? null)]);
            // line 109
            yield "
        ";
            // line 110
            $context["anchor"] = (((($_v27 = $context["entry"]) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27["type"] ?? null) : null) . "_") . (($_v28 = ($context["entry_i"] ?? null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["id"] ?? null) : null));
            // line 111
            yield "        <div id=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["anchor"] ?? null), "html", null, true);
            yield "\" class=\"timeline-item mb-3 ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["is_private_class"] ?? null), "html", null, true);
            yield " ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itiltype"] ?? null), "html", null, true);
            yield " ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["state_class"] ?? null), "html", null, true);
            yield " ";
            yield (string) (((CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "class", [], "array", true, true, false, 111) &&  !(null === (($_v29 = $context["entry"]) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["class"] ?? null) : null)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v30 = $context["entry"]) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["class"] ?? null) : null), "html", null, true)) : (""));
            yield " ";
            yield (string) ((CoreExtension::inFilter("right", ($context["item_position"] ?? null))) ? ("ms-auto") : (""));
            yield "\"
             data-itemtype=\"";
            // line 112
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v31 = $context["entry"]) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31["type"] ?? null) : null), "html", null, true);
            yield "\" data-items-id=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v32 = ($context["entry_i"] ?? null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32["id"] ?? null) : null), "html", null, true);
            yield "\"
             data-testid=\"timeline-";
            // line 113
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v33 = $context["entry"]) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33["type"] ?? null) : null), "html", null, true);
            yield "\"
             ";
            // line 114
            if (CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "item_action", [], "array", true, true, false, 114)) {
                yield "data-item-action=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v34 = $context["entry"]) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34["item_action"] ?? null) : null), "html", null, true);
                yield "\"";
            }
            yield ">

            ";
            // line 116
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::PRE_SHOW_ITEM"), ["item" => ($context["entry_object"] ?? null), "options" => ["parent" => ($context["item"] ?? null), "rand" => ($context["entry_rand"] ?? null)]]), "html", null, true);
            yield "

         <div class=\"row\">
            <div class=\"col-auto todo-list-state ";
            // line 119
            yield (string) ((CoreExtension::inFilter("left", ($context["item_position"] ?? null))) ? ("ms-auto order-sm-last") : (""));
            yield "\">
               ";
            // line 120
            if ((($context["entry_state"] ?? null) === constant("Planning::TODO"))) {
                // line 121
                yield "                  <input
                     type=\"checkbox\"
                     class=\"form-check-input task-state-checkbox\"
                     aria-label=\"";
                // line 124
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("To do"), "html", null, true);
                yield "\"
                     title=\"";
                // line 125
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("To do"), "html", null, true);
                yield "\"
                     ";
                // line 126
                if ((($tmp = ($context["can_edit_i"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 127
                    yield "                        onclick=\"change_task_state(";
                    yield (string) json_encode((($_v35 = ($context["entry_i"] ?? null)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35["id"] ?? null) : null));
                    yield ", this)\"
                     ";
                } else {
                    // line 129
                    yield "                        disabled
                     ";
                }
                // line 131
                yield "                  >
               ";
            } elseif ((            // line 132
($context["entry_state"] ?? null) === constant("Planning::DONE"))) {
                // line 133
                yield "                  <input
                     type=\"checkbox\"
                     class=\"form-check-input task-state-checkbox\"
                     aria-label=\"";
                // line 136
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Done"), "html", null, true);
                yield "\"
                     title=\"";
                // line 137
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Done"), "html", null, true);
                yield "\"
                     checked
                     ";
                // line 139
                if ((($tmp = ($context["can_edit_i"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 140
                    yield "                        onclick=\"change_task_state(";
                    yield (string) json_encode((($_v36 = ($context["entry_i"] ?? null)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36["id"] ?? null) : null));
                    yield ", this)\"
                     ";
                } else {
                    // line 142
                    yield "                        disabled
                     ";
                }
                // line 144
                yield "                  >
               ";
            }
            // line 146
            yield "            </div>

                <div class=\"col-auto d-flex flex-column user-part ";
            // line 148
            yield (string) ((CoreExtension::inFilter("right", ($context["item_position"] ?? null))) ? ("ms-auto ms-0 order-sm-last") : ("order-first"));
            yield "\">
                    ";
            // line 149
            $context["avatar_rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
            // line 150
            yield "                    ";
            // line 151
            yield "                    ";
            if ( !(null === ($context["entry_user"] ?? null))) {
                // line 152
                yield "                        ";
                $context["user_fields"] = CoreExtension::getAttribute($this->env, $this->source, ($context["entry_user"] ?? null), "fields", [], "any", false, false, false, 152);
                // line 153
                yield "                        ";
                $context["user_fields"] = Twig\Extension\CoreExtension::merge(($context["user_fields"] ?? null), ["user_name" => CoreExtension::getAttribute($this->env, $this->source, ($context["entry_user"] ?? null), "getFriendlyName", [], "method", false, false, false, 153)]);
                // line 154
                yield "                        ";
                $context["user_fields"] = Twig\Extension\CoreExtension::merge(($context["user_fields"] ?? null), ["email" => CoreExtension::getAttribute($this->env, $this->source, ($context["entry_user"] ?? null), "getDefaultEmail", [], "method", false, false, false, 154)]);
                // line 155
                yield "                        ";
                if ((($tmp = Session::haveRight("user", Twig\Extension\CoreExtension::constant("READ"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 156
                    yield "                            ";
                    $context["user_fields"] = Twig\Extension\CoreExtension::merge(($context["user_fields"] ?? null), ["login" => (($_v37 = CoreExtension::getAttribute($this->env, $this->source, ($context["entry_user"] ?? null), "fields", [], "any", false, false, false, 156)) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37["name"] ?? null) : null)]);
                    // line 157
                    yield "                        ";
                }
                // line 158
                yield "                        <span id=\"timeline-avatar";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["avatar_rand"] ?? null), "html", null, true);
                yield "\">
                     ";
                // line 159
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/user/picture.html.twig", ["users_id" =>                 // line 160
($context["users_id"] ?? null), "user_object" =>                 // line 161
($context["entry_user"] ?? null), "enable_anonymization" =>                 // line 162
($context["anonym_user"] ?? null)], false);
                // line 163
                yield "
                  </span>
                        ";
                // line 165
                if (( !(($tmp = ($context["anonym_user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["entry_user"] ?? null), "canView", [], "method", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                    // line 166
                    yield "                            ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showToolTip", [Twig\Extension\CoreExtension::include($this->env, $context, "components/user/info_card.html.twig", ["user" =>                     // line 168
($context["user_fields"] ?? null), "user_object" =>                     // line 169
($context["entry_user"] ?? null), "enable_anonymization" => false], false), ["applyto" => ("timeline-avatar" .                     // line 172
($context["avatar_rand"] ?? null))]]);
                    // line 174
                    yield "                        ";
                }
                // line 175
                yield "                    ";
            } else {
                // line 176
                yield "                        <span id=\"timeline-avatar";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["avatar_rand"] ?? null), "html", null, true);
                yield "\"><span class=\"avatar avatar-md rounded\"></span></span>
                    ";
            }
            // line 178
            yield "                </div>
                <div class=\"col-12 col-sm d-flex flex-column content-part\">
                    <div class=\"mt-2 timeline-content ";
            // line 180
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["solution_class"] ?? null), "html", null, true);
            yield " flex-grow-1 ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["item_position"] ?? null), "html", null, true);
            yield " card\">
                        <div class=\"card-body px-1 px-xxl-3\">
                            ";
            // line 182
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/timeline_item_header.html.twig", ["user_object" =>             // line 183
($context["entry_user"] ?? null)]);
            // line 184
            yield "

                            ";
            // line 186
            if (CoreExtension::inFilter(($context["itiltype"] ?? null), Twig\Extension\CoreExtension::column($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), ($context["timeline_itemtypes"] ?? null), "type"))) {
                // line 187
                yield "                                ";
                $context["matching_types"] = Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), ($context["timeline_itemtypes"] ?? null), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "type", [], "any", false, false, false, 187) == ($context["itiltype"] ?? null)); });
                // line 188
                yield "                                ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["matching_types"] ?? null)) > 0)) {
                    // line 189
                    yield "                                    ";
                    $context["timeline_itemtype"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["matching_types"] ?? null));
                    // line 190
                    yield "                                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["timeline_itemtype"] ?? null), "template", [], "any", true, true, false, 190)) {
                        // line 191
                        yield "                                        ";
                        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["timeline_itemtype"] ?? null), "template", [], "any", false, false, false, 191), ["form_mode" => "view", "subitem" => CoreExtension::getAttribute($this->env, $this->source,                         // line 193
($context["timeline_itemtype"] ?? null), "item", [], "any", false, false, false, 193), "mention_options" =>                         // line 194
($context["mention_options"] ?? null)]);
                        // line 195
                        yield "
                                    ";
                    }
                    // line 197
                    yield "                                ";
                }
                // line 198
                yield "                            ";
            } else {
                // line 199
                yield "                                <div class=\"read-only-content\">
                                    ";
                // line 200
                if ((($tmp = (($_v38 = ($context["entry_i"] ?? null)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38["is_content_safe"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 201
                    yield "                                        ";
                    yield (string) (($_v39 = ($context["entry_i"] ?? null)) && is_array($_v39) || $_v39 instanceof ArrayAccess ? ($_v39["content"] ?? null) : null);
                    yield "
                                    ";
                } else {
                    // line 203
                    yield "                                        ";
                    yield (string) $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml((($_v40 = ($context["entry_i"] ?? null)) && is_array($_v40) || $_v40 instanceof ArrayAccess ? ($_v40["content"] ?? null) : null));
                    yield "
                                    ";
                }
                // line 205
                yield "                                </div>
                            ";
            }
            // line 207
            yield "                            <div class=\"edit-content collapse\">
                                <div class=\"ajax-content\"></div>
                            </div>
                        </div>
                    </div>

                    ";
            // line 213
            if (CoreExtension::getAttribute($this->env, $this->source, $context["entry"], "documents", [], "array", true, true, false, 213)) {
                // line 214
                yield "                        ";
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/sub_documents.html.twig", ["item" =>                 // line 215
($context["item"] ?? null), "entry" =>                 // line 216
$context["entry"]]);
                // line 217
                yield "
                    ";
            }
            // line 219
            yield "                </div>
            </div>

            ";
            // line 222
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::POST_SHOW_ITEM"), ["item" => ($context["entry_object"] ?? null), "options" => ["parent" => ($context["item"] ?? null), "rand" => ($context["entry_rand"] ?? null)]]), "html", null, true);
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
        unset($context['_seq'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 225
        yield "
    ";
        // line 226
        if ((($tmp = ($context["is_timeline_reversed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 227
            yield "        ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/main_description.html.twig");
            yield "
    ";
        }
        // line 229
        yield "
    <div class=\"timeline-item tasks-title d-none\">
        <h3>";
        // line 231
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_n("Task", "Tasks", Session::getPluralNumber()), "html", null, true);
        yield "</h3>
    </div>

    ";
        // line 234
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/todo-list-summary.html.twig");
        yield "

    <div class=\"timeline-item validations-title d-none mt-4\">
        <h3>";
        // line 237
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("CommonITILValidation", Session::getPluralNumber()), "html", null, true);
        yield "</h3>
    </div>

    ";
        // line 240
        if ( !(($tmp = ($context["is_timeline_reversed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 241
            yield "        ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/approbation_form.html.twig");
            yield "
        ";
            // line 242
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/answer.html.twig");
            yield "
    ";
        }
        // line 244
        yield "
    ";
        // line 245
        if ((array_key_exists("survey", $context) && (($tmp = ($context["survey"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 246
            yield "    <form
        data-testid=\"survey\"
        class=\"mt-5 w-100 hide-form-button-separator\"
        method=\"POST\"
        action=\"";
            // line 250
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath(get_class(($context["survey"] ?? null))), "html", null, true);
            yield "\"
    >
        <div>
            ";
            // line 253
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["survey"] ?? null), "showSatisactionForm", [($context["item"] ?? null), false], "method", false, false, false, 253), "html", null, true);
            yield "
            ";
            // line 255
            yield "            ";
        }
        // line 256
        yield "        </div>

        <script type=\"text/javascript\">
            \$(function() {
                \$(document).on(\"click\", \".edit-timeline-item\", function() {
                    var timeline_item = \$(this).closest(\".timeline-item\");
                    var content_block = timeline_item.find(\".timeline-content\");
                    var itemtype      = timeline_item.data(\x27itemtype\x27);
                    var items_id      = timeline_item.data(\x27items-id\x27);
                    var item_action   = timeline_item.data(\x27item-action\x27);

                    content_block.find(\".read-only-content\").hide();
                    content_block.find(\".edit-content\").show()
                        .find(\".ajax-content\")
                        .html(\x27<span class=\"spinner-border ms-auto\" role=\"status\" aria-hidden=\"true\"></span>\x27)
                        .load(\"";
        // line 271
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/timeline.php"), "html", null, true);
        yield "\", {
                            \x27action\x27     : \x27viewsubitem\x27,
                            \x27type\x27       : itemtype,
                            \x27parenttype\x27 : \x27";
        // line 274
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 274), "html", null, true);
        yield "\x27,
                            \x27";
        // line 275
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 275), "html", null, true);
        yield "\x27: ";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v41 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 275)) && is_array($_v41) || $_v41 instanceof ArrayAccess ? ($_v41["id"] ?? null) : null), "html", null, true);
        yield ",
                            \x27id\x27         : items_id,
                            \x27item_action\x27: item_action
                        });

                    timeline_item.find(\x27.timeline-item-buttons\x27).addClass(\x27d-none\x27);
                    timeline_item.find(\x27.close-edit-content\x27).removeClass(\x27d-none\x27);

                    \$(\"#itil-footer\").find(\".main-actions\").hide();
                    \$(\"#right-actions\").hide();
                });

                \$(document).on(\"click\", \".close-edit-content\", function() {
                    var timeline_item = \$(this).closest(\".timeline-item\");
                    timeline_item.find(\x27.timeline-item-buttons\x27).removeClass(\x27d-none\x27);
                    timeline_item.find(\x27.close-edit-content\x27).addClass(\x27d-none\x27);

                    // Dispose of the TinyMCE editor if any exists
                    timeline_item.find(\x27.ajax-content\x27).find(\x27textarea\x27).each(function() {
                        window.tinymce?.get(\$(this).attr(\x27id\x27))?.destroy();
                    });

                    timeline_item.find(\x27.ajax-content\x27).html(\x27\x27);
                    timeline_item.find(\x27.read-only-content\x27).show();

                    \$(\"#itil-footer .main-actions\").show();
                    \$(\"#right-actions\").show();
                });
            });

            // Align ITILReminder
            let result = document.evaluate(
                \x27//div[contains(@class, \"timeline-header\")][contains(@id, \"ITILReminder_\")]\x27,
                document,
                null,
                XPathResult.ORDERED_NODE_SNAPSHOT_TYPE,
                null
            );

            for (let i = 0; i < result.snapshotLength; i++) {
                let node = result.snapshotItem(i);
                let width = (i > 0 ? Math.max(result.snapshotItem(i - 1).offsetWidth, node.offsetWidth) : node.offsetWidth) + 1;
                node.style.setProperty(\x27width\x27, \x27var(--itilautobump-header-badge-width)\x27);
                node.style.setProperty(\x27flex-direction\x27, \x27row-reverse\x27);
                document.documentElement.style.setProperty(\x27--itilautobump-header-badge-width\x27, width + \x27px\x27);
            }

            function toggleTimelinePrivate(checked, check_element) {
                \$(check_element).closest(\x27.timeline-item\x27).toggleClass(\x27private-item\x27, checked);
            }
        </script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/timeline/timeline.html.twig";
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
        return array (  656 => 275,  652 => 274,  646 => 271,  629 => 256,  626 => 255,  622 => 253,  616 => 250,  610 => 246,  608 => 245,  605 => 244,  600 => 242,  595 => 241,  593 => 240,  587 => 237,  581 => 234,  575 => 231,  571 => 229,  565 => 227,  563 => 226,  560 => 225,  542 => 222,  537 => 219,  533 => 217,  531 => 216,  530 => 215,  528 => 214,  526 => 213,  518 => 207,  514 => 205,  508 => 203,  502 => 201,  500 => 200,  497 => 199,  494 => 198,  491 => 197,  487 => 195,  485 => 194,  484 => 193,  482 => 191,  479 => 190,  476 => 189,  473 => 188,  470 => 187,  468 => 186,  464 => 184,  462 => 183,  461 => 182,  454 => 180,  450 => 178,  444 => 176,  441 => 175,  438 => 174,  436 => 172,  435 => 169,  434 => 168,  432 => 166,  430 => 165,  426 => 163,  424 => 162,  423 => 161,  422 => 160,  421 => 159,  416 => 158,  413 => 157,  410 => 156,  407 => 155,  404 => 154,  401 => 153,  398 => 152,  395 => 151,  393 => 150,  391 => 149,  387 => 148,  383 => 146,  379 => 144,  375 => 142,  369 => 140,  367 => 139,  362 => 137,  358 => 136,  353 => 133,  351 => 132,  348 => 131,  344 => 129,  338 => 127,  336 => 126,  332 => 125,  328 => 124,  323 => 121,  321 => 120,  317 => 119,  311 => 116,  302 => 114,  298 => 113,  292 => 112,  277 => 111,  275 => 110,  272 => 109,  269 => 108,  267 => 107,  264 => 106,  262 => 105,  259 => 103,  256 => 102,  253 => 101,  250 => 100,  247 => 99,  244 => 98,  241 => 97,  238 => 96,  235 => 95,  232 => 94,  229 => 93,  226 => 92,  223 => 91,  221 => 90,  218 => 89,  215 => 88,  212 => 87,  209 => 86,  206 => 85,  203 => 84,  200 => 83,  197 => 82,  194 => 81,  191 => 80,  189 => 79,  186 => 78,  184 => 77,  181 => 76,  178 => 75,  175 => 74,  172 => 73,  169 => 72,  166 => 71,  163 => 70,  160 => 69,  157 => 68,  154 => 67,  151 => 66,  149 => 65,  146 => 64,  144 => 63,  141 => 62,  139 => 61,  136 => 60,  133 => 59,  130 => 58,  127 => 57,  124 => 56,  121 => 55,  118 => 54,  115 => 53,  112 => 52,  109 => 51,  106 => 50,  89 => 49,  86 => 48,  83 => 47,  80 => 45,  78 => 44,  75 => 43,  70 => 41,  65 => 40,  59 => 38,  57 => 37,  53 => 36,  50 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/timeline/timeline.html.twig", "/var/www/glpi/templates/components/itilobject/timeline/timeline.html.twig");
    }
}
