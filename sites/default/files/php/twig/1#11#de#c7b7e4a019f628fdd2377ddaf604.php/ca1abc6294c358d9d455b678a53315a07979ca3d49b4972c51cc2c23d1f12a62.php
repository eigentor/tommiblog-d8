<?php

/* core/modules/system/templates/dropbutton-wrapper.html.twig */
class __TwigTemplate_11dec7b7e4a019f628fdd2377ddaf604 extends Drupal\Core\Template\TwigTemplate
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
        if (isset($context["children"])) { $_children_ = $context["children"]; } else { $_children_ = null; }
        if ($_children_) {
            // line 16
            echo "  ";
            ob_start();
            // line 17
            echo "    <div class=\"dropbutton-wrapper\">
      <div class=\"dropbutton-widget\">
        ";
            // line 19
            echo twig_render_var($this->getContextReference($context, "children"));
            echo "
      </div>
    </div>
  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/dropbutton-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 19,  38 => 25,  35 => 24,  31 => 23,  25 => 17,  22 => 16,  24 => 16,  39 => 28,  33 => 25,  27 => 21,  23 => 20,  21 => 19,  19 => 15,);
    }
}
