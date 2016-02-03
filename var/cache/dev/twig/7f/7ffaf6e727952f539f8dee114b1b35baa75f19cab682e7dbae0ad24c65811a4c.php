<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_3ebcafca0573da726dbf800fac6c36f04f24e66dcb566ce7b236cd3bc9da326c extends Twig_Template
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
        $__internal_bb87e3eec8d59f7f86e176e8f69ac03251450e7d4bf1263d139cf60386c0d4ea = $this->env->getExtension("native_profiler");
        $__internal_bb87e3eec8d59f7f86e176e8f69ac03251450e7d4bf1263d139cf60386c0d4ea->enter($__internal_bb87e3eec8d59f7f86e176e8f69ac03251450e7d4bf1263d139cf60386c0d4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_bb87e3eec8d59f7f86e176e8f69ac03251450e7d4bf1263d139cf60386c0d4ea->leave($__internal_bb87e3eec8d59f7f86e176e8f69ac03251450e7d4bf1263d139cf60386c0d4ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
