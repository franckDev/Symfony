<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e0df90810da181ebf61f9a3c4fd28db1c4abf5383ec5cc3d4288a3023c672531 extends Twig_Template
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
        $__internal_c2972c18465df10b726d40d234c54104086545ef96baea3f1a36f169e906b3cc = $this->env->getExtension("native_profiler");
        $__internal_c2972c18465df10b726d40d234c54104086545ef96baea3f1a36f169e906b3cc->enter($__internal_c2972c18465df10b726d40d234c54104086545ef96baea3f1a36f169e906b3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c2972c18465df10b726d40d234c54104086545ef96baea3f1a36f169e906b3cc->leave($__internal_c2972c18465df10b726d40d234c54104086545ef96baea3f1a36f169e906b3cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
