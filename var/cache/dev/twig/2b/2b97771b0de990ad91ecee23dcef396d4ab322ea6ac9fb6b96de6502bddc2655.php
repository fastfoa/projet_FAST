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

/* rgpd/rgpdForm.html.twig */
class __TwigTemplate_5f2c3c9cb44b8dd1a40da52af532e7d3812cc722ed810b8e252e61f7c8362ab4 extends Template
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
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rgpd/rgpdForm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rgpd/rgpdForm.html.twig"));

        $this->parent = $this->loadTemplate("base1.html.twig", "rgpd/rgpdForm.html.twig", 1);
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
        echo "\t<style>
\t\t.jumbo {
\t\t\tbackground-color: C6C5B9;
\t\t\talign-items: middle;
\t\t\tanimation: Entrance 1s linear 0s 1 normal forwards;
\t\t\theight: 50%;
\t\t\topacity: 0, 5;
\t\t\t/* animation: Out 1s linear 1s 1 normal forwards; */

\t\t}

\t\t.jumbo h1 {
\t\t\tcolor: green;
\t\t}

\t\t@keyframes Entrance {
\t\t\t0% {
\t\t\t\topacity: 0;
\t\t\t\ttransform: translateX(-50px);
\t\t\t}

\t\t\t100% {
\t\t\t\topacity: 1;
\t\t\t\ttransform: translateX(0);
\t\t\t}
\t\t}
\t\t@keyframes Out {
\t\t\t0% {
\t\t\t\topacity: 1;
\t\t\t\ttransform: translateX(0);
\t\t\t}

\t\t\t100% {
\t\t\t\topacity: 0;
\t\t\t\ttransform: translateX(-250px);
\t\t\t}
\t\t}
\t</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 45
        echo "\t<div class=\"jumbotron jumbo mx-auto txt-normal\">
\t\t<h1 class=\"display-4\">Règlement général sur la protection des données (RGPD)</h1>
\t\t";
        // line 48
        echo "\t\t<hr class=\"my-4\">

\t\t\t<strong>il incombe aux propriétaires et aux opérateurs de sites web</strong>
\t\t\tde s'assurer que les données personnelles sont collectées et traitées légalement.</p>
\t\t<p>Le RGPD définit des règles spécifiques pour l'utilisation des cookies.</p>
\t\t<p>C'est pourquoi, en vertu du RGPD, le
\t\t\t<strong>consentement aux cookies</strong>
\t\t\test la base juridique la plus fréquemment utilisée pour permettre aux sites web de traiter des données personnelles et d'utiliser des cookies.</p>
\t\t<p>Le RGPD exige qu'un site web
\t\t\t<strong>ne recueille les données personnelles des utilisateurs qu'après que ceux-ci aient donné leur consentement explicite aux fins spécifiques de leur utilisation.</strong>
\t\t</p>
        ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["myForm"]) || array_key_exists("myForm", $context) ? $context["myForm"] : (function () { throw new RuntimeError('Variable "myForm" does not exist.', 59, $this->source); })()), 'form_start');
        echo "
\t\t<p class=\"lead\">
\t\t\t<hr class=\"my-4\">
\t\t\t<a class=\"btn btn-primary btn-lg float-right\" href=\"https://www.foreach-academy.fr/mentions-legales\" role=\"button\">En savoir +</a>
\t\t\t<a class=\"btn btn-danger btn-lg\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" role=\"button\">Refuser</a>
\t\t</p>
        ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["myForm"]) || array_key_exists("myForm", $context) ? $context["myForm"] : (function () { throw new RuntimeError('Variable "myForm" does not exist.', 65, $this->source); })()), 'form_end');
        echo "
\t</div>  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "rgpd/rgpdForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 65,  151 => 63,  144 => 59,  131 => 48,  127 => 45,  117 => 44,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base1.html.twig' %}

{% block myStylesheets %}
\t<style>
\t\t.jumbo {
\t\t\tbackground-color: C6C5B9;
\t\t\talign-items: middle;
\t\t\tanimation: Entrance 1s linear 0s 1 normal forwards;
\t\t\theight: 50%;
\t\t\topacity: 0, 5;
\t\t\t/* animation: Out 1s linear 1s 1 normal forwards; */

\t\t}

\t\t.jumbo h1 {
\t\t\tcolor: green;
\t\t}

\t\t@keyframes Entrance {
\t\t\t0% {
\t\t\t\topacity: 0;
\t\t\t\ttransform: translateX(-50px);
\t\t\t}

\t\t\t100% {
\t\t\t\topacity: 1;
\t\t\t\ttransform: translateX(0);
\t\t\t}
\t\t}
\t\t@keyframes Out {
\t\t\t0% {
\t\t\t\topacity: 1;
\t\t\t\ttransform: translateX(0);
\t\t\t}

\t\t\t100% {
\t\t\t\topacity: 0;
\t\t\t\ttransform: translateX(-250px);
\t\t\t}
\t\t}
\t</style>
{% endblock myStylesheets %}

{% block body %}
\t<div class=\"jumbotron jumbo mx-auto txt-normal\">
\t\t<h1 class=\"display-4\">Règlement général sur la protection des données (RGPD)</h1>
\t\t{# <p class=\"lead\">Règlement général sur la protection des données (RGPD)</p> #}
\t\t<hr class=\"my-4\">

\t\t\t<strong>il incombe aux propriétaires et aux opérateurs de sites web</strong>
\t\t\tde s'assurer que les données personnelles sont collectées et traitées légalement.</p>
\t\t<p>Le RGPD définit des règles spécifiques pour l'utilisation des cookies.</p>
\t\t<p>C'est pourquoi, en vertu du RGPD, le
\t\t\t<strong>consentement aux cookies</strong>
\t\t\test la base juridique la plus fréquemment utilisée pour permettre aux sites web de traiter des données personnelles et d'utiliser des cookies.</p>
\t\t<p>Le RGPD exige qu'un site web
\t\t\t<strong>ne recueille les données personnelles des utilisateurs qu'après que ceux-ci aient donné leur consentement explicite aux fins spécifiques de leur utilisation.</strong>
\t\t</p>
        {{ form_start(myForm) }}
\t\t<p class=\"lead\">
\t\t\t<hr class=\"my-4\">
\t\t\t<a class=\"btn btn-primary btn-lg float-right\" href=\"https://www.foreach-academy.fr/mentions-legales\" role=\"button\">En savoir +</a>
\t\t\t<a class=\"btn btn-danger btn-lg\" href=\"{{ path('app_logout')}}\" role=\"button\">Refuser</a>
\t\t</p>
        {{ form_end(myForm) }}
\t</div>  
{% endblock body %}
", "rgpd/rgpdForm.html.twig", "C:\\wamp64a\\projet_FAST\\templates\\rgpd\\rgpdForm.html.twig");
    }
}
