<?php

/* partials/backup-manager-laststatus.html.twig */
class __TwigTemplate_e466454cffe1270eaf8edfc15ee19d0252584032c8475c2049cfb9950ef6fd4c extends Twig_Template
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
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.backup-manager", 1 => "admin.maintenance", 2 => "admin.super"))) {
            // line 2
            echo "    <div id=\"backup-insights\" class=\"dashboard-item dashboard-right\">
        <div class=\"primary-accent default-box-shadow\">
            <h1>";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.INSIGHTS"), "html", null, true);
            echo " 
\t\t\t\t";
            // line 5
            if ($this->getAttribute(($context["backupmanager"] ?? null), "testmode", array())) {
                // line 6
                echo "\t\t\t\t\t<a id=\"download-backup\" href=\"\" class=\"button hidden\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.DOWNLOAD_TEST"), "html", null, true);
                echo "</a>\t\t\t\t
\t\t\t\t";
            } else {
                // line 8
                echo "\t\t\t\t\t<a id=\"download-backup\" href=\"\" class=\"button hidden\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.BACKUP_DOWNLOAD"), "html", null, true);
                echo "</a>\t\t\t\t
\t\t\t\t";
            }
            // line 9
            echo "\t\t\t
\t\t\t</h1>
            <div class=\"backup-update-charts\">
\t\t\t    <div id=\"purgeStats\" class=\"hidden\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.PURGE_TYPE"), "html", null, true);
            echo "</i>
\t\t\t\t\t\t<b id=\"purge-type\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.STORE_LOCATION"), "html", null, true);
            echo "</i>
\t\t\t\t\t\t<b id=\"store-location\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.STORAGE_CAPACITY"), "html", null, true);
            echo "</i>
\t\t\t\t\t\t<b id=\"store-capacity\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.STORAGE_USED"), "html", null, true);
            echo "</i>
\t\t\t\t\t\t<b id=\"storage-used\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.KEEP_DAYS"), "html", null, true);
            echo "</i>
\t\t\t\t\t\t<b id=\"keep-days\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<i class=\"hint--bottom-left\" data-hint=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.STORE_FILES_DELETED_HINT"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.STORE_FILES_DELETED"), "html", null, true);
            echo "</i>
\t\t\t\t\t\t<b id=\"files-deleted\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.PURGED_BYTES"), "html", null, true);
            echo "</i>
\t\t\t\t\t\t<b id=\"purged-bytes\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.FILES_OVER_MAX_DAYS"), "html", null, true);
            echo "</i>
\t\t\t\t\t\t<b id=\"files-over-days\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.FILES_OVER_MAX_CAPACITY"), "html", null, true);
            echo "</i>
\t\t\t\t\t\t<b id=\"files-over-capacity\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div id=\"backupStats\" class=\"hidden\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.BACKUP_TYPE"), "html", null, true);
            echo "</i>
\t\t\t\t\t\t<b id=\"backup-type\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.ZIP_STATUS"), "html", null, true);
            echo "</i>
\t\t\t\t\t\t<b id=\"zip-status\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.EXCLUDED_FILES"), "html", null, true);
            echo "</i>
\t\t\t\t\t\t<b id=\"excluded-files\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.BYTES_TO_ZIP"), "html", null, true);
            echo "</i>
\t\t\t\t\t\t<b id=\"bytes-to-zip\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.BYTES_ZIPPED"), "html", null, true);
            echo "</i>
\t\t\t\t\t\t<b id=\"bytes-zipped\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.SAVINGS"), "html", null, true);
            echo "</i>
\t\t\t\t\t\t<b id=\"savings\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.RATIO"), "html", null, true);
            echo "</i>
\t\t\t\t\t\t<b id=\"ratio\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.DURATION"), "html", null, true);
            echo "</i>
\t\t\t\t\t\t<b id=\"duration\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.PROCESS_TIMEOUT"), "html", null, true);
            echo "</i>
\t\t\t\t\t\t<b id=\"process-timeout\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
                <div class=\"ct-chart-backup chart-loader hidden\"><i class=\"fa fa-refresh fa-spin\"></i></div>
            </div>
\t\t\t<div class=\"flush-bottom button-bar stats-bar backup-manager-bar\">
\t\t\t\t<span id=\"partialbackups\" class=\"stat\">
\t\t\t\t\t<b id=\"store-partials\" style=\"font-size:1.8rem\">";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute(($context["backupmanager"] ?? null), "getPartials", array()), "html", null, true);
            echo "</b>
\t\t\t\t\t<i>";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.PARTIAL_BACKUPS"), "html", null, true);
            echo "</i>
\t\t\t\t</span>
\t\t\t\t<span id=\"sitebackups\" class=\"stat\">
\t\t\t\t\t<b id=\"store-instance\" style=\"font-size:1.8rem\">";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute(($context["backupmanager"] ?? null), "getInstance", array()), "html", null, true);
            echo "</b>
