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

/* Kmom01/presentation.html.twig */
class __TwigTemplate_f2be1b0d62c30f6781717609d41f165b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Kmom01/presentation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Kmom01/presentation.html.twig"));

        $this->parent = $this->loadTemplate("Shared/base.html.twig", "Kmom01/presentation.html.twig", 1);
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

        yield "Presentation";
        
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
        yield "    <h1>Om mig</h1>
    <div class=\"container\">
        <div>
            <img class=\"me-img\" src=\"";
        // line 9
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/me.png"), "html", null, true);
        yield "\" alt=\"\">
            <p>
                Så, då var det dags för ännu en presentation av mig själv. Då fotbollssäsongen, snön till trots, faktiskt
                börjar närma sig tyckte jag att vald bild var passande. Dessutom är ju fotboll en stor hobby i mitt liv 
                och säsongspremiären är alltid något att se framemot. Om jag skulle se någon nedsida med fotbollen så är nog 
                att jag är en otroligt dålig förlorare och tjurar ett bra tag vid händelse av en förlust.
            </p>
            <p>
                Ska jag nämna något om mig själv i övrigt, så får det väl bli det vanliga
                <ul>
                    <li> - 26 år, sambo och två katter.</li>
                    <li> - Utbildad energiingenjör men har arbetat som både musiklärare på en skola i Skåne och som svensklärare i svenska som främmande språk.</li>
                    <li> - Konsumerar troligen mer Pepsi Max än jag borde, men det är rackarns gott.</li>
                    <li> - Är riktigt svag för bra pianomusik och ser mitt eget pianospelande som ett sätt av varva ner och koppla av.</li>
                </ul>
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
        return "Kmom01/presentation.html.twig";
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
        return array (  95 => 9,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Shared/base.html.twig\" %}

{% block title %}Presentation{% endblock %}

{% block body %}
    <h1>Om mig</h1>
    <div class=\"container\">
        <div>
            <img class=\"me-img\" src=\"{{ asset('img/me.png') }}\" alt=\"\">
            <p>
                Så, då var det dags för ännu en presentation av mig själv. Då fotbollssäsongen, snön till trots, faktiskt
                börjar närma sig tyckte jag att vald bild var passande. Dessutom är ju fotboll en stor hobby i mitt liv 
                och säsongspremiären är alltid något att se framemot. Om jag skulle se någon nedsida med fotbollen så är nog 
                att jag är en otroligt dålig förlorare och tjurar ett bra tag vid händelse av en förlust.
            </p>
            <p>
                Ska jag nämna något om mig själv i övrigt, så får det väl bli det vanliga
                <ul>
                    <li> - 26 år, sambo och två katter.</li>
                    <li> - Utbildad energiingenjör men har arbetat som både musiklärare på en skola i Skåne och som svensklärare i svenska som främmande språk.</li>
                    <li> - Konsumerar troligen mer Pepsi Max än jag borde, men det är rackarns gott.</li>
                    <li> - Är riktigt svag för bra pianomusik och ser mitt eget pianospelande som ett sätt av varva ner och koppla av.</li>
                </ul>
            </p>
        </div>
    </div>
{% endblock %}", "Kmom01/presentation.html.twig", "/home/caas23/dbwebb-kurser/mvc/me/report/templates/Kmom01/presentation.html.twig");
    }
}
