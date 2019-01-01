<?php

/* JuniorSiteinterneBundle:Mails:mail-cdp-docajouted.html.twig */
class __TwigTemplate_3e8d81a976857a9541e7039a6aa78d2da7c5462c25fbacdc15a50b0faf2ac969 extends Twig_Template
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
Un nouveau document vient d'être ajouté.
Mission : ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "nom", array()), "html", null, true);
        echo "
Document : ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "typeDeDocument", array()), "html", null, true);
    }

    public function getTemplateName()
    {
        return "JuniorSiteinterneBundle:Mails:mail-cdp-docajouted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }
}
