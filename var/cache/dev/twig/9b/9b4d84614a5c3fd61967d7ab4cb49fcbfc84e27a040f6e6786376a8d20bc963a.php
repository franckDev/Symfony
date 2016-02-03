<?php

/* @FCPlatform/Advert/add.html.twig */
class __TwigTemplate_429fa1c429cd2a68b35d482c1632726b48292fa5242c81ff23b726c3f0919226 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("FCPlatformBundle::layout.html.twig", "@FCPlatform/Advert/add.html.twig", 3);
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
        $__internal_d2789f4fbf09399948bc31da4747b3ca74be5ecbc5dbd62e7b8df79b2e8e4b88 = $this->env->getExtension("native_profiler");
        $__internal_d2789f4fbf09399948bc31da4747b3ca74be5ecbc5dbd62e7b8df79b2e8e4b88->enter($__internal_d2789f4fbf09399948bc31da4747b3ca74be5ecbc5dbd62e7b8df79b2e8e4b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FCPlatform/Advert/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2789f4fbf09399948bc31da4747b3ca74be5ecbc5dbd62e7b8df79b2e8e4b88->leave($__internal_d2789f4fbf09399948bc31da4747b3ca74be5ecbc5dbd62e7b8df79b2e8e4b88_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_45320e4d0862403051fbde5e5c6afc7e4a99b6f0a5e7bbd6d12a4b4e755e897c = $this->env->getExtension("native_profiler");
        $__internal_45320e4d0862403051fbde5e5c6afc7e4a99b6f0a5e7bbd6d12a4b4e755e897c->enter($__internal_45320e4d0862403051fbde5e5c6afc7e4a99b6f0a5e7bbd6d12a4b4e755e897c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tAjouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_45320e4d0862403051fbde5e5c6afc7e4a99b6f0a5e7bbd6d12a4b4e755e897c->leave($__internal_45320e4d0862403051fbde5e5c6afc7e4a99b6f0a5e7bbd6d12a4b4e755e897c_prof);

    }

    // line 9
    public function block_fcplatform_body($context, array $blocks = array())
    {
        $__internal_da72edee3ee462b947f37cf77b4e2cffdb2543d7a812ecd5ad1f0512bed2ed46 = $this->env->getExtension("native_profiler");
        $__internal_da72edee3ee462b947f37cf77b4e2cffdb2543d7a812ecd5ad1f0512bed2ed46->enter($__internal_da72edee3ee462b947f37cf77b4e2cffdb2543d7a812ecd5ad1f0512bed2ed46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fcplatform_body"));

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
        
        $__internal_da72edee3ee462b947f37cf77b4e2cffdb2543d7a812ecd5ad1f0512bed2ed46->leave($__internal_da72edee3ee462b947f37cf77b4e2cffdb2543d7a812ecd5ad1f0512bed2ed46_prof);

    }

    public function getTemplateName()
    {
        return "@FCPlatform/Advert/add.html.twig";
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
