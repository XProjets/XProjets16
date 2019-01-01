<?php

/* JuniorSiteinterneBundle:Siteinterne:mission.html.twig */
class __TwigTemplate_cc01718b54c80079ba3b8b845b69858a224c52ff7fb462f387cf569584eda9c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JuniorSiteinterneBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'feuilleStyleAlternative' => array($this, 'block_feuilleStyleAlternative'),
            'titrePage' => array($this, 'block_titrePage'),
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "nom", array()), "html", null, true);
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

    // line 10
    public function block_titrePage($context, array $blocks = array())
    {
        // line 11
        echo "Mission ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "numSiaje", array()), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "nom", array()), "html", null, true);
        echo "
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "\t\t\t<section class=\"row\">
\t\t\t\t<div id=\"content\" class=\"col-md-offset-1 col-md-10\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-8\" id=\"modifier_etat\" style=\"visibility:hidden;\">
\t\t\t\t\t\t\t<a type=\"button\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_modification_mission", array("idmission" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "id", array()), "modifRaisonEchec" => "ok")), "html", null, true);
        echo "\" class=\"btn btn-default\">Echec</a>
\t\t\t\t\t\t\t<a type=\"button\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_modification_mission", array("idmission" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "id", array()), "changerEtat" => 2)), "html", null, true);
        echo "\" class=\"btn btn-default\">Terminée</a>
\t\t\t\t\t\t\t<a type=\"button\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_modification_mission", array("idmission" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "id", array()), "changerEtat" => 3)), "html", null, true);
        echo "\" class=\"btn btn-default\">A pourvoir</a>
\t\t\t\t\t\t\t<a type=\"button\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_modification_mission", array("idmission" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "id", array()), "changerEtat" => 4)), "html", null, true);
        echo "\" class=\"btn btn-default\">En standby</a>
\t\t\t\t\t\t\t<a type=\"button\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_modification_mission", array("idmission" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "id", array()), "changerEtat" => 5)), "html", null, true);
        echo "\" class=\"btn btn-default\">En cours</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 25
        if ($this->env->getExtension('security')->isGranted("ROLE_MBJE")) {
            // line 26
            echo "\t\t\t\t\t\t<div class=\"col-md-2\" style=\"text-align:right;\">
\t\t\t\t\t\t\t<button id=\"montre_menu_modi_etat\" class=\"btn btn-default\" style=\"cursor:pointer;\">&laquo; Modifier</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 30
        echo "\t\t\t\t\t\t<div class=\"col-md-2\" style=\"text-align:center;\">
\t\t\t\t\t\t\t";
        // line 31
        if (($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "etat", array()) == "Echec")) {
            // line 32
            echo "\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger btn-block\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "etat", array()), "html", null, true);
            echo "</button>
\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "etat", array()) == "Terminée")) {
            // line 34
            echo "\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-success btn-block\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "etat", array()), "html", null, true);
            echo "</button>
\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "etat", array()) == "En cours")) {
            // line 36
            echo "\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-block\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "etat", array()), "html", null, true);
            echo "</button>
\t\t\t\t\t\t\t";
        } else {
            // line 38
            echo "\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-warning btn-block\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "etat", array()), "html", null, true);
            echo "</button>
\t\t\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<br />
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\" well\">
\t\t\t\t\t\t\t<h1>Infos</h1>
\t\t\t\t\t\t\t<span class=\"light padd\">ajoutée le ";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "ajouteLe", array()), "d/m/Y à H\\hi"), "html", null, true);
        echo " par ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "ajoutePar", array()), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "ajoutePar", array()), "lastName", array()), "html", null, true);
        echo "</span><br />
\t\t\t\t\t\t\tMission numéro<br/>
\t\t\t\t\t\t\t<span class=\"light padd\">";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "numSiaje", array()), "html", null, true);
        echo " </span>
\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t";
        // line 51
        if ($this->env->getExtension('security')->isGranted("ROLE_MBJE")) {
            echo "Mission visible<br/>
\t\t\t\t\t\t\t<span class=\"light padd\">";
            // line 52
            if ($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "publique", array())) {
                echo "oui <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_modification_mission", array("idmission" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "id", array()), "changerPublique" => "ok")), "html", null, true);
                echo "\" class=\"btn btn-default btn-xs\">Rendre privée  &raquo;</a>";
            } else {
                echo "non <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_modification_mission", array("idmission" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "id", array()), "changerPublique" => "ok")), "html", null, true);
                echo "\" class=\"btn btn-default btn-xs\">Rendre publique  &raquo;</a>";
            }
            echo " </span> <br />";
        }
        // line 53
        echo "\t\t\t\t\t\t\tClient<br /><span class=\"light padd\">";
        if (($this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "client", array()), "particulierEntreprise", array()) == "particulier")) {
            echo "Particulier";
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "client", array()), "nom", array()), "html", null, true);
        }
        echo "</span> <br />
