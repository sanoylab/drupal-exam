<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/themes/stable/templates/admin/system-modules-uninstall.html.twig */
class __TwigTemplate_dd3297ca824c04e15ee9e87ef41ad04c55fccce6b0c0f4ba43c13d6ab870e71f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "filters", [])), "html", null, true);
        echo "

<table class=\"responsive-enabled\" data-striping=\"1\">
  <thead>
    <tr>
      <th>";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Uninstall"));
        echo "</th>
      <th>";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Name"));
        echo "</th>
      <th>";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Description"));
        echo "</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 34
            echo "      ";
            $context["zebra"] = twig_cycle([0 => "odd", 1 => "even"], $this->sandbox->ensureToStringAllowed($this->getAttribute($context["loop"], "index0", [])));
            // line 35
            echo "<tr";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["module"], "attributes", []), "addClass", [0 => ($context["zebra"] ?? null)], "method")), "html", null, true);
            echo ">
        <td align=\"center\">";
            // line 37
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["module"], "checkbox", [])), "html", null, true);
            // line 38
            echo "</td>
        <td>
          <label for=\"";
            // line 40
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["module"], "checkbox_id", [])), "html", null, true);
            echo "\" class=\"module-name table-filter-text-source\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["module"], "name", [])), "html", null, true);
            echo "</label>
        </td>
        <td class=\"description\">
          <span class=\"text module-description\">";
            // line 43
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["module"], "description", [])), "html", null, true);
            echo "</span>
          ";
            // line 44
            if (($this->getAttribute($context["module"], "reasons_count", []) > 0)) {
                // line 45
                echo "            <div class=\"admin-requirements\">";
                // line 46
                echo \Drupal::translation()->formatPlural(abs($this->getAttribute(                // line 48
$context["module"], "reasons_count", [])), "The following reason prevents @module.module_name from being uninstalled:", "The following reasons prevent @module.module_name from being uninstalled:", array("@module.module_name" => $this->getAttribute(                // line 47
$context["module"], "module_name", []), "@module.module_name" => $this->getAttribute(                // line 49
$context["module"], "module_name", []), ));
                // line 51
                echo "              <div class=\"item-list\">
                <ul>";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["module"], "validation_reasons", []));
                foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                    // line 54
                    echo "<li>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["reason"]), "html", null, true);
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reason'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                if ($this->getAttribute($context["module"], "required_by", [])) {
                    // line 57
                    echo "<li>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Required by: @module-list", ["@module-list" => $this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["module"], "required_by", [])), ", ")]));
                    echo "</li>";
                }
                // line 59
                echo "</ul>
              </div>
            </div>
          ";
            }
            // line 63
            echo "        </td>
      </tr>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 66
            echo "      <tr class=\"odd\">
        <td colspan=\"3\" class=\"empty message\">";
            // line 67
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("No modules are available to uninstall."));
            echo "</td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "  </tbody>
</table>

";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["form"] ?? null)), "filters", "modules", "uninstall"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/system-modules-uninstall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 73,  163 => 70,  154 => 67,  151 => 66,  136 => 63,  130 => 59,  125 => 57,  123 => 56,  115 => 54,  111 => 53,  108 => 51,  106 => 49,  105 => 47,  104 => 48,  103 => 46,  101 => 45,  99 => 44,  95 => 43,  87 => 40,  83 => 38,  81 => 37,  76 => 35,  73 => 34,  55 => 33,  48 => 29,  44 => 28,  40 => 27,  32 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/stable/templates/admin/system-modules-uninstall.html.twig", "D:\\drupal\\mypsup\\web\\core\\themes\\stable\\templates\\admin\\system-modules-uninstall.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 33, "set" => 34, "if" => 44, "trans" => 46];
        static $filters = ["escape" => 22, "t" => 27, "safe_join" => 57, "without" => 73];
        static $functions = ["cycle" => 34];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if', 'trans'],
                ['escape', 't', 'safe_join', 'without'],
                ['cycle']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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
