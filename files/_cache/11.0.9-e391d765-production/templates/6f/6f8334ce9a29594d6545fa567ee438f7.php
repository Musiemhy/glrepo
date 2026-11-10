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

/* components/itilobject/timeline/main_description.html.twig */
class __TwigTemplate_31fa5dfcc20b2297caea55d72aec3949 extends Template
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
        $context["users_id"] = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getRecipientUserID", [], "method", false, false, false, 33);
        // line 34
        $context["entry_rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 35
        yield "
<div class=\"timeline-item mb-3 ITILContent\"
     data-itemtype=\"";
        // line 37
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 37), "html", null, true);
        yield "\" data-items-id=\"";
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 37)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["id"] ?? null) : null), "html", null, true);
        yield "\"
     data-testid=\"timeline-ITILContent\">
   <div class=\"row\">
      <div class=\"col-auto d-flex flex-column \">
    ";
        // line 41
        if ((($tmp = ($context["users_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "         ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/user/picture.html.twig", ["users_id" => ($context["users_id"] ?? null)], false);
            yield "
    ";
        }
        // line 44
        yield "      </div>
      <div class=\"col-12 col-sm\">
         <div class=\"mt-2 timeline-content left card\">
            <div class=\"card-body\">
               <div class=\"d-flex timeline-header\">
                  <div class=\"d-flex creator\">
                     ";
        // line 50
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/itilobject/timeline/timeline_item_header_badges.html.twig", ["users_id" =>         // line 51
($context["users_id"] ?? null), "date_creation" => (($_v1 = CoreExtension::getAttribute($this->env, $this->source,         // line 52
($context["item"] ?? null), "fields", [], "any", false, false, false, 52)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["date_creation"] ?? null) : null), "date_mod" => (($_v2 = CoreExtension::getAttribute($this->env, $this->source,         // line 53
($context["item"] ?? null), "fields", [], "any", false, false, false, 53)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["date_mod"] ?? null) : null), "users_id_editor" => (($_v3 = CoreExtension::getAttribute($this->env, $this->source,         // line 54
($context["item"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["users_id_lastupdater"] ?? null) : null), "anonym_user" => (((        // line 55
array_key_exists("anonym_user", $context) &&  !(null === $context["anonym_user"]))) ? ($context["anonym_user"]) : (false)), "anchor" => ((get_class(        // line 56
($context["item"] ?? null)) . "_") . CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 56))], false);
        // line 57
        yield "
                  </div>

                  ";
        // line 60
        if ((($tmp = ($context["canupdate"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 61
            yield "                    <div class=\"dropdown ms-auto timeline-item-buttons\">
                        <button class=\"btn btn-sm btn-ghost-secondary timeline-more-actions\" type=\"button\" id=\"more-actions-";
            // line 62
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_rand"] ?? null), "html", null, true);
            yield "\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas ti ti-dots-vertical\"></i>
                        </button>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"more-actions-";
            // line 65
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_rand"] ?? null), "html", null, true);
            yield "\">
                            <li><a class=\"dropdown-item edit-timeline-item\" href=\"#\">
                            <i class=\"ti ti-edit\"></i>
                            <span>";
            // line 68
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Edit"), "html", null, true);
            yield "</span>
                            </a></li>
                        </ul>
                    </div>
                  ";
        }
        // line 73
        yield "
                  <button class=\"btn btn-sm btn-ghost-secondary close-edit-content d-none ms-auto\">
                     <i class=\"ti ti-x\"></i>
                  </button>
               </div>

               <div class=\"read-only-content\">
                  ";
        // line 80
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["name"], "method", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 81
            yield "                     <div class=\"card-title card-header mx-n3 mt-n3\">
                        ";
            // line 82
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 82)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["name"] ?? null) : null), "html", null, true);
            yield "
                     </div>
                  ";
        }
        // line 85
        yield "                  ";
        if ( !(($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["content"], "method", false, false, false, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 86
            yield "                     <div class=\"rich_text_container\" data-testid=\"content\">
                        ";
            // line 87
            yield (string) $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 87)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["content"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
            // line 90
            yield "
                     </div>
                  ";
        }
        // line 93
        yield "               </div>
               <div class=\"edit-content collapse\">
                  <div class=\"ajax-content\"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/timeline/main_description.html.twig";
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
        return array (  150 => 93,  145 => 90,  143 => 87,  140 => 86,  137 => 85,  131 => 82,  128 => 81,  126 => 80,  117 => 73,  109 => 68,  103 => 65,  97 => 62,  94 => 61,  92 => 60,  87 => 57,  85 => 56,  84 => 55,  83 => 54,  82 => 53,  81 => 52,  80 => 51,  79 => 50,  71 => 44,  65 => 42,  63 => 41,  54 => 37,  50 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/timeline/main_description.html.twig", "/var/www/glpi/templates/components/itilobject/timeline/main_description.html.twig");
    }
}
