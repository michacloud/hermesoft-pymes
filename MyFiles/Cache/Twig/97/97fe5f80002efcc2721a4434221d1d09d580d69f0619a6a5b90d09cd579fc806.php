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

/* Dashboard.html.twig */
class __TwigTemplate_c50eec54c58d5acbf7e667d8d294e9755d8b2ba49a8f440abd9f242966f83947 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'sectionLinks' => [$this, 'block_sectionLinks'],
            'sectionStats' => [$this, 'block_sectionStats'],
            'sections' => [$this, 'block_sections'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuBghTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "Dashboard.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <div class=\"bg-light pt-4 pb-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <h1 class=\"h4\">
                        ";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 28), "name", [], "any", false, false, false, 28) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 28), "homepage", [], "any", false, false, false, 28))) {
            // line 29
            echo "                            <a class=\"btn btn-sm btn-secondary align-bottom active\"
                               href=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 30), "html", null, true);
            echo "?defaultPage=FALSE\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("marked-as-homepage"), "html", null, true);
            echo "\">
                                <i class=\"fas fa-bookmark\" aria-hidden=\"true\"></i>
                            </a>
                        ";
        } else {
            // line 34
            echo "                            <a class=\"btn btn-sm btn-secondary align-bottom\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 34), "html", null, true);
            echo "?defaultPage=TRUE\"
                               title=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("mark-as-homepage"), "html", null, true);
            echo "\">
                                <i class=\"far fa-bookmark\" aria-hidden=\"true\"></i>
                            </a>
                        ";
        }
        // line 39
        echo "                        <span class=\"ml-2\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 39), "html", null, true);
        echo "</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\" style=\"margin-top: -40px;\">
        ";
        // line 46
        $this->displayBlock('sectionLinks', $context, $blocks);
        // line 53
        echo "        ";
        $this->displayBlock('sectionStats', $context, $blocks);
        // line 56
        echo "        ";
        $this->displayBlock('sections', $context, $blocks);
        // line 69
        echo "    </div>
