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

/* lan/inscriptionFormateurs.html.twig */
class __TwigTemplate_d01069c39f6cb0ceed5aff627c30ee0264c3a064402c0ad2d205e8454fa3dfcb extends Template
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
        return "lan/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/inscriptionFormateurs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/inscriptionFormateurs.html.twig"));

        $this->parent = $this->loadTemplate("lan/base.html.twig", "lan/inscriptionFormateurs.html.twig", 1);
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
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/login.css"), "html", null, true);
        echo "\">
\t<style>
\t\t.centrertextinscription {

\t\t\ttext-align: center;
\t\t}
\t\t.centerbtn {
\t\t\tmargin: 0 auto;
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
        echo "\t<div class=\"container \">
\t\t<div class='form'>
\t\t\t<div class=\"logoWG\">
\t\t\t\t<img width=\"50\" height=\"48\" src=\"https://webgenius.foreach-academy.fr/wp-content/uploads/2022/01/Logo-Web-Genius-300x294.png\" class=\"attachment-medium size-medium\" alt=\"\" loading=\"lazy\">
\t\t\t</div>
\t\t\t<div class=\"centrertextinscription\">

\t\t\t\t<h1>
\t\t\t\t\tInscription Formateur
\t\t\t\t</h1>
\t\t\t</div>

\t\t\t";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start');
        echo "


\t\t\t<div class=\"form-group mt-2 col-12 \">

\t\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'widget');
        // line 35
        echo "

\t\t\t</div>
\t\t\t<div class=\"form-group mt-2 col-12\">

\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "password", [], "any", false, false, false, 40), 'widget');
        // line 41
        echo "
\t\t\t</div>

\t\t\t
\t\t\t<div class=\"form-group mt-2 col-12\">

\t\t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "nom", [], "any", false, false, false, 47), 'widget');
        // line 48
        echo "
\t\t\t</div>

\t\t\t<div class=\"form-group mt-2 col-12\">

\t\t\t\t";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "prenom", [], "any", false, false, false, 53), 'widget');
        echo "
\t\t\t</div>

\t
\t\t\t<div class=\"form-group mt-2 col-12\">

\t\t\t\t";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "siret", [], "any", false, false, false, 59), 'widget');
        echo "
\t\t\t</div>

\t\t\t<div class=\"form-group mt-2 col-12\">

\t\t\t\t";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "adresse", [], "any", false, false, false, 64), 'widget');
        echo "
\t\t\t</div>

\t\t\t
\t\t\t<div class=\"form-group mt-2 col-12\">

\t\t\t\t";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "session", [], "any", false, false, false, 70), 'widget');
        echo "
\t\t\t</div>

\t\t\t<div class=\"form-group mt-2 col-12\">

\t\t\t\t";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "telephone", [], "any", false, false, false, 75), 'widget');
        echo "
\t\t\t</div>



\t\t\t<div class=\"form-group mt-2 col-12\">

\t\t\t\t";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "diplome", [], "any", false, false, false, 82), 'widget');
        echo "
\t\t\t</div>

\t\t\t<div class=\"form-group mt-2 col-12\">
\t\t\t\t";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "dateNaissance", [], "any", false, false, false, 86), 'widget');
        echo "

\t\t\t</div>

\t\t\t";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'rest');
        echo "

\t\t\t";
        // line 92
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), 'form_end');
        echo "
\t\t</div>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "lan/inscriptionFormateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 92,  209 => 90,  202 => 86,  195 => 82,  185 => 75,  177 => 70,  168 => 64,  160 => 59,  151 => 53,  144 => 48,  142 => 47,  134 => 41,  132 => 40,  125 => 35,  123 => 34,  115 => 29,  101 => 17,  91 => 16,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'lan/base.html.twig' %}

{% block myStylesheets %}
\t<link rel=\"stylesheet\" href=\"{{asset('css/login.css')}}\">
\t<style>
\t\t.centrertextinscription {

\t\t\ttext-align: center;
\t\t}
\t\t.centerbtn {
\t\t\tmargin: 0 auto;
\t\t}
\t</style>
{% endblock %}

{% block body %}
\t<div class=\"container \">
\t\t<div class='form'>
\t\t\t<div class=\"logoWG\">
\t\t\t\t<img width=\"50\" height=\"48\" src=\"https://webgenius.foreach-academy.fr/wp-content/uploads/2022/01/Logo-Web-Genius-300x294.png\" class=\"attachment-medium size-medium\" alt=\"\" loading=\"lazy\">
\t\t\t</div>
\t\t\t<div class=\"centrertextinscription\">

\t\t\t\t<h1>
\t\t\t\t\tInscription Formateur
\t\t\t\t</h1>
\t\t\t</div>

\t\t\t{{ form_start(form) }}


\t\t\t<div class=\"form-group mt-2 col-12 \">

\t\t\t\t{{ form_widget(form.email
\t\t\t\t) }}

\t\t\t</div>
\t\t\t<div class=\"form-group mt-2 col-12\">

\t\t\t\t{{ form_widget(form.password
\t\t\t\t) }}
\t\t\t</div>

\t\t\t
\t\t\t<div class=\"form-group mt-2 col-12\">

\t\t\t\t{{ form_widget(form.nom
\t\t\t\t) }}
\t\t\t</div>

\t\t\t<div class=\"form-group mt-2 col-12\">

\t\t\t\t{{ form_widget(form.prenom ) }}
\t\t\t</div>

\t
\t\t\t<div class=\"form-group mt-2 col-12\">

\t\t\t\t{{ form_widget(form.siret)}}
\t\t\t</div>

\t\t\t<div class=\"form-group mt-2 col-12\">

\t\t\t\t{{ form_widget(form.adresse)}}
\t\t\t</div>

\t\t\t
\t\t\t<div class=\"form-group mt-2 col-12\">

\t\t\t\t{{ form_widget(form.session)}}
\t\t\t</div>

\t\t\t<div class=\"form-group mt-2 col-12\">

\t\t\t\t{{ form_widget(form.telephone)}}
\t\t\t</div>



\t\t\t<div class=\"form-group mt-2 col-12\">

\t\t\t\t{{ form_widget(form.diplome)}}
\t\t\t</div>

\t\t\t<div class=\"form-group mt-2 col-12\">
\t\t\t\t{{ form_widget(form.dateNaissance)}}

\t\t\t</div>

\t\t\t{{ form_rest(form) }}

\t\t\t{{ form_end(form) }}
\t\t</div>
\t</div>

{% endblock %}
", "lan/inscriptionFormateurs.html.twig", "/home/dwwm/testSymfo/lan/templates/lan/inscriptionFormateurs.html.twig");
    }
}
