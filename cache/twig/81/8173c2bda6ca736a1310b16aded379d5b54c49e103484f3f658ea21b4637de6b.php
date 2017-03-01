<?php

/* partials/backup-manager-status.html.twig */
class __TwigTemplate_c6c3cdba7aba167ab57bd4a9a1b87e9a8fbfe880a8b918cd789183f3adfde9b2 extends Twig_Template
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
            echo "    ";
            $context["backuplast"] = $this->getAttribute(($context["backupmanager"] ?? null), "lastBackup", array(), "method");
            // line 3
            echo "\t";
            $context["storestatus"] = $this->getAttribute(($context["backupmanager"] ?? null), "storeStatus", array(), "method");
            echo "\t
\t";
            // line 4
            $context["backup_manager_url"] = (((($context["base_url_relative"] ?? null) . "/backup-manager.json/backuptask") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . twig_escape_filter($this->env, "backup", "html_attr"));
            // line 5
            echo "\t";
            $context["purge_manager_url"] = (((($context["base_url_relative"] ?? null) . "/backup-manager.json/backuptask") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . twig_escape_filter($this->env, "purge", "html_attr"));
            // line 6
            echo "    <div id=\"backup-maintenance\" class=\"dashboard-item dashboard-left\">
        <div class=\"secondary-accent default-box-shadow\">
            <h1>";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.BACKUP_OVERVIEW"), "html", null, true);
            echo "</h1>
            <div id=\"backup-manager-charts\" class=\"backup-update-charts\">
                <div id=\"storage-chart\" class=\"backups-chart\" data-chart-context=\"storage\" data-chart-type=\"pie\" data-chart-data=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("series" => array(0 => $this->getAttribute(($context["storestatus"] ?? null), "chart_fill", array()), 1 => $this->getAttribute(($context["storestatus"] ?? null), "chart_empty", array())))), "html_attr");
            echo "\">
                    <div class=\"chart-wrapper\">
                        <div id=\"chart-storage\" class=\"ct-chart-backup chart-loader\"><i class=\"fa fa-refresh fa-spin\"></i></div>
                        <span class=\"numeric hidden\"><span id=\"store-used\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute(($context["storestatus"] ?? null), "used", array()), "html", null, true);
            echo "</span><em>";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.STORAGE_USED")), "html", null, true);
            echo "</em></span>
                    </div>
                    <p class=\"js__storage-handled-description\">";
            // line 15
            echo twig_escape_filter($this->env, (($this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.STORAGE_CAPACITY") . ": ") . $this->getAttribute(($context["storestatus"] ?? null), "capacity", array())), "html", null, true);
            echo "</p>
                </div>
                <div id=\"lastbackup-chart\" class=\"backups-chart\" data-chart-context=\"lastbackup\" data-chart-type=\"pie\" data-chart-data=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("series" => array(0 => $this->getAttribute(($context["backuplast"] ?? null), "chart_fill", array()), 1 => $this->getAttribute(($context["backuplast"] ?? null), "chart_empty", array())))), "html_attr");
            echo "\">
                    <div class=\"chart-wrapper\">
                        <div id=\"chart-backup\" class=\"ct-chart-backup chart-loader\"><i class=\"fa fa-refresh fa-spin\"></i></div>
                        <span class=\"numeric hidden\" id=\"backupdaysindicator\">
\t\t\t\t\t\t";
            // line 21
            echo $this->getAttribute(($context["backuplast"] ?? null), "days", array());
            echo "
\t\t\t\t\t\t
\t\t\t\t\t\t<em id=\"backupdayslabel\">
\t\t\t\t\t\t";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute(($context["backuplast"] ?? null), "dayslabel", array()), "html", null, true);
            echo "
\t\t\t\t\t\t</em>
\t\t\t\t\t\t</span>
                    </div>
                    <p class=\"hidden\">";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.LAST_SITE_BACKUP"), "html", null, true);
            echo "</p>
                </div>
            </div>

            <div class=\"flush-bottom button-bar backup-manager-bar\">
\t\t\t\t<div class=\"button-group purge-buttons\">
\t\t\t\t\t<button data-purge-scope=\"\" data-purge=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["base_url_relative"] ?? null) . "/backup-manager.json/backuptask") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "purge"), 1 => "backup-form", 2 => "backup-nonce"), "method"), "html", null, true);
            echo "\" class=\"button hint--bottom\" data-hint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.PURGE_BUTTON_HINT"), "html", null, true);
            echo "\"><i class=\"fa fa-battery-";
            echo $this->getAttribute(($context["storestatus"] ?? null), "battery", array());
            echo "\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.PURGE"), "html", null, true);
            echo "</button>
