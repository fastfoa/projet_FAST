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

/* profil/profilOF_APP.html.twig */
class __TwigTemplate_8a418ea6438b0a9a4ad37474fb0d065dfb691d069624f7928e0d4d99d967bae4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'myStylesheets' => [$this, 'block_myStylesheets'],
            'myJavascripts' => [$this, 'block_myJavascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/profilOF_APP.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/profilOF_APP.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profil/profilOF_APP.html.twig", 1);
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
        echo "<style>
    .avatar
    {
        width: 100px;
        height: 100px;
    }
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_myJavascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "myJavascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "myJavascripts"));

        // line 15
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    <div class=\"container-fluid\">
    <div class=\"row\">
    <div class=\"col-5\">    

        <h2>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "prenom", [], "any", false, false, false, 25), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), "html", null, true);
        echo " </h2>
        <h5><a href=\"mailto:";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), "html", null, true);
        echo "</a></h5>
        ";
        // line 29
        echo "        <h5>
\t\t\tTelephone :
\t\t\t";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "telephone", [], "any", false, false, false, 31), "html", null, true);
        echo "
\t\t</h5>
\t\t<h5>
\t\t\t";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "adresse", [], "any", false, false, false, 34), "html", null, true);
        echo "
\t\t</h5>
\t\t<h5>
\t\t\tDate de naissance :
\t\t\t";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "dateNaissance", [], "any", false, false, false, 38), "d/m/Y"), "html", null, true);
        echo "
\t\t</h5>
\t\t";
        // line 44
        echo "\t\t<h5>
\t\t\tTravailleur Handicape :
\t\t\t";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "TravailleurHandicape", [], "any", false, false, false, 46), "html", null, true);
        echo "
\t\t</h5>

        <div class=\"bg-info\">
\t\t<h5>
\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-exclamation-triangle\" viewbox=\"0 0 16 16\">
\t\t\t\t ";
        // line 54
        echo "                <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
\t\t\tPersonne a prevenir 1 :
            ";
        // line 56
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "RepresentantLegal1", [], "any", true, true, false, 56)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "RepresentantLegal1", [], "any", false, false, false, 56), "représentant légal 2")) : ("représentant légal 2")), "html", null, true);
        echo "
\t\t</h5>
\t\t<h5>
\t\t\t";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 59, $this->source); })()), "telUrgence1", [], "any", false, false, false, 59), "html", null, true);
        echo "
\t\t</h5>
\t\t<h5>
\t\t\t";
        // line 65
        echo " <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
\t\t\tPersonne a prevenir 2 :
\t\t\t";
        // line 67
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "RepresentantLegal2", [], "any", true, true, false, 67)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "RepresentantLegal2", [], "any", false, false, false, 67), "représentant légal 2")) : ("représentant légal 2")), "html", null, true);
        echo "
\t\t</h5>

\t\t<h5>
\t\t\t";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 71, $this->source); })()), "telUrgence2", [], "any", false, false, false, 71), "html", null, true);
        echo "
\t\t</h5>
\t</div>
    </div> <div class=\"col-2\"></div>
    <div class=\"col-5  \">    
        <img class=\"avatar \" src=\"https://www.transdev-grandest.fr/media/cache/thumbnail/7a7ff92c95467d5b50ab64fe5dbae47b.png\" />
         <a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashEval", ["app" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77)]), "html", null, true);
        echo "\">
        <button class=\"boutonForm mx-5\">EVAL</button>
        </a>
<div class=\"row\">
    <div class=\"col- mt-3\">    
                <h3>Mes documents :</h3>
                <label for=\"listDoc\">Chercher un document :</label>
                <input list=\"documents\" type=\"text\" id=\"listDoc\">
                <datalist id=\"documents\">
                    ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["document"]) || array_key_exists("document", $context) ? $context["document"] : (function () { throw new RuntimeError('Variable "document" does not exist.', 86, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
            // line 87
            echo "                        <option id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doc"], "d_id", [], "any", false, false, false, 87), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doc"], "d_titre", [], "any", false, false, false, 87), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doc"], "d_fileName", [], "any", false, false, false, 87), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                </datalist>
            </div>
            <div class=\"col-4 \">
                <button onclick='seeDoc2(";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 92, $this->source); })()), "html", null, true);
        echo ")' class=\"mt-2\">
                     <i class=\"fas fa-solid fa-info\" style=\"font-size:20px;color:blue;padding:3px 6px 3px 6px;\"></i>
                </button>
                <button onclick='downloadDoc(\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download1");
        echo "\");'>
                    <i class=\"fas fa-solid fa-download\" style=\"font-size:20px;color:green;padding:3px;\"></i>
                </button>
            </div>
                  <div  id='infosDoc' class=\"invisible col-6\" style=\"color:black;background-color:white;height:50pt;overflow:auto;\"></div>

        </div>

