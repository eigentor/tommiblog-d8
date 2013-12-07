<?php

/* themes/fontfolio/templates/page.html.twig */
class __TwigTemplate_b0211e584be99f4c2032bbee00a03fda extends Drupal\Core\Template\TwigTemplate
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
        // line 73
        echo "<div id=\"main_container\">
  <header id=\"header\" role=\"banner\">
    <div class=\"section clearfix\">
    ";
        // line 76
        if (array_key_exists("logo", $context)) {
            // line 77
            echo "      <a href=\"";
            echo twig_render_var($this->getContextReference($context, "front_page"));
            echo "\" title=\"";
            echo twig_render_var(t("Home"));
            echo "\" rel=\"home\" class=\"logo\">
        <img src=\"";
            // line 78
            echo twig_render_var($this->getContextReference($context, "logo"));
            echo "\" alt=\"";
            echo twig_render_var(t("Home"));
            echo "\"/>
      </a>
    ";
        }
        // line 81
        echo "    
    ";
        // line 82
        if ((array_key_exists("site_name", $context) || array_key_exists("site_slogan", $context))) {
            // line 83
            echo "      <div id=\"name-and-slogan\">
        ";
            // line 84
            if (array_key_exists("site_name", $context)) {
                // line 85
                echo "          ";
                if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
                if ($_title_) {
                    // line 86
                    echo "            <p id=\"site-name\"><strong>
              <a href=\"";
                    // line 87
                    echo twig_render_var($this->getContextReference($context, "front_page"));
                    echo "\" title=\"";
                    echo twig_render_var(t("Home"));
                    echo "\" rel=\"home\"><span>";
                    echo twig_render_var($this->getContextReference($context, "site_name"));
                    echo "</span></a>
            </strong></p>
          ";
                    // line 90
                    echo "          ";
                } else {
                    // line 91
                    echo "            <h1 id=\"site-name\">
              <a href=\"";
                    // line 92
                    echo twig_render_var($this->getContextReference($context, "front_page"));
                    echo "\" title=\"";
                    echo twig_render_var(t("Home"));
                    echo "\" rel=\"home\"><span>";
                    echo twig_render_var($this->getContextReference($context, "site_name"));
                    echo "</span></a>
            </h1>
          ";
                }
                // line 95
                echo "        ";
            }
            // line 96
            echo "
        ";
            // line 97
            if (array_key_exists("site_slogan", $context)) {
                // line 98
                echo "         <div id=\"site-slogan\">";
                echo twig_render_var($this->getContextReference($context, "site_slogan"));
                echo "</div>
        ";
            }
            // line 100
            echo "      </div><!-- #name-and-slogan -->
    ";
        }
        // line 102
        echo "       
    ";
        // line 103
        if (array_key_exists("secondary_menu", $context)) {
            // line 104
            echo "      <nav id=\"header_menu\">
        <div class=\"section\">
          ";
            // line 107
            echo "          ";
            echo twig_render_var($this->getContextReference($context, "secondary_menu"));
            echo "
        </div>
      </nav> <!-- /.section, /#header_menu -->
    ";
        }
        // line 111
        echo "    </div>
  </header> <!-- /.section, /#header -->
     
  <div id=\"header_top\">
    <div class=\"header_top_border\"></div>
    <a class=\"home-icon toggle\" href=\"/\"><img src=\"";
        // line 116
        echo twig_render_var(($this->getContextReference($context, "base_path") . $this->getContextReference($context, "directory")));
        echo "/images/glyphicons_020_home.png\"></a>
  ";
        // line 117
        if (array_key_exists("social_links", $context)) {
            // line 118
            echo "    <div class=\"social\">
      ";
            // line 119
            echo twig_render_var($this->getContextReference($context, "social_links"));
            echo "
      <div class=\"clear\"></div>
    </div><!--//social-->
  ";
        }
        // line 123
        echo "  ";
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "search", array(), "any", true, true)) {
            // line 124
            echo "    <a class=\"toggle-search toggle\" href=\"#header_top\"><img src=\"";
            echo twig_render_var(($this->getContextReference($context, "base_path") . $this->getContextReference($context, "directory")));
            echo "/images/glyphicons_027_search.png\"></a>
    <div class=\"search\">
      ";
            // line 126
            echo twig_render_var($this->getAttribute($this->getContextReference($context, "page"), "search"));
            echo "
    </div><!--//search-->
  ";
        }
        // line 129
        echo "      
 ";
        // line 131
        echo " ";
        // line 132
        echo "     
  ";
        // line 133
        if (array_key_exists("main_menu", $context)) {
            // line 134
            echo "    <a class=\"toggle-nav toggle\" href=\"#header_top\"><img src=\"";
            echo twig_render_var(($this->getContextReference($context, "base_path") . $this->getContextReference($context, "directory")));
            echo "/images/icon_nav_toggle-black.gif\"></a> 
    <nav class=\"menu_cont\">
      <div class=\"social\">
        ";
            // line 137
            echo twig_render_var($this->getContextReference($context, "social_links"));
            echo "
      </div><!--//social-->
      ";
            // line 139
            echo twig_render_var($this->getContextReference($context, "main_menu"));
            echo "
      ";
            // line 140
            if (array_key_exists("secondary_menu", $context)) {
                // line 141
                echo "        ";
                echo twig_render_var($this->getContextReference($context, "secondary_menu"));
                echo "
      ";
            }
            // line 143
            echo "    </nav><!--//menu_cont-->
  ";
        }
        // line 145
        echo "    <div class=\"clear\"></div>
  </div> <!-- /#header_top --> 

  ";
        // line 148
        if (isset($context["messages"])) { $_messages_ = $context["messages"]; } else { $_messages_ = null; }
        if ($_messages_) {
            // line 149
            echo "    <div id=\"messages\">";
            echo twig_render_var($this->getContextReference($context, "messages"));
            echo "</div>
  ";
        }
        // line 151
        echo "
  <div id=\"content\" class=\"column\" role=\"main\">
    <div class=\"section\">
      <a id=\"main-content\"></a>
      ";
        // line 155
        if (array_key_exists("tabs", $context)) {
            echo "<div class=\"tabs\">";
            echo twig_render_var($this->getContextReference($context, "tabs"));
            echo "</div>";
        }
        // line 156
        echo "      ";
        echo twig_render_var($this->getAttribute($this->getContextReference($context, "page"), "help"));
        echo "
      ";
        // line 157
        if (array_key_exists("action_links", $context)) {
            echo "<ul class=\"action-links\">";
            echo twig_render_var($this->getContextReference($context, "action_links"));
            echo "</ul>";
        }
        // line 158
        echo "      ";
        if (isset($context["is_front"])) { $_is_front_ = $context["is_front"]; } else { $_is_front_ = null; }
        if ((!$_is_front_)) {
            // line 159
            echo "      ";
            // line 160
            echo "        <div id=\"single_left\">
      ";
        }
        // line 162
        echo "      ";
        echo twig_render_var($this->getContextReference($context, "title_prefix"));
        echo "
      ";
        // line 163
        if (array_key_exists("title", $context)) {
            echo "<h1 class=\"title\" id=\"page-title\">";
            echo twig_render_var($this->getContextReference($context, "title"));
            echo "</h1>";
        }
        // line 164
        echo "      ";
        echo twig_render_var($this->getContextReference($context, "title_suffix"));
        echo "
      ";
        // line 165
        if (array_key_exists("tabs", $context)) {
            echo "<div class=\"tabs\">";
            echo twig_render_var($this->getContextReference($context, "tabs"));
            echo "</div>";
        }
        // line 166
        echo "      ";
        echo twig_render_var($this->getAttribute($this->getContextReference($context, "page"), "content"));
        echo "
      ";
        // line 167
        echo twig_render_var($this->getContextReference($context, "feed_icons"));
        echo "
      
      ";
        // line 169
        if (isset($context["is_front"])) { $_is_front_ = $context["is_front"]; } else { $_is_front_ = null; }
        if ((!$_is_front_)) {
            // line 170
            echo "        ";
            // line 171
            echo "        </div><!-- /single_left -->
        ";
            // line 172
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            if ($this->getAttribute($_page_, "sidebar_first")) {
                // line 173
                echo "          <aside id=\"sidebar\" class=\"column sidebar\">
            <section class=\"section\">
          ";
                // line 175
                echo twig_render_var($this->getAttribute($this->getContextReference($context, "page"), "sidebar_first"));
                echo "
            </section>
          </aside> <!-- /.section, /#sidebar-first -->
        ";
            }
            // line 179
            echo "      ";
        }
        // line 180
        echo "    </div>
  </div> <!-- /.section, /#content -->

  <footer id=\"footer\">
    <section class=\"section\">
      ";
        // line 185
        echo twig_render_var($this->getAttribute($this->getContextReference($context, "page"), "footer"));
        echo "
    </section>
  </footer> <!-- /.section, /#footer -->

