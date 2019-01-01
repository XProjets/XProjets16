<?php

/* JuniorSiteinterneBundle:Siteinterne:index.html.twig */
class __TwigTemplate_f1e8f523d8b2fa1d3607ac0faa935a55e4666a3e2107c3c6e02dfc2024d05d71 extends Twig_Template
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
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_feuilleStyleAlternative($context, array $blocks = array())
    {
    }

    // line 10
    public function block_titrePage($context, array $blocks = array())
    {
        // line 11
        echo "Bienvenue sur le site interne d'XProjets.
";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "\t\t<div class=\"row test\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<h1>Les missions à pourvoir</h1>
\t\t\t\t";
        // line 18
        if ((isset($context["listeMissions"]) ? $context["listeMissions"] : null)) {
            // line 19
            echo "\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t\t<th>Client</th>
\t\t\t\t\t\t<th>Catégories</th>
\t\t\t\t\t\t<th>+ d'infos</th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeMissions"]) ? $context["listeMissions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
                // line 30
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["mission"], "publique", array()) && ($this->getAttribute($context["mission"], "etat", array()) == "A pourvoir"))) {
                    // line 31
                    echo "\t\t\t\t\t\t<tr class=\"\">
\t\t\t\t\t\t\t<td>";
                    // line 32
                    echo twig_escape_filter($this->env, $this->getAttribute($context["mission"], "nom", array()), "html", null, true);
                    echo "<span class=\"light\">  - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["mission"], "chaineDeCaractere", array()), "html", null, true);
                    echo "</span></td>
\t\t\t\t\t\t\t<td>";
                    // line 33
                    if (($this->getAttribute($this->getAttribute($context["mission"], "client", array()), "particulierEntreprise", array()) == "particulier")) {
                        echo "Particulier";
                    } else {
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mission"], "client", array()), "nom", array()), "html", null, true);
                    }
                    echo "</td>
\t\t\t\t\t\t\t<td>";
                    // line 34
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["mission"], "categories", array()));
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
                    echo "</td>
\t\t\t\t\t\t\t<td><a href=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_mission", array("id" => $this->getAttribute($context["mission"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-default btn-xs\">Détails  &raquo;</a></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
                }
                // line 38
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t";
        } else {
            // line 42
            echo "\t\t\t\t\tIl n'y a pas de missions à pourvoir en ce moment.
\t\t\t\t";
        }
        // line 44
        echo "\t\t\t</div>
\t\t\t<div class=\"col-lg-4\">
\t\t\t  <img class=\"img-circle\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logos/argent.png"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\" style=\"width: 140px; height: 140px;\">
\t\t\t  <h2>Tu as gagné...</h2>
\t\t\t  <h2>";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["argentGagne"]) ? $context["argentGagne"] : null), "html", null, true);
        echo " €</h2>
\t\t\t  <h2>...jusqu'à présent.</h2>
\t\t\t</div><!-- /.col-lg-4 -->

\t\t</div>

      <hr class=\"featurette-divider\">

      <!-- Chef de projet -->
      <div class=\"row\">
        <div class=\"col-lg-4\">
