<?php

/* /Applications/XAMPP/xamppfiles/htdocs/politi.co/plugins/husaymedia/pulitico/components/politician/edit_testimonial.htm */
class __TwigTemplate_06621fee4e58648621b71cfb143180783508989b9ff864b5dae1514ff911467d extends Twig_Template
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
        echo "
\t\t\t\t\t\t\t\t\t\t\t<h5>Your Rating</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t<form
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmethod=\"post\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"form-edit-testi\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"note\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-request=\"onEditTestimonial\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-request-success=\"\$('recalculate').click()\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-request-update=\"'";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::edit_testimonial': '#my_testimonial'\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-request-loading=\"#editTesti_loading\"
\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"q-row\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"q-col-1-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vote\" value=\"up\" ";
        // line 15
        if (($this->getAttribute((isset($context["testimonial"]) ? $context["testimonial"] : null), "rating", array()) == 1)) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"large-text rating\"> Mahusay <i class=\"fa fa-thumbs-up\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"q-col-1-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vote\" value=\"down\" ";
        // line 19
        if (($this->getAttribute((isset($context["testimonial"]) ? $context["testimonial"] : null), "rating", array()) == 0)) {
            echo "checked=\"checked\"";
        }
        echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"large-text rating negative-rating\"> Pangkaraniwan <i class=\"fa fa-thumbs-down\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"q-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"q-col-1-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"testimonial\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 28
        if (($this->getAttribute((isset($context["testimonial"]) ? $context["testimonial"] : null), "comment", array()) != "")) {
            // line 29
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tYour current opinion about this politician:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 31
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tWhat can you say about this politician:
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 33
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"testimonial\" id=\"testimonial\" class=\"full-width\" rows=\"4\">";
        // line 34
        echo $this->getAttribute((isset($context["testimonial"]) ? $context["testimonial"] : null), "comment", array());
        echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"q-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"q-col-1-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"button button-submit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-quote-left\"></i> Edit Your Testimonial
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"editTesti_loading\" style=\"display: none;\"><i class=\"fa fa-circle-o-notch fa-spin\"></i> please wait...</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
";
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/politi.co/plugins/husaymedia/pulitico/components/politician/edit_testimonial.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 34,  71 => 33,  67 => 31,  63 => 29,  61 => 28,  47 => 19,  38 => 15,  29 => 9,  19 => 1,);
    }
}
