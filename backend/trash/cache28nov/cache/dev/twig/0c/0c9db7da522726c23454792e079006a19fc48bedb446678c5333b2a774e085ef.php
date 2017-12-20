<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_c9bed2e4c42ffdb56a1dd53ac862fcb561b391365aaa0f4bd6e6fcd52e614042 extends Twig_Template
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
        $__internal_53400f5d97ab959e7a67a6e4e4f5f709cd032dc3d89b36d70f640dbee26f1efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53400f5d97ab959e7a67a6e4e4f5f709cd032dc3d89b36d70f640dbee26f1efe->enter($__internal_53400f5d97ab959e7a67a6e4e4f5f709cd032dc3d89b36d70f640dbee26f1efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_53400f5d97ab959e7a67a6e4e4f5f709cd032dc3d89b36d70f640dbee26f1efe->leave($__internal_53400f5d97ab959e7a67a6e4e4f5f709cd032dc3d89b36d70f640dbee26f1efe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/sf_platalog_bo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
