<?php

/* JuniorSiteinterneBundle:Siteinterne:add.html.twig */
class __TwigTemplate_b4fc282c89a98fcd88021c5ce1ff51c37a8d2ef61050e6136d9205d5e7816049 extends Twig_Template
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

";
        // line 15
        echo twig_include($this->env, $context, "JuniorSiteinterneBundle:Siteinterne:sousmenumissions.html.twig");
        echo "
\t\t\t\t<div id=\"content\" class=\"col-md-9 col-md-offset-1\">
\t\t\t<div class=\"well\">
\t\t\t\t<h2>Nouvelle mission</h2>
\t\t\t\t<br>
\t\t\t\t<br>
\t\t\t\t<button id=\"btn_nv_client\" class=\"btn btn-primary\">Mission avec nouveau client</button>
\t\t\t\t<button id=\"btn_vx_client\" class=\"btn btn-primary\">Mission avec client existant</button>
\t\t\t\t<br>
\t\t\t\t<br>
\t\t\t<div id=\"vx_client\" style=\"visibility:hidden;position:absolute;\">
\t\t\t\t";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form1"]) ? $context["form1"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form1"]) ? $context["form1"] : null), 'errors');
        echo "

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Nom de la mission"));
        echo "

\t\t\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "nom", array()), 'errors');
        echo "

\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "appelOffreContactClient", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Statut"));
        echo "

\t\t\t\t\t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "appelOffreContactClient", array()), 'errors');
        echo "

\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "appelOffreContactClient", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "categories", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Catégorie(s) (maintenir la touche ctrl enfoncée pour sélectionner plusieurs catégories)"));
        echo "
\t\t\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "categories", array()), 'errors');
        echo "
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "categories", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "competences", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Compétence(s) (maintenir la touche ctrl enfoncée pour sélectionner plusieurs compétences)"));
        echo "
\t\t\t\t\t";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "competences", array()), 'errors');
        echo "
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "competences", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "descriptif", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Description (visible par tous)"));
        echo "
\t\t\t\t\t";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "descriptif", array()), 'errors');
        echo "
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "descriptif", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "client", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Nom du client"));
        echo "
\t\t\t\t\t";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "client", array()), 'errors');
        echo "
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "client", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "publique", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Visible par tous"));
        echo "
\t\t\t\t\t";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "publique", array()), 'errors');
        echo "
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "publique", array()), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t

\t\t\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 col-sm-offset-4\">
\t\t\t\t\t\t";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form1"]) ? $context["form1"] : null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>



  
\t\t\t\t";
        // line 101
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form1"]) ? $context["form1"] : null), 'form_end');
        echo "
\t\t\t</div>
\t\t\t<div id=\"nv_client\" style=\"visibility:hidden;position:absolute;\">
\t\t\t\t";
        // line 104
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

\t\t\t\t";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : null), 'errors');
        echo "

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Nom de la mission"));
        echo "

\t\t\t\t\t";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "nom", array()), 'errors');
        echo "

\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "appelOffreContactClient", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Statut"));
        echo "

\t\t\t\t\t";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "appelOffreContactClient", array()), 'errors');
        echo "

\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "appelOffreContactClient", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "categories", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Catégorie(s) (maintenir la touche ctrl enfoncée pour sélectionner plusieurs catégories)"));
        echo "
\t\t\t\t\t";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "categories", array()), 'errors');
        echo "
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "categories", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "competences", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Compétence(s) (maintenir la touche ctrl enfoncée pour sélectionner plusieurs compétences)"));
        echo "
\t\t\t\t\t";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "competences", array()), 'errors');
        echo "
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "competences", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "descriptif", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Description (visible par tous)"));
        echo "
\t\t\t\t\t";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "descriptif", array()), 'errors');
        echo "
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "descriptif", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "particulierEntreprise", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Type d'entreprise"));
        echo "
\t\t\t\t\t\t\t";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "particulierEntreprise", array()), 'errors');
        echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "particulierEntreprise", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Nom de l'entreprise (si entreprise)"));
        echo "
\t\t\t\t\t\t\t";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "nom", array()), 'errors');
        echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "taille", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Taille de l'entreprise (si entreprise)"));
        echo "
\t\t\t\t\t\t\t";
        // line 168
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "taille", array()), 'errors');
        echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 171
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "taille", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 175
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "civiliteContact", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Civilité du contact"));
        echo "
\t\t\t\t\t\t\t";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "civiliteContact", array()), 'errors');
        echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 179
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "civiliteContact", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 183
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "nomContact", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Nom du contact"));
        echo "
\t\t\t\t\t\t\t";
        // line 184
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "nomContact", array()), 'errors');
        echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 187
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "nomContact", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 191
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "prenomContact", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Prénom du contact"));
        echo "
\t\t\t\t\t\t\t";
        // line 192
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "prenomContact", array()), 'errors');
        echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 195
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "prenomContact", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 199
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "fonctionContact", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Fonction du contact"));
        echo "
