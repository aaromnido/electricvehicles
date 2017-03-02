<?php

/* forms/default/data.html.twig */
class __TwigTemplate_ee75c81c88c06f20ed9fa6f6d1eb75495c0e1fce40e78c71a71856861bed1093 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'field_label' => array($this, 'block_field_label'),
            'field_value' => array($this, 'block_field_value'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", array()));
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
        foreach ($context['_seq'] as $context["index"] => $context["field"]) {
            // line 2
            echo "    ";
            $context["input"] = $this->getAttribute($context["field"], "input@");
            // line 3
            echo "    ";
            if (((null === ($context["input"] ?? null)) || (($context["input"] ?? null) == true))) {
                // line 4
                echo "        ";
                $this->displayBlock('field', $context, $blocks);
                // line 27
                echo "
    ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 4
    public function block_field($context, array $blocks = array())
    {
        // line 5
        echo "            <div>
                ";
        // line 6
        $this->displayBlock('field_label', $context, $blocks);
        // line 9
        echo "
                ";
        // line 10
        $this->displayBlock('field_value', $context, $blocks);
        // line 25
        echo "            </div>
        ";
    }

    // line 6
    public function block_field_label($context, array $blocks = array())
    {
        // line 7
        echo "                    <strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "label", array())));
        echo "</strong>:
                ";
    }

    // line 10
    public function block_field_value($context, array $blocks = array())
    {
        // line 11
        echo "                    ";
        if (($this->getAttribute(($context["field"] ?? null), "type", array()) == "checkboxes")) {
            // line 12
            echo "                        <ul>
                            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "value", array(0 => $this->getAttribute(($context["field"] ?? null), "name", array())), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 14
                echo "                                <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "options", array()), $context["value"], array(), "array"));
                echo "</li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "                        </ul>
                    ";
        } elseif (($this->getAttribute(        // line 17
($context["field"] ?? null), "type", array()) == "checkbox")) {
            // line 18
            echo "                        ";
            echo ((($this->getAttribute(($context["form"] ?? null), "value", array(0 => $this->getAttribute(($context["field"] ?? null), "name", array())), "method") == 1)) ? (twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_FORM.YES"))) : (twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_FORM.NO"))));
            echo "
                    ";
        } elseif (($this->getAttribute(        // line 19
($context["field"] ?? null), "type", array()) == "select")) {
            // line 20
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "options", array()), $this->getAttribute(($context["form"] ?? null), "value", array(0 => $this->getAttribute(($context["field"] ?? null), "name", array())), "method"), array(), "array"));
            echo "
                    ";
        } else {
            // line 22
            echo "                        ";
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->stringFunc(twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "value", array(0 => $this->getAttribute(($context["field"] ?? null), "name", array())), "method"))), "html", null, true));
            echo "
                    ";
        }
        // line 24
        echo "                ";
    }

    public function getTemplateName()
    {
        return "forms/default/data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 24,  134 => 22,  128 => 20,  126 => 19,  121 => 18,  119 => 17,  116 => 16,  107 => 14,  103 => 13,  100 => 12,  97 => 11,  94 => 10,  87 => 7,  84 => 6,  79 => 25,  77 => 10,  74 => 9,  72 => 6,  69 => 5,  66 => 4,  48 => 27,  45 => 4,  42 => 3,  39 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for index, field in form.fields %}
    {% set input = attribute(field, \"input@\") %}
    {% if input is null or input == true %}
        {% block field %}
            <div>
                {% block field_label %}
                    <strong>{{ field.label|t|e }}</strong>:
                {% endblock %}

                {% block field_value %}
                    {% if field.type == 'checkboxes' %}
                        <ul>
                            {% for value in form.value(field.name) %}
                                <li>{{ field.options[value]|e }}</li>
                            {% endfor %}
                        </ul>
                    {% elseif field.type == 'checkbox' %}
                        {{ (form.value(field.name) == 1) ? \"PLUGIN_FORM.YES\"|t|e : \"PLUGIN_FORM.NO\"|t|e }}
                    {% elseif field.type == 'select' %}
                        {{ field.options[form.value(field.name)]|e }}
                    {% else %}
                        {{ string(form.value(field.name)|e)|nl2br }}
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}

    {% endif %}
{% endfor %}", "forms/default/data.html.twig", "/Applications/MAMP/htdocs/electricvehicles/user/plugins/form/templates/forms/default/data.html.twig");
    }
}