\t\t\t\t\t<button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t<i class=\"fa fa-caret-down\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li><a data-purge-scope=\"tests\" data-purge=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["purge_manager_url"] ?? null) . "/scope") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "purgetests"), 1 => "backup-form", 2 => "backup-nonce"), "method"), "html", null, true);
            echo "\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.PURGE_TESTS"), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t";
            // line 40
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.maintenance", 1 => "admin.super"))) {
                // line 41
                echo "\t\t\t\t\t\t<li><a data-purge-scope=\"partial\" data-purge=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["purge_manager_url"] ?? null) . "/scope") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "purgepartial"), 1 => "backup-form", 2 => "backup-nonce"), "method"), "html", null, true);
                echo "\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.PURGE_PARTIAL"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t<li><a data-purge-scope=\"all\" data-purge=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["purge_manager_url"] ?? null) . "/scope") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "purgeall"), 1 => "backup-form", 2 => "backup-nonce"), "method"), "html", null, true);
                echo "\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.PURGE_ALL"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t<li><a data-purge-scope=\"pages\" data-purge=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["purge_manager_url"] ?? null) . "/scope") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "purgepages"), 1 => "backup-form", 2 => "backup-nonce"), "method"), "html", null, true);
                echo "\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.PURGE_PAGES"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t<li><a data-purge-scope=\"images\" data-purge=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["purge_manager_url"] ?? null) . "/scope") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "purgeimages"), 1 => "backup-form", 2 => "backup-nonce"), "method"), "html", null, true);
                echo "\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.PURGE_IMAGES"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t<li><a data-purge-scope=\"media\" data-purge=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["purge_manager_url"] ?? null) . "/scope") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "purgemedia"), 1 => "backup-form", 2 => "backup-nonce"), "method"), "html", null, true);
                echo "\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.PURGE_MEDIA"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t<li><a data-purge-scope=\"themes\" data-purge=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["purge_manager_url"] ?? null) . "/scope") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "purgethemes"), 1 => "backup-form", 2 => "backup-nonce"), "method"), "html", null, true);
                echo "\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.PURGE_THEMES"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t<li><a data-purge-scope=\"user\" data-purge=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["purge_manager_url"] ?? null) . "/scope") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "purgeuser"), 1 => "backup-form", 2 => "backup-nonce"), "method"), "html", null, true);
                echo "\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.PURGE_USER"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t<li><a data-purge-scope=\"data\" data-purge=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["purge_manager_url"] ?? null) . "/scope") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "purgedata"), 1 => "backup-form", 2 => "backup-nonce"), "method"), "html", null, true);
                echo "\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.PURGE_DATA"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t<li><a data-purge-scope=\"plugins\" data-purge=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["purge_manager_url"] ?? null) . "/scope") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "purgeplugins"), 1 => "backup-form", 2 => "backup-nonce"), "method"), "html", null, true);
                echo "\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.PURGE_PLUGINS"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t<li><a data-purge-scope=\"config\" data-purge=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["purge_manager_url"] ?? null) . "/scope") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "purgeconfig"), 1 => "backup-form", 2 => "backup-nonce"), "method"), "html", null, true);
                echo "\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.PURGE_CONFIG"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t<li><a data-purge-scope=\"system\" data-purge=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["purge_manager_url"] ?? null) . "/scope") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "purgesystem"), 1 => "backup-form", 2 => "backup-nonce"), "method"), "html", null, true);
                echo "\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.PURGE_SYSTEM"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t<li><a data-purge-scope=\"failed\" data-purge=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["purge_manager_url"] ?? null) . "/scope") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "purgefailed"), 1 => "backup-form", 2 => "backup-nonce"), "method"), "html", null, true);
                echo "\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.PURGE_FAILED"), "html", null, true);
                echo "</a></li>\t\t\t\t\t
