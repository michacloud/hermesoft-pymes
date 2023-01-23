<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Master/ListView.html.twig */
class __TwigTemplate_b4974e171149b2b97ff8f82caa4c8f9bc59514239f5b1c5c4bfa0732cdf53038 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        $context["currentView"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 20);
        // line 21
        $context["formName"] = ("form" . twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 21));
        // line 22
        echo "
<script type=\"text/javascript\">
    var listViewDeleteCancel = \"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 24), "html", null, true);
        echo "\";
    var listViewDeleteConfirm = \"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm"], "method", false, false, false, 25), "html", null, true);
        echo "\";
    var listViewDeleteMessage = \"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "are-you-sure"], "method", false, false, false, 26), "html", null, true);
        echo "\";
    var listViewDeleteTitle = \"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm-delete"], "method", false, false, false, 27), "html", null, true);
        echo "\";
</script>

<form id=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"action\"/>
    <input type=\"hidden\" name=\"activetab\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 32), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"loadfilter\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilterKey", [], "any", false, false, false, 33), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"multireqtoken\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 34), "newToken", [], "method", false, false, false, 34), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"offset\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "offset", [], "any", false, false, false, 35), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"order\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 36), "html", null, true);
        echo "\"/>
    <div class=\"";
        // line 37
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 37), "card", [], "any", false, false, false, 37)) ? ("card shadow") : (""));
        echo "\">
        <div class=\"";
        // line 38
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 38), "card", [], "any", false, false, false, 38)) ? ("container-fluid pt-3") : ("container-fluid"));
        echo "\">
            <div class=\"form-row\">
                ";
        // line 41
        echo "                <div class=\"col-md-auto mb-2\">
                    ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 42), "btnNew", [], "any", false, false, false, 42)) {
            // line 43
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 43), "modalInsert", [], "any", false, false, false, 43)) {
                // line 44
                echo "                            <button type=\"button\" class=\"btn btn-success\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new"], "method", false, false, false, 44), "html", null, true);
                echo "\"
                                    data-toggle=\"modal\" data-target=\"#modal";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 45), "modalInsert", [], "any", false, false, false, 45), "html", null, true);
                echo "\">
                                <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                                ";
                // line 47
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 47), "card", [], "any", false, false, false, 47) == false)) {
                    // line 48
                    echo "                                    <span class=\"d-none d-xl-inline-block\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new"], "method", false, false, false, 48), "html", null, true);
                    echo "</span>
                                ";
                }
                // line 50
                echo "                            </button>
                        ";
            } else {
                // line 52
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "btnNewUrl", [], "method", false, false, false, 52)), "html", null, true);
                echo "\" class=\"btn btn-success\"
                               title=\"";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new"], "method", false, false, false, 53), "html", null, true);
                echo "\"><i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                                ";
                // line 54
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 54), "card", [], "any", false, false, false, 54) == false)) {
                    // line 55
                    echo "                                    <span class=\"d-none d-xl-inline-block\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new"], "method", false, false, false, 55), "html", null, true);
                    echo "</span>
                                ";
                }
                // line 57
                echo "                            </a>
                        ";
            }
            // line 59
            echo "                    ";
        }
        // line 60
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 60), "btnDelete", [], "any", false, false, false, 60)) {
            // line 61
            echo "                        <button type=\"button\" class=\"btn btn-danger\"
                                onclick=\"listViewDelete('";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 62), "html", null, true);
            echo "');\"
                                title=\"";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 63), "html", null, true);
            echo "\">
                            <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                        </button>
                    ";
        }
        // line 67
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 67), "btnPrint", [], "any", false, false, false, 67)) {
            // line 68
            echo "                        <div class=\"btn-group\">
                            ";
            // line 69
            echo twig_call_macro($macros["_self"], "macro_printButton", [($context["fsc"] ?? null), ($context["currentView"] ?? null), ($context["i18n"] ?? null)], 69, $context, $this->getSourceContext());
            echo "
                        </div>
                    ";
        }
        // line 72
        echo "                    ";
        // line 73
        echo "                    ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "actions"], "method", false, false, false, 73), "render", [0 => true, 1 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 73)], "method", false, false, false, 73);
        echo "
                    ";
        // line 75
        echo "                    ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "statistics"], "method", false, false, false, 75), "render", [0 => ($context["fsc"] ?? null)], "method", false, false, false, 75);
        echo "
                </div>
                <div class=\"col-sm mb-2\">
                    ";
        // line 79
        echo "                    ";
        echo twig_call_macro($macros["_self"], "macro_searchControl", [($context["currentView"] ?? null), ($context["i18n"] ?? null)], 79, $context, $this->getSourceContext());
        echo "
                </div>
                <div class=\"col-sm-auto text-right mb-2\">
                    ";
        // line 83
        echo "                    ";
        echo twig_call_macro($macros["_self"], "macro_filterButton", [($context["currentView"] ?? null), ($context["fsc"] ?? null), ($context["i18n"] ?? null)], 83, $context, $this->getSourceContext());
        echo "
                    ";
        // line 85
        echo "                    ";
        echo twig_call_macro($macros["_self"], "macro_sortButton", [($context["currentView"] ?? null)], 85, $context, $this->getSourceContext());
        echo "
                    ";
        // line 87
        echo "                    ";
        echo twig_call_macro($macros["_self"], "macro_colorsButton", [($context["currentView"] ?? null), ($context["i18n"] ?? null)], 87, $context, $this->getSourceContext());
        echo "
                </div>
            </div>
            ";
        // line 91
        echo "            ";
        $context["divFiltersStyle"] = ((twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "showFilters", [], "any", false, false, false, 91)) ? ("") : ("display: none;"));
        // line 92
        echo "            <div id=\"form";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 92), "html", null, true);
        echo "Filters\" class=\"form-row align-items-center border-bottom mb-3\"
                 style=\"";
        // line 93
        echo twig_escape_filter($this->env, ($context["divFiltersStyle"] ?? null), "html", null, true);
        echo "\">
                ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "filters", [], "any", false, false, false, 94));
        foreach ($context['_seq'] as $context["filterName"] => $context["filter"]) {
            // line 95
            echo "                    ";
            echo twig_get_attribute($this->env, $this->source, $context["filter"], "render", [], "method", false, false, false, 95);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['filterName'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "            </div>
            ";
        // line 99
        echo "            <div class=\"row\">
                ";
        // line 100
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "header"], "method", false, false, false, 100), "render", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 100), 1 => "listViewSetAction", 2 => ($context["fsc"] ?? null)], "method", false, false, false, 100);
        echo "
            </div>
        </div>
        ";
        // line 104
        echo "        ";
        $context["pages"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 104);
        // line 105
        echo "        ";
        if ((twig_length_filter($this->env, ($context["pages"] ?? null)) > 4)) {
            // line 106
            echo "            <div class=\"text-center pb-2\">
                <div class=\"btn-group\">
                    ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 108));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 109
                echo "                        ";
                $context["btnClass"] = ((twig_get_attribute($this->env, $this->source, $context["page"], "active", [], "any", false, false, false, 109)) ? ("btn btn-outline-dark active") : ("btn btn-outline-dark"));
                // line 110
                echo "                        <button type=\"button\" class=\"";
                echo twig_escape_filter($this->env, ($context["btnClass"] ?? null), "html", null, true);
                echo "\"
                                onclick=\"listViewSetOffset('";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 111), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "offset", [], "any", false, false, false, 111), "html", null, true);
                echo "');\">
                            ";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "num", [], "any", false, false, false, 112), "html", null, true);
                echo "
                        </button>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "                </div>
            </div>
        ";
        }
        // line 118
        echo "        ";
        // line 119
        echo "        <div class=\"table-responsive\">
            ";
        // line 120
        $context["tableClass"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 120), "appSettings", [], "method", false, false, false, 120), "get", [0 => "default", 1 => "tablesize"], "method", false, false, false, 120) == "small")) ? ("table-sm") : (""));
        // line 121
        echo "            <table class=\"table table-hover mb-0 ";
        echo twig_escape_filter($this->env, ($context["tableClass"] ?? null), "html", null, true);
        echo "\">
                <thead>
                <tr>
                    ";
        // line 124
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 124)) > 0) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 124), "checkBoxes", [], "any", false, false, false, 124))) {
            // line 125
            echo "                        <th width=\"50\">
                            <div class=\"form-check form-check-inline mb-2 mr-sm-2 mb-sm-0\">
                                <input class=\"form-check-input listActionCB\" type=\"checkbox\"
                                       onclick=\"listViewCheckboxes('";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 128), "html", null, true);
            echo "');\"/>
                            </div>
                        </th>
                    ";
        }
        // line 132
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 132));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 133
            echo "                        ";
            echo twig_get_attribute($this->env, $this->source, $context["column"], "tableHeader", [], "method", false, false, false, 133);
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                </tr>
                </thead>
                <tbody>
                ";
        // line 138
        $context["rowStatus"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "status"], "method", false, false, false, 138);
        // line 139
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 139));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 140
            echo "                    ";
            $context["trClass"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 140), "clickable", [], "any", false, false, false, 140)) ? (("clickableRow " . twig_get_attribute($this->env, $this->source, ($context["rowStatus"] ?? null), "trClass", [0 => $context["model"]], "method", false, false, false, 140))) : (twig_get_attribute($this->env, $this->source, ($context["rowStatus"] ?? null), "trClass", [0 => $context["model"]], "method", false, false, false, 140)));
            // line 141
            echo "                    ";
            $context["trTitle"] = twig_get_attribute($this->env, $this->source, ($context["rowStatus"] ?? null), "trTitle", [0 => $context["model"]], "method", false, false, false, 141);
            // line 142
            echo "                    <tr class=\"";
            echo twig_escape_filter($this->env, ($context["trClass"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["trTitle"] ?? null), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(twig_get_attribute($this->env, $this->source, $context["model"], "url", [], "method", false, false, false, 142)), "html", null, true);
            echo "\">
                        ";
            // line 143
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 143), "checkBoxes", [], "any", false, false, false, 143)) {
                // line 144
                echo "                            <td class=\"cancelClickable\">
                                <div class=\"form-check form-check-inline mb-2 mr-sm-2 mb-sm-0\">
                                    <input class=\"form-check-input listAction\" type=\"checkbox\" name=\"code[]\"
                                           value=\"";
                // line 147
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "primaryColumnValue", [], "method", false, false, false, 147), "html", null, true);
                echo "\"/>
                                </div>
                            </td>
                        ";
            }
            // line 151
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 151));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 152
                echo "                            ";
                echo twig_get_attribute($this->env, $this->source, $context["column"], "tableCell", [0 => $context["model"]], "method", false, false, false, 152);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 156
            echo "                    <tr class=\"table-warning\">
                        <td colspan=\"";
            // line 157
            echo twig_escape_filter($this->env, (1 + twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 157))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "no-data"], "method", false, false, false, 157), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "                </tbody>
            </table>
        </div>
        ";
        // line 164
        echo "        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "totalAmounts", [], "any", false, false, false, 164))) {
            // line 165
            echo "            <div class=\"table-responsive\">
                <table class=\"table table-sm table-hover mt-4 mb-0\">
                    <thead>
                    <tr>
                        <th></th>
                        ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "totalAmounts", [], "any", false, false, false, 170));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 171
                echo "                            <th class=\"text-right text-capitalize\">
                                ";
                // line 172
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 172)], "method", false, false, false, 172), "html", null, true);
                echo "
                            </th>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class=\"text-right\">";
            // line 179
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "page-total-amount"], "method", false, false, false, 179), "html", null, true);
            echo "</td>
                        ";
            // line 180
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "totalAmounts", [], "any", false, false, false, 180));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 181
                echo "                            <td class=\"text-right\">
                                ";
                // line 182
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 182), "numbers", [], "method", false, false, false, 182), "format", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 182)], "method", false, false, false, 182), "html", null, true);
                echo "
                            </td>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "                    </tr>
                    <tr>
                        <td class=\"text-right\">";
            // line 187
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "total-amount"], "method", false, false, false, 187), "html", null, true);
            echo "</td>
                        ";
            // line 188
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "totalAmounts", [], "any", false, false, false, 188));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 189
                echo "                            <td class=\"text-right\">
                                ";
                // line 190
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 190), "numbers", [], "method", false, false, false, 190), "format", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 190)], "method", false, false, false, 190), "html", null, true);
                echo "
                            </td>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 193
            echo "                    </tr>
                    </tbody>
                </table>
            </div>
        ";
        }
        // line 198
        echo "        ";
        // line 199
        echo "        ";
        if ((twig_length_filter($this->env, ($context["pages"] ?? null)) > 0)) {
            // line 200
            echo "            <div class=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 200), "card", [], "any", false, false, false, 200)) ? ("card-footer text-center") : ("pt-3 text-center"));
            echo "\">
                <div class=\"btn-group\">
                    ";
            // line 202
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 202));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 203
                echo "                        ";
                $context["btnClass"] = ((twig_get_attribute($this->env, $this->source, $context["page"], "active", [], "any", false, false, false, 203)) ? ("btn btn-outline-dark active") : ("btn btn-outline-dark"));
                // line 204
                echo "                        <button type=\"button\" class=\"";
                echo twig_escape_filter($this->env, ($context["btnClass"] ?? null), "html", null, true);
                echo "\"
                                onclick=\"listViewSetOffset('";
                // line 205
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 205), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "offset", [], "any", false, false, false, 205), "html", null, true);
                echo "');\">
                            ";
                // line 206
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "num", [], "any", false, false, false, 206), "html", null, true);
                echo "
                        </button>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 209
            echo "                </div>
            </div>
        ";
        }
        // line 212
        echo "    </div>
    <br/>
    ";
        // line 215
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            ";
        // line 217
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "footer"], "method", false, false, false, 217), "render", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 217), 1 => "listViewSetAction", 2 => ($context["fsc"] ?? null)], "method", false, false, false, 217);
        echo "
        </div>
    </div>
    ";
        // line 221
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "showFilters", [], "any", false, false, false, 221)) {
            // line 222
            echo "        ";
            echo twig_call_macro($macros["_self"], "macro_filterSaveModal", [($context["currentView"] ?? null), ($context["i18n"] ?? null)], 222, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 224
        echo "</form>

";
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getModals", [], "method", false, false, false, 227));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 228
            echo "    ";
            echo twig_get_attribute($this->env, $this->source, $context["group"], "modal", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 228), 1 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 228)], "method", false, false, false, 228);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        echo "