</div>



<hr class=\"text-light mt-3\">
 
<div class=\"row 1bg-success\">
\t<div id=\"ma\" class=\"col-5\">
        <h3>Maitre D'apprentissage :</h3>
        ";
        // line 112
        if ((0 === twig_compare((isset($context["ma"]) || array_key_exists("ma", $context) ? $context["ma"] : (function () { throw new RuntimeError('Variable "ma" does not exist.', 112, $this->source); })()), false))) {
            // line 113
            echo "            <h5>Vous n'avez pas de maitre d'apprentissage</h5>
            ";
        } else {
            // line 115
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ma"]) || array_key_exists("ma", $context) ? $context["ma"] : (function () { throw new RuntimeError('Variable "ma" does not exist.', 115, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                echo " 
                <div id=\"supMA\"><h5>nom : ";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "nom", [], "any", false, false, false, 116), "html", null, true);
                echo "</h5> 
                <h5>Prénom : ";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "prenom", [], "any", false, false, false, 117), "html", null, true);
                echo "</h5>
                <h5>Téléphone : ";
                // line 118
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["d"], "telephone", [], "any", false, false, false, 118), "html", null, true);
                echo "</h5>
      <a href=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteMA", ["idMa" => twig_get_attribute($this->env, $this->source, $context["d"], "id", [], "any", false, false, false, 119), "idApp" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 119, $this->source); })()), "id", [], "any", false, false, false, 119)]), "html", null, true);
                echo "\"><img style=\"height:30px;\" src=";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons8-remove-48.png"), "html", null, true);
                echo " alt=\"\">supprimer</a> #} 
               </div>
               ";
                // line 121
                echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, $context["d"], "id", [], "any", false, false, false, 121));
                echo " ";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 121, $this->source); })()), "id", [], "any", false, false, false, 121));
                echo "#}
                <br>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "    
        ";
        }
        // line 125
        echo "       ";
        // line 126
        echo "        <button class=\"boutonForm \" onclick=\"showList()\" style=\"font-size:large; padding:5px 9px 5px 9px;\">Ajouter  maitre d'apprentissage</button>
        <input class=\"invisible\" list=\"maitre\" type=\"text\" id=\"listMa\">
        <datalist  class=\"invisible\" id=\"maitre\"> 
            ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listMa"]) || array_key_exists("listMa", $context) ? $context["listMa"] : (function () { throw new RuntimeError('Variable "listMa" does not exist.', 129, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ma"]) {
            // line 130
            echo "                <option id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ma"], "id", [], "any", false, false, false, 130), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ma"], "nom", [], "any", false, false, false, 130), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ma"], "prenom", [], "any", false, false, false, 130), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ma"], "email", [], "any", false, false, false, 130), "html", null, true);
            echo "</option> 
               ";
            // line 132
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ma'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "            
            
        </datalist>
        <button id=\"validation\" class=\"invisible boutonForm\" onclick='addMa(";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 136, $this->source); })()), "html", null, true);
        echo ")'>
            Ok
        </button>
        <h5 id=\"result\"><h5>
        
      ";
        // line 142
        echo "      <div>  <h3>Entreprise :</h3><h5>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 142, $this->source); })()), "nom", [], "any", false, false, false, 142), "html", null, true);
        echo "</h5>
            <h5>";
        // line 143
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 143, $this->source); })()), "adresse", [], "any", false, false, false, 143), "html", null, true);
        echo "</h5>
            <h5><a href=\"mailto:";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 144, $this->source); })()), "email", [], "any", false, false, false, 144), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 144, $this->source); })()), "email", [], "any", false, false, false, 144), "html", null, true);
        echo "</a></h5>
            <h5><a href=\"tel:";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 145, $this->source); })()), "telephone", [], "any", false, false, false, 145), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entreprise"]) || array_key_exists("entreprise", $context) ? $context["entreprise"] : (function () { throw new RuntimeError('Variable "entreprise" does not exist.', 145, $this->source); })()), "telephone", [], "any", false, false, false, 145), "html", null, true);
        echo "</a></h5></div>
      ";
        // line 147
        echo "        </div> <div class=\"col-2\"></div> 
        <div id=\"formateur\" class=\"col-5\">
            <h3>Formateurs :</h3>
                 ";
        // line 150
        if ((0 === twig_compare((isset($context["listFormateur"]) || array_key_exists("listFormateur", $context) ? $context["listFormateur"] : (function () { throw new RuntimeError('Variable "listFormateur" does not exist.', 150, $this->source); })()), false))) {
            // line 151
            echo "                    <h5>Vous n'avez pas de maitre de formateur</h5>
                 ";
        } else {
            // line 153
            echo "                 ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listFormateur"]) || array_key_exists("listFormateur", $context) ? $context["listFormateur"] : (function () { throw new RuntimeError('Variable "listFormateur" does not exist.', 153, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 154
                echo "                     <h5 class=\"my-0\">Nom : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "nom", [], "any", false, false, false, 154), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "prenom", [], "any", false, false, false, 154), "html", null, true);
                echo "</h5>
                     <h5>email : <a href=\"mailto:";
                // line 155
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "email", [], "any", false, false, false, 155), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "email", [], "any", false, false, false, 155), "html", null, true);
                echo "</a></h5> ";
                // line 156
                echo "                  ";
                // line 157
                echo "                <br>
                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "              ";
        }
        // line 160
        echo "
              
         </div>



     </div>
