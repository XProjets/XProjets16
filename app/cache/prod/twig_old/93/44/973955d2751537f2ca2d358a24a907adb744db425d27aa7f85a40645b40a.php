<?php

/* JuniorSiteinterneBundle:Siteinterne:document.html.twig */
class __TwigTemplate_9344973955d2751537f2ca2d358a24a907adb744db425d27aa7f85a40645b40a extends Twig_Template
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
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "mission", array()), "nom", array()), "html", null, true);
        echo " - ";
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
\t\t\t\t<div class=\"col-md-1\">
\t\t\t\t\t<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_mission", array("id" => $this->getAttribute($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "mission", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-xs btn-default\" style=\"margin-top:30px;\">&laquo; Retour<br/>à la<br/>mission</a>
\t\t\t\t</div>
\t\t\t\t<div id=\"content\" class=\"col-md-10\">
\t\t\t\t\t<h2>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "typeDeDocument", array()), "html", null, true);
        echo " de la mission \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "mission", array()), "nom", array()), "html", null, true);
        echo "\" </h2>
\t\t\t\t\t<span class=\"light\">Ajouté le ";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "ajouteLe", array()), "d/m/Y à H\\hi"), "html", null, true);
        if ($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "ajoutePar", array())) {
            echo " par ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "ajoutePar", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "ajoutePar", array()), "lastName", array()), "html", null, true);
        }
        echo ".</span>
\t\t\t\t\t<hr>
\t\t\t\t\t<br />
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"well\"><h3>Télécharger</h3>
\t\t\t\t\t";
        // line 23
        if ($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "upUneFois", array())) {
            // line 24
            echo "\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "webPath", array())), "html", null, true);
            echo "\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-download-alt\"></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "typeDeDocument", array()), "html", null, true);
            echo "</a><br />
\t\t\t\t\t";
        } else {
            // line 26
            echo "\t\t\t\t\t\tLe document n'est pas encore en ligne.<br />
\t\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t\t\t";
        if (((((((((($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "dirName", array()) == "propale") || ($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "dirName", array()) == "conventionclient")) || ($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "dirName", array()) == "recapitulatifmission")) || ($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "dirName", array()) == "rapportpedagogique")) || ($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "dirName", array()) == "pvri")) || ($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "dirName", array()) == "pvrf")) || ($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "dirName", array()) == "avenantaurm")) || ($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "dirName", array()) == "avenantalacc")) || ($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "dirName", array()) == "avenantruptureconv"))) {
            // line 29
            echo "\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_docvierge", array("id" => $this->getAttribute($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "mission", array()), "id", array()), "typedoc" => $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "dirName", array()), "iddoc" => $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-download-alt\"></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "typeDeDocument", array()), "html", null, true);
            echo " (vierge)</a><br />
\t\t\t\t\t\t";
        }
        // line 31
        echo "\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 32
        if ((((isset($context["statut"]) ? $context["statut"] : null) == "polemission") || (((isset($context["statut"]) ? $context["statut"] : null) == "cdp") && (!$this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "frozen", array()))))) {
            // line 33
            echo "\t\t\t\t\t<div class=\"well\"><h3>Ajouter</h3>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-offset-1 col-md-10\">
\t\t\t\t\t\t\t\t";
            // line 36
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
            echo "

\t\t\t\t\t\t\t\t";
            // line 38
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : null), 'errors');
            echo "

\t\t\t\t\t\t\t\t";
            // line 40
            if ((((isset($context["statut"]) ? $context["statut"] : null) == "cdp") || ((isset($context["statut"]) ? $context["statut"] : null) == "polemission"))) {
                // line 41
                echo "\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
                // line 42
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "file", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Fichier"));
                echo "

\t\t\t\t\t\t\t\t\t";
                // line 44
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "file", array()), 'errors');
                echo "

\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t";
                // line 47
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "file", array()), 'widget', array("attr" => array("class" => "form-control")));
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
                // line 52
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "signeLe", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Signé le (attention, la date inscrite doit être la même que sur le document)"));
                echo "

\t\t\t\t\t\t\t\t\t<span style=\"color:red\">";
                // line 54
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "signeLe", array()), 'errors');
                echo "</span>

\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t";
                // line 57
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "signeLe", array()), 'widget');
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 61
            echo "\t\t\t\t\t\t\t\t";
            if (((isset($context["statut"]) ? $context["statut"] : null) == "polemission")) {
                // line 62
                echo "\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
                // line 63
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "frozen", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Valider le fichier"));
                echo "

\t\t\t\t\t\t\t\t\t";
                // line 65
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "frozen", array()), 'errors');
                echo "

\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t";
                // line 68
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "frozen", array()), 'widget');
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 72
            echo "\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-sm-offset-4\">
\t\t\t\t\t\t\t\t\t\t";
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t";
            // line 79
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : null), 'rest');
            echo "

\t\t\t\t  
\t\t\t\t\t\t\t\t";
            // line 82
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : null), 'form_end');
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 87
        echo "\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t\t<h3>Remarques</h3>
\t\t\t\t\t\t\t\t";
        // line 92
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) ? $context["commentaires"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 93
            echo "\t\t\t\t\t\t\t\t<span style=\"font-weight:bold;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "ajoutePar", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "ajoutePar", array()), "lastName", array()), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["com"], "contenu", array()), "html", null, true);
            echo "<br/><span class=\"light\">  ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["com"], "date", array()), "j M Y, H\\hi"), "html", null, true);
            echo "</span><br/><br/>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t";
        // line 97
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form1"]) ? $context["form1"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

\t\t\t\t\t\t\t\t";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form1"]) ? $context["form1"] : null), 'errors');
        echo "

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "contenu", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Commentaire (un email sera envoyé au chef de projet et au référent mission)"));
        echo "

\t\t\t\t\t\t\t\t\t";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "contenu", array()), 'errors');
        echo "

\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "contenu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-sm-offset-4\">
\t\t\t\t\t\t\t\t\t\t";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form1"]) ? $context["form1"] : null), 'rest');
        echo "

\t\t\t\t  
\t\t\t\t\t\t\t\t";
        // line 121
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form1"]) ? $context["form1"] : null), 'form_end');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</section>
";
    }

    public function getTemplateName()
    {
        return "JuniorSiteinterneBundle:Siteinterne:document.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 121,  291 => 118,  283 => 113,  274 => 107,  268 => 104,  263 => 102,  257 => 99,  252 => 97,  248 => 95,  233 => 93,  229 => 92,  222 => 87,  214 => 82,  208 => 79,  200 => 74,  196 => 72,  189 => 68,  183 => 65,  178 => 63,  175 => 62,  172 => 61,  165 => 57,  159 => 54,  154 => 52,  146 => 47,  140 => 44,  135 => 42,  132 => 41,  130 => 40,  125 => 38,  120 => 36,  115 => 33,  113 => 32,  110 => 31,  102 => 29,  99 => 28,  95 => 26,  87 => 24,  85 => 23,  71 => 18,  65 => 17,  59 => 14,  55 => 12,  52 => 11,  45 => 7,  42 => 6,  33 => 4,  30 => 3,);
    }
}
