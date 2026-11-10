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

/* components/itilobject/timeline/pending_reasons_messages.html.twig */
class __TwigTemplate_b69b45a02056b1cf09f3ecd8ff1ec84b extends Template
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
        $context["pending_reason_item_parent"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::getForItem", [($context["item"] ?? null)]);
        // line 34
        $context["display_for_parent"] = ((array_key_exists("display_for_parent", $context)) ? (Twig\Extension\CoreExtension::default(($context["display_for_parent"] ?? null), false)) : (false));
        // line 35
        yield "
";
        // line 36
        $context["pending_reason_contexts"] = ["pending" => ["className" => "badge bg-blue-lt", "icon" => "<i class=\"ti ti-player-pause-filled me-1\"></i>", "text" => __("Pending")], "done" => ["className" => "badge bg-transparent text-muted", "icon" => "<i class=\"ti ti-check me-1\"></i>", "text" => __("Done")]];
        // line 48
        yield "
";
        // line 49
        $context["pending_reason_selected_context"] = "pending";
        // line 50
        yield "
";
        // line 51
        if ((($tmp = ($context["display_for_parent"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 52
            yield "    ";
            $context["pending_reason"] = (((($tmp = ($context["pending_reason_item_parent"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason::getById", [(($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["pending_reason_item_parent"] ?? null), "fields", [], "any", false, false, false, 52)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["pendingreasons_id"] ?? null) : null)])) : (false));
        } else {
            // line 54
            yield "    ";
            $context["pending_item"] = (((array_key_exists("pending_item", $context) &&  !(null === $context["pending_item"]))) ? ($context["pending_item"]) : ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call(((($_v1 = ($context["entry"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["type"] ?? null) : null) . "::getById"), [(($_v2 = ($context["entry_i"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["id"] ?? null) : null)])));
            // line 55
            yield "    ";
            $context["pending_reason_item"] = (((($tmp = ($context["pending_item"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::getForItem", [($context["pending_item"] ?? null)])) : (false));
            // line 56
            yield "    ";
            $context["pending_reason"] = (((($tmp = ($context["pending_reason_item"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason::getById", [(($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["pending_reason_item"] ?? null), "fields", [], "any", false, false, false, 56)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["pendingreasons_id"] ?? null) : null)])) : (false));
            // line 57
            yield "    ";
            $context["is_latest_pending"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::isLastPendingForItem", [            // line 58
($context["item"] ?? null),             // line 59
($context["pending_item"] ?? null)]);
            // line 61
            yield "    ";
            $context["pending_reason_selected_context"] = ((((($tmp = ($context["is_latest_pending"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($context["pending_reason_item_parent"] ?? null) != false))) ? ("pending") : ("done"));
        }
        // line 63
        yield "
";
        // line 64
        if ((($tmp = ($context["pending_reason"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 65
            yield "    <span class=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($_v4 = ($context["pending_reason_contexts"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[(($_v5 = ($context["pending_reason_selected_context"] ?? null)) instanceof \Stringable ? (string) $_v5 : $_v5)] ?? null) : null), "className", [], "any", false, false, false, 65), "html", null, true);
            yield " ";
            yield (string) (((($tmp = ($context["display_for_parent"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("mt-1 w-100 text-truncate") : (""));
            yield "\">
      ";
            // line 66
            yield (string) CoreExtension::getAttribute($this->env, $this->source, (($_v6 = ($context["pending_reason_contexts"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[(($_v7 = ($context["pending_reason_selected_context"] ?? null)) instanceof \Stringable ? (string) $_v7 : $_v7)] ?? null) : null), "icon", [], "any", false, false, false, 66);
            yield "
        ";
            // line 67
            yield (string) (CoreExtension::getAttribute($this->env, $this->source, (($_v8 = ($context["pending_reason_contexts"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[(($_v9 = ($context["pending_reason_selected_context"] ?? null)) instanceof \Stringable ? (string) $_v9 : $_v9)] ?? null) : null), "text", [], "any", false, false, false, 67) . Twig\Extension\CoreExtension::sprintf(": %s", CoreExtension::getAttribute($this->env, $this->source, ($context["pending_reason"] ?? null), "getLink", [], "method", false, false, false, 67)));
            yield "

        ";
            // line 69
            if (((($tmp = ($context["pending_reason_item_parent"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && ((($tmp = ($context["display_for_parent"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::isLastPendingForItem", [            // line 70
($context["item"] ?? null),             // line 71
($context["pending_item"] ?? null)])) && $tmp instanceof Markup ? (string) $tmp : $tmp)))) {
                // line 73
                yield "            ";
                $context["next_bump"] = CoreExtension::getAttribute($this->env, $this->source, ($context["pending_reason_item_parent"] ?? null), "getNextFollowupDate", [], "method", false, false, false, 73);
                // line 74
                yield "            ";
                if ((($tmp = ($context["next_bump"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 75
                    yield "
                <i class=\"ti ti-clock ms-2\" title=\"";
                    // line 76
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Next automatic follow-up scheduled on %s"), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDate(($context["next_bump"] ?? null))), "html", null, true);
                    yield "\"
                   data-bs-toggle=\"tooltip\"></i>
            ";
                }
                // line 79
                yield "
         ";
                // line 80
                $context["resolve"] = CoreExtension::getAttribute($this->env, $this->source, ($context["pending_reason_item_parent"] ?? null), "getAutoResolvedate", [], "method", false, false, false, 80);
                // line 81
                yield "         ";
                if ((($tmp = ($context["resolve"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 82
                    yield "            <i class=\"ti ti-player-stop-filled ms-2\" title=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Automatic resolution scheduled on %s"), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDate(($context["resolve"] ?? null))), "html", null, true);
                    yield "\"
               data-bs-toggle=\"tooltip\"></i>
        ";
                }
                // line 85
                yield "        ";
            }
            // line 86
            yield "   </span>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/timeline/pending_reasons_messages.html.twig";
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
        return array (  145 => 86,  142 => 85,  135 => 82,  132 => 81,  130 => 80,  127 => 79,  121 => 76,  118 => 75,  115 => 74,  112 => 73,  110 => 71,  109 => 70,  108 => 69,  103 => 67,  99 => 66,  92 => 65,  90 => 64,  87 => 63,  83 => 61,  81 => 59,  80 => 58,  78 => 57,  75 => 56,  72 => 55,  69 => 54,  65 => 52,  63 => 51,  60 => 50,  58 => 49,  55 => 48,  53 => 36,  50 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/timeline/pending_reasons_messages.html.twig", "/var/www/glpi/templates/components/itilobject/timeline/pending_reasons_messages.html.twig");
    }
}
