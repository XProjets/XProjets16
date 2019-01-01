<?php

/* JuniorSiteinterneBundle:Siteinterne:config.html.twig */
class __TwigTemplate_b8eb348c9836802da7016e4f6b60df092f1ab67054dacc266aff4871a8056f0f extends Twig_Template
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
        echo " Configuration - ";
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
        echo "Configuration
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "\t\t\t";
        if (((isset($context["action"]) ? $context["action"] : null) <= 10)) {
            echo "<section class=\"row\">
\t\t\t\t<div id=\"content\" class=\"col-md-offset-1 col-md-10\">
\t\t\t\t<div class=\"row\" id=\"activer\" style=\"text-align:right;cursor:pointer;\"><button class=\"btn btn-sm btn-success\">Activer la modification</button></div>
\t\t\t\t<div class=\"row\" id=\"desactiver\" style=\"text-align:right;cursor:pointer;\"><button class=\"btn btn-sm btn-danger\">Désactiver la modification</button></div><br/>
\t\t\t\t<div class=\"row\"><div class=\"well col-md-5\"><h3>Membres de la JE</h3>
\t\t\t\t";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mbje"]) ? $context["mbje"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 22
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "username", array()), "html", null, true);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_config", array("iduser" => $this->getAttribute($context["a"], "id", array()), "action" => 6)), "html", null, true);
                echo "\"><button class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-remove\"></span></button></a><br/>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("junior_siteinterne_config", array("action" => 12));
            echo "\">Nouveau</a></div>
\t\t\t\t<div class=\"well col-md-5 col-md-offset-1\"><h3>Pôle Mission</h3>
\t\t\t\t";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["polemission"]) ? $context["polemission"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 27
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "username", array()), "html", null, true);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_config", array("iduser" => $this->getAttribute($context["a"], "id", array()), "action" => 7)), "html", null, true);
                echo "\"><button class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-remove\"></span></button></a><br/>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("junior_siteinterne_config", array("action" => 13));
            echo "\">Nouveau</a></div></div>
\t\t\t\t<div class=\"row\"><div class=\"well col-md-5\"><h3>Administrateurs</h3>
\t\t\t\t";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["admin"]) ? $context["admin"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 32
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "username", array()), "html", null, true);
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_config", array("iduser" => $this->getAttribute($context["a"], "id", array()), "action" => 5)), "html", null, true);
                echo "\"><button class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-remove\"></span></button></a><br/>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("junior_siteinterne_config", array("action" => 11));
            echo "\">Nouveau</a></div>
\t\t\t\t<div class=\"well col-md-5 col-md-offset-1\"><h3>RH</h3>
\t\t\t\t";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rh"]) ? $context["rh"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 37
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "username", array()), "html", null, true);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_config", array("iduser" => $this->getAttribute($context["a"], "id", array()), "action" => 8)), "html", null, true);
                echo "\"><button class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-remove\"></span></button></a><br/>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("junior_siteinterne_config", array("action" => 14));
            echo "\">Nouveau</a></div>
\t\t\t\t<div class=\"well col-md-5\"><h3>Recruteur</h3>
\t\t\t\t\t";
            // line 41
            if ((isset($context["recruteur"]) ? $context["recruteur"] : null)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recruteur"]) ? $context["recruteur"] : null), "username", array()), "html", null, true);
            }
            echo " <br/>
\t\t\t\t<a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("junior_siteinterne_config", array("action" => 15));
            echo "\">Changer</a></div></div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t";
        } elseif ((((isset($context["action"]) ? $context["action"] : null) >= 10) && ((isset($context["action"]) ? $context["action"] : null) <= 14))) {
            // line 46
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_config", array("action" => ((isset($context["action"]) ? $context["action"] : null) - 10), "iduser" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "username", array()), "html", null, true);
                echo "</a><br/>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "\t\t\t";
        } elseif (((isset($context["action"]) ? $context["action"] : null) == 15)) {
            // line 48
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_config", array("action" => 9, "iduser" => $this->getAttribute($context["u"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "username", array()), "html", null, true);
                echo "</a><br/>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t\t\t";
        }
        // line 50
        echo "\t\t\t
\t\t\t<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script>
\t\t\t\$(function(){
\t\t\t\t";
        // line 54
        if (((isset($context["action"]) ? $context["action"] : null) == 0)) {
            // line 55
            echo "\t\t\t\t\$('#desactiver').hide();
\t\t\t\t\$('section a').hide();
\t\t\t\t";
        } else {
            // line 58
            echo "\t\t\t\t\$('#activer').hide();
\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t\$('#desactiver').click(function(){
\t\t\t\t\t\$('section a').hide();
\t\t\t\t\t\$('#activer').show();
\t\t\t\t\t\$('#desactiver').hide();
\t\t\t\t});
\t\t\t\t\$('#activer').click(function(){
\t\t\t\t\t\$('section a').show();
\t\t\t\t\t\$('#activer').hide();
\t\t\t\t\t\$('#desactiver').show();
\t\t\t\t});
\t\t\t});

\t\t\t</script>
";
    }

    public function getTemplateName()
    {
        return "JuniorSiteinterneBundle:Siteinterne:config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 60,  218 => 58,  213 => 55,  211 => 54,  205 => 51,  202 => 50,  199 => 49,  185 => 48,  182 => 47,  168 => 46,  161 => 42,  155 => 41,  149 => 39,  138 => 37,  134 => 36,  128 => 34,  117 => 32,  113 => 31,  107 => 29,  96 => 27,  92 => 26,  86 => 24,  75 => 22,  71 => 21,  62 => 16,  59 => 15,  54 => 11,  51 => 10,  44 => 7,  41 => 6,  34 => 4,  31 => 3,);
    }
}
