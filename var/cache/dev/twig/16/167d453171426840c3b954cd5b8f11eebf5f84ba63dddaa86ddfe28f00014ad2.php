<?php

/* FCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_65c9d6919c3d049932e65ce775c13b47b191f3ad1d80a61bf2a014fe66168971 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("FCPlatformBundle::layout.html.twig", "FCPlatformBundle:Advert:index.html.twig", 3);
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
        $__internal_aa58c05e084baf74b13360c23cbedafece5135e5aeb46927e341ef04a82ecaac = $this->env->getExtension("native_profiler");
        $__internal_aa58c05e084baf74b13360c23cbedafece5135e5aeb46927e341ef04a82ecaac->enter($__internal_aa58c05e084baf74b13360c23cbedafece5135e5aeb46927e341ef04a82ecaac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa58c05e084baf74b13360c23cbedafece5135e5aeb46927e341ef04a82ecaac->leave($__internal_aa58c05e084baf74b13360c23cbedafece5135e5aeb46927e341ef04a82ecaac_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d852732af43ef57100825e851298335e7c2e978ab857e6c6ec35a9d565aa549e = $this->env->getExtension("native_profiler");
        $__internal_d852732af43ef57100825e851298335e7c2e978ab857e6c6ec35a9d565aa549e->enter($__internal_d852732af43ef57100825e851298335e7c2e978ab857e6c6ec35a9d565aa549e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d852732af43ef57100825e851298335e7c2e978ab857e6c6ec35a9d565aa549e->leave($__internal_d852732af43ef57100825e851298335e7c2e978ab857e6c6ec35a9d565aa549e_prof);

    }

    // line 9
    public function block_fcplatform_body($context, array $blocks = array())
    {
        $__internal_93eefaf983bfc3a3e16a70fd793275a450e86dd0334da85af3ede8d51ffcf3ce = $this->env->getExtension("native_profiler");
        $__internal_93eefaf983bfc3a3e16a70fd793275a450e86dd0334da85af3ede8d51ffcf3ce->enter($__internal_93eefaf983bfc3a3e16a70fd793275a450e86dd0334da85af3ede8d51ffcf3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fcplatform_body"));

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
        
        $__internal_93eefaf983bfc3a3e16a70fd793275a450e86dd0334da85af3ede8d51ffcf3ce->leave($__internal_93eefaf983bfc3a3e16a70fd793275a450e86dd0334da85af3ede8d51ffcf3ce_prof);

    }

    public function getTemplateName()
    {
        return "FCPlatformBundle:Advert:index.html.twig";
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
