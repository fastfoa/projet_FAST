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

/* lan/formulaireEleve.html.twig */
class __TwigTemplate_e75b3041ab69ae5bd381e6b8f4919b9991ef8a8dfb54e9dd889eb279048a1d78 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/formulaireEleve.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/formulaireEleve.html.twig"));

        $this->parent = $this->loadTemplate("lan/base.html.twig", "lan/formulaireEleve.html.twig", 1);
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
        echo "    <link rel=\"stylesheet\" href='";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/inscriptionForm.css"), "html", null, true);
        echo "'>  
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
        echo "<div class=\"container\">
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
        return "lan/formulaireEleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'lan/base.html.twig' %}

{% block myStylesheets %}
    <link rel=\"stylesheet\" href='{{ asset(\"css/inscriptionForm.css\")}}'>  
{% endblock %}

{% block body %}
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

{% endblock %}", "lan/formulaireEleve.html.twig", "/home/dwwm/testSymfo/lan/templates/lan/formulaireEleve.html.twig");
    }
}
