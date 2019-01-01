<?php

/* JuniorSiteinterneBundle:Mails:mail-cdp-affectedtomission.html.twig */
class __TwigTemplate_874670e20d045c3e6d85a76651412a547068e929747df7bbb5661c344a649dab extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "firstName", array()), "html", null, true);
        echo ",

Tu es maintenant chef de projet de la mission ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "nom", array()), "html", null, true);
        echo ".

Je suis ton référent mission. Pour que tu puisses contacter ton client dans de bonnes conditions je voudrais savoir ce que tu connais d’XProjets et de son fonctionnement.

Appelle moi, ou envoie moi un mail pour me dire quand on peut se rencontrer, le plus rapidement possible étant le mieux, ça sera rapide. 

Garde en tête que plus rapidement tu seras en contact avec le client plus ta mission a de chances de réussir.

Pour info les prochaines étapes sont :
1/ Si tu ne connais pas la JE : t’expliquer les grandes lignes de son fonctionnement
2/ Si tu n’as jamais été chef de projet : te donner quelques conseils pour contacter le client
Si tu l’as déjà été : quelques rappels ne feront pas de mal !
3/ Te transmettre le mail et/ou mail du client
4/ Si tout se passe bien et que le client est prêt à signer, je t’expliquerai comment faire les papiers officiels

Pour me contacter :
";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "referent", array()), "phone", array()), "html", null, true);
        echo "
";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "referent", array()), "email", array()), "html", null, true);
        echo "

Si tu as des questions n’hésite pas !

Bonne journée

";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "referent", array()), "firstName", array()), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "JuniorSiteinterneBundle:Mails:mail-cdp-affectedtomission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 26,  48 => 20,  44 => 19,  25 => 3,  19 => 1,);
    }
}
