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

/* /Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/partials/blogs/default.htm */
class __TwigTemplate_43a4c7d98e87bfa8777d07c300bddb205b579c2735b04454c172ef3ebbe075b0 extends \Twig\Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "posts", [], "any", false, false, false, 1);
        // line 2
        echo "<div class=\"row\">

    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "                <div class=\"col-lg-6 col-sm-12 mt-3 mb-2\">
                <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 6), "html", null, true);
            echo "\">
                <div class=\"container-box\">

                ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 9), "count", [], "any", false, false, false, 9)) {
                // line 10
                echo "
                <div class=\"featured-images text-center\">
                    <img class=\"img-fluid\"
                         data-src=\"";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 13), 0, [], "any", false, false, false, 13), "filename", [], "any", false, false, false, 13), "html", null, true);
                echo "\"
                         src=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 14), 0, [], "any", false, false, false, 14), "path", [], "any", false, false, false, 14), "html", null, true);
                echo "\"
                         alt=\"";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 15), 0, [], "any", false, false, false, 15), "description", [], "any", false, false, false, 15), "html", null, true);
                echo "\"/>
                </div>
                ";
            }
            // line 18
            echo "                    <div class=\"overlay\">
                    <div class=\"text\">
                        ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 20), "count", [], "any", false, false, false, 20)) {
                // line 21
                echo "                        ";
            }
            // line 22
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 22));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 23
                echo "                        <h6 class=\"h6-responsive\" style=\"color: #ffffff\"><em>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 23), "html", null, true);
                echo "</em></h6>
                        ";
                // line 24
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 24)) {
                    echo ", ";
                }
                // line 25
                echo "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                        <h5 class=\"h5-responsive\"><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 26), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 26), "html", null, true);
            echo "</a></h5>
                    </div>
                </div>
                </div>
                </a>
                </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "    <div class=\"no-data\">Aucun sujet trouvé</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/partials/blogs/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 35,  143 => 33,  128 => 26,  114 => 25,  110 => 24,  105 => 23,  87 => 22,  84 => 21,  82 => 20,  78 => 18,  72 => 15,  68 => 14,  64 => 13,  59 => 10,  57 => 9,  51 => 6,  48 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set posts = __SELF__.posts %}
<div class=\"row\">

    {% for post in posts %}
                <div class=\"col-lg-6 col-sm-12 mt-3 mb-2\">
                <a href=\"{{ post.url }}\">
                <div class=\"container-box\">

                {% if post.featured_images.count %}

                <div class=\"featured-images text-center\">
                    <img class=\"img-fluid\"
                         data-src=\"{{ post.featured_images.0.filename }}\"
                         src=\"{{ post.featured_images.0.path }}\"
                         alt=\"{{ post.featured_images.0.description }}\"/>
                </div>
                {% endif %}
                    <div class=\"overlay\">
                    <div class=\"text\">
                        {% if post.categories.count %}
                        {% endif %}
                        {% for category in post.categories %}
                        <h6 class=\"h6-responsive\" style=\"color: #ffffff\"><em>{{ category.name }}</em></h6>
                        {% if not loop.last %}, {% endif %}
                        {% endfor %}
                        <h5 class=\"h5-responsive\"><a href=\"{{ post.url }}\">{{ post.title }}</a></h5>
                    </div>
                </div>
                </div>
                </a>
                </div>
    {% else %}
    <div class=\"no-data\">Aucun sujet trouvé</div>
    {% endfor %}

</div>", "/Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/partials/blogs/default.htm", "");
    }
}
