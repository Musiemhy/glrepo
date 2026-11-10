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

/* components/helpdesk_forms/service_catalog_items.html.twig */
class __TwigTemplate_be4e66bfeafd93a1ace09e7a45b44c7a extends Template
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
        if (array_key_exists("ancestors", $context)) {
            // line 34
            yield "    <span id=\"category-ancestors\" data-ancestors=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["ancestors"] ?? null)), "html", null, true);
            yield "\" style=\"display: none;\"></span>
";
        }
        // line 36
        yield "
";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 38
            yield "    ";
            if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf($context["item"], "Glpi\\Form\\ServiceCatalog\\ServiceCatalogLeafInterface")) {
                // line 39
                yield "        ";
                yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/helpdesk_forms/service_catalog_item.html.twig", ["item" =>                 // line 41
$context["item"]], false);
                // line 43
                yield "
    ";
            }
            // line 45
            yield "    ";
            if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf($context["item"], "Glpi\\Form\\ServiceCatalog\\ServiceCatalogCompositeInterface")) {
                // line 46
                yield "        ";
                if ((($tmp = ($context["expand_categories"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 47
                    yield "            <div class=\"col-12 d-flex\">
                ";
                    // line 48
                    $context["unique_dom_id"] = ("service-catalog-tree-" . Twig\Extension\CoreExtension::random($this->env->getCharset()));
                    // line 49
                    yield "                <section
                    class=\"card mx-1 my-2 flex-grow-1\"
                    aria-labelledby=\"";
                    // line 51
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_dom_id"] ?? null), "html", null, true);
                    yield "\"
                >
                    <div class=\"card-body\">
                        <div class=\"card-title mb-0 d-flex align-items-center w-100\">
                            <h2 id=\"";
                    // line 55
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unique_dom_id"] ?? null), "html", null, true);
                    yield "\" class=\"mb-0 fs-2\">
                                ";
                    // line 56
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getServiceCatalogItemTitle", [], "method", false, false, false, 56), "html", null, true);
                    yield "
                            </h2>
                            <div class=\"card-subtitle ms-2 remove-last-tinymce-margin\">
                                ";
                    // line 59
                    yield (string) $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getServiceCatalogItemDescription", [], "method", false, false, false, 59));
                    yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body p-0\">
                        <div class=\"row g-0\">
                            ";
                    // line 65
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "getChildren", [], "method", false, false, false, 65));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 66
                        yield "                                ";
                        yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/helpdesk_forms/service_catalog_nested_item.html.twig", ["child" =>                         // line 68
$context["child"]], false);
                        // line 70
                        yield "
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    // line 72
                    yield "                        </div>
                    </div>
                </section>
            </div>
        ";
                } else {
                    // line 77
                    yield "            ";
                    yield (string) Twig\Extension\CoreExtension::include($this->env, $context, "components/helpdesk_forms/service_catalog_item.html.twig", ["item" =>                     // line 79
$context["item"]], false);
                    // line 81
                    yield "
        ";
                }
                // line 83
                yield "    ";
            }
            $context['_iterated'] = true;
        }
        // line 84
        if (!$context['_iterated']) {
            // line 85
            yield "    ";
            if ((($tmp = ($context["is_default_search"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 86
                yield "        ";
                // line 87
                yield "        ";
                $context["empty_title"] = __("There are no forms available");
                // line 88
                yield "        ";
                $context["empty_subtitle"] = __("Please try again later.");
                // line 89
                yield "    ";
            } else {
                // line 90
                yield "        ";
                // line 91
                yield "        ";
                $context["empty_title"] = __("No forms found");
                // line 92
                yield "        ";
                $context["empty_subtitle"] = __("Try different keywords or filters.");
                // line 93
                yield "    ";
            }
            // line 94
            yield "    <div class=\"empty\">
        <p class=\"empty-title\">";
            // line 95
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["empty_title"] ?? null), "html", null, true);
            yield "</p>
        <p class=\"empty-subtitle text-secondary\">
            ";
            // line 97
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["empty_subtitle"] ?? null), "html", null, true);
            yield "
        </p>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 101
        yield "
";
        // line 103
        $context["sort_strategy"] = Twig\Extension\CoreExtension::default(((array_key_exists("sort_strategy", $context)) ? (Twig\Extension\CoreExtension::default(($context["sort_strategy"] ?? null), ($context["default_sort_strategy"] ?? null))) : (($context["default_sort_strategy"] ?? null))), "popularity");
        // line 104
        if ((($context["total"] ?? null) > ($context["items_per_page"] ?? null))) {
            // line 105
            yield "    ";
            $context["total_pages"] = Twig\Extension\CoreExtension::round((((($context["total"] ?? null) + ($context["items_per_page"] ?? null)) - 1) / ($context["items_per_page"] ?? null)), 0, "floor");
            // line 106
            yield "    ";
            $context["adjacents"] = 2;
            // line 107
            yield "    ";
            $context["skip_adjacents"] = false;
            // line 108
            yield "
    <nav aria-label=\"";
            // line 109
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Service catalog pages"), "html", null, true);
            yield "\">
        <ul class=\"pagination justify-content-center mt-4\">
            ";
            // line 112
            yield "            <li class=\"page-item ";
            yield (string) (((($context["current_page"] ?? null) <= 1)) ? ("disabled") : (""));
            yield "\">
                <a
                    class=\"page-link d-flex justify-content-center\"
                    href=\"?";
            // line 115
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(["category" => ($context["category_id"] ?? null), "filter" => ($context["filter"] ?? null), "page" => 1, "sort_strategy" => ($context["sort_strategy"] ?? null)]), "html", null, true);
            yield "\"
                    data-children-url-parameters=\"";
            // line 116
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(["category" => ($context["category_id"] ?? null), "filter" => ($context["filter"] ?? null), "page" => 1, "sort_strategy" => ($context["sort_strategy"] ?? null)]), "html", null, true);
            yield "\"
                    data-pagination-item
                    aria-label=\"";
            // line 118
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("First page"), "html", null, true);
            yield "\"
                    ";
            // line 119
            yield (string) (((($context["current_page"] ?? null) <= 1)) ? ("aria-disabled=\"true\"") : (""));
            yield "
                >
                    <i class=\"ti ti-chevrons-left\"></i>
                </a>
            </li>
            <li class=\"page-item ";
            // line 124
            yield (string) (((($context["current_page"] ?? null) <= 1)) ? ("disabled") : (""));
            yield "\">
                <a
                    class=\"page-link d-flex justify-content-center\"
                    href=\"?";
            // line 127
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(["category" => ($context["category_id"] ?? null), "filter" => ($context["filter"] ?? null), "page" => (($context["current_page"] ?? null) - 1), "sort_strategy" => ($context["sort_strategy"] ?? null)]), "html", null, true);
            yield "\"
                    data-children-url-parameters=\"";
            // line 128
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(["category" => ($context["category_id"] ?? null), "filter" => ($context["filter"] ?? null), "page" => (($context["current_page"] ?? null) - 1), "sort_strategy" => ($context["sort_strategy"] ?? null)]), "html", null, true);
            yield "\"
                    data-pagination-item
                    aria-label=\"";
            // line 130
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Previous page"), "html", null, true);
            yield "\"
                    ";
            // line 131
            yield (string) (((($context["current_page"] ?? null) <= 1)) ? ("aria-disabled=\"true\"") : (""));
            yield "
                >
                    <i class=\"ti ti-chevron-left\"></i>
                </a>
            </li>

            ";
            // line 138
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["total_pages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 139
                yield "                ";
                if ((((($context["current_page"] ?? null) - ($context["adjacents"] ?? null)) <= $context["page"]) && ((($context["current_page"] ?? null) + ($context["adjacents"] ?? null)) >= $context["page"]))) {
                    // line 140
                    yield "                    <li class=\"d-none d-sm-block page-item ";
                    yield (string) ((($context["page"] == ($context["current_page"] ?? null))) ? ("active selected") : (""));
                    yield "\">
                        <a
                            class=\"page-link d-flex justify-content-center\"
                            href=\"?";
                    // line 143
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(["category" => ($context["category_id"] ?? null), "filter" => ($context["filter"] ?? null), "page" => $context["page"], "sort_strategy" => ($context["sort_strategy"] ?? null)]), "html", null, true);
                    yield "\"
                            data-children-url-parameters=\"";
                    // line 144
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(["category" => ($context["category_id"] ?? null), "filter" => ($context["filter"] ?? null), "page" => $context["page"], "sort_strategy" => ($context["sort_strategy"] ?? null)]), "html", null, true);
                    yield "\"
                            data-pagination-item
                            ";
                    // line 146
                    yield (string) ((($context["page"] == ($context["current_page"] ?? null))) ? ("aria-current=\"page\"") : (""));
                    yield "
                        >
                            ";
                    // line 148
                    yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "
                        </a>
                    </li>
                    ";
                    // line 151
                    if (((($context["current_page"] ?? null) + ($context["adjacents"] ?? null)) == $context["page"])) {
                        // line 152
                        yield "                        ";
                        $context["skip_adjacents"] = false;
                        // line 153
                        yield "                    ";
                    }
                    // line 154
                    yield "                ";
                } elseif ((($context["skip_adjacents"] ?? null) == false)) {
                    // line 155
                    yield "                    ";
                    $context["skip_adjacents"] = true;
                    // line 156
                    yield "                    <li class=\"d-none d-sm-block page-item disabled\">
                        <a class=\"page-link\" href=\"#\" aria-disabled=\"true\">...</a>
                    </li>
                ";
                }
                // line 160
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 161
            yield "
            ";
            // line 163
            yield "            <li class=\"page-item ";
            yield (string) (((($context["current_page"] ?? null) >= ($context["total_pages"] ?? null))) ? ("disabled") : (""));
            yield "\">
                <a
                    class=\"page-link d-flex justify-content-center\"
                    href=\"?";
            // line 166
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(["category" => ($context["category_id"] ?? null), "filter" => ($context["filter"] ?? null), "page" => (($context["current_page"] ?? null) + 1), "sort_strategy" => ($context["sort_strategy"] ?? null)]), "html", null, true);
            yield "\"
                    data-children-url-parameters=\"";
            // line 167
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(["category" => ($context["category_id"] ?? null), "filter" => ($context["filter"] ?? null), "page" => (($context["current_page"] ?? null) + 1), "sort_strategy" => ($context["sort_strategy"] ?? null)]), "html", null, true);
            yield "\"
                    data-pagination-item
                    aria-label=\"";
            // line 169
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Next page"), "html", null, true);
            yield "\"
                    ";
            // line 170
            yield (string) (((($context["current_page"] ?? null) >= ($context["total_pages"] ?? null))) ? ("aria-disabled=\"true\"") : (""));
            yield "
                >
                    <i class=\"ti ti-chevron-right\"></i>
                </a>
            </li>
            <li class=\"page-item ";
            // line 175
            yield (string) (((($context["current_page"] ?? null) >= ($context["total_pages"] ?? null))) ? ("disabled") : (""));
            yield "\">
                <a
                    class=\"page-link d-flex justify-content-center\"
                    href=\"?";
            // line 178
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(["category" => ($context["category_id"] ?? null), "filter" => ($context["filter"] ?? null), "page" => ($context["total_pages"] ?? null), "sort_strategy" => ($context["sort_strategy"] ?? null)]), "html", null, true);
            yield "\"
                    data-children-url-parameters=\"";
            // line 179
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(["category" => ($context["category_id"] ?? null), "filter" => ($context["filter"] ?? null), "page" => ($context["total_pages"] ?? null), "sort_strategy" => ($context["sort_strategy"] ?? null)]), "html", null, true);
            yield "\"
                    data-pagination-item
                    aria-label=\"";
            // line 181
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Last page"), "html", null, true);
            yield "\"
                    ";
            // line 182
            yield (string) (((($context["current_page"] ?? null) >= ($context["total_pages"] ?? null))) ? ("aria-disabled=\"true\"") : (""));
            yield "
                >
                    <i class=\"ti ti-chevrons-right\"></i>
                </a>
            </li>
        </ul>
    </nav>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/helpdesk_forms/service_catalog_items.html.twig";
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
        return array (  388 => 182,  384 => 181,  379 => 179,  375 => 178,  369 => 175,  361 => 170,  357 => 169,  352 => 167,  348 => 166,  341 => 163,  338 => 161,  331 => 160,  325 => 156,  322 => 155,  319 => 154,  316 => 153,  313 => 152,  311 => 151,  305 => 148,  300 => 146,  295 => 144,  291 => 143,  284 => 140,  281 => 139,  276 => 138,  267 => 131,  263 => 130,  258 => 128,  254 => 127,  248 => 124,  240 => 119,  236 => 118,  231 => 116,  227 => 115,  220 => 112,  215 => 109,  212 => 108,  209 => 107,  206 => 106,  203 => 105,  201 => 104,  199 => 103,  196 => 101,  185 => 97,  180 => 95,  177 => 94,  174 => 93,  171 => 92,  168 => 91,  166 => 90,  163 => 89,  160 => 88,  157 => 87,  155 => 86,  152 => 85,  150 => 84,  145 => 83,  141 => 81,  139 => 79,  137 => 77,  130 => 72,  122 => 70,  120 => 68,  118 => 66,  114 => 65,  105 => 59,  99 => 56,  95 => 55,  88 => 51,  84 => 49,  82 => 48,  79 => 47,  76 => 46,  73 => 45,  69 => 43,  67 => 41,  65 => 39,  62 => 38,  57 => 37,  54 => 36,  48 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/helpdesk_forms/service_catalog_items.html.twig", "/var/www/glpi/templates/components/helpdesk_forms/service_catalog_items.html.twig");
    }
}
