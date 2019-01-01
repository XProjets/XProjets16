<?php

/* JuniorSiteinterneBundle:Siteinterne:competences.html.twig */
class __TwigTemplate_b908cdbd0b91a0f06322ffd1077f5bfc5e2ec6d768fb051f22d6fc0afcaf23c5 extends Twig_Template
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

    // line 6
    public function block_feuilleStyleAlternative($context, array $blocks = array())
    {
        // line 7
        echo "\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/Siteinterne/css/carouseladditionnel.css"), "html", null, true);
        echo "\">
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "\t\t\t<section class=\"row\">

";
        // line 14
        echo twig_include($this->env, $context, "JuniorSiteinterneBundle:Siteinterne:sousmenumissions.html.twig");
        echo "
\t\t\t\t<div id=\"content\" class=\"col-md-4 col-md-offset-1\">
\t\t\t\t\t<h1>Les compétences</h1>
\t\t\t\t\t<ul>
\t\t\t\t\t";
        // line 18
        if ((isset($context["listeCompetences"]) ? $context["listeCompetences"] : null)) {
            // line 19
            echo "\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeCompetences"]) ? $context["listeCompetences"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
                // line 20
                echo "\t\t\t\t\t\t\t<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comp"], "nom", array()), "html", null, true);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_missions_competences", array("id" => $this->getAttribute($context["comp"], "id", array()), "suppr" => "supprimer")), "html", null, true);
                echo "\"><button class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-remove\"></span></button></a></li><br>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-md-offset-1 col-md-4\">
\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t<h2>Nouvelle compétence</h2>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

\t\t\t\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Nom de la compétence"));
        echo "

\t\t\t\t\t\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'errors');
        echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-sm-offset-4\">
\t\t\t\t\t\t\t\t";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

\t\t  
\t\t\t\t\t\t";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
";
    }

    public function getTemplateName()
    {
        return "JuniorSiteinterneBundle:Siteinterne:competences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 55,  133 => 52,  125 => 47,  116 => 41,  110 => 38,  105 => 36,  99 => 33,  94 => 31,  84 => 23,  81 => 22,  70 => 20,  65 => 19,  63 => 18,  56 => 14,  52 => 12,  49 => 11,  42 => 7,  39 => 6,  33 => 4,  30 => 3,);
    }
}
