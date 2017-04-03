<?php

/* tag/view.html.twig */
class __TwigTemplate_9f6d305f9f78835a3ee32a5174229feda19be61da858f6c9c5e5b76137e103da extends Twig_Template
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
        $__internal_7dfc9dd35f9df5e91a2682705b5f249aaa81eff13f845f5b8dd5fc045fd497a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dfc9dd35f9df5e91a2682705b5f249aaa81eff13f845f5b8dd5fc045fd497a4->enter($__internal_7dfc9dd35f9df5e91a2682705b5f249aaa81eff13f845f5b8dd5fc045fd497a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dfc9dd35f9df5e91a2682705b5f249aaa81eff13f845f5b8dd5fc045fd497a4->leave($__internal_7dfc9dd35f9df5e91a2682705b5f249aaa81eff13f845f5b8dd5fc045fd497a4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd498b5be08a36a6a6b9a5bb0bf37a5a3fc9bd2be28b115e1b9c6b7138429804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd498b5be08a36a6a6b9a5bb0bf37a5a3fc9bd2be28b115e1b9c6b7138429804->enter($__internal_dd498b5be08a36a6a6b9a5bb0bf37a5a3fc9bd2be28b115e1b9c6b7138429804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        if ((array_key_exists("bookmark", $context) && twig_length_filter($this->env, (isset($context["bookmark"]) ? $context["bookmark"] : $this->getContext($context, "bookmark"))))) {
            // line 6
            echo "            dump(tag in bookmark.Tags)

    ";
        } else {
            // line 9
            echo "    <p>
        ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message.empty_list"), "html", null, true);
            echo "
    </p>
    ";
        }
        // line 13
        echo "
";
        
        $__internal_dd498b5be08a36a6a6b9a5bb0bf37a5a3fc9bd2be28b115e1b9c6b7138429804->leave($__internal_dd498b5be08a36a6a6b9a5bb0bf37a5a3fc9bd2be28b115e1b9c6b7138429804_prof);

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
        return array (  59 => 13,  53 => 10,  50 => 9,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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

    {% if bookmark is defined and bookmark|length %}
            dump(tag in bookmark.Tags)

    {% else %}
    <p>
        {{ 'message.empty_list'|trans }}
    </p>
    {% endif %}

{% endblock %}", "tag/view.html.twig", "/home/basia/Dokumenty/programming/symfony/my_app/app/Resources/views/tag/view.html.twig");
    }
}
