<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_6730c9d97f7da73a3bfcbb766bbc7aaf8df486d29a393bf9db6bde0481b9d80e extends Twig_Template
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
        $__internal_503cc9ad6f8d3743873b4b24eb77eea15006aba67adced4f38d9f4ca4e3c075a = $this->env->getExtension("native_profiler");
        $__internal_503cc9ad6f8d3743873b4b24eb77eea15006aba67adced4f38d9f4ca4e3c075a->enter($__internal_503cc9ad6f8d3743873b4b24eb77eea15006aba67adced4f38d9f4ca4e3c075a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_503cc9ad6f8d3743873b4b24eb77eea15006aba67adced4f38d9f4ca4e3c075a->leave($__internal_503cc9ad6f8d3743873b4b24eb77eea15006aba67adced4f38d9f4ca4e3c075a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
