<?php

/* WebProfilerBundle:Profiler:results.html.twig */
class __TwigTemplate_31d9ba8407d066ba0667a2b4448b75bb4a64c34d55dc15bbeef7d2ddeaec58af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:results.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_240abf883808c50c1c958aeb3cedc78b66262099915a7facc43821aca7bc0e06 = $this->env->getExtension("native_profiler");
        $__internal_240abf883808c50c1c958aeb3cedc78b66262099915a7facc43821aca7bc0e06->enter($__internal_240abf883808c50c1c958aeb3cedc78b66262099915a7facc43821aca7bc0e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_240abf883808c50c1c958aeb3cedc78b66262099915a7facc43821aca7bc0e06->leave($__internal_240abf883808c50c1c958aeb3cedc78b66262099915a7facc43821aca7bc0e06_prof);

    }

    // line 3
    public function block_summary($context, array $blocks = array())
    {
        $__internal_ba7080fa47ed9ac0de0aaf914684e48c654e0d8c6c562e73325bc2620af2a33b = $this->env->getExtension("native_profiler");
        $__internal_ba7080fa47ed9ac0de0aaf914684e48c654e0d8c6c562e73325bc2620af2a33b->enter($__internal_ba7080fa47ed9ac0de0aaf914684e48c654e0d8c6c562e73325bc2620af2a33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 4
        echo "    <div class=\"status\">
        <div class=\"container\">
            <h2>Profile Search</h2>
        </div>
    </div>
";
        
        $__internal_ba7080fa47ed9ac0de0aaf914684e48c654e0d8c6c562e73325bc2620af2a33b->leave($__internal_ba7080fa47ed9ac0de0aaf914684e48c654e0d8c6c562e73325bc2620af2a33b_prof);

    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c271a36740c9ea185fe999a6e69e1d86177d13a881b23370bd997b8044a6e9bf = $this->env->getExtension("native_profiler");
        $__internal_c271a36740c9ea185fe999a6e69e1d86177d13a881b23370bd997b8044a6e9bf->enter($__internal_c271a36740c9ea185fe999a6e69e1d86177d13a881b23370bd997b8044a6e9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 12
        echo "    <h2>";
        echo twig_escape_filter($this->env, (((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens"))) ? (twig_length_filter($this->env, (isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens")))) : ("No")), "html", null, true);
        echo " results found</h2>

    ";
        // line 14
        if ((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens"))) {
            // line 15
            echo "        <table id=\"search-results\">
            <thead>
                <tr>
                    <th scope=\"col\" class=\"text-center\">Status</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                    <th scope=\"col\">Token</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 28
                echo "                    ";
                $context["css_class"] = ((((($this->getAttribute($context["result"], "status_code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["result"], "status_code", array()), 0)) : (0)) > 399)) ? ("status-error") : (((((($this->getAttribute($context["result"], "status_code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["result"], "status_code", array()), 0)) : (0)) > 299)) ? ("status-warning") : ("status-success"))));
                // line 29
                echo "
                    <tr>
                        <td class=\"text-center\">
                            <span class=\"label ";
                // line 32
                echo twig_escape_filter($this->env, (isset($context["css_class"]) ? $context["css_class"] : $this->getContext($context, "css_class")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["result"], "status_code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["result"], "status_code", array()), "n/a")) : ("n/a")), "html", null, true);
                echo "</span>
                        </td>
                        <td>
                            <span class=\"nowrap\">";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "ip", array()), "html", null, true);
                echo "</span>
                            ";
                // line 36
                if ( !(null === $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "session", array()))) {
                    // line 37
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_search_results", twig_array_merge($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "query", array()), "all", array()), array("ip" => $this->getAttribute($context["result"], "ip", array()), "token" => $this->getAttribute($context["result"], "token", array())))), "html", null, true);
                    echo "\" title=\"Search\">
                                    <span title=\"Search\" class=\"sf-icon sf-search\">";
                    // line 38
                    echo twig_include($this->env, $context, "@WebProfiler/Icon/search.svg");
                    echo "</span>
                                </a>
                            ";
                }
                // line 41
                echo "                        </td>
                        <td>
                            ";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "method", array()), "html", null, true);
                echo "
                            ";
                // line 44
                if ( !(null === $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "session", array()))) {
                    // line 45
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_search_results", twig_array_merge($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "query", array()), "all", array()), array("method" => $this->getAttribute($context["result"], "method", array()), "token" => $this->getAttribute($context["result"], "token", array())))), "html", null, true);
                    echo "\" title=\"Search\">
                                    <span title=\"Search\" class=\"sf-icon sf-search\">";
                    // line 46
                    echo twig_include($this->env, $context, "@WebProfiler/Icon/search.svg");
                    echo "</span>
                                </a>
                            ";
                }
                // line 49
                echo "                        </td>
                        <td class=\"break-long-words\">
                            ";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "url", array()), "html", null, true);
                echo "
                            ";
                // line 52
                if ( !(null === $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "session", array()))) {
                    // line 53
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_search_results", twig_array_merge($this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "query", array()), "all", array()), array("url" => $this->getAttribute($context["result"], "url", array()), "token" => $this->getAttribute($context["result"], "token", array())))), "html", null, true);
                    echo "\" title=\"Search\">
                                    <span title=\"Search\" class=\"sf-icon sf-search\">";
                    // line 54
                    echo twig_include($this->env, $context, "@WebProfiler/Icon/search.svg");
                    echo "</span>
                                </a>
                            ";
                }
                // line 57
                echo "                        </td>
                        <td class=\"text-small\">
                            <span class=\"nowrap\">";
                // line 59
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["result"], "time", array()), "d-M-Y"), "html", null, true);
                echo "</span>
                            <span class=\"nowrap newline\">";
                // line 60
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["result"], "time", array()), "H:i:s"), "html", null, true);
                echo "</span>
                        </td>
                        <td class=\"nowrap\"><a href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($context["result"], "token", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "token", array()), "html", null, true);
                echo "</a></td>
                    </tr>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 68
            echo "        <div class=\"empty\">
            <p>The query returned no result.</p>
        </div>
    ";
        }
        // line 72
        echo "
