<?php

/* ::header.html.twig */
class __TwigTemplate_709063ba8c6bbbab0090e0d2108f86c4eac12d81c4ffe0b4a94a267f7e0f3038 extends Twig_Template
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
        echo "<header>
\t<!--start: Container -->
\t<div class=\"container\">
\t\t\t\t\t\t
\t\t<!--start: Row -->
\t\t<div class=\"row-fluid\">
\t\t\t\t\t
\t\t\t<!--start: Navigation -->
\t\t\t<div class=\"navigation\"> 
\t\t\t\t
\t\t\t\t<div class=\"navbar navbar-fixed-top\">
\t\t    \t\t<div class=\"navbar-inner\">
\t\t          \t\t<a class=\"btn btn-navbar btnOverlay\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
\t\t            \t\t";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu"), "html", null, true);
        echo "
\t\t          \t\t</a>
\t\t          \t\t<div class=\"nav-collapse collapse\">
\t\t            \t\t<ul class=\"nav\">
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"home\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Accueil"), "html", null, true);
        echo "</a></li>
\t\t\t              \t\t<li><a href=\"#\" class=\"services\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Mot du président"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"pricing\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Présentation"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"portfolio\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nos activités"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"about\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nos références"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"contact\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contact"), "html", null, true);
        echo "</a></li>
\t\t\t           \t\t</ul>
\t\t\t       \t\t</div>
\t\t\t       \t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>\t
\t\t\t<!--end: Navigation -->\t
\t\t\t\t\t
\t\t</div>
\t\t<!--end: Row -->
\t\t\t
\t</div>
\t<!--end: Container-->\t\t\t
\t\t\t
</header>
";
    }

    public function getTemplateName()
    {
        return "::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 23,  57 => 22,  53 => 21,  49 => 20,  45 => 19,  41 => 18,  34 => 14,  19 => 1,);
    }
}
