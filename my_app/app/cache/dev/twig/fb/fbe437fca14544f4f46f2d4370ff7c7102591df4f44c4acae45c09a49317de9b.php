<?php

/* bookmark/index.html.twig */
class __TwigTemplate_8267afa3b1c8de2f96abf35123f66b954e3afaf3279ffb614110900f3e487b70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "bookmark/index.html.twig", 1);
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
        $__internal_9d7135a38af75336346615a217b0959ec4bc71a08c256c461bf0033a649290e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d7135a38af75336346615a217b0959ec4bc71a08c256c461bf0033a649290e7->enter($__internal_9d7135a38af75336346615a217b0959ec4bc71a08c256c461bf0033a649290e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bookmark/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d7135a38af75336346615a217b0959ec4bc71a08c256c461bf0033a649290e7->leave($__internal_9d7135a38af75336346615a217b0959ec4bc71a08c256c461bf0033a649290e7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_77723a9705a151859d5d7461c6755bc39308254a2e6b61dcf32e9541f3061a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77723a9705a151859d5d7461c6755bc39308254a2e6b61dcf32e9541f3061a88->enter($__internal_77723a9705a151859d5d7461c6755bc39308254a2e6b61dcf32e9541f3061a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.bookmarks"), "html", null, true);
        echo "</h1>

    ";
        // line 7
        if ((array_key_exists("bookmarks", $context) && twig_length_filter($this->env, (isset($context["bookmarks"]) ? $context["bookmarks"] : $this->getContext($context, "bookmarks"))))) {
            // line 8
            echo "
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bookmarks"]) ? $context["bookmarks"] : $this->getContext($context, "bookmarks")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["bookmark"]) {
                // line 10
                echo "            <dl>
                <dt>";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.id"), "html", null, true);
                echo "</dt>
                <dd>";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "</dd>
                <dt>";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.URL"), "html", null, true);
                echo "</dt>
                <a href=\"/bookmark/";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                echo "\"> <dd>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["bookmark"], "URL", array()), "html", null, true);
                echo "</dd> </a>
            </dl>
            ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["bookmark"], "Tags", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["Tag"]) {
                    // line 17
                    echo "                ";
                    echo twig_escape_filter($this->env, $context["Tag"], "html", null, true);
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bookmark'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "
    ";
        } else {
            // line 22
            echo "    <p>
        ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message.empty_list"), "html", null, true);
            echo "
    </p>
    ";
        }
        // line 26
        echo "
";
        
        $__internal_77723a9705a151859d5d7461c6755bc39308254a2e6b61dcf32e9541f3061a88->leave($__internal_77723a9705a151859d5d7461c6755bc39308254a2e6b61dcf32e9541f3061a88_prof);

    }

    public function getTemplateName()
    {
        return "bookmark/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 26,  126 => 23,  123 => 22,  119 => 20,  105 => 19,  96 => 17,  92 => 16,  85 => 14,  81 => 13,  77 => 12,  73 => 11,  70 => 10,  53 => 9,  50 => 8,  48 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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

    <h1>{{ 'title.bookmarks'|trans }}</h1>

    {% if bookmarks is defined and bookmarks|length %}

        {% for bookmark in bookmarks %}
            <dl>
                <dt>{{ 'label.id'|trans }}</dt>
                <dd>{{ loop.index0 }}</dd>
                <dt>{{ 'label.URL'|trans }}</dt>
                <a href=\"/bookmark/{{ loop.index0 }}\"> <dd>{{ bookmark.URL }}</dd> </a>
            </dl>
            {% for Tag in bookmark.Tags %}
                {{ Tag }}
            {% endfor %}
        {% endfor %}

    {% else %}
    <p>
        {{ 'message.empty_list'|trans }}
    </p>
    {% endif %}

{% endblock %}", "bookmark/index.html.twig", "/home/basia/Dokumenty/programming/symfony/my_app/app/Resources/views/bookmark/index.html.twig");
    }
}
