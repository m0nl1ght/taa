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

/* database/designer/options_panel.twig */
class __TwigTemplate_c72d0154dbef1f252565ef606d72146a7fda8f76b9873c547bdca135f15bbb2a extends \Twig\Template
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
        echo "<table id=\"designer_optionse\" class=\"hide\" width=\"5%\" cellpadding=\"0\" cellspacing=\"0\">
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
                            <td colspan=\"2\" rowspan=\"2\" id=\"option_col_name\" class=\"center nowrap\">
                            </td>
                        </tr>
                    </thead>
                    <tbody id=\"where\">
                        <tr>
                            <td class=\"center nowrap\">
                                <b>
                                    WHERE
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td width=\"58\" class=\"nowrap\">
                                ";
        // line 34
        echo _gettext("Relationship operator");
        // line 35
        echo "                            </td>
                            <td width=\"102\">
                                <select name=\"rel_opt\" id=\"rel_opt\">
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
        // line 63
        echo _gettext("Except");
        // line 64
        echo "                                    </option>
                                    <option value=\"NOT IN\">
                                        NOT IN
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"nowrap\">
                                ";
        // line 73
        echo _gettext("Value");
        // line 74
        echo "                                <br />
                                ";
        // line 75
        echo _gettext("subquery");
        // line 76
        echo "                            </td>
                            <td>
                                <textarea id=\"Query\" cols=\"18\"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"center nowrap\">
                                <b>
                                    ";
        // line 84
        echo _gettext("Rename to");
        // line 85
        echo "                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td width=\"58\" class=\"nowrap\">
                                ";
        // line 90
        echo _gettext("New name");
        // line 91
        echo "                            </td>
                            <td width=\"102\">
                                <input type=\"text\" id=\"new_name\"/>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"center nowrap\">
                                <b>
                                    ";
        // line 99
        echo _gettext("Aggregate");
        // line 100
        echo "                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td width=\"58\" class=\"nowrap\">
                                ";
        // line 105
        echo _gettext("Operator");
        // line 106
        echo "                            </td>
                            <td width=\"102\">
                                <select name=\"operator\" id=\"operator\">
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
                        <tr>
                            <td width=\"58\" class=\"center nowrap\">
                                <b>
                                    GROUP BY
                                </b>
                            </td>
                            <td>
                                <input type=\"checkbox\" value=\"groupby\" id=\"groupby\"/>
                            </td>
                        </tr>
                        <tr>
                            <td width=\"58\" class=\"center nowrap\">
                                <b>
                                    ORDER BY
                                </b>
                            </td>
                            <td>
                                <select name=\"orderby\" id=\"orderby\">
                                    <option value=\"---\" selected=\"selected\">
                                        ---
                                    </option>
                                    <option value=\"ASC\" >
                                        ASC
                                    </option>
                                    <option value=\"DESC\">
                                        DESC
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"center nowrap\">
                                <b>
                                    HAVING
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td width=\"58\" class=\"nowrap\">
                                ";
        // line 169
        echo _gettext("Operator");
        // line 170
        echo "                            </td>
                            <td width=\"102\">
                                <select name=\"h_operator\" id=\"h_operator\">
                                    <option value=\"---\" selected=\"selected\">
                                        ---
                                    </option>
                                    <option value=\"None\" >
                                        ";
        // line 177
        echo _gettext("None");
        // line 178
        echo "                                    </option>
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
                            <td width=\"58\" class=\"nowrap\">
                                ";
        // line 199
        echo _gettext("Relationship operator");
        // line 200
        echo "                            </td>
                            <td width=\"102\">
                                <select name=\"h_rel_opt\" id=\"h_rel_opt\">
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
        // line 228
        echo _gettext("Except");
        // line 229
        echo "                                    </option>
                                    <option value=\"NOT IN\">
                                        NOT IN
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width=\"58\" class=\"nowrap\">
                                ";
        // line 238
        echo _gettext("Value");
        // line 239
        echo "                                <br/>
                                ";
        // line 240
        echo _gettext("subquery");
        // line 241
        echo "                            </td>
                            <td width=\"102\">
                                <textarea id=\"having\" cols=\"18\"></textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td colspan=\"2\" class=\"center nowrap\">
                                <input type=\"button\" id=\"ok_add_object\" class=\"butt\"
                                    name=\"Button\" value=\"";
        // line 251
        echo _gettext("OK");
        echo "\" />
                                <input type=\"button\" id=\"cancel_close_option\" class=\"butt\"
                                    name=\"Button\" value=\"";
        // line 253
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
        return "database/designer/options_panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 253,  324 => 251,  312 => 241,  310 => 240,  307 => 239,  305 => 238,  294 => 229,  292 => 228,  262 => 200,  260 => 199,  237 => 178,  235 => 177,  226 => 170,  224 => 169,  159 => 106,  157 => 105,  150 => 100,  148 => 99,  138 => 91,  136 => 90,  129 => 85,  127 => 84,  117 => 76,  115 => 75,  112 => 74,  110 => 73,  99 => 64,  97 => 63,  67 => 35,  65 => 34,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "database/designer/options_panel.twig", "/usr/local/cpanel/base/3rdparty/phpMyAdmin/templates/database/designer/options_panel.twig");
    }
}
