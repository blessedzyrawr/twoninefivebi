<?php

/* /Applications/XAMPP/xamppfiles/htdocs/politi.co/themes/bunny/partials/signup_response.htm */
class __TwigTemplate_855385b722176f90fa3faea78858124f24dedde665fe131522bc0c6aea7db131 extends Twig_Template
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
        if ((isset($context["result"]) ? $context["result"] : null)) {
            // line 2
            echo "    <span class=\"lead\">
        The result is <span class=\"label label-success\">";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["result"]) ? $context["result"] : null), "html", null, true);
            echo "</span>
    </span>
";
        }
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/politi.co/themes/bunny/partials/signup_response.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }
}
