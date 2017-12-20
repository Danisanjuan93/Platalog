<?php

/* FOSOAuthServerBundle::form.html.twig */
class __TwigTemplate_6d337b3210a181b9585e9d9766bcc215e10ad2e89d34f3e39169ae32831efe47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_label' => array($this, 'block_field_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e668c75557a9826acff977a861456c8beee38a19e431ef9a74ecb7f0cd29b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e668c75557a9826acff977a861456c8beee38a19e431ef9a74ecb7f0cd29b86->enter($__internal_3e668c75557a9826acff977a861456c8beee38a19e431ef9a74ecb7f0cd29b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSOAuthServerBundle::form.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('field_label', $context, $blocks);
        
        $__internal_3e668c75557a9826acff977a861456c8beee38a19e431ef9a74ecb7f0cd29b86->leave($__internal_3e668c75557a9826acff977a861456c8beee38a19e431ef9a74ecb7f0cd29b86_prof);

    }

    public function block_field_label($context, array $blocks = array())
    {
        $__internal_dd4f7c458a32e12d10a38b6174b3e9e354c662af7250cafe2903f835b7f3a55a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd4f7c458a32e12d10a38b6174b3e9e354c662af7250cafe2903f835b7f3a55a->enter($__internal_dd4f7c458a32e12d10a38b6174b3e9e354c662af7250cafe2903f835b7f3a55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_label"));

        // line 3
        ob_start();
        // line 4
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), array(), "FOSOAuthServerBundle"), "html", null, true);
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_dd4f7c458a32e12d10a38b6174b3e9e354c662af7250cafe2903f835b7f3a55a->leave($__internal_dd4f7c458a32e12d10a38b6174b3e9e354c662af7250cafe2903f835b7f3a55a_prof);

    }

    public function getTemplateName()
    {
        return "FOSOAuthServerBundle::form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  38 => 3,  26 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block field_label %}
{% spaceless %}
    <label for=\"{{ id }}\">{{ id|trans([], 'FOSOAuthServerBundle') }}</label>
{% endspaceless %}
{% endblock field_label %}
", "FOSOAuthServerBundle::form.html.twig", "/var/www/html/sf_platalog_bo/vendor/friendsofsymfony/oauth-server-bundle/Resources/views/form.html.twig");
    }
}
