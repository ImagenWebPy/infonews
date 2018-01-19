<?php

/* @CoreAdminHome/generalSettings.twig */
class __TwigTemplate_c835c1420c16775e1923a7d0a9dbcae29e320ba108867850320e7a33e56a03bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@CoreAdminHome/generalSettings.twig", 1);
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
        // line 3
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_MenuGeneralSettings")), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    ";
        // line 7
        $context["piwik"] = $this->loadTemplate("macros.twig", "@CoreAdminHome/generalSettings.twig", 7);
        // line 8
        echo "    ";
        $context["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@CoreAdminHome/generalSettings.twig", 8);
        // line 9
        echo "
    ";
        // line 10
        echo $context["ajax"]->geterrorDiv();
        echo "
    ";
        // line 11
        echo $context["ajax"]->getloadingDiv();
        echo "

";
        // line 13
        if ((isset($context["isGeneralSettingsAdminEnabled"]) ? $context["isGeneralSettingsAdminEnabled"] : $this->getContext($context, "isGeneralSettingsAdminEnabled"))) {
            // line 14
            echo "    <div piwik-content-block content-title=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_ArchivingSettings")), "html_attr");
            echo "\">
        <div ng-controller=\"ArchivingController as archivingSettings\">
            <div class=\"form-group row\">
                <h3 class=\"col s12\">";
            // line 17
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_AllowPiwikArchivingToTriggerBrowser")), "html", null, true);
            echo "</h3>
                <div class=\"col s12 m6\">
                    <p>
                        <input type=\"radio\" value=\"1\" id=\"enableBrowserTriggerArchiving1\"
                               name=\"enableBrowserTriggerArchiving\" ";
            // line 21
            if (((isset($context["enableBrowserTriggerArchiving"]) ? $context["enableBrowserTriggerArchiving"] : $this->getContext($context, "enableBrowserTriggerArchiving")) == 1)) {
                echo " checked=\"checked\"";
            }
            // line 22
            echo "                        />
                        <label for=\"enableBrowserTriggerArchiving1\">
                            ";
            // line 24
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "
                            <span class=\"form-description\">";
            // line 25
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Default")), "html", null, true);
            echo "</span>
                        </label>
                    </p>

                    <p>
                    <input type=\"radio\" value=\"0\"
                           id=\"enableBrowserTriggerArchiving2\"
                           name=\"enableBrowserTriggerArchiving\"
                            ";
            // line 33
            if (((isset($context["enableBrowserTriggerArchiving"]) ? $context["enableBrowserTriggerArchiving"] : $this->getContext($context, "enableBrowserTriggerArchiving")) == 0)) {
                echo " checked=\"checked\"";
            }
            echo " />

                    <label for=\"enableBrowserTriggerArchiving2\">
                        ";
            // line 36
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "
                        <span class=\"form-description\">";
            // line 37
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ArchivingTriggerDescription", "<a href='?module=Proxy&action=redirect&url=https://matomo.org/docs/setup-auto-archiving/' target='_blank'>", "</a>"));
            echo "</span>
                    </label>
                    </p>
                </div><div class=\"col s12 m6\">
                    <div class=\"form-help\">
                        ";
            // line 42
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ArchivingInlineHelp")), "html", null, true);
            echo "
                        <br/>
                        ";
            // line 44
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SeeTheOfficialDocumentationForMoreInformation", "<a href='?module=Proxy&action=redirect&url=https://matomo.org/docs/setup-auto-archiving/' target='_blank'>", "</a>"));
            echo "
                    </div>
                </div>
            </div>

            <div class=\"form-group row\">
                <h3 class=\"col s12\">
                    ";
            // line 51
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ReportsContainingTodayWillBeProcessedAtMostEvery")), "html", null, true);
            echo "
                </h3>
                <div class=\"input-field col s12 m6\">
                    <input  type=\"text\" value='";
            // line 54
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["todayArchiveTimeToLive"]) ? $context["todayArchiveTimeToLive"] : $this->getContext($context, "todayArchiveTimeToLive")), "html", null, true);
            echo "' id='todayArchiveTimeToLive' ";
            if ( !(isset($context["isGeneralSettingsAdminEnabled"]) ? $context["isGeneralSettingsAdminEnabled"] : $this->getContext($context, "isGeneralSettingsAdminEnabled"))) {
                echo "disabled=\"disabled\"";
            }
            echo " />
                    <span class=\"form-description\">
                        ";
            // line 56
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_RearchiveTimeIntervalOnlyForTodayReports")), "html", null, true);
            echo "
                    </span>
                </div>
                <div class=\"col s12 m6\">
                    ";
            // line 60
            if ((isset($context["isGeneralSettingsAdminEnabled"]) ? $context["isGeneralSettingsAdminEnabled"] : $this->getContext($context, "isGeneralSettingsAdminEnabled"))) {
                // line 61
                echo "                        <div class=\"form-help\">
                            ";
                // line 62
                if ((isset($context["showWarningCron"]) ? $context["showWarningCron"] : $this->getContext($context, "showWarningCron"))) {
                    // line 63
                    echo "                                <strong>
                                    ";
                    // line 64
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NewReportsWillBeProcessedByCron")), "html", null, true);
                    echo "<br/>
                                    ";
                    // line 65
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ReportsWillBeProcessedAtMostEveryHour")), "html", null, true);
                    echo "
                                    ";
                    // line 66
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_IfArchivingIsFastYouCanSetupCronRunMoreOften")), "html", null, true);
                    echo "<br/>
                                </strong>
                            ";
                }
                // line 69
                echo "                            ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SmallTrafficYouCanLeaveDefault", (isset($context["todayArchiveTimeToLiveDefault"]) ? $context["todayArchiveTimeToLiveDefault"] : $this->getContext($context, "todayArchiveTimeToLiveDefault")))), "html", null, true);
                echo "
                            <br/>
                            ";
                // line 71
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_MediumToHighTrafficItIsRecommendedTo", 1800, 3600)), "html", null, true);
                echo "
                        </div>
                    ";
            }
            // line 74
            echo "                </div>
            </div>

            <div onconfirm=\"archivingSettings.save()\" saving=\"archivingSettings.isLoading\" piwik-save-button></div>
        </div>
    </div>
    <div piwik-content-block content-title=\"";
            // line 80
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_EmailServerSettings")), "html_attr");
            echo "\">

        <div piwik-form ng-controller=\"MailSmtpController as mailSettings\">
            <div piwik-field uicontrol=\"checkbox\" name=\"mailUseSmtp\"
                 ng-model=\"mailSettings.enabled\"
                 title=\"";
            // line 85
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_UseSMTPServerForEmail")), "html_attr");
            echo "\"
                 value=\"";
            // line 86
            if (($this->getAttribute((isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "transport", array()) == "smtp")) {
                echo "1";
            }
            echo "\"
                 inline-help=\"";
            // line 87
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SelectYesIfYouWantToSendEmailsViaServer")), "html_attr");
            echo "\">
            </div>

            <div id=\"smtpSettings\"
                 ng-show=\"mailSettings.enabled\">

                <div piwik-field uicontrol=\"text\" name=\"mailHost\"
                     ng-model=\"mailSettings.mailHost\"
                     title=\"";
            // line 95
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SmtpServerAddress")), "html_attr");
            echo "\"
                     value=\"";
            // line 96
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "host", array()), "html", null, true);
            echo "\">
                </div>

                <div piwik-field uicontrol=\"text\" name=\"mailPort\"
                     ng-model=\"mailSettings.mailPort\"
                     title=\"";
            // line 101
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SmtpPort")), "html_attr");
            echo "\"
                     value=\"";
            // line 102
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "port", array()), "html", null, true);
            echo "\" inline-help=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OptionalSmtpPort")), "html_attr");
            echo "\">
                </div>

                <div piwik-field uicontrol=\"select\" name=\"mailType\"
                     ng-model=\"mailSettings.mailType\"
                     title=\"";
            // line 107
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_AuthenticationMethodSmtp")), "html_attr");
            echo "\"
                     options=\"";
            // line 108
            echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter((isset($context["mailTypes"]) ? $context["mailTypes"] : $this->getContext($context, "mailTypes"))), "html", null, true);
            echo "\"
                     value=\"";
            // line 109
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "type", array()), "html", null, true);
            echo "\" inline-help=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OnlyUsedIfUserPwdIsSet")), "html_attr");
            echo "\">
                </div>

                <div piwik-field uicontrol=\"text\" name=\"mailUsername\"
                     ng-model=\"mailSettings.mailUsername\"
                     title=\"";
            // line 114
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SmtpUsername")), "html_attr");
            echo "\"
                     value=\"";
            // line 115
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "username", array()), "html", null, true);
            echo "\" inline-help=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OnlyEnterIfRequired")), "html_attr");
            echo "\"
                     autocomplete=\"off\">
                </div>

                ";
            // line 119
            ob_start();
            // line 120
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OnlyEnterIfRequiredPassword")), "html", null, true);
            echo "<br/>
                    ";
            // line 121
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_WarningPasswordStored", "<strong>", "</strong>"));
            $context["help"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 123
            echo "
                <div piwik-field uicontrol=\"password\" name=\"mailPassword\"
                     ng-model=\"mailSettings.mailPassword\"
                     ng-change=\"mailSettings.passwordChanged = true\"
                     title=\"";
            // line 127
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SmtpPassword")), "html_attr");
            echo "\"
                     value=\"";
            // line 128
            echo (($this->getAttribute((isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "password", array())) ? ("******") : (""));
            echo "\" inline-help=\"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["help"]) ? $context["help"] : $this->getContext($context, "help")), "html_attr");
            echo "\"
                     autocomplete=\"off\">
                </div>

                <div piwik-field uicontrol=\"select\" name=\"mailEncryption\"
                     ng-model=\"mailSettings.mailEncryption\"
                     title=\"";
            // line 134
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SmtpEncryption")), "html_attr");
            echo "\"
                     options=\"";
            // line 135
            echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter((isset($context["mailEncryptions"]) ? $context["mailEncryptions"] : $this->getContext($context, "mailEncryptions"))), "html", null, true);
            echo "\"
                     value=\"";
            // line 136
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute((isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "encryption", array()), "html", null, true);
            echo "\" inline-help=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_EncryptedSmtpTransport")), "html_attr");
            echo "\">
                </div>
            </div>

            <div onconfirm=\"mailSettings.save()\" saving=\"mailSettings.isLoading\" piwik-save-button></div>
        </div>
    </div>
