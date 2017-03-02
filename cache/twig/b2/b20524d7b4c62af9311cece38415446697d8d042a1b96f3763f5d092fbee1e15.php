<?php

/* @Var:Electric Vehicles Contact Form {{ form.value.name|e }} */
class __TwigTemplate_76a128ba9cc490ea3fba2c89d4f67acc7e7b89317259ce1269c88796817443ff extends Twig_Template
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
        echo "Electric Vehicles Contact Form ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", array()), "name", array()));
    }

    public function getTemplateName()
    {
        return "@Var:Electric Vehicles Contact Form {{ form.value.name|e }}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Electric Vehicles Contact Form {{ form.value.name|e }}", "@Var:Electric Vehicles Contact Form {{ form.value.name|e }}", "");
    }
}
