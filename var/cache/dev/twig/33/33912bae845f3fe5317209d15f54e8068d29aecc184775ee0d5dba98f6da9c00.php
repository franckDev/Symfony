<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_5f88fa618ad7b93a7b0d109624a1604de580126c366ecb073a6c012ac580bf3c extends Twig_Template
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
        $__internal_f0be4a6ac62ee0cf986cf7206dbd6700c54152ee68beb5e26cbaee51b0ef7105 = $this->env->getExtension("native_profiler");
        $__internal_f0be4a6ac62ee0cf986cf7206dbd6700c54152ee68beb5e26cbaee51b0ef7105->enter($__internal_f0be4a6ac62ee0cf986cf7206dbd6700c54152ee68beb5e26cbaee51b0ef7105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f0be4a6ac62ee0cf986cf7206dbd6700c54152ee68beb5e26cbaee51b0ef7105->leave($__internal_f0be4a6ac62ee0cf986cf7206dbd6700c54152ee68beb5e26cbaee51b0ef7105_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
