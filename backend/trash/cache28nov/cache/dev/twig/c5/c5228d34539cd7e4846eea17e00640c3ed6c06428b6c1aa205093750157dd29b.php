<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_68789f5ab78fcd0a5a1687298bbd5ebe7b74ee4ca1af07b6b2d37c9eea0fabef extends Twig_Template
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
        $__internal_e8399709da1cebe960ea02459c7e62ae940f5b1f1e40d8a717d4343d46a38fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8399709da1cebe960ea02459c7e62ae940f5b1f1e40d8a717d4343d46a38fa2->enter($__internal_e8399709da1cebe960ea02459c7e62ae940f5b1f1e40d8a717d4343d46a38fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_e8399709da1cebe960ea02459c7e62ae940f5b1f1e40d8a717d4343d46a38fa2->leave($__internal_e8399709da1cebe960ea02459c7e62ae940f5b1f1e40d8a717d4343d46a38fa2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/sf_platalog_bo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
