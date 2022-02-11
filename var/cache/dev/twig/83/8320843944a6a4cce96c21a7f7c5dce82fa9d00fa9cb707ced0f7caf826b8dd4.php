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

/* lan/followTraining.html.twig */
class __TwigTemplate_9b4b7aa3b9934185a70322d4b332b41e2c9adc362085af590c9180c6def5a335 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/followTraining.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/followTraining.html.twig"));

        $this->parent = $this->loadTemplate("lan/base.html.twig", "lan/followTraining.html.twig", 1);
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
        echo "        <link rel=\"stylesheet\" href='";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/follow.css"), "html", null, true);
        echo "'>
        <link rel=\"stylesheet\" href='";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/login.css"), "html", null, true);
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
        echo "   <div class=\"container\">
        <!-- bandeau -->
        <header class=\"col-12 mx-auto bandeau\">
            <div class=\"container\">
                <div class=\"row align-items-start my-2\">
                  <div class=\"col-4 mx-auto \">
                    <h6 class=\"text-center\">Apprenti : DUPOND Martin</h6>
                    <h6 class=\"text-center\">Formateur : DURAND Sophie</h6>
                  </div>
                  <div class=\"col-4 mx-auto my-auto \">
                    <h2 class=\"text-center\">Suivi alternance</h2>
                    <br>
                    <h4 class=\"text-center my-2\">En Formation</h4>
                  </div>
                  <div class=\"col-4 mx-auto \">
                    <h6 class=\"text-center\">Semaine Du 20/09/2021</h6>
                    <h6 class=\"text-center\">Au 15/03/2022</h6>
                  </div>
                </div> 
            </div>
        </header>
        <main class=\"col-12 mx-auto description\">
        
            <div class=\"container\">
            
                <div class=\"row align-items-start my-2\">
                        <div class=\"col-12 my-2 mx-auto\">
                          <h5 class=\"text-center\">Date de réalisation :</h5>
                          <input type='date' class=\"mx-auto my-2\" >
                        </div>
                </div>
                <div class=\"row align-items-start my-2\">
                    <div class=\"col-12 m-auto\" >
                        <h5 class=\"text-center\">Description / Objectif :</h5>
                        <textarea class=\"form-control\" rows=\"4\" id=\"comment\" name=\"text\" placeholder=\"Définisez les objectifs ici\"></textarea>
                    </div>
                </div>
                <div class=\"row align-items-start my-2\">
                    <div class=\"col-2 m-auto \" >
                        <h5 class=\"text-center\">Note :</h5>
                        <input class=\"form-control\" type=\"number\" size=\"8px\" min=\"0\" max=\"20\"name=\"text\" placeholder=\"Notez ici\">/20
                    </div>
                </div>
                <div class=\"row align-items-start my-2 mx-auto text-center\">
                    <div class=\"col-12 m-auto\">     
                        <h5 class=\"text-center\">Commentaire :</h5>
                        <textarea class=\"form-control\" rows=\"5\" id=\"comment\" name=\"text\" placeholder=\"Tapez votre commentaire ici\"></textarea>
                    </div>
                </div>
                <div class=\"row align-items-start my-2 mx-auto text-center\">
                    <div class=\"col-12 m-auto\">
                        <button type=\"button\" class=\"boutonForm\">Valider</button>
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
        return "lan/followTraining.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 8,  106 => 7,  94 => 5,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'lan/base.html.twig' %}
{% block title %}Suivi alternane{% endblock %}
{% block myStylesheets %}
        <link rel=\"stylesheet\" href='{{ asset(\"css/follow.css\")}}'>
        <link rel=\"stylesheet\" href='{{ asset(\"css/login.css\")}}'>  
{% endblock %}
{% block body %}
   <div class=\"container\">
        <!-- bandeau -->
        <header class=\"col-12 mx-auto bandeau\">
            <div class=\"container\">
                <div class=\"row align-items-start my-2\">
                  <div class=\"col-4 mx-auto \">
                    <h6 class=\"text-center\">Apprenti : DUPOND Martin</h6>
                    <h6 class=\"text-center\">Formateur : DURAND Sophie</h6>
                  </div>
                  <div class=\"col-4 mx-auto my-auto \">
                    <h2 class=\"text-center\">Suivi alternance</h2>
                    <br>
                    <h4 class=\"text-center my-2\">En Formation</h4>
                  </div>
                  <div class=\"col-4 mx-auto \">
                    <h6 class=\"text-center\">Semaine Du 20/09/2021</h6>
                    <h6 class=\"text-center\">Au 15/03/2022</h6>
                  </div>
                </div> 
            </div>
        </header>
        <main class=\"col-12 mx-auto description\">
        
            <div class=\"container\">
            
                <div class=\"row align-items-start my-2\">
                        <div class=\"col-12 my-2 mx-auto\">
                          <h5 class=\"text-center\">Date de réalisation :</h5>
                          <input type='date' class=\"mx-auto my-2\" >
                        </div>
                </div>
                <div class=\"row align-items-start my-2\">
                    <div class=\"col-12 m-auto\" >
                        <h5 class=\"text-center\">Description / Objectif :</h5>
                        <textarea class=\"form-control\" rows=\"4\" id=\"comment\" name=\"text\" placeholder=\"Définisez les objectifs ici\"></textarea>
                    </div>
                </div>
                <div class=\"row align-items-start my-2\">
                    <div class=\"col-2 m-auto \" >
                        <h5 class=\"text-center\">Note :</h5>
                        <input class=\"form-control\" type=\"number\" size=\"8px\" min=\"0\" max=\"20\"name=\"text\" placeholder=\"Notez ici\">/20
                    </div>
                </div>
                <div class=\"row align-items-start my-2 mx-auto text-center\">
                    <div class=\"col-12 m-auto\">     
                        <h5 class=\"text-center\">Commentaire :</h5>
                        <textarea class=\"form-control\" rows=\"5\" id=\"comment\" name=\"text\" placeholder=\"Tapez votre commentaire ici\"></textarea>
                    </div>
                </div>
                <div class=\"row align-items-start my-2 mx-auto text-center\">
                    <div class=\"col-12 m-auto\">
                        <button type=\"button\" class=\"boutonForm\">Valider</button>
                    </div>
                </div>
            </div>
        </main>
    </div>

{% endblock %}
", "lan/followTraining.html.twig", "/home/dwwm/testSymfo/lan/templates/lan/followTraining.html.twig");
    }
}
