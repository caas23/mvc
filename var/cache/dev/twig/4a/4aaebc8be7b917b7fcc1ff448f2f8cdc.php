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

/* Kmom02/card.html.twig */
class __TwigTemplate_146c4cce7c924ea275a42cb8bddcdac5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Kmom02/card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Kmom02/card.html.twig"));

        $this->parent = $this->loadTemplate("Shared/base.html.twig", "Kmom02/card.html.twig", 1);
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

        yield "Kort";
        
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
        yield "    <h1>Kort</h1>
    <div class=\"card-container\">
        <div class=\"link-div\">
        <h4>
            Kortlek utan jokrar
        </h4>
        <ul>
            <li>
                <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card/deck");
        yield "\">Visa alla kort sorterade per färg och värde</a>
            </li>
            <li>
                <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card/deck/shuffle");
        yield "\">Visa alla kort i slumpad ordning</a>
            </li>
            <li>
                <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card/deck/draw");
        yield "\">Dra <strong>ett</strong> slumpmässigt kort</a>
            </li>
            <li>
                Dra <strong>x antal</strong> slumpmässiga kort
                <form method=\"post\" action=\"\">  
                    <input type=\"number\" name=\"num_cards\" min=\"1\" max=\"52\" placeholder=\"1\">
                    <input type=\"submit\" name=\"\" value=\"Visa kort\">
                </form>
            </li>
            <li>
                Dela ut <strong>x antal</strong> kort till <strong>x antal</strong> spelare.<br>
                Använd följade route <code>/card/deck/deal/:players/:cards</code>
            </li>
        </ul>
        <h4>
            Kortlek med jokrar
        </h4>
        <ul>
            <li>
               <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card/deck/joker");
        yield "\">Visa alla kort sorterade per färg och värde</a>
            </li>
            <li>
                <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card/deck/joker/shuffle");
        yield "\">Visa alla kort i slumpad ordning</a>
            </li>
            <li>
                <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card/deck/joker/draw");
        yield "\">Dra <strong>ett</strong> slumpmässigt kort</a>
            </li>
            <li>
                Dra <strong>x antal</strong> slumpmässiga kort
                <form method=\"post\" action=\"\">  
                    <input type=\"number\" name=\"num_cards_joker\" min=\"1\" max=\"54\" placeholder=\"1\">
                    <input type=\"submit\" name=\"\" value=\"Visa kort\">
                </form>
            </li>
            <li>
                Dela ut <strong>x antal</strong> kort till <strong>x antal</strong> spelare.<br>
                Använd följade route <code>/card/deck/joker/deal/:players/:cards</code>
            </li>
        </ul>
        </div>
        <div class=\"text-div\">
            <h4>Kod och klasser</h4>
            <p>
                Jag har fyra klasser för korten, <code>Card</code>, <code>CardHand</code>, <code>DeckOfCards</code> och <code>DeckOfCardsJoker</code>.
                <code>Card</code>-klassen har en metod, som hämtar ut ett kort. <code>CardHand</code> har tre metoder, <code>add</code>, 
                <code>getNumberOfCards</code> och <code>getOneCard</code>, samtidigt som den även har en kompositionsrelation till <code>Card</code>-klassen.
                <br><br>
                <code>DeckOfCards</code> har två metoder, <code>getCards</code> samt <code>getCardsShuffled</code>. <code>DeckOfCardsJoker</code>
                ärver från denna klass.
                <img class=\"uml-img\" src=\"";
        // line 69
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/uml.png"), "html", null, true);
        yield "\" alt=\"\">
            </p>
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
        return "Kmom02/card.html.twig";
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
        return array (  173 => 69,  146 => 45,  140 => 42,  134 => 39,  112 => 20,  106 => 17,  100 => 14,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Shared/base.html.twig\" %}

{% block title %}Kort{% endblock %}

{% block body %}
    <h1>Kort</h1>
    <div class=\"card-container\">
        <div class=\"link-div\">
        <h4>
            Kortlek utan jokrar
        </h4>
        <ul>
            <li>
                <a href=\"{{ path('card/deck') }}\">Visa alla kort sorterade per färg och värde</a>
            </li>
            <li>
                <a href=\"{{ path('card/deck/shuffle') }}\">Visa alla kort i slumpad ordning</a>
            </li>
            <li>
                <a href=\"{{ path('card/deck/draw') }}\">Dra <strong>ett</strong> slumpmässigt kort</a>
            </li>
            <li>
                Dra <strong>x antal</strong> slumpmässiga kort
                <form method=\"post\" action=\"\">  
                    <input type=\"number\" name=\"num_cards\" min=\"1\" max=\"52\" placeholder=\"1\">
                    <input type=\"submit\" name=\"\" value=\"Visa kort\">
                </form>
            </li>
            <li>
                Dela ut <strong>x antal</strong> kort till <strong>x antal</strong> spelare.<br>
                Använd följade route <code>/card/deck/deal/:players/:cards</code>
            </li>
        </ul>
        <h4>
            Kortlek med jokrar
        </h4>
        <ul>
            <li>
               <a href=\"{{ path('card/deck/joker') }}\">Visa alla kort sorterade per färg och värde</a>
            </li>
            <li>
                <a href=\"{{ path('card/deck/joker/shuffle') }}\">Visa alla kort i slumpad ordning</a>
            </li>
            <li>
                <a href=\"{{ path('card/deck/joker/draw') }}\">Dra <strong>ett</strong> slumpmässigt kort</a>
            </li>
            <li>
                Dra <strong>x antal</strong> slumpmässiga kort
                <form method=\"post\" action=\"\">  
                    <input type=\"number\" name=\"num_cards_joker\" min=\"1\" max=\"54\" placeholder=\"1\">
                    <input type=\"submit\" name=\"\" value=\"Visa kort\">
                </form>
            </li>
            <li>
                Dela ut <strong>x antal</strong> kort till <strong>x antal</strong> spelare.<br>
                Använd följade route <code>/card/deck/joker/deal/:players/:cards</code>
            </li>
        </ul>
        </div>
        <div class=\"text-div\">
            <h4>Kod och klasser</h4>
            <p>
                Jag har fyra klasser för korten, <code>Card</code>, <code>CardHand</code>, <code>DeckOfCards</code> och <code>DeckOfCardsJoker</code>.
                <code>Card</code>-klassen har en metod, som hämtar ut ett kort. <code>CardHand</code> har tre metoder, <code>add</code>, 
                <code>getNumberOfCards</code> och <code>getOneCard</code>, samtidigt som den även har en kompositionsrelation till <code>Card</code>-klassen.
                <br><br>
                <code>DeckOfCards</code> har två metoder, <code>getCards</code> samt <code>getCardsShuffled</code>. <code>DeckOfCardsJoker</code>
                ärver från denna klass.
                <img class=\"uml-img\" src=\"{{ asset('img/uml.png') }}\" alt=\"\">
            </p>
        </div>
        
    </div>
{% endblock %}", "Kmom02/card.html.twig", "/home/caas23/dbwebb-kurser/mvc/me/report/templates/Kmom02/card.html.twig");
    }
}
