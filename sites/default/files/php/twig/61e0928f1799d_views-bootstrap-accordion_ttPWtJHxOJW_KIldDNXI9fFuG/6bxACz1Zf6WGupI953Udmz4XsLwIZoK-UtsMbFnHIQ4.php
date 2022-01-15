<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/views_bootstrap/templates/views-bootstrap-accordion.html.twig */
class __TwigTemplate_ce2ec4e0f3d9130c2fdc9462eaf9f38c19589c2deb617bce3d8b9daba91c348a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["title_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => [0 => "accordion-toggle"]]);
        // line 2
        if (($context["group_title"] ?? null)) {
            echo "<h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_title"] ?? null), 2, $this->source), "html", null, true);
            echo "</h3>";
        }
        // line 3
        echo "<div ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 3), "setAttribute", [0 => "id", 1 => ($context["id"] ?? null)], "method", false, false, true, 3), "setAttribute", [0 => "role", 1 => "tablist"], "method", false, false, true, 3), "setAttribute", [0 => "aria-multiselectable", 1 => "true"], "method", false, false, true, 3), 3, $this->source), "html", null, true);
        echo ">
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 5
            $context["expanded"] = (((((($context["behavior"] ?? null) == "first") && twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 5)) || (($context["behavior"] ?? null) == "all"))) ? (true) : (false));
            // line 6
            echo "    ";
            $context["title_class"] = [0 => (((($context["expanded"] ?? null) == false)) ? ("collapsed") : (""))];
            // line 7
            echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\" ";
            // line 8
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "panel-heading"], "method", false, false, true, 8), "setAttribute", [0 => "role", 1 => "tab"], "method", false, false, true, 8), "setAttribute", [0 => "id", 1 => ((("heading" . $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 8, $this->source)) . "-collapse-") . $this->sandbox->ensureToStringAllowed($context["key"], 8, $this->source))], "method", false, false, true, 8), 8, $this->source), "html", null, true);
            echo ">
        <h4 class=\"panel-title\">
          <a ";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_class"] ?? null)], "method", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "
             role=\"button\"
             data-toggle=\"collapse\"
             data-parent=\"#";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 13, $this->source), "html", null, true);
            echo "\"
             aria-expanded=\"";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["expanded"] ?? null), 14, $this->source), "html", null, true);
            echo "\"
             aria-controls=\"";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 15, $this->source), "html", null, true);
            echo "-collapse-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 15, $this->source), "html", null, true);
            echo "\"
             href=\"#";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 16, $this->source), "html", null, true);
            echo "-collapse-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 16, $this->source), "html", null, true);
            echo "\">
            ";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "
          </a>
          ";
            // line 19
            if (twig_get_attribute($this->env, $this->source, $context["row"], "label", [], "any", false, false, true, 19)) {
                // line 20
                echo "            <span class=\"badge pull-right\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "label", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "</span>
          ";
            }
            // line 22
            echo "        </h4>
      </div>

      <div id=\"";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 25, $this->source), "html", null, true);
            echo "-collapse-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 25, $this->source), "html", null, true);
            echo "\" class=\"panel-collapse collapse ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["expanded"] ?? null) == "true")) ? ("in") : ("")));
            echo "\" role=\"tabpanel\" aria-labelledby=\"heading";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 25, $this->source), "html", null, true);
            echo "-collapse-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 25, $this->source), "html", null, true);
            echo "\">
        <div class=\"panel-body\">
          ";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/views_bootstrap/templates/views-bootstrap-accordion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 32,  139 => 27,  126 => 25,  121 => 22,  115 => 20,  113 => 19,  108 => 17,  102 => 16,  96 => 15,  92 => 14,  88 => 13,  82 => 10,  77 => 8,  74 => 7,  71 => 6,  69 => 5,  52 => 4,  47 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/views_bootstrap/templates/views-bootstrap-accordion.html.twig", "/opt/drupal/web/modules/contrib/views_bootstrap/templates/views-bootstrap-accordion.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 2, "for" => 4);
        static $filters = array("escape" => 2);
        static $functions = array("create_attribute" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape'],
                ['create_attribute']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
