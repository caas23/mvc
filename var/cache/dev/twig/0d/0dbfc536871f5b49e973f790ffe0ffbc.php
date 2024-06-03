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

/* Kmom10/about.html.twig */
class __TwigTemplate_443181d14e1088bd45bf5d8e0da4ca4a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Kmom10/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Kmom10/about.html.twig"));

        $this->parent = $this->loadTemplate("Kmom10/proj.base.html.twig", "Kmom10/about.html.twig", 1);
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

        yield "Om";
        
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
            <h1>Om</h1>
            <p>
                Detta avslutande projekt i kursen <i>MVC</i> vid BTH, har sitt fokus på två av de totalt 17 globala mål. De två mål
                som fokuseras på är <i>Mål 3 - God hälsa och välbefinnande</i>, där fokus lagts på effekterna av Coronapandemin, samt 
                <i>Mål 7 - Hållbar energi för alla</i> där fokus lagts på att visualisera andel förnybar energi nationellt. Varje mål
                visualiseras i diagram med hjälp av statistik och data inom respektive område. Den data och statistik som presenteras 
                för vardera mål är på inget sätt heltäckande för målen som helhet, utan fokuserar på valda delmål.
            </p>
            <p>
                Läs mer om repsektive mål genom att navigera via 'Hem' i menyn till vänster, eller se delar av statistiken via 'API'.<br>
            </p>
            <button class=\"db-btn\">
                <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proj_database");
        yield "\">Databas</a>
            </button>
            <p>
                <i>Sidan är skapad av Calle Andersson (caas23), student vid BTH.</i>
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
        return "Kmom10/about.html.twig";
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
        return array (  107 => 21,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Kmom10/proj.base.html.twig\" %}

{% block title %}Om{% endblock %}

{% block body %}
    <h1>&nbsp;</h1>
    <div class=\"container-about\">
        <div>
            <h1>Om</h1>
            <p>
                Detta avslutande projekt i kursen <i>MVC</i> vid BTH, har sitt fokus på två av de totalt 17 globala mål. De två mål
                som fokuseras på är <i>Mål 3 - God hälsa och välbefinnande</i>, där fokus lagts på effekterna av Coronapandemin, samt 
                <i>Mål 7 - Hållbar energi för alla</i> där fokus lagts på att visualisera andel förnybar energi nationellt. Varje mål
                visualiseras i diagram med hjälp av statistik och data inom respektive område. Den data och statistik som presenteras 
                för vardera mål är på inget sätt heltäckande för målen som helhet, utan fokuserar på valda delmål.
            </p>
            <p>
                Läs mer om repsektive mål genom att navigera via 'Hem' i menyn till vänster, eller se delar av statistiken via 'API'.<br>
            </p>
            <button class=\"db-btn\">
                <a href=\"{{ path('proj_database') }}\">Databas</a>
            </button>
            <p>
                <i>Sidan är skapad av Calle Andersson (caas23), student vid BTH.</i>
            </p>
        </div>
    </div>
{% endblock %}", "Kmom10/about.html.twig", "/home/caas23/dbwebb-kurser/mvc/me/report/templates/Kmom10/about.html.twig");
    }
}
