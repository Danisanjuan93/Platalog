<?php

/* ApiBundle:Activity:get_activity.html.twig */
class __TwigTemplate_1e73ce736c4966f0abf433d321e24fe3eb96d5c47210754ee89023bf27aac082 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ApiBundle:Activity:get_activity.html.twig", 1);
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
        $__internal_7616064b64df3632333d783633a2448375d5bb198300102726b30b214e36451d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7616064b64df3632333d783633a2448375d5bb198300102726b30b214e36451d->enter($__internal_7616064b64df3632333d783633a2448375d5bb198300102726b30b214e36451d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ApiBundle:Activity:get_activity.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7616064b64df3632333d783633a2448375d5bb198300102726b30b214e36451d->leave($__internal_7616064b64df3632333d783633a2448375d5bb198300102726b30b214e36451d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_43d99f52088d90e3c99b480440dce1dcf1589165e3517d446da56f9536e4b90f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d99f52088d90e3c99b480440dce1dcf1589165e3517d446da56f9536e4b90f->enter($__internal_43d99f52088d90e3c99b480440dce1dcf1589165e3517d446da56f9536e4b90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ApiBundle:Activity:getActivity";
        
        $__internal_43d99f52088d90e3c99b480440dce1dcf1589165e3517d446da56f9536e4b90f->leave($__internal_43d99f52088d90e3c99b480440dce1dcf1589165e3517d446da56f9536e4b90f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_103e32e77d2dc750e0973b78e89ee40d0a73f4db4ca30233a3b220b88763f75b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103e32e77d2dc750e0973b78e89ee40d0a73f4db4ca30233a3b220b88763f75b->enter($__internal_103e32e77d2dc750e0973b78e89ee40d0a73f4db4ca30233a3b220b88763f75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Activity:getActivity page</h1>
";
        
        $__internal_103e32e77d2dc750e0973b78e89ee40d0a73f4db4ca30233a3b220b88763f75b->leave($__internal_103e32e77d2dc750e0973b78e89ee40d0a73f4db4ca30233a3b220b88763f75b_prof);

    }

    public function getTemplateName()
    {
        return "ApiBundle:Activity:get_activity.html.twig";
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

{% block title %}ApiBundle:Activity:getActivity{% endblock %}

{% block body %}
<h1>Welcome to the Activity:getActivity page</h1>
{% endblock %}
", "ApiBundle:Activity:get_activity.html.twig", "/var/www/html/sf_platalog_bo/src/ApiBundle/Resources/views/Activity/get_activity.html.twig");
    }
}
