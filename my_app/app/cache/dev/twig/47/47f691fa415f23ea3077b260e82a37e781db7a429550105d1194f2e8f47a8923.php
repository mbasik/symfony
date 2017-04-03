<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a1be45362e6357a93e94f19771c61c2de8591f6b981b90a45bd6e58564db5216 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_8d1418c2933ea4df6784c8c374f8cb3eb640b6fc0b925b1fa4fbbb47a9804a69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d1418c2933ea4df6784c8c374f8cb3eb640b6fc0b925b1fa4fbbb47a9804a69->enter($__internal_8d1418c2933ea4df6784c8c374f8cb3eb640b6fc0b925b1fa4fbbb47a9804a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d1418c2933ea4df6784c8c374f8cb3eb640b6fc0b925b1fa4fbbb47a9804a69->leave($__internal_8d1418c2933ea4df6784c8c374f8cb3eb640b6fc0b925b1fa4fbbb47a9804a69_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a67fe5255c68ff175f3a78edb3230f069f2f2f267e79712ffc2ab237f5edb646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67fe5255c68ff175f3a78edb3230f069f2f2f267e79712ffc2ab237f5edb646->enter($__internal_a67fe5255c68ff175f3a78edb3230f069f2f2f267e79712ffc2ab237f5edb646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a67fe5255c68ff175f3a78edb3230f069f2f2f267e79712ffc2ab237f5edb646->leave($__internal_a67fe5255c68ff175f3a78edb3230f069f2f2f267e79712ffc2ab237f5edb646_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d21e32e3a55820494ac44da80ff67ea3af575c6dd16500b181ff9dd848e9904e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d21e32e3a55820494ac44da80ff67ea3af575c6dd16500b181ff9dd848e9904e->enter($__internal_d21e32e3a55820494ac44da80ff67ea3af575c6dd16500b181ff9dd848e9904e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d21e32e3a55820494ac44da80ff67ea3af575c6dd16500b181ff9dd848e9904e->leave($__internal_d21e32e3a55820494ac44da80ff67ea3af575c6dd16500b181ff9dd848e9904e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ad36ac8bcde7f81fe43bd44fe2e7ad2ed996ecd2e2e2c44cf9ad73aa2b4c3c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad36ac8bcde7f81fe43bd44fe2e7ad2ed996ecd2e2e2c44cf9ad73aa2b4c3c1->enter($__internal_1ad36ac8bcde7f81fe43bd44fe2e7ad2ed996ecd2e2e2c44cf9ad73aa2b4c3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1ad36ac8bcde7f81fe43bd44fe2e7ad2ed996ecd2e2e2c44cf9ad73aa2b4c3c1->leave($__internal_1ad36ac8bcde7f81fe43bd44fe2e7ad2ed996ecd2e2e2c44cf9ad73aa2b4c3c1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/home/student/13_masiulaniec/projektgit/symfony/my_app/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
