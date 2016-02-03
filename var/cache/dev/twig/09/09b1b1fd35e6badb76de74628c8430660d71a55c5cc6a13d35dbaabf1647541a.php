<?php

/* CoreBundle::layout.html.twig */
class __TwigTemplate_cd124e3efc8c8d4f9d4ba14ebb8a2e91cc393b1e763568eddca5872c69cb9627 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75de99c48af86986693111dcc6ae55a7075c78f2515ec34c070b3a4e3247a990 = $this->env->getExtension("native_profiler");
        $__internal_75de99c48af86986693111dcc6ae55a7075c78f2515ec34c070b3a4e3247a990->enter($__internal_75de99c48af86986693111dcc6ae55a7075c78f2515ec34c070b3a4e3247a990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle::layout.html.twig"));

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
\t\t\t\t<h1>";
        // line 20
        $this->displayBlock('header', $context, $blocks);
        echo "</h1>
\t\t\t</div>

\t\t    <div class=\"row\">
\t\t      \t<div id=\"menu\" class=\"col-md-3\">
\t\t        \t<h3>Les annonces</h3>
\t\t\t        <ul class=\"nav nav-pills nav-stacked\">
\t\t\t          <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("corebundle_home");
        echo "\">Accueil</a></li>
\t\t\t          <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("fc_platform_add");
        echo "\">Ajouter une annonce</a></li>
\t\t\t          <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("corebundle_contact");
        echo "\">Contact</a></li>
\t\t\t        </ul>

\t\t        \t\t<h4>Dernières annonces</h4>
\t\t        \t\t";
        // line 33
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
\t\t      \t</div>
\t\t     \t<div id=\"content\" class=\"col-md-9\">
\t\t        \t";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "\t\t      \t</div>
\t\t    </div>

\t\t    <hr>

\t\t    <footer>
\t\t      <p>";
        // line 44
        $this->displayBlock('footer', $context, $blocks);
        echo "</p>
\t\t    </footer>
\t\t</div>
\t\t";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "\t</body>\t
</html>";
        
        $__internal_75de99c48af86986693111dcc6ae55a7075c78f2515ec34c070b3a4e3247a990->leave($__internal_75de99c48af86986693111dcc6ae55a7075c78f2515ec34c070b3a4e3247a990_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_45e0a01e498729d3e1b133af3ebce85a3dc0a8f31b35d8193ac35639a69b62b5 = $this->env->getExtension("native_profiler");
        $__internal_45e0a01e498729d3e1b133af3ebce85a3dc0a8f31b35d8193ac35639a69b62b5->enter($__internal_45e0a01e498729d3e1b133af3ebce85a3dc0a8f31b35d8193ac35639a69b62b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "FC Plateforme";
        
        $__internal_45e0a01e498729d3e1b133af3ebce85a3dc0a8f31b35d8193ac35639a69b62b5->leave($__internal_45e0a01e498729d3e1b133af3ebce85a3dc0a8f31b35d8193ac35639a69b62b5_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d373eea3a2cbce37f9565ddf84c2e67c9bcdd7942837ca2528b49098e5d8583f = $this->env->getExtension("native_profiler");
        $__internal_d373eea3a2cbce37f9565ddf84c2e67c9bcdd7942837ca2528b49098e5d8583f->enter($__internal_d373eea3a2cbce37f9565ddf84c2e67c9bcdd7942837ca2528b49098e5d8583f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "\t\t\t";
        // line 13
        echo "\t\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
\t\t";
        
        $__internal_d373eea3a2cbce37f9565ddf84c2e67c9bcdd7942837ca2528b49098e5d8583f->leave($__internal_d373eea3a2cbce37f9565ddf84c2e67c9bcdd7942837ca2528b49098e5d8583f_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_ae021e6becf7e78d792db6257ff0cf4d18b6a209d09728439d9eb50cb3db7c94 = $this->env->getExtension("native_profiler");
        $__internal_ae021e6becf7e78d792db6257ff0cf4d18b6a209d09728439d9eb50cb3db7c94->enter($__internal_ae021e6becf7e78d792db6257ff0cf4d18b6a209d09728439d9eb50cb3db7c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo "Ma plateforme d'annonces";
        
        $__internal_ae021e6becf7e78d792db6257ff0cf4d18b6a209d09728439d9eb50cb3db7c94->leave($__internal_ae021e6becf7e78d792db6257ff0cf4d18b6a209d09728439d9eb50cb3db7c94_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_92a69e9223a619752f0300809e3b5fb01c029302ebe456e11b794ff72d14e9df = $this->env->getExtension("native_profiler");
        $__internal_92a69e9223a619752f0300809e3b5fb01c029302ebe456e11b794ff72d14e9df->enter($__internal_92a69e9223a619752f0300809e3b5fb01c029302ebe456e11b794ff72d14e9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "\t\t        \t";
        
        $__internal_92a69e9223a619752f0300809e3b5fb01c029302ebe456e11b794ff72d14e9df->leave($__internal_92a69e9223a619752f0300809e3b5fb01c029302ebe456e11b794ff72d14e9df_prof);

    }

    // line 44
    public function block_footer($context, array $blocks = array())
    {
        $__internal_66265924c0f621908deee0e74b0e98306f91d364a336d20a1a448d41bcc6ac0f = $this->env->getExtension("native_profiler");
        $__internal_66265924c0f621908deee0e74b0e98306f91d364a336d20a1a448d41bcc6ac0f->enter($__internal_66265924c0f621908deee0e74b0e98306f91d364a336d20a1a448d41bcc6ac0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        echo "The sky's the limit © ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.";
        
        $__internal_66265924c0f621908deee0e74b0e98306f91d364a336d20a1a448d41bcc6ac0f->leave($__internal_66265924c0f621908deee0e74b0e98306f91d364a336d20a1a448d41bcc6ac0f_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eee1bcf96c762585e3af79b356b22047105af3870b8accd25cb1f0368c228d58 = $this->env->getExtension("native_profiler");
        $__internal_eee1bcf96c762585e3af79b356b22047105af3870b8accd25cb1f0368c228d58->enter($__internal_eee1bcf96c762585e3af79b356b22047105af3870b8accd25cb1f0368c228d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "\t\t\t";
        // line 49
        echo "\t\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
\t\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
\t\t";
        
        $__internal_eee1bcf96c762585e3af79b356b22047105af3870b8accd25cb1f0368c228d58->leave($__internal_eee1bcf96c762585e3af79b356b22047105af3870b8accd25cb1f0368c228d58_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 49,  181 => 48,  175 => 47,  161 => 44,  154 => 37,  148 => 36,  136 => 20,  128 => 13,  126 => 12,  120 => 11,  108 => 9,  100 => 52,  98 => 47,  92 => 44,  84 => 38,  82 => 36,  76 => 33,  69 => 29,  65 => 28,  61 => 27,  51 => 20,  44 => 15,  42 => 11,  37 => 9,  28 => 2,);
    }
}
/* {# src/CoreBundle/Resources/views/layout.html.twig #}*/
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
/* 				<h1>{% block header %}Ma plateforme d'annonces{% endblock %}</h1>*/
/* 			</div>*/
/* */
/* 		    <div class="row">*/
/* 		      	<div id="menu" class="col-md-3">*/
/* 		        	<h3>Les annonces</h3>*/
/* 			        <ul class="nav nav-pills nav-stacked">*/
/* 			          <li><a href="{{ path('corebundle_home') }}">Accueil</a></li>*/
/* 			          <li><a href="{{ path('fc_platform_add') }}">Ajouter une annonce</a></li>*/
/* 			          <li><a href="{{ path('corebundle_contact') }}">Contact</a></li>*/
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
/* 		      <p>{% block footer %}The sky's the limit © {{ 'now'|date('Y') }} and beyond.{% endblock %}</p>*/
/* 		    </footer>*/
/* 		</div>*/
/* 		{% block javascripts %}*/
/* 			{# Ajoutez ces lignes Javascript si vous comptez vous servir des fonctionnalités du Bootstrap Twitter #}*/
/* 			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>*/
/* 			<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/* 		{% endblock %}*/
/* 	</body>	*/
/* </html>*/