\t\t\t\t\t\t\tNombre de JEH<br /><span class=\"light padd\">";
        // line 54
        if ((!(null === $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "nbJeh", array())))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "nbJeh", array()), "html", null, true);
        } else {
            echo " Pas encore défini ";
        }
        echo "</span><br />
\t\t\t\t\t\t\tFrais<br /><span class=\"light padd\">";
        // line 55
        if ((!(null === $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "frais", array())))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "frais", array()), "html", null, true);
        } else {
            echo " Pas encore défini ";
        }
        echo "</span><br />
\t\t\t\t\t\t\tAccompte<br /><span class=\"light padd\">";
        // line 56
        if ((!(null === $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "accompte", array())))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "accompte", array()), "html", null, true);
        } else {
            echo " Pas encore défini ";
        }
        echo "</span><br />
\t\t\t\t\t\t\tCatégories<br /><span class=\"light padd\">";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "categories", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "name", array()), "html", null, true);
            if ((!$this->getAttribute($context["loop"], "last", array()))) {
                echo ", ";
            }
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            echo " Pas de catégories";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</span><br />
\t\t\t\t\t\t\tCompétences<br /><span class=\"light padd\">";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "competences", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["comp"], "nom", array()), "html", null, true);
            if ((!$this->getAttribute($context["loop"], "last", array()))) {
                echo ", ";
            }
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            echo " Pas de compétences";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</span><br />
\t\t\t\t\t\t\tDescription<br /><span class=\"light padd\">";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "descriptif", array()), "html", null, true);
        echo "</span><br />
\t\t\t\t\t\t\t";
        // line 60
        if ($this->env->getExtension('security')->isGranted("ROLE_MBJE")) {
            echo "<a  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_modification_mission", array("idmission" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "id", array()), "modifMission" => "ok")), "html", null, true);
            echo "\" id=\"montre_menu_modi_etat\" class=\"btn btn-default\" style=\"cursor:pointer;\">Modifier &raquo;</a>
\t\t\t\t\t\t\t<br />";
        }
        // line 62
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\" well\">
\t\t\t\t\t\t\t<h1>Equipe</h1>
\t\t\t\t\t\t\tRéférent mission : <br />
\t\t\t\t\t\t\t\t<span class=\"light padd\">";
        // line 67
        if ((!(null === $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "referent", array())))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "referent", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "referent", array()), "lastName", array()), "html", null, true);
        } else {
            echo "Pas encore choisi";
        }
        if ($this->env->getExtension('security')->isGranted("ROLE_MBJE")) {
            echo "<br/><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_users", array("idmission" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "id", array()), "refIntCDP" => 1)), "html", null, true);
            echo "\" class=\"btn btn-primary\">Choisir</a>";
        }
        echo "</span><br/><br/>
\t\t\t\t\t\t\t\tChef de projet :<br />
\t\t\t\t\t\t\t\t<span class=\"light padd\">";
        // line 69
        if ((!(null === $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "chefDeProjet", array())))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "chefDeProjet", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "chefDeProjet", array()), "lastName", array()), "html", null, true);
        } else {
            echo "Pas encore recruté";
        }
        if ($this->env->getExtension('security')->isGranted("ROLE_MBJE")) {
            echo "<br />
\t\t\t\t\t\t\t\t<a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_users", array("idmission" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "id", array()), "refIntCDP" => 3)), "html", null, true);
            echo "\" class=\"btn btn-primary\">Choisir</a>";
        }
        echo "<br />
\t\t\t\t\t\t\t\t</span><br/>
\t\t\t\t\t\t\t\tIntervenant(s) :<br />
\t\t\t\t\t\t\t\t";
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "intervenants", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["intervenant"]) {
            echo "<span class=\"light padd\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["intervenant"], "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["intervenant"], "lastName", array()), "html", null, true);
            echo "</span> ";
            if (($this->env->getExtension('security')->isGranted("ROLE_MBJE") || $this->env->getExtension('security')->isGranted("ROLE_RECRUTEUR"))) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_modification_mission", array("idmission" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "id", array()), "iduser" => $this->getAttribute($context["intervenant"], "id", array()), "supprInt" => "ok")), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\"></span></a>";
            }
            echo "<br />
