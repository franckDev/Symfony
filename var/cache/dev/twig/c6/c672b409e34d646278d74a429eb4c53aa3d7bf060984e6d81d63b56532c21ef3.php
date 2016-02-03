<?php

/* @FCPlatform/Advert/edit.html.twig */
class __TwigTemplate_5b271f0840d635a0d24e2fe9fe13258f6c24dfdb4d0683022c4b8142c8d1ecfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("FCPlatformBundle::layout.html.twig", "@FCPlatform/Advert/edit.html.twig", 3);
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
        $__internal_317ee429e286e50e7e491c9af76905e2bb3cd4a484f5ab0fde476d09f1fb7191 = $this->env->getExtension("native_profiler");
        $__internal_317ee429e286e50e7e491c9af76905e2bb3cd4a484f5ab0fde476d09f1fb7191->enter($__internal_317ee429e286e50e7e491c9af76905e2bb3cd4a484f5ab0fde476d09f1fb7191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FCPlatform/Advert/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_317ee429e286e50e7e491c9af76905e2bb3cd4a484f5ab0fde476d09f1fb7191->leave($__internal_317ee429e286e50e7e491c9af76905e2bb3cd4a484f5ab0fde476d09f1fb7191_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_57f8b357ca1a91c9302cc6bf2375b5cd1425271452828205ec75f839df364ffd = $this->env->getExtension("native_profiler");
        $__internal_57f8b357ca1a91c9302cc6bf2375b5cd1425271452828205ec75f839df364ffd->enter($__internal_57f8b357ca1a91c9302cc6bf2375b5cd1425271452828205ec75f839df364ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_57f8b357ca1a91c9302cc6bf2375b5cd1425271452828205ec75f839df364ffd->leave($__internal_57f8b357ca1a91c9302cc6bf2375b5cd1425271452828205ec75f839df364ffd_prof);

    }

    // line 9
    public function block_fcplatform_body($context, array $blocks = array())
    {
        $__internal_4e9761e8aa57728c3a6783d51f65dde8767fa08ac496416cb44a89a78929ac9e = $this->env->getExtension("native_profiler");
        $__internal_4e9761e8aa57728c3a6783d51f65dde8767fa08ac496416cb44a89a78929ac9e->enter($__internal_4e9761e8aa57728c3a6783d51f65dde8767fa08ac496416cb44a89a78929ac9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fcplatform_body"));

        // line 10
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "FCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_4e9761e8aa57728c3a6783d51f65dde8767fa08ac496416cb44a89a78929ac9e->leave($__internal_4e9761e8aa57728c3a6783d51f65dde8767fa08ac496416cb44a89a78929ac9e_prof);

    }

    public function getTemplateName()
    {
        return "@FCPlatform/Advert/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/FC/PlatformBundle/Resources/views/Advert/edit.html.twig #}*/
/* */
/* {% extends "FCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block fcplatform_body %}*/
/* */
/*   <h2>Modifier une annonce</h2>*/
/* */
/*   {{ include("FCPlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Vous éditez une annonce déjà existante, merci de ne pas changer*/
/*     l'esprit générale de l'annonce déjà publiée.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('fc_platform_view', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'annonce*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
