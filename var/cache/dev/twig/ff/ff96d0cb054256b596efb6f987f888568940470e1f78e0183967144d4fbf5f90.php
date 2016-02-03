<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_8e3363c8db0012df0bd947d82be4e3078eabb90c2de266209e371232a2f3cc7d extends Twig_Template
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
        $__internal_c520460a4cee84f98a0d6842bc95c34ef3be0ab49994e3b23a36aac9c332896c = $this->env->getExtension("native_profiler");
        $__internal_c520460a4cee84f98a0d6842bc95c34ef3be0ab49994e3b23a36aac9c332896c->enter($__internal_c520460a4cee84f98a0d6842bc95c34ef3be0ab49994e3b23a36aac9c332896c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c520460a4cee84f98a0d6842bc95c34ef3be0ab49994e3b23a36aac9c332896c->leave($__internal_c520460a4cee84f98a0d6842bc95c34ef3be0ab49994e3b23a36aac9c332896c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
