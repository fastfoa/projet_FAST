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

/* lan/followCompany.html.twig */
class __TwigTemplate_67354e490b672f8c927296d2a8a6a5881dd81a52e9d314a83b486fe7667b8818 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/followCompany.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/followCompany.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lan/followCompany.html.twig", 1);
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

        echo "Suivi alternane";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        echo "       <link rel=\"stylesheet\" href='";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/follow.css"), "html", null, true);
        echo "'>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "   <div class=\"container\">
        <!-- bandeau -->
        <header class=\"col-12 mx-auto bandeau\">
            <div class=\"container\">
                <div class=\"row align-items-start\">
                  <div class=\"col-4 mx-auto \">
                    <h6 class=\"text-center\">Apprenti : DUPOND Martin</h6>
                    <h6 class=\"text-center\">Tuteur : DURAND Sophie</h6>
                  </div>
                  <div class=\"col-4 mx-auto my-auto \">
                    <h2 class=\"text-center\">Suivi alternance</h2>
                    <br>
                    <h4 class=\"text-center\">En entreprise</h4>
                  </div>
                  <div class=\"col-4 mx-auto \">
                    <h6 class=\"text-center\">Période Du 20/09/2021</h6>
                    <h6 class=\"text-center\">Au 15/03/2022</h6>
                  </div>
                </div> 
            </div>
        </header>

        <main class=\"col-12 mx-auto saisie\"> 
        
            <div class=\"container\">   <input class=\"dateSaisie my-2\" type='date' placeholder='Date'>
                <div class=\"row align-items-start\">
                    <div class=\"col-6 mx-auto\" >
                     
                        <h6 class=\"text-center titreBloc\">Opérations effectuées :</h6>
                        <textarea class=\"form-control\" rows=\"4\" id=\"comment\" name=\"text\" placeholder=\"Tapez votre commentaire ici\"></textarea>
                        <br>
                        <textarea class=\"form-control\" rows=\"1\" id=\"comment\" name=\"text\" placeholder=\"Commentaire Tuteur\"></textarea>
                    </div>
                    <div class=\"col-6 mx-auto\" >
                        <h6 class=\"text-center titreBloc\">Procédés utilisés :</h6>
                        <textarea class=\"form-control\" rows=\"4\" id=\"comment\" name=\"text\" placeholder=\"Tapez votre commentaire ici\"></textarea>
                        <br>
                        <button class=\"boutonForm\">Valider</button>                        
                    </div>
                </div>
            </div>
        </main>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "lan/followCompany.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 7,  102 => 6,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Suivi alternane{% endblock %}
{% block myStylesheets %}
       <link rel=\"stylesheet\" href='{{ asset(\"css/follow.css\")}}'>
{% endblock %}
{% block body %}
   <div class=\"container\">
        <!-- bandeau -->
        <header class=\"col-12 mx-auto bandeau\">
            <div class=\"container\">
                <div class=\"row align-items-start\">
                  <div class=\"col-4 mx-auto \">
                    <h6 class=\"text-center\">Apprenti : DUPOND Martin</h6>
                    <h6 class=\"text-center\">Tuteur : DURAND Sophie</h6>
                  </div>
                  <div class=\"col-4 mx-auto my-auto \">
                    <h2 class=\"text-center\">Suivi alternance</h2>
                    <br>
                    <h4 class=\"text-center\">En entreprise</h4>
                  </div>
                  <div class=\"col-4 mx-auto \">
                    <h6 class=\"text-center\">Période Du 20/09/2021</h6>
                    <h6 class=\"text-center\">Au 15/03/2022</h6>
                  </div>
                </div> 
            </div>
        </header>

        <main class=\"col-12 mx-auto saisie\"> 
        
            <div class=\"container\">   <input class=\"dateSaisie my-2\" type='date' placeholder='Date'>
                <div class=\"row align-items-start\">
                    <div class=\"col-6 mx-auto\" >
                     
                        <h6 class=\"text-center titreBloc\">Opérations effectuées :</h6>
                        <textarea class=\"form-control\" rows=\"4\" id=\"comment\" name=\"text\" placeholder=\"Tapez votre commentaire ici\"></textarea>
                        <br>
                        <textarea class=\"form-control\" rows=\"1\" id=\"comment\" name=\"text\" placeholder=\"Commentaire Tuteur\"></textarea>
                    </div>
                    <div class=\"col-6 mx-auto\" >
                        <h6 class=\"text-center titreBloc\">Procédés utilisés :</h6>
                        <textarea class=\"form-control\" rows=\"4\" id=\"comment\" name=\"text\" placeholder=\"Tapez votre commentaire ici\"></textarea>
                        <br>
                        <button class=\"boutonForm\">Valider</button>                        
                    </div>
                </div>
            </div>
        </main>
    </div>

{% endblock %}
", "lan/followCompany.html.twig", "C:\\wamp64a\\projet_FAST\\templates\\lan\\followCompany.html.twig");
    }
}
