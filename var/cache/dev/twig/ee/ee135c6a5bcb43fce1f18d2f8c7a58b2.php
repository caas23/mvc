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

/* Kmom10/health.html.twig */
class __TwigTemplate_511ebefeae3f5f25cd92f8cb8034b1c4 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Kmom10/health.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Kmom10/health.html.twig"));

        $this->parent = $this->loadTemplate("Kmom10/proj.base.html.twig", "Kmom10/health.html.twig", 1);
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

        yield "Mål 3";
        
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
    <div class=\"health-container\">
        <div>
            <h1>Mål 3 - god hälsa och välbefinnande</h1>
            <p>
                Det tredje globala målet syftar till att främja hälsa och välbefinnande för alla. Målet indelas i delmål, vilka fokuserar på
                olika aspekter av helhetsbegreppet. Somliga delmål (såsom bekämpning av de smittsamma sjukdomarna malaria och tuberkulos) är mindre aktuella 
                i Sverige och länder med likvärdiga förutsättningar, på så sätt att de inte direkt förekommer i dessa länder. 
                De är dock inte irrelevanta eller oviktiga i den mening att vi behöver uppmärksamma och hjälpas åt att hantera dessa utmaningar.   
            </p> 
            <p>
                I samband med att Covid-19 spreds över världen uppkom dock ett läge där vi alla, oavsett tidigare förutsättningar i respektive land,
                behövde anpassa oss efter bästa förmåga för att tillsammans hantera situationen. Som bekant skördades många liv innan vi nådde ett läge där vi 
                bildat oss mer kunskap för att hantera smittan, varför fokus för målet är att visualisera dödstalen i Sverige till följd av pandemin. 
                Som ett komplement till detta visas statistik för <i>alla</i> dödsfall år 2017-2023 (alltså - ett antal år före, under och efter den mest kritiska pandemitiden). 
                All statistik är hämtad från SCB och de sammanställningar som gjorts av dem.

            </p>
            <p>
                Effekterna av pandemin har varit betydande, inte enbart sett till hälsa och välmående (även om dessa delar varit centrala).
                SCB [1] beskriver i en publikation hur pandemin påverkat många aspekter av samhället, däribland ekonomi, arbetsmarknad och utbildning.
                Vad gäller hälsa (som är målets fokus) konstaterar SCB att medellivslängden i Sverige minskade ovanligt mycket under pandemin, samtidigt som
                även psykisk påfrestning för personer 16-84 år ökade. Glädjande är dock att medellivslängden redan år 2021 var tillbaka på nästan samma nivå
                som 2019. Det kan även ses i diagrammet för dödsfall år 2017-2023 att antalet dödsfall generellt, var som flest år 2020 med en ökning på
                knappt 10 000 fall jämfört med året innan. År 2021 var siffran tillbaka på ungefär samma nivå som år 2017 och år 2018.
                <br><i><span style=\"font-size: 16px\";>[1] https://www.scb.se/publikation/47675</span></i>
            </p>
            <div class=\"diagram\">
                <div class=\"chart-btns-left\">
                    <button onclick=\"showAllDeceased()\" class=\"showStatsBtn\" id=\"showAllBtn\">Visa alla dödsfall</button>
                    <button onclick=\"showDeceasedPerAge()\" class=\"showStatsBtn\" id=\"showPerAgeBtn\">Visa dödsfall per ålder</button>
                    <button onclick=\"showDeceasedByGroup()\" class=\"showStatsBtn\" id=\"showGroupsBtn\">Visa dödsfall per sjukdomsgrupp</button>
                </div>
                <div class=\"chart-btns-left\">
                    <button onclick=\"showDeceasedByHome()\" class=\"showStatsBtn\" id=\"showHomeBtn\">Visa dödsfall per boendeform</button>
                    <button onclick=\"showDeceasedPerPlace()\" class=\"showStatsBtn\" id=\"showPlaceBtn\">Visa dödsfall per dödsplats</button>
                    <button onclick=\"showAllDeceased17_23()\" class=\"showStatsBtn\" id=\"show17_23Btn\">Visa dödsfall år 2017-2023</button>
                </div>
                <div class=\"chart-btns-right\">
                    <button onclick=\"showAllCharts()\" class=\"showAllStatsBtn\" id=\"showAllChartsBtn\">Visa all statistik</button>
                </div>
                ";
        // line 47
        yield $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart((isset($context["chart1"]) || array_key_exists("chart1", $context) ? $context["chart1"] : (function () { throw new RuntimeError('Variable "chart1" does not exist.', 47, $this->source); })()), ["id" => "all-deceased-chart", "class" => "doughnut chart", "style" => "display: none;"]);
        yield "
                ";
        // line 48
        yield $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart((isset($context["chart2"]) || array_key_exists("chart2", $context) ? $context["chart2"] : (function () { throw new RuntimeError('Variable "chart2" does not exist.', 48, $this->source); })()), ["id" => "deceased-by-age-chart", "class" => "chart", "style" => "display: none;"]);
        yield "
                ";
        // line 49
        yield $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart((isset($context["chart3"]) || array_key_exists("chart3", $context) ? $context["chart3"] : (function () { throw new RuntimeError('Variable "chart3" does not exist.', 49, $this->source); })()), ["id" => "deceased-per-group-chart", "class" => "chart", "style" => "display: none;"]);
        yield "
                ";
        // line 50
        yield $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart((isset($context["chart4"]) || array_key_exists("chart4", $context) ? $context["chart4"] : (function () { throw new RuntimeError('Variable "chart4" does not exist.', 50, $this->source); })()), ["id" => "deceased-per-home-chart", "class" => "chart", "style" => "display: none;"]);
        yield "
                ";
        // line 51
        yield $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart((isset($context["chart5"]) || array_key_exists("chart5", $context) ? $context["chart5"] : (function () { throw new RuntimeError('Variable "chart5" does not exist.', 51, $this->source); })()), ["id" => "deceased-per-place-chart", "class" => "chart", "style" => "display: none;"]);
        yield "
                ";
        // line 52
        yield $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart((isset($context["chart6"]) || array_key_exists("chart6", $context) ? $context["chart6"] : (function () { throw new RuntimeError('Variable "chart6" does not exist.', 52, $this->source); })()), ["id" => "deceased-17-23", "class" => "chart", "style" => "display: none;"]);
        yield "
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 58
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    function showAllDeceased() {
        const chart = document.getElementById(\"all-deceased-chart\");
        const btn = document.getElementById(\"showAllBtn\");
        if (chart.style.display === \"none\") {
            chart.style.display = \"block\";
            btn.textContent = \"Dölj alla dödsfall\";
        } else {
            chart.style.display = \"none\";
            btn.textContent = \"Visa alla dödsfall\";
        }
    }

    function showDeceasedPerAge() {
        const chart = document.getElementById(\"deceased-by-age-chart\");
        const btn = document.getElementById(\"showPerAgeBtn\");
        if (chart.style.display === \"none\") {
            chart.style.display = \"block\";
            btn.textContent = \"Dölj dödsfall per ålder\";
        } else {
            chart.style.display = \"none\";
            btn.textContent = \"Visa dödsfall per ålder\";
        }
    }

    function showDeceasedByGroup() {
        const chart = document.getElementById(\"deceased-per-group-chart\");
        const btn = document.getElementById(\"showGroupsBtn\");
        if (chart.style.display === \"none\") {
            chart.style.display = \"block\";
            btn.textContent = \"Dölj dödsfall per sjukdomsgrupp\";
        } else {
            chart.style.display = \"none\";
            btn.textContent = \"Visa dödsfall per sjukdomsgrupp\";
        }
    }

    function showDeceasedByHome() {
        const chart = document.getElementById(\"deceased-per-home-chart\");
        const btn = document.getElementById(\"showHomeBtn\");
        if (chart.style.display === \"none\") {
            chart.style.display = \"block\";
            btn.textContent = \"Dölj dödsfall per boendeform\";
        } else {
            chart.style.display = \"none\";
            btn.textContent = \"Visa dödsfall per boendeform\";
        }
    }

    function showDeceasedPerPlace() {
        const chart = document.getElementById(\"deceased-per-place-chart\");
        const btn = document.getElementById(\"showPlaceBtn\");
        if (chart.style.display === \"none\") {
            chart.style.display = \"block\";
            btn.textContent = \"Dölj dödsfall per dödsplats\";
        } else {
            chart.style.display = \"none\";
            btn.textContent = \"Visa dödsfall per dödsplats\";
        }
    }
    
    function showAllCharts() {
        let btns = document.getElementsByClassName(\"showStatsBtn\");
        let charts = document.getElementsByClassName(\"chart\");
        const btn = document.getElementById(\"showAllChartsBtn\");
        if (btn.textContent === \"Visa all statistik\") {
            for (let i = 0; i < btns.length; i++) {
                charts.item(i).style.display = \"block\";
                if (btns.item(i).textContent.includes(\"Dölj\")) {
                    btns.item(i).textContent = btns.item(i).textContent.replace(\"Dölj\", \"Visa\");
                }
                btns.item(i).disabled = true;                
            }
            btn.textContent = \"Dölj all statistik\";
        } else {
            for (let i = 0; i < btns.length; i++) {
                charts.item(i).style.display = \"none\";
                btns.item(i).disabled = false;
            }
            btn.textContent = \"Visa all statistik\";
        }
    }

    function showAllDeceased17_23() {
        const chart = document.getElementById(\"deceased-17-23\");
        const btn = document.getElementById(\"show17_23Btn\");
        if (chart.style.display === \"none\") {
            chart.style.display = \"block\";
            btn.textContent = \"Dölj dödsfall år 2017 - 2023\";
        } else {
            chart.style.display = \"none\";
            btn.textContent = \"Visa dödsfall år 2017 - 2023\";
        }
    }
</script>
    
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
        return "Kmom10/health.html.twig";
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
        return array (  180 => 59,  170 => 58,  154 => 52,  150 => 51,  146 => 50,  142 => 49,  138 => 48,  134 => 47,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Kmom10/proj.base.html.twig\" %}

{% block title %}Mål 3{% endblock %}

{% block body %}
    <h1>&nbsp;</h1>
    <div class=\"health-container\">
        <div>
            <h1>Mål 3 - god hälsa och välbefinnande</h1>
            <p>
                Det tredje globala målet syftar till att främja hälsa och välbefinnande för alla. Målet indelas i delmål, vilka fokuserar på
                olika aspekter av helhetsbegreppet. Somliga delmål (såsom bekämpning av de smittsamma sjukdomarna malaria och tuberkulos) är mindre aktuella 
                i Sverige och länder med likvärdiga förutsättningar, på så sätt att de inte direkt förekommer i dessa länder. 
                De är dock inte irrelevanta eller oviktiga i den mening att vi behöver uppmärksamma och hjälpas åt att hantera dessa utmaningar.   
            </p> 
            <p>
                I samband med att Covid-19 spreds över världen uppkom dock ett läge där vi alla, oavsett tidigare förutsättningar i respektive land,
                behövde anpassa oss efter bästa förmåga för att tillsammans hantera situationen. Som bekant skördades många liv innan vi nådde ett läge där vi 
                bildat oss mer kunskap för att hantera smittan, varför fokus för målet är att visualisera dödstalen i Sverige till följd av pandemin. 
                Som ett komplement till detta visas statistik för <i>alla</i> dödsfall år 2017-2023 (alltså - ett antal år före, under och efter den mest kritiska pandemitiden). 
                All statistik är hämtad från SCB och de sammanställningar som gjorts av dem.

            </p>
            <p>
                Effekterna av pandemin har varit betydande, inte enbart sett till hälsa och välmående (även om dessa delar varit centrala).
                SCB [1] beskriver i en publikation hur pandemin påverkat många aspekter av samhället, däribland ekonomi, arbetsmarknad och utbildning.
                Vad gäller hälsa (som är målets fokus) konstaterar SCB att medellivslängden i Sverige minskade ovanligt mycket under pandemin, samtidigt som
                även psykisk påfrestning för personer 16-84 år ökade. Glädjande är dock att medellivslängden redan år 2021 var tillbaka på nästan samma nivå
                som 2019. Det kan även ses i diagrammet för dödsfall år 2017-2023 att antalet dödsfall generellt, var som flest år 2020 med en ökning på
                knappt 10 000 fall jämfört med året innan. År 2021 var siffran tillbaka på ungefär samma nivå som år 2017 och år 2018.
                <br><i><span style=\"font-size: 16px\";>[1] https://www.scb.se/publikation/47675</span></i>
            </p>
            <div class=\"diagram\">
                <div class=\"chart-btns-left\">
                    <button onclick=\"showAllDeceased()\" class=\"showStatsBtn\" id=\"showAllBtn\">Visa alla dödsfall</button>
                    <button onclick=\"showDeceasedPerAge()\" class=\"showStatsBtn\" id=\"showPerAgeBtn\">Visa dödsfall per ålder</button>
                    <button onclick=\"showDeceasedByGroup()\" class=\"showStatsBtn\" id=\"showGroupsBtn\">Visa dödsfall per sjukdomsgrupp</button>
                </div>
                <div class=\"chart-btns-left\">
                    <button onclick=\"showDeceasedByHome()\" class=\"showStatsBtn\" id=\"showHomeBtn\">Visa dödsfall per boendeform</button>
                    <button onclick=\"showDeceasedPerPlace()\" class=\"showStatsBtn\" id=\"showPlaceBtn\">Visa dödsfall per dödsplats</button>
                    <button onclick=\"showAllDeceased17_23()\" class=\"showStatsBtn\" id=\"show17_23Btn\">Visa dödsfall år 2017-2023</button>
                </div>
                <div class=\"chart-btns-right\">
                    <button onclick=\"showAllCharts()\" class=\"showAllStatsBtn\" id=\"showAllChartsBtn\">Visa all statistik</button>
                </div>
                {{ render_chart(chart1, {'id': 'all-deceased-chart', 'class': 'doughnut chart', 'style': 'display: none;'}) }}
                {{ render_chart(chart2, {'id': 'deceased-by-age-chart', 'class': 'chart', 'style': 'display: none;'}) }}
                {{ render_chart(chart3, {'id': 'deceased-per-group-chart', 'class': 'chart', 'style': 'display: none;'}) }}
                {{ render_chart(chart4, {'id': 'deceased-per-home-chart', 'class': 'chart', 'style': 'display: none;'}) }}
                {{ render_chart(chart5, {'id': 'deceased-per-place-chart', 'class': 'chart', 'style': 'display: none;'}) }}
                {{ render_chart(chart6, {'id': 'deceased-17-23', 'class': 'chart', 'style': 'display: none;'}) }}
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts  %}
{{ parent() }}
<script>
    function showAllDeceased() {
        const chart = document.getElementById(\"all-deceased-chart\");
        const btn = document.getElementById(\"showAllBtn\");
        if (chart.style.display === \"none\") {
            chart.style.display = \"block\";
            btn.textContent = \"Dölj alla dödsfall\";
        } else {
            chart.style.display = \"none\";
            btn.textContent = \"Visa alla dödsfall\";
        }
    }

    function showDeceasedPerAge() {
        const chart = document.getElementById(\"deceased-by-age-chart\");
        const btn = document.getElementById(\"showPerAgeBtn\");
        if (chart.style.display === \"none\") {
            chart.style.display = \"block\";
            btn.textContent = \"Dölj dödsfall per ålder\";
        } else {
            chart.style.display = \"none\";
            btn.textContent = \"Visa dödsfall per ålder\";
        }
    }

    function showDeceasedByGroup() {
        const chart = document.getElementById(\"deceased-per-group-chart\");
        const btn = document.getElementById(\"showGroupsBtn\");
        if (chart.style.display === \"none\") {
            chart.style.display = \"block\";
            btn.textContent = \"Dölj dödsfall per sjukdomsgrupp\";
        } else {
            chart.style.display = \"none\";
            btn.textContent = \"Visa dödsfall per sjukdomsgrupp\";
        }
    }

    function showDeceasedByHome() {
        const chart = document.getElementById(\"deceased-per-home-chart\");
        const btn = document.getElementById(\"showHomeBtn\");
        if (chart.style.display === \"none\") {
            chart.style.display = \"block\";
            btn.textContent = \"Dölj dödsfall per boendeform\";
        } else {
            chart.style.display = \"none\";
            btn.textContent = \"Visa dödsfall per boendeform\";
        }
    }

    function showDeceasedPerPlace() {
        const chart = document.getElementById(\"deceased-per-place-chart\");
        const btn = document.getElementById(\"showPlaceBtn\");
        if (chart.style.display === \"none\") {
            chart.style.display = \"block\";
            btn.textContent = \"Dölj dödsfall per dödsplats\";
        } else {
            chart.style.display = \"none\";
            btn.textContent = \"Visa dödsfall per dödsplats\";
        }
    }
    
    function showAllCharts() {
        let btns = document.getElementsByClassName(\"showStatsBtn\");
        let charts = document.getElementsByClassName(\"chart\");
        const btn = document.getElementById(\"showAllChartsBtn\");
        if (btn.textContent === \"Visa all statistik\") {
            for (let i = 0; i < btns.length; i++) {
                charts.item(i).style.display = \"block\";
                if (btns.item(i).textContent.includes(\"Dölj\")) {
                    btns.item(i).textContent = btns.item(i).textContent.replace(\"Dölj\", \"Visa\");
                }
                btns.item(i).disabled = true;                
            }
            btn.textContent = \"Dölj all statistik\";
        } else {
            for (let i = 0; i < btns.length; i++) {
                charts.item(i).style.display = \"none\";
                btns.item(i).disabled = false;
            }
            btn.textContent = \"Visa all statistik\";
        }
    }

    function showAllDeceased17_23() {
        const chart = document.getElementById(\"deceased-17-23\");
        const btn = document.getElementById(\"show17_23Btn\");
        if (chart.style.display === \"none\") {
            chart.style.display = \"block\";
            btn.textContent = \"Dölj dödsfall år 2017 - 2023\";
        } else {
            chart.style.display = \"none\";
            btn.textContent = \"Visa dödsfall år 2017 - 2023\";
        }
    }
</script>
    
{% endblock %}

", "Kmom10/health.html.twig", "/home/caas23/dbwebb-kurser/mvc/me/report/templates/Kmom10/health.html.twig");
    }
}
