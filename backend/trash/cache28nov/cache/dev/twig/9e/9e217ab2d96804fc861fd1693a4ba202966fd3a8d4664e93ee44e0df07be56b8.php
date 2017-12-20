<?php

/* ApiBundle:Note:note.html.twig */
class __TwigTemplate_5fb23085e39758aca3aefde8e86267c494b2edec7042957da2ad2d13b5d17bae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ApiBundle:Note:note.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2dae8d54929750a4974b8dc0018dc4c4b942afffd1785d5d5d88b7e059d6761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2dae8d54929750a4974b8dc0018dc4c4b942afffd1785d5d5d88b7e059d6761->enter($__internal_b2dae8d54929750a4974b8dc0018dc4c4b942afffd1785d5d5d88b7e059d6761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ApiBundle:Note:note.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2dae8d54929750a4974b8dc0018dc4c4b942afffd1785d5d5d88b7e059d6761->leave($__internal_b2dae8d54929750a4974b8dc0018dc4c4b942afffd1785d5d5d88b7e059d6761_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_22c3e759bda268c11130933597d21bae9289f606541036859bb25fb8cb967232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c3e759bda268c11130933597d21bae9289f606541036859bb25fb8cb967232->enter($__internal_22c3e759bda268c11130933597d21bae9289f606541036859bb25fb8cb967232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ApiBundle:Note:note";
        
        $__internal_22c3e759bda268c11130933597d21bae9289f606541036859bb25fb8cb967232->leave($__internal_22c3e759bda268c11130933597d21bae9289f606541036859bb25fb8cb967232_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b9e7c7c697940916bb5e07c3639b44c72d81348d3bcb1bf34715ecd9fe83e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b9e7c7c697940916bb5e07c3639b44c72d81348d3bcb1bf34715ecd9fe83e15->enter($__internal_8b9e7c7c697940916bb5e07c3639b44c72d81348d3bcb1bf34715ecd9fe83e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Note:note page</h1>
";
        
        $__internal_8b9e7c7c697940916bb5e07c3639b44c72d81348d3bcb1bf34715ecd9fe83e15->leave($__internal_8b9e7c7c697940916bb5e07c3639b44c72d81348d3bcb1bf34715ecd9fe83e15_prof);

    }

    public function getTemplateName()
    {
        return "ApiBundle:Note:note.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}ApiBundle:Note:note{% endblock %}

{% block body %}
<h1>Welcome to the Note:note page</h1>
{% endblock %}
", "ApiBundle:Note:note.html.twig", "/var/www/html/sf_platalog_bo/src/ApiBundle/Resources/views/Note/note.html.twig");
    }
}
