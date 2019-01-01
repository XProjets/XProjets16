<?php

/* JuniorSiteinterneBundle:Mails:mail-rh-inscription.html.twig */
class __TwigTemplate_ced6245e80f82e45ec6228fa5adeb9ec7cfce63f1d05b1afc5508ffed67dfd07 extends Twig_Template
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
Un nouveau chef de projet ou intervenant vient d'être ajouté à une mission. Il s'agit de ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "lastName", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "). Un mail lui a été envoyé avec les instructions pour s'inscrire.";
    }

    public function getTemplateName()
    {
        return "JuniorSiteinterneBundle:Mails:mail-rh-inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
