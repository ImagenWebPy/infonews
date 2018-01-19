<?php

/* @Widgetize/index.twig */
class __TwigTemplate_4799071b924116586316182f06c02c0afe0d1408475b4948b2a9c9a7f13ca99f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@Widgetize/index.twig", 1);
        $this->blocks = array(
            'topcontrols' => array($this, 'block_topcontrols'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Widgets")), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_topcontrols($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->loadTemplate("@CoreHome/_siteSelectHeader.twig", "@Widgetize/index.twig", 6)->display($context);
        // line 7
        echo "    ";
        $this->loadTemplate("@CoreHome/_periodSelect.twig", "@Widgetize/index.twig", 7)->display($context);
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "
<div>

<div class=\"widgetize\" ng-controller=\"ExportWidgetController as exportWidget\">
<div piwik-content-intro>
    <h2 piwik-enriched-headline>";
        // line 16
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html_attr");
        echo "</h2>
    <p>With Matomo, you can export your Web Analytics reports on your blog, website, or intranet dashboard... in one click.</p>
</div>
<div piwik-content-block content-title=\"Authentication\">
    <p>
        If you want your widgets to be viewable by everybody, you first have to set the 'view' permissions
        to the anonymous user in the <a href='index.php?module=UsersManager' rel='noreferrer' target='_blank'>Users Management section</a>.
        <br/>Alternatively, if you are publishing widgets on a password protected or private page,
        you don't necessarily have to allow 'anonymous' to view your reports. In this case, you can add the secret token_auth parameter (found in the
        <a href='";
        // line 25
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "API", "action" => "listAllAPI"))), "html", null, true);
        echo "' rel='noreferrer' target='_blank'>API page</a>) in the widget URL.
    </p>
</div>
<div piwik-content-block content-title=\"Widgetize dashboards\">
    <p>You can also display the full Matomo dashboard in your application or website in an IFRAME
        (<a ng-href='";
        // line 30
        echo "{{ exportWidget.dashboardUrl }}";
        echo "' rel='noreferrer' target='_blank' >see example</a>).
        The date parameter can be set to a specific calendar date, \"today\", or \"yesterday\". The period parameter can be set to \"day\", \"week\", \"month\", or
        \"year\".
        The language parameter can be set to the language code of a translation, such as language=fr.
        For example, for idSite=1 and date=yesterday, you can write:

        <br />

        <pre piwik-select-on-focus ng-bind=\"exportWidget.dashboardCode\"> </pre>

        <br />
        You can also widgetize the all websites dashboard in an IFRAME
        (<a ng-href='";
        // line 42
        echo "{{ exportWidget.allWebsitesDashboardUrl }}";
        echo "' rel='noreferrer' target='_blank' id='linkAllWebsitesDashboardUrl'>see example</a>)

        <br />

        <pre piwik-select-on-focus ng-bind=\"exportWidget.allWebsitesDashboardCode\"> </pre>
    </p>
</div>
<div piwik-content-block content-title=\"Widgetize reports\">
    <p>Select a report, and copy paste in your page the embed code below the widget:

    <div piwik-widget-preview></div>

    <br class=\"clearfix\" />

</div>
</div>
</div>

";
        // line 60
        $this->loadTemplate("@Dashboard/_widgetFactoryTemplate.twig", "@Widgetize/index.twig", 60)->display($context);
        // line 61
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Widgetize/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 61,  111 => 60,  90 => 42,  75 => 30,  67 => 25,  55 => 16,  48 => 11,  45 => 10,  40 => 7,  37 => 6,  34 => 5,  30 => 1,  26 => 3,  11 => 1,);
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

{% set title %}{{ 'General_Widgets'|translate }}{% endset %}

{% block topcontrols %}
    {% include \"@CoreHome/_siteSelectHeader.twig\" %}
    {% include \"@CoreHome/_periodSelect.twig\" %}
{% endblock %}

{% block content %}

<div>

<div class=\"widgetize\" ng-controller=\"ExportWidgetController as exportWidget\">
<div piwik-content-intro>
    <h2 piwik-enriched-headline>{{ title|e('html_attr') }}</h2>
    <p>With Matomo, you can export your Web Analytics reports on your blog, website, or intranet dashboard... in one click.</p>
</div>
<div piwik-content-block content-title=\"Authentication\">
    <p>
        If you want your widgets to be viewable by everybody, you first have to set the 'view' permissions
        to the anonymous user in the <a href='index.php?module=UsersManager' rel='noreferrer' target='_blank'>Users Management section</a>.
        <br/>Alternatively, if you are publishing widgets on a password protected or private page,
        you don't necessarily have to allow 'anonymous' to view your reports. In this case, you can add the secret token_auth parameter (found in the
        <a href='{{ linkTo({'module':'API','action':'listAllAPI'}) }}' rel='noreferrer' target='_blank'>API page</a>) in the widget URL.
    </p>
</div>
<div piwik-content-block content-title=\"Widgetize dashboards\">
    <p>You can also display the full Matomo dashboard in your application or website in an IFRAME
        (<a ng-href='{{ '{{ exportWidget.dashboardUrl }}'|raw }}' rel='noreferrer' target='_blank' >see example</a>).
        The date parameter can be set to a specific calendar date, \"today\", or \"yesterday\". The period parameter can be set to \"day\", \"week\", \"month\", or
        \"year\".
        The language parameter can be set to the language code of a translation, such as language=fr.
        For example, for idSite=1 and date=yesterday, you can write:

        <br />

        <pre piwik-select-on-focus ng-bind=\"exportWidget.dashboardCode\"> </pre>

        <br />
        You can also widgetize the all websites dashboard in an IFRAME
        (<a ng-href='{{ '{{ exportWidget.allWebsitesDashboardUrl }}'|raw }}' rel='noreferrer' target='_blank' id='linkAllWebsitesDashboardUrl'>see example</a>)

        <br />

        <pre piwik-select-on-focus ng-bind=\"exportWidget.allWebsitesDashboardCode\"> </pre>
    </p>
</div>
<div piwik-content-block content-title=\"Widgetize reports\">
    <p>Select a report, and copy paste in your page the embed code below the widget:

    <div piwik-widget-preview></div>

    <br class=\"clearfix\" />

</div>
</div>
</div>

{% include \"@Dashboard/_widgetFactoryTemplate.twig\" %}

{% endblock %}", "@Widgetize/index.twig", "/var/www/html/infonews/analytics/plugins/Widgetize/templates/index.twig");
    }
}
