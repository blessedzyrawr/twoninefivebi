<?php

/* /Applications/XAMPP/xamppfiles/htdocs/politi.co/themes/bunny/pages/signin.htm */
class __TwigTemplate_240ce2ce4b0f147e941790e63000a829326734fb2fd6768425fc951e1387d06e extends Twig_Template
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
        echo "<main id=\"main\">
\t\t\t";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 2
        foreach (Flash::all() as $type => $message) {
            $context["type"] = $type;            $context["message"] = $message;            // line 3
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</div>
\t\t\t";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 5
        echo "\t\t\t<div class=\"page-header wow animated fadeInDown\" data-wow-duration=\"0.5s\">
\t\t\t\t<div class=\"q-container\">
\t\t\t\t\t<div class=\"q-row\">
\t\t\t\t\t\t<div class=\"q-col-1-1\"><h1 class=\"section-headline\"><span>Get Involved</span> Sign-up</h1></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"page-body\">
\t\t\t\t<div class=\"q-container\">
\t\t\t\t\t<div class=\"q-row\">
\t\t\t\t\t\t<div class=\"content q-col-2-3 wow animated fadeIn\" data-wow-delay=\"0.2s\" data-wow-duration=\"0.5s\">
\t\t\t\t\t\t\t<p class=\"big-text\"><em>When <strong>our future is at stake</strong> we have a responsibility to do our best to influence the evolution. Philippines needs you! The World needs you!</em></p>
\t\t\t\t\t";
        // line 17
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 18
            echo "
\t\t\t\t\t<p>Hi there <strong>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "surname", array()), "html", null, true);
            echo "</strong>, <strong>looks like</strong> you're <strong>lost</strong>. You are already signed-in.</p>

\t\t\t\t\t";
        } else {
            // line 22
            echo "
\t\t\t\t\t<form data-request=\"onRegister\" data-request-loading=\"#signup_loading\"
 class=\"note\"  method=\"post\" >
\t\t\t\t\t\t\t\t<p>By signing up below you're taking real steps toward giving yourself, your family and friends and everyone else access to <strong>better jobs</strong>, <strong>better health</strong> and <strong>better education</strong>!</p>

\t\t\t\t\t\t\t\t<h3>Your info:</h3>
\t\t\t\t\t\t\t\t<div class=\"q-row\">
\t\t\t\t\t\t\t\t\t<div class=\"q-col-1-2\">
\t\t\t\t\t\t\t\t\t\t<label for=\"registerFirst\">First Name <span class=\"required\">*</span></label><br>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" id=\"registerFirst\" class=\"full-width\" value=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"q-col-1-2\">
\t\t\t\t\t\t\t\t\t\t<label for=\"registerLast\">Last Name <span class=\"required\">*</span></label><br>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"surname\" id=\"registerLast\" class=\"full-width\" value=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"q-row\">
\t\t\t\t\t\t\t\t\t<div class=\"q-col-1-1\">
\t\t\t\t\t\t\t\t\t\t<label for=\"registerEmail\">What is your Email? <span class=\"required\">*</span></label><br>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" id=\"registerEmail\" class=\"full-width\" value=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"q-row\">
\t\t\t\t\t\t\t\t\t<div class=\"q-col-1-2\">
\t\t\t\t\t\t\t\t\t\t<label for=\"registerPassword\">Desired Password <span class=\"required\">*</span></label><br>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"registerPassword\" class=\"full-width\" value=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"q-col-1-2\">
\t\t\t\t\t\t\t\t\t\t<label for=\"registerPassword2\">Confirm Password <span class=\"required\">*</span></label><br>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password_confirmation\" id=\"registerPassword2\" class=\"full-width\" value=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"q-row\" id=\"response\">
            ";
            // line 55
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("signup_response"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 56
            echo "        </div>
\t\t\t\t\t\t\t\t<div class=\"q-row\">
\t\t\t\t\t\t\t\t\t<div class=\"q-col-1-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"button button-submit\" data-load-indicator=\"\">Sign-up</button>
\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"signup_loading\" style=\"display: none;\"><i class=\"fa fa-circle-o-notch fa-spin\"></i> please wait...</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>

\t\t\t\t\t</div>

\t\t\t\t\t<aside id=\"sidebar\" class=\"q-col-1-3 wow animated fadeIn\" data-wow-delay=\"0.4s\" data-wow-duration=\"0.5s\">

\t\t\t\t\t\t";
            // line 69
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('CMS')->componentFunction("account"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 70
            echo "
\t\t\t\t\t</aside>

\t\t\t\t\t";
        }
        // line 74
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t</main>";
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/politi.co/themes/bunny/pages/signin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 74,  117 => 70,  113 => 69,  98 => 56,  94 => 55,  59 => 22,  51 => 19,  48 => 18,  46 => 17,  32 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
