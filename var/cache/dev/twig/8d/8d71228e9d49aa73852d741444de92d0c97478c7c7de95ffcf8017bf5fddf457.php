<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_82b707bb00e5775c17e703dc5a5b7655b1f5274a50491657c87468dfd1cc5165 extends Twig_Template
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
        $__internal_4922c04b0c43971470af41c07f9df745fe42eff299bf612d0bc3b16d017fb8ef = $this->env->getExtension("native_profiler");
        $__internal_4922c04b0c43971470af41c07f9df745fe42eff299bf612d0bc3b16d017fb8ef->enter($__internal_4922c04b0c43971470af41c07f9df745fe42eff299bf612d0bc3b16d017fb8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_4922c04b0c43971470af41c07f9df745fe42eff299bf612d0bc3b16d017fb8ef->leave($__internal_4922c04b0c43971470af41c07f9df745fe42eff299bf612d0bc3b16d017fb8ef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