</div> <!-- /#main_container -->
";
    }

    public function getTemplateName()
    {
        return "themes/fontfolio/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 185,  299 => 180,  296 => 179,  289 => 175,  285 => 173,  282 => 172,  279 => 171,  277 => 170,  274 => 169,  269 => 167,  264 => 166,  258 => 165,  253 => 164,  247 => 163,  242 => 162,  238 => 160,  236 => 159,  232 => 158,  226 => 157,  221 => 156,  215 => 155,  209 => 151,  203 => 149,  200 => 148,  195 => 145,  191 => 143,  185 => 141,  183 => 140,  179 => 139,  174 => 137,  167 => 134,  165 => 133,  162 => 132,  160 => 131,  157 => 129,  151 => 126,  145 => 124,  141 => 123,  134 => 119,  131 => 118,  129 => 117,  125 => 116,  118 => 111,  110 => 107,  106 => 104,  104 => 103,  101 => 102,  97 => 100,  91 => 98,  89 => 97,  86 => 96,  83 => 95,  73 => 92,  70 => 91,  67 => 90,  58 => 87,  55 => 86,  51 => 85,  49 => 84,  46 => 83,  44 => 82,  41 => 81,  33 => 78,  26 => 77,  24 => 76,  19 => 73,);
    }
}
