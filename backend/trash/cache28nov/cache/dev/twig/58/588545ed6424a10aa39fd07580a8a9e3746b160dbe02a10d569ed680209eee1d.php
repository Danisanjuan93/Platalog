<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_647f67bc4204f3bb4ebbd4fbfafc4300e4e299dd138730dc89b62933e2d44283 extends Twig_Template
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
        $__internal_ba296750e759c83638eb75c381597c6a9304b804626b8ebe099f88756aeb3d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba296750e759c83638eb75c381597c6a9304b804626b8ebe099f88756aeb3d50->enter($__internal_ba296750e759c83638eb75c381597c6a9304b804626b8ebe099f88756aeb3d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_ba296750e759c83638eb75c381597c6a9304b804626b8ebe099f88756aeb3d50->leave($__internal_ba296750e759c83638eb75c381597c6a9304b804626b8ebe099f88756aeb3d50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/sf_platalog_bo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
