<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_de801b5f0a6e6493de4cdde6e98a5aa0cc8d1d4d2d523bba2d8c00daf069bfd8 extends Twig_Template
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
        $__internal_36ecfaa31a05af4dd93b8fd24b28ed01841b27eaecf60d3100975e4df60d3c18 = $this->env->getExtension("native_profiler");
        $__internal_36ecfaa31a05af4dd93b8fd24b28ed01841b27eaecf60d3100975e4df60d3c18->enter($__internal_36ecfaa31a05af4dd93b8fd24b28ed01841b27eaecf60d3100975e4df60d3c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_36ecfaa31a05af4dd93b8fd24b28ed01841b27eaecf60d3100975e4df60d3c18->leave($__internal_36ecfaa31a05af4dd93b8fd24b28ed01841b27eaecf60d3100975e4df60d3c18_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
