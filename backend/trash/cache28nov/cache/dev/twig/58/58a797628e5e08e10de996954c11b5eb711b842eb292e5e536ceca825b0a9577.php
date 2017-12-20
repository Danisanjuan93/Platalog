<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_b02cb0a09a80252ee47c16eea5abcd992ac1fedde17446fd8f65e7c1e479018e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ffe7e8abd111f2ada43f49cdbf3076382dcbc2c667ac6ec0279e02803711183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ffe7e8abd111f2ada43f49cdbf3076382dcbc2c667ac6ec0279e02803711183->enter($__internal_9ffe7e8abd111f2ada43f49cdbf3076382dcbc2c667ac6ec0279e02803711183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ffe7e8abd111f2ada43f49cdbf3076382dcbc2c667ac6ec0279e02803711183->leave($__internal_9ffe7e8abd111f2ada43f49cdbf3076382dcbc2c667ac6ec0279e02803711183_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_19a20b65b0e50265514d4ca74adc8c1f258ff1d7e0faab8b07f41536bbb26d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a20b65b0e50265514d4ca74adc8c1f258ff1d7e0faab8b07f41536bbb26d74->enter($__internal_19a20b65b0e50265514d4ca74adc8c1f258ff1d7e0faab8b07f41536bbb26d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_19a20b65b0e50265514d4ca74adc8c1f258ff1d7e0faab8b07f41536bbb26d74->leave($__internal_19a20b65b0e50265514d4ca74adc8c1f258ff1d7e0faab8b07f41536bbb26d74_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/sf_platalog_bo/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
