<?php

/* FOSOAuthServerBundle::layout.html.twig */
class __TwigTemplate_88a57d6c9221e002c8a4bf68f646c51b36ddb09b2ebee8f0eee83dfea5be1710 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_oauth_server_content' => array($this, 'block_fos_oauth_server_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7db338ec99fe0676dc0a36878b43e01f93953fb9d47aa96e63c4d5319b2db20c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db338ec99fe0676dc0a36878b43e01f93953fb9d47aa96e63c4d5319b2db20c->enter($__internal_7db338ec99fe0676dc0a36878b43e01f93953fb9d47aa96e63c4d5319b2db20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSOAuthServerBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        $this->displayBlock('fos_oauth_server_content', $context, $blocks);
        // line 10
        echo "        </div>
    </body>
</html>
";
        
        $__internal_7db338ec99fe0676dc0a36878b43e01f93953fb9d47aa96e63c4d5319b2db20c->leave($__internal_7db338ec99fe0676dc0a36878b43e01f93953fb9d47aa96e63c4d5319b2db20c_prof);

    }

    // line 8
    public function block_fos_oauth_server_content($context, array $blocks = array())
    {
        $__internal_b418c09ba9704ef13cd8907530d86c4857c25460434d4f285512b56d1212288f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b418c09ba9704ef13cd8907530d86c4857c25460434d4f285512b56d1212288f->enter($__internal_b418c09ba9704ef13cd8907530d86c4857c25460434d4f285512b56d1212288f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_oauth_server_content"));

        // line 9
        echo "            ";
        
        $__internal_b418c09ba9704ef13cd8907530d86c4857c25460434d4f285512b56d1212288f->leave($__internal_b418c09ba9704ef13cd8907530d86c4857c25460434d4f285512b56d1212288f_prof);

    }

    public function getTemplateName()
    {
        return "FOSOAuthServerBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  44 => 8,  34 => 10,  32 => 8,  23 => 1,);
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
    </head>
    <body>
        <div>
            {% block fos_oauth_server_content %}
            {% endblock fos_oauth_server_content %}
        </div>
    </body>
</html>
", "FOSOAuthServerBundle::layout.html.twig", "/var/www/html/sf_platalog_bo/vendor/friendsofsymfony/oauth-server-bundle/Resources/views/layout.html.twig");
    }
}
