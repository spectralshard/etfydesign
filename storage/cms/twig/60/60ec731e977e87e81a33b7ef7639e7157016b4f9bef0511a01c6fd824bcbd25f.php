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

/* /Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/pages/contact.htm */
class __TwigTemplate_f49507282b73bad08fb75348444aff5503cbbbcdac4b609811d5b2759983197e extends \Twig\Template
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
        echo "<div id=\"contact\">
    <div class=\"container\">
        <h1 class=\"h1-responsive white-text text-shadow\">
            ";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact me "]);
        echo "
        </h1>
    </div>
</div>
<section>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
        ";
        // line 12
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("mycontact"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 13
        echo "            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  53 => 12,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"contact\">
    <div class=\"container\">
        <h1 class=\"h1-responsive white-text text-shadow\">
            {{ 'Contact me '|_ }}
        </h1>
    </div>
</div>
<section>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
        {% component 'mycontact' %}
            </div>
        </div>
    </div>
</section>", "/Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/pages/contact.htm", "");
    }
}
