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

/* /Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/partials/lastprojects.htm */
class __TwigTemplate_77f18b85e133b2890fb3b632306c39fc88215f7d3f59fe15750ec331131975cd extends \Twig\Template
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
        echo "<section class=\"text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h2 class=\"h2-responsive text-underline text-primary\">
                    ";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["My latest new project"]);
        echo "
                </h2>
                ";
        // line 8
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogs"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 9
        echo "            </div>
            <div class=\"col-12 mt-5\">
                <a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/blogList");
        echo "\" role=\"button\" class=\"btn btn-dark\">
                    ";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["View all my projects"]);
        echo "
                </a>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/partials/lastprojects.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  57 => 11,  53 => 9,  49 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h2 class=\"h2-responsive text-underline text-primary\">
                    {{ 'My latest new project'|_ }}
                </h2>
                {% component 'blogs' %}
            </div>
            <div class=\"col-12 mt-5\">
                <a href=\"{{ 'blog/blogList'|page }}\" role=\"button\" class=\"btn btn-dark\">
                    {{ 'View all my projects'|_ }}
                </a>
            </div>
        </div>
    </div>
</section>", "/Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/partials/lastprojects.htm", "");
    }
}
