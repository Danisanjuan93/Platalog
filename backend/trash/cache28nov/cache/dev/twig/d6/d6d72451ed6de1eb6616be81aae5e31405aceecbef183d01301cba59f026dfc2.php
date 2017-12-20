<?php

/* ApiBundle:Notebook:get.html.twig */
class __TwigTemplate_36dc995cf20274bc72c937d619a1fc9e47bed5d078c4cde43a0e8aff6e64ce4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ApiBundle:Notebook:get.html.twig", 1);
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
        $__internal_88fe83f75fe16c88df7299344b7bc7922aec2d6168ac40d206a7161c7318587b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88fe83f75fe16c88df7299344b7bc7922aec2d6168ac40d206a7161c7318587b->enter($__internal_88fe83f75fe16c88df7299344b7bc7922aec2d6168ac40d206a7161c7318587b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ApiBundle:Notebook:get.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88fe83f75fe16c88df7299344b7bc7922aec2d6168ac40d206a7161c7318587b->leave($__internal_88fe83f75fe16c88df7299344b7bc7922aec2d6168ac40d206a7161c7318587b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce3d6e65f7dbb0a3c19d40c41c10808f8d9edef5fe25a79442156e73a9a545fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce3d6e65f7dbb0a3c19d40c41c10808f8d9edef5fe25a79442156e73a9a545fb->enter($__internal_ce3d6e65f7dbb0a3c19d40c41c10808f8d9edef5fe25a79442156e73a9a545fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ApiBundle:Notebook:get";
        
        $__internal_ce3d6e65f7dbb0a3c19d40c41c10808f8d9edef5fe25a79442156e73a9a545fb->leave($__internal_ce3d6e65f7dbb0a3c19d40c41c10808f8d9edef5fe25a79442156e73a9a545fb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f1f2924339880a915294386f9b0538847454a7db877186fc300457970edbd53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f1f2924339880a915294386f9b0538847454a7db877186fc300457970edbd53->enter($__internal_9f1f2924339880a915294386f9b0538847454a7db877186fc300457970edbd53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Notebook:get page</h1>
";
        
        $__internal_9f1f2924339880a915294386f9b0538847454a7db877186fc300457970edbd53->leave($__internal_9f1f2924339880a915294386f9b0538847454a7db877186fc300457970edbd53_prof);

    }

    public function getTemplateName()
    {
        return "ApiBundle:Notebook:get.html.twig";
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

{% block title %}ApiBundle:Notebook:get{% endblock %}

{% block body %}
<h1>Welcome to the Notebook:get page</h1>
{% endblock %}
", "ApiBundle:Notebook:get.html.twig", "/var/www/html/sf_platalog_bo/src/ApiBundle/Resources/views/Notebook/get.html.twig");
    }
}
