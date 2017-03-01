<?php

/* backup-manager.html.twig */
class __TwigTemplate_a28f8762c56db11148da2aa52c16b3c0f44248e6805f3592fc2ac34052597a2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "backup-manager.html.twig", 1);
        $this->blocks = array(
            'titlebar' => array($this, 'block_titlebar'),
            'widgets' => array($this, 'block_widgets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        if ($this->getAttribute(($context["admin"] ?? null), "route", array())) {
            // line 3
            $context["context"] = $this->getAttribute(($context["admin"] ?? null), "page", array(0 => true), "method");
        }
        // line 5
        $context["storestatus"] = $this->getAttribute(($context["backupmanager"] ?? null), "storeStatus", array(), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_titlebar($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"button-bar\">
\t
\t\t<a id=\"force-purge\" data-purge-type=\"\" data-purge=\"\" class=\"button hidden hint--bottom-left\" data-hint=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.EXECUTE_PURGE_HINT"), "html", null, true);
        echo "\"><i class=\"fa fa-battery-";
        echo $this->getAttribute(($context["storestatus"] ?? null), "battery", array());
        echo "\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.EXECUTE_PURGE"), "html", null, true);
        echo "<span></span></a>
\t\t<a id=\"force-backup\" data-backup-type=\"\" data-backup=\"\" class=\"button hidden hint--bottom-left\" data-hint=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.EXECUTE_BACKUP_HINT"), "html", null, true);
        echo "\"><i class=\"fa fa-suitcase\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.EXECUTE_BACKUP"), "html", null, true);
        echo "<span></span></a>
\t\t";
        // line 12
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.maintenance", 1 => "admin.super"))) {
            // line 13
            echo "\t\t\t<a class=\"button bm-settings\" href=\"";
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/plugins/backup-manager\"><i class=\"fa fa-gavel\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.SETTINGS"), "html", null, true);
            echo "</a>
\t\t";
        }
        // line 14
        echo "\t\t
\t\t<a class=\"button\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "\"><i class=\"fa fa-reply\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
        echo "</a>
\t</div>
    <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.BACKUP_MANAGER"), "html", null, true);
        echo " - 
\t";
        // line 18
        if ($this->getAttribute(($context["backupmanager"] ?? null), "testmode", array())) {
            // line 19
            echo "\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.TEST_MODE_INDICATOR"), "html", null, true);
            echo "
\t";
        } else {
            // line 21
            echo "\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.LIVE_MODE_INDICATOR"), "html", null, true);
            echo "
\t";
        }
        // line 23
        echo "\t</h1>
";
    }

    // line 26
    public function block_widgets($context, array $blocks = array())
    {
        // line 27
        echo "\t<div id=\"admin-dashboard\">
\t\t<div class=\"dashboard-item-flex\">
\t\t\t";
        // line 29
        $this->loadTemplate("partials/backup-manager-status.html.twig", "backup-manager.html.twig", 29)->display($context);
        // line 30
        echo "\t\t</div>
\t\t<div class=\"dashboard-item-flex\">
\t\t\t";
        // line 32
        $this->loadTemplate("partials/backup-manager-laststatus.html.twig", "backup-manager.html.twig", 32)->display($context);
        // line 33
        echo "\t\t</div>
\t</div>

";
    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        $this->loadTemplate("partials/backup-manager-backups.html.twig", "backup-manager.html.twig", 38)->display($context);
        // line 39
        echo "
\t<div class=\"page-backup\">
\t</div>
";
    }

    public function getTemplateName()
    {
        return "backup-manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 39,  127 => 38,  124 => 37,  117 => 33,  115 => 32,  111 => 30,  109 => 29,  105 => 27,  102 => 26,  97 => 23,  91 => 21,  85 => 19,  83 => 18,  79 => 17,  72 => 15,  69 => 14,  61 => 13,  59 => 12,  53 => 11,  45 => 10,  41 => 8,  38 => 7,  34 => 1,  32 => 5,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}
{% if admin.route %}
    {% set context = admin.page(true) %}
{% endif %}
{% set storestatus = backupmanager.storeStatus() %}

{% block titlebar %}
\t<div class=\"button-bar\">
\t
\t\t<a id=\"force-purge\" data-purge-type=\"\" data-purge=\"\" class=\"button hidden hint--bottom-left\" data-hint=\"{{ \"PLUGIN_BACKUP_MANAGER.EXECUTE_PURGE_HINT\"|tu }}\"><i class=\"fa fa-battery-{{storestatus.battery|raw}}\"></i> {{ \"PLUGIN_BACKUP_MANAGER.EXECUTE_PURGE\"|tu }}<span></span></a>
\t\t<a id=\"force-backup\" data-backup-type=\"\" data-backup=\"\" class=\"button hidden hint--bottom-left\" data-hint=\"{{ \"PLUGIN_BACKUP_MANAGER.EXECUTE_BACKUP_HINT\"|tu }}\"><i class=\"fa fa-suitcase\"></i> {{ \"PLUGIN_BACKUP_MANAGER.EXECUTE_BACKUP\"|tu }}<span></span></a>
\t\t{% if authorize(['admin.maintenance', 'admin.super']) %}
\t\t\t<a class=\"button bm-settings\" href=\"{{ base_url }}/plugins/backup-manager\"><i class=\"fa fa-gavel\"></i> {{ \"PLUGIN_BACKUP_MANAGER.SETTINGS\"|tu }}</a>
\t\t{% endif %}\t\t
\t\t<a class=\"button\" href=\"{{ base_url }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>
\t</div>
    <h1><i class=\"fa fa-fw fa-file-text-o\"></i> {{ \"PLUGIN_BACKUP_MANAGER.BACKUP_MANAGER\"|tu }} - 
\t{% if backupmanager.testmode %}
\t{{ \"PLUGIN_BACKUP_MANAGER.TEST_MODE_INDICATOR\"|tu }}
\t{% else %}
\t{{ \"PLUGIN_BACKUP_MANAGER.LIVE_MODE_INDICATOR\"|tu }}
\t{% endif %}
\t</h1>
{% endblock %}

{% block widgets %}
\t<div id=\"admin-dashboard\">
\t\t<div class=\"dashboard-item-flex\">
\t\t\t{% include \"partials/backup-manager-status.html.twig\" %}
\t\t</div>
\t\t<div class=\"dashboard-item-flex\">
\t\t\t{% include \"partials/backup-manager-laststatus.html.twig\" %}
\t\t</div>
\t</div>

{% endblock %}
{% block content %}
    {% include 'partials/backup-manager-backups.html.twig' %}

\t<div class=\"page-backup\">
\t</div>
{% endblock %}
", "backup-manager.html.twig", "/Applications/MAMP/htdocs/grav-electric-vehicles/user/plugins/backup-manager/admin/templates/backup-manager.html.twig");
    }
}
