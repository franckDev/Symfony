<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_05535658703db983c7424c9fa2bad46086ffa976db740f0f9d703215c8b4665c extends Twig_Template
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
        $__internal_654bc6345ec1d613000e8cce68e6af4209d0cf2b633f125a9034796cbb8b2f7e = $this->env->getExtension("native_profiler");
        $__internal_654bc6345ec1d613000e8cce68e6af4209d0cf2b633f125a9034796cbb8b2f7e->enter($__internal_654bc6345ec1d613000e8cce68e6af4209d0cf2b633f125a9034796cbb8b2f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_654bc6345ec1d613000e8cce68e6af4209d0cf2b633f125a9034796cbb8b2f7e->leave($__internal_654bc6345ec1d613000e8cce68e6af4209d0cf2b633f125a9034796cbb8b2f7e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
