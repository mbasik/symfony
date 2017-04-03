<?php

/* bookmark/view.html.twig */
class __TwigTemplate_f16781f6a42459d814da8a7c9b2161fed8c4de81b557e4ce43abef7314f068cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "bookmark/view.html.twig", 1);
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
        $__internal_4268b0d097fa44df75c3133802e76a3fc258bcc4c6c04985c0d725590926adff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4268b0d097fa44df75c3133802e76a3fc258bcc4c6c04985c0d725590926adff->enter($__internal_4268b0d097fa44df75c3133802e76a3fc258bcc4c6c04985c0d725590926adff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bookmark/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4268b0d097fa44df75c3133802e76a3fc258bcc4c6c04985c0d725590926adff->leave($__internal_4268b0d097fa44df75c3133802e76a3fc258bcc4c6c04985c0d725590926adff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0ca7398c98e00a7ca3fe6647bcd625def2324cbdc43b84b43a5696972f18a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ca7398c98e00a7ca3fe6647bcd625def2324cbdc43b84b43a5696972f18a5b->enter($__internal_f0ca7398c98e00a7ca3fe6647bcd625def2324cbdc43b84b43a5696972f18a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        if ((array_key_exists("bookmark", $context) && twig_length_filter($this->env, (isset($context["bookmark"]) ? $context["bookmark"] : $this->getContext($context, "bookmark"))))) {
            // line 6
            echo "            <ul>
            \$a=bookmark.URL;
            var_dump(\$a);
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["bookmark"]) ? $context["bookmark"] : $this->getContext($context, "bookmark")), "Tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 10
                echo "               <li> ";
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo " </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "            </ul>

    ";
        } else {
            // line 15
            echo "    <p>
        ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message.empty_list"), "html", null, true);
            echo "
    </p>
    ";
        }
        // line 19
        echo "
";
        
        $__internal_f0ca7398c98e00a7ca3fe6647bcd625def2324cbdc43b84b43a5696972f18a5b->leave($__internal_f0ca7398c98e00a7ca3fe6647bcd625def2324cbdc43b84b43a5696972f18a5b_prof);

    }

    public function getTemplateName()
    {
        return "bookmark/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 19,  71 => 16,  68 => 15,  63 => 12,  54 => 10,  50 => 9,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
            <ul>
            \$a=bookmark.URL;
            var_dump(\$a);
            {% for tag in bookmark.Tags%}
               <li> {{ tag }} </li>
            {% endfor %}
            </ul>

    {% else %}
    <p>
        {{ 'message.empty_list'|trans }}
    </p>
    {% endif %}

{% endblock %}", "bookmark/view.html.twig", "/home/basia/Dokumenty/programming/symfony/my_app/app/Resources/views/bookmark/view.html.twig");
    }
}
