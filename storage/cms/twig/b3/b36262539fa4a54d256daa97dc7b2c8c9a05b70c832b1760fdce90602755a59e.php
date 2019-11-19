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

/* /Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/partials/footer.htm */
class __TwigTemplate_62d7f2ff5085370202b81075f2589fb8ad07c8277698028488af5c397794e1f7 extends \Twig\Template
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
        echo "<section id=\"footer\">
    <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12 text-center text-white\">
            <p style=\"display: inline-block\">
                ";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Follow me on: "]);
        echo "
            </p>&nbsp;&nbsp;&nbsp;
            <a href=\"https://www.facebook.com/Etfy-Design-920616611347167/\" class=\"text-white\" target=\"_blank\">
                <i class=\"fab fa-facebook-square fa-lg\"></i>
            </a>&nbsp;&nbsp;&nbsp;
            <a href=\"https://etfy.deviantart.com\" class=\"text-white\" target=\"_blank\">
                <i class=\"fab fa-deviantart fa-lg\"></i>
            </a>
        </div>
        <div class=\"col-12 text-center text-white\">
            <p>";
        // line 16
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["All rights reserved"]);
        echo " &copy; ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
        </div>
    </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"footer\">
    <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12 text-center text-white\">
            <p style=\"display: inline-block\">
                {{'Follow me on: '|_ }}
            </p>&nbsp;&nbsp;&nbsp;
            <a href=\"https://www.facebook.com/Etfy-Design-920616611347167/\" class=\"text-white\" target=\"_blank\">
                <i class=\"fab fa-facebook-square fa-lg\"></i>
            </a>&nbsp;&nbsp;&nbsp;
            <a href=\"https://etfy.deviantart.com\" class=\"text-white\" target=\"_blank\">
                <i class=\"fab fa-deviantart fa-lg\"></i>
            </a>
        </div>
        <div class=\"col-12 text-center text-white\">
            <p>{{'All rights reserved'|_ }} &copy; {{ \"now\"|date(\"Y\") }}</p>
        </div>
    </div>
    </div>
</section>", "/Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/partials/footer.htm", "");
    }
}
