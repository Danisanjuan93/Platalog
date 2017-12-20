<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_a3ddf21f585924e94533ab43d11610c38f08718552a87bfeb59d9c178fcf8447 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2aa742596ebd6b425f75ce7d51184a84bcff98c0c27c6107afaea418fe38c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2aa742596ebd6b425f75ce7d51184a84bcff98c0c27c6107afaea418fe38c8e->enter($__internal_c2aa742596ebd6b425f75ce7d51184a84bcff98c0c27c6107afaea418fe38c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c2aa742596ebd6b425f75ce7d51184a84bcff98c0c27c6107afaea418fe38c8e->leave($__internal_c2aa742596ebd6b425f75ce7d51184a84bcff98c0c27c6107afaea418fe38c8e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_dac1b2c753e2c22582e6611434ed2286402c3463d1cac5e6a03f968c134b85b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac1b2c753e2c22582e6611434ed2286402c3463d1cac5e6a03f968c134b85b0->enter($__internal_dac1b2c753e2c22582e6611434ed2286402c3463d1cac5e6a03f968c134b85b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_dac1b2c753e2c22582e6611434ed2286402c3463d1cac5e6a03f968c134b85b0->leave($__internal_dac1b2c753e2c22582e6611434ed2286402c3463d1cac5e6a03f968c134b85b0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/sf_platalog_bo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
