<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_d7ac2a35b6b4a68ff16618e55d128e2cf6114a43571f9812102dbef9aa498312 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_b8077e7a09a67ea753a2070e8b8c165079a83666165a737119c76f18d37f8804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8077e7a09a67ea753a2070e8b8c165079a83666165a737119c76f18d37f8804->enter($__internal_b8077e7a09a67ea753a2070e8b8c165079a83666165a737119c76f18d37f8804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8077e7a09a67ea753a2070e8b8c165079a83666165a737119c76f18d37f8804->leave($__internal_b8077e7a09a67ea753a2070e8b8c165079a83666165a737119c76f18d37f8804_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_45d8a16a429ee164c20c7a8bded777f0388aab1c94a902a4953a4a1d78de68d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d8a16a429ee164c20c7a8bded777f0388aab1c94a902a4953a4a1d78de68d1->enter($__internal_45d8a16a429ee164c20c7a8bded777f0388aab1c94a902a4953a4a1d78de68d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_45d8a16a429ee164c20c7a8bded777f0388aab1c94a902a4953a4a1d78de68d1->leave($__internal_45d8a16a429ee164c20c7a8bded777f0388aab1c94a902a4953a4a1d78de68d1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/html/sf_platalog_bo/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/show.html.twig");
    }
}
