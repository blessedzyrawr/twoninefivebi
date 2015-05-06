<?php

/* /Applications/XAMPP/xamppfiles/htdocs/politi.co/themes/bunny/partials/account/register.htm */
class __TwigTemplate_1cbdb66c9edbfc2d09ccefa635a1ab12271ad4c4d855414b9a949c7bc865fdfb extends Twig_Template
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
        echo "<div class=\"widget box box-join\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"box-headline\"><a href=\"#\">Already Registered?</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Sign-in here:</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form data-request=\"onSignin\" method=\"post\" data-request-loading=\"#signin_loading\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"login\" type=\"email\" class=\"form-control\" id=\"userSigninLogin\" placeholder=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["loginAttributeLabel"]) ? $context["loginAttributeLabel"] : null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"password\" type=\"password\" class=\"form-control\" id=\"userSigninPassword\" placeholder=\"Password\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\">Sign-in</button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p><span id=\"signin_loading\" style=\"display: none;\"><i class=\"fa fa-circle-o-notch fa-spin\"></i> please wait...</span></p>
\t\t\t\t\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/politi.co/themes/bunny/partials/account/register.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }
}
