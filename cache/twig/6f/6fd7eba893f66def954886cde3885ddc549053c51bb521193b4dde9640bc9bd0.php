<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_6bc3d28720b6a6b17b871ac15701448442d84a6c7f2cfa92036ed173c55e9131 extends Twig_Template
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
        echo "<div class=\"list-item\">

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

        ";
        // line 10
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array())) {
            // line 11
            echo "            <h3>
                ";
            // line 12
            if ( !($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
                // line 13
                echo "                <a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\"><i class=\"fa fa-angle-double-right\"></i></a>
                ";
            }
            // line 15
            echo "                <a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a>
            </h3>
        ";
        } else {
            // line 18
            echo "            <h3><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a></h3>
        ";
        }
        // line 20
        echo "
        <span class=\"list-blog-date\">
            <i class=\"fa fa-calendar\"></i> <span>";
        // line 22
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "F j, Y, g:i a");
        echo "</span>
        </span>
        ";
        // line 24
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array())) {
            // line 25
            echo "        <span class=\"tags pull-right\">
            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 27
                echo "            <a class=\"label label-primary\" href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/tag";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\">";
                echo $context["tag"];
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        </span>
        ";
        }
        // line 31
        echo "        ";
        if ((isset($context["big_header"]) ? $context["big_header"] : null)) {
            // line 32
            echo "            ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "cropResize", array(0 => 900, 1 => 600), "method"), "html", array(0 => "", 1 => "blog-header-image"), "method");
            echo "
        ";
        } else {
            // line 34
            echo "            ";
            if ((isset($context["header_image"]) ? $context["header_image"] : null)) {
                // line 35
                echo "                ";
                if ((isset($context["header_image_file"]) ? $context["header_image_file"] : null)) {
                    // line 36
                    echo "                    ";
                    $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), (isset($context["header_image_file"]) ? $context["header_image_file"] : null), array(), "array");
                    // line 37
                    echo "                ";
                } else {
                    // line 38
                    echo "                    ";
                    $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
                    // line 39
                    echo "                ";
                }
                // line 40
                echo "                ";
                echo $this->getAttribute($this->getAttribute((isset($context["header_image_media"]) ? $context["header_image_media"] : null), "cropZoom", array(0 => (isset($context["header_image_width"]) ? $context["header_image_width"] : null), 1 => (isset($context["header_image_height"]) ? $context["header_image_height"] : null)), "method"), "html", array());
                echo "
            ";
            }
            // line 42
            echo "        ";
        }
        // line 43
        echo "    </div>

    <div class=\"list-blog-padding\">

    ";
        // line 47
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
            // line 48
            echo "        <p>";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "</p>
        ";
            // line 49
            if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
                // line 50
                echo "        ";
                $context["show_prev_next"] = true;
                // line 51
                echo "        ";
            }
            // line 52
            echo "    ";
        } elseif (((isset($context["truncate"]) ? $context["truncate"] : null) && ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())))) {
            // line 53
            echo "        <p>";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array());
            echo "</p>
        <p><a href=\"";
            // line 54
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">Continue Reading...</a></p>
    ";
        } elseif (        // line 55
(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 56
            echo "        ";
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()))) {
                // line 57
                echo "            <p>";
                echo \Grav\Common\Utils::truncate($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), 550);
                echo "</p>
        ";
            } else {
                // line 59
                echo "            <p>";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
                echo "</p>
        ";
            }
            // line 61
            echo "        <p><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">Continue Reading...</a></p>
    ";
        } else {
            // line 63
            echo "        <p>";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "</p>
        ";
            // line 64
            $context["show_prev_next"] = true;
            // line 65
            echo "    ";
        }
        // line 66
        echo "
    ";
        // line 67
        if ((isset($context["show_prev_next"]) ? $context["show_prev_next"] : null)) {
            // line 68
            echo "
        <p class=\"text-center\">
            ";
            // line 70
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isFirst", array())) {
                // line 71
                echo "                <a class=\"btn btn-default\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "url", array());
                echo "\"><i class=\"fa fa-chevron-left\"></i> Next Post</a>
            ";
            }
            // line 73
            echo "
            ";
            // line 74
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isLast", array())) {
                // line 75
                echo "                <a class=\"btn btn-default\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "url", array());
                echo "\">Previous Post <i class=\"fa fa-chevron-right\"></i></a>
            ";
            }
            // line 77
            echo "        </p>
    ";
        }
        // line 79
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
        return array (  239 => 79,  235 => 77,  229 => 75,  227 => 74,  224 => 73,  218 => 71,  216 => 70,  212 => 68,  210 => 67,  207 => 66,  204 => 65,  202 => 64,  197 => 63,  191 => 61,  185 => 59,  179 => 57,  176 => 56,  174 => 55,  170 => 54,  165 => 53,  162 => 52,  159 => 51,  156 => 50,  154 => 49,  149 => 48,  147 => 47,  141 => 43,  138 => 42,  132 => 40,  129 => 39,  126 => 38,  123 => 37,  120 => 36,  117 => 35,  114 => 34,  108 => 32,  105 => 31,  101 => 29,  87 => 27,  83 => 26,  80 => 25,  78 => 24,  73 => 22,  69 => 20,  61 => 18,  52 => 15,  46 => 13,  44 => 12,  41 => 11,  39 => 10,  34 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"list-item\">

    {% set header_image = page.header.header_image|defined(true) %}
    {% set header_image_width  = page.header.header_image_width|defined(900) %}
    {% set header_image_height = page.header.header_image_height|defined(300) %}
    {% set header_image_file = page.header.header_image_file %}

    <div class=\"list-blog-header\">

        {% if page.header.link %}
            <h3>
                {% if page.header.continue_link is not sameas(false) %}
                <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right\"></i></a>
                {% endif %}
                <a href=\"{{ page.header.link }}\">{{ page.title }}</a>
            </h3>
        {% else %}
            <h3><a href=\"{{ page.url }}\">{{ page.title }}</a></h3>
        {% endif %}

        <span class=\"list-blog-date\">
            <i class=\"fa fa-calendar\"></i> <span>{{ page.date|date(\"F j, Y, g:i a\") }}</span>
        </span>
        {% if page.taxonomy.tag %}
        <span class=\"tags pull-right\">
            {% for tag in page.taxonomy.tag %}
            <a class=\"label label-primary\" href=\"{{ base_url }}/tag{{ config.system.param_sep }}{{ tag }}\">{{ tag }}</a>
            {% endfor %}
        </span>
        {% endif %}
        {% if big_header %}
            {{ page.media.images|first.cropResize(900,600).html('','blog-header-image') }}
        {% else %}
            {% if header_image %}
                {% if header_image_file %}
                    {% set header_image_media = page.media.images[header_image_file] %}
                {% else %}
                    {% set header_image_media = page.media.images|first %}
                {% endif %}
                {{ header_image_media.cropZoom(header_image_width, header_image_height).html }}
            {% endif %}
        {% endif %}
    </div>

    <div class=\"list-blog-padding\">

    {% if page.header.continue_link is sameas(false) %}
        <p>{{ page.content }}</p>
        {% if not truncate %}
        {% set show_prev_next = true %}
        {% endif %}
    {% elseif truncate and page.summary != page.content %}
        <p>{{ page.summary }}</p>
        <p><a href=\"{{ page.url }}\">Continue Reading...</a></p>
    {% elseif truncate %}
        {% if page.summary != page.content %}
            <p>{{ page.content|truncate(550) }}</p>
        {% else %}
            <p>{{ page.content }}</p>
        {% endif %}
        <p><a href=\"{{ page.url }}\">Continue Reading...</a></p>
    {% else %}
        <p>{{ page.content }}</p>
        {% set show_prev_next = true %}
    {% endif %}

    {% if show_prev_next %}

        <p class=\"text-center\">
            {% if not page.isFirst %}
                <a class=\"btn btn-default\" href=\"{{ page.nextSibling.url }}\"><i class=\"fa fa-chevron-left\"></i> Next Post</a>
            {% endif %}

            {% if not page.isLast %}
                <a class=\"btn btn-default\" href=\"{{ page.prevSibling.url }}\">Previous Post <i class=\"fa fa-chevron-right\"></i></a>
            {% endif %}
        </p>
    {% endif %}

    </div>
</div>
", "partials/blog_item.html.twig", "/home/margazet/sites/grav/user/themes/bootstrap/templates/partials/blog_item.html.twig");
    }
}
