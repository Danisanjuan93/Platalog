<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4cdcef305fc26cdfdc483ff47b38e9a96dcc1f90ec2ddba80b032f93b2bcb46f extends Twig_Template
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
        $__internal_99025cac45c96dcc6bab298e54cc46cdb394fcdf28054e481eb17a813b25dfeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99025cac45c96dcc6bab298e54cc46cdb394fcdf28054e481eb17a813b25dfeb->enter($__internal_99025cac45c96dcc6bab298e54cc46cdb394fcdf28054e481eb17a813b25dfeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_99025cac45c96dcc6bab298e54cc46cdb394fcdf28054e481eb17a813b25dfeb->leave($__internal_99025cac45c96dcc6bab298e54cc46cdb394fcdf28054e481eb17a813b25dfeb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/sf_platalog_bo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
