<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c1d9c7a77bca8cd92c6c35f54b7ef19f0e210bf8546875b39049efe751ce935f extends Twig_Template
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
        $__internal_f8cf64c058b30e6135e39f8b5c18179836ce4493a68c8a5ad7f0eab348ea3afe = $this->env->getExtension("native_profiler");
        $__internal_f8cf64c058b30e6135e39f8b5c18179836ce4493a68c8a5ad7f0eab348ea3afe->enter($__internal_f8cf64c058b30e6135e39f8b5c18179836ce4493a68c8a5ad7f0eab348ea3afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f8cf64c058b30e6135e39f8b5c18179836ce4493a68c8a5ad7f0eab348ea3afe->leave($__internal_f8cf64c058b30e6135e39f8b5c18179836ce4493a68c8a5ad7f0eab348ea3afe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
