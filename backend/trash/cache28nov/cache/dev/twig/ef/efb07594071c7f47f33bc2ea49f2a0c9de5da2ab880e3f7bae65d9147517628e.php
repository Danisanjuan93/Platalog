<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_da185b78640014b43473770d8a29409d6b6f6996755d4dc8438b96957a384a05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ad9ab57fb782c891bf3602dbe9691ae0e565ae8380ab1ad85b49699135d3a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad9ab57fb782c891bf3602dbe9691ae0e565ae8380ab1ad85b49699135d3a92->enter($__internal_0ad9ab57fb782c891bf3602dbe9691ae0e565ae8380ab1ad85b49699135d3a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0ad9ab57fb782c891bf3602dbe9691ae0e565ae8380ab1ad85b49699135d3a92->leave($__internal_0ad9ab57fb782c891bf3602dbe9691ae0e565ae8380ab1ad85b49699135d3a92_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_aca2fc4a475259c92b5b3eb53824739f1db9af15eff13eee3dfd98d9141a7e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca2fc4a475259c92b5b3eb53824739f1db9af15eff13eee3dfd98d9141a7e45->enter($__internal_aca2fc4a475259c92b5b3eb53824739f1db9af15eff13eee3dfd98d9141a7e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_aca2fc4a475259c92b5b3eb53824739f1db9af15eff13eee3dfd98d9141a7e45->leave($__internal_aca2fc4a475259c92b5b3eb53824739f1db9af15eff13eee3dfd98d9141a7e45_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_da8c910a3427aef438ba72c48a5ea898477ea16538b25e603076944b4af73d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da8c910a3427aef438ba72c48a5ea898477ea16538b25e603076944b4af73d53->enter($__internal_da8c910a3427aef438ba72c48a5ea898477ea16538b25e603076944b4af73d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_da8c910a3427aef438ba72c48a5ea898477ea16538b25e603076944b4af73d53->leave($__internal_da8c910a3427aef438ba72c48a5ea898477ea16538b25e603076944b4af73d53_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b970d828313297fa66f3fb4b008f51416d5f609d3d4f7af3d39d2e510aa1d551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b970d828313297fa66f3fb4b008f51416d5f609d3d4f7af3d39d2e510aa1d551->enter($__internal_b970d828313297fa66f3fb4b008f51416d5f609d3d4f7af3d39d2e510aa1d551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b970d828313297fa66f3fb4b008f51416d5f609d3d4f7af3d39d2e510aa1d551->leave($__internal_b970d828313297fa66f3fb4b008f51416d5f609d3d4f7af3d39d2e510aa1d551_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/html/sf_platalog_bo/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/email.txt.twig");
    }
}
