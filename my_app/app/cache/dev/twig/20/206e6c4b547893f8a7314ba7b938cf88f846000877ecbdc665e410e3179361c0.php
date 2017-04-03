<?php

/* base.html.twig */
class __TwigTemplate_e651471194cd526e75e16b10f33968d091b0fef951f92486a89c08d657cad593 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4649bf60229414844d5485971fc8cceb391cefc1c3d76f8f672fa3efce6a6ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4649bf60229414844d5485971fc8cceb391cefc1c3d76f8f672fa3efce6a6ab->enter($__internal_f4649bf60229414844d5485971fc8cceb391cefc1c3d76f8f672fa3efce6a6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "</head>
    <body>
        <div class=\"container\">
            ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        </div>
        ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "    </body>
</html>
";
        
        $__internal_f4649bf60229414844d5485971fc8cceb391cefc1c3d76f8f672fa3efce6a6ab->leave($__internal_f4649bf60229414844d5485971fc8cceb391cefc1c3d76f8f672fa3efce6a6ab_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_701426a9c610ed3a704997294946710bd2e0a999247b5832c106c426b0f4bbd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_701426a9c610ed3a704997294946710bd2e0a999247b5832c106c426b0f4bbd7->enter($__internal_701426a9c610ed3a704997294946710bd2e0a999247b5832c106c426b0f4bbd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_701426a9c610ed3a704997294946710bd2e0a999247b5832c106c426b0f4bbd7->leave($__internal_701426a9c610ed3a704997294946710bd2e0a999247b5832c106c426b0f4bbd7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_279e8c8dff33bb9131068115ffaef24af7e74f6bdcda8ca9de66844f4964ae0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_279e8c8dff33bb9131068115ffaef24af7e74f6bdcda8ca9de66844f4964ae0b->enter($__internal_279e8c8dff33bb9131068115ffaef24af7e74f6bdcda8ca9de66844f4964ae0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5eb3c5e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5eb3c5e_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/5eb3c5e_part_1.css");
            // line 8
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
            // asset "5eb3c5e_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5eb3c5e_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/5eb3c5e_part_2_main_1.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
        } else {
            // asset "5eb3c5e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5eb3c5e") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/5eb3c5e.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "    ";
        
        $__internal_279e8c8dff33bb9131068115ffaef24af7e74f6bdcda8ca9de66844f4964ae0b->leave($__internal_279e8c8dff33bb9131068115ffaef24af7e74f6bdcda8ca9de66844f4964ae0b_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7e5c5d68c19564bbed49945eec42df064b38761bc93eb4f432eabbafe511b42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e5c5d68c19564bbed49945eec42df064b38761bc93eb4f432eabbafe511b42->enter($__internal_b7e5c5d68c19564bbed49945eec42df064b38761bc93eb4f432eabbafe511b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b7e5c5d68c19564bbed49945eec42df064b38761bc93eb4f432eabbafe511b42->leave($__internal_b7e5c5d68c19564bbed49945eec42df064b38761bc93eb4f432eabbafe511b42_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_91a3f42b81a41fbd388aa6557becfa7e8c648d4c9989e23ae0c2f1c013836ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a3f42b81a41fbd388aa6557becfa7e8c648d4c9989e23ae0c2f1c013836ed7->enter($__internal_91a3f42b81a41fbd388aa6557becfa7e8c648d4c9989e23ae0c2f1c013836ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8c56abc_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8c56abc_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/8c56abc_part_1.js");
            // line 18
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "8c56abc_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8c56abc_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/8c56abc_part_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "8c56abc_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8c56abc_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/8c56abc_part_3_main_1.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "8c56abc"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_8c56abc") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/8c56abc.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 20
        echo "        ";
        
        $__internal_91a3f42b81a41fbd388aa6557becfa7e8c648d4c9989e23ae0c2f1c013836ed7->leave($__internal_91a3f42b81a41fbd388aa6557becfa7e8c648d4c9989e23ae0c2f1c013836ed7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  157 => 20,  131 => 18,  126 => 17,  120 => 16,  109 => 14,  102 => 10,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 21,  48 => 16,  45 => 15,  43 => 14,  38 => 11,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}
        {% stylesheets '@bootstrap_css' '../app/Resources/public/css/*' %}
        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"{{ asset_url }}\"/>
        {% endstylesheets %}
    {% endblock %}
</head>
    <body>
        <div class=\"container\">
            {% block body %}{% endblock %}
        </div>
        {% block javascripts %}
            {% javascripts '@jquery' '@bootstrap_js' '../app/Resources/public/js/*' %}
            <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
            {% endjavascripts %}
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/basia/Dokumenty/programming/symfony/my_app/app/Resources/views/base.html.twig");
    }
}
