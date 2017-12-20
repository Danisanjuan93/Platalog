<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_173f6789ab20d93f11f09e4e6410c665f8127b7c403940f530ff63b646335ab4 extends Twig_Template
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
        $__internal_472f8922ec567fd48dd17b305cdf96eaf888c6e23356ca3abdc98b5b5d442394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_472f8922ec567fd48dd17b305cdf96eaf888c6e23356ca3abdc98b5b5d442394->enter($__internal_472f8922ec567fd48dd17b305cdf96eaf888c6e23356ca3abdc98b5b5d442394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_472f8922ec567fd48dd17b305cdf96eaf888c6e23356ca3abdc98b5b5d442394->leave($__internal_472f8922ec567fd48dd17b305cdf96eaf888c6e23356ca3abdc98b5b5d442394_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/sf_platalog_bo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
