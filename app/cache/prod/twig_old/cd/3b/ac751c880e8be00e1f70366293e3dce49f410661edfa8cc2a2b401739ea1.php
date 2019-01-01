<?php

/* JuniorSiteinterneBundle:Siteinterne:user.html.twig */
class __TwigTemplate_cd3bac751c880e8be00e1f70366293e3dce49f410661edfa8cc2a2b401739ea1 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "lastName", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "lastName", array()), "html", null, true);
        echo "
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "\t\t\t<section class=\"row\">
\t\t\t\t<div id=\"content\" class=\"col-md-offset-1 col-md-10\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t\t<h3>Infos</h3>
\t\t\t\t\t\t\t\tEmail<br/>
\t\t\t\t\t\t\t\t<span class=\"light padd\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "email", array()), "html", null, true);
        echo "</span> <br />
\t\t\t\t\t\t\t\tTel<br/>
\t\t\t\t\t\t\t\t<span class=\"light padd\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "phone", array()), "html", null, true);
        echo "</span> <br />
\t\t\t\t\t\t\t\tStatut<br/>
\t\t\t\t\t\t\t\t<span class=\"light padd\">";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["u"]) ? $context["u"] : null), "roles", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["st"]) {
            echo twig_escape_filter($this->env, $context["st"], "html", null, true);
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
            echo " Aucun statut";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['st'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</span><br />
\t\t\t\t\t\t\t\tInscrit à la JE ?<br/>
\t\t\t\t\t\t\t\t<span class=\"light padd\">";
        // line 29
        if ($this->getAttribute((isset($context["u"]) ? $context["u"] : null), "inscrit", array())) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</span><br />
\t\t\t\t\t\t\t\t";
        // line 30
        if ($this->getAttribute((isset($context["u"]) ? $context["u"] : null), "inscrit", array())) {
            echo "Inscrit le<br/>
\t\t\t\t\t\t\t\t<span class=\"light padd\">";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "inscritLe", array()), "j M Y"), "html", null, true);
            echo "</span><br />";
        }
        // line 32
        echo "\t\t\t\t\t\t\t\tPromo<br/>
\t\t\t\t\t\t\t\t<span class=\"light padd\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "promo", array()), "html", null, true);
        echo "</span><br />
\t\t\t\t\t\t\t\tNuméro de sécurité sociale<br/>
\t\t\t\t\t\t\t\t<span class=\"light padd\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "numSecu", array()), "html", null, true);
        echo "</span> <br />
\t\t\t\t\t\t\t\tCentre de sécurité sociale<br/>
\t\t\t\t\t\t\t\t<span class=\"light padd\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "centreSecu", array()), "html", null, true);
        echo "</span> <br />
\t\t\t\t\t\t\t\tVille<br/>
\t\t\t\t\t\t\t\t<span class=\"light padd\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "ville", array()), "html", null, true);
        echo "</span> <br />
\t\t\t\t\t\t\t\tRIB (code banque)<br/>
\t\t\t\t\t\t\t\t<span class=\"light padd\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "codeBanque", array()), "html", null, true);
        echo "</span> <br />
\t\t\t\t\t\t\t\tRIB (code guichet)<br/>
\t\t\t\t\t\t\t\t<span class=\"light padd\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "codeGuichet", array()), "html", null, true);
        echo "</span> <br />
\t\t\t\t\t\t\t\tRIB (compte)<br/>
\t\t\t\t\t\t\t\t<span class=\"light padd\">";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "compte", array()), "html", null, true);
        echo "</span> <br />
\t\t\t\t\t\t\t\tRIB (clé)<br/>
\t\t\t\t\t\t\t\t<span class=\"light padd\">";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "cle", array()), "html", null, true);
        echo "</span> <br />
\t\t\t\t\t\t\t\tRIB (domiciliation)<br/>
\t\t\t\t\t\t\t\t<span class=\"light padd\">";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "domiciliation", array()), "html", null, true);
        echo "</span> <br />
\t\t\t\t\t\t\t\tRIB (titulaire)<br/>
\t\t\t\t\t\t\t\t<span class=\"light padd\">";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "titulaire", array()), "html", null, true);
        echo "</span> <br />
\t\t\t\t\t\t\t\tRIB (IBAN)<br/>
\t\t\t\t\t\t\t\t<span class=\"light padd\">";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "iban", array()), "html", null, true);
        echo "</span> <br />
