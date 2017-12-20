<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c0c5beaa27de208191ab48dbefdcda5d7e7f50773840993ecb39c42da2b96a51 extends Twig_Template
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
        $__internal_dae1cb77a8f4ba8ff2385d7e8b7cddf5f62a215ddc9ae94bdfba3d3ac3450514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae1cb77a8f4ba8ff2385d7e8b7cddf5f62a215ddc9ae94bdfba3d3ac3450514->enter($__internal_dae1cb77a8f4ba8ff2385d7e8b7cddf5f62a215ddc9ae94bdfba3d3ac3450514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_dae1cb77a8f4ba8ff2385d7e8b7cddf5f62a215ddc9ae94bdfba3d3ac3450514->leave($__internal_dae1cb77a8f4ba8ff2385d7e8b7cddf5f62a215ddc9ae94bdfba3d3ac3450514_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/sf_platalog_bo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
