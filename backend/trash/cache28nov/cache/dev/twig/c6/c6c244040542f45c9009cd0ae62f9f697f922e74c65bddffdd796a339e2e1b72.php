<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_83eef104ad7ad78f29bfc7664ae9d89b9b133b0bd629dc15077939fefa9f33f1 extends Twig_Template
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
        $__internal_4dbfab80f9d846110a1d7f0286448f43604fb474bda81266cac608e46a19eeff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dbfab80f9d846110a1d7f0286448f43604fb474bda81266cac608e46a19eeff->enter($__internal_4dbfab80f9d846110a1d7f0286448f43604fb474bda81266cac608e46a19eeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4dbfab80f9d846110a1d7f0286448f43604fb474bda81266cac608e46a19eeff->leave($__internal_4dbfab80f9d846110a1d7f0286448f43604fb474bda81266cac608e46a19eeff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/sf_platalog_bo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
