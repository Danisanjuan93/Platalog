<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_67e1aeb885c9a85bba8c4032245618a99657a3b87b3a7766bda788a9c59c5fe2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_c07f7a508e856b605811d1a6a3aded23444551613afa0d47b740cdaa4251da07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c07f7a508e856b605811d1a6a3aded23444551613afa0d47b740cdaa4251da07->enter($__internal_c07f7a508e856b605811d1a6a3aded23444551613afa0d47b740cdaa4251da07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c07f7a508e856b605811d1a6a3aded23444551613afa0d47b740cdaa4251da07->leave($__internal_c07f7a508e856b605811d1a6a3aded23444551613afa0d47b740cdaa4251da07_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4679dc070af5fad337fb87c711e6b00fc5864677b1d066be1525ef79e0ef2876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4679dc070af5fad337fb87c711e6b00fc5864677b1d066be1525ef79e0ef2876->enter($__internal_4679dc070af5fad337fb87c711e6b00fc5864677b1d066be1525ef79e0ef2876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_4679dc070af5fad337fb87c711e6b00fc5864677b1d066be1525ef79e0ef2876->leave($__internal_4679dc070af5fad337fb87c711e6b00fc5864677b1d066be1525ef79e0ef2876_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/sf_platalog_bo/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Profile/edit.html.twig");
    }
}
