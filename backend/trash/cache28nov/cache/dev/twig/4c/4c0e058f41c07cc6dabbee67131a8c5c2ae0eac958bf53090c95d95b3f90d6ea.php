<?php

/* CommandBundle:Default:index.html.twig */
class __TwigTemplate_4a065f66d73aaad65c84cefbc072ae2f811918f85654169c12005dead3e1edd4 extends Twig_Template
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
        $__internal_8a8a4b845b3275823c61218bdca2a78aee09bf397aaccb16c9829074fa515f5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8a4b845b3275823c61218bdca2a78aee09bf397aaccb16c9829074fa515f5a->enter($__internal_8a8a4b845b3275823c61218bdca2a78aee09bf397aaccb16c9829074fa515f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommandBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_8a8a4b845b3275823c61218bdca2a78aee09bf397aaccb16c9829074fa515f5a->leave($__internal_8a8a4b845b3275823c61218bdca2a78aee09bf397aaccb16c9829074fa515f5a_prof);

    }

    public function getTemplateName()
    {
        return "CommandBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "CommandBundle:Default:index.html.twig", "/var/www/html/sf_platalog_bo/src/CommandBundle/Resources/views/Default/index.html.twig");
    }
}
