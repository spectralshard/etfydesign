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

/* /Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/pages/blog/blogList.htm */
class __TwigTemplate_b7d938fdb66194b124529417c451329ad85581462394e4e53018a233b6c2a7c3 extends \Twig\Template
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
        echo "<section>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                <h1 class=\"h1-responsive text-center text-primary text-underline\">Portfolio</h1>
                </div>
            </div>

                ";
        // line 9
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogs"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 10
        echo "
        </div>
    </section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/pages/blog/blogList.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                <h1 class=\"h1-responsive text-center text-primary text-underline\">Portfolio</h1>
                </div>
            </div>

                {% component 'blogs' %}

        </div>
    </section>", "/Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/pages/blog/blogList.htm", "");
    }
}
