<?php

/* JuniorSiteinterneBundle::layout.html.twig */
class __TwigTemplate_30d244ad2231a0d0715bdf85a92ab2ec86db6a43339488d5547a3b8d2c19b2f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'feuilleStyleAlternative' => array($this, 'block_feuilleStyleAlternative'),
            'titrePage' => array($this, 'block_titrePage'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta name=\"description\" content=\"Site interne d'XProjets'\">
\t\t<meta name=\"author\" content=\"Delbouys\">
\t\t<link rel=\"icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logos/favicon.png"), "html", null, true);
        echo "\">
\t\t<title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/Siteinterne/css/bootstrap.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/Siteinterne/css/carousel.css"), "html", null, true);
        echo "\">
\t\t";
        // line 12
        $this->displayBlock('feuilleStyleAlternative', $context, $blocks);
        // line 13
        echo "\t\t
\t<script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.3.13/angular.min.js\"></script>
\t\t<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t\t<!--[if lt IE 9]>
\t\t  <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
\t\t  <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t\t<![endif]-->
\t</head>

\t<body>
\t\t
\t    <div class=\"navbar-wrapper\">
\t\t  <div class=\"container\">

\t\t\t<nav class=\"navbar navbar-inverse navbar-static-top\">
\t\t\t  <div class=\"container\">
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t  <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t  </button>
\t\t\t\t  <a class=\"navbar-brand\" href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("junior_siteinterne_index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logos/logo-xprojets-menu.png"), "html", null, true);
        echo "\" id=\"logo-barre\" /></a>
\t\t\t\t</div>
\t\t\t\t<div id=\"navbar\" class=\"navbar-collapse collapse\">
\t\t\t\t  <ul class=\"nav navbar-nav\">
\t\t\t\t\t<li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("junior_siteinterne_index");
        echo "\">Accueil</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("junior_siteinterne_index");
        echo "#howto\">Tout sur XProjets</a></li>
\t\t\t\t\t";
        // line 42
        if ($this->env->getExtension('security')->isGranted("ROLE_MBJE")) {
            // line 43
            echo "\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("junior_siteinterne_missions");
            echo "\">Gestion des missions</a></li>
\t\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t\t";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 46
            echo "\t\t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("junior_siteinterne_config");
            echo "\">Configuration</a></li>
\t\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t  </ul>
\t\t\t\t  <ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Bonjour ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "firstName", array()), "html", null, true);
        echo " <span class=\"caret\"></span></a>
\t\t\t\t\t  <ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t<li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Déconnexion</a></li>
\t\t\t\t\t  </ul>
\t\t\t\t\t</li>
\t\t\t\t  </ul>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</nav>

\t\t  </div>
\t\t</div>

\t\t
\t\t<div id=\"myCarousel\" class=\"carousel slide\">
\t\t  <div class=\"carousel-inner\">
\t\t\t<div class=\"item active\">
\t\t\t  <div class=\"container\">
\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t  <h1>";
        // line 70
        $this->displayBlock('titrePage', $context, $blocks);
        echo "</h1>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t  </div>
\t\t</div><!-- /.carousel -->

\t    <div class=\"container marketing\">
\t\t\t";
        // line 78
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "\t\t\t<hr class=\"featurette-divider\">


\t\t  <footer>
\t\t\t<p>&copy; XProjets 2013</p>
\t\t  </footer>

\t\t</div><!-- /.container -->
    

\t<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/docs.min.js"), "html", null, true);
        echo "\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Site interne d'XProjets";
    }

    // line 12
    public function block_feuilleStyleAlternative($context, array $blocks = array())
    {
    }

    // line 70
    public function block_titrePage($context, array $blocks = array())
    {
    }

    // line 78
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "JuniorSiteinterneBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 78,  196 => 70,  191 => 12,  185 => 9,  177 => 93,  172 => 91,  168 => 90,  164 => 89,  152 => 79,  150 => 78,  139 => 70,  119 => 53,  114 => 51,  109 => 48,  103 => 46,  100 => 45,  94 => 43,  92 => 42,  88 => 41,  84 => 40,  75 => 36,  50 => 13,  48 => 12,  44 => 11,  40 => 10,  36 => 9,  32 => 8,  23 => 1,);
    }
}
