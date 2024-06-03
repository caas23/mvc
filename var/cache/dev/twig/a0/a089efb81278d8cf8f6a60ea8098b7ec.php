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

/* Kmom10/database.html.twig */
class __TwigTemplate_b5a6d303e553786e6b752cae0699e8e4 extends Template
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
        return "Kmom10/proj.base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Kmom10/database.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Kmom10/database.html.twig"));

        $this->parent = $this->loadTemplate("Kmom10/proj.base.html.twig", "Kmom10/database.html.twig", 1);
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

        yield "Databas";
        
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
        yield "    <h1>&nbsp;</h1>
    <div class=\"container-about\">
        <div>
            <h1>Databas</h1>
            <p>
                Databasen (<i>fig.1</i>) hanterar totalt fem tabeller, vilka saknar relationer sinsemellan. Två av tabellerna rör mål 3, medan 
                resterande tre hanterar data för mål 7. Som databas har SQLite valts, för att enkelt kunna komma igång och arbeta, dock har inga 
                tester gjorts mot databasen. Nedan ges en förklaring till innehållet i databasen.
            </p>
            <div class=\"explanation-div\">
                <div class=\"db-div\">
                    <strong><i>deceased_covid</i></strong><br>
                    Tabellen innehåller <i>all</i> data som används för visaulisera antal avlidna till följd av covid. 
                    Den innefattar alltså både totala siffror samt siffror sorterade per åldersgrupp, sjukdomsgrupp, boendeform och dödsplats.
                </div>
                <div class=\"db-div\">
                    <strong><i>deceased_general</i></strong><br>
                    Tabellen innehåller data som används för visaulisera antal avlidna generellt under åren 2017-2023. 
                </div>
                <div class=\"db-div\">
                    <strong><i>energy_use</i></strong><br>
                    Hanterar data för att visualisera energianvändning i Sverige. 
                </div>
                <div class=\"db-div\">
                    <strong><i>energy_supply</i></strong><br>
                    Hanterar data för att visualisera energitillförsel i Sverige. 
                </div>
                <div class=\"db-div\">
                    <strong><i>energy_supply</i></strong><br>
                    Hanterar data för att visualisera användning av petroleumprodukter i Sverige. 
                </div>
            </div>

            <p>
                <strong>ORM</strong><br>
                Innan kursens start var ORM ett främmande koncept för mig, och inget jag tidigare kommit i kontakt med. På det sätt vi arbetat med det i
                kursen skapar det en trevlig helhet och när man väl kommer igång känns det hyfsat enkelt att förstå \"hur man gör\", men det innebär
                inte nödvändigtvis att det är enkelt att förstå \"hur det är gjort i bakgrunden\". Jag tycker att det är spännande att arbeta med och
                hade gärna satt mig in i konceptet ännu mer om tid funnits till det i kursen, dock krävs ibland vissa avvägningar tidsmässigt som gör att
                man får nöja sig med \"jag kan hantera konceptet och har en grund\". Efter genomgången kurs har jag bildat mig en 
                förståelse för \"dessa delar krävs och samverkar\" men inte fullt ut greppat <i>varför</i> eller <i>hur</i> det sker alla gånger.<br><br>
                Sättet vi arbetade med databasen i databaskursen känns på många sätt mer lättbegriplig, på så sätt att det känns mer logiskt att förstå
                vad som sker, hur det sker och varför. Måhända att upplevelsen beror på att mina kunskaper upplevs djupare vad gäller databaser generellt än ORM,
                men känslan här och nu är att jag känner mig mer i kontroll över databasen så som vi arbetade med den i databaskursen.
            </p>

            <div class=\"img-div\">
                <a href=\"";
        // line 53
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/er_proj.png"), "html", null, true);
        yield "\" target=\"_blank\">
                    <img class=\"er-proj-img\" src=\"";
        // line 54
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/er_proj.png"), "html", null, true);
        yield "\" alt=\"\">
                </a><br>
                <i>Figur 1. Er-diagram, klicka på bilden för att visa i full storlek.</i>
            </div>
            
            <div class=\"note-div\">
                <strong>Anmärkningar om fig.1</strong><br>
                För att öka läsbarheten har vissa förenklingar gjorts i diagrammet. Parenteser har använts för att visa att entiteten innefattar 
                flera separata entiteter.<br><br><u>Exempel</u><br>
                <code>(total/men/women)_17</code> representerar tre skilda entiter <br>&rarr; <code>total_17, men_17</code> och <code>women_17</code>.
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
        return "Kmom10/database.html.twig";
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
        return array (  143 => 54,  139 => 53,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Kmom10/proj.base.html.twig\" %}

{% block title %}Databas{% endblock %}

{% block body %}
    <h1>&nbsp;</h1>
    <div class=\"container-about\">
        <div>
            <h1>Databas</h1>
            <p>
                Databasen (<i>fig.1</i>) hanterar totalt fem tabeller, vilka saknar relationer sinsemellan. Två av tabellerna rör mål 3, medan 
                resterande tre hanterar data för mål 7. Som databas har SQLite valts, för att enkelt kunna komma igång och arbeta, dock har inga 
                tester gjorts mot databasen. Nedan ges en förklaring till innehållet i databasen.
            </p>
            <div class=\"explanation-div\">
                <div class=\"db-div\">
                    <strong><i>deceased_covid</i></strong><br>
                    Tabellen innehåller <i>all</i> data som används för visaulisera antal avlidna till följd av covid. 
                    Den innefattar alltså både totala siffror samt siffror sorterade per åldersgrupp, sjukdomsgrupp, boendeform och dödsplats.
                </div>
                <div class=\"db-div\">
                    <strong><i>deceased_general</i></strong><br>
                    Tabellen innehåller data som används för visaulisera antal avlidna generellt under åren 2017-2023. 
                </div>
                <div class=\"db-div\">
                    <strong><i>energy_use</i></strong><br>
                    Hanterar data för att visualisera energianvändning i Sverige. 
                </div>
                <div class=\"db-div\">
                    <strong><i>energy_supply</i></strong><br>
                    Hanterar data för att visualisera energitillförsel i Sverige. 
                </div>
                <div class=\"db-div\">
                    <strong><i>energy_supply</i></strong><br>
                    Hanterar data för att visualisera användning av petroleumprodukter i Sverige. 
                </div>
            </div>

            <p>
                <strong>ORM</strong><br>
                Innan kursens start var ORM ett främmande koncept för mig, och inget jag tidigare kommit i kontakt med. På det sätt vi arbetat med det i
                kursen skapar det en trevlig helhet och när man väl kommer igång känns det hyfsat enkelt att förstå \"hur man gör\", men det innebär
                inte nödvändigtvis att det är enkelt att förstå \"hur det är gjort i bakgrunden\". Jag tycker att det är spännande att arbeta med och
                hade gärna satt mig in i konceptet ännu mer om tid funnits till det i kursen, dock krävs ibland vissa avvägningar tidsmässigt som gör att
                man får nöja sig med \"jag kan hantera konceptet och har en grund\". Efter genomgången kurs har jag bildat mig en 
                förståelse för \"dessa delar krävs och samverkar\" men inte fullt ut greppat <i>varför</i> eller <i>hur</i> det sker alla gånger.<br><br>
                Sättet vi arbetade med databasen i databaskursen känns på många sätt mer lättbegriplig, på så sätt att det känns mer logiskt att förstå
                vad som sker, hur det sker och varför. Måhända att upplevelsen beror på att mina kunskaper upplevs djupare vad gäller databaser generellt än ORM,
                men känslan här och nu är att jag känner mig mer i kontroll över databasen så som vi arbetade med den i databaskursen.
            </p>

            <div class=\"img-div\">
                <a href=\"{{ asset('img/er_proj.png') }}\" target=\"_blank\">
                    <img class=\"er-proj-img\" src=\"{{ asset('img/er_proj.png') }}\" alt=\"\">
                </a><br>
                <i>Figur 1. Er-diagram, klicka på bilden för att visa i full storlek.</i>
            </div>
            
            <div class=\"note-div\">
                <strong>Anmärkningar om fig.1</strong><br>
                För att öka läsbarheten har vissa förenklingar gjorts i diagrammet. Parenteser har använts för att visa att entiteten innefattar 
                flera separata entiteter.<br><br><u>Exempel</u><br>
                <code>(total/men/women)_17</code> representerar tre skilda entiter <br>&rarr; <code>total_17, men_17</code> och <code>women_17</code>.
            </div>
        </div>
    </div>
{% endblock %}", "Kmom10/database.html.twig", "/home/caas23/dbwebb-kurser/mvc/me/report/templates/Kmom10/database.html.twig");
    }
}
