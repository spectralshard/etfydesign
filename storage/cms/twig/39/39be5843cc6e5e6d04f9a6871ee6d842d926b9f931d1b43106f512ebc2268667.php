<?php

/* /Volumes/External HD/Clients/www/etfydesign/themes/etfydesign/layouts/default.htm */
class __TwigTemplate_b2bb8877ea465ffc6b95b51a6bf5d6bab76148deaffbe36b31f000d015eae228 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Etfy Design - ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "description", array()), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"Etfy Design\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <link rel=\"icon\" type=\"image/jpg\" href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/favicon.jpg");
        echo "\"/>
    <link href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/apple-touch-icon.png");
        echo "\" rel=\"apple-touch-icon\">
    <link href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/apple-touch-icon-precomposed.png");
        echo "\" rel=\"apple-touch-icon-precomposed\">
    <link href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/theme.css", 1 => "assets/vendor/animate.css/animate.min.css"));
        // line 17
        echo "\" rel=\"stylesheet\">
    ";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 19
        echo "</head>
<body style=\"background-color: #0b3f5a\">

<header>
    ";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "</header>


<main id=\"page\">
    ";
        // line 28
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 29
        echo "</main>

<footer>
    ";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "</footer>

";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 35
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 36
                echo "<span id=\"flash\" data-type=\"";
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "\" data-message=\"";
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "\"></span>
";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 38
        echo "
<script src=\"";
        // line 39
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/js/scripts.js", 1 => "assets/vendor/jquery/jquery-3.2.1.min.js", 2 => "assets/vendor/popper/popper.js", 3 => "assets/vendor/tether/dist/js/tether.min.js", 4 => "assets/vendor/bootstrap/dist/js/bootstrap.min.js"));
        // line 45
        echo "\"></script>

";
        // line 47
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 48
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 49
        echo "</body>";
    }

    public function getTemplateName()
    {
        return "/Volumes/External HD/Clients/www/etfydesign/themes/etfydesign/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 49,  119 => 48,  112 => 47,  108 => 45,  106 => 39,  103 => 38,  94 => 36,  91 => 35,  87 => 33,  83 => 32,  78 => 29,  76 => 28,  70 => 24,  66 => 23,  60 => 19,  57 => 18,  54 => 17,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Etfy Design - {{ this.page.title }}</title>
    <meta name=\"description\" content=\"{{ this.page.description }}\">
    <meta name=\"title\" content=\"{{ this.page.title }}\">
    <meta name=\"author\" content=\"Etfy Design\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <link rel=\"icon\" type=\"image/jpg\" href=\"{{ 'assets/images/favicon.jpg'|theme }}\"/>
    <link href=\"{{ 'assets/images/apple-touch-icon.png'|theme }}\" rel=\"apple-touch-icon\">
    <link href=\"{{ 'assets/images/apple-touch-icon-precomposed.png'|theme }}\" rel=\"apple-touch-icon-precomposed\">
    <link href=\"{{ [
    'assets/css/theme.css',
    'assets/vendor/animate.css/animate.min.css',
    ]|theme }}\" rel=\"stylesheet\">
    {% styles %}
</head>
<body style=\"background-color: #0b3f5a\">

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
'assets/vendor/jquery/jquery-3.2.1.min.js',
'assets/vendor/popper/popper.js',
'assets/vendor/tether/dist/js/tether.min.js',
'assets/vendor/bootstrap/dist/js/bootstrap.min.js',
]|theme }}\"></script>

{% framework extras %}
{% scripts %}
</body>", "/Volumes/External HD/Clients/www/etfydesign/themes/etfydesign/layouts/default.htm", "");
    }
}
