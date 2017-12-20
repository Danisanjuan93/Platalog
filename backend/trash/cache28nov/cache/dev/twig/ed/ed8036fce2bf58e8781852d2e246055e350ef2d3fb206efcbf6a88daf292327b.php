<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_3961faed89a0db4685e27dbe1a924d23b48e9a5645b5271f5e08f77750fa6cd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_2443ab606dd5c65178737631167e85c5d4faf2cc7f49af344f3566ea9912d600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2443ab606dd5c65178737631167e85c5d4faf2cc7f49af344f3566ea9912d600->enter($__internal_2443ab606dd5c65178737631167e85c5d4faf2cc7f49af344f3566ea9912d600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2443ab606dd5c65178737631167e85c5d4faf2cc7f49af344f3566ea9912d600->leave($__internal_2443ab606dd5c65178737631167e85c5d4faf2cc7f49af344f3566ea9912d600_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ad9ef16ddb3ce6a5720f25eaf1d4295a3da266e739a01580e2aca64a93da5695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9ef16ddb3ce6a5720f25eaf1d4295a3da266e739a01580e2aca64a93da5695->enter($__internal_ad9ef16ddb3ce6a5720f25eaf1d4295a3da266e739a01580e2aca64a93da5695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_ad9ef16ddb3ce6a5720f25eaf1d4295a3da266e739a01580e2aca64a93da5695->leave($__internal_ad9ef16ddb3ce6a5720f25eaf1d4295a3da266e739a01580e2aca64a93da5695_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/sf_platalog_bo/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/new.html.twig");
    }
}