";
    }

    // line 46
    public function block_sectionLinks($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "            <div class=\"row\">
                <div class=\"col\">
                    ";
        // line 49
        echo twig_call_macro($macros["_self"], "macro_sectionLinks", [($context["fsc"] ?? null)], 49, $context, $this->getSourceContext());
        echo "
                </div>
            </div>
        ";
    }

    // line 53
    public function block_sectionStats($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "            ";
        echo twig_call_macro($macros["_self"], "macro_sectionStats", [($context["fsc"] ?? null)], 54, $context, $this->getSourceContext());
        echo "
        ";
    }

    // line 56
    public function block_sections($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "            <div class=\"row\">
                <div class=\"col\">
                    ";
        // line 59
        if (twig_in_filter("receipts", twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "sections", [], "any", false, false, false, 59))) {
            // line 60
            echo "                        ";
            echo twig_call_macro($macros["_self"], "macro_sectionReceipts", [($context["fsc"] ?? null)], 60, $context, $this->getSourceContext());
            echo "
                    ";
        }
        // line 62
        echo "                    ";
        if (twig_in_filter("low-stock", twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "sections", [], "any", false, false, false, 62))) {
            // line 63
            echo "                        ";
            echo twig_call_macro($macros["_self"], "macro_sectionLowStock", [($context["fsc"] ?? null)], 63, $context, $this->getSourceContext());
            echo "
                    ";
        }
        // line 65
        echo "                </div>
            </div>
            ";
        // line 67
        echo twig_call_macro($macros["_self"], "macro_sectionNews", [($context["fsc"] ?? null)], 67, $context, $this->getSourceContext());
        echo "
        ";
    }

    // line 72
    public function macro_drawStatsBox($__fsc__ = null, $__group__ = null, $__color__ = null, $__ismoney__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "group" => $__group__,
            "color" => $__color__,
            "ismoney" => $__ismoney__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 73
            echo "    <div class=\"card shadow mb-3\">
        <div class=\"card-body p-2 text-white ";
            // line 74
            echo twig_escape_filter($this->env, ($context["color"] ?? null), "html", null, true);
            echo "\">
            <h2 class=\"h5 text-center mb-0\">
                ";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()(($context["group"] ?? null)), "html", null, true);
            echo "
            </h2>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table mb-0\">
                ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "stats", [], "any", false, false, false, 81)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["group"] ?? null)] ?? null) : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 82
                echo "                    <tr>
                        <td>";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()($context["key"]), "html", null, true);
                echo "</td>
                        ";
                // line 84
                $context["color"] = ((($context["value"] < 0)) ? (" text-danger") : (""));
                // line 85
                echo "                        ";
                if (($context["ismoney"] ?? null)) {
                    // line 86
                    echo "                            <td class=\"text-right";
                    echo twig_escape_filter($this->env, ($context["color"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getFunction('money')->getCallable()($context["value"]), "html", null, true);
                    echo "</td>
                        ";
                } else {
                    // line 88
                    echo "                            <td class=\"text-right\">";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</td>
                        ";
                }
                // line 90
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "            </table>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 97
    public function macro_sectionLinks($__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 98
            echo "    <div class=\"card shadow mb-3\">
        <div class=\"pl-3 pt-1 pr-3 pb-3\">
            <div class=\"form-row\">
                <div class=\"col-md\">
                    <h2 class=\"h4 mt-3 mb-1\">
                        <i class=\"fas fa-plus fa-fw\"></i> ";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("create"), "html", null, true);
            echo "
                    </h2>
                    <ul class=\"mb-1\">
                        ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "createLinks", [], "any", false, false, false, 106));
            foreach ($context['_seq'] as $context["link"] => $context["label"]) {
                // line 107
                echo "                            <li>
                                <a href=\"";
                // line 108
                echo twig_escape_filter($this->env, $context["link"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()($context["label"]), "html", null, true);
                echo "</a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['link'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "                    </ul>
                </div>
                ";
            // line 113
            if (twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "openLinks", [], "any", false, false, false, 113)) {
                // line 114
                echo "                    <div class=\"col-md\">
                        <h2 class=\"h4 mt-3 mb-1\">
                            <i class=\"fas fa-folder-open fa-fw\"></i> ";
                // line 116
                echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("open"), "html", null, true);
                echo "
                        </h2>
                        <ul class=\"mb-1\">
                            ";
                // line 119
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "openLinks", [], "any", false, false, false, 119));
                foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                    // line 120
                    echo "                                <li>
                                    ";
                    // line 121
                    echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()(twig_get_attribute($this->env, $this->source, $context["link"], "type", [], "any", false, false, false, 121)), "html", null, true);
                    echo "
                                    <a href=\"";
                    // line 122
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 122), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 122), "html", null, true);
                    echo "</a>
                                    <span class=\"text-muted\">";
                    // line 123
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "date", [], "any", false, false, false, 123), "html", null, true);
                    echo "</span>
                                </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo "                        </ul>
                    </div>
                ";
            }
            // line 129
            echo "                <div class=\"col-md\">
                    <h2 class=\"h4 mt-3 mb-1\">
                        <i class=\"fas fa-question-circle fa-fw\"></i> ";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("help"), "html", null, true);
            echo "
                    </h2>
                    <ul class=\"mb-1\">
                        <li>
                            <a href=\"https://facturascripts.com/publicaciones/configuracion-15\" rel=\"nofollow\"
                               target=\"_blank\">Configuración</a>
                        </li>
                        <li>
                            <a href=\"https://facturascripts.com/publicaciones/primeros-pasos-303\" rel=\"nofollow\"
                               target=\"_blank\">Primeros pasos</a>
                        </li>
                        <li>
                            <a href=\"https://facturascripts.com/publicaciones/problemas-frecuentes-469\" rel=\"nofollow\"
                               target=\"_blank\">Problemas frecuentes</a>
                        </li>
                        <li>
                            <a href=\"https://forms.gle/WhGgWWB6EbWjBNna6\" rel=\"nofollow\"
                               target=\"_blank\">Encuesta de uso 2022/23
                                <i class=\"fas fa-clipboard-check\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"https://facturascripts.com/contacto\" rel=\"nofollow\" target=\"_blank\">Soporte
                                <i class=\"far fa-comment-dots\"></i></a>
                        </li>
                    </ul>
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

    // line 163
    public function macro_sectionLowStock($__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 164
            echo "    <div class=\"card shadow mb-3\">
        <div class=\"p-3\">
            <h2 class=\"h4 mb-0\">
                <i class=\"fas fa-pallet fa-fw\"></i> ";
            // line 167
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("minimum-stock"), "html", null, true);
            echo "
            </h2>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-sm table-hover mb-0\">
                <thead>
                <tr>
                    <th>";
            // line 174
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("reference"), "html", null, true);
            echo "</th>
                    <th>";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("warehouse"), "html", null, true);
            echo "</th>
                    <th class=\"text-right\">";
            // line 176
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("minimum-stock"), "html", null, true);
            echo "</th>
                    <th class=\"text-right\">";
            // line 177
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("available"), "html", null, true);
            echo "</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 181
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "lowStock", [], "any", false, false, false, 181));
            foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
                // line 182
                echo "                    <tr class=\"clickableRow table-danger\" data-href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "url", [], "method", false, false, false, 182), "html", null, true);
                echo "\">
                        <td>";
                // line 183
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "referencia", [], "any", false, false, false, 183), "html", null, true);
                echo "</td>
                        <td>";
                // line 184
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "codalmacen", [], "any", false, false, false, 184), "html", null, true);
                echo "</td>
                        <td class=\"text-right\">";
                // line 185
                echo twig_escape_filter($this->env, $this->env->getFunction('number')->getCallable()(twig_get_attribute($this->env, $this->source, $context["stock"], "stockmin", [], "any", false, false, false, 185)), "html", null, true);
                echo "</td>
                        <td class=\"text-right\">";
                // line 186
                echo twig_escape_filter($this->env, $this->env->getFunction('number')->getCallable()(twig_get_attribute($this->env, $this->source, $context["stock"], "disponible", [], "any", false, false, false, 186)), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "                </tbody>
            </table>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 195
    public function macro_sectionNews($__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 196
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "news", [], "any", false, false, false, 196));
            foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
                // line 197
                echo "        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card shadow mb-3\">
                    <div class=\"card-header\">
                        <span class=\"float-right\">";
                // line 201
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "fecha", [], "any", false, false, false, 201), "html", null, true);
                echo "</span>
                        <a href=\"";
                // line 202
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "url", [], "any", false, false, false, 202), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["news"], "title", [], "any", false, false, false, 202);
                echo "</a>
                    </div>
                    <div class=\"card-body p-3\">
                        <div class=\"form-row align-items-center\">
                            <div class=\"col-auto\">
                                <a href=\"";
                // line 207
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "url", [], "any", false, false, false, 207), "html", null, true);
                echo "\" target=\"_blank\" class=\"btn btn-outline-secondary\">
                                    <i class=\"far fa-newspaper fa-3x\"></i>
                                </a>
                            </div>
                            <div class=\"col\">";
                // line 211
                echo twig_get_attribute($this->env, $this->source, $context["news"], "body", [], "any", false, false, false, 211);
                echo "</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 220
    public function macro_sectionReceipts($__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 221
            echo "    <div class=\"card shadow mb-3\">
        <div class=\"p-3\">
            <span class=\"float-right badge badge-danger\">";
            // line 223
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("unpaid"), "html", null, true);
            echo "</span>
            <h2 class=\"h4 mb-0\">
                <i class=\"fas fa-dollar-sign fa-fw\"></i>
                ";
            // line 226
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("receipts"), "html", null, true);
            echo "
            </h2>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-sm table-hover mb-0\">
                <thead>
                <tr>
                    <th>";
            // line 233
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("customer"), "html", null, true);
            echo "</th>
                    <th>";
            // line 234
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("observations"), "html", null, true);
            echo "</th>
                    <th class=\"text-right\">";
            // line 235
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("amount"), "html", null, true);
            echo "</th>
                    <th class=\"text-right\">";
            // line 236
            echo twig_escape_filter($this->env, $this->env->getFunction('trans')->getCallable()("expiration"), "html", null, true);
            echo "</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 240
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "receipts", [], "any", false, false, false, 240));
            foreach ($context['_seq'] as $context["_key"] => $context["receipt"]) {
                // line 241
                echo "                    <tr class=\"clickableRow table-danger\" data-href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["receipt"], "url", [], "method", false, false, false, 241), "html", null, true);
                echo "\">
                        <td>";
                // line 242
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["receipt"], "getSubject", [], "method", false, false, false, 242), "nombre", [], "any", false, false, false, 242);
                echo "</td>
                        <td>";
                // line 243
                echo twig_get_attribute($this->env, $this->source, $context["receipt"], "observaciones", [], "any", false, false, false, 243);
                echo "</td>
                        <td class=\"text-right text-nowrap\">";
                // line 244
                echo twig_escape_filter($this->env, $this->env->getFunction('money')->getCallable()(twig_get_attribute($this->env, $this->source, $context["receipt"], "importe", [], "any", false, false, false, 244)), "html", null, true);
                echo "</td>
                        <td class=\"text-right text-nowrap\">";
                // line 245
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["receipt"], "vencimiento", [], "any", false, false, false, 245), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receipt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 248
            echo "                </tbody>
            </table>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 254
    public function macro_sectionStats($__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 255
            echo "    <div class=\"form-row\">
        <div class=\"col-sm-6 col-lg-3\">
            ";
            // line 257
            echo twig_call_macro($macros["_self"], "macro_drawStatsBox", [($context["fsc"] ?? null), "purchases", "bg-danger", true], 257, $context, $this->getSourceContext());
            echo "
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            ";
            // line 260
            echo twig_call_macro($macros["_self"], "macro_drawStatsBox", [($context["fsc"] ?? null), "sales", "bg-success", true], 260, $context, $this->getSourceContext());
            echo "
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            ";
            // line 263
            echo twig_call_macro($macros["_self"], "macro_drawStatsBox", [($context["fsc"] ?? null), "taxes", "bg-warning", true], 263, $context, $this->getSourceContext());
            echo "
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            ";
            // line 266
            echo twig_call_macro($macros["_self"], "macro_drawStatsBox", [($context["fsc"] ?? null), "new-customers", "bg-info", false], 266, $context, $this->getSourceContext());
            echo "
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  674 => 266,  668 => 263,  662 => 260,  656 => 257,  652 => 255,  639 => 254,  626 => 248,  617 => 245,  613 => 244,  609 => 243,  605 => 242,  600 => 241,  596 => 240,  589 => 236,  585 => 235,  581 => 234,  577 => 233,  567 => 226,  561 => 223,  557 => 221,  544 => 220,  524 => 211,  517 => 207,  507 => 202,  503 => 201,  497 => 197,  492 => 196,  479 => 195,  466 => 189,  457 => 186,  453 => 185,  449 => 184,  445 => 183,  440 => 182,  436 => 181,  429 => 177,  425 => 176,  421 => 175,  417 => 174,  407 => 167,  402 => 164,  389 => 163,  349 => 131,  345 => 129,  340 => 126,  331 => 123,  325 => 122,  321 => 121,  318 => 120,  314 => 119,  308 => 116,  304 => 114,  302 => 113,  298 => 111,  287 => 108,  284 => 107,  280 => 106,  274 => 103,  267 => 98,  254 => 97,  242 => 92,  235 => 90,  229 => 88,  221 => 86,  218 => 85,  216 => 84,  212 => 83,  209 => 82,  205 => 81,  197 => 76,  192 => 74,  189 => 73,  173 => 72,  167 => 67,  163 => 65,  157 => 63,  154 => 62,  148 => 60,  146 => 59,  142 => 57,  138 => 56,  131 => 54,  127 => 53,  119 => 49,  115 => 47,  111 => 46,  106 => 69,  103 => 56,  100 => 53,  98 => 46,  87 => 39,  80 => 35,  75 => 34,  66 => 30,  63 => 29,  61 => 28,  54 => 23,  50 => 22,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard.html.twig", "C:\\xampp\\htdocs\\facturascripts\\Dinamic\\View\\Dashboard.html.twig");
    }
}
