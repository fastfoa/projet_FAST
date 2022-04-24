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

/* lan/documentOff.html.twig */
class __TwigTemplate_29a3b666d1f1f60800348a8cff25feaff570795bba34e155eeaee7775b6edbfc extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/documentOff.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/documentOff.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lan/documentOff.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Documents officiels
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div class=\"container-fluid\">
\t\t<div class=\"row  text-center  bg-bar\">
\t\t\t<h1>Documents officiels</h1>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12  bg-workSpace\">
\t\t\t\t<a class=\"nav-link\" href=\"https://www.service-public.fr/particuliers/vosdroits/R1319\">
\t\t\t\t\t<h2>vos droit</h2>
\t\t\t\t</a>
\t\t\t\t<a class=\"nav-link\" href=\"https://www.formulaires.service-public.fr/gf/cerfa_10103.do\">
\t\t\t\t\t<h2>cerfa</h2>
\t\t\t\t</a>
\t\t\t\t<a class=\"nav-link\" href=\"https://www.demarches.interieur.gouv.fr/professionnels/contrat-apprentissage\">
\t\t\t\t\t<h2>contart d'apprentissage</h2>
\t\t\t\t</a>
\t\t\t\t<a class=\"nav-link\" href=\"https://travail-emploi.gouv.fr/formation-professionnelle/formation-en-alternance-10751/apprentissage/\">
\t\t\t\t\t<h2>formation en alternance</h2>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "lan/documentOff.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 8,  79 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Documents officiels
{% endblock %}


{% block body %}
\t<div class=\"container-fluid\">
\t\t<div class=\"row  text-center  bg-bar\">
\t\t\t<h1>Documents officiels</h1>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12  bg-workSpace\">
\t\t\t\t<a class=\"nav-link\" href=\"https://www.service-public.fr/particuliers/vosdroits/R1319\">
\t\t\t\t\t<h2>vos droit</h2>
\t\t\t\t</a>
\t\t\t\t<a class=\"nav-link\" href=\"https://www.formulaires.service-public.fr/gf/cerfa_10103.do\">
\t\t\t\t\t<h2>cerfa</h2>
\t\t\t\t</a>
\t\t\t\t<a class=\"nav-link\" href=\"https://www.demarches.interieur.gouv.fr/professionnels/contrat-apprentissage\">
\t\t\t\t\t<h2>contart d'apprentissage</h2>
\t\t\t\t</a>
\t\t\t\t<a class=\"nav-link\" href=\"https://travail-emploi.gouv.fr/formation-professionnelle/formation-en-alternance-10751/apprentissage/\">
\t\t\t\t\t<h2>formation en alternance</h2>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "lan/documentOff.html.twig", "C:\\wamp64a\\projet_FAST\\templates\\lan\\documentOff.html.twig");
    }
}
