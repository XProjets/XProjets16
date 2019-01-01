<?php

/* JuniorSiteinterneBundle:Siteinterne:client.html.twig */
class __TwigTemplate_d8d5f61b75c13fd953ea2407dc5d41baf3b28bb400146b093d150cd1c336803b extends Twig_Template
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
        echo twig_include($this->env, $context, "JuniorSiteinterneBundle:SiteInterne:sousmenumissions.html.twig");
        echo "
\t\t\t\t<div id=\"content\" class=\"col-md-9 col-md-offset-1\">
\t\t\t\t\t";
        // line 16
        if (((isset($context["edit"]) ? $context["edit"] : null) == 0)) {
            // line 17
            echo "\t\t\t\t\t";
            if (($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "particulierEntreprise", array()) == "particulier")) {
                // line 18
                echo "\t\t\t\t\t\t<h1>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "prenomContact", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "nomContact", array()), "html", null, true);
                echo " (Particulier)</h1>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Fonction : ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "fonctionContact", array()), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t<li>Adresse email : ";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "email", array()), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t<li>Numéro de téléphone : ";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "telephone", array()), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t<li>Adresse :
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "adresse1", array()), "html", null, true);
                echo "<br/>
\t\t\t\t\t\t\t\t\t\t";
                // line 26
                if ($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "adresse2", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "adresse2", array()), "html", null, true);
                }
                echo "<br/>
\t\t\t\t\t\t\t\t\t\t";
                // line 27
                if ($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "adresse3", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "adresse3", array()), "html", null, true);
                }
                echo "<br/>
\t\t\t\t\t\t\t\t\t\t";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "codePostal", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "ville", array()), "html", null, true);
                echo "<br/>
\t\t\t\t\t\t\t\t\t\t";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "pays", array()), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
            } else {
                // line 33
                echo "\t\t\t\t\t\t<h1>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "nom", array()), "html", null, true);
                echo "</h1>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li> Taille de l'entreprise : ";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "taille", array()), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t<li>Nom du contact : ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "nomContact", array()), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t<li>Prénom du contact : ";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "prenomContact", array()), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t<li>Fonction du contact : ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "fonctionContact", array()), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t<li>Adresse email : ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "email", array()), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t<li>Numéro de téléphone : ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "telephone", array()), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t<li>Adresse :
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "adresse1", array()), "html", null, true);
                echo "<br/>
\t\t\t\t\t\t\t\t\t\t";
                // line 44
                if ($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "adresse2", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "adresse2", array()), "html", null, true);
                }
                echo "<br/>
\t\t\t\t\t\t\t\t\t\t";
                // line 45
                if ($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "adresse3", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "adresse3", array()), "html", null, true);
                }
                echo "<br/>
\t\t\t\t\t\t\t\t\t\t";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "codePostal", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "ville", array()), "html", null, true);
                echo "<br/>
\t\t\t\t\t\t\t\t\t\t";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "pays", array()), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
            }
            // line 52
            echo "\t\t\t\t\t<a class=\"btn btn-warning\"href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_missions_client", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id", array()), "edit" => "ok")), "html", null, true);
            echo "\">Modifier</a>
\t\t\t\t\t";
        } else {
            // line 54
            echo "\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t<h1>Modifier le client</h1>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t";
            // line 58
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
            echo "

\t\t\t\t\t\t";
            // line 60
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
            // line 63
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "particulierEntreprise", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Type"));
            echo "
\t\t\t\t\t\t\t";
            // line 64
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "particulierEntreprise", array()), 'errors');
            echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "particulierEntreprise", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
            // line 71
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Nom de l'entreprise (si entreprise)"));
            echo "
\t\t\t\t\t\t\t";
            // line 72
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'errors');
            echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
            // line 75
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
            // line 79
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "taille", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Taille de l'entreprise (si entreprise)"));
            echo "
\t\t\t\t\t\t\t";
            // line 80
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "taille", array()), 'errors');
            echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
            // line 83
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "taille", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
            // line 87
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nomContact", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Nom du contact"));
            echo "
