<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_cc0f104481baceeac79af289dfaeb0918d19b5c2f34fa6980a3e642b567c9af8 extends Twig_Template
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
        $__internal_e211bb64cb613731888315688bdd2d27c3051b978944629672d033cd5f686dbe = $this->env->getExtension("native_profiler");
        $__internal_e211bb64cb613731888315688bdd2d27c3051b978944629672d033cd5f686dbe->enter($__internal_e211bb64cb613731888315688bdd2d27c3051b978944629672d033cd5f686dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e211bb64cb613731888315688bdd2d27c3051b978944629672d033cd5f686dbe->leave($__internal_e211bb64cb613731888315688bdd2d27c3051b978944629672d033cd5f686dbe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
