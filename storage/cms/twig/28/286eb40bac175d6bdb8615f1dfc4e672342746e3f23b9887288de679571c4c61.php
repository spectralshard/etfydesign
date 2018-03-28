<?php

/* /Volumes/External HD/Clients/www/etfydesign/themes/etfydesign/partials/navbar.htm */
class __TwigTemplate_b0aaf00d79b1d247b3d49952d51477bbce718c5ee011ff17e03dec09fe8b7912 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-expand-md fixed-top navbar-light\">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\" class=\"navbar-brand d-flex w-50 mr-auto d-block d-md-none\">
        <img src=\"";
        // line 3
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/etfydesign-logo.svg");
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
                <a class=\"nav-link\" href=\"portfolio\">";
        // line 13
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Portfolio"));
        echo "</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"about\">";
        // line 16
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("About me"));
        echo "</a>
            </li>
        </ul>
        <ul class=\"nav navbar-nav mx-auto d-none d-sm-none d-md-block\">
            <li class=\"nav-item\"><a href=\"";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">
                <img src=\"";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/etfydesign-logo.svg");
        echo "\" title=\"Etfy Design Logo\" class=\"img-fluid\" style=\"width: 150px;\">
            </a></li>
        </ul>
        <ul class=\"nav navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"contact\">";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Contact"));
        echo "</a>
            </li>
            <li class=\"nav-item\">
                ";
        // line 29
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("language"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 30
        echo "            </li>
        </ul>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/Volumes/External HD/Clients/www/etfydesign/themes/etfydesign/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 30,  70 => 29,  64 => 26,  56 => 21,  52 => 20,  45 => 16,  39 => 13,  26 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-md fixed-top navbar-light\">
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
                <a class=\"nav-link\" href=\"portfolio\">{{ 'Portfolio'|_ }}</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"about\">{{ 'About me'|_ }}</a>
            </li>
        </ul>
        <ul class=\"nav navbar-nav mx-auto d-none d-sm-none d-md-block\">
            <li class=\"nav-item\"><a href=\"{{ 'home'|page }}\">
                <img src=\"{{ 'assets/images/etfydesign-logo.svg'|theme }}\" title=\"Etfy Design Logo\" class=\"img-fluid\" style=\"width: 150px;\">
            </a></li>
        </ul>
        <ul class=\"nav navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"contact\">{{ 'Contact'|_ }}</a>
            </li>
            <li class=\"nav-item\">
                {% component 'language' %}
            </li>
        </ul>
    </div>
</nav>", "/Volumes/External HD/Clients/www/etfydesign/themes/etfydesign/partials/navbar.htm", "");
    }
}
