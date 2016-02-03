<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_56bee7c6b18aab1aa15da771a73b300b7edf9d29301412f2dd9842f03414648f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce06d020d1eb6cccdcb370c414f7a5b16ff0f5363b6d93e934bf5939ad4c2e6a = $this->env->getExtension("native_profiler");
        $__internal_ce06d020d1eb6cccdcb370c414f7a5b16ff0f5363b6d93e934bf5939ad4c2e6a->enter($__internal_ce06d020d1eb6cccdcb370c414f7a5b16ff0f5363b6d93e934bf5939ad4c2e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce06d020d1eb6cccdcb370c414f7a5b16ff0f5363b6d93e934bf5939ad4c2e6a->leave($__internal_ce06d020d1eb6cccdcb370c414f7a5b16ff0f5363b6d93e934bf5939ad4c2e6a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ddb083507664c56e75f8a915a08dbc3da098de9d15d8ad3aeac636a596f3b6f7 = $this->env->getExtension("native_profiler");
        $__internal_ddb083507664c56e75f8a915a08dbc3da098de9d15d8ad3aeac636a596f3b6f7->enter($__internal_ddb083507664c56e75f8a915a08dbc3da098de9d15d8ad3aeac636a596f3b6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ddb083507664c56e75f8a915a08dbc3da098de9d15d8ad3aeac636a596f3b6f7->leave($__internal_ddb083507664c56e75f8a915a08dbc3da098de9d15d8ad3aeac636a596f3b6f7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd8bbd2e6481038b89a3a63ecfebcf37e2a56f960936d5f321a259e57877b615 = $this->env->getExtension("native_profiler");
        $__internal_cd8bbd2e6481038b89a3a63ecfebcf37e2a56f960936d5f321a259e57877b615->enter($__internal_cd8bbd2e6481038b89a3a63ecfebcf37e2a56f960936d5f321a259e57877b615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_cd8bbd2e6481038b89a3a63ecfebcf37e2a56f960936d5f321a259e57877b615->leave($__internal_cd8bbd2e6481038b89a3a63ecfebcf37e2a56f960936d5f321a259e57877b615_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
