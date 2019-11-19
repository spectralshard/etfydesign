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

/* /Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/partials/mycontact/default.htm */
class __TwigTemplate_e96cd74fab7f932abc78fbfb6e24cc216e270da6105caa8794c760b0bc717c59 extends \Twig\Template
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
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, false, 1), "text_top_form", [], "any", false, false, false, 1);
        echo "

<form id=\"simpleContactForm\" data-request=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onFormSubmit\">

    <div id=\"simple_contact_flash_message\"></div>


    <div class=\"form-group\">
        <label for=\"name\">";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", [], "any", false, false, false, 9), "nameLabel", [], "any", false, false, false, 9)]);
        echo "</label>
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" required >
    </div>

    <div class=\"form-group\">
        <label for=\"email\">";
        // line 14
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", [], "any", false, false, false, 14), "emailLabel", [], "any", false, false, false, 14)]);
        echo "</label>
        <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required >
    </div>

    ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", [], "any", false, false, false, 18), "phoneEnabled", [], "any", false, false, false, 18)) {
            // line 19
            echo "        <div class=\"form-group\">
            <label for=\"phone\">";
            // line 20
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", [], "any", false, false, false, 20), "phoneLabel", [], "any", false, false, false, 20)]);
            echo "</label>
            <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\" required>
        </div>
    ";
        }
        // line 24
        echo "
    <div class=\"form-group\">
        <label for=\"subject\">";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", [], "any", false, false, false, 26), "subjectLabel", [], "any", false, false, false, 26)]);
        echo "</label>
        <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\" required>
    </div>

    <div class=\"form-group\">
        <label for=\"message\">";
        // line 31
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "properties", [], "any", false, false, false, 31), "messageLabel", [], "any", false, false, false, 31)]);
        echo "</label>
        <textarea style=\"height:150px\" id=\"message\" name=\"message\" class=\"form-control\" required></textarea>
    </div>

    <!-- Injecting reCaptcha if enabled -->
    ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, false, 36), "recaptcha_enabled", [], "any", false, false, false, 36)) {
            // line 37
            echo "        <div class=\"form-group\">
            <label for=\"message\"></label>
            <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "settings", [], "any", false, false, false, 39), "recaptcha_site_key", [], "any", false, false, false, 39), "html", null, true);
            echo "\"></div>
        </div>
    ";
        }
        // line 42
        echo "    <!-- End reCaptcha -->

    <button id=\"simpleContactSubmitButton\"
            type=\"submit\" class=\"btn btn-primary float-right mt-4\">
        ";
        // line 46
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Send"]);
        echo "
    </button>

</form>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/partials/mycontact/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 46,  110 => 42,  104 => 39,  100 => 37,  98 => 36,  90 => 31,  82 => 26,  78 => 24,  71 => 20,  68 => 19,  66 => 18,  59 => 14,  51 => 9,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ __SELF__.settings.text_top_form|raw}}

<form id=\"simpleContactForm\" data-request=\"{{ __SELF__ }}::onFormSubmit\">

    <div id=\"simple_contact_flash_message\"></div>


    <div class=\"form-group\">
        <label for=\"name\">{{ __SELF__.properties.nameLabel|_ }}</label>
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" required >
    </div>

    <div class=\"form-group\">
        <label for=\"email\">{{ __SELF__.properties.emailLabel|_ }}</label>
        <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required >
    </div>

    {% if(__SELF__.properties.phoneEnabled) %}
        <div class=\"form-group\">
            <label for=\"phone\">{{ __SELF__.properties.phoneLabel|_ }}</label>
            <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\" required>
        </div>
    {% endif %}

    <div class=\"form-group\">
        <label for=\"subject\">{{ __SELF__.properties.subjectLabel|_ }}</label>
        <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\" required>
    </div>

    <div class=\"form-group\">
        <label for=\"message\">{{ __SELF__.properties.messageLabel|_ }}</label>
        <textarea style=\"height:150px\" id=\"message\" name=\"message\" class=\"form-control\" required></textarea>
    </div>

    <!-- Injecting reCaptcha if enabled -->
    {% if(__SELF__.settings.recaptcha_enabled) %}
        <div class=\"form-group\">
            <label for=\"message\"></label>
            <div class=\"g-recaptcha\" data-sitekey=\"{{__SELF__.settings.recaptcha_site_key}}\"></div>
        </div>
    {% endif %}
    <!-- End reCaptcha -->

    <button id=\"simpleContactSubmitButton\"
            type=\"submit\" class=\"btn btn-primary float-right mt-4\">
        {{'Send'|_ }}
    </button>

</form>", "/Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/partials/mycontact/default.htm", "");
    }
}
