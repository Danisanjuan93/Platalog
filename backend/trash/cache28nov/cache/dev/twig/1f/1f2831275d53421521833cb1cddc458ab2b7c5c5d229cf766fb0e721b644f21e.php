<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_c4d497769c0bae8d3fff73ec7d7fd214337707353cdfc9429f41f07bead02021 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_c943c2ad4d92337bcf632c13b06213348080a7eb181d9be40573358e1b102a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c943c2ad4d92337bcf632c13b06213348080a7eb181d9be40573358e1b102a24->enter($__internal_c943c2ad4d92337bcf632c13b06213348080a7eb181d9be40573358e1b102a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c943c2ad4d92337bcf632c13b06213348080a7eb181d9be40573358e1b102a24->leave($__internal_c943c2ad4d92337bcf632c13b06213348080a7eb181d9be40573358e1b102a24_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb85efeba7616f6c6b97fcb83829faa188e190a64578145e8e334dd6a83faaee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb85efeba7616f6c6b97fcb83829faa188e190a64578145e8e334dd6a83faaee->enter($__internal_bb85efeba7616f6c6b97fcb83829faa188e190a64578145e8e334dd6a83faaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_bb85efeba7616f6c6b97fcb83829faa188e190a64578145e8e334dd6a83faaee->leave($__internal_bb85efeba7616f6c6b97fcb83829faa188e190a64578145e8e334dd6a83faaee_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/sf_platalog_bo/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/edit.html.twig");
    }
}