\t\t\t\t\t\t\t";
            // line 88
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nomContact", array()), 'errors');
            echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
            // line 91
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nomContact", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
            // line 95
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "civiliteContact", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Civilité du contact"));
            echo "
\t\t\t\t\t\t\t";
            // line 96
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "civiliteContact", array()), 'errors');
            echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
            // line 99
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "civiliteContact", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
            // line 103
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prenomContact", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Prénom du contact"));
            echo "
\t\t\t\t\t\t\t";
            // line 104
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prenomContact", array()), 'errors');
            echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
            // line 107
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prenomContact", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
            // line 111
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fonctionContact", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Fonction du contact"));
            echo "
\t\t\t\t\t\t\t";
            // line 112
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fonctionContact", array()), 'errors');
            echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
            // line 115
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fonctionContact", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
            // line 119
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Adresse email"));
            echo "
\t\t\t\t\t\t\t";
            // line 120
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
            echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
            // line 123
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
            // line 127
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephone", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Numéro de téléphone"));
            echo "
\t\t\t\t\t\t\t";
            // line 128
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephone", array()), 'errors');
            echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
            // line 131
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephone", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
            // line 136
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adresse1", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Adresse"));
            echo "
\t\t\t\t\t\t\t";
            // line 137
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adresse1", array()), 'errors');
            echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
            // line 140
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adresse1", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
            // line 144
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adresse2", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => " "));
            echo "
\t\t\t\t\t\t\t";
            // line 145
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adresse2", array()), 'errors');
            echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
            // line 148
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adresse2", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
            // line 152
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adresse3", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => " "));
            echo "
\t\t\t\t\t\t\t";
            // line 153
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adresse3", array()), 'errors');
            echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
            // line 156
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adresse3", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
            // line 161
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ville", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Ville"));
            echo "
\t\t\t\t\t\t\t";
            // line 162
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ville", array()), 'errors');
            echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
            // line 165
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
            // line 170
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "codePostal", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Code postal"));
            echo "
\t\t\t\t\t\t\t";
            // line 171
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "codePostal", array()), 'errors');
            echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
            // line 174
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "codePostal", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
            // line 179
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pays", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Pays"));
            echo "
\t\t\t\t\t\t\t";
            // line 180
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pays", array()), 'errors');
            echo "

\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t";
            // line 183
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pays", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-sm-offset-4\">
\t\t\t\t\t\t\t\t";
            // line 189
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t";
            // line 194
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "

\t\t  
\t\t\t\t\t\t";
            // line 197
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 200
        echo "\t\t\t\t</div>
\t\t\t</section>
";
    }

    public function getTemplateName()
    {
        return "JuniorSiteinterneBundle:Siteinterne:client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  483 => 200,  477 => 197,  471 => 194,  463 => 189,  454 => 183,  448 => 180,  444 => 179,  436 => 174,  430 => 171,  426 => 170,  418 => 165,  412 => 162,  408 => 161,  400 => 156,  394 => 153,  390 => 152,  383 => 148,  377 => 145,  373 => 144,  366 => 140,  360 => 137,  356 => 136,  348 => 131,  342 => 128,  338 => 127,  331 => 123,  325 => 120,  321 => 119,  314 => 115,  308 => 112,  304 => 111,  297 => 107,  291 => 104,  287 => 103,  280 => 99,  274 => 96,  270 => 95,  263 => 91,  257 => 88,  253 => 87,  246 => 83,  240 => 80,  236 => 79,  229 => 75,  223 => 72,  219 => 71,  212 => 67,  206 => 64,  202 => 63,  196 => 60,  191 => 58,  185 => 54,  179 => 52,  171 => 47,  165 => 46,  159 => 45,  153 => 44,  149 => 43,  143 => 40,  139 => 39,  135 => 38,  131 => 37,  127 => 36,  123 => 35,  117 => 33,  110 => 29,  104 => 28,  98 => 27,  92 => 26,  88 => 25,  82 => 22,  78 => 21,  74 => 20,  66 => 18,  63 => 17,  61 => 16,  56 => 14,  52 => 12,  49 => 11,  42 => 7,  39 => 6,  33 => 4,  30 => 3,);
    }
}
