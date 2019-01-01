<?php

/* JuniorSiteBundle:Site:mail-contact-client.html.twig */
class __TwigTemplate_5ebdefa1f3f37d0a6bf9a72dca32286bc0b167ad9eb606a1acfe2e246df42d18 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Bonjour madame/monsieur"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : null), "html", null, true);
        echo "

";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Votre message"), "html", null, true);
        echo " : '";
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "' ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("a bien été pris en compte"), "html", null, true);
        echo ".

";
        // line 5
        echo $this->env->getExtension('translator')->getTranslator()->trans("L'équipe XProjets se fera un plaisir de répondre à votre demande dans les plus brefs délais", array(), "messages");
        echo ".

";
        // line 7
        echo "Bien cordialement";
        echo ",
";
        // line 8
        echo "L'équipe XProjets";
        echo "
";
        // line 9
        echo "contact@xprojets.com";
    }

    public function getTemplateName()
    {
        return "JuniorSiteBundle:Site:mail-contact-client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  44 => 8,  40 => 7,  35 => 5,  26 => 3,  19 => 1,);
    }
}
