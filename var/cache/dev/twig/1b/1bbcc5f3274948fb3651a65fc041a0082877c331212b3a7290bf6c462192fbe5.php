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

/* lan/aide.html.twig */
class __TwigTemplate_4539117a3eb5a4d42340068889f2ea191483f45316f3547cd92816bb2db62704 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/aide.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/aide.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lan/aide.html.twig", 1);
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

        echo "Aide
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
        echo "
<div class=\"container\">
    <div class=\"row text-center bg-bar\">
        <h4 class=\"text-center\">Tutoriels d'aide</h4>
    </div>

    <div class=\"bg-workSpace\">
      
  
     ";
        // line 18
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_APP")) {
            // line 19
            echo "        
        <a class=\"nav-link\" href=\"#\" style=\"color:black;\">Comment voir mes notes </span>";
            // line 20
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                echo "(Apprenant)";
            }
            echo "</a>
        <a class=\"nav-link\" href=\"#\" style=\"color:black;\">Comment pévenir en cas d'absence </span>";
            // line 21
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                echo "(Apprenant)";
            }
            echo "</a>
        <a class=\"nav-link\" href=\"#\" style=\"color:black;\">Interface</span>";
            // line 22
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                echo "(Apprenant)";
            }
            echo "</a>
    ";
        }
        // line 24
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FORMATEUR")) {
            // line 25
            echo "        <a class=\"nav-link\" href=\"#\" style=\"color:black;\">Comment pévenir en cas d'absence </span>";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                echo "(Apprenant)";
            }
            echo "</a>
        <a class=\"nav-link\" href=\"#\" style=\"color:black;\">Comment noté l'apprenant </span>";
            // line 26
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                echo "(Apprenant)";
            }
            echo "</a>
        <a class=\"nav-link\" href=\"#\" style=\"color:black;\">Interface</span>";
            // line 27
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                echo "(Formateur)";
            }
            echo "</a>
    ";
        }
        // line 29
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MA")) {
            // line 30
            echo "        <a class=\"nav-link\" href=\"#\" style=\"color:black;\">Comment pévenir en cas d'absence </span>";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                echo "(Apprenant)";
            }
            echo "</a>
        <a class=\"nav-link\" href=\"#\" style=\"color:black;\">Comment noté l'apprenant </span>";
            // line 31
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                echo "(Apprenant)";
            }
            echo "</a>
        <a class=\"nav-link\" href=\"#\" style=\"color:black;\">Interface</span>";
            // line 32
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                echo "(Maitre D'apprentissage)";
            }
            echo "</a>
    ";
        }
        // line 34
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ENT")) {
            // line 35
            echo "        <a class=\"nav-link\" href=\"#\" style=\"color:black;\">Comment pévenir en cas d'absence </span>";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                echo "(Apprenant)";
            }
            echo "</a>
        <a class=\"nav-link\" href=\"#\" style=\"color:black;\">Comment noté l'apprenant </span>";
            // line 36
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                echo "(Apprenant)";
            }
            echo "</a>
        <a class=\"nav-link\" href=\"#\" style=\"color:black;\">Interface</span>";
            // line 37
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                echo "(Entreprise)";
            }
            echo "</a>
    ";
        }
        // line 39
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OF")) {
            // line 40
            echo "        <a class=\"nav-link\" href=\"https://webgenius.foreach-academy.fr/\" style=\"color:black;\">Interface</span>";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                echo "(organisme de formation)";
            }
            echo "</a>
    ";
        }
        // line 42
        echo "\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_IND")) {
            // line 43
            echo "        <a class=\"nav-link\" href=\"#\" style=\"color:black;\">Interface</span>";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                echo "(organisme de formation)";
            }
            echo "</a>
    ";
        }
        // line 45
        echo "        <a class=\"nav-link\" href=\"https://www.foreach-academy.fr/\" style=\"color:black;\">Comment Modifier c'est information</span></a>
        <a class=\"nav-link\" href=\"#\" style=\"color:black;\">Comment Conaitre les information Donées et confidentialité</span></a>
        <a class=\"nav-link\" href=\"#\" style=\"color:black;\"></span></a>

    <div class=\"row text-center\">
       </div>  
    </div>
    
