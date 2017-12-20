<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_64b6de4de2e16e91dc3228c7f29a1c09ed4122b916890ff10f8fea64e3d5c1d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_ce69539812c7c190502e5dfe837019204d3ce604276fcf8d0b40e27681699278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce69539812c7c190502e5dfe837019204d3ce604276fcf8d0b40e27681699278->enter($__internal_ce69539812c7c190502e5dfe837019204d3ce604276fcf8d0b40e27681699278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce69539812c7c190502e5dfe837019204d3ce604276fcf8d0b40e27681699278->leave($__internal_ce69539812c7c190502e5dfe837019204d3ce604276fcf8d0b40e27681699278_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_73353a9c4d9381aecee6558c545847947d0242bfe2a700518ae9cc85bebbe946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73353a9c4d9381aecee6558c545847947d0242bfe2a700518ae9cc85bebbe946->enter($__internal_73353a9c4d9381aecee6558c545847947d0242bfe2a700518ae9cc85bebbe946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_73353a9c4d9381aecee6558c545847947d0242bfe2a700518ae9cc85bebbe946->leave($__internal_73353a9c4d9381aecee6558c545847947d0242bfe2a700518ae9cc85bebbe946_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/sf_platalog_bo/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Profile/show.html.twig");
    }
}
