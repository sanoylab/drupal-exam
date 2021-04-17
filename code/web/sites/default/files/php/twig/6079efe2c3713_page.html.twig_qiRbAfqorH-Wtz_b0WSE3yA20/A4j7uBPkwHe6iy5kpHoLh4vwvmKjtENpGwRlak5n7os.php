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

/* themes/un_habitat_theme/templates/page.html.twig */
class __TwigTemplate_a475bb2c139732522e6c027dce86737fbee114bb76abe77df3460f741d1498d5 extends \Twig\Template
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
        // line 53
        echo "
<div class=\"dialog-off-canvas-main-canvas\" data-off-canvas-main-canvas=\"\">
\t<div class=\"container-fluid\">
\t\t<div class=\"psBody\">
\t\t\t<div class=\"no-gutters banner-row row\">
\t\t\t\t<div class=\"col-12 psNewBanner no-gutters \">
\t\t\t\t\t<div class=\"psNewBanner_overlay no-gutters \">
\t\t\t\t\t\t<div class=\"psNewBanner_left_box\">

\t\t\t\t\t\t\t<div class=\"psNewBanner_left_box_inner\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 63
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
        echo "\" alt=\"MYPSUP Home\">
\t\t\t\t\t\t\t\t\t<div class=\"psNewBanner_left_box_inner_top\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 65
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/PSUP-txt.png\"/>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"psNewBanner_left_box_inner_bottom\">
\t\t\t\t\t\t\t\t\t<div class=\"psBannerBottomIcons_btm\">
\t\t\t\t\t\t\t\t\t\t<a href=\"http://www.acp.int/node\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"link_apc\"></span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://ec.europa.eu/commission/index_en\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"link_euro\"></span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://unhabitat.org/\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"link_habitat\"></span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"psNewBanner_left_box_nav_button\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarContent\" aria-controls=\"navbars\" aria-expanded=\"false\" aria-label=\"Toggle navigation\" class=\"navbar-toggler\">
\t\t\t\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"psNewBanner_right_box\">
\t\t\t\t\t\t\t<div class=\"psNewBanner_right_box_top\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"psNewBanner_right_box_inner\">
\t\t\t\t\t\t\t\t\t<!-- <div class=\"psBannerTopMenu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFAQ  |  CONTACT  |  NEWSLETTER  |  FRANCAIS
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>  -->
\t\t\t\t\t\t\t\t\t<div class=\"covid-19-button\">
\t\t\t\t\t\t\t\t\t\t<a class=\"covid-19\" href=\"https://www.mypsup.org/covid-19/\" alt=\"COVID-19 Response\"></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"psBannerTopMenu\">

\t\t\t\t\t\t\t\t\t\t<div class=\"links-and-buttons\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"psBannerContact\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.mypsup.org/contuct_us\">CONTACT
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"psBannerNewsLetter\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/library_files/downloads/Newsletters/PSUP_Newsletter_-_April_2021.pdf\">
\t\t\t\t\t\t\t\t\t\t\t\t\tNEWSLETTER
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"psBannerIcons\">
\t\t\t\t\t\t\t\t\t\t<a class=\"e-learning\" href=\"https://elearning.mypsup.org/home\" alt=\"e-learning\"></a>
\t\t\t\t\t\t\t\t\t\t<a class=\"facebook\" href=\"https://www.facebook.com/UNHABITAT/\" alt=\"facebook\"></a>
\t\t\t\t\t\t\t\t\t\t<a class=\"twitter\" href=\"https://twitter.com/UNHABITAT\" alt=\"Twitter\"></a>
\t\t\t\t\t\t\t\t\t\t<a class=\"Linkedin\" href=\"https://ke.linkedin.com/company/un-habitat-united-nation-human-settlements-programme-\" alt=\"Linkedin\"></a>
\t\t\t\t\t\t\t\t\t\t<a class=\"Instagram\" href=\"https://www.instagram.com/unhabitat/\" alt=\"Instagram\"></a>
\t\t\t\t\t\t\t\t\t\t<a class=\"youtube\" href=\"https://www.youtube.com/channel/UCxkn7WqOdNdNB3AfG65NQ_A\" alt=\"Youtube\"></a>
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"psNewBanner_right_box_bottom\">
\t\t\t\t\t\t\t\t<div class=\"psNewBanner_right_box_bottom_icon\">
\t\t\t\t\t\t\t\t\t<img class=\"b-lazy\" src=\"themes/un_habitat_theme/images/PSUP-Header-building.png\" alt=\"PSUP\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div class=\"res-nav-container mt-3 mb-3 \" id=\"top_menu\">
\t\t\t\t<div class=\"row h-10\">
\t\t\t\t\t<div class=\"res-nav-col col-12 col-xl-10 pl-0 pl-xl-5\">
\t\t\t\t\t\t<nav class=\"res-navbar navbar navbar-expand-lg navbar-light py-0 shadow-sm \">
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t";
        // line 150
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_menu", [])), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"no-gutters row\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\" style=\"padding-top: 50px\">
\t\t\t\t\t\t\t";
        // line 161
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t

