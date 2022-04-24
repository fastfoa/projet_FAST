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

/* evaluation/saisiEvaluation.html.twig */
class __TwigTemplate_24006e39d240616bc53207c63988c8c1c3267a1d604d27882bf07fc26b17b6da extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'myStylesheets' => [$this, 'block_myStylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evaluation/saisiEvaluation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evaluation/saisiEvaluation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evaluation/saisiEvaluation.html.twig", 1);
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
        echo "
\t<style>
\t\t.myarea textarea {
\t\t\twidth: 100%;
\t\t\theight: 150px;
\t\t}
\t</style>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start');
        echo "
\t<div class=\"container-fluid\">
\t\t<div class=\"row bg-bar\">
\t\t\t<div class=\"col-11\">
\t\t\t\t<h3>
\t\t\t\t\tApprenti :
\t\t\t\t\t";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "prenom", [], "any", false, false, false, 23), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24), "html", null, true);
        echo "</h3>
\t\t\t\t<h3>Evaluation :
\t\t\t\t\t";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["nameCompet"]) || array_key_exists("nameCompet", $context) ? $context["nameCompet"] : (function () { throw new RuntimeError('Variable "nameCompet" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "</h3>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row myarea\">
\t\t\t<div class=\" col-6 mt-3\">
\t\t\t\t<div class='txt-normal'>";
        // line 32
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["MA"] ?? null), "prenom", [], "any", true, true, false, 32)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["MA"] ?? null), "prenom", [], "any", false, false, false, 32), "nc")) : ("nc")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["MA"]) || array_key_exists("MA", $context) ? $context["MA"] : (function () { throw new RuntimeError('Variable "MA" does not exist.', 32, $this->source); })()), "nom", [], "any", false, false, false, 32), "html", null, true);
        echo "</div>
\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "remarqueMA", [], "any", false, false, false, 33), 'widget');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-6  mt-3\">
\t\t\t\t<div class='txt-normal'>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formateur"]) || array_key_exists("formateur", $context) ? $context["formateur"] : (function () { throw new RuntimeError('Variable "formateur" does not exist.', 36, $this->source); })()), "prenom", [], "any", false, false, false, 36), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formateur"]) || array_key_exists("formateur", $context) ? $context["formateur"] : (function () { throw new RuntimeError('Variable "formateur" does not exist.', 36, $this->source); })()), "nom", [], "any", false, false, false, 36), "html", null, true);
        echo "</div>
\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "remarqueFormateur", [], "any", false, false, false, 37), 'widget');
        echo "
\t\t\t</div>\t
\t\t</div>

\t\t<div class=\"row myarea\">
\t\t\t<div class=\"col-6 mt-3\">
\t\t\t\t<div class='txt-normal'>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "prenom", [], "any", false, false, false, 43), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "nom", [], "any", false, false, false, 43), "html", null, true);
        echo "</div>
\t\t\t\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "remarqueAPP", [], "any", false, false, false, 44), 'widget');
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-6 mt-3\">
\t\t\t\t<div class='txt-normal'>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OF"]) || array_key_exists("OF", $context) ? $context["OF"] : (function () { throw new RuntimeError('Variable "OF" does not exist.', 47, $this->source); })()), "prenom", [], "any", false, false, false, 47), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OF"]) || array_key_exists("OF", $context) ? $context["OF"] : (function () { throw new RuntimeError('Variable "OF" does not exist.', 47, $this->source); })()), "nom", [], "any", false, false, false, 47), "html", null, true);
        echo "</div>
\t\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "remarqueOF", [], "any", false, false, false, 48), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row mx-auto\">
\t\t\t<div class=\"col-5 mt-3\">
\t\t\t\t";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "Enregistrer", [], "any", false, false, false, 53), 'widget');
        echo "
