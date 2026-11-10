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

/* components/itilobject/footer.html.twig */
class __TwigTemplate_8c754c6c3c1e79816449649c3000b091 extends Template
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
        $context["is_helpdesk"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk");
        // line 34
        $context["timeline_btns_cls"] = ($context["left_regular_cls"] ?? null);
        // line 35
        $context["form_btns_cls"] = (((($tmp = ($context["is_expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["right_expanded_cls"] ?? null)) : ("col-lg"));
        // line 36
        $context["timeline_btn_layout"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpitimeline_action_btn_layout");
        // line 37
        $context["switch_btn_cls"] = "ti ti-caret-left-filled";
        // line 38
        if ((($tmp = ($context["is_expanded"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "    ";
            $context["timeline_btns_cls"] = ($context["left_expanded_cls"] ?? null);
            // line 40
            yield "    ";
            $context["form_btns_cls"] = ($context["right_expanded_cls"] ?? null);
            // line 41
            yield "    ";
            $context["switch_btn_cls"] = "ti ti-caret-right filled";
        }
        // line 43
        yield "
<div class=\"mx-n2 mb-n2 itil-footer itil-footer p-0 border-top\" id=\"itil-footer\">
   <div class=\"buttons-bar d-flex py-2\">
      <div class=\"col ";
        // line 46
        yield (string) (( !(($tmp = ($context["is_helpdesk"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["timeline_btns_cls"] ?? null), "html", null, true)) : (""));
        yield " ps-3 timeline-buttons d-flex\">
         ";
        // line 47
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "            ";
            $context["main_actions_itemtypes"] = Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), ($context["timeline_itemtypes"] ?? null), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return ( !CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "hide_in_menu", [], "any", true, true, false, 48) || (CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "hide_in_menu", [], "any", false, false, false, 48) != true)); });
            // line 49
            yield "
            ";
            // line 50
            $context["default_action_data"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["main_actions_itemtypes"] ?? null));
            // line 51
            yield "            ";
            $context["default_action"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::keys(($context["main_actions_itemtypes"] ?? null)));
            // line 52
            yield "            ";
            if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNotSolved", [], "method", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($context["default_action_data"] ?? null) != false))) {
                // line 53
                yield "               ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["main_actions_itemtypes"] ?? null)) > 1)) {
                    // line 54
                    yield "                  ";
                    $context["btn_class"] = (((($context["timeline_btn_layout"] ?? null) == Twig\Extension\CoreExtension::constant("Config::TIMELINE_ACTION_BTN_SPLITTED"))) ? ("btn-splitted") : ("btn-group"));
                    // line 55
                    yield "                  <div class=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["btn_class"] ?? null), "html", null, true);
                    yield " me-2 main-actions\">
               ";
                } else {
                    // line 57
                    yield "                  ";
                    // line 58
                    yield "                  <div class=\"main-actions\" style=\"display:inline-flex\">
               ";
                }
                // line 60
                yield "                  <button
                     class=\"btn btn-primary answer-action ";
                // line 61
                yield (string) (((($context["default_action"] ?? null) != "answer")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("action-" . ($context["default_action"] ?? null)), "html", null, true)) : (""));
                yield "\"
                     data-bs-toggle=\"collapse\"
                     data-bs-target=\"#new-";
                // line 63
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["default_action_data"] ?? null), "class", [], "any", false, false, false, 63), "html", null, true);
                yield "-block\"
                     type=\"button\"
                     aria-label=\"";
                // line 65
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["default_action_data"] ?? null), "label", [], "any", false, false, false, 65), "html", null, true);
                yield "\"
                  >
                     <i class=\"";
                // line 67
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["default_action_data"] ?? null), "icon", [], "any", false, false, false, 67), "html", null, true);
                yield "\"></i>
                     <span>";
                // line 68
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["default_action_data"] ?? null), "label", [], "any", false, false, false, 68), "html", null, true);
                yield "</span>
                  </button>

                  ";
                // line 71
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["main_actions_itemtypes"] ?? null)) > 1)) {
                    // line 72
                    yield "                     ";
                    if ((($context["timeline_btn_layout"] ?? null) == Twig\Extension\CoreExtension::constant("Config::TIMELINE_ACTION_BTN_SPLITTED"))) {
                        // line 73
                        yield "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["main_actions_itemtypes"] ?? null));
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
                        foreach ($context['_seq'] as $context["action"] => $context["timeline_itemtype"]) {
                            // line 74
                            yield "                        ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 74) > 0)) {
                                // line 75
                                yield "                              <button class=\"btn btn-primary answer-action action-";
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["action"], "html", null, true);
                                yield "\" data-bs-toggle=\"collapse\" data-bs-target=\"#new-";
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "class", [], "any", false, false, false, 75), "html", null, true);
                                yield "-block\">
                                 <i class=\"";
                                // line 76
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "icon", [], "any", false, false, false, 76), "html", null, true);
                                yield "\"></i>
                                 <span>";
                                // line 77
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "short_label", [], "any", false, false, false, 77), "html", null, true);
                                yield "</span>
                              </button>
                              ";
                            }
                            // line 80
                            yield "                        ";
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
                        unset($context['_seq'], $context['action'], $context['timeline_itemtype'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent);
                        $context += $_parent;
                        // line 81
                        yield "                     ";
                    } else {
                        // line 82
                        yield "                        <button
                           type=\"button\"
                           class=\"btn btn-primary dropdown-toggle dropdown-toggle-split ";
                        // line 84
                        yield (string) (((($context["default_action"] ?? null) != "answer")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("action-" . ($context["default_action"] ?? null)), "html", null, true)) : (""));
                        yield "\"
                           data-bs-toggle=\"dropdown\"
                           aria-expanded=\"false\"
                        >
                           <span class=\"visually-hidden\">";
                        // line 88
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("View other actions"), "html", null, true);
                        yield "</span>
                        </button>
                        <ul class=\"dropdown-menu\">
                              ";
                        // line 91
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["main_actions_itemtypes"] ?? null));
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
                        foreach ($context['_seq'] as $context["action"] => $context["timeline_itemtype"]) {
                            // line 92
                            yield "                                 ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 92) > 0)) {
                                // line 93
                                yield "                                 <li aria-label=\"";
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "label", [], "any", false, false, false, 93), "html", null, true);
                                yield "\"><a class=\"dropdown-item action-";
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["action"], "html", null, true);
                                yield " answer-action\" href=\"#\"
                                    data-bs-toggle=\"collapse\" data-bs-target=\"#new-";
                                // line 94
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "class", [], "any", false, false, false, 94), "html", null, true);
                                yield "-block\">
                                    <i class=\"";
                                // line 95
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "icon", [], "any", false, false, false, 95), "html", null, true);
                                yield "\"></i>
                                    <span>";
                                // line 96
                                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["timeline_itemtype"], "label", [], "any", false, false, false, 96), "html", null, true);
                                yield "</span>
                                 </a></li>
                                 ";
                            }
                            // line 99
                            yield "                              ";
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
                        unset($context['_seq'], $context['action'], $context['timeline_itemtype'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent);
                        $context += $_parent;
                        // line 100
                        yield "                        </ul>
                     ";
                    }
                    // line 102
                    yield "                  ";
                }
                // line 103
                yield "               </div>
            ";
            }
            // line 105
            yield "
            <ul class=\"legacy-timeline-actions\">
               ";
            // line 107
            yield (string) ((array_key_exists("legacy_timeline_actions", $context)) ? (Twig\Extension\CoreExtension::default(($context["legacy_timeline_actions"] ?? null), "")) : (""));
            yield "
            </ul>

            ";
            // line 110
            if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canSolve", [], "method", false, false, false, 110)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "checkRequiredFieldsFilled", [], "method", false, false, false, 110)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 111
                yield "               <i class=\"ti ti-alert-triangle text-warning me-2 d-flex align-items-center\"
                  data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                  title=\"";
                // line 113
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Solving this %s is not possible as one or more mandatory field is not filled"), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getTypeName", [1], "method", false, false, false, 113)), "html", null, true);
                yield "\"></i>
            ";
            }
            // line 115
            yield "
            <div class=\"ms-auto\"></div>

            ";
            // line 118
            if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canDeleteItem", [], "method", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["is_helpdesk"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                // line 119
                yield "               <button class=\"btn btn-ghost-danger me-2\" type=\"submit\" name=\"delete\" form=\"itil-form\">
                  <i class=\"ti ti-trash me-1\"></i>
                  <span>";
                // line 121
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Cancel ticket"), "html", null, true);
                yield "</span>
               </button>
            ";
            }
            // line 124
            yield "
            ";
            // line 125
            if ( !(($tmp = ($context["is_helpdesk"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 126
                yield "               ";
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/filter_timeline.html.twig");
                yield "
            ";
            }
            // line 128
            yield "         ";
        }
        // line 129
        yield "     </div>

      ";
        // line 131
        if ( !(($tmp = ($context["is_helpdesk"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 132
            yield "         <div class=\"form-buttons ";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["form_btns_cls"] ?? null), "html", null, true);
            yield " d-flex justify-content-between ms-auto ms-lg-0 my-n2 py-2 pe-3 card-footer border-top-0 position-relative\">
            <span class=\"d-none d-lg-block ms-n3\"
                  data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            // line 134
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Toggle panels width"), "html", null, true);
            yield "\">
               <button type=\"button\" class=\"switch-panel-width btn btn-icon btn-ghost-secondary px-0\">
                  <i class=\"";
            // line 136
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["switch_btn_cls"] ?? null), "html", null, true);
            yield "\"></i>
               </button>
               <button type=\"button\" class=\"collapse-panel btn btn-icon btn-ghost-secondary px-0 mr-1\">
                  <i class=\"ti ti-caret-right-filled\"></i>
               </button>
            </span>

            <span>
            ";
            // line 144
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 144)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 145
                yield "               <button
                  class=\"btn btn-primary\"
                  type=\"submit\"
                  name=\"add\"
                  form=\"itil-form\"
                  title=\"";
                // line 150
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
                yield "\"
                  aria-label=\"";
                // line 151
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
                yield "\"
               >
                  <i class=\"ti ti-plus\"></i>
                  <span class=\"d-none d-lg-block\">";
                // line 154
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
                yield "</span>
               </button>
            ";
            } else {
                // line 157
                yield "               ";
                // line 158
                yield "               <div class=\"btn-group flex-row-reverse\" role=\"group\" id=\"right-actions\" style=\"display:flex\">
                  ";
                // line 159
                $context["is_locked"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "locked", [], "array", true, true, false, 159) && (($tmp = (($_v0 = ($context["params"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["locked"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp));
                // line 160
                yield "                  ";
                $context["display_save_btn"] = ( !(($tmp = ($context["is_locked"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (((((($tmp = ($context["canupdate"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["can_requester"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = ($context["canpriority"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = ($context["canassign"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) || (($tmp = ($context["canassigntome"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)));
                // line 161
                yield "
                  ";
                // line 162
                if ((($tmp = ($context["display_save_btn"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 163
                    yield "                     <button
                        class=\"btn btn-primary btn-square\"
                        type=\"submit\"
                        name=\"update\"
                        form=\"itil-form\"
                        data-bs-toggle=\"tooltip\"
                        data-bs-placement=\"top\"
                        title=\"";
                    // line 170
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
                    yield "\"
                        aria-label=\"";
                    // line 171
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
                    yield "\"
                     >
                        <i class=\"ti ti-device-floppy\"></i>
                        <span class=\"d-none d-xl-block\">";
                    // line 174
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
                    yield "</span>
                     </button>
                  ";
                }
                // line 177
                yield "
                   ";
                // line 178
                if ((($tmp = ($context["canupdate"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 179
                    yield "                       ";
                    yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/form/single-action.html.twig", ["onlyicon" => true]);
                    // line 181
                    yield "
                   ";
                }
                // line 183
                yield "
                  ";
                // line 184
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "canDeleteItem", [], "method", false, false, false, 184)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 185
                    yield "                     ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 185)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 186
                        yield "                        <button class=\"btn btn-outline-secondary btn-square\" type=\"submit\" name=\"restore\" form=\"itil-form\"
                              title=\"";
                        // line 187
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Restore"), "html", null, true);
                        yield "\">
                           <i class=\"ti ti-trash-off\"></i>
                           <span class=\"d-none d-lg-block\">";
                        // line 189
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Restore"), "html", null, true);
                        yield "</span>
                        </button>

                        <button class=\"btn btn-outline-danger btn-square\" type=\"submit\" name=\"purge\" form=\"itil-form\"
                              title=\"";
                        // line 193
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                        yield "\"
                              onclick=\"return confirm(\x27";
                        // line 194
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Confirm the final deletion?"), "js"), "html", null, true);
                        yield "\x27);\">
                           <i class=\"ti ti-trash\"></i>
                           <span class=\"d-none d-lg-block\">";
                        // line 196
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                        yield "</span>
                        </button>
                     ";
                    } else {
                        // line 199
                        yield "                        <button class=\"btn btn-outline-danger btn-square\" type=\"submit\" name=\"delete\" form=\"itil-form\"
                              title=\"";
                        // line 200
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Put in trashbin"), "html", null, true);
                        yield "\"
                                data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                           <i class=\"ti ti-trash\"></i>
                        </button>
                     ";
                    }
                    // line 205
                    yield "                  ";
                }
                // line 206
                yield "               </div>
            ";
            }
            // line 208
            yield "            </span>
         </div>
      ";
        }
        // line 211
        yield "
   </div>
</div>

";
        // line 215
        $context["openfollowup"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_openfollowup", [], "array", true, true, false, 215) &&  !(null === (($_v1 = ($context["_get"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["_openfollowup"] ?? null) : null)))) ? ((($_v2 = ($context["_get"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["_openfollowup"] ?? null) : null)) : (false));
        // line 216
        $context["is_timeline_reversed"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("timeline_order") == Twig\Extension\CoreExtension::constant("CommonITILObject::TIMELINE_ORDER_REVERSE"));
        // line 217
        yield "
<script type=\"text/javascript\">

(function(){
    ";
        // line 226
        yield "   var scrollToTimelineStart = function() {
        // scroll body to ensure we are at bottom (useful for responsive display)
        \$(\x27html, body\x27).animate({
        scrollTop: ";
        // line 229
        yield (string) (((($tmp = ($context["is_timeline_reversed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("-") : (""));
        yield "\$(document).height()
        }, 0, function(){
            // scroll timeline with animation
            var timeline = \$(\"#itil-object-container .itil-left-side\");
            timeline.animate({
                scrollTop: ";
        // line 234
        yield (string) (((($tmp = ($context["is_timeline_reversed"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("-") : (""));
        yield "timeline.prop(\x27scrollHeight\x27)
            }, \x27slow\x27);
        });
   };

   \$(document).on(\"click\", \"#itil-footer .answer-action\", function() {
      scrollToTimelineStart();
   });

   // Hide primary actions whenever a top-level timeline answer form opens (direct children only, to ignore nested collapses inside forms).
   \$(document).on(\"show.bs.collapse\", \"#new-itilobject-form > .collapse\", function() {
      \$(\"#itil-footer .main-actions\").hide();
      \$(\"#right-actions\").hide();
      setHasUnsavedChanges(true);

      // Load the answer form on first open, then keep it (preserves input when toggling).
      const \$placeholder = \$(this).find(\x27.new-itil-answer-form[data-answer-loaded=\"false\"]\x27).first();
      if (\$placeholder.length) {
         ";
        // line 253
        yield "         const ajax_url = \"";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/timeline.php"), "js"), "html", null, true);
        yield "\"";
        if ((($tmp = ($context["openfollowup"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " + \"?_openfollowup=1\"";
        }
        yield ";
         \$placeholder
            .attr(\x27data-answer-loaded\x27, \x27true\x27)
            .html(\x27<div class=\"d-flex justify-content-center p-3\"><span class=\"spinner-border\" role=\"status\" aria-hidden=\"true\"></span></div>\x27)
            .load(ajax_url, {
               \x27action\x27     : \x27viewsubitem\x27,
               \x27type\x27       : \$placeholder.data(\x27subitem-type\x27),
               \x27parenttype\x27 : \x27";
        // line 260
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 260), "js"), "html", null, true);
        yield "\x27,
               \x27";
        // line 261
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 261), "js"), "html", null, true);
        yield "\x27: ";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 261), "html", null, true);
        yield ",
               \x27id\x27         : 0
            });
      }
   });

   // Restore primary actions once all top-level forms are fully hidden (direct children only, to avoid false positives from nested .collapse.show inside forms such as pending-reasons).
   \$(document).on(\"hidden.bs.collapse\", \"#new-itilobject-form > .collapse\", function() {
      if (\$(\"#new-itilobject-form > .collapse.show\").length === 0) {
         \$(\"#itil-footer .main-actions\").show();
         \$(\"#right-actions\").show();
         setHasUnsavedChanges(false);
      }
   });

   \$(\x27#itil-footer .form-buttons button[name=\"update\"]\x27).on(\x27click\x27, () => {
       const has_opened_new_form = \$(\x27#new-itilobject-form > .collapse.show\x27).length > 0
           || \$(\x27.timeline-item .edit-content\x27).filter((i, c) => c.textContent.trim().length > 0).length > 0;
       if (has_opened_new_form) {
          return confirm(\x27";
        // line 280
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("You have unsaved changes in the timeline. Are you sure you want to continue?"), "js"), "html", null, true);
        yield "\x27);
       }
   });

   \$(function() {
      ";
        // line 285
        if ((($tmp = ($context["openfollowup"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 286
            yield "         // trigger for reopen, show followup form in timeline
         var myCollapse = document.getElementById(\x27new-ITILFollowup-block\x27)
         var bsCollapse = new bootstrap.Collapse(myCollapse);
         bsCollapse.show();

         scrollToTimelineStart();
      ";
        }
        // line 293
        yield "   });
})();

</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/footer.html.twig";
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
        return array (  614 => 293,  605 => 286,  603 => 285,  595 => 280,  571 => 261,  567 => 260,  552 => 253,  531 => 234,  523 => 229,  518 => 226,  512 => 217,  510 => 216,  508 => 215,  502 => 211,  497 => 208,  493 => 206,  490 => 205,  482 => 200,  479 => 199,  473 => 196,  468 => 194,  464 => 193,  457 => 189,  452 => 187,  449 => 186,  446 => 185,  444 => 184,  441 => 183,  437 => 181,  434 => 179,  432 => 178,  429 => 177,  423 => 174,  417 => 171,  413 => 170,  404 => 163,  402 => 162,  399 => 161,  396 => 160,  394 => 159,  391 => 158,  389 => 157,  383 => 154,  377 => 151,  373 => 150,  366 => 145,  364 => 144,  353 => 136,  348 => 134,  342 => 132,  340 => 131,  336 => 129,  333 => 128,  327 => 126,  325 => 125,  322 => 124,  316 => 121,  312 => 119,  310 => 118,  305 => 115,  300 => 113,  296 => 111,  294 => 110,  288 => 107,  284 => 105,  280 => 103,  277 => 102,  273 => 100,  258 => 99,  252 => 96,  248 => 95,  244 => 94,  237 => 93,  234 => 92,  217 => 91,  211 => 88,  204 => 84,  200 => 82,  197 => 81,  182 => 80,  176 => 77,  172 => 76,  165 => 75,  162 => 74,  144 => 73,  141 => 72,  139 => 71,  133 => 68,  129 => 67,  124 => 65,  119 => 63,  114 => 61,  111 => 60,  107 => 58,  105 => 57,  99 => 55,  96 => 54,  93 => 53,  90 => 52,  87 => 51,  85 => 50,  82 => 49,  79 => 48,  77 => 47,  73 => 46,  68 => 43,  64 => 41,  61 => 40,  58 => 39,  56 => 38,  54 => 37,  52 => 36,  50 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/footer.html.twig", "/var/www/glpi/templates/components/itilobject/footer.html.twig");
    }
}
