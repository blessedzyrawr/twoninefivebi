<?php

/* /Applications/XAMPP/xamppfiles/htdocs/politi.co/plugins/husaymedia/pulitico/components/politician/default.htm */
class __TwigTemplate_9f2c61e8fb4fa060e7a59b0c277b2e8c7d0b4e9db83192892f8229c2555e6e3f extends Twig_Template
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
        echo "   <div class=\"page-header wow animated fadeInDown\" data-wow-duration=\"0.5s\">
\t\t\t\t<div class=\"q-container\">
\t\t\t\t\t<div class=\"q-row\">
\t\t\t\t\t\t<div class=\"q-col-1-1\">
\t\t\t\t\t\t\t<nav id=\"breadcrumbs\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 7
        echo $this->env->getExtension('System')->appFilter("/politician-directory");
        echo "\">Politician Directory</a></li>
\t\t\t\t\t\t\t\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "crumbs", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
            // line 9
            echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 10
            echo $this->env->getExtension('System')->appFilter("politician-directory");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["crumb"], "slug", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["crumb"], "id", array()), "html", null, true);
            echo "\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["crumb"], "name", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t<h1 class=\"section-headline\"><span>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "positions", array()), 0, array(), "array"), "title", array()), "name", array()), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "getFullName", array()), "html", null, true);
        echo "</h1>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


   <div class=\"page-body\">
\t\t\t\t<div class=\"q-container\">
\t\t\t\t\t<div class=\"q-row\">
\t\t\t\t\t\t<div class=\"content q-col-1-1\">

       <div class=\"q-row\">
\t\t\t\t\t\t\t\t<div class=\"q-col-1-5\">

\t\t\t\t\t\t\t\t\t<h5>Approval Rating</h5>
\t\t\t\t\t\t\t\t\t<div id=\"rating_wrapper\">
\t\t\t\t\t\t\t\t\t";
        // line 36
        if (($this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "getRating", array()) != 0)) {
            // line 37
            echo "\t\t\t\t\t\t\t\t\t\t<p class=\"large-text rating ";
            if (($this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "getRating", array()) < 0)) {
                echo "negative-rating";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 38
            if (($this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "getRating", array()) < 0)) {
                // line 39
                echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-thumbs-down\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 41
                echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-thumbs-up\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 43
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "getRating", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 46
            echo "\t\t\t\t\t\t\t\t\t\t<p>Be the first to rate!</p>
\t\t\t\t\t\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"invisible\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"recalculate\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-request=\"onRecalculateRating\"
               data-request-update=\"'";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::recalculate_rating': '#rating_wrapper'\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t />
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"q-col-4-5\">
\t\t\t\t\t\t\t\t\t<h5>Biography</h5>
\t\t\t\t\t\t\t\t\t<div class=\"q-row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"q-col-4-5\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 61
        if (($this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "biography", array()) != "")) {
            // line 62
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            echo $this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "biography", array());
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 64
            echo "\t\t\t\t\t\t\t\t\t\t\t<p>This politician has no biography yet.</p>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 66
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"q-col-1-5\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 68
        if (($this->getAttribute($this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "profile_images", array()), "count", array()) > 0)) {
            // line 69
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"simple-slider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 70
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "profile_images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 71
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"simple-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-src=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "filename", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "description", array()), "html", null, true);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 80
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-src=\"";
            // line 81
            echo $this->env->getExtension('CMS')->themeFilter("assets/images/candidate-fancy.png");
            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
            // line 82
            echo $this->env->getExtension('CMS')->themeFilter("assets/images/candidate-fancy.png");
            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"placeholder\" />
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 85
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
        // line 91
        if (($this->getAttribute($this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "testimonials", array()), "count", array()) > 0)) {
            // line 92
            echo "       <h2>Testimonials</h2>
       <div id=\"demo-tabs-hor\" class=\"tabs-hor\">
\t\t\t\t\t\t\t\t<ul class=\"resp-tabs-list\">
\t\t\t\t\t\t\t\t\t<li id=\"positive_toggle\">Positive</li>
\t\t\t\t\t\t\t\t\t<li id=\"negative_toggle\">Negative</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"resp-tabs-container\">
\t\t\t\t\t\t\t\t\t<div id=\"positive_testi_container\">
\t\t\t\t\t\t\t\t\t\t";
            // line 100
            if (($this->getAttribute($this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "getPositiveTestimonials", array()), "count", array()) > 0)) {
                // line 101
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "getPositiveTestimonials", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
                    // line 102
                    echo "
            <div class=\"q-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"q-col-1-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                    // line 105
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["testimonial"], "user", array()), "name", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["testimonial"], "user", array()), "surname", array()), "html", null, true);
                    echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-src=\"";
                    // line 107
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["testimonial"], "user", array()), "avatar", array()), "filename", array()), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
                    // line 108
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["testimonial"], "user", array()), "avatar", array()), "path", array()), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"";
                    // line 109
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["testimonial"], "user", array()), "avatar", array()), "description", array()), "html", null, true);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"q-col-4-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>";
                    // line 112
                    echo $this->getAttribute($context["testimonial"], "comment", array());
                    echo "</blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 116
                echo "\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 117
                echo "\t\t\t\t\t\t\t\t\t\t\t<p>(No positive ratings yet)</p>
