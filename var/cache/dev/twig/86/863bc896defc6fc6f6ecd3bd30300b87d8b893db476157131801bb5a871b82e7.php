<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_22383cb7fbba1b563ee8ee9d06cdae266cf668eb66f50374a475d918000eb842 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a78377784db25c545504f7f42dea7ee22e158ee1848adc5e0bd2964ee45dd22 = $this->env->getExtension("native_profiler");
        $__internal_0a78377784db25c545504f7f42dea7ee22e158ee1848adc5e0bd2964ee45dd22->enter($__internal_0a78377784db25c545504f7f42dea7ee22e158ee1848adc5e0bd2964ee45dd22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a78377784db25c545504f7f42dea7ee22e158ee1848adc5e0bd2964ee45dd22->leave($__internal_0a78377784db25c545504f7f42dea7ee22e158ee1848adc5e0bd2964ee45dd22_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3fe4c4f61fdcf97e10a1a44afba40acf28ed2644988737ed0d1268b208c01acc = $this->env->getExtension("native_profiler");
        $__internal_3fe4c4f61fdcf97e10a1a44afba40acf28ed2644988737ed0d1268b208c01acc->enter($__internal_3fe4c4f61fdcf97e10a1a44afba40acf28ed2644988737ed0d1268b208c01acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3fe4c4f61fdcf97e10a1a44afba40acf28ed2644988737ed0d1268b208c01acc->leave($__internal_3fe4c4f61fdcf97e10a1a44afba40acf28ed2644988737ed0d1268b208c01acc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_452ebd29310e00eadf529261bfd27cbd7c81e0885194166bf169e024fb4e7cf3 = $this->env->getExtension("native_profiler");
        $__internal_452ebd29310e00eadf529261bfd27cbd7c81e0885194166bf169e024fb4e7cf3->enter($__internal_452ebd29310e00eadf529261bfd27cbd7c81e0885194166bf169e024fb4e7cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_452ebd29310e00eadf529261bfd27cbd7c81e0885194166bf169e024fb4e7cf3->leave($__internal_452ebd29310e00eadf529261bfd27cbd7c81e0885194166bf169e024fb4e7cf3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_223d660f2cc311671d5940c67a2f8516f998c1ce7c49b30fad5f0f6a5c78fb0e = $this->env->getExtension("native_profiler");
        $__internal_223d660f2cc311671d5940c67a2f8516f998c1ce7c49b30fad5f0f6a5c78fb0e->enter($__internal_223d660f2cc311671d5940c67a2f8516f998c1ce7c49b30fad5f0f6a5c78fb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_223d660f2cc311671d5940c67a2f8516f998c1ce7c49b30fad5f0f6a5c78fb0e->leave($__internal_223d660f2cc311671d5940c67a2f8516f998c1ce7c49b30fad5f0f6a5c78fb0e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
