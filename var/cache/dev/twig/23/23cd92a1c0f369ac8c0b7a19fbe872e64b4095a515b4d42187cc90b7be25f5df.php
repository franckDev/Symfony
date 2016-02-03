<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_69d52d6d1bbbe28610729e7c33e659b7e0d3186d0ef909e36fe3c1fdca0a3bce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_21d5ef263d4d59633327957c1e238f8d21824f83e26eb334a23f73d72b8d7a23 = $this->env->getExtension("native_profiler");
        $__internal_21d5ef263d4d59633327957c1e238f8d21824f83e26eb334a23f73d72b8d7a23->enter($__internal_21d5ef263d4d59633327957c1e238f8d21824f83e26eb334a23f73d72b8d7a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21d5ef263d4d59633327957c1e238f8d21824f83e26eb334a23f73d72b8d7a23->leave($__internal_21d5ef263d4d59633327957c1e238f8d21824f83e26eb334a23f73d72b8d7a23_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bac1baf182a75a4a676908a0044f18b260539c2306e9b2ce3079ffdb923ef6b = $this->env->getExtension("native_profiler");
        $__internal_9bac1baf182a75a4a676908a0044f18b260539c2306e9b2ce3079ffdb923ef6b->enter($__internal_9bac1baf182a75a4a676908a0044f18b260539c2306e9b2ce3079ffdb923ef6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9bac1baf182a75a4a676908a0044f18b260539c2306e9b2ce3079ffdb923ef6b->leave($__internal_9bac1baf182a75a4a676908a0044f18b260539c2306e9b2ce3079ffdb923ef6b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b47af6db5c8021a1bb135173653694ea2b64ea98240a3b992b68b5b6da7ff6e = $this->env->getExtension("native_profiler");
        $__internal_6b47af6db5c8021a1bb135173653694ea2b64ea98240a3b992b68b5b6da7ff6e->enter($__internal_6b47af6db5c8021a1bb135173653694ea2b64ea98240a3b992b68b5b6da7ff6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6b47af6db5c8021a1bb135173653694ea2b64ea98240a3b992b68b5b6da7ff6e->leave($__internal_6b47af6db5c8021a1bb135173653694ea2b64ea98240a3b992b68b5b6da7ff6e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
