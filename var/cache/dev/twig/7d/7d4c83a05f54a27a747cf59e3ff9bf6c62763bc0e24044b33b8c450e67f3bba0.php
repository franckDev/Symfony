<?php

/* CoreBundle:Home:contact.html.twig */
class __TwigTemplate_2c13398044dfcb0db7125e913da35d3ef511907c29c74bdd3b206c4f0f5bf410 extends Twig_Template
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
        $__internal_e2a99f733fd76b5bf73cc1fda501a01d813348924367ea0acea1e5fa8c261c1a = $this->env->getExtension("native_profiler");
        $__internal_e2a99f733fd76b5bf73cc1fda501a01d813348924367ea0acea1e5fa8c261c1a->enter($__internal_e2a99f733fd76b5bf73cc1fda501a01d813348924367ea0acea1e5fa8c261c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Home:contact.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>Contact</title>
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
\t\t<style>
\t\t\tp.bg-success{font-size:1em;height: 50px;background-color: #D7F3FC;border: 1px solid #5A87BA;color:#0096FF;text-align: center;line-height: 48px;margin-top:50%;margin-bottom:50%;}
\t\t</style>
\t</head>
\t<body>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6 col-md-offset-3\">
\t\t\t\t<p class=\"bg-success\">Message flash : La page de contact n'est pas encore disponible, merci de revenir plus tard.</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6 col-md-offset-3\">
\t\t\t\t<a class=\"btn btn-primary\" href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("corebundle_home");
        echo "\">Retour</a>
\t\t\t</div>
\t\t</div>
\t</body>\t
</html>";
        
        $__internal_e2a99f733fd76b5bf73cc1fda501a01d813348924367ea0acea1e5fa8c261c1a->leave($__internal_e2a99f733fd76b5bf73cc1fda501a01d813348924367ea0acea1e5fa8c261c1a_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle:Home:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 20,  22 => 2,);
    }
}
/* {# src/CoreBundle/Resources/views/Home/contact.html.twig #}*/
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<meta charset="UTF-8">*/
/* 		<title>Contact</title>*/
/* 		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/* 		<style>*/
/* 			p.bg-success{font-size:1em;height: 50px;background-color: #D7F3FC;border: 1px solid #5A87BA;color:#0096FF;text-align: center;line-height: 48px;margin-top:50%;margin-bottom:50%;}*/
/* 		</style>*/
/* 	</head>*/
/* 	<body>*/
/* 		<div class="row">*/
/* 			<div class="col-md-6 col-md-offset-3">*/
/* 				<p class="bg-success">Message flash : La page de contact n'est pas encore disponible, merci de revenir plus tard.</p>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="row">*/
/* 			<div class="col-md-6 col-md-offset-3">*/
/* 				<a class="btn btn-primary" href="{{ path('corebundle_home') }}">Retour</a>*/
/* 			</div>*/
/* 		</div>*/
/* 	</body>	*/
/* </html>*/