\t\t\t\t\t<i>";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.SITE_BACKUPS"), "html", null, true);
            echo "</i>
\t\t\t\t</span>
\t\t\t\t<span id=\"monthbackups\" class=\"stat\">
\t\t\t\t\t<b id=\"store-period\" style=\"font-size:1.8rem\">";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute(($context["backupmanager"] ?? null), "getPeriod", array()), "html", null, true);
            echo "</b>
\t\t\t\t\t<i class=\"hint--bottom-right\" data-hint=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.LAST_SEVEN_DAYS"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.LAST_7_DAYS"), "html", null, true);
            echo "</i>
\t\t\t\t</span>
\t\t\t\t<span id=\"testbackups\" class=\"stat\">
\t\t\t\t\t<b id=\"store-tests\" style=\"font-size:1.8rem\">";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute(($context["backupmanager"] ?? null), "getTests", array()), "html", null, true);
            echo "</b>
\t\t\t\t\t<i>";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.TEST_BACKUPS"), "html", null, true);
            echo "</i>
\t\t\t\t</span>
\t\t\t\t<span id=\"allbackups\" class=\"stat\">
\t\t\t\t\t<b id=\"store-failed\" style=\"font-size:1.8rem\">";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute(($context["backupmanager"] ?? null), "getFailed", array()), "html", null, true);
            echo "</b>
\t\t\t\t\t<i class=\"hint--bottom-left\" data-hint=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.FAILED_BACKUPS_HINT"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.FAILED_BACKUPS"), "html", null, true);
            echo "</i>
