<?php

/* JuniorSiteinterneBundle:Security:login.html.twig */
class __TwigTemplate_2edf78d51e8a1e7c1ad2bb2dbab9213d42764f0d106726dba72cef13ef152060 extends Twig_Template
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
\t\t<title>Site interne d'XProjets</title>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/Siteinterne/css/bootstrap.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/Siteinterne/css/carousel.css"), "html", null, true);
        echo "\">
\t</head>

\t<body>
\t\t<section class=\"row\">
\t\t\t<div class=\"col-md-10 col-md-offset-1 page_login\">
\t\t  <h1>Bienvenue sur le site interne d'XProjets</h1>
\t\t\t  ";
        // line 18
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 19
            echo "\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array()), "html", null, true);
            echo "</div>
\t\t\t  ";
        }
        // line 21
        echo "
\t\t\t\t<form action=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" class=\"form-horizontal\">
\t\t\t\t\t<input type=\"hidden\" id =\"username\" name=\"_username\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : null), "username", array()), "html", null, true);
        echo "\" />
\t\t\t\t\t<input type=\"hidden\" id=\"password\" name=\"_password\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : null), "password", array()), "html", null, true);
        echo "\" />
\t\t\t\t\t<br />
\t\t\t\t\t<input class=\"btn btn-default btn-lg\" type=\"submit\" value=\"Connexion (";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : null), "firstName", array()), "html", null, true);
        echo ")\" />
\t\t\t\t  </form>
\t\t\t</div>
\t\t</section>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "JuniorSiteinterneBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 26,  66 => 24,  62 => 23,  58 => 22,  55 => 21,  49 => 19,  47 => 18,  37 => 11,  33 => 10,  28 => 8,  19 => 1,);
    }
}
