<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_fe2f8e78038b48ae3dec422692b5fdf217382100d1555af901e309a87c1b9eb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_d0dcc55b43f7f92ee9077b63e239cc355abe302a5b9f8c3b8a40f1166425a34e = $this->env->getExtension("native_profiler");
        $__internal_d0dcc55b43f7f92ee9077b63e239cc355abe302a5b9f8c3b8a40f1166425a34e->enter($__internal_d0dcc55b43f7f92ee9077b63e239cc355abe302a5b9f8c3b8a40f1166425a34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0dcc55b43f7f92ee9077b63e239cc355abe302a5b9f8c3b8a40f1166425a34e->leave($__internal_d0dcc55b43f7f92ee9077b63e239cc355abe302a5b9f8c3b8a40f1166425a34e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9a5b8433f197cae8ba5ed8b527fb469f9033b504330546e0cf5477ca5880e8ea = $this->env->getExtension("native_profiler");
        $__internal_9a5b8433f197cae8ba5ed8b527fb469f9033b504330546e0cf5477ca5880e8ea->enter($__internal_9a5b8433f197cae8ba5ed8b527fb469f9033b504330546e0cf5477ca5880e8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9a5b8433f197cae8ba5ed8b527fb469f9033b504330546e0cf5477ca5880e8ea->leave($__internal_9a5b8433f197cae8ba5ed8b527fb469f9033b504330546e0cf5477ca5880e8ea_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6ed6479bf65194ede2699318fc21fb9d4bd78fcf07f29ba1c6d345ad95d8c398 = $this->env->getExtension("native_profiler");
        $__internal_6ed6479bf65194ede2699318fc21fb9d4bd78fcf07f29ba1c6d345ad95d8c398->enter($__internal_6ed6479bf65194ede2699318fc21fb9d4bd78fcf07f29ba1c6d345ad95d8c398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6ed6479bf65194ede2699318fc21fb9d4bd78fcf07f29ba1c6d345ad95d8c398->leave($__internal_6ed6479bf65194ede2699318fc21fb9d4bd78fcf07f29ba1c6d345ad95d8c398_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_651dc50aead4104a223af0061b7190e909c4ab32cd8122a388dca836a474bb99 = $this->env->getExtension("native_profiler");
        $__internal_651dc50aead4104a223af0061b7190e909c4ab32cd8122a388dca836a474bb99->enter($__internal_651dc50aead4104a223af0061b7190e909c4ab32cd8122a388dca836a474bb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_651dc50aead4104a223af0061b7190e909c4ab32cd8122a388dca836a474bb99->leave($__internal_651dc50aead4104a223af0061b7190e909c4ab32cd8122a388dca836a474bb99_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
