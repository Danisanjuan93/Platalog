<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_59343945ab34e35bd38db3797612987b4be0ab8143bde5b96471df0e12b6f832 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_5ec971d74b402c7a981cf3d40a6a073044815c37b67238b67a1191c4870d04d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec971d74b402c7a981cf3d40a6a073044815c37b67238b67a1191c4870d04d2->enter($__internal_5ec971d74b402c7a981cf3d40a6a073044815c37b67238b67a1191c4870d04d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ec971d74b402c7a981cf3d40a6a073044815c37b67238b67a1191c4870d04d2->leave($__internal_5ec971d74b402c7a981cf3d40a6a073044815c37b67238b67a1191c4870d04d2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_27e0f37d031c8f839f14074073fd7cee05c03490f2b8b9575369567eba1b482d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e0f37d031c8f839f14074073fd7cee05c03490f2b8b9575369567eba1b482d->enter($__internal_27e0f37d031c8f839f14074073fd7cee05c03490f2b8b9575369567eba1b482d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_27e0f37d031c8f839f14074073fd7cee05c03490f2b8b9575369567eba1b482d->leave($__internal_27e0f37d031c8f839f14074073fd7cee05c03490f2b8b9575369567eba1b482d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/sf_platalog_bo/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/request.html.twig");
    }
}
