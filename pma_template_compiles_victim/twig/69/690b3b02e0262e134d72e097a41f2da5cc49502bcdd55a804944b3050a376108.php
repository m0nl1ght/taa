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

/* database/designer/rename_to_panel.twig */
class __TwigTemplate_9d62b2cebaeb2af12cbf254aeea98b1a6e1928bee762ed1912a12d3a99ea3bd8 extends \Twig\Template
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
        echo "<table id=\"query_rename_to\" class=\"hide\" width=\"5%\" cellpadding=\"0\" cellspacing=\"0\">
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
        echo _gettext("Rename to");
        // line 23
        echo "                                </strong>
                            </td>
                        </tr>
                    </thead>
                    <tbody id=\"rename_to\">
                        <tr>
                            <td width=\"58\" class=\"nowrap\">
                                ";
        // line 30
        echo _gettext("New name");
        // line 31
        echo "                            </td>
                            <td width=\"102\">
                                <input type=\"text\" id=\"e_rename\"/>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td colspan=\"2\" class=\"center nowrap\">
                                <input type=\"button\" id=\"ok_edit_rename\" class=\"butt\"
                                    name=\"Button\" value=\"";
        // line 41
        echo _gettext("OK");
        echo "\" />
                                <input id=\"query_rename_to_button\" type=\"button\"
                                    class=\"butt\"
                                    name=\"Button\"
                                    value=\"";
        // line 45
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
        return "database/designer/rename_to_panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 45,  78 => 41,  66 => 31,  64 => 30,  55 => 23,  53 => 22,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "database/designer/rename_to_panel.twig", "/usr/local/cpanel/base/3rdparty/phpMyAdmin/templates/database/designer/rename_to_panel.twig");
    }
}
