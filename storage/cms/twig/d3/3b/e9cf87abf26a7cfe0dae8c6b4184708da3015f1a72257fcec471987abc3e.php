<?php

/* /Applications/XAMPP/xamppfiles/htdocs/politi.co/themes/bunny/layouts/default.htm */
class __TwigTemplate_d33be9cf87abf26a7cfe0dae8c6b4184708da3015f1a72257fcec471987abc3e extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"HandheldFriendly\" content=\"True\">
\t\t<meta name=\"MobileOptimized\" content=\"320\">
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">

  <title>Politi.co - ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
  <meta name=\"description\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
  <meta name=\"title\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
  <meta name=\"author\" content=\"The Filipino People\">

\t\t<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,700,800' rel='stylesheet' type='text/css'>
\t\t<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,700,300' rel='stylesheet' type='text/css'>
\t\t<link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\">

  ";
        // line 19
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 20
        echo "  <link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/normalize.css", 1 => "assets/css/grid.css", 2 => "assets/css/animate.min.css", 3 => "assets/js/plugins/owl-carousel/owl.carousel.css", 4 => "assets/js/plugins/owl-carousel/owl.theme.css", 5 => "assets/js/plugins/owl-carousel/owl.transitions.css", 6 => "assets/js/plugins/easy-responsive-tabs/easyresponsivetabs.css", 7 => "assets/js/plugins/magnific-popup/jquery.magnific-popup.css", 8 => "assets/js/plugins/toast/jquery.toast.min.css", 9 => "assets/css/style.css"));
        // line 31
        echo "\" rel=\"stylesheet\">

\t\t<script type=\"text/javascript\" src=\"";
        // line 33
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/modernizr.min.js");
        echo "\"></script>
\t\t<!--[if lt IE 9]>
  <script src=\"";
        // line 35
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/js/html5.min.js", 1 => "assets/js/respond.js"));
        // line 38
        echo "\"></script>
\t\t<![endif]-->
\t</head>

\t<body class=\"home\">

\t\t<!-- Start: Header -->
\t\t<header id=\"header\">
\t\t\t<div class=\"q-container\">
\t\t\t\t<div id=\"logo\">
\t\t\t\t\t<a href=\"";
        // line 48
        echo $this->env->getExtension('System')->appFilter("home");
        echo "\"><img src=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logo.png");
        echo "\" alt=\"\"></a>
\t\t\t\t</div>

\t\t\t\t<nav id=\"nav\">
\t\t\t\t\t<a href=\"#\" id=\"nav-toggle\" title=\"Navigation\"><i class=\"fa fa-bars\"></i></a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"";
        // line 54
        echo $this->env->getExtension('System')->appFilter("home");
        echo "\">Home <span>Welcome</span></a></li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 56
        echo $this->env->getExtension('System')->appFilter("about");
        echo "\">About <span>Mission, Vision, Results</span></a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"page-sidebar.html\">Nathan's Story</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"page-wide.html\">Nathan's Vision</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"page-wide.html#demo-tabs-hor1\">Better Jobs</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"page-wide.html#demo-tabs-hor2\">Better Health</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"page-wide.html#demo-tabs-hor3\">Better Education</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"page-features.html\">Template features</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"page-roadmap.html\">Roadmap <span>Campaign Events</span></a></li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 71
        echo $this->env->getExtension('System')->appFilter("news");
        echo "\">News <span>Puliti.co Editor's Notes</span></a>
\t\t\t\t\t\t\t";
        // line 87
        echo "\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 88
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 89
            echo "\t\t\t\t\t\t<li class=\"nav-special nav-reverse\"><a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Logout <span>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
            echo "</span></a></li>
\t\t\t\t\t\t";
        } else {
            // line 91
            echo "\t\t\t    <li class=\"nav-special nav-reverse\">
\t\t\t\t\t\t\t<a href=\"";
            // line 92
            echo $this->env->getExtension('System')->appFilter("sign-up");
            echo "\">Get Involved <span>Rate &amp; Review</span></a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 94
            echo $this->env->getExtension('System')->appFilter("sign-up");
            echo "\">Register</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 95
            echo $this->env->getExtension('System')->appFilter("sign-up");
            echo "\">Sign-in</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 99
        echo "
\t\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t</div>
\t\t</header>
\t\t<!-- End: Header -->

  <!-- Start: Content -->
  ";
        // line 107
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 108
        echo "  <!-- End: Content -->

\t\t<!-- Start: Footer -->
\t\t<footer id=\"footer\">
   ";
        // line 112
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 113
        echo "  </footer>
\t\t<!-- End: Footer -->

  <script src=\"";
        // line 116
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/js/jquery-1.11.1.min.js", 1 => "assets/js/jquery-migrate-1.2.1.min.js", 2 => "assets/js/jquery-ui.min.js", 3 => "assets/js/less-1.7.3.min.js", 4 => "assets/js/plugins/jquery.hoverintent.min.js", 5 => "assets/js/plugins/jquery.superfish.min.js", 6 => "assets/js/plugins/owl-carousel/owl.carousel.min.js", 7 => "assets/js/plugins/easy-responsive-tabs/easyresponsivetabs.js", 8 => "assets/js/plugins/magnific-popup/jquery.magnific-popup.min.js", 9 => "assets/js/plugins/jquery.mixitup.min.js", 10 => "assets/js/plugins/jquery.fitvids.js", 11 => "assets/js/plugins/jquery.mousewheel.min.js", 12 => "assets/js/plugins/jquery.simplr.smoothscroll.min.js", 13 => "assets/js/plugins/wow.min.js", 14 => "assets/js/plugins/toast/jquery.toast.min.js", 15 => "assets/js/custom.electoral.js"));
        // line 133
        echo "\"></script>
\t\t";
        // line 134
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 135
        echo "\t\t";
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 136
        echo "\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/politi.co/themes/bunny/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 136,  180 => 135,  177 => 134,  174 => 133,  172 => 116,  167 => 113,  163 => 112,  157 => 108,  155 => 107,  145 => 99,  138 => 95,  134 => 94,  129 => 92,  126 => 91,  120 => 89,  118 => 88,  115 => 87,  111 => 71,  93 => 56,  88 => 54,  77 => 48,  65 => 38,  63 => 35,  58 => 33,  54 => 31,  51 => 20,  48 => 19,  38 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }
}