\t\t\t\t\t\t";
            } elseif ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.backup-manager"))) {
                // line 54
                echo "\t\t\t\t\t\t<li><a data-purge-scope=\"failed\" data-purge=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["purge_manager_url"] ?? null) . "/scope") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "purgefailed"), 1 => "backup-form", 2 => "backup-nonce"), "method"), "html", null, true);
                echo "\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.PURGE_FAILED"), "html", null, true);
                echo "</a></li>\t\t\t\t\t
\t\t\t\t\t\t";
            }
            // line 56
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t";
            // line 60
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.maintenance", 1 => "admin.super"))) {
                // line 61
                echo "\t\t\t\t\t<button data-backup-type=\"\" data-backup=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["base_url_relative"] ?? null) . "/backup-manager.json/backuptask") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "backup"), 1 => "backup-form", 2 => "backup-nonce"), "method"), "html", null, true);
                echo "\" class=\"button\"><i class=\"fa fa-suitcase\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.BACKUP"), "html", null, true);
                echo "</button>
\t\t\t\t\t<button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t<i class=\"fa fa-caret-down\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li><a data-backup-scope=\"pages\" data-backup=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["backup_manager_url"] ?? null) . "/scope") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "pages"), 1 => "backup-form", 2 => "backup-nonce"), "method"), "html", null, true);
                echo "\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.BACKUP_PAGES"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t<li><a data-backup-scope=\"images\" data-backup=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["backup_manager_url"] ?? null) . "/scope") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "images"), 1 => "backup-form", 2 => "backup-nonce"), "method"), "html", null, true);
                echo "\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.BACKUP_IMAGES"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t<li><a data-backup-scope=\"media\" data-backup=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["backup_manager_url"] ?? null) . "/scope") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "media"), 1 => "backup-form", 2 => "backup-nonce"), "method"), "html", null, true);
                echo "\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.BACKUP_MEDIA"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t<li><a data-backup-scope=\"data\" data-backup=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["backup_manager_url"] ?? null) . "/scope") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "data"), 1 => "backup-form", 2 => "backup-nonce"), "method"), "html", null, true);
                echo "\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.BACKUP_DATA"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t<li><a data-backup-scope=\"user\" data-backup=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["backup_manager_url"] ?? null) . "/scope") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "user"), 1 => "backup-form", 2 => "backup-nonce"), "method"), "html", null, true);
                echo "\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.BACKUP_USER"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t<li><a data-backup-scope=\"themes\" data-backup=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["backup_manager_url"] ?? null) . "/scope") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "themes"), 1 => "backup-form", 2 => "backup-nonce"), "method"), "html", null, true);
                echo "\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.BACKUP_THEMES"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t<li><a data-backup-scope=\"plugins\" data-backup=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["backup_manager_url"] ?? null) . "/scope") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "plugins"), 1 => "backup-form", 2 => "backup-nonce"), "method"), "html", null, true);
                echo "\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.BACKUP_PLUGINS"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t<li><a data-backup-scope=\"config\" data-backup=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["backup_manager_url"] ?? null) . "/scope") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "config"), 1 => "backup-form", 2 => "backup-nonce"), "method"), "html", null, true);
                echo "\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.BACKUP_CONFIG"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t<li><a data-backup-scope=\"system\" data-backup=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["backup_manager_url"] ?? null) . "/scope") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "system"), 1 => "backup-form", 2 => "backup-nonce"), "method"), "html", null, true);
                echo "\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.BACKUP_SYSTEM"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t<li><a data-backup-scope=\"defaults\" data-backup=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["backup_manager_url"] ?? null) . "/scope") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "defaults"), 1 => "backup-form", 2 => "backup-nonce"), "method"), "html", null, true);
                echo "\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.BACKUP_DEFAULTS"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t";
            } elseif ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.backup-manager"))) {
                // line 78
                echo "\t\t\t\t\t<button data-backup-type=\"\" data-backup=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((((($context["base_url_relative"] ?? null) . "/backup-manager.json/backuptask") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "backup/scope") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param", array()), "sep", array())) . "pages"), 1 => "backup-form", 2 => "backup-nonce"), "method"), "html", null, true);
                echo "\" class=\"button\"><i class=\"fa fa-suitcase\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.BACKUP_PAGES"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.BACKUP_PAGES"), "html", null, true);
                echo "</button>
