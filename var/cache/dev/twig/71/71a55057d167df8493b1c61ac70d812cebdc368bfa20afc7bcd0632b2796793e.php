<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_eca6667c073c6901d630a38aaddc852d1074005fb7863373cff09d2621585f1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_893f0e521721edd4799886ca4eb363286bbeb9f0f8e2d5081bf667474d9e5f4c = $this->env->getExtension("native_profiler");
        $__internal_893f0e521721edd4799886ca4eb363286bbeb9f0f8e2d5081bf667474d9e5f4c->enter($__internal_893f0e521721edd4799886ca4eb363286bbeb9f0f8e2d5081bf667474d9e5f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_893f0e521721edd4799886ca4eb363286bbeb9f0f8e2d5081bf667474d9e5f4c->leave($__internal_893f0e521721edd4799886ca4eb363286bbeb9f0f8e2d5081bf667474d9e5f4c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8a9f3b32b94e4d806da50bfe76fc9a57ee87b4400b75c61f8254c99e0aa588fe = $this->env->getExtension("native_profiler");
        $__internal_8a9f3b32b94e4d806da50bfe76fc9a57ee87b4400b75c61f8254c99e0aa588fe->enter($__internal_8a9f3b32b94e4d806da50bfe76fc9a57ee87b4400b75c61f8254c99e0aa588fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8a9f3b32b94e4d806da50bfe76fc9a57ee87b4400b75c61f8254c99e0aa588fe->leave($__internal_8a9f3b32b94e4d806da50bfe76fc9a57ee87b4400b75c61f8254c99e0aa588fe_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
