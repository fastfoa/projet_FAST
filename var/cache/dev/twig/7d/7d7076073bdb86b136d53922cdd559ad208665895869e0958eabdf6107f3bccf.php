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

/* lan/dashBoardEntrprise.html.twig */
class __TwigTemplate_9237004fa5d6df63c62cc75751bc2276b112c32b1614e9845face80d21a7e25f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/dashBoardEntrprise.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/dashBoardEntrprise.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lan/dashBoardEntrprise.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Dasboard-Entreprise.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
<style>
.text-muted
{
            background-color: white;
            text-align:center;
\t\t\tpadding: 12px 24px;
\t\t\tfont-size: 15px;
\t\t\tmargin-left: 20%;
}

</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "\t<section id=\"main\">
\t\t<div class=\"container-fluid contenue\">
\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t<!-- MAIN CARDS-->
\t\t\t\t<div class=\"col-lg-10\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<h2 class=\"text-info\">
\t\t\t\t\t\t\t\t<imput class=\"text-muted\">Symbol-it (espace Entreprise)</imput>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
                    
\t\t\t\t\t<div class=\"row carte-2 inform-cards\">
\t\t\t\t\t\t<div class=\" col-sm-6 col-md-6 col-lg-4 p-4\">
\t\t\t\t\t\t\t<div class=\"card text-white my-2 rounded\">
\t\t\t\t\t\t\t\t<div class=\"card-body carte bg-primary d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-users fa-2x\"></i>
\t\t\t\t\t\t\t\t\t<div class=\"flip-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box-inner\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box-front\">
                                            <a href=\"http://127.0.0.1:8000/followCompany\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>suivi competence </h4>
                                                </a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                        
\t\t\t\t\t\t<div class=\" col-sm-6 col-md-6 col-lg-4 p-4\">
\t\t\t\t\t\t\t<div class=\"card text-white my-2 rounded\">
\t\t\t\t\t\t\t\t<div class=\"carte card-body bg-primary d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-thin fa-file fa-2x\"></i>
\t\t\t\t\t\t\t\t\t<div class=\"inner-text text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box-front\">
                                                <a href=\"http://127.0.0.1:8000/files\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>Consulter document</h5>
                                                    </a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                        <div class=\" col-sm-6 col-md-6 col-lg-4 p-4\">
\t\t\t\t\t\t\t<div class=\"card text-white my-2 rounded\">
\t\t\t\t\t\t\t\t<div class=\"carte card-body bg-primary d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-thin fa-file fa-2x\"></i>
\t\t\t\t\t\t\t\t\t<div class=\"inner-text text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box-front\">
                                                 <a href=\"http://127.0.0.1:8000/files\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5> Télécharg document</h5>
                                                    </a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><div class=\" col-sm-6 col-md-6 col-lg-4 p-4\">
\t\t\t\t\t\t\t<div class=\"card text-white my-2 rounded\">
\t\t\t\t\t\t\t\t<div class=\"carte card-body bg-primary d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-thin fa-file fa-2x\"></i>
\t\t\t\t\t\t\t\t\t<div class=\"inner-text text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box-front\">
                                                <a href=\"http://127.0.0.1:8000/files\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>Consulter document</h5>
                                                    </a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><div class=\" col-sm-6 col-md-6 col-lg-4 p-4\">
\t\t\t\t\t\t\t<div class=\"card text-white my-2 rounded\">
\t\t\t\t\t\t\t\t<div class=\"carte card-body bg-primary d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-thin fa-file fa-2x\"></i>
\t\t\t\t\t\t\t\t\t<div class=\"inner-text text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box-front\">
                                                <a href=\"http://127.0.0.1:8000/files\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>Consulter document</h5>
                                                    </a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><div class=\" col-sm-6 col-md-6 col-lg-4 p-4\">
\t\t\t\t\t\t\t<div class=\"card text-white my-2 rounded\">
\t\t\t\t\t\t\t\t<div class=\"carte card-body bg-primary d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-thin fa-file fa-2x\"></i>
\t\t\t\t\t\t\t\t\t<div class=\"inner-text text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box-front\">
                                                <a href=\"http://127.0.0.1:8000/files\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>Consulter document</h5>
                                                    </a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>




\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<canvas id=\"lineChart\" width=\"400\" height=\"400\"></canvas>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<canvas id=\"sampleChart\" width=\"400\" height=\"400\"></canvas>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<canvas id=\"pieChart\" width=\"400\" height=\"400\"></canvas>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- Optional JavaScript -->
\t\t<!-- jQuery first, then Popper.js, then Bootstrap JS -->
\t\t<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\" integrity=\"sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js\"></script>
\t\t<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/line.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/sample.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/pie.js"), "html", null, true);
        echo "\"></script>

\t\t<script>
\t\t\twindow.addEventListener('load', function () {

document.querySelector('.navbar-toggler').innerHTML = '<i class=\"fas fa-arrow-down\"></i>';
})
\t\t</script>

