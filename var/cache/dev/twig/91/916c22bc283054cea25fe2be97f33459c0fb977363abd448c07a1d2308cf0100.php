<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_7de22217b31dbfd72a4d230ba95b59eb80c57bff0e643e5cd45931ee22391e25 extends Twig_Template
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
        $__internal_d407c18088e306ed8e3f188ce4336c4b7b9c029b4483d24f20d4f8e591d9667f = $this->env->getExtension("native_profiler");
        $__internal_d407c18088e306ed8e3f188ce4336c4b7b9c029b4483d24f20d4f8e591d9667f->enter($__internal_d407c18088e306ed8e3f188ce4336c4b7b9c029b4483d24f20d4f8e591d9667f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d407c18088e306ed8e3f188ce4336c4b7b9c029b4483d24f20d4f8e591d9667f->leave($__internal_d407c18088e306ed8e3f188ce4336c4b7b9c029b4483d24f20d4f8e591d9667f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
