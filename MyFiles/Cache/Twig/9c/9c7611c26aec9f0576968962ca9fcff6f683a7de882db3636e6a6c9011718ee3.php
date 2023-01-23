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

/* Master/MicroTemplate.html.twig */
class __TwigTemplate_3f14719dbb1c89bd767bd05a221c2c12676dbf68638c5c080fe469c95bf901c3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'icons' => [$this, 'block_icons'],
            'css' => [$this, 'block_css'],
            'javascripts' => [$this, 'block_javascripts'],
            'fullBody' => [$this, 'block_fullBody'],
            'messages' => [$this, 'block_messages'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_constant("FS_LANG"), 0, 2), "html", null, true);
        echo "\" xml:lang=\"";
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_constant("FS_LANG"), 0, 2), "html", null, true);
        echo "\" >
    <head>
        ";
        // line 24
        $this->displayBlock('meta', $context, $blocks);
        // line 49
        echo "        ";
        $this->displayBlock('icons', $context, $blocks);
        // line 53
        echo "        ";
        $this->displayBlock('css', $context, $blocks);
        // line 57
        echo "        ";
        // line 58
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["assetManager"] ?? null), "get", [0 => "css"], "method", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
            // line 59
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $context["css"], "html", null, true);
            echo "\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "        ";
        // line 66
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["assetManager"] ?? null), "get", [0 => "js"], "method", false, false, false, 66));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 67
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $context["js"], "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "        ";
        echo twig_get_attribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "renderHead", [], "method", false, false, false, 69);
        echo "
    </head>
    ";
        // line 71
        $this->displayBlock('fullBody', $context, $blocks);
        // line 85
        echo "</html>";
    }

    // line 24
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
            <title>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 26), "html", null, true);
        echo "</title>
            <meta name=\"description\" content=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "meta-description"], "method", false, false, false, 27), "html", null, true);
        echo "\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
            <meta name=\"generator\" content=\"FacturaScripts\" />
            <meta name=\"robots\" content=\"noindex\" />
            <style>
body{
    background-image: url(\"Dinamic/View/Login/img/LoginFondo.jpg\");
    background-position:center;
    background-size:cover;
   
}

.ll{
    margin-top: 100px;
    margin-left:-100px
    background-color:red;
   
    
}
</style>
   
        ";
    }

    // line 49
    public function block_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "            <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Dinamic/Assets/Images/favicon.ico"), "html", null, true);
        echo "\" />
            <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("Dinamic/Assets/Images/apple-icon-180x180.png"), "html", null, true);
        echo "\" />
        ";
    }

    // line 53
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/@fortawesome/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 61
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "            <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 71
    public function block_fullBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "        <body>
            ";
        // line 73
        $this->displayBlock('messages', $context, $blocks);
        // line 80
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 82
        echo "            ";
        echo twig_get_attribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "render", [], "method", false, false, false, 82);
        echo "
        </body>
    ";
    }

    // line 73
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "                ";
        $macros["__internal_parse_0"] = $this->loadTemplate("Macro/Utils.html.twig", "Master/MicroTemplate.html.twig", 74)->unwrap();
        // line 75
        echo "                ";
        echo twig_call_macro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), [0 => "error", 1 => "critical"], "danger"], 75, $context, $this->getSourceContext());
        echo "
                ";
        // line 76
        echo twig_call_macro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), [0 => "warning"], "warning"], 76, $context, $this->getSourceContext());
        echo "
                ";
        // line 77
        echo twig_call_macro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), [0 => "notice"], "success"], 77, $context, $this->getSourceContext());
        echo "
                ";
        // line 78
        echo twig_call_macro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), [0 => "info"], "info"], 78, $context, $this->getSourceContext());
        echo "
            ";
    }

    // line 80
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "            ";
    }

    public function getTemplateName()
    {
        return "Master/MicroTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 81,  237 => 80,  231 => 78,  227 => 77,  223 => 76,  218 => 75,  215 => 74,  211 => 73,  203 => 82,  200 => 80,  198 => 73,  195 => 72,  191 => 71,  185 => 63,  180 => 62,  176 => 61,  170 => 55,  165 => 54,  161 => 53,  155 => 51,  150 => 50,  146 => 49,  120 => 27,  116 => 26,  113 => 25,  109 => 24,  105 => 85,  103 => 71,  97 => 69,  88 => 67,  83 => 66,  81 => 65,  78 => 61,  69 => 59,  64 => 58,  62 => 57,  59 => 53,  56 => 49,  54 => 24,  47 => 22,  44 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/MicroTemplate.html.twig", "C:\\xampp\\htdocs\\facturascripts\\Dinamic\\View\\Master\\MicroTemplate.html.twig");
    }
}
