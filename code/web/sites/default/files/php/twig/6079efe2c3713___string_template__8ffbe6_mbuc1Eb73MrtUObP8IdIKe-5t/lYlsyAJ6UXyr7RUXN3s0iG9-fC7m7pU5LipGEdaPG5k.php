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

/* __string_template__8ffbe653da263514aab13461427b3ce7af8cbdbd98e7f102987b1141d3fef157 */
class __TwigTemplate_3b3403b9ad16cde513a432050a4c4a9dc785404a35df6d7193675aaed09feb5e extends \Twig\Template
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
        // line 1
        echo "\t\t\t\t\t\t\t<div class=\"psTopics_header\">
\t\t\t\t\t\t\t\t<div class=\"psTopics_header_txt\">
\t\t\t\t\t\t\t\t\tTopics
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
<div class=\"psTopics_container\">
\t\t\t\t\t\t\t<div class=\"psTopics_Img\">
\t\t\t\t\t\t\t\t<img class=\"d-block w-100\" src=\"";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_sliding_image"] ?? null)), "html", null, true);
        echo "\" height=\"140px\" >
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"psTopics_txt\">
\t\t\t\t\t\t\t\t<div class=\"psTopics_txt_upper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <div class=\"region region-topicsbox1\">
    <section id=\"block-topicsboxonetxt\" class=\"block block-block-content block-block-content56546481-3ab5-43b3-b429-d8b86db1c63c clearfix\">
  
    

      
            <div class=\"field field--name-body field--type-text-with-summary field--label-hidden field--item\"><h3 style=\"z-index: 1;\">";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo " </h3>

<p style=\"z-index: 1;\">";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_summary"] ?? null)), "html", null, true);
        echo " </p></div>
      
  </section>


  </div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"psTopics_txt_lower\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_node"] ?? null)), "html", null, true);
        echo " \"> 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"psRM_arrow\"> 
\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"psAboutBoxRM\"> 
\t\t\t\t\t\t\t\t\t\t\tRead More
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__8ffbe653da263514aab13461427b3ce7af8cbdbd98e7f102987b1141d3fef157";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 29,  59 => 20,  54 => 18,  41 => 8,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__8ffbe653da263514aab13461427b3ce7af8cbdbd98e7f102987b1141d3fef157", "");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 8];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
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
