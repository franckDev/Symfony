<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_e69f7b955dfb78a01d4f1caf84c504b23d7e6fc650ef0e8c8ac09bc7ee6df9b9 extends Twig_Template
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
        $__internal_1badd02db4486d164cbabff6513fa14272fac8bf390305ae65f11ef792ba0ed0 = $this->env->getExtension("native_profiler");
        $__internal_1badd02db4486d164cbabff6513fa14272fac8bf390305ae65f11ef792ba0ed0->enter($__internal_1badd02db4486d164cbabff6513fa14272fac8bf390305ae65f11ef792ba0ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_1badd02db4486d164cbabff6513fa14272fac8bf390305ae65f11ef792ba0ed0->leave($__internal_1badd02db4486d164cbabff6513fa14272fac8bf390305ae65f11ef792ba0ed0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
