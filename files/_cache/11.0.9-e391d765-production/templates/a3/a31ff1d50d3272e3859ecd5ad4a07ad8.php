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

/* components/itilobject/timeline/filter_timeline.html.twig */
class __TwigTemplate_1558c32398dc2b48d9c60bf2acea8933 extends Template
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
        $context["filters_buttons"] = ["description" => ["title" => __("Description"), "icon" => CoreExtension::getAttribute($this->env, $this->source,         // line 36
($context["item"] ?? null), "getIcon", [], "method", false, false, false, 36), "itemtype" => "ITILContent", "checked" => true], "followups" => ["title" => _n("Followup", "Followups", Session::getPluralNumber()), "icon" => $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("ITILFollowup"), "itemtype" => "ITILFollowup", "checked" => true], "tasks" => ["title" => _n("Task", "Tasks", Session::getPluralNumber()), "icon" => $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("CommonITILTask"), "itemtype" => "ITILTask", "checked" => true], "documents" => ["title" => _n("Document", "Documents", Session::getPluralNumber()), "icon" => $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("Document_Item"), "itemtype" => "Document_Item", "checked" => true], "validations" => ["title" => $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("CommonITILValidation", Session::getPluralNumber()), "icon" => $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("CommonITILValidation"), "itemtype" => "ITILValidation", "checked" => true], "solutions" => ["title" => _n("Solution", "Solutions", Session::getPluralNumber()), "icon" => $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("ITILSolution"), "itemtype" => "ITILSolution", "checked" => true], "autoreminder" => ["title" => $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("ITILReminder", Session::getPluralNumber()), "icon" => $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("ITILReminder"), "itemtype" => "ITILReminder", "checked" => true]];
        // line 77
        yield "
";
        // line 78
        if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) {
            // line 79
            yield "   ";
            $context["filters_buttons"] = Twig\Extension\CoreExtension::merge(($context["filters_buttons"] ?? null), ["logs" => ["title" => __("Historical"), "icon" => "ti ti-history", "itemtype" => "Log", "checked" => false]]);
        }
        // line 88
        yield "
<div class=\"filter-timeline position-relative\">
   <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 90
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Timeline filter"), "html", null, true);
        yield "\">
      <button type=\"button\"
            class=\"btn btn-icon btn-ghost-secondary open-timeline-filter-popover me-2\"
            data-bs-toggle=\"collapse\"
            data-bs-target=\"#filter-timeline-popover\"
            data-bs-trigger=\"click\">
         <i class=\"ti ti-filter\"></i>
      </button>
   </div>

   <div class=\"filter-timeline-popover collapse position-absolute bottom-100 end-0 text-nowrap\"
        id=\"filter-timeline-popover\">
      <div class=\"card pt-2\">
         <div class=\"list-group list-group-flush\">
            ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["filters_buttons"] ?? null));
        foreach ($context['_seq'] as $context["filter_key"] => $context["filter_button"]) {
            // line 105
            yield "               <li class=\"list-group-item list-group-item-action py-1\">
                  <div class=\"form-check form-switch trigger-filter ";
            // line 106
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = $context["filter_button"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["itemtype"] ?? null) : null), "html", null, true);
            yield "\" role=\"button\">
                     <input class=\"form-check-input\" type=\"checkbox\" id=\"timeline-filter-";
            // line 107
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["filter_key"], "html", null, true);
            yield "\"
                           autocomplete=\"off\"
                           ";
            // line 109
            yield (string) (((($tmp = (($_v1 = $context["filter_button"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["checked"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("checked") : (""));
            yield "
                           data-itemtype=\"";
            // line 110
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = $context["filter_button"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["itemtype"] ?? null) : null), "html", null, true);
            yield "\" />
                     <label class=\"form-check-label\" for=\"timeline-filter-";
            // line 111
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["filter_key"], "html", null, true);
            yield "\" role=\"button\">
                        <i class=\"";
            // line 112
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = $context["filter_button"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["icon"] ?? null) : null), "html", null, true);
            yield " ms-2\"></i>
                        ";
            // line 113
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = $context["filter_button"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["title"] ?? null) : null), "html", null, true);
            yield "
                     </label>
                  </div>
               </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['filter_key'], $context['filter_button'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 118
        yield "         </div>
      </div>
   </div>

   ";
        // line 122
        if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) {
            // line 123
            yield "      <div class=\"d-inline-block\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("View TODO list"), "html", null, true);
            yield "\">
         <button type=\"button\"
               class=\"btn btn-icon btn-ghost-secondary view-timeline-todo-list me-1\"
               aria-label=\"";
            // line 126
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("View TODO list"), "html", null, true);
            yield "\"
               data-testid=\"view-todo-list\">
            <i class=\"ti ti-list-check\"></i>
         </button>
      </div>
   ";
        }
        // line 132
        yield "</div>

<script type=\"text/javascript\">
\$(function() {
   \$(document).on(\"click\", \".filter-timeline-popover .trigger-filter\", function() {
      var timeline       = \$(\x27#itil-object-container .itil-timeline\x27);
      var timeline_items = timeline.find(\".timeline-item\");

      timeline_items.addClass(\x27d-none\x27);
      \$(\x27.filter-timeline-popover .trigger-filter input[type=checkbox]\x27).each(function() {
         if(!\$(this).is(\x27:checked\x27)) {
            return;
         }
         var itemtype = \$(this).data(\x27itemtype\x27);
         timeline_items.filter(\".\"+itemtype).removeClass(\x27d-none\x27);
      });
   });

   \$(document).on(\"click\", \".view-timeline-todo-list\", function() {
      \$(\x27body\x27).toggleClass(\x27timeline-todo-list\x27);
   });

   \$(document).mouseup(function(e) {
      var container = \$(\"#filter-timeline-popover\");

      // if the target of the click isn\x27t the container nor a descendant of the container
      if (!container.is(e.target) && container.has(e.target).length === 0) {
         var mycollapse = bootstrap.Collapse.getInstance(container[0]);
         if (mycollapse !== null) {
            mycollapse.hide();
         }
      }
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
        return "components/itilobject/timeline/filter_timeline.html.twig";
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
        return array (  147 => 132,  138 => 126,  131 => 123,  129 => 122,  123 => 118,  111 => 113,  107 => 112,  103 => 111,  99 => 110,  95 => 109,  90 => 107,  86 => 106,  83 => 105,  79 => 104,  62 => 90,  58 => 88,  54 => 79,  52 => 78,  49 => 77,  47 => 36,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/timeline/filter_timeline.html.twig", "/var/www/glpi/templates/components/itilobject/timeline/filter_timeline.html.twig");
    }
}
