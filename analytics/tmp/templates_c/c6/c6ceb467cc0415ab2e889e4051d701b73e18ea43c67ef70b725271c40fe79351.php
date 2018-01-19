<?php

/* @CoreHome/_headerMessage.twig */
class __TwigTemplate_89f17f1f2f35ca6e8d7fc273cbac6e1df8d866af476d125981686844d0a6d45a extends Twig_Template
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
        // line 2
        $context["test_latest_version_available"] = "4.0.0";
        // line 3
        $context["test_piwikUrl"] = "https://demo.matomo.org/";
        // line 4
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, (((isset($context["piwikUrl"]) ? $context["piwikUrl"] : $this->getContext($context, "piwikUrl")) == "http://demo.matomo.org/") || ((isset($context["piwikUrl"]) ? $context["piwikUrl"] : $this->getContext($context, "piwikUrl")) == "https://demo.matomo.org/")), "html", null, true);
        $context["isPiwikDemo"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 5
        echo "
";
        // line 6
        ob_start();
        // line 7
        echo "    <span id=\"updateCheckLinkContainer\">
                ";
        // line 8
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_CheckForUpdates")), "html", null, true);
        echo "
        <span class=\"icon icon-fixed icon-reload\"></span>
    </span>
";
        $context["updateCheck"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        echo "
";
        // line 13
        if (((((((isset($context["latest_version_available"]) ? $context["latest_version_available"] : $this->getContext($context, "latest_version_available")) &&  !(isset($context["isPiwikDemo"]) ? $context["isPiwikDemo"] : $this->getContext($context, "isPiwikDemo"))) && (isset($context["hasSomeViewAccess"]) ? $context["hasSomeViewAccess"] : $this->getContext($context, "hasSomeViewAccess"))) &&  !(isset($context["isUserIsAnonymous"]) ? $context["isUserIsAnonymous"] : $this->getContext($context, "isUserIsAnonymous"))) && (isset($context["showUpdateNotificationToUser"]) ? $context["showUpdateNotificationToUser"] : $this->getContext($context, "showUpdateNotificationToUser"))) || (((isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser")) && array_key_exists("isAdminArea", $context)) && (isset($context["isAdminArea"]) ? $context["isAdminArea"] : $this->getContext($context, "isAdminArea"))))) {
            // line 14
            echo "<div piwik-expand-on-hover
     id=\"header_message\"
     class=\"piwikSelector borderedControl ";
            // line 16
            if ( !(isset($context["latest_version_available"]) ? $context["latest_version_available"] : $this->getContext($context, "latest_version_available"))) {
                echo "header_info";
            } else {
            }
            echo " piwikTopControl ";
            if ((isset($context["latest_version_available"]) ? $context["latest_version_available"] : $this->getContext($context, "latest_version_available"))) {
                echo "update_available";
            }
            echo "\"
        >

        ";
            // line 19
            if (((isset($context["latest_version_available"]) ? $context["latest_version_available"] : $this->getContext($context, "latest_version_available")) &&  !(isset($context["isPiwikDemo"]) ? $context["isPiwikDemo"] : $this->getContext($context, "isPiwikDemo")))) {
                // line 20
                echo "        <a class=\"title\" href=\"?module=CoreUpdater&action=newVersionAvailable\" style=\"cursor:pointer;\">
            ";
                // line 21
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NewUpdatePiwikX", (isset($context["latest_version_available"]) ? $context["latest_version_available"] : $this->getContext($context, "latest_version_available")))), "html", null, true);
                echo "
            <span class=\"icon-warning\"></span>
          </a>
        ";
            } elseif (((            // line 24
(isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser")) && array_key_exists("isAdminArea", $context)) && (isset($context["isAdminArea"]) ? $context["isAdminArea"] : $this->getContext($context, "isAdminArea")))) {
                // line 25
                echo "        <a class=\"title\">
            ";
                // line 26
                echo (isset($context["updateCheck"]) ? $context["updateCheck"] : $this->getContext($context, "updateCheck"));
                echo "
          </a>
        ";
            }
            // line 29
            echo "
    <div class=\"dropdown positionInViewport\">
        ";
            // line 31
            if (((isset($context["latest_version_available"]) ? $context["latest_version_available"] : $this->getContext($context, "latest_version_available")) && (isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser")))) {
                // line 32
                echo "            ";
                if ((isset($context["isMultiServerEnvironment"]) ? $context["isMultiServerEnvironment"] : $this->getContext($context, "isMultiServerEnvironment"))) {
                    // line 33
                    echo "                ";
                    echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_OneClickUpdateNotPossibleAsMultiServerEnvironment", (("<a rel='noreferrer' href='https://builds.matomo.org/piwik-" . (isset($context["latest_version_available"]) ? $context["latest_version_available"] : $this->getContext($context, "latest_version_available"))) . ".zip'>"), "</a>"));
                    echo "
            ";
                } else {
                    // line 35
                    echo "                ";
                    echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_PiwikXIsAvailablePleaseUpdateNow", (isset($context["latest_version_available"]) ? $context["latest_version_available"] : $this->getContext($context, "latest_version_available")), "<br /><a href='index.php?module=CoreUpdater&amp;action=newVersionAvailable'>", "</a>", "<a href='?module=Proxy&amp;action=redirect&amp;url=https://matomo.org/changelog/' target='_blank'>", "</a>"));
                    echo "
            ";
                }
                // line 37
                echo "            <br />
        ";
            } elseif ((((            // line 38
(isset($context["latest_version_available"]) ? $context["latest_version_available"] : $this->getContext($context, "latest_version_available")) &&  !(isset($context["isPiwikDemo"]) ? $context["isPiwikDemo"] : $this->getContext($context, "isPiwikDemo"))) && (isset($context["hasSomeViewAccess"]) ? $context["hasSomeViewAccess"] : $this->getContext($context, "hasSomeViewAccess"))) &&  !(isset($context["isUserIsAnonymous"]) ? $context["isUserIsAnonymous"] : $this->getContext($context, "isUserIsAnonymous")))) {
                // line 39
                echo "            ";
                $context["updateSubject"] = \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NewUpdatePiwikX", (isset($context["latest_version_available"]) ? $context["latest_version_available"] : $this->getContext($context, "latest_version_available")))), "url");
                // line 40
                echo "            ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_PiwikXIsAvailablePleaseNotifyPiwikAdmin", (("<a href='?module=Proxy&action=redirect&url=https://matomo.org/' target='_blank'>Piwik</a> <a href='?module=Proxy&action=redirect&url=https://matomo.org/changelog/' target='_blank'>" . (isset($context["latest_version_available"]) ? $context["latest_version_available"] : $this->getContext($context, "latest_version_available"))) . "</a>"), (((("<a href='mailto:" . (isset($context["superUserEmails"]) ? $context["superUserEmails"] : $this->getContext($context, "superUserEmails"))) . "?subject=") . (isset($context["updateSubject"]) ? $context["updateSubject"] : $this->getContext($context, "updateSubject"))) . "'>"), "</a>"));
                echo "
            <br />
        ";
            }
            // line 43
            echo "
        ";
            // line 44
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_YouAreCurrentlyUsing", (isset($context["piwik_version"]) ? $context["piwik_version"] : $this->getContext($context, "piwik_version")))), "html", null, true);
            echo "
    </div>
</div>

<div style=\"clear:right\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "@CoreHome/_headerMessage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 44,  122 => 43,  115 => 40,  112 => 39,  110 => 38,  107 => 37,  101 => 35,  95 => 33,  92 => 32,  90 => 31,  86 => 29,  80 => 26,  77 => 25,  75 => 24,  69 => 21,  66 => 20,  64 => 19,  51 => 16,  47 => 14,  45 => 13,  42 => 12,  35 => 8,  32 => 7,  30 => 6,  27 => 5,  23 => 4,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# testing, remove test_ from var names #}
{% set test_latest_version_available=\"4.0.0\" %}
{% set test_piwikUrl='https://demo.matomo.org/' %}
{% set isPiwikDemo %}{{ piwikUrl == 'http://demo.matomo.org/' or piwikUrl == 'https://demo.matomo.org/' }}{% endset %}

{% set updateCheck %}
    <span id=\"updateCheckLinkContainer\">
                {{ 'CoreHome_CheckForUpdates'|translate }}
        <span class=\"icon icon-fixed icon-reload\"></span>
    </span>
{% endset %}

{% if (latest_version_available and not isPiwikDemo and hasSomeViewAccess and not isUserIsAnonymous and showUpdateNotificationToUser) or (isSuperUser and isAdminArea is defined and isAdminArea) %}
<div piwik-expand-on-hover
     id=\"header_message\"
     class=\"piwikSelector borderedControl {% if not latest_version_available %}header_info{% else %}{% endif %} piwikTopControl {% if latest_version_available %}update_available{% endif %}\"
        >

        {% if latest_version_available and not isPiwikDemo %}
        <a class=\"title\" href=\"?module=CoreUpdater&action=newVersionAvailable\" style=\"cursor:pointer;\">
            {{ 'General_NewUpdatePiwikX'|translate(latest_version_available) }}
            <span class=\"icon-warning\"></span>
          </a>
        {% elseif isSuperUser and isAdminArea is defined and isAdminArea %}
        <a class=\"title\">
            {{ updateCheck|raw }}
          </a>
        {% endif %}

    <div class=\"dropdown positionInViewport\">
        {% if latest_version_available and isSuperUser %}
            {% if isMultiServerEnvironment %}
                {{ 'CoreHome_OneClickUpdateNotPossibleAsMultiServerEnvironment'|translate(\"<a rel='noreferrer' href='https://builds.matomo.org/piwik-\" ~ latest_version_available ~ \".zip'>\",\"</a>\")|raw }}
            {% else %}
                {{ 'General_PiwikXIsAvailablePleaseUpdateNow'|translate(latest_version_available,\"<br /><a href='index.php?module=CoreUpdater&amp;action=newVersionAvailable'>\",\"</a>\",\"<a href='?module=Proxy&amp;action=redirect&amp;url=https://matomo.org/changelog/' target='_blank'>\",\"</a>\")|raw }}
            {% endif %}
            <br />
        {% elseif latest_version_available and not isPiwikDemo and hasSomeViewAccess and not isUserIsAnonymous %}
            {% set updateSubject = 'General_NewUpdatePiwikX'|translate(latest_version_available)|e('url') %}
            {{ 'General_PiwikXIsAvailablePleaseNotifyPiwikAdmin'|translate(\"<a href='?module=Proxy&action=redirect&url=https://matomo.org/' target='_blank'>Piwik</a> <a href='?module=Proxy&action=redirect&url=https://matomo.org/changelog/' target='_blank'>\" ~ latest_version_available ~ \"</a>\", \"<a href='mailto:\" ~ superUserEmails ~ \"?subject=\" ~ updateSubject ~ \"'>\", \"</a>\")|raw }}
            <br />
        {% endif %}

        {{ 'General_YouAreCurrentlyUsing'|translate(piwik_version) }}
    </div>
</div>

<div style=\"clear:right\"></div>
{% endif %}
", "@CoreHome/_headerMessage.twig", "/var/www/html/infonews/analytics/plugins/CoreHome/templates/_headerMessage.twig");
    }
}
