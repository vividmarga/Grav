<?php

/* forms/fields/filepicker/filepicker.html.twig */
class __TwigTemplate_bf156d98c294113e1a4b998f6c0daee14c2bf6a8e3ba83c1fdfc01637ee10017 extends Twig_Template
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
        $this->loadTemplate("forms/fields/filepicker/filepicker.html.twig", "forms/fields/filepicker/filepicker.html.twig", 1, "510942533")->display($context);
    }

    public function getTemplateName()
    {
        return "forms/fields/filepicker/filepicker.html.twig";
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
        return new Twig_Source("{% embed \"forms/fields/select/select.html.twig\" %}

    {% block input %}
        {% if not field.options and value %}
            {% set field = field|merge({options: {(value): value}}) %}
        {% endif %}
        {{ parent() }}
    {% endblock %}

    {% block global_attributes %}
        data-grav-filepicker
        data-name=\"{{field.name}}\"
        {% if field.preview_images %}data-preview-images{% endif %}
        data-value=\"{{value}}\"
        {{ parent() }}
    {% endblock %}
{% endembed %}
", "forms/fields/filepicker/filepicker.html.twig", "/home/margazet/sites/grav/user/plugins/admin/themes/grav/templates/forms/fields/filepicker/filepicker.html.twig");
    }
}


/* forms/fields/filepicker/filepicker.html.twig */
class __TwigTemplate_bf156d98c294113e1a4b998f6c0daee14c2bf6a8e3ba83c1fdfc01637ee10017_510942533 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("forms/fields/select/select.html.twig", "forms/fields/filepicker/filepicker.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
            'global_attributes' => array($this, 'block_global_attributes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/fields/select/select.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        if (( !$this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()) && (isset($context["value"]) ? $context["value"] : null))) {
            // line 5
            echo "            ";
            $context["field"] = twig_array_merge((isset($context["field"]) ? $context["field"] : null), array("options" => array((isset($context["value"]) ? $context["value"] : null) => (isset($context["value"]) ? $context["value"] : null))));
            // line 6
            echo "        ";
        }
        // line 7
        echo "        ";
        $this->displayParentBlock("input", $context, $blocks);
        echo "
    ";
    }

    // line 10
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 11
        echo "        data-grav-filepicker
        data-name=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), "html", null, true);
        echo "\"
        ";
        // line 13
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "preview_images", array())) {
            echo "data-preview-images";
        }
        // line 14
        echo "        data-value=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "\"
        ";
        // line 15
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "forms/fields/filepicker/filepicker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 15,  122 => 14,  118 => 13,  114 => 12,  111 => 11,  108 => 10,  101 => 7,  98 => 6,  95 => 5,  92 => 4,  89 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed \"forms/fields/select/select.html.twig\" %}

    {% block input %}
        {% if not field.options and value %}
            {% set field = field|merge({options: {(value): value}}) %}
        {% endif %}
        {{ parent() }}
    {% endblock %}

    {% block global_attributes %}
        data-grav-filepicker
        data-name=\"{{field.name}}\"
        {% if field.preview_images %}data-preview-images{% endif %}
        data-value=\"{{value}}\"
        {{ parent() }}
    {% endblock %}
{% endembed %}
", "forms/fields/filepicker/filepicker.html.twig", "/home/margazet/sites/grav/user/plugins/admin/themes/grav/templates/forms/fields/filepicker/filepicker.html.twig");
    }
}
