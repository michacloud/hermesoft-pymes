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

/* Login/Login.html.twig */
class __TwigTemplate_53e452947412ed14c8089cf316dd99301574024103a80a354d4a1e073c69e27b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'css' => [$this, 'block_css'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Master/MicroTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MicroTemplate.html.twig", "Login/Login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<style>



</style>
   
    <div class=\"container ll\">
        <div class=\"row justify-start-md-center  \">
            <div class=\"col-md-6\">
                <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(""), "html", null, true);
        echo "\" method=\"post\" class=\"form\">
                    <div class=\"card mt-4\">
                        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(""), "html", null, true);
        echo "\">
                            ";
        // line 17
        $context["idfile"] = twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "default", 1 => "idloginimage", 2 => 0], "method", false, false, false, 17);
        echo " 
                           <!-- ";
        // line 18
        echo twig_call_macro($macros["_self"], "macro_loadLogo", [($context["idfile"] ?? null)], 18, $context, $this->getSourceContext());
        echo " -->
                           <img src=\"Dinamic\\Assets\\Images\\Micha.png\"/>
                        </a>
                        <div class=\"card-body\">
                            <p class=\"card-text text-center\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "login-text"], "method", false, false, false, 22), "html", null, true);
        echo "</p>
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            <i class=\"fas fa-user fa-fw\" aria-hidden=\"true\"></i>
                                        </span>
                                    </span>
                                    <input type=\"text\" name=\"fsNick\" class=\"form-control\" maxlength=\"50\"
                                           placeholder=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "user"], "method", false, false, false, 31), "html", null, true);
        echo "\" required=\"\" autocomplete=\"off\"
                                           autofocus=\"\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            <i class=\"fas fa-key fa-fw\" aria-hidden=\"true\"></i>
                                        </span>
                                    </span>
                                    <input type=\"password\" name=\"fsPassword\" class=\"form-control\" maxlength=\"50\"
                                           placeholder=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "password"], "method", false, false, false, 43), "html", null, true);
        echo "\" required=\"\" autocomplete=\"off\"/>
                                </div>
                                <a href=\"#\" class=\"btn btn-block btn-link\" data-toggle=\"modal\"
                                   data-target=\"#newPasswordModal\">
                                    ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "i-forgot-password"], "method", false, false, false, 47), "html", null, true);
        echo "
                                </a>
                            </div>
                            <button type=\"submit\" class=\"btn btn-block btn-primary mb-4\">
                                ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "login"], "method", false, false, false, 51), "html", null, true);
        echo "
                            </button>
                        </div>
                        <div class=\"card-footer text-center\">
                          
                            <a href=\"#\" rel=\"nofollow\" class=\"btn btn-secondary\">
                                <i class=\"fas fa-question-circle mr-1\"></i> Micha cloud
                            </a>
                            <a href=\"#\" rel=\"nofollow\" class=\"btn btn-primary\"
                               title=\"facebook\"> <i class=\"fab fa-facebook\"></i>
                            </a>
                            <a href=\"#\" rel=\"nofollow\" class=\"btn btn-info\"
                               title=\"twitter\"> <i class=\"fab fa-twitter\"></i>
                            </a>
                            <a href=\"#\" rel=\"nofollow\"
                               class=\"btn btn-danger\" title=\"youtube\"> <i class=\"fab fa-youtube\"></i>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <form action=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(""), "html", null, true);
        echo "\" method=\"post\" class=\"form\">
        <div class=\"modal fade\" id=\"newPasswordModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fas fa-user-lock mr-2\"></i> ";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new-password"], "method", false, false, false, 80), "html", null, true);
        echo "
                        </h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <a href=\"https://facturascripts.com/publicaciones/he-olvidado-mi-contrasena\" rel=\"nofollow\"
                           target=\"_blank\" class=\"btn btn-block btn-link mb-3\">
                            ";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "need-help-password"], "method", false, false, false, 89), "html", null, true);
        echo "
                        </a>
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <span class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">
                                        <i class=\"fas fa-user fa-fw\" aria-hidden=\"true\"></i>
                                    </span>
                                </span>
                                <input type=\"text\" name=\"fsNewUserPasswd\" class=\"form-control\" maxlength=\"50\"
                                       placeholder=\"";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "user"], "method", false, false, false, 99), "html", null, true);
        echo "\" required=\"\" autocomplete=\"off\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <span class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">
                                        <i class=\"fas fa-key fa-fw\" aria-hidden=\"true\"></i>
                                    </span>
                                </span>
                                <input type=\"password\" name=\"fsNewPasswd\" class=\"form-control\" maxlength=\"50\"
                                       placeholder=\"";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new-password"], "method", false, false, false, 110), "html", null, true);
        echo "\" required=\"\" autocomplete=\"off\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <span class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">
                                        <i class=\"fas fa-eye fa-fw\" aria-hidden=\"true\"></i>
                                    </span>
                                </span>
                                <input type=\"password\" name=\"fsNewPasswd2\" class=\"form-control\" maxlength=\"50\"
                                       placeholder=\"";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "repeat-new-password"], "method", false, false, false, 121), "html", null, true);
        echo "\"
                                       required=\"\" autocomplete=\"off\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "database"], "method", false, false, false, 126), "html", null, true);
        echo "
                            <div class=\"input-group\">
                                <span class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">
                                        <i class=\"fas fa-database fa-fw\" aria-hidden=\"true\"></i>
                                    </span>
                                </span>
                                <input type=\"password\" name=\"fsDbPasswd\" class=\"form-control\"
                                       placeholder=\"";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "db-password"], "method", false, false, false, 134), "html", null, true);
        echo "\" autocomplete=\"off\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 139), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
    }

    // line 147
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 148
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <style>
        body {
            background-color: #333A40;
        }
    </>
";
    }

    // line 156
    public function macro_loadLogo($__idfile__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "idfile" => $__idfile__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 157
            echo "    ";
            $context["url"] = "Dinamic/Assets/Images/horizontal-logo.png";
            // line 158
            echo "    ";
            if ((($context["idfile"] ?? null) > 0)) {
                // line 159
                echo "        ";
                $context["attached"] = $this->env->getFunction('attachedFile')->getCallable()(($context["idfile"] ?? null));
                // line 160
                echo "        ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["attached"] ?? null), "filename", [], "any", false, false, false, 160))) {
                    // line 161
                    echo "            ";
                    $context["url"] = twig_get_attribute($this->env, $this->source, ($context["attached"] ?? null), "url", [0 => "download"], "method", false, false, false, 161);
                    // line 162
                    echo "        ";
                }
                // line 163
                echo "    ";
            }
            // line 164
            echo "    <img class=\"card-img-top\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()(($context["url"] ?? null)), "html", null, true);
            echo "\" alt=\"FacturaScripts\"/>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Login/Login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 164,  298 => 163,  295 => 162,  292 => 161,  289 => 160,  286 => 159,  283 => 158,  280 => 157,  267 => 156,  255 => 148,  251 => 147,  240 => 139,  232 => 134,  221 => 126,  213 => 121,  199 => 110,  185 => 99,  172 => 89,  160 => 80,  151 => 74,  125 => 51,  118 => 47,  111 => 43,  96 => 31,  84 => 22,  77 => 18,  73 => 17,  69 => 16,  64 => 14,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Login/Login.html.twig", "C:\\xampp\\htdocs\\facturascripts\\Dinamic\\View\\Login\\Login.html.twig");
    }
}
