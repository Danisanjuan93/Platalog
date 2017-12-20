<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_41467b8e3c096d14240a09f31838ab8a1df996cfec2c1a48b8227779f6bb0d22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_a12bc44cae805900d76cd1d213282340ad821d4c746ef2f5d77ad85961b8bbc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a12bc44cae805900d76cd1d213282340ad821d4c746ef2f5d77ad85961b8bbc3->enter($__internal_a12bc44cae805900d76cd1d213282340ad821d4c746ef2f5d77ad85961b8bbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a12bc44cae805900d76cd1d213282340ad821d4c746ef2f5d77ad85961b8bbc3->leave($__internal_a12bc44cae805900d76cd1d213282340ad821d4c746ef2f5d77ad85961b8bbc3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6dd694cd11c70c168e288a1d859cebc9469e60e9d3f19e1c9192b4693b3723f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dd694cd11c70c168e288a1d859cebc9469e60e9d3f19e1c9192b4693b3723f5->enter($__internal_6dd694cd11c70c168e288a1d859cebc9469e60e9d3f19e1c9192b4693b3723f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_6dd694cd11c70c168e288a1d859cebc9469e60e9d3f19e1c9192b4693b3723f5->leave($__internal_6dd694cd11c70c168e288a1d859cebc9469e60e9d3f19e1c9192b4693b3723f5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/sf_platalog_bo/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/reset.html.twig");
    }
}
