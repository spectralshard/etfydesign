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

/* /Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/partials/share.htm */
class __TwigTemplate_e9358386cb99b0e3e6cd53197f18e2e87912e0d7fe8a9341c364f3a1d909a96c extends \Twig\Template
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
        echo "<div class=\"row\">
    <div class=\"col\">
        <p style=\"display: inline-block\">
            <strong>";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Share on"]);
        echo "</strong>&nbsp;
        </p>
        <div style=\"display: inline-block\">
        <div class=\"fb-share-button\" data-layout=\"button_count\" data-size=\"small\" data-mobile-iframe=\"true\">
            <a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u&amp;src=sdkpreparse\" class=\"fb-xfbml-parse-ignore\"></a></div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/partials/share.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"col\">
        <p style=\"display: inline-block\">
            <strong>{{ 'Share on'|_ }}</strong>&nbsp;
        </p>
        <div style=\"display: inline-block\">
        <div class=\"fb-share-button\" data-layout=\"button_count\" data-size=\"small\" data-mobile-iframe=\"true\">
            <a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u&amp;src=sdkpreparse\" class=\"fb-xfbml-parse-ignore\"></a></div>
        </div>
    </div>
</div>", "/Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/partials/share.htm", "");
    }
}
