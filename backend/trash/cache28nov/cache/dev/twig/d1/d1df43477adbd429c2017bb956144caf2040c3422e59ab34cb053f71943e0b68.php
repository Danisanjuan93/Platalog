<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_8e7a21b220ed1521a602e41354aca199becd0133c792b5467d61b5908be50ebb extends Twig_Template
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
        $__internal_c99a2e5b77f29876aa6d1dfb0bb0b46fb4f5d7c1b5718b1f5a0d67b18d8f9f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c99a2e5b77f29876aa6d1dfb0bb0b46fb4f5d7c1b5718b1f5a0d67b18d8f9f3f->enter($__internal_c99a2e5b77f29876aa6d1dfb0bb0b46fb4f5d7c1b5718b1f5a0d67b18d8f9f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c99a2e5b77f29876aa6d1dfb0bb0b46fb4f5d7c1b5718b1f5a0d67b18d8f9f3f->leave($__internal_c99a2e5b77f29876aa6d1dfb0bb0b46fb4f5d7c1b5718b1f5a0d67b18d8f9f3f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/sf_platalog_bo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
