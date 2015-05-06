<?php

/* /Applications/XAMPP/xamppfiles/htdocs/politi.co/plugins/husaymedia/pulitico/components/politician/recalculate_rating.htm */
class __TwigTemplate_2d77fd7c1f1229e30d53ba5a405620b52a54d823011a0e73a5b23941e86a91d6 extends Twig_Template
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
        // line 1
        if (((isset($context["politician"]) ? $context["politician"] : null) != null)) {
            // line 2
            echo "<p class=\"large-text rating ";
            if (($this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "getRating", array()) < 0)) {
                echo "negative-rating";
            }
            echo "\"><i class=\"fa fa-thumbs-down\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "getRating", array()), "html", null, true);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/politi.co/plugins/husaymedia/pulitico/components/politician/recalculate_rating.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
