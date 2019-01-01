<?php

/* JuniorSiteinterneBundle:Siteinterne:mission_simple_user.html.twig */
class __TwigTemplate_db4cdc44f243cdaf0ae6cd30658285afaff21c9d68ffdf005de57759ecc7afd3 extends Twig_Template
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

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "\t\t\t<section class=\"row\">
\t\t\t\t<div id=\"content\" class=\"col-md-offset-2 col-md-8\">
\t\t\t\t\t<br />
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"light padd\" style=\"text-align:right;\">ajoutée le ";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "ajouteLe", array()), "d/m/Y à H\\hi"), "html", null, true);
        echo " par ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "ajoutePar", array()), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "ajoutePar", array()), "lastName", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t<div class=\" well\">
\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t<h1>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "nom", array()), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-3\"><br/>
\t\t\t\t\t\t\tCatégories<br /><span class=\"light padd\">";
        // line 26
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
        // line 27
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
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t<span class=\"padd\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mission"]) ? $context["mission"] : null), "descriptif", array()), "html", null, true);
        echo "</span>

\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
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
        return "JuniorSiteinterneBundle:Siteinterne:mission_simple_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 30,  130 => 27,  90 => 26,  84 => 23,  74 => 20,  68 => 16,  65 => 15,  56 => 11,  53 => 10,  46 => 7,  43 => 6,  34 => 4,  31 => 3,);
    }
}
