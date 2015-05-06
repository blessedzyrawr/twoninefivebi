<?php

/* /Applications/XAMPP/xamppfiles/htdocs/politi.co/plugins/husaymedia/pulitico/components/directory/filter_result.htm */
class __TwigTemplate_efaf7cfdde143082361e127b7d40609f6063bba0f0e45db5f8b8ba146533d435 extends Twig_Template
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
        echo " <h3>
  ";
        // line 2
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 3
            echo "   ";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "
  ";
        } else {
            // line 5
            echo "   Search Results
  ";
        }
        // line 7
        echo " </h3>
 ";
        // line 8
        if ((twig_length_filter($this->env, (isset($context["filterResults"]) ? $context["filterResults"] : null)) <= 0)) {
            // line 9
            echo "  <p>No politicians were found to match your search criteria</p>
 ";
        } else {
            // line 11
            echo "  <table>
   <tr>
    <th>Name</th>
    <th>Title</th>
    <th>Location</th>
    <th>Status</th>
   </tr>

   ";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["filterResults"]) ? $context["filterResults"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["politician"]) {
                // line 20
                echo "
    <tr>
     <td class=\"small-text\"><strong><a href=\"";
                // line 22
                echo $this->env->getExtension('System')->appFilter($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "profilePage", array()));
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["politician"], "slug", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["politician"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["politician"], "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["politician"], "surname", array()), "html", null, true);
                echo "</strong></a></td>
     <td><a href=\"";
                // line 23
                echo $this->env->getExtension('System')->appFilter($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "profilePage", array()));
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["politician"], "slug", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["politician"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["politician"], "title", array()), "html", null, true);
                echo "</a></td>
     <td><a href=\"";
                // line 24
                echo $this->env->getExtension('System')->appFilter($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "profilePage", array()));
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["politician"], "slug", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["politician"], "id", array()), "html", null, true);
                echo "\">
      ";
                // line 25
                if (($this->getAttribute($context["politician"], "location", array()) == "Anywhere")) {
                    // line 26
                    echo "      -
      ";
                } else {
                    // line 28
                    echo "       ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["politician"], "location", array()), "html", null, true);
                    echo "
      ";
                }
                // line 30
                echo "     </a></td>
     <td><a href=\"";
                // line 31
                echo $this->env->getExtension('System')->appFilter($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "profilePage", array()));
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["politician"], "slug", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["politician"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["politician"], "status", array()), "html", null, true);
                echo "</a></td>
    </tr>

   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['politician'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "
  </table>


 ";
        }
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/politi.co/plugins/husaymedia/pulitico/components/directory/filter_result.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 35,  106 => 31,  103 => 30,  97 => 28,  93 => 26,  91 => 25,  83 => 24,  73 => 23,  61 => 22,  57 => 20,  53 => 19,  43 => 11,  39 => 9,  37 => 8,  34 => 7,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
