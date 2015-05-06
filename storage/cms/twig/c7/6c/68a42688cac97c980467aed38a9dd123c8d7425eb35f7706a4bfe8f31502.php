<?php

/* /Applications/XAMPP/xamppfiles/htdocs/politi.co/plugins/husaymedia/pulitico/components/politician/add_testimonial.htm */
class __TwigTemplate_c76c68a42688cac97c980467aed38a9dd123c8d7425eb35f7706a4bfe8f31502 extends Twig_Template
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
\t\t\t\t\t\t\t\t\t\t\t<h5>Add Your Testimonial</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t<form
                   method=\"post\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"form-add-testi\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"note\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-request=\"onAddTestimonial\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-request-update=\"'";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::edit_testimonial': '#my_testimonial'\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-request-success=\"\$('recalculate').click()\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-request-loading=\"#addTesti_loading\"
\t\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"q-row\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"q-col-1-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vote\" value=\"1\" /><span class=\"large-text rating\"> Mahusay <i class=\"fa fa-thumbs-up\"></i> </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"q-col-1-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vote\" value=\"0\" /><span class=\"large-text rating negative-rating\"> Pangkaraniwan <i class=\"fa fa-thumbs-down\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"q-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"q-col-1-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"testimonial\">What can you say about this politician?</label><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"testimonial\" id=\"testimonial\" class=\"full-width\" rows=\"4\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"q-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"q-col-1-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"button button-submit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-quote-left\"></i> Add Your Testimonial
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"addTesti_loading\" style=\"display: none;\"><i class=\"fa fa-circle-o-notch fa-spin\"></i> please wait...</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</form>";
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/politi.co/plugins/husaymedia/pulitico/components/politician/add_testimonial.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  19 => 1,);
    }
}
