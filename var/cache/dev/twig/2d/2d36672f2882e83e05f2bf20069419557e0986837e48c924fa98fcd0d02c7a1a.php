<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_af3fdc7d83601a20eb1c29e27147368386f3a24513c8fc6bc722c9d3da273b24 extends Twig_Template
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
        $__internal_fc6c59657bf04ec1d2ad579f751c265a937040d0217a6f99f55d747acee38c0e = $this->env->getExtension("native_profiler");
        $__internal_fc6c59657bf04ec1d2ad579f751c265a937040d0217a6f99f55d747acee38c0e->enter($__internal_fc6c59657bf04ec1d2ad579f751c265a937040d0217a6f99f55d747acee38c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_fc6c59657bf04ec1d2ad579f751c265a937040d0217a6f99f55d747acee38c0e->leave($__internal_fc6c59657bf04ec1d2ad579f751c265a937040d0217a6f99f55d747acee38c0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
