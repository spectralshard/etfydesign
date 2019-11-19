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

/* /Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/layouts/default.htm */
class __TwigTemplate_cf95ba157aee239a93f32200c26a7f4847640181dca5640873b55b61d9e73dc2 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-70359045-7\"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-70359045-7');
    </script>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Etfy Design - ";
        // line 13
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 13), "title", [], "any", false, false, false, 13)]);
        echo "</title>
    <meta name=\"google-site-verification\" content=\"r9dMKr9Xx2ryKMGP6Wg20WTKsjJYjMZsa2CJxCWXRyk\" />
    <meta name=\"description\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 15), "meta_description", [], "any", false, false, false, 15), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 16), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"Etfy Design\">
    <meta name=\"robots\" content=\"index,follow\">
    <link rel=\"canonical\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
        echo "\"/>
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:image\" content=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 21), "og_image", [], "any", false, false, false, 21), "html", null, true);
        echo "\" />
    <meta property=\"og:title\" content=\"Etfy Design - ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 22), "title", [], "any", false, false, false, 22), "html", null, true);
        echo "\" />
    <meta property=\"og:url\" content=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
        echo "\" />
    <meta property=\"og:site_name\" content=\"Etfy Design\" />
    <meta property=\"og:locale\" content=\"fr_CA\">
    <meta property=\"og:description\" content=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 26), "meta_description", [], "any", false, false, false, 26), "html", null, true);
        echo "\" />
    <meta name=\"twitter:title\" content=\"";
        // line 27
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 27), "title", [], "any", false, false, false, 27)]);
        echo " | Techno24\">
    <meta name=\"twitter:description\" content=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 28), "meta_description", [], "any", false, false, false, 28), "html", null, true);
        echo "\">
    <meta name=\"twitter:image\" content=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 29), "og_image", [], "any", false, false, false, 29), "html", null, true);
        echo "\">
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <link rel=\"icon\" type=\"image/jpg\" href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.png");
        echo "\"/>
    <link href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-touch-icon.png");
        echo "\" rel=\"apple-touch-icon\">
    <link href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/apple-touch-icon-precomposed.png");
        echo "\" rel=\"apple-touch-icon-precomposed\">
    <link href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/theme.css", 1 => "assets/vendor/animate.css/animate.min.css"]);
        // line 38
        echo "\" rel=\"stylesheet\">
    ";
        // line 39
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 40
        echo "</head>
<body>
<header>
    ";
        // line 43
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 44
        echo "</header>
<main id=\"page\">
    ";
        // line 46
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 47
        echo "</main>
<footer>
    ";
        // line 49
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "</footer>
";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 51
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 52
                echo "<span id=\"flash\" data-type=\"";
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "\" data-message=\"";
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "\"></span>
";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 54
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/scripts.js", 1 => "assets/vendor/jquery/jquery-3.4.1.min.js", 2 => "assets/vendor/bootstrap/js/bootstrap.min.js"]);
        // line 58
        echo "\"></script>
";
        // line 59
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 60
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 61
        echo "</body>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 61,  178 => 60,  167 => 59,  164 => 58,  161 => 54,  152 => 52,  149 => 51,  146 => 50,  142 => 49,  138 => 47,  136 => 46,  132 => 44,  128 => 43,  123 => 40,  120 => 39,  117 => 38,  115 => 35,  111 => 34,  107 => 33,  103 => 32,  97 => 29,  93 => 28,  89 => 27,  85 => 26,  79 => 23,  75 => 22,  71 => 21,  66 => 19,  60 => 16,  56 => 15,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-70359045-7\"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-70359045-7');
    </script>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Etfy Design - {{ this.page.title|_ }}</title>
    <meta name=\"google-site-verification\" content=\"r9dMKr9Xx2ryKMGP6Wg20WTKsjJYjMZsa2CJxCWXRyk\" />
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.title }}\">
    <meta name=\"author\" content=\"Etfy Design\">
    <meta name=\"robots\" content=\"index,follow\">
    <link rel=\"canonical\" href=\"{{ ''|page }}\"/>
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:image\" content=\"{{ this.page.og_image }}\" />
    <meta property=\"og:title\" content=\"Etfy Design - {{ this.page.title }}\" />
    <meta property=\"og:url\" content=\"{{ ''|page }}\" />
    <meta property=\"og:site_name\" content=\"Etfy Design\" />
    <meta property=\"og:locale\" content=\"fr_CA\">
    <meta property=\"og:description\" content=\"{{ this.page.meta_description }}\" />
    <meta name=\"twitter:title\" content=\"{{ this.page.title|_ }} | Techno24\">
    <meta name=\"twitter:description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"twitter:image\" content=\"{{ this.page.og_image }}\">
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <link rel=\"icon\" type=\"image/jpg\" href=\"{{ 'assets/images/favicon.png'|theme }}\"/>
    <link href=\"{{ 'assets/images/apple-touch-icon.png'|theme }}\" rel=\"apple-touch-icon\">
    <link href=\"{{ 'assets/images/apple-touch-icon-precomposed.png'|theme }}\" rel=\"apple-touch-icon-precomposed\">
    <link href=\"{{ [
    'assets/css/theme.css',
    'assets/vendor/animate.css/animate.min.css',
    ]|theme }}\" rel=\"stylesheet\">
    {% styles %}
</head>
<body>
<header>
    {% partial 'navbar' %}
</header>
<main id=\"page\">
    {% page %}
</main>
<footer>
    {% partial 'footer' %}
</footer>
{% flash %}
<span id=\"flash\" data-type=\"{{ type }}\" data-message=\"{{ message }}\"></span>
{% endflash %}
<script src=\"{{ [
'assets/js/scripts.js',
'assets/vendor/jquery/jquery-3.4.1.min.js',
'assets/vendor/bootstrap/js/bootstrap.min.js',
]|theme }}\"></script>
{% framework extras %}
{% scripts %}
</body>", "/Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/layouts/default.htm", "");
    }
}
