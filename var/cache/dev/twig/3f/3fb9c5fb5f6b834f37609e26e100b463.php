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

/* Kmom10/api.html.twig */
class __TwigTemplate_bb5cac1c31e18f9aa1b40aa0ea252d8d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Kmom10/api.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Kmom10/api.html.twig"));

        $this->parent = $this->loadTemplate("Kmom10/proj.base.html.twig", "Kmom10/api.html.twig", 1);
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
        yield "    <h1>&nbsp;</h1>
    <div class=\"container-api\">
        <div>
            <h1>API</h1>
                <h3>God hälsa och välbefinnande</h3>
                <p>
                    <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_health1");
        yield "\" target=\"_blank\">Visa dödsfall</a>
                    till följd av Covid-19, samt dödsfall generellt år 2017-2023.
                </p>
                <p>
                    <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_health2");
        yield "\" target=\"_blank\">Visa dödsfall</a> till följd av Covid-19, sorterat per åldersgrupp.
                </p>
                
                <h3>Hållbar energi för alla</h3>
                <p>
                    <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_energy1");
        yield "\" target=\"_blank\">Visa energitillförsel</a>
                    per energivara [TWh].
                </p>
                <p>
                    <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_energy2");
        yield "\" target=\"_blank\">Visa användning</a>
                    av petroleumprodukter per sektor [TWh].
                </p>
                 
                <p>
                    Välj ett år (2007, 2012, 2017, 2022) för att visa energianvändning
                    <form method=\"post\" action=\"\" target=\"_blank\">
                        <select name=\"year\">
                            <option value=\"2007\">2007</option>  
                            <option value=\"2012\">2012</option>  
                            <option value=\"2017\">2017</option>  
                            <option value=\"2022\">2022</option>  
                        <input type=\"submit\" name=\"\" value=\"Visa energianvändning\">
                    </form>
                </p> 

                 <i>Källor: SCB och Energimyndigheten</i>
                ";
        // line 55
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
        return "Kmom10/api.html.twig";
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
        return array (  140 => 55,  120 => 25,  113 => 21,  105 => 16,  98 => 12,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Kmom10/proj.base.html.twig\" %}

{% block title %}Api{% endblock %}

{% block body %}
    <h1>&nbsp;</h1>
    <div class=\"container-api\">
        <div>
            <h1>API</h1>
                <h3>God hälsa och välbefinnande</h3>
                <p>
                    <a href=\"{{ path('api_health1') }}\" target=\"_blank\">Visa dödsfall</a>
                    till följd av Covid-19, samt dödsfall generellt år 2017-2023.
                </p>
                <p>
                    <a href=\"{{ path('api_health2') }}\" target=\"_blank\">Visa dödsfall</a> till följd av Covid-19, sorterat per åldersgrupp.
                </p>
                
                <h3>Hållbar energi för alla</h3>
                <p>
                    <a href=\"{{ path('api_energy1') }}\" target=\"_blank\">Visa energitillförsel</a>
                    per energivara [TWh].
                </p>
                <p>
                    <a href=\"{{ path('api_energy2') }}\" target=\"_blank\">Visa användning</a>
                    av petroleumprodukter per sektor [TWh].
                </p>
                 
                <p>
                    Välj ett år (2007, 2012, 2017, 2022) för att visa energianvändning
                    <form method=\"post\" action=\"\" target=\"_blank\">
                        <select name=\"year\">
                            <option value=\"2007\">2007</option>  
                            <option value=\"2012\">2012</option>  
                            <option value=\"2017\">2017</option>  
                            <option value=\"2022\">2022</option>  
                        <input type=\"submit\" name=\"\" value=\"Visa energianvändning\">
                    </form>
                </p> 

                 <i>Källor: SCB och Energimyndigheten</i>
                {# <h3>Hållbar energi för alla</h3>
                <a href=\"{{ path('api/deck') }}\" target=\"_blank\">Visa alla kort sorterade per färg och värde</a>
                <li>
                    Visar 52 kort sorterad.
                </li>
                
                <li>
                    Dra <strong>x antal</strong> slumpmässiga kort
                    <form method=\"post\" action=\"\" target=\"_blank\">  
                        <input type=\"number\" name=\"num_cards\" min=\"1\" max=\"52\" placeholder=\"1\">
                        <input type=\"submit\" name=\"\" value=\"Visa kort\">
                    </form>
                </li>  #}
        </div>
    </div>
    
{% endblock %}", "Kmom10/api.html.twig", "/home/caas23/dbwebb-kurser/mvc/me/report/templates/Kmom10/api.html.twig");
    }
}