";
        }
        // line 144
        echo "<div piwik-content-block content-title=\"";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_BrandingSettings")), "html_attr");
        echo "\">

    <div piwik-form ng-controller=\"BrandingController as brandingSettings\">

        <p>";
        // line 148
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_CustomLogoHelpText")), "html", null, true);
        echo "</p>

        ";
        // line 150
        ob_start();
        // line 151
        ob_start();
        echo "\"";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_GiveUsYourFeedback")), "html", null, true);
        echo "\"";
        $context["giveUsFeedbackText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 152
        echo "            ";
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_CustomLogoFeedbackInfo", (isset($context["giveUsFeedbackText"]) ? $context["giveUsFeedbackText"] : $this->getContext($context, "giveUsFeedbackText")), "<a href='?module=CorePluginsAdmin&action=plugins' rel='noreferrer' target='_blank'>", "</a>"));
        $context["help"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 154
        echo "
        <div piwik-field uicontrol=\"checkbox\" name=\"useCustomLogo\"
             ng-model=\"brandingSettings.enabled\"
             ng-change=\"brandingSettings.toggleCustomLogo()\"
             title=\"";
        // line 158
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_UseCustomLogo")), "html_attr");
        echo "\"
             value=\"";
        // line 159
        if (($this->getAttribute((isset($context["branding"]) ? $context["branding"] : $this->getContext($context, "branding")), "use_custom_logo", array()) == 1)) {
            echo "1";
        }
        echo "\" inline-help=\"";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["help"]) ? $context["help"] : $this->getContext($context, "help")), "html_attr");
        echo "\">
        </div>

        <div id=\"logoSettings\" ng-show=\"brandingSettings.enabled\">
            <form id=\"logoUploadForm\" method=\"post\" enctype=\"multipart/form-data\" action=\"index.php?module=CoreAdminHome&format=json&action=uploadCustomLogo\">
                ";
        // line 164
        if ((isset($context["fileUploadEnabled"]) ? $context["fileUploadEnabled"] : $this->getContext($context, "fileUploadEnabled"))) {
            // line 165
            echo "                    <input type=\"hidden\" name=\"token_auth\" value=\"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["token_auth"]) ? $context["token_auth"] : $this->getContext($context, "token_auth")), "html", null, true);
            echo "\"/>

                    ";
            // line 167
            if ((isset($context["logosWriteable"]) ? $context["logosWriteable"] : $this->getContext($context, "logosWriteable"))) {
                // line 168
                echo "                        <div class=\"alert alert-warning uploaderror\" style=\"display:none;\">
                            ";
                // line 169
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_LogoUploadFailed")), "html", null, true);
                echo "
                        </div>

                        <div piwik-field uicontrol=\"file\" name=\"customLogo\"
                             ng-change=\"brandingSettings.updateLogo()\"
                             ng-model=\"brandingSettings.customLogo\"
                             title=\"";
                // line 175
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_LogoUpload")), "html_attr");
                echo "\"
                             inline-help=\"";
                // line 176
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_LogoUploadHelp", "JPG / PNG / GIF", 110)), "html_attr");
                echo "\">
                        </div>

                        <div class=\"row\">
                            <div class=\"col s12\">
                                <img data-src=\"";
                // line 181
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["pathUserLogo"]) ? $context["pathUserLogo"] : $this->getContext($context, "pathUserLogo")), "html", null, true);
                echo "\" data-src-exists=\"";
                echo (((isset($context["hasUserLogo"]) ? $context["hasUserLogo"] : $this->getContext($context, "hasUserLogo"))) ? ("1") : ("0"));
                echo "\"
                                     id=\"currentLogo\" style=\"max-height: 150px\"/>
                            </div>
                        </div>

                        <div piwik-field uicontrol=\"file\" name=\"customFavicon\"
                             ng-change=\"brandingSettings.updateLogo()\"
                             ng-model=\"brandingSettings.customFavicon\"
                             title=\"";
                // line 189
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_FaviconUpload")), "html_attr");
                echo "\"
                             inline-help=\"";
                // line 190
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_LogoUploadHelp", "JPG / PNG / GIF", 16)), "html_attr");
                echo "\">
                        </div>

                        <div class=\"row\">
                            <div class=\"col s12\">
                                <img data-src=\"";
                // line 195
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["pathUserFavicon"]) ? $context["pathUserFavicon"] : $this->getContext($context, "pathUserFavicon")), "html", null, true);
                echo "\" data-src-exists=\"";
                echo (((isset($context["hasUserFavicon"]) ? $context["hasUserFavicon"] : $this->getContext($context, "hasUserFavicon"))) ? ("1") : ("0"));
                echo "\"
                                     id=\"currentFavicon\" width=\"16\" height=\"16\"/>
                            </div>
                        </div>

                    ";
            } else {
                // line 201
                echo "                        <div class=\"alert alert-warning\">
                            ";
                // line 202
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_LogoNotWriteableInstruction", (("<code>" .                 // line 203
(isset($context["pathUserLogoDirectory"]) ? $context["pathUserLogoDirectory"] : $this->getContext($context, "pathUserLogoDirectory"))) . "</code><br/>"), ((((((isset($context["pathUserLogo"]) ? $context["pathUserLogo"] : $this->getContext($context, "pathUserLogo")) . ", ") . (isset($context["pathUserLogoSmall"]) ? $context["pathUserLogoSmall"] : $this->getContext($context, "pathUserLogoSmall"))) . ", ") . (isset($context["pathUserLogoSVG"]) ? $context["pathUserLogoSVG"] : $this->getContext($context, "pathUserLogoSVG"))) . "")));
                echo "
                        </div>
                    ";
            }
            // line 206
            echo "                ";
        } else {
            // line 207
            echo "                    <div class=\"alert alert-warning\">
                        ";
            // line 208
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_FileUploadDisabled", "file_uploads=1")), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 211
        echo "            </form>
        </div>

        <div onconfirm=\"brandingSettings.save()\" saving=\"brandingSettings.isLoading\" piwik-save-button></div>
    </div>
</div>

<div piwik-content-block content-title=\"";
        // line 218
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_TrustedHostSettings")), "html_attr");
        echo "\">
    <a name=\"trustedHostsSection\"></a>
    <div class=\"ui-confirm\" id=\"confirmTrustedHostChange\">
        <h2>";
        // line 221
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_TrustedHostConfirm")), "html", null, true);
        echo "</h2>
        <input role=\"yes\" type=\"button\" value=\"";
        // line 222
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
        echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
        // line 223
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
        echo "\"/>
    </div>
    <div id='trustedHostSettings' piwik-trusted-hosts-setting='";
        // line 225
        echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter((isset($context["trustedHosts"]) ? $context["trustedHosts"] : $this->getContext($context, "trustedHosts"))), "html", null, true);
        echo "'>

        ";
        // line 227
        $this->loadTemplate("@CoreHome/_warningInvalidHost.twig", "@CoreAdminHome/generalSettings.twig", 227)->display($context);
        // line 228
        echo "
        ";
        // line 229
        if ( !(isset($context["isGeneralSettingsAdminEnabled"]) ? $context["isGeneralSettingsAdminEnabled"] : $this->getContext($context, "isGeneralSettingsAdminEnabled"))) {
            // line 230
            echo "            ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_PiwikIsInstalledAt")), "html", null, true);
            echo ": ";
            echo \Piwik\piwik_escape_filter($this->env, twig_join_filter((isset($context["trustedHosts"]) ? $context["trustedHosts"] : $this->getContext($context, "trustedHosts")), ", "), "html", null, true);
            echo "
        ";
        } else {
            // line 232
            echo "            <div class=\"form-group row\">
                <label>";
            // line 233
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_ValidPiwikHostname")), "html", null, true);
            echo "</label>
            </div>
            <ul>
                <li ng-repeat=\"trustedHost in trustedHosts.hosts\">
                    <input ng-model=\"trustedHost.host\" type=\"text\"/>
                    <a href=\"javascript:;\" ng-click=\"trustedHosts.removeTrustedHost(\$index);\"
                       class=\"remove-trusted-host btn-flat btn-large\" title=\"";
            // line 239
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Delete")), "html", null, true);
            echo "\">
                        <span class=\"icon-minus\"></span>
                    </a>
                </li>
            </ul>

            <div class=\"add-trusted-host\">
                <input type=\"text\" ng-click=\"trustedHosts.addTrustedHost();\"
                       placeholder=\"";
            // line 247
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_AddNewTrustedHost")), "html_attr");
            echo "\" readonly/>

                <a href=\"#\" ng-click=\"trustedHosts.addTrustedHost();\"
                   class=\"btn-flat btn-large\" title=\"";
            // line 250
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Add")), "html", null, true);
            echo "\">
                    <span class=\"icon-add\"></span>
                </a>
            </div>

            <div onconfirm=\"trustedHosts.save()\" saving=\"trustedHosts.isLoading\" piwik-save-button></div>
        ";
        }
        // line 257
        echo "    </div>

