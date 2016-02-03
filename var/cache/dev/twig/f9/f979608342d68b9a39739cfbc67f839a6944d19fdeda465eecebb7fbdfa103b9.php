<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_b295bfe1fe8a0ac90985f113a2dccf02599513f74500c9c2cbb678dc4cdfc984 extends Twig_Template
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
        $__internal_8269dc5ffde7c604d434f76d7ff69ebc4487104d396df4e761fb3ac9a3ad1e50 = $this->env->getExtension("native_profiler");
        $__internal_8269dc5ffde7c604d434f76d7ff69ebc4487104d396df4e761fb3ac9a3ad1e50->enter($__internal_8269dc5ffde7c604d434f76d7ff69ebc4487104d396df4e761fb3ac9a3ad1e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8269dc5ffde7c604d434f76d7ff69ebc4487104d396df4e761fb3ac9a3ad1e50->leave($__internal_8269dc5ffde7c604d434f76d7ff69ebc4487104d396df4e761fb3ac9a3ad1e50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
