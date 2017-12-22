<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_c9186ad9151f86fc4b3dcb983b2386be03dc8cad799b4314e035388b22f2a2af extends Twig_Template
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
        echo "<div class=\"list-item h-entry\">

    ";
        // line 3
        $context["header_image"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image", array()), true);
        // line 4
        echo "    ";
        $context["header_image_width"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_width", array()), 900);
        // line 5
        echo "    ";
        $context["header_image_height"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_height", array()), 300);
        // line 6
        echo "    ";
        $context["header_image_file"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_file", array());
        // line 7
        echo "
    <div class=\"list-blog-header\">
        <span class=\"list-blog-date\">
            <time class=\"dt-published\" datetime=\"";
        // line 10
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "c");
        echo "\">
                <span>";
        // line 11
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "d");
        echo "</span>
                <em>";
        // line 12
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "M");
        echo "</em>
            </time>
        </span>
        ";
        // line 15
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array())) {
            // line 16
            echo "            <h4 class=\"p-name\">
                ";
            // line 17
            if ( !($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
                // line 18
                echo "                <a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\"><i class=\"fa fa-angle-double-right u-url\"></i></a>
                ";
            }
            // line 20
            echo "                <a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
            echo "\" class=\"u-url\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a>
            </h4>
        ";
        } else {
            // line 23
            echo "            <h4 class=\"p-name\"><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\" class=\"u-url\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a></h4>
        ";
        }
        // line 25
        echo "
        ";
        // line 26
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array())) {
            // line 27
            echo "        <span class=\"tags\">
            ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 29
                echo "            <a href=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()), "/");
                echo "/tag";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\" class=\"p-category\">";
                echo $context["tag"];
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "        </span>
        ";
        }
        // line 33
        echo "        ";
        if ((isset($context["header_image"]) ? $context["header_image"] : null)) {
            // line 34
            echo "            ";
            if ((isset($context["header_image_file"]) ? $context["header_image_file"] : null)) {
                // line 35
                echo "                ";
                $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), (isset($context["header_image_file"]) ? $context["header_image_file"] : null), array(), "array");
                // line 36
                echo "            ";
            } else {
                // line 37
                echo "                ";
                $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
                // line 38
                echo "            ";
            }
            // line 39
            echo "            ";
            echo $this->getAttribute($this->getAttribute((isset($context["header_image_media"]) ? $context["header_image_media"] : null), "cropZoom", array(0 => (isset($context["header_image_width"]) ? $context["header_image_width"] : null), 1 => (isset($context["header_image_height"]) ? $context["header_image_height"] : null)), "method"), "html", array());
            echo "
        ";
        }
        // line 41
        echo "
    </div>

    <div class=\"list-blog-padding\">

    ";
        // line 46
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
            // line 47
            echo "        <div class=\"e-content\">        
            ";
            // line 48
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
        </div>
        ";
            // line 50
            if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
                // line 51
                echo "        ";
                $context["show_prev_next"] = true;
                // line 52
                echo "        ";
            }
            // line 53
            echo "    ";
        } elseif (((isset($context["truncate"]) ? $context["truncate"] : null) && ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())))) {
            // line 54
            echo "        <div class=\"p-summary e-content\">
            ";
            // line 55
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array());
            echo "
            <p><a href=\"";
            // line 56
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.CONTINUE_READING");
            echo "</a></p>
        </div>
    ";
        } elseif (        // line 58
(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 59
            echo "        <div class=\"p-summary e-content\">
            ";
            // line 60
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
            <p><a href=\"";
            // line 61
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.CONTINUE_READING");
            echo "</a></p>
        </div>
    ";
        } else {
            // line 64
            echo "        <div class=\"e-content\">
            ";
            // line 65
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
        </div>

        ";
            // line 68
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "comments", array()), "enabled", array())) {
                // line 69
                echo "            ";
                $this->loadTemplate("partials/comments.html.twig", "partials/blog_item.html.twig", 69)->display($context);
                // line 70
                echo "        ";
            }
            // line 71
            echo "
        ";
            // line 72
            $context["show_prev_next"] = true;
            // line 73
            echo "    ";
        }
        // line 74
        echo "
    ";
        // line 75
        if ((isset($context["show_prev_next"]) ? $context["show_prev_next"] : null)) {
            // line 76
            echo "
        <p class=\"prev-next\">
            ";
            // line 78
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isFirst", array())) {
                // line 79
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "url", array());
                echo "\"><i class=\"fa fa-chevron-left\"></i> ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.NEXT_POST");
                echo "</a>
            ";
            }
            // line 81
            echo "
            ";
            // line 82
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isLast", array())) {
                // line 83
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "url", array());
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.PREV_POST");
                echo " <i class=\"fa fa-chevron-right\"></i></a>
            ";
            }
            // line 85
            echo "        </p>
    ";
        }
        // line 87
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 87,  253 => 85,  245 => 83,  243 => 82,  240 => 81,  232 => 79,  230 => 78,  226 => 76,  224 => 75,  221 => 74,  218 => 73,  216 => 72,  213 => 71,  210 => 70,  207 => 69,  205 => 68,  199 => 65,  196 => 64,  188 => 61,  184 => 60,  181 => 59,  179 => 58,  172 => 56,  168 => 55,  165 => 54,  162 => 53,  159 => 52,  156 => 51,  154 => 50,  149 => 48,  146 => 47,  144 => 46,  137 => 41,  131 => 39,  128 => 38,  125 => 37,  122 => 36,  119 => 35,  116 => 34,  113 => 33,  109 => 31,  95 => 29,  91 => 28,  88 => 27,  86 => 26,  83 => 25,  75 => 23,  66 => 20,  60 => 18,  58 => 17,  55 => 16,  53 => 15,  47 => 12,  43 => 11,  39 => 10,  34 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"list-item h-entry\">

    {% set header_image = page.header.header_image|defined(true) %}
    {% set header_image_width  = page.header.header_image_width|defined(900) %}
    {% set header_image_height = page.header.header_image_height|defined(300) %}
    {% set header_image_file = page.header.header_image_file %}

    <div class=\"list-blog-header\">
        <span class=\"list-blog-date\">
            <time class=\"dt-published\" datetime=\"{{ page.date|date(\"c\") }}\">
                <span>{{ page.date|date(\"d\") }}</span>
                <em>{{ page.date|date(\"M\") }}</em>
            </time>
        </span>
        {% if page.header.link %}
            <h4 class=\"p-name\">
                {% if page.header.continue_link is not sameas(false) %}
                <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right u-url\"></i></a>
                {% endif %}
                <a href=\"{{ page.header.link }}\" class=\"u-url\">{{ page.title }}</a>
            </h4>
        {% else %}
            <h4 class=\"p-name\"><a href=\"{{ page.url }}\" class=\"u-url\">{{ page.title }}</a></h4>
        {% endif %}

        {% if page.taxonomy.tag %}
        <span class=\"tags\">
            {% for tag in page.taxonomy.tag %}
            <a href=\"{{ blog.url|rtrim('/') }}/tag{{ config.system.param_sep }}{{ tag }}\" class=\"p-category\">{{ tag }}</a>
            {% endfor %}
        </span>
        {% endif %}
        {% if header_image %}
            {% if header_image_file %}
                {% set header_image_media = page.media.images[header_image_file] %}
            {% else %}
                {% set header_image_media = page.media.images|first %}
            {% endif %}
            {{ header_image_media.cropZoom(header_image_width, header_image_height).html }}
        {% endif %}

    </div>

    <div class=\"list-blog-padding\">

    {% if page.header.continue_link is sameas(false) %}
        <div class=\"e-content\">        
            {{ page.content }}
        </div>
        {% if not truncate %}
        {% set show_prev_next = true %}
        {% endif %}
    {% elseif truncate and page.summary != page.content %}
        <div class=\"p-summary e-content\">
            {{ page.summary }}
            <p><a href=\"{{ page.url }}\">{{ 'BLOG.ITEM.CONTINUE_READING'|t }}</a></p>
        </div>
    {% elseif truncate %}
        <div class=\"p-summary e-content\">
            {{ page.content }}
            <p><a href=\"{{ page.url }}\">{{ 'BLOG.ITEM.CONTINUE_READING'|t }}</a></p>
        </div>
    {% else %}
        <div class=\"e-content\">
            {{ page.content }}
        </div>

        {% if config.plugins.comments.enabled %}
            {% include 'partials/comments.html.twig' %}
        {% endif %}

        {% set show_prev_next = true %}
    {% endif %}

    {% if show_prev_next %}

        <p class=\"prev-next\">
            {% if not page.isFirst %}
                <a class=\"button\" href=\"{{ page.nextSibling.url }}\"><i class=\"fa fa-chevron-left\"></i> {{ 'BLOG.ITEM.NEXT_POST'|t }}</a>
            {% endif %}

            {% if not page.isLast %}
                <a class=\"button\" href=\"{{ page.prevSibling.url }}\">{{ 'BLOG.ITEM.PREV_POST'|t }} <i class=\"fa fa-chevron-right\"></i></a>
            {% endif %}
        </p>
    {% endif %}

    </div>
</div>
", "partials/blog_item.html.twig", "/home/margazet/sites/grav/user/themes/antimatter/templates/partials/blog_item.html.twig");
    }
}
