<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_a970ee2d0a93642ca148e042b25f7e938d982c03bfdd0e0ce38668b62a68b196 extends Twig_Template
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
        $__internal_1698a09b8cb141710c0e0c78b3c3d8b50b73005879e5fd2dc0dbd5a7ca14fa15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1698a09b8cb141710c0e0c78b3c3d8b50b73005879e5fd2dc0dbd5a7ca14fa15->enter($__internal_1698a09b8cb141710c0e0c78b3c3d8b50b73005879e5fd2dc0dbd5a7ca14fa15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_1698a09b8cb141710c0e0c78b3c3d8b50b73005879e5fd2dc0dbd5a7ca14fa15->leave($__internal_1698a09b8cb141710c0e0c78b3c3d8b50b73005879e5fd2dc0dbd5a7ca14fa15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/sf_platalog_bo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
