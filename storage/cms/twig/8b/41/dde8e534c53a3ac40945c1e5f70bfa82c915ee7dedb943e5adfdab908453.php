<?php

/* /Applications/XAMPP/xamppfiles/htdocs/politi.co/themes/bunny/pages/home.htm */
class __TwigTemplate_8b41dde8e534c53a3ac40945c1e5f70bfa82c915ee7dedb943e5adfdab908453 extends Twig_Template
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
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("big_banner.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 2
        echo "\t\t<!-- Start: Main -->
\t\t<main id=\"main\">
\t\t\t";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 4
        foreach (Flash::all() as $type => $message) {
            $context["type"] = $type;            $context["message"] = $message;            // line 5
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</div>
\t\t\t";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 7
        echo "\t\t\t<!-- Start: Article Grid -->
\t\t\t<div class=\"section article-grid\">
\t\t\t\t<div class=\"q-container\">
\t\t\t\t\t<div class=\"q-row\">
\t\t\t\t\t\t<article class=\"q-col-1-3 wow animated fadeInUp\" data-wow-offset=\"100\" data-wow-duration=\"1s\">
\t\t\t\t\t\t\t<div class=\"article-headline\"><h3 class=\"sub-headline deco-headline\"><a href=\"#\">Better <span>Jobs</span></a></h3></div>
\t\t\t\t\t\t\t<div class=\"article-summary\">
\t\t\t\t\t\t\t\t<div class=\"article-image\"><a href=\"#\"><img src=\"";
        // line 14
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/pic-placeholder.jpg");
        echo "\" alt=\"Better Jobs\"></a></div>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
\t\t\t\t\t\t\t\t<p><a href=\"#\" class=\"button\">Find Out More</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</article>
\t\t\t\t\t\t<article class=\"q-col-1-3 wow animated fadeInUp\" data-wow-offset=\"200\" data-wow-duration=\"1s\">
\t\t\t\t\t\t\t<div class=\"article-headline\"><h3 class=\"sub-headline deco-headline\"><a href=\"#\">Better <span>Health</span></a></h3></div>
\t\t\t\t\t\t\t<div class=\"article-summary\">
\t\t\t\t\t\t\t\t<div class=\"article-image\"><a href=\"#\"><img src=\"";
        // line 22
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/pic-placeholder-gold.jpg");
        echo "\" alt=\"Better Health\"></a></div>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
\t\t\t\t\t\t\t\t<p><a href=\"#\" class=\"button\">Find Out More</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</article>
\t\t\t\t\t\t<article class=\"q-col-1-3 wow animated fadeInUp\" data-wow-offset=\"300\" data-wow-duration=\"1s\">
\t\t\t\t\t\t\t<div class=\"article-headline\"><h3 class=\"sub-headline deco-headline\"><a href=\"#\">Better <span>Education</span></a></h3></div>
\t\t\t\t\t\t\t<div class=\"article-summary\">
\t\t\t\t\t\t\t\t<div class=\"article-image\"><a href=\"#\"><img src=\"";
        // line 30
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/pic-placeholder-red.jpg");
        echo "\" alt=\"Better Education\"></a></div>
\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
\t\t\t\t\t\t\t\t<p><a href=\"#\" class=\"button\">Find Out More</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</article>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- End: Article Grid -->

\t\t\t<!-- Start: Social Updates -->
\t\t\t<div class=\"section social-updates\">
\t\t\t\t<div class=\"q-container\">
\t\t\t\t\t<div class=\"q-row\">
\t\t\t\t\t\t<div class=\"q-col-1-3\">
\t\t\t\t\t\t\t<h2 class=\"section-headline wow animated fadeInLeft\" data-wow-offset=\"100\" data-wow-duration=\"0.5s\"><span>The Campaign in</span>Social Media</h2>
\t\t\t\t\t\t\t<ul class=\"social-profiles\">
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"social-button social-facebook\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"social-button social-twitter\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"q-col-2-3 wow animated fadeInUp\" data-wow-duration=\"0.5s\" data-wow-offset=\"200\">
\t\t\t\t\t\t\t<div id=\"social-slider\" class=\"simple-slider\">
\t\t\t\t\t\t\t\t<div class=\"simple-slide\">
\t\t\t\t\t\t\t\t\t<div class=\"social-update\">California is the first state to ever reach a trillion dollar economy in gross state product. <a href=\"#\">#USpride</a></div>
\t\t\t\t\t\t\t\t\t<p class=\"social-update-info\"><a href=\"#\">1 day ago</a> on Twitter via <a href=\"#\">@NatForSenate</a></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"simple-slide\">
\t\t\t\t\t\t\t\t\t<div class=\"social-update\">Washington is the second state to ever reach a trillion dollar economy in gross state product. <a href=\"#\">#USpride</a></div>
\t\t\t\t\t\t\t\t\t<p class=\"social-update-info\"><a href=\"#\">1 day ago</a> on Twitter via <a href=\"#\">@NatForSenate</a></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"simple-slide\">
\t\t\t\t\t\t\t\t\t<div class=\"social-update\">Oregon is the third state to ever reach a trillion dollar economy in gross state product. <a href=\"#\">#USpride</a></div>
\t\t\t\t\t\t\t\t\t<p class=\"social-update-info\"><a href=\"#\">1 day ago</a> on Twitter via <a href=\"#\">@NatForSenate</a></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- End: Social Updates -->

\t\t\t<!-- Start: News -->
\t\t\t<div class=\"section section-alt home-news\">
\t\t\t\t<div class=\"q-container\">
\t\t\t\t\t<div class=\"q-row\">
\t\t\t\t\t\t<div class=\"q-col-1-3\">
\t\t\t\t\t\t\t<h2 class=\"section-headline wow animated fadeInLeft\" data-wow-offset=\"100\" data-wow-duration=\"0.5s\"><span>News, Blogs, Roadmap</span>Follow Nathan</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"q-col-1-3 wow animated zoomIn\" data-wow-duration=\"0.5s\" data-wow-offset=\"200\">
\t\t\t\t\t\t\t<h3 class=\"sub-headline\">The <span>Campaign Scoop</span></h3>

\t\t\t\t\t\t\t<div class=\"headline-list\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<h4><a href=\"#\">Duis autem vel eum iriure dolor in hend rerit in vulputate velit esse</a></h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"info\"><i class=\"fa fa-clock-o\"></i> Jul 4th, 2014 in <a href=\"#\">Campaign News</a></div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<h4><a href=\"#\">Nam liber tempor cum soluta nobis elei fend option congue nihil</a></h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"info\"><i class=\"fa fa-clock-o\"></i> Jul 1st, 2014 in <a href=\"#\">Nathan's Blog</a></div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<h4><a href=\"#\">Eodem modo typi, qui nunc nobis videntur parum claritas</a></h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"info\"><i class=\"fa fa-clock-o\"></i> Jun 26th, 2014 in <a href=\"#\">Campaign News</a></div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"q-col-1-3 wow animated zoomIn\" data-wow-duration=\"0.5s\" data-wow-offset=\"200\">
\t\t\t\t\t\t\t<h3 class=\"sub-headline\">Follow the <span>Roadmap</span></h3>

\t\t\t\t\t\t\t<p>Nathan is in constant contact with the Real America, the Real People. <a href=\"#\">View the Roadmap</a></p>
\t\t\t\t\t\t\t<table class=\"light-table events-table\">
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Location</th>
\t\t\t\t\t\t\t\t\t<th class=\"text-right\">Date</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><a href=\"#\"><strong>Herbert Hoover High School</strong></a><br>San Diego, CA</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-right\"><strong>07.07.2014</strong><br>6:30 PM</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><a href=\"#\"><strong>John Marshall High School</strong></a><br>Los Angeles, CA</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-right\"><strong>08.07.2014</strong><br>6:30 PM</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><a href=\"#\"><strong>San Jose High School</strong></a><br>San Jose, CA</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-right\"><strong>10.07.2014</strong><br>7:00 PM</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td><a href=\"#\"><strong>George Washington High School</strong></a><br>San Francisco, CA</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-right\"><strong>11.07.2014</strong><br>8:00 PM</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- End: News -->
\t\t</main>
\t\t<!-- End: Main -->";
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/politi.co/themes/bunny/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 30,  57 => 22,  46 => 14,  37 => 7,  29 => 5,  27 => 4,  23 => 2,  19 => 1,);
    }
}
