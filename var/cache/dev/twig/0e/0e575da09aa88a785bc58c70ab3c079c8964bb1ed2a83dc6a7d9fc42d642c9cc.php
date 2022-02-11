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

/* lan/inscriptionEleve.html.twig */
class __TwigTemplate_a4c71551f05235d8910d56ba1bec6823d6cf84b00e482de42ab9ac5b42e86bef extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/inscriptionEleve.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/inscriptionEleve.html.twig"));

        $this->parent = $this->loadTemplate("lan/base.html.twig", "lan/inscriptionEleve.html.twig", 1);
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
\t
\t\t.contForm {
\t\t\tbackground-color: #018FA5;
\t\t}

\t\t.colForm {
\t\t\tbackground-color: gray;
\t\t}

\t\t.champs {
\t\t\theight: 36px;
\t\t\tmargin-bottom: 3px;
\t\t\tbox-shadow: 10px 5px 5px gray;
\t\t}
\t\t.dat {
\t\t\tmargin-right: 10px;
\t\t\tpadding-right: 10%;
\t\t}
\t\t.vil {
\t\t\tmargin-right: 10px;
\t\t\tpadding-right: 10%;
\t\t}
\t\t.add {
\t\t\tmargin-right: 10px;
\t\t\tpadding-right: 10%;
\t\t}
\t\t.ema {
\t\t\tmargin-right: 10px;
\t\t\tpadding-right: 10%;
\t\t}
\t\t.no {
\t\t\tmargin-right: 10px;
\t\t\tpadding-right: 10%;
\t\t}
\t\t.work-content {
\t\t\twidth: 70%;
\t\t\theight: auto;
\t\t\tbackground-color: #018FA5;
\t\t}

\t\t.form {
\t\t\tborder-radius: 3px;
\t\t\tmargin: auto;
\t\t\ttext-align: center;
\t\t\tpadding: 2%;
\t\t\tbox-sizing: border-box;
\t\t}

\t\t

\t\th2 {
\t\t\tcolor: white;
\t\t\tfont-family: Arial, Helvetica, sans-serif;
\t\t}

\t\tinput[type=text],
\t\tinput[type=password] {

\t\t\tmargin: 8px 0;
\t\t\tborder: 1px solid #ccc;
\t\t\tborder-radius: 4px;

\t\t}

\t\tlabel {
\t\t\tmargin: auto;
\t\t\tcolor: white;
\t\t\tfont-family: Arial, Helvetica, sans-serif;
\t\t}

\t\t.boutonForm {
\t\t\tbackground-color: #79a342;
\t\t\tcolor: white;
\t\t\tborder-radius: 3px;
\t\t\tborder: none;
\t\t\tpadding: 12px 24px;
\t\t\ttext-align: center;
\t\t\ttext-decoration: none;
\t\t\tfont-size: 15px;
\t\t\tcursor: pointer;
\t\t\ttransition: 0.3s;
            margin-left: 10%;
\t\t\tmargin-left: 40%;

\t\t}

\t\t.boutonForm:hover {
\t\t\tbackground-color: #f37262;
\t\t}

\t\ta {
\t\t\ttext-decoration: none;
\t\t\tfont-family: Arial, Helvetica, sans-serif;
\t\t\tcolor: white;
\t\t}

\t\ta:hover {
\t\t\ttext-decoration: underline;
\t\t\tcolor: white;
\t\t\tbackground-color: #11284B;
\t\t\topacity: 40%;
\t\t}
\t\t.text
\t\t{
\t\t\tmargin-left: 35%;

\t\t}
\t</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 115
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 116
        echo "
