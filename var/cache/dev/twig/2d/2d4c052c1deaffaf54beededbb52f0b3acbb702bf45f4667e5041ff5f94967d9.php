<?php

/* FCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_f0fb6dced0fba899bac38713c17da1624d6703470e56e6d6a7a1861cba4e9b99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("FCPlatformBundle::layout.html.twig", "FCPlatformBundle:Advert:add.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fcplatform_body' => array($this, 'block_fcplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dee36e5643d03c3448631a6c68bcf761c5acf7682136e10585f6615855aacfd4 = $this->env->getExtension("native_profiler");
        $__internal_dee36e5643d03c3448631a6c68bcf761c5acf7682136e10585f6615855aacfd4->enter($__internal_dee36e5643d03c3448631a6c68bcf761c5acf7682136e10585f6615855aacfd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dee36e5643d03c3448631a6c68bcf761c5acf7682136e10585f6615855aacfd4->leave($__internal_dee36e5643d03c3448631a6c68bcf761c5acf7682136e10585f6615855aacfd4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b4d9ae2eb0651c463775cca89a7742b96543b0378a987009bb45c0f78dc32d7 = $this->env->getExtension("native_profiler");
        $__internal_1b4d9ae2eb0651c463775cca89a7742b96543b0378a987009bb45c0f78dc32d7->enter($__internal_1b4d9ae2eb0651c463775cca89a7742b96543b0378a987009bb45c0f78dc32d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tAjouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1b4d9ae2eb0651c463775cca89a7742b96543b0378a987009bb45c0f78dc32d7->leave($__internal_1b4d9ae2eb0651c463775cca89a7742b96543b0378a987009bb45c0f78dc32d7_prof);

    }

    // line 9
    public function block_fcplatform_body($context, array $blocks = array())
    {
        $__internal_83ef3aa44f4f81c3cb1264cee2f0551e27e64f5b0ab6727dd5785469fb05d70e = $this->env->getExtension("native_profiler");
        $__internal_83ef3aa44f4f81c3cb1264cee2f0551e27e64f5b0ab6727dd5785469fb05d70e->enter($__internal_83ef3aa44f4f81c3cb1264cee2f0551e27e64f5b0ab6727dd5785469fb05d70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fcplatform_body"));

        // line 10
        echo "
\t<h2>Ajouter une annonce</h2>

\t";
        // line 13
        echo twig_include($this->env, $context, "FCPlatformBundle:Advert:form.html.twig");
        echo "

\t<p>
\t\tAttention: cette annonce sera ajoutée directement
\t\tsur la page d'accueil après validation du formulaire.
\t</p>


";
        
        $__internal_83ef3aa44f4f81c3cb1264cee2f0551e27e64f5b0ab6727dd5785469fb05d70e->leave($__internal_83ef3aa44f4f81c3cb1264cee2f0551e27e64f5b0ab6727dd5785469fb05d70e_prof);

    }

    public function getTemplateName()
    {
        return "FCPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/FC/PlatformBundle/Resources/views/Advert/add.html.twig #}*/
/* */
/* {% extends "FCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	Ajouter une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block fcplatform_body %}*/
/* */
/* 	<h2>Ajouter une annonce</h2>*/
/* */
/* 	{{ include("FCPlatformBundle:Advert:form.html.twig") }}*/
/* */
/* 	<p>*/
/* 		Attention: cette annonce sera ajoutée directement*/
/* 		sur la page d'accueil après validation du formulaire.*/
/* 	</p>*/
/* */
/* */
/* {% endblock %}*/
