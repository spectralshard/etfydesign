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

/* /Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/pages/blog/article.htm */
class __TwigTemplate_b1498b1212cf48774a3cbcb91344fe10abc571bf08fe9612376b63b51b223e89 extends \Twig\Template
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
        echo "<section id=\"blog\">
    <div class=\"container\">
        <div class=\"row\">
        <div class=\"col-12\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 5));
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
            // line 6
            echo "            <h6 class=\"h6-responsive text-center\" style=\"color: #5a5a5a\"><em>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 6), "html", null, true);
            echo "</em></h6>
            ";
            // line 7
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 7)) {
                echo ", ";
            }
            // line 8
            echo "            ";
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
        // line 9
        echo "            <h1 class=\"h1-responsive text-primary text-underline text-center\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>
            </div>

                    <div class=\"col-12\">
                    ";
        // line 13
        if (($context["post"] ?? null)) {
            // line 14
            echo "                        ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("share"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 15
            echo "                        ";
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("article"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 16
            echo "
                    ";
        } else {
            // line 18
            echo "                        <h2>Sujet introuvable</h2>
                    ";
        }
        // line 20
        echo "                    </div>
        </div>
    </div>
                <div class=\"col-12 text-center mt-5\">
                    <a href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/blogList");
        echo "\" role=\"button\" class=\"btn btn-dark\">
                        ";
        // line 25
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["View all my projects"]);
        echo "
                    </a>
                </div>

</section>";
    }

    public function getTemplateName()
    {
        return "/Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/pages/blog/article.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 25,  117 => 24,  111 => 20,  107 => 18,  103 => 16,  98 => 15,  93 => 14,  91 => 13,  83 => 9,  69 => 8,  65 => 7,  60 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"blog\">
    <div class=\"container\">
        <div class=\"row\">
        <div class=\"col-12\">
            {% for category in post.categories %}
            <h6 class=\"h6-responsive text-center\" style=\"color: #5a5a5a\"><em>{{ category.name }}</em></h6>
            {% if not loop.last %}, {% endif %}
            {% endfor %}
            <h1 class=\"h1-responsive text-primary text-underline text-center\">{{ post.title }}</h1>
            </div>

                    <div class=\"col-12\">
                    {% if post %}
                        {% partial 'share' %}
                        {% component 'article' %}

                    {% else %}
                        <h2>Sujet introuvable</h2>
                    {% endif %}
                    </div>
        </div>
    </div>
                <div class=\"col-12 text-center mt-5\">
                    <a href=\"{{ 'blog/blogList'|page }}\" role=\"button\" class=\"btn btn-dark\">
                        {{ 'View all my projects'|_ }}
                    </a>
                </div>

</section>", "/Users/alexandrefoisy/web sites/etfydesign/themes/etfydesign/pages/blog/article.htm", "");
    }
}
