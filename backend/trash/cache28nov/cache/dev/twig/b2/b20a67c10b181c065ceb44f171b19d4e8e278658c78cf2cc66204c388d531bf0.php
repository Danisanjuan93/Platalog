<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_56cf3db23e8855663e102261ade7cb95efb2e844497d182f826c7e7480794efe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_3ddc06c2f0b858db9ab58fab97034480239c48653eb6d3d46d481dedf032cba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ddc06c2f0b858db9ab58fab97034480239c48653eb6d3d46d481dedf032cba0->enter($__internal_3ddc06c2f0b858db9ab58fab97034480239c48653eb6d3d46d481dedf032cba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ddc06c2f0b858db9ab58fab97034480239c48653eb6d3d46d481dedf032cba0->leave($__internal_3ddc06c2f0b858db9ab58fab97034480239c48653eb6d3d46d481dedf032cba0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_92475ab46a73683b8698cc82c15b458f1cb22b271a434b477a41c5ea2093db37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92475ab46a73683b8698cc82c15b458f1cb22b271a434b477a41c5ea2093db37->enter($__internal_92475ab46a73683b8698cc82c15b458f1cb22b271a434b477a41c5ea2093db37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_92475ab46a73683b8698cc82c15b458f1cb22b271a434b477a41c5ea2093db37->leave($__internal_92475ab46a73683b8698cc82c15b458f1cb22b271a434b477a41c5ea2093db37_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:changePassword.html.twig", "/var/www/html/sf_platalog_bo/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/ChangePassword/changePassword.html.twig");
    }
}
