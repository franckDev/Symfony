<?php

/* FCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_acbb191ecdbdcf1dbdda436b734e15ec6473b3ae14072120e87acd6045e9aed5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("FCPlatformBundle::layout.html.twig", "FCPlatformBundle:Advert:view.html.twig", 3);
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
        $__internal_61e168b12f8f29ef71463a836c6eb4bce80925e54622a505adb0697ffdda847a = $this->env->getExtension("native_profiler");
        $__internal_61e168b12f8f29ef71463a836c6eb4bce80925e54622a505adb0697ffdda847a->enter($__internal_61e168b12f8f29ef71463a836c6eb4bce80925e54622a505adb0697ffdda847a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61e168b12f8f29ef71463a836c6eb4bce80925e54622a505adb0697ffdda847a->leave($__internal_61e168b12f8f29ef71463a836c6eb4bce80925e54622a505adb0697ffdda847a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f526ec26ac96beb58ee11e78d831d4c48bc280c8928b2e25b4f182a76321f046 = $this->env->getExtension("native_profiler");
        $__internal_f526ec26ac96beb58ee11e78d831d4c48bc280c8928b2e25b4f182a76321f046->enter($__internal_f526ec26ac96beb58ee11e78d831d4c48bc280c8928b2e25b4f182a76321f046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tLecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f526ec26ac96beb58ee11e78d831d4c48bc280c8928b2e25b4f182a76321f046->leave($__internal_f526ec26ac96beb58ee11e78d831d4c48bc280c8928b2e25b4f182a76321f046_prof);

    }

    // line 9
    public function block_fcplatform_body($context, array $blocks = array())
    {
        $__internal_2c8151d915fcf6f4d442bd0612f617fa22cdf6a35c240bd4611130441dc74ebe = $this->env->getExtension("native_profiler");
        $__internal_2c8151d915fcf6f4d442bd0612f617fa22cdf6a35c240bd4611130441dc74ebe->enter($__internal_2c8151d915fcf6f4d442bd0612f617fa22cdf6a35c240bd4611130441dc74ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fcplatform_body"));

        // line 10
        echo "\t
\t<h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
\t<i>Par ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

\t<div class=\"well\">
\t\t";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
\t</div>

\t<p>
\t\t<a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fc_platform_home");
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à la liste
\t\t</a>
\t\t<a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fc_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-edit\"></i>
\t\t\tModifier l'annonce
\t\t</a>
\t\t<a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fc_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-trash\"></i>
\t\t\tSupprimer l'annonce
\t\t</a>
\t</p>
\t
";
        
        $__internal_2c8151d915fcf6f4d442bd0612f617fa22cdf6a35c240bd4611130441dc74ebe->leave($__internal_2c8151d915fcf6f4d442bd0612f617fa22cdf6a35c240bd4611130441dc74ebe_prof);

    }

    public function getTemplateName()
    {
        return "FCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 27,  86 => 23,  79 => 19,  72 => 15,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/view.html.twig #}*/
/* */
/* {% extends "FCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	Lecture d'une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block fcplatform_body %}*/
/* 	*/
/* 	<h2>{{ advert.title }}</h2>*/
/* 	<i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>*/
/* */
/* 	<div class="well">*/
/* 		{{ advert.content }}*/
/* 	</div>*/
/* */
/* 	<p>*/
/* 		<a href="{{ path('fc_platform_home') }}" class="btn btn-default">*/
/* 			<i class="glyphicon glyphicon-chevron-left"></i>*/
/* 			Retour à la liste*/
/* 		</a>*/
/* 		<a href="{{ path('fc_platform_edit', {'id': advert.id}) }}" class="btn btn-default">*/
/* 			<i class="glyphicon glyphicon-chevron-edit"></i>*/
/* 			Modifier l'annonce*/
/* 		</a>*/
/* 		<a href="{{ path('fc_platform_delete', {'id': advert.id}) }}" class="btn btn-danger">*/
/* 			<i class="glyphicon glyphicon-chevron-trash"></i>*/
/* 			Supprimer l'annonce*/
/* 		</a>*/
/* 	</p>*/
/* 	*/
/* {% endblock %}*/
