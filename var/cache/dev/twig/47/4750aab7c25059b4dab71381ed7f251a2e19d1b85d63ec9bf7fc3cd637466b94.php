<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_b2098f1e229cd3728a9d63f6a93cdd4981c140d5f9571b8377e692f29a5431fd extends Twig_Template
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
        $__internal_4cbf47b49e701b2e05c0e3da4da384ca2a6cf64b158db908694b7f55434aaed6 = $this->env->getExtension("native_profiler");
        $__internal_4cbf47b49e701b2e05c0e3da4da384ca2a6cf64b158db908694b7f55434aaed6->enter($__internal_4cbf47b49e701b2e05c0e3da4da384ca2a6cf64b158db908694b7f55434aaed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_4cbf47b49e701b2e05c0e3da4da384ca2a6cf64b158db908694b7f55434aaed6->leave($__internal_4cbf47b49e701b2e05c0e3da4da384ca2a6cf64b158db908694b7f55434aaed6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
