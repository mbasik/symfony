<?php

/* tag/add.html.twig */
class __TwigTemplate_eeca4359d9dd4b880c71226b63ab039a6982d29c30e79f4ad3d28be6988a3cf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0c6a41eeb84c3a8015928aaf3569eb82e92a1a21ed201cd2c4d750e07e83578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c6a41eeb84c3a8015928aaf3569eb82e92a1a21ed201cd2c4d750e07e83578->enter($__internal_e0c6a41eeb84c3a8015928aaf3569eb82e92a1a21ed201cd2c4d750e07e83578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0c6a41eeb84c3a8015928aaf3569eb82e92a1a21ed201cd2c4d750e07e83578->leave($__internal_e0c6a41eeb84c3a8015928aaf3569eb82e92a1a21ed201cd2c4d750e07e83578_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_867c1fbc42ea249312e64b19e5dae2133fbf19497a5a6bb5cb16eafbd46ff4d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_867c1fbc42ea249312e64b19e5dae2133fbf19497a5a6bb5cb16eafbd46ff4d3->enter($__internal_867c1fbc42ea249312e64b19e5dae2133fbf19497a5a6bb5cb16eafbd46ff4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.add_tag"), "html", null, true);
        echo "
";
        
        $__internal_867c1fbc42ea249312e64b19e5dae2133fbf19497a5a6bb5cb16eafbd46ff4d3->leave($__internal_867c1fbc42ea249312e64b19e5dae2133fbf19497a5a6bb5cb16eafbd46ff4d3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6290696b44d345792049c0a6fb9a377bb0b296a4bcf205f52c80f338501973a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6290696b44d345792049c0a6fb9a377bb0b296a4bcf205f52c80f338501973a->enter($__internal_e6290696b44d345792049c0a6fb9a377bb0b296a4bcf205f52c80f338501973a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <h1>
        ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.add_tag"), "html", null, true);
        echo "
    </h1>

    ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("tag_add")));
        echo "
    ";
        // line 14
        if ((false == $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "valid", array()))) {
            // line 15
            echo "        <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
            ";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message.form_error"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 22
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <div>
            <input type=\"submit\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.save"), "html", null, true);
        echo "\" class=\"btn btn-primary\" />
        </div>
    ";
        // line 26
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_e6290696b44d345792049c0a6fb9a377bb0b296a4bcf205f52c80f338501973a->leave($__internal_e6290696b44d345792049c0a6fb9a377bb0b296a4bcf205f52c80f338501973a_prof);

    }

    public function getTemplateName()
    {
        return "tag/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 26,  91 => 24,  85 => 22,  79 => 19,  73 => 15,  71 => 14,  67 => 13,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
    {{ 'title.add_tag'|trans }}
{% endblock %}

{% block body %}

    <h1>
        {{ 'title.add_tag'|trans }}
    </h1>

    {{ form_start(form, { method: 'post', action: url('tag_add') }) }}
    {% if false == form.vars.valid %}
        <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
            {{ 'message.form_error'|trans }}
        </div>
    {% endif %}
        {{ form_widget(form) }}
        <div>
            <input type=\"submit\" value=\"{{ 'action.save'|trans }}\" class=\"btn btn-primary\" />
        </div>
    {{ form_end(form) }}

{% endblock %}", "tag/add.html.twig", "/home/basia/Dokumenty/programming/symfony/my_app/app/Resources/views/tag/add.html.twig");
    }
}
