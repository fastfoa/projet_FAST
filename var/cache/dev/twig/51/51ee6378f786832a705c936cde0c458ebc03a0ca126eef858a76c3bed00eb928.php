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

/* dash/dashEntreprise.html.twig */
class __TwigTemplate_a991c0bd564f394ea80c06a0703b171137658050c68de9446a394c1b734e1e51 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dash/dashEntreprise.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dash/dashEntreprise.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dash/dashEntreprise.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
\t<div class=\"container-fluid bg-workSpace\">
\t\t<div
\t\t\tclass=\"row bg-bar\">
\t\t\t";
        // line 10
        echo "\t\t\t<h3>Interface Entreprise
\t\t\t</h3>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">

\t\t\t\t<div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"panelsStayOpen-headingOne\">
\t\t\t\t\t\t\t<button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseOne\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseOne\">
\t\t\t\t\t\t\t\t<h2 class=\"txt-dark\">Apprenti</h2
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div id=\"panelsStayOpen-collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-headingOne\">
\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t";
        // line 26
        if ((isset($context["apps"]) || array_key_exists("apps", $context) ? $context["apps"] : (function () { throw new RuntimeError('Variable "apps" does not exist.', 26, $this->source); })())) {
            // line 27
            echo "\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["apps"]) || array_key_exists("apps", $context) ? $context["apps"] : (function () { throw new RuntimeError('Variable "apps" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 28
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["app"], "prenom", [], "any", false, false, false, 31), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["app"], "nom", [], "any", false, false, false, 31), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["app"], "email", [], "any", false, false, false, 33), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["app"], "telephone", [], "any", false, false, false, 35), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 37
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["app"], "adresse", [], "any", true, true, false, 37)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["app"], "adresse", [], "any", false, false, false, 37), "adresse")) : ("adresse")), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 40
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["app"], "tel_urgence1", [], "any", true, true, false, 40)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["app"], "tel_urgence1", [], "any", false, false, false, 40), "telephone urgence 1")) : ("telephone urgence 1")), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 42
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["app"], "tel_urgence2", [], "any", true, true, false, 42)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["app"], "tel_urgence2", [], "any", false, false, false, 42), "telephone urgence 1")) : ("telephone urgence 1")), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t        
\t\t\t\t\t\t\t\t\t\t<div class=\"col-1\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashEval", ["app" => twig_get_attribute($this->env, $this->source, $context["app"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\">
                \t\t\t\t\t\t\t\t<button class=\"boutonForm\">EVAL</button>
        \t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t<hr>\t\t\t\t\t\t\t\t\t\t        
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t\t\t\t\t\t\t\t\t";
        } else {
            // line 53
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"txt-dark\">PAS D'APPRENTI</h2>
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 57
        echo "\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"panelsStayOpen-headingTwo\">
\t\t\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseTwo\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapseTwo\">
\t\t\t\t\t\t\t\t<h2 class=\"txt-dark\">Maitre d'Apprentissage</h2>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div id=\"panelsStayOpen-collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingTwo\">
\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t";
        // line 70
        if ((isset($context["mas"]) || array_key_exists("mas", $context) ? $context["mas"] : (function () { throw new RuntimeError('Variable "mas" does not exist.', 70, $this->source); })())) {
            // line 71
            echo "\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mas"]) || array_key_exists("mas", $context) ? $context["mas"] : (function () { throw new RuntimeError('Variable "mas" does not exist.', 71, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ma"]) {
                // line 72
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ma"], "prenom", [], "any", false, false, false, 75), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ma"], "nom", [], "any", false, false, false, 75), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ma"], "email", [], "any", false, false, false, 77), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ma"], "telephone", [], "any", false, false, false, 79), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 81
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["ma"], "adresse", [], "any", true, true, false, 81)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["ma"], "adresse", [], "any", false, false, false, 81), "adresse")) : ("adresse")), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ma'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "\t\t\t\t\t\t\t\t\t";
        } else {
            // line 88
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"txt-dark\">PAS DE MAITRE D'APPRENTISSAGE</h2>
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 92
        echo "\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"panelsStayOpen-headingTwo\">
\t\t\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseTwo\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapseTwo\">
\t\t\t\t\t\t\t\t<h2 class=\"txt-dark\">Formateur</h2>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div id=\"panelsStayOpen-collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingTwo\">
\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t";
        // line 105
        if ((isset($context["formateurs"]) || array_key_exists("formateurs", $context) ? $context["formateurs"] : (function () { throw new RuntimeError('Variable "formateurs" does not exist.', 105, $this->source); })())) {
            // line 106
            echo "\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["formateurs"]) || array_key_exists("formateurs", $context) ? $context["formateurs"] : (function () { throw new RuntimeError('Variable "formateurs" does not exist.', 106, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["formateur"]) {
                // line 107
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formateur"], "prenom", [], "any", false, false, false, 110), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formateur"], "nom", [], "any", false, false, false, 110), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formateur"], "email", [], "any", false, false, false, 112), "html", null, true);
                echo "<hr>
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formateur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "\t\t\t\t\t\t\t\t\t";
        } else {
            // line 119
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"txt-dark\">PAS DE Formateur  </h2>
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 123
        echo "\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 127
        $this->loadTemplate("dash/dashOFInclude.html.twig", "dash/dashEntreprise.html.twig", 127)->display($context);
        // line 128
        echo "\t\t\t\t\t";
        $context["retour"] = "dashEntreprise";
        // line 129
        echo "
\t\t\t\t


\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dash/dashEntreprise.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 129,  288 => 128,  286 => 127,  280 => 123,  274 => 119,  271 => 118,  259 => 112,  252 => 110,  247 => 107,  242 => 106,  240 => 105,  225 => 92,  219 => 88,  216 => 87,  204 => 81,  199 => 79,  194 => 77,  187 => 75,  182 => 72,  177 => 71,  175 => 70,  160 => 57,  154 => 53,  151 => 52,  138 => 45,  132 => 42,  127 => 40,  121 => 37,  116 => 35,  111 => 33,  104 => 31,  99 => 28,  94 => 27,  92 => 26,  74 => 10,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}

