<?php

/* base.html.twig */
class __TwigTemplate_8968afcf22da06906039ccb5dea2f4c8451c047da2697fea6dedd773d5ccf8f3 extends Twig_Template
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
        $__internal_e2f6de50dee222eef535be309c02a3be6a191e3266b61b453cdf9ac98fd7661b = $this->env->getExtension("native_profiler");
        $__internal_e2f6de50dee222eef535be309c02a3be6a191e3266b61b453cdf9ac98fd7661b->enter($__internal_e2f6de50dee222eef535be309c02a3be6a191e3266b61b453cdf9ac98fd7661b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e2f6de50dee222eef535be309c02a3be6a191e3266b61b453cdf9ac98fd7661b->leave($__internal_e2f6de50dee222eef535be309c02a3be6a191e3266b61b453cdf9ac98fd7661b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b8cd1af1dc3f057d43256c496d0e7cc7c6409397c9656664a9ff6b1356dc16e = $this->env->getExtension("native_profiler");
        $__internal_3b8cd1af1dc3f057d43256c496d0e7cc7c6409397c9656664a9ff6b1356dc16e->enter($__internal_3b8cd1af1dc3f057d43256c496d0e7cc7c6409397c9656664a9ff6b1356dc16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3b8cd1af1dc3f057d43256c496d0e7cc7c6409397c9656664a9ff6b1356dc16e->leave($__internal_3b8cd1af1dc3f057d43256c496d0e7cc7c6409397c9656664a9ff6b1356dc16e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_34714e159d2cfa35c92e5a4d0084c4a20ce6f7bd0c73af93f49622d452f29e64 = $this->env->getExtension("native_profiler");
        $__internal_34714e159d2cfa35c92e5a4d0084c4a20ce6f7bd0c73af93f49622d452f29e64->enter($__internal_34714e159d2cfa35c92e5a4d0084c4a20ce6f7bd0c73af93f49622d452f29e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_34714e159d2cfa35c92e5a4d0084c4a20ce6f7bd0c73af93f49622d452f29e64->leave($__internal_34714e159d2cfa35c92e5a4d0084c4a20ce6f7bd0c73af93f49622d452f29e64_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_aaf1ff4949810d4cdb304e0628327f2c4fa9661ef8d6d39f3ee713dea8d55716 = $this->env->getExtension("native_profiler");
        $__internal_aaf1ff4949810d4cdb304e0628327f2c4fa9661ef8d6d39f3ee713dea8d55716->enter($__internal_aaf1ff4949810d4cdb304e0628327f2c4fa9661ef8d6d39f3ee713dea8d55716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aaf1ff4949810d4cdb304e0628327f2c4fa9661ef8d6d39f3ee713dea8d55716->leave($__internal_aaf1ff4949810d4cdb304e0628327f2c4fa9661ef8d6d39f3ee713dea8d55716_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_34c0f8d1c8be20b3e74a8ed337623439378f4fe9f67ed9f7ed7c00a52adc5f51 = $this->env->getExtension("native_profiler");
        $__internal_34c0f8d1c8be20b3e74a8ed337623439378f4fe9f67ed9f7ed7c00a52adc5f51->enter($__internal_34c0f8d1c8be20b3e74a8ed337623439378f4fe9f67ed9f7ed7c00a52adc5f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_34c0f8d1c8be20b3e74a8ed337623439378f4fe9f67ed9f7ed7c00a52adc5f51->leave($__internal_34c0f8d1c8be20b3e74a8ed337623439378f4fe9f67ed9f7ed7c00a52adc5f51_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
