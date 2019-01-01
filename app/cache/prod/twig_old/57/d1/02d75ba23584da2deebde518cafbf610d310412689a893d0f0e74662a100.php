<?php

/* JuniorSiteinterneBundle:Siteinterne:missions.html.twig */
class __TwigTemplate_57d102d75ba23584da2deebde518cafbf610d310412689a893d0f0e74662a100 extends Twig_Template
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
        echo "Gestion des missions
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "<script>
(function(angular) {//angular permettant la recherche dans la liste des missions ; Si jamais il y a une erreur d'échappement, il faut rajouter e('js') au bon endroit
    angular.module('platalApp', [])
    .controller('MyController', ['\$scope','\$http', function (\$scope, \$http) {
        \$scope.message = 'Bonjour';
        \$scope.missions =[";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeMissions"]) ? $context["listeMissions"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
            echo "{'nom' : '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["mission"], "nom", array()), "js"), "html", null, true);
            echo "', 'numSiaje' : '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mission"], "numSiaje", array()), "html", null, true);
            echo "', ";
            if ($this->getAttribute($context["mission"], "referent", array())) {
                echo "'referent' : {'firstName' : '";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mission"], "referent", array()), "firstName", array()), "html", null, true);
                echo "', 'lastName' : '";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mission"], "referent", array()), "lastName", array()), "html", null, true);
                echo "' },";
            }
            echo " 'nbJeh' : '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mission"], "nbJeh", array()), "html", null, true);
            echo "', 'etat' : '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mission"], "etat", array()), "html", null, true);
            echo "', ";
            if ($this->getAttribute($context["mission"], "chefDeProjet", array())) {
                echo "'chefDeProjet' : {'firstName' : '";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mission"], "chefDeProjet", array()), "firstName", array()), "html", null, true);
                echo "', 'lastName' : '";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["mission"], "chefDeProjet", array()), "lastName", array()), "html", null, true);
                echo "' },";
            }
            echo " 'dateDebut' : \"";
            if ($this->getAttribute($context["mission"], "dateDebut", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["mission"], "dateDebut", array()), "d/m/Y"), "html", null, true);
            }
            echo "\", 'dateFin' : \"";
            if ($this->getAttribute($context["mission"], "dateFin", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["mission"], "dateFin", array()), "d/m/Y"), "html", null, true);
            }
            echo "\", 'chemin' : \"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_mission", array("id" => $this->getAttribute($context["mission"], "id", array()))), "html", null, true);
            echo " \"}";
            if ((!$this->getAttribute($context["loop"], "last", array()))) {
                echo ",";
            }
            echo " ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "];
    }]);
})(window.angular);
</script>
\t\t\t<section class=\"row\" ng-app=\"platalApp\">
";
        // line 26
        echo twig_include($this->env, $context, "JuniorSiteinterneBundle:Siteinterne:sousmenumissions.html.twig");
        echo "
\t\t\t\t<div id=\"content\" class=\"col-md-offset-1 col-md-9\" ng-controller=\"MyController\">
\t\t\t\t\t<h1>Vue d'ensemble des missions</h1>
<div class=\"form-horizontal\"><input type=\"search\" class=\"input-md form-control\" ng-model=\"q\" placeholder=\"Filtrer les missions...\" /></div><br/>
\t\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t\t\t<th>Référent mission</th>
\t\t\t\t\t\t\t<th>Nombre de JEH</th>
\t\t\t\t\t\t\t<th>Etat de la mission</th>
\t\t\t\t\t\t\t<th>Chef de projet</th>
\t\t\t\t\t\t\t<th>Date début</th>
\t\t\t\t\t\t\t<th>Date fin</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 57
        echo "
\t\t\t\t\t\t\t<tr ng-repeat=\"mission in missions | filter:q\">
\t\t\t\t\t\t\t\t<td>{{ mission.nom }} - <span class=\"light\">{{mission.numSiaje}}</span></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{{ mission.referent.firstName }} {{ mission.referent.lastName }}</td>
\t\t\t\t\t\t\t\t<td>{{ mission.nbJeh }}</td>
\t\t\t\t\t\t\t\t<td>{{ mission.etat }}</td>
\t\t\t\t\t\t\t\t<td>{{ mission.chefDeProjet.firstName }} {{ mission.chefDeProjet.lastName }}</td>
\t\t\t\t\t\t\t\t<td>{{ mission.dateDebut}}</td>
\t\t\t\t\t\t\t\t<td>{{ mission.dateFin}}</td>
\t\t\t\t\t\t\t\t<td><a href=\"{{mission.chemin}}\" class=\"btn btn-default\">Détails  &raquo;</a></td>
\t\t\t\t\t\t\t</tr>
";
        echo "
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</section>

";
    }

    public function getTemplateName()
    {
        return "JuniorSiteinterneBundle:Siteinterne:missions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 57,  142 => 26,  68 => 21,  61 => 16,  58 => 15,  53 => 11,  50 => 10,  43 => 7,  40 => 6,  34 => 4,  31 => 3,);
    }
}
