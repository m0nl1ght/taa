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

/* database/designer/where_query_panel.twig */
class __TwigTemplate_eefe5750e703f262151ef5f4ccbffea2d48fbbc2ccac8e738176205653c399ac extends \Twig\Template
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
        echo "<table id=\"query_where\" class=\"hide\" width=\"5%\" cellpadding=\"0\" cellspacing=\"0\">
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
                                    WHERE
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
                                <select name=\"erel_opt\" id=\"erel_opt\">
                                    <option value=\"--\" selected=\"selected\">
                                        --
                                    </option>
                                    <option value=\"=\" >
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
        // line 59
        echo _gettext("Except");
        // line 60
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
        // line 69
        echo _gettext("Value");
        // line 70
        echo "                                <br />
                                ";
        // line 71
        echo _gettext("subquery");
        // line 72
        echo "                            </td>
                            <td>
                                <textarea id=\"eQuery\" cols=\"18\">
                                </textarea>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td colspan=\"2\" class=\"center nowrap\">
                                <input type=\"button\" id=\"ok_edit_where\" class=\"butt\"
                                    name=\"Button\" value=\"";
        // line 83
        echo _gettext("OK");
        echo "\" />
                                <input id=\"query_where_button\" type=\"button\" class=\"butt\" name=\"Button\"
                                       value=\"";
        // line 85
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
        return "database/designer/where_query_panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 85,  126 => 83,  113 => 72,  111 => 71,  108 => 70,  106 => 69,  95 => 60,  93 => 59,  63 => 31,  61 => 30,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "database/designer/where_query_panel.twig", "/usr/local/cpanel/base/3rdparty/phpMyAdmin/templates/database/designer/where_query_panel.twig");
    }
}