\t\t\t\t\t\t\t\tRIB (bic)<br/>
\t\t\t\t\t\t\t\t<span class=\"light padd\">";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "bic", array()), "html", null, true);
        echo "</span> <br />
\t\t\t\t\t\t\t\tNationalité<br/>
\t\t\t\t\t\t\t\t<span class=\"light padd\">";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["u"]) ? $context["u"] : null), "nationalite", array()), "html", null, true);
        echo "</span> <br />
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h3>Modifier</h3>
\t\t\t\t\t\t\t\t";
        // line 61
        if ($this->env->getExtension('security')->isGranted("ROLE_RH")) {
            // line 62
            echo "\t\t\t\t\t\t\t\t";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : null), 'form_start');
            echo "

\t\t\t\t\t\t\t\t";
            // line 64
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : null), 'errors');
            echo "

\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "inscrit", array()), 'label', array("label" => "Inscrit"));
            echo "

\t\t\t\t\t\t\t\t\t";
            // line 69
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "inscrit", array()), 'errors');
            echo "

\t\t\t\t\t\t\t\t\t\t";
            // line 71
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "inscrit", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t";
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "inscritLe", array()), 'label', array("label" => "Date"));
            echo "

\t\t\t\t\t\t\t\t\t";
            // line 76
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "inscritLe", array()), 'errors');
            echo "
\t\t\t\t\t\t\t\t\t\t";
            // line 77
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "inscritLe", array()), 'widget');
            echo "
\t\t\t\t\t\t\t\t</div><br/>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
            // line 80
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "phone", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Numéro de téléphone"));
            echo "

\t\t\t\t\t\t\t\t\t";
            // line 82
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "phone", array()), 'errors');
            echo "

\t\t\t\t\t\t\t\t\t<div class=\"row col-md-10 col-md-offset-1\">
\t\t\t\t\t\t\t\t\t\t";
            // line 85
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "phone", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
            // line 89
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "email", array()), 'label', array("label_attr" => array("class" => "control-label row  col-md-10"), "label" => "Email"));
            echo "

\t\t\t\t\t\t\t\t\t";
            // line 91
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "email", array()), 'errors');
            echo "

\t\t\t\t\t\t\t\t\t<div class=\"row col-md-10 col-md-offset-1\">
\t\t\t\t\t\t\t\t\t\t";
            // line 94
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
            // line 98
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "numSecu", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Numéro de sécurité sociale"));
            echo "

\t\t\t\t\t\t\t\t\t";
            // line 100
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "numSecu", array()), 'errors');
            echo "

\t\t\t\t\t\t\t\t\t<div class=\"row col-md-10 col-md-offset-1\">
\t\t\t\t\t\t\t\t\t\t";
            // line 103
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "numSecu", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
            // line 107
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "centreSecu", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Centre de sécurité sociale"));
            echo "

\t\t\t\t\t\t\t\t\t";
            // line 109
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "centreSecu", array()), 'errors');
            echo "

\t\t\t\t\t\t\t\t\t<div class=\"row col-md-10 col-md-offset-1\">
\t\t\t\t\t\t\t\t\t\t";
            // line 112
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "centreSecu", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
            // line 116
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "ville", array()), 'label', array("label_attr" => array("class" => "control-label row  col-md-10"), "label" => "Ville"));
            echo "

\t\t\t\t\t\t\t\t\t";
            // line 118
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "ville", array()), 'errors');
            echo "

\t\t\t\t\t\t\t\t\t<div class=\"row col-md-10 col-md-offset-1\">
\t\t\t\t\t\t\t\t\t\t";
            // line 121
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
            // line 125
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "codeBanque", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "RIB (code banque)"));
            echo "

\t\t\t\t\t\t\t\t\t";
            // line 127
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "codeBanque", array()), 'errors');
            echo "

\t\t\t\t\t\t\t\t\t<div class=\"row col-md-10 col-md-offset-1\">
\t\t\t\t\t\t\t\t\t\t";
            // line 130
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "codeBanque", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
            // line 134
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "codeGuichet", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "RIB (code guichet)"));
            echo "

\t\t\t\t\t\t\t\t\t";
            // line 136
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "codeGuichet", array()), 'errors');
            echo "

\t\t\t\t\t\t\t\t\t<div class=\"row col-md-10 col-md-offset-1\">
\t\t\t\t\t\t\t\t\t\t";
            // line 139
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "codeGuichet", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
            // line 143
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "compte", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "RIB (compte)"));
            echo "

