<?php

/* FCPlatformBundle::layout.html.twig */
class __TwigTemplate_1698da41e911f94335a3a846ff83469d7057feb0d207137b9bb329c5be183c9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CoreBundle::layout.html.twig", "FCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'fcplatform_body' => array($this, 'block_fcplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1f127e2a6fd4a1bba55827a7d6c6967dbbb64563a8e855835088fe2552ec550 = $this->env->getExtension("native_profiler");
        $__internal_a1f127e2a6fd4a1bba55827a7d6c6967dbbb64563a8e855835088fe2552ec550->enter($__internal_a1f127e2a6fd4a1bba55827a7d6c6967dbbb64563a8e855835088fe2552ec550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1f127e2a6fd4a1bba55827a7d6c6967dbbb64563a8e855835088fe2552ec550->leave($__internal_a1f127e2a6fd4a1bba55827a7d6c6967dbbb64563a8e855835088fe2552ec550_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbee8e59eb62cd5b777611fc3ada466b3e084f16c60bdb583b69ebe5f7c9adbc = $this->env->getExtension("native_profiler");
        $__internal_cbee8e59eb62cd5b777611fc3ada466b3e084f16c60bdb583b69ebe5f7c9adbc->enter($__internal_cbee8e59eb62cd5b777611fc3ada466b3e084f16c60bdb583b69ebe5f7c9adbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tAnnonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_cbee8e59eb62cd5b777611fc3ada466b3e084f16c60bdb583b69ebe5f7c9adbc->leave($__internal_cbee8e59eb62cd5b777611fc3ada466b3e084f16c60bdb583b69ebe5f7c9adbc_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b7468aa51621b8aff20573f05d683ba36c7157804a2797e256a42180eaaa9b6 = $this->env->getExtension("native_profiler");
        $__internal_8b7468aa51621b8aff20573f05d683ba36c7157804a2797e256a42180eaaa9b6->enter($__internal_8b7468aa51621b8aff20573f05d683ba36c7157804a2797e256a42180eaaa9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8b7468aa51621b8aff20573f05d683ba36c7157804a2797e256a42180eaaa9b6->leave($__internal_8b7468aa51621b8aff20573f05d683ba36c7157804a2797e256a42180eaaa9b6_prof);

    }

    // line 17
    public function block_fcplatform_body($context, array $blocks = array())
    {
        $__internal_edbb99582158d2cbd84e487da77633cd3b9ffd2de88ff4c2bb3b87f1bb6bba79 = $this->env->getExtension("native_profiler");
        $__internal_edbb99582158d2cbd84e487da77633cd3b9ffd2de88ff4c2bb3b87f1bb6bba79->enter($__internal_edbb99582158d2cbd84e487da77633cd3b9ffd2de88ff4c2bb3b87f1bb6bba79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fcplatform_body"));

        // line 18
        echo "\t";
        
        $__internal_edbb99582158d2cbd84e487da77633cd3b9ffd2de88ff4c2bb3b87f1bb6bba79->leave($__internal_edbb99582158d2cbd84e487da77633cd3b9ffd2de88ff4c2bb3b87f1bb6bba79_prof);

    }

    public function getTemplateName()
    {
        return "FCPlatformBundle::layout.html.twig";
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
/* {% extends "CoreBundle::layout.html.twig" %}*/
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
