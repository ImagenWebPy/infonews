<?php

/* @Diagnostics/configfile.twig */
class __TwigTemplate_e7ac5d84c03c6ee51abeb29949e0a6e8f7863f77e0dfba0c8840f762eb872716 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@Diagnostics/configfile.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "<div piwik-content-block
     content-title=\"";
        // line 18
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Diagnostics_ConfigFileTitle")), "html_attr");
        echo "\" feature=\"true\">
    <p>
        ";
        // line 20
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Diagnostics_ConfigFileIntroduction", "<code>\"config/config.ini.php\"</code>"));
        echo "
        ";
        // line 21
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Diagnostics_HideUnchanged", "<a ng-click=\"hideGlobalConfigValues=!hideGlobalConfigValues\">", "</a>"));
        echo "

        <h3>";
        // line 23
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Diagnostics_Sections")), "html", null, true);
        echo "</h3>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allConfigValues"]) ? $context["allConfigValues"] : $this->getContext($context, "allConfigValues")));
        foreach ($context['_seq'] as $context["category"] => $context["values"]) {
            // line 25
            echo "            <a href=\"#";
            echo \Piwik\piwik_escape_filter($this->env, $context["category"], "html_attr");
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</a><br />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['category'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </p>

    <table class=\"diagnostics configfile\" piwik-content-table>
        <tbody>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allConfigValues"]) ? $context["allConfigValues"] : $this->getContext($context, "allConfigValues")));
        foreach ($context['_seq'] as $context["category"] => $context["configValues"]) {
            // line 32
            echo "            <tr><td colspan=\"3\"><a name=\"";
            echo \Piwik\piwik_escape_filter($this->env, $context["category"], "html_attr");
            echo "\"></a><h3>";
            echo \Piwik\piwik_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</h3></td></tr>

            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["configValues"]);
            foreach ($context['_seq'] as $context["key"] => $context["configEntry"]) {
                // line 35
                echo "                <tr ";
                if ($this->getAttribute($context["configEntry"], "isCustomValue", array())) {
                    echo "class=\"custom-value\"";
                } else {
                    echo "ng-hide=\"hideGlobalConfigValues\"";
                }
                echo ">
                    <td class=\"name\">";
                // line 36
                echo \Piwik\piwik_escape_filter($this->env, $context["key"], "html", null, true);
                if (twig_test_iterable($this->getAttribute($context["configEntry"], "value", array()))) {
                    echo "[]";
                }
                echo "</td>
                    <td class=\"value\">
                        ";
                // line 38
                echo $this->getAttribute($this, "humanReadableValue", array(0 => $this->getAttribute($context["configEntry"], "value", array())), "method");
                echo "
                    </td>
                    <td class=\"description\">
                        ";
                // line 41
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["configEntry"], "description", array()), "html", null, true);
                echo "

                        ";
                // line 43
                if ((($this->getAttribute($context["configEntry"], "isCustomValue", array()) || (null === $this->getAttribute($context["configEntry"], "value", array()))) &&  !(null === $this->getAttribute($context["configEntry"], "defaultValue", array())))) {
                    // line 44
                    echo "                            ";
                    if ($this->getAttribute($context["configEntry"], "description", array())) {
                        echo "<br />";
                    }
                    // line 45
                    echo "
                            ";
                    // line 46
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Default")), "html", null, true);
                    echo ":
                            <span class=\"defaultValue\">";
                    // line 47
                    echo $this->getAttribute($this, "humanReadableValue", array(0 => $this->getAttribute($context["configEntry"], "defaultValue", array())), "method");
                    echo "<span>
                        ";
                }
                // line 49
                echo "                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['configEntry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['category'], $context['configValues'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
    </table>

</div>
";
    }

    // line 3
    public function gethumanReadableValue($__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    ";
            if (call_user_func_array($this->env->getTest('false')->getCallable(), array((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                // line 5
                echo "        false
    ";
            } elseif (call_user_func_array($this->env->getTest('true')->getCallable(), array(            // line 6
(isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                // line 7
                echo "        true
    ";
            } elseif ((null ===             // line 8
(isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                // line 9
                echo "    ";
            } elseif (call_user_func_array($this->env->getTest('emptyString')->getCallable(), array((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                // line 10
                echo "        ''
    ";
            } else {
                // line 12
                echo "        ";
                echo \Piwik\piwik_escape_filter($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), ", "), "html", null, true);
                echo "
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@Diagnostics/configfile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 12,  186 => 10,  183 => 9,  181 => 8,  178 => 7,  176 => 6,  173 => 5,  170 => 4,  158 => 3,  150 => 53,  144 => 52,  136 => 49,  131 => 47,  127 => 46,  124 => 45,  119 => 44,  117 => 43,  112 => 41,  106 => 38,  98 => 36,  89 => 35,  85 => 34,  77 => 32,  73 => 31,  67 => 27,  56 => 25,  52 => 24,  48 => 23,  43 => 21,  39 => 20,  34 => 18,  31 => 17,  28 => 16,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.twig' %}

{% macro humanReadableValue(value) %}
    {% if value is false %}
        false
    {% elseif value is true %}
        true
    {% elseif value is null %}
    {% elseif value is emptyString %}
        ''
    {% else %}
        {{ value|join(', ') }}
    {% endif %}
{% endmacro %}

{% block content %}
<div piwik-content-block
     content-title=\"{{ 'Diagnostics_ConfigFileTitle'|translate|e('html_attr') }}\" feature=\"true\">
    <p>
        {{ 'Diagnostics_ConfigFileIntroduction'|translate('<code>\"config/config.ini.php\"</code>')|raw }}
        {{ 'Diagnostics_HideUnchanged'|translate('<a ng-click=\"hideGlobalConfigValues=!hideGlobalConfigValues\">', '</a>')|raw }}

        <h3>{{ 'Diagnostics_Sections'|translate }}</h3>
        {% for category, values in allConfigValues %}
            <a href=\"#{{ category|e('html_attr') }}\">{{ category }}</a><br />
        {% endfor %}
    </p>

    <table class=\"diagnostics configfile\" piwik-content-table>
        <tbody>
        {% for category, configValues in allConfigValues %}
            <tr><td colspan=\"3\"><a name=\"{{ category|e('html_attr') }}\"></a><h3>{{ category }}</h3></td></tr>

            {% for key, configEntry in configValues %}
                <tr {% if configEntry.isCustomValue %}class=\"custom-value\"{% else %}ng-hide=\"hideGlobalConfigValues\"{% endif %}>
                    <td class=\"name\">{{ key }}{% if configEntry.value is iterable %}[]{% endif %}</td>
                    <td class=\"value\">
                        {{ _self.humanReadableValue(configEntry.value) }}
                    </td>
                    <td class=\"description\">
                        {{ configEntry.description }}

                        {% if (configEntry.isCustomValue or configEntry.value is null) and configEntry.defaultValue is not null %}
                            {% if configEntry.description %}<br />{% endif %}

                            {{ 'General_Default'|translate }}:
                            <span class=\"defaultValue\">{{ _self.humanReadableValue(configEntry.defaultValue) }}<span>
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}
        {% endfor %}
        </tbody>
    </table>

</div>
{% endblock %}", "@Diagnostics/configfile.twig", "/var/www/html/infonews/analytics/plugins/Diagnostics/templates/configfile.twig");
    }
}
