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

/* /Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/partials/navbar.htm */
class __TwigTemplate_fcfce68f3820c5c24e531ff2772cd71f521c950d37ad45ed9806fde763070592 extends \Twig\Template
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
        echo "<nav class=\"navbar navbar-expand-md fixed-top navbar-light\">
    <a href=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" class=\"navbar-brand d-flex w-50 mr-auto d-block d-md-none\">
        <img src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/etfydesign-logo.svg");
        echo "\" title=\"Etfy Design Logo\" class=\"img-fluid\" style=\"width: 150px; height: 60px\">
    </a>
    <div class=\"hamburger hamburger--spring d-flexmr-auto d-md-none float-right\"  data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
        <div class=\"hamburger-box\">
            <div class=\"hamburger-inner\"></div>
        </div>
    </div>
    <div class=\"navbar-collapse collapse\" id=\"navbarCollapse\">
        <ul class=\"nav navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/blogList");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Portfolio"]);
        echo "</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["About me"]);
        echo "</a>
            </li>
        </ul>
        <ul class=\"nav navbar-nav mx-auto d-none d-sm-none d-md-block\">
            <li class=\"nav-item\"><a href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
                <img src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/etfydesign-logo.svg");
        echo "\" title=\"Etfy Design Logo\" class=\"img-fluid\" style=\"width: 150px;\">
            </a></li>
        </ul>
        <ul class=\"nav navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact"]);
        echo "</a>
            </li>
            <li class=\"nav-item  mx-auto\">
                ";
        // line 29
        if ((($context["lang"] ?? null) == "fr")) {
            // line 30
            echo "                <a href=\"#\"
                   class=\"nav-link\"
                   data-request=\"onSwitchLocale\"
                   data-request-data=\"locale: 'en'\" title=\"English\">
                    English
                </a>
                ";
        } else {
            // line 37
            echo "                <a href=\"#\"
                   class=\"nav-link\"
                   data-request=\"onSwitchLocale\"
                   data-request-data=\"locale: 'fr'\" title=\"Français\">
                    Français
                </a>
                ";
        }
        // line 44
        echo "            </li>
        </ul>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 44,  105 => 37,  96 => 30,  94 => 29,  86 => 26,  78 => 21,  74 => 20,  65 => 16,  57 => 13,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-md fixed-top navbar-light\">
    <a href=\"{{ 'home'|page }}\" class=\"navbar-brand d-flex w-50 mr-auto d-block d-md-none\">
        <img src=\"{{ 'assets/images/etfydesign-logo.svg'|theme }}\" title=\"Etfy Design Logo\" class=\"img-fluid\" style=\"width: 150px; height: 60px\">
    </a>
    <div class=\"hamburger hamburger--spring d-flexmr-auto d-md-none float-right\"  data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
        <div class=\"hamburger-box\">
            <div class=\"hamburger-inner\"></div>
        </div>
    </div>
    <div class=\"navbar-collapse collapse\" id=\"navbarCollapse\">
        <ul class=\"nav navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ 'blog/blogList'|page }}\">{{ 'Portfolio'|_ }}</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ 'about'|page }}\">{{ 'About me'|_ }}</a>
            </li>
        </ul>
        <ul class=\"nav navbar-nav mx-auto d-none d-sm-none d-md-block\">
            <li class=\"nav-item\"><a href=\"{{ 'home'|page }}\">
                <img src=\"{{ 'assets/images/etfydesign-logo.svg'|theme }}\" title=\"Etfy Design Logo\" class=\"img-fluid\" style=\"width: 150px;\">
            </a></li>
        </ul>
        <ul class=\"nav navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ 'contact'|page }}\">{{ 'Contact'|_ }}</a>
            </li>
            <li class=\"nav-item  mx-auto\">
                {% if lang == 'fr' %}
                <a href=\"#\"
                   class=\"nav-link\"
                   data-request=\"onSwitchLocale\"
                   data-request-data=\"locale: 'en'\" title=\"English\">
                    English
                </a>
                {% else %}
                <a href=\"#\"
                   class=\"nav-link\"
                   data-request=\"onSwitchLocale\"
                   data-request-data=\"locale: 'fr'\" title=\"Français\">
                    Français
                </a>
                {% endif %}
            </li>
        </ul>
    </div>
</nav>", "/Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/partials/navbar.htm", "");
    }
}
