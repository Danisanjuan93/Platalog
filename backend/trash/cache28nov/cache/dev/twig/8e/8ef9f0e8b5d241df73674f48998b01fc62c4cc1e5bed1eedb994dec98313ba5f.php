<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_64960c5c2124eab414ea40cb2493ac52c92261140784be113b63ebd2d5ab1e84 extends Twig_Template
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
        $__internal_544c6c682cbd220dac6ff4d8ffb736d52a0ef55ef3fc31ca9da30053a58f2be1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_544c6c682cbd220dac6ff4d8ffb736d52a0ef55ef3fc31ca9da30053a58f2be1->enter($__internal_544c6c682cbd220dac6ff4d8ffb736d52a0ef55ef3fc31ca9da30053a58f2be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_544c6c682cbd220dac6ff4d8ffb736d52a0ef55ef3fc31ca9da30053a58f2be1->leave($__internal_544c6c682cbd220dac6ff4d8ffb736d52a0ef55ef3fc31ca9da30053a58f2be1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/sf_platalog_bo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