\t\t\t\t\t<button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t<i class=\"fa fa-caret-down\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li><a data-backup-scope=\"images\" data-backup=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["backup_manager_url"] ?? null) . "/scope") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "images"), 1 => "backup-form", 2 => "backup-nonce"), "method"), "html", null, true);
                echo "\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.BACKUP_IMAGES"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t<li><a data-backup-scope=\"media\" data-backup=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["backup_manager_url"] ?? null) . "/scope") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "media"), 1 => "backup-form", 2 => "backup-nonce"), "method"), "html", null, true);
                echo "\" href=\"#\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.BACKUP_MEDIA"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t";
            }
            // line 87
            echo "\t\t\t\t</div>
            </div>
        </div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/backup-manager-status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 87,  294 => 84,  288 => 83,  275 => 78,  267 => 75,  261 => 74,  255 => 73,  249 => 72,  243 => 71,  237 => 70,  231 => 69,  225 => 68,  219 => 67,  213 => 66,  202 => 61,  200 => 60,  194 => 56,  186 => 54,  179 => 52,  173 => 51,  167 => 50,  161 => 49,  155 => 48,  149 => 47,  143 => 46,  137 => 45,  131 => 44,  125 => 43,  119 => 42,  112 => 41,  110 => 40,  104 => 39,  90 => 34,  81 => 28,  74 => 24,  68 => 21,  61 => 17,  56 => 15,  49 => 13,  43 => 10,  38 => 8,  34 => 6,  31 => 5,  29 => 4,  24 => 3,  21 => 2,  19 => 1,);
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
    {% set backuplast = backupmanager.lastBackup() %}
