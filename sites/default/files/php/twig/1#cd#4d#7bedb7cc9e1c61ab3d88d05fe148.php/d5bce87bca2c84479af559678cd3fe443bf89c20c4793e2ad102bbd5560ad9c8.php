<?php

/* core/modules/system/templates/maintenance-page.html.twig */
class __TwigTemplate_cd4d7bedb7cc9e1c61ab3d88d05fe148 extends Drupal\Core\Template\TwigTemplate
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
        // line 15
        echo "<!DOCTYPE html>
<html";
        // line 16
        echo twig_render_var($this->getContextReference($context, "html_attributes"));
        echo ">
<head>
  ";
        // line 18
        echo twig_render_var($this->getContextReference($context, "head"));
        echo "
  <title>";
        // line 19
        echo twig_render_var($this->getContextReference($context, "head_title"));
        echo "</title>
  ";
        // line 20
        echo twig_render_var($this->getContextReference($context, "styles"));
        echo "
  ";
        // line 21
        echo twig_render_var($this->getContextReference($context, "scripts"));
        echo "
</head>
<body class=\"";
        // line 23
        echo twig_render_var($this->getAttribute($this->getContextReference($context, "attributes"), "class"));
        echo "\">

<div class=\"l-container\">

  <header role=\"banner\">
    ";
        // line 28
        if (isset($context["logo"])) { $_logo_ = $context["logo"]; } else { $_logo_ = null; }
        if ($_logo_) {
            // line 29
            echo "      <a href=\"";
            echo twig_render_var($this->getContextReference($context, "front_page"));
            echo "\" title=\"";
            echo twig_render_var(t("Home"));
            echo "\" rel=\"home\">
        <img src=\"";
            // line 30
            echo twig_render_var($this->getContextReference($context, "logo"));
            echo "\" alt=\"";
            echo twig_render_var(t("Home"));
            echo "\"/>
      </a>
    ";
        }
        // line 33
        echo "
    ";
        // line 34
        if (isset($context["site_name"])) { $_site_name_ = $context["site_name"]; } else { $_site_name_ = null; }
        if (isset($context["site_slogan"])) { $_site_slogan_ = $context["site_slogan"]; } else { $_site_slogan_ = null; }
        if (($_site_name_ || $_site_slogan_)) {
            // line 35
            echo "      <div class=\"name-and-slogan\">
        ";
            // line 36
            if (isset($context["site_name"])) { $_site_name_ = $context["site_name"]; } else { $_site_name_ = null; }
            if ($_site_name_) {
                // line 37
                echo "         <h1 class=\"site-name\">
           <a href=\"";
                // line 38
                echo twig_render_var($this->getContextReference($context, "front_page"));
                echo "\" title=\"";
                echo twig_render_var(t("Home"));
                echo "\" rel=\"home\">";
                echo twig_render_var($this->getContextReference($context, "site_name"));
                echo "</a>
         </h1>
        ";
            }
            // line 41
            echo "
        ";
            // line 42
            if (isset($context["site_slogan"])) { $_site_slogan_ = $context["site_slogan"]; } else { $_site_slogan_ = null; }
            if ($_site_slogan_) {
                // line 43
                echo "          <div class=\"site-slogan\">";
                echo twig_render_var($this->getContextReference($context, "site_slogan"));
                echo "</div>
        ";
            }
            // line 45
            echo "      </div>";
            // line 46
            echo "    ";
        }
        // line 47
        echo "
  </header>

  <main role=\"main\">
    ";
        // line 51
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        if ($_title_) {
            // line 52
            echo "      <h1>";
            echo twig_render_var($this->getContextReference($context, "title"));
            echo "</h1>
    ";
        }
        // line 54
        echo "
    ";
        // line 55
        echo twig_render_var($this->getContextReference($context, "messages"));
        echo "

    ";
        // line 57
        echo twig_render_var($this->getContextReference($context, "content"));
        echo "
  </main>

  ";
        // line 60
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "sidebar_first")) {
            // line 61
            echo "    <aside class=\"l-sidebar-first\" role=\"complementary\">
      ";
            // line 62
            echo twig_render_var($this->getAttribute($this->getContextReference($context, "page"), "sidebar_first"));
            echo "
    </aside>";
            // line 64
            echo "  ";
        }
        // line 65
        echo "
  ";
        // line 66
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "sidebar_second")) {
            // line 67
            echo "    <aside class=\"l-sidebar-second\" role=\"complementary\">
      ";
            // line 68
            echo twig_render_var($this->getAttribute($this->getContextReference($context, "page"), "sidebar_second"));
            echo "
    </aside>";
            // line 70
            echo "  ";
        }
        // line 71
        echo "
  ";
        // line 72
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ($this->getAttribute($_page_, "footer")) {
            // line 73
            echo "    <footer role=\"contentinfo\">
      ";
            // line 74
            echo twig_render_var($this->getAttribute($this->getContextReference($context, "page"), "footer"));
            echo "
    </footer>
  ";
        }
        // line 77
        echo "
</div>";
        // line 79
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/maintenance-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 79,  186 => 77,  180 => 74,  177 => 73,  174 => 72,  171 => 71,  168 => 70,  164 => 68,  161 => 67,  158 => 66,  155 => 65,  152 => 64,  148 => 62,  145 => 61,  142 => 60,  136 => 57,  131 => 55,  128 => 54,  122 => 52,  119 => 51,  113 => 47,  110 => 46,  108 => 45,  102 => 43,  99 => 42,  96 => 41,  86 => 38,  83 => 37,  80 => 36,  77 => 35,  73 => 34,  70 => 33,  55 => 29,  52 => 28,  44 => 23,  39 => 21,  31 => 19,  27 => 18,  22 => 16,  76 => 106,  72 => 105,  66 => 102,  62 => 30,  57 => 100,  51 => 98,  48 => 97,  43 => 87,  35 => 20,  32 => 83,  29 => 82,  19 => 15,);
    }
}
