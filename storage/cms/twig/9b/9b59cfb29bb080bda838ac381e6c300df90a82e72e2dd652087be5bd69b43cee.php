<?php

/* /Volumes/External HD/Clients/www/etfydesign/themes/etfydesign/partials/footer.htm */
class __TwigTemplate_efb815c03e95ef48774ea800698292f0deca09a4e3f55ed7bbd4309db8c95450 extends Twig_Template
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
        echo "<section id=\"footer\">
    <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12 text-center text-white\">
            <p style=\"display: inline-block\">
                ";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Follow me on: "));
        echo "
            </p>&nbsp;&nbsp;&nbsp;
            <a href=\"https://www.facebook.com/Etfy-Design-920616611347167/\" class=\"text-white\" target=\"_blank\">
                <i class=\"fa fa-facebook-square fa-lg\" aria-hidden=\"true\"></i>
            </a>&nbsp;&nbsp;&nbsp;
            <a href=\"https://etfy.deviantart.com\" class=\"text-white\" target=\"_blank\">
            <i class=\"fa fa-deviantart fa-lg\" aria-hidden=\"true\"></i>
            </a>
        </div>
        <div class=\"col-12 text-center text-white\">
            <p>";
        // line 16
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("All rights reserved"));
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
        return "/Volumes/External HD/Clients/www/etfydesign/themes/etfydesign/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 16,  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"footer\">
    <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12 text-center text-white\">
            <p style=\"display: inline-block\">
                {{'Follow me on: '|_ }}
            </p>&nbsp;&nbsp;&nbsp;
            <a href=\"https://www.facebook.com/Etfy-Design-920616611347167/\" class=\"text-white\" target=\"_blank\">
                <i class=\"fa fa-facebook-square fa-lg\" aria-hidden=\"true\"></i>
            </a>&nbsp;&nbsp;&nbsp;
            <a href=\"https://etfy.deviantart.com\" class=\"text-white\" target=\"_blank\">
            <i class=\"fa fa-deviantart fa-lg\" aria-hidden=\"true\"></i>
            </a>
        </div>
        <div class=\"col-12 text-center text-white\">
            <p>{{'All rights reserved'|_ }} &copy; {{ \"now\"|date(\"Y\") }}</p>
        </div>
    </div>
    </div>
</section>", "/Volumes/External HD/Clients/www/etfydesign/themes/etfydesign/partials/footer.htm", "");
    }
}
