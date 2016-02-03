<?php

/* @FCPlatform/Advert/index.html.twig */
class __TwigTemplate_4477e290cba3fc0974e39aed212c1da40f05f5e93a7dcb1300108ccc747451c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("FCPlatformBundle::layout.html.twig", "@FCPlatform/Advert/index.html.twig", 3);
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
        $__internal_9315e926ef5dccc44748ecfa88f1ae2be8608f7829acf7da0cff51fcee73cb1b = $this->env->getExtension("native_profiler");
        $__internal_9315e926ef5dccc44748ecfa88f1ae2be8608f7829acf7da0cff51fcee73cb1b->enter($__internal_9315e926ef5dccc44748ecfa88f1ae2be8608f7829acf7da0cff51fcee73cb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FCPlatform/Advert/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9315e926ef5dccc44748ecfa88f1ae2be8608f7829acf7da0cff51fcee73cb1b->leave($__internal_9315e926ef5dccc44748ecfa88f1ae2be8608f7829acf7da0cff51fcee73cb1b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a746a45b8ff1f51b8d81ca98fc01baa49e8dd85581835380d71f5441d934dfd1 = $this->env->getExtension("native_profiler");
        $__internal_a746a45b8ff1f51b8d81ca98fc01baa49e8dd85581835380d71f5441d934dfd1->enter($__internal_a746a45b8ff1f51b8d81ca98fc01baa49e8dd85581835380d71f5441d934dfd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a746a45b8ff1f51b8d81ca98fc01baa49e8dd85581835380d71f5441d934dfd1->leave($__internal_a746a45b8ff1f51b8d81ca98fc01baa49e8dd85581835380d71f5441d934dfd1_prof);

    }

    // line 9
    public function block_fcplatform_body($context, array $blocks = array())
    {
        $__internal_8e7110497d41886f4cb6ad6404cbd0b170cb23ecbfc3a47c9edb12bfefdaa618 = $this->env->getExtension("native_profiler");
        $__internal_8e7110497d41886f4cb6ad6404cbd0b170cb23ecbfc3a47c9edb12bfefdaa618->enter($__internal_8e7110497d41886f4cb6ad6404cbd0b170cb23ecbfc3a47c9edb12bfefdaa618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fcplatform_body"));

        // line 10
        echo "
  <h2>Liste des annonces</h2>

  <ul>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 15
            echo "      <li>
        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
        </a>
        par ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
        le ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "      <li>Pas (encore !) d'annonces</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "  </ul>

";
        
        $__internal_8e7110497d41886f4cb6ad6404cbd0b170cb23ecbfc3a47c9edb12bfefdaa618->leave($__internal_8e7110497d41886f4cb6ad6404cbd0b170cb23ecbfc3a47c9edb12bfefdaa618_prof);

    }

    public function getTemplateName()
    {
        return "@FCPlatform/Advert/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  92 => 23,  84 => 20,  80 => 19,  75 => 17,  71 => 16,  68 => 15,  63 => 14,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/FC/PlatformBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* {% extends "FCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block fcplatform_body %}*/
/* */
/*   <h2>Liste des annonces</h2>*/
/* */
/*   <ul>*/
/*     {% for advert in listAdverts %}*/
/*       <li>*/
/*         <a href="{{ path('fc_platform_view', {'id': advert.id}) }}">*/
/*           {{ advert.title }}*/
/*         </a>*/
/*         par {{ advert.author }},*/
/*         le {{ advert.date|date('d/m/Y') }}*/
/*       </li>*/
/*     {% else %}*/
/*       <li>Pas (encore !) d'annonces</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/* {% endblock %}*/
