<?php

/* @FCPlatform/Advert/menu.html.twig */
class __TwigTemplate_fd3a3d515e22938bf7a9bd4901da6e30e043d6d57501f435e96632e5e0906bdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb90084712c6a6a45f8c21e96018f9f9bd0070bbea8184ab838e3e9362a248a8 = $this->env->getExtension("native_profiler");
        $__internal_fb90084712c6a6a45f8c21e96018f9f9bd0070bbea8184ab838e3e9362a248a8->enter($__internal_fb90084712c6a6a45f8c21e96018f9f9bd0070bbea8184ab838e3e9362a248a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FCPlatform/Advert/menu.html.twig"));

        // line 2
        echo "
";
        // line 5
        echo "
<ul class=\"nav nav-pills nav-stacked\">
\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 8
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
\t\t\t</a>
\t\t</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>";
        
        $__internal_fb90084712c6a6a45f8c21e96018f9f9bd0070bbea8184ab838e3e9362a248a8->leave($__internal_fb90084712c6a6a45f8c21e96018f9f9bd0070bbea8184ab838e3e9362a248a8_prof);

    }

    public function getTemplateName()
    {
        return "@FCPlatform/Advert/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  40 => 10,  36 => 9,  33 => 8,  29 => 7,  25 => 5,  22 => 2,);
    }
}
/* {# src/FC/PlatformBundle/Resources/views/Advert/menu.html.twig #}*/
/* */
/* {# Ce template n'hérite de personne,*/
/*    tout comme le template inclus avec {{ include() }}. #}*/
/* */
/* <ul class="nav nav-pills nav-stacked">*/
/* 	{% for advert in listAdverts %}*/
/* 		<li>*/
/* 			<a href="{{ path('fc_platform_view', {'id': advert.id}) }}">*/
/* 				{{ advert.title }}*/
/* 			</a>*/
/* 		</li>*/
/* 	{% endfor %}*/
/* </ul>*/
