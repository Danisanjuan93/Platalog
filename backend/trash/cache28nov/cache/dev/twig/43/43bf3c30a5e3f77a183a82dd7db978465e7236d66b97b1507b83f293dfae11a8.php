<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_61fdb798099ce9b9039ed6bb30c550a43f1bbf124f3e42ed84c96afc7c17a8e3 extends Twig_Template
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
        $__internal_7ada30712cb7effcb4d4be8d5c6407129dd74c894e5b637cfd2957397593c4f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ada30712cb7effcb4d4be8d5c6407129dd74c894e5b637cfd2957397593c4f3->enter($__internal_7ada30712cb7effcb4d4be8d5c6407129dd74c894e5b637cfd2957397593c4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_7ada30712cb7effcb4d4be8d5c6407129dd74c894e5b637cfd2957397593c4f3->leave($__internal_7ada30712cb7effcb4d4be8d5c6407129dd74c894e5b637cfd2957397593c4f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/html/sf_platalog_bo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
