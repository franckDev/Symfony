<?php

/* FCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_068585707cb6a702417e3ad4d65fa708b7af98314d4eef22f55afbbf8969e5c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("FCPlatformBundle::layout.html.twig", "FCPlatformBundle:Advert:edit.html.twig", 3);
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
        $__internal_4af3193adae1b96a6139991b523c200132cdc9c65736445f6fba59de63be19ee = $this->env->getExtension("native_profiler");
        $__internal_4af3193adae1b96a6139991b523c200132cdc9c65736445f6fba59de63be19ee->enter($__internal_4af3193adae1b96a6139991b523c200132cdc9c65736445f6fba59de63be19ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4af3193adae1b96a6139991b523c200132cdc9c65736445f6fba59de63be19ee->leave($__internal_4af3193adae1b96a6139991b523c200132cdc9c65736445f6fba59de63be19ee_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_702a54518dc1460b8d4e0e0c96fb7a5307f135ee71b72c34dee1bd1cd2f3e92a = $this->env->getExtension("native_profiler");
        $__internal_702a54518dc1460b8d4e0e0c96fb7a5307f135ee71b72c34dee1bd1cd2f3e92a->enter($__internal_702a54518dc1460b8d4e0e0c96fb7a5307f135ee71b72c34dee1bd1cd2f3e92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_702a54518dc1460b8d4e0e0c96fb7a5307f135ee71b72c34dee1bd1cd2f3e92a->leave($__internal_702a54518dc1460b8d4e0e0c96fb7a5307f135ee71b72c34dee1bd1cd2f3e92a_prof);

    }

    // line 9
    public function block_fcplatform_body($context, array $blocks = array())
    {
        $__internal_ef048aad753d12af400345ab619b50b6a249c92a219b906bf2fc85067d64555a = $this->env->getExtension("native_profiler");
        $__internal_ef048aad753d12af400345ab619b50b6a249c92a219b906bf2fc85067d64555a->enter($__internal_ef048aad753d12af400345ab619b50b6a249c92a219b906bf2fc85067d64555a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fcplatform_body"));

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
        
        $__internal_ef048aad753d12af400345ab619b50b6a249c92a219b906bf2fc85067d64555a->leave($__internal_ef048aad753d12af400345ab619b50b6a249c92a219b906bf2fc85067d64555a_prof);

    }

    public function getTemplateName()
    {
        return "FCPlatformBundle:Advert:edit.html.twig";
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
