<?php

/* ::base.html.twig */
class __TwigTemplate_dda9209d79b161537c957f596a3b82e38b90825a60f1c7e084a4f1b27c512ac5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51260094f9ce0d09479e4ff8b56d43113db20199e50e438206bd5eca2a8cbe5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51260094f9ce0d09479e4ff8b56d43113db20199e50e438206bd5eca2a8cbe5e->enter($__internal_51260094f9ce0d09479e4ff8b56d43113db20199e50e438206bd5eca2a8cbe5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_51260094f9ce0d09479e4ff8b56d43113db20199e50e438206bd5eca2a8cbe5e->leave($__internal_51260094f9ce0d09479e4ff8b56d43113db20199e50e438206bd5eca2a8cbe5e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7df308d5ea8f77e9cbdccd14d8efc958de9dcdc3357409b1002878406ed8287c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df308d5ea8f77e9cbdccd14d8efc958de9dcdc3357409b1002878406ed8287c->enter($__internal_7df308d5ea8f77e9cbdccd14d8efc958de9dcdc3357409b1002878406ed8287c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7df308d5ea8f77e9cbdccd14d8efc958de9dcdc3357409b1002878406ed8287c->leave($__internal_7df308d5ea8f77e9cbdccd14d8efc958de9dcdc3357409b1002878406ed8287c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8e066ef78d80647590132a0de9863c5bdf93d74343103fc2bb43ab626833967e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e066ef78d80647590132a0de9863c5bdf93d74343103fc2bb43ab626833967e->enter($__internal_8e066ef78d80647590132a0de9863c5bdf93d74343103fc2bb43ab626833967e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8e066ef78d80647590132a0de9863c5bdf93d74343103fc2bb43ab626833967e->leave($__internal_8e066ef78d80647590132a0de9863c5bdf93d74343103fc2bb43ab626833967e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_41e718034895caaee4cb55d939c80e32f32ce3c6039d5c06f3db2ba4477ca98d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e718034895caaee4cb55d939c80e32f32ce3c6039d5c06f3db2ba4477ca98d->enter($__internal_41e718034895caaee4cb55d939c80e32f32ce3c6039d5c06f3db2ba4477ca98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "Hola";
        
        $__internal_41e718034895caaee4cb55d939c80e32f32ce3c6039d5c06f3db2ba4477ca98d->leave($__internal_41e718034895caaee4cb55d939c80e32f32ce3c6039d5c06f3db2ba4477ca98d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4da00100cf723a6829806b17604acadfe151c980804e638030922c56deb4ac34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da00100cf723a6829806b17604acadfe151c980804e638030922c56deb4ac34->enter($__internal_4da00100cf723a6829806b17604acadfe151c980804e638030922c56deb4ac34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4da00100cf723a6829806b17604acadfe151c980804e638030922c56deb4ac34->leave($__internal_4da00100cf723a6829806b17604acadfe151c980804e638030922c56deb4ac34_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}Hola{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/sf_platalog_bo/app/Resources/views/base.html.twig");
    }
}