<hr class=\"text-light mt-3\">
                <h3>Organisme de formation :</h3>
\t\t\t\t\t<h5> Responsable pédagogique : ";
        // line 169
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OF"]) || array_key_exists("OF", $context) ? $context["OF"] : (function () { throw new RuntimeError('Variable "OF" does not exist.', 169, $this->source); })()), "prenom", [], "any", false, false, false, 169), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OF"]) || array_key_exists("OF", $context) ? $context["OF"] : (function () { throw new RuntimeError('Variable "OF" does not exist.', 169, $this->source); })()), "nom", [], "any", false, false, false, 169), "html", null, true);
        echo "</h5>
\t\t\t\t\t<h5></h5>\t\t
\t\t\t\t\t<h5><a href=\"mailto:";
        // line 171
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OF"]) || array_key_exists("OF", $context) ? $context["OF"] : (function () { throw new RuntimeError('Variable "OF" does not exist.', 171, $this->source); })()), "email", [], "any", false, false, false, 171), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OF"]) || array_key_exists("OF", $context) ? $context["OF"] : (function () { throw new RuntimeError('Variable "OF" does not exist.', 171, $this->source); })()), "email", [], "any", false, false, false, 171), "html", null, true);
        echo "</a></h5>\t\t\t\t
\t\t\t\t\t<h5><a href=\"tel:";
        // line 172
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OF"]) || array_key_exists("OF", $context) ? $context["OF"] : (function () { throw new RuntimeError('Variable "OF" does not exist.', 172, $this->source); })()), "telephone", [], "any", false, false, false, 172), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["OF"]) || array_key_exists("OF", $context) ? $context["OF"] : (function () { throw new RuntimeError('Variable "OF" does not exist.', 172, $this->source); })()), "telephone", [], "any", false, false, false, 172), "html", null, true);
        echo "</a></h5>
\t\t\t\t\t<h5>";
        // line 173
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["OF"] ?? null), "adresse", [], "any", true, true, false, 173)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["OF"] ?? null), "adresse", [], "any", false, false, false, 173), "adresse")) : ("adresse")), "html", null, true);
        echo "</h5>

</div>
 

<script>
/*
\$(document).ready(function(){
        \$(\"#btn\").click(function(){
        var conf = confirm(\"êtes-vous sur de vouloir supprimer le Maitre d'apprentissage ?\");
        if (conf){
        \$(\"#supMA\").remove();
       
        }
    });
});             
                    */




    function showList()
    {
        \$(\"#listMa, #maitre, #validation\").removeClass(\"invisible\");
    }

    function addMa(idApp)
    {
        var valueI = \$('#listMa').val();
        var idMa = \$('#maitre option[value=\"' + valueI +'\"]').attr('id');

        \$.get( \"/insertMa/\" + idMa + \"/\" + idApp,
                function(result)
                {
                    \$('#result').html(result);
                    const ma = [];
                    ma.push(valueI);
                }
            );
    }
    

</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profil/profilOF_APP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 173,  442 => 172,  436 => 171,  429 => 169,  418 => 160,  415 => 159,  408 => 157,  406 => 156,  401 => 155,  394 => 154,  389 => 153,  385 => 151,  383 => 150,  378 => 147,  372 => 145,  366 => 144,  362 => 143,  357 => 142,  349 => 136,  344 => 133,  338 => 132,  327 => 130,  323 => 129,  318 => 126,  316 => 125,  312 => 123,  301 => 121,  294 => 119,  290 => 118,  286 => 117,  282 => 116,  275 => 115,  271 => 113,  269 => 112,  249 => 95,  243 => 92,  238 => 89,  225 => 87,  221 => 86,  209 => 77,  200 => 71,  193 => 67,  189 => 65,  183 => 59,  177 => 56,  173 => 54,  164 => 46,  160 => 44,  155 => 38,  148 => 34,  142 => 31,  138 => 29,  132 => 26,  126 => 25,  120 => 21,  110 => 20,  97 => 15,  87 => 14,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block myStylesheets %}
<style>
    .avatar
    {
        width: 100px;
        height: 100px;
    }
