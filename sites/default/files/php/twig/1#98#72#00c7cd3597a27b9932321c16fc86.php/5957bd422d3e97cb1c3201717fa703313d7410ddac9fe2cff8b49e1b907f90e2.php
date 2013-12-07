<?php

/* core/modules/user/templates/user.html.twig */
class __TwigTemplate_987200c7cd3597a27b9932321c16fc86 extends Drupal\Core\Template\TwigTemplate
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
        // line 26
        echo "<article";
        echo twig_render_var($this->getContextReference($context, "attributes"));
        echo ">
  ";
        // line 27
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        if ($_content_) {
            // line 28
            echo twig_render_var($this->getContextReference($context, "content"));
        }
        // line 30
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "core/modules/user/templates/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 28,  24 => 27,  102 => 104,  96 => 101,  93 => 100,  90 => 99,  83 => 96,  80 => 95,  76 => 93,  72 => 91,  66 => 88,  62 => 87,  59 => 86,  56 => 85,  50 => 83,  42 => 80,  37 => 79,  34 => 78,  30 => 30,  19 => 26,);
    }
}
