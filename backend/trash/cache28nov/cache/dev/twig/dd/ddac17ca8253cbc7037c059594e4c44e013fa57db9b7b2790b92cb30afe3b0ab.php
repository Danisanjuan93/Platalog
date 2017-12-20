<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_8093e917aa5fdaab5f39f0f12405943a95358597f9284c38afa4aca59818074b extends Twig_Template
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
        $__internal_dd7c5f0ebb7e377b91557835e12a631fe5355a40f0f4a0580f2c96a4ee70c6fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd7c5f0ebb7e377b91557835e12a631fe5355a40f0f4a0580f2c96a4ee70c6fb->enter($__internal_dd7c5f0ebb7e377b91557835e12a631fe5355a40f0f4a0580f2c96a4ee70c6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_dd7c5f0ebb7e377b91557835e12a631fe5355a40f0f4a0580f2c96a4ee70c6fb->leave($__internal_dd7c5f0ebb7e377b91557835e12a631fe5355a40f0f4a0580f2c96a4ee70c6fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/sf_platalog_bo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
