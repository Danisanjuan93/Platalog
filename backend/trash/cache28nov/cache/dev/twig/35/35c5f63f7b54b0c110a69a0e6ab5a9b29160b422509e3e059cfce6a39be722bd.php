<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_fa983e35522bd03ac4219c724660f605bbd7e3b8e3c79180bd0fe56f7baf583a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_e607f48f56dd96fd2ffc7bcefbef01a0cbdb9a3982f23110c47a2b7d0d7a8f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e607f48f56dd96fd2ffc7bcefbef01a0cbdb9a3982f23110c47a2b7d0d7a8f8e->enter($__internal_e607f48f56dd96fd2ffc7bcefbef01a0cbdb9a3982f23110c47a2b7d0d7a8f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e607f48f56dd96fd2ffc7bcefbef01a0cbdb9a3982f23110c47a2b7d0d7a8f8e->leave($__internal_e607f48f56dd96fd2ffc7bcefbef01a0cbdb9a3982f23110c47a2b7d0d7a8f8e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_13bc9a6ac8bb152b1471e25e914cc86d410aa6ec4aa986925e313c567a2868fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13bc9a6ac8bb152b1471e25e914cc86d410aa6ec4aa986925e313c567a2868fa->enter($__internal_13bc9a6ac8bb152b1471e25e914cc86d410aa6ec4aa986925e313c567a2868fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_13bc9a6ac8bb152b1471e25e914cc86d410aa6ec4aa986925e313c567a2868fa->leave($__internal_13bc9a6ac8bb152b1471e25e914cc86d410aa6ec4aa986925e313c567a2868fa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:checkEmail.html.twig", "/var/www/html/sf_platalog_bo/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/checkEmail.html.twig");
    }
}
