<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_93a899357af52ca7fb89e0107f3c28cbf1c5e9ca1ed23b6c8d6ed24b5e667813 extends Twig_Template
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
        $__internal_772e27b4782dde22995fcda4ad65091afeba0e05d896ad321433dab985e0800b = $this->env->getExtension("native_profiler");
        $__internal_772e27b4782dde22995fcda4ad65091afeba0e05d896ad321433dab985e0800b->enter($__internal_772e27b4782dde22995fcda4ad65091afeba0e05d896ad321433dab985e0800b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_772e27b4782dde22995fcda4ad65091afeba0e05d896ad321433dab985e0800b->leave($__internal_772e27b4782dde22995fcda4ad65091afeba0e05d896ad321433dab985e0800b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
