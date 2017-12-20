<?php

/* ApiBundle:Default:index.html.twig */
class __TwigTemplate_8267677c27eee6e8c0c2e0bef1412640ac5346da141367a7982f9888fe0552d5 extends Twig_Template
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
        $__internal_00e7a9db733ed4cb99d43c5429acc0840b55574261cf523eeae6f632b8e24f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00e7a9db733ed4cb99d43c5429acc0840b55574261cf523eeae6f632b8e24f8d->enter($__internal_00e7a9db733ed4cb99d43c5429acc0840b55574261cf523eeae6f632b8e24f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ApiBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!!!!!
";
        
        $__internal_00e7a9db733ed4cb99d43c5429acc0840b55574261cf523eeae6f632b8e24f8d->leave($__internal_00e7a9db733ed4cb99d43c5429acc0840b55574261cf523eeae6f632b8e24f8d_prof);

    }

    public function getTemplateName()
    {
        return "ApiBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!!!!!
", "ApiBundle:Default:index.html.twig", "/var/www/html/sf_platalog_bo/src/ApiBundle/Resources/views/Default/index.html.twig");
    }
}
