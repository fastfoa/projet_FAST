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

/* lan/dashBoardSchool.html.twig */
class __TwigTemplate_af040adeeb9836492985c1642a03a80d59e384f27d04b33d3fa15da7de25a01f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/dashBoardSchool.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/dashBoardSchool.html.twig"));

        $this->parent = $this->loadTemplate("lan/base.html.twig", "lan/dashBoardSchool.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Dasboard-FO.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/moi.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid rounded-circle mr-2\"> Alexis Santrain</a>
                    <a href=\"#\" class=\"list-group-item list-group-item-action menu-items active\">
                        <i class=\"fas fa-columns mr-2 fa-lg\"></i>Dashboard</a>
                    <a href=\"#\" class=\"list-group-item list-group-item-action menu-items bleu\">
                        <i class=\"fas fa-thin fa-file mr-2 fa-lg\"></i>Documents</a>
                    <a href=\"#\" class=\"list-group-item list-group-item-action menu-items bleu\">
                        <i class=\"fas fa-solid fa-bars-progress mr-2 fa-lg\"></i>Suivi</a>
                    <a href=\"#\" class=\"list-group-item list-group-item-action menu-items bleu\">
                        <i class=\"fas fa-info mr-2 fa-lg\"></i>Infos Eleves</a>
                    <a href=\"#\" class=\"list-group-item list-group-item-action menu-items bleu\">
                        <i class=\"fas fa-user-cog mr-2 fa-lg\"></i>Mes information</a>
                </div>
                <!-- MAIN CARDS-->
                <div class=\"col-lg-10\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <h2 class=\"text-info\">
                                <small class=\"text-muted\">Foreach-Academy (espace OF)</small>
                            </h2>
                        </div>
                    </div>
                    <div class=\"row inform-cards\">
                        <div class=\" col-sm-7 col-md-5 col-lg-4 p-4\">
                            <div class=\"card text-white my-2 rounded\">
                                <div class=\"card-body carte bg-primary d-flex align-items-center justify-content-between\">
                                    <i class=\"fas fa-users fa-2x\"></i>
                                    <div class=\"inner-text text-center\">
                                        <h3><span class=\"badge vert badge-pill\">21</span> Nombre d'apprenant   </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\" col-sm-7 col-md-5 col-lg-4 p-4\">
                                <div class=\"card text-white my-2 rounded\">
                                    <div class=\"carte card-body bg-primary d-flex align-items-center justify-content-between\">
                                        <i class=\"fas fa-thin fa-file fa-2x\"></i>
                                        <div class=\"inner-text text-center\">
                                            <h3>
                                                <span class=\"badge vert badge-pill\">2 new</span>
                                                <span class=\"badge badge-danger badge-pill\">1 ABS</span>
                                                Document
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class=\" col-sm-7 col-md-5 col-lg-4 p-4\">
                            <div class=\"card text-white my-2 rounded\">
                                <div class=\"carte card-body bg-primary d-flex align-items-center justify-content-between\">
                                    <i class=\"fas fa-thin fa-file fa-2x\"></i>
                                    <div class=\"inner-text text-center\">
                                        <h3>
                                            <span class=\"badge vert badge-pill\">1 session</span>
                                            Formation En cours
                                        </h3>

                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                                <canvas id=\"lineChart\" width=\"400\" height=\"400\"></canvas>
                        </div>
                        <div class=\"col-sm-4\">
                                <canvas id=\"sampleChart\" width=\"400\" height=\"400\"></canvas>
                        </div>
                        <div class=\"col-sm-4\">
                                <canvas id=\"pieChart\" width=\"400\" height=\"400\"></canvas>
                        </div>
                    </div>
                    
                    

                </div>
            </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
        crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\"
        crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\" integrity=\"sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T\"
        crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js\"></script>
        <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/line.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/sample.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/pie.js"), "html", null, true);
        echo "\"></script>

    <script>
        window.addEventListener('load', function () {

            document.querySelector('.navbar-toggler').innerHTML = '<i class=\"fas fa-arrow-down\"></i>';
        })

       
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "lan/dashBoardSchool.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 102,  193 => 101,  189 => 100,  99 => 13,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'lan/base.html.twig' %}

{% block myStylesheets %}
            <link href=\"{{ asset('css/Dasboard-FO.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
{% endblock %}

{% block body %}
    <section id=\"main\">
        <div class=\"container-fluid contenue\">
            <div class=\"row\">
                <div class=\"col-lg-2 dashMenu sidebar d-flex flex-column list-group list-group-flush viewport-max \">
                    <a href=\"#\" class=\"list-group-item list-group-item-action text-center bleu\">
                        <img src=\"{{ asset('images/moi.jpg') }}\" alt=\"\" class=\"img-fluid rounded-circle mr-2\"> Alexis Santrain</a>
                    <a href=\"#\" class=\"list-group-item list-group-item-action menu-items active\">
                        <i class=\"fas fa-columns mr-2 fa-lg\"></i>Dashboard</a>
                    <a href=\"#\" class=\"list-group-item list-group-item-action menu-items bleu\">
                        <i class=\"fas fa-thin fa-file mr-2 fa-lg\"></i>Documents</a>
                    <a href=\"#\" class=\"list-group-item list-group-item-action menu-items bleu\">
                        <i class=\"fas fa-solid fa-bars-progress mr-2 fa-lg\"></i>Suivi</a>
                    <a href=\"#\" class=\"list-group-item list-group-item-action menu-items bleu\">
                        <i class=\"fas fa-info mr-2 fa-lg\"></i>Infos Eleves</a>
                    <a href=\"#\" class=\"list-group-item list-group-item-action menu-items bleu\">
                        <i class=\"fas fa-user-cog mr-2 fa-lg\"></i>Mes information</a>
                </div>
                <!-- MAIN CARDS-->
                <div class=\"col-lg-10\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <h2 class=\"text-info\">
                                <small class=\"text-muted\">Foreach-Academy (espace OF)</small>
                            </h2>
                        </div>
                    </div>
                    <div class=\"row inform-cards\">
                        <div class=\" col-sm-7 col-md-5 col-lg-4 p-4\">
                            <div class=\"card text-white my-2 rounded\">
                                <div class=\"card-body carte bg-primary d-flex align-items-center justify-content-between\">
                                    <i class=\"fas fa-users fa-2x\"></i>
                                    <div class=\"inner-text text-center\">
                                        <h3><span class=\"badge vert badge-pill\">21</span> Nombre d'apprenant   </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\" col-sm-7 col-md-5 col-lg-4 p-4\">
                                <div class=\"card text-white my-2 rounded\">
                                    <div class=\"carte card-body bg-primary d-flex align-items-center justify-content-between\">
                                        <i class=\"fas fa-thin fa-file fa-2x\"></i>
                                        <div class=\"inner-text text-center\">
                                            <h3>
                                                <span class=\"badge vert badge-pill\">2 new</span>
                                                <span class=\"badge badge-danger badge-pill\">1 ABS</span>
                                                Document
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class=\" col-sm-7 col-md-5 col-lg-4 p-4\">
                            <div class=\"card text-white my-2 rounded\">
                                <div class=\"carte card-body bg-primary d-flex align-items-center justify-content-between\">
                                    <i class=\"fas fa-thin fa-file fa-2x\"></i>
                                    <div class=\"inner-text text-center\">
                                        <h3>
                                            <span class=\"badge vert badge-pill\">1 session</span>
                                            Formation En cours
                                        </h3>

                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                                <canvas id=\"lineChart\" width=\"400\" height=\"400\"></canvas>
                        </div>
                        <div class=\"col-sm-4\">
                                <canvas id=\"sampleChart\" width=\"400\" height=\"400\"></canvas>
                        </div>
                        <div class=\"col-sm-4\">
                                <canvas id=\"pieChart\" width=\"400\" height=\"400\"></canvas>
                        </div>
                    </div>
                    
                    

                </div>
            </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
        crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\"
        crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\" integrity=\"sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T\"
        crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js\"></script>
        <script src=\"{{ asset('JS/line.js') }}\"></script>
        <script src=\"{{ asset('JS/sample.js') }}\"></script>
        <script src=\"{{ asset('JS/pie.js') }}\"></script>

    <script>
        window.addEventListener('load', function () {

            document.querySelector('.navbar-toggler').innerHTML = '<i class=\"fas fa-arrow-down\"></i>';
        })

       
    </script>

{% endblock %}
", "lan/dashBoardSchool.html.twig", "/home/dwwm/testSymfo/lan/templates/lan/dashBoardSchool.html.twig");
    }
}