</style>
{% endblock myStylesheets %}


{% block myJavascripts %}
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>


{% endblock myJavascripts %}

{% block body %}
    <div class=\"container-fluid\">
    <div class=\"row\">
    <div class=\"col-5\">    

        <h2>{{ user.prenom}} {{user.nom}} </h2>
        <h5><a href=\"mailto:{{user.email}}\">{{user.email}}</a></h5>
        {#<h5> {{user.linkedin|default('pas de LinkeIn')}} </h5>
        <h5> {{user.siteWebPro|default('pas de web pro')}} </h5> #}
        <h5>
\t\t\tTelephone :
\t\t\t{{user.telephone}}
\t\t</h5>
\t\t<h5>
\t\t\t{{user.adresse}}
\t\t</h5>
\t\t<h5>
\t\t\tDate de naissance :
\t\t\t{{user.dateNaissance|date(\"d/m/Y\")}}
\t\t</h5>
\t\t{# <h5>
\t\t\tGitHub :
\t\t\t{{user.github}}
\t\t</h5> #}
\t\t<h5>
\t\t\tTravailleur Handicape :
\t\t\t{{user.TravailleurHandicape}}
\t\t</h5>

        <div class=\"bg-info\">
\t\t<h5>
\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-exclamation-triangle\" viewbox=\"0 0 16 16\">
\t\t\t\t {# <path d=\"M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z\"/>
\t\t\t\t<path d=\"M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z\"/></svg> #}
                <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
\t\t\tPersonne a prevenir 1 :
            {{user.RepresentantLegal1|default('représentant légal 2')}}
\t\t</h5>
\t\t<h5>
\t\t\t{{user.telUrgence1}}
\t\t</h5>
\t\t<h5>
\t\t\t{# <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-exclamation-triangle\" viewbox=\"0 0 16 16\">
\t\t\t\t<path d=\"M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z\"/>
\t\t\t\t<path d=\"M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z\"/>
\t\t\t</svg> #} <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
\t\t\tPersonne a prevenir 2 :
\t\t\t{{user.RepresentantLegal2|default('représentant légal 2')}}
\t\t</h5>

\t\t<h5>
\t\t\t{{user.telUrgence2}}
\t\t</h5>
\t</div>
    </div> <div class=\"col-2\"></div>
    <div class=\"col-5  \">    
        <img class=\"avatar \" src=\"https://www.transdev-grandest.fr/media/cache/thumbnail/7a7ff92c95467d5b50ab64fe5dbae47b.png\" />
         <a href=\"{{ path( 'dashEval',{'app':user.id } ) }}\">
        <button class=\"boutonForm mx-5\">EVAL</button>
        </a>
<div class=\"row\">
    <div class=\"col- mt-3\">    
                <h3>Mes documents :</h3>
                <label for=\"listDoc\">Chercher un document :</label>
                <input list=\"documents\" type=\"text\" id=\"listDoc\">
                <datalist id=\"documents\">
                    {% for doc in document %}
                        <option id=\"{{doc.d_id}}\" value=\"{{doc.d_titre}}\">{{doc.d_fileName}}</option>
                    {% endfor %}
                </datalist>
            </div>
            <div class=\"col-4 \">
                <button onclick='seeDoc2({{id}})' class=\"mt-2\">
                     <i class=\"fas fa-solid fa-info\" style=\"font-size:20px;color:blue;padding:3px 6px 3px 6px;\"></i>
                </button>
                <button onclick='downloadDoc(\"{{ path('download1') }}\");'>
                    <i class=\"fas fa-solid fa-download\" style=\"font-size:20px;color:green;padding:3px;\"></i>
                </button>
            </div>
                  <div  id='infosDoc' class=\"invisible col-6\" style=\"color:black;background-color:white;height:50pt;overflow:auto;\"></div>

        </div>

</div>



<hr class=\"text-light mt-3\">
 
<div class=\"row 1bg-success\">
\t<div id=\"ma\" class=\"col-5\">
        <h3>Maitre D'apprentissage :</h3>
        {% if ma == false %}
            <h5>Vous n'avez pas de maitre d'apprentissage</h5>
            {% else %}
                {% for d in ma %} 
                <div id=\"supMA\"><h5>nom : {{ d.nom }}</h5> 
                <h5>Prénom : {{d.prenom}}</h5>
                <h5>Téléphone : {{d.telephone}}</h5>
      <a href=\"{{path('deleteMA',{'idMa':d.id,'idApp':user.id} )}}\"><img style=\"height:30px;\" src={{asset(\"images/icons8-remove-48.png\")}} alt=\"\">supprimer</a> #} 
               </div>
               {{dump(d.id)}} {{dump(user.id)}}#}
                <br>
                {% endfor %}    
        {% endif %}
       {#<button id=\"btn\" type=\"button\" onclick='{{path('deleteMA',{'id':ma.id} )}}' class=\"btn btn-warning  text-white mb-2\" style=\"font-size:large; padding:5px 9px 5px 9px;\">Supprimer maitre d'apprentissage</button> #}
        <button class=\"boutonForm \" onclick=\"showList()\" style=\"font-size:large; padding:5px 9px 5px 9px;\">Ajouter  maitre d'apprentissage</button>
        <input class=\"invisible\" list=\"maitre\" type=\"text\" id=\"listMa\">
        <datalist  class=\"invisible\" id=\"maitre\"> 
            {% for ma in listMa %}
                <option id=\"{{ma.id}}\" value=\"{{ma.nom}}  {{ma.prenom}}\">{{ma.email}}</option> 
               {# {{dump(ma.id)}} {{dump(user.id)}} #}
            {% endfor %}
            
            
        </datalist>
        <button id=\"validation\" class=\"invisible boutonForm\" onclick='addMa({{id}})'>
            Ok
        </button>
        <h5 id=\"result\"><h5>
        
      {#  {% if ma is defined %} #}
      <div>  <h3>Entreprise :</h3><h5>{{ entreprise.nom }}</h5>
            <h5>{{ entreprise.adresse }}</h5>
            <h5><a href=\"mailto:{{ entreprise.email }}\">{{ entreprise.email }}</a></h5>
            <h5><a href=\"tel:{{ entreprise.telephone }}\">{{ entreprise.telephone }}</a></h5></div>
      {#  {% endif %}  #}
        </div> <div class=\"col-2\"></div> 
        <div id=\"formateur\" class=\"col-5\">
            <h3>Formateurs :</h3>
                 {% if listFormateur == false %}
                    <h5>Vous n'avez pas de maitre de formateur</h5>
                 {% else %}
                 {% for e in listFormateur %}
                     <h5 class=\"my-0\">Nom : {{e.nom}} {{e.prenom}}</h5>
                     <h5>email : <a href=\"mailto:{{e.email}}\">{{e.email}}</a></h5> {# <hr class=\"text-light\"> #}
                  {# <h5>Téléphone : {{e.etelephone}}</h5> #}
                <br>
                 {% endfor %}
              {% endif %}

              
         </div>



     </div>
<hr class=\"text-light mt-3\">
                <h3>Organisme de formation :</h3>
\t\t\t\t\t<h5> Responsable pédagogique : {{ OF.prenom }} {{ OF.nom }}</h5>
\t\t\t\t\t<h5></h5>\t\t
\t\t\t\t\t<h5><a href=\"mailto:{{ OF.email }}\">{{ OF.email }}</a></h5>\t\t\t\t
\t\t\t\t\t<h5><a href=\"tel:{{ OF.telephone }}\">{{ OF.telephone }}</a></h5>
\t\t\t\t\t<h5>{{ OF.adresse|default('adresse') }}</h5>

</div>
 

<script>
/*
\$(document).ready(function(){
        \$(\"#btn\").click(function(){
        var conf = confirm(\"êtes-vous sur de vouloir supprimer le Maitre d'apprentissage ?\");
        if (conf){
        \$(\"#supMA\").remove();
       
        }
    });
});             
                    */




    function showList()
    {
        \$(\"#listMa, #maitre, #validation\").removeClass(\"invisible\");
    }

    function addMa(idApp)
    {
        var valueI = \$('#listMa').val();
        var idMa = \$('#maitre option[value=\"' + valueI +'\"]').attr('id');

        \$.get( \"/insertMa/\" + idMa + \"/\" + idApp,
                function(result)
                {
                    \$('#result').html(result);
                    const ma = [];
                    ma.push(valueI);
                }
            );
    }
    

</script>
{% endblock body %}
", "profil/profilOF_APP.html.twig", "C:\\wamp64a\\projet_FAST\\templates\\profil\\profilOF_APP.html.twig");
    }
}
