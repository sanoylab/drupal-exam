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

/* __string_template__708fc8b0c0f1e7b5ad048b97741ad18b02b41418dbc42893d5a04919b777db41 */
class __TwigTemplate_8270c669da73c59303f8b316189b3b613197e8e762f958022475d04a3ec41d96 extends \Twig\Template
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
        echo "<div id=\"psVidPic\">
\t\t\t\t\t\t\t<div class=\"psVideoPic\">
\t\t\t\t
\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t</div>





<div class=\"psVideo_line\">
\t\t\t\t\t\t\t<hr class=\"psVideo_line_hr\">
\t\t\t\t\t\t</div>
<div class=\"clearfix\"> </div>

<div class=\"psAboutBox\"> 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <div class=\"region region-aboutbox\">
    <section id=\"block-test\" class=\"block block-block-content block-block-contente0fa2619-15e4-427b-b3ec-e3ce8103598b clearfix\">
  
    

      
            <div class=\"field field--name-body field--type-text-with-summary field--label-hidden field--item\"><h3 style=\"z-index: 1;\">";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo " <br>
Slum Upgrading</h3>

<p style=\"z-index: 1;\">&nbsp;</p>

<p style=\"z-index: 1;\">";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true);
        echo "</p>

<p style=\"z-index: 1;\">&nbsp;</p></div>
      
  </section>


  </div>

\t\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\" \">
\t\t\t\t\t\t\t<div class=\"psRM_arrow\"> 
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t <div class=\"psAboutBoxRM\"> 
\t\t\t\t\t\t\t\t\tRead More
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__708fc8b0c0f1e7b5ad048b97741ad18b02b41418dbc42893d5a04919b777db41";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 29,  57 => 24,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__708fc8b0c0f1e7b5ad048b97741ad18b02b41418dbc42893d5a04919b777db41", "");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 24];
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