";
        
        $__internal_c271a36740c9ea185fe999a6e69e1d86177d13a881b23370bd997b8044a6e9bf->leave($__internal_c271a36740c9ea185fe999a6e69e1d86177d13a881b23370bd997b8044a6e9bf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 72,  210 => 68,  205 => 65,  186 => 62,  181 => 60,  177 => 59,  173 => 57,  167 => 54,  162 => 53,  160 => 52,  156 => 51,  152 => 49,  146 => 46,  141 => 45,  139 => 44,  135 => 43,  131 => 41,  125 => 38,  120 => 37,  118 => 36,  114 => 35,  106 => 32,  101 => 29,  98 => 28,  81 => 27,  67 => 15,  65 => 14,  59 => 12,  53 => 11,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block summary %}*/
/*     <div class="status">*/
/*         <div class="container">*/
/*             <h2>Profile Search</h2>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>{{ tokens ? tokens|length : 'No' }} results found</h2>*/
/* */
/*     {% if tokens %}*/
/*         <table id="search-results">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th scope="col" class="text-center">Status</th>*/
/*                     <th scope="col">IP</th>*/
/*                     <th scope="col">Method</th>*/
/*                     <th scope="col">URL</th>*/
/*                     <th scope="col">Time</th>*/
/*                     <th scope="col">Token</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% for result in tokens %}*/
/*                     {% set css_class = result.status_code|default(0) > 399 ? 'status-error' : result.status_code|default(0) > 299 ? 'status-warning' : 'status-success' %}*/
/* */
/*                     <tr>*/
/*                         <td class="text-center">*/
/*                             <span class="label {{ css_class }}">{{ result.status_code|default('n/a') }}</span>*/
/*                         </td>*/
/*                         <td>*/
/*                             <span class="nowrap">{{ result.ip }}</span>*/
/*                             {% if request.session is not null %}*/
/*                                 <a href="{{ path('_profiler_search_results', request.query.all|merge({'ip': result.ip, 'token': result.token})) }}" title="Search">*/
/*                                     <span title="Search" class="sf-icon sf-search">{{ include('@WebProfiler/Icon/search.svg') }}</span>*/
/*                                 </a>*/
/*                             {% endif %}*/
/*                         </td>*/
/*                         <td>*/
/*                             {{ result.method }}*/
/*                             {% if request.session is not null %}*/
/*                                 <a href="{{ path('_profiler_search_results', request.query.all|merge({'method': result.method, 'token': result.token})) }}" title="Search">*/
/*                                     <span title="Search" class="sf-icon sf-search">{{ include('@WebProfiler/Icon/search.svg') }}</span>*/
/*                                 </a>*/
/*                             {% endif %}*/
/*                         </td>*/
/*                         <td class="break-long-words">*/
/*                             {{ result.url }}*/
/*                             {% if request.session is not null %}*/
/*                                 <a href="{{ path('_profiler_search_results', request.query.all|merge({'url': result.url, 'token': result.token})) }}" title="Search">*/
/*                                     <span title="Search" class="sf-icon sf-search">{{ include('@WebProfiler/Icon/search.svg') }}</span>*/
/*                                 </a>*/
/*                             {% endif %}*/
/*                         </td>*/
/*                         <td class="text-small">*/
/*                             <span class="nowrap">{{ result.time|date('d-M-Y') }}</span>*/
/*                             <span class="nowrap newline">{{ result.time|date('H:i:s') }}</span>*/
/*                         </td>*/
/*                         <td class="nowrap"><a href="{{ path('_profiler', { token: result.token }) }}">{{ result.token }}</a></td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     {% else %}*/
/*         <div class="empty">*/
/*             <p>The query returned no result.</p>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
