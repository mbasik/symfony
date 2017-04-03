<?php

/* bookmark/view.html.twig */
class __TwigTemplate_9c1d269d6ee98938e485fc47c4872e29c0bc6e8f4ecb4cf5d3b85ddb94e90311 extends Twig_Template
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
        $__internal_291cbc970fccf06620c08600cb3a995415df13665ee425477c61546429a6f923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_291cbc970fccf06620c08600cb3a995415df13665ee425477c61546429a6f923->enter($__internal_291cbc970fccf06620c08600cb3a995415df13665ee425477c61546429a6f923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bookmark/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_291cbc970fccf06620c08600cb3a995415df13665ee425477c61546429a6f923->leave($__internal_291cbc970fccf06620c08600cb3a995415df13665ee425477c61546429a6f923_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4edd4426f042db733119aa1d20bc54e28539b0cc4d90fcce96ca110ef37e6a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4edd4426f042db733119aa1d20bc54e28539b0cc4d90fcce96ca110ef37e6a9e->enter($__internal_4edd4426f042db733119aa1d20bc54e28539b0cc4d90fcce96ca110ef37e6a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        if ((array_key_exists("bookmark", $context) && twig_length_filter($this->env, (isset($context["bookmark"]) ? $context["bookmark"] : $this->getContext($context, "bookmark"))))) {
            // line 6
            echo "            <ul>
            <li>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bookmark"]) ? $context["bookmark"] : $this->getContext($context, "bookmark")), "URL", array()), "html", null, true);
            echo "</li>
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["bookmark"]) ? $context["bookmark"] : $this->getContext($context, "bookmark")), "Tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 9
                echo "               <li> ";
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo " </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "            </ul>

    ";
        } else {
            // line 14
            echo "    <p>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message.empty_list"), "html", null, true);
            echo "
    </p>
    ";
        }
        // line 18
        echo "
";
        
        $__internal_4edd4426f042db733119aa1d20bc54e28539b0cc4d90fcce96ca110ef37e6a9e->leave($__internal_4edd4426f042db733119aa1d20bc54e28539b0cc4d90fcce96ca110ef37e6a9e_prof);

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
        return array (  79 => 18,  73 => 15,  70 => 14,  65 => 11,  56 => 9,  52 => 8,  48 => 7,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
            <li>{{ bookmark.URL }}</li>
            {% for tag in bookmark.Tags%}
               <li> {{ tag }} </li>
            {% endfor %}
            </ul>

    {% else %}
    <p>
        {{ 'message.empty_list'|trans }}
    </p>
    {% endif %}

{% endblock %}", "bookmark/view.html.twig", "/home/student/13_masiulaniec/projektgit/symfony/my_app/app/Resources/views/bookmark/view.html.twig");
    }
}
