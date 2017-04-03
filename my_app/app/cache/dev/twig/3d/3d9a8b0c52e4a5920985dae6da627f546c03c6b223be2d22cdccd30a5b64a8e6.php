<?php

/* tag/add.html.twig */
class __TwigTemplate_3662ffbb207c26b9b6d6e28224da212707b3f27a86b55cda11f4bf3fda42ddbc extends Twig_Template
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
        $__internal_e2a9c3d65cc9525b7f3f3181ffc0b14c3f7c87d53a2065fa68e019673a4134dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2a9c3d65cc9525b7f3f3181ffc0b14c3f7c87d53a2065fa68e019673a4134dd->enter($__internal_e2a9c3d65cc9525b7f3f3181ffc0b14c3f7c87d53a2065fa68e019673a4134dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2a9c3d65cc9525b7f3f3181ffc0b14c3f7c87d53a2065fa68e019673a4134dd->leave($__internal_e2a9c3d65cc9525b7f3f3181ffc0b14c3f7c87d53a2065fa68e019673a4134dd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c50e80d847fc2b5e90eed557b0a2483b8a8c71aa2544f2be3ffbb2a9b3d1919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c50e80d847fc2b5e90eed557b0a2483b8a8c71aa2544f2be3ffbb2a9b3d1919->enter($__internal_1c50e80d847fc2b5e90eed557b0a2483b8a8c71aa2544f2be3ffbb2a9b3d1919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.add_tag"), "html", null, true);
        echo "
";
        
        $__internal_1c50e80d847fc2b5e90eed557b0a2483b8a8c71aa2544f2be3ffbb2a9b3d1919->leave($__internal_1c50e80d847fc2b5e90eed557b0a2483b8a8c71aa2544f2be3ffbb2a9b3d1919_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_857e6ef5a6919bc86c4fc571e600b297f2e5d0bdd7b2a7fd1409177f7225b4c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_857e6ef5a6919bc86c4fc571e600b297f2e5d0bdd7b2a7fd1409177f7225b4c1->enter($__internal_857e6ef5a6919bc86c4fc571e600b297f2e5d0bdd7b2a7fd1409177f7225b4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_857e6ef5a6919bc86c4fc571e600b297f2e5d0bdd7b2a7fd1409177f7225b4c1->leave($__internal_857e6ef5a6919bc86c4fc571e600b297f2e5d0bdd7b2a7fd1409177f7225b4c1_prof);

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

{% endblock %}", "tag/add.html.twig", "/home/student/13_masiulaniec/projektgit/symfony/my_app/app/Resources/views/tag/add.html.twig");
    }
}
