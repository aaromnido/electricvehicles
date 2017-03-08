<?php

/* form.html.twig */
class __TwigTemplate_3cc999aefe63e73e9e4cb842519767ae57eb4a24d50d80fc648595b0895dea00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "form.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"content\">
        <h1>";
        // line 5
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h1>
        ";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
        ";
        // line 7
        $this->loadTemplate("forms/form.html.twig", "form.html.twig", 7)->display($context);
        // line 8
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  42 => 7,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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

{% block content %}
    <div id=\"content\">
        <h1>{{ page.title }}</h1>
        {{ page.content }}
        {% include \"forms/form.html.twig\" %}
    </div>
{% endblock %}
", "form.html.twig", "/Applications/MAMP/htdocs/electric-vehicles-20170308220752/user/themes/ev-matter/templates/form.html.twig");
    }
}
