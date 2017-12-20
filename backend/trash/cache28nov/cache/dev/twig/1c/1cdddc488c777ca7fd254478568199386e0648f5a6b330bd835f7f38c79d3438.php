<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_015ac2e3185ddb71968b9c4e0e2675b3e5ba2f395cca0059e9a669a00979a5f2 extends Twig_Template
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
        $__internal_cc46159481025fed03fa008176dbacafe926c772a8f74529219a0af06f851956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc46159481025fed03fa008176dbacafe926c772a8f74529219a0af06f851956->enter($__internal_cc46159481025fed03fa008176dbacafe926c772a8f74529219a0af06f851956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_cc46159481025fed03fa008176dbacafe926c772a8f74529219a0af06f851956->leave($__internal_cc46159481025fed03fa008176dbacafe926c772a8f74529219a0af06f851956_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1278a1746f22f19a32df831857bb8cd9cde58a03a425d433cb34fde96236c6c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1278a1746f22f19a32df831857bb8cd9cde58a03a425d433cb34fde96236c6c7->enter($__internal_1278a1746f22f19a32df831857bb8cd9cde58a03a425d433cb34fde96236c6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1278a1746f22f19a32df831857bb8cd9cde58a03a425d433cb34fde96236c6c7->leave($__internal_1278a1746f22f19a32df831857bb8cd9cde58a03a425d433cb34fde96236c6c7_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3602ed5d438bbc2efa9a2df2143deff2023753b6479675fd9fe2a1319593944f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3602ed5d438bbc2efa9a2df2143deff2023753b6479675fd9fe2a1319593944f->enter($__internal_3602ed5d438bbc2efa9a2df2143deff2023753b6479675fd9fe2a1319593944f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3602ed5d438bbc2efa9a2df2143deff2023753b6479675fd9fe2a1319593944f->leave($__internal_3602ed5d438bbc2efa9a2df2143deff2023753b6479675fd9fe2a1319593944f_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_59a34262c3a3b534a39950ed0eedc881471e00ea53ed6db68fe12b26fd5c03b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a34262c3a3b534a39950ed0eedc881471e00ea53ed6db68fe12b26fd5c03b9->enter($__internal_59a34262c3a3b534a39950ed0eedc881471e00ea53ed6db68fe12b26fd5c03b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_59a34262c3a3b534a39950ed0eedc881471e00ea53ed6db68fe12b26fd5c03b9->leave($__internal_59a34262c3a3b534a39950ed0eedc881471e00ea53ed6db68fe12b26fd5c03b9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/html/sf_platalog_bo/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/email.txt.twig");
    }
}