\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "lan/dashBoardEntrprise.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 174,  263 => 173,  259 => 172,  103 => 18,  93 => 17,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block myStylesheets %}
\t<link href=\"{{ asset('css/Dasboard-Entreprise.css') }}\" type=\"text/css\" rel=\"stylesheet\"/>
<style>
.text-muted
{
            background-color: white;
            text-align:center;
\t\t\tpadding: 12px 24px;
\t\t\tfont-size: 15px;
\t\t\tmargin-left: 20%;
}

</style>
{% endblock %}
{% block body %}
\t<section id=\"main\">
\t\t<div class=\"container-fluid contenue\">
\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t<!-- MAIN CARDS-->
\t\t\t\t<div class=\"col-lg-10\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<h2 class=\"text-info\">
\t\t\t\t\t\t\t\t<imput class=\"text-muted\">Symbol-it (espace Entreprise)</imput>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
                    
\t\t\t\t\t<div class=\"row carte-2 inform-cards\">
\t\t\t\t\t\t<div class=\" col-sm-6 col-md-6 col-lg-4 p-4\">
\t\t\t\t\t\t\t<div class=\"card text-white my-2 rounded\">
\t\t\t\t\t\t\t\t<div class=\"card-body carte bg-primary d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-users fa-2x\"></i>
\t\t\t\t\t\t\t\t\t<div class=\"flip-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box-inner\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box-front\">
                                            <a href=\"http://127.0.0.1:8000/followCompany\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>suivi competence </h4>
                                                </a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                        
\t\t\t\t\t\t<div class=\" col-sm-6 col-md-6 col-lg-4 p-4\">
\t\t\t\t\t\t\t<div class=\"card text-white my-2 rounded\">
\t\t\t\t\t\t\t\t<div class=\"carte card-body bg-primary d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-thin fa-file fa-2x\"></i>
\t\t\t\t\t\t\t\t\t<div class=\"inner-text text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box-front\">
                                                <a href=\"http://127.0.0.1:8000/files\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>Consulter document</h5>
                                                    </a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                        <div class=\" col-sm-6 col-md-6 col-lg-4 p-4\">
\t\t\t\t\t\t\t<div class=\"card text-white my-2 rounded\">
\t\t\t\t\t\t\t\t<div class=\"carte card-body bg-primary d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-thin fa-file fa-2x\"></i>
\t\t\t\t\t\t\t\t\t<div class=\"inner-text text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box-front\">
                                                 <a href=\"http://127.0.0.1:8000/files\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5> Télécharg document</h5>
                                                    </a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><div class=\" col-sm-6 col-md-6 col-lg-4 p-4\">
\t\t\t\t\t\t\t<div class=\"card text-white my-2 rounded\">
\t\t\t\t\t\t\t\t<div class=\"carte card-body bg-primary d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-thin fa-file fa-2x\"></i>
\t\t\t\t\t\t\t\t\t<div class=\"inner-text text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box-front\">
                                                <a href=\"http://127.0.0.1:8000/files\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>Consulter document</h5>
                                                    </a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><div class=\" col-sm-6 col-md-6 col-lg-4 p-4\">
\t\t\t\t\t\t\t<div class=\"card text-white my-2 rounded\">
\t\t\t\t\t\t\t\t<div class=\"carte card-body bg-primary d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-thin fa-file fa-2x\"></i>
\t\t\t\t\t\t\t\t\t<div class=\"inner-text text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box-front\">
                                                <a href=\"http://127.0.0.1:8000/files\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>Consulter document</h5>
                                                    </a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div><div class=\" col-sm-6 col-md-6 col-lg-4 p-4\">
\t\t\t\t\t\t\t<div class=\"card text-white my-2 rounded\">
\t\t\t\t\t\t\t\t<div class=\"carte card-body bg-primary d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-thin fa-file fa-2x\"></i>
\t\t\t\t\t\t\t\t\t<div class=\"inner-text text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flip-box-front\">
                                                <a href=\"http://127.0.0.1:8000/files\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>Consulter document</h5>
                                                    </a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>




\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<canvas id=\"lineChart\" width=\"400\" height=\"400\"></canvas>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<canvas id=\"sampleChart\" width=\"400\" height=\"400\"></canvas>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<canvas id=\"pieChart\" width=\"400\" height=\"400\"></canvas>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- Optional JavaScript -->
\t\t<!-- jQuery first, then Popper.js, then Bootstrap JS -->
\t\t<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\" integrity=\"sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js\"></script>
\t\t<script src=\"{{ asset('JS/line.js') }}\"></script>
\t\t<script src=\"{{ asset('JS/sample.js') }}\"></script>
\t\t<script src=\"{{ asset('JS/pie.js') }}\"></script>

\t\t<script>
\t\t\twindow.addEventListener('load', function () {

document.querySelector('.navbar-toggler').innerHTML = '<i class=\"fas fa-arrow-down\"></i>';
})
\t\t</script>

\t{% endblock %}
", "lan/dashBoardEntrprise.html.twig", "C:\\wamp64a\\projet_FAST\\templates\\lan\\dashBoardEntrprise.html.twig");
    }
}
