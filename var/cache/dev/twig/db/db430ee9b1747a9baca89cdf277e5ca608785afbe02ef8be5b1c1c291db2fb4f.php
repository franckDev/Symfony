<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_dde227d245c04d715d50705afb0d19b8e6bacc4c720e1459d6cd8e5933d8d501 extends Twig_Template
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
        $__internal_adcbd771f09fb5c6d25006feacb98168aae8b81f3920d03a37f67496115bf9b7 = $this->env->getExtension("native_profiler");
        $__internal_adcbd771f09fb5c6d25006feacb98168aae8b81f3920d03a37f67496115bf9b7->enter($__internal_adcbd771f09fb5c6d25006feacb98168aae8b81f3920d03a37f67496115bf9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_adcbd771f09fb5c6d25006feacb98168aae8b81f3920d03a37f67496115bf9b7->leave($__internal_adcbd771f09fb5c6d25006feacb98168aae8b81f3920d03a37f67496115bf9b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
