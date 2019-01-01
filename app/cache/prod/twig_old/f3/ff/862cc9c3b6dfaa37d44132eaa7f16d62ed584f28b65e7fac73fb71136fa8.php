<?php

/* JuniorSiteBundle:Site:activites.html.twig */
class __TwigTemplate_f3ff862cc9c3b6dfaa37d44132eaa7f16d62ed584f28b65e7fac73fb71136fa8 extends Twig_Template
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
        echo "<div id=\"portfolio\" class=\"color white\">\t
\t<div class=\"container\">
\t\t<div class=\"wrapper span12\">
\t
\t\t<div id=\"page-title\">
\t\t\t<div id=\"page-title-inner\">
\t\t\t\t<h2><span>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nos activités"), "html", null, true);
        echo "</span></h2>
\t\t\t</div>\t
\t\t</div>

\t\t<div id=\"filters\">
\t\t\t<ul class=\"option-set\" data-option-key=\"filter\">
\t\t\t\t<li><a href=\"#filter\" class=\"selected\" data-option-value=\".intervention\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nos secteurs d'interventions"), "html", null, true);
        echo "</a></li>
\t\t\t\t<li>/</li>
\t\t\t\t<li><a href=\"#filter\" data-option-value=\".demarche\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Notre démarche"), "html", null, true);
        echo "</a></li>
\t\t\t\t<li>/</li>
\t\t\t\t<li><a href=\"#filter\" data-option-value=\".specificite\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nos spécifités"), "html", null, true);
        echo "</a></li>
\t\t\t\t<li>/</li>
\t\t\t\t<li><a href=\"#filter\" data-option-value=\".extrapol\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Partenariat eXtraPol"), "html", null, true);
        echo "</a></li>
\t\t\t</ul>
\t\t</div>
\t\t\t\t
\t\t<div id=\"portfolio-wrapper\" class=\"row-fluid\">
\t\t\t\t
\t\t\t<div class=\"span12 intervention\" style=\"margin-bottom : 30px; margin-left : 0px;\">
\t\t\t 
\t\t\t<div class=\"row-fluid\">
\t\t\t
\t\t\t<div class=\"imageWrapper span7\">
\t\t\t\t<a href=\"#\" onmouseenter=\"Animation1();\" onmouseleave=\"Animation1o();\"><img id=\"comp1\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/comp1.png"), "html", null, true);
        echo "\" alt=\"Nos compétences\" title=\"Nos compétences\" /></a>
\t\t\t\t<a href=\"#\" onmouseenter=\"Animation2();\" onmouseleave=\"Animation2o();\"><img id=\"comp2\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/comp2.png"), "html", null, true);
        echo "\" alt=\"Nos compétences\" title=\"Nos compétences\" /></a>
\t\t\t\t<a href=\"#\" onmouseenter=\"Animation4();\" onmouseleave=\"Animation4o();\"><img id=\"comp4\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/comp4.png"), "html", null, true);
        echo "\" alt=\"Nos compétences\" title=\"Nos compétences\" /></a>
\t\t\t\t<a href=\"#\" onmouseenter=\"Animation3();\" onmouseleave=\"Animation3o();\"><img id=\"comp3\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/comp3.png"), "html", null, true);
        echo "\" alt=\"Nos compétences\" title=\"Nos compétences\" /></a>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"span5\">
\t\t\t\t<div id=\"secteurs-interventions\">
\t\t\t\t\t<h3>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Nos secteurs d'interventions"), "html", null, true);
        echo "</h3>
\t\t\t\t\t<p>
\t\t\t\t\t";
        // line 40
        echo $this->env->getExtension('translator')->getTranslator()->trans("XProjets bénéficie de la polyvalence de l'enseignement fourni à l'Ecole polytechnique, ainsi que de la grande diversité des étudiants sur le campus (2000 intervenants potentiels) pour offrir une gamme de prestations complète centrée sur notre expertise scientifique.", array(), "messages");
        // line 41
        echo "\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"texteWrapper\">
\t\t\t\t<div id=\"texte1\"><p>";
        // line 44
        echo $this->env->getExtension('translator')->getTranslator()->trans("Nous élaborons votre dossier d'éligibilité au crédit impôt recherche.", array(), "messages");
        echo "</p></div>
\t\t\t\t<div id=\"texte2\"><p>";
        // line 45
        echo $this->env->getExtension('translator')->getTranslator()->trans("Etudes de marché pour les innovations scientifiques et les projets de développement économique.", array(), "messages");
        echo "</p></div>
\t\t\t\t<div id=\"texte4\"><p>";
        // line 46
        echo $this->env->getExtension('translator')->getTranslator()->trans("Création de sites internet et développement de logiciels pour votre entreprise.", array(), "messages");
        echo "</p></div>
