<?php

/* @FCPlatform/layout.html.twig */
class __TwigTemplate_12c309b1ff2a641f1f87c181f032c8f5e78928343bd963699247df291db34c92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "@FCPlatform/layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'fcplatform_body' => array($this, 'block_fcplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_057531dd7f76ab775e95f237c06f4d946df164bfab116c4c3978cc25ccb73cc9 = $this->env->getExtension("native_profiler");
        $__internal_057531dd7f76ab775e95f237c06f4d946df164bfab116c4c3978cc25ccb73cc9->enter($__internal_057531dd7f76ab775e95f237c06f4d946df164bfab116c4c3978cc25ccb73cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FCPlatform/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_057531dd7f76ab775e95f237c06f4d946df164bfab116c4c3978cc25ccb73cc9->leave($__internal_057531dd7f76ab775e95f237c06f4d946df164bfab116c4c3978cc25ccb73cc9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_34ab602af010e926278817618fcb1777b79bfe963be596fa422193a5273cce03 = $this->env->getExtension("native_profiler");
        $__internal_34ab602af010e926278817618fcb1777b79bfe963be596fa422193a5273cce03->enter($__internal_34ab602af010e926278817618fcb1777b79bfe963be596fa422193a5273cce03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tAnnonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_34ab602af010e926278817618fcb1777b79bfe963be596fa422193a5273cce03->leave($__internal_34ab602af010e926278817618fcb1777b79bfe963be596fa422193a5273cce03_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_574955844f99fe6e1572ccf87ca9b51288c86c37e9615ee3e71b169cca080929 = $this->env->getExtension("native_profiler");
        $__internal_574955844f99fe6e1572ccf87ca9b51288c86c37e9615ee3e71b169cca080929->enter($__internal_574955844f99fe6e1572ccf87ca9b51288c86c37e9615ee3e71b169cca080929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
\t";
        // line 12
        echo "\t<h1>Annonces</h1>

\t<hr>

\t";
        // line 17
        echo "\t";
        $this->displayBlock('fcplatform_body', $context, $blocks);
        // line 19
        echo "\t
";
        
        $__internal_574955844f99fe6e1572ccf87ca9b51288c86c37e9615ee3e71b169cca080929->leave($__internal_574955844f99fe6e1572ccf87ca9b51288c86c37e9615ee3e71b169cca080929_prof);

    }

    // line 17
    public function block_fcplatform_body($context, array $blocks = array())
    {
        $__internal_0f7ef4c825317c48a34b19ab8a5fa1e6b1e2db5c6814428aac49e2c3dfa71106 = $this->env->getExtension("native_profiler");
        $__internal_0f7ef4c825317c48a34b19ab8a5fa1e6b1e2db5c6814428aac49e2c3dfa71106->enter($__internal_0f7ef4c825317c48a34b19ab8a5fa1e6b1e2db5c6814428aac49e2c3dfa71106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fcplatform_body"));

        // line 18
        echo "\t";
        
        $__internal_0f7ef4c825317c48a34b19ab8a5fa1e6b1e2db5c6814428aac49e2c3dfa71106->leave($__internal_0f7ef4c825317c48a34b19ab8a5fa1e6b1e2db5c6814428aac49e2c3dfa71106_prof);

    }

    public function getTemplateName()
    {
        return "@FCPlatform/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  78 => 17,  70 => 19,  67 => 17,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/FC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* 	{# On définit un sous-titre commun à toutes les pages du Bundle, par exemple #}*/
/* 	<h1>Annonces</h1>*/
/* */
/* 	<hr>*/
/* */
/* 	{# On définit un nouveau bloc, que les vues du Bundle pourront remplir #}*/
/* 	{% block fcplatform_body %}*/
/* 	{% endblock %}*/
/* 	*/
/* {% endblock %}*/
/* */
