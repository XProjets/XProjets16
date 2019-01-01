<?php

/* JuniorSiteBundle:Site:mail-contact-xprojets.html.twig */
class __TwigTemplate_e73cc522b4439b157e1432749ac59848f0979f82bb1d1afeddb9291e6ce30c41 extends Twig_Template
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
        echo "Contact client

Mail du client : ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo " 
Société :  ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["societe"]) ? $context["societe"] : null), "html", null, true);
        echo " 
Nom :  ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : null), "html", null, true);
        echo "

";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "JuniorSiteBundle:Site:mail-contact-xprojets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