\t\t\t\t\t\t\t\t\t";
            // line 145
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "compte", array()), 'errors');
            echo "

\t\t\t\t\t\t\t\t\t<div class=\"row col-md-10 col-md-offset-1\">
\t\t\t\t\t\t\t\t\t\t";
            // line 148
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "compte", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
            // line 152
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "cle", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "RIB (clé)"));
            echo "

\t\t\t\t\t\t\t\t\t";
            // line 154
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "cle", array()), 'errors');
            echo "

\t\t\t\t\t\t\t\t\t<div class=\"row col-md-10 col-md-offset-1\">
\t\t\t\t\t\t\t\t\t\t";
            // line 157
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "cle", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
            // line 161
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "domiciliation", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "RIB (domiciliation)"));
            echo "

\t\t\t\t\t\t\t\t\t";
            // line 163
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "domiciliation", array()), 'errors');
            echo "

\t\t\t\t\t\t\t\t\t<div class=\"row col-md-10 col-md-offset-1\">
\t\t\t\t\t\t\t\t\t\t";
            // line 166
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "domiciliation", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
            // line 170
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "titulaire", array()), 'label', array("label_attr" => array("class" => " control-label"), "label" => "RIB (titulaire)"));
            echo "

\t\t\t\t\t\t\t\t\t";
            // line 172
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "titulaire", array()), 'errors');
            echo "

\t\t\t\t\t\t\t\t\t<div class=\"row col-md-10 col-md-offset-1\">
\t\t\t\t\t\t\t\t\t\t";
            // line 175
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "titulaire", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
            // line 179
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "iban", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "RIB (IBAN)"));
            echo "

\t\t\t\t\t\t\t\t\t";
            // line 181
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "iban", array()), 'errors');
            echo "

\t\t\t\t\t\t\t\t\t<div class=\"row col-md-10 col-md-offset-1\">
\t\t\t\t\t\t\t\t\t\t";
            // line 184
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "iban", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
            // line 188
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "bic", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "RIB (BIC)"));
            echo "

\t\t\t\t\t\t\t\t\t";
            // line 190
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "bic", array()), 'errors');
            echo "

\t\t\t\t\t\t\t\t\t<div class=\"row col-md-10 col-md-offset-1\">
\t\t\t\t\t\t\t\t\t\t";
            // line 193
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "bic", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
            // line 197
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "nationalite", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nationalité"));
            echo "

\t\t\t\t\t\t\t\t\t";
            // line 199
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "nationalite", array()), 'errors');
            echo "

\t\t\t\t\t\t\t\t\t<div class=\"row col-md-10 col-md-offset-1\">
\t\t\t\t\t\t\t\t\t\t";
            // line 202
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "nationalite", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 207
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
            echo "


\t\t\t\t\t\t\t\t";
            // line 210
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : null), 'rest');
            echo "

\t\t\t\t  
\t\t\t\t\t\t\t\t";
            // line 213
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : null), 'form_end');
            echo "
\t\t\t\t\t\t\t\t";
        }
        // line 215
        echo "\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"well\"><h3>Ses missions en tant que chef de projet</h3>
