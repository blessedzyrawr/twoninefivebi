<?php

/* /Applications/XAMPP/xamppfiles/htdocs/politi.co/themes/bunny/partials/directory/default.htm */
class __TwigTemplate_0e15030d69be8174407430842b8888e702f18e1f27dbb292c11b241e72bf641c extends Twig_Template
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
        echo "<div class=\"q-row\">
      <div class=\"q-col-1-1\" id=\"search_results_placeholder\">
        ";
        // line 3
        if (((isset($context["filterResults"]) ? $context["filterResults"] : null) != null)) {
            // line 4
            echo "          ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['title'] = (isset($context["title"]) ? $context["title"] : null)            ;
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::filter_result")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 5
            echo "        ";
        }
        // line 6
        echo "      </div>
    </div>

    <p>
      <br/>
    </p>
     <div class=\"note\">

       <div class=\"q-row\">

        <div class=\"q-col-1-3\">
         <form
               method=\"post\"
               data-request=\"onSearch\"
               data-request-success=\"window.scrollToTop()\"
               data-request-update=\"'";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::filter_result': '#search_results_placeholder'\" >
          <h3>Hanapin ang pulitiko sa pangalan:</h3>
          <p><input type=\"text\" placeholder=\"Juan dela Cruz\" name=\"politicianName\" class=\"full-width\"></p>
          <p>

              <button type=\"submit\" class=\"button button-submit\">Search</button>
          </p>

         </form>
        </div>

        <div class=\"q-col-2-3\">
         <form data-request=\"onFilter\" class=\"blog-post\" method=\"post\" data-request-update=\"'";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::search_result': '#search_results_placeholder'\" >
          <div class=\"q-row\">
           <div class=\"q-col-1-2\">
            <h3>Display All Puliti.co by Title:</h3>

                <ul id=\"filterBranch\">
                  ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topLevelTitles"]) ? $context["topLevelTitles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["branch"]) {
            // line 40
            echo "                    <li>
                      <a
                         href=\"";
            // line 42
            echo call_user_func_array($this->env->getFunction('url_current')->getCallable(), array("current"));
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "slug", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "id", array()), "html", null, true);
            echo "\"
                         data-request-data=\"filterSlug:'";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "slug", array()), "html", null, true);
            echo "',filterId:'";
            echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "id", array()), "html", null, true);
            echo "',type:'title'\"
                         data-request=\"onFilter\"
                         data-request-success=\"window.branchFilters.collapseAll();window.scrollToTop()\"
                         data-request-update=\"'";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
            echo "::filter_result': '#search_results_placeholder'\" >
                          ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["branch"], "name", array()), "html", null, true);
            echo "
                      </a>
                      ";
            // line 49
            if (($this->getAttribute($this->getAttribute($context["branch"], "children", array(), "method"), "count", array()) > 0)) {
                // line 50
                echo "
                        <ul>
                        ";
                // line 52
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["branch"], "children", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 53
                    echo "                          <li>
                            <a
                               href=\"";
                    // line 55
                    echo call_user_func_array($this->env->getFunction('url_current')->getCallable(), array("current"));
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "slug", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "id", array()), "html", null, true);
                    echo "\"
                               data-request-data=\"filterSlug:'";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "slug", array()), "html", null, true);
                    echo "',filterId:'";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "id", array()), "html", null, true);
                    echo "',type:'title'\"
                               data-request=\"onFilter\"
                               data-request-success=\"window.branchFilters.collapseAll();window.scrollToTop()\"
                               data-request-update=\"'";
                    // line 59
                    echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
                    echo "::filter_result': '#search_results_placeholder'\" >
                               - ";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "name", array()), "html", null, true);
                    echo "
                            </a>
                          </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "                        </ul>
                      ";
            }
            // line 66
            echo "
                    </li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['branch'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                </ul>



           </div>
           <div class=\"q-col-1-2\">
            <h3>Filter by Location:</h3>
            <ul id=\"filterRegion\">
                  ";
        // line 77
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topLevelLocations"]) ? $context["topLevelLocations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["regions"]) {
            // line 78
            echo "                    <li>
                      <a
                         href=\"";
            // line 80
            echo call_user_func_array($this->env->getFunction('url_current')->getCallable(), array("current"));
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["regions"], "slug", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["regions"], "id", array()), "html", null, true);
            echo "\"
                         data-request-data=\"filterSlug:'";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["regions"], "slug", array()), "html", null, true);
            echo "',filterId:'";
            echo twig_escape_filter($this->env, $this->getAttribute($context["regions"], "id", array()), "html", null, true);
            echo "',type:'region'\"
                         data-request=\"onFilter\"
                         data-request-success=\"window.regionFilters.collapseAll();window.scrollToTop()\"
                         data-request-update=\"'";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
            echo "::filter_result': '#search_results_placeholder'\" >
                          ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["regions"], "name", array()), "html", null, true);
            echo "
                      </a>
                      ";
            // line 87
            if (($this->getAttribute($this->getAttribute($context["regions"], "children", array(), "method"), "count", array()) > 0)) {
                // line 88
                echo "
                        <ul>
                        ";
                // line 90
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["regions"], "children", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["provinces"]) {
                    // line 91
                    echo "                          <li>
                            <a
                               href=\"";
                    // line 93
                    echo call_user_func_array($this->env->getFunction('url_current')->getCallable(), array("current"));
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["provinces"], "slug", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["provinces"], "id", array()), "html", null, true);
                    echo "\"
                               data-request-data=\"filterSlug:'";
                    // line 94
                    echo twig_escape_filter($this->env, $this->getAttribute($context["provinces"], "slug", array()), "html", null, true);
                    echo "',filterId:'";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["provinces"], "id", array()), "html", null, true);
                    echo "',type:'region'\"
                               data-request=\"onFilter\"
                               data-request-success=\"window.regionFilters.collapseAll();window.scrollToTop()\"
                               data-request-update=\"'";
                    // line 97
                    echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
                    echo "::filter_result': '#search_results_placeholder'\" >
                                ";
                    // line 98
                    echo twig_escape_filter($this->env, $this->getAttribute($context["provinces"], "name", array()), "html", null, true);
                    echo "
                            </a>
                              ";
                    // line 100
                    if (($this->getAttribute($this->getAttribute($context["provinces"], "children", array(), "method"), "count", array()) > 0)) {
                        // line 101
                        echo "
                                <ul>
                                ";
                        // line 103
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["provinces"], "children", array(), "method"));
                        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
                            // line 104
                            echo "                                  <li>
                                    <a
                                       href=\"";
                            // line 106
                            echo call_user_func_array($this->env->getFunction('url_current')->getCallable(), array("current"));
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "slug", array()), "html", null, true);
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "id", array()), "html", null, true);
                            echo "\"
                                       data-request-data=\"filterSlug:'";
                            // line 107
                            echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "slug", array()), "html", null, true);
                            echo "',filterId:'";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "id", array()), "html", null, true);
                            echo "',type:'region'\"
                                       data-request=\"onFilter\"
                                       data-request-success=\"window.regionFilters.collapseAll();window.scrollToTop()\"
                                       data-request-update=\"'";
                            // line 110
                            echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
                            echo "::filter_result': '#search_results_placeholder'\" >
                                        ";
                            // line 111
                            echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "name", array()), "html", null, true);
                            echo "
                                    </a>
                                  </li>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 115
                        echo "                                </ul>
                              ";
                    }
                    // line 117
                    echo "                          </li>

                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provinces'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 120
                echo "                        </ul>
                      ";
            }
            // line 122
            echo "
                    </li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['regions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                </ul>
           </div>
          </div>
         </form>
        </div>

       </div>
     </div>";
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/politi.co/themes/bunny/partials/directory/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 125,  306 => 122,  302 => 120,  294 => 117,  290 => 115,  280 => 111,  276 => 110,  268 => 107,  260 => 106,  256 => 104,  252 => 103,  248 => 101,  246 => 100,  241 => 98,  237 => 97,  229 => 94,  221 => 93,  217 => 91,  213 => 90,  209 => 88,  207 => 87,  202 => 85,  198 => 84,  190 => 81,  182 => 80,  178 => 78,  174 => 77,  164 => 69,  156 => 66,  152 => 64,  142 => 60,  138 => 59,  130 => 56,  122 => 55,  118 => 53,  114 => 52,  110 => 50,  108 => 49,  103 => 47,  99 => 46,  91 => 43,  83 => 42,  79 => 40,  75 => 39,  66 => 33,  51 => 21,  34 => 6,  31 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
