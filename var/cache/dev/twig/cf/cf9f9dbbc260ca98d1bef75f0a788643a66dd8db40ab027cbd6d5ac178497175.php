<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_80fa9d28a025d1bb430bfc06a0c15a733ce4d2b132824a09e63522fc8e5bd013 extends Twig_Template
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
        $__internal_58097154bc91d8950d12f5d061dfeb5ac65adb65d7e0dd3e3efc99173494ed0f = $this->env->getExtension("native_profiler");
        $__internal_58097154bc91d8950d12f5d061dfeb5ac65adb65d7e0dd3e3efc99173494ed0f->enter($__internal_58097154bc91d8950d12f5d061dfeb5ac65adb65d7e0dd3e3efc99173494ed0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_58097154bc91d8950d12f5d061dfeb5ac65adb65d7e0dd3e3efc99173494ed0f->leave($__internal_58097154bc91d8950d12f5d061dfeb5ac65adb65d7e0dd3e3efc99173494ed0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