\t{% set storestatus = backupmanager.storeStatus() %}\t
\t{% set backup_manager_url = base_url_relative ~ '/backup-manager.json/backuptask' ~ config.system.param_sep ~ 'backup'|e('html_attr') %}
\t{% set purge_manager_url = base_url_relative ~ '/backup-manager.json/backuptask' ~ config.system.param_sep ~ 'purge'|e('html_attr') %}
    <div id=\"backup-maintenance\" class=\"dashboard-item dashboard-left\">
        <div class=\"secondary-accent default-box-shadow\">
            <h1>{{ \"PLUGIN_BACKUP_MANAGER.BACKUP_OVERVIEW\"|tu }}</h1>
            <div id=\"backup-manager-charts\" class=\"backup-update-charts\">
                <div id=\"storage-chart\" class=\"backups-chart\" data-chart-context=\"storage\" data-chart-type=\"pie\" data-chart-data=\"{{ {'series': [storestatus.chart_fill, storestatus.chart_empty]}|json_encode|e('html_attr') }}\">
                    <div class=\"chart-wrapper\">
                        <div id=\"chart-storage\" class=\"ct-chart-backup chart-loader\"><i class=\"fa fa-refresh fa-spin\"></i></div>
                        <span class=\"numeric hidden\"><span id=\"store-used\">{{ storestatus.used }}</span><em>{{ \"PLUGIN_BACKUP_MANAGER.STORAGE_USED\"|tu|lower }}</em></span>
                    </div>
                    <p class=\"js__storage-handled-description\">{{ \"PLUGIN_BACKUP_MANAGER.STORAGE_CAPACITY\"|tu ~ ': ' ~ storestatus.capacity }}</p>
                </div>
                <div id=\"lastbackup-chart\" class=\"backups-chart\" data-chart-context=\"lastbackup\" data-chart-type=\"pie\" data-chart-data=\"{{ {'series': [backuplast.chart_fill, backuplast.chart_empty]}|json_encode|e('html_attr') }}\">
                    <div class=\"chart-wrapper\">
                        <div id=\"chart-backup\" class=\"ct-chart-backup chart-loader\"><i class=\"fa fa-refresh fa-spin\"></i></div>
                        <span class=\"numeric hidden\" id=\"backupdaysindicator\">
\t\t\t\t\t\t{{ backuplast.days|raw }}
\t\t\t\t\t\t
\t\t\t\t\t\t<em id=\"backupdayslabel\">
\t\t\t\t\t\t{{ backuplast.dayslabel}}
\t\t\t\t\t\t</em>
\t\t\t\t\t\t</span>
                    </div>
                    <p class=\"hidden\">{{ \"PLUGIN_BACKUP_MANAGER.LAST_SITE_BACKUP\"|tu }}</p>
                </div>
            </div>

            <div class=\"flush-bottom button-bar backup-manager-bar\">
\t\t\t\t<div class=\"button-group purge-buttons\">
\t\t\t\t\t<button data-purge-scope=\"\" data-purge=\"{{ uri.addNonce(base_url_relative ~ '/backup-manager.json/backuptask' ~ config.system.param_sep ~ 'purge', 'backup-form', 'backup-nonce') }}\" class=\"button hint--bottom\" data-hint=\"{{ \"PLUGIN_BACKUP_MANAGER.PURGE_BUTTON_HINT\"|tu }}\"><i class=\"fa fa-battery-{{storestatus.battery|raw}}\"></i> {{ \"PLUGIN_BACKUP_MANAGER.PURGE\"|tu }}</button>
\t\t\t\t\t<button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t<i class=\"fa fa-caret-down\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li><a data-purge-scope=\"tests\" data-purge=\"{{  uri.addNonce(purge_manager_url ~'/scope' ~ config.system.param_sep ~ 'purgetests', 'backup-form', 'backup-nonce') }}\" href=\"#\">{{ \"PLUGIN_BACKUP_MANAGER.PURGE_TESTS\"|tu }}</a></li>
\t\t\t\t\t\t{% if authorize(['admin.maintenance', 'admin.super']) %}
\t\t\t\t\t\t<li><a data-purge-scope=\"partial\" data-purge=\"{{ uri.addNonce(purge_manager_url ~'/scope' ~ config.system.param_sep ~ 'purgepartial', 'backup-form', 'backup-nonce') }}\" href=\"#\">{{ \"PLUGIN_BACKUP_MANAGER.PURGE_PARTIAL\"|tu }}</a></li>
\t\t\t\t\t\t<li><a data-purge-scope=\"all\" data-purge=\"{{ uri.addNonce(purge_manager_url ~'/scope' ~ config.system.param_sep ~ 'purgeall', 'backup-form', 'backup-nonce') }}\" href=\"#\">{{ \"PLUGIN_BACKUP_MANAGER.PURGE_ALL\"|tu }}</a></li>
\t\t\t\t\t\t<li><a data-purge-scope=\"pages\" data-purge=\"{{ uri.addNonce(purge_manager_url ~'/scope' ~ config.system.param_sep ~ 'purgepages', 'backup-form', 'backup-nonce') }}\" href=\"#\">{{ \"PLUGIN_BACKUP_MANAGER.PURGE_PAGES\"|tu }}</a></li>
\t\t\t\t\t\t<li><a data-purge-scope=\"images\" data-purge=\"{{ uri.addNonce(purge_manager_url ~'/scope' ~ config.system.param_sep ~ 'purgeimages', 'backup-form', 'backup-nonce') }}\" href=\"#\">{{ \"PLUGIN_BACKUP_MANAGER.PURGE_IMAGES\"|tu }}</a></li>
\t\t\t\t\t\t<li><a data-purge-scope=\"media\" data-purge=\"{{ uri.addNonce(purge_manager_url ~'/scope' ~ config.system.param_sep ~ 'purgemedia', 'backup-form', 'backup-nonce') }}\" href=\"#\">{{ \"PLUGIN_BACKUP_MANAGER.PURGE_MEDIA\"|tu }}</a></li>
\t\t\t\t\t\t<li><a data-purge-scope=\"themes\" data-purge=\"{{ uri.addNonce(purge_manager_url ~'/scope' ~ config.system.param_sep ~ 'purgethemes', 'backup-form', 'backup-nonce') }}\" href=\"#\">{{ \"PLUGIN_BACKUP_MANAGER.PURGE_THEMES\"|tu }}</a></li>
\t\t\t\t\t\t<li><a data-purge-scope=\"user\" data-purge=\"{{ uri.addNonce(purge_manager_url ~'/scope' ~ config.system.param_sep ~ 'purgeuser', 'backup-form', 'backup-nonce') }}\" href=\"#\">{{ \"PLUGIN_BACKUP_MANAGER.PURGE_USER\"|tu }}</a></li>
\t\t\t\t\t\t<li><a data-purge-scope=\"data\" data-purge=\"{{ uri.addNonce(purge_manager_url ~'/scope' ~ config.system.param_sep ~ 'purgedata', 'backup-form', 'backup-nonce') }}\" href=\"#\">{{ \"PLUGIN_BACKUP_MANAGER.PURGE_DATA\"|tu }}</a></li>
\t\t\t\t\t\t<li><a data-purge-scope=\"plugins\" data-purge=\"{{ uri.addNonce(purge_manager_url ~'/scope' ~ config.system.param_sep ~ 'purgeplugins', 'backup-form', 'backup-nonce') }}\" href=\"#\">{{ \"PLUGIN_BACKUP_MANAGER.PURGE_PLUGINS\"|tu }}</a></li>
\t\t\t\t\t\t<li><a data-purge-scope=\"config\" data-purge=\"{{ uri.addNonce(purge_manager_url ~'/scope' ~ config.system.param_sep ~ 'purgeconfig', 'backup-form', 'backup-nonce') }}\" href=\"#\">{{ \"PLUGIN_BACKUP_MANAGER.PURGE_CONFIG\"|tu }}</a></li>
\t\t\t\t\t\t<li><a data-purge-scope=\"system\" data-purge=\"{{ uri.addNonce(purge_manager_url ~'/scope' ~ config.system.param_sep ~ 'purgesystem', 'backup-form', 'backup-nonce') }}\" href=\"#\">{{ \"PLUGIN_BACKUP_MANAGER.PURGE_SYSTEM\"|tu }}</a></li>
\t\t\t\t\t\t<li><a data-purge-scope=\"failed\" data-purge=\"{{ uri.addNonce(purge_manager_url ~'/scope' ~ config.system.param_sep ~ 'purgefailed', 'backup-form', 'backup-nonce') }}\" href=\"#\">{{ \"PLUGIN_BACKUP_MANAGER.PURGE_FAILED\"|tu }}</a></li>\t\t\t\t\t
\t\t\t\t\t\t{% elseif authorize(['admin.backup-manager']) %}
\t\t\t\t\t\t<li><a data-purge-scope=\"failed\" data-purge=\"{{ uri.addNonce(purge_manager_url ~'/scope' ~ config.system.param_sep ~ 'purgefailed', 'backup-form', 'backup-nonce') }}\" href=\"#\">{{ \"PLUGIN_BACKUP_MANAGER.PURGE_FAILED\"|tu }}</a></li>\t\t\t\t\t
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t{% if authorize(['admin.maintenance', 'admin.super']) %}
\t\t\t\t\t<button data-backup-type=\"\" data-backup=\"{{ uri.addNonce(base_url_relative ~ '/backup-manager.json/backuptask' ~ config.system.param_sep ~ 'backup', 'backup-form', 'backup-nonce') }}\" class=\"button\"><i class=\"fa fa-suitcase\"></i> {{ \"PLUGIN_BACKUP_MANAGER.BACKUP\"|tu }}</button>
\t\t\t\t\t<button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t<i class=\"fa fa-caret-down\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li><a data-backup-scope=\"pages\" data-backup=\"{{  uri.addNonce(backup_manager_url ~'/scope' ~ config.system.param_sep ~ 'pages', 'backup-form', 'backup-nonce') }}\" href=\"#\">{{ \"PLUGIN_BACKUP_MANAGER.BACKUP_PAGES\"|tu }}</a></li>
\t\t\t\t\t\t<li><a data-backup-scope=\"images\" data-backup=\"{{ uri.addNonce(backup_manager_url ~'/scope' ~ config.system.param_sep ~ 'images', 'backup-form', 'backup-nonce') }}\" href=\"#\">{{ \"PLUGIN_BACKUP_MANAGER.BACKUP_IMAGES\"|tu }}</a></li>
\t\t\t\t\t\t<li><a data-backup-scope=\"media\" data-backup=\"{{ uri.addNonce(backup_manager_url ~'/scope' ~ config.system.param_sep ~ 'media', 'backup-form', 'backup-nonce') }}\" href=\"#\">{{ \"PLUGIN_BACKUP_MANAGER.BACKUP_MEDIA\"|tu }}</a></li>
\t\t\t\t\t\t<li><a data-backup-scope=\"data\" data-backup=\"{{ uri.addNonce(backup_manager_url ~'/scope' ~ config.system.param_sep ~ 'data', 'backup-form', 'backup-nonce') }}\" href=\"#\">{{ \"PLUGIN_BACKUP_MANAGER.BACKUP_DATA\"|tu }}</a></li>
\t\t\t\t\t\t<li><a data-backup-scope=\"user\" data-backup=\"{{ uri.addNonce(backup_manager_url ~'/scope' ~ config.system.param_sep ~ 'user', 'backup-form', 'backup-nonce') }}\" href=\"#\">{{ \"PLUGIN_BACKUP_MANAGER.BACKUP_USER\"|tu }}</a></li>
\t\t\t\t\t\t<li><a data-backup-scope=\"themes\" data-backup=\"{{ uri.addNonce(backup_manager_url ~'/scope' ~ config.system.param_sep ~ 'themes', 'backup-form', 'backup-nonce') }}\" href=\"#\">{{ \"PLUGIN_BACKUP_MANAGER.BACKUP_THEMES\"|tu }}</a></li>
\t\t\t\t\t\t<li><a data-backup-scope=\"plugins\" data-backup=\"{{ uri.addNonce(backup_manager_url ~'/scope' ~ config.system.param_sep ~ 'plugins', 'backup-form', 'backup-nonce') }}\" href=\"#\">{{ \"PLUGIN_BACKUP_MANAGER.BACKUP_PLUGINS\"|tu }}</a></li>
\t\t\t\t\t\t<li><a data-backup-scope=\"config\" data-backup=\"{{ uri.addNonce(backup_manager_url ~'/scope' ~ config.system.param_sep ~ 'config', 'backup-form', 'backup-nonce') }}\" href=\"#\">{{ \"PLUGIN_BACKUP_MANAGER.BACKUP_CONFIG\"|tu }}</a></li>
\t\t\t\t\t\t<li><a data-backup-scope=\"system\" data-backup=\"{{ uri.addNonce(backup_manager_url ~'/scope' ~ config.system.param_sep ~ 'system', 'backup-form', 'backup-nonce') }}\" href=\"#\">{{ \"PLUGIN_BACKUP_MANAGER.BACKUP_SYSTEM\"|tu }}</a></li>
\t\t\t\t\t\t<li><a data-backup-scope=\"defaults\" data-backup=\"{{ uri.addNonce(backup_manager_url ~'/scope' ~ config.system.param_sep ~ 'defaults', 'backup-form', 'backup-nonce') }}\" href=\"#\">{{ \"PLUGIN_BACKUP_MANAGER.BACKUP_DEFAULTS\"|tu }}</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t{% elseif authorize(['admin.backup-manager']) %}
\t\t\t\t\t<button data-backup-type=\"\" data-backup=\"{{ uri.addNonce(base_url_relative ~ '/backup-manager.json/backuptask' ~ config.system.param_sep ~ 'backup/scope' ~ config.system.param.sep ~ 'pages', 'backup-form', 'backup-nonce') }}\" class=\"button\"><i class=\"fa fa-suitcase\"></i> {{ \"PLUGIN_BACKUP_MANAGER.BACKUP_PAGES\"|tu }}: {{ \"PLUGIN_BACKUP_MANAGER.BACKUP_PAGES\"|tu }}</button>
\t\t\t\t\t<button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t<i class=\"fa fa-caret-down\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li><a data-backup-scope=\"images\" data-backup=\"{{ uri.addNonce(backup_manager_url ~'/scope' ~ config.system.param_sep ~ 'images', 'backup-form', 'backup-nonce') }}\" href=\"#\">{{ \"PLUGIN_BACKUP_MANAGER.BACKUP_IMAGES\"|tu }}</a></li>
\t\t\t\t\t\t<li><a data-backup-scope=\"media\" data-backup=\"{{ uri.addNonce(backup_manager_url ~'/scope' ~ config.system.param_sep ~ 'media', 'backup-form', 'backup-nonce') }}\" href=\"#\">{{ \"PLUGIN_BACKUP_MANAGER.BACKUP_MEDIA\"|tu }}</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
            </div>
        </div>
\t</div>
{% endif %}
", "partials/backup-manager-status.html.twig", "/Applications/MAMP/htdocs/grav-electric-vehicles/user/plugins/backup-manager/admin/templates/partials/backup-manager-status.html.twig");
    }
}
