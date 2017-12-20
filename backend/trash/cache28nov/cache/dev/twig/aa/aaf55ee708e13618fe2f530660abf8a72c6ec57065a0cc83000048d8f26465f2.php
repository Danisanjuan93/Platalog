<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_1008d05bc7c357c66a58b11fa4c99f3934c5d8ae24d37d04fee3fc680513d6c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ed5cebcae981615af2dddddb9c578efa5208f6e26e80a70f0b035f723ec673d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed5cebcae981615af2dddddb9c578efa5208f6e26e80a70f0b035f723ec673d->enter($__internal_9ed5cebcae981615af2dddddb9c578efa5208f6e26e80a70f0b035f723ec673d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ed5cebcae981615af2dddddb9c578efa5208f6e26e80a70f0b035f723ec673d->leave($__internal_9ed5cebcae981615af2dddddb9c578efa5208f6e26e80a70f0b035f723ec673d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_73a464a18fca76800a07c3efe123724dc001e0b840a00dc7a83488dd5c956752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73a464a18fca76800a07c3efe123724dc001e0b840a00dc7a83488dd5c956752->enter($__internal_73a464a18fca76800a07c3efe123724dc001e0b840a00dc7a83488dd5c956752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_73a464a18fca76800a07c3efe123724dc001e0b840a00dc7a83488dd5c956752->leave($__internal_73a464a18fca76800a07c3efe123724dc001e0b840a00dc7a83488dd5c956752_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d25cba5636af04f5224e249f4f23d754c7ae1ccac95b24936abb5f0334c6bdcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d25cba5636af04f5224e249f4f23d754c7ae1ccac95b24936abb5f0334c6bdcb->enter($__internal_d25cba5636af04f5224e249f4f23d754c7ae1ccac95b24936abb5f0334c6bdcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d25cba5636af04f5224e249f4f23d754c7ae1ccac95b24936abb5f0334c6bdcb->leave($__internal_d25cba5636af04f5224e249f4f23d754c7ae1ccac95b24936abb5f0334c6bdcb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f31594cb163208e5b76dd4cee03f5c9946ed0cfad064df34fcacfc6e0397c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f31594cb163208e5b76dd4cee03f5c9946ed0cfad064df34fcacfc6e0397c69->enter($__internal_0f31594cb163208e5b76dd4cee03f5c9946ed0cfad064df34fcacfc6e0397c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0f31594cb163208e5b76dd4cee03f5c9946ed0cfad064df34fcacfc6e0397c69->leave($__internal_0f31594cb163208e5b76dd4cee03f5c9946ed0cfad064df34fcacfc6e0397c69_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/sf_platalog_bo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
