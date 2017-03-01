<?php

/* theme.yaml.twig */
class __TwigTemplate_a24c9a2d7ab48f0e317e57eaf1fd4ec01a0b17cb4d52c078edbdc7b76c960762 extends Twig_Template
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
        // line 1
        echo "streams:
 schemes:
   theme:
     type: ReadOnlyStream
     prefixes:
       '':
         - user/themes/";
        // line 7
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute((isset($context["component"]) ? $context["component"] : null), "name", array()));
        echo "
         - user/themes/";
        // line 8
        echo $this->getAttribute((isset($context["component"]) ? $context["component"] : null), "extends", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "theme.yaml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("streams:
 schemes:
   theme:
     type: ReadOnlyStream
     prefixes:
       '':
         - user/themes/{{ component.name|hyphenize }}
         - user/themes/{{ component.extends }}
", "theme.yaml.twig", "/Applications/MAMP/htdocs/electricvehicles/user/plugins/devtools/components/theme/inheritence/theme.yaml.twig");
    }
}