</div>
";
        // line 260
        if ((isset($context["isDataPurgeSettingsEnabled"]) ? $context["isDataPurgeSettingsEnabled"] : $this->getContext($context, "isDataPurgeSettingsEnabled"))) {
            // line 261
            echo "    <div piwik-content-block content-title=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteDataSettings")), "html_attr");
            echo "\">
        <p>";
            // line 262
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteDataDescription")), "html", null, true);
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteDataDescription2")), "html", null, true);
            echo "</p>
        <p>
            <a href='";
            // line 264
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "PrivacyManager", "action" => "privacySettings"))), "html", null, true);
            echo "#deleteLogsAnchor'>
                ";
            // line 265
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_ClickHereSettings", (("'" . call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteDataSettings"))) . "'"))), "html", null, true);
            echo "
            </a>
        </p>
    </div>
";
        }
        // line 270
        echo "
<div piwik-plugin-settings mode=\"admin\"></div>

";
    }

    public function getTemplateName()
    {
        return "@CoreAdminHome/generalSettings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  590 => 270,  582 => 265,  578 => 264,  571 => 262,  566 => 261,  564 => 260,  559 => 257,  549 => 250,  543 => 247,  532 => 239,  523 => 233,  520 => 232,  512 => 230,  510 => 229,  507 => 228,  505 => 227,  500 => 225,  495 => 223,  491 => 222,  487 => 221,  481 => 218,  472 => 211,  466 => 208,  463 => 207,  460 => 206,  454 => 203,  453 => 202,  450 => 201,  439 => 195,  431 => 190,  427 => 189,  414 => 181,  406 => 176,  402 => 175,  393 => 169,  390 => 168,  388 => 167,  382 => 165,  380 => 164,  368 => 159,  364 => 158,  358 => 154,  354 => 152,  348 => 151,  346 => 150,  341 => 148,  333 => 144,  320 => 136,  316 => 135,  312 => 134,  301 => 128,  297 => 127,  291 => 123,  288 => 121,  284 => 120,  282 => 119,  273 => 115,  269 => 114,  259 => 109,  255 => 108,  251 => 107,  241 => 102,  237 => 101,  229 => 96,  225 => 95,  214 => 87,  208 => 86,  204 => 85,  196 => 80,  188 => 74,  182 => 71,  176 => 69,  170 => 66,  166 => 65,  162 => 64,  159 => 63,  157 => 62,  154 => 61,  152 => 60,  145 => 56,  136 => 54,  130 => 51,  120 => 44,  115 => 42,  107 => 37,  103 => 36,  95 => 33,  84 => 25,  80 => 24,  76 => 22,  72 => 21,  65 => 17,  58 => 14,  56 => 13,  51 => 11,  47 => 10,  44 => 9,  41 => 8,  39 => 7,  36 => 6,  33 => 5,  29 => 1,  25 => 3,  11 => 1,);
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

{% set title %}{{ 'CoreAdminHome_MenuGeneralSettings'|translate }}{% endset %}

{% block content %}

    {% import 'macros.twig' as piwik %}
    {% import 'ajaxMacros.twig' as ajax %}

    {{ ajax.errorDiv() }}
    {{ ajax.loadingDiv() }}

{% if isGeneralSettingsAdminEnabled %}
    <div piwik-content-block content-title=\"{{ 'CoreAdminHome_ArchivingSettings'|translate|e('html_attr') }}\">
        <div ng-controller=\"ArchivingController as archivingSettings\">
            <div class=\"form-group row\">
                <h3 class=\"col s12\">{{ 'General_AllowPiwikArchivingToTriggerBrowser'|translate }}</h3>
                <div class=\"col s12 m6\">
                    <p>
                        <input type=\"radio\" value=\"1\" id=\"enableBrowserTriggerArchiving1\"
                               name=\"enableBrowserTriggerArchiving\" {% if enableBrowserTriggerArchiving==1 %} checked=\"checked\"{% endif %}
                        />
                        <label for=\"enableBrowserTriggerArchiving1\">
                            {{ 'General_Yes'|translate }}
                            <span class=\"form-description\">{{ 'General_Default'|translate }}</span>
                        </label>
                    </p>

                    <p>
                    <input type=\"radio\" value=\"0\"
                           id=\"enableBrowserTriggerArchiving2\"
                           name=\"enableBrowserTriggerArchiving\"
                            {% if enableBrowserTriggerArchiving==0 %} checked=\"checked\"{% endif %} />

                    <label for=\"enableBrowserTriggerArchiving2\">
                        {{ 'General_No'|translate }}
                        <span class=\"form-description\">{{ 'General_ArchivingTriggerDescription'|translate(\"<a href='?module=Proxy&action=redirect&url=https://matomo.org/docs/setup-auto-archiving/' target='_blank'>\",\"</a>\")|raw }}</span>
                    </label>
                    </p>
                </div><div class=\"col s12 m6\">
                    <div class=\"form-help\">
                        {{ 'General_ArchivingInlineHelp'|translate }}
                        <br/>
                        {{ 'General_SeeTheOfficialDocumentationForMoreInformation'|translate(\"<a href='?module=Proxy&action=redirect&url=https://matomo.org/docs/setup-auto-archiving/' target='_blank'>\",\"</a>\")|raw }}
                    </div>
                </div>
            </div>

            <div class=\"form-group row\">
                <h3 class=\"col s12\">
                    {{ 'General_ReportsContainingTodayWillBeProcessedAtMostEvery'|translate }}
                </h3>
                <div class=\"input-field col s12 m6\">
                    <input  type=\"text\" value='{{ todayArchiveTimeToLive  }}' id='todayArchiveTimeToLive' {% if not isGeneralSettingsAdminEnabled %}disabled=\"disabled\"{% endif %} />
                    <span class=\"form-description\">
                        {{ 'General_RearchiveTimeIntervalOnlyForTodayReports'|translate }}
                    </span>
                </div>
                <div class=\"col s12 m6\">
                    {% if isGeneralSettingsAdminEnabled %}
                        <div class=\"form-help\">
                            {% if showWarningCron %}
                                <strong>
                                    {{ 'General_NewReportsWillBeProcessedByCron'|translate }}<br/>
                                    {{ 'General_ReportsWillBeProcessedAtMostEveryHour'|translate }}
                                    {{ 'General_IfArchivingIsFastYouCanSetupCronRunMoreOften'|translate }}<br/>
                                </strong>
                            {% endif %}
                            {{ 'General_SmallTrafficYouCanLeaveDefault'|translate( todayArchiveTimeToLiveDefault ) }}
                            <br/>
                            {{ 'General_MediumToHighTrafficItIsRecommendedTo'|translate(1800,3600) }}
                        </div>
                    {% endif %}
                </div>
            </div>

            <div onconfirm=\"archivingSettings.save()\" saving=\"archivingSettings.isLoading\" piwik-save-button></div>
        </div>
    </div>
    <div piwik-content-block content-title=\"{{ 'CoreAdminHome_EmailServerSettings'|translate|e('html_attr') }}\">

        <div piwik-form ng-controller=\"MailSmtpController as mailSettings\">
            <div piwik-field uicontrol=\"checkbox\" name=\"mailUseSmtp\"
                 ng-model=\"mailSettings.enabled\"
                 title=\"{{ 'General_UseSMTPServerForEmail'|translate|e('html_attr') }}\"
                 value=\"{% if mail.transport == 'smtp' %}1{% endif %}\"
                 inline-help=\"{{ 'General_SelectYesIfYouWantToSendEmailsViaServer'|translate|e('html_attr') }}\">
            </div>

            <div id=\"smtpSettings\"
                 ng-show=\"mailSettings.enabled\">

                <div piwik-field uicontrol=\"text\" name=\"mailHost\"
                     ng-model=\"mailSettings.mailHost\"
                     title=\"{{ 'General_SmtpServerAddress'|translate|e('html_attr') }}\"
                     value=\"{{ mail.host }}\">
                </div>

                <div piwik-field uicontrol=\"text\" name=\"mailPort\"
                     ng-model=\"mailSettings.mailPort\"
                     title=\"{{ 'General_SmtpPort'|translate|e('html_attr') }}\"
                     value=\"{{ mail.port }}\" inline-help=\"{{ 'General_OptionalSmtpPort'|translate|e('html_attr') }}\">
                </div>

                <div piwik-field uicontrol=\"select\" name=\"mailType\"
                     ng-model=\"mailSettings.mailType\"
                     title=\"{{ 'General_AuthenticationMethodSmtp'|translate|e('html_attr') }}\"
                     options=\"{{ mailTypes|json_encode }}\"
                     value=\"{{ mail.type }}\" inline-help=\"{{ 'General_OnlyUsedIfUserPwdIsSet'|translate|e('html_attr') }}\">
                </div>

                <div piwik-field uicontrol=\"text\" name=\"mailUsername\"
                     ng-model=\"mailSettings.mailUsername\"
                     title=\"{{ 'General_SmtpUsername'|translate|e('html_attr') }}\"
                     value=\"{{ mail.username }}\" inline-help=\"{{ 'General_OnlyEnterIfRequired'|translate|e('html_attr') }}\"
                     autocomplete=\"off\">
                </div>

                {% set help -%}
                    {{ 'General_OnlyEnterIfRequiredPassword'|translate }}<br/>
                    {{ 'General_WarningPasswordStored'|translate(\"<strong>\",\"</strong>\")|raw }}
                {%- endset %}

                <div piwik-field uicontrol=\"password\" name=\"mailPassword\"
                     ng-model=\"mailSettings.mailPassword\"
                     ng-change=\"mailSettings.passwordChanged = true\"
                     title=\"{{ 'General_SmtpPassword'|translate|e('html_attr') }}\"
                     value=\"{{ mail.password ? '******' }}\" inline-help=\"{{ help|e('html_attr') }}\"
                     autocomplete=\"off\">
                </div>

                <div piwik-field uicontrol=\"select\" name=\"mailEncryption\"
                     ng-model=\"mailSettings.mailEncryption\"
                     title=\"{{ 'General_SmtpEncryption'|translate|e('html_attr') }}\"
                     options=\"{{ mailEncryptions|json_encode }}\"
                     value=\"{{ mail.encryption }}\" inline-help=\"{{ 'General_EncryptedSmtpTransport'|translate|e('html_attr') }}\">
                </div>
            </div>

            <div onconfirm=\"mailSettings.save()\" saving=\"mailSettings.isLoading\" piwik-save-button></div>
        </div>
    </div>
{% endif %}
<div piwik-content-block content-title=\"{{ 'CoreAdminHome_BrandingSettings'|translate|e('html_attr') }}\">

    <div piwik-form ng-controller=\"BrandingController as brandingSettings\">

        <p>{{ 'CoreAdminHome_CustomLogoHelpText'|translate }}</p>

        {% set help -%}
            {% set giveUsFeedbackText %}\"{{ 'General_GiveUsYourFeedback'|translate }}\"{% endset %}
            {{ 'CoreAdminHome_CustomLogoFeedbackInfo'|translate(giveUsFeedbackText,\"<a href='?module=CorePluginsAdmin&action=plugins' rel='noreferrer' target='_blank'>\",\"</a>\")|raw }}
        {%- endset %}

        <div piwik-field uicontrol=\"checkbox\" name=\"useCustomLogo\"
             ng-model=\"brandingSettings.enabled\"
             ng-change=\"brandingSettings.toggleCustomLogo()\"
             title=\"{{ 'CoreAdminHome_UseCustomLogo'|translate|e('html_attr') }}\"
             value=\"{% if branding.use_custom_logo == 1 %}1{% endif %}\" inline-help=\"{{ help|e('html_attr') }}\">
        </div>

        <div id=\"logoSettings\" ng-show=\"brandingSettings.enabled\">
            <form id=\"logoUploadForm\" method=\"post\" enctype=\"multipart/form-data\" action=\"index.php?module=CoreAdminHome&format=json&action=uploadCustomLogo\">
                {% if fileUploadEnabled %}
                    <input type=\"hidden\" name=\"token_auth\" value=\"{{ token_auth }}\"/>

                    {% if logosWriteable %}
                        <div class=\"alert alert-warning uploaderror\" style=\"display:none;\">
                            {{ 'CoreAdminHome_LogoUploadFailed'|translate }}
                        </div>

                        <div piwik-field uicontrol=\"file\" name=\"customLogo\"
                             ng-change=\"brandingSettings.updateLogo()\"
                             ng-model=\"brandingSettings.customLogo\"
                             title=\"{{ 'CoreAdminHome_LogoUpload'|translate|e('html_attr') }}\"
                             inline-help=\"{{ 'CoreAdminHome_LogoUploadHelp'|translate(\"JPG / PNG / GIF\", 110)|e('html_attr') }}\">
                        </div>

                        <div class=\"row\">
                            <div class=\"col s12\">
                                <img data-src=\"{{ pathUserLogo }}\" data-src-exists=\"{{ hasUserLogo ? '1':'0' }}\"
                                     id=\"currentLogo\" style=\"max-height: 150px\"/>
                            </div>
                        </div>

                        <div piwik-field uicontrol=\"file\" name=\"customFavicon\"
                             ng-change=\"brandingSettings.updateLogo()\"
                             ng-model=\"brandingSettings.customFavicon\"
                             title=\"{{ 'CoreAdminHome_FaviconUpload'|translate|e('html_attr') }}\"
                             inline-help=\"{{ 'CoreAdminHome_LogoUploadHelp'|translate(\"JPG / PNG / GIF\", 16)|e('html_attr') }}\">
                        </div>

                        <div class=\"row\">
                            <div class=\"col s12\">
                                <img data-src=\"{{ pathUserFavicon }}\" data-src-exists=\"{{ hasUserFavicon ? '1':'0' }}\"
                                     id=\"currentFavicon\" width=\"16\" height=\"16\"/>
                            </div>
                        </div>

                    {% else %}
                        <div class=\"alert alert-warning\">
                            {{ 'CoreAdminHome_LogoNotWriteableInstruction'
                                |translate(\"<code>\"~pathUserLogoDirectory~\"</code><br/>\", pathUserLogo ~\", \"~ pathUserLogoSmall ~\", \"~ pathUserLogoSVG ~\"\")|raw }}
                        </div>
                    {% endif %}
                {% else %}
                    <div class=\"alert alert-warning\">
                        {{ 'CoreAdminHome_FileUploadDisabled'|translate(\"file_uploads=1\") }}
                    </div>
                {% endif %}
            </form>
        </div>

        <div onconfirm=\"brandingSettings.save()\" saving=\"brandingSettings.isLoading\" piwik-save-button></div>
    </div>
</div>

<div piwik-content-block content-title=\"{{ 'CoreAdminHome_TrustedHostSettings'|translate|e('html_attr') }}\">
    <a name=\"trustedHostsSection\"></a>
    <div class=\"ui-confirm\" id=\"confirmTrustedHostChange\">
        <h2>{{ 'CoreAdminHome_TrustedHostConfirm'|translate }}</h2>
        <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
        <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
    </div>
    <div id='trustedHostSettings' piwik-trusted-hosts-setting='{{ trustedHosts|json_encode }}'>

        {% include \"@CoreHome/_warningInvalidHost.twig\" %}

        {% if not isGeneralSettingsAdminEnabled %}
            {{ 'CoreAdminHome_PiwikIsInstalledAt'|translate }}: {{ trustedHosts|join(\", \") }}
        {% else %}
            <div class=\"form-group row\">
                <label>{{ 'CoreAdminHome_ValidPiwikHostname'|translate }}</label>
            </div>
            <ul>
                <li ng-repeat=\"trustedHost in trustedHosts.hosts\">
                    <input ng-model=\"trustedHost.host\" type=\"text\"/>
                    <a href=\"javascript:;\" ng-click=\"trustedHosts.removeTrustedHost(\$index);\"
                       class=\"remove-trusted-host btn-flat btn-large\" title=\"{{ 'General_Delete'|translate }}\">
                        <span class=\"icon-minus\"></span>
                    </a>
                </li>
            </ul>

            <div class=\"add-trusted-host\">
                <input type=\"text\" ng-click=\"trustedHosts.addTrustedHost();\"
                       placeholder=\"{{ 'CoreAdminHome_AddNewTrustedHost'|translate|e('html_attr') }}\" readonly/>

                <a href=\"#\" ng-click=\"trustedHosts.addTrustedHost();\"
                   class=\"btn-flat btn-large\" title=\"{{ 'General_Add'|translate }}\">
                    <span class=\"icon-add\"></span>
                </a>
            </div>

            <div onconfirm=\"trustedHosts.save()\" saving=\"trustedHosts.isLoading\" piwik-save-button></div>
        {% endif %}
    </div>

</div>
{% if isDataPurgeSettingsEnabled %}
    <div piwik-content-block content-title=\"{{ 'PrivacyManager_DeleteDataSettings'|translate|e('html_attr') }}\">
        <p>{{ 'PrivacyManager_DeleteDataDescription'|translate }} {{ 'PrivacyManager_DeleteDataDescription2'|translate }}</p>
        <p>
            <a href='{{ linkTo({'module':\"PrivacyManager\", 'action':\"privacySettings\"}) }}#deleteLogsAnchor'>
                {{ 'PrivacyManager_ClickHereSettings'|translate(\"'\" ~ 'PrivacyManager_DeleteDataSettings'|translate ~ \"'\") }}
            </a>
        </p>
    </div>
{% endif %}

<div piwik-plugin-settings mode=\"admin\"></div>

{% endblock %}
", "@CoreAdminHome/generalSettings.twig", "/var/www/html/infonews/analytics/plugins/CoreAdminHome/templates/generalSettings.twig");
    }
}