\t\t\t\t\t\t\t\t\t";
            }
            // line 119
            echo "         </div>

\t\t\t\t\t\t\t\t\t<div id=\"negative_testi_container\">
\t\t\t\t\t\t\t\t\t\t";
            // line 122
            if (($this->getAttribute($this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "getNegativeTestimonials", array()), "count", array()) > 0)) {
                // line 123
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "getNegativeTestimonials", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
                    // line 124
                    echo "
            <div class=\"q-row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"q-col-1-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                    // line 127
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["testimonial"], "user", array()), "name", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["testimonial"], "user", array()), "surname", array()), "html", null, true);
                    echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-src=\"";
                    // line 129
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["testimonial"], "user", array()), "avatar", array()), "filename", array()), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
                    // line 130
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["testimonial"], "user", array()), "avatar", array()), "path", array()), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"";
                    // line 131
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["testimonial"], "user", array()), "avatar", array()), "description", array()), "html", null, true);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"q-col-4-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<blockquote>";
                    // line 134
                    echo $this->getAttribute($context["testimonial"], "comment", array());
                    echo "</blockquote>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 138
                echo "\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 139
                echo "\t\t\t\t\t\t\t\t\t\t\t<p>(No negative ratings yet)</p>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 141
            echo "\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 146
        echo "
\t\t\t\t\t\t\t<div class=\"q-row\" >
\t\t\t\t\t\t\t\t<div class=\"q-col-1-1\" id=\"my_testimonial\">
\t\t\t\t\t\t\t\t\t";
        // line 149
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 150
            echo "
\t\t\t\t\t\t\t\t\t\t";
            // line 151
            if ($this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "getUserTestimonial", array())) {
                // line 152
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['testimonial'] = $this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "getUserTestimonial", array())                ;
                echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::edit_testimonial")                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 153
                echo "\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 154
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::add_testimonial")                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 155
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 156
            echo "
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 158
            echo "\t\t\t\t\t\t\t\t\t\t<p>You must be <a href=\"";
            echo $this->env->getExtension('System')->appFilter("sign-up");
            echo "\">logged in</a> to add or edit ratings to our puliti.cos.<a href=\"";
            echo $this->env->getExtension('System')->appFilter("sign-up");
            echo "\">Click here to go to login or register</a></p>
\t\t\t\t\t\t\t\t\t";
        }
        // line 160
        echo "\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
        // line 162
        echo $this->env->getExtension('debug')->runDump($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "getUserTestimonial", array()), "comment", array()));
        echo "
\t\t\t\t\t\t\t\t";
        // line 163
        echo $this->env->getExtension('debug')->runDump($this->env, $context, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "getPositiveTestimonials", array()), "first", array()), "comment", array()));
        echo "
\t\t\t\t\t\t\t\t";
        // line 164
        echo $this->env->getExtension('debug')->runDump($this->env, $context, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["politician"]) ? $context["politician"] : null), "getNegativeTestimonials", array()), "first", array()), "comment", array()));
        echo "
\t\t\t\t\t\t\t</div>


      </div>
    </div>
   </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/politi.co/plugins/husaymedia/pulitico/components/politician/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 164,  376 => 163,  372 => 162,  368 => 160,  360 => 158,  356 => 156,  353 => 155,  348 => 154,  345 => 153,  339 => 152,  337 => 151,  334 => 150,  332 => 149,  327 => 146,  320 => 141,  316 => 139,  313 => 138,  303 => 134,  297 => 131,  293 => 130,  289 => 129,  282 => 127,  277 => 124,  272 => 123,  270 => 122,  265 => 119,  261 => 117,  258 => 116,  248 => 112,  242 => 109,  238 => 108,  234 => 107,  227 => 105,  222 => 102,  217 => 101,  215 => 100,  205 => 92,  203 => 91,  195 => 85,  189 => 82,  185 => 81,  182 => 80,  178 => 78,  169 => 75,  165 => 74,  161 => 73,  157 => 71,  153 => 70,  150 => 69,  148 => 68,  144 => 66,  140 => 64,  134 => 62,  132 => 61,  121 => 53,  114 => 48,  110 => 46,  103 => 43,  99 => 41,  95 => 39,  93 => 38,  86 => 37,  84 => 36,  60 => 17,  56 => 15,  46 => 11,  38 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
