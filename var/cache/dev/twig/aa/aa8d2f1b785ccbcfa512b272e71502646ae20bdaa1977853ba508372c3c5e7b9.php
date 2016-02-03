<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_dc8a8fcb5512d23956a71dbeec5f73a3d805652f98f12455d1a6e31c960a9917 extends Twig_Template
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
        $__internal_ecd4a69ec4af83e20cac711414418826724a2d3726a68e3f2cc61c5d059cad70 = $this->env->getExtension("native_profiler");
        $__internal_ecd4a69ec4af83e20cac711414418826724a2d3726a68e3f2cc61c5d059cad70->enter($__internal_ecd4a69ec4af83e20cac711414418826724a2d3726a68e3f2cc61c5d059cad70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_ecd4a69ec4af83e20cac711414418826724a2d3726a68e3f2cc61c5d059cad70->leave($__internal_ecd4a69ec4af83e20cac711414418826724a2d3726a68e3f2cc61c5d059cad70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
