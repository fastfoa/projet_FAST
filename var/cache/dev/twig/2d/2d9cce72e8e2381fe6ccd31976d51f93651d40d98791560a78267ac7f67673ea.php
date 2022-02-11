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

/* lan/Files.html.twig */
class __TwigTemplate_9520e155310037147a63fdb3d557719e2274b37848eff4353a174ae4a08384e4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/Files.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/Files.html.twig"));

        $this->parent = $this->loadTemplate("lan/base.html.twig", "lan/Files.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Documents
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_myStylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "myStylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "myStylesheets"));

        // line 5
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Documents.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
\t<section id=\"main\">
\t\t<div class=\"container-fluid contenue\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-2 dashMenu sidebar d-flex flex-column list-group list-group-flush viewport-max \">
\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action text-center bleu\">
\t\t\t\t\t\t<img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/olivier.jpeg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid rounded-circle mr-2\">
\t\t\t\t\t\tOlivier Carlier</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action menu-items active\">
\t\t\t\t\t\t<i class=\"fas fa-columns mr-2 fa-lg\"></i>Dashboard</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action menu-items bleu\">
\t\t\t\t\t\t<i class=\"fas fa-thin fa-file mr-2 fa-lg\"></i>Documents</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action menu-items bleu\">
\t\t\t\t\t\t<i class=\"fas fa-solid fa-bars-progress mr-2 fa-lg\"></i>Suivi</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action menu-items bleu\">
\t\t\t\t\t\t<i class=\"fas fa-info mr-2 fa-lg\"></i>Infos Entreprise</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action menu-items bleu\">
\t\t\t\t\t\t<i class=\"fas fa-info mr-2 fa-lg\"></i>Infos Organisme de Formation</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action menu-items bleu\">
\t\t\t\t\t\t<i class=\"fas fa-user-cog mr-2 fa-lg\"></i>Mes information</a>
\t\t\t\t</div>
\t\t\t\t<!-- MAIN CARDS-->
\t\t\t\t<div class=\"col-lg-10\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<h2 class=\"text-info\">
\t\t\t\t\t\t\t\t<small class=\"text-muted\">Documents</small>
\t\t\t\t\t\t\t</h2>
              <br>
\t\t\t\t\t<table class=\"demo\">

\t<thead>
\t<tr>
\t\t<th>Date</th>
\t\t<th>Nom du document\t</th>
\t\t<th>classe</th>
\t\t<th>Format document</th>
\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t\t<td>01/09/2021</td>
\t\t<td>Contrat d'apprentissage</td>
\t\t<td>Alternance 1er Année</td>
\t\t<td><button class=\"btn btn-success\"><i class=\"fas fa-file-pdf\" style=\"font-size:20px;color:red;\"></i> Telechargement</button></td>
\t</tr>
\t<tr>
\t\t<td>07/09/2021</td>
\t\t<td>document divers</td>
\t\t<td>Alternance 1er Année</td>
\t\t<td><button class=\"btn btn-success\"><i class=\"fas fa-file-word\" style=\"font-size:20px;color:blue;\"></i> Telechargement</button></td>
\t</tr>
\t<tr>
\t\t<td>&nbsp;</td>
\t\t<td>&nbsp;</td>
\t\t<td>&nbsp;</td>
\t\t<td></td>
\t</tr>
\t<tr>
\t\t<td>&nbsp;</td>
\t\t<td>&nbsp;</td>
\t\t<td>&nbsp;</td>
\t\t<td>&nbsp;</td>
\t</tr>
\t<tr>
\t\t<td>&nbsp;</td>
\t\t<td>&nbsp;</td>
\t\t<td>&nbsp;</td>
\t\t<td>&nbsp;</td>
\t</tr>
\t<tr>
\t\t<td>&nbsp;</td>
\t\t<td>&nbsp;</td>
\t\t<td>&nbsp;</td>
\t\t<td></td>
\t</tr>
\t<tbody>
</table><br>\t<button class=\"btn btn-success\">+ Ajouter un document</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "lan/Files.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 15,  114 => 9,  104 => 8,  90 => 5,  80 => 4,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'lan/base.html.twig' %}
{% block title %}Documents
{% endblock %}
{% block myStylesheets %}
\t<link href=\"{{ asset('css/Documents.css') }}\" type=\"text/css\" rel=\"stylesheet\"/>
<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
{% endblock %}
{% block body %}

