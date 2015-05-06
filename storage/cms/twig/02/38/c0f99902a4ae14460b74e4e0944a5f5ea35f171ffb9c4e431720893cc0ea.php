<?php

/* /Applications/XAMPP/xamppfiles/htdocs/politi.co/themes/bunny/pages/politician-directory.htm */
class __TwigTemplate_0238c0f99902a4ae14460b74e4e0944a5f5ea35f171ffb9c4e431720893cc0ea extends Twig_Template
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
  ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 2
        foreach (Flash::all() as $type => $message) {
            $context["type"] = $type;            $context["message"] = $message;            // line 3
            echo "   <div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</div>
  ";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 5
        echo "  <div class=\"page-header wow animated fadeInDown\" data-wow-duration=\"0.5s\">
   <div class=\"q-container\">
    <div class=\"q-row\">
     <div class=\"q-col-1-1\"><h1 class=\"section-headline\"><span>Politician</span> Directory</h1></div>
    </div>
   </div>
  </div>
  <div class=\"page-body\">
   <div class=\"q-container\">
    <div class=\"q-row\">
     <div class=\"content q-col-1-1\">

        ";
        // line 17
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("directory"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 18
        echo "
     </div>
    </div>
   </div>
  </div>
 </main>";
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/politi.co/themes/bunny/pages/politician-directory.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 18,  46 => 17,  32 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
