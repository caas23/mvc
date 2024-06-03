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

/* Kmom05/library.html.twig */
class __TwigTemplate_79cd75a5bd7a0517956fd4535e62fd36 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Kmom05/library.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Kmom05/library.html.twig"));

        $this->parent = $this->loadTemplate("Shared/base.html.twig", "Kmom05/library.html.twig", 1);
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

        yield "Bibliotek";
        
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
        yield "    <h1>Bibliotek</h1>
    <div class=\"container library-container\">
        <div>
            <h3>Lägg till ny bok</h3>
            <form class=\"library-form\" method=\"post\" action=\"\">  
                <label for=\"title\">Titel</label>
                <input type=\"text\" id=\"title\" name=\"title\" placeholder=\"Titel...\" required>
                
                <label for=\"isbn\">ISBN</label>
                <input type=\"text\" id=\"isbn\" name=\"isbn\" placeholder=\"ISBN...\" required>
                
                <label for=\"author\">Författare</label>
                <input type=\"text\" id=\"author\" name=\"author\" placeholder=\"Författare...\" required>
                
                <label for=\"image\">Bildkälla</label>
                <input type=\"text\" id=\"image\" name=\"image\" placeholder=\"Bildkälla...\" required>

                <input type=\"submit\" name=\"\" value=\"Lägg till bok\">
            </form>
            
            <h3>Visa en eller alla böcker</h3>
            <form class=\"library-form\" method=\"post\" action=\"\">  
                <label for=\"id\">Id</label>
                <input class=\"tip-under\" type=\"text\" id=\"id\" name=\"id\" placeholder=\"Id för boken...\" required>
                <span class=\"span-tip\">Tips! Se alla böckers id via \"visa alla böcker\".</span>
                <input type=\"submit\" name=\"\" value=\"Visa vald bok\">
            </form>
            
            <form class=\"library-form\" action=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("library_show_all");
        yield "\">  
                <input type=\"submit\" name=\"\" value=\"Visa alla böcker\">
            </form>
            
            <h3>Återställ databasen</h3>
            
            <form class=\"library-form\" action=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("library_reset");
        yield "\">  
                <input type=\"submit\" name=\"\" value=\"Återställ\">
            </form>
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
        return "Kmom05/library.html.twig";
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
        return array (  129 => 40,  120 => 34,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Shared/base.html.twig\" %}

{% block title %}Bibliotek{% endblock %}

{% block body %}
    <h1>Bibliotek</h1>
    <div class=\"container library-container\">
        <div>
            <h3>Lägg till ny bok</h3>
            <form class=\"library-form\" method=\"post\" action=\"\">  
                <label for=\"title\">Titel</label>
                <input type=\"text\" id=\"title\" name=\"title\" placeholder=\"Titel...\" required>
                
                <label for=\"isbn\">ISBN</label>
                <input type=\"text\" id=\"isbn\" name=\"isbn\" placeholder=\"ISBN...\" required>
                
                <label for=\"author\">Författare</label>
                <input type=\"text\" id=\"author\" name=\"author\" placeholder=\"Författare...\" required>
                
                <label for=\"image\">Bildkälla</label>
                <input type=\"text\" id=\"image\" name=\"image\" placeholder=\"Bildkälla...\" required>

                <input type=\"submit\" name=\"\" value=\"Lägg till bok\">
            </form>
            
            <h3>Visa en eller alla böcker</h3>
            <form class=\"library-form\" method=\"post\" action=\"\">  
                <label for=\"id\">Id</label>
                <input class=\"tip-under\" type=\"text\" id=\"id\" name=\"id\" placeholder=\"Id för boken...\" required>
                <span class=\"span-tip\">Tips! Se alla böckers id via \"visa alla böcker\".</span>
                <input type=\"submit\" name=\"\" value=\"Visa vald bok\">
            </form>
            
            <form class=\"library-form\" action=\"{{ path('library_show_all') }}\">  
                <input type=\"submit\" name=\"\" value=\"Visa alla böcker\">
            </form>
            
            <h3>Återställ databasen</h3>
            
            <form class=\"library-form\" action=\"{{ path('library_reset') }}\">  
                <input type=\"submit\" name=\"\" value=\"Återställ\">
            </form>
        </div>
    </div>
{% endblock %}", "Kmom05/library.html.twig", "/home/caas23/dbwebb-kurser/mvc/me/report/templates/Kmom05/library.html.twig");
    }
}
