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

/* lan/GetSkillToBe.html.twig */
class __TwigTemplate_794e023e9711ff226343f5633dd236ab76fd969d08fb31ee59ad01fcf3e4af16 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/GetSkillToBe.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lan/GetSkillToBe.html.twig"));

        $this->parent = $this->loadTemplate("lan/base.html.twig", "lan/GetSkillToBe.html.twig", 1);
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
        <link rel=\"stylesheet\" href='";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/skill.css"), "html", null, true);
        echo "'>   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
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
                    <h4 class=\"text-center my-2\">Savoir Etre</h4>
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
                    <div class=\"col-4 mx-auto\" >
                        <h4 class=\"text-center\">Evaluation</h4>
                        <h5 class=\"text-center\">Assiduité</h5>
                        
                        <fieldset class=\"rate\">
                            <input id=\"rate1-star5\" type=\"radio\" name=\"rate1\" value=\"5\" />
                            <label for=\"rate1-star5\" title=\"Awesome\">5</label>
                        
                            <input id=\"rate1-star5-half\" type=\"radio\" name=\"rate1\" value=\"4.5\" />
                            <label class=\"star-half\" for=\"rate1-star5-half\" title=\"Excellent\">4.5</label>
                        
                            <input id=\"rate1-star4\" type=\"radio\" name=\"rate1\" value=\"4\" />
                            <label for=\"rate1-star4\" title=\"Very good\">4</label>
                        
                            <input id=\"rate1-star3-half\" type=\"radio\" name=\"rate1\" value=\"3.5\" />
                            <label class=\"star-half\" for=\"rate1-star3-half\" title=\"Good\">3.5</label>
                        
                            <input id=\"rate1-star3\" type=\"radio\" name=\"rate1\" value=\"3\" />
                            <label for=\"rate1-star3\" title=\"Satisfactory\">3</label>
                        
                            <input id=\"rate1-star2-half\" type=\"radio\" name=\"rate1\" value=\"2.5\" />
                            <label class=\"star-half\" for=\"rate1-star2-half\" title=\"Unsatisfactory\">2.5</label>
                        
                            <input id=\"rate1-star2\" type=\"radio\" name=\"rate1\" value=\"2\" />
                            <label for=\"rate1-star2\" title=\"Bad\">2</label>
                        
                            <input id=\"rate1-star1-half\" type=\"radio\" name=\"rate1\" value=\"1.5\" />
                            <label class=\"star-half\" for=\"rate1-star1-half\" title=\"Very bad\">1.5</label>
                        
                            <input id=\"rate1-star1\" type=\"radio\" name=\"rate1\" value=\"1\" />
                            <label for=\"rate1-star1\" title=\"Awful\">1</label>
                        
                            <input id=\"rate1-star0-half\" type=\"radio\" name=\"rate1\" value=\"0.5\" />
                            <label class=\"star-half\" for=\"rate1-star0-half\" title=\"Horrific\">0.5</label>
                        </fieldset>
                        
                        <h5 class=\"text-center\">Comportement</h5>
                        
                        <fieldset class=\"rate\">
                            <input id=\"rate1-star5\" type=\"radio\" name=\"rate1\" value=\"5\" />
                            <label for=\"rate1-star5\" title=\"Awesome\">5</label>
                        
                            <input id=\"rate1-star5-half\" type=\"radio\" name=\"rate1\" value=\"4.5\" />
                            <label class=\"star-half\" for=\"rate1-star5-half\" title=\"Excellent\">4.5</label>
                        
                            <input id=\"rate1-star4\" type=\"radio\" name=\"rate1\" value=\"4\" />
                            <label for=\"rate1-star4\" title=\"Very good\">4</label>
                        
                            <input id=\"rate1-star3-half\" type=\"radio\" name=\"rate1\" value=\"3.5\" />
                            <label class=\"star-half\" for=\"rate1-star3-half\" title=\"Good\">3.5</label>
                        
                            <input id=\"rate1-star3\" type=\"radio\" name=\"rate1\" value=\"3\" />
                            <label for=\"rate1-star3\" title=\"Satisfactory\">3</label>
                        
                            <input id=\"rate1-star2-half\" type=\"radio\" name=\"rate1\" value=\"2.5\" />
                            <label class=\"star-half\" for=\"rate1-star2-half\" title=\"Unsatisfactory\">2.5</label>
                        
                            <input id=\"rate1-star2\" type=\"radio\" name=\"rate1\" value=\"2\" />
                            <label for=\"rate1-star2\" title=\"Bad\">2</label>
                        
                            <input id=\"rate1-star1-half\" type=\"radio\" name=\"rate1\" value=\"1.5\" />
                            <label class=\"star-half\" for=\"rate1-star1-half\" title=\"Very bad\">1.5</label>
                        
                            <input id=\"rate1-star1\" type=\"radio\" name=\"rate1\" value=\"1\" />
                            <label for=\"rate1-star1\" title=\"Awful\">1</label>
                        
                            <input id=\"rate1-star0-half\" type=\"radio\" name=\"rate1\" value=\"0.5\" />
                            <label class=\"star-half\" for=\"rate1-star0-half\" title=\"Horrific\">0.5</label>
                        </fieldset>
                        
                        <h5 class=\"text-center\">Communication</h5>
                        
                        <fieldset class=\"rate\">
                            <input id=\"rate1-star5\" type=\"radio\" name=\"rate1\" value=\"5\" />
                            <label for=\"rate1-star5\" title=\"Awesome\">5</label>
                        
                            <input id=\"rate1-star5-half\" type=\"radio\" name=\"rate1\" value=\"4.5\" />
                            <label class=\"star-half\" for=\"rate1-star5-half\" title=\"Excellent\">4.5</label>
                        
                            <input id=\"rate1-star4\" type=\"radio\" name=\"rate1\" value=\"4\" />
                            <label for=\"rate1-star4\" title=\"Very good\">4</label>
                        
                            <input id=\"rate1-star3-half\" type=\"radio\" name=\"rate1\" value=\"3.5\" />
                            <label class=\"star-half\" for=\"rate1-star3-half\" title=\"Good\">3.5</label>
                        
                            <input id=\"rate1-star3\" type=\"radio\" name=\"rate1\" value=\"3\" />
                            <label for=\"rate1-star3\" title=\"Satisfactory\">3</label>
                        
                            <input id=\"rate1-star2-half\" type=\"radio\" name=\"rate1\" value=\"2.5\" />
                            <label class=\"star-half\" for=\"rate1-star2-half\" title=\"Unsatisfactory\">2.5</label>
                        
                            <input id=\"rate1-star2\" type=\"radio\" name=\"rate1\" value=\"2\" />
                            <label for=\"rate1-star2\" title=\"Bad\">2</label>
                        
                            <input id=\"rate1-star1-half\" type=\"radio\" name=\"rate1\" value=\"1.5\" />
                            <label class=\"star-half\" for=\"rate1-star1-half\" title=\"Very bad\">1.5</label>
                        
                            <input id=\"rate1-star1\" type=\"radio\" name=\"rate1\" value=\"1\" />
                            <label for=\"rate1-star1\" title=\"Awful\">1</label>
                        
                            <input id=\"rate1-star0-half\" type=\"radio\" name=\"rate1\" value=\"0.5\" />
                            <label class=\"star-half\" for=\"rate1-star0-half\" title=\"Horrific\">0.5</label>
                        </fieldset>
                       
                        <h5 class=\"text-center\">Prise d'initiative</h5>
                        
                        <fieldset class=\"rate\">
                            <input id=\"rate1-star5\" type=\"radio\" name=\"rate1\" value=\"5\" />
                            <label for=\"rate1-star5\" title=\"Awesome\">5</label>
                        
                            <input id=\"rate1-star5-half\" type=\"radio\" name=\"rate1\" value=\"4.5\" />
                            <label class=\"star-half\" for=\"rate1-star5-half\" title=\"Excellent\">4.5</label>
                        
                            <input id=\"rate1-star4\" type=\"radio\" name=\"rate1\" value=\"4\" />
                            <label for=\"rate1-star4\" title=\"Very good\">4</label>
                        
                            <input id=\"rate1-star3-half\" type=\"radio\" name=\"rate1\" value=\"3.5\" />
                            <label class=\"star-half\" for=\"rate1-star3-half\" title=\"Good\">3.5</label>
                        
                            <input id=\"rate1-star3\" type=\"radio\" name=\"rate1\" value=\"3\" />
                            <label for=\"rate1-star3\" title=\"Satisfactory\">3</label>
                        
                            <input id=\"rate1-star2-half\" type=\"radio\" name=\"rate1\" value=\"2.5\" />
                            <label class=\"star-half\" for=\"rate1-star2-half\" title=\"Unsatisfactory\">2.5</label>
                        
                            <input id=\"rate1-star2\" type=\"radio\" name=\"rate1\" value=\"2\" />
                            <label for=\"rate1-star2\" title=\"Bad\">2</label>
                        
                            <input id=\"rate1-star1-half\" type=\"radio\" name=\"rate1\" value=\"1.5\" />
                            <label class=\"star-half\" for=\"rate1-star1-half\" title=\"Very bad\">1.5</label>
                        
                            <input id=\"rate1-star1\" type=\"radio\" name=\"rate1\" value=\"1\" />
                            <label for=\"rate1-star1\" title=\"Awful\">1</label>
                        
                            <input id=\"rate1-star0-half\" type=\"radio\" name=\"rate1\" value=\"0.5\" />
                            <label class=\"star-half\" for=\"rate1-star0-half\" title=\"Horrific\">0.5</label>
                        </fieldset>
                    </div>
                        <div class=\"col-8 m-auto\" >
                            <h5 class=\"text-center\">Commentaire :</h5>
                            <textarea class=\"form-control\" rows=\"8\" id=\"comment\" name=\"text\" placeholder=\"Tapez votre commentaire ici\"></textarea>
                        </div>
                    <div class=\"col-4 m-auto\">
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
        return "lan/GetSkillToBe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 9,  110 => 8,  98 => 6,  94 => 5,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'lan/base.html.twig' %}
{% block title %}Suivi alternane{% endblock %}
{% block myStylesheets %}
        <link rel=\"stylesheet\" href='{{ asset(\"css/follow.css\")}}'>
        <link rel=\"stylesheet\" href='{{ asset(\"css/login.css\")}}'> 
        <link rel=\"stylesheet\" href='{{ asset(\"css/skill.css\")}}'>   
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
                    <h4 class=\"text-center my-2\">Savoir Etre</h4>
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
                    <div class=\"col-4 mx-auto\" >
                        <h4 class=\"text-center\">Evaluation</h4>
                        <h5 class=\"text-center\">Assiduité</h5>
                        
                        <fieldset class=\"rate\">
                            <input id=\"rate1-star5\" type=\"radio\" name=\"rate1\" value=\"5\" />
                            <label for=\"rate1-star5\" title=\"Awesome\">5</label>
                        
                            <input id=\"rate1-star5-half\" type=\"radio\" name=\"rate1\" value=\"4.5\" />
                            <label class=\"star-half\" for=\"rate1-star5-half\" title=\"Excellent\">4.5</label>
                        
                            <input id=\"rate1-star4\" type=\"radio\" name=\"rate1\" value=\"4\" />
                            <label for=\"rate1-star4\" title=\"Very good\">4</label>
                        
                            <input id=\"rate1-star3-half\" type=\"radio\" name=\"rate1\" value=\"3.5\" />
                            <label class=\"star-half\" for=\"rate1-star3-half\" title=\"Good\">3.5</label>
                        
                            <input id=\"rate1-star3\" type=\"radio\" name=\"rate1\" value=\"3\" />
                            <label for=\"rate1-star3\" title=\"Satisfactory\">3</label>
                        
                            <input id=\"rate1-star2-half\" type=\"radio\" name=\"rate1\" value=\"2.5\" />
                            <label class=\"star-half\" for=\"rate1-star2-half\" title=\"Unsatisfactory\">2.5</label>
                        
                            <input id=\"rate1-star2\" type=\"radio\" name=\"rate1\" value=\"2\" />
                            <label for=\"rate1-star2\" title=\"Bad\">2</label>
                        
                            <input id=\"rate1-star1-half\" type=\"radio\" name=\"rate1\" value=\"1.5\" />
                            <label class=\"star-half\" for=\"rate1-star1-half\" title=\"Very bad\">1.5</label>
                        
                            <input id=\"rate1-star1\" type=\"radio\" name=\"rate1\" value=\"1\" />
                            <label for=\"rate1-star1\" title=\"Awful\">1</label>
                        
                            <input id=\"rate1-star0-half\" type=\"radio\" name=\"rate1\" value=\"0.5\" />
                            <label class=\"star-half\" for=\"rate1-star0-half\" title=\"Horrific\">0.5</label>
                        </fieldset>
                        
                        <h5 class=\"text-center\">Comportement</h5>
                        
                        <fieldset class=\"rate\">
                            <input id=\"rate1-star5\" type=\"radio\" name=\"rate1\" value=\"5\" />
                            <label for=\"rate1-star5\" title=\"Awesome\">5</label>
                        
                            <input id=\"rate1-star5-half\" type=\"radio\" name=\"rate1\" value=\"4.5\" />
                            <label class=\"star-half\" for=\"rate1-star5-half\" title=\"Excellent\">4.5</label>
                        
                            <input id=\"rate1-star4\" type=\"radio\" name=\"rate1\" value=\"4\" />
                            <label for=\"rate1-star4\" title=\"Very good\">4</label>
                        
                            <input id=\"rate1-star3-half\" type=\"radio\" name=\"rate1\" value=\"3.5\" />
                            <label class=\"star-half\" for=\"rate1-star3-half\" title=\"Good\">3.5</label>
                        
                            <input id=\"rate1-star3\" type=\"radio\" name=\"rate1\" value=\"3\" />
                            <label for=\"rate1-star3\" title=\"Satisfactory\">3</label>
                        
                            <input id=\"rate1-star2-half\" type=\"radio\" name=\"rate1\" value=\"2.5\" />
                            <label class=\"star-half\" for=\"rate1-star2-half\" title=\"Unsatisfactory\">2.5</label>
                        
                            <input id=\"rate1-star2\" type=\"radio\" name=\"rate1\" value=\"2\" />
                            <label for=\"rate1-star2\" title=\"Bad\">2</label>
                        
                            <input id=\"rate1-star1-half\" type=\"radio\" name=\"rate1\" value=\"1.5\" />
                            <label class=\"star-half\" for=\"rate1-star1-half\" title=\"Very bad\">1.5</label>
                        
                            <input id=\"rate1-star1\" type=\"radio\" name=\"rate1\" value=\"1\" />
                            <label for=\"rate1-star1\" title=\"Awful\">1</label>
                        
                            <input id=\"rate1-star0-half\" type=\"radio\" name=\"rate1\" value=\"0.5\" />
                            <label class=\"star-half\" for=\"rate1-star0-half\" title=\"Horrific\">0.5</label>
                        </fieldset>
                        
                        <h5 class=\"text-center\">Communication</h5>
                        
                        <fieldset class=\"rate\">
                            <input id=\"rate1-star5\" type=\"radio\" name=\"rate1\" value=\"5\" />
                            <label for=\"rate1-star5\" title=\"Awesome\">5</label>
                        
                            <input id=\"rate1-star5-half\" type=\"radio\" name=\"rate1\" value=\"4.5\" />
                            <label class=\"star-half\" for=\"rate1-star5-half\" title=\"Excellent\">4.5</label>
                        
                            <input id=\"rate1-star4\" type=\"radio\" name=\"rate1\" value=\"4\" />
                            <label for=\"rate1-star4\" title=\"Very good\">4</label>
                        
                            <input id=\"rate1-star3-half\" type=\"radio\" name=\"rate1\" value=\"3.5\" />
                            <label class=\"star-half\" for=\"rate1-star3-half\" title=\"Good\">3.5</label>
                        
                            <input id=\"rate1-star3\" type=\"radio\" name=\"rate1\" value=\"3\" />
                            <label for=\"rate1-star3\" title=\"Satisfactory\">3</label>
                        
                            <input id=\"rate1-star2-half\" type=\"radio\" name=\"rate1\" value=\"2.5\" />
                            <label class=\"star-half\" for=\"rate1-star2-half\" title=\"Unsatisfactory\">2.5</label>
                        
                            <input id=\"rate1-star2\" type=\"radio\" name=\"rate1\" value=\"2\" />
                            <label for=\"rate1-star2\" title=\"Bad\">2</label>
                        
                            <input id=\"rate1-star1-half\" type=\"radio\" name=\"rate1\" value=\"1.5\" />
                            <label class=\"star-half\" for=\"rate1-star1-half\" title=\"Very bad\">1.5</label>
                        
                            <input id=\"rate1-star1\" type=\"radio\" name=\"rate1\" value=\"1\" />
                            <label for=\"rate1-star1\" title=\"Awful\">1</label>
                        
                            <input id=\"rate1-star0-half\" type=\"radio\" name=\"rate1\" value=\"0.5\" />
                            <label class=\"star-half\" for=\"rate1-star0-half\" title=\"Horrific\">0.5</label>
                        </fieldset>
                       
                        <h5 class=\"text-center\">Prise d'initiative</h5>
                        
                        <fieldset class=\"rate\">
                            <input id=\"rate1-star5\" type=\"radio\" name=\"rate1\" value=\"5\" />
                            <label for=\"rate1-star5\" title=\"Awesome\">5</label>
                        
                            <input id=\"rate1-star5-half\" type=\"radio\" name=\"rate1\" value=\"4.5\" />
                            <label class=\"star-half\" for=\"rate1-star5-half\" title=\"Excellent\">4.5</label>
                        
                            <input id=\"rate1-star4\" type=\"radio\" name=\"rate1\" value=\"4\" />
                            <label for=\"rate1-star4\" title=\"Very good\">4</label>
                        
                            <input id=\"rate1-star3-half\" type=\"radio\" name=\"rate1\" value=\"3.5\" />
                            <label class=\"star-half\" for=\"rate1-star3-half\" title=\"Good\">3.5</label>
                        
                            <input id=\"rate1-star3\" type=\"radio\" name=\"rate1\" value=\"3\" />
                            <label for=\"rate1-star3\" title=\"Satisfactory\">3</label>
                        
                            <input id=\"rate1-star2-half\" type=\"radio\" name=\"rate1\" value=\"2.5\" />
                            <label class=\"star-half\" for=\"rate1-star2-half\" title=\"Unsatisfactory\">2.5</label>
                        
                            <input id=\"rate1-star2\" type=\"radio\" name=\"rate1\" value=\"2\" />
                            <label for=\"rate1-star2\" title=\"Bad\">2</label>
                        
                            <input id=\"rate1-star1-half\" type=\"radio\" name=\"rate1\" value=\"1.5\" />
                            <label class=\"star-half\" for=\"rate1-star1-half\" title=\"Very bad\">1.5</label>
                        
                            <input id=\"rate1-star1\" type=\"radio\" name=\"rate1\" value=\"1\" />
                            <label for=\"rate1-star1\" title=\"Awful\">1</label>
                        
                            <input id=\"rate1-star0-half\" type=\"radio\" name=\"rate1\" value=\"0.5\" />
                            <label class=\"star-half\" for=\"rate1-star0-half\" title=\"Horrific\">0.5</label>
                        </fieldset>
                    </div>
                        <div class=\"col-8 m-auto\" >
                            <h5 class=\"text-center\">Commentaire :</h5>
                            <textarea class=\"form-control\" rows=\"8\" id=\"comment\" name=\"text\" placeholder=\"Tapez votre commentaire ici\"></textarea>
                        </div>
                    <div class=\"col-4 m-auto\">
                        <button type=\"button\" class=\"boutonForm\">Valider</button>
       
                    </div>
                    
                </div>
               
            </div>
        </main>
    </div>

{% endblock %}
", "lan/GetSkillToBe.html.twig", "/home/dwwm/testSymfo/lan/templates/lan/GetSkillToBe.html.twig");
    }
}
