<?php

/* partials/base.html.twig */
class __TwigTemplate_c9248c832eb284d517bc434b026e6caedea39af5933e5917931c20671d437d6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'js_libraries' => array($this, 'block_js_libraries'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html class=\"uk-height-1-1\" lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getActive", array())) : ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "default_lang", array())));
        echo "\">
  <head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <title>";
        // line 6
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>

    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    <script type=\"text/javascript\">
    'use strict';
    // your JS code goes here
    var app = {};
    app.site_title = \"";
        // line 25
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "\";
    app.base_url = \"";
        // line 26
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "\";
    app.admin_dash_url = \"";
        // line 27
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "route", array());
        echo "\";
    </script>

  </head>
<body>
  <!-- ========= -->
  <!-- Your HTML -->
  <!-- ========= -->

  <div class=\"uk-offcanvas\" id=\"offcanvas-mobile\">
    <div class=\"uk-offcanvas-bar\">
      <ul class=\"uk-nav uk-nav-offcanvas uk-nav-parent-icon\" data-uk-nav=\"\">
        <li><a href=\"";
        // line 39
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/#\"><i class=\"uk-icon-home\"></i> ";
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</a></li>
        ";
        // line 40
        $context["taxlist"] = $this->getAttribute((isset($context["taxonomylist"]) ? $context["taxonomylist"] : null), "get", array(), "method");
        // line 41
        echo "
        ";
        // line 42
        if ($this->getAttribute((isset($context["taxlist"]) ? $context["taxlist"] : null), "category", array(), "array")) {
            // line 43
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["taxlist"]) ? $context["taxlist"] : null), "category", array(), "array"));
            foreach ($context['_seq'] as $context["tax"] => $context["value"]) {
                // line 44
                echo "            <li><a href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/#";
                echo twig_replace_filter(twig_lower_filter($this->env, $context["tax"]), array(" " => "_"));
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("title", $context["tax"]);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tax'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "        ";
        }
        // line 47
        echo "
        ";
        // line 48
        $context["navbar_menus"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/menus/navbar"), "method"), "header", array()), "items", array());
        // line 49
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navbar_menus"]) ? $context["navbar_menus"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 50
            echo "            ";
            if ($this->getAttribute($context["button"], "url", array())) {
                echo " 
                <li ";
                // line 51
                if ($this->getAttribute($context["button"], "li_class", array())) {
                    echo "class=\"";
                    echo $this->getAttribute($context["button"], "li_class", array());
                    echo "\"";
                }
                echo "><a class=\"";
                if ($this->getAttribute($context["button"], "subtitle", array())) {
                    echo "uk-navbar-nav-subtitle ";
                }
                if ($this->getAttribute($context["button"], "anchor_class", array())) {
                    echo $this->getAttribute($context["button"], "anchor_class", array());
                }
                echo "\" href=\"";
                if ((is_string($__internal_db3bfbee582a6030c6a2687c2d9b524338647d698b98a6d79df5c91e4b148303 = $this->getAttribute($context["button"], "url", array())) && is_string($__internal_9484267e30ad792ce70563eab053ba87ba814a52978da28fbe3bf265a6dc4b3a = "/") && ('' === $__internal_9484267e30ad792ce70563eab053ba87ba814a52978da28fbe3bf265a6dc4b3a || 0 === strpos($__internal_db3bfbee582a6030c6a2687c2d9b524338647d698b98a6d79df5c91e4b148303, $__internal_9484267e30ad792ce70563eab053ba87ba814a52978da28fbe3bf265a6dc4b3a)))) {
                    echo (isset($context["base_url"]) ? $context["base_url"] : null);
                }
                echo $this->getAttribute($context["button"], "url", array());
                echo "\" style=\"";
                if ($this->getAttribute($context["button"], "back_color", array())) {
                    echo "background: ";
                    echo $this->getAttribute($context["button"], "back_color", array());
                    echo ";";
                }
                if ($this->getAttribute($context["button"], "fore_color", array())) {
                    echo "color: ";
                    echo $this->getAttribute($context["button"], "fore_color", array());
                    echo ";";
                }
                echo "\">";
                if ($this->getAttribute($context["button"], "icon", array())) {
                    echo "<i class=\"uk-icon-";
                    echo $this->getAttribute($context["button"], "icon", array());
                    echo "\"></i> ";
                }
                if ($this->getAttribute($context["button"], "title", array())) {
                    echo $this->getAttribute($context["button"], "title", array());
                }
                if ($this->getAttribute($context["button"], "subtitle", array())) {
                    echo "<div>";
                    echo $this->getAttribute($context["button"], "subtitle", array());
                    echo "</div>";
                }
                echo "</a></li>
            ";
            }
            // line 53
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "      </ul>
    </div>
  </div>
  <div class=\"wrapper\">
    <nav class=\"sticky_navbar uk-navbar uk-navbar-attached\">
        <a class=\"uk-hidden-medium uk-hidden-large uk-navbar-toggle\" data-uk-offcanvas=\"{target:'#offcanvas-mobile'}\"></a>
        <div class=\"uk-navbar-content\">
          
          <a href=\"";
        // line 62
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/#\" class=\"uk-hidden-small uk-navbar-brand\"><i class=\"uk-icon-home\"></i> ";
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</a>
          <a href=\"";
        // line 63
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/#\" class=\"left-navbar-zone uk-hidden-medium uk-hidden-large uk-navbar-brand\"><i class=\"uk-icon-home\"></i> ";
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</a>
          <ul class=\"uk-navbar-nav\">
            ";
        // line 65
        $context["taxlist"] = $this->getAttribute((isset($context["taxonomylist"]) ? $context["taxonomylist"] : null), "get", array(), "method");
        // line 66
        echo "
            ";
        // line 67
        if ($this->getAttribute((isset($context["taxlist"]) ? $context["taxlist"] : null), "category", array(), "array")) {
            // line 68
            echo "                <li class=\"uk-parent uk-hidden-small uk-hidden-medium\" data-uk-dropdown=\"{mode:'hover'}\">
                  <a><i class=\"uk-icon-list-alt\"></i> ";
            // line 69
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("NAVBAR_CATEGORY_LABEL");
            echo " <i class=\"uk-icon-caret-down\"></i></a>
                  <div class=\"uk-dropdown uk-dropdown-navbar uk-dropdown-top uk-dropdown-scrollable\">
                    <ul class=\"uk-nav uk-nav-navbar\">
                      ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["taxlist"]) ? $context["taxlist"] : null), "category", array(), "array"));
            foreach ($context['_seq'] as $context["tax"] => $context["value"]) {
                // line 73
                echo "                        <li><a href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/#";
                echo twig_replace_filter(twig_lower_filter($this->env, $context["tax"]), array(" " => "_"));
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("title", $context["tax"]);
                echo "</a></li>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tax'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                    </ul>
                  </div>
                </li>
            ";
        }
        // line 79
        echo "            ";
        if ($this->getAttribute((isset($context["taxlist"]) ? $context["taxlist"] : null), "category", array(), "array")) {
            // line 80
            echo "                <li class=\"left-navbar-zone uk-parent uk-hidden-small uk-hidden-large\" data-uk-dropdown=\"{mode:'hover'}\">
                  <a><i class=\"uk-icon-list-alt\"></i> ";
            // line 81
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("NAVBAR_CATEGORY_LABEL");
            echo " <i class=\"uk-icon-caret-down\"></i></a>
                  <div class=\"uk-dropdown uk-dropdown-navbar uk-dropdown-top uk-dropdown-scrollable\">
                    <ul class=\"uk-nav uk-nav-navbar\">
                      ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["taxlist"]) ? $context["taxlist"] : null), "category", array(), "array"));
            foreach ($context['_seq'] as $context["tax"] => $context["value"]) {
                // line 85
                echo "                        <li><a href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/#";
                echo twig_replace_filter(twig_lower_filter($this->env, $context["tax"]), array(" " => "_"));
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("title", $context["tax"]);
                echo "</a></li>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tax'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                    </ul>
                  </div>
                </li>
            ";
        }
        // line 91
        echo "
      
        
            ";
        // line 94
        $context["navbar_menus"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/menus/navbar"), "method"), "header", array()), "items", array());
        // line 95
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navbar_menus"]) ? $context["navbar_menus"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 96
            echo "                ";
            if ($this->getAttribute($context["button"], "url", array())) {
                echo " 
                    <li ";
                // line 97
                if ($this->getAttribute($context["button"], "li_class", array())) {
                    echo "class=\"uk-hidden-small uk-hidden-medium ";
                    echo $this->getAttribute($context["button"], "li_class", array());
                    echo "\"";
                }
                echo "><a class=\"";
                if ($this->getAttribute($context["button"], "subtitle", array())) {
                    echo "uk-navbar-nav-subtitle ";
                }
                if ($this->getAttribute($context["button"], "anchor_class", array())) {
                    echo $this->getAttribute($context["button"], "anchor_class", array());
                }
                echo "\" href=\"";
                if ((is_string($__internal_c71a150ebe27ea75125c006b8c3dc0a3374ca798389667395a9c58eac1ed436e = $this->getAttribute($context["button"], "url", array())) && is_string($__internal_f82daa5764f447a639ad9c42b8f9f76eb112894df1b8a98a8c052b4c4d0e88f1 = "/") && ('' === $__internal_f82daa5764f447a639ad9c42b8f9f76eb112894df1b8a98a8c052b4c4d0e88f1 || 0 === strpos($__internal_c71a150ebe27ea75125c006b8c3dc0a3374ca798389667395a9c58eac1ed436e, $__internal_f82daa5764f447a639ad9c42b8f9f76eb112894df1b8a98a8c052b4c4d0e88f1)))) {
                    echo (isset($context["base_url"]) ? $context["base_url"] : null);
                }
                echo $this->getAttribute($context["button"], "url", array());
                echo "\" style=\"";
                if ($this->getAttribute($context["button"], "back_color", array())) {
                    echo "background: ";
                    echo $this->getAttribute($context["button"], "back_color", array());
                    echo ";";
                }
                if ($this->getAttribute($context["button"], "fore_color", array())) {
                    echo "color: ";
                    echo $this->getAttribute($context["button"], "fore_color", array());
                    echo ";";
                }
                echo "\">";
                if ($this->getAttribute($context["button"], "icon", array())) {
                    echo "<i class=\"uk-icon-";
                    echo $this->getAttribute($context["button"], "icon", array());
                    echo "\"></i> ";
                }
                if ($this->getAttribute($context["button"], "title", array())) {
                    echo $this->getAttribute($context["button"], "title", array());
                }
                if ($this->getAttribute($context["button"], "subtitle", array())) {
                    echo "<div>";
                    echo $this->getAttribute($context["button"], "subtitle", array());
                    echo "</div>";
                }
                echo "</a></li>
                ";
            }
            // line 99
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "            ";
        $context["navbar_menus"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/menus/navbar"), "method"), "header", array()), "items", array());
        // line 101
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navbar_menus"]) ? $context["navbar_menus"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 102
            echo "                ";
            if ($this->getAttribute($context["button"], "url", array())) {
                echo " 
                    <li ";
                // line 103
                if ($this->getAttribute($context["button"], "li_class", array())) {
                    echo "class=\"left-navbar-zone uk-hidden-large uk-hidden-small ";
                    echo $this->getAttribute($context["button"], "li_class", array());
                    echo "\"";
                }
                echo "><a class=\"";
                if ($this->getAttribute($context["button"], "subtitle", array())) {
                    echo "uk-navbar-nav-subtitle ";
                }
                if ($this->getAttribute($context["button"], "anchor_class", array())) {
                    echo $this->getAttribute($context["button"], "anchor_class", array());
                }
                echo "\" href=\"";
                if ((is_string($__internal_2f4a7625860b91ea6d7ad3fadc7fa7c136cbb299d6146e4e23cec084aaa0cee0 = $this->getAttribute($context["button"], "url", array())) && is_string($__internal_191ba21b74c98803a815a588c7a51c8616ba9a2a3f80edb5503865dba515738c = "/") && ('' === $__internal_191ba21b74c98803a815a588c7a51c8616ba9a2a3f80edb5503865dba515738c || 0 === strpos($__internal_2f4a7625860b91ea6d7ad3fadc7fa7c136cbb299d6146e4e23cec084aaa0cee0, $__internal_191ba21b74c98803a815a588c7a51c8616ba9a2a3f80edb5503865dba515738c)))) {
                    echo (isset($context["base_url"]) ? $context["base_url"] : null);
                }
                echo $this->getAttribute($context["button"], "url", array());
                echo "\" style=\"";
                if ($this->getAttribute($context["button"], "back_color", array())) {
                    echo "background: ";
                    echo $this->getAttribute($context["button"], "back_color", array());
                    echo ";";
                }
                if ($this->getAttribute($context["button"], "fore_color", array())) {
                    echo "color: ";
                    echo $this->getAttribute($context["button"], "fore_color", array());
                    echo ";";
                }
                echo "\">";
                if ($this->getAttribute($context["button"], "icon", array())) {
                    echo "<i class=\"uk-icon-";
                    echo $this->getAttribute($context["button"], "icon", array());
                    echo "\"></i> ";
                }
                if ($this->getAttribute($context["button"], "title", array())) {
                    echo $this->getAttribute($context["button"], "title", array());
                }
                if ($this->getAttribute($context["button"], "subtitle", array())) {
                    echo "<div>";
                    echo $this->getAttribute($context["button"], "subtitle", array());
                    echo "</div>";
                }
                echo "</a></li>
                ";
            }
            // line 105
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "
          </ul>
        </div>
        <div class=\"navbar-controls uk-hidden-large uk-navbar-content uk-navbar-flip\">
          <form id=\"dropSource\" class=\"search-form uk-search uk-form uk-form-icon\">
            <i class=\"uk-icon-search\"></i> 
            <input id=\"searchInput\" class=\"uk-form-large\" type=\"search\" placeholder=\"";
        // line 112
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("NAVBAR_SEARCH_PLACEHOLDER");
        echo " \" data-search-input>
          </form> 

        </div>
        <div class=\"navbar-controls uk-hidden-small uk-hidden-medium uk-navbar-content uk-navbar-flip\">
          <form id=\"dropSource\" class=\"search-form uk-search uk-form uk-form-icon\">
            <i class=\"uk-icon-search\"></i> 
            <input id=\"searchInput\" class=\"uk-form-large\" type=\"search\" placeholder=\"";
        // line 119
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("NAVBAR_SEARCH_PLACEHOLDER");
        echo " \" data-search-input>
          </form> 

        </div>

    </nav>
    <div class=\"uk-container uk-container-center\">
      <section id=\"card_app\">
        <div class=\"filter-navbar\"></div>
        <div class=\"uk-grid\">
          <div class=\"loading uk-width-1-1 uk-container-center uk-text-center\">
              <br>
              <a class=\"uk-button uk-button-large\"><i class=\"uk-icon-spinner uk-icon-spin\"></i> Loading...</a>
          </div>
          <div id=\"card_page\" class=\"uk-width-1-1\">
            <p>&nbsp;</p>
          </div>
          <div class=\"uk-width-1-1\">
            <div id=\"card_view\" class=\"uk-grid-width-small-1-";
        // line 137
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "cardstack", array()), "cardview", array()), "columns", array()), "small", array());
        echo " uk-grid-width-medium-1-";
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "cardstack", array()), "cardview", array()), "columns", array()), "medium", array());
        echo " uk-grid-width-large-1-";
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "cardstack", array()), "cardview", array()), "columns", array()), "large", array());
        echo " uk-grid-width-xlarge-1-";
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "cardstack", array()), "cardview", array()), "columns", array()), "xlarge", array());
        echo "\">

            </div>
          </div>
          <div class=\"uk-width-1-1\">
            <p>&nbsp;</p>
          </div>
        </div>
      </section>
    </div>

  </div>

  <!-- ========= -->
  <!-- Templates -->
  <!-- ========= -->
  <script type=\"text/template\" id=\"card-template\">
  <div>
    <article class=\"card\">
      <header class=\"card__thumb\">
        <a href=\"<%- link %>\"><img src=\"<%- image %>\" ></a>
      </header>
      <div class=\"card__date\">
        <span class=\"card__date__day\"><%- published_number %></span>
        <span class=\"card__date__month\"><%- published_month %></span>
      </div>
      <div class=\"card__body\">
        <div class=\"card__category\"><a href=\"";
        // line 164
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/category/<%- category_clean %>\"><%- category %></a></div>
        <div class=\"card__title\"><%= card_title %></div>
        <div class=\"card__subtitle\"><%- subtitle %></div>
        <p class=\"card__description\"><%= summary %></p>
      </div>
      <div class=\"card__footer\">
        <div class=\"card__keywords\"><%= tags %></div>
        <span><i class=\"uk-icon-clock-o\"></i> <%- lastmodified %></span>
        <%= author_compiled %>
      </div>

    </article>
  </div>
  </script>  

  <script type=\"text/template\" id=\"controls-template\">
    <div class=\"left-navbar-zone filter-buttons uk-button-group uk-hidden-large\">
      <a class=\"search-button uk-button\" data-uk-tooltip=\"{pos:'bottom'}\" title=\"Search\"><i class=\"uk-icon-search\"></i></a>
    <!--  <a class=\"sort-button uk-button\" data-uk-tooltip=\"{pos:'bottom'}\" title=\"Sort & Filter\"><i class=\"uk-icon-sort\"></i></a> -->
      <a class=\"dash-button uk-button\" data-uk-tooltip=\"{pos:'bottom'}\" title=\"Dashboard\"><i class=\"uk-icon-dashboard\"></i></a>
                            
    </div>
    <div class=\"filter-buttons uk-button-group uk-hidden-small uk-hidden-medium\">
      <a class=\"search-button uk-button\" data-uk-tooltip=\"{pos:'bottom'}\" title=\"Search\"><i class=\"uk-icon-search\"></i></a>
      <!--<a class=\"sort-button uk-button\" data-uk-tooltip=\"{pos:'bottom'}\" title=\"WIP\" disabled><i class=\"uk-icon-sort\"></i></a>-->
      <a class=\"dash-button uk-button\" data-uk-tooltip=\"{pos:'bottom'}\" title=\"Dashboard\"><i class=\"uk-icon-dashboard\"></i></a>
                            
    </div>
    <a class=\"uk-button left-navbar-zone close-search-button uk-hidden-large uk-button-mini uk-button-danger\" data-uk-tooltip=\"{pos:'bottom'}\" title=\"Cancel Search\"><i class=\"uk-icon-close\"></i></a>
  </script> 

  <script type=\"text/template\" id=\"filter-navbar-template\">
    <nav data-uk-sticky=\"{top: 52}\" id=\"items\" class=\"uk-navbar hidden\">
      <label class=\"uk-navbar-content\">Sort:</label>
      <ul class=\"uk-navbar-nav\">
        <li><a id=\"modified-desc\">Modified <i class=\"uk-icon-sort-numeric-desc\"></i></a></li>
        <li><a id=\"modified-asc\">Modified <i class=\"uk-icon-sort-numeric-asc\"></i></a></li>
        <li><a id=\"published-desc\">Published <i class=\"uk-icon-sort-alpha-desc\"></i></a></li>
        <li><a id=\"published-asc\">Published <i class=\"uk-icon-sort-alpha-asc\"></i></a></li>
      </ul>   
    </nav>
  </script>
  <!-- ========= -->
  <!-- Libraries -->
  <!-- ========= -->

  ";
        // line 210
        $this->displayBlock('js_libraries', $context, $blocks);
        // line 221
        echo "



  <!-- =============== -->
  <!-- Scripts -->
  <!-- =============== -->  
  ";
        // line 228
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/models/Card.js", 1 => 100), "method");
        // line 229
        echo "  ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/scripts/ApplicationRouter.js", 1 => 100), "method");
        // line 230
        echo "  ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/views/CardView.js", 1 => 100), "method");
        // line 231
        echo "  ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/views/AppView.js", 1 => 100), "method");
        // line 232
        echo "  ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/views/PageView.js", 1 => 100), "method");
        // line 233
        echo "  ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/views/AuthorView.js", 1 => 100), "method");
        // line 234
        echo "  ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/views/FilterView.js", 1 => 100), "method");
        // line 235
        echo "  ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
  <!-- =============== -->
  <!-- Javascript code -->
  <!-- =============== -->
  <script type=\"text/javascript\">


    app.renderTemplate = function(name, el, json) {
      var url = '";
        // line 243
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "' + name.replace(/_/g, '-') + '.htm';
      \$.when( \$.ajax(url) ).done(function (data) {

          var tmpl = _.template(data);
          \$(el).html(tmpl(json));

      });
                
    }

    function cleanArray(actual) {
      var newArray = new Array();
      for (var i = 0; i < actual.length; i++) {
        if (actual[i]) {
          newArray.push(actual[i]);
        }
      }
      return newArray;
    }

    app.getCardJSON = function(cardURL) {

      var result=\"\";
      \$.ajax({
        url: cardURL + '.json',
        method: 'GET',
        async: false,
        dataType: 'text',
        success: function(data) {
           result = data; 
        }
     });
     return result;
   }

    //--------------
    // Collections
    //--------------
    app.CardList = Backbone.Collection.extend({
      model: app.Card,
      sortByField: function(field, direction){
        var sorted = _.sortBy(this.models, function(model){
            return model.get(field);
        });
        if(direction === 'descending'){
            sorted = sorted.reverse()
        }
        this.models = sorted;
      }
    });


    
    //--------------
    // Cards
    //--------------

    ";
        // line 301
        echo "
    ";
        // line 308
        echo "
    ";
        // line 310
        echo "    ";
        $context["cardstack"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(0 => "cards"), "method");
        // line 311
        echo "    ";
        echo $this->getAttribute($this, "cardstackloop", array(0 => (isset($context["cardstack"]) ? $context["cardstack"] : null)), "method");
        echo "

    // instance of the Collection
    app.cardList = new app.CardList(cleanArray([";
        // line 314
        echo $this->getAttribute($this, "cardlistloop", array(0 => (isset($context["cardstack"]) ? $context["cardstack"] : null)), "method");
        echo "])); 

    //--------------
    // Initializers
    //-------------- 
    app.eventAggregator = _.extend(app, Backbone.Events);

    app.appView = new app.AppView();
    app.filterView = new app.FilterView();
    app.filterView.render();

    \$(document).ready(function() {

      
      app.cardgrid = UIkit.grid(\$(\"#card_view\"), { gutter:10, duration:0 });

      setTimeout(function () {

        app.navbar_sticky = UIkit.sticky(\".sticky_navbar\", {top:0});
        
        app.router = new app.Router();

        Backbone.history.start();
  
      }, 850);
      //cheap trick to make sure that the ajax models populate before we run the route


      app.eventAggregator.on('domchange:title', function (title) {
        \$(document).attr('title', title);
      });
      

      \$(document).bind('keyup', 'alt+s', function () {
        \$('.navbar-controls.uk-hidden-large').addClass('hidden');
        \$('.left-navbar-zone').fadeToggle();
        \$('.search-form').fadeToggle();
        setTimeout(function () {
          \$('.navbar-controls.uk-hidden-large').removeClass('hidden');
        }, 425);
        \$('[data-search-input]').focus() 
      });
      \$(document).bind('keydown', 'alt+ctrl+d', function (e) { 
        e.preventDefault();
        var win = window.open(app.admin_dash_url, '_blank');
        win.focus();
      });

      \$('[data-search-input]').on(\"click\", function () {
         \$(this).select();
      });

      \$('#dropSource').on('submit', function(event) {
          event.preventDefault();
      });

      var search_in_use;

      \$('[data-search-input]').on(\"keydown\", function (event) { 
        if (event.keyCode == 18) {
          search_in_use = true; 
        }
      });


      \$('[data-search-input]').on(\"keyup\", function (event) {
          if (event.keyCode == 18) {
            event.preventDefault();
            search_in_use = false;
          } else if ((\$(this).val() == '') && (/[a-zA-Z0-9-_ ]/.test(event.keyCode)) && !search_in_use) {
            app.router.navigate('/', {trigger: true, replace: false} );
          } else if (/[a-zA-Z0-9-_ ]/.test(event.keyCode) && !search_in_use) {
            app.router.navigate('/search/' + \$(this).val(), {trigger: true, replace: false} );
          }
      });




    });

    


  </script>
  
</body>
</html>";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "
        ";
        // line 10
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/style.css"), "method");
        // line 11
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/uikit.min.css"), "method");
        // line 12
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/uikit.gradient.min.css"), "method");
        // line 13
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/components/tooltip.min.css.css"), "method");
        // line 14
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/components/tooltip.gradient.min.css"), "method");
        // line 15
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/base.style.css"), "method");
        // line 16
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/card.style.css"), "method");
        // line 17
        echo "        
    ";
    }

    // line 210
    public function block_js_libraries($context, array $blocks = array())
    {
        // line 211
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 212
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/libs/underscore-min.js", 1 => 100), "method");
        // line 213
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/libs/backbone-min.js", 1 => 100), "method");
        // line 214
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/libs/uikit.min.js", 1 => 100), "method");
        // line 215
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/libs/components/grid.min.js", 1 => 100), "method");
        // line 216
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/libs/components/sticky.min.js", 1 => 100), "method");
        // line 217
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/libs/components/dropdown.min.js", 1 => 100), "method");
        // line 218
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/libs/components/tooltip.min.js", 1 => 100), "method");
        // line 219
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/plugins/jquery.hotkeys.js", 1 => 100), "method");
        // line 220
        echo "  ";
    }

    // line 300
    public function getcardlistloop($__stack__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "stack" => $__stack__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stack"]) ? $context["stack"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                if ($this->getAttribute($this->getAttribute($context["card"], "header", array()), "publish_date", array())) {
                    echo (($this->getAttribute($context["loop"], "first", array())) ? (", ") : (""));
                    echo "card_";
                    echo twig_replace_filter($this->getAttribute($context["card"], "slug", array()), array("-" => "_"));
                    echo (( !$this->getAttribute((isset($context["cardlistloop"]) ? $context["cardlistloop"] : null), "last", array())) ? (", ") : (""));
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 302
    public function getcardstackloop($__stack__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "stack" => $__stack__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 303
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stack"]) ? $context["stack"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                if ($this->getAttribute($this->getAttribute($context["card"], "header", array()), "publish_date", array())) {
                    echo "var card_";
                    echo twig_replace_filter($this->getAttribute($context["card"], "slug", array()), array("-" => "_"));
                    echo " = new app.Card({ jurl:'";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["card"], "url", array()));
                    echo "' });
        ";
                } else {
                    // line 304
                    echo "console.log(\"";
                    echo $this->getAttribute($context["card"], "slug", array());
                    echo "\");
        ";
                }
                // line 306
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 307
            echo "    ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  900 => 307,  894 => 306,  888 => 304,  875 => 303,  863 => 302,  804 => 300,  800 => 220,  797 => 219,  794 => 218,  791 => 217,  788 => 216,  785 => 215,  782 => 214,  779 => 213,  776 => 212,  773 => 211,  770 => 210,  765 => 17,  762 => 16,  759 => 15,  756 => 14,  753 => 13,  750 => 12,  747 => 11,  745 => 10,  742 => 9,  739 => 8,  647 => 314,  640 => 311,  637 => 310,  634 => 308,  631 => 301,  571 => 243,  559 => 235,  556 => 234,  553 => 233,  550 => 232,  547 => 231,  544 => 230,  541 => 229,  539 => 228,  530 => 221,  528 => 210,  479 => 164,  443 => 137,  422 => 119,  412 => 112,  404 => 106,  398 => 105,  352 => 103,  347 => 102,  342 => 101,  339 => 100,  333 => 99,  287 => 97,  282 => 96,  277 => 95,  275 => 94,  270 => 91,  264 => 87,  251 => 85,  247 => 84,  241 => 81,  238 => 80,  235 => 79,  229 => 75,  216 => 73,  212 => 72,  206 => 69,  203 => 68,  201 => 67,  198 => 66,  196 => 65,  189 => 63,  183 => 62,  173 => 54,  167 => 53,  121 => 51,  116 => 50,  111 => 49,  109 => 48,  106 => 47,  103 => 46,  90 => 44,  85 => 43,  83 => 42,  80 => 41,  78 => 40,  72 => 39,  56 => 27,  52 => 26,  48 => 25,  38 => 19,  36 => 8,  31 => 6,  24 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html class=\"uk-height-1-1\" lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
  <head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <title>{{ site.title }}</title>

    {% block stylesheets %}

        {% do assets.addCss('theme://css/style.css') %}
        {% do assets.addCss('theme://css/uikit.min.css') %}
        {% do assets.addCss('theme://css/uikit.gradient.min.css') %}
        {% do assets.addCss('theme://css/components/tooltip.min.css.css') %}
        {% do assets.addCss('theme://css/components/tooltip.gradient.min.css') %}
        {% do assets.addCss('theme://css/base.style.css') %}
        {% do assets.addCss('theme://css/card.style.css') %}
        
    {% endblock %}
    {{ assets.css() }}

    <script type=\"text/javascript\">
    'use strict';
    // your JS code goes here
    var app = {};
    app.site_title = \"{{ site.title }}\";
    app.base_url = \"{{ base_url }}\";
    app.admin_dash_url = \"{{ base_url }}{{ config.plugins.admin.route }}\";
    </script>

  </head>
<body>
  <!-- ========= -->
  <!-- Your HTML -->
  <!-- ========= -->

  <div class=\"uk-offcanvas\" id=\"offcanvas-mobile\">
    <div class=\"uk-offcanvas-bar\">
      <ul class=\"uk-nav uk-nav-offcanvas uk-nav-parent-icon\" data-uk-nav=\"\">
        <li><a href=\"{{ base_url }}/#\"><i class=\"uk-icon-home\"></i> {{ site.title }}</a></li>
        {% set taxlist = taxonomylist.get() %}

        {% if taxlist['category'] %}
          {% for tax,value in taxlist['category'] %}
            <li><a href=\"{{ base_url }}/#{{ tax|lower|replace(({ (' '): '_' })) }}\">{{ tax|titleize }}</a></li>
          {% endfor %}
        {% endif %}

        {% set navbar_menus = page.find('/menus/navbar').header.items %}
        {% for button in navbar_menus %}
            {% if button.url %} 
                <li {% if button.li_class %}class=\"{{ button.li_class }}\"{% endif %}><a class=\"{% if button.subtitle %}uk-navbar-nav-subtitle {% endif %}{% if button.anchor_class %}{{ button.anchor_class }}{% endif %}\" href=\"{% if button.url starts with '/' %}{{ base_url }}{% endif %}{{ button.url }}\" style=\"{% if button.back_color %}background: {{ button.back_color }};{% endif %}{% if button.fore_color %}color: {{ button.fore_color }};{% endif %}\">{% if button.icon %}<i class=\"uk-icon-{{ button.icon }}\"></i> {% endif %}{% if button.title %}{{ button.title }}{% endif %}{% if button.subtitle %}<div>{{ button.subtitle }}</div>{% endif %}</a></li>
            {% endif %}
        {% endfor %}
      </ul>
    </div>
  </div>
  <div class=\"wrapper\">
    <nav class=\"sticky_navbar uk-navbar uk-navbar-attached\">
        <a class=\"uk-hidden-medium uk-hidden-large uk-navbar-toggle\" data-uk-offcanvas=\"{target:'#offcanvas-mobile'}\"></a>
        <div class=\"uk-navbar-content\">
          
          <a href=\"{{ base_url }}/#\" class=\"uk-hidden-small uk-navbar-brand\"><i class=\"uk-icon-home\"></i> {{ site.title }}</a>
          <a href=\"{{ base_url }}/#\" class=\"left-navbar-zone uk-hidden-medium uk-hidden-large uk-navbar-brand\"><i class=\"uk-icon-home\"></i> {{ site.title }}</a>
          <ul class=\"uk-navbar-nav\">
            {% set taxlist = taxonomylist.get() %}

            {% if taxlist['category'] %}
                <li class=\"uk-parent uk-hidden-small uk-hidden-medium\" data-uk-dropdown=\"{mode:'hover'}\">
                  <a><i class=\"uk-icon-list-alt\"></i> {{ 'NAVBAR_CATEGORY_LABEL'|t }} <i class=\"uk-icon-caret-down\"></i></a>
                  <div class=\"uk-dropdown uk-dropdown-navbar uk-dropdown-top uk-dropdown-scrollable\">
                    <ul class=\"uk-nav uk-nav-navbar\">
                      {% for tax,value in taxlist['category'] %}
                        <li><a href=\"{{ base_url }}/#{{ tax|lower|replace(({ (' '): '_' })) }}\">{{ tax|titleize }}</a></li>
                      {% endfor %}
                    </ul>
                  </div>
                </li>
            {% endif %}
            {% if taxlist['category'] %}
                <li class=\"left-navbar-zone uk-parent uk-hidden-small uk-hidden-large\" data-uk-dropdown=\"{mode:'hover'}\">
                  <a><i class=\"uk-icon-list-alt\"></i> {{ 'NAVBAR_CATEGORY_LABEL'|t }} <i class=\"uk-icon-caret-down\"></i></a>
                  <div class=\"uk-dropdown uk-dropdown-navbar uk-dropdown-top uk-dropdown-scrollable\">
                    <ul class=\"uk-nav uk-nav-navbar\">
                      {% for tax,value in taxlist['category'] %}
                        <li><a href=\"{{ base_url }}/#{{ tax|lower|replace(({ (' '): '_' })) }}\">{{ tax|titleize }}</a></li>
                      {% endfor %}
                    </ul>
                  </div>
                </li>
            {% endif %}

      
        
            {% set navbar_menus = page.find('/menus/navbar').header.items %}
            {% for button in navbar_menus %}
                {% if button.url %} 
                    <li {% if button.li_class %}class=\"uk-hidden-small uk-hidden-medium {{ button.li_class }}\"{% endif %}><a class=\"{% if button.subtitle %}uk-navbar-nav-subtitle {% endif %}{% if button.anchor_class %}{{ button.anchor_class }}{% endif %}\" href=\"{% if button.url starts with '/' %}{{ base_url }}{% endif %}{{ button.url }}\" style=\"{% if button.back_color %}background: {{ button.back_color }};{% endif %}{% if button.fore_color %}color: {{ button.fore_color }};{% endif %}\">{% if button.icon %}<i class=\"uk-icon-{{ button.icon }}\"></i> {% endif %}{% if button.title %}{{ button.title }}{% endif %}{% if button.subtitle %}<div>{{ button.subtitle }}</div>{% endif %}</a></li>
                {% endif %}
            {% endfor %}
            {% set navbar_menus = page.find('/menus/navbar').header.items %}
            {% for button in navbar_menus %}
                {% if button.url %} 
                    <li {% if button.li_class %}class=\"left-navbar-zone uk-hidden-large uk-hidden-small {{ button.li_class }}\"{% endif %}><a class=\"{% if button.subtitle %}uk-navbar-nav-subtitle {% endif %}{% if button.anchor_class %}{{ button.anchor_class }}{% endif %}\" href=\"{% if button.url starts with '/' %}{{ base_url }}{% endif %}{{ button.url }}\" style=\"{% if button.back_color %}background: {{ button.back_color }};{% endif %}{% if button.fore_color %}color: {{ button.fore_color }};{% endif %}\">{% if button.icon %}<i class=\"uk-icon-{{ button.icon }}\"></i> {% endif %}{% if button.title %}{{ button.title }}{% endif %}{% if button.subtitle %}<div>{{ button.subtitle }}</div>{% endif %}</a></li>
                {% endif %}
            {% endfor %}

          </ul>
        </div>
        <div class=\"navbar-controls uk-hidden-large uk-navbar-content uk-navbar-flip\">
          <form id=\"dropSource\" class=\"search-form uk-search uk-form uk-form-icon\">
            <i class=\"uk-icon-search\"></i> 
            <input id=\"searchInput\" class=\"uk-form-large\" type=\"search\" placeholder=\"{{ 'NAVBAR_SEARCH_PLACEHOLDER'|t }} \" data-search-input>
          </form> 

        </div>
        <div class=\"navbar-controls uk-hidden-small uk-hidden-medium uk-navbar-content uk-navbar-flip\">
          <form id=\"dropSource\" class=\"search-form uk-search uk-form uk-form-icon\">
            <i class=\"uk-icon-search\"></i> 
            <input id=\"searchInput\" class=\"uk-form-large\" type=\"search\" placeholder=\"{{ 'NAVBAR_SEARCH_PLACEHOLDER'|t }} \" data-search-input>
          </form> 

        </div>

    </nav>
    <div class=\"uk-container uk-container-center\">
      <section id=\"card_app\">
        <div class=\"filter-navbar\"></div>
        <div class=\"uk-grid\">
          <div class=\"loading uk-width-1-1 uk-container-center uk-text-center\">
              <br>
              <a class=\"uk-button uk-button-large\"><i class=\"uk-icon-spinner uk-icon-spin\"></i> Loading...</a>
          </div>
          <div id=\"card_page\" class=\"uk-width-1-1\">
            <p>&nbsp;</p>
          </div>
          <div class=\"uk-width-1-1\">
            <div id=\"card_view\" class=\"uk-grid-width-small-1-{{ config.themes.cardstack.cardview.columns.small }} uk-grid-width-medium-1-{{ config.themes.cardstack.cardview.columns.medium }} uk-grid-width-large-1-{{ config.themes.cardstack.cardview.columns.large }} uk-grid-width-xlarge-1-{{ config.themes.cardstack.cardview.columns.xlarge }}\">

            </div>
          </div>
          <div class=\"uk-width-1-1\">
            <p>&nbsp;</p>
          </div>
        </div>
      </section>
    </div>

  </div>

  <!-- ========= -->
  <!-- Templates -->
  <!-- ========= -->
  <script type=\"text/template\" id=\"card-template\">
  <div>
    <article class=\"card\">
      <header class=\"card__thumb\">
        <a href=\"<%- link %>\"><img src=\"<%- image %>\" ></a>
      </header>
      <div class=\"card__date\">
        <span class=\"card__date__day\"><%- published_number %></span>
        <span class=\"card__date__month\"><%- published_month %></span>
      </div>
      <div class=\"card__body\">
        <div class=\"card__category\"><a href=\"{{ base_url }}/category/<%- category_clean %>\"><%- category %></a></div>
        <div class=\"card__title\"><%= card_title %></div>
        <div class=\"card__subtitle\"><%- subtitle %></div>
        <p class=\"card__description\"><%= summary %></p>
      </div>
      <div class=\"card__footer\">
        <div class=\"card__keywords\"><%= tags %></div>
        <span><i class=\"uk-icon-clock-o\"></i> <%- lastmodified %></span>
        <%= author_compiled %>
      </div>

    </article>
  </div>
  </script>  

  <script type=\"text/template\" id=\"controls-template\">
    <div class=\"left-navbar-zone filter-buttons uk-button-group uk-hidden-large\">
      <a class=\"search-button uk-button\" data-uk-tooltip=\"{pos:'bottom'}\" title=\"Search\"><i class=\"uk-icon-search\"></i></a>
    <!--  <a class=\"sort-button uk-button\" data-uk-tooltip=\"{pos:'bottom'}\" title=\"Sort & Filter\"><i class=\"uk-icon-sort\"></i></a> -->
      <a class=\"dash-button uk-button\" data-uk-tooltip=\"{pos:'bottom'}\" title=\"Dashboard\"><i class=\"uk-icon-dashboard\"></i></a>
                            
    </div>
    <div class=\"filter-buttons uk-button-group uk-hidden-small uk-hidden-medium\">
      <a class=\"search-button uk-button\" data-uk-tooltip=\"{pos:'bottom'}\" title=\"Search\"><i class=\"uk-icon-search\"></i></a>
      <!--<a class=\"sort-button uk-button\" data-uk-tooltip=\"{pos:'bottom'}\" title=\"WIP\" disabled><i class=\"uk-icon-sort\"></i></a>-->
      <a class=\"dash-button uk-button\" data-uk-tooltip=\"{pos:'bottom'}\" title=\"Dashboard\"><i class=\"uk-icon-dashboard\"></i></a>
                            
    </div>
    <a class=\"uk-button left-navbar-zone close-search-button uk-hidden-large uk-button-mini uk-button-danger\" data-uk-tooltip=\"{pos:'bottom'}\" title=\"Cancel Search\"><i class=\"uk-icon-close\"></i></a>
  </script> 

  <script type=\"text/template\" id=\"filter-navbar-template\">
    <nav data-uk-sticky=\"{top: 52}\" id=\"items\" class=\"uk-navbar hidden\">
      <label class=\"uk-navbar-content\">Sort:</label>
      <ul class=\"uk-navbar-nav\">
        <li><a id=\"modified-desc\">Modified <i class=\"uk-icon-sort-numeric-desc\"></i></a></li>
        <li><a id=\"modified-asc\">Modified <i class=\"uk-icon-sort-numeric-asc\"></i></a></li>
        <li><a id=\"published-desc\">Published <i class=\"uk-icon-sort-alpha-desc\"></i></a></li>
        <li><a id=\"published-asc\">Published <i class=\"uk-icon-sort-alpha-asc\"></i></a></li>
      </ul>   
    </nav>
  </script>
  <!-- ========= -->
  <!-- Libraries -->
  <!-- ========= -->

  {% block js_libraries %}
      {% do assets.addJs('jquery',101) %}
      {% do assets.addJs('theme://js/libs/underscore-min.js',100) %}
      {% do assets.addJs('theme://js/libs/backbone-min.js',100) %}
      {% do assets.addJs('theme://js/libs/uikit.min.js',100) %}
      {% do assets.addJs('theme://js/libs/components/grid.min.js',100) %}
      {% do assets.addJs('theme://js/libs/components/sticky.min.js',100) %}
      {% do assets.addJs('theme://js/libs/components/dropdown.min.js',100) %}
      {% do assets.addJs('theme://js/libs/components/tooltip.min.js',100) %}
      {% do assets.addJs('theme://js/plugins/jquery.hotkeys.js',100) %}
  {% endblock %}




  <!-- =============== -->
  <!-- Scripts -->
  <!-- =============== -->  
  {% do assets.addJs('theme://js/models/Card.js',100) %}
  {% do assets.addJs('theme://js/scripts/ApplicationRouter.js',100) %}
  {% do assets.addJs('theme://js/views/CardView.js',100) %}
  {% do assets.addJs('theme://js/views/AppView.js',100) %}
  {% do assets.addJs('theme://js/views/PageView.js',100) %}
  {% do assets.addJs('theme://js/views/AuthorView.js',100) %}
  {% do assets.addJs('theme://js/views/FilterView.js',100) %}
  {{ assets.js() }}
  <!-- =============== -->
  <!-- Javascript code -->
  <!-- =============== -->
  <script type=\"text/javascript\">


    app.renderTemplate = function(name, el, json) {
      var url = '{{ base_url }}' + name.replace(/_/g, '-') + '.htm';
      \$.when( \$.ajax(url) ).done(function (data) {

          var tmpl = _.template(data);
          \$(el).html(tmpl(json));

      });
                
    }

    function cleanArray(actual) {
      var newArray = new Array();
      for (var i = 0; i < actual.length; i++) {
        if (actual[i]) {
          newArray.push(actual[i]);
        }
      }
      return newArray;
    }

    app.getCardJSON = function(cardURL) {

      var result=\"\";
      \$.ajax({
        url: cardURL + '.json',
        method: 'GET',
        async: false,
        dataType: 'text',
        success: function(data) {
           result = data; 
        }
     });
     return result;
   }

    //--------------
    // Collections
    //--------------
    app.CardList = Backbone.Collection.extend({
      model: app.Card,
      sortByField: function(field, direction){
        var sorted = _.sortBy(this.models, function(model){
            return model.get(field);
        });
        if(direction === 'descending'){
            sorted = sorted.reverse()
        }
        this.models = sorted;
      }
    });


    
    //--------------
    // Cards
    //--------------

    {% macro cardlistloop(stack) %}{% for card in stack %}{% if card.header.publish_date %}{{ loop.first ? ', ' }}card_{{ card.slug|replace(({ ('-'): '_' })) }}{{ not cardlistloop.last ? ', ' }}{% endif %}{% endfor %}{% endmacro %}

    {% macro cardstackloop(stack) %}
    {% for card in stack %}{% if card.header.publish_date %}var card_{{ card.slug|replace(({ ('-'): '_' })) }} = new app.Card({ jurl:'{{ card.url|e }}' });
        {% else %}console.log(\"{{ card.slug }}\");
        {% endif %}
        {% endfor %}
    {% endmacro %}

    {# set cardstack = page.find(config.themes.cardstack.cardstack_route).children #}
    {% set cardstack = page.collection('cards') %}
    {{ _self.cardstackloop(cardstack) }}

    // instance of the Collection
    app.cardList = new app.CardList(cleanArray([{{ _self.cardlistloop(cardstack) }}])); 

    //--------------
    // Initializers
    //-------------- 
    app.eventAggregator = _.extend(app, Backbone.Events);

    app.appView = new app.AppView();
    app.filterView = new app.FilterView();
    app.filterView.render();

    \$(document).ready(function() {

      
      app.cardgrid = UIkit.grid(\$(\"#card_view\"), { gutter:10, duration:0 });

      setTimeout(function () {

        app.navbar_sticky = UIkit.sticky(\".sticky_navbar\", {top:0});
        
        app.router = new app.Router();

        Backbone.history.start();
  
      }, 850);
      //cheap trick to make sure that the ajax models populate before we run the route


      app.eventAggregator.on('domchange:title', function (title) {
        \$(document).attr('title', title);
      });
      

      \$(document).bind('keyup', 'alt+s', function () {
        \$('.navbar-controls.uk-hidden-large').addClass('hidden');
        \$('.left-navbar-zone').fadeToggle();
        \$('.search-form').fadeToggle();
        setTimeout(function () {
          \$('.navbar-controls.uk-hidden-large').removeClass('hidden');
        }, 425);
        \$('[data-search-input]').focus() 
      });
      \$(document).bind('keydown', 'alt+ctrl+d', function (e) { 
        e.preventDefault();
        var win = window.open(app.admin_dash_url, '_blank');
        win.focus();
      });

      \$('[data-search-input]').on(\"click\", function () {
         \$(this).select();
      });

      \$('#dropSource').on('submit', function(event) {
          event.preventDefault();
      });

      var search_in_use;

      \$('[data-search-input]').on(\"keydown\", function (event) { 
        if (event.keyCode == 18) {
          search_in_use = true; 
        }
      });


      \$('[data-search-input]').on(\"keyup\", function (event) {
          if (event.keyCode == 18) {
            event.preventDefault();
            search_in_use = false;
          } else if ((\$(this).val() == '') && (/[a-zA-Z0-9-_ ]/.test(event.keyCode)) && !search_in_use) {
            app.router.navigate('/', {trigger: true, replace: false} );
          } else if (/[a-zA-Z0-9-_ ]/.test(event.keyCode) && !search_in_use) {
            app.router.navigate('/search/' + \$(this).val(), {trigger: true, replace: false} );
          }
      });




    });

    


  </script>
  
</body>
</html>", "partials/base.html.twig", "/home/margazet/sites/grav/user/themes/cardstack/templates/partials/base.html.twig");
    }
}
