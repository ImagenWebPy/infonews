<?php

/* @UserCountry/getGeoIpUpdaterManageScreen.twig */
class __TwigTemplate_1d4992b562c8f77e53d573c7bd763c255a0a20dd1cd5e80da0ed72debb09ddc7 extends Twig_Template
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
        $this->loadTemplate("@UserCountry/_updaterManage.twig", "@UserCountry/getGeoIpUpdaterManageScreen.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "@UserCountry/getGeoIpUpdaterManageScreen.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include \"@UserCountry/_updaterManage.twig\" %}", "@UserCountry/getGeoIpUpdaterManageScreen.twig", "/var/www/html/infonews/analytics/plugins/UserCountry/templates/getGeoIpUpdaterManageScreen.twig");
    }
}
