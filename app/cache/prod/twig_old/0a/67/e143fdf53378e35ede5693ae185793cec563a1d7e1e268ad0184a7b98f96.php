<?php

/* JuniorSiteinterneBundle:Siteinterne:modif.html.twig */
class __TwigTemplate_0a67e143fdf53378e35ede5693ae185793cec563a1d7e1e268ad0184a7b98f96 extends Twig_Template
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
\t\t\t\t<div id=\"content\" class=\"col-md-10 col-md-offset-1\">
\t\t\t<div class=\"well\">
\t\t\t\t<h2>Modifier la mission</h2>
\t\t\t\t<br>
\t\t\t\t";
        // line 18
        if (((isset($context["formulaire"]) ? $context["formulaire"] : null) == 1)) {
            // line 19
            echo "\t\t\t\t";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form1"]) ? $context["form1"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
            echo "

\t\t\t\t";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form1"]) ? $context["form1"] : null), 'errors');
            echo "

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
            // line 24
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Nom de la mission"));
            echo "

\t\t\t\t\t";
            // line 26
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "nom", array()), 'errors');
            echo "

\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t";
            // line 29
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "appelOffreContactClient", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Statut"));
            echo "

\t\t\t\t\t";
            // line 35
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "appelOffreContactClient", array()), 'errors');
            echo "

\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t";
            // line 38
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "appelOffreContactClient", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
            // line 43
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "categories", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Catégorie(s) (maintenir la touche ctrl enfoncée pour sélectionner plusieurs catégories)"));
            echo "
\t\t\t\t\t";
            // line 44
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "categories", array()), 'errors');
            echo "
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "categories", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
            // line 51
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "competences", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Compétence(s) (maintenir la touche ctrl enfoncée pour sélectionner plusieurs compétences)"));
            echo "
\t\t\t\t\t";
            // line 52
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "competences", array()), 'errors');
            echo "
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t";
            // line 54
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "competences", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
            // line 59
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "descriptif", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Description (visible par tous)"));
            echo "
\t\t\t\t\t";
            // line 60
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "descriptif", array()), 'errors');
            echo "
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t";
            // line 62
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "descriptif", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "client", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Nom du client"));
            echo "
\t\t\t\t\t";
            // line 68
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "client", array()), 'errors');
            echo "
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t";
            // line 70
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "client", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
            // line 75
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "publique", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Visible par tous"));
            echo "
\t\t\t\t\t";
            // line 76
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "publique", array()), 'errors');
            echo "
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t";
            // line 78
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "publique", array()), 'widget');
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
            // line 83
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "montrerClientAuCdp", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Montrer les coordonnées du client au chef de projet"));
            echo "
\t\t\t\t\t";
            // line 84
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "montrerClientAuCdp", array()), 'errors');
            echo "
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t";
            // line 86
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "montrerClientAuCdp", array()), 'widget');
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
            // line 91
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "nbJeh", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Nombre de JEH"));
            echo "
\t\t\t\t\t";
            // line 92
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "nbJeh", array()), 'errors');
            echo "
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t";
            // line 94
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "nbJeh", array()), 'widget');
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
            // line 99
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "tauxTva", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Taux TVA"));
            echo "
\t\t\t\t\t";
            // line 100
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "tauxTva", array()), 'errors');
            echo "
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t";
            // line 102
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "tauxTva", array()), 'widget');
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
            // line 107
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "frais", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Frais"));
            echo "
\t\t\t\t\t";
            // line 108
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "frais", array()), 'errors');
            echo "
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t";
            // line 110
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "frais", array()), 'widget');
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
            // line 115
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "accompte", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Acompte"));
            echo "
\t\t\t\t\t";
            // line 116
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "accompte", array()), 'errors');
            echo "
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t";
            // line 118
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "accompte", array()), 'widget');
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 col-sm-offset-4\">
\t\t\t\t\t\t";
            // line 124
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 127
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form1"]) ? $context["form1"] : null), 'form_end');
            echo "
\t\t\t\t
\t\t\t\t
\t\t\t";
        } elseif (((isset($context["formulaire"]) ? $context["formulaire"] : null) == 2)) {
            // line 131
            echo "\t\t\t
\t\t\t
\t\t\t\t";
            // line 133
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
            echo "

\t\t\t\t";
            // line 135
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : null), 'errors');
            echo "
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
            // line 137
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "dateDebut", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Date de début"));
            echo "
