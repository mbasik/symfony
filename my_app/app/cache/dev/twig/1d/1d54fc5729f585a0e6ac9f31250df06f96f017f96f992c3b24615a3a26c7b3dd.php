<?php

/* tag/index.html.twig */
class __TwigTemplate_13739c6a451ec081f529571ac76f14968c59a10198ce1db55b1c47fd725553e2 extends Twig_Template
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
        $__internal_3b2642ba29dca37d04e1a8d94822b6a12a53757ef24340c402009bcdd8a8352d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b2642ba29dca37d04e1a8d94822b6a12a53757ef24340c402009bcdd8a8352d->enter($__internal_3b2642ba29dca37d04e1a8d94822b6a12a53757ef24340c402009bcdd8a8352d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b2642ba29dca37d04e1a8d94822b6a12a53757ef24340c402009bcdd8a8352d->leave($__internal_3b2642ba29dca37d04e1a8d94822b6a12a53757ef24340c402009bcdd8a8352d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c28e4f1b50898712dabb73530ac4e94e56a46c9c77e2fda7f8f72f14e311681e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28e4f1b50898712dabb73530ac4e94e56a46c9c77e2fda7f8f72f14e311681e->enter($__internal_c28e4f1b50898712dabb73530ac4e94e56a46c9c77e2fda7f8f72f14e311681e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.tags"), "html", null, true);
        echo "
";
        
        $__internal_c28e4f1b50898712dabb73530ac4e94e56a46c9c77e2fda7f8f72f14e311681e->leave($__internal_c28e4f1b50898712dabb73530ac4e94e56a46c9c77e2fda7f8f72f14e311681e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cf9e061ae4baa798bc8987ad74ebc142a14e9ee87721948cbbca84d61a23d41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cf9e061ae4baa798bc8987ad74ebc142a14e9ee87721948cbbca84d61a23d41->enter($__internal_4cf9e061ae4baa798bc8987ad74ebc142a14e9ee87721948cbbca84d61a23d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                <td>
                    <div class=\"btn-group\" role=\"group\" aria-label=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.actions"), "html", null, true);
            echo "\">
                        <a href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_add");
            echo "\" class=\"btn btn-default\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.add"), "html", null, true);
            echo "\">
                            <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
                            ";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.add"), "html", null, true);
            echo "
                        </a>
                    </div>
                </td>
                <div class=\"navigation text-center\">
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
        
        $__internal_4cf9e061ae4baa798bc8987ad74ebc142a14e9ee87721948cbbca84d61a23d41->leave($__internal_4cf9e061ae4baa798bc8987ad74ebc142a14e9ee87721948cbbca84d61a23d41_prof);

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
        return array (  160 => 52,  157 => 51,  147 => 44,  139 => 39,  132 => 37,  128 => 36,  125 => 35,  113 => 29,  106 => 27,  102 => 26,  97 => 24,  93 => 23,  90 => 22,  86 => 21,  78 => 16,  73 => 14,  69 => 13,  64 => 10,  62 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
                    </tr>
                {% endfor %}
                <td>
                    <div class=\"btn-group\" role=\"group\" aria-label=\"{{ 'label.actions'|trans }}\">
                        <a href=\"{{ path('tag_add') }}\" class=\"btn btn-default\" title=\"{{ 'action.add'|trans }}\">
                            <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
                            {{ 'action.add'|trans }}
                        </a>
                    </div>
                </td>
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
{% endblock %}", "tag/index.html.twig", "/home/student/13_masiulaniec/projektgit/symfony/my_app/app/Resources/views/tag/index.html.twig");
    }
}
