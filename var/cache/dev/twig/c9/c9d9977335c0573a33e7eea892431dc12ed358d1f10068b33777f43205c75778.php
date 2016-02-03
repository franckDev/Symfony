<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_68cdd3478978e014e3d330ef8d35f7a85aef2d27795cbf86385ed1036e387ad9 extends Twig_Template
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
        $__internal_50144948b2950d67d43b6e8f04f97f7a9188033191724b79344d234d0fa53614 = $this->env->getExtension("native_profiler");
        $__internal_50144948b2950d67d43b6e8f04f97f7a9188033191724b79344d234d0fa53614->enter($__internal_50144948b2950d67d43b6e8f04f97f7a9188033191724b79344d234d0fa53614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_50144948b2950d67d43b6e8f04f97f7a9188033191724b79344d234d0fa53614->leave($__internal_50144948b2950d67d43b6e8f04f97f7a9188033191724b79344d234d0fa53614_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