\t\t\t\t<div id=\"texte3\"><p>";
        // line 47
        echo $this->env->getExtension('translator')->getTranslator()->trans("Ingénierie et sciences appliquées en mathématique, mécanique, chimie et biologie.", array(), "messages");
        echo "</p></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"span12 demarche\" style=\"text-align : justify; margin-bottom : 30px; margin-left : 0px;\">
\t\t\t\t<div >
\t\t\t\t\t<h3>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Notre démarche"), "html", null, true);
        echo "</h3>
\t\t\t\t\t<p>";
        // line 58
        echo $this->env->getExtension('translator')->getTranslator()->trans("Depuis sa création, XProjets s'inscrit dans une démarche de qualité et la satisfaction de nos clients est notre plus grande fierté. Dans ce cadre, de nombreux process ont été mis en vigueur au sein de notre Junior-Entreprise.", array(), "messages");
        echo "</p>
\t\t\t\t\t<p>";
        // line 59
        echo $this->env->getExtension('translator')->getTranslator()->trans("Preuve de notre professionnalisme, nous utilisons une méthodologie fixe qui nous permet de traiter tout type de missions.", array(), "messages");
        echo "</p>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div style=\"text-align : center; margin-top : 30px; margin-bottom : 30px;\">
\t\t\t\t\t<img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/methodologie.png"), "html", null, true);
        echo "\" alt=\"methodologie\" title=\"methodologie\" />
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div id=\"processus\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><strong>";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Prise de contact"), "html", null, true);
        echo "</strong> :
\t\t\t\t\t\t";
        // line 69
        echo $this->env->getExtension('translator')->getTranslator()->trans("Moins de 24h après avoir déposé votre appel d'offre, un chef de projet d'XProjets prend contact avec vous pour répondre à vos questions et comprendre vos besoins dans les moindres détails.", array(), "messages");
        echo "</li>
\t\t\t\t\t\t<li><strong>";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Devis"), "html", null, true);
        echo "</strong> :
\t\t\t\t\t\t";
        // line 71
        echo $this->env->getExtension('translator')->getTranslator()->trans("A la suite de votre premier entretien téléphonique ou de votre première rencontre, le chef de projet en charge de votre étude recherche les étudiants ayant les compétences idoines pour réaliser la mission. Ensemble, ils rédigent une proposition d'intervention ou devis définissant le cahier des charges et l'échéancier correspondant à la mission que vous souhaitez nous confier.", array(), "messages");
        echo "</li>
\t\t\t\t\t\t<li><strong>";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Phase de recherche"), "html", null, true);
        echo "</strong> : 
\t\t\t\t\t\t";
        // line 73
        echo $this->env->getExtension('translator')->getTranslator()->trans("Dès lors que le projet vous satisfait, le chef de projet rédige la convention ou contrat qui lie XProjets à votre entreprise, convention comprenant notamment une close de confidentialité. Le(s) intervenant(s) recruté(s) et préparé(s) par le chef de projet se lance(nt) dans une phase de recherche en liaison avec les laboratoires de l'Ecole polytechnique. Suivi au quotidien par le chef de projet, il(s) réalise(nt) des points d'avancement réguliers avec vous.", array(), "messages");
        echo "</li>
\t\t\t\t\t\t<li><strong>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Remise du produit fini"), "html", null, true);
        echo "</strong> :
\t\t\t\t\t\t";
        // line 75
        echo $this->env->getExtension('translator')->getTranslator()->trans("Conformément à l'échéancier mis en place dans la convention, le livrable vous est remis à temps par le chef de projet et le(s) intervenant(s). Accompagné d'explications, le suivi du produit peut également être réalisé pendant plusieurs mois après sa remise en main propre.", array(), "messages");
        echo "</li>
\t\t\t\t\t\t<li><strong>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Débriefing"), "html", null, true);
        echo "</strong> : 
\t\t\t\t\t\t";
        // line 77
        echo $this->env->getExtension('translator')->getTranslator()->trans("A l'issue de la mission, un questionnaire qualité vous est remis et nous permet d'améliorer notre démarche au quotidien. Par ailleurs, le chef de projet réalise un débriefing complet du déroulement de la mission avec le(s) intervenant(s) dans un souci d amélioration continue.", array(), "messages");
        // line 78
        echo "\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t
\t\t\t</div>\t\t\t

\t\t\t<div class=\"span12 specificite\" style=\"text-align : justify; margin-bottom : 30px; margin-left : 0px;\" >
\t\t\t
\t\t\t<div class=\"row-fluid\">
\t\t\t
\t\t\t\t<div class=\"span6\">
\t\t\t\t<h3>";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Dynamisme"), "html", null, true);
        echo "</h3> 
