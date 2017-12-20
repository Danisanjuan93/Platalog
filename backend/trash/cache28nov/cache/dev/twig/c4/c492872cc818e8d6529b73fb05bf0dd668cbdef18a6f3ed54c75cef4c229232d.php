<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e8fa184640345a0efbfa96282626091f05b9ad1fcffc3fffd136d0e432445b7f extends Twig_Template
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
        $__internal_e5e0bcd20d1db74de5748c97cd1fe6affbd8502d9cae21f645f9d8b841e97bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e0bcd20d1db74de5748c97cd1fe6affbd8502d9cae21f645f9d8b841e97bd2->enter($__internal_e5e0bcd20d1db74de5748c97cd1fe6affbd8502d9cae21f645f9d8b841e97bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e5e0bcd20d1db74de5748c97cd1fe6affbd8502d9cae21f645f9d8b841e97bd2->leave($__internal_e5e0bcd20d1db74de5748c97cd1fe6affbd8502d9cae21f645f9d8b841e97bd2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/sf_platalog_bo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
