<?php

/* @CoreHome/_applePinnedTabIcon.twig */
class __TwigTemplate_0feb06781f4dd4e52b7979f3fdd95bb362ca549a03289f65a23089ba8182033f extends Twig_Template
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
        if ((((isset($context["isCustomLogo"]) ? $context["isCustomLogo"] : $this->getContext($context, "isCustomLogo")) && array_key_exists("customFavicon", $context)) && (isset($context["customFavicon"]) ? $context["customFavicon"] : $this->getContext($context, "customFavicon")))) {
        } else {
            // line 3
            echo "\t<link rel=\"mask-icon\" href=\"plugins/CoreHome/images/applePinnedTab.svg\" color=\"#d4291f\">
";
        }
    }

    public function getTemplateName()
    {
        return "@CoreHome/_applePinnedTabIcon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if isCustomLogo and customFavicon is defined and customFavicon %}
{% else %}
\t<link rel=\"mask-icon\" href=\"plugins/CoreHome/images/applePinnedTab.svg\" color=\"#d4291f\">
{% endif %}
", "@CoreHome/_applePinnedTabIcon.twig", "/var/www/html/infonews/analytics/plugins/CoreHome/templates/_applePinnedTabIcon.twig");
    }
}
