<?php

/* /Applications/XAMPP/xamppfiles/htdocs/politi.co/plugins/husaymedia/pulitico/components/directory/search_result.htm */
class __TwigTemplate_6da3030d066aa68e1d5ba7d06b3fa4837509133bcfe62b306f93d3975dc3e404 extends Twig_Template
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
        echo " <h3>Search Results</h3>
 ";
        // line 2
        if (($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "count", array()) <= 0)) {
            // line 3
            echo "  <p>No politicians were found to match your search criteria</p>
 ";
        } else {
            // line 5
            echo "  <table>
   <tr>
    <th>Name</th>
    <th>Title</th>
    <th>Location</th>
    <th>Status</th>
   </tr>

   ";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["politician"]) {
                // line 14
                echo "
    <tr>
     <td class=\"small-text\"><strong><a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "politician_profile_page", array(), "method"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["politician"], "getLink", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["politician"], "getFullName", array()), "html", null, true);
                echo "</strong></a></td>
     <td><a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "politician_profile_page", array(), "method"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["politician"], "getLink", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["politician"], "positions", array()), 0, array(), "array"), "title", array()), "name", array()), "html", null, true);
                echo "</a></td>
     <td><a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "politician_profile_page", array(), "method"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["politician"], "getLink", array()), "html", null, true);
                echo "\">
      ";
                // line 19
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["politician"], "positions", array()), 0, array(), "array"), "location", array()), "name", array()) == "Anywhere")) {
                    // line 20
                    echo "      -
      ";
                } else {
                    // line 22
                    echo "       ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["politician"], "positions", array()), 0, array(), "array"), "location", array()), "name", array()), "html", null, true);
                    echo "
      ";
                }
                // line 24
                echo "     </a></td>
     <td><a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "politician_profile_page", array(), "method"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["politician"], "getLink", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["politician"], "positions", array()), 0, array(), "array"), "status", array()), "html", null, true);
                echo "</a></td>
    </tr>

   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['politician'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "
  </table>

   ";
            // line 32
            echo $this->getAttribute((isset($context["results"]) ? $context["results"] : null), "render", array(), "method");
            echo "

 ";
        }
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/politi.co/plugins/husaymedia/pulitico/components/directory/search_result.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 32,  97 => 29,  83 => 25,  80 => 24,  74 => 22,  70 => 20,  68 => 19,  62 => 18,  54 => 17,  46 => 16,  42 => 14,  38 => 13,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
