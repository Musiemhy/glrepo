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

/* layout/parts/page_header.html.twig */
class __TwigTemplate_de5730d899129529d739d5e462f78323 extends Template
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
        $context["anonymous"] = (null === $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile"));
        // line 34
        yield "
";
        // line 35
        $context["is_vertical"] = ( !(($tmp = ($context["anonymous"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getPageLayout() == "vertical"));
        // line 36
        $context["is_horizontal"] =  !(($tmp = ($context["is_vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp);
        // line 37
        $context["is_helpdesk"] = ((($tmp = ($context["anonymous"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk"));
        // line 38
        yield "
<body class=\"";
        // line 39
        yield (string) ((((($tmp = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("fold_menu")) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = ($context["is_vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? ("navbar-collapsed") : (""));
        yield " ";
        yield (string) (((($tmp = ($context["is_vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("vertical-layout") : ("horizontal-layout"));
        yield " ";
        yield (string) (((($tmp = ($context["is_debug_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("debug-active") : (""));
        yield " ";
        yield (string) (((($tmp = ($context["is_helpdesk"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("helpdesk") : ("central"));
        yield "\">
   <div class=\"skip-links\">
      <a class=\"visually-hidden-focusable skip-link\" href=\"#page\">";
        // line 41
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Go to main content"), "html", null, true);
        yield "</a>
   </div>
   ";
        // line 43
        if ((((($tmp = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("DBConnection::isDbAvailable")) && $tmp instanceof Markup ? (string) $tmp : $tmp) && Twig\Extension\CoreExtension::constant("GLPI_SKIP_UPDATES", null, true)) &&  !(($tmp = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Update::isDbUpToDate")) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 44
            yield "      <div class=\"banner-need-update\">
         ";
            // line 45
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("You are bypassing a needed update"), "html", null, true);
            yield "
      </div>
   ";
        }
        // line 48
        yield "   ";
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/impersonate_banner.html.twig");
        yield "
   ";
        // line 49
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/messages_after_redirect_toasts.html.twig", ["display_container" => true]);
        yield "

   <div class=\"page\">

      ";
        // line 53
        if ((($tmp = ($context["is_vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "      <aside class=\"navbar navbar-vertical navbar-expand-lg sticky-lg-top sidebar\" data-testid=\"sidebar\" aria-label=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Sidebar"), "html", null, true);
            yield "\">
         <div class=\"container-fluid\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\" aria-controls=\"navbar-menu\" aria-label=\"";
            // line 56
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Toggle navigation"), "html", null, true);
            yield "\">
               <span class=\"navbar-toggler-icon\"></span>
            </button>

            <a href=\"";
            // line 60
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->indexPath(), "html", null, true);
            yield "\" accesskey=\"1\" title=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Home"), "html", null, true);
            yield "\"
               class=\"navbar-brand\">
               <span class=\"glpi-logo\"></span>
            </a>

            ";
            // line 65
            if ( !(($tmp = ($context["anonymous"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 66
                yield "               <span class=\"d-none d-lg-inline-block\">
                   ";
                // line 67
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/goto_button.html.twig");
                yield "
               </span>
            ";
            }
            // line 70
            yield "
            ";
            // line 71
            if ( !(null === ($context["user"] ?? null))) {
                // line 72
                yield "               ";
                // line 73
                yield "               <div class=\"d-lg-none\">
                  ";
                // line 74
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/user_header.html.twig");
                yield "
               </div>
            ";
            }
            // line 77
            yield "
            ";
            // line 78
            if ( !(($tmp = ($context["anonymous"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 79
                yield "               <nav class=\"collapse navbar-collapse\" id=\"navbar-menu\" aria-label=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Main navigation"), "html", null, true);
                yield "\">
                   <span class=\"d-inline-block d-lg-none ms-2\">
                       ";
                // line 81
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/goto_button.html.twig");
                yield "
                   </span>
                   ";
                // line 83
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/menu.html.twig");
                yield "


                  <p class=\"text-start\">
                     <button class=\"btn btn-sm btn-ghost-secondary  ";
                // line 87
                yield (string) (((($tmp = ($context["is_debug_active"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("mb-4") : ("mb-2"));
                yield " mx-auto reduce-menu d-none d-md-block\">
                        <span class=\"menu-label\">";
                // line 88
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Collapse menu"), "html", null, true);
                yield "</span>
                     </button>
                  </p>
               </nav>
            ";
            }
            // line 93
            yield "         </div>
      </aside>
      ";
        }
        // line 96
        yield "
      <header class=\"navbar d-print-none sticky-lg-top shadow-sm ";
        // line 97
        yield (string) (((($tmp = ($context["is_vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("navbar-light navbar-expand-md") : ("navbar-dark navbar-expand-xl topbar"));
        yield "\" data-testid=\"main-header\" role=\"banner\">
         ";
        // line 99
        yield "         <div class=\"header-container container-fluid flex-xl-nowrap pe-xl-0 ";
        yield (string) (((($tmp = ($context["is_helpdesk"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("container-xl") : (""));
        yield "\">
            ";
        // line 100
        if ((($tmp = ($context["is_vertical"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 101
            yield "               ";
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/breadcrumbs.html.twig");
            yield "

                <div class=\"ms-lg-auto d-none d-lg-block flex-grow-1 flex-lg-grow-0\">
                     ";
            // line 104
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/global_search_form.html.twig");
            yield "
                </div>

            ";
        } elseif ((($tmp =         // line 107
($context["is_horizontal"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 108
            yield "               <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\" aria-controls=\"navbar-menu\" aria-label=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Toggle navigation"), "html", null, true);
            yield "\">
                  <span class=\"navbar-toggler-icon\"></span>
               </button>

               <a href=\"";
            // line 112
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->indexPath(), "html", null, true);
            yield "\" accesskey=\"1\" title=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Home"), "html", null, true);
            yield "\"
                  class=\"navbar-brand\">
                  <span class=\"glpi-logo\"></span>
               </a>

               <div class=\"d-lg-none\">
                  ";
            // line 118
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/user_header.html.twig");
            yield "
               </div>

               ";
            // line 121
            if (( !(($tmp = ($context["anonymous"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["menu"] ?? null)) > 0) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["menu"] ?? null), "home", [], "any", true, true, false, 121)))) {
                // line 122
                yield "               <nav class=\"collapse navbar-collapse justify-content-center\" id=\"navbar-menu\" aria-label=\"";
                yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Main navigation"), "html", null, true);
                yield "\">
                  ";
                // line 123
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/menu.html.twig");
                yield "
                  ";
                // line 124
                if ( !(($tmp = ($context["anonymous"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 125
                    yield "                  <span class=\"ms-xl-2 d-inline-block mt-2 mt-xl-2\">
                     ";
                    // line 126
                    yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/goto_button.html.twig");
                    yield "
                  </span>
                  ";
                }
                // line 129
                yield "               </nav>
               ";
            }
            // line 131
            yield "            ";
        }
        // line 132
        yield "
            <div class=\"ms-md-4 d-none d-lg-block\">
               ";
        // line 134
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/user_header.html.twig");
        yield "
            </div>
         </div>
      </header>

      ";
        // line 140
        yield "      ";
        if (((($tmp = ($context["is_horizontal"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) &&  !(($tmp = ($context["is_helpdesk"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 141
            yield "      <div class=\"navbar navbar-expand-md navbar-light secondary-bar sticky-md-top shadow-sm\">
         <div class=\"container-fluid justify-content-start\">
            ";
            // line 143
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/breadcrumbs.html.twig");
            yield "
            <div class=\"ms-md-auto d-none d-md-block flex-grow-1 flex-md-grow-0\">
                ";
            // line 145
            yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/global_search_form.html.twig");
            yield "
            </div>
         </div>
      </div>
      ";
        }
        // line 150
        yield "
      <div class=\"page-wrapper mb-0\">
         <div class=\"page-body container-fluid ";
        // line 152
        yield (string) (((($tmp = ($context["is_helpdesk"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("container-xl") : (""));
        yield "\">
            <main role=\"main\" id=\"page\" class=\"legacy\" tabindex=\"-1\">
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/parts/page_header.html.twig";
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
        return array (  310 => 152,  306 => 150,  298 => 145,  293 => 143,  289 => 141,  286 => 140,  278 => 134,  274 => 132,  271 => 131,  267 => 129,  261 => 126,  258 => 125,  256 => 124,  252 => 123,  247 => 122,  245 => 121,  239 => 118,  228 => 112,  220 => 108,  218 => 107,  212 => 104,  205 => 101,  203 => 100,  198 => 99,  194 => 97,  191 => 96,  186 => 93,  178 => 88,  174 => 87,  167 => 83,  162 => 81,  156 => 79,  154 => 78,  151 => 77,  145 => 74,  142 => 73,  140 => 72,  138 => 71,  135 => 70,  129 => 67,  126 => 66,  124 => 65,  114 => 60,  107 => 56,  101 => 54,  99 => 53,  92 => 49,  87 => 48,  81 => 45,  78 => 44,  76 => 43,  71 => 41,  60 => 39,  57 => 38,  55 => 37,  53 => 36,  51 => 35,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/parts/page_header.html.twig", "/var/www/glpi/templates/layout/parts/page_header.html.twig");
    }
}