\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 74
            echo "<span class=\"light padd\">Pas encore recruté(s)</span><br/>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intervenant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t\t\t\t\t\t\t\t";
        if (($this->env->getExtension('security')->isGranted("ROLE_MBJE") || $this->env->getExtension('security')->isGranted("ROLE_RECRUTEUR"))) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_users", array("idmission" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "id", array()), "refIntCDP" => 2)), "html", null, true);
            echo "\" class=\"btn btn-primary\">Nouvel intervenant</a>";
        }
        echo "<br />

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t  <div class=\"row well\">
\t\t\t\t\t\t\t<h2>Evolution</h2>
\t\t\t\t\t";
        // line 83
        if (($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "etat", array()) == "Echec")) {
            // line 84
            echo "\t\t\t\t\t\t\tMission échouée pour la raison suivante :<br/>
\t\t\t\t\t\t\t";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "raisonEchec", array()), "html", null, true);
            echo "
\t\t\t\t\t";
        } else {
            // line 87
            echo "\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t";
            // line 88
            if (((isset($context["tauxdavancement"]) ? $context["tauxdavancement"] : null) >= 0)) {
                // line 89
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 10));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 90
                    echo "\t\t\t\t\t\t\t\t";
                    if (($context["i"] <= (isset($context["tauxdavancement"]) ? $context["tauxdavancement"] : null))) {
                        // line 91
                        echo "\t\t\t\t\t\t\t\t<button class=\"btn btn-success\"></button>
\t\t\t\t\t\t\t\t";
                    }
                    // line 93
                    echo "\t\t\t\t\t\t\t\t";
                    if (($context["i"] > (isset($context["tauxdavancement"]) ? $context["tauxdavancement"] : null))) {
                        // line 94
                        echo "\t\t\t\t\t\t\t\t<button class=\"btn btn-danger\"></button>
\t\t\t\t\t\t\t\t";
                    }
                    // line 96
                    echo "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 98
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\tDate de début : ";
            // line 100
            if ($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "dateDebut", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "dateDebut", array()), "d/m/Y"), "html", null, true);
            } else {
                echo "Pas encore défini";
            }
            echo "<br />
\t\t\t\t\t\t\tDate de fin : ";
            // line 101
            if ($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "dateFin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "dateFin", array()), "d/m/Y"), "html", null, true);
            } else {
                echo "Pas encore défini";
            }
            echo "<br />
\t\t\t\t\t\t\t";
            // line 102
            if ($this->env->getExtension('security')->isGranted("ROLE_MBJE")) {
                echo "<a  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_modification_mission", array("idmission" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "id", array()), "modifDates" => "ok")), "html", null, true);
                echo "\" id=\"montre_menu_modi_etat\" class=\"btn btn-default btn-xs\" style=\"cursor:pointer;\">Modifier les dates &raquo;</a><br/>";
            }
            // line 103
            echo "\t\t\t\t\t\t\tDétails d'avancement à destination du client :<br/>
\t\t\t\t\t\t\t";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "detailAvancement", array()), "html", null, true);
            echo "<br/>
\t\t\t\t\t\t\t";
            // line 105
            if (($this->env->getExtension('security')->isGranted("ROLE_MBJE") || ((isset($context["statut"]) ? $context["statut"] : null) == "cdp"))) {
                echo "<a  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_modification_detailavancement", array("idmission" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-xs\" style=\"cursor:pointer;\">Modifier &raquo;</a><br/>";
            }
            // line 106
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t";
        }
        // line 108
        echo "\t\t\t\t\t
\t\t\t\t<h3>Phases</h3>
\t\t\t\t<ul>";
        // line 110
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "phases", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 111
            echo "\t\t\t\t\t<li>Phase ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "idPhase", array()), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nbJeh", array()), "html", null, true);
            echo " JEH - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nom", array()), "html", null, true);
            echo "</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "</ul>
\t\t\t\t<a href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_modification_mission", array("idmission" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "id", array()), "modifPhases" => "ok")), "html", null, true);
        echo "\" class=\"btn btn-default btn-xs\">Modifier les phases &raquo;</a>
