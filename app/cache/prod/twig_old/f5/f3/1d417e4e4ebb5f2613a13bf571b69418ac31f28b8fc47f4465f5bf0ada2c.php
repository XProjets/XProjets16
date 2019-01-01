<?php

/* JuniorSiteinterneBundle:Siteinterne:sousmenumissions.html.twig */
class __TwigTemplate_f5f31d417e4e4ebb5f2613a13bf571b69418ac31f28b8fc47f4465f5bf0ada2c extends Twig_Template
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
        echo "<div class=\"col-md-2\" id=\"menu_missions\">
\t<h1>Menu</h1>
    <div class=\"btn-group-vertical\">
        ";
        // line 4
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "requestUri", array()) == $this->env->getExtension('routing')->getPath("junior_siteinterne_missions"))) {
            // line 5
            echo "\t\t<a class=\"btn btn-primary\" href=\"";
            echo $this->env->getExtension('routing')->getPath("junior_siteinterne_missions");
            echo "\">Tableau de bord des missions</a>
\t\t";
        } else {
            // line 7
            echo "\t\t<a class=\"btn btn-default\" href=\"";
            echo $this->env->getExtension('routing')->getPath("junior_siteinterne_missions");
            echo "\">Tableau de bord des missions</a>
\t\t";
        }
        // line 9
        echo "\t\t
        ";
        // line 10
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "requestUri", array()) == $this->env->getExtension('routing')->getPath("junior_siteinterne_missions_ajouter"))) {
            // line 11
            echo "\t\t<a class=\"btn btn-primary\" href=\"";
            echo $this->env->getExtension('routing')->getPath("junior_siteinterne_missions_ajouter");
            echo "\">Nouvelle mission</a>
\t\t";
        } else {
            // line 13
            echo "\t\t<a class=\"btn btn-default\" href=\"";
            echo $this->env->getExtension('routing')->getPath("junior_siteinterne_missions_ajouter");
            echo "\">Nouvelle mission</a>
\t\t";
        }
        // line 15
        echo "\t\t
        ";
        // line 16
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "requestUri", array()) == $this->env->getExtension('routing')->getPath("junior_siteinterne_missions_categories"))) {
            // line 17
            echo "\t\t<a class=\"btn btn-primary\" href=\"";
            echo $this->env->getExtension('routing')->getPath("junior_siteinterne_missions_categories");
            echo "\">Gestion des catégories</a>
\t\t";
        } else {
            // line 19
            echo "\t\t<a class=\"btn btn-default\" href=\"";
            echo $this->env->getExtension('routing')->getPath("junior_siteinterne_missions_categories");
            echo "\">Gestion des catégories</a>
\t\t";
        }
        // line 21
        echo "\t\t
        ";
        // line 22
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "requestUri", array()) == $this->env->getExtension('routing')->getPath("junior_siteinterne_missions_clients"))) {
            // line 23
            echo "\t\t<a class=\"btn btn-primary\" href=\"";
            echo $this->env->getExtension('routing')->getPath("junior_siteinterne_missions_clients");
            echo "\">Gestion des clients</a>
\t\t";
        } else {
            // line 25
            echo "\t\t<a class=\"btn btn-default\" href=\"";
            echo $this->env->getExtension('routing')->getPath("junior_siteinterne_missions_clients");
            echo "\">Gestion des clients</a>
\t\t";
        }
        // line 27
        echo "\t\t
        ";
        // line 28
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "requestUri", array()) == $this->env->getExtension('routing')->getPath("junior_siteinterne_users"))) {
            // line 29
            echo "\t\t<a class=\"btn btn-primary\" href=\"";
            echo $this->env->getExtension('routing')->getPath("junior_siteinterne_users");
            echo "\">Gestion des utilisateurs</a>
\t\t";
        } else {
            // line 31
            echo "\t\t<a class=\"btn btn-default\" href=\"";
            echo $this->env->getExtension('routing')->getPath("junior_siteinterne_users");
            echo "\">Gestion des utilisateurs</a>
\t\t";
        }
        // line 33
        echo "\t\t
        ";
        // line 34
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "requestUri", array()) == $this->env->getExtension('routing')->getPath("junior_siteinterne_missions_competences"))) {
            // line 35
            echo "\t\t<a class=\"btn btn-primary\" href=\"";
            echo $this->env->getExtension('routing')->getPath("junior_siteinterne_missions_competences");
            echo "\">Gestion des compétences</a>
\t\t";
        } else {
            // line 37
            echo "\t\t<a class=\"btn btn-default\" href=\"";
            echo $this->env->getExtension('routing')->getPath("junior_siteinterne_missions_competences");
            echo "\">Gestion des compétences</a>
\t\t";
        }
        // line 39
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "JuniorSiteinterneBundle:Siteinterne:sousmenumissions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 39,  117 => 37,  111 => 35,  109 => 34,  106 => 33,  100 => 31,  94 => 29,  92 => 28,  89 => 27,  83 => 25,  77 => 23,  75 => 22,  72 => 21,  66 => 19,  60 => 17,  58 => 16,  55 => 15,  49 => 13,  43 => 11,  41 => 10,  38 => 9,  32 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }
}