\t\t\t</div>
\t\t\t";
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "note", [], "any", true, true, false, 55)) {
            // line 56
            echo "\t\t\t\t<div class=\"col-1 txt-normal  mt-3\">
\t\t\t\t\tnote :
\t\t\t\t</div>
\t\t\t\t<div class=\"col-3  mt-3\">
\t\t\t\t\t";
            // line 60
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "note", [], "any", false, false, false, 60), 'row');
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-3 mt-3\">
\t\t\t\t\t<div class=\"txt-normal\" id=\"resultRange\"></div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 66
        echo "\t\t</div>

\t</div>
\t<br>
\t";
        // line 70
        if ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 70, $this->source); })())) {
            // line 71
            echo "\t\t<div class=\"alert-info\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 71, $this->source); })()), "html", null, true);
            echo "</div>
\t";
        }
        // line 73
        echo "\t";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "evaluation/saisiEvaluation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 73,  209 => 71,  207 => 70,  201 => 66,  192 => 60,  186 => 56,  184 => 55,  179 => 53,  171 => 48,  165 => 47,  159 => 44,  153 => 43,  144 => 37,  138 => 36,  132 => 33,  126 => 32,  117 => 26,  112 => 24,  108 => 23,  98 => 17,  88 => 16,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block myStylesheets %}

\t<style>
\t\t.myarea textarea {
\t\t\twidth: 100%;
\t\t\theight: 150px;
\t\t}
\t</style>


{% endblock myStylesheets %}


{% block body %}
\t{{form_start(form)}}
\t<div class=\"container-fluid\">
\t\t<div class=\"row bg-bar\">
\t\t\t<div class=\"col-11\">
\t\t\t\t<h3>
\t\t\t\t\tApprenti :
\t\t\t\t\t{{ app.prenom }}
\t\t\t\t\t{{ app.nom }}</h3>
\t\t\t\t<h3>Evaluation :
\t\t\t\t\t{{ nameCompet }}</h3>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row myarea\">
\t\t\t<div class=\" col-6 mt-3\">
\t\t\t\t<div class='txt-normal'>{{MA.prenom|default(\"nc\")}} {{MA.nom}}</div>
\t\t\t\t{{ form_widget(form.remarqueMA) }}
\t\t\t</div>
\t\t\t<div class=\"col-6  mt-3\">
\t\t\t\t<div class='txt-normal'>{{formateur.prenom}} {{formateur.nom}}</div>
\t\t\t\t{{ form_widget(form.remarqueFormateur) }}
\t\t\t</div>\t
\t\t</div>

\t\t<div class=\"row myarea\">
\t\t\t<div class=\"col-6 mt-3\">
\t\t\t\t<div class='txt-normal'>{{app.prenom}} {{app.nom}}</div>
\t\t\t\t{{ form_widget(form.remarqueAPP) }}
\t\t\t</div>
\t\t\t<div class=\"col-6 mt-3\">
\t\t\t\t<div class='txt-normal'>{{OF.prenom}} {{OF.nom}}</div>
\t\t\t\t{{ form_widget(form.remarqueOF) }}
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row mx-auto\">
\t\t\t<div class=\"col-5 mt-3\">
\t\t\t\t{{ form_widget(form.Enregistrer) }}
\t\t\t</div>
\t\t\t{% if form.note is defined %}
\t\t\t\t<div class=\"col-1 txt-normal  mt-3\">
\t\t\t\t\tnote :
\t\t\t\t</div>
\t\t\t\t<div class=\"col-3  mt-3\">
\t\t\t\t\t{{ form_row(form.note) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-3 mt-3\">
\t\t\t\t\t<div class=\"txt-normal\" id=\"resultRange\"></div>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>

\t</div>
\t<br>
\t{% if message %}
\t\t<div class=\"alert-info\">{{message}}</div>
\t{% endif %}
\t{{form_end(form)}}

{% endblock body %}
", "evaluation/saisiEvaluation.html.twig", "C:\\wamp64a\\projet_FAST\\templates\\evaluation\\saisiEvaluation.html.twig");
    }
}
