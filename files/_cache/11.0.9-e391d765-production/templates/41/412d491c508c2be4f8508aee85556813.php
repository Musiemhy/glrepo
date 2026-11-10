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

/* components/itilobject/add_items.html.twig */
class __TwigTemplate_197ae919b569043d62a2f6874cd28980 extends Template
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
<div id=\"itemAddForm";
        // line 33
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\">
   ";
        // line 34
        if ((($tmp = ($context["can_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "      ";
            yield (string) ($context["my_items_dropdown"] ?? null);
            yield "
      ";
            // line 36
            yield (string) ($context["all_items_dropdown"] ?? null);
            yield "
      <a href=\"javascript:itemAction";
            // line 37
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
            yield "(\x27add\x27);\" class=\"btn btn-sm btn-outline-secondary\">
         <i class=\"ti ti-plus\"></i>
         <span>";
            // line 39
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
            yield "</span>
      </a>
   ";
        }
        // line 42
        yield "
   ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items_to_add"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item_to_add"]) {
            // line 44
            yield "      ";
            yield (string) $context["item_to_add"];
            yield "
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item_to_add'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 46
        yield "
   ";
        // line 47
        if ((($context["count"] ?? null) == 0)) {
            // line 48
            yield "      <input type=\"hidden\" value=\"0\" name=\"items_id\">
   ";
        }
        // line 50
        yield "
   ";
        // line 51
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "id", [], "any", false, false, false, 51) > 0) && (($context["usedcount"] ?? null) != ($context["count"] ?? null)))) {
            // line 52
            yield "      <i>";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(_n("%1\$s item not saved", "%1\$s items not saved", (($context["count"] ?? null) - ($context["usedcount"] ?? null))), (($context["count"] ?? null) - ($context["usedcount"] ?? null))), "html", null, true);
            yield "</i>
   ";
        }
        // line 54
        yield "   ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "id", [], "any", false, false, false, 54) > 0) && (($context["usedcount"] ?? null) > 5))) {
            // line 55
            yield "      <i><a href=\"";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath(($context["itil_class"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "id", [], "any", false, false, false, 55)), "html", null, true);
            yield "&amp;forcetab=";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["item_class"] ?? null), "html", null, true);
            yield "\$1\">";
            yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((__("Display all items") . "(") . ($context["usedcount"] ?? null)) . ")"), "html", null, true);
            yield "</a></i>
   ";
        }
        // line 57
        yield "   <script>
      function refreshItemCounter";
        // line 58
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "() {
         const item_form = \$(\"#itemAddForm";
        // line 59
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\");
         let item_count = item_form.find(\x27input[type=\"hidden\"][name^=\"items_id[\"]\x27).length;
         item_form.closest(\x27.accordion-item\x27).find(\x27.item-counter\x27).text(item_count);
      }

      function itemAction";
        // line 64
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "(action, itemtype, items_id) {
          if (itemtype === undefined && items_id === undefined) {
              const my_items_dropdown = \$(\x27#dropdown_my_items";
        // line 66
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\x27);
              if (my_items_dropdown.length > 0) {
                 const val = my_items_dropdown.val();
                 if (val && val.includes(\x27_\x27)) {
                    itemtype = val.split(\x27_\x27)[0];
                    items_id = val.split(\x27_\x27)[1];
                 }
              }
              if (itemtype === undefined && items_id === undefined) {
                  const dropdown_itemtype = \$(\x27#dropdown_itemtype";
        // line 75
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\x27);
                  const dropdown_items_id = \$(\x27#dropdown_add_items_id";
        // line 76
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\x27);
                  if (dropdown_itemtype.length > 0 && dropdown_items_id.length > 0) {
                      itemtype = dropdown_itemtype.val();
                      items_id = dropdown_items_id.val();
                  }
              }
          }
         if (!itemtype || !items_id) {
            glpi_toast_error(";
        // line 84
        yield (string) json_encode(__("Please select an item to add"));
        yield ");
            return;
         }
         \$.ajax({
            method: \x27POST\x27,
            url: CFG_GLPI.root_doc + \x27/ajax/";
        // line 89
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["item_class"] ?? null)), "html", null, true);
        yield ".php\x27,
            dataType: \x27html\x27,
            data: {
               \x27action\x27: action,
               \x27rand\x27: ";
        // line 93
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield ",
               \x27params\x27: ";
        // line 94
        yield (string) json_encode(($context["opt"] ?? null));
        yield ",
               \x27my_items\x27: \$(\x27#dropdown_my_items";
        // line 95
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\x27).val(),
               \x27itemtype\x27: itemtype,
               \x27items_id\x27: items_id,
            },
            success: function(response) {
               \$(\"#itemAddForm";
        // line 100
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\").replaceWith(response);
            }
         });
      }
      refreshItemCounter";
        // line 104
        yield (string) $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "();
   </script>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/itilobject/add_items.html.twig";
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
        return array (  207 => 104,  200 => 100,  192 => 95,  188 => 94,  184 => 93,  177 => 89,  169 => 84,  158 => 76,  154 => 75,  142 => 66,  137 => 64,  129 => 59,  125 => 58,  122 => 57,  112 => 55,  109 => 54,  103 => 52,  101 => 51,  98 => 50,  94 => 48,  92 => 47,  89 => 46,  79 => 44,  75 => 43,  72 => 42,  66 => 39,  61 => 37,  57 => 36,  52 => 35,  50 => 34,  46 => 33,  43 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/itilobject/add_items.html.twig", "/var/www/glpi/templates/components/itilobject/add_items.html.twig");
    }
}
