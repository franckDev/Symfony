<?php

/* ::base.html.twig */
class __TwigTemplate_23dc0cdca1e54e7edda3bfc34edb622bf87cefbe652a834a60fbd19823c045f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb52b4fd05610c2a185723c002daf5c127cf721ab487fd6ad637506cb3408b79 = $this->env->getExtension("native_profiler");
        $__internal_cb52b4fd05610c2a185723c002daf5c127cf721ab487fd6ad637506cb3408b79->enter($__internal_cb52b4fd05610c2a185723c002daf5c127cf721ab487fd6ad637506cb3408b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_cb52b4fd05610c2a185723c002daf5c127cf721ab487fd6ad637506cb3408b79->leave($__internal_cb52b4fd05610c2a185723c002daf5c127cf721ab487fd6ad637506cb3408b79_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c771b70021811d10492f5d16195c48fbf7c3576892010fb59e2adcc189e453a = $this->env->getExtension("native_profiler");
        $__internal_4c771b70021811d10492f5d16195c48fbf7c3576892010fb59e2adcc189e453a->enter($__internal_4c771b70021811d10492f5d16195c48fbf7c3576892010fb59e2adcc189e453a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4c771b70021811d10492f5d16195c48fbf7c3576892010fb59e2adcc189e453a->leave($__internal_4c771b70021811d10492f5d16195c48fbf7c3576892010fb59e2adcc189e453a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5da9c30651b1fc48f996ae2614a691386730515f6e792f904a0972f5e3bd22a2 = $this->env->getExtension("native_profiler");
        $__internal_5da9c30651b1fc48f996ae2614a691386730515f6e792f904a0972f5e3bd22a2->enter($__internal_5da9c30651b1fc48f996ae2614a691386730515f6e792f904a0972f5e3bd22a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5da9c30651b1fc48f996ae2614a691386730515f6e792f904a0972f5e3bd22a2->leave($__internal_5da9c30651b1fc48f996ae2614a691386730515f6e792f904a0972f5e3bd22a2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed5b41b1377878aa6bd5cbd6660b9ff96d2060490165a9323b13609455e17bb7 = $this->env->getExtension("native_profiler");
        $__internal_ed5b41b1377878aa6bd5cbd6660b9ff96d2060490165a9323b13609455e17bb7->enter($__internal_ed5b41b1377878aa6bd5cbd6660b9ff96d2060490165a9323b13609455e17bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ed5b41b1377878aa6bd5cbd6660b9ff96d2060490165a9323b13609455e17bb7->leave($__internal_ed5b41b1377878aa6bd5cbd6660b9ff96d2060490165a9323b13609455e17bb7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c0399bbfecd020b4efd2ed34983fac1efe94fdecf6a79b71193623153b0524ee = $this->env->getExtension("native_profiler");
        $__internal_c0399bbfecd020b4efd2ed34983fac1efe94fdecf6a79b71193623153b0524ee->enter($__internal_c0399bbfecd020b4efd2ed34983fac1efe94fdecf6a79b71193623153b0524ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c0399bbfecd020b4efd2ed34983fac1efe94fdecf6a79b71193623153b0524ee->leave($__internal_c0399bbfecd020b4efd2ed34983fac1efe94fdecf6a79b71193623153b0524ee_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
