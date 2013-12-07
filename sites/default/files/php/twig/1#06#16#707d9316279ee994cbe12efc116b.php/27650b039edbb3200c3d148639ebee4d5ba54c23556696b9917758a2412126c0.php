<?php

/* core/themes/bartik/templates/node.html.twig */
class __TwigTemplate_0616707d9316279ee994cbe12efc116b extends Drupal\Core\Template\TwigTemplate
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
        // line 74
        echo "<article id=\"node-";
        echo twig_render_var($this->getAttribute($this->getContextReference($context, "node"), "id"));
        echo "\" class=\"";
        echo twig_render_var($this->getAttribute($this->getContextReference($context, "attributes"), "class"));
        echo " clearfix\"";
        echo twig_render_var($this->getContextReference($context, "attributes"));
        echo " role=\"article\">

  <header>
    ";
        // line 77
        echo twig_render_var($this->getContextReference($context, "title_prefix"));
        echo "
    ";
        // line 78
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ((!$_page_)) {
            // line 79
            echo "      <h2";
            echo twig_render_var($this->getContextReference($context, "title_attributes"));
            echo ">
        <a href=\"";
            // line 80
            echo twig_render_var($this->getContextReference($context, "node_url"));
            echo "\">";
            echo twig_render_var($this->getContextReference($context, "label"));
            echo "</a>
      </h2>
    ";
        }
        // line 83
        echo "    ";
        echo twig_render_var($this->getContextReference($context, "title_suffix"));
        echo "

    ";
        // line 85
        if (isset($context["display_submitted"])) { $_display_submitted_ = $context["display_submitted"]; } else { $_display_submitted_ = null; }
        if ($_display_submitted_) {
            // line 86
            echo "      <div class=\"meta submitted\">
        ";
            // line 87
            echo twig_render_var($this->getContextReference($context, "user_picture"));
            echo "
        ";
            // line 88
            echo twig_render_var($this->getContextReference($context, "submitted"));
            echo "
      </div>
    ";
        }
        // line 91
        echo "  </header>

  <div class=\"content clearfix\"";
        // line 93
        echo twig_render_var($this->getContextReference($context, "content_attributes"));
        echo ">
    ";
        // line 95
        echo "    ";
        echo twig_render_var(twig_hide($this->getAttribute($this->getContextReference($context, "content"), "links")));
        // line 96
        echo "    ";
        echo twig_render_var($this->getContextReference($context, "content"));
        echo "
  </div>

  ";
        // line 99
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        if ($this->getAttribute($_content_, "links")) {
            // line 100
            echo "    <footer class=\"link-wrapper\">
      ";
            // line 101
            echo twig_render_var($this->getAttribute($this->getContextReference($context, "content"), "links"));
            echo "
    </footer>
  ";
        }
        // line 104
        echo "
</article>
";
    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 104,  96 => 101,  93 => 100,  90 => 99,  83 => 96,  80 => 95,  76 => 93,  72 => 91,  66 => 88,  62 => 87,  59 => 86,  56 => 85,  50 => 83,  42 => 80,  37 => 79,  34 => 78,  30 => 77,  19 => 74,);
    }
}
