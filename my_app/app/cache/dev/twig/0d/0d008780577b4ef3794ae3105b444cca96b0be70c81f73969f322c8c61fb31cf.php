<?php

/* tag/index.html.twig */
class __TwigTemplate_180323e7a3f963871c4fb25a85e24f0669ad5e2756a5c5a204bf56922fdd7340 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/index.html.twig", 1);
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
        $__internal_80d28b0b1959e833189ac1a4a749df78b2c8c2365125a756b8e067219d4d1c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d28b0b1959e833189ac1a4a749df78b2c8c2365125a756b8e067219d4d1c80->enter($__internal_80d28b0b1959e833189ac1a4a749df78b2c8c2365125a756b8e067219d4d1c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80d28b0b1959e833189ac1a4a749df78b2c8c2365125a756b8e067219d4d1c80->leave($__internal_80d28b0b1959e833189ac1a4a749df78b2c8c2365125a756b8e067219d4d1c80_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea35d62b639ee8c3dd10c74a42a98480309d3b433c00a92235ba2fecfd3b041f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea35d62b639ee8c3dd10c74a42a98480309d3b433c00a92235ba2fecfd3b041f->enter($__internal_ea35d62b639ee8c3dd10c74a42a98480309d3b433c00a92235ba2fecfd3b041f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.tags"), "html", null, true);
        echo "
";
        
        $__internal_ea35d62b639ee8c3dd10c74a42a98480309d3b433c00a92235ba2fecfd3b041f->leave($__internal_ea35d62b639ee8c3dd10c74a42a98480309d3b433c00a92235ba2fecfd3b041f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ef9462fa8a9db7c954c5312d492b3b8d2529f1141cddabe59c6afa1cadf68b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef9462fa8a9db7c954c5312d492b3b8d2529f1141cddabe59c6afa1cadf68b3->enter($__internal_7ef9462fa8a9db7c954c5312d492b3b8d2529f1141cddabe59c6afa1cadf68b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.tags"), "html", null, true);
        echo "</h1>
    ";
        // line 9
        if ((array_key_exists("tags", $context) && twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags"))))) {
            // line 10
            echo "        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.id"), "html", null, true);
            echo "</th>
                    <th>";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.name"), "html", null, true);
            echo "</th>
                    <th scope=\"col\">
                        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.actions"), "html", null, true);
            echo "
                    </th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 22
                echo "                    <tr>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "</td>
                        <td>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.actions"), "html", null, true);
                echo "\">
                                <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_view", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.view"), "html", null, true);
                echo "\">
                                    <span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span>
                                    ";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.view"), "html", null, true);
                echo "
                                </a>
                            </div>
                        </td>
                         <td>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.actions"), "html", null, true);
                echo "\">
                                <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_add", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.add"), "html", null, true);
                echo "\">
                                    <span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span>
                                    ";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.add"), "html", null, true);
                echo "
                                </a>
                            </div>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                <div class=\"navigation text-center\">
            ";
            // line 44
            echo $this->env->getExtension('WhiteOctober\PagerfantaBundle\Twig\PagerfantaExtension')->renderPagerfanta((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")), "twitter_bootstrap3_translated", array("routeName" => "tag_index_paginated"));
            echo "
        </div>

            </tbody>
        </table>

    ";
        } else {
            // line 51
            echo "        <div class=\"alert alert-warning\" role=\"alert\">
            ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message.empty_list"), "html", null, true);
            echo "
        </div>
    ";
        }
        
        $__internal_7ef9462fa8a9db7c954c5312d492b3b8d2529f1141cddabe59c6afa1cadf68b3->leave($__internal_7ef9462fa8a9db7c954c5312d492b3b8d2529f1141cddabe59c6afa1cadf68b3_prof);

    }

    public function getTemplateName()
    {
        return "tag/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 52,  157 => 51,  147 => 44,  144 => 43,  132 => 37,  125 => 35,  121 => 34,  113 => 29,  106 => 27,  102 => 26,  97 => 24,  93 => 23,  90 => 22,  86 => 21,  78 => 16,  73 => 14,  69 => 13,  64 => 10,  62 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
    {{ 'title.tags'|trans }}
{% endblock %}

{% block body %}
    <h1>{{ 'title.tags'|trans }}</h1>
    {% if tags is defined and tags|length %}
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>{{ 'label.id'|trans }}</th>
                    <th>{{ 'label.name'|trans }}</th>
                    <th scope=\"col\">
                        <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>{{ 'label.actions'|trans }}
                    </th>
                </tr>
            </thead>
            <tbody>
                {% for item in tags %}
                    <tr>
                        <td>{{ item.id }}</td>
                        <td>{{ item.name }}</td>
                        <td>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"{{ 'label.actions'|trans }}\">
                                <a href=\"{{ path('tag_view', {'id': item.id}) }}\" class=\"btn btn-default\" title=\"{{ 'action.view'|trans }}\">
                                    <span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span>
                                    {{ 'action.view'|trans }}
                                </a>
                            </div>
                        </td>
                         <td>
                            <div class=\"btn-group\" role=\"group\" aria-label=\"{{ 'label.actions'|trans }}\">
                                <a href=\"{{ path('tag_add', {'id': item.id}) }}\" class=\"btn btn-default\" title=\"{{ 'action.add'|trans }}\">
                                    <span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span>
                                    {{ 'action.add'|trans }}
                                </a>
                            </div>
                        </td>
                    </tr>
                {% endfor %}
                <div class=\"navigation text-center\">
            {{ pagerfanta(tags, 'twitter_bootstrap3_translated', { routeName: ('tag_index_paginated') }) }}
        </div>

            </tbody>
        </table>

    {% else %}
        <div class=\"alert alert-warning\" role=\"alert\">
            {{ 'message.empty_list'|trans }}
        </div>
    {% endif %}
{% endblock %}", "tag/index.html.twig", "/home/basia/Dokumenty/programming/symfony/my_app/app/Resources/views/tag/index.html.twig");
    }
}
