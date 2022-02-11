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

/* lan/menu.html.twig */
class __TwigTemplate_0879f41d29d6e0cbc105e941d5b7a633f2cd5b1bbb89f9e947cd4715bf26496e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/menu.html.twig"));

        // line 1
        echo "\t";
        // line 18
        echo "


        <nav class=\"bar-top navbar navbar-expand-lg navbar-light text-light  \">


        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent \">
            <div class=\"logo-top\">
                <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-foreach-blanc.png"), "html", null, true);
        echo "\">
            </div>

            <ul class=\"navbar-nav me-auto fith100\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link text-light\" href=\"#\">Accueil <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-light\" href=\"#\">L’Ecole</a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle text-light\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Formations Développeur Web
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item text-light\" href=\"#\">DWWM</a>
                    <a class=\"dropdown-item text-light\" href=\"#\">CDA</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item text-light\" href=\"#\">Pizzayolo</a>
                    </div>
                </li>
                
            </ul>
        
            <button class=\"boutonForm my-2 my-sm-0 m-3  \" type=\"submit\">Connexion</button>
           <!-- <button class=\"btn btn-outline-success my-2 my-sm-0 m-3 p-2\" type=\"submit\">Deconnexion</button> -->
          
        </div>
        </nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "lan/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 26,  45 => 18,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\t{#
    \t<div class=\"container-fluid\">
\t\t\t<div class=\" row bar-top\">
\t\t\t\t<img class=\"logo-top ml-3\" src=\"{{ asset('images/logo-foreach-blanc.png') }}\">

\t\t\t\t<div class=\" col-10 menu-top\">
\t\t\t\t\t<ul class=\"ul-fe\">
\t\t\t\t\t\t<li>Accueil</li>
\t\t\t\t\t\t<li>L’Ecole</li>
\t\t\t\t\t\t<li>Actualités</li>
\t\t\t\t\t\t<li>Formations Développeur Web</li>
\t\t\t\t\t\t<li>Contactez-Nous !</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
#}



        <nav class=\"bar-top navbar navbar-expand-lg navbar-light text-light  \">


        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent \">
            <div class=\"logo-top\">
                <img src=\"{{ asset('images/logo-foreach-blanc.png') }}\">
            </div>

            <ul class=\"navbar-nav me-auto fith100\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link text-light\" href=\"#\">Accueil <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-light\" href=\"#\">L’Ecole</a>
                </li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle text-light\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Formations Développeur Web
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <a class=\"dropdown-item text-light\" href=\"#\">DWWM</a>
                    <a class=\"dropdown-item text-light\" href=\"#\">CDA</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item text-light\" href=\"#\">Pizzayolo</a>
                    </div>
                </li>
                
            </ul>
        
            <button class=\"boutonForm my-2 my-sm-0 m-3  \" type=\"submit\">Connexion</button>
           <!-- <button class=\"btn btn-outline-success my-2 my-sm-0 m-3 p-2\" type=\"submit\">Deconnexion</button> -->
          
        </div>
        </nav>
", "lan/menu.html.twig", "/home/dwwm/testSymfo/lan/templates/lan/menu.html.twig");
    }
}
