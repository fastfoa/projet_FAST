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

/* lan/suiviCompetences.html.twig */
class __TwigTemplate_fcdf0d4d77adcdd62bbb525adc439a52bfa264a51bd676a2ed72d2ed4b91795f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/suiviCompetences.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/suiviCompetences.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lan/suiviCompetences.html.twig", 1);
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
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/suiviCompetences.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
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
        echo "    <section id=\"main\">
        <div class=\"container-fluid contenue\">
            <div class=\"row\">
                <div class=\"col-lg-2 dashMenu sidebar d-flex flex-column list-group list-group-flush viewport-max \">
                    <a href=\"#\" class=\"list-group-item list-group-item-action text-center bleu\">
                        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/olivier.jpeg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid rounded-circle mr-2\"> Olivier Carlier</a>
                    <a href=\"#\" class=\"list-group-item list-group-item-action menu-items bleu\">
                        <i class=\"fas fa-columns mr-2 fa-lg\"></i>Dashboard</a>
                    <a href=\"#\" class=\"list-group-item list-group-item-action menu-items bleu\">
                        <i class=\"fas fa-thin fa-file mr-2 fa-lg\"></i>Documents</a>
                    <a href=\"#\" class=\"list-group-item list-group-item-action menu-items active\">
                        <i class=\"fas fa-solid fa-bars-progress mr-2 fa-lg\"></i>Suivi</a>
                    <a href=\"#\" class=\"list-group-item list-group-item-action menu-items bleu\">
                        <i class=\"fas fa-info mr-2 fa-lg\"></i>Infos Entreprise</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action menu-items bleu\">
\t\t\t\t\t\t<i class=\"fas fa-info mr-2 fa-lg\"></i>Infos Organisme de Formation</a>
                    <a href=\"#\" class=\"list-group-item list-group-item-action menu-items bleu\">
                        <i class=\"fas fa-user-cog mr-2 fa-lg\"></i>Mes information</a>
                </div>

                <div class=\"col-8 tableau\">
                    <table class=\"demo\">
                        <thead>
                            <th class=\"savoirs\">Savoir-Etre</th>
                            <th class=\"validation\">Validation</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Savoir-Etre n°1</td><td>✅</td>
                            </tr>
                            <tr>
                                <td>Savoir-Etre n°2</td><td>❌</td>
                            </tr>
                            <tr>
                                <td>Savoir-Etre n°3</td><td>✅</td>
                            </tr>
                            <tr>
                                <td>Savoir-Etre n°4</td><td>❌</td>
                            </tr>
                            <tr>
                                <td>Savoir-Etre n°5</td><td>✅</td>
                            </tr>
                        <tbody>
                    </table>
                    <br>
                    <table class=\"demo\">
                        <thead>
                            <th class=\"savoirs\">Savoir-Faire en entreprise</th>
                            <th class=\"validation\">Validation</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Savoir-Faire n°1</td><td>✅</td>
                            </tr>
                            <tr>
                                <td>Savoir-Faire n°2</td><td>❌</td>
                            </tr>
                            <tr>
                                <td>Savoir-Faire n°3</td><td>✅</td>
                            </tr>
                            <tr>
                                <td>Savoir-Faire n°4</td><td>❌</td>
                            </tr>
                            <tr>
                                <td>Savoir-Faire n°5</td><td>✅</td>
                            </tr>
                        <tbody>
                    </table>
                    <br>
                    <table class=\"demo\">
                        <thead>
                            <th>Date</th>
                            <th>Module</th>
                            <th>Objectif</th>
                            <th>Note</th>
                            <th>Délivré par</th>
                        </thead>
                        <tbody>
                            <td>01/01</td>
                            <td>CSS</td>
                            <td>Mettre une div en forme</td>
                            <td>5/5</td>
                            <td>Toto</td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "lan/suiviCompetences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 13,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block myStylesheets %}
            <link href=\"{{ asset('css/suiviCompetences.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}

{% block body %}
    <section id=\"main\">
        <div class=\"container-fluid contenue\">
            <div class=\"row\">
                <div class=\"col-lg-2 dashMenu sidebar d-flex flex-column list-group list-group-flush viewport-max \">
                    <a href=\"#\" class=\"list-group-item list-group-item-action text-center bleu\">
                        <img src=\"{{ asset('images/olivier.jpeg') }}\" alt=\"\" class=\"img-fluid rounded-circle mr-2\"> Olivier Carlier</a>
                    <a href=\"#\" class=\"list-group-item list-group-item-action menu-items bleu\">
                        <i class=\"fas fa-columns mr-2 fa-lg\"></i>Dashboard</a>
                    <a href=\"#\" class=\"list-group-item list-group-item-action menu-items bleu\">
                        <i class=\"fas fa-thin fa-file mr-2 fa-lg\"></i>Documents</a>
                    <a href=\"#\" class=\"list-group-item list-group-item-action menu-items active\">
                        <i class=\"fas fa-solid fa-bars-progress mr-2 fa-lg\"></i>Suivi</a>
                    <a href=\"#\" class=\"list-group-item list-group-item-action menu-items bleu\">
                        <i class=\"fas fa-info mr-2 fa-lg\"></i>Infos Entreprise</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action menu-items bleu\">
\t\t\t\t\t\t<i class=\"fas fa-info mr-2 fa-lg\"></i>Infos Organisme de Formation</a>
                    <a href=\"#\" class=\"list-group-item list-group-item-action menu-items bleu\">
                        <i class=\"fas fa-user-cog mr-2 fa-lg\"></i>Mes information</a>
                </div>

                <div class=\"col-8 tableau\">
                    <table class=\"demo\">
                        <thead>
                            <th class=\"savoirs\">Savoir-Etre</th>
                            <th class=\"validation\">Validation</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Savoir-Etre n°1</td><td>✅</td>
                            </tr>
                            <tr>
                                <td>Savoir-Etre n°2</td><td>❌</td>
                            </tr>
                            <tr>
                                <td>Savoir-Etre n°3</td><td>✅</td>
                            </tr>
                            <tr>
                                <td>Savoir-Etre n°4</td><td>❌</td>
                            </tr>
                            <tr>
                                <td>Savoir-Etre n°5</td><td>✅</td>
                            </tr>
                        <tbody>
                    </table>
                    <br>
                    <table class=\"demo\">
                        <thead>
                            <th class=\"savoirs\">Savoir-Faire en entreprise</th>
                            <th class=\"validation\">Validation</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Savoir-Faire n°1</td><td>✅</td>
                            </tr>
                            <tr>
                                <td>Savoir-Faire n°2</td><td>❌</td>
                            </tr>
                            <tr>
                                <td>Savoir-Faire n°3</td><td>✅</td>
                            </tr>
                            <tr>
                                <td>Savoir-Faire n°4</td><td>❌</td>
                            </tr>
                            <tr>
                                <td>Savoir-Faire n°5</td><td>✅</td>
                            </tr>
                        <tbody>
                    </table>
                    <br>
                    <table class=\"demo\">
                        <thead>
                            <th>Date</th>
                            <th>Module</th>
                            <th>Objectif</th>
                            <th>Note</th>
                            <th>Délivré par</th>
                        </thead>
                        <tbody>
                            <td>01/01</td>
                            <td>CSS</td>
                            <td>Mettre une div en forme</td>
                            <td>5/5</td>
                            <td>Toto</td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "lan/suiviCompetences.html.twig", "C:\\wamp64a\\projet_FAST\\templates\\lan\\suiviCompetences.html.twig");
    }
}
