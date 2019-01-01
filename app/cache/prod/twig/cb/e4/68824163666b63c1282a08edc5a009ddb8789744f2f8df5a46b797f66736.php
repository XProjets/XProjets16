<?php

/* JuniorSiteBundle:Site:contact.html.twig */
class __TwigTemplate_cbe468824163666b63c1282a08edc5a009ddb8789744f2f8df5a46b797f66736 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "\t<div id=\"mapBg\"></div>
\t<div id=\"contact\" class=\"color blue\">
\t\t
\t\t<div class=\"container\">

\t\t\t<div class=\"wrapper span12\">

\t\t\t<div id=\"page-title\">

\t\t\t\t<div id=\"page-title-inner\">

\t\t\t\t\t\t<h2><span>Contact</span></h2>

\t\t\t\t</div>\t

\t\t\t</div>
\t\t\t
\t\t\t<div class=\"row-fluid\">\t\t
\t\t\t\t
\t\t\t\t<div class=\"span12\">
\t\t\t\t\t
\t\t\t\t\t<p style=\"text-align : center\">
\t\t\t\t\t<b>XProjets</b> •
\t\t\t\t\tEcole polytechnique •
\t\t\t\t\tRoute de Saclay •
\t\t\t\t\t91120 Palaiseau •
\t\t\t\t\tFRANCE <br />
\t\t\t\t\t<!--strong>Phone</strong>: 06 36 96 24 11 •-->
                    <strong>Phone</strong>: 06 77 09 80 94 •>
\t\t\t\t\t<strong>Phone bis</strong> : 01 69 33 27 22 •
\t\t\t\t\t<strong>Fax</strong>:  01 69 33 27 23 •
\t\t\t\t\t<strong>Email</strong>: contact@xprojets.com\t
\t\t\t\t\t</p>
\t\t\t\t
\t\t\t\t</div>\t
\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t<hr class=\"clean\">
\t\t\t
\t\t\t<!--div class=\"row-fluid\">\t\t
\t\t\t
\t\t\t\t<div class=\"span6\">
\t\t\t\t\t
\t\t\t\t\t<div id=\"contact-form\">
\t
\t\t\t\t\t";
        // line 47
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("JuniorSiteBundle:Site:mail"));
        echo "

\t\t\t\t\t</div>
\t\t\t\t\t

\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"span6\">
\t\t\t\t\t
\t\t\t\t\t<div id=\"googlemaps\">
\t\t\t\t\t\t<div id=\"map\" class=\"google-map google-map-full\"></div>
\t\t\t\t\t</div>

\t\t\t\t
\t\t\t\t</div>\t
\t\t\t
\t\t\t</div-->

\t\t\t</div>
\t\t
\t\t</div>
\t\t
\t</div>
";
    }

    public function getTemplateName()
    {
        return "JuniorSiteBundle:Site:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 47,  19 => 1,);
    }
}
