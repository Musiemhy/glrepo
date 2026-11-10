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

/* layout/parts/user_header.html.twig */
class __TwigTemplate_a8a217755a5cc7524c5d161cd48cc3df extends Template
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
        $context["rand_header"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 34
        yield "
<div class=\"btn-group\">
   ";
        // line 36
        if ( !(null === ($context["user"] ?? null))) {
            // line 37
            yield "      <div class=\"navbar-nav flex-row order-md-last user-menu\">
         <div class=\"nav-item dropdown\">
            <a href=\"#\" class=\"nav-link d-flex lh-1 text-reset p-1 dropdown-toggle user-menu-dropdown-toggle ";
            // line 39
            if ((($tmp = ($context["is_debug_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "bg-red-lt";
            }
            yield "\"
               data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\"
               aria-label=\"";
            // line 41
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("User menu"), "html", null, true);
            yield "\">
               ";
            // line 42
            if ( !(($tmp = ($context["anonymous"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 43
                yield "                  <div class=\"pe-2 d-none d-xl-block\">
                     <div>";
                // line 44
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString((((CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile"), "name", [], "array", true, true, false, 44) &&  !(null === (($_v0 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["name"] ?? null) : null)))) ? ((($_v1 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["name"] ?? null) : null)) : (""))), "truncate", [35, "..."], "method", false, false, false, 44), "html", null, true);
                yield "</div>
                     ";
                // line 45
                $context["entity_completename"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity_name");
                // line 46
                yield "                     <div class=\"mt-1 small text-muted-menu\" title=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entity_completename"] ?? null), "html", null, true);
                yield "\"
                          data-testid=\"current-entity\"
                          data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
                        ";
                // line 49
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->truncateLeft(($context["entity_completename"] ?? null)), "html", null, true);
                yield "
                     </div>
                  </div>

                  ";
                // line 53
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/user/picture.html.twig", ["users_id" => (($_v2 = CoreExtension::getAttribute($this->env, $this->source,                 // line 54
($context["user"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["id"] ?? null) : null), "with_link" => false, "avatar_size" => ""]);
                // line 57
                yield "
               ";
            }
            // line 59
            yield "            </a>
            <div class=\"dropdown-menu dropdown-menu-end mt-1 dropdown-menu-arrow animate__animated animate__fadeInRight\" data-testid=\"user-menu-dropdown\">
               <h6 class=\"dropdown-header\">";
            // line 61
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName(($context["user"] ?? null)), "html", null, true);
            yield "</h6>

               ";
            // line 63
            if ( !(($tmp = ($context["anonymous"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 64
                yield "                  ";
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/profile_selector.html.twig");
                yield "

                  <div class=\"dropdown-divider\"></div>

                  ";
                // line 68
                if ((($tmp = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->hasItemtypeRight("Config", Twig\Extension\CoreExtension::constant("UPDATE"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 69
                    yield "                     <a href=\"";
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/switchdebug.php"), "html", null, true);
                    yield "\"
                        class=\"dropdown-item ";
                    // line 70
                    if ((($tmp = ($context["is_debug_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "bg-red-lt";
                    }
                    yield "\"
                        title=\"";
                    // line 71
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Change mode"), "html", null, true);
                    yield "\">
                        <i class=\"ti ti-bug debug\"></i>
                        ";
                    // line 73
                    yield (string) (((($tmp = ($context["is_debug_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Debug mode enabled"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Debug mode disabled"), "html", null, true)));
                    yield "
                     </a>
                  ";
                }
                // line 76
                yield "               ";
            }
            // line 77
            yield "
               ";
            // line 79
            yield "
               <div class=\"dropdown-item\">
                  <i class=\"ti ti-language\"></i>
                  ";
            // line 82
            yield (string) $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("User::showSwitchLangForm");
            yield "
               </div>

               <div class=\"dropdown-divider\"></div>

               <a href=\"";
            // line 87
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["help_url"] ?? null), "html", null, true);
            yield "\" class=\"dropdown-item\" title=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Help"), "html", null, true);
            yield "\">
                  <i class=\"ti ti-help\"></i>
                  ";
            // line 89
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Help"), "html", null, true);
            yield "
               </a>

      ";
            // line 92
            if ((($tmp = Session::haveRight("config", Twig\Extension\CoreExtension::constant("READ"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 93
                yield "               <a href=\"#\" class=\"dropdown-item\" title=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("About"), "html", null, true);
                yield "\"
                  id=\"show_about_modal_";
                // line 94
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_header"] ?? null), "html", null, true);
                yield "\"
                  data-testid=\"about-link\">
                  <i class=\"ti ti-info-circle\"></i>
                  ";
                // line 97
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("About"), "html", null, true);
                yield "
                  ";
                // line 98
                if ( !(null === ($context["found_new_version"] ?? null))) {
                    // line 99
                    yield "                     <span class=\"badge bg-info text-dark ms-2\">
                        1
                     </span>
                  ";
                }
                // line 103
                yield "               </a>
      ";
            }
            // line 105
            yield "
               <div class=\"dropdown-divider\"></div>

               <a href=\"";
            // line 108
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/preference.php"), "html", null, true);
            yield "\" class=\"dropdown-item\" title=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("My settings"), "html", null, true);
            yield "\">
                  <i class=\"ti ti-user-cog\"></i>
                  ";
            // line 110
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("My settings"), "html", null, true);
            yield "
               </a>
               <a href=\"";
            // line 112
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(("/front/logout.php" . (((($tmp = (((($tmp = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiextauth")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiextauth")) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("?noAUTO=1") : ("")))), "html", null, true);
            yield "\" class=\"dropdown-item\" title=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Logout"), "html", null, true);
            yield "\">
                  <i class=\"ti ti-logout\"></i>
                  ";
            // line 114
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Logout"), "html", null, true);
            yield "
               </a>
            </div>
         </div>
      </div>

      ";
            // line 120
            if ((($tmp = Session::haveRight("config", Twig\Extension\CoreExtension::constant("READ"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 121
                yield "      <div class=\"modal fade\" id=\"about_modal_";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_header"] ?? null), "html", null, true);
                yield "\" role=\"dialog\">
         <div class=\"modal-dialog\">
            <div class=\"modal-content\">
               <div class=\"modal-header\">
                  <h4 class=\"modal-title\">";
                // line 125
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("About"), "html", null, true);
                yield "</h4>
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
                // line 126
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close"), "html", null, true);
                yield "\" title=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Close"), "html", null, true);
                yield "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"left\"></button>
               </div>
               <div class=\"modal-body text-center\">
                  <p>
                     <img src=\"";
                // line 130
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("pics/logos/logo-GLPI-100-grey.png"), "html", null, true);
                yield "\" title=\"GLPI Logo\" style=\"max-width:100px; height:auto;\" />
                  </p>
                  ";
                // line 132
                if ( !(($tmp = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("\\Glpi\\Toolbox\\VersionParser::isStableRelease", [Twig\Extension\CoreExtension::constant("GLPI_VERSION")])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 133
                    yield "                      <div class=\x27alert alert-important alert-warning d-flex\x27>
                        <strong>⚠️  ";
                    // line 134
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("This version is UNSTABLE and some SECURITY FIXES may not be included."), "html", null, true);
                    yield " ⚠️</strong>
                      </div>
                  ";
                }
                // line 137
                yield "                  <p><a href=\"https://glpi-project.org/\" title=\"Powered by Teclib and contributors\" class=\"copyright\">
                     <p>GLPI ";
                // line 138
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GLPI_VERSION"), "html", null, true);
                yield "</p>
                     Copyright (C) 2015-";
                // line 139
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GLPI_YEAR"), "html", null, true);
                yield " Teclib\x27 and contributors
                  </a></p>
                  ";
                // line 141
                if ( !(null === ($context["found_new_version"] ?? null))) {
                    // line 142
                    yield "                     <p>
                        <a href=\"https://glpi-project.org\" target=\"_blank\"
                           title=\"";
                    // line 144
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("You will find it on the GLPI-PROJECT.org site."), "html", null, true);
                    yield "\">
                           ";
                    // line 145
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("A new version is available: %s."), ($context["found_new_version"] ?? null)), "html", null, true);
                    yield "
                           <span class=\"badge bg-info text-dark\">
                              1
                           </span>
                        </a>
                     </p>
                  ";
                }
                // line 152
                yield "               </div>
            </div>
         </div>
      </div>
      ";
            }
            // line 157
            yield "   ";
        }
        // line 158
        yield "</div>

<script type=\"text/javascript\">
\$(function() {
   \$(\"#show_about_modal_";
        // line 162
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_header"] ?? null), "html", null, true);
        yield "\").click(function(e) {
      e.preventDefault();
      \$(\"#about_modal_";
        // line 164
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand_header"] ?? null), "html", null, true);
        yield "\").remove().modal(\"show\");
   });
});
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/parts/user_header.html.twig";
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
        return array (  330 => 164,  325 => 162,  319 => 158,  316 => 157,  309 => 152,  299 => 145,  295 => 144,  291 => 142,  289 => 141,  284 => 139,  280 => 138,  277 => 137,  271 => 134,  268 => 133,  266 => 132,  261 => 130,  252 => 126,  248 => 125,  240 => 121,  238 => 120,  229 => 114,  222 => 112,  217 => 110,  210 => 108,  205 => 105,  201 => 103,  195 => 99,  193 => 98,  189 => 97,  183 => 94,  178 => 93,  176 => 92,  170 => 89,  163 => 87,  155 => 82,  150 => 79,  147 => 77,  144 => 76,  138 => 73,  133 => 71,  127 => 70,  122 => 69,  120 => 68,  112 => 64,  110 => 63,  105 => 61,  101 => 59,  97 => 57,  95 => 54,  94 => 53,  87 => 49,  80 => 46,  78 => 45,  74 => 44,  71 => 43,  69 => 42,  65 => 41,  58 => 39,  54 => 37,  52 => 36,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/parts/user_header.html.twig", "/var/www/glpi/templates/layout/parts/user_header.html.twig");
    }
}
