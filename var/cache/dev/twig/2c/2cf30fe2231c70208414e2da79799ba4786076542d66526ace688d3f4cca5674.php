<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_1d1a967f300ab1473a0dedac54e3720fdeb4a1a01a32f0faeb64d83215fc53c7 extends Twig_Template
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
        $__internal_458f0aa94a237efbc8265a625e8aaf30834c7fd41a29ec8b850eea50cb5b815d = $this->env->getExtension("native_profiler");
        $__internal_458f0aa94a237efbc8265a625e8aaf30834c7fd41a29ec8b850eea50cb5b815d->enter($__internal_458f0aa94a237efbc8265a625e8aaf30834c7fd41a29ec8b850eea50cb5b815d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_458f0aa94a237efbc8265a625e8aaf30834c7fd41a29ec8b850eea50cb5b815d->leave($__internal_458f0aa94a237efbc8265a625e8aaf30834c7fd41a29ec8b850eea50cb5b815d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
