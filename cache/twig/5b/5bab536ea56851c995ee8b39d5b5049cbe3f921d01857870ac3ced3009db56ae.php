<?php

/* default.html.twig */
class __TwigTemplate_49e40a90e61cbe337660734e13f46f464780479418b1c436172031536ee6499a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
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
        $context["image"] = twig_last($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        // line 5
        echo "
";
        // line 6
        if (($context["image"] ?? null)) {
            // line 7
            echo "\t<div class=\"section-header-picture\">
\t\t";
            // line 8
            echo $this->getAttribute($this->getAttribute(($context["image"] ?? null), "cropZoom", array(0 => 1280, 1 => 340), "method"), "html", array());
            echo "
\t</div>
";
        }
        // line 11
        echo "
\t<div id=\"content\">
\t\t<h1 class=\"title\">";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h1>
\t\t";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
\t</div>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  51 => 13,  47 => 11,  41 => 8,  38 => 7,  36 => 6,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
{% set image = page.media.images|last %}

{% if image %}
\t<div class=\"section-header-picture\">
\t\t{{ image.cropZoom(1280, 340).html }}
\t</div>
{% endif %}

\t<div id=\"content\">
\t\t<h1 class=\"title\">{{ page.title }}</h1>
\t\t{{ page.content }}
\t</div>
{% endblock %}
", "default.html.twig", "/Applications/MAMP/htdocs/electricvehicles/user/themes/ev-matter/templates/default.html.twig");
    }
}
