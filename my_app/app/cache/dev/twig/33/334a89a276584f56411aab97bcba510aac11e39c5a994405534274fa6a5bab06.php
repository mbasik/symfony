<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f2e6a76865a5b4686d5134f75c5723760078ce6747d61a9b395c55e864d4c685 extends Twig_Template
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
        $__internal_4c7a0d696b6c8333503d45ec5ffa2d00e5fd4948b160fc87b155632097fd52ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c7a0d696b6c8333503d45ec5ffa2d00e5fd4948b160fc87b155632097fd52ba->enter($__internal_4c7a0d696b6c8333503d45ec5ffa2d00e5fd4948b160fc87b155632097fd52ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c7a0d696b6c8333503d45ec5ffa2d00e5fd4948b160fc87b155632097fd52ba->leave($__internal_4c7a0d696b6c8333503d45ec5ffa2d00e5fd4948b160fc87b155632097fd52ba_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_24f11e81528105ca1b9dc90d16eda14bef62c91b440768d847a7298e20eefbe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f11e81528105ca1b9dc90d16eda14bef62c91b440768d847a7298e20eefbe9->enter($__internal_24f11e81528105ca1b9dc90d16eda14bef62c91b440768d847a7298e20eefbe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_24f11e81528105ca1b9dc90d16eda14bef62c91b440768d847a7298e20eefbe9->leave($__internal_24f11e81528105ca1b9dc90d16eda14bef62c91b440768d847a7298e20eefbe9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_01debc996c0183f1e2f8ae6369a2079bd80c6beb9dd0234d6f266670acf1b83a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01debc996c0183f1e2f8ae6369a2079bd80c6beb9dd0234d6f266670acf1b83a->enter($__internal_01debc996c0183f1e2f8ae6369a2079bd80c6beb9dd0234d6f266670acf1b83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_01debc996c0183f1e2f8ae6369a2079bd80c6beb9dd0234d6f266670acf1b83a->leave($__internal_01debc996c0183f1e2f8ae6369a2079bd80c6beb9dd0234d6f266670acf1b83a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4ec8af4ffa958310abde4aefa1d869cee3beceb52a37383607faced0d9f7540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ec8af4ffa958310abde4aefa1d869cee3beceb52a37383607faced0d9f7540->enter($__internal_d4ec8af4ffa958310abde4aefa1d869cee3beceb52a37383607faced0d9f7540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d4ec8af4ffa958310abde4aefa1d869cee3beceb52a37383607faced0d9f7540->leave($__internal_d4ec8af4ffa958310abde4aefa1d869cee3beceb52a37383607faced0d9f7540_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/basia/Dokumenty/programming/symfony/my_app/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
