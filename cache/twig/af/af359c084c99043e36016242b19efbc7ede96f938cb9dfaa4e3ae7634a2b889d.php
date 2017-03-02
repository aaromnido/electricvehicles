<?php

/* formdata.html.twig */
class __TwigTemplate_a3c44d5015323d9f4390c76a95820a7d9970ec230bf7ddcc1dbba06ec83a3610 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "formdata.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if ((null === ($context["form"] ?? null))) {
            // line 4
            $context["form"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "session", array()), "getFlashObject", array(0 => "form"), "method");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo ($context["content"] ?? null);
        echo "

    ";
        // line 10
        if (($context["form"] ?? null)) {
            // line 11
            echo "        ";
            if ($this->getAttribute(($context["form"] ?? null), "message", array())) {
                // line 12
                echo "        <div class=\"alert notices ";
                echo (($this->getAttribute(($context["form"] ?? null), "message_color", array())) ? ($this->getAttribute(($context["form"] ?? null), "message_color", array())) : ("green"));
                echo "\"><p>";
                echo $this->getAttribute(($context["form"] ?? null), "message", array());
                echo "</p></div>
        ";
            }
            // line 14
            echo "        <p>";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_FORM.DATA_SUMMARY");
            echo "</p>

        ";
            // line 16
            $this->loadTemplate("forms/data.html.twig", "formdata.html.twig", 16)->display($context);
            // line 17
            echo "    ";
        } else {
            // line 18
            echo "        <div class=\"alert notices yellow\"><p>";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_FORM.NO_FORM_DATA");
            echo "</p></div>
    ";
        }
        // line 20
        echo "
";
    }

    public function getTemplateName()
    {
        return "formdata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  67 => 18,  64 => 17,  62 => 16,  56 => 14,  48 => 12,  45 => 11,  43 => 10,  37 => 8,  34 => 7,  30 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% if form is null %}
    {% set form = grav.session.getFlashObject('form') %}
{% endif  %}

{% block content %}
    {{ content|raw }}

    {% if form %}
        {% if form.message %}
        <div class=\"alert notices {{ form.message_color ?: 'green' }}\"><p>{{ form.message|raw }}</p></div>
        {% endif %}
        <p>{{ 'PLUGIN_FORM.DATA_SUMMARY'|t }}</p>

        {% include \"forms/data.html.twig\" %}
    {% else %}
        <div class=\"alert notices yellow\"><p>{{ 'PLUGIN_FORM.NO_FORM_DATA'|t }}</p></div>
    {% endif %}

{% endblock %}
", "formdata.html.twig", "/Applications/MAMP/htdocs/electricvehicles/user/plugins/form/templates/formdata.html.twig");
    }
}
