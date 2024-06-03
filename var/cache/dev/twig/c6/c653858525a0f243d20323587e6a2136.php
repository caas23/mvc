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

/* Kmom05/update-book.html.twig */
class __TwigTemplate_9de2d5add30a313a0410716cee6b6331 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Kmom05/update-book.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Kmom05/update-book.html.twig"));

        $this->parent = $this->loadTemplate("Shared/base.html.twig", "Kmom05/update-book.html.twig", 1);
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
            <h3>Uppdatera bok med id ";
        // line 9
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 9, $this->source); })()), "html", null, true);
        yield "</h3>
            <form class=\"library-form\" method=\"post\" action=\"\">  
                <label for=\"title\">Titel</label>
                <input type=\"text\" id=\"title\" name=\"title\" value=\"";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "\" required>
                
                <label for=\"isbn\">ISBN</label>
                <input type=\"text\" id=\"isbn\" name=\"isbn\" value=\"";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["isbn"]) || array_key_exists("isbn", $context) ? $context["isbn"] : (function () { throw new RuntimeError('Variable "isbn" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "\" required>
                
                <label for=\"author\">Författare</label>
                <input type=\"text\" id=\"author\" name=\"author\" value=\"";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "\" required>
                
                <label for=\"image\">Bildkälla</label>
                <input type=\"text\" id=\"image\" name=\"image\" value=\"";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "\" required>

                <input type=\"submit\" name=\"\" value=\"Uppdatera bok\">
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
        return "Kmom05/update-book.html.twig";
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
        return array (  119 => 21,  113 => 18,  107 => 15,  101 => 12,  95 => 9,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Shared/base.html.twig\" %}

{% block title %}Bibliotek{% endblock %}

{% block body %}
    <h1>Bibliotek</h1>
    <div class=\"container library-container\">
        <div>
            <h3>Uppdatera bok med id {{ id }}</h3>
            <form class=\"library-form\" method=\"post\" action=\"\">  
                <label for=\"title\">Titel</label>
                <input type=\"text\" id=\"title\" name=\"title\" value=\"{{ title }}\" required>
                
                <label for=\"isbn\">ISBN</label>
                <input type=\"text\" id=\"isbn\" name=\"isbn\" value=\"{{ isbn }}\" required>
                
                <label for=\"author\">Författare</label>
                <input type=\"text\" id=\"author\" name=\"author\" value=\"{{ author }}\" required>
                
                <label for=\"image\">Bildkälla</label>
                <input type=\"text\" id=\"image\" name=\"image\" value=\"{{ image }}\" required>

                <input type=\"submit\" name=\"\" value=\"Uppdatera bok\">
            </form>
        </div>
    </div>
{% endblock %}", "Kmom05/update-book.html.twig", "/home/caas23/dbwebb-kurser/mvc/me/report/templates/Kmom05/update-book.html.twig");
    }
}
