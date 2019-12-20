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

/* database/designer/having_query_panel.twig */
class __TwigTemplate_3fddf9c597028131229cea5b2d0478aaba97bf8e3b832478b152768ec3d4a0b6 extends \Twig\Template
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
        echo "<table id=\"query_having\" class=\"hide\" width=\"5%\" cellpadding=\"0\" cellspacing=\"0\">
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
                                    HAVING
                                </strong>
                            </td>
                        </tr>
                    </thead>
                    <tbody id=\"rename_to\">
                        <tr>
                            <td width=\"58\" class=\"nowrap\">
                                ";
        // line 30
        echo _gettext("Operator");
        // line 31
        echo "                            </td>
                            <td width=\"102\">
                                <select name=\"hoperator\" id=\"hoperator\">
                                    <option value=\"---\" selected=\"selected\">
                                        ---
                                    </option>
                                    <option value=\"None\" >
                                        None
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
                        <tr>
                            <tr>
                                <td width=\"58\" class=\"nowrap\">
                                    ";
        // line 61
        echo _gettext("Operator");
        // line 62
        echo "                                </td>
                                <td width=\"102\">
                                    <select name=\"hrel_opt\" id=\"hrel_opt\">
                                        <option value=\"--\" selected=\"selected\">
                                            --
                                        </option>
                                        <option value=\"=\">
                                            =
                                        </option>
                                        <option value=\"&gt;\">
                                            &gt;
                                        </option>
                                        <option value=\"&lt;\">
                                            &lt;
                                        </option>
                                        <option value=\"&gt;=\">
                                            &gt;=
                                        </option>
                                        <option value=\"&lt;=\">
                                            &lt;=
                                        </option>
                                        <option value=\"NOT\">
                                            NOT
                                        </option>
                                        <option value=\"IN\">
                                            IN
                                        </option>
                                        <option value=\"EXCEPT\">
                                            ";
        // line 90
        echo _gettext("Except");
        // line 91
        echo "                                        </option>
                                        <option value=\"NOT IN\">
                                            NOT IN
                                        </option>
                                    </select>
                                </td>
                        </tr>
                        <tr>
                            <td class=\"nowrap\">
                                ";
        // line 100
        echo _gettext("Value");
        // line 101
        echo "                                <br />
                                ";
        // line 102
        echo _gettext("subquery");
        // line 103
        echo "                            </td>
                            <td>
                                <textarea id=\"hQuery\" cols=\"18\">
                                </textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td colspan=\"2\" class=\"center nowrap\">
                                <input type=\"button\" id=\"ok_edit_having\" class=\"butt\"
                                    name=\"Button\" value=\"";
        // line 114
        echo _gettext("OK");
        echo "\" />
                                <input id=\"query_having_button\" type=\"button\"
                                    class=\"butt\"
                                    name=\"Button\"
                                    value=\"";
        // line 118
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
        return "database/designer/having_query_panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 118,  160 => 114,  147 => 103,  145 => 102,  142 => 101,  140 => 100,  129 => 91,  127 => 90,  97 => 62,  95 => 61,  63 => 31,  61 => 30,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "database/designer/having_query_panel.twig", "/usr/local/cpanel/base/3rdparty/phpMyAdmin/templates/database/designer/having_query_panel.twig");
    }
}
