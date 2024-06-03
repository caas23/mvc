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

/* Shared/api.html.twig */
class __TwigTemplate_aa4357f520a8b9e4d6e038fcac0e9f26 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shared/api.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Shared/api.html.twig"));

        $this->parent = $this->loadTemplate("Shared/base.html.twig", "Shared/api.html.twig", 1);
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

        yield "Api";
        
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
        yield "    <h1>Api</h1>
    <div class=\"container\">
        <div class=\"api-div\">
        <h3>
            Nedan listas tillgängliga JSON routes.
        </h3>
            <ul>
                <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api/quote");
        yield "\" target=\"_blank\">Citat (/api/quote)</a>
                <li>
                    Visar ett (av tre) slumpmässigt citat av en känd person.
                    Dessutom visas det datum och den tid citatet genererades.
                </li>

                <h4>Kortlek utan jokrar</h4>
                

                <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api/deck");
        yield "\" target=\"_blank\">Visa alla kort sorterade per färg och värde</a>
                <li>
                    Visar 52 kort sorterad.
                </li>
                
                <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api/deck/shuffle");
        yield "\" target=\"_blank\">Visa alla kort i slumpad ordning</a>
                <li>
                    Visar 52 kort i slumpad ordning, varje slumpad omgång uppdaterar korten i sessionen.
                </li>
               
                <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api/deck/draw");
        yield "\" target=\"_blank\">Dra <strong>ett</strong> slumpmässigt kort</a>
                <li>
                    Visa ett slumpmässigt kort från kortleken.
                </li>
                
                <li>
                    Dra <strong>x antal</strong> slumpmässiga kort
                    <form method=\"post\" action=\"\" target=\"_blank\">  
                        <input type=\"number\" name=\"num_cards\" min=\"1\" max=\"52\" placeholder=\"1\">
                        <input type=\"submit\" name=\"\" value=\"Visa kort\">
                    </form>
                </li>
                
                <h4>Kortlek med jokrar</h4>
                
                <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api/deck/joker");
        yield "\" target=\"_blank\">Visa alla kort (inklusive jokrar) sorterade per färg och värde</a>
                <li>
                    Visar 54 kort sorterad.
                </li>

                <a href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api/deck/joker/shuffle");
        yield "\" target=\"_blank\">Visa alla kort (inklusive jokrar) i slumpad ordning</a>
                <li>
                    Visar 54 kort i slumpad ordning, varje slumpad omgång uppdaterar korten i sessionen.
                </li>

                <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api/deck/joker/draw");
        yield "\" target=\"_blank\">Dra <strong>ett</strong> slumpmässigt kort</a>
                <li>
                    Visa ett slumpmässigt kort från kortleken.
                </li>

                <li>
                    Dra <strong>x antal</strong> slumpmässiga kort (inklusive jokrar)
                    <form method=\"post\" action=\"\" target=\"_blank\">  
                        <input type=\"number\" name=\"num_cards_joker\" min=\"1\" max=\"54\" placeholder=\"1\">
                        <input type=\"submit\" name=\"\" value=\"Visa kort\">
                    </form>
                </li>

                <h4>Spel</h4>
                
                <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api/game");
        yield "\" target=\"_blank\">Statistik 21</a>
                <li>
                    Visar nuvarande ställning i spelet 21.
                </li>
                
                
                <h4>Bibliotek</h4>
                
                <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api/library/books");
        yield "\" target=\"_blank\">Böcker bibliotek</a>
                <li>
                    Visar alla böcker som finns i sparade i biblioteket.
                </li>
                
                <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api/library/book", ["isbn" => 9789144105567]);
        yield "\" target=\"_blank\">Visa en bok</a>
                <li>
                    Visar en bok som finns i sparad i biblioteket, via dess ISBN.<br>
                    Klicka på länken för att komma till ett exempel, eller ange<br>
                    <code>/api/library/book/:isbn</code> för att visa valfri bok.
                </li>

            </ul>
        </div>
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
        return "Shared/api.html.twig";
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
        return array (  198 => 85,  190 => 80,  179 => 72,  161 => 57,  153 => 52,  145 => 47,  127 => 32,  119 => 27,  111 => 22,  99 => 13,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Shared/base.html.twig\" %}

{% block title %}Api{% endblock %}

{% block body %}
    <h1>Api</h1>
    <div class=\"container\">
        <div class=\"api-div\">
        <h3>
            Nedan listas tillgängliga JSON routes.
        </h3>
            <ul>
                <a href=\"{{ path('api/quote') }}\" target=\"_blank\">Citat (/api/quote)</a>
                <li>
                    Visar ett (av tre) slumpmässigt citat av en känd person.
                    Dessutom visas det datum och den tid citatet genererades.
                </li>

                <h4>Kortlek utan jokrar</h4>
                

                <a href=\"{{ path('api/deck') }}\" target=\"_blank\">Visa alla kort sorterade per färg och värde</a>
                <li>
                    Visar 52 kort sorterad.
                </li>
                
                <a href=\"{{ path('api/deck/shuffle') }}\" target=\"_blank\">Visa alla kort i slumpad ordning</a>
                <li>
                    Visar 52 kort i slumpad ordning, varje slumpad omgång uppdaterar korten i sessionen.
                </li>
               
                <a href=\"{{ path('api/deck/draw') }}\" target=\"_blank\">Dra <strong>ett</strong> slumpmässigt kort</a>
                <li>
                    Visa ett slumpmässigt kort från kortleken.
                </li>
                
                <li>
                    Dra <strong>x antal</strong> slumpmässiga kort
                    <form method=\"post\" action=\"\" target=\"_blank\">  
                        <input type=\"number\" name=\"num_cards\" min=\"1\" max=\"52\" placeholder=\"1\">
                        <input type=\"submit\" name=\"\" value=\"Visa kort\">
                    </form>
                </li>
                
                <h4>Kortlek med jokrar</h4>
                
                <a href=\"{{ path('api/deck/joker') }}\" target=\"_blank\">Visa alla kort (inklusive jokrar) sorterade per färg och värde</a>
                <li>
                    Visar 54 kort sorterad.
                </li>

                <a href=\"{{ path('api/deck/joker/shuffle') }}\" target=\"_blank\">Visa alla kort (inklusive jokrar) i slumpad ordning</a>
                <li>
                    Visar 54 kort i slumpad ordning, varje slumpad omgång uppdaterar korten i sessionen.
                </li>

                <a href=\"{{ path('api/deck/joker/draw') }}\" target=\"_blank\">Dra <strong>ett</strong> slumpmässigt kort</a>
                <li>
                    Visa ett slumpmässigt kort från kortleken.
                </li>

                <li>
                    Dra <strong>x antal</strong> slumpmässiga kort (inklusive jokrar)
                    <form method=\"post\" action=\"\" target=\"_blank\">  
                        <input type=\"number\" name=\"num_cards_joker\" min=\"1\" max=\"54\" placeholder=\"1\">
                        <input type=\"submit\" name=\"\" value=\"Visa kort\">
                    </form>
                </li>

                <h4>Spel</h4>
                
                <a href=\"{{ path('api/game') }}\" target=\"_blank\">Statistik 21</a>
                <li>
                    Visar nuvarande ställning i spelet 21.
                </li>
                
                
                <h4>Bibliotek</h4>
                
                <a href=\"{{ path('api/library/books') }}\" target=\"_blank\">Böcker bibliotek</a>
                <li>
                    Visar alla böcker som finns i sparade i biblioteket.
                </li>
                
                <a href=\"{{ path('api/library/book', {'isbn': 9789144105567}) }}\" target=\"_blank\">Visa en bok</a>
                <li>
                    Visar en bok som finns i sparad i biblioteket, via dess ISBN.<br>
                    Klicka på länken för att komma till ett exempel, eller ange<br>
                    <code>/api/library/book/:isbn</code> för att visa valfri bok.
                </li>

            </ul>
        </div>
    </div>
{% endblock %}", "Shared/api.html.twig", "/home/caas23/dbwebb-kurser/mvc/me/report/templates/Shared/api.html.twig");
    }
}
