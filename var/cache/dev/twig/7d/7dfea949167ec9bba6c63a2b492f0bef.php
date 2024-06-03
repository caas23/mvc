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

/* Kmom03/21-landing.html.twig */
class __TwigTemplate_e09c3aa1bcf5b4280904f80d2fb798a3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Kmom03/21-landing.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Kmom03/21-landing.html.twig"));

        $this->parent = $this->loadTemplate("Shared/base.html.twig", "Kmom03/21-landing.html.twig", 1);
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

        yield "21";
        
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
        yield "    <h1>21</h1>
    <div class=\"container landing-container\">
        <div>
            <h3>Spelregler</h3>

            <ul>
                <p>Spelet i sin helhet går ut på att komma så nära <a href=\"https://sv.wikipedia.org/wiki/Tjugoett_(kortspel)\" target=\"_blank\">21</a>  som möjligt, utan att gå över den gränsen.</p>

                <li>Grundregler (utan insats)</li>
                <ul>
                    <li class=\"inner-list\">
                        Spelet börjar med att både spelaren och banken (här datorn) har noll kort vardera.
                    </li>
                    <li class=\"inner-list\">
                        Spelaren ges ett kort, och väljer därefter att få ett till kort, eller stanna.
                    </li>
                    <li class=\"inner-list\">
                        Om spelaren får 21, vinner denna.
                    </li>
                    <li class=\"inner-list\">
                        Om spelaren får mer än 21, förlorar denna och banken har vunnit omgången.
                    </li>
                    <li class=\"inner-list\">
                        Om spelaren stannar innan denne fått 21 eller mer, är det bankens tur att spela.<br>
                        Banken genomför då samma procedur som spelaren, och vinner vid lika eller om dess total är högre än spelarens (utan att gå över 21).<br>
                        Om banken går över 21 vinner spelaren.
                    </li>
                    <li class=\"inner-list\">
                        Då ingen instats används i denna variant, ges alltid <strong>ett poäng</strong> till den som vunnit omgången.
                    </li>
                </ul>

                <li>Poängräkning</li>
                <ul>
                    <li class=\"inner-list\">
                        Nummerkorten (2-10) är värda motsvarande valörer.
                    </li>
                    <li class=\"inner-list\">
                        Knekt är värd 11 poäng.
                    </li>
                    <li class=\"inner-list\">
                        Dam är värd 12 poäng.
                    </li>
                    <li class=\"inner-list\">
                        Kung är värd 13 poäng.
                    </li>
                    <li class=\"inner-list\">
                        Essets värde sätts till 1 eller 14 (spelaren väljer för givet ess).
                    </li>
                </ul>
            </ul>
            
            <div class=\"btn-div\">
                <form action=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game/doc");
        yield "\">  
                    <input class=\"doc-btn\" type=\"submit\" name=\"\" value=\"Dokumentation\">
                </form>
                <form method=\"post\" action=\"\">  
                    <input class=\"game-btn\" type=\"submit\" name=\"\" value=\"Starta spelet\">
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
        return "Kmom03/21-landing.html.twig";
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
        return array (  145 => 59,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Shared/base.html.twig\" %}

{% block title %}21{% endblock %}

{% block body %}
    <h1>21</h1>
    <div class=\"container landing-container\">
        <div>
            <h3>Spelregler</h3>

            <ul>
                <p>Spelet i sin helhet går ut på att komma så nära <a href=\"https://sv.wikipedia.org/wiki/Tjugoett_(kortspel)\" target=\"_blank\">21</a>  som möjligt, utan att gå över den gränsen.</p>

                <li>Grundregler (utan insats)</li>
                <ul>
                    <li class=\"inner-list\">
                        Spelet börjar med att både spelaren och banken (här datorn) har noll kort vardera.
                    </li>
                    <li class=\"inner-list\">
                        Spelaren ges ett kort, och väljer därefter att få ett till kort, eller stanna.
                    </li>
                    <li class=\"inner-list\">
                        Om spelaren får 21, vinner denna.
                    </li>
                    <li class=\"inner-list\">
                        Om spelaren får mer än 21, förlorar denna och banken har vunnit omgången.
                    </li>
                    <li class=\"inner-list\">
                        Om spelaren stannar innan denne fått 21 eller mer, är det bankens tur att spela.<br>
                        Banken genomför då samma procedur som spelaren, och vinner vid lika eller om dess total är högre än spelarens (utan att gå över 21).<br>
                        Om banken går över 21 vinner spelaren.
                    </li>
                    <li class=\"inner-list\">
                        Då ingen instats används i denna variant, ges alltid <strong>ett poäng</strong> till den som vunnit omgången.
                    </li>
                </ul>

                <li>Poängräkning</li>
                <ul>
                    <li class=\"inner-list\">
                        Nummerkorten (2-10) är värda motsvarande valörer.
                    </li>
                    <li class=\"inner-list\">
                        Knekt är värd 11 poäng.
                    </li>
                    <li class=\"inner-list\">
                        Dam är värd 12 poäng.
                    </li>
                    <li class=\"inner-list\">
                        Kung är värd 13 poäng.
                    </li>
                    <li class=\"inner-list\">
                        Essets värde sätts till 1 eller 14 (spelaren väljer för givet ess).
                    </li>
                </ul>
            </ul>
            
            <div class=\"btn-div\">
                <form action=\"{{ path('game/doc') }}\">  
                    <input class=\"doc-btn\" type=\"submit\" name=\"\" value=\"Dokumentation\">
                </form>
                <form method=\"post\" action=\"\">  
                    <input class=\"game-btn\" type=\"submit\" name=\"\" value=\"Starta spelet\">
                </form>
            </div>
        </div>
    </div>
{% endblock %}", "Kmom03/21-landing.html.twig", "/home/caas23/dbwebb-kurser/mvc/me/report/templates/Kmom03/21-landing.html.twig");
    }
}
