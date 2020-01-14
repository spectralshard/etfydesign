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

/* /Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/partials/article/default.htm */
class __TwigTemplate_5b9fb102e7e27f1eb91e568ff814480b5fa9c6e6f9213aa259ea974a318cb360 extends \Twig\Template
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
        $context["post"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "post", [], "any", false, false, false, 1);
        // line 2
        echo "
<div class=\"row\">
    <div class=\"col-12\">
                ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, false, 5), "count", [], "any", false, false, false, 5)) {
            // line 6
            echo "                <div class=\"featured-images text-center mt-4\">
                    <img class=\"img-fluid\"
                             data-src=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, false, 8), 0, [], "any", false, false, false, 8), "filename", [], "any", false, false, false, 8), "html", null, true);
            echo "\"
                             src=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, false, 9), 0, [], "any", false, false, false, 9), "path", [], "any", false, false, false, 9), "html", null, true);
            echo "\"
                             alt=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, false, 10), 0, [], "any", false, false, false, 10), "description", [], "any", false, false, false, 10), "html", null, true);
            echo "\"/>

                    </div>
                ";
        }
        // line 14
        echo "            </div>
    <div class=\"col-12 mt-4\">
                ";
        // line 16
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, false, 16);
        echo "
    </div>


            ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, false, 20), "count", [], "any", false, false, false, 20)) {
            // line 21
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, false, 21));
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
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 22
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 22) != 1)) {
                    // line 23
                    echo "                        <div class=\"col-sm-3 text-center\">
                            <img
                                    class=\"img-fluid\"
                                    data-src=\"";
                    // line 26
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 26), "html", null, true);
                    echo "\"
                                    src=\"";
                    // line 27
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 27), "html", null, true);
                    echo "\"
                                    alt=\"";
                    // line 28
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 28), "html", null, true);
                    echo "\">
                        </div>
                    ";
                }
                // line 31
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            ";
        }
        // line 33
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/partials/article/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 33,  132 => 32,  118 => 31,  112 => 28,  108 => 27,  104 => 26,  99 => 23,  96 => 22,  78 => 21,  76 => 20,  69 => 16,  65 => 14,  58 => 10,  54 => 9,  50 => 8,  46 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set post = __SELF__.post %}

<div class=\"row\">
    <div class=\"col-12\">
                {% if post.featured_images.count %}
                <div class=\"featured-images text-center mt-4\">
                    <img class=\"img-fluid\"
                             data-src=\"{{ post.featured_images.0.filename }}\"
                             src=\"{{ post.featured_images.0.path }}\"
                             alt=\"{{ post.featured_images.0.description }}\"/>

                    </div>
                {% endif %}
            </div>
    <div class=\"col-12 mt-4\">
                {{ post.content_html|raw }}
    </div>


            {% if post.featured_images.count %}
                {% for image in post.featured_images %}
                    {% if loop.index != 1 %}
                        <div class=\"col-sm-3 text-center\">
                            <img
                                    class=\"img-fluid\"
                                    data-src=\"{{ image.filename }}\"
                                    src=\"{{ image.path }}\"
                                    alt=\"{{ image.description }}\">
                        </div>
                    {% endif %}
                {% endfor %}
            {% endif %}

</div>", "/Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/partials/article/default.htm", "");
    }
}
