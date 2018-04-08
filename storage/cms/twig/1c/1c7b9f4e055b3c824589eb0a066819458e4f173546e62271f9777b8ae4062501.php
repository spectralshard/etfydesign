<?php

/* /Volumes/External HD/Clients/www/etfydesign/themes/etfydesign/pages/home.htm */
class __TwigTemplate_c95d4eb3021a5825f10cb438801f1aee7e00bc85b2b1f32f3c6399687807998f extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("myslider"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
<section class=\"intro text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
        <h1 class=\"h1-responsive\">
            ";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Welcome to our website!"));
        echo "
            <br/>
            ";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("where the costume creation becomes a reality."));
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
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/profil.jpg");
        echo "\">
            </div>
            <div class=\"col d-none d-lg-block d-xl-block\">
            </div>
            <div class=\"col-md-7 pt-5 pb-5\">
                <h2 class=\"h2-responsive pt-3\">
                    ";
        // line 29
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Who is Etfy Design? "));
        echo "
                </h2>
                <p>
                    ";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("I always had a great passion for the world of fantasy and the gaming universe of which inspired me to create costumes of video games characters."));
        echo "
                </p>
                <span class=\"pb-3\">
                <a href=\"";
        // line 35
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about");
        echo "\" role=\"button\" class=\"btn btn-primary btn-sm\">
                    ";
        // line 36
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Learn more"));
        echo "
                </a></span>
            </div>
            <div class=\"col d-none d-lg-block d-xl-block\">
            </div>
        </div>
    </div>
</section>
";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("lastprojects"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/Volumes/External HD/Clients/www/etfydesign/themes/etfydesign/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 44,  77 => 36,  73 => 35,  67 => 32,  61 => 29,  52 => 23,  36 => 10,  31 => 8,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'myslider' %}

<section class=\"intro text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
        <h1 class=\"h1-responsive\">
            {{ 'Welcome to our website!'|_ }}
            <br/>
            {{ 'where the costume creation becomes a reality.'|_ }}
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
{% partial 'lastprojects' %}", "/Volumes/External HD/Clients/www/etfydesign/themes/etfydesign/pages/home.htm", "");
    }
}
