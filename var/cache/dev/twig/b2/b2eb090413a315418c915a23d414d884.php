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

/* Kmom03/21-play-bank.html.twig */
class __TwigTemplate_8a2d51bc9e6302cfa9ec9c1deda01d5e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Kmom03/21-play-bank.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Kmom03/21-play-bank.html.twig"));

        $this->parent = $this->loadTemplate("Shared/base.html.twig", "Kmom03/21-play-bank.html.twig", 1);
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
        if (array_key_exists("drawn_bank", $context)) {
            // line 10
            yield "                <div>
                    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["drawn_bank"]) || array_key_exists("drawn_bank", $context) ? $context["drawn_bank"] : (function () { throw new RuntimeError('Variable "drawn_bank" does not exist.', 11, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                // line 12
                yield "                        ";
                if (($context["card"] == Twig\Extension\CoreExtension::last($this->env, (isset($context["drawn_bank"]) || array_key_exists("drawn_bank", $context) ? $context["drawn_bank"] : (function () { throw new RuntimeError('Variable "drawn_bank" does not exist.', 12, $this->source); })())))) {
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
            yield "                    <p class=\"p-total\">Bankens total: ";
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 18, $this->source); })()), "html", null, true);
            yield "</p>
                </div>
            ";
        }
        // line 21
        yield "           
            ";
        // line 22
        if (array_key_exists("drawn_player", $context)) {
            // line 23
            yield "                <div>
                    ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["drawn_player"]) || array_key_exists("drawn_player", $context) ? $context["drawn_player"] : (function () { throw new RuntimeError('Variable "drawn_player" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                // line 25
                yield "                        ";
                if (($context["card"] == Twig\Extension\CoreExtension::last($this->env, (isset($context["drawn_player"]) || array_key_exists("drawn_player", $context) ? $context["drawn_player"] : (function () { throw new RuntimeError('Variable "drawn_player" does not exist.', 25, $this->source); })())))) {
                    // line 26
                    yield "                        <img class=\"single-card-21 latest\" src=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("svg/" . $context["card"])), "html", null, true);
                    yield "\" alt=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["card"], "html", null, true);
                    yield "\">
                        ";
                } else {
                    // line 28
                    yield "                        <img class=\"single-card-21\" src=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("svg/" . $context["card"])), "html", null, true);
                    yield "\" alt=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["card"], "html", null, true);
                    yield "\">
                        ";
                }
                // line 29
                yield "            
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            yield "                    <p class=\"p-total\">Din total: ";
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["players_total"]) || array_key_exists("players_total", $context) ? $context["players_total"] : (function () { throw new RuntimeError('Variable "players_total" does not exist.', 31, $this->source); })()), "html", null, true);
            yield "</p>
                </div>
            ";
        }
        // line 34
        yield "
            ";
        // line 35
        if ((array_key_exists("total", $context) && (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 35, $this->source); })()) == 21) || (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 35, $this->source); })()) >= (isset($context["players_total"]) || array_key_exists("players_total", $context) ? $context["players_total"] : (function () { throw new RuntimeError('Variable "players_total" does not exist.', 35, $this->source); })())) && ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 35, $this->source); })()) < 21))))) {
            // line 36
            yield "                <h3>Banken vann!</h3>
                <div class=\"btn-div\">
                    <form method=\"post\" action=\"";
            // line 38
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game/play");
            yield "\">  
                        <input type=\"submit\" name=\"21\" value=\"Spela igen!\">
                    </form>
                </div>
            ";
        } elseif ((        // line 42
array_key_exists("total", $context) && (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 42, $this->source); })()) > 21) || ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 42, $this->source); })()) < (isset($context["players_total"]) || array_key_exists("players_total", $context) ? $context["players_total"] : (function () { throw new RuntimeError('Variable "players_total" does not exist.', 42, $this->source); })()))))) {
            // line 43
            yield "                <h3>Du vann!</h3>
                <div class=\"btn-div\">
                    <form method=\"post\" action=\"";
            // line 45
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game/play");
            yield "\">  
                      <input type=\"submit\" name=\"21\" value=\"Spela igen!\">
                    </form>
                </div>
            ";
        }
        // line 50
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
        return "Kmom03/21-play-bank.html.twig";
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
        return array (  212 => 50,  204 => 45,  200 => 43,  198 => 42,  191 => 38,  187 => 36,  185 => 35,  182 => 34,  175 => 31,  168 => 29,  160 => 28,  152 => 26,  149 => 25,  145 => 24,  142 => 23,  140 => 22,  137 => 21,  130 => 18,  123 => 16,  115 => 15,  107 => 13,  104 => 12,  100 => 11,  97 => 10,  95 => 9,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Shared/base.html.twig\" %}

{% block title %}Spela 21{% endblock %}

{% block body %}
    <h1>Spela 21</h1>
    <div class=\"container twentyOne-container\">
        <div>
            {% if drawn_bank is defined %}
                <div>
                    {% for card in drawn_bank %}
                        {% if card == drawn_bank|last %}
                        <img class=\"single-card-21 latest\" src=\"{{ asset('svg/' ~ card) }}\" alt=\"{{ card }}\">
                        {% else %}
                        <img class=\"single-card-21\" src=\"{{ asset('svg/' ~ card) }}\" alt=\"{{ card }}\">
                        {% endif %}            
                    {% endfor %}
                    <p class=\"p-total\">Bankens total: {{ total }}</p>
                </div>
            {% endif %}
           
            {% if drawn_player is defined %}
                <div>
                    {% for card in drawn_player %}
                        {% if card == drawn_player|last %}
                        <img class=\"single-card-21 latest\" src=\"{{ asset('svg/' ~ card) }}\" alt=\"{{ card }}\">
                        {% else %}
                        <img class=\"single-card-21\" src=\"{{ asset('svg/' ~ card) }}\" alt=\"{{ card }}\">
                        {% endif %}            
                    {% endfor %}
                    <p class=\"p-total\">Din total: {{ players_total }}</p>
                </div>
            {% endif %}

            {% if total is defined and (total == 21 or total >= players_total and total < 21) %}
                <h3>Banken vann!</h3>
                <div class=\"btn-div\">
                    <form method=\"post\" action=\"{{ path('game/play') }}\">  
                        <input type=\"submit\" name=\"21\" value=\"Spela igen!\">
                    </form>
                </div>
            {% elseif total is defined and (total > 21 or total < players_total) %}
                <h3>Du vann!</h3>
                <div class=\"btn-div\">
                    <form method=\"post\" action=\"{{ path('game/play') }}\">  
                      <input type=\"submit\" name=\"21\" value=\"Spela igen!\">
                    </form>
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %}", "Kmom03/21-play-bank.html.twig", "/home/caas23/dbwebb-kurser/mvc/me/report/templates/Kmom03/21-play-bank.html.twig");
    }
}