\t\t\t\t\t<h1>Mes missions en tant que <span class=\"text-muted\">chef de projet</span></h1>
\t\t\t\t\t";
        // line 60
        if ((isset($context["listeMissionsCDP"]) ? $context["listeMissionsCDP"] : null)) {
            // line 61
            echo "\t\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t\t\t<th>Etat</th>
\t\t\t\t\t\t\t<th>+ d'infos</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
            // line 70
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeMissionsCDP"]) ? $context["listeMissionsCDP"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
                // line 71
                echo "\t\t\t\t\t\t\t<tr class=\"\">
\t\t\t\t\t\t\t\t<td>";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["mission"], "nom", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["mission"], "etat", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td><a href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_mission", array("id" => $this->getAttribute($context["mission"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-xs\">Détails  &raquo;</a></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t\t";
        } else {
            // line 80
            echo "\t\t\t\t\t\tVous n'avez pas encore réalisé de mission en tant que chef de projet.
\t\t\t\t\t";
        }
        // line 82
        echo "        </div><!-- /.col-lg-4 -->
        <div class=\"col-lg-4\">
          <img class=\"img-circle\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logos/question.png"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\" style=\"width: 140px; height: 140px;\">
          <h2>Qu'est-ce qu'un chef de projet ?</h2>
          <p>Le chef de projet est l’intermédiaire entre le client et le ou les intervenants qui réalisent la mission. Il est en contact avec le client pendant toute la durée de la mission. Il définit avec lui l’étendue de la mission (cahier des charges) et le budget. Pour cela il peut être aidé par le ou les intervenants. Ensuite il veille au bon déroulement de la mission en faisant le lien entre l’intervenant et le client. Il est également chargé de présenter avec l’intervenant le travail fini. <br/>
\t\t  Pour être chef de projet, pas besoin d’avoir une connaissance poussée de tous les domaines ; de la réactivité, et l’envie de connaître le monde de l’entreprise sont largement suffisants ! Alors n’hésite pas à contacter Lilian si ça t’intéresse, il te trouvera la mission parfaite pour commencer !</p>
          <!--<p><a class=\"btn btn-default\" href=\"#howto\" role=\"button\">En savoir plus &raquo;</a></p>-->
        </div><!-- /.col-lg-4 -->
        <div class=\"col-lg-4\">
          <img class=\"img-circle\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logos/argent.png"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\" style=\"width: 140px; height: 140px;\">
          <h2>Comment est-il rémunéré ?</h2>
          <p>La rémunération du chef de projet dépend de la taille de la mission et du temps passé avec le client pour définir le cahier des charges. On ne va pas te mentir ce n’est pas le poste le plus lucratif mais c’est une opportunité en or pour découvrir les entreprises qui t’intéressent tout en étant payé.</p>
          <!--<p><a class=\"btn btn-default\" href=\"#howto\" role=\"button\">En savoir plus &raquo;</a></p>-->
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
\t  
      <hr class=\"featurette-divider\">
      <div class=\"row\">
        <div class=\"col-lg-4\">
\t\t\t\t\t<h1>Mes missions en tant qu'<span class=\"text-muted\">intervenant</span></h1>
\t\t\t\t\t";
        // line 102
        if ((isset($context["listeMissionsINT"]) ? $context["listeMissionsINT"] : null)) {
            // line 103
            echo "\t\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t\t\t<th>Etat</th>
\t\t\t\t\t\t\t<th>+ d'infos</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
            // line 112
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeMissionsINT"]) ? $context["listeMissionsINT"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
                // line 113
                echo "\t\t\t\t\t\t\t<tr class=\"\">
\t\t\t\t\t\t\t\t<td>";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($context["mission"], "nom", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($context["mission"], "etat", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td><a href=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_mission", array("id" => $this->getAttribute($context["mission"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-xs\">Détails  &raquo;</a></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t\t";
        } else {
            // line 122
            echo "\t\t\t\t\t\tVous n'avez pas encore réalisé de mission en tant qu'intervenant.
\t\t\t\t\t";
        }
        // line 124
        echo "        </div><!-- /.col-lg-4 -->
        <div class=\"col-lg-4\">
          <img class=\"img-circle\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logos/question.png"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\" style=\"width: 140px; height: 140px;\">
          <h2>Qu'est-ce qu'un intervenant ?</h2>
          <p>L’intervenant réalise la mission. Il définit en collaboration avec le chef de projet, le budget et l’échéancier de la mission. En fonction du temps que tu peux consacrer à une mission, il y en a de différentes tailles dans de nombreux domaines. Consulte les missions à pourvoir si tu veux en faire une ! Si aucune ne t’intéresse ou si elles ne sont pas dans les domaines que tu préfères envoie un message à Lilian, il te préviendra dès qu’une mission qui peut t’intéresser arrive.</p>
        </div><!-- /.col-lg-4 -->
        <div class=\"col-lg-4\">
          <img class=\"img-circle\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logos/argent.png"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\" style=\"width: 140px; height: 140px;\">
          <h2>Comment est-il rémunéré ?</h2>
          <p>La mission est facturée en terme de Jour-Homme-Etude (JEH) ce qui correspond à 300€ HT pour 8h de travail. Après déduction des charges l’intervenant perçoit 170€ par JEH facturé.</p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <hr class=\"featurette-divider\">

      <div class=\"row\" id=\"howto\">
\t    <div class=\"col-md-12\">
          <h1>Fonctionnement d'<span class=\"text-muted\">XProjets</span></h1>
          <p class=\"lead\">XProjets est la Junior Entreprise (JE) de l’Ecole Polytechnique : une JE est une association qui propose des missions aux étudiants de leur école, celles-ci sont demandées par des entreprises ou des particuliers.</p>
\t\t\t<img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/photo_groupe.jpg"), "html", null, true);
        echo "\" style=\"    display: block;margin-left: auto;margin-right: auto;border-radius:10px;width:80%;\" /><br/>
\t\t  <p>XProjets est découpé en 6 pôles : 
\t\t\t<ul>
\t\t\t\t<li>Le pôle présidence : il est constitué du président (Thibaud Guédon) et du vice-président (Romain Sauvestre). Ils coordonnent tous les deux l’ensemble du travail de la JE, les projets qui doivent être menés,… Le président est de plus le responsable légal de l’association et doit signer tous les papiers officiels au nom d’XProjets.</li>
\t\t\t\t<li>Le pôle trésorerie : il est constitué du trésorier (Paul-Armand Veillon) et du vice-trésorier (François Dupuy). Ils gèrent tous les comptes de la JE, facturent les clients, payent les étudiants… Le trésorier est le second responsable légal de l’entreprise.</li>
\t\t\t\t<li>Le pôle SecGé/RH : il est constitué du secrétaire général (Pierre L’Hostis) et du RH (Chloé Simpson). Le secrétaire général gère toute la partie administrative de la JE, il la déclare à la préfecture, gère la passation mais aussi est chargé d’organiser les conseils d’administration et d’en faire des compte-rendu. La RH est chargé d’inscrire à la JE tous ceux qui participent à des missions. Elle a aussi un rôle à l’intérieur de l’association car c’est elle qui va maintenir une bonne ambiance dans le groupe à travers l’organisation d’évènements cohéz’.</li>
\t\t\t\t<li>Le pôle développement commercial : il est constitué d’un chef de pôle (Ferdinand Legros) et de 3 autres membres (Antoine Michon, Alexandre Valentin, Thibaut Reymond). Ils sont chargés de prospecter pour trouver des missions pour les élèves. Il y en a un qui s’occupe des appels d’offres (Ferdinand), c’est-à-dire qu’il va voir sur le site de la Confédération Nationale des Junior Entreprises (CNJE), les appels d’offres postés par des entreprises ou des particuliers. Un autre s’occupe des contacts directs (Antoine) car les entreprises ne passent pas toujours par des appels d’offres et peuvent chercher à nous contacter directement. Enfin, les deux derniers s’occupent de la prospection (Alexandre et Thibaut), c’est-à-dire qu’ils vont démarcher les entreprises pour qu’elles proposent des missions à XProjets. Une fois une mission trouvée, ils la transmettent aux pôles communication et mission qui vont gérer la suite.</li>
\t\t\t\t<li>Le pôle communication : il est constitué d’un chef de pôle (Lilian Darracq) et de 3 autres membres (Agathe Kieny, Kévin Chen et Rémi Delbouys). Ce pôle gère la communication interne à l’école. Il y a un responsable recrutement (Lilian) qui cherche les chefs de projet et les intervenants en postant les missions sur le groupe Facebook ‘XProjets Recrutement’ ou en démarchant directement certains élèves. Un autre gère la partie évènementielle (Agathe)  pour faire connaître la JE auprès des élèves.  Il y a pour les accompagner un respo web (Rémi) qui gère le site internet et un respo graphiste (Kévin) qui gère principalement les affiches.</li>
\t\t\t\t<li>Le pôle mission : il est constitué d’un chef de pôle (Marie Schiltz) et de 3 référents missions (Hugo Guihot, Chedly Bourguiba, Vincent Dufour-Décieux). C’est le pôle le plus proche des missions en train d’être réalisées : ils forment, conseillent les chefs de projet et inspectent leur travail.</li>
\t\t\t</p>
\t\t</div>
      </div>
";
    }

    public function getTemplateName()
    {
        return "JuniorSiteinterneBundle:Siteinterne:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 143,  317 => 131,  309 => 126,  305 => 124,  301 => 122,  296 => 119,  287 => 116,  283 => 115,  279 => 114,  276 => 113,  272 => 112,  261 => 103,  259 => 102,  245 => 91,  235 => 84,  231 => 82,  227 => 80,  222 => 77,  213 => 74,  209 => 73,  205 => 72,  202 => 71,  198 => 70,  187 => 61,  185 => 60,  170 => 48,  165 => 46,  161 => 44,  157 => 42,  152 => 39,  146 => 38,  140 => 35,  100 => 34,  92 => 33,  86 => 32,  83 => 31,  80 => 30,  76 => 29,  64 => 19,  62 => 18,  57 => 15,  54 => 14,  49 => 11,  46 => 10,  41 => 7,  34 => 4,  31 => 3,);
    }
}
