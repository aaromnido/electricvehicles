<?php

/* forms/default/data.txt.twig */
class __TwigTemplate_4a1a7f0c6c712a761cd09f45ae3f9e3b10719a29ea3c06aaff8f1441871bfb81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", array()));
        foreach ($context['_seq'] as $context["index"] => $context["field"]) {
            // line 4
            $context["input"] = $this->getAttribute($context["field"], "input@");
            // line 5
            if (((null === ($context["input"] ?? null)) || (($context["input"] ?? null) == true))) {
                // line 6
                $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", array(0 => ((($this->getAttribute($context["field"], "name", array(), "any", true, true) &&  !(null === $this->getAttribute($context["field"], "name", array())))) ? ($this->getAttribute($context["field"], "name", array())) : ($context["index"]))), "method");
                // line 7
                echo ((($this->getAttribute($context["field"], "name", array(), "any", true, true) &&  !(null === $this->getAttribute($context["field"], "name", array())))) ? ($this->getAttribute($context["field"], "name", array())) : ($context["index"]));
                echo ": ";
                echo twig_replace_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->stringFunc(nl2br(twig_escape_filter($this->env, ((twig_test_iterable(($context["value"] ?? null))) ? (twig_jsonencode_filter(($context["value"] ?? null))) : (($context["value"] ?? null))), "html", null, true))), array("
" => " ", "" => " "));
                echo "
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
";
    }

    public function getTemplateName()
    {
        return "forms/default/data.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  32 => 7,  30 => 6,  28 => 5,  26 => 4,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% autoescape false %}

{% for index, field in form.fields %}
{% set input = attribute(field, \"input@\") %}
{% if input is null or input == true %}
{% set value = form.value(field.name ?? index) %}
{{ field.name ?? index }}: {{ string((value is iterable ? value|json_encode : value)|nl2br)|replace({\"\\n\":' ', \"\\r\":' '}) }}
{% endif %}
{% endfor %}

{% endautoescape %}", "forms/default/data.txt.twig", "/Applications/MAMP/htdocs/electricvehicles/user/plugins/form/templates/forms/default/data.txt.twig");
    }
}
