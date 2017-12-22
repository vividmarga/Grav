<?php

/* card.html.twig */
class __TwigTemplate_8486446f88b7f627ae4638b34499099d1ba0313e9937542119e5f27bc42f09fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "card.html.twig", 1);
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
        echo "\t";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t<br>
\t<p>Some extra content!</p>
\t<p class=\"uk-clearfix\">
    \t<br>
\t</p>
";
    }

    public function getTemplateName()
    {
        return "card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
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
\t{{ page.content }}
\t<br>
\t<p>Some extra content!</p>
\t<p class=\"uk-clearfix\">
    \t<br>
\t</p>
{% endblock %}
", "card.html.twig", "/home/margazet/sites/grav/user/themes/cardstack/templates/card.html.twig");
    }
}
