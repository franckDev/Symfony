<?php

/* ::layout.html.twig */
class __TwigTemplate_35693c6298d4db545062b6028ad4c29c5e8f44a8058766683e98f56871eab5ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97500f6f921ae1e87573c0f518561cc5572ab31cafc04297a778cf910fcfc610 = $this->env->getExtension("native_profiler");
        $__internal_97500f6f921ae1e87573c0f518561cc5572ab31cafc04297a778cf910fcfc610->enter($__internal_97500f6f921ae1e87573c0f518561cc5572ab31cafc04297a778cf910fcfc610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t\t<title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t\t";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "\t</head>

\t<body>
\t\t<div class=\"container\">
\t\t    <div id=\"header\" class=\"jumbotron\">
\t\t      \t<h1>Ma plateforme d'annonces</h1>
\t\t\t    <p>
\t\t\t        Ce projet est propulsé par Symfony2,
\t\t\t        et construit grâce au MOOC OpenClassrooms et SensioLabs.
\t\t\t    </p>
\t\t\t    <p>
\t\t\t        <a class=\"btn btn-primary btn-lg\" href=\"http://fr.openclassrooms.com/informatique/cours/developpez-votre-site-web-avec-le-framework-symfony2\">
\t\t\t          Participer au MOOC »
\t\t\t        </a>
\t\t\t     </p>
\t\t    </div>

\t\t    <div class=\"row\">
\t\t      \t<div id=\"menu\" class=\"col-md-3\">
\t\t        \t<h3>Les annonces</h3>
\t\t\t        <ul class=\"nav nav-pills nav-stacked\">
\t\t\t          <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("fc_platform_home");
        echo "\">Accueil</a></li>
\t\t\t          <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("fc_platform_add");
        echo "\">Ajouter une annonce</a></li>
\t\t\t        </ul>

\t\t        \t\t<h4>Dernières annonces</h4>
\t\t        \t\t";
        // line 41
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
\t\t      \t</div>
\t\t     \t<div id=\"content\" class=\"col-md-9\">
\t\t        \t";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "\t\t      \t</div>
\t\t    </div>

\t\t    <hr>

\t\t    <footer>
\t\t      <p>The sky's the limit © ";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
\t\t    </footer>
\t\t</div>
\t\t";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "\t</body>\t
</html>";
        
        $__internal_97500f6f921ae1e87573c0f518561cc5572ab31cafc04297a778cf910fcfc610->leave($__internal_97500f6f921ae1e87573c0f518561cc5572ab31cafc04297a778cf910fcfc610_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_66c11f3f902791fdc3f81c6624495f1c476912e1844857d9b219ce7e7552893b = $this->env->getExtension("native_profiler");
        $__internal_66c11f3f902791fdc3f81c6624495f1c476912e1844857d9b219ce7e7552893b->enter($__internal_66c11f3f902791fdc3f81c6624495f1c476912e1844857d9b219ce7e7552893b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FC Plateforme";
        
        $__internal_66c11f3f902791fdc3f81c6624495f1c476912e1844857d9b219ce7e7552893b->leave($__internal_66c11f3f902791fdc3f81c6624495f1c476912e1844857d9b219ce7e7552893b_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d8e24de04d021fa70bd465472675c68f75fa2d81419536e5668d56550cbc9461 = $this->env->getExtension("native_profiler");
        $__internal_d8e24de04d021fa70bd465472675c68f75fa2d81419536e5668d56550cbc9461->enter($__internal_d8e24de04d021fa70bd465472675c68f75fa2d81419536e5668d56550cbc9461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "\t\t\t";
        // line 13
        echo "\t\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
\t\t";
        
        $__internal_d8e24de04d021fa70bd465472675c68f75fa2d81419536e5668d56550cbc9461->leave($__internal_d8e24de04d021fa70bd465472675c68f75fa2d81419536e5668d56550cbc9461_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_d54c9fcbb94c4769735b673a5cd1d7f8f1bf6d3028a1b68f952987206a8eb0b8 = $this->env->getExtension("native_profiler");
        $__internal_d54c9fcbb94c4769735b673a5cd1d7f8f1bf6d3028a1b68f952987206a8eb0b8->enter($__internal_d54c9fcbb94c4769735b673a5cd1d7f8f1bf6d3028a1b68f952987206a8eb0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 45
        echo "\t\t        \t";
        
        $__internal_d54c9fcbb94c4769735b673a5cd1d7f8f1bf6d3028a1b68f952987206a8eb0b8->leave($__internal_d54c9fcbb94c4769735b673a5cd1d7f8f1bf6d3028a1b68f952987206a8eb0b8_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a7fb385b1e16947b591f5138caf7235efddcb046697e1675d9d63d48c5f1c295 = $this->env->getExtension("native_profiler");
        $__internal_a7fb385b1e16947b591f5138caf7235efddcb046697e1675d9d63d48c5f1c295->enter($__internal_a7fb385b1e16947b591f5138caf7235efddcb046697e1675d9d63d48c5f1c295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "\t\t\t";
        // line 57
        echo "\t\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
\t\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
\t\t";
        
        $__internal_a7fb385b1e16947b591f5138caf7235efddcb046697e1675d9d63d48c5f1c295->leave($__internal_a7fb385b1e16947b591f5138caf7235efddcb046697e1675d9d63d48c5f1c295_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 57,  155 => 56,  149 => 55,  142 => 45,  136 => 44,  128 => 13,  126 => 12,  120 => 11,  108 => 9,  100 => 60,  98 => 55,  92 => 52,  84 => 46,  82 => 44,  76 => 41,  69 => 37,  65 => 36,  42 => 15,  40 => 11,  35 => 9,  26 => 2,);
    }
}
/* {# app/Resources/views/layout.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<meta charset="UTF-8">*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/* 		<title>{% block title %}FC Plateforme{% endblock %}</title>*/
/* */
/* 		{% block stylesheets %}*/
/* 			{# On charge le CSS de bootstrap depuis le site directement #}*/
/* 			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/* 		{% endblock %}*/
/* 	</head>*/
/* */
/* 	<body>*/
/* 		<div class="container">*/
/* 		    <div id="header" class="jumbotron">*/
/* 		      	<h1>Ma plateforme d'annonces</h1>*/
/* 			    <p>*/
/* 			        Ce projet est propulsé par Symfony2,*/
/* 			        et construit grâce au MOOC OpenClassrooms et SensioLabs.*/
/* 			    </p>*/
/* 			    <p>*/
/* 			        <a class="btn btn-primary btn-lg" href="http://fr.openclassrooms.com/informatique/cours/developpez-votre-site-web-avec-le-framework-symfony2">*/
/* 			          Participer au MOOC »*/
/* 			        </a>*/
/* 			     </p>*/
/* 		    </div>*/
/* */
/* 		    <div class="row">*/
/* 		      	<div id="menu" class="col-md-3">*/
/* 		        	<h3>Les annonces</h3>*/
/* 			        <ul class="nav nav-pills nav-stacked">*/
/* 			          <li><a href="{{ path('fc_platform_home') }}">Accueil</a></li>*/
/* 			          <li><a href="{{ path('fc_platform_add') }}">Ajouter une annonce</a></li>*/
/* 			        </ul>*/
/* */
/* 		        		<h4>Dernières annonces</h4>*/
/* 		        		{{ render(controller("FCPlatformBundle:Advert:menu", {'limit': 3})) }}*/
/* 		      	</div>*/
/* 		     	<div id="content" class="col-md-9">*/
/* 		        	{% block body %}*/
/* 		        	{% endblock %}*/
/* 		      	</div>*/
/* 		    </div>*/
/* */
/* 		    <hr>*/
/* */
/* 		    <footer>*/
/* 		      <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>*/
/* 		    </footer>*/
/* 		</div>*/
/* 		{% block javascripts %}*/
/* 			{# Ajoutez ces lignes Javascript si vous comptez vous servir des fonctionnalités du Bootstrap Twitter #}*/
/* 			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>*/
/* 			<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/* 		{% endblock %}*/
/* 	</body>	*/
/* </html>*/
