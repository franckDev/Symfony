<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ce99c2af37808c026f8ab034cbe89f1f02e06c118bec19b87ccecf6ba8dda1fb extends Twig_Template
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
        $__internal_414608ebb13814f1a8893f94ec1ed79a9ec1d763be8b65e16f7676acba6f7c83 = $this->env->getExtension("native_profiler");
        $__internal_414608ebb13814f1a8893f94ec1ed79a9ec1d763be8b65e16f7676acba6f7c83->enter($__internal_414608ebb13814f1a8893f94ec1ed79a9ec1d763be8b65e16f7676acba6f7c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_414608ebb13814f1a8893f94ec1ed79a9ec1d763be8b65e16f7676acba6f7c83->leave($__internal_414608ebb13814f1a8893f94ec1ed79a9ec1d763be8b65e16f7676acba6f7c83_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
