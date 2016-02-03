<?php

/* CoreBundle:Home:index.html.twig */
class __TwigTemplate_86a5cc7078333d207c0dd4180daea275a55e636906f6d81fdd078bf68a995684 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CoreBundle::layout.html.twig", "CoreBundle:Home:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_894a46f519832e3efc24abeb616e8a5d7246859e4d9f194e9db250014bcb1846 = $this->env->getExtension("native_profiler");
        $__internal_894a46f519832e3efc24abeb616e8a5d7246859e4d9f194e9db250014bcb1846->enter($__internal_894a46f519832e3efc24abeb616e8a5d7246859e4d9f194e9db250014bcb1846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_894a46f519832e3efc24abeb616e8a5d7246859e4d9f194e9db250014bcb1846->leave($__internal_894a46f519832e3efc24abeb616e8a5d7246859e4d9f194e9db250014bcb1846_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_03be848fa0a61acc6b62e8b1375a2c0dd3a7b32da1e3ef71178a65bde724e1f4 = $this->env->getExtension("native_profiler");
        $__internal_03be848fa0a61acc6b62e8b1375a2c0dd3a7b32da1e3ef71178a65bde724e1f4->enter($__internal_03be848fa0a61acc6b62e8b1375a2c0dd3a7b32da1e3ef71178a65bde724e1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Page d'accueil
";
        
        $__internal_03be848fa0a61acc6b62e8b1375a2c0dd3a7b32da1e3ef71178a65bde724e1f4->leave($__internal_03be848fa0a61acc6b62e8b1375a2c0dd3a7b32da1e3ef71178a65bde724e1f4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8309104352f6cdab55940638dd409233e905b31da71126142e4215aa7c1ecf45 = $this->env->getExtension("native_profiler");
        $__internal_8309104352f6cdab55940638dd409233e905b31da71126142e4215aa7c1ecf45->enter($__internal_8309104352f6cdab55940638dd409233e905b31da71126142e4215aa7c1ecf45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t  \t<ul>
\t\t\t    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 14
            echo "\t\t\t      \t<li>
\t\t\t\t        <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t          ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
\t\t\t\t        </a>
\t\t\t        \tpar ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
\t\t\t        \tle ";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
\t\t\t     \t</li>
\t\t\t     \t<br>
\t\t\t    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "\t\t\t      \t<li>Pas (encore !) d'annonces</li>
\t\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t  \t</ul>
\t  \t</div>
\t</div>
";
        
        $__internal_8309104352f6cdab55940638dd409233e905b31da71126142e4215aa7c1ecf45->leave($__internal_8309104352f6cdab55940638dd409233e905b31da71126142e4215aa7c1ecf45_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 25,  90 => 23,  81 => 19,  77 => 18,  72 => 16,  68 => 15,  65 => 14,  60 => 13,  55 => 10,  49 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/CoreBundle/Resources/views/Home/index.html.twig #}*/
/* */
/* {% extends "CoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Page d'accueil*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	<div class="row">*/
/* 		<div class="col-md-12">*/
/* 		  	<ul>*/
/* 			    {% for advert in listAdverts %}*/
/* 			      	<li>*/
/* 				        <a href="{{ path('fc_platform_view', {'id': advert.id}) }}">*/
/* 				          {{ advert.title }}*/
/* 				        </a>*/
/* 			        	par {{ advert.author }},*/
/* 			        	le {{ advert.date|date('d/m/Y') }}*/
/* 			     	</li>*/
/* 			     	<br>*/
/* 			    {% else %}*/
/* 			      	<li>Pas (encore !) d'annonces</li>*/
/* 			    {% endfor %}*/
/* 		  	</ul>*/
/* 	  	</div>*/
/* 	</div>*/
/* {% endblock %}*/
