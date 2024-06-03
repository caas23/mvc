<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Kmom03/21-play.html.twig */
class __TwigTemplate_6cfe88da4b9f8a6b14ac1fbf543c5f25 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Shared/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Kmom03/21-play.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Kmom03/21-play.html.twig"));

        $this->parent = $this->loadTemplate("Shared/base.html.twig", "Kmom03/21-play.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Spela 21";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1>Spela 21</h1>
    <div class=\"container twentyOne-container\">
        <div>
            ";
        // line 9
        if (array_key_exists("drawn", $context)) {
            // line 10
            yield "                <div>
                    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["drawn"]) || array_key_exists("drawn", $context) ? $context["drawn"] : (function () { throw new RuntimeError('Variable "drawn" does not exist.', 11, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                // line 12
                yield "                        ";
                if (($context["card"] == Twig\Extension\CoreExtension::last($this->env, (isset($context["drawn"]) || array_key_exists("drawn", $context) ? $context["drawn"] : (function () { throw new RuntimeError('Variable "drawn" does not exist.', 12, $this->source); })())))) {
                    // line 13
                    yield "                        <img class=\"single-card-21 latest\" src=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("svg/" . $context["card"])), "html", null, true);
                    yield "\" alt=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["card"], "html", null, true);
                    yield "\">
                        ";
                } else {
                    // line 15
                    yield "                        <img class=\"single-card-21\" src=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("svg/" . $context["card"])), "html", null, true);
                    yield "\" alt=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["card"], "html", null, true);
                    yield "\">
                        ";
                }
                // line 16
                yield "            
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            yield "                    ";
            if (((isset($context["aceCard"]) || array_key_exists("aceCard", $context) ? $context["aceCard"] : (function () { throw new RuntimeError('Variable "aceCard" does not exist.', 18, $this->source); })()) == true)) {
                // line 19
                yield "                        <div class=\"btn-div\">
                            <form class=\"ace-form\" method=\"post\" action=\"\">
                                <h4>Vilket värde vill du sätta esset till?</h4>
                                <input class=\"radio-input\" type=\"radio\" name=\"ace\" value=\"1\" required>
                                <label for \"1\">1</label><br>
                                <input class=\"radio-input\" type=\"radio\" name=\"ace\" value=\"14\" required>
                                <label for \"14\">14</label><br>
                                <input type=\"submit\" class=\"twentyOne-btn\" name=\"21\" value=\"Ange värde\">
                            </form>
                        </div>
                    ";
            }
            // line 30
            yield "                </div>
                Din total: ";
            // line 31
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 31, $this->source); })()), "html", null, true);
            yield "
            ";
        }
        // line 33
        yield "
            <div class=\"btn-div\">
                ";
        // line 35
        if (( !array_key_exists("total", $context) || (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 35, $this->source); })()) < 21) && ((isset($context["aceCard"]) || array_key_exists("aceCard", $context) ? $context["aceCard"] : (function () { throw new RuntimeError('Variable "aceCard" does not exist.', 35, $this->source); })()) == false)))) {
            // line 36
            yield "                <form method=\"post\" action=\"\">
                    <input type=\"submit\" class=\"twentyOne-btn\" name=\"21\" value=\"Dra nytt kort\">
                    ";
            // line 38
            if ((array_key_exists("total", $context) && ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 38, $this->source); })()) < 21))) {
                yield "  
                        <input type=\"submit\" class=\"twentyOne-btn\" name=\"21\" value=\"Stanna\">
                    ";
            }
            // line 41
            yield "                </form>
                ";
        }
        // line 43
        yield "            </div>

            ";
        // line 45
        if ((array_key_exists("total", $context) && ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 45, $this->source); })()) == 21))) {
            // line 46
            yield "                <h3>Du vann!</h3>
            ";
        } elseif ((        // line 47
array_key_exists("total", $context) && ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 47, $this->source); })()) > 21))) {
            // line 48
            yield "                <h3>Du förlorade!</h3>
            ";
        }
        // line 50
        yield "            
            ";
        // line 51
        if ((array_key_exists("total", $context) && ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 51, $this->source); })()) >= 21))) {
            // line 52
            yield "                <div class=\"btn-div\">
                    <form method=\"post\" action=\"\">  
                        <input type=\"submit\" name=\"21\" value=\"Spela igen!\">
                    </form>
                </div>
            ";
        }
        // line 58
        yield "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Kmom03/21-play.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  202 => 58,  194 => 52,  192 => 51,  189 => 50,  185 => 48,  183 => 47,  180 => 46,  178 => 45,  174 => 43,  170 => 41,  164 => 38,  160 => 36,  158 => 35,  154 => 33,  149 => 31,  146 => 30,  133 => 19,  130 => 18,  123 => 16,  115 => 15,  107 => 13,  104 => 12,  100 => 11,  97 => 10,  95 => 9,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Shared/base.html.twig\" %}

{% block title %}Spela 21{% endblock %}

{% block body %}
    <h1>Spela 21</h1>
    <div class=\"container twentyOne-container\">
        <div>
            {% if drawn is defined %}
                <div>
                    {% for card in drawn %}
                        {% if card == drawn|last %}
                        <img class=\"single-card-21 latest\" src=\"{{ asset('svg/' ~ card) }}\" alt=\"{{ card }}\">
                        {% else %}
                        <img class=\"single-card-21\" src=\"{{ asset('svg/' ~ card) }}\" alt=\"{{ card }}\">
                        {% endif %}            
                    {% endfor %}
                    {% if aceCard == true %}
                        <div class=\"btn-div\">
                            <form class=\"ace-form\" method=\"post\" action=\"\">
                                <h4>Vilket värde vill du sätta esset till?</h4>
                                <input class=\"radio-input\" type=\"radio\" name=\"ace\" value=\"1\" required>
                                <label for \"1\">1</label><br>
                                <input class=\"radio-input\" type=\"radio\" name=\"ace\" value=\"14\" required>
                                <label for \"14\">14</label><br>
                                <input type=\"submit\" class=\"twentyOne-btn\" name=\"21\" value=\"Ange värde\">
                            </form>
                        </div>
                    {% endif %}
                </div>
                Din total: {{ total }}
            {% endif %}

            <div class=\"btn-div\">
                {% if total is not defined or (total < 21 and aceCard == false) %}
                <form method=\"post\" action=\"\">
                    <input type=\"submit\" class=\"twentyOne-btn\" name=\"21\" value=\"Dra nytt kort\">
                    {% if (total is defined and total < 21) %}  
                        <input type=\"submit\" class=\"twentyOne-btn\" name=\"21\" value=\"Stanna\">
                    {% endif %}
                </form>
                {% endif %}
            </div>

            {% if total is defined and total == 21 %}
                <h3>Du vann!</h3>
            {% elseif total is defined and total > 21 %}
                <h3>Du förlorade!</h3>
            {% endif %}
            
            {% if total is defined and total >= 21 %}
                <div class=\"btn-div\">
                    <form method=\"post\" action=\"\">  
                        <input type=\"submit\" name=\"21\" value=\"Spela igen!\">
                    </form>
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %}", "Kmom03/21-play.html.twig", "/home/caas23/dbwebb-kurser/mvc/me/report/templates/Kmom03/21-play.html.twig");
    }
}
