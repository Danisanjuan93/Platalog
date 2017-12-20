<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_57063b546aef38e75b324b1279549de9c1bd975b273f8d61dcefd34a43997f1f extends Twig_Template
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
        $__internal_6a87cf68a047cb2db4b405d3dd13c599a271344cd4e60c7cd85d3115692c67ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a87cf68a047cb2db4b405d3dd13c599a271344cd4e60c7cd85d3115692c67ea->enter($__internal_6a87cf68a047cb2db4b405d3dd13c599a271344cd4e60c7cd85d3115692c67ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_6a87cf68a047cb2db4b405d3dd13c599a271344cd4e60c7cd85d3115692c67ea->leave($__internal_6a87cf68a047cb2db4b405d3dd13c599a271344cd4e60c7cd85d3115692c67ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/sf_platalog_bo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