\t
<div class=\"container\">
     <div class=\"row text-center\">
        <h2 class=\"text\">Inscription</h2>
    </div>
    <div class=\"row\">
        <div class=\"col-6 my-auto \">
            <label for=\"Prenom\" class=\"dat\"><i class=\"fa fa-user\"></i> </label>
            <input type=\"text\" id=\"fname\" name=\"firstname\" placeholder=\"Prenom\"><br>

              <label for=\"Nom\" class=\"no\"><i class=\"fa fa-user\"></i> </label>
            <input type=\"text\" id=\"fname\" name=\"firstname\" placeholder=\"Nom\"><br>

            <label for=\"email\" class=\"ema\"><i class=\"fa fa-envelope\"></i> </label>
            <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"Email\"><br>

            <label for=\"adr\" class=\"add\"><i class=\"fa fa-address-card-o\"></i> </label>
            <input type=\"text\" id=\"adr\" name=\"address\" placeholder=\"Address\"><br>

            <label for=\"Ville\" class=\"vil\"><i class=\"fa fa-institution\"></i> </label>
            <input type=\"text\" id=\"Ville\" name=\"Ville\" placeholder=\"Ville\"><br>

              
        </div>
        <div class=\"col-6 my-auto\">
       <label for=\"Prenom\" class=\"dat\"><i class=\"fa fa-user\"></i> </label>
            <input type=\"text\" id=\"fname\" name=\"firstname\" placeholder=\"Classe\"><br>

              <label for=\"Nom\" class=\"no\"><i class=\"fa fa-user\"></i> </label>
            <input type=\"text\" id=\"fname\" name=\"firstname\" placeholder=\"Année\"><br>

            <label for=\"email\" class=\"ema\"><i class=\"fa fa-envelope\"></i> </label>
            <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"Téléphone\"><br>

            <label for=\"adr\" class=\"add\"><i class=\"fa fa-address-card-o\"></i> </label>
            <input type=\"text\" id=\"adr\" name=\"address\" placeholder=\"Date de Naissance\"><br>

            <label for=\"Ville\" class=\"vil\"><i class=\"fa fa-institution\"></i> </label>
            <input type=\"text\" id=\"Ville\" name=\"Ville\" placeholder=\"Ville\"><br>
        </div>
    </div>
</div>

\t\t\t\t<br>
\t\t\t\t<button class='boutonForm' type='submit'>Se connecter</button>
\t\t\t\t<br>
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "lan/inscriptionEleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 116,  188 => 115,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'lan/base.html.twig' %}

{% block myStylesheets %}
\t<style>
\t
\t\t.contForm {
\t\t\tbackground-color: #018FA5;
\t\t}

\t\t.colForm {
\t\t\tbackground-color: gray;
\t\t}

\t\t.champs {
\t\t\theight: 36px;
\t\t\tmargin-bottom: 3px;
\t\t\tbox-shadow: 10px 5px 5px gray;
\t\t}
\t\t.dat {
\t\t\tmargin-right: 10px;
\t\t\tpadding-right: 10%;
\t\t}
\t\t.vil {
\t\t\tmargin-right: 10px;
\t\t\tpadding-right: 10%;
\t\t}
\t\t.add {
\t\t\tmargin-right: 10px;
\t\t\tpadding-right: 10%;
\t\t}
\t\t.ema {
\t\t\tmargin-right: 10px;
\t\t\tpadding-right: 10%;
\t\t}
\t\t.no {
\t\t\tmargin-right: 10px;
\t\t\tpadding-right: 10%;
\t\t}
\t\t.work-content {
\t\t\twidth: 70%;
\t\t\theight: auto;
\t\t\tbackground-color: #018FA5;
\t\t}

\t\t.form {
\t\t\tborder-radius: 3px;
\t\t\tmargin: auto;
\t\t\ttext-align: center;
\t\t\tpadding: 2%;
\t\t\tbox-sizing: border-box;
\t\t}

\t\t

\t\th2 {
\t\t\tcolor: white;
\t\t\tfont-family: Arial, Helvetica, sans-serif;
\t\t}

\t\tinput[type=text],
\t\tinput[type=password] {

\t\t\tmargin: 8px 0;
\t\t\tborder: 1px solid #ccc;
\t\t\tborder-radius: 4px;

\t\t}

