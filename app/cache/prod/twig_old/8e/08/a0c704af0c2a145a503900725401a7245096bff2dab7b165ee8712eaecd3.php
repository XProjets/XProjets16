<?php

/* JuniorSiteinterneBundle:Siteinterne:users.html.twig */
class __TwigTemplate_8e08a0c704af0c2a145a503900725401a7245096bff2dab7b165ee8712eaecd3 extends Twig_Template
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
        echo "Utilisateurs - ";
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
        echo "
\t\t\t<section class=\"row\">
";
        // line 14
        echo twig_include($this->env, $context, "JuniorSiteinterneBundle:Siteinterne:sousmenumissions.html.twig");
        echo "
\t\t\t\t<div id=\"content\" class=\"col-md-offset-1 col-md-9\">
\t\t\t\t\t<h1>Liste des utilisateurs</h1>
\t\t\t\t\t<hr>
\t\t\t\t\t\t";
        // line 18
        if (((isset($context["refIntCDP"]) ? $context["refIntCDP"] : null) == 0)) {
            // line 19
            echo "\t\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t<th>Promo</th>
\t\t\t\t\t\t\t<th>+ d'infos</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeUsers"]) ? $context["listeUsers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 29
                echo "\t\t\t\t\t\t\t\t<tr class=\"\">
\t\t\t\t\t\t\t\t\t<td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "lastName", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "promo", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td><a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_user", array("id" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-xs btn-default\">Détails  &raquo;</a></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeUsers"]) ? $context["listeUsers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 39
            echo "\t\t\t\t\t\t";
            if (((isset($context["refIntCDP"]) ? $context["refIntCDP"] : null) == 1)) {
                // line 40
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_users", array("idmission" => (isset($context["idmission"]) ? $context["idmission"] : null), "refIntCDP" => (isset($context["refIntCDP"]) ? $context["refIntCDP"] : null), "iduser" => $this->getAttribute($context["u"], "id", array()), "add" => "ok")), "html", null, true);
                echo "\" class=\"btn btn-primary\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "lastName", array()), "html", null, true);
                echo "</a><br /><br />
\t\t\t\t\t\t";
            }
            // line 42
            echo "\t\t\t\t\t\t";
            if (((isset($context["refIntCDP"]) ? $context["refIntCDP"] : null) == 2)) {
                // line 43
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_users", array("idmission" => (isset($context["idmission"]) ? $context["idmission"] : null), "refIntCDP" => (isset($context["refIntCDP"]) ? $context["refIntCDP"] : null), "iduser" => $this->getAttribute($context["u"], "id", array()), "add" => "ok")), "html", null, true);
                echo "\" class=\"btn btn-primary\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "lastName", array()), "html", null, true);
                echo "</a><br /><br />
\t\t\t\t\t\t";
            }
            // line 45
            echo "\t\t\t\t\t\t";
            if (((isset($context["refIntCDP"]) ? $context["refIntCDP"] : null) == 3)) {
                // line 46
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_users", array("idmission" => (isset($context["idmission"]) ? $context["idmission"] : null), "refIntCDP" => (isset($context["refIntCDP"]) ? $context["refIntCDP"] : null), "iduser" => $this->getAttribute($context["u"], "id", array()), "add" => "ok")), "html", null, true);
                echo "\" class=\"btn btn-primary\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "lastName", array()), "html", null, true);
                echo "</a><br /><br />
\t\t\t\t\t\t";
            }
            // line 48
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t</div>
\t\t\t</section>


";
    }

    public function getTemplateName()
    {
        return "JuniorSiteinterneBundle:Siteinterne:users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 49,  152 => 48,  142 => 46,  139 => 45,  129 => 43,  126 => 42,  116 => 40,  113 => 39,  108 => 38,  103 => 35,  94 => 32,  90 => 31,  84 => 30,  81 => 29,  77 => 28,  66 => 19,  64 => 18,  57 => 14,  53 => 12,  50 => 11,  43 => 7,  40 => 6,  33 => 4,  30 => 3,);
    }
}