\t\t\t\t 
\t\t\t\t\t\t  </div>
\t\t\t\t\t";
        // line 116
        if ((((isset($context["statut"]) ? $context["statut"] : null) == "mbje") || (((isset($context["statut"]) ? $context["statut"] : null) == "cdp") && $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "montrerClientAuCdp", array())))) {
            // line 117
            echo "\t\t\t\t\t\t  <div class=\"row well\">
\t\t\t\t\t\t\t<h2>Infos client <span class=\"light\">";
            // line 118
            if ((((isset($context["statut"]) ? $context["statut"] : null) == "mbje") && $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "montrerClientAuCdp", array()))) {
                echo " (Visible par le chef de projet)";
            } elseif ((((isset($context["statut"]) ? $context["statut"] : null) == "mbje") && (!$this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "montrerClientAuCdp", array())))) {
                echo "(Non visible par le chef de projet)";
            }
            echo "</span></h2>
\t\t\t\t\t";
            // line 119
            if (($this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "client", array()), "particulierEntreprise", array()) == "particulier")) {
                // line 120
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "client", array()), "nomContact", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "client", array()), "prenomContact", array()), "html", null, true);
                echo " (Particulier)
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Adresse email : ";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "client", array()), "email", array()), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t<li>Numéro de téléphone : ";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "client", array()), "telephone", array()), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t<li>Adresse :
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "client", array()), "adresse1", array()), "html", null, true);
                echo "<br/>
\t\t\t\t\t\t\t\t\t\t";
                // line 127
                if ($this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "client", array()), "adresse2", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "client", array()), "adresse2", array()), "html", null, true);
                    echo "<br/>";
                }
                // line 128
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "client", array()), "adresse3", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "client", array()), "adresse3", array()), "html", null, true);
                    echo "<br/>";
                }
                // line 129
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "client", array()), "codePostal", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "client", array()), "ville", array()), "html", null, true);
                echo "<br/>
\t\t\t\t\t\t\t\t\t\t";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "client", array()), "pays", array()), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
            } else {
                // line 134
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "client", array()), "nom", array()), "html", null, true);
                echo "
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li> Taille de l'entreprise : ";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "client", array()), "taille", array()), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t<li>Nom du contact : ";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "client", array()), "nomContact", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "client", array()), "prenomContact", array()), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t<li>Adresse email : ";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "client", array()), "email", array()), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t<li>Numéro de téléphone : ";
                // line 139
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "client", array()), "telephone", array()), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t<li>Adresse :
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "client", array()), "adresse1", array()), "html", null, true);
                echo "<br/>
\t\t\t\t\t\t\t\t\t\t";
                // line 143
                if ($this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "client", array()), "adresse2", array())) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "client", array()), "adresse2", array()), "html", null, true);
                    echo " <br/> ";
                }
                // line 144
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "client", array()), "adresse3", array())) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "client", array()), "adresse3", array()), "html", null, true);
                    echo " <br/> ";
                }
                // line 145
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "client", array()), "codePostal", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "client", array()), "ville", array()), "html", null, true);
                echo "<br/>
\t\t\t\t\t\t\t\t\t\t";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "client", array()), "pays", array()), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
            }
            // line 150
            echo "\t\t\t\t\t<br/>
\t\t\t\t\t\t\t
\t\t\t\t\t\t  </div>
\t\t\t\t\t";
        }
        // line 154
        echo "\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t  <div class=\"row well\">
\t\t\t\t\t\t\t<h2>Documents</h2>
\t\t\t\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Nom du document</th>
\t\t\t\t\t\t\t\t\t<th>Etat</th>
\t\t\t\t\t\t\t\t\t<th>+ d'infos</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 167
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documents"]) ? $context["documents"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
            // line 168
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["doc"], "frozen", array())) {
                // line 169
                echo "\t\t\t\t\t\t\t\t\t<tr class=\"success\">
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 171
                echo "\t\t\t\t\t\t\t\t\t<tr class=\"danger\">
\t\t\t\t\t\t\t\t\t";
            }
            // line 173
            echo "\t\t\t\t\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["doc"], "typeDeDocument", array()), "html", null, true);
            echo " ";
            if ((($this->getAttribute($context["doc"], "typeDeDocument", array()) == "Récapitulatif mission") || ($this->getAttribute($context["doc"], "typeDeDocument", array()) == "Avenant au récapitulatif mission"))) {
                if ($this->getAttribute($context["doc"], "intervenant", array())) {
                    echo " (";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["doc"], "intervenant", array()), "firstName", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["doc"], "intervenant", array()), "lastName", array()), "html", null, true);
                    echo ")";
                }
            }
            echo "</td>