\t<div class=\"container-fluid bg-workSpace\">
\t\t<div
\t\t\tclass=\"row bg-bar\">
\t\t\t{# <h3>Entreprise {{entreprise.nom}}</h3> #}
\t\t\t<h3>Interface Entreprise
\t\t\t</h3>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">

\t\t\t\t<div class=\"accordion\" id=\"accordionPanelsStayOpenExample\">
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"panelsStayOpen-headingOne\">
\t\t\t\t\t\t\t<button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseOne\" aria-expanded=\"true\" aria-controls=\"panelsStayOpen-collapseOne\">
\t\t\t\t\t\t\t\t<h2 class=\"txt-dark\">Apprenti</h2
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div id=\"panelsStayOpen-collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"panelsStayOpen-headingOne\">
\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t{% if apps %}
\t\t\t\t\t\t\t\t\t{% for app in apps %}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t{{ app.prenom }} {{ app.nom }}
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t{{ app.email }}
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t{{ app.telephone }}
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t{{ app.adresse|default('adresse') }}
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-5\">
\t\t\t\t\t\t\t\t\t\t\t{{ app.tel_urgence1|default('telephone urgence 1') }}
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t{{ app.tel_urgence2|default('telephone urgence 1') }}
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t        
\t\t\t\t\t\t\t\t\t\t<div class=\"col-1\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path( 'dashEval',{'app':app.id } ) }}\">
                \t\t\t\t\t\t\t\t<button class=\"boutonForm\">EVAL</button>
        \t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t<hr>\t\t\t\t\t\t\t\t\t\t        
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"txt-dark\">PAS D'APPRENTI</h2>
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"panelsStayOpen-headingTwo\">
\t\t\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseTwo\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapseTwo\">
\t\t\t\t\t\t\t\t<h2 class=\"txt-dark\">Maitre d'Apprentissage</h2>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div id=\"panelsStayOpen-collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingTwo\">
\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t{% if mas %}
\t\t\t\t\t\t\t\t\t{% for ma in mas %}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t\t{{ ma.prenom }} {{ ma.nom }}
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t{{ ma.email }}
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t{{ ma.telephone }}
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t{{ ma.adresse|default('adresse') }}
\t\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"txt-dark\">PAS DE MAITRE D'APPRENTISSAGE</h2>
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"panelsStayOpen-headingTwo\">
\t\t\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#panelsStayOpen-collapseTwo\" aria-expanded=\"false\" aria-controls=\"panelsStayOpen-collapseTwo\">
\t\t\t\t\t\t\t\t<h2 class=\"txt-dark\">Formateur</h2>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div id=\"panelsStayOpen-collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"panelsStayOpen-headingTwo\">
\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t{% if formateurs %}
\t\t\t\t\t\t\t\t\t{% for formateur in formateurs %}
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t\t{{ formateur.prenom }} {{ formateur.nom }}
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t{{ formateur.email }}<hr>
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"txt-dark\">PAS DE Formateur  </h2>
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% include 'dash/dashOFInclude.html.twig' %}
\t\t\t\t\t{% set retour = 'dashEntreprise' %}

\t\t\t\t


\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock body %}
", "dash/dashEntreprise.html.twig", "C:\\wamp64a\\projet_FAST\\templates\\dash\\dashEntreprise.html.twig");
    }
}