</div>          

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "lan/aide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 45,  208 => 43,  205 => 42,  197 => 40,  194 => 39,  187 => 37,  181 => 36,  174 => 35,  171 => 34,  164 => 32,  158 => 31,  151 => 30,  148 => 29,  141 => 27,  135 => 26,  128 => 25,  125 => 24,  118 => 22,  112 => 21,  106 => 20,  103 => 19,  100 => 18,  89 => 8,  79 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Aide
{% endblock title %}


{% block body %}

<div class=\"container\">
    <div class=\"row text-center bg-bar\">
        <h4 class=\"text-center\">Tutoriels d'aide</h4>
    </div>

    <div class=\"bg-workSpace\">
      
  
     {# liens vers les pdf des tutoriels des différentes interface utilisateurs  #}
    {% if is_granted('ROLE_APP') %}
        
        <a class=\"nav-link\" href=\"#\" style=\"color:black;\">Comment voir mes notes </span>{% if is_granted('ROLE_ADMIN') %}(Apprenant){% endif %}</a>
        <a class=\"nav-link\" href=\"#\" style=\"color:black;\">Comment pévenir en cas d'absence </span>{% if is_granted('ROLE_ADMIN') %}(Apprenant){% endif %}</a>
        <a class=\"nav-link\" href=\"#\" style=\"color:black;\">Interface</span>{% if is_granted('ROLE_ADMIN') %}(Apprenant){% endif %}</a>
    {% endif %}
    {% if is_granted('ROLE_FORMATEUR') %}
        <a class=\"nav-link\" href=\"#\" style=\"color:black;\">Comment pévenir en cas d'absence </span>{% if is_granted('ROLE_ADMIN') %}(Apprenant){% endif %}</a>
        <a class=\"nav-link\" href=\"#\" style=\"color:black;\">Comment noté l'apprenant </span>{% if is_granted('ROLE_ADMIN') %}(Apprenant){% endif %}</a>
        <a class=\"nav-link\" href=\"#\" style=\"color:black;\">Interface</span>{% if is_granted('ROLE_ADMIN') %}(Formateur){% endif %}</a>
    {% endif %}
    {% if is_granted('ROLE_MA') %}
        <a class=\"nav-link\" href=\"#\" style=\"color:black;\">Comment pévenir en cas d'absence </span>{% if is_granted('ROLE_ADMIN') %}(Apprenant){% endif %}</a>
        <a class=\"nav-link\" href=\"#\" style=\"color:black;\">Comment noté l'apprenant </span>{% if is_granted('ROLE_ADMIN') %}(Apprenant){% endif %}</a>
        <a class=\"nav-link\" href=\"#\" style=\"color:black;\">Interface</span>{% if is_granted('ROLE_ADMIN') %}(Maitre D'apprentissage){% endif %}</a>
    {% endif %}
    {% if is_granted('ROLE_ENT') %}
        <a class=\"nav-link\" href=\"#\" style=\"color:black;\">Comment pévenir en cas d'absence </span>{% if is_granted('ROLE_ADMIN') %}(Apprenant){% endif %}</a>
        <a class=\"nav-link\" href=\"#\" style=\"color:black;\">Comment noté l'apprenant </span>{% if is_granted('ROLE_ADMIN') %}(Apprenant){% endif %}</a>
        <a class=\"nav-link\" href=\"#\" style=\"color:black;\">Interface</span>{% if is_granted('ROLE_ADMIN') %}(Entreprise){% endif %}</a>
    {% endif %}
    {% if is_granted('ROLE_OF') %}
        <a class=\"nav-link\" href=\"https://webgenius.foreach-academy.fr/\" style=\"color:black;\">Interface</span>{% if is_granted('ROLE_ADMIN') %}(organisme de formation){% endif %}</a>
    {% endif %}
\t{% if is_granted('ROLE_IND') %}
        <a class=\"nav-link\" href=\"#\" style=\"color:black;\">Interface</span>{% if is_granted('ROLE_ADMIN') %}(organisme de formation){% endif %}</a>
    {% endif %}
        <a class=\"nav-link\" href=\"https://www.foreach-academy.fr/\" style=\"color:black;\">Comment Modifier c'est information</span></a>
        <a class=\"nav-link\" href=\"#\" style=\"color:black;\">Comment Conaitre les information Donées et confidentialité</span></a>
        <a class=\"nav-link\" href=\"#\" style=\"color:black;\"></span></a>

    <div class=\"row text-center\">
       </div>  
    </div>
    
</div>          

{% endblock body %}
", "lan/aide.html.twig", "C:\\wamp64a\\projet_FAST\\templates\\lan\\aide.html.twig");
    }
}
