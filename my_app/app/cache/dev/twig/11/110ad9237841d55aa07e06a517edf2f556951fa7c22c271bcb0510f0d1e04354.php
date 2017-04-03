<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1cc498303d05f5d849563254005eb3c69f849d160f66cb0461c58ad8cb59b25b extends Twig_Template
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
        $__internal_b8ab2e0b70cf1b39bcd7ee768d410ae3dfdb62bee8e204d6fc957ccb8f89552d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ab2e0b70cf1b39bcd7ee768d410ae3dfdb62bee8e204d6fc957ccb8f89552d->enter($__internal_b8ab2e0b70cf1b39bcd7ee768d410ae3dfdb62bee8e204d6fc957ccb8f89552d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8ab2e0b70cf1b39bcd7ee768d410ae3dfdb62bee8e204d6fc957ccb8f89552d->leave($__internal_b8ab2e0b70cf1b39bcd7ee768d410ae3dfdb62bee8e204d6fc957ccb8f89552d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f9a181375e875c9b4451f81f51f04c4e4c74895935ea08c3918bf70576ecf7fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a181375e875c9b4451f81f51f04c4e4c74895935ea08c3918bf70576ecf7fa->enter($__internal_f9a181375e875c9b4451f81f51f04c4e4c74895935ea08c3918bf70576ecf7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f9a181375e875c9b4451f81f51f04c4e4c74895935ea08c3918bf70576ecf7fa->leave($__internal_f9a181375e875c9b4451f81f51f04c4e4c74895935ea08c3918bf70576ecf7fa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e5260057fddced39b89c5e5b4ecf8ea9893befcbf55e3ce3513c22a54c93bfe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5260057fddced39b89c5e5b4ecf8ea9893befcbf55e3ce3513c22a54c93bfe1->enter($__internal_e5260057fddced39b89c5e5b4ecf8ea9893befcbf55e3ce3513c22a54c93bfe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e5260057fddced39b89c5e5b4ecf8ea9893befcbf55e3ce3513c22a54c93bfe1->leave($__internal_e5260057fddced39b89c5e5b4ecf8ea9893befcbf55e3ce3513c22a54c93bfe1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a20ca32f587602021ac2f72ab413e4fef613890148d522a3d3b2b0dc19481699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a20ca32f587602021ac2f72ab413e4fef613890148d522a3d3b2b0dc19481699->enter($__internal_a20ca32f587602021ac2f72ab413e4fef613890148d522a3d3b2b0dc19481699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a20ca32f587602021ac2f72ab413e4fef613890148d522a3d3b2b0dc19481699->leave($__internal_a20ca32f587602021ac2f72ab413e4fef613890148d522a3d3b2b0dc19481699_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/student/13_masiulaniec/projektgit/symfony/my_app/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
