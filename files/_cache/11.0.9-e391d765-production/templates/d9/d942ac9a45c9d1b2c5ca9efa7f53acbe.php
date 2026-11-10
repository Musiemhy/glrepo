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

/* pages/form_renderer.html.twig */
class __TwigTemplate_4b373235bfc779e2ffdaff5f09f9fe7a extends Template
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

        $this->blocks = [
            'content_body' => [$this, 'block_content_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return "layout/page_without_tabs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        $context["container_size"] = "narrow";
        // line 33
        $this->parent = $this->load("layout/page_without_tabs.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        yield "    ";
        // line 42
        yield "    ";
        $context["is_single_section_form"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getSections", [], "method", false, false, false, 42)) == 1);
        // line 43
        yield "
    ";
        // line 45
        yield "    ";
        $context["is_single_page_layout"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "fields", [], "any", false, false, false, 45), "render_layout", [], "any", false, false, false, 45) == CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::constant("Glpi\\Form\\RenderLayout::SINGLE_PAGE"), "value", [], "any", false, false, false, 45));
        // line 46
        yield "    ";
        $context["use_step_by_step"] = ( !(($tmp = ($context["is_single_page_layout"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = ($context["is_single_section_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp));
        // line 47
        yield "
    <form
        id=\"forms_form_answers\"
        method=\"POST\"
        action=\"";
        // line 51
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/Form/SubmitAnswers"), "html", null, true);
        yield "\"
        ";
        // line 53
        yield "        class=\"pointer-events-none\"
        data-glpi-form-render-layout=\"";
        // line 54
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "fields", [], "any", false, false, false, 54), "render_layout", [], "any", false, false, false, 54), "html", null, true);
        yield "\"
    >
        <div class=\"form-renderer mt-n5\">

            ";
        // line 59
        yield "            <div
                class=\"mb-4\"
                data-glpi-form-renderer-form-header
            >
                <h1 class=\"form-title mb-2\" aria-label=\"";
        // line 63
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Form title"), "html", null, true);
        yield "\" data-testid=\"form-title\">
                    ";
        // line 64
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\I18nExtension']->translateFormItemKey(($context["form"] ?? null), Twig\Extension\CoreExtension::constant("TRANSLATION_KEY_NAME", ($context["form"] ?? null))), "html", null, true);
        yield "
                </h1>

                <div class=\"text-muted form-description text-break\" aria-label=\"";
        // line 67
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Form description"), "html", null, true);
        yield "\" role=\"note\" data-testid=\"form-description\">
                    ";
        // line 68
        yield (string) $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml($this->extensions['Glpi\Application\View\Extension\I18nExtension']->translateFormItemKey(($context["form"] ?? null), Twig\Extension\CoreExtension::constant("TRANSLATION_KEY_HEADER", ($context["form"] ?? null))));
        yield "
                </div>
            </div>

            <div data-glpi-form-renderer-delegation-container>
                ";
        // line 73
        yield from $this->load("components/helpdesk_forms/delegation_alert.html.twig", 73)->unwrap()->yield($context);
        // line 74
        yield "            </div>

            ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getSections", [], "method", false, false, false, 76));
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
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 77
            yield "                ";
            $context["is_first_section"] = (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 77) == 0);
            // line 78
            yield "                ";
            $context["section_index"] = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 78);
            // line 79
            yield "
                <div
                    class=\"";
            // line 81
            yield (string) ((((($tmp = ($context["is_single_page_layout"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["is_first_section"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? ("") : ("d-none"));
            yield "\"
                    data-glpi-form-renderer-section=\"";
            // line 82
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["section_index"] ?? null), "html", null, true);
            yield "\"
                    data-glpi-form-renderer-uuid=\"";
            // line 83
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "fields", [], "any", false, false, false, 83), "uuid", [], "any", false, false, false, 83), "html", null, true);
            yield "\"
                    data-glpi-form-renderer-id=\"";
            // line 84
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "fields", [], "any", false, false, false, 84), "id", [], "any", false, false, false, 84), "html", null, true);
            yield "\"
                    ";
            // line 85
            if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["visibility_engine_output"] ?? null), "isSectionVisible", [CoreExtension::getAttribute($this->env, $this->source, $context["section"], "getID", [], "method", false, false, false, 85)], "method", false, false, false, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 86
                yield "                        data-glpi-form-renderer-hidden-by-condition
                    ";
            }
            // line 88
            yield "                >
                    ";
            // line 89
            if ( !(($tmp = ($context["is_single_section_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 90
                yield "                        <div
                            class=\"bg-primary text-primary-fg px-2 py-1 rounded-top \"
                            style=\"width: fit-content; max-width: calc(100% - var(--tblr-border-radius) * 2);\"
                        >
                            <h2 class=\"mb-0 ";
                // line 94
                yield (string) (( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "fields", [], "any", false, false, false, 94), "name", [], "any", false, false, false, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-muted") : (""));
                yield "\">
                                ";
                // line 95
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Glpi\Application\View\Extension\I18nExtension']->translateFormItemKey($context["section"], Twig\Extension\CoreExtension::constant("TRANSLATION_KEY_NAME", $context["section"])), __("Untitled section")), "html", null, true);
                yield "
                            </h2>
                        </div>
                    ";
            }
            // line 99
            yield "                    <div
                        class=\"card mb-3\" ";
            // line 100
            yield (string) (( !(($tmp = ($context["is_single_section_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("style=\x27border-top-left-radius: 0;\x27") : (""));
            yield "
                    >
                        <div class=\"card-body\">
                            ";
            // line 103
            if (( !(($tmp = ($context["is_single_section_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["section"], "fields", [], "any", false, false, false, 103), "description", [], "any", false, false, false, 103)))) {
                // line 104
                yield "                                <div class=\"text-muted section-description text-break mb-3\">
                                    ";
                // line 105
                yield (string) $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml($this->extensions['Glpi\Application\View\Extension\I18nExtension']->translateFormItemKey($context["section"], Twig\Extension\CoreExtension::constant("TRANSLATION_KEY_DESCRIPTION", $context["section"])));
                yield "
                                </div>
                            ";
            }
            // line 108
            yield "
                            ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["section"], "getBlocks", [], "method", false, false, false, 109));
            foreach ($context['_seq'] as $context["_key"] => $context["form_group_blocks"]) {
                // line 110
                yield "                                ";
                // line 111
                yield "                                ";
                if ( !is_iterable($context["form_group_blocks"])) {
                    // line 112
                    yield "                                    ";
                    $context["form_group_blocks"] = [$context["form_group_blocks"]];
                    // line 113
                    yield "                                ";
                }
                // line 114
                yield "
                                <section data-glpi-form-renderer-horizontal-blocks>
                                    ";
                // line 116
                $context["previous_index"] =  -1;
                // line 117
                yield "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["form_group_blocks"]);
                foreach ($context['_seq'] as $context["_key"] => $context["form_block"]) {
                    // line 118
                    yield "                                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["form_block"], "fields", [], "any", false, false, false, 118), "horizontal_rank", [], "any", false, false, false, 118) > (($context["previous_index"] ?? null) + 1))) {
                        // line 119
                        yield "                                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["form_block"], "fields", [], "any", false, false, false, 119), "horizontal_rank", [], "any", false, false, false, 119) - (($context["previous_index"] ?? null) + 1))));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 120
                            yield "                                            <div style=\"flex: 1;\"></div>
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent);
                        $context += $_parent;
                        // line 122
                        yield "                                        ";
                    }
                    // line 123
                    yield "                                        ";
                    $context["previous_index"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["form_block"], "fields", [], "any", false, false, false, 123), "horizontal_rank", [], "any", false, false, false, 123);
                    // line 124
                    yield "
                                        ";
                    // line 125
                    if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf($context["form_block"], "Glpi\\Form\\Question")) {
                        // line 126
                        yield "                                            ";
                        $context["question_type"] = CoreExtension::getAttribute($this->env, $this->source, $context["form_block"], "getQuestionType", [], "method", false, false, false, 126);
                        // line 127
                        yield "                                            ";
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["form_block"], "setDefaultValueFromParameters", [($context["params"] ?? null)], "method", false, false, false, 127), "html", null, true);
                        yield "
                                        ";
                    }
                    // line 129
                    yield "
                                        ";
                    // line 130
                    $context["skip_question"] = false;
                    // line 131
                    yield "
                                        ";
                    // line 133
                    yield "                                        ";
                    if (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf($context["form_block"], "Glpi\\Form\\Question") && (null === ($context["question_type"] ?? null)))) {
                        // line 134
                        yield "                                            ";
                        $context["skip_question"] = true;
                        // line 135
                        yield "                                        ";
                    }
                    // line 136
                    yield "
                                        ";
                    // line 138
                    yield "                                        ";
                    if (((( !(($tmp = ($context["skip_question"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && $this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf($context["form_block"], "Glpi\\Form\\Question")) && (($tmp = ($context["unauthenticated_user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["question_type"] ?? null), "isAllowedForUnauthenticatedAccess", [], "method", false, false, false, 138)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                        // line 139
                        yield "                                            ";
                        $context["skip_question"] = true;
                        // line 140
                        yield "                                        ";
                    }
                    // line 141
                    yield "
                                        ";
                    // line 142
                    if ( !(($tmp = ($context["skip_question"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 143
                        yield "                                            <section
                                                aria-label=\"";
                        // line 144
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["form_block"], "fields", [], "any", false, false, false, 144), "name", [], "any", false, false, false, 144), "html", null, true);
                        yield "\"
                                                class=\"";
                        // line 145
                        yield (string) ((((($tmp = ($context["is_single_page_layout"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = ($context["is_first_section"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? ("") : ("d-none"));
                        yield " mb-3\"
                                                style=\"flex: 1;\"
                                                data-glpi-form-renderer-parent-section=\"";
                        // line 147
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["section_index"] ?? null), "html", null, true);
                        yield "\"
                                                data-glpi-form-renderer-id=\"";
                        // line 148
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["form_block"], "fields", [], "any", false, false, false, 148), "id", [], "any", false, false, false, 148), "html", null, true);
                        yield "\"
                                                data-glpi-form-renderer-uuid=\"";
                        // line 149
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["form_block"], "fields", [], "any", false, false, false, 149), "uuid", [], "any", false, false, false, 149), "html", null, true);
                        yield "\"

                                                ";
                        // line 151
                        if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf($context["form_block"], "Glpi\\Form\\Question")) {
                            // line 152
                            yield "                                                    data-glpi-form-renderer-question

                                                    ";
                            // line 154
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["form_block"], "getQuestionType", [], "method", false, false, false, 154), "isHiddenInput", [], "method", false, false, false, 154)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 155
                                yield "                                                        data-glpi-form-renderer-hidden-input
                                                    ";
                            }
                            // line 157
                            yield "                                                ";
                        } elseif ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf($context["form_block"], "Glpi\\Form\\Comment")) {
                            // line 158
                            yield "                                                    data-glpi-form-renderer-comment
                                                ";
                        }
                        // line 160
                        yield "
                                                ";
                        // line 161
                        if (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf($context["form_block"], "Glpi\\Form\\Question") && $this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(CoreExtension::getAttribute($this->env, $this->source, $context["form_block"], "getQuestionType", [], "method", false, false, false, 161), "Glpi\\Form\\Condition\\UsedAsCriteriaInterface"))) {
                            // line 162
                            yield "                                                    data-glpi-form-renderer-criteria
                                                ";
                        }
                        // line 164
                        yield "
                                                ";
                        // line 165
                        if (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf($context["form_block"], "Glpi\\Form\\Question") &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["visibility_engine_output"] ?? null), "isQuestionVisible", [CoreExtension::getAttribute($this->env, $this->source, $context["form_block"], "getID", [], "method", false, false, false, 165)], "method", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                            // line 166
                            yield "                                                    data-glpi-form-renderer-hidden-by-condition
                                                ";
                        } elseif (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(                        // line 167
$context["form_block"], "Glpi\\Form\\Comment") &&  !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["visibility_engine_output"] ?? null), "isCommentVisible", [CoreExtension::getAttribute($this->env, $this->source, $context["form_block"], "getID", [], "method", false, false, false, 167)], "method", false, false, false, 167)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
                            // line 168
                            yield "                                                    data-glpi-form-renderer-hidden-by-condition
                                                ";
                        }
                        // line 170
                        yield "                                            >
                                                <h3 class=\"mb-2 ";
                        // line 171
                        yield (string) (( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["form_block"], "fields", [], "any", false, false, false, 171), "name", [], "any", false, false, false, 171)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-muted") : (""));
                        yield "\">
                                                    ";
                        // line 172
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Glpi\Application\View\Extension\I18nExtension']->translateFormItemKey($context["form_block"], Twig\Extension\CoreExtension::constant("TRANSLATION_KEY_NAME", $context["form_block"])), CoreExtension::getAttribute($this->env, $this->source, $context["form_block"], "getUntitledLabel", [], "method", false, false, false, 172)), "html", null, true);
                        yield "
                                                    ";
                        // line 173
                        if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["form_block"], "fields", [], "any", false, true, false, 173), "is_mandatory", [], "any", true, true, false, 173) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["form_block"], "fields", [], "any", false, false, false, 173), "is_mandatory", [], "any", false, false, false, 173)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["form_block"], "fields", [], "any", false, false, false, 173), "is_mandatory", [], "any", false, false, false, 173)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 174
                            yield "                                                        <span class=\"text-danger\">*</span>
                                                    ";
                        }
                        // line 176
                        yield "                                                </h3>

                                                <div class=\"text-muted block-description text-break mb-2\" role=\"note\" aria-label=\"";
                        // line 178
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("%s description"), CoreExtension::getAttribute($this->env, $this->source, $context["form_block"], "getTypeName", [1], "method", false, false, false, 178)), "html", null, true);
                        yield "\">
                                                    ";
                        // line 179
                        yield (string) $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml($this->extensions['Glpi\Application\View\Extension\I18nExtension']->translateFormItemKey($context["form_block"], Twig\Extension\CoreExtension::constant("TRANSLATION_KEY_DESCRIPTION", $context["form_block"])));
                        yield "
                                                </div>

                                                ";
                        // line 182
                        if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf($context["form_block"], "Glpi\\Form\\Question")) {
                            // line 183
                            yield "                                                    ";
                            yield (string) CoreExtension::getAttribute($this->env, $this->source, ($context["question_type"] ?? null), "renderEndUserTemplate", [$context["form_block"]], "method", false, false, false, 183);
                            yield "
                                                ";
                        }
                        // line 185
                        yield "                                            </section>
                                        ";
                    }
                    // line 187
                    yield "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['form_block'], $context['_parent']);
                $context = array_intersect_key($context, $_parent);
                $context += $_parent;
                // line 188
                yield "                                </section>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['form_group_blocks'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 190
            yield "                        </div>
                    </div>
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
        unset($context['_seq'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 195
        yield "
            ";
        // line 197
        yield "            <input type=\"hidden\" name=\"forms_id\" value=\"";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "fields", [], "any", false, false, false, 197), "id", [], "any", false, false, false, 197), "html", null, true);
        yield "\">

            <div
                class=\"d-flex justify-content-end mb-3\"
                data-glpi-form-renderer-actions
                ";
        // line 202
        if ((($tmp = ($context["unauthenticated_user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 203
            yield "                    data-glpi-form-renderer-altcha
                    ";
            // line 204
            if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["visibility_engine_output"] ?? null), "isFormVisible", [], "method", false, false, false, 204)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 205
                yield "                        data-glpi-form-renderer-hidden-by-condition
                    ";
            }
            // line 207
            yield "                ";
        }
        // line 208
        yield "            >
                ";
        // line 210
        yield "                ";
        if ((($tmp = ($context["unauthenticated_user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 211
            yield "                    ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/altcha/widget.html.twig", [], false);
            // line 215
            yield "
                ";
        }
        // line 217
        yield "            </div>

            ";
        // line 220
        yield "            <div class=\"d-flex justify-content-end\" data-glpi-form-renderer-actions>
                ";
        // line 221
        if (((($tmp = ($context["use_step_by_step"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = ($context["is_single_section_form"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 222
            yield "                    ";
            // line 223
            yield "                    <button
                        type=\"button\"
                        data-glpi-form-renderer-action=\"previous-section\"
                        class=\"btn btn-ghost-secondary d-none d-flex align-items-end me-2 pointer-events-none\"
                    >
                        <i class=\"ti ti-arrow-narrow-left-dashed me-2\"></i>
                        ";
            // line 229
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Back"), "html", null, true);
            yield "
                    </button>

                    <button
                        type=\"button\"
                        data-glpi-form-renderer-action=\"next-section\"
                        class=\"btn btn-primary pointer-events-none d-flex align-items-end\"
                    >
                        <i class=\"ti ti-arrow-narrow-right-dashed me-2\"></i>
                        ";
            // line 238
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Continue"), "html", null, true);
            yield "
                    </button>
                ";
        }
        // line 241
        yield "
                <button
                    type=\"button\"
                    data-glpi-form-renderer-action=\"submit\"
                    class=\"btn btn-primary pointer-events-none d-flex align-items-end ";
        // line 245
        yield (string) (((($tmp = ($context["use_step_by_step"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-none") : (""));
        yield "\"
                    aria-label=\"";
        // line 246
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Submit"), "html", null, true);
        yield "\"
                    disabled
                    ";
        // line 248
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["visibility_engine_output"] ?? null), "isFormVisible", [], "method", false, false, false, 248)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 249
            yield "                        data-glpi-form-renderer-hidden-by-condition
                    ";
        }
        // line 251
        yield "                >
                    <i class=\"ti ti-check me-2\"></i>
                    ";
        // line 253
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Submit"), "html", null, true);
        yield "
                </button>
            </div>

            ";
        // line 258
        yield "            <div
                class=\"empty d-none mt-5\"
                data-glpi-form-renderer-success
            >
                <div class=\"empty-title d-flex align-items-center\">
                    <svg
                        xmlns=\"http://www.w3.org/2000/svg\"
                        class=\"icon text-green icon-lg\"
                        width=\"24\"
                        height=\"24\"
                        viewBox=\"0 0 24 24\"
                        stroke-width=\"2\"
                        stroke=\"currentColor\"
                        fill=\"none\"
                        stroke-linecap=\"round\"
                        stroke-linejoin=\"round\"
                    >
                        <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                        <path d=\"M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0\"></path>
                        <path d=\"M9 12l2 2l4 -4\"></path>
                    </svg>
                    <span class=\"ms-2\"> ";
        // line 279
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Form submitted"), "html", null, true);
        yield " </span>
                </div>
                <p class=\"empty-subtitle text-secondary\">
                    ";
        // line 282
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Your form has been submitted successfully."), "html", null, true);
        yield "
                </p>
                ";
        // line 284
        if ( !(($tmp = ($context["unauthenticated_user"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 285
            yield "                    <div class=\"mt-3 d-flex\">
                        ";
            // line 286
            if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) {
                // line 287
                yield "                            <a class=\"btn btn-outline-secondary me-2\" href=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ServiceCatalog"), "html", null, true);
                yield "\">
                                <i class=\"ti ti-library me-1\"></i>
                                <span>";
                // line 289
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Go back to service catalog"), "html", null, true);
                yield "</span>
                            </a>
                        ";
            } else {
                // line 292
                yield "                            <a class=\"btn btn-outline-secondary me-2\" href=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/Helpdesk"), "html", null, true);
                yield "\">
                                <i class=\"ti ti-home me-1\"></i>
                                <span>";
                // line 294
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Take me home"), "html", null, true);
                yield "</span>
                            </a>
                        ";
            }
            // line 297
            yield "                        <a class=\"btn btn-primary\" href=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(("/front/ticket.php?" . ($context["my_tickets_url_param"] ?? null))), "html", null, true);
            yield "\">
                            <i class=\"ti ti-article me-1\"></i>
                            <span>";
            // line 299
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("See my tickets"), "html", null, true);
            yield "</span>
                        </a>
                    </div>
                ";
        }
        // line 303
        yield "            </div>
        </div>
    </form>

    <script>(async () => {
        const mod = await import(\"/js/modules/Forms/RendererController.js\");
        new mod.GlpiFormRendererController(
            \x27#forms_form_answers\x27,
            ";
        // line 311
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "getID", [], "method", false, false, false, 311), "html", null, true);
        yield "
        );
    })();</script>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/form_renderer.html.twig";
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
        return array (  660 => 311,  650 => 303,  643 => 299,  637 => 297,  631 => 294,  625 => 292,  619 => 289,  613 => 287,  611 => 286,  608 => 285,  606 => 284,  601 => 282,  595 => 279,  572 => 258,  565 => 253,  561 => 251,  557 => 249,  555 => 248,  550 => 246,  546 => 245,  540 => 241,  534 => 238,  522 => 229,  514 => 223,  512 => 222,  510 => 221,  507 => 220,  503 => 217,  499 => 215,  496 => 211,  493 => 210,  490 => 208,  487 => 207,  483 => 205,  481 => 204,  478 => 203,  476 => 202,  467 => 197,  464 => 195,  445 => 190,  437 => 188,  430 => 187,  426 => 185,  420 => 183,  418 => 182,  412 => 179,  408 => 178,  404 => 176,  400 => 174,  398 => 173,  394 => 172,  390 => 171,  387 => 170,  383 => 168,  381 => 167,  378 => 166,  376 => 165,  373 => 164,  369 => 162,  367 => 161,  364 => 160,  360 => 158,  357 => 157,  353 => 155,  351 => 154,  347 => 152,  345 => 151,  340 => 149,  336 => 148,  332 => 147,  327 => 145,  323 => 144,  320 => 143,  318 => 142,  315 => 141,  312 => 140,  309 => 139,  306 => 138,  303 => 136,  300 => 135,  297 => 134,  294 => 133,  291 => 131,  289 => 130,  286 => 129,  280 => 127,  277 => 126,  275 => 125,  272 => 124,  269 => 123,  266 => 122,  258 => 120,  253 => 119,  250 => 118,  245 => 117,  243 => 116,  239 => 114,  236 => 113,  233 => 112,  230 => 111,  228 => 110,  224 => 109,  221 => 108,  215 => 105,  212 => 104,  210 => 103,  204 => 100,  201 => 99,  194 => 95,  190 => 94,  184 => 90,  182 => 89,  179 => 88,  175 => 86,  173 => 85,  169 => 84,  165 => 83,  161 => 82,  157 => 81,  153 => 79,  150 => 78,  147 => 77,  130 => 76,  126 => 74,  124 => 73,  116 => 68,  112 => 67,  106 => 64,  102 => 63,  96 => 59,  89 => 54,  86 => 53,  82 => 51,  76 => 47,  73 => 46,  70 => 45,  67 => 43,  64 => 42,  62 => 41,  55 => 40,  50 => 33,  48 => 35,  41 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/form_renderer.html.twig", "/var/www/glpi/templates/pages/form_renderer.html.twig");
    }
}