\t<section id=\"main\">
\t\t<div class=\"container-fluid contenue\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-2 dashMenu sidebar d-flex flex-column list-group list-group-flush viewport-max \">
\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action text-center bleu\">
\t\t\t\t\t\t<img src=\"{{ asset('images/olivier.jpeg') }}\" alt=\"\" class=\"img-fluid rounded-circle mr-2\">
\t\t\t\t\t\tOlivier Carlier</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action menu-items active\">
\t\t\t\t\t\t<i class=\"fas fa-columns mr-2 fa-lg\"></i>Dashboard</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action menu-items bleu\">
\t\t\t\t\t\t<i class=\"fas fa-thin fa-file mr-2 fa-lg\"></i>Documents</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action menu-items bleu\">
\t\t\t\t\t\t<i class=\"fas fa-solid fa-bars-progress mr-2 fa-lg\"></i>Suivi</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action menu-items bleu\">
\t\t\t\t\t\t<i class=\"fas fa-info mr-2 fa-lg\"></i>Infos Entreprise</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action menu-items bleu\">
\t\t\t\t\t\t<i class=\"fas fa-info mr-2 fa-lg\"></i>Infos Organisme de Formation</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action menu-items bleu\">
\t\t\t\t\t\t<i class=\"fas fa-user-cog mr-2 fa-lg\"></i>Mes information</a>
\t\t\t\t</div>
\t\t\t\t<!-- MAIN CARDS-->
\t\t\t\t<div class=\"col-lg-10\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<h2 class=\"text-info\">
\t\t\t\t\t\t\t\t<small class=\"text-muted\">Documents</small>
\t\t\t\t\t\t\t</h2>
              <br>
\t\t\t\t\t<table class=\"demo\">

\t<thead>
\t<tr>
\t\t<th>Date</th>
\t\t<th>Nom du document\t</th>
\t\t<th>classe</th>
\t\t<th>Format document</th>
\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t\t<td>01/09/2021</td>
\t\t<td>Contrat d'apprentissage</td>
\t\t<td>Alternance 1er Année</td>
\t\t<td><button class=\"btn btn-success\"><i class=\"fas fa-file-pdf\" style=\"font-size:20px;color:red;\"></i> Telechargement</button></td>
\t</tr>
\t<tr>
\t\t<td>07/09/2021</td>
\t\t<td>document divers</td>
\t\t<td>Alternance 1er Année</td>
\t\t<td><button class=\"btn btn-success\"><i class=\"fas fa-file-word\" style=\"font-size:20px;color:blue;\"></i> Telechargement</button></td>
\t</tr>
\t<tr>
\t\t<td>&nbsp;</td>
\t\t<td>&nbsp;</td>
\t\t<td>&nbsp;</td>
\t\t<td></td>
\t</tr>
\t<tr>
\t\t<td>&nbsp;</td>
\t\t<td>&nbsp;</td>
\t\t<td>&nbsp;</td>
\t\t<td>&nbsp;</td>
\t</tr>
\t<tr>
\t\t<td>&nbsp;</td>
\t\t<td>&nbsp;</td>
\t\t<td>&nbsp;</td>
\t\t<td>&nbsp;</td>
\t</tr>
\t<tr>
\t\t<td>&nbsp;</td>
\t\t<td>&nbsp;</td>
\t\t<td>&nbsp;</td>
\t\t<td></td>
\t</tr>
\t<tbody>
</table><br>\t<button class=\"btn btn-success\">+ Ajouter un document</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t{% endblock %}
", "lan/Files.html.twig", "/home/dwwm/testSymfo/lan/templates/lan/Files.html.twig");
    }
}
