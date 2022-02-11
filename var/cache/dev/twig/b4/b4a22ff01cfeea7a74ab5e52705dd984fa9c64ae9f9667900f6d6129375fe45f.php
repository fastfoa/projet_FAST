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

/* document/downloadlist.html.twig */
class __TwigTemplate_67b3662325ae44d84016f67ed854fdb34223c27ac6b9b4abdd6f77d515cf6250 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'myStylesheets' => [$this, 'block_myStylesheets'],
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "document/downloadlist.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "document/downloadlist.html.twig"));

        $this->parent = $this->loadTemplate("lan/base.html.twig", "document/downloadlist.html.twig", 1);
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
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Documents.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "UPLOAD FICHIER";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "\t<section id=\"main\">
\t\t<div class=\"container-fluid contenue\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-2 dashMenu sidebar d-flex flex-column list-group list-group-flush viewport-max \">
\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action text-center bleu\">
\t\t\t\t\t\t<img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/olivier.jpeg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid rounded-circle mr-2\">
\t\t\t\t\t\tOlivier Carlier</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action menu-items bleu\">
\t\t\t\t\t\t<i class=\"fas fa-columns mr-2 fa-lg\"></i>Dashboard</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action menu-items  active\">
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
\t\t\t<div class=\"row\">
               
\t\t\t\t<div class=\"col\"> 
                        <h2 class=\"text-info my-2\">
                            <small class=\"text-muted\">Documents</small>
                            
                        </h2>
                        <br>
                        
                        <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("upload");
        echo "\"><button class=\"btn btn-success my-2\">+ Ajouter un document</button></a>
                        <br>
\t\t\t\t    <table class=\"demo\">
\t                    <thead>
\t                        <tr>
                                <th>Date</th>
                                <th>Nom du document\t</th>
                                <th>classe</th>
                                <th>Format document</th>
\t                        </tr>
\t                    </thead>
\t                    <tbody>
                            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listUp"]) || array_key_exists("listUp", $context) ? $context["listUp"] : (function () { throw new RuntimeError('Variable "listUp" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 59
            echo "                            <tr>
                                <td>10/02/2022</td>
                                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "titre", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                                <td>Alternance 1er Année</td> 
                                <td><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download", ["id" => twig_get_attribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\"><button class=\"btn btn-success\"><i class=\"fas fa-file-pdf\" style=\"font-size:20px;color:red;\"></i> Telechargement</button></a></td>
\t                        </tr>   
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "\t                    </tbody>
                    </table>
                    <br>\t
                </div>
\t\t\t</div>
        </div>
    </section>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "document/downloadlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 66,  179 => 63,  174 => 61,  170 => 59,  166 => 58,  151 => 46,  122 => 20,  115 => 15,  105 => 14,  86 => 10,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'lan/base.html.twig' %}

{% block myStylesheets %}
\t<link href=\"{{ asset('css/Documents.css') }}\" type=\"text/css\" rel=\"stylesheet\"/>
<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">


{% endblock %}

    {% block title %}UPLOAD FICHIER{% endblock %}



{% block body %}
\t<section id=\"main\">
\t\t<div class=\"container-fluid contenue\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-2 dashMenu sidebar d-flex flex-column list-group list-group-flush viewport-max \">
\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action text-center bleu\">
\t\t\t\t\t\t<img src=\"{{ asset('images/olivier.jpeg') }}\" alt=\"\" class=\"img-fluid rounded-circle mr-2\">
\t\t\t\t\t\tOlivier Carlier</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action menu-items bleu\">
\t\t\t\t\t\t<i class=\"fas fa-columns mr-2 fa-lg\"></i>Dashboard</a>
\t\t\t\t\t<a href=\"#\" class=\"list-group-item list-group-item-action menu-items  active\">
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
\t\t\t<div class=\"row\">
               
\t\t\t\t<div class=\"col\"> 
                        <h2 class=\"text-info my-2\">
                            <small class=\"text-muted\">Documents</small>
                            
                        </h2>
                        <br>
                        
                        <a href=\"{{ path( 'upload') }}\"><button class=\"btn btn-success my-2\">+ Ajouter un document</button></a>
                        <br>
\t\t\t\t    <table class=\"demo\">
\t                    <thead>
\t                        <tr>
                                <th>Date</th>
                                <th>Nom du document\t</th>
                                <th>classe</th>
                                <th>Format document</th>
\t                        </tr>
\t                    </thead>
\t                    <tbody>
                            {% for document in listUp %}
                            <tr>
                                <td>10/02/2022</td>
                                <td>{{document.titre}}</td>
                                <td>Alternance 1er Année</td> 
                                <td><a href=\"{{ path( 'download',{'id':document.id} ) }}\"><button class=\"btn btn-success\"><i class=\"fas fa-file-pdf\" style=\"font-size:20px;color:red;\"></i> Telechargement</button></a></td>
\t                        </tr>   
                            {% endfor %}
\t                    </tbody>
                    </table>
                    <br>\t
                </div>
\t\t\t</div>
        </div>
    </section>
</div>
{% endblock %}



", "document/downloadlist.html.twig", "/home/dwwm/testSymfo/lan/templates/document/downloadlist.html.twig");
    }
}
