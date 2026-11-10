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

/* __string_template__035f9fc5d5f514ca83e06e8e85ee1e80 */
class __TwigTemplate_7b5cc4c1d05011cf39cdd9c3ad2f8c03 extends Template
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
        // line 1
        yield "                <div class=\x27filters_toolbar m-2 ";
        yield (string) (((($tmp = ($context["is_placeholder"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("d-none") : (""));
        yield "\x27>
                    <span class=\x27filters\x27></span>
                    <span class=\x27filters-control\x27>
                        <i class=\"btn btn-sm btn-ghost-secondary ti ti-plus plus-sign add-filter\">
                            <span class=\x27add-filter-lbl\x27>";
        // line 5
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = ($context["messages"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["add_filter"] ?? null) : null), "html", null, true);
        yield "</span>
                        </i>
                    </span>
                </div>
                <div class=\x27placeholder_info ";
        // line 9
        yield (string) (((($tmp = ($context["is_placeholder"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("d-none"));
        yield "\x27 style=\"background-color: transparent; color: var(--tblr-body-color); font-size: var(--tblr-body-font-size)\">
                    <div class=\"alert alert-info\">
                        <div class=\"d-flex\">
                            <i class=\"ti ti-info-circle fs-2x me-3\"></i>
                            <div>
                                <h4 class=\"alert-title\">";
        // line 14
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = ($context["messages"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["placeholder_main"] ?? null) : null), "html", null, true);
        yield "</h4>
                                <div class=\"mt-2\">
                                    <button class=\"btn btn-info btn-sm disable-dashboard-demo me-2 ";
        // line 16
        yield (string) (((($tmp = ($context["can_disable_demo"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("") : ("d-none"));
        yield "\" type=\"button\">
                                        <i class=\"ti ti-presentation-off\"></i>
                                        <span>";
        // line 18
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = ($context["messages"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["disable_demo_msg"] ?? null) : null), "html", null, true);
        yield "</span>
                                    </button>
                                    <script>
                                        \$(\x27button.disable-dashboard-demo\x27).on(\x27click\x27, function() {
                                            \$.post(CFG_GLPI.root_doc + \x27/ajax/dashboard.php\x27, {
                                                action: \x27disable_placeholders\x27
                                            }).then(() => {
                                                window.location.reload();
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__035f9fc5d5f514ca83e06e8e85ee1e80";
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
        return array (  76 => 18,  71 => 16,  66 => 14,  58 => 9,  51 => 5,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__035f9fc5d5f514ca83e06e8e85ee1e80", "");
    }
}