\t\t\t<footer class=\"page-footer mt-sm-3\">
\t\t\t\t<div class=\"container-fluid text-center pt-md-5\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-4 mt-md-0 mt-4 text-md-left ml-md-4\">
\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t<a style=\"width: 100%;\" href=\"https://unhabitat.org\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 page-footer_ctr_left_ctr_top\"></div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"col-md-12 page-footer_ctr_left_text pt-md-5 pl-md-1 ml-md-1\">
\t\t\t\t\t\t\t\t\t<a href=\"https://unhabitat.org/topic/slum-upgrading\">www.unhabitat.org/psup</a>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\tEmail: unhabitat-psup@un.org<br><br>
\t\t\t\t\t\t\t\t\tMs Kerstin Sommer<br>
\t\t\t\t\t\t\t\t\tSlum Upgrading Unit Leader,<br>
\t\t\t\t\t\t\t\t\tProject Leader PSUP<br>
\t\t\t\t\t\t\t\t\tkerstin.sommer@un.org
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<hr class=\"clearfix d-md-none pb-3\">
\t\t\t\t\t\t<div class=\"col-3 mt-md-0 mt-4 text-md-left page-footer_ctr-center\">
\t\t\t\t\t\t\t<h3 class=\"mt-5\" style=\"z-index: 1;\">Links</h3>
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<a class=\"footer_link_apc\" href=\"http://www.acp.int\" alt=\"apc\" style=\"margin-right: 20px;\"></a>
\t\t\t\t\t\t\t<a class=\"footer_link_euro\" href=\"https://ec.europa.eu/commission/index_en\" alt=\"Habitat\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-4 mt-md-0 mt-4 page-footer_ctr-right\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12 mt-5 page-footer_ctr-right_icons\">
\t\t\t\t\t\t\t\t\t<a class=\"e-learning_footer\" href=\"https://elearning.mypsup.org/home\" alt=\"e-learning\"></a>
\t\t\t\t\t\t\t\t\t<a class=\"facebook\" href=\"https://www.facebook.com/UNHABITAT/\" alt=\"facebook\"></a>
\t\t\t\t\t\t\t\t\t<a class=\"twitter\" href=\"https://twitter.com/UNHABITAT\" alt=\"Twitter\"></a>
\t\t\t\t\t\t\t\t\t<a class=\"Linkedin\" href=\"https://ke.linkedin.com/company/un-habitat-united-nation-human-settlements-programme-\" alt=\"Linkedin\"></a>
\t\t\t\t\t\t\t\t\t<a class=\"Instagram\" href=\"https://www.instagram.com/unhabitat/\" alt=\"Instagram\"></a>
\t\t\t\t\t\t\t\t\t<a class=\"youtube\" href=\"https://www.youtube.com/channel/UCxkn7WqOdNdNB3AfG65NQ_A\" alt=\"Youtube\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12 mt-sm-5 page-footer_ctr-right_news\">
\t\t\t\t\t\t\t\t\tSign up to our newsletter
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"page-footer_ctr-right_newsletter\">

\t\t\t\t\t\t\t\t\t\t<a href=\"/library_files/downloads//Newsletters/PSUP_Newsletter_-_April_2021.pdf\" target=\"_blank\" alt=\"PSUP Newsletter April 2021\">April 2021 Newsletter</a><br>
\t\t\t\t\t\t\t\t\t\t<a href=\"/library_files/downloads//Newsletters/PSUP_Newsletter_-_December_2020-2.pdf\" target=\"_blank\" alt=\"PSUP Newsletter December 2020\">December 2020 Newsletter</a><br>
\t\t\t\t\t\t\t\t\t\t<a href=\"/library_files/downloads/PSUP_Newsletter_September_2020.pdf\" target=\"_blank\" alt=\"PSUP Newsletter September 2020\">September 2020 Newsletter</a><br>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.mypsup.org/sites/default/files/pdf/PSUP_Newsletter_May_2020.pdf\" target=\"_blank\" alt=\"PSUP Newsletter May 2020\">May 2020 Newsletter</a><br>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.mypsup.org/sites/default/files/pdf/PSUP_Newsletter_December_2019.pdf\" target=\"_blank\" alt=\"PSUP Newsletter December 2019\">December 2019 Newsletter</a><br>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.mypsup.org/sites/default/files/pdf/PSUP_Newsletter_September_2019.pdf\" target=\"_blank\" alt=\"PSUP Newsletter September 2019\">September 2019 Newsletter</a><br>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.mypsup.org/sites/default/files/pdf/PSUP_Newsletter_July_2019.pdf\" target=\"_blank\" alt=\"PSUP Newsletter July 2019\">July 2019 Newsletter</a><br>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.mypsup.org/sites/default/files/pdf/PSUP_Newsletter_February_2019.pdf\" target=\"_blank\" alt=\"PSUP Newsletter February 2019\">February 2019 Newsletter</a><br>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mt-md-5 footer-copyright text-sm-center py-3\">
\t\t\t\t\t<span class=\"h4\">Copyright © 2020 UN-Habitat | unhabitat-info@un.org</span>
\t\t\t\t</div>
\t\t\t</footer>
\t\t</div>

";
    }

    public function getTemplateName()
    {
        return "themes/un_habitat_theme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 161,  137 => 150,  49 => 65,  44 => 63,  32 => 53,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/un_habitat_theme/templates/page.html.twig", "D:\\drupal\\mypsup\\web\\themes\\un_habitat_theme\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 65];
        static $functions = ["path" => 63];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['path']
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
