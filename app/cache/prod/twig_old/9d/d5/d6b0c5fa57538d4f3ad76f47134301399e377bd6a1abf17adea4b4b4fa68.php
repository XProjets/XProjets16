<?php

/* JuniorSiteBundle:Site:index.html.twig */
class __TwigTemplate_9dd5d6b0c5fa57538d4f3ad76f47134301399e377bd6a1abf17adea4b4b4fa68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->env->loadTemplate("JuniorSiteBundle:Site:home.html.twig")->display($context);
        // line 5
        echo "\t";
        $this->env->loadTemplate("JuniorSiteBundle:Site:mot-president.html.twig")->display($context);
        // line 6
        echo "\t";
        $this->env->loadTemplate("JuniorSiteBundle:Site:presentation.html.twig")->display($context);
        // line 7
        echo "\t";
        $this->env->loadTemplate("JuniorSiteBundle:Site:activites.html.twig")->display($context);
        // line 8
        echo "\t";
        $this->env->loadTemplate("JuniorSiteBundle:Site:references.html.twig")->display($context);
        // line 9
        echo "\t";
        $this->env->loadTemplate("JuniorSiteBundle:Site:contact.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "JuniorSiteBundle:Site:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  43 => 8,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
