<?php

/* JuniorSiteinterneBundle:Mails:mail-referent-mission-ajoutee.html.twig */
class __TwigTemplate_b3240b8e6ded63d9faa98820c329ee6c49b7104e1054ede59052734bf3200c04 extends Twig_Template
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
        echo "Une nouvelle mission vient d'être ajoutée et tu as été inscrit(e) en tant que référent mission.

Lien mission : 
Nom : ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "nom", array()), "html", null, true);
        echo "
Description : ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "descriptif", array()), "html", null, true);
    }

    public function getTemplateName()
    {
        return "JuniorSiteinterneBundle:Mails:mail-referent-mission-ajoutee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  24 => 4,  19 => 1,);
    }
}
