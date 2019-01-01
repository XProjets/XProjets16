<?php

/* JuniorSiteinterneBundle:Mails:mail-referent-nouvellepersonneaffectee.html.twig */
class __TwigTemplate_3ecd76f69a16d9623fb52a9a71d53535a4e4510cabac1802fa7cd98b7d8edc7b extends Twig_Template
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
        echo "Salut ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "referent", array()), "firstName", array()), "html", null, true);
        echo ",

Un ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["statut"]) ? $context["statut"] : null), "html", null, true);
        echo " a été ajouté à la mission \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "nom", array()), "html", null, true);
        echo "\".

Son adresse email :
";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "JuniorSiteinterneBundle:Mails:mail-referent-nouvellepersonneaffectee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  25 => 3,  19 => 1,);
    }
}
