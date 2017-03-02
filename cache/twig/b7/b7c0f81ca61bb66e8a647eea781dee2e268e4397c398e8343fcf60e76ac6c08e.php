<?php

/* home.html.twig */
class __TwigTemplate_fcdfe925fd166c548bdded773e0f8411c42fcba178ed58b8ff93e52ce40fa51c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
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
        echo "\t<header class=\"section-hero\">
\t\t<div class=\"content\">
\t\t\t";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
\t\t</div>
\t</header>

\t<section class=\"boxes\" id=\"featured\">

\t\t<div class=\"row\">
\t\t\t<a href=\"";
        // line 13
        echo ($context["base_url"] ?? null);
        echo "/servicios\" class=\"box box-services\">
\t\t\t\t<img src=\"";
        // line 14
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://");
        echo "/images/icon-box-help.svg\" alt=\"Servicios\" />
\t\t\t\t<h3>Services</h3>
\t\t\t\t<p>Te ofrecemos vehículos eléctricos nuevos y de ocasión. Si estás interesado en algún modelo en particular lo traemos desde cualquier parte del mundo para ti.</p>
\t\t\t</a><!-- box -->

\t\t\t<a href=\"";
        // line 19
        echo ($context["base_url"] ?? null);
        echo "/vehículos\" class=\"box box-pictured box-vehicles\">
\t\t\t\t<img src=\"";
        // line 20
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://");
        echo "/images/icon-box-car.svg\" alt=\"Vehicles\" />
\t\t\t\t<h3>Vehículos</h3>
\t\t\t\t<p>En estos momentos disponemos de una serie de vehículos en stock.<br>Entra y descúbrelos.</p>
\t\t\t</a><!-- box -->

\t\t\t<a href=\"";
        // line 25
        echo ($context["base_url"] ?? null);
        echo "/vblog\" class=\"box box-vblog\">
\t\t\t\t<img src=\"";
        // line 26
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://");
        echo "/images/icon-box-video.svg\" alt=\"VBlog Zero Emisiones\" />
\t\t\t\t<h3>Canal Zero Emisiones</h3>
\t\t\t\t<p>En nuestro canal Zero Emisiones podrás disfrutar de multitud de consejos, análisis y temas interesantes relacionados con la movilidad eléctrica.</p>
\t\t\t</a><!-- box -->
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<a href=\"";
        // line 32
        echo ($context["base_url"] ?? null);
        echo "/contacto\" class=\"box box-two box-pictured box-human\">
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<p class=\"cite\">“Mi nombre es <strong>Sergio García</strong> y mi misión es <strong>ayudarte y asesorarte</strong> en todo lo que necesites para <strong>dar con seguridad y facilidad tu paso a la movilidad eléctrica.</strong>“</p>
\t\t\t\t\t<p class=\"button\">Hablemos</p>
\t\t\t\t</div>
\t\t\t</a><!-- box -->
\t\t\t<a href=\"http://www.electromaps.com\" class=\"box box-pictured box-map\" target=\"_blank\">
\t\t\t\t<img src=\"";
        // line 39
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://");
        echo "/images/icon-box-point.svg\" alt=\"Electromaps\" />
\t\t\t\t<h3>Mapa de puntos de carga</h3>
\t\t\t\t<p>Encuentra todos los puntos de recarga más cercanos en un mapa actualizado.</p>
\t\t\t\t<footer>
\t\t\t\t\t<img src=\"";
        // line 43
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://");
        echo "/images/logo-electromaps.png\" alt=\"Electromaps\" />
\t\t\t\t</footer>
\t\t\t</a><!-- box -->
\t\t</div>
\t</section>

\t<div class=\"modalbox modalbox-map\">
\t\t<iframe width=\"100%\" height=\"500\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://www.electromaps.com/widget?key=58b8a420815d66.56100210\"></iframe>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 43,  92 => 39,  82 => 32,  73 => 26,  69 => 25,  61 => 20,  57 => 19,  49 => 14,  45 => 13,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
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
\t<header class=\"section-hero\">
\t\t<div class=\"content\">
\t\t\t{{ page.content }}
\t\t</div>
\t</header>

\t<section class=\"boxes\" id=\"featured\">

\t\t<div class=\"row\">
\t\t\t<a href=\"{{ base_url }}/servicios\" class=\"box box-services\">
\t\t\t\t<img src=\"{{ url(\"theme://\") }}/images/icon-box-help.svg\" alt=\"Servicios\" />
\t\t\t\t<h3>Services</h3>
\t\t\t\t<p>Te ofrecemos vehículos eléctricos nuevos y de ocasión. Si estás interesado en algún modelo en particular lo traemos desde cualquier parte del mundo para ti.</p>
\t\t\t</a><!-- box -->

\t\t\t<a href=\"{{ base_url }}/vehículos\" class=\"box box-pictured box-vehicles\">
\t\t\t\t<img src=\"{{ url(\"theme://\") }}/images/icon-box-car.svg\" alt=\"Vehicles\" />
\t\t\t\t<h3>Vehículos</h3>
\t\t\t\t<p>En estos momentos disponemos de una serie de vehículos en stock.<br>Entra y descúbrelos.</p>
\t\t\t</a><!-- box -->

\t\t\t<a href=\"{{ base_url }}/vblog\" class=\"box box-vblog\">
\t\t\t\t<img src=\"{{ url(\"theme://\") }}/images/icon-box-video.svg\" alt=\"VBlog Zero Emisiones\" />
\t\t\t\t<h3>Canal Zero Emisiones</h3>
\t\t\t\t<p>En nuestro canal Zero Emisiones podrás disfrutar de multitud de consejos, análisis y temas interesantes relacionados con la movilidad eléctrica.</p>
\t\t\t</a><!-- box -->
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<a href=\"{{ base_url }}/contacto\" class=\"box box-two box-pictured box-human\">
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<p class=\"cite\">“Mi nombre es <strong>Sergio García</strong> y mi misión es <strong>ayudarte y asesorarte</strong> en todo lo que necesites para <strong>dar con seguridad y facilidad tu paso a la movilidad eléctrica.</strong>“</p>
\t\t\t\t\t<p class=\"button\">Hablemos</p>
\t\t\t\t</div>
\t\t\t</a><!-- box -->
\t\t\t<a href=\"http://www.electromaps.com\" class=\"box box-pictured box-map\" target=\"_blank\">
\t\t\t\t<img src=\"{{ url(\"theme://\") }}/images/icon-box-point.svg\" alt=\"Electromaps\" />
\t\t\t\t<h3>Mapa de puntos de carga</h3>
\t\t\t\t<p>Encuentra todos los puntos de recarga más cercanos en un mapa actualizado.</p>
\t\t\t\t<footer>
\t\t\t\t\t<img src=\"{{ url(\"theme://\") }}/images/logo-electromaps.png\" alt=\"Electromaps\" />
\t\t\t\t</footer>
\t\t\t</a><!-- box -->
\t\t</div>
\t</section>

\t<div class=\"modalbox modalbox-map\">
\t\t<iframe width=\"100%\" height=\"500\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://www.electromaps.com/widget?key=58b8a420815d66.56100210\"></iframe>
\t</div>
{% endblock %}
", "home.html.twig", "/Applications/MAMP/htdocs/electricvehicles/user/themes/ev-matter/templates/home.html.twig");
    }
}