\t\t\t\t\t<hr>
\t\t\t\t\t";
        // line 220
        if ((isset($context["listeMissionsCDP"]) ? $context["listeMissionsCDP"] : null)) {
            // line 221
            echo "\t\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t\t\t<th>Etat</th>
\t\t\t\t\t\t\t<th>Plus d'infos</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
            // line 230
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeMissionsCDP"]) ? $context["listeMissionsCDP"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
                // line 231
                echo "\t\t\t\t\t\t\t<tr class=\"\">
\t\t\t\t\t\t\t\t<td>";
                // line 232
                echo twig_escape_filter($this->env, $this->getAttribute($context["mission"], "nom", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 233
                echo twig_escape_filter($this->env, $this->getAttribute($context["mission"], "etat", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td><a href=\"";
                // line 234
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_mission", array("id" => $this->getAttribute($context["mission"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-xs\">Détails  &raquo;</a></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t\t";
        } else {
            // line 240
            echo "\t\t\t\t\t\tCet utilisateur n'a pas encore réalisé de mission en tant que chef de projet.
\t\t\t\t\t";
        }
        // line 242
        echo "\t\t\t\t\t<br/><br/></div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"well\"><h3>Ses missions en tant qu'intervenant</h3>
\t\t\t\t\t<hr>
\t\t\t\t\t";
        // line 246
        if ((isset($context["listeMissionsINT"]) ? $context["listeMissionsINT"] : null)) {
            // line 247
            echo "\t\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t\t\t<th>Etat</th>
\t\t\t\t\t\t\t<th>Plus d'infos</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
            // line 256
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeMissionsCDP"]) ? $context["listeMissionsCDP"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["mission"]) {
                // line 257
                echo "\t\t\t\t\t\t\t<tr class=\"\">
\t\t\t\t\t\t\t\t<td>";
                // line 258
                echo twig_escape_filter($this->env, $this->getAttribute($context["mission"], "nom", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 259
                echo twig_escape_filter($this->env, $this->getAttribute($context["mission"], "etat", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td><a href=\"";
                // line 260
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("junior_siteinterne_mission", array("id" => $this->getAttribute($context["mission"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-xs\">Détails  &raquo;</a></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 263
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t\t";
        } else {
            // line 266
            echo "\t\t\t\t\t\tCet utilisateur n'a pas encore réalisé de mission en tant qu'intervenant.
\t\t\t\t\t";
        }
        // line 268
        echo "\t\t\t\t\t\t<br />
\t\t\t\t\t\t</div></div>
\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t<h3>Remarques</h3>
\t\t\t\t\t\t\t\t";
        // line 273
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) ? $context["commentaires"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 274
            echo "\t\t\t\t\t\t\t\t<span style=\"font-weight:bold;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "ajoutePar", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["com"], "ajoutePar", array()), "lastName", array()), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["com"], "contenu", array()), "html", null, true);
            echo "<br/><span class=\"light\">  ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["com"], "ajouteLe", array()), "j M Y, H\\hi"), "html", null, true);
            echo "</span><br/><br/>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 276
        echo "\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t";
        // line 278
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

\t\t\t\t\t\t\t\t";
        // line 280
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
        // line 283
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contenu", array()), 'label', array("label_attr" => array("class" => "col-sm-4 col-sm-offset-1 control-label"), "label" => "Commentaire"));
        echo "

\t\t\t\t\t\t\t\t\t";
        // line 285
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contenu", array()), 'errors');
        echo "

\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t";
        // line 288
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "contenu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-sm-offset-4\">
\t\t\t\t\t\t\t\t\t\t";
        // line 294
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t";
        // line 299
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

\t\t\t\t  
\t\t\t\t\t\t\t\t";
        // line 302
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</section>
";
    }

    public function getTemplateName()
    {
        return "JuniorSiteinterneBundle:Siteinterne:user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  710 => 302,  704 => 299,  696 => 294,  687 => 288,  681 => 285,  676 => 283,  670 => 280,  665 => 278,  661 => 276,  646 => 274,  642 => 273,  635 => 268,  631 => 266,  626 => 263,  617 => 260,  613 => 259,  609 => 258,  606 => 257,  602 => 256,  591 => 247,  589 => 246,  583 => 242,  579 => 240,  574 => 237,  565 => 234,  561 => 233,  557 => 232,  554 => 231,  550 => 230,  539 => 221,  537 => 220,  530 => 215,  525 => 213,  519 => 210,  513 => 207,  505 => 202,  499 => 199,  494 => 197,  487 => 193,  481 => 190,  476 => 188,  469 => 184,  463 => 181,  458 => 179,  451 => 175,  445 => 172,  440 => 170,  433 => 166,  427 => 163,  422 => 161,  415 => 157,  409 => 154,  404 => 152,  397 => 148,  391 => 145,  386 => 143,  379 => 139,  373 => 136,  368 => 134,  361 => 130,  355 => 127,  350 => 125,  343 => 121,  337 => 118,  332 => 116,  325 => 112,  319 => 109,  314 => 107,  307 => 103,  301 => 100,  296 => 98,  289 => 94,  283 => 91,  278 => 89,  271 => 85,  265 => 82,  260 => 80,  254 => 77,  250 => 76,  245 => 74,  239 => 71,  234 => 69,  229 => 67,  223 => 64,  217 => 62,  215 => 61,  208 => 57,  203 => 55,  198 => 53,  193 => 51,  188 => 49,  183 => 47,  178 => 45,  173 => 43,  168 => 41,  163 => 39,  158 => 37,  153 => 35,  148 => 33,  145 => 32,  141 => 31,  137 => 30,  129 => 29,  88 => 27,  83 => 25,  78 => 23,  69 => 16,  66 => 15,  58 => 11,  55 => 10,  48 => 7,  45 => 6,  34 => 4,  31 => 3,);
    }
}
