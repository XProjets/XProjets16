<?php

/* JuniorSiteBundle:Site:formulaire-contact.html.twig */
class __TwigTemplate_1cc1a2fc21e23d3003b9f6e6dccc77dab236319fc93cd31546f2f2d6872011f9 extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

\t<div>
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("tabindex" => "4", "class" => "span12", "id" => "email")));
        echo "  
    </div>
\t
\t<div>
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "societe", array()), 'errors');
        echo "
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "societe", array()), 'widget', array("attr" => array("tabindex" => "2", "class" => "span12", "id" => "societe")));
        echo "  
    </div>

\t<div>
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'errors');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'widget', array("attr" => array("tabindex" => "3", "class" => "span12", "id" => "nom")));
        echo "  
    </div>
\t
\t<div>
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'errors');
        echo "
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'widget', array("attr" => array("tabindex" => "3", "class" => "input-xlarge span12", "id" => "message", "rows" => "7")));
        echo "  
    </div>
\t
\t
\t<div class=\"actions\">
    <button tabindex=\"3\" type=\"submit\" class=\"btn btn-succes btn-large\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Envoyer un message"), "html", null, true);
        echo "</button>
\t</div>

";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "JuniorSiteBundle:Site:formulaire-contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 29,  74 => 26,  66 => 21,  62 => 20,  55 => 16,  51 => 15,  44 => 11,  40 => 10,  33 => 6,  29 => 5,  23 => 2,  19 => 1,);
    }
}
