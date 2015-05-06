<?php

/* /Applications/XAMPP/xamppfiles/htdocs/politi.co/themes/bunny/partials/account/signin.htm */
class __TwigTemplate_18b9ac8bc379b8de1211103d03e8f0de35305987b53facb4977daa639f739e30 extends Twig_Template
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
        echo "<div class=\"widget box box-alt\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"box-headline\">Sign up on social:</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Register using your social media account</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["social_login_links"]) ? $context["social_login_links"] : null));
        foreach ($context['_seq'] as $context["name"] => $context["link"]) {
            // line 5
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $context["link"], "html", null, true);
            echo "\" class='login ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["name"]), "html", null, true);
            echo " button'><i class=\"fa fa-2 fa-";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["name"]), "html", null, true);
            echo "\"></i>";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"oauth_loading\" style=\"display: none;\"><i class=\"fa fa-circle-o-notch fa-spin\"></i> please wait...</span>
\t\t\t\t\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/politi.co/themes/bunny/partials/account/signin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }
}
