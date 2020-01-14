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

/* /Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/pages/home.htm */
class __TwigTemplate_ad8e0e8edfba5d679c28b9ceb0e22755b367006bd65278dca3e8168a03c18c29 extends \Twig\Template
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
        echo "<div class=\"d-none d-sm-block\">
";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("myslider"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "</div>
<div class=\"d-block d-sm-none\" style=\"padding-top: 5rem;\">
    ";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("myslider"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "</div>
<section class=\"intro text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
        <h1 class=\"h1-responsive\">
            ";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Welcome to our website!"]);
        echo "
            <br/>
            ";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["where costume creation becomes a reality."]);
        echo "
        </h1>
            </div>
        </div>
    </div>
</section>

<section class=\"about\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col d-none d-lg-block d-xl-block\">
            </div>
            <div class=\"col-lg-3 col-md-5 col-sm-7 pb-2\">
                <img class=\"d-block profile mx-auto\" src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/profil.jpg");
        echo "\">
            </div>
            <div class=\"col d-none d-lg-block d-xl-block\">
            </div>
            <div class=\"col-md-7 pt-5 pb-5\">
                <h2 class=\"h2-responsive pt-3\">
                    ";
        // line 33
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Who is Etfy Design? "]);
        echo "
                </h2>
                <p>
                    ";
        // line 36
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["I always had a great passion for the world of fantasy and the gaming universe of which inspired me to create costumes of video games characters."]);
        echo "
                </p>
                <span class=\"pb-3\">
                <a href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\" role=\"button\" class=\"btn btn-primary btn-sm\">
                    ";
        // line 40
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Learn more"]);
        echo "
                </a></span>
            </div>
            <div class=\"col d-none d-lg-block d-xl-block\">
            </div>
        </div>
    </div>
</section>
";
        // line 48
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("lastprojects"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 48,  106 => 40,  102 => 39,  96 => 36,  90 => 33,  81 => 27,  65 => 14,  60 => 12,  52 => 6,  48 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"d-none d-sm-block\">
{% component 'myslider' %}
</div>
<div class=\"d-block d-sm-none\" style=\"padding-top: 5rem;\">
    {% component 'myslider' %}
</div>
<section class=\"intro text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
        <h1 class=\"h1-responsive\">
            {{ 'Welcome to our website!'|_ }}
            <br/>
            {{ 'where costume creation becomes a reality.'|_ }}
        </h1>
            </div>
        </div>
    </div>
</section>

<section class=\"about\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col d-none d-lg-block d-xl-block\">
            </div>
            <div class=\"col-lg-3 col-md-5 col-sm-7 pb-2\">
                <img class=\"d-block profile mx-auto\" src=\"{{'assets/images/profil.jpg'|theme}}\">
            </div>
            <div class=\"col d-none d-lg-block d-xl-block\">
            </div>
            <div class=\"col-md-7 pt-5 pb-5\">
                <h2 class=\"h2-responsive pt-3\">
                    {{ 'Who is Etfy Design? '|_ }}
                </h2>
                <p>
                    {{ 'I always had a great passion for the world of fantasy and the gaming universe of which inspired me to create costumes of video games characters.'|_ }}
                </p>
                <span class=\"pb-3\">
                <a href=\"{{ 'about'|page }}\" role=\"button\" class=\"btn btn-primary btn-sm\">
                    {{ 'Learn more'|_ }}
                </a></span>
            </div>
            <div class=\"col d-none d-lg-block d-xl-block\">
            </div>
        </div>
    </div>
</section>
{% partial 'lastprojects' %}", "/Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/pages/home.htm", "");
    }
}