\t\tlabel {
\t\t\tmargin: auto;
\t\t\tcolor: white;
\t\t\tfont-family: Arial, Helvetica, sans-serif;
\t\t}

\t\t.boutonForm {
\t\t\tbackground-color: #79a342;
\t\t\tcolor: white;
\t\t\tborder-radius: 3px;
\t\t\tborder: none;
\t\t\tpadding: 12px 24px;
\t\t\ttext-align: center;
\t\t\ttext-decoration: none;
\t\t\tfont-size: 15px;
\t\t\tcursor: pointer;
\t\t\ttransition: 0.3s;
            margin-left: 10%;
\t\t\tmargin-left: 40%;

\t\t}

\t\t.boutonForm:hover {
\t\t\tbackground-color: #f37262;
\t\t}

\t\ta {
\t\t\ttext-decoration: none;
\t\t\tfont-family: Arial, Helvetica, sans-serif;
\t\t\tcolor: white;
\t\t}

\t\ta:hover {
\t\t\ttext-decoration: underline;
\t\t\tcolor: white;
\t\t\tbackground-color: #11284B;
\t\t\topacity: 40%;
\t\t}
\t\t.text
\t\t{
\t\t\tmargin-left: 35%;

\t\t}
\t</style>
{% endblock %}

{% block body %}

\t
<div class=\"container\">
     <div class=\"row text-center\">
        <h2 class=\"text\">Inscription</h2>
    </div>
    <div class=\"row\">
        <div class=\"col-6 my-auto \">
            <label for=\"Prenom\" class=\"dat\"><i class=\"fa fa-user\"></i> </label>
            <input type=\"text\" id=\"fname\" name=\"firstname\" placeholder=\"Prenom\"><br>

              <label for=\"Nom\" class=\"no\"><i class=\"fa fa-user\"></i> </label>
            <input type=\"text\" id=\"fname\" name=\"firstname\" placeholder=\"Nom\"><br>

            <label for=\"email\" class=\"ema\"><i class=\"fa fa-envelope\"></i> </label>
            <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"Email\"><br>

            <label for=\"adr\" class=\"add\"><i class=\"fa fa-address-card-o\"></i> </label>
            <input type=\"text\" id=\"adr\" name=\"address\" placeholder=\"Address\"><br>

            <label for=\"Ville\" class=\"vil\"><i class=\"fa fa-institution\"></i> </label>
            <input type=\"text\" id=\"Ville\" name=\"Ville\" placeholder=\"Ville\"><br>

              
        </div>
        <div class=\"col-6 my-auto\">
       <label for=\"Prenom\" class=\"dat\"><i class=\"fa fa-user\"></i> </label>
            <input type=\"text\" id=\"fname\" name=\"firstname\" placeholder=\"Classe\"><br>

              <label for=\"Nom\" class=\"no\"><i class=\"fa fa-user\"></i> </label>
            <input type=\"text\" id=\"fname\" name=\"firstname\" placeholder=\"Année\"><br>

            <label for=\"email\" class=\"ema\"><i class=\"fa fa-envelope\"></i> </label>
            <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"Téléphone\"><br>

            <label for=\"adr\" class=\"add\"><i class=\"fa fa-address-card-o\"></i> </label>
            <input type=\"text\" id=\"adr\" name=\"address\" placeholder=\"Date de Naissance\"><br>

            <label for=\"Ville\" class=\"vil\"><i class=\"fa fa-institution\"></i> </label>
            <input type=\"text\" id=\"Ville\" name=\"Ville\" placeholder=\"Ville\"><br>
        </div>
    </div>
</div>

\t\t\t\t<br>
\t\t\t\t<button class='boutonForm' type='submit'>Se connecter</button>
\t\t\t\t<br>
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}
", "lan/inscriptionEleve.html.twig", "/home/dwwm/testSymfo/lan/templates/lan/inscriptionEleve.html.twig");
    }
}
