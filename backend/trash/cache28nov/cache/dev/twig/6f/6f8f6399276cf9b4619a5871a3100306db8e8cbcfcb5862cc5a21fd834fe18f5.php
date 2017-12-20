<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_53ee773540e2e65c57ebdd9af11f10ca606254bf247fb13ae67e332fceaaf0fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_aaf6874b1b602c17217bd2b461363f9b4f29d3038e1faa0621a56e4d803ae172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf6874b1b602c17217bd2b461363f9b4f29d3038e1faa0621a56e4d803ae172->enter($__internal_aaf6874b1b602c17217bd2b461363f9b4f29d3038e1faa0621a56e4d803ae172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaf6874b1b602c17217bd2b461363f9b4f29d3038e1faa0621a56e4d803ae172->leave($__internal_aaf6874b1b602c17217bd2b461363f9b4f29d3038e1faa0621a56e4d803ae172_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c031144fd6b2f8184f1f325e9e8f7278aebc5e3969a22265d7f3460d9f014160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c031144fd6b2f8184f1f325e9e8f7278aebc5e3969a22265d7f3460d9f014160->enter($__internal_c031144fd6b2f8184f1f325e9e8f7278aebc5e3969a22265d7f3460d9f014160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_c031144fd6b2f8184f1f325e9e8f7278aebc5e3969a22265d7f3460d9f014160->leave($__internal_c031144fd6b2f8184f1f325e9e8f7278aebc5e3969a22265d7f3460d9f014160_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:checkEmail.html.twig", "/var/www/html/sf_platalog_bo/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/checkEmail.html.twig");
    }
}
