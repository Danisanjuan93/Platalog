<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_a5a73025a7e0786a98883053610e819c04d9f1c1a670b788acc8252b745f83ea extends Twig_Template
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
        $__internal_f7020960e9e0b05f66f463d7cf4e05a7150f95f35ada5f60c66b194a9a9c53af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7020960e9e0b05f66f463d7cf4e05a7150f95f35ada5f60c66b194a9a9c53af->enter($__internal_f7020960e9e0b05f66f463d7cf4e05a7150f95f35ada5f60c66b194a9a9c53af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_f7020960e9e0b05f66f463d7cf4e05a7150f95f35ada5f60c66b194a9a9c53af->leave($__internal_f7020960e9e0b05f66f463d7cf4e05a7150f95f35ada5f60c66b194a9a9c53af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/sf_platalog_bo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
