<?php

/* JuniorSiteBundle:Site:home_bis.html.twig */
class __TwigTemplate_0351f6749b1912f970d834f257025f5ce5b36d0b9d0088a58a436cee998f191b extends Twig_Template
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
        echo "﻿<!-- start: 1st Page - Home -->
\t<div id=\"home\">

\t\t<div class=\"demo-1\">

\t        <div id=\"slider\" class=\"sl-slider-wrapper\">

\t\t\t\t<div class=\"sl-slider\">

\t\t\t\t\t<div class=\"sl-slide bg-1\" data-orientation=\"horizontal\" data-slice1-rotation=\"-25\" data-slice2-rotation=\"-25\" data-slice1-scale=\"2\" data-slice2-scale=\"2\">
\t\t\t\t\t\t<div class=\"sl-slide-inner\">
\t\t\t\t\t\t<div class=\"fond_texte_accueil\">
\t\t\t\t\t\t</div>
                            
                            <div class=\"deco\" data-icon=\"\"><img id=\"deco-img-1\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logos/logo-xprojets.png"), "html", null, true);
        echo "\" /></div>
\t\t\t\t\t\t\t<h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Xprojets"), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t<p>";
        // line 18
        echo $this->env->getExtension('translator')->getTranslator()->trans("Nous vous souhaitons la bienvenue sur le site internet de la Junior-Entreprise de l'Ecole polytechnique.", array(), "messages");
        echo "</p><br/>
\t\t\t\t\t\t\t<!-- <cite>";
        // line 19
        echo $this->env->getExtension('translator')->getTranslator()->trans("L'équipe XProjets", array(), "messages");
        echo "</cite> -->
                            
\t\t\t\t\t\t\t</blockquote>
                            
                            
                            
                            
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"sl-slide bg-2\" data-orientation=\"vertical\" data-slice1-rotation=\"10\" data-slice2-rotation=\"-15\" data-slice1-scale=\"1.5\" data-slice2-scale=\"1.5\">
\t\t\t\t\t\t<div class=\"sl-slide-inner\">
\t\t\t\t\t\t<div class=\"fond_texte_accueil\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"deco\" data-icon=\"\"><img id=\"deco-img-2\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logos/logo-X.png"), "html", null, true);
        echo "\" /></div>
\t\t\t\t\t\t\t<h2>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Polytechnique"), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t<p>";
        // line 36
        echo $this->env->getExtension('translator')->getTranslator()->trans("Depuis près de trente ans, les élèves de l'Ecole polytechnique réalisent des missions à forte valeur ajoutée à la fois pour des PME et de grands groupes industriels.", array(), "messages");
        echo "</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"sl-slide bg-3\" data-orientation=\"horizontal\" data-slice1-rotation=\"3\" data-slice2-rotation=\"3\" data-slice1-scale=\"2\" data-slice2-scale=\"1\">
\t\t\t\t\t\t<div class=\"sl-slide-inner\">
\t\t\t\t\t\t<div class=\"fond_texte_accueil\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"deco\" data-icon=\"\"><img id=\"deco-img-3\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logos/logo-sciences.png"), "html", null, true);
        echo "\" /></div>
\t\t\t\t\t\t\t<h2>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Sciences"), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t<p>";
        // line 49
        echo $this->env->getExtension('translator')->getTranslator()->trans("Nos interventions sont réalisées dans la pure tradition de rigueur scientifique propre à notre école. Elles sont donc à forte dominante scientifique et recouvrent tous les domaines de l'ingénierie.", array(), "messages");
        echo "</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- /sl-slider -->

\t\t\t\t<nav id=\"nav-arrows\" class=\"nav-arrows\">
\t\t\t\t\t<span class=\"nav-arrow-prev\">Previous</span>
\t\t\t\t\t<span class=\"nav-arrow-next\">Next</span>
\t\t\t\t</nav>

\t\t\t\t<nav id=\"nav-dots\" class=\"nav-dots\">
\t\t\t\t\t<span class=\"nav-dot-current\"></span>
\t\t\t\t\t<span></span>
\t\t\t\t\t<span></span>
\t\t\t\t</nav>

\t\t\t</div><!-- /slider-wrapper -->

\t    </div>

\t</div>
<!-- end: 1st Page - Home -->
\t
";
    }

    public function getTemplateName()
    {
        return "JuniorSiteBundle:Site:home_bis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 49,  91 => 47,  87 => 46,  74 => 36,  69 => 34,  65 => 33,  48 => 19,  44 => 18,  39 => 16,  35 => 15,  19 => 1,);
    }
}
