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

/* Kmom10/energy.html.twig */
class __TwigTemplate_7d6cdeb5a745b3ab188202a6c7752fe1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Kmom10/energy.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Kmom10/energy.html.twig"));

        $this->parent = $this->loadTemplate("Kmom10/proj.base.html.twig", "Kmom10/energy.html.twig", 1);
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

        yield "Mål 7";
        
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
    <div class=\"energy-container\">
        <div>
            <h1>Mål 7 - hållbar energi för alla</h1>
            <p>
                Det sjunde globala målet syftar till att säkra tillgången till hållbar, tillförlitlig och förnybar energi. 
                Målet innefattar såväl nationella som internationella delmål, vilka i nuälget är satta till att nås senast år 2030. Ett delmål
                fokuserar på att öka andelen förnybar energi, vilket Sverige nått stora framgångar inom redan, men fortsätter att effektivisera 
                och optimera ytterligare. År 2003 infördes ett elcertifikatsystem som syftade till att främja produktion av förnybar el, där
                resultatet visade sig så pass gott att systemet kan avslutas tidigare än initialt planerat. 
            </p> 
            <p>
                Energimyndigheten [1] tillhandahåller statistik kring energi och sammanställer regelbundet data och prognoser inom energiområdet. 
                För att visualisera det arbete som skett för att öka andelen förnybar energi presenteras nedan statistik över årlig energianvändning 
                mellan åren 2007-2022 (med intervall om fem år), där syftet är att visa på hur energianvändningen ändrats under dessa år. Det bör dock 
                has i åtanke att tidsperioden är förhållandevis kort och att stora förändringar kräver större tidsspann för att kunna urskiljas på ett tydligare sätt. 
                För att tydligare visualisera detta visas energitillförsel per energivara mellan år 1972-2022, med intervall om tio år. Dessutom visas
                slutlig användning av petroleumprodukter per sektor mellan år 1987-2022, med intervall om fem år.
                En positiv trend som kan ses är att andelen biobränsle ökar och solkraften har de senaste åren börjat tillföra viss mängd till den totala 
                energimixen. Samtidigt minskar användningen av petroleumprodukter och den totala användningen har mer än halverats från år 1987 till år 2022.
                <br><i><span style=\"font-size: 16px\";>[1] https://www.https://www.energimyndigheten.se/</span></i>
            </p>
            <div class=\"diagram\">
                <div class=\"chart-btns-energy\">
                    <button onclick=\"showEnergyUse()\" class=\"showStatsBtn energyBtn\" id=\"showUseBtn\">Visa energianvändning</button>
                    <button onclick=\"showSupply()\" class=\"showStatsBtn energyBtn\" id=\"showSupplyBtn\">Visa energitillförsel</button>
                    <button onclick=\"showPetro()\" class=\"showStatsBtn energyBtn\" id=\"showPetroBtn\">Visa användning av petroleumprodukter</button>
                    <button onclick=\"showAllCharts()\" class=\"showAllStatsBtn energyBtn\" id=\"showAllChartsBtn\">Visa all statistik</button>
                </div>
                ";
        // line 35
        yield $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart((isset($context["chart1"]) || array_key_exists("chart1", $context) ? $context["chart1"] : (function () { throw new RuntimeError('Variable "chart1" does not exist.', 35, $this->source); })()), ["id" => "energy-use-chart", "class" => "chart", "style" => "display: none;"]);
        yield "
                ";
        // line 36
        yield $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart((isset($context["chart2"]) || array_key_exists("chart2", $context) ? $context["chart2"] : (function () { throw new RuntimeError('Variable "chart2" does not exist.', 36, $this->source); })()), ["id" => "energy-supply-chart", "class" => "chart", "style" => "display: none;"]);
        yield "
                ";
        // line 37
        yield $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart((isset($context["chart3"]) || array_key_exists("chart3", $context) ? $context["chart3"] : (function () { throw new RuntimeError('Variable "chart3" does not exist.', 37, $this->source); })()), ["id" => "energy-petro-chart", "class" => "chart", "style" => "display: none;"]);
        yield "
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 43
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>

    function showEnergyUse() {
        const chart = document.getElementById(\"energy-use-chart\");
        const btn = document.getElementById(\"showUseBtn\");
        if (chart.style.display === \"none\") {
            chart.style.display = \"block\";
            btn.textContent = \"Dölj energianvändning\";
        } else {
            chart.style.display = \"none\";
            btn.textContent = \"Visa energianvändning\";
        }
    }

    function showSupply() {
        const chart = document.getElementById(\"energy-supply-chart\");
        const btn = document.getElementById(\"showSupplyBtn\");
        if (chart.style.display === \"none\") {
            chart.style.display = \"block\";
            btn.textContent = \"Dölj energitillförsel\";
        } else {
            chart.style.display = \"none\";
            btn.textContent = \"Visa energitillförsel\";
        }
    }
    
    function showPetro() {
        const chart = document.getElementById(\"energy-petro-chart\");
        const btn = document.getElementById(\"showPetroBtn\");
        if (chart.style.display === \"none\") {
            chart.style.display = \"block\";
            btn.textContent = \"Dölj användning av petroleumprodukter\";
        } else {
            chart.style.display = \"none\";
            btn.textContent = \"Visa användning av petroleumprodukter\";
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
        return "Kmom10/energy.html.twig";
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
        return array (  156 => 44,  146 => 43,  130 => 37,  126 => 36,  122 => 35,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Kmom10/proj.base.html.twig\" %}

{% block title %}Mål 7{% endblock %}

{% block body %}
    <h1>&nbsp;</h1>
    <div class=\"energy-container\">
        <div>
            <h1>Mål 7 - hållbar energi för alla</h1>
            <p>
                Det sjunde globala målet syftar till att säkra tillgången till hållbar, tillförlitlig och förnybar energi. 
                Målet innefattar såväl nationella som internationella delmål, vilka i nuälget är satta till att nås senast år 2030. Ett delmål
                fokuserar på att öka andelen förnybar energi, vilket Sverige nått stora framgångar inom redan, men fortsätter att effektivisera 
                och optimera ytterligare. År 2003 infördes ett elcertifikatsystem som syftade till att främja produktion av förnybar el, där
                resultatet visade sig så pass gott att systemet kan avslutas tidigare än initialt planerat. 
            </p> 
            <p>
                Energimyndigheten [1] tillhandahåller statistik kring energi och sammanställer regelbundet data och prognoser inom energiområdet. 
                För att visualisera det arbete som skett för att öka andelen förnybar energi presenteras nedan statistik över årlig energianvändning 
                mellan åren 2007-2022 (med intervall om fem år), där syftet är att visa på hur energianvändningen ändrats under dessa år. Det bör dock 
                has i åtanke att tidsperioden är förhållandevis kort och att stora förändringar kräver större tidsspann för att kunna urskiljas på ett tydligare sätt. 
                För att tydligare visualisera detta visas energitillförsel per energivara mellan år 1972-2022, med intervall om tio år. Dessutom visas
                slutlig användning av petroleumprodukter per sektor mellan år 1987-2022, med intervall om fem år.
                En positiv trend som kan ses är att andelen biobränsle ökar och solkraften har de senaste åren börjat tillföra viss mängd till den totala 
                energimixen. Samtidigt minskar användningen av petroleumprodukter och den totala användningen har mer än halverats från år 1987 till år 2022.
                <br><i><span style=\"font-size: 16px\";>[1] https://www.https://www.energimyndigheten.se/</span></i>
            </p>
            <div class=\"diagram\">
                <div class=\"chart-btns-energy\">
                    <button onclick=\"showEnergyUse()\" class=\"showStatsBtn energyBtn\" id=\"showUseBtn\">Visa energianvändning</button>
                    <button onclick=\"showSupply()\" class=\"showStatsBtn energyBtn\" id=\"showSupplyBtn\">Visa energitillförsel</button>
                    <button onclick=\"showPetro()\" class=\"showStatsBtn energyBtn\" id=\"showPetroBtn\">Visa användning av petroleumprodukter</button>
                    <button onclick=\"showAllCharts()\" class=\"showAllStatsBtn energyBtn\" id=\"showAllChartsBtn\">Visa all statistik</button>
                </div>
                {{ render_chart(chart1, {'id': 'energy-use-chart', 'class': 'chart', 'style': 'display: none;'}) }}
                {{ render_chart(chart2, {'id': 'energy-supply-chart', 'class': 'chart', 'style': 'display: none;'}) }}
                {{ render_chart(chart3, {'id': 'energy-petro-chart', 'class': 'chart', 'style': 'display: none;'}) }}
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts  %}
{{ parent() }}
<script>

    function showEnergyUse() {
        const chart = document.getElementById(\"energy-use-chart\");
        const btn = document.getElementById(\"showUseBtn\");
        if (chart.style.display === \"none\") {
            chart.style.display = \"block\";
            btn.textContent = \"Dölj energianvändning\";
        } else {
            chart.style.display = \"none\";
            btn.textContent = \"Visa energianvändning\";
        }
    }

    function showSupply() {
        const chart = document.getElementById(\"energy-supply-chart\");
        const btn = document.getElementById(\"showSupplyBtn\");
        if (chart.style.display === \"none\") {
            chart.style.display = \"block\";
            btn.textContent = \"Dölj energitillförsel\";
        } else {
            chart.style.display = \"none\";
            btn.textContent = \"Visa energitillförsel\";
        }
    }
    
    function showPetro() {
        const chart = document.getElementById(\"energy-petro-chart\");
        const btn = document.getElementById(\"showPetroBtn\");
        if (chart.style.display === \"none\") {
            chart.style.display = \"block\";
            btn.textContent = \"Dölj användning av petroleumprodukter\";
        } else {
            chart.style.display = \"none\";
            btn.textContent = \"Visa användning av petroleumprodukter\";
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
</script>
    
{% endblock %}", "Kmom10/energy.html.twig", "/home/caas23/dbwebb-kurser/mvc/me/report/templates/Kmom10/energy.html.twig");
    }
}
