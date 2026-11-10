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

/* layout/page_card_notlogged.html.twig */
class __TwigTemplate_21bbc48b70604e2a1fb24ec9d50526d4 extends Template
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
            'header_block' => [$this, 'block_header_block'],
            'content_block' => [$this, 'block_content_block'],
            'footer_block' => [$this, 'block_footer_block'],
            'javascript_block' => [$this, 'block_javascript_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "
";
        // line 33
        $context["theme"] = $this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->currentTheme();
        // line 34
        if ( !array_key_exists("css_files", $context)) {
            // line 35
            yield "   ";
            $context["css_files"] = [["path" => "lib/base.css"], ["path" => "lib/tabler.css"], ["path" => "css/glpi.scss"], ["path" => "css/core_palettes.scss"]];
            // line 41
            yield "
   ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Glpi\Application\View\Extension\FrontEndAssetsExtension']->getCustomThemesPaths());
            foreach ($context['_seq'] as $context["_key"] => $context["theme_path"]) {
                // line 43
                yield "      ";
                $context["css_files"] = Twig\Extension\CoreExtension::merge(($context["css_files"] ?? null), [["path" => $context["theme_path"]]]);
                // line 44
                yield "   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['theme_path'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 45
            yield "
   ";
        }
        // line 48
        if ( !array_key_exists("js_files", $context)) {
            // line 49
            yield "   ";
            $context["js_files"] = [["path" => "lib/base.js"], ["path" => "js/common.js"], ["path" => "lib/fuzzy.js"]];
        }
        // line 55
        if ( !array_key_exists("js_modules", $context)) {
            // line 56
            yield "   ";
            $context["js_modules"] = [];
        }
        // line 58
        if ( !array_key_exists("custom_header_tags", $context)) {
            // line 59
            yield "   ";
            $context["custom_header_tags"] = [];
        }
        // line 61
        yield "
";
        // line 63
        $context["js_files"] = Twig\Extension\CoreExtension::merge(($context["js_files"] ?? null), $this->extensions['Glpi\Application\View\Extension\PluginExtension']->getPluginsJsScriptsFiles(true));
        // line 64
        $context["js_modules"] = Twig\Extension\CoreExtension::merge(($context["js_modules"] ?? null), $this->extensions['Glpi\Application\View\Extension\PluginExtension']->getPluginsJsModulesFiles(true));
        // line 65
        yield "
";
        // line 66
        $context["is_anonymous_page"] = true;
        // line 67
        yield "
";
        // line 68
        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "layout/parts/head.html.twig");
        yield "
<body class=\"welcome-anonymous\">
   <div class=\"skip-links\">
      <a class=\"visually-hidden-focusable skip-link\" href=\"#page\">";
        // line 71
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Go to main content"), "html", null, true);
        yield "</a>
   </div>
   <main id=\"page\" class=\"page-anonymous\" role=\"main\" tabindex=\"-1\">
      <div class=\"flex-fill d-flex flex-column justify-content-center py-4 mt-4\">
         ";
        // line 75
        $context["style"] = null;
        // line 76
        yield "         ";
        if (array_key_exists("card_md_width", $context)) {
            // line 77
            yield "            ";
            $context["style"] = "max-width: 40rem";
            // line 78
            yield "         ";
        }
        // line 79
        yield "         ";
        if (array_key_exists("card_bg_width", $context)) {
            // line 80
            yield "            ";
            $context["style"] = "max-width: 60rem";
            // line 81
            yield "         ";
        }
        // line 82
        yield "
         <div class=\"container-tight py-6\" ";
        // line 83
        if ( !(null === ($context["style"] ?? null))) {
            yield "style=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["style"] ?? null), "html", null, true);
            yield "\"";
        }
        yield ">
            <div class=\"text-center\">
               <div class=\"col-md\">
                  <span class=\"glpi-logo mb-4\" title=\"GLPI\"></span>
               </div>
            </div>
            <div class=\"card card-md main-content-card\">
               ";
        // line 91
        yield "               <div class=\"card-header\">";
        yield from $this->unwrap()->yieldBlock('header_block', $context, $blocks);
        yield "</div>
               <div class=\"card-body\">
                  ";
        // line 93
        yield from $this->unwrap()->yieldBlock('content_block', $context, $blocks);
        // line 94
        yield "               </div>
            </div>

            <div class=\"text-center text-muted mt-3\">
               ";
        // line 98
        yield from $this->unwrap()->yieldBlock('footer_block', $context, $blocks);
        // line 99
        yield "            </div>
         </div>
      </div>
   </main>

   ";
        // line 104
        yield from $this->unwrap()->yieldBlock('javascript_block', $context, $blocks);
        // line 105
        yield "</body>
</html>
";
        yield from [];
    }

    // line 91
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 93
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 98
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 104
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascript_block(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layout/page_card_notlogged.html.twig";
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
        return array (  223 => 104,  213 => 98,  203 => 93,  193 => 91,  186 => 105,  184 => 104,  177 => 99,  175 => 98,  169 => 94,  167 => 93,  161 => 91,  147 => 83,  144 => 82,  141 => 81,  138 => 80,  135 => 79,  132 => 78,  129 => 77,  126 => 76,  124 => 75,  117 => 71,  111 => 68,  108 => 67,  106 => 66,  103 => 65,  101 => 64,  99 => 63,  96 => 61,  92 => 59,  90 => 58,  86 => 56,  84 => 55,  80 => 49,  78 => 48,  74 => 45,  67 => 44,  64 => 43,  60 => 42,  57 => 41,  54 => 35,  52 => 34,  50 => 33,  47 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "layout/page_card_notlogged.html.twig", "/var/www/glpi/templates/layout/page_card_notlogged.html.twig");
    }
}