\t\t\t\t\t\t\t\t\t\t";
            // line 174
            if ($this->getAttribute($context["doc"], "frozen", array())) {
                // line 175
                echo "\t\t\t\t\t\t\t\t\t\t<td><span class=\"glyphicon glyphicon-ok\"></span></td>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 177
                echo "\t\t\t\t\t\t\t\t\t\t<td><span class=\"glyphicon glyphicon-remove\"></span></td>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 179
            echo "\t\t\t\t\t\t\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_docmission", array("id" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "id", array()), "iddoc" => $this->getAttribute($context["doc"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default btn-xs\">Détails  &raquo;</a></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t<a href=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_modification_mission", array("idmission" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "id", array()), "modifDocs" => "ajoutpvri")), "html", null, true);
        echo "\" class=\"btn btn-sm btn-default\">Nouveau PVRI</a>
\t\t\t\t\t\t\t<a href=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_modification_mission", array("idmission" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "id", array()), "modifDocs" => "ajoutavcc")), "html", null, true);
        echo "\"  class=\"btn btn-sm btn-default\">Nouvel avenant à la convention client</a>
\t\t\t\t\t\t\t<a href=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_modification_mission", array("idmission" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "id", array()), "modifDocs" => "ajoutavrcc")), "html", null, true);
        echo "\"  class=\"btn btn-sm btn-default\">Nouvel avenant de rupture à la convention</a>
\t\t\t\t\t\t\t";
        // line 187
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "intervenants", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["intervenant"]) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_modification_mission", array("idmission" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "id", array()), "iduser" => $this->getAttribute($context["intervenant"], "id", array()), "modifDocs" => "ajoutavrm")), "html", null, true);
            echo "\"  class=\"btn btn-sm btn-default\">Nouvel avenant au récapitulatif de mission (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["intervenant"], "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["intervenant"], "lastName", array()), "html", null, true);
            echo ")</a>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intervenant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "\t\t\t\t\t\t  </div><!-- Fin bloc documents /-->
\t\t\t\t\t\t  
\t\t\t\t\t\t  <!-- Bloc trésorerie /-->
\t\t\t\t\t\t  ";
        // line 191
        if ($this->env->getExtension('security')->isGranted("ROLE_MBJE")) {
            // line 192
            echo "\t\t\t\t\t\t  <div class=\"row well\">
\t\t\t\t\t\t\t<h2>Trésorerie</h2>
\t\t\t\t\t\t\t<h3>Emettre une facture</h3>
\t\t\t\t\t\t\tCocher les phases à facturer. <br/> 
\t\t\t\t\t\t\t<form action=\"";
            // line 196
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_docvierge", array("id" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "id", array()), "typedoc" => "facture", "iddoc" => 0)), "html", null, true);
            echo "\" method=\"post\"> 
\t\t\t\t\t\t\t";
            // line 197
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "phases", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 198
                echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"phase";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "idPhase", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "idPhase", array()), "html", null, true);
                echo "\"> Phase ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "idPhase", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nom", array()), "html", null, true);
                echo " <br/>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 200
            echo "\t\t\t\t\t\t\tDate d'émission : <input type=\"date\" name=\"emission\"><br/>
\t\t\t\t\t\t\tDate d'échéance : <input type=\"date\" name=\"echeance\"><br/>
\t\t\t\t\t\t\t<input type=\"submit\" value=\"Emettre la facture\" class=\"btn btn-default\" />
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<h3>Emettre un bulletin de versement</h3>
\t\t\t\t\t\t\tChoisir l'intervenant et le nombre de JEH <br/> 
\t\t\t\t\t\t\t<form action=\"";
            // line 206
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_docvierge", array("id" => $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "id", array()), "typedoc" => "bulletinversement", "iddoc" => 0)), "html", null, true);
            echo "\" method=\"post\"> 
\t\t\t\t\t\t\t";
            // line 207
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "intervenants", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 208
                echo "\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"idintervenant\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "id", array()), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "lastName", array()), "html", null, true);
                echo " <br/>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 210
            echo "\t\t\t\t\t\t\tNombre de JEH : <input type=\"number\" name=\"nb_jeh_bv\"><br/>
