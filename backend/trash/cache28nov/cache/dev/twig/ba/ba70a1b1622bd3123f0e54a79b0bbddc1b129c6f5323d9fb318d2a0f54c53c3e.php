<?php

/* FOSOAuthServerBundle:Authorize:authorize_content.html.twig */
class __TwigTemplate_bee10ff3434cb24094f9a8286c77119179f34081926063e2476970e2c108fd4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3057fe3dbef1513168f99a54f548dab6eece558d3f1fa37f8dc37c186cfef468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3057fe3dbef1513168f99a54f548dab6eece558d3f1fa37f8dc37c186cfef468->enter($__internal_3057fe3dbef1513168f99a54f548dab6eece558d3f1fa37f8dc37c186cfef468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSOAuthServerBundle:Authorize:authorize_content.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_oauth_server_authorize"), "label_attr" => array("class" => "fos_oauth_server_authorize")));
        echo "
    <input type=\"submit\" name=\"accepted\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("authorize.accept", array(), "FOSOAuthServerBundle"), "html", null, true);
        echo "\" />
    <input type=\"submit\" name=\"rejected\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("authorize.reject", array(), "FOSOAuthServerBundle"), "html", null, true);
        echo "\" />

    ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client_id", array()), 'row');
        echo "
    ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "response_type", array()), 'row');
        echo "
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "redirect_uri", array()), 'row');
        echo "
    ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "state", array()), 'row');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "scope", array()), 'row');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>
";
        
        $__internal_3057fe3dbef1513168f99a54f548dab6eece558d3f1fa37f8dc37c186cfef468->leave($__internal_3057fe3dbef1513168f99a54f548dab6eece558d3f1fa37f8dc37c186cfef468_prof);

    }

    public function getTemplateName()
    {
        return "FOSOAuthServerBundle:Authorize:authorize_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 10,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  30 => 3,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form, {'method': 'POST', 'action': path('fos_oauth_server_authorize'), 'label_attr': {'class': 'fos_oauth_server_authorize'} }) }}
    <input type=\"submit\" name=\"accepted\" value=\"{{ 'authorize.accept'|trans({}, 'FOSOAuthServerBundle') }}\" />
    <input type=\"submit\" name=\"rejected\" value=\"{{ 'authorize.reject'|trans({}, 'FOSOAuthServerBundle') }}\" />

    {{ form_row(form.client_id) }}
    {{ form_row(form.response_type) }}
    {{ form_row(form.redirect_uri) }}
    {{ form_row(form.state) }}
    {{ form_row(form.scope) }}
    {{ form_rest(form) }}
</form>
", "FOSOAuthServerBundle:Authorize:authorize_content.html.twig", "/var/www/html/sf_platalog_bo/vendor/friendsofsymfony/oauth-server-bundle/Resources/views/Authorize/authorize_content.html.twig");
    }
}
