<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_0af68cd21a3ecbc2383d369cfa3a775e699e1ecc150a4bc6e082ae95ac680f63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_2f599f9abc4167e5e0caf66eff07bc2f745e2595ea1bc181ca1638d02dd99089 = $this->env->getExtension("native_profiler");
        $__internal_2f599f9abc4167e5e0caf66eff07bc2f745e2595ea1bc181ca1638d02dd99089->enter($__internal_2f599f9abc4167e5e0caf66eff07bc2f745e2595ea1bc181ca1638d02dd99089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f599f9abc4167e5e0caf66eff07bc2f745e2595ea1bc181ca1638d02dd99089->leave($__internal_2f599f9abc4167e5e0caf66eff07bc2f745e2595ea1bc181ca1638d02dd99089_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_47f3fc3e755dd1d0a276283f3cb2c2ec6228909a9d5d44c207d159a11de3a4e7 = $this->env->getExtension("native_profiler");
        $__internal_47f3fc3e755dd1d0a276283f3cb2c2ec6228909a9d5d44c207d159a11de3a4e7->enter($__internal_47f3fc3e755dd1d0a276283f3cb2c2ec6228909a9d5d44c207d159a11de3a4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_47f3fc3e755dd1d0a276283f3cb2c2ec6228909a9d5d44c207d159a11de3a4e7->leave($__internal_47f3fc3e755dd1d0a276283f3cb2c2ec6228909a9d5d44c207d159a11de3a4e7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4872464ae0e3a3b4b9f83bf599ef0ac8c7f643421345d5667ff57b6ae0b3a3c9 = $this->env->getExtension("native_profiler");
        $__internal_4872464ae0e3a3b4b9f83bf599ef0ac8c7f643421345d5667ff57b6ae0b3a3c9->enter($__internal_4872464ae0e3a3b4b9f83bf599ef0ac8c7f643421345d5667ff57b6ae0b3a3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4872464ae0e3a3b4b9f83bf599ef0ac8c7f643421345d5667ff57b6ae0b3a3c9->leave($__internal_4872464ae0e3a3b4b9f83bf599ef0ac8c7f643421345d5667ff57b6ae0b3a3c9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_43a0594c013d5396350d1d527b8909329e1a49319e2a11de6c164df008385f67 = $this->env->getExtension("native_profiler");
        $__internal_43a0594c013d5396350d1d527b8909329e1a49319e2a11de6c164df008385f67->enter($__internal_43a0594c013d5396350d1d527b8909329e1a49319e2a11de6c164df008385f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_43a0594c013d5396350d1d527b8909329e1a49319e2a11de6c164df008385f67->leave($__internal_43a0594c013d5396350d1d527b8909329e1a49319e2a11de6c164df008385f67_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