\t\t\t\t\t\t\tValeur du JEH : <input type=\"number\" name=\"valeur_du_jeh\"><br/>
\t\t\t\t\t\t\tDate d'émission : <input type=\"date\" name=\"emission\"><br/>
\t\t\t\t\t\t\t<input type=\"submit\" value=\"Emettre le BV\" class=\"btn btn-default\" />
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t  </div><!-- Fin bloc trésorerie /-->";
        }
        // line 216
        echo "
\t\t\t\t\t\t  </div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<h3>Remarques</h3>
\t\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t\t";
        // line 224
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) ? $context["commentaires"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 225
            echo "\t\t\t\t\t\t\t\t<span style=\"font-weight:bold;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "ajoutePar", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "ajoutePar", array()), "lastName", array()), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["com"], "contenu", array()), "html", null, true);
            echo "<br/><span class=\"light\">  ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["com"], "date", array()), "j M Y, H\\hi"), "html", null, true);
            echo "</span><br/><br/>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        echo "\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t";
        // line 229
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

\t\t\t\t\t\t\t\t";
        // line 231
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
        // line 234
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contenu", array()), 'label', array("label_attr" => array("class" => "
\t\t\t\t\t\t\t\t\tcontrol-label"), "label" => "Commentaire"));
        // line 235
        echo "

\t\t\t\t\t\t\t\t\t";
        // line 237
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contenu", array()), 'errors');
        echo "

\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t";
        // line 240
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contenu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-sm-offset-4\">
\t\t\t\t\t\t\t\t\t\t";
        // line 246
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t";
        // line 251
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

\t\t\t\t  
\t\t\t\t\t\t\t\t";
        // line 254
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</section>
\t\t\t
\t\t\t<script>
\t\t\tvar nbClick = 0;
\t\t\tdocument.getElementById(\"montre_menu_modi_etat\").addEventListener('click', function(e) {
\t\t\t\tif(nbClick % 2 == 0){
\t\t\t\t\tdocument.getElementById(\"modifier_etat\").style.visibility = \"visible\";
\t\t\t\t} else {
\t\t\t\t\tdocument.getElementById(\"modifier_etat\").style.visibility = \"hidden\";
\t\t\t\t}
\t\t\t\tnbClick++;
\t\t\t}, false);
\t\t\t</script>
";
    }

    public function getTemplateName()
    {
        return "JuniorSiteinterneBundle:Siteinterne:mission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  869 => 254,  863 => 251,  855 => 246,  846 => 240,  840 => 237,  836 => 235,  833 => 234,  827 => 231,  822 => 229,  819 => 228,  803 => 225,  799 => 224,  789 => 216,  781 => 210,  768 => 208,  764 => 207,  760 => 206,  752 => 200,  737 => 198,  733 => 197,  729 => 196,  723 => 192,  721 => 191,  716 => 188,  701 => 187,  697 => 186,  693 => 185,  689 => 184,  685 => 182,  675 => 179,  671 => 177,  667 => 175,  665 => 174,  650 => 173,  646 => 171,  642 => 169,  639 => 168,  635 => 167,  620 => 154,  614 => 150,  607 => 146,  600 => 145,  593 => 144,  587 => 143,  583 => 142,  577 => 139,  573 => 138,  567 => 137,  563 => 136,  557 => 134,  550 => 130,  543 => 129,  537 => 128,  532 => 127,  528 => 126,  522 => 123,  518 => 122,  510 => 120,  508 => 119,  500 => 118,  497 => 117,  495 => 116,  489 => 113,  486 => 112,  473 => 111,  469 => 110,  465 => 108,  461 => 106,  455 => 105,  451 => 104,  448 => 103,  442 => 102,  434 => 101,  426 => 100,  422 => 98,  419 => 97,  413 => 96,  409 => 94,  406 => 93,  402 => 91,  399 => 90,  394 => 89,  392 => 88,  389 => 87,  384 => 85,  381 => 84,  379 => 83,  363 => 75,  357 => 74,  337 => 73,  329 => 70,  318 => 69,  302 => 67,  295 => 62,  288 => 60,  284 => 59,  244 => 58,  204 => 57,  196 => 56,  188 => 55,  180 => 54,  171 => 53,  159 => 52,  155 => 51,  150 => 49,  141 => 47,  132 => 40,  126 => 38,  120 => 36,  114 => 34,  108 => 32,  106 => 31,  103 => 30,  97 => 26,  95 => 25,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  68 => 15,  65 => 14,  56 => 11,  53 => 10,  46 => 7,  43 => 6,  34 => 4,  31 => 3,);
    }
}