\t\t\t\t\t";
            // line 138
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "dateDebut", array()), 'errors');
            echo "
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t";
            // line 140
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "dateDebut", array()), 'widget');
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
            // line 145
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "nbSemaines", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Délai en nombre de semaines"));
            echo "
\t\t\t\t\t";
            // line 146
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "nbSemaines", array()), 'errors');
            echo "
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t";
            // line 148
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "nbSemaines", array()), 'widget');
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t

\t\t\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 col-sm-offset-4\">
\t\t\t\t\t\t";
            // line 157
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 160
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : null), 'form_end');
            echo "
\t\t\t\t
\t";
        } elseif (((isset($context["formulaire"]) ? $context["formulaire"] : null) == 3)) {
            // line 163
            echo "\t\t\t\t";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form3"]) ? $context["form3"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
            echo "

\t\t\t\t";
            // line 165
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form3"]) ? $context["form3"] : null), 'errors');
            echo "
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
            // line 167
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : null), "raisonEchec", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Raison de l'échec"));
            echo "
\t\t\t\t\t";
            // line 168
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : null), "raisonEchec", array()), 'errors');
            echo "
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t";
            // line 170
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : null), "raisonEchec", array()), 'widget');
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 col-sm-offset-4\">
\t\t\t\t\t\t";
            // line 176
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form3"]) ? $context["form3"] : null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
  
\t\t\t\t";
            // line 180
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form3"]) ? $context["form3"] : null), 'form_end');
            echo "
\t";
        } elseif (((isset($context["formulaire"]) ? $context["formulaire"] : null) == 4)) {
            // line 182
            echo "\t\t\t\t";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form4"]) ? $context["form4"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
            echo "

\t\t\t\t";
            // line 184
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form4"]) ? $context["form4"] : null), 'errors');
            echo "
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
            // line 186
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form4"]) ? $context["form4"] : null), "detailAvancement", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Détail de l'avancement, à destination du client"));
            echo "
\t\t\t\t\t";
            // line 187
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form4"]) ? $context["form4"] : null), "detailAvancement", array()), 'errors');
            echo "
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t";
            // line 189
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form4"]) ? $context["form4"] : null), "detailAvancement", array()), 'widget');
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 col-sm-offset-4\">
\t\t\t\t\t\t";
            // line 195
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form4"]) ? $context["form4"] : null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
  
\t\t\t\t";
            // line 199
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form4"]) ? $context["form4"] : null), 'form_end');
            echo "
\t";
        }
        // line 201
        echo "\t\t\t</div>
\t\t</div>
\t</section>

";
    }

    public function getTemplateName()
    {
        return "JuniorSiteinterneBundle:Siteinterne:modif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  440 => 201,  435 => 199,  428 => 195,  419 => 189,  414 => 187,  410 => 186,  405 => 184,  399 => 182,  394 => 180,  387 => 176,  378 => 170,  373 => 168,  369 => 167,  364 => 165,  358 => 163,  352 => 160,  346 => 157,  334 => 148,  329 => 146,  325 => 145,  317 => 140,  312 => 138,  308 => 137,  303 => 135,  298 => 133,  294 => 131,  287 => 127,  281 => 124,  272 => 118,  267 => 116,  263 => 115,  255 => 110,  250 => 108,  246 => 107,  238 => 102,  233 => 100,  229 => 99,  221 => 94,  216 => 92,  212 => 91,  204 => 86,  199 => 84,  195 => 83,  187 => 78,  182 => 76,  178 => 75,  170 => 70,  165 => 68,  161 => 67,  153 => 62,  148 => 60,  144 => 59,  136 => 54,  131 => 52,  127 => 51,  119 => 46,  114 => 44,  110 => 43,  102 => 38,  96 => 35,  91 => 33,  84 => 29,  78 => 26,  73 => 24,  67 => 21,  61 => 19,  59 => 18,  52 => 13,  49 => 12,  42 => 8,  39 => 7,  33 => 4,  30 => 3,);
    }
}
