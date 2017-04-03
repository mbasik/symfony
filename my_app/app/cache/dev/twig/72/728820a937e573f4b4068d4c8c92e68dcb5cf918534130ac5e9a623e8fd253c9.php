<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3568201242c0a17bffb2a28df6c77c9d20c2a2a7090292b8850c83b00feb8c84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0aee6b3f85f902da49ad14197d8c85c365dd31acab897d7ea5c3fd560bc9a57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0aee6b3f85f902da49ad14197d8c85c365dd31acab897d7ea5c3fd560bc9a57->enter($__internal_b0aee6b3f85f902da49ad14197d8c85c365dd31acab897d7ea5c3fd560bc9a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0aee6b3f85f902da49ad14197d8c85c365dd31acab897d7ea5c3fd560bc9a57->leave($__internal_b0aee6b3f85f902da49ad14197d8c85c365dd31acab897d7ea5c3fd560bc9a57_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b1f06cd80f26d08a3e820f33a6aafe5b71662e6e98ee98b75b34f291e62e4c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1f06cd80f26d08a3e820f33a6aafe5b71662e6e98ee98b75b34f291e62e4c86->enter($__internal_b1f06cd80f26d08a3e820f33a6aafe5b71662e6e98ee98b75b34f291e62e4c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b1f06cd80f26d08a3e820f33a6aafe5b71662e6e98ee98b75b34f291e62e4c86->leave($__internal_b1f06cd80f26d08a3e820f33a6aafe5b71662e6e98ee98b75b34f291e62e4c86_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_270e09bb07c55c7cd28f2d14b7c18509383321abab9e3a78f26312168e48dbdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_270e09bb07c55c7cd28f2d14b7c18509383321abab9e3a78f26312168e48dbdb->enter($__internal_270e09bb07c55c7cd28f2d14b7c18509383321abab9e3a78f26312168e48dbdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_270e09bb07c55c7cd28f2d14b7c18509383321abab9e3a78f26312168e48dbdb->leave($__internal_270e09bb07c55c7cd28f2d14b7c18509383321abab9e3a78f26312168e48dbdb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_71638e2012b74e20238e8acf97d520972dd195d6e736a872f9b64ef59d5a557f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71638e2012b74e20238e8acf97d520972dd195d6e736a872f9b64ef59d5a557f->enter($__internal_71638e2012b74e20238e8acf97d520972dd195d6e736a872f9b64ef59d5a557f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_71638e2012b74e20238e8acf97d520972dd195d6e736a872f9b64ef59d5a557f->leave($__internal_71638e2012b74e20238e8acf97d520972dd195d6e736a872f9b64ef59d5a557f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/basia/Dokumenty/programming/symfony/my_app/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
