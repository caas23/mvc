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

/* Kmom03/21-doc.html.twig */
class __TwigTemplate_2d9e991f97c6832259d7ccf178d9693a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Kmom03/21-doc.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Kmom03/21-doc.html.twig"));

        $this->parent = $this->loadTemplate("Shared/base.html.twig", "Kmom03/21-doc.html.twig", 1);
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

        yield "Dokumentation 21";
        
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
        yield "    <h1>Dokumentation 21</h1>
    <div class=\"container doc-container\">
        <div>
            Flödesschemat är uppdelat i två delar, en del för spelaren och en del för banken.
            Banken kommer \"spela\" enligt det förslag som gavs i uppgiften, alltså att dra kort tills totalen är &ge; 17, 
            och därefter kontrolleras totalen och jämförs med spelarens total, se pseudokoden längre ned.

            <h3>Flödesschema</h3>
           
            <img class=\"flowchart-img\" src=\"";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/flow_chart_21.png"), "html", null, true);
        yield "\" alt=\"\">

            <h3>Pseudokod</h3>
            
            <code class=\"pseudo-code\">
                <strong>// PLAYER</strong><br><br>
                p_total = 0 // sum of drawn cards (player's total)<br><br>

                1. deal one card to player<br>
                2. IF card is an ace THEN<br>
                &emsp; user input \"1\" or \"14\" // form with two options (radio buttons?)<br>
                3. p_total = current p_total + value of dealt card<br><br>
                4. IF p_total is equal to 21 THEN<br>
                &emsp; player won<br>
                &emsp; add one point to player in session<br>
                &emsp; <strong>GAME OVER</strong><br>
                5. ELSE IF p_total is greater than 21 THEN<br>
                &emsp; player lost<br>
                &emsp; add one point to bank in session<br>
                &emsp; <strong>GAME OVER</strong><br>
                6. ELSE user input \"new card\" or \"stop playing\" // buttons to choose action<br>
                7. IF user input is \"new card\" THEN<br>
                &emsp; REPEAT step 1-6<br>
                8. ELSE IF user input is \"stop playing\" THEN<br>
                &emsp; save player's total in session<br>
                &emsp; bank's turn to play<br><br>

                <strong>// BANK</strong><br><br>
                // p_total refers to the player's total<br>
                total = 0 // sum of drawn cards<br><br>

                1. deal one card to bank<br>
                2. IF card is an ace THEN<br>
                &emsp; card value is equal to \"1\" or \"14\" // check what is most beneficial<br>
                4. total = current total + value of dealt card<br><br>
                5. IF total is less than 17 THEN<br>
                &emsp; REPEAT step 1-4<br>
                6. ELSE IF total is greater than 21 <strong>or</strong> total is less than p_total THEN <br>
                &emsp; bank lost<br>
                &emsp; add one point to player in session<br>
                &emsp; <strong>GAME OVER</strong><br>
                7. ELSE IF total is greater than or equal to p_total THEN<br>
                &emsp; bank won<br>
                &emsp; add one point to bank in session<br>
                &emsp; <strong>GAME OVER</strong><br><br>
            </code>
            
            <h3>Klasser</h3>
            De klasser som kommer behövas för att lösa uppgiften och implementera spelet är dels två redan skapade klasser, samt en ny klass för detta kmom.

            <h4>DeckOfCards</h4>
            &bull; Initierar en blandad kortlek vid start, används av den nyskapade sessionsklassen (se nedan).
            
            <h4>Card</h4>
            &bull; Använder tidigare skapad metod för att hämta ut ett kort i taget från kortleken.<br>
            &bull; Ytterligare en metod skapas för att hämta ut siffervärdet för ett kort.
            
            <h4>SessionHandler</h4>
            De metoder som ingår i klassen är<br><br>

            &bull; <i>sessionInit</i><br>
            Initierar nödvändiga variabler i sessionen, däribland en kortlek som ärvs från DeckOfCards.<br><br>

            &bull; <i>winnerToSession</i><br>
            Sparar poäng till vinnaren.<br><br>

            &bull; <i>setValue</i><br>
            Sparar värdet för givet kort (ej spelarens givna ess).<br><br>

            &bull; <i>setAceValue</i><br>
            Sparar värdet för spelarens givna ess.<br><br>

            &bull; <i>checkBust</i><br>
            Kollar om spelaren eller banken blivit \"tjock\".<br><br>

            &bull; <i>checkWinner</i><br>
            Kollar vem som vunnit, om ingen blivit \"tjock\".
            <br><br><br><br>

            <div class=\"btn-div\">
                <form action=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game");
        yield "\">  
                    <input type=\"submit\" name=\"\" value=\"Tillbaka till 21\">
                </form>
            </div>
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
        return "Kmom03/21-doc.html.twig";
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
        return array (  184 => 95,  101 => 15,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Shared/base.html.twig\" %}

{% block title %}Dokumentation 21{% endblock %}

{% block body %}
    <h1>Dokumentation 21</h1>
    <div class=\"container doc-container\">
        <div>
            Flödesschemat är uppdelat i två delar, en del för spelaren och en del för banken.
            Banken kommer \"spela\" enligt det förslag som gavs i uppgiften, alltså att dra kort tills totalen är &ge; 17, 
            och därefter kontrolleras totalen och jämförs med spelarens total, se pseudokoden längre ned.

            <h3>Flödesschema</h3>
           
            <img class=\"flowchart-img\" src=\"{{ asset('img/flow_chart_21.png') }}\" alt=\"\">

            <h3>Pseudokod</h3>
            
            <code class=\"pseudo-code\">
                <strong>// PLAYER</strong><br><br>
                p_total = 0 // sum of drawn cards (player's total)<br><br>

                1. deal one card to player<br>
                2. IF card is an ace THEN<br>
                &emsp; user input \"1\" or \"14\" // form with two options (radio buttons?)<br>
                3. p_total = current p_total + value of dealt card<br><br>
                4. IF p_total is equal to 21 THEN<br>
                &emsp; player won<br>
                &emsp; add one point to player in session<br>
                &emsp; <strong>GAME OVER</strong><br>
                5. ELSE IF p_total is greater than 21 THEN<br>
                &emsp; player lost<br>
                &emsp; add one point to bank in session<br>
                &emsp; <strong>GAME OVER</strong><br>
                6. ELSE user input \"new card\" or \"stop playing\" // buttons to choose action<br>
                7. IF user input is \"new card\" THEN<br>
                &emsp; REPEAT step 1-6<br>
                8. ELSE IF user input is \"stop playing\" THEN<br>
                &emsp; save player's total in session<br>
                &emsp; bank's turn to play<br><br>

                <strong>// BANK</strong><br><br>
                // p_total refers to the player's total<br>
                total = 0 // sum of drawn cards<br><br>

                1. deal one card to bank<br>
                2. IF card is an ace THEN<br>
                &emsp; card value is equal to \"1\" or \"14\" // check what is most beneficial<br>
                4. total = current total + value of dealt card<br><br>
                5. IF total is less than 17 THEN<br>
                &emsp; REPEAT step 1-4<br>
                6. ELSE IF total is greater than 21 <strong>or</strong> total is less than p_total THEN <br>
                &emsp; bank lost<br>
                &emsp; add one point to player in session<br>
                &emsp; <strong>GAME OVER</strong><br>
                7. ELSE IF total is greater than or equal to p_total THEN<br>
                &emsp; bank won<br>
                &emsp; add one point to bank in session<br>
                &emsp; <strong>GAME OVER</strong><br><br>
            </code>
            
            <h3>Klasser</h3>
            De klasser som kommer behövas för att lösa uppgiften och implementera spelet är dels två redan skapade klasser, samt en ny klass för detta kmom.

            <h4>DeckOfCards</h4>
            &bull; Initierar en blandad kortlek vid start, används av den nyskapade sessionsklassen (se nedan).
            
            <h4>Card</h4>
            &bull; Använder tidigare skapad metod för att hämta ut ett kort i taget från kortleken.<br>
            &bull; Ytterligare en metod skapas för att hämta ut siffervärdet för ett kort.
            
            <h4>SessionHandler</h4>
            De metoder som ingår i klassen är<br><br>

            &bull; <i>sessionInit</i><br>
            Initierar nödvändiga variabler i sessionen, däribland en kortlek som ärvs från DeckOfCards.<br><br>

            &bull; <i>winnerToSession</i><br>
            Sparar poäng till vinnaren.<br><br>

            &bull; <i>setValue</i><br>
            Sparar värdet för givet kort (ej spelarens givna ess).<br><br>

            &bull; <i>setAceValue</i><br>
            Sparar värdet för spelarens givna ess.<br><br>

            &bull; <i>checkBust</i><br>
            Kollar om spelaren eller banken blivit \"tjock\".<br><br>

            &bull; <i>checkWinner</i><br>
            Kollar vem som vunnit, om ingen blivit \"tjock\".
            <br><br><br><br>

            <div class=\"btn-div\">
                <form action=\"{{ path('game') }}\">  
                    <input type=\"submit\" name=\"\" value=\"Tillbaka till 21\">
                </form>
            </div>
        </div>
    </div>
{% endblock %}", "Kmom03/21-doc.html.twig", "/home/caas23/dbwebb-kurser/mvc/me/report/templates/Kmom03/21-doc.html.twig");
    }
}
