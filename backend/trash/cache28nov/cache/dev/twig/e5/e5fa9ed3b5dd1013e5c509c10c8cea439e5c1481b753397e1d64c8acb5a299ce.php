<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b24ff49895d754f5be199b807668e0c567bb83077425fc64dbda3c3dcacd7715 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1bc2803e50c31ce4caf86c1c44715ef2ff0a9189e519ad58e9e54bff8a344ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1bc2803e50c31ce4caf86c1c44715ef2ff0a9189e519ad58e9e54bff8a344ca->enter($__internal_f1bc2803e50c31ce4caf86c1c44715ef2ff0a9189e519ad58e9e54bff8a344ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1bc2803e50c31ce4caf86c1c44715ef2ff0a9189e519ad58e9e54bff8a344ca->leave($__internal_f1bc2803e50c31ce4caf86c1c44715ef2ff0a9189e519ad58e9e54bff8a344ca_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab1034c294852dd8b17e2ef33a3831956b35bd7bb04a8d693c21356851034d64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab1034c294852dd8b17e2ef33a3831956b35bd7bb04a8d693c21356851034d64->enter($__internal_ab1034c294852dd8b17e2ef33a3831956b35bd7bb04a8d693c21356851034d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ab1034c294852dd8b17e2ef33a3831956b35bd7bb04a8d693c21356851034d64->leave($__internal_ab1034c294852dd8b17e2ef33a3831956b35bd7bb04a8d693c21356851034d64_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2631d91355a331d4eff2c26c06abba5f584bda1d5813cbb0b812438f94dc0ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2631d91355a331d4eff2c26c06abba5f584bda1d5813cbb0b812438f94dc0ef9->enter($__internal_2631d91355a331d4eff2c26c06abba5f584bda1d5813cbb0b812438f94dc0ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2631d91355a331d4eff2c26c06abba5f584bda1d5813cbb0b812438f94dc0ef9->leave($__internal_2631d91355a331d4eff2c26c06abba5f584bda1d5813cbb0b812438f94dc0ef9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/sf_platalog_bo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
