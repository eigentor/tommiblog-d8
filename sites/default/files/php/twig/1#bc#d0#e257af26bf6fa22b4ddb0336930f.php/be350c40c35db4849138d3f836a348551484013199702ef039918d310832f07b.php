<?php

/* core/modules/views/templates/views-view-unformatted.html.twig */
class __TwigTemplate_bcd0e257af26bf6fa22b4ddb0336930f extends Drupal\Core\Template\TwigTemplate
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
        // line 17
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        if ($_title_) {
            // line 18
            echo "  <h3>";
            echo twig_render_var($this->getContextReference($context, "title"));
            echo "</h3>
";
        }
        // line 20
        if (isset($context["rows"])) { $_rows_ = $context["rows"]; } else { $_rows_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_rows_);
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 21
            echo "  <div";
            echo twig_render_var($this->getAttribute($this->getContextReference($context, "row"), "attributes"));
            echo ">
    ";
            // line 22
            echo twig_render_var($this->getAttribute($this->getContextReference($context, "row"), "content"));
            echo "
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "core/modules/views/templates/views-view-unformatted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 22,  33 => 21,  28 => 20,  22 => 18,  27 => 28,  24 => 27,  102 => 104,  96 => 101,  93 => 100,  90 => 99,  83 => 96,  80 => 95,  76 => 93,  72 => 91,  66 => 88,  62 => 87,  59 => 86,  56 => 85,  50 => 83,  42 => 80,  37 => 79,  34 => 78,  30 => 30,  19 => 17,);
    }
}
