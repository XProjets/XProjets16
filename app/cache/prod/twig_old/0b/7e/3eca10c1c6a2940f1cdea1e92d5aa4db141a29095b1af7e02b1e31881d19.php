<?php

/* JuniorSiteinterneBundle:Mails:mail-cdp-remarqueajoutee.html.twig */
class __TwigTemplate_0b7e3eca10c1c6a2940f1cdea1e92d5aa4db141a29095b1af7e02b1e31881d19 extends Twig_Template
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
        echo "Bonjour,
Une nouvelle remarque a été ajoutée à propos du document \"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "typeDeDocument", array()), "html", null, true);
        echo "\" de la mission \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "nom", array()), "html", null, true);
        echo "\" par ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["com"]) ? $context["com"] : null), "ajoutePar", array()), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["com"]) ? $context["com"] : null), "ajoutePar", array()), "lastName", array()), "html", null, true);
        echo "  :

\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["com"]) ? $context["com"] : null), "contenu", array()), "html", null, true);
        echo "\"";
    }

    public function getTemplateName()
    {
        return "JuniorSiteinterneBundle:Mails:mail-cdp-remarqueajoutee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  22 => 2,  19 => 1,);
    }
}