";
        // line 283
        echo "
";
        // line 321
        echo "
";
        // line 342
        echo "
";
        // line 369
        echo "
";
        // line 385
        echo "
";
    }

    // line 232
    public function macro_filterButton($__currentView__ = null, $__fsc__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 233
            echo "    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "filters", [], "any", false, false, false, 233))) {
                // line 234
                echo "        ";
                $context["viewName"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 234);
                // line 235
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilterKey", [], "any", false, false, false, 235)) {
                    // line 236
                    echo "            ";
                    // line 237
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 237), "html", null, true);
                    echo "?activetab=";
                    echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                    echo "\" class=\"btn btn-light\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "all"], "method", false, false, false, 237), "html", null, true);
                    echo "\">
                <i class=\"fas fa-filter fa-fw\"></i> ";
                    // line 238
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "all"], "method", false, false, false, 238), "html", null, true);
                    echo "
            </a>
        ";
                } else {
                    // line 241
                    echo "            <button type=\"button\" class=\"btn btn-light\" onclick=\"listViewShowFilters('";
                    echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                    echo "');\">
                <i class=\"fas fa-filter fa-fw\"></i> ";
                    // line 242
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "filters"], "method", false, false, false, 242), "html", null, true);
                    echo "
            </button>
            ";
                    // line 244
                    if (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "showFilters", [], "any", false, false, false, 244)) {
                        // line 245
                        echo "                ";
                        // line 246
                        echo "                <button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\"
                        data-target=\"#savefilter";
                        // line 247
                        echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                        echo "\"
                        title=\"";
                        // line 248
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save-filter"], "method", false, false, false, 248), "html", null, true);
                        echo "\">
                    <i class=\"fas fa-save fa-fw\"></i> ";
                        // line 249
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 249), "html", null, true);
                        echo "
                </button>
            ";
                    }
                    // line 252
                    echo "        ";
                }
                // line 253
                echo "        ";
                $context["saveFilters"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilters", [], "any", false, false, false, 253);
                // line 254
                echo "        ";
                if ( !twig_test_empty(($context["saveFilters"] ?? null))) {
                    // line 255
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["saveFilters"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["pageFilter"]) {
                        // line 256
                        echo "                ";
                        $context["icon"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["pageFilter"], "nick", [], "any", false, false, false, 256))) ? ("fa-users") : ("fa-user"));
                        // line 257
                        echo "                ";
                        $context["filterDesc"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pageFilter"], "description", [], "any", false, false, false, 257)) > 10)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["pageFilter"], "description", [], "any", false, false, false, 257), 0, 10) . "...")) : (twig_get_attribute($this->env, $this->source, $context["pageFilter"], "description", [], "any", false, false, false, 257)));
                        // line 258
                        echo "                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["pageFilter"], "id", [], "any", false, false, false, 258) == twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilterKey", [], "any", false, false, false, 258))) {
                            // line 259
                            echo "                    <div class=\"btn-group\">
                        ";
                            // line 261
                            echo "                        <button title=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pageFilter"], "description", [], "any", false, false, false, 261), "html", null, true);
                            echo "\" class=\"btn btn-light active\"
                                onclick=\"listViewSetLoadFilter('";
                            // line 262
                            echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                            echo "', '";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pageFilter"], "id", [], "any", false, false, false, 262), "html", null, true);
                            echo "');\">
                            <i class=\"fas fa-filter fa-fw\"></i> ";
                            // line 263
                            echo twig_escape_filter($this->env, ($context["filterDesc"] ?? null), "html", null, true);
                            echo "
                        </button>
                        ";
                            // line 266
                            echo "                        <button type=\"button\" class=\"btn btn-light text-danger\"
                                title=\"";
                            // line 267
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "remove-filter"], "method", false, false, false, 267), "html", null, true);
                            echo "\"
                                onclick=\"listViewSetAction('";
                            // line 268
                            echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                            echo "', 'delete-filter');\">
                            <i class=\"fas fa-trash-alt fa-fw\"></i>
                        </button>
                    </div>
                ";
                        } else {
                            // line 273
                            echo "                    ";
                            // line 274
                            echo "                    <button title=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pageFilter"], "description", [], "any", false, false, false, 274), "html", null, true);
                            echo "\" class=\"btn btn-light\"
                            onclick=\"listViewSetLoadFilter('";
                            // line 275
                            echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                            echo "', '";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pageFilter"], "id", [], "any", false, false, false, 275), "html", null, true);
                            echo "');\">
                        <i class=\"fas fa-filter fa-fw\"></i> ";
                            // line 276
                            echo twig_escape_filter($this->env, ($context["filterDesc"] ?? null), "html", null, true);
                            echo "
                    </button>
                ";
                        }
                        // line 279
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageFilter'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 280
                    echo "        ";
                }
                // line 281
                echo "    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 284
    public function macro_filterSaveModal($__currentView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 285
            echo "    ";
            $context["viewName"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 285);
            // line 286
            echo "    <div class=\"modal\" id=\"savefilter";
            echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">
                        <i class=\"fas fa-filter fa-fw\"></i> ";
            // line 291
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save-filter"], "method", false, false, false, 291), "html", null, true);
            echo "
                    </h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"form-group\">
                                <label>";
            // line 301
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "description"], "method", false, false, false, 301), "html", null, true);
            echo "</label>
                                <input type=\"text\" name=\"filter-description\" class=\"form-control noEnterKey\"
                                       autofocus=\"\"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
                        ";
            // line 310
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 310), "html", null, true);
            echo "
                    </button>
                    <button type=\"button\" class=\"btn btn-primary\"
                            onclick=\"listViewSetAction('";
            // line 313
            echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
            echo "', 'save-filter');\">
                        ";
            // line 314
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "accept"], "method", false, false, false, 314), "html", null, true);
            echo "
                    </button>
                </div>
            </div>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 322
    public function macro_colorsButton($__currentView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 323
            echo "    ";
            $context["legend"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "status"], "method", false, false, false, 323), "legend", [], "method", false, false, false, 323);
            // line 324
            echo "    ";
            if (($context["legend"] ?? null)) {
                // line 325
                echo "        ";
                $context["viewName"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 325);
                // line 326
                echo "        <div class=\"btn-group\">
            <div class=\"dropdown\">
                <button class=\"btn btn-light dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                        aria-expanded=\"false\">
                    <i class=\"fas fa-fill-drip fa-fw\" aria-hidden=\"true\"></i>
                </button>
                <div class=\"dropdown-menu dropdown-menu-right pb-0\">
                    <h6 class=\"dropdown-header\">
                        ";
                // line 334
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "colors"], "method", false, false, false, 334), "html", null, true);
                echo "
                    </h6>
                    ";
                // line 336
                echo ($context["legend"] ?? null);
                echo "
                </div>
            </div>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 343
    public function macro_printButton($__fsc__ = null, $__currentView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "currentView" => $__currentView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 344
            echo "    <div class=\"dropdown\">
        <button class=\"btn btn-light dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                aria-expanded=\"false\">
            <i class=\"fas fa-print fa-fw\" aria-hidden=\"true\"></i>
        </button>
        <div class=\"dropdown-menu\">
            ";
            // line 350
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 350), "options", [], "method", false, false, false, 350));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 351
                echo "                <a href=\"#\" class=\"dropdown-item\"
                   onclick=\"listViewPrintAction('";
                // line 352
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 352), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "');\">
                    <i class=\"";
                // line 353
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "icon", [], "any", false, false, false, 353), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                    ";
                // line 354
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 354)], "method", false, false, false, 354), "html", null, true);
                echo "
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 357
            echo "            ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 357), "tools", [], "any", false, false, false, 357))) {
                // line 358
                echo "                <div class=\"dropdown-divider\"></div>
                ";
                // line 359
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 359), "tools", [], "method", false, false, false, 359));
                foreach ($context['_seq'] as $context["key"] => $context["tool"]) {
                    // line 360
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(twig_get_attribute($this->env, $this->source, $context["tool"], "link", [], "any", false, false, false, 360)), "html", null, true);
                    echo "\" class=\"dropdown-item\">
                        <i class=\"";
                    // line 361
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "icon", [], "any", false, false, false, 361), "html", null, true);
                    echo " fa-fw\" aria-hidden=\"true\"></i>
                        ";
                    // line 362
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["tool"], "description", [], "any", false, false, false, 362)], "method", false, false, false, 362), "html", null, true);
                    echo "
                    </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['tool'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 365
                echo "            ";
            }
            // line 366
            echo "        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 370
    public function macro_searchControl($__currentView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 371
            echo "    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "searchFields", [], "any", false, false, false, 371))) {
                // line 372
                echo "        <div class=\"form-group\">
            <div class=\"input-group\">
                <input class=\"form-control\" type=\"text\" name=\"query\" value=\"";
                // line 374
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "query", [], "any", false, false, false, 374), "html", null, true);
                echo "\" autocomplete=\"off\"
                       placeholder=\"";
                // line 375
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "search"], "method", false, false, false, 375), "html", null, true);
                echo "\"/>
                <span class=\"input-group-append\">
                    <button type=\"submit\" class=\"btn btn-secondary\">
                        <i class=\"fas fa-search\" aria-hidden=\"true\"></i>
                    </button>
                </span>
            </div>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 386
    public function macro_sortButton($__currentView__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 387
            echo "    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 387))) {
                // line 388
                echo "        <div class=\"btn-group\">
            <button class=\"btn btn-light dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                    aria-expanded=\"true\">
                ";
                // line 391
                $context["icon"] = ((((($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 391)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 391)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["type"] ?? null) : null) == "ASC")) ? ("fas fa-sort-amount-down-alt") : ("fas fa-sort-amount-down"));
                // line 392
                echo "                <i class=\"";
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-lg-inline\">";
                // line 393
                echo twig_escape_filter($this->env, (($__internal_compile_2 = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 393)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 393)] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["label"] ?? null) : null), "html", null, true);
                echo "</span>
                <span class=\"caret\"></span>
            </button>
            <div class=\"dropdown-menu dropdown-menu-right\">
                ";
                // line 397
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 397));
                foreach ($context['_seq'] as $context["key"] => $context["orderby"]) {
                    // line 398
                    echo "                    ";
                    $context["activeClass"] = (((twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 398) == $context["key"])) ? (" active") : (""));
                    // line 399
                    echo "                    ";
                    $context["icon"] = (((twig_get_attribute($this->env, $this->source, $context["orderby"], "type", [], "any", false, false, false, 399) == "ASC")) ? ("fas fa-sort-amount-down-alt") : ("fas fa-sort-amount-down"));
                    // line 400
                    echo "                    <a class=\"dropdown-item";
                    echo twig_escape_filter($this->env, ($context["activeClass"] ?? null), "html", null, true);
                    echo "\" href=\"#\"
                       onclick=\"listViewSetOrder('";
                    // line 401
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 401), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "');\">
                        <i class=\"";
                    // line 402
                    echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                    echo " fa-fw\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderby"], "label", [], "any", false, false, false, 402), "html", null, true);
                    echo "
                    </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['orderby'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 405
                echo "            </div>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Master/ListView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1106 => 405,  1095 => 402,  1089 => 401,  1084 => 400,  1081 => 399,  1078 => 398,  1074 => 397,  1067 => 393,  1062 => 392,  1060 => 391,  1055 => 388,  1052 => 387,  1039 => 386,  1020 => 375,  1016 => 374,  1012 => 372,  1009 => 371,  995 => 370,  984 => 366,  981 => 365,  972 => 362,  968 => 361,  963 => 360,  959 => 359,  956 => 358,  953 => 357,  944 => 354,  940 => 353,  934 => 352,  931 => 351,  927 => 350,  919 => 344,  904 => 343,  889 => 336,  884 => 334,  874 => 326,  871 => 325,  868 => 324,  865 => 323,  851 => 322,  835 => 314,  831 => 313,  825 => 310,  813 => 301,  800 => 291,  791 => 286,  788 => 285,  774 => 284,  764 => 281,  761 => 280,  755 => 279,  749 => 276,  743 => 275,  738 => 274,  736 => 273,  728 => 268,  724 => 267,  721 => 266,  716 => 263,  710 => 262,  705 => 261,  702 => 259,  699 => 258,  696 => 257,  693 => 256,  688 => 255,  685 => 254,  682 => 253,  679 => 252,  673 => 249,  669 => 248,  665 => 247,  662 => 246,  660 => 245,  658 => 244,  653 => 242,  648 => 241,  642 => 238,  633 => 237,  631 => 236,  628 => 235,  625 => 234,  622 => 233,  607 => 232,  602 => 385,  599 => 369,  596 => 342,  593 => 321,  590 => 283,  587 => 230,  578 => 228,  574 => 227,  570 => 224,  564 => 222,  561 => 221,  555 => 217,  551 => 215,  547 => 212,  542 => 209,  533 => 206,  527 => 205,  522 => 204,  519 => 203,  515 => 202,  509 => 200,  506 => 199,  504 => 198,  497 => 193,  488 => 190,  485 => 189,  481 => 188,  477 => 187,  473 => 185,  464 => 182,  461 => 181,  457 => 180,  453 => 179,  447 => 175,  438 => 172,  435 => 171,  431 => 170,  424 => 165,  421 => 164,  416 => 160,  405 => 157,  402 => 156,  396 => 154,  387 => 152,  382 => 151,  375 => 147,  370 => 144,  368 => 143,  359 => 142,  356 => 141,  353 => 140,  347 => 139,  345 => 138,  340 => 135,  331 => 133,  326 => 132,  319 => 128,  314 => 125,  312 => 124,  305 => 121,  303 => 120,  300 => 119,  298 => 118,  293 => 115,  284 => 112,  278 => 111,  273 => 110,  270 => 109,  266 => 108,  262 => 106,  259 => 105,  256 => 104,  250 => 100,  247 => 99,  244 => 97,  235 => 95,  231 => 94,  227 => 93,  222 => 92,  219 => 91,  212 => 87,  207 => 85,  202 => 83,  195 => 79,  188 => 75,  183 => 73,  181 => 72,  175 => 69,  172 => 68,  169 => 67,  162 => 63,  158 => 62,  155 => 61,  152 => 60,  149 => 59,  145 => 57,  139 => 55,  137 => 54,  133 => 53,  128 => 52,  124 => 50,  118 => 48,  116 => 47,  111 => 45,  106 => 44,  103 => 43,  101 => 42,  98 => 41,  93 => 38,  89 => 37,  85 => 36,  81 => 35,  77 => 34,  73 => 33,  69 => 32,  64 => 30,  58 => 27,  54 => 26,  50 => 25,  46 => 24,  42 => 22,  40 => 21,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/ListView.html.twig", "C:\\xampp\\htdocs\\facturascripts\\Dinamic\\View\\Master\\ListView.html.twig");
    }
}
