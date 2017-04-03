<?php

/* tag/view.html.twig */
class __TwigTemplate_3b95bb2b9412d240534c5fd114f9606c093acd6d6e87a57bd0f66935af705f59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/view.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_214ca2588c195cd216b92ccf346d3f3fc22cfdabacf0c4f02476e04b3d1337aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214ca2588c195cd216b92ccf346d3f3fc22cfdabacf0c4f02476e04b3d1337aa->enter($__internal_214ca2588c195cd216b92ccf346d3f3fc22cfdabacf0c4f02476e04b3d1337aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_214ca2588c195cd216b92ccf346d3f3fc22cfdabacf0c4f02476e04b3d1337aa->leave($__internal_214ca2588c195cd216b92ccf346d3f3fc22cfdabacf0c4f02476e04b3d1337aa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6dfb2e6ab829b5221adcf27303f99e24eea9ee52f3bbae504eaf60fde1717ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dfb2e6ab829b5221adcf27303f99e24eea9ee52f3bbae504eaf60fde1717ab2->enter($__internal_6dfb2e6ab829b5221adcf27303f99e24eea9ee52f3bbae504eaf60fde1717ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        if ((array_key_exists("tag", $context) && twig_length_filter($this->env, (isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag"))))) {
            // line 6
            echo "               <li> ";
            echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "html", null, true);
            echo " </li>
    ";
        } else {
            // line 8
            echo "    <p>
        ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message.empty_list"), "html", null, true);
            echo "
    </p>
    ";
        }
        
        $__internal_6dfb2e6ab829b5221adcf27303f99e24eea9ee52f3bbae504eaf60fde1717ab2->leave($__internal_6dfb2e6ab829b5221adcf27303f99e24eea9ee52f3bbae504eaf60fde1717ab2_prof);

    }

    public function getTemplateName()
    {
        return "tag/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  51 => 8,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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

{% block body %}

    {% if tag is defined and tag|length %}
               <li> {{ tag }} </li>
    {% else %}
    <p>
        {{ 'message.empty_list'|trans }}
    </p>
    {%  endif %}
{% endblock %}", "tag/view.html.twig", "/home/student/13_masiulaniec/projektgit/symfony/my_app/app/Resources/views/tag/view.html.twig");
    }
}
