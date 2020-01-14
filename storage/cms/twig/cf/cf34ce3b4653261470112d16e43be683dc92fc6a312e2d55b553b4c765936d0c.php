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

/* /Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/partials/myslider/default.htm */
class __TwigTemplate_76e86e7b35e5cd1c50ee2be7c11377ed364916982c57417c603d3bf9ec7ccec3 extends \Twig\Template
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
        echo "<div id=\"carousel-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "\" class=\"carousel slide\" data-ride=\"carousel\">
  ";
        // line 2
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "carousel", [], "any", false, false, false, 2), "images", [], "any", false, false, false, 2)) > 1)) {
            // line 3
            echo "  <ol class=\"carousel-indicators\">
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "carousel", [], "any", false, false, false, 4), "images", [], "any", false, false, false, 4));
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
            foreach ($context['_seq'] as $context["i"] => $context["image"]) {
                // line 5
                echo "    <li data-target=\"#carousel-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "id", [], "any", false, false, false, 5), "html", null, true);
                echo "\" data-slide-to=\"";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 5) - 1), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 5)) {
                    echo " class=\"active\"";
                }
                echo "></li>
    ";
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
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "  </ol>
  ";
        }
        // line 9
        echo "
  ";
        // line 10
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "carousel", [], "any", false, false, false, 10), "images", [], "any", false, false, false, 10)) > 0)) {
            // line 11
            echo "  <div class=\"carousel-inner\" role=\"listbox\">
    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "carousel", [], "any", false, false, false, 12), "images", [], "any", false, false, false, 12));
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
            foreach ($context['_seq'] as $context["i"] => $context["image"]) {
                // line 13
                echo "    <div class=\"carousel-item ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 13)) {
                    echo " active ";
                }
                echo "\">
      <img class=\"d-block img-fluid\" src=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 14), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 14), "html", null, true);
                echo "\" >
      ";
                // line 16
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 16) || twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 16))) {
                    // line 17
                    echo "      <div class=\"carousel-caption p-5\">

        ";
                    // line 19
                    if (twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 19)) {
                        echo "<h2 class=\"h2-responsive text-shadow\" style=\"font-size: 70px\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 19), "html", null, true);
                        echo "</h2>";
                    }
                    // line 20
                    echo "
        ";
                    // line 21
                    if (twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 21)) {
                        echo "<h3 class=\"h3-responsive text-shadow\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 21), "html", null, true);
                        echo "</h3>";
                    }
                    // line 22
                    echo "
      </div>
      ";
                }
                // line 25
                echo "    </div>
    ";
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
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "  </div>
  ";
        }
        // line 29
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/partials/myslider/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 29,  171 => 27,  156 => 25,  151 => 22,  145 => 21,  142 => 20,  136 => 19,  132 => 17,  129 => 16,  123 => 14,  116 => 13,  99 => 12,  96 => 11,  94 => 10,  91 => 9,  87 => 7,  64 => 5,  47 => 4,  44 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"carousel-{{ __SELF__.id }}\" class=\"carousel slide\" data-ride=\"carousel\">
  {% if __SELF__.carousel.images|length > 1 %}
  <ol class=\"carousel-indicators\">
    {% for i, image in __SELF__.carousel.images %}
    <li data-target=\"#carousel-{{ __SELF__.id }}\" data-slide-to=\"{{ loop.index - 1 }}\"{% if loop.first %} class=\"active\"{% endif %}></li>
    {% endfor %}
  </ol>
  {% endif %}

  {% if __SELF__.carousel.images|length > 0 %}
  <div class=\"carousel-inner\" role=\"listbox\">
    {% for i, image in __SELF__.carousel.images %}
    <div class=\"carousel-item {% if loop.first %} active {% endif %}\">
      <img class=\"d-block img-fluid\" src=\"{{ image.path }}\" alt=\"{{ image.title }}\" >
      {# Show caption only if there is image title or description #}
      {% if image.title or image.description %}
      <div class=\"carousel-caption p-5\">

        {% if image.title %}<h2 class=\"h2-responsive text-shadow\" style=\"font-size: 70px\">{{ image.title }}</h2>{% endif %}

        {% if image.description %}<h3 class=\"h3-responsive text-shadow\">{{ image.description }}</h3>{% endif %}

      </div>
      {% endif %}
    </div>
    {% endfor %}
  </div>
  {% endif %}
</div>", "/Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/partials/myslider/default.htm", "");
    }
}
