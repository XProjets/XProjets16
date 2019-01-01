<?php

/* JuniorSiteinterneBundle:Siteinterne:phases.html.twig */
class __TwigTemplate_2377861aa6c7e3a6bf5523233252c5eb874ccc8b66f078e8fbf27b984d1f88d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JuniorSiteinterneBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'feuilleStyleAlternative' => array($this, 'block_feuilleStyleAlternative'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JuniorSiteinterneBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_feuilleStyleAlternative($context, array $blocks = array())
    {
        // line 8
        echo "\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/Siteinterne/css/carouseladditionnel.css"), "html", null, true);
        echo "\">
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "\t\t\t<section class=\"row\">
\t\t\t\t<div class=\"col-md-1\">
\t\t\t\t\t<a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_mission", array("id" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-xs btn-default\" style=\"margin-top:30px;\">&laquo; Retour<br/>à la<br/>mission</a>
\t\t\t\t</div>
\t\t\t\t<div id=\"content\" class=\"col-md-10\">
\t\t\t<div class=\"well\">
\t\t\t\t<h2>Modifier les phases</h2>
\t\t\t\t<br>
\t\t\t\t<ul>
\t\t\t\t";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "phases", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 23
            echo "\t\t\t\t\t<li>Phase ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "idPhase", array()), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nbJeh", array()), "html", null, true);
            echo " JEH - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nom", array()), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_modification_mission", array("idmission" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "id", array()), "modifPhases" => "suppr", "idphase" => $this->getAttribute($context["p"], "idPhase", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-remove\"></span></button></a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t\t\t</ul>
\t\t\t\t<div class=\"row\">
\t\t\t\t  <form action=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_modification_mission", array("idmission" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "id", array()), "modifPhases" => "ok")), "html", null, true);
        echo "\" method=\"post\" class=\"form-horizontal col-md-6\">
\t\t\t\t\tNuméro : <input class=\"input-md form-control\" type=\"text\" name=\"id_phase\" value=\"\" /><br/>
\t\t\t\t\tNom : <input class=\"input-md form-control\" type=\"text\" name=\"nom\" value=\"\" /><br/>
\t\t\t\t\tNombre de JEH : <input class=\"input-md form-control\" type=\"text\" name=\"nb_jeh\" value=\"\" /><br/>
\t\t\t\t\t<br />
\t\t\t\t\t<input class=\"btn btn-primary btn-sm\" type=\"submit\" value=\"Ajouter\" />
\t\t\t\t  </form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

";
    }

    public function getTemplateName()
    {
        return "JuniorSiteinterneBundle:Siteinterne:phases.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 27,  85 => 25,  70 => 23,  66 => 22,  56 => 15,  52 => 13,  49 => 12,  42 => 8,  39 => 7,  33 => 4,  30 => 3,);
    }
}
