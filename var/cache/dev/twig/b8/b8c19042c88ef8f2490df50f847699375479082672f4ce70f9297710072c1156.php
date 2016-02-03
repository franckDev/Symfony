<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_8c6edd0df3adcaada676c92b677983430c8e11a8e19324529dfef420df1d4847 extends Twig_Template
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
        $__internal_d5a073087be27f437ca08db0a126a4fd81523b5a3a3b32f079ee83be60282f96 = $this->env->getExtension("native_profiler");
        $__internal_d5a073087be27f437ca08db0a126a4fd81523b5a3a3b32f079ee83be60282f96->enter($__internal_d5a073087be27f437ca08db0a126a4fd81523b5a3a3b32f079ee83be60282f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d5a073087be27f437ca08db0a126a4fd81523b5a3a3b32f079ee83be60282f96->leave($__internal_d5a073087be27f437ca08db0a126a4fd81523b5a3a3b32f079ee83be60282f96_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
