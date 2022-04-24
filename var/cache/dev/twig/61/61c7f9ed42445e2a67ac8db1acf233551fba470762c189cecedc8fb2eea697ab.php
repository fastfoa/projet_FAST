<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* dash/dashOFPrincipal.html.twig */
class __TwigTemplate_7fe4e607230ab0dfdd00429a280a9599b1c1232a468790e72575b4092276cc86 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'myStylesheets' => [$this, 'block_myStylesheets'],
            'myJavascripts' => [$this, 'block_myJavascripts'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dash/dashOFPrincipal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dash/dashOFPrincipal.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dash/dashOFPrincipal.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_myStylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "myStylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "myStylesheets"));

        // line 4
        echo "\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
\t<style>
\t\t.clickable-row:hover {
\t\t\tbackground-color: #f37262;
\t\t}
\t</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_myJavascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "myJavascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "myJavascripts"));

        // line 14
        echo "\t<script src=\"https://code.jquery.com/jquery-3.6.0.slim.js\" integrity=\"sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=\" crossorigin=\"anonymous\"></script>

\t<script>

\t\tjQuery(document).ready(function (\$) {
\$(\".clickable-row\").click(function () {
window.location = \$(this).data(\"href\");
});
});
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "OF - Liste des sessions
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 30
        echo "
\t<div
\t\tclass=\"container-fluid bg-workSpace\">
\t\t<!-- MAIN CARDS-->
\t\t<div class=\"row\"></div>
\t\t<div class=\"row bg-bar\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h4>Sessions en cours</h4>
\t\t\t</div>

\t\t</div>

\t\t<div class=\"row bg\">
\t\t\t<div class=\"col-4\">
\t\t\t\t<a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addSession");
        echo "\">
\t\t\t\t\t<button class=\"btn btn-success my-2\">+ Ajouter une session</button>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-4 txt-normal\">
\t\t\t\t<a class=\"btn btn-success my-2\" href=\"#\">Supprimer la session</a>
\t\t\t</div>
\t\t\t<div class=\"col-4 txt-normal\">
\t\t\t\t<a class=\"btn btn-success my-2\" href=\"#\">Archiver la session</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<table class=\"table-normal\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar\">Début</th>
\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar\">Fin</th>
\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar\">Nom</th>
\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar\">Formation</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listSession"]) || array_key_exists("listSession", $context) ? $context["listSession"] : (function () { throw new RuntimeError('Variable "listSession" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 68
            echo "\t\t\t\t\t\t\t<tr class='clickable-row' data-href='";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashOFSession", ["session" => twig_get_attribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "'>
\t\t\t\t\t\t\t\t<td>";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "debut", [], "any", false, false, false, 69), "d/m/y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "fin", [], "any", false, false, false, 70), "d/m/y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "nom", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "f", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t";
            // line 92
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>


\t\t</div>

\t</div>
\t<div class=\"row bg-bar\">
\t\t<div class=\"col-12\">
\t\t\t<h4>Sessions archivées</h4>
\t\t</div>
\t</div>
</div></div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dash/dashOFPrincipal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 93,  217 => 92,  210 => 72,  206 => 71,  202 => 70,  198 => 69,  193 => 68,  189 => 67,  163 => 44,  147 => 30,  137 => 29,  117 => 26,  97 => 14,  87 => 13,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block myStylesheets %}
\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
\t<style>
\t\t.clickable-row:hover {
\t\t\tbackground-color: #f37262;
\t\t}
\t</style>
{% endblock %}


{% block myJavascripts %}
\t<script src=\"https://code.jquery.com/jquery-3.6.0.slim.js\" integrity=\"sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=\" crossorigin=\"anonymous\"></script>

\t<script>

\t\tjQuery(document).ready(function (\$) {
\$(\".clickable-row\").click(function () {
window.location = \$(this).data(\"href\");
});
});
\t</script>
{% endblock myJavascripts %}

{% block title %}OF - Liste des sessions
{% endblock %}

{% block body %}

\t<div
\t\tclass=\"container-fluid bg-workSpace\">
\t\t<!-- MAIN CARDS-->
\t\t<div class=\"row\"></div>
\t\t<div class=\"row bg-bar\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<h4>Sessions en cours</h4>
\t\t\t</div>

\t\t</div>

\t\t<div class=\"row bg\">
\t\t\t<div class=\"col-4\">
\t\t\t\t<a href=\"{{ path( 'addSession') }}\">
\t\t\t\t\t<button class=\"btn btn-success my-2\">+ Ajouter une session</button>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-4 txt-normal\">
\t\t\t\t<a class=\"btn btn-success my-2\" href=\"#\">Supprimer la session</a>
\t\t\t</div>
\t\t\t<div class=\"col-4 txt-normal\">
\t\t\t\t<a class=\"btn btn-success my-2\" href=\"#\">Archiver la session</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<table class=\"table-normal\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar\">Début</th>
\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar\">Fin</th>
\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar\">Nom</th>
\t\t\t\t\t\t\t<th class=\"txt-bar bg-bar\">Formation</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for session in listSession %}
\t\t\t\t\t\t\t<tr class='clickable-row' data-href='{{ path( 'dashOFSession',{'session':session.id} ) }}'>
\t\t\t\t\t\t\t\t<td>{{session.debut|date(\"d/m/y\")}}</td>
\t\t\t\t\t\t\t\t<td>{{session.fin|date(\"d/m/y\")}}</td>
\t\t\t\t\t\t\t\t<td>{{session.nom}}</td>
\t\t\t\t\t\t\t\t<td>{{session.f}}</td>

\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t{# <div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"panelsStayOpen-headingOne\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseOne\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseOne\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"txt-dark\">Apprenti</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"panelsStayOpen-collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-headingOne\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h1>122</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> #}
\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>


\t\t</div>

\t</div>
\t<div class=\"row bg-bar\">
\t\t<div class=\"col-12\">
\t\t\t<h4>Sessions archivées</h4>
\t\t</div>
\t</div>
</div></div>{% endblock %}
", "dash/dashOFPrincipal.html.twig", "C:\\wamp64a\\projet_FAST\\templates\\dash\\dashOFPrincipal.html.twig");
    }
}
