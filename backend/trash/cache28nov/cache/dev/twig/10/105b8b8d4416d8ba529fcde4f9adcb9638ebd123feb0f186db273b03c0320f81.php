<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_0482e1199f2ea1d43b0ec9e64f43651a56baa45f19937ef6304e99b0509cf902 extends Twig_Template
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
        $__internal_783c9854984c229b7f1132bde06c1e57edd040e601ee821414d0dab72b45802a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_783c9854984c229b7f1132bde06c1e57edd040e601ee821414d0dab72b45802a->enter($__internal_783c9854984c229b7f1132bde06c1e57edd040e601ee821414d0dab72b45802a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_783c9854984c229b7f1132bde06c1e57edd040e601ee821414d0dab72b45802a->leave($__internal_783c9854984c229b7f1132bde06c1e57edd040e601ee821414d0dab72b45802a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/sf_platalog_bo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
