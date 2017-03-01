<?php

/* partials/backup-manager-backups.html.twig */
class __TwigTemplate_0a2ccb7b1d42b2cdaffec88dd2b2b324435c0d90e50c12b800498ce9097dfdcc extends Twig_Template
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
            echo "    <div id=\"latest\">
        <h1>";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.LATEST_BACKUPS"), "html", null, true);
            echo "</h1>
        <table>
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["backupmanager"] ?? null), "latestBackups", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["latest"]) {
                if ($this->getAttribute(($context["backupmanager"] ?? null), "latestBackups", array())) {
                    // line 6
                    echo "            <tr>
                <td class=\"triple page-title\">
                    <a href=\"";
                    // line 8
                    echo twig_escape_filter($this->env, $this->getAttribute($context["latest"], "zipurl", array()), "html", null, true);
                    echo "\"><i class=\"fa fa-fw fa-file-text-o\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["latest"], "zipname", array()));
                    echo "</a>
\t\t\t\t</td>
\t\t\t\t<td>";
                    // line 10
                    echo twig_escape_filter($this->env, $this->getAttribute($context["latest"], "zipdate", array()), "html", null, true);
                    echo "</td>
                <td class=\"text-right\" align=\"right\">";
                    // line 11
                    echo twig_escape_filter($this->env, $this->getAttribute($context["latest"], "zipsize", array()), "html", null, true);
                    echo "</td>
\t\t\t\t<td align=\"right\">
\t\t\t\t";
                    // line 13
                    echo twig_escape_filter($this->env, $this->getAttribute($context["latest"], "ziptype", array()), "html", null, true);
                    echo "
\t\t\t\t</td>
            </tr>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['latest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t\t\t<tr>
\t\t\t<td class=\"triple\">";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.BACKUP_DOWNLOAD"), "html", null, true);
            echo "</td>
\t\t\t<td class=\"text-center\" align=\"center\">";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.BACKUP_DATE"), "html", null, true);
            echo "</td>
\t\t\t<td class=\"text-right\" align=\"right\">";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.BACKUP_SIZE"), "html", null, true);
            echo "</td>
\t\t\t<td class=\"text-right\" align=\"right\">";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_BACKUP_MANAGER.BACKUP_TYPE"), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t\t</table>
    </div>
";
        } else {
            // line 26
            echo "    <div class=\"padding\">You don't have sufficient access to view the dashboard...</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/backup-manager-backups.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 26,  80 => 21,  76 => 20,  72 => 19,  68 => 18,  65 => 17,  54 => 13,  49 => 11,  45 => 10,  38 => 8,  34 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
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
    <div id=\"latest\">
        <h1>{{ \"PLUGIN_BACKUP_MANAGER.LATEST_BACKUPS\"|tu }}</h1>
        <table>
        {% for latest in backupmanager.latestBackups if backupmanager.latestBackups %}
            <tr>
                <td class=\"triple page-title\">
                    <a href=\"{{ latest.zipurl }}\"><i class=\"fa fa-fw fa-file-text-o\"></i> {{ latest.zipname|e }}</a>
\t\t\t\t</td>
\t\t\t\t<td>{{ latest.zipdate }}</td>
                <td class=\"text-right\" align=\"right\">{{ latest.zipsize }}</td>
\t\t\t\t<td align=\"right\">
\t\t\t\t{{ latest.ziptype }}
\t\t\t\t</td>
            </tr>
        {% endfor %}
\t\t\t<tr>
\t\t\t<td class=\"triple\">{{ \"PLUGIN_BACKUP_MANAGER.BACKUP_DOWNLOAD\"|tu }}</td>
\t\t\t<td class=\"text-center\" align=\"center\">{{ \"PLUGIN_BACKUP_MANAGER.BACKUP_DATE\"|tu }}</td>
\t\t\t<td class=\"text-right\" align=\"right\">{{ \"PLUGIN_BACKUP_MANAGER.BACKUP_SIZE\"|tu }}</td>
\t\t\t<td class=\"text-right\" align=\"right\">{{ \"PLUGIN_BACKUP_MANAGER.BACKUP_TYPE\"|tu }}</td>
\t\t\t</tr>
\t\t\t</table>
    </div>
{% else %}
    <div class=\"padding\">You don't have sufficient access to view the dashboard...</div>
{% endif %}
", "partials/backup-manager-backups.html.twig", "/Applications/MAMP/htdocs/grav-electric-vehicles/user/plugins/backup-manager/admin/templates/partials/backup-manager-backups.html.twig");
    }
}
