<?php

/* FOSOAuthServerBundle:Authorize:authorize.html.twig */
class __TwigTemplate_6ed593ce7e1f0a7ff8a1b650a5d51a8ebc5c5ce05bbbabff9753f9d3dba8bf72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSOAuthServerBundle::layout.html.twig", "FOSOAuthServerBundle:Authorize:authorize.html.twig", 1);
        $this->blocks = array(
            'fos_oauth_server_content' => array($this, 'block_fos_oauth_server_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSOAuthServerBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fca47f8344c36288a551f453a3fb4ba024b26bcc0f1be7aef0e28a1c418d91a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fca47f8344c36288a551f453a3fb4ba024b26bcc0f1be7aef0e28a1c418d91a->enter($__internal_5fca47f8344c36288a551f453a3fb4ba024b26bcc0f1be7aef0e28a1c418d91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSOAuthServerBundle:Authorize:authorize.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fca47f8344c36288a551f453a3fb4ba024b26bcc0f1be7aef0e28a1c418d91a->leave($__internal_5fca47f8344c36288a551f453a3fb4ba024b26bcc0f1be7aef0e28a1c418d91a_prof);

    }

    // line 3
    public function block_fos_oauth_server_content($context, array $blocks = array())
    {
        $__internal_84e0c6a75339faf2685a75264fba295faafc8724d17ab74f9cda7158fe3cef60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84e0c6a75339faf2685a75264fba295faafc8724d17ab74f9cda7158fe3cef60->enter($__internal_84e0c6a75339faf2685a75264fba295faafc8724d17ab74f9cda7158fe3cef60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_oauth_server_content"));

        // line 4
        $this->loadTemplate("FOSOAuthServerBundle:Authorize:authorize_content.html.twig", "FOSOAuthServerBundle:Authorize:authorize.html.twig", 4)->display($context);
        
        $__internal_84e0c6a75339faf2685a75264fba295faafc8724d17ab74f9cda7158fe3cef60->leave($__internal_84e0c6a75339faf2685a75264fba295faafc8724d17ab74f9cda7158fe3cef60_prof);

    }

    public function getTemplateName()
    {
        return "FOSOAuthServerBundle:Authorize:authorize.html.twig";
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
        return new Twig_Source("{% extends \"FOSOAuthServerBundle::layout.html.twig\" %}

{% block fos_oauth_server_content %}
{% include \"FOSOAuthServerBundle:Authorize:authorize_content.html.twig\" %}
{% endblock fos_oauth_server_content %}
", "FOSOAuthServerBundle:Authorize:authorize.html.twig", "/var/www/html/sf_platalog_bo/vendor/friendsofsymfony/oauth-server-bundle/Resources/views/Authorize/authorize.html.twig");
    }
}
