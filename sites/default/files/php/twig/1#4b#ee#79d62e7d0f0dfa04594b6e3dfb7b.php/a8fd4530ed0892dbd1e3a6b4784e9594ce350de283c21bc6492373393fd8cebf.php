<?php

/* themes/fontfolio/templates/block.html.twig */
class __TwigTemplate_4bee79d62e7d0f0dfa04594b6e3dfb7b extends Drupal\Core\Template\TwigTemplate
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
        // line 43
        if (isset($context["subject"])) { $_subject_ = $context["subject"]; } else { $_subject_ = null; }
        if ($_subject_) {
            // line 44
            echo "  <section class=\"";
            echo twig_render_var($this->getAttribute($this->getContextReference($context, "attributes"), "class"));
            echo "\" ";
            echo twig_render_var($this->getContextReference($context, "attributes"));
            echo ">
";
        } else {
            // line 46
            echo "  <div class=\"";
            echo twig_render_var($this->getAttribute($this->getContextReference($context, "attributes"), "class"));
            echo "\" ";
            echo twig_render_var($this->getContextReference($context, "attributes"));
            echo ">
";
        }
        // line 48
        echo "  ";
        echo twig_render_var($this->getContextReference($context, "title_prefix"));
        echo "
  ";
        // line 49
        if (isset($context["subject"])) { $_subject_ = $context["subject"]; } else { $_subject_ = null; }
        if ($_subject_) {
            // line 50
            echo "    <h3 ";
            echo twig_render_var($this->getContextReference($context, "title_attributes"));
            echo " >";
            echo twig_render_var($this->getContextReference($context, "subject"));
            echo "</h3>
  ";
        }
        // line 52
        echo "  ";
        echo twig_render_var($this->getContextReference($context, "title_suffix"));
        echo "

  <div class=\"content ";
        // line 54
        echo twig_render_var($this->getAttribute($this->getContextReference($context, "content_attributes"), "class"));
        echo "\" ";
        echo twig_render_var($this->getContextReference($context, "content_attributes"));
        echo ">
   ";
        // line 55
        echo twig_render_var($this->getContextReference($context, "content"));
        echo "
  </div> <!-- /.content -->

";
        // line 58
        if (isset($context["subject"])) { $_subject_ = $context["subject"]; } else { $_subject_ = null; }
        if ($_subject_) {
            // line 59
            echo "  </section>
";
        } else {
            // line 61
            echo "  </div>
";
        }
        // line 62
        echo " <!-- /.block -->
";
    }

    public function getTemplateName()
    {
        return "themes/fontfolio/templates/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 61,  75 => 59,  72 => 58,  66 => 55,  60 => 54,  54 => 52,  43 => 49,  38 => 48,  30 => 46,  22 => 44,  306 => 185,  299 => 180,  296 => 179,  289 => 175,  285 => 173,  282 => 172,  279 => 171,  277 => 170,  274 => 169,  269 => 167,  264 => 166,  258 => 165,  253 => 164,  247 => 163,  242 => 162,  238 => 160,  236 => 159,  232 => 158,  226 => 157,  221 => 156,  215 => 155,  209 => 151,  203 => 149,  200 => 148,  195 => 145,  191 => 143,  185 => 141,  183 => 140,  179 => 139,  174 => 137,  167 => 134,  165 => 133,  162 => 132,  160 => 131,  157 => 129,  151 => 126,  145 => 124,  141 => 123,  134 => 119,  131 => 118,  129 => 117,  125 => 116,  118 => 111,  110 => 107,  106 => 104,  104 => 103,  101 => 102,  97 => 100,  91 => 98,  89 => 97,  86 => 96,  83 => 62,  73 => 92,  70 => 91,  67 => 90,  58 => 87,  55 => 86,  51 => 85,  49 => 84,  46 => 50,  44 => 82,  41 => 81,  33 => 78,  26 => 77,  24 => 76,  19 => 43,);
    }
}
