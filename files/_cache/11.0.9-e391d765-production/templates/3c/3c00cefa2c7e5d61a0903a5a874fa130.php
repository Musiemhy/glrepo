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

/* components/itilobject/timeline/timeline_item_header_badges.html.twig */
class __TwigTemplate_281cc55cf2b95a19948959c31020644e extends Template
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
        $context["timeline_display_date"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpitimeline_date_format");
        // line 34
        yield "
<span class=\"badge user-select-auto text-wrap d-none d-md-flex align-items-center flex-wrap\">
   ";
        // line 36
        $context["date_span"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 37
            yield "      <span class=\"d-inline-flex align-items-center\"
         ";
            // line 38
            if ((($context["timeline_display_date"] ?? null) == Twig\Extension\CoreExtension::constant("Config::TIMELINE_RELATIVE_DATE"))) {
                // line 39
                yield "            title=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(($context["date_creation"] ?? null)), "html", null, true);
                yield "\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\"
         ";
            }
            // line 42
            yield "      >
         <i class=\"ti ti-clock me-1\"></i>
         <a href=\"#";
            // line 44
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["anchor"] ?? null), "html", null, true);
            yield "\">
            ";
            // line 45
            if ((($context["timeline_display_date"] ?? null) == Twig\Extension\CoreExtension::constant("Config::TIMELINE_RELATIVE_DATE"))) {
                // line 46
                yield "               ";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getRelativeDatetime(($context["date_creation"] ?? null)), "html", null, true);
                yield "
            ";
            } else {
                // line 48
                yield "               ";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(($context["date_creation"] ?? null)), "html", null, true);
                yield "
            ";
            }
            // line 50
            yield "         </a>
      </span>
   ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 53
        yield "
   ";
        // line 54
        $context["is_validation_answer"] = ((array_key_exists("entry", $context) && (is_string($_v0 = (($_v2 = ($context["entry"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["type"] ?? null) : null)) && is_string($_v1 = "Validation") && str_ends_with($_v0, $_v1))) && ((($_v3 = ($context["entry"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["item_action"] ?? null) : null) == "validation-answer"));
        // line 55
        yield "   ";
        if (((($tmp = ($context["is_validation_answer"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && ((($_v4 = (($_v5 = ($context["entry"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["item"] ?? null) : null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["itemtype_target"] ?? null) : null) == "Group"))) {
            // line 56
            yield "      ";
            $context["creator_span"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 57
                yield "         ";
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/user/link_with_tooltip.html.twig", ["users_id" =>                 // line 58
($context["users_id"] ?? null), "user_object" =>                 // line 59
($context["user_object"] ?? null), "enable_anonymization" => (((                // line 60
array_key_exists("anonym_user", $context) &&  !(null === $context["anonym_user"]))) ? ($context["anonym_user"]) : (false))], false);
                // line 61
                yield "
      ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 63
            yield "      ";
            $context["group_span"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 64
                yield "         <span id=\"group_";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset()), "html", null, true);
                yield "\" class=\"d-inline-flex align-items-center\">
            <i class=\"ti ti-users ms-1 me-1\"></i>
            ";
                // line 66
                yield (string) $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Group", (($_v6 = (($_v7 = ($context["entry"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["item"] ?? null) : null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["items_id_target"] ?? null) : null), ["enable_anonymization" => (((                // line 67
array_key_exists("anonym_user", $context) &&  !(null === $context["anonym_user"]))) ? ($context["anonym_user"]) : (false))]);
                // line 68
                yield "
         </span>
      ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 71
            yield "
      ";
            // line 72
            yield (string) Twig\Extension\CoreExtension::sprintf(__("Created: %1\$s by %2\$s for the group %3\$s"), ($context["date_span"] ?? null), ($context["creator_span"] ?? null), ($context["group_span"] ?? null));
            yield "
   ";
        } elseif ((        // line 73
array_key_exists("entry", $context) && ((($_v8 = ($context["entry"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["type"] ?? null) : null) == "ITILReminder"))) {
            // line 74
            yield "      ";
            yield (string) ($context["date_span"] ?? null);
            yield "
   ";
        } else {
            // line 76
            yield "      ";
            if ((($context["users_id"] ?? null) > 0)) {
                // line 77
                yield "         ";
                $context["creator_span"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 78
                    yield "            ";
                    yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/user/link_with_tooltip.html.twig", ["users_id" =>                     // line 79
($context["users_id"] ?? null), "enable_anonymization" => (((                    // line 80
array_key_exists("anonym_user", $context) &&  !(null === $context["anonym_user"]))) ? ($context["anonym_user"]) : (false))], false);
                    // line 81
                    yield "
         ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 83
                yield "
         ";
                // line 84
                yield (string) Twig\Extension\CoreExtension::sprintf(__("Created: %1\$s by %2\$s"), ($context["date_span"] ?? null), ($context["creator_span"] ?? null));
                yield "
      ";
            } else {
                // line 86
                yield "         ";
                yield (string) Twig\Extension\CoreExtension::sprintf(__("Created: %1\$s"), ($context["date_span"] ?? null));
                yield "
      ";
            }
            // line 88
            yield "   ";
        }
        // line 89
        yield "</span>

";
        // line 91
        if (((($context["users_id_editor"] ?? null) > 0) && (($context["date_creation"] ?? null) != ($context["date_mod"] ?? null)))) {
            // line 92
            yield "   <span class=\"badge user-select-auto text-wrap ms-1 d-none d-md-flex align-items-center flex-wrap\">
      ";
            // line 93
            $context["date_span"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 94
                yield "         <span class=\"d-inline-flex align-items-center\"
            ";
                // line 95
                if ((($context["timeline_display_date"] ?? null) == Twig\Extension\CoreExtension::constant("Config::TIMELINE_RELATIVE_DATE"))) {
                    // line 96
                    yield "               title=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(($context["date_mod"] ?? null)), "html", null, true);
                    yield "\"
               data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\"
            ";
                }
                // line 99
                yield "         >
            <i class=\"ti ti-clock me-1\"></i>
            ";
                // line 101
                if ((($context["timeline_display_date"] ?? null) == Twig\Extension\CoreExtension::constant("Config::TIMELINE_RELATIVE_DATE"))) {
                    // line 102
                    yield "               ";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getRelativeDatetime(($context["date_mod"] ?? null)), "html", null, true);
                    yield "
            ";
                } else {
                    // line 104
                    yield "               ";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(($context["date_mod"] ?? null)), "html", null, true);
                    yield "
            ";
                }
                // line 106
                yield "         </span>
      ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 108
            yield "
      ";
            // line 109
            $context["is_current_editor"] = (($context["users_id_editor"] ?? null) == $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"));
            // line 110
            yield "      ";
            $context["anonym_editor"] = ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk") &&  !(($tmp = ($context["is_current_editor"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")) != Twig\Extension\CoreExtension::constant("Entity::ANONYMIZE_DISABLED")));
            // line 111
            yield "      ";
            $context["editor_span"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 112
                yield "         ";
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/user/link_with_tooltip.html.twig", ["users_id" =>                 // line 113
($context["users_id_editor"] ?? null), "user_object" => (((                // line 114
($context["users_id"] ?? null) == ($context["users_id_editor"] ?? null))) ? ((((array_key_exists("user_object", $context) &&  !(null === $context["user_object"]))) ? ($context["user_object"]) : (null))) : (null)), "enable_anonymization" =>                 // line 115
($context["anonym_editor"] ?? null)], false);
                // line 116
                yield "
      ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 118
            yield "
      ";
            // line 119
            yield (string) Twig\Extension\CoreExtension::sprintf(__("Last update: %1\$s by %2\$s"), ($context["date_span"] ?? null), ($context["editor_span"] ?? null));
            yield "
   </span>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/timeline/timeline_item_header_badges.html.twig";
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
        return array (  253 => 119,  250 => 118,  245 => 116,  243 => 115,  242 => 114,  241 => 113,  239 => 112,  236 => 111,  233 => 110,  231 => 109,  228 => 108,  223 => 106,  217 => 104,  211 => 102,  209 => 101,  205 => 99,  198 => 96,  196 => 95,  193 => 94,  191 => 93,  188 => 92,  186 => 91,  182 => 89,  179 => 88,  173 => 86,  168 => 84,  165 => 83,  160 => 81,  158 => 80,  157 => 79,  155 => 78,  152 => 77,  149 => 76,  143 => 74,  141 => 73,  137 => 72,  134 => 71,  128 => 68,  126 => 67,  125 => 66,  119 => 64,  116 => 63,  111 => 61,  109 => 60,  108 => 59,  107 => 58,  105 => 57,  102 => 56,  99 => 55,  97 => 54,  94 => 53,  88 => 50,  82 => 48,  76 => 46,  74 => 45,  70 => 44,  66 => 42,  59 => 39,  57 => 38,  54 => 37,  52 => 36,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/timeline/timeline_item_header_badges.html.twig", "/var/www/glpi/templates/components/itilobject/timeline/timeline_item_header_badges.html.twig");
    }
}
