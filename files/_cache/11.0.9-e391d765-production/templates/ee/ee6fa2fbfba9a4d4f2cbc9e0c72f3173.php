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

/* components/helpdesk_forms/delegation_alert.html.twig */
class __TwigTemplate_c99ccb8023648fc0b5fa20f7939f58a8 extends Template
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
        yield "
";
        // line 35
        if ( !(null === $this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentUser())) {
            // line 36
            yield "    ";
            // line 37
            yield "    ";
            if (( !array_key_exists("selected_user", $context) || Twig\Extension\CoreExtension::testEmpty(($context["selected_user"] ?? null)))) {
                // line 38
                yield "        ";
                $context["selected_user"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentUser();
                // line 39
                yield "    ";
            }
            // line 40
            yield "
    ";
            // line 41
            $context["users"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentUser(), "getUsersFromDelegatedGroups", [], "method", false, false, false, 41);
            // line 42
            yield "    ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["users"] ?? null)) > 1)) {
                // line 43
                yield "        ";
                $context["user_dropdown_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 44
                    yield "            ";
                    yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 44, $this->getSourceContext())->macro_dropdownArrayField(...["delegation_users_id", CoreExtension::getAttribute($this->env, $this->source,                     // line 46
($context["selected_user"] ?? null), "getID", [], "method", false, false, false, 46),                     // line 47
($context["users"] ?? null), "", ["no_label" => true, "width" => "auto", "field_class" => "", "mb" => "", "aria_label" => __("Select the user to delegate"), "wrapper_class" => "d-inline-block"]]);
                    // line 57
                    yield "
        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 59
                yield "
        ";
                // line 60
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["selected_user"] ?? null), "getID", [], "method", false, false, false, 60) != CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentUser(), "getID", [], "method", false, false, false, 60))) {
                    // line 61
                    yield "            ";
                    $context["notification_part_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 62
                        yield "                <span class=\"input-group d-inline-flex w-auto\">
                        ";
                        // line 63
                        yield (string) $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 63, $this->getSourceContext())->macro_dropdownArrayField(...["delegation_use_notification", "1", ["0" => __("He doesn\x27t want"), "1" => __("He wants")], "", ["no_label" => true, "width" => "auto", "field_class" => "", "mb" => "", "aria_label" => __("Do you want to be notified of future events of this ticket"), "wrapper_class" => "d-inline-block"]]);
                        // line 79
                        yield "
                    <button
                        type=\"button\"
                        class=\"btn btn-icon rounded-end\"
                        data-bs-toggle=\"dropdown\"
                        data-bs-auto-close=\"outside\"
                        aria-expanded=\"false\"
                        aria-label=\"";
                        // line 86
                        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Address to send the notification"), "html", null, true);
                        yield "\"
                    >
                        <i class=\"ti ti-mail-cog\"></i>
                    </button>
                    <div class=\"dropdown-menu p-3 pt-1 rounded-3\" style=\"width: 250px\">
                        ";
                        // line 91
                        yield (string) $macros["fields"]->getTemplateForMacro("macro_textField", $context, 91, $this->getSourceContext())->macro_textField(...["delegation_alternative_email", CoreExtension::getAttribute($this->env, $this->source,                         // line 93
($context["selected_user"] ?? null), "getDefaultEmail", [], "method", false, false, false, 93), __("Address to send the notification"), ["is_horizontal" => false, "field_class" => "", "mb" => ""]]);
                        // line 100
                        yield "
                    </div>
                </span>
            ";
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 104
                    yield "
            <div class=\"alert d-flex align-items-center justify-content-start flex-wrap\">
                ";
                    // line 106
                    yield (string) Twig\Extension\CoreExtension::sprintf(__("This ticket is for %1\$s and %2\$s to be notified of future events of this ticket."), (("<span class=\"mx-2\">" .                     // line 107
($context["user_dropdown_html"] ?? null)) . "</span>"), (("<span class=\"mx-2\">" .                     // line 108
($context["notification_part_html"] ?? null)) . "</span>"));
                    // line 109
                    yield "
            </div>
        ";
                } else {
                    // line 112
                    yield "            <div class=\"alert d-flex align-items-center justify-content-start flex-wrap\">
                ";
                    // line 113
                    yield (string) Twig\Extension\CoreExtension::sprintf(__("This ticket is for %1\$s"), (("<span class=\"mx-2\">" .                     // line 114
($context["user_dropdown_html"] ?? null)) . "</span>"));
                    // line 115
                    yield "
            </div>
        ";
                }
                // line 118
                yield "    ";
            }
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/helpdesk_forms/delegation_alert.html.twig";
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
        return array (  149 => 118,  144 => 115,  142 => 114,  141 => 113,  138 => 112,  133 => 109,  131 => 108,  130 => 107,  129 => 106,  125 => 104,  118 => 100,  116 => 93,  115 => 91,  107 => 86,  98 => 79,  96 => 63,  93 => 62,  90 => 61,  88 => 60,  85 => 59,  80 => 57,  78 => 47,  77 => 46,  75 => 44,  72 => 43,  69 => 42,  67 => 41,  64 => 40,  61 => 39,  58 => 38,  55 => 37,  53 => 36,  51 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/helpdesk_forms/delegation_alert.html.twig", "/var/www/glpi/templates/components/helpdesk_forms/delegation_alert.html.twig");
    }
}
