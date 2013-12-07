<?php

/* core/modules/datetime/templates/datetime-wrapper.html.twig */
class __TwigTemplate_97ef639db984afc7991809496c446d51 extends Drupal\Core\Template\TwigTemplate
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
        // line 18
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        if ($_title_) {
            // line 19
            echo "  <h4 class=\"label\">
    ";
            // line 20
            echo t("!title!required", array("!title" => $this->getContext($context, "title"), "!required" => $this->getContext($context, "required"), ));
            // line 21
            echo "  </h4>
";
        }
        // line 23
        echo twig_render_var($this->getContextReference($context, "content"));
        echo "
";
        // line 24
        if (isset($context["description"])) { $_description_ = $context["description"]; } else { $_description_ = null; }
        if ($_description_) {
            // line 25
            echo "  <div class=\"description\">";
            echo twig_render_var($this->getContextReference($context, "description"));
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/datetime/templates/datetime-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 25,  35 => 24,  31 => 23,  25 => 20,  22 => 19,  24 => 16,  39 => 28,  33 => 25,  27 => 21,  23 => 20,  21 => 19,  19 => 18,);
    }
}
