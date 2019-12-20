<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* database/designer/aggregate_query_panel.twig */
class __TwigTemplate_f189baa28ee58c4ca0624510b695f99c13f96f5d58a3d4a43dc52d69973bcee5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<table id=\"query_Aggregate\" class=\"hide\" width=\"5%\" cellpadding=\"0\" cellspacing=\"0\">
    <tbody>
        <tr>
            <td class=\"frams1\" width=\"10px\">
            </td>
            <td class=\"frams5\" width=\"99%\" >
            </td>
            <td class=\"frams2\" width=\"10px\">
                <div class=\"bor\">
                </div>
            </td>
        </tr>
        <tr>
            <td class=\"frams8\">
            </td>
            <td class=\"input_tab\">
                <table width=\"168\" class=\"center\" cellpadding=\"2\" cellspacing=\"0\">
                    <thead>
                        <tr>
                            <td colspan=\"2\" class=\"center nowrap\">
                                <strong>
                                    ";
        // line 22
        echo _gettext("Aggregate");
        // line 23
        echo "                                </strong>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td width=\"58\" class=\"nowrap\">
                                ";
        // line 30
        echo _gettext("Operator");
        // line 31
        echo "                            </td>
                            <td width=\"102\">
                                <select name=\"operator\" id=\"e_operator\">
                                    <option value=\"---\" selected=\"selected\">
                                        ---
                                    </option>
                                    <option value=\"sum\" >
                                        SUM
                                    </option>
                                    <option value=\"min\">
                                        MIN
                                    </option>
                                    <option value=\"max\">
                                        MAX
                                    </option>
                                    <option value=\"avg\">
                                        AVG
                                    </option>
                                    <option value=\"count\">
                                        COUNT
                                    </option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td colspan=\"2\" class=\"center nowrap\">
                                <input type=\"button\" id=\"ok_edit_Aggr\" class=\"butt\"
                                    name=\"Button\" value=\"";
        // line 60
        echo _gettext("OK");
        echo "\" />
                                <input id=\"query_Aggregate_Button\" type=\"button\"
                                    class=\"butt\"
                                    name=\"Button\"
                                    value=\"";
        // line 64
        echo _gettext("Cancel");
        echo "\" />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td class=\"frams6\">
            </td>
        </tr>
        <tr>
            <td class=\"frams4\">
                <div class=\"bor\">
                </div>
            </td>
            <td class=\"frams7\">
            </td>
            <td class=\"frams3\">
            </td>
        </tr>
    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "database/designer/aggregate_query_panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 64,  97 => 60,  66 => 31,  64 => 30,  55 => 23,  53 => 22,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "database/designer/aggregate_query_panel.twig", "/usr/local/cpanel/base/3rdparty/phpMyAdmin/templates/database/designer/aggregate_query_panel.twig");
    }
}
