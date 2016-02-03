<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_561a0626fa694dfcd859c92bd021e24fcf07ee7250b1cad8442a1cfa6b88bc2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_09096bdb4409bea70dbacd78b92a8bd80612d1d944ea84a83c99d189d2c6e585 = $this->env->getExtension("native_profiler");
        $__internal_09096bdb4409bea70dbacd78b92a8bd80612d1d944ea84a83c99d189d2c6e585->enter($__internal_09096bdb4409bea70dbacd78b92a8bd80612d1d944ea84a83c99d189d2c6e585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09096bdb4409bea70dbacd78b92a8bd80612d1d944ea84a83c99d189d2c6e585->leave($__internal_09096bdb4409bea70dbacd78b92a8bd80612d1d944ea84a83c99d189d2c6e585_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0b19d6c534a2c69e49f450cb1e94bd4a10b1459e9fcf85a78b97a2c071bd0b5c = $this->env->getExtension("native_profiler");
        $__internal_0b19d6c534a2c69e49f450cb1e94bd4a10b1459e9fcf85a78b97a2c071bd0b5c->enter($__internal_0b19d6c534a2c69e49f450cb1e94bd4a10b1459e9fcf85a78b97a2c071bd0b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0b19d6c534a2c69e49f450cb1e94bd4a10b1459e9fcf85a78b97a2c071bd0b5c->leave($__internal_0b19d6c534a2c69e49f450cb1e94bd4a10b1459e9fcf85a78b97a2c071bd0b5c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_00dab5c5220f9753370f3084f6082d26be5d85d52222c2aa6fc5595b6f77cd28 = $this->env->getExtension("native_profiler");
        $__internal_00dab5c5220f9753370f3084f6082d26be5d85d52222c2aa6fc5595b6f77cd28->enter($__internal_00dab5c5220f9753370f3084f6082d26be5d85d52222c2aa6fc5595b6f77cd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_00dab5c5220f9753370f3084f6082d26be5d85d52222c2aa6fc5595b6f77cd28->leave($__internal_00dab5c5220f9753370f3084f6082d26be5d85d52222c2aa6fc5595b6f77cd28_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fe4bd0f492f000f45eaa57e1f24d9846e34c0670042209de2ca278a6f8c1237 = $this->env->getExtension("native_profiler");
        $__internal_7fe4bd0f492f000f45eaa57e1f24d9846e34c0670042209de2ca278a6f8c1237->enter($__internal_7fe4bd0f492f000f45eaa57e1f24d9846e34c0670042209de2ca278a6f8c1237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7fe4bd0f492f000f45eaa57e1f24d9846e34c0670042209de2ca278a6f8c1237->leave($__internal_7fe4bd0f492f000f45eaa57e1f24d9846e34c0670042209de2ca278a6f8c1237_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
