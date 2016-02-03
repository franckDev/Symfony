<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_34d336665b36b7b23601c3180805698cb4f725da9a3c64b5d9e7fac8a1e50136 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd9d85834a75e2b1e73343efe3d84cc16da5a44cf669a9b82d0bbbf9dfdc9286 = $this->env->getExtension("native_profiler");
        $__internal_cd9d85834a75e2b1e73343efe3d84cc16da5a44cf669a9b82d0bbbf9dfdc9286->enter($__internal_cd9d85834a75e2b1e73343efe3d84cc16da5a44cf669a9b82d0bbbf9dfdc9286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd9d85834a75e2b1e73343efe3d84cc16da5a44cf669a9b82d0bbbf9dfdc9286->leave($__internal_cd9d85834a75e2b1e73343efe3d84cc16da5a44cf669a9b82d0bbbf9dfdc9286_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_11938601dd6900cf94559b856688565972f3b8e17592c971540a4fb774eb927d = $this->env->getExtension("native_profiler");
        $__internal_11938601dd6900cf94559b856688565972f3b8e17592c971540a4fb774eb927d->enter($__internal_11938601dd6900cf94559b856688565972f3b8e17592c971540a4fb774eb927d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_11938601dd6900cf94559b856688565972f3b8e17592c971540a4fb774eb927d->leave($__internal_11938601dd6900cf94559b856688565972f3b8e17592c971540a4fb774eb927d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2043c821c30d56309fbab3f5905277c7f72d054788aa0c4d707d2d0f8b0e824e = $this->env->getExtension("native_profiler");
        $__internal_2043c821c30d56309fbab3f5905277c7f72d054788aa0c4d707d2d0f8b0e824e->enter($__internal_2043c821c30d56309fbab3f5905277c7f72d054788aa0c4d707d2d0f8b0e824e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2043c821c30d56309fbab3f5905277c7f72d054788aa0c4d707d2d0f8b0e824e->leave($__internal_2043c821c30d56309fbab3f5905277c7f72d054788aa0c4d707d2d0f8b0e824e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2625294d0e96f5da297e324d7b1372145580fc9cd7cbf9a361e5cde3168b57c3 = $this->env->getExtension("native_profiler");
        $__internal_2625294d0e96f5da297e324d7b1372145580fc9cd7cbf9a361e5cde3168b57c3->enter($__internal_2625294d0e96f5da297e324d7b1372145580fc9cd7cbf9a361e5cde3168b57c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2625294d0e96f5da297e324d7b1372145580fc9cd7cbf9a361e5cde3168b57c3->leave($__internal_2625294d0e96f5da297e324d7b1372145580fc9cd7cbf9a361e5cde3168b57c3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
