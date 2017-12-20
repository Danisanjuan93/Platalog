<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c1d7f7c53c750d54db53e0f64f13b450db566cfdd2a77f2696d49ed4fad06b16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5037a10cda048c5731885a57dc3a77be17ed36b48d094a60b72c24c8f3d5a2d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5037a10cda048c5731885a57dc3a77be17ed36b48d094a60b72c24c8f3d5a2d5->enter($__internal_5037a10cda048c5731885a57dc3a77be17ed36b48d094a60b72c24c8f3d5a2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5037a10cda048c5731885a57dc3a77be17ed36b48d094a60b72c24c8f3d5a2d5->leave($__internal_5037a10cda048c5731885a57dc3a77be17ed36b48d094a60b72c24c8f3d5a2d5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f334ad126534dd3bc77feac88dec01e486f312fc885b584f10229feb6017aa1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f334ad126534dd3bc77feac88dec01e486f312fc885b584f10229feb6017aa1d->enter($__internal_f334ad126534dd3bc77feac88dec01e486f312fc885b584f10229feb6017aa1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f334ad126534dd3bc77feac88dec01e486f312fc885b584f10229feb6017aa1d->leave($__internal_f334ad126534dd3bc77feac88dec01e486f312fc885b584f10229feb6017aa1d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c5a0f92c9a84cd7fa91b93ef323dfde8e04e01eabda8ab242062272ecf60a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c5a0f92c9a84cd7fa91b93ef323dfde8e04e01eabda8ab242062272ecf60a4e->enter($__internal_0c5a0f92c9a84cd7fa91b93ef323dfde8e04e01eabda8ab242062272ecf60a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0c5a0f92c9a84cd7fa91b93ef323dfde8e04e01eabda8ab242062272ecf60a4e->leave($__internal_0c5a0f92c9a84cd7fa91b93ef323dfde8e04e01eabda8ab242062272ecf60a4e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a96e445e2524e75549448203eb7df3082c590e9467685d1ff06960abe2c6486b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a96e445e2524e75549448203eb7df3082c590e9467685d1ff06960abe2c6486b->enter($__internal_a96e445e2524e75549448203eb7df3082c590e9467685d1ff06960abe2c6486b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a96e445e2524e75549448203eb7df3082c590e9467685d1ff06960abe2c6486b->leave($__internal_a96e445e2524e75549448203eb7df3082c590e9467685d1ff06960abe2c6486b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/sf_platalog_bo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