\t\t\t\t\t<p>";
        // line 90
        echo $this->env->getExtension('translator')->getTranslator()->trans("Rapidité et efficacité sont les maîtres mots. Sous 24h, nous établissons un premier contact et nous nous engageons à vous fournir un devis sous 8 jours.", array(), "messages");
        echo "</p>
\t\t\t\t\t<p>";
        // line 91
        echo $this->env->getExtension('translator')->getTranslator()->trans("Avec XProjets, vous bénéficiez de la flexibilité et de la réactivité d'une petite structure. Nous prenons vos demandes en compte instantanément.", array(), "messages");
        echo "</p>
\t\t\t\t\t<img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/photo_dynamisme.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t<div class=\"span6\">
\t\t\t\t<h3>";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Performance"), "html", null, true);
        echo "</h3> 
\t\t\t\t\t<p>";
        // line 97
        echo $this->env->getExtension('translator')->getTranslator()->trans("Les produits livrés sont à forte valeur ajoutée et correspondent à la mise en pratique de la créativité et la qualité du travail des élèves ingénieurs polytechniciens. XProjets a ainsi développé une expertise dans le conseil en innovation, le développement d'outils informatiques, de solutions Web, de prototypes en mécanique et en physique, mais également dans la réalisation d'études de marché.", array(), "messages");
        echo "</p>

\t\t\t\t\t<p>";
        // line 99
        echo $this->env->getExtension('translator')->getTranslator()->trans("XProjets offre des prestations aux tarifs les plus bas, 35 euros HT, par heure de travail effective.", array(), "messages");
        echo "</p>
\t\t\t\t\t<div style=\"text-align : center\">
\t\t\t\t\t<a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("downloads/plaquette.pdf"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/plaquette_xprojets.png"), "html", null, true);
        echo "\" /></a>
\t\t\t\t\t<p>";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Notre plaquette"), "html", null, true);
        echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"span12 extrapol\" style=\"text-align : justify; margin-bottom : 30px; margin-left : 0px; \">
\t\t\t
\t\t\t<div class=\"row-fluid\">
\t\t\t\t<div class=\"span6\">
\t\t\t\t<h3>";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Partenariat eXtraPol"), "html", null, true);
        echo "</h3> 
\t\t\t\t\t<p>";
        // line 114
        echo $this->env->getExtension('translator')->getTranslator()->trans("eXtraPol, association Loi 1901, est la nouvelle marque commune aux Junior-Entreprises de deux prestigieuses écoles : L’Ecole polytechnique et Sciences Po. L'association a pour objet la réalisation de missions de conseil auprès de clients issus du secteur privé (grandes entreprises, associations, fondations) comme de la sphère publique (administrations centrales, collectivités territoriales, think tank, etc).", array(), "messages");
        echo "</p>
\t\t\t\t\t<p>";
        // line 115
        echo $this->env->getExtension('translator')->getTranslator()->trans("Grâce à cette nouvelle marque, vous n’aurez plus à hésiter entre une Junior Ingénieure et une Junior tournée Institutionnel et Commercial pour vos projets de haut niveau.", array(), "messages");
        echo "</p>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t<div class=\"span6\">
\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t
\t\t\t\t\t<div class=\"span8\">
\t\t\t\t\t<img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logos/logo-extrapol.png"), "html", null, true);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"span4\" style=\"text-align : center\">
\t\t\t\t\t<a href=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("downloads/plaquette_extrapol.pdf"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/plaquette_extrapol.png"), "html", null, true);
        echo "\" /></a>
\t\t\t\t\t<p>";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Plaquette eXtraPol"), "html", null, true);
        echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t
\t\t</div>
\t\t\t
\t\t</div>
\t</div>
</div>



















";
    }

    public function getTemplateName()
    {
        return "JuniorSiteBundle:Site:activites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 128,  275 => 127,  268 => 123,  257 => 115,  253 => 114,  249 => 113,  235 => 102,  229 => 101,  224 => 99,  219 => 97,  215 => 96,  208 => 92,  204 => 91,  200 => 90,  196 => 89,  183 => 78,  181 => 77,  177 => 76,  173 => 75,  169 => 74,  165 => 73,  161 => 72,  157 => 71,  153 => 70,  149 => 69,  145 => 68,  137 => 63,  130 => 59,  126 => 58,  122 => 57,  109 => 47,  105 => 46,  101 => 45,  97 => 44,  92 => 41,  90 => 40,  85 => 38,  77 => 33,  73 => 32,  69 => 31,  65 => 30,  51 => 19,  46 => 17,  41 => 15,  36 => 13,  27 => 7,  19 => 1,);
    }
}