\t\t\t\t</span>
\t\t\t</div>
\t\t\t
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/backup-manager-laststatus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 110,  227 => 109,  221 => 106,  217 => 105,  209 => 102,  205 => 101,  199 => 98,  195 => 97,  189 => 94,  185 => 93,  173 => 84,  166 => 80,  159 => 76,  152 => 72,  145 => 68,  138 => 64,  131 => 60,  124 => 56,  117 => 52,  108 => 46,  101 => 42,  94 => 38,  85 => 34,  78 => 30,  71 => 26,  64 => 22,  57 => 18,  50 => 14,  43 => 9,  37 => 8,  31 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if authorize(['admin.backup-manager', 'admin.maintenance', 'admin.super']) %}
    <div id=\"backup-insights\" class=\"dashboard-item dashboard-right\">
        <div class=\"primary-accent default-box-shadow\">
            <h1>{{ \"PLUGIN_BACKUP_MANAGER.INSIGHTS\"|tu }} 
\t\t\t\t{% if backupmanager.testmode %}
\t\t\t\t\t<a id=\"download-backup\" href=\"\" class=\"button hidden\">{{ \"PLUGIN_BACKUP_MANAGER.DOWNLOAD_TEST\"|tu }}</a>\t\t\t\t
\t\t\t\t{% else %}
\t\t\t\t\t<a id=\"download-backup\" href=\"\" class=\"button hidden\">{{ \"PLUGIN_BACKUP_MANAGER.BACKUP_DOWNLOAD\"|tu }}</a>\t\t\t\t
\t\t\t\t{% endif %}\t\t\t
\t\t\t</h1>
            <div class=\"backup-update-charts\">
\t\t\t    <div id=\"purgeStats\" class=\"hidden\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>{{ \"PLUGIN_BACKUP_MANAGER.PURGE_TYPE\"|tu }}</i>
\t\t\t\t\t\t<b id=\"purge-type\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>{{ \"PLUGIN_BACKUP_MANAGER.STORE_LOCATION\"|tu }}</i>
\t\t\t\t\t\t<b id=\"store-location\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>{{ \"PLUGIN_BACKUP_MANAGER.STORAGE_CAPACITY\"|tu }}</i>
\t\t\t\t\t\t<b id=\"store-capacity\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>{{ \"PLUGIN_BACKUP_MANAGER.STORAGE_USED\"|tu }}</i>
\t\t\t\t\t\t<b id=\"storage-used\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>{{ \"PLUGIN_BACKUP_MANAGER.KEEP_DAYS\"|tu }}</i>
\t\t\t\t\t\t<b id=\"keep-days\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<i class=\"hint--bottom-left\" data-hint=\"{{ \"PLUGIN_BACKUP_MANAGER.STORE_FILES_DELETED_HINT\"|tu }}\">{{ \"PLUGIN_BACKUP_MANAGER.STORE_FILES_DELETED\"|tu }}</i>
\t\t\t\t\t\t<b id=\"files-deleted\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>{{ \"PLUGIN_BACKUP_MANAGER.PURGED_BYTES\"|tu }}</i>
\t\t\t\t\t\t<b id=\"purged-bytes\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>{{ \"PLUGIN_BACKUP_MANAGER.FILES_OVER_MAX_DAYS\"|tu }}</i>
\t\t\t\t\t\t<b id=\"files-over-days\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>{{ \"PLUGIN_BACKUP_MANAGER.FILES_OVER_MAX_CAPACITY\"|tu }}</i>
\t\t\t\t\t\t<b id=\"files-over-capacity\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div id=\"backupStats\" class=\"hidden\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>{{ \"PLUGIN_BACKUP_MANAGER.BACKUP_TYPE\"|tu }}</i>
\t\t\t\t\t\t<b id=\"backup-type\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>{{ \"PLUGIN_BACKUP_MANAGER.ZIP_STATUS\"|tu }}</i>
\t\t\t\t\t\t<b id=\"zip-status\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>{{ \"PLUGIN_BACKUP_MANAGER.EXCLUDED_FILES\"|tu }}</i>
\t\t\t\t\t\t<b id=\"excluded-files\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>{{ \"PLUGIN_BACKUP_MANAGER.BYTES_TO_ZIP\"|tu }}</i>
\t\t\t\t\t\t<b id=\"bytes-to-zip\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>{{ \"PLUGIN_BACKUP_MANAGER.BYTES_ZIPPED\"|tu }}</i>
\t\t\t\t\t\t<b id=\"bytes-zipped\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>{{ \"PLUGIN_BACKUP_MANAGER.SAVINGS\"|tu }}</i>
\t\t\t\t\t\t<b id=\"savings\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>{{ \"PLUGIN_BACKUP_MANAGER.RATIO\"|tu }}</i>
\t\t\t\t\t\t<b id=\"ratio\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>{{ \"PLUGIN_BACKUP_MANAGER.DURATION\"|tu }}</i>
\t\t\t\t\t\t<b id=\"duration\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t<div>
\t\t\t\t\t\t<i>{{ \"PLUGIN_BACKUP_MANAGER.PROCESS_TIMEOUT\"|tu }}</i>
\t\t\t\t\t\t<b id=\"process-timeout\"></b>\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
                <div class=\"ct-chart-backup chart-loader hidden\"><i class=\"fa fa-refresh fa-spin\"></i></div>
            </div>
\t\t\t<div class=\"flush-bottom button-bar stats-bar backup-manager-bar\">
\t\t\t\t<span id=\"partialbackups\" class=\"stat\">
\t\t\t\t\t<b id=\"store-partials\" style=\"font-size:1.8rem\">{{ backupmanager.getPartials }}</b>
\t\t\t\t\t<i>{{ \"PLUGIN_BACKUP_MANAGER.PARTIAL_BACKUPS\"|tu }}</i>
\t\t\t\t</span>
\t\t\t\t<span id=\"sitebackups\" class=\"stat\">
\t\t\t\t\t<b id=\"store-instance\" style=\"font-size:1.8rem\">{{ backupmanager.getInstance }}</b>
\t\t\t\t\t<i>{{ \"PLUGIN_BACKUP_MANAGER.SITE_BACKUPS\"|tu }}</i>
\t\t\t\t</span>
\t\t\t\t<span id=\"monthbackups\" class=\"stat\">
\t\t\t\t\t<b id=\"store-period\" style=\"font-size:1.8rem\">{{ backupmanager.getPeriod }}</b>
\t\t\t\t\t<i class=\"hint--bottom-right\" data-hint=\"{{ \"PLUGIN_BACKUP_MANAGER.LAST_SEVEN_DAYS\"|tu }}\">{{ \"PLUGIN_BACKUP_MANAGER.LAST_7_DAYS\"|tu }}</i>
\t\t\t\t</span>
\t\t\t\t<span id=\"testbackups\" class=\"stat\">
\t\t\t\t\t<b id=\"store-tests\" style=\"font-size:1.8rem\">{{ backupmanager.getTests }}</b>
\t\t\t\t\t<i>{{ \"PLUGIN_BACKUP_MANAGER.TEST_BACKUPS\"|tu }}</i>
\t\t\t\t</span>
\t\t\t\t<span id=\"allbackups\" class=\"stat\">
\t\t\t\t\t<b id=\"store-failed\" style=\"font-size:1.8rem\">{{ backupmanager.getFailed }}</b>
\t\t\t\t\t<i class=\"hint--bottom-left\" data-hint=\"{{ \"PLUGIN_BACKUP_MANAGER.FAILED_BACKUPS_HINT\"|tu }}\">{{ \"PLUGIN_BACKUP_MANAGER.FAILED_BACKUPS\"|tu }}</i>
\t\t\t\t</span>
\t\t\t</div>
\t\t\t
        </div>
    </div>
{% endif %}
", "partials/backup-manager-laststatus.html.twig", "/Applications/MAMP/htdocs/grav-electric-vehicles/user/plugins/backup-manager/admin/templates/partials/backup-manager-laststatus.html.twig");
    }
}
