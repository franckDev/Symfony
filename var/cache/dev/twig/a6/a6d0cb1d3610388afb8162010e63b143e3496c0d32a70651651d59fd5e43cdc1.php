<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b213daba395e92971b51ca0d9536f45cc18e9ab31b19c718d89fb34255f27f94 extends Twig_Template
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
        $__internal_bb0738e9cc90f6512db56e7ada45529e423fdfad60a95ab4291d1d64d18d01cc = $this->env->getExtension("native_profiler");
        $__internal_bb0738e9cc90f6512db56e7ada45529e423fdfad60a95ab4291d1d64d18d01cc->enter($__internal_bb0738e9cc90f6512db56e7ada45529e423fdfad60a95ab4291d1d64d18d01cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_bb0738e9cc90f6512db56e7ada45529e423fdfad60a95ab4291d1d64d18d01cc->leave($__internal_bb0738e9cc90f6512db56e7ada45529e423fdfad60a95ab4291d1d64d18d01cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
