<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_633e5f36c2831f756f255b7e68d39365b6ba5e703a66781c15d121e4ffc66692 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_64847046dff1942418894247b3e38a51841879424c466f78620dbac6aae2e737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64847046dff1942418894247b3e38a51841879424c466f78620dbac6aae2e737->enter($__internal_64847046dff1942418894247b3e38a51841879424c466f78620dbac6aae2e737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64847046dff1942418894247b3e38a51841879424c466f78620dbac6aae2e737->leave($__internal_64847046dff1942418894247b3e38a51841879424c466f78620dbac6aae2e737_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_17276ddda30dbb4133fd0261819134d14b0bc5da202979b5e472ca912017bf00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17276ddda30dbb4133fd0261819134d14b0bc5da202979b5e472ca912017bf00->enter($__internal_17276ddda30dbb4133fd0261819134d14b0bc5da202979b5e472ca912017bf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_17276ddda30dbb4133fd0261819134d14b0bc5da202979b5e472ca912017bf00->leave($__internal_17276ddda30dbb4133fd0261819134d14b0bc5da202979b5e472ca912017bf00_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/html/sf_platalog_bo/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/list.html.twig");
    }
}
