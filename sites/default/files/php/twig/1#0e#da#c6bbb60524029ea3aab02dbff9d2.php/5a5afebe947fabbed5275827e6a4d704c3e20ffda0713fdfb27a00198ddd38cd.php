<?php

/* themes/fontfolio/templates/node.html.twig */
class __TwigTemplate_0edac6bbb60524029ea3aab02dbff9d2 extends Drupal\Core\Template\TwigTemplate
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
        // line 80
        echo "<article id=\"node-";
        echo twig_render_var($this->getAttribute($this->getContextReference($context, "node"), "nid"));
        echo "\" class=\"clearfix ";
        echo twig_render_var($this->getAttribute($this->getContextReference($context, "attributes"), "class"));
        echo "\"";
        echo twig_render_var($this->getContextReference($context, "attributes"));
        echo ">

  ";
        // line 82
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        if ((!$_page_)) {
            // line 83
            echo "    <header>
      <h3><a href=\"";
            // line 84
            echo twig_render_var($this->getContextReference($context, "node_url"));
            echo "\" rel=\"bookmark\">";
            echo twig_render_var($this->getAttribute($this->getContextReference($context, "node"), "title"));
            echo "</a></h3>
    </header>
  ";
        }
        // line 87
        echo "  ";
        echo twig_render_var($this->getContextReference($context, "title_suffix"));
        echo "
";
        // line 97
        echo "
  <div class=\"content ";
        // line 98
        echo twig_render_var($this->getAttribute($this->getContextReference($context, "content_attributes"), "class"));
        echo "\"";
        echo twig_render_var($this->getContextReference($context, "content_attributes"));
        echo ">
    ";
        // line 100
        echo "    ";
        echo twig_render_var(twig_hide($this->getAttribute($this->getContextReference($context, "content"), "comments")));
        echo "
    ";
        // line 101
        echo twig_render_var(twig_hide($this->getAttribute($this->getContextReference($context, "content"), "links")));
        echo "
    ";
        // line 102
        echo twig_render_var($this->getContextReference($context, "content"));
        echo "
  </div>
  <footer>
  ";
        // line 105
        echo twig_render_var($this->getAttribute($this->getContextReference($context, "content"), "links"));
        echo "
  ";
        // line 106
        echo twig_render_var($this->getAttribute($this->getContextReference($context, "content"), "comments"));
        echo "
  </footer>

</article>
";
    }

    public function getTemplateName()
    {
        return "themes/fontfolio/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 106,  72 => 105,  66 => 102,  62 => 101,  57 => 100,  51 => 98,  48 => 97,  43 => 87,  35 => 84,  32 => 83,  29 => 82,  19 => 80,);
    }
}