\t\t\t\t\t\t\t";
        // line 200
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "fonctionContact", array()), 'errors');
        echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 203
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "fonctionContact", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 207
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Adresse email"));
        echo "
\t\t\t\t\t\t\t";
        // line 208
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "email", array()), 'errors');
        echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 211
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 215
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "telephone", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Numéro de téléphone"));
        echo "
\t\t\t\t\t\t\t";
        // line 216
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "telephone", array()), 'errors');
        echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 219
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "telephone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 224
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "adresse1", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Adresse"));
        echo "
\t\t\t\t\t\t\t";
        // line 225
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "adresse1", array()), 'errors');
        echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 228
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "adresse1", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 232
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "adresse2", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => " "));
        echo "
\t\t\t\t\t\t\t";
        // line 233
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "adresse2", array()), 'errors');
        echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 236
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "adresse2", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 240
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "adresse3", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => " "));
        echo "
\t\t\t\t\t\t\t";
        // line 241
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "adresse3", array()), 'errors');
        echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 244
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "adresse3", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 248
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "ville", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Ville"));
        echo "
\t\t\t\t\t\t\t";
        // line 249
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "ville", array()), 'errors');
        echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 252
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 257
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "codePostal", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Code postal"));
        echo "
\t\t\t\t\t\t\t";
        // line 258
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "codePostal", array()), 'errors');
        echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 261
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "codePostal", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 266
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "pays", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Pays"));
        echo "
\t\t\t\t\t\t\t";
        // line 267
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "pays", array()), 'errors');
        echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
        // line 270
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "client", array()), "pays", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 276
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "publique", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Visible par tous"));
        echo "
\t\t\t\t\t";
        // line 277
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "publique", array()), 'errors');
        echo "
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t";
        // line 279
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "publique", array()), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t

\t\t\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 col-sm-offset-4\">
\t\t\t\t\t\t";
        // line 288
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>

  
\t\t\t\t";
        // line 293
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : null), 'form_end');
        echo "
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t\t\t\t<script type=\"text/javascript\">
\t\t\tdocument.getElementById('btn_vx_client').onclick = function(){
\t\t\t\tdocument.getElementById('nv_client').style.visibility='hidden';
\t\t\t\tdocument.getElementById('vx_client').style.visibility='visible';
\t\t\t\tdocument.getElementById('nv_client').style.position='absolute';
\t\t\t\tdocument.getElementById('vx_client').style.position='relative';
\t\t\t}
\t\t\tdocument.getElementById('btn_nv_client').onclick = function(){
\t\t\t\tdocument.getElementById('nv_client').style.visibility='visible';
\t\t\t\tdocument.getElementById('vx_client').style.visibility='hidden';
\t\t\t\tdocument.getElementById('nv_client').style.position='relative';
\t\t\t\tdocument.getElementById('vx_client').style.position='absolute';
\t\t\t}
\t\t\t\t</script>

";
    }

    public function getTemplateName()
    {
        return "JuniorSiteinterneBundle:Siteinterne:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  610 => 293,  602 => 288,  590 => 279,  585 => 277,  581 => 276,  572 => 270,  566 => 267,  562 => 266,  554 => 261,  548 => 258,  544 => 257,  536 => 252,  530 => 249,  526 => 248,  519 => 244,  513 => 241,  509 => 240,  502 => 236,  496 => 233,  492 => 232,  485 => 228,  479 => 225,  475 => 224,  467 => 219,  461 => 216,  457 => 215,  450 => 211,  444 => 208,  440 => 207,  433 => 203,  427 => 200,  423 => 199,  416 => 195,  410 => 192,  406 => 191,  399 => 187,  393 => 184,  389 => 183,  382 => 179,  376 => 176,  372 => 175,  365 => 171,  359 => 168,  355 => 167,  348 => 163,  342 => 160,  338 => 159,  331 => 155,  325 => 152,  321 => 151,  313 => 146,  308 => 144,  304 => 143,  297 => 139,  292 => 137,  288 => 136,  280 => 131,  275 => 129,  271 => 128,  264 => 124,  258 => 121,  253 => 119,  245 => 114,  239 => 111,  234 => 109,  228 => 106,  223 => 104,  217 => 101,  207 => 94,  195 => 85,  190 => 83,  186 => 82,  178 => 77,  173 => 75,  169 => 74,  161 => 69,  156 => 67,  152 => 66,  144 => 61,  139 => 59,  135 => 58,  127 => 53,  122 => 51,  118 => 50,  110 => 45,  104 => 42,  99 => 40,  92 => 36,  86 => 33,  81 => 31,  75 => 28,  70 => 26,  56 => 15,  52 => 13,  49 => 12,  42 => 8,  39 => 7,  33 => 4,  30 => 3,);
    }
}
