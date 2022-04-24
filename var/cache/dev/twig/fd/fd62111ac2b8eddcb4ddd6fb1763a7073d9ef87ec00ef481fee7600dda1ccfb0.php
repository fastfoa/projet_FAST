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

/* dash/dashFormateur.html.twig */
class __TwigTemplate_00984f81f3d3fc2553af19b5a63b394a7141ed0dfb1cef95e4a9d403411cbbc7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dash/dashFormateur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dash/dashFormateur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dash/dashFormateur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_myStylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "myStylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "myStylesheets"));

        // line 3
        echo "\t<style>
\t\t.colorTextNoir {
\t\t\tcolor: black !important;
\t\t}
\t\t.clickable-row:hover {
\t\t\tbackground-color: #f37262;
\t\t}
\t\ta {
\t\t\ttext-decoration: none;
\t\t}
\t</style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_myJavascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "myJavascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "myJavascripts"));

        // line 17
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
\t\t";
        // line 31
        if ((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new RuntimeError('Variable "sessions" does not exist.', 31, $this->source); })())) {
            // line 32
            echo "\t\t\t<div class=\"container bg-workSpace\">
\t\t\t<div class=\"row \">
\t\t";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new RuntimeError('Variable "sessions" does not exist.', 34, $this->source); })())) - 1)));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 35
                echo "\t\t
\t\t
\t\t\t\t
\t\t\t\t\t<div class=\"col-12  \">
\t\t\t\t\t\t<div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<div class=\"accordion-header\" id=\"panelsStayOpen-headingOne\">
\t\t\t\t\t\t\t\t\t<button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseOne\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseOne\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"txt-dark\">Session";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new RuntimeError('Variable "sessions" does not exist.', 43, $this->source); })()), $context["i"], [], "array", false, false, false, 43), "nom", [], "any", false, false, false, 43), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"panelsStayOpen-collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-headingOne\">
\t\t\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row bg-bar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 txt-normal\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tDebut :\t";
                // line 52
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new RuntimeError('Variable "sessions" does not exist.', 52, $this->source); })()), $context["i"], [], "array", false, false, false, 52), "debut", [], "any", false, false, false, 52), "d/m/y"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 txt-normal\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tFin : ";
                // line 55
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new RuntimeError('Variable "sessions" does not exist.', 55, $this->source); })()), $context["i"], [], "array", false, false, false, 55), "fin", [], "any", false, false, false, 55), "d/m/y"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 59
                $this->loadTemplate("listSession1.html.twig", "dash/dashFormateur.html.twig", 59)->display($context);
                // line 60
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t
\t\t
\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "\t\t\t";
            $this->loadTemplate("dash/dashOFInclude.html.twig", "dash/dashFormateur.html.twig", 73)->display($context);
            // line 74
            echo "\t\t</div>\t</div>\t
\t\t";
        } else {
            // line 76
            echo "\t\t\t<div class=\"row bg-bar\">
\t\t\t\t<div class=\"col-6 txt-normal\">
\t\t\t\t\t<h3>Aucune session en cours</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 81
        echo "\t\t
\t
\t\t";
        // line 83
        $context["retour"] = "dashFormateur";
        // line 84
        echo "\t</div>

</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dash/dashFormateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 84,  240 => 83,  236 => 81,  228 => 76,  224 => 74,  221 => 73,  195 => 60,  193 => 59,  186 => 55,  180 => 52,  168 => 43,  158 => 35,  141 => 34,  137 => 32,  135 => 31,  132 => 30,  122 => 29,  102 => 17,  92 => 16,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block myStylesheets %}
\t<style>
\t\t.colorTextNoir {
\t\t\tcolor: black !important;
\t\t}
\t\t.clickable-row:hover {
\t\t\tbackground-color: #f37262;
\t\t}
\t\ta {
\t\t\ttext-decoration: none;
\t\t}
\t</style>

{% endblock myStylesheets %}
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

{% block body %}

\t\t{% if sessions %}
\t\t\t<div class=\"container bg-workSpace\">
\t\t\t<div class=\"row \">
\t\t{% for i in 0.. sessions|length -1  %}
\t\t
\t\t
\t\t\t\t
\t\t\t\t\t<div class=\"col-12  \">
\t\t\t\t\t\t<div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t<div class=\"accordion-header\" id=\"panelsStayOpen-headingOne\">
\t\t\t\t\t\t\t\t\t<button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseOne\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseOne\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"txt-dark\">Session{{sessions[i].nom}}</h4>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"panelsStayOpen-collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-headingOne\">
\t\t\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row bg-bar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 txt-normal\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tDebut :\t{{sessions[i].debut|date(\"d/m/y\")}}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-6 txt-normal\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tFin : {{sessions[i].fin|date(\"d/m/y\")}}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% include 'listSession1.html.twig' %}
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t
\t\t
\t\t{% endfor %}
\t\t\t{% include 'dash/dashOFInclude.html.twig' %}
\t\t</div>\t</div>\t
\t\t{% else %}
\t\t\t<div class=\"row bg-bar\">
\t\t\t\t<div class=\"col-6 txt-normal\">
\t\t\t\t\t<h3>Aucune session en cours</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}\t\t
\t
\t\t{% set retour = 'dashFormateur' %}
\t</div>

</div>{% endblock %}
", "dash/dashFormateur.html.twig", "C:\\wamp64a\\projet_FAST\\templates\\dash\\dashFormateur.html.twig");
    }
}
