<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_98a457ab45e7017a1ddacd949e3bb765248285e1e1f49ef5a395e4bb12139ba9 extends Twig_Template
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
        $__internal_2042e1fd097bb3ecd756cca74c1b91f56018dd4ced2590239cfdba5f8ba655da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2042e1fd097bb3ecd756cca74c1b91f56018dd4ced2590239cfdba5f8ba655da->enter($__internal_2042e1fd097bb3ecd756cca74c1b91f56018dd4ced2590239cfdba5f8ba655da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_2042e1fd097bb3ecd756cca74c1b91f56018dd4ced2590239cfdba5f8ba655da->leave($__internal_2042e1fd097bb3ecd756cca74c1b91f56018dd4ced2590239cfdba5f8ba655da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/sf_platalog_bo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
